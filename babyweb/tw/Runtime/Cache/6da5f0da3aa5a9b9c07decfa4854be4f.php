<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="宝宝巴士专注为学龄前儿童研发教育应用产品，通过移动互联平台，打造一个全球知名的卡通品牌形象，将中国传统文化融合国际化元素传播至大中华文化圈乃至全球。">
<meta name="keywords" content="宝宝巴士,宝贝巴士,BabyBus,启蒙,启蒙教育,在线教育,幼儿教学,儿童软件,儿童应用,移动早教,熊猫,早教,幼教">
<meta name="author" content="宝宝巴士（福建）网络科技有限公司">
<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
<link href="__PUBLIC__/css/animate.css" rel="stylesheet"/>
<link rel="apple-touch-icon-precomposed" href="<?php echo WEB_URL;?>/favicon.png">
<!--[if lt IE 9]><script src="__PUBLIC__/js/respons/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="__PUBLIC__/js/respons/html5shiv.js"></script>
      <script src="__PUBLIC__/js/respons/respond.min.js"></script>
    <![endif]-->
<link href="__PUBLIC__/css/toastr.css" rel="stylesheet">
<link href="__PUBLIC__/css/public.css" rel="stylesheet">
<script src="__PUBLIC__/js/jquery.min.js"></script> 
<script src="__PUBLIC__/js/toastr.js"></script>
 
<title>招聘 - 宝宝巴士 快乐童年 - 启蒙教育第一品牌</title>
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
          <div class="logo"><a href="<?php echo WEB_URL;?>"><img src="__PUBLIC__/images/Public/logo.png" alt="宝宝巴士 - 幼儿教学应用软件第一品牌,专注幼儿应用/软件,支持iPhone /iPad / Android 平台" /></a></div>
        </div>
        <div class="navbar-collapse collapse navbar-right navbar-margintop">
          <ul class="nav navbar-nav">
            <li data-value="Index"><a href="<?php echo U('Index/index');?>">首頁</a></li>
            <li data-value="Product"><a href="<?php echo U('Product/index');?>">產品</a></li>
            <li data-value="Download"><a href="<?php echo U('Download/index');?>">下載</a></li>
            <li data-value="Join"><a href="<?php echo U('Join/index');?>">招聘</a></li>
            <li data-value="About"><a href="<?php echo U('About/index');?>">關於我們</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">繁體中文<span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
					<li><a href="http://cn.babybus.com">简体中文</a></li>
					<li><a href="http://en.babybus.com">English</a></li>
					<li><a href="http://ko.babybus.com">한국어</a></li>
					<li><a href="http://ja.babybus.com">日本語</a></li>
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

<div class="joinus padding-top70 joinus-banner">

		<div class="container relative">
			<div class="absolutetext hidden-xs">
				<p>加入我們吧，讓你的工作成果成為孩子最好的禮物！</p>
				<p>寶寶巴士的小夥伴們享有以下福利：<span class="visible-xs"><br />六險一金  +帶薪年假 +健康體檢 +不定期員工活動 +多樣化休閒設施 +貼心下午茶</span></p>

				<P class="hidden-xs">六險一金&nbsp;&nbsp;<big>+</big>帶薪年假&nbsp;<big>+</big>健康體檢&nbsp;<big>+</big>不定期員工活動&nbsp;<big>+</big>多樣化休閒設施&nbsp;<big>+</big>貼心下午茶</P>
			</div>
		</div>
	
</div>








<!--=============section主体内容区域===================
==============================================-->



