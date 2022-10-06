<?php
//base
include( "../../function.php" );
$content = get_id_data( '15060' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '「輪切りの方法」を動画で解説。輪切りは、食材の切り口の断面が円形になるようにする切り方です。簡単で、いろいろな料理で使える輪切り。今回は、にんじん、きゅうり、だいこん、さつまいも、たまねぎ、レモンの輪切りの方法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = 'にんじんを横向きにまな板に置き、垂直に包丁を入れて、一定の幅に切ります。皮をむく場合は、切り始める前にむいておきましょう。
グラッセ、煮物などは１cmほどの厚さがおすすめです。';
$altCap02 = 'きゅうりの両端を切り落とし、端から一定の幅に切ります。';
$altCap03 = 'だいこんは皮を包丁でむき、端から一定の幅に切ります。厚い輪切りにする場合は、後から皮をむいても大丈夫です。';
$altCap04 = 'さつまいもはかたいので、しっかりと手で固定して端から一定の幅に切ります。';
$altCap05 = 'まず、両端を切り落としてから、しっかり固定して、繊維と直角に包丁を当てて一定の幅に切ります。';
$altCap06 = 'レモンを輪切りにする際は、最初に皮をよく洗いましょう。両端を切り落とし、垂直に包丁を入れて一定の幅に切ります。';
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
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。第60回は、「輪切りの方法」です。見た目や味にも影響する野菜や果物の輪切りの方法についてご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn mie_02">
				<div class="inner">
					<p>マユ先生、聞いてください！<br>にんじんを輪切りにしてグラッセにしたら、煮崩れてしまったんです</p>
				</div>
			</div>
			<div class="recipe-icn kou_01">
				<div class="inner">
					<p>にんじん、ぐちゃぐちゃだったよー</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>もしかすると、輪切りが薄すぎたのかもしれませんね<br>グラッセのように煮詰めるお料理は厚め、サラダや炒め物は薄め…と<br>お料理に合わせて厚さを変えるのが輪切りのポイントなんですよ！</p>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>同じ輪切りでも、お料理に合わせた切り方があるんですね。<br>マユ先生、ぜひ教えてください！</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/s_3U2tgT3EU?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<div class="recipe-design__howto mb0">
					<h3 class="recipe__ttl_l mb0">輪切りの方法</h3>
					<p class="mb2">輪切りとは、<strong>食材の切り口の断面が円形</strong>になるようにする切り方です。いろいろな料理で使えるのでマスターしておきましょう。</p>
					<h4 class="recipe__ttl">にんじんの輪切り</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/60/tech60-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/60/tech60-01@2x.jpg"
								 alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap01); ?><br>
							保存する際は、切り口が空気に触れないようにラップに包んで冷蔵庫に入れます。<br>保存期間の目安は、約3日です。
						</dd>
					</dl>
					<h4 class="recipe__ttl">きゅうりの輪切り</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/60/tech60-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/60/tech60-02@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap02); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap02); ?><br>
							酢の物などにする場合は2mmほどの薄切りに、サラダに入れて歯ごたえを出したいときは、5mm～1cmほどの厚さにしましょう。<br>保存する際は、まずキッチンペーパーで水分をしっかり拭き取り、切り口が空気に触れないようにラップで包みます。その状態で保存容器に詰めて、冷蔵庫に入れてください。<br>保存期間の目安は、約1～2日です。スライスしたきゅうりはあまり長持ちしないので、早めに食べ切りましょう。
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
							<h3>きゅうりを上手に薄い輪切りにするには？</h3>
							<p>包丁にくっついたり、飛び散ったりしやすい、薄い輪切りのきゅうり。上手に切るには、きゅうりに対して包丁を垂直に下ろすのではなく、包丁をほんの少し外側に倒して、<strong>斜め</strong>に包丁を下ろすようにしましょう。切れたきゅうりが包丁からすっと離れて、飛び散りづらくなります。</p>
						</div>
					</div>
					<h4 class="recipe__ttl">だいこんの輪切り</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/60/tech60-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/60/tech60-03@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap03); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap03); ?><br>煮ものや汁物にする場合は厚めに、揚げ物や漬物の場合には薄めに輪切りしましょう。<br>保存する際は、厚めに輪切りにしただいこんを、それぞれラップで包み、ファスナー付きの保存袋に入れて冷凍保存します。だいこんは冷凍保存すると、冷蔵するよりも味が染み込みやすくなります。保存期間の目安は、約1ヵ月です。
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
							<h3>新しいだいこんの断面が黒い場合は？</h3>
							<p>買ったばかりなのに、だいこんを切ったら断面が黒ずんでいた…ということはありませんか？<br>この現象は「青あざ症」といい、夏季によく見られる現象です。この現象には、だいこんに含まれる栄養素のひとつである、“ホウ素”という物質が関係しています。高温多湿の土壌で栽培されただいこんは、このホウ素が欠乏してしまい、黒い筋ができてしまうことがあるのです。<br>見た目があまりよくないため、生のだいこん料理には不向きですが、煮物などにすれば、普通のだいこんと同じように食べることができますよ。<br>症状が進行すると苦味が出ることもあるので、変色がひどい部分は取り除いてから調理するようにしましょう。</p>
						</div>
					</div>
					<h4 class="recipe__ttl">さつまいもの輪切り</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/60/tech60-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/60/tech60-04@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap04); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap04); ?><br>
							煮物や天ぷらなどにする場合は１cmほどの厚さに、チップスなどは1～2mmほどの薄切りにしましょう。<br>保存する際は、輪切りにしたさつまいもを10分ほど水にさらしてアクを抜き、水気をふき取って、ファスナー付きの保存袋に入れ、空気を抜いてから冷凍します。<br>保存期間の目安は、約2～3週間です。
						</dd>
					</dl>
					<h4 class="recipe__ttl">たまねぎの輪切り</h4>
					<dl class="recipe-design__step mb3">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/60/tech60-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/60/tech60-05@2x.jpg"
								 alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap05); ?>" style="max-width:300px" class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap05); ?><br>ステーキの添え物やバーベキューに使う場合は、1～2cmほどの厚さにしましょう。<br>たまねぎは一度切ってしまうと、あまり日持ちはしません。保存する際は、水気をしっかりと拭き取り、小分けにしてラップで包み、ファスナー付きの保存袋に入れ冷凍します。保存期間の目安は、約1ヵ月です。<br>※ 詳しい保存方法は、「<a href="<?php echo($base_url)?>/magazine/article/recipe-technic33.php" class="recipe-design__link">野菜の冷凍保存方法</a>」をご覧ください。
						</dd>
					</dl>
					<h4 class="recipe__ttl">レモンの輪切り</h4>
					<dl class="recipe-design__step mb0">
						<dt class="recipe-design__step_img">
							<figure>
								<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/60/tech60-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/60/tech60-06@2x.jpg"
								 alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap06); ?>" style="max-width:300px"
								 class="u-img__max">
							</figure>
						</dt>
						<dd class="recipe-design__step_txt">
							<?php echo ($altCap06); ?><br>
							はちみつ漬けやレモン煮にする場合は5mmほどの厚さに、料理やドリンクの添え物にする場合は2mmほどの薄切りにしましょう。<br>レモンは冷蔵庫に入れるとあまり長持ちしないため、保存する際は、レモン同士が重ならないようにラップに広げて包み、ファスナー付きの保存袋に入れて冷凍します。保存期間の目安は、約3週間です。
						</dd>
					</dl>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>にんじんグラッセが失敗したのは、厚さが足りなかったんですね！<br>もう一度、チャレンジしてみます</p>
				</div>
			</div>
			<div class="recipe-icn kou_01">
				<div class="inner">
					<p>あまーいにんじんたべたーい！</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>野菜を輪切りにして冷凍保存しておけば、<br class="u-only__pc">使いたいときにすぐ使えるから便利ですよ</p>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>よーし！いっぱい野菜を輪切りにして冷凍保存しようっと！</p>
				</div>
			</div>
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
