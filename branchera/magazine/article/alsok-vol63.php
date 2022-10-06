<?php
//base
include( "../../function.php" );
$content = get_id_data( '21007' );
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
$release_month ="6";
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
        <h3 class="u-ttl__l">「ドローン」の安心・安全な運用を目指そう</h3>
        <p class="mb3">空撮ですっかりお馴染みとなった、小型無人航空機「ドローン」。優れた利便性の一方で、落下などの危険性をはらんだ先進の機器に対し、ALSOKではすでに数年前から、「有効利用」と「リスク管理」の両面から対策を検討しています。<br>今回は、建物点検におけるドローン技術の活用や飛行させる場合のルール等について話を伺いました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">可能性が大きく広がる、有効活用</span></h4>

          <p class="mb2">ALSOKでは、少子高齢化に向けた、警備へのロボット活用の延長線上にある「飛行ロボット」としての位置づけで、ドローンの研究に取り組んできました。現在は<strong>警備に関連した産業利用</strong>として、メガソーラーシステムのパネル点検業務に関し、ヘリを利用した有人点検に代わる高精度・低コストの点検・施設管理サービスとしてドローンを提供しています。</p>
          <div class="flex between mb2_sp">
            <div class="w55">
              <p class="mb2">また、<strong>大規模修繕の事前調査に必要な、建物診断の際の外壁調査にもドローンが活躍しています。</strong>外壁調査の主な手法は、建物全面への足場の設置や、ゴンドラや高所作業車の使用ですが、事前準備から始まり時間とコストがかかります。さらに高所での作業のため作業員の安全にも配慮が必要になります。</p>
              <p>その点、ドローンでは遠隔操作が可能で安全なうえ、ドローンと高解像度の赤外線カメラを活用することで、発見が難しい劣化箇所も赤外線で可視化でき、調査の効率化が実現することになります。</p>
            </div>
          <figure class="w45">
            <img src="<?php echo $img_url; ?>/magazine/alsok/63/alsok63__img01@2x.png" alt="最近はネットを介したストーカーも顕在化｜<?php echo $pageTtl?>" style="max-width:540px" class="u-img__max u-only__pc center" loading="lazy">

            <img src="<?php echo $img_url; ?>/magazine/alsok/63/alsok63__img01-sp@2x.png" alt="最近はネットを介したストーカーも顕在化｜<?php echo $pageTtl?>" class="u-img__max u-only__sp center" loading="lazy">
          </figure>
          </div>

        </section>
        <section class="mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">落下する危険性がリスク</span></h4>
          <div class="flex between">
            <div class="w55">
              <p class="mb2">一方、過去の事例では2015年に、首相官邸の屋上にドローンが落下、大問題となりました。同機種のドローンは全国で数万台が販売済み。しかもドローンの取り扱いは、ラジコンのヘリコプターに比べ特殊な技術は必要なく、素人でもそれなりに飛ばせます。しかし、実際には、位置関係を確認しながら正確に操作するのは非常に難しいといえます。</p>
              <p class="mb2_sp">そして最大のリスクは「落下」。趣味で購入した人が不慣れなまま操縦し、悪意はなくても過失で落下させてしまう。小型とはいえ落ちてきたものに当たれば命の危険も伴います。</p>
            </div>
            <figure class="w45">
              <img src="<?php echo $img_url; ?>/magazine/alsok/63/alsok63__img02@2x.png" alt="個人情報が漏れないよう管理は厳重に｜<?php echo $pageTtl?>" style="max-width:353px" class="u-img__max u-only__pc" loading="lazy">
              <img src="<?php echo $img_url; ?>/magazine/alsok/63/alsok63__img02-sp@2x.png" alt="個人情報が漏れないよう管理は厳重に｜<?php echo $pageTtl?>" style="max-width:275px" class="u-img__max u-only__sp center" loading="lazy">
            </figure>
          </div>
        </section>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_violet"><span class="alsok__ttl_ex">無人航空機の飛行ルール</span></h4>

          <p class="mb4 mb2_sp">ドローン（小型無人航空機）には飛行禁止区域が定められています。<br><strong>自身の私有地であっても、以下の（A）～（C）の空域に該当する場合には、国土交通大臣の許可を受ける必要があります。</strong><br>許可を受けた後、安全性を確保したうえで飛行させることが可能となります。</p>
          <figure>
            <img src="<?php echo $img_url; ?>/magazine/alsok/63/alsok63__img03@2x.png" alt="基本的な防犯対策に加えプロのサポートも検討<?php echo $pageTtl?>" class="u-img__max u-only__pc center" loading="lazy">
            <img src="<?php echo $img_url; ?>/magazine/alsok/63/alsok63__img03-sp@2x.png" alt="基本的な防犯対策に加えプロのサポートも検討<?php echo $pageTtl?>" class="u-img__max u-only__sp center" loading="lazy">
          </figure>
          <small class="u-small">国土交通省「無人飛行機（ドローン、ラジコン機等）の安全な飛行のためのガイドライン」より。詳しくは国土交通省、警視庁のホームページをご覧ください。</small>
          <p><strong>ドローンを飛行させる場合は、航空法及び関係法令を遵守し、飛行に必要な準備、整備等が整っていることを確認してから、第三者に迷惑をかけることなく安全に飛行させることが重要です。</strong></p>
        </section>
        <section class="u-clearfix mb8">
          <h4 class="alsok__ttl alsok__ttl_violet"><span class="alsok__ttl_ex">ALSOKのリスク対策とさらなる技術開発に期待</span></h4>

          <p>ALSOKでは、運用に際して自主基準を設け、約100時間の訓練を経て数々のチェックポイントをクリアした者が飛行にあたり、最大限安全性に配慮しています。<br><strong>ドローンを安全に正しく使うことによって、生活の利便性が高まり、警備や点検以外にも、物流や災害救助の分野でも、様々なソリューションが実現するよう、さらなる技術の開発が期待されます。</strong></p>
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
