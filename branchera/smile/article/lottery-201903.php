<?php
//base
include ("../../function.php");
$content = get_id_data('9033');
$pageTtl = $content['title'];
$footerTtl = '3月の抽選賞品<br>【LOGOS】丸洗いストライプミディキャリー';

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
		$smile_id_test = "121";//テストFLP用リンクナンバー
		$smile_id_production = "121";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>
		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1903.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1903@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:737px;" class="u-img__max">
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1903-sp.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1903-sp@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:534px;" class="u-img__max">
			</div>
		</section>
		<section class="main__wrapper">
			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item_end">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1903_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1903_image01@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_end">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1903_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1903_image02@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_end u-fig">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1903_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1903_image03@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">ピクニックやキャンプなどのアウトドアにピッタリ！</h4>
					<p class="lottery-point__ex">キャンプやBBQ製品を手がけるアウトドアブランド「LOGOS」の「丸洗いストライプミディキャリー」は、小回りが利くコンパクトサイズのキャリーカートです。キッチン用品や食材など、荷物が多くなりがちなキャンプやBBQの時でも、ワンタッチで組み立てが可能で、荷物をラクに運ぶことができます。また、移動中の耐荷重は約60kg。ご家族分の荷物を乗せて使うにも十分なスペックとなっています。</p>
					<h4 class="lottery-point__ttl">おしゃれに映えるデザイン、丸洗いもOK</h4>
					<p class="lottery-point__ex">さらに、名前にもある通り、生地はフレームから外して洗濯機で丸洗いOK！アウトドアで汚れてしまっても安心です。ブルーのストライプ模様は、デザインに定評のある「LOGOS」オリジナル。自然の中でも映えるデザインに仕上がっています。また、使用しない時はコンパクトにたたむことができるので、収納場所を選びません。</p>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">ピクニックやBBQなどのアウトドアで使用するだけでなく、重い食料品やかさばる日用品の運搬にもオススメです。また、動かさない静止時の耐荷重は約105kg！見た目もおしゃれなので、室内で収納として活用する方法も。かさばるお子さまのおもちゃ入れや、アウトドア用品の保管にも最適ですね。アウトドアだけでなく、日常使いにも最適なキャリーカート。ぜひ、いろいろな使い方を試してみてくださいね！</p>
				</div>
			</div>
			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>カラー</dt>
							<dd>ブルー</dd>
						</dl>
						<dl>
							<dt>サイズ</dt>
							<dd>（約）70×42×51cm</dd>
						</dl>
						<dl>
							<dt>質量</dt>
							<dd>（約）8.5kg</dd>
						</dl>
						<dl>
							<dt>容量</dt>
							<dd>（約）35L</dd>
						</dl>
						<dl>
							<dt>収納サイズ</dt>
							<dd>（約）42×16×58cm</dd>
						</dl>
						<dl>
							<dt>耐荷重目安</dt>
							<dd>（走行時）：（約）60kg<br>（静止時）：（約）105kg</dd>
						</dl>
					</div>
				</div>
				<small class="u-small"> ※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2019年4月中旬頃お手元に届くよう、賞品を発送いたします。
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
