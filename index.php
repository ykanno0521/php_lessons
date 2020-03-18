<?php

// require: fatal error　その場で処理が終了する
// require_once
// require "User.class.php";

// include: warning　処理は続行
// include_once

// onceがついているとファイルが読み込まれているかをphpがチェックしてくれる

// autoload
spl_autoload_register(function($class) {
  require $class . ".class.php";
});

$bob = new User("Bob");
$bob->sayHi();
?>
