<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="寶寶巴士專注為學齡前兒童研發教育應用產品，通過移動互聯平臺，打造一個全球知名的卡通品牌形象，將中國傳統文化融合國際化元素傳播至大中華文化圈乃至全球。">
<meta name="keywords" content="寶寶巴士,寶貝巴士,BabyBus,啟蒙,啟蒙教育,線上教育,幼兒教學,兒童軟體,兒童應用,移動早教,貓熊,早教,幼教">
<meta name="author" content="寶寶巴士（福建）網路科技有限公司">
<link href="__PUBLIC__/css/bootstrap.min.css?v=1" rel="stylesheet">
<link rel="apple-touch-icon-precomposed" href="favicon.png">
<!--[if lt IE 9]><script src="__PUBLIC__/js/respons/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="__PUBLIC__/js/respons/html5shiv.js"></script>
      <script src="__PUBLIC__/js/respons/respond.min.js"></script>
    <![endif]-->
<script src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/public.js"></script>
<link href="__PUBLIC__/css/animate.css?v=1" rel="stylesheet"/>
<link href="__PUBLIC__/css/public.css" rel="stylesheet">
<title>寶寶巴士 快樂童年 - 啟蒙教育第一品牌</title>
</head>
<body data-spy="scroll" data-target=".navbar-example">

<!--=============navbar导航===================
==============================================--> 
<!--=============navbar导航===================
==============================================-->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="logo"><a href="<?php echo WEB_URL;?>"><img src="__PUBLIC__/images/Public/logo.png" alt="宝宝巴士 - 幼儿教学应用软件第一品牌,专注幼儿应用/软件,支持iPhone /iPad / Android 平台" /></a></div>
        </div>
        <div class="navbar-collapse collapse navbar-right navbar-margintop">
          <ul class="nav navbar-nav">
            <li data-value="Index"><a href="<?php echo U('Index/index');?>">首頁</a></li>
            <li data-value="Product"><a href="<?php echo U('Product/index');?>">產品</a></li>
            <li data-value="Download"><a href="<?php echo U('Download/index');?>">下載</a></li>
            <li data-value="Join"><a href="<?php echo U('Join/index');?>">招聘</a></li>
            <li data-value="About"><a href="<?php echo U('About/index');?>">關於我們</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">繁體中文<span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
					<li><a href="http://cn.babybus.com">简体中文</a></li>
					<li><a href="http://en.babybus.com">English</a></li>
					<li><a href="http://ko.babybus.com">한국어</a></li>
					<li><a href="http://ja.babybus.com">日本語</a></li>
					<li><a href="http://fr.babybus.com">Français</a></li>
					<li><a href="http://de.babybus.com">Deutsch</a></li>
                    <li><a href="http://ru.babybus.com">Русский</a></li>
					<li><a href="http://pt.babybus.com">Português</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<script>
  $(function(){
  	web_url = '<?php echo WEB_URL;?>';
  	var model = '<?php echo MODULE_NAME;?>';
  	$(".navbar-nav li").each(function(){
  		var val = $(this).attr("data-value");
  		if(val!="undefined"){
  			if(model==val){
  				$(this).addClass("active");
  				$(this).siblings().removeClass("active");
  			}
  		}
  	})
  })
