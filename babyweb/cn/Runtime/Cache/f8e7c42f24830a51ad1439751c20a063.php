<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="宝宝巴士结合不同年龄阶段的早教重点设计了启蒙站和探索站两个系列，通过寓教于乐的方式达到启蒙益智的目的。完善的知识体系框架，全方面培养宝宝能力，打造宝宝成长好伙伴。">
<meta name="keywords" content="宝宝巴士,宝贝巴士,BabyBus,启蒙,启蒙教育,在线教育,宝宝学数字,宝宝学ABC,儿童软件,儿童应用,移动早教,熊猫,早教,幼教,宝宝学形状">
<meta name="author" content="宝宝巴士（福建）网络科技有限公司">
<link href="__PUBLIC__/css/bootstrap.min.css?v=1" rel="stylesheet">
<link href="__PUBLIC__/css/animate.css?v=1" rel="stylesheet">

<link rel="apple-touch-icon-precomposed" href="<?php echo WEB_URL;?>/favicon.png">

<!--[if lt IE 9]><script src="__PUBLIC__/js/respons/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="__PUBLIC__/js/respons/html5shiv.js"></script>
      <script src="__PUBLIC__/js/respons/respond.min.js"></script>
    <![endif]-->
<link href="__PUBLIC__/css/public.css" rel="stylesheet">
<script src="__PUBLIC__/js/jquery.min.js"></script> 

<title>下载 - 宝宝巴士 快乐童年 - 启蒙教育第一品牌</title>
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
            <li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">简体中文 <span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
					<li><a href="http://tw.babybus.com">繁體中文</a></li>
					<li><a href="http://en.babybus.com">English</a></li>
					<li><a href="http://ko.babybus.com">한국어</a></li>
					<li><a href="http://ja.babybus.com">日本語</a></li>
					<li><a href="http://fr.babybus.com">Français</a></li>
					<li><a href="http://de.babybus.com">Deutsch</a></li>
					<!--<li><a href="http://pt.babybus.com">Português</a></li>-->
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

<div class="padding-top70 download-banner">
	<div class="container download-banner-position">
		<div class="responsive-banner">
			
		
		<div class="b_download_rocket">
			<img src="__PUBLIC__/images/banner/download_rocket.png"/>
		</div>
		
	    <div class="b_download_ris"><img src="__PUBLIC__/images/banner/download_ris.png"/></div>
	    
	    <div data-wow-delay="0.5s" class="wow fadeInLeft animated b_download_title"><img src="__PUBLIC__/images/banner/download_title.png"/></div>
	    <ul class="b_download_btn hidden-xs list-inline">
	       <li data-wow-delay="0.7s" class="wow fadeInLeft animated down">
	           <h4>FAST</h4>
	           <p>快速下载</p>
	       </li>
	       <li data-wow-delay="0.9s" class="wow fadeInLeft animated guide">
	          <h4>GUIDE</h4>
	          <p>下载指南</p>
	       </li>
	       <li data-wow-delay="1.1s" class="wow fadeInLeft animated faq">
	          <h4>FAQ</h4>
	          <p>常见问题</p>
	          </li>
	    </ul>
	    
	    </div>
	</div>
</div>







<!--=============section主体内容区域===================
==============================================-->
<div class="download">
	

