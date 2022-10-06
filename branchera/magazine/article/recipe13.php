<?php
//base
include( "../../function.php" );
$content = get_id_data( '14013' );
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
          <span class="recipe-header__num">第13話</span>
          <span class="recipe-header__ttl">サンタさんのいちごケーキ</span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">コウちゃんとパパが大好きなクリスマスパーティー！今年も家族3人でする予定なの。<br>コウちゃんも大きくなったことだし、今年は一緒にクリスマスケーキあたりを作ってみたいな～♪クリスマスらしいケーキってどんなものがあるんだろう…</p>
      </div>
      <hr class="recipe__line">
      <div class="recipe__row">
        <div class="recipe-icn kou_01">
          <div class="inner">
            <p>ママ～、みてみて！さんたさん！</p>
          </div>
        </div>
        <div class="recipe-icn mie_01">
          <div class="inner">
            <p>わぁ、コウちゃんお絵かき上手だね～</p>
          </div>
        </div>
        <div class="recipe-icn masaki_01">
          <div class="inner">
            <p>サンタさんか～！よく描けているね<br>そういえば、もうすぐクリスマスだな～</p>
          </div>
        </div>
        <div class="recipe-icn kou_01">
          <div class="inner">
            <p>コウちゃん、さんたさんのけーきがたべたい！</p>
          </div>
        </div>
        <div class="recipe-icn mie_02">
          <div class="inner">
            <p>サンタさんのケーキ、クリスマスらしくていいかも！<br>でも作るのが難しそうだな…ケーキって作る工程が多くて、<br class="u-only__pc">材料の分量を間違えると失敗しちゃうのよね</p>
          </div>
        </div>
        <div class="recipe-icn masaki_02">
          <div class="inner">
            <p>そういえばママ、結婚する前に<br class="u-only__pc">手作りケーキを作ってくれたけど、<br class="u-only__pc">スポンジが全然ふくらまなくて失敗してたよね…</p>
          </div>
        </div>
        <div class="recipe-icn mie_02">
          <div class="inner">
            <p>そ、そんなこともあったね…<br class="u-only__pc">失敗してから、全然作らなくなっちゃったな～</p>
          </div>
        </div>
        <div class="recipe-icn kou_01">
          <div class="inner">
            <p>コウちゃん、マユせんせいにおしえてもらう！<br>ママもいこ！いこ！</p>
          </div>
        </div>
        <div class="recipe-icn mie_02">
          <div class="inner">
            <p>えっ、ちょっとコウちゃん待ってよ～</p>
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
            <p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>第13回は、クリスマスにピッタリな「サンタさんのいちごケーキ」の作り方をご紹介します。市販のスポンジを使って簡単に作れるかわいいケーキ、ぜひお子さまと一緒に作ってみてくださいね。</p>
          </div>
          <div class="recipe-movie__video">
            <div class="recipe-movie__video_base">
              <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/VLjvS3v1RWk?rel=0" frameborder="0"
                gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="recipe__design recipe-design">
          <h3 class="recipe__ttl_l">サンタさんのいちごケーキ</h3>
          <div class="recipe-design__material">
            <h3 class="recipe__ttl">材料（3~4人分）調理時間目安：20分</h3>
            <h4 class="u-ttl__s">【土台】</h4>
            <dl class="recipe-design__materials">
              <dt>プレーンスポンジケーキ（市販品・直径15cm）</dt>
              <dd>1台</dd>
            </dl>
            <h4 class="u-ttl__s">【生クリーム】</h4>
            <dl class="recipe-design__materials">
              <dt>生クリーム</dt>
              <dd>300ml</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>グラニュー糖</dt>
              <dd>大さじ1と1/2</dd>
            </dl>
            <h4 class="u-ttl__s">【サンド＆トッピング】</h4>
            <dl class="recipe-design__materials">
              <dt>いちご</dt>
              <dd>10～15個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>チョコ菓子</dt>
              <dd>2粒</dd>
            </dl>
            <h4 class="u-ttl__s">【シロップ】</h4>
            <dl class="recipe-design__materials">
              <dt>オレンジジュース</dt>
              <dd>大さじ2</dd>
            </dl>
            <p>※お好みのジュースをお使いください</p>
            <div class="recipe-design__howto">
              <h3 class="recipe__ttl">作り方</h3>
              <ol class="u-list__ol_more">
                <li class="recipe-design__howto-item"><span>スポンジケーキは回しながら厚さを半分に切ります。</span></li>
                <li class="recipe-design__howto-item"><span>いちごはヘタを取り除き、サンタさんの帽子用に<strong>5個ほど</strong>縦半分に切ります。サンド用に<strong>5個ほど</strong>薄切りにします。サンタさんの鼻用に<strong>1個</strong>はそのまま取っておきます。</span></li>
                <li class="recipe-design__howto-item"><span>ボウルの底を氷水に当てて冷やしながら、生クリーム、グラニュー糖を入れ、泡立て器で<strong>8分立て</strong>にします。絞り口をセットした絞り袋を用意し、生クリームを半量入れて冷蔵庫で冷やします。</span></li>
                <li class="recipe-design__howto-item"><span>お皿に「1」のスポンジケーキの下段を置き、ハケでオレンジジュース（シロップ）を優しくたたくようにして塗ります。</span></li>
                <li class="recipe-design__howto-item"><span>「3」の残りの生クリームを<strong>1/3量</strong>のせて、平らにした後にサンド用に薄切りにしたいちごを並べ、生クリームをひとすくいのせて平らにならします。</span></li>
                <li class="recipe-design__howto-item"><span>上段のスポンジケーキは焼き目のついた面にオレンジジュースを塗り、その面を下にして重ねます。手で押さえて平らにし、<strong>上面は顔の部分を残して</strong>周りをハケで塗ります。</span></li>
                <li class="recipe-design__howto-item"><span>残りの生クリームをすべてのせ、顔の部分を残して平らにならします。</span></li>
                <li class="recipe-design__howto-item"><span>冷やしておいた生クリームで帽子の縁どりをした後に、ヒゲも作っていきます。</span></li>
                <li class="recipe-design__howto-item"><span>帽子用のいちごを並べ、鼻用のいちごをのせます。</span></li>
                <li class="recipe-design__howto-item"><span>目に見立てるチョコ菓子に少量の生クリームをつけて、片方ずつのせます。</span></li>
              </ol>
            </div>
            <div class="flex flex_around center">
              <figure class="w50 mb2">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/13/recipe13_finish01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/13/recipe13_finish01@2x.jpg"
                  alt="サンタさんのいちごケーキ 完成画像" style="max-width:362px" class="u-img__max">
              </figure>
              <figure class="w50 mb2">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/13/recipe13_finish02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/13/recipe13_finish02@2x.jpg"
                  alt="サンタさんのいちごケーキ 完成画像" style="max-width:362px" class="u-img__max">
              </figure>
            </div>
            <div class="recipe-design__point mb6">
              <h3 class="recipe__ttl">ワンポイント</h3>
              <p class="recipe-design__point-item">生クリームは、塗っていくうちに固くなるので少し柔らかめの8分立てにします。絞り袋に入れた生クリームを上手に絞るコツは、一定のスピードで、リズムを刻みながら絞るとキレイな形になります。</p>
            </div>
          </div>
        </div>
        <div class="recipe-icn kou_01">
          <div class="inner">
            <p>わぁ～！コウちゃんのさんたさん！</p>
          </div>
        </div>
        <div class="recipe-icn mie_01">
          <div class="inner">
            <p>コウちゃんが描いてくれたサンタさんにそっくり！<br>可愛いサンタさん、食べるのがもったいないね</p>
          </div>
        </div>
        <div class="recipe-icn mayu_01">
          <div class="inner">
            <p>コウちゃん、サンタさんのケーキを作れてよかったね</p>
          </div>
        </div>
        <div class="recipe-icn mie_01">
          <div class="inner">
            <p>前回、メイン料理で教えてもらった<a href="<?php echo($base_url) ?>/magazine/article/recipe12.php" class="recipe-design__link">ローストビーフ</a>と<br
                class="u-only__pc">今回のデザート、サンタさんのいちごケーキで<br class="u-only__pc">クリスマスパーティーは完璧です！あぁ～クリスマスが待ち遠しい～！</p>
          </div>
        </div>
        <hr class="recipe__line">
        <div class="recipe__intro recipe-intro">
          <p class="recipe-intro__ex">今年のクリスマスは、メイン料理もデザートも手作りだから、いつもと一味違ったクリスマスパーティーになりそう！家族みんなでケーキ作り♪楽しみだな～。料理の準備がひと段落ついたから、次は部屋の飾りつけを考えなきゃ！</p>
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
