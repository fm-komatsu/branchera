<?php
//base
include( "../../function.php" );
$content = get_id_data( '15079' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「セロリの筋取りの方法」を動画とテキストで解説。セロリは、食べる前にかたい筋を取っておくと、噛みやすくなり美味しく食べることができます。包丁・ピーラーを使った筋取りの方法と、セロリの葉の使用法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '79';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'phybnfpPQ38';

//導入文
$introTxt = '第79回は、「セロリの下ごしらえ（筋取り）の方法」です。サラダや漬物、炒め物、煮込み料理など、いろいろな料理に使えるセロリの下ごしらえの方法をご紹介します。';

//キャプチャALTタグ
$altCap01 = '葉が付いた部分と、茎の部分を切り分けます。<br>葉が付いた部分は、葉を切り落として茎だけの状態にして使いましょう。';
$altCap02 = '根元のかたい部分を切り落とします。';
$altCap03 = '切り口に<a href="'.$base_url.'/magazine/article/recipe-technic17.php" class="recipe-design__link">包丁</a>を当て、筋を持ち上げるようにしながら引っ張って筋を取ります。<br>
葉が付いていた部分の茎も、同様に筋を取りましょう。
';
$altCap04 = '包丁で上手にできるか不安…という場合は、<a href="'.$base_url.'/magazine/article/recipe-technic23.php" class="recipe-design__link">ピーラー</a>を使って筋を取ることができるぜ！包丁と同様に、セロリの切り口にピーラーを当てて、皮をむくように刃を引いていこう。';
$altCap05 = '全体の筋を取ったら、好みの長さに切ります。';
$altCap06 = 'しっかり食感を生かしたい場合は、歯ごたえが残る繊維に沿った切り方がおすすめです。<br>
スティック状、短冊切り、斜め薄切りなどにしましょう。
';
$altCap07 = '香りや味を強く出したい場合は、繊維を断つ切り方がおすすめです。
<a href="'.$base_url.'/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>、斜め薄切り、<a href="'.$base_url.'/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a>などにしましょう。
';
$altCap08 = 'セロリとイカの炒め物';
$altCap09 = 'セロリのスープ';
$altCap10 = 'セロリの浅漬け';
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
        $recipeIcon ='papa_01';
        $speech ='会食が続いて胃が疲れちゃった…<br>
        何かさっぱりした野菜が食べたいな～
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='さっぱりした野菜ね！<br>
        そういえば、昨日セロリを買ったの。セロリのスープとかはどう？
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='セロリか～。香りや味は好きなんだけど、筋が苦手なんだよなぁ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_02';
        $speech ='かたい筋、確かにあるね…下処理が必要なのかしら？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='その通り！かたくて噛みづらいセロリの筋は、<br class="u-only__pc">
        事前に取っておく必要があるんだぜ！<br>
        シャキシャキした歯ごたえはそのままに、一気に食べやすくなるぞ～
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_03';
        $speech ='なるほど、筋が残ってないセロリなら美味しく食べられそうだ！<br>
        フラッキー、セロリの下ごしらえの方法を教えて！
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='オッケー！意外と簡単にできるから、これを機に覚えてくれよな！';
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
          <h3 class="recipe__ttl_l mb0">セロリの下ごしらえの方法</h3>
          <p class="mb2">独特の香りや、シャキシャキした食感がクセになるセロリ。生のままサラダや<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic126.php" class="recipe-design__link">漬物</a>にしても、加熱して炒め物や<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic149.php" class="recipe-design__link">スープ</a>にしても美味しくいただけますよね。ただし、調理をする前に筋を取っておかないと、筋を噛み切れずに食べづらくなってしまいます。<br>簡単にセロリの筋取りができる、下ごしらえの方法をご紹介します！</p>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb3">
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
          <section>
          <?php // plus1
            $plus1_ttl ='セロリの葉も美味しく活用！';
            $plus1_cnt ='
            <p>切り分けたセロリの葉は、美味しく食べられることをご存知ですか？茎よりも香りが強いセロリの葉は、料理の香り付けにぴったりの食材です。ぜひ、料理に活用してみてください！<br>
            調理するときのポイントは、できるだけ加熱すること。そのままだとかたくて食べづらいので、ポトフやスープなどの煮込み料理に入れましょう。<br>
            また、細かく刻んで、ハーブのように使うのもおすすめです。バジルの代わりにガパオライスに加えたり、パセリの代わりに<a href="'.$base_url.'/magazine/article/recipe12.php" class="recipe-design__link">ローストした肉</a>に添えたりすると、肉の臭みを消してくれます。ぜひお試しください♪
            </p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>
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
          <dl class="recipe-design__step mb3">
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
          <section>
          <?php // check
            $check_cnt ='
            <h4>セロリの筋取りはピーラーでもOK！</h4>
            <dl class="recipe-design__step mb0">
              <dt class="recipe-design__step_img">
                <figure>
                  <img data-src="'.$img_url.'/magazine/comic02/technic/'.$currentNumber.'/tech'.$currentNumber.'-04.jpg" data-retina="'.$img_url.'/magazine/comic02/technic/'.$currentNumber.'/tech'.$currentNumber.'-04@2x.jpg"
                  alt="フラッキーのHow To「'.$pageTtl.'」'. strip_tags($altCap04).'" style="max-width:300px" class="u-img__max">
                </figure>
              </dt>
              <dd class="recipe-design__step_txt">
                '.$altCap04.'
              </dd>
            </dl>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
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
            $plus1_ttl ='好みの仕上がり別！<br>セロリの美味しさを引き出す切り方';
            $plus1_cnt ='
            <p class="mb2">セロリは表面に筋が多く、切り方次第で食感が大きく変わるのが特徴です。<br>
            繊維に沿って切ると、噛み応えがあるしっかりした食感に。繊維を断ち切るように切ると、香りが強く出て、シャキッとした軽い食感になります。それぞれ、どのような切り方を用いればよいかをご紹介します。
            </p>
            <h4 class="recipe__ttl_s">しっかり食感を生かしたい場合</h4>
            <dl class="recipe-design__step mb3">
              <dt class="recipe-design__step_img">
                <figure>
                  <img data-src="'.$img_url.'/magazine/comic02/technic/'.$currentNumber.'/tech'.$currentNumber.'-06.jpg" data-retina="'.$img_url.'/magazine/comic02/technic/'.$currentNumber.'/tech'.$currentNumber.'-06@2x.jpg"
                  alt="フラッキーのHow To「'.$pageTtl.'」'. strip_tags($altCap06).'" style="max-width:300px" class="u-img__max">
                </figure>
              </dt>
              <dd class="recipe-design__step_txt">
                '.$altCap06.'
              </dd>
            </dl>
            <h4 class="recipe__ttl_s">香りや味を強く出したい場合</h4>
            <dl class="recipe-design__step">
              <dt class="recipe-design__step_img">
                <figure>
                  <img data-src="'.$img_url.'/magazine/comic02/technic/'.$currentNumber.'/tech'.$currentNumber.'-07.jpg" data-retina="'.$img_url.'/magazine/comic02/technic/'.$currentNumber.'/tech'.$currentNumber.'-07@2x.jpg"
                  alt="フラッキーのHow To「'.$pageTtl.'」'. strip_tags($altCap07).'" style="max-width:300px" class="u-img__max">
                </figure>
              </dt>
              <dd class="recipe-design__step_txt">
                '.$altCap07.'
              </dd>
            </dl>

            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>
          <h3 class="recipe__ttl_l mb0">セロリの保存方法</h3>
          <p class="mb2">束で売られていることが多いセロリ。一度に使い切れないこともありますよね。<br>残ったセロリを保存する際のポイントは、葉と茎を分けて<a href="<?php echo($base_url) ?>/magazine/article/recipe-collect03.php" class="recipe-design__link">保存</a>すること。葉が付いたままだと、茎の水分や養分を葉が吸い上げてしまい、味や鮮度が落ちやすくなります。<br>冷蔵保存と冷凍保存、それぞれの方法をご紹介します。</p>
          <h4 class="recipe__ttl_tech">冷蔵保存の場合</h4>
          <p class="mb2">切り分けた葉、茎の部分をそれぞれキッチンペーパーや新聞紙などで包みます。そうすることで、セロリが乾燥するのを防ぐことができますよ。筋取りは調理の前でも構いません。<br>さらに上からラップで包み、冷蔵庫で保存しましょう。<br>保存期間の目安は、2～3日です。</p>
          <h4 class="recipe__ttl_tech">冷凍保存の場合</h4>
          <p class="mb2">葉は洗った後、キッチンペーパーで水分を取り除いてください。その後、ファスナー付き保存袋に入れて、冷凍保存します。<br>茎の部分は、筋を取って、食べやすい大きさに切ります。それをそのままファスナー付き保存袋に入れて、冷凍庫で保存しましょう。</p>
          <p class="mb3">冷凍したセロリは水分が抜けて、少しかたい食感になります。そのため、生で食べるのではなく、凍ったまま加熱調理して食べるようにしてください。食感の変化を避けたい場合は、下ゆでしてから冷凍するようにしましょう。<br>保存期間の目安は、約2週間です。</p>
          <h3 class="recipe__ttl_l mb0">セロリを使った人気レシピ</h3>
          <p class="mb2">定番のサラダ以外にも、たくさんの調理法で楽しむことができるセロリ。さまざまな食材と組み合わせることによって、前菜にもメインディッシュにもなりますよ！<br>簡単に作れる、セロリを使った人気レシピをご紹介します。</p>
          <div class="mb2">
            <h4 class="recipe__ttl_tech"><?php echo ($altCap08); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__right">
               <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-08@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>
              セロリとイカは相性抜群！カットされた冷凍のイカを使うと、簡単に調理できますよ。<br>まず、解凍したイカと、中華スープの素、酒、塩こしょうを和えておきます。フライパンにごま油、にんにく、鷹の爪を入れて、中火で熱してください。にんにくの香りが立ったら、斜め薄切りにしたセロリを入れて炒めましょう。最後にイカを加えて、全体に火が通ったらできあがりです。
              </p>
            </div>
          </div>
          <div class="mb2">
            <h4 class="recipe__ttl_tech"><?php echo ($altCap09); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__left">
               <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-09@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>
              セロリの葉と茎、両方を使った具だくさんスープです。セロリの葉は細かく切り、茎は薄い輪切りにしておきましょう。鍋に水を入れて沸かしたら、コンソメ、セロリの茎、薄切りにした玉ねぎ、一口大に切ったソーセージを入れて煮込みます。具材に火が通ったら、セロリの葉を加えてひと煮立ちさせてください。最後に塩、こしょうで味を調えたら完成です！<br>ソーセージをベーコンにしたり、切ったトマトを加えたりしても美味しくいただけますよ。
              </p>
            </div>
          </div>
          <div class="mb2">
            <h4 class="recipe__ttl_tech"><?php echo ($altCap10); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__right">
               <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-10@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>
              「あともう一品欲しい！」というときに役立つ、簡単な浅漬けのレシピです。<br>セロリは斜めに切っておきます。ビニール袋に、セロリ、塩、酢、ごま油を入れてもみ込みましょう。そのまま封をして、冷蔵庫で約30分～1時間おいたらできあがり！
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='papa_01';
        $speech ='うん！このスープに入っているセロリ、すごく食べやすいよ！<br>筋はしっかり取れているけど、シャキシャキの歯ごたえが美味しい～♪
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='せろり、しゃきしゃき！はっぱもおいし～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='フラッキーのおかげで美味しく作ることができたわ！<br>これからは積極的にセロリを料理に使ってみようっと！
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='おう！ちなみに、セロリは産地や気候によって旬が違うから<br class="u-only__pc">1年通して店頭に並んでいるんだ<br>欲しいときに手軽に買えるから、どんどん使っていこうぜ！
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<section class="mb3">
				<h5>■関連記事</h5>
					<ul>
						<li class="recipe-photolist__item recipe-photolist__reciperecommend">
              <a href="<?php echo $base_url; ?>/magazine/article/recipe-technic135.php" class="recipe-photolist__row">
                <img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech135.jpg" alt="きゅうりとわかめの酢の物のレシピ。美味しい作り方をご紹介！" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
                <p class="reciperecommend-ttl">●きゅうりとわかめの酢の物のレシピ。美味しい作り方をご紹介！</p>
              </a>
            </li>
						<li class="recipe-photolist__item recipe-photolist__reciperecommend">
              <a href="<?php echo $base_url; ?>/magazine/article/recipe-technic126.php" class="recipe-photolist__row">
                <img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech126.jpg" alt="ピクルスの作り方。人気の野菜を使った簡単レシピ" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
                <p class="reciperecommend-ttl">●ピクルスの作り方。人気の野菜を使った簡単レシピ</p>
              </a>
            </li>
						<li class="recipe-photolist__item recipe-photolist__reciperecommend">
              <a href="<?php echo $base_url; ?>/magazine/article/recipe-technic145.php" class="recipe-photolist__row">
                <img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech145.jpg" alt="ドレッシングの手作りレシピ。和風も洋風もおうちで簡単！" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
                <p class="reciperecommend-ttl">●ドレッシングの手作りレシピ。和風も洋風もおうちで簡単！</p>
              </a>
            </li>
          </ul>
      </section>
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
