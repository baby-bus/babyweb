<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="BabyBus offre des applications mobiles éducatives spécialement conçues pour les enfants d'âge préscolaire et de maternelle, disponibles en version IOS et Android. Nos applications incluent des chansons, des devinettes, de petites histoires,des jeux... et bien plus encore !">
<meta name="keywords" content="BabyBus,éducation,application éducative, application pour enfant,panda,développement de l'enfant,apprentissage,connaissances, apprendre, jeux, enfant, maternelle, pédagogie">
<meta name="author" content="BabyBus Group">
<link href="__PUBLIC__/css/bootstrap.min.css?v=1" rel="stylesheet">
<link rel="apple-touch-icon-precomposed" href="favicon.png">
<!--[if lt IE 9]><script src="__PUBLIC__/js/respons/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="__PUBLIC__/js/respons/html5shiv.js"></script>
      <script src="__PUBLIC__/js/respons/respond.min.js"></script>
    <![endif]-->
<script src="__PUBLIC__/js/jquery.min.js"></script>
<link href="__PUBLIC__/css/animate.css?v=1" rel="stylesheet"/>
<link href="__PUBLIC__/css/public.css" rel="stylesheet">
<title>Accueil - BabyBus - Applications éducatives pour grandir en douceur</title>
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
            <li data-value="Index"><a href="<?php echo U('Index/index');?>">Accueil</a></li>            
            <!--<li data-value="Product"><a href="<?php echo U('Product/index');?>">Applications</a></li>-->
            <!--<li data-value="Join"><a href="<?php echo U('Join/index');?>">招聘</a></li>-->
            <li data-value="Blog"><a href="<?php echo U('blog/index');?>">Blog</a></li>
            <li data-value="Download"><a href="<?php echo U('Download/index');?>">Aide</a></li>  
            <li data-value="About"><a href="<?php echo U('About/index');?>">A propos de BabyBus</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">Français<span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
					<li><a href="http://cn.babybus.com">简体中文</a></li>
					<li><a href="http://tw.babybus.com">繁體中文</a></li>
					<li><a href="http://en.babybus.com">English</a></li>
					<li><a href="http://ko.babybus.com">한국어</a></li>
					<li><a href="http://ja.babybus.com">日本語</a></li>
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
<div id="carousel-example-generic" class="carousel slide visible-lg" data-ride="carousel"> 
	<!-- Indicators -->
	<ol class="carousel-indicators">
         <!-- edit by csg 14-09-19 -->
         <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li data-target="#carousel-example-generic" data-slide-to="<?php echo ($k-1); ?>" class="<?php if($k == 1): ?>active<?php endif; ?>"></li>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- end -->
	</ol>
	
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
        <!-- edit by csg 14-09-19 -->
        <!-- 没有数据的情况下使用固定图片 -->
        <?php if(empty($list)): ?><div class="item active " >
                <div class="one" style="background: url(/Public/images/banner/bg.png) repeat #4db9e2;">
                    <div class="page-vertical-align">
                        <div class="page-content-wrapper">
                            <div data-wow-delay="1.15s" class="captionimgauto wow fadeInLeft animated">
                                <img src="/Public/images/home/title.png" class="captionimg"  alt="" />
                            </div>
                            <h1 class="caption hidden-xs">
                                <small data-wow-delay="1.85s" class="wow fadeInLeft animated">
                                    <p>Parce que l'éveil des enfants est important et qu'apprendre doit être un plaisir...</p>
                                </small>
                            </h1>
                        </div>
                        <!--one类的主图图片大小要求控制在782X494像素-->
                        <div data-wow-delay="2s" class="bus wow bounceInRight animated animated">
                            <img src="/Public/images/home/bus.png" class="img-responsive"  alt="" />
                        </div>
                    </div>
                    <div class="bottombg hidden-xs"></div>
                </div>
            </div>
        <?php else: ?>
            <!-- banner循环 -->
            <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div class="item <?php if($k == 1): ?>active<?php endif; ?> " >
                    <div class="<?php echo ($vo["bg_class"]); ?>" style="background: url(<?php echo ($vo["image_bg"]); ?>) 
                         <?php switch($vo['bg_align']){case 1:echo 'left';break;case 2:echo 'center';break;case 3:echo 'right';break;default:break;} ?>
                         <?php switch($vo['bg_vertical']){case 1:echo 'top';break;case 2:echo 'middle';break;case 3:echo 'bottom';break;default:break;} ?>
                         <?php if($vo["bg_repeat"] == 1): ?>repeat<?php else: ?>no-repeat<?php endif; ?>
                         <?php echo ($vo["bg_color"]); ?>; "  >
                        <div class="page-vertical-align">
                            <div class="page-content-wrapper">
                                <div data-wow-delay="1.15s" class="captionimgauto wow fadeInLeft animated">
                                    <img src="<?php echo ($vo["image_left"]); ?>" onerror="javascript:this.src='/Public/images/home/title.png'" class="captionimg"  alt="" />
                                </div>
                                <h1 class="caption hidden-xs">
                                    <!--class为one才显示-->
                                    <?php if($vo["bg_class"] == one ): ?><small data-wow-delay="1.85s" class="wow fadeInLeft animated">
                                            <p>
                                                <?php if($vo['description']['p2']==''){echo '&nbsp';}else{echo $vo['description']['p2']; } ?>
                                           </p>
                                        </small><?php endif; ?>
                                </h1>
                                <!-- 当class为one3时才显示产品下载 -->
                                <?php if($vo["bg_class"] == one3): ?><div data-wow-delay="2.1s" class="btn wow fadeInLeft animated">
                                        <?php switch($device): case "iphone": ?><a target="_blank" href="<?php echo ($vo["ios_url"]); ?>" class="ios"></a><?php break;?>
                                            <?php case "ipad": ?><a target="_blank" href="<?php echo ($vo["ios_url"]); ?>" class="ios"></a><?php break;?>
                                            <?php case "ipod": ?><a target="_blank" href="<?php echo ($vo["ios_url"]); ?>" class="ios"></a><?php break;?>
                                            <?php case "android": ?><a target="_blank" href="<?php echo ($vo["and_url"]); ?>" class="android"></a><?php break;?>
                                            <?php case "pc": ?><a target="_blank" href="<?php echo ($vo["ios_url"]); ?>" class="ios"></a><a target="_blank" href="<?php echo ($vo["and_url"]); ?>" class="android"></a><?php break;?>
                                            <?php default: endswitch;?>
                                    </div><?php endif; ?>
                            </div>
                            <!--one类的主图图片大小要求控制在782X494像素-->
                            <div data-wow-delay="2s" class="bus wow bounceInRight animated">
                                <img class="img-responsive " src="<?php echo ($vo["image_right"]); ?>" onerror="javascript:this.src='/Public/images/home/bus.png'"  alt="" />
                            </div>
                        </div>
                        <div class="bottombg hidden-xs"></div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <!-- 循环end --><?php endif; ?>
        <!-- end -->
	</div>
	
	<!-- Controls --> 
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> 
        <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> 
    </a> 
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> 
        <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> 
    </a> 
