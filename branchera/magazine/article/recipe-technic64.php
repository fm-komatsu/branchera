<?php
//base
include("../../function.php");
$content = get_id_data('15064');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「パスタのゆで方」を動画で解説。美味しく仕上がる、基本のパスタのゆで方をご紹介します。「ショートパスタのときは？」「アルデンテにゆでるには？」というよくある疑問に答えるほか、おすすめパスタレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'ksWynKhXVgw';

//導入文
$introTxt = '第64回は「パスタのゆで方」です。失敗しない手順やおすすめのレシピを詳しくご紹介します。';

//キャプチャALTタグ
$altCap01 = 'ロングパスタは、スパゲッティやフィットチーネなどの長い麺状のもの。写真のスパゲッティは直径1.8mm前後、長さ25cm前後の円柱状で、もっともポピュラーなパスタです。<br>フィットチーネは麺の幅が5～10mmの平麺状で、クリームソースとの相性がよいといわれています。ロングパスタのなかには、スパゲッティと同じ形状でより細いスパゲッティーニや、楕円状の断面を持つリングイネなどもあります。';
$altCap02 = 'ショートパスタは短くカットされたパスタで、ロングパスタよりも多くの種類があります。写真のペンネは、円筒状のショートパスタの両端を、ペン先のように斜めにカットしたパスタです。ほかにも、サラダやグラタンによく用いられるマカロニや、貝殻型や蝶々型など、さまざまな形状のパスタがあります。';
$altCap03 = '水を入れた鍋を強火にかけて、沸騰させます。<br>鍋は十分な大きさのあるものを使いましょう。';
$altCap04 = '沸騰したお湯の中に塩を入れます。';
$altCap05 = '沸騰したお湯の中にパスタを入れます。<br>両手でパスタの束を持って軽くひねり、パッと離して散らすように入れましょう。';
$altCap06 = '菜箸でパスタをお湯に沈めます。<br>火加減を中火に落として、沸騰した状態を保ちながらゆでてください。';
$altCap07 = 'パスタがくっつかないように、菜箸で軽く混ぜながらゆでます。<br>ゆで時間は、パスタのメーカーや麺の太さによって異なるため、使用する商品に記載されている時間を基準にして、好みのかたさに調整してください。';
$altCap08 = 'パスタを1本取って、かたさを確認します。<br>写真のように、パスタがねじれて隙間なくくっつく状態がちょうどよいゆで具合です。<br>1本食べて確認すると、より正確にかたさを確認できます。';
$altCap09 = '少しかため（アルデンテ）：中心に針先ほどの芯が残っています。写真のように、パスタがゆるいカーブを描いてギリギリくっつく状態がアルデンテです。';
$altCap10 = 'パスタが好みのかたさにゆで上がったら火を止め、ざるに上げて水を切ります';
$altCap11 = 'たまねぎ、にんじんを刻み、合いびき肉と一緒に炒めます。お好みで刻んだにんにくを加えても美味しいですよ。とろみづけの薄力粉をまぶし、トマト缶で煮込んで塩、こしょうなどで調味すれば、ミートソースのできあがり。ゆでたてのパスタに絡めるほか、ドリアやラザニアなどにも使えます。';
$altCap12 = 'ケチャップの甘味が懐かしい人気メニュー。7mm幅くらいの<a href="' . $base_url . '/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>にしたたまねぎ、細切りのピーマン、斜め切りにしたウィンナー、お好みで刻んだにんにくをフライパンで炒めます。ケチャップを加えて数分炒めたら、ゆでたてのパスタとゆで汁少々を加え、全体を混ぜたらできあがりです。';
$altCap13 = 'シンプルな味わいで、飽きずに食べられるペペロンチーノ。フライパンにオリーブオイルを入れ、薄切りにしたにんにくを弱火にかけます。香りが出てきたら、ゆで汁（1人分につき大さじ2程度）を加えてよく混ぜ、ゆでたてのパスタをからめたら塩こしょうで味を調えましょう。';
$altCap14 = 'ゆで上がったパスタに、オリーブオイルとレモン汁適量、ゆで汁少々と、パルメザンチーズをたっぷりかけます。全体をよく混ぜたらできあがり。チーズとゆで汁に塩味が付いていますが、お好みで塩こしょうを加えて味を調えてください。スパゲッティだけでなく、ペンネなどのショートパスタとも相性抜群です！加熱したズッキーニや、薄切りのチキンを入れても美味しく食べられます。';
$altCap15 = '';
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
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br><?php echo $introTxt ?></p>
      </div>
      <hr class="recipe__line">
      <?php
      $recipeIcon = 'mama_01';
      $speech = 'にんにくがあるから、今日のご飯はペペロンチーノにしようっと！<br>でも、私がパスタをゆでるとやわらか過ぎたりくっついたりして、<br class="u-only__pc">いまいちうまくいかないのよね…なんでだろう？';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'fl_01';
      $speech = 'それは、ゆで方のコツを知らないからだな！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mama_03';
      $speech = 'コツ！？ねえフラッキー、それ教えてくれない？';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'fl_01';
      $speech = 'おうよ、任せとけ！<br>パスタのゆで方はシンプルなだけに、<br class="u-only__pc">ちょっとした工程で、仕上がりも大きく変わってくるぞ<br>まずはパスタの種類から解説するから、しっかりついて来いよ～！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mama_01';
      $speech = 'はいっ！よろしくお願いしまーす！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie-new technic">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl@2x.png" alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">パスタの種類と特徴</h3>
          <p class="mb2">パスタは、イタリア料理の主食のひとつ。パスタと聞くと、棒状のものを思い浮かべる人が多いのではないでしょうか。しかし、実はパスタには多くの形状が存在し、その種類は500種類以上に上るといわれています。<br>パスタは大きく分けると、「ロングパスタ」と「ショートパスタ」に分けられます。それぞれの特徴を見ていきましょう。</p>
          <h4 class="recipe__ttl_tech">ロングパスタ</h4>
          <div class="u-clearfix mb2">
            <p>
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-01@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <span>
              <?php echo ($altCap01); ?>
            </span>
            </p>
          </div>
          <h4 class="recipe__ttl_tech">ショートパスタ</h4>
          <div class="u-clearfix mb3">
            <p>
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-02@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <span>
              <?php echo ($altCap02); ?>
            </span>
            </p>
          </div>
          <h3 class="recipe__ttl_l mb0">基本のパスタのゆで方</h3>
          <p class="mb2">多くの種類が存在するパスタ。今回は、そのなかでももっともポピュラーな「スパゲッティ」を使用して、基本のゆで方を解説します。</p>
          <h4 class="recipe__ttl_tech">材料（2人分）</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>パスタ（スパゲッティ）</dt>
              <dd>160g</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>水</dt>
              <dd>2リットル</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>塩</dt>
              <dd>10g</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-03@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-04@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-05@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-06@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-07@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
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
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png" alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
                  </div>
                  <span>ショートパスタをゆでるときのポイント</span>
                </h4>
                <p class="mb2">ショートパスタをゆでる場合は、ロングパスタより小さめの鍋でもOK。でも、パスタ同士がくっつかない程度のゆとりと、十分な水の量は必要だぞ。水1リットルに対して塩10gを入れ、ロングパスタと同じ要領でゆでるんだ。商品に記載されたゆで時間が近付いたら、パスタをひとつ取って真ん中あたりをちぎり、かたさを確認しよう。ショートパスタは歯ごたえがあるので、芯が残らないようにゆでるのがおすすめだぜ！</p>
              </div>
            </div>
          </div>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-08@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-09@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-plus1 mb3">
              <div class="recipe-plus1__row">
                <h4 class="recipe-plus1__ttl">アルデンテはどんなゆで方？</h4>
                <p class="mb2">アルデンテとは、ほどよい歯ごたえが残った理想のゆで具合を表す言葉で、パスタの中心にわずかに芯が残った状態とされています。商品に記載のゆで時間より1分ほど短くするとよいといわれていますが、最終的には1本食べてかたさを確認するのがおすすめです。</p>
                <p>かため：しっかりと芯が残っていて、歯ごたえがあります。1本取ると、ピンと張っている状態です。</p>
              </div>
            </div>
          </section>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-10@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap10); ?>
            </dd>
          </dl>
          <div class="recipe-check mb3">
            <div class="recipe-check__row">
              <div class="recipe-check__ttl">
                <h4>
                  <div class="recipe-check__ex center">
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png" alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
                  </div>
                  <span>フライパン上でソースと絡める場合は？</span>
                </h4>
                <p class="mb2">ゆで上がったパスタをフライパン上でソースと絡める場合は、ざるに上げずに、トングなどで取って鍋から直接フライパンに入れてOK！少しパスタにゆで汁が残っている方が、ソースの油分が乳化してよくなじむからだ。そして、ゆで上がったらなるべく手早く絡めるのが美味しさのコツ！パスタのゆで上がりとほぼ同時に、ソースも仕上がっているのが理想だぞ。</p>
              </div>
            </div>
          </div>
          <h3 class="recipe__ttl_l mb0">おすすめパスタレシピ</h3>
          <p>スパゲッティを使用した、おすすめのレシピをご紹介します。</p>
          <h4 class="recipe__ttl_tech" id="meat-sauce">ミートソースパスタ</h4>
          <div class="u-clearfix mb2">
            <p>
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-11@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <span>
              <?php echo ($altCap11); ?>
            </span>
            </p>
          </div>
          <h4 class="recipe__ttl_tech">ナポリタン</h4>
          <div class="u-clearfix">
            <p>
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-12@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap12)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <span>
              <?php echo ($altCap12); ?>
            </span>
            </p>
          </div>
          <h4 class="recipe__ttl_tech">ペペロンチーノ</h4>
          <div class="u-clearfix mb2">
            <p>
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-13.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-13@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap13)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <span>
              <?php echo ($altCap13); ?>
            </span>
            </p>
          </div>
          <h4 class="recipe__ttl_tech">レモンチーズパスタ</h4>
          <div class="u-clearfix">
            <p>
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-14.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/64/tech64-14@2x.jpg" alt="フラッキーのHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap14)); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <span>
              <?php echo ($altCap14); ?>
            </span>
            </p>
          </div>
        </div>
      </div>
      <?php
      $recipeIcon = 'papa_01';
      $speech = 'うわ～、このぺペロンチーノ美味しいね！<br>パスタにほどよい歯ごたえがあって、<br class="u-only__pc">なんだか本格的だな～';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mama_01';
      $speech = '本当！？今日はフラッキーおすすめの、アルデンテにゆでてみたの！<br>コウちゃんの分は少しやわらかくして、ミートソースをかけたよ♪';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'ko_01';
      $speech = 'うん！すぱげってぃおいし～い！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'fl_01';
      $speech = 'おっ！ゆで具合を調整できるなんて、上達したじゃないか～<br>パスタのゆで時間はメーカーによって異なるから、<br class="u-only__pc">毎回パッケージに書いてあるゆで時間の目安を確認するのを忘れずにな！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mama_01';
      $speech = '次は、ショートパスタ料理を作ってみようっと♪';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>

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
