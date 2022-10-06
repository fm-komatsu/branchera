<?php
//base
include("../../function.php");
$content = get_id_data('10061');
$pageTtl = $content['title'];

//meta
$metaTtl = 'スマイルで交換できる「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

// 欠品フラグ
$itemShortage = 0;
?>

<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/smile/", "住まいレージ");
    include($inc_path . "/lib/inc/pan.php");
    ?>
    <?php
    $smile_flug = "exchange"; // exchange or lottery or service or no_flp
    $smile_num = "1,900"; //必要スマイル数
    $smile_id_test = "241"; //テストFLP用リンクナンバー
    $smile_id_production = "241"; //本番FLP用リンクナンバー
    include($inc_path . "/lib/inc/page/_smile/smile-header.php");
    ?>



    <section class="main__wrapper">
      <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img src="<?php echo ($img_url) ?>/smile/article/exchange-mochimugi-img1@2x.jpg" alt="<?php echo $pageTtl ?> image" style="max-width:350px;" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item">
            <img src="<?php echo ($img_url) ?>/smile/article/exchange-mochimugi-img2@2x.jpg" alt="ANAファインデリッシュ ロゴ image" style="max-width:350px;" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item">
            <img src="<?php echo ($img_url) ?>/smile/article/exchange-mochimugi-img3@2x.jpg" alt="林久右衛⾨商店…本物の味にこだわる！ image" style="max-width:350px;" class="u-img__max" loading="lazy">
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">林久右衛⾨商店…本物の味にこだわる！</h4>
          <p class="mb3 mb2_sp">林久右衛⾨商店の始まりは明治⼗⼋年。⾃然の恵みからお預かりしたかつお節は⽇本の⾷⽂化の原点であり、古来の製法を受け継ぎ、厳選素材だけが生み出せる本物の味を守り続けています。<br>この本格的なかつお節（枕崎産）をベースとした4種類のスープをたなかみのもち⻨とセットにしました。</p>

          <h4 class="lottery-point__ttl">たなかみのもち⻨…時短で美味しい“もち⻨スープの朝⾷”を！</h4>
          <p>たなかみのもち⻨（はねうまもち）は化学肥料を低減した滋賀県認証の環境にこだわった農産物で、お⽶と炊飯（もち⻨ごはん）したり、ゆでたもち⻨を冷凍庫に保存したりしてさまざまなレシピにご利⽤いただけます。<br>もち⻨に含まれるβ-グルカンが糖質の吸収を抑え、コレステロールやナトリウムを体外へ排出する効果があるといわれており、もち⻨は健康や美容のためにとても⼈気となっています。<br>ゆでて冷凍保存したもち⻨を電子レンジで解凍し、林久右衛⾨スープと⼀緒に器に⼊れてお湯を注げば、忙しい朝も時短で美味しいマイ健康食をお楽しみいただけます。
          </p>
        </div>
      </div>

      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p>忙しいときにこそ、良質なお食事をどうぞ♪こちらは林久右衛門商店のかつお節でお出汁を取ったスープ4種と、好評の「たなかみ米」と同じ地域で作られている「たなかみのもち麦」のセットです。スープは、伝統的な製法でじっくり発酵を促したかつお節の旨味をベースに、とまと、昆布、玉葱、十三穀と風味豊かな4品をご用意しました。スープに入れるたなかみのもち麦は、食べごたえがありながらも糖質吸収のコントロールをし、さらにデトックスを促す優れものです。心身をすこやかさと美しさで満たす、滋味あふれる本当の美味しさをぜひお試しください♪
          </p>
        </div>
      </div>

      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table">
            <dl>
              <dt>セット内容</dt>
              <dd>
                <ul class="u-list__ul_dot">
                  <li>たなかみのもち⻨</li>
                  <li>とまとスープ</li>
                  <li>昆布スープ</li>
                  <li>玉葱スープ</li>
                  <li>十三穀スープ</li>
                </ul>
            </dl>
            <dl>
              <dt>原材料</dt>
              <dd>
                <ul class="u-list__ul">
                  <li class="mb2">たなかみのもち⻨ 300g<br>
                    はねうまもち<br>
                    賞味期限：製造後1年
                  </li>
                  <li>とまとスープ 8g<br>
                    トマトペースト（ポルトガル製造）、砂糖、食塩、野菜エキス、おろしにんにく、チキンエキス、⾹⾟料、酵⺟エキス、澱粉、かつお節、ゼラチン、具（玉ねぎ・セロリ・トマト・食用植物油脂・パセリ）、酸化防止剤（ビタミンE）、（一部に小⻨・鶏⾁・ゼラチンを含む）<br>
                    賞味期限：製造後1年
                  </li>
                  <li>昆布スープ 7g<br>
                    かつお節エキス、デキストリン、しょうゆ、食塩、澱粉、醸造調味料、昆布エキス、砂糖、酵⺟エキス、ゼラチン、かつお節、具（乾燥がごめ昆布（国産）、三つ葉、柚子皮、椎茸、ごま、醸造酢、ねぎ）、酸化防⽌剤（ビタミンE）、（⼀部に⼩⻨・ごま・大豆・ゼラチンを含む）<br>
                    賞味期限：製造後1年
                  </li>
                  <li>玉葱スープ 6g<br>
                    チキンエキス、しょうゆ、澱粉、野菜エキス、食塩、砂糖、酵⺟エキス、ゼラチン、乳糖、かつお節、⾹⾟料、具（⽟葱（国産）、食用植物油脂、パセリ）、酸化防止剤（ビタミンE）、（⼀部に⼩⻨、乳成分、⼤⾖、鶏⾁、ゼラチンを含む）<br>
                    賞味期限：製造後1年
                  </li>
                  <li>十三穀スープ 8g<br>
                    かつお節エキス（国内製造）、しょうゆ、澱粉、デキストリン、食塩、⽔あめ、醸造調味料、昆布エキス、酵⺟エキス、ゼラチン、かつお節、具（三つ葉、発芽玄米、緑米、紫米、椎茸、かつお削り節、押⻨、胚芽押⻨、⾚⽶、⽶粒⻨、発芽⾚⽶、焼き玄米、あわ、きび、ひえ、はとむぎ）、酸化防止剤（ビタミンE）、（⼀部に⼩⻨・⼤⾖・ゼラチンを含む）<br>
                    賞味期限：製造後1年
                  </li>
                </ul>
              </dd>
            </dl>
          </div>
        </div>
        <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>
      </div>
      <?php include($inc_path . "/lib/inc/page/_smile/smile-footer.php"); ?>

    </section>

    <aside class="main__item">
      <h3 class="u-ttl__l">よくあるご質問</h3>
      <?php include($inc_path . "/lib/inc/page/_smile/smile-promotion.php") ?>
    </aside>

    <nav class="main__snav snav">
      <?php include($inc_path . "/lib/inc/page/_smile/u-smile-snav.php") ?>
    </nav>

  </article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
