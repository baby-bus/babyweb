<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"><meta name="description" content="宝宝巴士结合不同年龄阶段的早教重点设计了启蒙站和探索站两个系列，通过寓教于乐的方式达到启蒙益智的目的。完善的知识体系框架，全方面培养宝宝能力，打造宝宝成长好伙伴。"><meta name="keywords" content="宝宝巴士,宝贝巴士,BabyBus,启蒙,启蒙教育,在线教育,宝宝学数字,宝宝学ABC,儿童软件,儿童应用,移动早教,熊猫,早教,幼教,宝宝学形状"><meta name="author" content="宝宝巴士（福建）网络科技有限公司"><link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet"><link rel="apple-touch-icon-precomposed" href="<?php echo WEB_URL;?>/favicon.png"><!--[if lt IE 9]><script src="__PUBLIC__/js/respons/ie8-responsive-file-warning.js"></script><![endif]--><!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --><!--[if lt IE 9]><script src="__PUBLIC__/js/respons/html5shiv.js"></script><script src="__PUBLIC__/js/respons/respond.min.js"></script><![endif]--><script src="__PUBLIC__/js/jquery.min.js"></script><link href="__PUBLIC__/css/public.css" rel="stylesheet"><style type="text/css">
			body{
				background:url('__PUBLIC__/images/boxvideo/video_bg.png') #7ee1f8;
			}
			.product_two .box .imgradius {
			border-radius: 4px;
			}
			.product_two .box {
				padding: 5px;
				border-radius: 15px;
				border:none;
				background: #fff;
				box-shadow: 0px 2px 2px #5CB4EA;
				}
			.product_two .box .imgradius {
			border-radius: 15px;
			}
			.product_two .box h1 {
				font-size: 14px;
				text-align: center;
				color: #28a2e1;
				margin: 5px 0;
				white-space:nowrap; 
	            overflow:hidden; 
	            text-overflow:ellipsis;
				}
			.col-xs-6,.col-xs-12{
				padding-right: 5px;
				padding-left: 5px;
			}
			.actGotops {
			position: fixed;
			display: none;
			right: 10px;
			bottom: 15px;
			z-index: 9999;
			width: 40px;
			background: none;
			}
			.actGotops a{
				display: block;
				width: 80px;
				height: 80px;
				float: left;
				margin-left: 10px;
			}
			#infscr-loading {
			margin-bottom: 40px;
			}
			#infscr-loading img{
				margin: auto;
				margin-bottom: 20px;
			}
			.actGotops img{
				width: 30px;
			}
			.col-xs-4{
				position: relative;
				min-height: 1px;
				padding-right: 5px;
				padding-left: 5px;
			}
			#navigation {
				display: block !important;
				border-radius: 10px;
				-moz-border-radius: 10px;
				-webkit-border-radius: 10px;
				border: 1px solid #ddd;
				background: #ffcd35;
				box-shadow: 2px 2px 2px rgba(50, 50, 50, 0.4);
				color: #fff;
				text-decoration: none;
				width: 60%;
				margin: auto;
				margin-bottom: 20px;
				padding: 10px;
				text-align: center;
			}
			.product_two .box .icon,.product_two .box .device-icon{
				margin-top: 5px;
				margin-bottom: 5px;
			}

		</style><title>产品 - 宝宝巴士 快乐童年 - 启蒙教育第一品牌</title></head><body><!--=============navbar导航===================
==============================================--><div class="container product_two product_list" style="margin-top: 10px;"><div class="row infinitescrolls" id="product_list"><?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="col-xs-4 border"><div class="box"><img src="<?php echo $val['app_images'] ? $val['app_images']:'__PUBLIC__/images/Public/default.gif';?>" class="img-responsive imgradius" onerror="javascript:this.src='__PUBLIC__/images/Public/default.gif'" /><h1><?php echo ($val['app_name']); ?></h1><?php if($val['is_active'] == 0): ?><p class="device-icon"><span><input class="btn btn-default" type="button" disabled="disabled" value="审核中"></span></p><?php else: ?><!-- 微信链接 --><?php if(empty($url_type)): echo show_down($val['android_url'],$val['cell_android_url'],$val['iphone_url'],$val['ipad_url'],$val['app_pro_key']); else: if(($type == 'android')): ?><p class='device-icon'><span><a href="<?php echo ($val['myapp_url']); ?>"  target="_blank" data-original-title=''><img src='__PUBLIC__/images/product/info/weixin_down.png'></a></span></p><?php elseif(($type == 'ios')): ?><p class='device-icon'><span><a href="<?php echo ($val['myios_url']); ?>"  target="_blank" data-original-title=''><img src='__PUBLIC__/images/product/info/weixin_down.png'></a></span></p><?php endif; endif; endif; ?></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div><!--<a href="http://wwww.badidu.com/qq.htm?page=1"></a>--><!-- 此处可以是url，可以是action，要注意不是每种html都可以加，是跟当前网页有相同布局的才可以。另外一个重要的地方是page参数，这个一定要加在这里，它的作用是指出当前页面页码，没加载一次数据，page自动+1,我们可以从服务器用request拿到他然后进行后面的分页处理。--><button class="btn btn-default pull-left" style="display: block;"  id="week">更多</button><a id="navigation" href="<?php echo U('getmore',array('page'=>2,'class_id'=>$class_id));?>">点击查看更多</a></div><script src="__PUBLIC__/js/bootstrap.min.js"></script><script src="__PUBLIC__/js/jquery.infinitescroll.min.js"></script><script src="__PUBLIC__/js/babybox.js"></script><script type='text/javascript'>
            function download(iosUrl, androidUrl, appkey){
                allOpenApp(iosUrl,androidUrl,appkey)
            }

			scroll(".infinitescrolls");
			$(window).unbind(".infscr");
			$('#navigation').bind("click",function(){
				$(".infinitescrolls").infinitescroll("retrieve");				      
					      return false;			
			});
			
		</script></body></html>