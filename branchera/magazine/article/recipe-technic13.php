<?php
//base
include("../../function.php");
$content = get_id_data('15013');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「野菜の千切り方法」を動画で解説。にんじん、大根、じゃがいもなど、丸い野菜を千切りにする方法を分かりやすくご紹介します。また、手軽に作れる簡単レシピも合わせてお伝えします。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'zqDTk8EflSM';

//導入文
$introTxt = '第13回は、「千切りの方法」です。千切りはサラダや炒め物など、いろんな用途で使える切り方なので、ぜひ身に付けていきましょう。';

//キャプチャALTタグ
$altCap01 = '野菜を<strong>5～6cm</strong>の長さに切ります。';
$altCap02 = '縦に<strong>2～3mm</strong>の厚さに薄く切って、広い面を作ります。<br>先に野菜の端を薄く切って、その切り口を下にして置くと安定して切りやすくなります。';
$altCap03 = '薄切りにした野菜の切り口を上にして、数枚重ねます。それを少しずつずらして広げてください。';
$altCap04 = '端から<strong>1～2mm</strong>幅に細く切ります。';
$altCap05 = 'ガレットを作る場合は、水にさらさずに使います。水にさらすとデンプン質が流出して、ガレットが固まりづらくなってしまうからです。<br> 千切りしたじゃがいもをフライパンに敷き詰めて、上から押さえ付けるようにして焼きましょう。最後に、塩、こしょうで味付けしてください。外はカリカリ、中はもちもちのガレットのできあがりです！';
$altCap06 = 'シャキシャキとした食感が魅力の白髪ねぎ。薬味を必要とする主菜や、ラーメンなどの汁物によく使われます。';
$altCap07 = 'お弁当やメインの料理にちょっと添えたい、彩りよいにんじんサラダ。まとめて作っても日持ちがするので、とても便利なおかずです。';
$altCap08 = '';
$altCap09 = '';
$altCap10 = '';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';

