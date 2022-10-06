<?php
//base
include ("../../function.php");
$content = get_id_data('11003');
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
				<h2 class="u-ttl__l">会員さま意識調査アンケートより</h2>
				<div class="enquete-ex">
					<div class="enquete-ex__row">
						<div class="enquete-ex__ex">
							<p>この度、みなさまの声を取り入れ、ブランシエラクラブをより良いものにしていくため、会員さまにアンケートを実施しました。</p>

							<div class="u-assist">
								<p>回答期間　：　2017年2月1日（水）～2017年2月14日（火）<br>回答者数　：　計688名</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="main__item">
				<h4 class="u-ttl__m">ブランシエラクラブの提供サービス</h4>
				<img data-src="<?php echo $img_url; ?>/enquete/report01/img01.png"
				alt="知っているブランシエラクラブの提供サービス"
				class="u-img__max"
				>

				<div class="enquete-picture">
					<div class="enquete-picture__row">
						<p class="enquete-picture__ex">WEBサイトやメールマガジンといったブランシエラクラブから配信している情報やコンテンツをご覧いただいている方が多く、事務局として非常に嬉しく思います。今後も、会員のみなさまにより興味を持っていただけるような、住まいに関する情報配信に努めてまいります。<br>一方で、会員のみなさまのご自宅にお届けしている「ブランシエラレター」については、ご存知ではない方も多いようでした。今回をきっかけに、<strong>「ブランシエラレター」も是非ご覧ください♪</strong><br><small class="u-small">※「ブランシエラレター」の次回発行は、2017年夏頃を予定しています。</small></p>
						<div class="enquete-picture__img">
							<img src="<?php echo $img_url; ?>/enquete/report01/img02-sp@2x.png">
						</div>
					</div>
				</div>




				<div class="u-assist">
					<a href="<?php echo $base_url ?>/gift/article/mail.php" class="u-btn center mb0">ブランシエラレターについてはこちら</a>
				</div>

				<p>また、会員さま限定の、<strong>長谷工ならではの技術見学会やカルチャーイベントなどの開催を全国各地で計画中</strong>です。イベント実施の予定は、WEBサイトやメールマガジンなどで告知してまいりますので、お見逃しなく！</p>

			</section>

			<section class="main__item">
				<h4 class="u-ttl__m">長谷工グループの提供サービス</h4>
				<img data-src="<?php echo $img_url; ?>/enquete/report01/img03.png"
				data-retina="<?php echo $img_url; ?>/enquete/report01/img03-sp@2x.png"
				class="u-img__max"
				>

				<p class="mb4">長谷工グループが発信しているCMをきっかけに、長谷工の提供サービスを知った方が多くいらっしゃいました。「♪タラタタッタタ」のフレーズは、つい口ずさみたくなるフレーズですよね。<br>また、嬉しいことに、ブランシエラクラブを通して長谷工の提供サービスを知った方もたくさんいらっしゃるようですね。<strong>「ブランシエラマガジン」では、長谷工の技術・サービスのご紹介や、日々の生活に役立つ情報をお届けしています</strong>。随時更新してまいりますので、是非チェックしてみてください。</p>
				<img data-src="<?php echo $img_url; ?>/enquete/report01/img04.png"
				data-retina="<?php echo $img_url; ?>/enquete/report01/img04-sp@2x.png"
				class="u-img__max"
				>
				<p class="mb4">みなさま、“長谷工＝マンション建設会社”というイメージはお持ちいただいているようですね。長谷工グループでは今まで、マンション建設だけではなく、販売、管理・修繕、リフォーム、高齢者住宅まで、お客さまのライフステージのあらゆるシーンに寄り添ってサービスを提供してまいりました。これからも<strong>「♪マンションのことなら長谷工」にお任せください</strong>。</p>

				<h5 class="u-ttl__s">長谷工グループのCM</h5>
				<div class="u-position__center mb-inner">
					<a class="fade" href="http://haseko-group.jp/" target="_blank" rel="nofollow">
						<img
						data-src="<?php echo $img_url; ?>/enquete/report01/img-bn.png"
						alt="長谷工グループのCM"
						style="max-width:560px;"
						class="u-img__max">
					</a>
				</div>
				<img src="<?php echo $img_url; ?>/enquete/report01/img05.png"
				data-srcset="<?php echo $img_url; ?>/enquete/report01/img05-sp@2x.png 450w,<?php echo $img_url; ?>/enquete/report01/img05.png"
				style="max-width:680px;"
				class="u-img__max">
			</section>

			<section class="main__item">
				<h4 class="u-ttl__m">住まいの悩み</h4>
				<img data-src="<?php echo $img_url; ?>/enquete/report01/img06.png"
				data-retina="<?php echo $img_url; ?>/enquete/report01/img06-sp@2x.png"
				class="u-img__max"
				>
				<p>「収納スペース」について悩みを抱えている方が最も多くいらっしゃいました。特にマンションにお住まいの方では、生活用品や洋服、お子さまのおもちゃの収納スペースに困っている！というお悩みをよく耳にします。<br>今後、<strong>ブランシエラクラブでは収納に関するコンテンツ配信を予定</strong>しておりますので、楽しみにお待ちください♪</p>
			</section>

			<section class="main__item">
				<h4 class="u-ttl__m">まとめ</h4>
				<p>今回のアンケート結果をもとに、引き続き会員のみなさまのお役に立てるよう、会員さま限定イベントの実施やブランシエラクラブならではのコンテンツ配信などを企画していきます。<br>また、会員さまアンケートも定期的に実施してまいりますので、是非会員のみなさまのお声をお聞かせください。</p>
				<img
				data-src="<?php echo $img_url; ?>/enquete/report01/img07.png"
				data-srcset="<?php echo $img_url; ?>/enquete/report01/img07-sp@2x.png 450w , <?php echo $img_url; ?>/enquete/report01/img07.png"
				style="max-width:689px;"
				class="u-img__max mb-inner">

				<div class="u-assist">
					<h5 class="u-ttl__m">次回アンケート概要</h5>
					<div class="u-list__dl_table">
						<dl>
							<dt><strong style="background: none; color: #333">受付期間</strong></dt>
							<dd>2017年5月1日（月）～2017年5月14日（日）</dd>
						</dl>
						<dl>
							<dt><strong style="background: none; color: #333">対象者</strong></dt>
							<dd>長谷工IDをお持ちの方</dd>
						</dl>
						<dl>
							<dt><strong style="background: none; color: #333">特典</strong></dt>
							<dd>ご回答いただいた方全員に100スマイルプレゼント<br><span class="cap">※スマイルの付与はアンケート期間終了から1週間程度とさせていただいております。<br>また、複数ご回答いただいた場合でも付与スマイルは100とさせていただきます。 </span>
							</dd>
						</dl>
						<dl>
							<dt><strong style="background: none; color: #333">回答方法</strong></dt>
							<dd>ページ下部の「第2回会員さまアンケートはこちらから」ボタンよりお答えください</dd>
						</dl>
						<dl>
							<dt><strong style="background: none; color: #333">集計結果</strong></dt>
							<dd>本WEBサイトにて公開させていただきます</dd>
						</dl>
					</div>

					<p><strong>本日より実施する第2回目のアンケートの結果を活用して、収納に関するコンテンツを配信予定</strong>です。<br>その他、アンケートと連動させたコンテンツ制作やインタビュー等を実施し、ブランシエラクラブサイトに掲載させていただく予定もあります。</p>
					<p>最後になりますが、今回アンケートにご回答いただいた会員のみなさま、改めてましてありがとうございました。アンケート結果は一部のみの掲載となりましたが、事務局ではすべてのアンケートを拝読させていただいております。みなさまの声を元に、随時改善に努めてまいりますので、今後もブランシエラクラブを是非ご活用ください。</p>


					<div class="u-btn-layout mt2">
						<div class="u-btn-layout__row">
							<label class="u-btn_end u-position__center">アンケートは終了いたしました</label>
						</div>
					</div>

				</section>

        <?php include ($inc_path."/lib/inc/page/_enquete/__back_num.php") ?>

			</article>
		</main>

		<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
		<?php  include ($inc_path."/lib/inc/footer.php"); ?>
		<?php  include ($inc_path."/lib/inc/foot.php"); ?>
