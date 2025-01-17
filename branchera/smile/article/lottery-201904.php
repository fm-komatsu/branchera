<?php
//base
include ("../../function.php");
$content = get_id_data('9034');
$pageTtl = $content['title'];
$footerTtl = '4月の抽選賞品<br>【レコルト】ラクレット＆フォンデュメーカーメルト';

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
		$smile_id_test = "123";//テストFLP用リンクナンバー
		$smile_id_production = "123";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>
		<section class="lottery-banner">
			<div class="lottery-banner__row u-only__pc">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1904.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1904@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:737px;" class="u-img__max">
			</div>
			<div class="lottery-banner__row u-only__sp">
				<img data-src="<?php echo($img_url)?>/smile/article/lottery-1904-sp.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1904-sp@2x.png"
				 alt="<?php echo($pageTtl)?>" style="max-width:534px;" class="u-img__max">
			</div>
		</section>
		<section class="main__wrapper">
			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1904_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1904_image01@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1904_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1904_image02@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-1904_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-1904_image03@2x.png"
						 alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
				</div>
				<small class="u-small">※ラクレットとは、チーズの断面を加熱し、溶けてトロっとした部分を削いで、じゃがいもなどに絡めた料理のこと。</small>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">大人気のラクレットがお家で簡単に！</h4>
					<p class="lottery-point__ex">SNSでも話題のスイスの家庭料理「ラクレット」。コンパクト＆オシャレな調理家電ブランド・レコルトの「ラクレット＆フォンデュメーカーメルト」を使えば、お家で手軽に楽しむことができるんです！<strong>付属のミニパンで温めるだけで、トロトロのチーズが完成</strong>。あとは温野菜やお肉のソテーにかければ、美味しいラクレットのできあがり。手に入りやすい<strong>ピザ用チーズやカマンベールなど、お好みのチーズで自由にアレンジが可能です♪</strong></p>
					<h4 class="lottery-point__ttl">充実した機能とセット内容</h4>
					<p class="lottery-point__ex">この商品には、実はラクレット以外にもいろいろな使い方が。付属のココットを使ってフォンデュソースを温め、<strong>チーズフォンデュやチョコレートフォンデュを作ったり</strong>、プレートに直接食材を乗せて<strong>パンやお肉を焼いたり…。</strong>利用シーンに合わせて、自分なりの楽しみ方ができます。さらに、付属のミニパンは、チーズが焦げにくく滑りやすいノンスティック加工付き。テクニックいらずで、いつでもトロトロチーズが食べられますよ。</p>
					<h4 class="lottery-point__ttl">シンプル設計で使いやすく、お手入れもしやすい</h4>
					<p class="lottery-point__ex">テーブル上で使えるコンパクトサイズの本体は、<strong>ダイヤルで温度調整ができるので操作もラクラク♪</strong>中段のヒーターは上段と下段を同時に加熱できるので、上段で具材を焼きながら、下段でミニパンに入れたチーズを溶かせば時間も短縮。プレートは取り外して<strong>丸ごと洗える</strong>から、食べ終わった後の片付けも簡単。毎日手間なく使うことができるのは、大事なポイントですよね。</p>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">家族で楽しむパーティーに、子どもたちのお誕生日会に…いろいろなシーンで大活躍間違いなしのラクレット＆フォンデュメーカーメルト。チーズをブレンドしたり、トッピングを加えたりして、自分好みの味を発見することができるのも魅力的です♪また、<strong>チーズ専門家の解説入りレシピシートが付いてくる</strong>ので、基本の作り方はもちろん、より美味しく食べるコツやアレンジレシピを読むことができます！ぜひこの機会に、抽選に応募してみてくださいね♪</p>
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
							<dt>消費電力</dt>
							<dd>350W</dd>
						</dl>
						<dl>
							<dt>定格電圧</dt>
							<dd>100V 50/60Hz</dd>
						</dl>
						<dl>
							<dt>サイズ</dt>
							<dd>本体：約 幅29.5 × 奥行10.5 × 高さ11.0cm<br>
							プレート：約20.5 × 奥行10.0 × 高さ1.5cm<br>
							ミニパン：約9.0 × 奥行18.0 × 高さ3.0cm<br>
							ココット：約 13.5 × 奥行10.0 × 高さ5.0cm</dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>【本体】（プレート・ミニパン含む）：約980g【ココット】：約280g / 1個</dd>
						</dl>
						<dl>
							<dt>付属品</dt>
							<dd>保証書付き取扱説明書・プレート・ミニパン2個・ココット2個・専用レシピシート</dd>
						</dl>
					</div>
				</div>
				<small class="u-small"> ※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2019年5月中旬頃お手元に届くよう、賞品を発送いたします。
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
