<?php
//base
include( "../../function.php" );
$content = get_id_data( '15048' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「オムレツの作り方」を動画で解説。ホテルで出されるような、ふわふわできれい形のオムレツを作る手順や、コツをお伝えします。また、基本のオムレツに加え、具入りのアレンジオムレツレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = 'ボウルに卵を割り入れて、牛乳、塩こしょうを加えてからよく混ぜます。泡立て過ぎず、卵白が切れる程度に混ぜましょう。';
$altCap02 = 'フライパンを<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけて温め、バターを入れます。その後、フライパンを傾けるようにして回し、バターを全体に広げます。';
$altCap03 = 'バターが溶けきる前に卵液を流し入れます。';
$altCap04 = '中火のまま、耐熱ゴムベラをぐるぐると動かして、大きく全体をかき混ぜていきます。フライパンを揺すりながら混ぜるのがポイントです。';
$altCap05 = '半熟の一歩手前くらいに卵が固まったら、奥に寄せて、木の葉型に整えます。';
$altCap06 = 'フライパンの側面を使って木の葉型に整えたら、火を止めて、フライパンの柄を逆手に持ち替えます。';
$altCap07 = 'フライパンの柄を逆手で持つときは、写真のように、手のひらで柄を下から包むように握ろう！';
$altCap08 = '皿をフライパンに寄せて、オムレツをひっくり返すようにして皿に取り出します。';
$altCap09 = '最後にもう一度形を整えて、完成です。';
$altCap10 = '';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';

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
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第48回は、「オムレツの作り方」です。ホテルで出されているような、ふわふわできれいな形のオムレツの作り方をご紹介します。</p>
      </div>
      <hr class="recipe__line">
      <div class="recipe-story mb3">
        <div class="recope-story__row recipe-story__technic">
          <p>実はこの春、マユ先生の引越しによりお料理教室が移転！今まで教えてもらったレシピや料理の基本をもとに、料理を頑張っていたママとパパですが、どうしてもまたマンネリ化してしまう今日この頃。新しいメニューに挑戦する時間もなかなかなく、献立に頭を悩ませることが増えていました。<br>そんなある日、家の中を片付けていると、コウちゃんが箱にしまってあるフライパンを発見！ママも見覚えのないこのフライパン…。</p>
        </div>
      </div>
      <div class="recipe-icn mama_02">
        <div class="inner">
          <p>もう、コウちゃん何を引っ張り出してるの～？<br>ん？フライパン？見覚えがないフライパンだなぁ。<br>こんなの持っていたっけ…？<br>んっ！？なんか光ってる！？</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>おおーい！待ちくたびれたよ！いつまで待たせるつもりだよ～っ！！</p>
        </div>
      </div>
      <div class="recipe-icn mama_02">
        <div class="inner">
          <p>えー！？フライパンがしゃべった！！<br>あなたは何者！？</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>俺はフライパンの妖精、フラッキー！<br>どうやら最近、また料理に悩んでいるようだな</p>
        </div>
      </div>
      <div class="recipe-icn mama_02">
        <div class="inner">
          <p>どうしてそれを！？</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>俺は何でもお見通しさ！<br>せっかく素敵なキッチンがあるんだから、もっと熱く楽しく料理しようぜ！<br>俺が、忙しいミエママに<br class="u-only__pc">美味しいメニューを超簡単に作るワザを伝授するからさ！</p>
        </div>
      </div>
      <div class="recipe-icn mama_02">
        <div class="inner">
          <p>本当？私、仕事に疲れて変な夢でも見ているのかしら…<br>…イテテテテ、つねったほっぺが痛いということは、現実か～！</p>
        </div>
      </div>
      <div class="recipe-icn ko_03">
        <div class="inner">
          <p>わ～！フライパンのようせいさんだぁ～！<br>ねぇフラッキー！ぼく、ふわふわのオムレツがたべたいなぁ～♪</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>OK任せろ！プロが作るようなふわふわとろとろのオムレツも、<br class="u-only__pc">俺の手にかかればあっという間に完成だ！<br>ママ、しっかり教えるからついてこい！</p>
        </div>
      </div>
      <div class="recipe-icn mama_01">
        <div class="inner">
          <p>まだ信じられないけど、私もオムレツは食べたい…<br>よーし！フラッキー、ご指導お願いします！</p>
        </div>
      </div>
      <div class="recipe__movie recipe-movie-new technic">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl@2x.png"
           alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/sv99SVy6QOk?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">基本のオムレツの作り方</h3>
          <p class="mb2">洋食の王道ともいえる木の葉型のオムレツ。中はふわとろで、子どもにも大人気の料理です。簡単なコツをいくつか知っておくだけで、ご家庭でも、お店で出てくるオムレツのようにきれいな形を作ることができます。</p>
          <h4 class="recipe__ttl_tech">基本の材料（1人分）</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt><a href="<?php echo $base_url ?>/magazine/article/recipe-technic08.php" class="recipe-design__link">卵</a></dt>
              <dd>2個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>牛乳</dt>
              <dd><a href="<?php echo $base_url ?>/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt><a href="<?php echo $base_url ?>/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>、こしょう</dt>
              <dd>適量</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>バター</dt>
              <dd>大さじ1</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-01@2x.jpg"
                 alt="フラッキーのHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php /* echo ($altCap01); */ ?>
              ボウルに卵を割り入れて、牛乳、塩・こしょうを加えてからよく混ぜます。泡立て過ぎず、<strong>卵白が切れる程度</strong>に混ぜましょう。
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'.strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap03); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php /* echo ($altCap03); */ ?>
              <strong>バターが溶けきる前</strong>に卵液を流し入れます。
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap04); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap05); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-06@2x.jpg"
                 alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap06); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php /* echo ($altCap06); */ ?>
              フライパンの側面を使って木の葉型に整えたら、火を止めて、フライパンの柄を<strong>逆手</strong>に持ち替えます。
            </dd>
          </dl>
          <div class="recipe-check mb3">
            <div class="recipe-check__row">
              <div class="recipe-check__ttl">
                <h4 class="recipe-check__ex center">
                  <img
                  data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png"
                  data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png"
                  alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
                </h4>
              </div>
              <h4>逆手で柄を持つときの握り方</h4>
              <dl class="recipe-design__step mb2">
                <dt class="recipe-design__step_img">
                  <figure>
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-07@2x.jpg"
                    alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap07); ?>" style="max-width:300px"
                    class="u-img__max">
                  </figure>
                </dt>
                <dd class="recipe-design__step_txt">
                  <?php echo ($altCap07); ?>
                </dd>
              </dl>
            </div>
          </div>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-08@2x.jpg"
                 alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap08); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/48/tech48-09@2x.jpg"
                 alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap09); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?>
            </dd>
          </dl>
          <section class="mb4">
          <div class="mb4">
            <h3 class="recipe__ttl_l">簡単！具入りオムレツレシピ</h3>
            <p>基本のオムレツ作りに慣れてきたら、具入りのオムレツを作ってみましょう！<br>レパートリーを広げることにより、楽しみながら作ることができます。具入りオムレツの中でも人気のレシピをお伝えします。</p>
          </div>
            <div class="mb2">
              <h4 class="recipe__ttl_tech">ひき肉とじゃがいものオムレツ</h4>
              <div class="u-clearfix mb2_sp">
                <figure class="u-float__right w45">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/48/technic48_popular01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/48/technic48_popular01@2x.jpg"
                  alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」ひき肉とじゃがいものオムレツ イメージ画像'); ?>" style="max-width:362px"
                  class="u-img__max">
                </figure>
                <p class="mb2 mb0_sp">具入りのオムレツを作る場合は、オムレツの工程とは別に、具材の調理を分けて行ないます。</p>
                <p class="mb2 mb0_sp">ひき肉、ふかしてから潰した<a href="<?php echo $base_url ?>/magazine/article/recipe-technic120.php" class="recipe-design__link">じゃがいも</a>、お好みで<a href="<?php echo($base_url)?>/magazine/article/recipe-technic16.php#mijingiri" class="recipe-design__link">みじん切りにした玉ねぎ</a>を、フライパンで炒めます。塩こしょうで味付けをしましょう。</p>
                <p>用意した具は、卵が半熟になったタイミングで卵の上に乗せます。フライパンを火から下ろして形を整える際に、奥に寄せながら一緒に包んであげるイメージです。</p>
              </div>
            </div>
            <div class="mb2">
              <div>
                <h4 class="recipe__ttl_tech">ほうれん草とツナのオムレツ</h4>
                <p class="mb2 mb0_sp">さっとゆでて、一口サイズに切り分けた<a href="<?php echo $base_url ?>/magazine/article/recipe-technic157.php" class="recipe-design__link">ほうれん草</a>と、ツナをボウルに入れて混ぜ合わせます。塩こしょうで味付けをしましょう。</p>
                <p>卵を加えて混ぜます。具が混ざった状態の卵を、フライパンで調理しましょう。工程は基本のオムレツと同じです。</p>
              </div>
            </div>
            <div>
              <div>
                <h4 class="recipe__ttl_tech">納豆チーズオムレツ</h4>
                <div class="u-clearfix">
                  <figure class="u-float__left w45">
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/48/technic48_popular02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/48/technic48_popular02@2x.jpg"
                    alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」納豆チーズオムレツ'); ?>" style="max-width:362px"
                    class="u-img__max">
                  </figure>
                  <p class="mb2 mb0_sp">ボウルに、納豆と刻んだチーズを入れて混ぜ合わせます。納豆パックに付属している<a href="<?php echo $base_url ?>/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>を入れてもよいでしょう。</p>
                  <p>卵が半熟になったタイミングで、卵の上に乗せます。具材の包み方は、ひき肉とじゃがいものオムレツの場合と同様です。<br>完成したオムレツの上に小ねぎをトッピングすれば、風味がさらにアップします！</p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="recipe-icn ko_03">
        <div class="inner">
          <p> わーい、オムレツ～！</p>
        </div>
      </div>
      <div class="recipe-icn mama_01">
        <div class="inner">
          <p>形も味もばっちり！<br>テレビで見るのと同じに作れた♪</p>
        </div>
      </div>
      <div class="recipe-icn ko_03">
        <div class="inner">
          <p>たまご、とろとろでおいしい～</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>うまくいってよかったな！<br>オムレツは中に入れる具材を工夫することで、<br class="u-only__pc">立派なメインディッシュにもなるぞ！</p>
        </div>
      </div>
      <div class="recipe-icn mama_01">
        <div class="inner">
          <p>ここまで上手に作れたのは、フラッキーのおかげだよ…<br>半信半疑だったけど、これから頼りにさせていただきます！</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>そうこなくっちゃ！ビシバシ鍛えるから、カクゴしろよ～！</p>
        </div>
      </div>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','13002'),
				array ('recommend-recipe-id','15141'),
				array ('recommend-recipe-id','15125'),
				array ('recommend-recipe-end')

				);
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
