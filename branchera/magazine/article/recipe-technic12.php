<?php
//base
include( "../../function.php" );
$content = get_id_data( '15012' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「正しい計量の仕方」を動画で解説。大さじ、小さじの分量や計量カップの分量を紹介しながら、それぞれの道具を使って正しく計量する方法をお伝えします。また、手量りのコツもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '110';

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
$youTubeId = '_o4C-LIPaA4';

//導入文
$introTxt = '第12回は、「計量の仕方」です。ちょっとした一手間で、味に差がでる計量の仕方をご紹介します。';

//check include
$checkInc = 'include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");';

//plus1 include
$plus1kInc = 'include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");';

//キャプチャALTタグ
$altCap01 = 'さまざまな調味料の計量に欠かせないのが、計量スプーン。<strong>小さじ1は5ml（㏄）</strong>で、<strong>大さじ1はその3倍にあたる15ml（㏄）</strong>です。';
$altCap02 = '「<b>大さじ（小さじ）1</b>」の場合は、あふれるギリギリの状態まで入れます。<br>表面張力で液体が盛り上がるくらいまでが正しい分量です。';
$altCap03 = '「<b>大さじ（小さじ）2分の1</b>」の場合は、底が丸いものなら見た目で七分目、底が平らなものは見た目で半分が目安となります。';
$altCap04 = '「<b>大さじ（小さじ）1</b>」の場合は、スプーンの柄などで盛り上がった分をすりきり、表面を平らにします。';
$altCap05 = '「<b>大さじ（小さじ）2分の1</b>」の場合は、大さじ（小さじ）1にしてから、スプーンの柄などで半分かき出します。';
$altCap06 = '「<b>少々</b>」の場合は、親指と人差し指の2本でつまみます。';
$altCap07 = '「<b>ひとつまみ</b>」の場合は、親指、人差し指、中指の3本でつまみます。';
$altCap08 = '「<b>ひとつかみ</b>」の場合は、片手で軽くつかみます。（ひとにぎり）';
$altCap09 = '<ol class="u-list__ol mt0 mt2"><li>計量カップは手で持ったりせず、<strong>平らな場所</strong>に置く</li><li>中身を入れたら、<strong>真横から</strong>目盛りを確認する</li></ol>※上から見ていると、正しい量が確認できないので要注意！';
$altCap10 = 'アナログタイプ';
$altCap11 = 'デジタルタイプ';

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
		<div class="mt3 mt2_sp mb5 mb3_sp">
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
        $recipeIcon ='masaki_02';
        $speech ='マユ先生、僕いつも料理をするときの味付けは<br class="u-only__pc">自分の目分量でやっちゃってて<br>この間、家で作った野菜炒めがしょっぱかったんですよ～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='目分量だと、塩分や糖分を取り過ぎることがあるので<br class="u-only__pc">コウちゃんにもよくないですね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='kou_02';
        $speech ='ぱぱのおやさい、しょっぱかったの！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='masaki_02';
        $speech ='いつも通りに調味料入れたんですけどね…<br>やっぱりちゃんと計量した方がいいですよね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='美味しく、かつ調味料の使い過ぎを防ぐためにも<br class="u-only__pc">正しい計量の仕方を知っておきましょう！';
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
          <h3 class="recipe__ttl_l mb0">計量グッズの種類って？</h3>
          <p class="mb3">美味しくヘルシーな料理作りは、正しい計量から。主な計量グッズと、その使い方についてご紹介します。</p>
          <h4 class="recipe__ttl">計量スプーン</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-01@2x.jpg"
                 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap01); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-design__check check mb3">
              <div class="check__row">
                <div class="check__ttl">
                  <h5 class="check__ex center">
                    <img
                    data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png"
                    data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png"
                    alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
                  </h5>
                </div>
                <h6>中さじの分量</h6>
                <p>「中さじ」という名称で市販されている計量スプーンは、10ml（cc）のもの、7.5ml（cc）のものなど、メーカーによって容量が異なることがあります。<br>ただし、基本的に料理本で使われている単位は、大さじ・小さじのみが一般的です。</p>
                <p>3本セットで販売されている場合も、「大さじ・中さじ・小さじ」ではなく、基本の大さじ・小さじに、小さじ2分の1にあたる2.5ml（cc）の「茶さじ（小小さじ）」が加わったものが多いようです。</p>
              </div>
            </div>
          </section>
          <h4 class="recipe__ttl" id="keiryocup">計量カップ</h4>
          <p>主に液体を計量するときは、ガラスやステンレスのカップに目盛りの付いた計量カップを使います。</p>
          <p class="mb2">1カップは200mlが基本ですが、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic20.php" class="recipe-design__link">お米</a>を計量するカップは180ml（1合）になっているので注意しましょう。</p>
          <h4 class="recipe__ttl">量り</h4>
          <p class="mb2">調味料や食材の重さを計量するときには、量り（クッキングスケール）が活躍します。<br>電池不要でレトロなデザインのアナログタイプと、少量でも正確に計量できるデジタルタイプがあります。</p>
          <h5 class="recipe__ttl_s"><?php echo ($altCap10); ?></h5>
          <figure class="mb3">
            <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-10@2x.jpg"
              alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
          </figure>
          <h5 class="recipe__ttl_s"><?php echo ($altCap11); ?></h5>
          <figure class="mb3">
            <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-11@2x.jpg"
              alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
          </figure>
          <p class="mb3">一般的には最大計量1～2㎏がおすすめですが、<a href="<?php echo($base_url) ?>/magazine/article/recipe-collect04.php" class="recipe-design__link">お菓子</a>やパン作りをする方は0.1g単位で計れる「微量計」がおすすめです。</p>
          <h3 class="recipe__ttl_l mb0">液体を正しく計量する方法とは？</h3>
          <p class="mb3">醤油やみりんなど、液体の調味料を計量スプーンで計る方法をおさらいしましょう。</p>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-02@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
            </dd>
          </dl>
          <section>
            <div class="recipe-design__check check mb3">
              <div class="check__row">
                <div class="check__ttl">
                  <h3 class="check__ex center">
                    <img
                    data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png"
                    data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png"
                    alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
                  </h3>
                </div>
                <h4>液体をグラムに変換すると？</h4>
                <p class="mb2">料理本に書かれている<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic22.php" class="recipe-design__link">調味料</a>の分量は、大さじ・小さじではなくグラムで指示されていることもあります。</p>
                <p>そのようなときは、次の換算表を参考にして計量しましょう。計量スプーン1杯分が何グラムになるかが分かります。（それぞれ大さじ1、小さじ1の順に記載しています）</p>
                <ul class="u-list__ul_dot">
                  <li>醤油…18g、6g</li>
                  <li>ソース…17g、6g</li>
                  <li>水…15g、5g</li>
                  <li>酒…15g、5g</li>
                  <li>酢…15g、5g</li>
                  <li>油…12g、4g</li>
                </ul>
                <dl class="recipe-design__step mb0">
                  <dt class="recipe-design__step_img">
                    <figure>
                      <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-03@2x.jpg"
                      alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
                    </figure>
                  </dt>
                  <dd class="recipe-design__step_txt">
                    <?php echo ($altCap03); ?>
                  </dd>
                </dl>
              </div>
            </div>
          </section>
          <h3 class="recipe__ttl_l mb0">粉・顆粒・ペーストを正しく計量する方法とは？</h3>
          <p class="mb3">砂糖や塩、味噌やマヨネーズなど、液体以外の調味料の場合は、液体とは違った方法で計量します。</p>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-04@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-05@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-design__check check mb3" id="kona">
              <div class="check__row">
                <div class="check__ttl">
                  <h3 class="check__ex center">
                    <img
                    data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png"
                    data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png"
                    alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
                  </h3>
                </div>
                <h4>粉・顆粒・ペーストをグラムに変換すると？</h4>
                <p class="mb2">液体以外の調味料をグラムで計量したいけれど、量りがない…というときは、次の換算表を参考にして計量スプーンで量りましょう。（それぞれ大さじ1、小さじ1の順に記載しています）</p>
                <h6 class="recipe__ttl_s">固形、液状</h6>
                <ul class="u-list__ul_dot">
                  <li>味噌…18g、6g</li>
                  <li>ケチャップ…15g、5g</li>
                  <li>マヨネーズ…12g、4g</li>
                  <li>バター…12g、4g</li>
                </ul>
                <h6 class="recipe__ttl_s">粉末状</h6>
                <ul class="u-list__ul_dot">
                  <li>精製塩…18g、6g</li>
                  <li>粗塩…15g、5g</li>
                  <li>ベーキングパウダー…12g、4g</li>
                  <li>上白糖…9g、3g</li>
                  <li>強力粉…9g、3g</li>
                  <li>薄力粉…9g、3g</li>
                  <li>片栗粉…9g、3g</li>
                  <li><a href="<?php echo($base_url) ?>/magazine/article/recipe04.php" class="recipe-design__link">カレー粉</a>…6g、2g</li>
                  <li>パン粉…3g、1g</li>
                </ul>
              </div>
            </div>
          </section>
          <h3 class="recipe__ttl_l mb0">手量りで正しく計量する方法とは？</h3>
          <p class="mb3">料理本によく出てくる「少々」「ひとつまみ」などという指示も、ちゃんと量が決まっています。調味料を手で計量するときの、正しいやり方を覚えましょう。</p>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-06@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0" id="hitotsumami">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-07@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-08@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <h3 class="recipe__ttl_l mb0">計量カップで正しく計量するポイント</h3>
          <p class="mb3">計量カップの正しい使い方には、2つのポイントがあります。</p>
          <div class="flex between">
            <figure class="w50 center_sp">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/12/tech12-09@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <div class="w50"><?php echo ($altCap09); ?></div>
          </div>
          <p>この2点に気を付けることで、正しい数値を量ることができますよ。</p>
        </div>
      </div>
      <?php
        $recipeIcon ='masaki_02';
        $speech ='調味料の計量って、面倒くさくてやらなかったけど<br class="u-only__pc">やっぱりちゃんとしないとダメですね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='ちょっとした一手間で本格的な味付けにできるんですよ！<br>調味料が「1:1:2」など、比率で指示されているときも<br class="u-only__pc">計量グッズがあれば正確だし簡単ですね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='masaki_01';
        $speech ='もうコウちゃんに、しょっぱいっていわせないぞ～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='kou_03';
        $speech ='ぱぱがんばれぇ～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<section class="mb3">
				<h5>■関連記事</h5>
					<ul>
						<li class="recipe-photolist__item recipe-photolist__reciperecommend">
						<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic145.php" class="recipe-photolist__row">
							<img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech145.jpg" alt="ドレッシングの手作りレシピ。和風も洋風もおうちで簡単！" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
						  <p class="reciperecommend-ttl">●ドレッシングの手作りレシピ。和風も洋風もおうちで簡単！</p>
						</a>
            </li>
					  <li class="recipe-photolist__item recipe-photolist__reciperecommend">
						<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic136.php" class="recipe-photolist__row">
							<img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech136.jpg" alt="かつおのたたきの薬味だれレシピ！簡単で美味しいたれの作り方" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
						  <p class="reciperecommend-ttl">●かつおのたたきの薬味だれレシピ！簡単で美味しいたれの作り方</p>
						</a>
            </li>
					  <li class="recipe-photolist__item recipe-photolist__reciperecommend">
						<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic22.php" class="recipe-photolist__row">
							<img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech22.jpg" alt="味付けの基本「調味料のさしすせそ」" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
						  <p class="reciperecommend-ttl">●味付けの基本「調味料のさしすせそ」</p>
						</a>
            </li>
          </ul>
			</section>

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
