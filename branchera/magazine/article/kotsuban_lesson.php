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
$body_class ="page-article";

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

        <h2 class="u-ttl__l first-of-type">お家でチャレンジ！からだづくりレッスン</h2>
        <div class="u-clearfix mb2">
          <figure class="u-float__left">
            <img data-src="<?php echo $img_url; ?>/magazine/kotsuban_lesson/img01.jpg" data-retina="<?php echo $img_url; ?>/magazine/kotsuban_lesson/img01@2x.jpg"
              alt="ボディワーク「b-i STYLE®」スタジオレッスンの様子" style="max-width:300px" class="u-img__max">
          </figure>
          <p class="u-font__palt">ブランシエラクラブでも、全国でイベントを開催している美しい骨盤づくりのボディワーク「b-i STYLE®」レッスン。<br>今回は、“骨盤の女王・ボディワークプロデューサーkyo”先生による、お家で簡単にチャレンジできる、からだづくりレッスンを動画でご紹介します。</p>
        </div>
        <h3 class="u-ttl__m mt3">b-iのペルヴィス＠ワーク</h3>
        <p>本来、各地のスタイリストの元でお受けいただける、骨盤呼吸法と全身調整のペルヴィスワークのレッスンを、全国の愛好者の方々のために配信！</p>
        <div class="u-movie">
          <div class="u-movie__video">
            <div class="u-movie__video_base">
              <iframe class="u-movie__video_emb" src="https://www.youtube.com/embed/jrhqxC9Y1Mo?rel=0" frameborder="0"
              gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <h3 class="u-ttl__m mt3">簡単にできる！発散が上手くできるからだづくりを！</h3>
        <p>夏場に向けて、適切に汗がかけるからだづくりがポイントです。<br>上手に発散できるストレッチ方法をご紹介します。</p>
        <div class="u-movie">
          <div class="u-movie__video">
            <div class="u-movie__video_base">
              <iframe class="u-movie__video_emb" src="https://www.youtube.com/embed/8Zwb4CVArJA?rel=0" frameborder="0"
              gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <h3 class="u-ttl__m mt3">まだ間に合う！簡単にできる！気になる二の腕のケア</h3>
        <p>洋服の袖からスラっとのぞく二の腕を目指すための、調整方法をご紹介。<br>二の腕の老廃物を流して、すっきりとしたボディを目指しましょう。</p>
        <div class="u-movie">
          <div class="u-movie__video">
            <div class="u-movie__video_base">
              <iframe class="u-movie__video_emb" src="https://www.youtube.com/embed/aIQa_HSK3Vw?rel=0" frameborder="0"
              gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <h3 class="u-ttl__m mt3">フローダンス基本の3つの動きにチャレンジ！</h3>
        <p>骨盤を使った、フローダンスに必要な基本の動きをご紹介します。</p>
        <div class="u-movie">
          <div class="u-movie__video">
            <div class="u-movie__video_base">
              <iframe class="u-movie__video_emb" src="https://www.youtube.com/embed/bf2u3jW4fms?rel=0" frameborder="0"
              gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <h3 class="u-ttl__m mt3">基本の３つの動きを使ってLet's dance！</h3>
        <p>前回のフローダンスに必要な３つの動きを使って、音楽に合わせてダンスにチャレンジ！</p>
        <div class="u-movie mb3">
          <div class="u-movie__video">
            <div class="u-movie__video_base">
              <iframe class="u-movie__video_emb" src="https://www.youtube.com/embed/VnBciqj859A?rel=0" frameborder="0"
              gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="u-assist">

          <div class="u-float__left u-position__center">
            <img class="w100"
            data-src="<?php echo $img_url ?>/magazine/kotsuban_lesson/teacher_kyo.jpg"
            data-retina="<?php echo $img_url ?>/magazine/kotsuban_lesson/teacher_kyo@2x.jpg"
            src="<?php echo $img_url ?>/magazine/kotsuban_lesson/teacher_kyo.jpg"
            style="max-width:200px;"
            class="u-img__max">
          </div>
          <p class="mb1" style="display:inline-block;padding:3px 10px; background:#ff8400;border-radius:10px;color:#FFF;">教えてくれたのはこの方！</p>
          <h3 class="mb2">骨盤の女王・ボディーワークプロデューサーkyo先生</h3>
          <p>フィットネスインストラクターとして25年以上の指導経歴をもつkyo先生。自力で骨盤のゆがみを調整し、美しいバランスのとれたボディを目指す「b-i STYLE®」を展開しています。</p>
          <a href="http://www.b-i-style.com" target="_blank" class="u-icon">http://www.b-i-style.com</a>
          <p class="cap">※b-i STYLE®(ビイスタイル)は株式会社b-iの商標登録です。</p>

        </div>



      </section>
    </div>

  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