?>
<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/magazine/", "ブランシエラマガジン");
    $panAry[] = array("/magazine/index_comic02.php", "今さら聞けない料理のアレコレ");
    include($inc_path . "/lib/inc/pan.php");
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
      $recipeIcon = 'mie_01';
      $speech = 'マユ先生、聞いてくださいよ～<br>昨日のお昼、ママ友のお家でごちそうになったんですけど、<br class="u-only__pc">そこに出てきた、にんじんの千切りサラダがとても美味しかったんですよ！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = 'にんじんの千切りサラダ、いいですね！<br>シャキシャキの食感と甘味がクセになりますよね～';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mie_02';
      $speech = 'コウちゃんも気に入ったみたいで<br class="u-only__pc">「にんじんサラダたべたい♪」って言ってくるんですけど<br class="u-only__pc">私が切るとただの野菜スティックになっちゃうんです…';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = 'ミエさん、もしかしたら千切りの方法が間違っているのかもしれませんね<br>正しい千切りの方法をマスターして、コウちゃんを喜ばせましょう！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie technic">
        <h3 class="recipe-movie__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png" alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
        </h3>
        <div class="recipe-movie__video">
          <div class="recipe-movie__video_base">
            <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <h3 class="recipe__ttl_l mb2">野菜別・千切り方法の基本！</h3>
        <p><a href="<?php echo $base_url ?>/magazine/article/recipe09.php" class="recipe-design__link">サラダ</a>や<a href="<?php echo $base_url ?>/magazine/article/recipe01.php" class="recipe-design__link">炒め物</a>など、多くの料理に登場する千切り。食材を1～2mmの細さに切る千切りですが、野菜によってその切り方は異なります。にんじんにはにんじんの、ねぎにはねぎの、そしてキャベツには<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic18.php" class="recipe-design__link">キャベツの千切り</a>の方法があります。野菜別の千切りのコツをお伝えしましょう。</p>
        <h4 class="recipe__ttl" id="sengiri">にんじん、大根の千切り</h4>
        <div class="recipe-design__howto mb3">
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/13/tech13-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/13/tech13-01@2x.jpg" alt="マユ先生のHow To <?php echo ('「' . $pageTtl . '」' . strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/13/tech13-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/13/tech13-02@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/13/tech13-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/13/tech13-03@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb2">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/13/tech13-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/13/tech13-04@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">じゃがいもの千切り</h3>
            <p>まず皮をむき、半分に切ります。切った面をまな板に付け、端から1～2mmの薄切りにします。薄切りにしたじゃがいもを少しずつずらして重ねて、端から1～2mm幅に細く切りましょう。</p>
            <h5 class="recipe__ttl_s">千切りじゃがいものメニュー</h5>
            <div class="u-clearfix mb2">
              <p>
              <figure class="u-float__left">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/13/tech13-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/13/tech13-06@2x.jpg" alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」ガレット｜' . strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <div class="mb2">
                千切りのじゃがいもは、炒め物やサラダ、ガレットなどに使えます。<br>炒め物を作るときは、炒める前にじゃがいもを水にさらしてください。水にさらすと変色を防ぐことができて、熱を加えてもシャキっとした食感を保てます。約10分水にさらしたら、ごま油でサッと炒めて塩・こしょうで味付けしましょう。
              </div>
              <?php echo ($altCap05); ?>
              </p>
            </div>
            <h4 class="recipe__ttl">きゅうりの千切り</h4>
            <p>ヘタを落として、斜めに薄切りします。薄切りしたきゅうりを少しずつずらして重ね、端から1～2mm幅に細く切っていきます。<br>きゅうりの千切りの長さは、斜めに薄切りにするときの角度によって決まります。短くしたいときは角度を小さめに、長くしたいときは大きめにしましょう。</p>
            <h5 class="recipe__ttl_s">千切りきゅうりのメニュー</h5>
            <p>きゅうりの千切りは、サラダや和え物、冷やし中華や<a href="<?php echo $base_url ?>/magazine/article/recipe09.php" class="recipe-design__link">バンバンジー</a>の添え物などによく使われます。いろいろなメニューに使えるので、きゅうりの千切りができると便利です。</p>
            <h4 class="recipe__ttl">ねぎの千切り（白髪ねぎ）</h4>
            <p>長ねぎは5cmほどの長さに切り、繊維に沿って中央まで切り込みを入れます。芯を取り除き、周りの白い部分だけを使って白髪ねぎを作ります。<br>詳しい作り方は、「<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic36.php" class="recipe-design__link">白髪ねぎの作り方</a>」をご覧ください。</p>
            <h5 class="recipe__ttl_s">千切りねぎのメニュー</h5>
            <div class="u-clearfix mb2">
              <p>
              <figure class="u-float__left">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/13/tech13-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/13/tech13-07@2x.jpg" alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」千切りねぎ｜' . strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <?php echo ($altCap06); ?>
              </p>
            </div>
            <div class="recipe-design__plus1 plus1 mb3">
              <section class="plus1__row">
                <h3 class="plus1__ttl">楽に千切りができるアイテム</h3>
                <p class="mb2">千切りや薄切りなどもできるスライサー、千切り用の<a href="<?php echo $base_url ?>/magazine/article/recipe-technic23.php#peeler" class="recipe-design__link">ピーラー</a>、フードプロセッサーなどの調理器具もおすすめです。形が不揃いにならない上に、あっという間に千切りができてしまいます。料理の時間を短縮したい方は、使ってみてはいかがでしょうか？</p>
              </section>
            </div>
            <h3 class="recipe__ttl_l mb0">野菜の千切りを使った簡単レシピ</h3>
            <p class="mb2">野菜の千切りを使って、簡単に作ることができるレシピをご紹介します。</p>
            <h4 class="recipe__ttl">にんじんの千切りのサラダ</h3>
              <div class="u-clearfix mb3">
                <p>
                <figure class="u-float__left">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/13/tech13-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/13/tech13-08@2x.jpg" alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」にんじんの千切りのサラダ｜' . strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
                </figure>
                <?php echo ($altCap07); ?>
                <div class="mt2">
                  にんじんの千切りに塩を振って揉み、水気を絞ります。酢（またはレモン汁）とオリーブオイル、塩、こしょうを加えて、混ぜ合わせたらできあがり。<br>
                  保存容器に入れて冷蔵庫で保存すると、約3～4日持ちます。
                </div>
                </p>
              </div>
              <h4 class="recipe__ttl">玉ねぎと干し桜えびのチーズチヂミ（にんじんの千切りを使用）</h3>
                <p class="mb2">人気の韓国料理・チーズチヂミにも、にんじんの千切りは相性抜群です。香ばしい玉ねぎと干し桜えびに、にんじんの甘味が合わさって、子どもも大人も楽しめる一品。</p>
                <p class="mb3">詳しい作り方は、「<a href="<?php echo ($base_url) ?>/magazine/article/recipe07.php" class="recipe-design__link">玉ねぎと干し桜えびのチーズチヂミ</a>」をご覧ください。</p>
                <h4 class="recipe__ttl">バンバンジーサラダ（きゅうりの千切りを使用）</h3>
                  <p class="mb2">さっぱりとしていてボリューム満点。そしてコクのあるごまだれが美味しいバンバンジーサラダ。<br>きゅうりの千切りが引き立つバンバンジーサラダにトライしてみましょう。鶏肉はレンジでチンするだけ！簡単にできる人気のレシピです。</p>
                  <p>詳しい作り方は、「<a href="<?php echo ($base_url) ?>/magazine/article/recipe09.php" class="recipe-design__link">レンジで簡単バンバンジーサラダ</a>」をご覧ください。</p>
        </div>
      </div>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = '千切りは、メインの料理の上に乗せても彩りがよくなりますよ<br>メイン料理から副菜まで、さまざまな料理に使える切り方なんです！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mie_01';
      $speech = 'いつも千切りが太くなっちゃっていたけど、<br class="u-only__pc">今日教えてもらった通りにやったら、きれいに切ることができました！<br>さっそくコウちゃんに、にんじんの千切りサラダを作ってあげようかな♪';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      //関連記事
      $recommendrecipe = array(
        array('recommend-recipe-st'),
        array('recommend-recipe-id', '15036', 'cooking_2208_1'),
        array('recommend-recipe-id', '15018', 'cooking_2208_2'),
        array('recommend-recipe-id', '15023', 'cooking_2208_3'),
        array('recommend-recipe-end')

      );
      include($inc_path . "/lib/inc/page/_magazine/__recipe-tech-recommend.php");
      ?>

      <div class="mb0">
        <?php
        include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-footer.php");
        ?>
      </div>
    </section>
  </article>
</main>
<?php include($inc_path . "/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<?php
$toindex_url = "/magazine/index_comic02.php";
include($inc_path . "/lib/inc/toindex__magazin.php");
?>
<?php include($inc_path . "/lib/inc/pagetop.php"); ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php");
