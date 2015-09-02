<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"><meta name="description" content="宝宝巴士结合不同年龄阶段的早教重点设计了启蒙站和探索站两个系列，通过寓教于乐的方式达到启蒙益智的目的。完善的知识体系框架，全方面培养宝宝能力，打造宝宝成长好伙伴。"><meta name="keywords" content="宝宝巴士,宝贝巴士,BabyBus,启蒙,启蒙教育,在线教育,宝宝学数字,宝宝学ABC,儿童软件,儿童应用,移动早教,熊猫,早教,幼教,宝宝学形状"><meta name="author" content="宝宝巴士（福建）网络科技有限公司"><link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet"><link href="__PUBLIC__/css/toastr.css" rel="stylesheet"><link rel="apple-touch-icon-precomposed" href="<?php echo WEB_URL;?>/favicon.png"><!--[if lt IE 9]><script src="__PUBLIC__/js/respons/ie8-responsive-file-warning.js"></script><![endif]--><!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --><!--[if lt IE 9]><script src="__PUBLIC__/js/respons/html5shiv.js"></script><script src="__PUBLIC__/js/respons/respond.min.js"></script><![endif]--><script src="__PUBLIC__/js/jquery.min.js"></script><link href="__PUBLIC__/css/public.css" rel="stylesheet"><style type="text/css">			body{
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
				display: block!important;
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
			.menu{
				background: #ffcc00;
				border-bottom: 2px solid #fb9804;
			}
			.menu img{
				height: 30px;
				cursor: hand;
				float: left;
				margin: 8px 5px;
			}
			.menu .down_3{
				float: left;
				display: block;
				cursor: pointer;
				width: 71px;
				height: 30px;
				background: url("__PUBLIC__/images/boxvideo/anniu_3.jpg") no-repeat 0 -31px;
				background-size: 100%;
				margin: 8px 5px;
			}
			.menu .down_2{
				float: left;
				display: block;
				cursor: pointer;
				width: 71px;
				height: 30px;
				background: url("__PUBLIC__/images/boxvideo/anniu_2.jpg") no-repeat;
				background-size: 100%;
				margin: 8px 5px;
			}
			.menu .down_1{
				float: left;
				display: block;
				cursor: pointer;
				width: 71px;
				height: 30px;
				background: url("__PUBLIC__/images/boxvideo/anniu_1.jpg") no-repeat;
				background-size: 100%;
				margin: 8px 5px;
			}
</style><title>产品 - 宝宝巴士 快乐童年 - 启蒙教育第一品牌</title></head><body><!--=============navbar导航===================
==============================================--><div class="menu margin-bottom20"><div class="container"><div class="row"><img src="__PUBLIC__/images/boxvideo/logo.png"id="animation" class="img-responsive" style="height: 40px; margin-top: 3px;"/><div class="down_3" onclick="video_list(3)" id="all"></div><div class="down_2" onclick="video_list(2)" id="animation"></div><div class="down_1" onclick="video_list(1)" id="song"></div></div></div></div><div class="container product_two product_list" style="margin-top: 10px;"><div class="row infinitescrolls" id="product_list"><?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-xs-6 border"><div class="box"><div class="video-container"><a href="<?php echo U('video/boxvideo_detail','id='.$vo[id]);?>"><img src="<?php echo ($vo["song_img"]); ?>" onerror="javascript:this.src='__PUBLIC__/images/public/default.gif'" class="img-responsive imgradius"/></a></div><h1><?php echo ($vo["song_name"]); ?></h1></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div><!--<a href="http://wwww.badidu.com/qq.htm?page=1"></a>--><!-- 此处可以是url，可以是action，要注意不是每种html都可以加，是跟当前网页有相同布局的才可以。另外一个重要的地方是page参数，这个一定要加在这里，它的作用是指出当前页面页码，没加载一次数据，page自动+1,我们可以从服务器用request拿到他然后进行后面的分页处理。--><a id="navigation" href="<?php echo U('boxvideopage',array('page'=>2));?>">点击查看更多</a></div><div class="actGotops"><a class="top" href="javascript::;"><img src="__PUBLIC__/images/boxvideo/top@2x.png"/></a></div><script src="__PUBLIC__/js/bootstrap.min.js"></script><script src="__PUBLIC__/js/jquery.infinitescroll.min.js"></script></body><script type='text/javascript'>$(window).scroll(function() {      
        if($(window).scrollTop() >= 100){
            $('.actGotops').fadeIn(300); 
        }else{    
            $('.actGotops').fadeOut(300);    
        }  
    });
	$('.top').click(function(){
		$('html,body').animate({scrollTop: '0px'}, 800);
	});
//	$(".video-container img").click(function() {
//                  $(this).hide();
//                  $(this).siblings("img").hide();
//                  $(this).siblings("iframe").show();
//              })
    function scroll(class_name){
		 $(class_name).infinitescroll({
		        navSelector: "#navigation",     //页面分页元素--成功后自动隐藏
		        nextSelector: "#navigation",
		        itemSelector: ".border " , 
				loading: {
				finishedMsg: "没有新动画了...",
	            img: "/Public/images/product/loading.gif",
	            msgText:"正在加载动画..."			//加载时显示的文字
				},
				extraScrollPx: 150,                                            //离网页底部多少像素时触发ajax
				errorCallback: function(){
					//alert("出错！")
				},                             //加载完数据后的回调函数，可选
		    }); 
	 }
	scroll(".infinitescrolls");
	$(window).unbind(".infscr");
	$('#navigation').bind("click",function(){
		$(".infinitescrolls").infinitescroll("retrieve");				      
			      return false;			
	});
	
     function video_list(class_id){  
     	if(class_id==3){
            $('.down_3').css('background-position-y','-31px');
            $('.down_2').css('background-position-y','0px');
            $('.down_1').css('background-position-y','0px');
        }else if(class_id==2){
            $('.down_3').css('background-position-y','0');
            $('.down_2').css('background-position-y','-31px');
            $('.down_1').css('background-position-y','0px');
        }else{
        	$('.down_3').css('background-position-y','0px');
            $('.down_2').css('background-position-y','0px');
            $('.down_1').css('background-position-y','-31px');
            
        }
         $.post("<?php echo U('boxvideo_list');?>",{class_id:class_id},function(data){
             $("#navigation").attr('href',"index.php/video/boxvideopage/class_id/"+class_id+"/page/2.shtml))}");
             $('#product_list').html(data);
         },'html')


     }
    
</script></html>