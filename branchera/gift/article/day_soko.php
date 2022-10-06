<?php
//base
include ("../../function.php");
$content = get_id_data('3021');
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
		$panAry[] = array("/gift/" ,"優待サービス");
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>
		<div class="main__wrapper">
			<section class="main__item mb0">

				<h3 class="u-ttl__l first-of-type">ブランシエラクラブ会員さま限定<br>トランクルーム利用初回限定特典のご案内</h3>
				<div class="u-assist_confetti flex between" style="margin-bottom : -24px!important;">
					<figure class="w30 center">
						<img
						data-src="../../lib/img/gift/daysoko/day-soko_info.png"
						data-retina="../../lib/img/gift/daysoko/day-soko_info@2x.png"
						alt="Day倉庫ロゴマーク"
						style="max-width:250px;"
						class="u-img__max m">
					</figure>
					<div class="w65 mb3">
						<h3 class="u-ttl__m mb2">1日1個15円（税別）から気軽に預けられるトランクルームの進化系「Day倉庫」</h3>
						<p>
						荷物単位で、1日単位で、お荷物をお預かりする新しいタイプのトランクルームサービスです。
						</p>
					</div>

				</div>
				<!--<div class="u-fullwith-movie">
					<div class="u-fullwith-movie__base daysoko_bg">
						<div id="player" class="u-fullwith-movie__emb"></div>
					</div>
					<script src="https://www.youtube.com/iframe_api"></script>
					 <script >// YouTubeの埋め込み
							 function onYouTubeIframeAPIReady() {
									 ytPlayer = new YT.Player(
											 'player', // 埋め込む場所の指定

											 {
													 videoId: '1j6VTgNhH10', // YouTubeのID
															 // height: '180',
															 // width: '320',

													 playerVars: {
															 loop: 1,//0:ループしない 1:ループする 1の場合playlist設定必須
															 playlist: '1j6VTgNhH10',//次に流すYoutubeのID
															 controls: 1,//コントローラー有り
															 autoplay: 1,//オートプレイ
															 showinfo: 0//動画タイトルなど表示しない
													 },


													 events: {
															 'onReady': onPlayerReady
													 }
											 }
									 );

							 }
					 //プレイ準備完了後
								 function onPlayerReady(event) {
									 event.target.playVideo();
									 event.target.mute();
								 }
				  </script>
				  <script>
							 $('img').click(function(){
									 video = '<iframe class="u-fullwith-movie__emb" src="'+ $(this).attr('data-video') +'" frameborder="0"></iframe>';
							 $(this).replaceWith(video);
							 });
				  </script>
				</div>-->
				<!-- <figure class="u-only__sp">
					<img
					data-src="../../lib/img/gift/daysoko//main-v-sp.jpg"
					data-retina="../../lib/img/gift/daysoko//main-v-sp@2x.jpg"
					alt="ブランシエラクラブ会員さま限定「Day倉庫」トランクルーム利用初回限定特典のご案内"
					class="u-img__max">
				</figure> -->
				<div class="daysoko-info">
					<div class="daysoko-info__row mb2">
						<div class="daysoko-info__item">
							<div class="daysoko-info__txt mb3 center">
								<p class="u-big"><span class="u-big__red">初回ご利用限定特典!!</span><strong class="u-big__strong">集荷料無料</strong><br class="u-only__sp">または<strong class="u-big__strong">送料無料</strong><span class="u-small">※</span></p>
							</div>
						</div>
					</div>
					<div class="daysoko-info__txt" style="color: #111;">
						<h4>■預け入れサービス一覧</h4>
						<p>
						●ベビー用品大切にお預かり ●手ぶらでゴルフ ●引越し・リフォーム一時お預かり ●衣替えサポート ●イベント用グッズ安全保管 ●スポーツ／レジャー用品安全保管 ●コレクション品お預かり ●客間緊急事態 ●マンション収納支援 ●書類・書籍の保管・溶解 ●転勤・配属・赴任お助け ●展示会搬入基地代行 ●商品在庫管理 ●マンション大規模修繕
						</p>
					</div>
				</div>

				<h4 class="u-ttl__m">ご利用の流れ</h4>
				<div class="img data-img center mb4">
		      <figure class="u-only__pc">
		        <img
						data-src="../../lib/img/gift/daysoko/moushikomi.png"
						data-retina="../../lib/img/gift/daysoko/moushikomi@2x.png"
						alt="ご利用の流れ"
						style="max-width:700px;"
						class="u-img__max"
					>
				</figure>
				<figure class="u-only__sp">
					<img
					data-src="../../lib/img/gift/daysoko/moushikomi-sp.png"
					data-retina="../../lib/img/gift/daysoko/moushikomi-sp@2x.png"
					alt="ご利用の流れ"
					style="max-width:350px;"
					class="u-img__max"
				>
			</figure>
			</div>


			<div class="u-assist">
				<ul class="u-list__ul">
					<li>当サービスをご利用の際は、「Day倉庫」への新規会員登録（無料）が必要です。</li>
					<li><span>Day倉庫新規会員登録は、<strong>必ず下記ボタンをクリックして専用フォームよりお願いします。</strong></span></li>
					<li>Day倉庫の公式サイトからご登録いただいても、初回限定特典はご利用いただけませんのでご注意ください。</li>
				</ul>
		 </div>
		 <div class="mb3">

				<?php
				$useName = "「Day倉庫」";
				$useNameAct = "利用する";
				$useLinks = 'https://www.day-soko.gr.jp/partner/index.html?str1=HkSQu4EMBR';
				include ($inc_path."/lib/inc/page/_gift/__u-daysoko.php");
				?>
		</div>



			<h4 class="u-ttl__m">ご注意事項</h4>
			<p>※ 集荷料無料サービスは、集荷提供エリアのみでご利用いただけます。対象エリアは詳細ページでご確認ください。対象エリア外の方は、路線便業者にてDay倉庫へ着払いで手配してください。また無料サービスの上限は2万円（税込み）までとさせていただきます。</p>
			<p>・上記登録フォームよりご登録いただいた後は、Day倉庫公式サイトより「ご利用の流れ」に従ってお申込みください。</p>

			<h4 class="u-ttl__m">トランクルーム利用特典提携企業</h4>
				<div class="group-info">
					<div class="group-info__row">
						<div class="">
							<h5 class="">
								<figure class="">
									<img
									  data-src="../../lib/img/gift/daysoko/day-soko-logo.png"
									  data-retina="../../lib/img/gift/daysoko/day-soko-logo@2x.png"
							      alt="Day倉庫"
							      style="max-width : 160px;"
							      class="u-img__max"
										>
							</figule>
						</h5>
						<div class="group-info__txt">
							<p style="font-weight : bold;">月島倉庫株式会社</p>
						</div>
					</div>
				</div>
			</div>

		</div>

	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
