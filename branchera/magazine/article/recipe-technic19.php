<?php
//base
include("../../function.php");
$content = get_id_data('15019');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「基本の肉の下ごしらえ方法」を動画で解説。肉の種類や部位別に、下ごしらえの手順をご紹介します。ドリップの拭き取り方や筋取りの仕方はもちろん、時短につながる「下味冷凍」の方法もお伝えします。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'JDv3c2T9wPE';

//導入文
$introTxt = '第19回は、「肉の下ごしらえ」です。肉の生臭さを軽減したり、やわらかくしたりする下ごしらえの方法をご紹介します。';

//キャプチャALTタグ
$altCap01 = '豚肉は、部位ごとに肉質が大きく異なり、脂肪と赤身の割合に応じて調理方法を選びます。';
$altCap02 = '鶏肉は、全体的に脂肪が少なく淡泊な味わい。筋肉と繊維質で引き締まった肉質が特徴です。';
$altCap03 = '牛肉は、肉の部位と肉質によってさまざまな調理法が用いられ、新鮮なものは生で食べられることもあります。';
$altCap04 = '肉を美味しく調理したいときに、下ごしらえは欠かせません。といっても、難しいことをする必要はなく、簡単なポイントを押さえておけば大丈夫です。どんなことに気を付ければよいのでしょうか？';
$altCap05 = '肉の余分な水分（ドリップ）を拭き取ります。拭き取ることで、肉に味が染み込みやすくなります。';
$altCap06 = 'とんかつやポークソテーなど、厚切り肉は焼き縮んだり、肉が反り返ったりするのを防ぐため、筋を切ります。赤身と脂の間にある白い筋に包丁の先で3～4箇所切り込みを入れます。裏側も同様に切り込みを入れてください。';
$altCap07 = '肉の余分な水分（ドリップ）を拭き取ります。';
$altCap08 = '周りに大きくはみ出ている余分な脂は指先でつまみ、包丁でそぎ取ります。';
$altCap09 = '筋は指先でつまみながら切り取ります。<br>余分な脂や筋を切り取ることで、調味料がなじみやすくなり、口当たりがよくなります。';
$altCap10 = '肉の余分な水分（ドリップ）を拭き取ります。';
$altCap11 = '皮側を下にして置き、中央から両端に向かって、包丁を寝かせながら、身をそぐように開きます。';
$altCap12 = '切り開く際は、肉を切り落とさないように、添えた手で身を開きながら切りましょう。';
$altCap13 = '上下をひっくり返し、もう片方を同様に切り開いていきます。厚みを揃えることで、火の通りが均一になります。';
$altCap14 = '';
$altCap15 = '';

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
      $speech = 'あ～、厚切りの豚肉に甘辛のたれ、<br class="u-only__pc">やわらかくてジューシーなトンテキが食べたい！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = 'トンテキ、いいですね！<br>スタミナたっぷりで、香ばしい香りに食欲がそそられますよね';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mie_01';
      $speech = 'この間見たテレビでトンテキ特集をやっていて、<br class="u-only__pc">真似して家で作ってみたんですけど、反り返って肉が縮んでしまったんです…<br>なかなかお店のようにはできないですね';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = 'ミエさん、お肉の下ごしらえはちゃんとしましたか？<br>ちゃんと下ごしらえをすれば、縮まずやわらかくなって<br class="u-only__pc">さらに美味しくなるんですよ！<br>お肉の種類によって下ごしらえの方法が違うので、ぜひ、覚えて帰ってくださいね';
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
        <h3 class="recipe__ttl_l mb2">肉の種類・部位別、向いているメニューは？</h3>
        <p class="mb2">子どもから大人まで、みんなに人気の肉料理。日本で家庭料理に使われているのは主に牛、豚、鶏の3種類ですが、それぞれ部位ごとに適した調理法があります。<br>下ごしらえの前に、まず肉の基本知識を頭に入れておきましょう。</p>
        <div class="recipe-design__howto mb3">
          <section>
            <h4 class="recipe__ttl">豚肉</h4>
            <div class="u-clearfix">
              <p>
              <figure class="u-float__right">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-01@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」豚肉｜' . strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap01); ?>
              </span>
              </p>
            </div>
            <h5 class="recipe__ttl_s">肩ロース＆ロース</h5>
            <p>赤身と脂肪が程よく混ざった部位。<a href="<?php echo ($base_url) ?>/magazine/article/recipe01.php" class="recipe-design__link">炒め物</a>によく使われます。<br>向いているメニュー：しょうが焼き、酢豚、ポークソテー、とんかつ など</p>
            <h5 class="recipe__ttl_s">もも</h5>
            <p>脂肪が少なく赤身が多い部位。比較的低カロリーで、厚切りでも、薄切りでも使われます。<br>向いているメニュー：<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic110.php" class="recipe-design__link">焼き豚</a>、ローストポーク、<a href="<?php echo ($base_url) ?>/magazine/article/recipe08.php" class="recipe-design__link">冷しゃぶ</a> など</p>
            <h5 class="recipe__ttl_s">バラ</h5>
            <p>脂肪が多く、赤身と交互に層になっている部位。脂のうまみが濃厚で、<a href="<?php echo ($base_url) ?>/magazine/article/recipe19.php" class="recipe-design__link">煮込み料理</a>や炒め物に適しています。<br>向いているメニュー：<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic152.php" class="recipe-design__link">角煮</a>、焼き豚、バーベキュー など</p>
            <h5 class="recipe__ttl_s">ヒレ</h5>
            <p>やわらかく淡泊な風味の赤身で、一頭の豚から取れる量が少ない部位。厚切りで使うことが多いです。<br>向いているメニュー：とんかつ、ソテー、ピカタ など</p>
          </section>
          <section>
            <h4 class="recipe__ttl">鶏肉</h4>
            <div class="u-clearfix">
              <p>
              <figure class="u-float__right">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-02@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」鶏肉｜' . strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap02); ?>
              </span>
              </p>
            </div>
            <h5 class="recipe__ttl_s">もも</h5>
            <p>筋肉質でうまみの多い部位。脂肪も適度にあり、いろいろな料理に使われます。<br>向いているメニュー：<a href="<?php echo ($base_url) ?>/magazine/article/recipe04.php" class="recipe-design__link">から揚げ</a>、ローストチキン、筑前煮 など</p>
            <h5 class="recipe__ttl_s">むね</h5>
            <p>脂肪が少なく、淡泊で繊維質の多い部位。焼く、蒸すなどの調理法に適しています。<br>向いているメニュー：<a href="<?php echo ($base_url) ?>/magazine/article/recipe09.php" class="recipe-design__link">バンバンジー</a>、<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic144.php" class="recipe-design__link">蒸し鶏</a>、チキン南蛮 など</p>
            <h5 class="recipe__ttl_s">ささみ</h5>
            <p>やわらかくて脂肪が少なく、タンパク質の最も多い部位。離乳食にも使われます。<br>向いているメニュー：サラダ、和え物、<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic30.php" class="recipe-design__link">蒸し料理</a> など</p>
            <h5 class="recipe__ttl_s">皮</h5>
            <p>ほとんどが脂肪で、うまみの多い部位。濃厚な風味なので、使用すると料理やスープにコクが出ます。<br>向いているメニュー：焼き鳥、スープストック、炒め物 など</p>
            <h5 class="recipe__ttl_s">手羽先＆手羽元</h5>
            <p>骨の付いた翼の周囲の部位。よく動かす場所のため、筋肉、脂肪やゼラチン質が豊富で、うまみが多い部位です。<br>向いているメニュー：から揚げ、<a href="<?php echo ($base_url) ?>/magazine/article/recipe18.php" class="recipe-design__link">カレー</a>、甘辛煮、タンドリーチキン など</p>
          </section>
          <section>
            <h4 class="recipe__ttl">牛肉</h4>
            <div class="u-clearfix">
              <p>
              <figure class="u-float__right">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-03@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」牛肉｜' . strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap03); ?>
              </span>
              </p>
            </div>
            <h5 class="recipe__ttl_s">肩</h5>
            <p class="mb2">筋肉が発達した、やや硬めの部位。濃厚なだしが出るので煮込みやスープにも使われます。<br>向いているメニュー：ビーフシチュー、カレー、<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic153.php" class="recipe-design__link">ポトフ</a> など</p>
            <h5 class="recipe__ttl_s">肩ロース</h5>
            <p class="mb2">赤身中心で肉質はやわらかめの部位。厚切りでも薄切りでも調理でき、いろいろなメニューに用いやすいです。<br>向いているメニュー：<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic116.php" class="recipe-design__link">すき焼き</a>、しゃぶしゃぶ、<a href="<?php echo ($base_url) ?>/magazine/article/recipe12.php" class="recipe-design__link">ローストビーフ</a>、ハッシュドビーフ など</p>
            <h5 class="recipe__ttl_s">サーロイン</h5>
            <p class="mb2">筋肉が少なく、比較的やわらかい背中の部位。シンプルに焼いてうまみを味わうのがおすすめです。<br>向いているメニュー：<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic55.php" class="recipe-design__link">ステーキ</a> など</p>
            <h5 class="recipe__ttl_s">バラ</h5>
            <p class="mb2">あばら骨周辺の、濃厚な味わいとうまみが特徴の部位。薄切りにして使うことが多いです。<br>向いているメニュー：焼肉のカルビ、牛丼 など</p>
            <h5 class="recipe__ttl_s">もも</h5>
            <p class="mb2">脂肪が少なく、筋肉中心の部位。赤身で比較的低カロリー、味は淡泊です。<br>向いているメニュー：ローストビーフ、ポトフ、コンビーフ、ひき肉 など</p>
            <h5 class="recipe__ttl_s"><a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic133.php" class="recipe-design__link">すね</a></h5>
            <p class="mb3">ふくらはぎの筋肉が固く発達した部位。長時間煮込むことでやわらかくなります。<br>向いているメニュー：ビーフシチュー、カレー、ポトフ など</p>
          </section>
          <h3 class="recipe__ttl_l">肉の下ごしらえの2つのポイント</h3>
          <div class="u-clearfix mb3">
            <p>
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-04@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」鶏肉｜' . strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <span>
              <?php echo ($altCap04); ?>
            </span>
            </p>
          </div>
          <h4 class="recipe__ttl">[ 1 ]ドリップを拭き取る</h4>
          <p class="mb2">買ってからしばらくすると、肉から薄い赤色の水分が出てきます。これは「ドリップ」と呼ばれ、冷凍の食肉が解凍されるときに発生する水分です。ドリップは肉のうまみや栄養素が水分とともに溶け出したもので、<strong>肉のパサつきや味が落ちる原因</strong>となります。</p>
          <p class="mb2">ドリップは一緒に調理しても美味しい“だし”にはならず、生臭さの原因になってしまうため、調理前に必ず拭き取りましょう。キッチンペーパーでそっと挟み、余分な水分を取ってから、下味を付けて調理します。</p>
          <h4 class="recipe__ttl">[ 2 ]筋を取る</h4>
          <p class="mb2">筋取り・筋切りとは、肉の繊維や硬い部位に<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic17.php" class="recipe-design__link">包丁</a>を入れることをいいます。筋の処理をせずに肉を加熱すると、縮んだり反り返ったりしやすくなります。さらに、固い筋は噛み切れないまま残り、口当たりも悪くしてしまいます。<br>厚切りの牛肉、豚肉、鶏のささみやももなどには筋があるため、調理の前に下ごしらえをするとよいでしょう。</p>
          <h3 class="recipe__ttl_l mb0">肉の種類別、下ごしらえの手順をご紹介！</h3>
          <p class="mb3">どの肉をどんな調理法で料理するかによって、下ごしらえの方法は変わります。ここでは、よく使う部位の、代表的な下ごしらえの方法をご紹介しましょう。</p>
          <h4 class="recipe__ttl">豚ロースの下ごしらえ</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-05@2x.jpg" alt="マユ先生のHow To <?php echo ('「' . $pageTtl . '」' . strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-06@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">鶏もも肉の下ごしらえ</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-07@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-08@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-09@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl" id="torimuneniku">鶏むね肉の下ごしらえ</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-10@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap10); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-11@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap11); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-12@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap12)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap12); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-13.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-13@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap13)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap13); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">牛肉の下ごしらえ</h4>
          <div class="u-clearfix mb2">
            <p>
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-14.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-14@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」鶏肉｜' . strip_tags($altCap14)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <div class="mb2">豚の厚切りと同じように、肉の余分な水分（ドリップ）を拭き取ります。<br>赤身と脂肪の間にある白い筋に、包丁の先で３～４箇所切り込みを入れます。裏側も同様に切り込みを入れます。</div>
            <div>厚切りは、肉全体を叩いて筋を切るとやわらかくなります。強く叩きすぎると加熱したときにうまみも抜けてしまうので、軽い力で全体を叩いてください。</div>
            </p>
          </div>
          <h3 class="recipe__ttl_l mb2">肉は液に漬けるとやわらかく</h3>
          <p class="mb2">肉をやわらかくする下ごしらえには、ちょっとした裏ワザがあります。それは、液体の<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic22.php" class="recipe-design__link">調味料</a>や、水分の多い野菜や果物と一緒に漬けること。</p>
          <p class="mb2">酒や果物のもつ酵素には、肉をやわらかくする作用があります。また、肉に水分を与えてパサつきを防ぐとともに、風味豊かな下味にもなります。料理に合ったスパイスやハーブなどの香味野菜と一緒に、ファスナー付き保存袋に入れて、<strong>約4時間</strong>冷蔵庫で寝かせましょう。漬け込んだ後に肉を長時間煮込むと、やわらかくトロトロの仕上がりになりますよ。</p>
          <h5 class="recipe__ttl_s">酒／赤ワイン</h5>
          <p class="mb2">アルコールには肉の臭みを消し、風味をよくする効果があります。玉ねぎと組み合わせるとよりやわらかさアップ。</p>
          <h5 class="recipe__ttl_s">ヨーグルト</h5>
          <p class="mb2">肉の筋繊維をほぐして、やわらかくする働きがあります。</p>
          <h5 class="recipe__ttl_s">玉ねぎ</h5>
          <p class="mb2">玉ねぎはすりおろした状態のものに漬けます。玉ねぎには酵素を分解する強力な作用があり、30分程度でやわらかくなります。</p>
          <h5 class="recipe__ttl_s">キウイ／パイナップル</h5>
          <p class="mb3">南国の果物には肉をやわらかくする酵素が多く含まれています。生のフルーツをすりおろしたり、<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic16.php" class="recipe-design__link">みじん切り</a>にするなどの方法で漬け込みましょう。</p>
          <h3 class="recipe__ttl_l mb2">時短できる！下味冷凍とは？</h3>
          <div class="u-clearfix">
            <p>
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-15.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/19/tech19-15@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」鶏肉｜' . strip_tags($altCap15)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <div class="mb2">
              急いで夕食を作らなければ！というときに便利なのが、肉の下味を付けた状態で冷凍する「<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic32.php" class="recipe-design__link">下味冷凍</a>」。買い置きした肉に、あらかじめ下味が付いていればあとは調理するだけ。時短料理の強い味方です。
            </div>
            <div>漬け込み冷凍の方法は簡単。お好みの調味液（市販のものでもOK）をファスナー付き保存袋に入れ、下ごしらえを済ませた生の肉を一緒に入れます。調味液と肉をよく揉み込んでなじませたら、薄く、平たく伸ばして冷凍庫で保存します。<br>すりおろし玉ねぎと一緒に冷凍すると、やわらかさもアップして、レシピの幅も広がりますよ。</div>
            </p>
          </div>
        </div>
      </div>
      <?php
      $recipeIcon = 'mie_01';
      $speech = '肉に下ごしらえが必要だったなんて知らなかったです！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = '丁寧に下ごしらえをしないと、料理の味に差が出てきてしまうんですよ<br>面倒と思わずに、しっかりと下ごしらえしましょうね';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mie_01';
      $speech = 'よーし、今度こそは美味しいトンテキ作るぞー！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      //関連記事
      $recommendrecipe = array(
        array('recommend-recipe-st'),
        array('recommend-recipe-id', '14022'),
        array('recommend-recipe-id', '15115'),
        array('recommend-recipe-id', '15112'),
        array('recommend-recipe-end')

      );
      ?>
      <?php
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
