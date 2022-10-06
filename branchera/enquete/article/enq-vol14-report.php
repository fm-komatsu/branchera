<?php
//base
include ("../../function.php");
$content = get_id_data('11028');
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
        <h2 class="u-ttl__l">満足度・意識調査2020</h2>
        <div class="u-assist_enq_low07 u-only__pc">
          回答期間　　　：　2020年5月14日（木）～2020年5月31日（日）<br>
          回答者数　　　：　計3,080名<br>

        </div>
        <div class="u-assist_enq_low07 u-only__sp">
          回答期間：2020年5月14日（木）～2020年5月31日（日）<br>
          回答者数：計3,080名<br>

        </div>
        <div class="mb2">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/main-v@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/main-v-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/main-v.png" loading="lazy" class="u-img__max" alt="<?php echo $pageTtl ?>" />
          </picture>
        </div>
        <p>毎年恒例の、ブランシエラクラブ満足度・意識調査。今回もたくさんの会員さまにご回答いただきました。お料理レシピ動画や片付けメソッドなどの暮らしに役立つ情報から、スマイル（長谷工ポイント）を利用したポイント制度、優待サービスまで、さまざまなコンテンツが存在するブランシエラクラブ。みなさまが普段、どのようにコンテンツを楽しんでいるのか、今後どのようなサービスに期待しているのか…気になるご意見を詳しく伺いました。さっそく、アンケート結果を発表します！</p>
      </section>
      <section class="mb5 mb3_sp mt3_sp">
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q1@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q1-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q1.png" loading="lazy" class="u-img__max" alt="Q１ ポイントサービス「住まいレージ」を利用したことがありますか？｜「住まいレージ」とは、スマイル（長谷工ポイント）を利用して、暮らしを快適にするサービスや商品と交換することができるポイントサービスのことです。この「住まいレージ」を利用したことがある方は45%と、昨年度から10%上昇！また、「利用したことはないがサービスは知っている」という方も、約半数を占めました。住まいレージの中でも特に人気を集めたのが、100スマイルで応募できる「抽選賞品プレゼント」。毎月プレゼントの内容は変わるのも楽しめるポイント♪今後も雑貨から家電まで、いろいろなアイテムが登場する予定です！そして、さらにたくさんの方に住まいレージをご利用いただけるよう、欲しいサービスや期待したいこともお伺いしました！" />
          </picture>
        </div>
      </section>
      <section>
        <div class="mb4 mb3_sp report14__bgb">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q2__01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q2__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q2__01.png" loading="lazy" class="u-img__max" alt="Q2 今後、「住まいレージ」に欲しいサービス、期待したいことはありますか？｜特に多かったご回答が、「手軽な交換商品が欲しい」というものです。ほかにも、「たなかみ米と交換するのが楽しみ」「世界の料理を楽しむ割引チケットが欲しい」など、食べ物に関する声が複数寄せられ、人気が伺えました。また、商品券やQUOカードなど、金券と交換したいというご意見も多数見受けられました。みなさまのご意見を参考に、今後も新しい交換商品やサービスを追加していく予定です！そして、欲しい商品の内容と共に届いたのが、「もっとスマイルがたまる機会が欲しい」という声です。「もう少し気軽にスマイルをためつつ、何回かに分けて使っていきたい」…そんな会員さまの声に応えるべく、この度住まいレージ制度をリニューアルしました！" />
          </picture>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q2__02@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q2__02-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q2__02.png" loading="lazy" class="u-img__max" alt="住まいレージがリニューアルしました！｜ブランシエラクラブのポイントサービス「住まいレージ」がもっと楽しく！もっとたまりやすくリニューアル！ブランシエラクラブのコンテンツや、メルマガをご覧いただくことでスマイルがたまる「アクションポイント」をはじめ、より手軽にスマイルをためることができる仕組みとなりました♪これまでの長谷工グループのご利用に伴うスマイル付与は終了となりますが、今後も新たなスマイル付与サービスの提供を予定しております。乞うご期待！" />
          </picture>
          <a href="<?php echo $base_url ?>/smile/smile-lp.php" data-ga-click="enq14_smile-lp">
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report14/q2__03@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report14/q2__03-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report14/q2__03.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="詳しくはこちらをチェック！" />
            </picture>
          </a>
        </div>
      </section>
      <section class="mb3 mb3_sp">
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q3@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q3-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q3.png" loading="lazy" class="u-img__max" alt="Q3 「住まいレージ」がグループ会社サービスでご利用いただけることをご存知ですか？｜ためていただいたスマイルは、長谷工グループのサービスにご利用いただけます！1スマイル＝1円としてお得にサービスを利用できるシステムですが、「サービスは知っているが、まだ利用したことはない」という方が約半数。一方、「利用したことがある」というご回答は全体の8%で、ご回答者さまのうち約240名の方にご利用いただけていました。なお、長谷工グループの中で利用してみたいサービスを伺ったところ、40代未満の間では「ブランド家具購入」が、45歳以上の世代では、「リフォーム」に関するサービスの利用希望率が高かったです。そして、どの世代からも満遍なく利用希望率が高かったのが「ハウスクリーニング」でした。もちろん、これらのサービスにもスマイルを利用することができます！ぜひこの機会にご利用くださいね。" />
          </picture>
        </div>
      </section>
      <section class="mb5 mb3_sp report14__bgg">
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q4__01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q4__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q4__01.png" loading="lazy" class="u-img__max" alt="Q4 長谷工グループ各社やサービスで、知りたい情報などがありましたら教えてください。｜みなさまに自由に記述していただいた設問です！ご回答内容は大きく分けて2種類ありました。上段のご回答のような「長谷工グループの商品や技術」に関する内容と、下段のご回答のような「長谷工グループが提供するサービス」に関する内容です。特に多かったのが、後者の長谷工グループが提供するサービス、中でも「リフォーム」や「メンテナンス」について知りたい！という声でした。おそらく、現在暮らしている家をより住みやすくしたい、もしくは今の状態をキープしたいと思っている方が多いのではないでしょうか？そんなみなさまにおすすめしたい、スマイルを使ってお得にご利用いただけるリフォーム&メンテナンスサービスをご紹介します！" />
          </picture>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q4__02@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q4__02-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q4__02.png" loading="lazy" class="u-img__max" alt="スマイルをつかって長谷工グループのサービスがお得に！｜スマイルを使ってお得にご利用可能な、長谷工の室内リフォーム工事とハウスクリーニング。リフォーム工事は、室内のクロスの貼替から水回り機器の交換まで幅広く対応します。ハウスクリーニングは、1,000スマイルからご利用いただけるサービスです。キッチンやエアコン、浴室などの、自分では掃除が難しい場所のお掃除もプロにお任せ！気になる方は、ぜひお気軽にご相談ください。" />
          </picture>
          <a href="<?php echo $base_url ?>/smile/use-smileage.php#use" data-ga-click="enq14_use-smileage">
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report14/q4__03@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report14/q4__03-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report14/q4__03.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="他のサービスをチェックする" />
            </picture>
          </a>
        </div>
      </section>
      <section class="mb4 mb3_sp">
        <div class="mb4 mb2_sp">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q5__01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q5__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q5__01.png" loading="lazy" class="u-img__max" alt="Q5 ブランシエラマガジンの中で、興味があるコンテンツはどれですか？｜さまざまなコンテンツがあるブランシエラクラブ。特に興味を持って読んでいただけているのが、お料理レシピやテクニックを紹介する「うちのご飯は世界イチ」「今さら聞けない料理のアレコレ」、収納・片付けテクニックを紹介する「何でか、部屋が片付かない。」でした。住まいレージに関連する設問では、リフォームやハウスクリーニングなど「住まい」に関する情報に関心が集まっていました。一方、コンテンツの中で関心が集まったのは、お料理と収納という、「暮らし」に関する情報です。お料理や収納は毎日考えなくてはならないものだからこそ、読んだり見たりして、楽しみながら情報を入手したいという方が多いのかもしれませんね。" />
          </picture>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q5__02@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q5__02-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q5__02.png" loading="lazy" class="u-img__max" style="margin-top:-2px;" alt="片付けのノウハウをご紹介！｜部屋の片付けが苦手な家族が、片付けのノウハウを学びながら憧れの部屋を目指すマンガコラム。整理収納アドバイザーの監修のもと、「キッチンの片付け」「書類の片付け」「片付いた部屋を維持するコツ」など、さまざまな片付けノウハウをご紹介します！全16話の本編に加えて、「自宅ワークスペースの整理術」などを伝授する番外編も更新中♪ぜひ一度ご覧ください！" />
          </picture>
          <a href="<?php echo $base_url ?>/magazine/index_comic01.php" data-ga-click="enq14_comic01">
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report14/q5__03@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report14/q5__03-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report14/q5__03.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="片付けノウハウを見る" />
            </picture>
          </a>
        </div>
      </section>
      <section class="mb4 mb3_sp report14__bgb">
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q6__01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q6__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q6__01.png" loading="lazy" class="u-img__max" alt="Q6 料理動画を“毎週”掲載していることを知っていますか？｜動画とテキストでお料理テクニックを解説する「今さら聞けない料理のアレコレ」は、実は“毎週”更新中！ご存知の方は37%と、昨年度から16%も増加していました！また、“毎週更新”はご存じなくても、お料理動画の掲載をご存知の方は80%以上と、やはり興味を持っていただけていることがわかります。「今さら聞けない料理のアレコレ」は、「包丁の持ち方」「軽量の仕方」などのお料理初心者が知りたい情報から、「刺身の切り方・盛り付け方」「ホットケーキの作り方」などの実践的な内容まで、詳しく解説するお料理コンテンツ！最も人気がある「ローストビーフの作り方」動画は、YouTubeでの再生回数1.5万回を突破！幅広い人々から視聴されており、チャンネル登録者数も増加中です♪今回のアンケートでは、みなさまが知りたいレシピについても伺いました。今後の動画作りに反映していきますので、お楽しみに！" />
          </picture>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q6__02@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q6__02-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q6__02.png" loading="lazy" class="u-img__max" alt="人気のお料理動画TOP3！｜大阪国際大学短期大学部 ライフデザイン総合学科栄養士コースの実習教材として、「今さら聞けない料理のアレコレ」を使用していただいています！使用していただいた動画は、「お米の炊き方」「かつお・昆布だしのとり方」「すまし汁の作り方」等々、日々のお料理に活用したり、お料理の基本を知っていただく等、幅広くご活用いただけるコンテンツです！ぜひ一度ご覧ください♪" />
          </picture>
          <a href="<?php echo $base_url ?>/magazine/index_comic02.php" data-ga-click="enq14_comic02">
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report14/q6__03@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report14/q6__03-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report14/q6__03.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="お料理のレシピ・テクニックを見る" />
            </picture>
          </a>
        </div>
      </section>
      <section class="mb4 mb3_sp report14__bgp">
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q7__01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q7__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q7__01.png" loading="lazy" class="u-img__max" alt="Q7 ブランシエラクラブのイベントに応募したことがありますか？｜ブランシエラクラブでは、クルーズやスポーツなど、会員のみなさまにご参加いただけるイベントを定期開催しています。今回のアンケートでは、ご応募経験のある方は30%という結果になりました。特に応募数が多く、人気を集めたイベントは“田植え&陶芸体験”と“親子ゴルフ＆野球教室”。お越しいただいた方からは、「小学生の子どもはもちろんの事、幼児も大人も全員が楽しめる素敵なイベントでした！」といった感想をいただきました。また、「今後どのようなイベントを開催してほしいですか？」という設問へは、以下のような「体験イベント」「オンラインイベント」を希望するご意見が寄せられました。現在は人が集まる場所に行きづらいという方も多いのではないでしょうか。「場所や時間にかかわらず、実体験ができる」…そんなイベントへの需要が高まりそうですね。" />
          </picture>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q7__02@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q7__02-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q7__02.png" loading="lazy" class="u-img__max" alt="お家で楽しめるイベントやコンテンツを計画中？｜「お住まいの地域や情勢にかかわらず、できるだけたくさんの方にご参加いただけるイベントを開催したい！」という思いから、ブランシエラクラブではおうちで楽しめるイベントやコンテンツを計画中です！現在、おうちで「骨盤の調整レッスン」を体験できる動画をご紹介しています。今後も、どこでもオンラインで楽しめるイベントを提供していく予定ですので、楽しみにお待ちくださいね♪" />
          </picture>
          <a href="<?php echo $base_url ?>/magazine/article/kotsuban_lesson_01.php" data-ga-click="enq14_kotsuban_lesson">
            <picture>
              <source srcset="<?php echo $img_url ?>/enquete/report14/q7__03@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
              <source srcset="<?php echo $img_url ?>/enquete/report14/q7__03-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
              <img src="<?php echo $img_url ?>/enquete/report14/q7__03.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="骨盤の調整レッスン骨盤の調整レッスン" />
            </picture>
          </a>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q7__04@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q7__04-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q7__04.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="他にも続々！？ご期待ください！" />
          </picture>
        </div>
      </section>
      <section class="mb4 mb3_sp report14__bgg">
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q8__01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q8__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q8__01.png" loading="lazy" class="u-img__max" alt="Q8 今後、読んでみたい・興味のあるジャンルを教えてください。｜今後読んでみたいコンテンツには、DIYなど自分でできるメンテナンスやライフスタイルに関する情報のほか、「マンションの管理人の仕事内容を知りたい！」といった面白いご意見も寄せられました。また、インテリアやガーデニングなど、住まいを彩る情報について関心がある方も多いようです。単純に読み物として面白いというよりは、ご自身の生活に役立つ、実用性を兼ね備えたコンテンツが求められていると思われます。今後のコンテンツ作りに反映させていただきます！" />
          </picture>
        </div>
      </section>
      <section class="mb4 mb3_sp">
        <div>
          <img src="<?php echo $img_url ?>/enquete/report14/q9__01@2x.png" loading="lazy" class="u-img__max u-only__pc" alt="Q9 ブランシエラクラブでSNSを使った投稿はご存知ですか？｜実は、ブランシエラクラブには公式InstagramとFacebookのアカウントがあるのをご存知ですか？まだ実際にご覧いただいている方は少ないですが、「知らなかったが見てみたい」という方が半数以上でした！今後、InstagramとFacebookでは、よりブランシエラクラブを身近に感じていただけるような情報をお届けする予定です。写真で楽しめる最新情報から、ブランシエラクラブ事務局の裏話まで!?メルマガとはまた違った情報を更新していきますので、興味のある方はぜひフォロー&チェックをお願いします♪">
          <img src="<?php echo $img_url ?>/enquete/report14/q9__01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="Q9 ブランシエラクラブでSNSを使った投稿はご存知ですか？｜実は、ブランシエラクラブには公式InstagramとFacebookのアカウントがあるのをご存知ですか？まだ実際にご覧いただいている方は少ないですが、「知らなかったが見てみたい」という方が半数以上でした！今後、InstagramとFacebookでは、よりブランシエラクラブを身近に感じていただけるような情報をお届けする予定です。写真で楽しめる最新情報から、ブランシエラクラブ事務局の裏話まで!?メルマガとはまた違った情報を更新していきますので、興味のある方はぜひフォロー&チェックをお願いします♪">
          <div class="report14-sns" style="margin-top:-1px;">
            <div class="report14-sns__row">
              <div class="report14-sns__ex">
                <img src="<?php echo $img_url ?>/enquete/report14/q9__02@2x.png" style="max-width:421px" loading="lazy" class="u-img__max u-only__pc">
                <img src="<?php echo $img_url ?>/enquete/report14/q9__02-sp@2x.png" loading="lazy" class="u-img__max u-only__sp">
              </div>
              <a href="https://www.instagram.com/haseko_brancheraclub/?igshid=vx5xh8py1t9u" target="_blank" data-ga-click="enq14_insta" class="report14-sns__insta">
                <img src="<?php echo $img_url ?>/enquete/report14/q9__03@2x.png" style="max-width:148px" loading="lazy" class="u-img__max u-only__pc">
                <img src="<?php echo $img_url ?>/enquete/report14/q9__03-sp@2x.png" loading="lazy" class="u-img__max u-only__sp">
              </a>
              <a href="https://www.facebook.com/%E9%95%B7%E8%B0%B7%E5%B7%A5%E3%82%B0%E3%83%AB%E3%83%BC%E3%83%97-%E3%83%96%E3%83%A9%E3%83%B3%E3%82%B7%E3%82%A8%E3%83%A9%E3%82%AF%E3%83%A9%E3%83%96-110727557085783/" target="_blank" data-ga-click="enq14_FB" class="report14-sns__fb">
                <img src="<?php echo $img_url ?>/enquete/report14/q9__04@2x.png" style="max-width:171px" loading="lazy" class="u-img__max u-only__pc">
                <img src="<?php echo $img_url ?>/enquete/report14/q9__04-sp@2x.png" loading="lazy" class="u-img__max u-only__sp">
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="mb4 mb3_sp">
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q10__01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q10__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q10__01.png" loading="lazy" class="u-img__max" alt="Q10 「ClubOff by HASEKO」を利用したことがありますか？｜「ClubOff by HASEKO」は、長谷工の会員さまなら誰でもご利用いただける優待サービス。「ClubOff by HASEKO」を使えば、国内外の宿泊施設、グルメ、レジャー、ショッピングなど、20万ヵ所以上の施設を割引価格でご利用いただけます。今回のアンケートでは、ご利用経験がある方は15%という結果になりました。「利用に料金がかかるのでは？」「「特別な手続きが必要なのでは？」と不安な方もいらっしゃるのかもしれませんね。ご安心ください。「ClubOff by HASEKO」のご利用は登録料・会費無料！長谷工IDでログインしていただくだけで、すぐにご利用いただけます" />
          </picture>
        </div>
      </section>
      <section class="mb4 mb3_sp">
        <div>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q11__01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q11__01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q11__01.png" loading="lazy" class="u-img__max" alt="Q11 どのようなサービスを利用されましたか？｜実際にご利用経験がある方に、どのようなサービスを利用されたか伺いました。多かったのは、「映画館のチケット購入」「レストランでの割引」といったお出かけ時に使用できるサービスと、「ClubOff by HASEKOの日」というご回答でした。「ClubOff by HASEKOの日」とは、毎月1回、映画チケットやハーゲンダッツなどの人気商品が超お得価格で購入できる日のこと。時には、90%近く割引されることも！毎月、メルマガでも告知していますので、ぜひチェックしてみてください♪" />
          </picture>
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/q11__02@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/q11__02-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/q11__02.png" loading="lazy" class="u-img__max" style="margin-top:-1px;" alt="みなさまが「ClubOff by HASEKO」に加えてほしいサービス、期待したいこと｜みなさまからは、「ClubOff by HASEKO」に加えて欲しいサービスや、期待したいことについても教えていただきました。今回ご紹介したサービスのほかにも、食事のテイクアウトや宅配グルメに使えるクーポンから、お子さまの学習やオンラインフィットネスに使える特典まで、さまざまなサービスが随時追加されています。今後もいただいたご意見を参考に、新しい商品やサービスを展開していきますので、お楽しみに！" />
          </picture>
        </div>
      </section>
      <section>
        <div class="center mb5 mb3_sp">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/grt01@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/grt01-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/grt01.png" loading="lazy" class="u-img__max" alt="貴重なご意見ありがとうございました！" >
          </picture>
        </div>
        <div class="center mb5 mb3_sp">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/end@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/end-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/end.png" loading="lazy" class="u-img__max" alt="ブランシエラクラブ満足度・意識調査の結果は、いかがでしたか？今回のアンケートを通して、会員のみなさまが日頃ブランシエラクラブに求めていること、感じていることを伺うことができました。全体を通して伝わってきたのが、生活に直結する「住まいと暮らし」への関心が非常に高い！ということです。「住まいレージ」、「ClubOff by HASEKO」といった優待サービスも、現在更新しているお料理動画や収納コラムも、よりみなさまの生活に役立つコンテンツにできるよう改良していきます！さらに今後は、「アクションポイント」やSNSなどを通して、会員のみなさまがブランシエラクラブに直接関わっていただけるような企画も増やしていく予定です。ご期待ください！"/>
          </picture>
        </div>
        <div class="center mb5 mb3_sp">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/mail-mag@2x.png" media="(min-width: 667px)" loading="lazy">
            <source srcset="<?php echo $img_url ?>/enquete/report14/mail-mag-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/mail-mag.png" loading="lazy" class="u-img__max" alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！" />
          </picture>
        </div>
        <div class="center">
          <picture>
            <source srcset="<?php echo $img_url ?>/enquete/report14/next@2x.png" media="(min-width: 667px)" loading="lazy" class="u-img__max">
            <source srcset="<?php echo $img_url ?>/enquete/report14/next-sp@2x.png" media="(max-width: 666px)" loading="lazy" class="u-img__max">
            <img src="<?php echo $img_url ?>/enquete/report14/next.png" loading="lazy" class="u-img__max" alt="第15回アンケートは2020年8月6日（木）〜実施！みなさまのご回答をお待ちしております！" />
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
