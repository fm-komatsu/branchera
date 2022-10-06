<?php
//base
include( "../../function.php" );
$content = get_id_data( '14015' );
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
          <span class="recipe-header__num">第15話</span>
          <span class="recipe-header__ttl">チーズタッカルビ</span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">今日は、久しぶりにパパと2人きりの夕ご飯！<br>2人だと夕ご飯は外で済ますことが多かったけれど、お家でゆっくり食べたいねっということで、今回は作ることにしたの♪</p>
      </div>
      <hr class="recipe__line">
      <div class="recipe__row">
        <div class="recipe-icn mie_01">
          <div class="inner">
            <p>パパ～、今日の夕ご飯なんだけど、<br class="u-only__pc">せっかくだから2人で家飲みしようよ♪</p>
          </div>
        </div>
        <div class="recipe-icn masaki_01">
          <div class="inner">
            <p>家飲みいいね！<br>ママは何が食べたい？</p>
          </div>
        </div>

        <div class="recipe-icn mie_01">
          <div class="inner">
            <p>久しぶりに辛いものが食べたいなぁ～<br>私たち辛いものが好きだけど<br class="u-only__pc">コウちゃんがいると、なかなか食べられないものね…</p>
          </div>
        </div>
        <div class="recipe-icn masaki_01">
          <div class="inner">
            <p>確かに、最近辛いものを全然食べていないよね！<br>辛いものって言ったら…今の時期、キムチ鍋かな？</p>
          </div>
        </div>
        <div class="recipe-icn mie_01">
          <div class="inner">
            <p>えー、キムチ鍋も好きだけど<br class="u-only__pc">せっかくだから、違うものも食べてみたいな<br class="u-only__pc">マユ先生にオススメの辛い料理を教えてもらおうよ！</p>
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
            <p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>第15回は、お家で簡単！ホットプレートで作る「チーズタッカルビ」をご紹介します。とろ～りチーズがやみつきになりますよ♪ぜひお試しくださいね！</p>
          </div>
          <div class="recipe-movie__video">
            <div class="recipe-movie__video_base">
              <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/dLWysWWEADw?rel=0" frameborder="0"
                gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="recipe__design recipe-design mb5">
          <h3 class="recipe__ttl_l">チーズタッカルビ</h3>
          <div class="recipe-design__material">
            <h3 class="recipe__ttl">材料（3人分）　調理時間目安：20分</h3>
            <dl class="recipe-design__materials">
              <dt>鶏もも肉</dt>
              <dd>1枚（約300g）</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>コチュジャン</dt>
              <dd>大さじ1と1/2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>酒</dt>
              <dd>大さじ1</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>醤油</dt>
              <dd>大さじ1/2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>砂糖</dt>
              <dd>大さじ1/2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>しょうが（すりおろし）</dt>
              <dd>小さじ1/2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>にんにく（すりおろし）</dt>
              <dd>小さじ1/2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>さつまいも</dt>
              <dd>1/2本（100g）</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>玉ねぎ</dt>
              <dd>1/2個（100g）</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>キャベツ</dt>
              <dd>1/4個（150g）</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>ピザ用チーズ</dt>
              <dd>50g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>モッツァレラチーズ</dt>
              <dd>100g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>ごま油</dt>
              <dd>適量</dd>
            </dl>
          </div>
          <div class="recipe-design__howto">
            <h3 class="recipe__ttl">作り方</h3>
            <ol class="u-list__ol_more">
              <li class="recipe-design__howto-item"><span>鶏もも肉は<a href="<?php echo $base_url?>/magazine/article/recipe-technic19.php#torimomoniku" class="recipe-design__link">下ごしらえ</a>をし、大きめにひと口大に切ってファスナー付きの保存袋などに入れます。</span></li>
              <li class="recipe-design__howto-item"><span>「1」にコチュジャン、酒、醤油、砂糖、しょうが、にんにくを加えてしっかり揉みこみ、<strong>10分ほど</strong>漬けておきます。</span></li>
              <li class="recipe-design__howto-item"><span>さつまいもは皮つきのまま厚さ<strong>1cmほど</strong>の<a href="<?php echo $base_url?>/magazine/article/recipe-technic59.php" class="recipe-design__link">半月切り</a>にし、<strong>10分ほど</strong>水にさらして水気を切ります。</span></li>
              <li class="recipe-design__howto-item"><span>たまねぎは厚さ8mmほどの<a href="<?php echo $base_url?>/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>にし、キャベツはざく切りにします。</span></li>
              <li class="recipe-design__howto-item"><span>ホットプレートを<strong>160～170℃</strong>に温め、ごま油を入れてペーパーなどで、全体に油を伸ばします。</span></li>
              <li class="recipe-design__howto-item"><span>「1」の鶏もも肉を炒め、表面に焼き色がついたら鶏もも肉を端によせ、空いたところに「3」と「4」を加えてフタをし、<strong>5分ほど</strong>蒸し焼きにします。</span></li>
              <li class="recipe-design__howto-item"><span>フタをはずして混ぜてから、中央を空けて、手でちぎったモッツァレラチーズを入れます。</span></li>
              <li class="recipe-design__howto-item"><span>ピザ用チーズをのせて、溶けてきたら食材をからめながら食べます。</span></li>
            </ol>
          </div>
          <div class="flex flex_around center">
          <figure class="w50 mb2">
            <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/15/recipe15_finish01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/15/recipe15_finish01@2x.jpg"
              alt="チーズタッカルビ 画像" style="max-width:362px" class="u-img__max">
          </figure>
          <figure class="w50 mb2">
            <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/15/recipe15_finish02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/15/recipe15_finish02@2x.jpg"
              alt="チーズタッカルビ 画像" style="max-width:362px" class="u-img__max">
          </figure>
        </div>
          <div class="recipe-design__point mb6">
            <h3 class="recipe__ttl">ワンポイント</h3>
            <p class="recipe-design__point-item">もっと辛くしたい場合は、お肉を漬ける際に粉唐辛子を加えて調整すると良いです。<br>お好みで、トッポギを入れるとより本格的なチーズタッカルビになります。</p>
          </div>
        </div>
        <div class="recipe-icn masaki_01">
          <div class="inner">
            <p>ピリ辛の鶏もも肉と野菜が、とろ～りチーズと相性バツグン！<br>ビールとご飯がすすんじゃう～</p>
          </div>
        </div>
        <div class="recipe-icn mayu_01">
          <div class="inner">
            <p>シメにご飯を入れて、炒めても美味しいですよ<br>具材の旨みたっぷりのタレにご飯がからんで絶品なんです！</p>
          </div>
        </div>
        <div class="recipe-icn mie_01">
          <div class="inner">
            <p>一度で二度楽しめるのは嬉しいですね！さっそくやってみます♪</p>
          </div>
        </div>

        <hr class="recipe__line">
        <div class="recipe__intro recipe-intro">
          <p class="recipe-intro__ex">ホットプレートで作るからアツアツで美味しかったな～！久しぶりに辛いものが食べられてパパも私も大満足！次は、コウちゃん用にコチュジャンを抜いたものを作ってあげようかな♪</p>
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
