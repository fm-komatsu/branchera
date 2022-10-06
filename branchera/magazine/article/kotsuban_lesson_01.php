<?php
//base
include ("../../function.php");
$content = get_id_data('24001');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article kotsuban-lesson";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/magazine/" ,"ブランシエラマガジン");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
    ?>
    <div class="main__wrapper">

      <section class="section wrapper">

        <div class="mb5 mb3_sp">
          <figure class="mb0">
            <img src="<?php echo $img_url; ?>/magazine/kotsuban_lesson/kotsuban_mv_pc@2x.jpg"
              alt="ボディワーク「b-i STYLE®」スタジオレッスン　イメージ" class="u-img__max u-only__pc" loading="lazy">
            <img src="<?php echo $img_url; ?>/magazine/kotsuban_lesson/kotsuban_mv_sp@2x.jpg"
            alt="ボディワーク「b-i STYLE®」スタジオレッスン イメージ" class="u-img__max u-only__sp" loading="lazy">
          </figure>
          <?php
            include ($inc_path."/lib/inc/page/_magazine/__kotsuban_lesson__headnav.php");
          ?>
        </div>
        <div class="mb4">
          <figure>
            <img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/cate_care@2x.png" alt="" class="u-img__max u-only__pc" loading="lazy">
            <img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/cate_care-sp@2x.png" alt="" class="u-img__max u-only__sp" loading="lazy">
          </figure>
        </div>
        <div class="kotsuban-lesson-movie-list movie-list mb3">
          <div class="movie-list__row">
            <div class="movie-list__item"><a href="https://www.youtube.com/watch?v=mFFdGSDQLeA" class="mfp-btn__video"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/movie_care_01@2x.png" alt="頭の疲れをとる ～いろんなことを考えてしまう～" class="u-img__max"></a></div>
            <div class="movie-list__item"><a href="https://www.youtube.com/watch?v=K7ubcghNSEE" class="mfp-btn__video"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/movie_care_02@2x.png" alt="目の疲れをとる ～オンライン化しすぎて～" class="u-img__max"></a></div>
            <?php  if ($ssoFlag == 1){ ?>
              <div class="movie-list__item"><a href="https://www.youtube.com/watch?v=_PHNRTXFlVQ" class="mfp-btn__video"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/movie_care_03@2x.png" alt="活力を上げる ～感情を解放する～" class="u-img__max"></a></div>
              <div class="movie-list__item"><a href="https://www.youtube.com/watch?v=-22HmN0IxQ4" class="mfp-btn__video"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/movie_care_04@2x.png" alt="首こりをとる ～悪い姿勢が原因!?～" class="u-img__max"></a></div>
              <div class="movie-list__item"><a href="https://www.youtube.com/watch?v=C7ejOkJ8ONg" class="mfp-btn__video"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/movie_care_05@2x.png" alt="呼吸力をあげる ～不安はおもわぬところから～" class="u-img__max"></a></div>
              <div class="movie-list__item"><a href="https://www.youtube.com/watch?v=muf6blTBw9I" class="mfp-btn__video"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/movie_care_06@2x.png" alt="食べ過ぎの時 ～後悔で自分を責め過ぎないように～" class="u-img__max"></a></div>
              <div class="movie-list__item"><a href="https://www.youtube.com/watch?v=UVDhhR5_ui8" class="mfp-btn__video"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/movie_care_07@2x.png" alt="腸の活性化 ～免疫力の要、骨盤周りを〜" class="u-img__max"></a></div>
              <div class="movie-list__item"><a href="https://www.youtube.com/watch?v=JV-6Ooy2tCg" class="mfp-btn__video"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/movie_care_08@2x.png" alt="お尻のコリ解消 ～座る時間が長い日本人へ～" class="u-img__max"></a></div>
              <div class="movie-list__item"><a href="https://www.youtube.com/watch?v=mh6NTgu0Rw8" class="mfp-btn__video"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/movie_care_09@2x.png" alt="脚のだるさをとる ～運動の過不足、どちらでも起こる～" class="u-img__max"></a></div>
              <div class="movie-list__item"><a href="https://www.youtube.com/watch?v=_9bdhaWgSqI" class="mfp-btn__video"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/movie_care_10@2x.png" alt="腰のダルさをとる ～腰痛の前兆をみのがさない～" class="u-img__max"></a></div>
            <?php } else { ; ?>
              <a href="<?php echo $login_url; ?>" class="u-btn_brand center mt3">ログインしてもっと動画を観る</a>
            <?php } ?>
          </div>
        </div>
        <div class="kotsuban-lesson-link link mb5 mb10_sp">
          <figure>
            <img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/link_top@2x.png" alt="" class="u-img__max u-only__pc" loading="lazy">
            <img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/link_top-sp@2x.png" alt="" class="u-img__max u-only__sp" loading="lazy">
          </figure>
          <div class="link__row">
            <p class="kotsuban-lesson__strong center mt0 u-font__palt">ペルヴィス®ワークは「b-i STYLE®」にてスタジオレッスン・オンラインレッスンが受けられます。</p>
            <figure class="center link__btn">
              <a href="https://www.b-i-style.com/" target="_blank"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/btn_link@2x.png" alt="詳しくはこちら" class="u-img__max center" loading="lazy" style="max-width:270px;"></a>
            </figure>
          </div>
        </div>
        <div class="kotsuban-lesson-assist assist mb4">
          <div class="assist__row ">
            <div class="assist__img">
              <img
              src="<?php echo $img_url ?>/magazine/kotsuban_lesson/teacher_kyo@2x.jpg"
              class="u-img__max assist__teacherimg"
              alt="プロデューサーkyo先生"
              loading="lazy">
            </div>
            <div class="assist__ex">
              <figure class="mb1_sp">
                <img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/int_ttl@2x.png" alt="教えてくれたのはこの方！" class="u-img__max mb1 u-only__pc" loading="lazy" style="max-width:212px;">
                <img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/int_ttl-sp@2x.png" alt="教えてくれたのはこの方！" class="u-img__max u-only__sp" loading="lazy" style="max-width:151px;">
              </figure>
              <h3 class="mb2 kotsuban-lesson__strong">骨盤の女王・ボディーワーク<br class="u-only__sp">プロデューサーkyo先生</h3>
              <p>フィットネスインストラクターとして25年以上の指導経歴をもつkyo先生。自力で骨盤のゆがみを調整し、美しいバランスのとれたボディを目指す「b-i STYLE®」を展開しています。</p>
              <a href="http://www.b-i-style.com" target="_blank" class="u-icon">http://www.b-i-style.com</a>
              <p class="cap">※b-i STYLE®(ビイスタイル)は株式会社b-iの商標登録です。</p>
            </div>
          </div>
        </div>
        <div class="kotsuban-lesson-footer">
          <?php
            include ($inc_path."/lib/inc/page/_magazine/__kotsuban_lesson__footnav.php");
          ?>
        </div>
      </section>
    </div>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
