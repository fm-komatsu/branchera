<?php
//base
include ("../../function.php");
$content = get_id_data('4079');
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
$btnMesage = 'このイベントに応募する';
?>
<main class="main kt4">
	<article class="main__row">
    <?php
    $panAry[] = array("/event/" ,"イベント・キャンペーン");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
    ?>
    <div class="main__wrapper">
			<div class="kt4__row">
				<section class="section wrapper sec01">
					<div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
						<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/main-v.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/main-v@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc">
						<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/main-v-sp.jpg" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp">
					</div>
					<div class="narrow">
						<div class="kt4__inner">
							<h2 class="mb3">
              <img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec01__ttl_l.png"
              data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec01__ttl_l@2x.png"
              alt="美しさの基本は、 ゆがみのない「美しい骨盤」にあり!"
              style="max-width:659px;"
              class="u-img__max u-only__pc">
              <img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec01__ttl_l-sp.png"
              data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec01__ttl_l-sp@2x.png"
              alt="美しさの基本は、 ゆがみのない「美しい骨盤」にあり!"
              class="u-img__max u-only__sp">
          </h2>
							<p class="mb4">普通に生活をしているだけで、実はいつの間にか「ゆがみ」を作り出しているってお気付きですか。 カバンはいつも同じ方の肩にかけている。足を組んで座るクセがある。そんな日常動作が、骨盤のゆがみの元凶に。 </p>
						</div>
						<h3 class="kt4__ttl_m kt4__bg_brwn">
            <div>
             <img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec01__ttl_m.png"
              data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec01__ttl_m@2x.png"
              alt="こんなお悩み、ありませんか？"
              class="u-img__max" style="max-width:321px;">
            </div>
          </h3>
						<div class="sec01__m-cnt sec01cnt">
							<div class="sec01cnt__row mb3">
								<div class="sec01cnt__balloons balloons mb4">
									<div class="balloons__item">
										<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec01__balloon01.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec01__balloon01@2x.png" alt="肌つやがイマイチ" class="u-img__max">
									</div>
									<div class="balloons__item">
									<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec01__balloon02.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec01__balloon02@2x.png" alt="やせにくい" class="u-img__max">
									</div>
									<div class="balloons__item">
									<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec01__balloon03.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec01__balloon03@2x.png" alt="冷え性" class="u-img__max">
									</div>
									<div class="balloons__item">
									<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec01__balloon04.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec01__balloon04@2x.png" alt="肩こり・腰痛" class="u-img__max">
									</div>
									<div class="balloons__item">
									<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec01__balloon05.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec01__balloon05@2x.png" alt="くびれがない" class="u-img__max">
									</div>
									<div class="balloons__item">
									<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec01__balloon06.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec01__balloon06@2x.png" alt="バスト＆ヒップアップ" class="u-img__max">
									</div>
									<div class="balloons__item">
									<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec01__balloon07.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec01__balloon07@2x.png" alt="姿勢が悪い" class="u-img__max">
									</div>
									<div class="balloons__item">
									<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec01__balloon08.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec01__balloon08@2x.png" alt="むくみやすい" class="u-img__max">
									</div>
								</div>
								<div class="center mb2 mb_sp">
									<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec01__ex01.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec01__ex01@2x.png" alt="「骨盤の歪み」が原因かも・・・" class="u-img__max" style="max-width:374px;">
								</div>
								<div class="center">
									<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec01__ex02.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec01__ex02@2x.png" alt="思い当ったら、「美しい骨盤つくり」にトライ！" class="u-img__max" style="max-width:342px;">
								</div>
							</div>
							<div class="kt4__inner">
								<div>
									<p>今回のイベントでは、美しい骨盤づくりにむけて骨盤の開閉力を高め、かつ筋肉本来の力を発揮するための「筋膜ストレッチ」も合わせて行うプログラムになっています。性別・年齢を問わず、身体のかたい方も大歓迎！講師から的確なアドバイス&レッスンを受けながら約75分間のクラスをご体験いただけます。</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section wrapper narrow sec02">
					<div class="kt4__inner mb4">
						<h2 class="mb3">
            <img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_l.png"
              data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_l@2x.png"
              alt="ビューティ・ペルヴィス®(骨盤調整)の受講で、 大きな効果が実証されました！"
              class="u-img__max u-only__pc">
            <img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_l-sp.png"
              data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_l-sp@2x.png"
              alt="ビューティ・ペルヴィス®(骨盤調整)の受講で、 大きな効果が実証されました！"
              class="u-img__max u-only__sp">
          </h2>
						<div class="center mb7 mb10_sp">
							<p class="u-text__align_l">体験者は30代の女性。検査は、専門機関フィールファインで行われました。</p>
						</div>
						<div class="mb9 mb10_sp">
							<section>
								<div class="sec02__cnt">
									<h3 class="sec02__ttl_m mb2 mb4_sp">
                    <img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_m01.png"
                      data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_m01@2x.png"
                      alt="実証1：前傾していた姿勢が改善"
                      class="u-img__max u-only__pc" style="max-width:382px;">
                      <img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_m01-sp.png"
                      data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_m01-sp@2x.png"
                      alt="実証1：前傾していた姿勢が改善"
                      class="u-img__max u-only__sp" style="max-width:357px;">
                  </h3>
									<div class="sec02__inner">
										<div class="sec02__itemimg mb2 w65">
											<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec02__img01.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec02__img01@2x.png" alt="前傾していた姿勢がまっすぐとなり、ヒップアップとバストアップに顕著な変化がみられました！" class="u-img__max u-only__pc" style="max-width:400px;">
											<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec02__img01-sp.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec02__img01-sp@2x.png" alt="前傾していた姿勢がまっすぐとなり、ヒップアップとバストアップに顕著な変化がみられました！" class="u-img__max u-only__sp" style="max-width:543px;">
										</div>
										<div class="sec02__item w35">
											<div class="sec02__check"></div>
											<div class="sec02__itemex">
												<p>前傾していた姿勢がまっすぐとなり、ヒップアップとバストアップに顕著な変化がみられました！</p>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="mb7 mb10_sp">
							<section>
								<div class="sec02__cnt">
									<h3 class="sec02__ttl_m sec02__ttl_m2 mb2 mb3_sp">
                  <img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_m02.png"
                      data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_m02@2x.png"
                      alt="実証2：脂肪厚測定でわき腹に変化が"
                      class="u-img__max u-only__pc" style="max-width:439px;">
                      <img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_m02-sp.png"
                      data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_m02-sp@2x.png"
                      alt="実証2：脂肪厚測定でわき腹に変化が"
                      class="u-img__max u-only__sp" style="max-width:438px;">
                </h3>
									<div class="sec02__inner">
										<div class="sec02__itemimg mb2 w65">
											<img src="<?php echo $img_url ?>/event/event-kotsuban4/sec02__img02.png" class="u-img__max" style="max-width:398px;" alt="気になるお腹、太もも、腕など8箇所の皮下脂肪をチェック。 ひし形のバランスが良くなり、 側腹部、上腕背部に顕著な 変化が現れました。">
											<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec02__img02.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec02__img02@2x.png" alt="気になるお腹、太もも、腕など8箇所の皮下脂肪をチェック。 ひし形のバランスが良くなり、 側腹部、上腕背部に顕著な 変化が現れました。" class="u-img__max u-only__pc" style="max-width:400px;">
											<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec02__img02-sp.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec02__img02-sp@2x.png" alt="気になるお腹、太もも、腕など8箇所の皮下脂肪をチェック。 ひし形のバランスが良くなり、 側腹部、上腕背部に顕著な 変化が現れました。" class="u-img__max u-only__sp" style="max-width:543px;">
										</div>
										<div class="sec02__item w35">
											<div class="sec02__check"></div>
											<div class="sec02__itemex">
												<div>
													<p>気になるお腹、太もも、腕など8箇所の皮下脂肪をチェック。 ひし形のバランスが良くなり、 側腹部、上腕背部に顕著な 変化が現れました。</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<section>
							<div class="sec02__cnt">
								<h3 class="sec02__ttl_m mb2 mb3_sp">
                  <img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_m03.png"
                      data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_m03@2x.png"
                      alt="実証3：メディカル肌診断で 「キメ」「毛穴の目立ち」に変化が"
                      class="u-img__max u-only__pc" style="max-width:463px;">
                    <img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_m03-sp.png"
                      data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_m03-sp@2x.png"
                      alt="実証3：メディカル肌診断で 「キメ」「毛穴の目立ち」に変化が"
                      class="u-img__max u-only__sp" style="max-width:438px;">
                </h3>
								<div class="sec02__inner mt2">
									<div class="sec02__itemimg mb2 w65">
										<img src="<?php echo $img_url ?>/event/event-kotsuban4/sec02__img03.png" class="u-img__max" style="max-width:397px;" alt="貴方の肌を「潤い」「しわ」「肌の明るさ」「しみ」「毛穴の目立ち」「キメ」などから総合評価。 「キメ」「毛穴の目立ち」に顕著な変化が現れました！">
									</div>
									<div class="sec02__item w35">
										<div class="sec02__check"></div>
										<div class="sec02__itemex">
											<p>貴方の肌を「潤い」「しわ」「肌の明るさ」「しみ」「毛穴の目立ち」「キメ」などから総合評価。 「キメ」「毛穴の目立ち」に顕著な変化が現れました！</p>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</section>
				<section class="section wrapper narrow sec03">
					<div class="kt4__inner">
						<h2 class="mb3">
            <img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec03__ttl_l.png"
              data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec03__ttl_l@2x.png"
              alt="体験した人の声を聞いてみると...。"
              class="u-img__max u-only__pc" style="max-width:659px;">
            <img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec03__ttl_l-sp.png"
              data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec03__ttl_l-sp@2x.png"
              alt="体験した人の声を聞いてみると...。"
              class="u-img__max u-only__sp" style="max-width:438px;">

          </h2>
						<div class="flex between mb3">
							<div class="w33 sec03__balloon sec03__item">
								<div class="sec03__flex">
									<div class="sec03__inner">
										<div class="img">
											<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec03__img01.jpg" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec03__img01@2x.jpg" alt="" class="u-img__max u-only__pc" />
											<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec03__img01-sp.jpg" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec03__img01-sp@2x.jpg" alt="" class="u-img__max u-only__sp" />
											<p>レッスンのはじめに先生がカラダの状況をみてくださって、はじめてゆがんでいることに気づきました。1時間ほどのボディワーク体験でしたが、ゆがみが調整されているのがわかり驚きました!</p>
										</div>
									</div>
									<div class="sec03__iconbox iconbox">
										<div class="iconbox__row">
											<div class="iconbox__ex">
												<p>（20代 Hさん）</p>
											</div>
											<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec03__icon01.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec03__icon01@2x.png" alt="" class="u-img__max" style="max-width:70px;" />
										</div>
									</div>
								</div>
							</div>
							<div class="w33 sec03__balloon sec03__item">
								<div class="sec03__flex">
									<div class="sec03__inner">
										<div class="img">
											<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec03__img02.jpg" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec03__img02@2x.jpg" alt="" class="u-img__max" />
											<p>普段あまり運動をしていないので心配でしたが、ゆっくりと体を動かしながらストレッチするようなプログラムなのでついていけました。でも翌日は少し筋肉痛に・・・(笑)</p>
										</div>
									</div>
									<div class="sec03__iconbox iconbox">
										<div class="iconbox__row">
											<div class="iconbox__ex">
												<p>（20代 Mさん）</p>
											</div>
											<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec03__icon02.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec03__icon02@2x.png" alt="" class="u-img__max" style="max-width:72px;" />
										</div>
									</div>
								</div>
							</div>
							<div class="w33 sec03__balloon sec03__item">
								<div class="sec03__flex">
									<div class="sec03__inner">
										<div class="img">
											<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec03__img03.jpg" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec03__img03@2x.jpg" alt="" class="u-img__max" />
											<p>肩こりがあり身体のメンテナンスをしたいと思って参加しました。<br>同様のイベントがあれば、また参加したいです。</p>
										</div>
									</div>
									<div class="sec03__iconbox iconbox">
										<div class="iconbox__row">
											<div class="iconbox__ex">
												<p>（60代 Tさん）</p>
											</div>
											<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec03__icon03.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec03__icon03@2x.png" alt="" class="u-img__max" style="max-width:87px;" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mb3">
							<h3>ビューティ・ペルヴィス®とは</h3>
							<div class="flex between">
								<div class="w65">
									<p>ビューティ・ペルヴィス®とは、b-i STYLE代表者であり、スタジオ・ヨギーのディレクターであるkyo先生が考案・開発した、骨盤と筋膜にフォーカスして全身を土台から整えていくメソッドです。</p>
									<p>老若男女を問わず誰もが無理なく行える、自力でバランス調整をするプログラムになっています。1回体験するだけでも、体の変化を感じること間違いなし！この機会に骨盤を整えて、ゆがみ知らずの身体になってみませんか。<br>（変化の感じ方には個人差があります）</p>
								</div>
								<div class="w35 center">
									<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/teacher-kyo.jpg" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/teacher-kyo@2x.jpg" alt="" class="u-img__max" style="max-width:155px" />
									<p class="u-text__align_l">b-i STYLE 代表<br>ボディワークプロデューサー<br><b>kyo先生</b></p>
								</div>
							</div>
						</div>
						<div class="sec03__assist mb3">
							<div class="kt4__ttl_ml sec03__ttl_ml kt4__bg_grd">
								<h3><img data-src="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_m.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/sec02__ttl_m@2x.png" alt="今回、講師を務めてくださるのはこの方！" class="u-img__max" style="max-width:363px"></h3>
							</div>
							<div class="flex between">
								<div class="w25 center mb2_sp teacher__img">
									<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/teacher_asana.jpg" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/teacher_asana@2x.jpg" alt="" class="u-img__max" style="max-width:126px" />
								</div>
								<div class="w75">
									<div class="sec03__teacher ">
										<figure class="sec03__teacher_img">
											<img data-src="<?php echo $img_url ?>/event/event-kotsuban4/profile__icon.png" data-retina="<?php echo $img_url ?>/event/event-kotsuban4/profile__icon@2x.png" alt="" class="u-img__max" style="max-width:50px" />
										</figure>
										<h4 class="sec03__teacher_ex">アサナ先生</h4>
									</div>
									<div class="assist__ex">
										<p>9歳からクラシックバレエを始める。<br>短大卒業と同時に博覧会のキャンペンガールとして全国を回り、レビュショーをする。<br>同時期よりジャズダンスを学び、様々な舞台でプロダンサーとして活躍。<br>ダンサーとして仕事をしていく上で、身体の調整法に興味を持ち2007年からスタジオ・ヨギーでヨガを始め、その後kyo先生と出会い、「ビューティ・ペルヴィス」を学び始める。<br>2009年、出身地福岡に戻り、ビューティ・ペルヴィス担当。<br>2007年11月 ヨギー・ビューティ プロフェッショナルコース修了<br>2009年3月 ヨギー・ビューティ・ペルヴィスフロー認定資格取得<br>2009年5月 ヨギー・ビューティ・ペルヴィス認定資格取得<br>2015年 公認b-i stylist</p>
									</div>
								</div>
							</div>
						</div>
				</section>
			</div>
			<div class="mb4">
				<h4 class="u-ttl__m">過去に実施した「骨盤の調整レッスン」イベントの様子はこちら</h4>
				<div class="flex between mb3">
					<div class="w50 mb2_sp center_sp">
						<img src="<?php echo $img_url ?>/event/report-kotsuban2/img01@2x.jpg" style="max-width:360px;" class="u-img__max center">
					</div>
					<div class="w50 mb2_sp center_sp">
						<img src="<?php echo $img_url ?>/event/report-kotsuban2/img02@2x.jpg" style="max-width:360px;" class="u-img__max center">
					</div>
				</div>
				<ul class="u-list__ul">
					<li><a href="report-kotsuban3.php" class="u-icon">脱ゆがみライフ！骨盤の調整レッスン201805</a></li>
					<li><a href="report-kotsuban2.php" class="u-icon">骨盤の調整レッスンレポート«東京・大阪W開催≫</a></li>
					<li><a href="report-kotsuban.php" class="u-icon">骨盤の調整レッスンイベントレポート</a></li>
				</ul>
			</div>
			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table" style="position:relative;">
				<dl>
					<dt>[イベント内容]</dt>
					<dd>骨盤の調整レッスン ご招待</dd>
				</dl>
				<dl>
					<dt>[開催日時]</dt>
					<dd>2020年1月19日（日）<br>受付開始 10:15、イベント開始 10:45、終了予定 12:00頃</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>スタジオ・ヨギー福岡天神<br>福岡県福岡市中央区天神2-12-1 天神ビル10F<br>西鉄天神駅 西3a出口 徒歩30秒 <a href="https://goo.gl/maps/j8ETYZKYF427NaJ1A" target="_blank" rel="nofollow" class="u-icon">地図はこちら</a></dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>30名程度（会員の方ご本人と、ご同伴の方1名までご招待）</dd>
				</dl>
				<dl>
					<dt>[講師]</dt>
					<dd>アサナ先生（b-i stylist）</dd>
				</dl>
				<dl>
					<dt>[参加費用]</dt>
					<dd>参加無料　※現地までの交通費等は各自ご負担ください。 </dd>
				</dl>
				<dl>
					<dt>[応募申込]</dt>
					<dd>長谷工IDマイページにログインしてお申し込みください。<br>※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。<br>※ 参加人数は当選メールにてお伺いいたします。</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2019年12月5日（木）～2019年12月15日（日）</dd>
				</dl>
				<dl>
					<dt>[当選発表]</dt>
					<dd>当選された方へ2019年12月17日（火）より随時メールにてご連絡いたします</dd>
				</dl>
				<dl class="mb2">
					<dt>[注意事項]</dt>
					<dd>※ 長谷工IDマイページにログインしてお申し込みください。<br>※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。<br>※ 本イベントの参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</dd>
				</dl>
			</div> <?php if($eventSts == 'new') { ?> <div class="u-btn-layout mb2">
				<div class="u-btn-layout__row">
					<a href="<?php echo $mypoint_url ?>/<?php echo $flpID; ?>" target="_blank" class="u-btn_point u-btn-layout__item u-icon__circle-right"><?php echo $btnMesage; ?></a>
				</div>
			</div> <?php } else { ?> <label class="u-btn_end center mt2">応募の受け付けは終了いたしました</label> <?php } ?> <?php if (!$ssoFlag == 1){ ?> <small class="u-small">※イベントの申し込みには長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small> <?php }; ?> </section>
		</div>
	</article>
</main> <?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?> <?php  include ($inc_path."/lib/inc/footer.php"); ?> <?php  include ($inc_path."/lib/inc/foot.php"); ?>
