<?php
//base
$session_check_switch = "0";
include ("../../function.php");
$title ="「たなかみ米」販売価格5％OFFのお申込み";
$pageTtl = '【ご入力内容の確認】'.$title;

//csrf
include($inc_path.'/form/inc/csrf-check-token.php');

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="confForm form single";

//htmlHeader
include($inc_path.'/form/inc/head.php');
include($inc_path.'/form/inc/header.php');
?>

<main id="main">
  <article>

    <header class="MainHead">
      <div class="MainHead-inner">
        <p class="MainHead-sub">ご入力内容の確認</p>
        <h1 class="MainHead-ttl"><?php echo $title ?></h1>
      </div>
    </header>

    <div id="container">
      <div id="cont">

        <?php include ($inc_path."/form/inc/u-formflow.php") ?>

        <p>下記の項目をご確認の上、「この内容で送信する」ボタンを押してください。</p>
        <hr class="mt1">

        <form method="post" action="./complete.php">
          <?php include ($inc_path."/form/inc/input-hidden.php") ?>

          <h2 class="l-ttl">お客さまのご登録情報</h2>

          <div class="label">
            <h5 class="s-ttl label-ttl">長谷工ID</h5>
            <div class="label-inner">
              <p><?php echo h($_POST["hasekoid"]); ?></p>
            </div>
          </div>
          <div class="label">
            <h5 class="s-ttl label-ttl">お名前</h5>
            <div class="label-inner">
              <p><?php echo h($_POST["name"]); ?></p>
            </div>
          </div>
          <div class="label">
            <h5 class="s-ttl label-ttl">フリガナ</h5>
            <div class="label-inner">
              <p><?php echo h($_POST["name2"]); ?></p>
            </div>
          </div>
          <div class="label">
            <h5 class="s-ttl label-ttl">ご住所</h5>
            <div class="label-inner">
              <p>〒<?php echo h($_POST["postal-code"]); ?></p>
              <p><?php echo h($_POST["address-level1"]); ?></p>
            </div>
          </div>
          <div class="label">
            <h5 class="s-ttl label-ttl">電話番号</h5>
            <div class="label-inner">
              <p>固定：<?php echo h($_POST["tel"]); ?></p>
              <p>携帯：<?php echo h($_POST["tel2"]); ?></p>
            </div>
          </div>
          <div class="label">
            <h5 class="s-ttl label-ttl">メールアドレス</h5>
            <div class="label-inner">
              <p>PC：<?php echo h($_POST["email"]); ?></p>
              <p>携帯：<?php echo h($_POST["email2"]); ?></p>
            </div>
          </div>
          <hr>

          <h2 class="l-ttl">上記以外に発送の場合</h2>
          <div class="label">
            <h5 class="s-ttl label-ttl">お名前</h5>
            <div class="label-inner">
              <p><?php echo h($_POST["name_other"]); ?></p>
            </div>
          </div>
          <div class="label">
            <h5 class="s-ttl label-ttl">フリガナ</h5>
            <div class="label-inner">
              <p><?php echo h($_POST["name2_other"]); ?></p>
            </div>
          </div>
          <div class="label">
            <h5 class="s-ttl label-ttl">ご住所</h5>
            <div class="label-inner">
              <p>〒<?php echo h($_POST["postal-code_other"]); ?></p>
              <p><?php echo h($_POST["address-level1_other"]); ?></p>
            </div>
          </div>
          <div class="label">
            <h5 class="s-ttl label-ttl">電話番号</h5>
            <div class="label-inner">
              <p><?php echo h($_POST["tel_other"]); ?></p>
            </div>
          </div>
          <hr>

          <h2 class="l-ttl">お申込み内容</h2>
          <div class="label">
            <h5 class="label-ttl s-ttl">内容</h5>
            <div class="label-inner inputRadio-row">
              <p><?php echo h($_POST["order"]); ?></p>
            </div>
          </div>

          <h2 class="l-ttl">その他お問い合わせ</h2>
          <div class="label">
            <h5 class="label-ttl s-ttl">内容</h5>
            <div class="label-inner inputTextarea-row">
              <p><?php echo h($_POST["contact_memo"]); ?></p>
            </div>
          </div>

          <div class="formBtn">
            <button type='submit' alt="send" class="formBtn-send ok"><span>この内容で申込みする</span></button>
          </div>

        </form>
      </div>
    </div>
  </article>
</main>

<?php include ($inc_path."/form/inc/footer.php") ?>
<?php include ($inc_path."/form/inc/foot.php") ?>
