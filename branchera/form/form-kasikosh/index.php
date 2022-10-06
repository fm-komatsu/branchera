<?php
//base
$flp_check_redirect = true;
include ("../../function.php");
$title  = '査定額UP！「無料宅配買取」特典のお申込み';
$pageTtl = '査定額UP！「無料宅配買取」特典のお申込み';

// csrf
include($inc_path.'/form/inc/csrf-set-token.php');

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="inputForm form single membersOnly";

//htmlHeader
include($inc_path.'/form/inc/head.php');
include($inc_path.'/form/inc/header.php');
include($inc_path."/lib/functions/sso_login_re.php");
?>

<main id="main">
<article>

<header class="MainHead">
  <div class="MainHead-inner">
    <p class="MainHead-sub">会員さま特典</p>
    <h1 class="MainHead-ttl"><?php echo $title ?></h1>
  </div>
</header>

<div id="container">
<div id="cont">

<?php include ($inc_path."/form/inc/u-formflow.php") ?>

<p>ご自宅にいながら売りたいお品物を配送することができる「無料宅配キット」で安心・簡単買取。長谷工グループのリサイクルショップ「カシコシュ」が、お品物を大切に扱います。</p>

<?php include ($inc_path."/form/inc/u-req.php") ?>

<form method="POST" action="./confirm.php">
	<input type="hidden" name="token" value="<?php echo $token; ?>">

<?php include ($inc_path."/form/inc/mypage-member-info.php") ?>
<hr>
<?php include ($inc_path."/form/inc/u-how.php") ?>
<hr>
<?php include ($inc_path."/form/inc/u-address-kasikosh.php") ?>
<hr>

<h3 class="l-ttl">無料宅配キットの箱の大きさをご選択ください</h3>
<div class="label req error">
  <h5 class="label-ttl s-ttl">箱を選択</h5>
  <div class="label-inner inputRadio-row">
    <p class="info">1つのみお選びください</p>

    <label for="box-1" class="inputRadio-label  kasikosh-radio">
      <input type="radio" name="boxes" id="box-1" class="inputRadio-item" value="小1個">
        <img src="img/box-small@2x.png" alt="">
      <div>
       <h5>小1個 <small>- 幅28cm 奥20cm 高さ12cm</small></h5>
        <p>時計やお財布、小物アクセサリー等</p>
        <small>※長財布なども数点づつ入ります。</small>
      </div>
    </label>
    <label for="box-2" class="inputRadio-label kasikosh-radio">
      <input type="radio" name="boxes" id="box-2" class="inputRadio-item" value="中1個">
        <img src="img/box-middle@2x.png" alt="">
      <div>
       <h5>中1個 <small>- 幅32cm 奥23cm 高さ24cm</small></h5>
        <p>お財布やポーチショルダーバッグ等</p>
        <small>※長財布は縦に入ります。</small>
      </div>
    </label>
    <label for="box-3" class="inputRadio-label  kasikosh-radio">
      <input type="radio" name="boxes" id="box-3" class="inputRadio-item" value="大1個">
        <img src="img/box-large@2x.png" alt="">
      <div>
       <h5>大1個 <small>- 幅33cm 奥26cm 高さ38cm</small></h5>
        <p>トートバッグや持ち手があるバッグ等</p>
        <small>※縦に長い箱なので、持ち手のあるバッグは縦に入ります。その他は画像のように横向きなら３点ぐらい入ります。</small>
      </div>
    </label>
    <p class="warning required">どれか1つお選びください</p>
  </div>
</div>

<div class="assist">
<h5 class="s-ttl">たくさん必要な場合やもっと大きい箱が必要な場合は、遠慮なくご相談ください。</h5>
<p class="mb0">お届けする宅配キットには「ダンボール箱」「プチプチ（緩衝材）」「着払い伝票」「宅配買取申込書」そして説明書もあるので簡単！ご不明な点がありましたらお気軽にお電話ください！<br>
TEL：042-751-8502（営業時間／平日9:30～18:00まで） 担当 遠藤（えんどう）</p>
</div>

<hr>

<h3 class="l-ttl">送る予定のお品物情報をご記入ください</h3>
<p>※数点ある場合は代表の物をご記入ください。</p>

<label for="brandName" class="label req error">
  <h5 class="label-ttl s-ttl">ブランド名</h5>
  <div class="label-inner">
    <input type="text" autocomplete="name" id="brandName" name="brandName" class="" placeholder="例：グッチ">
    <p class="warning required">ブランド名をご入力してください</p>
  </div>
</label>

<label for="productName" class="label req error">
  <h5 class="label-ttl s-ttl">商品名</h5>
  <div class="label-inner">
    <input type="text" autocomplete="name2" id="productName" name="productName" class="" placeholder="例：バッグ">
    <p class="warning required">商品名をご入力ください</p>
  </div>
</label>


<hr>

<h2 class="l-ttl">その他お問い合わせ</h2>
 <label for="contact" class="label">
  <h5 class="label-ttl s-ttl">内容</h5>
  <div class="label-inner inputTextarea-row">
    <textarea id="contact" name="contact_memo" placeholder="お問い合わせ内容は、具体的にご記入ください" class="inputTextarea-item"></textarea>
  </div>
</label>

<hr>

<?php include ($inc_path."/form/inc/u-policy.php") ?>

<hr>

<p>
  <small>※無料宅配買取は、18歳以上のお客さまへのサービスになります。18歳未満の方はご両親の同意書へのご記入が必要になります。<br>※法令やカシコシュ規定により一部お取り扱いのできないお品物がございます。あらかじめご了承ください。</small>
</p>
<?php include ($inc_path."/form/inc/u-formssl.php") ?>

</form>

</div>
</div>
</article>
</main>
<?php include ($inc_path."/form/inc/footer.php") ?>
<?php include ($inc_path."/form/inc/foot.php") ?>
