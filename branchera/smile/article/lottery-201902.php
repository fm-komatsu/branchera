<?php
//base
include ("../../function.php");
$content = get_id_data('9032');
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
		$smile_id_test = "119";//テストFLP用リンクナンバー
		$smile_id_production = "119";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>
		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1902.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1902@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:737px;" class="u-img__max">
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1902-sp.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1902-sp@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:534px;" class="u-img__max">
			</div>
		</section>
		<section class="main__wrapper">
			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item_end">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1902_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1902_image01@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_end">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1902_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1902_image02@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_end u-fig">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1902_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1902_image03@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
						 <figcaption class="u-fig__cap_pc">※実際の色はレッドになります。</figcaption>
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">出したままでも、お部屋に馴染むおしゃれなデザイン</h4>
					<p class="lottery-point__ex">「ちょうどいい」をブランドコンセプトにおいた、日本発の家電・雑貨ブランド「プラスマイナスゼロ」。このコードレスクリーナーも、掃除機では珍しい<strong>マットな質感と洗練されたフォルム</strong>といったプラスマイナスゼロらしいデザインとなっています。どんなお部屋にも馴染むデザインは、生活感を出さずに、リビングなどにそのまま置いておくことができます。気になるところをサッとお掃除できる<strong>手軽さも魅力の1つ</strong>です。</p>
					<h4 class="lottery-point__ttl">驚くのは、その軽さ！片手でもラクラクお掃除</h4>
					<p class="lottery-point__ex">機能面でもっとも特徴的なのは、本体の軽さです。<strong>ノズルをつけても約1.3㎏</strong>と、女性でも片手でラクにお掃除ができます。コンパクト設計ですが、吸引力はクラス最高位30Wとパワフル！さらに、標準モードで約1時間の連続運転ができるので、１回の充電で部屋中のお掃除ができるのも嬉しいですね。またシンプルな構造なため、お手入れもしやすく、<strong>フィルターとダストカップは水洗いができる</strong>ので、いつでも清潔に保つことができます。</p>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">これからの季節、新生活や2台目の掃除機にピッタリなプラスマイナスゼロのコードレスクリーナー。とにかくとっても軽い上にコードレスなので、<strong>ノズルを上に向けて、天井や高い場所のお掃除もこれ1台で対応が可能</strong>です。フロアノズル・隙間ノズル・ロングノズルが付属でついているので、用途に応じてさまざまな使い分けも。お子さまのちょっとした食べこぼしや車内の掃除など、毎日のお掃除にお役立てください。</p>
				</div>
			</div>
			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>カラー</dt>
							<dd>レッド</dd>
						</dl>
						<dl>
							<dt>サイズ</dt>
							<dd>ハンディーユニットのみ（約H421.0×W114.0×D139.0mm）<br>ロングノズル・フロアノズル装着時（約H995.0×W200.0×D139.0mm）</dd>
						</dl>
						<dl>
							<dt>質量</dt>
							<dd>ハンディーユニットのみ　約1kg<br>ロングノズル・フロアノズル装着時　約1.3kg</dd>
						</dl>
						<dl>
							<dt>連続運転時間</dt>
							<dd>標準 約57分　強 約25分　ハイパワー 約11分</dd>
						</dl>
						<dl>
							<dt>消費電力</dt>
							<dd>ハイパワー90W</dd>
						</dl>
						<dl>
							<dt>本体・付属品</dt>
							<dd>本体・バッテリーパック・ロングノズル・フロアノズル・隙間ノズル・スタンド<br>隙間ノズルホルダー・ACアダプター・取扱説明書[保証書付]</dd>
						</dl>
					</div>
				</div>
				<small class="u-small"> ※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2019年3月中旬頃お手元に届くよう、賞品を発送いたします。
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
