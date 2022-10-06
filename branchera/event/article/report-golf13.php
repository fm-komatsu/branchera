<?php
//base
include ("../../function.php");
$content = get_id_data('4072');
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

        <h2 class="u-ttl__l first-of-type">PGAスペシャルプロアマ大会2019 in 笠間 イベントレポート</h2>

        <div class="u-list__dl_table mb3">
          <dl>
            <dt>イベント内容</dt>
            <dd>プロ1名/参加者4名の1組5名でラウンド「スクランブル方式」採用</dd>
          </dl>
          <dl>
          <dt>開催日</dt>
            <dd>2019年6月12日（水）</dd>
          </dl>
          <dl>
            <dt>場所</dt>
            <dd>茨城県　スターツ笠間ゴルフ倶楽部</dd>
          </dl>
        </div>
        <div class="u-assist">
          <p>シニアトッププロと一緒に1ラウンドプレーできる「スペシャルプロアマ大会」を開催いたしました。<br>今回はスクランブル方式採用で、ゴルフを始めてまだ日の浅い方からゴルフ歴30年超えのベテランの方まで、経験を問わず充実したラウンドとなりました。<br>初めてのスクランブル方式に、「初めてやってみたけど、こんな楽しみ方があるんだ」「スクランブルだと、チーム一体となってスコアメイクできるのが楽しい」と、とても良い評価をいただきました！</p>
        </div>

        <div class="flex between mb3">
          <div class="w50">
            <img
            src="<?php echo $img_url; ?>/event/report-golf13/img__1@2x.jpg"
            style="max-width:400px;"
            class="u-img__max">
            <p>シニアプロが見ている前で緊張のティーショット。ナイスショッーーート！</p>
          </div>
          <div class="w50 mb2_sp">
            <img
            src="<?php echo $img_url; ?>/event/report-golf13/img__2@2x.jpg"
            style="max-width:400px;"
            class="u-img__max">
            <p>シニアプロに重心の取り方を丁寧にご指導いただき即実践！</p>
          </div>
        </div>

        <div class="flex between mb3">
          <div class="w50">
            <img
            src="<?php echo $img_url; ?>/event/report-golf13/img__3@2x.jpg"
            style="max-width:400px;"
            class="u-img__max">
            <p>シニアプロのプレーを間近で見ることができ、思わず歓声が出ることも！参加者さまにとって貴重な体験となりました。</p>
          </div>
          <div class="w50 mb2_sp">
            <img
            src="<?php echo $img_url; ?>/event/report-golf13/img__4@2x.jpg"
            style="max-width:400px;"
            class="u-img__max">
            <p>絶好のコンディションの中、参加者のみなさま、大満足のプロアマ大会となりました。</p>
          </div>
        </div>

        <section>
          <h3 class="u-ttl__m">今回のプロアマ大会で採用した「スクランブル方式」とは？</h3>
          <div class="u-assist">
              <p>すべてのホールにおいて、プロを含めたチーム全員の中で最も良いボールポジションを選択しながらゲームを進める方法です。</p>
              <h4 class="u-ttl__s mb0 mt2">①ティーショット</h4>
              <p>プロを含めた全員が同じティーイングエリアより行ないます。</p>
              <h4 class="u-ttl__s mb0 mt2">②セカンドショット以降</h4>
              <p>プロを含めた全員の中で最も良い条件のボールをチームで決めて選択します。（選択しなかったボールは全部拾います）<br>選択したボールポジションで１クラブ以内でホールに近づかないで全員が順番にショットを行ない、以降、グリーンに乗るまで同じ方法を繰り返します。</p>
              <h4 class="u-ttl__s mb0 mt2">③グリーン上</h4>
            <p>選択したボールの横にマークをしてその位置から順番にパッティングを行ないます。<br>カップインした時点でチームスコアが確定します。</p>
          </div>
        </section>

        <h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

        <div class="event_comment">
          <div class="balloon mb man">
            <div class="inner">
              <div>
                <p>プロの方と楽しくラウンドでき、それとプロのスーパーショット（チップインイーグル）を目の前で見れて最高でした。手嶋プロはとても気さくな方でファンなりました。</p>
                <h5 class="h5_event">東京都在住 男性</h5>
              </div>
            </div>
          </div>
          <div class="balloon mb man">
            <div class="inner">
              <div>
                <p>生で初めてプロの打つところを見ました。ゴルフ歴３年の私にとっては二度とない体験ができました。本当に楽しく過ごせました。</p>
                <h5 class="h5_event">東京都在住 男性</h5>
              </div>
            </div>
          </div>
          <div class="balloon mb man">
            <div class="inner">
              <div>
                <p>ありがとうございました。これまで経験したことのない有意義な１日でした。<br>プロの技術は流石ですね。特に一緒にラウンドした清水プロのレッスンには大感謝です。</p>
                <h5 class="h5_event">千葉県在住 男性</h5>
              </div>
            </div>
          </div>
          <div class="balloon mb man">
            <div class="inner">
              <div>
                <p>親子で参加出来て、子供共々とても楽しくラウンドできました。また、一緒に回ったプロもきさくに色々と教えてくださり、とてもためになりました。</p>
                <h5 class="h5_event">千葉県在住 男性</h5>
              </div>
            </div>
          </div>
          <div class="balloon mb man">
            <div class="inner">
              <div>
                <p>とても楽しかったです。一緒にラウンドしたプロとも、もう一組の方とも会話が弾みました。また、トーナメント前のラウンドであり、コースセッティングやプロからのアドバイスを頂き、貴重な体験ができました。</p>
                <h5 class="h5_event">神奈川県在住 男性</h5>
              </div>
            </div>
          </div>
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
