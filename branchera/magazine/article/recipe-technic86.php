<?php
//base
include("../../function.php");
$content = get_id_data('15086');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '失敗しない！「パラパラチャーハンの作り方」を動画とテキストで解説。チャーハンをパラパラに作るための卵とご飯の下ごしらえのコツや、ある食材を使った裏ワザをご紹介します。また、効果的なフライパンの使い方もご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '86';

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'tdHTDKc-rEo';

//導入文
$introTxt = '第86回は、「失敗知らずのパラパラチャーハン！基本の作り方と裏ワザ」です。本格的なパラパラのチャーハンを手軽に作る方法をご紹介します。';

//セリフ前半
$sp01 = array( //'icon','icon-num','text'
  //パパ　　通常
  array('papa', '01', 'よいしょ！よいしょ！結構重いな～'),

  //ママ　通常
  array('mama', '01', 'パパどうしたの！？フライパン振り回して…'),

  //パパ　　通常
  array('papa', '01', '本格シェフっぽくフライパンを振る練習だよ！<br>
  この前テレビで特集していたパラパラチャーハンを作ろうと思ってさ！'),

  //フラッキー　通常
  array('fl', '01', 'おいおいマサキ！チャーハンをパラパラに仕上げるには、<br class="u-only__pc">
  フライパンの振り方よりも材料と手順がポイントなんだぜ？<br>
  それに、その振り方だと米が飛び散って「ばらばらチャーハン」になっちまうぞ！'),

  //パパ　　通常
  array('papa', '01', 'え～！そうなの！？フラッキー、正しい作り方を詳しく教えてよ！'),

  //フラッキー　通常
  array('fl', '01', 'よーし、任せろ！裏ワザもあるからしっかり覚えておけよ！'),

);

//キャプチャALTタグ
$altCap01 = '<a href="' . $base_url . '/magazine/article/recipe-technic08.php" class="recipe-design__link">卵</a>をボウルに割り入れて溶きほぐし、鶏ガラスープの素、<a href="' . $base_url . '/magazine/article/recipe-technic20.php" class="recipe-design__link">ご飯</a>を加えて木ベラやしゃもじなどで混ぜます。';
$altCap02 = 'フライパンにごま油を入れて、<a href="' . $base_url . '/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>で熱します。フライパンが温まったら、<a href="' . $base_url . '/magazine/article/recipe-technic36.php" class="recipe-design__link">長ねぎ</a>を加えて炒めましょう。';
$altCap03 = '長ねぎの香りが立ってきたら<a href="' . $base_url . '/magazine/article/recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>にして、卵と混ぜたご飯を加えます。';
$altCap04 = '木ベラなどで切るように混ぜながら、1分程度炒めます。<br>その後、チャーシュー、こしょうを加えてざっと混ぜてください。';
$altCap05 = '具材を寄せてフライパンの中央を開け、そこに<a href="' . $base_url . '/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>を加えます。<br>醤油を軽く焦がしたら、手早く混ぜ合わせましょう。';
$altCap06 = '皿に盛ったら完成です。';
$altCap07 = '';
$altCap08 = '';
$altCap09 = '';
$altCap10 = '';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';
$altCap14 = '';
$altCap15 = '';
$altCap16 = '';

//セリフ後半
$sp02 = array( //'icon','icon-num','text'
  //パパ　通常
  array('papa', '01', 'よーしっ！パラパラチャーハンができあがったぞ！'),

  //ママ　通常
  array('mama', '01', 'すご～い！お米がパラパラで、お店で食べるチャーハンみたい！'),

  //コウちゃん　喜ぶ
  array('ko', '03', 'ぱらぱら～おいしい～！'),

  //フラッキー　通常
  array('fl', '01', 'やってみたら、案外簡単だったろ？<br>ちなみに、プロが大きくフライパンを振るのは、焦げ付きを防ぐためなんだ<br>業務用のガスコンロは、火力が強いからな！<br>逆に家庭用のガスコンロは火力が弱いから、なるべくフライパンを火から離さずに炒めるのがおすすめだぜ！'),

  //パパ　通常
  array('papa', '01', 'なるほど！フライパンを振る練習、いらなかったな～。まあ、筋トレになったからいいか！'),

  //ママ　通常
  array('mama', '01', 'パパ、ポジティブ過ぎ～！'),

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
          <h3 class="recipe__ttl_l mb0">パラパラチャーハンの作り方</h3>
          <p class="mb2">本格的な中華料理店で食べるようなパラパラのチャーハン。お家で作りたくても、「業務用の設備がないと難しいだろうな…」と思っている人は多いのではないでしょうか。<br>でも実は家庭用のキッチンでも、ちょっとしたコツを押さえるだけで、パラパラのチャーハンを作ることができるのです。手順を詳しくご紹介しましょう。</p>
          <h4 class="recipe__ttl_tech">材料（2人分）</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>長ねぎ</dt>
              <dd>1/3本</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>チャーシュー</dt>
              <dd>50g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>温かいご飯</dt>
              <dd>400g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>卵</dt>
              <dd>2個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>鶏ガラスープの素</dt>
              <dd>大さじ1/2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>醤油</dt>
              <dd>大さじ1/2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>塩、こしょう</dt>
              <dd>適量</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>ごま油</dt>
              <dd>大さじ1</dd>
            </dl>
            <p>※長ねぎはみじん切り、チャーシューは角切りにしておきます。</p>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-01@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <section>
            <?php // check
            $check_cnt = '
            <h4>卵とご飯を混ぜるとパラパラになる！</h4>
            <p>チャーハンをパラパラにさせるコツの1つは、事前に卵とご飯を混ぜ合わせておくこと！溶いた卵が米1粒1粒をコーティングしてくれるから、米同士がくっ付きにくくなってパラパラに仕上がるぜ。</p>
            ';
            include($inc_path . "/lib/inc/page/_magazine/__recipe-check.php");
            ?>
          </section>
          <section>
            <?php // check
            $check_cnt = '
            <h4>ご飯は温かいものを使おう！</h4>
            <p>パラパラのチャーハンを作るときに温かいご飯を使うのは、温かいご飯のほうが冷たいご飯よりもほぐれやすいからだ！ほぐれやすいご飯だと、炒めるときにダマにならず、全体を均等に混ぜることができるぞ。炊き立てのご飯はもちろん、冷やご飯や冷凍ご飯でも、電子レンジで温め直せばOKだぜ！</p>
            ';
            include($inc_path . "/lib/inc/page/_magazine/__recipe-check.php");
            ?>
          </section>
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
            <?php // plus1
            $plus1_ttl = 'さらにパラパラにするための裏ワザ';
            $plus1_cnt = '
            <p>さらにパラパラにするための裏ワザが、「粉ゼラチンをご飯に混ぜる」ことです。手順は簡単で、ご飯（400g）を炒める際に、粉ゼラチンを2.5g程度加えるだけ！<br>
            ゼラチンがご飯の水分を閉じ込めるため、パラパラでふっくらとした仕上がりになるのです。ぜひお試しください。</p>
            ';
            include($inc_path . "/lib/inc/page/_magazine/__recipe-plus1.php");
            ?>
          </section>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-04@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <p>木ベラなどで切るように混ぜながら、<strong>1分程度</strong>炒めます。<br>その後、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic110.php" class="recipe-design__link">チャーシュー</a>、こしょうを加えてざっと混ぜてください。</p>
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
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber ?>-06@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
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
        array('recommend-recipe-id', '15087'),
        array('recommend-recipe-id', '15088'),
        array('recommend-recipe-id', '15110'),
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
