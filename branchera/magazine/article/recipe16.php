<?php
//base
include( "../../function.php" );
$content = get_id_data( '14016' );
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
          <span class="recipe-header__ttl">簡単かわいい！ひなまつりのケーキ寿司</span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">気候がだんだん暖かくなってきて、気が付けば3月。もう少しでひなまつり！今年は、ママ友とひなまつりパーティー♪わが家は男の子なので、ひなまつりは初めてなの。楽しみだな～</p>
      </div>
      <hr class="recipe__line">
      <div class="recipe__row">
        <div class="recipe-icn mie_01">
          <div class="inner">
            <p>マユ先生、マユ先生♪<br>来週ママ友と、ひなまつりパーティーをします！<br>手作りの料理を、持っていくことになっているんです</p>
          </div>
        </div>
        <div class="recipe-icn mayu_01">
          <div class="inner">
            <p>持ち寄りパーティー、楽しみですね<br>では、今日はひなまつりにピッタリなレシピにしましょう！</p>
          </div>
        </div>

        <div class="recipe-icn mie_02">
          <div class="inner">
            <p>持ち寄りパーティーって<br class="u-only__pc">皆、気合いの入ったお料理を持ってくると思うので、<br class="u-only__pc">何を持って行けばいいのか悩んでしまいます…<br>何か、いいアイデアはありますか？</p>
          </div>
        </div>
        <div class="recipe-icn mayu_01">
          <div class="inner">
            <p>パーティーでしたら、この前作った<a href="<?php echo $base_url?>/magazine/article/recipe-technic43.php" class="recipe-design__link">酢飯</a>で<br class="u-only__pc">スイーツのような見た目の「ケーキ寿司」がおすすめです<br>簡単なのに、豪華に見えるんですよ！</p>
          </div>
        </div>
        <div class="recipe-icn mie_01">
          <div class="inner">
            <p>わぁ～「ケーキ寿司」、響きが素敵です！</p>
          </div>
        </div>
        <div class="recipe-icn mayu_01">
          <div class="inner">
            <p>コウちゃんと一緒にデコレーションして<br class="u-only__pc">ケーキ寿司を華やかに彩りましょう♪</p>
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
            <p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>今回は、牛乳パックを利用して作る、ひなまつりにピッタリな「ケーキ寿司」をご紹介します。お刺身で作るバラのデコレーションが華やかで、お子さまにも喜ばれること間違いなし！ぜひ試してくださいね。</p>
          </div>
          <div class="recipe-movie__video">
            <div class="recipe-movie__video_base">
              <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/Shc0DF_Q8to?rel=0" frameborder="0"
                gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="recipe__design recipe-design mb5">
          <h3 class="recipe__ttl_l">ひなまつりのケーキ寿司の作り方</h3>
          <p>ケーキ寿司は、ケーキのように型取って食材などでデコレーションをされた押し寿司のこと。見た目のよさだけではなく、味も美味しく、小さい子どもでも作ることができるので、イベントごとにおすすめです。</p>
          <div class="recipe-design__material">
            <h3 class="recipe__ttl">材料（4人分）</h3>
            <dl class="recipe-design__materials">
              <dt>まぐろ（ねぎとろ）</dt>
              <dd>150g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>スモークサーモン</dt>
              <dd>8切れ</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>大葉</dt>
              <dd>大葉</dd>
            </dl>
            <h4 class="recipe__ttl">酢飯の材料</h3>
            <dl class="recipe-design__materials">
              <dt>炊きたてご飯</dt>
              <dd>500g（約1.5合分）</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>塩（自然塩）</dt>
              <dd>小さじ3/4</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>砂糖</dt>
              <dd>大さじ1</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>米酢</dt>
              <dd>大さじ2・1/2</dd>
            </dl>
            <h4 class="recipe__ttl">錦糸卵の材料</h3>
            <dl class="recipe-design__materials">
              <dt>卵</dt>
              <dd>2個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>酒</dt>
              <dd>大さじ1</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>砂糖</dt>
              <dd>小さじ2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>片栗粉</dt>
              <dd>小さじ1</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>塩</dt>
              <dd>ひとつまみ</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>油</dt>
              <dd>適量</dd>
            </dl>
            <h4 class="recipe__ttl">菜の花の塩ゆで</h3>
            <dl class="recipe-design__materials">
              <dt>菜の花（葉の部分）</dt>
              <dd>1束</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>塩</dt>
              <dd>適量</dd>
            </dl>
          </div>
          <div class="recipe-design__howto">
            <h3 class="recipe__ttl">手順（調理時間目安：20分時間）</h3>
            <p>※下準備として、まず、よく洗って乾かした牛乳パックの底を切り落とします。<br>次に下から高さ5cmのところで切り、筒状の型にしたものを用意します。</p>
            <ol class="u-list__ol_more">
              <li class="recipe-design__howto-item"><span>【<a href="<?php echo $base_url?>/magazine/article/recipe-technic43.php" class="recipe-design__link">酢飯</a>】を作ります。</span></li>
              <li class="recipe-design__howto-item"><span>【<a href="<?php echo $base_url?>/magazine/article/recipe-technic37.php" class="recipe-design__link">錦糸卵</a>】を作ります。</span></li>
              <li class="recipe-design__howto-item"><span>菜の花は塩を入れた湯で、30秒ほどゆでます。</span></li>
              <li class="recipe-design__howto-item"><span>菜の花がゆで終わったらザルにあげて水気を切り、冷水に浸けます。</span></li>
              <li class="recipe-design__howto-item"><span>冷水に浸けた菜の花をぎゅっと絞って水気を切ったら、小口切りにします。</span></li>
              <li class="recipe-design__howto-item"><span>5cm幅に切った牛乳パックをお皿にのせ、牛乳パックの内側に、酢飯1人前の1/2ほどを入れます。酢飯はスプーンの背で押さえながら広げます。</span></li>
              <li class="recipe-design__howto-item"><span>酢飯の上に菜の花をのせて、スプーンで広げます。</span></li>
              <li class="recipe-design__howto-item"><span>菜の花の上にねぎとろをのせて、スプーンで広げます。</span></li>
              <li class="recipe-design__howto-item"><span>ねぎとろの上に酢飯1人前の1/2ほどを、スプーンで広げます。</span></li>
              <li class="recipe-design__howto-item"><span>酢飯の上に錦糸卵をのせて、スプーンで広げます。</span></li>
              <li class="recipe-design__howto-item"><span>スプーンの背で全体を押さえながら、ゆっくり牛乳パックを外します。</span></li>
              <li class="recipe-design__howto-item"><span>スモークサーモン1枚を端からくるくると巻き、さらに1枚重ねて巻いて、バラの花を作ります。</span></li>
              <li class="recipe-design__howto-item"><span>ケーキ寿司の上に大葉をのせ、スモークサーモンで作ったバラを飾ります。</span></li>
            </ol>
          </div>
          <div class="flex flex_around center">
            <figure class="w50 mb2">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/16/recipe16_finish01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/16/recipe16_finish01@2x.jpg"
                alt="ひなまつりのケーキ寿司 画像" style="max-width:362px" class="u-img__max">
            </figure>
            <figure class="w50 mb2">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/16/recipe16_finish02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/16/recipe16_finish02@2x.jpg"
                alt="ひなまつりのケーキ寿司 画像" style="max-width:362px" class="u-img__max">
            </figure>
          </div>
          <div class="recipe-design__plus1 plus1-recipe mb3">
            <div class="plus1-recipe__row">
              <h4 class="plus1-recipe__ttl">ケーキ寿司にぴったりのおすすめ具材は？</h4>
              <p>ご紹介したほかにも、ケーキ寿司にぴったりな具材はまだまだたくさんあります。なんといっても王道はツナマヨ。簡単な作り方をご紹介しましょう。</p>
            </div>
          </div>
          <div class="recipe-design__material">
            <h3 class="recipe__ttl">ツナマヨの材料</h3>
            <dl class="recipe-design__materials">
              <dt>ツナ水煮缶</dt>
              <dd>150g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>たまねぎ（みじん切り）</dt>
              <dd>1/4個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>塩</dt>
              <dd>少々</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>マヨネーズ</dt>
              <dd>大さじ4</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>醤油</dt>
              <dd>小さじ1</dd>
            </dl>
          </div>
          <div class="recipe-design__howto">
            <h3 class="recipe__ttl">アレンジレシピの手順</h3>
            <ol class="u-list__ol_more">
              <li class="recipe-design__howto-item"><span>たまねぎは塩少々をふってもみ、ペーパーに包んで水気を絞ります。</span></li>
              <li class="recipe-design__howto-item"><span>ツナ缶は汁をよく切ってからボウルに入れて、たまねぎ、マヨネーズ、醤油を加えて混ぜます。</span></li>
            </ol>
            <p>スモークサーモンを鯛の刺身に変えてバラを作ることで、違った雰囲気になります。<br>ご紹介したツナマヨのほかに「そぼろ」、「アボカド」、「えび」などのトッピングも人気。特にアボカドは、まぐろやサーモン、えびなどと組み合わせると彩りが増すのでおすすめです。お子さまの好みに合わせて具材を選んでみてください。</p>
          </div>
          <figure class="w50 mb3">
            <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/16/recipe16_arrange01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/16/recipe16_arrange01@2x.jpg"
              alt="ツナマヨケーキ寿司" style="max-width:362px" class="u-img__max">
          </figure>
          <div>
            <h3 class="recipe__ttl_l mb0">型を変えたアレンジもおすすめ</h3>
            <p class="mb2">ケーキ寿司は具材の種類もさることながら、その形もバリエーションが豊富です。ケーキ寿司のなかでも、人気のアレンジをご紹介しましょう。</p>
          </div>
          <div class="mb2">
						<h4>華やか円形ケーキ寿司</h4>
						<div class="flex">
							<figure class="w50 mb2">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/16/recipe16_arrange02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/16/recipe16_arrange02@2x.jpg"
                  alt="華やか円形ケーキ寿司" style="max-width:362px" class="u-img__max">
              </figure>
						</div>
						<p>パーティーサイズの華やかな円形ケーキ寿司。こちらはケーキの丸い型を使用して作っています。ほかにも、「長方形の型」や「星型」など、お好みに合わせたケーキ型を使うのもおすすめです。</p>
					</div>
          <div class="mb2">
						<h4>かわいいカップ寿司</h4>
						<div class="flex">
							<figure class="w50 mb2">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/16/recipe16_arrange03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/16/recipe16_arrange03@2x.jpg"
                  alt="かわいいカップ寿司" style="max-width:362px" class="u-img__max">
              </figure>
						</div>
						<p>こちらはサイズの小さな可愛らしいカップ寿司。市販のグラスやカップも、おしゃれ感が増して、ケーキ寿司のデコレーションにぴったりです。</p>
            <p>いずれもケーキ寿司自体の作り方は、ご紹介したレシピ通りなので、ケーキ寿司に使う型を変えるなど、ちょっとした工夫で見せ方を変えることができますよ。</p>
					</div>
          <div>
            <h3 class="recipe__ttl_l mb0">迷ったらコレ！おすすめ付け合わせメニュー</h3>
            <p class="mb2">ケーキ寿司だけだと、食卓がなんだか物足りない…。そんな方におすすめの付け合わせメニューをご紹介します。これを機会に作り方をマスターしちゃいましょう。</p>
          </div>
          <div class="mb2">
						<h4>はまぐりの潮汁</h4>
						<div class="flex">
							<figure class="w50 mb2">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/16/recipe16_arrange04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/16/recipe16_arrange04@2x.jpg"
                  alt="はまぐりの潮汁" style="max-width:362px" class="u-img__max">
              </figure>
						</div>
						<p>潮汁とは、魚介類のだしを塩で味付けした汁物のこと。澄んだスープの上品なはまぐりの潮汁は、ひなまつりには欠かせない一品です。昆布だしのすまし汁をベースに作ることができるので、ぜひ試してみてくださいね。</p>
					</div>
          <div class="mb2">
						<h4>鶏と根菜の味噌バター炒め</h4>
						<div class="flex">
							<figure class="w50 mb2">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/16/recipe16_arrange05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/16/recipe16_arrange05@2x.jpg"
                  alt="鶏と根菜の味噌バター炒め" style="max-width:362px" class="u-img__max">
              </figure>
						</div>
						<p>栄養バランスもよく、食べ合わせとしておすすめの<a href="<?php echo $base_url?>/magazine/article/recipe01.php" class="recipe-design__link">鶏と根菜の味噌バター炒め</a>。<br>ぜひ、献立づくりの参考してみてください。</p>
					</div>
        </div>

        <div class="recipe-icn mie_01">
          <div class="inner">
            <p>じゃ～ん！私は、ケーキ寿司を持ってきました♪</p>
          </div>
        </div>
        <div class="recipe-icn mama_friend01">
          <div class="inner">
            <p>わぁ～！かわいい！<br>これ、ミエさんが作ったの？</p>
          </div>
        </div>
        <div class="recipe-icn mie_01">
          <div class="inner">
            <p>そうなんです<br>デコレーションはコウちゃんと一緒にしました！<br>見た目も、味も、自慢の逸品です！</p>
          </div>
        </div>
        <div class="recipe-icn mama_tomokids01">
          <div class="inner">
            <p>みぃちゃんもたべたーい！</p>
          </div>
        </div>
        <div class="recipe-icn kou_01">
          <div class="inner">
            <p>いっしょにたべよう♪</p>
          </div>
        </div>

        <hr class="recipe__line">
        <div class="recipe__intro recipe-intro">
          <p class="recipe-intro__ex">今年のひなまつりは、初めてのケーキ寿司にチャレンジ！見た目が華やかだから、みんなに喜んでもらえてよかったな～。コウちゃんとも一緒に作ることができたし！酢飯と具材を重ねるだけだから、私もアレンジレシピを作ってみようかな♪</p>
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
