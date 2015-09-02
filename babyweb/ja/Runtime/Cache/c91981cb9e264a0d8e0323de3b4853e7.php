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
		<title>「ベビー・バス」ご利用規約- BabyBus　幼児教育・子ども向け知育アプリ</title>
		<style type="text/css">
			li{
				list-style-type: none;
				margin-left: -24px;
			}
		</style>
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
          <div class="logo"><a href="<?php echo WEB_URL;?>"><img src="__PUBLIC__/images/Public/logo.png" alt="BabyBus focuses on meeting the educational needs of preschool children. We are fully mobile so children can take their favorite BabyBus characters with them anywhere they go. It's time to have the most fun learning." /></a></div>
        </div>
        <div class="navbar-collapse collapse navbar-right navbar-margintop">
          <ul class="nav navbar-nav">
            <li data-value="Index"><a href="<?php echo U('Index/index');?>">TOP</a></li>            
            <li data-value="Product"><a href="<?php echo U('Product/index');?>">アプリ</a></li>            
            <!--<li data-value="Join"><a href="<?php echo U('Join/index');?>">招聘</a></li>-->
            <li data-value="Blog"><a href="<?php echo U('blog/index');?>">BLOG</a></li>
            <li data-value="Download"><a href="<?php echo U('Download/index');?>">ヘルプ</a></li>  
            <li data-value="About"><a href="<?php echo U('About/index');?>">運営会社</a></li>
			<li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">日本語<span class="caret"></span></a>
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
		<!--=============section主体内容区域===================
