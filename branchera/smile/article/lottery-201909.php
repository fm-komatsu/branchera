<?php
//base
include ("../../function.php");
$content = get_id_data('9039');
$pageTtl = $content['title'];
$footerTtl = '9月の抽選賞品<br>【バルミューダ】BALMUDA The Gohan<br>抽選で2名さまに当たります！';

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
		$smile_month = "1909";
		$smile_num = "100";//必要スマイル数
		$smile_id_test = "134";//テストFLP用リンクナンバー
		$smile_id_production = "134";//本番FLP用リンクナンバー
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
					<h4 class="lottery-point__ttl">二重の釜で、かまどや土鍋で炊いたような美味しさに</h4>
					<p class="lottery-point__ex">本商品の特徴はなんといっても、<strong>内釜に水とお米、外釜に水を入れて炊く特殊な二重釜構造</strong>！ゆるやかに加熱していくことで、お米の表面を傷つけることなく、やさしく炊き上げてくれます。<br>蒸気の力で炊き上げられたお米は、粒立ちやほぐれがよく、口に入れると豊かな香りとうまみが広がります。手軽な電気炊飯器にもかかわらず、<strong>まるでかまどや土鍋で炊いたような仕上がり</strong>です♪</p>
					<h4 class="lottery-point__ttl">お料理の幅が広がる、5つの炊飯モード搭載！</h4>
					<p class="lottery-point__ex">基本の白米モードのほか、32～39分と短時間で炊飯できる白米早炊モード、浸水いらずの玄米モード、旬の具材とともに炊き上げる炊込モード、ベタ付きなくさらっと仕上げるおかゆモードと、<strong>全部で5つの炊飯モード</strong>が利用できます。モードの変更はボタンを押すだけのワンタッチ式。<strong>面倒な温度設定などは一切なしに、簡単にいろいろな炊き方を楽しめますよ♪</strong></p>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">バルミューダで炊いたご飯は<strong>粒立ちがキープされる</strong>ので、べたつくこともなく、おにぎりや酢飯・卵かけご飯などにしても、お米の食感を楽しめます！<br>そして、「グッドデザイン・ベスト100」など、<strong>国際的に権威のあるデザイン賞を受賞したスタイリッシュで美しいデザイン</strong>も魅力的♪しかも、<strong>簡単に部品を取り外せるのでお手入れがラクラク！</strong>デザイン性と実用性を兼ね備えた逸品です。<br>新米が出回る秋。長谷工あんしんデリが丹精込めて育てた、上質なコシヒカリ「たなかみ米」の新米を、ぜひこのバルミューダで炊いてみてください！</p>
				</div>
			</div>
			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>型番</dt>
							<dd>K03A-BK</dd>
						</dl>
						<dl>
							<dt>カラー</dt>
							<dd>ブラック</dd>
						</dl>
						<dl>
							<dt>総重量</dt>
							<dd>約4kg</dd>
						</dl>
						<dl>
							<dt>サイズ</dt>
							<dd>幅 275mm × 奥行き 251mm × 高さ 194mm</dd>
						</dl>
						<dl>
							<dt>電源</dt>
							<dd>AC100V 50Hz/60Hz </dd>
						</dl>
						<dl>
							<dt>消費電力</dt>
							<dd>670W</dd>
						</dl>
						<dl>
							<dt>電源コード長さ</dt>
							<dd>1.2m</dd>
						</dl>
						<dl>
							<dt>タイマー</dt>
							<dd>あり（時計式 前回の設定を記憶）</dd>
						</dl>
						<dl>
							<dt>保温機能</dt>
							<dd>なし</dd>
						</dl>
						<dl>
							<dt>時計表示</dt>
							<dd>あり</dd>
						</dl>
						<dl>
							<dt>保証期間</dt>
							<dd>お買い上げ日から1年間</dd>
						</dl>
						<dl>
							<dt>セット内容</dt>
							<dd>本体、水計量カップ、米計量カップ、取扱説明書（保証書付）</dd>
						</dl>
					</div>
				</div>
				<small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2019年10月中旬頃お手元に届くよう、賞品を発送いたします。
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
				<P>■10月の抽選賞品は、2019年10月1日（火）公開予定です。</P>
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
