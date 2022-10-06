<?php
//base
include ("../../function.php");
$content = get_id_data('25028');
$pageTtl = 'あなたの今を聞かせて！<br>冬こそ体を動かそう！今旬スポーツ！！';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = ($content['description']);
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年12月23日（木）～12月29日（水）";
// 回答者数
$respondents ="計2,347名";
// 対象者：
$target = "長谷工IDをお持ちの方で、スポーツや健康に興味のある方";

$cafeReportNum = "28";


//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
  <article class="main__row ">
    <?php
		$panAry[] = array("/magazine/" ,"ブランシエラマガジン");
    $panAry[] = array("/magazine/index_imakura-cafe.php" ,"いま暮らCaf&eacute;");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_magazine/cafe-header.php");
    ?>
		<aside class="mt3 mb3">
			<?php //$CmGtmId = '1'; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php"); ?>
		</aside>
    <div class="main__wrapper cafe-report__wrapper">
      <section class="main__item mb8 mb4_sp">
        <h2 class="u-font-size__30 u-color__dark mb2">冬こそ体を動かそう！今旬スポーツ！！</h2>
        <div class="u-assist_cafe_low u-only__pc u-font__palt">
          回答期間&emsp;&emsp;&emsp;：&emsp;<?php echo $period ?><br>
          回答者数&emsp;&emsp;&emsp;：&emsp;<?php echo $respondents ?><br>
					対象者&emsp;&emsp;&emsp;&emsp;：&emsp;<?php echo $target ?>

        </div>
        <div class="u-assist_cafe_low u-only__sp u-font__palt u-font-size__14_sp">
          回答期間：<?php echo $period ?><br>
					回答者数：<?php echo $respondents ?><br>
					対象者：<?php echo $target ?>
        </div>
        <div class="mb6 mb3_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v@2x.jpg" alt="｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.jpg" alt="｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="冬こそ体を動かそう！今旬スポーツ！！<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="冬こそ体を動かそう！今旬スポーツ！！<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>寒くてついじっとしがちな冬。巣ごもり期間も相まってお家に引きこもり気味になりそうですが、冬だからこそ楽しめるスポーツもありますよね。<br>今が旬な冬のスポーツについてお聞きしたところ、なんともアクティブなご意見をたくさんいただきました！ご一読いただければ一緒に体を動かしたくなるかも！？</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/totalling__ttl@2x.png" alt="冬といえばやはり、「スキー、スノボ」。お正月の定番「駅伝」や「マラソン」も<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/totalling__ttl-sp@2x.png" alt="冬といえばやはり、「スキー、スノボ」。お正月の定番「駅伝」や「マラソン」も<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
        <div class="u-column">
          <div class="u-column__2">
            <div class="u-column__item mb3_sp">
              <p>昨今はスノーボード（スノボ）が流行りなのかと思いきや、52%とぶっちぎりでスキーが1位でした。「やはり雪の中を滑るスキーは冬のスポーツNo.1だと思います」と根強い人気。次点は「スノーボード」。「会社の若者は全員スノーボード」という声もあるように、比較的若い世代に親しまれているようです。<br>また、冬がシーズンの「駅伝」や「マラソン」などの“走る系”も上位に入っています。「ランニング歴20年以上で、特に冬はマラソン大会が多いので毎週のように参加していました」という実践派と、「箱根駅伝の応援をしています。息子が通う大学の父母のみなさんと一緒に応援するのが楽しいです」という観戦派と、幅広い層から人気です。</p>
						</div>
            <div class="u-column__item center">
              <figure class="mb5">
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pie_chart@2x.png" alt="「これこそ冬が旬の スポーツ」と言えば？　アンケート結果（円グラフ）｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center" loading="lazy">
              </figure>
              <figure class="mb3">
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/chart_staff@2x.png" alt="スキーはできるけどスケートは全然上手にならなかったです ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max center" loading="lazy">
              </figure>
            </div>
          </div>
        </div>
			</section>
			<section class="mb4">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="やってみたいスポーツは「スキー」「マラソン」「ラグビー」が上位に｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="やってみたいスポーツは「スキー」「マラソン」「ラグビー」が上位に｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__image01_ski@2x.png" alt="スキーは季節もののスポーツだから やりたくなります<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__image02_running@2x.png" alt="気軽にできるから、始めやすい <?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						</div>
						<div class="u-column__item">
							<p>やってみたい（やっている）スポーツでも、やはり「スキー」を挙げられる方が多数を占めました。なかでも50代、60代の方に多かったのが「最後に滑ってからもう40年になるスキーを改めてやりたいなぁ！」「スキーを若い頃にずっとやっていたので、数十年ぶりに再開してみたい」などの、「久しぶりにチャレンジしたい」という方々。確かに80～90年代は、若者が冬にスキーやスノボをしに行くものでした。懐かしい…。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__image01_ski@2x.png" alt="スキーは季節もののスポーツだから やりたくなります<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
							<p>昨今のランニングブームを反映してか「マラソン」も注目を集めています。「やったことはないので、来年こそ！」という方から、「ホノルルマラソンに出てみたい」「駅伝。友人たちと、箱根駅伝と同じコースをつないでみたいです」と、既に具体的な目標を持っている方まで。<br>すっかり人気が定着した感じのあるラグビーは「なかなか自分ではできないので観戦して応援」など憧れのスポーツでもあるようです。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__image02_running@2x.png" alt="気軽にできるから、始めやすい <?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb9_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="対策は主に「水滴を拭き取る」と「水滴ができないようにする」。その方法もさまざま｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="対策は主に「水滴を拭き取る」と「水滴ができないようにする」。その方法もさまざま｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb3 u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__image01_mount@2x.png" alt="雪化粧した景色は格別ですね<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						</div>
						<div class="u-only__pc">
							<div class="mb3">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__image02_cityscape@2x.png" alt="雪景色の街並みも素敵です" class="u-img__max" loading="lazy">
							</div>
							<div>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__image03_spa@2x.png" alt="!寒い中で入る。 温泉は気持ちいい。" class="u-img__max" loading="lazy">
							</div>
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb0">
							<p>冬のスポーツの魅力をうかがったところ、「寒い中でも、体と心が熱くなる」や「凛とした冷たい空気の中で汗をかくほど動いた後のさわやかな気持ち」など、寒さゆえに心地よく運動できる点を挙げられる方も多かったです。「ラグビーを見ていて寒い中で体から立ち上る湯気が頼もしく感じる」という答えもありましたので、冬は体温も絵になるということでしょうか…。</p>
						</div>
						<div class="mb3 u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__image01_mount@2x.png" alt="雪化粧した景色は格別ですね<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="mb3_sp">
							<p>また、なんといっても冬と言えば雪と氷。「真っ白な銀世界で滑る快感は、冬しか味わう事ができません」や「真っ白な雪！真っ青な空！山の澄んだ空気！のもと軽快に滑るスキーは最高です」など、景観の美しさも大きな魅力として挙げられていました。</p>
							<p>さらには「ゲレンデで滑る爽快感と、その後入る温泉の温かさのコントラストが絶妙なところ」や「スキー、スノボは雪山などに行くことで、旅行、温泉なども付随している」など、その後の「お楽しみ」も魅力のひとつのようです。</p>
						</div>
						<div class="u-only__sp">
							<div class="mb3_sp">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__image02_cityscape@2x.png" alt="雪景色の街並みも素敵です <?php echo strip_tags($pageTtl); ?>" class="u-img__max" loading="lazy">
							</div>
							<div class="mb3_sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__image03_spa@2x.png" alt="寒い中で入る。 温泉は気持ちいい。 <?php echo strip_tags($pageTtl); ?>" class="u-img__max" loading="lazy">
							</div>
						</div>
						<div>
							<p class="mb3 mb5_sp">最近はマラソン大会などでも、走るだけでなく地域の魅力を堪能できるものも増えてきているようです。長谷工グループでも、こうした取り組みのひとつとして「飛鳥ハーフマラソン」への特別協賛を行なっています。コンセプトは「走ってタネをまこう」。参加費やグッズ売り上げの一部を景観保全に役立てているため、走れば走るほど開催地・明日香村の景観や歴史的風土を守ることにつながる活動です。もちろん、マラソンの後には現地のグルメや文化も楽しめますよ。</p>
							<div>
								<div class="mb4">
									<div class="pl3_sp pr3_sp">
										<a href="https://asuka-marathon.jp/" target="_blank" data-ga-click="cafe28_1">
											<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__btn01_asuka@2x.png" alt="長谷工が取り組むスポーツ×地域振興" class="u-img__max" loading="lazy">
										</a>
									</div>
									<p class="mt3">※2022年3月13日（日）に開催する第1回大会のエントリーは終了しております。</p>
								</div>
								<div>
									<p class="mb3 mb5_sp">でもやっぱり寒くて外に出たくない…という方には、オンラインレッスンで体を動かすという手があります。ブランシエラクラブでは、家にいながらにして受けられるストレッチやゴルフのレッスンをご紹介。来るべき春に備えて体力アップやイメージトレーニング、自信を持って軽装になれるスタイル作りに取り組んでみてはいかがでしょうか。</p>
									<div class="mb5 mb6_sp pl3_sp pr3_sp">
										<a href="<?php echo $base_url ?>/magazine/article/kotsuban_lesson_01.php" data-ga-click="cafe28_2">
											<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__btn02_karada@2x.png" alt="かんたんストレッチで日常のケアを" class="u-img__max" loading="lazy">
										</a>
									</div>
									<div class="pl3_sp pr3_sp">
										<a href="<?php echo $base_url ?>/event/article/event-golf19.php" data-ga-click="cafe28_3">
											<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__btn03_golf@2x.png" alt="ブランシエラクラブ会員だけのゴルフ動画" class="u-img__max" loading="lazy">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb3">
				<figure class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
			</section>
    </div>
    <?php include ($inc_path."/lib/inc/page/_magazine/__back_num_cafe-report.php") ?>
	</article>
	<aside class="mt3 mb3">
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php");?>
	</aside>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
