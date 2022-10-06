
<?php
//base
include ("../../function.php");
$content = get_id_data('9027');
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
		$smile_id_test = "106";//テストFLP用リンクナンバー
		$smile_id_production = "106";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>

		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img
				data-src="<?php echo($img_url)?>/smile/article/lottery-1809.png"
				data-retina="<?php echo($img_url)?>/smile/article/lottery-1809@2x.png"
				alt="<?php echo($pageTtl)?>"
				style="max-width:752px;"
				class="u-img__max"
				>
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img
				data-src="<?php echo($img_url)?>/smile/article/lottery-1809-sp.png"
				data-retina="<?php echo($img_url)?>/smile/article/lottery-1809-sp@2x.png"
				alt="<?php echo($pageTtl)?>"
				style="max-width:1080px;"
				class="u-img__max"
				>
			</div>
		</section>

		<section class="main__wrapper">

			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item_center">
						<img
						data-src="<?php echo($img_url)?>/smile/article/lottery-1809_image01.png"
						data-retina="<?php echo($img_url)?>/smile/article/lottery-1809_image01@2x.png"
						alt="【ブルーノ】トースターグリル"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_center">
						<img
						data-src="<?php echo($img_url)?>/smile/article/lottery-1809_image02.png"
						data-retina="<?php echo($img_url)?>/smile/article/lottery-1809_image02@2x.png"
						alt="焼く・あぶる・温めるが、この一台で調理できるトップオープン式のトースターグリル"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_center">
						<img
						data-src="<?php echo($img_url)?>/smile/article/lottery-1809_image03.png"
						data-retina="<?php echo($img_url)?>/smile/article/lottery-1809_image03@2x.png"
						alt="【ブルーノ】トースターグリル"
						class="u-img__max">
					</figure>
				</div>
			</div>

			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">短時間で美味しく調理</h4>
					<p class="lottery-point__ex">トースターとグリルが一体化しているので、トーストはもちろん、焼肉などのメイン料理からパイなどのスイーツまで、幅広い料理をつくることができます。高温で焼きあげることで、短時間で作れて美味しさもアップ！また、フタが真上に開くトップオープン式なので、食材を取り出しやすく、そのまま食卓に運んでみんなでシェアすることも可能です。</p>

					<h4 class="lottery-point__ttl">カンタンお手入れ！清潔に保てる</h4>
					<p class="lottery-point__ex">フタが真上に大きく開き、隅々まで簡単に拭くことができるのでお手入れがしやすいです。パンくず・水受けトレイに水を張って使用すると、調理時に出る煙や油汚れの付着を抑えることが可能！本体以外は、水洗いできるので、使ったあともキレイに掃除することができます。</p>
				</div>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">ホーロー風のオシャレなデザインが、特徴的なトースターグリル。ブランシエラマガジン「うちのご飯は世界イチ」の第3話「ひき肉とブロッコリーのマカロニグラタン」でも使用しているキッチングッズです。キッチンカウンターにも置けるコンパクトなサイズ感も、人気のひとつ。</p>
						<figure class="u-float__right">
							<a href="<?php echo $base_url; ?>/magazine/article/recipe03.php" >
								<img
								data-src="<?php echo($img_url)?>/smile/article/lottery-1809_macaroni-gratin.png"
								data-retina="<?php echo($img_url)?>/smile/article/lottery-1809_macaroni-gratin@2x.png"
								alt="【ブルーノ】トースターグリルなら「ひき肉とブロッコリーのマカロニグラタン」も手軽に作れます。"
								style="max-width:150px;"
								class="u-img__max">
							</a>
						</figure>
						<p>さらに、届いたその日からいろいろな料理にチャレンジできる、専用レシピリーフ付き！普段使いから、室内バーベキューまでできちゃうトースターグリルを使ってみてはいかがでしょうか？<br class="u-clearfix"><a href="<?php echo $base_url; ?>/magazine/article/recipe03.php" class="u-icon" style="font-feature-settings: 'palt' 1;">「ひき肉とブロッコリーのマカロニグラタン」の詳しいレシピはコチラ</a>
					</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>本体サイズ</dt>
							<dd>W405mm×H221mm×D238mm<br><small class="u-small">※横幅は持ち手部分を含む</small></dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>3,900g<br><small class="u-small">※重量はベイキングトレイ含む</small></dd>
						</dl>
						<dl>
							<dt>機能</dt>
							<dd>30分計タイマー・上下ヒーターON/OFF 切り替え・焼き網取はずし可<br>サーモスタット・温度ヒューズ192℃
							</dd>
						</dl>
						<dl>
							<dt>電源</dt>
							<dd>AC100V（消費電力：1,050W）</dd>
						</dl>
						<dl>
							<dt>付属品</dt>
							<dd>ベイキングトレイ・専用レシピリーフ</dd>
						</dl>
						</div>
					</div>
					<small class="u-small">
						※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2018年10月中旬頃お手元に届くよう、賞品を発送いたします。
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
