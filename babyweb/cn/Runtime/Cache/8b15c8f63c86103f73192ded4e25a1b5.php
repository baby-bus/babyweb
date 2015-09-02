<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="宝宝巴士结合不同年龄阶段的早教重点设计了启蒙站和探索站两个系列，通过寓教于乐的方式达到启蒙益智的目的。完善的知识体系框架，全方面培养宝宝能力，打造宝宝成长好伙伴。">
<meta name="keywords" content="宝宝巴士,宝贝巴士,BabyBus,启蒙,启蒙教育,在线教育,宝宝学数字,宝宝学ABC,儿童软件,儿童应用,移动早教,熊猫,早教,幼教,宝宝学形状">
<meta name="author" content="宝宝巴士（福建）网络科技有限公司">
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
<script src="__PUBLIC__/js/jquery.qrcode.min.js"></script> 

<title>产品 - 宝宝巴士 快乐童年 - 启蒙教育第一品牌</title>
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
            <li data-value="Join"><a href="<?php echo U('Join/index');?>">招聘</a></li>
            <li data-value="Download"><a href="<?php echo U('Download/index');?>">下载指南</a></li>
            <li data-value="About"><a href="<?php echo U('About/index');?>">关于我们</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">简体中文 <span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
					<li><a href="http://tw.babybus.com">繁體中文</a></li>
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
<div class="product_one">
	<div class="container margin-top70">
		<ul class="list-unstyled menu" role="tablist">
			<li class="color_green list-clear "><a href="javascript:;" id="new_product">最新产品</a></li>			
				
			<li class="color_yellow list-clear dropdown">

				<a id="dLabel" class="active" data-target="#" href="#" data-toggle="dropdown">
			      	启蒙教育1-3岁
			    <span class="caret"></span>
			  </a>

			    <ul class="list-unstyled dropdown-menu list-inline menu educate" role="menu" aria-labelledby="dLabel">
				  	<li data-value="2"  data-label = "启蒙教育" data-title="认知篇"><a href="javascript:;">认知篇</a></li>
				  	<li data-value="3"  data-label = "启蒙教育" data-title="游戏篇"><a href="javascript:;">游戏篇</a></li>
				  	<li data-value="4"  data-label = "启蒙教育" data-title="儿歌篇"><a href="javascript:;">儿歌篇</a></li>
				</ul>

			</li>
			
			<li class="color_pink list-clear dropdown">

				<a id="dLabel" data-target="#" href="#" data-toggle="dropdown" >
			      探索教育3-6岁
			    <span class="caret"></span>
			  </a>

			    <ul class="list-unstyled dropdown-menu probe list-inline menu educate" role="menu" aria-labelledby="dLabel">
				  	<li data-value="7" data-label = "探索教育" data-title="百科馆"><a href="javascript:;">百科馆</a></li>
				  	<li data-value="8" data-label = "探索教育" data-title="智力园"><a href="javascript:;">智力园</a></li>
				  	<li data-value="9" data-label = "探索教育" data-title="艺术馆"><a href="javascript:;">艺术馆</a></li>
				</ul>

			</li>

			<li class="color_purple list-clear "><a href="<?php echo U('childsong');?>">儿歌动画</a></li>			
			<!--<li class="color_purple list-clear "><a href="<?php echo U('fm');?>">父母必备</a></li>-->			
		</ul>
	</div>
</div>
<a id="product"></a>
<div class="container product_two" >
	<div class="row">
		<div class="col-sm-9">
			<ol class="breadcrumb">
				<li>产品</li>
				<li>最新产品</li>
				<li><?php echo ($data[0]["app_name"]); ?></li>
			</ol>
		</div>
		<div class="col-sm-3 pull-right">	
		<div class="input-group margin-bottom10 margin-top10">     
          <input class="form-control flexselect" type="text" id="president_flexselect" placeholder="热门产品搜索" autocomplete="off" id="president_flexselect" tabindex="2" style="visibility: visible;">
          <span class="input-group-btn">
            <button id="search" class="btn btn-default btn-color" type="button">搜索</button>
          </span>
        </div>
        </div>
	</div>
