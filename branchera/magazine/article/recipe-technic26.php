<?php
//base
include( "../../function.php" );
$content = get_id_data( '15026' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '「りんごのむき方・切り方」を動画で解説。包丁を使って丸ごとむく方法をはじめ、基本のくし形切りやいちょう切り、輪切りの方法をお伝えします。また、お弁当やスイーツにも使える、うさぎや木の葉のかわいい飾り切りの方法も詳しく解説します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//キャプチャALTタグ
$altCap01 = '包丁を持つ手はなるべく動かさずに、りんごを回転させながら、皮をむいていきます。';
$altCap02 = 'りんごを縦半分に切ります。';
$altCap03 = '6等分の<a href="'.$base_url.'/magazine/article/recipe-technic15.php" class="recipe-design__link">くし形切り</a>にします。';
$altCap04 = 'V字に切り込みを入れて、芯を取り除きます。';
$altCap05 = 'りんごを動かしながら、刃元で2回～3回に分けて皮をむきます。';
$altCap06 = '6等分したりんごを縦にして、両側からV字の切り込みを浅く入れます。';
$altCap07 = 'お尻の方から、V字の切り込みの交差部分までむきます。';
$altCap08 = 'うさぎのりんごの完成です。';
$altCap09 = '6等分したりんごの芯を、まっすぐに切り落とします。';
$altCap10 = '両側からV字に切り込みを入れて、切り離します。';
$altCap11 = '同様に数回繰り返して、切り離したりんごをずらして重ねます。';
$altCap12 = '木の葉のりんごの完成です。';
$altCap13 = '塩水にりんごをさっと浸すと、変色を防ぐことができます。';
$altOther01 = 'りんごをくし形切りに切り芯を取った後、横に置いて端から一定の厚みに切っていきます。おおよそ2mm～3mm程度の厚さの一口サイズにするとよいでしょう。';
$altOther02 = 'りんごを横にして、上から1cm程度の幅に切っていきます。皮を残すか残さないかは用途によって決めましょう。';
$altOther03 = '輪切りにしたりんごを、縦に1cm、横に1cm幅程度に切ります。芯はよけて、なるべく大きさを揃えましょう。';
$altOther04 = 'りんごをくし形切りにして芯を取った後、2～3mmの厚みで垂直に薄切りにしていきます。';

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
				<p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br>第26回は「りんごのむき方・切り方」です。基本のりんごの切り方からかわいいアレンジの飾り切りまでをご紹介します。</p>
			</div>
			<hr class="recipe__line">
			<div class="recipe-icn mie_02">
				<div class="inner">
					<p>マユ先生、この間パパが風邪ひいちゃって…<br>りんごをむいたのですが、<br class="u-only__pc">なかなか上手にむくことができなくて、<br class="u-only__pc">最終的には、ピーラーを使っちゃったんです</p>
				</div>
			</div>
			<div class="recipe-icn mayu_02">
				<div class="inner">
					<p>ミエさんが<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic01.php" class="recipe-design__link">包丁</a>でりんごをむくのを<br class="u-only__pc">想像したら、ヒヤヒヤしちゃいました<br>ピーラーに慣れていると、包丁でむくのは<br class="u-only__pc">難しく感じますよね</p>
				</div>
			</div>
			<div class="recipe-icn mie_02">
				<div class="inner">
					<p>ピーラーでむくのは簡単なんですけど、<br class="u-only__pc">包丁でスルスルむいた方が、スマートでかっこいいですよね</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>りんごのむき方は、小学校でも習う基本的な皮のむき方になるので、<br class="u-only__pc">きちんとマスターしておきましょう！<br>せっかくですから、コウちゃんも喜ぶ、<br class="u-only__pc">りんごの飾り切りも一緒にご紹介しますね</p>
				</div>
			</div>
			<div class="recipe__movie recipe-movie technic">
				<h3 class="recipe-movie__ttl">
					<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png"
					 alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
				</h3>
				<div class="recipe-movie__video">
					<div class="recipe-movie__video_base">
						<iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/yz_bz3EKCsk?rel=0" frameborder="0"
						 gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="recipe__design recipe-design">
				<div class="recipe-design__howto mb0">
					<section>
						<h3 class="recipe__ttl_l">りんごのむき方</h3>
						<p>冬の果物の代表、りんご。甘酸っぱくて種類も豊富、旬のりんごは美味しいですよね。<br>りんごの皮をむくのが苦手という人も、コツさえ分かればすぐに包丁でむけるようになりますよ！</p>
						<h4 class="recipe__ttl">丸ごと皮をむく方法</h4>
						<dl class="recipe-design__step mb3">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-01@2x.jpg"
									alt="マユ先生のHow To <?php echo ( '「'.$pageTtl .'」'. $altCap01); ?>" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">
								<?php echo($altCap01); ?>
							</dd>
						</dl>
						<h4 class="recipe__ttl">くし形切りでむく方法</h4>
						<dl class="recipe-design__step mb0">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-02@2x.jpg"
									alt="マユ先生のHow To<?php echo ( '「'.$pageTtl.'」'.$altCap02); ?>" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">
								<?php echo ($altCap02); ?>
							</dd>
							</dd>
						</dl>
						<dl class="recipe-design__step mb0">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-03@2x.jpg"
									alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">
								<?php echo ($altCap03); ?>
							</dd>
						</dl>
						<dl class="recipe-design__step mb0">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-04@2x.jpg"
									alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap04); ?>" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">
								<?php echo ($altCap04); ?>
							</dd>
						</dl>
						<dl class="recipe-design__step mb3">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-05@2x.jpg"
									alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap05); ?>" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">
								<?php echo ($altCap05); ?>
							</dd>
						</dl>
					</section>
					<hr>
					<section>
						<h3 class="recipe__ttl_l">りんごの切り方</h3>
						<p>基本のくし形切りができるようになったら、切り方を工夫して華やかなりんごを食卓に出してみませんか？今回はりんごの4種類の切り方をご紹介しましょう。</p>
						<h4 class="recipe__ttl">いちょう切り</h4>
						<dl class="recipe-design__step mb3">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-other01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-other01@2x.jpg"
									alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altOther01); ?>" style="max-width:300px"
									class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">
								<?php echo ($altOther01); ?><br>
								<a href="<?php echo $base_url ?>/magazine/article/recipe-technic11.php" class="recipe-design__link" data-scroll>いちょう切り</a>にしたりんごは、サラダや<a href="<?php echo $base_url ?>/magazine/article/recipe-technic71.php" class="recipe-design__link">ケーキ</a>、アップルパイなどに使うことができます。また、少し原型を留めるくらいに煮詰めて、ジャムにするのもおすすめです。程よい食感が残って、食べ応えのあるジャムになりますよ。簡単で応用が利き、保育園などの<a href="<?php echo $base_url ?>/magazine/article/recipe-technic47.php" class="recipe-design__link">お弁当</a>にも入れやすい形です。
							</dd>
						</dl>
						<h4 class="recipe__ttl">輪切り</h4>
						<dl class="recipe-design__step mb3">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-other02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-other02@2x.jpg"
									alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altOther02); ?>" style="max-width:300px"
									class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">
								<?php echo ($altOther02); ?><br>
								<a href="<?php echo $base_url ?>/magazine/article/recipe-technic60.php" class="recipe-design__link" data-scroll>輪切り</a>にしたりんごは、ベイクドアップルやサラダにしたり、型抜きでハートや星の形に芯をくり抜いたりしてもかわいいですよ。
							</dd>
						</dl>
						<h4 class="recipe__ttl">角切り</h4>
						<dl class="recipe-design__step mb3">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-other03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-other03@2x.jpg"
									alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altOther03); ?>" style="max-width:300px"
									class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">
								<?php echo ($altOther03); ?><br>
								<a href="<?php echo $base_url ?>/magazine/article/recipe-technic131.php" class="recipe-design__link">角切り</a>にしたりんごは、フルーツサラダやケーキ、アップルパイなどに使いやすい形です。サラダの場合は、ほかの果物の大きさも揃えて切るのがコツ。きれいで美味しそうに見えます。
							</dd>
						</dl>
						<h4 class="recipe__ttl">スライス</h4>
						<dl class="recipe-design__step mb3">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-other04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-other04@2x.jpg"
									alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altOther04); ?>" style="max-width:300px"
									class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">
								<?php echo ($altOther04); ?><br>
								スライスは火が通りやすいので、スイーツ作りに向いています。食べやすいペースト状にもしやすいため、歯が生えはじめた子どもの離乳食に使われることも。
							</dd>
						</dl>
					</section>
					<hr>
					<section>
						<h3 class="recipe__ttl_l">簡単アレンジ！かわいい飾りりんごの作り方</h3>
						<p>お弁当に入っているとテンションが上がる、かわいいりんごの飾り切り。ここでは簡単なうさぎの形の切り方と、ちょっとテクニックのいる木の葉の形の切り方をお伝えします。</p>
						<h4 class="recipe__ttl">うさぎのりんご</h4>
						<dl class="recipe-design__step mb0">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-06@2x.jpg"
									alt="マユ先生のHow To" alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap06); ?>" style="max-width:300px"
									class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">
								<?php /* echo ($altCap06); */ ?>
								6等分したりんごを縦にして、<strong>両側から</strong>V字の切り込みを浅く入れます。
							</dd>
						</dl>
						<dl class="recipe-design__step mb0">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-07@2x.jpg"
									alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap07); ?>" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">
								<?php echo ($altCap07); ?><br>親指で皮を軽く押さえて、引き抜きます。</dd>
						</dl>
						<dl class="recipe-design__step mb3">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-08.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-08@2x.jpg"
									alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap08); ?>" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">
								<?php echo ($altCap08); ?>
							</dd>
						</dl>
						<h4 class="recipe__ttl">木の葉のりんご</h4>
						<dl class="recipe-design__step mb0">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-09.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-09@2x.jpg"
									alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap09); ?>" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">
								<?php echo ($altCap09); ?>
							</dd>
						</dl>
						<dl class="recipe-design__step mb0">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-10.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-10@2x.jpg"
									alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap10); ?>" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">
								<?php echo ($altCap10); ?><br>V字に切り込みを入れるときに、<strong>割り箸</strong>を使うと切り落とさずに切ることができます。<br>方法は<strog>割り箸</strog>を用意して、りんごの手前と奥に1本ずつ横にして置いて作業します。割り箸を置くことでストッパー代わりとなり、切り落とし防止になります。</dd>
						</dl>
						<dl class="recipe-design__step mb0">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-11.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-11@2x.jpg"
									alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap11); ?>" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">
								<?php echo ($altCap11); ?>
							</dd>
						</dl>
						<dl class="recipe-design__step mb3">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-12.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-12@2x.jpg"
									alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap12); ?>" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">
								<?php echo ($altCap12); ?>
							</dd>
						</dl>
					</section>
					<hr>
					<section>
						<h3 class="recipe__ttl_l">切ったりんごの保存方法</h3>
						<p>りんごは切らない状態で、冬ならば冷暗所で1ヵ月以上持つといわれます。しかし、切った状態だと変色や腐敗が進みやすくなってしまいます。できるだけ長持ちする保存方法を覚えておきましょう。</p>
						<h4 class="recipe__ttl">まずは変色を防ごう</h4>
						<p>せっかくりんごをきれいに飾り切りしても、変色してしまっては台なし。<br>切ったりんごは、たとえ短い間でも空気に触れるとすぐに変色してしまいます。そのため、まず保存する前に塩水に浸けて、変色を防ぐようにしましょう。</p>
						<dl class="recipe-design__step mb3">
							<dt class="recipe-design__step_img">
								<figure>
									<img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-13.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/26/tech26-13@2x.jpg"
									alt="マユ先生のHow To<?php echo ( '「'.$pageTtl .'」'. $altCap13); ?>" style="max-width:300px" class="u-img__max">
								</figure>
							</dt>
							<dd class="recipe-design__step_txt">塩ひとつまみを入れて塩水（約400cc）を用意します。<br>
								<?php echo ($altCap13); ?>
							</dd>
						</dl>
						<h4 class="recipe__ttl">りんごの冷凍保存方法</h4>
						<p>切ったりんごは賞味期限が早く、冷蔵庫に入れていても持つのは<strong>2日程度</strong>といわれます。<br>切ったりんごが余ってしまったら、ファスナー付きの保存袋などに入れ、空気をしっかり抜いて冷凍保存しましょう。その際、りんご同士が重ならないようにするとよいでしょう。</p>
						<p>また、変色防止の処理をしなくても冷凍保存自体はできますが、変色は進んでしまうので注意してください。冷凍保存したりんごの保存期間の目安は、約１カ月です。</p>
						<p>もしスイーツなどに使う予定があるなら、<a href="<?php echo $base_url ?>/magazine/article/recipe-technic142.php" class="recipe-design__link">コンポート</a>やジャム、すりおろしにして冷凍するのもおすすめ。その場合も、1ヵ月程度で使い切るようにしましょう。</p>
					</section>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>くし形切りにしてからりんごの皮をむくと<br class="u-only__pc">すごくむきやすいですね！<br>うさぎと木の葉の飾り切りもとってもかわいい♪<br>コウちゃんも喜びそうです！</p>
				</div>
			</div>
			<div class="recipe-icn mayu_01">
				<div class="inner">
					<p>木の葉のりんごは、できるだけ細かく切っていくことで<br class="u-only__pc">リアルな葉脈のように仕上がり、より美しい飾り切りになりますよ</p>
				</div>
			</div>
			<div class="recipe-icn mie_01">
				<div class="inner">
					<p>これで、りんごを使ったスイーツもいっぱい作れるぞー！</p>
				</div>
			</div>
			<div class="recipe__assist mb3">
				<div class="recipe-assist">
					<div class="recipe-assist__row">
						<h3 class="recipe-assist__ttl">用語解説</h3>
						<dl class="recipe-assist__term">
							<dt>コンポートとは</dt>
							<dd>原型を崩さないように煮詰めて作る、果物の砂糖煮のこと。</dd>
						</dl>
					</div>
				</div>
			</div>
			<?php
				//関連記事
				$recommendrecipe = array (
				array	('recommend-recipe-st'),
				array ('recommend-recipe-id','15071'),
				array ('recommend-recipe-id','15142'),
				array ('recommend-recipe-id','15083'),
				array ('recommend-recipe-end')

				);
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
