
<?php
//base
include ("../../function.php");
$content = get_id_data('9024');
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
		$smile_id_test = "93";//テストFLP用リンクナンバー
		$smile_id_production = "93";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>

		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img
				data-src="../../lib/img/smile/article/lottery-1806.png"
				data-retina="../../lib/img/smile/article/lottery-1806@2x.png"
				alt="抽選で10名さまに当たる！【ビクセン】双眼鏡 コールマン H8X25"
				style="max-width:752px;"
				class="u-img__max"
				>
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img
				data-src="../../lib/img/smile/article/lottery-1806-sp.png"
				data-retina="../../lib/img/smile/article/lottery-1806-sp@2x.png"
				alt="抽選で30名さまに当たる！【エド・インター】脳活キューブ"
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
						data-src="../../lib/img/smile/article/lottery-1806_image01.png"
						data-retina="../../lib/img/smile/article/lottery-1806_image01@2x.png"
						alt="【ビクセン】双眼鏡 コールマン H8X25"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-1806_image02.png"
						data-retina="../../lib/img/smile/article/lottery-1806_image02@2x.png"
						alt="【ビクセン】双眼鏡 コールマン H8X25 キャンプ用品メーカーで有名なコールマン社とのコラボ商品"
						class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img
						data-src="../../lib/img/smile/article/lottery-1806_image03.png"
						data-retina="../../lib/img/smile/article/lottery-1806_image03@2x.png"
						alt="【ビクセン】双眼鏡 コールマン H8X25 自然風景や星空などが楽しめる8倍率の双眼鏡"
						class="u-img__max">
					</figure>
				</div>
			</div>

			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">自然風景や星空などが楽しめる8倍率の双眼鏡</h4>
					<p class="lottery-point__ex">双眼鏡のスタンダードともいえる8倍率なので、はじめての1台にピッタリ。屋内のコンサートやスポーツ観戦、アウトドアでもご活用いただけます。また、光のロスを抑えるコーティングをレンズ全面に施しているので、より明るく鮮明に見ることができます。さらに、ハイアイポイント設計といって、双眼鏡と目を近づけなくても広い視野を見ることができるため、メガネをかけたままでも、ご使用いただけます。長時間の使用でも疲れにくいというメリットも。</p>

					<h4 class="lottery-point__ttl">キャンプ用品メーカーで有名なコールマン社とのコラボ商品</h4>
					<p class="lottery-point__ex">天体望遠鏡の国内トップシェアを誇るビクセンと遊び心を提案するコールマン社とのコラボ商品。シンプルなツートンカラーのデザインがアウトドアシーンをよりスタイリッシュに盛り上げます。本体は耐久性に優れたアルミダイキャストボディなので、キャンプシーンやアウトドアシーンで大活躍！ソフトケースと首から掛けるネックストラップ付きのため、持ち運びにも優れています。</p>
				</div>
			</div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">キャンプ用品メーカーのコールマン社とのコラボ商品というだけあって、ちょうどこれからの季節にもピッタリなアウトドアで楽しめる機能が満載！たとえば、星空の観察や、暗い森の中でもしっかり見ることができます。普段の生活でお目にかかれない動物や自然をぜひ満喫してください。重さ300g、高さ12㎝程度なので、お子さまでも軽々とご利用いただけます。</p>
				</div>
			</div>

			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>倍率</dt>
							<dd>8倍</dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>300g</dd>
						</dl>
						<dl>
							<dt>付属機能・特徴</dt>
							<dd>フーリーマルチコート・ハイアイポイント設計</dd>
						</dl>
						<dl>
							<dt>付属品</dt>
							<dd>ネックストラップ・ソフトケース</dd>
						</dl>
						<dl>
							<dt>カラー</dt>
							<dd>ブルー</dd>
						</dl>
						</div>
					</div>
					<small class="u-small">
						※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2018年7月中旬頃お手元に届くよう、賞品を発送いたします。
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
