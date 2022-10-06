<?php
//base
include("../../function.php");
$content = get_id_data('22001');
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article page-monozukuri";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

?>
<main class="monozukuri-main">
  <article class="monozukuri-main__row">
    <?php
        $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
        $panAry[] = array( "/magazine/index_monozukuri.php", "ものづくりへの想い" );
        include( $inc_path . "/lib/inc/pan.php" );
        include($inc_path . "/lib/inc/page/_magazine/__monozukuri-main-header.php");
        $monozukuri_img = 'monozukuri_introduction';
        include($inc_path . "/lib/inc/page/_magazine/__monozukuri-main-v.php");
        ?>
    <section class="main__wrapper">
      <h2 class="mb3">
        <img
        data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/topheading.png"
        data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/topheading@2x.png"
        alt="さらなる研究と技術革新を目指す新「長谷工技術研究所」"
        style="max-width: 742px;"
        class="u-img__max u-only__pc"
        >
        <img
        data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/topheading-sp.png"
        data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/topheading-sp@2x.png"
        alt="さらなる研究と技術革新を目指す新「長谷工技術研究所」"
        style="max-width: 666px;"
        class="u-img__max  u-only__sp"
        >
      </h2>
      <div class="monozukuri-heading__intro u-font__bold mb3">
        <p class="mb2">
          2018年8月に長谷工コーポレーションの創業80周年記念事業の一環として<br class="u-only__pc">東京都多摩市に新設された「長谷工テクニカルセンター」。
        </p>
        <p class="mb2">その中核を担うのが、長谷工グループの研究開発部門として研究・技術開発に取り組んできた長谷工技術研究所です。</p>
        <p>ここでは、新天地で新しくなった長谷工技術研究所の実験施設や設備に関してご紹介していきます。</p>
      </div>
      <section>
        <div>
          <h3 class="mb3">
            <img
            data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/heading01.png"
            data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/heading01@2x.png"
            alt="実験エリアの規模拡大、設備機能の向上などさらにパワーアップした研究施設！"
            style="max-width: 740px;"
            class="u-img__max u-only__pc"
            >
            <img
            data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/heading01-sp.png"
            data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/heading01-sp@2x.png"
            alt="実験エリアの規模拡大、設備機能の向上などさらにパワーアップした研究施設！"
            style="max-width: 607px;"
            class="u-img__max  u-only__sp"
            >
          </h3>
          <div class="mb3">
            <p>新しくなった技術研究所の中でも、もっとも大きく変わったのが実験施設です。<br>規模はもちろん、新たな設備も導入されたことにより、より一層、新技術や新商品の研究開発を進めていくことが可能になりました。博士号保有者はじめ、専門の研究員たちが日々研究を重ねる施設の一部をご紹介します。</p>
          </div>
        </div>
        <div>
          <div class="monozukuri-heading__h4 mb3">
            <h4 class="center u-font__bold">住宅実験棟</h4>
          </div>
          <div class="mb3">
            <p>
              住宅実験棟とは、実際のマンションと同じつくりの建物で、住戸の内外を実験室として使っています。旧施設にも同様の実験棟は設けられていましたが、新施設では、試験室の広さも戸数も増え、より住む人の目線に立った研究ができる最新の設備が導入されました。
            </p>
          </div>
          <div class="mb3">
            <figure>
              <img
              data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__01.jpg"
              data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__01@2x.jpg"
              alt="住宅実験棟"
              style="max-width: 740px;"
              class="u-img__max u-only__pc"
              >
              <img
              data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__01-sp.jpg"
              data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__01-sp@2x.jpg"
              alt="住宅実験棟"
              style="max-width: 607px;"
              class="u-img__max  u-only__sp"
              >
              <figcaption class="u-fig__cap_right"><span class="u-small">住宅実験棟</span></figcaption>
            </figure>
          </div>
          <div class="mb3">
            <p>また住宅実験棟は免震建物（拡頭杭免震構法®️）です。住宅実験棟の外から、杭の上部に設置された免震装置が見られるようになっており、ジャッキを用いて実際に建物を揺らす振動実験を行なうことが可能です。</p>
          </div>
          <div class="mb3">
            <figure>
              <img
              data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__02.jpg"
              data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__02@2x.jpg"
              alt="住宅実験棟"
              style="max-width: 740px;"
              class="u-img__max u-only__pc"
              >
              <img
              data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__02-sp.jpg"
              data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__02-sp@2x.jpg"
              alt="住宅実験棟"
              style="max-width: 607px;"
              class="u-img__max  u-only__sp"
              >
              <figcaption class="u-fig__cap_right"><span class="u-small">杭頭免震装置</span></figcaption>
            </figure>
          </div>
          <div class="monozukuri-heading__h5 mb3">
            <div class="flex flex__between">
              <div class="w55 monozukuri-heading__h5_txt">
                <div class="monozukuri-heading__h5_sp mb1_sp">
                  <div class="monozukuri-heading__h5_sptxt">
                    <h5 class="monozukuri-heading__h5_ttl">遮音に関する技術開発</h5>
                    <p class="u-only__sp u-small">床衝撃音性能試験</p>
                  </div>
                  <div class="w45 monozukuri-heading__h5_spimg">
                    <img
                      data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__03-sp.jpg"
                      data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__03-sp@2x.jpg"
                      alt="床衝撃音性能試験"
                      style="max-width: 260px;"
                      class="u-img__max  u-only__sp"
                      >
                  </div>
                </div>
                <div class="monozukuri-heading__h5_ex">
                  <p>マンションにおいて“音”は、悩み事に取り上げられる問題の一つです。長谷工技術研究所でも、音に関するさまざまな試験を行ない、住宅性能の向上させる開発を進めています。例えば、「床衝撃音性能試験」では、バングマシンと呼ばれる床に衝撃を与える装置を使い、子どもが跳ねる音など、住戸内での生活音を再現。実際のマンションと同じ環境で試験することで、より高い精度の技術開発を実現しています。</p>
                </div>
              </div>
              <div class="w45 monozukuri-heading__h5_pcimg">
                <figure>
                  <img
                  data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__03.jpg"
                  data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__03@2x.jpg"
                  alt="床衝撃音性能試験"
                  style="max-width: 316px;"
                  class="u-img__max u-only__pc"
                  >
                  <figcaption class="u-fig__cap_right u-only__pc"><span class="u-small">床衝撃音性能試験</span></figcaption>
                </figure>
              </div>
            </div>
          </div>
          <div class="monozukuri-heading__h4 mb3">
            <h4 class="center u-font__bold">多目的実験棟</h4>
          </div>
          <div class="mb3">
            <p>新設された多目的実験棟は、実験テーマにあわせて「環境実験エリア」「材料実験エリア」「構造実験エリア」と3つに分かれており、その名の通り、目的にあわせてさまざまな実験が行なえるよう充実した設備が備わった施設となっています。</p>
            <p>新しく導入された設備を活用し、いつでも安全・安心で、かつ快適に気持ちよく過ごせる住まいをご提供するために、最新のテクノロジーの創出に日夜挑戦し続けています。</p>
          </div>
          <div class="mb3">
            <figure>
              <img
              data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__04.jpg"
              data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__04@2x.jpg"
              alt="多目的実験棟"
              style="max-width: 740px;"
              class="u-img__max u-only__pc"
              >
              <img
              data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__04-sp.jpg"
              data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__04-sp@2x.jpg"
              alt="多目的実験棟"
              style="max-width: 607px;"
              class="u-img__max  u-only__sp"
              >
              <figcaption class="u-fig__cap_right"><span class="u-small">多目的実験棟</span></figcaption>
            </figure>
          </div>
          <div class="monozukuri-heading__h5 mb3">
            <div class="flex flex__between">
              <div class="w55 monozukuri-heading__h5_txt">
                <div class="monozukuri-heading__h5_sp mb1_sp">
                  <div class="monozukuri-heading__h5_sptxt">
                    <h5 class="monozukuri-heading__h5_ttl">さまざまな環境を再現</h5>
                    <p class="u-only__sp u-small">熱環境試験室</p>
                  </div>
                  <div class="w45 monozukuri-heading__h5_spimg">
                    <img
                      data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__05-sp.jpg"
                      data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__05-sp@2x.jpg"
                      alt="熱環境試験室"
                      style="max-width: 260px;"
                      class="u-img__max  u-only__sp"
                      >
                  </div>
                </div>
                <div class="monozukuri-heading__h5_ex">
                  <p>環境実験エリアでは、夏の日照りや大雨などを再現できる「熱環境試験室」を導入し、住まいを取り囲む環境が建物に対し、どのような影響を及ぼすのかをより綿密に研究することが可能になりました。これにより、これまで以上に室内環境を快適にするための技術開発に取り組んでいきたいと考えています。</p>
                </div>
              </div>
              <div class="w45 monozukuri-heading__h5_pcimg">
                <figure>
                  <img
                  data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__05.jpg"
                  data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__05@2x.jpg"
                  alt="熱環境試験室"
                  style="max-width: 316px;"
                  class="u-img__max u-only__pc"
                  >
                  <figcaption class="u-fig__cap_right u-only__pc"><span class="u-small">床衝撃音性能試験</span></figcaption>
                </figure>
              </div>
            </div>
          </div>
          <div class="monozukuri-heading__h5 mb3">
            <div class="flex flex__between">
              <div class="w55 monozukuri-heading__h5_txt">
                <div class="monozukuri-heading__h5_sp mb1_sp">
                  <div class="monozukuri-heading__h5_sptxt">
                    <h5 class="monozukuri-heading__h5_ttl">建築材料の開発</h5>
                    <p class="u-only__sp u-small">コンクリート圧縮強度実験</p>
                  </div>
                  <div class="w45 monozukuri-heading__h5_spimg">
                    <img
                      data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__06-sp.jpg"
                      data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__06-sp@2x.jpg"
                      alt="熱環境試験室"
                      style="max-width: 260px;"
                      class="u-img__max  u-only__sp"
                      >
                  </div>
                </div>
                <div class="monozukuri-heading__h5_ex">
                  <p>材料実験エリアでは、建物の強度や耐久性を高めるための建築材料の検証、開発が行なわれています。<br>例えば、圧縮強度実験では、コンクリートに力を加え、コンクリートが破壊するまでの強度を測ります。このような実験を通して、計画通りの強度を得ているかを検証し、コンクリートの技術開発に役立てています。</p>
                </div>
              </div>
              <div class="w45 monozukuri-heading__h5_pcimg">
                <figure>
                  <img
                  data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__06.jpg"
                  data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__06@2x.jpg"
                  alt="熱環境試験室"
                  style="max-width: 316px;"
                  class="u-img__max u-only__pc"
                  >
                  <figcaption class="u-fig__cap_right u-only__pc"><span class="u-small">コンクリート圧縮強度実験</span></figcaption>
                </figure>
              </div>
            </div>
          </div>
          <div class="monozukuri-heading__h5 mb3">
            <div class="flex flex__between">
              <div class="w55 monozukuri-heading__h5_txt">
                <div class="monozukuri-heading__h5_sp mb1_sp">
                  <div class="monozukuri-heading__h5_sptxt">
                    <h5 class="monozukuri-heading__h5_ttl">構造性能の確認</h5>
                    <p class="u-only__sp u-small">構造実験装置</p>
                  </div>
                  <div class="w45 monozukuri-heading__h5_spimg">
                    <img
                      data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__07-sp.jpg"
                      data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__07-sp@2x.jpg"
                      alt="熱環境試験室"
                      style="max-width: 260px;"
                      class="u-img__max  u-only__sp"
                      >
                  </div>
                </div>
                <div class="monozukuri-heading__h5_ex">
                  <p>構造実験エリアでは、マンションの構造性能の確認をする実験が行なわれています。新しい構造技術を開発する際は、耐震安全性などの構造性能の確認が極めて重要です。<br>本エリアには2種類の実験装置が常設されており、柱・はりなどの部材や、骨組などの構造性能を細かく検証することができます。これにより、安全で質の高いマンションづくりが可能となっています。</p>
                </div>
              </div>
              <div class="w45 monozukuri-heading__h5_pcimg">
                <figure>
                  <img
                  data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__07.jpg"
                  data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/img__07@2x.jpg"
                  alt="熱環境試験室"
                  style="max-width: 316px;"
                  class="u-img__max u-only__pc"
                  >
                  <figcaption class="u-fig__cap_right u-only__pc"><span class="u-small">構造実験装置</span></figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="mb3">
          <h3 class="mb3">
            <img
            data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/heading02.png"
            data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/heading02@2x.png"
            alt="長谷工グループの技術の集約と拡充を目指す　新設「長谷工テクニカルセンター」"
            style="max-width: 740px;"
            class="u-img__max u-only__pc"
            >
            <img
            data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/heading02-sp.png"
            data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_introduction/heading02-sp@2x.png"
            alt="長谷工グループの技術の集約と拡充を目指す　新設「長谷工テクニカルセンター」"
            style="max-width: 607px;"
            class="u-img__max  u-only__sp"
            >
          </h3>
          <div>
            <p>長谷工テクニカルセンターは、一般のお客さまにもマンションの歴史と技術に触れていただく「長谷工マンションミュージアム」、知識と技術力に優れたマンション管理のプロを養成する「長谷工グループ 技術研修センター」、24時間365日対応の総合監視センター「長谷工コミュニティ アウル24センター」も併設しており、これまでにない新しい施設となっております。<br>今回、長谷工テクニカルセンターの建築にあたり、長谷工コーポレーションにてデザインコンペを実施しました。4つのチームから個性あふれる提案が出されましたが、最終的には、建設地である多摩センターの豊かな自然と共生できる2つのデザインを融合させ、今回のデザインに決定しました。</p>
          </div>
        </div>
      </section>
      <div class="monozukuri-heading__footer u-font__bold">
        <p>建物も設備も新天地で新たなスタートをきった「新・長谷工技術研究所」。<br>新設、拡張された実験施設を通して、より暮らしに寄り添い、これまで以上に「安全・安心で快適な住まい」を目指すため、研究を重ねていきたいと考えております。</p>
      </div>
      <?php
        include ($inc_path."/lib/inc/page/_magazine/__back_num_monozukuri.php");
      ?>
    </section>
  </article>
</main>
<?php
    $toindex_url = "/magazine/index_monozukuri.php";
    include($inc_path . "/lib/inc/toindex__magazin.php");
    ?>
<?php  include($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include($inc_path."/lib/inc/footer.php"); ?>
<?php  include($inc_path."/lib/inc/foot.php");
