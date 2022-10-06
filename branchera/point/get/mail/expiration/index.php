<?php
//base
include ("../../../../function.php");

// セッションからリンク先取得
session_start();
$url = $_SESSION["cl_mail"]["url"];
$_SESSION["cl_mail"] = array();

//meta
$metaTtl = 'スマイル獲得期限が終了しました-長谷工の会員サービス「ブランシエラクラブ」';
$metaDesc = 'スマイル獲得期限が終了しました。毎週第1・第3木曜日に配信している、最新のメールマガジンをチェックしてスマイルをゲットしてくださいね！';

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
  <main class="main mailpoint__main mailpoint__expiration">
    <article class="main__row">
      <section class="main__wrapper mb1_sp">
        <div class="mailpoint__expiration-row pt3_sp">
					<h2 class="expiration__ttl center">スマイル獲得期限が終了しました。</h2>
					<div class="center mb3">
						<p class="expiration__ex">毎週第1・第3木曜日に配信しているメールマガジンには<br class="u-only__pc">スマイルをゲットできる「あたり」リンクが隠れています！<br>最新の該当メールマガジンをチェックしてスマイルをゲットしてくださいね！</p>
					</div>
          <div>
            <div class="mailpoint__btn-expiration">
              <div class="u-btn-layout mailpoint__get mb2">
                <div class="u-btn-layout__row">
                  <a href="<?php echo $base_url.$url ?>" class="u-btn_brand u-btn-layout__item mailpoint__result-item">
                    <span class="mailpoint__icon">記事はこちらから</span>
                  </a>
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
