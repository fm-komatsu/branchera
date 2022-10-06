<?php
//base
include( "../../function.php" );
$content = get_id_data( '15008' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '「卵の割り方」を動画で解説。卵の殻がうまく割れなかったり、破片が入ってしまったりすることを防ぐコツや、卵白と卵黄をきれいに分ける方法をご紹介します。また、応用編としてうずらの卵やゆで卵の殻のむき方もお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
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
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第8回は、「卵の割り方、卵黄と卵白の分け方」です。いろんな料理の基本となる卵の正しい割り方と、「うずらの卵」の割り方についてもご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>マユ先生、この間テレビを見ていたら<br class="u-only__pc">美味しい卵かけごはんの作り方を紹介していて<br class="u-only__pc">すごく美味しそうだから真似してみたんですよ</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>卵かけごはん、私も好きです～<br>美味しくできましたか？</p>
				</div>
			</div>
			<div class="recipe-icn kou_02">
				<div class="inner">
					<p>パパねぇ～、グチャってなっちゃったんだよぉ</p>
				</div>
			</div>
			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>僕、卵がきれいに割れないんですよね…<br>それと、手に卵が付いてしまうんです</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>卵の正しい割り方って、実はあまり習う機会がないですよね<br>今回は、手が汚れない、きれいな卵の割り方を覚えましょう！</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/tvzBGLeLn8Q?rel=0" frameborder="0"
						gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<div class="recipe-design__howto mb0">
					<h3 class="recipe__ttl_l">卵の簡単＆きれいな割り方はコレ！</h3>
					<p>卵は割り方によって、殻が卵の中に入ってしまったり、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic62.php" class="recipe-design__link">片手で割ろう</a>として、黄味が壊れてしまう場合がありますよね。<br>殻が割った卵の中に入ってしまうのは、ヒビの入れ方に原因があります。卵にヒビを入れるとき、流し台の角やボウルのふちなど、鋭角の場所に卵を打ち付けると、殻が内側に凹んでしまい、卵の中に殻が入りやすくなってしまいます。<br>卵にヒビを入れるときは、平らな場所に打ち付けるようにしましょう！</p>
					<h4 class="recipe__ttl">鶏卵のきれいな割り方の基本</h4>
					<dl class="recipe-design__step">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/08/tech08-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/08/tech08-01@2x.jpg"
								alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">卵を割るときは、平らな場所に卵の中央を軽く打ち付けてヒビを入れます。殻の割れ目に両手の親指を入れて、ゆっくりと左右に開きます。</dd>
					</dl>
					<dl class="recipe-design__step">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/08/tech08-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/08/tech08-02@2x.jpg"
								alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">「カラザ」を取る場合は、菜箸でカットして取ることができます。カラザとは、白い紐状のもので、栄養豊富な卵白の一種です。食べても問題はありませんが、口触りをより滑らかにしたい場合は、取り除くようにしましょう。</dd>
					</dl>
					<dl class="recipe-design__step">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/08/tech08-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/08/tech08-03@2x.jpg"
								alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">卵の殻が入ってしまった場合は、卵の殻でやさしくすくって取り除きます。殻を使うことで、破片との間に表面張力が生まれ効率的に取り除くことができます。<br>※卵の殻を使う際は、衛生面にご留意ください。</span></dd>
					</dl>
					<div class="recipe-design__plus1 plus1 mb3">
						<div class="plus1__row">
							<h3 class="plus1__ttl" id="separate-eggs">卵黄と卵白に分ける方法</h3>
							<p><a href="<?php echo($base_url)?>/magazine/article/recipe-technic71.php" class="recipe-design__link">ケーキ</a>やプリンなどの<a href="<?php echo($base_url)?>/magazine/article/recipe-collect04.php" class="recipe-design__link">お菓子</a>をはじめ、お料理によっては、卵黄と卵白を分けて使うことがあります。卵黄と卵白をきれいに分ける方法をお伝えしましょう。</p>
							<dl class="recipe-design__step">
								<dt class="recipe-design__step_img">
									<figure>
										<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/08/tech08-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/08/tech08-04@2x.jpg"
										alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
									</figure>
								</dt>
								<dd class="recipe-design__step_txt">卵黄と卵白を分ける場合は、卵を半分に割り、卵黄だけを片方の殻に残します。さらに、空いている殻に卵黄を移し替えることで、卵白だけが下に落ちていきます。</dd>
							</dl>
							<dl class="recipe-design__step mb4">
								<dt class="recipe-design__step_img">
									<figure>
										<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/08/tech08-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/08/tech08-05@2x.jpg"
										alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
									</figure>
								</dt>
								<dd class="recipe-design__step_txt">この動作を2～3回繰り返し、卵黄だけになったら容器に移します。</dd>
							</dl>
						</div>
					</div>
					<h3 class="recipe__ttl">うずらの卵の割り方</h3>
					<dl class="recipe-design__step mb4">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/08/tech08-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/08/tech08-06@2x.jpg"
								alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">うずらの卵を割るときは、尖っている方にヒビを入れます。平らな場所でやさしく打ち、割れた箇所を指でむきます。</dd>
					</dl>
					<dl class="recipe-design__step mb4">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/08/tech08-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/08/tech08-07@2x.jpg"
								alt="マユ先生のHow To" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">割った箇所を下に向け、中身を容器にやさしく落とすようにして割り入れます。</dd>
					</dl>
					<section>
						<div>
							<h3 class="recipe__ttl_l">ゆで卵の場合、どうやって殻をむく？</h3>
							<p>生卵だけではなく、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic10.php" class="recipe-design__link">ゆで卵</a>を作ったときも殻を割りますね。せっかく作ったゆで卵なのに、卵の殻が白身とくっついてしまって、きれいにむけずに困ったことはありませんか？ゆで卵の殻をつるんとスムーズにむく方法をお伝えします。</p>
							<p>まず、ゆでる前に卵のおしり（尖っていない側）をスプーンなどで軽く叩き、少しだけヒビを入れておきます。このとき、卵が割れないように気を付けてください。<br>ゆで上がったら、卵はすぐに冷水に浸けましょう。1分程浸けたら、全体にやさしくヒビを入れ、むいていきます。<br>こうすることで殻と卵白の間に隙間ができ、つるんとむけやすくなりますよ。</p>
						</div>
					</section>
				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>おぉ！きれいにできたー！<br>僕は、卵を割るときの力が強すぎたみたいです</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>コツを覚えれば、卵を割るのはとても簡単なんです<br>ちなみに、卵を保存するときは、尖った方を下にして<br class="u-only__pc">立てて保存すると、長持ちするといわれているんですよ</p>
				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>へぇ～！早速試してみます！<br>コウちゃん、これで究極の卵かけごはんが作れるぞぉ～</p>
				</div>
			</div>
			<div class="recipe-icn kou_03">
				<div class="inner">
					<p>コウちゃん、たまごかけごはんたべたーい！！</p>
				</div>
			</div>
			<div class="recipe__assist mb3">
				<div class="recipe-assist">
					<div class="recipe-assist__row">
						<h3 class="recipe-assist__ttl">用語解説</h3>
						<dl class="recipe-assist__term">
							<dt>カラザとは</dt>
							<dd>カラザとは、卵を割ったときに卵白に混じっている、白い紐状のもの。カラザは卵黄を卵の中央につなぎ留め、衝撃から守る役割をしている。</dd>
						</dl>
					</div>
				</div>
			</div>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15048'),
				array ('recommend-recipe-id','15141'),
				array ('recommend-recipe-id','13002'),
				array ('recommend-recipe-end')

				);
			?>
			<?php
		    include($inc_path."/lib/inc/page/_magazine/__recipe-tech-recommend.php");
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
