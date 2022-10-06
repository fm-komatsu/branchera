<?php
//base
include( "../../function.php" );
$content = get_id_data( '15065' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「だし巻き卵の作り方」を動画で解説。ふわふわで美味しいだし巻き卵を簡単に作るコツをご紹介します。また、卵焼き器はもちろん、フライパンを使って焼くときのポイントや、人気アレンジレシピもお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'EvWYKUv3MSY';

//導入文
$introTxt = '第65回は、ふわふわの「だし巻き卵の作り方」について動画でご紹介します。';

//キャプチャALTタグ
$altCap01 = 'ボウルに卵を割り入れ、溶きほぐします。<br>ほぐれたら★を加えて、全体を混ぜ合わせます。';
$altCap02 = '卵液をざるに通し、溶ききれない白身やカラザなどを取り除きます。';
$altCap03 = 'サラダ油を染み込ませたキッチンペーパーで、卵焼き器に油を塗ります。';
$altCap04 = '中火にかけて、箸先を付けたらジュッと音がする程度まで、卵焼き器を温めます。<br>温まったら、卵液を全量の1/4注ぎ入れましょう。';
$altCap05 = '半熟状態になったら、奥から手前に返すようにして巻いてください。目安は3つ折りです。';
$altCap06 = '卵を巻ききったら、サラダ油を染み込ませたキッチンペーパーで、空いたスペースに油を塗ります。<br>奥に卵を移動させたら、手前側の空いたスペースにも油を塗ってください。';
$altCap07 = 'そこへまた卵液を注ぎ入れて焼いていきます。卵液がなくなるまで、この工程を繰り返しましょう。';
$altCap08 = '焼き上がったら巻き簾にのせて巻き、3分ほど置いて冷ましてできあがりです。';
$altCap09 = '卵焼き機に卵液を流し入れたら、角切りにしたクリームチーズを適量のせて、奥から手前に向かって巻きます。甘いだし巻き卵と、とろ～りと溶けた塩気のあるチーズが相性ぴったり♪';
$altCap10 = 'だし汁と各調味料の代わりに水で割った白だしを使い、割烹料理店で食べるような京風だし巻き卵に！甘さ控えめで、深みのあるだしの味わいが楽しめます♪';
$altCap11 = '卵焼き機に卵液を流し入れたら、海苔で巻いた辛子明太子をのせて、奥から手前に向かって巻きます。切ったときの断面がカラフルで、かわいいだし巻き卵になりますよ。';
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
        $recipeIcon ='mama_02';
        $speech ='もうすぐコウちゃんの遠足！<br>美味しいお弁当を作ってあげたいな～<br>そうだ！いつもの卵焼きを、ふわふわの甘いだし巻きにしてみよう！<br>でも、卵焼きよりも巻くのが難しいのよね。上手にできるかな…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='確かにだし巻き卵の方が、コツが必要だな～<br>だけど、いくつかポイントを押さえておけば<br class="u-only__pc">きれいなだし巻き卵が作れるぜ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_02';
        $speech ='フラッキー、聞いてたの！？<br>丁度よかった～<br>だし巻き卵を上手に作るコツ、教えてくださいっ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='ガッテン承知！<br>コウちゃんも喜ぶ、ふわふわのだし巻き卵を作るコツを<br class="u-only__pc">教えてやるぜ～！';
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
          <h3 class="recipe__ttl_l mb0">だし巻き卵の作り方</h3>
          <p class="mb2">だしがたっぷり入った、ふわふわのだし巻き卵。口に含んだ瞬間、じゅわっと溢れ出る甘みが美味しいですよね。ポイントを押さえて正しい工程通りに作れば、難しいテクニックいらずで上手に焼くことができますよ。</p>
          <h4 class="recipe__ttl_tech">材料（2人分）</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>卵</dt>
              <dd>4個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>★だし汁</dt>
              <dd>大さじ4（<a href="<?php echo($base_url)?>/magazine/article/recipe-technic06.php" class="recipe-design__link">かつお昆布だし</a>使用）</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>★薄口醤油</dt>
              <dd>小さじ2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>★砂糖</dt>
              <dd>大さじ1/2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>★みりん</dt>
              <dd>大さじ1/2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>サラダ油</dt>
              <dd>適量</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-01@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-02@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-03@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-04@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
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
                </div>
                <span>卵の気泡はどうするの？</span></h4>
                <p class="mb2">卵液を加熱する際にできた気泡は、箸先で潰しながら焼いてOK！<br>気泡をそのまま放置すると、だし巻き卵に空洞ができる原因になるんだ。<br>空洞ができるのを防ぐことで、よりきれいで舌触りがなめらかなだし巻き卵になるぜ！</p>
              </div>
            </div>
          </div>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-06@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-07@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-plus1 mb3">
              <div class="recipe-plus1__row">
                <h4 class="recipe-plus1__ttl">上手に焼くポイントは？</h4>
                <p class="mb2">卵液を流し込む際、焼けて奥に移動させた卵を持ち上げて、底にも流し込むようにしましょう。面が整い、きれいに巻きやすくなりますよ。また、毎度サラダ油を染み込ませたキッチンペーパーで、卵液を流し込むスペースに油をなじませるのを忘れずに！ <br>そして、焦げないように常に中火をキープしましょう。もし焦げそうになったら卵焼き器を火から下ろして、濡れふきんの上に置いて冷ましてください。</p>
              </div>
            </div>
          </section>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-08@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-plus1 mb3">
              <div class="recipe-plus1__row">
                <h4 class="recipe-plus1__ttl">フライパンで焼くときのコツ</h4>
                <p class="mb2">だし巻き卵は卵焼き器で作ったほうが形を整えやすいので便利ですが、丸いフライパンでも焼くことができます。<br>丸いフライパンで上手に卵焼きを作る、3つのコツをお伝えします！</p>
                <ul class="u-list__ul_num">
                  <li><span><span class="u-font__bold">小さいフライパンを使う</span><br>できるだけ「小さいフライパン」を使うこと。フライパンが大きいと流し入れた卵液が薄くなるため、破けやすくなり、巻きづらくなってしまいます。フライパンが小さいほど、卵液を流したときに厚みが出るので、きれいに巻くことができますよ。</span></li>
                  <li><span><span class="u-font__bold">両端を先に折りたたんでから巻く</span><br>卵液の表面がフライパンを傾けても流れない程度に固まったら、両端を内側に折りたたんで、四角形に近付けます。中心に向かって折りたたむと左右の偏りがなく、きれいに仕上がりますよ。その後は、通常通り奥から手前に向かって巻いていきましょう。</span></li>
                  <li><span><span class="u-font__bold">ゴムベラを使って巻く</span><br>菜箸でなく、ゴムベラを使用すると卵を破らずに巻きやすくなります。ゴムベラは面が広いので、万が一卵が破けても、すぐに形を整えることができますよ。</span></li>
                </ul>
              </div>
            </div>
          </section>
          <h3 class="recipe__ttl_l mb0">だし巻き卵の人気アレンジレシピ</h3>
          <p class="mb2">美味しいだし巻き卵のアレンジレシピをご紹介します。</p>
          <h4 class="recipe__ttl_tech">チーズが入ったとろ～りだし巻き卵</h4>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__left">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-09@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」チーズが入ったとろ～りだし巻き卵｜'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap09); ?>
              </span>
            </p>
          </div>
          <h4 class="recipe__ttl_tech">白だしを使った京風だし巻き卵</h4>
          <div class="u-clearfix">
            <p>
              <figure class="u-float__right">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-10@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」白だしを使った京風だし巻き卵｜'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap10); ?>
              </span>
            </p>
          </div>
          <h4 class="recipe__ttl_tech">海苔と明太子のだし巻き卵</h4>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__left">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/65/tech65-11@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」海苔と明太子のだし巻き卵｜'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap11); ?>
              </span>
            </p>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='ko_03';
        $speech ='ままー！<br>たまごやき、ふわふわでおいしかったよー！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='本当？よかった♪<br>あの卵焼きね、「だし巻き卵」っていうんだよ～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='へぇ～！<br>こうちゃん、だしまきたまごだーいすき！<br>あしたもたべた～い♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='おーっ、だし巻き卵いいねえ！<br>この前覚えた<a href="'.$base_url.'/magazine/article/recipe-technic58.php" class="recipe-design__link">大根おろし</a>を添えて食べたいな～<br>ママ、明日の夜ご飯に作ってよ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='了解！<br>卵料理のレパートリーが増えたわ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__assist">
				<div class="recipe-assist-technic">
					<div class="recipe-assist-technic__row">
						<h3 class="recipe-assist-technic__ttl">用語解説</h3>
						<dl class="recipe-assist-technic__term">
							<dt>カラザとは</dt>
							<dd>カラザとは、卵を割ったときに卵白に混じっている、白い紐状のもの。カラザは卵黄を卵の中央につなぎ留め、衝撃から守る役割をしている。</dd>
						</dl>
					</div>
				</div>
			</div>

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
