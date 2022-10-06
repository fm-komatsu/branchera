<?php
//base
include( "../../function.php" );
$content = get_id_data( '20002' );
$pageTtl = $content[ 'title' ];
$exceptcnt_id = $content['contents_id'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '-' . siteName();
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
      <section class="main__item">
        <h3 class="u-ttl__l">今どきマンションのご近所付き合いを考える</h3>
        <p class="mb3">日常生活を送る中で、身近に相談できたり頼れる人がいれば心強いものです。でも「そうした関わりが、煩わしいからマンションに住んでいるのに」という方もいらっしゃいます。そうした微妙な事情を考慮しつつ、防犯対策にも役立つ現代のご近所付き合いについて考えてみましょう。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_blue mb3"><span class="alsok__ttl_ex">ご近所付き合いは有効な防犯対策</span></h4>

          <p>マンションに住んでいてお隣の人の顔も知らない、というのはありがちなことですが、こうした希薄な人間関係は防犯面から見てマイナスです。<br>住民同士が顔見知りでなければ、犯罪者が紛れ込んでも見分けがつかず、不審に思われずに犯罪が行なわれてしまいます。</p>
          <p>逆に住民に声をかけられたり、管理員さんがいつも巡回していて、管理がきちんとなされているようなところに犯罪者は近寄りません。ご近所付き合いは防犯対策の有効な手段のひとつです。</p>

          <figure class="u-float__right">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/61/alsok61__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/61/alsok61__img01@2x.png"
              alt="<?php echo $pageTtl?>" style="max-width:180px" class="u-img__max u-only__pc">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/61/alsok61__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/61/alsok61__img01-sp@2x.png"
              alt="<?php echo $pageTtl?>" style="max-width:156px" class="u-img__max u-only__sp center">
          </figure>
          <p>しかし、一方で「必要以上にプライバシーに踏み込まれたくない」と考える人も多い現代。ひと昔前の和気あいあいとしたご近所付き合いは、現実的ではありません。どうすればいいのでしょうか。</p>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_blue mb3"><span class="alsok__ttl_ex">ひと声から始まる安心感あいさつから始めよう!</span></h4>
          <p class="mb3"><strong>基本はあいさつ。お付き合いとまではいかなくても、すれ違ったときに顔を合わせ、あいさつを交わし、こういう人が住んでいるんだなとお互いに認識し合うだけで、大きな違いがあります。</strong></p>
          <p class="mb3">また、子どもたちの登下校の時間帯に合わせて活動する、シルバー世代を中心とした防犯パトロールなども、お互いに声をかけ合ういい機会です。<br>地域のどこかでそうした人の目がある、コミュニケーションがあるという安心感を養っていく、それが現代のご近所付き合いの第一歩といえそうです。</p>
          <p class="mb3">あいさつから始まり、ゆるやかなつながりが育まれていけば、たとえば子どもたちが難しい年頃になっても周囲の大人たちが親御さんとともにさりげなく見守ることもできるでしょう。</p>
          <p class="mb3">ただし、小さな子どもたちは、<strong>近寄り過ぎに注意が必要</strong>です。親があいさつをしていたからと必要以上に親近感をもって近づき、万が一、危険な事態に巻き込まれる可能性も否定できません。<strong>子どもたちには「何かあったときには、この人とこの人はお母さんやお父さんが信頼できる人だから、ここに頼りなさい」と具体的なリストをつくって教えておくことを忘れないでください。そのうえで防犯機能付きケータイなどの防犯グッズを活用することを考えましょう。</strong></p>
          <figure class="center mb5">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/61/alsok61__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/61/alsok61__img02@2x.png"
              alt="ひと声から始まる安心感あいさつから始めよう｜<?php echo $pageTtl?>" style="max-width:423px" class="u-img__max u-only__pc center">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/61/alsok61__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/61/alsok61__img02-sp@2x.png"
              alt="ひと声から始まる安心感あいさつから始めよう｜<?php echo $pageTtl?>" style="max-width:223px" class="u-img__max u-only__sp center">
          </figure>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_blue mb3"><span class="alsok__ttl_ex">家庭内で、顔を見合わせ声を発することが大切</span></h4>
          <p class="mb3"><strong>さらに、ご近所付き合いの前に、家庭でのコミュニケーションを見直すことも大切です。</strong><br>今は家の中で家族がスマホで会話するというのも珍しくない光景。家の内外で言葉を発することが少ない時代。<strong>顔を合わせて声を発し会話することが大切です。まず家庭内から始めてみましょう。</strong>それがやがて地域のセキュリティの強化に結びつくはずです。現代人の一人ひとりが、周囲の人間関係やお付き合いを、今一度見つめ直してみたいものです。</p>
          <p class="mb3">ALSOKでは、ご高齢者、子ども、女性の「屋外での見守り」を可能にする端末を開発しています。転倒やライフリズムの異常を感知すると、ALSOKに通報。同時に指定通知先にメール送信。 さらに通話機能もあるので安心感が違います。</p>
          <p class="mb3">高度なICT技術と人間同士のつながりが、犯罪を未然に防ぐ大きな力となることは、間違いありません。</p>
          <figure class="center mb5">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/61/alsok61__img03.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/61/alsok61__img03@2x.png"
              alt="あいさつをする家族（イメージ）｜<?php echo $pageTtl?>" style="max-width:479px" class="u-img__max u-only__pc center">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/61/alsok61__img03-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/61/alsok61__img03-sp@2x.png"
              alt="あいさつをする家族（イメージ）｜<?php echo $pageTtl?>" style="max-width:241px" class="u-img__max u-only__sp center">
          </figure>
        </section>
        <div class="mt8 mt2_sp mb8 mb3_sp">
          <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
        </div>	
        <section>
          <h5>■関連記事</h5>
          <div class="u-photolist__row">
            <?php echo show_category_photoListalsok("alsok-mansion",$exceptcnt_id); ?>
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
