<?php
//base
include ("../function.php");
$pageTtl = 'ブランシエラクラブとは？';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="page-about about-about";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">

		<?php include ($inc_path."/lib/inc/pan.php"); ?>

		<section class="catch-word">
			<div class="catch-word__row">
				<div class="catch-word__word">
					<h1 class="catch-word__ttl">暮らしを もっと楽しく より快適に</h1>
					<p class="catch-word__ex">長谷工グループ「ブランシエラクラブ」は<br>みなさまお一人おひとりが望む豊かな暮らしをかなえるためのお手伝いをしていく<br>長谷工グループ各社とお客さまをつなぐサービスです。</p>
				</div>
				<img
				data-src="<?php echo $img_url?>/about/about/catch-face.png"
				data-retina="<?php echo $img_url?>/about/about/catch-face@2x.png"
				alt="画像" width="66" height="70"
				class="catch-word__img"
				>
				<p class="catch-word__sub">住まいを作り続けてきた長谷工が、より快適な暮らしのご提案をするために「ブランシエラクラブ」は生まれました。<br>日々の生活に役立つ情報や、お得な情報、誰かを誘って足を運びたくなるイベントなどをみなさまと共有し、暮らしの“ちょっとうれしい”を実現していきます。</p>
			</div>
		</section>

		<section class="main__item about-top">
			<img
			data-src="<?php echo $img_url?>/about/about/img-main.png"
			data-retina="<?php echo $img_url?>/about/about/img-main@2x.png"
			alt="お得な会員特典や「住まいレージ」を利用しよう！"
			class="about-top__img u-img__max"
			style="max-width:750px"
			>
			<p class="about-top__ttl">あなたの暮らしを快適に楽しくするための<br class="u-only__pc">コンテンツやサービスを提供していくブランシエラクラブ。<br>登録無料、どなたでもご登録いただける長谷工IDに登録すると、<br class="u-only__pc">ブランシエラクラブのさまざまなサービスをご利用いただけます。</p>

		</section>

		<section class="main__item about-assist">
			<div class="about-assist__row">
				<h2 class="about-assist__ttl top">
					<img
					data-src="<?php echo $img_url?>/about/about/img-ttl02.png"
					data-retina="<?php echo $img_url?>/about/about/img-ttl02@2x.png"
					alt="オトク1 ためて、つかえるポイントサービス 住まいレージ"
					style="max-width:443px;"
					class="u-img__max">
				</h2>
				<div class="about-assist__inner">
					<h3 class="about-assist__ttl">
						<img
						src="<?php echo $img_url?>/about/about/img-sub-ttl01.png"
						alt="ドンドンたまる"
						style="max-width:293px;"
						class="u-img__max"
						>
					</h3>
					<div class="about-assist__img top">
						<img
						data-src="<?php echo $img_url?>/about/about/img03-sp.png"
						data-retina="<?php echo $img_url?>/about/about/img03-sp@2x.png"
						alt="登録するだけでポイントゲット"
						style="max-width:328px;"
						class="u-img__max"
						>
						<img
						data-src="<?php echo $img_url?>/about/about/img03-sp2.png"
						data-retina="<?php echo $img_url?>/about/about/img03-sp2@2x.png"
						alt="登録するだけでポイントゲット"
						style="max-width:356px;"
						class="u-img__max"
						>
					</div>
				</div>
				<div class="about-assist__inner">
					<h3 class="about-assist__ttl">
						<img
						data-src="<?php echo $img_url?>/about/about/img-sub-ttl02.png"
						data-retina="<?php echo $img_url?>/about/about/img-sub-ttl02@2x.png"
						alt="イロイロつかえる"
						style="max-width:347px;"
						class="u-img__max"
						>
					</h3>
					<div class="about-assist__img bottom">
						<img
						data-src="<?php echo $img_url?>/about/about/img04-sp.png"
						data-retina="<?php echo $img_url?>/about/about/img04-sp@2x.png"
						alt="交換商品はゾクゾク追加中！"
						style="max-width:328px;"
						class="u-img__max"
						>
						<img
						data-src="<?php echo $img_url?>/about/about/img04-sp2.png"
						data-retina="<?php echo $img_url?>/about/about/img04-sp2@2x.png"
						alt="交換商品はゾクゾク追加中！"
						style="max-width:356px;"
						class="u-img__max"
						>
					</div>
				</div>
			</div>
		</section>

		<section class="main__item aboutMid">
			<div class="center mb4">
				<img
				data-src="<?php echo $img_url?>/about/about/img-ttl01.png"
				data-retina="<?php echo $img_url?>/about/about/img-ttl01@2x.png"
				alt="オトク2　長谷工グループのサービスがオトクに！会員さま特典"
				style="max-width:482px;"
				class="u-img__max">
			</div>
			<div class="u-only__pc center">
				<img
				data-src="<?php echo $img_url?>/about/about/img01.png"
				data-retina="<?php echo $img_url?>/about/about/img01@2x.png"
				alt="例えばこんなときもグッとオトクに"
				style="max-width:721px;"
				class="u-img__max"
				>
			</div>
			<div class="u-only__sp center mb1">
				<img
				src="<?php echo $img_url?>/about/about/img01-sp.png"
				alt="例えばこんなときもグッとオトクに"
				style="max-width:340px;"
				class="u-img__max"
				>
			</div>
			<div class="u-only__sp center">
				<img
				data-src="<?php echo $img_url?>/about/about/img01-sp2.png"
				data-retina="<?php echo $img_url?>/about/about/img01-sp2@2x.png"
				alt="例えばこんなときもグッとオトクに"
				style="max-width:370px;"
				class="u-img__max"
			  >
			</div>
		</section>

		<section class="main__item aboutMid wrapper">
			<div class="center mb4">
				<img
				data-src="<?php echo $img_url?>/about/about/img-ttl03.png"
				data-retina="<?php echo $img_url?>/about/about/img-ttl03@2x.png"
				alt="オトク3 カルチャー教室やセミナーなど！キャンペーン・イベント"
				style="max-width:557px;"
				class="u-img__max">
			</div>
			<div class="flex between">
				<figure class="w50">
					<img
					data-src="<?php echo $img_url?>/about/about/img05.png"
					data-retina="<?php echo $img_url?>/about/about/img05@2x.png"
					alt="image"
					style="max-width:363px;"
					class="u-img__max"
					>
				</figure>
				<div class="w50">
					<p class="aboutTxt">健康づくりや趣味を楽しむ教室など<br class="u-only__pc">暮らしをもっと快適にする<br class="u-only__pc">イベントやキャンペーンを実施いたします！</p>
					<p class="aboutTxt">詳しい情報はメルマガをご確認ください。</p>
				</div>
			</div>
		</section>

		<section class="main__item aboutMid wrapper mb1">
			<div class="center mb4">
				<img
				data-src="<?php echo $img_url?>/about/about/img-ttl04.png"
				data-retina="<?php echo $img_url?>/about/about/img-ttl04@2x.png"
				alt="オトク4 長谷工グループの情報や暮らしに役立つ情報をお届け！ブランシエラマガジン"
				style="max-width:612px;"
				class="u-img__max">
			</div>
			<div class="flex between">
				<figure class="w50">
					<img
					data-src="<?php echo $img_url?>/about/about/img07.png"
					data-retina="<?php echo $img_url?>/about/about/img07@2x.png"
					alt="image"
					style="max-width:346px;"
					class="u-img__max"
					 >
				</figure>
				<div class="w50">
					<p class="aboutTxt">長谷工の技術やサービスをご紹介したり、<br class="u-only__pc">住まいのメンテナンス方法を<br class="u-only__pc">ご紹介するコンテンツなど、<br class="u-only__pc">役立つ情報が満載！</p>
				</div>
			</div>
		</section>

		<section class="main__item mb8 mt5">
			<div class="entryBtn mb6">
				<a href="<?php echo $myentry_url; ?>" target="_blank" class="u-btn_point"><span>長谷工IDのご登録はこちら</span></a>
			</div>
		</section>

		<section class="main__item aboutUnder">
			<div class="center mb2 mt2 flowTtl">
				<img src="<?php echo $img_url?>/about/about/img-ttl05.png"
				alt="長谷工IDご登録の流れ"
				style="max-width:415px;"
				class="u-img__max">
			</div>
			<div class="flowArea wrapper center u-only__pc">
				<div class="flow flex">
				<img src="<?php echo $img_url ?>/about/about/img-flow01.png" alt="STEP1" class="u-img__max" style="max-width:376px;" />
				<img src="<?php echo $img_url ?>/about/about/img-flow01-2.png" alt="STEP1" class="u-img__max" style="max-width:264px;" />
			</div>
			<figure class="center w15_sp">
				<img src="<?php echo $img_url ?>/about/about/img-flow-icon.png" class="u-img__max" style="max-width:39px;"/>
			</figure>
			<div class="flow flex">
				<img src="<?php echo $img_url ?>/about/about/img-flow02.png" alt="STEP2" class="u-img__max" style="max-width:376px;"/>
				<img src="<?php echo $img_url ?>/about/about/img-flow02-2.png" alt="STEP2" class="u-img__max" style="max-width:264px;"/>
			</div>
			<figure class="center w15_sp">
				<img src="<?php echo $img_url ?>/about/about/img-flow-icon.png" class="u-img__max" style="max-width:39px;"/>
			</figure>
			<div class="flow flex">
				<img src="<?php echo $img_url ?>/about/about/img-flow03.png" alt="STEP3" class="u-img__max" style="max-width:376px;"/>
				<img src="<?php echo $img_url ?>/about/about/img-flow03-2.png" alt="STEP3" class="u-img__max" style="max-width:264px;"/>
			</div>
			<p><img src="<?php echo $img_url ?>/about/about/img-flow05.png" alt="" class="u-img__max" style="max-width:539px;"/></p>
			</div>

			<div class="flowArea wrapper center u-only__sp">
				<div class="flow flex"><img src="<?php echo $img_url ?>/about/about/img-flow01-sp@2x.png" alt="STEP1"  class="u-img__max" style="max-width:1278px;" /></div>
				<figure class="center w15_sp"><img src="<?php echo $img_url ?>/about/about/img-flow-icon.png"  class="u-img__max" style="max-width:39px;" /></figure>
				<div class="flow"><img src="<?php echo $img_url ?>/about/about/img-flow02-sp@2x.png" alt="STEP2" class="u-img__max" style="max-width:1278px;"  /></div>
				<figure class="center w15_sp"><img src="<?php echo $img_url ?>/about/about/img-flow-icon.png" class="u-img__max" style="max-width:39px;"  /></figure>
				<div class="flow"><img src="<?php echo $img_url ?>/about/about/img-flow03-sp@2x.png" alt="STEP3" class="u-img__max" style="max-width1278px:;"  /></div>
				<p><img src="<?php echo $img_url ?>/about/about/img-flow05.png" alt="新規入会で1,000スマイルプレゼント！" class="u-img__max" style="max-width:539px;" /></p>
			</div>
		</section>

		<section class="maine__item mb4">
			<div class="entryBtn"><a href="<?php echo $myentry_url ?>" target="_blank" class="u-btn_point"><span>長谷工IDのご登録はこちら</span></a></div>
		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php /* include ($inc_path."/lib/inc/branchat-banner.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
