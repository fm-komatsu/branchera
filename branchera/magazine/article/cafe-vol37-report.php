<?php
//base
include ("../../function.php");
$content = get_id_data('25037');
$pageTtl = $content['title'];
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
$period = "2022年5月25日（水）～ 6月1日（水）";
// 回答者数
$respondents ="計2,978名";
// 対象者：
$target = "長谷工IDをお持ちで、SNSを1つでも利用している方";

$cafeReportNum = "37";


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
    <div class="main__wrapper cafe-report__wrapper_new">
      <section class="main__item mb8 mb4_sp">
        <h2 class="u-font-size__30 u-color__dark mb2">ボーっと使っちゃいけません！SNSの利用は？</h2>
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v@2x.jpg" alt="ボーっと使っちゃいけません！SNSの利用は？" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.jpg" alt="ボーっと使っちゃいけません！SNSの利用は？" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info mb6 mb4_sp">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="<?php echo (strip_tags($content['title'])); ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>スマートフォンの普及で、今や私たちの生活に欠かせないものとなったSNS（ソーシャルネットワーキングサービス）。会員のみなさんは普段どんな種類のSNSを利用していて、どこにメリットやデメリットを感じているのでしょう。 SNSの使い方について、いま一度一緒に考えてみませんか？</p>
				</div>
			</section>
			<section class="mb4 mb4_sp u-text__align_justify">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="よく利用するSNSはダントツでLINE動画が見られるYouTubeも人気！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="よく利用するSNSはダントツでLINE動画が見られるYouTubeも人気！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item">
							<p class="mb2">幅広い年代で日常的に使われているSNS。さまざまな種類がありますが、会員のみなさんはどのSNS をよく使っているのでしょうか？結果は、ダントツでLINEでした。37% の人が利用していて、家族や友人とのLINEトークは連絡手段として欠かせないものになっているようです。続いてYouTube（22%）、Twitter（15%）、Instagram（13%）、Facebook（10%）となりました。YouTube はいろいろな動画が見られますし、Twitter は情報共有の手軽さや気ままにつぶやくように書けるのが人気なのでしょう。Instagramは写真の投稿や閲覧するのが楽しい！ Facebookは本名で参加するのが基本なので、匿名性の高いSNSに比べるとやや少なめなのかもしれません。</p>
						</div>
						<div class="u-column__item">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="日常的によく利用しているSNSはどれですか？：回答円グラフ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb3" style="max-width:335px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp.png" alt="日常的によく利用しているSNSはどれですか？：回答円グラフ｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="LINEのグループは大人数への連絡や確認に便利ですね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb3" style="max-width:310px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02-sp@2x.png" alt="LINEのグループは大人数への連絡や確認に便利ですね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb3" style="max-width:85%;" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp u-text__align_justify">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="9割の人が毎日何らかのSNSを利用４人に１人は１日10回以上もアクセス｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="9割の人が毎日何らかのSNSを利用４人に１人は１日10回以上もアクセス｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="mb6 u-only__pc">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="YouTubeで筋トレ動画を見て運動する習慣ができました｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb-2"  style="max-width:307px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb2_sp">
							<p>SNSにアクセスする頻度についても聞いてみました。52%の人が「1日に数回」と回答。「1日に10 回以上」アクセスしている人も26%いて、「1日に1回」（11%）の人も合わせると、毎日利用している人が約9 割にものぼります。スマートフォンが生活に密着するにつれ、1日にSNSアプリにアクセスする回数が増えた人も多いのではないでしょうか？<br>よく見るジャンルはインテリア、ファッション、グルメ、スポーツ、ニュースなどが目立ちました。料理レシピや健康情報、ペットを挙げた人もいて、十人十色の活用ぶりがうかがえました。</p>
						</div>
					</div>
				</div>
				<div class="mb6 u-only__sp">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="YouTubeで筋トレ動画を見て運動する習慣ができました｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
			</div>
			</section>
			<section class="mb6 mb2_sp u-text__align_justify">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="便利な使い方、役に立つことなどSNSのお気に入りポイント｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="便利な使い方、役に立つことなどSNSのお気に入りポイント｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="地元のお店の情報をInstagramで手軽に｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb2"  style="max-width:377px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="Facebookで友人の誕生日にお祝いメッセージを送れた！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center"  style="max-width:315px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb6">
							<p class="mb0 mb2_sp">便利に利用できて、しかも多彩な楽しみ方ができるSNS。みなさんはどんな使い方をしているのでしょうか？多かったのは「情報収集」や「コミュニケーション」でした。</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="地元のお店の情報をInstagramで手軽に｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp"  style="max-width:85%;" loading="lazy">
							</div>
							<p>役立つ点を尋ねると、「LINEはグループの連絡に使えて便利」、「LINEの無料通話がうれしい」、「YouTubeは興味のある動画が豊富」、「Facebookで仕事以外の友人ができた」、「Facebookで古い友人とつながった」といった声が上がりました。「列車の遅延状況や災害情報をつぶやきで調べる」、「Instagramで趣味の情報をゲット」のように、TwitterやInstagramを検索ツールとして利用している人も少なくありません。</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="Facebookで友人の誕生日にお祝いメッセージを送れた！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp u-text__align_justify">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="SNSの不安は「個人情報の流出」誤解を招く発信にもご注意を！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="SNSの不安は「個人情報の流出」誤解を招く発信にもご注意を！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="u-only__pc mt5">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="なりすましのアカウントに気を付けよう！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb3"  style="max-width:347px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="リアルのコミュニケーションとのバランスも必要だね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb2"  style="max-width:347px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb4">
							<p class="mb0 mb3_sp">場所や時間に縛られず、気軽に発信や閲覧ができるSNS。ただし、不用意に利用するとトラブルに発展しかねません。会員のみなさんのなかにもSNSを利用していて「個人情報の流出」に不安を感じたり、困ったことが起きたりした経験のある方がけっこういるようです。「通知が頻繁でうっとうしい」、「誹謗中傷を見ると気分が落ち込む」、「怪しげなメールが増えた」、「アカウントを乗っ取られた」といった悩みも聞かれました。</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="なりすましのアカウントに気を付けよう！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp"  style="max-width:85%;" loading="lazy">
							</div>
							<p class="mb3_sp">「顔の見えないやり取りなので、会話のニュアンスがうまく相手に伝わらず誤解を招くことがある」とのコメントには、なるほどナットク！発信内容にはくれぐれも注意して、むやみに個人情報が分かるコメントや写真を掲載しないようにしましょう。相手に不快感を与える投稿もご法度です。</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="リアルのコミュニケーションとのバランスも必要だね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp"  style="max-width:85%;" loading="lazy">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb4 mb2_sp u-text__align_justify">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__ttl@2x.png" alt="ウェブサイトとは違う楽しみが！ブランシエラクラブの公式SNSにもご注目｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__ttl-sp@2x.png" alt="ウェブサイトとは違う楽しみが！ブランシエラクラブの公式SNSにもご注目｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2">
					<div class="u-column__item">
						<div class="u-only__pc">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img01@2x.png" alt="改善アイデアやキャンペーンが分かりやすいですね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center mb4"  style="max-width:308px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img02@2x.png" alt="お気軽にフォローしてね♪｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center"  style="max-width:315px;" loading="lazy">
						</div>
					</div>
					<div class="u-column__item">
						<div class="mb6">
							<p class="mb6 mb3_sp">ブランシエラクラブのInstagramやFacebookをご存じですか？公式SNSアカウントでは“住まいをそだてる” をテーマに、収納アイデアや住まいのハウツーなど、住むほどに心地よくなるお役立ち情報をお届けしています。<br>公式SNSアカウントでのアンケートなど、ウェブサイトにはないお楽しみも♪<br>住まいのプロである長谷工だからこそお伝えできる内容が満載。これからも続々と更新していきますので、ぜひご覧ください！</p>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img01@2x.png" alt="改善アイデアやキャンペーンが分かりやすいですね｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center mb2_sp"  style="max-width:85%;" loading="lazy">
							</div>
							<div class="mb3 mb4_sp">
								<a href="https://www.instagram.com/haseko_brancheraclub/" data-ga-click="cafe37_1" target="_blank">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn01@2x.png" alt="Instagram公式アカウントはこちら" class="u-img__max u-only__pc center"  style="max-width:332px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn01-sp@2x.png" alt="Instagram公式アカウントはこちら" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
								</a>
							</div>
							<div class="mb2 mb4_sp">
								<a href="https://www.facebook.com/hasekobrancheraclub/" data-ga-click="cafe37_2" target="_blank">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn02@2x.png" alt="Facebook公式アカウントはこちら" class="u-img__max u-only__pc center"  style="max-width:332px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn02-sp@2x.png" alt="Facebook公式アカウントはこちら" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
								</a>
							</div>
							<div class="mb4_sp u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img02@2x.png" alt="お気軽にフォローしてね♪｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center"  style="max-width:85%;" loading="lazy">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb3">
				<figure class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:85%;" loading="lazy">
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
