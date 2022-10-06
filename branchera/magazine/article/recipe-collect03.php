<?php
//base
include( "../../function.php" );
$content = get_id_data( '13003' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '野菜の下ごしらえと保存方法をまとめてご紹介します。定番のブロッコリー、かぼちゃ、里芋、アスパラガスなど、9種の野菜の皮むきやアク抜きの手順を動画とテキストで解説します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '104';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe recipe-collect";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//導入文
$introTxt = '【野菜の下ごしらえ＆保存方法】をまとめてご紹介します。';

//セリフ
$sp01 = array ( //'icon','icon-num','text'
  //フラッキー　通常
  array('fl','01','野菜の下ごしらえ、面倒くさがらずにちゃんとできているか～？<br>
  それぞれの野菜に適した下ごしらえをすることで、<br class="u-only__pc">
  料理が一段と美味しくなるぞ！<br>
  正しい下ごしらえをマスターすることが、料理上手への近道だ！<br>
  保存方法や時短レシピまで、まとめて教えてやるぜ～！
'),
);

$info = array (
/* template
  array (
    'title' => '',
    'text' => '',
    'moveid' => '',
    'btn' => '',
    'link' => 'recipe-technic'
  ),
*/
  array (
    'title' => 'ブロッコリーの正しいゆで方',
    'text' => '栄養満点のブロッコリーは、適度に歯ごたえを残すのが美味しく食べるコツ。鍋でゆでるだけでなく、電子レンジや圧力鍋でも調理できますよ。',
    'moveid' => 'wSLggmREfAQ',
    'btn' => 'ブロッコリーの正しいゆで方',
    'link' => 'recipe-technic46'
  ),
  array (
    'title' => 'かぼちゃの下ごしらえ方法をメニュー別に解説！',
    'text' => 'かぼちゃの下ごしらえは、まずワタとヘタの処理から始めます。基本の下ごしらえのほか、コロッケ、煮物、<a href="'.$base_url.'/magazine/article/recipe-technic82.php" class="recipe-design__link">天ぷら</a>など、メニュー別の下ごしらえをご紹介！<br>
    下ごしらえしたかぼちゃを<a href="'.$base_url.'/magazine/article/recipe-technic63.php" class="recipe-design__link">裏ごし</a>すれば、お菓子作りにも重宝しますよ。
    ',
    'moveid' => 'a1Mbu2si_KM',
    'btn' => 'かぼちゃの下ごしらえ方法',
    'link' => 'recipe-technic31'
  ),
  array (
    'title' => '里芋の下ごしらえ',
    'text' => 'ヌルっとしていて、下ごしらえが面倒だと思われがちな里芋。手を滑らせることなく、簡単に皮むきや下ゆでをする方法をご紹介します。<br>
    中でも皮ごと電子レンジで加熱する方法は、包丁いらずで皮むきができるので、時短にも！早速記事と動画で、詳しい手順を確認しましょう♪
    ',
    'moveid' => 'AcmeNQ6-22c',
    'btn' => '里芋の下ごしらえ',
    'link' => 'recipe-technic66'
  ),
  array (
    'title' => 'アボカドのむき方',
    'text' => 'クリーミーな味わいで大人気のアボカド。皮のむき方と種の取り方、変色しない保存方法を解説します。見極めが難しい、食べ頃の美味しいアボカドを選ぶポイントも！',
    'moveid' => 'V-OFnGfHsYE',
    'btn' => 'アボカドのむき方',
    'link' => 'recipe-technic68'
  ),
  array (
    'title' => 'オクラの下ごしらえ',
    'text' => 'オクラならではの食感と粘りをより美味しく味わえる、下ごしらえ方法と保存方法をご紹介。オクラはカレーやチーズフォンデュなど、さまざまな料理で活躍するほか、離乳食にもおすすめの食材です。ぜひこの機会に、正しい下ごしらえの方法を覚えておきましょう！',
    'moveid' => 'wOGXdmVl8Dw',
    'btn' => 'オクラの下ごしらえ',
    'link' => 'recipe-technic69'
  ),
  array (
    'title' => 'きのこは洗う？洗わない？風味が落ちない下ごしらえ方法',
    'text' => '市販のきのこは、基本的に水で洗う必要はありません！記事では、その理由と正しい下ごしらえの手順を詳しく解説します。また、きのこを保存する際は、意外にも冷凍保存がおすすめ。うまみ成分が生成され、美味しさがアップしますよ。',
    'moveid' => 'sqxWgEEu-cI',
    'btn' => 'きのこの下ごしらえ',
    'link' => 'recipe-technic27'
  ),
  array (
    'title' => 'アスパラガスのゆで方',
    'text' => 'ちょうどよいゆで加減にするのが、なかなか難しいアスパラガス。シャキッとした食感で色鮮やかに仕上げるには、下処理とゆで時間にコツがあります。冷蔵・冷凍それぞれの保存方法もご紹介します。',
    'moveid' => 'xnvbn-Mq6AY',
    'btn' => 'アスパラガスのゆで方',
    'link' => 'recipe-technic76'
  ),
  array (
    'title' => 'たけのこのアク抜きは意外と簡単！基本の下ごしらえ方法',
    'text' => '野菜の下ごしらえの中でも、特に手間がかかる印象のあるたけのこ。実は、意外と簡単な手順でアク抜きができるんです。市販の水煮に比べて風味や香りが強くなり、とても美味しく仕上がりますよ。ぜひ挑戦してみましょう！',
    'moveid' => 'WV5e54FUnd4',
    'btn' => 'たけのこのアク抜き',
    'link' => 'recipe-technic77'
  ),
  array (
    'title' => 'セロリの筋取りはこれでOK！基本の下ごしらえ方法',
    'text' => '年中、手に入りやすい便利な食材、セロリの下ごしらえのご紹介です。生のままでも加熱しても美味しいセロリは、調理の前に茎の表面にあるかたい筋を取りのぞく必要があります。食感や香りを生かす切り方もお伝えします！',
    'moveid' => 'phybnfpPQ38',
    'btn' => 'セロリの下ごしらえ',
    'link' => 'recipe-technic79'
  ),
  array (
    'title' => '種類別に解説！野菜の冷凍保存方法',
    'text' => '最後は野菜の冷凍保存方法のご紹介です。事前に下ごしらえした野菜を冷凍保存しておけば、日持ちするうえにお料理の時短につながります！<br>
    本記事では、玉ねぎ、にんじん、なすなど、12種の定番野菜を冷凍保存する方法を解説♪冷凍野菜を使った簡単スープや、離乳食の作り方もご紹介します！
    ',
    'moveid' => 'tXMSVlGU3UU',
    'btn' => '野菜の冷凍保存方法',
    'link' => 'recipe-technic33'
  )
);
?>
<main class="main">
  <article class="main__row">
    <?php
      $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
      $panAry[] = array( "/magazine/index_comic02.php", "うちのご飯は世界イチ まとめ記事" );
      include( $inc_path . "/lib/inc/pan.php" );
      // SP時サムネにタイトルを表示するかフラグ
      $thumTtlFlg = 'off';
      include($inc_path . "/lib/inc/page/_magazine/__comic02tech-new-header.php");
      include($inc_path . "/lib/inc/page/_magazine/__recipe-collect-main-v.php");
    ?>
    <!-- 220805追加 -->
		<div class="mt3 mt2_sp mb5 mb3_sp">
			<div>
				<?php $CmGtmId = "1"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php");?>
			</div>
		</div>
		<!-- /220805追加 -->
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header recipe-collect">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num">　</span>
          <span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」でこれまでご紹介してきたレシピやお料理の基本の中から、<?php echo $introTxt ?></p>
      </div>
      <hr class="recipe__line">
      <?php
        for($i = 0, $size = count($sp01); $i < $size; ++$i) {
          $recipeIcon = $sp01[$i][0].'_'.$sp01[$i][1];
          $speech = $sp01[$i][2];
          include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
        }
      ?>
      <div class="mb3">
        <?php include ($inc_path."/lib/inc/page/_magazine/__comic02_pr.php"); //PR記事 ?>
      </div>
      <?php
        for($i = 0, $size = count($info); $i < $size; ++$i) {
          $collectTtl = $info[$i]['title'];
          $collectTxt = $info[$i]['text'];
          $collectMv = $info[$i]['moveid'];
          $collectBtn = $info[$i]['btn'];
          $collectLink = $info[$i]['link'];
          include ($inc_path."/lib/inc/page/_magazine/__recipe-collect-cnt.php");
        }
      ?>

      <div>
      <?php
        include ($inc_path."/lib/inc/page/_magazine/__recipe-collect-footer.php");
      ?>
      </div>
    </section>
  </article>
</main>
<?php
  $toindex_url = "/magazine/index_comic02.php";
  include( $inc_path . "/lib/inc/toindex__magazin.php" );
  ?>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<!-- 220805追加 -->
<div class="main__row pt0_sp mb2_sp">
	<div>
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php"); ?>
	</div>
</div>
<!-- /220805追加 -->
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
