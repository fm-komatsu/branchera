<?php
//base
include( "../../function.php" );
$content = get_id_data( '15006' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「かつお昆布だしの取り方」を動画で解説。かつおだしと昆布だし、両方のうまみを掛け合わせたかつお昆布だしは、うどんやお吸い物に最適です。煮出しと水出し、2種類の取り方や、かつおだしだけを取る方法、簡単アレンジレシピをご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'UlFsaNEVRhE';

//導入文
$introTxt = '第6回は、「かつお昆布だしの取り方」です。香りとうまみを楽しめ、煮物など和食全般に使うことができます。';

//キャプチャALTタグ
$altCap01 = '<p class="mb2"><b>分量例</b><br>昆布……20g<br>かつお削り節……20g<br>水……2リットル</p><p>昆布とかつお節の量の割合は、水の量に対してそれぞれ1％が目安です。</p>';
$altCap02 = '分量の水に昆布を<strong>30分以上</strong>浸けておきます。';
$altCap03 = '浸けた後、弱めの中火にかけ、沸騰直前に昆布を引き上げます。昆布の周りに小さな泡が付いてくるタイミングが、引き上げの目安になります。';
$altCap04 = '昆布を引き上げたら、一度沸騰させて火を止めてください。一呼吸おいて、かつお節を入れます。そのまま２分ほど待ってから、味見をしてみましょう。<br>うまみが十分に出ていなければ、さらに1～2分おきます。';
$altCap05 = 'ボウルにざるを重ねます。その上にキッチンペーパーをのせて、だし汁を静かに注いでこしていきます。ペーパーは絞らず、自然に水気を切るようにしましょう。<br>冷蔵庫で、<strong>2～3日間保存</strong>することができます。';
$altCap06 = '赤ちゃんの離乳食は、調味料を使わず、だしで風味付けしながら調理するのが基本。<br>かつお昆布だしは魚が入っているので、離乳食中期（生後６ヵ月以降）から使用しましょう。';
$altCap07 = 'かつお昆布だしの香りとうまみをストレートに味わうなら、薄口醤油を使った、澄んだつゆの関西風かけうどんが最適。あえてトッピングは控えめにして、だし本来の味を楽しみましょう。';
$altCap08 = '美味しいかつお昆布だしがあれば、しっかり味を染み込ませたい肉じゃがも、格別の味わいになります。煮物の場合は、うまみがはっきりと出る二番だしがおすすめです。';
$altCap09 = 'かつお昆布だしの香りとうまみが染み込んだ炊き込みご飯は、温かい幸せの味。一番だしを取った後のかつお節と昆布を刻んで、そのまま一緒に炊き込んでもOK。';
$altCap10 = 'お料理上級者のイメージがある<a href="'.$base_url.'/magazine/article/recipe-technic42.php" class="recipe-design__link">すまし汁</a>ですが、きちんとだしが取れていれば、美味しく作れます。一番だしの上品な風味を楽しみましょう。';
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
        $recipeIcon ='mie_01';
        $speech ='<a href="'.$base_url.'/magazine/article/recipe-technic05.php" class="recipe-design__link">前回「昆布だし」</a>の取り方を教わってから<br class="u-only__pc">他のだしの取り方も学びたいな～と思いまして…<br>今回もだしの取り方を教わってもいいですか？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='料理の基本に興味を持つことは、とても大事なことですね♪<br>それでは、前回の昆布だしにかつお節の風味をプラスした<br>「かつお昆布だし」の取り方をレッスンしていきましょうか';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_02';
        $speech ='かつお節…あの“こす”やつですよね<br>う～～ん、難易度高そう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='わかりますよ、ミエさん！<br>ちょっとしたひと手間なのですが、なんだか難しそうなんですよね<br>一度基本の方法を覚えれば、簡単に作ることができるので、<br class="u-only__pc">ぜひ、この機会にレッスンしていきましょう';
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
          <h3 class="recipe__ttl_l mb0">和食に合う！かつお昆布だしの取り方</h3>
          <p class="mb2">かつお昆布だしは、かつおの繊細な香りと昆布のうまみを組み合わせた、応用範囲の広いだし。上手な取り方を覚えれば、味噌汁や煮物が、お店で出すような本格的な味わいになりますよ。</p>
          <h4 class="recipe__ttl">煮出しで取る方法</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-01@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-02@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?><br>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-03@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-04@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-05@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
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
              <h3>かつおだしを取る場合</h3>
              <p>かつお節だけを使った、「かつおだし」を取る場合は、上記の「かつお昆布だし」の昆布だしを取る手順を省けばOKです。</p>
              <ol class="u-list__ol_circle-num">
                <li>一度、沸騰させたお湯を一呼吸おいてから、かつお節を入れます。</li>
                <li>2分ほどおいてから、味見をしてみます。</li>
                <li>うまみが十分に出ていなければ、さらに1～2分おきます。</li>
              </ol>
              <p>かつおの香りがダイレクトに感じられる、濁りのないかつおだしは、お吸い物、そばやうどんのつゆなどにおすすめです。冷蔵庫で、2～3日間保存することができます。</p>
            </div>
          </div>
          <div class="mb3">
            <h4 class="recipe__ttl">水出しで取る方法</h4>
            <p>昆布を一晩水に浸けておく、「水出し」でかつお昆布だしを取る方法もあります。<br>まず、2リットルの水に20gの昆布を入れて、一晩（10時間程度）浸けてください。その水と昆布を弱めの中火にかけて、沸騰直前で昆布を引き揚げます。<br>その後のかつお節を入れる手順からは、煮出しで取る方法と同じです。</p>
            <p>水出しで取ったかつお昆布だしは、あっさりとした仕上がりで、薄味のお吸い物に最適。特にお吸い物に使う場合は、かつお節の雑味が出ないように早めにこすのがポイントです。</p>
          </div>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">一番だし・二番だしのとり方</h3>
              <p class="mb2">「一番だし」とは、かつお節と昆布で<strong>最初に煮出しただし汁</strong>のこと。香り高く、雑味のないクリアな仕上がりで、だしそのものを味わいたい<a href="<?php echo($base_url)?>/magazine/article/recipe-technic42.php" class="recipe-design__link">すまし汁</a>などに適しています。</p>
              <p>「二番だし」は、一番だしを取った<strong>だしガラを使って煮出しただし汁</strong>のことです。香りは一番だしに劣りますが、だし汁のうまみが強く引き出されるので、味の濃い煮物や<a href="<?php echo($base_url)?>/magazine/article/recipe-technic39.php" class="recipe-design__link">味噌汁</a>によく合います。材料を再利用できるので経済的！</p>
              <p>二番だしをとるときは、一番だしで使った昆布とかつお節を、一番だしの半量の水に入れて強火にかけます。沸騰したら弱火で5分煮出し、追いがつお（新しいかつお節）を10g入れてさらに2分煮出します。<br>火を止めてこしたらできあがりです。</p>
            </section>
          </div>
          <h3 class="recipe__ttl_l mb0">かつお昆布だしを使ったおすすめ料理</h3>
          <p>上品な香りで癖のないかつお昆布だしは、汁物、煮物、ご飯物などさまざまな和食に使えます。離乳食など、なるべく塩分を控えたい料理にも大活躍！</p>
          <h4 class="recipe__ttl">離乳食</h4>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__left">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-06@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap06)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
              <?php echo ($altCap06); ?>
            </p>
          </div>
          <h4 class="recipe__ttl">うどん</h4>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__right">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-07@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap07)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
              <?php echo ($altCap07); ?>
            </p>
          </div>
          <h4 class="recipe__ttl">肉じゃが</h4>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__left">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-08@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap08)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
              <?php echo ($altCap08); ?>
            </p>
          </div>
          <h4 class="recipe__ttl">炊き込みご飯</h4>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__right">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-09@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap09)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
              <?php echo ($altCap09); ?>
            </p>
          </div>
          <h4 class="recipe__ttl">すまし汁</h4>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__left">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/06/tech06-10@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap10)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
              <?php echo ($altCap10); ?>
            </p>
          </div>
          <h3 class="recipe__ttl_l mb0">だしを取る時間がない！代用できる調味料は？</h3>
          <p>だし汁がないと作れないメニューは、意外に多いもの。だしを取っている時間がない、かつお節も昆布も切らしてしまった！…というときは、便利な市販調味料で代用することができます。</p>
          <h4 class="recipe__ttl">顆粒だし</h4>
          <p>かつおだしの風味が出せる、顆粒状の調味料です。うまみを出したいときに、サッと振り入れるだけでOK！和風だしが必要な料理全般のほか、炒め物を和風に仕上げたいときにもおすすめです。</p>
          <p>代用する料理の例：みそ汁、鍋物、白和えなど</p>
          <h4 class="recipe__ttl">だしパック</h4>
          <p>だしの原料がパックに詰められていて、そのままパックごとお湯に入れれば、だしを取ることができます。自分で計量をする必要がないため、簡単かつ時短になります。</p>
          <p class="mb3">代用する料理の例：鍋物、お吸い物など</p>
          <p>ちなみに、顆粒だしもパックも、塩分が入っているものが多いので、味付けが濃くなりすぎないよう注意してください。</p>
        </div>
      </div>
      <?php
        $recipeIcon ='mie_01';
        $speech ='昆布だしとまた違った香りで、すごくうまみを感じられますね<br>
        味見のときはどのように判断したらいいのですか？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='だしの味の濃さは、好みや作る料理によっても変わってきます<br>すまし汁などは、ほのかにだしの風味が感じられる程度に煮出して、上品な味わいに仕上げます<br class="u-only__pc">煮物などは、しっかりうまみを引き出して、濃いめのだしを取るといいですよ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='なるほど、お料理に合わせて調整すればいいのですね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='かつお節の風味を存分に生かしたい場合は<br class="u-only__pc">昆布の手順を省いた「かつおだし」を取ってもいいですよ<br>ここまで来たら、次は「<a href="'.$base_url.'/magazine/article/recipe-technic07.php" class="recipe-design__link">煮干だし</a>」ですね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='基本の“だし”、3連続！<br>がんばりまーす！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<div class="recipe__assist">
				<div class="recipe-assist">
					<div class="recipe-assist__row">
						<h3 class="recipe-assist__ttl">用語解説</h3>
						<dl class="recipe-assist__term">
							<dt>こすとは</dt>
							<dd>液体のダマや不要物を取り除くために、網や布などに通すこと。だし汁をこす場合は、ざるに清潔なふきんやキッチンぺーパーを敷いてこす。じゃがいもや栗などの食材をなめらかに仕上げたいときにも行なう。</dd>
						</dl>
						<dl class="recipe-assist__term">
							<dt>追いがつおとは</dt>
							<dd>かつおだしの風味を増すために、後からかつお節を足すこと。<br>二番だしの香りとうまみを補うほか、煮物やめんつゆを作るときにも使われる。</dd>
						</dl>
					</div>
				</div>
			</div>
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
