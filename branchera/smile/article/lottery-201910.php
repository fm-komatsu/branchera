<?php
//base
include ("../../function.php");
$content = get_id_data('9040');
$pageTtl = $content['title'];
$footerTtl = '10月の抽選賞品<br>【長谷工あんしんデリ】たなかみ米 3.6kg<br>抽選で20名さまに当たります！';

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $pageTtl.'が当たる、ブランシエラクラブの抽選ページです。抽選賞品は'.$content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article lottery";

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
		$smile_month = "1910";
		$smile_num = "100";//必要スマイル数
		$smile_id_test = "137";//テストFLP用リンクナンバー
		$smile_id_production = "137";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>
		<section class="lottery-banner">
			<?php include ($inc_path."/lib/inc/page/_smile/__lottery-main-v.php"); ?>
		</section>
		<section class="main__wrapper">
			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item_center">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_month?>_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_month?>_image01@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_center">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_month?>_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_month?>_image02@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_center">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_month?>_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_month?>_image03@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">水・土・気候の３つの条件がそろう「田上」</h4>
					<p class="lottery-point__ex">滋賀県、琵琶湖の南側に位置する「田上（たなかみ）」は、1300年前に天智天皇の命を受け開墾されたといわれています。大戸川の豊かな水源、かこう岩系の土、そして盆地が作る寒暖差のある気候と、お米作りに最適な「土・水・気候」の３つの条件がそろっている田上。この田上で作られるお米はとても美味しく、市場にあまり出回らないことから、「まぼろしのお米」とも呼ばれていました。口の中でふわっと広がる甘みと、ほどよい粘り気のある食感が、このお米の特徴です。</p>
					<h4 class="lottery-point__ttl">長谷工が育てる安心・安全なお米</h4>
					<p class="lottery-point__ex">「たなかみ米」は、長谷工あんしんデリのスタッフが、土作りから田植え、稲刈り、さらに精米から発送まですべてを自社で対応。安心・安全で美味しいお米作りを徹底しています。さらに、「できるだけ農薬を使わない」「琵琶湖を汚さない」といった、環境に配慮した栽培方法を行なっているのもたなかみ米の特徴。この取り組みによって、農作物にも環境にもやさしい「環境こだわり農産物」の認証を滋賀県から受けています。<br>環境にも人にもやさしい農法によって作られた、美味しいたなかみ米。ぜひこの機会に味わってみてください。</strong></p>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">丹精を込めて育てられたお米が、今年も収穫されました！こまめな管理でお米の乾燥度合いを調整し、通常は水分の含有率15％以下のところ、16％の「プレミアム仕上げ」でお届けします。この1％のわずかな差で、新米の食感とうまみが格段にアップします。令和最初のたなかみ米。ぜひご賞味ください！</p>
					<p>「新米の炊き方の基本」の詳しいレシピは<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic28.php" class="u-icon" style="font-feature-settings: 'palt' 1;">コチラ</a>
				</div>
			</div>
			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>サイズ</dt>
							<dd>12個入り<br><small class="u-small">※1個 W70㎜×H70㎜×D60㎜ （真空パック仕様）</small></dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>3.6kg<br><small class="u-small">※1個 300g （約2合）</small></dd>
						</dl>
						<dl>
							<dt>その他</dt>
							<dd>化粧箱に入れてお届けします。<br>化粧箱 概略寸法 W170㎜×H230㎜×D140㎜<br>化粧箱を含めた重量 約4㎏</dd>
						</dl>
					</div>
				</div>
				<small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2019年11月頃お手元に届くよう、賞品を発送いたします。
				</small>
			</div>
			<div class="mb4 mb2_sp">
				<?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>
				<?php if (!$ssoFlag == 1){ ?>
				<small class="u-small mt1">※応募には長谷工IDが必要です。まだお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"
					class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。<br>※新規登録で1,000スマイルをプレゼントしています。</small>
				<?php }; ?>
			</div>
			<div class="mt2">
				<P>■11月の抽選賞品は、2019年11月1日（金）公開予定です。</P>
			</div>
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
