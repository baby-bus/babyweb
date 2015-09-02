<?php
header("Content-Type:text/html;charset=utf8");
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
function isWeixin(){ 
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    $is_weixin = strpos($agent, 'micromessenger') ? true : false ;   
    if($is_weixin){
        return true;
    }else{
        return false;
    }
}
switch (device()){
	case "iphone":
		$url = "https://itunes.apple.com/cn/app/fu-mu-jiao-liu-zhong-xin-bao/id468891240?mt=8";
		break;
	case "ipad":
		$url = "https://itunes.apple.com/cn/app/fu-mu-jiao-liu-zhong-xinhd/id633348098?mt=8";
		break;
	case "ipod":
		$url = "https://itunes.apple.com/cn/app/fu-mu-jiao-liu-zhong-xin-bao/id468891240?mt=8";
		break;
	case "android":
		$url = "http://shouji.360tpcdn.com/140730/6faaed3b56f449e7f7412a78b8d1c574/com.sinyee.babybus.usercenter_8.apk";
		if(isWeixin()){
			$url = "http://url.cn/PlxEfN";
		}
		break;
	default:
		$url = "https://itunes.apple.com/cn/app/fu-mu-jiao-liu-zhong-xin-bao/id468891240?mt=8";
		break;	
}
header("Location:$url");