<?php
//base
include ("../../function.php");
$content = get_id_data('11004');
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
		$panAry[] = array("/enquete/" ,"アンケート");
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>

		<div class="main__wrapper">
			<section class="main__item">
				<h2 class="u-ttl__l">住まいの収納に関するアンケートより</h2>
				<div class="enquete-ex">
					<div class="enquete-ex__row">
						<div class="enquete-ex__ex">
							<p>第1回のアンケートで、「現在抱えている住まいの悩み」をお聞きしたところ、収納スペースについてのお悩みを抱えている方が多くいらっしゃいました。そこで、第2回目のアンケートとして、今回は会員のみなさまに収納に関するアンケートを実施いたしました。</p>
							<div class="u-assist">
								<p>回答期間　：　2017年5月1日（月）～2017年5月14日（日）<br>回答者数　：　計623名</p>
							</div>
							<p>※ページの最後に、次回以降のアンケート等のご案内を記載しています。</p>
						</div>
					</div>
				</div>
			</section>

			<section class="main__item">
				<h4 class="u-ttl__m">収納のお悩み</h4>
				<p><img data-src="../../lib/img/enquete/report02/img01.png"
					data-retina="../../lib/img/enquete/report02/img01-sp@2x.jpg"
					class="u-img__max">
				</p>
				<p>回答者全体のうち、半数近くの方が「季節物の衣類」をどうやって収納すればよいのか悩んでいるようです。性別でみると、女性のほうが平均回答個数が多く、バッグや靴など収納や片付けにお悩みの方が多いようですね。世代別・世帯別でみると、それぞれの特徴が表れた結果となりました。</p>
			</section>

			<section class="main__item">
				<h4 class="u-ttl__m">収納の工夫&#9312; 収納便利グッズ</h4>
				<p><img data-src="../../lib/img/enquete/report02/img02.png"
					data-retina="../../lib/img/enquete/report02/img02-sp@2x.jpg"
					class="u-img__max">
				</p>
				<p class="mb4">実際に収納する際に、どのような工夫をされているのか、みなさまに教えていただきました♪<br>キッチンやクローゼットなどで、つっぱり棒やS字フックなどを活用し、吊るす収納を工夫したり、カラーボックスやプラスチックケースなどを活用し、小物や衣類を整理するなどの工夫をされている方が多かったです。<br>また、100円ショップで買えるものを活用したり、空き瓶やティッシュの箱、段ボールなどの日用品を活用するなど、アイデアを駆使して収納されている方もいらっしゃいました。</p>

				<p class="mb4">みなさま、ライフスタイルに合わせて、うまく収納グッズを活用しながら収納しているという回答が多く寄せられました。しかし、一方では「便利グッズを買うが使いこなせない」という声も多く、収納方法にお困りの方も多くいらっしゃるようです。<br>ブランシエラクラブでは、「部屋が片付かない！」「ものが多くて困っている！」そんなお悩みを抱えるあなたにぜひ読んでいただきたいコンテンツをご用意しています♪ </p>


				<div class="mb4 cf" style="background-color: #fff4ed; padding:15px 15px 15px;">
					<p class="fl" style="margin-bottom:0;margin-top:0;">
						<a href="<?php echo $base_url; ?>/magazine/index_comic01.php">
							<img
							src="../../lib/img/magazine/comic01/comic01-01@2x.png"
							style="max-width:200px;"
							class="u-img__max">
						</a>
					</p>
					<p style="margin: 0;">部屋の片付けが苦手な家族が、片付けのノウハウを学びながら憧れの部屋を目指すマンガコラムです。物語の中には、整理収納アドバイザー監修のお役立ちメソッドが満載！楽しみながら、片付けノウハウを身につけることができます。</p>
					<br clear="all">
					<a href="<?php echo $base_url; ?>/magazine/index_comic01.php" class="u-btn_point u-position__center">マンガコラム目次はこちら</a>
				</div>

				<p>ぜひマンガで楽しく片付けノウハウを学びながら、理想のお部屋を目指してください。</p>
			</section>

			<section class="main__item">
				<h4 class="u-ttl__m">収納の工夫&#9313; リサイクルショップ</h4>
				<p>
					<img data-src="../../lib/img/enquete/report02/img03.png"
					data-retina="../../lib/img/enquete/report02/img03-sp@2x.jpg"
					class="u-img__max">
				</p>
				<p class="mb4">2～3ヵ月に1回程度以上利用するという方が2割近くいらっしゃいました。<br>クローゼットや収納ケースの肥やしになってしまっている衣類、使わなくなったお子さまのおもちゃなどを処分する方法としてリサイクルショップをうまく利用されているようです♪<br>一方で、半数以上の方が、「利用したことはない」または利用しても「1年に1回以下」との回答でした。</p>

				<div class="mb4 cf" style="background-color: #fff4ed; padding:15px 15px 15px;">
					<p class="fl" style="margin-bottom:0;margin-top:0;">
						<a href="<?php echo $base_url; ?>/gift/article/kasikosh.php" >
							<img src="../../lib/img/enquete/report02/img04.png" width="200" class="u-img__max">
						</a>
					</p>
					<p>長谷工グループのリサイクルショップ「カシコシュ」では、『WEB宅配買取』サービスを実施しています。自宅にいながらお気軽にご利用いただけます。ぜひ上手にリサイクルサービスをご活用いただき、ご自宅の整理整頓にお役立てください♪</p><br clear="all"><p style="margin: 0;">さらに、長谷工IDをお持ちの方は買取価格が最大5,000円アップする会員特典をご用意しております！ぜひ、ご活用ください。
					</p>

					<p class="">
						<a href="<?php echo $base_url; ?>/gift/article/kasikosh.php" class="u-btn_point u-position__center" >特典の詳細はこちら</a>
					</p>
				</div>

			</section>

			<section class="main__item">
				<h4 class="u-ttl__m">まとめ</h4>
				<p class="mb4">今回は、住まいの収納に関するアンケートを実施しました。会員のみなさまに教えていただいた、収納の工夫・アイデアの中には、すぐに真似できる工夫やユニークなアイデアまでさまざまありました。ご自身でも活用できそうな工夫・アイデアをぜひ試してみてください♪</p>

				<div class="assist">
					<h5 class="u-ttl__m">次回アンケート概要</h5>
					<div class="u-list__dl_table">

						<dl>
							<dt class="w15"><strong style="background: none; color: #333">受付期間</strong></dt>
							<dd class="w85">2017年7月3日（月）～2017年7月12日（水）</dd>
						</dl>
						<dl>
							<dt class="w15"><strong style="background: none; color: #333">対象者</strong></dt>
							<dd class="w85">長谷工IDをお持ちの方</dd>
						</dl>
						<dl>
							<dt class="w15"><strong style="background: none; color: #333">特典</strong></dt>
							<dd class="w85">ご回答いただいた方全員に100スマイルプレゼント<br><span class="cap">※スマイルの付与はアンケーd間終了から1週間程度とさせていただいております。<br>     また、複数ご回答いただいた場合でも付与スマイルは100とさせていただきます。 </span>
							</dd>
						</dl>
						<dl>
							<dt class="w15"><strong style="background: none; color: #333">回答方法</strong></dt>
							<dd class="w85">ページ下部の「第3回会員さまアンケートはこちらから」ボタンよりお答えください</dd>
						</dl>
						<dl>
							<dt class="w15"><strong style="background: none; color: #333">集計結果</strong></dt>
							<dd class="w85">本WEBサイトにて公開させていただきます</dd>
						</dl>
					</div>
				</div>

				<p>本日より実施する第3回目のアンケートは「防犯について」です。みなさまが実施されている防犯対策やお使いの防犯グッズについて教えてください。</p>
				<p>最後になりますが、今回アンケートにご回答いただいた会員のみなさま、改めてましてありがとうございました。アンケート結果は一部のみの掲載となりましたが、事務局ではすべてのアンケートを拝読させていただいております。みなさまの声を元に、随時改善に努めてまいりますので、今後もブランシエラクラブを是非ご活用ください。</p>


				<div class="center w50">
					<label class="u-btn_end u-position__center">アンケートは終了いたしました</label>
				</div>
			</section>
			<?php include ($inc_path."/lib/inc/page/_enquete/__back_num.php") ?>

		</article>
	</main>

	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
