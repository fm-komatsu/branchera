<?php
//base
include ("../../function.php");
$content = get_id_data('4035');
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
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>

		<div class="main__wrapper">

			<div class="u-only__pc">
				<img
				data-src="../../lib/img/event/event-tanakami2018/main-02.png"
				data-retina="../../lib/img/event/event-tanakami2018/main-02@2x.png"
				alt="まぼろしのお米『たなかみ米』田植え体験"
				class="u-img__max mb-inner">
			</div>


			<div class="u-only__sp">
				<img
				data-src="../../lib/img/event/event-tanakami2018/main-sp@2x.png"
				alt="まぼろしのお米『たなかみ米』田植え体験"
				class="u-img__max mb-inner">
			</div>

			<section class="section wrapper">

				<h2 class="u-ttl__l">長谷工あんしんデリ こだわりのお米「たなかみ米」</h2>

				<div class="mb4">
					<img data-src="../../lib/img/event/event-tanakami2018/img01.png"
					data-retina="../../lib/img/event/event-tanakami2018/img01-sp@2x.png"
					alt="まぼろしのお米『たなかみ米』田植え体験"
					class="u-img__max">


				</div>

				<div class="mb6">
					<p>長谷工グループ「長谷工あんしんデリ」がご提供するおいしくて安心なお米『たなかみ米』の田植えを、実際に体験しませんか？<br><strong>収穫したお米は参加者のみなさまへプレゼント</strong>いたします。</p>
				</div>

				<div class="u-assist flex between">
					<figure class="w20 center">
						<img
						 data-src="../../lib/img/event/event-tanakami2018/bran_icon.png"
						 data-retina="../../lib/img/event/event-tanakami2018/bran_icon@2x.png"
						 style="max-width:100px;"
 						 class="u-img__max"
						 alt="たなかみ米とは？">

					</figure>
					<p class="w80">「たなかみのお米」が作られる、滋賀県 田上（たなかみ）地域は、1300年前、天智天皇の命を受け開墾されたと言い伝えられています。<br>その確かな味わいと、市場に出回る量が少なかったことから、「まぼろしのお米」と呼ばれています。 </p>
				</div>

				<h4 class="u-ttl__m">イベントスケジュール（予定）</h4>

				<div class="u-list__dl_table">
					<dl>
						<dt>9:15</dt>
						<dd>JR琵琶湖線 石山駅集合</dd>
					</dl>
					<dl>
						<dt>9:30</dt>
						<dd>送迎バス出発</dd>
					</dl>
					<dl>
						<dt>10:00</dt>
						<dd>長谷工あんしんデリ 大津農場 到着・イベントスタート<br>工場見学～田植え体験</dd>
					</dl>
					<dl>
						<dt >12:00</dt>
						<dd>送迎バス出発</dd>
					</dl>
					<dl>
						<dt>12:30</dt>
						<dd>信楽陶苑たぬき村 到着・昼食</dd>
					</dl>
					<dl>
						<dt>13:30</dt>
						<dd>信楽焼き陶芸体験（「手びねりコース」または「絵つけコース」）</dd>
					</dl>
					<dl>
						<dt>15:30</dt>
						<dd>送迎バス出発</dd>
					</dl>

					<dl>
						<dt>16:15</dt>
						<dd>JR琵琶湖線 石山駅到着・解散</dd>
					</dl>
				</div>


				<h4 class="u-ttl__m">昨年実施した「『たなかみ米』田植え体験」イベントの様子と成長レポートはこちら</h4>
				<div class="flex between">
					<figure class="w50 center mb">
						<img data-src="../../lib/img/event/event-tanakami2018/step01.jpg"
						data-retina="../../lib/img/event/event-tanakami2018/step01@2x.jpg"
						alt="お米ができるまでの流れをご紹介。もみを玄米にしていく大きな機械や、低温貯蔵庫を見学します。"
						style="max-width:360px;"
						class="u-img__max">
					</figure>
					<figure class="w50 center mb">
						<img data-src="../../lib/img/event/event-tanakami2018/step03.jpg"
						data-retina="../../lib/img/event/event-tanakami2018/step03@2x.jpg"
						alt="田んぼへ移動して昔ながらの手植えを体験します。"
						style="max-width:360px;"
						class="u-img__max">
					</figure>
				</div>
				<div class="flex between">
					<figure class="w50 center mb">
						<img data-src="../../lib/img/event/event-tanakami2018/past-img01.jpg"
						data-retina="../../lib/img/event/event-tanakami2018/past-img01@2x.jpg"
						alt="まぼろしのお米『たなかみ米』田植え体験"
						style="max-width:360px;"
						class="u-img__max">
					</figure>
					<figure class="w50 center">
						<img data-src="../../lib/img/event/event-tanakami2018/past-img02.jpg"
						data-retina="../../lib/img/event/event-tanakami2018/past-img02@2x.jpg"
						alt="まぼろしのお米『たなかみ米』田植え体験"
						style="max-width:360px;"
						class="u-img__max">
					</figure>

				</div>
				<ul class="u-list__ul">
					<li>
						<a href="report-tanakami2.php" class="u-icon">「たなかみ米」田植え体験イベントレポート</a>
					</li>
					<li>
						<a href="report-tanakami.php" class="u-icon">まぼろしのお米『たなかみ米』～稲とアイガモの成長レポート～</a>
					</li>
				</ul>

				<h4 class="u-ttl__m">イベント概要</h4>
				<div class="u-list__dl_table_long">
					<dl>
						<dt>[開催日]</dt>
						<dd>2018年6月9日（土）　※雨天時、中止の場合がございます</dd>
					</dl>
					<dl>
						<dt >[集合・解散場所]</dt>
						<dd>JR琵琶湖線 石山駅</dd>
					</dl>
					<dl>
						<dt>[募集人数]</dt>
						<dd>10家族30名程度（後日メールで参加人数をおうかがいします）</dd>
					</dl>
					<dl>
						<dt>[費用]</dt>
						<dd>参加無料　※集合場所までの交通費等は各自ご負担ください。</dd>
					</dl>
					<dl>
						<dt>[応募申込み]</dt>
						<dd>長谷工IDマイページにログインしてお申込みください。</dd>
					</dl>

					<dl>
						<dt>[受付期間]</dt>
						<dd>2018年5月17日（木）～5月31日（木）※受付順にご案内予定</dd>
					</dl>
					<dl>
						<dt>[注意事項]</dt>
						<dd>・汚れても良い服でお越しください（必要な方は着替えをご持参ください）。
							<br>・軍手および農業用長靴はこちらで用意しております。
							<br>・詳細はメールでお知らせいたします。
						</dd>
					</dl>
				</div>

					<label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>

			</section>
		</div>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
