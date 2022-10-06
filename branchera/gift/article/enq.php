<?php
//base
include ("../../function.php");
$content = get_id_data('3002');
$pageTtl = $content['title'];

//meta
$metaTtl = '会員さま特典「'.$pageTtl.'」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main gift">
	<article class="main__row">
		<?php
		$panAry[] = array("/gift/" ,"優待サービス");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<?php
		include ($inc_path."/lib/inc/page/_gift/__main-header.php");
		?>
		<section class="main__wrapper">
				<h3 class="u-ttl__l">会員さまのご意見が新しいマンションに反映される！</h3>
				<div class="flex flex_reverse between">
				<div class="center">
				<img
				data-src="../../lib/img/gift/enq/enq-img01.png"
				data-retina="../../lib/img/gift/enq/enq-img01@2x.png"
				alt="image"
				style="max-width: 314px;"
				class=""
				>
          </div>
    <div>
      <p>ブランシエラクラブでは、会員さまのご意見を商品企画へと反映するために、アンケートを実施しております。<br>お答えいただいた方の中から抽選でプレゼントもご用意。アンケート実施の際はメールマガジンなどでご案内させていただきますので、ぜひご協力をお願いいたします。</p>
    </div>
      </div>

    <div class="gift_past">
    <h4 class="u-ttl__m gift_past__ttl">過去のアンケート一覧</h4>
    <div class="gift_past__year">2014年</div>
    <div class="flex flex_around gift_past__enq">
      <div class="w50">
        <h5 class="u-ttl__s gift">あなたの声が、新しいマンションに反映される！会員さま限定商品企画アンケート</h5>
        <div class="flex between">
        <div class="center">
        <img src="../../lib/img/gift/index/past05.png" alt="アンケート" style="max-width: 90px;">
          </div>
        <div class="w75">
          <p>会員さまの声が新しいマンションに反映される！もれなく500円のQUOカードがもらえる商品企画アンケートを実施しました。</p>

        </div>

        </div>
        <small class="u-small">開催期間：2014年6月20日（金）～10月31日(金)まで</small>
        <a href="<?php echo $base_url ?>/event/article/enq_nishidai.php" class="u-btn" style="margin-bottom: 24px;">アンケート結果はこちら</a>
      </div>

    </div>
      </div>

    <a href="<?php echo $myentry_url ?>" target="_blank"  rel="nofollow" class="u-btn_point_l center only"><span>長谷工IDの新規登録（無料）はこちら</span></a>

  </section>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
