<?php
//base
include( "../../function.php" );
$content = get_id_data( '15066' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「里芋の下ごしらえ」を動画で解説。生のまま包丁で皮むきする方法、電子レンジで加熱してから皮むきする方法、下ゆでしてから皮むきする方法に分けてご紹介します。また、保存方法や、里芋を使った人気レシピも一緒にご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'AcmeNQ6-22c';

//導入文
$introTxt = '第66回は「里芋の下ごしらえ」です。失敗しない手順から、応用レシピまで詳しくご紹介します。';

//キャプチャALTタグ
$altCap01 = '里芋の洗い方は、どの皮むきの方法でも共通です。<br>まず里芋を水洗いして、表面に付いた泥を落とします。<br>しつこい泥は、たわしなどでこすって落としましょう。';
$altCap02 = 'ぬめりが出るのを防ぐため、ふきんやキッチンペーパーなどで里芋の水分を拭き取ります。';
$altCap03 = '里芋の上部と下部を切り落とします。';
$altCap04 = '包丁を上から下へ向かって入れ、縦方向に皮をむきます。';
$altCap05 = '皮が残っているほかの面も、同様にむいてください。';
$altCap06 = '里芋をラップに包み、600wの電子レンジで約5分加熱します。<br>※里芋3個を加熱する場合の目安時間';
$altCap07 = '火傷を防ぐために、キッチンペーパーなどに包んだ状態で、上から下へ繊維に沿って皮をむいていきます。';
$altCap08 = '保存する場合は、ペーパーでよく水気を拭き取ってからファスナー付き保存袋に入れて、冷凍庫に入れます。';
$altCap09 = 'ペースト状で保存する場合は、手で押し潰して、平らにしてから冷凍庫に入れましょう。<br>保存期間の目安は、約1ヵ月です。';
$altCap10 = '鍋に昆布つゆ、酒、みりん、砂糖、顆粒だしを入れて、加熱します。沸騰したら大根、里芋の順に鍋に入れて、やわらかくなるまで煮込んだら完成です。';
$altCap11 = '里芋を5mmほどの厚さに切り、ねぎや大根など、好みの具材とともに<a href="'.$base_url.'/magazine/article/recipe-technic39.php" class="recipe-design__link">味噌汁</a>に入れましょう。豚汁にする場合は、豚肉、里芋のほかに大根やごぼう、にんじん、糸こんにゃくを入れるのがおすすめです。<br>けんちん汁にする場合は、木綿豆腐、里芋、大根、にんじん、ごぼう、しいたけ、こんにゃく、小松菜、油揚げなどをごま油で炒め、だしを加えて煮込みます。最後に味噌、または醤油で味を調えてください。';
$altCap12 = '里芋をレンジで温め、やわらかくしておきます。<br>次に、味噌だれを作ります。赤味噌、すりごま、酒、みりん、砂糖を鍋に入れて温めましょう。そこにミルなどで細かくしたくるみを入れて、たれとよく混ぜ合わせます。<br>串に刺した里芋に、味噌だれをたっぷりかければできあがり！';
$altCap13 = 'いつものシチューに入れるじゃがいもを、里芋に変えるのはいかがでしょうか？
玉ねぎをバターで炒め、鶏肉を加えます。肉の色が変わったら、にんじん、里芋を加えてさらに炒めます。牛乳、水を加えて弱火で煮込み、最後に市販のシチューのルウを加えてひと煮立ちさせます。とろみが付いたら、塩こしょうで味を調えましょう。';
$altCap14 = '';
$altCap15 = '';
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
        $recipeIcon ='mama_01';
        $speech ='今日は里芋をいっぱい買ってきちゃった！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='おっ、旬だもんね～！やっぱり煮物にするの？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_02';
        $speech ='そのつもりなんだけど…<br>里芋って皮がむきづらいし、ぬめりがあるから<br class="u-only__pc">下ごしらえがちょっと大変なのよねえ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='なになに～？ミエは里芋の皮をツルっとむく方法を知らないのか？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_03';
        $speech ='え！？そんな方法があるの？<br>フラッキー、教えて～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='ふっふっふ、俺についてきな！<br>あっという間に里芋の下ごしらえができるようにしてやるぜ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='フラッキー、頼もしいー！<br>よろしくね！';
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
          <h3 class="recipe__ttl_l mb0">里芋の下ごしらえ</h3>
          <p class="mb2">秋から冬が旬の食材、里芋。ホクホクしていて美味しい里芋ですが、皮がむきづらかったり、切るときに手が滑りやすかったりと、下ごしらえが面倒なイメージがありますよね。でも、ある方法で意外と簡単にできるんですよ。<br>今回は、生のまま包丁で皮むきする方法と、電子レンジで加熱してから皮むきする方法、下ゆでしてから皮むきする方法に分けてご紹介します。</p>
          <h4 class="recipe__ttl_tech">里芋の洗い方</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-01@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl_tech">包丁で皮むきする方法</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl_tech">レンジで加熱してから皮むきする方法</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-06@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-07@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <div class="recipe-check mb3">
            <div class="recipe-check__row">
              <div class="recipe-check__ttl">
                <h4>
                <div class="recipe-check__ex center">
                  <img
                  data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png"
                  data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png"
                  alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
                </div>
                <span>冷めないうちに皮をむくと上手にむける</span></h4>
                <p class="mb2">里芋は冷めると皮がむきづらくなるから、完全に冷める前に皮をむくのがコツ！<br>その分、火傷には要注意！必ずキッチンペーパーなどに包んだ状態で手に取るようにしよう。できるだけ手早く行なうように！</p>
              </div>
            </div>
          </div>
          <h4 class="recipe__ttl_tech">皮ごと下ゆでしてから皮むきする方法</h4>
          <p>里芋が浸かるくらいの量の水を鍋に入れます。<br>そこに洗った里芋を皮ごと入れて、水からゆでてください。
          </p>
          <p>中火で約10～15分加熱します。<br>竹串が刺さるくらいやわらかくなったら、ざるにあげましょう。</p>
          <p class="mb3">手で触れることができる程度に冷めたら、両端を薄く切り落とします。<br>上から下に向けて、繊維に沿って手で皮をむいていきましょう。</p>
          <section>
            <div class="recipe-plus1 mb3">
              <div class="recipe-plus1__row">
                <h4 class="recipe-plus1__ttl">里芋のぬめりを取る方法</h4>
                <p class="mb2">里芋のぬめりは、煮汁の吹きこぼれや粘り気の原因になります。美味しい里芋料理を作るには、事前にぬめりを取っておくことがおすすめです。</p>
                <h5 class="recipe__ttl_s">塩もみする</h5>
                <p>皮をむいた里芋をボウルに入れて、塩をまぶします。塩を里芋にまんべんなく、こすり付けるように塩もみすると、ぬめりが取れますよ。</p>
                <h5 class="recipe__ttl_s">お酢を入れて下ゆでする</h5>
                <p>お酢を入れた水で下ゆでをすると、ぬめりが取れます。水1リットルに対してお酢大さじ1を加えてゆでた後、水にさらしてお酢を落としましょう。</p>
              </div>
            </div>
          </section>
          <section>
            <div class="recipe-plus1 mb3">
              <div class="recipe-plus1__row">
                <h4 class="recipe-plus1__ttl">煮崩れを防ぐ“六方むき”のやり方</h4>
                <p class="mb2">里芋をはじめ、球形の食材の側面が6面になるように切る“六方むき”。六方むきに切ると煮崩れしにくくなり、煮物がとてもきれいに仕上がります。お正月に食べるお煮しめなど、おもてなし料理にもおすすめです！</p>
                <ol class="u-list__ul_num">
                  <li>里芋の上部と下部を平行になるように切り落としてください。</li>
                  <li>上から下に向かって、側面の皮をむきながら切っていきます。</li>
                  <li>側面が全部で6面になるようにむいていきます。1面むいたら、真裏（反対）の側面をむくという順番で進めましょう。各面の大きさのバランスがよくなりますよ。</li>
                </ol>
              </div>
            </div>
          </section>
          <h3 class="recipe__ttl_l mb0">里芋の保存方法</h3>
          <p class="mb2">電子レンジでの加熱や下ゆでをして、皮むきした後の里芋の保存方法についてお伝えします。</p>
          <h4 class="recipe__ttl_tech">冷蔵保存の場合</h4>
          <p class="mb3">水を入れたボウルや保存容器に漬けて保存します。ラップなどで蓋をして、そのまま冷蔵庫に入れましょう。<br>保存期間の目安は、約2～3日です。</p>
          <div class="recipe-check mb3">
            <div class="recipe-check__row">
              <div class="recipe-check__ttl">
                <h4>
                  <div class="recipe-check__ex center">
                    <img
                    data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png"
                    data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png"
                    alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
                  </div>
                </h4>
                <p class="mb2">水を入れて保存するのは、里芋の変色を防ぐためなんだ。毎日水を取り変えて保存すると、より長持ちするぜ！とはいえ、できるだけ早めに調理するようにな！</p>
              </div>
            </div>
          </div>
          <h4 class="recipe__ttl_tech">冷凍保存の場合</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-08@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-09@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?>
            </dd>
          </dl>
          <h3 class="recipe__ttl_l mb0">里芋を使った人気レシピ</h3>
          <p class="mb2">寒い季節の旬の食材、里芋を使った人気のレシピをご紹介しましょう。</p>
          <h4 class="recipe__ttl_tech">里芋と大根の煮込み</h4>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__left">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-10@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」里芋と大根の煮込み｜'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap10); ?>
              </span>
            </p>
          </div>
          <h4 class="recipe__ttl_tech">里芋の味噌汁</h4>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__right">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-11@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」里芋の味噌汁｜'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap11); ?>
              </span>
            </p>
          </div>
          <h4 class="recipe__ttl_tech">里芋の田楽</h4>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__left">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-12@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」里芋の田楽｜'. strip_tags($altCap12)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap12); ?>
              </span>
            </p>
          </div>
          <h4 class="recipe__ttl_tech">里芋のシチュー</h4>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__right">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-13.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/66/tech66-13@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」里芋のシチュー｜'. strip_tags($altCap13)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap13); ?>
              </span>
            </p>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='mama_03';
        $speech ='里芋の下ごしらえがこんなに簡単にできるなんて…！<br>さすが、フラッキー！！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='これでいろんな里芋料理にチャレンジできるな！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='よし。お正月は、里芋をたっぷり入れたお煮しめを作ってみようかな？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='やったー！楽しみだな～♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
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
