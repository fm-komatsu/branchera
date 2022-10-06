<?php
//base
include ("../../function.php");
$content = get_id_data('4081');
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

        <h2 class="u-ttl__l first-of-type">PGAゴルフラウンドレッスン in 房総CC イベントレポート</h2>

        <div class="u-list__dl_table mb3">
          <dl>
            <dt>イベント内容</dt>
            <dd>プロ1名/参加者3名の1組4名でラウンドレッスン</dd>
          </dl>
          <dl>
          <dt>開催日</dt>
            <dd>2019年11月23日（土）</dd>
          </dl>
          <dl>
            <dt>場所</dt>
            <dd>房総カントリークラブ東コース</dd>
          </dl>
        </div>
        <div class="u-assist">
          <p>秋も一段と深まった11月。千葉県にある房総カントリークラブ東コースで、ラウンドレッスン会を開催いたしました。<br>11名の会員さまにご参加いただき、 4グループに分かれてレッスンを実施。今回は、槇岡プロ・勝山プロ・新田プロ・平塚プロの4名に指導に当たっていただきました。 ティーチングプロ1名につき会員さま3名という、少人数でアットホームな雰囲気の中での、じっくりと充実したレッスンです！<br>当日はあいにくの雨により、18ホールの予定が9ホールに短縮…。しかし、練習場での打撃レッスン・ラウンドレッスン・各グループごとにプロと昼食＆反省会という、ギュギュッと濃縮された時間を過ごすことができました。
          </p>
        </div>

        <div class="flex between mb3">
          <div class="w50">
            <img
            src="<?php echo $img_url; ?>/event/report-golf16/img__1@2x.jpg"
            style="max-width:400px;"
            class="u-img__max">
            <p>まずは準備運動！しっかり体をほぐしていきます。</p>
          </div>
          <div class="w50 mb2_sp">
            <img
            src="<?php echo $img_url; ?>/event/report-golf16/img__2@2x.jpg"
            style="max-width:400px;"
            class="u-img__max">
            <p>先に練習場でフォームのチェック。プロからのアドバイスを受け、即コースで実践！！</p>
          </div>
        </div>

        <div class="flex between mb3">
          <div class="w50">
            <img
            src="<?php echo $img_url; ?>/event/report-golf16/img__3@2x.jpg"
            style="max-width:400px;"
            class="u-img__max">
            <p>実際にパッティングして、その場で指導。グリーンの読み方なども教えていただきました。</p>
          </div>
          <div class="w50 mb2_sp">
            <img
            src="<?php echo $img_url; ?>/event/report-golf16/img__4@2x.jpg"
            style="max-width:400px;"
            class="u-img__max">
            <p>話しやすい少人数制だから、移動中の会話にも花が咲きます！</p>
          </div>
        </div>

        <h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

        <div class="event_comment">
          <div class="balloon mb single">
            <div class="inner">
              <div>
                <p>あいにくの雨で、ラウンドもハーフになってしまいましたが、貴重な体験をさせていただきありがとうございました。今後のゴルフに生かしていきたいと思います。</p>
                <h5 class="h5_event">埼玉県在住</h5>
              </div>
            </div>
          </div>
          <div class="balloon mb single">
            <div class="inner">
              <div>
                <p>知らない方とのラウンドに不安で参加したのですが、とても楽しい１日でした。プロのレッスンはとても有意義でしたし、食事の時のお話も楽しい一時でした。参加できて本当によかったです。<br>ありがとうございました。</p>
                <h5 class="h5_event">千葉県在住</h5>
              </div>
            </div>
          </div>
          <div class="balloon mb single">
            <div class="inner">
              <div>
                <p>雨のため、練習場での約2時間のレッスンとハーフラウンドでのラウンドレッスンに内容が変更となりました。事務局の方の柔軟な対応に感謝しています。練習場でのレッスンは大変有意義でしたし、ハーフラウンドに短縮は残念でしたが致し方がなかったと思います。大満足の1日でした。</p>
                <h5 class="h5_event">神奈川県在住</h5>
              </div>
            </div>
          </div>
          <div class="balloon mb single">
            <div class="inner">
              <div>
                <p>あいにくの天候でしたが、当日は機転をきかせた運営で、たいへん楽しく過ごさせて頂きました。練習場で充分レッスンして頂いたお陰でラウンドでのレッスンがより充実したものとなりました</p>
                <h5 class="h5_event">東京都在住</h5>
              </div>
            </div>
          </div>
        </div>


        <div class="u-assist center" style="line-height:2;">
          <b class="u-font__bold">ここでは一部の掲載となりますが、たくさんのご意見をいただき、ありがとうございました！<br>ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。<br>最新情報はメルマガでお知らせしますので、ぜひチェックしてくださいね！</b>
        </div>
      </section>
    </div>

  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
