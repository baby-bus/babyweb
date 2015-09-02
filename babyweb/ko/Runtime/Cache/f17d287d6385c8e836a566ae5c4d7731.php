<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="베이비버스는 미취학 어린이를 위한 교육용 애플리케이션입니다. 연령별 중점 교육 내용을 모두 결합하여 계몽영역과 탐구영역으로 양분했으며, 놀이를 통해 아이들의 기초 교육과 지능 계발에 도움을 줄 수 있도록 만들었습니다.">
<meta name="keywords" content="베이비버스,BabyBus,인지,창의력,귀염이,유아교육,조기교육,유아어플,유아앱,색칠놀이,동요,숫자공부,숫자놀이,역할놀이">
<meta name="author" content="베이비버스 테크놀러지">
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
<title>베이비버스-유아교육 어린이 두뇌발달 창의력발달 유아앱시리즈</title>
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
            <li data-value="Index"><a href="<?php echo U('Index/index');?>">홈으로</a></li>
            <li data-value="Product"><a href="<?php echo U('Product/index');?>">제품</a></li>                            
            <!--<li data-value="Join"><a href="<?php echo U('Join/index');?>">招聘</a></li>-->
            <li data-value="Blog"><a href="<?php echo U('blog/index');?>">커뮤니티</a></li>
            <li data-value="Download"><a href="<?php echo U('Download/index');?>">고객지원</a></li>
            <li data-value="About"><a href="<?php echo U('About/index');?>">회사소개</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">한국어<span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
					<li><a href="http://cn.babybus.com">简体中文</a></li>
					<li><a href="http://tw.babybus.com">繁體中文</a></li>
					<li><a href="http://en.babybus.com">English</a></li>
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
                                    <p>창의적 잠재력을 키우는 <br />
                                    자기주도형 놀이식 두뇌계발 <br />
                                    단순한 조기교육이 아닌 같이 성장하는 친구역할<br /> 
                                    단순한 제품이 아닌 부모님의 자녀교육 나침반역할</p>
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
                                            <br />
                                                <?php if($vo['description']['p3']==''){echo '&nbsp';}else{echo $vo['description']['p3']; } ?>
                                            <br />
                                                <?php if($vo['description']['p4']==''){echo '&nbsp';}else{echo $vo['description']['p4']; } ?>
                                            <br />
                                                <?php if($vo['description']['p5']==''){echo '&nbsp';}else{echo $vo['description']['p5']; } ?>
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
                                <small data-wow-delay="1.85s" class="wow fadeInLeft animated">
                                    <p>창의적 잠재력을 키우는 <br />
                                                              자기주도형 놀이식 두뇌계발 <br />
                                                              단순한 조기교육이 아닌 같이 성장하는 친구역할<br /> 
                                                              단순한 제품이 아닌 부모님의 자녀교육 나침반역할</p>
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
		<h1 class="caption">완벽한 지식체계<br />즐거운 놀이방식<br />두뇌발달과 자기계발</h1>
		<div class="row">
			<div class="col-sm-3 col-xs-6 font-center margin-top50"> <img  class="animated" alt="인지발달" src="__PUBLIC__/images/home/icon_1.png">
				<h4>인지발달</h4>
				<p>인지발달단계 유형별 디자인</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center margin-top50"> <img class="animated"  alt="감성지능" src="__PUBLIC__/images/home/icon_2.png">
				<h4>감성지능</h4>
				<p>감정 조절능력,자기인식과 인내심</p>
			</div>

			<div class="col-sm-3 col-xs-6 font-center margin-top50"> <img  class="animated"  alt="예술창의력" src="__PUBLIC__/images/home/icon_3.png">
				<h4>예술창의력</h4>
				<p >창의력과 도전정신 및 자신감</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center margin-top50"> <img class="animated"  alt="사고능력" src="__PUBLIC__/images/home/icon_4.png">
				<h4>사고능력</h4>
				<p>창의적인 사고능력,문제해결 능력</p>
			</div>
		</div>
		<div class="row ">
			<div class="col-sm-3 col-xs-6 font-center icon-margin-top"> <img class="animated" alt="자연과학" src="__PUBLIC__/images/home/icon_8.png">
				<h4 >자연과학</h4>
				<p>눈높이에 맞춘 자연현상 탐구</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center icon-margin-top"> <img class="animated" alt="역할놀이" src="__PUBLIC__/images/home/icon_5.png">
				<h4>역할놀이</h4>
				<p>정서활용, 문제대처,의사소통능력</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center icon-margin-top"> <img class="animated" alt="올바른 습관" src="__PUBLIC__/images/home/icon_7.png">
				<h4>올바른 습관</h4>
				<p>인성이 바른 아이,생활의 길잡이</p>
			</div>
			<div class="col-sm-3 col-xs-6 font-center icon-margin-top"> <img class="animated" alt="안전환경보호" src="__PUBLIC__/images/home/icon_6.png">
				<h4>안전환경보호</h4>
				<p>안전의식 및 환경보호의식 </p>
			</div>
		</div>
	</div>
</div>
<div class="product_three">

</div>
<div class="actGotop"><a href="javascript:;" title="맨위로"></a></div>
<div class="four">
	<div class="container">
        <?php if($link_data != null): ?><p>관련링크：
                <?php if(is_array($link_data)): foreach($link_data as $key=>$vo): ?><a href="<?php echo ($vo["link_url"]); ?>"><?php echo ($vo["link_name"]); ?></a>&nbsp;&nbsp;<?php endforeach; endif; ?>
                <a href="<?php echo U('Index/link');?>">더보기</a>
            </p><?php endif; ?>
		<P>Copyright © 2014 BabyBus Group All Rights Reserved<br />
			<a href="<?php echo U('Index/declaration');?>" target="_blank">이용약관</a>&nbsp;&nbsp;<a href="<?php echo U('Index/privacyPolicy');?>" target="_blank">개인정보취급방침</a>
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