</script>
<div id="carousel-example-generic" class="carousel slide visible-lg" data-ride="carousel"> 
	<!-- Indicators -->
	<ol class="carousel-indicators">
         <!-- edit by csg 14-09-19 -->
         <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li data-target="#carousel-example-generic" data-slide-to="<?php echo ($k-1); ?>" class="<?php if($k == 1): ?>active<?php endif; ?>"></li>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- end -->
	</ol>
	
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
        <!-- edit by csg 14-09-19 -->
        <!-- 电脑端 -->
        <!-- 没有数据的情况下使用固定图片 -->
        <?php if(empty($list)): ?><div class="item active " >
                <div class="one" style="background: url(/Public/images/banner/bg.png) repeat #4db9e2;">
                    <div class="page-vertical-align">
                        <div class="page-content-wrapper">
                            <div data-wow-delay="1.15s" class="captionimgauto wow fadeInLeft animated">
                                <img src="/Public/images/home/title.png" class="captionimg"  alt="" />
                            </div>
                            <h1 class="caption hidden-xs">
                                <span data-wow-delay="1.45s" class="wow fadeInLeft animated">專注啟蒙，而不僅僅是教育</span><br />
                                <small data-wow-delay="1.85s" class="wow fadeInLeft animated">
                                    <p>是幼教，又不止是幼教
                                    <br />我們更希望做寶寶成長的好夥伴</p>
                                    <p>是App，又不止是App
                                    <br />我們更希望做爸爸媽媽的專屬顧問</p>
                                </small>
                            </h1>
                        </div>
                        <!--one类的主图图片大小要求控制在782X494像素-->
                        <div data-wow-delay="2s" class="bus wow bounceInRight animated animated">
                            <img src="/Public/images/home/bus.png" class="img-responsive"  alt="" />
                        </div>
                    </div>
                    <div class="bottombg hidden-xs"></div>
                </div>
            </div>
        <?php else: ?>
            <!-- banner循环 -->
            <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div class="item <?php if($k == 1): ?>active<?php endif; ?> " >
                    <div class="<?php echo ($vo["bg_class"]); ?>" style="background: url(<?php echo ($vo["image_bg"]); ?>) 
                         <?php switch($vo["bg_align"]): case "1": ?>left<?php break; case "2": ?>center<?php break; case "3": ?>right<?php break; default: endswitch;?>
                         <?php switch($vo["bg_vertical"]): case "1": ?>top<?php break; case "2": ?>middle<?php break; case "3": ?>bottom<?php break; default: endswitch;?>
                         <?php if($vo["bg_repeat"] == 1): ?>repeat<?php else: ?>no-repeat<?php endif; ?>
                         <?php echo ($vo["bg_color"]); ?>; "  >
                        <div class="page-vertical-align">
                            <div class="page-content-wrapper">
                                <div data-wow-delay="1.15s" class="captionimgauto wow fadeInLeft animated">
                                    <img src="<?php echo ($vo["image_left"]); ?>" onerror="javascript:this.src='/Public/images/home/title.png'" class="captionimg"  alt="" />
                                </div>
                                <h1 class="caption hidden-xs">
                                    <!--class为one/one3才显示-->
                                    <?php if(($vo["bg_class"] == one) OR ($vo["bg_class"] == one3) ): ?><span data-wow-delay="1.45s" class="wow fadeInLeft animated">
                                            <?php if(empty($vo["description"]["p1"])): ?>&nbsp;<?php else: echo ($vo["description"]["p1"]); endif; ?>
                                        </span><br />
                                        <small data-wow-delay="1.85s" class="wow fadeInLeft animated">
                                           <p><?php if(empty($vo["description"]["p2"])): ?>&nbsp;<?php else: echo ($vo["description"]["p2"]); endif; ?>
                                            <br /><?php if(empty($vo["description"]["p3"])): ?>&nbsp;<?php else: echo ($vo["description"]["p3"]); endif; ?>
                                            </p>
                                            <p><?php if(empty($vo["description"]["p4"])): ?>&nbsp;<?php else: echo ($vo["description"]["p4"]); endif; ?>
                                            <br /><?php if(empty($vo["description"]["p5"])): ?>&nbsp;<?php else: echo ($vo["description"]["p5"]); endif; ?>
                                            </p>
                                        </small><?php endif; ?>
                                </h1>
                                <!-- 当class为one3时才显示产品下载 -->
                                <?php if($vo["bg_class"] == one3): ?><div data-wow-delay="2.1s" class="btn wow fadeInLeft animated">
                                        <?php switch($device): case "iphone": ?><a target="_blank" href="<?php echo ($vo["ios_url"]); ?>" class="ios"></a><?php break;?>
                                            <?php case "ipad": ?><a target="_blank" href="<?php echo ($vo["ios_url"]); ?>" class="ios"></a><?php break;?>
                                            <?php case "ipod": ?><a target="_blank" href="<?php echo ($vo["ios_url"]); ?>" class="ios"></a><?php break;?>
                                            <?php case "android": ?><a target="_blank" href="<?php echo ($vo["and_url"]); ?>" class="android"></a><?php break;?>
                                            <?php case "pc": ?><a target="_blank" href="<?php echo ($vo["ios_url"]); ?>" class="ios"></a><a target="_blank" href="<?php echo ($vo["and_url"]); ?>" class="android"></a><?php break;?>
                                            <?php default: endswitch;?>
                                    </div><?php endif; ?>
                            </div>
                            <!--one类的主图图片大小要求控制在782X494像素-->
                            <div data-wow-delay="2s" class="bus wow bounceInRight animated">
                                <img class="img-responsive " src="<?php echo ($vo["image_right"]); ?>" onerror="javascript:this.src='/Public/images/home/bus.png'"  alt="" />
                            </div>
                        </div>
                        <div class="bottombg hidden-xs"></div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <!-- 循环end --><?php endif; ?>
        <!-- 电脑端end -->
	</div>
	
	<!-- Controls --> 
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> 
        <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> 
    </a> 
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> 
        <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> 
    </a> 
</div>

