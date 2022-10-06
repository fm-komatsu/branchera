<?php
//base
include ("../../function.php");
$content = get_id_data('9018');
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
		$smile_id_production = "77";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>

		<section class="lottery-banner">
			<div class="lottery-banner__row">
				<img
				data-src="../../lib/img/smile/article/lottery-1712.png"
				data-retina="../../lib/img/smile/article/lottery-1712@2x.png"
				alt="抽選で10名さまに当たる！【レコルト】ワッフルボウルメーカー"
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
						data-src="../../lib/img/smile/article/lottery-201712-img1.png"
						data-retina="../../lib/img/smile/article/lottery-201712-img1@2x.png"
						alt="【レコルト】ワッフルボウルメーカー"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-201712-img2.png"
						data-retina="../../lib/img/smile/article/lottery-201712-img2@2x.png"
						alt="【レコルト】ワッフルボウルメーカー"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-201712-img3.png"
						data-retina="../../lib/img/smile/article/lottery-201712-img3@2x.png"
						alt="【レコルト】ワッフルボウルメーカー"
						class="u-img__max">
					</figure>
				</div>
				<!--p class="u-small">※賞品にビールはついておりません。</p-->
			</div>

			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">まるごと食べられるワッフルボウルがご家庭でお手軽に作れます</h4>
					<p class="lottery-point__ex">ホットケーキミックスなどの生地や材料を、おいしくまるごと食べられる器の形に焼くことができます。作り方はとってもお手軽。本体を予熱したあと、お好きな生地や材料を流し入れてカバーを閉めて待つだけ。ご家庭で気軽にワッフルボウルをお楽しみいただけます。</p>

					<h4 class="lottery-point__ttl">おやつはもちろん、朝食やランチなどの食事でも大活躍</h4>
					<p class="lottery-point__ex">おやつにピッタリな甘い生地はもちろん、ご飯や焼きそばなどの食材を使って食べられる器を作ることもできます。例えば焼きそばを使った焼きそばボウルの上に五目あんかけをのせれば“かた焼きそば風”のおかずに早変わり。ランチやディナーなどふだんの食事でも大活躍します。</p>
				</div>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">


					<p class="smile-comment__ex">付属の専用レシピブックには基本のワッフルボウルの作り方はもちろん、白玉を生地にした白玉ワッフルや生地にカレー粉をいれたカレーボウルなど、<strong>思わず試してみたくなるオリジナルレシピを綺麗な写真とともに多数掲載</strong>しています！ぜひご家庭でお試しくださいね♪</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>セット内容</dt>
							<dd>本体、専用レシピブック</dd>
						</dl>
						<dl>
							<dt>本体サイズ</dt>
							<dd>約 幅20.0 × 奥行22.0 × 高さ14.0cm</dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>約 1.45kg</dd>
						</dl>
						<dl>
							<dt>消費電力</dt>
							<dd>750W</dd>
						</dl>
						<dl>
							<dt>材質</dt>
							<!--dd class="u-spec-desc">スチール、ぶな</dd-->
							<dd>本体：フェノール樹脂、プレート：アルミダイキャスト（ノンスティック加工）</dd>
						</dl>
						</div>
					</div>
					<small class="u-small">
						※写真はイメージです。
						<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。
						<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2018年1月中旬頃お手元に届くよう、賞品を発送いたします。
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
