<?php
//base
include("../../function.php");
$content = get_id_data('15081');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '電子レンジでできる「ホワイトソースの作り方」を動画とテキストで解説。美味しく、濃厚なホワイトソースを10分以内で作れる時短レシピです。グラタン、クロックマダムなど、ホワイトソースを使って作る簡単レシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '81';

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'rhnFS_sN-GQ';

//導入文
$introTxt = '第81回は、「電子レンジで簡単！ホワイトソースの作り方」です。本格的なホワイトソースを、電子レンジを使って簡単に仕上げる作り方をご紹介します。';

//セリフ前半
$sp01 = array( //'icon','icon-num','text'
  //ママ　困り顔
  array('mama', '02', '今日はホワイトソースを手作りして<a href="' . $base_url . '/magazine/article/recipe03.php" class="recipe-design__link">グラタン</a>にしよう！と思っていたけど、<br class="u-only__pc">思ったより仕事が長引いちゃったわ…これからソースを作るのは面倒だな～'),

  //コウちゃん　困る
  array('ko', '02', 'こうちゃん、ぐらたんたべたい～'),

  //ママ　困り顔
  array('mama', '02', 'コウちゃん、グラタン好きだもんね<br>
どうしよう…市販のソースは家にないしなあ…'),

  //フラッキー　通常
  array('fl', '01', '困っているミエに朗報だ！<br>
実は、ホワイトソースは電子レンジでチンするだけで、<br class="u-only__pc">
あっという間にできちゃうんだぜ！'),

  //ママ　驚く
  array('mama', '03', 'えぇー！電子レンジでホワイトソースが作れるの！？'),

  //フラッキー　通常
  array('fl', '01', 'ああ！しかも、本格的な美味しいホワイトソースをな♪<br>
コウちゃんも腹を空かせているし、早速教えていくぜ！')
);

//キャプチャALTタグ
$altCap01 = '耐熱ボウルにバター、薄力粉を入れます。その後、600wに設定した電子レンジで30秒加熱します。';
$altCap02 = '電子レンジから取り出したら、泡立て器で全体を混ぜてください。';
$altCap03 = '牛乳を少しずつ加えながら、泡立て器で手早く混ぜていきましょう。';
$altCap04 = 'ラップをせずに、電子レンジ（600W）で3分加熱します。';
$altCap05 = '電子レンジから取り出して手早く混ぜたら、再びラップをせずに1分30秒加熱します。';
$altCap06 = '塩とこしょうを加えて、全体をよく混ぜたら完成です。';
$altCap07 = 'マカロニグラタン';
$altCap08 = 'ホワイトオムライス';
$altCap09 = 'クロックマダム';
$altCap10 = '';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';
$altCap14 = '';
$altCap15 = '';
$altCap16 = '';


//セリフ後半
$sp02 = array( //'icon','icon-num','text'
  //ママ　通常
  array('mama', '01', 'フラッキー、すごい！本当に10分もかからずホワイトソースができちゃった！<br>あっという間にグラタンも完成～♪'),

  //フラッキー　褒める
  array('fl', '03', '意外と、定番のソースは電子レンジで作れるんだぜ！<br>
トマトソースなんかも、すぐできあがるんだ'),

  //ママ　通常
  array('mama', '01', 'むむ、それも今度教わらなくちゃ…！'),

  //コウちゃん　喜ぶ
  array('ko', '03', 'ぐらたん、おいしい～！'),

  //パパ　通常
  array('papa', '01', 'このホワイトソース、濃厚で美味しい！<br>
電子レンジで作ったとは思えないよ！'),

  //ママ　通常
  array('mama', '01', 'よかった、大成功ね！<br>
次はオムライスにかけてみようっと♪')

);

// 用語解説
$term = array( //'id' , 'title' , 'text'
  array(),
);

/*
// plus1 template
<section>
<?php // plus1
  $plus1_ttl ='';
  $plus1_cnt ='';
  include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
?>
</section>

// check template
<section>
<?php // check
  $check_cnt ='';
  include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
?>
</section>

*/

?>
<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/magazine/", "ブランシエラマガジン");
    $panAry[] = array("/magazine/index_comic02.php", "今さら聞けない料理のアレコレ");
    include($inc_path . "/lib/inc/pan.php");
    // SP時サムネにタイトルを表示するかフラグ
    $thumTtlFlg = 'off';
    include($inc_path . "/lib/inc/page/_magazine/__comic02tech-new-header.php");
    include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-new-main-v.php");
    ?>
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header technic__new">
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
      for ($i = 0, $size = count($sp01); $i < $size; ++$i) {
        $recipeIcon = $sp01[$i][0] . '_' . $sp01[$i][1];
        $speech = $sp01[$i][2];
        include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      }
      ?>
      <div class="recipe__movie recipe-movie-new technic">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl@2x.png" alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">電子レンジを使ったホワイトソースの作り方</h3>
          <p class="mb3">グラタンやラザニアなどに欠かせないホワイトソース。手作りすると少し時間がかかりますが、電子レンジを使うとグッと時間を短縮できます。手間なく美味しいホワイトソースが作れる、時短レシピをご紹介します。</p>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>有塩バター</dt>
              <dd>30g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>薄力粉</dt>
              <dd><a href="<?php echo $base_url ?>/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>3</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>牛乳</dt>
              <dd>300ml</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt><a href="<?php echo $base_url ?>/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a></dt>
              <dd><a href="<?php echo $base_url ?>/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>1/2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>こしょう</dt>
              <dd>少々</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-01@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-02@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-03@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <section>
            <?php // check
            $check_cnt = '
            <h4>牛乳の代わりに豆乳を使えばあっさりとした味に！</h4>
            <p class="mb2">ホワイトソースは、牛乳の代わりに豆乳を使っても作れるぞ！さっぱりした味わいに仕上げたいときはおすすめだぜ。</p>
            <p>牛乳より少し固まりやすいから、しっかり底からかき混ぜるのがポイント！</p>
            ';
            include($inc_path . "/lib/inc/page/_magazine/__recipe-check.php");
            ?>
          </section>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-04@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-05@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-06@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <h3 class="recipe__ttl_l mb0">ホワイトソースを使った人気レシピ</h3>
          <p class="mb2">ホワイトソースさえできていれば、あとは簡単！定番のグラタンを、短時間で作ることができますよ。ほかにも、いつものソースをホワイトソースに変えるだけでOKの、お手軽レシピもご紹介します。</p>
          <div class="mb2">
            <h4 class="recipe__ttl_tech"><?php echo ($altCap07); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__right">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-07@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>
                ホワイトソースを使った人気レシピといえば、グラタン！<br>ゆでたマカロニと、炒めた具材（玉ねぎ、<a href="<?php echo $base_url ?>/magazine/article/recipe18.php" class="recipe-design__link">挽き肉</a>、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic46.php" class="recipe-design__link">ブロッコリー</a>）を混ぜ合わせたら、耐熱皿に入れましょう。そこにホワイトソースをかけて、<a href="<?php echo $base_url ?>/magazine/article/recipe15.php" class="recipe-design__link">チーズ</a>をのせて焼けばできあがりです。
              </p>
            </div>
          </div>
          <div class="mb2">
            <h4 class="recipe__ttl_tech"><?php echo ($altCap08); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__left">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-08@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>
                「<a href="<?php echo $base_url ?>/magazine/article/recipe-technic125.php" class="recipe-design__link">オムライス</a>といえばケチャップ」というイメージが強いですが、ホワイトソースをかけても美味しく召し上がれます。<br> まず、いつも通りにオムライスを作りましょう。鍋に入れたホワイトソースを温めたら、牛乳を適量加えてのばし、お好みの濃度に調整します。オムライスにホワイトソースをかけて、パプリカパウダーやパセリなどを散らせば完成です。おしゃれなカフェで食べるオムライスのような仕上がりになりますよ。
              </p>
            </div>
          </div>
          <div class="mb2">
            <h4 class="recipe__ttl_tech">ホワイトシチュー風煮込みハンバーグ</h4>
            <p>ホワイトソースは、ハンバーグのソースにするのもおすすめです。<br> ホワイトソースに軽く炒めた<a href="<?php echo $base_url ?>/magazine/article/recipe-technic27.php#shimeji" class="recipe-design__link">しめじ</a>や<a href="<?php echo $base_url ?>/magazine/article/recipe-technic27.php#eringi" class="recipe-design__link">エリンギ</a>を加えて、牛乳を適量加えてのばし、お好みの濃度に調整します。<a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>でひと煮立ちさせたら、こんがりと焼いたハンバーグを加えましょう。そのまま2～3分煮込んだらできあがり！<br>きのこのほかにも、ブロッコリーや<a href="<?php echo $base_url ?>/magazine/article/recipe-technic120.php" class="recipe-design__link">じゃがいも</a>など、お好きな具材を加えてお試しください。
            </p>
          </div>
          <div class="mb0">
            <h4 class="recipe__ttl_tech"><?php echo ($altCap09); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__right">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-09@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>
                フランスで軽食として親しまれているクロックマダムも、ホワイトソースがあれば簡単に作れます。食パンにハムをのせ、次に中心をさけてホワイトソースを重ねます。ホワイトソースの上にピザ用チーズをのせたら、くぼんでいる中心の部分に卵を割り入れましょう。最後にオーブントースターで焼いたら完成です。トーストがおしゃれな朝食に早変わりしますよ。
              </p>
            </div>
          </div>

        </div>
      </div>
      <?php
      for ($i = 0, $size = count($sp02); $i < $size; ++$i) {
        $recipeIcon = $sp02[$i][0] . '_' . $sp02[$i][1];
        $speech = $sp02[$i][2];
        include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      }
      ?>
      <?php
      //関連記事
      $recommendrecipe = array(
        array('recommend-recipe-st'),
        array('recommend-recipe-id', '14003'),
        array('recommend-recipe-id', '15125'),
        array('recommend-recipe-id', '15112'),
        array('recommend-recipe-end')

      );
      ?>
      <?php
      include($inc_path . "/lib/inc/page/_magazine/__recipe-tech-recommend.php");
      ?>
      <div class="mb0">
        <?php
        include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-new-footer.php");
        ?>
      </div>
    </section>
  </article>
</main>
<?php include($inc_path . "/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<?php
$toindex_url = "/magazine/index_comic02.php";
include($inc_path . "/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
