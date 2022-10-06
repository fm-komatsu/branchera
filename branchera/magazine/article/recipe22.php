<?php
//base
include( "../../function.php" );
$content = get_id_data( '14022' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「フライパンで作るスペアリブ」を動画で解説。豚の骨付きばら肉にこんがりと焼き目を付け、甘辛いソースでやわらかく煮込んだスペアリブ。パーティーにもぴったりの人気メニューを、フライパンひとつで作る方法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

$youTubeId = 'h6sv-indueU';


//キャプチャALTタグ
$altCap01 = '豚スペアリブは、ペーパーで水気を拭き取ります。';
$altCap02 = '★の材料を混ぜ合わせます。';
$altCap03 = '中火で熱したフライパンに豚スペアリブを入れ、両面にこんがりと焼き目を付けます。<br>フッ素樹脂加工のフライパン以外をお使いの場合は、焦げ付きを防ぐため、少量の油を加えて焼いてください。';
$altCap04 = 'ペーパーで余分な油を拭き取り、★を加えます。ふたをして、<strong>弱火で30～40分</strong>煮込みます。<br>肉がやわらかくなったら、フライパンから取り出します。<br>これで、スペアリブはできあがりです。';
$altCap05 = '大皿に<a href="'.$base_url.'/magazine/article/recipe-technic67.php" class="recipe-design__link">マッシュポテト</a>を山形に盛り、全体を覆うようにスペアリブを盛り付けます。立体感が出て、華やかになりますよ。<br>マッシュポテトが見えている箇所に、お好みの野菜を飾ってできあがりです。星型のプロセスチーズや飾り切した人参などを使うと、より華やかにデコレーションできますよ。';
$altCap06 = '';
$altCap07 = '';
$altCap08 = '';
$altCap09 = '';
$altCap10 = '';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';
$altCap14 = '';
$altCap15 = '';

?>
<main class="main">
  <article class="main__row">
    <?php
      $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
      $panAry[] = array( "/magazine/index_comic02.php", "うちのご飯は世界イチ" );
      include( $inc_path . "/lib/inc/pan.php" );
      // SP時サムネにタイトルを表示するかフラグ
      $thumTtlFlg = 'off';
      include($inc_path . "/lib/inc/page/_magazine/__comic02tech-new-header.php");
      include($inc_path . "/lib/inc/page/_magazine/__recipe-new-main-v.php");
    ?>
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header recipe__new">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num">　</span>
          <span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
        </h2>
      </div>
      <div class="recipe-story mb3">
        <div class="recope-story__row recipe-story__recipe">
          <p>そろそろクリスマス。メインディッシュは、やっぱりお肉がいいよね！見栄えがして、簡単に作れる肉料理ってないかなあ…？</p>
        </div>
      </div>

      <?php
        $recipeIcon ='mama_01';
        $speech ='ねえパパ。もうすぐクリスマスだけど、何が食べたい？<br>去年は<a href="'.$base_url.'/magazine/article/recipe12.php" class="recipe-design__link">ローストビーフ</a>だったから、今年は違うものがいいよねえ…<br>そうだ！スペアリブとかどう？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='おっ！豪華でいいね！<br>スペアリブ食べたいなあ～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_02';
        $speech ='ただ、ちょっと難しそうなのがネックよね<br>フライパンで作れたら楽なんだけどな～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='スペアリブはフライパンひとつで作れるぞ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_03';
        $speech ='ほ、本当！？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='もちろんだぜ！フライパンで、調味料を入れて煮込むだけ…<br>実はスペアリブは、超～簡単料理なんだ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='なんだって！フラッキー、作り方を教えて～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='了解！クリスマスにぴったりな盛り付け方法も伝授するから、<br class="u-only__pc">しっかりついて来いよ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie-new recipe">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/common/movie_ttl@2x.png"
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
          <h3 class="recipe__ttl_l mb0">フライパンを使ったスペアリブの作り方</h3>
          <p class="mb2">豚の骨付きばら肉にこんがりと焼き目を付け、甘辛いソースでやわらかく煮込んだスペアリブ。パーティーのごちそうにもぴったりの人気メニューです。<br>簡単なアレンジレシピも合わせてご紹介します。</p>
          <h4 class="recipe__ttl_recipe">材料（3～4人分）</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>豚スペアリブ</dt>
              <dd>800g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>★アプリコットジャム</dt>
              <dd>80g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>★米酢</dt>
              <dd>50ml</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>★水</dt>
              <dd>50ml</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>★醤油</dt>
              <dd>大さじ2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>★酒</dt>
              <dd>大さじ2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>★にんにく（すりおろし）</dt>
              <dd>小さじ1</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_recipe">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/22/recipe22-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/22/recipe22-01@2x.jpg"
                 alt="フラッキーのHow To <?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/22/recipe22-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/22/recipe22-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/22/recipe22-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/22/recipe22-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/22/recipe22-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/22/recipe22-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/22/recipe22-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/22/recipe22-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <section>
            <?php // plus1
              $recipe_or_tech = 1;
              $plus1_ttl ='ジャムを変えて違う味わいに';
              $plus1_cnt ='<p class="mb2">ジャムは、今回のレシピのように、スペアリブの煮込みによく使われるアイテムです。ジャムには、肉をやわらかくしたり、美味しそうな照りを加える効果があります。
              レシピで使ったアプリコットジャムは、酸味と甘味のバランスがちょうどよく、苦味がないため子どもも食べやすい味わいです。<br>アプリコットジャム以外の、スペアリブの味付けにおすすめのジャムをご紹介します。</p>
              <h4 class="recipe__ttl_s">マーマレード</h4>
              <p>スペアリブによく用いられる、柑橘系のジャム。フルーティでさわやかな味わい。わずかな皮の苦味がアクセントに</p>
              <h4 class="recipe__ttl_s">ブルーベリージャム</h4>
              <p>ワインのように濃い色合いのソースに仕上がる。甘味とコクが強調される</p>
              <h4 class="recipe__ttl_s">りんごジャム</h4>
              <p class="mb2">まろやかな甘味が、豚肉との相性ぴったり</p>
              <p>これ以外でも、一般的なフルーツを使用しているジャムならば代用できます。フルーツ自体の酸味が残っている、果肉が多めのものを使いましょう。お好みのジャムを試して、オリジナルの味わいを楽しんでみてくださいね。</p>';
              include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
            ?>
          </section>
          <section>
            <h3 class="recipe__ttl_l mb0">スペアリブのアレンジレシピ</h3>
            <p class="mb2">基本のスペアリブをマスターしたら、アレンジレシピにもチャレンジしてみましょう。豚以外の肉で作ったり、ソースの味付けを変えたりすると、また違った美味しさや雰囲気を楽しめますよ。</p>
            <h4 class="recipe__ttl">肉のアレンジ</h4>
            <h5 class="recipe__ttl_s">鶏手羽中</h5>
            <p>豚スペアリブと同じ骨付き肉でも、お手頃に手に入るのがメリット。小分けしやすいので、多めに作って保存するのもおすすめです。</p>
            <h5 class="recipe__ttl_s">ラム肉</h5>
            <p class="mb2">子羊の肉であるラム肉は、健康意識の高い人にも人気。マトン（生後1年以上の羊の肉）より匂いは控えめといわれていますが、気になる場合はローズマリーやタイムなどのハーブを組み合わせるのがおすすめです。</p>
            <p>ほか、骨付き肉でなくても、厚切りの豚肉を使ってポークソテー風に、鶏もも肉を使ってグリルチキン風に…と、普段のおかずにもアレンジできます。ぜひお試しくださいね。</p>
            <h4 class="recipe__ttl">ソースのアレンジ</h4>
            <h5 class="recipe__ttl_s">焼き肉のたれ + はちみつ + ケチャップ</h5>
            <p>市販の焼き肉のたれをベースに使う方法は、簡単に味が決まって失敗しにくいので、お料理初心者におすすめです。お好みのたれに、はちみつとケチャップを少しずつ加えて、様子を見ながら味を調えましょう。</p>
            <h5 class="recipe__ttl_s">コーラ+醤油</h5>
            <p>コーラで煮込んだお肉は、やわらかでコクのある味わい。醤油で味を調え、アクセントにおろしショウガやバルサミコ酢などを加えるのもおすすめです。</p>
          </section>
        </div>
      </div>
      <?php
        $recipeIcon ='mama_01';
        $speech ='おまたせ～！今年のクリスマスのメインディッシュは、スペアリブだよ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='すご～い！ケーキみたい！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='お肉がほろほろで、とってもやわらかいな～♪<br>盛り付けも豪華で、テーブルが華やぐね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='やったー！大成功ね♪<br>フラッキー、ありがとう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
       <?php
        $recipeIcon ='fl_03';
        $speech ='おうよ！<br>残ったスペアリブは、刻んでチャーハンに入れても美味しいぞ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='いいね～！さすがフラッキー！<br>早速夜食に作っちゃおうっと♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="mb0">
      <?php
        include ($inc_path."/lib/inc/page/_magazine/__recipe-new-footer.php");
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
