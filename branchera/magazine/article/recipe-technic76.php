<?php
//base
include( "../../function.php" );
$content = get_id_data( '15076' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「アスパラガスのゆで方」を動画とテキストで解説。アスパラガスを美味しくゆでるには、根元のかたい部分や筋を取っておく必要があります。ゆでる前の下処理、ゆでる際のポイント、品質を保つ保存方法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '76';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'xnvbn-Mq6AY';

//導入文
$introTxt = '第76回は、「アスパラガスのゆで方」です。程よく歯ごたえの残る、美味しいアスパラガスのゆで方をご紹介します。';

//キャプチャALTタグ
$altCap01 = 'アスパラガスの根元のかたい部分（約1cm）を切り落とします。';
$altCap02 = '切り落とした根元から4～5cmの部分の皮を、ピーラーで薄くむきます。こうすることで、筋っぽさを取り除きやすくなります。<br>使用するフライパンや鍋のサイズに合わせ、必要に応じて2等分にします。';
$altCap03 = 'アスパラガスが入る大きめのフライパン（もしくは鍋）に水を入れて火にかけ、沸騰させます。沸騰したら、塩を加えてください。';
$altCap04 = 'フライパンの中にアスパラガスを入れて、<a href="'.$base_url.'/magazine/article/recipe-technic02.php" class="recipe-design__link">中火</a>でゆでます。ゆで時間は、約1分30秒です。太めのアスパラガスの場合は、様子を見ながら約2分ゆでましょう。';
$altCap05 = 'ゆで終えたアスパラガスをざるに上げて、湯切りします。サラダに使う場合は、冷水にさらしてから調理しましょう。そうすることで、色よく仕上がります。';
$altCap06 = 'グリーンサラダ';
$altCap07 = 'ベーコンのアスパラ巻き';
$altCap08 = 'アスパラガスのお浸し';
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
        $speech ='今日、お隣さんにアスパラガスを沢山いただいたの！サラダに入れてみたんだけど、どうかなぁ？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_02';
        $speech ='ん～味は美味しいけど…ちょっとやわらかいかな？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_02';
        $speech ='えー、本当？ゆで過ぎちゃったのかな～<br>根元がかたかったから、長めにゆでたのよね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='ムムム！ゆでる前に、根元のかたい部分を切ったり、<br class="u-only__pc">きちんと下処理をしておかないと！<br>正しい下処理とゆで方で、アスパラは美味しく仕上がるぜ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='なるほど、下処理がカギだったのね…！<br>フラッキー、正しいゆで方を教えて～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='ラジャー！しっかりついてこいよ！';
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
          <h3 class="recipe__ttl_l mb0">アスパラガスのゆで方</h3>
          <p class="mb2">シャキッとした歯ごたえと、鮮やかな緑色が特徴のアスパラガス。サラダや炒め物など、幅広い料理に使える便利な食材ですよね。しかし、間違ったゆで方をすると、せっかくの食感や色味を損なってしまうことも…。アスパラガスを美味しく食べるには、下処理とゆで時間がポイント。正しい手順をご紹介します！</p>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>アスパラガス</dt>
              <dd>1束</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>塩</dt>
              <dd>小さじ2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>水</dt>
              <dd>1リットル</dd>
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
            $plus1_ttl ='電子レンジで加熱する方法';
            $plus1_cnt ='<p class="mb2">フライパンや鍋ではなく、電子レンジを使うとより簡単にアスパラガスを加熱することができます。大量にゆでたいときはフライパンや鍋を使用する方がよいですが、少量だけ加熱したいときは電子レンジがおすすめです。</p>
            <p class="mb2">電子レンジを使用する場合は、まずフライパンでゆでるときと同様に根元の下処理をし、料理に合わせた長さに切ります。次に、水に濡れた状態のアスパラガスを耐熱皿に並べましょう。その後、ラップでふんわりと蓋をしてから加熱します。</p>
            <p>アスパラガス1束分の加熱時間の目安は、600wに設定した電子レンジで約1分30秒です。様子を見ながら、かたいようであれば10秒ずつ追加で加熱してください。</p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>
          <h3 class="recipe__ttl_l mb0">アスパラガスの保存方法</h3>
          <p class="mb2">アスパラガスは常温で保存すると傷んでしまいます。必ず冷蔵、冷凍保存するようにしてください。比較的すぐに食べるときには冷蔵し、4日以上保存する場合には冷凍にしましょう。</p>
          <h4 class="recipe__ttl_tech">冷蔵保存方法</h4>
          <p class="mb2">アスパラガスは水分の多い野菜なので、乾燥することを嫌います。そのため、保存の際にはキッチンペーパーなどで根元を包みましょう。その後、ファスナー付き保存袋に入れて保存します</p>
          <p class="mb2">アスパラガスを冷蔵するときのポイントは、立てて保存すること。土に根を張り、上へ上へと伸びていくアスパラガス。冷蔵庫で保存するときに横向きにしておくと、穂先を上に起こそうとしてエネルギーを消耗してしまい、味や鮮度が落ちやすくなってしまいます。<br>冷蔵庫の側面や容器などを利用して立てかけて保存してください。<br>保存期間の目安は、約2～3日です。</p>
          <h4 class="recipe__ttl_tech">冷凍保存方法</h4>
          <p class="mb2">4日以上保存する場合には冷凍保存をおすすめします。<br>まず、アスパラガスを少しかために塩ゆでします。食べやすいサイズに切り、しっかりとラップをしてから、ファスナー付き保存袋に入れて冷凍しましょう。料理に使用するときは、凍ったまま加熱してください。</p>
          <p class="mb2">保存期間の目安は、約1ヵ月です。</p>
          <h3 class="recipe__ttl_l mb0">アスパラガスを使った人気レシピ</h3>
          <p class="mb2">シャキッとした食感がアクセントになる、ゆでたアスパラガスを使ったお手軽なレシピをご紹介します。</p>
          <h4 class="recipe__ttl_tech"><?php echo ($altCap06); ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-06@2x.jpg"
                alt="<?php echo (strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>緑色の野菜を中心としたグリーンサラダ。ちぎったレタスやベビーリーフをはじめとした葉物野菜に、下ごしらえを済ませたアスパラガスを加えます。色味付けにトマトや生ハムなどをのせて、お好みのドレッシングを振りかけたらできあがりです。<br>きゅうりや<a href="<?php echo($base_url)?>/magazine/article/recipe-technic46.php" class="recipe-design__link">ブロッコリー</a>、クリームチーズなどをのせても美味しく召し上がれますよ。</p>
          </div>
          <h4 class="recipe__ttl_tech"><?php echo ($altCap07); ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-07@2x.jpg"
                alt="<?php echo ( strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>ご飯のおかずとしても、お酒のおつまみとしてもおすすめのベーコンのアスパラ巻き。まず、下処理をして食べやすい大きさに切ったアスパラガスにベーコンを巻きます。巻き終わりを楊枝などで留めて、こしょうを振りかけます。サラダ油を引いたフライパンで、焼いていきましょう。ベーコンに満遍なく焼き色がついたら完成です。</p>
          </div>
          <h4 class="recipe__ttl_tech"><?php echo ($altCap08); ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-08@2x.jpg"
                alt="<?php echo ( strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>あと1品欲しいときにパパっと作れるアスパラガスのお浸し。まず、器にめんつゆと水を混ぜ合わせます。そこに、食べやすい大きさに切ったアスパラガスを浸してください。味が馴染んだら完成です。仕上げにかつお節をかけて、召し上がれ！</p>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='mama_01';
        $speech ='昨日はアスパラガスのゆで加減を失敗しちゃったから、今日はフラッキーに教わったゆで方でお浸しにしてみたの！どうかしら？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='おっ、今回はゆで加減がちょうどよくて、すごく美味しいね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='やったー！うれしい！コウちゃんはどうかな？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='シャキシャキ、おいしい～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='きちんと下処理をして、ちょうどよい時間でゆでたから<br class="u-only__pc">食感もよく鮮やかな色に仕上がったな！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='フラッキー、ありがとう！<br>この調子で、いろいろなアスパラガスレシピに挑戦しようっと！';
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
