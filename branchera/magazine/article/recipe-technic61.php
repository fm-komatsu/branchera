<?php
//base
include("../../function.php");
$content = get_id_data('15061');
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「乱切りの方法」を動画で解説。乱切りは、食材を不規則な形に切る切り方です。火の通りや味の含みがよく、煮物や炒め物に適しています。今回は、にんじん、なす、きゅうり、ごぼう、さつまいもの乱切りの方法をご紹介します。また、トマトなど丸い野菜を乱切りにするコツもお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//キャプチャALTタグ
$altCap01 = 'にんじんに対し斜め45度に包丁を固定して、断面の真ん中に包丁を入れて切ります。そのまま包丁の角度を変えずに、食材を回しながら切っていくと、大きさを揃えて均一に切ることができます。';
$altCap02 = 'なすのように太い食材の場合も、切り方はにんじんと同じです。';
$altCap03 = '両端を切り落としてから、にんじんと同様に回しながら切っていきます。';
$altCap04 = 'きゅうりと同じです。両端を切り落としてから、回しながら切っていきます。';
$altCap05 = 'きゅうりと同じです。両端を切り落としてから、回しながら切っていきます。';
$altCap06 = '4等分にしてヘタを落とし、斜めに包丁を入れて半分にします。';
$altCap07 = '男爵いもなど球形の場合は、小さいものは2等分、大きいものは4等分にしてから、斜めに包丁を入れて半分にします。メークインなど縦長の場合は、まず縦に4等分に切って、端から斜めに包丁を入れていき、角度を変えながら一口大に切りましょう。';
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
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第61回は、「乱切りの方法」です。乱切りのメリットと、基本の切り方についてご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>マユ先生、ちょっと聞きたいのですが、<br class="u-only__pc">乱切りって形が違えば、それでいいんですよね？</p>
				</div>
			</div>
			<div class="recipe-icn mayu_02">
				<div class="inner">
					<p>うーん…形が不規則というのは合っていますが…<br class="u-only__pc">急にどうしたんですか？</p>
				</div>
			</div>
			<div class="recipe-icn masaki_02">
				<div class="inner">
					<p>この間カレーを作ったときに、野菜を乱切りにしてみたんです<br>そうしたら、やわらかい野菜とかたい野菜が混ざった仕上がりになってしまって…</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>それは野菜の大きさが揃っていないから、火の通りにバラつきが出たんですね！<br>乱切りはコツが必要なのでレッスンしていきましょう！</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/FAeO80FFJYo?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<h3 class="recipe__ttl_l mb0">乱切りの方法</h3>
				<p class="mb3">乱切りとは、食材を不規則な形に切る切り方です。表面積が大きくなるため、火の通りや味の含みがよくなるのが利点で、筑前煮やカレーなどの煮込み料理、野菜炒めや酢豚などの炒め料理に向いています。ひとつひとつの形は違っても、<strong>大きさは揃える</strong>ことが火の通りを均一にするポイント。<br>野菜の形ごとに、きれいに乱切りする方法をご紹介します。</p>
				<div class="recipe-design__howto mb3">
					<h4 class="recipe__ttl">縦長の野菜の乱切り</h4>
					<p>縦に長い棒状の野菜は、回しながら切っていきます。</p>
					<h5>●にんじん</h5>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/61/tech61-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/61/tech61-01@2x.jpg"
								 alt="マユ先生のHow To <?php echo('「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php /* echo($altCap01); */ ?>
							にんじんに対し<strong>斜め45度</strong>に包丁を固定して、断面の真ん中に包丁を入れて切ります。そのまま包丁の角度を変えずに、食材を回しながら切っていくと、大きさを揃えて<strong>均一に切る</strong>ことができます。
						</dd>
					</dl>
					<h5>●なす</h5>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/61/tech61-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/61/tech61-02@2x.jpg"
								 alt="マユ先生のHow To<?php echo('「'.$pageTtl.'」'.$altCap02); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo($altCap02); ?>
						</dd>
					</dl>
					<h5>●きゅうり</h5>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/61/technic61_other01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/61/technic61_other01@2x.jpg"
								 alt="マユ先生のHow To<?php echo('「'.$pageTtl .'」'. $altCap03); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo($altCap03); ?>
						</dd>
					</dl>
					<h5>●ごぼう</h5>
					<p class="recipe-design__step_txt">
						<?php echo($altCap04); ?>
					</p>
					<hr>
					<h5>●さつまいも</h5>
					<p class="recipe-design__step_txt">
						<?php echo($altCap05); ?><br>太くなりやすいので、一口大に切るように意識しましょう。
					</p>
					<div class="recipe-design__check check mb3">
						<div class="check__row">
							<div class="check__ttl">
								<h4 class="check__ex center">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png"
									data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png"
									alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
								</h4>
							</div>
							<h3>特に太い食材を乱切りにするコツ</h3>
							<p>太めのさつまいも、だいこんやれんこんなど、もともと太い食材の場合は、まず縦に２等分、または４等分に切って、細めの棒状になるように切り分けます。断面を下にして、端から斜めに包丁を入れていき、食材を回しながら食べやすい大きさに切りましょう。</p>

						</div>
					</div>
					<h4 class="recipe__ttl">丸い野菜の乱切り</h4>
					<p>丸い球形の野菜は、4等分か6等分にしてから切っていきます。</p>
					<h5>●トマト</h5>
					<p class="recipe-design__step_txt">
						<?php echo($altCap06); ?>
					</p>
					<hr>
					<h5>●じゃがいも</h5>
					<p class="recipe-design__step_txt">
						<?php echo($altCap07); ?>
					</p>

				</div>
			</div>
			<div class="recipe-icn masaki_01">
				<div class="inner">
					<p>そうか！乱切りは大きさを揃える必要があったんですね！</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>乱切りと<a href="<?php echo($base_url)?>/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>は、断面の表面積が大きいので味が染み込みやすくなりますよ！<br>いろいろな料理で活用できる切り方なので、ぜひ使ってみてくださいね</p>
				</div>
			</div>

			<div class="mb0">
				<?php
                include($inc_path."/lib/inc/page/_magazine/__recipe-technic-footer.php");
            ?>
			</div>
		</section>
	</article>
</main>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<?php
    $toindex_url = "/magazine/index_comic02.php";
    include($inc_path . "/lib/inc/toindex__magazin.php");
    ?>
<?php  include($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include($inc_path."/lib/inc/footer.php"); ?>
<?php  include($inc_path."/lib/inc/foot.php");
