<?php
//base
include( "../../function.php" );
$content = get_id_data( '7001' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
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
		$panAry[] = array( "/magazine/index_wakuwaku.php", "Mr.わくわくメンテナンス講座" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
		<div class="main__wrapper">
			<section class="main__item">

				<h3 class="u-ttl__l">居室と外部をつなぐ大切な場所、安全と快適のカギを握ります。</h3>
				<p>毎日使用するけれど、なかなかメンテナンスが行き届かない場所、玄関扉とサッシについてご紹介します。統計を見ると、多くの犯罪が「窓」と「表出入口」を侵入手段としているように、セキュリティを考える上でも重要な場所です。</p>

				<h4 class="u-ttl__m">意外と見過ごされている玄関扉のメンテナンス</h4>
				<div class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol01/01.jpg"
					style="max-width:540px;"
					class="u-img__max">
				</div>

				<h5 class="u-ttl__s">■ 玄関扉・ドアクローザー</h5>
				<p>定期メンテナンスとして3年に1度はおすすめしたいのが、ドアの開閉調整。夏と冬では閉まり方が違うようにドアクローザーは意外と繊細です。通常2段階で閉まる速度を調整できますが、ネジのゆるみなどによって正常な動作をしなくなっている場合があります。さらにオイル漏れに気付いたら、それは交換のサインと思ってください。</p>

				<div class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol01/02.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol01/02.jpg"
					alt="ドアクローザーの調整"
					style="max-width:300px ;"
					class="u-img__max">
				</div>

				<h4 class="u-ttl__m">いざという時に備えて</h4>
				<h5 class="u-ttl__s">■ 扉丁番・ドアガード</h5>
				<p>地震が原因で扉枠がゆがむと扉の角が枠にあたって扉が開かなくなります。丁番のなかにスプリングを組み込んだ対震丁番<span class="u-color__red">※</span>に交換することによって、ある程度の扉枠のゆがみに対応し扉が開きます。<br>その際、ドアガードも対震型に交換する必要があります。</p>

				<div style="font-size: 90%; background: #f7f7f7; color: #666; padding: 10px 20px;" class="mb-inner">
					<small class="u-small"><span class="u-color__red">※</span>メーカー商品名</small>
				</div>

				<p class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol01/03.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol01/03.jpg"
					alt="ドアの開閉をスムーズにするための扉丁番の調整"
					style="max-width:300px ;"
					class="u-img__max"
					>
				</p>
				<h4 class="u-ttl__m">セキュリティは万全に</h4>
				<h5 class="u-ttl__s">■ ドアアイ</h5>
				<p>玄関扉の外にいる訪問者を確認せずにドアを開けるのは危険です。また、室内の光が扉の外側にもれることによって、在宅・不在を判断されてしまうケースがあります。そこで外部からの視線をシャットアウトしてくれるシャッター付きのドアアイがおすすめです。また、視界を200度まで広げることができるドアアイもあります。<br>
				</p>
				<div class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol01/04.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol01/04.jpg"
					alt="シャッター付きドアアイ"
					style="max-width: 300px;"
					class="u-img__max"
					>
				</div>
				<h5 class="u-ttl__s">■ 鍵</h5>
				<p> 鍵の複製が非常に簡単なこと、合いカギを作るのに抵抗のない人が多いこと、それらがトラブルの原因となっています。鍵の保管には注意を払い、紛失したらすぐに交換しましょう。</p>
				<h4 class="u-ttl__m">毎日の開閉のストレスから解放され、春風を思い切り取り込む！</h4>
				<p>サッシの開閉は、思ったより力が要ります。お年寄りや力のない女性にとってストレスのたまる結果に。心地よい春風をストレスなく取り込むにはどうすればよいでしょうか。</p>
				<div class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol01/05.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol01/05.jpg"
					alt="image"
					style="max-width:480px ;"
					class="u-img__max"
					>
				</div>

				<h4 class="u-ttl__m">清掃</h4>
				<p>レールにゴミがたまると、滑りが悪くなり重たいサッシがますます開けにくくなってしまいます。週に1度はこまめに掃除をしましょう。<br>
					アルミ部分のお手入れは、普通の汚れは水でぬらした雑巾で拭き取ります。汚れがひどい場合は、「台所用中性洗剤」もしくは使用用途に”サッシ“と書かれた住宅・家具用中性洗剤を使い、雑巾に洗剤を含ませ汚れを落とした後、充分に水洗いし乾いた布で水分をふきとります。ワイヤーブラシやスチールウール、金ベラは使わないでください。
				</p>

				<h4 class="u-ttl__m">部品の交換</h4>
				<h5 class="u-ttl__s">■ 戸 車</h5>
				<p>重たいサッシを支えている戸車はプラスチック製。摩耗した状態で使い続けるとレールが破損する原因となるので、交換をおすすめします。</p>
				<h5 class="u-ttl__s">■ ガラス押さえゴム</h5>
				<p>ゴムの汚れやカビは清潔感を損ない、老朽化によるゴムの硬化はすきま風の原因となります。リフレッシュも兼ねて、20年を目安に交換をおすすめします。</p>
				<h5 class="u-ttl__s">■ クレセント</h5>
				<p>クレセントのバネが壊れると、サッシを勢いよく閉めた時などに、ロックされてしまうことがあります。クレセントの交換も状況によっては必要です。<br>また、クレセントのネジのゆるみ等はご自身で調整できます。</p>
				<div class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol01/06.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol01/06.jpg"
					alt="クレセントの調整"
					style="max-width:300px ;"
					class="u-img__max"
					>
				</div>
			</section>

			<?php  include ($inc_path."/lib/inc/page/_magazine/__back-wakuwaku.php"); ?>

		</div>
	</article>
</main>

<?php
$toindex_url = "/magazine/index_wakuwaku.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
