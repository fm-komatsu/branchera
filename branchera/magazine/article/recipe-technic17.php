<?php
//base
include("../../function.php");
$content = get_id_data('15017');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「包丁の使い方と基本の切り方」を動画で解説。安全で、効率よい調理に役立つ正しい包丁の使い方と基本の切り方をご紹介します。「猫の手」の形の確認や、切り方の種類、包丁の動かし方など、基本を詳しくお伝えします。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = '1wNcfXgZZjw';

//導入文
$introTxt = '第17回は、「包丁の使い方と基本の切り方」です。正しく包丁を使うことで、安全に手際よく料理をすることができます。';

//キャプチャALTタグ
$altCap01 = '包丁を使うときは、食材を持つ方の手の添え方も大切です。<br>手を丸めて食材に添え、<strong>指の第一関節</strong>が包丁の腹（側面）に当たるようにします。よく「猫の手」といわれる添え方です。<br>コツは、親指もきちんと曲げること。親指を伸ばしたままで包丁を使うと、指を切ってしまう恐れがあるので注意しましょう。';
$altCap02 = '親指が人差し指や中指より出ている';
$altCap03 = '指を伸ばしている';
$altCap04 = '食材を強く握っている';
$altCap05 = '包丁の腹を人差し指の<strong>第一関節</strong>に付けて、ガイドにします。';
$altCap06 = '包丁を手前に引いたり、奥に押したりといった<strong>前後の動き</strong>で切っていきます。上から下へ力を入れて切るのではなく、前後に引く、押すの動作で切りましょう。';
$altCap07 = '<a href="' . $base_url . '/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>も、素早く包丁を前後に動かして切ります。包丁の刃を大きく動かすことで、素材の繊維を潰さずにきれいに切ることができます。';
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
      $recipeIcon = 'mie_02';
      $speech = 'うーん…やっぱりマユ先生のように<br class="u-only__pc">上手くいかないなぁ';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_03';
      $speech = 'にんじんを切りながらどうしたんですか？<br>わっ！ミエさん、添える手が危ないですよ！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mie_03';
      $speech = 'え！？違うんですか？<br>切る際に添える手は丸めてって本に書いてあったんですけど';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_03';
      $speech = '確かに添える手は丸めるのですが、<br class="u-only__pc">この丸め方だと、親指を切ってしまいます！<br>添える手は“猫の手”を意識してみましょう';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mie_03';
      $speech = '“猫の手”ってよく聞いたことはあるのですが、<br class="u-only__pc">ちゃんと理解していないかも…<br>';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = 'それでは正しい猫の手の形と<br class="u-only__pc">包丁の使い方を学んでいきましょう';
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
        <h3 class="recipe__ttl_l mb2">包丁を使う前に、基本をおさらい！</h3>
        <p class="mb2">包丁の使い方と基本の切り方を学ぶ前に、正しい包丁の持ち方と姿勢についてもう一度整理しましょう。</p>
        <h4 class="recipe__ttl">包丁の持ち方・姿勢</h4>
        <p class="mb2">箸や筆と同じように、<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic01.php" class="recipe-design__link">包丁にも正しい持ち方・使うときの姿勢</a>があります。身に付けると、お料理の効率がグンとアップしますよ。</p>
        <h4 class="recipe__ttl">手の添え方</h4>
        <div class="recipe-design__howto mb3">
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/17/tech17-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/17/tech17-01@2x.jpg" alt="マユ先生のHow To <?php echo ('「' . $pageTtl . '」' . strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
          </dl>
          <div class="recipe-design__check check mb3">
            <div class="check__row">
              <div class="check__ttl">
                <h4 class="check__ex center">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png" alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
                </h4>
              </div>
              <h3>両刃の包丁は右利き、左利きどちらでも使用可能！</h3>
              <p>一般的に家庭で使われている三徳包丁や牛刀は、包丁の両面に刃が付いている「両刃」。基本的に両刃の包丁は、右利き、左利きどちらでも使用できます。持ち手を変えても、食材に対する刃の入り方は変わらないからです。</p>
              <p>一方、主に魚をさばくときに使われる出刃包丁は、片面にだけ刃が付いている「片刃」。片刃の包丁は持ち手によって、食材に対する刃の入り方が大きく変わってしまいます。<br>そのため、左利きの人は左利き用に作られた出刃包丁か、両刃仕様（右利き左利き兼用）の出刃包丁を使いましょう。</p>

            </div>
          </div>
          <div class="recipe-design__plus1 plus1 mb3">
            <div class="plus1__row">
              <h3 class="plus1__ttl">こんな添え方は危険！</h3>
              <p>ケガの恐れがある、危ない添え方をご紹介します。うっかりやらないように気を付けましょう！</p>
              <dl class="recipe-design__step mb0">
                <dt class="recipe-design__step_img">
                  <figure>
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/17/tech17-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/17/tech17-02@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
                  </figure>
                </dt>
                <dd class="recipe-design__step_txt">
                  <?php echo ($altCap02); ?>
                </dd>
              </dl>
              <dl class="recipe-design__step mb2">
                <dt class="recipe-design__step_img">
                  <figure>
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/17/tech17-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/17/tech17-03@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
                  </figure>
                </dt>
                <dd class="recipe-design__step_txt">
                  <?php echo ($altCap03); ?>
                </dd>
              </dl>
              <dl class="recipe-design__step mb0">
                <dt class="recipe-design__step_img">
                  <figure>
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/17/tech17-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/17/tech17-04@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
                  </figure>
                </dt>
                <dd class="recipe-design__step_txt">
                  <?php echo ($altCap04); ?>
                </dd>
              </dl>
            </div>
          </div>
          <h3 class="recipe__ttl_l mb2">正しい包丁の使い方</h3>
          <p class="mb2">安全かつスムーズな調理のために、正しい包丁の使い方を身に付けましょう。作業が早くなる＆手が疲れにくくなると同時に、滑ったり落としたりといったトラブルも防ぐことができます。</p>
          <h4 class="recipe__ttl">基本の切り方</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/17/tech17-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/17/tech17-05@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/17/tech17-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/17/tech17-06@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/17/tech17-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/17/tech17-07@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <section>
            <h4 class="recipe__ttl">食材によって使い分ける2種類の切り方</h4>
            <p class="mb2">包丁を使った食材の切り方は、主に「押し切り」と「引き切り」の2種類に分けられます。この2種類の切り方は、食材の細胞組織（繊維）のかたさによって使い分ける必要があります。それぞれどのようなかたさの食材で用いるのか、見ていきましょう！</p>
            <h5 class="recipe__ttl_s">押し切り</h5>
            <p class="mb2">野菜やかたい肉を切るときの切り方です。繊維が粗い野菜やかたい肉の場合は、力の入りやすい「押し切り」が適しています。<br>包丁を奥に押すようにしながら切りましょう。特にかたいものを押し切りする際は、包丁の峰（背の部分）に持ち手と反対の手を添えて押してください。</p>
            <h5 class="recipe__ttl_s">引き切り</h5>
            <p class="mb2"><a href="<?php echo $base_url ?>/magazine/article/recipe-technic41.php" class="recipe-design__link">魚</a>ややわらかい肉を切るときの切り方です。力が入りにくい切り方なので、食材の細胞繊維が潰れにくくなります。<br>包丁を手前に引き、刃の長さを利用するようにして切りましょう。刺身の断面も、凹凸が少なくなめらかに仕上がりますよ。</p>
          </section>
          <h3 class="recipe__ttl_l mb2">切り方の種類と名前を覚えよう！</h3>
          <p class="mb2">どんな切り方で食材を切るかは、料理の見た目と味わいに大きくかかわってきます。主な切り方の種類を覚えて、メニューごとに使い分けられるようにしておきましょう！<br>今回は、野菜を切る「押し切り」の中から、代表的な切り方をご紹介します。</p>
          <h4 class="recipe__ttl"><a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a></h4>
          <p class="mb2">食材を1～2mm角くらいに細かく切り刻む方法です。玉ねぎ、にんじん、長ねぎなどに使われます。</p>
          <h4 class="recipe__ttl"><a href="<?php echo $base_url ?>/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a></h4>
          <p class="mb2">幅は1～2mm、長さは4～6cmくらいに細く切る方法です。<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic18.php" class="recipe-design__link">キャベツ</a>、だいこん、<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic13.php#sengiri" class="recipe-design__link">にんじん</a>、たけのこなどに使われます。</p>
          <h4 class="recipe__ttl"><a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic61.php" class="recipe-design__link">乱切り</a></h4>
          <p class="mb2">棒状の食材を手前に回しながら、不規則な形に切る方法です。ただし、大きさは揃えるのがポイント。<br>断面が多く火の通りがよくなるので、煮物に入れる<a href="<?php echo $base_url ?>/magazine/article/recipe-technic153.php" class="recipe-design__link">にんじん</a>、ごぼうなどに使われます。</p>
          <h4 class="recipe__ttl"><a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a></h4>
          <p class="mb2">髪をとかすくしのような形に切る方法です。<a href="<?php echo $base_url ?>/magazine/article/recipe-technic74.php" class="recipe-design__link">トマト</a>、玉ねぎ、かぼちゃなど、丸い食材に使われます。</p>
          <h4 class="recipe__ttl"><a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a></h4>
          <p class="mb2">棒状の食材を、切り口が輪の形になるように端から切る方法です。一定の厚みを保つように切りましょう。きゅうり、なす、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic146.php" class="recipe-design__link">にんじん</a>などに使われます。</p>
          <h4 class="recipe__ttl"><a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic59.php" class="recipe-design__link">半月切り</a></h4>
          <p class="mb2">輪切りを半分にして、半月型に切る方法です。<br>輪切りと同じ棒状の食材に使われます。先に縦割りにして半月型にしてから、輪切りと同じように端から切っていきましょう。</p>
          <h4 class="recipe__ttl"><a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic11.php" class="recipe-design__link">いちょう切り</a></h4>
          <p class="mb0">半月切りを半分にした、いちょうの葉のような扇型に切る方法です。先に半月切りにしてから切るほか、4分の1に縦割りしたものを端から切っていく方法もあります。<br>主に、煮物や汁物に入れるにんじん、だいこんなどに使われます。</p>
        </div>
      </div>
      <?php
      $recipeIcon = 'mie_01';
      $speech = 'うぅ…ちょっとぎこちなくなっちゃうな…<br>でも、マユ先生みたいに<br class="u-only__pc">スムーズに包丁を使えるようになりたい！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = '最初は、切りづらいかもしれませんが<br class="u-only__pc">正しく包丁を使うことは料理の基本ですよ！<br>がんばって練習しましょうね';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      //関連記事
      $recommendrecipe = array(
        array('recommend-recipe-st'),
        array('recommend-recipe-id', '15035', 'cooking_2208_1'),
        array('recommend-recipe-id', '15024', 'cooking_2208_2'),
        array('recommend-recipe-id', '15131', 'cooking_2208_3'),
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
