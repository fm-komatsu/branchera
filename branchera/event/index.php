<?php
//base
include("../function.php");
$pageTtl = 'イベント・キャンペーン';

//meta
$metaTtl = $pageTtl . '-' . siteName();
$metaDesc = "普段は体験できないイベントに参加してみませんか？ときにはプレゼントもあるかも！？";
$metaThum = $img_url . "/thum/home@2x.png";

//bodyClass
$body_class = "page-list";

//キャンペーンの有無チェック
$campCheck = 1;

//イベントの有無チェック
$eventCheck = 1;

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row">
		<?php
		//$panAry[] = array("/_temp" ,"パンくず名");
		include($inc_path . "/lib/inc/pan.php");
		?>
		<header class="main__header main-header">
			<div class="main-header__row">
				<figure class="main-header__icon">
					<img data-src="../lib/img/common/body/category-icon__event.png" data-retina="../lib/img/common/body/category-icon__event@2x.png" alt="<?php echo $pageTtl; ?>の画像" width="139" height="82">
				</figure>
				<div class="main-header__ex">
					<h2 class="main-header__ttl"><?php echo $pageTtl; ?></h2>
					<p class="main-header__desc"><?php echo $metaDesc; ?></p>
					<div class="main-header__tags u-tags">
						<?php echo show_category_tags("event,mansion,seminar"); ?>
					</div>
				</div>
			</div>
		</header>

		<section class="main__item">
			<h2 class="u-ttl__l first-of-type">イベント情報</h2>
			<?php if (isset($eventCheck) && $eventCheck) { ?>
				<div class="u-photolist__row">
					<?php
					echo show_event_photoList_tags("event", "イベント", "", "");
					?>
				</div>
			<?php } else { ?>
				<div class="u-assist mb3">
					<p class="center u-text__align_l">現在、ご案内できるイベントはありません。</p>
				</div>
			<?php } ?>
			</div>
		</section>

		<section class="main__item smile-lottery">
			<h2 class="u-ttl__l">キャンペーン情報</h2>
			<?php if (isset($campCheck) && $campCheck) { ?>
				<div class="u-photolist__row">
					<?php
					echo show_category_photoList("campaign");
					?>
				</div>
			<?php } else { ?>
				<div class="u-assist mb3">
					<p class="center u-text__align_l">現在、ご案内できるキャンペーンはありません。</p>
				</div>
			<?php } ?>
			</div>
		</section>

		<section class="main__item">
			<h2 class="u-ttl__l first-of-type" id="event-report">イベントレポート</h2>
			<div class="u-photolist__row">
				<?php
				echo show_category_photoOne("event", 4999);
				?>
				<?php
				echo show_eventrev_photoList_tags("event", "イベント", "レポート", "");
				?>
			</div>
		</section>



		<section class="main__wrapper" id="merit-past">
			<?php include($inc_path . "/lib/inc/page/_event/__past.php") ?>
		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
