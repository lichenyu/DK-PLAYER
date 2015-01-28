<?php
$listArr = array();
$listArr[0] = "邓紫棋－后会无期.mp3";
$listArr[1] = "邓紫棋－喜欢你.mp3";
$listArr[2] = "朴树－平凡之路.mp3";

$jsonStr = json_encode($listArr);

header("Content-Type: text/html; charset=UTF-8");

echo $jsonStr;
?>