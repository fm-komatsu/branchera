<?php
//base
include( "../../function.php" );
$content = get_id_data( '1013' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '　1/2」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_technology.php", "長谷工の技術・サービス" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
		<div class="main__wrapper">
			<section class="main__item">
				<h3>
					<img
					data-src="../../lib/img/magazine/senior-urawa/img01.png"
					data-srcset="../../lib/img/magazine/senior-urawa/img01-sp@2x.png 500w ,../../lib/img/magazine/senior-urawa/img01@2x.png"
					alt="センチュリーハウス武蔵浦和"
					style="max-width:720px;"
					class="u-img__max">
				</h3>

				<h4 class="u-ttl__m">高齢者向け住宅の新ブランド「センチュリーハウス」第二弾</h4>

				<div class="u-float__left u-position__center">
					<img
					data-src="../../lib/img/magazine/senior-urawa/img02@2x.png"
					alt="センチュリーハウス武蔵浦和"
					width="299"
					height="225" />
				</div>
				<p>30年にわたり介護付有料老人ホームを運営してきた（株）長谷工シニアウェルデザイン。入居費用を抑えながら充実した介護・健康サービスを追求し、「終の住まい」を実現した新ブランド「センチュリーハウス」の第二弾です。デイサービスも併設されております。</p>
				<div class="u-assist" style="overflow:hidden;">
					<h5><strong>センチュリーハウス武蔵浦和</strong></h5>
					<ul class="u-list__ul">
						<li>類型サービス付き高齢者向け住宅</li>
						<li>一般型特定施設入居者生活介護　指定</li>
						<li>公益社団法人全国有料老人ホーム協会加盟ホーム</li>
					</ul>
					<address class="u-small">所在地 ： 埼玉県さいたま市南区鹿手袋4-32-30<br>最寄駅 ： ＪＲ埼京線・武蔵野線「武蔵浦和」駅</address>
				</div>
				<p>通常のサービス付高齢者向け住宅は、介護サービスが必要な場合外部の業者と別契約になりますが、一般型特定施設入居生活介護の指定により、介護は有料老人ホームと同じ様に住まいと介護・健康管理・食事サービスが一体となって提供されます。</p>

				<h4 class="u-ttl__m">24時間365日常駐の介護スタッフが、お身体の状況に合わせた介護サービスを提供。</h4>
				<div class="u-float__right u-position__center">
					<img
					data-src="../../lib/img/magazine/senior-urawa/img03.png"
					data-retina="../../lib/img/magazine/senior-urawa/img03@2x.png"
					alt="往診や訪問看護を実施する在宅療養支援診療所"
					style="max-width:291px ;"
					class="u-img__max" />
				</div>
				<p>軽度から重度介護まで常時介護が必要な方や、認知症の方、日常生活に不安を抱える方などを対象に、24時間365日包括サービスを実施しています。食事や入浴介助など、常に介護スタッフが暮らしの全般をサポート。日勤（9時～18時）で看護師が常勤し、日々ご入居者のお身体を見守ります。</p>
				<br clear="right">
				<div class="u-float__left u-position__center">
					<img
					data-src="../../lib/img/magazine/senior-urawa/img04.png"
					data-retina="../../lib/img/magazine/senior-urawa/img04@2x.png"
					alt="往診や訪問看護を実施する在宅療養支援診療所"
					style="max-width:291px ;"
					class="u-img__max"
					>
				</div>
				<p>また、3カ所の近隣医療機関と協力体制を整えて健康管理をしっかりサポート。<br>24時間体制で往診や訪問看護を実施する「在宅療養支援診療所」と提携しているため、夜間や休日の緊急時にも迅速に対応しています。</p>
				<br clear="all">

				<h4 class="u-ttl__m">プライベートとコミュニケーションの両面から、理想のライフスタイルをサポート。</h4>
				<div class="u-float__left">
					<img
					data-src="../../lib/img/magazine/senior-urawa/img05.png"
					data-retina="../../lib/img/magazine/senior-urawa/img05@2x.png"
					alt="プライバシーに配慮したバリアフリー設計の居室"
					style="max-width:227px ;"
					class="u-img__max u-only__pc"
					>
				</div>
				<p>約18～20㎡の個室には、洗面台、トイレ、エアコン、介護用ベッド、クローゼットなど、バリヤフリー設計の設備を完備しています。</p>
				<p>お食事やコミュニケーションの場となるリビング・ダイニングは各階に配置。憩いのスペースや各種リハビリ・アクティビティ、椅子に座ったまま行う「健康リハビリ体操」など、さまざまなコミュニケーションの場となっています。</p>
				<p>浴室は、お身体の状況に合わせて「個浴」「リフト浴」、「寝台浴」を完備。<br>すべてプライバシーに配慮した個室仕様で、ゆったりとした時間をお過ごしいただける空間となっています。</p>

				<ul class="u-column__3 u-position__center">
					<li class="u-column__item">
						<img
						data-src="../../lib/img/magazine/senior-urawa/img06.png"
						data-retina="../../lib/img/magazine/senior-urawa/img06@2x.png"
						alt="手すりのついたトイレ"
						style="max-width: 229px;"
						class="u-img__max"
						>
					</li>
					<li class="u-column__item">
						<img
						data-src="../../lib/img/magazine/senior-urawa/img07.png"
						data-retina="../../lib/img/magazine/senior-urawa/img07@2x.png"
						alt="プライベートを重視した「個浴」"
						style="max-width:228px ;"
						class="u-img__max"
						>
					</li>
					<li class="u-column__item">
						<img
						data-src="../../lib/img/magazine/senior-urawa/img08.png"
						data-retina="../../lib/img/magazine/senior-urawa/img08@2x.png"
						alt="寝たきりの方も負担の少ない「寝台浴」"
						style="max-width:227px ;"
						class="u-img__max"
						>
					</li>
				</ul>

				<h4 class="u-ttl__m">四季の移り変わりを感じて、心身ともに充実した毎日を送る、イベント・アクティビティ。</h4>
				<div class="u-float__right u-position__center">
					<img
					data-src="../../lib/img/magazine/senior-urawa/img09.png"
					data-retina="../../lib/img/magazine/senior-urawa/img09@2x.png"
					alt="節分イベント"
					style="max-width: 264px;"
					class="u-img__max">
					<br>
					<img
					data-src="../../lib/img/magazine/senior-urawa/img10.png"
					data-retina="../../lib/img/magazine/senior-urawa/img10@2x.png"
					alt="武蔵浦和夏祭り～初陣～"
					style="max-width: 264px;"
					class="u-img__max"
					>
				</div>
				<p>節分、お花見、夏祭り、敬老パーティー、ハロウィンなど季節を感じるイベントが豊富に催されます。特に夏祭りは、地域にお神輿がホームに訪れたり、近隣住民の皆さまと盆踊りを楽しんだりする賑やかなイベントとして人気です。</p>
				<p>また、外食ツアーやドライブツアーなども定期的に開催。<br>いつもと違う環境で思い出にのこる充実した一日を過ごしていただいています。</p>
				<p>イベントの内容は、楽しい日常生活を叶えられるよう、介護スタッフはもちろん、ご入居者、ご家族からのご意見も参考にして、一緒につくりあげています。</p>

				<br clear="all">
			</section>

			<section class="main__item">

				<p class="center" style="padding-top: 24px;">
					<a class="op" href="<?php echo $base_url ?>/gift/article/nursing.php">
						<img
						data-src="../../lib/img/magazine/senior-nippori/img-gift.png"
						data-srcset="../../lib/img/magazine/senior-nippori/img-gift-sp@2x.png 500w , ../../lib/img/magazine/senior-nippori/img-gift@2x.png"
						alt="会員さま限定特典"
						class="u-img__max">
					</a>
				</p>

			</section>

			<nav class="u-pager">
				<div class="u-pager__ttlwrap"><h6 class="u-pager__ttl"><a href="senior-urawa2.php" class="u-pager__link"><span class="u-pager__text">スタッフに、いろいろ聞いてみました①</span></a></h6></div>
				<ul class="u-pager__row">
					<li class="u-pager__item"><a href="senior-service.php">1</a></li>
					<li class="u-pager__item active"><a href="senior-urawa.php">2</a></li>
					<li class="u-pager__item"><a href="senior-urawa2.php">3</a></li>
					<li class="u-pager__item"><a href="senior-nippori.php">4</a></li>
					<li class="u-pager__item"><a href="senior-nippori2.php">5</a></li>
					<li class="u-pager_nextwrap"><a href="senior-urawa2.php" class="u-pager_next">　</a></li>
				</ul>
			</nav>


		</section>
	</article>
</main>

<?php
$toindex_url = "/magazine/index_technology.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
