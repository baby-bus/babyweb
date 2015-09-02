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

<title>О нас - BabyBus - всегда отличные приложения для детей</title>
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
        <h4><strong class="font_c_blue">Кто:</strong></h4>
        <P>BabyBus фокусируется на удовлетворении образовательных потребностей детей дошкольного возраста. Наши приложения делятся на две возрастные группы: для начинающих и продолжающих.  Наша цель- сделать обучение веселой задачей для детей.</P>
        
        <h4 class="margin-top20"><strong class="font_c_blue">Что：</strong></h4>
        <P>На сегодняшний день приложения BabyBus насчитывает более 100 приложений. Поддерживает устройства Android и  iOS. Приложения выпускаются на девяти языках (китайский упрощенный, китайский традиционный, японский, английский, русский, арабский, французский, корейский, немецкий).</P>
        
        <h4 class="margin-top20"><strong class="font_c_blue">Цели：</strong></h4>
        <P>Мы пробуждаем интерес ребенка к знаниям, а не просто учим его чему-либо.
		   Наша цель - развитие способностей, а не только передача информации.
		   Мы используем принцип "Обучение - в радость!" и не приемлем некомфортных для ребенка методов обучения.  </P>


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
                                <div class="histt histtline"><a href="javascript:void(0)">Основание BabyBus.</a></div>
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
                                <div class="histt histtline"><a href="javascript:void(0)">Вступление образовательных приложений BabyBus на мобильный рынок.</a></div>
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
                                <div class="histt"><a href="javascript:void(0)">Введение главных героев Кики и Мюмю; Глобальный он-лайн продукт, каждое приложение входит в топ-лист 10 лучших учебных приложений в App Store и Google Play.</a></div>
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
                                <div class="histt"><a href="javascript:void(0)">Количество глобальных пользователей достигло 10 миллионов; BabyBus получил премию CVAwards, как одна из 100 лучших  компаний года.</a></div>
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
                                <div class="histt"><a href="javascript:void(0)">BabyBus получил финансирование в размере одного миллиона долларов. </a></div>
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
                                <div class="histt"><a href="javascript:void(0)">BabyBus занял седьмое место в топ-листе самых скачиваемых приложений в Китае.</a></div>
                            </div>
                        </div>
                    </li>

                    
                </ul>
            </div>
        </div>
        </div> 
		

    </div>
    
</div>




<div class="container margin-top250">
	<div class="row joinus margin-top90">

        <div class="col-sm-12 downline title_icon">
           <h2><img src="__PUBLIC__/images/Public/title_content.png" class="response_img"></h2>
        </div>
    </div>
    <div class="row joinus">
    	<div class="col-sm-6 text-center margin-top20">
        <img class=" response_img" src="__PUBLIC__/images/joinus/map.png"></div>
        <div class="col-sm-6 joinus-p margin-top30">
        	<p class="p1">BabyBus, Cross-Strait Creative and Industrial Garden No.9 3F, Jingong Road No.1, Cangshan District, Fuzhou, Fujian, China</p>            
            <p class="p3">E-mail: ru@babybus.com</p>
            <p class="p4"><A href="https://vk.com/babybusru" target="_blank">Вконтакте</A></p>
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
</html>