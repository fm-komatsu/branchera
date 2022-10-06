<?php
//base
include( "../../function.php" );
$content = get_id_data( '18003' );
$pageTtl = $content[ 'title' ];
$exceptcnt_id = $content['contents_id'];

//meta
$metaTtl = 'ブランシエラマガジン「'.strip_tags($pageTtl).'」-'.siteName();
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
$release_month ="7";
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
        <h3 class="u-ttl__l">高齢者の快適な日常を守るために<br>病気や事故への不安、犯罪ターゲットになる怖れ‥</h3>
        <p class="mb3">ご高齢のみなさまを、さまざまな要因による危険から守るためには、どのような心掛けや注意が必要でしょうか。</p>
        <p class="mb3">高齢化が進み、一人暮らしやご夫婦だけの高齢世帯が増えています。<br>突然倒れてしまったら、万が一危険な目に遭いそうになってしまったらなど、日々健康や犯罪被害への不安はつきません。<br>そこで、ご高齢者とご家族の方が安心して日常を過ごすために、介助技能の習得にも取り組んでいるALSOKに話を伺いました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_green mb3"><span class="alsok__ttl_ex">ご近所みんなで見守るコミュニティパワー</span></h4>
          <div class="flex between">
            <div class="w50">
              <p class="mb3">最も身近で、今すぐに始められる対策は、<strong>ご近所の力を借りることです</strong>。近隣に親しい人がいれば、「郵便受けがいっぱいになっている」「ゴミ出しに出てこない」など日常のささいな変化に気づいて異常を察知してくれる場合があります。</p>
              <p class="mb3">幅広い世代に力を借りるためにも、イベントや防災訓練などには積極的に参加して、顔見知りを増やすといいでしょう。またご近所で顔を合わせたら、まずあいさつを交わすようにしましょう。<strong>多くの人の目が届くコミュニティの力は心強いお守りです</strong>。</p>
            </div>
            <figure class="w50 self-center">
              <img src="<?php echo $img_url; ?>/magazine/alsok/79/alsok79__img01@2x.png"
                alt="ご近所みんなで見守るコミュニティパワー（イメージ）<?php echo $pageTtl?>" style="max-width:527px" class="u-img__max u-only__pc center" loading="lazy">
              <img src="<?php echo $img_url; ?>/magazine/alsok/79/alsok79__img01-sp@2x.png"
                alt="ご近所みんなで見守るコミュニティパワー（イメージ）<?php echo $pageTtl?>" style="max-width:265px" class="u-img__max u-only__sp center" loading="lazy">
            </figure>
          </div>
        </section>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_green mb3"><span class="alsok__ttl_ex">ご自身の心構えとご家族の支えでリスク減に</span></h4>
          <p class="mb3">歳を重ねると誰しも身体に衰えを感じ、判断能力が鈍るのはやむを得ないことですが、最近では、新型コロナウイルス感染症対策のための外出自粛の長期化などの影響で、運動不足からくるご高齢者の生活機能の低下も懸念されています。<br>生活機能の低下を予防するためには、ご自身でできることを基本として、無理をせず体調に合わせて生活習慣を見直すことが大切です。</p>
          <div class="flex between">
            <div class="w50">
              <p class="mb3">しかしご本人は「まだまだ大丈夫」という思いも強いもの。そこで重要になるのがご家族とのコミュニケーションです。ご家族が何か気になることがあれば話を聞き、さりげなくアドバイスをしましょう。<strong>ご本人とご家族が遠方で離れていればなおさら密に連絡を取り合い、継続的に関わることで、身体や心の変化に少しでも早く気づいてあげることができるかもしれません</strong>。</p>
              <p class="mb3">つねに連絡を取り合っていれば、高齢者を狙った振り込め詐欺のような犯罪にも騙されにくいはずです。ご家族の絆が不安を安心に導きます。</p>
            </div>
            <figure class="w50 self-center">
              <img src="<?php echo $img_url; ?>/magazine/alsok/79/alsok79__img02@2x.png"
                alt="ご自身の心構えとご家族の支えでリスク減に（イメージ）<?php echo $pageTtl?>" style="max-width:527px" class="u-img__max u-only__pc center" loading="lazy">
              <img src="<?php echo $img_url; ?>/magazine/alsok/79/alsok79__img02-sp@2x.png"
                alt="ご自身の心構えとご家族の支えでリスク減に（イメージ）<?php echo $pageTtl?>" style="max-width:265px" class="u-img__max u-only__sp center" loading="lazy">
            </figure>
          </div>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_green mb3"><span class="alsok__ttl_ex">緊急通報サービスの活用で日常生活の不安が軽減</span></h4>
          <p class="mb5 mb3_sp">ご高齢者は日頃から突然具合が悪くなったり、倒れてしまったりしたらどうしようと、不安を抱えがちです。<br><strong>実は、ご高齢者様の家庭内事故は、交通事故よりも多いのです</strong>。<br>そうした万が一の場合には、<strong>簡単な操作で助けを呼べる緊急通報サービスなどを活用することで、ご高齢者とご家族ともに日常生活の不安が軽減され、より安心感を高められることでしょう</strong>。<br>日々の暮らしを安心してお過ごしいただくためには、まずはご家族と一緒に考え、対策をしていくことが大切です。</p>
          <div class="u-assist mb3">
            <p>長谷工コミュニティのご高齢者向けサービス「<strong>長谷工あんしん見守りサービス</strong>」は、離れて暮らすご両親・ご親族を「そっと」見守ります。ご高齢者のご自宅に人感センサーなどの機器を置いて、ご家族が日々の様子をパソコンやスマートフォン等から「いつでも」・「どこからでも」ご確認いただけるサービスです。</p>
          </div>
          <a href="<?php echo $base_url ?>/magazine/article/senior.php" class="u-btn_brand u-icon center mb5">詳しくはこちら</a>
          <a href="<?php echo $base_url ?>/magazine/article/senior.php">
            <figure class="center mb5 mb3_sp">
              <img src="<?php echo $img_url; ?>/magazine/alsok/79/alsok79__img03@2x.jpg"
                alt="「長谷工あんしん見守りサービス」<?php echo $pageTtl?>" class="u-img__max u-only__pc center" loading="lazy">
              <img src="<?php echo $img_url; ?>/magazine/alsok/79/alsok79__img03-sp@2x.jpg"
                alt="「長谷工あんしん見守りサービス」<?php echo $pageTtl?>" class="u-img__max u-only__sp center" loading="lazy">
            </figure>
          </a>
        </section>
        <div class="mt6 mt2_sp mb8 mb3_sp">
          <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
        </div>
        <section>
        <h5>■関連記事</h5>
        <div class="u-photolist__row">
          <?php echo show_category_photoListalsok("alsok-senior",$exceptcnt_id); ?>
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
