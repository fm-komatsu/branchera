<?php
//base
include ("../../function.php");
$content = get_id_data('4033');
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
        <img data-src="../../lib/img/event/event-kotsuban3/main.png"
        data-retina="../../lib/img/event/event-kotsuban3/main@2x.png"
        alt="会員限定イベント第一弾 骨盤調整レッスンご招待"
        class="u-img__max mb4">
        <div class="narrow">

          <h2 class="u-ttl__l">美しさの基本は、ゆがみのない「美しい骨盤」にあり!<br>美肌やくびれを手に入れたい人は、ぜひ。</h2>
          <p>普通に生活をしているだけで、実はいつの間にか「ゆがみ」を作り出しているってお気付きですか。 カバンはいつも同じ方の肩にかけている。足を組んで座るクセがある。そんな日常動作が、骨盤のゆがみの元凶に。 </p>
          <p>そこで重要になってくるのが、骨盤を本来あるべき状態に正す「骨盤調整」。今回、講師となってくださるkyo先生は、フィットネスインストラクターとして25年以上の指導経歴をもつ、ボディワークプロデューサー。独自のメソッドによる美しい骨盤づくりを提唱しています。</p>
          <p class="mb4">名付けて「b-i STYLE®(ビイスタイル)」。美しい骨盤づくりにむけて骨盤の開閉力を高め、かつ筋肉本来の力を発揮するための「筋膜ストレッチ」も合わせて行うプログラムになっています。</p>
          <img data-src="../../lib/img/event/event-kotsuban3/img01.png"
          data-retina="../../lib/img/event/event-kotsuban3/img01.png"
          alt="こんなこと思い当たったら、「美しい骨盤づくり」にトライ!"
          class="u-img__max">
        </div>

      </section>


      <section class="section wrapper narrow">
        <h2 class="u-ttl__l">きつくないのに、手応えを感じるボディワーク体験。<br>体験した人の声を聞いてみると...。</h2>
        <div class="flex between mb3">
          <div class="w33">
            <div class="img mb">
              <img src="../../lib/img/event/event-kotsuban3/img02.png" alt="" class="u-img__max"/>
              <p>レッスンのはじめに先生がカラダの状況をみてくださって、はじめてゆがんでいることに気づきました。1時間ほどのボディワーク体験でしたが、ゆがみが調整されているのがわかり驚きました!<br>(20代 Hさん)</p>
            </div>
          </div>
          <div class="w33">
            <div class="img mb"><img src="../../lib/img/event/event-kotsuban3/img03.png" alt="" class="u-img__max"/>
              <p>普段あまり運動をしていないので心配でしたが、ゆっくりと体を動かしながらストレッチするようなプログラムなのでついていけました。でも翌日は少し筋肉痛に・・・(笑)<br>(20代 Mさん)</p>
            </div>
          </div>
          <div class="w33">
            <div class="img mb"><img src="../../lib/img/event/event-kotsuban3/img04.png" alt="" class="u-img__max"/>
              <p>kyo先生の物腰やわらかな話し方が印象的。笑顔でいろいろと教えてくださって、女性としても素敵だなぁと感じました。<br>(30代 Tさん)</p>
            </div>
          </div>
        </div>
				<div class="mb4">
					<h4 class="u-ttl__m">過去に実施した「骨盤の調整レッスン」イベントの様子はこちら</h4>
          <div class="flex between mb3">
  					<div class="w50 mb2_sp center_sp">
  						<img
  						src="../../lib/img/event/event-kotsuban3/past-img01@2x.jpg"
  						style="max-width:360px;"
  						class="u-img__max center">
  					</div>
  					<div class="w50 mb2_sp center_sp">
  						<img
  						src="../../lib/img/event/event-kotsuban3/past-img02@2x.jpg"
  						style="max-width:360px;"
  						class="u-img__max center">
  					</div>
  				</div>
          <ul class="u-list__ul">
            <li><a href="report-kotsuban.php" class="u-icon">骨盤の調整レッスンイベントレポート</a></li>
            <li><a href="report-kotsuban2.php" class="u-icon">骨盤の調整レッスンレポート«東京・大阪W開催≫</a></li>
          </ul>

				</div>

				<div class="u-assist mb6">
	        <p>美しい骨盤づくりのボディワーク「b-i STYLE®」は、自力でバランス調整をする、老若男女を問わず、誰もが無理なく行えるプログラムになっています。1回体験するだけでも、身体の変化を感じること間違いなし!この機会に、骨盤を整えて、ゆがみ知らずの身体になってみませんか。</p>
				</div>

        <div class="assist mb6">
          <img data-src="../../lib/img/event/event-kotsuban3/img05.png"
          data-retina="../../lib/img/event/event-kotsuban3/img05.png"
          alt="今回、レッスンをしてくださるkyo(キョウ:小林 亨)先生"
          class="u-img__max">
          <p>ボディワークプロデューサー。2001年よりフィットネス業界にて骨盤を中心に全身を整えるプログラムをスタート。2005年よりビューティ・ペルヴィス®と命名したオリジナルメソッドをスタジオヨギーにて展開。同時に賛同する認定者を全国に輩出し、指導者の育成・教育に努める。2015年5月、現代人の体にマッチしたプログラムを日本から発信する事を目指す「b-i STYLE®」をオープン。多数の講演を行い、@コスメ公認ビューティエバンジェリストとしても活躍。現在、CS放送「LaLatv」にも出演中。 主な著書に「座って骨盤調整」「ビューティ筋膜ストレッチ」「ペルヴィス®ダンス」 メディアファクトリー「ビューティ・ペルヴィス®骨盤調整でキレイになる3週間プログラム」主婦の友社 等多数。</p>
        </div>

        <h4 class="u-ttl__m">イベント概要</h4>
        <div class="u-list__dl_table" style="position:relative;">
          <dl>
            <dt>[日時]</dt>
            <dd>2018年5月19日（土）<br>1回目 / 午前11:00～12:00、2回目 / 午後1:00～2:00<br>※各回30分前から受付開始</dd>
          </dl>
          <dl>
            <dt>[講師]</dt>
            <dd>kyo先生（ボディワークプロデューサー）</dd>
          </dl>
          <dl>
            <dt>[場所]</dt>
            <dd>b−i STYLE® スタジオ<br>東京都港区北青山2-9-13サイトウビル2F</dd>
          </dl>
          <dl>
            <dt>[アクセス]</dt>
            <dd>銀座線「外苑前」駅徒歩2分</dd>
          </dl>
          <dl>
            <dt>[募集人数]</dt>
            <dd>各回15名程度</dd>
          </dl>
          <dl>
            <dt>[参加費]</dt>
            <dd>参加無料　※現地までの交通費等は各自ご負担ください。 </dd>
          </dl>
          <dl>
            <dt>[申込方法]</dt>
            <dd>長谷工IDマイページにログインしてお申込みください。<br>男性・女性どちらでもご参加いただけます。</dd>
          </dl>
          <dl>
            <dt>[応募締め切り]</dt>
            <dd>2018年4月30日（月）</dd>
          </dl>
          <dl>
            <dt>[当選発表]</dt>
            <dd>ご当選者さまには2018年5月1日（火）より随時メールにてご連絡いたします。</dd>
          </dl>
          <dl class="mb2">
            <dt>[注意事項]</dt>
            <dd>お申込みは1回目、2回目のいずれか1回のみとなります。</dd>
          </dl>
          <div class="w30 bistyle mb3">
            <img data-src="../../lib/img/event/event-kotsuban3/img06.png"
            data-retina="../../lib/img/event/event-kotsuban3/img06@2x.png"
            alt="b-i STYLE®スタジオ"
            class="u-img__max">
          </div>
        </div>
				<label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>
      </section>
    </div>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
