<?php
//base
include ("../../function.php");
$content = get_id_data('4076');
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

        <div>
          <h2 class="mb3">
            <figure class="u-position__center">
              <img data-src="<?php echo $img_url ?>/event/report-golf14/main-v.jpg" data-retina="<?php echo $img_url ?>/event/report-golf14/main-v@2x.jpg"
                alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc">
              <img data-src="<?php echo $img_url ?>/event/report-golf14/main-v-sp.jpg" data-retina="<?php echo $img_url ?>/event/report-golf14/main-v-sp@2x.jpg"
                alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp">
            </figure>
          </h2>
          <p class="mb3">ファミリーで参加できるスポーツイベントとして、元プロ野球選手による野球教室とPGA所属ティーチングプロによるスナッグゴルフ教室を屋内で開催！<br>子どもも大人も元気に体を動かしたイベントの模様をレポートします！</p>
        </div>

        <section>
          <div class="u-assist">
            <div class="flex flex_center">
              <div class="mb2_sp mr1 mr0_sp">
                <img
                data-src="<?php echo $img_url ?>/event/golf-index/pga-logo.png"
                data-retina="<?php echo $img_url ?>/event/golf-index/pga-logo@2x.png"
                style="max-width:130px;"
                alt="<?php echo $pageTtl ?>"
                class="u-img__max">
              </div>
              <div class="self-center">
                <h3 class="u-ttl__s mb0">公益社団法人 日本プロゴルフ協会（PGA)</h3>
              </div>
            </div>
              <hr>
              <p>1957年7月、東西のプロゴルフ協会を統合して設立された男子プロゴルファー団体。<br>今回はPGA協力のもと、 誰でも簡単にゴルフの基本が学べる『スナッグゴルフ』と元プロ野球選手による『野球教室』のコラボが実現！</p>
          </div>
        </section>
        <div class="mb4">
          <section>
            <h3 class="u-ttl__m">野球×ゴルフのスペシャルイベント！本格的な直接指導に大興奮！</h3>

            <div class="mb3 u-clearfix">
              <figure class="w50 u-float__left">
                <img
                data-src="<?php echo $img_url; ?>/event/report-golf14/report-golf14__img01.jpg"
                data-retina="<?php echo $img_url; ?>/event/report-golf14/report-golf14__img01@2x.jpg"
                style="max-width:400px;"
                class="u-img__max">
              </figure>
              <p>今回は、ブランシエラクラブイベント史上初めて、長谷工コーポレーション本社の体育館でイベントを実施しました。<br>猛暑真っ只中の8月でしたが、体育館は冷房が設置されているので過ごしやすく、運動するのにぴったりの環境です。</p>
              <p>イベントは、<strong>元プロ野球選手とPGA所属ティーチングプロが直接指導</strong>するという、レアなイベント。子どもたちにスポーツの楽しさを知ってもらおうと、PGAの協力のもと企画されました。野球とゴルフ、普段同時に教わる機会はあまりない2競技ですが、多数の応募をいただき、会場は子どもと大人で大賑わい！</p>
            </div>

            <div class="mb3 u-clearfix">
              <figure class="w50 u-float__right">
                <img
                data-src="<?php echo $img_url; ?>/event/report-golf14/report-golf14__img02.jpg"
                data-retina="<?php echo $img_url; ?>/event/report-golf14/report-golf14__img02@2x.jpg"
                style="max-width:400px;"
                class="u-img__max">
              </figure>
              <p>最初に行われた開会のあいさつで、講師を紹介。<br>左から、元プロ野球選手久保文雄さん（元横浜DeNAベイスターズ） 、西山秀二さん（元広島東洋カープ）、高橋雅裕さん（元横浜DeNAベイスターズ） 、庄司智久さん（元読売ジャイアンツ）、PGA所属ティーチングプロ二見悠嗣さん、村井亮太さん、井上健夫さん。<br>7人の豪華講師陣から、野球とゴルフの指導を受けます。</p>
            </div>

            <div class="flex between">
              <div class="w50 mb1_sp">
                <figure class="center">
                  <img
                  data-src="<?php echo $img_url ?>/event/report-golf14/report-golf14__img03.jpg"
                  data-retina="<?php echo $img_url ?>/event/report-golf14/report-golf14__img03@2x.jpg"
                  style="max-width:640px;"
                  alt="<?php echo $pageTtl ?>"
                  class="u-img__max center">
                </figure>
              </div>
              <div class="w50">
                <figure class="center">
                  <img
                  data-src="<?php echo $img_url ?>/event/report-golf14/report-golf14__img04.jpg"
                  data-retina="<?php echo $img_url ?>/event/report-golf14/report-golf14__img04@2x.jpg"
                  style="max-width:640px;"
                  alt="<?php echo $pageTtl ?>"
                  class="u-img__max center">
                </figure>
              </div>
            </div>
            <p> 講師紹介を終えると、早速準備運動をスタート。元横浜DeNAベイスターズの高橋さん指導のもと、ストレッチをしていきます。さらに、高橋さん直々に<strong>「足を速くするコツ」</strong>について教えてもらいました！<br>「手の小指に力を入れる」「体は横に振らず、腕は縦に大きく振る」…といったポイントの数々に、子どもたちは興味津々。</p>
          </section>
        </div>
        <div class="mb4">
          <section>
            <h3 class="u-ttl__m">ナイスショット連発⁉のスナッグゴルフ練習</h3>
            <div class="flex between">
              <div class="w50 mb1_sp">
                <figure class="center">
                  <img
                  data-src="<?php echo $img_url ?>/event/report-golf14/report-golf14__img05.jpg"
                  data-retina="<?php echo $img_url ?>/event/report-golf14/report-golf14__img05@2x.jpg"
                  style="max-width:640px;"
                  alt="<?php echo $pageTtl ?>"
                  class="u-img__max">
                </figure>
              </div>
              <div class="w50">
                <figure class="center">
                  <img
                  data-src="<?php echo $img_url ?>/event/report-golf14/report-golf14__img06.jpg"
                  data-retina="<?php echo $img_url ?>/event/report-golf14/report-golf14__img06@2x.jpg"
                  style="max-width:640px;"
                  alt="<?php echo $pageTtl ?>"
                  class="u-img__max">
                </figure>
              </div>
            </div>
            <p>体をよくほぐした後は、スナッグゴルフの指導に入ります。3つのグループに分かれて、チーム毎に1名のティーチングプロが帯同！元プロ野球選手のみなさんも、一緒に参加しました。<br>今回教わったのは、長い距離を打つ「ショット」、的を狙う「アプローチ」、ボールを転がすように打つ「パター」の3種類の打ち方です。最初は慣れないゴルフに戸惑っていた子どもたちも、最後は元気いっぱいにクラブを振り、ナイスショットを連発！「うまい！」「おぉ～」といった歓声が体育館のあちらこちらで上がりました。</p>
            <div class="flex between">
              <div class="w50 mb1_sp">
                <figure class="center">
                  <img
                  data-src="<?php echo $img_url ?>/event/report-golf14/report-golf14__img07.jpg"
                  data-retina="<?php echo $img_url ?>/event/report-golf14/report-golf14__img07@2x.jpg"
                  style="max-width:640px;"
                  alt="<?php echo $pageTtl ?>"
                  class="u-img__max">
                </figure>
              </div>
              <div class="w50">
                <figure class="center">
                  <img
                  data-src="<?php echo $img_url ?>/event/report-golf14/report-golf14__img08.jpg"
                  data-retina="<?php echo $img_url ?>/event/report-golf14/report-golf14__img08@2x.jpg"
                  style="max-width:640px;"
                  alt="<?php echo $pageTtl ?>"
                  class="u-img__max">
                </figure>
              </div>
            </div>
          </section>
        </div>
        <div class="mb4">
          <section>
            <h3 class="u-ttl__m">元プロ野球選手の投球を受ける！白熱のキャッチボールレッスン</h3>
            <figure class="">
              <img
              data-src="<?php echo $img_url ?>/event/report-golf14/report-golf14__img09.jpg"
              data-retina="<?php echo $img_url ?>/event/report-golf14/report-golf14__img09@2x.jpg"
              alt="<?php echo $pageTtl ?>"
              style="max-width:790px;"
              class="u-img__max">
            </figure>
            <p class="mb3">ゴルフが終わると、元プロ野球選手によるキャッチボールレッスンが行なわれました。3つのグループに分かれて、選手が投げるボールをキャッチしていきます。中には、マイグローブを持参してきた参加者の方も！元プロとのキャッチボールということで、気合十分です。<br>プロ野球選手を夢見て真剣な表情で挑む子どもたち、久々の運動にちょっと苦笑いなお父さんやお母さんたち…と、それぞれが全力で楽しみ、笑顔溢れる時間となりました。</p>
            <div class="flex between">
              <div class="w50 mb1_sp">
                <figure class="center">
                  <img
                  data-src="<?php echo $img_url ?>/event/report-golf14/report-golf14__img10.jpg"
                  data-retina="<?php echo $img_url ?>/event/report-golf14/report-golf14__img10@2x.jpg"
                  style="max-width:640px;"
                  alt="<?php echo $pageTtl ?>"
                  class="u-img__max">
                </figure>
              </div>
              <div class="w50">
                <figure class="center">
                  <img
                  data-src="<?php echo $img_url ?>/event/report-golf14/report-golf14__img11.jpg"
                  data-retina="<?php echo $img_url ?>/event/report-golf14/report-golf14__img11@2x.jpg"
                  style="max-width:640px;"
                  alt="<?php echo $pageTtl ?>"
                  class="u-img__max">
                </figure>
              </div>
            </div>
            <p class="mb3">そしてレッスンの最後にはなんと！<strong>キャッチャーに日本シリーズにも出場した元広島東洋カープの西山さん、バッターに庄司さん、審判に高橋さんという豪華メンバーを前に、子ども限定でピッチャーを体験しました！</strong></p>
            <figure class="">
              <img
              data-src="<?php echo $img_url ?>/event/report-golf14/report-golf14__img12.jpg"
              data-retina="<?php echo $img_url ?>/event/report-golf14/report-golf14__img12@2x.jpg"
              alt="<?php echo $pageTtl ?>"
              style="max-width:790px;"
              class="u-img__max">
            </figure>
            <p class="mb3">目いっぱい腕を振って投げる子どもたちの姿は、まさに「一球入魂」。西山さんもそのボールをしっかりと受け止めます。</p>
            <p class="mb3">そしてそろそろ終了…というときに、久保さんの一声で、大人も数名体験に参加できることに！本気でボールを投げるお父さんたちの背中は、とても輝いて見えました。 </p>
            <div class="flex between">
              <div class="w50 mb1_sp">
                <figure class="center">
                  <img
                  data-src="<?php echo $img_url ?>/event/report-golf14/report-golf14__img13.jpg"
                  data-retina="<?php echo $img_url ?>/event/report-golf14/report-golf14__img13@2x.jpg"
                  style="max-width:640px;"
                  alt="<?php echo $pageTtl ?>"
                  class="u-img__max">
                </figure>
              </div>
              <div class="w50">
                <figure class="center">
                  <img
                  data-src="<?php echo $img_url ?>/event/report-golf14/report-golf14__img14.jpg"
                  data-retina="<?php echo $img_url ?>/event/report-golf14/report-golf14__img14@2x.jpg"
                  style="max-width:640px;"
                  alt="<?php echo $pageTtl ?>"
                  class="u-img__max">
                </figure>
              </div>
            </div>
          </section>
        </div>
        <div class="mb4">
          <section>
            <h3 class="u-ttl__m center_pc">参加者全員で笑顔の記念撮影♪</h3>
            <figure class="mb2">
              <img
              data-src="<?php echo $img_url ?>/event/report-golf14/report-golf14__img15.jpg"
              data-retina="<?php echo $img_url ?>/event/report-golf14/report-golf14__img15@2x.jpg"
              alt="<?php echo $pageTtl ?>"
              style="max-width:790px;"
              class="u-img__max">
            </figure>
            <div class="flex between mb2">
              <div class="w50 mb1_sp">
                <figure class="center">
                  <img
                  data-src="<?php echo $img_url ?>/event/report-golf14/report-golf14__img16.jpg"
                  data-retina="<?php echo $img_url ?>/event/report-golf14/report-golf14__img16@2x.jpg"
                  style="max-width:640px;"
                  alt="<?php echo $pageTtl ?>"
                  class="u-img__max">
                </figure>
              </div>
              <div class="w50">
                <figure class="center">
                  <img
                  data-src="<?php echo $img_url ?>/event/report-golf14/report-golf14__img17.jpg"
                  data-retina="<?php echo $img_url ?>/event/report-golf14/report-golf14__img17@2x.jpg"
                  style="max-width:640px;"
                  alt="<?php echo $pageTtl ?>"
                  class="u-img__max">
                </figure>
              </div>
            </div>
            <p>さらに、ご家族ごとに元プロ野球選手とティーチングプロのみなさんで記念撮影！笑顔が溢れたイベントもついに終了です。<br>帰り際には、参加者全員に長谷工あんしんデリが手掛けるお米、「たなかみ米」のお土産も配られました。<br>思いきり体を動かして、夏休みの楽しい思い出となった1日でした！</p>
          </section>
        </div>
        <h4 class="u-ttl__m">参加していただいた方の声</h4>

				<div class="event_comment">
					<div class="balloon balloon_widthmax mb fam2">
						<div class="inner">
							<div>
								<p>野球とゴルフ、一度に2種類挑戦出来て良かった。先生達の褒めて伸ばす姿勢が参考になりました。息子も未経験で最初はボール投げが出来ませんでしたが、レッスン最後にはまっすぐ弧を描くように飛んでいました。</p>
							</div>
						</div>
					</div>
					<div class="balloon balloon_widthmax mb fam2">
						<div class="inner">
							<div>
								<p>親子とも野球もゴルフも未経験に近かったのですが、プロの方たちの暖かい雰囲気や素晴らしいスタッフの方のおかげで、親子共々楽しい時間を過ごさせていただきました。以来、息子は新聞紙でバットとグローブと玉を自分で作って、部屋でプチ野球しております。ゴルフの方も楽しかったみたいで自分のうまくできたスイングを何回も見ておりました。ありがとうございました。</p>
							</div>
						</div>
					</div>
				</div>
				<div class="event_comment">
					<div class="balloon balloon_widthmax mb fam2">
						<div class="inner">
							<div>
								<p>今回が初めてだったゴルフは、とても楽しかったようです。親がやらないので経験させた事がなかったのですが、今回のイベントで、ひとつ楽しめる事が増えたのはプラスになったと思います。ありがとうございました。</p>
							</div>
						</div>
					</div>
					<div class="balloon balloon_widthmax mb fam2">
						<div class="inner">
							<div>
								<p>うちは女の子ですが、体を動かすのが大好きな娘で野球とゴルフと両方体験できて、さらにプロの方に直接教えてもらいながら一緒にできるという特別な時間を家族で過ごせてとても楽しかったです。子どもだけではなく、我々大人もボール投げができたので、普段の運動不足が少し解消できました。家に帰ってからも娘はずっと野球とゴルフの話をしていたので、すごく楽しめたのだと思います。</p>
							</div>
						</div>
					</div>
          <div class="balloon balloon_widthmax mb fam2">
						<div class="inner">
							<div>
								<p>元プロ野球選手やプロゴルファーの方にお会いする機会も無いので、親子共にとても貴重な経験になりました。<br>流石に教え方も上手で子どものイキイキした表情が印象的でした。お米のお土産も嬉しかったです。</p>
							</div>
						</div>
					</div>
        <div class="u-assist center_pc mb4 mb2_sp" style="line-height:2;">
          <p class="u-font__bold">ここでは一部の掲載となりますが、たくさんのご意見をいただき、ありがとうございました。<br>ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。<br>最新情報はメルマガでお知らせしますのでぜひ、チェックしてください。</p>
        </div>
        <div>
          <h4 class="u-ttl__m">過去に実施した「スナッグゴルフ親子体験イベント」のレポートはこちら</h4>
          <ul class="u-list__ul">
            <li>
              <a href="report-golf6.php" class="u-icon">スナッグゴルフ親子体験イベント2018レポート</a>
            </li>
            <li>
              <a href="report-golf12.php" class="u-icon">スナッグゴルフ親子体験イベント2019レポート</a>
            </li>
          </ul>
        </div>
      </section>
    </div>



  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
