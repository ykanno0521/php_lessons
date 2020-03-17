<?php

// swich　条件分岐

$signals = array("red", "blue", "yellow");
$signal = array_rand($signals);

echo $signal;
switch ($signal) {
  case "red":
    echo "stop!";
    break;
  case "blue":
    echo "go!";
    break;
  case "yellow":
    echo "caution!";
    break;
  default:
    echo "wrong signal!";
    break;
}
?>