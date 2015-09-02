<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="BabyBus（ベビー・バス）は就学前のお子様を対象に開発された幼児教育アプリシリーズです。最新の教育理念を取り入れて、楽しさを通じて教育する方法で、早期教育の目的と効果を実感することができます。">
<meta name="keywords" content="宝宝巴士,ベビー・バス,BabyBus,幼児教育,子供向け,知育アプリ,ベビーかずにんしき,ベビーABC認識,ゲーム,教育,パンダ,ベビーかたち認識">
<meta name="author" content="BabyBus Group">
<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
<link href="__PUBLIC__/css/toastr.css" rel="stylesheet">
<link rel="apple-touch-icon-precomposed" href="<?php echo WEB_URL;?>/favicon.png">
<!--[if lt IE 9]><script src="__PUBLIC__/js/respons/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="__PUBLIC__/js/respons/html5shiv.js"></script>
      <script src="__PUBLIC__/js/respons/respond.min.js"></script>
    <![endif]-->
<link href="__PUBLIC__/css/public.css" rel="stylesheet">
<script src="__PUBLIC__/js/jquery.min.js"></script> 
<title>ヘルプ - BabyBus　幼児教育・子ども向け知育アプリ</title>
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

<div class="padding-top70 download-banner">
	<div class="download-banner-International container">
		
	</div>
	<?php if(device()=='pc'){ ?>
	<div class="product_one">
	<div class="container">
		<ul class="list-unstyled menu" role="tablist">
			<li class="color_green list-clear down" style="width: 33.3333%; height: 35px;"><a style="padding: 8px 10px 15px 10px;" href="javascript:;" id="new_product">QRコードのスキャン</a></li>			
			<li class="color_yellow list-clear guide" style="width: 33.3333%; height: 35px;"><a style="padding: 8px 10px 15px 10px;" href="javascript:;" id="hot_product">ダウンロードガイド</a></li>
			<li class="color_pink list-clear faq" style="width: 33.3333%; height: 35px;"><a style="padding: 8px 10px 15px 10px;" href="javascript:;" id="hot_product">よくあるご質問</a></li>	
		</ul>
	</div>	
	</div>
	<?php } ?>
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
			<div class="col-xs-12 margin-top40 text-center">
				<a id="down"></a>
	        	      		
	        		<a href=<?php echo is_ios() ? "https://itunes.apple.com/cn/artist/babybus/id654666096" : U('product/showDownList');?>><img src="__PUBLIC__/images/Public/click_down.png" class="img-responsive"></a>
					
	        
	        </div>
	    </div>
	<?php }else{ ?>
    
    
	<div class="row  margin-top40 hidden-xs">
		<div class="col-xs-6 text-center">
			<img src="__PUBLIC__/images/download/code_ios.jpg" />
			<p class="codebtni">for iOS</p>
		</div>
		<div class="col-xs-6 text-center">
			<img src="__PUBLIC__/images/download/code_android.png" />
			<p class="codebtna">for Android</p>
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
     	<h3 class="text-left" style="text-shadow: 0 1px 0 #efefef; line-height: 60px;">For Android
     	</h3>
     </div>     
 	<div class="col-xs-12 margin-top20">
     	<div class="float-left step">STEP</div><div class="span float-left">1</div><div class="float-left content" style=" padding-right: 100px; width: 100%;">Google Play ストア アプリを起動します。</div>
     </div>
     
     <div class="col-xs-12 margin-top20">
     	<div class="float-left step">STEP</div><div class="span float-left">2</div><div class="float-left content">アプリの検索窓で「BabyBus」またはアプリ名を入力、「BabyBus」のアプリをタップし、インストールしてください。</div>
     </div>
     <div class="col-xs-12 margin-top40">
     	<img src="__PUBLIC__/images/download/android_1.jpg">
     </div>
     </div>
   </div>  
    	            
<div class="col-xs-12"> 
  <div class="row innerpadding">  
   <div class="col-xs-12 margin-topa50 visible-lg">        	
   	<h3 class="text-left" style="text-shadow: 0 1px 0 #efefef; line-height: 60px;">For iOS 
   	</h3>
   </div>   
   <div class="col-xs-12 margin-top20">
   	<div class="float-left step">STEP</div><div class="span float-left">1</div><div class="float-left content" style="width: 100%;">ホーム画面にある「App Store」アプリをタップして、起動します。</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_1.jpg">
   </div>
   <div class="col-xs-12 margin-top60">
   	<div class="float-left step">STEP</div><div class="span float-left">2</div><div class="float-left content">「おすすめ」タブの一 番下までスクロールします。 Apple ID でサインインします。アカウントをお持ちでない場合は、「Apple IDを新規作成」をタップして Apple ID を作成してください。</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_2.jpg">
   </div>
   <div class="col-xs-12 margin-top60">
   	<div class="float-left step">STEP</div><div class="span float-left">3</div><div class="float-left content">画面下の「検索」をタップして、「BabyBus」またはアプリ名を入力して、検索します。「BabyBus」の検索結果が表示されます。「無料」（または有料）のアイコンをタップし、「インストール」をタップします。</div>
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
     	<h3 class="text-left" style="text-shadow: 0 1px 0 #efefef; line-height: 60px;">For Android
     	</h3>
     </div>     
 	<div class="col-xs-12 margin-top20">
     	<div class="float-left step">STEP</div><div class="span float-left">1</div><div class="float-left content" style=" padding-right: 100px; width: 100%;">Google Play ストア アプリを起動します。</div>
     </div>
     
     <div class="col-xs-12 margin-top20">
     	<div class="float-left step">STEP</div><div class="span float-left">2</div><div class="float-left content">アプリの検索窓で「BabyBus」またはアプリ名を入力、「BabyBus」のアプリをタップし、インストールしてください。</div>
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
   	<h3 class="text-left" style="text-shadow: 0 1px 0 #efefef; line-height: 60px;">For iOS 
   	</h3>
   </div>   
   <div class="col-xs-12 margin-top20">
   	<div class="float-left step">STEP</div><div class="span float-left">1</div><div class="float-left content" style="width: 100%;">ホーム画面にある「App Store」アプリをタップして、起動します。</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_1.jpg">
   </div>
   <div class="col-xs-12 margin-top60">
   	<div class="float-left step">STEP</div><div class="span float-left">2</div><div class="float-left content">「おすすめ」タブの一 番下までスクロールします。 Apple ID でサインインします。アカウントをお持ちでない場合は、「Apple IDを新規作成」をタップして Apple ID を作成してください。</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_2.jpg">
   </div>
   <div class="col-xs-12 margin-top60">
   	<div class="float-left step">STEP</div><div class="span float-left">3</div><div class="float-left content">画面下の「検索」をタップして、「BabyBus」またはアプリ名を入力して、検索します。「BabyBus」の検索結果が表示されます。「無料」（または有料）のアイコンをタップし、「インストール」をタップします。</div>
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
                    
                      <span>Q1</span>「BabyBus」で、音ができません。
                    
                  </h4>
                </div>
                </a>
                <div id="collapseone" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <P>お使いの端末が消音設定になっている可能性があります。</P>
                  </div>
                </div>
              </div>
        
        
              
              
              <div class="panel panel-default">
              	<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    
                      <span>Q2</span>インストールしたアプリが動きません。
                    
                  </h4>
                </div>
                </a>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    <P>ご利用のアプリを一旦終了し、再度起動してください。それでも動作しない場合はアプリを削除して、もう一度インストールをお試しください。</P>
                  </div>
                </div>
              </div>
              
              <div class="panel panel-default">
              	<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" class="collapsed">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    
                      <span>Q3</span>アプリを利用するのに、料金はかかりますか?
                    
                  </h4>
                </div>
                </a>
                <div id="collapsefour" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>ほとんど無料です。ほんの一部だけ有料となります。</P>
                  </div>
                </div>
              </div>
              
              
              <div class="panel panel-default">
              	<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" class="collapsed">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    
                      <span>Q4</span>アプリで遊ぶ時の注意点はありますか?
                    
                  </h4>
                </div>
                </a>
                <div id="collapsesix" class="panel-collapse collapse">
                  <div class="panel-body">
                      <P>小さなお子さんはアプリをPlayする時に、画面を近づけすぎないように、明るい場所で遊んでください。</p>
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