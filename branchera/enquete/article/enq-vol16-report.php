<?php
//base
include ("../../function.php");
$content = get_id_data('11037');
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
        <h2 class="u-ttl__l">お住まいに関するアンケート</h2>
        <div class="u-assist_enq_low07 u-only__pc">
          回答期間　　　：　2020年11月5日（木）～2020年11月22日（日）<br>
          回答者数　　　：　計3,186名<br>

        </div>
        <div class="u-assist_enq_low07 u-only__sp u-font__palt">
          回答期間：2020年11月5日（木）～2020年11月22日（日）<br>
          回答者数：計3,186名<br>

        </div>
        <div class="mb2">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report16/main-v@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report16/main-v-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report16/main-v.png" loading="lazy" class="u-img__max" alt="<?php echo $pageTtl ?>" />
          </picture>
        </div>
        <p>「おうち時間」が推奨された2020年。程度に差はあれど、以前より家で過ごす機会が増えたという方が多いはず。その分これまでは気にならなかった、汚れ、設備の劣化などの<strong style="background: linear-gradient(transparent 50%, #fecfd1 50%);">「お部屋の困りごと」</strong>が目につくようになった…という方もいるのではないでしょうか？そこで今回は、会員のみなさまにお住まいに関するアンケートを実施！お部屋の中で特に気になる場所や、お困りエピソードについて伺いました。さっそくアンケート結果をお伝えします！</p>
      </section>
      <section>
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report16/q1@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report16/q1-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report16/q1.png" loading="lazy" class="u-img__max" alt="Q１ お部屋の中で特に気になる場所は？" />
          </picture>
        </div>
      </section>
      <section>
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report16/q2@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report16/q2-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report16/q2.png" loading="lazy" class="u-img__max" alt="Q2 特に気になる場所の部位や設備は？" />
          </picture>
        </div>
      </section>
      <section>
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report16/q3@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report16/q3-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report16/q3.png" loading="lazy" class="u-img__max" alt="Q3 給湯器を交換したことはありますか？そのきっかけは？" />
          </picture>
        </div>
      </section>
      <section>
        <div>
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report16/q4__01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report16/q4__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report16/q4__01.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="早めの交換でトラブルに備えましょう！" />
            </picture>
          <a href="https://e-suteki.haseko.jp/service/water-heater-replace.html" data-ga-click="enq16_suteki_kyuto" target="_blank">
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report16/q4__02@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report16/q4__02-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report16/q4__02.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="詳しくはこちら" />
            </picture>
          </a>
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report16/q4__03@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report16/q4__03-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report16/q4__03.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="詳しく見る" />
            </picture>
        </div>
      </section>
      <section>
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report16/q5@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report16/q5-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report16/q5.png" loading="lazy" class="u-img__max" alt="Q5 ハウスクリーニングはどの部位を依頼されていますか？" />
          </picture>
        </div>
      </section>
      <section>
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report16/q6__01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report16/q6__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report16/q6__01.png" loading="lazy" class="u-img__max" alt="Q6 「住まいレージ」を使ってお得にクリーニング、リフォーム！" />
          </picture>
          <a href="https://www.haseko.co.jp/branchera/smile/use-smileage.php" data-ga-click="enq16_smilage" target="_blank">
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report16/q6__02@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report16/q6__02-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report16/q6__02.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="詳しくはこちら" />
            </picture>
          </a>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report16/q6__03@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report16/q6__03-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report16/q6__03.png" loading="lazy" class="u-img__max" alt="詳しくはこちら" />
          </picture>
        </div>
      </section>
      <section>
        <div>
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report16/q7@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report16/q7-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report16/q7.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="お部屋のお悩みやサービスについて、どんな情報をネットで収集しますか？" />
            </picture>
        </div>
      </section>
      <section>
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report16/q8@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report16/q8-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report16/q8.png" loading="lazy" class="u-img__max" alt="Q8 「すてきテラス」の記事はいかがでしたか？" />
          </picture>
        </div>
      </section>
      <section>
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report16/q9@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report16/q9-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report16/q9.png" loading="lazy" class="u-img__max" style="margin-top:-2px;" alt="Q9「すてきテラス」のサイトはいかがでしたか？" />
          </picture>
      </section>
      <section>
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report16/q10__01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report16/q10__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report16/q10__01.png" loading="lazy" class="u-img__max" alt="Q10 「すてきテラス」とは？" />
          </picture>
          <a href="https://e-suteki.haseko.jp/index.html" data-ga-click="enq16_suteki_terrace" target="_blank">
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report16/q10__02@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report16/q10__02-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report16/q10__02.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="詳しくはこちら" />
            </picture>
          </a>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report16/q10__03@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report16/q10__03-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report16/q10__03.png" loading="lazy" class="u-img__max" alt="詳しくはこちら" />
          </picture>
        </div>
      </section>
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report16/outro__01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report16/outro__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report16/outro__01.png" loading="lazy" class="u-img__max" alt="アンケートの結果は、いかがでしたか？おうちで過ごす時間が増えた昨年。必然的にお住まいについてのお悩みやご要望が増えたことと思います。今回ご紹介した「住まいレージ」でお得に利用できるハウスクリーニング、リフォームや、インターネットからメンテナンス情報を得られる「すてきテラス」などをぜひご活用いただき、快適な住まいづくりにお役立てくださいね。また、オンラインから無料で相談できるサービスや、VRでモデルルーム見学ができるサービスなどもご提供中です。住まいに関するお悩みは、お気軽に長谷工グループにご相談ください！" />
          </picture>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report16/outro__02@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report16/outro__02-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report16/outro__02.png" loading="lazy" class="u-img__max" alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！" />
          </picture>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report16/outro__03@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report16/outro__03-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report16/outro__03.png" loading="lazy" class="u-img__max" alt="第17回アンケートは2021年1月21日（木）〜実施！みなさまのご回答をお待ちしております！" />
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
