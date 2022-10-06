<?php
//base
include( "../../function.php" );
$content = get_id_data( '16004' );
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
        <h3 class="u-ttl__l">家族の絆と防犯機能付きグッズで<br>子どもたちの安全をサポート</h3>
        <p class="mb3">新学期がスタートして数カ月あまりがたちました。毎朝、元気に登校する子どもたちの姿に、うれしさと心配が入り混じるのが、親御さんの気持ちではないでしょうか。子どもたちが一人で行動するとき何かアクシデントにあったら…。 <br>今回はそんな不安をやわらげる対策について、ALSOKに話を伺いました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">リスクを想定して対策を考える</span></h4>
          <figure class="u-float__right u-only__pc">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/53/alsok53__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/53/alsok53__img01@2x.png"
              alt="「リスクを想定して対策を考える」<?php echo $pageTtl?>" style="max-width:299px" class="u-img__max u-only__pc">
          </figure>
          <div class="u-clearfix">
            <p class="mb1">春の入学・進学シーズンは、子どもたちは、期待に胸をふくらませてワクワクしたり、一方で、友達や先生など新しい人間関係に緊張したりと、普段とくらべて冷静な判断がしにくくなりがちです。</p>
            <p class="mb1">そして夏になり、夏休みなどで緊張が抜けたころが、トラブルに遭遇しやすい時期にあたります。<br>通学途中、ふとしたはずみで道に迷ってしまった、知らない人に道を聞かれた…など、子どもたちはみんな、成長する過程で初めて出会うとまどいや困ったことを、克服していかなくてはなりません。</p>
            <p><strong>大切なことは、まず子どもたちが学校や家庭生活の中で遭遇しそうなトラブルを想定して、危険を回避するための方法と対策を、親子でシミュレーションしてみることです。</strong></p>
          </div>

          <p>たとえば、</p>
          <div class="u-assist">
            <ol class="u-list__ol_circle-num mt0 mb0">
              <li>学校への通学路を一緒に歩き、人通りが少ない、薄暗い、などの犯罪リスクの高そうなところをチェックして、別の安全な道を探す。</li>
              <li>知らない人に声をかけられたり、車に乗るように言われたりしても絶対について行かないよう、なぜダメなのかの理由も含めて、子どもたちが納得できるよう親子で話し合い、確認しておく。</li>
            </ol>
          </div>


          <p>そのうえで、より安心感を高めるためには、防犯機能付きグッズの活用もおすすめいたします。</p>
          <figure class="center u-only__sp">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/53/alsok53__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/53/alsok53__img01@2x.png"
              alt="「リスクを想定して対策を考える」<?php echo $pageTtl?>" style="max-width:299px" class="u-img__max u-only__sp center">
          </figure>
        </section>
        <section class="mb3">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">ガードマンが駆けつける防犯グッズ</span></h4>
          <div class="flex between">
          <div class="w70">
          <p>ALSOKのGPS搭載の携帯通報端末は、「キッズケータイ」よりも操作も簡単で見守り機能も強化されています。<br>子どもたちが学校や塾での帰り道、危険な目にあいそうになったとき、緊急通報ボタンを押すだけでALSOKにつながり、すぐにガードマンが駆けつけてくれます。<br>また、GPS機能で位置情報が提供されるため、子どもが今どこにいるかスマホで常に確認でき、親御さんなど事前に登録した番号からは通話もできるので、緊急時もスピーディな対応が可能です。</p>
          </div>
          <figure class="w30 center">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/53/alsok53__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/53/alsok53__img02@2x.png"
              alt="「ガードマンが駆けつける防犯グッズ」｜<?php echo $pageTtl?>" style="max-width:208px" class="u-img__max">
          </figure>
          </div>
        </section>
        <section class="u-clearfix">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">家族の絆を深めることが大切</span></h4>

          <p class="mb2">子どもの防犯対策は、もともと家族単位で考えるべきもの。単に携帯電話を持たせれば安心というのではなく、渡すときに何のために持つのか、親が子どもを常に心配して気にかけていることなどをしっかり伝えましょう。</p>
          <p><strong>お互いの気持ちを伝え合い分かり合うこと、家族の“絆”を強くすることが本当の意味でのセキュリティにつながります。トラブルに巻き込まれない強い心を育むことも大切です。</strong></p>
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
