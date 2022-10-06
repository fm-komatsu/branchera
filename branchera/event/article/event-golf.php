<?php
//base
include ("../../function.php");
$content = get_id_data('4007');
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
        <h2 class="u-ttl__m">一般案内に先駆けて、会員さまに先行ご案内</h2>
        <p>
          <img data-src="../../lib/img/event/golf/main.jpg"
          data-retina="../../lib/img/event/golf/main-sp@2x.jpg"
          alt="公益社団法人 日本プロゴルフ協会ティーチングプロＡ級会員による『ミニ講座＆レッスン！！ パッティング編』"
          class="u-img__max">
        </p>
        <h5 class="u-ttl__s">テーマ「感育～感性を育てる上達術～」</h5>
        <p>楽しくなければゴルフじゃない！！楽しければスコアもついてくる！</p>
        <p>パッティングで最も必要とされるグリーンの傾斜を読む（予想する）「感性」。
          <br>その感性を育てるために考案した「感育」について、自宅や練習場で出来る画期的な「基礎感育」なる練習法を練習グッズと共にご紹介します。</p>
          <p class="mb4">（グループに分かれてレッスンします。もちろん直接指導あり！）</p>

          <h4 class="u-ttl__m">「ミニ講座＆レッスン！！ パッティング編」イベント概要</h4>
          <div class="u-list__dl_table">
            <dl>
              <dt>[開催日時]</dt>
              <dd>2月27日（月）17：00～、19：00～（各回90分程度）</dd>
            </dl>
            <dl>
              <dt>[講師]</dt>
              <dd>2015PGAティーチングプロアワード 最優秀賞受賞　松本哲也プロ</dd>
            </dl>
            <dl>
              <dt>[開催場所]</dt>
              <dd>ビステーション新橋　<br>〒105-0004 東京都港区新橋2丁目20番15号 新橋駅前ビル1号館6階<br><a href="http://www.bistation.jp/access.html" target="_blank" rel="nofollow" class="a-arrow">地図はこちら</a></dd>
            </dl>
            <dl>
              <dt>[参加人数]</dt>
              <dd>各回15名さま。<br>ご予約は先着順とさせていただきます。<br>予定人数を超えた場合も、レッスンのご見学は可能です。</dd>
            </dl>
            <dl>
              <dt>[参加特典]</dt>
              <dd>1,000スマイルポイントプレゼント＋長谷工オリジナルブレンド米「たなかみ米」2合プレゼント</dd>
            </dl>
            <dl>
              <dt>[申し込み]</dt>
              <dd>長谷工IDマイページにログインしてお申し込みください。<br>17時の回、19時の回どちらか一方のみのご応募となります。</dd>
            </dl>
            <dl>
              <dt>[予約受付期間]</dt>
              <dd>2017年2月26日（日）まで</dd>
            </dl>
            <dl>
              <dt>[ご注意事項]</dt>
              <dd>
                <p style="margin-top:0;">1.パターの用意はございますが、ご自身のパターでのレッスンをご希望の方はご持参いただいても構いません</p>
                <p>2.当イベントは会員さまに先行してご案内しておりますが、当サイト以外からも参加申し込みを受け付けいたします。<br>先着順のため、当サイトでのご予約が完了しても、定員を超えた場合は、イベントにご参加いただけないことがございますので予めご了承ください。<br>その際は、定員を超えた旨のご連絡メールを事務局よりお送りさせていただきます。</p>
              </dd>
            </dl>
          </div>
          <div class="assist">
            <h5>講師紹介</h5>
            <div class="flex between">
              <div class="w70 mb1">
                <p><strong>松本哲也</strong><br>愛媛県宇和島市出身　1971年生まれ<br>所属：ガーデン藤ヶ谷ゴルフレンジ<br>2015年PGAティーチングプロアワード 最優秀賞受賞</p>
                <div class="w90_sp center u-only__sp">
                  <img src="../../lib/img/event/golf/img01-sp.jpg">
                </div>
                <p>公益社団法人 日本プロゴルフ協会が2008年から実施している、レッスン指導に関する独自のアイディアや理論において、特に優れたティーチングプロを表彰する制度である、「PGAティーチングプロアワード」において2015年度に最優秀賞を受賞。<br>柏市のガーデン藤ヶ谷ゴルフレンジでのレッスンの傍ら、数々のゴルフ雑誌にも独自の理論が取り上げられ、現在は、夕刊フジにてレッスン記事の連載、また、日本文芸社ゴルフレッスンコミックにて、「哲先生のGOLFラボ」という漫画の連載も始まった。<br>限り無く奥深い魅力ある 「GOLF」 を、ゴルフ業界、或いはゴルフ以外の各種業界ともタッグを組みながら、より多くの方々に発信し伝えてきたいと考えている。</p>
              </div>
              <div class="w30 u-only__pc">
                <img src="../../lib/img/event/golf/img01.jpg">
              </div>
            </div>
          </div>
          <label class="u-btn_end center mt2" >当イベントは終了いたしました</label>
        </section>
        <section class="section wrapper">
          <h4 class="u-ttl__m">「長谷工住まいの大相談会～長谷工スーパーウィーク」概要</h4>
          <div class="u-list__dl_table">
            <dl>
              <dt>[期　　間]</dt>
              <dd>2月27日（月）～3月4日（土）<br>平日17:00～21:00　土曜11:00～18:00</dd>
            </dl>
            <dl>
              <dt>[開催場所]</dt>
              <dd>ビステーション新橋　<br>〒105-0004 東京都港区新橋2丁目20番15号 新橋駅前ビル1号館6階<br><a href="http://www.bistation.jp/access.html" target="_blank" rel="nofollow" class="a-arrow">地図はこちら</a></dd>
            </dl>
            <dl>
              <dt>[開催概要]</dt>
              <dd>【住まいのこと、なんでもご相談】<br>新築分譲マンション・中古マンション・リノベーションマンションの購入、賃貸マンションの入居、有料老人ホーム・高齢者住宅の入居、マンション専有部・戸建のリフォーム、家具・インテリア、大規模修繕、分譲マンションの管理など。その他、日替わりで特別セミナー・イベントを開催。</dd>
            </dl>
          </div>
          <p class="bt wide blue w50 center"><a style="cursor:default;">イベントは終了いたしました</a></p>
        </section>
      </div>

    </article>
  </main>
  <?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
  <?php  include ($inc_path."/lib/inc/footer.php"); ?>
  <?php  include ($inc_path."/lib/inc/foot.php"); ?>
