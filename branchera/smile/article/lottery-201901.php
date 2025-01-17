<?php
//base
include ("../../function.php");
$content = get_id_data('9031');
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
		$smile_id_test = "118";//テストFLP用リンクナンバー
		$smile_id_production = "118";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>
		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1901.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1901@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:737px;" class="u-img__max">
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1901-sp.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1901-sp@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:534px;" class="u-img__max">
			</div>
		</section>
		<section class="main__wrapper">
			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1901_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1901_image01@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1901_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1901_image02@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1901_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1901_image03@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">約3分で作れる！可愛いスマイルパンケーキ</h4>
					<p class="lottery-point__ex">食いしん坊な表情が可愛らしいパンケーキを、簡単に作ることができるホットプレートです。約9.5cmの食べきりサイズなので、朝ごはんやおやつなどのデイリー使いにもピッタリ。予熱をしてから、生地を流し込んでフタをすれば、約3分であっという間にパンケーキができあがります。付属のオリジナル専用レシピを使って、いろいろな楽しみ方を見つけてみてください！</p>
					<h4 class="lottery-point__ttl">シンプル設計で、お手入れラクラク</h4>
					<p class="lottery-point__ex">軽くて持ち運びやすく、本体の大きさも手のひらサイズなので、手軽に使うことができます。プレートは熱伝導に優れた固定式で、両面を一気に焼き上げるので、ひっくり返す手間がなく短時間で調理が可能。さらに、生地がこびりつきにくいノンステック加工がされていて、お手入れもとっても簡単です！</p>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">生地をいれるだけで、かわいいパンケーキが作れるスマイルベーカーは、誕生日会などパーティーシーンでも大活躍！生地にココアなど好きなフレーバーを加えたり、パンケーキを重ねてケーキ風に楽しんだりと、アイデア次第でいろんなアレンジをお楽しみいただけます。お子さまと一緒にデコレーションするのも楽しいですね。デイリーからパーティーまで食卓をスマイルにするアイテムです。</p>
				</div>
			</div>
			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>カラー</dt>
							<dd>ピンク</dd>
						</dl>
						<dl>
							<dt>サイズ</dt>
							<dd>約 幅13.0×奥行15.0×高さ10.0cm</dd>
						</dl>
						<dl>
							<dt>コード</dt>
							<dd>約100cm</dd>
						</dl>
						<dl>
							<dt>重さ</dt>
							<dd>約550g</dd>
						</dl>
						<dl>
							<dt>消費電力</dt>
							<dd>350W</dd>
						</dl>
						<dl>
							<dt>セット内容</dt>
							<dd>本体・専用レシピ</dd>
						</dl>
					</div>
				</div>
				<small class="u-small"> ※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2019年2月中旬頃お手元に届くよう、賞品を発送いたします。
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
