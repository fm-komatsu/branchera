<?php
//base
include( "../../function.php" );
$content = get_id_data( '1009' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '　2/2」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>

<main class="main senior">
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


				<h2 class="u-ttl__l">長谷工コミュニティのご高齢者向けサービス第一弾！<br>優しい心でそっと見守る「長谷工あんしん見守りサービス」</h2>
					<div class="center mb6">
						<div class="u-only__pc">
							<img
							data-src="../../lib/img/magazine/senior/img07.png"
							data-retina="../../lib/img/magazine/senior/img07@2x.png"
							alt="「長谷工あんしん見守りサービス」 Q&Aコーナー"
							style="max-width:721px;"
							class="u-img__max"
							>
						</div>
						<div class="u-only__sp">
							<img
							data-src="../../lib/img/magazine/senior/img07-sp.png"
							data-retina="../../lib/img/magazine/senior/img07-sp@2x.png"
							alt="「長谷工あんしん見守りサービス」 Q&Aコーナー"
							style=""
							class="u-img__max"
							>
						</div>
					</div>


					<div class="ex2">
						<div class="inner">
							<div>
								<p>こんにちは、馬渕さん。本日はよろしくお願いいたします。</p>
							</div>
						</div>
					</div>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>こちらこそよろしくお願いします。</p>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">まずは「長谷工あんしん見守りサービス」について簡単にご説明いただけますか？</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>「長谷工あんしん見守りサービス」は、「人とシステムで高齢者さまをそっと見守る」をコンセプトに、2015年4月よりスタートした長谷工コミュニティご高齢者向けサービスです。遠く離れた場所にお住まいのご両親や祖父母さまを、パソコンやスマートフォン・携帯電話を利用していつでもどこでも見守ることができるサービスです。</p>
								<div class="img u-only__pc">
									<img
									data-src="../../lib/img/magazine/senior/img08.png"
									data-retina="../../lib/img/magazine/senior/img08@2x.png"
									alt="設置イメージ"
									style="max-width:593px ;"
									class="u-img__max"
									>
								</div>
								<div class="img u-only__sp">
									<img
									data-src="../../lib/img/magazine/senior/img08-sp.png"
									data-retina="../../lib/img/magazine/senior/img08-sp@2x.png"
									alt="設置イメージ"
									style=""
									class="u-img__max"
									>
								</div>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">長谷工あんしん見守りサービス」の特徴をお聞かせください。</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>主な特徴は2つあります。「人感センサー」による見守りサービスと、「ボタン通報器」による安心サポートです。まず、「人感センサー」のご説明を行ないましょう。<br>ご高齢者の居室に「人感センサー」を設置して日常生活の動きを感知し、その結果を専用ウェブサイトでグラフ化します。ご家族・ご親族は、パソコンやスマートフォンで日々の様子をご確認いただくことができます。活動報告はメールでも配信されますので、ウェブサイトを見られなくてもチェックが可能です。</p>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">見守られることに抵抗感がある方もいらっしゃるのではないですか？</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>そうですね。ご家族同士でもプライバシーへの配慮は大切ですから。このサービスは人感センサーというプライバシーに配慮した仕様という点で、みなさまに高く評価していただいています。</p>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">「人感センサー」はどこに置かれることが多いですか？</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>ご自宅のなかでいちばん多く滞在されるている居室に「人感センサー」を置いていただいています。リビング、寝室、和室などそれぞれですが、テレビの横に置いていただくことが多いですね。</p>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">センサーに何か異変があったときの対応は？</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>一定時間動きがない場合は、まずご高齢者にお電話で安否確認を行ないます。それでも連絡が取れない場合、ご家族・ご親族にご連絡し、場合によっては、消防署への通報も行ないます。また、日々の活動状況を専用ウェブサイトでチェックすることで、生活パターンを把握できます。</p>
								<div class="u-position__center">
									<img
									data-src="../../lib/img/magazine/senior/img09.png"
									data-retina="../../lib/img/magazine/senior/img09@2x.png"
									alt="センサーに何か異変があったときの対応"
									style="max-width: 391px;"
									class="u-img__max"
									>
								</div>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">なるほど、遠くにいてもいつでもどこでも見守ることができるのですね。<br>もうひとつの機器「ボタン通報器」についてお聞かせください。</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>2つめの特徴である、「ボタン通報器」には、3つのボタンがあります。体調不良など緊急事態を知らせる「きんきゅう」、ご家族・ご親族への「あいさつ」、生活支援を依頼する「ごようきき」の3つです。なかでも「あいさつ」ボタンはみなさまにご好評いただいております。</p>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">どのようなご意見が寄せられているのですか？</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>ご家族・ご親族のみなさまも忙しくてなかなか連絡できないこともあります。いざ連絡をしようとしても、「今起きているかな？」「お買い物に行っているかな？」と気にかけてしまったりして。でもこのサービスは、人感センサーで、日々の様子を確認することでご両親の生活サイクルがわかるようになりますので、連絡するタイミングがわかるようになります。</p>
								<div class="img u-position__center">
									<img
									data-src="../../lib/img/magazine/senior/img10.png"
									data-retina="../../lib/img/magazine/senior/img10@2x.png"
									alt="image"
									style="max-width: 446px;"
									class="u-img__max"
									>
								</div>
								<p>また、朝起きたときなどに「あいさつ」ボタンを押していただくことで、コミュニケーションに役立つとのご意見をいただいています。ご両親からも、「最近息子がよく電話をかけてくれるようになって」と喜びの声をお聞きします。</p>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">ご利用者の方のご意見で印象的なエピソードはありますか？</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>お子さまが申し込まれたのですが、最初ご両親はしぶしぶ了承していたんです。でもある日、お父さまが急に体調を崩してしまい「きんきゅう」ボタンを押されたのです。すぐにセンターから救急車を手配して対応し、事なきを得ました。<br>そのときお母さまもご自宅にいらっしゃったのですが、急なときってどうしたらいいかわからくなるんですよね。お子さま・ご両親から、このサービスを利用していてよかったとおっしゃっていただきました。</p>
							</div>
						</div>
					</div>
					<div class="u-position__center">
						<img
						data-src="../../lib/img/magazine/senior/img11.png"
						data-retina="../../lib/img/magazine/senior/img11@2x.png"
						alt="緊急のときだけではなく、日々の生活を気遣い、ご家族・ご親族とご高齢者のコミュニケーションの架け橋にもなる「長谷工のあんしん見守りサービス」。新しいご高齢者向けサービスのカタチがここにあるように感じました。"
						style="max-width:507px ;"
						class="u-img__max mb3"
						>
					</div>
					<a href="https://www.haseko-hcm.co.jp/mimamori/" target="_blank" data-ga-click="hcg-page__hcm" rel="nofollow" class="u-btn u-icon center">サービスの詳細・お問い合わせはこちら</a>

				</section>

				<nav class="u-pager">
					<ul class="u-pager__row">
						<li class="u-pager__item"><a href="senior.php">1</a></li>
						<li class="u-pager__item active"><a href="senior2.php">2</a></li>
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
