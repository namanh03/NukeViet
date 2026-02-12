<?php
if (!defined('NV_IS_MOD_NEWS')) die('Stop!!!');

$sql = "SELECT id,title,alias,catid 
FROM " . NV_PREFIXLANG . "_" . $module_data . "_rows 
ORDER BY hitstotal DESC 
LIMIT 5";

$result = $db->query($sql);

$content = '<div class="docnhieu-block">';
$content .= '<div class="docnhieu-title">ĐỌC NHIỀU</div>';

while($row = $result->fetch()){

    $link = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA
        . '&' . NV_NAME_VARIABLE . '=' . $module_name
        . '&' . NV_OP_VARIABLE . '=detail/' . $row['alias'] . '-' . $row['id'];

    $content .= '
    <div class="docnhieu-item">
        <a href="'.$link.'">'.$row['title'].'</a>
    </div>';
}

$content .= '</div>';

$content .= '
<style>
.docnhieu-block{
    padding:0;
    margin:0;
}

.docnhieu-title{
    color:red;
    font-weight:bold;
    font-size:20px;
    margin:0 0 10px 0;
    padding:0;
    border:none; 
}

.docnhieu-item{
    margin:0 0 12px 0;
    padding:0;
    border:none;
}

.docnhieu-item a{
    color:#000;
    font-weight:bold;
    font-size:15px;
    text-decoration:none;
    display:block;
    padding:0;
    margin:0;
}

.docnhieu-item a:hover{
    color:red;
}

</style>
';

return $content;
?>
