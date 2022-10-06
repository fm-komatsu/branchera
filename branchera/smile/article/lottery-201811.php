<?php
//base
include ("../../function.php");
$content = get_id_data('9029');
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
		$smile_id_test = "112";//テストFLP用リンクナンバー
		$smile_id_production = "112";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>
		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1811.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1811@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:752px;" class="u-img__max">
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1811-sp.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1811-sp@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:1080px;" class="u-img__max">
			</div>
		</section>
		<section class="main__wrapper">
			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item_end">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1811_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1811_image01@2x.png"
						 alt="【ボーネルンド】マグ・フォーマー リモート乗り物セット20ピース" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_end">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1811_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1811_image02@2x.png"
						 alt="【ボーネルンド】マグ・フォーマー リモート乗り物セット20ピース" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_end">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1811_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1811_image03@2x.png"
						 alt="【ボーネルンド】マグ・フォーマー リモート乗り物セット20ピース" class="u-img__max">
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">スピーディーに組み立てられる、磁石のブロック</h4>
					<p class="lottery-point__ex">マグ・フォーマーは、他のブロックと違いピースをはめる動作がないので、ひらめきや直感で形を作ることができます。また、ピースは「表・裏」「上・下」全方向につなげることができるので、角度をつけたり、ひっくり返してつなげたりと自由な発想で平面や立体を組み立てられます。</p>
					<h4 class="lottery-point__ttl">作ったブロックを動かして遊ぶ、リモコン機能！</h4>
					<p class="lottery-point__ex">「リモート乗り物セット」は、付属のタイヤと人形のパーツを使って、さまざまな乗り物を組み立てることができます。さらに、専用のリモコンを使えば、自由に動かすことも！子どもの自由な発想で無限の遊び方ができます。</p>
				</div>
			</div>
			<div class="u-movie">
				<h4 class="lottery-point__ttl_nonum">マグ・フォーマーを動画でご紹介！</h4>
				<div class="u-movie__video">
					<div class="u-movie__video_base">
						<iframe class="u-movie__video_emb" src="https://www.youtube.com/embed/YnyVjKpoXSI?rel=0" frameborder="0" gesture="media"
						 allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">「マグ・フォーマー」の魅力は遊びながら学ぶことができるという点です。例えば、図形・角度の概念を体感したり、空間把握力・科学的思考などの力を育むことができます。対象年齢は3歳～99歳！年齢にあわせて、平面から立体へと遊び方が進化していくので、長く遊べるのも嬉しいですね。ご家族でお楽しみいただけるので、今年のクリスマスプレゼントにもオススメです！</a>
					</p>
				</div>
			</div>
			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>品番</dt>
							<dd>MF797004J</dd>
						</dl>
						<dl>
							<dt>パッケージサイズ</dt>
							<dd>縦9cm×横38cm×高さ27.8cm</dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>約1㎏</dd>
						</dl>
						<dl>
							<dt>素材</dt>
							<dd>ABS・磁石</dd>
						</dl>
						<dl>
							<dt>付属品</dt>
							<dd>三角形×2 ・正方形×7 ・台形×2 ・扇形×2 ・アーチ×1 ・長方形（大）×1 ・正方形（人形付き）×1・バイクホイール×1 ・フロントホイール×1 ・モーターホイール×1 ・コントローラー×1</dd>
						</dl>
						<dl>
							<dt>対象年齢</dt>
							<dd>3歳～99歳（リモコン操作は6歳頃～）</dd>
						</dl>
					</div>
				</div>
				<small class="u-small"> ※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2018年12月中旬頃お手元に届くよう、賞品を発送いたします。
				</small>
			</div>
			<?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>
		</section>
		<aside class="main__item">
			<h3 class="u-ttl__l">よくあるご質問</h3>
			<ol class="u-list__ol">
				<?php include ($inc_path."/lib/inc/page/_smile/smile-faq.php") ?>
			</ol>
		</aside>
		<nav class="main__snav snav">
			<?php include ($inc_path."/lib/inc/page/_smile/u-smile-snav.php") ?>
		</nav>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
