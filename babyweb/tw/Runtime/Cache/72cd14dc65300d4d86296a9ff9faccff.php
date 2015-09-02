<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
		<meta name="description" content="专注于为学龄前儿童研发教育软件产品，通过移动互联平台，打造一个全球知名的卡通品牌形象，将中国传统文化融合国际化元素传播至大中华文化圈乃至全球。">
		<meta name="keywords" content="宝宝巴士,宝贝巴士,BabyBus,在线教育,幼儿教学,儿童软件,儿童应用,移动早教,熊猫,早教,幼教">
		<meta name="author" content="宝宝巴士（福建）网络科技有限公司">
		<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
		<link rel="apple-touch-icon-precomposed" href="<?php echo WEB_URL;?>/favicon.png">
		<!--[if lt IE 9]><script src="__PUBLIC__/js/respons/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
      <script src="__PUBLIC__/js/respons/html5shiv.js"></script>
      <script src="__PUBLIC__/js/respons/respond.min.js"></script>
    <![endif]-->
		<link href="__PUBLIC__/css/public.css" rel="stylesheet">
		<title>使用申明 - 宝宝巴士 快乐童年 - 启蒙教育第一品牌</title>
	</head>

	<body>
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
		<!--=============section主体内容区域===================
==============================================-->
		<div class="container download margin-top90">
			<div class="row joinus">	
				<div class="col-md-3 hidden-xs hidden-sm">
					<div class="ist-group margin-top30"style="width: 213px;" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
						
					
					  <a href="declaration.shtml" class="list-group-item active">使用申明</a>
					  <a href="privacyPolicy.shtml" class="list-group-item">隐私政策</a>
                        <?php if($count > 0): ?><a href="link.shtml" class="list-group-item">友情链接</a><?php endif; ?>
					</div>
				</div>
				<div class="col-md-9 margin-top10 statements">
					<h3 style="color: #00BAE9;">宝宝巴士 用户许可授权协议</h3>
					<p>请宝宝巴士用户仔细阅读以下用户许可授权协议, 如果您不同意本协议，就不能使用宝宝巴士软件。福州智永信息科技有限公司（以下简称智永公司）将本软件程序的最终使用许可权授予您。但您必须向智永公司作出以下保证：</p>
					<p>本《用户许可协议》(以下简称《 协议》)是您(个人或单一机构团体)与上述 宝宝巴士 软件(以下称"软件"或"软件产品")版权所有人智永公司之间的法律协议。在您使用本软件产品之前,请务必阅读此《协议》, 任何与《协议》有关的软件、电子文档等都应是按本协议的条款而授予您的, 同时本《协议》亦适用于任何有关本软件产品的后期发行和升级。您一旦安装、使用本软件产品, 即表示您同意接受本《协议》各项条款的约束。本软件产品受著作权法及国际著作权条约和其它知识产权法及条约的保护。本软件产品只许可使用,
						而不出售，不得用于商业目的的活动之中。</p>
					<ul>
						<li>一、软件产品保护条款
							<ul >
								<li>1.许可与限制：
									<br />授权：智永授权宝宝巴士用户进行宝宝巴士产品的安装和使用：您可安装无限制数量的本软件产品来使用。
									<br />限制：用户须知，除本协议明确授权的许可和权利外，智永未授予用户任何其它许可和权利。比如对许可软件进行分发、复制、反向工程、反编译或反汇编。 任何组织或个人未经福州智永信息科技有限公司授权而利用宝宝巴士软件以任何方式为公众服务并同时满足其自身特定目的而分发、复制和传播本软件产品, 均被视为侵权，智永有权用法律手段进行追究。
									<br />
									<li>2.终止： 如您未遵守本《协议》的各项条件,本《协议》自行终止。 个别授权： 如有任何组织或个人利用本软件以任何方式为公众服务并同时满足其自身特定目的而分发、复制和传播本软件产品, 均须得到版权人授权同意后方可进行, 否则视为侵权。</li>
									<li>3.知识产权 商业标识： 本《协议》不授予您由版权人福州智永信息科技有限公司所拥有的商标、商号或其他体现本方商业表征的商业标识（“商业标识”）的任何权利。 宝宝巴士软件产品(包括但不限于本软件产品中所含的任何图象、声音、动画、文字和程序)及本软件产品的任何附加产品的一切所有权和知识产权, 均由版权人福州智永信息科技有限公司拥有。本《协议》不授予您使用这些内容的权利。</li>
									<li>4.有限保证 无保证： 使用本软件产品涉及到Internet服务，可能会受到各个环节不稳定因素的影响，因此服务存在不可抗力、计算机病毒、黑客攻击、系统不稳定、用户所在位置、用户关机、及其他任何技术、互联网络、通信线路原因等造成的服务中断或不能满足用户要求的风险。用户须承担以上风险，福州智永信息科技有限公司不承诺对因此导致用户不能搜索和下载文件、发送和接收信息等各项宝宝巴士提供的服务承担任何的责任，使用本软件产品由用户自己承担风险,在适用法律允许的最大范围内, 智永公司在任何情况下不就因使用或者不能使用本软件产品所发生的特殊的、意外的非直接或者间接的损失承担赔偿责任，即使已实现被告知此事件发生的可能性。
										对造成损失无责任： 在使用本软件产品存在有来自任何他人的包括威胁性、亵渎性、令人反感的、侵害个人隐私权、版权、或者非法的内容或者行为，或对他人权利的侵犯（包括知识产权）的匿名或者署名的信息的风险。用户须承担以上风险，智永公司对宝宝巴士服务不作任何类型的担保和承诺，不论是明确的或者隐含的，包括所有有关信息的真实性、适用性、适于某一特定用途、所有权和非侵权的默示担保和条件，对因此导致任何因用户不正当或非法使用服务产生的直接、间接、偶然、特殊、及后续的损害，不承担任何的责任。
									</li>
							</ul>
						</li>
						<li>二、用户使用须知 特别提醒用户，使用互联网必须遵守国家有关的政策和法律，如刑法、国家安全法、保密法、计算机信息系统安全保护条例，保护国家利益;保护国家安全。对于违法或者不当使用互联网络而引起的一切责任，由用户负全部责任。
							<ul >
								<li>1.用户应规范合法地使用宝宝巴士系列软件，不得使用宝宝巴士发送或者传播敏感信息或者违反国家法律制度的信息；用户不得使用宝宝巴士发送或者传播虚假、骚扰性、侮辱性、恐吓性、伤害性、挑衅性、庸俗性、淫秽色情性信息；用户不得在未经智永允许下进行买卖行为，拍卖行为，支付金钱及其他的类似行为；用户不得在未经智永允许下使用宝宝巴士软件或软件的内容进行任何商业行为。</li>
								<li>2.用户使用宝宝巴士软件时可能会被宝宝巴士读取一些信息（比如基于网络的粗略位置、GPS位置、网络通信、手机状态、wifi状态等），这是由于宝宝巴士产品本身已拥有中文、英语、日语、法语、阿拉伯语、俄语等多国语言，以便于宝宝巴士有针对性的开发个性化产品；iOS与android手机设备多样化，我们需要进行多种兼容性测试以保证宝宝巴士用户能正常使用软件；由于移动互联行业的特殊性，宝宝巴士产品需要配合硬件的升级进行产品本身或者产品自身品质的升级，因此可能需要读取wifi来告知用户是否有升级产品出现，如没有启动wifi则不提示.这样可以避免用户在不知情的情况下更新产品,造成不必要的流量损耗等等诸如此列的原因。宝宝巴士承诺所读取到的任何信息，只被使用于宝宝巴士软件的开发，而不会透入给第三方（其它个人或公司），除非得到您的许可或法律或政府的强制规定。</li>
								<li>3.宝宝巴士和大多数因特网软件一样，易受到各种安全问题的困挠，比如下载安装的其他软件或者文件中含有各种病毒，威胁到个人计算机上信息和数据的安全，进而威胁宝宝巴士软件的使用等情况；因此用户应加强个人资料保护意识，以免对个人生活或正常使用宝宝巴士服务造成不必要的影响。 4.青少年特别是13岁以下的儿童上网与使用宝宝巴士系列软件应该在其家长或监护人指导下，正确学习使用宝宝巴士软件，我们鼓励未满 13 岁儿童的家长和监护人定期检查和监控他们使用电子邮件及参加其它在线活动的情况。 5.用户不应散布对宝宝巴士公司不利言论和诋毁宝宝巴士形象的行为，情节恶劣者，宝宝巴士有权上诉，并付诸法律； 6.用户不得利用宝宝巴士进行违反国家法律的活动，如有发现，智永公司会应公安部门的要求，全力协助调查工作。</li>
							</ul >
						</li>
						
						<li>三、特别提醒用户注意，福州智永信息科技有限公司对他人权利的侵犯（包括知识产权）不承担责任，且对任何第三方通过服务发送或在服务中包含的任何内容不承担责任。</li>
						<li>四、法律适用 本协议条款应符合中华人民共和国法律法规的规定，用户和福州智永信息科技有限公司一致同意接受中华人民共和国法律的管辖。当本协议条款与中华人民共和国法律相抵触时，则这些条款将完全按法律规定重新解释或重新修订，而其它条款则依旧对福州智永信息科技有限公司及用户产生法律效力。</li>
						<li>五、协议条款修改 福州智永信息科技有限公司有权在必要时对本协议内容进行追加、变更、中止、终止。且该修改以符合国家法律法规的规定，并不侵害用户的合法权益为必要前提。 福州智永信息科技有限公司协议条款一旦发生变动，将会在重要页面上提示修改内容。用户若不同意福州智永信息科技有限公司改动的内容，可以主动停止与宝宝巴士软件的下载与使用关系；若用户继续享用福州智永信息科技有限公司网络服务，则福州智永信息科技有限公司有权视为该用户已接受该协议条款的变动并原意受变动后协议条款的约束。</li>
						<li>六、协议生效 本协议发布在智永官方网站上，用户选择使用宝宝巴士软件时，则本协议即时生效。</li>
						<li>七、福州智永信息科技有限公司拥有对以上各项条款和内容的最终解释权。</li>
							
					</ul>
					<P style="text-align: right; border-top: 4px solid #efefef; padding-right: 2em;">福州智永信息科技有限公司<br /> 2011年5月</P>






				</div>

			</div>

		</div>
<script src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/bootstrap.min.js"></script> 

	</body>

</html>