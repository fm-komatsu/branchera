<?php
//base
include ("../../function.php");
$content = get_id_data('4057');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
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
		$panAry[] = array("/event/" ,"イベント・キャンペーン");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<?php
		include ($inc_path."/lib/inc/page/_event/__main-header.php");
		?>

		<div class="main__wrapper">

			<section class="section wrapper">
				<div class="section__inner">
					<div class="center main-view">
						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/main-v.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/main-v.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/main-v-sp.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/main-v-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-haseko-museum/main-v.png"
							alt="長谷工マンションミュージアム見学 先行ご招待レポート メインビジュアル"
							class="u-img__max"
							style="max-width:739px">
						</picture>
					</div>
					<div class="section__padding mb4">
						<div class="event__overview">
							<dl class="event__overview_ls">
								<dt>開催日</dt>
								<dd>2018年12月15日（土）</dd>
							</dl>
							<dl class="event__overview_ls">
								<dt>開催場所</dt>
								<dd>長谷工マンションミュージアム</dd>
							</dl>
						</div>
						<p class="mb2">長谷工グループ創業80周年記念事業のひとつとして誕生した「長谷工マンションミュージアム」。2019年1月15日に一般公開が始まりましたが、ブランシエラクラブでは、先行ご招待イベントを開催しました。午前と午後の2回に分けて開催された見学会の模様をご紹介します。</p>

						<div class="report-haseko-museum__assist">
							<div class="report-haseko-museum__assist_flex assist-flex">
								<div class="assist-flex__item_l u-only__pc">
									<img
									src="<?php echo($img_url); ?>/event/report-haseko-museum/hmm_logo.png"
									srcset="<?php echo($img_url); ?>/event/report-haseko-museum/hmm_logo.png 1x,
									<?php echo($img_url); ?>/event/report-haseko-museum/hmm_logo@2x.png 2x"
									class="u-img__max"
									style="max-width:128px;"
									alt="長谷工マンションミュージアム　ロゴ"
									/>
								</div>
								<div class="assist-flex__item_r">
									<h5 class="u-ttl__s mb2">
										<img
									src="<?php echo($img_url); ?>/event/report-haseko-museum/hmm_logo-sp.png"
									srcset="<?php echo($img_url); ?>/event/report-haseko-museum/hmm_logo-sp.png 1x,
									<?php echo($img_url); ?>/event/report-haseko-museum/hmm_logo-sp@2x.png 2x"
									class="u-img__max u-only__sp mb1"
									style="max-width:207px;"
									alt="長谷工マンションミュージアム　ロゴ"
									/>
									<span>長谷工マンションミュージアム</span>
								</h5>
									<p class="mb1">長谷工グループ創業80周年記念事業のひとつとして、長谷工テクニカルセンター内に誕生。マンションのことが何でもわかるミュージアムです。</p>
									<a href="https://www.haseko.co.jp/hmm/" target="_blank" rel="nofollow">https://www.haseko.co.jp/hmm/</a>
								</div>
							</div>
						</div>
					</div>

					<div class="mb10 mb3_sp">

						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/00_floor-map_ttl.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/00_floor-map_ttl@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/floor_map_ttl-sp.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/floor_map_ttl-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-haseko-museum/00_floor-map_ttl.png"
							alt="マンションの誕生から未来を7つのZONEでご紹介｜<?php echo $pageTtl ?>"
							class="u-img__max"
							style="max-width:740px">
						</picture>
						<p>
							マンションが誕生してから、独自に進化を遂げた日本。そのマンションの歴史や構造の変化。最新技術と未来の構想。マンションに関するすべてを７つのZONEからご紹介します。
						</p>
						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/00_floor-map.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/00_floor-map@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/floor_map-sp.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/floor_map-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-haseko-museum/00_floor-map.png"
							alt="長谷工マンションミュージアム フロアマップ｜<?php echo $pageTtl ?>"
							class="u-img__max"
							style="max-width:740px">
						</picture>
					</div>

					<div>
						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/zone01.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/zone01@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/zone01-sp.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/zone01-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-haseko-museum/zone01.png"
							alt="ZONE1 エントランス｜<?php echo $pageTtl ?>"
							class="u-img__max"
							style="max-width:740px">
						</picture>
					</div>

					<div class="minus-mb7 minus-mb-sp4">
						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/zone02.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/zone02@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/zone02-sp.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/zone02-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-haseko-museum/zone02.png"
							alt="ZONE2 はじまりの物語｜<?php echo $pageTtl ?>"
							class="u-img__max"
							style="max-width:740px">
						</picture>
					</div>

					<div class="minus-mb0">
						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/zone03.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/zone03@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/zone03-sp.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/zone03-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-haseko-museum/zone03.png"
							alt="ZONE3 集合住宅の歩み｜<?php echo $pageTtl ?>"
							class="u-img__max"
							style="max-width:740px">
						</picture>
					</div>

					<div class="minus-mb1">
						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/zone04.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/zone04@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/zone04-sp.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/zone04-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-haseko-museum/zone04.png"
							alt="ZONE4 暮らしと住居の変遷｜<?php echo $pageTtl ?>"
							class="u-img__max"
							style="max-width:740px">
						</picture>
					</div>

					<div class="minus-mb1 mb2">
						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/zone05.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/zone05@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/zone05-sp.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/zone05-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-haseko-museum/zone05.png"
							alt="ZONE5 まるごとマンションづくり｜<?php echo $pageTtl ?>"
							class="u-img__max"
							style="max-width:740px">
						</picture>
					</div>

					<div class="mb2 mb0_sp">
						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/zone06.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/zone06@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/zone06-sp.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/zone06-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-haseko-museum/zone06.png"
							alt="ZONE6 再生と長寿化｜<?php echo $pageTtl ?>"
							class="u-img__max"
							style="max-width:740px">
						</picture>
					</div>

					<div class="mb2">
						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/zone07.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/zone07@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/zone07-sp.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/zone07-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-haseko-museum/zone07.png"
							alt="ZONE7 これからの住まい｜<?php echo $pageTtl ?>"
							class="u-img__max"
							style="max-width:740px">
						</picture>
					</div>



					<div class="section__padding">

						<h4 class="center mb2">
							<picture>
								<!--[if IE 9]><video style="display: none;"><![endif]-->
							  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/voice_ttl.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/voice_ttl@2x.png 2.0x">
							  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/voice_ttl-sp.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/voice_ttl-sp@2x.png 2.0x">
								<!--[if IE 9]></video><![endif]-->
							  <img src="<?php echo($img_url); ?>/event/report-haseko-museum/voice_ttl.png"
								alt="参加者のみなさまからの声｜<?php echo $pageTtl ?>"
								class="u-img__max"
								style="max-width:740px">
							</picture>
						</h4>

						<div class="event_comment">
							<div class="hmm-balloon hmm-balloon_maxborder mb woman40">
								<div class="hmm-inner-border light_blue">
									<div>
										<p>マンションミュージアム見学会に参加させていただき、ありがとうございました。マンションの過去の歴史に感心させられただけではなく、未来のマンションにも胸を踊らされてしまいました。長谷工さんには、これからも素敵な住まいを作り続けていただきたいです。</p>
									</div>
								</div>
							</div>
							<div class="hmm-balloon hmm-balloon_maxborder_r mb man60">
								<div class="hmm-inner-border_r yellow">
									<div>
										<p>高齢化の問題を解決する近居型住居の提案や、三世代が楽しく暮らせるマンションコミュニティーの提案コーナーを期間限定でも良いので設けてほしいです。</p>
									</div>
								</div>
							</div>
							<div class="hmm-balloon hmm-balloon_maxborder mb man50">
								<div class="hmm-inner-border green">
									<div>
										<p>「マンションの歴史＝長谷工の歴史」ぐらい、もっと存在を押しても良いのではと感じました。杭や設計施工に関わる部分は自慢の展示だと思います。</p>
									</div>
								</div>
							</div>
							<div class="minus__margin36">
								<a href="https://www.haseko.co.jp/hmm/" target="_blank" rel="nofollow">
									<picture>
										<!--[if IE 9]><video style="display: none;"><![endif]-->
										<source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/hmm_link.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/hmm_link@2x.png 2.0x">
										<source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-haseko-museum/hmm_link-sp.png 1.0x , <?php echo($img_url); ?>/event/report-haseko-museum/hmm_link-sp@2x.png 2.0x">
										<!--[if IE 9]></video><![endif]-->
										<img src="<?php echo($img_url); ?>/event/report-haseko-museum/hmm_link.png"
										alt="長谷工マンションミュージアム"
										class="u-img__max"
										style="max-width:740px">
									</picture>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="report-haseko-museum__assist">
					<p>ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。最新情報はメルマガでお知らせしますので、ぜひチェックしてください。</p>
				</div>

			</section>

		</div>
	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
