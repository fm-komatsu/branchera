<?php
//base
include ("../../function.php");
$content = get_id_data('1012');
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

<main class="main senior-nippori">
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
			<h3>
				<div class="product-img center mb4">
					<div class="u-only__pc mb2">
						<img
						data-src="../../lib/img/magazine/senior-nippori/img13.png"
						data-retina="../../lib/img/magazine/senior-nippori/img13@2x.png"
						alt="「長谷工あんしん見守りサービス」 Q&Aコーナー"
						style="max-width:720px;"
						class="u-img__max"
						>

					</div>
					<img
					data-src="../../lib/img/magazine/senior-nippori/img14.png"
					data-retina="../../lib/img/magazine/senior-nippori/img14@2x.png"
					alt="「ライフ＆シニアハウス日暮里」ハウス長　大城真紀"
					style="max-width:386px;"
					class="u-img__max"
					>
				</div>
			</h3>



			<div class="ex2">
				<div class="inner">
					<div>
						<p>こんにちは、大成さん。本日はよろしくお願いします。<br>「ライフ＆シニアハウス日暮里」はとても開放的なハウスですね。</p>
					</div>
				</div>
			</div>
			<div class="balloon">
				<div class="inner">
					<div>
						<div class="fr img">
							<img
							data-src="../../lib/img/magazine/senior-nippori/img15.png"
							data-retina="../../lib/img/magazine/senior-nippori/img15@2x.png"
							alt="image"
							style="max-width: 206px;"
							class="u-img__max not-w100"
							>
						</div>
						<p>はい。地域の方も自由に出入りができ、ハウスに親しんでいただきたいという想いから、塀をなくし施設内の中庭や道も通り抜けできるようオープンにしました。ハウスの方もコーヒーを飲みながら人が行き交う姿を楽しそうに眺めています。</p>
						<p>高齢者の方は、人の声や動き、生活を感じながら暮らすことがとても大切なのです。ここにいるだけで、社会とのつながりを感じられる環境づくりにこだわりました。</p>
					</div>
				</div>
			</div>

			<h4 class="u-ttl__m u-icon__q">こちらのハウスでは、地域の方との結びつきを大切にされているようですが。</h4>
			<div class="balloon">
				<div class="inner">
					<div>
						<p>ハウスと町内会で災害時相互協定を結んでいて、万一、ハウスが夜間火事になってしまったときなどに、町内会のレス
							キュー隊が駆けつけてくれます。また、大きな地震などの災害が起こったときには、ハウスを避難所として地域の方に
							利用していただくようになっています。ハウスのイベントには、地域のお店の方に露店を出していただくのですよ。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">「ライフハウス」の入居者のみなさまとのコミュニケーションで心がけていることはなんですか？</h4>
				<div class="balloon">
					<div class="inner">
						<div>
							<p>ライフのご入居者は、お元気なうちから入居されるので、次第にケアが必要になってくることを経験することになります。
								その兆候を見逃さず早めにサポートして、できるだけ不安や心痛を少なくするフォローをするようにしています。</p>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">「シニアハウス」の入居者のみなさまとのコミュニケーションで心がけていることはなんですか？</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<div class="fr img">
									<img
									data-src="../../lib/img/magazine/senior-nippori/img16.png"
									data-retina="../../lib/img/magazine/senior-nippori/img16@2x.png"
									alt="image"
									style="max-width: 218px;"
									class="u-img__max"
									>
								</div>
								<p>お元気なときに大切にしていた習慣をそのまま持ち続けていただけるようフォローするようにしています。</p>
								<p>例えば月に1回外食を楽しんでいた方には、ご入居後もスタッフが付き添ってお好みのお店へ行くなど、なるべく入居前と同じ楽しみを続けるようにサポートしています。</p>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">ライフ＆シニアハウスの良いところはなんですか？</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<div class="fr img"><img class="not-w100" src="../../lib/img/magazine/senior-nippori/img17.png" alt=""></div>
								<p>ライフハウスにお住まいのときにお人柄を知り、将来のご希望をご本人からお聞きできるので、シニアハウスに住み替えたときにもその意向を大切にケアすることができるところです。</p>
								<p>将来に渡って思い描いた人生を送れるようにお手伝いをさせていただいています。</p>
							</div>
						</div>
					</div>


					<div class="img section mb4">
						<img
						data-src="../../lib/img/magazine/senior-nippori/img18.png"
						data-retina="../../lib/img/magazine/senior-nippori/img18@2x.png"
						alt="image"
						style="max-width:602px ;"
						class="u-img__max"
						>
					</div>

					<p><a class="op" href="<?php echo $base_url ?>/gift/article/nursing.php" >

						<img
						data-src="../../lib/img/magazine/senior-nippori/img-gift.png"
						data-retina="../../lib/img/magazine/senior-nippori/img-gift@2x.png"
						alt="image"
						style="max-width: 720px;"
						class="u-img__max u-only__pc center"
						>
						<img
						data-src="../../lib/img/magazine/senior-nippori/img-gift-sp.png"
						data-retina="../../lib/img/magazine/senior-nippori/img-gift-sp@2x.png"
						alt="image"
						style=""
						class="u-img__max u-only__sp center"
						>
					</a></p>
				</section>

				<nav class="u-pager">
					<ul class="u-pager__row">
						<li class="u-pager__item"><a href="senior-service.php">1</a></li>
						<li class="u-pager__item"><a href="senior-urawa.php">2</a></li>
						<li class="u-pager__item"><a href="senior-urawa2.php">3</a></li>
						<li class="u-pager__item"><a href="senior-nippori.php">4</a></li>
						<li class="u-pager__item active"><a href="senior-nippori2.php">5</a></li>
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
