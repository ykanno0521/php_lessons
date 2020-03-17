<?php

// よく使う関数

$x = 5.6;
echo ceil($x); //小数点以下を切り上げる
echo '<br>';
echo floor($x); //小数点以下切り捨て
echo '<br>';
echo round($x); //四捨五入
echo '<br>';
echo rand(1,10); //　ランダムに出力
echo '<br>';


$s1 = "hello";
$s2 = "ねこ";
echo strlen($s1); //文字列
echo '<br>';
echo mb_strlen($s2); //日本語文字列
echo '<br>';

printf("%s - %s - %.3f", $s1, $s2, $x );

