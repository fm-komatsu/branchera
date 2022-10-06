<?php
//base
include( "../../function.php" );
$content = get_id_data( '15063' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「裏ごしのやり方」を動画で解説。食材をなめらかにする裏ごしのコツを、かぼちゃを使ってご紹介します。また、裏ごし器がないときの代用法、裏ごしした食材を使った人気レシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = '05hwTHsLc_M';

//導入文
$introTxt = '第63回は「裏ごしのやり方」です。上手な裏ごしのやり方から、応用レシピまで詳しくご紹介します。';

//キャプチャALTタグ
$altCap01 = 'かぼちゃはこす前に<a href="'.$base_url.'/magazine/article/recipe-technic31.php" class="recipe-design__link">下ごしらえ</a>をします。皮をむいて、3cm角に切りましょう。';
$altCap02 = '切ったかぼちゃをラップに包み、600wの電子レンジで3分加熱します。';
$altCap03 = '滑り止めに濡れふきんを敷き、その上に平皿を置きます。';
$altCap04 = '平皿の上に裏ごし器をセットして、真ん中にかぼちゃをのせます。';
$altCap05 = '木ベラを持ち、手前に引きながらこしていきます。<br>力が入りにくい場合は、反対の手で木ベラの先を押さえながら引いてください。';
$altCap06 = '網の裏にかぼちゃがたまってきたら、平皿の上に落とします。<br>残りのかぼちゃも同様に、こしていきましょう。';
$altCap07 = '裏ごしした<a href="'.$base_url.'/magazine/article/recipe-technic80.php" class="recipe-design__link">豆腐</a>が、軽やかでやさしい食感です。水切りした豆腐を裏ごしし、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#miso" class="recipe-design__link">味噌</a>、塩少々で味付けして、<a href="'.$base_url.'/magazine/article/recipe-technic158.php" class="recipe-design__link">白和え</a>衣を作ります。この衣に、季節の葉物、<a href="'.$base_url.'/magazine/article/recipe-technic27.php" class="recipe-design__link">しめじ</a>などの具材を入れて和えればできあがり。';
$altCap08 = '裏ごしができると、おせちの定番<a href="'.$base_url.'/magazine/article/recipe14.php#kurikinton" class="recipe-design__link">栗きんとん</a>も簡単。さつまいもを竹串が通るまで煮て、熱いうちに裏ごししていきます。裏ごしが終わったら栗の甘露煮を加えて混ぜ、砂糖を加えて甘味を調整してください。';
$altCap09 = '鮮やかな色合いが美しいお正月料理です。<a href="'.$base_url.'/magazine/article/recipe-technic10.php" class="recipe-design__link">ゆで卵</a>を黄身と白身に分け、それぞれ裏ごしして砂糖と塩少々を加えます。型に白身を入れてスプーンの背で押し固め、その上に黄身を入れてまた押し固めます。これを電子レンジか<a href="'.$base_url.'/magazine/article/recipe-technic30.php" class="recipe-design__link">蒸し器</a>で加熱すればできあがり。粗熱が取れたら切り分けましょう。';
$altCap10 = '牛乳、卵黄、お好みで砂糖を泡立て器で混ぜ、さらに裏ごししたさつまいもと溶かしたバターをよく混ぜ合わせます。さらに<a href="'.$base_url.'/magazine/article/recipe-technic94.php" class="recipe-design__link">ホットケーキ</a>ミックスを加えてヘラで混ぜ、グラシンカップに流し込んでオーブンへ。さつまいものしっとり食感が魅力的な<a href="'.$base_url.'/magazine/article/recipe-technic71.php" class="recipe-design__link">ケーキ</a>です。写真のように、カットした<a href="'.$base_url.'/magazine/article/recipe-technic26.php" class="recipe-design__link">りんご</a>やごまをのせて焼くのもおすすめ！';
$altCap11 = '市販のタルト生地を使えば、本格的な<a href="'.$base_url.'/magazine/article/recipe-collect04.php" class="recipe-design__link">デザート</a>も簡単！裏ごししたかぼちゃとバター、砂糖、卵黄、生クリームでフィリング（具材）を作り、タルト生地に流し込んでオーブンで焼き上げます。仕上げに、砂糖を加えて<a href="'.$base_url.'/magazine/article/recipe-technic51.php" class="recipe-design__link">泡立てた生クリーム</a>を絞ればよりゴージャスに。';
$altCap12 = '';
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
        $recipeIcon ='papa_01';
        $speech ='うわ～<a href="'.$base_url.'/magazine/article/recipe-technic31.php" class="recipe-design__link">かぼちゃ</a>がたくさん！<br>随分いっぱい買ったんだねえ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='すごいでしょ～？<br>秋だから、旬のかぼちゃが安く買えたんだよ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_01';
        $speech ='こうちゃん、かぼちゃのぷりんがたべたいなあ';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='かぼちゃのプリンね！作り方を調べてみよう～<br>え～と、まず加熱したかぼちゃを潰して、それから次は裏ごし…<br>…とりあえず、潰すだけでいいか！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='ちょっと待った～！<br>裏ごしは、食材の口当たりをなめらかにするための大事な工程なんだぞ！<br>舐めてもらっちゃ困るぜ～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='ひえ～、やっぱりそうよね…ごめんなさい！<br>実は裏ごしってあんまりやったことがなくて…<br>手間がかかるイメージがあるのよね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='大丈夫、手順は簡単だぞ！<br>かぼちゃはもちろん、同じく旬の<a href="'.$base_url.'/magazine/article/recipe-technic108.php" class="recipe-design__link">さつまいも</a>料理にも使えるから<br class="u-only__pc">今のうちにマスターしておくといいぜ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='フラッキーありがとう！<br>よーし、しっかり裏ごしを覚えてレベルアップしよう！';
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
          <h3 class="recipe__ttl_l mb0">裏ごしとは？</h3>
          <h4 class="recipe__ttl_tech">裏ごしはどんなテクニック？</h4>
          <p class="mb2">「裏ごし」とは、裏ごし器などで食材をこすこと。裏ごしをすると、食材の繊維や小さな塊などが除かれ、きめ細かでなめらかな口当たりになります。</p>
          <h4 class="recipe__ttl_tech">裏ごしが使われる主な食材、料理</h4>
          <p>裏ごしは、主にかぼちゃや栗、いも類や<a href="<?php echo $base_url?>/magazine/article/recipe-technic129.php" class="recipe-design__link">豆類</a>など、粘度のある食材を使った料理に用いられることが多いです。料理例には、かぼちゃやさつまいものプリン、<a href="<?php echo $base_url?>/magazine/article/recipe14.php#kurikinton" class="recipe-design__link">栗きんとん</a>、こしあん、<a href="<?php echo $base_url?>/magazine/article/recipe-technic67.php" class="recipe-design__link">マッシュポテト</a>、<a href="<?php echo $base_url?>/magazine/article/recipe-technic149.php" class="recipe-design__link">ポタージュ</a>などが挙げられます。裏ごしをすると、これらのお料理の仕上がりが格段にアップしますよ。</p>
          <p>また、赤ちゃんが食べる<a href="<?php echo $base_url?>/magazine/article/recipe05.php" class="recipe-design__link">離乳食</a>作りにも裏ごしが欠かせません。離乳食は食材をペースト状にして、食べやすく、消化しやすくする必要があるからです。</p>
          <h3 class="recipe__ttl_l mb0">裏ごしのやり方</h3>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>かぼちゃ</dt>
              <dd>150g</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-01@2x.jpg"
                 alt="フラッキーのHow To <?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-03@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-06@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
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
                <span>裏ごし器がないときはどうする？</span></h4>
                <p class="mb2">専用の裏ごし器を持っていなければ、“ざる”でも代用OK！ボウルの上にざるを重ね、食材を入れて、木ベラやゴムベラで網目に押し付けるようにして裏ごししよう。網目の細かいざるを使うと、よりなめらかな仕上がりになるぞ。<br>裏ごし器もざるも、使った後は目詰まりしやすいので、洗うときは丁寧に！</p>
              </div>
            </div>
          </div>
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
                <span>“メッシュ”って何？</span></h4>
                <p class="mb2">裏ごし器の網目の細かさは、「メッシュ」という単位で表すんだ。一般の家庭で<strong>かぼちゃやさつまいもの裏ごしに使うなら20～30メッシュ、和菓子のこしあんなどには50～60メッシュ</strong>くらいが目安だぜ。網目が粗いものはスムーズに裏ごしができるし、細かいものはとてもなめらかな仕上がりになる。用途や好みに応じて選ぶのがポイントだぞ！</p>
              </div>
            </div>
          </div>
          <h3 class="recipe__ttl_l mb0">裏ごしした食材を使ったレシピ</h3>
          <p>裏ごしした食材で作る、美味しいレシピをご紹介します。</p>
          <h4 class="recipe__ttl_tech">裏ごし豆腐の白和え</h4>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__left">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-07@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap07); ?>
              </span>
            </p>
          </div>
          <h4 class="recipe__ttl_tech">栗きんとん</h4>
          <div class="u-clearfix">
            <p>
              <figure class="u-float__right">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-08@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap08); ?>
              </span>
            </p>
          </div>
          <h4 class="recipe__ttl_tech">錦卵</h4>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__left">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-09@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap09); ?>
              </span>
            </p>
          </div>
          <h4 class="recipe__ttl_tech">さつまいものケーキ</h4>
          <div class="u-clearfix">
            <p>
              <figure class="u-float__right">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-10@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap10); ?>
              </span>
            </p>
          </div>
          <h4 class="recipe__ttl_tech">かぼちゃのタルト</h4>
          <div class="u-clearfix mb2">
            <p>
              <figure class="u-float__left">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/63/tech63-11@2x.jpg"
                  alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap11)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <span>
                <?php echo ($altCap11); ?>
              </span>
            </p>
          </div>
          <h3 class="recipe__ttl_tech" id="rinyushoku">離乳食</h3>
          <p class="mb3">食べやすさ、消化のしやすさが重要な離乳食。特に「離乳食初期」と呼ばれる生後5～6ヵ月の赤ちゃんの食事では、食材の裏ごしが必要とされています。今回は、離乳食初期によく使われる食材の裏ごしをご紹介します。</p>
          <h4 class="recipe__ttl_s">10倍かゆ</h4>
          <p><a href="<?php echo($base_url)?>/magazine/article/recipe-technic56.php" class="recipe-design__link">10倍かゆ</a>は米1：水10の割合で炊いたおかゆのこと。離乳食初期は、これをさらに裏ごしし、なめらかな状態にして与えます。成長に合わせて、裏ごしを粗めにする、少し粒が残っている7倍かゆに変えるなどの方法で調整していきましょう。</p>
          <h4 class="recipe__ttl_s">にんじんの裏ごし</h4>
          <p>7～8mmの厚さの<a href="<?php echo($base_url)?>/magazine/article/recipe-technic59.php" class="recipe-design__link">半月切り</a>にしたにんじんを、多めの水で煮るかレンジで加熱します。指で潰せるくらいやわらかくなったら裏ごしして、ゆで汁を加えてペースト状にのばしましょう。</p>
        </div>
      </div>
      <?php
        $recipeIcon ='mama_01';
        $speech ='できた！裏ごししたかぼちゃのなめらかプリン！<br>コウちゃん、どう？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='おいし～い！おみせのぷりんみたい～♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='舌触りがなめらかで、なんだか高級感があるな～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='ひと手間かけたかいがあったな！<br>これで料理の幅が広がるはずだぜ～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='やったー！どんどんお料理上手に近付いてる気がする♪<br>次はさつまいものケーキを作ろうっと！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15149'),
				array ('recommend-recipe-id','15067'),
				array ('recommend-recipe-id','15108'),
				array ('recommend-recipe-end')

				);
			?>
			<?php
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
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
