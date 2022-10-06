<?php
//base
include( "../../function.php" );
$content = get_id_data( '19006' );
$pageTtl = $content[ 'title' ];
$exceptcnt_id = $content['contents_id'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article alsok";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//release date
$release_year = "2022";
$release_month ="2";
$release_day ="";
?>
<main class="main magazine">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_alsok.php", "プロに聞く。暮らしの危機管理。" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
		<div class="main__wrapper">
			<section class="main__item">
				<h3 class="u-ttl__l">地震で何が起こる？被害軽減へ、今できる備え</h3>
				<p class="mb4">いつ起こるか分からない地震。被害を軽減するために大切なのは日頃からの備えや防災の知識です。マンションは構造上、地震に強い側面がある一方で、マンションだからこそ必要な備えもあります。警備のプロの目から見たマンションでの地震対策についてALSOKに話を伺いました。</p>
				<section class="mb5">
					<h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">在宅避難生活を想定し、備蓄品の定期的な確認を</span></h4>
					<div class="flex between">
						<div class="w50">
							<p>大地震が発生すると避難生活を余儀なくされます。耐震性に優れたマンションの場合、安全確認後に自宅で在宅避難をするのも選択肢の1つです。<br>その際に大切なのが備蓄品。消費期限や正常に使用できるかを定期的に確認しておくことが大切です。また、管理組合が非常用防災グッズを防災備蓄倉庫に備えているマンションも少なくありません。日頃から、<strong>備蓄品の種類や使用方法、どのような状況で配布されるのかなどを確認</strong>しておきましょう。</p>
						</div>
						<div class="w50">
							<img src="<?php echo $img_url; ?>/magazine/alsok/88/img_01@2x.png"
								alt="（イメージ画像）備蓄品の定期的な確認｜<?php echo $pageTtl?>" class="u-img__max center u-only__pc" style="max-width:265px" loading="lazy">
							<img src="<?php echo $img_url; ?>/magazine/alsok/88/img_01-sp@2x.png"
								alt="（イメージ画像）備蓄品の定期的な確認｜<?php echo $pageTtl?>" class="u-img__max center u-only__sp center" style="max-width:90%" loading="lazy">
						</div>
					</div>
					</figure>
				</section>
				<section class="mb5">
					<h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">マンション特有の揺れに備え安全に</span></h4>
					<div class="flex between">
						<div class="w50 mb3_sp">
							<p>マンションの地震に対する構造上、低層階で揺れが少ない場合でも、おおむね10階以上の高層階では揺れの影響が大きくなり数分続くことがあります。大きくゆっくりとした揺れによる家具や家電の転倒・落下を防ぐことが大切です。<br><strong>家具や家電はしっかり固定</strong>し、<strong>寝る場所の周りに危険なものを置かない</strong>など、いざという時の被害を軽減する工夫をしておきましょう。</p>
						</div>
						<div class="w50">
							<img src="<?php echo $img_url; ?>/magazine/alsok/88/img__02@2x.png"
							alt="（イメージ画像）家具や家電はしっかり固定、寝る場所の周りに危険なものを置かない｜<?php echo $pageTtl?>" class="u-img__max u-only__pc center" style="max-width:303px" loading="lazy">
							<img src="<?php echo $img_url; ?>/magazine/alsok/88/img__02-sp@2x.png"
							alt="（イメージ画像）家具や家電はしっかり固定、寝る場所の周りに危険なものを置かない｜<?php echo $pageTtl?>" class="u-img__max u-only__sp mb2_sp center" style="max-width:90%" loading="lazy">
						</div>
					</div>
				</section>
				<section>
					<h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">エレベーターに閉じ込められたら</span></h4>
					<div class="u-column">
						<div class="u-column__2 mb3_sp">
							<div class="u-column__item">
								<p class="mb2">最近のエレベーターには、地震を感知して最寄りの階で停止するプログラムが組まれています。<br><strong>乗車中に揺れを感じたら、停止した階ですぐに降りてください。</strong>万が一、降りられない場合は<strong>非常ボタンを長押し</strong>して、通話を開始し外部に状況を伝えましょう。</p>
								<p class="mb2">大規模災害の際は公共施設の安全確認や復旧が優先されるので、運転再開までに時間がかかる場合もあります。閉じ込められた場合に備えて、<strong>エレベーター内に簡易トイレや水、食品など非常用の備蓄品があると安心</strong>です。<br>また、地震直後にエレベーターが動いていても、緊急停止により閉じ込められるおそれがあります。すぐには乗らず、<strong>安全の確認が取れてから利用</strong>しましょう。</p>
							</div>
							<div class="u-column__item">
								<img src="<?php echo $img_url; ?>/magazine/alsok/88/img__03@2x.png"
							alt="（イメージ画像）エレベーター内に簡易トイレや水、食品など非常用の備蓄品があると安心｜<?php echo $pageTtl?>" class="u-img__max u-only__pc center" style="max-width:310px" loading="lazy">
							<img src="<?php echo $img_url; ?>/magazine/alsok/88/img__03-sp@2x.png"
							alt="（イメージ画像）エレベーター内に簡易トイレや水、食品など非常用の備蓄品があると安心｜<?php echo $pageTtl?>" class="u-img__max u-only__sp mb2_sp center" style="max-width:90%" loading="lazy">
							</div>
						</div>
					</div>
        </section>
				<section>
					<div class="u-assist mb1_sp">
						<div class="u-assist__inner u-font__palt">
							<div class="u-column">
								<div class="u-column__2 mb3_sp">
									<div class="u-column__item">
										<h5 class="u-ttl__s">エレベーター内の非常ボタンは「5秒以上の長押し」を！</h5>
										<p class="mb3">非常ボタンは「５秒以上の長押し」をしましょう。メンテナンス会社などとインターホンでの通話が開始され、警備会社にも警報が送られます。サービスご契約マンションの場合、ガードマンが現地で安全確認を行い、管理会社やエレベーター会社など適した窓口に連絡を行います。</p>
									  <small class="u-small">※非常ボタンへの対応はご契約内容により異なります。<br>※災害時は警報の数が大きく増えるため平時と同じ対応が難しく、時間がかかる場合もあります。</small>
									</div>
									<div class="u-column__item">
										<img src="<?php echo $img_url; ?>/magazine/alsok/88/img__04@2x.png"
										alt="（イメージ画像）エレベーター内の非常ボタンは「5秒以上の長押し」｜<?php echo $pageTtl?>" class="u-img__max u-only__pc center" style="max-width:215px" loading="lazy">
										<img src="<?php echo $img_url; ?>/magazine/alsok/88/img__04-sp@2x.png"
						    	  alt="（イメージ画像）エレベーター内の非常ボタンは「5秒以上の長押し」）｜<?php echo $pageTtl?>" class="u-img__max u-only__sp center" style="max-width:65%" loading="lazy">
									</div>
								</div>
							</div>
						</div>
					</div>
					<p><strong>大地震に遭遇する可能性はどなたにもあります。</strong>被害を軽減するためには日頃の備えを再確認し、有事の行動についてご家族で話し合っておくことが大切です。</p>
          <div class="mt6 mt2_sp mb8 mb3_sp">
            <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
          </div>
					<section>
						<h5>■関連記事</h5>
						<div class="u-photolist__row">
							<?php echo show_category_photoListalsok("alsok-bousai",$exceptcnt_id); ?>
						</div>
					</section>
				</section>
			</section>
		</div>
	</article>
</main>
<?php
$toindex_url = "/magazine/index_alsok.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
