<?php
//base
include( "../../function.php" );
$content = get_id_data( '14021' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「鮭ときのこのご飯ピザ」の作り方を動画で解説。定番の組み合わせである鮭ときのこを、外はカリカリ、中はモチモチの食感に仕上がる”ご飯ピザ”の具材にして焼き上げます。フライパンひとつで調理可能、簡単に作れるレシピをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

$youTubeId = 'OummRVHTIRM';


//キャプチャALTタグ
$altCap01 = '鮭は一口大に切り、塩、こしょうを振ります。';
$altCap02 = '石づきを取ったしめじと、まいたけを手でほぐします。エリンギは縦半分に切ってから薄切りにします。';
$altCap03 = 'フライパンにオリーブオイル大さじ1/2を入れて中火で熱し、鮭を入れて焼きます。こんがりしたら裏返して、端に寄せてください。';
$altCap04 = '空いているスペースできのこを炒めて、鮭に火が通ったら全体を混ぜ合わせます。<br>その後皿に取り出し、フライパンをペーパーで拭いてください。';
$altCap05 = 'ボウルにご飯、片栗粉、塩ふたつまみを入れて混ぜ、ひとまとめにします。<br>ご飯は炊き立て、または電子レンジで加熱して温めたご飯が混ぜやすいのでおすすめです。冷やご飯のままでも作ることができます。';
$altCap06 = 'ラップにご飯をのせ、上からさらにラップをかけます。<br>フライパンの大きさに合わせて、めん棒でご飯を円形にのばしてください。めん棒がない場合は、コップの底や手でのばしましょう。<br>※今回は直径22cmほどのフライパンを使用';
$altCap07 = 'フライパンにオリーブオイル大さじ1を入れて中火で熱し、円形にのばしたご飯を底面に合わせて入れます。<br>焼き目が付いて、カリっとしてきたら裏返してください。';
$altCap08 = '火を止めて表面全体にトマトソースを塗り、炒めておいた鮭ときのこを並べましょう。<br>その上にピザ用チーズをのせ、蓋をしてチーズが溶けるまで中火で約3分焼きます。';
$altCap09 = '皿に盛り、パセリを散らして完成です。';
$altCap10 = 'アルミホイルの上に、塩・こしょうをした鮭とお好みのきのこ、バターをのせて包みます。熱したフライパンに包みを入れて蓋をしたら、弱火で10～15分蒸し焼きにして完成！<br>バターの香りが食欲をそそる一品です。';
$altCap11 = '炊飯器で炊き込むだけの簡単レシピ。炊飯器に米を入れ、醤油と酒を適量加えます。水を米の分量に合わせて注ぎ、軽く混ぜ合わせたら鮭ときのこをのせて炊き上げてください。<br>鮭をほぐしながら全体を軽く混ぜて、お茶碗に盛ったらできあがりです。青ねぎを散らしていただきましょう！';
$altCap12 = '塩・こしょうした鮭に薄力粉をまぶし、きつね色になるまでソテーしてムニエルを作ります。<br>きのこをバターで炒め、塩・こしょう、レモン汁で味を付けて、器に盛ったムニエルにかけたら完成。きのこは2～3種類を組み合わせると、味に深みが出るのでおすすめです！';
$altCap13 = '和風だしで作る、鮭ときのこのあんかけです。鮭は片栗粉をまぶして揚げ焼きにします。キッチンペーパーで油を拭き取ったフライパンで、玉ねぎ、にんじん、ピーマン、もやしを軽く炒め、めんつゆと水を加えて煮立たせます。水溶き片栗粉を入れて混ぜれば、とろ～り和風あんのできあがり。鮭の上にたっぷりかけていただきます！';
$altCap14 = 'フライパンにオリーブオイルを入れて、きのこ、一口大に切った鮭、玉ねぎを塩・こしょうで炒めます。そこに水、白ワイン、味噌を入れ、沸騰したら好みのかたさにゆでたパスタを加えます。最後に生クリームを加えてさっと絡めたらできあがりです。';
$altCap15 = 'フライパンにバターを入れて、きのこ、一口大に切った鮭、玉ねぎ、ほうれん草を入れて炒め、塩・こしょうで味付けしたら皿に取り出してください。卵、牛乳、生クリーム、粉チーズ、コンソメの素、マヨネーズを混ぜ合わせた卵液に、冷ましておいた野菜を入れて混ぜ合わせます。冷凍パイシートを敷いた型に流し込み、200℃のオーブンで25分～30分焼いたら完成です！';

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
          <p>スーパーに秋の味覚がズラリ！定番の鮭ときのこを使った、ちょっと変わったレシピはないかな～？簡単で、コウちゃんも喜んでくれるものだといいんだけど…。</p>
        </div>
      </div>

      <?php
        $recipeIcon ='mama_02';
        $speech ='旬の鮭ときのこを使った料理を作りたいけど、<br class="u-only__pc">ただのソテーだといつもと同じだなあ…どうしよう～<br>コウちゃん、何か食べたい料理はある？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_01';
        $speech ='ん～、こうちゃんね、<br class="u-only__pc">ぴざがたべたーい！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_02';
        $speech ='ピザ！？<br>でも昨日炊いたご飯がたくさん余ってるのよね～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='おっ、俺の出番みたいだな！<br>
        鮭ときのこを使って<br class="u-only__pc">フライパンだけでできる“ご飯ピザ”なんてどうだい？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_03';
        $speech ='ご飯ピザ⁉ご飯でピザを作れるの？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='そうだ！<br>市販のトマトソースを使えば30分で<br class="u-only__pc">簡単、お洒落なご飯ピザが完成するんだぜ～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_03';
        $speech ='へえ～！食べたことはないけど、なんだか美味しそう♪<br>
        フラッキー、作り方を教えて～！';
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
          <h3 class="recipe__ttl_l mb0">鮭ときのこのご飯ピザの作り方</h3>
          <p class="mb2">ご飯を使ったピザは、外はカリカリ、中はモチモチの仕上がり。旬の鮭ときのこをとろ～りチーズが包み込み、お子さまも大喜び間違いなしの一品です！<br>残りご飯の活用法としてもおすすめのレシピをご紹介します。</p>
          <h4 class="recipe__ttl_recipe">材料（直径22cmのもの1枚分）</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>鮭</dt>
              <dd>2切れ（150g）</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>しめじ</dt>
              <dd>50g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>まいたけ</dt>
              <dd>50g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>エリンギ</dt>
              <dd>小1本（50g）</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>塩</dt>
              <dd>適量</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>こしょう</dt>
              <dd>ひとつまみ</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>ご飯</dt>
              <dd>200g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>片栗粉</dt>
              <dd>大さじ１</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>オリーブオイル</dt>
              <dd>大さじ1・1/2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>トマトソース（市販品）</dt>
              <dd>大さじ3</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>ピザ用チーズ（細かいタイプ）</dt>
              <dd>60g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>パセリ（みじん切り）</dt>
              <dd>適量</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_recipe">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-01@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-02@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-03@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-06@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-07@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-08@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-09@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?>
            </dd>
          </dl>
          <section>
            <h3 class="recipe__ttl_l">鮭×きのこの人気レシピ</h3>
            <p class="mb3">川で誕生し、海で成長を遂げて産卵期の秋に再び川へ戻ってくる鮭。栄養を蓄えた遡上（そじょう）する直前の秋鮭は、脂がのってとても美味しいことで知られています。そんな美味しい秋鮭と旬の味覚であるきのこは、相性抜群！秋に食べたい、鮭ときのこを使ったレシピをご紹介します。</p>
            <div class="mb3">
              <h4 class="recipe__ttl_recipe">鮭ときのこのホイル焼き</h4>
              <div class="u-clearfix">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-10@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」鮭ときのこのホイル焼き｜'. strip_tags($altCap10)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap10); ?>
                </p>
              </div>
            </div>
            <div class="mb3">
              <h4 class="recipe__ttl_recipe">鮭ときのこの炊き込みご飯</h4>
              <div class="u-clearfix">
                <figure class="u-float__right">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-11@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」鮭ときのこの炊き込みご飯｜'. strip_tags($altCap11)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap11); ?>
                </p>
              </div>
            </div>
            <div class="mb3">
              <h4 class="recipe__ttl_recipe">鮭のムニエルきのこバターソース</h4>
              <div class="u-clearfix">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-12@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'鮭のムニエルきのこバターソース |'. strip_tags($altCap12)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap12); ?>
                </p>
              </div>
            </div>
            <div class="mb3">
              <h4 class="recipe__ttl_recipe">鮭の和風きのこあんかけ</h4>
              <div class="u-clearfix">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-13.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-13@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'鮭の和風きのこあんかけ |'. strip_tags($altCap13)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap13); ?>
                </p>
              </div>
            </div>
            <div class="mb3">
              <h4 class="recipe__ttl_recipe">鮭ときのこの味噌クリームパスタ</h4>
              <div class="u-clearfix">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-14.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-14@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'鮭ときのこの味噌クリームパスタ |'. strip_tags($altCap14)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap14); ?>
                </p>
              </div>
            </div>
            <div class="mb3">
              <h4 class="recipe__ttl_recipe">鮭ときのこのキッシュ</h4>
              <div class="u-clearfix">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-15.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/21/recipe21-15@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」フルー鮭ときのこのキッシュ |'. strip_tags($altCap15)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap15); ?>
                </p>
              </div>
            </div>
          </section>
        </div>
      </div>
      <?php
        $recipeIcon ='ko_03';
        $speech ='うわ～、ぴざだー！<br>かりかりでおいし～い！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='チーズもとろとろ～♪<br>鮭とトマトソースって意外と合うんだね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='簡単なのに見た目も豪華で、こんなに美味しいなんて…<br>フラッキー、ありがとう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
       <?php
        $recipeIcon ='fl_01';
        $speech ='ご飯ピザを木製のプレートにのせて生野菜を添えれば、<br class="u-only__pc">一気にカフェ風の盛り付けになるぞ！<br>急なパーティーのときにもおすすめだぜ～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='よーし、ママ友が遊びに来たときに作ってみよう！';
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
