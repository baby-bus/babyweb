<?php
//
header('Content-Type: text/html; charset=utf-8');
define('APP_NAME','../../fr');
define('APP_PATH','../../fr/');
define('THINK_PATH','../../ThinkPHP/');
 //开启调试模式
define('APP_DEBUG', true);
define('LANG','fr');
define("WEB_URL", "http://".$_SERVER['HTTP_HOST']);
define('APP_URL', "http://b-fr.baby-bus.com/");
define('LOGO_URL', 'http://ba-fr.baby-bus.com/img/fr/');
require THINK_PATH.'/ThinkPHP.php';
?>