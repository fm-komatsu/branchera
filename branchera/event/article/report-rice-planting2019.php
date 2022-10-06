<?php
//base
include ("../../function.php");
$content = get_id_data('4071');
$pageTtl = $content['title'];

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
  <article class="main__row">
    <?php
      $panAry[] = array("/event/" ,"イベント・キャンペーン");
      include ($inc_path."/lib/inc/pan.php");
      ?>
    <?php
      include ($inc_path."/lib/inc/page/_event/__main-header.php");
    ?>
    <div class="main__wrapper">
      <section class="section wrapper">
        <div class="section__inner">
          <div class="center main-view mb4 mb2_sp">
            <figure>
              <img data-src="<?php echo($img_url); ?>/event/report-rice-planting2019/main-v.jpg" data-retina="<?php echo($img_url); ?>/event/report-rice-planting2019/main-v@2x.jpg" alt="<?php echo $pageTtl?>｜メインビジュアル" class="u-img__max">
            </figure>
          </div>
          <div class="section__padding mb4">
            <div class="u-list__dl_table-event__overview">
              <dl class="u-list__dl_table-event__overview_ls">
                <dt>開催日</dt>
                <dd>2019年6月8日（土）</dd>
              </dl>
              <dl class="u-list__dl_table-event__overview_ls">
                <dt>開催場所</dt>
                <dd>長谷工あんしんデリ 大津農場・信楽陶苑たぬき村</dd>
              </dl>
            </div>
            <p class="mb4">第3回目の開催となる田植え体験と、信楽焼き陶芸体験。長谷工グループ「長谷工あんしんデリ」がご提供する、おいしくて安心なお米『たなかみ米』の田植えと、滋賀県甲賀市信楽を中心に作られる陶器・『信楽焼き』の陶芸体験が一度に楽しめる人気イベントです。<br>今回も大好評のうちに終了したこのイベントの様子を、詳しくご紹介します！</p>
            <div class="u-assist">
              <div class="flex between">
                <div class="w25 mb2">
                  <img src="<?php echo($img_url); ?>/event/report-rice-planting2019/logo-t.png" srcset="<?php echo($img_url); ?>/event/report-rice-planting2019/logo-t.png 1x,
                    <?php echo($img_url); ?>/event/report-rice-planting2019/logo-t@2x.png 2x" class="u-img__max tanakami-logo" style="max-width:126px; max-height: 126px;" alt="たなかみのお米　ロゴ" />
                </div>
                <div class="w75">
                  <h5 class="u-ttl__s">株式会社 長谷工あんしんデリ</h5>
                  <p>土と水に恵まれた田上(たなかみ)の田んぼで、農薬や化学肥料を低減した、安心でおいしいお米をお届けしています。一粒一粒の旨味をしっかり味わえる「たなかみ米」、ぜひ一度お試しください。</p>
                  <a href="https://www.haseko.co.jp/ha-delicious/" target="_blank" rel="nofollow" class="u-btn">長谷工あんしんデリ公式サイトはこちら</a>
                </div>
              </div>
            </div>
          </div>
          <section>
            <div class="mb3">
              <figure>
                <img data-src="<?php echo($img_url); ?>/event/report-rice-planting2019/img__01.jpg" data-retina="<?php echo($img_url); ?>/event/report-rice-planting2019/img__01@2x.jpg" alt="<?php echo $pageTtl?>｜出発から田植えまで" class="u-img__max u-only__pc">
                <img data-src="<?php echo($img_url); ?>/event/report-rice-planting2019/img__01-sp.jpg" data-retina="<?php echo($img_url); ?>/event/report-rice-planting2019/img__01-sp@2x.jpg" alt="<?php echo $pageTtl?>｜出発から田植えまで" class="u-img__max u-only__sp">
              </figure>
            </div>
          </section>
          <section>
            <div class="u-assist">
              <div class="flex between">
                <div class="w25 mb2" style="align-self : center">
                  <img src="<?php echo($img_url); ?>/event/report-rice-planting2019/tanuki-mura-logo.png" srcset="<?php echo($img_url); ?>/event/report-rice-planting2019/tanuki-mura-logo.png 1x,
                  <?php echo($img_url); ?>/event/report-rice-planting2019/tanuki-mura-logo@2x.png 2x" class="u-img__max tanakami-logo" style="max-width:112px; max-height: 31px;" alt="信楽陶苑たぬき村　ロゴ" />
                </div>
                <div class="w75">
                  <h5 class="u-ttl__s">信楽陶苑たぬき村</h5>
                  <p>1万匹の狸のお出迎えが圧巻の「信楽陶苑たぬき村」。<br>陶芸体験は、手びねりや絵つけを楽しむことができます。お食事処や、信楽焼きやご当地のお土産が購入できるショップもあり、家族みんなで楽しめるスポットです。</p>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="mb3 mb0_sp">
              <figure>
                <img data-src="<?php echo($img_url); ?>/event/report-rice-planting2019/img__02.jpg" data-retina="<?php echo($img_url); ?>/event/report-rice-planting2019/img__02@2x.jpg" alt="<?php echo $pageTtl?>｜出発から田植えまで" class="u-img__max u-only__pc">
                <img data-src="<?php echo($img_url); ?>/event/report-rice-planting2019/img__02-sp.jpg" data-retina="<?php echo($img_url); ?>/event/report-rice-planting2019/img__02-sp@2x.jpg" alt="<?php echo $pageTtl?>｜出発から田植えまで" class="u-img__max u-only__sp">
              </figure>
            </div>
          </section>
          <section>
            <div class="center mb3">
              <figure class="center">
                <img data-src="<?php echo($img_url); ?>/event/report-rice-planting2019/comment.jpg" data-retina="<?php echo($img_url); ?>/event/report-rice-planting2019/comment@2x.jpg" alt="<?php echo $pageTtl?>｜毎日何気なく食べているお米ですが、その生産の過程を見る機会はなかなかないものです。今回のイベントも和気あいあいと、ひとつひとつの工程に驚いたり、感心したりしながら、楽しく田植えをすることができました。食への感謝と共に、歴史ある信楽焼きへの知識も深まった本イベント。来年の開催時も、ぜひたくさんの会員さまに参加していただけますと幸いです。ご参加、お待ちしています！" class="u-img__max u-only__pc center" style="max-width:681px;">
                <img data-src="<?php echo($img_url); ?>/event/report-rice-planting2019/comment-sp.jpg" data-retina="<?php echo($img_url); ?>/event/report-rice-planting2019/comment-sp@2x.jpg" alt="<?php echo $pageTtl?>｜毎日何気なく食べているお米ですが、その生産の過程を見る機会はなかなかないものです。今回のイベントも和気あいあいと、ひとつひとつの工程に驚いたり、感心したりしながら、楽しく田植えをすることができました。食への感謝と共に、歴史ある信楽焼きへの知識も深まった本イベント。来年の開催時も、ぜひたくさんの会員さまに参加していただけますと幸いです。ご参加、お待ちしています！" class="u-img__max u-only__sp center">
              </figure>
            </div>
          </section>
          <section>
            <div class="tanakami2019-voice">
              <div class="tanakami2019-voice__row">
                <div class="tanakami2019-voice__ttl center mb3">
                  <h3>
                    <figure>
                      <img
                        data-src="<?php echo($img_url); ?>/event/report-rice-planting2019/voice.png"
                        data-retina="<?php echo($img_url); ?>/event/report-rice-planting2019/voice@2x.png"
                        alt="<?php echo $pageTtl?>｜参加者のみなさまからの声"
                        class="u-img__max u-only__pc center"
                        style="max-width:390px;"
                        >
                      <img
                        data-src="<?php echo($img_url); ?>/event/report-rice-planting2019/voice-sp.png"
                        data-retina="<?php echo($img_url); ?>/event/report-rice-planting2019/voice-sp@2x.png"
                        alt="<?php echo $pageTtl?>｜参加者のみなさまからの声"
                        class="u-img__max u-only__sp center"
                        style="max-width:518px;"
                        >
                    </figure>
                  </h3>
                </div>
                <div class="event_comment">
                  <div class="balloon balloon_maxborder-tanakami2019 mb family-man">
                    <div class="inner-noborder tanakami">
                      <div>
                        <p><span class="u-marker">楽しかったですし、良い思い出になりました。</span>大人にとっては思った以上に重労働で、たった１列田植えを体験しただけで、足が筋肉痛になってしまい驚きました。最初、小学1年生の息子は、裸足で田んぼに入ることを嫌がっていましたが、入ってみると、<span class="u-marker">「泥んこ遊びみたい」と隣の列も植えるくらい楽しんでいました。</span>信楽での手びねり体験は、息子もなんとかおじいちゃん用の湯呑を作ることができて大満足です。到着が楽しみです！</p>
                      </div>
                    </div>
                  </div>
                  <div class="balloon balloon_maxborder-r-tanakami2019 mb family-woman_r">
                    <div class="inner-noborder_r tanakami">
                      <div>
                        <p>田植えの場所が、気持ち良くて、のんびりぼ～っとしても気持ちの良いところだなと後からでも思います。<span class="u-marker">子どもが「田植えをまだする！」と言うくらい一生懸命植えていて、良い経験をさせてあげられたなと思います。</span>お昼ご飯もお肉がとても美味しくて、満足でした。信楽焼き体験も子どもが真剣な眼差しで、色を考えながら作っているのを見るのも嬉しかったですし、親もはまってしまい、凝って塗ってしまう自分がいました。</p>
                      </div>
                    </div>
                  </div>
                  <div class="balloon balloon_maxborder-tanakami2019 mb family-man">
                    <div class="inner-noborder tanakami">
                      <div>
                        <p>慌ただしさもなく、ゆっくりとイベント&お食事を堪能させていただきました。小学生の子どもはもちろんの事、幼児も大人も<span class="u-marker">全員が楽しめる素敵なイベントでした！</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="balloon balloon_maxborder-r-tanakami2019 mb family-woman_r">
                    <div class="inner-noborder_r tanakami">
                      <div>
                        <p><span class="u-marker">田植えは長靴で歩くのが難しくて、夢中になってしまいました。</span><br>当日の天気が暑かったら、そこまで必死になっていなかったかもしれませんが…。他の人にも勧めたいです。</p>
                      </div>
                    </div>
                  </div>
                  <div class="balloon balloon_maxborder-tanakami2019 mb family-man">
                    <div class="inner-noborder tanakami">
                      <div>
                        <p>とても楽しかったです！田植えも陶芸も大変貴重な経験になりました。田植えでは農業の大変さを感じることができたし、<span class="u-marker">陶芸では久しぶりにモノづくりに集中して、子どもの頃に戻ったような感覚でした</span>(*^^*)<br class="u-only__pc">本当にとても素敵な思い出になりました。ありがとうございます☆</p>
                      </div>
                    </div>
                  </div>
                  <div class="balloon balloon_maxborder-r-tanakami2019 mb family-woman_r">
                    <div class="inner-noborder_r tanakami">
                      <div>
                        <p>充実した内容でとても楽しめました。長谷工あんしんデリのスタッフの方が気さくに話しかけてくれて、<span class="u-marker">田植えやお米について詳しく説明をしていただいたので、興味深く体験することができました。</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="balloon balloon_maxborder-tanakami2019 mb family-man">
                    <div class="inner-noborder tanakami">
                      <div>
                        <p>小学生2人と参加しましたが、普段食べているお米がどのように作られているのかを、短時間で理解できるように説明していただき、とても勉強になりました。田植え体験では、最初は泥や虫を嫌がっていた子どもたちが、いつのまにか黙々と手植えをし、<span class="u-marker">最後には「もっと植えたいー！」と言っていたのが、とても印象的でした。</span>陶芸体験では、手びねりに夢中になってしまい、あっという間に時間が過ぎてしまいました。</p>
                      </div>
                    </div>
                  </div>
                  <div class="balloon balloon_maxborder-r-tanakami2019 mb family-woman_r">
                    <div class="inner-noborder_r tanakami">
                      <div>
                        <p>御社のイベントには初めて参加させていただきましたが、とても濃い（質の良い）イベントであると思いました。<span class="u-marker">体験もそうですが、昼食も豪華で、本当に無料で参加して良いのかな？とも思いました。</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
    </div>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?> <?php  include ($inc_path."/lib/inc/foot.php"); ?>
