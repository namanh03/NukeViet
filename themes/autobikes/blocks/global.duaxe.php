<?php
if (!defined('NV_MAINFILE')) die('Stop!!!');

function nv_block_duaxe($block_config)
{
    global $db, $global_config;

    $sql = "SELECT id,title,alias,homeimgfile,hometext
            FROM " . NV_PREFIXLANG . "_news_rows
            WHERE status=1
            ORDER BY publtime DESC
            LIMIT 5";

    $result = $db->query($sql);

    $list = [];
    while ($row = $result->fetch()) {

        $row['link'] = NV_BASE_SITEURL . "index.php?"
        . NV_LANG_VARIABLE . "=" . NV_LANG_DATA
        . "&" . NV_NAME_VARIABLE . "=news"
        . "&" . NV_OP_VARIABLE . "=" . $row['alias'];

        if (!empty($row['homeimgfile']) 
        && file_exists(NV_UPLOADS_REAL_DIR . '/news/' . $row['homeimgfile'])) {
            $row['thumb'] = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/news/' . $row['homeimgfile'];
        } else {
            $row['thumb'] = NV_BASE_SITEURL . 'themes/' 
            . $global_config['site_theme'] . '/images/no-image.jpg';
        }

        $list[] = $row;
    }

    if (count($list) < 1) return '';

    $html = '<div class="block-danhgiaxe">';
    $html .= '<div class="block-title"><h2>ĐUA XE</h2></div>';
    $html .= '<div class="dg-grid">';

    // tin to
    $first = $list[0];
    $html .= '
    <div class="dg-left">
        <a href="'.$first['link'].'">
            <img src="'.$first['thumb'].'">
        </a>
        <div class="dg-left-content">
            <h3><a href="'.$first['link'].'">'.$first['title'].'</a></h3>
            <p>'.nv_clean60(strip_tags($first['hometext']),120).'</p>
        </div>
    </div>';

    // tin nhỏ
    $html .= '<div class="dg-right">';
    for ($i=1;$i<count($list);$i++){
        $row = $list[$i];

        $html .= '
        <div class="dg-item">
            <img src="'.$row['thumb'].'">
            <div>
                <h4><a href="'.$row['link'].'">'.$row['title'].'</a></h4>
            </div>
        </div>';
    }
    $html .= '</div></div></div>';

    return $html;
}

if (defined('NV_SYSTEM')) {
    $content = nv_block_duaxe($block_config);
}
?>
