<?php
//base
include ("../../function.php");
$content = get_id_data('4077');
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
    include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
    ?>
    <div class="main__wrapper">

      <section class="section wrapper">

        <h2 class="u-ttl__l first-of-type">PGAスペシャルプロアマ大会2019 in 六甲 イベントレポート</h2>

        <div class="u-list__dl_table mb3">
          <dl>
            <dt>イベント内容</dt>
            <dd>プロ1名/参加者3名の1組4名でラウンド</dd>
          </dl>
          <dl>
          <dt>開催日</dt>
            <dd>2019年9月4日（水）</dd>
          </dl>
          <dl>
            <dt>場所</dt>
            <dd>兵庫県三木市／太平洋クラブ六甲コース</dd>
          </dl>
        </div>
        <div class="u-assist">
          <p>2019年9月4日（水）太平洋クラブ六甲コースにて、プロと一緒にラウンドできるプロアマ大会が開催されました。ご当選された12名のブランシエラクラブ会員さまが参加。また、PGAからは髙橋勝成プロ・水巻善典プロ・杉原敏一プロ・山添昌良プロの4名のシニアプロが参加されました。</p>
          <p>プロと一緒ということで、最初は少し緊張気味な会員のみなさまでしたが、ラウンド前には一緒にパターレッスンをするなど、徐々に和気あいあいとした雰囲気で楽しまれていました。</p>
        </div>

        <div class="flex between mb3">
          <div class="w50">
            <img
            src="<?php echo $img_url; ?>/event/report-golf15/img__1@2x.jpg"
            style="max-width:400px;"
            class="u-img__max">
            <p>ツアーで活躍されているプロからの熱心なアドバイスに耳を傾けるみなさま。</p>
          </div>
          <div class="w50 mb2_sp">
            <img
            src="<?php echo $img_url; ?>/event/report-golf15/img__2@2x.jpg"
            style="max-width:400px;"
            class="u-img__max">
            <p>プロに見守られながらのティーショット！<br>フィニッシュも決まってナイスショット！！</p>
          </div>
        </div>

        <div class="flex between mb3">
          <div class="w50">
            <img
            src="<?php echo $img_url; ?>/event/report-golf15/img__3@2x.jpg"
            style="max-width:400px;"
            class="u-img__max">
            <p>すぐに生かせる具体的なアドバイスがもらえるのもプロアマ大会の特権♪</p>
          </div>
          <div class="w50 mb2_sp">
            <img
            src="<?php echo $img_url; ?>/event/report-golf15/img__4@2x.jpg"
            style="max-width:400px;"
            class="u-img__max">
            <p>プロと一緒に写真撮影も！<br>きれいな青空とみなさまの笑顔が素敵です。</p>
          </div>
        </div>

        <h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

        <div class="event_comment">
          <div class="balloon balloon_widthmax mb single">
            <div class="inner">
              <div>
                <p>滅多に無いチャンスなので参加させていただきました。杉原プロはラウンド中も、その後も熱心に指導をしてくださり感謝しています。</p>
                <h5 class="h5_event">（大阪府在住 Tさま）</h5>
              </div>
            </div>
          </div>
          <div class="balloon balloon_widthmax mb single">
            <div class="inner">
              <div>
                <p>大変楽しかったです。水巻プロからは、懇切丁寧、的確なアドバイスをいただきました。お蔭様で多くの財産を得ることができました。ご一緒した方も気持ちの良い方ばかりでした。</p>
                <h5 class="h5_event">（大阪府在住 Kさま）</h5>
              </div>
            </div>
          </div>
          <div class="balloon balloon_widthmax mb single">
            <div class="inner">
              <div>
                <p>当日は、お天気にも恵まれ、とても和やかな雰囲気の中でプロとラウンドさせて頂き、まるで夢の様です。1ショットごとに優しく丁寧にご指導頂き、また一緒に回らせて頂きました。メンバーの方から冗談を交えての会話もあり、本当に楽しいひと時を過ごさせて頂きました。最高のコンディションのゴルフコースでのプレイは一生忘れることの出来ない想い出となりました。</p>
                <h5 class="h5_event">（兵庫県在住 Mさま）</h5>
              </div>
            </div>
          </div>
          <div class="balloon balloon_widthmax mb single">
            <div class="inner">
              <div>
                <p>著名なシニアプロとラウンドできる貴重な機会をありがとうございました。くじ引きでの組み合わせも朝からとてもたのしめました。山添プロには、ラウンド中積極的にアドバイスをいただき、たくさんの改善点をいただきましたので、早速練習場で一つ一つ克服していきたいと思います。</p>
                <h5 class="h5_event">（兵庫県在住 Tさま）</h5>
              </div>
            </div>
          </div>
          <div class="balloon balloon_widthmax mb single">
            <div class="inner">
              <div>
                <p>髙橋勝成プロと回らせていただきました。プロの本番さながらのショット、コース戦略を間近で見ることができ、大変勉強になりました。試合観戦では味わえない体験ができました。それだけでもいい経験ができたと思っていたのですが、一つ一つのショットに対して、アドバイスをいただき、うまく行った時にはナイスショット！と声をかけていただき、感激しました！</p>
                <h5 class="h5_event">（兵庫県在住 Uさま）</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="mb4 mb2_sp">
          <p>※一部抜粋してご紹介させていただきました。<br>上記の他にも、たくさんの感想をお寄せいただいております。<br>ありがとうございました！</p>
        </div>


        <div class="u-assist center" style="line-height:2;">
          <strong>ぜひ、次のイベントの開催をお楽しみに！</strong>
        </div>
      </section>
    </div>

  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
