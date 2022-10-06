<?php
//base
include( "../../function.php" );
$content = get_id_data( '15005' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「昆布だしの取り方」を動画で解説。上品でやさしい味わいの昆布だしには、煮出しと水出し、2種類の取り方があります。各方法の解説と、昆布だしの冷凍保存方法や簡単アレンジレシピもご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//YouTube ID
$youTubeId = 'Hn69BJBwGxM';

//導入文
$introTxt = '第5回は、「昆布だしの取り方」です。素材の美味しさを引き立てる上品な昆布だし。正しいだしの取り方を学んで、料理の幅を広げていきましょう。';

//キャプチャALTタグ
$altCap01 = '<b>分量例</b><br>昆布：20g<br>水：2リットル';
$altCap02 = '分量の水に、昆布を<strong>30分以上</strong>浸けておきます。';
$altCap03 = '浸けた後、<strong>弱めの中火</strong>にかけ、沸騰直前に昆布を引き上げます。昆布の周りに小さな泡がついてくるタイミングが、引き上げの目安になります。';
$altCap04 = 'だし汁は、冷蔵庫で<strong>3～4日間保存</strong>することができます。';
$altCap05 = '水出しで取る場合は、同じ分量を容器に入れ蓋（またはラップ）をして冷蔵庫で一晩浸けるだけで、できあがりです。';
$altCap06 = '昆布には、母乳にも入っているうまみ成分のグルタミン酸がたっぷり。昆布は植物性のため、離乳食初期から安心して使えます。<br>昆布だしを使った離乳食でおすすめなのが、「にんじんあんかけがゆ」。まず、やわらかく煮たにんじんをブレンダーですり潰してペースト状にします。10倍のおかゆに昆布だしとにんじんペーストを加え、水溶き片栗粉を少々入れてかき混ぜれば、できあがりです。';
$altCap07 = '日本人のソウルフード、「<a href="'.$base_url.'/magazine/article/recipe-technic39.php" class="recipe-design__link">味噌汁</a>」。昆布だしが効いた味噌汁は、品がよく、朝昼晩いつ飲んでも美味しいですね。<br>豆腐やわかめ、野菜など、お好きな具材を入れて食べましょう。';
$altCap08 = '鍋にあらかじめ作っておいた昆布だしと、お酒を入れます。白菜や水菜、きのこなどの野菜を入れて、その後、肉をしゃぶしゃぶしてください。';
$altCap09 = '湯豆腐はシンプルなお料理だからこそ、丁寧に取っただしでいただきたいもの。鍋にあらかじめ作っておいた昆布だしを張り、そこに豆腐を入れます。弱火にかけてゆで上がったら、お皿に取りましょう。醤油やポン酢などお好みのタレと、ねぎやしょうがなどの薬味をのせて召し上がれ。';
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
        $speech ='マユ先生～…<br>私、何だか自信をなくしてしまいました…';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_03';
        $speech ='ミエさん！<br>どうされたんですか！？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_02';
        $speech ='会社の何でもできる先輩が、家事や子育てをこなしながらも<br class="u-only__pc">和食のときは“だし”をちゃんと取っていると聞いて…<br>私…だしなんて、仕事をしていないときも取ったことがないです！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='だしを取ると聞くと、なんだかすごく手間がかかるように感じますよね<br>でも、実はそんなに大変ではないんですよ！<br>浸けておく時間がかかるだけで、作業自体はすごく簡単なんです';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_03';
        $speech ='本当ですか！？';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='では、今日はだしの基本ともいえる<br class="u-only__pc">「昆布だし」の取り方をレッスンしていきましょう';
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
					<h3 class="recipe__ttl_l mb0">昆布だしの取り方</h3>
					<p class="mb2">昆布で取るだしは、上品でやさしい味です。そのため、昆布だしは素材の味と香りを生かしたお料理に最適。コツをつかめば、簡単に作ることができますよ。</p>
					<h4 class="recipe__ttl">煮出しの場合</h4>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-01.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-01@2x.png"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap01); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-02.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-02@2x.png"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'. strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap02); ?><br>
						</dd>
					</dl>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-03.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-03@2x.png"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap03); ?>
						</dd>
					</dl>
					<dl class="recipe-design__step mb2">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-04.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-04@2x.png"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap04); ?>
						</dd>
					</dl>
					<h4 class="recipe__ttl">水出しの場合</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-05.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-05@2x.png"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap05); ?>
						</dd>
					</dl>
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
							<h3>冷凍保存の方法</h3>
							<p>時間があるときに、多めに昆布だしを取って冷凍保存しておけば、自家製のだし汁をすぐに料理に使うことができますよ。<br>昆布だしは、製氷器やプラスチック容器などに入れて凍らせます。製氷器で凍らせたキューブは、ファスナー付き保存袋に入れ替えて冷凍保存しましょう。<br>冷凍した昆布だしは、そのまま鍋に入れて火にかければ使えるので、とても便利です。冷蔵庫では長期保存できませんが、冷凍保存なら<strong>約3週間保存が可能</strong>です。</p>
						</div>
					</div>
					<h3 class="recipe__ttl_l mb0">昆布だしを使ったおすすめ料理</h3>
					<p>やさしく上品な味と香りが特徴の昆布だしは、素材を生かしたお料理にぴったりです。昆布だしを使ったおすすめ料理をご紹介しましょう。</p>
					<h4 class="recipe__ttl">離乳食</h4>
					<div class="u-clearfix">
						<p>
							<figure class="u-float__left">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-06.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-06@2x.png"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap06)); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
							<?php echo ($altCap06); ?>
						</p>
					</div>
					<h4 class="recipe__ttl">味噌汁</h4>
					<div class="u-clearfix mb2">
						<p>
							<figure class="u-float__right">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-07.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-07@2x.png"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap07)); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
							<?php echo ($altCap07); ?>
						</p>
					</div>
					<h4 class="recipe__ttl">しゃぶしゃぶ</h4>
					<div class="u-clearfix mb2">
						<p>
							<figure class="u-float__left">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-08.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-08@2x.png"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap08)); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
							<?php echo ($altCap08); ?>
						</p>
					</div>
					<h4 class="recipe__ttl" id="yudofu">湯豆腐</h4>
					<div class="u-clearfix mb2">
						<p>
							<figure class="u-float__right">
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-09.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/05/tech05-09@2x.png"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap09)); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
							<?php echo ($altCap09); ?>
						</p>
					</div>
					<h3 class="recipe__ttl_l mb0">昆布だし以外のだしって？</h3>
					<p>和食のだしはいろいろありますが、基本のだしは、昆布だし、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic06.php" class="recipe-design__link">かつお昆布だし</a>、<a href="<?php echo($base_url)?>/magazine/article/recipe-technic07.php" class="recipe-design__link">煮干だし</a>の3種類。<br>かつお昆布だしは、かつお節の香りがダイレクトに感じられ、お吸い物、そばやうどんのつゆなどに合います。<br>また、煮干だしはコクがあり、味噌汁、うどん、鍋料理、煮物に向いています。</p>
					<p>だしを取るのは難しそう…と思うかもしれませんが、どれも作り方はとっても簡単。基本のだしの取り方を覚えておけば、お料理に深みと広がりが生まれますよ。</p>
				</div>
			</div>
      <?php
        $recipeIcon ='mie_03';
        $speech ='本当だ！作業自体はあっという間ですね<br>そして、昆布のいい香り～';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='すっきりとした味わいが欲しいときは水出しで、<br class="u-only__pc">濃厚なうまみが欲しいときは煮出してくださいね';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mie_01';
        $speech ='だしの取り方で、味わいを変えることができるんですね<br>なんだか、料理上手になった気分です！';
        include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
        $recipeIcon ='mayu_01';
        $speech ='そうですね、時間にゆとりがあるときには<br class="u-only__pc">ぜひ、だしを取るところから始めてみてくださいね';
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
