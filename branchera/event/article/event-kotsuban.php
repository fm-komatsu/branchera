<?php
//base
include ("../../function.php");
$content = get_id_data('4006');
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
        <img data-src="../../lib/img/event/event-kotsuban/main.png"
        data-retina="../../lib/img/event/event-kotsuban/main-sp@2x.png"
        alt="会員限定イベント第一弾 骨盤調整レッスンご招待"
        class="u-img__max">

        <h2>美しさの基本は、ゆがみのない「美しい骨盤」にあり!<br>美肌やくびれを手に入れたい人は、ぜひ。</h2>
        <p>普通に生活をしているだけで、実はいつの間にか「ゆがみ」を作り出しているってお気付きですか。 カバンはいつも同じ方の肩にかけている。足を組んで座るクセがある。そんな日常動作が、骨盤のゆがみの元凶に。骨盤がゆがんでいる状態に、ヨガやピラティスなど運動をしても、その良さを享受できないままになってしまうのです。 </p>
        <p>そこで重要になってくるのが、骨盤を本来あるべき状態に正す「骨盤調整」。今回、講師となってくださるkyo先生は、フィットネスインストラクターとして25年以上の指導経歴をもつ、ボディワークプロデューサー。独自のメソッドによる美しい骨盤づくりを提唱しています。</p>
        <p class="mb4">名付けて「b-i STYLE®(ビイスタイル)」。美しい骨盤づくりにむけて骨盤の開閉力を高め、かつ筋肉本来の力を発揮するための「筋膜ストレッチ」も合わせて行うプログラムになっています。今回のイベントでは、kyo先生から的確なアドバイス&レッスンを受けながら1時間ほど体験していただきます。</p>
        <img data-src="../../lib/img/event/event-kotsuban/img01.png"
        data-retina="../../lib/img/event/event-kotsuban/img01-sp@2x.png"
        alt="こんなこと思い当たったら、「美しい骨盤づくり」にトライ!"
        class="u-img__max">

      </section>


      <section class="section wrapper narrow">
        <h2>きつくないのに、手応えを感じるボディワーク体験。<br>体験した人の声を聞いてみると...。</h2>
        <div class="flex between mb3">
          <div class="w33">
            <div class="img mb">
              <img src="../../lib/img/event/event-kotsuban/img02-sp@2x.png" alt="" class="u-img__max"/>
              <p>レッスンのはじめに先生がカラダの状況をみてくださって、はじめてゆがんでいることに気づきました。1時間ほどのボディワーク体験でしたが、ゆがみが調整されているのがわかり驚きました!<br>(20代 Hさん)</p>
            </div>
          </div>
          <div class="w33">
            <div class="img mb"><img src="../../lib/img/event/event-kotsuban/img03-sp@2x.png" alt="" class="u-img__max"/>
              <p>普段あまり運動をしていないので心配でしたが、ゆっくりと体を動かしながらストレッチするようなプログラムなのでついていけました。でも翌日は少し筋肉痛に・・・(笑)<br>(20代 Mさん)</p>
            </div>
          </div>
          <div class="w33">
            <div class="img mb"><img src="../../lib/img/event/event-kotsuban/img04-sp@2x.png" alt="" class="u-img__max"/>
              <p>kyo先生の物腰やわらかな話し方が印象的。笑顔でいろいろと教えてくださって、女性としても素敵だなぁと感じました。<br>(30代 Tさん)</p>
            </div>
          </div>
        </div>
        <p class="mb6">美しい骨盤づくりのボディワーク「b-i STYLE®」は、自力でバランス調整をする、老若男女を問わず、誰もが無理なく行えるプログラムになっています。1回体験するだけでも、身体の変化を感じること間違いなし!この機会に、骨盤を整えて、ゆがみ知らずの身体になってみませんか。</p>

        <div class="assist mb6">
          <img data-src="../../lib/img/event/event-kotsuban/img05.png"
          data-retina="../../lib/img/event/event-kotsuban/img05-sp@2x.png"
          alt="今回、レッスンをしてくださるkyo(キョウ:小林 亨)先生"
          class="u-img__max">
          <p>ボディワークプロデューサー。2001年よりフィットネス業界にて骨盤を中心に全身を整えるプログラムをスタート。2005年よりビューティ・ペルヴィス®と命名したオリジナルメソッドをスタジオヨギーにて展開。同時に賛同する認定者を全国に輩出し、指導者の育成・教育に努める。2015年5月、現代人の体にマッチしたプログラムを日本から発信する事を目指す「b-i STYLE®」をオープン。多数の講演を行い、@コスメ公認ビューティエバンジェリストとしても活躍。現在、CS放送「LaLatv」にも出演中。 主な著書に「座って骨盤調整」「ビューティ筋膜ストレッチ」「ペルヴィス®ダンス」 メディアファクトリー「ビューティ・ペルヴィス®骨盤調整でキレイになる3週間プログラム」主婦の友社 等多数。</p>
        </div>

        <h4 class="u-ttl__m">会員さま限定 ご招待イベント企画　b-i STYLE®(ビイスタイル)体験会 info</h4>
        <div class="u-list__dl_table">
          <dl>
            <dt>[日時]</dt>
            <dd>2017年1月21日(土)<br>1回目 / 午後1:00～2:30、2回目 / 午後4:00～5:30</dd>
          </dl>
          <dl>
            <dt>[募集人数]</dt>
            <dd>40名(各回20名ずつ)</dd>
          </dl>
          <dl>
            <dt>[場所]</dt>
            <dd>b−i STYLE® スタジオ　東京都港区北青山2-9-13サイトウビル2F</dd>
          </dl>
          <dl>
            <dt>[講師]</dt>
            <dd>kyo(ボディワークプロデューサー)</dd>
          </dl>
          <dl>
            <dt>[参加費]</dt>
            <dd>1レッスン3,000円のところ無料(交通費は各自でご負担ください) </dd>
          </dl>
          <dl>
            <dt>[募集条件]</dt>
            <dd>会員であること。<br>男性・女性どちらでもご参加いただけます。 </dd>
          </dl>
          <dl>
            <dt>[応募申し込み]</dt>
            <dd>会員ログイン後、ブランシエラクラブ マイページよりお申込みください。1回目、2回目どちらか一方のみのご応募となります。</dd>
          </dl>
          <dl>
            <dt>[応募締め切り]</dt>
            <dd>2016年11月30日(水) 23:59まで</dd>
          </dl>
          <dl>
            <dt>[当選者発表]</dt>
            <dd>当選された方には、直接メールにてご案内させていただきます。なお、ご応募が多数の場合は抽選となりますのでご了承ください。</dd>
          </dl>
          <div class="w30">
            <img data-src="../../lib/img/event/event-kotsuban/img06.png"
            data-retina="../../lib/img/event/event-kotsuban/img06@2x.png"
            alt="b-i STYLE®スタジオ"
            class="u-img__max">
          </div>
        </div>
        <div>
          <label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>
        </div>
      </section>
    </div>
    <div class="return event">
      <a href="<?php echo $link_url ?>/event">アンケート・イベント一覧へ</a>
    </div>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