==============================================-->
		<div class="container download margin-top90">
			<div class="row joinus">
				<div class="col-md-3 hidden-xs hidden-sm">
					<div class="ist-group margin-top30"style="width: 213px;" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
						
					
					  <a href="declaration.shtml" class="list-group-item active">利用規約</a>
					  <a href="privacyPolicy.shtml" class="list-group-item">プライバシーポリシー</a>
                        <?php if($count > 0): ?><a href="link.shtml" class="list-group-item">相互リンク</a><?php endif; ?>
					</div>
				</div>

				<div class="col-md-9 margin-top10 statements">
					<h3 style="color: #00BAE9;">「ベビー・バス」ご利用規約</h3>
					<p>序文</p>
					<p>本規約（「ベビー・バス」ご利用規約）は、お客様（個人又は法人を問いません。）と、BABYBUS (FUJIAN) NETWORK TECHNOLOGY CO.,LTD（以下、「当社」といいます。）との間で締結される契約（以下、「本規約」といいます。）です。</p>
					<p>「ベビー・バス」（以下、「本アプリケーション」と言います。）をご利用頂くためには、お客様が、本規約にご同意いただくことが条件となります。同意されない場合は、ご利用頂けません。また、利用された場合は、本規約に同意されたものとします。また、本規約は、本アプリケーションがアップデートされた場合の当該アップデート版アプリケーションにおいても適用されます。以下、本アプリケーションを利用されるお客様を「利用者」といいます。 </p>
					
						<p>第1条　使用許諾
							<ul >
								<li>1.許諾権利<br />利用者は、本規約に同意することによって、本アプリケーションを無制限の数のデバイスにインストールし、または使用する個人的で、非独占的かつ譲渡不可能な権利を許諾します。利用者は、本アプリケーションをダウンロードしたそのままの形態で一切の情報の変更又は削除せずに複製した場合に限って、本アプリケーションを無償で再配布できます。</li>
								<li>2.制限<br />利用者は、本規約で明示的に認められた場合を除き、本アプリケーションに関しリバース・エンジニアリング、逆アセンブル、逆コンパイル等のソースコード解析作業を行ってはならないものとします。利用者は、当社の書面による事前の承諾を得ることなく、本アプリケーションの使用権を第三者に再許諾、譲渡、移転またはその他処分してはならないものとします。</li>
							</ul>
						</p>
						<p>第2条　著作権等
							<ul >
								<li>本アプリケーションの著作権及びその他すべての権利は当社が保有しており、日本国の著作権法及び国際条約等に基づき保護されています。利用者の個人的かつ非営利的な利用目的のためにのみ利用することができます。</li>
							</ul >
						</p>
						
						<p>第3条　費用負担
							<ul >
								<li>利用者は、本アプリケーションを利用するために、必要なハードウェア、インターネット接続回線その他一切を、自己の責任と費用をもって準備するものとします。 また、利用者は前項の他、通信費用、インターネット接続費用、電気代、その他本アプリケーションを利用するために必要な費用がかかることを了承し、これを負担するものとします。</li>
							</ul >
						</p>
						<p>第4条　ライセンス料金及び利用料金 
							<ul >
								<li>利用者は、当社に対して、本アプリケーションについて当社が別途定める金額（ライセンス料金)を、当社が別途定める方法に従って支払うものとします。利用者が本アプリケーションを購入した販売サイトにおいて認められている場合を除き、利用者から当社に対して支払われたライセンス料金及び費用は、返金されないものとします。</li>
							</ul >
						</p>
						<p>第5条　禁止事項 
							<ul >
								<li>（1）当社もしくは他者の著作権、商標権等の知的所有権を侵害する行為または侵害する恐れのある行為</li>
								<li>（2）選挙の事前運動、選挙運動またはこれらに類似する行為及び公職選挙法に抵触する行為。</li>
								<li>（3）わいせつ、児童ポルノもしくは児童虐待に相当する画像、文書等を送信または表示する行為。 </li>
								<li>（4）他者の人種、宗教、性別等を差別、侮辱もしくは誹謗中傷し、他者の名誉もしくは信用を毀損する行為、またはハラスメント行為（特定人物やグループを攻撃し、精神的な苦痛を与えると当社が判断する行為）。 </li>
								<li>（5）他者の財産、プライバシーもしくは肖像権を侵害する行為または侵害する恐れのある行為。 </li>
								<li>（6）詐欺等の犯罪に結びつくまたは結びつく恐れのある行為。 </li>
								<li>（7）無限連鎖講を開設しまたはこれを勧誘する行為、またはこれらに類似する行為。 </li>
								<li>（8）他者になりすまして、本サービスへ参加する行為。 </li>
								<li>（9）宗教活動、これらに類似する行為、宗教団体への勧誘行為。</li>
								<li>（10）他者に対する広告、宣伝、営業、勧誘行為または他者による情報の送受信を妨害する行為。</li>
								<li>（11）チェーンメールの転送行為、転送の依頼行為または依頼に応じた転送行為。 </li>
								<li>（12）ウィルス等の有害なコンピュータープログラム等もしくは迷惑メールを送信しまたは他者が受信可能な状態にしておく行為。 </li>
								<li>（13）プログラム等の改変、リバースエンジニアリング、解析、ユーティリティの作成、頒布、利用等の行為。 </li>
								<li>（14）上記の他、法令、本規約もしくは公序良俗に違反する行為、当社の信用を毀損しもしくは当社の財産を侵害する行為、または他者もしくは当社に不利益を与え、他のお客様の迷惑となるような行為。 </li>
								<li>（15）その他当社が不適切であると判断する行為。 </li>
							</ul >
						</p>
						<p>第6条　免責事項
							<ul >
								<li>当社は、本アプリケーションの完全性、正確性、有用性などについて保証するものではありません。また、当社は、本アプリケーションのダウンロードまたはインストールにより、利用者や第三者のデバイスが誤動作を起こさないことを保証するものではありません。また、本アプリケーションの不具合、その他本アプリケーションの利用により利用者や第三者に損害が生じた場合、利用者と第三者との間で紛争などが生じた場合など、いかなる場合であっても、当社は一切の責任を負いません。</li>
								<li>当社は、本アプリケーション上に表示される各種提供情報及び広告データの真実性について一切の保証をしません。また、当社及び情報提供者は本アプリケーション上に表示される各種提供情報及び広告データに関連して、直接的、間接的を問わず利用者に発生する一切の損害及び第三者からなされる請求について、一切の責任を負わないものとします</li>
							</ul >
						</p>
						<p>第7条　プライバシーと個人情報
							<ul >
								<li>利用者はベビーバスを利用する時に、個人情報を収集することがあります。個人情報を収集する際は、適切な範囲で適法かつ公正な手段で個人情報を収集します。</li>
								<li>これはベビーバスの製品自体は中国語、英語、日本語、フランス語、アラビア語、ロシア語などの多国言葉が付いています。各国の文化によってもっと個性的な製品を開発するために利用者の情報が必要です。IOSとAndroidスマートフォンの多様化で、当社は数回互換性テストをやらなければいけません。これで、ベビーバスは各国で正常に利用されています。</li>
								<li>当社は、ご本人の許可がある場合及び個人情報保護法その他法令上第三者への提供・開示が許される場合を除き、ご本人の許可なく第三者に個人情報を開示または提供することはありません。当社は、利用者に関する情報について、当社が定めるプライバシーポリシーに従い、取り扱うものとします。</li>
							</ul >
						</p>
						<p>第8条　本規約の変更 
							<ul >
								<li>当社は利用者の承諾を要することなく、本規約の内容を、利用者に通知することによって 随時任意に追加または変更することができるものとします。本規約の追加または変更は、 原則として当社のウェブサイトにて利用者に通知します。利用者は、当社が行った本規約への追加または変更を確認するため、随時当社のウェブサイトを確認することに合意するものとします。当社が利用者に対して通知する諸規定は、通知の方法を問わず、本規約の一部をなすものとします。</li>
								<li>本規約を変更した場合は、当社が通知を行った時点で効力が発生するものとし、利用者が 本アプリケーションの利用を継続される限り、変更を承諾したものとします。なお、本規約を変更した場合、本アプリケーションの利用条件は変更後の契約書に拠るものとします。 </li>
							</ul >
						</p>
						<p>第9条　契約の成立、終了
							<ul >
								<li>本規約は、利用者が本アプリケーションをダウンロードまたは使用を開始した時点をもって成立し、効力を生じるものとします。利用者は、本アプリケーションを消去及び破棄又は対象デバイスの初期化を行うことにより、利用しなくなったことをもって本規約を終了と致します。</li>
								<li>当社は、利用者が本規約の規定に違反した場合、当該利用者に対し何ら催告することなく、本規約を直ちに解除することができるものとします。</li>
							</ul >
						</p>
						<p>第10条 準拠法及び管轄
							<ul >
								<li>1.本規約の成立・効力・履行及び解釈については、本社の所在地の法律が適用されるものとします。</li>
								<li>2.本規約に関して、利用者と当社の間で紛争が生じた場合、本社の所在地の管轄裁判所とします。</li>
							</ul >
						</p>

							
					
					<P style="text-align: right; border-top: 4px solid #efefef; padding-right: 2em;"> BABYBUS (FUJIAN) NETWORK TECHNOLOGY CO.,LTD<br /> 平成２６年１１月１０日制定</P>






				</div>
			</div>

		</div>
		<script src="__PUBLIC__/js/jquery.min.js"></script>
		<script src="__PUBLIC__/js/bootstrap.min.js"></script> 
	</body>

</html>