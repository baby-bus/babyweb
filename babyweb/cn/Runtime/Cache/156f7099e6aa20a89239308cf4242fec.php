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
		<title>隐私权声明 - 宝宝巴士 快乐童年 - 启蒙教育第一品牌</title>
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
						
					
					  <a href="declaration.shtml" class="list-group-item">使用申明</a>
					  <a href="privacyPolicy.shtml" class="list-group-item active">隐私政策</a>
                        <?php if($count > 0): ?><a href="link.shtml" class="list-group-item">友情链接</a><?php endif; ?>
					</div>
				</div>
				<div class="col-md-9 margin-top10 statements">

					<h3 style="color: #00BAE9;">隐私权声明——概述</h3>
					<p>本隐私权政策详细说明了宝宝巴士（福建）网络科技有限公司（“宝宝巴士”、“我们”或“我们的”）通过我们的应用程序和网站收集的信息，以及我们将如何使用这些信息。</p>
					<ul>
						<li>1.宝宝巴士不会通过我们的应用程序或网站收集儿童的个人信息。
							
								<p>我们深知用户个人信息的重要性，特别是对于未成年人。在我们的app及网站中，不要求用户输入详细个人信息资料。用户使用宝宝巴士软件时可能会被宝宝巴士读取一些信息（比如基于网络的粗略位置、GPS位置、网络通信、手机状态、wifi状态等），这是由于宝宝巴士产品本身已拥有中文、英语、日语、法语、阿拉伯语、俄语等多国语言，以便于宝宝巴士有针对性的开发个性化产品；iOS与android手机设备多样化，我们需要进行多种兼容性测试以保证宝宝巴士用户能正常使用软件；由于移动互联行业的特殊性，宝宝巴士产品需要配合硬件的升级进行产品本身或者产品自身品质的升级，因此可能需要读取wifi来告知用户是否有升级产品出现，如没有启动wifi则不提示。这样可以避免用户在不知情的情况下更新产品,造成不必要的流量 损耗等等诸如此列的原因。宝宝巴士承诺所读取到的任何信息，只被使用于宝宝巴士软件的开发，而不会透入给第三方（其它个人或公司），除非得到您的许可或法律或政府的强制规定。</p>
									
							
						</li>
						<li>2.我们遵守“儿童在线隐私保护法案”
							
								<p>我们的所有儿童类app及网站遵循有关儿童在线隐私保护条款。我们不会有意收集任何未满13周岁儿童的个人信息，如检测到年龄小于13周岁，我们将会及时删除相关信息，不会予以保留、存储。</p>
							
						</li>
						
						<li>3.第三方网站链接
							<p>我们可能会提供从我们的网站链接和/或连接到第三方网站或服务，对第三方网站的隐私做法或内容，我们不予负责。</p>
						</li>
						<li>4.隐私政策修改
							<p>我们可能会对隐私条款进行随时修改，并保留最终解释权。</p>
						</li>
						<li>5.联系我们
							<p>如果您有关于本隐私政策的任何问题或疑虑，请发送邮件到：ser@babybus.com</p>
						</li>

							
					</ul>
					






				</div>
			</div>

		</div>
		<script src="__PUBLIC__/js/jquery.min.js"></script>
		<script src="__PUBLIC__/js/bootstrap.min.js"></script> 
	</body>

</html>