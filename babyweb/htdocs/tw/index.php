<?php
//
header('Content-Type: text/html; charset=utf-8');

define('APP_NAME','../../tw');
define('APP_PATH','../../tw/');
define('THINK_PATH','../../ThinkPHP/');
 //开启调试模式
define('APP_DEBUG', true);
define('LANG','zh-Hant');
define("WEB_URL", "http://".$_SERVER['HTTP_HOST']);
define('APP_URL', "http://b-zh-Hant.baby-bus.com/");
define('LOGO_URL', 'http://ba-zh-hant.baby-bus.com/img/zh-Hant/');
require THINK_PATH.'/ThinkPHP.php';




?>