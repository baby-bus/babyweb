<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="BabyBus фокусируется на удовлетворении образовательных потребностей детей дошкольного возраста. Наши приложения делятся на две возрастные группы: для начинающих и продолжающих.  Наша цель- сделать обучение веселой задачей для детей.">
<meta name="keywords" content="BabyBus,базовые знания, интернет образование, счет и цифры, английский алфавит, детские приложения, мобильное образование, панда, изучаем фигуры">
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
<title>Помощь - BabyBus - всегда отличные приложения для детей</title>
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

<div class="padding-top70 download-banner">
	<div class="download-banner-International container">
		
	</div>
	<?php if(device()=='pc'){ ?>
	<div class="product_one">
	<div class="container">
		<ul class="list-unstyled menu" role="tablist">
			<li class="color_green list-clear down" style="width: 33.3333%; height: 35px;"><a style="padding: 8px 10px 15px 10px;" href="javascript:;" id="new_product">Сканируйте QR-код</a></li>			
			<li class="color_yellow list-clear guide" style="width: 33.3333%; height: 35px;"><a style="padding: 8px 10px 15px 10px;" href="javascript:;" id="hot_product">Руководство по скачиванию</a></li>
			<li class="color_pink list-clear faq" style="width: 33.3333%; height: 35px;"><a style="padding: 8px 10px 15px 10px;" href="javascript:;" id="hot_product">FAQ</a></li>	
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
     	<h3 class="text-left" style="text-shadow: 0 1px 0 #efefef; line-height: 60px;">Руководство по скачиванию на Android
     	</h3>
     </div>     
 	<div class="col-xs-12 margin-top20">
     	<div class="float-left step">Шаг</div><div class="span float-left">1</div><div class="float-left content" style=" padding-right: 100px; width: 100%;">Заходим в приложение "Play Маркет" и добавим существующий аккаунт или создать новый.</div>
     </div>
     <div class="col-xs-12 margin-top40">
     	<img src="__PUBLIC__/images/download/android_1.jpg" class="img-responsive" style="margin: auto;">
     </div>
     
     
     <div class="col-xs-12 margin-top20">
     	<div class="float-left step">Шаг</div><div class="span float-left">2</div><div class="float-left content"> Нажмите на кнопку "Поиск" и введите "BabyBus" или название приложения.  Выберите приложение, которое хотите установить.</div>
     </div>
     <div class="col-xs-12 margin-top40">
     	<img src="__PUBLIC__/images/download/android_2.jpg" class="img-responsive" style="margin: auto;">
     </div>
     
     
     <div class="col-xs-12 margin-top20">
     	<div class="float-left step">Шаг</div><div class="span float-left">3</div><div class="float-left content">Нажмите на кнопку "Установить". Далее нажмите на кнопку "Принять". Затем ваш телефон загрузит приложение и установит его. Все делается в автоматическим режиме.</div>
     </div>
     <div class="col-xs-12 margin-top40">
     	<img src="__PUBLIC__/images/download/android_3.jpg" class="img-responsive" style="margin: auto;">
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
   	<div class="float-left step">Шаг</div><div class="span float-left">1</div><div class="float-left content" style="width: 100%;">Заходим в App Store.</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_1.jpg" class="img-responsive" style="margin: auto;">
   </div>
   <div class="col-xs-12 margin-top60">
   	<div class="float-left step">Шаг</div><div class="span float-left">2</div><div class="float-left content">Нажмите на кнопку "Войти". Регистрируемся или указываем существующие данные Apple ID.</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_2.jpg" class="img-responsive" style="margin: auto;">
   </div>
   <div class="col-xs-12 margin-top60">
   	<div class="float-left step">Шаг</div><div class="span float-left">3</div><div class="float-left content">Нажмите на кнопку "Поиск"  и введите "BabyBus" или название приложения.</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_3.jpg" class="img-responsive" style="margin: auto;">
   </div>
   
      <div class="col-xs-12 margin-top60">
   	<div class="float-left step">Шаг</div><div class="span float-left">4</div><div class="float-left content">Затем нажмите на кнопку "Бесплатно" или на сумму в которую оценивается приложение для загрузки/покупки. Далее ожидаем окончания загрузки приложения.</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_4.jpg" class="img-responsive" style="margin: auto;">
   </div>
   
   </div>
   </div>
    	<?php }else if(is_android()){ ?>
    		    <div class="col-xs-12"> 
    <div class="row innerpadding">
     <div class="col-xs-12 visible-lg">  
     	<a id="guide"></a>
     	<h3 class="text-left" style="text-shadow: 0 1px 0 #efefef; line-height: 60px;">Руководство по скачиванию на Android
     	</h3>
     </div>     
 	<div class="col-xs-12 margin-top20">
     	<div class="float-left step">Шаг</div><div class="span float-left">1</div><div class="float-left content" style=" padding-right: 100px; width: 100%;">Заходим в приложение "Play Маркет" и добавим существующий аккаунт или создать новый.</div>
     </div>
     <div class="col-xs-12 margin-top40">
     	<img src="__PUBLIC__/images/download/android_1.jpg" class="img-responsive" style="margin: auto;">
     </div>
     
     
     <div class="col-xs-12 margin-top20">
     	<div class="float-left step">Шаг</div><div class="span float-left">2</div><div class="float-left content"> Нажмите на кнопку "Поиск" и введите "BabyBus" или название приложения.  Выберите приложение, которое хотите установить.</div>
     </div>
     <div class="col-xs-12 margin-top40">
     	<img src="__PUBLIC__/images/download/android_2.jpg" class="img-responsive" style="margin: auto;">
     </div>
     
     
     <div class="col-xs-12 margin-top20">
     	<div class="float-left step">Шаг</div><div class="span float-left">3</div><div class="float-left content">Нажмите на кнопку "Установить". Далее нажмите на кнопку "Принять". Затем ваш телефон загрузит приложение и установит его. Все делается в автоматическим режиме.</div>
     </div>
     <div class="col-xs-12 margin-top40">
     	<img src="__PUBLIC__/images/download/android_3.jpg" class="img-responsive" style="margin: auto;">
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
   	<div class="float-left step">Шаг</div><div class="span float-left">1</div><div class="float-left content" style="width: 100%;">Заходим в App Store.</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_1.jpg" class="img-responsive" style="margin: auto;">
   </div>
   <div class="col-xs-12 margin-top60">
   	<div class="float-left step">Шаг</div><div class="span float-left">2</div><div class="float-left content">Нажмите на кнопку "Войти". Регистрируемся или указываем существующие данные Apple ID.</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_2.jpg" class="img-responsive" style="margin: auto;">
   </div>
   <div class="col-xs-12 margin-top60">
   	<div class="float-left step">Шаг</div><div class="span float-left">3</div><div class="float-left content">Нажмите на кнопку "Поиск"  и введите "BabyBus" или название приложения.</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_3.jpg" class="img-responsive" style="margin: auto;">
   </div>
   
      <div class="col-xs-12 margin-top60">
   	<div class="float-left step">Шаг</div><div class="span float-left">4</div><div class="float-left content">Затем нажмите на кнопку "Бесплатно" или на сумму в которую оценивается приложение для загрузки/покупки. Далее ожидаем окончания загрузки приложения.</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_4.jpg" class="img-responsive" style="margin: auto;">
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
                    
                      <span>Q1</span>В других приложениях для iOS есть звук, а в приложениях BabyBus нет?
                    
                  </h4>
                </div>
                </a>
                <div id="collapseone" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <P>Для iPhone: Попробуйте нажать на маленькую кнопку рядом с кнопкой громкости. </P>
                    <P>Для iPad: Сначало выполните следующие действия на устройстве: "Настройки"→ "Основные"→ "Переключатель на боковой панели" →"Выключение звука" ; Затем попробуйте нажать на маленькую кнопку рядом с кнопкой громкости.</P>
                  </div>
                </div>
              </div>
        
        
              
              
              <div class="panel panel-default">
              	<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    
                      <span>Q2</span>Как удалить приложение BabyBus?
                    
                  </h4>
                </div>
                </a>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                  	<h5>Android</h5>
                    <P>1. Штатный способ удаления приложений - через средство управления приложениями на Android. Для того чтобы зайти в диспетчер приложений android нужно зайти по следующему пути: Меню - Настройки - Приложения. В результате откроется список приложений, по этапу на любом из которых можно зайти на экран управления приложением, с которого можно удалить приложение .</P>
                    <P>2. Если вы установили приложения через Google Play, то все установленные приложения будут храниться в закладке "Мои приложения", от туда их также удобно удалять.</P>
                    <h5>iOS</h5>
                    <P>Подержите на какой-нибудь иконке приложения палец пару-тройку секунд. Все иконки начнут дрожать и у них появится крестик. Стоит отметить, что крестик не появится у предустановленных программ — их удалить нельзя. Нажите на крестик удаляемой программы и получите сообщение для удаления приложения. </P>
                  </div>
                </div>
              </div>
              
              <div class="panel panel-default">
              	<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" class="collapsed">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    
                      <span>Q3</span>Как перенести приложения на SD карту?
                    
                  </h4>
                </div>
                </a>
                <div id="collapsefour" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Для того чтобы проверить, можно ли перенести приложение на карту памяти, в настройках системы откройте пункт «Приложения» и посмотрите, активна ли кнопка «Переместить на SD-карту». Если кнопка активна, то приложение поддерживает перенос, если нет, или кнопка вообще отсутствует, то перенос не поддерживается.</P>
                  </div>
                </div>
              </div>
              
              
              <div class="panel panel-default">
              	<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" class="collapsed">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    
                      <span>Q4</span>Приложения BabyBus не запускаются на Android?
                    
                  </h4>
                </div>
                </a>
                <div id="collapsesix" class="panel-collapse collapse">
                  <div class="panel-body">
                      <P>Слишком много приложений запущенно на вашем устройстве. Можете очистить оперативную память или закрыть ненужные приложения.</p>
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