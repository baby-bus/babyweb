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
<script src="__PUBLIC__/js/bootstrap.min.js"></script> 
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

<!--=============banner横幅广告区===================
==============================================-->
<div class="support padding-top70 support-banner">
	
		<div class="support-banner1 hidden-xs">
			
		</div>
		<div class="container support-banner2 visible-xs">
			
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
            <div class="col-sm-8 infinitescrolls">
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item border">
                <h2><a href="__URL__/info/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></h2>
                <ul class="postmetadata clearfix">
                    <li class="author"><?php echo ($vo["username"]); ?></li>
                    <li class="date"><?php echo ($vo["createtime"]); ?></li>          
                </ul>
                <div><img  src="<?php echo $vo['thumb'] ? $vo['thumb']:__PUBLIC__/images/blog/temp42_14.png;?>" onerror="javascript:this.src='__PUBLIC__/images/blog/temp42_14.png'" class="img-responsive"/></div>
                <p class="digest" style='word-break:break-all;'><?php echo ($vo["match_p"]); ?>...</p>
                <p class="text-right"><a href="__URL__/info/id/<?php echo ($vo["id"]); ?>" class="btn btn-primary">Далее →</a></p>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <!--<a href="http://wwww.badidu.com/qq.htm?page=1"></a>-->       <!-- 此处可以是url，可以是action，要注意不是每种html都可以加，是跟当前网页有相同布局的才可以。另外一个重要的地方是page参数，这个一定要加在这里，它的作用是指出当前页面页码，没加载一次数据，page自动+1,我们可以从服务器用request拿到他然后进行后面的分页处理。-->
            <a id="navigation" href="<?php echo U('infoMore',array('page'=>2));?>"></a>  
		<div class="col-sm-4 blog">
                    <form action='' method='post' class="bcontact">
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
                    <p class="text-right margin-top10"><span style="float: left;"></span><a id='submit' class="btn btn-primary margin-top10" onclick="tosubmit()">Отправить</a></p>
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
<script src="__PUBLIC__/js/jquery.infinitescroll.min.js"></script>
<script src="__PUBLIC__/js/public.js"></script> 
</body>

<script type='text/javascript'>     
    function scroll(class_name){
		 $(class_name).infinitescroll({
		        navSelector: "#navigation",     //页面分页元素--成功后自动隐藏
		        nextSelector: "#navigation",
		        itemSelector: ".border " , 
				loading: {
				finishedMsg: "Нет новых данных",
	            img: "/Public/images/product/loading.gif",
	            msgText:"Загрузка..."			//加载时显示的文字
				},
				extraScrollPx: 150,                                            //离网页底部多少像素时触发ajax
				errorCallback: function(){
					//alert("出错！")
				},                             //加载完数据后的回调函数，可选
		    }); 
    }
    scroll(".infinitescrolls");
</script>
</html>