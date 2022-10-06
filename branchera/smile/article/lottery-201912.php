<?php
//base
include ("../../function.php");
$content = get_id_data('9042');
$pageTtl = $content['title'];
$footerTtl = '12月の抽選賞品<br>【ディクラッセ】エトワールテーブルランプ<br>抽選で5名さまに当たります！



';

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
		$smile_year = 19;
		$smile_month = 12;
		$smile_next ="2020年1月6日（月）";
		$smile_num = "100";//必要スマイル数
		$smile_id_test = "143";//テストFLP用リンクナンバー
		$smile_id_production = "143";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>
		<section class="lottery-banner">
			<?php include ($inc_path."/lib/inc/page/_smile/__lottery-main-v.php"); ?>
		</section>
		<section class="main__wrapper">
			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">落ち着いたフレンチ・モロッコテイストのハンドメイドランプ</h4>
					<p class="lottery-point__ex">照明の専門ブランド・ディクラッセから、星型のテーブルランプ「エトワールテーブルランプ」をご紹介します。近年人気を集めているヨーロッパと北アフリカの2つの文化を融合した<strong>フレンチ・モロッコテイスト</strong>を採用。洗練された中にもゴージャスな雰囲気を演出します。温かみのある木製インテリアや、クールなコンクリート打ちの空間など、いろいろなテイストのお部屋にマッチします。<br><strong>ビンテージ加工</strong>がされたフレームには<strong>真鍮を使用</strong>。経年とともに色合いの変化を楽しむことができます。ガラスは職人がひとつひとつ手作業ではめ込んでいる、こだわりの逸品です！</p>
					<h4 class="lottery-point__ttl">おしゃれなだけでなく、使い勝手も◎いろいろなシーンで楽しめる♪</h4>
					<p class="lottery-point__ex">白熱球だけでなく、LED電球や電球型蛍光灯も使用できるので、普段お使いの照明や、お好みに合わせてお使いいただけます。家族が集まるリビングルームやベッドルームの照明に。カーペットやフローリングに直置きして、お部屋のアクセントに…、<strong>いろいろな演出ができる</strong>テーブルランプです。</p>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">インパクトがある星型でありながら、落ち着いた佇まいが素敵なテーブルランプ。照明として使うのはもちろん、明かりを灯さずに、オブジェとしてもお部屋を華やかにしてくれます♪<br>今回お届けするフロストタイプは、半透明でやさしい印象のフロストガラスを使用。電球が付属した状態でお渡しするので、届いたその日からお使いいただけます♪<br>テレビドラマのセットでも使用され、話題になったテーブルランプ。ぜひこの機会にご応募ください！</p>
				</div>
			</div>
			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table_long">
						<dl>
							<dt>材質</dt>
							<dd>ガラス、真鍮（しんちゅう）</dd>
						</dl>
						<dl>
							<dt>サイズ</dt>
							<dd>約 幅26×奥行30×高さ25（cm）</dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>約1.7（kg）</dd>
						</dl>
						<dl>
							<dt>コード</dt>
							<dd>ON/OFFスイッチ付（中間スイッチ） ブラックコード </dd>
						</dl>
						<dl>
							<dt>色</dt>
							<dd>フロスト</dd>
						</dl>
						<dl>
							<dt>付属電球</dt>
							<dd>E-17 / 40W 白熱 ミニ球（クリアー） LED電球、電球型蛍光灯 使用可<br>※ただし外観（影や光の出方、電球の形状による外観）が白熱球使用の時と異なる場合があります</dd>
						</dl>
						<dl>
							<dt>品番・JANコード　</dt>
							<dd>フロスト： LT3675FR / 4571163647389</dd>
						</dl>
					</div>
				</div>
				<small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2020年1月中旬頃お手元に届くよう、賞品を発送いたします。
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
				<P>■<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月の抽選賞品は、<?php echo $smile_next ?>公開予定です。</P>
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
