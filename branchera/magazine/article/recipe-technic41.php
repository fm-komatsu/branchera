<?php
//base
include( "../../function.php" );
$content = get_id_data( '15041' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「あじの三枚おろしの方法」を動画とテキストで解説。三枚おろしとは、魚のさばき方の一種で、右身、左身、中骨の3つの部分に切り分けることをいいます。おろす方法のほか、骨抜きの方法もご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'cEv3u6vnVzE';

//導入文
$introTxt = '第41回は「あじの三枚おろし」です。初心者でもできる魚の三枚おろしの方法をご紹介します。';


//キャプチャALTタグ
$altCap01 = '新聞紙などの紙をまな板に敷きます。その上に、魚をのせましょう。<br>紙を敷くことで、まな板が汚れるのを防ぐことができますよ。';
$altCap02 = 'うろこを取り除きます。包丁を身に垂直に当て、尾から頭に向かってこそぎましょう。力を入れすぎると身に傷が付いてしまうので、注意してください。裏面も同様に取り除きます。';
$altCap03 = 'ぜいごは、尾の付け根から包丁を寝かせて入れ、上下に小刻みに動かしてそぎ取ります。裏面も同様にそぎ取りましょう。';
$altCap04 = '胸ひれと腹びれを立てます。斜めに包丁を入れて、頭を切り落としてください。<br>ひれを立ててから切るのは、身を多く残すためです。';
$altCap05 = '腹を少し切って内蔵を取り出します。<br>ちなみに、魚の身を切る際は、基本的に<a href="'.$base_url.'/magazine/article/recipe-technic17.php" class="recipe-design__link">引き切り</a>で切りましょう。';
$altCap06 = '塩水を入れたボウルを用意し、血合いの部分まできれいに洗います。<br>※塩水は水1リットルに対し、塩小さじ1の割合で作りましょう。';
$altCap07 = 'ペーパーで、水気を拭き取ります。';
$altCap08 = '頭を右にして置き、包丁を中骨に沿って切り進めていきます。';
$altCap09 = '上下を返して、背側からも同様に切り進めます。';
$altCap10 = 'つながっている尾の付け根を、包丁で切り離します。<br>ここで魚を開くと、二枚おろしとなります。';
$altCap11 = '今度は背側から同様に、中骨に沿って切り進めます。上下を返して、腹側からも同様に切り進めてください。';
$altCap12 = '尾を抑えて切り進め、つながっている尾のつけ根を包丁で切り離します。';
$altCap13 = '腹骨をすくい取るように切り落とします。';
$altCap14 = 'ゴージャスで目を引くお造り';
$altCap15 = '骨抜きの方法';
$altCap16 = 'あじの刺身';
$altCap17 = '蒲焼き';
$altCap18 = 'なめろう、たたき';

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
        $recipeIcon ='masaki_01';
        $speech ='マユ先生！今朝、初めて釣りに行ってきたんですけど、<br class="u-only__pc">釣れたあじをどう調理すればいいのかわからなくて…<br>持ってきちゃいました！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='釣りに行ってきたんですね！<br>せっかくなら、新鮮なうちに三枚おろしにして<br class="u-only__pc">お刺身にするのはどうでしょう？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='masaki_02';
        $speech ='三枚おろしってハードル高そう…僕にできるかな…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='コツをつかめばパパっとさばくことができますよ<br>お刺身の他にも、蒲焼きや煮物などいろいろ使えるので、<br class="u-only__pc">この機会にぜひマスターしましょう！';
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
          <h3 class="recipe__ttl_l mb0">あじの三枚おろしのやり方</h3>
          <p class="mb2">三枚おろしとは、魚のさばき方の一種で、右身、左身、中骨の3つの部分に切り分けることをいいます。このテクニックは、あじだけでなく、さんまやさば、ぶりなどの魚をおろすときにも使えますよ。ぜひチャレンジしてみてください！</p>
          <h4 class="recipe__ttl">おろす前の下ごしらえ</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-01@2x.jpg"
                 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-02@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-03@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-design__check check mb3">
              <div class="check__row">
                <div class="check__ttl">
                  <h4 class="check__ex center">
                    <img
                    data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png"
                    data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png"
                    alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
                  </h4>
                </div>
                <h3>ぜいごとは？</h3>
                <p>あじなどの魚の尾近くにある、トゲ状のうろこのこと。かたくて口当たりが悪いため、そぎ取って調理します。</p>
              </div>
            </div>
          </section>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-04@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-05@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-06@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-design__check check mb3">
              <div class="check__row">
                <div class="check__ttl">
                  <h4 class="check__ex center">
                    <img
                    data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png"
                    data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png"
                    alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
                  </h4>
                </div>
                <h3>三枚おろしをするときの包丁の選び方</h3>
                <p>魚をおろすのに適した包丁は、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic35.php" class="recipe-design__link">出刃包丁</a>です。魚を切り身にするときにも使います。家庭でよく使われる、三徳包丁でも三枚おろしはできますが、ぶりなどの身が厚くて大きな魚をおろすには、パワー不足です。<br>魚をよく食べる方は、出刃包丁を1本用意しておくのをおすすめします。</p>
              </div>
            </div>
          </section>
          <h4 class="recipe__ttl">三枚におろす手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-07@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>

          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-08@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-09@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-10@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap10); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-11@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap11); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-12@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap12)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap12); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-13.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-13@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap13)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap13); ?>
            </dd>
          </dl>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">尾頭付きの三枚おろしって？</h3>
              <div class="u-clearfix">
                <figure class="u-float__right w50">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-14.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-14@2x.jpg"
                  alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap14)); ?>" style="max-width:300px" class="u-img__max">
                </figure>
              <p class="mb2">ゴージャスで目を引くお造り。鯛やあじを写真のようなお造りにする場合は、尾と頭を切り落とさず、“尾頭付きの三枚おろし”にします。</p>
              <p>尾頭付きの三枚おろしにする場合は、まずうろこを落とし、胸びれのすぐ後ろに包丁を入れて中骨まで切ります。次に、包丁の先で背中に浅く切り込みを入れます。その切り込みに包丁をグッと入れて、中骨に沿って身を切っていきましょう。<br>腹側も同じように、包丁で中骨に沿って切り込んでいきます。最後に、尾の根元で身を切り離してください。<br>反対側も同様に切れば、尾頭付きの三枚おろしの完成です。仕上げに腹骨を薄く切り取りましょう。</p>
              </div>
            </section>
          </div>
          <h3 class="recipe__ttl_l mb0">三枚におろした後の処理方法</h3>
          <p class="mb2">三枚におろしたあじを調理する際には、腹骨と小骨（血合い骨）を除去する必要があります。その方法をお伝えします。</p>
          <h4 class="recipe__ttl">骨抜きの方法</h4>
          <div class="u-clearfix">
            <figure class="u-float__left w50">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-15.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-15@2x.jpg"
              alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap15)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>あじのお腹辺りにある骨を腹骨といいます。開いた両身を縦に置き、腹骨をすくいとるように包丁で切り取りましょう。<br>その後、骨抜きを使って、身の中央に連なる小骨を取り除きます。小骨を取り除くときのポイントは、頭側の小骨が残らないようにすること！頭側の方が骨が太く、尾側になるとほとんどなくなるからです。頭側から等間隔に連なる小骨を、指先で確認しながら抜き取っていきましょう。<br>小骨は、頭側方向に少し傾けて抜き取るようにすると、身が割れることなく、きれいに取り除くことができます。</p>
          </div>
          <h3 class="recipe__ttl_l mb0">あじの三枚おろしの人気レシピ</h3>
          <p class="mb2">三枚おろしにしたあじは、さまざまな料理に使うことができます。あじの三枚おろしの人気レシピをご紹介します！</p>
          <h4 class="recipe__ttl"><?php echo $altCap16 ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__left w50">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-16.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-16@2x.jpg"
              alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap16)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>新鮮なあじが手に入ったら、すぐに三枚おろしにして、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic24.php" class="recipe-design__link">刺身</a>でいただきましょう。まず骨抜きをした後、身から皮をはぎ取ります。次に包丁を斜めに入れて、上から下へ向けて切ってください。最後に<a href="<?php echo($base_url)?>/magazine/article/recipe-technic25.php" class="recipe-design__link">しその葉、大根のツマ</a>と一緒にお皿に盛ったら完成です。</p>
          </div>
          <h4 class="recipe__ttl">ソテー、塩焼き</h4>
          <p class="mb2">三枚におろしたあじに、塩を振ります。フライパンにオリーブオイルを入れて両面を焼きましょう。お皿に盛り、レモンを添えたらできあがりです。</p>
          <h4 class="recipe__ttl"><?php echo $altCap17 ?></h4>
          <div class="u-clearfix mb2">
            <figure class="u-float__right w50">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-17.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-17@2x.jpg"
              alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap17)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>三枚におろしたあじの水気をしっかり拭き取ります。片栗粉をまぶします。フライパンにサラダ油を入れ、あじを皮目から焼いてください。両面焼けたら、醤油、みりん、砂糖で作った合わせ調味料をフライパンに入れて、あじに絡めます。煮汁がなくなってとろみが出たら、皿に盛って完成です。いりごまや、しその千切りをのせても美味しいですよ。</p>
          </div>
          <h4 class="recipe__ttl"><?php echo $altCap18 ?></h4>
          <div class="u-clearfix">
            <figure class="u-float__left w50">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-18.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/41/tech41-18@2x.jpg"
              alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'.  strip_tags($altCap18)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>三枚におろしたあじの身を、包丁で叩いていきます。身が細かくなったら、生姜と大葉のみじん切り、そしてお味噌を加えてください。さらに混ぜ合わせるように叩いていきましょう。よく混ざったら、お皿に盛り付けます。</p>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='masaki_01';
        $speech ='骨に沿って包丁を入れるのが難しいな～…<br>もっと練習して、スマートにさばけるようになるぞ～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='魚は傷みやすいので、すぐに内臓を取り除いてペーパーに包み、<br class="u-only__pc">ラップできっちり包んで冷蔵保存してくださいね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='masaki_01';
        $speech ='帰ったら、ママにも教えてあげよう<br>今日は、お魚パーティーだ～♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
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
