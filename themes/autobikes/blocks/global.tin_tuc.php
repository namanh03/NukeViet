<?php

if (!defined('NV_MAINFILE')) die('Stop!!!');

function nv_block_config_tintuc($module, $data_block, $lang_block)
{
    return [];
}

function nv_block_config_tintuc_submit($module, $lang_block)
{
    return ['error' => [], 'config' => []];
}

function nv_block_tintuc($block_config)
{
    global $db, $global_config;

    // Lấy 5 tin mới nhất
    $sql = "SELECT id, title, alias, homeimgfile, hometext, catid
            FROM " . NV_PREFIXLANG . "_news_rows
            WHERE status=1
            ORDER BY publtime DESC
            LIMIT 5";
    $result = $db->query($sql);

    $articles = [];
    while ($row = $result->fetch()) {
        $row['link'] = NV_BASE_SITEURL . "index.php?" . NV_LANG_VARIABLE . "=" . NV_LANG_DATA
                     . "&" . NV_NAME_VARIABLE . "=news"
                     . "&" . NV_OP_VARIABLE . "=" . $row['alias'];

        // Ảnh đại diện
        if (!empty($row['homeimgfile']) && file_exists(NV_UPLOADS_REAL_DIR . '/news/' . $row['homeimgfile'])) {
            $row['thumb'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . "/news/" . $row['homeimgfile'];
        } else {
            $row['thumb'] = NV_BASE_SITEURL . "themes/" . $global_config['site_theme'] . "/images/no-image.jpg";
        }

        $articles[] = $row;
    }

    if (empty($articles)) return '';

    // Bắt đầu HTML block
    $html = '<div class="block-tintuc" style="margin-top:10px; margin-bottom:10px;">';
    $html .= '<div class="block-title"><h2>TIN TỨC</h2></div>';
    $html .= '<div class="news-grid">';

    // === Tin lớn bên trái ===
    $first = array_shift($articles);
    $html .= '
    <div class="news-left">
        <a href="' . $first['link'] . '">
            <img src="' . $first['thumb'] . '" alt="' . $first['title'] . '">
        </a>
        <div class="news-left-content">
            <h3><a href="' . $first['link'] . '">' . $first['title'] . '</a></h3>
            <p>' . nv_clean60(strip_tags($first['hometext']), 120) . '</p>
        </div>
    </div>';

    // === 4 tin nhỏ bên phải ===
    $html .= '<div class="news-right">';
    foreach ($articles as $row) {
        $html .= '
        <div class="news-item">
            <img src="' . $row['thumb'] . '" alt="' . $row['title'] . '">
            <div class="news-item-content">
                <h4><a href="' . $row['link'] . '">' . $row['title'] . '</a></h4>
            </div>
        </div>';
    }
    $html .= '</div>'; // end .news-right
    $html .= '</div></div>'; // end .news-grid + .block-tintuc

    return $html;
}

if (defined('NV_SYSTEM')) {
    $content = nv_block_tintuc($block_config);
}
?>