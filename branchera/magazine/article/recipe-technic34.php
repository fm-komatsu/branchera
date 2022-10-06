<?php
//base
include( "../../function.php" );
$content = get_id_data( '15034' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「まな板の除菌＆お手入れ方法」を動画で解説。プラスチック製、木製それぞれの特質と、日々のお手入れ＆しっかり除菌する方法をご紹介します。また、役立つキッチングッズもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠
$comic02PrId = '101';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'EqN8S1yGCR4';

//導入文
$introTxt = '第34回は「まな板のお手入れ方法」です。清潔に保つことができる、まな板のお手入れ方法をご紹介します。';


//キャプチャALTタグ
$altCap01 = 'まずは、食器用洗剤できれいに洗い流します。';
$altCap02 = '食器用洗剤で洗うだけではなく、漂白剤で除菌します。漂白剤を使用する際、素手で作業をすると手が荒れてしまうので、<strong>手袋を着用</strong>してください。<br>※生肉や生魚を使用した際は、必ず除菌しましょう。';
$altCap03 = 'ムラなく除菌をするために、キッチンペーパーを敷きます。';
$altCap04 = '裏面も同様に除菌します。放置する時間は、使用する漂白剤の表示をご確認ください。';
$altCap05 = '除菌を終えたら、キッチンペーパーを外して水で洗い流したあと、食器用洗剤で洗い流します。';
$altCap06 = '流した後は、しっかりと乾燥させます。';
$altCap07 = '料理で使用する際には、水で濡らし、余分な水分を拭き取ってから使用します。そうすることで、まな板に臭いが付きにくくなります。<br>風通しのよい保管場所で、しっかり乾燥させるのも忘れずに！';
$altCap08 = '使用後は、食器用洗剤できれいに洗い流します。<br>また、肉や魚など臭いが気になる素材を切ったときは、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>または重曹を全体に振りかけ、木目に沿ってたわしでゴシゴシこすります。';
$altCap09 = '木製まな板は、漂白剤を使用することができないので、基本は<strong>熱湯消毒で除菌</strong>します。<br>※生肉や生魚を使用した際は、必ず除菌しましょう。';
$altCap10 = '裏面も同様に熱湯を回しかけます。';
$altCap11 = '余分な水分を拭き取りしっかりと乾燥させます。';
$altCap12 = '料理で使用する際には、水で濡らし、余分な水分を拭き取ってから使用します。そうすることで、まな板に臭いが付きにくくなります。<br>乾燥させる場合は直射日光を避け、日陰の風通しのよい場所で完全に乾かしてください。なお、くれぐれも食器洗い機や食器乾燥機は使わないでください。反ったり割れたりする原因となります。';

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
    
    <!-- 220805追加 -->
    <div class="mt3 mt2_sp mb5">
      <div>
        <?php $CmGtmId = "1"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php");?>
      </div>
    </div>
    <!-- /220805追加 -->

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
        $speech ='マユ先生、まな板のお手入れってどうしていますか？<br>毎日きちんと洗っているのに、食材の臭いがとれなくて…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='まな板は、素材によってお手入れの方法が違うので、<br class="u-only__pc">もしかしたら、今のお手入れが<br class="u-only__pc">使っているまな板に合っていないのかもしれません';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_02';
        $speech ='え！どれも同じだと思っていました…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='お手入れ方法をマスターして、まな板を清潔に保ちましょう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php include ($inc_path."/lib/inc/page/_magazine/__comic02_pr.php"); //PR記事 ?>
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
          <h3 class="recipe__ttl_l mb0">まな板除菌・お手入れで予防できるものとは？</h3>
          <p class="mb3">毎日使うまな板は、キッチンの必需品ですよね。「ちゃんと清潔にしなくちゃ！」と思う反面、普段はほかのお皿と同じように、食器用洗剤でサッと洗うだけ…という人も多いのではないでしょうか。たしかに最近の食器用洗剤は優秀ですが、果たしてそれだけでまな板のお手入れ完了となるのでしょうか？<br>まな板専用の除菌やお手入れでどんな危険が予防できるのか、お伝えします。</p>
          <h4 class="recipe__ttl">菌、カビの繁殖</h4>
          <p class="mb2">まな板は<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic17.php" class="recipe-design__link">包丁</a>による傷がたくさん付いているので、サッと洗っただけでは汚れを落としきれません。まな板に菌などが付着すると、その落としきれない汚れをエサとして、非常に勢いよく繁殖します。しかもまな板には直接食材を置くため、ほかの食材への二次感染も起こりやすくなります。</p>
          <p class="mb2">また、まな板の黒ずみの正体であるカビ。カビは湿度を好むので、こまめにお手入れしないと、まな板に付いた傷から黒ずみがどんどん広がることに。一度発生したまな板の黒ずみは、普通の食器用洗剤では落とすのが難しいといわれています。</p>
          <p class="mb2">日々のお手入れ・除菌を行うことによって、これらの菌やカビの繁殖を予防することができます。</p>
          <h4 class="recipe__ttl">食中毒</h4>
          <p class="mb2">生の<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic32.php" class="recipe-design__link">肉</a>や<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic72.php" class="recipe-design__link">魚</a>には、大腸菌やサルモネラ菌などの雑菌が付着しています。また、人間の手やキッチンスポンジにも、多くの雑菌が付着しています。<br>食中毒の原因菌の多くは、食品中で増えることで食中毒を引き起こします。数が少なくても食中毒を発症させる菌もいるため、さまざまな食材をのせるまな板の除菌は、食中毒予防において非常に効果的です。</p>
          <h3 class="recipe__ttl_l mb0">まな板の日々のお手入れ</h3>
          <p class="mb2">まな板に合った除菌やお手入れをすることで、さまざまな危険を防げるということが分かりましたね。次は、実際のお手入れ方法についてご紹介しましょう。</p>
          <h4 class="recipe__ttl">プラスチック製まな板のお手入れ手順</h4>
          <p class="mb2">プラスチック製まな板は水が染み込むこともほとんどなく、扱いやすいキッチン用品です。また、木製に比べれば、包丁による傷が比較的付きにくいといわれています。<br>しかし、人によってまな板の使い方にも癖があり、同じ部分に集中して傷が付いてしまいがち。傷が付くと雑菌が繁殖しやすくなるので、使ったら毎回きちんとお手入れするようにしましょう。</p>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-01@2x.jpg"
                 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-02@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-03@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-04@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-05@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-06@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-07@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">木製まな板のお手入れ手順</h4>
          <p class="mb2">木目が美しく、味わいのある木製まな板。見た目にもやわらかさがあり、暖かいイメージが魅力ですね。しかし、木製まな板はプラスチック製に比べてカビが生えやすく、黒ずみやすいという特徴があります。そのため、基本のお手入れは使用後に毎回行ってください。</p>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-08@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-09@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?></dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-10@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap10); ?></dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-11@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap11); ?></dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/34/tech34-12@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap12)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap12); ?></dd>
          </dl>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">木の種類別、まな板の特徴</h3>
              <p class="mb2">弾力性があり、包丁が刃こぼれしにくいのが木製まな板です。そして同じ木製まな板でも、木の種類により使い勝手が変わってきます。</p>
              <h4 class="recipe__ttl_s">ヒバ（青森ヒバ）</h4>
              <p class="mb2">「ヒノキチオール」という、抗菌・殺菌性が非常に高い成分を含むのがヒバです。まな板として適度な堅さで消臭性もあり、カビや黒ずみもできにくいので、日々のお手入れも楽。多くのメリットがある分値段も高めですが、長く使っていけるまな板です。</p>
              <h4 class="recipe__ttl_s">ひのき</h4>
              <p class="mb2">中程度の堅さで、耐水性や防虫効果があるのがひのきのまな板です。木製まな板を初めて利用するなら、乾きが早くお手入れしやすいひのきがおすすめ。ただし、「ヒノキチオール」は国産のひのきにはほとんど含まれていません。比較的安価なのも魅力的です。</p>
              <h4 class="recipe__ttl_s">イチョウ</h4>
              <p class="mb2">油分が多いため、水はけがよいイチョウ。中程度の堅さで包丁の刃当たりがやわらかいため、まな板に向いている素材といわれています。また、「フラボノイド」という成分を含んでいるため、食品の臭いが残りにくいという利点も。黒くなりやすいので、日々のお手入れ後はしっかり水分を拭き取る必要があります。</p>
              <h4 class="recipe__ttl_s">桐</h4>
              <p>とにかく軽いのが桐のまな板。特に硬いものなどを切るときは、置く場所が安定しているか気を付けましょう。乾燥が早くやわらかいのも特徴で、傷が付きやすいのが注意点。抗菌作用が高く、黒ずみも起こりにくいのに加え、価格がお手頃なのはうれしいところ。</p>
            </section>
          </div>
          <h3 class="recipe__ttl_l mb0">週1のスペシャルケア！まな板を徹底除菌する方法</h3>
          <p class="mb3">いつでも清潔にしておきたいまな板。いつもの基本のお手入れに加えて、週に１回スペシャルケアを行うと、より美しく安全に使用することができます。まな板を徹底除菌する方法をお教えしましょう。</p>
          <h4 class="recipe__ttl">プラスチックと木製まな板、共通の除菌法</h4>
          <p class="mb2">プラスチック製と木製まな板に共通で使える除菌方法をお伝えします。</p>
          <h5 class="recipe__ttl_s">キッチン用アルコール除菌スプレー</h5>
          <p class="mb2">食器用洗剤で洗い、水分を除去したまな板に満遍なく吹き付けます。手間もかからないので、日常に取り入れやすい方法です。</p>
          <h5 class="recipe__ttl_s">過炭酸ナトリウム</h5>
          <p class="mb2">過炭酸ナトリウムは、除菌・漂白・消臭など多くの効果があるアルカリ性の洗浄剤です。基本は粉末状で、40～50℃のお湯（熱湯は不可）に溶かすと泡が出て、パワフルに除菌や漂白をしてくれます。</p>
          <p class="mb2">過炭酸ナトリウムは、使用後は炭酸ソーダと酸素、水に分解されますし、重曹などとも組み合わせて使うことができます。自然や環境に優しく使い勝手がよいのが特徴ですが、タンパク質を溶かすので、素手では触らずビニール手袋などを使いましょう。ステンレス以外の金属と反応するため、金属製の食器や、金属の装飾が施された食器にかからないよう、注意することも重要です。</p>
          <h4 class="recipe__ttl">プラスチック製まな板の除菌法</h4>
          <p class="mb2">プラスチック製まな板に使える除菌方法をお伝えします。</p>
          <h5 class="recipe__ttl_s">抗菌タイプのまな板を使う</h5>
          <p class="mb2">プラスチック製まな板には「抗菌タイプ」というものがあります。使用前に水で濡らすと、添加された銀イオンが除菌効果を発揮します。</p>
          <h5 class="recipe__ttl_s">まな板専用ブラシ</h5>
          <p class="mb2">除菌力の高い食器用洗剤をまな板専用ブラシに付け、まな板の傷目に沿ってこすりましょう。</p>
          <h5 class="recipe__ttl_s">塩素系除菌漂白剤に漬ける</h5>
          <p class="mb2">塩素系除菌漂白剤を規定の量で希釈し、大きめのビニール袋などに入れます。そこにまな板全体を浸すと、除菌・漂白のスペシャルケアとして効果的です。<br>その場合はしっかりまな板全体が液に浸かるようにしてください。塩素系の漂白剤は皮膚を傷めるため、必ずビニール手袋などを装着して行い、浸ける時間はメーカーの指示を守りましょう。<br>また、使いやすいスプレータイプのものもあります。まな板に直接スプレーして数分置き、洗い流すことで除菌・漂白ができますよ。</p>
          <h4 class="recipe__ttl">木製まな板の除菌法</h4>
          <p class="mb2">木製まな板に使える除菌方法をお伝えします。</p>
          <h5 class="recipe__ttl_s">クエン酸スプレー</h5>
          <p class="mb2">木製まな板に漂白剤を使うと、変色や変形の原因となることも。漂白剤で痛めた部分から黒ずみ、カビなどが発生する恐れもあります。また薬剤が木に染み込むことにより、食材への影響も気になりますよね。<br>こうした場合のおすすめの除菌法は、クエン酸によるスプレーです。液体としてスプレーの状態でも売られているものでも、顆粒状のものでもOK。</p>
          <p class="mb2">まな板にキッチンペーパーを乗せ、全体にクエン酸をスプレーします。15～20分おいてから水拭きし、しっかり乾燥させてください。<br>ちなみに、手作りのクエン酸スプレーは腐敗しますので、使用後の残りは捨てて、容器をきれいに洗いましょう。</p>
          <div class="recipe-design__plus1 plus1 mb0">
            <section class="plus1__row">
              <h3 class="plus1__ttl">まな板以外のキッチングッズの除菌法</h3>
              <p class="mb2">せっかくまな板を除菌しても、ほかのキッチングッズがお手入れされていなければ、雑菌がまた広がってしまいます。まな板と一緒に、しっかり除菌しておきましょう。</p>
              <h4 class="recipe__ttl_s">スポンジ</h4>
              <p class="mb2">湿度と温度が高く保たれ、食材のカスが付きやすいキッチンスポンジは雑菌の絶好の繁殖場所。雑菌だらけのスポンジで食器を洗う…なんてことにならないように、しっかりと除菌しておきましょう。</p>
              <p class="mb2">スポンジの除菌で効果的なのは、熱湯に1分以上さらすという方法です。熱湯から出した後はそのまま放置せず、すぐに冷水をかけて冷まします。最後に風通しのよい場所で完全に乾燥させてください。</p>
              <p class="mb2">またスポンジは劣化しやすいので、形が崩れたり汚れが落ちづらくなったら、新しいものに取り換えるようにしましょう。</p>
              <h4 class="recipe__ttl_s">包丁</h4>
              <p class="mb0"><a href="<?php echo($base_url) ?>/magazine/article/recipe-technic35.php" class="recipe-design__link">包丁</a>の除菌は、まず食器用洗剤で全体をよく洗ってから、清潔なふきんやキッチンペーパーで水気をよく拭き取ります。続いて、アルコール除菌スプレーを刃の部分だけでなく柄の部分にも残さず十分に吹きかけてください。水洗いや拭き取りはせず、しっかり乾燥させてから収納しましょう。</p>
            </section>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='mie_01';
        $speech ='今までは使った後に洗うだけで、除菌は全然やっていませんでした<br>清潔に保つためにも、しっかりお手入れをした方がいいんですね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='日々お手入れをすることは、清潔さはもちろん<br class="u-only__pc">まな板を長持ちさせることにもつながります<br>毎日使うものだから、大事にしていきたいですよね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='そうですね！<br>せっかくお手入れ方法を学んだことだし、<br class="u-only__pc">一枚、いいまな板を買ってみようかな？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15035'),
				array ('recommend-recipe-id','15123'),
				array ('recommend-recipe-id','15147'),
				array ('recommend-recipe-end')

				);
			?>
			<?php
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
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
<!-- 220805追加 -->
<div class="main__row pt0_sp mb2_sp">
	<div>
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php"); ?>
	</div>
</div>
<!-- /220805追加 -->
<?php
  $toindex_url = "/magazine/index_comic02.php";
  include( $inc_path . "/lib/inc/toindex__magazin.php" );
  ?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
