<?php
//base
include ("../../function.php");
$content = get_id_data('11030');
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
  <article class="main__row ">
    <?php
    $panAry[] = array("/enquete/" ,"アンケート");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
    ?>

    <div class="main__wrapper">
      <section class="main__item">
        <h2 class="u-ttl__l">「いま暮らCafé」がはじまります！</h2>

        <div class="enquete-ex">
          <div class="enquete-ex__row">
            <div class="enquete-ex__ex mb3">
              <p class="mb2">みなさまの“声”から、“暮らしの今”を切り取りお伝えする、「いま暮らCafé」がはじまります。“今”この時をどのように感じ、行動しているかをお聞きし、すばやくレポートにして掲載していきます！</p>
              <p>初回は、すっかり日常に定着しつつある「テレワーク」について。<br>テレワークの中でも<strong>『在宅勤務』を経験されたことのある方の“声”を募集します。</strong><br>プライベートな空間のなかに、今まで“外”の世界だった“仕事”を持ち込み、どのようになじませているのでしょうか。テレワーク（在宅勤務）のプラス面、マイナス面、テレワーク中のハプニングなどをお聞かせください。<br>受付期間は1週間、設問数は6問だけの“ちょこっと”アンケートです。あなたの“今”をお待ちしています！</p>
            </div>
            <img src="<?php echo $img_url; ?>/enquete/bran.png" class="enquete-ex__img" >
          </div>
        </div>

        <div class="u-assist">
          <h5 class="u-ttl__s">アンケート概要</h5>
          <div class="u-list__dl_table">
            <dl>
              <dt>受付期間</dt>
              <dd>2020年10月29日（木）～11月4日（水）</dd>
            </dl>
            <dl>
              <dt>対象者</dt>
              <dd>長谷工IDをお持ちの方で、テレワーク（在宅勤務）を経験されたことのある方</dd>
            </dl>
            <dl>
              <dt>特典</dt>
              <dd>ご回答いただいた方全員に50スマイルプレゼント<br><span class="u-small">※スマイルの付与はアンケート期間終了から1週間程度とさせていただきます。</span></dd>
            </dl>
            <dl>
              <dt>回答方法</dt>
              <dd>ページ下部の「アンケートはこちらから」ボタンよりお答えください<br><span class="u-small">※ご回答は1IDにつき1度のみとなります。</span></dd>
            </dl>
            <dl>
              <dt>集計結果</dt>
              <dd>本WEBサイトにて公開させていただきます</dd>
            </dl>
          </div>
        </div>

        <?php if($eventSts == 'new') { ?>
        <div class="u-btn-layout">
          <div class="u-btn-layout__row">
            <a href="https://haseko.flpjp.com/spiralUrl/BRC013" target="_blank" rel="nofollow" class="u-btn_point u-btn-layout__item">アンケートはこちらから</a>
          </div>
        </div>
        <?php } else { ?>
          <label class="u-btn_end center mt2" >アンケートは終了いたしました</label>
        <?php } ?>



      </section>

    </div>

  </article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
