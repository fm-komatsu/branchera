<?php
//base
include( "../../function.php" );
$content = get_id_data( '14018' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「キーマカレーの作り方」を動画で解説。キーマカレーはひき肉を使った本格カレー。たったの15分、フライパンひとつでキーマカレーを作るレシピをご紹介します。また、キーマカレーを使って作るサモサ風包み揚げなど、アレンジメニューのレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = 'たまねぎは7mm角、さやいんげんは根元を落とし、1cmの小口切りにします。筋がある場合は、切る前に取り除いてください。';
$altCap02 = 'フライパンにオリーブオイルを入れて中火で熱し、たまねぎを加えて炒めます。';
$altCap03 = 'たまねぎがしんなりしてきたら、フライパンの端に寄せて、空いたスペースにひき肉を加えて炒めます。';
$altCap04 = 'ひき肉の色が変わってきたら、さやいんげんを加えてください。サッと炒めたら、カレー粉を加えて全体を混ぜます。';
$altCap05 = '香りが立ったらトマトジュース、中濃ソース、しょうが、にんにく、砂糖、塩を加えて、軽く煮詰めます。';
$altCap06 = '味見をして、塩、粗びき黒こしょうで味を調えたらルーのできあがりです。';
$altCap07 = 'ルーの中央を少しくぼませて、温泉卵をのせたら完成です。';
$altCap08 = '小さなお子さまと一緒に食べるときには、マイルドな味付けにしましょう。牛乳、ヨーグルト、すりおろしりんごなどを加えて煮込むと、カレー粉の辛味が抑えられます。シュレッドチーズや粉チーズを入れると、よりまろやかな味わいに。';
$altCap09 = '水分の少ないキーマカレーは、料理の具としても大活躍。';
$altCap10 = '副菜がもう一品欲しい！というときには、なすやパプリカ、ブロッコリーなどの焼き野菜にキーマカレーを和えると、野菜も肉も取れるおかずができあがります。ぜひお試しください！';

?>
<main class="main">
  <article class="main__row">
    <?php
      $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
      $panAry[] = array( "/magazine/index_comic02.php", "うちのご飯は世界イチ" );
      include( $inc_path . "/lib/inc/pan.php" );
      // SP時サムネにタイトルを表示するかフラグ
      $thumTtlFlg = 'off';
      include($inc_path . "/lib/inc/page/_magazine/__comic02tech-new-header.php");
      include($inc_path . "/lib/inc/page/_magazine/__recipe-new-main-v.php");
    ?>
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header recipe__new">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num">　</span>
          <span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
        </h2>
      </div>
      <div class="recipe-story mb3">
				<div class="recope-story__row recipe-story__recipe">
					<p>毎日仕事が終わった後、夜ご飯のメニューを考えるのは至難の業。どうしても同じようなメニューが続いちゃう…。とはいえ、なかなか手の込んだものを作る余裕もないのよね。簡単で時短できる、いいレシピないかな～？</p>
				</div>
			</div>

      <div class="recipe-icn mama_01">
        <div class="inner">
          <p>今日も忙しかったな…<br>夜ごはん、カレーにしようか<br>コウちゃん！</p>
        </div>
      </div>
      <div class="recipe-icn ko_02">
        <div class="inner">
          <p>え～！またかれー？<br>こないだもたべたよねー</p>
        </div>
      </div>
      <div class="recipe-icn mama_02">
        <div class="inner">
          <p>そ、そうだっけ？<br>困ったな～、カレーが一番ラクチンなんだけど…<br>簡単に作れて、いつものとは一味違うカレーないかなあ？</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>おっと、俺の出番みたいだな！ <br>フライパンだけで作るキーマカレーなんてどうだい？<br>市販のカレールーを使わなくても<br class="u-only__pc">たったの15分で絶品カレーが完成するんだぜ！</p>
        </div>
      </div>
      <div class="recipe-icn mama_03">
        <div class="inner">
          <p>えぇ～！15分⁉<br>キーマカレーって凝っている料理に見えるのに、<br class="u-only__pc">本当に15分で作れちゃうの⁉しかも、フライパンだけで！？<br>フラッキー、ぜひ作り方を教えて！</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>よし、きた！<br>フライパンの底力をみせてやるぜ<br>味しすぎて、ビックリするなよ～！</p>
        </div>
      </div>
      <div class="recipe__movie recipe-movie-new recipe">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/common/movie_ttl@2x.png"
           alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/IGHdkg4eqpk?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">簡単キーマカレーの作り方</h3>
          <p class="mb2">ひき肉を使ったキーマカレー。スパイシーな香りと、ひき肉のうまみが絡み合って、食欲をそそられる一品です。煮込まずに短時間でできるので、パッと作りたいときにぴったり。材料次第でいろいろなアレンジも楽しめます。</p>
          <h4 class="recipe__ttl_recipe">材料（2～3人分）</h4>
          <div class="recipe-design__material">
						<dl class="recipe-design__materials">
							<dt>合いびき肉</dt>
							<dd>300ｇ</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>たまねぎ</dt>
							<dd>1個</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>さやいんげん</dt>
							<dd>6本</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>カレー粉</dt>
							<dd>大さじ2</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>トマトジュース（食塩不使用）</dt>
							<dd>1カップ（200ml）</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>中濃ソース</dt>
							<dd>大さじ2</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>しょうが（すりおろし）</dt>
							<dd>小さじ1</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>にんにく（すりおろし）</dt>
							<dd>小さじ1</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>砂糖</dt>
							<dd>小さじ1</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>塩</dt>
							<dd>小さじ1/2</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>粗びき黒こしょう</dt>
							<dd>少々</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>オリーブオイル</dt>
							<dd>大さじ1/2</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>ごはん</dt>
							<dd>茶碗2～3膳分</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>温泉卵</dt>
							<dd>2～3個</dd>
						</dl>
          </div>
          <h4 class="recipe__ttl_recipe">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-01@2x.jpg"
                 alt="フラッキーのHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'.$altCap02); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php /* echo ($altCap02); */ ?>
              フライパンにオリーブオイルを入れて<strong>中火</strong>で熱し、たまねぎを加えて炒めます。
            </dd>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap03); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap04); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap05); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-06@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap06); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-07@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap07); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <section>
            <h3 class="recipe__ttl_l">キーマカレーの人気アレンジレシピ</h3>
            <p class="mb3">ひき肉ベースのカレーなので、ほかの具材を混ぜやすく、手軽にアレンジできます。また、すべての具材を細かく切って使うため、火が通りやすく時短につながります。<br>キーマカレーは水分が少ないので、保存しやすい点も魅力です。多めに作って冷凍したり、翌日のお弁当に使ったりと、幅広く応用できます。</p>
            <div class="mb3">
              <h4>●和風キーマカレー丼</h4>
              <p class="mb2">基本のキーマカレーと工程は同じです。トマトジュースや中濃ソースを加えるタイミングで、味噌、酒、醤油をそれぞれ少々加えます。<br>具材に油揚げや長ねぎを入れて、だし汁やめんつゆを加えても美味しく食べられます。</p>
              <p>あえて平らなお皿ではなく、丼に盛り付けることで見た目も和風になります。仕上げに青ねぎのみじん切りや、みょうがなどの薬味をトッピングしましょう。</p>
            </div>
            <div class="mb3">
              <h4>●お子さま向けキーマカレー</h4>
              <div class="u-clearfix">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-08@2x.jpg"
                  alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap08); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap08); ?>
                </p>
                <p>具材にはミックスベジタブルを入れると、カラフルな色合いで可愛らしい見た目になりますよ。ゆで卵の輪切りをのせたり、星型に切ったにんじんをのせたりなど、盛り付けも楽しくアレンジしてみてください。</p>
              </div>
            </div>
            <div class="mb3">
              <h4>●サモサ風包み揚げ</h4>
              <div class="u-clearfix">
                <figure class="u-float__right">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-09@2x.jpg"
                  alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap09); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap09); ?>
                </p>
                <p>ぎょうざや春巻きの皮で包んで揚げると、インドの揚げ物料理・サモサ風の包み揚げになります。しっかり水分を飛ばすか、水溶き片栗粉でとろみを付けてから包みましょう。お弁当のおかずにもなる一品です。</p>
              </div>
            </div>
            <div class="mb0">
              <h4>●野菜のキーマカレー和え</h4>
              <div class="u-clearfix">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/recipe/18/recipe18-10@2x.jpg"
                  alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap10); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <p>
                  <?php  echo ($altCap10); ?>
                </p>
              </div>
            </div>
          </section>
        </div>
      </div>
      <div class="recipe-icn mama_01">
        <div class="inner">
          <p>本当に15分でできちゃった！<br>あっという間に完成したのに、本格的で美味し～い！<br>コウちゃん、辛くない？</p>
        </div>
      </div>
      <div class="recipe-icn ko_03">
        <div class="inner">
          <p>からくなーい<br>きーまかれー、おいしーい！</p>
        </div>
      </div>
      <div class="recipe-icn papa_01">
        <div class="inner">
          <p>いい香りで、いくらでも食べられちゃうね<br>フライパンひとつでできるのは<br class="u-only__pc">洗い物担当のパパには大助かりだなー</p>
        </div>
      </div>
      <div class="recipe-icn fl_03">
        <div class="inner">
          <p>フライパンの本領発揮ってとこだね！<br>もっと本格的に楽しみたければ、<br class="u-only__pc">実のまま乾燥させてある「ホールスパイス」を入れてみな！<br>これを最初に炒めて加えると、一気に本場の味になるんだ<br>クミンシードやコリアンダーシードが俺のイチオシだぜ♪</p>
        </div>
      </div>
      <div class="recipe-icn mama_01">
        <div class="inner">
          <p>美味しそう～！今度はスパイスも入れてみようっと<br>フライパンひとつで美味しいって最高♪<br>フラッキー、これからも時短レシピを教えてね！</p>
        </div>
      </div>
      <div class="mb0">
      <?php
        include ($inc_path."/lib/inc/page/_magazine/__recipe-new-footer.php");
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
