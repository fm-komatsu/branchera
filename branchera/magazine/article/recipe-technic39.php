<?php
//base
include("../../function.php");
$content = get_id_data('15039');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「味噌汁の作り方」を動画で解説。豆腐・長ねぎ・油揚げの味噌汁の作り方をご紹介します。だしの使い方や、味噌の種類別の特徴、アレンジ味噌汁レシピもあわせてお伝えします。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'cDbQ7Q1CQY0';

//導入文
$introTxt = '第39回は「味噌汁の作り方」です。美味しい味噌汁の作り方をご紹介します。';

//キャプチャALTタグ
$altCap01 = '豆腐は2cm角に切ります。';
$altCap02 = '長ねぎは1cm幅の小口切りにします。';
$altCap03 = '油揚げは短冊切りにします。	<br>※油揚げは必要に応じて油抜きをします。油抜きの方法は、600Wに設定した電子レンジで20～30秒加熱し、キッチンペーパーで油揚げを挟み、余分な油を拭き取ります。';
$altCap04 = '鍋にだしを入れて<a href="' . $base_url . '/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけ、沸騰させます。';
$altCap05 = '豆腐、長ねぎ、油揚げを入れます。<br>火の通りにくい食材（大根、じゃがいもなど）の場合は、長めに加熱してかたさを確かめます。<a href="' . $base_url . '/magazine/article/recipe-technic27.php" class="recipe-design__link">きのこ</a>類や、わかめ、あさり、<a href="' . $base_url . '/magazine/article/recipe-technic49.php" class="recipe-design__link">海老</a>などの魚介類は、食材を入れた後に一度煮立たせましょう。';
$altCap06 = 'ひと煮立ちしたら火を弱め、味噌を溶き入れて、火を止めます。';
$altCap07 = 'まろやか豆乳味噌汁';
$altCap08 = '冷や汁風味噌汁';
$altCap09 = 'バター味噌汁';
$altCap10 = '洋風味噌汁';
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
      $speech = 'マユ先生、聞いてくださいよ～<br>味噌汁を作るとなぜか、毎回味が違って<br class="u-only__pc">薄かったり、濃かったりしちゃうんです…';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = '味噌汁は、特に今の季節、体が温まるのでいいですよね！<br>せっかくなので、味噌汁の作り方をおさらいしてみましょう！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mie_01';
      $speech = 'ぜひ、お願いします！<br>味噌汁って、今まで何となく作っていて<br class="u-only__pc">具材の分量や火加減を、気にしたことがないんですよね';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = '味噌汁の作り方を教えてもらう機会って、なかなかないですよね<br>しっかりと基本をおさえて、美味しい味噌汁を作りましょう';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>

      <div class="recipe__movie recipe-movie technic">
        <h3 class="recipe-movie__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png" alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
        </h3>
        <div class="recipe-movie__video">
          <div class="recipe-movie__video_base">
            <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/cDbQ7Q1CQY0?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <div class="recipe__design recipe-design">
        <h3 class="recipe__ttl_l">味噌汁</h3>
        <h4 class="recipe__ttl">材料（2人分）</h4>
        <div class="recipe-design__material">
          <dl class="recipe-design__materials">
            <dt>絹ごし<a href="<?php echo $base_url ?>/magazine/article/recipe-technic80.php" class="recipe-design__link">豆腐</a></dt>
            <dd>1/3丁（100g）</dd>
          </dl>
          <dl class="recipe-design__materials">
            <dt>油揚げ</dt>
            <dd>1/2枚（15g）</dd>
          </dl>
          <dl class="recipe-design__materials">
            <dt>長ねぎ</dt>
            <dd>1/2本（50g）</dd>
          </dl>
          <dl class="recipe-design__materials">
            <dt>だし（<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic06.php" class="recipe-design__link">かつお昆布だし</a>、<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic07.php" class="recipe-design__link">煮干だし</a>などお好みのだし）</dt>
            <dd>2カップ（400ml）</dd>
          </dl>
          <dl class="recipe-design__materials">
            <dt><a href="<?php echo $base_url ?>/magazine/article/recipe-technic22.php#miso" class="recipe-design__link">味噌</a></dt>
            <dd><a href="<?php echo $base_url ?>/magazine/article/recipe-technic12.php" class="recipe-design__link">大さじ</a>2</dd>
          </dl>
        </div>
        <div class="recipe-design__howto mb3">
          <h4 class="recipe__ttl">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-01@2x.jpg" alt="マユ先生のHow To <?php echo ('「' . $pageTtl . '」' . strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-02@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-03@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-04@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-design__check check mb3">
              <div class="check__row">
                <div class="check__ttl">
                  <h4 class="check__ex center">
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png" alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
                  </h4>
                </div>
                <h3>だしに顆粒だしを使う場合</h3>
                <p class="mb2">「忙しくて、だしを取る時間がない…」というときは、顆粒だしでもOK。顆粒だしは、水を沸騰させてから鍋に入れましょう。また、沸騰した湯に粉末のかつお節や煮干粉を直接入れれば、そのまま味わい深いだしになります。カルシウムも取れるので、栄養面でも理想的ですね。</p>
                <p>野菜や乾物、魚介、肉類などの具材からもだしが取れるので、いろいろな組み合わせを試してみてくださいね。</p>
              </div>
            </div>
          </section>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-05@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-06@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">味噌の種類とおすすめ食材</h3>
              <p>体によい発酵食品として、古くから重宝される味噌。よく使われる「赤味噌」「白味噌」「合わせ味噌」は、どれも「麦」「米」「豆」からできているという点は同じですが、それぞれ風味が異なります。各種の特徴と、おすすめの具材をご紹介します！</p>
              <h4 class="recipe__ttl_s">赤味噌（濃食味噌）</h4>
              <p>スッキリとしたキレのある味噌。個性の強い食材でも、風味が負けない。<br> [おすすめの食材]なめこ、<a href="<?php echo $base_url ?>/magazine/article/recipe06.php" class="recipe-design__link">あさり</a>、しじみ、わかめ、海鮮（あら）、肉類など
              </p>
              <h4 class="recipe__ttl_s">白味噌（淡色味噌）</h4>
              <p>まろやかな甘みとコクのある味噌。甘みのある食材にマッチする。<br> [おすすめの食材]大根、いも類、玉ねぎ、カボチャ、えのきなど
              </p>
              <h4 class="recipe__ttl_s">合わせ味噌（原材料を2種類以上調合したもの）</h4>
              <p>赤、白、両方のよさを合わせた味噌。基本的にどんな具材にも合う。<br> [おすすめの食材]豆腐、卵、麩、納豆、なす、<a href="<?php echo $base_url ?>/magazine/article/recipe01.php" class="recipe-design__link">根菜</a>、青菜類など
              </p>
            </section>
          </div>
          <h3 class="recipe__ttl_l mb0">おすすめ味噌汁アレンジレシピ</h3>
          <p class="mb2">基本の味噌汁に少し手を加えるだけで、いつもと違った風味を楽しむことができます。簡単にできるアレンジで、美味しくて栄養たっぷりの味噌汁を作りましょう！</p>
          <h4 class="recipe__ttl"><?php echo $altCap07; ?></h4>
          <div class="u-clearfix">
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-07@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p class="mb2">基本の味噌汁を作り、仕上げに豆乳をプラス。豆乳は沸騰させると分離してしまうので、入れたあとは弱火で温める程度にします。</p>
            <p class="mb2">＜相性のよい食材＞<br>キャベツ、かぼちゃ、しめじ、長ねぎ、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic54.php" class="recipe-design__link">温泉卵</a>、生姜、鶏団子、<a href="<?php echo $base_url ?>/magazine/article/recipe08.php" class="recipe-design__link">豚肉</a></p>
          </div>
          <h4 class="recipe__ttl"><?php echo $altCap08; ?></h4>
          <div class="u-clearfix">
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-08@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p class="mb2">味噌を少量のお湯で溶きのばしたら、冷水で薄めて氷を浮かべます。暑い夏にピッタリの味噌汁です。<a href="<?php echo $base_url ?>/magazine/article/recipe-technic60.php" class="recipe-design__link">輪切り</a>にしたきゅうりと、薬味をたっぷり加えて召し上がれ。</p>
            <p class="mb2">＜相性のよい食材＞<br>きゅうり、豆腐、ごま、青しそ、みょうが、小ねぎ、オクラ、生姜</p>
          </div>
          <h4 class="recipe__ttl"><?php echo $altCap09; ?></h4>
          <div class="u-clearfix">
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-09@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p class="mb2">基本の味噌汁に、バターひとかけを加えます。豆乳や牛乳をプラスすると、よりまろやかになり、味噌の味が引き立ちますよ。</p>
            <p class="mb2">＜相性のよい食材＞<br>鮭、コーン、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic120.php" class="recipe-design__link">じゃがいも</a>、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic46.php" class="recipe-design__link">ブロッコリー</a>、しめじ、キャベツ</p>
          </div>
          <h4 class="recipe__ttl">ピリ辛チゲ風味噌汁</h4>
          <p class="mb2">鍋に適量のごま油と豆板醤を入れて加熱します。香りが立ったら出汁でのばして、基本の味噌汁と同じように調理したらできあがりです。海老の殻やあさり缶を汁ごと加えると、手軽で風味豊かなだしになります。お好みでごま油やラー油を加えても美味しいですよ。</p>
          <p class="mb2">＜相性のよい食材＞<br>海老やあさりなどの魚介類、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic111.php" class="recipe-design__link">白菜</a>、ニラ、長ねぎ、豆腐、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic08.php" class="recipe-design__link">卵</a></p>
          <h4 class="recipe__ttl"><?php echo $altCap10; ?></h4>
          <div class="u-clearfix">
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/39/tech39-10@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p class="mb2">和風だしの代わりにコンソメを使って、洋風だしベースに。食材をオリーブオイルでサッと炒めてから作ると、コクが出ます。どの味噌を使ってもよいのですが、白味噌で作るとよりやさしい味わいになります。</p>
            <p class="mb2">＜相性のよい食材＞<br>じゃがいも、玉ねぎ、にんじん、ブロッコリー、プチトマト、ベーコン</p>
          </div>
        </div>
      </div>
      <?php
      $recipeIcon = 'mie_01';
      $speech = 'だしがしっかり効いていて、今までより味噌の風味もよくなりました<br>これからは、具材を入れるタイミングや火加減に注意して作りたいと思います';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = '調味料や具材を変えるだけで、さまざまなアレンジができますよ♪<br>季節によって旬の食材を取り入れると、脱マンネリ！です<br>味噌の量は「だし1カップに対して味噌大さじ1」を目安にしてくださいね';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mie_01';
      $speech = 'それなら毎日変わらない味で、美味しくできそうです！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      //関連記事
      $recommendrecipe = array(
        array('recommend-recipe-st'),
        array('recommend-recipe-id', '15042'),
        array('recommend-recipe-id', '15007'),
        array('recommend-recipe-id', '15006'),
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
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
