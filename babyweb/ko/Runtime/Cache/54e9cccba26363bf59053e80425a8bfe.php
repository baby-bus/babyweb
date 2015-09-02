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
		<title>개인정보취급방침 - 유아교육 어린이 두뇌발달 창의력발달 유아앱시리즈<</title>
	</head>

	<body>

		<!--=============section主体内容区域===================
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
		<div class="container download margin-top90">
			<div class="row joinus">
				<div class="col-md-3 hidden-xs hidden-sm">
					<div class="ist-group margin-top30"style="width: 213px;" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
						
					
					  <a href="declaration.shtml" class="list-group-item">이용약관</a>
					  <a href="privacyPolicy.shtml" class="list-group-item active">개인정보취급방침</a>
                        <?php if($count > 0): ?><a href="link.shtml" class="list-group-item ">관련링크</a><?php endif; ?>
					</div>
				</div>
				<div class="col-md-9 margin-top10 statements">
					<h3 style="color: #00BAE9;">개인정보취급방침</h3>
					<p>BABYBUS(FUJIAN) NETWORK TECHNOLOGY CO.,LTD (이하 “회사” 또는 “베이비버스”라고 함)는 정보통신망 및 정보보호 등 관련법령에 의거한 회사가 제공하는 홈페이지 및 관련콘텐츠(모바일 웹/앱) 서비스 이용,회원가입,원할한 고객상담, A/S서비스 등 각종 기본적인 서비스 제공을 위한 필수정보와 고객 맞춤서비스 제공을 위한 선택정보로 구분을 하여 아래와 같은 개인정보를 수집이용합니다.</p>
					<ul>
						<li>1. 수집항목
							<p>
							아이디,비밀번호,별명(닉네임),메일주소,전화번호(휴대폰번호),주소,그리고 서비스 이용과정에서 자동으로 생성되는 IP  Address,쿠키,방문일시,서비스 이용기록,불량이용기록도 수집될수 있습니다.
							</p>
									
							
						</li>
						<li>2. 개인정보 수집방법 및 이용목적
							<p>
								▫홈페이지 회원가입,서비스 이용,이벤트 응모,생성정보 수집 툴을 통한 수집,A/S수집.<br />
								▫원할한 서비스 이용,A/S처리,고지사항 전달,불량회원의 부정이용 방지.<br />
								▫신규서비스 개발 및 맞춤서비스 제공,이벤트 참여기회 제공.	<br />
							</p>
							
						</li>
						
						<li>3.개인정보의 보유 및 이용기간
							<p>▫귀하의 개인정보는 수집목적 또는 제공받은 목적이 달성하면 파기하는것을 원칙으로 합니다.<br />
							▫회원관리,불량회원 단속,서비스 이용의 혼선방지를 위해 이름,로그인 아이디는 6개월보존합니다.<br />
							▫관계법령의 규정에 의하여 보존할 필요 있는 경우는 일정기간동안 회사에서 보관합니다.<br />
							</p>
						<li>4.개인정보 파기절차 및 방법
							<p>▫전자적 파일형태로 저장된 개인정보는 기록을 재생할수 없는 기술적방법으로 파기합니다.<br />
							▫종이에 출력된 개인정보는 분쇄하거나 소각을 통하여 파기합니다.<br /></p>
						</li>
						<li>5.개인정보 제3자제공 및 취급위탁 관련방침
							<p>▫베이비버스는 회원님들의 개인정보를 위탁하거나 제3자에게 제공하지 않습니다.</p>
						</li>
						<li>6.개인정보 수집,이용,제공에 대한 동의철회(회원탈퇴)
							<p>▫회원가입시 동의한 내용에 대해서 언제든지 철회할수 있습니다.<br />
							개인정보 담당자에 전화,메일등으로 연락을 주시면 신속하게 개인정보의 삭제 등 필요한 조치를 합니다.<br /></p>
						</li>
						<li>7.기타
							<p>▫홈페이지에 링크되어 있는 웹사이트에서 개인정보를 수집하는 행위는 본 개인정보취급방침에 적용되지 않습니다.</p>
						</li>
					</ul>
					<p>이 개인정보 취급방침은 2014년 12월 1일부터 적용되며,법령, 정책 또는 보안기술의 정책변경에 따라 내용 추가,삭제,개정하는 경우 홈페이지 공지사항을 통하여 공지할것입니다.발생한 분쟁에 대해 소송이 제기되는 경우 회사의 본사 소재지를 관할하는 법원을 관할 법원으로 합니다.</p>
					<p>문의메일: ko@babybus.com</p>






				</div>
			</div>

		</div>
		<script src="__PUBLIC__/js/jquery.min.js"></script>
		<script src="__PUBLIC__/js/bootstrap.min.js"></script> 
	</body>

</html>