<?php
//base
include ("../../function.php");
$content = get_id_data('9038');
$pageTtl = $content['title'];
$footerTtl = '8月の抽選賞品<br>【ヤーマン】アセチノヘッドスパリフト';

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
		$smile_month = "1908";
		$smile_num = "100";//必要スマイル数
		$smile_id_test = "133";//テストFLP用リンクナンバー
		$smile_id_production = "133";//本番FLP用リンクナンバー
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
					<h4 class="lottery-point__ttl">心地よい動きで、頭皮と顔をスッキリ＆リフトケア！</h4>
					<p class="lottery-point__ex">日常のストレスで固まりがちな頭皮。頭皮が固まると、髪の若々しさが失われるだけではなく、もたついた印象の顔の原因になります。そんな頭皮をやわらかくしてくれるのが、このアセチノヘッドスパリフト。電源を入れて<strong>直接頭皮に当てるだけ</strong>。ヘッドスパサロンの技術を再現した心地よい動きで、頭皮をググッとつかみ上げてやわらかくします。<br>また、フェイスケア用のアタッチメントに付け替えれば、<strong>フェイスケアも可能</strong>。頭皮と顔、両方にアプローチすることで、一気にスッキリ＆リフトケアできますよ！</p>
					<h4 class="lottery-point__ttl">防水仕様でシャンプーにも使える！</h4>
					<p class="lottery-point__ex">そして、うれしい<strong>防水仕様</strong>！シャンプー時にも、お風呂に浸かっている間にも使えます。シリコンブラシが髪をかき分け、指先でタップするような3D振動で毛穴の汚れを揉み出します。<br>さまざまな用途に役立つこの商品を使って、美と癒しを手に入れましょう♪</p>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">暑さからくる疲れ、頭皮のベタつきや皮脂詰まりが気になる夏に大活躍のこの商品。<br>しっかりと揉み出しができるので、男性にもおすすめです！<br>また、頭皮も顔もケアできるのがうれしいポイント。<br><strong>約287gと軽量＆手のひらサイズ</strong>なので、持ち運びしやすいのも特徴の1つ。そしてシックなゴールド＆ホワイトカラーの本体は、年齢性別にかかわらず使いやすいデザインです。ご自宅でのリラックスタイムだけではなく、職場や外出先でリフレッシュしたいときにもお手軽に使っていただけます♪ぜひこの機会にお試しください！</p>
				</div>
			</div>
			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>型番</dt>
							<dd>IB-27W</dd>
						</dl>
						<dl>
							<dt>カラー</dt>
							<dd>ゴールド</dd>
						</dl>
						<dl>
							<dt>総重量</dt>
							<dd>約287g（アタッチメントは除く）</dd>
						</dl>
						<dl>
							<dt>サイズ</dt>
							<dd>約97×103×105mm（アタッチメントは除く）</dd>
						</dl>
						<dl>
							<dt>充電時間</dt>
							<dd>約3時間で約20分使用可能</dd>
						</dl>
						<dl>
							<dt>連続使用時間</dt>
							<dd>5分でオートオフ</dd>
						</dl>
						<dl>
							<dt>防水レベル</dt>
							<dd>IPX7</dd>
						</dl>
						<dl>
							<dt>セット内容</dt>
							<dd>本体、ヘッド用アタッチメント、フェイス用アタッチメント、充電台</dd>
						</dl>
					</div>
				</div>
				<small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2019年9月中旬頃お手元に届くよう、賞品を発送いたします。
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
				<P>■9月の抽選賞品は、2019年9月2日(月)公開予定です。</P>
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
