<?php
//base
include ("../../function.php");
$content = get_id_data('4027');
$pageTtl = $content['title'];

//meta
$metaTtl = ''.$pageTtl.'-'.siteName();
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
		?>
		<?php
		include ($inc_path."/lib/inc/page/_event/__main-header.php");
		?>

		<section class="main__wrapper">
			<figure class="center mb4">
				<img data-src="../../lib/img/event/event-bonsai/main-v.png"
				data-srcset="../../lib/img/event/event-bonsai/main-sp@2x.png 666w,../../lib/img/event/event-bonsai/main-v@2x.png"
				alt="山田香織の手のひらで楽しむ桜のお花見盆栽づくり"
				class="u-img__max">
			</figure>

			<div class="flex between">

				<p class="w70">日本の花木を代表する「桜」を仕立てます。旭山桜というボリュームある桜を用い（予定）、ご自宅でお花見をお楽しみいただくことができます。<br>講師は盆栽清香園5代目 山田香織先生。<br>過去NHK趣味の園芸の司会やソロモン流出演等、各種メディアでも活躍する山田香織先生の貴重な直接指導です。 </p>
				<div class="u-clearfix w30">
					<figure class="center">
						<img data-src="../../lib/img/event/event-bonsai/lecturer-yamada.jpg"
						data-retina="../../lib/img/event/event-bonsai/lecturer-yamada@2x.jpg"
						alt="盆栽清香園5代目 山田香織先生"
						style="max-width : 200px;"
						class="u-img__max"><br>
						<figcaption class="u-small r-cap">
							盆栽清香園5代目 山田香織先生
						</figcaption>
					</figure>

				</div>
			</div>

			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[開催日時]</dt>
					<dd>3月30日（金）午前11時～午後12時30分</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>日本橋三越本店 新館9階 三越カルチャーサロン <a href="http://mitsukoshi.mistore.jp/store/nihombashi/access/index.html" target="_blank" rel="nofollow" class="u-icon">地図はこちら</a></dd>
				</dl>
				<dl>
					<dt>[当選人数]</dt>
					<dd>5名さま</dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>無料<br><small class="u-small">※現地までの交通費は各自ご負担ください。<br>※通常受講料：10,800円</small></dd>
				</dl>
				<dl>
					<dt>[持ち物]</dt>
					<dd>エプロン</dd>
				</dl>
				<dl>
					<dt>[応募申込]</dt>
					<dd>長谷工IDマイページにログインしてお申込みください。<br><small class="u-small">※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</small></dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2018年2月1日（木）～2018年2月14日（水）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>ご当選者には2月下旬より随時メールにてご連絡いたします。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd>・当日は開始時間の15分前を目処に会場へお越しください。お名前で受付いたします。（受講証等はございません。）<br>・本講座に関するご質問等は、<a href="../../form/form-contact/" rel="nofollow" class="u-icon" target="_blank">こちら</a>からお問い合わせください。</dd>
				</dl>
			</div>

			<label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>

		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
