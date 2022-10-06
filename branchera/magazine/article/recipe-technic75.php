<?php
//base
include( "../../function.php" );
$content = get_id_data( '15075' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '意外と知らない、「すり鉢とすりこぎの使い方」を動画とテキストで解説。それぞれの道具の特徴や、購入するときのポイントをご紹介します！また、力を入れずにすりごまを作るコツや、とろろやつみれの作り方もお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '75';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'wzOEY1mTJUE';

//導入文
$introTxt = '第75回は「すり鉢とすりこぎの使い方」です。すりごまの作り方を例として、力のいらないすり方を動画で詳しくご紹介します。';

//キャプチャALTタグ
$altCap01 = '濡らしたふきんをかたく絞り、すり鉢の底に敷いて滑り止めにします。';
$altCap02 = 'ごまをすり鉢に適量入れます。';
$altCap03 = '利き手ですりこぎの真ん中を持ち、反対の手を上部に添えます。<br>すりこぎをくるくると回して、ごまをすっていきます。力を入れすぎず、すりこぎの重みを利用してすりましょう。<br>ポイントは、<strong>上に添えた手は動かさず、真ん中で握った手を回す</strong>ようにすること！てこの原理により、力を入れずにすることができます。';
$altCap04 = 'すり終わったごまを、スプーンなどで取り出して容器に移します。';
$altCap05 = 'すり鉢の溝に詰まっているごまを、つまようじなどで取り出します。';
$altCap06 = 'いわしのつみれ汁';
$altCap07 = '白和え';
$altCap08 = 'まぐろ山かけ丼';
$altCap09 = '冷や汁';
$altCap10 = '離乳食';
$altCap11 = 'すり鉢とすりこぎ';
$altCap12 = '麺棒';
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
        <p class="recipe-intro__ex">「うちのごはんは世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br><?php echo $introTxt ?></p>
      </div>
      <hr class="recipe__line">
      <?php
        $recipeIcon ='mama_01';
        $speech ='えーと今日の夕食は、<a href="'.$base_url.'/magazine/article/recipe-technic106.php" class="recipe-design__link">焼き魚</a>と<a href="'.$base_url.'/magazine/article/recipe-technic39.php" class="recipe-design__link">お味噌汁</a>…<br class="u-only__pc">おかずにもう一品、何を作ろうかな？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='それなら、ほうれん草のごま和えはどうだ？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_03';
        $speech ='あっ、フラッキー！<br>そうねえ…ごま和えはコウちゃんも大好物なんだけど、<br class="u-only__pc">ちょうどすりごまを切らしちゃってるんだよね<br>いりごまならあるんだけど…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='それなら大丈夫！<br>すり鉢とすりこぎを使えば、<br class="u-only__pc">美味しいすりごまが簡単に手作りできるぜ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_02';
        $speech ='本当？そういえば、セットで買ったけどあんまり使えてなかったな…<br class="u-only__pc">すり鉢とすりこぎの正しい使い方、教えてくれる？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='おうよ、俺についてこい！';
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
          <h3 class="recipe__ttl_l mb0">すり鉢とすりこぎの基本情報</h3>
          <p class="mb2">その名の通り、食材をすり潰す際に使用する「すり鉢」と「すりこぎ」。<br>決して珍しい<a href="<?php echo($base_url) ?>/magazine/index_technic_cookware-seasoning.php" class="recipe-design__link">調理器具</a>ではないですが、「持っているけどあまり使えていない…」という方も少なくないのではないでしょうか。<br>まず大切なのは、すり鉢とすりこぎがどんな調理器具なのかを理解すること。用途や購入時の選び方など、基本情報からお伝えします！</p>
          <h4 class="recipe__ttl_tech">すり鉢・すりこぎの特徴と用途</h4>
          <div class="u-clearfix mb3">
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-11@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <h5 class="recipe__ttl_s">すり鉢</h5>
            <p class="mb2">「すり鉢」とは、食材を細かくすり潰すための鉢のこと。内側に「櫛目（くしめ）」という、細かな溝がついているのが特徴です。多くは陶器ですが、最近ではプラスチック製のものなどもあります。</p>
            <h5 class="recipe__ttl_s">すりこぎ</h5>
            <p class="mb2">「すりこぎ」とは、すり鉢に入れた食材をすり潰すための棒のこと。先は丸く、上にいくほど細くなっているのが特徴です。素材には山椒の木のほか、ほおのき、ひのき、陶器などが用いられます。中でも山椒の木は、古くから使用されており、強くて折れにくい素材です。</p>
          </div>

          <section>
          <?php // check
            $check_cnt ='
            <h4>すりこぎと麺棒の違いとは</h4>
            <div class="u-clearfix">
              <figure class="u-float__right">
                <img data-src="'.$img_url.'/magazine/comic02/technic/'.$currentNumber.'/tech'.$currentNumber.'-12.jpg" data-retina="'.$img_url.'/magazine/comic02/technic/'.$currentNumber.'/tech'.$currentNumber.'-12@2x.jpg"
                  alt="フラッキーのHow To「'.$pageTtl.'」'. strip_tags($altCap12).'" style="max-width:300px" class="u-img__max">
              </figure>
              <p>すりこぎって、クッキーやパンの生地をのばす「麺棒」に似てるよな。「すりこぎの代わりに麺棒を使っちゃおう！」と思ったことがある人もいるんじゃないか？<br>
              でも、よく見ると形が違うんだ！すりこぎは上（持ち手側）の方が細くなっているけど、麺棒は上から下まで太さが均一。だから麺棒をすりこぎの代わりにすると、持ち手が太くなるから、握りづらくなってしまうぞ。やっぱりすり鉢とすりこぎは、セットで用意するのがおすすめだぜ！
              </p>
            </div>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>


          <h4 class="recipe__ttl_tech">すり鉢とすりこぎの選び方</h4>
          <p class="mb2">上手にするには、用途に合った大きさのすり鉢とすりこぎを選ぶことが大切。すり鉢とすりこぎの選び方をご紹介します。</p>

          <h5 class="recipe__ttl_s">すり鉢</h5>
          <p class="mb2">すり鉢は、用途によってサイズにいくつか種類があります。</p>
          <ul class="u-list__ul_dot">
            <li><span>4～5号（直径12～15㎝）…ごまやスパイスなどの粒状の食材や、1～2人用の<a href="recipe-technic145.php" class="recipe-design__link">ドレッシング</a>、離乳食向きの小さなサイズ</span></li>
            <li>6号（直径18㎝）…基本のサイズ。ほうれん草のごま和えなど、和え物を作るのにちょうどよい</li>
            <li><span>8号（直径24㎝）以上…4人以上のご家庭向けの大きなサイズ。<a href="recipe-technic06.php" class="recipe-design__link">だし汁</a>を加えるとろろなどにもおすすめ</span></li>
          </ul>
          <p class="mb2">ちなみに、内側の溝が細かいものは、小さな食材や、なめらかに仕上げたい食材に適しています。溝が粗いものは、大きな食材を手早くすり潰すことができますよ。いずれも、底が広くどっしりしていて、動きにくいものがよいでしょう。</p>
          <h5 class="recipe__ttl_s">すりこぎ</h5>
          <p class="mb2">いろいろな長さのすりこぎがありますが、目安はすり鉢の深さの2倍くらいとされています。適度に重さがあって、握りやすいものを選びましょう。</p>
          <h3 class="recipe__ttl_l mb0">すり鉢とすりこぎの使い方</h3>
          <p class="mb2">すりごまを作る場合を例として、すり鉢とすりこぎの基本的な使い方をご紹介します。</p>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>ごま</dt>
              <dd>適量</dd>
            </dl>
          </div>
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
            $plus1_ttl ='すりごまを使ったレシピ';
            $plus1_cnt ='<p class="mb2">風味豊かなすりごまができあがったら、ぜひいろいろな料理に活用してみてください。おすすめのすりごまを使ったレシピをご紹介します！</p>
            <h5 class="recipe__ttl_s">ごま和え</h5>
            <p class="mb2">ゆでて刻んだほうれん草に、すりごま、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>を和えて作る基本の一品です。</p>
            <h5 class="recipe__ttl_s">ごまプリン</h5>
            <p class="mb2">牛乳にすりごまと砂糖を加え、ゼラチンで固めます。<a href="'.$base_url.'/magazine/article/recipe-technic51.php" class="recipe-design__link">生クリーム</a>を絞ると、より濃厚な味わいに。</p>
            <h5 class="recipe__ttl_s">ごまドレッシング</h5>
            <p class="mb2"><a href="'.$base_url.'/magazine/article/recipe-technic22.php#osu" class="recipe-design__link">酢</a>、マヨネーズ、砂糖、醤油のベースに、すりごまをたっぷり加えたら完成です。</p>
            <h5 class="recipe__ttl_s">ごま味噌汁</h5>
            <p>いつもの<a href="'.$base_url.'/magazine/article/recipe-technic39.php" class="recipe-design__link">味噌汁</a>にすりごまを加え、ひと煮立ちさせましょう。香ばしく、新しい味わいになりますよ。</p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>
          <h3 class="recipe__ttl_l mb0">すり鉢とすりこぎで作るおすすめレシピ</h3>
          <p class="mb2">すり鉢・すりこぎを使うと、より美味しく仕上がるおすすめレシピをご紹介します。</p>
          <h4 class="recipe__ttl_tech"><?php echo ($altCap06); ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-06@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>つみれをすり鉢で作ると、フードプロセッサーで作るよりも適度に身が残り、食べ応えある仕上がりになります。下ごしらえしたいわしを細かく刻み、すり鉢ですります。おろし生姜、塩少々、片栗粉をすり身に加えて練り、団子状にまとめましょう。浮き上がるまでゆでたら、つみれのできあがりです。煮立てた<a href="<?php echo($base_url)?>/magazine/article/recipe-technic05.php" class="recipe-design__link">だし汁</a>に、大根や<a href="<?php echo($base_url)?>/magazine/article/recipe-technic146.php" class="recipe-design__link">にんじん</a>などと一緒に加えて<a href="<?php echo($base_url)?>/magazine/article/recipe-technic22.php#miso" class="recipe-design__link">味噌</a>で仕上げます。</p>
          </div>
          <h4 class="recipe__ttl_tech"><?php echo ($altCap07); ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-07@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>ごまをするのも<a href="<?php echo($base_url)?>/magazine/article/recipe-technic80.php" class="recipe-design__link">豆腐</a>を潰すのも、すり鉢ひとつで完了！<br>すり鉢にごまを入れ、細かくすったら、醤油と砂糖を加えます。そこへ、水切りした豆腐を数回に分けて加え、潰して衣を作ります。最後にゆでて刻んだにんじん、ほうれん草などの野菜を和えてできあがりです。</p>
          </div>
          <h4 class="recipe__ttl_tech"><?php echo ($altCap08); ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-08@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>長芋、大和芋などの山芋は、おろし金ではなくすり鉢ですると、よりきめ細かいとろろに仕上がります。<br>まず、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic100.php" class="recipe-design__link">まぐろ</a>を醤油とみりんの合わせ調味料に漬けておきます。<a href="<?php echo($base_url)?>/magazine/article/recipe-technic03.php" class="recipe-design__link">皮をむいた</a>大和芋をすり鉢ですり、だし汁を加えて混ぜ合わせ、なめらかに仕上げましょう。<br>ごはんの上にまぐろととろろを盛り、刻んだ万能ねぎやのりを散らしたらできあがり。</p>
          </div>
          <h4 class="recipe__ttl_tech"><?php echo ($altCap09); ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-09@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>夏によく食べられる、山形県、宮崎県などの郷土料理。<br>すり鉢に白ごまを入れてすり、さらに焼いた<a href="<?php echo($base_url)?>/magazine/article/recipe-technic41.php" class="recipe-design__link">あじ</a>の身も加えてすります。そぼろのようになったら味噌を混ぜて、冷たいだし汁でのばしてください。<br>最後に、粗くほぐして水切りした木綿豆腐、刻んだ<a href="<?php echo($base_url)?>/magazine/article/recipe-technic135.php" class="recipe-design__link">きゅうり</a>と<a href="<?php echo($base_url)?>/magazine/article/recipe-technic137.php" class="recipe-design__link">大葉</a>を加えてできあがり。あつあつのごはんと一緒にどうぞ。</p>
          </div>
          <h4 class="recipe__ttl_tech"><?php echo ($altCap10); ?></h4>
          <div class="u-clearfix">
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-10@2x.jpg"
                alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>食材を潰して、やわらかくする必要がある離乳食。すり鉢とすりこぎを使うと、スムーズに潰すことができますよ。大人用の食事よりも潰す食材の量が少ないので、小さめのすり鉢とすりこぎを選ぶのがおすすめ。米粒が残っている<a href="<?php echo($base_url)?>/magazine/article/recipe-technic56.php" class="recipe-design__link">おかゆ</a>や、ゆでた野菜を潰すときに使いましょう。<br>離乳食に使うすり鉢とすりこぎは、使うごとに熱湯をかけて消毒し、使い終わった後はきれいに洗ってよく乾燥させるようにしましょう。</p>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='mama_03';
        $speech ='うわ～、すりたてのごまってとってもいい香り！<br>いつものごま和えもひと味違うわ～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='ごまおいしい～！こうちゃん、ごまだいすき♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='味噌汁に入れるのも美味しいぞ！<br>すり鉢とすりこぎがあれば、手軽にすりごまを作れて楽しいね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='すりごまは風味が飛びやすいから、<br class="u-only__pc">使い切れる分だけするのが美味しさのコツだぜ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='了解！また作ろうっと♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15145'),
				array ('recommend-recipe-id','15050'),
				array ('recommend-recipe-id','15023'),
				array ('recommend-recipe-end')

				);
			?>
			<?php
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
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
