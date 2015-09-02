<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="BabyBus focuses on meeting the educational needs of preschool children. Our apps are divided into two age groups, the Starter Series for toddlers and the Prodigy Series for children 3 year and older. It is our goal to make learning a fun task for children. We are children's best companion to knowledge and growth.">
<meta name="keywords" content="BabyBus,preschool,early education,childhood,cognition,toddlers,alphabet,children apps,panda,UPK,kindergarten,kids,Baby Learns Shapes">
<meta name="author" content="BabyBus (Fujian) Network Technology Ltd.">
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
<title>BabyBus - Your children's best learning companion!</title>
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
            <li data-value="Index"><a href="<?php echo U('Index/index');?>">Home</a></li>
            <li data-value="About"><a href="<?php echo U('About/index');?>">About Us</a></li>
            <li data-value="Product"><a href="<?php echo U('Product/index');?>">Our Apps</a></li>            
            <!--<li data-value="Join"><a href="<?php echo U('Join/index');?>">招聘</a></li>-->
            <li data-value="Blog"><a href="<?php echo U('blog/index');?>">Blog</a></li>
            <li data-value="Download"><a href="<?php echo U('Download/index');?>">Support</a></li>            
			<li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">English<span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
					<li><a href="http://cn.babybus.com">简体中文</a></li>
					<li><a href="http://tw.babybus.com">繁體中文</a></li>
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
                                    <p>Allow us to become your children's learning companion and your guide to their early educational needs. </p>
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
                                <p>Allow us to become your children's learning companion and your guide to their early educational needs. </p>
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
		<h1 class="caption">Learning Zone</h1>
		<p class="vice-caption">We offer a wide range of learning categories to become your children's best companion to knowledge and fun!</p>
		<div class="row">
			<div class="col-sm-3 col-xs-6 font-center margin-top50"> <img  class="animated" alt="General Knowledge" src="__PUBLIC__/images/home/icon_1.png">
				<h4>General Knowledge</h4>
				<p>Seeing the world through fascinating windows!</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center margin-top50"> <img class="animated"  alt="Emotional Growth" src="__PUBLIC__/images/home/icon_2.png">
				<h4>Emotional Growth</h4>
				<p>Become the master of your emotions!</p>
			</div>

			<div class="col-sm-3 col-xs-6 font-center margin-top50"> <img  class="animated"  alt="Creativity" src="__PUBLIC__/images/home/icon_3.png">
				<h4>Creativity</h4>
				<p >Be imaginative and be creative! </p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center margin-top50"> <img class="animated"  alt="Logic & Reasoning" src="__PUBLIC__/images/home/icon_4.png">
				<h4>Logic & Reasoning</h4>
				<p>Time to boost your brain power!</p>
			</div>
		</div>
		<div class="row ">
			<div class="col-sm-3 col-xs-6 font-center icon-margin-top"> <img class="animated" alt="Scientific Thinking" src="__PUBLIC__/images/home/icon_8.png">
				<h4 >Scientific Thinking</h4>
				<p>Explore the mysteries of our world!</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center icon-margin-top"> <img class="animated" alt="Roleplaying" src="__PUBLIC__/images/home/icon_5.png">
				<h4>Roleplaying</h4>
				<p>Play a role and think different!</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center icon-margin-top"> <img class="animated" alt="Healthy Habits" src="__PUBLIC__/images/home/icon_7.png">
				<h4>Healthy Habits</h4>
				<p>Stay clean and stay healthy!</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center icon-margin-top"> <img class="animated" alt="Environment & Safety" src="__PUBLIC__/images/home/icon_6.png">
				<h4>Environment & Safety</h4>
				<p>Protect ourselves and our environment!</p>
			</div>
		</div>
	</div>
</div>
<div class="product_three">

</div>
<div class="actGotop"><a href="javascript:;" title="TOP"></a></div>
<div class="four">
	<div class="container">
        <?php if($link_data != null): ?><p>Network：
                <?php if(is_array($link_data)): foreach($link_data as $key=>$vo): ?><a href="<?php echo ($vo["link_url"]); ?>"><?php echo ($vo["link_name"]); ?></a>&nbsp;&nbsp;<?php endforeach; endif; ?>
                <a href="<?php echo U('Index/link');?>">more</a>
            </p><?php endif; ?>
		<P>Copyright © 2014 BabyBus Group All Rights Reserved<br />
			<a href="<?php echo U('Index/declaration');?>" target="_blank">User Agreement</a>&nbsp;&nbsp;<a href="<?php echo U('Index/privacyPolicy');?>" target="_blank">Privacy</a>
			<script src="http://s22.cnzz.com/stat.php?id=3356281&web_id=3356281&show=pic" language="JavaScript"></script>
		</P>
	</div>
</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align: center;">Comments on BabyBus receiving warning letter from the FTC</h4>
      </div>
      <div class="modal-body">
      	<p>To whom it may concern,</p>
        <p>First of all we would express our gratitude for your interest of BabyBus, a company dedicated to producing joys for children across the world. </p>
		
		<p>On December 24, 2014, around nine o 'clock in the morning (Beijing time) we received the letter sent by FTC  (United States of America FEDERAL TRADE appointed Division of Privacy and Identity Protection) via DHL, pointing out our negligence. </p>
		
		<p>The incident was caused by the fact that BabyBus products were gathering users’ GPS information, which is due to the Android’s third party statistics software plug-in (it has been confirmed that the products through Apple’s IOS platform don't have the problem).</p> 
		
		<p>Due to the FTC's letter, Google has frozen our APP account. And as the incident occurred around Christmas and New Year, so we couldn't reach Google's related departments to update our products. We would apologize to our dear users who cannot get the updated product through the platform.</p>
		
		<p>BabyBus is a company based in Mainland China, and statistical plug-ins are not against local laws where the company is registered, including the Law of the People's Republic of China on the Protection of Minors.</p>

		<p>Yet our products are loved by nearly 60 million babies across the world.Therefore we learn that we must be in accordance with every regulation and law all over the world.</p>

	   <p>And that's why we right after receiving the letter from FTC we started updating the app to make sure compliance.</p>

       <p>We would confirm to either FTC or our users in the states that we will be obliged to comply with related local laws, especially the Child Online Protection Act.</p> 
	  
	   <p>I hope we can better deal with this incident with the help of your professional and objective reporting. We have been and will continue to be committed to providing our services for more than 50 million customers around the world, providing more suitable products and services with higher quality.</p>
	   
	   <p>At the moment our products have been corrected and are ready to be released. We will also report to the FTC about the progress.
	   </p>
	   
	   <p>BabyBus’ dream is to make products loved by parents and babies all over the world, providing babies with the key to explore the world! So we welcome people from all walks of life to make suggestions and help us grow. </p>
	   
	   <p>Your urging is the motive of our growth. BabyBus develops every product with open minds and arms, striving to become the best partner and friend of babies in the world.</p>
	   
	   <p>Sincerely</p>
	   
	   <p>BabyBus</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>

      </div>
    </div>
  </div>
</div>
<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/public.js"></script>
<script src="__PUBLIC__/js/function.js"></script> 
<script type="text/javascript">
$('#myModal').modal({
keyboard: false
})
</script>
</body>
</html>