<?php
//base
include ("../../function.php");
$content = get_id_data('9036');
$pageTtl = $content['title'];
$footerTtl = '6月の抽選賞品<br>【ベルソス】ダブルペルチェ10L保冷温庫';

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
		$smile_id_test = "128";//テストFLP用リンクナンバー
		$smile_id_production = "128";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>
		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1906.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1906@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:737px;" class="u-img__max">
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1906-sp.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1906-sp@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:534px;" class="u-img__max">
			</div>
		</section>
		<section class="main__wrapper">
			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item_center">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1906_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1906_image01@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_center">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1906_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1906_image02@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item_center">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1906_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1906_image03@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">自宅でも、車でも使える万能な保冷温庫</h4>
					<p class="lottery-point__ex">保冷も保温もこれ一台でOKなポータブル保冷温庫。自由に冷却・加熱ができる「ダブルペルチェ」という装置を採用しているので、<strong>なんと-2℃～60℃までボタンを押すだけで温度調節可能！</strong><br>しかもAC＆DCの2電源式だから、室内はもちろん、ドライブ中の車内でも利用できます。<br>コンパクトサイズでありながら、中棚を取り外すと500ml缶が最大10本収納できる大容量。取っ手付きなので、持ち運びしやすいのも魅力的なポイントです。さまざまなシーンで、最適な温度のドリンクをお楽しみいただけます♪</p>
					<h4 class="lottery-point__ttl">ボタンを押すだけでラクラク操作！</h4>
					<p class="lottery-point__ex">温度設定はUP/DOWNボタンを押すだけ！<strong>「もっとキンキンに冷やしたい！」 「ちょっとぬるいかも」というときも、ワンタッチで簡単に操作できます。</strong><br>そして注目はecoボタン。押すとボタンのライトが消えて静音モードになるので、夜寝るときも静かで快適です。ベッド脇に置いて化粧水を入れたり、おしぼりを入れたり…という使い方もおすすめ。スケルトンの扉で中が見えるので、おしゃれなデザインのボトルや缶を入れれば、お部屋のアクセントにもなりますよ♪</p>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">梅雨が明けると、いよいよ夏が到来。なんでもぬる～くなってしまうこの時期、-2℃まで冷やせる本商品が役立つこと間違いなし！<strong>クーラーボックスとは違い、キンキンに冷えた状態をキープできるのがうれしいですよね♪</strong><br>ご自宅はもちろん、車で使えるのも魅力的です。また、夏だけではなく、ホットドリンクが飲みたい冬も大活躍！オールシーズン使える万能なこの保冷温庫。まずはこの夏、冷えたジュースやビールを入れてお出かけしてみてはいかがですか？</p>
				</div>
			</div>
			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>型番</dt>
							<dd>VS-410</dd>
						</dl>
						<dl>
							<dt>カラー</dt>
							<dd>ホワイト</dd>
						</dl>
						<dl>
							<dt>製品サイズ</dt>
							<dd>W240×D295×H395mm</dd>
						</dl>
						<dl>
							<dt>容量</dt>
							<dd>約10L（リットル）</dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>約4.2kg</dd>
						</dl>
						<dl>
							<dt>電源</dt>
							<dd>AC100V 50/60Hz</dd>
						</dl>
						<dl>
							<dt>設定温度</dt>
							<dd>-2℃～60℃　※設定できる温度</dd>
						</dl>
						<dl>
							<dt>冷却方式</dt>
							<dd>ペルチェ方式</dd>
						</dl>
					</div>
				</div>
				<small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2019年7月中旬頃お手元に届くよう、賞品を発送いたします。
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
