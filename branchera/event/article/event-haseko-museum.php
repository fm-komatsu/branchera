<?php
//base
include ("../../function.php");
$content = get_id_data('4050');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

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
		?>
		<?php
		include ($inc_path."/lib/inc/page/_event/__main-header.php");
		?>
		<section class="main__wrapper">
			<div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
				<h2>
					<img data-src="<?php echo $img_url?>/event/event-haseko-museum/main-v-all.png" data-retina="<?php echo $img_url?>/event/event-haseko-museum/main-v-all@2x.png"
					 alt="長谷工マンションミュージアム 見学 先行ご招待" class="u-img__max u-only__pc">
					<img data-src="../../lib/img/event/event-haseko-museum/main-v-all-sp.png" data-retina="../../lib/img/event/event-haseko-museum/main-v-all-sp@2x.png"
					 alt="長谷工マンションミュージアム 見学 先行ご招待" class="u-img__max u-only__sp">
				</h2>
			</div>
			<div class="u-assist_white">
				<h3 class="u-ttl__m">長谷工マンションミュージアムとは？</h3>
				<div class="flex between">
					<div class="w60">
						<p>長谷工コーポレーションの<strong>創業80周年記念事業のフィナーレ</strong>として、東京都多摩市に完成した「長谷工テクニカルセンター」の中に位置する施設です。<br>
							集合住宅の歴史や工事現場の様子、未来のカタチなど、<strong>マンションに関わるものすべてを、最新の技術も駆使し、見て、触れて、実感していただけるミュージアム</strong>です。</p>
					</div>
					<div class="w40">
						<figure class="center">
							<img data-src="<?php echo $img_url?>/event/event-haseko-museum/about-haseko-museum.jpg" data-retina="
							<?php echo $img_url?>/event/event-haseko-museum/about-haseko-museum@2x.jpg"
							 alt="長谷工マンションミュージアム 見学 先行ご招待" class="u-img__max" style="max-width : 390px;">
						</figure>
					</div>
				</div>
			</div>
			<h3 class="u-ttl__m">長谷工マンションミュージアム フロア案内図</h3>
			<div>
				<figure class="center">
					<img data-src="<?php echo $img_url?>/event/event-haseko-museum/haseko-museum-map@2x.png" data-retina="<?php echo $img_url?>/event/event-haseko-museum/haseko-museum-map@2x.png"
					 alt="長谷工マンションミュージアム フロア案内図" class="u-img__max u-only__pc" style="max-width : 777px;">
					<img data-src="<?php echo $img_url?>/event/event-haseko-museum/haseko-museum-map-sp.png" data-retina="<?php echo $img_url?>/event/event-haseko-museum/haseko-museum-map-sp@2x.png"
					 alt="長谷工マンションミュージアム フロア案内図" class="u-img__max u-only__sp center" style="max-width:370px;">
				</figure>
			</div>
			<h3 class="u-ttl__m">施設の一部をご紹介</h3>
			<div class="mb3" style="background-color: #D5ECE1; padding:8px 16px; box-sizing: border-box; border-radius: 3px;">
				<h4 class="u-ttl__s">02 はじまりの物語</h4>
				<div class="flex between">
					<div class="w50">
						<p>集合住宅の生い立ちを伝える「はじまりの物語」は、人類誕生前から現代に至るまでの変遷をCGでつくり、360度の壁と床に映し出す迫力ある空間です。<br>ミュージアムを企画するにあたり、最も力を注いだゾーンの一つが、このシアターです。ぜひ直接ご覧ください。
						</p>
					</div>
					<div class="w50">
						<figure class="center">
							<img data-src="<?php echo $img_url?>/event/event-haseko-museum/haseko-museum-pickup01.jpg" data-retina="
						<?php echo $img_url?>/event/event-haseko-museum/haseko-museum-pickup01@2x.jpg"
							 alt="長谷工マンションミュージアム 02 はじまりの物語" class="u-img__max" style="max-width : 390px;">
						</figure>
					</div>
				</div>
			</div>
			<div class="mb3" style="background-color: #F1DED2; padding:8px 16px; box-sizing: border-box; border-radius: 3px;">
				<h4 class="u-ttl__s">05 まるごとマンションづくり</h4>
				<div class="flex between">
					<div class="w50">
						<figure class="center">
							<img data-src="
						<?php echo $img_url?>/event/event-haseko-museum/haseko-museum-pickup02.jpg" data-retina="
						<?php echo $img_url?>/event/event-haseko-museum/haseko-museum-pickup02@2x.jpg"
							 alt="長谷工マンションミュージアム 05 まるごとマンションづくり" class="u-img__max" style="max-width : 390px;">
						</figure>
					</div>
					<div class="w50">
						<p>マンションはどのようにしてつくられるのか――新旧 の設計・施工の様子をさまざまな展示物を通して体感 できるこのゾーンは、来場者の「ものづくり」の心を くすぐります。<br>見どころは、地中での杭打ちの様子などをVRで見られるコーナーなど盛りだくさん。</p>
					</div>
				</div>
			</div>
			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[開催日時]</dt>
					<dd>2018年12月15日（土） 第1回 10:30～、第2回 13:00～（各回約90分）</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>長谷工テクニカルセンター内「長谷工マンションミュージアム」<br> 東京都多摩市鶴牧3-1-1 <a href="https://www.haseko.co.jp/hmm/access/index.html" class="u-icon"
						 target="_blank">地図はこちら</a></dd>
				</dl>
				<dl>
					<dt>[集合場所]</dt>
					<dd>長谷工マンションミュージアム エントランス（30分前より受付開始）</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>各回、4組8名さま<br>※ 長谷工IDをお持ちの会員さまと、御同伴者1名（小学校5年生以上の方に限らせていただきます）</dd>
				</dl>
				<dl>
					<dt>[募集方法]</dt>
					<dd>長谷工IDマイページにログインしてお申込みください。</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2018年11月15日（木）～11月25日（日）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>先着順にご案内させていただきます。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd class="w75" style="line-height:1.4; font-feature-settings:'palt';">
						<ul class="u-list__ul_dot">
							<li>本イベント参加権利をご家族・ご友人等に譲渡することはできませんので、　ご了承ください。</li>
							<li>公共機関、お車、いずれの方法でもご来場いただけます。</li>
							<li>見学会の様子を写真撮影し、ブランシエラクラブWEBサイト、イベントレポートなどに使用させていただく予定です。その際、お顔が映る可能性があります。</li>
							<li>今後のブランシエラクラブおよび長谷工ミュージアム運営の参考にさせていただくため、見学会終了後、簡単なアンケートにご協力ください。</li>
						</ul>
					</dd>
				</dl>
			</div>
			<label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>
			<!-- <div class="u-btn-layout mt2">
				<div class="u-btn-layout__row">
					<a href="<?php echo $mypoint_url ?>/114" target="_blank" class="u-btn_point u-btn-layout__item">第1回（10:30～）に応募する</a>
					<a href="<?php echo $mypoint_url ?>/115" target="_blank" class="u-btn_point u-btn-layout__item">第2回（13:00～）に応募する</a>
				</div>
			</div>
			<small class="u-small" style="color: red; font-weight: bold">※お申し込みは第1回・第2回のいずれか1回のみとなります。</small><br>
			<?php if (!$ssoFlag == 1){ ?>
			<small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"
				 class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
			<?php }; ?> -->
		</section>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
