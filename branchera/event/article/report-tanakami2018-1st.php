<?php
//base
include ("../../function.php");
$content = get_id_data('4040');
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
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-1st/main-vis.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-1st/main-vis@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-1st/main-vis-sp.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-1st/main-vis@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-tanakami2018-1st/main-vis.png"
							alt="「たなかみ米」田植え体験イベント動画・レポート メインビジュアル"
							class="u-img__max"
							style="max-width:715px">
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
								<div class="w25 mb2">
									<img
									src="<?php echo($img_url); ?>/event/report-tanakami2018-1st/logo-t.png"
									srcset="<?php echo($img_url); ?>/event/report-tanakami2018-1st/logo-t.png 1x,
									<?php echo($img_url); ?>/event/report-tanakami2018-1st/logo-t@2x.png 2x"
									class="u-img__max tanakami-logo"
									style="max-width:126px; max-height: 126px;"
									alt="たなかみのお米　ロゴ"
									/>
								</div>
								<div class="w75">
									<h5 class="u-ttl__s">株式会社 長谷工あんしんデリ</h5>
									<p>土と水に恵まれた田上(たなかみ)の田んぼで、農薬や化学肥料を低減した、安心でおいしいお米をお届けしています。一粒一粒の旨味をしっかり味わえる「たなかみ米」、ぜひ一度お試しください。</p>
									<a href="http://www.haseko.co.jp/ha-delicious/gift/" target="_blank" rel="nofollow" class="u-btn">長谷工あんしんデリ公式サイトはこちら</a>
								</div>
							</div>
						</div>
					</div>

					<div class="center movie-section mb2">
						<div class="movie-absolute">
							<div class="tanakami__movie tanakami-movie tanakami-innner">

								<div class="tanakami-movie__video">
									<div class="tanakami-movie__video_base">
										<iframe class="tanakami-movie__video_emb" src="https://www.youtube.com/embed/ECqsO1jfcH8?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div>

						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-01.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-01@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-01-sp.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-01-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-01.png"
							alt="【到着！】イメージキャラクター“はせぽん”のお出迎えで、大盛り上がり！｜「たなかみ米」田植え体験イベント動画・レポート"
							class="u-img__max"
							style="max-width:738px">
						</picture>
					</div>

					<div class="minus__margin36">
						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-02.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-02@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-02-sp.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-02-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-02.png"
							alt="【工場見学！】毎日食べているお米がどのように作られているのか…みなさま、熱心に耳を傾けていらっしゃいました｜「たなかみ米」田植え体験イベント動画・レポート"
							class="u-img__max"
							style="max-width:738px">
						</picture>
					</div>

					<div>
						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-03.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-03@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-03-sp.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-03-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-03.png"
							alt="【農機見学】大きな農業機械を前に、大人も子供も大興奮！｜「たなかみ米」田植え体験イベント動画・レポート"
							class="u-img__max"
							style="max-width:738px">
						</picture>
					</div>
					<div class="minus__margin28 mb2">
						<picture>
							<!--[if IE 9]><video style="display: none;"><![endif]-->
						  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-04.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-04-sp@2x.png 2.0x">
						  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-04-sp.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-04-sp@2x.png 2.0x">
							<!--[if IE 9]></video><![endif]-->
						  <img src="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-04.png"
							alt="【田植え体験！】いよいよ田植え体験へ！みんなで泥だらけになろう｜「たなかみ米」田植え体験イベント動画・レポート"
							class="u-img__max"
							style="max-width:738px">
						</picture>
					</div>

					<div class="section__padding">

						<h4 class="center mb2">
							<picture>
								<!--[if IE 9]><video style="display: none;"><![endif]-->
							  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-voice.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-voice@2x.png 2.0x">
							  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-voice-sp.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-voice-sp@2x.png 2.0x">
								<!--[if IE 9]></video><![endif]-->
							  <img src="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-voice.png"
								alt="参加者のみなさまからの声｜「たなかみ米」田植え体験イベント動画・レポート"
								class="u-img__max"
								style="max-width:318px">
							</picture>
						</h4>

						<div class="event_comment">
							<div class="balloon balloon_maxborder mb family">
								<div class="inner-border">
									<div>
										<p>毎日食べるお米がどうやって作られているのか学べ、実際に田植え経験もできる貴重な機会なので申し込みました。子どもはもちろん喜びましたが、久しぶりの泥との格闘に私たち親も想像以上に楽しませていただきました。また、お土産でいただいたお米も、とてもふっくらして美味しかったです。</p>
									</div>
								</div>
							</div>
							<div class="balloon balloon_maxborder mb parent">
								<div class="inner-border">
									<div>
										<p>初めての体験。農業に興味があったため、細かい説明も社長ご本人から聞けて、とても興味深く伺いました。メインの田植えは本当に楽しかったです。最初は長靴を履いて作業をしていましたが、田んぼに足がとられて大変だったので、早々に裸足になり自然の泥の感触を楽しみました。</p>
									</div>
								</div>
							</div>
							<div class="balloon balloon_maxborder mb family">
								<div class="inner-border">
									<div>
										<p>長女・次女ともに田植え体験は楽しかったと声を揃えておりました。私自身も初めての田植え体験だったので、どうなるかなあと少し心配していたのですが、子どもたちと一緒にというよりも自分の方が夢中になっていました。また、長女は田植え体験前の映像の解説が、わかりやすくてスゴク良かったと話していました。</p>
									</div>
								</div>
							</div>
							<div class="mb3" style="display: block; margin-left: auto;">
								<picture>
									<!--[if IE 9]><video style="display: none;"><![endif]-->
								  <source media="(min-width:667px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-cntfooter.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-cntfooter@2x.png 2.0x">
								  <source media="(max-width:666px)" srcset="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-cntfooter-sp.png 1.0x , <?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-cntfooter-sp@2x.png 2.0x">
									<!--[if IE 9]></video><![endif]-->
								  <img src="<?php echo($img_url); ?>/event/report-tanakami2018-1st/report-tanakami2018-1st-cntfooter.png"
									alt="後編も見てね｜「たなかみ米」田植え体験イベント動画・レポート"
									class="u-img__max"
									style="max-width:528px">
								</picture>
							</div>
						</div>
					</div>
				</div>

				<nav class="u-pager">
					<ul class="u-pager__row">
						<li class="u-pager__item active"><a href="report-tanakami2018-1st.php">1</a></li>
						<li class="u-pager__item"><a href="report-tanakami2018-2nd.php">2</a></li>
					</ul>
				</nav>

			</section>

		</div>
	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
