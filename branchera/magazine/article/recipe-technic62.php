<?php
//base
include( "../../function.php" );
$content = get_id_data( '15062' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「片手で卵を割る方法」を動画で解説。かっこいい上に時短にもつながる、プロの料理人のように片手で卵を割る方法をご紹介します。卵の持ち方をはじめ、きれいに割れてカラが入らないようにするコツもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = '-NlfvLIjGN8';

//導入文
$introTxt = '第62回は「卵を片手で割る方法」です。簡単に片手割りをするコツや、詳しい手順をご紹介します。';

//キャプチャALTタグ
$altCap01 = '片手で卵をやさしく握ります。人差し指と中指で尖っている方を持ち、親指で丸い方を支えてください。
野球のボールを持つようなイメージです。';
$altCap02 = '握った卵を平らな場所で叩き、割れ目を入れます。卵の中心部分に割れ目が入るようにしましょう。';
$altCap03 = '卵の殻を割り開きます。人差し指と中指、そして親指を上下に開いて、真ん中から卵が出るように割りましょう。';
$altCap04 = '';
$altCap05 = '';
$altCap06 = '';
$altCap07 = '';
$altCap08 = '';
$altCap09 = '';
$altCap10 = '';
$altCap11 = '';
$altCap12 = '';
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
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br><?php echo $introTxt ?></p>
      </div>
      <hr class="recipe__line">
      <?php
        $recipeIcon ='papa_02';
        $speech ='えいっ！う～ん、うまく割れないなあ…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='ようマサキ、卵を握りしめて何してるんだ？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_02';
        $speech ='やあ、フラッキー<br>この間テレビのお料理番組を見てたら、<br class="u-only__pc">先生が卵を片手で割ってたんだよね<br>僕もやってみたいんだけど、全然うまくいかなくて…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='卵を片手で割るには、ちょっとしたコツがあるんだ<br>でも、一度覚えれば<br class="u-only__pc">プロみたいに卵を片手で割れるようになるぞ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie-new technic">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl@2x.png"
           alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">卵を片手で割る方法</h3>
          <p class="mb2">卵を片手で割る料理人の姿は、「いかにもプロ！」という雰囲気で格好よく感じますよね。卵を片手で割ることができると、格好よいだけでなく、両手を使うよりスピーディに割ることができるので、料理の作業効率がアップします。卵の片手割りを習得すれば、ご家庭でもプロのような手際で、効率よく料理ができますよ！<br>早速卵の片手割りにトライしてみましょう。</p>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/62/tech62-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/62/tech62-01@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/62/tech62-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/62/tech62-02@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/62/tech62-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/62/tech62-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl_tech">卵を片手で割るときのコツとは？</h4>
          <p>上手に卵を片手で割るためのコツをご紹介します。手順の中でも特に重要なポイントなので、しっかり押さえておきましょう！</p>
          <ul class="u-list__ul_num">
            <li><span>卵は親指、人差し指、中指の3本で握る<br>片手割りを上手に行なうには卵の握り方が重要です。<strong>親指、人差し指、中指で軽く握りましょう。</strong>全部の指でしっかり握ってしまうと、片手だけで卵の殻を割り開くことができません。</span></li>
            <li><span>卵は平らな場所に打ち付ける<br>もうひとつのコツは、卵にヒビを入れる際、<strong>平らな場所に軽く打ち付ける</strong>こと。調理台の角などで行なうと、割れ目が深く入ってしまうので、卵の殻がそのまま崩れやすくなってしまいます。</span></li>
          </ul>
          <p>※両手で卵を割るコツと、卵黄と卵白に分けるときのコツは<a href="<?php echo($base_url)?>/magazine/article/recipe-technic08.php" class="recipe-design__link">こちら</a></p>
          <section>
            <div class="recipe-plus1 mb3">
              <div class="recipe-plus1__row">
                <h4 class="recipe-plus1__ttl">卵を無駄にしない練習方法</h4>
                <p class="mb0">片手でうまく割れないうちは、卵を使わずに練習してみましょう。ピンポン玉かゴルフボール2つを片手で持ち、その間にコインを挟みます。そして、玉は握ったまま、コインだけを下に落とす動作を何度か繰り返しましょう。この動作がスムーズに行なえるようになれば、卵の片手割りもやりやすくなるはずです。</p>
              </div>
            </div>
          </section>
        </div>
      </div>
      <?php
        $recipeIcon ='papa_01';
        $speech ='見てよ～、フラッキー！<br>卵を片手で割れるようになっちゃったよ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='いいぞマサキ！プロの料理人みたいだぜ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='僕にも意外な特技ができちゃったなあ<br>よし、次は右手と左手で、2個同時割りにチャレンジだ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='それじゃあ、卵をたっぷり使った<a href="'.$base_url.'/magazine/article/recipe-technic48.php" class="recipe-design__link">オムレツ</a>でも作ってもらおうかな！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='しばらく<a href="'.$base_url.'/magazine/article/recipe-collect02.php" class="recipe-design__link">卵料理</a>ばかり作ってしまいそうだ～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15008'),
				array ('recommend-recipe-id','15093'),
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
