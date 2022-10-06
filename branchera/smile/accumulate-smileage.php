<?php
//base
include ("../function.php");
$content = get_id_data('90003');
$pageTtl = $content['title'];

//meta
$metaTtl = '住まいレージ「' . $pageTtl . '」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];
//bodyClass
$body_class ="page-list";

$smileType ="accumulate-smileage";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/smile/","住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?>
    <?php
    include ($inc_path."/lib/inc/page/_smile/__main-header.php");
    ?>
    <section class="main__item useSmileArea" id="save">
      <div class="pageSmileaboutTtl-row">
        <div class="pageSmileaboutTtl-item-img">
          <img src="<?php echo $img_url; ?>/smile/about/img-ttl02@2x.png" alt="ためる" class="u-img__max">
        </div>
        <p class="pageSmileaboutTtl-item-text">さまざまなシーンでたまるスマイル。 <br class="tb">ブランシエラクラブで「ため方」を覚えて、 <br class="tb">オトクな商品・サービスに活用しましょう！</p>
      </div>
      <hr>
      <section class="main__item">

        <ul class="u-articlelist__row u-font__palt">
          <li class="u-articlelist__item">
            <a href="<?php echo $myentry_url; ?>" class="u-articlelist__a">
              <figure class="u-articlelist__img">
                <img
                src="../lib/img/thum/smile-shinki@2x.jpg"
                alt="長谷工ID新規登録でためる"
                loading="lazy">
              </figure>
              <h2 class="u-articlelist__ttl">長谷工ID新規登録でためる</h2>
              <p class="u-articlelist__ex">長谷工ID新規ご登録で1,000スマイルプレゼントいたします。</p>
              <div class="toIndex">
                <div class="indexIcon"></div>
                <div class="indexWord">新規登録はこちら</div>
              </div>
            </a>
          </li>

          <li class="u-articlelist__item">
            <a href="<?php echo $mylucky_url; ?>" class="u-articlelist__a" data-ga-click="smilage_page_tameru_lucky">
              <figure class="u-articlelist__img accumulate">
                <img
                src="../lib/img/thum/smile-luckyroom.png"
                alt="ラッキールームでためる"
                loading="lazy">
              </figure>
              <h3 class="u-articlelist__ttl">ラッキールームでためる</h3>
              <p class="u-articlelist__ex">ボタンを選んでスマイルが獲得できます。獲得数は毎日変わるので、ぜひ毎日チャレンジしてください！<br>※未ログインの場合はログインページに移動します。</p>
              <div class="toIndex">
                <div class="indexIcon"></div>
                <div class="indexWord">チャレンジスタート！</div>
              </div>
              <div class="u-articlelist__icon"></div>
            </a>
          </li>

          <li class="u-articlelist__item">
            <div class="u-articlelist__a pb0">
              <figure class="u-articlelist__img use-smileage">
                <img
                src="../lib/img/thum/smile-action@2x.jpg"
                alt="メールマガジンでためる"
                loading="lazy">
              </figure>
              <h3 class="u-articlelist__ttl">メールマガジンでためる</h3>
              <p class="u-articlelist__ex">毎月第1・第3木曜日に配信しているメールマガジンの中に、スマイルを獲得できる「あたり」リンクが隠れています。<br>※メルマガの配信設定が必要となります。マイページ内「登録情報の確認・変更」の、“長谷工グループ情報希望” 欄をご確認ください。</p>
              <!-- <div class="toIndex">
                <div class="indexIcon"></div>
                <div class="indexWord">詳細ページへ</div>
              </div>
              <div class="u-articlelist__icon"></div> -->
            </div>
          </li>

          <li class="u-articlelist__item">
            <div class="u-articlelist__a pb0">
              <figure class="u-articlelist__img exchange-product">
                <img
                src="../lib/img/thum/smile-birth@2x.jpg"
                alt="バースデーメールでためる"
                loading="lazy">
              </figure>
              <h3 class="u-articlelist__ttl">バースデーメールでためる</h3>
              <p class="u-articlelist__ex">1年に1度、お誕生月にアクションポイントをプレゼント！メールでご案内するので、ぜひチェックしてください。<br>※メルマガの配信設定が必要となります。マイページ内「登録情報の確認・変更」の、“長谷工グループ情報希望” 欄をご確認ください。</p>
            </div>
          </li>
          <li class="u-articlelist__item">
            <div class="u-articlelist__a pb0">
              <figure class="u-articlelist__img exchange-product">
                <img
                src="../lib/img/thum/mitsuketa_thumbnail@2x.png"
                alt="見つけた！ポイントでためる"
                loading="lazy">
              </figure>
              <h3 class="u-articlelist__ttl">見つけた！ポイントでためる</h3>
              <p class="u-articlelist__ex">ブランシエラクラブ サイト内のページのどこかに出現する「見つけた！」ボタンを押してスマイルゲット！出現するページは毎月変わります。</p>
            </div>
          </li>
          <li class="u-articlelist__item">
            <a data-scroll href="<?php echo $base_url ?>/enquete/" class="u-articlelist__a">
              <figure class="u-articlelist__img exchange-product">
                <img
                src="../lib/img/thum/smile-enq@2x.jpg"
                alt="アンケートでためる"
                loading="lazy">
              </figure>
              <h3 class="u-articlelist__ttl">アンケートでためる</h3>
              <p class="u-articlelist__ex">アンケートに答えると、スマイルをプレゼント。アンケートの実施は、メールマガジンでご案内しています。</p>
              <div class="toIndex">
                <div class="indexIcon"></div>
                <div class="indexWord">詳細ページへ</div>
              </div>
              <div class="u-articlelist__icon"></div>
            </a>
          </li>

        </ul>
      </section>

    </section>
  </article>
  <nav class="main__snav snav">
    <?php include ($inc_path."/lib/inc/page/_smile/__snav.php"); ?>
  </nav>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
