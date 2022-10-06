<?php
//base
include( "../../function.php" );
$content = get_id_data( '16002' );
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
        <h3 class="u-ttl__l">子どもたちを犯罪被害から守るための防犯対策</h3>
        <p class="mb3">小学生が通学途中で犯罪被害に遭うという痛ましい事件が、忘れたころに起こります。2017年に千葉で起きた小学生殺害事件は、記憶に新しいことでしょう。<br>子どもたちは、常に危険と隣り合わせだと強く実感させられる現状ですが、それでも防犯意識をしっかり身につけさせておけば、とっさの対応で違いが出ます。<br>そこで、登下校時における防犯対策について、ALSOKが開催している「あんしん教室」の話を伺いました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">行動しながら覚えることでしっかり身につける</span></h4>

          <p>主に小学校低学年を対象とした授業では、毎日の登下校時に、何か危険な目に遭いそうになったとき、身を守る術を<strong>「いかのおすし（イラスト参照）」</strong>をキーワードに学びます。</p>

          <figure class="u-float__right">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/55/alsok55__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/55/alsok55__img01@2x.png"
              alt="「いかのおすし」<?php echo $pageTtl?>" style="max-width:318px" class="u-img__max u-only__pc">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/55/alsok55__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/55/alsok55__img01-sp@2x.png"
              alt="「いかのおすし」<?php echo $pageTtl?>" style="max-width:265px" class="u-img__max u-only__sp center">
          </figure>
          <p>「いかのおすし」は不審者が接近してきたり、連れ去られそうになったとき『いか』ない、車に『の』らない、など、子どもたちがとるべき行動を示したもの。</p>
          <p>大切なことは、言葉を覚えるだけでなく、実践を通して身体で覚えることです。実際に、あんしん教室では不審者に扮した隊員が教室に現れ、子どもたちに声をかけたり、危険な場面を演じることで、とっさのときにどういう行動をとればいいかを、身をもって体験できるようにしています。</p>
          <p>また『お』おごえをだす、の項目では、実際に大声を出す練習をします。</p>
        </section>
        <section class="mb3">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">大人も陥りがちな思い込みの落とし穴</span></h4>
          <p>「しらないひとには、ついて『いか』ない」の項目で、複数の大人の写真を見せ「この中でついていってはいけない人は?」と聞かれたら、みなさんは、どう答えますか？</p>
          <figure class="center mb5">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/55/alsok55__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/55/alsok55__img02@2x.png"
              alt="「この中でついていってはいけない人は?」｜<?php echo $pageTtl?>" style="max-width:590px" class="u-img__max u-only__pc center">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/55/alsok55__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/55/alsok55__img02-sp@2x.png"
              alt="「この中でついていってはいけない人は?」｜<?php echo $pageTtl?>" style="max-width:218px" class="u-img__max u-only__sp center">
          </figure>
          <div class="u-assist">
            <h5>正解</h5>
            <p><strong>全員、ついて『いか』ないです。</strong></p>
          </div>
          <p>大人でも、このような質問をすると、いかにも不審者風の人はだめ、でも優しそうなこの人は大丈夫。と答えたりします。けれども、全員「しらないひと」なので、「ついて行ってはいけない」が、正解となります。</p>
          <p>また不審者情報を「おとなに『し』らせる」では、模擬体験の後、先生に知らせるとき多くの子どもたちが顔や服装などの記憶があいまいです。思い込みや緊張のせいで、正しい認識ができなくなってしまうのです。</p>
          <p>この２例は大人にもあてはまることでしょう。盲点も含めて対策を考え、大人が自らのこととして子どもに教えると、説得力があります。</p>
        </section>
        <section class="u-clearfix">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">反復練習と家族のコミュニケーションがカギ</span></h4>
          <figure class="u-float__right">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/55/alsok55__img03.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/55/alsok55__img03@2x.png"
              alt="「いかのおすし」<?php echo $pageTtl?>" style="max-width:308px" class="u-img__max u-only__pc">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/55/alsok55__img03-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/55/alsok55__img03-sp@2x.png"
              alt="「いかのおすし」<?php echo $pageTtl?>" style="max-width:212px" class="u-img__max u-only__sp center">
          </figure>
          <p class="mb3">防犯授業の後は、反復練習が何よりも効果的です。危険に遭遇したら、条件反射で大声を出せたり、逃げ出せたりという瞬時の行動が命を守るカギです。繰り返し身体に刷り込み、防犯体質を養うことが大切です。</p>
          <p>子どもに授業で「こんな防犯授業をしたよ」と報告されたら、それを家族みんなで関心をもって聞き、話し合ってみましょう。</p>
          <p>防犯コミュニケーションは、家族みんなの危機管理であると同時に、家族の「絆」という強い防犯力も養ってくれます。</p>
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
