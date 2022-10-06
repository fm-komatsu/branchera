<?php
//base
include ("../../function.php");
$content = get_id_data('9041');
$pageTtl = $content['title'];
$footerTtl = '11月の抽選賞品<br>【テグ】マグネットブロック 42ピース<br>抽選で8名さまに当たります！';

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
		$smile_month = 11;
		$smile_next ="2019年12月2日（月）";
		$smile_num = "100";//必要スマイル数
		$smile_id_test = "140";//テストFLP用リンクナンバー
		$smile_id_production = "140";//本番FLP用リンクナンバー
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
					<h4 class="lottery-point__ttl">自由に遊べる！磁石が入った積み木「テグ」</h4>
					<p class="lottery-point__ex">テグには、普通の積み木とは違うポイントがあります。それは、“<strong>世界初の磁石入り積み木</strong>”であるということ！積み木の中に磁石が入っていて、<strong>縦・横・斜めと、さまざまな角度</strong>から積み木同士をくっつけることができます。普通の積み木ではできない難しい積み上げ方も可能なので、創造の幅が広がりますよ♪<br>今回ご紹介するのは、シリーズのなかで最も多様な形がそろう42ピース入りのセット。大小の棒や板、タイヤなど、全9種の積み木を組み合わせて、さまざまな形をお楽しみください！</p>
					<h4 class="lottery-point__ttl">対象年齢は1歳から99歳まで！子どもも大人も一緒に楽しめる</h4>
					<p class="lottery-point__ex">本セットの積み木は地球の色がモチーフになっており、カラフルながらやさしく暖かみのある色味。<strong>子どもがなめても害がない、水溶性の塗料</strong>を使用しています。<strong>木材には中米の国・ホンジュラスの豊かな森の天然木を採用</strong>。丈夫なので、長持ちします。<br>丁寧な作りで、想像力を掻き立てながらいろいろな遊び方ができるテグは、子どもも大人も一緒に楽しむことができます。家族団らんの場にぴったりのおもちゃです！</p>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">テグの一番のポイントは、磁石が入っていることで、普通の積み木ではできない積み上げ方が楽しめるところです。そして同じ極が近付くと反発するので、「どこの面ならくっつくんだろう？」と考えながら形を作るうちに、自然と磁石の仕組みを体験することができます。また、完成品を冷蔵庫のマグネットや、オブジェにして楽しむことも可能♪<br>年代を問わずに楽しめるので、クリスマスプレゼントとして最適です。ぜひこの機会にご応募ください！</p>
				</div>
			</div>
			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>対象月齢</dt>
							<dd>12カ月～</dd>
						</dl>
						<dl>
							<dt>材質</dt>
							<dd>天然木、スチール、ゴム</dd>
						</dl>
						<dl>
							<dt>原産国</dt>
							<dd>ホンジュラス</dd>
						</dl>
						<dl>
							<dt>サイズ</dt>
							<dd>
								<ul>
									<li>正方形×6個：W3×D3×H3cm</li>
									<li>長方形1×4個：W9×D3×H3cm</li>
									<li>長方形2×4個：W18×D3×H3cm</li>
									<li>長方形板1×6個：W6×D0.8×H3cm</li>
									<li>長方形板2×6個：W12×D0.8×H3cm</li>
									<li>長方形板3×6個:W21×D0.8×H3cm</li>
									<li>台形×4個：W8.5×D3×H3cm</li>
									<li>タイヤ×4個：φ4.5×D1.5cm</li>
									<li>平行四辺形×2個：W6.5×D3×H2cm</li>
								</ul>
							</dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>1,272g</dd>
						</dl>
					</div>
				</div>
				<small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2019年12月中旬頃お手元に届くよう、賞品を発送いたします。
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
				<P>■<?php echo $smile_month + 1 ?>月の抽選賞品は、<?php echo $smile_next ?>公開予定です。</P>
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
