<?php
//base
include ("../../function.php");
$pageTtl = '朝の情報番組の取材を受けました。';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "朝の情報番組にて、ブランシエラ板橋西台がクローズアップされました。（2014年11月28日放送）";
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="page-news";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/news/" ,"ニュース一覧");
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

		<div class="main__wrapper">

		<section class="main__item">

			<h2 class="u-ttl__l"><span>2014年11月28日</span><br>朝の情報番組の取材を受けました。</h2>

			<p class="u-assist">朝の情報番組にて、ブランシエラ板橋西台がクローズアップされました。（2014年11月28日放送）</p>
			<p>住宅ジャーナリストより<stront>“新しい設計手法のマンション”</stront>として「ブランシエラ板橋西台」が紹介されました。</p>
			<p>これを受けて、朝の情報番組が「ブランシエラ板橋西台」徹底調査！！<br>その、最新・驚きの設計手法とは・・・</p>
			<p class="mb2">BIMとは何か、そして、「長谷工版BIM」とはどのようなものなのか。<br>詳しくは<a href="<?php echo $base_url ?>/magazine/article/bim.php" class="u-icon">ブランシエラマガジン「3D設計技術"長谷工版BIM(ビム)"」</a>にてご確認ください。</p>
		</section>
		<section class="main__item">

			<h5 class="u-ttl__m">撮影場所となったブランシエラ板橋西台モデルルーム入り口とエントランス</h5>
			<ul class="u-column__2">
				<li class="u-column__item">
					<img src="../../lib/img/news/2014/1121_02.jpg" class="u-img__max">
				</li>
				<li class="u-column__item">
					<img src="../../lib/img/news/2014/1121_03.jpg"  class="u-img__max">
				</li>
			</ul>

			<h5 class="u-ttl__m">撮影風景とBIMのコントローラー</h5>
			<ul class="u-column__2">
				<li class="u-column__item">
					<img src="../../lib/img/news/2014/1121_01.jpg"  class="u-img__max">
				</li>
				<li class="u-column__item">
					<img src="../../lib/img/news/2014/1121_04.jpg" class="u-img__max">
				</li>
			</ul>
			<small class="u-small">※ブランシエラ板橋西台は完売いたしました。現在モデルルームはございません。</small>

		</div>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
