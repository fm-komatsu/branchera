<?php
//base
include ("../../function.php");
$content = get_id_data('11031');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article page-enquete-design__2 enq12";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/enquete/" ,"アンケート");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
    ?>

    <div class="main__wrapper">

      <section class="main__item mb3 mb1_sp">
        <h2 class="u-ttl__l">リフォームに関するアンケート</h2>
        <div class="u-assist_enq_low07 u-only__pc">
          回答期間　　　：　2020年8月6日（木）～2020年8月23日（日）<br>
          回答者数　　　：　計4,488名<br>

        </div>
        <div class="u-assist_enq_low07 u-only__sp u-font__palt">
          回答期間：2020年8月6日（木）～2020年8月23日（日）<br>
          回答者数：計4,488名<br>

        </div>
        <div class="mb2">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report15/main-v@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report15/main-v-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report15/main-v.png" loading="lazy" class="u-img__max" alt="<?php echo $pageTtl ?>" />
          </picture>
        </div>
        <p>第15回目を迎えた、ブランシエラクラブアンケート企画。今回のテーマはズバリ「リフォーム」！入居した頃はきれいな住宅も、時の流れとともに変化していくもの。「設備が使いづらくなった」「キズや汚れが目立つようになった」など気になる箇所がありつつも、なかなかリフォームに踏み切れずにいる…という方もいらっしゃるのではないでしょうか？そこで今回は、会員のみなさまのリフォームに関するお悩みやご希望を徹底調査！「みんなリフォームについてどう考えているの！？」という普段聞けない実情をご紹介します。</p>
      </section>
      <section>
        <div class="mb5 mb3_sp mt3_sp">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report15/q1@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report15/q1-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report15/q1.png" loading="lazy" class="u-img__max" alt="Q１ もしリフォームするとしたらどの部分をリフォームしたいですか？" />
          </picture>
        </div>
      </section>
      <section>
        <div class="mb5 mb3_sp">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report15/q2@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report15/q2-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report15/q2.png" loading="lazy" class="u-img__max" alt="Q2 築年数別でみる！リフォームしたい箇所は？" />
          </picture>
        </div>
      </section>
      <section>
        <div class="mb5 mb3_sp">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report15/q3@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report15/q3-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report15/q3.png" loading="lazy" class="u-img__max" alt="Q3 リフォーム会社を決定する際に重要と思うことは何ですか？" />
          </picture>
        </div>
      </section>
      <section>
        <div class="mb5 mb3_sp">
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report15/q4__01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q4__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q4__01.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="長谷工リフォーム マンションリフォーム術" />
            </picture>
          <a href="https://www.haseko.co.jp/hrf/reform/haseko-method/01/" data-ga-click="enq15_hrf1" target="_blank">
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report15/q4__02@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q4__02-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q4__02.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="詳しく見る" />
            </picture>
          </a>
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report15/q4__03@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q4__03-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q4__03.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="詳しく見る" />
            </picture>
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report15/q4__04@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q4__04-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q4__04.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="長谷工リフォームから マンションでは、スペースが限られているので…なんてあきらめていることはありませんか？ちょっとした工夫で、不満が解消されたり、暮らしやすくなったり、快適になったりします。ぜひ当社に、お住まいのお困りごとをご相談ください。" />
            </picture>
        </div>
      </section>
      <section>
        <div class="mb5 mb3_sp">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report15/q5@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report15/q5-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report15/q5.png" loading="lazy" class="u-img__max" alt="Q5 ペットを飼っていますか？" />
          </picture>
        </div>
      </section>
      <section>
        <div class="mb5 mb3_sp">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report15/q6@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report15/q6-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report15/q6.png" loading="lazy" class="u-img__max" alt="Q6 愛犬との暮らしで困っていること心配ごとはありますか？" />
          </picture>
        </div>
      </section>
      <section>
        <div class="mb5 mb3_sp">
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report15/q7__01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q7__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q7__01.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="長谷工リフォーム ペットと暮らすリフォーム" />
            </picture>
          <a href="https://www.haseko.co.jp/hrf/reform/special/dog_cat.html" data-ga-click="enq15_hrf2" target="_blank">
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report15/q7__02@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q7__02-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q7__02.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="詳しく見る" />
            </picture>
          </a>
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report15/q7__03@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q7__03-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q7__03.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="詳しく見る" />
            </picture>
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report15/q7__04@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q7__04-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q7__04.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="長谷工リフォームから 最も長い時間、家の中で過ごしているのが愛犬かもしれません。また、人にとって住みやすい家が、必ずしも愛犬にとって住みやすいとは限りません。愛犬家住宅コーディネーターは、専門家として愛犬と愛犬家の目線になって、快適なお住まいをご提案しています。" />
            </picture>
        </div>
      </section>
      <section>
        <div class="mb5 mb3_sp">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report15/q8@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report15/q8-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report15/q8.png" loading="lazy" class="u-img__max" alt="Q8 長谷工リフォームの新サービスをご存知ですか？" />
          </picture>
        </div>
      </section>
      <section>
        <div class="mb5 mb3_sp">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report15/q9__01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report15/q9__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report15/q9__01.png" loading="lazy" class="u-img__max" style="margin-top:-2px;" alt="長谷工リフォームの新サービス" />
          </picture>
          <a href="https://www.haseko.co.jp/hrf/reform/news/2020/post_22.html" data-ga-click="enq15_hrf3" target="_blank">
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report15/q9__02@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q9__02-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q9__02.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="詳しく見る" />
            </picture>
          </a>
            <picture class="u-only__pc">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q9__03@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q9__03.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="公式LINEアカウント" />
            </picture>
          <a href="https://line.me/R/ti/p/%40246fexaq" target="_blank">
            <picture class="u-only__sp">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q9__03-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q9__03-sp.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="公式LINEアカウント" />
            </picture>
          </a>
            <picture class="u-only__sp">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q9__03__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q9__03__01.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="公式LINEアカウント" />
            </picture>
          <a href="https://www.haseko.co.jp/hrf/reform/news/2020/lineline.html" data-ga-click="enq15_hrf4" target="_blank">
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report15/q9__04@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q9__04-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q9__04.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="詳しく見る" />
            </picture>
          </a>
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report15/q9__05@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q9__05-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q9__05.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="360°VR内覧" />
            </picture>
          <a href="https://www.haseko.co.jp/hrf/reform/panorama.html" data-ga-click="enq15_hrf5" target="_blank">
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report15/q9__06@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q9__06-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q9__06.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="詳しく見る" />
            </picture>
          </a>
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report15/q9__07@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q9__07-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q9__07.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="詳しく見る" />
            </picture>
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report15/q9__08@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report15/q9__08-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report15/q9__08.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="長谷工リフォームから オンライン相談なら、小さいお子さまがいらっしゃる方やご高齢の方も、ご自宅から安心してご利用いただけます。間仕切り変更など、リフォーム後のお部屋のイメージも3Dでご覧いただきながら、じっくり打合せすることも可能です。" />
            </picture>
        </div>
      </section>
      <section>
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report15/outro__01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report15/outro__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report15/outro__01.png" loading="lazy" class="u-img__max" alt="リフォームに関する調査の結果は、いかがでしたか？今回のアンケートを通して、会員のみなさまのリフォームへの関心やご要望を伺うことができました。人によってリフォームをする目的、予算、規模はさまざまですが、重視される方が多かった「信頼性」。きっと住宅を購入するときと同じくらいのハードルの高さを感じている方もいることでしょう。長谷工グループでは、そんなみなさまの不安やお悩みを取り除くために、無料で気軽にご相談できるサービスやイベントを多数ご用意しています。小さな疑問にも住まいのプロがお答えしますので、ぜひこの機会にサービスをご利用ください。" />
          </picture>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report15/outro__02@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report15/outro__02-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report15/outro__02.png" loading="lazy" class="u-img__max" alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！" />
          </picture>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report15/outro__03@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report15/outro__03-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report15/outro__03.png" loading="lazy" class="u-img__max" alt="第16回アンケートは2020年11月5日（木）〜実施！みなさまのご回答をお待ちしております！" />
          </picture>
        </div>
      </section>
    </div>
    <?php include ($inc_path."/lib/inc/page/_enquete/__back_num.php") ?>
  </article>
</main>

  <?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
  <?php  include ($inc_path."/lib/inc/footer.php"); ?>
  <?php  include ($inc_path."/lib/inc/foot.php"); ?>
