<?php
//base
include ("../../function.php");
$content = get_id_data('11026');
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
  <article class="main__row">
    <?php
    $panAry[] = array("/enquete/" ,"アンケート");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
    ?>

    <div class="main__wrapper">

      <section class="main__item mb3 mb1_sp">
        <h2 class="u-ttl__l">住まいに関するアンケート</h2>
        <div class="u-assist_enq_low07 u-only__pc">
          回答期間　　　：　2020年1月23日（木）～2020年2月5日（水）<br>
          回答者数　　　：　計3,111名<br>

        </div>
        <div class="u-assist_enq_low07 u-only__sp">
          回答期間：2020年1月23日（木）～2020年2月5日（水）<br>
          回答者数：計3,111名<br>

        </div>
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report13/main-v@2x.jpg" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report13/main-v-sp@2x.jpg" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report13/main-v.jpg" loading="lazy" class="u-img__max" alt="第13回アンケートレポート　住まいに関するアンケート　結果発表！" />
          </picture>
        </div>
      </section>
      <section class="mb5 mb2_sp">
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report13/q1@2x.jpg" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report13/q1-sp@2x.jpg" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report13/q1.jpg" loading="lazy" class="u-img__max" alt="住まいのお困りごとや 設備の故障等が あったとき、どのような対応をしていますか？｜「管理員・管理会社に相談」という回答が1位という結果に。なんと、ご回答いただいた方の約6割を占めていました！この結果には、今回アンケートにご回答いただいた方々のうち、分譲マンションにお住まいの方が50％を占めていたのも大きく影響しているでしょう。そして2位と3位は、どちらもインターネットを利用した対応です。合わせると1位とほぼ同票で、インターネットを利用してトラブル解決を試みる方も多いということがわかります。ちなみに、どの年代も順位は大きく変わりませんでした。" />
          </picture>
        </div>
      </section>
      <section>
        <div class="mb4 mb2_sp">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report13/q2@2x.jpg" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report13/q2-sp@2x.jpg" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report13/q2.jpg" loading="lazy" class="u-img__max" alt="お部屋の悩みやサービスについて、 どのような情報をインターネットで 収集しますか？｜多少のバラつきはありますが、どの築年数でも「メンテナンス方法」が1位でした。日々の清掃や補修に関わるメンテナンス方法は、築年数にかかわらず気になりますよね。同様に、「設備・部品の故障」も定期的にチェックしたいポイントのようです。ちなみに「メンテナンス方法」の選択率は、築年数5－9年で65％と最初のピークを迎えた後、築年数20－24年にかけて右肩下がりで低下していきます。それと反比例するように選択率が上昇していくのが、「リフォーム」という回答です。お部屋の内装や設備が古くなるにつれ、「細かいメンテナンスをするよりも、いっそリフォームや機器交換をしよう！」と計画する方が増えるのかもしれません。" />
          </picture>
        </div>
        <div class="mb5 mb2_sp">
          <a href="<?php echo $base_url ?>/magazine/index_wakuwaku.php">
            <div>
              <picture>
                <source srcset="<?php echo $img_url ?>/enquete/report13/q2_att@2x.jpg" media="(min-width: 667px)" loading="lazy" class="u-img__max">
                <source srcset="<?php echo $img_url ?>/enquete/report13/q2_att-sp@2x.jpg" media="(max-width: 666px)" loading="lazy" class="u-img__max">
                <img src="<?php echo $img_url ?>/enquete/report13/q2_att.jpg" loading="lazy" class="u-img__max" alt="今すぐできるメンテナンス方法をご紹介！｜水回り機器や照明器具の掃除、お部屋の換気など、普段の生活に取り入れたいメンテナンス方法を解説するコンテンツです。難しいテクニックではなく、セルフメンテナンスのコツをイラストを交えてご紹介します。何から手を付ければよいのか分からない方も、この講座を見れば正しい手順でメンテナンスを行えますよ♪ぜひご覧ください！" />
              </picture>
            </div>
          </a>
        </div>
      </section>
      <section class="mb3 mb1_sp">
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report13/q3_01@2x.jpg" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report13/q3_01-sp@2x.jpg" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report13/q3_01.jpg" loading="lazy" class="u-img__max" alt="インターネットでインテリア商品や、 お部屋のサービス（ハウスクリーニング等）を 注文したことがありますか?｜インターネット全盛の今。意外にもインターネットでの注文経験がある方は、25％に留まりました。やはり大切な住まいにかかわるインテリア商品やお部屋のサービスは、実際に見たり聞いたりして検討したいという方が多いのでしょう。特に50代以上の年代で、「インターネットで注文しようと思わない」という回答が増加していました。一方で、「検討したが注文まで至ったことはない」という回答率は、どの年代でも高い結果に。「インターネットの商品やサービスも、一応注文の候補には入っている」ということですね。" />
          </picture>
        </div>
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report13/q3_02@2x.jpg" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report13/q3_02-sp@2x.jpg" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report13/q3_02.jpg" loading="lazy" class="u-img__max" alt="どんなサービスや商品を注文した？｜最も多かったのが「カーテン」という回答でした。確かにカーテンは、窓の大きささえ分かっていれば、インターネットでも気軽に購入できそうです。そして中には、「和室の琉球畳」を注文したという方も。カーペットのようにフローリングに敷くこともできる琉球畳は、手軽に“和モダン”な雰囲気を演出できるアイテムです。サイズオーダーができたり、カラーが選べたりなど、会社によってオプションはさまざま。インターネットを用いれば、各社の比較もしやすそうですね。" />
          </picture>
        </div>
      </section>
      <section class="mb5 mb2_sp">
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report13/q4@2x.jpg" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report13/q4-sp@2x.jpg" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report13/q4.jpg" loading="lazy" class="u-img__max" alt="プロのハウスクリーニングに依頼したことが ありますか？｜どの年代でも「一度も頼んだことがない」という回答が大部分を占めました。しかし、35～39歳から60～64歳にかけて、ゆるやかに「一度も頼んだことがない」という回答の割合が小さくなっています。一方で反比例するように、「2～4回ある」という回答の割合が大きくなっていますね。どうやらこれには、管理会社からのおすすめが影響していそう。ハウスクリーニングを利用しようと思ったきっかけに、「管理会社が勧めているから」という回答を選択する方が、30歳以降の年代で増加しているからです。最初の質問で「住まいの困りごとは管理員・管理会社に相談！」という回答が最多だったことからも、やはり管理会社に信頼を置いている方が多いことが分かりました。" />
          </picture>
        </div>
      </section>
      <section class="mb4 mb3_sp">
        <div class="mb4 mb2_sp">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report13/q5@2x.jpg" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report13/q5-sp@2x.jpg" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report13/q5.jpg" loading="lazy" class="u-img__max" alt="プロに頼んでよかった点をお聞かせください。｜9割近くの方が、「自分ではできないような箇所まで清掃してくれた」「専門の器具や機器で細かく清掃してくれた」の少なくともいずれかを回答していました。年代による回答のバラツキはなく、全ての年代で共通していました。ちなみに、ハウスクリーニングを依頼した部位で、最も多かったのは「エアコン」。30代以降の年代では、「換気扇」の回答も多く見られました。どちらも、自分で細かい部分まで清掃するのは難しいですね。" />
          </picture>
        </div>
        <a href="<?php echo $base_url ?>/smile/article/hcm-housecleaning.php">
          <div>
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report13/q5_att@2x.jpg" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report13/q5_att-sp@2x.jpg" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report13/q5_att.jpg" loading="lazy" class="u-img__max" alt="ハウスクリーニングを利用してみませんか？｜長谷工グループでは、プロによるハウスクリーニングサービスを提供しています。もちろん、エアコンも換気扇もお任せください！頑固な汚れもスッキリお掃除いたします。ほかにも、キッチンや浴室など、ご家庭のお掃除では対処しにくい場所をまとめてピカピカに♪ブランシエラクラブ会員のみなさまは「スマイル」を使ってお得にご利用いただけます。ぜひお気軽にご相談くださいね！" />
            </picture>
          </div>
        </a>
      </section>
      <section class="mb4 mb2_sp">
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report13/q6_01@2x.jpg" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report13/q6_01-sp@2x.jpg" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report13/q6_01.jpg" loading="lazy" class="u-img__max" alt="今まで、リフォームフェアや相談会に 行かれたことがありますか？また、行ってみたいですか？｜「行ったことがないが、機会があれば行ってみたい」という回答が、全体で最も多い回答数となりました。特に、築5～14年の方々の間で、回答率が上昇しています。築20～24年以降グッと増えるのが、「行ったことがある」という回答です。フェアへの参加、つまりリフォームの意識が高まり準備を始める時期が、築20年といえそうです。そして、どの年代でも一定の割合なのが「開催していることも知らない」という回答。リフォームフェアや相談会を開催する情報をタイミング良く知ることができれば、足を運ぶ方も増えそうです。" />
          </picture>
        </div>
        <div class="mb2">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report13/q6_02@2x.jpg" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report13/q6_02-sp@2x.jpg" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report13/q6_02.jpg" loading="lazy" class="u-img__max" alt="子供の成長や家族の形が変わる中で、都度自分達のスタイルに合うモノは何かを提案してくれたり、アドバイスや実例集も教えてくれると頼もしいです。｜一度きりではなく、長くサポートしてくれる体制だと安心ですよね。実績の多い会社が主催しているフェアなら、その分実例のレパートリーも豊富そうです。｜相談会なら型番や年式など、話が通じる人がいるのではないかと期待。｜おっしゃる通り、直接プロと対面できる相談会なら、細かい部分まで質問することができます。リフォームについてはっきりしたビジョンをお持ちの方も、そうでない方も、実際に相談するとよりイメージが湧きやすくなると思いますよ。｜リフォームまでとはいかなくても安価でできることや、へぇーと思うような知識が得られれば嬉しい。｜中にはリフォームに限らず、さまざまな住まいに関するセミナーを行っているフェアもあります！ご自身の関心に合ったイベントを選ぶとよいでしょう。" />
          </picture>
        </div>
        <a href="https://www.haseko.co.jp/hrf/reform/" target="_blank" rel="nofollow">
          <div>
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report13/q6_att@2x.jpg" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report13/q6_att-sp@2x.jpg" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report13/q6_att.jpg" loading="lazy" class="u-img__max" alt="リフォームの相談をするなら、こちら！｜株式会社長谷工リフォームは、No.1のマンション施工実績とトップクラスのマンション管理実績をもとに、安全安心なリフォームのご提案をいたします。ホームページには、実際のリフォーム・リノベーション事例も多数掲載中！さらに、リフォームについて直接ご相談いただけるフェアも開催しています。開催情報はホームページでお知らせしていますので、ぜひチェックしてみてくださいね♪" />
            </picture>
          </div>
        </a>
      </section>
      <section>
        <div class="center mb5 mb3_sp">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report13/grt01@2x.jpg" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report13/grt01-sp@2x.jpg" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report13/grt01.jpg" loading="lazy" class="u-img__max" alt="貴重なご意見ありがとうございました！"  style="max-width:536px" />
          </picture>
        </div>
        <div class="center mb5 mb3_sp">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report13/end@2x.jpg" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report13/end-sp@2x.jpg" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report13/end.jpg" loading="lazy" class="u-img__max" alt="みなさま、ご回答いただきありがとうございました！住まいに関するアンケート、いかがだったでしょうか？大切な我が家とできるだけ快適に、長く付き合っていくためには、メンテナンスは欠かせないポイントです。また、今は必要なくても、いつか必要になる日のために、少しずつ商品やサービスの情報を収集しておくとよいかもしれませんね。その際には、ぜひブランシラクラブをお役立てください♪"  style="max-width:698px"/>
          </picture>
        </div>
        <div class="center mb5 mb3_sp">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report13/mail-mag@2x.jpg" media="(min-width: 667px)" loading="lazy">
            <source srcset="<?php echo $img_url ?>/enquete/report13/mail-mag-sp@2x.jpg" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report13/mail-mag.jpg" loading="lazy" class="u-img__max" alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！"  style="max-width:503px"/>
          </picture>
        </div>
        <div class="center">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report13/next@2x.jpg" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report13/next-sp@2x.jpg" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report13/next.jpg" loading="lazy" class="u-img__max" alt="次回の第１4回アンケートは2020年4月16日（木）に実施予定です。みなさまのご回答をお待ちしております！"  style="max-width:476px"/>
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
