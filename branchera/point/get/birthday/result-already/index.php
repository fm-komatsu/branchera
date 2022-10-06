<?php
// flpSSOチェック有効化
$flp_check_redirect = true;

//base
include ("../../../../function.php");

// 未ログイン対応
if(!$ssoFlag == 1){
	header("HTTP/1.0 404 Not Found");
	header("location:../../../../http404/");
	exit();
}

//meta
$metaTtl = 'ポイント獲得済みです-長谷工の会員サービス「ブランシエラクラブ」';
$metaDesc = 'スマイルの獲得は、お1人さま1回限りとなります。これからもぜひ、ブランシエラクラブ をお楽しみください。';

//nosearch
$nosearch = 1;

//bodyClass
$body_class ="mail-point";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header-mail-point.php");
?>

<div class="mailpoint">
  <div class="mailpoint__box">
  <main class="main mailpoint__main">
    <article class="main__row">
      <section class="main__wrapper mb1_sp">
        <div class="mailpoint__birth-row">
          <div>
            <div class="mb8 mb6_sp">
              <figure>
                <img src="<?php echo $img_url ?>/point/c1_title_main-already@2x.png" alt="ポイント獲得済みです" class="u-img__max u-only__pc center" style="max-width:740px" loading="lazy">
                <img src="<?php echo $img_url ?>/point/bd_c1_main-already-sp@2x.png" alt="ポイント獲得済みです" class="u-img__max u-only__sp center" loading="lazy">
              </figure>
            </div>
            <div class="mailpoint__birthday">
              <div class="mb2">
                <div class="center birthday__title">
                  <figure>
                    <img src="<?php echo $img_url ?>/point/bd_c1_title@2x.png" alt="年に一度はご登録内容の確認をしましょう" class="u-img__max u-only__pc center" style="max-width:317px" loading="lazy">
                    <img src="<?php echo $img_url ?>/point/bd_c1_title-sp@2x.png" alt="年に一度はご登録内容の確認をしましょう" class="u-img__max u-only__sp center" style="max-width:292px" loading="lazy">
                  </figure>
                </div>
                <div class="center u-color__brand_dark u-font__bold">
                  <p>住所や電話番号など、連絡先に変更はございませんか？<br class="u-only__pc">正しい情報が登録されていないと、サービスが受けられないことがございます。<br class="u-only__pc">年に一度は、登録内容が最新になっているか確認しましょう</p>
                </div>
              </div>
              <div class="mailpoint__btn-birthday">
                <div class="u-btn-layout mailpoint__get mb2">
                  <div class="u-btn-layout__row">
                  <?php if($ssoFlag == 1){ ?>
                    <a href="<?php echo $myinfo_url; ?>" target="_blank" class="u-btn_brand u-btn-layout__item mailpoint__result-item">
                      <span>登録情報を確認する</span>
                    </a>
                  <?php } else { ?>
                    <a href="<?php echo $login_url; ?>" class="u-btn_brand u-btn-layout__item mailpoint__result-item">
                      <span>ログインする</span>
                    </a>
                  <?php }?>
                  </div>
                </div>
             </div>
            </div>
          </div>
        </div>
      </section>
    </article>
  </main>
<?php  include ($inc_path."/lib/inc/footer-mail-point.php"); ?>
</div>
</div>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
