<?php
//base
include("../../function.php");
$content = get_id_data('15003');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '「野菜の皮むき」を動画で解説。ピーラーでむくのが難しい、だいこんやさつまいもなどを包丁で皮むきする方法や、簡単に皮むきができる便利グッズをご紹介します。また、皮むきをした野菜の保存方法もお伝えします。';
$metaThum = $img_url . '/thum/' . $content['image'];
$thumTxt = $content['description'];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '104';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
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
    <!-- 220805追加 -->
    <div class="mt3 mt2_sp mb5 mb3_sp">
      <div>
        <?php $CmGtmId = "1";
        include($inc_path . "/lib/inc/page/_magazine/__comic02_cm.php"); ?>
      </div>
    </div>
    <!-- /220805追加 -->
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header technic">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num">　</span>
          <span class="recipe-header__ttl">これで完璧！簡単&キレイな野菜の皮むき方法</span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第3回は、「野菜の皮むき方法」です。<a href="<?php echo $base_url ?>/magazine/article/recipe-technic23.php" class="recipe-design__link">ピーラー</a>があるので、ほとんどの野菜はピーラーでむけばよいのですが、野菜によっては<a href="<?php echo $base_url ?>/magazine/article/recipe-technic17.php" class="recipe-design__link">包丁</a>を使ったほうがよいものも。基本の皮むき方法とコツをご紹介します。
        </p>
      </div>
      <hr class="recipe__line">
      <div class="recipe-icn mayu_01">
        <div class="inner">
          <p>ミエさん、ミニレッスンへようこそ！<br>今日は、野菜の皮むき方法ですよ</p>
        </div>
      </div>
      <div class="recipe-icn mie_03">
        <div class="inner">
          <p>え、野菜の皮ってピーラーでむけばよいんじゃないですか？</p>
        </div>
      </div>
      <div class="recipe-icn mayu_01">
        <div class="inner">
          <p>そうですね、ほとんどの野菜はピーラーでも大丈夫ですが、<br class="u-only__pc"><a href="<?php echo $base_url ?>/magazine/article/recipe02.php" class="recipe-design__link">大根</a>やさつまいもなど、<br class="u-only__pc">調理方法によっては包丁で厚めに皮をむいた方がよい野菜もあるんですよ</p>
        </div>
      </div>
      <div class="recipe-icn mie_02">
        <div class="inner">
          <p>そうなんですね<br>野菜の皮を包丁でむくのって、ちょっと怖いなぁ</p>
        </div>
      </div>
      <div class="recipe-icn mayu_01">
        <div class="inner">
          <p>むきやすくするコツも紹介しますね<br>慌てずにゆっくりやっていきましょう</p>
        </div>
      </div>
      <?php include($inc_path . "/lib/inc/page/_magazine/__comic02_pr.php"); //PR記事 
      ?>
      <div class="recipe__movie recipe-movie technic">
        <h3 class="recipe-movie__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png" alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
        </h3>
        <div class="recipe-movie__video">
          <div class="recipe-movie__video_base">
            <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/-cOjNFXCKNg?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <h3 class="recipe__ttl_l">野菜の皮むき方法</h3>
        <div>
          <p>食べたら美味しい野菜ですが、野菜の皮むきは面倒だな〜、と感じる人も多いのではないでしょうか？野菜の皮むきが苦手な人も、コツを覚えてしまえば、簡単に皮むきができるようになります。</p>
          <p>野菜には、<strong>包丁を使って皮むきをした方がよいもの</strong>と、<strong>ピーラーで大丈夫なもの</strong>があります。<br>大根やさつまいもは、皮を厚くむいた方がよい野菜ですから、包丁がおすすめです。<br>それでは、包丁とピーラー、それぞれを使った皮むきのコツをお伝えしましょう。</p>
        </div>
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl">包丁を使った基本の皮むきの方法とは？</h3>
          <dl class="recipe-design__step">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/03/tech03-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/03/tech03-01@2x.jpg" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt" id="daikon"><span class="recipe-design__step_strong">大根の皮のむき方</span><br>大根は、皮の近くは繊維質が多いため、厚めにむきましょう。<br>皮の内側にうっすらと境目が見えるので、その境目を目印にむいていきましょう。</dd>
          </dl>
          <dl class="recipe-design__step">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/03/tech03-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/03/tech03-02@2x.jpg" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">あまり角度を付けずに包丁の刃を当てて、ゆっくりと包丁を滑らすように動かします。包丁を持つ手の親指で、皮を挟むようにし、むき進めていきます。</dd>
          </dl>
          <dl class="recipe-design__step">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/03/tech03-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/03/tech03-03@2x.jpg" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">大根をゆっくりとまわしながら、むいていきます。</dd>
          </dl>
          <dl class="recipe-design__step">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/03/tech03-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/03/tech03-04@2x.jpg" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt"><span class="recipe-design__step_strong">さつまいもの皮のむき方</span><br>さつまいもの皮の近くは、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic04.php" class="recipe-design__link">アク</a>が強いため、厚めにむいていきましょう。</dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/03/tech03-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/03/tech03-05@2x.jpg" alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">料理に合わせて、短く切ってからむくと、むきやすくなります。</dd>
          </dl>
        </div>
        <h3 class="recipe__ttl">ピーラーを使った皮むきの方法とは？</h3>
        <div class="mb2">
          <p>ピーラーは、野菜や果物を簡単に手早くむくことができる皮むき器。<strong>お料理の下準備がとても早くなる便利な調理器具</strong>です。<br>なすの皮は、包丁ではなかなかむけませんが、ピーラーで簡単にむくことができます。<br>また、野菜は手に持たず、まな板の上にのせてピーラーを使うことがコツ。より楽に素早くむくことができますよ。じゃがいものように丸い形の野菜や、凹凸が多い野菜の場合は逆にむきづらくなるので、手に持ってむきましょう。</p>
        </div>
        <div class="mb3">
          <h4 class="u-ttl__s mb0">●なすの皮むき</h4>
          <ol class="u-list__ol">
            <li>最初に包丁でなすのヘタを切ります。</li>
            <li>なすを手に持ち、ヘタの切断面にピーラーの刃を入れて、むいていきます。</li>
          </ol>
        </div>
        <div class="mb3">
          <h4 class="u-ttl__s mb0">●にんじんの皮むき</h4>
          <ol class="u-list__ol">
            <li>にんじんは、まな板の上に横向きにのせます。</li>
            <li>にんじんを手で押さえ、力を入れずにピーラーを横に動かします。こうすると、均等に皮が薄くむけます。</li>
          </ol>
        </div>
        <div class="mb3">
          <h4 class="u-ttl__s mb0">●じゃがいもの皮むき</h4>
          <ol class="u-list__ol">
            <li>まず、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic23.php#ipeeler" class="recipe-design__link">I型ピーラー</a>の先端を使ってじゃがいもの芽を取ります。<a href="<?php echo $base_url ?>/magazine/article/recipe-technic23.php#itpeeler" class="recipe-design__link">T型ピーラー</a>の場合は、刃の横にある出っ張ったホールで芽をくりぬいて取りだしましょう。
              <div class="flex flex_around center">
                <figure class="w50 mb2 u-fig">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/03/technic03_other01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/03/technic03_other01@2x.jpg" alt="I型ピーラー 画像" style="max-width:362px" class="u-img__max">
                  <figcaption class="u-fig__cap_darken-noshadow">I型ピーラー</figcaption>
                </figure>
                <figure class="w50 mb2 u-fig">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/03/technic03_other02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/03/technic03_other02@2x.jpg" alt="T型ピーラー 画像" style="max-width:362px" class="u-img__max">
                  <figcaption class="u-fig__cap_darken-noshadow">T型ピーラー</figcaption>
                </figure>
              </div>
            </li>
            <li>じゃがいもを手で持ち、ピーラーの刃を当て、上から下にスーッとおろして皮をむきます。じゃがいもを持ったまま向きを回転させ、むく位置をずらしていきましょう。</li>
            <li><span>むききれていない上部は、ピーラーを下から上に動かしてむきます。下部も上にくるように持ち替えて、同様にピーラーを下から上に動かしてむいてください。</span><br>
              <div class="flex mt2">
                <figure class="w50 mb2">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/03/technic03_other03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/03/technic03_other03@2x.jpg" alt="むききれていない上部は、ピーラーを下から上に動かしてむきます。下部も上にくるように持ち替えて、同様にピーラーを下から上に動かしてむいてください。" style="max-width:362px" class="u-img__max">
                </figure>
              </div>
            </li>
          </ol>
        </div>
        <div class="recipe-design__check check mb3">
          <div class="check__row">
            <div class="check__ttl">
              <h3 class="check__ex center">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png" alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
              </h3>
            </div>
            <h4>皮をむいたじゃがいもの保存方法</h4>
            <p>皮をむいたじゃがいもを使わずに放っておくと、アミノ酸やポリフェノール色素が酸化して、<strong>ピンクや亜褐色、茶色や紫色、黒色へ変色</strong>していきます。<br>変色したじゃがいもを食べても害はありませんが、それでお料理をしたら見栄えが損なわれますよね。<br>余ってしまった、皮をむいたじゃがいもは、<strong>水の入った容器に入れ、冷蔵庫で保存</strong>しましょう。じゃがいもはすっぽり水に隠れるようにしてください。</p>
            <p>冷蔵庫に保存すれば3〜4日は保存できますが、徐々に栄養素が溶け出し、味も落ちてしまいます。ですので、できるだけ当日中に調理することをおすすめします。</p>
          </div>
        </div>
        <div class="recipe-design__plus1 plus1 mb3">
          <div class="plus1__row">
            <h4 class="plus1__ttl">簡単に皮むきできる便利グッズをご紹介！</h4>
            <p>野菜の皮むきに便利な器具は、ピーラーだけではありません。野菜の皮むき専用の手袋、スポンジ、自動皮むき器などの便利グッズを使うと、素早く下ごしらえすることができます。</p>

            <div>
              <h4 class="u-ttl__s">●皮むき手袋</h4>
              <p>たくさんの突起がついたグローブをはめてこするだけ。野菜の皮がスムーズに、薄くむけるのが特徴です。じゃがいもやにんじんなどの皮むきにおすすめ。</p>
            </div>
            <div>
              <h4 class="u-ttl__s">●皮むきスポンジ</h4>
              <p>こするだけで皮がむけるスポンジも市販されています。いも類、にんじん、生姜、ごぼうなどの野菜の皮が簡単にむける便利グッズです。</p>
            </div>
            <div>
              <h4 class="u-ttl__s">●自動皮むき器</h4>
              <p>自動で大根、じゃがいも、にんじん、りんごやレモン・キウイなどの皮をむいてくれる皮むき器。面倒な皮むきがアッという間にできます。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="recipe-icn mie_02">
        <div class="inner">
          <p>ふぅ～何とか大根の皮がむけた！<br>大根とさつまいも以外にも、包丁でむいた方がよい野菜はありますか？</p>
        </div>
      </div>
      <div class="recipe-icn mayu_01">
        <div class="inner">
          <p>そうですねー<br>調理方法にもよりますが、里芋も包丁でむくとよいかもしれませんね<br>ピーラーだと刃と刃の間に皮が引っ掛かりやすくなるので、<br class="u-only__pc">包丁の方がスムーズです</p>
        </div>
      </div>
      <div class="recipe-icn mie_01">
        <div class="inner">
          <p>そうなんですね！<br>今日のレッスンを忘れないように<br class="u-only__pc">早速、帰りに大根を買って練習します！</p>
        </div>
      </div>
      <div class="recipe-icn mayu_02">
        <div class="inner">
          <p>買い過ぎないように、気を付けてくださいね～</p>
        </div>
      </div>
      <?php
      //関連記事
      $recommendrecipe = array(
        array('recommend-recipe-st'),
        array('recommend-recipe-id', '13003'),
        array('recommend-recipe-id', '14002'),
        array('recommend-recipe-id', '14005'),
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
<!-- 220805追加 -->
<div class="main__row pt0_sp mb2_sp">
  <div>
    <?php $CmGtmId = "2";
    include($inc_path . "/lib/inc/page/_magazine/__comic02_cm.php"); ?>
  </div>
</div>
<!-- /220805追加 -->
<?php
$toindex_url = "/magazine/index_comic02.php";
include($inc_path . "/lib/inc/toindex__magazin.php");
?>
<?php include($inc_path . "/lib/inc/pagetop.php"); ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php");
