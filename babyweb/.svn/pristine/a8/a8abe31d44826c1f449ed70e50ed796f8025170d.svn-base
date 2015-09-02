<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="베이비버스는 미취학 어린이를 위한 교육용 애플리케이션입니다. 연령별 중점 교육 내용을 모두 결합하여 계몽영역과 탐구영역으로 양분했으며, 놀이를 통해 아이들의 기초 교육과 지능 계발에 도움을 줄 수 있도록 만들었습니다.">
<meta name="keywords" content="베이비버스,BabyBus,인지,창의력,귀염이,유아교육,조기교육,유아어플,유아앱,색칠놀이,동요,숫자공부,숫자놀이,역할놀이">
<meta name="author" content="베이비버스 테크놀러지">
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
<title>Blog - 베이비버스-유아교육 어린이 두뇌발달 창의력발달 유아앱시리즈</title>
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

<div class="container">
	<div class="row">
		<div class="col-sm-9">
			<ol class="breadcrumb">
				<li><a href='__APP__'>Home</a></li>
				<li><a href='__URL__'>Blogue</a></li>
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
                    <?php if($data["is_show"] == 1): ?><img src="<?php echo $vo['thumb'] ? $vo['thumb']:'__PUBLIC__/images/blog/temp42_14.jpg';?>" onerror="javascript:this.src='__PUBLIC__/images/blog/temp42_14.jpg'" class="img-responsive" /><?php endif; ?>
                </div>
                <p class="digest"><?php echo ($data["content"]); ?></p>
			</div>
			<ul class="pager">
                <li class="previous"><a <?php if($data["id"] == $minid): ?>style="display: none;"<?php endif; ?> href="__URL__/info/id/<?php echo ($old_id); ?>">&larr; Mais antigas</a></li>
                <li class="next"><a <?php if($data["id"] == $maxid): ?>style="display: none;"<?php endif; ?> href="__URL__/info/id/<?php echo ($new_id); ?>">Mais recentes &rarr;</a></li>
            </ul>
		</div>
		<div class="col-sm-4 blog bcontact">
                    <form action='' method='post'>
                    <p>
                    	<span style="color: #999999;">Deixe o seu comentário</span> 
                    	<a href="https://twitter.com/BabyBus_apps"><img src="__PUBLIC__/images/blog/t_icon.png" width="25" height="25" style="margin-top: -5px;"/></a>
                    	<a href="https://www.facebook.com/babybusen"><img src="__PUBLIC__/images/blog/f_icon.png" width="25" height="25" style="margin-top: -5px;"/></a>
                    	
                    </p>
                    <div id="t_name" class="form-group">
                    <input type="text" name='name' class="form-control" onblur="isname()">
                    <p class="leave_p">Nome</p>
                    </div>
                    
                    <div id="t_email" class="form-group">
                    <input type="text" name='email' class="form-control" onblur="isEmail()">
                    <p class="leave_p">E-mail</p>
                    </div>
                    
                    <div id="t_content" class="form-group">
                    <textarea class="form-control" name='content' rows="5" onblur="isContent()"></textarea>
                    <p class="text-right margin-top20"><span style="float: left;"></span><a class="btn btn-primary" onclick="tosubmit(<?php echo ($data['id']); ?>);" >Enviar</a></p>
                    </div>
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


<script type='text/javascript'>
    //为元素添加自适应属性
    $(function(){
        $('.item img').attr("class","img-responsive");
        $('.item embed').attr("width","100%");
        $('img:last').attr("class","");
    })
</script>



</html>