<div class="container">	
    <?php if(device()=='pc'){ ?>
	<div class="row">
		<div class="col-xs-12 downline margin-top10">
			<a id="down"></a>
        	<div class="title_icon">        		
        		<div class="img pull-left"><img src="__PUBLIC__/images/Public/down.png" class="float-left"></div>
				
            </div>
        </div>
    </div>
    <?php } ?>
   <?php if(device()!='pc'){ ?>
	    <div class="row">
	    	<div class="col-xs-12 downline margin-top10">
			<a id="down"></a>
        	<div class="title_icon">        		
        		<div class="img pull-left"><img src="__PUBLIC__/images/Public/down2.png" class="float-left"></div>
				
            </div>
        </div>
			<div class="col-xs-12 margin-top40 text-center">
				<a id="down"></a>
	        	      		
	        		<a href=<?php echo is_ios() ? "https://itunes.apple.com/cn/artist/babybus/id654666096" : U('product/showDownList');?>><img src="__PUBLIC__/images/Public/click_down.png" width="300"></a>
					
	        
	        </div>
	    </div>
	<?php }else{ ?>
    
    
	<div class="row  margin-top40 hidden-xs">
		<div class="col-xs-6 text-center">
			<img src="__PUBLIC__/images/download/code_ios.jpg" />
			<a href="javascript:;" target="_blank" class="codebtni">for iOS<br />苹果用户</a>
		</div>
		<div class="col-xs-6 text-center">
			<img src="__PUBLIC__/images/download/code_android.png" />
			<a href="javascript:;" target="_blank" class="codebtna">for Android<br/>安卓用户</a>
		</div>
	</div>
	<?php } ?>
    <div class="row download_img">
    	
        <div class="col-xs-12 downline margin-top40">
        	
        	<div class="title_icon">        		
        		<div class="img pull-left"><img src="__PUBLIC__/images/Public/guide.png" class="float-left"></div>				
            </div>            
        </div>  
            
    </div>
    <div class="row download_img">
        <?php if(device()=='pc'){ ?>
    	      <div class="col-xs-12"> 
    <div class="row innerpadding">
     <div class="col-xs-12 visible-lg">  
     	<a id="guide"></a>
     	<h3 class="text-left" style="text-shadow: 0 1px 0 #efefef; line-height: 60px;">安卓用户下载指南
     	</h3>
     </div>     
 	<div class="col-xs-12 margin-top20">
     	<div class="float-left step">STEP</div><div class="span float-left">1</div><div class="float-left content" style=" padding-right: 100px;">进入安卓设备的安卓市场。</div>
     </div>
     
     <div class="col-xs-12 margin-top20">
     	<div class="float-left step">STEP</div><div class="span float-left">2</div><div class="float-left content">点击顶部的搜索框，搜索关键词“宝宝巴士”或具体的应用名称选择相应的产品“下载”安装即可。</div>
     </div>
     <div class="col-xs-12 margin-top40">
     	<img src="__PUBLIC__/images/download/android_1.jpg">
     </div>
     </div>
   </div>  
    	            
<div class="col-xs-12"> 
  <div class="row innerpadding">  
   <div class="col-xs-12 margin-topa50 visible-lg">        	
   	<h3 class="text-left" style="text-shadow: 0 1px 0 #efefef; line-height: 60px;">苹果用户下载指南
   	</h3>
   </div>   
   <div class="col-xs-12 margin-top20">
   	<div class="float-left step">STEP</div><div class="span float-left">1</div><div class="float-left content">进入iPad/iPhone设备的 App Store。</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_1.jpg">
   </div>
   <div class="col-xs-12 margin-top60">
   	<div class="float-left step">STEP</div><div class="span float-left">2</div><div class="float-left content">页面拉至底部，点击“登录”完成账号登录。“使用现有的Apple ID”即老用户可使用已经注册的账号登入。“创建新Apple ID ”即新用户按照要求注册新账号。</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_2.jpg">
   </div>
   <div class="col-xs-12 margin-top60">
   	<div class="float-left step">STEP</div><div class="span float-left">3</div><div class="float-left content">点击底部导航栏“搜索”，搜索相应的宝宝巴士系列应用名称或关键词“宝宝巴士”选择相应的应用，点击“安装”按钮即可下载。下载完成后会在设备主屏页展示。</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_3.jpg">
   </div>
   </div>
   </div>
    	<?php }else if(is_android()){ ?>
    		    <div class="col-xs-12"> 
    <div class="row innerpadding">
     <div class="col-xs-12 visible-lg">  
     	<a id="guide"></a>
     	<h3 class="text-left" style="text-shadow: 0 1px 0 #efefef; line-height: 60px;">安卓用户下载指南
     	</h3>
     </div>     
 	<div class="col-xs-12 margin-top20">
     	<div class="float-left step">STEP</div><div class="span float-left">1</div><div class="float-left content" style=" padding-right: 100px;">进入安卓设备的安卓市场。</div>
     </div>
     
     <div class="col-xs-12 margin-top20">
     	<div class="float-left step">STEP</div><div class="span float-left">2</div><div class="float-left content">点击顶部的搜索框，搜索关键词“宝宝巴士”或具体的应用名称选择相应的产品“下载”安装即可。</div>
     </div>
     <div class="col-xs-12 margin-top40">
     	<img src="__PUBLIC__/images/download/android_1.jpg">
     </div>
     </div>
   </div> 
    	<?php }else if(is_ios()){ ?>
    		         
<div class="col-xs-12"> 
  <div class="row innerpadding">  
   <div class="col-xs-12 margin-topa50 visible-lg">        	
   	<h3 class="text-left" style="text-shadow: 0 1px 0 #efefef; line-height: 60px;">苹果用户下载指南
   	</h3>
   </div>   
   <div class="col-xs-12 margin-top20">
   	<div class="float-left step">STEP</div><div class="span float-left">1</div><div class="float-left content">进入iPad/iPhone设备的 App Store。</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_1.jpg">
   </div>
   <div class="col-xs-12 margin-top60">
   	<div class="float-left step">STEP</div><div class="span float-left">2</div><div class="float-left content">页面拉至底部，点击“登录”完成账号登录。“使用现有的Apple ID”即老用户可使用已经注册的账号登入。“创建新Apple ID ”即新用户按照要求注册新账号。</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_2.jpg">
   </div>
   <div class="col-xs-12 margin-top60">
   	<div class="float-left step">STEP</div><div class="span float-left">3</div><div class="float-left content">点击底部导航栏“搜索”，搜索相应的宝宝巴士系列应用名称或关键词“宝宝巴士”选择相应的应用，点击“安装”按钮即可下载。下载完成后会在设备主屏页展示。</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_3.jpg">
   </div>
   </div>
   </div>
    	<?php } ?>
    </div>
    
    
    
