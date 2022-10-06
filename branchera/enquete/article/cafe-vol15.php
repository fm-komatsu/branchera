<?php
//base
include ("../../function.php");
$content = get_id_data('11050');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//アンケート用のテンプレート設定（イレギュラーがあれば適宜調整）
$imakura_enqttl="夏のCaféメニューは？";

$imakura_info ="テレワークや巣ごもり生活が続いている影響もあり、おうちでランチする機会も多いかと思います。素敵なCaf&eacute;に行ってランチをしたり、お茶したりする自由が制限されている分、ご自分でCaf&eacute;風ごはんを作られる方も増えて、SNSにはきれいで美味しそうな写真があふれています。皆さんの素敵ごはんについて教えてください！<p>また、あなたの自慢のCaf&eacute;風メニューを、&#035;brcいまくらcaf&eacute;を付けてインスタに投稿してみませんか？<br>6月30日までに投稿いただいた方の中から、いま暮らCaf&eacute;レポートで紹介させていただきます！！</p>";

$imakura_period="2021年6月17日（木）～2021年6月23日（水）";

$imakura_target="長谷工IDをお持ちの方で、コロナ禍でランチをおうちご飯にすることが増えた方";

$imakura_url="https://haseko.flpjp.com/enquete/3/9";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row ">
		<?php
		$panAry[] = array("/enquete/" ,"アンケート");
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>

		<div class="main__wrapper">
			<section class="main__item">
				<h2 class="u-ttl__l_cafe first-of-type mt0">「いま暮らCaf&eacute;」のアンケートにお答えください！</h2>

				<div class="enquete-ex">
					<div class="enquete-ex__row">
						<div class="enquete-ex__ex mb3">
							<p class="mb2">みなさまの“声”から、“暮らしの今”を切り取りお伝えする、「いま暮らCaf&eacute;」。“今”この時をどのように感じ、行動しているかをお聞きし、すばやくレポートにして掲載していきます！</p>
							<p><?php echo $imakura_info; ?></p>
						</div>
						<img src="<?php echo $img_url; ?>/enquete/imakura_cafe-staff@2x.png" class="enquete-ex__img" >
					</div>
				</div>

				<div class="u-assist">
					<h5 class="u-ttl__s">アンケート概要</h5>
					<div class="u-list__dl_table">
						<dl>
							<dt>タイトル</dt>
							<dd>「<?php echo $imakura_enqttl; ?>」</dd>
						</dl>
						<dl>
							<dt>受付期間</dt>
							<dd><?php echo $imakura_period; ?></dd>
						</dl>
						<dl>
							<dt>対象者</dt>
							<dd><strong><?php echo $imakura_target; ?></strong></dd>
						</dl>
						<dl>
							<dt>特典</dt>
							<dd>ご回答いただいた方全員に50スマイルプレゼント</dd>
						</dl>
						<dl>
							<dt>回答方法</dt>
							<dd>ページ下部の「アンケートはこちらから」ボタンよりお答えください<br><span class="u-small">※ご回答は1IDにつき1度のみとなります。</span></dd>
						</dl>
						<dl>
							<dt>集計結果</dt>
							<dd>本WEBサイトにて公開させていただきます</dd>
						</dl>
					</div>
				</div>

				<?php if($eventSts == 'new') { ?>
				<div class="u-btn-layout">
					<div class="u-btn-layout__row">
						<a href="<?php echo $imakura_url; ?>" target="_blank" rel="nofollow" class="u-btn_point u-btn-layout__item">アンケートはこちらから</a>
					</div>
				</div>
				<?php } else { ?>
					<label class="u-btn_end center mt2" >アンケートは終了いたしました</label>
				<?php } ?>
			</section>
		</div>
	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
