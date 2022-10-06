<?php
//base
include( "../../function.php" );
$content = get_id_data( '15004' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「アクの取り方」を動画で解説。すき焼きやしゃぶしゃぶなど、ゆでる料理のときに肉や野菜から出てくる”アク”。臭みやにごりにつながってしまうアクを、きれいに素早く取る方法をご紹介します。また、メニューや野菜別のアク抜き手順も解説します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];
$thumTxt = $content[ 'description' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '106';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
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
					<span class="recipe-header__ttl">アク取りは必要？基本のアク取り方法とは</span>
				</h2>
			</div>
			<div class="recipe__intro recipe-intro">
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第4回は、「アクの取り方」です。<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic116.php" class="recipe-design__link">すき焼き</a>やしゃぶしゃぶ、煮物など、ゆでる調理のときに出てくる“アク”をスムーズに取る方法をご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>この間、会社の飲み会でお鍋を食べたんですけど<br class="u-only__pc">後輩がせっせとアクを取ってまして…<br>今さらですが、アクって取らないといけないものなんでしょうか？</p>
				</div>
			</div>
      <div class="recipe-icn mayu_01">
				<div class="inner">
					<p>マサキさんは、<a href="<?php echo($base_url) ?>/magazine/article/recipe18.php" class="recipe-design__link">カレー</a>をよく作るんですよね？<br>それでしたら、アク取りは大事な工程のひとつです！<br>今日はアクを取る意味と、簡単に取る方法についてご紹介しますね</p>
				</div>
			</div>
      <?php include ($inc_path."/lib/inc/page/_magazine/__comic02_pr.php"); //PR記事 ?>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/z2HcZQgsFtI?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
        <h3 class="recipe__ttl_l mb0">アクってそもそも何？アク取りをする意味とは</h3>
        <div class="mb3">
          <p>煮物やお鍋には付きものの「アク」。このアクとは一体何なのか、なぜ取らなければいけないのか、改めて勉強しましょう。</p>
          <p>アクとは、<strong>魚・肉の“臭み成分”や、野菜の“渋み”のこと</strong>です。<br>アクをそのままにしておくと、次のようなことが起こってしまいます。</p>
          <ul class="u-list__ul_dot">
            <li>煮汁がにごって、料理の見栄えが損なわれる</li>
            <li>臭みが出て、味が損なわれる</li>
            <li>食材によっては、結石の原因になるシュウ酸など、有害な成分が口に入る</li>
          </ul>
          <p>アク取りは、料理を美味しく仕上げるためにも、健康のためにも欠かせない大事な工程なのです。</p>
        </div>
				<div class="recipe-design__howto mb0">
					<h3 class="recipe__ttl_l mb0">基本のアク取り方法をご紹介！</h3>
          <p>臭みやにごりの原因になるアクを、きれいに素早く取る方法についてご紹介します。</p>
					<dl class="recipe-design__step">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/04/tech04-01.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/04/tech04-01.png"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">アクを取る前に、水を張ったボウルと、お玉やすくい網を用意します。</dd>
					</dl>
					<dl class="recipe-design__step">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/04/tech04-02.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/04/tech04-02.png"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">肉や魚、野菜を煮ているときなどに、鍋のふちに濁った泡が出てきます。この泡のようなものが“アク”です。</dd>
					</dl>
					<dl class="recipe-design__step">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/04/tech04-03.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/04/tech04-03.png"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">アクが出てきたら、火を一度<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>にします。</dd>
					</dl>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/04/tech04-04.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/04/tech04-04.png"
								 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">強火にすると、アクが集まってくるので、すくい網などでアクをすくい取ります。すくい取ったアクは用意しておいた水で洗い落とし、網をきれいな状態にしてから次のアクをすくいましょう。</dd>
					</dl>
				</div>
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
            <h4>アクを取るタイミング</h4>
            <p>調理の最初から最後まで、ずっとアク取りの作業をする必要はありません。<strong>料理別の効果的なアク取りのタイミング</strong>は、次の通りです。</p>
            <div>
              <h4 class="u-ttl__s mb0">●<a href="<?php echo($base_url) ?>/magazine/article/recipe18.php" class="recipe-design__link">カレー</a></h4>
              <p class="mb2">肉・野菜を炒め、水を入れて沸騰させたところで1回取る</p>
            </div>
            <div>
              <h4 class="u-ttl__s mb0">●煮物</h4>
              <p class="mb2">煮込んでいる途中で蓋を取り、1～2回アクを取る</p>
            </div>
            <div>
              <h4 class="u-ttl__s mb0">●<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic116.php" class="recipe-design__link">すき焼き</a></h4>
              <p class="mb2">煮込む前に、しらたきを下ゆでするか熱湯をかけてアク抜きする。煮込みはじめたらアク取りは不要</p>
            </div>
            <div>
              <h4 class="u-ttl__s mb0">●鍋物</h4>
              <p class="mb2">アクが出やすい<a href="<?php echo($base_url) ?>/magazine/article/recipe08.php" class="recipe-design__link">しゃぶしゃぶ</a>、繊細なスープの味を楽しむ水炊きなどは、こまめなアク取りをする。味の濃いキムチ鍋などは、具材と<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic05.php" class="recipe-design__link">だし</a>が最初に煮立ったときに出てきたアクをとれば十分</p>
            </div>
          </div>
        </div>
        <div class="recipe-design__plus1 plus1 mb3">
          <div class="plus1__row">
            <h4 class="plus1__ttl">アク取りのグッズの種類</h4>
            <p>すくい網やお玉以外にも、アク取りのグッズにはさまざまな種類があります。</p>

            <div>
              <ul class="u-list__ul_dot">
                <li>ブラシ…煮汁の表面を軽くなでるだけで、食材を崩さずにアクを取ることができます</li>
                <li>落し蓋…アク取りに適した凹凸のあるシリコン製と、使い捨てのシートタイプがあります</li>
                <li><span><a href="<?php echo($base_url) ?>/magazine/article/recipe-technic08.php" class="recipe-design__link">卵白</a>…澄んだコンソメスープを作るプロの技。ブイヨン（西洋料理のだし）に野菜やミンチを入れて煮込むとき、卵白も加えるとアクや脂肪を吸着してくれる効果があります</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div>
          <h3 class="recipe__ttl_l">野菜のアク取りを簡単にする方法とは？</h3>
          <p>調理中に野菜のアクが出るのを抑えるには、<a href="<?php echo($base_url) ?>/magazine/article/recipe-collect03.php" class="recipe-design__link">下ごしらえ</a>として<strong>「アク抜き」を行なう</strong>こと。野菜本来の風味や栄養を損なわず、上手にアク抜きする方法を覚えましょう。</p>
          <h4 class="recipe__ttl">苦み・渋みや有害な成分を取り除く</h4>
          <p>ほとんどの植物は、外敵から身を守るために渋みや苦みといったアクを含んでいます。それが野菜本来の自然な風味や栄養になっていることもありますが、場合によっては料理の味わいや見栄えを損ねたり、有害な成分が溶け出し、健康に影響してしまったりすることも。<br>アク抜きの工程には、このような問題を取り除く効果があるのです。</p>
          <h4 class="recipe__ttl">アク抜き必須！アクの多い野菜</h4>
          <p><a href="<?php echo($base_url) ?>/magazine/article/recipe-technic111.php" class="recipe-design__link">白菜</a>や小松菜などアクの少ない野菜がある一方、次のようなアクが多い野菜は、アク抜きを行なう必要があります。</p>
          <ul class="u-list__ul_dot">
            <li><span>根菜…<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic108.php" class="recipe-design__link">さつまいも</a>、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic45.php" class="recipe-design__link">ごぼう</a>、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic109.php" class="recipe-design__link">れんこん</a>、いもから作られる<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic78.php" class="recipe-design__link">こんにゃく</a>など</span></li>
            <li>葉物…ほうれん草など</li>
            <li>そのほか…なす、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic77.php" class="recipe-design__link">たけのこ</a>、山菜など</li>
          </ul>
          <h4 class="recipe__ttl">これで簡単！アク抜きの手順</h4>
          <p class="mb3">アク抜きは、野菜それぞれに合った方法で行ないます。</p>
          <div class="mb2">
            <h3 class="u-ttl__s mb0">●真水（水道水などの塩分が混じっていない水）にさらす</h3>
            <p>なす（煮物や汁物）やさつまいもなどは、皮をむいて10分ほど水にさらします。なすの色をきれいに仕上げたい場合は、0.5～1％ほどの薄い塩水にさらしましょう。濃いと塩味が付いてしまうので要注意です。</p>
          </div>
          <div class="mb2">
            <h3 class="u-ttl__s mb0">●酢水にさらす</h3>
            <p>変色しやすいごぼう、れんこんなどは、皮をむいて10分ほど酢水にさらします</p>
          </div>
          <div class="mb2">
            <h3 class="u-ttl__s mb0">●真水でゆでる</h3>
            <p>こんにゃくのほか、ほうれん草はゆでたあと冷水にさらします</p>
          </div>
          <div class="mb2">
            <h3 class="u-ttl__s mb0">●特別なゆで方</h3>
            <p>たけのこは、米ぬかを入れてゆでます。山菜のわらびやぜんまいは、重曹を入れてゆでます</p>
          </div>
          <div class="mb2">
            <h3 class="u-ttl__s mb0">●塩を振る</h3>
            <p>なすを炒め物や<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic09.php" class="recipe-design__link">揚げ物</a>に使う場合は、切り口に塩を振るだけでOK。水分が出てきたらペーパータオルで拭き取ります</p>
          </div>
        </div>
      </div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>野菜のアク抜きの場合、必要以上に何分も水にさらしたりしていると<br class="u-only__pc">栄養素が溶け出したり風味が落ちたりする原因になってしまうので、<br class="u-only__pc">アク抜きのやり過ぎには注意してくださいね</p>
				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>鍋もののアク抜きも、こまめに行なうものと<br class="u-only__pc">一度とれば十分なものがあるんですね<br>とても勉強になりました！今度後輩にも教えようっと！</p>
				</div>
			</div>
			<section class="mb3">
				<h5>■関連記事</h5>
				<div>
					<ul>
						<li class="recipe-photolist__item recipe-photolist__reciperecommend">
							<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic116.php" class="recipe-photolist__row">
								<img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech116.jpg" alt="基本のすき焼きの作り方。割り下のレシピもご紹介！" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
							  <p class="reciperecommend-ttl">●基本のすき焼きの作り方。割り下のレシピもご紹介！</p>
							</a>
						</li>
						<li class="recipe-photolist__item recipe-photolist__reciperecommend">
							<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic152.php" class="recipe-photolist__row">
								<img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech152.jpg" alt="角煮のレシピ。美味しくやわらかく仕上げるコツをご紹介！" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
							  <p class="reciperecommend-ttl">●角煮のレシピ。美味しくやわらかく仕上げるコツをご紹介！</p>
							</a>
						</li>
						<li class="recipe-photolist__item recipe-photolist__reciperecommend">
							<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic77.php" class="recipe-photolist__row">
								<img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech77.jpg" alt="たけのこのアク抜きは意外と簡単！基本の下ごしらえ方法" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
							  <p class="reciperecommend-ttl">●たけのこのアク抜きは意外と簡単！基本の下ごしらえ方法</p>
							</a>
						</li>
					</ul>
				</div>
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