</div>
<div class="container product_two pdinfo">
	<div class="row">
		<div class="col-sm-3 pdImgInfo">
			<div class="row">
				<div class="titleImg col-xs-6 col-sm-12">
                    <img width='178px' height='133px' src="<?php if(empty($data[0][app_logo])): ?>default<?php else: echo ($data[0]['app_logo']); endif; ?>" onerror="javascript:this.src='__PUBLIC__/images/Public/default.gif'" class="img-responsive" />
				</div>
				<div class="margin-top30 col-xs-6 col-sm-12">
					<h4 class="visible-xs"><?php echo ($data[0]['app_name']); ?></h4>
                    <?php switch($device): case "pc": if(empty($down_url["app_url"])): ?><a id="img_ios"><img src="__PUBLIC__/images/product/waitfor.png" class="img-responsive"/></a>
                            <?php else: ?>
                                <a id="img_ios" target="_blank" href="<?php echo ($down_url["app_url"]); ?>"><img src="__PUBLIC__/images/product/apptree.png" class="img-responsive"/></a><?php endif; ?> 
                            <?php if(empty($down_url["and_url"])): ?><a id="img_and"><img src="__PUBLIC__/images/product/waitfor.png" class="img-responsive"/></a>
                            <?php else: ?>
                                <a id="img_and" target="_blank" href="<?php echo ($down_url["and_url"]); ?>"><img src="__PUBLIC__/images/product/android.png" class="img-responsive"/></a><?php endif; break;?>
                        <?php case "iphone": if(empty($down_url["app_url"])): ?><a id="img_ios"><img src="__PUBLIC__/images/product/waitfor.png" class="img-responsive"/></a>
                            <?php else: ?>
                                <a id="img_ios" target="_blank" href="<?php echo ($down_url["app_url"]); ?>"><img src="__PUBLIC__/images/product/apptree.png" class="img-responsive"/></a><?php endif; break;?>
                        <?php case "ipad": if(empty($down_url["app_url"])): ?><a id="img_ios"><img src="__PUBLIC__/images/product/waitfor.png" class="img-responsive"/></a>
                            <?php else: ?>
                                <a id="img_ios" target="_blank" href="<?php echo ($down_url["app_url"]); ?>"><img src="__PUBLIC__/images/product/apptree.png" class="img-responsive"/></a><?php endif; break;?>
                        <?php case "ipod": if(empty($down_url["app_url"])): ?><a id="img_ios"><img src="__PUBLIC__/images/product/waitfor.png" class="img-responsive"/></a>
                            <?php else: ?>
                                <a id="img_ios" target="_blank" href="<?php echo ($down_url["app_url"]); ?>"><img src="__PUBLIC__/images/product/apptree.png" class="img-responsive"/></a><?php endif; break;?>
                        <?php case "android": if(empty($down_url["and_url"])): ?><a id="img_and"><img src="__PUBLIC__/images/product/waitfor.png" class="img-responsive"/></a>
                            <?php else: ?>
                                <a id="img_and" target="_blank" href="<?php echo ($down_url["and_url"]); ?>"><img src="__PUBLIC__/images/product/android.png" class="img-responsive"/></a><?php endif; break;?>
                        <?php default: ?>default<?php endswitch;?>
				</div> 
                <!-- 二维码 -->
                <?php if( $device == 'pc' ): ?><div class="margin-top30 col-xs-6 col-sm-12">
                    <div style='width:130px;height:130px;margin:auto auto;'>
                        <div id="qrcode"><div style='position:absolute;margin:50px;width:30px; height:30px;background:url(__PUBLIC__/images/product/info/qrcode.png) no-repeat;'>&nbsp;</div></div>
                        <p style='text-align:center;'>扫二维码快速下载</p>
                    </div>
				</div><?php endif; ?> 
			</div>
		</div>
		<div class="col-sm-9">
			<div class="pdBorder">
			<h3 class="hidden-xs"><?php echo ($data[0]["app_name"]); ?></h3>
			<div class="margin-top20">	
				<p>
                    <?php switch($device): case "pc": ?><p><span class="tagBlue">iOS</span>：<span class="tagRoutine"><?php if($data[0]['ios_price'] == 0): ?>免费<?php else: echo ($data[0]['ios_price']); endif; ?></span>
                                <span class="tagGreen">Android</span>：<span class="tagRoutine"><?php if($data[0]['and_price'] == 0): ?>免费<?php else: echo ($data[0]['and_price']); endif; ?></span></p>
                            <p class="margin-top20"><span class="tagGray">更新</span>：<span class="tagRoutine"><?php if(!$data[0]['updatetime']){echo date('Y-m-d',time());}else{echo date('Y-m-d',$data[0]['updatetime']);} ?></span></p>
                            <p><span class="tagGray">版本</span>：<span class="tagRoutine" style='display:inline-block;width:120px;'>iOS <?php if(empty($data[0]['ios_version'])): ?>开发中<?php else: echo ($data[0]['ios_version']); endif; ?></span>
                                <span class="tagRoutine">Android <?php if(empty($data[0]['and_version'])): ?>开发中<?php else: echo ($data[0]['and_version']); endif; ?></span></p>
                            <p><span class="tagGray">大小</span>：<span class="tagRoutine" style='display:inline-block;width:120px;'>iOS <?php if(empty($data[0]['ios_size'])): ?>开发中<?php else: echo ($data[0]['ios_size']); ?> MB<?php endif; ?></span>
                                <span class="tagRoutine">Android  <?php if(empty($data[0]['and_size'])): ?>开发中<?php else: echo ($data[0]['and_size']); ?>MB<?php endif; ?></span></p><?php break;?>
                        <?php case "iphone": ?><p><span class="tagBlue">iOS</span>：<span class="tagRoutine"><?php if($data[0]['ios_price'] == 0): ?>免费<?php else: echo ($data[0]['ios_price']); endif; ?></span></p>
                            <p class="margin-top20"><span class="tagGray">更新</span>：<span class="tagRoutine"><?php if(!$data[0]['updatetime']){echo date('Y-m-d',time());}else{echo date('Y-m-d',$data[0]['updatetime']);} ?></span></p>
                            <p><span class="tagGray">版本</span>：<span class="tagRoutine">iOS <?php if(empty($data[0]['ios_version'])): ?>开发中<?php else: echo ($data[0]['ios_version']); endif; ?></span></p>
                            <p><span class="tagGray">大小</span>：<span class="tagRoutine">iOS <?php if(empty($data[0]['ios_size'])): ?>开发中<?php else: echo ($data[0]['ios_size']); ?> MB<?php endif; ?></span></p><?php break;?>
                        <?php case "ipad": ?><p><span class="tagBlue">iOS</span>：<span class="tagRoutine"><?php if($data[0]['ios_price'] == 0): ?>免费<?php else: echo ($data[0]['ios_price']); endif; ?></span></p>
                            <p class="margin-top20"><span class="tagGray">更新</span>：<span class="tagRoutine"><?php if(!$data[0]['updatetime']){echo date('Y-m-d',time());}else{echo date('Y-m-d',$data[0]['updatetime']);} ?></span></p>
                            <p><span class="tagGray">版本</span>：<span class="tagRoutine">iOS <?php if(empty($data[0]['ios_version'])): ?>开发中<?php else: echo ($data[0]['ios_version']); endif; ?></span></p>
                            <p><span class="tagGray">大小</span>：<span class="tagRoutine">iOS <?php if(empty($data[0]['ios_size'])): ?>开发中<?php else: echo ($data[0]['ios_size']); ?> MB<?php endif; ?></span></p><?php break;?>
                        <?php case "ipod": ?><p><span class="tagBlue">iOS</span>：<span class="tagRoutine"><?php if($data[0]['ios_price'] == 0): ?>免费<?php else: echo ($data[0]['ios_price']); endif; ?></span></p>
                            <p class="margin-top20"><span class="tagGray">更新</span>：<span class="tagRoutine"><?php if(!$data[0]['updatetime']){echo date('Y-m-d',time());}else{echo date('Y-m-d',$data[0]['updatetime']);} ?></span></p>
                            <p><span class="tagGray">版本</span>：<span class="tagRoutine">iOS <?php if(empty($data[0]['ios_version'])): ?>开发中<?php else: echo ($data[0]['ios_version']); endif; ?></span></p>
                            <p><span class="tagGray">大小</span>：<span class="tagRoutine">iOS <?php if(empty($data[0]['ios_size'])): ?>开发中<?php else: echo ($data[0]['ios_size']); ?> MB<?php endif; ?></span></p><?php break;?>
                        <?php case "android": ?><p><span class="tagGreen">Android</span>：<span class="tagRoutine"><?php if($data[0]['and_price'] == 0): ?>免费<?php else: echo ($data[0]['and_price']); endif; ?></span></p>
                            <p class="margin-top20"><span class="tagGray">更新</span>：<span class="tagRoutine"><?php if(!$data[0]['updatetime']){echo date('Y-m-d',time());}else{echo date('Y-m-d',$data[0]['updatetime']);} ?></span></p>
                            <p><span class="tagGray">版本</span>：<span class="tagRoutine">Android <?php if(empty($data[0]['and_version'])): ?>开发中<?php else: echo ($data[0]['and_version']); endif; ?></span></p>
                            <p><span class="tagGray">大小</span>：<span class="tagRoutine">Android  <?php if(empty($data[0]['and_size'])): ?>开发中<?php else: echo ($data[0]['and_size']); ?>MB<?php endif; ?></span></p><?php break;?>
                        <?php default: ?>default<?php endswitch;?>
				<p><span class="tagGray">语言</span>：<span class="tagRoutine">俄文, 德文, 日文, 法文, 简体中文, 繁体中文, 英文, 韩文</span></p>
				<p class="margin-top40">
                    <?php echo ($data[0]["intro"]); ?>
					<br /><br /><br />
					【应用特色】<br />
					<?php echo ($data[0]["webintro"]); ?>
				</p>
			</div>
			<hr />
			<h4>产品截图</h4>
			<div id="myCarousel" class="carousel slide visible-xs" data-ride="carousel"> 
            <div id="owl-demo" class="owl-carousel">
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item"><img src="<?php echo ($vo["img"]); ?>" class="img-responsive"></div><?php endforeach; endif; else: echo "" ;endif; ?>
              </div> 
            </div>
			<div class="flexslider hidden-xs">
                <ul class="slides">
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li data-thumb="<?php echo ($vo["img"]); ?>">
                            <img src="<?php echo ($vo["img"]); ?>">
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
			<hr />
			<div class="">
				<h4>猜你喜欢</h4>
				<div class="row text-center margin-top20">
                    <?php if(is_array($hots)): $i = 0; $__LIST__ = $hots;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-2 col-xs-4">
                            <a href='__ACTION__/id/<?php echo ($vo["id"]); ?>'><img src="<?php if(empty($vo[app_logo])): ?>default<?php else: echo ($vo['app_logo']); endif; ?>" onerror="javascript:this.src='__PUBLIC__/images/Public/app_logo.gif'" class="img-responsive"/></a>
                            <p><a href='__ACTION__/id/<?php echo ($vo["id"]); ?>' style='text-decoration:none;'><?php if(empty($vo["app_alias"])): echo ($vo["app_name"]); else: echo ($vo["app_alias"]); endif; ?></a></p>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>		
				</div>
			</div>
			</div>
		</div>
	</div>
    
    <!--<a href="http://wwww.badidu.com/qq.htm?page=1"></a>-->       
    <!-- 此处可以是url，可以是action，要注意不是每种html都可以加，是跟当前网页有相同布局的才可以。另外一个重要的地方是page参数，这个一定要加在这里，它的作用是指出当前页面页码，没加载一次数据，page自动+1,我们可以从服务器用request拿到他然后进行后面的分页处理。-->
    <a id="navigation" href="<?php echo U('getMore',array('page'=>2));?>"></a>