<div class="container job">
		 
    <ul class="nav nav-tabs hidden-xs margin-top50">
      <li class="active" >
      	<a class="icon1" href="#meishu" data-toggle="tab">
      		<P>美術設計師</P>
      		<img src="__PUBLIC__/images/joinus/i_meishu.png" />
      	</a>   
      	<div class="trigon_yellow">						
					</div>
      </li>
      
      <li>
      	<a class="icon2" href="#chengxuyuan" data-toggle="tab"><P>軟體工程師</P>
      		<img src="__PUBLIC__/images/joinus/i_3d.png" />
      	</a>
      	<div class="trigon_yellow">						
					</div>
      	
      </li>
      
      <li>
      	<a class="icon3" href="#cehua" data-toggle="tab"><P>產品策劃</P>
      		<img src="__PUBLIC__/images/joinus/i_cehua.png" />
      	</a>
      	<div class="trigon_yellow">						
					</div>
      </li>
      
      <li>
      	<a class="icon4" href="#yinxiao" data-toggle="tab"><P>音效師</P>
      		<img src="__PUBLIC__/images/joinus/i_yinxiao.png" />
      	</a>
      	<div class="trigon_yellow">						
					</div>
      </li>
      
    </ul>
    <ul class="nav nav-tabs visible-xs margin-top50">
      <li class="active"><a href="#meishu" data-toggle="tab">美术</a></li>
      <li><a href="#chengxuyuan" data-toggle="tab">程序</a></li>
      <li><a href="#cehua" data-toggle="tab">策划</a></li>
      <li><a href="#yinxiao" data-toggle="tab">音效</a></li>
      <li><a href="#tuiguang" data-toggle="tab">大数据</a></li>
    </ul>

    <div class="tab-content">    
        <div id="meishu" class="row tab-pane fade in active padding-bottom10">
        	<div class="col-sm-3 hidden-xs"><img class="response_img" src="__PUBLIC__/images/joinus/art_b.png"></div>
            <div class="col-sm-9 joinustitle">
            <?php if(is_array($data[1])): $i = 0; $__LIST__ = $data[1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><h3 <?php echo $i==1 ? '':'class="margin-top40"';?>><span class="titleColor1 titleBorder"></span><?php echo ($val['job_name']); ?></h3>
                <notempy name="val['job_direction']"><P><?php echo ($val['job_direction']); ?></p></notempty>
                
                <h4 class="font_c_blue margin-top20">崗位職責：</h4>
                <P><?php echo ($val['job_respons']); ?></P>
                <h4 class="font_c_blue margin-top20">崗位要求：</h4>
                <P><?php echo ($val['job_require']); ?></P>
                   <P><a class="btn btn-primary join_btn" href="#"  data-toggle="modal" data-target="#myModal">申請職位</a></P><?php endforeach; endif; else: echo "" ;endif; ?>
             </div>
        </div>
        
        <div id="chengxuyuan" class="row tab-pane fade  margin-top20 padding-bottom10">
        	<div class="col-sm-3 hidden-xs"><img class=" response_img" src="__PUBLIC__/images/joinus/3D_b.png"></div>
            <div class="col-sm-9 joinustitle">
             <?php if(is_array($data[2])): $i = 0; $__LIST__ = $data[2];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><h3 <?php echo $i==1 ? '':'class="margin-top40"';?>><span class="titleColor2 titleBorder"></span><?php echo ($val['job_name']); ?></h3>
                <notempy name="val['job_direction']"><P><?php echo ($val['job_direction']); ?></p></notempty>
                
                <h4 class="font_c_blue margin-top20">崗位職責：</h4>
                <P><?php echo ($val['job_respons']); ?></P>
                <h4 class="font_c_blue margin-top20">崗位要求：</h4>
                <P><?php echo ($val['job_require']); ?></P>
                   <P><a class="btn btn-primary join_btn" href="#"  data-toggle="modal" data-target="#myModal">申請職位</a></P><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div id="cehua" class="row tab-pane fade  margin-top20 padding-bottom10">
        	<div class="col-sm-3 hidden-xs"><img class=" response_img" src="__PUBLIC__/images/joinus/plan_b.png"></div>
            <div class="col-sm-9 joinustitle">
              <?php if(is_array($data[3])): $i = 0; $__LIST__ = $data[3];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><h3 <?php echo $i==1 ? '':'class="margin-top40"';?>><span class="titleColor3 titleBorder"></span><?php echo ($val['job_name']); ?></h3>
                <notempy name="val['job_direction']"><P><?php echo ($val['job_direction']); ?></p></notempty>
                
                <h4 class="font_c_blue margin-top20">崗位職責：</h4>
                <P><?php echo ($val['job_respons']); ?></P>
                <h4 class="font_c_blue margin-top20">崗位要求：</h4>
                <P><?php echo ($val['job_require']); ?></P>
                   <P><a class="btn btn-primary join_btn" href="#"  data-toggle="modal" data-target="#myModal">申請職位</a></P><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div id="yinxiao" class="row tab-pane fade  margin-top20 padding-bottom10">
        	<div class="col-sm-3 hidden-xs"><img class=" response_img" src="__PUBLIC__/images/joinus/music_b.png"></div>
            <div class="col-sm-9 joinustitle">
              <?php if(is_array($data[4])): $i = 0; $__LIST__ = $data[4];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><h3 <?php echo $i==1 ? '':'class="margin-top40"';?>><span class="titleColor4 titleBorder"></span><?php echo ($val['job_name']); ?></h3>
                <notempy name="val['job_direction']"><P><?php echo ($val['job_direction']); ?></p></notempty>
                
                <h4 class="font_c_blue margin-top20">崗位職責：</h4>
                <P><?php echo ($val['job_respons']); ?></P>
                <h4 class="font_c_blue margin-top20">崗位要求：</h4>
                <P><?php echo ($val['job_require']); ?></P>
                   <P><a class="btn btn-primary join_btn" href="#"  data-toggle="modal" data-target="#myModal">申請職位</a></P><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div id="tuiguang" class="row tab-pane fade margin-top20 padding-bottom10">
        	<div class="col-sm-3 hidden-xs"><img class=" response_img" src="__PUBLIC__/images/joinus/extend_b.png"></div>
            <div class="col-sm-9 joinustitle">
               <?php if(is_array($data[5])): $i = 0; $__LIST__ = $data[5];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><h3 <?php echo $i==1 ? '':'class="margin-top40"';?>><span class="titleColor5 titleBorder"></span><?php echo ($val['job_name']); ?></h3>
                <notempy name="val['job_direction']"><P><?php echo ($val['job_direction']); ?></p></notempty>
                
                <h4 class="font_c_blue margin-top20">崗位職責：</h4>
                <P><?php echo ($val['job_respons']); ?></P>
                <h4 class="font_c_blue margin-top20">崗位要求：</h4>
                <P><?php echo ($val['job_require']); ?></P>
                   <P><a class="btn btn-primary join_btn" href="#"  data-toggle="modal" data-target="#myModal">申請職位</a></P><?php endforeach; endif; else: echo "" ;endif; ?>
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
        <div class="col-sm-6 margin-top60">
        	<p><img src="__PUBLIC__/images/Public/map.png">福州市倉山區金工路1號 福州海峽創意產業園9號樓3F 寶寶巴士</p>            
            <p><img src="__PUBLIC__/images/Public/email-open.png">郵箱:hr@babybus.com  招聘熱線：0086-59183427642</p>
            <p><A href="http://weibo.com/sinyeebabyapp" target="_blank"><img src="__PUBLIC__/images/Public/icon_03.png">@宝宝巴士</A></p>
            <p><A href="http://t.qq.com/sinyeebabyapp" target="_blank"><img src="__PUBLIC__/images/Public/icon_02.png">@宝宝巴士</A></p>
                
        </div>
    </div>
</div>




<!--=============footer页脚====================
==============================================-->
<div class="product_three">

</div>

<div class="actGotop"><a href="javascript:;" title="TOP"></a></div>
<div class="four">
	<div class="container">
		<P>Copyright © 2014 BabyBus Group All Rights Reserved<br />
			<a href="<?php echo U('Index/declaration');?>" target="_blank">使用聲明</a>&nbsp;&nbsp;<a href="<?php echo U('Index/privacyPolicy');?>" target="_blank">隱私政策</a>
			<script src="http://s22.cnzz.com/stat.php?id=3356281&web_id=3356281&show=pic" language="JavaScript"></script>
			<script type="text/javascript" name="baidu-tc-cerfication" data-appid="4744355" src="http://apps.bdimg.com/cloudaapi/lightapp.js"></script>
		</P>
	</div>
</div>





<!--=================================弹出盒子====================================-->
<form id="my_form" method="post" enctype="multipart/form-data"> 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">求職申請</h4>
      </div>
      <div class="modal-body">



    <div class="row">
    	<div class="col-sm-12">
          
            <div class="row">            
            	<div class="col-sm-8 margin-top10">
                <div class="input-group">
                  <input type="file" name="checkFile" class="form-control">                
                </div><!-- /input-group -->
                <span class="hint" id="fileshang">請上傳簡歷doc,docx,wps,zip.檔最大限制2M</span>
            </div>
           	 	<div class="col-sm-4 margin-top10 ">
                <div class="btn-group btn-group2">
                    <select id="job_select" name="job_select" class="form-control form-control2">
                      <option value="選擇申請崗位">選擇申請崗位</option>
                      <?php if(is_array($jobs)): $i = 0; $__LIST__ = $jobs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$job): $mod = ($i % 2 );++$i;?><option value="<?php echo ($job[id]); ?>,<?php echo ($job[job_class_id]); ?>"><?php echo ($job["job_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                      
                    </select>              
                </div>
                    <input type="hidden" name="job_class_id"  id="job_class_id"/>
                    <input type="hidden" name="job_id"  id="job_id"/>
                <br/><span class="hint" id="jobhang">請選擇崗位</span>
            </div>
        	</div>
            
        </div>

        <div class="col-sm-12 margin-top40">
        	
        	<p><img src="__PUBLIC__/images/Public/map.png">福州市倉山區金工路1號 福州海峽創意產業園9號樓3F 寶寶巴士</p>            
            <p><img src="__PUBLIC__/images/Public/email-open.png">邮箱:hr@babybus.com  招聘熱線：0086-59183427642</p>
            <p><A href="http://weibo.com/sinyeebabyapp" target="_blank"><img src="__PUBLIC__/images/Public/icon_03.png">@宝宝巴士</A></p>
            <p><A href="http://t.qq.com/sinyeebabyapp" target="_blank"><img src="__PUBLIC__/images/Public/icon_02.png">@宝宝巴士</A></p>
                  
        </div>
    </div>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <input type="button" id="form_submit_check" data-loading-text="Loading..." autocomplete="off" class="btn btn-primary form-control2" value="提交">
      </div>
      <div class="toast_s"></div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
</form> 



<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/jquery.form.js"></script>
<script src="__PUBLIC__/js/public.js"></script>
<script src="__PUBLIC__/js/function.js"></script>
<script>
	toastr.options = {
	  "closeButton": false,
	  "timeOut": "3000"
	}
    
</script>
</body>
</html>