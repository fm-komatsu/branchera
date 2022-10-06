<?php
//base
include( "../../function.php" );
$content = get_id_data( '16006' );
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
$release_month ="3";
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
        <h3 class="u-ttl__l">子どもたちが自ら考え行動する危機管理意識を養う</h3>
        <p class="mb2">守りのプロである現役のガードマンが、学校で防犯授業を行う『ALSOKあんしん教室』（※）についてご紹介します。<br>今回は、実際に小学校で指導を行っているALSOKの担当の方に話を伺いました。</p>
        <p class="mb3">小学校高学年を対象とした授業では、子どもたちが、自ら危険を察知し、考え行動することと、命の大切さを理解するために2つのテーマに沿って学びます。</p>
        <section>
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">自分の住んでいる街の危険なところを考えよう</span></h4>
          <p class="mb2">子どもたちは「危険な場所」を理解しているようでも、ある種の冒険心と好奇心から危ない行動を起こしがちです。</p>
          <p class="mb2">小学校高学年向けの「安全な街って何だろう」をテーマにした授業では、街に潜む危険について考え行動することを学びます。<br>架空の地図を使って、危険だと思う場所を見つけ、その理由を考え話し合い、発表してもらいます。<br>大切なことは、何が危険なのか、危険を避けるためにはどうしたらいいかを自分自身で考えること。それによって危険に気づく力が養えます。</p>
          <p class="mb2">では実際、街中でどんなところが危険かというと…</p>
          <figure class="mb2">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/69/alsok69__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/69/alsok69__img01@2x.png"
              alt="自分の住んでいる街の危険なところを考えよう｜<?php echo $pageTtl?>" style="max-width:668px" class="u-img__max u-only__pc center">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/69/alsok69__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/69/alsok69__img01-sp@2x.png"
              alt="自分の住んでいる街の危険なところを考えよう｜<?php echo $pageTtl?>" style="max-width:277px" class="u-img__max u-only__sp center">
          </figure>
          <p class="mb4">子どもは一人でいるときがいちばん危険です。子どもたちが一人でいる時間を減らすこと、『地域の目』でさりげなく見守ることを、大人は常に考えたいものです。</p>

        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">人の命を救うには、まず自分にできることをしよう</span></h4>
          <p class="mb2">「人の命を助けるって何だろう」をテーマにした授業では、今では街のいたるところに設置されているAEDや心肺蘇生の実技を通して、命の大切さを学びます。</p>
          <p class="mb2">授業では練習用のマネキンを使い、グループで協力しながら体験します。人が倒れた場面に遭遇したとき、大人に助けを求めたり、通報したり、AEDを持ってきたりなど、<strong>自分たちにもできることがあるという気づきを与える</strong>ように心がけています。何より、<strong>思いやりの心と行動する勇気を養うこと</strong>が大事です。</p>
          <p class="mb4">授業後には「119番がんばります」や「自分の住んでいるマンションのAEDを確認します」などの、頼もしい感想が聞かれます。</p>
        </section>
        <section class="u-clearfix">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">家族みんなで、危機管理について話そう</span></h4>
          <div class="flex between">
            <div class="w50 mb3_sp">
              <p class="mb2">２つのテーマに共通するのは、<strong>「自分たちで考え行動する」</strong>、自主性を育てることです。<br>実際のニュースや、警察などが配信している不審者の情報メールなどを会話のきっかけにして、家族で危機管理について話し合うことをおすすめします。家族のコミュニケーションが危機管理意識を養います。</p>
              <p class="mb2">※綜合警備保障株式会社ALSOKでは、防犯出張授業「ALSOKあんしん教室」を全国各地の小学校で実施しています。これまでに延べ50,779回、159万人以上の児童が参加しています。<br>（2019年12月末現在）</p>
            </div>
            <figure class="w50">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/69/alsok69__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/69/alsok69__img02@2x.png"
                alt="家族みんなで、危機管理について話そう｜<?php echo $pageTtl?>" style="max-width:315px" class="u-img__max center u-only__pc">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/69/alsok69__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/69/alsok69__img02-sp@2x.png"
                alt="家族みんなで、危機管理について話そう｜<?php echo $pageTtl?>" style="max-width:295px" class="u-img__max center u-only__sp">
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
