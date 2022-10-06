<?php
//base
include( "../../function.php" );
$content = get_id_data( '15085' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = 'ダマにならない！「水溶き片栗粉の作り方」を動画とテキストで解説。水溶き片栗粉を使って、汁物やあんかけ料理にとろみを付ける方法をご紹介します。さらに、とろみの強弱を調整するテクニックや、片栗粉の代用品もご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '85';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'd_HrrFEm0kQ';

//導入文
$introTxt = '第85回は、「水溶き片栗粉でとろみを付ける方法」です。ダマにならず、上手にとろみを付ける方法をご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
  //ママ　困り顔
  array('mama','01','むむむ…'),

  //パパ　困る
  array('papa','02','ママ、どうしたの？フライパン見ながら怖い顔して…'),

  //ママ　困る
  array('mama','02','<a href="'.$base_url.'/magazine/article/recipe-technic80.php" class="recipe-design__link">豆腐</a>と野菜の炒め物を作ったから、これに「とろみ」を付けたら美味しいだろうな～って思って…だけど、上手にとろみ付けする自信がないのよ～！'),

  //フラッキー　通常
  array('fl','01','おーい！そういうときこそオレを呼べよな！<br>
  いくら見つめても、そのフライパンは喋らないぞっ！'),

  //ママ　通常
  array('mama','01','さすがフラッキー、頼りになる～！上手にとろみを付ける方法を教えて！'),

);

//キャプチャALTタグ
$altCap01 = '器に片栗粉と水を入れて、よくかき混ぜます。<br>長時間おくと片栗粉が沈んでしまうので、使う直前にかき混ぜるようにしましょう。片栗粉と水の比率を1：2にすると、程よいとろみが付けやすくなります。';
$altCap02 = 'とろみを付ける料理は、あらかじめ味付けまで終わらせておきます。<br>料理が入った鍋やフライパンの火を止めて、水溶き片栗粉を少しずつ流し入れましょう。流し入れる度に、全体を軽く混ぜてください。';
$altCap03 = '水溶き片栗粉を全て入れ終えたら、<a href="'.$base_url.'/magazine/article/recipe-technic02.php#chubi" class="recipe-design__link">中火</a>にかけます。木ベラや耐熱ゴムベラでかき混ぜながら加熱して、とろみを付けていきましょう。';
$altCap04 = '1分程度加熱して、ツヤが出て好みのとろみ加減になったら、火を止めます。<br>時間が経つと食材から水分が流れ出て、とろみがゆるんでしまうこともあるので、十分にとろみを付けておくようにしましょう。';
$altCap05 = '皿に盛り付けたらできあがり！';
$altCap06 = 'あんかけ卵スープ';
$altCap07 = '麻婆豆腐';
$altCap08 = '';
$altCap09 = '';
$altCap10 = '';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';
$altCap14 = '';
$altCap15 = '';
$altCap16 = '';

//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
//パパ　通常
array('papa','01','うん！ダマにもなってないし、ちょうどいいとろみ具合で美味しいよ！'),

//コウちゃん　笑顔
array('ko','01','とろとろ～ん♪'),

//ママ　通常
array('mama','01','こんなに上手にできると思ってなかったわ！<br>これからは、あんかけ料理を積極的に作っていこうっと♪'),

//フラッキー　通常
array('fl','01','ちなみに、水溶き片栗粉を使った料理は、すぐに食べ切るのがおすすめだぜ！<br>冷蔵庫や冷凍庫に入れても、時間が経つと具材から水分が出て、とろみがゆるむからな～'),

//ママ　通常
array('mama','01','なるほど～！<br>じゃあ水溶き片栗粉は食べる直前に入れて、できあがったらすぐ食べるようにしなきゃね！'),

//フラッキー　通常
array('fl','01','その通り！<br>
どうしても作り置きしたい！というときは、具材だけ冷凍保存して、<br class="u-only__pc">解凍してからとろみ付けするといいぞ！'),

);

// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

/*
// plus1 template
<section>
<?php // plus1
  $plus1_ttl ='';
  $plus1_cnt ='';
  include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
?>
</section>

// check template
<section>
<?php // check
  $check_cnt ='';
  include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
?>
</section>

*/

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
        for($i = 0, $size = count($sp01); $i < $size; ++$i) {
          $recipeIcon = $sp01[$i][0].'_'.$sp01[$i][1];
          $speech = $sp01[$i][2];
          include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
        }
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
          <h3 class="recipe__ttl_l mb0">水溶き片栗粉でとろみを付ける方法</h3>
          <p class="mb2">八宝菜や麻婆豆腐、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic49.php" class="recipe-design__link">エビチリ</a>…とろみが付いた料理は、見た目がつややかで食欲をそそられますよね。さらに、食材に味が絡みやすくなったり、料理が冷めにくくなったり…料理のとろみには、さまざまな効果があります。実はこのとろみの正体は、片栗粉なのです。</p>
          <p class="mb3">水溶き片栗粉を使うことで、手軽に汁物にとろみを付けたり、あんかけ料理の“あん”を作ったりすることができます。しかし、作り方によってはダマになったり、とろみの強弱の加減がうまくいかなかったりと、水溶き片栗粉の扱いにはコツが必要！今回は、水溶き片栗粉で上手にとろみを付ける方法をご紹介します。</p>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>片栗粉</dt>
              <dd>大さじ1</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>水</dt>
              <dd>大さじ2</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>別途とろみを付けるおかず（今回は豆腐の野菜炒めを使用）</dt>
              <dd></dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-01@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
          </dl>
          <section>
          <?php // check
            $check_cnt ='
            <h4>水溶き片栗粉を流し入れるときは、火を止めるとダマ対策になる！</h4>
            <p>沸騰している状態の料理に水溶き片栗粉を入れると、均一にとろみが付きづらくなり、ダマの原因になるぞ。一旦火を止めて流し入れて、全体を混ぜてから再加熱しよう！</p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-03@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-04@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <section>
          <?php // check
            $check_cnt ='
            <h4>もっととろみを強くしたいとき＆とろみをゆるくしたいときの調整方法</h4>
            <p class="mb2">分量通り作っても、料理の量や加熱の温度によって、とろみ加減は変わってくるぜ。「もっととろみを強くしたい！」「とろみをゆるくしたい！」というときの対処法を教えるぞ！</p>
            <h4 class="recipe__ttl_s">とろみを強くしたい場合</h4>
            <p class="mb2">加熱時間が長くなるととろみは強くなるから、まずはしっかりと煮詰めよう。焦げないようにかき混ぜながら加熱して、水分を蒸発させていくぞ。加熱し過ぎると、とろみの元であるデンプンが壊れるから、1分加熱したら様子を見るようにしよう！<br>
            「それでもまだゆるい」というときは、追加で水溶き片栗粉を足してくれ。そのときも、片栗粉と水の割合は1：2だぜ！</p>
            <h4 class="recipe__ttl_s">とろみをゆるくしたい場合</h4>
            <p>とろみが強すぎて、もっとゆるくしたい場合は、水分を足してのばすといいぞ。少量ずつ水を足して、よくかき混ぜていこう。味が薄くなったら、料理に合わせた調味料を足して調整だ！</p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
          ?>
          </section>
          <section>
          <?php // plus1
            $plus1_ttl ='片栗粉がないときの代用品';
            $plus1_cnt ='
            <p class="mb2">「とろみを付けたいのに、片栗粉を切らしていて困った…」という経験がある方もいるのではないでしょうか。粘度は少し弱まりますが、片栗粉のほかにも、とろみ付けに使える食材は存在します。</p>
            <p class="mb2">最も手軽に代用できるのが、小麦粉です。デンプンが含まれている小麦粉は、<a href="'.$base_url.'/magazine/article/recipe18.php" class="recipe-design__link">カレー</a>やスープなどに軽いとろみを付けるのに役立ちます。しかし、小麦粉は粘度が弱いため、あんかけには不向きです。</p>
            <p class="mb2">小麦粉よりも粘度が高い代用品が、コーンスターチです。コーンスターチは、<a href="'.$base_url.'/magazine/article/recipe-technic96.php" class="recipe-design__link">とうもろこし</a>のデンプンを含んでいます。温度が下がっても粘度が落ちないことから、冷たいカスタードクリームなどのとろみ付けにも使われています。ただし、片栗粉で作ったあんと違い、透明にならず濁るので注意しましょう。</p>
            <p>より片栗粉のあんに近い状態にしたい場合は、和菓子などによく用いられる葛粉がおすすめです。常備しているご家庭はあまり多くないと思いますが、透明感があるので、和食に使うだし汁のとろみ付けにぴったりですよ。<br>
            片栗粉より粘度が低いため、1：1の割合で水と混ぜて使いましょう。</p>
            ';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>
          <h3 class="recipe__ttl_l mb0">水溶き片栗粉を使った人気レシピ</h3>
          <p class="mb2">水溶き片栗粉でとろみ付けができるようになると、お料理の幅が広がります。いつもの炒め物やスープに水溶き片栗粉を加えて、とろりとしたあんを楽しみましょう！<br>水溶き片栗粉を使った人気レシピをご紹介します。</p>
          <div class="mb2">
            <h4 class="recipe__ttl_tech">豆腐の野菜あんかけ</h4>
              <p>動画で使用した簡単レシピです。にんじんやピーマン、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic122.php" class="recipe-design__link">もやし</a>、えのきなど、お好みの野菜を<a href="<?php echo($base_url)?>/magazine/article/recipe-technic13.php" class="recipe-design__link">千切り</a>にします。野菜を醤油とみりんで煮たら、水溶き片栗粉でとろみを付けて、あんにしましょう。あらかじめ温めておいた豆腐に、あんをかけたら完成です。</p>
          </div>
          <div class="mb2">
            <h4 class="recipe__ttl_tech">あんかけ卵スープ</h4>
            <div class="u-clearfix">
              <figure class="u-float__left">
               <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-06@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>
              鶏がらスープの素でスープを作ります。そこに水溶き片栗粉を入れて、よく混ぜましょう。一度煮立たせたら、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic08.php" class="recipe-design__link">溶いた卵</a>を流し入れてください。 仕上げに小口切りにしたねぎをのせたら、できあがりです。</p>
            </div>
          </div>
          <div class="mb0">
            <h4 class="recipe__ttl_tech">麻婆豆腐</h4>
            <div class="u-clearfix">
              <figure class="u-float__right">
               <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-07@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>あらかじめ、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic131.php" class="recipe-design__link">角切り</a>にした豆腐を軽くゆでておきます。<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic123.php" class="recipe-design__link">中華鍋</a>にサラダ油を入れて、豚ひき肉、にんにく、ねぎ、豆板醤を炒めましょう。豚ひき肉に火が通ったら、フライパンにゆでた豆腐を加えます。鶏がらスープ、酒、醤油、砂糖を入れて味付けしたら、水溶き片栗粉を入れてとろみを付けてください。最後に<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic02.php#tsuyobi" class="recipe-design__link">強火</a>にして、一度煮立たせたら完成です。</p>
            </div>
          </div>
        </div>
      </div>
      <?php
        for($i = 0, $size = count($sp02); $i < $size; ++$i) {
          $recipeIcon = $sp02[$i][0].'_'.$sp02[$i][1];
          $speech = $sp02[$i][2];
          include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
        }
      ?>
			<section class="mb3">
				<h5>■関連記事</h5>
					<ul>
						<li class="recipe-photolist__item recipe-photolist__reciperecommend">
						<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic37.php" class="recipe-photolist__row">
							<img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech37.jpg" alt="錦糸卵の作り方" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
						  <p class="reciperecommend-ttl">●錦糸卵の作り方</p>
						</a>
           </li>
						<li class="recipe-photolist__item recipe-photolist__reciperecommend">
						<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic123.php" class="recipe-photolist__row">
							<img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech123.jpg" alt="中華鍋の使い方とお手入れ方法。空焼き・油ならし・洗い方を解説！" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
						  <p class="reciperecommend-ttl">●中華鍋の使い方とお手入れ方法。空焼き・油ならし・洗い方を解説！</p>
						</a>
           </li>
						<li class="recipe-photolist__item recipe-photolist__reciperecommend">
						<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic88.php" class="recipe-photolist__row">
							<img data-src="<?php echo $img_url; ?>/thum/comic02/thumb_tech88.jpg" alt="基本の餃子＆羽根付き餃子の焼き方。パリっと焼くコツをプロが解説！" class="f-photolist__reciperecommendimg u-img__max js-show" style="max-width:85px">
						  <p class="reciperecommend-ttl">●基本の餃子＆羽根付き餃子の焼き方。パリっと焼くコツをプロが解説！</p>
						</a>
            </li>
          </ul>
      </section>
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
