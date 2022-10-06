<?php
//base
include( "../../function.php" );
$content = get_id_data( '15070' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「蕎麦のゆで方」を動画とテキストで解説。お家で蕎麦を美味しくゆでるコツをご紹介します。また、蕎麦湯の飲み方や、つけつゆ・かけつゆの簡単レシピも併せてお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

$recipe_or_tech = 0; // recipe = 1, tech = 0

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = '04B6wCFE-a0';

//導入文
$introTxt = '第70回は、美味しく仕上がる「蕎麦のゆで方」について動画でご紹介します。';

//キャプチャALTタグ
$altCap01 = '大きめの鍋にたっぷり水を入れて沸騰させます。';
$altCap02 = '鍋に蕎麦を散らすように入れて、菜箸でほぐします。';
$altCap03 = 'お湯は沸騰状態を保ちましょう。吹きこぼれそうになったら、火力を下げて調整してください。ゆで時間はメーカーによって異なるため、使用する商品に記載されている時間に従ってください。';
$altCap04 = 'ゆで上がったら素早くざるに上げます。';
$altCap05 = '冷水で蕎麦を洗って、ぬめりを取りましょう。<br>冷たい状態で食べる場合は、氷水で締めるとよりコシが出ます。';
$altCap06 = '水気を切ったら、蕎麦の準備は完了です。';
$altCap07 = 'かけつゆ、またはつけつゆと一緒に召し上がってください。';
$altCap08 = '蕎麦湯の飲み方';
$altCap09 = '簡単アレンジ！鴨南蛮そばのつゆ';
$altCap10 = '';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';
$altCap14 = '';
$altCap15 = '';

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
        $recipeIcon ='papa_01';
        $speech ='久しぶりの休日、家でゆっくり過ごしたいなあ<br>ママ、お昼は蕎麦にしようよ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='寒いし、温かいお蕎麦が食べたいね！<br>せっかくならいつもより上手に<br class="u-only__pc">美味しくお蕎麦をゆでたいんだけど……';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='フラッキーなら美味しい蕎麦のゆで方を<br class="u-only__pc">教えてくれるんじゃないかな？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_01';
        $speech ='おっ、マサキ分かってるねえ！<br>蕎麦のゆで方ならオレに任せておきな！';
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
          <h3 class="recipe__ttl_l mb0">美味しい蕎麦のゆで方</h3>
          <p class="mb2">豊かな香りと、ツルっとしたのどごしが特長の蕎麦。夏は冷たいざる蕎麦、冬は温かいかけ蕎麦と、季節に合わせた食べ方を楽しめるのも魅力ですよね。<br>今回は、市販の蕎麦を使って、お家で美味しくゆでるコツをご紹介します。</p>
          <h4 class="recipe__ttl_tech">材料（2人分）</h4>
          <div class="recipe-design__material">
            <dl class="recipe-design__materials">
              <dt>蕎麦</dt>
              <dd>200g（乾蕎麦を使用）</dd>
            </dl>
            <dl class="recipe-design__materials">
              <dt>水</dt>
              <dd>3L</dd>
            </dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/70/tech70-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/70/tech70-01@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/70/tech70-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/70/tech70-02@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/70/tech70-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/70/tech70-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <p class="mb3">生蕎麦の場合は、あらかじめ手でほぐした麺を少量ずつ鍋に入れていきます。麺が固まらないように、菜箸で底からかき混ぜてください。<br>お湯は乾蕎麦と同様、沸騰状態を保ちましょう。ゆで時間は、使用する商品に記載されている時間に従ってください。</p>
          <section>
            <?php // check
              $check_cnt ='<h5>蕎麦を上手にゆでるコツは？</h5>
              <p>とにかくたっぷりの水、大きな鍋でゆでるのがポイント！沸騰した湯の中で対流が起きて、蕎麦が鍋底にくっつかなくなるし、ゆで加減が均等になるんだぜ！<br>ちなみに、湯が吹きこぼれそうになったら、差し水ではなく火力の強弱で調整しよう！差し水は、対流が中断する原因になってしまうぞ。</p>';
              include ($inc_path."/lib/inc/page/_magazine/__recipe-check.php");
            ?>
          </section>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/70/tech70-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/70/tech70-04@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/70/tech70-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/70/tech70-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/70/tech70-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/70/tech70-06@2x.jpg"
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/70/tech70-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/70/tech70-07@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <section>
          <?php // plus1
            $plus1_ttl = $altCap08;
            $plus1_cnt ='<div class="u-clearfix">
            <figure class="u-float__right w50">
                <img data-src="'.$img_url.'/magazine/comic02/technic/70/tech70-08.jpg" data-retina="'.$img_url.'/magazine/comic02/technic/70/tech70-08@2x.jpg"
                 alt="フラッキーのHow To( 「'.$pageTtl.'」'. strip_tags($altCap08).')" style="max-width:300px" class="u-img__max">
              </figure>
            <p>蕎麦屋に行くと、食後によく出されるのが蕎麦のゆで汁、「蕎麦湯」。蕎麦の栄養が溶け出した蕎麦湯には、ビタミンやタンパク質が含まれています。<br>もちろん、自宅でゆでた蕎麦のゆで汁も、蕎麦湯としていただくことができますよ。蕎麦湯を美味しく飲むためのポイントをご紹介します。</p>
            <h4 class="recipe__ttl_s">蕎麦粉の含有量が多い蕎麦を選ぶ</h4>
            <p>市販の蕎麦だと、蕎麦粉の含有量が30％程度で、半分以上が小麦粉でできているものも少なくありません。当然、蕎麦湯に溶け出す蕎麦の成分は少なくなります。<br>しっかりと蕎麦の味わいを楽しむには、蕎麦粉が八割、小麦粉が二割の「二八蕎麦」や、蕎麦粉が十割の「十割蕎麦」を選ぶのがおすすめです。<br>また、乾蕎麦には塩分が含まれていて、ゆで汁は飲用に適していない場合があります。できるだけ生蕎麦にするか、塩分控えめ、または無塩の乾蕎麦を選びましょう。</p>
            <h4 class="recipe__ttl_s">まずはそのまま、次につゆを加えて楽しむ</h4>
            <p>まずは蕎麦湯だけで一口含み、蕎麦の香りや風味を楽しみます。そのまま飲み干してもOKですが、残っているつゆを加えると、また違った味わいが楽しめます。ただし、つゆの入れすぎは塩分の過剰摂取につながるので、注意しましょう。</p>
            </div>';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>
          <section>
          <?php // plus1
            $plus1_ttl = '残った生蕎麦の保存方法';
            $plus1_cnt ='<p>自分で打った蕎麦や、購入した生蕎麦が残ったときの保存方法をご紹介します。<br>生蕎麦は劣化が早いため、常温での保存は難しく、冷蔵保存でもあまり日持ちしません。そのため、冷凍保存がおすすめです！</p><p>まず一人前ずつ小分けにして、ラップやビニール袋、キッチンペーパーなどで包みます。<br>その状態でファスナー付き保存袋に入れ、密封して冷凍してください。<br>   食べるときは解凍せずに、凍った状態のまま熱湯でゆでましょう。麺同士がくっつかず、美味しく食べられます。保存期間の目安は、約1ヵ月です。</p>';
            include ($inc_path."/lib/inc/page/_magazine/__recipe-plus1.php");
          ?>
          </section>
          <h3 class="recipe__ttl_l mb0">簡単に作れるつゆレシピ</h3>
          <p class="mb3">蕎麦を十分に味わうには、美味しいつゆが不可欠！簡単に作れるつゆのレシピをご紹介します。</p>
          <h4 class="recipe__ttl_tech">基本のつゆ</h4>
          <h5 class="recipe__ttl_s">つけつゆ（2人分）</h5>
          <p>手順は、かけつゆと同様です。加えるだし汁の量を300mlにすると、2人分のつけつゆができあがります。</p>
          <h5 class="recipe__ttl_s">かけつゆ（2人分）</h5>
          <ol class="u-list__ul_num">
            <li>鍋に醤油大さじ2とみりん大さじ2を入れて、火にかけて煮切る。</li>
            <li><span>だし汁（<a href="<?php echo($base_url)?>/magazine/article/recipe-technic06.php" class="recipe-design__link u-lib">かつおだし、かつお昆布だし</a>など）を500ml加えて、ひと煮立ちさせたら完成！</span></li>
          </ol>
          <div class="mb2">
            <h4 class="recipe__ttl_tech"><?php echo (strip_tags($altCap09)); ?></h4>
            <div class="u-clearfix">
              <figure class="u-float__left w50">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/70/tech70-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/70/tech70-09@2x.jpg"
              alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap09)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
              <p>基本のかけつゆに、焼き目を付けた鴨肉と長ねぎを入れてひと煮立ちさせれば、鴨南蛮そばのかけつゆの完成です。また、だし汁の量を少し減らすと、鴨せいろそばのつけつゆになります。<br>鴨肉がない場合は、鶏もも肉を使っても美味しいですよ。ぜひお試しくださいね！</p>
            </div>
          </div>
        </div>
      </div>
      <?php
        $recipeIcon ='papa_01';
        $speech ='わあ、美味しい！コシがあって、ゆで加減がバツグンだよ！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='本当だ！ゆで方によってこんなにコシや食感が違うのね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='fl_03';
        $speech ='かけつゆもよくできてるぞ！<br>やっぱり、かつおだしをマスターしてるだけあるな～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mama_01';
        $speech ='やった！フラッキーに褒められちゃった♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='ko_03';
        $speech ='まま、よかったね～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='papa_01';
        $speech ='今年の大みそかは<br class="u-only__pc">美味しい年越し蕎麦が食べられそうだな～！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__assist">
				<div class="recipe-assist-technic">
					<div class="recipe-assist-technic__row">
						<h3 class="recipe-assist-technic__ttl">用語解説</h3>
						<dl class="recipe-assist-technic__term">
							<dt>煮切るとは</dt>
							<dd>酒やみりんを煮立てて、アルコール分を蒸発させること。食材の味やだしのうまみを損なうアルコール臭を取り除くことができる。</dd>
						</dl>
					</div>
				</div>
			</div>
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
