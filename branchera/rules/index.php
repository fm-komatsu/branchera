<?php
//base
include ("../function.php");
$pageTtl = 'サービスご利用について';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "長谷工グループ「ブランシエラクラブ」のサービスご利用についてのページです。";
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="page-list";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row">
		<?php
		//$panAry[] = array("/_temp" ,"パンくず名");
		//$panAry[] = array("/_temp/index.php" ,"パンくず名");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<header class="main__header main-header">
			<div class="main-header__row">
				<figure class="main-header__thum">
					<img src="<?php echo $metaThum; ?>" alt="<?php echo $pageTtl; ?>の画像">
				</figure>
				<div class="main-header__ex">
					<h2 class="main-header__ttl"><?php echo $pageTtl; ?></h2>
					<p class="main-header__desc"><?php echo $metaDesc; ?></p>
				</div>
			</div>
		</header>

		<section class="main__item">
			<dl class="u-list__dl">
				<dd>株式会社長谷工コーポレーション（以下、「当社」といいます）は、長谷工グループ「ブランシエラクラブ」（以下、「ブランシエラクラブ」といいます）が提供するサービス（以下、「本サービス」という）のご利用について以下のとおり定めます。尚、本サービスご利用に関し、下記に定めのない事項については、長谷工ID利用規約が適用されます。</dd>
				<dt>（定義）</dt>
				<dd>
					<ul class="u-list__ul_kana">
						<li>「ブランシエラクラブ」は、お客さまへさまざまなサービスを提供するために管理・運営するものとします。</li>
						<li>「長谷工ID」とは、当社または、当社グループ会社および当社が提携するサービス提供会社（以下「当社グループ会社等」といいます）からのサービスをご利用いただく際に必要なお客さま番号です。長谷工 IDは無料で登録できます。</li>
						<li>当社指定の方法で「長谷工ID」登録手続きをいただき、当社が承認した方で本サービスを利用する方を「会員」と言います。尚、「長谷工ID」登録の際、必要な事項の記載をいただけない場合には登録をお断りさせていただく場合があります。</li>
					</ul>
				</dd>
				<dt>（本サービスについて）</dt>
				<dd>本サービスは、会員へ本ウェブサイトや会報誌、DM・Eメール等で、住まいに関する情報および当社グループ会社等からのサービス（ポイントサービス・イベント、キャンペーン、ご優待企画情報等）を提供するものです。長谷工IDをご登録後、ログインいただくと、「マイページ」にてお客さま情報・ポイント利用状況等をご確認いただけます。</dd>
				<dt>（情報停止について）</dt>
				<dd>
					<ul class="u-list__ul_kana">
						<li>会員が郵送およびメール配信による情報提供の停止を希望される場合は、電話、Eメールまたはウェブサイト上のフォームにて当社に届け出ていただきます。但し、情報提供の停止の届出をした会員の希望に拘らず、当社がサービス運営上で必要と判断した場合は、郵送およびメールの配信をすることができるものとします。</li>
						<li>会員が下記の事項に該当する場合、予告なしに「長谷工ID」の登録抹消手続きをとらせていただく場合があります。</li>
						<ul class="u-list__ul__num ml2">
							<li>（1）送付物やEメールが宛先不明で発送者に戻った場合</li>
							<li>（2）その他ブランシエラクラブの運営に支障があると事務局が判断した場合</li>
						</ul>
					</ul>
				</dd>
			</dl>

		</section>

		<section class="main__item">
			<h5 class="u-ttl__m">【本ウェブサイトのご利用について】</h5>
			<dl class="u-list__dl">
				<dt>（クッキーについて）</dt>
				<dd>クッキーは、本ウェブサイトに再訪問していただいた際、より便利に本ウェブサイトを閲覧していただくため、また広告の配信を委託する第三者への委託に基づき広告掲載等に利用するためにお客さまのブラウザに送信する小規模の情報で、お客さまのディスクにファイルとして格納されることがあります。ブラウザの設定により機能を無効にすることができますが、その場合に当社または、当社グループ会社等からのサービスが一部受けられなくなる場合がありますので、ご了承ください。</dd>
				<dt>（SSLによる情報の保護について）</dt>
				<dd>本ウェブサイトでは、SSL（Secure Socket Layer）とよばれる情報の暗号化セキュリティにより、お問い合わせ等にてお客さまの入力された情報の安全なやりとりを行なっております。</dd>
				<dt>（免責事項について）</dt>
				<dd>当社または、当社グループ会社は、予告なしにこのウェブサイト上の情報を変更する場合や、サイトの運営を中断または中止させていただく場合があります。また、当社または、当社グループ会社は細心の注意をはらってこのウェブサイトに情報を掲載しておりますが、万一サイトの利用を通じてお客さまに損害が生じた場合でも、当社または、当社グループ会社は一切責任を負いかねますのであらかじめご了承ください。</dd>
				<dt>（リンクについて）</dt>
				<dd>本ウェブサイトのトップページへのリンクをご希望の場合は、事前に当社（本ウェブサイトお問い合わせページ）までお知らせください。サイトが公序良俗に反する内容、当社などを誹謗中傷する内容を含むサイトなど、当社の信頼性を損なうものであると当社が判断した場合には、リンクをお断りする場合があります。リンク承諾後であっても、当社が不適切と判断した場合は、リンクの許諾を取り消す場合があります。</dd>
				<dt>（推奨環境について）</dt>
				<dd>本ウェブサイトは、Firefox、Safari、Google Chrome、Microsoft Edgeそれぞれの最新版、iOS最新版、Android4.4以降での閲覧を推奨しています。他のブラウザでご覧になった際の一部コンテンツの表示不具合等についてはあらかじめご了承ください。</dd>
				<dt>（プラグインについて）</dt>
				<dd>一部のコンテンツでは、下記のプラグインが必要です。インストールされていないお客さまは、下記よりダウンロードしてご利用くださいますようお願いいたします。なお、プラグインは、予告なしに変更することがありますのでご了承ください。</dd>
			</dl>

		</section>

		<aside class="main__item">
			<p>PDF形式のファイルをご覧いただくには、アドビシステムズ社から無償提供されているAdobe&reg; ReaderTM プラグインが必要です。<br>Adobe&reg; ReaderTM は、アドビシステムズのサイトで<a href="http://get.adobe.com/jp/reader/" target="_blank" rel="nofollow" class="u-icon">無料ダウンロード</a>できます。</p>
		</aside>

		<section class="main__item">
			<h4 class="u-ttl__m">長谷工グループ「ブランシエラクラブ」事務局</h4>
			<p>住所：〒105-0014　東京都港区芝3-8-2
			<br>TEL：0120-<ruby>86-8450<rp>(</rp><rt style="font-size : 1.2rem;">ハローハセコー</rt><rp>)</rp></ruby>
				<br>受付時間／8：00～20：00（無休※年末年始を除く）
				<br>MAIL：<a href="mailto:brancheraclub@haseko.co.jp">brancheraclub@haseko.co.jp</a>
			</p>
		</section>
	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
