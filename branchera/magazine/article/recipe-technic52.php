<?php
//base
include("../../function.php");
$content = get_id_data('15052');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「正しいそうめんのゆで方」を動画で解説。ドロドロになったり、麺同士がくっついたりせずに美味しくそうめんをゆでる方法をご紹介します。また、梅干しを入れてより美味しくゆでる裏ワザや、そうめんとひやむぎの違いなども併せて解説します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//キャプチャALTタグ
$altCap01 = '大きな鍋に水を入れ、火にかけて沸騰させます。';
$altCap02 = '沸騰したお湯の中に、束を解いたそうめんを<strong>散らすように</strong>入れます。<br>※写真は、撮影用に2束よりも多めにそうめんを入れています。';
$altCap03 = 'そうめん同士がくっつかないように、素早く菜箸などでかき混ぜます。';
$altCap04 = 'お湯が吹きこぼれないように<a href="recipe-technic02.php" class="recipe-design__link">火加減</a>を調節しながら、商品に記載されたゆで時間（約1分半～2分）の通りにゆでます。';
$altCap05 = '麺をざるに上げ、流水でよく<strong>もみ洗い</strong>してぬめりを取ります。';
$altCap06 = 'しっかり水気を切って、皿に盛ってできあがりです。<br>そうめんを盛るときは、一口大に丸めて並べると食べやすくなります。';
$altCap07 = '夜食や軽食におすすめの、温かいそうめんです。<br><a href="' . $base_url . '/magazine/article/recipe-technic06.php" class="recipe-design__link">だし汁</a>をしょうゆ・酒で調味したつゆに、ねぎ・<a href="' . $base_url . '/magazine/article/recipe-technic144.php" class="recipe-design__link">ゆで鶏</a>・<a href="' . $base_url . '/magazine/article/recipe-technic27.php" class="recipe-design__link">きのこ</a>・<a href="' . $base_url . '/magazine/article/recipe-technic08.php" class="recipe-design__link">卵</a>など、お好みの具材を加えて煮立てます。そこに、少しかためにゆでて水洗いしたそうめんを加えたらできあがりです。';
$altCap08 = 'ゆでたそうめんを具材と一緒に炒めた、おかずになるメニュー。<br>そうめんは少しかためにゆでて、冷水で洗って水気を切っておきます。<br>フライパンでごま油を熱し、一口大に切った豚肉と、<a href="recipe-technic13.php" class="recipe-design__link">千切り</a>にしたにんじん、ピーマン、にらなどの野菜を炒めます。火が通ったらそうめんとめんつゆを加えて、よく混ぜてください。皿に盛って、かつおぶしや白ごまをまぶしたらできあがりです。
';
?>
<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/magazine/", "ブランシエラマガジン");
    $panAry[] = array("/magazine/index_comic02.php", "今さら聞けない料理のアレコレ");
    include($inc_path . "/lib/inc/pan.php");
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
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第52回は、伸びずに美味しく仕上がる「そうめんのゆで方」について動画でご紹介します。</p>
      </div>
      <hr class="recipe__line">

      <div class="recipe-icn papa_02">
        <div class="inner">
          <p>ああ、夏は毎日暑いなあ<br>こんなときは、やっぱりそうめん！だけど…</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>おっ、どうしたんだい？</p>
        </div>
      </div>
      <div class="recipe-icn papa_02">
        <div class="inner">
          <p>フラッキー！僕がそうめんをゆでると、いつもドロドロに伸びちゃうんだよ<br>ツルっとしたのどごしに仕上げたいのに…</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>ドロドロ⁉<br>それは、ゆで方が間違っているのかもしれないな<br>よーし！今日はそうめんが伸びないゆで方のコツを教えてやるぜ！</p>
        </div>
      </div>
      <div class="recipe__movie recipe-movie-new technic">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl@2x.png" alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/NXV2oeKGFmA?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">美味しいそうめんのゆで方</h3>
          <p>夏の定番メニューといえば、そうめん。簡単に作れて、暑い日でも食べやすいので重宝しますよね。でも、ゆでたらそうめん同士がくっついたり、伸びてドロドロになったりして悩んでいる方もいるのではないでしょうか。</p>
          <p class="mb2">こうした失敗は、フライパンや浅い鍋を使っている、何分ゆでればよいか把握していない、お湯の量が少ない…といったことが原因で起こりがち。<br>正しいゆで方を覚えて、なめらかでコシのあるそうめんに仕上げましょう！</p>
          <h4 class="recipe__ttl_tech">材料（1人分）</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>そうめん</dt>
              <dd>2束（50ｇ×2）</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>水</dt>
              <dd>1L</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/52/tech52-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/52/tech52-01@2x.jpg" alt="フラッキーのHow To <?php echo ('「' . $pageTtl . '」' . strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/52/tech52-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/52/tech52-02@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/52/tech52-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/52/tech52-03@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/52/tech52-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/52/tech52-04@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <div class="recipe-check mb3">
            <div class="recipe-check__row">
              <div class="recipe-check__ttl">
                <h4 class="recipe-check__ex center">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png" alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
                </h4>
                <p class="mb2">吹きこぼれそうになったとき、差し水をするのは避けよう！お湯の温度が下がってしまい、麺に十分火が通らなくなったり、そうめんのうまみが流れ出たりする可能性があるからな。<br>吹きこぼれそうなときは、必ず火加減を調節するんだぞ！</p>
              </div>
            </div>
          </div>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/52/tech52-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/52/tech52-05@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/52/tech52-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/52/tech52-06@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <div class="recipe-plus1 mb3">
            <div class="recipe-plus1__row">
              <h4 class="recipe-plus1__ttl">梅干し・酢を入れてゆでると美味しくなる⁉</h4>
              <p class="mb2">そうめんを美味しくゆでる裏ワザとして、梅干しを入れる方法があります。梅に含まれるクエン酸の力によって、そうめんのでんぷんが溶け出しにくくなり、コシが出るといわれています。</p>
              <p class="mb2">方法は簡単。そうめんをゆでるときに、約1Lの水に対して梅干しを1個、沸騰する直前に入れるだけ。梅干しがないときは、水の量に対して1％ほどの酢（1Lの場合は10ml）を加えるとよいでしょう。</p>
            </div>
          </div>
          <div class="recipe-plus1 mb3">
            <div class="recipe-plus1__row">
              <h4 class="recipe-plus1__ttl">意外と知らない「そうめん」と「ひやむぎ」の違い</h4>
              <p class="mb2">夏といえば“そうめん”ですが、同時によく挙げられるのが“ひやむぎ”。この2つにはどのような違いがあるのかご存じですか？<br>正解は、「麺の太さ」。JAS（日本農林規格）では、機械で製造された乾麺を次のように区別しています。</p>
              <ul class="u-list__ul_dot">
                <li>そうめん…直径1.3mm未満</li>
                <li>ひやむぎ…直径1.3mm以上～1.7mm未満</li>
              </ul>
              <p>実は、“そうめん”と“ひやむぎ”は、もともと製法が異なるものでした。ですが、機械で麺を作る現代では、製法工程だけで区別するのが難しくなったため、麺の太さでそれぞれを区別するようになったのです。<br>ちなみに機械生産ではない手延べ麺の場合は、1本1本の太さにバラつきが出やすいので、1.7mm未満ならどちらの呼び方でもよいことになっているそうです。</p>
            </div>
          </div>
          <section>
            <div class="mb0">
              <h3 class="recipe__ttl_l">そうめんを使った簡単アレンジレシピ</h3>
              <p class="mb2">夏の終わりに大量に余ってしまいがちなそうめん。飽きずに最後まで美味しく食べられる、簡単アレンジレシピをご紹介します。</p>
              <h4 class="recipe__ttl_tech">にゅうめん</h4>
              <div class="flex between mb3">
                <figure class="w45">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/52/tech52-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/52/tech52-07@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
                </figure>
                <div class="w55">
                  <p>
                    <?php echo ($altCap07); ?>
                  </p>
                </div>
              </div>
              <h4 class="recipe__ttl_tech">そうめんチャンプルー</h4>
              <div class="mb3">
                <p>
                <figure class="w45 u-float__right">
                  <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/52/tech52-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/52/tech52-08@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
                </figure>

                <?php echo ($altCap08); ?>
                </p>
              </div>
              <h4 class="recipe__ttl_tech">添えるだけ！薬味＆具材バリエーション</h4>
              <p class="mb2">シンプルなそうめんは、<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic136.php" class="recipe-design__link">薬味</a>や具材で多彩にアレンジできるところも魅力。メニューにそうめんが続きがちなときは、いろいろな組み合わせを試してみましょう！</p>
              <ul class="u-list__ul_dot mb0">
                <li>コクを出す…ごまだれ、ごま油、天かす、味噌など</li>
                <li><span>さっぱり感をアップ…<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic137.php" class="recipe-design__link">大葉</a>、<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic58.php" class="recipe-design__link">大根おろし</a>、刻みねぎ、梅干し、みょうがなど</span></li>
                <li>ねばねば食感を楽しむ…おくら、なめこ、山芋、納豆など</li>
                <li><span>ピリッとアクセント…キムチ、豆板醤、わさび、柚子胡椒、<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic53.php" class="recipe-design__link">針生姜</a>など<span></li>
              </ul>
            </div>
          </section>
        </div>
      </div>
      <div class="recipe-icn papa_01">
        <div class="inner">
          <p>たっぷりのお湯で、差し水せずに時間を守って…<br>よし、伸びずにゆでられた！<br>洗ってぬめりも取ったからツルツルだ♪</p>
        </div>
      </div>
      <div class="recipe-icn fl_03">
        <div class="inner">
          <p>やっぱりそうめんはこうでなくっちゃな！<br>ちなみに一口大に盛るのが難しいときは、<br class="u-only__pc">フォークを使って巻くと便利だぜ！</p>
        </div>
      </div>
      <div class="recipe-icn mama_01">
        <div class="inner">
          <p>うわ～、涼しげで美味しそう！薬味もいろいろあって迷っちゃうわ<br>誰でも手早く簡単に作れるからいいね～<br>今年の夏はパパが作るそうめんが大活躍の予感♪</p>
        </div>
      </div>
      <div class="recipe-icn ko_03">
        <div class="inner">
          <p>コウちゃんは、ごまだれ～♪</p>
        </div>
      </div>
      <section class="mb3">
        <h5>■関連記事</h5>
        <ul>
          <li class="recipe-photolist__item recipe-photolist__reciperecommend">
            <a href="<?php echo $base_url; ?>/magazine/article/recipe-technic70.php" class="recipe-photolist__row">
              <img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech70.jpg" alt="蕎麦のゆで方" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
              <p class="reciperecommend-ttl">●蕎麦のゆで方</p>
            </a>
          </li>
          <li class="recipe-photolist__item recipe-photolist__reciperecommend">
            <a href="<?php echo $base_url; ?>/magazine/article/recipe-technic64.php" class="recipe-photolist__row">
              <img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech64.jpg" alt="パスタのゆで方" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
              <p class="reciperecommend-ttl">●パスタのゆで方</p>
            </a>
          </li>
          <li class="recipe-photolist__item recipe-photolist__reciperecommend">
            <a href="<?php echo $base_url; ?>/magazine/article/recipe-technic134.php" class="recipe-photolist__row">
              <img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech134.jpg" alt="焼きそばの作り方。定番のソース焼きそば&人気のアレンジレシピ" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
              <p class="reciperecommend-ttl">●焼きそばの作り方。定番のソース焼きそば&人気のアレンジレシピ</p>
            </a>
          </li>
        </ul>
      </section>
      <div class="mb0">
        <?php
        include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-new-footer.php");
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
