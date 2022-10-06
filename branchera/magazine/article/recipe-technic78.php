<?php
//base
include( "../../function.php" );
$content = get_id_data( '15078' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「こんにゃくのアク抜き方法」を動画とテキストで解説。こんにゃくのアクは、料理に臭みやえぐみが残る原因になります。より美味しく食べるために、しっかりと下ごしらえを行いましょう。塩もみや下ゆでの手順を詳しくご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '78';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'BpV74bk6yz8';

//導入文
$introTxt = '第78回は、「こんにゃくの下ごしらえ（アク抜き）の方法」です。こんにゃくの臭みを取り、味を染み込みやすくする下ごしらえの方法をご紹介します。';

//キャプチャALTタグ
$altCap01 = 'スプーンを使って、こんにゃくを端から押すようにして一口大にちぎります。';
$altCap02 = 'ボウルにこんにゃくを入れます。次に、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>を全体にまぶしてもみ込みましょう。<br>塩もみをすることで、こんにゃくに含まれる余分な水分と臭みを取ることができます。';
$altCap03 = 'サッと水で洗って、全体の塩を落とします。';
$altCap04 = '鍋に水を入れ、沸騰させます。そこに、塩もみをしたこんにゃくを入れましょう。<br>下ゆですることで、まだ残っているアクや臭みを取ることができますよ。';
$altCap05 = '<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で2～3分ゆでます。';
$altCap06 = 'ゆで上がったら、ざるに入れて水気を切りましょう。粗熱が取れたらアク抜きの完了です。';
$altCap07 = '筑前煮';
$altCap08 = 'こんにゃくのステーキ';
$altCap09 = 'こんにゃくのきんぴら';
$altCap10 = '炊き込みごはん';
$altCap11 = '豚汁';
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
        $recipeIcon ='papa_02';
        $speech ='はぁ…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='どうしたのパパ、お鍋見ながらため息ついちゃって～<br>あれっ、これ筑前煮じゃない！もしかして作ったの？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_02';
        $speech ='うん…久しぶりに食べたくなって作ってみたんだけど<br>
        なんだかこんにゃくの臭いが強くて、美味しくなくてさ…ショック…
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='マサキ、こんにゃくはちゃんとアク抜きしたかい？<br>
        アクが残ったままだと、臭みの原因になるんだぜ！
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_03';
        $speech ='えっ、そうだったの？全然知らなかった…！<br>
        フラッキー、アク抜きのやり方を教えて！
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='ガッテン承知！さっそく、イチから教えていくぞ！
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='よーし！しっかり覚えて、美味しい筑前煮を作れるようになってやる！
        ';
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
          <h3 class="recipe__ttl_l mb0">こんにゃくのアク抜きの方法</h3>
          <p class="mb2">おでんや筑前煮などの煮物から、炒め物や<a href="<?php echo $base_url?>/magazine/article/recipe-technic151.php" class="recipe-design__link">炊き込みごはん</a>まで、幅広い料理に使える食材・こんにゃく。より美味しくこんにゃくを食べるためには、きちんとアク抜きしておくことが必要です。アク抜きすることで、独特の臭みや、えぐみを取り除くことができます。さらに、アク抜きの過程で余分な水分が抜け、味が染み込みやすくなるというメリットも。</p>
          <p class="mb2">今回は、塩もみと下ゆでをして行なう、代表的なアク抜きの方法をご紹介します！</p>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>こんにゃく</dt>
              <dd>1枚</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>塩</dt>
              <dd>大さじ1</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">塩もみの手順</h4>
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
          <?php // check
            $check_cnt ='
            <p><a href="'.$base_url.'/magazine/article/recipe-technic01.php" class="recipe-design__link">包丁</a>を使わず、スプーンでちぎることで、こんにゃくに味が染み込みやすくなるぞ！
            その理由は、包丁できれいに切るよりも、ちぎったほうが断面の面積が広がるから。
            しっかり味を付けたいときは、ぜひちぎりこんにゃくを使ってみてくれ！
            </p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
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
          <h4 class="recipe__ttl_tech">下ゆでの手順</h4>
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
          <dl class="recipe-design__step mb0">
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
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-06@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <section>
          <?php // plus1
            $plus1_ttl ='電子レンジでアク抜きする方法は？';
            $plus1_cnt ='
            <p>「できるだけ簡単にアク抜きを済ませたい！」というときは、電子レンジでアク抜きすることもできますよ。<br>
            まず一口大にしたこんにゃくを、耐熱皿に入れます。次に、こんにゃくが被るくらいの水を加えましょう。ラップをかけたら、500Wに設定した電子レンジで加熱します。<br>
            加熱時間の目安は、こんにゃく100gあたり2分程度。加熱後、ざるに上げて流水で洗い流したら、アク抜き完了です！<br>
            よりしっかりアク抜きしたいときは、こんにゃくを塩もみしてから、電子レンジで加熱するようにしましょう。
            </p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>
          <h3 class="recipe__ttl_l mb0">こんにゃくの保存方法</h3>
          <p class="mb2">「開封したけど、こんにゃくが使い切れずに残ってしまった…」という経験がある方もいるのではないでしょうか。そのようなとき、残ったこんにゃくはどのように保存すればよいかご存知ですか？</p>
          <p class="mb2">こんにゃくを保存するときのポイントは、冷凍庫ではなく冷蔵庫に入れること。実はこんにゃくを冷凍すると、水分が抜けて、かたいゴムのような食感になってしまうのです。</p>
          <p class="mb2">なかにはあえてこんにゃくを凍らせて、噛み応えのあるヘルシー食材として用いる場合もありますが、こんにゃくならではの食感をキープするには、やはり冷蔵庫保存が適しています。<br>長持ちする、こんにゃくの正しい冷蔵保存方法をお伝えします！
          </p>
          <h4 class="recipe__ttl_tech">冷蔵保存の手順</h4>
          <p class="mb2">残ったこんにゃくは、水を張った保存容器に入れて、ラップなどをかけて冷蔵庫に入れます。このとき、水道水ではなく、こんにゃくの袋に入っていた封入水を使うようにしましょう！この封入水は殺菌作用があり、水道水を使うよりもこんにゃくの品質を保ちやすくなります。<br>封入水を捨ててしまった場合は、水道水を入れて、2～3日おきに取り替えながら保存しましょう。</p>
          <p class="mb3">保存期間の目安は、<strong>封入水の場合約3週間、水道水の場合は約1週間</strong>です。</p>
          <h3 class="recipe__ttl_l mb0">こんにゃくを使った人気レシピ</h3>
          <p class="mb2">しっかりアク抜きをすれば、中まで味が染み込んだこんにゃく料理を作ることができますよ。筑前煮や<a href="<?php echo $base_url?>/magazine/article/recipe-technic55.php" class="recipe-design__link">ステーキ</a>など、こんにゃくを使った人気レシピをご紹介します！手軽に作れるので、ぜひお試しください。</p>
          <div class="mb2">
            <h4 class="recipe__ttl_tech"><?php echo ($altCap07); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__right">
               <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-07@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>
              <a href="<?php echo($base_url)?>/magazine/article/recipe-technic19.php" class="recipe-design__link">鶏肉</a>を一口大に切って、油を引いた鍋で加熱します。鶏肉の表面の色が変わったら、適当な大きさに切った<a href="<?php echo $base_url?>/magazine/article/recipe-technic45.php" class="recipe-design__link">ごぼう</a>、にんじん、<a href="<?php echo $base_url?>/magazine/article/recipe-technic109.php" class="recipe-design__link">れんこん</a>、アク抜きしたちぎりこんにゃくを加えてください。全体に油がまわったら、酒、みりん、<a href="<?php echo $base_url?>/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>、水を入れ、蓋をして煮立たせます。煮立ったら<a href="<?php echo $base_url?>/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>を入れて、落し蓋をして中火で20分程度煮込みましょう。煮汁が少なくなるまで煮込んだら、できあがりです。
              </p>
            </div>
          </div>
          <div class="mb2">
            <h4 class="recipe__ttl_tech"><?php echo ($altCap08); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__left">
               <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-08@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>
              こんにゃくに包丁を横向きに入れて、半分の厚さになるように切ります。両面に格子状の切り込みを入れたら、<a href="<?php echo $base_url?>/magazine/article/recipe-technic131.php" class="recipe-design__link">サイコロ状</a>に切って、アク抜きをしてください。<br>フライパンにオリーブオイルとにんにくを入れ、中火にかけます。香りが立ってきたら、こんにゃくを入れて、両面こんがりと焼きましょう。最後に醤油と酒を入れて、味付けしたら完成です。

              </p>
            </div>
          </div>
          <div class="mb2">
            <h4 class="recipe__ttl_tech"><?php echo ($altCap09); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__right">
               <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-09@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>
              ごま油を引いたフライパンを熱します。鷹の爪を入れて香りが立ったら、アク抜きしたちぎりこんにゃくを加えてください。醤油、酒、砂糖を入れて、汁気がなくなるまで炒めたらできあがりです！
              </p>
            </div>
          </div>
          <div class="mb2">
            <h4 class="recipe__ttl_tech"><?php echo ($altCap10); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__left">
               <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-10@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>
              研いだ<a href="<?php echo $base_url?>/magazine/article/recipe-technic20.php" class="recipe-design__link">米</a>を炊飯器に入れて、酒、塩、みりん、醤油を加えます。米の分量に合った水を注いだら、1㎝角に切った鶏肉、にんじん、油揚げ、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic27.php" class="recipe-design__link">しめじ</a></a>、こんにゃくを加えて、軽く混ぜます。そのまま炊飯して、炊きあがったら10分程度蒸らして完成です。
              </p>
            </div>
          </div>
          <div>
            <h4 class="recipe__ttl_tech"><?php echo ($altCap11); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__right">
               <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-11@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>
              油を引いた鍋に、適当な大きさに切ったこんにゃく、<a href="<?php echo $base_url?>/magazine/article/recipe02.php" class="recipe-design__link">大根</a>、にんじん、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic45.php" class="recipe-design__link">ごぼう</a>、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic66.php" class="recipe-design__link">里芋</a>を入れて軽く炒めます。一口大に切った豚肉を加えて色が変わったら、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic06.php" class="recipe-design__link">だし汁</a>を入れましょう。煮立ったら火を弱めて、<a href="<?php echo $base_url?>/magazine/article/recipe-technic22.php#miso" class="recipe-design__link">味噌</a>を加えます。野菜がやわらかくなるまで煮たら、油揚げ、<a href="<?php echo $base_url?>/magazine/article/recipe-technic36.php" class="recipe-design__link">ねぎ</a>を加えてひと煮立ちさせてください。器に盛ったらできあがり！
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='papa_01';
        $speech ='よーし！今日の筑前煮は前回と違ってよい出来だぞ～<br>
        しっかりアク抜きしたこんにゃくで作った筑前煮、ご賞味あれ！
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='うん！雑味がなくて、とっても美味しい！<br>
        パパ、名誉挽回だね！
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='こんにゃく、おいしい～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='マサキ、なかなかやるじゃないか！<br>
        味もよく染みてるぞ！
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='やった～！<br>
        じゃあ、次はこんにゃくステーキとこんにゃくきんぴらも添えて、<br class="u-only__pc">
        こんにゃくフルコースを作っちゃおうかな？
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='それはやり過ぎ～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__assist mb3">
				<div class="recipe-assist-technic">
					<div class="recipe-assist-technic__row">
						<h3 class="recipe-assist-technic__ttl">用語解説</h3>
						<dl class="recipe-assist-technic__term">
							<dt>えぐみとは</dt>
							<dd>味覚のひとつ。アクがある苦味のこと。野菜や山菜特有の苦味を表す際によく用いられる。</dd>
						</dl>
					</div>
				</div>
			</div>
      <?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15004'),
				array ('recommend-recipe-id','15077'),
				array ('recommend-recipe-id','15097'),
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
