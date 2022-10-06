<?php
//base
include( "../../function.php" );
$content = get_id_data( '15018' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「キャベツの千切り方法」を動画で解説。揚げ物に添えたり、サラダにしたりと何かと役立つ千切りキャベツ。シャキシャキ、ふわふわの食感に仕上げるコツをご紹介します。また、おすすめレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'M6yPdJgoz1s';

//導入文
$introTxt = '第18回は、「ふわふわなキャベツの千切りを作る方法」です。均一に切ることで、心地よく軽い歯ごたえで、ふわふわの食感になる千切りの方法をご紹介します。';


//キャプチャALTタグ
$altCap01 = 'キャベツの葉を1枚ずつはがし、太い芯に沿って切り込みを入れて芯を切り取ります。';
$altCap02 = '繊維の向きに合わせて重ね、さらに半分に切ります。';
$altCap03 = '繊維が横になるように重ねて巻きます。';
$altCap04 = '巻いた状態のまま、手で押さえて少し平らにします。端から1mmの幅で、細く均一に切っていきます。<br>包丁を手前から奥に押すように切ると、切りやすいです。';
$altCap05 = 'キャベツを1/4サイズに切り、芯を取り除きます。';
$altCap06 = '葉を半分ずつくらいの量で、内側、外側に分けます。';
$altCap07 = 'まな板にぎゅっと押し付けて少し平らにし、繊維が横になるように置きます。<br>端から1mmの幅で、細く均一に切っていきましょう。';
$altCap08 = '中心に近付くと切り口が長くなり、切りづらくなってきます。<a href="'.$base_url.'/magazine/article/recipe-technic17.php" class="recipe-design__link">包丁</a>の向きを少し斜めにすると、細く千切りしやすくなりますよ。';
$altCap09 = '千切りキャベツは、冷水に1～2分さらすことでシャキッとした食感に仕上がります。';
$altCap10 = '千切りキャベツ';
$altCap11 = '炒めて美味しい！自家製ホットドッグ';
$altCap12 = 'キャベツ';

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
        $recipeIcon ='mayu_01';
        $speech ='あれ、マサキさん！<br>大きなキャベツを抱えてどうしたんですか？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='masaki_01';
        $speech ='この間、トンカツ屋さんで食べたふわふわでシャッキシャキ！の<br class="u-only__pc">キャベツの千切りを再現したくなっちゃって…<br>思わず、キャベツを買ってきてしまいました！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='確かに、トンカツ屋さんのキャベツの千切りって美味しいですよね！<br>私も好きで、食べに行くと毎回お代わりしてしまいます';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='masaki_01';
        $speech ='何回も挑戦しているんですけど、なかなかスムーズに切れなくて…<br>僕、かっこよくスマートに切って<br class="u-only__pc">料理ができる男って思われたいんです！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='料理ができる男…素敵ですね！<br>キャベツの千切りは、<a href="'.$base_url.'/magazine/article/recipe-technic09.php" class="recipe-design__link">揚げ物</a>の添え野菜になったり、<a href="'.$base_url.'/magazine/article/recipe-technic143.php" class="recipe-design__link">お好み焼き</a>やスープに入れたりと<br class="u-only__pc">何かと重宝するので、ぜひマスターしてください！';
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
          <h3 class="recipe__ttl_l mb0">基本の千切り方法とは？</h3>
          <p class="mb3">丸ごと買うと、ドーンと迫力のあるキャベツ。千切りを作る際、食べる人数や料理によって必要な量も変わってきますよね。少しだけ千切りにしたいとき、たっぷり作りたいとき…それぞれの場合に適した千切り方法をご紹介します。<br>※キャベツ以外の野菜の千切り方法は「<a href="<?php echo($base_url)?>/magazine/article/recipe-technic13.php" class="recipe-design__link">千切りのやり方はこれで完璧！楽々やるコツを伝授</a>」をご覧ください。</p>
          <h4 class="recipe__ttl">少量を千切りする場合</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-01@2x.jpg"
                 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-02@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-03@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-04@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">丸ごと千切りする場合</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-05@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-06@2x.jpg"
                 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px"
                 class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-07@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-08@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-09@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?></dd>
          </dl>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">キャベツの千切りをもっと手軽に作りたい！</h3>
              <div class="u-clearfix">
                <figure class="u-float__right">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-10@2x.jpg"
                  alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
                </figure>
                <p class="mb2">切る幅でふわふわ加減が変わるキャベツの千切り。包丁使いが苦手な人にとって、均一に切っていくキャベツの千切りは、思ったより難しいものですよね。<br>そんなときには、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic23.php" class="recipe-design__link">ピーラー</a>を使いましょう！ピーラーは皮をむくだけでなく、野菜を薄切りや千切りにしたいときも活躍します。</p>
                <p class="mb2">方法は簡単。キャベツは1/4または、1/2サイズにカットしたものを使います。切り口に対して少し斜めになる角度で、軽くピーラーの刃を当てて引いていけばOK。普通サイズのピーラーでも作れますが、千切り用の幅の広いピーラーを使うと、より簡単に手早く作れますよ。<br>また、大量に千切りしたい場合はスライサーが役立ちます。板状の本体に刃が付いているスライサーなら、直接キャベツの断面を刃に当てて前後に動かすだけでOK。一気に均一な細さの千切りを作ることができます。</p>
                <p>また、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>などに使われるフードプロセッサーの中にも、千切り機能が付いているものがあります。ぜひ自分に合った方法で、千切りにチャレンジしてみてくださいね。</p>
              </div>
            </section>
          </div>
          <h3 class="recipe__ttl_l mb1">キャベツの千切りの保存方法</h3>
          <h4 class="recipe__ttl">冷蔵の場合</h4>
          <p class="mb2">余ったキャベツの千切りは、冷蔵庫で保存できます。その際、レモンや<a href="<?php echo($base_url)?>/magazine/article/recipe-technic22.php#osu" class="recipe-design__link">お酢</a>にサッとくぐらせて水分を切り、ポリ袋に入れてください。酸化を防いで、色と食感を新鮮な状態に保つことができます。ボウルに水を張って、水に漬けたまま冷蔵庫で保存してもOKです。<br>その際、やはりレモンやお酢を数滴入れて保存すると酸化防止になります。水は毎日取り変えるようにしてくださいね。保存期間の目安は、約2日間です。</p>
          <h4 class="recipe__ttl">冷凍の場合</h4>
          <p class="mb2">長く保存したい場合は、冷凍保存がおすすめです。<br>まず、千切りを熱湯に5～10秒ほどくぐらせて、冷水を張ったボウルに取ります。キッチンペーパーなどでしっかりと水を切ったら、保存容器に入れて冷凍庫に入れましょう。</p>
          <p class="mb4 mb2_sp">ポイントは必ず「熱湯にくぐらせて」冷凍すること！生のまま冷凍すると、解凍したときに細胞壁が壊れてふにゃっとした状態になってしまいます。その代わり、熱湯にくぐらせるとシャキシャキ感は保たれないので、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic39.php" class="recipe-design__link">お味噌汁</a>や<a href="<?php echo($base_url)?>/magazine/article/recipe-technic152.php" class="recipe-design__link">煮物</a>、和え物など、食感が気にならない料理に使うようにしましょう。保存期間の目安は、約2週間です。</p>
          <h3 class="recipe__ttl_l mb1">キャベツの千切りを使った簡単アレンジレシピ</h3>
          <h4 class="recipe__ttl">そのまま和えるだけ！パスタサラダ</h4>
          <p class="mb2">ゆでた<a href="<?php echo($base_url)?>/magazine/article/recipe-technic64.php" class="recipe-design__link">パスタ</a>に、千切りキャベツ、ハム、きゅうりの千切り、ツナやざく切りにした<a href="<?php echo($base_url)?>/magazine/article/recipe-technic10.php" class="recipe-design__link">ゆで卵</a>などを加えます。<a href="<?php echo($base_url)?>/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>・こしょうとお酢、マヨネーズで味付けして和えればできあがり！<br>キャベツが入ることで栄養バランスもよく、食べ応えのあるパスタサラダになります。</p>
          <h4 class="recipe__ttl">レンジで簡単！巣ごもり風卵</h4>
          <p class="mb2">千切りキャベツはそのまま食べるだけでなく、加熱しても美味しく食べることができます。千切りキャベツを小さなココット皿に入れて、電子レンジで温めてしんなりさせます。軽く塩・こしょうを加えて味付けし、中央を少し窪ませたら、そこに<a href="<?php echo($base_url)?>/magazine/article/recipe-technic62.php" class="recipe-design__link">卵</a>を割り入れましょう。<br>卵が爆発しないように箸でつついて穴を開け、再び電子レンジで少々加熱。半熟気味で仕上げれば、巣ごもり風卵のできあがり！パンにもご飯にも合う一品です。</p>
          <h4 class="recipe__ttl"><?php echo ($altCap11); ?></h4>
          <div class="u-clearfix">
           <figure class="u-float__left">
             <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-11@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p class="mb2">千切りキャベツは炒めると、自家製ホットドッグとの相性バツグン！サラダ油でサッと炒めて塩・こしょうを加えたら、切り込みを入れたロールパンにたっぷり挟みましょう。そこに加熱したソーセージを挟めばできあがり！トーストにのせたり、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic57.php" class="recipe-design__link">イングリッシュマフィン</a>に挟んでも美味しいですよ。</p>
          </div>
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
                <h3>ヘルシー食材「キャベツ」ってどんな野菜？</h3>
                <p class="mb2">いろいろな料理に使えるキャベツ。どのような特徴がある野菜なのでしょう？</p>
                <div class="u-clearfix">
                  <figure class="u-float__right">
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/18/tech18-12@2x.jpg"
                  alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap12)); ?>" style="max-width:300px" class="u-img__max">
                  </figure>
                  <p class="mb2">キャベツはアブラナ科の野菜で、大変栄養価の高い葉物野菜です。中でも「キャベジン」と呼ばれるビタミンUが多く含まれています。これはキャベツ特有の栄養素で、胃酸の過剰分泌の抑制や、胃や十二指腸の傷付いた粘膜を保護・修復する作用があるといわれています。揚げ物や脂っこいものに添えられる千切りキャベツには、胃もたれを防ぐ効果もあったのですね。<br>ほかにも、細胞の修復を助け、免疫力を高めるビタミンCや、ビタミンK、カルシウム、食物繊維も大変豊富に含まれています。また、生食でのキャベツの熱量（カロリー）は100g当たり約23kcalと、とってもヘルシー！</p>
                  <p>さらに、スーパーで1年中売られていて手軽に購入できるうえ、野菜炒めやお好み焼き、付け合わせのサラダ、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic153.php" class="recipe-design__link">ポトフ</a>…とアレンジの幅も豊富。毎日の食卓に、積極的に取り入れたい万能野菜です♪</p>
                </div>

              </div>
            </div>
          </section>
        </div>
      </div>
      <?php
        $recipeIcon ='masaki_01';
        $speech ='わぁ～！マユ先生が切ったキャベツの千切り<br>細くてふわふわですね！<br>それに比べて、僕の千切りはまだまだだな…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='マサキさんのキャベツの千切り、前と比べると<br class="u-only__pc">すごく細く切れていますよ！<br>切り方の姿勢もスマートになりましたね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='masaki_01';
        $speech ='もっともっと細く切れるように、いっぱい練習をしないと！<br>今度お好み焼き<a href="'.$base_url.'/magazine/article/recipe-collect06.php" class="recipe-design__link">パーティー</a>をするときに<br class="u-only__pc">ママとコウちゃんをビックリさせちゃおう♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15143'),
				array ('recommend-recipe-id','14006'),
				array ('recommend-recipe-id','14004'),
				array ('recommend-recipe-end')

				);
			?>
			<?php
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
			?>
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
  include( $inc_path . "/lib/inc/toindex__magazin.php" );
  ?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
