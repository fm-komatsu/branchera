<?php
//base
include("../../function.php");
$content = get_id_data('16011');
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
$release_year = "2022";
$release_month = "8";
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
        <h3 class="u-ttl__l">熱中症リスクが上昇する季節<br>危険から身を守るための予防と対策
        </h3>
        <p class="mb3">熱中症が起こりやすい暑い季節。特にお子さまや高齢者はリスクが高く、また若年層や中年層でもスポーツ中に多く報告されています。熱中症によるリスクを低減するための予防と対策についてALSOKに伺いました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">熱中症のメカニズム</span></h4>
          <div class="u-column mb4">
            <div class="flex between">
              <div class="w50">
                <p class="mb2">高い気温で体温が上昇すると通常は体内で調節機能が働きます。しかし<strong>気温や湿度が高すぎるとこの機能がうまく働かず、めまい・失神・けいれん・高体温などの症状が起こる</strong>ことがあります。この状態の総称が<strong>「熱中症」</strong>と呼ばれます。
                </p>

              </div>
              <div class="w50"> <img src="<?php echo $img_url; ?>/magazine/alsok/90/img__01@2x.png" alt="熱中症（イメージ）｜<?php echo $pageTtl ?>" class="u-img__max center u-only__pc" style="max-width:222px">
                <img src="<?php echo $img_url; ?>/magazine/alsok/90/img__02-sp@2x.png" alt="不調を感じたらすぐに対応！熱中症応急処置チャート｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center mb2_sp">
              </div>
            </div>
          </div>
          <figure class="mb5">
            <img src="<?php echo $img_url; ?>/magazine/alsok/90/img__02@2x.png" alt="不調を感じたらすぐに対応！熱中症応急処置チャート｜<?php echo $pageTtl ?>" class="u-img__max center u-only__pc" style="max-width:559px">
            <img src="<?php echo $img_url; ?>/magazine/alsok/90/img__01-sp@2x.png" alt="熱中症（イメージ）｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:75%">
          </figure>
        </section>
        <section class="mb3">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">家族でできる熱中症予防</span></h4>
          <div class="flex between">
            <div class="w50">
              <p class="mb3">お子さまは発汗機能が未熟なことや、大人に比べて身長が低く路面から高温の輻射熱（ふくしゃねつ）を受けることから発症リスクが高まります。<strong>自分の不調に気付かずに周りに伝えられないことも多いので、顔色や汗の量などをこまめに確認しましょう。</strong>また、高齢の方は暑さや喉の渇きを感じにくく、本人が気付かぬうちに発症することも。ご家族からもエアコンの使用や、喉が渇く前の水分補給をすすめましょう。<br>室内での対策では、<strong>温度計を目立つところに置いて室温チェックを習慣づける</strong>のもよい方法です。一定の温度や湿度を検知するとブザーで知らせるアラーム付き機器も市販されているので活用しましょう。
              </p>
            </div>
            <div class="w50">
              <div>
                <img src="<?php echo $img_url; ?>/magazine/alsok/90/img__03@2x.png" alt="熱中症の子供を心配する親（イメージ）｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center mb3" style="max-width:212px">
                <img src="<?php echo $img_url; ?>/magazine/alsok/90/img__03-sp@2x.png" alt="熱中症の子供を心配する親（イメージ）｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center mb3" style="max-width:65%">
              </div>
            </div>
          </div>
          <div class="u-assist_green mb5">
            <h5 class="mb1">◉熱中症予防の対策</h5>
            <ul class="u-list__ul_dot mt0 mb0">
              <li>室内ではエアコンや扇風機を活用し、熱気をためないようにしましょう。</li>
              <li>外出する際は、帽子や涼しい服装などで対策を。</li>
              <li>室内外を問わず、こまめな水分補給を心がけましょう。</li>
              <li>無理をせず適度な休憩をとりましょう。</li>
              <li>大量に発汗した際は、塩分も忘れずに補給してください。
              </li>
              <li>栄養バランスの良い食事で、暑さに負けない体を作りましょう。</li>
            </ul>
          </div>
        </section>
        <section class="u-clearfix">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">Webカメラを活用し遠隔でも安全確認</span></h4>
          <div class="flex between">
            <div class="w50">

              <p class="mb3 mb3_sp"><strong>お子さまのお留守番中や、離れて暮らすご家族が心配な場合に役立つのが、スマホなどからお部屋の様子を確認できるWebカメラです。</strong>室内の温度検知もできるタイプなら熱中症対策により有効です。<br>ALSOKでは設置工事不要、別売りのセンサーを併用することで温度検知も可能で、非常時にはガードマンの出動依頼もできる<strong>「HOME ALSOK アルボeye」</strong>を取り扱っています。
              </p>
            </div>
            <div class="w50">
              <div>
                <img src="<?php echo $img_url; ?>/magazine/alsok/90/img__04@2x.jpg" alt="HOME ALSOK アルボeye｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center mb3" style="max-width:191px">
                <img src="<?php echo $img_url; ?>/magazine/alsok/90/img__04-sp@2x.jpg" alt="HOME ALSOK アルボeye｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center mb3" style="max-width:70%">
              </div>
            </div>
          </div>
          <div class="u-assist_green mb5">
            <h5 class="mb1">◉もしもの際はインターホンの非常ボタンを</h5>
            <div class="flex between">
              <div class="w30 u-only__pc">
                <img src="<?php echo $img_url; ?>/magazine/alsok/90/img__05@2x.png" alt="インターホンの非常ボタンの位置（イメージ）｜<?php echo $pageTtl ?>" class="u-img__max center u-only__pc" style="max-width:144px">
              </div>
              <div class="w70">
                <p class="mb2_sp">万が一のために、インターホンのパネルに「非常」ボタンがあるかを確認しておきましょう。ある場合は、押すとマンションの管理室や管理センター、警備会社で警報を受信し、緊急連絡先に連絡またはガードマンが出動する仕組みになっています。
                </p>
                <small class="u-small mb3_sp">※マンション設備と連動していない場合は非常ボタンがありません。また操作時の通報先はマンションの管理会社やご契約内容によって異なります。
                </small>
                <img src="<?php echo $img_url; ?>/magazine/alsok/90/img__05-sp@2x.png" alt="インターホンの非常ボタンの位置（イメージ）｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:60%">

              </div>
            </div>
          </div>
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
