<?php
//base
include( "../../function.php" );
$content = get_id_data( '21004' );
$pageTtl = $content[ 'title' ];
//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];
//bodyClass
$body_class = "page-article alsok";
//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
//release date
$release_year = "2019";
$release_month ="12";
$release_day ="";
?>
<main class="main magazine">
  <article class="main__row">
    <?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_alsok.php", "プロに聞く。暮らしの危機管理。" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
    <?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
    <div class="main__wrapper">
      <section class="main__item">
        <h3 class="u-ttl__l">集いやお出かけの多いシーズンだから、気持ちを引き締めて</h3>
        <p class="mb3">初詣にあいさつまわり、お買い物に新年会と外出する機会も増えるお正月。おめでたさも手伝ってつい気分も浮かれがちに。こんな時こそ要注意！隙を狙って巧みに近づいてくる犯罪者がいます。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">無締まりは絶対NG!　留守を知られない工夫を</span></h4>

          <p>無締まりによる侵入事例は依然として後を絶ちません。空き巣などに狙われないよう、鍵はドアであれ小窓であれ必ず締めること。戸締まりをはじめ、ガスの元栓、電気の消し忘れなどのチェック項目は、お出かけ前に必ず確認する習慣をつけましょう。<br>また、旅行などの際は</p>
          <div class="u-clearfix">
          <figure class="u-float__right w50">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/40/alsok40__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/40/alsok40__img01@2x.png" alt="空き巣などに狙われない工夫を｜<?php echo $pageTtl?>" style="max-width:356px" class="u-img__max u-only__pc center">
          </figure>
          <div class="u-assist w50">
            <ul class="u-list__ul_dot">
              <li>新聞を止める</li>
              <li>郵便物をためない</li>
              <li>玄関ライトをつける　など</li>
            </ul>
          </div>
          <p>留守をさとられない工夫を。<br>さらに警備会社によるセキュリティシステムを導入することでより安心度がアップします。</p>
          </div>
          <figure>
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/40/alsok40__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/40/alsok40__img01-sp@2x.png" alt="空き巣などに狙われない工夫を｜<?php echo $pageTtl?>" style="max-width:356px" class="u-img__max u-only__sp center">
          </figure>
        </section>
        <section class="mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">ひったくりやスリ、心も体も隙をつくらずに</span></h4>
          <section class="mb3">
            <p class="mb3_sp">ひったくりのターゲットとなるのは大半が女性で、バッグなどを後ろから来た自転車やバイクの犯人にひったくられるというもの。<strong>対策は路上を歩くとき絶対に道路側に物を持たないこと、これが鉄則です。また高齢者の場合、ATMから出てきたところなどを狙われやすいので、大金をおろすときはひとりでなく誰かに同伴してもらうことが望ましいでしょう。</strong></p>
            <div class="flex between">
              <div class="w50 mb3_sp">
                <p>スリは役割分担をする複数犯が多いので要注意。居酒屋や飲食店などで椅子にかけられた上着のポケットから財布を抜き取り、仲間がそれを受け取って逃げ去るという手口も多くみられます。またスマホの画面に気をとられているうちに足元に置いたカバンを持ち去られるというケースもあります。貴重品の管理にはくれぐれもご注意ください。</p>
              </div>
              <div class="w50">
                <figure>
                  <img data-src="<?php echo $img_url; ?>/magazine/alsok/40/alsok40__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/40/alsok40__img02@2x.png" alt="ひったくりやスリ、心も体も隙をつくらずに<?php echo $pageTtl?>" style="max-width:231px" class="u-img__max u-only__pc center">
                </figure>
                <figure>
                  <img data-src="<?php echo $img_url; ?>/magazine/alsok/40/alsok40__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/40/alsok40__img02-sp@2x.png" alt="ひったくりやスリ、心も体も隙をつくらずに<?php echo $pageTtl?>" style="max-width:349px" class="u-img__max u-only__sp center">
                </figure>

              </div>
            </div>
          </section>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">大切な「お年玉」を、盗られないよう注意</span></h4>
          <div class="u-clearfix">
            <figure class="w50 u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/40/alsok40__img03.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/40/alsok40__img03@2x.png" alt="大切な「お年玉」を、盗られないよう注意<?php echo $pageTtl?>" style="max-width:352px" class="u-img__max u-only__pc center">
            </figure>
            <p>お正月といえば「お年玉」。子どもたちは「お年玉」を持って買い物に出かけたがります。親が一緒に行くのがいちばんですが、子どもだけで行くときは、お金を持っていると一見して分からないように。さらにシンプルな方法ですが防犯ブザーを持たせるのもかなり効果的です。</p>
            <p class="mb3_sp"><strong>また子どもたちには「お年玉をたくさん持って出て、それを盗られてしまったら欲しいものが買えなくて悲しいよね」といったことを具体的に子どもの目線できちんとていねいに教えてあげましょう。</strong></p>
              <figure class="mb3_sp">
                <img data-src="<?php echo $img_url; ?>/magazine/alsok/40/alsok40__img03-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/40/alsok40__img03-sp@2x.png" alt="大切な「お年玉」を、盗られないよう注意<?php echo $pageTtl?>" style="max-width:558px" class="u-img__max u-only__sp center">
              </figure>

          </div>
        </section>
        <section class="mb8">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">次々登場する新手口に注意!「振り込め詐欺」</span></h4>
            <p class="mb2">年末年始は振り込め詐欺が増える季節でもあります。<br>一時は下火になったかにみえた振り込め詐欺ですが、監視が強まったATMや携帯電話を使った手口を避け、新しい巧妙な手口を使って、またじわじわと増加しています。平成30年は「オレオレ詐欺」と「架空請求詐欺」を合わせて17,844件も発生しています。</p>
            <p class="mb3_sp"><strong>被害を防ぐためには電話がかかってきてもすぐに対応するのではなく、一旦電話を切ってひと呼吸おいてから身近な人に相談することです。</strong>被害に遭うのは高齢者が多く、息子や娘を名乗ることが多いので、離れて暮らす場合は特に、近況報告など親子のコミュニケーションを密にすることが大切です。さらに高齢者は耳が遠くなったり記憶力が落ちたりしますから、<strong>何かあったときの連絡先や大切なことは紙に書いて電話の前に貼っておくと良いでしょう。</strong></p>
          </section>
        </section>
        <div class="mb8 mb3_sp">
          <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
        </div>
        <section>
          <h5 class="mt3">■関連記事</h5>
          <div class="u-photolist__row mt2">
            <?php
              $exceptcnt_id = $content['contents_id'];
              echo show_category_photoListalsok("alsok-other",$exceptcnt_id);
            ?>
          </div>
        </section>
    </div>
  </article>
</main>
<?php
$toindex_url = "/magazine/index_alsok.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