<!--手机端-->
<div id="myCarousel" class="carousel slide hidden-lg" data-ride="carousel">
	<div id="owl-demo" class="owl-carousel">
        <!-- 没有数据的情况下使用固定图片 -->
        <?php if(empty($list)): ?><div class="item">
                <div class="one" style="background: url(__PUBLIC__/images/banner/bg.png) repeat #4db9e2;">
                    <div class="page-vertical-align">
                        <div class="page-content-wrapper">
                            
                            <div class="captionimgauto"> 
                                <img src="__PUBLIC__/images/home/title.png" class="captionimg" alt="" /> 
                            </div>
                            <h1 class="caption hidden-xs"> 
                                <span>專注啟蒙，而不僅僅是教育</span> <br />
                                <small>
                                <p>是幼教，又不止是幼教<br />
                                    我們更希望做寶寶成長的好夥伴</p>
                                <p>是App，又不止是App<br />
                                    我們更希望做爸爸媽媽的專屬顧問</p>
                                </small> 
                            </h1>
                        </div>
                        <div class="bus"> <img class="img-responsive " src="__PUBLIC__/images/home/bus.png" alt=""> </div>
                    </div>
                    <div class="bottombg hidden-xs"> </div>
                </div>
            </div>
        <?php else: ?>
            <!-- banner循环 -->
            <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div class="item <?php if($k == 1): ?>active<?php endif; ?> " >
                    <div class="<?php echo ($vo["bg_class"]); ?>" style="background: url(<?php echo ($vo["image_bg"]); ?>)
                         <?php switch($vo["bg_align"]): case "1": ?>left<?php break; case "2": ?>center<?php break; case "3": ?>right<?php break; default: endswitch;?>
                         <?php switch($vo["bg_vertical"]): case "1": ?>top<?php break; case "2": ?>middle<?php break; case "3": ?>bottom<?php break; default: endswitch;?>
                         <?php if($vo["bg_repeat"] == 1): ?>repeat<?php else: ?>no-repeat<?php endif; ?> 
                         <?php echo ($vo["bg_color"]); ?>; "  >
                        <div class="page-vertical-align">
                            <div class="page-content-wrapper"> 
                                <div data-wow-delay="1.15s" class="captionimgauto">
                                    <img src="<?php echo ($vo["image_left"]); ?>" onerror="javascript:this.src='/Public/images/home/title.png'" class="captionimg"  alt="" />
                                </div>
                                <h1 class="caption hidden-xs">
                                    <!--class为one/one3才显示-->
                                   <?php if(($vo["bg_class"] == one) OR ($vo["bg_class"] == one3) ): ?><span data-wow-delay="1.45s" class="wow fadeInLeft animated">
                                            <?php if(empty($vo["description"]["p1"])): ?>&nbsp;<?php else: echo ($vo["description"]["p1"]); endif; ?>
                                        </span><br />
                                        <small data-wow-delay="1.85s" class="wow fadeInLeft animated">
                                            <p><?php if(empty($vo["description"]["p2"])): ?>&nbsp;<?php else: echo ($vo["description"]["p2"]); endif; ?>
                                            <br /><?php if(empty($vo["description"]["p3"])): ?>&nbsp;<?php else: echo ($vo["description"]["p3"]); endif; ?>
                                            </p>
                                            <p><?php if(empty($vo["description"]["p4"])): ?>&nbsp;<?php else: echo ($vo["description"]["p4"]); endif; ?>
                                            <br /><?php if(empty($vo["description"]["p5"])): ?>&nbsp;<?php else: echo ($vo["description"]["p5"]); endif; ?>
                                            </p>
                                        </small><?php endif; ?>
                                </h1>
                                <!-- 当class为one3时才显示产品下载 -->
                                <?php if($vo["bg_class"] == one3): ?><div class="btn">
                                        <?php switch($device): case "iphone": ?><a target="_blank" href="<?php echo ($vo["ios_url"]); ?>" class="ios"></a><?php break;?>
                                            <?php case "ipad": ?><a target="_blank" href="<?php echo ($vo["ios_url"]); ?>" class="ios"></a><?php break;?>
                                            <?php case "ipod": ?><a target="_blank" href="<?php echo ($vo["ios_url"]); ?>" class="ios"></a><?php break;?>
                                            <?php case "android": ?><a target="_blank" href="<?php echo ($vo["and_url"]); ?>" class="android"></a><?php break;?>
                                            <?php case "pc": ?><a target="_blank" href="<?php echo ($vo["ios_url"]); ?>" class="ios"></a><a target="_blank" href="<?php echo ($vo["and_url"]); ?>" class="android"></a><?php break;?>
                                            <?php default: endswitch;?>
                                    </div><?php endif; ?>
                            </div>
                            <div data-wow-delay="2s" class="bus">
                                <img class="img-responsive " src="<?php echo ($vo["image_right"]); ?>" onerror="javascript:this.src='/Public/images/home/bus.png'"  alt="" />
                            </div>
                        </div>
                        <div class="bottombg hidden-xs"></div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <!-- 循环end --><?php endif; ?>
        <!-- 手机端end -->
    </div>
