<?php
//
header('Content-Type: text/html; charset=utf-8');

define('APP_NAME','../../ja');
define('APP_PATH','../../ja/');
define('THINK_PATH','../../ThinkPHP/');
 //开启调试模式
define('APP_DEBUG', true);
define('LANG','ja');
define("WEB_URL", "http://".$_SERVER['HTTP_HOST']);
define('APP_URL', "http://b-ja.baby-bus.com/");
define('LOGO_URL', 'http://ba-ja.baby-bus.com/img/ko/');
require THINK_PATH.'/ThinkPHP.php';




?>