</div>

<!--手机端-->
<div id="myCarousel" class="carousel slide hidden-lg" data-ride="carousel">
	<div id="owl-demo" class="owl-carousel">
        <!-- 没有数据的情况下使用固定图片 -->
        <?php if(empty($list)): ?><div class="item">
                <div class="one" style="background: url(__PUBLIC__/images/banner/bg.png) repeat #4db9e2;">
                    <div class="page-vertical-align">
                        <div class="page-content-wrapper">
                            
                            <div class="captionimgauto"> 
                                <img src="__PUBLIC__/images/home/title.png" class="captionimg" alt="" /> 
                            </div>
                            <h1 class="caption hidden-xs"> 
                                <small>
                                <p>Parce que l'éveil des enfants est important et qu'apprendre doit être un plaisir...</p>
                                </small> 
                            </h1>
                        </div>
                        <div class="bus"> <img class="img-responsive " src="__PUBLIC__/images/home/bus.png" alt=""> </div>
                    </div>
                    <div class="bottombg hidden-xs"> </div>
                </div>
            </div>
        <?php else: ?>
            <!-- banner循环 -->
            <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div class="item <?php if($k == 1): ?>active<?php endif; ?> " >
                    <div class="<?php echo ($vo["bg_class"]); ?>" style="background: url(<?php echo ($vo["image_bg"]); ?>) 
                         <?php switch($vo['bg_align']){case 1:echo 'left';break;case 2:echo 'center';break;case 3:echo 'right';break;default:break;} ?>
                         <?php switch($vo['bg_vertical']){case 1:echo 'top';break;case 2:echo 'middle';break;case 3:echo 'bottom';break;default:break;} ?>
                         <?php if($vo["bg_repeat"] == 1): ?>repeat<?php else: ?>no-repeat<?php endif; ?>
                         <?php echo ($vo["bg_color"]); ?>; "  >
                        <div class="page-vertical-align">
                            <div class="page-content-wrapper">
                                
                                <div data-wow-delay="1.15s" class="captionimgauto wow fadeInLeft animated">
                                    <img src="<?php echo ($vo["image_left"]); ?>" onerror="javascript:this.src='/Public/images/home/title.png'" class="captionimg"  alt="" />
                                </div>
                                
                                <h1 class="caption hidden-xs">
                                    <!--class为one才显示-->
                                    <?php if($vo["bg_class"] == one ): ?><span data-wow-delay="1.45s" class="wow fadeInLeft animated"><?php if($vo['description']['p1']==''){echo '&nbsp';}else{echo $vo['description']['p1']; } ?></span><br />
                                        <small data-wow-delay="1.85s" class="wow fadeInLeft animated">
                                            <p>
                                                <?php if($vo['description']['p2']==''){echo '&nbsp';}else{echo $vo['description']['p2']; } ?>
                                            <br />
                                                <?php if($vo['description']['p3']==''){echo '&nbsp';}else{echo $vo['description']['p3']; } ?>
                                            </p>
                                            <p>
                                                <?php if($vo['description']['p4']==''){echo '&nbsp';}else{echo $vo['description']['p4']; } ?>
                                            <br />
                                                <?php if($vo['description']['p5']==''){echo '&nbsp';}else{echo $vo['description']['p5']; } ?>
                                            </p>
                                        </small><?php endif; ?>
                                </h1>
                            </div>
                            <div data-wow-delay="2s" class="bus wow bounceInRight animated">
                                <img class="img-responsive " src="<?php echo ($vo["image_right"]); ?>" onerror="javascript:this.src='/Public/images/home/bus.png'"  alt="" />
                            </div>
                        </div>
                        <div class="bottombg hidden-xs"></div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <!-- 循环end --><?php endif; ?>
    </div>
