<?php
//base
include ("../../function.php");
$content = get_id_data('4086');
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
      <div class="main-v mb2">
        <figure>
          <img src="<?php echo $img_url?>/event/golf19/main-v@2x.jpg" class="u-img__max" alt="" loading="lazy">
        </figure>
      </div>
      <p class="mb1 u-font__palt">PGA（日本プロゴルフ協会）とのタイアップにより、ブランシエラクラブ会員さま限定でプロによるミニレッスンを公開します！ミニレッスンは全5回。メールマガジンで公開をお知らせしますのでお見逃しなく！<br>さらに全5回を視聴いただき、動画中に現れるキーワードを集めることで、プロからの特別なプレゼントに応募できます！応募開始は12月24日（木）の予定です。すべての動画を視聴してぜひご応募ください！</p>
			<p class="mb4 mb2_sp"><span class="u-color__red u-font__bold">プレゼントの応募は終了しました。</span></p>
      <section>
        <div class="u-column__2 mb2">
          <div class="u-column__item">
            <h3 id="lesson1"><img src="<?php echo $img_url ?>/event/golf19/lesson01@2x.png" alt="Lesson1 ドライバー編" class="u-img__max" loading="lazy"></h3>
            <p class="mb2">ドライバーを打つ時のポイントを高橋勝成プロが解説します！</p>
            <figure>
              <img src="<?php echo $img_url ?>/event/golf19/lesson01__img@2x.jpg" alt="ドライバーを打つ時のポイントを高橋勝成プロが解説します！" class="u-img__max" loading="lazy">
            </figure>
            <div class="u-btn-layout mt2">
              <div class="u-btn-layout__row center mb2_sp">
              <?php if (!$ssoFlag == 1){ ?>
                <a href="<?php echo $login_url ?>" class="u-btn_point u-btn-layout__item" style="margin-top : 8px;">ログインして動画を観る</a>
              </div>
              <small class="u-small">動画の視聴にはログインが必要になります。会員登録がお済みでない方は<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"　class="u-icon">こちら</a>よりご登録ください。</small>
              <?php } else {; ?>
                <a href="https://www.youtube.com/watch?v=WFwTFsUBzas" target="_blank" class="u-btn_point u-btn-layout__item mfp-btn__video" style="margin-top : 8px;">動画を観る</a>
              </div>
              <?php };?>
            </div>
          </div>
          <div class="u-column__item">
            <h3><img src="<?php echo $img_url ?>/event/golf19/lesson02@2x.png" alt="Lesson2 アイアン編" class="u-img__max" loading="lazy"></h3>
            <p class="mb2">アイアンで安定した球を出すポイントを谷口徹プロが解説します！</p>
            <figure>
              <img src="<?php echo $img_url ?>/event/golf19/lesson02__img@2x.jpg" alt="アイアンで安定した球を出すポイントを谷口徹プロが解説します！" class="u-img__max" loading="lazy">
            </figure>
            <div class="u-btn-layout mt2">
              <div class="u-btn-layout__row center mb2_sp">
              <?php if (!$ssoFlag == 1){ ?>
                <a href="<?php echo $login_url ?>" class="u-btn_point u-btn-layout__item" style="margin-top : 8px;">ログインして動画を観る</a>
              </div>
              <small class="u-small">動画の視聴にはログインが必要になります。会員登録がお済みでない方は<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"　class="u-icon">こちら</a>よりご登録ください。</small>
              <?php } else {; ?>
                <a href="https://www.youtube.com/watch?v=0nLcO_F14w0" target="_blank" class="u-btn_point u-btn-layout__item mfp-btn__video" style="margin-top : 8px;">動画を観る</a>
              </div>
              <?php };?>
            </div>
          </div>
        </div>
        <div class="u-column__2 mb2">
          <div class="u-column__item">
            <h3><img src="<?php echo $img_url ?>/event/golf19/lesson03@2x.png" alt="" class="u-img__max" loading="lazy"></h3>
            <p class="mb2">グリーン周りのアプローチを打つ時のポイントを藤田寛之プロが解説します！</p>
            <figure>
              <img src="<?php echo $img_url ?>/event/golf19/lesson03__img@2x.jpg" alt="グリーン周りのアプローチを打つ時のポイントを藤田寛之プロが解説します！" class="u-img__max" loading="lazy">
            </figure>
            <div class="u-btn-layout mt2">
              <div class="u-btn-layout__row center mb2_sp">
              <?php if (!$ssoFlag == 1){ ?>
                <a href="<?php echo $login_url ?>" class="u-btn_point u-btn-layout__item" style="margin-top : 8px;">ログインして動画を観る</a>
              </div>
              <small class="u-small">動画の視聴にはログインが必要になります。会員登録がお済みでない方は<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"　class="u-icon">こちら</a>よりご登録ください。</small>
              <?php } else {; ?>
                <a href="https://www.youtube.com/watch?v=fk4u0Q1NP9U" target="_blank" class="u-btn_point u-btn-layout__item mfp-btn__video" style="margin-top : 8px;">動画を観る</a>
              </div>
              <?php };?>
            </div>
          </div>
          <div class="u-column__item">
            <h3><img src="<?php echo $img_url ?>/event/golf19/lesson04@2x.png" alt="" class="u-img__max" loading="lazy"></h3>
            <p class="mb2">バンカーから脱出するポイントを芹澤信雄プロが解説します！</p>
            <figure>
              <img src="<?php echo $img_url ?>/event/golf19/lesson04__img@2x.jpg" alt="バンカーから脱出するポイントを芹澤信雄プロが解説します！" class="u-img__max" loading="lazy">
            </figure>
            <div class="u-btn-layout mt2">
              <div class="u-btn-layout__row center mb2_sp">
              <?php if (!$ssoFlag == 1){ ?>
                <a href="<?php echo $login_url ?>" class="u-btn_point u-btn-layout__item" style="margin-top : 8px;">ログインして動画を観る</a>
              </div>
              <small class="u-small">動画の視聴にはログインが必要になります。会員登録がお済みでない方は<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"　class="u-icon">こちら</a>よりご登録ください。</small>
              <?php } else {; ?>
                <a href="https://www.youtube.com/watch?v=_nZLR3Y6jIw" target="_blank" class="u-btn_point u-btn-layout__item mfp-btn__video" style="margin-top : 8px;">動画を観る</a>
              </div>
              <?php };?>
            </div>
          </div>
        </div>
        <div class="u-column__2 mb5 mb3_sp">
          <div class="u-column__item">
            <h3><img src="<?php echo $img_url ?>/event/golf19/lesson05@2x.png" alt="" class="u-img__max" loading="lazy"></h3>
            <p class="mb2">パターを打つ時のポイントを深堀圭一郎プロが解説します！</p>
            <figure>
              <img src="<?php echo $img_url ?>/event/golf19/lesson05__img@2x.jpg" alt="パターを打つ時のポイントを深堀圭一郎プロが解説します！" class="u-img__max" loading="lazy">
            </figure>
            <div class="u-btn-layout mt2">
              <div class="u-btn-layout__row center mb2_sp">
              <?php if (!$ssoFlag == 1){ ?>
                <a href="<?php echo $login_url ?>" class="u-btn_point u-btn-layout__item" style="margin-top : 8px;">ログインして動画を観る</a>
              </div>
              <small class="u-small">動画の視聴にはログインが必要になります。会員登録がお済みでない方は<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"　class="u-icon">こちら</a>よりご登録ください。</small>
              <?php } else {; ?>
                <a href="https://www.youtube.com/watch?v=jWmSmolUoEQ" target="_blank" class="u-btn_point u-btn-layout__item mfp-btn__video" style="margin-top : 8px;">動画を観る</a>
              </div>
              <?php };?>
            </div>
          </div>
        </div>
        <?php if (!$ssoFlag == 1){ ?>

        <hr class="u-hr__dot">
        <p class="u-font__bold u-font-size__20 center">会員未登録の方は、長谷工IDに登録して動画をご覧ください。</p>
        <div class="u-btn-layout mt2 mb5 mb3_sp">
          <div class="u-btn-layout__row center mb2_sp">
            <a href="<?php echo $myentry_url ?>" target="_blank" class="u-btn_point u-btn-layout__item" style="margin-top : 8px;">新規登録</a>
          </div>
        </div>
        <?php }; ?>
      </section>
      <section>
        <div class="u-assist">
          <h3 class="u-ttl__m center"><img src="<?php echo $img_url ?>/event/golf19/present@2x.png" alt="" class="u-img__max" style="max-width : 432px;" loading="lazy" alt=""></h3>
          <p class="mb3 u-font__palt">動画中に現れるキーワードを集めてできる、ブランシエラクラブにちなんだワードを応募フォームに入力してください。<br>すべての動画を視聴して、ぜひご応募くださいね。</p>
          <div class="u-column__3 mb2">
            <div class="u-column__item2sp">
              <h3 class="mb2"><img src="<?php echo $img_url ?>/event/golf19/present__a@2x.png" alt="A賞 高橋勝成プロ　サイン入りゴルフボール" class="u-img__max" loading="lazy"></h3>
              <img src="<?php echo $img_url ?>/event/golf19/present__a_img@2x.png" alt="高橋勝成プロ" class="u-img__max" loading="lazy">
            </div>
            <div class="u-column__item2sp">
              <h3 class="mb2"><img src="<?php echo $img_url ?>/event/golf19/present__b@2x.png" alt="B賞 谷口徹プロ　サイン入りゴルフボール" class="u-img__max" loading="lazy"></h3>
              <img src="<?php echo $img_url ?>/event/golf19/present__b_img@2x.png" alt="谷口徹プロ" class="u-img__max" loading="lazy">
            </div>
            <div class="u-column__item2sp u-only__pc">
              <h3 class="mb2"><img src="<?php echo $img_url ?>/event/golf19/present__c@2x.png" alt="C賞 藤田寛之プロ サイン入りゴルフボール" class="u-img__max" loading="lazy"></h3>
              <img src="<?php echo $img_url ?>/event/golf19/present__c_img@2x.png" alt="藤田寛之プロ" class="u-img__max" loading="lazy">
            </div>
          </div>
          <div class="u-column__3 flex_center mb2">
            <div class="u-column__item2sp u-only__sp">
              <h3 class="mb2"><img src="<?php echo $img_url ?>/event/golf19/present__c@2x.png" alt="C賞 藤田寛之プロ サイン入りゴルフボール" class="u-img__max" loading="lazy"></h3>
              <img src="<?php echo $img_url ?>/event/golf19/present__c_img@2x.png" alt="藤田寛之プロ" class="u-img__max" loading="lazy">
            </div>
            <div class="u-column__item2sp mb2_sp">
              <h3 class="mb1"><img src="<?php echo $img_url ?>/event/golf19/present__d@2x.png" alt="D賞 芹澤信雄プロ サイン入りゴルフボール" class="u-img__max" loading="lazy"></h3>
              <img src="<?php echo $img_url ?>/event/golf19/present__d_img@2x.png" alt="芹澤信雄プロ" class="u-img__max" loading="lazy">
            </div>
            <div class="u-column__item2sp">
              <h3 class="mb1"><img src="<?php echo $img_url ?>/event/golf19/present__e@2x.png" alt="深堀圭一郎プロ　サイン入りパター" class="u-img__max" loading="lazy"></h3>
              <img src="<?php echo $img_url ?>/event/golf19/present__e_img@2x.png" alt="深堀圭一郎プロ" class="u-img__max" loading="lazy">
            </div>
          </div>
          <hr class="u-hr__dot">
          <div class="u-list__dl_table_long">
            <dl>
              <dt>[応募期間]</dt>
              <dd>2020年12月24日（木）～ 2021年1月11日（月）（予定）</dd>
            </dl>
            <dl>
              <dt>[応募方法]</dt>
              <dd>ページ下部のボタンより、必要事項を入力の上、送信ください。<br>※ご住所のご登録があること、及び、「長谷工グループ情報希望」欄にチェックがされていることが条件となります。<br>ご登録情報の詳細は<a href="<?php echo $mytop_url; ?>" target="_blank">マイページ</a>の「登録情報の確認・変更」をご確認ください。</dd>
            </dl>
            <dl>
              <dt>[当選者発表]</dt>
              <dd>賞品の発送をもってかえさせていただきます。</dd>
            </dl>
            <dl>
              <dt>[ご注意事項]</dt>
              <dd>
                ※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。<br>※ 本プレゼントの当選権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。
              </dd>
            </dl>
          </div>
        </div>
				<label class="u-btn_end center mt2">応募は終了しました</label>
      </section>
    </section>

  </article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
