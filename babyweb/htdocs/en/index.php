<?php
//
header('Content-Type: text/html; charset=utf-8');

define('APP_NAME','../../en');
define('APP_PATH','../../en/');
define('THINK_PATH','../../ThinkPHP/');
 //开启调试模式
define('APP_DEBUG', true);
define('LANG','en');
define("WEB_URL", "http://".$_SERVER['HTTP_HOST']);
define('APP_URL', "http://b-en.baby-bus.com/");
define('LOGO_URL', 'http://ba-en.baby-bus.com/img/en/');
require THINK_PATH.'/ThinkPHP.php';




?>