<?php
//base
include( "../../function.php" );
$content = get_id_data( '15077' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「たけのこのアク抜きと下ごしらえ方法」を動画とテキストで解説。生のたけのこは、しっかりアク抜きをしてから調理する必要があります。ゆでる前の下ごしらえと、アク抜きの手順をご紹介します。保存方法や人気レシピも掲載！';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '77';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'WV5e54FUnd4';

//導入文
$introTxt = '第77回は「たけのこのアク抜き」です。簡単にできる手順から、たけのこを使った人気レシピまで詳しくご紹介します。';

//キャプチャALTタグ
$altCap01 = 'たけのこを流水でよく洗って、土を落とします。<br>たわしなどを使うと、素早く汚れを落とすことができますよ。';
$altCap02 = 'たけのこの先端を、斜めに切り落としましょう。<br>切り落とす長さの目安は、全長の1/5くらいです。<br>先端を斜めに切り落とすと、断面が広くなり、たけのこに熱が通りやすくなります。';
$altCap03 = '切り口から根元に向かって、垂直に切り込みを入れます。切り込みの深さの目安は、1～2cm程度です。<br>切り込みを入れることで、熱が通りやすくなるほか、アクが抜けやすくなります。';
$altCap04 = '深くて大きな鍋に、たけのこを入れます。複数のたけのこをゆでる際は、できるだけたけのこ同士が重ならないようにしてください。';
$altCap05 = '米ぬかと唐辛子を加えて、たけのこが被る量の水を鍋に入れます。';
$altCap06 = '沸騰したら落とし蓋（皿でも代用可）をします。<br>これで準備は完了です。';
$altCap07 = '鍋を<a href="'.$base_url.'/magazine/article/recipe-technic02.php" class="recipe-design__link">中～強火</a>にかけ、沸騰させます。<br>火加減を調整して、吹きこぼれない程度にぐつぐつ沸いている状態を保ちましょう。';
$altCap08 = 'ゆで時間は、以下を目安にしてください。<br>1本300~400gの小サイズ：約1時間半<br>1本500~750gの中サイズ：約2時間<br>1本1kg以上の大サイズ：約3時間';
$altCap09 = '蒸発して徐々に水の量が減っていくので、適宜、水を継ぎ足しましょう。';
$altCap10 = '目安時間通りにゆでたら、たけのこを1本すくい上げます。<br>1番太い部分に竹串を刺して、中まで火が通っているかどうか確認してください';
$altCap11 = 'ゆであがったたけのこは、鍋に入れたまま、ゆで汁に浸かった状態で冷ましましょう。<br>ゆで汁に浸かった状態で冷ますことで、たけのこに残ったアクを出し切ることができます。';
$altCap12 = 'たけのこが冷めたら、水洗いして米ぬかをきれいに洗い落とします。';
$altCap13 = '縦に入れた切れ目に指を入れて、皮をむきましょう。<br>切れ目からむくことで、数枚分一気にむき取ることができますよ。皮をむき終えたら、もう一度全体を水洗いしてください。<br>根元側に残っているかたい皮や赤黒い粒は、<a href="'.$base_url.'/magazine/article/recipe-technic17.php" class="recipe-design__link">包丁</a>でそぎ取ります。先端部分はかたい部分を切り落として、やわらかい部分だけ残しましょう。';
$altCap14 = 'たけのこの天ぷら';
$altCap15 = 'たけのこのバター醤油焼き';
$altCap16 = '筑前煮';

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
        $speech ='八百屋さんでおすすめされたから、<br class="u-only__pc">たけのこを丸ごと買ってきちゃった！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='おっ、春の味覚だね～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_02';
        $speech ='でもたけのこって、<a href="'.$base_url.'/magazine/article/recipe-technic04.php" class="recipe-design__link">アク</a>を抜かなきゃいけないのよね？<br>買ったのはいいけど、下ごしらえの手順が分からないなあ…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_02';
        $speech ='なになに～？ミエはたけのこのアク抜きをしたことがないのか！？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_02';
        $speech ='だって難しそうなんだもん～！<br>
        いつもは水煮を使って調理してるから…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='よしっ！俺に任せとけ！<br>
        簡単にできるアク抜きの方法を教えてやるぜ！
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='さすがフラッキー！<br>
        ちゃんと覚えるから、ゆっくり教えてね～！
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
          <h3 class="recipe__ttl_l mb0">たけのこのアク抜きの方法</h3>
          <p class="mb2">春に旬を迎えるたけのこ。程よい歯ごたえと、食欲をそそる香りが魅力的ですよね。しかし、たけのこは収穫してから時間が経てば経つほど、えぐみが増して味が落ちてしまいます。<br>美味しい状態でたけのこを食べるには、素早くアク抜きをしておくことが必要！少し時間はかかりますが、アク抜きの手順自体は意外と簡単です。<br>アク抜きの方法を覚えて、たけのこの美味しさを最大限に引き出しましょう！</p>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>たけのこ</dt>
              <dd>中3本</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>米ぬか</dt>
              <dd>1カップ</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>唐辛子</dt>
              <dd>1本</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">アク抜き前の準備</h4>
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
            $check_cnt ='<h3>たけのこの皮はむかずにゆでよう！</h3>
            <p>たけのこを美味しく食べるには、皮をむかずにアク抜きするのがポイントだぜ。皮を付けたままゆでることで、うまみを逃さずにアクを抜くことができるんだ。外側の泥が気になるときは、2～3枚だけむいておこう。</p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>
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
          <?php // check
            $check_cnt ='
            <h3>米ぬかと唐辛子を入れるのはなぜ？</h3>
            <p class="mb3">「たけのこのアク抜きに、なぜ米ぬかと唐辛子を入れるの？」と思う人もいるかもしれないな。米ぬかと唐辛子を入れるのには、ちゃーんと理由があるんだぜ！</p>
            <h4 class="recipe__ttl_s">米ぬかを入れる理由</h4>
            <p class="mb2">米ぬかは、たけのこのアクの素になる成分や、えぐみを取り除く効果があるんだ！ </p>
            <p class="mb2">
            ちなみに、米ぬかが手に入らないときは、<a href="'.$base_url.'/magazine/article/recipe-technic20.php" class="recipe-design__link">米</a>の研ぎ汁と生米ひと掴みで代用してもOK！ただし、無洗米は使わないように注意しよう。米ぬかの成分が含まれていないからな。
            ほかにも、同じアルカリ性の重曹でも代用できるぜ。水1Lに対し、食用の重曹<a href="'.$base_url.'/magazine/article/recipe-technic12.php" class="recipe-design__link">小さじ</a>1/2が目安だ！
            </p>
            <h4 class="recipe__ttl_s">唐辛子を入れる理由</h4>
            <p class="mb2">唐辛子に含まれる辛味成分・カプサイシンは、殺菌や抗菌の効果があるんだ。さらに、米ぬかのぬか臭さを軽減する作用があるといわれているぞ。 </p>
            <p>
            これで、米ぬかと唐辛子をセットで入れる理由が分かったな！えぐみを取って美味しく食べるためにも、入れ忘れには注意だぜ！
            </p>

            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-07@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-08@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-09@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-10@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap10); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-11@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap11); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl_tech">皮むきの手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-12@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-13.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-13@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap13)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap13); ?>
            </dd>
          </dl>
          <section>
          <?php // plus1
            $plus1_ttl ='アク抜き後のたけのこの保存方法';
            $plus1_cnt ='
            <p class="mb2">皮がまだ付いているたけのこは、ぬかや唐辛子が入ったゆで汁ごと保存容器に入れます。しっかり蓋をして、冷蔵庫で保存してください。保存期間の目安は、<strong>4～5日間</strong>です。</p>
            <p>皮をむいたたけのこは、保存容器に入れて、たけのこが被る量の水を注ぎます。皮が付いている場合と同じように、蓋をして冷蔵庫で保存してください。毎日水を変えれば、<strong>約1週間</strong>保存できますよ。</p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>
          <h3 class="recipe__ttl_l mb0">たけのこを使った人気レシピ</h3>
          <p class="mb2">しっかりたけのこのアク抜きをした後は、美味しく調理していただきたいですよね。<br>豊かな風味が楽しめる、たけのこを使った人気レシピをご紹介します！</p>
          <h4 class="recipe__ttl_tech"><?php echo ($altCap14); ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-14.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-14@2x.jpg"
                alt="<?php echo (strip_tags($altCap14)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>アク抜きをしたたけのこを、食べやすい大きさに切ってください。鍋に切ったたけのこ、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>、砂糖、みりんを入れて、煮汁がなくなるまで煮詰めます。最後に<a href="<?php echo($base_url)?>/magazine/article/recipe-technic82.php" class="recipe-design__link">天ぷら</a>衣を付けて、油で揚げましょう。キツネ色に揚がったらできあがりです。</p>
          </div>
          <h4 class="recipe__ttl_tech"><?php echo ($altCap15); ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-15.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-15@2x.jpg"
                alt="<?php echo ( strip_tags($altCap15)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>たけのこを縦に薄切りにします。フライパンにオリーブオイルを入れて熱したら、たけのこがキツネ色になるまで焼きましょう。バター、醤油、みりんを加えて、たけのこに絡めて味をととのえます。器に盛り付けて、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>にした木の芽を散らしたら完成です。</p>
          </div>
          <h4 class="recipe__ttl_tech"><?php echo ($altCap16); ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-16.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-16@2x.jpg"
                alt="<?php echo ( strip_tags($altCap16)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>たけのこを薄切りにします。<a href="<?php echo($base_url)?>/magazine/article/recipe-technic135.php" class="recipe-design__link">わかめ</a>を水で戻し、食べやすい大きさに切りましょう。鍋に<a href="<?php echo($base_url)?>/magazine/article/recipe-technic05.php" class="recipe-design__link">だし汁</a>、醤油、みりん、塩を入れ、たけのこを加えて3~4分煮ます。最後にわかめを加えて、火を止めて10分ほどおいてください。器に盛り付けたらできあがり！</p>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='mama_01';
        $speech ='たけのこのアク抜き、思ったより簡単にできちゃった～！<br>
        さて、今日はどんなたけのこ料理を作ろうかな？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='天ぷらがいいな～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='コウちゃんも、てんぷらたべた～い！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='しっかりアクが抜けているから、<br class="u-only__pc">美味しい天ぷらになるはずだぞ！<br>ミエが最後の皮むきまで丁寧にやったおかげだな！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='あら、素直に褒めてくれるなんて珍しい…！<br>ひょっとして、フラッキーもアク抜きされたのかな？<br>なんちゃって！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='おいっ！俺様には始めからアクなんてないやーい！';
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
				array ('recommend-recipe-id','15151'),
				array ('recommend-recipe-id','13003'),
				array ('recommend-recipe-id','15033'),
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
