<?php
//base
include ("../../function.php");
$content = get_id_data('3016');
$pageTtl = $content['title'];

//meta
$metaTtl = '優待サービス「'.$pageTtl.'」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/gift/" ,"優待サービス");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<?php
		include ($inc_path."/lib/inc/page/_gift/__main-header.php");
		?>
		<section class="main__wrapper">
			<div class="product-img">
				<h3 class="u-ttl__l">名門ジャズクラブで洗練された一夜を！ブルーノート東京、コットンクラブで利用可能な特別プラン</h3>
				<figure class="img u-only__pc">
					<img
					data-src="../../lib/img/gift/bluenote/main-vis.jpg"
					data-retina="../../lib/img/gift/bluenote/main-vis@2x.jpg"
					alt="Image photo"
					style="max-width:740px;"
					class="u-img__max"
					>
				</figure>
				<figure class="img u-only__sp center">
					<img
					data-src="../../lib/img/gift/bluenote/main-vis.jpg"
					data-retina="../../lib/img/gift/bluenote/main-vis@2x.jpg"
					alt="Image photo"
					class="u-img__max"
					>
				</figure>
      </div>
    <p class="mb4">リアル・ジャズをはじめ、ブルースやR&amp;B、ラテン音楽など、ジャズのエッセンスがちりばめられたさまざまな音楽を楽しめる「ブルーノート東京、コットンクラブ」にて、ミュージックチャージを1,000円OFF。お得なこの機会に、ぜひ優待サービスをご利用ください。</p>
		<div class="u-assist_overflow">
			<h4 class="u-ttl__m">通常ミュージックチャージより1,000円（税込）OFF <span class="u-color__red u-small">※一部ご優待対象外公演あり</span></h4>
			<div class="">
		    <figure class="img u-float__left u-only__pc">
		      <img
						data-src="../../lib/img/gift/bluenote/gift-info.png"
						data-retina="../../lib/img/gift/bluenote/gift-info@2x.png"
						alt="ご優待"
						style="max-width:299px;"
						class="u-img__max"
					>
		    </figure>
				<figure class="img u-float__left u-only__sp">
		      <img
						data-src="../../lib/img/gift/bluenote/gift-info.png"
						data-retina="../../lib/img/gift/bluenote/gift-info@2x.png"
						alt="ご優待"
						style="max-width:375px;"
						class="u-img__max"
					>
		    </figure>
				<p style="font-size: 1.4rem;">お一人につき、通年で何度でもご利用いただけます。<br>ブランシエラクラブ会員さま1名につき同伴者3名さままで有効です。</p>
				<ul class="u-small u-clearfix">
					<li>※ミュージック・チャージは公演によって異なります。</li>
					<li>※<span class="u-color__red txt-strong">自由席</span>にのみご利用いただけます。</li>
				</ul>
			</div>
		</div>
		<ul class="u-small">
			<li>※ご予約のお申込みは、ブランシエラクラブ会員ご本人さまに限らせていただきます。</li>
			<li>※一部対象外の公演があります。</li>
			<li>※当日受付の際、申込み者の名前が分かる身分証明書を必ずご提示ください。身分証明書をご提示いただけない場合は、一般料金となります。</li>
			<li>※小学生以上のお客様は1stショーに限り保護者同伴でご入場いただけますが、ブルーノート東京のみ、1stショーのボックス席限定（優待対象外）となります。</li>
			<li>※会員さま1名につき、お連れさま3名まで会員料金を適用いたします。1名につきお連れさまが4名以上となった場合、4名以降のミュージック・チャージは一般料金が適用されます。</li>
			<li>※会員特典はテーブル席（自由席）にのみ、適用されます。</li>
			<li>※指定席（ボックス席）へのアップグレードをご希望の方は、当日受付にてスタッフへお申し出ください。<br>当日、空席がある場合にのみ、シート・チャージ分の料金を加算してご利用いただけます。</li>
			<li>※ご飲食代とミュージック・チャージは終演後、お帰りの際にご精算ください。</li>
			<li>※ご予約は、ご希望の来店日の前日18時までにメールでお申込みください。</li>
			<li>※予約内容に変更がある場合も同様に、ご希望のご来店日前日の18時までにご連絡ください。</li>
			<li>※優待枠には限りがありますので、お早めのご予約をお勧めします。</li>
			<li>※公演当日にキャンセルされた場合は、ミュージック・チャージ全額をキャンセル料として頂戴いたします。また、オプションでディナー・コースなどお食事をご注文の場合は、2日前からキャンセル料を申し受けますのでご注意ください。</li>
			<li>※店内では許可のない撮影、録音は固くお断り申し上げます。</li>
			<li>※お申込み後、数日経っても店舗より折り返しのご連絡がない場合は、お手数ですがお電話にて直接店舗にお問い合わせください。</li>
	</ul>

    <h4 class="u-ttl__m">ご利用の流れ</h4>
    <div class="img data-img center mb2">
      <figure class="u-only__pc">
        <img
				data-src="../../lib/img/gift/bluenote/moushikomi.png"
				data-retina="../../lib/img/gift/bluenote/moushikomi@2x.png"
				alt="ご利用の流れ"
				style="max-width:731px;"
				class="u-img__max"
			>
		</figure>
      <figure class="u-only__sp">
        <img
				data-src="../../lib/img/gift/bluenote/moushikomi-sp.png"
				data-retina="../../lib/img/gift/bluenote/moushikomi-sp@2x.png"
				alt="ご利用の流れ"
				style="max-width:328px"
				class="u-img__max"
			>
		</figure>
    </div>
		<small class="u-small mb4">※1 「ブルーノート東京」：お電話、「コットンクラブ」：メール</small>

    <?php
    $useName = "ブルーノートグループ公演";
    $useNameAct = "予約";
		$useLinks = 'https://www.haseko.co.jp/branchera/form/form-bluenote/';
    include ($inc_path."/lib/inc/page/_gift/__u-est.php");

    ?>


    <h4 class="u-ttl__m">ブルーノートグループ</h4>
		<div class="group-info">
			<div class="group-info__row">
				<div class="group-info__item">
					<h5 class="group-info__ttl">
						<figure class="">
		        <img
						data-src="../../lib/img/gift/bluenote/bnt-logo.png"
						data-retina="../../lib/img/gift/bluenote/bnt-logo@2x.png"
						alt="ブルーノート東京ロゴ"
						style="max-width:120px;"
						class="u-img__max"
					>
				</figule><small class="group-info__ttl_s">ブルーノート東京</small>
					</h5>
					<div class="group-info__txt">
						<p>ニューヨークのブルーノートを本店に、港区・南青山で1988年から営業を続けるジャズ・クラブ／ライヴ・レストラン。ジャズを中心とした国内外のトップ・ミュージシャンによるステージを、手の届きそうな距離でお楽しみいただけます。</p>
						<div class="group-info__link">
							<p><a href="https://reserve.bluenote.co.jp/reserve/schedule/" class="u-icon" target="_blank">公演スケジュールはこちら</a></p>
							<p><a href="https://goo.gl/maps/TNscDaM5HNH2" class="u-icon" target="_blank">地図はこちら</a></p>
						</div>
					</div>
				</div>
				<hr>
			<!--	<div class="group-info__item">
					<h5 class="group-info__ttl">
						<figure class="">
			        <img
							data-src="../../lib/img/gift/bluenote/mby-logo.png"
							data-retina="../../lib/img/gift/bluenote/mby-logo@2x.png"
							alt="モーション・ブルー・ヨコハマロゴ"
							style="max-width:120px;"
							class="u-img__max"
						>
					</figule>
					<small class="group-info__ttl_s">モーション・ブルー・ヨコハマ</small>
					</h5>
					<div class="group-info__txt">
						<p>横浜赤レンガ倉庫にあるライヴレストラン。"TASTE, DRINK, FEEL THE MUSIC (音楽を味わいつくそう)" 音楽と食を通じて、ここでしか体験できない、特別なひと時をお届けします。</p>
						<div class="group-info__link">
							<p><a href="https://reserve.motionblue.co.jp/reserve/schedule/" class="u-icon" target="_blank">公演スケジュールはこちら</a></p>
							<p><a href="https://goo.gl/maps/N2kZqS4Tgur" class="u-icon" target="_blank">地図はこちら</a></p>
						</div>
					</div>
				</div>  -->
				<hr>
				<div class="group-info__item">
					<h5 class="group-info__ttl">
						<figur>
		        <img
						data-src="../../lib/img/gift/bluenote/cc-logo.png"
						data-retina="../../lib/img/gift/bluenote/cc-logo@2x.png"
						alt="コットンクラブロゴ"
						style="max-width:120px;"
						class="u-img__max"
					> 
				</figure><small class="group-info__ttl_s">コットンクラブ</small>
					</h5>
					<div class="group-info__txt">
						<p>東京・丸の内にあるライヴ・レストラン。海外の実力派を中心とするアーティストが繰り広げるエキサイティングなライヴ。大人のためのくつろぎにふさわしいエレガントな空間で、本格的なステージ、美食をご堪能ください。</p>
						<div class="group-info__link">
							<p><a href="http://www.cottonclubjapan.co.jp/jp/schedule/" class="u-icon" target="_blank">公演スケジュールはこちら</a></p>
							<p><a href="https://goo.gl/maps/ZK9Lj5LpQKB2" class="u-icon" target="_blank">地図はこちら</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>


  </section>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
