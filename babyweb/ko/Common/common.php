<?php
function parseParams($params){
	$p=explode("\n",$params);
	$r=array();
	foreach ($p as $v){
		$tmp=explode('=',$v);
		$r[$tmp[0]]=$tmp[1];
	}
	return $r;
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
function is_ios(){
	switch (device()){
		case "iphone":
			return true;
		case "ipod":
			return true;
		case "ipad":
			return true;
	}
	return false;
}
function is_android(){
	if(device()=="android") return true;
	return false;
}
function get_jobs($job=false){
	$model = M('website_jobs');
	$where['lang'] = Lang;
	$result = $model->field('id,job_name')->where($where)->select();

	$select = "<select class='form-control form-control2' name='job'>";
	foreach ($result as $res){
		$select .= "<option value='".$res['job_name']."'>".$res['job_name']."</option>";
	}
    $select .= "</select>";
   	
    return $select;
}
function upload($data=array(),$savePath,$ext){
	foreach($_FILES as $file){
        $files   = $file['tmp_name']; //临时文件
        $info    = getimagesize($file['tmp_name']);
        $error = $file['error'];
        if($error==1){
        	$data['error'] = "上传限制";
        }
    }
    if($files){
		import("ORG.Net.UploadFile");
	    $upload = new UploadFile();
	    $upload->allowExts  = $ext;
	    //$upload->maxSize = 2048*100;
	    $upload->savePath= $savePath;
	    if(!$upload->upload()){
	       	$data['error'] = $upload->getErrorMsg(); 
	    }else{
	        $info = $upload->getUploadFileInfo();
	        $info[0]['savepath'] = str_replace('.',"",$info[0]['savepath']);//转换路径
		    $data['upload_url']   = $info[0]['savepath'].$info[0]['savename'];//存储原图
	   }
    }
   	return $data;
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
	}else{
		$device = "pc";
	}
	return $device;
}
function show_down($android,$cell_android,$iphone,$ipad){
	switch (device()){
		case "android":
			if($cell_android){
				$down = '<p class="device-icon"><span><a href="'.$cell_android.'" target="_blank"><img src="__PUBLIC__/images/product/android.png"></a></span></p>';
			}else{
				$down = '<p class="device-icon"><span><img src="__PUBLIC__/images/product/waitfor.png"></span></p>';
			}
			break;
		case "ipad":
			if($ipad){
				$down = '<p class="device-icon"><span><a href="'.$ipad.'" target="_blank" data-original-title=""><img src="__PUBLIC__/images/product/apptree.png"></a></span></p>';
			}else{
				$down = '<p class="device-icon"><span><img src="__PUBLIC__/images/product/waitfor.png"></span></p>';
			}
			
			break;
		case "iphone":
		case "ipod":
			if($iphone){
				$down = '<p class="device-icon"><span><a href="'.$iphone.'" target="_blank" data-original-title=""><img src="__PUBLIC__/images/product/apptree.png"></a></span></p>';
			}else{
				$down = '<p class="device-icon"><span><img src="__PUBLIC__/images/product/waitfor.png"></span></p>';
			}
			break;
		default:
			$down .= "<p class='icon'>";
			if($android){
				$down .= '<span><a href="'.$android.'" target="_blank" data-original-title="안드로이드 다운로드" ><img src="__PUBLIC__/images/product/icon_05.png"></a></span>';
			}
			if($iphone){
				$down .= '<span><a href="'.$iphone.'" target="_blank" data-original-title="아이폰 다운로드"><img src="__PUBLIC__/images/product/icon_06.png"></a></span>';
			}
			if($ipad){
				$down .= '<span><a href="'.$ipad.'" target="_blank" data-original-title="아이패드 다운로드"><img src="__PUBLIC__/images/product/icon_07.png"></a></span>';	
			}
			$down .= "</p>";		
	}
	return $down;
}
function show_parent_down(){
		switch (device()){
		case "android":
			$down = '<li><a href="http://shouji.360tpcdn.com/140730/6faaed3b56f449e7f7412a78b8d1c574/com.sinyee.babybus.usercenter_8.apk" target="_blank" ><img class="img-responsive" src="__PUBLIC__/images/product/fm_android.png"/></a></li>';
			break;
		case "ipad":
			$down = '<li><a href="https://itunes.apple.com/cn/app/fu-mu-jiao-liu-zhong-xinhd/id633348098?mt=8" target="_blank" ><img class="img-responsive" src="__PUBLIC__/images/product/fm_ipad.png"/></a></li>';
			break;
		case "iphone":
		case "ipod":
			$down = '<li><a href="https://itunes.apple.com/cn/app/fu-mu-jiao-liu-zhong-xin-bao/id468891240?mt=8" target="_blank"><img class="img-responsive" src="__PUBLIC__/images/product/fm_iphone.png"/></a></li>';
			break;
		default:
			$down .= '<li><a href="https://itunes.apple.com/cn/app/fu-mu-jiao-liu-zhong-xinhd/id633348098?mt=8" target="_blank" title="父母中心iPad版"><img class="img-responsive" src="__PUBLIC__/images/product/fm_ipad.png"/></a></li>';
			$down .= '<li><a href="https://itunes.apple.com/cn/app/fu-mu-jiao-liu-zhong-xin-bao/id468891240?mt=8" target="_blank" title="父母中心iPhone版"><img class="img-responsive" src="__PUBLIC__/images/product/fm_iphone.png"/></a></li>';
			$down .= '<li><a href="http://apk.hiapk.com/appinfo/com.sinyee.babybus.usercenter" target="_blank" title="父母中心安卓版"><img class="img-responsive" src="__PUBLIC__/images/product/fm_android.png"/></a></li>';
	}
	return $down;
}
function log_record($word) {
    $fp = fopen("log.txt","a");
    flock($fp, LOCK_EX) ;
    fwrite($fp,"执行日期：".strftime("%Y%m%d%H%M%S",time())."\n".$word."\n");
    flock($fp, LOCK_UN);
    fclose($fp);
}
?>