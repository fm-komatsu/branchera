<?php
//base
include( "../../function.php" );
$content = get_id_data( '14014' );
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
          <span class="recipe-header__num">第14話</span>
          <span class="recipe-header__ttl">手作りのおせち料理レシピ</span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">今年も残すところ、あと数日…年賀状作り、大掃除、年越しの準備で我が家は大忙し！<br>そんな慌しい中、今日は今年最後の料理教室。1年って早いな～。</p>
      </div>
      <hr class="recipe__line">
      <div class="recipe__row">
        <div class="recipe-icn kou_01">
          <div class="inner">
            <p>も～うい～くつね～る～と～おしょうがつ～♪<br>あ、まゆせんせいこんにちは！</p>
          </div>
        </div>
        <div class="recipe-icn mayu_01">
          <div class="inner">
            <p>コウちゃん、こんにちは！<br>お歌、お上手ね！</p>
          </div>
        </div>
        <div class="recipe-icn mie_01">
          <div class="inner">
            <p>マユ先生、今年もいろいろとありがとうございました<br>今年はたくさんの料理が作れて、充実した1年になりました！</p>
          </div>
        </div>
        <div class="recipe-icn mayu_01">
          <div class="inner">
            <p>こちらこそ、ありがとうございました！<br>今年最後のレッスンですが、おせち料理を一緒に作りませんか？<br>コウちゃんも食べられる、伊達巻きや栗きんとんとか！</p>
          </div>
        </div>
        <div class="recipe-icn mie_02">
          <div class="inner">
            <p>えっ！おせち料理？！ムリです！ムリムリ…<br>おせち料理って、すごく手が込んだイメージで、<br class="u-only__pc">うちはいつも購入しているんです…</p>
          </div>
        </div>
        <div class="recipe-icn mayu_01">
          <div class="inner">
            <p>確かに普段の料理と違って、時短でパパッと作れるものではないのですが、<br class="u-only__pc">1つ1つの工程はそんなに難しくないですよ！<br>今日は、「田作り」と「数の子」は買ったものを用意して、<br class="u-only__pc">「黒豆」「伊達巻き」「栗きんとん」を作ってみましょう！</p>
          </div>
        </div>
        <div class="recipe-icn kou_01">
          <div class="inner">
            <p>こうちゃんもおてつだいするー！</p>
          </div>
        </div>
        <div class="recipe-icn mayu_01">
          <div class="inner">
            <p>おせち料理は、年神様へお供えするとともに、<br class="u-only__pc">家族の幸せを願う縁起ものという意味が込められているので、<br class="u-only__pc">みんなで一緒に作りましょう！</p>
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
            <p class="recipe-movie__overview_txt">こんにちは、料理教室「ハッピーキッチン」へようこそ。<br>第14回は「手作りのおせち料理レシピ」をご紹介します。とても作りやすいレシピになっているので、ぜひチャレンジしてみてくださいね！</p>
          </div>
          <div class="recipe-movie__video">
            <div class="recipe-movie__video_base">
              <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/4nC1w-BFyNU?rel=0" frameborder="0"
                gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="recipe__design recipe-design mb5">
          <h3 class="recipe__ttl_l">黒豆の作り方</h3>
          <div class="recipe-design__material">
            <h3 class="recipe__ttl">材料（3～4人分）　調理時間目安：4時間（豆を戻す時間は除く）</h3>
            <dl class="recipe-design__materials">
              <dt>黒豆</dt>
              <dd>200g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>グラニュー糖</dt>
              <dd>250g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>醬油</dt>
              <dd>大さじ1/2</dd>
            </dl>
          </div>
          <div class="recipe-design__howto">
            <h3 class="recipe__ttl">作り方</h3>
            <ol class="u-list__ol_more">
              <li class="recipe-design__howto-item"><span>黒豆は、虫食いや割れたものがあれば取り除きます。</span></li>
              <li class="recipe-design__howto-item"><span>水を入れたざるなどで洗い、水気を切って鍋に入れます。</span></li>
              <li class="recipe-design__howto-item"><span><strong>1,200ml</strong>の水を加えて、<strong>常温で一晩（約9時間）</strong>置きます。</span></li>
              <li class="recipe-design__howto-item"><span>元の<strong>2〜3倍</strong>の大きさに黒豆を戻したら、グラニュー糖・醬油を入れて混ぜます。</span></li>
              <li class="recipe-design__howto-item"><span><a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけ、厚手のキッチンペーパーで落とし蓋をして、その上から蓋をします。</span></li>
              <li class="recipe-design__howto-item"><span>煮立ったら蓋と落し蓋を外してアクを取り除き、再び落し蓋と蓋をします。</span></li>
              <li class="recipe-design__howto-item"><span><a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#torobi" class="recipe-design__link">とろ火</a>で<strong>3～4時間</strong>ほど煮ます。</span></li>
              <li class="recipe-design__howto-item"><span>煮えたら火を止めて、蓋と落し蓋を外します。黒豆を縦につまんで、簡単につぶれるぐらいやわらかくなれば煮あがりです。</span></li>
              <li class="recipe-design__howto-item"><span>落し蓋をして、そのまま冷まします。</span></li>
            </ol>
          </div>
          <div class="recipe-design__point mb6">
            <h3 class="recipe__ttl">ワンポイント</h3>
            <p class="recipe-design__point-item">黒豆を一晩寝かす際に、市販の鉄玉子を入れるとキレイな黒色に煮あがります。</p>
          </div>
        </div>
        <div class="recipe__design recipe-design mb5">
          <h3 class="recipe__ttl_l" id="datemaki">伊達巻きの作り方</h3>
          <div class="recipe-design__material">
            <h3 class="recipe__ttl">材料（4人分/バット台）※撮影時は20×23cmのバットを使用<br>調理時間目安：30分（冷ます時間は除く）</h3>
            <dl class="recipe-design__materials">
              <dt>卵</dt>
              <dd>5個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>はんぺん</dt>
              <dd>1枚（120g）</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>だし</dt>
              <dd>1/4カップ</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>砂糖</dt>
              <dd>大さじ2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>みりん</dt>
              <dd>大さじ2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>醤油</dt>
              <dd>小さじ1</dd>
            </dl>
          </div>
          <div class="recipe-design__howto">
            <h3 class="recipe__ttl">作り方</h3>
            <p>※下準備として、オーブンは<strong>200℃</strong>に予熱しておき、バットにオーブンシートを敷きます。</p>
            <ol class="u-list__ol_more">
              <li class="recipe-design__howto-item"><span>容器に卵をすべて割り入れて、そこにはんぺんを一口大にちぎって入れ、だし・砂糖・みりん・醬油をミキサーなどでなめらかになるまで攪拌（かくはん）し、ペースト状にします。</span></li>
              <li class="recipe-design__howto-item"><span>バットに撹拌（かくはん）したペーストを流し入れます。</span></li>
              <li class="recipe-design__howto-item"><span>予熱しておいたオーブンにバットを入れ、200℃のオーブンで<strong>18〜20分</strong>ほど焼きます。</span></li>
              <li class="recipe-design__howto-item"><span>焼き終わったらバットを取り出し、熱いうちにバットの上に鬼まきすをのせて、ひっくり返します。</span></li>
              <li class="recipe-design__howto-item"><span>バットとオーブンシートをはずして、手前から鬼まきすを巻いていき、両端を輪ゴムで止めてから<strong>立てて冷まします</strong>。</span></li>
              <li class="recipe-design__howto-item"><span>完全に冷めたら鬼まきすを外します。</span></li>
              <li class="recipe-design__howto-item"><span><strong>1.5cm</strong>の厚さに切ります。</span></li>
            </ol>
          </div>
          <div class="recipe-design__point mb">
            <h3 class="recipe__ttl">ワンポイント</h3>
            <p class="recipe-design__point-item">醬油は、薄口醬油を使うと色が濃くつかずに、キレイな伊達巻きが作れます。<br>鬼まきすを巻いた後、立てて冷ますことにより、汁気が切れて、キレイな円形を保つことができます。</p>
          </div>
        </div>
        <div class="recipe__design recipe-design mb5">
          <h3 class="recipe__ttl_l" id="kurikinton">栗きんとんの作り方</h3>
          <div class="recipe-design__material">
            <h3 class="recipe__ttl">材料（3～4人分）　調理時間安：40分</h3>
            <dl class="recipe-design__materials">
              <dt>さつまいも</dt>
              <dd>大1本（正味400g）</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>くちなしの実</dt>
              <dd>2個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>栗の甘露煮</dt>
              <dd>12個</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>栗の甘露煮のシロップ</dt>
              <dd>1/2カップ</dd>
            </dl>
            <dl class="recipe-design__materials mb3">
              <dt>塩</dt>
              <dd>ひとつまみ</dd>
            </dl>
          </div>
          <div class="recipe-design__howto">
            <h3 class="recipe__ttl">作り方</h3>
            <ol class="u-list__ol_more">
              <li class="recipe-design__howto-item"><span>さつまいもは輪切りにし、厚めに皮をむき<strong>10分</strong>ほど水にさらして水気を切ります。</span></li>
              <li class="recipe-design__howto-item"><span>くちなしの実は、お茶用パックに入れてめん棒などでたたき割ります。</span></li>
              <li class="recipe-design__howto-item"><span>鍋にさつまいもを入れ、かぶる程度の水、くちなしの実を加えて<strong><a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a></strong>にかけて、煮立ったら<a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>と<a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>の間の火加減にし、竹串がすっと通るまで<strong>10分</strong>ほど煮ます。</span></li>
              <li class="recipe-design__howto-item"><span>くちなしの実を除き、ゆで汁を<strong>1カップ分ほど</strong>残して捨てます。</span></li>
              <li class="recipe-design__howto-item"><span>熱いうちに木ベラでなめらかになるまでつぶします。栗の甘露煮のシロップを2回に分けて入れ、外側から持ち上げるように軽く混ぜます。</span></li>
              <li class="recipe-design__howto-item"><span>塩を入れ、栗の甘露煮を加えて軽く混ぜます。味をみて甘みが足りなければ、砂糖を加えて調整します。</span></li>
            </ol>
          </div>
          <div class="recipe-design__point mb6">
            <h3 class="recipe__ttl">ワンポイント</h3>
            <p class="recipe-design__point-item">さつまいもの皮を厚めにむくと、裏ごししやすくなります。</p>
          </div>
        </div>
        <div class="recipe-icn mayu_01">
          <div class="inner">
            <p>購入した2品と合わせて盛り付けましょう！</p>
          </div>
        </div>
        <div class="flex flex_around center">
          <figure class="w50 mb2">
            <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/14/recipe14_finish01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/14/recipe14_finish01@2x.jpg"
              alt="手作りのおせち料理レシピ 盛り付け画像" style="max-width:362px" class="u-img__max">
          </figure>
          <figure class="w50 mb2">
            <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/14/recipe14_finish02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/14/recipe14_finish02@2x.jpg"
              alt="手作りのおせち料理レシピ 盛り付け画像" style="max-width:362px" class="u-img__max">
          </figure>
        </div>
        <div class="recipe-icn kou_01">
          <div class="inner">
            <p>くりさん、あまくておいしいねー！</p>
          </div>
        </div>
        <div class="recipe-icn mie_01">
          <div class="inner">
            <p>初めての工程が多かったけれど、<br class="u-only__pc">手作りのおせち料理は甘みなどの味の調節ができるので、良いですね♪</p>
          </div>
        </div>
        <div class="recipe-icn mayu_01">
          <div class="inner">
            <p>栗きんとんは冷蔵保存で3日ほど、冷凍保存で2～3週間ほどもちますよ<br>また、冷凍保存の方法はラップで２重につつみ、ファスナー付きの保存袋で密封してくださいね！</p>
          </div>
        </div>
        <hr class="recipe__line">
        <div class="recipe__intro recipe-intro">
          <p class="recipe-intro__ex">料理が苦手だった私が、まさかおせち料理を作れるようになるなんて！この一手間で、さらに楽しいお正月を迎えられそう♪来年もたくさん、マユ先生に教えてもらって料理の腕を磨くぞー！</p>
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
