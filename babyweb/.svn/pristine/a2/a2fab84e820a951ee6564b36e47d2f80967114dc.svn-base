<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="BabyBus специализируется на производстве и разработке образовательных приложений для детей дошкольного возраста. Мы создаем мобильную платформу, позволяющую совместить традиционную культуру Китая в гармонии с элементами различных культур Мира.">
<meta name="keywords" content="BabyBus, онлайн-образование,  детские программы и приложения, дети, панда, малыши">
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
<title>Блог - BabyBus - всегда отличные приложения для детей</title>
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
<div class="about padding-top70 about-banner">
	
		<div class="about-banner1 hidden-xs">
			
		</div>
		<div class="container about-banner2 visible-xs">
			
		</div>
	
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-9">
			<ol class="breadcrumb">
				<li><a href='__APP__'>TOP</a></li>
				<li><a href='__URL__'>BLOG</a></li>
			</ol>
		</div>
	</div>
	<div class="row blog">
		<h2 class="padding_t"><a href="#"><?php echo ($data["title"]); ?></a></h2>
		<div class="col-sm-8">
			<div class="item">
                <ul class="postmetadata clearfix">
                    <li class="author"><?php echo ($data["username"]); ?></li>
                    <li class="date"><?php echo ($data["createtime"]); ?></li>          
                </ul>
                <div>
                    <?php if($data["is_show"] == 1): ?><img src="<?php echo $data['thumb'] ? $data['thumb']:__PUBLIC__/images/blog/temp42_14.jpg;?>" onerror="javascript:this.src='__PUBLIC__/images/blog/temp42_14.jpg'" class="img-responsive"/><?php endif; ?>
                </div>
                <p class="digest"><?php echo ($data["content"]); ?></p>
			</div>
			<ul class="pager">
                <li class="previous"><a <?php if($data["id"] == $minid): ?>style="display: none;"<?php endif; ?> href="__URL__/info/id/<?php echo ($old_id); ?>">&larr; Назад</a></li>
                <li class="next"><a <?php if($data["id"] == $maxid): ?>style="display: none;"<?php endif; ?> href="__URL__/info/id/<?php echo ($new_id); ?>">Вперед &rarr;</a></li>
            </ul>
		</div>
		<div class="col-sm-4 blog bcontact">
                    <form action='' method='post'>
                    <h3><span style="color: #999999;">Связаться с нами</span> 
                    	<a href="https://vk.com/babybusru"><img src="__PUBLIC__/images/blog/f_icon.png" width="25" height="25" style="margin-top: -5px;"/></a>
                    </h3>
                    <div id="t_name" class="form-group">
                    <input type="text" name='name' class="form-control" onblur="isname()">
                    <p class="leave_p">Ваше имя</p>
                    </div>
                    
                    <div id="t_email" class="form-group">
                    <input type="text" name='email' class="form-control" onblur="isEmail()">
                    <p class="leave_p">Ваш E-Mail</p>
                    </div>
                    
                    <div id="t_content" class="form-group">
                    <textarea class="form-control" name='content' rows="5" onblur="isContent()"></textarea>
                    <p class="text-right margin-top20"><span style="float: left;"></span><a id='submit' class="btn btn-primary" onclick="tosubmit()">Отправить</a></p>
                    </div>
		</div>
	</div>
</div>




<!--=============footer页脚====================
==============================================-->
<div class="product_three">

</div>
<div class="actGotop"><a href="javascript:;" title="Наверх"></a></div>
<div class="four">
	<div class="container">
		<P>© BabyBus Group 2014 г. Все права защищены<br />
			<a href="<?php echo U('Index/declaration');?>" target="_blank">Правила пользования</a>&nbsp;&nbsp;<a href="<?php echo U('Index/privacyPolicy');?>" target="_blank">Политика конфиденциальности</a>
			<script src="http://s22.cnzz.com/stat.php?id=3356281&web_id=3356281&show=pic" language="JavaScript"></script>
		</P>
	</div>
</div>


<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/public.js"></script>
<script src="__PUBLIC__/js/function.js"></script>

</body>


<script type='text/javascript'>    
    //为元素添加自适应属性
    $(function(){
        $('.item img').attr("class","img-responsive");
        $('.item embed').attr("width","100%");
        $('img:last').attr("class","");
        $('span').css("word-break","break-all");
        $('p').css("word-break","break-all");
    })
</script>



</html>