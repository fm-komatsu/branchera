<?php
//base
include ("../../function.php");
$content = get_id_data('4048');
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
		include ($inc_path."/lib/inc/page/_event/__main-header.php");
		?>
		<div class="main__wrapper">
			<section class="section wrapper">
				<div class="section__row">
					<div>
						<h2 class="mb3">
							<figure class="u-fig u-position__center">
								<img data-src="<?php echo $img_url ?>/event/report-jazz/main-v.jpg" data-retina="<?php echo $img_url ?>/event/report-jazz/main-v@2x.jpg"
								 alt="ブルーノート東京「JAZZ for CHILDREN」レポート" class="u-img__max u-only__pc">
								<img data-src="<?php echo $img_url ?>/event/report-jazz/main-v-sp.jpg" data-retina="<?php echo $img_url ?>/event/report-jazz/main-v-sp@2x.jpg"
								 alt="ブルーノート東京「JAZZ for CHILDREN」レポート" class="u-img__max u-only__sp">
								<figcaption class="u-fig__cap">
									<span style="text-align : right;">Photo by Yuka Yamaji</span>
								</figcaption>
							</figure>
						</h2>
						<p class="mb3"> 2018年11月でオープン30周年を迎えるジャズクラブ「ブルーノート東京」。大人の雰囲気が漂うこの場所が、この日だけはゲストは“子ども”！スペシャルプログラム「JAZZ for
							CHILDREN」の模様をレポートいたします。 </p>
					</div>
					<div class="u-assist">
						<div class="flex flex_center">
							<figure class="center_sp mb2_sp">
								<img data-src="<?php echo $img_url ?>/event/report-jazz/bluenote_logo.png" data-retina="<?php echo $img_url ?>/event/report-jazz/bluenote_logo@2x.png"
								 style="max-width:213px;" class="u-img__max">
							</figure>
							<div class="u-only__pc" style="margin-right:12px;"></div>
							<h5 class="center_sp self-center">ブルーノート東京</h5>
						</div>
						<hr>
						<div>
							<div>
								<p>東京南青山で世界中の音楽を届ける老舗のジャズクラブ。これまで著名なミュージシャンの生の音を30年に渡って届けてきました。重厚な雰囲気の中、本格料理とお酒を口にしながらジャズを聴くのは、まさに大人のための至高の時間。<br>そんな歴史あるジャズクラブで、2015年から毎年開催される子ども向けの特別プログラムに参加しました。</p>
							</div>
						</div>
					</div>
					<h4 class="u-ttl__m">重厚な扉の向こうに広がるムーディーな世界！<br>高鳴る鼓動を抑えながら、まずはフォトエリアでパチリ♪</h4>
					<div class="flex flex_around">
						<div class="w50">
							<p>ブランドショップが立ち並ぶ青山骨董通りから1本入ったところに、<strong>歴史を感じさせる重厚な扉</strong>。ちょっと緊張気味に扉を開けると、まだ昼の14時だというのに、まるでそこだけ夜のようなムーディーな世界が広がっていました。</p>
							<p>階段を降りていくと、雰囲気のあるウェイティング・スペースが。<strong>クラシックな雰囲気に心が高鳴ります</strong>。今日は特別にフォトスポットが用意され、ギターやサックス、JAZZ for
								CHILDRENのパネルを持って、写真撮影を楽しみました。</p>
						</div>
						<div class="w50">
							<figure class="u-fig u-position__center">
								<img data-src="<?php echo $img_url ?>/event/report-jazz/report-jazz_bluenote-tokyo01.jpg" data-retina="<?php echo $img_url ?>/event/report-jazz/report-jazz_bluenote-tokyo01@2x.jpg"
								 alt="" style="max-width:360px;" class="u-img__max">
							</figure>
						</div>
					</div>
					<h4 class="u-ttl__m">豊富なフードメニューと心地よい空気を満喫</h4>
					<div class="flex flex_around">
						<div class="w50">
							<p>スタッフにエスコートされて、いざ会場へ。ギターやドラムなどの楽器が並ぶステージ。高級感の溢れる座席。思わず、子どもたちと同じようにキョロキョロと見まわしてしまう大人たちです。</p>
							<p>座席についたら、まずはドリンクの注文。オリジナルカクテルやワイン、日本酒と目移りするラインナップに加え、本格フレンチからアラカルトまで楽しめます。美味しいメニューも、ブルーノート東京の特徴です。</p>
						</div>
						<div class="w50">
							<figure class="u-fig u-position__center">
								<img data-src="<?php echo $img_url ?>/event/report-jazz/report-jazz_bluenote-tokyo02.jpg" data-retina="<?php echo $img_url ?>/event/report-jazz/report-jazz_bluenote-tokyo02@2x.jpg"
								 alt="" style="max-width:360px;" class="u-img__max">
							</figure>
						</div>
					</div>
					<h4 class="u-ttl__m">いよいよ、開演！ブルーイによる「音楽のルーツ」に感動！</h4>
					<div class="mb3">
						<p class="mb2">ステージにライトが灯され、インコグニートのブルーイによる別プロジェクト“シトラス・サン”が登場。普段なら、ここからジャズライブが始まるところですが、この日ばかりは主役は“子どもたち”。ブルーイはギターをマイクに持ち替えて、音楽のルーツについて語りはじめました。</p>
						<p class="mb2"><strong>「この世界で、最初の音楽は何だと思う？それはね、人の声なんだよ」</strong></p>
						<p>体中に響く迫力のヴォーカルから、音楽のルーツを知る旅が始まります。動物の皮を使った打楽器、木を使った笛。さらに管楽器やピアノが生まれ、人は感情を「音楽」という形を使って表していく。子どもたちにも分かるように、ゆっくりと語りかけるように話すブルーイの声に、引き込まれていきます。</p>
					</div>
					<div class="flex flex_around">
						<div class="w50">
							<figure class="u-fig u-position__center mb2_sp">
								<img data-src="<?php echo $img_url ?>/event/report-jazz/report-jazz_bluenote-tokyo03.jpg" retina-src="<?php echo $img_url ?>/event/report-jazz/report-jazz_bluenote-tokyo03@2x.jpg"
								 alt="" class="u-img__max">
								<figcaption class="u-fig__cap">
									<span style="text-align : right;">Photo by Yuka Yamaji</span>
								</figcaption>
							</figure>
						</div>
						<div class="w50">
							<figure class="u-position__center u-fig">
								<img data-src="<?php echo $img_url ?>/event/report-jazz/report-jazz_bluenote-tokyo04.jpg" retina-src="<?php echo $img_url ?>/event/report-jazz/report-jazz_bluenote-tokyo04@2x.jpg"
								 alt="" class="u-img__max">
								<figcaption class="u-fig__cap">
									<span style="text-align : right;">Photo by Yuka Yamaji</span>
								</figcaption>
							</figure>
						</div>
					</div>
					<h5 class="u-ttl__s">「子どもたちはステージの前へ！」</h5>
					<p>ブルーイの掛け声とともに、子どもたちがステージ前へ。<br><strong>ブルース・ジャズ・ヒップホップ…音楽の違いをダンサーと一緒に全身で体感！</strong>目の前でシトラス・サンの音楽を感じながら、音楽に身を委ねて体を動かす子どもたち。羨ましすぎる光景に、今日ばかりは子どもに戻りたくなってしまいました。</p>
					<p>さらに、子どもたちのイメージを元に「虹色の猫がイタリアにスパゲッティを買いに行く」というユニークな即興音楽を作ったり、天才ハーモニカ奏者レガ・ダウナを加え、マイルス・デイヴィスの「so
						what」を演奏したりと、とにかく豪華！この間、子どもたちはずっとステージの目の前！羨ましいです！</p>
					<h4 class="u-ttl__m">スペシャルゲスト日野皓正が加わり、会場全体のボルテージはマックスに</h4>
					<div class="flex flex_around">
						<div class="w50">
							<p>会場の空気が最高潮へと高まるその時に、<strong>日本が世界へ誇るトランぺッター奏者、日野皓正が登場！</strong>思わず身を乗り出す大人たちですが、今日の主役はやっぱり“子どもたち”。日野さんも演奏中、目の前の子どもにトランペットのピストンを押させてあげたり、楽器を手渡して一緒に演奏したりとスペシャルサービス満載です。「音を楽しむ」ということを、演奏を通して、教えていただいているような気がしました。</p>
						</div>
						<div class="w50">
							<figure class="u-fig">
								<img data-src="<?php echo $img_url ?>/event/report-jazz/report-jazz_bluenote-tokyo05.jpg" data-retina="<?php echo $img_url ?>/event/report-jazz/report-jazz_bluenote-tokyo05@2x.jpg"
								 alt="" class="u-img__max">
								<figcaption class="u-fig__cap">
									<span style="text-align : right;">Photo by Yuka Yamaji</span>
								</figcaption>
							</figure>
						</div>
					</div>
					<h4 class="u-ttl__m">最後は大人も子どももみんなで一緒にジャズパーティ！</h4>
					<p class="mb2">「パーティーの準備はできてる？大人たち！」<br>ブルーイの掛け声に、待ってました！と言わんばかりに、ステージに集まる大人たち。最後は大人も子どももみんなで踊って騒いで音楽を体感しました。<strong>目の前で見る、シトラス・サンの圧巻の演奏に、天才が奏でるトランペット。会場が1つになった瞬間でした。</strong></p>
					<figure class="u-position__center u-fig mb2">
						<img data-src="<?php echo $img_url ?>/event/report-jazz/report-jazz_bluenote-tokyo06.jpg" data-retina="<?php echo $img_url ?>/event/report-jazz/report-jazz_bluenote-tokyo06@2x.jpg"
						 alt="" style="max-width:740px;" class="u-img__max">
						<figcaption class="u-fig__cap">
							<span style="text-align : right;">Photo by Yuka Yamaji</span>
						</figcaption>
					</figure>
					<p class="mb5">しかし、サプライズはまだ終わりません。ステージが終わり、興奮冷めやらぬままロビーに戻ると、なんとブルーイとレガ・ダウナとの写真撮影＆サイン会が！子どもたちはプレゼントされた特製ノートにサインをもらって大喜び！最後まで豪華すぎるステージでした。</p>
					<div class="u-assist_overflow">
						<h4 class="u-ttl__m"><a href="<?php echo $base_url ?>/gift/article/bluenote.php" class="u-icon">ブルーノートグループ「ミュージックチャージ1,000円OFF」</a></h4>
						<div class="flex flex_around">
							<div class="w45">
								<figure class="img u-float__left u-only__pc">
									<img data-src="../../lib/img/gift/bluenote/gift-info.png" data-retina="../../lib/img/gift/bluenote/gift-info@2x.png"
									 alt="ご優待" style="max-width:299px;" class="u-img__max">
								</figure>
								<figure class="img u-float__left u-only__sp">
									<img data-src="../../lib/img/gift/bluenote/gift-info-sp.png" data-retina="../../lib/img/gift/bluenote/gift-info-sp@2x.png"
									 alt="ご優待" style="max-width:375px;" class="u-img__max">
								</figure>
							</div>
							<div class="w55">
								<p style="font-size: 1.4rem;">ブランシエラクラブでは会員さま向けにブルーノート東京、モーション・ブルー・ヨコハマ、コットンクラブでご利用いただける<strong>ブルーノートグループ『ミュージックチャージ1,000円OFF』</strong>優待サービスを実施しております。<br>お一人につき、通年で何度でもご利用いただけます（一部対象外の公演あり）。<br>ブランシエラクラブ会員さま1名につき同伴者3名さままで有効です。詳細は<a
									 href="<?php echo $base_url ?>/gift/article/bluenote.php" class="u-icon">こちら</a></p>
								<ul class="u-small u-clearfix">
									<li>※ミュージック・チャージは公演によって異なります。</li>
									<li>※<span class="u-color__red txt-strong">自由席</span>にのみご利用いただけます。</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="u-assist" style="line-height:2;">
						<strong>ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。<br>最新情報はメルマガでお知らせしますので、ぜひチェックしてください。</strong>
					</div>
				</div>
			</section>
		</div>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
