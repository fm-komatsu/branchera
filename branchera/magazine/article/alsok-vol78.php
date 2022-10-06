<?php
//base
include("../../function.php");
$content = get_id_data('16009');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article alsok";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//release date
$release_year = "2021";
$release_month = "7";
$release_day = "";
?>
<main class="main magazine">
  <article class="main__row">
    <?php
    $panAry[] = array("/magazine/", "ブランシエラマガジン");
    $panAry[] = array("/magazine/index_alsok.php", "プロに聞く。暮らしの危機管理。");
    include($inc_path . "/lib/inc/pan.php");
    ?>
    <?php
    include($inc_path . "/lib/inc/page/_gift/__main-header.php");
    ?>
    <div class="main__wrapper">
      <section class="main__item">
        <h3 class="u-ttl__l">子どもと一緒に考える防犯対策</h3>
        <p class="mb3">警察庁の統計によると、子どもの犯罪被害件数は総数として減少傾向にあるものの、連れ去りや強制わいせつなどの深刻な被害は過去10年を通じてほぼ横ばい。また年々、SNSに起因する事犯が増えています。子どもたちを取り巻く環境は依然として油断のできない状況です。<br>夏休みを迎える前に、子どもたちが自らを守る術についてALSOKに伺いました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">大声を出して危険を知らせよう！</span></h4>
          <div class="flex between">
            <div class="w50 mb3_sp">
              <p>ALSOK社員が講師となって小学校で防犯などの授業を行なう<span class="u-font__bold font-color__black">“ALSOKあんしん教室”</span>では、<strong>「身の危険を感じた時に助けを呼ぶ場合、『ワー！』や『キャー！』ではなく『助けて！』と言いましょう」</strong>と指導しています。危険な目にあうと恐怖で声が出ないことも多いので、練習しておくことが大切です。大きな声を出しても大丈夫な場所で、おうちの方と一緒に練習しましょう。<br>
              <div class="center">
                <img src="<?php echo $img_url; ?>/magazine/alsok/78/img__01-sp@2x.png" alt="（イメージ画像）子供がたすけを呼ぶ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:202px">
              </div>
              また、留守番中の子どもを狙った犯罪も発生しているので、<strong>留守番をしていることを悟られないようにすること</strong>も大切です。家の鍵は他人から見えないようにして持ち歩き、周囲に怪しい人がいないことを確認してからドアを開きます。<strong>家に入るときは「ただいま！」と大声を出し、中に人がいるように思わせる</strong>とよいでしょう。留守番中に電話や訪問者があった際にどのように対応するかも、事前に家族で話し合っておきましょう。</p>
              <div class="center">
                <img src="<?php echo $img_url; ?>/magazine/alsok/78/img__02-sp@2x.png" alt="（イメージ画像）学校から子供が帰宅｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:223px">
              </div>
            </div>
            <div class="w50">
              <img src="<?php echo $img_url; ?>/magazine/alsok/78/img__01@2x.png" alt="（イメージ画像）子供がたすけを呼ぶ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:206px">
              <img src="<?php echo $img_url; ?>/magazine/alsok/78/img__02@2x.png" alt="（イメージ画像）学校から子供が帰宅｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:254px">
            </div>
          </div>
        </section>
        <section class="mb3">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">防犯ブザーは「複数持ち」でどんなときも携帯</span></h4>
          <p class="mb2">危険回避のために「<span class="u-font__bold font-color__black">防犯ブザーの複数持ち</span>」を推奨しています。通学時にランドセルにつけていても、帰宅後は持たずに出かけてしまい危険な目にあう場合も。学校用に加えて<strong>放課後用を用意しておき、必ず携帯させる</strong>ようにしましょう。持たせているだけで安心せず、電池が切れていないか、正常に動くかどうか、子どもがきちんと使えるかも定期的に確認することが大切です。</p>
          <div class="center">
            <img src="<?php echo $img_url; ?>/magazine/alsok/78/img__03-sp@2x.png" alt="（イメージ画像）登下校用と遊び用の防犯ブザーを用意しておく｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center mb2_sp">
          </div>
          <p class="mb2">また、おうちの方など指定した相手とだけ通話ができ、位置情報の確認や緊急時のかけつけサービスが利用できるGPSを搭載した携帯通報端末などを持たせておくと、より安心です。</p>
          <div class="center">
            <img src="<?php echo $img_url; ?>/magazine/alsok/78/img__04-sp@2x.png" alt="（イメージ画像）GPS搭載携帯通報端末｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:211px">
          </div>
          <figure class="flex">
            <img src="<?php echo $img_url; ?>/magazine/alsok/78/img__03@2x.png" alt="（イメージ画像）登下校用と遊び用の防犯ブザーを用意しておく｜<?php echo $pageTtl ?>" class="u-img__max center u-only__pc" style="max-width:312px">
            <img src="<?php echo $img_url; ?>/magazine/alsok/78/img__04@2x.png" alt="（イメージ画像）GPS搭載携帯通報端末｜<?php echo $pageTtl ?>" class="u-img__max center u-only__pc" style="max-width:155px">
          </figure>
        </section>
        <section class="mb3">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">ネットいじめなど現代ならではのトラブルにも目配りを</span></h4>
          <div class="flex between">
            <div class="w50">
              <p class="mb3">近年はインターネット、特にSNS上でのやり取りをきっかけとした子どもの被害が増えています。大人から子どもへの犯罪被害はもちろん、子供たち同士で傷つけあう被害も問題視されています。特にSNSによる悪口やいじめは、表面的には被害がわかりにくいため、子どもたちの普段の様子や行動に変化がないか気づいてあげることが必要です。</p>
            </div>
            <div class="w50">
              <div>
                <img src="<?php echo $img_url; ?>/magazine/alsok/78/img__05@2x.png" alt="（イメージ画像）SNSを見て悲しむ子供｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:170px">
                <img src="<?php echo $img_url; ?>/magazine/alsok/78/img__05-sp@2x.png" alt="（イメージ画像）SNSを見て悲しむ子供｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:162px">
              </div>
            </div>
          </div>
        </section>
        <section class="u-clearfix">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">家族で話し合いながら繰り返し練習を</span></h4>
          <p class="mb6 mb3_sp">最も大切なことは、危険な状況に遭遇したときのための練習と、コミュニケーションです。<br>ご家族で話し合い、とっさのときの行動を繰り返し練習することで、ご家族一人ひとりの防犯意識を高め、絆を深めることにもつながるでしょう。</p>
        </section>
        <div class="mb8 mb3_sp">
          <?php include($inc_path . "/lib/inc/page/_magazine/__release_date.php"); ?>
        </div>
        <section>
          <h5 class="mt3">■関連記事</h5>
          <div class="u-photolist__row mt2">
            <?php
            $exceptcnt_id = $content['contents_id'];
            echo show_category_photoListalsok("alsok-children", $exceptcnt_id);
            ?>
          </div>
        </section>
      </section>
    </div>
  </article>
</main>
<?php
$toindex_url = "/magazine/index_alsok.php";
include($inc_path . "/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
