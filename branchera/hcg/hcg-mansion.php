<?php
//base
include ("../function.php");
$pageTtl = '長谷工グループのマンション情報';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="page-list hcg-manstion";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/hcg/" ,"長谷工インフォメーション");
		include ($inc_path."/lib/inc/pan.php");
		?>

		<nav class="main__snav snav">
			<?php include ($inc_path."/lib/inc/page/_hcg/__snav.php"); ?>
		</nav>

		<section class="main__item">
			<h2 class="u-ttl__l">分譲マンションブランド</h2>
			<div class="brand-list">
				<div class="brand-list__img">
					<div class="brand-list__logo">
						<img
						data-src="../lib/img/hcg/logo-branchera.png"
						data-rerina="../lib/img/hcg/logo-branchera@2x.png"
						alt="ブランシエラ"
						width="265"
						height="94"
						>
					</div>
					<div class="brand-list__cover"></div>
					<div class="brand-list__bg">
						<img
						data-src="../lib/img/hcg/img-branchera.png"
						data-retina="../lib/img/hcg/img-branchera@2x.png"
						alt="ブランシエラ"
						width="790"
						height="400"
						>
					</div>
				</div>
				<div class="brand-list__ex">
					<h3 class="brand-list__ttl u-ttl__s">「ブランシエラ」</h3>
					<p class="brand-list__text">“ブランシエラ”とは、長谷工が贈る<b>先進・先端</b>という意味のマンションブランドです。<br>より新しい技術で、より良いマンションを。<br>住まう方がいつまでも心地よい日々を重ねられる安全・安心・快適な住まいづくりを目指しています。</p>
					<a href="https://www.branchera.com/" target="_blank"  rel="nofollow "class="brand-list__btn u-btn_point" data-ga-click="hcg-page__hfd">物件一覧</a>
				</div>
			</div>

			<div class="brand-list">
				<div class="brand-list__img">
					<div class="brand-list__logo">
						<img
						data-src="../lib/img/hcg/logo-renai.png"
						data-rerina="../lib/img/hcg/logo-renai@2x.png"
						alt="ルネ"
						width="225"
						height="72"
						>
					</div>
					<div class="brand-list__cover"></div>
					<div class="brand-list__bg">
						<img
						data-src="../lib/img/hcg/img-renai.png"
						data-retina="../lib/img/hcg/img-renai@2x.png"
						alt="ルネ"
						width="790"
						height="400"
						>
					</div>
				</div>
				<div class="brand-list__ex">
					<h3 class="brand-list__ttl u-ttl__s">「ルネ」</h3>
					<p class="brand-list__text">”ルネ”シリーズの名は、人間性の尊重と新文化の創造を目指したルネサンスに由来します。<br><br>「カスタマーファースト」と「クラフトマンシップ」の２つを理念に、１つ１つオリジナルで創りあげる、こだわりがつまった住まい。<br>それが、総合地所の「ルネシリーズ」。</p>
					<a href="http://www.sgr-sumai.jp/" target="_blank" rel="nofollow" class="brand-list__btn u-btn_point" data-ga-click="hcg-page__sgr">物件一覧</a>
				</div>
			</div>

		</section>


		<section class="main__item">
			<h2 class="u-ttl__l">賃貸マンションブランド</h2>
			<div class="brand-list">
				<div class="brand-list__img">
					<div class="brand-list__logo">
						<img
						data-src="../lib/img/hcg/logo-bransiesta.png"
						data-rerina="../lib/img/hcg/logo-bransiesta@2x.png"
						alt="ブランシエスタ"
						width="249"
						height="34"
						>
					</div>
					<div class="brand-list__cover"></div>
					<div class="brand-list__bg">
						<img
						data-src="../lib/img/hcg/img-bransiesta.png"
						data-retina="../lib/img/hcg/img-bransiesta@2x.png"
						alt="ブランシエスタ"
						width="790"
						height="400"
						>
					</div>
				</div>
				<div class="brand-list__ex">
					<h3 class="brand-list__ttl u-ttl__s">「ブランシエスタ」</h3>
					<p class="brand-list__text">分譲マンションのクオリティと、賃貸だからこそ得られる自由度。その二つの価値を内包する魅力的なハイグレードレジデンスをご紹介。</p>
					<a href="http://www.haseko.co.jp/bransiesta/" target="_blank" rel="nofollow" class="brand-list__btn u-btn_point" data-ga-click="hcg-page__bransiesta">ブランシエスタ物件一覧</a>
				</div>
			</div>

		</section>

		<section class="main__item">
			<h2 class="u-ttl__l">海外のサービスアパートメント</h2>
			<div class="brand-list">
				<div class="brand-list__img">
					<div class="brand-list__logo">
						<img
						data-src="../lib/img/hcg/logo-authentic.png"
						data-rerina="../lib/img/hcg/logo-authentic@2x.png"
						alt="THE AUTHENTIC"
						width="198"
						height="72"
						>
					</div>
					<div class="brand-list__cover"></div>
					<div class="brand-list__bg">
						<img
						data-src="../lib/img/hcg/img-authentic.png"
						data-retina="../lib/img/hcg/img-authentic@2x.png"
						alt="THE AUTHENTIC"
						width="790"
						height="400"
						>
					</div>
				</div>
				<div class="brand-list__ex">
					<h3 class="brand-list__ttl u-ttl__s">「THE AUTHENTIC」</h3>
					<p class="brand-list__text">ハノイ在住の邦人が「安心して生活できる空間」「日本と変わらない生活が送れる住宅」をコンセプトにした安全・安心・快適なサービスアパートメント。</p>
					<a href="http://www.haseko.co.jp/vietnam/authentic/" target="_blank" rel="nofollow" class="brand-list__btn u-btn_point" data-ga-click="hcg-page__authentic">THE AUTHENTICを見る</a>
				</div>
			</div>
		</section>

		<section class="main__item">

			<h2 class="u-ttl__l">住まい情報</h2>
			<div class="brand-list-link">
				<a href="https://www.haseko-sumai.com/" target="_blank" rel="nofollow" class="brand-list-link__a" data-ga-click="hcg-page__hub">
					<div class="brand-list-link__img">
						<img
						data-src="../lib/img/hcg/list-img__hub.png"
						data-retina="../lib/img/hcg/list-img__hub@2x.png"
						alt="長谷工の住まい"
						class="u-img__max">
					</div>
					<div class="brand-list-link__text">
						<h5 class="brand-list-link__ttl">長谷工の新築分譲マンション</h5>
						<p class="brand-list-link__ex u-icon__nofollow">「長谷工の住まい」長谷工アーベストの新築マンション検索サイト</p>
					</div>
				</a>
			</div>

			<div class="brand-list-link">
				<a href="http://www.haseko-chukai.com/" target="_blank" rel="nofollow" class="brand-list-link__a" data-ga-click="hcg-page__chukai">
					<div class="brand-list-link__img">
						<img
						data-src="../lib/img/hcg/list-img__chukai.png"
						data-retina="../lib/img/hcg/list-img__chukai@2x.png"
						alt="長谷工の仲介"
						class="u-img__max">
					</div>
					<div class="brand-list-link__text">
						<h5 class="brand-list-link__ttl">長谷工の仲介</h5>
						<p class="brand-list-link__ex u-icon__nofollow">中古マンション、戸建て、土地、投資物件の他、リノベーションマンションの販売情報も掲載しています。<br>その他、マンション名を入れるだけで相場価格がわかる「マンションスピード査定」などお住まいの売却に役立つコンテンツも揃えています。</p>
					</div>
				</a>
			</div>

			<div class="brand-list-link">
				<a href="https://www.inet-haseko.com/" target="_blank" rel="nofollow" class="brand-list-link__a" data-ga-click="hcg-page__inet">
					<div class="brand-list-link__img">
						<img
						data-src="../lib/img/hcg/list-img__inet.png"
						data-retina="../lib/img/hcg/list-img__inet@2x.png"
						alt="長谷工アイネット"
						class="u-img__max">
					</div>
					<div class="brand-list-link__text">
						<h5 class="brand-list-link__ttl">長谷工の賃貸</h5>
						<p class="brand-list-link__ex u-icon__nofollow">首都圏（東京/神奈川/千葉/埼玉）、関西圏（大阪/兵庫/京都/奈良）の賃貸マンションの賃貸情報満載。</p>
					</div>
				</a>
			</div>

		</section>

		<nav class="main__snav snav__bottom">
			<?php include ($inc_path."/lib/inc/page/_hcg/__snav.php"); ?>
		</nav>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
