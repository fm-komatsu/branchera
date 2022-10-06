<?php
//base
include ("../function.php");
$pageTtl = '優待サービス';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "サービスをいっぱいご利用いただくために、ステキな特典をご用意いたしました。";
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
		//$panAry[] = array("/magazine/" ,"ブランシエラマガジン");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<header class="main__header main-header">
			<div class="main-header__row">
				<figure class="main-header__icon">
					<img
					data-src="../lib/img/common/body/category-icon__gift.png"
					data-retina="../lib/img/common/body/category-icon__gift@2x.png"
					alt="<?php echo $pageTtl; ?>の画像"
					width="75"
					height="81">
				</figure>
				<div class="main-header__ex">
					<h2 class="main-header__ttl"><?php echo $pageTtl; ?></h2>
					<p class="main-header__desc"><?php echo $metaDesc; ?></p>
					<div class="main-header__tags u-tags">
						<?php echo show_category_tags("gift"); ?>
					</div>
				</div>
			</div>
		</header>

		<section class="main__item">
			<h2 class="u-ttl__l">優待サービス一覧</h2>
			<div class="gift-cluboff">
				<div class="u-photolist__row">
					<article class="u-photolist__item cluboff">
						<label class="u-photolist__wrap cluboff">
								<a href="<?php echo($base_url) ?>/gift/article/cluboff.php" class="u-photolist__inner cluboff">
										<div class="u-photolist__img_cluboff">
											<img alt="ClubOff by HASEKO"
												data-src="<?php echo($img_url) ?>/thum/gift-cluboff.jpg"
												data-retina="<?php echo($img_url) ?>/thum/gift-cluboff@2x.jpg"
											>
										</div>
										<div class="u-photolist__txtbox">
											<h3 class="u-photolist__ttl cluboff">ClubOff by HASEKO</h3>
											<p class="u-photolist__ex cluboff">国内外の宿泊施設、グルメ、レジャー、ショッピングなど、20万カ所以上の施設を割引価格でご利用いただける会員限定優待サービスです。</p>
											<div class="clubofflex">
												<div class="clubofflex__row">
													<div class="clubofflex__item">
														<div class="clubofflex__inner">
															<span class="clubofflex__ex">【グルメ】最大</span>50％OFF
														</div>
													</div>
													<div class="clubofflex__item">
														<div class="clubofflex__inner">
															<span class="clubofflex__ex">【映画・カラオケ】</span>優待価格
														</div>
													</div>
												</div>
												<div class="clubofflex__row">
													<div class="clubofflex__item">
														<div class="clubofflex__inner">
															<span class="clubofflex__ex">【レジャー】最大</span>75％OFF
														</div>
													</div>
													<div class="clubofflex__item">
														<div class="clubofflex__inner">
															<span class="clubofflex__ex">【宿泊】最大</span>90％OFF
														</div>
													</div>
												</div>
										</div>
										<div class="u-photolist__icon attention"><span>注目</span></div>
									</div>
								</a>
								<div class="u-photolist__tags u-tags">
										<div class="u-tags__row">
												<a href="/search/?tag=抽選賞品" class="u-tags__item">抽選賞品<span class="u-tags__num">1</span></a>
												<a href="/search/?tag=住まいレージ" class="u-tags__item">住まいレージ<span class="u-tags__num">24</span></a>
										</div>
								</div>
						</label>
					</article>
				</div>
			</div>
			<div class="u-photolist__row">
				<?php
				echo show_category_photoList("gift");
				?>
			</div>
		</section>

		<!--section class="section wrapper">
		<?php #$contents_id=9002;include ($inc_path."/inc/u-pickup.php") ?>
	</section-->

	<section class="main__wrapper" id="merit-past">
		<?php include ($inc_path."/lib/inc/page/_gift/__past.php") ?>
	</section>

</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
