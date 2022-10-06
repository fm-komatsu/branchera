<?php
//base
include( "../../function.php" );
$content = get_id_data( '15071' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「基本のスポンジケーキの作り方」を動画で解説。15cm丸型を使って、ふわふわのスポンジケーキを作るコツをお伝えします。上手に作るポイントは、卵を十分に泡立てること！ちょうどよい泡立て具合の確認方法もご紹介します。';
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
$youTubeId = 'A374ensRnlk';

//導入文
$introTxt = '第71回は、「スポンジケーキの作り方」です。手作りケーキの土台となる、スポンジケーキの作り方をご紹介します。';

//キャプチャALTタグ
$altCap01 = 'オーブンを180℃に予熱して、型（15cm丸型）の側面と底面に、クッキングシートを敷いておきます。';
$altCap02 = 'ボウルに薄力粉をふるっておきます。';
$altCap03 = '耐熱容器にバターと牛乳を入れ、湯せんにかけてよく溶かしましょう。';
$altCap04 = '薄力粉と別のボウルに卵を割りほぐします。さらにグラニュー糖を加え、ハンドミキサーでざっと混ぜてください。';
$altCap05 = '卵とグラニュー糖を湯せんにかけ、ハンドミキサーで泡立てます。人肌くらいになったら、湯せんから外してください。<br>なお、泡立て器でも泡立てはできますが、難易度が高いため、初心者の方にはハンドミキサーがおすすめです。';
$altCap06 = '湯せんから外したら、ハンドミキサーでさらに泡立てていきます。';
$altCap07 = 'ちょうどよい泡立ての目安はどのくらい？';
$altCap08 = '薄力粉を加えて、ゴムベラですくいあげながら混ぜます。';
$altCap09 = 'きれいに混ざったら、温めておいたバターと牛乳をゴムベラに伝わせながら加えて、素早く混ぜます。';
$altCap10 = '生地がなめらかでつやのある状態になったら、クッキングシートを敷いた型に流し入れてください。';
$altCap11 = '生地を型に流し入れたら、型の底をトントンと3～4回叩いて、小さな気泡を消します。';
$altCap12 = '予熱したオーブンで、25～30分焼きます。焼き時間は、使用するオーブンによって加減が異なるため、様子を見ながら調整してください。';
$altCap13 = '焼きあがったら、ペーパーが付いたまま型から出します。ケーキクーラーの上にのせて、冷めたらペーパーを取りましょう。';
$altCap14 = 'チョコレート風味のスポンジケーキ';
$altCap15 = '抹茶風味のスポンジケーキ';
$altCap16 = 'サンタさんのいちごケーキ';

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
        $speech ='コウちゃん、今度お友達のお誕生日パーティーがあるよね<br>ママが手作りショートケーキ、作ってあげようか？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_01';
        $speech ='わーい、やったあ～！<br>でもまえはけーき、しぼんじゃったから<br class="u-only__pc">こんどはふわふわがいい～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_03';
        $speech ='あっ…そういえばそうだったわ<br>前に作ったときは、全然スポンジが膨らまなかったのよね！<br class="u-only__pc">すっかり忘れてたけど、また同じ失敗をしちゃったらどうしよう～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='おっ！俺の出番のようだな～<br>スポンジケーキを上手に作るには、コツがあるんだぜ！<br>よ～し、俺が失敗しないスポンジケーキの作り方を教えてやるよ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='さすが、フラッキー！ <br>ぜひぜひ、お願いしま～す！';
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
          <h3 class="recipe__ttl_l mb0">スポンジケーキの作り方</h3>
          <p class="mb2">誕生日やクリスマスなど、パーティーシーンを彩る手作りケーキ。その土台となるスポンジケーキを作るには、いくつかのコツが必要です。<br>今回は、作りやすい15cm丸型のスポンジケーキにチャレンジ！コツを押さえて、ふわふわのスポンジケーキを作ってみましょう。</p>
          <h4 class="recipe__ttl_tech">材料（15cm丸型使用）</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>卵</dt>
              <dd>2個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>グラニュー糖</dt>
              <dd>60g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>薄力粉</dt>
              <dd>60g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>バター（食塩不使用）</dt>
              <dd>20g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>牛乳</dt>
              <dd>10g</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-01@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-02@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-03@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-04@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <section>
          <?php // check
            $check_cnt ='<h3>「人肌」の目安とは？</h3>
            <p class="mb2">人肌とは、人の体温と同じくらい（36℃前後）の温度。端的にいうと、「熱くも冷たくもない」状態のことだ。通常、直接指を入れて測るぞ。<br>温める」場合と「冷ます」場合、それぞれの判断のヒントは以下の通り！</p>
            <h4 class="recipe__ttl_s">「人肌まで温める」場合</h4>
            <p class="mb2">冷たい状態から温めていくので、触ったときにややぬるく感じる程度が目安。</p>
            <h4 class="recipe__ttl_s">「人肌まで冷ます」場合</h4>
            <p class="mb2">熱い状態から冷ましていくので、触ったときに熱く感じない程度が目安。</p>
            <p>指先の感覚を研ぎ澄ませておこうな！</p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>

          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-06@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <section>
          <?php // check
            $check_cnt ='<h3>ちょうどよい泡立ての目安はどのくらい？</h3>
            <div class="u-clearfix">
            <figure class="u-float__left">
                <img data-src="'.$img_url.'/magazine/comic02/technic/71/tech71-07.jpg" data-retina="'.$img_url.'/magazine/comic02/technic/71/tech71-07@2x.jpg"
                 alt="フラッキーのHow To「'.$pageTtl.'」'. strip_tags($altCap07).'" style="max-width:300px" class="u-img__max">
              </figure>
              <p class="mb2">卵の泡立て不足は、スポンジが膨らまない原因のひとつ！きれいにスポンジを膨らませるには、卵液を泡立て器ですくったときに、羽（食材をかき混ぜる部分）に生地が一瞬留まってから、トロリと帯状になって落ちるくらいまで泡立てる必要があるぞ。よく帯状になって液が落ちる状態を「リボン状」というが、たとえ帯状でも、サラサラと落ちる状態だとまだ泡立てが足りないぜ。</p>
              <p>ここでおすすめしたいのが、すくったときに落ちる卵液で十字を描いて、泡立て具合を確認する方法だ！<br>横線→縦線の順で十字を描いて、縦線を引いたときにまだ横線が残っているくらいが、ちょうどよい泡立て具合だぞ。ぜひお試しあれ！
              </p>
            </div>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-08@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-09@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-10@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap10); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-11@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap11); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-12@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap12)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap12); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-13.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-13@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap13)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap13); ?>
            </dd>
          </dl>
          <h3 class="recipe__ttl_l mb0">人気のアレンジレシピ</h3>
          <p class="mb2">手軽に作れる、スポンジケーキのアレンジレシピをご紹介します。</p>
          <h4 class="recipe__ttl_tech"><?php echo $altCap14 ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__right w50">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-14.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-14@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap14)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>バレンタインデーなどにも使える、チョコレート風味のスポンジケーキ。基本のスポンジケーキの材料の、薄力粉の一部をココアパウダーに変えて作成します。薄力粉45gとココアパウダー15gを合わせてふるい入れて、よく混ぜておきましょう。あとは、基本のスポンジケーキと同じ手順で進めれば完成です。</p>
          </div>
          <h4 class="recipe__ttl_tech"><?php echo $altCap15 ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__left w50">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-15.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-15@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap15)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>グリーンが美しい、抹茶風味のスポンジケーキは和風ケーキにおすすめ！チョコレート風味の場合と同様に、薄力粉の一部を抹茶パウダーに変えて作成します。薄力粉50gと抹茶パウダー10gを合わせてふるい入れて、よく混ぜておきましょう。あとは、基本のスポンジケーキと同じ手順で進めればできあがりです。</p>
          </div>
          <h4 class="recipe__ttl_tech"><?php echo $altCap16 ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__right w50">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-16.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/71/tech71-16@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap16)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p class="mb2">基本のスポンジケーキが完成したら、生クリームやフルーツなどを使ってデコレーションしてみましょう！<br>いちごの赤いサンタ帽、絞った生クリームを白いひげに見立てた<a href="<?php echo($base_url)?>/magazine/article/recipe13.php" class="recipe-design__link">サンタさんのいちごケーキ</a>は、クリスマスにぴったりのデコレーションです。生クリームの泡立て方のコツは、「<a href="<?php echo($base_url)?>/magazine/article/recipe-technic51.php" class="recipe-design__link">生クリームを簡単に泡立てる方法</a>」の記事をご覧ください。</p>
            <p>このほかにも、お好きなフルーツを使ってアレンジしてみてくださいね！</p>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='mama_01';
        $speech ='ふわふわのスポンジケーキができたわ～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='ほんとだ、ふわふわだ～！まますご～い！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='すごいな、パティシエが作ったみたいだ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='卵の泡立て加減がバッチリだったから、スポンジがちゃんと膨らんだな！<br>よく頑張ったぞ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='よかったあ、ホッとした～！<br>さぁ、きれいにデコレーションして、豪華なケーキに仕上げるぞ！';
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
