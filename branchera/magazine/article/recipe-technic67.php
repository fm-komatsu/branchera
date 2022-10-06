<?php
//base
include( "../../function.php" );
$content = get_id_data( '15067' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「マッシュポテトの作り方」を動画とテキストで解説。じゃがいもは下ゆでナシ、電子レンジ加熱でOK！時短＆簡単な作り方をご紹介します。また、アレンジレシピも合わせてご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'wbWuQGLL_9c';

//導入文
$introTxt = '第67回は「レンジで簡単！マッシュポテトの作り方」です。失敗しない手順から、応用レシピまで詳しくご紹介します。';

//キャプチャALTタグ
$altCap01 = 'じゃがいもはよく洗い、皮付きのままラップに包みます。<br>耐熱皿にのせて、600ｗの電子レンジで6～7分加熱してください。';
$altCap02 = 'やわらかくなったら、熱いうちに数枚重ねたキッチンペーパーで包んで、皮をむきます。<br>熱くて持ちにくい場合は、キッチンペーパーの枚数を増やしましょう。';
$altCap03 = 'ボウルに入れてバターを加え、フォークやマッシャーで潰します。<br>冷えると粘り気が出てしまい、ホクホクした食感がなくなってしまうので、<strong>熱いうちに潰しましょう</strong>。';
$altCap04 = '生クリーム（または牛乳）を2～3回に分けて加え、ゴムベラなどでなめらかになるように混ぜます。';
$altCap05 = '塩、こしょうを振って、味を調えたらできあがりです。';
$altCap06 = 'のびるマッシュポテト「アリゴ」';
$altCap07 = 'じゃがいもコロッケ';
$altCap08 = 'スモークサーモンとマッシュポテトのサラダ';
$altCap09 = 'マッシュポテトのミートソースグラタン';
$altCap10 = 'マッシュポテト入りオムレツ';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';
$altCap14 = '';
$altCap15 = '';
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
        $speech ='今日の夕ご飯はハンバーグよ～<br>付け合わせはマッシュポテトにしようかな？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='わーい♪はんばーぐ！ぽてと！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='マッシュポテトはクリーミーで、肉料理と一緒に食べると美味しいよね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_02';
        $speech ='でも…今から皮をむいてゆでるのか…<br>時間がかかる！やっぱり無理かも～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='おっと、諦めるにはまだ早いぜ！<br>電子レンジを使えば、じゃがいもの加熱も皮むきもあっという間♪<br>なめらかなマッシュポテトが、超簡単にできあがるぞ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_03';
        $speech ='ほ、本当～！？<br>フラッキー、さっそく方法を教えて！';
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
          <h3 class="recipe__ttl_l mb0">レンジを使ったマッシュポテトの作り方</h3>
          <p class="mb2">じゃがいもを潰して作るマッシュポテトは、肉料理の付け合わせの定番。電子レンジを使えば、短時間で簡単に仕上がります。</p>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>じゃがいも</dt>
              <dd>2個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>バター</dt>
              <dd>20g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>生クリーム（ない場合は牛乳）</dt>
              <dd>大さじ4</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>塩</dt>
              <dd>適量</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>こしょう</dt>
              <dd>適量</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-01@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-02@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
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
                </div></h4>
                <p class="mb2">じゃがいもの潰し具合は、好みの仕上がりに合わせよう！じゃがいもの歯ごたえを残したいなら、塊が少し残っているところで潰すのを止めてOK。クリーミーでなめらかな仕上がりにしたいなら、じゃがいもを加熱した後の潰す手順を省いて、すぐ<a href="<?php echo($base_url)?>/magazine/article/recipe-technic63.php" class="recipe-design__link">裏ごし</a>するのがおすすめだぜ！</p>
              </div>
            </div>
          </div>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-04@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-plus1 mb3">
              <div class="recipe-plus1__row">
                <h4 class="recipe-plus1__ttl"><?php echo ($altCap06); ?>とは？</h4>
                <div class="u-clearfix">
                  <figure class="u-float__right w50">
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-06@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
                  </figure>
                  <p class="mb2">お餅のように長～くのびるマッシュポテト「アリゴ」をご存じですか？アリゴとは、フランスの郷土料理。マッシュポテトにチーズをたっぷり混ぜたもので、パンやソーセージなどと一緒にいただきます。</p>
                  <p>基本の工程のバターを加えるタイミングで、ピザ用チーズとモッツァレラチーズを合わせて150gほど加えて、電子レンジで1分～1分半再加熱。チーズが溶けたらよく混ぜてください。しっかりと粘りが出たら、アリゴ風マッシュポテトのできあがり！ホームパーティーにもおすすめの一品です。</p>

                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="recipe-plus1 mb3">
              <div class="recipe-plus1__row">
                <h4 class="recipe-plus1__ttl">さつまいもを使ったマッシュポテト</h4>
                <p>じゃがいもの代わりにさつまいもを使って、マッシュポテトを作ることもできます。基本の工程は同じです。さつまいも1本を洗ったら、1.5cmの厚さの輪切りにしてください。よく洗えば、皮もそのまま使えます。耐熱容器に入れて少量の水をかけ、200Wくらいの低いワット数にした電子レンジで、約15分加熱しましょう。さつまいもはじっくり加熱することで、より甘味が強くなります。後はじゃがいもと同じようにバター、生クリームを加えて潰したら完成です。レーズンや砕いたくるみをのせると、おしゃれに仕上がりますよ！</p>
              </div>
            </div>
          </section>
          <h3 class="recipe__ttl_l mb0">マッシュポテトの保存方法</h3>
          <p class="mb2">マッシュポテトは多めに作ってストックしておくと、付け合わせが欲しいときや、ほかの料理にアレンジするときに重宝します。</p>
          <div class="mb2">
            <h4 class="recipe__ttl">冷凍保存がおすすめ！</h4>
            <p>マッシュポテトは冷蔵保存だとあまり日持ちしないので、冷凍保存がおすすめです。<br>まず粗熱を取ってから、1食分（100g程度）ずつラップに包みます。冷凍・解凍がスムーズにできるように、平らな形に包むのがポイント！<br>包んだものを数個ずつ、重ならないようにファスナー付き保存袋に入れて、空気を抜いて冷凍庫へ入れましょう。<br>金属製のバットの上にのせると、より素早く冷凍できるので、美味しさを保ちやすくなりますよ。<br>保存期間の目安は、約2週間です。</p>
          </div>
          <div class="mb2">
            <h4 class="recipe__ttl">解凍方法</h4>
            <p>使う分をラップのまま加熱すると、ほくほくした食感が戻ってきます。1人前であれば、600Wの電子レンジで1分間程度加熱しましょう。解凍後水っぽくなってしまったら、マッシュポテトを耐熱皿に平らにして広げ、ラップをせずに600Wの電子レンジで30秒ほど加熱してください。水分が飛んでほっくりすればOKです。<br>ポタージュなどに使う場合は、凍ったまま鍋に入れて使うことができますよ。</p>
          </div>
          <h3 class="recipe__ttl_l mb0">マッシュポテトを使ったアレンジレシピ</h3>
          <p class="mb2">マッシュポテトは、さまざまな料理に応用可能。人気のアレンジレシピをご紹介します。</p>
          <div class="mb2">
            <h4 class="recipe__ttl"><?php echo (strip_tags($altCap07)); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__left w50">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-07@2x.jpg"
              alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>マッシュポテトのアレンジレシピといえば、やはり王道のコロッケ。丸型にまとめて小麦粉を付け、溶き卵にくぐらせてパン粉をまぶします。加熱した油でこんがりきつね色になるまで揚げたら、できあがりです。お好みで、ミックスベジタブルやツナなどを混ぜても美味しいですよ。</p>
            </div>
          </div>
          <div class="mb2">
            <h4 class="recipe__ttl"><?php echo (strip_tags($altCap08)); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__right w50">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-08@2x.jpg"
              alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>一口サイズにまとめたマッシュポテトを、スモークサーモンでくるっと巻くだけ。ピンク色の鮭と白いマッシュポテトの色合いが華やかで、パーティーのオードブルにぴったり！<br>塩気とクリーミーな味わいが相性バツグンの一品です。</p>
            </div>
          </div>
          <div class="mb2">
            <h4 class="recipe__ttl"><?php echo (strip_tags($altCap09)); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__left w50">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-09@2x.jpg"
              alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>余ったマッシュポテトをグラタン皿に詰め、上からミートソースをたっぷりとかけます。ピザ用チーズをのせてオーブンで加熱し、こんがり焼き目がついたらできあがり。食べ応えがあり、子どもたちが大好きな味です。</p>
            </div>
          </div>
          <div class="mb2">
            <h4 class="recipe__ttl"><?php echo (strip_tags($altCap10)); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__right w50">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/67/tech67-10@2x.jpg"
              alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p><a href="<?php echo($base_url)?>/magazine/article/recipe-technic48.php" class="recipe-design__link">オムレツ</a>の卵液をフライパンに流し、手前にマッシュポテトを置いて奥から巻き、形を整えます。お好みで、溶けるチーズなどを加えても美味しくいただけます。</p>
            </div>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='mama_01';
        $speech ='あっという間にできちゃった！<br>みんな～、夕ご飯よ～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='わーすごい！<br>れすとらんみた～い';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='なめらかな口当たりで、すごく美味しいね！<br>おつまみにもなるな～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='よかった～♪<br>簡単にできて美味しい付け合わせなんて最高ね！<br>フラッキーありがとう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='だろ？一気にたくさん作れるから、<br class="u-only__pc">パーティーシーズンにも便利なんだ！<br>クリスマスはもちろん、新じゃがの出回る春夏にも作ってみてくれよな！';
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
