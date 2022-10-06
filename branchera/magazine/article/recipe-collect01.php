<?php
//base
include("../../function.php");
$content = get_id_data('13001');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
// $metaDesc = '';
$metaThum = $img_url . '/thum/' . $content['image'];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '103';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe recipe-collect";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//導入文
$introTxt = 'お弁当作りに欠かせない、基本レシピをまとめてご紹介します。';

//セリフ前半
$sp01 = array( //'icon','icon-num','text'
  //フラッキー　通常
  array('fl', '01', 'みんなで食べるお弁当ってすごく美味しいよな！<br>
  俺もお弁当は大好きだぜ！
  </p>
  <p class="mt2">
  みんなのお弁当の時間がもっと楽しくなるように<br class="u-only__pc">
冷めても美味しいおかずやお弁当をグッと美味しく見せるコツなど<br class="u-only__pc">
簡単に作れるお弁当の基本レシピをまとめて紹介するぜ！
'),
);
?>
<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/magazine/", "ブランシエラマガジン");
    $panAry[] = array("/magazine/index_comic02.php", "うちのご飯は世界イチ まとめ記事");
    include($inc_path . "/lib/inc/pan.php");
    // SP時サムネにタイトルを表示するかフラグ
    $thumTtlFlg = 'off';
    include($inc_path . "/lib/inc/page/_magazine/__comic02tech-new-header.php");
    include($inc_path . "/lib/inc/page/_magazine/__recipe-collect-main-v.php");
    ?>
    <!-- 220805追加 -->
    <div class="mt3 mt2_sp mb5 mb3_sp">
      <div>
        <?php $CmGtmId = "1"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php");?>
      </div>
    </div>
    <!-- /220805追加 -->
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header recipe-collect">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num"> </span>
          <span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」でこれまでご紹介してきたレシピやお料理の基本の中から、<?php echo $introTxt ?></p>
      </div>
      <hr class="recipe__line">
      <?php
      for ($i = 0, $size = count($sp01); $i < $size; ++$i) {
        $recipeIcon = $sp01[$i][0] . '_' . $sp01[$i][1];
        $speech = $sp01[$i][2];
        include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      }
      ?>
      <div class="mb3">
        <?php include($inc_path . "/lib/inc/page/_magazine/__comic02_pr.php"); //PR記事 
        ?>
      </div>
      <section>
        <h3 class="recipe-collect__ttl_l">
          基本のおにぎりの握り方
        </h3>
        <div class="recipe__design recipe-design">
          <div class="recipe-design__howto mb0">
            <p class="mb4 mb2_sp">お弁当の定番おにぎりは、角おにぎり・俵型おにぎり・丸型おにぎりなど、お弁当箱の形に合わせて、入れやすいものを選びましょう。おにぎりが崩れやすいという人は、入れる具材に問題があるかもしれません。油分の多いツナマヨなどは、<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic20.php" class="recipe-design__link">お米</a>がまとまりにくくなる要因のひとつ。<strong>油をしっかり切る</strong>などして、握るようにしましょう。</p>
            <div>
              <div class="center">
                <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie@2x.png" class="u-img__max center u-only__pc" style="max-width:633px" loading="lazy" alt="動画でチェック">
                <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie-sp@2x.png" class="u-img__max center u-only__sp" style="max-width:250px" loading="lazy" alt="動画でチェック">
              </div>
            </div>
            <div class="recipe-movie-new__video-collect">
              <div class="recipe-movie-new__video-collect_base">
                <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/NJjXMDY6BcU?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <a href="<?php echo $base_url; ?>/magazine/article/recipe-technic21.php" class="u-btn u-btn_point center">基本のおにぎりの握り方の詳細はこちら</a>
          </div>
        </div>
      </section>
      <section>
        <h3 class="recipe-collect__ttl_l">
          とりのカレーから揚げ
        </h3>
        <div class="recipe__design recipe-design">
          <div class="recipe-design__howto mb0">
            <p class="mb4 mb2_sp">お弁当のおかずで人気が高いから揚げ。いつものから揚げにカレーのスパイスを加えて、子どもも大人も喜ぶレシピにしました。から揚げを焦がさないようにするポイントは、<strong>しっかりと片栗粉をまぶす</strong>こと。また、揚げ物は油に入れたあとは触らずに、衣が固まるのを待つことで、カラっと美味しく仕上がります。</p>
            <div>
              <div class="center">
                <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie@2x.png" class="u-img__max center u-only__pc" style="max-width:633px" loading="lazy" alt="動画でチェック">
                <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie-sp@2x.png" class="u-img__max center u-only__sp" style="max-width:250px" loading="lazy" alt="動画でチェック">
              </div>
            </div>
            <div class="recipe-movie-new__video-collect">
              <div class="recipe-movie-new__video-collect_base">
                <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/zXVOYuj5TZE?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <a href="<?php echo $base_url; ?>/magazine/article/recipe04.php" class="u-btn u-btn_point center">とりのカレーから揚げの詳細はこちら</a>

          </div>
        </div>
      </section>
      <section>
        <h3 class="recipe-collect__ttl_l">
          だし巻き卵の作り方
        </h3>
        <div class="recipe__design recipe-design">
          <div class="recipe-design__howto mb0">
            <p class="mb4 mb2_sp">お弁当に彩りをプラスするだし巻き卵も、お弁当の定番レシピのひとつです。初めてでも慌てずに作るポイントは、なんと言っても火加減。中火に保ちつつ、しっかり油をなじませながら卵を巻いていきます。卵焼き機が熱くなり過ぎたら、<strong>濡れふきんの上に乗せて、温度調整</strong>すると焦がさずに焼くことができます。</p>
            <div>
              <div class="center">
                <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie@2x.png" class="u-img__max center u-only__pc" style="max-width:633px" loading="lazy" alt="動画でチェック">
                <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie-sp@2x.png" class="u-img__max center u-only__sp" style="max-width:250px" loading="lazy" alt="動画でチェック">
              </div>
            </div>
            <div class="recipe-movie-new__video-collect">
              <div class="recipe-movie-new__video-collect_base">
                <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/EvWYKUv3MSY?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <a href="<?php echo $base_url; ?>/magazine/article/recipe-technic65.php" class="u-btn u-btn_point center">だし巻き卵の作り方の詳細はこちら</a>

          </div>
        </div>
      </section>
      <section>
        <h3 class="recipe-collect__ttl_l">
          アスパラガスのゆで方
        </h3>
        <div class="recipe__design recipe-design">
          <div class="recipe-design__howto mb0">
            <p class="mb4 mb2_sp">お弁当の彩りを鮮やかにするには、野菜の緑も大切です。中でもおすすめなのはアスパラガス。動画では鍋を使った塩ゆでの方法をご紹介していますが、<strong>少量であれば電子レンジでも下ごしらえができ</strong>、時短につながりますよ。アスパラガスをベーコンで巻いて焼けば、人気のおかず「アスパラのベーコン巻き」に！ </p>
            <div>
              <div class="center">
                <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie@2x.png" class="u-img__max center u-only__pc" style="max-width:633px" loading="lazy" alt="動画でチェック">
                <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie-sp@2x.png" class="u-img__max center u-only__sp" style="max-width:250px" loading="lazy" alt="動画でチェック">
              </div>
            </div>
            <div class="recipe-movie-new__video-collect">
              <div class="recipe-movie-new__video-collect_base">
                <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/xnvbn-Mq6AY?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <a href="<?php echo $base_url; ?>/magazine/article/recipe-technic76.php" class="u-btn u-btn_point center">アスパラガスのゆで方の詳細はこちら</a>

          </div>
        </div>
      </section>
      <section>
        <h3 class="recipe-collect__ttl_l">
          ブロッコリーの正しいゆで方
        </h3>
        <div class="recipe__design recipe-design">
          <div class="recipe-design__howto mb0">
            <p class="mb4 mb2_sp">お弁当の隙間を埋めるおかずに最適なのがブロッコリーです。ゆでた状態で冷凍保存することもできるので、朝の時短にも役立てられます。ブロッコリーはゆでる時間を間違えると、かたくて食べられなかったり、やわらかすぎたりしてしまいます。<strong>目安は約2分</strong>。大きな鍋を使ってゆでていきましょう。 </p>
            <div>
              <div class="center">
                <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie@2x.png" class="u-img__max center u-only__pc" style="max-width:633px" loading="lazy" alt="動画でチェック">
                <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie-sp@2x.png" class="u-img__max center u-only__sp" style="max-width:250px" loading="lazy" alt="動画でチェック">
              </div>
            </div>
            <div class="recipe-movie-new__video-collect">
              <div class="recipe-movie-new__video-collect_base">
                <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/wSLggmREfAQ?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <a href="<?php echo $base_url; ?>/magazine/article/recipe-technic46.php" class="u-btn u-btn_point center">ブロッコリーの正しいゆで方の詳細はこちら</a>

          </div>
        </div>
      </section>
      <section>
        <h3 class="recipe-collect__ttl_l">
          かわいいウインナーの飾り切り4選！写真＆動画で解説
        </h3>
        <div class="recipe__design recipe-design">
          <div class="recipe-design__howto mb0">
            <p class="mb4 mb2_sp">子どもが喜ぶお弁当のおかずといえば、かわいく飾り切りしたウインナー。定番のタコさんウインナーはもちろん、他にも<strong>ひまわり・クローバー・こいのぼりといったさまざまな種類の飾り切りの方法</strong>があります。いつものウインナーにひと手間加えるだけで、お弁当全体が華やかになりますよ。</p>
            <div>
              <div class="center">
                <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie@2x.png" class="u-img__max center u-only__pc" style="max-width:633px" loading="lazy" alt="動画でチェック">
                <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie-sp@2x.png" class="u-img__max center u-only__sp" style="max-width:250px" loading="lazy" alt="動画でチェック">
              </div>
            </div>
            <div class="recipe-movie-new__video-collect">
              <div class="recipe-movie-new__video-collect_base">
                <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/lZgYJI7TiSY?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <a href="<?php echo $base_url; ?>/magazine/article/recipe-technic84.php" class="u-btn u-btn_point center">ウインナーの飾り切りの詳細はこちら</a>

          </div>
        </div>
      </section>
      <section>
        <h3 class="recipe-collect__ttl_l">
          簡単＆きれい！お弁当の詰め方の基本とコツ
        </h3>
        <div class="recipe__design recipe-design">
          <div class="recipe-design__howto mb0">
            <p class="mb4 mb2_sp">最後にお弁当をグッと美味しく見せるために重要なのが「お弁当の詰め方」です。<strong>ご飯を斜めに詰める</strong>ことで、仕切りを使わなくても、おかずをきれいに見せることができますよ。また、ご飯やおかずは必ずしっかりと冷ましてから詰めるのがポイント。お弁当箱の中に蒸気がこもることで、細菌の繁殖につながる恐れがあります。お弁当を美味しく安全に楽しむためにも、お弁当の詰め方の基本をマスターしましょう！</p>
            <div>
              <div class="center">
                <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie@2x.png" class="u-img__max center u-only__pc" style="max-width:633px" loading="lazy" alt="動画でチェック">
                <img src="<?php echo $img_url ?>/magazine/comic02/collect/chk-movie-sp@2x.png" class="u-img__max center u-only__sp" style="max-width:250px" loading="lazy" alt="動画でチェック">
              </div>
            </div>
            <div class="recipe-movie-new__video-collect">
              <div class="recipe-movie-new__video-collect_base">
                <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/TIdEBuFIKZw?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <a href="<?php echo $base_url; ?>/magazine/article/recipe-technic47.php" class="u-btn u-btn_point center">お弁当の詰め方の基本とコツの詳細はこちら</a>

          </div>
        </div>
      </section>
      <div>
        <?php
        include($inc_path . "/lib/inc/page/_magazine/__recipe-collect-footer.php");
        ?>
      </div>
    </section>
  </article>
</main>
<?php
$toindex_url = "/magazine/index_comic02.php";
include($inc_path . "/lib/inc/toindex__magazin.php");
?>
<?php include($inc_path . "/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<!-- 220805追加 -->
<div class="main__row pt0_sp mb2_sp">
	<div>
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php"); ?>
	</div>
</div>
<!-- /220805追加 -->
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
