<?php
//base
include ("../function.php");
$pageTtl = '暮らしのノウハウBOOK';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "長谷工グループでは、暮らしをサポートするさまざまなサービスをご提供しています。その中から、暮らしのお悩みゴトを解決するようなノウハウをご紹介！";
$metaThum = $img_url."/thum/knowhow_index.jpg";

//bodyClass
$body_class ="page-list knowhowIndex";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/magazine/" ,"ブランシエラマガジン");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<header class="main__category-title u-category-title">
			<div class="u-category-title__row">
				<figure class="u-category-title__thum">
					<img src="<?php echo $metaThum; ?>" alt="<?php echo $pageTtl; ?>の画像">
				</figure>
				<div class="u-category-title__ex">
					<h2 class="u-category-title__ttl"><?php echo $pageTtl; ?></h2>
					<p class="u-category-title__desc"><?php echo $metaDesc; ?></p>
				</div>
			</div>
		</header>

		<section class="main__item">

			<div class="mainteArea">
				<h3 class="knowhowH3Index"><img src="<?php echo $img_url ?>/magazine/knowhow/index/h3-01.png" alt="お掃除・メンテナンス"></h3>
				<ul>
					<li>
						<dl class="flex between">
							<dt>001</dt>
							<dd><a href="<?php echo $base_url ?>/magazine/article/knowhow-m01.php">酸性・弱アルカリ性・中性、洗剤の種類と違いとは？</a></dd>
						</dl>
					</li>
					<li>
						<dl class="flex between">
							<dt>002</dt>
							<dd>ゴミの臭いを抑える方法とは？（準備中）</dd>
						</dl>
					</li>
					<li>
						<dl class="flex between">
							<dt>003</dt>
							<dd>鍵（ディンプルキー）がうまく回らない時の対処方法とは？（準備中）</dd>
						</dl>
					</li>
				</ul>
			</div><!-- //mainteArea -->
		</section>

	</article>
</main>

<?php
$this_page_article = false;
//$toindex_url = "/magazine/index_wakuwaku.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
