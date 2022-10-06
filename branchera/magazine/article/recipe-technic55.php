<?php
//base
include( "../../function.php" );
$content = get_id_data( '15055' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '断面図と共にご紹介します。また、ステーキに合うソースの人気レシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = '肉は焼く30分前に、冷蔵庫から出して常温に戻しておきましょう。<strong>冷たいまま焼くと、肉の表面だけが焼けてしまい、内部に火が通りにくくなります。</strong><br>常温に戻したら、キッチンペーパーで余計な水分（ドリップ）を拭き取ります。
';
$altCap02 = '肉の裏面のみ、<a href="recipe-technic19.php" class="recipe-design__link">筋切り</a>をします。赤身と脂肪の間にある筋に、<a href="recipe-technic17.php" class="recipe-design__link">包丁</a>の先で数か所切り込みを入れてください。<br>焼く直前に、<a href="recipe-technic22.php#shio" class="recipe-design__link">塩</a>、こしょうを肉全体に振りかけます。';
$altCap03 = '1．フライパンを<a href="recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>にかけて熱します。<br>フライパンが温まったら、牛脂1片を入れて全体に広げます。';
$altCap04 = '2．油がまわったら、盛り付けるとき表になる面（筋切りをしていない面）を下にして、肉をフライパンに入れます。';
$altCap05 = '3. 強火で<strong>約30秒</strong>焼きます。表面に肉汁が浮き出てきて、裏面にきれいな焼き色が付いたら裏返してください。';
$altCap06 = '4. 強火のまま<strong>約30秒</strong>焼き、その後は<a href="recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>にして、さらに<strong>約15秒</strong>焼いて取り出します。';
$altCap07 = '肉の断面は、外側は焼けていて、中心部が赤く生の状態です。';
$altCap08 = '<p class="mt2">レアは肉の中心温度が約55～65度。 <br>1～3まで、ミディアムレアと同様に焼きます。</p>4. 強火で<strong>約30秒</strong>焼いて取り出します。<br>肉の断面は、表面だけが焼かれ、ほとんどが赤く生の状態です。
';
$altCap09 = '<p class="mt2">ミディアムは肉の中心温度が約65～70度。<br>1～3まで、ミディアムレアと同様に焼きます。</p>4. 強火で<strong>約30秒</strong>ほど焼き、弱火にしてさらに<strong>約30秒</strong>焼いて取り出します。<br>肉の断面は、中心部がうっすらピンク色になっています。';
$altCap10 = '<p class="mt2">ウェルダンは肉の中心温度が約70～80度。<br>1～3まで、ミディアムレアと同様に焼きます。</p>4. 強火で<strong>約30秒</strong>焼き、弱火にしてさらに<strong>約1分</strong>焼いて取り出します。<br>肉の断面に赤い部分は全くなく、肉汁も少ない状態です。表面も中も十分に火が通っています。';
$altCap11 = '肉を焼いた後、肉汁が残ったフライパンに水を少々入れ、<a href="recipe-technic02.php#chubi" class="recipe-design__link">中火</a>で煮立たせます。<a href="recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>、みりんを加え、ひと煮立ちしたら赤ワインを加えてください。再び煮立ったらバターを加えて、全体を混ぜたらできあがりです。';
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
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第55回は「フライパンを使ったステーキの焼き方」です。レア、ミディアムレア、ミディアム、ウェルダンの4種類の焼き加減を解説します。</p>
      </div>
      <hr class="recipe__line">

      <?php
        $recipeIcon ='mama_01';
        $speech ='ふっふっふっ♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='なんだかミエ、ご機嫌だな！<br>おっ！もしかしてその<a href="'.$base_url.'/magazine/article/recipe-technic19.php" class="recipe-design__link">肉</a>は…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='そう！ボーナスが入ったから奮発してサーロインを買ったの～！<br>せっかくだからステーキにしたいんだけど、<br class="u-only__pc">どういう焼き方だと美味しさが引き立つのかしら…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='よーし、俺に任せろ！<br>ステーキは焼くだけだから簡単そうに見えるけど、<br class="u-only__pc">肉の火の通り具合を調節するテクニックが重要なんだぜ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='火の通り具合か～！美味しく焼けるように頑張るぞ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie-new technic">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl@2x.png"
           alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/kAepus03jtM?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">基本のステーキの焼き方</h3>
          <p>肉の味を存分に味わえるステーキ。調理方法がシンプルなだけに、焼き加減ひとつで仕上がりが大きく変わります。</p>
          <p>ステーキの焼き加減は、主にレア、ミディアムレア、ミディアム、ウェルダンの4種類に分かれます。最も生に近いのがレアで、中間がミディアム、肉の中心まで完全に火が通った状態がウェルダンです。焼き加減は個人の好みで調整すればOKですが、今回は程よい火の通り具合のミディアムレアを中心に、焼き方をご紹介します。</p>
          <p class="mb2">下ごしらえの方法と焼き方のコツを覚えて、ご家庭でも美味しいステーキを楽しみましょう！ </p>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
						<dl class="recipe-design__materials">
							<dt>牛サーロイン</dt>
							<dd>1枚（150ｇ・厚さ1～1.5cm）</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>塩</dt>
							<dd>適量</dd>
						</dl>
            <dl class="recipe-design__materials">
							<dt>粗びき黒こしょう</dt>
							<dd>適量</dd>
						</dl>
			<dl class="recipe-design__materials">
							<dt>牛脂</dt>
							<dd>1片（7g）</dd>
						</dl>
          </div>
          <h4 class="recipe__ttl_tech">肉の下ごしらえ</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-01@2x.jpg"
                 alt="フラッキーのHow To <?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl_tech">ミディアムレアの焼き方</h4>
          <p>外側には火が通っており、中心部がレアに近い状態の焼き加減です。ミディアムレアは肉の中心温度が約65度。切ると赤い肉汁がにじみ出ます。</p>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
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
                <span>にんにくを入れる場合は？</span></h4>
                <p class="mb2">ステーキをより香ばしく焼きたい場合は、にんにくを入れて焼く方法がおすすめだぜ！<br>まず、肉を焼く前に、スライスしたにんにく（肉1枚あたり1片分が目安）を<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic02.php#yowabi" class="recipe-design__link">弱火</a>でじっくり炒めよう。香りが出たら、焦げないうちににんにくを取り出すぞ。その後強火にして、にんにくから出た油で肉を焼くと、美味しいガーリックステーキのできあがり！</p>
							</div>
						</div>
          </div>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-06@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-07@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
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
                <span>焼き加減を微調整するコツ</span></h4>
                <p class="mb2">焼き上がった後「もう少しだけ火を通したい」と思ったときは、フライパンから肉を取り出した後、アルミホイルに包んで寝かせて、余熱でじんわり火を通そう！<br>まず1分ほど寝かせた後、火の通り具合を確認しながら寝かす時間を延長するぞ。<br>アルミホイルに包んだ肉は、包んだまま一度裏返す。これは肉汁を偏らせないためだ。<br>この方法で、焼き加減の微調整をすることができるぜ！</p>
							</div>
						</div>
          </div>
          <h4 class="recipe__ttl_tech">レアの場合</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-08@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap08)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap08); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl_tech">ミディアムの焼き方</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-09@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap09); ?>
            </dd>
          </dl>
          <h4 class="recipe__ttl_tech">ウェルダンの焼き方</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-10@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap10)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap10); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-plus1 mb3">
              <div class="recipe-plus1__row">
                <h4 class="recipe-plus1__ttl">ステーキを焼くのにおすすめのフライパンとは？</h4>
                <p class="mb2">ステーキを焼く際は、鉄製の厚手のフライパンが適しています。<br>熱伝導率が高く、フライパン全体を均一な温度に保って、ムラなく焼くことができます。最初から強火で空焼きをして、温度を上げてから使いましょう。外はカリッと、中はジューシーな仕上がりになりますよ。</p>
                <p>テフロンでコーティングされたフライパンを使う場合は、強火で空焼きはしないようにしましょう。コーティングが剥げてしまいます。中火くらいで、時間をかけてフライパンの温度を上げましょう。</p>
              </div>
            </div>
          </section>
          <h4 class="recipe__ttl_l mb0">ステーキをより美味しく！ソースの人気レシピ</h4>
          <p class="mb2">ステーキを一層美味しくしてくれるソース。和風、洋風など、何パターンかソースの作り方を覚えておけば、ステーキを食べる楽しみ方も広がります！</p>
          <h4 class="recipe__ttl_tech">赤ワインソース</h4>
          <div class="mb3 u-clearfix">
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/55/tech55-11@2x.jpg"
              alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」ステーキ赤ワインソース'. strip_tags($altCap11)); ?>" style="max-width:300px"
              class="u-img__max">
            </figure>
            <div>
              <p>
              <?php  echo ($altCap11); ?>
              </p>
            </div>
          </div>
          <h4 class="recipe__ttl_tech">玉ねぎソース</h4>
          <p class="mb3">玉ねぎ、りんご、にんにく、白ワイン、醤油、みりんをミキサーにかけます。鍋にバターとオリーブオイルを入れて溶かした後、ソースの素材を入れて、火にかけて混ぜ合わせます。塩こしょうで味をととのえましょう。</p>
          <h4 class="recipe__ttl_tech">和風ソース</h4>
          <p>玉ねぎとにんにくをすりおろします。醤油、砂糖、おろし生姜、はちみつ、<a href="recipe-technic22.php#osu" class="recipe-design__link">酢</a>、赤ワインに混ぜて、弱火で煮たら完成です。</p>

        </div>
      </div>
      <?php
        $recipeIcon ='mama_01';
        $speech ='美味しくミディアムレアに焼けたわ！<br>家で手軽にサーロインステーキが食べられるなんて最高～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='程よく火が通っているけど、<br class="u-only__pc">肉汁たっぷりで肉のうまみが引き立っているよ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='しっかり筋取りしてあるから、難なく噛み切れるしな！<br>ママ、なかなか筋がいいぞ～♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='あらフラッキー、口が上手いわね！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='ちなみに、今回焼いたサーロイン以外だと、<br class="u-only__pc">リブロ―スとヒレもおすすめだぜ！<br>リブロ―スは味が濃く、ステーキの王道の部位なんだ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='そうなのね！<br>次は、リブロ―スを焼いてみま～す♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','14022'),
				array ('recommend-recipe-id','14012'),
				array ('recommend-recipe-id','15112'),
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
