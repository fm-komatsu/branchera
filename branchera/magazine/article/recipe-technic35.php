<?php
//base
include( "../../function.php" );
$content = get_id_data( '15035' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「包丁の研ぎ方と毎日のお手入れ方法」を動画で解説。包丁の材質・種類ごとのお手入れ方法や、シャープナーや砥石の使い方をご紹介します。また、シャープナーや砥石が手元にないときの緊急対処法もご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'CBWvElQWSms';

//導入文
$introTxt = '第35回は「包丁の研ぎ方・お手入れ方法」です。基本の包丁の研ぎ方・お手入れ方法をご紹介します。';


//キャプチャALTタグ
$altCap01 = '切れにくいと感じたらシャープナーを使用します。';
$altCap02 = '粗目付け用の溝に包丁を当て、上から軽く押さえながら、刃の根元から先までまっすぐ手前に10回ほど引きます。<br>※シャープナーは、一時的に切れ味を良くさせるもので、砥石による研ぎ直しの代わりにはなりません。しっかりとお手入れする際は砥石を使用しましょう。また、自宅に砥石がない場合は、包丁研ぎ屋で研いでもらうという手段もあります。';
$altCap03 = '次に、仕上げ研ぎ用の溝で同様に、5回ほど手前に引いて仕上げます。<br>電動式シャープナーの場合は、力を入れずに包丁を通すだけで簡単に研ぐことができます。';
$altCap04 = 'セラミック素材は欠けやすいため、シャープナーや砥石は使わず、メーカーなどの研ぎ直しサービスを利用しましょう。';
$altCap05 = '包丁は、素材に関係なく、食器用洗剤できれいに洗い流し、余分な水分を残さないようしっかりと乾燥させます。';
$altCap06 = '';
$altCap07 = '';
$altCap08 = '';
$altCap09 = '';
$altCap10 = '';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';

?>
<main class="main">
  <article class="main__row">
  <?php
    $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
    $panAry[] = array( "/magazine/index_comic02.php", "今さら聞けない料理のアレコレ" );
    include( $inc_path . "/lib/inc/pan.php" );
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
        $recipeIcon ='mie_02';
        $speech ='マユ先生、聞いてください！<br>昨日トマトを切っていたんですけど、全然切れなくて<br class="u-only__pc">今の包丁はもう買い替え時かなって思っているんです';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='切りづらくなったら、包丁を研いでみてはいかがですか？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_02';
        $speech ='実は…包丁を研いだことがないんです<br>なんだか難しそうで…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='一度研ぎ方を覚えてしまえば、意外と難しくはありませんよ<br>ご家庭でもできる、包丁の研ぎ方の基本をご紹介しますね♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie technic">
        <h3 class="recipe-movie__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
           alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
        </h3>
        <div class="recipe-movie__video">
          <div class="recipe-movie__video_base">
            <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l mb0">研ぐ前に確認！包丁の材質と種類</h3>
          <p class="mb3">包丁を研ぐ前に知っておきたいのが、使っている包丁の材質と種類。素材や形状、用途によって、包丁の研ぎ方は少しずつ変わってくるからです。<br>ここでは、包丁の材質と種類にはどんなものがあるのかをご紹介します。</p>
					<h4 class="recipe__ttl">包丁の材質</h4>
					<p class="mb2">包丁の材質には、鋼・ステンレス・セラミックなどがあります。家庭用の包丁として広く用いられているのは、ステンレスとセラミックです。<br>ステンレスはサビにくく、割れ・欠けにも強いのでお手入れをしやすいのが特長。<br>セラミックは軽量で切れ味が長持ちしますが、落としたりぶつかったりすると欠けやすいので注意が必要です。また、刃がかたいため、一般の砥石は使うことができません。</p>
					<h4 class="recipe__ttl">包丁の種類</h4>
					<p class="mb2">包丁にはさまざまな種類がありますが、大きく「和包丁」と「洋包丁」の2種類に分けることができます。</p>
					<p class="mb2">この2種類の大きな違いは刃の付き方。古くから日本で使われている和包丁は、主に刃の片面だけが斜めに研がれている「片刃」。片刃包丁は刃の片面だけが斜めに研がれており、素材を切ったときに刃が離れやすく、スパッときれいな断面になるのが特長です。</p>
					<p class="mb2">一方、明治以降西洋から伝来した洋包丁は、主に刃の両面が同じ角度で研がれている「両刃」。両刃包丁は刃の両面が同じ角度で研がれており、左右どちらでも切ることができるので利き手を選びません。</p>
					<h5 class="recipe__ttl_s">代表的な洋包丁</h5>
					<ul class="u-list__ul_dot">
						<li><span><b>牛刀（ぎゅうとう）</b><br>シェフナイフとも呼ばれる両刃の肉切り包丁で、野菜や魚など、さまざまな素材に使えます。刃渡り20cmほどが一般的なサイズです。</span></li>
						<li><span><b>三徳包丁</b><br>日本の一般家庭でよく使われている万能包丁です。刃渡りは牛刀よりも短く、コンパクト。</span></li>
					</ul>
					<h5 class="recipe__ttl_s">代表的な和包丁</h5>
					<ul class="u-list__ul_dot">
						<li><span><b>出刃包丁</b><br>魚をさばくために作られた、刃の厚い和包丁です。基本は片刃ですが、両刃に仕上げられたものもあります。</span></li>
						<li><span><b>柳刃包丁</b><br>刺身包丁・正夫（しょうぶ）とも呼ばれ、刺身を薄くきれいに切るのに最適です。刃渡りは長めで、家庭用では18～24cmが一般的ですが、プロはそれ以上の長さを使う場合も。</span></li>
					</ul>
          <h3 class="recipe__ttl_l mb0">シャープナーを使った研ぎ方</h3>
          <p class="mb3">シャープナーとは、応急処置的に刃を研ぐための簡易研ぎ器のこと。砥石で研ぐ時間がない、今ある程度切れやすくしておきたい、というときに使いましょう。</p>
					<h4 class="recipe__ttl">ステンレス包丁の場合</h4>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/35/tech35-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/35/tech35-01@2x.jpg"
                 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/35/tech35-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/35/tech35-02@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」たまねぎ｜'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
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
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/35/tech35-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/35/tech35-03@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」たまねぎ｜'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
					<h4 class="recipe__ttl">セラミック包丁の場合</h4>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/35/tech35-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/35/tech35-04@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」たまねぎ｜'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <h3 class="recipe__ttl_l mb0">砥石を使った研ぎ方</h3>
          <p class="mb3">砥石を使うと、シャープナーよりもしっかりと研げるので、包丁を鋭い切れ味に戻すことができます。ちなみに、シャープナー同様セラミック包丁は欠けやすいため、砥石は使わずメーカーに問い合わせるようにしましょう。</p>
					<h4 class="recipe__ttl">砥石の種類</h4>
					<p class="mb2">砥石は、主に素材の粒の大きさ（粒度）によって種類が3つに分けられます。</p>
					<dl>
						<dt><b>[ 1 ]荒砥石</b></dt>
						<dd class="mb2">最も目が粗い砥石。削る力が強く、包丁が大きく減ってしまうので、刃が欠けたときの修正などに使います。</dd>
						<dt><b>[ 2 ]中砥石</b></dt>
						<dd class="mb2">中間の目の粗さの砥石。削る強さが丁度よいため、一番使用頻度が高いものです。日常の手入れに使います。</dd>
						<dt><b>[ 3 ]仕上砥石</b></dt>
						<dd>最も目が細かく、なめらかな砥石。削る力が弱いので、中砥石で研いだ後、さらに切れ味をよくしたいというときに使います。</dd>
					</dl>
					<p class="mb2">家庭での包丁研ぎでは、中砥石があれば十分です。しかし、よりきれいに切れ味をよくしたいという方は、3種類揃えておくと便利ですよ。</p>
					<h4 class="recipe__ttl">砥石の使い方</h4>
					<p class="mb2">砥石は5分ほど水に浸け、濡れふきんを下に敷いて固定してから使いましょう。研いでいる途中に出てくる灰色のドロッとした研ぎ汁は、刃をなめらかに研ぐのを助けてくれるものなので、捨てずにそのままにして研ぎ続けます。</p>
					<p class="mb2">両刃の場合は、表の刃（持ったとき右側になる方）を、間に小指の先が入るほどの角度で砥石に当て、手前から奥へ押すように研ぎます。肩を楽にして、腕の重さを乗せる程度の力加減がベストです。<br>しばらく研いだ後、刃先を指で触ると「かえり（引っ掛かり）」が感じられるようになります。刃先全体にかえりが感じられたら、裏の刃も研ぎましょう。刃の向きが変わりますが、研ぎ方は同じです。</p>
					<p class="mb2">片刃の場合は、表の刃を両刃と同じように研いだ後、裏の刃は砥石にぴったり寝かせて研ぎます。</p>
					<p class="mb2">両刃・片刃とも、研ぎ終わったら平らな所に新聞紙を広げ、両面をこすってかえりを落としましょう。試し切りをして、スムーズに切れない箇所があればその部分にかえりが残っているので、もう一度こすります。</p>
          <h3 class="recipe__ttl_l mb0">シャープナーや砥石がないときは？簡単な代用方法</h3>
          <p class="mb3">シャープナーや砥石が手元にないときでも、身近なものを使って応急処置的に包丁を研ぎ直すことができます。ただし、あくまで応急処置なので、その後きちんとシャープナーや砥石を使って研ぐようにしましょう。</p>
					<h4 class="recipe__ttl">アルミホイルを使う</h4>
					<p class="mb2">丸めたアルミホイルを包丁で切ると、刃の細かな傷に削れたアルミが入り込み、刃をなめらかに修復してくれます。</p>
					<h4 class="recipe__ttl">茶碗の底を使う</h4>
					<p class="mb2">陶器の茶碗の底の部分＝「糸底」に包丁の刃を当て、手前に数回引くだけ。ざらざらした糸底が、砥石のかわりをしてくれます。</p>
          <h3 class="recipe__ttl_l mb0">普段のお手入れも忘れずに</h3>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/35/tech35-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/35/tech35-05@2x.jpg"
                 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」にんじん｜'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
        </div>
      </div>
      <?php
        $recipeIcon ='mie_01';
        $speech ='すごくよく切れるようになって、びっくり！<br>研ぐ前と研いだ後って、切れ味が全然違うんですね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='研ぎ終わったら、切れ味を試すために<br class="u-only__pc">ミニトマトなどを切ってみましょう<br>切りやすくなっていたらOKです！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='よく切れる包丁で調理をすると<br class="u-only__pc">切り口や見た目もきれいだし、<br class="u-only__pc">なんだか、料理上手になった気がする～♪';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="mb0">
        <?php
        include ($inc_path."/lib/inc/page/_magazine/__recipe-technic-footer.php");
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
