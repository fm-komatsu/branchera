<?php
//base
include("../../function.php");
$content = get_id_data('15027');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「きのこの下ごしらえ」を動画で解説。「きのこは洗うのか？洗わないのか？」という疑問に答えつつ、風味やうまみを逃さない、正しいきのこの下ごしらえと保存方法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'sqxWgEEu-cI';

//導入文
$introTxt = '第27回は「きのこの下ごしらえ」です。風味やうまみを逃がさない、きのこの下ごしらえと保存方法をご紹介します。';


//キャプチャALTタグ
$altCap01 = '洗うと食感が変わったり風味が落ちたりするため、<strong>市販のきのこの場合は水で洗う必要はありません</strong>。';
$altCap02 = 'しいたけなどの傘の大きいきのこは、布巾やキッチンペーパーで汚れを拭き取ります。';
$altCap03 = 'しいたけは石づきを切り落とします。';
$altCap04 = '軸は食べることができるので、そのままでも問題ありません。好みや使う料理に合わせて切ります。';
$altCap05 = 'しめじは石づきを切り落として、束に分けて使います。';
$altCap06 = 'まいたけはそのまま手で、食べやすい大きさにほぐします。';
$altCap07 = 'えのきは根の色が変わっている部分を切り落とします。';
$altCap08 = 'エリンギは手で食べやすい大きさに裂きます。';
$altCap09 = 'きのこは、下ごしらえをしてからファスナー付きの保存袋に入れて、冷凍保存します。自然解凍すると水っぽくなったり、臭みが出て味が落ちてしまったりするので、解凍せずにそのまま加熱調理しましょう。<br>保存期間の目安は、約1ヵ月です。';

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
      $speech = 'まゆせんせい、きのこどーぞ♪';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = 'わぁ！美味しそうなしいたけですね！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mie_01';
      $speech = '昨日きのこをいっぱい買ってきて、<br class="u-only__pc">しいたけやまいたけがたくさんあるんですー';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = 'ありがとうございます！<br>すっかり、秋ですね～肉厚で美味しそう！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mie_01';
      $speech = 'さっそく<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic150.php" class="recipe-design__link">きのこのソテー</a>を作ろうと思ったのですが、<br class="u-only__pc">きのこって洗うんでしたっけ？';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = 'きのこを洗うかどうかって、ちょっと迷ってしまいますよね！<br>せっかくきのこがあるので、今日はいろいろなきのこの下ごしらえについて、<br class="u-only__pc">学んでいきましょうか！<br>美味しさが長持ちするきのこの冷凍保存も、<br class="u-only__pc">ぜひ、覚えてくださいね♪';
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
          <h3 class="recipe__ttl_l mb0">きのこは洗う？洗わない？</h3>
          <p class="mb3">食物繊維が豊富で低カロリーなきのこ。お店で年中売っていますし、さまざまな料理に使えて便利ですよね。でも、いざ料理するときに悩むのが、「きのこは洗うのか？洗わないのか？」ということ。今回は、みなさんが一度は感じるこの疑問にお答えします。</p>
          <h4 class="recipe__ttl">基本的に市販のきのこは洗わない！</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-01@2x.jpg" alt="マユ先生のHow To <?php echo ('「' . $pageTtl . '」' . $altCap01); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <p>市販のきのこは、「菌床栽培（きんしょうさいばい）」といって、木材に米ぬかなどの栄養を混ぜて高温殺菌したブロック（＝菌床）に、きのこの種菌（たねきん）を植えつけて培養されます。</p>
          <p class="mb3">この栽培方法の場合、非常に清潔な環境できのこが育つため、洗わず調理しても大丈夫なのです。<strong>洗うと風味が落ちるだけでなく、水に触れることで劣化が早くなります</strong>。</p>
          <section>
            <div class="recipe-design__check check mb3">
              <div class="check__row">
                <div class="check__ttl">
                  <h4 class="check__ex center">
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png" alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
                  </h4>
                </div>
                <h3>農薬は気にし過ぎず大丈夫</h3>
                <p>「洗わずに食べる」と聞いて気になるのが、農薬の残留。しかし、日本で栽培されているきのこに関しては、特段気にする必要はありません。</p>
                <p>日本では、きのこに使用できる農薬の質や量が決まっており、厳しく管理されています。<br>無農薬で栽培している農家も多く、たとえ使用していても、残留農薬値を地方公共団体などが監視・指導しています。<br>中でも「国産安心きのこ認証マーク」が付いているきのこは、独自の審査基準をクリアした、無農薬栽培かつ原木自体の安全性が高いもの。気になる方は、このマークが付いているかチェックするとよいでしょう。</p>
              </div>
            </div>
          </section>
          <section>
            <div class="recipe-design__check check mb3">
              <div class="check__row">
                <div class="check__ttl">
                  <h4 class="check__ex center">
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png" alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
                  </h4>
                </div>
                <h3>白いカビに見えるものは「気中菌糸」</h3>
                <p>しめじやまいたけの傘の表裏、石づきの部分などに、白いフワフワしたものが付いていることがあります。「これってカビ？」と、驚いたことがある人もいるかもしれませんね。</p>
                <p>この白いカビに見えるものは、「気中菌糸（きちゅうきんし）」。気中菌糸はきのこを形成する菌糸が伸びたもので、カビではなくきのこの一部です。もちろん、食べても問題はありません。もし抵抗があるなら、キッチンペーパーで拭き取ってから使用しましょう。</p>
                <p>ちなみに本当にカビが付いた場合、緑や青に変色して、異臭やぬめり、水っぽさが出たりします。腐敗が考えられるため、廃棄しましょう。</p>
              </div>
            </div>
          </section>
          <h4 class="recipe__ttl">きのこを洗った方がよい場合とは？</h4>
          <p>例外的に、きのこにも洗った方がよいとされる場合もあります。<br>たとえば<a href="<?php echo ($base_url) ?>/magazine/article/recipe09.php" class="recipe-design__link">サラダ</a>に使う生のマッシュルームや、粘りのあるなめこ、生きくらげ、はなびらたけといったきのこは、調理の前に軽く水洗いした方がよいといわれています。</p>
          <p class="mb3">また、山に生えている天然のきのこは、土や砂などの汚れが付いているため、洗ってから調理するようにしましょう。<br>さらに、虫が付いていることも多いので、「虫出し」という作業が必要となります。<br>まず1～4％の塩水に、15分程度きのこを漬けてください。表面に浮いた虫や沈んだ虫を捨て、水切りをしたら完了です。</p>
          <h3 class="recipe__ttl_l mb0">市販のきのこの下ごしらえ方法</h3>
          <p class="mb3">きのこを料理に使うときの、<a href="<?php echo ($base_url) ?>/magazine/article/recipe-collect03.php" class="recipe-design__link">下ごしらえ</a>方法をお伝えします。</p>
          <h4 class="recipe__ttl">しいたけの下ごしらえ</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-02@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . $altCap02); ?>" style="max-width:300px" class="u-img__max">
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-03@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . $altCap03); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-04@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . $altCap04); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl" id="shimeji">しめじの下ごしらえ</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-05@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . $altCap05); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">まいたけの下ごしらえ</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-06@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . $altCap06); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">えのきの下ごしらえ</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-07@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . $altCap07); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl" id="eringi">エリンギの下ごしらえ</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-08@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . $altCap08); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <h3 class="recipe__ttl_l mb0">きのこの保存方法</h3>
          <p class="mb3">きのこを保存する際は、冷凍保存がおすすめです。冷凍～加熱の過程で、うまみ成分である「グアニル酸」が生成され、美味しさがアップしますよ。</p>
          <h4 class="recipe__ttl">冷凍保存の方法</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/27/tech27-09@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . $altCap09); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?></dd>
          </dl>
        </div>
      </div>
      <?php
      $recipeIcon = 'mie_01';
      $speech = 'きのこって水で洗わなくてもOKなんですね！<br>冷凍で保存した方がいいなんて、知らなかったです';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = 'そのまま加熱できるから時短にもつながりますし、<br class="u-only__pc">うまみが増すので一石二鳥ですよね♪<br>ぜひ、冷凍きのこを活用してみてくださいね！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mie_01';
      $speech = 'は～い！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <section class="mb3">
        <h5>■関連記事</h5>
        <ul>
          <li class="recipe-photolist__item recipe-photolist__reciperecommend">
            <a href="<?php echo $base_url; ?>/magazine/article/recipe21.php" class="recipe-photolist__row">
              <img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_recipe21.jpg" alt="鮭ときのこで作る簡単ご飯ピザ" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
              <p class="reciperecommend-ttl">●鮭ときのこで作る簡単ご飯ピザ</p>
            </a>
          </li>
          <li class="recipe-photolist__item recipe-photolist__reciperecommend">
            <a href="<?php echo $base_url; ?>/magazine/article/recipe-technic150.php" class="recipe-photolist__row">
              <img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech150.jpg" alt="きのこのソテーのレシピ！簡単に美味しく作るコツをご紹介" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
              <p class="reciperecommend-ttl">●きのこのソテーのレシピ！簡単に美味しく作るコツをご紹介</p>
            </a>
          </li>
          <li class="recipe-photolist__item recipe-photolist__reciperecommend">
            <a href="<?php echo $base_url; ?>/magazine/article/recipe10.php#paella" class="recipe-photolist__row">
              <img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_recipe10.jpg" alt="第10話 シーフードパエリア アレンジレシピ【チキンときのこのパエリア】" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
              <p class="reciperecommend-ttl">●第10話 シーフードパエリア アレンジレシピ【チキンときのこのパエリア】</p>
            </a>
          </li>
        </ul>
      </section>
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
