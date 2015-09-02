<?php
header("Content-Type:text/html;charset=utf8");
//function lang(){
// $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4); //只取前4位，这样只判断最优先的语言。如果取前5位，可能出现en,zh的情况，影响判断。 
//if (preg_match("/zh-c/i", $lang)) 
//
//echo "简体中文"; 
//
// else if (preg_match("/zh/i", $lang)) 
//
// echo "繁體中文"; 
//
// else if (preg_match("/en/i", $lang)) 
//
// echo "English"; 
//
// else if (preg_match("/fr/i", $lang)) 
//
// echo "French"; 
//
// else if (preg_match("/de/i", $lang)) 
//
// echo "German"; 
//
// else if (preg_match("/jp/i", $lang)) 
//
// echo "Japanese"; 
//
// else if (preg_match("/ko/i", $lang)) 
//
// echo "Korean"; 
//
// else if (preg_match("/es/i", $lang)) 
//
// echo "Spanish"; 
//
// else if (preg_match("/sv/i", $lang)) 
//
// echo "Swedish"; 
//
// else echo $_SERVER["HTTP_ACCEPT_LANGUAGE"]; 
//}
function lang(){
 $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4); //只取前4位，这样只判断最优先的语言。如果取前5位，可能出现en,zh的情况，影响判断。 
 if (preg_match("/zh-c/i", $lang)) 
 	return true;
 else if (preg_match("/zh/i", $lang)) 
	 return true; 
}
function device(){
	$agent = strtolower($_SERVER['HTTP_USER_AGENT']);  
	$device = "";
	$is_pc = (strpos($agent, 'windows nt')) ? true : false;  
	$is_iphone = (strpos($agent, 'iphone')) ? true : false;  
	$is_ipad = (strpos($agent, 'ipad')) ? true : false;  
	$is_android = (strpos($agent, 'android')) ? true : false;  
	$is_ipod = (strpos($agent, 'ipod')) ? true : false;  
	if (strpos($agent, 'iphone')){
		$device = "iphone";
	}elseif (strpos($agent, 'ipad')){
		$device = "ipad";
	}elseif (strpos($agent, 'ipod')){
		$device = "ipod";
	}elseif (strpos($agent, 'android')){
		$device = "android";
	}elseif (strpos($agent, 'windows nt')){
		$device = "pc";
	}
	return $device;
}
switch (device()){
	case "iphone":
		$url = "https://itunes.apple.com/cn/artist/babybus/id654666096";
		break;
	case "ipad":
		$url = "https://itunes.apple.com/cn/artist/babybus/id654666096";
		break;
	case "ipod":
		$url = "https://itunes.apple.com/cn/artist/babybus/id654666096";
		break;
	case "android":
		$url = "https://play.google.com/store/search?q=babybus&c=apps";
		//$url = "http://www.baidu.com";
		if(lang()){
		  $url = "http://cn.babybus.com/product/showDownList";
		}
		break;
	default:
		$url = "http://en.babybus.com";
		if(lang()){
		  $url = "http://cn.babybus.com";
		}
		break;	
}
header("Location:$url");