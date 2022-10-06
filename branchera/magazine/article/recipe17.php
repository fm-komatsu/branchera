<?php
//base
include( "../../function.php" );
$content = get_id_data( '14017' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

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
		$panAry[] = array( "/magazine/index_comic02.php", "うちのご飯は世界イチ" );
		include( $inc_path . "/lib/inc/pan.php" );
		include($inc_path . "/lib/inc/page/_gift/__main-header.php");
		include($inc_path . "/lib/inc/page/_magazine/__recipe-main-v.php" );
		?>
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num">　</span>
          <span class="recipe-header__ttl">さば缶とじゃがいものトマト煮込み</span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">料理教室に通ってから、健康にも気を使うようになった私、ミエ。この間、テレビで栄養満点で時短にもなるさば缶の特集をやっていたから、さっそく買ってきたんだけど…。</p>
      </div>
      <hr class="recipe__line">
      <div class="recipe__row">
        <div class="recipe-icn mie_01">
          <div class="inner">
            <p>この前、テレビでさば缶が特集されているのを見たんだ～<br>健康にいいし、時短にもなるから<br class="u-only__pc">たくさん買ってきちゃった♪</p>
          </div>
        </div>
        <div class="recipe-icn masaki_01">
          <div class="inner">
            <p>缶詰は買い置きできるからいいよね！ </p>
          </div>
        </div>

        <div class="recipe-icn mie_01">
          <div class="inner">
            <p>さばはダイエットでも注目されている食材らしいから、<br class="u-only__pc">パパのぷよぷよなお腹も、少しはへこんでくれるかな～</p>
          </div>
        </div>
        <div class="recipe-icn kou_01">
          <div class="inner">
            <p>ぷよぷよおなか～</p>
          </div>
        </div>
        <div class="recipe-icn masaki_02">
          <div class="inner">
            <p>そ、そうだね…<br>さば缶を使った食事をとらないと！</p>
          </div>
        </div>
        <div class="recipe-icn mie_02">
          <div class="inner">
            <p>さば缶、たくさん買ったはいいんだけど、<br class="u-only__pc">そのままでしか食べたことがないからな…<br>どんな料理が作れるんだろう？</p>
          </div>
        </div>
        <div class="recipe-icn masaki_01">
          <div class="inner">
            <p>確かに、せっかくなら美味しくアレンジして食べたいよね～<br>じゃあ、マユ先生にとっておきのレシピを教えてもらいに行こう！</p>
          </div>
        </div>
        <div class="recipe__movie recipe-movie">
          <h3 class="recipe-movie__ttl">
            <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/k_ttl@2x.png"
              alt="マユ先生のレシピ" style="max-width:159px" class="u-img__max">
          </h3>
          <div class="recipe-movie__overview">
            <figure class="recipe-movie__overview_icn">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/icn-mayu-recipe.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/icn-mayu-recipe@2x.png"
                alt="マユ先生" style="width:114px" class="u-img__max">
            </figure>
            <p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>第17回は、さば缶を使った「さば缶とジャガイモのトマト煮込み」。さばとトマトは、実は相性バツグンの組み合わせ。ぜひ、作ってみてくださいね！</p>
          </div>
          <div class="recipe-movie__video">
            <div class="recipe-movie__video_base">
              <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/ciwVBWCCVcA?rel=0" frameborder="0"
                gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="recipe__design recipe-design mb5">
          <h3 class="recipe__ttl_l">さば缶とじゃがいものトマト煮込みのレシピ</h3>

          <div class="recipe-design__material">
            <h3 class="recipe__ttl">材料（4人分）</h3>
            <dl class="recipe-design__materials">
              <dt>さば水煮缶（190g）</dt>
              <dd>2缶</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>たまねぎ</dt>
              <dd>1個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>じゃがいも</dt>
              <dd>小3個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>にんにく</dt>
              <dd>1かけ分</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>白ワイン</dt>
              <dd>大さじ1</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>ホールトマト水煮缶（400g）</dt>
              <dd>1缶</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>ブラックオリーブ（種ぬき）</dt>
              <dd>12個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>ローリエ</dt>
              <dd>1枚</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>オリーブオイル</dt>
              <dd>大さじ1</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>塩</dt>
              <dd>少々</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>粗びき黒こしょう</dt>
              <dd>少々</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>パセリ（みじん切り）</dt>
              <dd>あれば適量</dd>
            </dl>
          </div>
          <div class="recipe-design__howto">
            <h3 class="recipe__ttl">手順</h3>
            <ol class="u-list__ol_more">
              <li class="recipe-design__howto-item"><span>たまねぎは<strong>8等分</strong>の<a href="<?php echo($base_url)?>/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>にします。</span></li>
              <li class="recipe-design__howto-item"><span>じゃがいもは皮をむき、芽を取り除いたら、<strong>ひとくち大</strong>に切ります。</span></li>
              <li class="recipe-design__howto-item"><span>水を入れたボウルにさらし、水気を切ります。</span></li>
              <li class="recipe-design__howto-item"><span>にんにくは芯を取り除き、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic16.php#mijingiri" class="recipe-design__link">みじん切り</a>にします。</span></li>
              <li class="recipe-design__howto-item"><span>鍋にオリーブオイル、にんにくを入れて弱火にかけ、香りが立ってきたら、中火にし、たまねぎを加えて炒めます。</span></li>
              <li class="recipe-design__howto-item"><span>さらに「3」のじゃがいもを加えて炒め、油が回ったら2缶分のさば缶を加えて混ぜます。</span></li>
              <li class="recipe-design__howto-item"><span>白ワインを加えて<strong>アルコール分が飛んだら</strong>、ホールトマトを加えて混ぜます。</span></li>
              <li class="recipe-design__howto-item"><span>ブラックオリーブ、ローリエを加えて混ぜたら、蓋をして<strong>15分ほど煮ます。</strong>※アルコールの匂いが弱まるくらいまで煮ると良いです。</span></li>
              <li class="recipe-design__howto-item"><span>じゃがいもが柔らかくなったら塩、粗びき黒こしょうで味を整えます。器に盛り、パセリを振ります。</span></li>
            </ol>
          </div>
          <div class="flex flex_around center">
            <figure class="w50 mb2">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/17/recipe17_finish01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/17/recipe17_finish01@2x.jpg"
                alt="ひなまつりのケーキ寿司 画像" style="max-width:362px" class="u-img__max">
            </figure>
            <figure class="w50 mb2">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/17/recipe17_finish02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/17/recipe17_finish02@2x.jpg"
                alt="ひなまつりのケーキ寿司 画像" style="max-width:362px" class="u-img__max">
            </figure>
          </div>
          <div class="recipe-design__plus1 plus1-recipe mb3">
            <div class="plus1-recipe__row">
              <h3 class="plus1-recipe__ttl">さば缶とじゃがいものトマト煮込みを使ったアレンジレシピ</h3>
            </div>
          </div>
          <div class="mb2">
						<div class="flex between">
							<figure class="w50 mb2">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/17/recipe17_arrange01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/17/recipe17_arrange01@2x.jpg"
                  alt="さば缶とじゃがいものトマト煮込みを使ったアレンジレシピ" style="max-width:362px" class="u-img__max">
              </figure>
              <p class="w50">＜2人分＞<br>さば缶とじゃがいものトマト煮込み2人分に、フジッリやペンネなどのショートパスタ120gを加えて絡める。（スパゲッティなら160g程度）</p>
						</div>
					</div>
          <div>
            <h3 class="recipe__ttl_l mb0">ほかにもある！さば缶×トマトの人気レシピ</h3>
            <p class="mb2">さば缶とトマトを使った、手間なし簡単の絶品レシピをお教えしましょう。</p>
          </div>
          <div class="mb2">
						<h4 class="recipe__ttl">はまさば缶とキャベツのトマト鍋</h4>
						<div class="flex between">
							<figure class="w50 mb2">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/17/recipe17_arrange02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/17/recipe17_arrange02@2x.jpg"
                  alt="さば缶とキャベツのトマト鍋" style="max-width:362px" class="u-img__max">
              </figure>
              <p class="w50">美味しいさば缶の鍋は、具材を入れて煮込むだけ。キャベツ、たまねぎ、パセリなどを食べやすい大きさに切り、さば缶とトマトの水煮缶、固形コンソメと一緒に約20分間コトコト煮ます。塩こしょうで味をととのえたらできあがり。<br>最後にとろけるチーズを全体的にのせれば、さらに美味しくいただけます。</p>
						</div>

					</div>
          <div class="mb2">
						<h4 class="recipe__ttl">さば缶とトマトの炊き込みご飯</h4>
						<div class="flex between">
							<figure class="w50 mb2">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/17/recipe17_arrange03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/17/recipe17_arrange03@2x.jpg"
                  alt="さば缶とトマトの炊き込みご飯" style="max-width:362px" class="u-img__max">
              </figure>
              <p class="w50">さば缶、トマトの水煮缶を汁ごと炊飯器に入れ、隠し味にコンソメを少々加えて炊けば、リゾット風味の炊き込みご飯に。トマトの水煮缶の代わりに、生トマトを丸ごと入れてもOK！その場合は、炊き上がったらさばとトマトをしっかりほぐしましょう。</p>
						</div>

					</div>
          <div class="mb2">
						<h4 class="recipe__ttl">さば缶トマトカレー</h4>
						<div class="flex between">
							<figure class="w50 mb2">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/17/recipe17_arrange04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/17/recipe17_arrange04@2x.jpg"
                  alt="さば缶トマトカレー" style="max-width:362px" class="u-img__max">
              </figure>
              <p class="w50">さば缶をカレーの具材として使っても美味しいです！<br>鍋でたまねぎ、じゃがいもなどを炒め、さば缶とトマト缶の汁、水を加えて煮ます。<br>沸騰したらアクを取り、15分ほど煮込んだらさばの身をほぐして入れ、ひと煮立ちさせます。<br>火を止めてカレールーを溶かし、とろみが出たらできあがり。</p>
						</div>

					</div>
          <div class="mb2">
						<h4 class="recipe__ttl">さば缶トマトサラダ</h4>
						<div class="flex between">
							<figure class="w50 mb2">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/17/recipe17_arrange05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/17/recipe17_arrange05@2x.jpg"
                  alt="さば缶トマトサラダ" style="max-width:362px" class="u-img__max">
              </figure>
              <p class="w50">さば缶とトマトはサラダとの相性もバツグン。スライスしたトマトをお皿に敷き詰め、上にさば缶を盛り付けます。和風ドレッシングをかけるだけで驚くほどの美味しさです。<br>また、さば缶を、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>トマトと<a href="<?php echo($base_url)?>/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>にしたゆで卵、じゃがいもやレタスなどとともにフレンチドレッシングであえればニース風サラダにも。おしゃれに仕上がります。</p>
						</div>

					</div>
        </div>

        <div class="recipe-icn masaki_01">
          <div class="inner">
            <p>さばがやわらかくて、美味しいですね！<br>ご飯にもよく合いそうです！</p>
          </div>
        </div>
        <div class="recipe-icn mayu_01">
          <div class="inner">
            <p>さば缶に、キムチやガリをちょい足ししたら<br class="u-only__pc">お酒のおつまみにもなりますよ！<br>栄養満点のさば缶で、たくさんアレンジしてみてくださいね</p>
          </div>
        </div>

        <hr class="recipe__line">
        <div class="recipe__intro recipe-intro mb5">
          <p class="recipe-intro__ex">手軽で、安くて、健康にもよいさば缶をこれからたくさん活用していこう！<br>今度、違った缶詰を使ったレシピも教えてもらおうかな～</p>
        </div>
        <div class="recipe__assist">
          <div class="recipe-assist">
            <div class="recipe-assist__row">
              <h3 class="recipe-assist__ttl">用語解説</h3>
              <dl class="recipe-assist__term">
                <dt>フジッリとは</dt>
                <dd>マカロニなどと同じショートパスタの種類の1つ。小さく厚めで、らせん状に渦巻いているのが特徴。</dd>
              </dl>
              <dl class="recipe-assist__term">
                <dt>ペンネとは</dt>
                <dd>ペン先や筒の形をしたショートパスタの総称。ソースが管の中にまで入るため、濃厚なソースと合わせることが多い。</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="mb0">
          <?php
				include ($inc_path."/lib/inc/page/_magazine/__recipe-footer.php");
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
