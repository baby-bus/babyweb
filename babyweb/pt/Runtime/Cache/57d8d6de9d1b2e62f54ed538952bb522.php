<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="Os aplicativos BabyBus estão divididos em duas séries infantis: Despertar e Explorar. Através de uma mistura de entretenimento e aprendizagem ajudam as crianças a adquirir o conhecimento básico, aperfeiçoam o sistema cognitivo e desenvolvem todas as suas capacidades, sendo assim, os companheiros perfeitos no crescimento das crianças.">
<meta name="keywords" content="BabyBus,crianças,infantil,despertar,panda,ensino,educação,juvenil,software infantil,aprendendo as formas,aprendendo os números,explorar">
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

<title>Sobre - BabyBus - Número 1 em Apps Infantis</title>
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
            <li data-value="Index"><a href="<?php echo U('Index/index');?>">Home</a></li>
            <li data-value="Product"><a href="<?php echo U('Product/index');?>">Apps</a></li>                            
            <!--<li data-value="Join"><a href="<?php echo U('Join/index');?>">招聘</a></li>-->
            <li data-value="Blog"><a href="<?php echo U('blog/index');?>">Blogue</a></li>
            <li data-value="Download"><a href="<?php echo U('Download/index');?>">Baixar</a></li>
            <li data-value="About"><a href="<?php echo U('About/index');?>">Sobre</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">Português<span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
					<li><a href="http://cn.babybus.com">简体中文</a></li>
					<li><a href="http://tw.babybus.com">繁體中文</a></li>
					<li><a href="http://en.babybus.com">English</a></li>
					<li><a href="http://ko.babybus.com">한국어</a></li>
					<li><a href="http://ja.babybus.com">日本語</a></li>
					<li><a href="http://fr.babybus.com">Français</a></li>
					<li><a href="http://de.babybus.com">Deutsch</a></li>
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
        <h4><strong class="font_c_blue">Quem somos?</strong></h4>
        <P>Na BabyBus estamos focados no desenvolvimento de apps educativas para crianças em idade pré-escolar. Para integrar as diferentes fases da educação foram planeadas duas séries de aplicações, a série "Despertar" e a série "Explorar", e é através de um método de ensino pelo divertimento que atingimos nosso objetivo.</P>
        
        <h4 class="margin-top30"><strong class="font_c_blue">O que fazemos?</strong></h4>
        <P>Na BabyBus já desenvolvemos mais de 100 aplicações para as plataformas iOS e Android em nove línguas diferentes (chinês simplificado e tradicional, japonês, inglês, russo, árabe, francês, coreano e alemão).</P>
        
        <h4 class="margin-top30"><strong class="font_c_blue">Porquê nós?</strong></h4>
        <P>
        	Queremos estimular, e não apenas ensinar.<br />
			Dividimos por idades, para auxiliar os pais.<br />
			Fundimos elementos internacionais, para levar BabyBus ao resto do mundo.</P>

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
                                <div class="histt histtline"><a href="javascript:void(0)">A empresa é estabelecida.</a></div>
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
                                <div class="histt histtline"><a href="javascript:void(0)">Transformação completa da Internet móvel.</a></div>
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
                                <div class="histt"><a href="javascript:void(0)">Nascimento dos personagens Kiki e Miaomiao, as apps entram no mercado em todo o mundo,e entram no top 10 da categoria de ensino da AppStore.</a></div>
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
                                <div class="histt"><a href="javascript:void(0)">É atingida a marca dos 10 milhões de utilizadores, ganha o prémio CVAwards como um dos 100 produtos com mais potêncial do ano.</a></div>
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
                                <div class="histt"><a href="javascript:void(0)">A BabyBus recebe uma rodada de investimento série A de vários milhões de dólares.</a></div>
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
                                <div class="histt"><a href="javascript:void(0)">A BabyBus se torna na sétima maior publicadora de apps (não jogos) da China.</a></div>
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
        	<p class="p1">Fuzhou Cross-Strait Creative Garden Building 9#3F</p>     
            <p class="p4"><A href="https://www.facebook.com/babybusen" target="_blank">Facebook</A></p>
            <p class="p5"><A href="https://twitter.com/BabyBusGood" target="_blank">Twitter</A></p>
            <p class="p3">E-mail: ser@babybus.com</p>
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
		<P>Copyright © 2014 Grupo BabyBus Todos os Direitos Reservados<br />
			<a href="<?php echo U('Index/declaration');?>" target="_blank">Termos de uso</a>&nbsp;&nbsp;<a href="<?php echo U('Index/privacyPolicy');?>" target="_blank">Política de Privacidade</a>
			<script src="http://s22.cnzz.com/stat.php?id=3356281&web_id=3356281&show=pic" language="JavaScript"></script>
		</P>
	</div>
</div>


<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/public.js"></script>
<script src="__PUBLIC__/js/function.js"></script>
</body>
</html>