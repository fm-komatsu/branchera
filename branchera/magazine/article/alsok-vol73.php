<?php
//base
include( "../../function.php" );
$content = get_id_data( '16007' );
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
$release_month ="8";
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
        <h3 class="u-ttl__l">子どもたちの安全・安心を守るために、親子で話し合い、合言葉を確認しよう!</h3>
        <p class="mb2">今年はコロナ禍で、子どもたちもいつもと違う日常を送らざるを得なくなっています。3月中旬から2カ月半、ほとんどの小学校が休校になり、友達や先生と思うようにコミュニケーションが取れない日々が続きました。例年なら楽しいことがいっぱいの長い夏休みも、変則的になっているところも多いと思われます。そんな状況下で学校が再開され、子どもたちの防犯意識も緩みがちになっているのではないでしょうか。</p>
        <p class="mb3">今回はこれまでお伝えしてきた「ALSOKあんしん教室（小学生対象）」の内容をおさらいしながら、より時代に合った防犯対策を、実際に指導を行うALSOKスタッフと一緒に考えました。</p>
        <section class="mb3">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">通学路はきちんと下見、「こども110番の家」の場所も把握しておく</span></h4>
          <p class="u-clearfix">
          <span>
            <figure class="u-float__right">
              <img src="<?php echo $img_url; ?>/magazine/alsok/73/alsok73__img01@2x.png"
                alt="防犯ブザーを携帯している子供と子供に声をかける不審者　イメージ｜<?php echo $pageTtl?>" style="max-width:260px" class="u-img__max u-only__pc center" loading="lazy">
            </figure>
            街には「人通りが少なく、周囲から見えにくい」危険な場所が潜んでいます。<br>新入生を持つ保護者は、子どもと一緒に通学路を歩き、立ち寄らない方がいい場所や危険な場所などを確認しておきましょう。</span><br>
            <figure class="mt2_sp mb2_sp u-only__sp">
            <img src="<?php echo $img_url; ?>/magazine/alsok/73/alsok73__img01-sp@2x.png"
              alt="防犯ブザーを携帯している子供と子供に声をかける不審者　イメージ｜<?php echo $pageTtl?>" class="u-img__max u-only__sp center" style="max-width:80%;" loading="lazy">
            </figure>
            <span>また、通学路などに設置されている<strong>「こども110番の家」の場所を把握し、身の危険を感じた時には「緊急時に安心して助けを求め駆け込める場所」ということを子どもに教えておくことも大切です</strong>。<br>万が一、不審者に出会った場合に備えて、防犯ブザーを携帯することもおすすめします。</span>
          </p>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">ネット犯罪対策には「かきくけこ」と「あくまがでた」！</span></h4>
          <div class="flex between mb3">
            <div class="w50">
              <p class="mb2">最近ではインターネット関連の防犯対策も重要です。ネット環境が進化し、ますます便利になりましたが、携帯電話やパソコンなどでつながる世界は、いつの間にか犯罪に巻き込まれてしまうリスクも高くなっています。</p>
              <figure class="u-only__sp mb2_sp">
                <img src="<?php echo $img_url; ?>/magazine/alsok/73/alsok73__img02@2x.png"
                  alt="PCやスマートフォンでインターネットをしている子供　イメージ｜<?php echo $pageTtl?>" style="max-width:346px" class="u-img__max center u-only__pc" loading="lazt">
                <img src="<?php echo $img_url; ?>/magazine/alsok/73/alsok73__img02-sp@2x.png"
                  alt="PCやスマートフォンでインターネットをしている子供　イメージ｜<?php echo $pageTtl?>" style="max-width:80%" class="u-img__max center u-only__sp" loading="lazy">
              </figure>

              <p class="mb2">そこでALSOKでは<strong>新しい標語『かきくけこ』と『あくまがでた』</strong>を作り、小学校高学年向けに発信しています。標語に込められた留意点は大人にも共通する事項であり、大切なことは子どもたちがしっかりと理解できるよう、親子で話し合うこと。基本的なことですがコミュニケーションの豊富さが防犯意識を根付かせるポイントです。</p>
            </div>
            <figure class="w50 u-only__pc">
              <img src="<?php echo $img_url; ?>/magazine/alsok/73/alsok73__img02@2x.png"
                alt="PCやスマートフォンでインターネットをしている子供　イメージ｜<?php echo $pageTtl?>" style="max-width:346px" class="u-img__max center u-only__pc" loading="lazt">
            </figure>
          </div>
          <figure class="mb3 mb2_sp">
            <img src="<?php echo $img_url; ?>/magazine/alsok/73/alsok73__img03@2x.png"
              alt="インターネットに書きこむ前に　合言葉「かきくけこ」を確認しよう｜<?php echo $pageTtl?>" class="u-img__max center u-only__pc" loading="lazt">
            <img src="<?php echo $img_url; ?>/magazine/alsok/73/alsok73__img03-sp@2x.png"
              alt="インターネットに書きこむ前に　合言葉「かきくけこ」を確認しよう｜<?php echo $pageTtl?>" class="u-img__max center u-only__sp" loading="lazy">
          </figure>
          <figure class="mb4 mb2_sp">
            <img src="<?php echo $img_url; ?>/magazine/alsok/73/alsok73__img04@2x.png"
              alt="知らない人からメールやメッセージが届いたら「あくまがでた」で、おうちの人に相談しよう<?php echo $pageTtl?>" class="u-img__max center u-only__pc" loading="lazt">
            <img src="<?php echo $img_url; ?>/magazine/alsok/73/alsok73__img04-sp@2x.png"
              alt="知らない人からメールやメッセージが届いたら「あくまがでた」で、おうちの人に相談しよう<?php echo $pageTtl?>" class="u-img__max center u-only__sp" loading="lazy">
          </figure>
          <p><strong>犯罪に巻き込まれないためには、子どもに防犯意識をしっかり身につけさせ、防犯対策を行いましょう。</strong></p>
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
