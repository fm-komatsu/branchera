<?php
//base
include ("../../function.php");
$content = get_id_data('11020');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article page-enquete-design__2 enq10";

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

    <div class="main__wrapper enq07">

      <section class="main__item">
        <h2 class="u-ttl__l">満足度・意識調査2019</h2>
        <div class="u-assist_enq_low07">
          回答期間　　　：　2019年4月1日（月）～2019年4月14日（日）<br>
          回答者数　　　：　計2,632名<br>

        </div>

        <figure>
          <img
          data-src="<?php echo $img_url ?>/enquete/report10/main-v.png"
          data-retina="<?php echo $img_url ?>/enquete/report10/main-v@2x.png"
          alt="ブランシエラクラブ みんなの住まいや暮らし　結果発表"
          style="max-width:740px;"
          class="u-img__max">
        </figure>

      </section>

      <div class="enq10__main">

        <section class="enq10__sec01 enq10sec01">
          <div class="enq10sec01__row">
            <h2 class="u-ttl mb3">
              <img
              data-src="<?php echo $img_url ?>/enquete/report10/q1.png"
              data-retina="<?php echo $img_url ?>/enquete/report10/q1@2x.png"
              alt="お料理動画を“毎週”更新していることを知っていますか？"
              style="max-width:740px;"
              class="u-img__max center"
              >
            </h2>
            <div class="enq10__cnt">
              <figure class="u-ttl mb3 center">
                <img
                data-src="<?php echo $img_url ?>/enquete/report10/a1.png"
                data-retina="<?php echo $img_url ?>/enquete/report10/a1@2x.png"
                alt="「お料理動画を“毎週”更新していることを知っていますか？」回答｜はい：21.0％、いいえ：52.0％、掲載を知らない：27.0％"
                style="max-width:740px;"
                class="u-img__max"
                >
              </figure>
              <div class="enq10sec01__box sec01box">
                <div class="sec01box__row">
                  <p>ブランシエラクラブのお料理動画では、忙しいときも手軽に作れる簡単レシピや、基本のお料理テクニックをご紹介しています。基本をおさらいしたい、レパートリーを増やしたい、時短テクニックを知りたい…など、お料理にまつわるさまざまなニーズに応えるコンテンツです！お料理がお好きな方も初心者の方も、ぜひチェックしてみてくださいね。</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="enq10__sec02 enq10sec02">
          <div class="enq10sec02__row">
            <h2 class="u-ttl mb3">
              <img
              data-src="<?php echo $img_url ?>/enquete/report10/q2.png"
              data-retina="<?php echo $img_url ?>/enquete/report10/q2@2x.png"
              alt="作ってみたいお料理やレシピは？"
              style="max-width:740px;"
              class="u-img__max center"
              >
            </h2>
            <div class="enq10__cnt">
              <figure class="u-ttl mb3 center">
                <img
                data-src="<?php echo $img_url ?>/enquete/report10/a2.png"
                data-retina="<?php echo $img_url ?>/enquete/report10/a2@2x.png"
                alt="「作ってみたいお料理やレシピは？」回答｜簡単料理：15.6％、時短レシピ：12.5％、節約：5.2％、カレー：2.8％、野菜料理：2.2％、お弁当レシピ：2.1％"
                style="max-width:740px;"
                class="u-img__max"
                >
              </figure>
              <div class="enq10sec02__box sec02box">
                <div class="sec02box__row">
                  <p>トップ３の「簡単」「時短」「節約」というワードから、手軽に作ることのできるレシピに関心が高いということを感じました。2019年6月から、料理のコンテンツをリニューアルしたのをご存じですか？フライパンひとつで作ることができる時短＆簡単レシピを中心に展開していく予定です。オリジナルレシピと料理の基本情報を、毎週水曜日に更新していますので、毎日の料理にぜひお役立てください。</p>
                </div>
              </div>
            </div>
            <div class="sec02boxother">
              <div>
                <h3 class="u-ttl">
                  <img
                  data-src="<?php echo $img_url ?>/enquete/report10/a2__ttl.png"
                  data-retina="<?php echo $img_url ?>/enquete/report10/a2__ttl@2x.png"
                  alt="お料理コンテンツがリニューアル"
                  style="max-width:700px;"
                  class="u-img__max center"
                  >
                </h3>
                <div class="sec02boxother__row">
                  <div class="uchino">
                    <div class="uchino__row">
                      <figure class="center">
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report10/a2__01_ex.png"
                        data-retina="<?php echo $img_url ?>/enquete/report10/a2__01_ex@2x.png"
                        alt="うちのご飯は世界イチ"
                        style="max-width:620px;"
                        class="u-img__max center"
                        >
                      </figure>

                      <div class="sec02boxother__ex">
                        <p>家にある食材を炒めて、トマトジュースで煮るだけ。フライパンひとつでできる、簡単キーマカレーレシピをご紹介します。調理時間はたったの15分。忙しい日の夜ご飯にピッタリ！7月17日（水）公開予定です。お楽しみに！</p>
                      </div>

                      <div class="center cnt-btn">
                        <a href="<?php echo $base_url?>/magazine/index_comic02.php#recipe">
                        <img
                          data-src="<?php echo $img_url ?>/enquete/report10/a2__01_btn.png"
                          data-retina="<?php echo $img_url ?>/enquete/report10/a2__01_btn@2x.png"
                          alt="その他のレシピはこちら"
                          style="max-width:442px;"
                          class="u-img__max center"
                          >
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="imasara">
                    <div class="imasara__row">
                      <img
                      data-src="<?php echo $img_url ?>/enquete/report10/a2__02_ex.png"
                      data-retina="<?php echo $img_url ?>/enquete/report10/a2__02_ex@2x.png"
                      alt="今さら聞けない料理のアレコレ"
                      style="max-width:620px;"
                      class="u-img__max center"
                      >
                      <div class="sec02boxother__ex">
                        <p>家にある食材を炒めて、トマトジュースで煮るだけ。フライパンひとつでできる、簡単キーマカレーレシピをご紹介します。調理時間はたったの15分。忙しい日の夜ご飯にピッタリ！7月17日（水）公開予定です。お楽しみに！</p>
                      </div>
                      <div class="center cnt-btn">
                        <a href="<?php echo $base_url?>/magazine/index_comic02.php#technique">
                        <img
                          data-src="<?php echo $img_url ?>/enquete/report10/a2__02_btn.png"
                          data-retina="<?php echo $img_url ?>/enquete/report10/a2__02_btn@2x.png"
                          alt="その他の料理の基本はこちら"
                          style="max-width:442px;"
                          class="u-img__max center"
                          >
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="enq10__sec03 enq10sec03">
          <div class="enq10sec03__row">
            <h2 class="u-ttl mb3">
              <img
              data-src="<?php echo $img_url ?>/enquete/report10/q3.png"
              data-retina="<?php echo $img_url ?>/enquete/report10/q3@2x.png"
              alt="イベントに応募したことがありますか？"
              style="max-width:740px;"
              class="u-img__max center"
              >
            </h2>
            <div class="enq10__cnt">
              <figure class="u-ttl mb3 center">
                <img
                data-src="<?php echo $img_url ?>/enquete/report10/a3.png"
                data-retina="<?php echo $img_url ?>/enquete/report10/a3@2x.png"
                alt="「イベントに応募したことがありますか？」回答｜はい：17.0％、いいえ：45.0％、開催していることを知らない：38.0％"
                style="max-width:740px;"
                class="u-img__max"
                >
              </figure>
              <div class="enq10sec01__box sec01box">
                <div class="sec01box__row">
                  <p>ブランシエラクラブでは、子どもから大人まで楽しめるイベントを随時企画中！イベントの模様や参加された方の感想はレポートとして公開しています。まだイベントに応募されたことがない方は、まずはレポートをご覧いただき、楽しいイベントの雰囲気を感じてみてください。イベントへの最新情報はメールマガジンでご案内しています！みなさまのご応募・ご参加をお待ちしております。</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="enq10__sec04 enq10sec04">
          <div class="enq10sec04__row">
            <h2 class="u-ttl mb4">
              <img
              data-src="<?php echo $img_url ?>/enquete/report10/q4.png"
              data-retina="<?php echo $img_url ?>/enquete/report10/q4@2x.png"
              alt="どのようなイベントを開催してほしいですか？"
              style="max-width:740px;"
              class="u-img__max center"
              >
            </h2>
            <div class="enq10__cnt">
              <figure class="u-ttl mb4 center">
                <img
                data-src="<?php echo $img_url ?>/enquete/report10/a4.png"
                data-retina="<?php echo $img_url ?>/enquete/report10/a4@2x.png"
                alt="「どのようなイベントを開催してほしいですか？」回答｜子どもと楽しめるイベント：7.4％、料理イベント：5.1％、体験イベント：2.7％、リフォームイベント：1.9％、工場イベント：1.8％"
                style="max-width:740px;"
                class="u-img__max"
                >
              </figure>
              <div class="enq10sec04__box sec04box mb2">
                <div class="sec04box__row">
                  <p>子どもと楽しめるイベント、料理イベントを希望する声が多く届きました。<br>これまでも、さまざまなイベントを企画してきたブランシエラクラブ。ご要望の多かった子どもと楽しめるイベントも、過去に多数開催しています。<br>今回はその中から、特に反響のあったイベントをご紹介！イベントの様子が分かるレポートも掲載していますので、チェックしてくださいね！</p>
                </div>
              </div>
            </div>
            <div class="sec02boxother">
              <div>
                <h3 class="u-ttl">
                  <img
                  data-src="<?php echo $img_url ?>/enquete/report10/a4__01_ttl.png"
                  data-retina="<?php echo $img_url ?>/enquete/report10/a4__01_ttl@2x.png"
                  alt="ブランシエラクラブではさまざまな無料イベントを開催しています！"
                  style="max-width:698px;"
                  class="u-img__max center"
                  >
                </h3>
                <div class="sec02boxother__row">
                  <div class="enq10sec04a4">
                    <div class="enq10sec04a4__row">
                      <figure class="center">
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report10/a4__01_img.png"
                        data-retina="<?php echo $img_url ?>/enquete/report10/a4__01_img@2x.png"
                        alt="長谷工マンションミュージアム見学イベント、田植え体験・陶芸体験イベント、スナッグゴルフ親子体験イベント、JAL工場見学イベント、イベント情報は毎週木曜日のメールマガジンでお届けしています"
                        style="max-width:620px;"
                        class="u-img__max center"
                        >
                      </figure>
                      <div class="sec02boxother__ex">
                        <p>イベント応募やイベントレポートの紹介は、毎週木曜日配信のメールマガジンでお届けしています。紹介しているイベントにご興味がありましたら、お気軽にご応募ください。</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="enq10__sec05 enq10sec05">
          <div class="enq10sec05__row">
            <h2 class="u-ttl mb3">
              <img
              data-src="<?php echo $img_url ?>/enquete/report10/q5.png"
              data-retina="<?php echo $img_url ?>/enquete/report10/q5@2x.png"
              alt="住まいレージを利用したことがありますか？"
              style="max-width:740px;"
              class="u-img__max center"
              >
            </h2>
            <div class="enq10__cnt">
              <figure class="u-ttl mb3 center">
                <img
                data-src="<?php echo $img_url ?>/enquete/report10/a5.png"
                data-retina="<?php echo $img_url ?>/enquete/report10/a5@2x.png"
                alt="「住まいレージを利用したことがありますか？」回答｜はい：35.0％、いいえ：57.0％、サービス自体を知らない：8.0％"
                style="max-width:740px;"
                class="u-img__max"
                >
              </figure>
              <div class="enq10sec01__box sec01box">
                <div class="sec01box__row">
                  <p>住まいレージ自体の認知度は9割を超えているものの、もっとご利用いただけるように住まいレージを充実していく必要を感じました。なかでも「交換商品を増やしてほしい！」という声が多く寄せられました。<br>住まいレージの交換商品の中でも、人気なのは毎月商品が変わる抽選商品です。毎月月初のメールマガジンで商品をご紹介しています。100スマイルでご応募できますので、まだ参加されたことのない方も、ぜひ一度チャレンジしてみてください！</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="enq10__sec06 enq10sec06">
          <div class="enq10sec06__row">
            <h2 class="u-ttl mb3">
              <img
              data-src="<?php echo $img_url ?>/enquete/report10/q6.png"
              data-retina="<?php echo $img_url ?>/enquete/report10/q6@2x.png"
              alt="住まいレージに欲しいサービスは？期待したいことは？"
              style="max-width:740px;"
              class="u-img__max center"
              >
            </h2>
            <div class="enq10__cnt">
              <figure class="u-ttl mb3 center">
                <img
                data-src="<?php echo $img_url ?>/enquete/report10/a6.png"
                data-retina="<?php echo $img_url ?>/enquete/report10/a6@2x.png"
                alt="「住まいレージに欲しいサービスは？期待したいことは？」回答｜交換商品を増やしてほしい：23.4％、割引サービス：10.3％、商品券・ギフト券交換：3.9％、家電交換：2.0％、食品交換：1.8"
                style="max-width:740px;"
                class="u-img__max"
                >
              </figure>
              <div class="enq10sec06__box sec06box">
                <div class="sec06box__row">
                  <p>「交換商品を増やしてほしい！」という声が多く寄せられました。みなさまからいただいたご意見は、今後追加するサービスの参考にさせていただきます。ご期待ください！</p>
                </div>
              </div>
            </div>
            <div class="sec02boxother">
              <div>
                <h3 class="u-ttl">
                  <img
                  data-src="<?php echo $img_url ?>/enquete/report10/a6__01_ttl.png"
                  data-retina="<?php echo $img_url ?>/enquete/report10/a6__01_ttl@2x.png"
                  alt="ブランシエラクラブではさまざまな無料イベントを開催しています！"
                  style="max-width:698px;"
                  class="u-img__max center"
                  >
                </h3>
                <div class="sec02boxother__row">
                  <div class="enq10sec06a6">
                    <div class="enq10sec06a6__row">
                      <img
                      data-src="<?php echo $img_url ?>/enquete/report10/a6__01_img.png"
                      data-retina="<?php echo $img_url ?>/enquete/report10/a6__01_img@2x.png"
                      alt=""
                      style="max-width:620px;"
                      class="u-img__max center"
                      >
                    </div>
                  </div>
                  <div class="cnt-btn center">
                    <a href="<?php echo $base_url?>/smile/use-smileage.php">
                    <img
                      data-src="<?php echo $img_url ?>/enquete/report10/a6__01_btn.png"
                      data-retina="<?php echo $img_url ?>/enquete/report10/a6__01_btn@2x.png"
                      alt="詳しくはこちら"
                      style="max-width:442px;"
                      class="u-img__max center"
                      >
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="enq10__sec07 enq10sec07">
          <div class="enq10sec07__row">
            <h2 class="u-ttl mb3">
              <img
              data-src="<?php echo $img_url ?>/enquete/report10/q7.png"
              data-retina="<?php echo $img_url ?>/enquete/report10/q7@2x.png"
              alt="住まいレージに欲しいサービスは？期待したいことは？"
              style="max-width:740px;"
              class="u-img__max center"
              >
            </h2>
            <div class="enq10__cnt">
              <figure class="u-ttl mb3 center">
                <img
                data-src="<?php echo $img_url ?>/enquete/report10/a7.png"
                data-retina="<?php echo $img_url ?>/enquete/report10/a7@2x.png"
                alt="「住まいレージに欲しいサービスは？期待したいことは？」回答｜交換商品を増やしてほしい：23.4％、割引サービス：10.3％、商品券・ギフト券交換：3.9％、家電交換：2.0％、食品交換：1.8"
                style="max-width:740px;"
                class="u-img__max"
                >
              </figure>
              <div class="enq10sec01__box sec01box">
                <div class="sec01box__row">
                  <p>2018年10月にサービスを開始した「ClubOff by HASEKO」。スタートから半年で、半数以上の方に認識をいただいているという結果になりました。今回は、具体的にどのようなサービスをご用意しているのかを簡単にご紹介！<br>ちなみに、下記でご紹介しているサービスはほんの一例。ほかにもさまざまなサービスをご用意しています。詳しくはブランシエラクラブサイトに掲載中ですので、ぜひお気軽にご利用ください。</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section  class="enq10__sec07sub enq10sec07sub">
          <div class="enq10sec07sub__row">
          <div class="sec02boxother">
            <div>
              <h3 class="u-ttl">
                <img
                data-src="<?php echo $img_url ?>/enquete/report10/a7__01_ttl.png"
                data-retina="<?php echo $img_url ?>/enquete/report10/a7__01_ttl@2x.png"
                alt=""
                style="max-width:698px;"
                class="u-img__max center"
                >
              </h3>
            <div class="sec02boxother__row mb3">
              <div class="enq10sec06a6">
                <div class="enq10sec06a6__row">
                <p class="mb3">「 ClubOff by HASEKO 」は、20万カ所以上でご利用可能な会員限定の優待サービスです。日々の暮らしに役立つサービスから、旅行やレストランなど、休日の特別な時間の充実にお使いいただけます。クローズドマーケットのため、一般には公開されない特別な優待サービスが満載です！</p>
                  <img
                  data-src="<?php echo $img_url ?>/enquete/report10/a7__01_img.png"
                  data-retina="<?php echo $img_url ?>/enquete/report10/a7__01_img@2x.png"
                  alt=""
                  style="max-width:698px;"
                  class="u-img__max center"
                  >
                  <img
                  data-src="<?php echo $img_url ?>/enquete/report10/a7__01_ex.png"
                  data-retina="<?php echo $img_url ?>/enquete/report10/a7__01_ex@2x.png"
                  alt=""
                  style="max-width:700px;"
                  class="u-img__max center"
                  >
                  <p>毎月25日は、ホームページ限定・先着順で、500円プランやその他さまざまな格安プランを数量限定でご用意しています。 「 ClubOff by HASEKO 」の情報は、毎週木曜日配信のメールマガジンでお届けしていますので、ぜひ、チェックしてください。<br>※25日が土・日・祝日の場合は、次の営業日となります</p>
                  <img
                  data-src="<?php echo $img_url ?>/enquete/report10/a7__01_ex02.png"
                  data-retina="<?php echo $img_url ?>/enquete/report10/a7__01_ex02@2x.png"
                  alt="うちのご飯は世界イチ"
                  style="max-width:700px;"
                  class="u-img__max center"
                  >
                </div>
              </div>
            </div>
            </div>
          </div>
          <h2 class="u-ttl mb3">
            <img
            data-src="<?php echo $img_url ?>/enquete/report10/q8.png"
            data-retina="<?php echo $img_url ?>/enquete/report10/q8@2x.png"
            alt="ClubOff  by HASEKOでほしいサービスはありますか？"
            style="max-width:740px;"
            class="u-img__max center"
            >
          </h2>
          <div class="enq10__cnt">
            <figure class="u-ttl mb3 center">
              <img
              data-src="<?php echo $img_url ?>/enquete/report10/a8.png"
              data-retina="<?php echo $img_url ?>/enquete/report10/a8@2x.png"
              alt="「ClubOff  by HASEKOでほしいサービスはありますか？」回答｜割引券割引サービス、プレゼント、イベント"
              style="max-width:740px;"
              class="u-img__max"
              >
            </figure>
          </div>
          <div class="enq10sec07__box sec07box mb3">
            <div class="sec07box__row">
              <p>「ClubOff by HASEKO」では、ホテルや旅館にお得な価格で宿泊できるプランや、身近なファミリーレストランで使えるクーポンなど、20万カ所以上で使用可能のサービスをご用意しております。まだご利用いただいていない方も、ブランシエラクラブの会員さまはどなたでも無料で使えますので、ぜひご活用ください！</p>
            </div>
          </div>
          <div class="cnt-btn center">
            <a href="<?php echo $base_url?>/gift/article/cluboff.php">
            <img
              data-src="<?php echo $img_url ?>/enquete/report10/a8__btn.png"
              data-retina="<?php echo $img_url ?>/enquete/report10/a8__btn@2x.png"
              alt="詳しくはこちら"
              style="max-width:442px;"
              class="u-img__max center"
              >
            </a>
          </div>
          </div>
        </section>

        <section class="enq10__sec09 enq10sec09">
          <div class="enq10sec09__row">
            <h2 class="u-ttl mb3">
              <img
              data-src="<?php echo $img_url ?>/enquete/report10/q9.png"
              data-retina="<?php echo $img_url ?>/enquete/report10/q9@2x.png"
              alt="住まいレージに欲しいサービスは？期待したいことは？"
              style="max-width:740px;"
              class="u-img__max center"
              >
            </h2>
            <div class="enq10__cnt">
              <figure class="u-ttl mb3 center">
                <img
                data-src="<?php echo $img_url ?>/enquete/report10/a9.png"
                data-retina="<?php echo $img_url ?>/enquete/report10/a9@2x.png"
                alt=""
                style="max-width:740px;"
                class="u-img__max"
                >
              </figure>
              <div class="enq10sec01__box sec01box">
                <div class="sec01box__row">
                  <p>ブランシエラクラブでは、登録しているだけでご利用いただけるお得な優待サービスを多数ご用意しております！たとえば、家具購入やお引越しの優待サービスをはじめ、演劇の特別鑑賞チケット情報、ブルーノートグループのミュージックチャージ料割引などなど。これからも、更に優待サービスを充実させていく予定です。毎週木曜配信のメールマガジンでもご紹介しておりますので、メールマガジンでのチェックをお忘れなく！</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="enq10__sec09sub enq10sec09">
          <div class="enq10sec09sub__row">
            <div class="enq10sec09a9">
              <div class="enq10sec09a9__row">
                <div class="sec02boxother">
                  <div>

                    <img
                      data-src="<?php echo $img_url ?>/enquete/report10/a9__01_ttl.png"
                      data-retina="<?php echo $img_url ?>/enquete/report10/a9__01_ttl@2x.png"
                      alt=""
                      style="max-width:698px;"
                      class="u-img__max center"
                    >
                    <div class="sec02boxother__row">
                      <div class="enq10sec09a9__ex">
                        <img
                        data-src="<?php echo $img_url ?>/enquete/report10/a9__01_img.png"
                        data-retina="<?php echo $img_url ?>/enquete/report10/a9__01_img@2x.png"
                        alt=""
                        style="max-width:700px;"
                        class="u-img__max center mb3"
                        >
                      </div>
                      <div class="cnt-btn center">
                        <a href="<?php echo $base_url ?>/gift/">
                          <img
                          data-src="<?php echo $img_url ?>/enquete/report10/a9__01_btn.png"
                          data-retina="<?php echo $img_url ?>/enquete/report10/a9__01_btn@2x.png"
                          alt=""
                          style="max-width:421px;"
                          class="u-img__max center"
                          >
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="enq10__sec10 enq10sec10">
          <div class="enq10sec10__row">
            <h2 class="u-ttl mb4">
              <img
              data-src="<?php echo $img_url ?>/enquete/report10/q10.png"
              data-retina="<?php echo $img_url ?>/enquete/report10/q10@2x.png"
              alt=""
              style="max-width:740px;"
              class="u-img__max center"
              >
            </h2>
            <div class="enq10__cnt">
              <figure class="u-ttl mb4 center">
                <img
                data-src="<?php echo $img_url ?>/enquete/report10/a10.png"
                data-retina="<?php echo $img_url ?>/enquete/report10/a10@2x.png"
                alt=""
                style="max-width:740px;"
                class="u-img__max u-only__pc"
                >
                <img
                data-src="<?php echo $img_url ?>/enquete/report10/a10-sp.png"
                data-retina="<?php echo $img_url ?>/enquete/report10/a10-sp@2x.png"
                alt=""
                style="max-width:428px;"
                class="u-img__max u-only__sp"
                >
              </figure>
              <div class="enq10sec01__box sec01box">
                <div class="sec01box__row">
                  <p>最も興味があるコンテンツは、片付けテクニックをご紹介する「何でか、部屋が片付かない。」という結果になりました。部屋の片付けが苦手な家族が、片付けのノウハウを学んで憧れの部屋を目指す姿がマンガで描かれています。ストーリーを楽しみながら、整理収納アドバイザー監修のお役立ちメソッドを学ぶことができますよ。まだ読んだことがない方は、ぜひご覧ください！</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="enq10__sec11 enq10sec11">
          <div class="enq10sec11__row">
            <h2 class="u-ttl mb4">
              <img
              data-src="<?php echo $img_url ?>/enquete/report10/q11.png"
              data-retina="<?php echo $img_url ?>/enquete/report10/q11@2x.png"
              alt="どのようなイベントを開催してほしいですか？"
              style="max-width:740px;"
              class="u-img__max center"
              >
            </h2>
            <div class="enq10__cnt">
              <figure class="u-ttl mb4 center">
                <img
                data-src="<?php echo $img_url ?>/enquete/report10/a11.png"
                data-retina="<?php echo $img_url ?>/enquete/report10/a11@2x.png"
                alt="「どのようなイベントを開催してほしいですか？」回答｜子どもと楽しめるイベント：7.4％、料理イベント：5.1％、体験イベント：2.7％、リフォームイベント：1.9％、工場イベント：1.8％"
                style="max-width:740px;"
                class="u-img__max"
                >
              </figure>
              <div class="enq10sec11__box sec11box">
                <div class="sec11box__row">
                  <p>一番読んでみたいジャンル・興味のあるジャンルは、お料理ということが分かりました。お料理の情報は、「うちのご飯は世界イチ」「今さら聞けない料理のアレコレ」で毎週新記事を更新中です。今後も簡単レシピやさまざまな料理の基本をアップしていく予定ですので、お楽しみに！</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="enq10__sec12 enq10sec12 mb3">
          <div class="enq10sec12__row">
            <h2 class="u-ttl mb4">
              <img
              data-src="<?php echo $img_url ?>/enquete/report10/q12.png"
              data-retina="<?php echo $img_url ?>/enquete/report10/q12@2x.png"
              alt=""
              style="max-width:740px;"
              class="u-img__max center"
              >
            </h2>

          <div class="balloon_base">
            <div class="balloon balloon_maxborder mb man">
              <div class="inner-border balloon-bg">
                <div>
                  <p>長谷工のCMが好きで、最近見かけないのが残念。建築作業中の人形のＣＭは動きがいいし、タラタタッタタ～の音声も印象に残るのでぜひ見たいです。</p>
                </div>
              </div>
            </div>
            <div class="balloon balloon_maxborder mb woman_r3">
              <div class="inner_r">
                <div>
                  <p>長谷工グループのCMは、<a href="https://haseko-group.jp/" target="_blank">こちら</a>に掲載しています。<br>ぜひご覧ください！</p>
                </div>
              </div>
            </div>
            <div class="balloon balloon_maxborder mb woman_r">
              <div class="inner_r">
                <div>
                  <p>料理も参考になりますが、子供にも良いおやつとかもあったら見たいです。</p>
                </div>
              </div>
            </div>
            <div class="balloon balloon_maxborder mb man3">
              <div class="inner-border3 balloon-bg">
                <div>
                  <p>ブランシエラクラブの<a href="<?php echo $base_url?>/magazine/index_comic02.php">お料理コンテンツ</a>では、<br class="u-only__pc">今後スイーツレシピもご紹介予定です。お楽しみに！</p>
                </div>
              </div>
            </div>

            <div class="balloon balloon_maxborder mb man2">
              <div class="inner-border2 balloon-bg">
                <div>
                  <p>リフォームやリノベーションについて、施工例や見積額などが知りたいです。</p>
                </div>
              </div>
            </div>
            <div class="balloon balloon_maxborder mb woman_r3">
              <div class="inner_r">
                <div>
                  <p>グループ会社である<a href="https://www.haseko.co.jp/hrf/reform/jirei/mansion/" target="_blank">長谷工リフォームのサイト</a>には、さまざまなリフォームの事例が掲載されています。ぜひご参考にしてください。</p>
                </div>
              </div>
            </div>
            <div class="balloon balloon_maxborder mb woman_r2">
              <div class="inner_r">
                <div>
                  <p>老人ホームの紹介など、介護系のサービスはあるのか知りたいです。</p>
                </div>
              </div>
            </div>
            <div class="balloon balloon_maxborder mb man3">
              <div class="inner-border3 balloon-bg">
                <div>
                  <p>長谷工グループには、高齢期の住まいと暮らしを提供する、<a href="https://www.haseko-senior.co.jp/" target="_blank">長谷工シニアホールディングス</a>があり、高齢者住宅や在宅介護サービスのご紹介をしています。また、ブランシエラクラブ の優待サービスには、<a href="<?php echo $base_url?>/gift/article/nursing.php">「無料体験宿泊」</a>もありますので、チェックしてみてください。</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <figure class="center">
              <img
                data-src="<?php echo $img_url ?>/enquete/report10/end.png"
                data-retina="<?php echo $img_url ?>/enquete/report10/end@2x.png"
                alt=""
                style="max-width:740px;"
                class="u-img__max center"
                >
            </figure>
          </div>
          </div>
        </section>
        <div>
            <figure class="center mb3">
              <img
                data-src="<?php echo $img_url ?>/enquete/report10/footer.png"
                data-retina="<?php echo $img_url ?>/enquete/report10/footer@2x.png"
                alt=""
                style="max-width:698px;"
                class="u-img__max center u-only__pc"
                >
                <img
                data-src="<?php echo $img_url ?>/enquete/report10/footer-sp.png"
                data-retina="<?php echo $img_url ?>/enquete/report10/footer-sp@2x.png"
                alt=""
                style="max-width:626px;"
                class="u-img__max center u-only__sp"
                >
            </figure>
            <figure class="center">
              <img
                data-src="<?php echo $img_url ?>/enquete/report10/next.png"
                data-retina="<?php echo $img_url ?>/enquete/report10/next@2x.png"
                alt=""
                style="max-width:478px;"
                class="u-img__max center"
                >
            </figure>
          </div>
        </div>
        </div>
        <?php include ($inc_path."/lib/inc/page/_enquete/__back_num.php") ?>
    </article>
  </main>

  <?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
  <?php  include ($inc_path."/lib/inc/footer.php"); ?>
  <?php  include ($inc_path."/lib/inc/foot.php"); ?>
