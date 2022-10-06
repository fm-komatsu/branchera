<?php
//base
include( "../../function.php" );
$content = get_id_data( '15068' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「アボカドのむき方」を動画とテキストで解説。アボカドの皮をツルンときれいにむくコツをご紹介します。包丁を使う基本の手順のほか、コップやスプーンを使って簡単にむく裏ワザもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'V-OFnGfHsYE';

//導入文
$introTxt = '第68回は「アボカドのむき方」です。失敗しない手順から、応用レシピまで詳しくご紹介します。';

//キャプチャALTタグ
$altCap01 = 'アボカドを片手に持ちます。縦半分に、種に当たるところまで包丁を入れてください。';
$altCap02 = '少しずつ回転させながら、ぐるっと１周切り込みを入れます。';
$altCap03 = '切り込みを入れた上半分と下半分を持ちます。互い違いになるようにねじりながら回して、２つに割ります。';
$altCap04 = '包丁のあご（直角の部分）を種に刺して、ねじるようにして種を取り出します。<br>※半分だけ使う場合は種を取らずに保存します。';
$altCap05 = '手でゆっくり皮をむき終えたら、好みの大きさに切りましょう。';
$altCap06 = '縦半分にカットして2つに割った後、使わなかったアボカドは、皮をむかず、種も取らずに冷蔵保存します。<br>空気に触れないようにラップに包み、冷蔵庫の野菜室に入れて保存しましょう。保存期間の目安は、約1日です。';
$altCap07 = 'アボカドとトマトのサラダ';
$altCap08 = 'アボカドディップ';
$altCap09 = 'アボカドグラタン';
$altCap10 = '';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';
$altCap14 = '';
$altCap15 = '';

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
        $recipeIcon ='papa_01';
        $speech ='今日はアボカドサラダを作ろうかな～<br>ママがアボカド大好きなんだよね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='おっ。奥さんを大事にするのはよい心がけだな、マサキ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_02';
        $speech ='でも、このアボカド、<br class="u-only__pc">どうやって皮をむいたらいいのかな？<br>種もどう取ればいいのか分からないぞ…<br>う～ん、やっぱり無理かも…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_02';
        $speech ='おいおい！諦めたらそこで試合終了だろ！<br>俺が教えるから、<br class="u-only__pc">ミエに美味しいアボカドを食べさせてあげようぜ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='フラッキー…ありがとう！<br>よーし。しっかり覚えて、<br class="u-only__pc">ママに美味しいアボカドを食べてもらうぞ！';
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
          <h3 class="recipe__ttl_l mb0">アボカドのむき方</h3>
          <p class="mb2">そのまま食べても美味しく、サラダにもぴったりなアボカド。皮のむき方、種の取り出し方は意外と簡単です。上手な皮のむき方、種の取り出し方をお伝えします。</p>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-01@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-02@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-03@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-04@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <section>
            <?php // check
              $check_cnt ='<h5>桃をむくときにも応用可能！</h5>
              <p>アボカドのむき方は、桃をむくときにも応用できるぞ！<br>まず種に当たるまで包丁を入れ、ぐるっと1周切り込みを入れよう。アボカドと同様に、切り込みの上半分と下半分を持ってねじると、2つに割れるぞ～。手かスプーンなどで種を取り除いたら、包丁で皮をむいて完了だぜ！</p>';
              include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
            ?>
          </section>
          <section>
          <?php // plus1
            $plus1_ttl ='包丁いらず！アボカドを簡単にむく裏ワザとは？';
            $plus1_cnt ='<p>包丁を使わずに、ツルっとアボカドをむく裏ワザをご紹介します！</p>
            <h5 class="recipe__ttl_s">コップを使う</h5>
            <p>アボカドのカーブの角度に合った飲み口のコップを用意します。種を取り除いたアボカドの皮と実の間を、コップの縁に押し付けてください。コップの縁でアボカドの実をすくい取るように、皮と実を切り離していきましょう。</p>
            <h5 class="recipe__ttl_s">スプーンを使う</h5>
            <p>種を取り除いたアボカドの皮と実の間に、スプーンを差し込みます。そのまますくうようにして、実をくり抜きましょう。一口大にくり抜けば、そのままサラダにのせることができますよ。まな板を使わずに済む、便利なカット方法です。</p>';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>
          <h3 class="recipe__ttl_l mb0">アボカドの保存方法</h3>
          <p class="mb2">アボカドは皮をむいたまま放置しておくと、茶色く変色してしまいます。アボカドが変色しない保存方法をお伝えします。</p>
          <h4 class="recipe__ttl">残ったアボカドの保存方法</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-06@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <p class="mb2">表面の変色が気になる場合は、レモン汁を適量かけてからラップをしましょう。レモン汁に含まれる酸には、変色を防ぐ効果があります。</p>
          <?php // plus1
            $plus1_ttl ='レモン汁の代わりに使えるもの';
            $plus1_cnt ='<p>変色を防ぐためのレモン汁がない場合は、お酢でも同じ効果が期待できます。ただし、特有の匂いが付いてしまうので、調理をしないでそのまま食べる場合は、避けるのがベターです。
            また、オレイン酸が豊富なオリーブオイルを表面に塗ることでも、酸化による変色を防ぐことができます。</p>';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          <h3 class="recipe__ttl_l mb3">アボカドの人気レシピ</h3>
          <div class="mb2">
            <h4 class="recipe__ttl"><?php echo (strip_tags($altCap07)); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__left w50">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-07@2x.jpg"
              alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>トマトとアボカドは好きな大きさにカットします。レモン汁、オリーブオイル、塩、ブラックペッパーでドレッシングを作り、アボカドが崩れないように混ぜ合わせましょう。チーズをカットして入れたり、グレープフルーツを入れたりしても美味しいサラダになりますよ。</p>
            </div>
          </div>
          <div class="mb2">
            <h4 class="recipe__ttl"><?php echo (strip_tags($altCap08)); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__right w50">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-08@2x.jpg"
              alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>アボカドは適当な大きさに切って器に入れ、フォークなどでざっくりと潰します。玉ねぎのみじん切り、レモン汁、マヨネーズを加えて、黒こしょうを振ったらできあがり。トルティーヤチップスやバケットに、生ハム、クリームチーズなどと一緒にのせて召し上がれ。</p>
            </div>
          </div>
          <div class="mb2">
            <h4 class="recipe__ttl"><?php echo (strip_tags($altCap09)); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__left w50">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/68/tech68-09@2x.jpg"
              alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>アボカドの実をスプーンでくり抜いて、ボウルに入れます。カットしたハム、シュレッドチーズ、マヨネーズを加え、軽く混ぜましょう。具をくり抜いたアボカドの皮に詰め、残りのチーズをのせてオーブンで焼きます。200度のオーブンで15～20分ほど加熱したら完成です。</p>
            </div>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='papa_01';
        $speech ='アボカドの皮、きれいにむけたよ<br>フラッキー、ありがとう～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='マサキ、よかったな！<br>これでアボカドサラダをミエとコウちゃんに食べさせてあげられるぞ♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='フラッキーのおかげで助かったよ！<br>ちなみに、美味しい食べごろのアボカドを選ぶポイントってある？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='きれいな形をしていて皮にハリツヤがあり、触ると弾力があるものがよいぞ！<br>皮は、黒みがかった濃い緑色のものを選ぼう！<br>熟しているけど熟し過ぎていない、絶妙なアボカドがこの色になるんだ♪<br>ヘタが取れているもの、ヘタの周囲がやわらかくなっているものは<br class="u-only__pc">酸化して黒くなっている可能性があるから避けるのがベターだぜ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='さすが！なんでも知ってるんだな～<br>次からはベストなアボカドが選べそう！<br>フラッキー、これからも、よろしく♪';
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
