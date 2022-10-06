<?php
//base
include ("../../function.php");
$content = get_id_data('4088');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

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

//FLP ID
$flpID = '144';

//buttom message
// $btnMesage = 'このイベントに応募する';
?>
<main class="main kt4">
	<article class="main__row">
    <?php
    $panAry[] = array("/event/" ,"イベント・キャンペーン");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
    ?>
    <div class="main__wrapper">
			<div>
				<section class="section">
					<div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
						<img src="<?php echo $img_url ?>/event/event-online/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/event/event-online/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</div>
					<div class="mb2">
						<h2 class="u-ttl__m u-font__palt">おうち時間を家族で楽しめる<span class="u-ilblock">パーティレシピ♪</span><br>オンラインで実践するイベントを<span class="u-ilblock">開催！</span></h2>
						<div>
							<p>ブランシエラクラブの人気お料理コンテンツ、「うちのご飯は世界イチ」。当コンテンツの監修をしているお菓子・料理研究家の森崎繭香先生による、オンラインレッスンイベントが開催決定！「おうちで楽しめるバル風パーティーレシピ」をテーマに、おしゃれで豪華なメニューを3品ご紹介します。自宅にいながら先生と一緒に料理をして、質問することができるスペシャルイベントです！ぜひこの機会に奮ってご参加ください♪ </p>
						</div>
					</div>
					<div>
						<a href="http://mayucafe.com/" target="_blank" rel="nofollow">
							<div class="lecturer">
								<div class="lecturer__row">
									<div class="lecturer__item_l">
										<div class="lecturer__img">
											<img src="<?php echo $img_url ?>/event/event-online/lecturer__01@2x.png" alt="イベント講師　森崎繭香先生｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
											<img src="<?php echo $img_url ?>/event/event-online/lecturer__01-sp@2x.png" alt="イベント講師　森崎繭香先生｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
										</div>
										<div class="lecturer__item_m">
											<img src="<?php echo $img_url ?>/event/event-online/lecturer__02@2x.png" alt="イベント講師　森崎繭香先生｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
											<img src="<?php echo $img_url ?>/event/event-online/lecturer__02-sp@2x.png" alt="イベント講師　森崎繭香先生｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
												<img src="<?php echo $img_url ?>/event/event-online/lecturer__03@2x.png" alt="料理教室講師、パティシエを経て、フレンチ、イタリアンの厨房で経験を積み、独立。書籍、雑誌やWEBへのレシピ提供、テレビ・ラジオ出演など幅広く活動中。カフェやレストランでの経験を軸に、身近な材料を使った自宅でも作りやすいレシピを心がけている。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
												<img src="<?php echo $img_url ?>/event/event-online/lecturer__03-sp@2x.png" alt="料理教室講師、パティシエを経て、フレンチ、イタリアンの厨房で経験を積み、独立。書籍、雑誌やWEBへのレシピ提供、テレビ・ラジオ出演など幅広く活動中。カフェやレストランでの経験を軸に、身近な材料を使った自宅でも作りやすいレシピを心がけている。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
										</div>
									</div>
									<div class="lecturer__item_r">
										<img src="<?php echo $img_url ?>/event/event-online/lecturer__04@2x.png" alt="料理教室講師、パティシエを経て、フレンチ、イタリアンの厨房で経験を積み、独立。書籍、雑誌やWEBへのレシピ提供、テレビ・ラジオ出演など幅広く活動中。カフェやレストランでの経験を軸に、身近な材料を使った自宅でも作りやすいレシピを心がけている。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
										<img src="<?php echo $img_url ?>/event/event-online/lecturer__04-sp@2x.png" alt="料理教室講師、パティシエを経て、フレンチ、イタリアンの厨房で経験を積み、独立。書籍、雑誌やWEBへのレシピ提供、テレビ・ラジオ出演など幅広く活動中。カフェやレストランでの経験を軸に、身近な材料を使った自宅でも作りやすいレシピを心がけている。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
									</div>
								</div>
								<div class="lecturer__bottom">
									<img src="<?php echo $img_url ?>/event/event-online/lecturer__05@2x.png" alt="イベント講師　森崎繭香先生　著書<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
									<img src="<?php echo $img_url ?>/event/event-online/lecturer__05-sp@2x.png" alt="イベント講師　森崎繭香先生　著書<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
								</div>
							</div>
						</a>
					</div>
				</section>
				<section>
					<div class="u-column__2 mb3">
						<div class="u-column__item">
							<h3 class="mb2">
								<img src="<?php echo $img_url ?>/event/event-online/ttl__01@2x.png" alt="ご家族と一緒に！みんなで作って、盛り上がろう！<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
								<img src="<?php echo $img_url ?>/event/event-online/ttl__01-sp@2x.png" alt="ご家族と一緒に！みんなで作って、盛り上がろう！<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
							</h3>
							<div class="u-column__item u-only__sp">
								<img src="<?php echo $img_url ?>/event/event-online/img__01-sp@2x.jpg" alt="オンラインイベントのイメージ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
							</div>
							<p>今回のイベントはオンラインでの開催のため、ネット環境があれば全国どこからでもご参加いただけます！疑問点があればその場で先生に質問できるので、遠隔でも安心です♪さらに、今回は「参加」と「視聴」の２パターンの参加方法をご用意しています。画面の向こうの森崎先生と一緒に料理を作るもよし、お子さまと一緒に視聴して実践は後日でもよし…ご家庭ごとの状況やご希望に合わせて、さまざまな楽しみ方が可能です。ぜひ、お好きな方法でご参加ください！ </p>
						</div>
						<div class="u-column__item u-only__pc">
								<img src="<?php echo $img_url ?>/event/event-online/img__01@2x.jpg" alt="オンラインイベントのイメージ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						</div>
					</div>
				</section>
				<section>
					<div class="mb3">
						<div>
							<h3 class="mb2">
								<img src="<?php echo $img_url ?>/event/event-online/ttl__02@2x.png" alt="イベントの参加方法をお選びいただけます｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
								<img src="<?php echo $img_url ?>/event/event-online/ttl__02-sp@2x.png" alt="イベントの参加方法をお選びいただけます｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
							</h3>
						</div>
						<div class="u-column__2">
							<div class="u-column__item mb3_sp">
								<img src="<?php echo $img_url ?>/event/event-online/participant@2x.png" alt="参加者｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
								<img src="<?php echo $img_url ?>/event/event-online/participant-sp@2x.png" alt="参加者｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
							</div>
							<div class="u-column__item">
								<img src="<?php echo $img_url ?>/event/event-online/audience@2x.png" alt="視聴者｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
								<img src="<?php echo $img_url ?>/event/event-online/audience-sp@2x.png" alt="視聴者｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
							</div>
						</div>
					</div>
				</section>
				<section>
					<div class="mb4 mb3_sp">
						<div>
							<h3 class="mb2">
								<img src="<?php echo $img_url ?>/event/event-online/ttl__03@2x.png" alt="チャレンジするレシピはこちら！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
								<img src="<?php echo $img_url ?>/event/event-online/ttl__03-sp@2x.png" alt="チャレンジするレシピはこちら！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
							</h3>
							<div>
								<figure>
									<img src="<?php echo $img_url ?>/event/event-online/recipe@2x.png" alt="スパニッシュオムレツ、切り身のアクアパッツァ、アメリカンチェリーのコンポート｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
									<img src="<?php echo $img_url ?>/event/event-online/recipe-sp@2x.png" alt="スパニッシュオムレツ、切り身のアクアパッツァ、アメリカンチェリーのコンポート｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
									<figcaption class="u-fig__cap_right"><small class="u-small">※画像はイメージです。</small></figcaption>
								</figure>
							</div>
						</div>
					</div>
				</section>
				<section>
					<h3 class="u-ttl__m">当日のタイムテーブル</h3>
					<div class="event-online__table">
						<dl>
							<dt class="even">14：00〜</dt>
							<dd class="even">はじまりの挨拶、先生の紹介</dd>
						</dl>
						<dl>
							<dt class="odd">14：10〜</dt>
							<dd class="odd">調理スタート（3品）</dd>
						</dl>
						<dl>
							<dt class="even">15：10〜</dt>
							<dd class="even">撮影・質問、ご試食も！</dd>
						</dl>
						<dl>
							<dt class="odd">15：25〜</dt>
							<dd class="odd">おわりの挨拶</dd>
						</dl>
					</div>
				</section>
			</div>
			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table" style="position:relative;">
				<dl>
					<dt>[イベント内容]</dt>
					<dd>『オンラインイベント』 おうち時間を楽しもう！おうちでパーティ♪</dd>
				</dl>
				<dl>
					<dt>[開催日時]</dt>
					<dd>2021年5月29日（土） 14:00〜</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>合計35名（参加：5名 視聴者：30名）</dd>
				</dl>
				<dl>
					<dt>[講師]</dt>
					<dd>森崎 繭香先生（ブランシエラクラブ「うちのご飯は世界イチ」「今さら聞けない料理のアレコレ」監修）</dd>
				</dl>
				<dl>
					<dt>[参加費用]</dt>
					<dd>参加無料　※パソコン、スマートフォン、タブレットなど端末は各自でご用意ください。</dd>
				</dl>
				<dl>
					<dt>[応募申込]</dt>
					<dd>長谷工IDマイページにログインしてお申し込みください。<br>※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2021年4月1日（木）～2021年4月18日（日）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>当選された方へ2021年4月20日（火）より、順次イベント開催URLなどの詳細をメールにてご連絡いたします。</dd>
				</dl>
				<dl class="mb2">
					<dt>[注意事項]</dt>
					<dd>※ 長谷工IDマイページにログインしてお申し込みください。<br>※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。<br>※ 本イベントの参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</dd>
				</dl>
				<div class="u-font-size__20 u-color__red u-font__bold u-font__palt center u-text__align_l"><p>お申し込みは「参加者」または<span class="u-ilblock">「視聴者」のどちらか一方になります</span></p>
				</div>
			</div>
			<?php if($eventSts == 'new') { ?> <div class="u-btn-layout mb2">
				<div class="u-btn-layout__row">
					<a href="<?php echo $mypoint_url ?>/200" target="_blank" class="lecturer__btn w50 u-btn-layout__item">
						<img src="<?php echo $img_url ?>/event/event-online/btn__participant@2x.png" alt="「参加者」ご応募はこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/event/event-online/btn__participant-sp@2x.png" alt="「参加者」ご応募はこちら｜<?php echo $pageTtl ?>" class="lecturer__btn mb2_sp u-img__max u-only__sp" loading="lazy">
					</a>
					<a href="<?php echo $mypoint_url ?>/201" target="_blank" class="lecturer__btn w50 u-btn-layout__item">
						<img src="<?php echo $img_url ?>/event/event-online/btn__audience@2x.png" alt="「視聴者」ご応募はこちら<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/event/event-online/btn__audience-sp@2x.png" alt="「視聴者」ご応募はこちら｜<?php echo $pageTtl ?>" class="lecturer__btn u-img__max u-only__sp" loading="lazy">
					</a>
				</div>
			</div> <?php } else { ?> <label class="u-btn_end center mt2">応募の受け付けは終了いたしました</label> <?php } ?> <?php if (!$ssoFlag == 1){ ?> <small class="u-small">※イベントの申し込みには長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small> <?php }; ?> </section>
		</div>
	</article>
</main> <?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?> <?php  include ($inc_path."/lib/inc/footer.php"); ?> <?php  include ($inc_path."/lib/inc/foot.php"); ?>
