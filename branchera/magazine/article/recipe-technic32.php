<?php
//base
include( "../../function.php" );
$content = get_id_data( '15032' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「肉の冷凍保存方法」を動画で解説。美味しさを逃さずに市販の肉を冷凍保存する方法をご紹介します。また、時短調理につながる下味冷凍の方法もご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'xUszaJxQMU4';

//導入文
$introTxt = '第32回は「肉の冷凍保存方法」です。美味しさと新鮮さを保つことができる、肉の冷凍保存方法をご紹介します。';

//キャプチャALTタグ
$altCap01 = '使いやすい分量に、小分けにした肉を平らにします。';
$altCap02 = '水分を拭き取った後、ラップでぴったり包みます。';
$altCap03 = 'ファスナー付きの保存袋に入れて、密閉して冷凍保存します。<br>保存期間の目安は約2週間です。';
$altCap04 = '2～3枚ずつに分けて水分を拭き取ってから、ラップでぴったり包みます。';
$altCap05 = 'ファスナー付きの保存袋に入れて、密閉して冷凍保存します。<br>保存期間の目安は約2週間です。';
$altCap06 = '1切ずつ分けて水分を拭き取ったら、ラップでぴったり包みます。';
$altCap07 = 'ファスナー付きの保存袋に入れて、密閉して冷凍保存します。<br>保存期間の目安は約2週間です。';
$altCap08 = '使いやすい分量に小分けにした肉を、ラップでぴったり包みます。';
$altCap09 = 'ファスナー付きの保存袋に入れて、密閉して冷凍保存します。<br>保存期間の目安は約2週間です。';
$altCap10 = '豚肉の味噌焼き';
$altCap11 = 'ポークケチャップ';
$altCap12 = '';
$altCap13 = '';
$altCap14 = '';

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
        $recipeIcon ='mie_01';
        $speech ='マユ先生、聞いてください！<br>
        最近、冷凍することが便利だと思って、<br class="u-only__pc">
        土日にまとめておかずを作るようになったんです！<br>
        冷凍庫の中は、買い置きしているお肉や魚でいっぱいなんですよ
        ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='毎日お忙しいなかで、工夫しながら作っていて素晴らしいです！<br>ちなみに、お肉や魚ってどうやって冷凍していますか？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='どうやって…？えっと普通にパックのまま冷凍していますよ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='パックのまま冷凍をしてしまうと、<br class="u-only__pc">酸化や雑菌が繁殖しやすくなって生臭くなるんですよ！<br>お肉や魚の冷凍保存は時短的にもオススメですが、冷凍方法を変えてみましょう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_02';
        $speech ='そうなんですね！ずっとパックのまま保存していました…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='パックのまま保存しがちですが、ちょっとした一手間で風味や鮮度を保てるので、<br class="u-only__pc">ぜひ、その保存方法を覚えていきましょう！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie technic">
        <h3 class="recipe-movie__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
           alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
        </h3>
        <div class="recipe-movie__video">
          <div class="recipe-movie__video_base">
            <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">肉のタイプ別！冷凍保存方法</h3>
          <p class="mb2">肉を冷凍保存したのに、生臭くなってしまった…。そんな経験はありませんか？<br>肉は、買ってきたパックのまま冷凍保存すると、空気に触れて酸化し生臭くなってしまいます。美味しさを逃さず保存するためには、まず肉をパックから取り出します。その後、キッチンペーパーなどでしっかりと水分を拭き取り、空気に触れないようにラップで包んで冷凍保存しましょう。</p>
          <h4 class="recipe__ttl">こま切れ肉の場合</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-01@2x.jpg"
                 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-02@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-03@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">薄切り肉の場合</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-04@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-05@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?></dd>
          </dl>
          <h4 class="recipe__ttl">厚切り肉の場合</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-06@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap06)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3" id="hitokuchi">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-07@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap07)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?></dd>
          </dl>
          <h4 class="recipe__ttl">ひき肉の場合</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-08@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap08)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-09@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap09)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?></dd>
          </dl>
          <h3 class="recipe__ttl_l mb0">冷凍した肉の正しい解凍・調理方法とは？</h3>
          <p class="mb2">冷凍肉を美味しくいただくには、解凍方法にコツがあります。一番のポイントは、「ドリップ（肉から出る薄赤い水分）を出さないようにすること」です。ドリップは肉のうまみや栄養素が水分とともに溶け出したもので、肉のパサつきや味が落ちる原因となります。ドリップは、冷凍肉を解凍するときに出やすいですが、適切な方法で解凍を行なえば、ドリップが出るのを防ぐことができますよ。おすすめの解凍方法をお伝えしましょう。</p>
          <h4 class="recipe__ttl">氷水解凍</h4>
          <p class="mb2">最もおすすめの解凍方法は、氷水解凍です。冷凍肉を氷水に浸し、完全に解凍するまで氷を適宜足していきます。美味しく解凍するポイントは、お肉の表面温度を低く保ちながら解凍すること。手間と時間がかかりますが、美味しさを封じ込めたまま解凍できます。</p>
          <h4 class="recipe__ttl">冷蔵庫で自然解凍</h4>
          <p class="mb2">次におすすめするのは、冷蔵庫で自然解凍する方法です。冷凍したお肉の外側と中心部の温度差が少ない状態で解凍されていくため、うまみ成分の肉汁の流出を最小限に抑えることができます。</p>
          <h3 class="recipe__ttl_l mb0">冷凍した肉の注意したい解凍・料理方法</h3>
          <h4 class="recipe__ttl">急激な温度の変化は避ける</h4>
          <p class="mb2">電子レンジ解凍、流水解凍、温湯解凍など、急激な温度の変化が発生する解凍方法は避けたほうがよいとされています。急激な温度の変化は美味しさと品質が損なわれますし、ドリップが出やすくなり、うまみが流出してしまいます。そして、常温解凍は細菌が発生しやすくなるので避けましょう。</p>
          <h4 class="recipe__ttl">解凍直後の肉はすぐに調理しない</h4>
          <p class="mb2">解凍したばかりの肉をすぐに調理するのもNGです！肉の温度と加熱温度に大きな差が出るために、肉がかたくなってしまいます。解凍が終わったら5分程度置いて、火を通すようにしましょう。</p>
          <section>
            <div class="recipe-design__check check mb3">
              <div class="check__row">
                <div class="check__ttl">
                  <h4 class="check__ex center">
                    <img
                    data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png"
                    data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png"
                    alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
                  </h4>
                </div>
                <h3>お肉が臭い？「冷凍焼け」かも</h3>
                <p>冷凍焼けとは長期間冷凍保存することで、食品の水分が抜け、油脂が酸化して風味が落ちてしまう現象です。冷凍焼けすると変色してパサパサになり、冷蔵庫の臭いが付きやすくなります。冷凍焼けを防ぐには、空気に触れないようにしっかりラップで包み、密閉して冷凍することが大切。そして長期間の保存はせずに、2週間以内に解凍・調理することをおすすめします。</p>
              </div>
            </div>
          </section>
          <h3 class="recipe__ttl_l mb0">お手軽！下味冷凍レシピ</h3>
          <p class="mb2">みなさんの中でも、「<a href="<?php echo $base_url ?>/magazine/article/recipe-collect08.php" class="recipe-design__link">作り置きおかず</a>を冷蔵庫に常備している」という方は多いのではないでしょうか？実は、鮮度が気になる肉のおかずも、「下味冷凍」することで安心してストックすることができます。<br>下味冷凍とは、最初に肉に下味を付けた状態で冷凍保存すること。休日など時間がある日にまとめて作っておけば、調理の時短につながります。忙しい日に便利な下味冷凍レシピをご紹介します。</p>
          <h4 class="recipe__ttl"><?php echo ($altCap10); ?></h4>
          <div class="u-clearfix mb2">
            <div class="u-float__left mb2_sp w50">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-10@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap10)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </div>
            <p>
            豚肉を味噌だれに漬けて、そのまま冷凍保存します。お肉もやわらかく、味噌の味がよく染みた濃厚な味噌焼きになります。豚のロース肉をファスナー付き保存袋に入れ、酒、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>、味噌、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic53.php" class="recipe-design__link">生姜</a>のすりおろしを入れてもみ込みます。空気を抜いて、ファスナーを閉じ、冷凍保存します。<br>保存期間の目安は約1ヵ月です。加工しなかった場合2週間程度なので、下味を付けることで少し長持ちします。<br>調理するときは、フライパンにサラダ油を引き、冷凍肉を入れて蓋をします。<a href="<?php echo $base_url ?>/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>でじっくりと蒸し焼きにしましょう。
            </p>
          </div>
          <h4 class="recipe__ttl"><?php echo ($altCap11); ?></h4>
          <div class="u-clearfix">
            <div class="u-float__left mb2_sp w50">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/32/tech32-11@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap11)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </div>
            <p>
            豚ロース肉薄切りと<a href="<?php echo($base_url)?>/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>した玉ねぎを、ファスナー付き保存袋に入れます。ケチャップ、ウスターソース、醤油、にんにくすりおろし、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>、胡椒を入れてもみ込みます。空気を抜きながら密閉するようにジッパーを閉じます。保存期間の目安は約1ヵ月です。<br>調理する際は、フライパンに冷凍した食材を入れ、水を加え、蓋をして蒸し焼きにします。水分がなくなるまで炒め、バターを加えて溶けたら完成です。
            </p>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='mie_01';
        $speech ='パックのまま保存するんじゃなくて、<br class="u-only__pc">この一手間をかけることが鮮度を保つコツなんですね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='食材はしっかり密閉しておかないと、<br class="u-only__pc">冷凍室内で酸化してしまったり、霜が付きやすくなってしまうので、<br class="u-only__pc">しっかり空気を遮断しましょう ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='そういえば、最近ママ友が<a href="'.$base_url.'/magazine/article/recipe-technic63.php#rinyushoku" class="recipe-design__link">離乳食</a>の時短について悩んでいて…<br>離乳食用の鶏ひき肉も冷凍できますか？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='食離乳食用のひき肉は火を通して<a href="'.$base_url.'/magazine/article/recipe-technic90.php" class="recipe-design__link">そぼろ</a>状にした後<br class="u-only__pc">水気をしっかり切って<br class="u-only__pc">1食分ずつラップに包んで冷凍すると便利ですよ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='なるほど！1食分ずつに分かれていると時短になりますね<br>今度会ったときに教えてあげようっと♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15019'),
				array ('recommend-recipe-id','14003'),
				array ('recommend-recipe-id','14008'),
				array ('recommend-recipe-end')

				);
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
			?>
      <div class="mb0">
        <?php	include ($inc_path."/lib/inc/page/_magazine/__recipe-technic-footer.php"); ?>
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
