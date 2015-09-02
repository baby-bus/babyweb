<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="Na BabyBus nos especializamos na produção e desenvolvimento de produtos educativos para crianças em idade pré-escolar, estamos criando nas plataformas portáteis, uma imagem de marca de animação de renome, crescendo e aprendendo com as crianças do mundo inteiro.">
<meta name="keywords" content="BabyBus,crianças,infantil,despertar,panda,ensino,educação,juvenil,software infantil,aprendendo as formas,aprendendo os números,explorar">
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
<title>Baixar - BabyBus - Número 1 em Apps Infantis</title>
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

<div class="padding-top70 download-banner">
	<div class="download-banner-International container">
		
	</div>
	<?php if(device()=='pc'){ ?>
	<div class="product_one">
	<div class="container">
		<ul class="list-unstyled menu" role="tablist">
			<li class="color_green list-clear down" style="width: 33.3333%; height: 35px;"><a style="padding: 8px 10px 15px 10px;" href="javascript:;" id="new_product">Código QR</a></li>			
			<li class="color_yellow list-clear guide" style="width: 33.3333%; height: 35px;"><a style="padding: 8px 10px 15px 10px;" href="javascript:;" id="hot_product">Guia</a></li>
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
        		<div class="img pull-left"><img src="__PUBLIC__/images/Public/down.png" class="float-left"></div>
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
			<p class="codebtni">Para iOS</p>
		</div>
		<div class="col-xs-6 text-center">
			<img src="__PUBLIC__/images/download/code_android.png" />
			<p class="codebtna">Para Android</p>
		</div>
	</div>
	<?php } ?>
    <div class="row download_img">
    	
        <div class="col-xs-12 downline margin-top40">
        	
		
        		<div class="img pull-left"><img src="__PUBLIC__/images/Public/guide.png" class="float-left"></div>				
        
        </div>  
            
    </div>
    <div class="row download_img">
        <?php if(device()=='pc'){ ?>
    	      <div class="col-xs-12"> 
    <div class="row innerpadding">
     <div class="col-xs-12 visible-lg">  
     	<a id="guide"></a>
     	<h3 class="text-left" style="text-shadow: 0 1px 0 #efefef; line-height: 60px;">Guia para utilizadores Android
     	</h3>
     </div>     
 	<div class="col-xs-12 margin-top20">
     	<div class="float-left step">PASSO</div><div class="span float-left">1</div><div class="float-left content" style=" padding-right: 100px;">Entre na loja Android de sua preferência</div>
     </div>
     
     <div class="col-xs-12 margin-top20">
     	<div class="float-left step">PASSO</div><div class="span float-left">2</div><div class="float-left content" style="line-height: 20px; ">No campo de pesquisa digite "BabyBus" ou o nome do aplicativo que procura <br />e clique em "Instalar" de seguida</div>
     </div>
     <div class="col-xs-12 margin-top40">
     	<img src="__PUBLIC__/images/download/android_1.jpg" class="img-responsive">
     </div>
     </div>
   </div>  
    	            
<div class="col-xs-12"> 
  <div class="row innerpadding">  
   <div class="col-xs-12 margin-topa50 visible-lg">        	
   	<h3 class="text-left" style="text-shadow: 0 1px 0 #efefef; line-height: 60px;">Guia para utilizadores iOS
   	</h3>
   </div>   
   <div class="col-xs-12 margin-top20">
   	<div class="float-left step">PASSO</div><div class="span float-left">1</div><div class="float-left content">Entre na AppStore.</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_1.jpg" class="img-responsive">
   </div>
   <div class="col-xs-12 margin-top60">
   	<div class="float-left step">PASSO</div><div class="span float-left">2</div><div class="float-left content">Vá até ao final da página e clique em "Iniciar Sessão" para entrar."Usar ID Apple Existente" para usar uma conta já criada. "Criar novo ID Apple" para criar uma nova conta.</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_2.jpg" class="img-responsive">
   </div>
   <div class="col-xs-12 margin-top60">
   	<div class="float-left step">PASSO</div><div class="span float-left">3</div><div class="float-left content">No topo da página no campo de pesquisa, procure pelo nome das aplicações da série BabyBus, ou simplesmente pela palavra "BabyBus", escolha a aplicação que deseja e clique em "Instalar", assim que clicar a aplicação será baixada e instalada no seu dispositivo. </div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_3.jpg" class="img-responsive">
   </div>
   </div>
   </div>
    	<?php }else if(is_android()){ ?>
    		    <div class="col-xs-12"> 
    <div class="row innerpadding">
     <div class="col-xs-12 visible-lg">  
     	<a id="guide"></a>
     	<h3 class="text-left" style="text-shadow: 0 1px 0 #efefef; line-height: 60px;">Guia para utilizadores Android
     	</h3>
     </div>     
 	<div class="col-xs-12 margin-top20">
     	<div class="float-left step">PASSO</div><div class="span float-left">1</div><div class="float-left content" style=" padding-right: 100px;">Entre na loja Android de sua preferência</div>
     </div>
     
     <div class="col-xs-12 margin-top20">
     	<div class="float-left step">PASSO</div><div class="span float-left">2</div><div class="float-left content" style="line-height: 20px; ">No campo de pesquisa digite "BabyBus" ou o nome do aplicativo que procura <br />e clique em "Instalar" de seguida</div>
     </div>
     <div class="col-xs-12 margin-top40">
     	<img src="__PUBLIC__/images/download/android_1.jpg" class="img-responsive">
     </div>
     </div>
   </div> 
    	<?php }else if(is_ios()){ ?>
    		         
<div class="col-xs-12"> 
  <div class="row innerpadding">  
   <div class="col-xs-12 margin-topa50 visible-lg">        	
   	<h3 class="text-left" style="text-shadow: 0 1px 0 #efefef; line-height: 60px;">Guia para utilizadores iOS
   	</h3>
   </div>   
   <div class="col-xs-12 margin-top20">
   	<div class="float-left step">PASSO</div><div class="span float-left">1</div><div class="float-left content">Entre na AppStore.</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_1.jpg" class="img-responsive">
   </div>
   <div class="col-xs-12 margin-top60">
   	<div class="float-left step">PASSO</div><div class="span float-left">2</div><div class="float-left content">Vá até ao final da página e clique em "Iniciar Sessão" para entrar."Usar ID Apple Existente" para usar uma conta já criada. "Criar novo ID Apple" para criar uma nova conta.</div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_2.jpg" class="img-responsive">
   </div>
   <div class="col-xs-12 margin-top60">
   	<div class="float-left step">PASSO</div><div class="span float-left">3</div><div class="float-left content">No topo da página no campo de pesquisa, procure pelo nome das aplicações da série BabyBus, ou simplesmente pela palavra "BabyBus", escolha a aplicação que deseja e clique em "Instalar", assim que clicar a aplicação será baixada e instalada no seu dispositivo. </div>
   </div>
   <div class="col-xs-12 margin-top40">
   	<img src="__PUBLIC__/images/download/ios_3.jpg" class="img-responsive">
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

        <div class="col-sm-12 downline margin-top50">
        	<a id="faq"></a>
        	<h2 class="text-left"><img src="__PUBLIC__/images/Public/title_faq.png" class="response_img"></h2>
        </div>
        

            
        <div class="col-xs-12 margin-top20">
        	
        	<div class="panel panel-default">
              	<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    
                      <span>Q1</span>No equipamento iOS, todas as outras apps têm som, mas as apps BabyBus não têm?
                  </h4>
                </div>
                </a>
                <div id="collapseThree" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <P>Execute as seguintes operações no dispositivo: "Ajustes"→"No interruptor lateral:"→"Não perturbe"; Depois experimente ligar o som pelos botões laterais do dispositivo.</P>
                  </div>
                </div>
              </div>
        	
        	
        	<div class="panel panel-default">
        		<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseone"  class="collapsed">
                <div class="panel-heading clearfix">
                  <h4 class="panel-title">
                    
                      <span>Q2</span>Depois de fazer jailbreak ao iOS, as apps da BabyBus não iniciam?
                    
                  </h4>
                </div>
                </a>
                <div id="collapseone" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Depois de fazer jailbreak ao seu dispositivo, este fica instável, verifique se o plugin IAPFree não está instalado. Se depois de instalar, desinstalar o IAPFree do Cydia já poderá executar normalmente.</p>
                  </div>
                </div>
              </div>
              
              
              
              <div class="panel panel-default">
        		<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo"  class="collapsed">
                <div class="panel-heading clearfix">
                  <h4 class="panel-title">
                    
                      <span>Q3</span>Como desinstalar as aplicações BabyBus?
                    
                  </h4>
                </div>
                </a>
                <div id="collapsetwo" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h5><strong>Android:</strong></h5>
                    <P>A. Pressione a aplicação que deseja desinstalar e arraste para remover.</P>
					<P>B. Acesse Menu "Configurações" →"Aplicativos ( Aplicações )"→"Gerenciar Aplicativos ( Aplicações )", selecione a app que deseja remover, e clique em "Desinstalar"</P>
					<P>C. Utilize programas no computador (ex. SnapPea) para desinstalar a aplicação pretendida.</P>
                    <h5><strong>iOS：</strong></h5>
                    <P>A. Na tela principal do seu dispositivo, pressione na app durante alguns segundos e aparecerá uma cruz no icone da app, clique nessa cruz vermelha para remover.</P>
                    <p>B. No iTunes, usando um cabo de dados, poderá gerir as apps.</p>
                    <p>C. No iTools, usando um cabo de dados, poderá gerir as apps.</P>
                  </div>
                </div>
              </div>
        
        
              
              <div class="panel panel-default">
        		<a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapsefour"  class="collapsed">
                <div class="panel-heading clearfix">
                  <h4 class="panel-title">
                    
                      <span>Q4</span>O equipamento Android deixa conseguir executar as apps BabyBus?
                    
                  </h4>
                </div>
                </a>
                <div id="collapsefour" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>A. Quando as há um grande número de aplicações abertas ou aplicações baixadas, poderá utilizar programas de optimização para limpar o sistema, e terminar os processos abertos que não está a utilizar.</p>
                    <p>B. Diferentes ambientes de rede têm impacto na velocidade de descarregamento, se tiver um bom ambiente de rede, a velocidade será boa, e as apps são baixadas mais rapidamente.</p>
                    <p>Nota: É recomendado que utilize rede Wifi para baixar os aplicativos.</p>
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