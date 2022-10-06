<?php
//base
include( "../../function.php" );
$content = get_id_data( '7004' );
$pageTtl = $content[ 'title' ];
//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];
//bodyClass
$body_class = "page-article";
//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_wakuwaku.php", "Mr.わくわくメンテナンス講座" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
		<div class="main__wrapper">
			<section class="main__item">
				<h3 class="u-ttl__l">水の大切さについて考え、同時に室内の水廻り機器をチェックしましょう。</h3>
				<p>普段、わたしたちが何気なく使用している水。お洗濯をしたり、シャワーを浴びたり、料理に使ったり。限りある資源である「水」について、改めてじっくり考えてみましょう。</p>

				<h4 class="u-ttl__m">水は地球上の貴重な資源</h4>
				<p>地球上の水は約14億立方キロメートル。その97.5％は海水なので淡水はたった2.5％しかありません。しかもその大半は氷や地下水。人間がたやすく使える水は地球上にある水全体の0.01％にすぎません。日本に住んでいると切実に感じませんが、グローバルに考えると地球上の水不足は深刻です。</p>
				<p class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol4/01.jpg"
					alt="image"
					style="max-width: 540px;"
					class="u-img__max">
				</p>

				<h4 class="u-ttl__m">毎日の飲料水に何を選ぶか</h4>
				<p class="mb2"> 日本は世界でも珍しく、蛇口をひねれば安全できれいな水が出る国です。全国の水道事業体は厚生労働省令で定められた50もの水質基準項目を遵守し、厳しく水質管理を行ない、また高度浄水処理を導入するなど、より安全でおいしい水道水づくりに努めています。</p>
				<p>それでも、水道水をそのまま飲むことに抵抗がある方は浄水器・ウォーターサーバー・ペットボトルなど、選択肢は多くあります。今や飲料水にお金を使う時代になりました。みなさまのライフスタイルに適したものをお選びください。</p>
				<p class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol4/02.jpg"
					alt="image"
					style="max-width: 334px;"
					class="u-img__max"
					>
				</p>

				<h4 class="u-ttl__m">自分でできるメンテナンス〈トイレ手洗い水〉</h4>
				<p class="mb2">水経路には要所要所にフィルターや止水栓が設置されており、共に異常があると水圧が低くなりますので、3年に一度は点検を行ないたいものです。ちなみに、トイレの水を流して、40〜50秒たっても水が止まらない場合は、フィルターの目詰まりや止水栓の開度不足なども考えられます。</p>
				<p class="u-position__center u-only__pc">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol4/03.jpg"
					data-srcset="../../lib/img/magazine/wakuwaku/vol4/03-sp@2x.jpg 666w,../../lib/img/magazine/wakuwaku/vol4/03.jpg"
					alt="image"
					style="max-width: 540px;"
					class="u-img__max">
				</p>

				<h4 class="u-ttl__m">水廻りのトラブル</h4>
				<p class="mb4">それではトラブルが発生しがちな水廻り機器についてお話ししましょう。</p>

				<h5 class="u-ttl__s">水栓編 </h5>
				<p class="center mb2">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol4/04.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol4/04.jpg"
					alt="シングルレバーで水漏れしやすい場所"
					style="max-width:271px ;"
					class="u-img__max"
					>
				</p>
				<p class="mb4">水廻りは室内で一番酷使され不具合の発生率が高い機器です。
					<br>止水不良などの不具合はプロに依頼する必要がありますが、修理か交換か迷った場合の交換の目安を下記に列記しました。この３項目は判断基準であり、すべての機器について当てはまりますのでご参照ください。
				</p>
				<p><strong>【交換の目安】</strong></p>
				<p><strong style="background:none; color:#000;">
					&#9312; 修理部材がなかったり、修理できない部分の破損で修理不能な状態
					<br>&#9313; 機器の機能維持には頻繁な修理が必要で著しい維持費が発生する場合
					<br>&#9314; 技術革新に伴い現行機器の性能や省エネ性などが著しく陳腐化した場合</strong>
				</p>
				<small class="u-small">※水栓の場合は設置後10年を過ぎていたら、新たな機能を付加した機器への交換がおすすめです。最近の水廻り機器は節水タイプや洗髪・掃除に便利なホース収納式などの商品も豊富にあります。</small>

				<h5 class="u-ttl__m">洗濯機編</h5>
				<img
				data-src="../../lib/img/magazine/wakuwaku/vol4/05.jpg"
				data-retina="../../lib/img/magazine/wakuwaku/vol4/05@2x.jpg"
				style="max-width: 307px; margin-left:20px; margin-bottom:20px;"
				class="u-img__max u-only__pc u-float__right">
				<p>洗濯機を回した後、大抵の人はその場を離れ、休憩したり、別の仕事をしたりします。中には外出する人もいるのではないでしょうか。水廻りのトラブルでは、洗濯機まわりの漏水が多く被害も甚大となります。</p>
				<br clear="right">
				<img
				data-src="../../lib/img/magazine/wakuwaku/vol4/05.jpg"
				data-retina="../../lib/img/magazine/wakuwaku/vol4/05@2x.jpg"
				style="max-width: 307px;"
				class="u-img__max u-position__center u-only__sp">

				<p><strong>洗濯排水のトラブル対策</strong></p>
				<img
				data-src="../../lib/img/magazine/wakuwaku/vol4/06.jpg"
				data-retina="../../lib/img/magazine/wakuwaku/vol4/06.jpg"
				style="max-width: 305px;"
				class="u-img__max u-only__pc u-float__right">
				<p>&#9312; 洗濯機防水パンの下は防水処理していませんので、洗濯機を設置する際には防水パンを破損しないように注意しましょう。また、排水ホースは確実に排水口に接続してください。</p>
				<p>&#9313; 洗濯排水トラップ内には糸くず・洗剤カスなどがたまり、これらで排水が詰まると、水があふれ、漏水事故を引き起こすことがありますので、定期的な排水管洗浄が必要です。しかし、洗濯機の大型重量化に伴い、洗濯機を動かすことができず、洗浄作業に支障をきたしています。この対策として、洗濯機のかさ上げをおすすめします。最近の防水パンは図&#9312;のようなかさ上げ台が付いた形状になっています。また、図&#9313;のように後付けできるかさ上げ台もあります。</p>
				<br clear="right">
				<p class="u-position__center u-only__sp">
					<img
					src="../../lib/img/magazine/wakuwaku/vol4/06.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol4/06.jpg"
					alt="image"
					style="max-width: 305px;"
					class="u-img__max">
				</p>

				<p><strong>洗濯給水のトラブル対策</strong></p>

				<p>給水ホースはしっかりと蛇口に金具で取り付け、使用しないときは水栓を閉める習慣をつけましょう。全自動洗濯機では給水ホースが抜けても気づかず、漏水事故につながるケースが多くなっています。緊急止水機能付き水栓に交換することをおすすめします。万が一ホースが外れても、瞬時に止水するので、安心です。</p>
				<p class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol4/07.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol4/07@2x.jpg"
					alt="image"
					style="max-width:343px ;"
					class="u-img__max"
					>
				</p>

				<p><strong>その他のトラブル</strong></p>
				<p>ウィンドブレーカーやレインコートなど、防水性に優れた衣類が洗濯槽の内側に貼りつくと、防水加工で水を通さないため排水できず、洗濯槽に水が溜まった状態になります。この状態で脱水すると、排水しきれなかった水の重さで、洗濯機が異常な振動を起こし、ひどいときには倒れたり、給排水ホースが外れる危険性がありますのでご注意ください。</p>

			</section>

			<?php  include ($inc_path."/lib/inc/page/_magazine/__back-wakuwaku.php"); ?>

		</div>
	</article>
</main>

<?php
$toindex_url = "/magazine/index_wakuwaku.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
