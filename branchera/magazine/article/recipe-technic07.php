<?php
//base
include( "../../function.php" );
$content = get_id_data( '15007' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「煮干だしの取り方」を動画で解説。「いりこ」とも呼ばれる、煮干を使ってだしを取る方法をご紹介します。また、だしを使った料理例や、美味しく保存する方法もご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'TqfYK_tWFzU';

//導入文
$introTxt = '第7回は、「煮干だしの取り方」です。お味噌汁には欠かせない、煮干だしの取り方をご紹介します。';


//キャプチャALTタグ
$altCap00 = '煮干とは、主にカタクチイワシを素干しにしたもので「いりこ」とも呼ばれています。一見素朴ですが、実は栄養も使い道も豊富な食材なのです。';
$altCap01 = '<b>分量例</b><br>煮干……30g<br>水……2リットル';
$altCap02 = '煮干の頭とワタを取ります。';
$altCap03 = '分量の水に、煮干を30分以上浸けておきます。';
$altCap04 = '浸けた後、弱めの中火にかけ、沸騰直前に火を弱め、アクを取りながら5分ほど煮出します。味を見てうまみが十分に出ていなければ、さらに1〜2分煮出します。';
$altCap05 = 'ボウルにざるを重ねて、上にキッチンペーパーをのせ、だし汁を注いで静かにこしていきます。冷蔵庫で3〜4日間保存できます。';
$altCap06 = '水出しで作る場合は、煮干は頭やワタを取らずに分量の水に入れ、ふた（またはラップ）をして冷蔵庫でひと晩浸けるだけで、できあがりです。';
$altCap07 = '味噌汁';
$altCap08 = '煮物';
$altCap09 = 'ラーメン';
$altCap10 = 'うどん';
$altCap11 = '';

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
        $recipeIcon ='mayu_01';
        $speech ='「<a href="'.$base_url.'/magazine/article/recipe-technic05.php" class="recipe-design__link">昆布だし</a>」と「<a href="'.$base_url.'/magazine/article/recipe-technic06.php" class="recipe-design__link">かつお昆布だし</a>」ときたら、次は「煮干だし」ですね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='だしの取り方、3連続のいよいよ最後ですね！<br>煮干だしと言えば、お味噌汁のイメージが強いですよね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='煮干だしは「いりこだし」とも言って、独特な味と香りが特徴的なんです<br>お味噌汁以外にも、うどんなどの麺類やお鍋にも向いていますよ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='煮干の香りがきいたうどん…いいですね～<br>煮干だしの取り方、教えてください！';
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
          <h3 class="recipe__ttl_l">まずはおさらい！煮干って何がすごい？</h3>
					<figure class="center">
						<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-00.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-00@2x.jpg"
							alt="マユ先生のHow To <?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap00)); ?>" style="max-width:300px" class="u-img__max center">
					</figure>
          <p class="mb3"><?php echo($altCap00); ?></p>
          <h4 class="recipe__ttl">カルシウムが豊富</h4>
          <p>特徴は何と言っても、カルシウムが豊富なこと。そのほかにも、煮干は以下のような栄養素が豊富に含まれており、健康にうれしい食品です。</p>
					<div>
						<ul class="u-list__ul_dot">
							<li>生活習慣病の予防が期待できるDHAやEPA</li>
							<li>カルシウムの吸収を助けるビタミンD</li>
							<li>貧血予防が期待できるビタミンB12</li>
							<li>脂肪の代謝を助けるアミノ酸</li>
						</ul>
					</div>
          <h4 class="recipe__ttl">豊かな風味</h4>
          <p>独特の豊かな風味は、だしを取るほか、ぬか床のうまみ付けなどにも生かされます。<br>甘辛く煮たり、酢漬けにしたりすれば、そのまま美味しく食べられる一品に。<br>塩分が気になる方は、塩分無添加の煮干を選んでくださいね。</p>
          <h3 class="recipe__ttl_l mb0">料理の味を引き立てる！煮干だしの取り方</h3>
          <p>コクとうまみの強さが魅力の煮干だし。正しい取り方を覚えれば、「風味が薄い」「臭いや癖が気になる」といった失敗も防げます。 </p>
          <h4 class="recipe__ttl">煮出しで取る方法</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-01@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-02@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-03@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-04@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-05@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">水出しで取る方法</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-06@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">昆布と組み合わせるとさらに美味しく</h3>
              <p class="mb2">独特の風味が豊かな煮干と、どんな料理にも合う昆布を組み合わせると、幅広い料理に使える合わせだしになります。</p>
              <p>煮干と昆布はそれぞれ、水の量の1％が目安です（例：1リットルに対して10g）。<br>煮出しの場合は、煮干だしと同じく水に浸けてから火にかけ、沸騰直前で昆布だけ取り出します。水出しの場合は、煮干だしと同じ作り方でOKです。</p>
            </section>
          </div>
          <h3 class="recipe__ttl_l mb0">煮干だしと相性のよい料理とは？</h3>
          <p class="mb3">代表的な味噌汁をはじめ、煮干だしと相性のよい料理をご紹介します。ぜひ作ってみてくださいね。</p>
					<h4 class="recipe__ttl"><?php echo ($altCap07); ?></h4>
					<div class="u-clearfix mb2">
						<figure class="u-float__left w50">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-07@2x.jpg"
								alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
						</figure>
						<p>風味の強い煮干だしは、吸い物よりも味が濃い<a href="<?php echo($base_url)?>/magazine/article/recipe-technic39.php" class="recipe-design__link">味噌汁</a>に合います。味噌には、魚の匂いを抑える効果も。</p>
					</div>
					<h4 class="recipe__ttl"><?php echo ($altCap08); ?></h4>
					<div class="u-clearfix mb2">
						<figure class="u-float__right w50">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-08@2x.jpg"
								alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
						</figure>
						<p>動物性のだしは野菜料理に最適。肉じゃが、芋煮など、定番の煮物メニューが風味豊かに仕上がります。</p>
					</div>
					<h4 class="recipe__ttl"><?php echo ($altCap09); ?></h4>
					<div class="u-clearfix mb2">
						<figure class="u-float__left w50">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-09@2x.jpg"
								alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
						</figure>
						<p>市販の中華麺で作るラーメンも、煮干だしの自家製スープなら本格的なレシピに。</p>
					</div>
					<h4 class="recipe__ttl"><?php echo ($altCap10); ?></h4>
					<div class="u-clearfix mb3">
						<figure class="u-float__right w50">
							<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/07/tech07-10@2x.jpg"
								alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
						</figure>
						<p>煮干だしのコクとうまみをストレートに味わえる、最もシンプルなメニューです。</p>
					</div>
          <h3 class="recipe__ttl_l mb0">煮干と煮干だしを美味しく保存する方法とは？</h3>
          <p>いつでも美味しい煮干だしを使えるようにしておけば、毎日の料理がグレードアップします。買い置きの煮干や、取った煮干だしの風味を落とさずに保存する方法をご紹介します。</p>
          <h4 class="recipe__ttl">煮干の保存方法</h4>
          <p class="mb2">湿気の多い場所は、酸化やカビの原因となります。1ヵ月以上の長期にわたって保存する場合は、傷みやすい頭とワタを取り除き、冷蔵・冷凍保存するのがおすすめです。</p>
					<p class="mb2">冷蔵の場合…乾燥材と一緒に密閉容器に入れる。保存期間の目安は約1ヵ月。<br>冷凍の場合…ファスナー付き保存袋に入れる。保存期間の目安は約3ヵ月。</p>
          <h4 class="recipe__ttl">煮干だしの保存方法</h4>
          <p class="mb2">1日で使い切れなかっただしは、よく冷まして冷蔵・冷凍で保存しましょう。まとめてとっておけば、忙しい朝の時短にも！ただし、風味が落ちやすいのでできるだけ早く使い切るのがおすすめです。</p>
					<p>冷蔵の場合…ピッチャーや保存容器に入れる。保存期間の目安は約2日。<br>冷凍の場合…製氷皿やファスナー付き保存袋に入れる。保存期間の目安は約3週間ですが、冷蔵庫の匂いを吸って風味が落ちないうちに使い切りましょう。</p>
        </div>
      </div>
      <?php
        $recipeIcon ='mie_01';
        $speech ='うわぁ～いい香り～<br>煮干の頭とワタを取るのが面倒なイメージだったんですけど<br class="u-only__pc">やってみると、あっという間ですね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='「だしを取る」って面倒なイメージが強いのですが、<br class="u-only__pc">実は作業自体は簡単なんです<br>お休みの日や、時間に余裕があるときはぜひ試してみてください';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='正しいだしの取り方を知っただけで<br class="u-only__pc">なんだか料理ができるようになった気分～<br>さっそく、今週分作ってみようかな！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='保存期間があるので<br class="u-only__pc">一度に作り過ぎないように、気を付けてくださいね～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<div class="recipe__assist">
				<div class="recipe-assist">
					<div class="recipe-assist__row">
						<h3 class="recipe-assist__ttl">用語解説</h3>
						<dl class="recipe-assist__term">
							<dt>ワタとは</dt>
							<dd>ワタとは、魚の内臓のこと。煮干だしの場合、ワタは臭み・苦みの原因になるので、きれいに取り去ってから使います。</dd>
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
