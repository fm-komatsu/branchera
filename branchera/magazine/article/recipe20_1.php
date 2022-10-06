<?php
//base
include( "../../function.php" );
$content = get_id_data( '14020' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「フライパンで作る簡単ロールケーキ」を動画で解説。オーブンなしでもOK！フライパンで簡単に焼ける、ロールケーキの作り方をご紹介します。また、SNSでも映えるかわいいアレンジ方法も合わせてご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = 'まず、フライパンを覆うくらいの大きさにオーブンシートをカットします。';
$altCap02 = 'カットしたオーブンシートを半分に折った後、さらに半分になるように折って、正方形にします。';
$altCap03 = '対角線上の頂点を合わせて、二等辺三角形になるように折り、最後にもう一度半分の大きさに折ります。最も鋭角の頂点をフライパンの中心に当て、底の大きさに合わせて折ります。';
$altCap04 = '底からはみ出る分（側面に触れている分）のオーブンシートをカットして開くと、丁度フライパンの底に合う大きさに切ることができます。';
$altCap05 = '先にサラダ油と牛乳を合わせておきます。';
$altCap06 = 'ボウルに卵白を入れてざっと混ぜ、分量の1/3（10g）のグラニュー糖を加えて、ハンドミキサーで泡立てます。<br>ふんわりしてきたら残りのグラニュー糖を2回に分けて加え、さらに泡立ててしっかりとしたメレンゲを作ります。';
$altCap07 = 'メレンゲに卵黄を加えて混ぜます。<br>次に薄力粉をふるい入れ、ゴムベラで泡を潰さないように混ぜましょう。';
$altCap08 = '事前に合わせておいたサラダ油と牛乳を、ゴムベラにつたわせながら加えて混ぜます。<br>そして、オーブンシートを敷いたフライパンに蓋をして、ごく弱火で約1～2分温めておきます。';
$altCap09 = 'オーブンシートを敷いたフライパンに生地を流し入れ、蓋をして<strong>ごく弱火</strong>で約8～10分焼きます。';
$altCap10 = '<strong>表面が乾いたら</strong>焼き上がりです。取り出してラップをして冷まします。';
$altCap11 = '別の冷やしたボウルを用意して、生クリームとグラニュー糖を入れます。氷水を入れた大きなボウルに重ねて、<a href="recipe-technic51.php" class="recipe-design__link">9分立てに泡立てて</a>ください。';
$altCap12 = '新しいオーブンシートの上にスポンジを置き、生クリームを塗って手前から巻きます。このとき、定規などを当てて形を整えながら巻くと、隙間なくきれいに巻くことができます。<br>巻き終わったら、ラップに包んで約1時間冷蔵庫で冷やしてください。';
$altCap13 = 'ラップを外して食べやすい大きさに切ります。デコレーションによって、両端の生地を切り落としてください。<br>皿に盛って、お好みのソースと適量の粉砂糖をかけたら完成です。';
$altCap14 = '誕生日やパーティーなど、特別な日におすすめのアレンジが「ロールケーキタワー」です。作り方は簡単！レシピ通りにロールケーキを2本焼いて、約3cmの長さに切ったものをバランスよく積み重ねれば、土台は完成です。';
$altCap15 = '基本のスポンジを作り、生クリームを塗った後にイチゴやメロン、黄桃など、お好きなカットフルーツをのせて巻くだけです。<a href="recipe-technic50.php" class="recipe-design__link">フルーツの缶詰</a>を使えば、下ごしらえの手間も省けてより簡単ですよ。カットすると断面にフルーツが見えるので、カラフルで美しい仕上がりになります！';
$altCap16 = 'マロンクリームでデコレーションをした、モンブラン風ロールケーキです。<br>まず、基本のロールケーキを作ります。お好みで、スポンジの表面に生クリームを塗り広げた後に、細かく刻んだ甘栗や栗の甘露煮をのせて巻きましょう。<br>デコレーション用のマロンクリームは、市販のマロンペーストをやわらかく練り、生クリームを混ぜ合わせて、ラム酒で香り付けをします。これを絞り袋に入れて、ロールケーキの表面に絞ってください。モンブラン用の口金（くちがね）を使うと、モンブラン独特の細い糸状のクリームに絞ることができますよ。<br>さらに冷蔵庫で冷やした後に、飾り用の栗をのせたら完成です。';
$altCap17 = '基本のロールケーキのスポンジを作る際、分量から薄力粉を5g減らし、無糖のココアパウダーを5g足すことで、チョコレート風味のスポンジに仕上げます。<br>スポンジに塗るチョコレートクリームは、刻んだ板チョコレートを湯煎にかけて溶かして、生クリームを加えて泡立てるだけです。スポンジにチョコレートクリームを塗り、手前にバナナを置いて巻いたら完成です。側面を粉砂糖などでデコレーションしても素敵ですよ。';
$altCap18 = '基本のロールケーキのスポンジとクリームに、抹茶の風味を加えた和風ロールケーキ。<br>基本のロールケーキのスポンジを作る際、薄力粉を5g減らし、抹茶パウダーを5g足して作ってください。<br>またクリームは、基本の材料に抹茶パウダーを約小さじ1加えて混ぜましょう。<br>抹茶クリームをスポンジに塗って巻いたら完成です。お好みで小豆（缶詰を水切りしたもの）などをのせて巻いても美味しいですよ。';
$altCap19 = '基本のロールケーキのスポンジを「ブラックココアパウダー」というお菓子を黒くするためのココアパウダーで黒くして、オレンジ色のパンプキンクリームでデコレーションしたハロウィン風ロールケーキです。<br>スポンジを作る際、薄力粉を5g減らし、無糖のブラックココアパウダーを5g足して作ってください。';

?>
<main class="main">
  <article class="main__row">
    <?php
      $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
      $panAry[] = array( "/magazine/index_comic02.php", "うちのご飯は世界イチ" );
      include( $inc_path . "/lib/inc/pan.php" );
      // SP時サムネにタイトルを表示するかフラグ
      $thumTtlFlg = 'off';
      include($inc_path . "/lib/inc/page/_magazine/__comic02tech-new-header.php");
      include($inc_path . "/lib/inc/page/_magazine/__recipe-new-main-v.php");
    ?>
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header recipe__new">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num">　</span>
          <span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
        </h2>
      </div>
      <div class="recipe-story mb3">
        <div class="recope-story__row recipe-story__recipe">
          <p>もうすぐママの誕生日！毎年僕、マサキがケーキを買ってお祝いしてるけど、ここ何年かマンネリ化しているよなあ。せっかくだからコウちゃんにも手伝ってもらって、ママが喜ぶ誕生日にしたいんだけど…。</p>
        </div>
      </div>

      <?php
        $recipeIcon ='papa_01';
        $speech ='もうすぐママの誕生日だね！コウちゃん<br>        今年のケーキはどうしようか？        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_01';
        $speech ='ぱぱがつくるやつ、たべたい！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_03';
        $speech ='えっ、パパが作るの？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_01';
        $speech ='うん！ぼくもつくるもん！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_02';
        $speech ='パパとコウちゃんで作れるかな？<br>これはもう、フラッキー頼みだな～<br>でも、フライパンでケーキって作れるものなのか…？        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='おーい！もちろん作れるに決まってるだろ！<br>フライパンをなめてもらっちゃ困るぞ～<br>オーブンも使わずに、ふわふわのロールケーキが30分で作れるんだぜ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_03';
        $speech ='えぇ～！フライパンだけでロールケーキが作れるの？<br>しかも、30分でできちゃうなんてすごいじゃないか！<br>フラッキー、早速作り方を教えて！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='お安い御用だ！<br>フライパンのスゴさを思い知らせてやるぜ<br>ミエをあっと驚かせよう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='わーい！えいえいおー！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie-new recipe">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/common/movie_ttl@2x.png"
           alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/tcl5e3OLEh0?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">簡単ロールケーキの作り方</h3>
          <p class="mb2">ふわふわでしっとりしたロールケーキ。一見難しそうですが、実はフライパンひとつで簡単に作ることができます。スポンジをフライパンで焼いて、クリームを塗って巻くだけ。<br>お祝いやパーティーにぴったりのアレンジ方法もご紹介します。</p>
          <h4 class="recipe__ttl_recipe">材料（約20cmのもの1本分）</h4>
          <div class="recipe-design__material">
            <h5>●スポンジ</h5>
            <dl class="recipe-design__materials">
              <dt>卵白</dt>
              <dd>1個分</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>グラニュー糖</dt>
              <dd>30g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>卵黄</dt>
              <dd>1個分</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>薄力粉</dt>
              <dd>30g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>サラダ油</dt>
              <dd>大さじ1/2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>牛乳</dt>
              <dd>大さじ1/2</dd>
            </dl>
            <h5>●クリーム、ソース</h5>
            <dl class="recipe-design__materials">
              <dt>生クリーム</dt>
              <dd>100ml</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>グラニュー糖</dt>
              <dd>大さじ1/2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>ストロベリーソース、マンゴーソースなど</dt>
              <dd>それぞれ適量</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>仕上げの粉砂糖</dt>
              <dd>適量</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_recipe">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-01@2x.jpg"
                 alt="フラッキーのHow To <?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-06@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-07@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-08@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-09@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-10@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap10); ?>
            </dd>
          </dl>
          <div class="recipe-check-recipe mb3">
            <div class="recipe-check-recipe__row">
              <div class="recipe-check-recipe__ttl">
                <h4>
                  <div class="recipe-check-recipe__ex center">
                    <img
                    data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl-recipe.png"
                    data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl-recipe@2x.png"
                    alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
                  </div>
                </h4>
                <p class="mb2">フライパンやコンロの種類によって、生地の焼き時間は多少変動するぜ。<br>8～10分を基準に、表面の焼き加減を確認しながら、必要に応じて焼く時間を調整しよう！焼き過ぎると表面がかたくなったり、割れてしまったりするから、弱火でゆっくり焼くのがコツ。なかなか焼けないからといって、火力を上げるのは避けてくれよ！</p>
              </div>
            </div>
          </div>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-11@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap11); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-12@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap12)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap12); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-13.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-13@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap13)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap13); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-plus1-recipe mb3">
              <div class="recipe-plus1-recipe__row">
                <h3 class="recipe-plus1-recipe__ttl">一気にSNS映え！ロールケーキタワーの作り方</h3>
                <div class="u-clearfix">
                  <figure class="u-float__left">
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-14.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-14@2x.jpg"
                    alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap14)); ?>" style="max-width:300px" class="u-img__max">
                  </figure>
                  <p>
                   <?php echo ($altCap14); ?>
                  </p>
                  <p>
                    ミントの葉やフルーツ、チョコレートのプレートなどでデコレーションすれば、SNSにも映える華やかなロールケーキタワーになりますよ。片方のロールケーキの生地にココアパウダーや抹茶パウダーを混ぜれば、2色のロールケーキタワーを作ることもできます。<br>さまざまなアレンジが可能なので、好みやシーンに合わせて工夫してみてくださいね！
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section>
            <h3 class="recipe__ttl_l">ロールケーキの人気アレンジレシピ</h3>
            <p class="mb3">基本のロールケーキの作り方を覚えたら、手軽にアレンジメニューを作ることができます。生クリームにフルーツやパウダーなどを加えるだけでも、バリエーションが広がりますよ。今回は、特に人気のあるアレンジレシピをご紹介します。</p>
            <div class="mb3">
              <h4>●フルーツのロールケーキ</h4>
              <div class="u-clearfix">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-15.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-15@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」フルーツのロールケーキ|'. strip_tags($altCap15)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap15); ?>
                </p>
              </div>
            </div>
            <div class="mb3">
              <h4>●モンブラン風ロールケーキ</h4>
              <div class="u-clearfix">
                <figure class="u-float__right">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-16.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-16@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」モンブラン風ロールケーキ|'. strip_tags($altCap16)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap16); ?>
                </p>
              </div>
            </div>
            <div class="mb3">
              <h4>●チョコバナナのロールケーキ</h4>
              <div class="u-clearfix">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-17.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-17@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」チョコバナナのロールケーキ|'. strip_tags($altCap17)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap17); ?>
                </p>
              </div>
            </div>
            <div class="mb3">
              <h4>●抹茶のロールケーキ</h4>
              <div class="u-clearfix">
                <figure class="u-float__right">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-18.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-18@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」抹茶のロールケーキ|'. strip_tags($altCap18)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap18); ?>
                </p>
              </div>
            </div>
            <div class="mb0">
              <h4>●ハロウィン風ロールケーキ</h4>
              <div class="u-clearfix">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-19.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/20/recipe20-19@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」ハロウィン風ロールケーキ|'. strip_tags($altCap19)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap19); ?>
                </p>
                <p>
                 パンプキンクリームは、<a href="recipe-technic31.php" class="recipe-design__link">下ごしらえしたかぼちゃ</a>を電子レンジでやわらかくなるまで加熱し、裏ごししてから、生クリームを少しずつ加えて混ぜます。そのままロールケーキの表面にヘラで塗るか、絞り袋を使って絞ればできあがりです。
                </p>
              </div>
            </div>
          </section>
        </div>
      </div>
      <?php
        $recipeIcon ='papa_01';
        $speech ='本当にフライパンだけでできちゃった！<br>ママもきっとびっくりするぞ～<br>じゃあコウちゃん、ママのところに持っていこう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='うん！<br>まま、おたんじょうびおめでと～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_03';
        $speech ='わっ！すごーい！<br>これ、本当にパパとコウちゃんが作ったの！？<br>味もとっても美味しい！ありがとう♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
       <?php
        $recipeIcon ='fl_03';
        $speech ='上出来だな！<br>このケーキはフライパンひとつでできるし、アレンジも豊富だから<br class="u-only__pc">ミエも覚えておくといいぜぇ～♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='えーっ！フライパンで作れるなんてびっくり！<br>パパ、コウちゃん、ママにも教えて～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
        <div class="recipe__assist">
          <div class="recipe-assist">
            <div class="recipe-assist__row">
              <h3 class="recipe-assist__ttl">用語解説</h3>
              <dl class="recipe-assist__term">
                <dt>口金（くちがね）とは</dt>
                <dd>クリームを絞る際に使用する絞り袋の先端に付ける、穴の開いた金具のこと。種類によって穴の開き具合が異なり、口金を取り換えることで、絞ったクリームの形状や太さを変えることができる。</dd>
              </dl>
            </div>
          </div>
        </div>
      <div class="mb0">
      <?php
        include ($inc_path."/lib/inc/page/_magazine/__recipe-new-footer.php");
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
