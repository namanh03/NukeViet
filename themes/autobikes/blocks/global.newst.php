<?php

if (!defined('NV_MAINFILE')) die('Stop!!!');

function nv_block_config_newest($module, $data_block, $lang_block)
{
    return [];
}

function nv_block_config_newest_submit($module, $lang_block)
{
    $return = [];
    $return['error'] = [];
    $return['config'] = [];
    return $return;
}

function nv_block_newest($block_config)
{
    global $db, $global_config;

    // Lấy 4 bài viết mới nhất
    $sql = "SELECT id, title, alias, homeimgfile, publtime, catid
            FROM " . NV_PREFIXLANG . "_news_rows
            WHERE status=1
            ORDER BY publtime DESC
            LIMIT 4";
    $result = $db->query($sql);

    $items = [];
    while ($row = $result->fetch()) {
        $row['link'] = NV_BASE_SITEURL . "index.php?" . NV_LANG_VARIABLE . "=" . NV_LANG_DATA
                    . "&" . NV_NAME_VARIABLE . "=news"
                    . "&" . NV_OP_VARIABLE . "=" . $row['alias'];

        // Xử lý ảnh đại diện
        if (!empty($row['homeimgfile']) and file_exists(NV_UPLOADS_REAL_DIR . '/news/' . $row['homeimgfile'])) {
            $row['thumb'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . "/news/" . $row['homeimgfile'];
        } else {
            $row['thumb'] = NV_BASE_SITEURL . "themes/" . $global_config['site_theme'] . "/images/no-image.jpg";
        }

        $items[] = $row;
    }

    if (empty($items)) return '';

    // HTML block
    $html = '<div class="block-newest">';
    $html .= '<div class="block-title"><h2>MỚI NHẤT</h2></div>';
    $html .= '<div class="block-content">';

    foreach ($items as $row) {
        $html .= '
        <div class="article">
            <a class="article-image" href="' . $row['link'] . '">
                <img src="' . $row['thumb'] . '" alt="' . $row['title'] . '">
            </a>
            <div class="article-info">
                <a class="article-cat" href="#">TIN MỚI</a>
                <h3 class="article-title">
                    <a href="' . $row['link'] . '">' . $row['title'] . '</a>
                </h3>
            </div>
        </div>';
    }

    $html .= '</div></div>';
    return $html;
}

if (defined('NV_SYSTEM')) {
    $content = nv_block_newest($block_config);
}
