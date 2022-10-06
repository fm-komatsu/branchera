<?php
//base
include( "../../function.php" );
$content = get_id_data( '7010' );
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

				<h3 class="u-ttl__l">フレッシュな空気を効率的に取り込むための換気のチェックポイント</h3>
				<p>
					換気は、気密性の高いマンションで快適に暮らすためにとても重要な役割を果たしています。
					<br>今回の「わくわくメンテナンス講座」ではマンションの換気を取り上げます。
					<br>その仕組みとメンテナンスのポイントを知って、いつもきれいな空気が流れる快適空間で暮らしたいものです。
				</p>

				<h4 class="u-ttl__m">マンションの換気の仕組み</h4>
				<p>マンションには、昔ながらの木造の建物などに比べて気密性が高いという特徴があります。すきま風などが入りにくいため、戸外の天候や気候の影響を受けにくいというメリットがある反面、換気をしなければ住戸内の空気によどみが生じ、シックハウス症候群（<small class="u-small">※</small>）を引き起こす危険性があります。</p>
				<small class="u-small">※「シックハウス症候群」：建材や家具から発生する化学物質等によって室内の空気が汚染され、それが原因で起こる様々な健康障害の総称</small>
				<p>こうした問題を避けるために、2003年の建築基準法の改正で義務付けられ、現在販売されているマンションに採用されているのが「24時間換気システム」です。2時間程で住まいの空気がほぼ入れ替わることを目安に、ファンを使って常時換気を行なうもので、浴室や洗面室、トイレなどから排気を行ない、各居室に取り付けられた給気口から外気を取り込むタイプが一般的です。</p>
				<p>24時間換気のスイッチをオンにしていても、各居室の給気口を閉めたままにしていると外気が十分に取り入れられないので、給気口は常に開けた状態にしておくことが大切です。</p>
				<p>24時間換気設備のないマンションの場合は、浴室換気扇を常時稼働させておくことをおすすめします。</p>

				<h6 class="u-position__center"><strong>【マンションの空気の流れ図／クリックで拡大します】</strong></h6>

				<p class="u-position__center">
					<a class="mfp-btn" href="#inner-content">
						<img
						data-src="../../lib/img/magazine/wakuwaku/vol10/01.jpg"
						alt="image"
						class="u-img__max">
					</a>
					<div id="inner-content" class="mfp-dialog mfp-hide">
						<img src="../../lib/img/magazine/wakuwaku/vol10/01.jpg" alt="">
					</div>
				</p>


				<h4 class="u-ttl__m">給気口のフィルターは汚れていませんか？</h4>
				<p>最近の給気口にはフィルターが取り付けられ、きれいな空気を取り入れるようになっています。</p>
				<p>しかしフィルターに汚れが付着したり、目詰まりしていると、十分な換気が行なえず、換気効率が下がってしまいますのでご注意を。定期的にフィルターの状態をチェックして、汚れが目立ってきたら新しいものに取り換えましょう。また、フィルターが付いていないタイプの場合は、フィルター付給気口に交換することを検討しましょう。</p>

				<h4 class="u-ttl__m">レンジフードの換気扇の汚れもチェック</h4>
				<p>レンジフードの油汚れを定期的にお掃除することも、換気効率の改善につながります。</p>
				<p>フィルターやファンなどが油汚れなどで詰まっている場合、十分な換気が行なわれていない可能性がありますので、専門業者に依頼して本格的にクリーニングすることをおすすめします。</p>

				<p class="u-position__center">【イラストは24時間換気システムのイメージです】</p>
				<div class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol10/02.jpg"
					style="max-width:540px ;"
					class="u-img__max">
				</div>

				<h4 class="u-ttl__m">換気設備の能力回復には換気ダクトの清掃が効果的</h4>
				<p>長期間換気設備を使用していると、フィルター交換やレンジフード内の清掃をしても換気効率が改善しないことがあります。そんなときには換気ダクトを清掃することをおすすめします。換気ダクトとは、換気扇から外部の排気口までの配管のことです。ダクトが設置されているのは天井裏ですので、清掃は専門業者に依頼しましょう。<small class="u-small">（下記写真参照）</small></p>
				<div class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol10/03.jpg"
					data-srcset="../../lib/img/magazine/wakuwaku/vol10/img03-sp@2x.png 400w ,../../lib/img/magazine/wakuwaku/vol10/03.jpg"
					alt="image"
					style="max-width: 540px;"
					class="u-img__max">
				</div>
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
