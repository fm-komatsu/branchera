<?php
//base
include ("../../function.php");
$content = get_id_data('9037');
$pageTtl = $content['title'];
$footerTtl = '7月の抽選賞品<br>【ロゴス】ナバホ Tepee 400';

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
		$smile_id_test = "130";//テストFLP用リンクナンバー
		$smile_id_production = "130";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>
		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1907.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1907@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:737px;" class="u-img__max">
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1907-sp.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1907-sp@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:534px;" class="u-img__max">
			</div>
		</section>
		<section class="main__wrapper">
			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item_center">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1907_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1907_image01@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_center">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1907_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1907_image02@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_center">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1907_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1907_image03@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">組み立てカンタン！おしゃれで使いやすいテント</h4>
					<p class="lottery-point__ex">創業90年を超える老舗アウトドアブランド・ロゴスの人気商品。<strong>ワンポールのシンプル構造</strong>で、はじめての方でも簡単に組み立てることができます。そしてもうひとつの特長が、<strong>小さくたためてコンパクト収納が可能</strong>なこと。付属の肩掛けバッグに入れれば、持ち運びもラクラク♪キャンプはもちろん、野外フェスなどにもおすすめです。アメリカのインディアン・ナバホ族伝統のカラフルな模様“ナバホ柄”がおしゃれで、キャンプ場でも目立つこと間違いなし！</p>
					<h4 class="lottery-point__ttl">フレームは航空機にも使用されている強靭素材を採用</h4>
					<p class="lottery-point__ex">実用性だけでなく、高いクオリティも兼ね備えています。テントを支えるフレームには、なんと、<strong>航空機にも使用されている「7075超々ジュラルミン」を採用</strong>！<strong>軽量かつ強靭な素材</strong>なので、安全性もあります。<br>そして、暑～い夏場の使用で気になるのが、テント内の過ごしやすさ。本商品は<strong>防水・撥水加工のほか、UV-CUT加工もされており、開閉可能な換気窓も付いています</strong>。湿度・温度の調整がしやすいので、快適に過ごすことができますよ♪</p>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">使いやすさと安全性を備えた、アウトドアアイテムを提供するロゴス。「初めてキャンプに行く！」というキャンプ初心者さんや、お子さまがいるご家族には、慣れないテント設営は不安ですよね。<strong>丈夫で簡単に組み立て可能、収納もすぐにできる</strong>こちらの商品なら、安心してキャンプを楽しむことができますよ！また、約幅400×奥行345×高さ235cmの広々サイズなので、背が高い方も、のびのびゆったりと過ごせます♪手軽にアウトドアを楽しみたいという方は、ぜひこの機会に応募してくださいね！</p>
				</div>
			</div>
			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>商品コード</dt>
							<dd>No.71806500</dd>
						</dl>
						<dl>
							<dt>総重量</dt>
							<dd>（約）5.8kg</dd>
						</dl>
						<dl>
							<dt>組み立てサイズ</dt>
							<dd>（約）幅400×奥行345×高さ235cm</dd>
						</dl>
						<dl>
							<dt>定員</dt>
							<dd>大人4人まで</dd>
						</dl>
						<dl>
							<dt>主素材</dt>
							<dd>［フレーム］7075超々ジュラルミン<br>［フライシート］難燃性ポリエステルタフタ（耐水圧1600mm、UV-CUT加工）<br>［インナーシート］ポリエステルタフタ（ブリーザブル撥水加工）<br>［フロアシート］ポリエステルタフタ（耐水圧3000mm）<br>［メッシュ］ポリエステル</dd>
						</dl>
					</div>
				</div>
				<small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2019年8月中旬頃お手元に届くよう、賞品を発送いたします。
				</small>
			</div>
			<?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>
			<div class="mt2">
				<P>■8月の抽選賞品は、2019年8月1日（木）公開予定です。</P>
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
