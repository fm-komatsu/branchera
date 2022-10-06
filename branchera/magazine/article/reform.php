<?php
//base
include( "../../function.php" );
$content = get_id_data( '1010' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '　1/3」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>
<main class="main">
  <article class="main__row">
    <?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_technology.php", "長谷工の技術・サービス" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
    <?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
    <div class="main__wrapper lottery-point">
      <section class="main__item">
        <div class="center mb6">
          <h3>
            <div class="u-only__pc">
              <img data-src="../../lib/img/magazine/reform/img01.png" data-retina="../../lib/img/magazine/reform/img01@2x.png"
                alt="ライフスタイルに合わせた理想のリフォーム" style="max-width:720px;" class="u-img__max">
            </div>
            <div class="u-only__sp">
              <img data-src="../../lib/img/magazine/reform/img01-sp.png" data-retina="../../lib/img/magazine/reform/img01-sp@2x.png"
                alt="ライフスタイルに合わせた理想のリフォーム" style="" class="u-img__max">
            </div>
          </h3>
        </div>
        <div class="mb6">
          <h4 class="u-ttl__m">ポイント<span class="icon">１</span> マンションの大規模修繕から、個人のお客さまの住宅リフォームまで幅広く対応</h4>
          <div class="fr" style="margin-left: 20px;">
            <img data-src="../../lib/img/magazine/reform/img02.png" data-retina="../../lib/img/magazine/reform/img02@2x.png"
              alt="image" style="max-width: 350px;" class="u-img__max">
          </div>
          <div>
            <p>業界1位を誇る約58万戸の新築マンション施工実績<sup class="u-small">※1</sup>、そして約35万戸のマンション管理実績<sup class="u-small">※2</sup>を持つ長谷工グループ。「長谷工リフォーム」は長谷工グループのリフォーム総合会社としてそのノウハウと経験を生かし、ワンランク上のリフォームを提供しています。</p>
            <p>長谷工グループの一員としての確かな技術と信頼性、最新ニーズへの対応力などが高く評価され、これまでに約43万戸のリフォーム実績<sup class="u-small">※3</sup>を蓄積。マンションの大規模修繕から中古・新築住宅、さらに戸建住宅まで、幅広いリフォームを手がけています。</p>
          </div>
        </div>
        <div class="mb6">
          <h4 class="u-ttl__m">ポイント<span class="icon">２</span> お客さまのライフプランやご予算、テーマなどご希望に合わせたリフォームをご提案</h4>
          <div class="fr" style="margin-left: 20px;">
            <img data-src="../../lib/img/magazine/reform/img03.png" data-retina="../../lib/img/magazine/reform/img03@2x.png"
              alt="ライフプランやご予算、テーマなどご希望に合わせたリフォームをご提案" style="max-width:360px ;" class="u-img__max">
          </div>
          <p>「家族との距離感や、それぞれの趣味・時間を尊重したい」「中古住宅をリフォームして、オンリーワンの住まいづくりをしたい」など、お住まいへのご希望はさまざま。「長谷工リフォーム」では、デザイン、テーマ、面積やご予算といった、さまざまなご希望に合わせたリフォームを行なっています。</p>
          <p>ご希望をお伺いする際には、お客さまのライフプランに合わせ、これまでに手がけてきた豊富なリフォーム事例もご紹介しながら、大切なお住まいのリフォームプランをご提案いたします。</p>
          <div class="u-only__pc u-assist">
            <img data-src="../../lib/img/magazine/reform/img04.png" data-retina="../../lib/img/magazine/reform/img04@2x.png"
              alt="リフォーム事例" style="max-width:692px ;" class="u-img__max mb3">
            <p class="center">
              <a href="https://www.haseko.co.jp/hrf/reform/jirei/" rel="nofollow" target="_blank" onclick="vars=s_gi('dvjpnbrancheraclub'); s.tl(true,'o','reform4');"
                class="u-icon">リフォーム事例の詳細はこちら</a></p>
          </div>
          <div class="u-only__sp u-assist">
            <img data-src="../../lib/img/magazine/reform/img04-sp.png" data-retina="../../lib/img/magazine/reform/img04-sp@2x.png"
              alt="リフォーム事例" style="" class="u-img__max">
            <p alighn="center"><a href="https://www.haseko.co.jp/hrf/reform/jirei/" rel="nofollow" target="_blank"
                onclick="vars=s_gi('dvjpnbrancheraclub'); s.tl(true,'o','reform4');" class="u-icon">リフォーム事例の詳細はこちら</a></p>
          </div>
        </div>
        <div class="mb6">
          <h4 class="u-ttl__m">ポイント<span class="icon">３</span> まずはお近くのリフォーム店、またはリフォームフェアや相談会へ</h4>
          <p>長谷工リフォームでは、地域に密着したリフォームのご相談にお応えするため、関東に11店舗、関西に5店舗のリフォーム店を展開しております。ご相談やお見積もりなど、お気軽にご相談ください。また、お得なキャンペーンや、お住まいの悩みやリフォームのご相談などにお応えするリフォームフェアや相談会、セミナーを多数開催しています。</p>
          <div class="u-assist">
            <p class="center"><a href="https://www.haseko.co.jp/hrf/reform/stores/" target="_blank" onclick="vars=s_gi('dvjpnbrancheraclub'); s.tl(true,'o','reform');"
                rel="nofollow" class="u-icon">お問い合わせはこちらから</a></p>
          </div>
          <div>
            <ul class="u-small">
              <li><small>※1.長谷工コーポレーションのマンション施工累計実績は<a href="http://www.haseko.co.jp/hc/what/works/results/" target="_blank"
                    rel="nofollow" class="u-icon">こちら</a></li>
              <li>※2.2015年9月末現在 ※長谷工コーポレーション調べ</small></li>
              <li>※3.2015年3月現在 ※長谷工リフォーム調べ</li>
            </ul>
          </div>
        </div>
      </section>
      <nav class="u-pager">
        <div class="u-pager__ttlwrap">
          <h6 class="u-pager__ttl"><a href="reform3.php" class="u-pager__link"><span class="u-pager__text">女性目線を大切にした、リフォームプランとは？</span></a></h6>
        </div>
        <ul class="u-pager__row">
          <li class="u-pager__item active"><a href="reform.php">1</a></li>
          <li class="u-pager__item"><a href="reform3.php">2</a></li>
        </ul>
      </nav>
    </div>
  </article>
</main>
<?php
					$toindex_url = "/magazine/index_technology.php";
					include ($inc_path."/lib/inc/toindex__magazin.php");
					?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
