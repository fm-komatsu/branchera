<?php
//base
include( "../../function.php" );
$content = get_id_data( '16005' );
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
$release_month ="11";
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
        <h3 class="u-ttl__l">子どもたちの安全を確保するために、子ども自身の防犯意識を育てる。</h3>
        <p class="mb3">2004年、子どもの犯罪被害が多発し、小学校から防犯授業を依頼されたことをきっかけに、「ALSOKあんしん教室」がスタートしました。<br>今回は、あんしん教室でALSOKのガードマンが教えている、『子どもたちが自分の身を守るノウハウ』について、ALSOK広報部に話を伺いました。</p>
        <section>
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">危機感は高まっている</span></h4>
          <div class="flex between mb3">
            <div class="w50 mb3_sp">
            <p class="mb1">ここ数年、警察庁の犯罪認知件数は下がっているにも関わらず、体感治安（※注）は逆に悪化しています。（図1）テレビやインターネットのニュースで流されるテロの映像や、衝撃的な事件の報道などがその原因と考えられます。</p>
            <small>※注：人々が日常生活の中で漠然と感じる治安の良し悪しに関する感覚。</small>
            </div>
            <figure class="w50">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img01@2x.png"
                alt="「リスクを想定して対策を考える」<?php echo $pageTtl?>" style="max-width:324px" class="u-img__max u-only__pc">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img01-sp@2x.png"
                alt="「リスクを想定して対策を考える」<?php echo $pageTtl?>" style="max-width:277px" class="u-img__max u-only__sp center">
            </figure>
          </div>

        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">声かけにだまされないよう注意する</span></h4>
          <div class="mb3 flex between">
          <div class="w50 mb3_sp">
          <p>ALSOKが、「あんしん教室」を開催した学校の先生方にアンケート調査をした結果、1割の先生が〝担当クラスの中に危ない目に遭ったことがある児童がいる〟と答え、そのうち4割が声かけにより連れ去られそうになったそうです。<br>その声かけの手口は図2で示されるように、<strong>〝ペットを見せてあげる〟</strong>とか、<strong>〝タレントにならない？〟という「興味系」</strong>、あるいは<strong>〝駅まで案内してくれない？〟</strong>とか、<strong>〝一緒に迷子の犬を探してくれない？〟という「親切系」</strong>が目立ちます。なお、ALSOKでは登下校時における防犯の心構えを警視庁が考案した標語<strong>「いかのおすし」</strong>を使って教えています。</p>
          </div>
          <figure class="w50">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img02@2x.png"
              alt="「ガードマンが駆けつける防犯グッズ」｜<?php echo $pageTtl?>" style="max-width:317px" class="u-img__max center u-only__pc mb3">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img02-sp@2x.png"
              alt="「ガードマンが駆けつける防犯グッズ」｜<?php echo $pageTtl?>" style="max-width:282px" class="u-img__max center u-only__sp mb2">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img03.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img03@2x.png"
                alt="「ガードマンが駆けつける防犯グッズ」｜<?php echo $pageTtl?>" style="max-width:317px" class="u-img__max center u-only__pc">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img03-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img03-sp@2x.png"
              alt="「ガードマンが駆けつける防犯グッズ」｜<?php echo $pageTtl?>" style="max-width:261px" class="u-img__max center u-only__sp">
          </figure>
          </div>
        </section>
        <section class="u-clearfix">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">留守番時も要注意</span></h4>
          <div class="flex between">
            <div class="w50 mb3_sp">
              <p class="mb2">さらにアンケート調査では、10クラスに1クラスの割合で、留守番中に不審な人が訪ねてきたり、電話がかかってきたことのある児童がいると答えています。（図3）</p>
              <p class="mb2">そこでALSOKでは、<strong>「いいゆだな」</strong>の標語を使って、留守番のときの防犯のポイントを教えています。<br>実際、留守番中の子どもを狙い、宅配業者や点検業者などを装って、鍵を開けさせ侵入したという事件が度々発生しています。玄関の鍵とドアチェーンは必ずかけ、<strong>家族以外は絶対に開けてはいけない</strong>ということを、徹底させる必要があります。モニター付きインターホンや、身の危険を感じたときに、ボタンひとつでガードマンに駆けつけ要請ができるホームセキュリティがあると、より安心です。</p>
              <p class="mb2">また、留守番中に電話がかかってきたら、<strong>「今、親がいないので」はNGワード。「親は今、手が離せません」とか「名前と連絡先を教えてください」と対応するよう教えましょう。</strong></p>
              <small>図1.2.3　出典：ALSOK「第3回担任の先生に聞く、小学生の防犯に関する実地調査」（2018年7月）</small>
            </div>
            <figure class="w50">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img04.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img04@2x.png"
                alt="「ガードマンが駆けつける防犯グッズ」｜<?php echo $pageTtl?>" style="max-width:315px" class="u-img__max center u-only__pc mb6">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img04-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img04-sp@2x.png"
                alt="「ガードマンが駆けつける防犯グッズ」｜<?php echo $pageTtl?>" style="max-width:295px" class="u-img__max center u-only__sp mb4">
                <img data-src="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img05.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img05@2x.png"
                  alt="「ガードマンが駆けつける防犯グッズ」｜<?php echo $pageTtl?>" style="max-width:319px" class="u-img__max center u-only__pc">
                <img data-src="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img05-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/67/alsok67__img05-sp@2x.png"
                alt="「ガードマンが駆けつける防犯グッズ」｜<?php echo $pageTtl?>" style="max-width:289px" class="u-img__max center u-only__sp">
            </figure>
          </div>
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
            echo show_category_photoListalsok("alsok-children",$exceptcnt_id);
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
