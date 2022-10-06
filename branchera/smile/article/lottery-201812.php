<?php
//base
include ("../../function.php");
$content = get_id_data('9030');
//$pageTtl = $content['title'];
$pageTtl = '抽選で10名さまに当たる！【DI CLASSE】ムーミンハウス テーブルランプ';

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
		$smile_id_test = "116";//テストFLP用リンクナンバー
		$smile_id_production = "116";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>
		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1812.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1812@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:752px;" class="u-img__max">
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1812-sp.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1812-sp@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:1080px;" class="u-img__max">
			</div>
		</section>
		<section class="main__wrapper">
			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1812_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1812_image01@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1812_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1812_image02@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1812_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1812_image03@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">「ムーミン」と「DI CLASSE」のコラボ商品</h4>
					<p class="lottery-point__ex">世界中で子どもから大人まで愛されている、北欧フィンランド生まれのキャラクター「ムーミン」と、おしゃれなインテリア照明を取り扱っている「DI
						CLASSE（ディクラッセ）」のコラボ商品。ムーミンの世界観を感じることができるファンタジックなランプになっています。</p>
					<h4 class="lottery-point__ttl">ほのかな灯りに心癒されるテーブルランプ</h4>
					<p class="lottery-point__ex">ムーミンハウスのテーブルランプは、楽しそうに暮らしているムーミン一家が描かれており、トリコロール調の色合いがとってもキュート。ユニークなカタチの屋根には、暖かみのあるフェルト素材を使用しており、細部にまでこだわっています。北欧テイストのミニマルなデザインは大人も欲しくなるアイテムです。</p>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">可愛らしいキャラクターはもちろん、奥深いストーリーで有名なムーミン。そんな、ムーミン好きにはたまらないテーブルランプです。灯りを点けると、キャラクターたちの楽しげな声が聞こえてきそう♪灯りが点いていなくても、可愛いオブジェとしてインテリアにもオススメです。
					</p>
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
							<dt>素材</dt>
							<dd>スチール・フェルト・布</dd>
						</dl>
						<dl>
							<dt>サイズ</dt>
							<dd>直径:12.6×高さ:35（cm）</dd>
						</dl>
						<dl>
							<dt>コード</dt>
							<dd>ON/OFFスイッチ付（中間スイッチ）・ホワイトコード</dd>
						</dl>
						<dl>
							<dt>付属電球</dt>
							<dd>E-17/25Ｗ 白熱 ミニ球（フロスト） ※LED電球・電球型蛍光灯使用可</dd>
						</dl>
					</div>
				</div>
				<small class="u-small"> ※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2019年1月中旬頃お手元に届くよう、賞品を発送いたします。
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
