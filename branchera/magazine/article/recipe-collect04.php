<?php
//base
include( "../../function.php" );
$content = get_id_data( '13004' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = 'おうち時間のおやつにぴったりな、簡単スイーツレシピを6つまとめてご紹介！ホットケーキミックスなしで作るホットケーキや、フライパンで作れるロールケーキなど、手軽で華やかなレシピを動画でご覧いただけます。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe recipe-collect";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//導入文
$introTxt = 'スイーツのレシピをまとめてご紹介します。';

//セリフ
$sp01 = array ( //'icon','icon-num','text'
  //フラッキー　通常
  array('fl','01','甘くて美味しいスイーツは、食べるだけで幸せな気分になるよな～！<br>
  「お菓子作りは難しそう」と思われがちだけど、<br class="u-only__pc">
  実は自宅でも簡単に本格的なスイーツが作れるんだぜ！<br>
  中には、オーブンを使わずフライパンでOKなレシピもあるんだ！<br>
  手作りのお菓子で、おうち時間を充実させてくれよな！
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
    'title' => '基本のスポンジケーキの作り方',
    'text' => '誕生日やクリスマスなどのイベントにも欠かせない、スイーツの定番であるケーキ。しかし、「家で手作りしたら、スポンジが膨らまなかった…」という経験のある方も多いのではないでしょうか？ふわふわに仕上げるには、生地の泡立て方にコツがあるんです！このコツを押さえれば、家でもお店のようなケーキが作れますよ♪<br>
    スポンジを自由にデコレーションして、オリジナルのケーキ作りに挑戦してみませんか？',
    'moveid' => 'A374ensRnlk',
    'btn' => '基本のスポンジケーキの<br>作り方',
    'link' => 'recipe-technic71'
  ),
  array (
    'title' => '生クリームの泡立て方',
    'text' => 'デコレーションケーキはもちろん、食べ物や飲み物にトッピングするだけで華やかになる生クリーム。いくつかのポイントを押さえることで、クリームを美味しく、ちょうどよいかたさに作ることができますよ。また、クリームを時短で泡立てる方法や保存方法、チョコや小豆を使った簡単アレンジ方法についてもご紹介。目的に合わせて、生クリームを上手に作れるようになりましょう！
    ',
    'moveid' => 'RFNLnBosmNY',
    'btn' => '生クリームの泡立て方',
    'link' => 'recipe-technic51'
  ),
  array (
    'title' => 'サンタさんのいちごケーキ',
    'text' => 'スポンジケーキと生クリームが完成したら、次はいよいよデコレーションケーキ作り！今回は、クリスマスにぴったりな「サンタさんのいちごケーキ」の作り方をご紹介します♪もちろん、デコレーションを変えれば、年間を通して楽しめるケーキになりますよ。お好みのフルーツやトッピングで、オリジナルのケーキを作ってみてくださいね！お子さまと一緒に作るのも楽しいですよ♪
    ',
    'moveid' => 'VLjvS3v1RWk',
    'btn' => 'サンタさんのいちごケーキ',
    'link' => 'recipe13'
  ),
  array (
    'title' => 'フライパンで作る簡単ロールケーキの作り方',
    'text' => 'ふんわりした生地と生クリームの組み合わせが美味しいロールケーキは、人気のスイーツのひとつ。なんとフライパンを使えば、オーブンなし&短時間で、お家で簡単に手作りできちゃうんです♪そのまま食べるのももちろん美味しいですが、特別な日のデザートには、おしゃれでSNS映えする「ロールケーキタワー」にするのがおすすめ！<br>
    基本のロールケーキをマスターしたら、生地にチョコレートや抹茶を入れたり、かぼちゃクリームを使ってハロウィン風にしたりなど、アレンジレシピも楽しんでみてくださいね。
    ',
    'moveid' => 'tcl5e3OLEh0',
    'btn' => 'フライパンで作る簡単ロールケーキの<br>作り方',
    'link' => 'recipe20'
  ),
  array (
    'title' => 'ホットケーキミックスなしのレシピ！ふんわりホットケーキの作り方',
    'text' => '子どもから大人まで、みんな大好きなホットケーキ。「ホットケーキミックスがない…」というときでも、薄力粉を使えば、簡単に美味しいホットケーキを作ることができますよ♪お店のような厚みのあるホットケーキに仕上げるコツは、“粉を混ぜすぎない”こと！ざっくりと、少しダマが残るくらいの状態で焼くことで、ふんわり分厚いホットケーキが完成します。<br>
    ホットケーキをヘルシーに仕上げる方法や、りんごのタルトタタン風アレンジもご紹介します！
    ',
    'moveid' => '7fIyPPamnKM',
    'btn' => 'ふんわりホットケーキの作り方',
    'link' => 'recipe-technic94'
  ),
  array (
    'title' => 'じゃがいもといんげんのペースト＆ハムのケークサレ',
    'text' => 'ケークサレとは、フランス語で「塩味のケーキ」という意味。その名の通り、おかず風のケーキなので、お食事の主食や、お酒のおつまみなどにぴったりです。見た目がパウンドケーキのようにおしゃれなので、おもてなしレシピとしてもおすすめですよ♪<br>
    今回は、離乳食としても使える「じゃがいもと<a href="'.$base_url.'/magazine/article/recipe-technic98.php" class="recipe-design__link">いんげん</a>の野菜ペースト」を使用したレシピをご紹介します。
    ',
    'moveid' => 'bZa7Vt77i30',
    'btn' => 'じゃがいもといんげんのペースト＆<br>ハムのケークサレ',
    'link' => 'recipe05'
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
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
