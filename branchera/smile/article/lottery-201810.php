
<?php
//base
include ("../../function.php");
$content = get_id_data('9028');
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
		$smile_id_test = "109";//テストFLP用リンクナンバー
		$smile_id_production = "109";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>

		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img
				data-src="<?php echo($img_url)?>/smile/article/lottery-1810.png"
				data-retina="<?php echo($img_url)?>/smile/article/lottery-1810@2x.png"
				alt="<?php echo($pageTtl)?>"
				style="max-width:752px;"
				class="u-img__max"
				>
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img
				data-src="<?php echo($img_url)?>/smile/article/lottery-1810-sp.png"
				data-retina="<?php echo($img_url)?>/smile/article/lottery-1810-sp@2x.png"
				alt="<?php echo($pageTtl)?>"
				style="max-width:1080px;"
				class="u-img__max"
				>
			</div>
		</section>

		<section class="main__wrapper">

			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
						data-src="<?php echo($img_url)?>/smile/article/lottery-1810_image01.png"
						data-retina="<?php echo($img_url)?>/smile/article/lottery-1810_image01@2x.png"
						alt="【長谷工あんしんデリ】たなかみのお米"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="<?php echo($img_url)?>/smile/article/lottery-1810_image02.png"
						data-retina="<?php echo($img_url)?>/smile/article/lottery-1810_image02@2x.png"
						alt="【長谷工あんしんデリ】たなかみのお米"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="<?php echo($img_url)?>/smile/article/lottery-1810_image03.png"
						data-retina="<?php echo($img_url)?>/smile/article/lottery-1810_image03@2x.png"
						alt="【長谷工あんしんデリ】たなかみのお米"
						class="u-img__max">
					</figure>
				</div>
			</div>

			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">水・土・気候の３つの条件が揃う「田上」</h4>
					<p class="lottery-point__ex">滋賀県、琵琶湖の南側に位置する「田上（たなかみ）」は、1300年前に天智天皇の命を受け開墾されたと言われています。大戸川の豊かな水源、かこう岩系の土、そして盆地がつくる寒暖差のある気候が特徴的な土地です。この「土・水・気候」の３つの条件が、お米づくりに適していることもあり、田上のお米は古くから食されていました。そして、市場に出回る量が少なかったことから、「まぼろしのお米」とも呼ばれていました。口の中でふわっと広がる甘みと、ほどよい粘り気のある食感は、この土地ならではです。</p>

					<h4 class="lottery-point__ttl">長谷工が育てる安心・安全なお米</h4>
					<p class="lottery-point__ex">「たなかみ米」は、長谷工あんしんデリのスタッフが、土づくりから田植え、稲刈り、さらに精米から発送まですべてを自社で対応しています。安心・安全なお米を届けるために、作り方にもいろいろなこだわりがあります。たとえば「できるだけ農薬を使わない」「琵琶湖を汚さない」など、環境にも優しいお米作りを目指しています。そんな努力もあり、「環境こだわり農産物」、及び「エコファーマー」の滋賀県知事の認証を取得！また、農林水産省が安心安全な農産物栽培のために定めたガイドラインにも準拠しており、安心してお召し上がりいただけます。</p>
				</div>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">丹精を込めて育てられたお米が、今年も収穫されました！こまめな管理でお米の乾燥度合いを調整し、通常は水分の含有率15％以下のところ、16％の「プレミアム仕上げ」でお届けします。この1％のわずかな差で、新米の食感と旨みが格段にアップします。“生産者“だからこそ実現した、平成最後の「プレミアム仕上げ」のたなかみ米をぜひ堪能ください</p>
						<p>「新米の炊き方の基本」の詳しいレシピは<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic28.php" class="u-icon" style="font-feature-settings: 'palt' 1;">コチラ</a>
					</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>本体サイズ</dt>
							<dd>12個入り<br><small class="u-small">※1個 W700㎜×H700㎜×D600㎜ （真空パック仕様）</small></dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>約3.6kg<br><small class="u-small">※1個 300g （約2合）</small></dd>
						</dl>
						<dl>
							<dt>その他</dt>
							<dd>化粧箱に入れてお届けします。<br>化粧箱 概略寸法 W1600㎜×H2300㎜×D1400㎜<br>化粧箱を含めた重量 約4㎏</dd>
						</dl>
					</div>
				</div>
				<small class="u-small">
					※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2018年11月中旬頃お手元に届くよう、賞品を発送いたします。
				</small>
			</div>

				<?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>

		</section>

		<aside class="main__item">
			<h3 class="u-ttl__l">よくあるご質問</h3>
			<ol class="u-list__ol">
				<?php include ($inc_path."/lib/inc/page/_smile/smile-faq.php") ?>
			</ol>
		</aside>

		<nav class="main__snav snav">
			<?php include ($inc_path."/lib/inc/page/_smile/u-smile-snav.php") ?>
		</nav>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
