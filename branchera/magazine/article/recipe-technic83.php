<?php
//base
include( "../../function.php" );
$content = get_id_data( '15083' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '華やかで食べやすい「マンゴーの切り方」を動画とテキストで解説。さいの目状に切って開く「花咲カット」の方法をご紹介します。また、美味しいマンゴーの見分け方や、正しい保存方法もご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0
$currentNumber = '83';

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'IVcTUB8QP4w';

//導入文
$introTxt = '第83回は、「マンゴーの切り方」です。ご家庭でも簡単にできる、きれいで食べやすいマンゴーの切り方をご紹介します。';

//セリフ前半
$sp01 = array ( //'icon','icon-num','text'
  //ママ　通常
  array('mama','01','マンゴーをもらっちゃった！<br>こんなにたくさん食べられるなんて、うれしい～'),

  //コウちゃん　喜ぶ
  array('ko','03','まんごー！うれし～い！'),

  //ママ　困る
  array('mama','02','でもマンゴーって、どうやって切ればいいんだっけ？<br>
  お店で出されるような、<a href="'.$base_url.'/magazine/article/recipe-technic131.php" class="recipe-design__link">さいの目</a>状に切りたいんだけど…<br>
  まあ、とりあえず適当に切ればいいか！'),

  //フラッキー　通常
  array('fl','01','ちょっと待ったーっ！マンゴーの切り方にはコツがいるんだ<br>
  その切り方だと、種にぶつかっちゃうぞ！'),

  //ママ　困る
  array('mama','02','うわっ本当だ！<br>
  フラッキー…きれいなマンゴーの切り方を教えてください！'),

  //フラッキー　通常
  array('fl','01','よーし、美し～くマンゴーを切る方法を教えてやるぜ！'),

);

// 手順
$step = array (
  // 大見出し：'ttl_l','mb','text'
  // 小見出し：'ttl_m','mb','text'
  // 見出し（h5）：'ttl_s','mb','text'
  // 見出し（他）：'ttl（3-5）','mb',text
  // 本文：'text','mb','text'
  // 本文（フリー）：'free','mb','text'
  // 画像ありテキスト：'textimg','num','float方向','alt','mb','text'
  // check start：'chk-st'
  // check end：'chk-end'
  // plus1 start：'plus-st'
  // plus1 end：'plus-end'
  // 材料 start：'mtr-st'
  // 材料 end：'mtr-end'
  // 材料 'mtr','材料名','分量'
  // 手順：'step','num','mb','text'

//  （大見出し1）
  array('ttl_l','mb0','美味しいマンゴーを見つけるには？'),

//  （本文1）
  array('text','mb3','そのまま食べるのはもちろん、<a href="'.$base_url.'/magazine/article/recipe-technic71.php" class="recipe-design__link">ケーキ</a>やアイスクリームなどの<a href="'.$base_url.'/magazine/article/recipe-collect04.php" class="recipe-design__link">スイーツ</a>でも人気のマンゴー。できるだけ美味しい状態で食べるには、旬の時期と、食べ頃のマンゴーの特徴を押さえておくことが大切です。'),

//  （小見出し）
  array('ttl_m','','マンゴーの旬はいつ？'),
  array('text','mb2','「夏のフルーツ」という印象が強いマンゴーですが、産地によっては年中出回っているものもあります。産地別に、旬の時期を見ていきましょう。'),

  array('ttl_s','','国産マンゴー'),
  array('free','mb2','<p>国産マンゴーの旬は、初夏から夏といわれています。国内で最も生産量が多いのは宮崎産、次に多いのは沖縄産です。</p>

  <ul class="u-list__ul_dot">
    <li>宮崎産…出回り：3月～8月、収穫のピーク：6月</li>
    <li>沖縄産…出回り：5月～9月、収穫のピーク：7月</li>
  </ul>'),

  array('ttl_s','','輸入マンゴー'),
  array('free','mb3','<p>輸入マンゴーは、国によって出回り時期や旬にバラつきがあります。春に旬が来るものと、日本と同じく、初夏から夏に旬がくるものが多いです。産地によっては、年中出回っているものもあります。</p>

  <ul class="u-list__ul_dot">
    <li>タイ産…出回り：1～12月、収穫のピーク：4～5月</li>
    <li>メキシコ産…出回り：1～10月、収穫のピーク：5～7月</li>
    <li>フィリピン産…出回り：3～7月、収穫のピーク：3～5月</li>
    <li>台湾産…出回り：5～7月、収穫のピーク：6月</li>
  </ul>

  <p>どの産地のマンゴーも、できるだけ旬の時期に買うと、より美味しい状態で味わえますよ。参考にしてみてくださいね。</p>'),

  //（小見出し）
  array('ttl_m','','美味しいマンゴーの見分け方'),
  array('text','mb2','マンゴーは、表皮や果肉がやわらかく、とても繊細なフルーツです。購入するときは、できるだけ傷やシワのないものを選ぶようにしてください。また、黒い斑点が出ているものは、鮮度が落ちているので避けましょう。'),

  array('textimg','01','left','mb2','アップルマンゴー','国産、メキシコ産などの品種として多く出回っている「アップルマンゴー」は、皮が濃い赤色で、触ったときにハリのあるものがおすすめです。'),

  array('textimg','02','left','mb2','ナンドクマイ種','フィリピン産の「カラバオ種」やタイ産の「ナンドクマイ種」は、皮が鮮やかな黄色で、表面がつるんとしているものを選ぶようにしましょう。'),

  array('text','mb2','表面のやわらかさを指で感じるようになり、甘い香りがしてきたら食べ頃の目安です。'),

  array('text','mb3','また、時々表皮に白い粉が吹いているマンゴーがあります。これは傷んでいるわけではなく、まだ熟れていないだけ。しばらく追熱（ついじゅく・果物を一定期間貯蔵して熟すのを待つこと）すると、表皮にツヤが出てしっとりとします。この状態になれば食べ頃です。'),


  //（大見出し2）
  array('ttl_m','','マンゴーの切り方'),

  //（本文2）
  array('text','mb3','お店で出されるときによく見かける、さいの目状に切って開いてある状態のマンゴー。この切り方は、「花咲カット」といわれています。その名の通り、花が咲いたように美しく、高級感がある切り方ですよね。<br>
  一見難しそうに見えますが、手順は意外と簡単！ぜひ、チャレンジしてみてください。'),

  //（小見出し）
  array('ttl_m','','手順'),
  array('step','03','mb0','マンゴーの中央には、縦に長く、平べったい種が1個入っています。<br>
  種が入っている中央部分（幅1㎝前後）を避けて、横向きに<a href="'.$base_url.'/magazine/article/recipe-technic01.php" class="recipe-design__link">包丁</a>を入れていきましょう。中央部分の上側と下側を切って、3分割にします。'),
  array('step','04','mb0','切り取った両端の2枚を使っていきます。'),
  array('step','05','mb0','それぞれの断面を、約2cmのさいの目状になるように、包丁で切り込みを入れてください。このとき、皮まで貫通しないように注意しましょう。'),
  array('step','06','mb3','皮の部分を裏から軽く押して、反り返したら花咲カットの完成です。'),

  //（大見出し3）
  array('ttl_l','mb0','マンゴーの保存方法'),

  //（本文3）
  array('text','mb3','「箱詰めでマンゴーをもらったけど、全部は一気に食べられない」ということもありますよね。余ったマンゴーを保存する際は、完熟しているかどうかによって、保存方法を変える必要があります。完熟前と完熟後、それぞれの保存方法をご紹介します。'),

  //（小見出し）
  array('ttl_m','','完熟前のマンゴーの場合'),
  array('free','','<p class="mb2">市場に出回るマンゴーの中には、成熟しきっていない状態で収穫して、後から熟成させるものがあります。このような完熟前のマンゴーは、美味しく食べるために追熟する必要があります。</p>
  <p class="mb2">追熟の際には、マンゴーが乾燥しないように新聞紙などに包んで、直射日光を避けて常温保存しましょう。マンゴーの状態にもよりますが、大体2～3日程度が追熱の目安です。<br>
  熟す前に冷蔵庫に入れると、低温障害を起こして熟さなくなってしまうので、注意してください。</p>'),

  //（小見出し）
  array('ttl_m','','完熟マンゴーの場合'),
  array('free','','<p class="mb2">既に完熟しているマンゴーは、熟れ過ぎの状態を避けるために冷蔵保存します。しかし、マンゴーは南国のフルーツのため、本来冷たい場所や、乾燥した場所での保存は適していません。そのため、冷蔵庫で保存する際は、冷え過ぎと乾燥の防止が必要になります。</p>
  <p class="mb3">まず、軽く湿らせた新聞紙などでマンゴーを包みます。その状態でポリ袋などに入れて、野菜室で保存しましょう。保存期間の目安は、約2～3日です。長く冷蔵庫に入れていると味が落ちてしまうので、できるだけ早めに食べ切りましょう。</p>'),
  //（大見出し4）
  array('ttl_l','mb0','人気のマンゴースイーツレシピ'),

  //（本文4）
  array('text','mb2','マンゴーはそのままで食べるのはもちろん、スイーツにアレンジしても美味しく味わうことができますよ。とろける食感と、豊かな甘味を存分に生かした、マンゴースイーツレシピをご紹介します。'),

  //（小見出し）
  array('ttl_m','','マンゴーゼリー'),
  array('textimg','07','right','mb2','マンゴーゼリー','ボウルに、1cm角に切ったマンゴー、マンゴージュース、<a href="'.$base_url.'/magazine/article/recipe-technic22.php#satou" class="recipe-design__link">砂糖</a>、溶かした粉ゼラチンを加えてよく混ぜます。とろみがついたら、器に注ぎましょう。冷蔵庫で3時間ほど冷やして、固まったら完成です。仕上げに、<a href="'.$base_url.'/magazine/article/recipe-technic51.php" class="recipe-design__link">ホイップクリーム</a>をのせても美味しく食べられますよ。'),


  //（小見出し）
  array('ttl_m','','マンゴーヨーグルトパフェ'),
  array('textimg','08','left','mb0','マンゴーヨーグルトパフェ','器に角切りのマンゴー、シリアル、プレーンヨーグルトを、層になるように盛り付けていきます。仕上げにミントの葉などを飾り付けたら完成です。お好みでアイスクリームなどを添えても美味しいですよ。')
);



//セリフ後半
$sp02 = array ( //'icon','icon-num','text'
  //ママ　通常
  array('mama','01','やったー！きれいに切れた～！お店で食べるマンゴーみたい！'),

  //コウちゃん　喜ぶ
  array('ko','03','きれい！おいし～！'),

  //パパ　通常
  array('papa','01','花咲カットにして食べると、南国で旅行しているような気分になるなぁ！'),

  //フラッキー　褒める
  array('fl','03','うまく切れたな～！<br>
  ちなみに、種の周りの果肉も無駄にしたくないときは、<br class="u-only__pc">
  種を中心にしてそぎ切りの要領で切るといいぞ！'),

  //ママ　通常
  array('mama','01','なるほど～！たくさん食べたいときはそうしてみるわ♪'),


);

// 用語解説
$term = array ( //'id' , 'title' , 'text'
  array (),
);

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
        <?php
          for($i = 0, $size = count($step); $i < $size; ++$i) {
            if ($step[$i][0] === 'ttl_l') {
        ?>
          <h3 class="recipe__ttl_l <?php echo $step[$i][1]; ?>"><?php echo $step[$i][2]; ?></h3>
        <?php
            } elseif ($step[$i][0] === 'ttl_m') {
        ?>
          <h4 class="recipe__ttl_tech <?php echo $step[$i][1]; ?>"><?php echo $step[$i][2]; ?></h4>
        <?php
            } elseif ($step[$i][0] === 'ttl_s') {
          ?>
          <h4 class="recipe__ttl_s <?php echo $step[$i][1]; ?>"><?php echo $step[$i][2]; ?></h4>
        <?php
            } elseif ($step[$i][0] === 'text') {
        ?>
          <p class="<?php echo $step[$i][1]; ?>"><?php echo $step[$i][2]; ?></p>
        <?php
          } elseif ($step[$i][0] === 'free') {
        ?>
        <?php if(isset($step[$i][1]) && $step[$i][1]) { ?>
          <div class="<?php echo $step[$i][1]?>">
        <?php } else { ?>
          <div>
        <?php }?>
            <?php echo $step[$i][2]; ?>
          </div>
        <?php
          } elseif ($step[$i][0] === 'textimg') {
          // 画像ありテキスト：'textimg','num','float方向','mb','alt','text'
        ?>
          <div class="u-clearfix <?php echo $step[$i][3]; ?>">
            <figure class="u-float__<?php echo $step[$i][2]; ?>">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-<?php echo $step[$i][1]; ?>.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-<?php echo $step[$i][1]; ?>@2x.jpg"
                alt="フラッキーのHow To<?php echo (strip_tags($step[$i][3])).' 「'.$pageTtl.'」'; ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p>
            <?php echo $step[$i][5]; ?>
            </p>
          </div>

        <?php
          } elseif ($step[$i][0] === 'step') { // 手順：'step','num','mb','text'
        ?>
          <dl class="recipe-design__step <?php echo $step[$i][2]; ?>">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-<?php echo $step[$i][1]; ?>.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/<?php echo $currentNumber; ?>/tech<?php echo $currentNumber?>-<?php echo $step[$i][1]; ?>@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($step[$i][3])); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($step[$i][3]); ?>
            </dd>
          </dl>
          <?php
          } elseif ($step[$i][0] === 'mtr-st') { // 材料 start：'mtr-st'
          ?>
          <div class="recipe-design__material">
        <?php
          } elseif ($step[$i][0] === 'mtr-end') { // 材料 end：'mtr-end'
        ?>
          </div>
        <?php
          } elseif ($step[$i][0] === 'mtr') { // 材料 'mtr','材料名','分量'
        ?>
          <dl class="recipe-design__materials">
            <dt><?php echo $step[$i][2]; ?></dt>
            <dd><?php echo $step[$i][3]; ?></dd>
          </dl>
        <?php } elseif ($step[$i][0] === 'chk-st' || $step[$i][0] === 'plus-st') {   // check start：'chk-st'
        ?>
        <section>
        <?php } elseif ($step[$i][0] === 'chk-end' || $step[$i][0] === 'plus-end') { // check end：'chk-end'
        ?>
        </section>
        <?php } ?>
        <?php } ?>
        </div>
      </div>
      <?php
        for($i = 0, $size = count($sp02); $i < $size; ++$i) {
          $recipeIcon = $sp02[$i][0].'_'.$sp02[$i][1];
          $speech = $sp02[$i][2];
          include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
        }
      ?>
      <?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15105'),
				array ('recommend-recipe-id','15026'),
				array ('recommend-recipe-id','15068'),
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
