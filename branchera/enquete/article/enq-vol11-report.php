<?php
//base
include ("../../function.php");
$content = get_id_data('11022');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article page-enquete-design__2 enq11";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/enquete/" ,"アンケート");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
    ?>

    <div class="main__wrapper">

      <section class="main__item">
        <h2 class="u-ttl__l">SNSに関する利用状況</h2>
        <div class="u-assist_enq_low07">
          回答期間　　　：　2019年7月1日（月）～2019年7月15日（月）<br>
          回答者数　　　：　計1,929名<br>

        </div>

        <figure>
          <img
          data-src="<?php echo $img_url ?>/enquete/report11/main-v.png"
          data-retina="<?php echo $img_url ?>/enquete/report11/main-v@2x.png"
          alt="<?php echo $pageTtl; ?>"
          style="max-width:740px;"
          class="u-img__max u-only__pc">
        </figure class="u-only__pc">
        <figure>
          <img
          data-src="<?php echo $img_url ?>/enquete/report11/main-v-sp.png"
          data-retina="<?php echo $img_url ?>/enquete/report11/main-v-sp@2x.png"
          alt="<?php echo $pageTtl; ?>"
          style="max-width:740px;"
          class="u-img__max u-only__sp">
        </figure class="u-only__sp">
      </section>
      <section>
        <div class="enq11__bgblue mb5 mb2_sp">
          <h3 class="mb6 mb3_sp">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q1__ttl.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q1__ttl@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q1　普段、家族や友人とのやり取りで使用するSNSは？"
              style="max-width:740px;"
              class="u-img__max u-only__pc">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q1__ttl-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q1__ttl-sp@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q1　普段、家族や友人とのやり取りで使用するSNSは？"
              style="max-width:740px;"
              class="u-img__max u-only__sp">
          </h3>
          <div class="enq11__cnt">
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q1__img01.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q1__img01@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q1　普段、家族や友人とのやり取りで使用するSNSは？　回答：全体"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q1__img01-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q1__img01-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q1　普段、家族や友人とのやり取りで使用するSNSは？　回答：全体"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q1__img02.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q1__img02@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q1　普段、家族や友人とのやり取りで使用するSNSは？　回答：20代以下"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q1__img02-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q1__img02-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q1　普段、家族や友人とのやり取りで使用するSNSは？　回答：20代以下"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q1__img03.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q1__img03@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q1　普段、家族や友人とのやり取りで使用するSNSは？ 回答：30代"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q1__img03-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q1__img03-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q1　普段、家族や友人とのやり取りで使用するSNSは？ 回答：30代"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q1__img04.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q1__img04@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q1　普段、家族や友人とのやり取りで使用するSNSは？　回答：40代"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q1__img04-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q1__img04-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q1　普段、家族や友人とのやり取りで使用するSNSは？　回答：40代"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q1__img05.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q1__img05@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q1　普段、家族や友人とのやり取りで使用するSNSは？　回答：50代"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q1__img05-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q1__img05-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q1　普段、家族や友人とのやり取りで使用するSNSは？　回答：50代"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q1__img06.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q1__img06@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q1　普段、家族や友人とのやり取りで使用するSNSは？　回答：60代"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q1__img06-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q1__img06-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q1　普段、家族や友人とのやり取りで使用するSNSは？　回答：60代"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb2">
              <div class="enq11__assist">
                <p>どの年代でも、LINEでやり取りをしている方が圧倒的に多いという結果になりました。そして、30代以下はLINEに次いでInstagramの使用が多く、40代～60代はFacebookの使用が多いということが分かりました。特にInstagramの使用率は、30代以下と40代以上で大きく差が出ました。30代以下のInstagram使用率は平均して約49％と、約半数が使用、さらにTwitterも同様の傾向があり、若年層は家族や友人とのやり取りにおいて“情報をシェアする”SNSを活用しているということが分かりました。</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="enq11__bggreen mb5 mb2_sp">
          <h3 class="mb6 mb3_sp">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q2__ttl.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q2__ttl@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q2　情報収集する際に使用するSNSは？"
              style="max-width:740px;"
              class="u-img__max u-only__pc">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q2__ttl-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q2__ttl-sp@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q2　情報収集する際に使用するSNSは？"
              style="max-width:740px;"
              class="u-img__max u-only__sp">
          </h3>
          <div class="enq11__cnt">
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q2__img01.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q2__img01@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q2　情報収集する際に使用するSNSは？　回答：全体"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q2__img01-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q2__img01-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q2　情報収集する際に使用するSNSは？　回答：全体"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q2__img02.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q2__img02@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q2　情報収集する際に使用するSNSは？　回答：20代以下"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q2__img02-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q2__img02-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q2　情報収集する際に使用するSNSは？　回答：20代以下"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q2__img03.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q2__img03@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q2　情報収集する際に使用するSNSは？ 回答：30代"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q2__img03-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q2__img03-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q2　情報収集する際に使用するSNSは？ 回答：30代"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q2__img04.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q2__img04@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q2　情報収集する際に使用するSNSは？　回答：40代"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q2__img04-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q2__img04-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q2　情報収集する際に使用するSNSは？　回答：40代"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q2__img05.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q2__img05@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q2　情報収集する際に使用するSNSは？　回答：50代"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q2__img05-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q2__img05-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q2　情報収集する際に使用するSNSは？　回答：50代"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q2__img06.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q2__img06@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q2　情報収集する際に使用するSNSは？　回答：60代"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q2__img06-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q2__img06-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q2　情報収集する際に使用するSNSは？　回答：60代"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb2">
              <div class="enq11__assist">
                <p>情報収集に関しても、20代以下を除いてLINEの使用率が最も高いという結果に。20代以下・30代は、LINEのほかにTwitterやInstagramを活用している方が多いことも分かりました。フォローしているユーザーや友人の発信する情報を、TwitterやInstagramを通して、素早くキャッチしているのかもしれません。一方、テレビ世代の40代～60代は番組を見るような感覚でYoutubeで情報収集をしていることが推測されます。</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="enq11__bgblue mb5 mb2_sp">
          <h3 class="mb6 mb3_sp">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q3__ttl.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q3__ttl@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q3　移動時間や待ち時間など空き時間に見るSNSは？"
              style="max-width:740px;"
              class="u-img__max u-only__pc">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q3__ttl-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q3__ttl-sp@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q3　移動時間や待ち時間など空き時間に見るSNSは？"
              style="max-width:740px;"
              class="u-img__max u-only__sp">
          </h3>
          <div class="enq11__cnt">
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q3__img01.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q3__img01@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q3　移動時間や待ち時間など空き時間に見るSNSは？　回答：全体"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q3__img01-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q3__img01-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q3　移動時間や待ち時間など空き時間に見るSNSは？　回答：全体"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q3__img02.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q3__img02@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q3　移動時間や待ち時間など空き時間に見るSNSは？　回答：20代以下"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q3__img02-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q3__img02-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q3　移動時間や待ち時間など空き時間に見るSNSは？　回答：20代以下"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q3__img03.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q3__img03@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q3　移動時間や待ち時間など空き時間に見るSNSは？ 回答：30代"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q3__img03-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q3__img03-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q3　移動時間や待ち時間など空き時間に見るSNSは？ 回答：30代"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q3__img04.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q3__img04@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q3　移動時間や待ち時間など空き時間に見るSNSは？　回答：40代"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q3__img04-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q3__img04-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q3　移動時間や待ち時間など空き時間に見るSNSは？　回答：40代"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q3__img05.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q3__img05@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q3　移動時間や待ち時間など空き時間に見るSNSは？　回答：50代"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q3__img05-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q3__img05-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q3　移動時間や待ち時間など空き時間に見るSNSは？　回答：50代"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q3__img06.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q3__img06@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q3　移動時間や待ち時間など空き時間に見るSNSは？　回答：60代"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q3__img06-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q3__img06-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q3　移動時間や待ち時間など空き時間に見るSNSは？　回答：60代"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="mb2">
              <div class="enq11__assist">
                <p>空き時間に見るSNSで最も多かったのも、やはりLINEでした。TwitterとInstagramは世代によって割合が異なりますが、隙間時間にYoutubeを活用する方が各世代一定数いることが分かりました。通信速度の充実などの影響もあるかと思いますが、外出先でも動画を見るということが、世代に関係なく浸透しているのかもしれません。</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="mb5">
          <h3>
            <div>
              <img
                  data-src="<?php echo $img_url ?>/enquete/report11/info01__sub.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/info01__sub@2x.png"
                  alt="<?php echo $pageTtl; ?>｜ブランシエラクラブでもSNSを活用して、動画を排していることをご存知ですか？"
                  style="max-width:698px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/info01__sub-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/info01__sub-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜ブランシエラクラブでもSNSを活用して、動画を排していることをご存知ですか？"
                  style="max-width:633px;"
                  class="u-img__max u-only__sp center">
            </div>
            <div>
              <img
                  data-src="<?php echo $img_url ?>/enquete/report11/info01__ttl.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/info01__ttl@2x.png"
                  alt="<?php echo $pageTtl; ?>｜YouTubeにて“毎週水曜日”にお料理動画公開中！"
                  style="max-width:698px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/info01__ttl-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/info01__ttl-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜YouTubeにて“毎週水曜日”にお料理動画公開中！"
                  style="max-width:633px;"
                  class="u-img__max u-only__sp center">
            </div>
          </h3>
          <div class="enq11__infobg">
            <div class="enq11__infocnt">
              <p class="mb2">「フライパン1つで作ることができる時短＆簡単料理」と「今さら聞けない料理の基本」を“毎週水曜日”に動画を公開していますので、ぜひご覧ください。</p>
              <div class="mb3">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/info01__img01.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/info01__img01@2x.png"
                  alt="<?php echo $pageTtl; ?>｜YouTubeにて“毎週水曜日”にお料理動画公開中！"
                  style="max-width:698px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/info01__img01-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/info01__img01-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜YouTubeにて“毎週水曜日”にお料理動画公開中！"
                  style="max-width:633px;"
                  class="u-img__max u-only__sp center">
              </div>
              <div class="mb4">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/info01__img02.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/info01__img02@2x.png"
                  alt="<?php echo $pageTtl; ?>｜YouTubeにて“毎週水曜日”にお料理動画公開中！"
                  style="max-width:539px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/info01__img02-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/info01__img02-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜YouTubeにて“毎週水曜日”にお料理動画公開中！"
                  style="max-width:539px;"
                  class="u-img__max u-only__sp center">
              </div>

              <div class="mb4">
                <a href="<?php echo $base_url ?>/magazine/index_comic02.php" class="enq11__link">
                  <img
                    data-src="<?php echo $img_url ?>/enquete/report11/info01__btn.png"
                    data-retina="<?php echo $img_url ?>/enquete/report11/info01__btn@2x.png"
                    alt="<?php echo $pageTtl; ?>｜YouTubeにて“毎週水曜日”にお料理動画公開中！"
                    style="max-width:442px;"
                    class="u-img__max u-only__pc center">
                  <img
                    data-src="<?php echo $img_url ?>/enquete/report11/info01__btn-sp.png"
                    data-retina="<?php echo $img_url ?>/enquete/report11/info01__btn-sp@2x.png"
                    alt="<?php echo $pageTtl; ?>｜YouTubeにて“毎週水曜日”にお料理動画公開中！"
                    style="max-width:442px;"
                    class="u-img__max u-only__sp center">
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="enq11__bggreen mb5 mb2_sp">
          <h3 class="mb6 mb3_sp">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q4__ttl.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q4__ttl@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q4　企業のアカウントは登録していますか？"
              style="max-width:740px;"
              class="u-img__max u-only__pc">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q4__ttl-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q4__ttl-sp@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q4　企業のアカウントは登録していますか？"
              style="max-width:740px;"
              class="u-img__max u-only__sp">
          </h3>
          <div class="enq11__cnt enq11__paddingbtm">
            <div>
              <img
                data-src="<?php echo $img_url ?>/enquete/report11/q4__img01.png"
                data-retina="<?php echo $img_url ?>/enquete/report11/q4__img01@2x.png"
                alt="<?php echo $pageTtl; ?>｜Q4　企業のアカウントは登録していますか？　回答"
                style="max-width:670px;"
                class="u-img__max u-only__pc center">
              <img
                data-src="<?php echo $img_url ?>/enquete/report11/q4__img01-sp.png"
                data-retina="<?php echo $img_url ?>/enquete/report11/q4__img01-sp@2x.png"
                alt="<?php echo $pageTtl; ?>｜Q4　企業のアカウントは登録していますか？　回答"
                style="max-width:584px;"
                class="u-img__max u-only__sp center">
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="enq11__bgblue mb5 mb2_sp">
          <h3 class="mb2 mb3_sp">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q5__ttl.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q5__ttl@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q5　どんな時に企業のアカウントを登録しますか？"
              style="max-width:740px;"
              class="u-img__max u-only__pc">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q5__ttl-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q5__ttl-sp@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q5　どんな時に企業のアカウントを登録しますか？"
              style="max-width:740px;"
              class="u-img__max u-only__sp">
          </h3>
          <div class="enq11__cnt enq11__paddingbtm">
            <div class="center_pc mb3">
              <p>※Q4で「はい」とご回答いただいた740名の結果内容です。</p>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q5__img01.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q5__img01@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q5　どんな時に企業のアカウントを登録しますか？　回答"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q5__img01-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q5__img01-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q5　どんな時に企業のアカウントを登録しますか？　回答"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div>
              <div class="enq11__assist">
                <p>キャンペーン参加やスタンププレゼントなどの、サービス利用のために登録している方が半数以上を占めています。最近では、人気キャラクターとのコラボスタンプなど、魅力的なサービスも増えていますよね。<br>そのほかの理由では、情報の閲覧のために登録している方が多く、24.7％を占めました。最新情報が配信される企業アカウントは、気軽な情報収集手段として役立ちそうです。</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="enq11__bggreen mb5 mb2_sp">
          <h3 class="mb3 mb3_sp">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q6__ttl.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q6__ttl@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q6　企業のアカウントを登録していない理由は？"
              style="max-width:740px;"
              class="u-img__max u-only__pc">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q6__ttl-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q6__ttl-sp@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q6　企業のアカウントを登録していない理由は？"
              style="max-width:740px;"
              class="u-img__max u-only__sp">
          </h3>
          <div class="enq11__cnt enq11__paddingbtm">
            <div class="center_pc mb4 mb2_sp">
              <p>※Q4で「いいえ」とご回答いただいた1,186名の方の結果内容です。</p>
            </div>
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q6__img01.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q6__img01@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q6　企業のアカウントを登録していない理由は？　回答"
                  style="max-width:662px;"
                  class="u-img__max u-only__pc mb2 center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q6__img01-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q6__img01-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q6　企業のアカウントを登録していない理由は？　回答"
                  style="max-width:583px;"
                  class="u-img__max u-only__sp mb center">
              </div>
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q6__img02.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q6__img02@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q6　企業のアカウントを登録していない理由は？　回答"
                  style="max-width:662px;"
                  class="u-img__max u-only__pc mb2 center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q6__img02-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q6__img02-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q6　企業のアカウントを登録していない理由は？　回答"
                  style="max-width:583px;"
                  class="u-img__max u-only__sp mb center">
              </div>
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q6__img03.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q6__img03@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q6　企業のアカウントを登録していない理由は？　回答"
                  style="max-width:662px;"
                  class="u-img__max u-only__pc mb2 center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q6__img03-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q6__img03-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q6　企業のアカウントを登録していない理由は？　回答"
                  style="max-width:583px;"
                  class="u-img__max u-only__sp mb center">
              </div>
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q6__img04.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q6__img04@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q6　企業のアカウントを登録していない理由は？　回答"
                  style="max-width:662px;"
                  class="u-img__max u-only__pc mb6 center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q6__img04-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q6__img04-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q6　企業のアカウントを登録していない理由は？　回答"
                  style="max-width:583px;"
                  class="u-img__max u-only__sp mb2 center">
              </div>
            </div>
            <div>
              <div class="enq11__assist">
                <p>そもそもSNSを持っていないという方を除くと、「必要でない情報まで届いてしまうのが嫌で登録しない」という意見が複数ありました。フォローをすることで、最新情報が続々と寄せられる一方で、情報の取捨選択を自分自身で行っていく必要があります。現代のような情報社会では個人のライフスタイルに合わせて、自分が興味のあるアカウントを見つけることがポイントかもしれませんね。</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="mb5">
          <h3>
            <div>
              <img
                  data-src="<?php echo $img_url ?>/enquete/report11/info02__ttl.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/info02__ttl@2x.png"
                  alt="<?php echo $pageTtl; ?>｜長谷工グループにてLINE公式アカウントを開設しています！"
                  style="max-width:698px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/info02__ttl-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/info02__ttl-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜長谷工グループにてLINE公式アカウントを開設しています！"
                  style="max-width:633px;"
                  class="u-img__max u-only__sp center">
            </div>
          </h3>
          <div class="enq11__infocnt">
            <div class="flex flex__between">
              <div class="w50">
                <p class="mb2">友だち登録をしていただくと、LINE友だち限定のキャンペーンや長谷工グループのお得な情報が受け取れます。ぜひ、友だち登録してくださいね！</p>
                <div class="mb3">
                  <img
                    data-src="<?php echo $img_url ?>/enquete/report11/info02__img01.png"
                    data-retina="<?php echo $img_url ?>/enquete/report11/info02__img01@2x.png"
                    alt="<?php echo $pageTtl; ?>｜長谷工グループLINE公式アカウントと友だちになる"
                    style="max-width:310px;"
                    class="u-img__max u-only__pc center">
                </div>
              </div>
              <div class=" w50 mb4">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/info02__img02.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/info02__img02@2x.png"
                  alt="<?php echo $pageTtl; ?>｜長谷工グループLINE公式アカウントと友だちになる"
                  style="max-width:299px;"
                  class="u-img__max u-only__pc center">
                <a href="https://line.me/R/ti/p/%40haseko_group" target="_blank" class="u-only__sp">
                  <img
                    data-src="<?php echo $img_url ?>/enquete/report11/info02__img02-sp.png"
                    data-retina="<?php echo $img_url ?>/enquete/report11/info02__img02-sp@2x.png"
                    alt="<?php echo $pageTtl; ?>｜長谷工グループLINE公式アカウントと友だちになる"
                    style="max-width:539px;"
                    class="u-img__max u-only__sp center">
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="enq11__bgblue mb5 mb2_sp">
          <h3 class="mb6 mb3_sp">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q7__ttl.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q7__ttl@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q7　企業のハッシュタグを付けて投稿したことはありますか？"
              style="max-width:740px;"
              class="u-img__max u-only__pc">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q7__ttl-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q7__ttl-sp@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q7　企業のハッシュタグを付けて投稿したことはありますか？"
              style="max-width:740px;"
              class="u-img__max u-only__sp">
          </h3>
          <div class="enq11__cnt">
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q7__img01.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q7__img01@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q7　企業のハッシュタグを付けて投稿したことはありますか？　回答"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q7__img01-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q7__img01-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q7　企業のハッシュタグを付けて投稿したことはありますか？　回答"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="enq11__bggreen mb5 mb2_sp">
          <h3 class="mb6 mb3_sp">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q8__ttl.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q8__ttl@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q8　ブランシエラクラブでSNSを使った投稿型キャンペーンがあったら参加しますか？"
              style="max-width:740px;"
              class="u-img__max u-only__pc">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q8__ttl-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q8__ttl-sp@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q8　ブランシエラクラブでSNSを使った投稿型キャンペーンがあったら参加しますか？"
              style="max-width:740px;"
              class="u-img__max u-only__sp">
          </h3>
          <div class="enq11__cnt">
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q8__img01.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q8__img01@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q8　ブランシエラクラブでSNSを使った投稿型キャンペーンがあったら参加しますか？　回答"
                  style="max-width:670px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q8__img01-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q8__img01-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q8　ブランシエラクラブでSNSを使った投稿型キャンペーンがあったら参加しますか？　回答"
                  style="max-width:584px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="enq11__bgblue mb5 mb2_sp">
          <h3 class="mb2 mb_sp">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q9__ttl.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q9__ttl@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q9　キャンペーン商品であったらうれしいのはどれですか？"
              style="max-width:740px;"
              class="u-img__max u-only__pc">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q9__ttl-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q9__ttl-sp@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q9　キャンペーン商品であったらうれしいのはどれですか？"
              style="max-width:740px;"
              class="u-img__max u-only__sp">
          </h3>
          <div class="enq11__cnt enq11__paddingbtm">
            <div class="center_pc mb2">
              <p>※Q8で「はい」とご回答いただいた915名の結果内容です。</p>
            </div>
            <div class="mb6">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q9__img01.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q9__img01@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q9　キャンペーン商品であったらうれしいのはどれですか？　回答"
                  style="max-width:666px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q9__img01-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q9__img01-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q9　キャンペーン商品であったらうれしいのはどれですか？　回答"
                  style="max-width:583px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div>
              <div class="enq11__assist">
                <p>ギフトカードや住まいレージ（ポイント）など、自分でサービスやアイテムを選んで交換する商品に人気が集まりました。たくさんの選択肢から自分の欲しいものを選べるのは、うれしいですよね。<br>中でも住まいレージ（ポイント）は、ハウスクリーニングやリフォームなどのサービスに使えるほか、長谷工グループが田植えから収穫まで行う「たなかみ米」や、話題の家電製品などとの交換も可能です。今後の住まいレージの交換商品やプレゼントキャンペーンにも、ご期待ください！</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="mb5">
          <h3>
            <div class="mb2">
              <img
                  data-src="<?php echo $img_url ?>/enquete/report11/info03__sub.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/info03__sub@2x.png"
                  alt="<?php echo $pageTtl; ?>｜ブランシエラクラブでお得なアイテムをゲットしたり、イベントに参加された際には、ぜひSNSを通してシェアしてください！"
                  style="max-width:698px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/info03__sub-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/info03__sub-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜ブランシエラクラブでお得なアイテムをゲットしたり、イベントに参加された際には、ぜひSNSを通してシェアしてください！"
                  style="max-width:633px;"
                  class="u-img__max u-only__sp center">
            </div>
            <div>
              <img
                  data-src="<?php echo $img_url ?>/enquete/report11/info03__ttl.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/info03__ttl@2x.png"
                  alt="<?php echo $pageTtl; ?>｜SNS投稿をする場合は「#ブランシエラクラブ」の追加をお願いします。"
                  style="max-width:698px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/info03__ttl-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/info03__ttl-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜SNS投稿をする場合は「#ブランシエラクラブ」の追加をお願いします。"
                  style="max-width:633px;"
                  class="u-img__max u-only__sp center">
            </div>
          </h3>
        </div>
      </section>
      <section>
        <div class="enq11__bggreen mb5 mb2_sp">
          <h3 class="mb6 mb3_sp">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q10__ttl.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q10__ttl@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q10　ブランシエラクラブで住まいに関するグループインタビューや座談会が開催された場合ご参加いただけますか？"
              style="max-width:740px;"
              class="u-img__max u-only__pc">
            <img
              data-src="<?php echo $img_url ?>/enquete/report11/q10__ttl-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report11/q10__ttl-sp@2x.png"
              alt="<?php echo $pageTtl; ?>｜Q10　ブランシエラクラブで住まいに関するグループインタビューや座談会が開催された場合ご参加いただけますか？"
              style="max-width:740px;"
              class="u-img__max u-only__sp">
          </h3>
          <div class="enq11__cnt enq11__paddingbtm">
            <div class="mb4">
              <div>
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q10__img01.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q10__img01@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q10　ブランシエラクラブで住まいに関するグループインタビューや座談会が開催された場合ご参加いただけますか？　回答"
                  style="max-width:666px;"
                  class="u-img__max u-only__pc center">
                <img
                  data-src="<?php echo $img_url ?>/enquete/report11/q10__img01-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report11/q10__img01-sp@2x.png"
                  alt="<?php echo $pageTtl; ?>｜Q10　ブランシエラクラブで住まいに関するグループインタビューや座談会が開催された場合ご参加いただけますか？　回答"
                  style="max-width:583px;"
                  class="u-img__max u-only__sp center">
              </div>
            </div>
            <div class="enq11__assitpoint">
              <div class="enq11__assitex">
                <p>23.7%の会員さまから「参加したい」とご回答いただきました！ありがとうございます。<br>また、最も多いのは「どちらとも言えない」というご回答でしたが、「インタビューや座談会のテーマによって判断したい」という方も多いのではないかと思います。<br>ブランシエラクラブでは、このような情報をみなさまにお届けできるよう、毎週木曜日にメールマガジンを配信しております。詳しい情報などは、ぜひメールマガジンをチェックしてください！</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div>
        <div class="mb3">
          <img
            data-src="<?php echo $img_url ?>/enquete/report11/epi.png"
            data-retina="<?php echo $img_url ?>/enquete/report11/epi@2x.png"
            alt="<?php echo $pageTtl; ?>｜いかがでしたか？SNSの利用状況についてのアンケートでは、どの項目でもLINEの使用率の高さが目立ちました。ブランシエラクラブでは週１回のメールマガジンを配信していますが、長谷工グループ全体ではLINEでの情報発信も行なっています。ご興味のある方は、ぜひご登録ください！またブランシエラクラブでは、今回のアンケート結果を参考に、 SNSを使ったキャンペーンを企画していく予定です。たくさんの会員さまに、楽しんで参加していただけるようなキャンペーンを開催したいと考えておりますので、ぜひメールマガジンやLINEから発信される情報をチェックしていただければと思います！"
            style="max-width:698px;"
            class="u-img__max u-only__pc center">
          <img
            data-src="<?php echo $img_url ?>/enquete/report11/epi-sp.png"
            data-retina="<?php echo $img_url ?>/enquete/report11/epi-sp@2x.png"
            alt="<?php echo $pageTtl; ?>｜いかがでしたか？SNSの利用状況についてのアンケートでは、どの項目でもLINEの使用率の高さが目立ちました。ブランシエラクラブでは週１回のメールマガジンを配信していますが、長谷工グループ全体ではLINEでの情報発信も行なっています。ご興味のある方は、ぜひご登録ください！またブランシエラクラブでは、今回のアンケート結果を参考に、 SNSを使ったキャンペーンを企画していく予定です。たくさんの会員さまに、楽しんで参加していただけるようなキャンペーンを開催したいと考えておりますので、ぜひメールマガジンやLINEから発信される情報をチェックしていただければと思います！"
            style="max-width:633px;"
            class="u-img__max u-only__sp center">

        </div>
        <div class="mb6">
          <img
            data-src="<?php echo $img_url ?>/enquete/report11/epi__btn.png"
            data-retina="<?php echo $img_url ?>/enquete/report11/epi__btn@2x.png"
            alt="<?php echo $pageTtl; ?>｜お得なサービス情報は毎週木曜日のメールマガジンをご覧ください"
            style="max-width:504px;"
            class="u-img__max u-only__pc center">
          <img
            data-src="<?php echo $img_url ?>/enquete/report11/epi__btn-sp.png"
            data-retina="<?php echo $img_url ?>/enquete/report11/epi__btn-sp@2x.png"
            alt="<?php echo $pageTtl; ?>｜｜お得なサービス情報は毎週木曜日のメールマガジンをご覧ください"
            style="max-width:538px;"
            class="u-img__max u-only__sp center">

        </div>
        <div class="mb4 mb2_sp">
          <img
            data-src="<?php echo $img_url ?>/enquete/report11/epi__ex.png"
            data-retina="<?php echo $img_url ?>/enquete/report11/epi__ex@2x.png"
            alt="<?php echo $pageTtl; ?>｜お得なサービス情報は毎週木曜日のメールマガジンをご覧ください"
            style="max-width:487px;"
            class="u-img__max u-only__pc center">
          <img
            data-src="<?php echo $img_url ?>/enquete/report11/epi__ex-sp.png"
            data-retina="<?php echo $img_url ?>/enquete/report11/epi__ex-sp@2x.png"
            alt="<?php echo $pageTtl; ?>｜｜お得なサービス情報は毎週木曜日のメールマガジンをご覧ください"
            style="max-width:632px;"
            class="u-img__max u-only__sp center">

        </div>
      </div>
    </div>
    <?php include ($inc_path."/lib/inc/page/_enquete/__back_num.php") ?>
  </article>
</main>

  <?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
  <?php  include ($inc_path."/lib/inc/footer.php"); ?>
  <?php  include ($inc_path."/lib/inc/foot.php"); ?>
