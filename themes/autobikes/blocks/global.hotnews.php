<?php

if (!defined('NV_MAINFILE')) die('Stop!!!');

function nv_block_config_hotnews($module, $data_block, $lang_block)
{
    return [];
}

function nv_block_config_hotnews_submit($module, $lang_block)
{
    $return = [];
    $return['error'] = [];
    $return['config'] = [];
    return $return;
}

function nv_block_hotnews($block_config)
{
    global $db, $global_config;

    // Lấy 4 tin mới nhất trong module news
    $sql = "SELECT id, title, alias, homeimgfile, publtime 
            FROM " . NV_PREFIXLANG . "_news_rows 
            WHERE status=1 
            ORDER BY publtime DESC 
            LIMIT 4";

    $result = $db->query($sql);
    $items = [];

    while ($row = $result->fetch()) {
        $row['link'] = NV_BASE_SITEURL . "index.php?" . NV_LANG_VARIABLE . "=" . NV_LANG_DATA .
                       "&" . NV_NAME_VARIABLE . "=news" .
                       "&" . NV_OP_VARIABLE . "=" . $row['alias'];

        // Ảnh đại diện
        if (!empty($row['homeimgfile']) and file_exists(NV_UPLOADS_REAL_DIR . '/news/' . $row['homeimgfile'])) {
            $row['thumb'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . "/news/" . $row['homeimgfile'];
        } else {
            $row['thumb'] = NV_BASE_SITEURL . "themes/" . $global_config['site_theme'] . "/images/no-image.jpg";
        }

        $row['publtime'] = nv_date('H:i d/m/Y', $row['publtime']);
        $items[] = $row;
    }

    if (empty($items)) return '';

    // HTML
    $html = '<div class="hotnews">';

    // Tin lớn
    $main = array_shift($items);
    $html .= '
        <div class="hotnews-main">
            <a href="' . $main['link'] . '">
                <img src="' . $main['thumb'] . '" alt="' . $main['title'] . '">
                <div class="overlay">
                    <h2>' . $main['title'] . '</h2>
                    <span>' . $main['publtime'] . '</span>
                </div>
            </a>
        </div>';

    // 3 tin nhỏ
    $html .= '<div class="hotnews-list">';
    foreach ($items as $row) {
        $html .= '
            <div class="hotnews-item">
                <a href="' . $row['link'] . '">
                    <img src="' . $row['thumb'] . '" alt="' . $row['title'] . '">
                    <div class="overlay">
                        <h4>' . $row['title'] . '</h4>
                    </div>
                </a>
            </div>';
    }
    $html .= '</div></div>';

    return $html;
}

if (defined('NV_SYSTEM')) {
    $content = nv_block_hotnews($block_config);
}
?>
