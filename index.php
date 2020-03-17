<?php

$x = 5;
// if ($x) {
if ($x == true) {
  echo "great";
}

// 三項演算子
$a = 5;
$b = 10;
$max = ($a > $b) ? $a : $b;
var_dump($max);
echo "10と出力されれば成功";

?>