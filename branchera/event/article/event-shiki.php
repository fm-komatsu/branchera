<?php
//base
include ("../../function.php");
$content = get_id_data('4047');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/event/event-shiki/event-shiki-nc.jpg';

$thumCap = '&copy; Disney';

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
		include ($inc_path."/lib/inc/page/_event/__main-header.php");
		?>
		<div class="main__wrapper">
			<section class="main__item mb0">
				<div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
					<figure class="u-fig">
						<picture>
							<source media="(max-width: 666px)" data-srcset="<?php echo $img_url ?>/event/event-shiki/main-sp.png,<?php echo $img_url ?>/event/event-shiki/main-sp@2x.png 2x"
							 srcset="
						<?php echo $img_url ?>/event/event-shiki/main-sp.png" alt="名古屋で開催される「劇団四季」ミュージカル公演の鑑賞チケットを無料でプレゼントいたします。"
							 class="u-img__max">
							<source media="(min-width: 667px)" data-srcset="<?php echo $img_url ?>/event/event-shiki/main.png,<?php echo $img_url ?>/event/event-shiki/main@2x.png 2x"
							 srcset="
						<?php echo $img_url ?>/event/event-shiki/main.png" alt="名古屋で開催される「劇団四季」ミュージカル公演の鑑賞チケットを無料でプレゼントいたします。"
							 class="u-img__max">
							<img src="
						<?php echo $img_url ?>/event/event-shiki/main.png" data-src="<?php echo $img_url ?>/event/event-shiki/main.png"
							 alt="名古屋で開催される「劇団四季」ミュージカル公演の鑑賞チケットを無料でプレゼントいたします。" class="u-img__max">
						</picture>
						<figcaption class="u-fig__cap">&copy; Disney<figcaption>
					</figure>
				</div>
				<h4 class="u-ttl__m">公演・チケット概要</h4>
				<div class="u-list__dl_table">
					<dl>
						<dt>[ご招待日時]</dt>
						<dd>2018年11月24日（土）17:30～ </dd>
					</dl>
					<dl>
						<dt>[公演場所]</dt>
						<dd>名古屋四季劇場</dd>
					</dl>
					<dl>
						<dt>[当選人数]</dt>
						<dd>10組20名さま（S1席）</dd>
					</dl>
					<dl>
						<dt>[応募申込]</dt>
						<dd>長谷工IDマイページにログインしてお申し込みください。</dd>
					</dl>
					<dl>
						<dt>[募集期間]</dt>
						<dd>2018年10月18日（木）～10月31日（水）</dd>
					</dl>
					<dl>
						<dt>[当選者発表]</dt>
						<dd>当選者の発表は、チケットの発送をもって代えさせていただきます。</dd>
					</dl>
					<dl>
						<dt>[注意事項]</dt>
						<dd>・座席はあらかじめ決められておりますので指定はできません。<br>・本チケットをご家族・ご友人等に譲渡することはできませんので、ご了承ください。<br>・本プレゼントに関するご質問等は、<a href="../../form/form-contact/"
							 class="u-icon" target="_blank">こちら</a>からお問い合わせください。<br>なお、座席についてのお問い合わせ、抽選結果に関するお問い合わせはお答えいたしかねますので、あらかじめご了承ください。</dd>
					</dl>
				</div>
				<label class="u-btn_end center mt2">応募の受け付けは終了いたしました</label>
				<!-- <div class="u-btn-layout mt2">
					<div class="u-btn-layout__row">
						<a href="<?php echo $mypoint_url ?>/110" target="_blank" class="u-btn_point u-btn-layout__item">お申込みはこちらから</a>
					</div>
				</div>
				<?php if (!$ssoFlag == 1){ ?>
				<small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank"
					 rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
				<?php }; ?> -->
		</div>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
