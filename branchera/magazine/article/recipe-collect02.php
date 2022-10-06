<?php
//base
include( "../../function.php" );
$content = get_id_data( '13002' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '卵料理の簡単レシピを、７つご紹介します。割り方やゆで方といった基本情報を始め、温泉卵、ポーチドエッグ、ふわとろオムレツなど、シンプル＆簡単な卵料理レシピをまとめて動画とテキストで解説！';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = 'null' ;

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
$introTxt = '卵料理の基本レシピをまとめてご紹介します。';

//セリフ
$sp01 = array ( //'icon','icon-num','text'
  //フラッキー　通常
  array('fl','01','栄養満点で美味しい卵は<br class="u-only__pc">子どもから大人まで、みんな大好きだよな！
  </p>
  <p class="mt2">
  卵料理は簡単なものも多いから、料理初心者にもってこいだぜ！<br>卵の割り方から卵だけで作れるレシピ、オムレツやだし巻き卵などの人気卵料理まで<br class="u-only__pc">
まとめて教えてやるから、しっかりついてこいよ！
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
    'title' => '簡単きれい！手に付かない卵の割り方',
    'text' => 'まずご紹介するのは、卵料理の基本となる「卵の割り方」です。殻が入ってしまったり、黄身が壊れてしまったりと、卵をきれいに割るのは意外と難しいですよね。コツは、卵にヒビを入れるとき、平らな場所に打ち付けること。卵の割り方をマスターすれば、卵かけご飯にしたり、納豆に混ぜたりして、調理せずとも美味しい卵料理が楽しめますよ♪<br>    気になるカラザの取り方や、卵黄と卵白を分ける方法、うずらの卵の割り方まで、詳しく解説します！',
    'moveid' => 'tvzBGLeLn8Q',
    'btn' => '卵の割り方',
    'link' => 'recipe-technic08'
  ),
  array (
    'title' => '簡単＆時短！基本のゆで卵の作り方・コツ',
    'text' => '続いては、卵だけで作れる簡単レシピをいくつかご紹介。まずは「ゆで卵の作り方」です。ゆでる前に卵にヒビを入れておくことで、殻をきれいにむくことができます。<br>沸騰したお湯でゆでる場合、ゆで時間の目安は固ゆでが12分、普通が10分、半熟が7分。黄身の固さを変えることで、卵料理の幅も広がりますよ。',
    'moveid' => 'YxLxk31wvCM',
    'btn' => 'ゆで卵の作り方',
    'link' => 'recipe-technic10'
  ),
  array (
    'title' => '放置するだけ！簡単温泉卵の作り方',
    'text' => 'プルプル、とろっとした食感がたまらない「温泉卵」。難しそうに思われがちですが、実は70度前後のお湯に浸けて約30分放置するだけで簡単にできるんです！小皿に割り入れてだし醤油をかければ、それだけでおかずの一品になりますよ。また、丼ものやうどん、<a href="'.$base_url.'/magazine/article/recipe-technic64.php" class="recipe-design__link">パスタ</a>にのせればグッと豪華に。とろとろしているため野菜と絡みやすく、サラダのトッピングにもぴったりです。食べ方は無限大！ぜひいろいろな料理に活用してくださいね。',
    'moveid' => 'ApVFMo_OPwA',
    'btn' => '温泉卵の作り方',
    'link' => 'recipe-technic54'
  ),
  array (
    'title' => 'ポーチドエッグの作り方。人気レシピをご紹介！',
    'text' => '簡単でおしゃれな「ポーチドエッグ」は、ゆで卵や温泉卵に比べて調理時間が短いため、忙しい朝にもおすすめの一品。沸騰したお湯をかき混ぜて渦を作り、中心に卵を落として固めます。このとき、卵を入れる前に酢を入れることで、表面が固まりきれいに仕上がります。キャベツやほうれん草などの野菜に添えるほか、他の具材と共にマフィンにのせてエッグベネディクトにするのもおすすめ！お好きなアレンジをお試しください♪',
    'moveid' => '6-YJFLK9Rls',
    'btn' => 'ポーチドエッグの作り方',
    'link' => 'recipe-technic57'
  ),
  array (
    'title' => '基本のふわとろオムレツの作り方',
    'text' => '卵料理のなかでも特に人気の高い「オムレツ」。お店で出てくるようなふわふわ・とろとろのオムレツは、ちょっとしたコツを押さえるだけで、ご家庭でも簡単に再現できるんです！お皿に取り出す際は、フライパンの柄を逆手で持ってひっくり返すと、きれいな形を保ちやすいですよ。基本のプレーンオムレツをマスターしたら、ひき肉や納豆など、具入りのオムレツにも挑戦してみてくださいね！',
    'moveid' => 'sv99SVy6QOk',
    'btn' => '基本のオムレツの作り方',
    'link' => 'recipe-technic48'
  ),
  array (
    'title' => '錦糸卵の作り方',
    'text' => 'お料理を華やかに彩ってくれる「錦糸卵」。トライしたことはあるけど、どうしても薄焼き卵が破れてしまう…という方もいるかもしれませんね。<br>
    失敗せずに薄焼き卵を焼くには、「ある材料」を卵液に加えることがポイント。一体何を入れれば、破れにくく頑丈な薄焼き卵が作れるのでしょうか？気になる答えは、動画と記事でご確認ください♪<br>
    フライパンで焼く方法のほか、電子レンジや卵焼き器を使う方法もご紹介します！',
    'moveid' => 'oLP7Qj9aKqk',
    'btn' => '錦糸卵の作り方',
    'link' => 'recipe-technic37'
  ),
  array (
    'title' => 'だし巻き卵の作り方',
    'text' => '最後にご紹介するのは、お弁当のおかずはもちろん、お酒のおつまみにも最適な「だし巻き卵」です。だし巻き卵はだしがたっぷり入っていて美味しい反面、きれいに巻くのが難しいですよね。難しいテクニックなしに、ふわふわできれいなだし巻き卵を作るコツをご紹介します。<a href="'.$base_url.'/magazine/article/recipe-technic58.php" class="recipe-design__link">大根おろし</a>を添えて食べるのはもちろん、チーズや辛子明太子などを加えるアレンジもおすすめです。',
    'moveid' => 'EvWYKUv3MSY',
    'btn' => 'だし巻き卵の作り方',
    'link' => 'recipe-technic65'
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
    <div class="mt3 mt2_sp mb5">
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
