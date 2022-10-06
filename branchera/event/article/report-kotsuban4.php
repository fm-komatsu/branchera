<?php
//base
include ("../../function.php");
$content = get_id_data('4085');
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
    $panAry[] = array("/event/" ,"イベント・キャンペーン");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
    ?>
    <div class="main__wrapper">

      <section class="section wrapper">

        <h2 class="u-ttl__l first-of-type">骨盤の調整レッスン 《福岡》 イベントレポート</h2>

        <div class="u-list__dl_table mb3">
          <dl>
          <dt>開催日</dt>
            <dd>2020年1月19日（日）</dd>
          </dl>
          <dl>
            <dt>場所</dt>
            <dd>スタジオ・ヨギー福岡天神</dd>
          </dl>
          <dl>
            <dt>講師</dt>
            <dd>アサナ先生（b-i stylist）</dd>
          </dl>
        </div>

        <p class="mb3 u-font__palt">今回は初の福岡での開催！ 特筆すべきは、今までの同イベントに比べ、男性の参加率が高かったこと。<br>20代から60代まで、幅広い年代の方にご参加いただき、セルフメンテナンスの方法を体験していただきました。</p>
				<div class="flex between mb2">
          <figure class="w50 mb2_sp">
            <img data-src="<?php echo $img_url ?>/event/report-kotsuban4/img__01.jpg"
            data-retina="<?php echo $img_url ?>/event/report-kotsuban4/img__01@2x.jpg"
            alt="<?php echo $pageTtl?>｜レッスンの様子"
            class="u-img__max">
          </figure>
          <figure class="w50">
            <img data-src="<?php echo $img_url ?>/event/report-kotsuban4/img__02.jpg"
            data-retina="<?php echo $img_url ?>/event/report-kotsuban4/img__02@2x.jpg"
            alt="<?php echo $pageTtl?>｜レッスンの様子"
            class="u-img__max">
          </figure>
				</div>
				<div class="flex between mb3">
          <figure class="w50 mb2_sp">
            <img data-src="<?php echo $img_url ?>/event/report-kotsuban4/img__03.jpg"
            data-retina="<?php echo $img_url ?>/event/report-kotsuban4/img__03@2x.jpg"
            alt="<?php echo $pageTtl?>｜レッスンの様子"
            class="u-img__max">
          </figure>
          <figure class="w50">
            <img data-src="<?php echo $img_url ?>/event/report-kotsuban4/img__04.jpg"
            data-retina="<?php echo $img_url ?>/event/report-kotsuban4/img__04@2x.jpg"
            alt="<?php echo $pageTtl?>｜レッスンの様子"
            class="u-img__max">
          </figure>
				</div>
        <div class="u-assist">
          <p>講師のアサナ先生が、「みなさんの熱気で窓ガラスが曇るほど、真剣に楽しく受けていただけて、私も楽しくレッスンできました！」とおっしゃるほど、充実したイベントとなりました！</p>
        </div>
        <h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

        <div class="event_comment">
          <div class="balloon mb woman">
            <div class="inner">
              <div>
                <p>今日は楽しく有意義なイベントにご招待いただき、ありがとうございました。<br>心地よい疲れがあり、今日はよく眠れそうです。</p>
              </div>
            </div>
          </div>
          <div class="balloon mb man">
            <div class="inner">
              <div>
                <p>久し振りに思いっ切り身体を動かせました。先生もプロの素敵な方だったし、終わった後は心も身体もほぐれて軽くなり、リフレッシュ出来ました。<br>幾つかのエクササイズは今でも実践してますよ。</p>
              </div>
            </div>
          </div>
          <div class="balloon mb man">
            <div class="inner">
              <div>
                <p>講師の方も感じ良く、日時・場所も私に最適でした。</p>
              </div>
            </div>
          </div>
          <div class="balloon mb woman">
            <div class="inner">
              <div>
                <p>あっという間の楽しい時間でした。<br>自宅に帰ってから復習をしようと思ったのですが、忘れてしまった所も多く、簡単なレジュメのようなものがあったら良かったと思いました。</p>
              </div>
            </div>
          </div>
        </div>


        <div class="u-assist center" style="line-height:2;">
          <p class="u-font__palt">終了後には「今回のイベントをきっかけに、メンテナンスのために定期的に通いたい」との声も！</p>
          <strong>ぜひ、次のイベントの開催をお楽しみに！</strong>
        </div>
      </section>
    </div>

  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
