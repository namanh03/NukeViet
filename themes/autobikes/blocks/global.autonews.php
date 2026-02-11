<?php
if (!defined('NV_MAINFILE')) die('Stop!!!');

global $db, $module_data, $module_name;

function getNews($catid){
    global $db, $module_data;

    $sql = "SELECT id,title,alias,homeimgfile 
            FROM " . NV_PREFIXLANG . "_" . $module_data . "_rows 
            WHERE status=1 AND catid=".$catid."
            ORDER BY publtime DESC LIMIT 3";

    $result = $db->query($sql);
    $data=[];
    while($row=$result->fetch()){
        $data[]=$row;
    }
    return $data;
}

$oto = getNews(2);      // đổi id ô tô
$xemay = getNews(2);    // đổi id xe máy

$content='
<style>
.auto-flex{display:flex;gap:30px}
.auto-col{width:50%}
.auto-title{font-size:24px;font-weight:bold;color:red;margin-bottom:10px}

.big img{width:100%;height:220px;object-fit:cover}
.big a{font-size:18px;font-weight:bold;text-decoration:none;color:#000}

.small{display:flex;gap:10px;margin-top:12px}
.small img{width:150px !important;height:85px !important;object-fit:cover}
.small a{text-decoration:none;color:#003366;font-weight:500}
.panel-heading{
    display:none !important;
}
    .panel{
    border:none !important;
    box-shadow:none !important;
    background:none !important;
}
    
</style>

<div class="auto-flex">
';

# ===== Ô TÔ =====
$content.='<div class="auto-col"><div class="auto-title">Ô TÔ</div>';

if(isset($oto[0])){
$link = NV_BASE_SITEURL."index.php?".NV_NAME_VARIABLE."=news&".NV_OP_VARIABLE."=".$oto[0]['alias']."-".$oto[0]['id'];
$img = NV_BASE_SITEURL.NV_UPLOADS_DIR."/".$module_name."/".$oto[0]['homeimgfile'];

$content.='<div class="big">
<img src="'.$img.'">
<br>
<a href="'.$link.'">'.$oto[0]['title'].'</a>
</div>';
}

for($i=1;$i<3;$i++){
if(isset($oto[$i])){
$link = NV_BASE_SITEURL."index.php?".NV_NAME_VARIABLE."=news&".NV_OP_VARIABLE."=".$oto[$i]['alias']."-".$oto[$i]['id'];
$img = NV_BASE_SITEURL.NV_UPLOADS_DIR."/".$module_name."/".$oto[$i]['homeimgfile'];

$content.='
<div class="small">
<img src="'.$img.'">
<a href="'.$link.'">'.$oto[$i]['title'].'</a>
</div>';
}
}

$content.='</div>';

# ===== XE MÁY =====
$content.='<div class="auto-col"><div class="auto-title">XE MÁY</div>';

if(isset($xemay[0])){
$link = NV_BASE_SITEURL."index.php?".NV_NAME_VARIABLE."=news&".NV_OP_VARIABLE."=".$xemay[0]['alias']."-".$xemay[0]['id'];
$img = NV_BASE_SITEURL.NV_UPLOADS_DIR."/".$module_name."/".$xemay[0]['homeimgfile'];

$content.='<div class="big">
<img src="'.$img.'">
<br>
<a href="'.$link.'">'.$xemay[0]['title'].'</a>
</div>';
}

for($i=1;$i<3;$i++){
if(isset($xemay[$i])){
$link = NV_BASE_SITEURL."index.php?".NV_NAME_VARIABLE."=news&".NV_OP_VARIABLE."=".$xemay[$i]['alias']."-".$xemay[$i]['id'];
$img = NV_BASE_SITEURL.NV_UPLOADS_DIR."/".$module_name."/".$xemay[$i]['homeimgfile'];

$content.='
<div class="small">
<img src="'.$img.'">
<a href="'.$link.'">'.$xemay[$i]['title'].'</a>
</div>';
}
}

$content.='</div>';
$content.='</div>';
?>