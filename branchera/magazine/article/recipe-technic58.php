<?php
//base
include( "../../function.php" );
$content = get_id_data( '15058' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「大根おろしの作り方」を動画で解説。おろし器を使う基本の作り方のほか、おろし金とざる、おろし金と巻き簾を使う作り方もご紹介します。また、辛さを抑えて美味しい大根おろしを作るコツもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'PSeDLbZ4868';

//導入文
$introTxt = '第58回は「大根おろしの作り方」です。辛味を抑えてみずみずしく仕上げる、大根おろしの上手な作り方をご紹介します。';

//キャプチャALTタグ
$altCap01 = '大根は約10cmの長さに切って、皮をむいておきます。';
$altCap02 = '縦半分に切ります。';
$altCap03 = 'おろし器に対して、大根を<strong>垂直に押し当てて、円を描くように</strong>、やさしくゆっくりとすりおろします。';
$altCap04 = 'おろした大根を指で押さえて、水気を絞ります。';
$altCap05 = 'おろし金に対して、大根を垂直に押し当てます。<br>おろし器と同じ要領で、ゆっくり円を描くようにすりおろします。';
$altCap06 = 'おろした大根をざるに上げ、指でざるに押し当てて軽く水気を絞ります。';
$altCap07 = 'バットの上に巻き簾をのせ、おろし金ですりおろした大根をのせます。';
$altCap08 = 'おろした大根を巻き簾で絞ります。大根をのせた巻き簾を両端から丸め、圧をかけて水気を絞ります。';
$altCap09 = '牛しゃぶしゃぶ肉や鶏もも肉、長ねぎ、白菜、きのこなどを煮た鍋に、たっぷりの大根おろしを入れてさらにひと煮立ちさせます。やさしい味わいで思わずおかわりが進んでしまう、冬の定番鍋料理です。';
$altCap10 = '醤油、みりん、酒を軽く煮詰めて“たれ”を作ります。肉汁たっぷりのジューシーなハンバーグに大根おろしをのせ、先に作った“たれ”をかければ、和風ハンバーグのできあがり。しゃぶしゃぶ用のおろしだれにも使えますよ。';
$altCap11 = '意外な組み合わせですが、<a href="recipe-technic39.php" class="recipe-design__link">味噌汁</a>のコクとさっぱりした大根おろしが相性抜群です。
まず、豆腐や長ねぎなど味噌汁の具材を入れて火を通します。その後、大根おろしを加えてひと煮たちさせたところで、味噌を加えます。大根おろしが余ってしまったときにもおすすめです！';
$altCap12 = 'モチモチの食感がくせになりそうな、大根おろし入りのすいとんです。小麦粉に塩少々と大根おろしを混ぜたすいとんの生地を、沸騰しただし汁にスプーンで落とします。さらにお好みの具と一緒に煮込み、醤油などで味を調えたらできあがり。';
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
        $recipeIcon ='papa_02';
        $speech ='えっ何この大根おろし、辛っ！<br>しかもパッサパサ…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='マサキ、鼻押さえてどうした？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_02';
        $speech ='晩酌のおつまみに甘い卵焼きを作ったから<br class="u-only__pc">大根おろしを添えたいなあと思ったんだけど…<br>ものすごく辛いし、水気を絞ったらパサついちゃって';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='大根おろしを美味しく仕上げるには、ポイントがあるからな<br>よし、辛くない大根おろしの作り方を俺が伝授しよう<br>ついて来いよ、マサキ！';
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
          <h3 class="recipe__ttl_l mb0">大根おろしの作り方</h3>
          <p class="mb2">料理の付け合わせや薬味に使われる大根おろし。さっぱりと口直しをしてくれるほか、消化吸収を助ける役割もあるといわれています。辛味が強く出たり、パサついたりといった失敗を防いで、美味しい大根おろしを作る方法をご紹介します。使用する調理器具に合わせてご覧ください。</p>
          <h4 class="recipe__ttl_tech">大根の準備（どの調理器具にも共通）</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-01@2x.jpg"
                 alt="フラッキーのHow To <?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl_tech">「おろし器」を使う場合</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <div class="recipe-check mb3">
            <div class="recipe-check__row">
              <div class="recipe-check__ttl">
                <h4>
                <div class="recipe-check__ex center">
                  <img
                  data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png"
                  data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png"
                  alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
                </div>
                <span>辛味を抑えるコツ</span></h4>
                <p class="mb2">辛くない大根おろしを作るには、比較的甘味が強い葉に近い部分を使おう！少しピリッとした辛味も効かせたい場合は、真ん中あたりの部分がおすすめだぜ。<br>おろすときは、繊維に沿って円を描くようにやさしくおろすと、辛味成分（アリルイソチオシアネート）が出にくくなるぞ。逆に、辛くしたい場合は直線に一気にすりおろそう。大根の辛味成分は細胞が壊れることで生成されるから、真っすぐおろすと細胞の繊維が断ち切られて、辛味成分が出やすくなるんだ。<br>そして、この辛味成分は揮発性だから、時間がたつと蒸発して減少するぜ。おろした後20～30分放置すると、おろしたての状態よりも辛味が落ち着いて食べやすくなるぞ！</p>
              </div>
            </div>
          </div>
          <div class="recipe-check mb3">
            <div class="recipe-check__row">
              <div class="recipe-check__ttl">
                <h4>
                <div class="recipe-check__ex center">
                  <img
                  data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png"
                  data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png"
                  alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
                </div>
                <span>水気の絞り具合の目安</span></h4>
                <p class="mb2">大根おろしのちょうどよい絞り具合は、用途によって変わるぞ。卵焼きや焼き魚の付け合わせとして使う場合は、指でつまんでも汁が落ちてこないくらいを目安にしよう。絞り過ぎると辛くなるので注意！<br>ドレッシングやソースに混ぜる場合は、水気で味が薄まらないようにしっかり絞るのがコツだ。</p>
              </div>
            </div>
          </div>
          <h4 class="recipe__ttl_tech">「おろし金」と「ざる」を使う場合</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-06@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl_tech">巻き簾（まきす）で水分を絞る場合</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-07@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-08@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-plus1 mb3">
              <div class="recipe-plus1__row">
                <h4 class="recipe-plus1__ttl">皮ありの大根おろしを作りたい場合は？</h4>
                <p class="mb0">大根の皮には、ビタミンCや食物繊維などの栄養素が含まれています。「栄養豊富な皮ありの大根おろしを作りたい！」という場合は、9～2月頃の秋冬にとれた大根がおすすめです。大根は、強い日差しを浴びずに育つと、皮付近に含まれる苦味成分のポリフェノールが少なくなるからです。おろし器に対して垂直に大根を当てておろせば、繊維が細かくなって、皮ありでもソフトな口当たりに。ただし、皮がない状態よりも辛味は出やすくなります。</p>
              </div>
            </div>
          </section>
          <section>
            <div class="recipe-plus1 mb3">
              <div class="recipe-plus1__row">
                <h4 class="recipe-plus1__ttl">おろし金なしで作る方法とは？</h4>
                <p class="mb0">おろし金がない場合は、フードプロセッサーやミキサー、ブレンダーで代用することもできます。適当な大きさに切った大根を調理器具に入れて、様子を見ながら数秒ずつ回しましょう。大根おろし用のアタッチメントが付いている場合は、説明書に沿ってそれを使用してください。</p>
              </div>
            </div>
          </section>
          <h4 class="recipe__ttl_l">簡単に作れる、大根おろしを使ったレシピ</h4>
          <p class="mb2">大根おろしを使った、簡単＆美味しいレシピをご紹介します。</p>
          <h5 class="recipe__ttl_tech">みぞれ鍋</h5>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__left">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-09@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap09); ?>
              </span>
            </p>
          </div>
          <h5 class="recipe__ttl_tech">和風ハンバーグ</h5>
          <div class="u-clearfix">
            <p>
              <figure class="u-float__right">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-10@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap10); ?>
              </span>
            </p>
          </div>
          <h5 class="recipe__ttl_tech">大根おろしの味噌汁</h5>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__left">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-11@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap11); ?>
              </span>
            </p>
          </div>
          <h5 class="recipe__ttl_tech">大根おろしすいとん</h5>
          <div class="u-clearfix">
            <p>
              <figure class="u-float__right">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/58/tech58-12@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap12)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap12); ?>
              </span>
            </p>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='papa_01';
        $speech ='ほどよい辛味で、しっとりやわらかい大根おろしだ！<br>卵焼きがますます美味しくなるなぁ♪だし巻き卵にも合いそうだな～。<br>…あれ、フラッキーは何をやってるの？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='のどにいい、はちみつ大根を飲んでるんだよ！<br>大根をおろした後余った水分にはちみつを混ぜると、<br class="u-only__pc">即席のはちみつ大根になるんだ！<br>マサキに教えるときはつい声を張っちゃうからな～<br>しっかりケアしとかないと！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='おっ、さすがスパルタフラッキー！<br>…でもさ～、もう少しやさしい声でもいいんだよ～？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='いやいや！まだまだ足りないぜ！<br>俺は大根おろしも料理の練習も、<br class="u-only__pc">ちょっとピリッとしてるくらいが好きなんだ♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='ひえ～！お手やわらかにお願いしますっ！';
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
