<?php
//base
include ("../../function.php");
$content = get_id_data('4065');
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

			<h2 class="u-ttl__l">京都水族館を貸し切り！<br>長谷工グループのお客さま感謝イベントへご招待いたします。</h2>

			<div class="main-v mb2">
				<figure>
					<img
					data-src="<?php echo $img_url ?>/event/event-kyoto-aquarium/main-v.jpg"
					data-retina="<?php echo $img_url ?>/event/event-kyoto-aquarium/main-v@2x.jpg"
					alt="<?php echo $pageTtl; ?>"
					class="u-img__max">
				</figure>
			</div>


			<div class="u-assist">
				<p>日頃からお世話になっているお客さまへの感謝の気持ちを込めて開催される、長谷工グループ主催イベント「長谷工グループ 感謝の夕べ in 京都水族館」へ、ブランシエラクラブ会員さまを無料でご招待いたします。<br>当日は水族館を自由にご見学いただけます。また、あの人気芸人「かつみ<span style="color:#febeca;">♥</span>さゆり」が登場してトークショーを同時開催！さらにイルカショーまでご覧いただけます。この機会にぜひご参加ください！</p>
			</div>

			 <h4 class="u-ttl__m">昨年開催されたイベントの様子</h4>
        <div class="flex between mb2">
          <div class="w50"><img data-src="<?php echo $img_url ?>/event/event-kyoto-aquarium/past__01@2x.jpg" class="u-img__max mb2_sp" /></div>
          <div class="w50"><img data-src="<?php echo $img_url ?>/event/event-kyoto-aquarium/past__02@2x.jpg" class="u-img__max" /></div>
        </div>
				<div class="flex between mb2">
          <div class="w50"><img data-src="<?php echo $img_url ?>/event/event-kyoto-aquarium/past__03@2x.jpg" class="u-img__max mb2_sp" /></div>
          <div class="w50"><img data-src="<?php echo $img_url ?>/event/event-kyoto-aquarium/past__04@2x.jpg" class="u-img__max" /></div>
        </div>

			<h4 class="kyoto-aquarium-more">
				<div class="kyoto-aquarium-more__row">
					<div class="kyoto-aquarium-more__top">
						<div class="kyoto-aquarium-more__sarani">さらに！</div>
					</div>
					<div class="kyoto-aquarium-more__ex">当日お渡しするアンケートにお答えいただくと、<br class="u-only__pc">抽選で<span class="u-color__red">豪華景品</span>をプレゼント！</div>
				</div>
			</h4>

			<div class="flex between">
				<div><figure><img data-src="<?php echo $img_url ?>/event/event-kyoto-aquarium/lottely__01@2x.jpg" alt="それぞれ5名さまにプレゼント！｜左：【ル・クルーゼ】シグニチャー ココット・オーバル 25cmチェリーレッド、右：【BALMUDA】The Toaster　Black" class="u-img__max mb2_sp" /></figure></div>
			</div>

			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[開催日]</dt>
					<dd>2019年6月22日（土） 18：30開場、20：30終了予定</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>京都水族館　<a href="https://goo.gl/maps/mketyPrSc78Je9xM9" class="u-icon" target="_blank">地図はこちら</a><br>JR東海道線「京都駅」より徒歩15分程度<br>JR山陰本線「梅小路京都西駅」より徒歩7分程度</dd>
				</dl>
				<dl>
					<dt>[集合]</dt>
					<dd>集合場所：京都水族館1階メインエントランス前<br>集合時間：18：30<br>※18：30より前のご入場はできません。<br>※駐車場はございません。公共交通機関をご利用ください。</dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>参加費無料<br>※集合・解散までの交通費等は個人負担となります</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>200名（1組5名まで可）</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2019年5月30日（木）～6月10日（月）<br>※応募多数につき早期締切させていただきました。ご了承ください。</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>先着順でのご案内とさせていただきます。<br>ご当選された方へ、メール（brancheraclub@haseko.co.jp）でご案内いたします。ご参加者の人数をご返信いただくことで当選を確定とさせていただきます。</dd>
				</dl>
				<dl>
					<dt>[応募条件]</dt>
					<dd class="w75" style="line-height:1.4;">
						<ul class="u-list__ul_dot">
							<li>⻑⾕⼯ID をお持ちのご本人さま（20歳以上）の参加が必須となります。</li>
							<li>ご本人さまを含み、1組5名までの応募とさせていただきます。</li>
						</ul>

					</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd class="w75" style="line-height:1.4;">
						<ul class="u-list__ul_dot">
							<li>ご入場には、「無料入場券」が必要です。</li>
							<li>当選された方に「無料入場券」を人数分、ご郵送いたします。</li>
							<li>3歳未満のお子さまは入場券なしでご参加いただけます。</li>
							<li>車イスをご使用のお客さまは事前にお知らせください。</li>
							<li>飲食物のお持込み可能です。<br>（当日、館内のショップは営業時間外となっております。）</li>
							<li>多数のご来場で会場が混雑した場合、イルカショーが立ち見となる場合がございます。</li>
							<li>当イベントの参加権利を譲渡することはできません。</li>
						</ul>
					</dd>
				</dl>
			</div>

			<?php if($eventSts == "new") { ?>

			<div class="u-btn-layout mt2">
				<div class="u-btn-layout__row">
					<a href="<?php echo $mypoint_url ?>/122" target="_blank" class="u-btn_point u-btn-layout__item">ご応募はこちらから</a>
				</div>
			</div>

			<?php } else { ?>
				<label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>
			<?php } ?>

			<?php if (!$ssoFlag == 1){ ?>
				<small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
			<?php }; ?>


		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
