<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="宝宝巴士专注为学龄前儿童研发教育应用产品，通过移动互联平台，打造一个全球知名的卡通品牌形象，将中国传统文化融合国际化元素传播至大中华文化圈乃至全球。">
<meta name="keywords" content="宝宝巴士,宝贝巴士,BabyBus,启蒙,启蒙教育,在线教育,幼儿教学,儿童软件,儿童应用,移动早教,熊猫,早教,幼教">
<meta name="author" content="宝宝巴士（福建）网络科技有限公司">
<link href="__PUBLIC__/css/bootstrap.min.css?v=1" rel="stylesheet">
<link rel="apple-touch-icon-precomposed" href="favicon.png">
<link rel="shortcut icon" href="favicon.ico">
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
<title>宝宝巴士 快乐童年 - 启蒙教育第一品牌</title>
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
            <li data-value="Index"><a href="<?php echo U('Index/index');?>">首页</a></li>
            <li data-value="Product"><a href="<?php echo U('Product/index');?>">产品</a></li>
            <li data-value="Download"><a href="<?php echo U('Download/index');?>">下载</a></li>
            <li data-value="Join"><a href="<?php echo U('Join/index');?>">招聘</a></li>
            <li data-value="About"><a href="<?php echo U('About/index');?>">关于我们</a></li>
<!--            <li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">简体中文 <span class="caret"></span></a>-->
<!--            	<ul class="dropdown-menu" role="menu">-->
<!--                    <li><a href="#">繁体中文</a></li>-->
<!--                    <li><a href="#">English</a></li>-->
<!--                    <li><a href="#">日本語</a></li>-->
<!--                    <li><a href="#">عربي</a></li>-->
<!--                    <li><a href="#">한국어</a></li>-->
<!--                </ul>-->
<!--           </li>-->
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
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="one2" style="background:url(__PUBLIC__/images/home/moon_3.png)  center bottom no-repeat #25276a;">
						<div class="page-vertical-align">
							<div class="page-content-wrapper">
								<div data-wow-delay="1s" class="captionimgauto wow fadeInLeft animated">
									<img src="__PUBLIC__/images/home/moon_1.png" class="captionimg" alt="" />
								</div>
								<h1 class="caption hidden-xs">

									<span data-wow-delay="1.45s" class="wow fadeInLeft animated">&nbsp;</span>

									<br />

									<small data-wow-delay="1.85s" class="wow fadeInLeft animated">

					              		<P>&nbsp;<br />&nbsp;</P>

					              		<P>&nbsp;<br />&nbsp;</P>

					              	</small>

								</h1>
							</div>
							<div data-wow-delay="1.5s" class="bus wow fadeIn animated">
								<img class="img-responsive " src="__PUBLIC__/images/home/moon_2.png" alt="">
							</div>
						</div>
					</div>
					<div class="bottombg hidden-xs">

					</div>

				</div>

				<div class="item">
					<div class="one">
						<div class="page-vertical-align">
							<div class="page-content-wrapper">
								<div data-wow-delay="1.15s" class="captionimgauto wow fadeInLeft animated">
									<img src="__PUBLIC__/images/home/title.png" class="captionimg" alt="" />
								</div>
								<h1 class="caption hidden-xs">

									<span data-wow-delay="1.45s" class="wow fadeInLeft animated">专注启蒙，而不仅仅是教育</span>

									<br />

									<small data-wow-delay="1.85s" class="wow fadeInLeft animated">

					              		<p>是幼教，又不止是幼教<br />我们更希望做宝宝成长的好伙伴</p>

					              		<p>是App，又不止是App<br />我们更希望带给宝宝快乐的童年</p>

					              	</small>

								</h1>
							</div>
							<div data-wow-delay="2s" class="bus wow bounceInRight animated">
								<img class="img-responsive " src="__PUBLIC__/images/home/bus.png" alt="">
							</div>
						</div>
						<div class="bottombg hidden-xs">

						</div>
					</div>

				</div>
			</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
		</div>
	
