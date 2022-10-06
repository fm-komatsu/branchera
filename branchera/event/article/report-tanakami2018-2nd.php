<?php
//base
include ("../../function.php");
$content = get_id_data('4044');
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
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/main-vis.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-2nd/main-vis@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/main-vis-sp.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-2nd/main-vis@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/main-vis.png"
							alt="信楽焼き陶芸体験イベント動画・レポート メインビジュアル"
							class="u-img__max"
							style="max-width:711px">
						</picture>
					</div>
					<div class="section__padding mb4">
						<div class="event__overview">
							<dl class="event__overview_ls">
								<dt>開催日</dt>
								<dd>2018年6月9日（土）</dd>
							</dl>
							<dl class="event__overview_ls">
								<dt>開催場所</dt>
								<dd>長谷工あんしんデリ 大津農場・信楽陶苑たぬき村</dd>
							</dl>
						</div>
						<p class="mb2">昨年も大好評だった田植え体験が、今年はさらにパワーアップして、信楽焼き陶芸体験をプラス！みなさまと過ごした楽しいイベントの様子を、前編・後編に分けて、動画も交えてご紹介してまいります。</p>

						<div class="u-assist">
							<div class="flex between">
								<div class="w25 mb2" style="align-self : center">
									<img
									src="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/tanuki-mura-logo.png"
									srcset="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/tanuki-mura-logo.png 1x,
									<?php echo($img_url); ?>/event/report-tanakami2018-2nd/tanuki-mura-logo@2x.png 2x"
									class="u-img__max tanakami-logo"
									style="max-width:112px; max-height: 31px;"
									alt="信楽陶苑たぬき村　ロゴ"
									/>
								</div>
								<div class="w75">
									<h5 class="u-ttl__s">信楽陶苑たぬき村</h5>
									<p>1万匹の狸のお出迎えが圧巻の「信楽陶苑たぬき村」。<br>陶芸体験は、手びねりや絵つけを楽しむことができます。お食事処や、信楽焼きやご当地のお土産が購入できるショップもあり、家族みんなで楽しめるスポットです。</p>
								</div>
							</div>
						</div>
					</div>

					<div class="center movie-section mb2">
						<div class="movie-absolute">
							<div class="tanakami__movie tanakami-movie2nd tanakami-innner">

								<div class="tanakami-movie__video">
									<div class="tanakami-movie__video_base">
										<iframe class="tanakami-movie__video_emb" src="https://www.youtube.com/embed/voMrE-CnXLc?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div>

						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-01.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-01@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-01-sp.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-01-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-01.png"
							alt="【到着！】専用バスに乗って、次の目的地「信楽陶苑たぬき村」へ。｜信楽焼き陶芸体験イベント動画・レポート"
							class="u-img__max"
							style="max-width:739px">
						</picture>
					</div>

					<div class="minus__margin28">
						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-02.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-02@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-02-sp.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-02-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-02.png"
							alt="【昼食タイム！】田植え作業でお腹ペコペコ！まずは食事処でランチタイム｜信楽焼き陶芸体験イベント動画・レポート"
							class="u-img__max"
							style="max-width:739px">
						</picture>
					</div>

					<div class="mb3">
						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-03.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-03@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-03-sp.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-03-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-03.png"
							alt="【陶芸体験！】午後のメインイベント、陶芸体験へ！｜信楽焼き陶芸体験イベント動画・レポート"
							class="u-img__max"
							style="max-width:739px">
						</picture>
					</div>

					<div class="section__padding">
						<h4 class="center mb2">
							<picture>
								<!--[if IE 9]><video style="display: none;"><![endif]-->
							  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-voice.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-voice@2x.png 2.0x">
							  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-voice-sp.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-voice-sp@2x.png 2.0x">
								<!--[if IE 9]></video><![endif]-->
							  <img src="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-voice.png"
								alt="参加者のみなさまからの声｜「たなかみ米」田植え体験イベント動画・レポート"
								class="u-img__max"
								style="max-width:263px">
							</picture>
						</h4>

						<div class="event_comment">
							<div class="balloon balloon_maxborder mb family">
								<div class="inner-border tanakami">
									<div>
										<p>子どもは絵付け、親は手びねりを体験しました。子ども以上に親が真剣になり、親子で楽しく体験できました。作品が届くまでの時間も楽しみが続いているので、実際に手にするのが待ち遠しいです！</p>
									</div>
								</div>
							</div>
							<div class="balloon balloon_maxborder mb parent">
								<div class="inner-border tanakami">
									<div>
										<p>思った以上に難しく、講師の方に教えてもらいながら、なんとか完成させることができました。子どもは絵付けで、自分好みの茶碗を作れたようで満足していました。あとは焼き入れ後の到着を楽しみにしています。</p>
									</div>
								</div>
							</div>
							<div class="balloon balloon_maxborder mb family">
								<div class="inner-border tanakami">
									<div>
										<p>初めての陶芸体験で緊張しました。ビデオを見ていると自分にもできそうと思いましたが、見るとやるとでは大違い！子どもの頃にもっと粘土遊びをしておけばよかったなと思いつつ作業していました。どんな仕上がりになるか、不安と期待が入り混じっています。楽しませていただき、ありがとうございました。</p>
									</div>
								</div>
							</div>
						</div>

						<div class="cnt__footer">
							<picture>
								<!--[if IE 9]><video style="display: none;"><![endif]-->
							  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-footer.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-footer@2x.png 2.0x"
									style="max-width : 689px">
							  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-footer-sp.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-footer-sp@2x.png 2.0x"
									style="max-width : 578px">
								<!--[if IE 9]></video><![endif]-->
							  <img src="<?php echo($img_url); ?>/event/report-tanakami2018-2nd/report-tanakami2018-2nd-footer.png"
								alt="レポートまとめ｜「たなかみ米」田植え体験イベント動画・レポート"
								class="u-img__max"
								style="max-width:674px">
							</picture>
						</div>
					</div>
				</div>


				<nav class="u-pager">
					<ul class="u-pager__row">
						<li class="u-pager__item "><a href="report-tanakami2018-1st.php">1</a></li>
						<li class="u-pager__item active"><a href="report-tanakami2018-2nd.php">2</a></li>
					</ul>
				</nav>

			</section>

		</div>
	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
