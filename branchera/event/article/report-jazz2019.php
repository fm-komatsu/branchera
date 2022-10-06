<?php
//base
include ("../../function.php");
$content = get_id_data('4067');
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
								<img data-src="<?php echo $img_url ?>/event/report-jazz2019/main-v.jpg" data-retina="<?php echo $img_url ?>/event/report-jazz2019/main-v@2x.jpg"
								 alt="ブルーノート東京「JAZZ for CHILDREN」レポート" class="u-img__max u-only__pc">
								<img data-src="<?php echo $img_url ?>/event/report-jazz2019/main-v-sp.jpg" data-retina="<?php echo $img_url ?>/event/report-jazz2019/main-v-sp@2x.jpg"
								 alt="ブルーノート東京「JAZZ for CHILDREN」レポート" class="u-img__max u-only__sp">
								<figcaption class="u-fig__cap">
									<span style="text-align : right;">Photo by Yuka Yamaji</span>
								</figcaption>
							</figure>
						</h2>
						<p class="mb3">本格的なジャズライブを子どもたちと楽しむ特別プログラム、「JAZZ for CHILDREN」。昨年も大好評だったこのイベントに、今年もブランシエラクラブ会員さまをご招待！「こどもの日」にふさわしいひとときとなった、当日の模様をレポートいたします。</p>
					</div>
					<div class="u-assist">
						<div class="flex flex_center">
							<figure class="center_sp mb2_sp">
								<img data-src="<?php echo $img_url ?>/event/report-jazz2019/bluenote_logo.png" data-retina="<?php echo $img_url ?>/event/report-jazz2019/bluenote_logo@2x.png"
								 style="max-width:213px;" class="u-img__max" alt="ブルーノート東京 ロゴ">
							</figure>
							<div class="u-only__pc" style="margin-right:12px;"></div>
						</div>
						<hr>
						<div>
							<div>
								<p>国内外の一流アーティストが毎夜ステージを彩る、東京南青山の老舗ジャズクラブ。料理とお酒を楽しみながら音楽を堪能できる、まさに大人のための空間です。そんなブルーノートで、毎年開催される、“子ども向け”の特別プログラムに参加しました。</p>
							</div>
						</div>
					</div>
					<h3 class="u-ttl__m">洗練されたフロアの雰囲気に思わず緊張！</h3>
					<div class="u-clearfix">
						<div class="w45">
							<figure class="u-float__left">
								<img data-src="<?php echo $img_url ?>/event/report-jazz2019/report-jazz2019__img01.jpg" data-retina="<?php echo $img_url ?>/event/report-jazz2019/report-jazz2019__img01@2x.jpg"
								 alt="" style="max-width:360px;" class="u-img__max">
							</figure>
						</div>
						<div>
							<p>今年は異例の10連休となったゴールデンウィークも終盤の5月5日、まだ明るい14時半より会場オープン。中へ入ると、<strong>そこに広がっているのは照明を落としたムーディーな空間…</strong>。外の喧騒も、一瞬で忘れてしまうような雰囲気です。</p>
							<p>ライブが始まるまでのひとときは、ドリンクやフードを楽しみます。各テーブルをウェイターが行き来している風景は普段通りのはずですが、その席にちょこんと座っているのは、大勢の子どもたち！みなさま、洗練された空間にちょっぴり緊張しつつも、ワクワクした表情で開演を待っています。</p>
						</div>
					</div>
					<h3 class="u-ttl__m">ライブスタート！目前で繰り広げられる、迫力のサックス演奏</h3>
					<p>客席の照明が落ち、いよいよ開演！拍手に包まれながら登場したのは、<strong>世界的サックス奏者のデイヴ・コーズ</strong>です。テナーサックス、アルトサックスなど、大きさの異なるさまざまなサックスを楽曲ごとに持ち替えながら、迫力のインストゥルメンタルを次々と披露するデイヴ。<br><strong>子どもたちの顔のすぐそばまで近づき、生の音響や指使いを堪能</strong>させてくれます。その距離、わずか数センチ！<br>すっかり魅了された場内に向かって、日本語を交えながら挨拶する親日家のデイヴ。「子ども向けのショーは初めてだけど、とても楽しんでいるよ」という陽気なMCで、こちらの緊張もほぐれました。</p>
					<div class="flex flex_around">
						<div class="w50">
							<figure class="u-fig u-position__center mb2_sp">
								<img data-src="<?php echo $img_url ?>/event/report-jazz2019/report-jazz2019__img02.jpg" data-retina="<?php echo $img_url ?>/event/report-jazz2019/report-jazz2019__img02@2x.jpg"
								 alt="" style="max-width:360px;" class="u-img__max">
								<figcaption class="u-fig__cap">
									<span style="text-align : right;">Photo by Yuka Yamaji</span>
								</figcaption>
							</figure>
						</div>
						<div class="w50">
							<figure class="u-fig u-position__center">
								<img data-src="<?php echo $img_url ?>/event/report-jazz2019/report-jazz2019__img03.jpg" data-retina="<?php echo $img_url ?>/event/report-jazz2019/report-jazz2019__img03@2x.jpg"
								 alt="" style="max-width:360px;" class="u-img__max">
								<figcaption class="u-fig__cap">
									<span style="text-align : right;">Photo by Yuka Yamaji</span>
								</figcaption>
							</figure>
						</div>
					</div>
					<h3 class="u-ttl__m">ゲストヴォーカルが登場、名曲の数々で場内が一体に</h3>
					<div class="flex between mb2">
						<div class="w50">
							<figure class="u-position__center u-fig">
								<img data-src="<?php echo $img_url ?>/event/report-jazz2019/report-jazz2019__img04.jpg" retina-src="<?php echo $img_url ?>/event/report-jazz2019/report-jazz2019__img04@2x.jpg"
								 alt="" class="u-img__max">
								<figcaption class="u-fig__cap">
									<span style="text-align : right;">Photo by Yuka Yamaji</span>
								</figcaption>
							</figure>
						</div>
						<div class="w50">
							<p class="mb2">続いて、デイヴの紹介でステージに呼び込まれたのは、<strong>ゲストヴォーカルのヴァレリー・シンプソン</strong>。2011年に逝去した夫とのデュオ「アシュフォード＆シンプソン」として、一世を風靡してきたアーティストです。<br>真っ白な愛らしいドレスに身を包みながらも、全身を使ったパフォーマンスは実にパワフル！</p>
						</div>
					</div>
					<p>「アシュフォード＆シンプソン」は、ソングライターとして数多くの楽曲を提供してきたことでも知られており、チャカ・カーンに書き下ろされ、のちにホイットニー・ヒューストンにカバーされた『アイム・エブリ・ウーマン』も、そのひとつなのだそう。こうした<strong>名曲の数々が、メドレー形式で惜しみなく披露</strong>されると、場内のボルテージはますます上昇。バンドメンバーの巧みなコーラスも、ヴァレリーの歌を盛り立てます。<br>クライマックスは、映画『天使にラブ・ソングを2』でも知られる『エイント・ノー・マウンテン・ハイ・イナフ』。場内全員が体を揺らし、心地よい一体感に包まれました。</p>
					<h3 class="u-ttl__m">バンドメンバーとのセッション、客席に降りての演奏も</h3>
					<div class="flex flex_around">
						<div class="w50">
							<figure class="u-fig u-position__center mb2_sp">
								<img data-src="<?php echo $img_url ?>/event/report-jazz2019/report-jazz2019__img05.jpg" data-retina="<?php echo $img_url ?>/event/report-jazz2019/report-jazz2019__img05@2x.jpg"
								 alt="" style="max-width:360px;" class="u-img__max">
								<figcaption class="u-fig__cap">
									<span style="text-align : right;">Photo by Yuka Yamaji</span>
								</figcaption>
							</figure>
						</div>
						<div class="w50">
							<figure class="u-fig u-position__center">
								<img data-src="<?php echo $img_url ?>/event/report-jazz2019/report-jazz2019__img06.jpg" data-retina="<?php echo $img_url ?>/event/report-jazz2019/report-jazz2019__img06@2x.jpg"
								 alt="" style="max-width:360px;" class="u-img__max">
								<figcaption class="u-fig__cap">
									<span style="text-align : right;">Photo by Yuka Yamaji</span>
								</figcaption>
							</figure>
						</div>
					</div>
					<p>素晴らしいひとときを堪能させてくれたヴァレリーがステージを去ると、デイヴが改めてバンドメンバーを紹介。それぞれとのセッションタイムが始まりました。 まずは、ギタリストのアダム・ホーリー。デイヴとセッションしながら<strong>客席へ降り、子どもたちの目の前で演奏</strong>してみせます。こんな豪華な一幕も、「JAZZ for CHILDREN」ならではといえるでしょう。 続いて、ベーシストのクリス・ウォーカー。ベーシストとは思えないほどの美声による弾き語りと、デイヴのサックスが絡み合うと、思わずうっとりしてしまうほどのあでやかさ。 一流プレイヤー同士の贅沢な競演に、大人も子どもも酔いしれたセッションタイムでした。</p>
					<h3 class="u-ttl__m">最後は、日本のあの歌も！子どもたちの笑顔と共に終演</h3>
					<div class="flex flex_around">
						<div class="w50">
							<figure class="u-position__center u-fig mb2">
								<img data-src="<?php echo $img_url ?>/event/report-jazz2019/report-jazz2019__img07.jpg" data-retina="<?php echo $img_url ?>/event/report-jazz2019/report-jazz2019__img07@2x.jpg"
								alt="" style="max-width:360px;" class="u-img__max">
								<figcaption class="u-fig__cap">
									<span style="text-align : right;">Photo by Yuka Yamaji</span>
								</figcaption>
							</figure>
						</div>
						<div class="w50">
							<p class="mb2">「今日この日に、東京に来られたことを嬉しく思う。なぜなら新しい時代（令和）に変わったから」と、再び日本語で語りかけるデイヴ。</p>
							<p>「子どもたちにとって、今日のライブがジャズの魅力を感じるきっかけになることを願っているよ」と告げて贈られたのは、なんと<strong>日本の童謡『こいのぼり』</strong>！思いのこもった選曲に感動する大人たちと、よく知っているメロディに笑みがあふれる子どもたち。</p>
						</div>
					</div>
					<p class="mb5 mb3_sp">そして、再びステージへ登場したヴァレリーも交えて披露されたラストナンバーは、ジャクソン5の『アイル・ビー・ゼア』。<strong>場内全員が大合唱、高揚感に包まれながらフィナーレを迎えました。</strong>終演後は、子どもたちに記念のメモ帳がプレゼントされたほか、写真撮影＆サイン会も開催。デイヴとバンドメンバーは、それぞれ優しい笑顔で子どもたちに応えていました。<br>今回も盛りだくさんの内容だった「JAZZ for CHILDREN」。早くも次回開催への期待が高まります！</p>
					<figure class="u-position__center u-fig mb2">
								<img data-src="<?php echo $img_url ?>/event/report-jazz2019/report-jazz2019__img08.jpg" data-retina="<?php echo $img_url ?>/event/report-jazz2019/report-jazz2019__img08@2x.jpg"
								alt="" style="max-width:740px;" class="u-img__max">
								<figcaption class="u-fig__cap">
									<span style="text-align : right;">Photo by Yuka Yamaji</span>
								</figcaption>
							</figure>
					<h3 class="u-ttl__m">参加していただいた方の声</h3>

				<div class="event_comment">
					<div class="balloon balloon_widthmax mb man">
						<div class="inner">
							<div>
								<p>子供に本当のJazzの魅力を感じ取ってもらうことができました。大人の世界も体験させてあげられ本当に楽しかったです。</p>
								<h5 class="h5_event">50代男性</h5>
							</div>
						</div>
					</div>
					<div class="balloon balloon_widthmax mb woman">
						<div class="inner">
							<div>
								<p>素敵な公演でした！子ども達は普段、ジャズを聴く機会はあまりないのですが、迫力のある生演奏を聴くことができてとても喜んでいて、また行きたいと言っていました。そして何より、私自身がとても楽しめました。</p>
								<h5 class="h5_event">40代女性</h5>
							</div>
						</div>
					</div>
					<div class="balloon balloon_widthmax mb man">
						<div class="inner">
							<div>
								<p>ブルーノート東京について、妻と私は年二回ほど訪れておりました。 常々、子どもを連れていきたいと話していたところに、今回のご招待通知を見て、申込みをしました。子どもも「ブルーノート」の話を聞いていたものの、実際にたずねてみると、普段は味わえない迫力と雰囲気に終始興奮をしておりました。子どもはジャズ自体の馴染みはなかったのですが、全体の雰囲気に馴染み、楽しんでいたようです。最後には「こいのぼり」の曲も演奏してくださり、また訪れたいと言っています。</p>
								<h5 class="h5_event">40代男性</h5>
							</div>
						</div>
					</div>
				</div>
					<div class="u-assist_overflow">
						<h3 class="u-ttl__m"><a href="<?php echo $base_url ?>/gift/article/bluenote.php" class="u-icon">ブルーノートグループ「ミュージックチャージ1,000円OFF」</a></h3>
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
						<span class="u-font__bold">ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。<br>最新情報はメルマガでお知らせしますので、ぜひチェックしてください。</span>
					</div>
				</div>
			</section>
		</div>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
