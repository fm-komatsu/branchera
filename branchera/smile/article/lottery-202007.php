<?php
//base
include ("../../function.php");
$content = get_id_data('9049');
$pageTtl = $content['title'];
$footerTtl = '7月の抽選賞品<br>【ドクターエア】3D アイマジック S ホワイト<br>抽選で8名さまに当たります！';

//meta
$metaTtl = strip_tags($pageTtl).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = strip_tags($pageTtl).'が当たる、ブランシエラクラブの抽選ページです。抽選賞品は'.$content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article lottery";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?> <main class="main">
	<article class="main__row"> <?php
    $panAry[] = array("/smile/" ,"住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?> <?php
    $smile_flug = "lottery";// exchange or lottery or service or no_flp
    $smile_year = '20';
    $smile_month = '07';
    $smile_next ="2020年8月3日（月）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "165";//テストFLP用リンクナンバー
    $smile_id_production = "165";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?> <section class="lottery-banner"> <?php include ($inc_path."/lib/inc/page/_smile/__lottery-main-v.php"); ?> </section>
		<section class="main__wrapper">
			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">手軽にリフレッシュ！疲れた目元を加圧とヒーターでじんわりケア</h4>
					<p class="lottery-point__ex u-font__palt">パソコンやスマートフォンの長時間使用で、酷使してしまいがちな目元。そんな疲れた目元を癒やしてくれるのが、ドクターエアの「3D アイマジック S」です！VRゴーグルのような本体を装着し、スイッチを押すとマッサージスタート。エアープレッシャーで目元に心地よい圧をかけると同時に、ヒーターでじんわりと温めます。ヒーターをオフすれば、暑い夏でも快適に装着可能♪目元からこめかみ周りまで、やさしく疲れを癒やしてくれます。</p>
					<h4 class="lottery-point__ttl">スマホと連携すれば、好きな音楽を聴きながらマッサージできる！</h4>
					<p class="lottery-point__ex u-font__palt">本体に、ヒーリングサウンドが内蔵されていることが本商品の特徴♪心安らぐ音楽を聴きながら、目元のケアができます。さらに、Bluetooth® 機能に対応したスマートフォンなら、本体と連携し、好きな音楽を再生しながらマッサージができるのです♪<br>どこでも手軽に使えて、心地よいひとときが過ごせるリラックスアイテムです。おうち時間もこれで充実！</p>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">おうち時間が続いている今。「運動不足で体が重い」「モニター越しのやりとりが増えて疲労が溜まる」といった心身の不調を感じている方もいることでしょう。そんな方々におすすめなのが3D アイマジック Sです！「振動・加圧・温め・音楽」と、4方面から疲れにアプローチして、しっかりリフレッシュできます。<br>また、充電式なので電源不要で使用できるのもうれしいポイント。軽量で持ち運びも楽チンなので、お好きな場所でご使用いただけますよ♪ぜひ、応募してくださいね！</p>
				</div>
			</div>
			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
					<h6>＜本体＞</h6>
					<dl>
						<dt>製品名</dt>
						<dd>3D アイマジック S</dd>
					</dl>
					<dl>
						<dt>型番</dt>
						<dd>EM-03</dd>
					</dl>
					<dl>
						<dt>電源 ※1</dt>
						<dd>充電式（リチウムイオン充電池内蔵 3.7V 1,200mAh） ／ DC5V（AC アダプター使用時）</dd>
					</dl>
					<dl>
						<dt>定格消費電力</dt>
						<dd>6W（ACアダプター接続中、全モード稼動時）</dd>
					</dl>
					<dl>
						<dt>充電時間</dt>
						<dd>約2時間（満充電まで）※2</dd>
					</dl>
					<dl>
						<dt>充電可能回数</dt>
						<dd>約300回 ※2</dd>
					</dl>
					<dl>
						<dt>連続使用時間</dt>
						<dd>約60分（満充電の場合）※2</dd>
					</dl>
					<dl>
						<dt>定格使用時間</dt>
						<dd>約15分</dd>
					</dl>
					<dl>
						<dt>ヒーター使用時の表面温度</dt>
						<dd>約42℃</dd>
					</dl>
					<dl>
						<dt>使用環境温度</dt>
						<dd>10℃～ 40℃</dd>
					</dl>
					<dl>
						<dt>寸法</dt>
						<dd>幅210 mm × 高さ82mm × 奥行110 mm</dd>
					</dl>
					<dl>
						<dt>重量</dt>
						<dd>約380g（本体のみ）</dd>
					</dl>
					<dl>
						<dt>付属品</dt>
						<dd>ACアダプター、USB コード（タイプ C）、取扱説明書</dd>
					</dl>
					<dl>
						<dt>原材料</dt>
						<dd>本体：ポリカーボネート、ABS<br>パッド：ポリウレタン、ポリエステル<br>ベルト：ポリエステル</dd>
					</dl>
					<dl>
						<dt>生産国</dt>
						<dd>中国</dd>
					</dl>
					<small class="u-small">※1 バッテリーでも AC アダプター接続でも動作します。</small><br>
					<small class="u-small">※2 実際の時間および回数は、使用状況・使用環境により異なります。</small>
				</div>
			</div>
			<small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、20<?php echo $smile_year ?>年<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月中旬頃お手元に届くよう、賞品を発送いたします。 </small>
			</div>
			<div class="mb4 mb2_sp u-font__palt"> <?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?> <?php if (!$ssoFlag == 1){ ?> <small class="u-small mt1">※応募には長谷工IDが必要です。まだお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。<br>※新規登録で1,000スマイルをプレゼントしています。</small> <?php }; ?> </div>
			<div class="mt2">
				<P>■<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月の抽選賞品は、<?php echo $smile_next ?>公開予定です。</P>
			</div>
		</section>
		<aside class="main__item">
			<h3 class="u-ttl__l">よくあるご質問</h3> <?php include ($inc_path."/lib/inc/page/_smile/smile-promotion.php") ?> </aside>
		<nav class="main__snav snav"> <?php include ($inc_path."/lib/inc/page/_smile/u-smile-snav.php") ?> </nav>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
