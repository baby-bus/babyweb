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
<title>アプリ - BabyBus　幼児教育・子ども向け知育アプリ</title>
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


<div class="product_one">
	<div class="container margin-top70">
		<ul class="list-unstyled menu" role="tablist">
			<li class="color_green list-clear "><a href="javascript:;" id="new_product">新着アプリ</a></li>			
			<li class="color_purple list-clear "><a href="javascript:;" id="hot_product">人気アプリ</a></li>	
			<li class="color_yellow list-clear dropdown">

				<a id="dLabel" class="active" data-target="#" href="#" data-toggle="dropdown">
			      	1歳～3歳
			    <span class="caret"></span>
			  </a>

			    <ul class="list-unstyled dropdown-menu list-inline menu educate" role="menu" aria-labelledby="dLabel">
				  	<li data-value="2"  data-label = "1歳～3歳" data-title="知識編"><a href="javascript:;">知識編</a></li>
				  	<li data-value="3"  data-label = "1歳～3歳" data-title="ゲーム編"><a href="javascript:;">ゲーム編</a></li>
				  	<li data-value="4"  data-label = "1歳～3歳" data-title="童謡編"><a href="javascript:;">童謡編</a></li>
				</ul>

			</li>
			
			<li class="color_pink list-clear dropdown">

				<a id="dLabel" data-target="#" href="#" data-toggle="dropdown" >
			     3歳～6歳
			    <span class="caret"></span>
			  </a>

			    <ul class="list-unstyled dropdown-menu probe list-inline menu educate" role="menu" aria-labelledby="dLabel">
				  	<li data-value="7" data-label = "3歳～6歳" data-title="知力編"><a href="javascript:;">知力編</a></li>
				  	<li data-value="8" data-label = "3歳～6歳" data-title="百科編"><a href="javascript:;">百科編 </a></li>
				  	<li data-value="9" data-label = "3歳～6歳" data-title="芸術編"><a href="javascript:;">芸術編</a></li>
				</ul>

			</li>

						
		</ul>
	</div>
</div>
<a id="product"></a>
<div class="container product_two" >
	<div class="row">
		<div class="col-sm-9">
			<ol class="breadcrumb">
				<li>アプリ</li>
				<li>新着アプリ</li>
			</ol>
		</div>
		<div class="col-sm-3 pull-right">
			
		<div class="input-group margin-bottom10 margin-top10">     
          <input class="form-control flexselect" type="text" id="president_flexselect" placeholder="人気アプリ検索" autocomplete="off" tabindex="2" style="visibility: visible;">
          <span class="input-group-btn">
            <button id="search" class="btn btn-default btn-color" type="button">検索</button>
          </span>
        </div>
        </div>
	</div>
</div>


<div class="container product_two product_list">
	<div class="row infinitescroll" id="product_list">
	 <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="col-sm-4 border">
				<div class="box">
				
				<img src="<?php echo $val['app_images'] ? $val['app_images']:'__PUBLIC__/images/Public/default.gif';?>" class="img-responsive imgradius" onerror="javascript:this.src='__PUBLIC__/images/Public/default.gif'"/>
				<h1><?php echo ($val['app_name']); ?></h1>
				<p class="describe"><span><?php echo ($val['intro']); ?></span></p>
				<?php if($val['is_active'] == 0): ?><p class="device-icon"><span><img src="__PUBLIC__/images/product/waitfor.png"></span></p>
				<?php else: ?>
						<?php echo show_down($val[android_url],$val[cell_android_url],$val[iphone_url],$val[ipad_url]); endif; ?>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>

        <!--<a href="http://wwww.badidu.com/qq.htm?page=1"></a>-->       <!-- 此处可以是url，可以是action，要注意不是每种html都可以加，是跟当前网页有相同布局的才可以。另外一个重要的地方是page参数，这个一定要加在这里，它的作用是指出当前页面页码，没加载一次数据，page自动+1,我们可以从服务器用request拿到他然后进行后面的分页处理。-->
       <a id="navigation" href="<?php echo U('getMore',array('page'=>2));?>"></a> 
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


<script src="__PUBLIC__/js/toastr.js"></script>
<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/jquery.infinitescroll.min.js"></script>
<script src="__PUBLIC__/js/public.js"></script>
<script src="__PUBLIC__/js/function.js"></script>
<script>
	$(".describe").each(function (i) {
		//超出3行 添加省略号！
            var divH = $(this).height();
            var $p = $("span", $(this)).eq(0);
            while ($p.outerHeight() > divH) {
                $p.text($p.text().replace(/(\s)*([a-zA-Z0-9]+|\W)(\.\.\.)?$/, "..."));
            };
        });
</script>
</body>
</html>