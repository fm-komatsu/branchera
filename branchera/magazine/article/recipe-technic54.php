<?php
//base
include( "../../function.php" );
$content = get_id_data( '15054' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「温泉卵の作り方」を動画で解説。プルプル、とろとろの美味しい温泉卵の簡単な作り方をご紹介します。また、ゆで卵と温泉卵の違いや、おすすめのアレンジレシピなども併せて解説します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = '卵はあらかじめ<strong>常温</strong>に戻しておきます。<br>冷蔵庫から取り出したばかりの卵を使うと、お湯の温度が下がってしまうので注意しましょう。
';
$altCap02 = '鍋に1Lの水を入れ、火にかけて沸騰させます。';
$altCap03 = '沸騰したら、<strong>1カップ（200ml）の水を加えて</strong>火を止めます。';
$altCap04 = '卵をおたまにのせてゆっくりと鍋底に沈め、蓋をして<strong>約30分</strong>放置します。';
$altCap05 = '鍋から卵を取り出し、完全に冷めるまで冷水に浸けておきます。';
$altCap06 = '冷めたら、お皿などに割り入れて完成です。';
$altCap07 = '温泉卵を小鉢に割り入れ、<a href="'.$base_url.'/magazine/article/recipe-technic06.php" class="recipe-design__link">だし汁</a>と<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>をかけて食べましょう。卵そのもののうまみを堪能できますよ。';
$altCap08 = 'とろとろの温泉卵は、<a href="'.$base_url.'/magazine/article/recipe-technic03.php" class="recipe-design__link">野菜</a>と絡みやすいのでサラダにもぴったり。特にマヨネーズベースの<a href="'.$base_url.'/magazine/article/recipe-technic145.php" class="recipe-design__link">ドレッシング</a>を使う、シーザーサラダとは相性抜群です。より濃厚で、まろやかな味わいになります。';
$altCap09 = '刻んだレタスと、<a href="'.$base_url.'/magazine/article/recipe-technic103.php" class="recipe-design__link">ソース</a>たっぷりの<a href="'.$base_url.'/magazine/article/recipe-technic112.php" class="recipe-design__link">ハンバーグ</a>をのせたロコモコ丼。<a href="'.$base_url.'/magazine/article/recipe-technic93.php" class="recipe-design__link">目玉焼き</a>のかわりに温泉卵を使うと、クリーミーな味わいになります。';
$altCap10 = '朝食の<a href="'.$base_url.'/magazine/article/recipe-technic132.php" class="recipe-design__link">トースト</a>を、温泉卵でボリュームアップ！チーズトーストやハムトーストなど、お好みの組み合わせでどうぞ。写真のように、食パンではなく円形のマフィンを使うのもおすすめです。';
$altCap11 = 'うどんに温泉卵をのせて、つゆを注ぐだけでシンプルなぶっかけうどんのできあがり。うどんに卵が絡んで、食べ応え抜群です。もちろん、<a href="'.$base_url.'/magazine/article/recipe-technic70.php" class="recipe-design__link">蕎麦</a>にのせてもOK！';
?>
<main class="main">
  <article class="main__row">
    <?php
      $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
      $panAry[] = array( "/magazine/index_comic02.php", "今さら聞けない料理のアレコレ" );
      include( $inc_path . "/lib/inc/pan.php" );
      // SP時サムネにタイトルを表示するかフラグ
      $thumTtlFlg = 'off';
      include($inc_path . "/lib/inc/page/_magazine/__comic02tech-new-header.php");
      include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-new-main-v.php");
    ?>
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header technic__new">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num">　</span>
          <span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第54回は、とろとろ加減が絶妙な「温泉卵の作り方」について動画でご紹介します。</p>
      </div>
      <hr class="recipe__line">

      <div class="recipe-icn papa_01">
        <div class="inner">
          <p>炊き立てご飯をよそった丼に<br class="u-only__pc">甘辛く煮た<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic19.php" class="recipe-design__link">牛肉</a>と玉ねぎをのせて<br>よ～し、牛丼の完成だ！<br>でも何かが足りない…</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>ん？どうしたんだマサキ？</p>
        </div>
      </div>
      <div class="recipe-icn papa_02">
        <div class="inner">
          <p>本当はお店で出てくる牛丼みたいに、とろとろの温泉卵をのせたいんだけど<br class="u-only__pc">温泉卵の作り方がわからなくて…</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>な～んだ、そんなことか！<br>温泉卵は、普通の<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic10.php" class="recipe-design__link">ゆで卵</a>とゆで方が違うんだ<br>俺が作り方を教えるから、言う通りにやってみろ！</p>
        </div>
      </div>
      <div class="recipe-icn papa_01">
        <div class="inner">
          <p>出た～！フラッキーのスパルタ指導！<br>よーし、やってみるかー！</p>
        </div>
      </div>
      <div class="recipe__movie recipe-movie-new technic">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl@2x.png"
           alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/ApVFMo_OPwA?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">温泉卵とは？半熟ゆで卵との違い</h3>
          <p>温泉卵は、約70度のお湯に一定時間浸けて加熱した<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic08.php" class="recipe-design__link">卵</a>のこと。プルプル、とろっとした食感が特徴的です。<br><a href="recipe-technic10.php" class="recipe-design__link">半熟ゆで卵</a>との違いは、黄身と白身の固まり方。温泉卵は、黄身は適度に固まっていて、白身は半熟でとろっとしています。一方ゆで卵は、黄身は半熟でとろっとしており、白身は固まっています。</p>
          <p class="mb2">なぜ仕上がりに差が出るのかというと、<strong>黄身と白身では、固まる温度が違う</strong>から。<br>卵の黄身は約70度、白身は約80度で固まります。温泉卵は70度前後のお湯に浸けて火を通すので、黄身が先に固まって白身が半熟の状態に。半熟ゆで卵は沸騰したお湯（100度）に入れて加熱するので、外側にある白身が先に固まって、黄身が半熟の状態になるのです。</p>
          <h3 class="recipe__ttl_l">温泉卵の作り方</h3>
          <p class="mb2">適温で上手にゆでられる、温泉卵の作り方をご紹介します。</p>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
						<dl class="recipe-design__materials">
							<dt>卵</dt>
							<dd>2個</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>水（鍋に入れる用）</dt>
							<dd>1L</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>水（差し水用）</dt>
							<dd>1カップ（200ml）</dd>
						</dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-01@2x.jpg"
                 alt="フラッキーのHow To <?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <div class="recipe-check mb3">
						<div class="recipe-check__row">
							<div class="recipe-check__ttl">
                <h4>
								<div class="recipe-check__ex center">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png"
									data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png"
									alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
                </div>
                <span>温度計いらず！水温を68度に保つ「差し水」</span></h4>
                <p class="mb2">鍋の水が沸騰したところに差し水をすることで、水温を68度前後（温泉卵を作るのに最も適した温度）に調整できるぜ！</p>
							</div>
						</div>
          </div>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-06@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-plus1 mb3">
              <div class="recipe-plus1__row">
                <h4 class="recipe-plus1__ttl">常温保存も⁉温泉卵の保存法</h4>
                <p class="mb2">家庭で作った温泉卵は、冷蔵庫で2～3日程度保存することができます。もし殻にヒビが入ってしまった場合は、雑菌が繁殖する恐れがあるので、作った後すぐに食べるようにしてください。</p>
                <p class="mb2">一方、温泉地などでは、常温で1～2週間ほど保存できるものも売られています。市販のものは、商品によって保存方法や保存期間が異なるので、購入時に確認しておきましょう。</p>
              </div>
            </div>
          </section>
          <section>
            <div class="mb0">
              <h3 class="recipe__ttl_l">温泉卵を使ったおすすめレシピ</h3>
              <p class="mb2">温泉卵を使った、美味しいレシピをご紹介します。</p>
              <h4 class="recipe__ttl_tech">温泉卵のだし醤油かけ</h4>
              <div class="mb3 u-clearfix">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-07@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」温泉卵のだし醤油かけ'. strip_tags($altCap07)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <div>
                  <p>
                  <?php  echo ($altCap07); ?>
                  </p>
                </div>
              </div>
              <h4 class="recipe__ttl_tech">サラダ</h4>
              <div class="mb3">
                <p class="u-clearfix">
                  <figure class="w45 u-float__right">
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-08@2x.jpg"
                    alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」サラダ'. strip_tags($altCap08)); ?>" style="max-width:300px"
                    class="u-img__max">
                  </figure>

                  <?php  echo ($altCap08); ?>
                </p>
              </div>
              <h4 class="recipe__ttl_tech">ロコモコ丼</h4>
              <div class="mb3 u-clearfix">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-09@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」ロコモコ丼'. strip_tags($altCap09)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <div>
                  <p>
                  <?php  echo ($altCap09); ?>
                  </p>
                </div>
              </div>
              <h4 class="recipe__ttl_tech">トースト</h4>
              <div class="mb3">
                <p class="u-clearfix">
                  <figure class="w45 u-float__right">
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-10@2x.jpg"
                    alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」トースト'. strip_tags($altCap10)); ?>" style="max-width:300px"
                    class="u-img__max">
                  </figure>

                  <?php  echo ($altCap10); ?>
                </p>
              </div>
              <h4 class="recipe__ttl_tech">ぶっかけうどん</h4>
              <div class="mb3 u-clearfix">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/54/tech54-11@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」ぶっかけうどん'. strip_tags($altCap11)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <div>
                  <p>
                  <?php  echo ($altCap11); ?>
                  </p>
                </div>
              </div>
          </section>
        </div>
      </div>
      <div class="recipe-icn papa_01">
        <div class="inner">
          <p>おまたせ～！<br>とろとろ温泉卵のせ牛丼だよ！</p>
        </div>
      </div>
      <div class="recipe-icn mama_03">
        <div class="inner">
          <p>すご～い、お店で出てくる牛丼みたい！<br>いつもの牛丼が一気にランクアップするね</p>
        </div>
      </div>
      <div class="recipe-icn ko_03">
        <div class="inner">
          <p>とろとろたまご、おいしい～♪</p>
        </div>
      </div>
      <div class="recipe-icn fl_03">
        <div class="inner">
          <p>初めて作ったにしては、上出来だな！</p>
        </div>
      </div>
      <div class="recipe-icn papa_01">
        <div class="inner">
          <p>やったあ、大成功だ！<br>少し多めに作ったから、次は<a href="<?php echo($base_url) ?>/magazine/article/recipe18.php" class="recipe-design__link">カレー</a>にのせてみようかな？<br>これからいろいろな組み合わせを試すぞ～</p>
        </div>
      </div>
      <?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','13002'),
				array ('recommend-recipe-id','15141'),
				array ('recommend-recipe-id','15125'),
				array ('recommend-recipe-end')

				);
			?>				
			<?php	
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
			?>      
      <div class="mb0">
      <?php
        include ($inc_path."/lib/inc/page/_magazine/__recipe-technic-new-footer.php");
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
