<?php
//base
include ("../../function.php");
$content = get_id_data('9043');
$pageTtl = $content['title'];
$footerTtl = '1月の抽選賞品<br>【シロカ】おりょうりケトルちょいなべ<br>抽選で7名さまに当たります！';

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
		$smile_year = '20';
		$smile_month = '01';
		$smile_next ="2020年2月3日（月）"; // 次回抽選賞品の公開日
		$smile_num = "100";//必要スマイル数
		$smile_id_test = "146";//テストFLP用リンクナンバー
		$smile_id_production = "146";//本番FLP用リンクナンバー
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
					<h4 class="lottery-point__ttl">湯沸かしだけじゃない！調理もできる新感覚のケトル♪</h4>
					<p class="lottery-point__ex">さっと素早くお湯を沸かしてくれる便利な家電、ケトル。その素早さと手軽さをそのままに、調理までできるようになったのが、この「おりょうりケトルちょいなべ」です。<br>湯沸かし器としてはもちろん、お鍋と同じように、<strong>具材を入れた本格調理にも使うことができます！</strong><br>スープや鍋料理、ラーメンの調理に使うもよし。レトルトカレーや熱燗の温めに使うもよし、チーズフォンデュにも使えます！<br>スタイリッシュなデザインなので、器に移し替えることなく、そのままテーブルに置いて食事を楽しめます。</p>
					<h4 class="lottery-point__ttl">温度調整も可能！丸洗いできるのでいつでも清潔</h4>
					<p class="lottery-point__ex"><strong>40℃～100℃まで温度調整が可能</strong>なのも便利なポイント。ガスを使った調理と違い、お好みの温度に設定できるので、コーヒーを適温で淹れたり、赤ちゃんのミルクを作るときなどにも重宝します。そして設定温度に達すると、60分間温度をキープしてくれる保温機能も付いています。<br>また、ケトルはヒーターから取り外し可能なので、<strong>使った後はそのまま丸洗いOK！</strong>フッ素加工が施されているので、洗い物も楽チンです！使い勝手もバツグンな「おりょうりケトルちょいなべ」。お料理がより楽しくなりそうです♪</p>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">人気急上昇中のデザイン家電ブランド「シロカ」から生まれた「おりょうりケトルちょいなべ」。 発売以来、話題となっている商品ですが、おすすめポイントはやはり「お湯を沸かす感覚で、お料理が作れる」ということ！温かいお料理を、そのまま食卓に持ち運べるデザインもポイントです！特におすすめなのが、チーズをケトルで溶かして楽しむチーズフォンデュ♪保温機能があるのでチーズが固まらず、最後まで美味しく召し上がることができます。<br>まだまだ寒さが続く季節、この「ちょいなべ」が活躍すること間違いなし！ぜひ、この機会にご応募くださいね♪</p>
				</div>
			</div>
			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table_long">
						<dl>
							<dt>品名（型番）</dt>
							<dd>おりょうりケトル ちょいなべ（SK-M151）</dd>
						</dl>
						<dl>
							<dt>電源</dt>
							<dd>交流100V、50/60Hz </dd>
						</dl>
						<dl>
							<dt>消費電力</dt>
							<dd>1,200W</dd>
						</dl>
						<dl>
							<dt>質量（約）</dt>
							<dd>1.8kg</dd>
						</dl>
						<dl>
							<dt>外形寸法（約） </dt>
							<dd>幅 28.2cm × 奥行 18.2cm × 高さ 18.3cm</dd>
						</dl>
						<dl>
							<dt>電源コードの長さ（約）</dt>
							<dd>1.3m</dd>
						</dl>
						<dl>
							<dt>調理容量</dt>
							<dd>1L</dd>
						</dl>
						<dl>
							<dt>温度過昇防止装置</dt>
							<dd>温度ヒューズ</dd>
						</dl>
					</div>
				</div>
				<small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、2020年2月中旬頃お手元に届くよう、賞品を発送いたします。
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
