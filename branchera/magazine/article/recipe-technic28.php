<?php
//base
include( "../../function.php" );
$content = get_id_data( '15028' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「新米の炊き方」を動画で解説。秋に収穫され、その年を超えるまでの間に精米・包装された新米を美味しく炊くコツをご紹介します。また、土鍋や圧力鍋を使って炊く方法もご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '102';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'cpZ4-SGexqM';

//導入文
$introTxt = '第28回は、「新米の炊き方」です。新米を美味しく食べられる炊き方をご紹介します。';


//キャプチャALTタグ
$altCap01 = '新米とは、秋に収穫され、その年を超えるまで（～12月31日）の間に精米・包装された米のことを指します。収穫から時間が経っていないことから、多くの水分を含んでいるのが特徴です。';
$altCap02 = '1合（180㏄）の計量カップで、山盛りに新米を入れます。';
$altCap03 = '指や箸などで、平らにします。';
$altCap04 = 'たっぷりの水を加えます。';
$altCap05 = '軽く2～3回かき混ぜたら、すぐに水を捨てます。';
$altCap06 = '指先を立ててやさしく弧を描くように20回ほどかき混ぜます。';
$altCap07 = '同様に水を加え、軽く混ぜる作業を2回ほど繰り返して、画像と同じくらい水が半透明になればOK。浸水させる場合は、20分ほど浸水させます。<br>※現在の炊飯器は、といですぐ浸水なしで炊けるものも多いです。不安な方は、取扱説明書を見て確認しましょう。';
$altCap08 = '炊飯器の内窯にといだ新米を移します。新米は水分を吸収しやすい性質のため、炊く分量の目盛りより1～2mm分少ない水を加えます。';
$altCap09 = '炊飯器にセットし、炊き上がったら蓋を開けます。';
$altCap10 = 'すぐに底から空気を入れるようにほぐして混ぜます。';
$altCap11 = 'ふっくらと空気が入るようによそいましょう。';
$altCap12 = 'なお、炊飯器で炊くとかたくてパサパサしがちな玄米も、圧力鍋を使えばふっくらモチモチの炊きあがりに。<br>
圧力鍋を使う場合は、玄米の水気を切ったら1〜2割増しの水に少々の<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>を加えて1時間以上浸水させたあと25分程度加熱し、10分蒸らします。<br>圧力切替タイプの鍋の場合は、取扱説明書を確認してください。';

?>
<main class="main">
  <article class="main__row">
  <?php
    $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
    $panAry[] = array( "/magazine/index_comic02.php", "今さら聞けない料理のアレコレ" );
    include( $inc_path . "/lib/inc/pan.php" );
    include($inc_path . "/lib/inc/page/_magazine/__comic02tech-header.php");
    include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-main-v.php");
    ?>

    <!-- 220805追加 -->
    <div class="mt3 mt2_sp mb5 mb3_sp">
      <div>
        <?php $CmGtmId = "1"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php");?>
      </div>
    </div>
    <!-- /220805追加 -->

    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header technic">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num">　</span>
          <span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br><?php echo $introTxt ?></p>
      </div>
      <hr class="recipe__line">
      <?php
        $recipeIcon ='masaki_01';
        $speech ='マユ先生、6月に友人に田植えの体験イベントに誘われて<br class="u-only__pc">コウちゃんと一緒に行ってきたんです！<br>久しぶりに自然に触れ合うことができて楽しかったな～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='お米を初めから作るのって大変ですよね<br>コウちゃんも、田植えを楽しめてよかったね♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='kou_01';
        $speech ='まゆせんせい<br>パパね、こしがイタタだったんだよ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='masaki_02';
        $speech ='コっコウちゃん、余計な事言わないの！<br>…あ、そうそうイベントのお土産で新米をもらって<br class="u-only__pc">早速炊いてみたんですけど、お米がべちゃっとしちゃって…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='新米は水加減がポイントですよ<br>今回は、新米の美味しい炊き方をご紹介しますので<br class="u-only__pc">一緒にやりましょう♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php include ($inc_path."/lib/inc/page/_magazine/__comic02_pr.php"); //PR記事 ?>
      <div class="recipe__movie recipe-movie technic">
        <h3 class="recipe-movie__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
           alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
        </h3>
        <div class="recipe-movie__video">
          <div class="recipe-movie__video_base">
            <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">そもそも新米の定義とは？</h3>
          <p class="mb3">「新米は美味しい」といわれ、秋頃に米屋さんの店頭に並ぶ様子は壮観ですよね。新米と古米では、どんな違いがあるのでしょうか？</p>
          <h4 class="recipe__ttl">収穫年の年末までに包装された米</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-01@2x.jpg"
                 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap01); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">古米と新米の違いは「水分」</h4>
          <p class="mb2">毎年9〜10月に出回り始める新米。「ただ炊いただけの米が、何でこんなに美味しいんだろう…」と感激したことがある人もいるかもしれません。<br>新米がその年の米であるのに対し、古米は前年に収穫・包装された米のこと。<br>ちなみに前々年の米を古古米（ここまい）、その前年の米を古古古米（こここまい）といいます。</p>
          <p class="mb2">新米は水分量が多くやわらかくて粘りがあり、香りも抜群。古米はかためで水分量・粘りは少なく、古米特有の香りがあることなどがその違いです。</p>
          <p class="mb3">ただ、現在では米の貯蔵方法や調理法が進化・確立されてきています。湿度や温度を調整し、しっかりと保存されているため、古米でも美味しく食べることができますよ。</p>
          <h3 class="recipe__ttl_l mb0">新米の美味しい炊き方</h3>
          <p class="mb3">新米を美味しく炊くには、水分量の調整がポイント。上手に炊くためのコツを詳しくお教えします。</p>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-02@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-03@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-04@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-05@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-06@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-07@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-08@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-09@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?></dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-10@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap10); ?></dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-11@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap11); ?></dd>
          </dl>
          <section>
            <div class="recipe-design__check check mb3">
              <div class="check__row">
                <div class="check__ttl">
                  <h4 class="check__ex center">
                    <img
                    data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png"
                    data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png"
                    alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
                  </h4>
                </div>
                <h3>無洗米の場合はどうやって炊くの？</h3>
                <p>無洗米とは、米ぬかをあらかじめ取り除いてある米のこと。粘りの強い米ぬかが残っていないため、米をとぎ洗いする必要はありません。</p>
                <p>無洗米を炊く場合、普通の軽量カップに入れると、米ぬかがない分白米より米自体の量が多くなります。できれば無洗米専用の計量カップで量り、水は炊飯器の目盛りより多く入れましょう。米1カップにつき<a href="<?php echo $base_url ?>/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>1～2杯の水をプラスするのがポイントです。</p>
              </div>
            </div>
          </section>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">炊飯器以外の炊き方</h3>
              <p class="mb2">米は炊飯器で炊くものと思っている人が多いかもしれませんが、鍋で炊いても美味しくいただけるんですよ！</p>
              <h4 class="recipe__ttl_s">土鍋や鍋で炊く場合</h4>
              <p class="mb2">鍋で新米を炊くときは、洗ってしっかり水気を切った米を使いましょう。新米を鍋に入れたら米の1割増しの水を加え、夏場は30分、冬場は1時間～1時間30分ほど浸水させます。</p>
              <p class="mb2">蓋をして<a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけて沸騰させ、土鍋の場合は蒸気が立ってきたら弱火にして15分加熱。<br>詳しくは「<a href="<?php echo($base_url)?>/magazine/article/recipe-technic29.php" class="recipe-design__link">土鍋ご飯の炊き方</a>」で説明しています。</p>
              <p class="mb2">ステンレスなどの鍋の場合は蓋をして沸騰させたら弱火で10分ほど加熱し、ピシピシと音が鳴り出したら火を止めます。土鍋のおこげは香ばしくて美味しいですが、普通の鍋だと焦げつくと大変なので、様子を見ながら加熱しましょう。</p>
              <p class="mb3">土鍋も普通の鍋も、蓋を開けて、泡が立っていたら弱火で1～2分追い炊きしてください。蓋を開けたことで中の温度が下がっているので、中火で10秒加熱します。そのまま10分蒸らしたらできあがり！</p>
              <h4 class="recipe__ttl_s"><a href="<?php echo $base_url ?>/magazine/article/recipe-technic154.php" class="recipe-design__link">圧力鍋</a>で炊く場合</h4>
              <p>圧力鍋を使うと、ほかの鍋よりさらに簡単に新米が炊けます。圧力鍋だと、浸水せずにそのまま炊ける場合が多いからです。もしやわらかめの米が好きという場合は、30分ほど水に浸けてから炊きましょう。<br>あとは蓋をして5分加熱し、10分蒸らしたらできあがりです。圧力切替タイプの鍋の場合は、取扱説明書に合わせてください。</p>
            </section>
          </div>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/28/tech28-12@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap12)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap12); ?></dd>
          </dl>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">まるで新米！？古米を美味しく食べるコツ</h3>
              <p class="mb2">古米も、表面についたぬか臭さや酸化した部分を取ることで、より美味しく食べることができます。強めにといで、透明になるまで水を取り替えましょう。<br>また、乾燥している古米は、水を加えると炊きあがるごはんの量が増えます。ふっくらさせるためにも、1時間以上浸水してから炊くのがベター。</p>
              <p>そして、パサパサした食感を無くす裏技は、もち米をプラスすること！<br>古米に対して1割程度のもち米を加え、水も同量増やして炊きましょう。新米と間違えるくらいに美味しく炊き上がりますよ。色つやも格段によくなるので、ぜひお試しを。</p>
            </section>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='masaki_01';
        $speech ='いろいろあったけど、前に習った基本の「<a href="'.$base_url.'/magazine/article/recipe-technic20.php" class="recipe-design__link">美味しいお米の炊き方</a>」とだいたい同じ手順なんですね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='そうですね、ただ新米はとぎ方からしっかりと手をかけることで、美味しく炊くことができますよ。適度にやさしく素早くとぎましょう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='masaki_01';
        $speech ='よーし、次は失敗しないぞー！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='kou_03';
        $speech ='コウちゃんもしんまいたべる♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15151'),
				array ('recommend-recipe-id','15056'),
				array ('recommend-recipe-id','15086'),
				array ('recommend-recipe-end')

				);
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
			?>
      <div class="mb0">
        <?php
        include ($inc_path."/lib/inc/page/_magazine/__recipe-technic-footer.php");
      ?>
      </div>
    </section>
  </article>
</main>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<!-- 220805追加 -->
<div class="main__row pt0_sp mb2_sp">
	<div>
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php"); ?>
	</div>
</div>
<!-- /220805追加 -->
<?php
  $toindex_url = "/magazine/index_comic02.php";
  include( $inc_path . "/lib/inc/toindex__magazin.php" );
  ?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
