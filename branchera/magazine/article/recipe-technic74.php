<?php
//base
include( "../../function.php" );
$content = get_id_data( '15074' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '簡単つるん！「トマトの湯むきの方法」を動画とテキストで解説。熱湯を使う基本の方法をはじめ、電子レンジを使う方法や冷凍してむく方法もご紹介します！トマトソースや煮込み料理、サラダやマリネなどさまざまな料理に役立ちます。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '74';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'pE6dqJBoXDc';

//導入文
$introTxt = '第74回は、「トマトの湯むきの方法」です。見た目や食感をよくするために必要な、トマトの湯むきを簡単に行う方法をご紹介します。';

//キャプチャALTタグ
$altCap01 = 'トマトはヘタを取っておきます。ヘタの反対側に、包丁で浅く十字の切れ目を入れましょう。';
$altCap02 = '水を入れた鍋を火にかけて沸騰させます。';
$altCap03 = 'トマトをおたまにのせて、沸騰させたお湯に沈めます。';
$altCap04 = '10秒ほど経ったら、トマトを熱湯から引き上げて、素早く氷水に漬けて冷まします。';
$altCap05 = '氷水からトマトを取り出して、切れ目から少しめくれ上がった皮を引っ張ってむいていきます。';
$altCap06 = '簡単トマトサラダ';
$altCap07 = 'プチトマトのはちみつマリネ';
$altCap08 = 'パスタに使えるトマトソース';
$altCap09 = '';
$altCap10 = '';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';
$altCap14 = '';
$altCap15 = '';
$altCap16 = '';

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
      $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
      $panAry[] = array( "/magazine/index_comic02.php", "今さら聞けない料理のアレコレ" );
      include( $inc_path . "/lib/inc/pan.php" );
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
        $recipeIcon ='mama_01';
        $speech ='今日は新しいレシピでトマトサラダを作ってみようっと！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='わーい！とまとだいすき～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_02';
        $speech ='あら、レシピを見たらトマトは湯むきしなくちゃいけないんだって…<br class="u-only__pc">実は湯むきってやったことがないのよね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='ミエ、安心しろ！トマトの湯むきは超簡単だぜ～！<br>ひと手間加えると、サラダや煮込み料理の食感がよりなめらかになるぞ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='そうなのね！じゃあフラッキー、早速教えてくれる？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='ガッテン承知！ツルンと湯むきする方法を伝授するぜ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie-new technic">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl@2x.png"
           alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">トマトの湯むきの方法</h3>
          <p class="mb2">トマトの湯むきは、皮の食感を取り除きたいときや、調味料などの味付けをより染み込ませたいときに行ないます。トマトソースや煮込み料理を作るとき、サラダやマリネなどに使用するときに湯むきをすることが多いです。簡単にできるので、ぜひ覚えておきましょう。</p>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-01@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <section>
          <?php // plus1
            $plus1_ttl ='熱湯を使わずトマトの皮をむく方法';
            $plus1_cnt ='<p class="mb2">熱湯を使った基本の湯むき以外にも、トマトの皮をむく方法があります。ここでは電子レンジを使う方法と、冷凍してからむく方法をご紹介します。</p>
            <h4 class="recipe__ttl_s">電子レンジを使う方法</h4>
            <p class="mb2">基本の湯むきと同様に、トマトのヘタの反対側に十字に切れ目を入れます。水にくぐらせてから器にのせて、ラップをせずに600wに設定した電子レンジで30～40秒程度加熱しましょう。すぐに冷水に浸して、粗熱が取れたら切れ目から皮を剥がします。</p>
            <h4 class="recipe__ttl_s">冷凍してからむく方法</h4>
            <p class="mb2">冷凍したトマトは、水に漬けると簡単に皮をむくことができますよ。まず、冷凍室から出したトマトを、ボウルに張った水に2～3分漬けます。皮が浮いてきたら、そこからむいていきましょう。なお、冷凍したトマトは食感が変わりやすくなるため生で使用する料理には向きません。水分も出やすいので、煮込み料理などの加熱調理に使うのがおすすめです。</p>';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>
          <section>
          <?php // plus1
            $plus1_ttl ='湯むきするとトマトの栄養はどうなる？';
            $plus1_cnt ='<p class="mb2">「湯むきの際に加熱することで、栄養成分に変化があるのでは？」と気になる方もいるかもしれませんね。結論からいうと、トマトは加熱することで、より効果的に栄養を摂取することができます！</p>
            <p class="mb2">トマトの主な栄養素は、リコピンとカリウム。リコピンは、抗酸化物質としても知られています。血流の改善や、生活習慣病の予防効果が期待できる栄養素です。このリコピンは、加熱により吸収率が高まります。また、油に溶けやすい性質のため、油を使って加熱調理すると、さらに吸収率がアップしますよ。</p>
            <p class="mb2">カリウムは、水分バランスを整える働きがあります。加熱による変化はなく、生食の場合と同量の摂取が可能です。水溶性なので、煮汁も一緒に食べられる煮込み料理などにすると、より効果的に摂取できます。</p>
            <p>効率よくトマトから栄養を摂取したい方は、ぜひ湯むきしてから食べてみてくださいね。</p>';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>
          <h3 class="recipe__ttl_l mb0">湯むきトマトを使った人気レシピ</h3>
          <p class="mb2">湯むきしたトマトを使ったレシピをご紹介します。</p>
          <h4 class="recipe__ttl_tech"><?php echo ($altCap06); ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-06@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>湯むきしたトマトをひと口大に切って、塩少々とオリーブオイル大さじ2、酢大さじ1を混ぜたドレッシングで和えるだけ。冷蔵庫でよく冷やし、食べる直前にドライパセリを散らしたらできあがりです。酢は普段お使いの穀物酢や米酢でOKですが、ワインビネガーやバルサミコ酢を使うと、より本格的な味わいになりますよ。使う酢によって分量は変わるので、味を見て調整してくださいね。</p>
          </div>
          <h4 class="recipe__ttl_tech"><?php echo ($altCap07); ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-07@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>プチトマトの湯むきも、通常のトマトと同様に行なえますよ。まずヘタを取ってから、表面に1箇所穴を開けましょう。熱湯に漬けて、皮がゆるんできたら、氷水に移して皮をむいていきます。これで湯むきは完了です。<br>次に、マリネ液を作ります。器に酢大さじ2、はちみつ大さじ2、オリーブオイル大さじ1を入れてよく混ぜましょう。さらに、オリーブオイルを大さじ2入れて混ぜたら、マリネ液はできあがり。湯むきしたプチトマトを20個程度入れて、冷蔵庫で30分以上冷やしたら完成です。</p>
          </div>
          <h4 class="recipe__ttl_tech"><?php echo ($altCap08); ?></h4>
          <div class="u-clearfix mb2">
            <p>鍋にオリーブオイル大さじ1と、潰したにんにく1かけ、ヘタと種を取り除いた赤唐辛子を半個分入れて<a href="<?php echo($base_url)?>/magazine/article/recipe-technic02.php" class="recipe-design__link">弱火</a>にかけます。にんにくがきつね色になったら、湯むきしたトマトを3個程度入れてください。塩小さじ1/4を加えて混ぜ、中火で煮ましょう。トマトを潰しながら30分煮たら、にんにくと赤唐辛子を取り除いて完成です。</p>
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-08@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>このトマトソースは、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic64.php" class="recipe-design__link">パスタ</a>や煮込みハンバーグのソースにしたり、チーズと合わせてラザニアに使ったりと、さまざまな料理に使うことができますよ。</p>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='mama_01';
        $speech ='本当に簡単にトマトの湯むきができちゃった～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='ほんとうだ、きれいだね～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='熱湯から氷水に入れるタイミングがバッチリだったな！<br>湯むきができると料理の幅が広がるぞ～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='よ～し！これからは湯むきトマトを使って<br class="u-only__pc">いろいろな料理を作ってみようっと！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="mb0">
      <?php
        include ($inc_path."/lib/inc/page/_magazine/__recipe-technic-new-footer.php");
      ?>
      </div>
    </section>
  </article>
</main>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<?php
  $toindex_url = "/magazine/index_comic02.php";
  include( $inc_path . "/lib/inc/toindex__magazin.php" );
  ?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
