<?php
//base
include ("../../function.php");
$content = get_id_data('9017');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $pageTtl.'が当たる、ブランシエラクラブの抽選ページです。抽選賞品は'.$content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/smile/" ,"住まいレージ");
		include ($inc_path."/lib/inc/pan.php");
		?>

		<?php
		$smile_flug = "lottery";// exchange or lottery or service or no_flp
		$smile_num = "100";//必要スマイル数
		$smile_id_test = "65";//テストFLP用リンクナンバー
		$smile_id_production = "65";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>

		<section class="lottery-banner">
			<div class="lottery-banner__row">
				<img
				data-src="../../lib/img/smile/article/lottery-1711.png"
				data-retina="../../lib/img/smile/article/lottery-1711@2x.png"
				alt="抽選で10名さまに当たる！【ボーネルンド】ルーピング 汽車"
				style="max-width:625px;"
				class="u-img__max"
				>
			</div>
		</section>

		<section class="main__wrapper">

			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-201711-img1.png"
						data-retina="../../lib/img/smile/article/lottery-201711-img1@2x.png"
						alt="ルーピング 汽車"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-201711-img2.png"
						data-retina="../../lib/img/smile/article/lottery-201711-img2@2x.png"
						alt="ルーピング 汽車"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-201711-img3.png"
						data-retina="../../lib/img/smile/article/lottery-201711-img3@2x.png"
						alt="ルーピング 汽車"
						class="u-img__max">
					</figure>
				</div>
				<!--p class="u-small">※賞品にビールはついておりません。</p-->
			</div>

			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">お子さまが大好きな「汽車」をかたどったルーピングの「あそび道具」</h4>
					<p class="lottery-point__ex">色とりどりのビーズをワイヤーにそって動かすルーピングの「あそび道具」です。汽車の形をしているから、ビーズを動かすお子さまはもう機関士さん気分。くるくる回ったり、カーブを滑り落ちるカラフルなビーズの動きに夢中になること間違いなしです。左右対称の作りになっているため、２人で向き合って同じ動作をしてあそぶこともできます。</p>

					<h4 class="lottery-point__ttl">お子さまの発育を促す優れた知育玩具</h4>
					<p class="lottery-point__ex">小さなお子さまにとって、目で見たものを正確に手や指で動かすことはとても大変なこと。これは協応運動と呼ばれるもので、ひも通しやルーピングあそびのように目と手を使ったあそびの中で徐々に養われていきます。ボーネルンドのルーピング 汽車は、楽しみながらこの協応運動を培うことができる優れた知育玩具です。</p>
				</div>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">


					<p class="smile-comment__ex">カラフルで見た目もかわいらしいこのルーピング、実は小さな<strong>赤ちゃんが手を伸ばして掴みやすいようにとの配慮から手前の青いワイヤーのビーズほど大きく作られている</strong>んですよ♪お子さまのことを考えつくして作られたルーピング 汽車はクリスマスプレゼントにも最適ですね(^^)<sup>※</sup></p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>本体サイズ</dt>
							<dd>48.0×18.5×36.5cm</dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>2.3kg</dd>
						</dl>
						<dl>
							<dt>材質</dt>
							<!--dd class="u-spec-desc">スチール、ぶな</dd-->
							<dd>スチール、ぶな</dd>
						</dl>
						<dl>
							<dt>対象年齢</dt>
							<dd>2歳頃～</dd>
						</dl>
						</div>
					</div>
					<small class="u-small">
						※写真はイメージです。
						<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。
						<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2017年12月23日（土）までにお手元に届くよう、賞品を発送いたします。
					</small>
				</div>

				<?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>

			</section>

			<aside class="main__item">
				<h3 class="u-ttl__l">よくあるご質問</h3>
				<?php include ($inc_path."/lib/inc/page/_smile/smile-promotion.php") ?>
			</aside>

			<nav class="main__snav snav">
				<?php include ($inc_path."/lib/inc/page/_smile/u-smile-snav.php") ?>
			</nav>

		</article>
	</main>

	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
