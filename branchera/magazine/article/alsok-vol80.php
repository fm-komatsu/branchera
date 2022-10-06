<?php
//base
include( "../../function.php" );
$content = get_id_data( '21009' );
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
$release_year = "2020";
$release_month ="10";
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
      <section class="main__item mb3">
        <h3 class="u-ttl__l">感染症予防は備えと心がけでしっかり対策</h3>
        <p class="mb3">新型コロナウイルスの出現により、私たちの日常生活は大きく変わりました。<br>そのため、感染症のリスクは、例年のように空気が乾燥する冬場だけでなく、通年で気をつけなければなりません。<br>今回はウイルス感染症のリスク軽減について、ALSOKに話を伺いました。<br>ALSOKでは、ウィズコロナ・アフターコロナ対策として、新しい生活様式に対応した様々な取り組みを行っています。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">ウイルスや菌を拡散させるリスクが高い「家庭内感染」</span></h4>

          <p class="mb2">ご家庭では、家族が限られた空間で密に接することが多く、誰かが発症すると、あっという間に全員に感染して、一家でダウンという状況に陥ります。<br>新型コロナだけでなくその他のインフルエンザや食中毒など、ウイルスや細菌による感染症のリスクを少しでも下げるため、普段の生活の中で取り入れやすい対策を考えてみましょう。</p>
          <div class="flex between mb2_sp">
            <div class="w50">
              <p class="mb2">拡大する新型コロナウイルスへの予防対策も重要となりますが、インフルエンザの流行は1月末から2月にかけてピークを迎えます。また、ノロウイルスなどの食中毒は11月から3月にかけて要注意です。<br>いずれも、せき、くしゃみ、鼻水、嘔吐物など、手について感染する接触感染が多いため、<strong>帰宅後の手洗い・うがいなどの徹底や、除菌用アルコールを活用し、家族が手に触れる部分はこまめに除菌して家庭内感染を防ぎましょう</strong>。</p>
              <figure>
                <img src="<?php echo $img_url; ?>/magazine/alsok/80/alsok80__img01@2x.png" alt="ウイルスや菌を拡散させるリスクが高い「家庭内感染」｜<?php echo $pageTtl?>" style="max-width:263px" class="u-img__max u-only__sp center" loading="lazy">
              </figure>
              <p>さらに家庭内では、<strong>冷蔵庫の野菜室に細菌が多い</strong>ことも明らかになっています。野菜室の底に落ちている野菜くずから多くの菌が発生し、食中毒の原因となることもあります。<br><strong>冷蔵庫の中の残り物の整理や、こまめに掃除をして、最後にエタノール等の消毒液で除菌することをおすすめします</strong>。</p>
            </div>
            <figure class="w50">
              <img src="<?php echo $img_url; ?>/magazine/alsok/80/alsok80__img01@2x.png" alt="ウイルスや菌を拡散させるリスクが高い「家庭内感染」｜<?php echo $pageTtl?>" style="max-width:353px" class="u-img__max u-only__pc center" loading="lazy">
            </figure>
          </div>

        </section>
        <section class="mb4">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">集合住宅では細心の注意を！</span></h4>
          <div class="mb3">
            <p class="mb2">マンションのような集合住宅には多くの人々が生活しているため、感染力の強い<strong>ウイルスを居住空間に拡散させないよう細心の注意が必要になります</strong>。<br>オートロックやエレベーターの押しボタン、共用のドアノブなどにウイルスや細菌が付着している可能性があるため、帰宅後は速やかに除菌することが重要です。</p>
          </div>
          <figure class="mb3 center">
            <img src="<?php echo $img_url; ?>/magazine/alsok/80/alsok80__img02@2x.png" alt="集合住宅では細心の注意を！<?php echo $pageTtl?>" style="max-width:518px" class="u-img__max center" loading="lazy">
          </figure>
        </section>
        <section class="u-clearfix mb8">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">対策グッズの備えは十分ですか？</span></h4>

          <p class="mb2">新型コロナが流行し始めた今年の春先には、店頭でマスクや除菌剤などが品薄になりました。<strong>マスクや消毒液は一度に大量に買い占めず、徐々に準備をしておきましょう</strong>。万が一発熱してしまい身動きが取れず、買いに行けない場合にも備蓄していれば安心です。</p>
          <p class="mb2"><strong>「感染しない・させない」をひとり一人が心がけて、感染の拡大を防ぎましょう</strong>。</p>
          <p>※対策グッズは感染症予防だけでなく、災害時の片付けや避難生活に必要な防災用品としても役立ちます。</p>
        </section>
        <div class="mb8 mb3_sp">
          <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
        </div>
        <section class="mb8">
          <h5 class="mt3">■関連記事</h5>
          <div class="u-photolist__row mt2">
            <?php
              $exceptcnt_id = $content['contents_id'];
              echo show_category_photoListalsok("alsok-other",$exceptcnt_id);
            ?>
          </div>
        </section>
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
