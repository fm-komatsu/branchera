<?php
//base
include( "../../function.php" );
$content = get_id_data( '13008' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '作り置きにぴったりな常備菜レシピをまとめてご紹介！定番のそぼろやピクルスのほか、副菜として役立つゆでもやしやマッシュポテト、冷凍して常備できる餃子や夏野菜とチキンのトマト煮など、さまざまなレシピを動画とテキストでご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe recipe-collect";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//導入文
$introTxt = '常備菜にぴったりなレシピをまとめてご紹介します。';

//セリフ
$sp01 = array ( //'icon','icon-num','text'
  //フラッキー　通常
  array('fl','01','常備菜があれば、毎日のご飯作りの時短につながるぜ！<br>
作り置きした常備菜にご飯や汁物をプラスするだけで、あっという間に定食が完成！<br>
もちろん、お弁当のおかずにもぴったり♪<br>
今回は、そぼろ、餃子、マッシュポテト、ピクルスやナムルの作り方まで、<br class="u-only__pc">
人気の常備菜をまとめて教えていくぜっ！
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
    'title' => '簡単、そぼろの作り方。冷凍保存で作り置きも◎',
    'text' => 'まずご紹介するのは、多めに作り置きができる常備菜の定番・そぼろ！<br>作り方はとってもシンプル。鶏ひき肉に醤油、砂糖、酒、みりんを合わせて、汁気がなくなるまで炒めていきます。美味しいそぼろを作るコツは、菜箸を4～5本使って混ぜること。ダマにならず、ポロポロしたそぼろに仕上がりますよ♪炒り卵をご飯にのせた「2色のそぼろ丼」、<a href="'.$base_url.'/magazine/article/recipe-technic45.php">ささがき</a>にしたごぼうと合わせた「ごぼうそぼろ」もおすすめです。<br>そぼろは粗熱が取れたら、小分けにしてラップに包み、ファスナー付き保存袋に入れて冷凍しましょう。保存期間の目安は約3週間です。<br>詳しい作り方やアレンジメニューを知りたい方は、ぜひ記事をチェックしてくださいね♪',
    'moveid' => 'z9atOZh7-yU',
    'btn' => 'そぼろの作り方',
    'link' => 'recipe-technic90'
  ),
  array (
    'title' => '餃子の包み方。基本＆簡単アレンジ2種を解説！',
    'text' => '餃子はメインディッシュになる便利なメニュー！皮に包んだ状態で冷凍保存できます。焼いてから保存すると水分が出てしまうので、焼く前の餃子を冷凍するのがポイントです。まず、バットに打ち粉をして餃子を並べ、ラップをして冷凍します。凍ったら一旦取り出して、タッパーやファスナー付き保存袋に入れ、再び冷蔵庫に入れて保存しましょう。焼くだけで食べられるので、時短になりますよ。<br>動画と記事では、基本の餃子の包み方だけでなく、かわいい帽子型、はまぐり型の包み方もご紹介しています！ぜひいろいろな包み方を試してみてください。',
    'moveid' => 'OwY8_KBWQ6c',
    'btn' => '餃子の包み方',
    'link' => 'recipe-technic87'
  ),
  array (
    'title' => 'レンジで簡単！マッシュポテトの作り方',
    'text' => '肉料理の付け合わせにぴったりなマッシュポテト。じゃがいもは本来冷凍にあまり向いていない食材ですが、マッシュポテトにすれば、風味や食感を損なうことなく冷凍保存できるんです♪じゃがいもは下ゆで不要、電子レンジで加熱して簡単に作ることができます。<br>粗熱が取れたら、1食分ごとに分けてラップに包み、ファスナー付き保存袋に入れて冷凍しましょう。冷凍したマッシュポテトは、約2週間保存可能です！',
    'moveid' => 'wbWuQGLL_9c',
    'btn' => 'マッシュポテトの作り方',
    'link' => 'recipe-technic67'
  ),
  array (
    'title' => 'ピクルスの作り方。人気の野菜を使った簡単レシピ',
    'text' => '甘酢っぱくて箸休めにぴったりなピクルスも、長持ちする常備菜メニューです。定番のきゅうりやにんじんのほか、だいこん、パプリカ、セロリ、ミニトマト、ブロッコリーなどもピクルスにすると美味しく食べられます。<br>作り方はとっても簡単！米酢、水、砂糖、塩、香辛料を一煮立ちさせてピクルス液を作り、野菜を入れた瓶に注いで漬け込めばできあがり。密閉して、冷蔵庫で保存しましょう。保存期間の目安は、約10日です。サラダに入れたり、タルタルソースに使ったりなど、さまざまなアレンジができますよ♪',
    'moveid' => 'z-Cppg4ms1Q',
    'btn' => 'ピクルスの作り方',
    'link' => 'recipe-technic126'
  ),
  array (
    'title' => '夏野菜とチキンのトマト煮',
    'text' => '夏の常備菜として大活躍！トマト、なす、ズッキーニ、パプリカなどの夏野菜と鶏肉を煮込んだ一品です。鶏もも肉を炒めたら、夏野菜、ホールトマト、すりおろしにんにく、塩、鶏ガラスープの素、砂糖、塩を加えて煮込めば完成！ファスナー付き保存袋に入れて、冷凍保存しておきましょう。クリームパスタやリゾット、ドリアにもアレンジできる便利な常備菜です♪アレンジ方法は記事で詳しくご紹介していますので、ぜひチェックしてくださいね。',
    'moveid' => 'bWobD1Nyed0',
    'btn' => '夏野菜とチキンのトマト煮の<br>作り方',
    'link' => 'recipe19'
  ),
  array (
    'title' => '鶏と根菜の味噌バター炒め',
    'text' => '定番の鶏×根菜も、味噌バターで味付けすると一味違った美味しさに！鶏もも肉とれんこん、ごぼう、にんじんを炒め、酒をふりかけて蒸し焼きにします。合わせ味噌、はちみつ、醤油を合わせて、バターを加えてからめればできあがり。冷凍保存しておけば、お弁当のおかずにもなるので便利ですよ！',
    'moveid' => 'OVoBtIXhr4Y',
    'btn' => '鶏と根菜の味噌バター炒めの<br>作り方',
    'link' => 'recipe01'
  ),
  array (
    'title' => '白髪ねぎの作り方',
    'text' => '中華料理のトッピングによく使われる白髪ねぎも、常備しておくと何かと便利。ラーメンや肉料理の薬味にするほか、サラダやスープに入れても美味しいですよ。まず長ねぎの白い部分から芯を取り除き、繊維に沿って千切りに。5分ほど水にさらせばできあがりです！<br>白髪ねぎは、冷蔵庫で3～4日保存できます。長期保存する場合は、冷凍がおすすめ！冷凍保存する場合は、水気を切り小分けにしてラップに包み、ファスナー付き保存袋に入れて冷凍しましょう。保存期間の目安は、約1ヵ月です。',
    'moveid' => '5evkqwoqJ_k',
    'btn' => '白髪ねぎの作り方',
    'link' => 'recipe-technic36',
  ),
  array (
    'title' => 'もやしのゆで方',
    'text' => '生のままだと傷みやすいもやしは、ゆでてから保存するのがおすすめです！もやし料理を美味しく仕上げるには、ゆで方がポイント。塩と酢を入れたお湯で1分間ゆでれば、シャキッとした仕上がりに！<br>ゆでもやしをナムルにしてから保存すると、「もう一品欲しい！」というときに役立ちます。ゆでたもやしに塩を振り、にんにく、ごま油、塩、砂糖と混ぜ合わせれば、簡単ナムルのできあがり！保存容器に入れて、冷蔵庫で保存しましょう。',
    'moveid' => 'slZGwMkCeKo',
    'btn' => 'もやしのゆで方',
    'link' => 'recipe-technic122',
  ),
  array (
    'title' => 'ふわふわなキャベツの千切りを作る方法',
    'text' => '最後にご紹介するのはキャベツの千切りです。あまり常備菜のイメージがないかもしれませんが、<a href="'.$base_url.'/magazine/article/recipe-technic39.php">味噌汁</a>や煮物、和え物などいろいろな料理に使えるので、作り置きしておくととても便利なんですよ！<br>キャベツの千切りを冷凍する際のポイントは、「熱湯にくぐらせてから保存する」こと。解凍したときに、細胞壁が壊れてふにゃっとした状態になるのを防ぐことができます。まず熱湯に5～10秒ほどくぐらせてから、水を張ったボウルに入れましょう。キッチンペーパーなどでしっかり水気を拭いて、保存容器に入れて冷凍してください。冷凍したキャベツの千切りは、約2週間保存が可能です。',
    'moveid' => 'M6yPdJgoz1s',
    'btn' => 'キャベツの千切りの作り方',
    'link' => 'recipe-technic18',
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
