<?php
//base
include ("../../function.php");
$content = get_id_data('11024');
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

      <section class="main__item mb0">
        <h2 class="u-ttl__l">収納に関するアンケート</h2>
        <div class="u-assist_enq_low07 u-only__pc">
          回答期間　　　：　2019年10月17日（木）～2019年10月31日（木）<br>
          回答者数　　　：　計2,780名<br>

        </div>
        <div class="u-assist_enq_low07 u-only__sp">
          回答期間：2019年10月17日（木）～2019年10月31日（木）<br>
          回答者数：計2,780名<br>

        </div>
        <figure>
          <img
          data-src="<?php echo $img_url ?>/enquete/report12/main-v.png"
          data-retina="<?php echo $img_url ?>/enquete/report12/main-v@2x.png"
          alt="<?php echo $pageTtl; ?>"
          class="u-img__max"
          style="max-width:740px; "
          >
        </figure>
      </section>
      <section>
        <div class="enq12bg__yellow pt3">
          <div class="mb2 mb0_sp enq12__padding">
            <figure>
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q1.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q1@2x.png"
              alt="現在の住まいの収納スペースには満足していますか？"
              style="max-width:704px;"
              class="u-only__pc u-img__max center"
              >
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q1-sp@2x.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q1-sp@2x.png"
              alt="現在の住まいの収納スペースには満足していますか？"
              style="max-width:585px;"
              class="u-only__sp u-img__max center"
              >
            </figure>
          </div>
          <div class="enq12__padding">
            <p>部屋数の多さと比例して、やや満足度が上がっていますが、どちらにしても「満足していない！」という声が多数派。みなさま、何かしら収納に不満をお持ちのようですね。ちなみに、収納スペースへの満足度が低かったのは30～40代。その中で最も低かったのは35～39歳で、「満足している」という回答はわずか25％という結果に。子どもの成長とともに、個人の持ちものが増えるタイミングなのかもしれません。<br>逆に、最も満足度が高かったのが85歳～89歳。75％の方が「満足している」と回答しました。<br>間取りによる違いはあまりないものの、年代によって多少差があることが分かった満足度。次に気になるのは、「みんな具体的にどんな不満を抱いているの？」ということですよね。回答を見ると、ある不満が4割を占める結果に…！</p>
          </div>
          <div class="mb0">
            <figure>
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q1-bg.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q1-bg@2x.png"
              alt="誰もが抱える「収納の不満」とは！？"
              style="max-width:740px;"
              class="u-only__pc u-img__max center"
              >
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q1-bg-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q1-bg-sp@2x.png"
              alt="誰もが抱える「収納の不満」とは！？"
              style="max-width:632px;"
              class="u-only__sp u-img__max center"
              >
            </figure>
          </div>
        </div>
      </section>
      <section>
        <div class="enq12bg__green mt0 pb3">
          <div class="mb2 mb0_sp enq12__padding">
            <figure>
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q2.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q2@2x.png"
              alt="現在抱える収納スペースの不満は次のうちどれですか？"
              style="max-width:704px;"
              class="u-only__pc u-img__max center"
              >
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q2-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q2-sp@2x.png"
              alt="現在抱える収納スペースの不満は次のうちどれですか？"
              style="max-width:585px;"
              class="u-only__sp u-img__max center"
              >
            </figure>
          </div>
          <div class="enq12__padding mb3_sp">
            <p>
            最も多かったのは、「収納スペースが少ない」という不満でした。「収納スペースが狭い」を合わせると、なんと4割超が収納面積に不満アリ！ということが判明。<br>ちなみに残りの回答のうち、4割近く挙がったのが「暗い」「湿気がある」などの収納スペースの環境に関するもの。ほか、2割弱は「出し入れがしにくい」「形状が悪い」など、使い勝手に関するものでした。<br>環境や使い勝手は、設備や内装の工夫で改善できるかもしれません。しかし、収納面積自体を広げるのは、なかなか自分の力だけでは難しいですよね。キャビネットやボックスを利用するにも、それらを置くお部屋のスペースは有限！どうやって収納スペースを増やすのかは、大いに悩むところです。
            </p>
          </div>
          <div class="mb3 enq12__padding">
            <figure>
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q2-other.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q2-other@2x.png"
              alt="<?php echo $pageTtl; ?>"
              style="max-width:645px;"
              class="u-only__pc u-img__max center"
              >
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q2-other-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q2-other-sp@2x.png"
              alt="<?php echo $pageTtl; ?>"
              style="max-width:584px;"
              class="u-only__sp u-img__max center"
              >
            </figure>
          </div>
          <div class="enq12__padding mb2">
            <p>みなさまから寄せられた切実な声の数々…。収納スペースの修繕と面積の拡張、どちらも行ないたいという方も多いようです。実は、これらのお悩みを一気に解決する方法が…！</p>
          </div>
          <div class="enq12__box enq12box enq12__padding">
            <div class="enq12box__row">
              <figure class="mb3 mb2_sp">
                <img
                data-src="<?php echo $img_url ?>/enquete/report12/q2-r__ttl.png"
                data-retina="<?php echo $img_url ?>/enquete/report12/q2-r__ttl@2x.png"
                alt="収納の少なさでお困りなら…思い切ってリフォームはいかがですか？"
                style="max-width:645px; margin-top:-18%;"
                class="u-only__pc u-img__max center"
                >
                <img
                data-src="<?php echo $img_url ?>/enquete/report12/q2-r__ttl-sp.png"
                data-retina="<?php echo $img_url ?>/enquete/report12/q2-r__ttl-sp@2x.png"
                alt="収納の少なさでお困りなら…思い切ってリフォームはいかがですか？"
                style="max-width:584px; margin-top:-28%;"
                class="u-only__sp u-img__max center"
                >
              </figure>
              <div class="enq12__padding">
                <div class="mb3 mb2_sp">
                  <figure class="center">
                    <img
                    data-src="<?php echo $img_url ?>/enquete/report12/hdr_logo.png"
                    data-retina="<?php echo $img_url ?>/enquete/report12/hdr_logo@2x.png"
                    alt="株式会社長谷工リフォーム　ロゴ"
                    style="max-width:364px;"
                    class="u-img__max center u-only__pc"
                    >
                    <img
                    data-src="<?php echo $img_url ?>/enquete/report12/hdr_logo.png"
                    data-retina="<?php echo $img_url ?>/enquete/report12/hdr_logo@2x.png"
                    alt="株式会社長谷工リフォーム　ロゴ"
                    style="max-width:240px;"
                    class="u-img__max center u-only__sp"
                    >
                  </figure>
                </div>
                <div class="enq12__padding mb3 mb2_sp">
                  <p>リフォームというと大がかりに聞こえますが、間取りは変えずに足元収納を設置したり、使っていない和室をクローゼットにしたりと、さまざまなプランがあります。<br>長谷工リフォームのサイトでは、役立つ収納術も公開中♪見ていてワクワクするビフォー＆アフター事例も多数掲載しています！いきなりリフォームは難しいという方も、お気軽にご覧ください！</p>
                </div>
                <div class="u-column__2">
                  <div class="u-column__item mb2_sp">
                    <div class="mb2">
                      <figure class="center">
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report12/q2-r__left.png"
                        data-retina="<?php echo $img_url ?>/enquete/report12/q2-r__left@2x.png"
                        alt="収納力をアップした事例をご紹介"
                        style="max-width:301px;"
                        class="u-img__max center u-only__pc"
                        >
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report12/q2-r__left-sp.png"
                        data-retina="<?php echo $img_url ?>/enquete/report12/q2-r__left-sp@2x.png"
                        alt="収納力をアップした事例をご紹介"
                        style="max-width:538px;"
                        class="u-img__max center u-only__sp"
                        >
                      </figure>
                    </div>
                    <div>
                      <a href="https://www.haseko.co.jp/hrf/reform/jirei/kanto_13.html" target="_blank" class="enq12__linkbtn">
                        <figure class="center">
                          <img
                          data-src="<?php echo $img_url ?>/enquete/report12/q2-r__left-btc.png"
                          data-retina="<?php echo $img_url ?>/enquete/report12/q2-r__left-btc@2x.png"
                          alt="詳しくはこちら"
                          style="max-width:301px;"
                          class="u-img__max center u-only__pc"
                          >
                          <img
                          data-src="<?php echo $img_url ?>/enquete/report12/q2-r__left-btc-sp.png"
                          data-retina="<?php echo $img_url ?>/enquete/report12/q2-r__left-btc-sp@2x.png"
                          alt="詳しくはこちら"
                          style="max-width:538px;"
                          class="u-img__max center u-only__sp"
                          >
                        </figure>
                      </a>
                    </div>
                  </div>
                  <div class="u-column__item">
                    <div class="mb2">
                      <figure class="center">
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report12/q2-r__right.png"
                        data-retina="<?php echo $img_url ?>/enquete/report12/q2-r__right@2x.png"
                        alt="長谷工リフォームの収納術"
                        style="max-width:301px;"
                        class="u-img__max center u-only__pc"
                        >
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report12/q2-r__right-sp.png"
                        data-retina="<?php echo $img_url ?>/enquete/report12/q2-r__right-sp@2x.png"
                        alt="長谷工リフォームの収納術"
                        style="max-width:538px;"
                        class="u-img__max center u-only__sp"
                        >
                      </figure>
                    </div>
                    <div>
                      <a href="https://www.haseko.co.jp/hrf/reform/special/syunou.html" target="_blank" class="enq12__linkbtn">
                        <figure class="center">
                          <img
                          data-src="<?php echo $img_url ?>/enquete/report12/q2-r__right-btn.png"
                          data-retina="<?php echo $img_url ?>/enquete/report12/q2-r__right-btn@2x.png"
                          alt="詳しくはこちら"
                          style="max-width:301px;"
                          class="u-img__max center u-only__pc"
                          >
                          <img
                          data-src="<?php echo $img_url ?>/enquete/report12/q2-r__right-btn-sp.png"
                          data-retina="<?php echo $img_url ?>/enquete/report12/q2-r__right-btn-sp@2x.png"
                          alt="詳しくはこちら"
                          style="max-width:538px;"
                          class="u-img__max center u-only__sp"
                          >
                        </figure>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="enq12bg__yellow pt3 pb3">
          <div class="mb2 mb0_sp enq12__padding">
            <figure>
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q3.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q3@2x.png"
              alt="収納場所がなくて困っているものは次のうちどれですか？"
              style="max-width:704px;"
              class="u-only__pc u-img__max center"
              >
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q3-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q3-sp@2x.png"
              alt="収納場所がなくて困っているものは次のうちどれですか？"
              style="max-width:585px;"
              class="u-only__sp u-img__max center"
              >
            </figure>
          </div>
          <div class="enq12__padding mb3 mb2_sp">
            <p>全体の58％を占め、どの年代でもダントツの1位を獲得したのが「衣類」！2位の「靴」（28％）も含め、流行や好みが変わると、着なくなったり履かなくなったりして溜まってしまいがちですよね。新しいファッションを楽しみたいのに、収納場所がない！なんて方も多いのではないでしょうか？<br>そして、3位の「食品」（21％）に続いたのは、「調理用具」（17％）と「食器」（16％）。キッチンに関する回答もとても多く挙がりました。キッチンにものが溢れていると、お料理の効率や、作る気力にも影響してしまいそうです。<br>ちなみに間取り別で見ると、部屋数が少ないと「日用品」が、多いと「靴」の比率が高いという傾向が見られました。<br>毎日の暮らしを快適に送るためには、今持っているものの取捨選択も必要なのかもしれません。</p>
          </div>
          <div class="mb3 enq12__padding mb3">
            <figure>
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q3-other.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q3-other@2x.png"
              alt="こんな声もありました 行き場のない荷物たち"
              style="max-width:645px;"
              class="u-only__pc u-img__max center"
              >
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q3-other-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q3-other-sp@2x.png"
              alt="こんな声もありました 行き場のない荷物たち"
              style="max-width:584px;"
              class="u-only__sp u-img__max center"
              >
            </figure>
          </div>
          <div class="enq12__padding mb3 mb2_sp">
            <p>ほかにも、行事のときだけ必要な道具や、季節によって全く使う機会がないアイテムにお困りの方が多い様子。きっとその中には、「いつか使うかも」と思って取っておいたけど、もう何年も出していない…というものもあるのではないでしょうか。<br>思い切って断捨離！というのも手ですが、捨てる決断がなかなかできない方もいるでしょう。自分には不要でも誰かには必要なものもあるはず。捨てるのではなく、リサイクルでお得に有効活用しましょう！</p>
          </div>
          <div class="enq12__box enq12box2 enq12__padding">
            <div class="enq12box2__row">
              <figure class="mb3 mb2_sp">
                <img
                data-src="<?php echo $img_url ?>/enquete/report12/q3-k__ttl.png"
                data-retina="<?php echo $img_url ?>/enquete/report12/q3-k__ttl@2x.png"
                alt="収納場所からあふれたものは…ぜひカシコシュへお持ちください！"
                style="max-width:645px; margin-top:-18%;"
                class="u-only__pc u-img__max center"
                >
                <img
                data-src="<?php echo $img_url ?>/enquete/report12/q3-k__ttl-sp.png"
                data-retina="<?php echo $img_url ?>/enquete/report12/q3-k__ttl-sp@2x.png"
                alt="収納場所からあふれたものは…ぜひカシコシュへお持ちください！"
                style="max-width:584px; margin-top:-22%;"
                class="u-only__sp u-img__max center"
                >
              </figure>
              <div class="enq12__padding">
                <div class="mb3 mb2_sp">
                  <figure class="center">
                    <img
                    data-src="<?php echo $img_url ?>/enquete/report12/q3-k__logo.png"
                    data-retina="<?php echo $img_url ?>/enquete/report12/q3-k__logo@2x.png"
                    alt="カシコシュ　ロゴ"
                    style="max-width:232px;"
                    class="u-img__max center u-only__pc"
                    >
                    <img
                    data-src="<?php echo $img_url ?>/enquete/report12/q3-k__logo.png"
                    data-retina="<?php echo $img_url ?>/enquete/report12/q3-k__logo@2x.png"
                    alt="カシコシュ　ロゴ"
                    style="max-width:180px;"
                    class="u-img__max center u-only__sp"
                    >
                  </figure>
                </div>
                <div class="enq12__padding mb3 mb2_sp">
                  <p>カシコシュは、あなたの「もう使わない、使えない品物」を次のお客さまへ届けるお手伝いをする、長谷工グループの総合リサイクルショップ！店頭に行かなくても、ご自宅から商品を送るだけで無料宅配買取ができちゃいます。<br>しかも、ブランシエラクラブ会員さま限定で “ブランド品・貴金属などの無料宅配買取「最大5,000円UP」” を実施中！衣類や生活雑貨は捨てる前に、まずカシコシュにお送りください♪</p>
                </div>
                <div class="u-column__3">
                  <div class="u-column__item mb2_sp">
                    <div class="mb2">
                      <figure class="center">
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report12/q3-k__left.png"
                        data-retina="<?php echo $img_url ?>/enquete/report12/q3-k__left@2x.png"
                        alt="さまざまな買取方法！"
                        style="max-width:196px;"
                        class="u-img__max center u-only__pc"
                        >
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report12/q3-k__left-sp.png"
                        data-retina="<?php echo $img_url ?>/enquete/report12/q3-k__left-sp@2x.png"
                        alt="さまざまな買取方法！"
                        style="max-width:541px;"
                        class="u-img__max center u-only__sp"
                        >
                      </figure>
                      <div>
                        <p>「店頭買取」、「出張買取」、ブランド品や貴金属限定の「Web宅配買取」など、複数の買取方法からご選択いただけます！</p>
                      </div>
                    </div>
                  </div>
                  <div class="u-column__item">
                    <div class="mb2">
                      <figure class="center">
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report12/q3-k__center.png"
                        data-retina="<?php echo $img_url ?>/enquete/report12/q3-k__center@2x.png"
                        alt="査定料・手数料は不要！"
                        style="max-width:196px;"
                        class="u-img__max center u-only__pc"
                        >
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report12/q3-k__center-sp.png"
                        data-retina="<?php echo $img_url ?>/enquete/report12/q3-k__center-sp@2x.png"
                        alt="査定料・手数料は不要！"
                        style="max-width:541px;"
                        class="u-img__max center u-only__sp"
                        >
                      </figure>
                      <div>
                        <p>査定料・手数料は不要なので、お気軽にお問合せください♪どの買取方法も無料でご利用いただけます！</p>
                      </div>
                    </div>
                  </div>
                  <div class="u-column__item">
                    <div>
                      <figure class="center">
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report12/q3-k__right.png"
                        data-retina="<?php echo $img_url ?>/enquete/report12/q3-k__right@2x.png"
                        alt="取扱商品も多種多様！"
                        style="max-width:196px;"
                        class="u-img__max center u-only__pc"
                        >
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report12/q3-k__right-sp.png"
                        data-retina="<?php echo $img_url ?>/enquete/report12/q3-k__right-sp@2x.png"
                        alt="取扱商品も多種多様！"
                        style="max-width:541px;"
                        class="u-img__max center u-only__sp"
                        >
                      </figure>
                      <div>
                        <p>衣料品類（メンズ・レディース）から靴類、生活雑貨類、書籍やDVDなど、幅広い商品を取り扱っています！</p>
                      </div>
                    </div>
                  </div>
                  <div class="center mb3 mb2_sp enq12__padding">
                    <a href="https://www.haseko.co.jp/kasikosh/" target="_blank" class="enq12__linkbtn">
                      <figure class="center">
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report12/q3-k__btn.png"
                        data-retina="<?php echo $img_url ?>/enquete/report12/q3-k__btn@2x.png"
                        alt="詳しくはこちら"
                        style="max-width:304px;"
                        class="u-img__max center u-only__pc"
                        >
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report12/q3-k__btn-sp.png"
                        data-retina="<?php echo $img_url ?>/enquete/report12/q3-k__btn-sp@2x.png"
                        alt="詳しくはこちら"
                        style="max-width:401px;"
                        class="u-img__max center u-only__sp"
                        >
                        </figure>
                      </a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="enq12bg__green mt0 pb3 pt3">
          <div class="mb2 mb0_sp enq12__padding">
            <figure>
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q4.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q4@2x.png"
              alt="家の中のもので、なかなか捨てられないものは何ですか？"
              style="max-width:704px;"
              class="u-only__pc u-img__max center"
              >
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q4-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q4-sp@2x.png"
              alt="家の中のもので、なかなか捨てられないものは何ですか？"
              style="max-width:585px;"
              class="u-only__sp u-img__max center"
              >
            </figure>
          </div>
          <div class="enq12__padding mb3">
            <p>
            なんと、「収納場所がなくて困っているもの」とリンクする結果に！「なかなか捨てられずに増える一方で、収納スペースに入りきらない…」というループ状態に陥っている方が多そうです。<br>そして、中にはこんな声も…
            </p>
          </div>
          <div class="mb3 enq12__padding">
            <figure>
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q4-other.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q4-other@2x.png"
              alt="捨てたいけど捨てづらい！！収納に関する 家族への不満"
              style="max-width:699px;"
              class="u-only__pc u-img__max center"
              >
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q4-other-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q4-other-sp@2x.png"
              alt="捨てたいけど捨てづらい！！収納に関する 家族への不満"
              style="max-width:584px;"
              class="u-only__sp u-img__max center"
              >
            </figure>
          </div>
          <div class="enq12__padding mb2">
            <div class="enq12__comment enq12comment">
              <div class="enq12comment__row u-clearfix">
                <div class="enq12comment__icn u-float__right w25">
                  <figure>
                    <img
                    data-src="<?php echo $img_url ?>/enquete/report12/q4-icon.png"
                    data-retina="<?php echo $img_url ?>/enquete/report12/q4-icon@2x.png"
                    alt="ブランシエラクラブ編集部より"
                    style="max-width:137px;"
                    class="u-only__pc u-img__max center"
                    >
                  </figure>
                </div>
                <div class="enq12comment__ex w70 mb1_sp">
                  <p>「それぞれの趣味のものの置き場がない！」「子どもが集めたマンガが積み重なっている…」など、収納に関する家族への不満もちらほら。個人の所有物だと勝手に処分するわけにはいかず、不満が溜まり、収納スペースは減り…という、”負のループ”が起きがちですよね。<br>また、子どもが作った作品やアルバム、子ども服など思い出の品は捨てられないという声も多数！<br>そんな悩みを抱える方々におすすめしたいのが、思い切って「自宅外のスペースに荷物を預けてしまう」ということ！気軽に利用できる収納サービスをご紹介します。</p>
                </div>
              </div>
              <div class="enq12comment__icn u-only__sp">
                <figure>
                  <img
                  data-src="<?php echo $img_url ?>/enquete/report12/q4-icon-sp.png"
                  data-retina="<?php echo $img_url ?>/enquete/report12/q4-icon-sp@2x.png"
                  alt="ブランシエラクラブ編集部より"
                  style="max-width:260px;"
                  class="u-img__max"
                  >
                </figure>
              </div>
            </div>
          </div>
          <div class="enq12__box2 enq12box enq12__padding pt2">
            <div class="enq12box2__row">
              <figure class="mb3 mb2_sp">
                <img
                data-src="<?php echo $img_url ?>/enquete/report12/q4-c__ttl.png"
                data-retina="<?php echo $img_url ?>/enquete/report12/q4-c__ttl@2x.png"
                alt="なかなか捨てられないものは…月額500円の収納サービス「CARAETO」へ！"
                style="max-width:645px; margin-top:-18%;"
                class="u-only__pc u-img__max center"
                >
                <img
                data-src="<?php echo $img_url ?>/enquete/report12/q4-c__ttl-sp.png"
                data-retina="<?php echo $img_url ?>/enquete/report12/q4-c__ttl-sp@2x.png"
                alt="なかなか捨てられないものは…月額500円の収納サービス「CARAETO」へ！"
                style="max-width:584px; margin-top:-28%;"
                class="u-only__sp u-img__max center"
                >
              </figure>
              <div class="enq12__padding">
                <div class="mb3 mb2_sp">
                  <figure class="center">
                    <img
                    data-src="<?php echo $img_url ?>/enquete/report12/q4-c__logo.png"
                    data-retina="<?php echo $img_url ?>/enquete/report12/q4-c__logo@2x.png"
                    alt="CARAETO　ロゴ"
                    style="max-width:232px;"
                    class="u-img__max center u-only__pc"
                    >
                    <img
                    data-src="<?php echo $img_url ?>/enquete/report12/q4-c__logo-sp.png"
                    data-retina="<?php echo $img_url ?>/enquete/report12/q4-c__logo-sp@2x.png"
                    alt="CARAETO　ロゴ"
                    style="max-width:220px;"
                    class="u-img__max center u-only__sp"
                    >
                  </figure>
                </div>
                <div class="enq12__padding mb3 mb2_sp">
                  <p>「CARAETO（カラエト）」は、ダンボール1つ分の荷物から預けられる収納サービス。預け入れの手続きはカンタン！アプリから申し込んで、箱に詰めて送るだけ。「着ない服がクローゼットからはみ出る…」「思い出の品が溜まる一方！」などのお悩みをお持ちの方は、CARAETOを使ってお部屋をスッキリさせちゃいましょう♪</p>
                </div>
                <div class="mb3">
                  <figure class="center">
                    <img
                    data-src="<?php echo $img_url ?>/enquete/report12/q4-c__cnt.png"
                    data-retina="<?php echo $img_url ?>/enquete/report12/q4-c__cnt@2x.png"
                    alt="CARAETOサービスの5つのポイント"
                    style="max-width:620px;"
                    class="u-img__max center u-only__pc"
                    >
                    <img
                    data-src="<?php echo $img_url ?>/enquete/report12/q4-c__cnt-sp.png"
                    data-retina="<?php echo $img_url ?>/enquete/report12/q4-c__cnt-sp@2x.png"
                    alt="CARAETOサービスの5つのポイント"
                    style="max-width:540px;"
                    class="u-img__max center u-only__sp"
                    >
                  </figure>
                </div>
                <div class="center mb3 mb2_sp enq12__padding">
                  <a href="<?php echo $base_url ?>/gift/article/trunk.php" class="enq12__linkbtn">
                    <figure class="center">
                      <img
                      data-src="<?php echo $img_url ?>/enquete/report12/q4-c__btn.png"
                      data-retina="<?php echo $img_url ?>/enquete/report12/q4-c__btn@2x.png"
                      alt="詳しくはこちら"
                      style="max-width:304px;"
                      class="u-img__max center u-only__pc"
                      >
                      <img
                      data-src="<?php echo $img_url ?>/enquete/report12/q4-c__btn-sp.png"
                      data-retina="<?php echo $img_url ?>/enquete/report12/q4-c__btn-sp@2x.png"
                      alt="詳しくはこちら"
                      style="max-width:401px;"
                      class="u-img__max center u-only__sp"
                      >
                    </figure>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="enq12bg__yellow pt3 pb3">
          <div class="mb2 mb0_sp enq12__padding">
            <figure>
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q5.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q5@2x.png"
              alt="最も片付けが行き届いていないと思う場所はどこですか？"
              style="max-width:704px;"
              class="u-only__pc u-img__max center"
              >
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q5-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q5-sp@2x.png"
              alt="最も片付けが行き届いていないと思う場所はどこですか？"
              style="max-width:585px;"
              class="u-only__sp u-img__max center"
              >
            </figure>
          </div>
          <div class="enq12__padding mb3 mb2_sp">
            <p>「クローゼット」が29％で最多という結果に！とりあえずクローゼットに放り込んで、整頓は後回し！という方が多いのかも？<br>また、この質問では間取り別の傾向の違いも見られました。部屋数が少ない間取りでは「リビング」の片付けが行き届かず、部屋数が多い間取りでは「納戸」と「キッチン」の片付けが行き届かない傾向となっています。比較的プライベートな空間として使われる寝室よりも、家族全員が集うリビングは、ものが溢れやすい様子がうかがえます。</p>
          </div>
        </div>
      </section>
      <section>
        <div class="enq12bg__green mt0 pb3 pt3 mb4 mb2_sp">
          <div class="mb2 mb0_sp enq12__padding">
            <figure>
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q6.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q6@2x.png"
              alt="収納に関する情報で知りたいことや、専門家に聞きたいことは何ですか？"
              style="max-width:704px;"
              class="u-only__pc u-img__max center"
              >
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q6-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q6-sp@2x.png"
              alt="収納に関する情報で知りたいことや、専門家に聞きたいことは何ですか？"
              style="max-width:585px;"
              class="u-only__sp u-img__max center"
              >
            </figure>
          </div>
          <div class="enq12__padding">
            <p>
            ほぼ同数のツートップが、「ものの捨て方」と「ものの整理方法」でした。両方聞いておきたい！という方も多いでしょう。ほか、「散らからない部屋づくりの方法」も32％と、たくさんの方が挙げていた項目です。<br>実は…これらの悩みには、既に専門家が回答済み！ブランシエラクラブの人気コンテンツ「何でか、部屋が片付かない。」では、「片付け上手の捨て方は？」「おもちゃやゲームの収納方法は？」「きれいな部屋を維持するには？」…など、みなさまが抱くさまざまな収納の疑問や悩みに、整理収納アドバイザーがお答えしています。たくさんの方にご覧いただいているので、ぜひ参考にしてくださいね！
            </p>
          </div>
          <div class="enq12__box enq12box enq12__padding mb3 mb2_sp">
            <div class="enq12box__row">
              <figure class="mb3 mb2_sp">
                <img
                data-src="<?php echo $img_url ?>/enquete/report12/q6-c__ttl.png"
                data-retina="<?php echo $img_url ?>/enquete/report12/q6-c__ttl@2x.png"
                alt="収納アドバイザー監修のお役立ちメソッドが満載！ブランシエラクラブには収納に役立つコンテンツも！"
                style="max-width:645px; margin-top:-18%;"
                class="u-only__pc u-img__max center"
                >
                <img
                data-src="<?php echo $img_url ?>/enquete/report12/q6-c__ttl-sp.png"
                data-retina="<?php echo $img_url ?>/enquete/report12/q6-c__ttl-sp@2x.png"
                alt="収納アドバイザー監修のお役立ちメソッドが満載！ブランシエラクラブには収納に役立つコンテンツも！"
                style="max-width:584px; margin-top:-22%;"
                class="u-only__sp u-img__max center"
                >
              </figure>
              <div class="enq12__padding">
                <div class="mb3 mb2_sp">
                  <figure class="center">
                    <img
                    data-src="<?php echo $img_url ?>/enquete/report12/q6-c__logo.png"
                    data-retina="<?php echo $img_url ?>/enquete/report12/q6-c__logo@2x.png"
                    alt="何でか部屋が片付かない　ロゴ"
                    style="max-width:236px;"
                    class="u-img__max center u-only__pc"
                    >
                    <img
                    data-src="<?php echo $img_url ?>/enquete/report12/q6-c__logo-sp.png"
                    data-retina="<?php echo $img_url ?>/enquete/report12/q6-c__logo-sp@2x.png"
                    alt="何でか部屋が片付かない　ロゴ"
                    style="max-width:240px;"
                    class="u-img__max center u-only__sp"
                    >
                  </figure>
                </div>
                <div class="enq12__padding mb3 mb2_sp">
                  <p>すぐ部屋が散らかってしまう方必見！部屋の片付けが苦手な家族が、片付けのノウハウを学びながら憧れの部屋を目指すマンガコラムです。物語の中には、整理収納アドバイザー監修のお役立ち情報が盛りだくさん！<br>今後、便利な収納グッズの紹介や部屋別の収納術も更新される…かも⁉ぜひご覧ください♪</p>
                </div>
                <div class="mb3">
                  <figure class="center">
                    <img
                    data-src="<?php echo $img_url ?>/enquete/report12/q6-c__ttl_s@2x.png"
                    data-retina="<?php echo $img_url ?>/enquete/report12/q6-c__ttl_s@2x.png"
                    alt="今回のお悩みツートップを解決する記事はこちら！"
                    style="max-width:625px;"
                    class="u-img__max center u-only__pc"
                    >
                    <img
                    data-src="<?php echo $img_url ?>/enquete/report12/q6-c__ttl_s-sp@2x.png"
                    data-retina="<?php echo $img_url ?>/enquete/report12/q6-c__ttl_s-sp@2x.png"
                    alt="今回のお悩みツートップを解決する記事はこちら！"
                    style="max-width:540px;"
                    class="u-img__max center u-only__sp"
                    >
                  </figure>
                </div>
                <div class="u-column__2">
                  <div class="u-column__item mb2_sp">
                    <div class="mb2">
                      <figure class="center">
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report12/q6-c__left.png"
                        data-retina="<?php echo $img_url ?>/enquete/report12/q6-c__left@2x.png"
                        alt="ものの捨て方なら…"
                        style="max-width:301px;"
                        class="u-img__max center u-only__pc"
                        >
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report12/q6-c__left-sp.png"
                        data-retina="<?php echo $img_url ?>/enquete/report12/q6-c__left-sp@2x.png"
                        alt="ものの捨て方なら…"
                        style="max-width:538px;"
                        class="u-img__max center u-only__sp"
                        >
                      </figure>
                    </div>
                    <div>
                      <a href="<?php echo $base_url ?>/magazine/article/comic-tidy03.php" class="enq12__linkbtn">
                        <figure class="center">
                          <img
                          data-src="<?php echo $img_url ?>/enquete/report12/q6-c__left-btn.png"
                          data-retina="<?php echo $img_url ?>/enquete/report12/q6-c__left-btn@2x.png"
                          alt="詳しくはこちら"
                          style="max-width:301px;"
                          class="u-img__max center u-only__pc"
                          >
                          <img
                          data-src="<?php echo $img_url ?>/enquete/report12/q6-c__left-btn-sp.png"
                          data-retina="<?php echo $img_url ?>/enquete/report12/q6-c__left-btn-sp@2x.png"
                          alt="詳しくはこちら"
                          style="max-width:538px;"
                          class="u-img__max center u-only__sp"
                          >
                        </figure>
                      </a>
                    </div>
                  </div>
                  <div class="u-column__item">
                    <div class="mb2">
                      <figure class="center">
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report12/q6-c__right.png"
                        data-retina="<?php echo $img_url ?>/enquete/report12/q6-c__right@2x.png"
                        alt="ものの整理方法なら…"
                        style="max-width:301px;"
                        class="u-img__max center u-only__pc"
                        >
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report12/q6-c__right-sp.png"
                        data-retina="<?php echo $img_url ?>/enquete/report12/q6-c__right-sp@2x.png"
                        alt="ものの整理方法なら…"
                        style="max-width:538px;"
                        class="u-img__max center u-only__sp"
                        >
                      </figure>
                    </div>
                    <div>
                      <a href="<?php echo $base_url ?>/magazine/article/comic-tidy02.php" class="enq12__linkbtn">
                        <figure class="center">
                          <img
                          data-src="<?php echo $img_url ?>/enquete/report12/q6-c__right-btn.png"
                          data-retina="<?php echo $img_url ?>/enquete/report12/q6-c__right-btn@2x.png"
                          alt="詳しくはこちら"
                          style="max-width:301px;"
                          class="u-img__max center u-only__pc"
                          >
                          <img
                          data-src="<?php echo $img_url ?>/enquete/report12/q6-c__right-btn-sp.png"
                          data-retina="<?php echo $img_url ?>/enquete/report12/q6-c__right-btn-sp@2x.png"
                          alt="詳しくはこちら"
                          style="max-width:538px;"
                          class="u-img__max center u-only__sp"
                          >
                        </figure>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb2 enq12__padding">
            <figure class="center">
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q6-c__end@2x.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q6-c__end@2x.png"
              alt="貴重なご意見ありがとうございました！"
              style="max-width:625px;"
              class="u-img__max center u-only__pc"
              >
              <img
              data-src="<?php echo $img_url ?>/enquete/report12/q6-c__end-sp.png"
              data-retina="<?php echo $img_url ?>/enquete/report12/q6-c__end-sp@2x.png"
              alt="貴重なご意見ありがとうございました！"
              style="max-width:540px;"
              class="u-img__max center u-only__sp"
              >
            </figure>
          </div>
        </div>
      </section>
      <section>
        <div class="mb5 mb3_sp">
          <figure class="center">
            <img
            data-src="<?php echo $img_url ?>/enquete/report12/summary@2x.png"
            data-retina="<?php echo $img_url ?>/enquete/report12/summary@2x.png"
            alt="収納」というテーマでお送りした第12回アンケートレポート、いかがでしたか？どの結果を見ても、収納はくらしの悩みのタネであることがわかりました。快適な住まいづくりとは切り離せない収納。今後もブランシエラクラブでは、みなさまの力になれるような、収納にまつわる情報を多数発信していきたいと考えています！ぜひ楽しみにお待ちください！"
            style="max-width:698px;"
            class="u-img__max center u-only__pc"
            >
            <img
            data-src="<?php echo $img_url ?>/enquete/report12/summary-sp.png"
            data-retina="<?php echo $img_url ?>/enquete/report12/summary-sp@2x.png"
            alt="収納」というテーマでお送りした第12回アンケートレポート、いかがでしたか？どの結果を見ても、収納はくらしの悩みのタネであることがわかりました。快適な住まいづくりとは切り離せない収納。今後もブランシエラクラブでは、みなさまの力になれるような、収納にまつわる情報を多数発信していきたいと考えています！ぜひ楽しみにお待ちください！"
            style="max-width:634px;"
            class="u-img__max center u-only__sp"
            >
          </figure>

        </div>
        <div class="mb3 mb2_sp">
          <figure class="center">
            <img
            data-src="<?php echo $img_url ?>/enquete/report12/mailmag-bnr@2x.png"
            data-retina="<?php echo $img_url ?>/enquete/report12/mailmag-bnr@2x.png"
            alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！"
            style="max-width:500px;"
            class="u-img__max center u-only__pc"
            >
            <img
            data-src="<?php echo $img_url ?>/enquete/report12/mailmag-bnr-sp.png"
            data-retina="<?php echo $img_url ?>/enquete/report12/mailmag-bnr-sp@2x.png"
            alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！"
            style="max-width:544px;"
            class="u-img__max center u-only__sp"
            >
          </figure>

        </div>
        <div>
          <figure class="center">
            <img
            data-src="<?php echo $img_url ?>/enquete/report12/next@2x.png"
            data-retina="<?php echo $img_url ?>/enquete/report12/next@2x.png"
            alt="次回の第１3回アンケートは2020年1月23日（木）から実施予定です。みなさまのご回答をお待ちしております！"
            style="max-width:490px;"
            class="u-img__max center u-only__pc"
            >
            <img
            data-src="<?php echo $img_url ?>/enquete/report12/next-sp@2x.png"
            data-retina="<?php echo $img_url ?>/enquete/report12/next-sp@2x.png"
            alt="次回の第１3回アンケートは2020年1月23日（木）から実施予定です。みなさまのご回答をお待ちしております！"
            style="max-width:501px;"
            class="u-img__max center u-only__sp"
            >
          </figure>

        </div>
      </section>
    </div>
    <?php include ($inc_path."/lib/inc/page/_enquete/__back_num.php") ?>
  </article>
</main>

  <?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
  <?php  include ($inc_path."/lib/inc/footer.php"); ?>
  <?php  include ($inc_path."/lib/inc/foot.php"); ?>