<div id="myCarousel" class="carousel slide hidden-lg" data-ride="carousel">
				<div id="owl-demo" class="owl-carousel">
					<div class="item">
						<div class="one2" style="background:url(__PUBLIC__/images/home/moon_3.png)  center bottom no-repeat #25276a;">
							<div class="page-vertical-align">
								<div class="page-content-wrapper">
									<div class="captionimgauto">
										<img src="__PUBLIC__/images/home/moon_1.png" class="captionimg" alt="" />
									</div>
									<h1 class="caption hidden-xs">

									<span data-wow-delay="1.45s" class="wow fadeInLeft animated">&nbsp;</span>

									<br />

									<small data-wow-delay="1.85s" class="wow fadeInLeft animated">

					              		<P>&nbsp;<br />&nbsp;</P>

					              		<P>&nbsp;<br />&nbsp;</P>

					              	</small>

								</h1>
								</div>
								<div class="bus">
									<img class="img-responsive " src="__PUBLIC__/images/home/moon_2.png" alt="">
								</div>
							</div>
						</div>
						<div class="bottombg hidden-xs">

						</div>
					</div>
					<div class="item">

						<div class="one">
							<div class="page-vertical-align">
								<div class="page-content-wrapper">
									<div class="captionimgauto">
										<img src="__PUBLIC__/images/home/title.png" class="captionimg" alt="" />
									</div>
									<h1 class="caption hidden-xs">

									<span>专注启蒙，而不仅仅是教育</span>

									<br />

									<small>

					              		<p>是幼教，又不止是幼教<br />我们更希望做宝宝成长的好伙伴</p>

					              		<p>是App，又不止是App<br />我们更希望带给宝宝快乐的童年</p>

					              	</small>

								</h1>
								</div>
								<div class="bus">
									<img class="img-responsive " src="__PUBLIC__/images/home/bus.png" alt="">
								</div>
							</div>
							<div class="bottombg hidden-xs">

							</div>
						</div>

					</div>



				</div>
			</div>


<!--=============section主体内容区域===================
==============================================-->
<div class="two">
<div class="container indexicon">

<h1 class="caption">What is BabyBus?</h1>
<p class="vice-caption">完善的知识体系框架，通过寓教于乐的方式，全方面培养宝宝能力，打造宝宝成长好伙伴。</p>

	<div class="row">
    	<div class="col-sm-3 col-xs-6 font-center margin-top50">

                <img  class="animated" alt="启蒙认知" src="__PUBLIC__/images/home/icon_1.png">



                <h4>启蒙认知</h4>
                <p> 启智未来，小眼看世界</p>

        </div>
        <div class="col-sm-3 col-xs-6 font-center margin-top50">

                <img class="animated"  alt="情商培养" src="__PUBLIC__/images/home/icon_2.png">

                <h4>情商培养</h4>
                <p>让宝宝学会做情绪的主人</p>

        </div> 
        <div class="col-sm-3 col-xs-6 font-center margin-top50">
      
                <img  class="animated"  alt="艺术创造" src="__PUBLIC__/images/home/icon_3.png">

                    <h4>艺术创造</h4>
				<p >发挥想象力，描绘多彩童年 </p>
        </div>
               
        <div class="col-sm-3 col-xs-6 font-center margin-top50">

                <img class="animated"  alt="思维训练" src="__PUBLIC__/images/home/icon_4.png">

                    <h4>思维训练</h4>
                    <p>思维大练兵，智力胜人一筹</p>
                 
        </div>
    </div>
    <div class="row ">
    	<div class="col-sm-3 col-xs-6 font-center icon-margin-top">

                <img class="animated" alt="自然科学" src="__PUBLIC__/images/home/icon_8.png">

                	<h4 >自然科学</h4>
                	<p>陪宝宝一同探索科学的奥秘</p>
                   
        </div>
        <div class="col-sm-3 col-xs-6 font-center icon-margin-top">

                <img class="animated" alt="角色扮演" src="__PUBLIC__/images/home/icon_5.png">

                    <h4>角色扮演</h4>
                    <p>体验中识生活，扮演中学思考</p>
                  
        </div>
         <div class="col-sm-3 col-xs-6 font-center icon-margin-top">

                <img class="animated" alt="行为习惯" src="__PUBLIC__/images/home/icon_7.png">
                	<h4>行为习惯</h4>
                	<p>良好的习惯将受益终生</p>
                   
        </div>
        <div class="col-sm-3 col-xs-6 font-center icon-margin-top">

                <img class="animated" alt="安全环保" src="__PUBLIC__/images/home/icon_6.png">

                    <h4>安全环保</h4>
                    <p>保护自己是能力，保护地球是责任</p>
                
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
	
	
	
	
	
	<div class="container margin-top60">

	</div>
</div>
</div>
<div class="actGotop"><a href="javascript:;" title="返回顶部"></a></div>
<div class="four">
	<div class="container">
		<P>Copyright©2014 BabyBus All Rights Reserved
			<br class="visible-xs" />福州智永信息科技有限公司<br />
			<a href="<?php echo U('Index/declaration');?>" target="_blank">使用声明</a>&nbsp;&nbsp;<a href="<?php echo U('Index/privacyPolicy');?>" target="_blank">隐私政策</a>
			闽ICP备12010148号-1<script src="http://s22.cnzz.com/stat.php?id=3356281&web_id=3356281&show=pic" language="JavaScript"></script>
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
		  f:'__PUBLIC__/video/1.mp4',
		  c:'0',
		  p:0,
		  i:'__PUBLIC__/video/1.jpg'
		 };
		 var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:"transparent"};
		 var video=['__PUBLIC__/video/1.mp4->video/mp4'];
		 CKobject.embed('__PUBLIC__/video/ckplayer.swf','a1','ckplayer_a1','100%','100%',false,flashvars,video,params)
		 
		</script>
</body>
</html>