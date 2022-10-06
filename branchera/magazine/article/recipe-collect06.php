<?php
//base
include( "../../function.php" );
$content = get_id_data( '13006' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = 'お誕生日やクリスマスなど、イベント時にぴったりなパーティーレシピを8つまとめてご紹介！フライパンで作れるローストビーフやスペアリブ、子どもにも人気なチーズタッカルビなど、手軽に作れるレシピ動画をご紹介します♪';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe recipe-collect";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//導入文
$introTxt = 'ホームパーティーにぴったりなレシピをまとめてご紹介します。';

//セリフ
$sp01 = array ( //'icon','icon-num','text'
  //フラッキー　通常
  array('fl','01','みんなでテーブルを囲んで食べる料理は格別だよな！<br>
今回は、ホームパーティーにおすすめのレシピをまとめて紹介するぜ～！<br>
高級レストランに行かなくても、おうちで手軽にご馳走を楽しむことができるぞ♪<br>
簡単なのにおしゃれで、おもてなし料理にぴったりなものばかりだから、ぜひマスターしてくれよな！
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
    'title' => 'ローストビーフ',
    'text' => 'パーティーのメインディッシュに最適なローストビーフ。実は、フライパンひとつで簡単かつ本格的に作れるんです♪焼いた後は、食べる直前まで冷蔵庫で寝かせるとうまみが増します。前日に作り置きできるので、「当日作る時間が取れない…」というときもおすすめです！<br>大人な味わいの赤ワインソースのほか、子どもも一緒に楽しめる、りんごと玉ねぎを使ったアップルオニオンソースのレシピも併せてご紹介します！
    ',
    'moveid' => 'IyfJYe18Itw',
    'btn' => 'ローストビーフ',
    'link' => 'recipe12'
  ),
  array (
    'title' => 'フライパンで作るスペアリブ',
    'text' => '見た目が華やかな肉料理をお探しなら…ずばり、スペアリブがおすすめです！なんと、ローストビーフと同様に、フライパンひとつで簡単に作ることができます。<br>作り方は、肉と調味料を入れて煮込むだけ！やわらかい豚の骨付きばら肉が甘辛いソースに絡み、おかわりが止まらない美味しさですよ♪<br><a href="'.$base_url.'/magazine/article/recipe-technic67.php">マッシュポテト</a>と野菜を使った、クリスマスやお誕生日にぴったりの盛り付け方もご紹介します。',
    'moveid' => 'h6sv-indueU',
    'btn' => 'フライパンで作るスペアリブ',
    'link' => 'recipe22'
  ),
  array (
    'title' => '鮭ときのこのご飯ピザ',
    'text' => 'パーティー料理の定番といえばピザ。実は<a href="'.$base_url.'/magazine/article/recipe-technic20.php">ご飯</a>でも作ることができるんです！ご飯で作る生地は、外はカリカリ、中はモチモチの食感に。家にある材料で簡単に美味しく作れますよ。<a href="'.$base_url.'/magazine/article/recipe-technic89.php">トマトソース</a>も電子レンジで簡単に作れるので、ぜひ一緒に挑戦してみてくださいね！',
    'moveid' => 'OummRVHTIRM',
    'btn' => '鮭ときのこのご飯ピザ',
    'link' => 'recipe21'
  ),
  array (
    'title' => '海苔巻き',
    'text' => 'おもてなしに最適な巻き寿司。中の具材を工夫すれば、テーブルを華やかに彩ることができますよ。持ち寄りパーティーにもおすすめです！上手に巻くコツや、きれいに仕上がる切り方をお伝えします。<br>パーティーにぴったりの可愛いお花の太巻きや、黄色がかわいい薄焼き卵の太巻きなどのアレンジレシピもご紹介！具材に生ハムやアボカド、クリームチーズなどを使ったカリフォルニアロール風にして、パーティー感をアップするのもおすすめ♪ぜひお試しくださいね。',
    'moveid' => 'J4iqyjrE2dI',
    'btn' => '海苔巻きの巻き方',
    'link' => 'recipe-technic44'
  ),
  array (
    'title' => '簡単かわいい！ケーキ寿司',
    'text' => '子どもが喜ぶパーティーレシピの定番といえば、ちらし寿司！そのままでも十分華やかですが、ケーキ風にデコレーションして、ゲストを驚かせてみませんか？<br>とってもかわいくて豪華なケーキ寿司は、<a href="'.$base_url.'/magazine/article/recipe-technic43.php">酢飯</a>を使って簡単に作ることができます♪<br>スモークサーモンや鯛の<a href="'.$base_url.'/magazine/article/recipe-technic24.php">お刺身</a>でバラを作る方法や、簡単デコレーション方法をご紹介します。<a href="'.$base_url.'/magazine/article/recipe-technic37.php">錦糸卵</a>や<a href="'.$base_url.'/magazine/article/recipe-technic68.php">アボカド</a>、<a href="'.$base_url.'/magazine/article/recipe-technic90.php">そぼろ</a>など、お好みの具材でケーキ寿司を彩ってくださいね！
',
    'moveid' => 'Shc0DF_Q8to',
    'btn' => 'ひなまつりのケーキ寿司',
    'link' => 'recipe16'
  ),
  array (
    'title' => 'シーフードパエリア',
    'text' => '魚介のうまみが凝縮したパエリアも、人気のパーティー料理のひとつです。美味しく作るコツは、お米をスープの膜で覆いながら、ギリギリまで煮詰めること。パリッとしたおこげを作るテクニックや、アレンジレシピとして「チキンときのこのパエリア」のレシピもお伝えします♪',
    'moveid' => 'neA8H0kRM_o',
    'btn' => 'シーフードパエリア',
    'link' => 'recipe10'
  ),
  array (
    'title' => '定番の餃子！3種の包み方で華やかに',
    'text' => '子どもから大人まで、みんな大好きな餃子。基本の餃子の包み方から、「帽子型」「はまぐり型」などの変わった包み方まで、動画で分かりやすく解説します♪また、餃子の仕上がりを決める、美味しい餃子の焼き方もご紹介。 中華料理店で出されるような、本格的な羽根付き餃子にするテクニックも！包み方と焼き方をマスターして、餃子パーティーを楽しみましょう！',
    'moveid' => 'OwY8_KBWQ6c',
    'btn' => '餃子の包み方',
    'link' => 'recipe-technic87',
    'moveid02' => 'WGKObaiPk1E',
    'btn02' => '餃子の焼き方',
    'link02' => 'recipe-technic88'
  ),
  array (
    'title' => 'チーズタッカルビ',
    'text' => '最後に、チキンと野菜をとろ～りとしたチーズに絡めて食べる、「チーズタッカルビ」のレシピをご紹介。ピリ辛の味付けなので、お酒のおつまみにも最適です！ホットプレートで簡単に作ることができて、見た目も豪華なので、ホームパーティーが盛り上がりますよ！<br>コチュジャンを抜けば、子どもも一緒に楽しむことができます♪逆に辛さを足したい場合は、お肉を漬ける際に粉唐辛子を加えて、調整してみてくださいね！',
    'moveid' => 'dLWysWWEADw',
    'btn' => 'チーズタッカルビ',
    'link' => 'recipe15'
  ),
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
          $collectMv02 = $info[$i]['moveid02'];
          $collectBtn02 = $info[$i]['btn02'];
          $collectLink02 = $info[$i]['link02'];
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