</div>


<!--=============footer页脚====================
==============================================-->
<div class="product_three">
</div>
<div class="actGotop"><a href="javascript:;" title="返回顶部"></a></div>
<div class="four">
	<div class="container">
        <?php if($link_data != null): ?><p>友情链接：
                <?php if(is_array($link_data)): foreach($link_data as $key=>$vo): ?><a href="<?php echo ($vo["link_url"]); ?>"><?php echo ($vo["link_name"]); ?></a>&nbsp;&nbsp;<?php endforeach; endif; ?>
                <a href="<?php echo U('Index/link');?>">更多</a>
            </p><?php endif; ?>
		<P>Copyright © 2015 BabyBus All Rights Reserved
			<br class="visible-xs" />福州智永信息科技有限公司<br />
			<a href="<?php echo U('Index/declaration');?>" target="_blank">使用声明</a>&nbsp;&nbsp;<a href="<?php echo U('Index/privacyPolicy');?>" target="_blank">隐私政策</a>
			闽ICP备12010148号-1<script src="http://s22.cnzz.com/stat.php?id=3356281&web_id=3356281&show=pic" language="JavaScript"></script>
		</P>
	</div>
</div>
<script src="__PUBLIC__/js/toastr.js"></script>
<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/jquery.infinitescroll.min.js"></script>
<script src="__PUBLIC__/js/public.js"></script>
<script src="__PUBLIC__/js/function.js"></script>
<script type="text/javascript">
    
	$('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
    //二维码生成
    var jump_url = '<?php echo ($jump_url); ?>';
    $(function(){
        $('#qrcode').qrcode({width:130,height:130,text:jump_url});
    });
    
    
    
    
</script>
</body>
</html>