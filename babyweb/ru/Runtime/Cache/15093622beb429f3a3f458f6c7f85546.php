<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
		<meta name="description" content="专注于为学龄前儿童研发教育软件产品，通过移动互联平台，打造一个全球知名的卡通品牌形象，将中国传统文化融合国际化元素传播至大中华文化圈乃至全球。">
		<meta name="keywords" content="宝宝巴士,宝贝巴士,BabyBus,在线教育,幼儿教学,儿童软件,儿童应用,移动早教,熊猫,早教,幼教">
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
		<title>友情链接 - 宝宝巴士 快乐童年 - 启蒙教育第一品牌</title>
	</head>

	<body>

		<!--=============section主体内容区域===================
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
            <li data-value="Index"><a href="<?php echo U('Index/index');?>">Главная страница</a></li>            
            <li data-value="Product"><a href="<?php echo U('Product/index');?>">Приложения</a></li>            
            <!--<li data-value="Join"><a href="<?php echo U('Join/index');?>">招聘</a></li>-->
            <li data-value="Blog"><a href="<?php echo U('blog/index');?>">Блог</a></li>
            <li data-value="Download"><a href="<?php echo U('Download/index');?>">Помощь</a></li>  
            <li data-value="About"><a href="<?php echo U('About/index');?>">О нас</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">Русский<span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
					<li><a href="http://cn.babybus.com">简体中文</a></li>
					<li><a href="http://tw.babybus.com">繁體中文</a></li>
					<li><a href="http://en.babybus.com">English</a></li>
					<li><a href="http://ko.babybus.com">한국어</a></li>
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
		<div class="container download margin-top90">
			<div class="row joinus">
				<div class="col-md-3 hidden-xs hidden-sm">
					<div class="ist-group margin-top30"style="width: 213px;" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
						
					
					  <a href="declaration.shtml" class="list-group-item">Пользовательское Соглашение</a>
					  <a href="privacyPolicy.shtml" class="list-group-item">Политика конфиденциальности</a>
					  <a href="link.shtml" class="list-group-item active">Рекомендуемые ссылки</a>
					</div>
				</div>
				<div class="col-md-9 margin-top10 statements">

					<h3 style="color: #00BAE9;">Рекомендуемые ссылки</h3>
					<hr />
					<p>
                        Пожалуйста, отправьте ссылку на: tanglijun[at]baby-bus.com (Пожалуйста, замените [at] на @)
					</p>
					<hr />
					<ul class="list-inline">
                        <?php if(is_array($link_data)): foreach($link_data as $key=>$vo): ?><li class="col-sm-4">
                                <a href="<?php echo ($vo["link_url"]); ?>" target="_blank" title="<?php echo ($vo["link_name"]); ?>"><?php echo ($vo["link_name"]); ?></a>
                            </li><?php endforeach; endif; ?>
                    </ul>
				</div>
			</div>
		</div>
		<script src="__PUBLIC__/js/jquery.min.js"></script>
		<script src="__PUBLIC__/js/bootstrap.min.js"></script> 
	</body>

</html>