</div>

<!--=============section主体内容区域===================
==============================================-->
<div class="two">
	<div class="container indexicon">
		<h1 class="caption">What is BabyBus?</h1>
		<p class="vice-caption">完善的知識體系框架，通過寓教於樂的方式，全方面培養寶寶能力，打造寶寶成長好夥伴。</p>
		<div class="row">
			<div class="col-sm-3 col-xs-6 font-center margin-top50"> <img  class="animated" alt="启蒙认知" src="__PUBLIC__/images/home/icon_1.png">
				<h4>啟蒙認知</h4>
				<p>啟智未來，小眼看世界</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center margin-top50"> <img class="animated"  alt="情商培养" src="__PUBLIC__/images/home/icon_2.png">
				<h4>情商培養</h4>
				<p>讓寶寶學會做情緒的主人</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center margin-top50"> <img  class="animated"  alt="艺术创造" src="__PUBLIC__/images/home/icon_3.png">
				<h4>藝術創造</h4>
				<p >發揮想像力，描繪多彩童年 </p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center margin-top50"> <img class="animated"  alt="思维训练" src="__PUBLIC__/images/home/icon_4.png">
				<h4>思維訓練</h4>
				<p>思維大練兵，智力勝人一籌</p>
			</div>
		</div>
		<div class="row ">
			<div class="col-sm-3 col-xs-6 font-center icon-margin-top"> <img class="animated" alt="自然科学" src="__PUBLIC__/images/home/icon_8.png">
				<h4 >自然科學</h4>
				<p>陪寶寶一同探索科學的奧秘</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center icon-margin-top"> <img class="animated" alt="角色扮演" src="__PUBLIC__/images/home/icon_5.png">
				<h4>角色扮演</h4>
				<p>體驗中識生活，扮演中學思考</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center icon-margin-top"> <img class="animated" alt="行为习惯" src="__PUBLIC__/images/home/icon_7.png">
				<h4>行為習慣</h4>
				<p>良好的習慣將受益終生</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center icon-margin-top"> <img class="animated" alt="安全环保" src="__PUBLIC__/images/home/icon_6.png">
				<h4>安全環保</h4>
				<p>保護自己是能力，保護地球是責任</p>
			</div>
		</div>
	</div>
</div>
<div class="three_bg">
	<div class="three">
		<div class="padding-top70">
			<div class="video_border center-block">
				<div id="a1"></div>
			</div>
		</div>
		<div class="container margin-top60"> </div>
	</div>
</div>
<div class="actGotop"><a href="javascript:;" title="TOP"></a></div>
<div class="four">
	<div class="container">
        <?php if($link_data != null): ?><p>友情鏈接：
                <?php if(is_array($link_data)): foreach($link_data as $key=>$vo): ?><a href="<?php echo ($vo["link_url"]); ?>"><?php echo ($vo["link_name"]); ?></a>&nbsp;&nbsp;<?php endforeach; endif; ?>
                <a href="<?php echo U('Index/link');?>">更多</a>
            </p><?php endif; ?>
		<P>Copyright © 2014 BabyBus Group All Rights Reserved<br />
			<a href="<?php echo U('Index/declaration');?>" target="_blank">使用聲明</a>&nbsp;&nbsp;<a href="<?php echo U('Index/privacyPolicy');?>" target="_blank">隱私政策</a>
			<script src="http://s22.cnzz.com/stat.php?id=3356281&web_id=3356281&show=pic" language="JavaScript"></script>
			<script type="text/javascript" name="baidu-tc-cerfication" data-appid="4744355" src="http://apps.bdimg.com/cloudaapi/lightapp.js"></script>
		</P>
	</div>
</div>
</div>
<script src="__PUBLIC__/js/bootstrap.min.js"></script> 
<script src="__PUBLIC__/video/ckplayer.js"></script> 
<script src="__PUBLIC__/js/function.js"></script> 
<script type="text/javascript">
		
		function ckmarqueeadv(){
			var html='';
			return html;
		}
		 var flashvars={
		  f:'__PUBLIC__/video/1.mp4?<?php echo mt_rand(1,999);?>',
		  c:'0',
		  p:0,
		  i:'__PUBLIC__/video/1.jpg?<?php echo mt_rand(1,999);?>'
		 };
		 var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:"transparent"};
		 var video=['__PUBLIC__/video/1.mp4->video/mp4'];
		 CKobject.embed('__PUBLIC__/video/ckplayer.swf','a1','ckplayer_a1','100%','100%',false,flashvars,video,params)
		 
		</script>
</body>
</html>