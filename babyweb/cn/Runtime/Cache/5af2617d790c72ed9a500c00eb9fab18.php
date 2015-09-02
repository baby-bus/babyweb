<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="宝宝巴士专注为学龄前儿童研发教育应用产品，通过移动互联平台，打造一个全球知名的卡通品牌形象，将中国传统文化融合国际化元素传播至大中华文化圈乃至全球。">
<meta name="keywords" content="宝宝巴士,宝贝巴士,BabyBus,启蒙,启蒙教育,在线教育,幼儿教学,儿童软件,儿童应用,移动早教,熊猫,早教,幼教">
<meta name="author" content="宝宝巴士（福建）网络科技有限公司">
<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">

<link rel="apple-touch-icon-precomposed" href="<?php echo WEB_URL;?>/favicon.png">

<!--[if lt IE 9]><script src="__PUBLIC__/js/respons/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="__PUBLIC__/js/respons/html5shiv.js"></script>
      <script src="__PUBLIC__/js/respons/respond.min.js"></script>
    <![endif]-->
<link href="__PUBLIC__/css/public.css" rel="stylesheet">
<script src="__PUBLIC__/js/jquery.min.js"></script> 

<title>关于我们 - 宝宝巴士 快乐童年 - 启蒙教育第一品牌</title>
</head>
<body>
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
            <li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">简体中文 <span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
					<li><a href="http://tw.babybus.com">繁體中文</a></li>
					<li><a href="http://en.babybus.com">English</a></li>
					<li><a href="http://ko.babybus.com">한국어</a></li>
					<li><a href="http://ja.babybus.com">日本語</a></li>
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

<!--=============banner横幅广告区===================
==============================================-->
<div class="about padding-top70 about-banner">
	
		<div class="about-banner1 hidden-xs">
			
		</div>
		<div class="container about-banner2 visible-xs">
			
		</div>
	
</div>










<!--=============section主体内容区域===================
==============================================-->
<div class="container download">
	<div class="row joinus">
    	<div class="col-sm-12 downline title_icon2">
        	<h2><img src="__PUBLIC__/images/Public/title_about2.png" class="response_img"></h2>
        </div>
        <div class="col-sm-5 margin-top20">
        	<img class="response_img slide-left" src="__PUBLIC__/images/joinus/c_photo.jpg">
        </div>
        <div class="col-sm-7 margin-top10">
        <h4><strong class="font_c_blue">WHO :</strong></h4>
        <P>宝宝巴士（BabyBus），专门针对学龄前儿童研发教育应用产品。结合不同年龄阶段的早教重点设计了启蒙站和探索站两个系列，通过寓教于乐的方式达到启蒙益智的目的。 </P>
        
        <h4 class="margin-top30"><strong class="font_c_blue">WHAT :</strong></h4>
        <P>宝宝巴士（BabyBus）系列已拥有产品逾100款，支持iOS,Android两平台和九大语种（中文简体，中文繁体，日语，英语，俄语，阿拉伯语，法语，韩语，德语）。</P>
        
        <h4 class="margin-top30"><strong class="font_c_blue">WHY :</strong></h4>
        <P>我们专注启蒙，而不只是学习。 <br>
            我们细分年龄段，是父母育儿的好帮手。<br>
            我们融合国际化元素，将宝宝巴士带给全球。</P>
        
        <h4 class="margin-top30"><strong class="font_c_blue">HOPE :</strong></h4>
        <P>我们用心为孩子创造一个轻松、快乐的童年，努力成为宝宝成长的好伙伴。</P>
        </div>
    </div>
    
    <div class="row joinus margin-top30">
    	<div class="col-sm-12 downline margin-top20 title_icon2">
        	<h2><img src="__PUBLIC__/images/Public/title_honour2.png" class="response_img"></h2>
        </div>
    </div>
    <div class="row joinus">
    	<div class="col-sm-4 hidden-xs margin-top90"><img src="__PUBLIC__/images/joinus/Honor_bg.png" class="response_img"/></div>
        <div class="col-sm-8 height500">
        
        <div id="history">
        	
        
            <div class="title">
                <div id="circle" >

                </div>
            </div>
            
            <div id="content">
                <ul class="list">
                	
                    <li>
                        <div class="liwrap">
                            <div class="lileft">
                                <div class="date">
                                    <span class="year">2009年</span>
                                </div>
                            </div>
                            
                            <div class="point"><b></b></div>
                            
                            <div class="liright">
                                <div class="histt histtline"><a href="javascript:void(0)">公司成立。</a></div>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="liwrap">
                            <div class="lileft">
                                <div class="date">
                                    <span class="year">2010年</span>
                                </div>
                            </div>
                            
                            <div class="point"><b></b></div>
                            
                            <div class="liright">
                                <div class="histt histtline"><a href="javascript:void(0)">全面转型移动互联网。</a></div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="liwrap">
                            <div class="lileft">
                                <div class="date">
                                    <span class="year">2011年</span>
                                </div>
                            </div>
                            
                            <div class="point"><b></b></div>
                            
                            <div class="liright">
                                <div class="histt"><a href="javascript:void(0)">宝宝巴士与奇奇妙妙诞生，产品全球上线，每款产品均进入AppStore教育榜前10名。</a></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="liwrap">
                            <div class="lileft">
                                <div class="date">
                                    <span class="year">2012年</span>
                                </div>
                            </div>
                            
                            <div class="point"><b></b></div>
                            
                            <div class="liright">
                                <div class="histt"><a href="javascript:void(0)">全球用户达到千万级别，获得CVAwards年度最具潜力企业100强。</a></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="liwrap">
                            <div class="lileft">
                                <div class="date">
                                    <span class="year">2013年</span>
                                </div>
                            </div>
                            
                            <div class="point"><b></b></div>
                            
                            <div class="liright">
                                <div class="histt"><a href="javascript:void(0)">宝宝巴士获得顺为基金A轮数百万美元融资。</a></div>
                            </div>
                        </div>
                    </li>
              		  <li>
                        <div class="liwrap">
                            <div class="lileft">
                                <div class="date">
                                    <span class="year">2014年</span>
                                </div>
                            </div>
                            
                            <div class="point"><b></b></div>
                            
                            <div class="liright">
                                <div class="histt"><a href="javascript:void(0)">宝宝巴士成为中国第七大非游戏类应用发布商。</a></div>
                            </div>
                        </div>
                    </li>

                    
                </ul>
            </div>
        </div>
        </div> 
		

    </div>
    
