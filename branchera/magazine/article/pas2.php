<?php
//base
include ("../../function.php");
$content = get_id_data('1003');
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

				<h3 class="u-ttl__l">「長谷工プレミアムアフターサービス<sup class="u-small">&reg;</sup>」Q&amp;Aコーナー</h3>
				<img
				data-src="../../lib/img/magazine/pas/img03@2x.png"
				data-retina="../../lib/img/magazine/pas/img03@2x.png"
				alt="Q&Aコーナー"
				style="max-width:720px;"
				class="u-img__max mb3">


				<div class="ex2">
					<div class="inner">
						<div>
							<p>こんにちは。突然の登場で驚いてしまいました。</p>
						</div>
					</div>
				</div>
				<div class="balloon">
					<div class="inner">
						<div>
							<p>はい、驚かせてすみません。「長谷工プレミアムアフターサービス」は24時間365日受付をしていますので、会員さまからご質問があったと聞いて駆けつけてきました。</p>
						</div>
					</div>
				</div>
				<div class="ex2">
					<div class="inner">
						<div>
							<p>ありがとうございます。では、会員さまからのご質問に直接お答えいただけますでしょうか。</p>
						</div>
					</div>
				</div>

			</section>
			<section class="main__item">

				<h4 class="u-ttl__m u-icon__q">アフターサービスで一般的に実施されるサービスを簡単に教えてください。</h4>
				<div class="balloon">
					<div class="inner">
						<div>
							<!--div class="img fr"><img src="../../lib/img/magazine/pas/img12.png"></div-->
							<p>大きくは３つ。「専有部のアフター保証に基づく問い合わせ、修理」「定期的な共用部の点検や修理」「トラブル・リフォームなどのご相談窓口」です。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">もう一度「プレミアム」なポイントをまとめて教えてください！</h4>
				<div class="balloon">
					<div class="inner">
						<div style="overflow: hidden;">
							<div class="fr img">
								<img
								data-src="../../lib/img/magazine/pas/img09.png"
								data-retina="../../lib/img/magazine/pas/img09@2x.png"
								alt="受付窓口の一元化を実施"
								style="max-width: 196px;"
								class="u-img__max"
								>
							</div>
							<p>アフター保証期間の延長はもとより、受付窓口の一元化を実施し、コールセンターにて一括で相談などを受付することで初期対応の迅速さを求めたサービスです。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">「長谷工プレミアムアフターサービス」の実績を教えてください。</h4>
				<div class="balloon">
					<div class="inner">
						<div>
							<p>2009年3月12日に「長谷工プレミアムアフターサービス」はスタートしました。本サービスのご提供から約6年の間、18,953戸(※2015年3月31日現在)を超えるお客さまにサービスのご提供をさせていただいております。<br>
								本サービスのコールセンターには、１週間平均150～170件、年間約2,000件のご相談をいただいており、住宅設備の不具合などの緊急対応や長期修繕やリフォームに関するご相談まで、幅広くご対応させていただいております。</p>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">コールセンターには具体的にどのような相談がありますか？</h4>
					<p>よくあるご相談の中から２つご紹介いたします。</p>


					<div class="balloon">
						<div class="inner">
							<div>
								<h5 class="u-ttl__s">【その1】 壁のクロスに子どもがクレヨンで落書きをしてしまいました。後が残らない落とし方ってありますか？</h5>
								<div class="fr img">
									<img
									data-src="../../lib/img/magazine/pas/img13.png"
									data-retina="../../lib/img/magazine/pas/img13@2x.png"
									alt="image"
									style="max-width: 181px; "
									class="u-img__max"
									>
								</div>
								<p>お子さまがいらっしゃるご家庭からよく相談を寄せられます。目を離したすきに壁にクレヨンで落書きなんてこと、あると思います。</p>
								<p>まず、クレヨンには油分が含まれており「油汚れ」ということになります。ですので、キッチン用の中性洗剤をきれいなタオルにつけて拭き取ってみてください。凹凸があるクロスの場合は、歯ブラシなどに洗剤をつけて軽くこすると良いでしょう。</p>
							</div>
						</div>
					</div>


					<div class="balloon">
						<div class="inner">
							<div>
								<h5 class="u-ttl__s">【その2】 天井の電球をLEDに変えたいのですが、変えられますか？</h5>
								<div class="fr img">
									<img
									data-src="../../lib/img/magazine/pas/img14.png"
									data-retina="../../lib/img/magazine/pas/img14@2x.png"
									alt="image"
									style="max-width:197px ;"
									class="u-img__max"
									>
								</div>
								<p>特に、ダウンライトの白熱灯をLEDへ変更したいとのご相談を多くいただきます。一般のアフターサービスでは、天井の施工方法と照明機器などをお客さまでお調べいただき、それらがLEDに対応しているかどうかを確認いたします。<br>それに対して、「長谷工プレミアムアフターサービス」は「長谷工施工のマンションに特化」しているため、お住まいのマンション情報に詳しい担当者がスムーズにお答えさせていただきます。</p>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">「長谷工プレミアムアフターサービス」は今後、どんなサービスをしていきたいですか？</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>もちろん今のサービスの質をもっと高めることを一番大切にしておりますが、ご相談のお電話には、リフォームや改修工事などにまつわる話なども多くございます。アフター保証内のサービスだけでなく、リフォーム・改修工事の紹介、長期修繕への協力など、施工から管理、リフォーム、転売までをしている長谷工ならではのグループ力で、お住まいの皆さまへの幅広いサポートを目指していきたいです。</p>
							</div>
						</div>
					</div>

					<div class="img">
						<img
						data-src="../../lib/img/magazine/pas/img05.png"
						data-retina="../../lib/img/magazine/pas/img05@2x.png"
						alt="なるほど、「長谷工プレミアムアフターサービス」は、従来のアフターサービスに留まらず、マンション施工実績No.1※1の長谷工ならではのサービスを提供していくのですね。マンション生活全体を考える長谷工に、これからもご期待ください！"
						class="u-img__max"
						>
					</div>

					<div class="u-assist">
						<p>ブランシエラクラブでは、長谷工のサービスについての素朴な疑問をお待ちしております。お気軽にご相談ください。</p>
						<div class="mb2"><a href="<?php echo $contact_url ?>" target="_blank" class="u-btn u-icon center">お問い合わせはこちら</a></div>
					</div>

					<small class="u-small">
						※1.長谷工コーポレーションのマンション施工累計実績は<a href="http://www.haseko.co.jp/hc/what/works/results/" target="_blank" rel="nofollow" class="u-icon">こちら</a>
					</small>
				</section>

				<nav class="u-pager">
					<ul class="u-pager__row">
						<li class="u-pager__item"><a href="pas.php">1</a></li>
						<li class="u-pager__item active"><a href="pas2.php">2</a></li>
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
