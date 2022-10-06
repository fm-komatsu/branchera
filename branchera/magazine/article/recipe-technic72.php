<?php
//base
include("../../function.php");
$content = get_id_data('15072');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「魚の冷凍保存方法」を動画とテキストで解説。魚を冷凍保存する方法は、魚の種類や加工の仕方によって方法が異なる場合があります。切り身・干物・一尾・刺身…それぞれどのように冷凍保存するのかをご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'A6VgJVRhtEY';

//導入文
$introTxt = '第72回は「魚の冷凍保存方法」です。美味しさと新鮮さを保つことができる、魚の冷凍保存方法と解凍方法をご紹介します。';

//キャプチャALTタグ
$altCap01 = '余分な水分（ドリップ）を拭き取ります。';
$altCap02 = '1切ずつ分けて、ラップでぴったり包みます。';
$altCap03 = 'ファスナー付きの保存袋に入れて、密閉して冷凍保存します。<br>保存期間の目安は、約2週間です。';
$altCap04 = '1匹ずつ分けて、ラップでぴったり包みます。';
$altCap05 = 'ファスナー付きの保存袋に入れて、密閉して冷凍保存します。<br>保存期間の目安は、約2週間です。';
$altCap06 = '煮付け';
$altCap07 = '味噌漬け';
$altCap08 = '味噌煮';
$altCap09 = '照り焼き';
$altCap10 = 'フライ';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';
$altCap14 = '';

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
      $speech = 'マユ先生～<br>お魚が新鮮で安くて、ついたくさん買い過ぎちゃいました～<br>毎日<a href="' . $base_url . '/magazine/article/recipe-technic140.php" class="recipe-design__link">お魚料理</a>ばっかりになりそう…';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = 'いいですね！美味しいお魚。<br>買ってきたら、新鮮なうちに冷凍で保存するのがおすすめですよ';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mie_01';
      $speech = '冷凍！その手がありました<br>それなら急いで食べなくても、少しずつ料理できますね';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = '臭みや変色を防ぐには、できるだけ新鮮なうちに冷凍してしまいましょう<br>解凍するときも、美味しく食べるコツがあるんですよ';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mie_01';
      $speech = 'せっかくのお魚、美味しく食べたいです<br>上手に冷凍と解凍をするポイントを教えてください！';
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
          <h3 class="recipe__ttl_l mb0">魚の冷凍保存方法</h3>
          <p class="mb2">魚を冷凍保存する方法は、魚の種類や加工の仕方によって異なる場合があります。適した方法で冷凍しましょう。</p>
          <h4 class="recipe__ttl" id="kirimi">切り身の場合</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-01@2x.jpg" alt="マユ先生のHow To <?php echo ('「' . $pageTtl . '」' . strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-02@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-03@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl">干物の場合</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-04@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-05@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?></dd>
          </dl>
          <h4 class="recipe__ttl" id="ichibi">一尾の場合</h4>
          <p class="mb2">頭、エラ、ウロコ、内臓（ワタ）は傷みやすいので、冷凍する前に取り除きましょう。<br>自分でやる時間がない場合、魚屋さんやスーパーなど、魚を購入した売り場に頼みましょう。ほとんどの場合、処理をした状態で渡してくれます。<br>保存の仕方と保存期間の目安は、切り身の場合と同じです。</p>
          <h4 class="recipe__ttl">刺身の場合</h4>
          <p class="mb2"><a href="recipe-technic24.php" class="recipe-design__link">刺身</a>の冷凍は、あまりおすすめできません。空気に触れる面積が多いため、冷凍すると味が落ちてしまうからです。食べきれなかった刺身は、<a href="recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>とみりんの合わせだれに漬けて「<a href="recipe-technic100.php" class="recipe-design__link">ヅケ</a>」にして、翌日中に食べるようにしましょう。ヅケにした魚は、小麦粉、<a href="recipe-technic08.php" class="recipe-design__link">卵</a>、パン粉の衣を付けて、<a href="recipe-technic09.php" class="recipe-design__link">フライ</a>にするのもおすすめです。</p>
          <p class="mb2">どうしても冷凍したい場合は、キッチンペーパーできちんとドリップを吸収させて、重ならないようにラップで包み、ファスナー付きの保存袋で冷凍します。冷凍庫では金属のトレイに乗せて急速冷凍すると、凍るまでの時間が短くなりますよ。</p>
          <p class="mb2">柵（サク）で買ったときは、空気に触れる部分が少ないので、切ってある状態の刺身よりは長持ちします。切り身と同じように余分な水分（ドリップ）を拭き取ります。その後、ラップに包んで密閉し、ファスナー付きの保存袋で保存します。</p>
          <p class="mb2">ちなみに、冷凍した刺身を解凍して、再び刺身として食べることは難しいです。後日、冷凍した刺身用の魚を食べるときは、必ず火を通して調理してから食べるようにしましょう。<br>保存期間の目安は、<strong>約1週間</strong>です。</p>
          <h3 class="recipe__ttl_l mb0">魚のおすすめ解凍方法</h3>
          <p class="mb2">できるだけ冷凍庫内と温度差の小さい状態で解凍するのが、美味しく解凍するコツです。家庭でできる、おすすめの解凍方法をご紹介します。</p>
          <h4 class="recipe__ttl">流水解凍</h4>
          <p class="mb2">美味しさが保たれる、おすすめの方法です。ボウルに水を張り、冷凍した魚を保存袋のまま入れて、水道水を細く注ぎ入れます。流水に当てた状態を保つと、少しずつ解凍されていきますよ。保存袋に水が入らないよう、密閉できる袋を使ってください。</p>
          <h4 class="recipe__ttl">氷水解凍</h4>
          <p class="mb2">氷水に冷凍した魚を浸け置いて解凍する方法です。水が冷たい分、流水解凍よりも<a href="recipe-technic40.php" class="recipe-design__link">鮮度</a>が落ちにくく、ドリップも出にくいです。流水解凍と同じように、保存袋内に水が入らないように密閉して行ないましょう。</p>
          <h4 class="recipe__ttl">冷蔵庫解凍</h4>
          <p class="mb2">時間があるときにおすすめの方法です。解凍中も<a href="recipe-technic40.php" class="recipe-design__link">鮮度</a>が保たれるので、傷みにくいというメリットがあります。冷凍した魚を冷蔵庫に数時間置いておくだけでOK。魚の厚みや大きさにもよりますが、4～6時間程度で、手で触ってやわらかく感じる程度に解凍されます。朝、冷蔵庫に移しておけば、夕食を作る頃にはちょうどよく解凍されそうですね。</p>
          <h4 class="recipe__ttl">電子レンジ解凍</h4>
          <p class="mb2">電子レンジの解凍モードを使えば、すぐに解凍したいとき便利です。200W程度の低出力で加熱されるため、レンジにかけても魚が温まることはありません。半解凍状態や解凍ムラになりやすいので注意が必要です。特に古いレンジで解凍する際は、何度か解凍具合を確認しながら、加熱時間を調整するようにしましょう。</p>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">冷凍干物はそのままグリルで解凍！</h3>
              <p>冷凍した干物は解凍せず、そのまま魚焼きグリルで調理できますよ。事前にしっかり予熱をして、皮目を下にして<a href="recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で焼きます。焼き色がついたら裏面も同じように焼きましょう。焦げやすいので、焼き色を確認しながら、火加減を調節してくださいね。</p>
            </section>
          </div>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">気になる臭いの原因は「ドリップ」</h3>
              <p class="mb2">新鮮な状態で冷凍したのに、解凍するとなんだか水っぽく生臭い…。<br>その原因は、「ドリップ」と呼ばれる、凍った細胞から流れ出た水分。ドリップは残念ながら“美味しいエキス”とはならず、うまみも一緒に流れ出てしまいます。また、ドリップがでる過程で鮮度が失われると、生臭みの原因にも。</p>
              <p>ドリップが出るのを防ぐには、急速冷凍と低温解凍を心がけることが大切です。ステンレスのバットや氷の上にのせて冷凍庫に入れて、なるべく短時間で凍らせましょう。<br>そのとき、魚をキッチンペーパーに包んで解凍すると出てきた水分を吸収するので、味が落ちてしまうのを防げますよ。</p>
            </section>
          </div>
          <h3 class="recipe__ttl_l mb0">時短＆らくちん！魚の下味冷凍レシピ</h3>
          <p class="mb2">下味冷凍とは、買ってきた魚に下味をつけて冷凍すること。ファスナー付きの保存袋に、調味液ごと魚を入れて冷凍します。調味液によって空気に触れる面積が減ることで、生魚の状態で冷凍するよりも鮮度が落ちにくく、美味しさを保てます。また、解凍後すぐに調理できるので、時短にもつながりますよ。</p>
          <p class="mb2">下味冷凍の保存期間の目安は、<strong>約1ヵ月</strong>です。使うときは生魚と同じように解凍するほか、凍ったまま調理できるものもあります。</p>
          <h4 class="recipe__ttl"><?php echo ($altCap06); ?></h4>
          <div class="u-clearfix mb2">
            <div class="u-float__left mb2_sp w50">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-06@2x.jpg" alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </div>
            <p>
              <a href="recipe-technic22.php" class="recipe-design__link">酒</a>、みりん、醤油で下味を付けて冷凍した魚を解凍し（凍ったままでもOK）、調味液ごと鍋に入れて、<a href="recipe-technic05.php" class="recipe-design__link">だし</a>または水を加えて煮立てます。砂糖と生姜を加えて、下味と同じ調味料を適宜足して味をととのえます。
            </p>
          </div>
          <h4 class="recipe__ttl"><?php echo ($altCap07); ?></h4>
          <div class="u-clearfix mb2">
            <div class="u-float__right mb2_sp w50">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-07@2x.jpg" alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </div>
            <p>
              <a href="recipe-technic22.php#miso" class="recipe-design__link">味噌</a>、砂糖、みりん、生姜、または塩麹で下味冷凍。使うときは解凍してからグリルやフライパンで焼きます。焦げやすいので、調味液をキッチンペーパーでぬぐって落としてから焼きましょう。
            </p>
          </div>
          <h4 class="recipe__ttl"><?php echo ($altCap08); ?></h4>
          <div class="u-clearfix mb2">
            <div class="u-float__left mb2_sp w50">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-08@2x.jpg" alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </div>
            <p>
              上記の味噌漬けと同じように下味冷凍した魚を、凍ったままフライパンや鍋に入れて水を加えます。酒や生姜を入れて、落とし蓋をして煮ます。
            </p>
          </div>
          <h4 class="recipe__ttl"><?php echo ($altCap09); ?></h4>
          <div class="u-clearfix mb2">
            <div class="u-float__right mb2_sp w50">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-09@2x.jpg" alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </div>
            <p>
              醤油、砂糖、酒で下味冷凍した魚を、そのままフライパンやグリルで焼きます。フライパンは焦げやすいので水を少量入れるか、クッキングシートなどにのせて焼きましょう。
            </p>
          </div>
          <h4 class="recipe__ttl"><?php echo ($altCap10); ?></h4>
          <div class="u-clearfix mb2">
            <div class="u-float__left mb2_sp w50">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/72/tech72-10@2x.jpg" alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </div>
            <p>
              塩、こしょうで味付けした魚に小麦粉、卵、パン粉などのフライ衣をつけた状態で冷凍します。調理するときは、凍ったまま揚げればOK。中心部まで火が通りにくいので、低温で長めに揚げます。
            </p>
          </div>
        </div>
      </div>
      <?php
      $recipeIcon = 'mie_01';
      $speech = '冷凍の魚にも期限があったんですね<br>使うのを忘れて、つい入れっぱなしにしがちでした';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = '扉の開け閉めなどで温度が上がると、冷凍でも劣化します<br>あくまでも最適な状態で保存できたときの話なので、注意してくださいね<br>解凍したらなるべく早く料理して、美味しく食べましょう';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mie_01';
      $speech = '魚料理は大変そうなイメージがあったけど<br class="u-only__pc">時短の助けにもなるし、冷凍なら簡単ですね！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      //関連記事
      $recommendrecipe = array(
        array('recommend-recipe-st'),
        array('recommend-recipe-id', '15106'),
        array('recommend-recipe-id', '14002'),
        array('recommend-recipe-id', '14021'),
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
