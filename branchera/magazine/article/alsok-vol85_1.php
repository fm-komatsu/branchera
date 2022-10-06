<?php
//base
include( "../../function.php" );
$content = get_id_data( '20005' );
$pageTtl = $content[ 'title' ];
$exceptcnt_id = $content['contents_id'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article alsok";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//release date
$release_year = "2021";
$release_month ="5";
$release_day ="";
?>
<main class="main magazine">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_alsok.php", "プロに聞く。暮らしの危機管理。" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
		<div class="main__wrapper">
			<section class="main__item">
				<h3 class="u-ttl__l">大規模修繕工事中の毎日に安心を<br>暮らしの防犯と「足場警備」</h3>
				<p class="mb4">マンションの美観や機能を維持し、長く安全に暮らすために欠かせない「大規模修繕工事」。<br>今回は、大規模修繕工事に合わせて知っておきたい防犯対策について、警備のプロ・ALSOKと、大規模修繕を手掛ける長谷工リフォームに話を伺いました。</p>
				<section class="mb5">
					<h4 class="alsok__ttl alsok__ttl_blue mb3"><span class="alsok__ttl_ex">大規模修繕工事中の暮らしの防犯</span></h4>
					<div class="flex between">
						<div class="w50">
							<p>工期中は足場が建物を取り囲みます。防犯対策や工事関係者への安全対策は徹底していますが、万が一の侵入者やトラブルを防ぐためにも、在宅・不在にかかわらず、<strong>お部屋の窓は全て施錠</strong>しておきましょう。またプライバシー保護のため、<strong>日中でもカーテンをしっかり閉める</strong>ことをおすすめします。</p>
						</div>
						<div class="w50">
							<img src="<?php echo $img_url; ?>/magazine/alsok/85/img__01@2x.png"
								alt="（イメージ画像）カーテンを閉める｜<?php echo $pageTtl?>" class="u-img__max center u-only__pc" loading="lazy">
							<img src="<?php echo $img_url; ?>/magazine/alsok/85/img__01-sp@2x.png"
								alt="（イメージ画像）カーテンを閉める｜<?php echo $pageTtl?>" class="u-img__max center u-only__sp" loading="lazy">
						</div>
					</div>
					</figure>

				</section>
				<section class="mb5">
					<h4 class="alsok__ttl alsok__ttl_blue mb3"><span class="alsok__ttl_ex">防犯グッズの活用</span></h4>
					<div class="flex between">
						<div class="w50 mb3_sp">
							<p>窓の防犯対策には防犯グッズを有効に活用しましょう。<br>例えば、<strong>「補助錠」を取り付けロックすることで、窓を開けにくくし、侵入をより防ぐことができます。</strong>補助錠は簡単に設置でき、窓の開閉をロックすることができますので、外部からの侵入を防ぐだけではなく、換気のために窓を少し開けてロックしておくことも可能です。<br>※長谷工リフォーム施工の場合、希望者に補助錠や防犯アラームが無料貸与されます。</p>
						</div>
						<div class="w50">
							<img src="<?php echo $img_url; ?>/magazine/alsok/85/img__02@2x.png"
							alt="（イメージ画像）補助錠を取り付けた窓｜<?php echo $pageTtl?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url; ?>/magazine/alsok/85/img__02-sp@2x.png"
							alt="（イメージ画像）補助錠を取り付けた窓｜<?php echo $pageTtl?>" class="u-img__max u-only__sp mb2_sp" loading="lazy">
							<img src="<?php echo $img_url; ?>/magazine/alsok/85/img__02_02-sp@2x.png"
							alt="（イメージ画像）補助錠を取り付けた窓｜<?php echo $pageTtl?>" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
				</section>
				<section>
					<h4 class="alsok__ttl alsok__ttl_blue mb3"><span class="alsok__ttl_ex">ワンランク上の安心「足場警備」</span></h4>
					<div class="u-column">
						<div class="u-column__2 mb3_sp">
							<div class="u-column__item">
								<p class="mb2">大規模修繕工事専用の警備プランも多くのマンションで活用されています。</p>
								<p class="mb3">ALSOKと長谷工リフォームがタッグを組んで誕生した<strong>「足場警備システム」</strong>では、警備中であることを広く知らせる「防犯PRシート」を足場に掲示。<strong>外部からの侵入や覗き見などに強い抑止力を発揮します。</strong><br>また、夜間は足場を侵入センサーで警備し、侵入者があれば音と光で知らせます。<br>さらにオンライン警備をご契約の場合は、センサー作動時にガードマンが迅速に駆けつけます。</p>
							</div>
							<div class="u-column__item">
								<img src="<?php echo $img_url; ?>/magazine/alsok/85/img__03@2x.png"
							alt="（イメージ画像）警備中を認知してもらう防犯PRシート｜<?php echo $pageTtl?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url; ?>/magazine/alsok/85/img__03-sp@2x.png"
							alt="（イメージ画像）警備中を認知してもらう防犯PRシート｜<?php echo $pageTtl?>" class="u-img__max u-only__sp mb2_sp" loading="lazy">
							<img src="<?php echo $img_url; ?>/magazine/alsok/85/img__03_02-sp@2x.png"
							alt="（イメージ画像）警備中を認知してもらう防犯PRシート｜<?php echo $pageTtl?>" class="u-img__max u-only__sp" loading="lazy">
							</div>
						</div>
					</div>
					<div class="u-assist">
						<div class="u-assist__inner">
							<h5 class="u-ttl__s">マンションの大規模修繕工事とは</h5>
							<dl class="mb2 u-font__palt">
								<dt>●マンションの外観や設備の広範囲なメンテナンス</dt>
								<dd>中心となるのは、外壁の再塗装、ひび割れ補修、屋上やバルコニーの防水工事など。いわば建物の「お化粧直し」。各設備の更新や共用部分の改修などを同時に行なう場合もあります。</dd>
							</dl>
							<dl class="mb2 u-font__palt">
								<dt>●約12～15年に1回実施</dt>
								<dd>一般的には約12～15年に1回施工。予定や予算は管理組合が作成・見直しを行なう「長期修繕計画」に定められています。</dd>
							</dl>
							<dl class="mb2 u-font__palt">
								<dt>●工期は3カ月以上</dt>
								<dd>マンションにより異なりますが、概ね3カ月以上を要します。期間中は建物の周囲に足場が組まれます。</dd>
							</dl>
							<dl>
								<dt>●暮らしへの影響は？</dt>
								<dd>立ち入り禁止の場所ができる、洗濯物を干せる日が限定される、バルコニーに物を置かないなど、入居者さまの協力が欠かせません。工事説明会、掲示物、配布物などで情報の確認が必要です。</dd>
							</dl>
						</div>
					</div>
					<div class="u-assist">
						<div class="u-assist__inner u-font__palt">
							<p>長谷工リフォームでは、マンションの大規模修繕から、個人のお客さまの住宅リフォームまで幅広く対応しております。お客さまのライフプランやご予算など、ご希望に合わせたリフォームプランをご提案いたします。</p>
						</div>
					</div>
					<a href="https://www.haseko.co.jp/hrf/daikibo/" target="_blank" rel="nofollow" class="u-btn_brand u-icon center" data-ga-click="hcg-page__hrf_alsok85">大規模修繕についてはこちら</a>
				</section>
        <div class="mt8 mt2_sp mb8 mb3_sp">
		      <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
				</div>	
				<section>
					<h5>■関連記事</h5>
					<div class="u-photolist__row">
						<?php echo show_category_photoListalsok("alsok-mansion",$exceptcnt_id); ?>
					</div>
				</section>
			</section>
		</div>
	</article>
</main>
<?php
$toindex_url = "/magazine/index_alsok.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
