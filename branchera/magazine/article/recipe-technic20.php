<?php
//base
include("../../function.php");
$content = get_id_data('15020');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「ご飯の炊き方」を動画で解説。炊飯器を使って美味しくご飯を炊くコツを分かりやすくご紹介します。また、計量カップを使ったお米の測り方、無洗米の測り方をはじめ、研ぎ方の手順もお伝えします。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = '3tATg7ZMxwI';

//導入文
$introTxt = '第20回は、「お米の炊き方の基本」です。炊飯器を使ったお米の炊き方をご紹介します。';


//キャプチャALTタグ
$altCap01 = '1合（180cc）の計量カップで、山盛りにお米を入れます。';
$altCap02 = '指や箸などで平らにします。';
$altCap03 = 'たっぷりの水を加えて、<strong>軽く2～3回</strong>かき混ぜます。<br>「お米を研ぐ」とは「<strong>お米の表面に付いているぬかやゴミを取りのぞく作業</strong>」です。研ぎはじめは水を吸収しやすいので、最初に加える水は、浄水器の水や、軟水のミネラルウォーターなどが理想です。';
$altCap04 = '手早くかき混ぜたら、すぐに水を捨てます。<br>すぐに水を捨てる理由は、お米に付いていたぬかの臭いまでお米が吸ってしまうからです。水を捨てる際に、お米や器のふちに手を当ててお米がこぼれないようにします。';
$altCap05 = '力を入れ過ぎず弧を描くように、<strong>20回ほど</strong>かき混ぜます。ボールを握るような手つきで、シャカシャカと泡立て器のようにかき混ぜます。<br>※お米にヒビが入らないようにやさしく混ぜてください。';
$altCap06 = '乳白色の研ぎ汁が出たら、新しい水を加えます。軽く混ぜたら、また研ぎ汁を捨てましょう。';
$altCap07 = '同様に水を加えて、軽く混ぜる作業を<strong>2回ほど</strong>繰り返します。写真のように水が半透明になればOKです。';
$altCap08 = '炊飯器の内釜に、研いだお米を移して、<strong>炊く分量の目盛り</strong>まで水を加えます。炊飯時もお米が水を吸収するので、浄水器の水や、軟水のミネラルウォーターなどが理想です。炊飯器にセットして、スイッチを入れます。';
$altCap09 = '炊き上がったら蓋を開けて、底から空気を入れるようにほぐして混ぜます。お米の余分な水分が飛んで、均一な炊き上がりになります。<br>※水分が多くなってしまった場合は、ほぐした後、10分ほど蒸らすとよいでしょう。';
$altCap10 = '炊き上がったご飯は、冷めるにつれて風味が落ちていくので、熱々のうちにラップの上にのせましょう。<br><strong>お茶碗1杯分程度</strong>を目安に、平らに広げます。';
$altCap11 = 'やさしくふんわりと包んで、冷凍庫に保存しましょう。';
$altCap12 = '熱々のご飯を急速冷凍するには、ファスナー付き保存袋などに入れ、アルミトレイの上に置くと効果的。<br>素早く凍らせることによって、美味しさを逃がさず保存することができます。<br>ただし、長期間冷凍していると、水分が蒸発して、風味は落ちてしまいます。<strong>3週間～1ヵ月以内</strong>には食べ切るようにしましょう。';

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
      $recipeIcon = 'kou_01';
      $speech = 'しゃけ<a href="' . $base_url . '/magazine/article/recipe-technic21.php" class="recipe-design__link">おにぎり</a>、おいしい♪';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = 'コウちゃん美味しそうなおにぎりを食べてるね、いいな～<br>作ってもらったの？';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'kou_01';
      $speech = 'ちがうのー、こんびにー';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = 'あれ、めずらしいね！<br>いつも手作りのおにぎりを食べてるから<br class="u-only__pc">作ってもらったのかと思った！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'masaki_02';
      $speech = 'じ、実は、昨日ママにご飯を炊くのを頼まれて<br class="u-only__pc">いつものように炊いたんですけど<br class="u-only__pc">水の量を間違えていたのか、<br class="u-only__pc">お米がちょっとかたくなってしまって…';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = 'そうだったんですね！<br>せっかくですから、この機会に基本のお米の炊き方を<br class="u-only__pc">レッスンしていきましょう！';
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
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">お米の美味しい炊き方とは？</h3>
          <p class="mb3">家庭用の炊飯器で、お米を美味しく炊く手順についてご紹介します。<br><a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic29.php" class="recipe-design__link u-icon">土鍋でご飯を炊く方法はこちら</a></p>
          <h4 class="recipe__ttl">お米の量り方</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-01@2x.jpg" alt="マユ先生のHow To <?php echo ('「' . $pageTtl . '」' . strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-02@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
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
                <h3>無洗米の量り方</h3>
                <p>研ぐ手間いらずで簡単に炊ける無洗米は、普通のお米のように米ぬかが付いていません。その分、普通の計量カップで量ると正味量が多くなります。少し小さい無洗米専用の計量カップで量れば、炊飯器の目盛り通りに水を入れて炊飯できますよ。<br>普通の計量カップしかない場合は、お米1カップにつき大さじ1～2杯の水を追加して、水加減を調節しましょう。</p>
              </div>
            </div>
          </section>
          <h4 class="recipe__ttl">お米の研ぎ方</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-03@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-04@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-05@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-06@2x.jpg" alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-07@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <h3 class="recipe__ttl">お米の炊き方</h3>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-08@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-09@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?></dd>
          </dl>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">美味しいお米を炊くコツ</h3>
              <p class="mb2">お米を美味しく炊き上げる裏技としてよく知られているのが、お酒を足す方法。お米1合に対して大さじ1杯程度の日本酒を加えるだけで、甘味が増してつやつやに！</p>
              <p class="mb2">また、古いお米を炊くときは釜に氷を数個入れると、新米のようにやわらかく炊けるといわれています。これは、水が沸騰するまでの時間が長くなり、お米の芯まで水が浸透するからです。<br>もちろん、炊く前にしっかりお米に浸水させるのも大事なポイント。夏は30分～1時間、冬は1～2時間を目安に浸水させると、お米に水分が行きわたり、ムラなくふっくら炊き上がります。</p>
              <p>ちなみに、現在の炊飯器は、浸水の工程までプログラムされているものが主流です。スイッチを入れれば、自動的に浸水を行なってくれます。不安な方は、ご自宅の炊飯器の説明書を確認してみてくださいね。</p>
            </section>
          </div>
          <h3 class="recipe__ttl_l mb0">余ったご飯を冷凍保存する方法とは？</h3>
          <p class="mb3">ご飯はまとめて炊いて冷凍しておくと、忙しい日の食事に便利です。ご飯の美味しさを損なわずに保存する方法についてご紹介します。</p>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-10@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap10); ?></dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-11@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap11); ?></dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/20/tech20-12@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap12)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap12); ?></dd>
          </dl>
        </div>
      </div>
      <?php
      $recipeIcon = 'masaki_01';
      $speech = 'ふっくらつやつやっ<br>お米のかたさもちょうどいいですね！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = 'ちょっとした一手間で、ふっくら美味しいご飯が炊けます';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'masaki_01';
      $speech = 'ご飯を炊くの、もう失敗しないぞ～！<br>ご飯が進むおかず、さっそく作ろう♪';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      //関連記事
      $recommendrecipe = array(
        array('recommend-recipe-st'),
        array('recommend-recipe-id', '15028', 'cooking_2208_1'),
        array('recommend-recipe-id', '15029', 'cooking_2208_2'),
        array('recommend-recipe-id', '15056', 'cooking_2208_3'),
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
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
