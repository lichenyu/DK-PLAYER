<?php
$listArr = array();
$listArr[0] = new stdClass();
$listArr[0]->name = "邓紫棋－后会无期";
$listArr[0]->src = "后会无期.mp3";
$listArr[1] = new stdClass();
$listArr[1]->name = "邓紫棋－喜欢你";
$listArr[1]->src = "喜欢你.mp3";
$listArr[2] = new stdClass();
$listArr[2]->name = "朴树－平凡之路";
$listArr[2]->src = "平凡之路.mp3";

$srcinfo = new stdClass();
$srcinfo->srcdir = "musics/";
$srcinfo->srclist = $listArr;

$jsonStr = json_encode($srcinfo);

header("Content-Type: text/html; charset=UTF-8");

echo $jsonStr;
?>