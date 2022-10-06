<?php
//base
include ("../../function.php");
$content = get_id_data('4046');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
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
    $panAry[] = array("/event/" ,"イベント・キャンペーン");
    include ($inc_path."/lib/inc/pan.php");
    ?>
		<?php
    include ($inc_path."/lib/inc/page/_event/__main-header.php");
    ?>
		<div class="main__wrapper">
			<section class="section wrapper">
				<div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
					<figure>
						<img data-src="<?php echo $img_url ?>/event/golf10/main.jpg" data-retina="<?php echo $img_url ?>/event/golf10/main@2x.jpg"
						 alt="公益社団法人 日本プロゴルフ協会ティーチングプロＡ級会員による『ミニ講座＆レッスン！！ パッティング編』" class="u-img__max u-only__pc center" style="max-width: 721px;">
						<img data-src="<?php echo $img_url ?>/event/golf10/main-sp.jpg" data-retina="<?php echo $img_url ?>/event/golf10/main-sp@2x.jpg"
						 alt="公益社団法人 日本プロゴルフ協会ティーチングプロＡ級会員による『ミニ講座＆レッスン！！ パッティング編』" class="u-img__max u-only__sp center">
					</figure>
				</div>
				<h4 class="u-ttl__m">テーマ「感育～感性を育てる上達術～」</h4>
				<p>楽しくなければゴルフじゃない！！楽しければスコアもついてくる！</p>
				<p> パッティングで最も必要とされるグリーンの傾斜を読む（予想する）「感性」。 <br>その感性を育てるために考案した「感育」について、自宅や練習場で出来る画期的な「基礎感育」なる練習法を練習グッズと共にご紹介します。 </p>
				<p class="mb4">（グループに分かれてレッスンします。もちろん直接指導あり！）</p>
				<h4 class="u-ttl__m">昨年実施した「ゴルフレッスンイベント」のイベントレポートはこちら</h4>
				<div class="flex between">
					<figure class="w50 center mb">
						<img data-src="<?php echo($img_url)?>/event/golf10/event-golf10-past01.jpg" data-retina="<?php echo($img_url)?>/event/golf10/event-golf10-past01@2x.jpg"
						 alt="2017年に実施した「ゴルフレッスンイベント」の様子" style="max-width:360px;" class="u-img__max">
					</figure>
					<figure class="w50 center mb">
						<img data-src="<?php echo($img_url)?>/event/golf10/event-golf10-past02.jpg" data-retina="<?php echo($img_url)?>/event/golf10/event-golf10-past02@2x.jpg"
						 alt="2017年に実施した「ゴルフレッスンイベント」の様子" style="max-width:360px;" class="u-img__max">
					</figure>
					<figure class="w50 center mb">
						<img data-src="<?php echo($img_url)?>/event/golf10/event-golf10-past03.jpg" data-retina="<?php echo($img_url)?>/event/golf10/event-golf10-past03@2x.jpg"
						 alt="2017年に実施した「ゴルフレッスンイベント」の様子" style="max-width:360px;" class="u-img__max">
					</figure>
					<figure class="w50 center mb">
						<img data-src="<?php echo($img_url)?>/event/golf10/event-golf10-past04.jpg" data-retina="<?php echo($img_url)?>/event/golf10/event-golf10-past04@2x.jpg"
						 alt="2017年に実施した「ゴルフレッスンイベント」の様子" style="max-width:360px;" class="u-img__max">
					</figure>
				</div>
				<ul class="u-list__ul">
					<li>
						<a href="<?php echo $base_url ?>/event/article/report-golf.php" class="u-icon">ゴルフレッスンイベントレポート</a>
					</li>
				</ul>
				<h4 class="u-ttl__m">「ミニ講座＆レッスン！！ パッティング編」イベント概要</h4>
				<div class="u-list__dl_table">
					<dl>
						<dt>[開催日時]</dt>
						<dd>12月4日（火）18:00受付開始　18:30イベント開始 （90分程度）</dd>
					</dl>
					<dl>
						<dt>[講師]</dt>
						<dd>2015PGAティーチングプロアワード 最優秀賞受賞　松本哲也プロ</dd>
					</dl>
					<dl>
						<dt>[開催場所]</dt>
						<dd>ビステーション新橋　<br>〒105-0004 東京都港区新橋2丁目20番15号 新橋駅前ビル1号館6階<br><a href="http://www.bistation.jp/access.html" target="_blank"
							 rel="nofollow" class="a-arrow">地図はこちら</a></dd>
					</dl>
					<dl>
						<dt>[参加人数]</dt>
						<dd>15名さま</dd>
					</dl>
					<dl>
						<dt>[申し込み]</dt>
						<dd>長谷工IDマイページにログインしてお申し込みください。</dd>
					</dl>
					<dl>
						<dt>[予約受付期間]</dt>
						<dd>2018年10月18日（木）～10月28日（日）まで</dd>
					</dl>
					<dl>
						<dt>[ご注意事項]</dt>
						<dd>
							<ul class="u-list__ul_dot" style="font-feature-settings : 'palt';">
								<li>パターの用意はございますが、ご自身のパターでのレッスンをご希望の方はご持参いただいても構いません。</li>
								<li>本レッスンの参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</li>
							</ul>
						</dd>
					</dl>
				</div>
				<div class="u-assist">
					<h5 class="u-ttl__m">講師紹介</h5>
					<div class="flex between">
						<div class="w70 mb1">
							<p class="mb2"><strong>松本哲也</strong><br>愛媛県宇和島市出身　1971年生まれ<br>所属：ガーデン藤ヶ谷ゴルフレンジ<br>2015年PGAティーチングプロアワード 最優秀賞受賞</p>
							<div class="w90_sp center u-only__sp">
								<img data-src="<?php echo $img_url ?>/event/golf10/matsumoto-pro-sp@2x.jpg" class="u-img__max" style="max-width:400px;"
								 alt="講師：松本哲也プロ（2015年PGAティーチングプロアワード 最優秀賞受賞）">
							</div>
							<p>公益社団法人
								日本プロゴルフ協会が2008年から実施している、レッスン指導に関する独自のアイディアや理論において、特に優れたティーチングプロを表彰する制度である、「PGAティーチングプロアワード」において2015年度に最優秀賞を受賞。</p>
							<p>柏市のガーデン藤ヶ谷ゴルフレンジでのレッスンの傍ら、数々のゴルフ雑誌にも独自の理論が取り上げられ、現在は日本文芸社ゴルフレッスンコミックにて「哲先生のGOLFラボ」という漫画を連載中。また、RIZAP
								GOLFの監修プロとしてコンサルティング契約。今年の春には満を持して、書籍「パッティング家練メソッド」を出版。<br>限り無く奥深い魅力ある 「GOLF」
								を、ゴルフ業界、或いはゴルフ以外の各種業界ともタッグを組みながら、より多くの方々に発信し伝えて行きたいと考えている。</p>
						</div>
						<div class="w30 u-only__pc">
							<img data-src="<?php echo $img_url ?>/event/golf10/matsumoto-pro.jpg" data-retina="
								<?php echo $img_url ?>/event/golf10/matsumoto-pro@2x.jpg"
							 class="u-img__max" style="max-width: 200px;" alt="講師：松本哲也プロ（2015年PGAティーチングプロアワード 最優秀賞受賞）">
						</div>
					</div>
				</div>
				<label class="u-btn_end center mt2">応募の受付は終了しました</label>
				<!-- <div class="u-btn-layout mb2">
					<div class="u-btn-layout__row">
						<a href="<?php echo $mypoint_url ?>/111" target="_blank" class="u-btn_point u-btn-layout__item u-icon__circle-right">イベントに申し込む</a>
					</div>
				</div>
				<?php if (!$ssoFlag == 1){ ?>
				<small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank"
					 rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
				<?php }; ?> -->
			</section>
		</div>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
