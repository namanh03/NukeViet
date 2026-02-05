<?php

if (!defined('NV_MAINFILE')) {
    die('Stop!!!');
}

if (!nv_function_exists('nv_block_tindocnhieu_thunghiem')) {
    function nv_block_tindocnhieu_thunghiem($block_config)
    {
        global $nv_Cache, $db, $module_info, $site_mods;

        $module = $block_config['module'];
        $numrow = isset($block_config['numrow']) ? intval($block_config['numrow']) : 5;
        $showimage = isset($block_config['showimage']) ? intval($block_config['showimage']) : 1;
        $catid = isset($block_config['catid']) ? intval($block_config['catid']) : 0;
        $time_limit = isset($block_config['time_limit']) ? intval($block_config['time_limit']) : 0;

        if (!isset($site_mods[$module])) {
            return '';
        }

        $module_data = $site_mods[$module]['module_data'];
        $module_upload = $site_mods[$module]['module_upload'];
        $module_table = NV_PREFIXLANG . '_' . $module_data . '_rows';

        // Điều kiện truy vấn theo khoảng thời gian
        $where = 'status=1';
        if ($catid > 0) {
            $where .= ' AND catid=' . $catid;
        }

        if ($time_limit > 0) {
            $time_start = NV_CURRENTTIME - ($time_limit * 86400);
            $where .= ' AND publtime >= ' . $time_start;
        }

        // Truy vấn tin đọc nhiều nhất
        $sql = "SELECT id, title, alias, hitstotal, homeimgfile, homeimgthumb 
                FROM " . $module_table . " 
                WHERE " . $where . " 
                ORDER BY hitstotal DESC 
                LIMIT " . $numrow;

        $list = $db->query($sql)->fetchAll();

        if (empty($list)) {
            return '<div style="color:red;">Không có dữ liệu phù hợp.</div>';
        }

        // HTML hiển thị
        $content = '<div class="top-view-block">';
        foreach ($list as $row) {
            $link = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&'
                . NV_NAME_VARIABLE . '=' . $module . '&' . NV_OP_VARIABLE . '=' . $row['alias'];

            // Ảnh
            $img_src = '';
            if ($showimage) {
                if (!empty($row['homeimgthumb']) && file_exists(NV_ROOTDIR . '/' . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $row['homeimgthumb'])) {
                    $img_src = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $row['homeimgthumb'];
                } elseif (!empty($row['homeimgfile']) && file_exists(NV_ROOTDIR . '/' . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $row['homeimgfile'])) {
                    $img_src = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $row['homeimgfile'];
                } else {
                    $img_src = NV_BASE_SITEURL . 'themes/' . $module_info['template'] . '/images/news/no-image.jpg';
                }
            }

            $content .= '
            <div class="top-item"
                style="display:flex; align-items:flex-start; margin-bottom:10px; border-bottom:1px solid #eee; padding-bottom:8px;">
                ' . ($showimage ? '<a href="' . $link . '" style="flex-shrink:0; margin-right:10px;">
                    <img src="' . $img_src . '" alt="' . nv_htmlspecialchars($row['title']) . '" 
                         style="width:80px;height:55px;object-fit:cover;border-radius:4px;">
                </a>' : '') . '
                <div style="flex:1;">
                    <a href="' . $link . '" 
                       style="font-weight:bold; display:block; margin-bottom:3px; line-height:1.3;">' 
                       . nv_htmlspecialchars($row['title']) . '</a>
                    <div style="font-size:12px;color:#666;">Lượt xem: ' . number_format($row['hitstotal']) . '</div>
                </div>
            </div>';
        }
        $content .= '</div>';
        return $content;
    }

    // Form cấu hình block
    function nv_block_config_tindocnhieu_thunghiem($module, $data_block, $lang_block)
    {
        global $nv_Cache, $site_mods;

        $html  = '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">Số lượng tin lấy ra:</label>';
        $html .= '<div class="col-sm-18"><input type="number" name="config_numrow" value="' . $data_block['numrow'] . '" class="form-control w200" /></div>';
        $html .= '</div>';

        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">Khoảng thời gian (ngày):</label>';
        $html .= '<div class="col-sm-18"><select name="config_time_range" class="form-control w200">';

        $options = [
            0 => 'Tất cả',
            1 => '1 ngày',
            7 => '1 tuần',
            14 => '2 tuần',
            30 => '1 tháng'
        ];

        foreach ($options as $key => $val) {
            $sel = ($data_block['time_range'] == $key) ? 'selected' : '';
            $html .= '<option value="' . $key . '" ' . $sel . '>' . $val . '</option>';
        }

        $html .= '</select></div>';
        $html .= '</div>';

        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">Lấy ảnh đại diện:</label>';
        $checked = ($data_block['showimage']) ? 'checked="checked"' : '';
        $html .= '<div class="col-sm-18"><input type="checkbox" name="config_showimage" value="1" ' . $checked . ' /></div>';
        $html .= '</div>';

        // Chọn chuyên mục
        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">Chọn chuyên mục:</label>';
        $sql = 'SELECT catid, title FROM ' . NV_PREFIXLANG . '_' . $site_mods[$module]['module_data'] . '_cat ORDER BY sort ASC';
        $list = $nv_Cache->db($sql, 'catid', $module);
        $html .= '<div class="col-sm-18"><select name="config_catid" class="form-control w200">';
        $html .= '<option value="0">-- Tất cả chuyên mục --</option>';
        foreach ($list as $row) {
            $sel = ($data_block['catid'] == $row['catid']) ? 'selected' : '';
            $html .= '<option value="' . $row['catid'] . '" ' . $sel . '>' . $row['title'] . '</option>';
        }
        $html .= '</select></div>';
        $html .= '</div>';

        return $html;
    }

    // Lưu cấu hình block
    function nv_block_config_tindocnhieu_thunghiem_submit($module, $lang_block)
    {
        $return = [];
        $return['error'] = [];
        $return['config'] = [];
        $return['config']['numrow'] = isset($_POST['config_numrow']) ? intval($_POST['config_numrow']) : 5;
        $return['config']['showimage'] = isset($_POST['config_showimage']) ? 1 : 0;
        $return['config']['time_limit'] = isset($_POST['config_time_limit']) ? intval($_POST['config_time_limit']) : 0;
        $return['config']['catid'] = isset($_POST['config_catid']) ? intval($_POST['config_catid']) : 0;
        return $return;
    }
}

if (defined('NV_SYSTEM')) {
    $content = nv_block_tindocnhieu_thunghiem($block_config);
}
