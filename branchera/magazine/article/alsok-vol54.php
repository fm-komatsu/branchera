<?php
//base
include( "../../function.php" );
$content = get_id_data( '16001' );
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
        <h3 class="u-ttl__l">大人も地域も一体となって子どもたちを守り、防犯意識を育む</h3>
        <p class="mb3">子どもたちが犯罪被害に遭う危険性は、日常生活のあらゆるところに潜んでいます。<br>親をはじめ大人たちは、子どもたちをどう守ればいいのでしょうか。ALSOKでは全国の小学校で「あんしん教室」を展開しています。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">何が危険か自分で考えて「気づかせる」</span></h4>

          <p>子どもたちが犯罪被害者にならないためには、まず防犯意識をしっかり身につけさせることが必要です。<br>防犯意識を身につけさせることは、怖がらせたり、不安に感じさせることではなく、何が危険で、どうしたらその危険から身を守ることができるのかを、自分で判断する力を養うことです。</p>

          <figure class="u-float__right">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/54/alsok54__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/54/alsok54__img01@2x.png"
              alt="<?php echo $pageTtl?>" style="max-width:120px" class="u-img__max u-only__pc">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/54/alsok54__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/54/alsok54__img01-sp@2x.png"
              alt="<?php echo $pageTtl?>" style="max-width:109px" class="u-img__max u-only__sp center">
          </figure>
          <p>たとえば、知らない人に声をかけられた場合を想定して、「こう言われたときはどうする」といろいろなパターンで聞き、子どもたちが答えたらさらに「どうしてそう思ったの？どうすればいいの？」と質問を繰り返して、<strong>自ら考えて答えを「気づかせる」ことがポイントです。</strong></p>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">マンション全体の意識を高め子どもたちを守る</span></h4>
          <p>実際に、小学生の子どもたちが犯罪被害に遭った事例を場所別に見ると、多い順に</p>
          <div class="u-assist">
            <ol class="u-list__ol_circle-num mt0 mb0">
              <li>路上</li>
              <li>公園・空地</li>
              <li>駐車場・駐輪場</li>
            </ol>
          </div>
          <p class="mb3">となっています。</p>
          <p class="mb3">また注意すべきは駐車（輪）場と合わせて、マンション敷地内での防犯対策に居住者と地域が一体となって取り組む必要性があります。監視カメラや非常通報システムなど、ハード面の強化も重要ですが、共用部にゴミが散らかっていたり、自転車置場が乱れていたり、付近に違法駐車が多いといった、犯罪者を招きやすい環境を一掃することが効果的です。</p>
          <p class="mb5">もちろん居住者同士、大人も子どもも声をかけ合い、コミュニケーションを活発にすることが何よりの抑止力につながります。</p>
          <figure class="center mb5">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/54/alsok54__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/54/alsok54__img02@2x.png"
              alt="グラフ＜右＞被害にあった時間帯、＜左＞被害にあった場所｜<?php echo $pageTtl?>" style="max-width:720px" class="u-img__max u-only__pc center">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/54/alsok54__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/54/alsok54__img02-sp@2x.png"
              alt="グラフ＜右＞被害にあった時間帯、＜左＞被害にあった場所｜<?php echo $pageTtl?>" style="max-width:268px" class="u-img__max u-only__sp center">
          </figure>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">実践的に学びながら反復して身につける</span></h4>
          <p class="mb3">ALSOKでは、現役のガードマンをはじめとした社員が、全国の小学校に出向き、一人ひとりの自発的な「防犯意識」を育むことを目的にした「あんしん教室」を開催しています。<br>低学年向け、中学年向け、高学年向けと学年に応じたプログラムがあり、2012年4月からは心肺蘇生やAEDについて学ぶ救急救命授業（高学年向け）も加わりました。</p>
          <p>「あんしん教室」では言葉で伝えるだけでなく、体験を交えながら楽しく実践的に学びます。<br>子どもたちは真剣に授業を受けていますが、時間内で内容を十分に理解し、身につけられるかというと難しい面もあります。家庭でも防犯について話し合うなど、繰り返しの学習が大事です。</p>
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
