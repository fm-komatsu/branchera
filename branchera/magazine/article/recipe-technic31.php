<?php
//base
include( "../../function.php" );
$content = get_id_data( '15031' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '基本的なかぼちゃの下ごしらえの方法を動画で解説。種とワタを取り除く基本的の下ごしらえや保存方法をご紹介します。また、コロッケ、サラダ、お菓子、煮物など、各メニュー別の下ごしらえの方法もお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'a1Mbu2si_KM';

//導入文
$introTxt = '第31回は「かぼちゃの下ごしらえ」です。簡単にできる下ごしらえの方法をご紹介します。';

//キャプチャALTタグ
$altCap01 = 'かぼちゃの種とワタをスプーンで取り除きます。';
$altCap02 = 'きれいに取り除いたら水で洗います。';
$altCap03 = '平らな面を下にしてヘタを取り除きます。';
$altCap04 = '切りにくい場合は、包丁をＶ字に入れて取り除きましょう。';
$altCap05 = '刃全体で力が均等に入るようにして、1/4の大きさに切ります。';
$altCap06 = 'かたくて切りにくい場合は、600Ｗの電子レンジで約2分間加熱すると切りやすくなります。';
$altCap07 = '基本の下ごしらえをした後、<strong>皮を削ぎ落します</strong>。<br>種とワタを取ったかぼちゃをまな板に置き、かぼちゃの皮を削ぎ落としていきます。平らな面を下にして安定させてから、包丁で少しずつ削ぎ落としてください。<br>※料理によって皮を全てむく場合と、所々むく場合があります。';
$altCap08 = '一口大にする場合は、まず4等分に切ります。';
$altCap09 = '4等分に切ったかぼちゃを約3cm幅に切っていきます。';
$altCap10 = '煮物にして使う場合は、一口大に切ったかぼちゃを「<strong>面取り</strong>」しましょう。荷崩れしにくく、味が染み込みやすくなりますよ。<br>面取りとは、煮崩れを防ぐために、切り口の角を薄く切り取ること。皮だけでなく、果肉側の角も、まんべんなく切り取りましょう。';
$altCap11 = '煮る際は、かぼちゃの皮を下にして、重ならないように鍋に並べます。その後、水やだしを注ぎ入れてください。弱火～中火で約10分～15分加熱すると、竹串がスッと刺さるくらいやわらかい状態になります。';
$altCap12 = '<a href="'.$base_url.'/magazine/article/recipe-technic82.php" class="recipe-design__link">天ぷら</a>やバーベキュー、<a href="'.$base_url.'/magazine/article/recipe-technic39.php" class="recipe-design__link">味噌汁</a>や素揚げに使う場合は、薄切りのかぼちゃが使いやすくおすすめです。<strong>約5～7mmの厚さ</strong>に切って使いましょう。<br>薄切りにする際は、手前から押し出すように、均一に切ってください。';
$altCap13 = '';

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
        $recipeIcon ='mie_02';
        $speech ='マユ先生～、助けてください！<br>かぼちゃの煮物を作ろうと思っているのですが、<br class="u-only__pc">かぼちゃを切るのが怖いんです…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_02';
        $speech ='旬のかぼちゃを使った煮物、いいですね！<br>たしかに、かぼちゃは皮がかたくて切るのに一苦労ですよね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_02';
        $speech ='昔、かぼちゃを切っているときに、手を切りそうになってしまって<br class="u-only__pc">それから、かぼちゃを切るのが怖くて…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_03';
        $speech ='切るのが怖くて、美味しいかぼちゃが<br class="u-only__pc">調理できないのはもったいないですね…<br>かぼちゃはコツさえつかめば、簡単に切ることができますよ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_02';
        $speech ='マユ先生、私でも簡単にできる<br class="u-only__pc">下ごしらえの方法を教えてください！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='任せてください！かぼちゃの下ごしらえの方法を、<br class="u-only__pc">一緒にレッスンしていきましょう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie technic">
        <h3 class="recipe-movie__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
           alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
        </h3>
        <div class="recipe-movie__video">
          <div class="recipe-movie__video_base">
            <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <h3 class="recipe__ttl_l mb2">かぼちゃの下ごしらえ方法を料理別に紹介</h3>
        <p class="mb2">かぼちゃは、どんな料理を作る場合にも、まずワタとヘタの処理をします。<br>かたいので手を切らないように気を付けましょう。</p>
        <h4 class="recipe__ttl">どの料理にも共通！基本の下ごしらえ</h4>
        <div class="recipe-design__howto mb3">
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-01@2x.jpg"
                 alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'.strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap01); ?>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-02@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl.'」'.strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap02); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-03@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-04@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-05@2x.jpg"
                 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-11@2x.jpg"
                  alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap06); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">コロッケやサラダ、お菓子に使うときの下ごしらえ</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-06@2x.jpg"
                  alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap07); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-07@2x.jpg"
                  alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-08@2x.jpg"
                  alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap09); ?>
            </dd>
          </dl>
          <p>かぼちゃを潰して使う場合には、切った後電子レンジで加熱します。<br>一口大のかぼちゃを耐熱皿に入れて、上からふんわりとラップをかけ、1/4個あたり約５分～８分（600W）加熱しましょう。かたさをみて、適宜加熱時間を追加してください。やわらかくなったら、熱いうちに<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic67.php" class="recipe-design__link">マッシャー</a>やフォークで潰します。潰したかぼちゃは、サラダにする場合には軽く塩、胡椒をして下味を付けて使いましょう。<br>また、潰した状態でファスナー付き保存袋に入れて冷凍しておけば、いろいろなレシピに応用できますよ。</p>
          <p class="mb2">離乳食に使う場合は、かぼちゃを潰した後少量のお湯を加えて、なめらかなペースト状にして使いましょう。</p>
          <h4 class="recipe__ttl">煮物に使うときの下ごしらえ</h4>
          <dl class="recipe-design__step mb0" id="mentori">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-09@2x.jpg"
                  alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap10); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-12@2x.jpg"
                  alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap11); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">天ぷらや炒め物、揚げ物に使うときの下ごしらえ</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/31/tech31-10@2x.jpg"
                  alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」' .strip_tags($altCap12)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap12); ?>
            </dd>
          </dl>
          <h3 class="recipe__ttl_l mb2">かぼちゃの保存方法</h3>
          <p class="mb2">かぼちゃを<a href="<?php echo($base_url) ?>/magazine/article/recipe-collect03.php" class="recipe-design__link">保存</a>するときのポイントをお伝えします。</p>
          <h4 class="recipe__ttl_s">切っていない状態…常温保存</h4>
          <p class="mb2">まだ切っていない状態のかぼちゃは常温で保存できます。直射日光の当たらない10℃前後の冷暗所なら、約1～2ヵ月保存が可能です。</p>
          <h4 class="recipe__ttl_s">カット済…冷蔵保存</h4>
          <p class="mb2">スーパーなどでカット済のものを買ったときは、冷蔵庫へ入れてください。<br>種とワタの部分にカビが生えやすいため、冷蔵庫に入れる前に全て取り除いておきます。<br>なるべく空気に触れないように、ぴったりとラップで包んで保存し、早めに使い切りましょう。保存期間の目安は、約5日間です。</p>
          <h4 class="recipe__ttl_s">切った後使い切れなかった…冷凍保存</h4>
          <p class="mb2">切ったかぼちゃを使い切れずに冷凍するときは、まず軽くゆでておきます。よく冷ましたら一食分ずつ小分けにして、それぞれかぼちゃ同士が重ならないように、ラップに包みましょう。最後に数食分まとめてファスナー付き保存袋に入れて、冷凍庫へ入れてください。<br>保存期間の目安は、約2週間です。</p>
        </div>
      </div>
      <?php
        $recipeIcon ='mie_01';
        $speech ='なんとか、かぼちゃを切ることができました<br>マユ先生のおかげです！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='美味しいかぼちゃの見分け方は、皮にツヤがあって、かたく重みがあるものです<br>完熟して甘みが増しているものは、皮全体の色が濃くなるので、かぼちゃを買うときは参考にしてくださいね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='なるほど～。美味しいかぼちゃは見た目にも特徴があるんですね！<br>あとは旬の時期に買えたらばっちりなんだけど…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='かぼちゃの旬、国産は夏から秋です<br>輸入のかぼちゃは冬から春に多くなりますが、<br class="u-only__pc">スーパーでは一年中見かけますよね<br>栄養もたっぷりなので、いろいろなお料理で美味しく食べてくださいね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='ちょうど今の季節が国産かぼちゃの旬なんですね！<br>もうすぐ<a href="'.$base_url.'/magazine/article/recipe11.php" class="recipe-design__link">ハロウィン</a>だし、<br class="u-only__pc">かぼちゃを使って何か作ろうかな～♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<div class="recipe__assist mb3">
				<div class="recipe-assist">
					<div class="recipe-assist__row">
						<h3 class="recipe-assist__ttl">用語解説</h3>
						<dl class="recipe-assist__term">
							<dt>マッシャーとは</dt>
							<dd>ゆでたじゃがいもなどの食材を押し潰すための調理器具。「押し潰す」という意味の英単語・mashが語源。</dd>
						</dl>
					</div>
				</div>
			</div>
			<section class="mb3">
				<h5>■関連記事</h5>
					<ul>
						<li class="recipe-photolist__item recipe-photolist__reciperecommend">
						<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic63.php" class="recipe-photolist__row">
							<img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech63.jpg" alt="裏ごしとは？食材をなめらかにする裏ごしのやり方" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
						  <p class="reciperecommend-ttl">●裏ごしとは？食材をなめらかにする裏ごしのやり方</p>
						</a>
            </li>
						<li class="recipe-photolist__item recipe-photolist__reciperecommend">
						<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic149.php" class="recipe-photolist__row">
							<img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech149.jpg" alt="かぼちゃのポタージュのレシピ。簡単で美味しい作り方をご紹介！" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
						  <p class="reciperecommend-ttl">●かぼちゃのポタージュのレシピ。簡単で美味しい作り方をご紹介！</p>
						</a>
            </li>
					  <li class="recipe-photolist__item recipe-photolist__reciperecommend">
						<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic146.php" class="recipe-photolist__row">
							<img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech146.jpg" alt="グラッセの作り方。プロ並みに美味しく仕上がるレシピをご紹介" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
						  <p class="reciperecommend-ttl">●グラッセの作り方。プロ並みに美味しく仕上がるレシピをご紹介</p>
						</a>
            </li>
          </ul>
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
<?php
    $toindex_url = "/magazine/index_comic02.php";
    include($inc_path . "/lib/inc/toindex__magazin.php");
    ?>
<?php  include($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include($inc_path."/lib/inc/footer.php"); ?>
<?php  include($inc_path."/lib/inc/foot.php");
