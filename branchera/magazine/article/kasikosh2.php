<?php
//base
include ("../../function.php");
$content = get_id_data('1004');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「'.$pageTtl.'　2/2」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main kasikosh">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_technology.php", "長谷工の技術・サービス" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include ($inc_path."/lib/inc/page/_gift/__main-header.php");
		?>
		<div class="main__wrapper">
			<section class="main__item">
				<h3 class="u-ttl__l">長谷工のリサイクルショップ「カシコシュ」 Q&amp;Aコーナー</h3>
				<img
				data-src="../../lib/img/magazine/kasikosh/img05.png"
				data-retina="../../lib/img/magazine/kasikosh/img05@2x.png"
				data-srcset="../../lib/img/magazine/kasikosh/img05-sp@2x.png 666w ,../../lib/img/magazine/kasikosh/img05@2x.png"
				alt="長谷工のリサイクルショップ「カシコシュ」 Q&Aコーナー"
				style="max-width:720px;"
				class="u-img__max mb3">

				<div class="ex2">
					<div class="inner">
						<p>こんにちは、遠藤さん。本日はよろしくお願いいたします。</p>
					</div>
				</div>
				<div class="balloon">
					<div class="inner">
						<p>「カシコシュ」では常にいい品はないかと目を光らせています。今日は、会員さまからご質問があったと聞き、急いで駆け付けました。</p>
					</div>
				</div>

				<div class="ex2">
					<div class="inner">
						<p>ありがとうございます。それでは早速会員さまからのご質問に直接お答えいただけますでしょうか。</p>
					</div>
				</div>
			</section>

			<section class="main__item">
				<h4 class="u-ttl__m u-icon__q">カシコシュと他のリサイクルショップの一番の違いはなんですか？</h4>
				<div class="balloon">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">グループ力を活かした豊富な品揃え</h5>
							<p>「カシコシュ」の特長は充実した仕入れネットワークだから実現できる豊富な品揃えです。衣料品はもちろん、家具や家電、和装品、工具などかなり幅広い商品を扱っています。</p>
							<p>お客さまからも「売り場が広くて、いろんなモノがあるので、宝探しをしているみたい」というお言葉をいただいています。何度も足を運んでくださるお客様が多く、リピーター率70％超を達成しています。</p>
							<div class="u-position__center">
								<img
								data-src="../../lib/img/magazine/kasikosh/img06.png"
								data-retina="../../lib/img/magazine/kasikosh/img06@2x.png"
								data-srcset="../../lib/img/magazine/kasikosh/img06-sp@2x.png 666w,../../lib/img/magazine/kasikosh/img06@2x.png"
								alt="カシコシュ相模原店店内 豊富な品揃え"
								style="max-width: 593px;"
								class="u-img__max"
								>
							</div>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">査定の際に気を付けているポイントを教えてください</h4>
				<div class="balloon">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">カテゴリーごとに専門スタッフを配置し査定力を高める！</h5>
							<div class="u-float__left">
								<img
								data-src="../../lib/img/magazine/kasikosh/img07.png"
								data-retina="../../lib/img/magazine/kasikosh/img07.png"
								alt="カテゴリーごとに専門スタッフを配置"
								style="max-width: 210px;"
								class="u-img__max not-w100"
								>
							</div>
							<p>商品カテゴリーが幅広く、レア物やマニアックな品が多いのも「カシコシュ」の特長です。そこで、「カシコシュ」ではカテゴリーごとに専門スタッフを配置し、査定力の向上に取り組んでいます。</p>
							<p>さまざまな情報を集めて勉強することはもちろん、実際に商品の手入れやPOP作成、値付けなどを繰り返すことで知識を高め、査定力を磨いています。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">カシコシュの仕入れの特長と強みについて教えてください</h4>
				<div class="balloon">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">暮らす方の声から生まれたユニークでエコなリサイクルの仕組み</h5>
							<p>そもそも「カシコシュ」は「増え続けるものをどうしよう？」という、マンションに暮らす方の声から生まれました。</p>
							<p>そして、長谷工グループ各社が携わった数多くのマンションにお住まいの方から不用品を買取し、必要とする方に還元する独自の仕組みは、ユニークでエコなビジネスモデルだという評価をいただき、2010年度にグッドデザイン賞を受賞いたしました。</p>
						</div>
					</div>
				</div>


				<h4 class="u-ttl__m u-icon__q">マンション出張買取はどのように実施するのですか？</h4>
				<div class="balloon">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">一都三県を対象に、毎週末マンションへ出張買取に</h5>
							<div class="u-only__pc">
								<img
								data-src="../../lib/img/magazine/kasikosh/img08.png"
								data-retina="../../lib/img/magazine/kasikosh/img08@2x.png"
								alt="マンション出張買取"
								style="max-width: 597px;"
								class="u-img__max"
								>
							</div>
							<div class="img u-only__sp mgn">
								<img
								data-src="../../lib/img/magazine/kasikosh/img08-sp.png"
								data-retina="../../lib/img/magazine/kasikosh/img08-sp@2x.png"
								alt="マンション出張買取"
								style=""
								class="u-img__max"
								>
							</div>
							<p>マンションの理事会や管理組合さまから依頼を受け、土日祝日に専門スタッフがお伺いし、店舗と同じようにその場で査定・買取を行なっております。週末はお出かけの予定がある方も多く、また長谷工の携わるマンションは大規模物件が多いため、1つのマンションに対して土日2日間かけて出張買取を行なうケースが多いです。</p>
							<p>トラックをレンタルするため、対象となるのは一都三県のみですが、毎週末必ず依頼が入っており、年間50以上ものマンションで出張買取をしています。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">WEBでの宅配買取について教えてください</h4>
				<div class="balloon">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">全国各地のお客様に、気軽にご利用いただいています</h5>
							<p>本格的にWEBでの宅配買取をスタートしたのは2014年10月で、日は浅いのですが既に当店買取シェアの10％を占めるようになっています。</p>
							<p>店舗から遠方で、店頭買取や出張買取での対応ができないお客さまには、WEB宅配買取をご利用いただいております。お客さまには安心してご利用いただけるよう個人情報は十分注意をして取り扱っております。</p>
							<p>また、無料宅配キットやスピーディな査定・入金にも評価をいただいています。</p>
						</div>
					</div>
				</div>

				<div class="balloon">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">WEB宅配買取専属の部署も設置</h5>
							<p>WEB宅配買取の査定も「カシコシュ相模原店」で行なっています。専属の部署を設置し、店舗と同じようにカテゴリーごとに担当を決め、しっかりとした知識に基づいて査定できる環境を整えています。</p>
							<div class="u-position__center">
								<img
								data-src="../../lib/img/magazine/kasikosh/img09.png"
								data-retina="../../lib/img/magazine/kasikosh/img09@2x.png"
								data-srcset="../../lib/img/magazine/kasikosh/img09-sp@2x.png 666w ,../../lib/img/magazine/kasikosh/img09@2x.png"
								alt="WEB宅配買取専属の部署も設置"
								style="max-width: 598px;"
								class="u-img__max">
							</div>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">リサイクルショップを利用した事のない方の為にも、カシコシュの特徴を教えてください</h4>
				<div class="balloon">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">お客様がお持込みいただいたものは、なるべくお返しをしない</h5>
							<div class="u-float__left u-position__center">
								<img
								src="../../lib/img/magazine/kasikosh/img11.png"
								data-retina="../../lib/img/magazine/kasikosh/img11@2x.png"
								style="max-width:260px;"
								class="u-img__max">
							</div>
							<p>カシコシュではお客さまが買取でお持込みいただいた商品は、なるべくすべて買取できるよう努めております。</p>
							<p>例えば、ボタンが取れてしまった衣料品や、使用済みの食器類など、まだまだ使用できるが、買取が難しい商品類があります。こういった商品類は、他のリサイクルショップでは値段が付かずお客さまへお返しになってしまうことが多いようですが、カシコシュでは、海外リユースにまわすことによって、なるべくお客さまにお返ししないよう努めております。</p>

						</div>
					</div>
				</div>

				<div class="balloon">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">展示未使用品や新古品の品揃えに自信があります！</h5>
							<div class="u-float__left u-position__center">
								<img
								data-src="../../lib/img/magazine/kasikosh/img12.png"
								data-retina="../../lib/img/magazine/kasikosh/img12@2x.png"
								alt="新古品の品揃えに自信"
								style="max-width: 260px;"
								class="u-img__max not-w100"
								>
							</div>
							<p>マンションのモデルルームなどで展示されている、おしゃれな未使用品の家具が驚きの価格で店頭に並ぶこともあります。またメーカーの滞留在庫や余剰在庫などの新古品の品揃えも豊富に取り揃えております。</p>
							<p>こうした長谷工グループのネットワークを生かした商品仕入れは、カシコシュの大きな魅力になっていると思います。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">実際に利用されている方の声を教えてください</h4>
				<div class="balloon">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">WEBサイトに載っている商品は、本当に写真と同じ状態なの？</h5>
							<div class="u-float__left u-position__center">
								<img
								data-src="../../lib/img/magazine/kasikosh/img21.png"
								data-retina="../../lib/img/magazine/kasikosh/img21@2x.png"
								alt="撮影はプロの専属カメラマン"
								style="max-width: 262px;"
								class="u-img__max"
								>
							</div>
							<p>中古品は一点一点状態が異なるため、WEBでの販売の際は「本当にこの写真と同じ状態なの？」と思う方が多いようです。カシコシュでは商品の状態を正確にお客さまにお伝えするため、撮影はプロの専属カメラマンにお願いしております。</p>
							<p>またお客さまからのお問い合わせに関しても、迅速に対応できる体制を整えることで、今までに非常に多くのお客さまから満足の声をいただいております。</p>
							<br class="all">
							<a href="http://review.rakuten.co.jp/shop/4/296954_296954/1.1/" target="_blank" rel="nofollow" class="u-btn_l u-icon">お客さまの声はこちら</a>
						</div>
					</div>
				</div>

				<div class="balloon">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">すべての商品に対して責任を持って査定</h5>
							<p>もう1つ、すごく印象に残っているエピソードがあります。あるマンション出張買取で、「私は使用しないので誰か使っていただける人を探してほしい」と依頼を受けたバッグがありました。それは、高級ブランドの限定品でした。</p>
							<p>「手放してもよろしいのですか？」と伺うと、「持っていても使わないし、せっかくなら使う方に持っていてもらいたい」とおっしゃいました。その言葉を聞き、この方は本当にこの品を大切に考えているのだなと実感しましたし、だからこそ私たちはすべての商品に対し、しっかりと適正に査定する責任があると再認識しました。</p>
							<div class="img">
								<img
								data-src="../../lib/img/magazine/kasikosh/img13.png"
								data-retina="../../lib/img/magazine/kasikosh/img13@2x.png"
								alt="すべての商品に対して責任を持って査定"
								style="max-width: 596px;"
								class="u-img__max"
								>
							</div>
						</div>
					</div>
				</div>

				<p class="u-position__center mb-inner">
					<img
					data-src="../../lib/img/magazine/kasikosh/img20.png"
					data-retina="../../lib/img/magazine/kasikosh/img20@2x.png"
					data-srcset="../../lib/img/magazine/kasikosh/img20-sp@2x.png 666w,../../lib/img/magazine/kasikosh/img20@2x.png"
					alt="なるほど、長谷工グループならではの安定した仕入で状態のいい商品が揃い、査定にも細心の注意を払っているから70%もの方がリピーターになっているのですね。「カシコシュ」はやはり生活空間（住まい）から生まれる「モノ」を大切に活かしてきた長谷工だからこそ生まれたサービスだと感じました。"
					style="max-width: 602px;"
					class="u-img__max"
					>
				</p>

				<div class=" mb-inner u-position__center">
					<a href="<?php echo $base_url; ?>/gift/article/kasikosh.php">
						<img
						data-src="../../lib/img/magazine/kasikosh/img-merit.png"
						data-retina="../../lib/img/magazine/kasikosh/img-merit@2x.png"
						alt=""
						style="max-width: 524px;"
						class="u-img__max"
						>
					</a>
				</div>
			</section>

			<section class="main__item">
				<h4 class="u-ttl__m">カシコシュ各店舗のご案内</h4>
				<div class="k-btn">
					<ul class="k-btn__row">
						<li class="k-btn__item"><a href="http://www.haseko.co.jp/kasikosh/store/oume/" target="_blank" rel="nofollow">
							<img
							data-src="../../lib/img/magazine/kasikosh/btn-01.png"
							data-retina="../../lib/img/magazine/kasikosh/btn-01@2x.png"
							alt="カシコシュ青海新町店"
							class="u-img__max"
							>
						</a></li>
						<li class="k-btn__item"><a href="http://sellinglist.auctions.yahoo.co.jp/user/kasikosh" target="_blank" rel="nofollow">
							<img
							data-src="../../lib/img/magazine/kasikosh/btn-03.png"
							data-retina="../../lib/img/magazine/kasikosh/btn-03@2x.png"
							alt="カシコシュヤフオク店"
							class="u-img__max"
							>
						</a></li>
					</ul>
				</div>

				<small class="u-small">
					<span>※掲載の情報は2015年7月現在のものです。</span>
				</small>
			</section>

			<nav class="u-pager">
				<ul class="u-pager__row">
					<li class="u-pager__item "><a href="kasikosh.php">1</a></li>
					<li class="u-pager__item active"><a href="kasikosh2.php">2</a></li>
				</ul>
			</nav>

		</div>
	</article>
</main>

<?php
$toindex_url = "/magazine/index_technology.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