</div>

<!--=============section主体内容区域===================
==============================================-->
<div class="two">
	<div class="container indexicon">
		<h1 class="caption">Qu'est-ce que BabyBus ?</h1>
		<p class="vice-caption">Tout un éventail de thèmes pour répondre à la soif d'apprendre des enfants, et leur permettre de progresser et de grandir tout en douceur.</p>
		<div class="row">
			<div class="col-sm-3 col-xs-6 font-center margin-top50"> <img  class="animated" alt="Éveil 1 à 3 ans" src="__PUBLIC__/images/home/icon_1.png">
				<h4>Éveil</h4>
				<p>Découverte du monde pour les tout-petits</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center margin-top50"> <img class="animated"  alt="Émotions" src="__PUBLIC__/images/home/icon_2.png">
				<h4>Émotions</h4>
				<p>Comprendre et maîtriser ses émotions</p>
			</div>

			<div class="col-sm-3 col-xs-6 font-center margin-top50"> <img  class="animated"  alt="Arts" src="__PUBLIC__/images/home/icon_3.png">
				<h4>Arts</h4>
				<p >Développer son imagination et sa créativité</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center margin-top50"> <img class="animated"  alt="Logique" src="__PUBLIC__/images/home/icon_4.png">
				<h4>Logique</h4>
				<p>Renforcer ses capacités de raisonnement</p>
			</div>
		</div>
		<div class="row ">
			<div class="col-sm-3 col-xs-6 font-center icon-margin-top"> <img class="animated" alt="Découverte des sciences" src="__PUBLIC__/images/home/icon_8.png">
				<h4 >Découverte des sciences</h4>
				<p>Percer les mystères de la nature</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center icon-margin-top"> <img class="animated" alt="Jeux de rôle" src="__PUBLIC__/images/home/icon_5.png">
				<h4>Jeux de rôle</h4>
				<p>S'affirmer et se construire par l'imitation</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center icon-margin-top"> <img class="animated" alt="Bonnes habitudes" src="__PUBLIC__/images/home/icon_7.png">
				<h4>Bonnes habitudes</h4>
				<p>De bonnes habitudes pour être en bonne santé</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center icon-margin-top"> <img class="animated" alt="Environnement & Sécurité" src="__PUBLIC__/images/home/icon_6.png">
				<h4>Environnement & Sécurité</h4>
				<p>Protégeons-nous, protégeons notre planète !</p>
			</div>
		</div>
	</div>
</div>
<div class="product_three">

</div>
<div class="actGotop"><a href="javascript:;" title="PAGE TOP"></a></div>
<div class="four">
	<div class="container">
        <?php if($link_data != null): ?><p>Partenariat web：
                <?php if(is_array($link_data)): foreach($link_data as $key=>$vo): ?><a href="<?php echo ($vo["link_url"]); ?>"><?php echo ($vo["link_name"]); ?></a>&nbsp;&nbsp;<?php endforeach; endif; ?>
                <a href="<?php echo U('Index/link');?>">plus</a>
            </p><?php endif; ?>
		<P>Copyright © 2014 BabyBus Group All Rights Reserved<br />
			<a href="<?php echo U('Index/declaration');?>" target="_blank">Conditions d'utilisation</a>&nbsp;&nbsp;<a href="<?php echo U('Index/privacyPolicy');?>" target="_blank">Politique de protection des données personnelles</a>
			<script src="http://s22.cnzz.com/stat.php?id=3356281&web_id=3356281&show=pic" language="JavaScript"></script>
		</P>
	</div>
</div>
</div>
<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/public.js"></script>
<script src="__PUBLIC__/js/function.js"></script> 
</body>
</html>