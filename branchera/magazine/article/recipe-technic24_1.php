<?php
//base
include( "../../function.php" );
$content = get_id_data( '15024' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「刺身の切り方」を動画で解説。マグロやかつおを切る「平造り」や、鯛やヒラメを切る「そぎ切り」を中心に、刺身の切り方の手順をご紹介します。また、盛り付けに使う「ツマ」の基礎知識もお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'OBLh8N3FCz8';

//導入文
$introTxt = '第24回は「刺身の切り方」について動画でご紹介します。';

//キャプチャALTタグ
$altCap01 = 'お刺身に厚みを持たせる一般的な切り方です。';
$altCap02 = '柵は繊維が、左下から右上の向きになるように置きます。<br>柵の厚みが違う場合は、高い方を奥、低い方を手前に置きましょう。';
$altCap03 = '右側から繊維に対して、直角に包丁を当てます。刃元から刃先を使って、一度で引き切ります。繊維に対して直角に包丁を当てることで、筋が断ち切られて、口当たりがよくなりますよ。';
$altCap04 = '切った身は包丁に付けたまま倒して、右側に置きます。';
$altCap05 = '身がかたい刺身を、薄く食べやすくする切り方です。';
$altCap06 = '柵を右上がりに傾けて置きます。';
$altCap07 = '右側から刃を寝かせて、薄くそぐように切ります。柵を押さえる手で身をつかみ、左側に重ねましょう。';
$altCap08 = '平造りは、<a href="'.$base_url.'/magazine/article/recipe-technic100.php" class="recipe-design__link">マグロ</a>やかつお、<a href="'.$base_url.'/magazine/article/recipe-technic102.php" class="recipe-design__link">ぶり</a>やサーモンなど、厚みがありやわらかい魚を切るときに使います。手前に刃を引いて切る、最もスタンダ－ドな刺身の切り方です。';
$altCap09 = 'そぎ切りは、<a href="'.$base_url.'/magazine/article/recipe-technic17.php" class="recipe-design__link">包丁</a>を斜めにしてそぐように切る方法です。鯛やヒラメなど、身の締まった白身魚を刺身にするときに使います。断面を広く、薄く切るので、独特の食感を生かすことができます。';
$altCap10 = 'イカ、さより、きすなど、身が薄くて平造りにできないものを切るときに使う切り方です。身を細長く切るので「糸造り」とも呼ばれ、和え物などによく用いられます。';
$altCap11 = 'マグロやかつおなどを、<a href="'.$base_url.'/magazine/article/recipe-technic131.php" class="recipe-design__link">サイコロ状</a>に切る切り方です。重ねたり、<a href="'.$base_url.'/magazine/article/recipe-technic75.php" class="recipe-design__link">とろろ</a>をかけたりする、立体感のある盛り付けによく用いられます。';
$altCap12 = 'さばなどの、皮がかたい魚を切るときに使う切り方です。まず軽く切り込みを入れてから、その横のラインに包丁を入れて、切り離していきます。';
$altCap13 = '';

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
        $recipeIcon ='mie_02';
        $speech ='マユ先生、この間スーパーで<br class="u-only__pc">お刺身の柵を買ったのですが、<br class="u-only__pc">切っている時に、切り口が崩れてしまって<br class="u-only__pc">うまく切れなかったんです…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='お刺身って慣れていないと、なかなかうまく切れないですよね<br>ミエさん、ちなみにどういう切り方をしたんですか？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_02';
        $speech ='どうって…普通に、こう上下に動かして…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_02';
        $speech ='なるほど！原因は切り方にありそうですね<br>包丁を上下に動かすと、せっかくのお刺身が潰れちゃいますよ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='そうか、お刺身って切り方にコツがいるのですね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='では、今回は見た目がきれいで、食材を引き立てる<br class="u-only__pc">お刺身の切り方をご紹介しますね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie technic">
        <h3 class="recipe-movie__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
           alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
        </h3>
        <div class="recipe-movie__video">
          <div class="recipe-movie__video_base">
            <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <h3 class="recipe__ttl_l mb2">刺身の切り方の種類</h3>
        <p>市販の刺身盛り合わせは、そのまま食卓に並べることができて便利ですよね。ですが、自分で魚を切ることができると、好きな組み合わせで刺身を楽しむことができますよ。<br>魚の種類や食べ方によって変わる刺身の切り方。まずはどんな種類の切り方があるのかをご紹介します。</p>
        <h4 class="recipe__ttl">平造り</h4>
        <dl class="recipe-design__step mb2">
          <dt class="recipe-design__step_img">
            <figure>
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-08@2x.jpg"
                alt="マユ先生のHow To<?php echo('「'.$pageTtl.'」平造り｜'.strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
          </dt>
          <dd class="recipe-design__step_txt">
            <?php echo($altCap08); ?>
          </dd>
        </dl>
        <h4 class="recipe__ttl">そぎ切り</h4>
        <dl class="recipe-design__step mb2">
          <dt class="recipe-design__step_img">
            <figure>
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-09@2x.jpg"
                alt="マユ先生のHow To<?php echo('「'.$pageTtl.'」そぎ切り｜'.strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
          </dt>
          <dd class="recipe-design__step_txt">
            <?php echo($altCap09); ?>
          </dd>
        </dl>
        <h4 class="recipe__ttl">細造り</h4>
        <dl class="recipe-design__step mb2">
          <dt class="recipe-design__step_img">
            <figure>
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-10@2x.jpg"
                alt="マユ先生のHow To<?php echo('「'.$pageTtl.'」細造り｜'.strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
          </dt>
          <dd class="recipe-design__step_txt">
            <?php echo($altCap10); ?>
          </dd>
        </dl>
        <h4 class="recipe__ttl">角造り</h4>
        <dl class="recipe-design__step mb2">
          <dt class="recipe-design__step_img">
            <figure>
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-11@2x.jpg"
                alt="マユ先生のHow To<?php echo('「'.$pageTtl.'」角造り｜'.strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
          </dt>
          <dd class="recipe-design__step_txt">
            <?php echo($altCap11); ?>
          </dd>
        </dl>
        <h4 class="recipe__ttl">切りかけ造り</h4>
        <dl class="recipe-design__step mb2">
          <dt class="recipe-design__step_img">
            <figure>
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-12@2x.jpg"
                alt="マユ先生のHow To<?php echo('「'.$pageTtl.'」切りかけ造り｜'.strip_tags($altCap12)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
          </dt>
          <dd class="recipe-design__step_txt">
            <?php echo($altCap12); ?>
          </dd>
        </dl>
        <h3 class="recipe__ttl_l mb0">刺身の切り方の解説</h3>
        <p class="mb2">５種類の切り方の中でも使う機会の多い、「平造り」「そぎ切り」の手順をお伝えします。</p>
        <h4 class="recipe__ttl">平造り</h4>
        <div class="recipe-design__howto mb3">
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-01@2x.jpg"
                 alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'.strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap01); ?>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-02@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl.'」'.strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap02); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-03@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb2">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-04@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap04); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">そぎ切り</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-05@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-06@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-07@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap07); ?>
            </dd>
          </dl>
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
              <h3>左利きの人は逆側から切る</h3>
              <p>左利きの人は、包丁を入れる方法が逆になります。また、左利き用の包丁で切るようにしましょう。<br>平造りの場合は、柵の右側ではなく、左側から切っていきます。そぎ切りの場合は、左側に包丁を傾け、柵の右側から薄くそいでいきましょう。</p>

            </div>
          </div>
          <div class="recipe-design__plus1 plus1 mb3">
            <div class="plus1__row">
              <h3 class="plus1__ttl">イカは縦切り？横切り？</h3>
              <p>イカの筋肉は横方向に伸びて発達しています。その筋肉の繊維を断つように縦に切ると、口当たりがやわらかくなって、より美味しく食べられますよ。<br>最初に皮や骨を取って下処理を終えたら、横に3等分します。それを2mmの厚さで、縦に細く切りましょう。</p>
            </div>
          </div>
          <h3 class="recipe__ttl_l mb0">刺身に添える「ツマ」って何？</h3>
          <div class="u-clearfix mb2">
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-13.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/24/tech24-13@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap13)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
          <p class="mb2">刺身に添える大根の「ツマ」。真っ白で刺身を引き立てるツマですが、そもそもなぜ刺身にツマを添えるのでしょうか？そして、ツマの食材は大根だけなのでしょうか？<br>意外と知らないツマについて、ご説明します。</p>
          </div>
          <h4 class="recipe__ttl">ツマの語源は「妻」と「褄」</h4>
          <p class="mb2">ツマの語源とされている言葉は、ふたつあります。ひとつは「妻」、もうひとつが「褄」です。<br>まず妻は、「脇役、添え物」という意味。言葉通り、主役の刺身を支える添え物であることから、「妻」と呼ばれるようになったといわれています。<br>ふたつ目の褄は、「端」という意味。料理の端に置かれることから、「褄」と呼ばれるようになった、という説があります。</p>
          <h4 class="recipe__ttl">飾り、殺菌…実はスゴイ！ツマの効果</h4>
          <p class="mb2">ツマには、刺身を華やかに見せる飾りの効果はもちろん、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic102.php" class="recipe-design__link">魚の生臭さ</a>を消したり、殺菌したりする効果があります。ほかにも、口の中をスッキリさせたり、風味をプラスしてより美味しく食べられるようにしたり…「添え物」とはいえ、多くの役割を担っているのです。</p>
          <h4 class="recipe__ttl">大根だけじゃない！ツマの種類</h4>
          <p>ツマに使われる野菜には、大根のほか、わかめ、みょうが、大葉、にんじん、菊の花、きゅうりなどがあります。ちなみに、ツマの中でも大根やにんじんなどを<a href="<?php echo($base_url)?>/magazine/article/recipe-technic13.php" class="recipe-design__link">細切り</a>にしたものは「ケン」と呼ばれます。</p>
          <p>同じ野菜でも、切り方によって、見た目も食感も大きく変わります。華やかにしたいときは飾り切り、魚と一緒に食べやすくしたいときはケン…など、お好みに合わせて工夫してみてくださいね！<br>※詳しいツマの解説・盛り付け方は「<a href="<?php echo($base_url)?>/magazine/article/recipe-technic25.php" class="recipe-design__link">簡単！刺身のおしゃれな盛り付け方</a>」をご覧ください。</p>
        </div>
      </div>
      <?php
        $recipeIcon ='mie_01';
        $speech ='わぁ、口当たりが全然違う！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='魚は空気に触れると、鮮度の落ちが早くなるので<br class="u-only__pc">切られているお刺身ではなく<br class="u-only__pc">柵を買って、食べる直前に切るのがおすすめですよ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='うまく切れないから、あまり柵を買わなかったけど、<br class="u-only__pc">これからは柵を買ってお刺身を作ろう♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15040'),
				array ('recommend-recipe-id','15001'),
				array ('recommend-recipe-id','15017'),
				array ('recommend-recipe-end')

				);
			?>
			<?php
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
			?>
      <div class="mb0">
        <?php
                include($inc_path."/lib/inc/page/_magazine/__recipe-technic-footer.php");
            ?>
      </div>
    </section>
  </article>
</main>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<?php
    $toindex_url = "/magazine/index_comic02.php";
    include($inc_path . "/lib/inc/toindex__magazin.php");
    ?>
<?php  include($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include($inc_path."/lib/inc/footer.php"); ?>
<?php  include($inc_path."/lib/inc/foot.php");
