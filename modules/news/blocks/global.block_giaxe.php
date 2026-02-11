<?php
if (!defined('NV_MAINFILE')) die('Stop!!!');

$content = "";

$sql = "SELECT id, title, alias, homeimgfile, catid 
FROM " . NV_PREFIXLANG . "_news_rows 
WHERE status=1 
ORDER BY publtime DESC 
LIMIT 5";

$result = $db->query($sql);

$content .= '<div class="giaxe-block">';
$content .= '<h2 class="giaxe-title">GIÁ XE</h2>';

while ($row = $result->fetch()) {

    $link = NV_BASE_SITEURL . "index.php?" . NV_LANG_VARIABLE . "=" . NV_LANG_DATA
        . "&" . NV_NAME_VARIABLE . "=news&" . NV_OP_VARIABLE . "=" . $row['alias'] . "-" . $row['id'];

    $img = NV_BASE_SITEURL . NV_UPLOADS_DIR . "/news/" . $row['homeimgfile'];

    $content .= '
    <div class="giaxe-item">
        <img src="'.$img.'" class="giaxe-img">
        <a href="'.$link.'" class="giaxe-text">'.$row['title'].'</a>
    </div>';
}

$content .= '</div>';

$content .= '
<style>
.giaxe-block{
    margin-top:0;
}

.giaxe-title{
    color:red;
    font-size:18px;      /* chữ GIÁ XE nhỏ lại */
    font-weight:bold;
    margin:0 0 8px 0;    /* sát đầu dòng */
    padding:0;
    text-align:left;     /* nằm sát trái */
}

.giaxe-item{
    display:flex;
    align-items:flex-start;
    margin-bottom:10px;
}

.giaxe-img{
    width:80px;          /* ảnh 80px */
    height:60px;
    object-fit:cover;
    margin-right:8px;
}

.giaxe-text{
    font-weight:bold;
    font-size:14px;
    color:#000;
    text-decoration:none;
    line-height:1.3;
}

.giaxe-text:hover{
    color:red;
}
</style>
';