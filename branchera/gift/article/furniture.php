<?php
//base
include ("../../function.php");
$content = get_id_data('3004');
$pageTtl = $content['title'];

//meta
$metaTtl = '優待サービス「'.$pageTtl.'」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
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
		$panAry[] = array("/gift/" ,"優待サービス");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<?php
		include ($inc_path."/lib/inc/page/_gift/__main-header.php");
		?>

		<div class="main__wrapper">
			<section class="main__item">
				<h3 class="u-ttl__m">特別ご優待提携メーカー一覧</h3>
				<div class="product-img__row">
					<figure class="product-img__item">
						<a href="https://www.keyuca.com/" target="_blank">
							<img
							data-src="../../lib/img/smile/article/list-keyuca.png"
							data-retina="../../lib/img/smile/article/list-keyuca@2x.png"
							alt="moda en casa-特別ご優待「20%」"
							width="267"
							height="81"
							style="max-width:267px;">
						</a>
						<figcaption>インテリアショップ「ＫＥＹＵＣＡ」(ケユカ)オリジナルデザインのシンプルで機能的な家具を特別ご優待にてご案内させていただきます。</figcaption>
					</figure>
					<figure class="product-img__item">
						<a href="http://www.hukla.co.jp/" target="_blank">
							<img
							data-src="../../lib/img/smile/article/list-hukla.png"
							data-retina="../../lib/img/smile/article/list-hukla@2x.png"
							alt="HUKLA-特別ご優待"
							width="255"
							height="81"
							style="max-width:255px;">
						</a>
						<figcaption>上質な暮らしの空間をテーマに、クオリティーにこだわったものづくりをすすめています。</figcaption>
					</figure>
					<figure class="product-img__item">
						<a href="http://www.karimoku.co.jp/" target="_blank">
							<img
							data-src="../../lib/img/smile/article/list-karimoku.png"
							data-retina="../../lib/img/smile/article/list-karimoku@2x.png"
							alt="KARIMOKU-特別ご優待"
							width="267"
							height="81"
							style="max-width:267px;"
							>
						</a>
						<figcaption>100歳の木を使うなら、その年輪にふさわしい家具をつくりたい。</figcaption>
					</figure>
				</div>

				<h5 class="u-ttl__m">その他、30種以上のブランドを取扱いしております。<br><small class="u-small">※こちらに記載のないメーカーブランドの取扱いもございますので、ぜひお問い合わせください。</small></h5>

				<img
				data-src="../../lib/img/gift/furniture/list-others.png"
				data-retina="../../lib/img/gift/furniture/list-others@2x.png"
				alt="その他のブランド"
				class="u-img__max mb3">

				<p>ブランシエラクラブでは、会員さま特典として「ブランド家具ご購入優待割引」をご利用いただけるだけでなく、<a href="/branchera/smile/article/hit-furniture.php" class="a-arrow">住まいレージによるスマイル交換サービス</a>もご提供しています。</p>
			</section>
		</div>

		<div class="main__wrapper">
			<section class="main__item mb0" id="flow">
				<h2 class="u-ttl__l">お申し込み方法</h2>

				<div class="u-terms">

					<div class="u-terms__row mb2">
						<h4 class="u-terms__ttl">関西圏・東海圏以外のお客さまはこちら<br>コンシェルジュデスクへお電話ください。</h4>
						<div class="u-terms__inner">
							<div class="u-terms__tel">
								<a href="tel:0120-875-713">0120-875-713</a>
							</div>
							<small class="u-small">※受付 / 9：00～17：30（定休日 / 水・土・日・祝日・国民の休日・夏季・冬季休暇）</small>
						</div>
					</div>

					<div class="u-terms__row mb2">
						<h4 class="u-terms__ttl">
							関西圏・東海圏のお客さまはこちら
							<br><small>※対象範囲：大阪府・京都府・兵庫県・奈良県・滋賀県・和歌山県・愛知県・三重県</small>
						</h4>
						<div class="u-terms__inner">
							<p>実際に家具を見て検討をご希望の方は、下記ショールームにご予約ください。</p>
							<ul class="u-list__ul">
								<li>
									<div>
										「IDC大塚家具」大阪南港ショールーム<br>TEL：06-6612-4321　法人担当まで　/　Adrs：大阪市住之江区南港北2-1-10　ATC ITM棟
										<br><small class="u-small">受付/10:30～18:30　※南港ショールーム以外をご希望の方はその旨をお伝えください。</small>
									</div>
								</li>
								<li><div>「＋CASA（プラスカーサ）」<br>Tel:077-553-5500　/　Fax:077-553-5039　/　Adrs:滋賀県栗東市上鈎69-2
									<br><small>※受付 / 11:00～19：00（平日）、10:00～19：00（土日祝）</small>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<h3 class="u-ttl__m">お申し込みの流れ</h3>
			<ol class="u-list__ol">
				<li><a href="https://haseko.flpjp.com/?seniurl=%2FmemDisplay" target="_blank" class="u-icon">マイページ</a>から、お客さまの「長谷工ID」をご確認ください。</li>
				<li>担上記のコンシェルジュデスクへお電話ください。長谷工インテックの担当者が応対いたします。</li>
				<li>担当者に、「長谷工ID」をお伝えいただいたのち、担当者の案内に沿って当サービスをご利用ください。</li>
			</ol>

		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