</div>

</div>
<!--=============section主体内容区域 问答===================
==============================================-->
<?php if(device()=='pc'){ ?>
<div class="download">
<div class="container max-width960 download_img">
	<div class="row">

        <div class="col-sm-12 downline margin-top50 title_icon">
        	<a id="faq"></a>
        	<h2 class="text-left"><img src="__PUBLIC__/images/Public/title_faq.png" class="response_img"></h2>
        </div>
        

            
        <div class="col-xs-12 margin-top20">
        	<div class="panel panel-default">
        		<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseone">
                <div class="panel-heading clearfix">
                  <h4 class="panel-title">
                    
                      <span>Q1</span>为什么iPad上宝宝巴士的应用没有声音，而其他应用有？
                    
                  </h4>
                </div>
                </a>
                <div id="collapseone" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <P>首先在设备中进行如下操作：“设置”→“通用”→“侧边开关用于：”→“静音”；然后尝试开下声音按钮旁边的小按钮。</P>
                  </div>
                </div>
              </div>
        
        
              
              
              <div class="panel panel-default">
              	<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                <div class="panel-heading">
                  <h4 class="panel-title">
                      <span>Q2</span>ios设备进行越狱后，导致宝宝巴士应用无法运行，出现闪退现象?
                  </h4>
                </div>
                </a>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    <P>越狱后会出现机子不稳定的情况，查看是不是装了IAPFree插件？要是安装后在Cydia中卸载了IAPFree这个插件就可以运行了。</P>
                  </div>
                </div>
              </div>
              
              <div class="panel panel-default">
              	<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" class="collapsed">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    
                      <span>Q3</span>如何卸载宝宝巴士应用?
                    
                  </h4>
                </div>
                </a>
                <div id="collapsefour" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h5><strong>Android：</strong></h5>
                    <P>A.长按应用程序，拖至删除处删除即可。</P>
					<P>B.选中设备中“设置”→“程序管理”，寻找需要卸载的应用进入卸载页面进行操作。</P>
					<P>C.使用手机助手、豌豆荚等工具，将设备连上电脑，选择需卸载的应用进行卸载。</P>
                    <h5><strong>iOS：</strong></h5>
                    <P>A.在桌面页面内，长按应用程序几秒钟后会出现应用图标抖动状态和红色小叉叉，点击小叉即可删除。</P>
                    <p>B.iTunes，用数据线连接后，可以管理删除。</p>
                    <p>C.iTools，用数据线连接后，可以管理删除</P>
                  </div>
                </div>
              </div>
              
              
              <div class="panel panel-default">
              	<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" class="collapsed">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    
                      <span>Q4</span>Android如何下载应用安装到SD卡?
                    
                  </h4>
                </div>
                </a>
                <div id="collapsesix" class="panel-collapse collapse">
                  <div class="panel-body">
                    <P>应用程序一般都是安装到手机内存不会安装到SD卡的，一下是操作方法：</P>
                    <P>A.应用程序移动方法：设置→程序→程序管理→找到要移动的应用程序点击→移至SD卡这样应用程序就会被安装到SD卡了，但这样只是这款应用程序安装到SD卡，并不代表以后安装的应用程序都会安装到SD卡，这是需要自己去移动的。</P>
                    <P>B.可利用豌豆荚或手机助手进行安装，连接设备安装前，在豌豆荚或手机助手中的设置中设置应用下载在SD卡。</p>
                  </div>
                </div>
              </div>
              
              
              
              <div class="panel panel-default">
              	<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" class="collapsed">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    
                      <span>Q5</span>Android设备突然无法运行的宝宝巴士应用?
                    
                  </h4>
                </div>
                </a>
                <div id="collapseseven" class="panel-collapse collapse">
                  <div class="panel-body">
                    <P>设备中的软件开启数量多或者下载的软件太多了，可以利用系统优化程序清理下系统，关闭不必要的应用进程。</P>                    
                    <p>友情提示：建议在WiFi的环境下下载应用。</p>
                  </div>
                </div>
              </div>
           </div>
		
    	</div>
    </div>
</div>
<?php } ?>
</div>





<!--=============footer页脚====================
==============================================-->

<div class="product_three">
	<div class="container margin-top50">
	</div>
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