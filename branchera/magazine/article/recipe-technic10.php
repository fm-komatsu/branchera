<?php
//base
include "../../function.php";
$content = get_id_data('15010');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '「ゆで卵の作り方」を動画で解説。固さ別のゆで時間、きれいなゆで卵を作るコツや、ゆで卵を使った人気アレンジレシピなどを分かりやすくご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];
$thumTxt = $content[ 'description' ];

// 個別PR枠　旧テンプレートは動画直前に「__comic02_pr.php」をincrude必須！！
$comic02PrId = '106';

//ヘッダーフッターバナーの個別指定
$bannerCmId = 'null';

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include $inc_path . "/lib/inc/head.php";
include $inc_path . "/lib/inc/header.php";
?>
<main class="main">
  <article class="main__row">
    <?php
      $panAry[] = array("/magazine/", "ブランシエラマガジン");
      $panAry[] = array("/magazine/index_comic02.php", "今さら聞けない料理のアレコレ");
      include $inc_path . "/lib/inc/pan.php";
      include($inc_path . "/lib/inc/page/_magazine/__comic02tech-header.php");
			include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-main-v.php");
      ?>
    <!-- 220805追加 -->
    <div class="mt3 mt2_sp mb5 mb3_sp">
      <div>
        <?php $CmGtmId = "1"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php");?>
      </div>
    </div>
    <!-- /220805追加 -->
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header technic">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num">　</span>
          <span class="recipe-header__ttl">ゆで卵の作り方</span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。第10回は、「簡単＆時短！基本のゆで卵の作り方・コツ」です。つるんと殻をむく方法や、半熟卵の作り方をご紹介します。</p>
      </div>
      <hr class="recipe__line">
      <div class="recipe-icn mie_02">
        <div class="inner">
          <p>マユ先生！私、こんな簡単なこともできないなんてショックですー</p>
        </div>
      </div>
      <div class="recipe-icn mayu_02">
        <div class="inner">
          <p>ミ、ミエさん！どうされたんですか！？</p>
        </div>
      </div>
      <div class="recipe-icn mie_02">
        <div class="inner">
          <p>週末、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic47.php" class="recipe-design__link">ピクニック</a>に行く予定だったので<br class="u-only__pc">卵<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic132.php" class="recipe-design__link">サンド</a>を試しに作っていたのですが…<br>ゆで卵の殻をむいても、白身が殻にくっついちゃってうまくむけないんです</p>
        </div>
      </div>
      <div class="recipe-icn mayu_01">
        <div class="inner">
          <p>たしかに、ゆで卵の殻をむくのって意外と難しいですよね<br>でも、ちょっとしたひと手間で簡単にむくことができるんですよ<br>今回はつるんとむける、ゆで卵の作り方をご紹介しましょう！</p>
        </div>
      </div>
      <?php include ($inc_path."/lib/inc/page/_magazine/__comic02_pr.php"); //PR記事 ?>
      <div class="recipe__movie recipe-movie technic">
        <h3 class="recipe-movie__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
           alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
        </h3>
        <div class="recipe-movie__video">
          <div class="recipe-movie__video_base">
            <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/YxLxk31wvCM?rel=0" frameborder="0"
             gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb0">
          <h3 class="recipe__ttl_l">基本のゆで卵の作り方・コツ</span></h3>
          <dl class="recipe-design__step">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/10/tech10-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/10/tech10-01@2x.jpg"
                 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">卵は冷蔵庫から出してしばらく置き、常温に戻します。<br>卵の丸い方を上にして、スプーンなどで優しく叩いて<strong>ヒビを入れます</strong>。ヒビを入れることでゆで上がったときに殻がきれいにむけます。</dd>
          </dl>
          <dl class="recipe-design__step">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/10/tech10-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/10/tech10-02@2x.jpg"
                 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">沸騰したお湯に<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic22.php#osu" class="recipe-design__link">酢</a>少々、<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic22.php#shio" class="recipe-design__link">塩</a>少々を加えて卵を静かに入れます。塩は卵がヒビ割れるのを防ぎ、酢は割れたヒビから卵白が流れ出るのを防いでくれます。<br>沸騰したお湯に入れてから1～2分の間、<strong>箸で転がし続ける</strong>と黄身が偏りにくく、ちょうど真ん中になるきれいなゆで卵ができます。</dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/10/tech10-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/10/tech10-03@2x.jpg"
                 alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">好みの固さによってゆで時間を変えます。ゆで時間の目安は<strong>固ゆでが12分、普通が10分、半熟が7分</strong>、です。
            </dd>
          </dl>
        </div>
        <div class="recipe-design__check check mb3">
          <div class="check__row">
            <div class="check__ttl">
              <h3 class="check__ex center">
                <img
                data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png"
                data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png"
                alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
              </h3>
            </div>
            <h4>水からゆでる場合のゆで時間</h4>
            <p>卵を水からゆでる時は、お湯からゆでる場合よりも<strong>30秒～1分ほど短め</strong>でよいでしょう。水が沸騰するまでの間、少しずつ卵が加熱されている分を考慮します。<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic02.php" class="recipe-design__link">火加減</a>は<strong>沸騰するまでは強火、沸騰してからは中火</strong>にします。加熱前の卵の温度や大きさ、微妙な火加減でも仕上がりが変わってくるので、好みの固さになるよう様子を見て調整してくださいね。</p>
          </div>
        </div>
        <div class="recipe-design__check check mb3">
          <div class="check__row">
            <div class="check__ttl">
              <h3 class="check__ex center">
                <img
                data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png"
                data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png"
                alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
              </h3>
            </div>
            <h4>うずら卵のゆで時間</h4>
            <p>うずら卵は、冷たいままゆでると大きくヒビ割れたり、破裂してしまうことがあるので、常温に戻してからゆでます。水からゆでる場合は沸騰してから2分程、沸騰したお湯でゆでる場合には3分程で、普通の固さのゆで上がりになります。</p>
          </div>
        </div>
        <dl class="recipe-design__step mb4">
          <dt class="recipe-design__step_img">
            <figure>
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/10/tech10-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/10/tech10-04@2x.jpg"
                alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
            </figure>
          </dt>
          <dd class="recipe-design__step_txt">取り出したら、<strong>すぐに冷水に浸けます</strong>。<strong>1分程</strong>浸けたら、スプーンの背などで優しく全体にヒビを入れます。冷水に浸けることで殻と卵白の間に隙間ができるので、つるんときれいにむくことができます。</dd>
        </dl>
        <section>
          <div>
            <h3 class="recipe__ttl_l mb0">ゆで卵を使った人気のアレンジレシピ</h3>
          </div>
          <div class="mb2">
            <p>狙った加減のゆで卵を作るのは、簡単なようで意外と難しいものですね。思い通りのゆで加減で作れるようになったら、アレンジレシピにも挑戦してみましょう！</p>
          </div>
          <div>
            <h4 class="recipe__ttl">ゆで卵に塩味を付ける方法</h4>
            <div class="mb2">
              <p>黄身の中心まで軽い塩味の付いた卵、美味しいですよね。あの卵は家庭でも作ることができます。作り方は簡単。卵をゆでたら、<strong>殻のついたまま塩水に浸けて、冷蔵庫で一晩冷やすだけ</strong>です。卵が丸ごと浸かるよう、塩水の量を調節してください。</p><p>この方法は、卵の殻に無数に空いた目に見えない極小の穴から、塩水の塩分が浸透して味が付く作用を利用した作り方。塩水の濃度は水100mlに対して35g程度ですが、塩を量らなくてもOK。水に塩を入れ続けてもこれ以上溶けない、少し溶け残っている…というくらいの量を入れると、ちょうど良い塩分濃度の水ができあがります。</p>
            </div>
            <h4 class="recipe__ttl">醤油味の味玉の作り方</h4>
            <div class="mb2">
              <p>こちらは、殻をむいて調味液に浸ける方法です。調味液は<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic22.php#shoyu" class="recipe-design__link">醤油</a>＋みりんが基本。ファスナー付き保存袋やポリ袋に、<strong>卵と調味液を一緒に入れて一晩浸けるだけ</strong>で完成です。</p>
              <p>調味料を合わせるのが面倒なときは、市販のめんつゆを使ってもOK。卵がしっかりと浸るように工夫してくださいね。</p>
            </div>
            <h4 class="recipe__ttl">ゆで卵を活用した人気のレシピ</h4>
            <div>
              <p>ゆで卵が上手にできたら、その美味しさを生かした料理を作ってみたいですね。</p>
              <p>サンドイッチ用のゆで卵なら簡単。殻をむいた基本のゆで卵をフォークで潰したら、塩・こしょうとマヨネーズを加えて混ぜます。パセリや玉ねぎの<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic16.php#shoyu" class="recipe-design__link">みじん切り</a>、ツナを加えるなどのアレンジもおすすめ。一味違ったサンドイッチができます。</p>
              <p>ゆで卵は、潰し具合の粗さによって、味のなじみ方や用途も変わってきます。細かく潰してタルタルソースに、粗く潰してポテトサラダや和え物に。彩りもきれいなので幅広く活用できますよ。</p>
              <p>また、丸ごと使う場合には、スコッチエッグやおでんの主役になりますね。<a href="<?php echo($base_url) ?>/magazine/article/recipe-technic152.php" class="recipe-design__link">豚の角煮</a>と一緒に食べる半熟ゆで卵はファンの多い一品。ラーメンや<a href="<?php echo($base_url) ?>/magazine/article/recipe-collect01.php" class="recipe-design__link">お弁当</a>にも欠かせない存在です。</p>
            </div>
          </div>
        </section>
      </div>
      <div class="recipe-icn mie_01">
        <div class="inner">
          <p>いつもむくのに時間がかかっていたのに<br class="u-only__pc">こんなに簡単できれいにむけるなんて！</p>
        </div>
      </div>
      <div class="recipe-icn mayu_01">
        <div class="inner">
          <p>ゆでる時間を変えることで、卵料理の幅が広がると思うので<br class="u-only__pc">ぜひ、いろいろな固さのゆで卵を作ってみてくださいね！</p>
        </div>
      </div>
      <div class="recipe-icn mie_01">
        <div class="inner">
          <p>よぉ～し、さっそく卵サンドにチャレンジだ♪</p>
        </div>
      </div>
      <div class="recipe__assist mb3">
        <div class="recipe-assist">
          <div class="recipe-assist__row">
            <h3 class="recipe-assist__ttl">用語解説</h3>
            <dl class="recipe-assist__term">
              <dt>常温とは</dt>
              <dd>常温とは屋内、室内の温度で「外気温を超えない温度」のこと。厚生労働省によって定められています。なお、常温は18℃～25℃、室温は1℃～30℃とされています。</dd>
            </dl>
          </div>
        </div>
      </div>

			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15062'),
				array ('recommend-recipe-id','15093'),
				array ('recommend-recipe-id','13002'),
				array ('recommend-recipe-end')

				);
			?>
			<?php
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
			?>
      <div class="mb0">
        <?php
          include $inc_path . "/lib/inc/page/_magazine/__recipe-technic-footer.php";
        ?>
      </div>
    </section>
  </article>
</main>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<!-- 220805追加 -->
<div class="main__row pt0_sp mb2_sp">
	<div>
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic02_cm.php"); ?>
	</div>
</div>
<!-- /220805追加 -->
<?php
$toindex_url = "/magazine/index_comic02.php";
include $inc_path . "/lib/inc/toindex__magazin.php";
?>
<?php include $inc_path . "/lib/inc/pagetop.php";?>
<?php include $inc_path . "/lib/inc/footer.php";?>
<?php include $inc_path . "/lib/inc/foot.php";?>
