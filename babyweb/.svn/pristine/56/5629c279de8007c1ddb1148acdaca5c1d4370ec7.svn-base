<?php
$languages = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		$lang = explode(",",$languages);
		$pre_lang=explode("-",$lang[0]);
		$type = $_GET['type'];
		if($type == '1'){
			redirect("http://huodong.baby-bus.com/api.php?s=/Index/goHome");
		}else{
			switch (strtolower($pre_lang[0])){
				case "ja":
					header("Location:http://ja.baby-bus.com/");
					break;
	
				case "en":
					header("Location:http://en.baby-bus.com/");
					break;
				
				case "zh":
					switch ($lang[0]){
						case "zh-CN":
							if(strstr($_SERVER['HTTP_HOST'],"babybus.com")){
								header("Location:http://cn.babybus.com/");		
							}else{
								header("Location:http://cn.baby-bus.com/");			
							}	
							
							break;
						case "zh-Hant":
							header("Location:http://tw.baby-bus.com/");		
							break;
						case "zh-tw":
							header("Location:http://tw.baby-bus.com/");
							break;
						case "zh-hk":
							header("Location:http://tw.baby-bus.com/");
							break;
						case "zh-SG":
							if(strstr($_SERVER['HTTP_HOST'],"babybus.com")){
								header("Location:http://cn.babybus.com/");		
							}else{
								header("Location:http://cn.baby-bus.com/");			
							}	
							break;
						case "zh-Hans":
							if(strstr($_SERVER['HTTP_HOST'],"babybus.com")){
									header("Location:http://cn.babybus.com/");		
								}else{
									header("Location:http://cn.baby-bus.com/");			
							}	
							break;
						case "zh-MO":
							header("Location:http://tw.baby-bus.com/");
							break;
						default:
							if(strstr($_SERVER['HTTP_HOST'],"babybus.com")){
									header("Location:http://cn.babybus.com/");		
								}else{
									header("Location:http://cn.baby-bus.com/");			
							}
							break;
						}
					break;
				case "fr":
					header("Location:http://fr.baby-bus.com/");
					break;
				case "ru":
					header("Location:http://ru.baby-bus.com/");
					break;
				case "ar":
					header("Location:http://ar.baby-bus.com/");
					break;
				case "ko":
					header("Location:http://ko.baby-bus.com/");
					break;
				case "de":
					header("Location:http://de.baby-bus.com/");
					break;
				default:
					header("Location:http://en.baby-bus.com/");
					break;
			}
		}

?>