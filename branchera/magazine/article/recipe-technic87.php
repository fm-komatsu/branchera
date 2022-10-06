<?php
//base
include( "../../function.php" );
$content = get_id_data( '15087' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「餃子の包み方」を動画とテキストで解説。定番の半月型の包み方をはじめ、可愛い帽子型、はまぐり型の包み方を分かりやすくご紹介します。上手に包むコツや、具の作り方の手順もお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '87';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'OwY8_KBWQ6c';

//導入文
$introTxt = '第87回は、「餃子の包み方」です。餃子の包み方の基本をはじめ、手軽にできる包み方のアレンジまでご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
  //ママ　通常
  array('mama','01','今度おばあちゃんたちが遊びに来るときに、餃子<a href="'.$base_url.'/magazine/article/recipe-collect06.php" class="recipe-design__link">パーティー</a>をしようと思って！'),

  //パパ　通常
  array('papa','01','おっ、いいね～！<br>餃子なら一気にたくさん作れるしね！'),

  //ママ　通常
  array('mama','01','でも、上手に包めるか不安なのよね～<br>
  せっかくだから、いろいろな包み方で作って華やかにしたいんだけど<br class="u-only__pc">
  基本の包み方もあんまり自信がなくて…'),

  //フラッキー　通常
  array('fl','01','これは、俺の出番だな！<br>基本の包み方はもちろんだけど、オレ様なら簡単でかわいいアレンジも教えられるぜ♪'),

  //ママ　通常
  array('mama','01','さすがフラッキー、頼りになる～！早速教えてちょうだい！'),

  //フラッキー　通常
  array('fl','01','ガッテンだ！'),

);

//キャプチャALTタグ
$altCap01 = '手のひらに、餃子の皮を1枚のせます。<br>皮の中央に具をのせて、皮のフチ（上半円分）に指で水を付けましょう。';
$altCap02 = '真ん中から皮を折りたたんで半円型にします。';
$altCap03 = '手前側の皮を親指と人差し指でつまんで、ひだを作っていきます。<br>同じ動作を繰り返して、端までひだを作っていきます。';
$altCap04 = '上から見たときに三日月型になるように、皮を軽く押さえて形を整えます。';
$altCap05 = '底面を平らにしたら完成です。';
$altCap06 = '皮の中央に具をのせます。';
$altCap07 = '皮の中央に具をのせます。';
$altCap08 = '皮のフチ（上半円分）に水を付けて、半分に折ります。';
$altCap09 = 'フチを立たせて、両端に水を付けます。';
$altCap10 = '手前側で合わさるようにくるっと丸め、合わせて留めたら完成です。';
$altCap11 = '皮の中央に、やや横長に具をのせます。';
$altCap12 = '皮のフチ（上半円分）に水を付けて、半分に折ります。';
$altCap13 = '再度皮のフチに水を付けます。<br>端から皮のフチをつまむようにしてねじり、内側に向かって折り込みます。';
$altCap14 = '同じ動作を繰り返し、端まで折り込んだら完成です。';
$altCap15 = '材料（25個分）';
$altCap16 = '手順';


//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//ママ　通常
array('mama','01','この帽子型、とってもかわいい～！<br>凝った形の餃子は難しいと思っていたけど、コツを掴めば意外と簡単ね♪'),

//パパ　通常
array('papa','01','はまぐり型は一気に本格派な雰囲気になるね！'),

//コウちゃん　喜ぶ
array('ko','03','ぎょーざ♪ぼーし♪はまぐり♪'),

//フラッキー　褒める
array('fl','03','上手にできたな～！<br>さてと…包み方を覚えたら、次は<a href="'.$base_url.'/magazine/article/recipe-technic88.php" class="recipe-design__link">焼き方</a>を教えるぞ！<br>ビシビシいくから、心してかかれよ！'),

//ママ　通常
array('mama','01','ヒ～っ、お願いします～っ！'),

);

// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

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
        for($i = 0, $size = count($sp01); $i < $size; ++$i) {
          $recipeIcon = $sp01[$i][0].'_'.$sp01[$i][1];
          $speech = $sp01[$i][2];
          include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
        }
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
          <h3 class="recipe__ttl_l mb0">基本の餃子の包み方</h3>
          <p class="mb2">餃子には、基本の半月型をはじめ、多くの包み方が存在します。具材が同じでも、包み方のバリエーションが増えるだけで、一気に食卓が華やかになりますよ。<br>まずは、基本の半月型の包み方から覚えていきましょう。</p>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>餃子の具</dt>
              <dd>適量</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>餃子の皮</dt>
              <dd>個数分</dd>
            </dl>
          <p>※常温に戻しておくと包みやすくなる</p>
          </div>
          <h4 class="recipe__ttl_tech">基本の包み方の手順</h4>
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
            <h4>包む具は少なめにするのがコツ！</h4>
            <p>初心者でも失敗しない餃子の包み方のコツは、のせる具を少なめにしておくことだ！具が多いと、焼いているときに皮が破けてしまう原因になるぞ！</p>
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
          <?php // plus1
            $plus1_ttl ='具の作り方の手順';
            $plus1_cnt ='<p class="mb2">美味しい餃子に欠かせないのが、皮の中に入れる具です。基本の具を作れるようにしておけば、包み方や焼き方を自由に組み合わせて、アレンジすることができますよ。包み方と合わせて覚えておきましょう。</p>
            <h5 class="recipe__ttl_s">'.$altCap15.'</h5>
            <dl class="recipe-design__materials_nbg">
              <dt>豚ひき肉</dt>
              <dd>180g</dd>
            </dl>
            <dl class="recipe-design__materials_nbg">
              <dt>キャベツ</dt>
              <dd>150g</dd>
            </dl>
            <dl class="recipe-design__materials_nbg">
              <dt>ニラ</dt>
              <dd>40g</dd>
            </dl>
            <dl class="recipe-design__materials_nbg">
              <dt>にんにく</dt>
              <dd>1/2かけ</dd>
            </dl>
            <dl class="recipe-design__materials_nbg">
              <dt>しょうが</dt>
              <dd>1/2かけ</dd>
            </dl>
            <dl class="recipe-design__materials_nbg">
              <dt>塩</dt>
              <dd>小さじ1/2</dd>
            </dl>
            <dl class="recipe-design__materials_nbg">
              <dt>こしょう</dt>
              <dd>少々</dd>
             </dl>
            <dl class="recipe-design__materials_nbg">
              <dt>酒</dt>
              <dd>小さじ1</dd>
            </dl>
            <dl class="recipe-design__materials_nbg">
              <dt>醤油</dt>
              <dd>小さじ1</dd>
            </dl>
            <dl class="recipe-design__materials_nbg mb2">
              <dt>ごま油</dt>
              <dd>大さじ1</dd>
            </dl>
            <h5 class="recipe__ttl_s">'.$altCap16.'</h5>
            <p class="mb2">キャベツ、ニラ、にんにく、しょうがは<a href="'.$base_url.'/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>にします。<br>キャベツは<a href="'.$base_url.'/magazine/article/recipe-technic12.php#hitotsumami" class="recipe-design__link">塩ひとつまみ（分量外）</a>を加えて揉み、10分ほど置いて水分を絞りましょう。</p>
            <p class="mb2">ボウルに豚ひき肉、にんにく、しょうが、調味料を加え、全体が白っぽくなるまでしっかり混ぜます。</p>
            <p>みじん切りにした野菜を加え、野菜から水分が出ないように軽く混ぜて完成です。</p>';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          <h3 class="recipe__ttl_l mb0">餃子の包み方のアレンジ</h3>
          <p class="mb3">基本の半月型の包み方をマスターしたら、ほかの包み方にも挑戦してみましょう。丸めるだけでOKの簡単な「帽子型」と、フチの部分が編み目のようでかわいい「はまぐり型」の2種類をご紹介します。</p>
          <h4 class="recipe__ttl_tech">帽子型</h4>
          <p>帽子のような形に仕上がる包み方です。ふんわりと丸い形になるので、喉ごしがよく皮のもっちりとした食感が生かされます。<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic30.php" class="recipe-design__link">蒸し</a>餃子や水餃子にするのがおすすめ。</p>
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
          <dl class="recipe-design__step mb0">
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
          <dl class="recipe-design__step mb3">
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
          <h4 class="recipe__ttl_tech">はまぐり型</h4>
          <p>はまぐりのような形に仕上がる包み方です。皮のフチをねじり、ぴったりと合わせるので、中の具材が飛び出しにくいのが特徴です。<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic88.php" class="recipe-design__link">焼き餃子</a>や<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic09.php" class="recipe-design__link">揚げ</a>餃子にするのがおすすめ。</p>
          <dl class="recipe-design__step mb0">
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
          <dl class="recipe-design__step mb0">
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
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-14.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-14@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap14)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap14); ?>
            </dd>
          </dl>
        </div>
      </div>
      <?php
        for($i = 0, $size = count($sp02); $i < $size; ++$i) {
          $recipeIcon = $sp02[$i][0].'_'.$sp02[$i][1];
          $speech = $sp02[$i][2];
          include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
        }
      ?>
			<section class="mb3">
				<h5>■関連記事</h5>
					<ul>
						<li class="recipe-photolist__item recipe-photolist__reciperecommend">
						<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic86.php" class="recipe-photolist__row">
							<img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech86.jpg" alt="失敗知らずのパラパラチャーハン！基本の作り方と裏ワザ" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
						  <p class="reciperecommend-ttl">●失敗知らずのパラパラチャーハン！基本の作り方と裏ワザ</p>
						</a>
            </li>
						<li class="recipe-photolist__item recipe-photolist__reciperecommend">
						<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic123.php" class="recipe-photolist__row">
							<img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech123.jpg" alt="中華鍋の使い方とお手入れ方法。空焼き・油ならし・洗い方を解説！" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
						  <p class="reciperecommend-ttl">●中華鍋の使い方とお手入れ方法。空焼き・油ならし・洗い方を解説！</p>
						</a>
            </li>
						<li class="recipe-photolist__item recipe-photolist__reciperecommend">
						<a href="<?php echo $base_url; ?>/magazine/article/recipe-collect08.php" class="recipe-photolist__row">
							<img data-src="<?php echo $img_url; ?>/thum/comic02/recipe_collect08.jpg" alt="常備菜レシピ9選！作り置きレシピをまとめてご紹介" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
						  <p class="reciperecommend-ttl">●常備菜レシピ9選！作り置きレシピをまとめてご紹介</p>
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