</div>




<div class="container">
	<div class="row joinus margin-top90">

        <div class="col-sm-12 downline title_icon">
           <h2><img src="__PUBLIC__/images/Public/title_content.png" class="response_img"></h2>
        </div>
    </div>
    <div class="row joinus">
    	<div class="col-sm-6 text-center margin-top20">
        <img class=" response_img" src="__PUBLIC__/images/joinus/map.png"></div>
        <div class="col-sm-6 joinus-p margin-top20">
        	<p class="p1">福州市仓山区金工路1号 福州海峡创意产业园9号楼3F 宝宝巴士</p>            
            <p class="p2">客服QQ:2317183986</p>
            <p class="p3"><a href="mailto:ser@babybus.com" >客服邮箱: ser@babybus.com</a></p>
            <p class="p7"><a href="tel:18050156307" title="商务合作">商务合作: 18050156307</a></p>
            <p class="p4"><A href="http://weibo.com/sinyeebabyapp" target="_blank">@宝宝巴士</A></p>
            <p class="p5"><A href="http://t.qq.com/sinyeebabyapp" target="_blank">@宝宝巴士</A></p>
            <p class="p6">微信号: baobaobashi</p>  
        </div>
    </div>
</div>




<!--=============footer页脚====================
==============================================-->
<div class="product_three">

</div>
<div class="actGotop"><a href="javascript:;" title="返回顶部"></a></div>
<div class="four">
	<div class="container">
		<P>Copyright © 2014 BabyBus All Rights Reserved
			<br class="visible-xs" />福州智永信息科技有限公司<br />
			<a href="<?php echo U('Index/declaration');?>" target="_blank">使用声明</a>&nbsp;&nbsp;<a href="<?php echo U('Index/privacyPolicy');?>" target="_blank">隐私政策</a>
			闽ICP备12010148号-1<script src="http://s22.cnzz.com/stat.php?id=3356281&web_id=3356281&show=pic" language="JavaScript"></script>
		</P>
	</div>
</div>


<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/public.js"></script>
<script src="__PUBLIC__/js/function.js"></script>
</body>
</html>