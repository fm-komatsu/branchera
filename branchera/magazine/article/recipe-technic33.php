<?php
//base
include( "../../function.php" );
$content = get_id_data( '15033' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「野菜の冷凍保存方法」を動画で解説。たまねぎ、だいこん、ほうれん草、トマトなど、よく使われる野菜を冷凍保存する方法をご紹介します。適した容器や保存期間の目安など、知っておくと役立つ情報をお届けします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'tXMSVlGU3UU';

//導入文
$introTxt = '第33回は「野菜の冷凍保存方法」です。さっと使えて、時短にもなる野菜の冷凍保存方法をご紹介します。';


//キャプチャALTタグ
$altCap01 = '野菜は新鮮なうちに適した方法で冷凍することで、味や食感の変化を防ぐことができます。<br>小分けにして保存すると、そのまま調理ができるので時短になります。';
$altCap02 = 'たまねぎは、みじん切りや薄切りにします。';
$altCap03 = '使いやすい分量に小分けにして、ラップで包みます。';
$altCap04 = 'ファスナー付きの保存袋に入れて、密閉して冷凍保存します。<br>保存期間の目安は、約2週間です。';
$altCap05 = 'にんじんは、みじん切りにします。<br>手間がかかるみじん切りを冷凍しておくことにより、すぐに調理ができるため、時短になります。';
$altCap06 = '使いやすい分量に小分けにして、ラップで包みます。<br>ファスナー付きの保存袋に入れて、密閉して冷凍保存します。<br>保存期間の目安は、約2週間です。';
$altCap07 = 'だいこんは、すりおろしてから軽く水気を切ります。<br>すりおろしただいこんは冷凍しても変化が少なく、そのまま使うこともできるので、常備するのにおすすめです。';
$altCap08 = '使いやすい分量に小分けにして、ラップで包みます。<br>ファスナー付きの保存袋に入れて、密閉して冷凍保存します。<br>保存期間の目安は、約2週間です。';
$altCap09 = 'ほうれん草は、少し固めにゆでます。';
$altCap10 = '根元が気になる方は切り落とし、4～5cmに切り分けてからラップで包みます。<br>ファスナー付きの保存袋に入れて、密閉して冷凍保存します。<br>保存期間の目安は、約2週間です。';
$altCap11 = 'トマトはヘタを取り除いた後ざく切り、または切らずに丸ごと保存します。';
$altCap12 = 'ざく切りにしたトマトは、ラップで包みます。';
$altCap13 = '切っていない丸ごとのトマトは、ラップには包みません。<br>ファスナー付きの保存袋に入れて、密閉して冷凍保存します。<br>保存期間の目安は、約2週間です。';
$altCap13 = '切っていない丸ごとのトマトは、ラップには包みません。<br>ファスナー付きの保存袋に入れて、密閉して冷凍保存します。<br>保存期間の目安は、約2週間です。';
$altCap14 = 'かぼちゃ';
$altCap15 = 'いんげん';
$altCap16 = 'オクラ';
$altCap17 = 'かぶ';
$altCap18 = 'なす';
$altCap19 = 'じゃがいも';
$altCap20 = 'キャベツ';

?>
<main class="main">
  <article class="main__row">
  <?php
    $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
    $panAry[] = array( "/magazine/index_comic02.php", "今さら聞けない料理のアレコレ" );
    include( $inc_path . "/lib/inc/pan.php" );
    include($inc_path . "/lib/inc/page/_magazine/__comic02tech-header.php");
    include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-main-v.php");
    ?>
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header technic">
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
        $recipeIcon ='mie_02';
        $speech ='マユ先生、ちょっと相談なんですけど<br class="u-only__pc">私たち共働きなので、平日に夜ご飯を作るのが大変で…<br>帰ってきてすぐに、ささっとご飯を作りたいんですが<br class="u-only__pc">何かよい方法はありますか？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='あ、それなら野菜の冷凍保存がおすすめですよ！<br>週末に野菜をまとめて切って、冷凍しておけば、<br class="u-only__pc">作るときの手間が省けますよ♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_02';
        $speech ='でも、野菜を冷凍保存したら<br class="u-only__pc">美味しくなくなっちゃうんじゃないですか？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='そんなことないですよ！<br>正しい方法で冷凍すれば、美味しく食べることができます';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='お肉と魚の冷凍保存方法は、さっそく活用しているんですけど<br class="u-only__pc">野菜は冷凍保存をしたことがないので、ぜひ教えてほしいです！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='冷凍保存は調理の時間短縮ができるうえ、常温や冷蔵で保存するよりも<br class="u-only__pc">栄養価を高いまま保てるといわれているんですよ<br>ぜひ、一緒に活用していきましょうね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie technic">
        <h3 class="recipe-movie__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
           alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
        </h3>
        <div class="recipe-movie__video">
          <div class="recipe-movie__video_base">
            <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">野菜の冷凍保存方法</h3>
          <p class="mb3">毎日料理に使う野菜を事前にカットして冷凍しておけば、時短になって料理がとっても楽になります。野菜別の下ごしらえと冷凍保存方法をお伝えしましょう。</p>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-01@2x.jpg"
                 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap01); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">たまねぎ</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-02@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」たまねぎ｜'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-03@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」たまねぎ｜'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-04@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」たまねぎ｜'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">にんじん</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-05@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」にんじん｜'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-06@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」にんじん｜'. strip_tags($altCap06)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">だいこん</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-07@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」だいこん｜'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-08@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」だいこん｜'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">ほうれん草</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-09@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」ほうれん草｜'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?></dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-10@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」ほうれん草｜'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap10); ?></dd>
          </dl>
          <h4 class="recipe__ttl">トマト</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-11@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」トマト｜'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap11); ?></dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-12@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」トマト｜'. strip_tags($altCap12)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap12); ?></dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-13.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-13@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」トマト｜'. strip_tags($altCap13)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap13); ?></dd>
          </dl>
          <h4 class="recipe__ttl"><?php echo ($altCap14); ?></h4>
          <div class="u-clearfix mb3">
            <div class="u-float__left">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-14.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-14@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap14.'｜'. strip_tags($altCap14)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </div>
            <p class="mb2">
            <a href="<?php echo($base_url)?>/magazine/article/recipe-technic31.php" class="recipe-design__link">かぼちゃ</a>は水分を含んだところから傷み始めます。ですので、まずワタと種をスプーンなどでしっかり取り除きましょう。余分な水分を拭き取ってから、食べやすい形にカットします。一回分ごとに小分けしてラップに包んでおきましょう。角切りは煮物などに、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>はソテーなどに使えますよ。また、ゆでたかぼちゃを潰した状態で保存することもできます。ペーストなどを作る際に便利です。</p>
            <p>どちらもファスナー付きの保存袋に入れて、密閉して冷凍保存します。保存期間の目安は、約2週間です。</p>
          </div>
          <h4 class="recipe__ttl"><?php echo ($altCap15); ?></h4>
          <div class="u-clearfix mb3">
            <div class="u-float__right">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-15.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-15@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap15.'｜'. strip_tags($altCap15)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </div>
            <p class="mb2">
            いんげんはよく洗ってから筋を除き、ヘタを包丁でカットします。そのまま保存する場合は、水分をよく拭き取ってからラップで包みましょう。<br>また、ゆでてから冷凍する方法もあります。まずゆでたいんげんを、水にさらさずに冷ましてください。キッチンペーパーで水気を拭き取り、小分けにしてラップで包みます。</p>
            <p>どちらもファスナー付きの保存袋に入れて、密閉して冷凍保存します。<br>保存期間の目安は、約1ヵ月です。</p>
          </div>
          <h4 class="recipe__ttl"><?php echo ($altCap16); ?></h4>
          <div class="u-clearfix mb3">
            <div class="u-float__left">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-16.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-16@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap16.'｜'. strip_tags($altCap16)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </div>
            <p class="mb2">
            オクラはまず全体に塩をまぶし、まな板に押し付けながら転がして、板ずりをします。板ずりをすることで、オクラの産毛の処理ができます。その後、ヘタの部分を取り除き、使う分量ごとにラップで包んでください。スライスして保存しておくと、すぐに使えて便利ですよ。</p>
            <p>ファスナー付きの保存袋に入れて、密閉して冷凍保存します。<br>保存期間の目安は、約1ヵ月です。</p>
          </div>
          <h4 class="recipe__ttl"><?php echo ($altCap17); ?></h4>
          <div class="u-clearfix mb3">
            <div class="u-float__right">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-17.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-17@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap17.'｜'. strip_tags($altCap17)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </div>
            <p>
            かぶは、葉の部分は3~4cmの長さに切って、水気を拭きましょう。その後使いやすい分量ごとにラップで包んでください。<br>かぶの実は、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>や<a href="<?php echo($base_url)?>/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>などにし、水気を拭き取ってからラップで包みます。</p>
            <p>どちらもファスナー付きの保存袋に入れて、密閉して冷凍保存します。<br>保存期間の目安は、約3〜4週間です。</p>
          </div>
          <h4 class="recipe__ttl"><?php echo ($altCap18); ?></h4>
          <div class="u-clearfix mb3">
            <div class="u-float__left">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-18.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-18@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap18.'｜'. strip_tags($altCap18)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </div>
            <p class="mb2">
            ヘタを取り、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a>や<a href="<?php echo($base_url)?>/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>などの切り方で使いやすい大きさにカットします。その後、水に10分ほど浸してアク抜きをしてください。アク抜きが終わったら、キッチンペーパーで水気を拭き取り、小分けしてラップで包みましょう。</p>
            <p>ファスナー付きの保存袋に入れて、密閉して冷凍保存します。<br>保存期間の目安は、約1ヵ月です。</p>
          </div>
          <h4 class="recipe__ttl"><?php echo ($altCap19); ?></h4>
          <div class="u-clearfix mb3">
            <div class="u-float__right">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-19.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-19@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap19.'｜'. strip_tags($altCap19)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </div>
            <p class="mb2">
            皮をむいて、棒状やくし形など小さく使いやすい形にカットします。水にさらした後、水気をしっかり拭き取り、ラップで包んでください。ファスナー付きの保存袋に入れて、密閉して冷凍保存します。保存期間の目安は、約1ヵ月です。</p>
            <p>加熱したじゃがいもは、味や食感が変わってしまうので、そのまま冷凍するのは避けましょう。<a href="<?php echo($base_url)?>/magazine/article/recipe-technic67.php" class="recipe-design__link">マッシュポテト</a>などに加工してから、ファスナー付きの保存袋に入れて冷凍してください。</p>
          </div>
          <h4 class="recipe__ttl"><?php echo ($altCap20); ?></h4>
          <div class="u-clearfix mb3">
            <div class="u-float__left">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-20.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/33/tech33-20@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap20.'｜'. strip_tags($altCap20)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </div>
            <p class="mb2">
            大きなキャベツを丸ごと冷蔵庫で保存するのはなかなか大変。場所をとるため、すぐに使わない分は<a href="<?php echo($base_url)?>/magazine/article/recipe-technic18.php" class="recipe-design__link">千切り</a>やざく切りにして冷凍保存しましょう。<br>カットしたキャベツはまず水に浸けて、水分を含ませておきます。数分したらざるに上げて、しっかり水気を切ってください。</p>
            <p>また、ざく切りにして塩をまぶしたキャベツや、サッとお湯でゆがいたキャベツも冷凍で保存可能です。こちらも千切りと同様、水気を切っておきましょう。<br>どの状態のキャベツもファスナー付きの保存袋に入れて、密閉して冷凍保存します。保存期間の目安は、約1ヵ月です。</p>
          </div>
          <h3 class="recipe__ttl_l mb0">冷凍野菜で時短できるレシピ</h3>
          <p class="mb3">冷凍保存した野菜は、解凍せずにそのまま調理することも可能です。また、野菜をペースト状にして冷凍しておけば、子どもの離乳食にも使えて大変便利。冷凍野菜を使うと大きく時短できるレシピをご紹介します。</p>
          <h4 class="recipe__ttl">入れるだけ！簡単スープ</h4>
          <p class="mb2">冷凍野菜を手軽に使えるのがスープメニュー。あらかじめカットした野菜を冷凍しておけば、直接スープに入れて使えるのでとっても便利。個々に冷凍しておいた野菜を使ってもよいですし、お好きな野菜を組み合わせて、まとめてファスナー付きの保存袋に入れておいてもOKです。忙しい朝や、もう一品野菜料理が欲しい…というときにぜひ作ってみてください。</p>
          <h5 class="recipe__ttl_s">味噌汁</h5>
          <p class="mb2">沸騰しただし汁に冷凍野菜を入れ、火が通ったら味噌を溶くだけ！この味噌汁におにぎりを添えれば、立派な一食になりますよ。</p>
          <h5 class="recipe__ttl_s">洋風野菜スープ</h5>
          <p class="mb2">お好きな冷凍野菜をコンソメスープに入れて煮れば、具沢山の洋風野菜スープが出来上がり。一緒にソーセージや厚切りベーコンなどを入れれば、ポトフ風の仕上がりになります。</p>
          <h4 class="recipe__ttl">冷凍野菜ペーストでらくちん離乳食</h4>
          <p class="mb2">ブレンダーなどでつぶした野菜をお湯やミルクでのばし、ペースト状にして冷凍しておきましょう。準備が大変な離乳食も、ササっと簡単に用意することができます。</p>
          <p>ペーストにする野菜は、にんじんやかぼちゃなど、甘みの強いものがおすすめ。作ったペーストは、製氷皿に入れて冷凍保存します。1週間をめどに使い切りましょう。<br>解凍する際は、だしやお湯が入った鍋にそのまま入れるか、電子レンジを利用してください。加熱するとかぼちゃなどはパサっとした食感になるので、様子を見て少量の水を追加しながら解凍するのがポイントです。<br>子どもの好みに合わせて、いろいろな野菜ペーストを冷凍してみてください。</p>
        </div>
      </div>
      <?php
        $recipeIcon ='mie_01';
        $speech ='野菜の冷凍って、下ゆでをしなきゃいけないのかと思っていましたが、<br class="u-only__pc">生のまま冷凍できるものもあるんですね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='アクが強いほうれん草やたけのこは、<br class="u-only__pc">しっかり下ゆでをしてから冷凍してくださいね！<br>野菜を冷凍保存する際のポイントは、洗ったら水気をよく拭いて、<br class="u-only__pc">保存袋の空気はしっかりと抜くことです！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='野菜を冷凍保存するだけで、料理の手間が省けるのは嬉しい♪<br>これからは、野菜の冷凍保存を賢く活用しよう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<div class="recipe__assist">
				<div class="recipe-assist">
					<div class="recipe-assist__row">
						<h3 class="recipe-assist__ttl">用語解説</h3>
						<dl class="recipe-assist__term">
							<dt>板ずりとは</dt>
							<dd>野菜の下ごしらえ方法の1つ。きゅうりやオクラ、ふきなどの表面に食塩をまぶし、まな板に押し付けながら転がす。野菜のイボや産毛が取れてやわらかくなり、色がきれいになる。そのほか、味が染みやすくなるなどの効果がある。</dd>
						</dl>
						<dl class="recipe-assist__term">
							<dt>ブレンダーとは</dt>
							<dd>材料を切り刻み細かくして、混ぜ合わせるキッチン家電。ポタージュやジュースを作るときに用いられる。別名はミキサー。</dd>
						</dl>
					</div>
				</div>
			</div>
      <div class="mb0">
        <?php
        include ($inc_path."/lib/inc/page/_magazine/__recipe-technic-footer.php");
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
