<?php
//base
include( "../../function.php" );
$content = get_id_data( '15053' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「針生姜の作り方」を動画で解説。針生姜は生姜を約1mmの細切りにしたもので、お料理のアクセントとして役立つ薬味です。均等に細切りにするポイントや、スプーンを使って簡単に皮むきする方法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = '包丁で生姜の皮をむきます。';
$altCap02 = '生姜の繊維の方向に沿って、<strong>約1㎜の厚さ</strong>に切っていきます。';
$altCap03 = '切った生姜を、少しずつずらした状態で並べます。';
$altCap04 = '端から<strong>約1㎜の幅</strong>になるように切っていきます。切り方の要領は、<a href="recipe-technic13.php" class="recipe-design__link">千切り</a>と同じです。';
$altCap05 = 'ボウルに水を張り、水の中に切った生姜を入れます。水にさらす理由は、生姜の辛味と<a href="recipe-technic04.php" class="recipe-design__link">アクを抜き</a>、シャキッとした食感にさせるためです。';
$altCap06 = '10分ほどさらしたら、ざるに上げます。水を切って完成です。';
$altCap07 = '鯛の豊かな風味が味わえる鯛めし。塩を振って水気を拭き取った鯛の切り身を、中火にかけたフライパンで焼きます。両面に焼き目が付いたら、皿に移しましょう。
次に研いで吸水させた米を炊飯器に入れて、酒、みりん、醤油と水を注ぎ、昆布と焼いた鯛をのせて炊飯します。炊き上がったら昆布と鯛の骨を取り除いて、針生姜を加え、全体を混ぜたらできあがり。食べる直前に、三つ葉を飾りましょう。';
$altCap08 = 'かれいや鯛などの甘辛い煮魚には、針生姜を添えると味のアクセントになります。醤油、酒、砂糖、みりんと、魚の切り身を鍋に入れ、強めの中火で煮汁を回しかけながら煮ます。豆腐やごぼうと一緒に煮ても◎。皿に盛った後に、針生姜をのせます。';
$altCap09 = 'もう一品欲しいとき、サッと作ることができる酢の物。薄い輪切りにして塩を振り、水気を絞ったきゅうりを、だし汁、酢、醤油、みりんで和えます。ここに、水で戻して刻んだ乾燥わかめと、一口大に切ったゆでだこを混ぜ合わせます。針生姜は上に飾っても、和えるときに加えて混ぜてもOK。';
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
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第53回は、料理の薬味として役立つ「針生姜の作り方」について動画でご紹介します。</p>
      </div>
      <hr class="recipe__line">

      <div class="recipe-icn mama_02">
        <div class="inner">
          <p>はあ～、今日も暑い！<br>夏はやっぱり、<a href="recipe-technic52.php" class="recipe-design__link">そうめん</a>が美味しい季節よね<br>パパが美味しいゆで方を覚えてくれたから大助かりだけど、<br class="u-only__pc">頻繁に食べる分、いろいろな食べ方に挑戦してみたいなあ</p>
        </div>
      </div>
      <div class="recipe-icn papa_01">
        <div class="inner">
          <p>それなら、薬味を変えたらいいんじゃない？</p>
        </div>
      </div>
      <div class="recipe-icn mama_03">
        <div class="inner">
          <p>薬味を変える？<br>そうだ、その手があったわ！</p>
        </div>
      </div>
      <div class="recipe-icn papa_01">
        <div class="inner">
          <p>いつものねぎの代わりに、針生姜なんていいなあ</p>
        </div>
      </div>
      <div class="recipe-icn mama_02">
        <div class="inner">
          <p>…あれ？針生姜ってどんな生姜だっけ？</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>おいおい！針生姜は針のように細く切った生姜のことだよ<br>何かと役立つから、作り方を覚えておいて損はないぜ！</p>
        </div>
      </div>
      <div class="recipe-icn papa_01">
        <div class="inner">
          <p>フラッキー、ママに教えてあげて！</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>ガッテン承知！<br>コツをつかめばすぐに作れるから、超特急で教えていくぞ～！</p>
        </div>
      </div>
      <div class="recipe-icn mama_02">
        <div class="inner">
          <p>ひえ～、お願いします！</p>
        </div>
      </div>
      <div class="recipe__movie recipe-movie-new technic">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl@2x.png"
           alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/qZYAFw6HGCo?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">簡単！針生姜の作り方</h3>
          <p class="mb2">針生姜とは、針のように細く刻んだ生姜のこと。薬味として、炊き込みご飯や麺料理、煮物、和え物などに散らして使います。コツを覚えて、細くきれいに仕上げましょう！</p>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
						<dl class="recipe-design__materials">
							<dt>生姜</dt>
							<dd>適量</dd>
						</dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-01@2x.jpg"
                 alt="フラッキーのHow To <?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <div class="recipe-check mb3">
						<div class="recipe-check__row">
							<div class="recipe-check__ttl">
								<h4 class="recipe-check__ex center">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png"
									data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png"
									alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
                </h4>
                <h4>皮むきを簡単にするには、スプーンを使おう！</h4>
                <p>小さくてゴツゴツした生姜の皮を包丁でむくのは、ちょっと難しい工程だよな。やりづらくて時間がかかってしまう…というときは、包丁の代わりにスプーンを使うとラクチンだぞ！</p>
                <p class="mb2">スプーンのフチを生姜に当て、こそげるように動かすと、簡単に皮がむけるんだ。包丁やピーラーを使ったときのように、厚くむけすぎてしまうこともないぜ！</p>
							</div>
						</div>
          </div>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <div class="recipe-check mb3">
						<div class="recipe-check__row">
							<div class="recipe-check__ttl">
								<h4 class="recipe-check__ex center">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png"
									data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png"
									alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
                </h4>
                <h4>スライサーでも針生姜は作れる？</h4>
                <p class="mb2">均一な厚さの薄切りにしたいときは、皮をむいた後、1㎜の厚さにする工程をスライサーで行なうのがおすすめだぜ！ただし、この後の細切り（千切り）は包丁を使う必要があるぞ。<br>全く包丁を使わずに作りたい！という場合は、極細の千切りができるタイプのスライサーを使おう。大量の針生姜を作りたいときは、こういった道具を利用すると時短になるぜ！</p>
							</div>
						</div>
          </div>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-05@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-06@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <section>
            <div class="mb3">
              <h3 class="recipe__ttl_l">針生姜の保存方法</h3>
              <p class="mb2">多めに作って、好きなときに使えると便利な針生姜。作り方と併せて、保存方法も覚えておきましょう。</p>
              <h4 class="recipe__ttl_tech">冷凍保存</h4>
              <p class="mb2">針生姜を2～3日以内に使い切るのが難しい場合は、冷凍保存するのがおすすめ。<br>1回分ずつラップに包んでから、ファスナー付き保存袋に入れて冷凍しましょう。保存期間の目安は、<strong>約1カ月</strong>です。<br>冷凍した針生姜は、基本的に凍った状態のまま料理に入れるようにしてください。余分な水分が出るのを防ぐことができます。酢の物など冷たい料理に使う場合は、料理にのせた状態で15～30分ほど置くと自然に解凍できます。</p>
              <h4 class="recipe__ttl_tech">冷蔵保存</h4>
              <p>すぐに使う場合は、冷蔵保存するとよいでしょう。1回分ずつキッチンペーパーに包んでからラップで覆い、冷蔵庫に入れます。保存期間の目安は、<strong>約3～4日</strong>です。なるべく早めに使い切りましょう。</p>
            </div>
          </section>
          <section>
            <div class="mb0">
              <h3 class="recipe__ttl_l">針生姜のおすすめレシピと使い方</h3>
              <p class="mb2">料理の味わいを、グッと引き立ててくれる針生姜。中でも、生姜の風味と相性ぴったりのおすすめレシピをご紹介します！</p>
              <h4 class="recipe__ttl_tech">鯛めし</h4>
              <div class="mb3">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-07@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」鯛めし'. strip_tags($altCap07)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <div>
                  <p>
                  <?php  echo ($altCap07); ?>
                  </p>
                </div>
              </div>
              <h4 class="recipe__ttl_tech">煮魚</h4>
              <div class="mb3">
                <p>
                  <figure class="w45 u-float__right">
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-08@2x.jpg"
                    alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」煮魚'. strip_tags($altCap08)); ?>" style="max-width:300px"
                    class="u-img__max">
                  </figure>

                  <?php  echo ($altCap08); ?>
                </p>
              </div>
              <h4 class="recipe__ttl_tech">酢の物</h4>
              <div class="mb3">
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/53/tech53-09@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」酢の物'. strip_tags($altCap09)); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <div>
                  <p>
                  <?php  echo ($altCap09); ?>
                  </p>
                </div>
              </div>
          </section>
        </div>
      </div>
      <div class="recipe-icn mama_01">
        <div class="inner">
          <p>針生姜って、そうめん以外のお料理にも合うのね！<br>今日はぶり大根に添えてみたわ♪</p>
        </div>
      </div>
      <div class="recipe-icn papa_01">
        <div class="inner">
          <p>どんなメニューも一気にレベルアップするね！<br>ピリッとした風味がアクセントになって、箸が進むなあ</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>煮物やスープ、鍋料理に散らすのも合うし、<br class="u-only__pc">炊き込みご飯や焼きなすにのせても美味しいぞー！<br>いろいろな料理に使ってみてくれ！</p>
        </div>
      </div>
      <div class="recipe__assist">
				<div class="recipe-assist-technic">
					<div class="recipe-assist-technic__row">
						<h3 class="recipe-assist-technic__ttl">用語解説</h3>
						<dl class="recipe-assist-technic__term">
							<dt>「こそげる」とは</dt>
							<dd>包丁の背や刃などを使って、食材の表面を削るようにこすり落とすこと。ごぼうの皮や生姜の皮を落とすときによく使われる。</dd>
						</dl>
					</div>
				</div>
			</div>
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
