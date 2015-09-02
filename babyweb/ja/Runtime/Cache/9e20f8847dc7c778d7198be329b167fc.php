<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="就学前のお子様を対象に、それぞれの年齢にふさわしい教育応援プランを提供します。グローバル向けの知育アプリを、インターネットを通じて全世界に向けて配信していきます。">
<meta name="keywords" content="宝宝巴士,ベビー・バス,BabyBus,幼児教育,子供向け,知育アプリ,パンダ,キッズ,絵本,学習,赤ちゃん,ゲーム,教育,早期教育,iPhone,APP,Android">
<meta name="author" content="BabyBus Group">
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

<title>会社概要 - BabyBus　幼児教育・子ども向け知育アプリ</title>
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
          <div class="logo"><a href="<?php echo WEB_URL;?>"><img src="__PUBLIC__/images/Public/logo.png" alt="BabyBus focuses on meeting the educational needs of preschool children. We are fully mobile so children can take their favorite BabyBus characters with them anywhere they go. It's time to have the most fun learning." /></a></div>
        </div>
        <div class="navbar-collapse collapse navbar-right navbar-margintop">
          <ul class="nav navbar-nav">
            <li data-value="Index"><a href="<?php echo U('Index/index');?>">TOP</a></li>            
            <li data-value="Product"><a href="<?php echo U('Product/index');?>">アプリ</a></li>            
            <!--<li data-value="Join"><a href="<?php echo U('Join/index');?>">招聘</a></li>-->
            <li data-value="Blog"><a href="<?php echo U('blog/index');?>">BLOG</a></li>
            <li data-value="Download"><a href="<?php echo U('Download/index');?>">ヘルプ</a></li>  
            <li data-value="About"><a href="<?php echo U('About/index');?>">運営会社</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">日本語<span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
                    <li><a href="http://cn.babybus.com">简体中文</a></li>
                    <li><a href="http://tw.babybus.com">繁體中文</a></li>
                    <li><a href="http://en.babybus.com">English</a></li>
                    <li><a href="http://ko.babybus.com">한국어</a></li>
                    
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
        <h4><strong class="font_c_blue">BabyBusの理念</strong></h4>
        <P>BabyBus（ベビー・バス）は就学前のお子様を対象に開発された幼児教育アプリシリーズです。最新の教育理念を取り入れて、楽しさを通じて教育する方法で、早期教育の目的と効果を実感することができます。</P>
        
        <h4 class="margin-top30"><strong class="font_c_blue">BabyBusの強み</strong></h4>
        <P>BabyBus（ベビー・バス）シリーズはiOS/Androidに対応した１００タイトル以上の知育アプリを提供しています。日本語、中国語、英語、ロシア語、アラビア語、フランス語、韓国語、ドイツ語の8か国語をサポートしています。</P>
        
        <h4 class="margin-top30"><strong class="font_c_blue">私たちの目標</strong></h4>
        <P>私たちは、世界中の子ども達が楽しく遊んだり、学んだりすることができる環境づくりを目指して、これからも頑張って運営していきたいと思っています。</P>

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
                                    <span class="year">2009</span>
                                </div>
                            </div>
                            
                            <div class="point"><b></b></div>
                            
                            <div class="liright">
                                <div class="histt histtline"><a href="javascript:void(0)">会社を設立しました。</a></div>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="liwrap">
                            <div class="lileft">
                                <div class="date">
                                    <span class="year">2010</span>
                                </div>
                            </div>
                            
                            <div class="point"><b></b></div>
                            
                            <div class="liright">
                                <div class="histt histtline"><a href="javascript:void(0)">モバイルインターネット企業へ転換しました 。</a></div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="liwrap">
                            <div class="lileft">
                                <div class="date">
                                    <span class="year">2011</span>
                                </div>
                            </div>
                            
                            <div class="point"><b></b></div>
                            
                            <div class="liright">
                                <div class="histt"><a href="javascript:void(0)">全世界に向けて、子供向け知育アプリを提供し、各作品はAppStoreの教育＆子供向けカテゴリランキングTOP10入り達成しました。</a></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="liwrap">
                            <div class="lileft">
                                <div class="date">
                                    <span class="year">2012</span>
                                </div>
                            </div>
                            
                            <div class="point"><b></b></div>
                            
                            <div class="liright">
                                <div class="histt"><a href="javascript:void(0)">ユーザー数が全世界で１千万人を突破し、「CVAwards 2012年度最も潜在力の企業トップ100」賞を獲得しました。</a></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="liwrap">
                            <div class="lileft">
                                <div class="date">
                                    <span class="year">2013</span>
                                </div>
                            </div>
                            
                            <div class="point"><b></b></div>
                            
                            <div class="liright">
                                <div class="histt"><a href="javascript:void(0)">ＶＣ会社Shunwei China Internet Fund, L.P.から出資を受けました。</a></div>
                            </div>
                        </div>
                    </li>
              		  <li>
                        <div class="liwrap">
                            <div class="lileft">
                                <div class="date">
                                    <span class="year">2014</span>
                                </div>
                            </div>
                            
                            <div class="point"><b></b></div>
                            
                            <div class="liright">
                                <div class="histt"><a href="javascript:void(0)">中国において、トップ ７の非ゲーム系アプリのパブリッシャーになりました。</a></div>
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
        <div class="col-sm-6 joinus-p margin-top60">
        	<p class="p1">福建省福州市倉山区建新町金工ロード１、海峡創意産業園　第9ビル3F</p>            
            <p class="p3"><a href="mailto:ser@babybus.com" >メール: jp@babybus.com</a></p>
            <p class="p4"><A href="https://www.facebook.com/BabyBus.jp?ref=hl" target="_blank">Facebook</A></p>
            <p class="p5"><A href="https://twitter.com/Babybus_sinyee" target="_blank">Twitter</A></p>
        </div>
    </div>
</div>




<!--=============footer页脚====================
==============================================-->
<div class="product_three">

</div>
<div class="actGotop"><a href="javascript:;" title="PAGE TOP"></a></div>
<div class="four">
	<div class="container">
		<P>Copyright © 2014  信永情報技術有限会社 All Rights Reserved<br />
			<a href="<?php echo U('Index/declaration');?>" target="_blank">利用規約</a>&nbsp;&nbsp;<a href="<?php echo U('Index/privacyPolicy');?>" target="_blank">プライバシーポリシー</a>
			<script src="http://s22.cnzz.com/stat.php?id=3356281&web_id=3356281&show=pic" language="JavaScript"></script>
		</P>
	</div>
</div>


<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/public.js"></script>
<script src="__PUBLIC__/js/function.js"></script>
</body>
</html>