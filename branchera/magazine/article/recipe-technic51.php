<?php
//base
include( "../../function.php" );
$content = get_id_data( '15051' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「生クリームの泡立て方」を動画で解説。お菓子作りに欠かせない、ふんわり泡立てた生クリーム。泡立て器を使って、ご家庭でも簡単に生クリームを泡立てる方法をご紹介します。また、泡立てた生クリームの保存方法や、レモンや酢を使用した時短泡立てテクニックもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = '氷水を入れた大きなボウルと、よく冷やしたボウル、それぞれ1つずつ用意します。';
$altCap02 = '冷やしたボウルにクリームと上白糖を入れて、泡立て器を縦に動かすようにして泡立てていきます。';
$altCap03 = 'すくったときに、クリームが筋になって、とろとろと落ちるくらいの状態になったら六分立ての完成です。';
$altCap04 = 'すくったときに、とろりとゆっくり落ち、表面に少し積もる状態になったら七分立ての完成です。';
$altCap05 = 'すくったときに、クリームが落ちずに角が立つ状態になったら、八分立ての完成です。';
$altCap06 = '';
$altCap07 = 'ケーキのデコレーション以外でも、泡立てたクリームは食べ物・飲み物にトッピングするだけで、美味しく食べられます。コーヒーやアイスティーといったドリンクにも合いますし、アイスクリームやプリンにお好みの具材と一緒に添えて、パフェ風にするのもおすすめ。トーストをはじめ、市販のケーキやワッフル、スコーンにのせるのもよいですね。いろいろな組み合わせを試してみましょう！';
$altCap08 = 'クリームを使った王道スイーツといえば、やはりデコレーションケーキですね。ケーキを彩ってくれるクリームは、絞り方を変えるだけで印象が変わります。';
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
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第51回は「生クリームの泡立て方」です。基本的な生クリームの泡立て方や、泡立てやすくなるコツをご紹介します。</p>
      </div>
      <hr class="recipe__line">

      <div class="recipe-icn mama_02">
        <div class="inner">
          <p>フラッキー！聞いて～！</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>なになに～、また俺の出番かな？</p>
        </div>
      </div>
      <div class="recipe-icn mama_02">
        <div class="inner">
          <p>同僚からお土産でガトーショコラをもらったから<br class="u-only__pc">生クリームを添えてコウちゃんと食べようと思ったんだけど、<br class="u-only__pc">なかなか上手に泡立たなくて…<br>生クリームを泡立てる方法を教えてほしいの！</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>生クリームの泡立ては、いくつかコツを知っておくと、<br class="u-only__pc">美味しく、丁度いいかたさに作ることができるぞ！</p>
          <p>イチから確認していこう！</p>
        </div>
      </div>
      <div class="recipe__movie recipe-movie-new technic">
        <h3 class="recipe-movie-new__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/common/movie_ttl@2x.png"
           alt="How to" style="max-width:192px" class="u-img__max recipe-movie-new__ttl_img">
        </h3>
        <div class="recipe-movie-new__video">
          <div class="recipe-movie-new__video_base">
            <iframe class="recipe-movie-new__video_emb" src="https://www.youtube.com/embed/RFNLnBosmNY?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">生クリームの泡立て方</h3>
          <p class="mb2"><a href="<?php echo($base_url) ?>/magazine/article/recipe-technic71.php" class="recipe-design__link">ケーキ</a>のデコレーションや<a href="<?php echo($base_url) ?>/magazine/article/recipe-collect04.php" class="recipe-design__link">スイーツ</a>のトッピングには必須といってもよい、ふんわりと泡立てられたクリーム。<br>「なかなか泡立たない…」「かたくなりすぎてしまう…」そんな方も、ポイントを押さえれば上手にクリームを泡立てることができます。コツを覚えて、自分好みのかたさのクリームを作りましょう。</p>
          <h4 class="recipe__ttl_tech">材料</h4>
          <div class="recipe-design__material">
						<dl class="recipe-design__materials">
							<dt>市販の生クリーム<br>※植物性クリームの場合も分量や手順は同じ</dt>
							<dd>200ml</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>上白糖</dt>
							<dd>15～20g（好みで調整）</dd>
						</dl>
						<dl class="recipe-design__materials">
							<dt>氷水</dt>
							<dd>適量</dd>
						</dl>
          </div>
          <h4 class="recipe__ttl_tech">手順</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/51/tech51-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/51/tech51-01@2x.jpg"
                 alt="フラッキーのHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
              <br>氷水を入れた大きなボウルに、冷やしたボウルを重ねて使いましょう。
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/51/tech51-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/51/tech51-02@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl.'」'.$altCap02); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php /* echo ($altCap02); */ ?>
              冷やしたボウルにクリームと上白糖を入れて、泡立て器を<strong>縦に動かす</strong>ようにして泡立てていきます。<br>
              ボウルをやや手前に傾けながら、<strong>空気を含ませる</strong>ようにして泡立てると、クリームが立ちやすくなります。
            </dd>
            </dd>
          </dl>
          <div class="recipe-check mb3">
						<div class="recipe-check__row">
							<div class="recipe-check__ttl">
								<h4 class="recipe-check__ex center">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png"
									data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png"
									alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
								</h4>
								<h4>動物性クリームと植物性クリームの違い</h4>
                <p class="mb2">泡立てクリームを作る際に、動物性のクリームと植物性のクリーム、どちらを使えばいいか悩む…という人もいるよな。</p>
                <p class="mb2">一般的に、「生クリーム」といわれるのは<strong>動物性脂肪</strong>（生乳）だけを原材料としたもの。<br>動物性の生クリームは泡立つのが早く、コクがあり濃厚な味わい。クリームの味が引き立つ、<a href="<?php echo($base_url) ?>/magazine/article/recipe13.php" class="recipe-design__link">ショートケーキ</a>などに向いているんだ。泡立つのが早い分、固まりやすいので、かたくなりすぎないように気を付けよう！泡立てた生クリームは、少し黄色がかった白色になるんだぜ。</p>
                <p class="mb2">一方で植物性のクリームは、コーン油、綿実油、大豆油などの<strong>植物性油脂</strong>に乳化剤などを加え、クリームのように加工したもの。「生クリーム」という表記はできないから、「ホイップ」や「フレッシュ」という表記で販売されているんだ。泡立てに時間がかかるものの、その分クリームのやわらかさを保ちやすく、初心者でもデコレーションしやすいという特徴があるぜ！</p>
                <p>今回は動物性である生クリームを使っているけど、用途や好みによって使い分けてみてくれ！</p>
							</div>
						</div>
          </div>
          <div class="recipe-check mb3">
						<div class="recipe-check__row">
							<div class="recipe-check__ttl">
								<h4 class="recipe-check__ex center">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png"
									data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png"
									alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
								</h4>
								<h4>より泡立ちやすくするコツ</h4>
                <p class="mb2">クリームは、油脂が安定する<strong>3～6℃</strong>に冷やしておくと、さらに泡立てやすくなるぞ。これは、低温だとクリームに含まれる脂肪球同士がくっつくときに、空気を抱き込みやすくなるからなんだ。</p>
							</div>
						</div>
					</div>
          <div class="recipe-check mb3">
						<div class="recipe-check__row">
							<div class="recipe-check__ttl">
								<h4 class="recipe-check__ex center">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl.png"
									data-retina="<?php echo $img_url; ?>/magazine/comic02/common/flucky_check_ttl@2x.png"
									alt="フラッキーのチェック" style="max-width:255px" class="u-img__max">
								</h4>
								<h4>ハンドミキサーを使うときの注意点</h4>
                <p class="mb2">泡立て器ではなく、電動のハンドミキサーを使用する場合は、本体をボウルから離さないように注意！クリームが飛び散ってしまい、服や床を汚してしまう恐れがあるからな。また、同じ理由から、始めは「低速」で泡立て、徐々に「高速」に切り替えるようにしよう！</p>
							</div>
						</div>
					</div>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/51/tech51-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/51/tech51-03@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap03); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/51/tech51-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/51/tech51-04@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap04); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/51/tech51-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/51/tech51-05@2x.jpg"
                 alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap05); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <div class="recipe-plus1 mb3">
            <div class="recipe-plus1__row">
              <h4 class="recipe-plus1__ttl">レモン果汁や酢を使って時短泡立て</h4>
              <p class="mb2">クリームをとにかく短時間で泡立てたい！というときに使えるのが、レモン果汁や<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic22.php#osu" class="recipe-design__link">酢</a>を入れる時短テクニック。過去の研究では、レモン果汁を1％添加することにより、泡立て時間が2/3に短縮、5％以上レモン果汁を添加した場合は、泡立て時間が約半分まで短縮されたという結果が出ています。</p>
              <p class="mb2">これは、レモン果汁や酢に含まれる<strong>クエン酸</strong>によりタンパク質が固まるため、より素早くクリームを泡立てることができるのです。少し味や香りが付いてしまいますが、それでも問題ないという場合はぜひお試しください。</p>
              <p>分量の目安は、以下の通りです。</p>
              <ul>
                <li>●泡立て時間を2/3に短縮したい場合：クリーム200mlに対してレモン果汁2ml</li>
                <li>●泡立て時間を1/2に短縮したい場合：クリーム200mlに対してレモン果汁10ml</li>
              </ul>
              <p class="mb3">※クリームに対するレモン果汁の量が多ければ多いほど、泡立てたクリームはかための仕上がりになります</p>
              <p>ちなみに<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic142.php" class="recipe-design__link">ジャム</a>を加えると、ジャムに含まれているペクチンという成分の働きによりクリームの凝固が早まり、泡立て時間が短縮できます。ジャムを入れた場合は、味や香りが付くだけでなく、着色もあるので注意しましょう。</p>
            </div>
          </div>
          <section>
            <div class="mb5">
              <h3 class="recipe__ttl_l">クリームの保存方法は？</h3>
              <p>パックを開封後、泡立て前の液状のクリームが余ってしまった、泡立てたクリームをとっておきたい、というときに役立つ保存方法をご紹介します。<br>冷凍と冷蔵、それぞれいつまで保存できるかを覚えておきましょう。</p>
              <div class="mb3">
                <h4 class="recipe__ttl_tech">冷蔵保存</h4>
                <p>動物性クリームの場合、開封後の保存期間の目安は<strong>1～2日</strong>です。乳製品にあたるのであまり長持ちしません。<br>原料が乳製品ではない植物性クリームの場合、保存期間の目安は<strong>3～4日</strong>です。</p>
                <p>泡立てたクリームは空気を含んでいる分、泡立て前よりも劣化しやすくなっています。絞り袋に入れた状態でファスナー付き保存袋に入れるか、密閉できる保存容器に入れて保存しましょう。翌日中には使い切ってください。</p>
              </div>
              <div class="mb3">
                <h4 class="recipe__ttl_tech">冷凍保存</h4>
                <p>クリームの量が多いときや長持ちさせたいときは、冷蔵保存よりも冷凍保存がおすすめ。<br>液状のまま保存すると、水分と油分が分離して、解凍しても泡立てることができなくなってしまうので、<strong>必ず泡立てた状態</strong>で冷凍しましょう。</p>
              </div>
              <div>
                <ol class="u-list__ol_circle-num">
                  <li>六～七分立てに泡立てたクリームをスプーンひとすくい分ずつ、または絞り袋で絞り出してラップにのせ、上からふんわりラップをかぶせて冷凍します。</li>
                  <li>凍ったらクリームをラップからはがして、保存容器やファスナー付き保存袋に入れて保存します。</li>
                </ol>
              </div>
              <p>冷凍したクリームの保存期間の目安は、<strong>2～3週間</strong>です。解凍する場合は、クリームを使う2～3時間前に冷蔵庫に移しましょう。<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic128.php" class="recipe-design__link">コーヒー</a>や<a href="<?php echo($base_url) ?>/magazine/article/recipe18.php" class="recipe-design__link">カレー</a>など加熱された飲料・食品に加える場合には、凍った状態のまま使用します。</p>
              <p>冷蔵保存と比べると長期間保存できる冷凍保存ですが、解凍した際にクリームの風味が落ちることもあるので、注意しましょう。</p>
              <hr>
            </div>
          </section>

          <section>
            <h3 class="recipe__ttl_l">泡立てたクリームを使ったおすすめアレンジ＆レシピ</h3>
            <p class="mb3">ここでは泡立てたクリームを使った簡単アレンジ方法と、おすすめレシピをご紹介します。</p>
            <h4>●チョコレートクリーム</h4>
            <div class="flex between">
              <figure class="w45">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/51/tech51-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/51/tech51-06@2x.jpg"
                alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap06); ?>" style="max-width:300px"
                class="u-img__max">
              </figure>
              <div class="w55">
                <p>
                <?php  //echo ($altCap06); ?>
                <p>クリームに<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic119.php" class="recipe-design__link">チョコレート</a>を足したチョコレートクリームは、バレンタインデーのケーキアレンジにもぴったりの一品。まず、クリーム200mlに対してチョコレート30gを用意します。あらかじめ湯煎して溶かしたチョコレートに、クリームを徐々に投入し、普通のクリームと同じように泡立ててください。ダマにならないように注意しましょう。</p>
                </p>
              </div>
            </div>
            <div class="mb3">
              <h4>●小豆クリーム</h4>
              <p class="mb2">泡立てたクリームにゆでた小豆を混ぜるだけで、和スイーツのトッピングに最適な小豆クリームができます。クリーム200mlに対して、小豆は大さじ4程度が適量です。<br>どら焼きに挟んだり、トーストにのせたりしても美味しく食べられます。</p>
              <p>ほかにも、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic83.php" class="recipe-design__link">果物</a>を混ぜたフルーツクリームなど、アレンジをしてみてくださいね。</p>
            </div>
          </section>

            <div class="recipe-plus1 mb3">
            <div class="recipe-plus1__row">
              <h4 class="recipe-plus1__ttl mb3">添えるだけ。泡立てたクリームに合うメニュー</h4>
              <div class="mb2">
                <div class="u-clearfix">
                  <figure class="u-float__right">
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/51/tech51-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/51/tech51-07@2x.jpg"
                    alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap06); ?>" style="max-width:300px"
                    class="u-img__max">
                  </figure>
                  <div>
                    <p><?php echo ($altCap07); ?></p>
                  </div>

                </div>
              </div>

              <h4 class="recipe__ttl mb2">王道！デコレーションケーキ</h4>
              <div class="u-clearfix">
                <p>
               <figure class="u-float__left w45">
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/51/tech51-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/51/tech51-08@2x.jpg"
                  alt="フラッキーのHow To" alt="フラッキーのHow To<?php echo ( '「'.$pageTtl .'」'. $altCap08); ?>" style="max-width:300px"
                  class="u-img__max">
                </figure>
                <?php echo ($altCap08); ?><br>クリームを絞り袋に入れて、ケーキの真上から垂直に絞りだす「ボッシュ絞り」は、基本的な絞り方の1つ。このボッシュ絞りに慣れてきたら角度を変えて絞ったり、ひねりを加えて回転させながら絞ると、見た目に変化を出すことができます。</p>
                <p>ボッシュ絞りでサンタさんの顔を作る、「<a href="<?php echo $base_url ?>/magazine/article/recipe13.php" class="recipe-design__link">サンタさんのいちごケーキ</a>」レシピもご覧ください！</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="recipe-icn ko_03">
        <div class="inner">
          <p>わーい！なまクリームふわふわで、おいしい～</p>
        </div>
      </div>
      <div class="recipe-icn mama_01">
        <div class="inner">
          <p>フラッキーのおかげで、<br class="u-only__sp">丁度いいかたさに泡立てることができてよかった！<br>お土産のガトーショコラも食べ切ったことだし…<br>次は何に添えて食べようかなー</p>
        </div>
      </div>
      <div class="recipe-icn fl_01">
        <div class="inner">
          <p>俺のおすすめはウインナーコーヒーだ<br>冷凍した生クリームを使うといいぞ</p>
        </div>
      </div>
      <div class="recipe-icn papa_01">
        <div class="inner">
          <p>こりゃあ、太っちゃいそうだなあ<br>ダイエットは明日からにしようっと～</p>
        </div>
      </div>
      <?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','14020'),
				array ('recommend-recipe-id','15094'),
				array ('recommend-recipe-id','15071'),
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
