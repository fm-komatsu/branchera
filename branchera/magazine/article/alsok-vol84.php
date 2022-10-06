<?php
//base
include("../../function.php");
$content = get_id_data('21011');
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
$release_month = "2";
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
      <section class="main__item mb3">
        <h3 class="u-ttl__l">コロナ禍だから知りたい「在宅ワーク」のセキュリティ対策</h3>
        <p class="mb3">新しい生活様式の中で、一般化しつつある「在宅ワーク」。仕事で使用している端末や、データを家に持ち帰る機会も増えたのではないでしょうか。大きな環境の変化の中で、知らず知らずのうちに、大切な情報を危険にさらしてしまうことも･･･。そこで、在宅ワークのセキュリティ対策について、ALSOKにアドバイスをいただきました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">防犯意識を高めて、仕事部屋を安全に</span></h4>
          <div class="flex between mb2_sp">
            <div class="w50">
              <p class="mb2">プロによる情報警備は、建物自体の警備に始まり、パソコン監視、ネットワーク監視など、総合的な対策が行われます。在宅での作業が増える中、ご自身で行う対策も段階的に工夫していきましょう。</p>
              <p class="mb2">仕事の情報を自宅で扱う場合、短時間の外出でも施錠を忘れないこと、心当たりのない訪問者を不用意にマンション内に招き入れないことなど、<strong>防犯の基礎を徹底</strong>しましょう。</p>
              <img src="<?php echo $img_url; ?>/magazine/alsok/84/alsok84__img01-sp@2x.png" alt="（イメージ画像）インターホン画面にうつっている心当たりのない訪問者に困る人｜<?php echo $pageTtl ?>" style="max-width:282px" class="u-img__max center u-only__sp" loading="lazy">
              <p class="mb2">外出時の防犯に手軽で心強いのが<strong>「センサー付きカメラ」の設置</strong>。お部屋を常時撮影し、外出先などからリアルタイムで映像を確認することができます。防犯面はもちろん、お子さまや高齢者の見守りなど、暮らしの安心にも役立ちます。ご自宅全体の防犯に不安がある場合は、警備のプロに相談することをおすすめします。</p>
            </div>
            <div class="w50">
              <figure class="center mb3">
                <img src="<?php echo $img_url; ?>/magazine/alsok/84/alsok84__img01@2x.png" alt="（イメージ画像）インターホン画面にうつっている心当たりのない訪問者に困る人｜<?php echo $pageTtl ?>" style="max-width:317px" class="u-img__max center u-only__pc" loading="lazy">
              </figure>
              <figure class="center">
                <img src="<?php echo $img_url; ?>/magazine/alsok/84/alsok84__img02@2x.png" alt="（イメージ画像）センサー付きカメラ｜<?php echo $pageTtl ?>" style="max-width:317px" class="u-img__max center u-only__pc" loading="lazy">
                <img src="<?php echo $img_url; ?>/magazine/alsok/84/alsok84__img02-sp@2x.png" alt="（イメージ画像）センサー付きカメラ｜<?php echo $pageTtl ?>" style="max-width:282px" class="u-img__max center u-only__sp" loading="lazy">
              </figure>
            </div>
          </div>
        </section>
        <section class="mb4">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">パソコン、スマホなどのセキュリティ設定を確認</span></h4>
          <div class="flex between mb2_sp">
            <div class="w50">
              <p class="mb2">パソコンやスマホなど、端末のセキュリティ対策も大切です。<br>企業のセキュリティ管理下にあるパソコンではなく、個人の端末で仕事をする方は特に注意が必要です。<strong>仕事とプライベートで端末やアカウントを明確に分け、仕事用の端末はご家族と共有しない</strong>ようにしましょう。パソコンやデータもパスワードやコピー制御など、情報を守るための各種ロックを忘れずに。<br>また、<strong>セキュリティソフトやOSは常に最新のバージョンにアップデート</strong>しておくようにしましょう。</p>
            </div>
            <div class="w50">
              <figure class="center mb3">
                <img src="<?php echo $img_url; ?>/magazine/alsok/84/alsok84__img03@2x.png" alt="（イメージ画像）パソコンやデータはパスワードやコピー制御など、情報を守るための各種ロックをする｜<?php echo $pageTtl ?>" style="max-width:317px" class="u-img__max center u-only__pc" loading="lazy">
                <img src="<?php echo $img_url; ?>/magazine/alsok/84/alsok84__img03-sp@2x.png" alt="（イメージ画像）パソコンやデータはパスワードやコピー制御など、情報を守るための各種ロックをする｜<?php echo $pageTtl ?>" style="max-width:282px" class="u-img__max center u-only__sp" loading="lazy">
              </figure>
              <figure class="center">
                <img src="<?php echo $img_url; ?>/magazine/alsok/84/alsok84__img04@2x.png" alt="（イメージ画像）仕事とプライベートで端末やアカウントを明確に分け、仕事用の端末はご家族と共有しないようにする｜<?php echo $pageTtl ?>" style="max-width:317px" class="u-img__max center u-only__pc" loading="lazy">
              </figure>
            </div>
          </div>
        </section>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">フリーWi-Fiは情報漏洩のリスクに注意</span></h4>
          <div class="flex between mb2_sp">
            <div class="w50">
              <p class="mb2">リモートワークにより、外出先からインターネットへ接続する機会も増えてきていますが、暗号化されていない提供元不明のフリーWi-Fi（公衆無線LAN）の利用は、情報漏洩のリスクが高まります。外出先では<strong>安全性の確認できないスポットでの無線LANには繋がない、画面を覗き見されるような環境で仕事をしない</strong>などの対策を行いましょう。</p>
            </div>
            <div class="w50">
              <figure class="center mb3">
                <img src="<?php echo $img_url; ?>/magazine/alsok/84/alsok84__img05@2x.png" alt="（イメージ画像）フリーWi-Fi（公衆無線LAN）利用中に、画面を覗き見されている人｜<?php echo $pageTtl ?>" style="max-width:317px" class="u-img__max center u-only__pc" loading="lazy">
                <img src="<?php echo $img_url; ?>/magazine/alsok/84/alsok84__img04-sp@2x.png" alt="（イメージ画像）フリーWi-Fi（公衆無線LAN）利用中に、画面を覗き見されている人｜<?php echo $pageTtl ?>" style="max-width:282px" class="u-img__max center u-only__sp" loading="lazy">
              </figure>
            </div>
          </div>
        </section>
        <section class="u-clearfix mb2 u-list__ol_circle-num">
          <div class="u-assist">
            <h4 class="mb3"><span class="alsok__ttl_ex">「紛失防止タグ」で置き忘れ対策</span></h4>
            <div class="flex between mb2_sp">
              <div class="w50">
                <p class="mb2">パソコンやスマホ、USBメモリやディスク等の紛失によって情報が漏洩する場合もあります。そのリスクを軽減してくれるのが、大切なものの置き忘れをブザーやスマホへの通知で知らせてくれる「紛失防止用タグ」。比較的リーズナブルな価格で市販されており、気軽に導入することができます。</p>
              </div>
              <div class="w50">
                <figure class="center mb3">
                  <img src="<?php echo $img_url; ?>/magazine/alsok/84/alsok84__img06@2x.png" alt="（イメージ画像）紛失防止タグ｜<?php echo $pageTtl ?>" style="max-width:317px" class="u-img__max center u-only__pc" loading="lazy">
                  <img src="<?php echo $img_url; ?>/magazine/alsok/84/alsok84__img05-sp@2x.png" alt="（イメージ画像）紛失防止タグ｜<?php echo $pageTtl ?>" style="max-width:282px" class="u-img__max center u-only__sp" loading="lazy">
                </figure>
              </div>
        </section>
        <div class="mb8">
          <p>新しいワークスタイルが多様化する中で、適切なセキュリティ対策を実現するためには、<strong>一人ひとりのモラルや、意識の向上が不可欠</strong>です。</p>
        </div>
        <div class="mb8 mb3_sp">
          <?php include($inc_path . "/lib/inc/page/_magazine/__release_date.php"); ?>
        </div>
        <section>
          <h5 class="mt3">■関連記事</h5>
          <div class="u-photolist__row mt2">
            <?php
            $exceptcnt_id = $content['contents_id'];
            echo show_category_photoListalsok("alsok-other", $exceptcnt_id);
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
