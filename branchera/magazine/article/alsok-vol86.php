<?php
//base
include( "../../function.php" );
$content = get_id_data( '19005' );
$pageTtl = $content[ 'title' ];
$exceptcnt_id = $content['contents_id'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
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
$release_month ="8";
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
				<h3 class="u-ttl__l">マンションの風水害対策</h3>
				<p class="mb4">近年、台風や集中豪雨によって甚大な被害が多く発生しています。短時間のうちに浸水・冠水する都市型水害も深刻化しており、マンションにおける防災対策の見直しが重要となっています。今回は居住者の皆さまがご家庭で、またマンション全体でできる風水害への対策を、ALSOKに伺いました。<br>ALSOKではマンションを警備する立場から、管理会社と協力して風水害への取り組みを行なっています。</p>
				<section class="mb5">
					<h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">豪雨の際には「機械式駐車場」にも注意を！</span></h4>
					<div class="flex between">
						<div class="w50">
							<p>台風や集中豪雨が発生した際は、マンション設備の異常を知らせる警報がALSOKのガードセンターに数多く寄せられます。近年特に多いのは、機械式駐車場の地下部分への浸水による警報です。地面とパレットの隙間から水が入り込み、地下の車が水没してしまうと、故障や出火など大きなトラブルにつながります。<br><strong>台風の上陸前に自家用車を避難させておく、豪雨の際の対応をマンション全体で決めておくなど未然の対策が大切です。</strong></p>
						</div>
						<div class="w50">
							<img src="<?php echo $img_url; ?>/magazine/alsok/86/img__01@2x.png"
								alt="（イメージ画像）機械式駐車場｜<?php echo $pageTtl?>" class="u-img__max center u-only__pc" style="max-width:265px" loading="lazy">
							<img src="<?php echo $img_url; ?>/magazine/alsok/86/img__01-sp@2x.png"
								alt="（イメージ画像）機械式駐車場｜<?php echo $pageTtl?>" class="u-img__max center u-only__sp" loading="lazy">
						</div>
					</div>
					</figure>

				</section>
				<section class="mb5">
					<h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">油断せず浸水に備える</span></h4>
					<div class="flex between">
						<div class="w50 mb3_sp">
							<p>一見、浸水の心配が無さそうに思えるマンションでも油断は禁物。地面の小さな勾配や、排水溝の詰まりなどから道路が冠水し、マンション共用部に流れ込む事例も報告されています。<br>「高台にあるから」「去年まで大丈夫だったから」などと安心せず、<strong>マンション全体で危険な箇所のチェックや自治体のハザードマップの確認を行ないましょう。</strong><br>また被害が想定される場合は土嚢などの用意を。災害時に誰がどのように作業を行なうかも決めておくと安心です。現在は保管場所を取らないポリマー式簡易土嚢なども市販されているので、マンションの状況に合った備えをしましょう。</p>
						</div>
						<div class="w50">
							<img src="<?php echo $img_url; ?>/magazine/alsok/86/img__02@2x.png"
							alt="（イメージ画像）ポリマー式簡易土嚢｜<?php echo $pageTtl?>" class="u-img__max u-only__pc center" style="max-width:303px" loading="lazy">
							<img src="<?php echo $img_url; ?>/magazine/alsok/86/img__02-sp@2x.png"
							alt="（イメージ画像）ポリマー式簡易土嚢｜<?php echo $pageTtl?>" class="u-img__max u-only__sp mb2_sp" loading="lazy">
						</div>
					</div>
				</section>
				<section>
					<h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">十分な備蓄で家族を守る</span></h4>
					<div class="u-column">
						<div class="u-column__2 mb3_sp">
							<div class="u-column__item">
								<p class="mb2">個々のご家庭では被災を想定した備蓄が大切です。管理組合で、ある程度の備蓄をしていても、被災が長引いた場合は全戸に行き渡らなくなることもあります。風水害による排水トラブルが起こる場合もあるので、対策グッズを用意しましょう。</p>
								<div class="u-assist">
									<div class="u-assist__inner">
										<h5 class="u-ttl__s">ご家庭での備蓄</h5>
										<dl class="mb1 u-font__palt">
											<dt>●家族の人数に合わせた食料や水</dt>
										</dl>
										<dl class="mb1 u-font__palt">
											<dt>●十分な数の簡易トイレ</dt>
										</dl>
										<dl class="mb1 u-font__palt">
											<dt>●停電時にも充電できる蓄電池</dt>
										</dl>
										<dl class="mb1 u-font__palt">
											<dt>●清潔を保つアルコールスプレー、マスク</dt>
										</dl>
										<dl>
											<dt>●生理用品などの衛生用品</dt>
										</dl>
									</div>
								</div>
							</div>
							<div class="u-column__item">
								<img src="<?php echo $img_url; ?>/magazine/alsok/86/img__03@2x.png"
							alt="（イメージ画像）簡易トイレ｜<?php echo $pageTtl?>" class="u-img__max u-only__pc center" style="max-width:310px" loading="lazy">
							<img src="<?php echo $img_url; ?>/magazine/alsok/86/img__03-sp@2x.png"
							alt="（イメージ画像）簡易トイレ｜<?php echo $pageTtl?>" class="u-img__max u-only__sp mb2_sp" loading="lazy">
							</div>
						</div>
					</div>
        </section>
				<section>
					<h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">コミュニケーションがマンションを守る</span></h4>
					<p>風水害への備えは、マンション全体と各家庭それぞれに必要なもの。普段からマンション内や家族間のコミュニケーションを円滑にしておくことで、災害時にも協力体制をとりやすく、防災・防犯上で良い効果が期待できます。</p>
					<div class="u-assist mb6 mb1_sp">
						<div class="u-assist__inner u-font__palt">
							<div class="u-column">
								<div class="u-column__2 mb3_sp">
									<div class="u-column__item">
										<h5 class="u-ttl__s">お役立ち商品<br>多言語メガホン（拡声器）</h5>
										<p class="mb2">居住者に外国の方が多い場合、災害時に強い味方になってくれるのが、登録された多言語の定型文を放送できるメガホン。翻訳機を接続するタイプや一体型などあり、通常の拡声器機能も備えています。スムーズな避難誘導や避難訓練などにも役立ちます。</p>
									</div>
									<div class="u-column__item">
										<img src="<?php echo $img_url; ?>/magazine/alsok/86/img__04@2x.png"
										alt="（イメージ画像）登多言語メガホン（拡声器）｜<?php echo $pageTtl?>" class="u-img__max u-only__pc center" style="max-width:215px" loading="lazy">
										<img src="<?php echo $img_url; ?>/magazine/alsok/86/img__04-sp@2x.png"
						    	  alt="（イメージ画像）多言語メガホン（拡声器）｜<?php echo $pageTtl?>" class="u-img__max u-only__sp mb2_sp" loading="lazy">
									</div>
								</div>
							</div>
						</div>
					</div>
          <div class="mb8 mb3_sp">
            <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
          </div>
					<section>
						<h5>■関連記事</h5>
						<div class="u-photolist__row">
							<?php echo show_category_photoListalsok("alsok-bousai",$exceptcnt_id); ?>
						</div>
					</section>
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
