<?php
//base
include( "../../function.php" );
$content = get_id_data( '16010' );
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
$release_year = "2022";
$release_month ="5";
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
        <h3 class="u-ttl__l">川遊び中の事故にご注意を<br>知っておきたいレジャーの安全対策</h3>
        <p class="mb3">気温も穏やかになり、人出の増える場所を避けて屋外レジャーを計画しているご家庭も多いのではないでしょうか。しかしアウトドアは楽しい反面、危険も潜んでいます。<br>今回は川遊びを中心にレジャーでの注意事項と事前準備についてALSOKに伺いました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">子どもの水難事故は河川が最も多い</span></h4>
          <p class="mb2">夏に向けて増えるのがレジャー中の水難事故。<strong>特に子どもの事故が多い場所は、河川です。</strong></p>
          <p class="mb7">令和2年における子ども（中学生以下）の水難者総数は176人（図1）。そのうち死者・行方不明者は28人で、河川での被害者が18人と最も多いことが分かっています（図2）。<br>川遊びをするときは、子どもの水難事故に十分な注意が必要です。</p>
          <figure class="mb5">
            <img src="<?php echo $img_url; ?>/magazine/alsok/89/img__01@2x.png" alt="【図1】令和2年における水難の概況 【図2】死者・行方不明者（子ども）の場所別数（令和2年）｜<?php echo $pageTtl?>" class="u-img__max center u-only__pc" style="max-width:725px">
            <img src="<?php echo $img_url; ?>/magazine/alsok/89/img__01-sp@2x.png" alt="【図1】令和2年における水難の概況 【図2】死者・行方不明者（子ども）の場所別数（令和2年）｜<?php echo $pageTtl?>" class="u-img__max u-only__sp center mb2_sp" style="max-width:259px">
          </figure>
        </section>
        <section class="mb3">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">川遊びでの安全対策</span></h4>
          <div class="flex between">
            <div class="w50">
              <p class="mb3">まず、川遊びをするときは、<strong>必ずライフジャケットを着用</strong>しましょう。<br>万が一、川に流されても、顔が水面に出て呼吸を確保できるため、助かる可能性が高くなります。ライフジャケットは遊んでいる子どもだけではなく、<strong>同行の大人も着用</strong>することが大切です。<br>川辺には、子どもだけで遊びに行くことは避け、<strong>必ず大人が子どもたちの行動を見守る</strong>ようにしましょう。</p>
            </div>
            <div class="w50">
              <div>
                <img src="<?php echo $img_url; ?>/magazine/alsok/89/img__02@2x.png" alt="川辺で遊ぶ前にライフジャケットを着用しましょう｜<?php echo $pageTtl?>" class="u-img__max u-only__pc center mb3" style="max-width:217px">
                <img src="<?php echo $img_url; ?>/magazine/alsok/89/img__02-sp@2x.png" alt="川辺で遊ぶ前にライフジャケットを着用しましょう｜<?php echo $pageTtl?>" class="u-img__max u-only__sp center mb3" style="max-width:247px">
              </div>
            </div>
          </div>
          <div class="u-assist_green mb5">
						<h5 class="mb1">◉川遊びでの注意点</h5>
            <ul class="u-list__ul_dot mt0 mb0">
              <li>事前に気象情報をチェック。天気が悪い日や増水しているときは水辺に近付かない。</li>
              <li>河川や川辺で遊ぶときは必ずライフジャケットを着用する。</li>
              <li>サンダルなど持ち物が流されても拾おうとしない。</li>
							<li>子どもだけで川辺に行かない。必ず大人が付き添い子どもから目を離さない。</li>
							<li>中州でバーベキューやキャンプをしない。増水時に中州に取り残される危険があります。</li>
							<li>天候の変化に注意する。上流の大雨により下流で急に増水することがあります。</li>
							<li>上流にダムがある場合は、ダムの放流に注意する。</li>
							<li>もしもの場合に備えてスローロープ（溺れている人に投げるためのロープ）や、浮き輪などのレスキュー用品を用意しておく。</li>
            </ul>
          </div>
        </section>
        <section class="u-clearfix">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">泳いで助けることは危険</span></h4>
          <p class="mb3 mb3_sp">子どもが川に落ちて流された場合、泳いで助けるのではなく、陸上からロープなどのものを使った方が助けやすいということを覚えておきましょう。<strong>ライフジャケットなしで泳いで助けようとすると、救助者も溺れてしまうなどの二次災害に遭う危険があります。</strong><br>ライフジャケットを着ていても、速い流れに巻き込まれて川辺に上がれないこともあるため、もしもの場合に備えてレスキュー用品を用意しておくことをおすすめします。</p>
          <div class="u-assist_green mb5">
            <h5 class="mb1">◉溺れている人を見つけたときの「3つの行動」</h5>
            <ol class="u-list__ol-black">
              <li>仰向けで浮いて待つように声をかける</li>
              <li>周囲にも助けを求め、119番通報する</li>
              <li>飛び込まずに、溺れている人に向かって浮くものやロープなどを投げる</li>
            </ol>
          </div>
        </section>
        <section class="u-clearfix">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">安心につながる備えをしよう</span></h4>
          <div class="flex between">
            <div class="w50">
              <p class="mb3">特に子どもは、アウトドアやイベントなどのレジャー中に家族からはぐれてしまうことがあります。スマートフォンなどから位置確認ができる<strong>GPS端末（見守り用端末や、キッズ携帯など）を身に着けておくと安心です。</strong></p>
            </div>
            <div class="w50">
              <div>
                <img src="<?php echo $img_url; ?>/magazine/alsok/89/img__03@2x.png" alt="GPSを身につけた子ども｜<?php echo $pageTtl?>" class="u-img__max u-only__pc center"  style="max-width:314px">
                <img src="<?php echo $img_url; ?>/magazine/alsok/89/img__03-sp@2x.png" alt="GPSを身につけた子ども｜<?php echo $pageTtl?>" class="u-img__max u-only__sp center" style="max-width:278px">
              </div>
            </div>
          </div>
            <p class="mb8 mb3_sp">自然とのふれあいが楽しい季節。<br>家族とのレジャーが素晴らしい思い出となるよう、安全や防犯のためにしっかり備えて出かけましょう。</p>
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
