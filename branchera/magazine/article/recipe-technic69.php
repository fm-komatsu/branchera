<?php
//base
include( "../../function.php" );
$content = get_id_data( '15069' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「オクラの下ごしらえ方法」を動画とテキストで解説。下ゆでする前のヘタやガクの処理、産毛を取る「板ずり」の仕方についてご紹介します。また、美味しくゆでるコツやアレンジレシピもお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'wOGXdmVl8Dw';

//導入文
$introTxt = '第69回は、「オクラの下ごしらえ」について動画でご紹介します。';

//キャプチャALTタグ
$altCap01 = 'ヘタの黒い部分を切り落とします。';
$altCap02 = 'ガク（ヘタの下のギザギザの部分）を、包丁でぐるりとむきます。むき方は、<a href="'.$base_url.'/magazine/article/recipe-technic03.php" class="recipe-design__link">野菜の皮むき</a>と同様です。';
$altCap03 = 'オクラに軽く塩をまぶします。表面の産毛を手でこするか、板ずりして取りましょう。';
$altCap04 = '鍋に水を入れて沸かし、オクラを入れて約1分半～2分ゆでます。';
$altCap05 = 'ざるに上げたら、冷水に浸けて軽く冷まします。水分をキッチンペーパーで拭き取ったら、下ごしらえ完了です。';
$altCap06 = 'オクラの花';
$altCap07 = '下ごしらえ（下ゆで）したオクラを、ファスナー付き保存袋に入れて冷凍保存します。<br>保存期間の目安は、約2週間です。<br>写真のように、小口切りにした状態でも冷凍できます。';
$altCap08 = '野菜たっぷりカレー';
$altCap09 = 'オクラの漬物';
$altCap10 = '';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';
$altCap14 = '';
$altCap15 = '';

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
        $recipeIcon ='mama_02';
        $speech ='珍しくオクラを買っちゃった！<br>さぁ～て、オクラ納豆を作ろうっと<br>…その前に、多分下ごしらえが必要よね<br>どういう手順でやればいいんだっけ？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='お～い！オクラの下ごしらえ、やったことないのか？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_02';
        $speech ='意外と家で食べる機会がなかったのよ～！<br>フラッキー、教えてくれる！？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='やれやれ！仕方ないな～<br>ちょうどいい歯ごたえが楽しめる、<br class="u-only__pc">オクラの下ごしらえのポイントを伝授するぜ！';
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
          <h3 class="recipe__ttl_l mb0">オクラの下ごしらえ</h3>
          <p class="mb2">ネバネバした食感が魅力のオクラ。カルシウムやカリウムが豊富で、お腹にもやさしい食材です。そんなオクラをより美味しく食べるには、ゆでる前の下ごしらえがポイント！<br>きちんとした処理をすれば、オクラ独特の食感も粘りも失うことなく、味わうことができますよ。</p>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>オクラ</dt>
              <dd>1袋（約100g）</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>塩</dt>
              <dd>適量</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/69/tech69-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/69/tech69-01@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/69/tech69-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/69/tech69-02@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/69/tech69-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/69/tech69-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <section>
            <?php // check
              $check_cnt ='<h5>板ずりとは？</h5>
              <p>板ずりは、きゅうりやオクラ、ふきなどに塩をまぶしてすり込み、まな板の上でゴロゴロとすり付けながら転がすこと！野菜の表面をなめらかにするほか、色が鮮やかになる、調味料が染み込みやすくなる、アクが抜けるなどの効果があるぜ！</p>';
              include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
            ?>
          </section>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/69/tech69-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/69/tech69-04@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/69/tech69-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/69/tech69-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <section>
          <?php // plus1
            $plus1_ttl ='レンジで下ごしらえする方法';
            $plus1_cnt ='<p>オクラに塩をまぶして手でこするか、板ずりして産毛を取り、水で洗います。ヘタのかたい部分を切り落とし、耐熱皿に並べてふんわりとラップをしてください。1袋分のオクラの場合、600wの電子レンジで約1分～1分30秒加熱したら完了です。<br>オクラの大きさや量によって加熱時間は異なるので、様子を見ながら加熱しましょう。</p>';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>
          <section>
          <?php // plus1
            $plus1_ttl ='「オクラの花」って食べられるの？';
            $plus1_cnt ='<div class="u-clearfix">
            <figure class="u-float__left">
              <img data-src="'.$img_url.'/magazine/comic02/technic/69/tech69-06.jpg" data-retina="'.$img_url.'/magazine/comic02/technic/69/tech69-06@2x.jpg"
                alt="フラッキーのHow To「'.$pageTtl.'」'. strip_tags($altCap06).'" style="max-width:300px" class="u-img__max">
            </figure>
            <p class="mb2">オクラの花は、黄色く大きな花びらが特徴。見る機会は少ないですが、じつは食べることができます。オクラに似て、ネバっとした食感です。</p>
            <p>また、「花オクラ」という名前で売られている花は、一般的なオクラの花ではありません。花オクラはオクラの花を食べるために改良した品種で、「トロロアオイ」とも呼ばれます。オクラの香りと粘り、濃密な甘さがあり、食べやすい食材です。サラダやおひたし、天ぷらなどにして食べるほか、オードブルやサラダに入れて、彩りに使うのもおすすめです。</p>
            </div>';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>
          <h3 class="recipe__ttl_l mb0">下ごしらえしたオクラの保存方法</h3>
          <p class="mb2">加熱したオクラはあまり日持ちしないので、基本的には翌日までに食べ切りましょう。余ったオクラは、冷凍保存するのがおすすめです。</p>
          <h4 class="recipe__ttl_tech">冷凍保存の方法</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/69/tech69-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/69/tech69-07@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <p class="mb2">おひたしなどにして食べる場合は冷蔵庫で自然解凍、火を通す料理の場合は、凍ったまま使います。</p>
          <h3 class="recipe__ttl_l mb0">オクラを使った人気レシピ</h3>
          <p class="mb3">オクラはいろいろなメニューで活躍できる野菜です。おすすめのレシピをご紹介します。</p>
          <div class="mb2">
            <h4 class="recipe__ttl_tech"><?php echo (strip_tags($altCap08)); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__left w50">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/69/tech69-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/69/tech69-08@2x.jpg"
              alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>ナスやかぼちゃ、パプリカなどが入ったカレーの仕上げに、下ごしらえして輪切りにしたオクラを散らします。彩りがよくなるうえ、オクラの歯ごたえがアクセントになります。</p>
            </div>
          </div>
          <div class="mb2">
            <h4 class="recipe__ttl_tech">チーズフォンデュ</h4>
            <p>ミニトマト、じゃがいも、ソーセージなど、定番のチーズフォンデュの具材にオクラを加えてみませんか？オクラの歯ごたえと粘り気は、チーズとの相性バツグンです。</p>
          </div>
          <div class="mb2">
            <h4 class="recipe__ttl_tech"><?php echo (strip_tags($altCap09)); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__right w50">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/69/tech69-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/69/tech69-09@2x.jpg"
              alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>オクラ、白だし、砂糖をポリ袋に入れて揉み込みます。3時間ほど漬け込んだらできあがり！</p>
            </div>
          </div>
          <h4 class="recipe__ttl_tech">オクラを離乳食に使う場合</h4>
          <p class="mb2">オクラはペースト状にしにくいため、離乳食に使用する場合は、食べ物に慣れ始めた離乳食中期から与えるようにしましょう。オクラは刻むととろみが出るので、赤ちゃんにとっても食べやすい食材です。</p>
          <h5 class="recipe__ttl_s">中期～後期</h5>
          <p class="mb2">オクラはやわらかくゆでて種を取り除き、細かく刻んで使いましょう。舌で潰せる程度のやわらかさが目安です。</p>
          <h5 class="recipe__ttl_s">後期～完了期</h5>
          <p class="mb2">オクラはやわらかくゆでて、種を取り除きます。細かく刻んで使うのはもちろん、薄い小口切りにして、離乳食の飾りとして使うこともできますよ。</p>
          <p>大きめのオクラは果肉や種がかたいことがあるので、小ぶりのオクラを選ぶようにしましょう。</p>
        </div>
      </div>
      <?php
        $recipeIcon ='mama_01';
        $speech ='じゃーん！念願のオクラ納豆！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='うん！しっかり歯ごたえがあって美味しい～<br>もしオクラが余ってたら、丸ごとマヨネーズに付けて食べたいな♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_01';
        $speech ='こうちゃんも～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='よかった！<br>マヨネーズ、いいね～！まだ切ってないオクラ持ってくるわ♪<br>ちゃんと下ごしらえすると、こんなに美味しくなるのね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='だろ？<br>ちなみに、オクラは年中店頭に置いてあるけど、<br class="u-only__pc">冬になると国産の流通量が減るんだ<br>旬は夏だってことも知っておくといいぜ！';
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
