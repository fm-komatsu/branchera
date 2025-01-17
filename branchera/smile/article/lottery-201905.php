<?php
//base
include ("../../function.php");
$content = get_id_data('9035');
$pageTtl = $content['title'];
$footerTtl = '5月の抽選賞品<br>【パナソニック】スチーマー ナノケア';

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
		$smile_id_test = "126";//テストFLP用リンクナンバー
		$smile_id_production = "126";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>
		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1905.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1905@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:737px;" class="u-img__max">
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1905-sp.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1905-sp@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:534px;" class="u-img__max">
			</div>
		</section>
		<section class="main__wrapper">
			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1905_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1905_image01@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1905_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1905_image02@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1905_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1905_image03@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">「ナノイー」の力で、寝ながらエステが可能に！</h4>
					<p class="lottery-point__ex">このスチーマーは、「ナノイー」で寝ながらエステと、スチームで集中エステができる2Wayタイプです。<br>「ナノイー」とは、通常のイオンよりも広範囲に届く微粒子イオン。<strong>水分量はマイナスイオンの約1000倍以上、お肌と同じ弱酸性で、スキンケア効果抜群</strong>です。時間のない夜でも「ナノイー」モードをオンにして寝れば、お肌のうるおいをキープして、キメを整えることができます。しかも、「ナノイー」の力でキューティクルがキュっと引き締まり、髪の毛もツヤツヤに。寝ている間に、肌も髪の毛もケアできるすぐれモノなんです！</p>
					<h4 class="lottery-point__ttl">時間があるときはナノサイズのスチームで集中エステ</h4>
					<p class="lottery-point__ex">しっかりケアしたいときは、スチームを使ってお手入れ。<strong>ナノサイズのスチームが、角質層の奥深くまでうるおいを浸透させてくれるから、いつものスキンケアがスペシャルケアに早変わりします！</strong>シートパックの上からスチームを当てるのもおすすめです。スチームを当てたお肌はしっとりもちもち。エステに行った後のようなハリ感が実感できます。<br>そして毛先のパサつきが気になるときは、毛先ケアモードで髪の毛にもうるおい補給。スチームと「ナノイー」を順に当てることで、指通りのよいなめらかな毛先へ導きます。</p>
					<h4 class="lottery-point__ttl">天然アロマの香りでリラックス</h4>
					<p class="lottery-point__ex">別売のアロマタブレットをセットすれば、スチームと共にアロマの香りを届けることができます。<br>アロマタブレットは真正ラベンダー、ベルガモット、ゼラニウム、ティートゥリー、イランイランの5種類で、100％天然精油を使用。好みやその日の気分に合わせて使い分ければ、よりリラックスしたエステタイムが楽しめます♪<strong>スチーマーには真正ラベンダーのアロマタブレットが1個付いているので、すぐにお試しが可能です</strong>。ラベンダーのやさしい香りに癒されてくださいね。</p>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">スチーマーは清潔感のあるホワイトを基調に、エレガントなブラッシュピンクがアクセントになっています。お肌ケアへのモチベーションも上がりそう♪そしてご使用の際、難しい操作は一切ナシ。ナノイー・スチーム・毛先ケアの3つのモードから選ぶだけというシンプルなところも、魅力的ですよね。寝ている間にエステ気分でお肌のケアができるので、忙しい方にもおすすめです！<strong>自分へのご褒美に、また日頃の感謝を込めた母の日のプレゼントにもぴったりのスチーマー。</strong>ぜひ毎日のスキンケアやヘアケアに取り入れてくださいね♪</p>
				</div>
			</div>
			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>型番</dt>
							<dd>EH-SA69</dd>
						</dl>
						<dl>
							<dt>カラー</dt>
							<dd>ピンク調</dd>
						</dl>
						<dl>
							<dt>電源方式</dt>
							<dd>交流式</dd>
						</dl>
						<dl>
							<dt>電源・電圧</dt>
							<dd>AC100V 50-60Hz</dd>
						</dl>
						<dl>
							<dt>消費電力</dt>
							<dd>「ナノイー」発生時：約5W　スチーム発生時：約290W</dd>
						</dl>
						<dl>
							<dt>スチーム温度</dt>
							<dd>約40℃（フタ先端から約20cmの距離）</dd>
						</dl>
						<dl>
							<dt>本体寸法</dt>
							<dd>高さ18×幅12.5×奥行20 cm</dd>
						</dl>
						<dl>
							<dt>質量</dt>
							<dd>本体：約1.2 kg　電源コード：約70 g</dd>
						</dl>
						<dl>
							<dt>付属品</dt>
							<dd>アロマタブレット（お試し用）ラベンダー　1個</dd>
						</dl>
					</div>
				</div>
				<small class="u-small"> ※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2019年6月中旬頃お手元に届くよう、賞品を発送いたします。
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
