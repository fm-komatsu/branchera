<?php
//base
include ("../../function.php");
$content = get_id_data('1002');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「'.$pageTtl.'　2/2」-'.siteName();
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
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_technology.php", "長谷工の技術・サービス" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include ($inc_path."/lib/inc/page/_gift/__main-header.php");
		?>
		<div class="main__wrapper">
			<section class="main__item">
				<h3 class="u-ttl__l">毎日使う場所だから、念入りにチェックしました！</h3>
				<h4 class="u-ttl__m">チェック<span class="icon">4</span>女性の視点から生まれた洗面室「ドレッサー<span class="mincho">&#8546;</span>」</h4>
				<div class="center">
					<img
					data-src="../../lib/img/magazine/modelroom/img-08.png"
					data-retina="../../lib/img/magazine/modelroom/img-08.png"
					alt="女性の視点から生まれた洗面室「ドレッサーⅢ」"
					style="max-width:581px;"
					class="u-img__max"
					>
				</div>

				<p>小さなお子さまの背の高さにも配慮した大きな一面鏡が印象的な洗面室。大人2人が並んで使える広い洗面台や、メイク時などに鏡と身体の距離が近づくよう設計された「ミラーキャビネット」、金具がなくお掃除しやすい「フランジレス排水口」など、住まう人への細やかな配慮が光ります。なかでも注目したいのは洗面カウンター下部の凹んだ空間。ヘルスメーターやゴミ箱置き場として利用できるほか、スツールを置けばドレッサーのように使うことができます。お出かけ前の身支度にゆとりが生まれる多彩な機能が魅力的です。</p>

				<div class="u-assist">
					<h5 class="u-ttl__s">ドレッサー<span class="mincho">&#8546;</span>の“気配り10ポイント”</h5>
					<div class="u-position__center mb-inner" >
						<img src="../../lib/img/magazine/modelroom/img-09.png" alt="「ドレッサーⅢ」の“気配り10ポイント" class="u-img__max">
					</div>
					<p class="mb0">「ドレッサー<span class="mincho">&#8546;</span>」は、お客さまからいただいた生の声と、マンションの企画・設計・販売に携わる長谷工グループ女性社員の視点から「こうすればもっと使いやすいのに」「こんなスペースがあれば」など暮らしの中で感じている洗面化粧台への思いを“気配り10ポイント”として形にした洗面室です。</p>
				</div>


				<h4 class="u-ttl__m">チェック<span class="icon">5</span>巧みに配置された大容量のストレージ</h4>
				<div class="u-position__center mb-inner" >
					<img src="../../lib/img/magazine/modelroom/img-10.png" alt="巧みに配置された大容量のストレージ" class="u-img__max">
				</div>


				<p>住居には「その場所に最も適した収納を」と考え、居室に備えた大容量の「ウォークインクロゼット」から水まわりの小物入れまで、各部屋に合わせた多種多様な収納スペースを確保しています。従来のクロゼットより奥行きを設けた、洋室の「布団クロゼット（和室は押入れクロゼット）」をはじめ、しまいやすく取り出しやすい収納が、洗練されたゆとりある毎日を演出します。</p>

				<div class="u-assist">
					<h5 class="u-ttl__s">「設置する」「設置しない」で空間をアレンジ。</h5>
					<div class="img mb3" >
						<img
						data-src="../../lib/img/magazine/modelroom/img-11.png"
						data-retina="../../lib/img/magazine/modelroom/img-11.png"
						alt="「設置する」「設置しない」で空間をアレンジ。"
						style="max-width: 788px;"
						class="u-img__max"
						>
					</div>
					<p>さらに収納がほしいという方は、キッチンに吊戸棚をつけることも可能です<small class="u-small">※1</small>。ご希望があれば、専属コーディネーターがショールームにて対応し、自分流の住まいづくりをお楽しみいただけます。</p>
				</div>


				<h4 class="u-ttl__m">チェック<span class="icon">6</span>選ぶ楽しさがあり、家族みんなで決める事ができる設備仕様。</h4>

				<div class="u-position__center u-img__max" >
					<img src="../../lib/img/magazine/modelroom/img-12.png" alt="選ぶ楽しさがあり、家族みんなで決める事ができる設備仕様。" class="u-img__max">
				</div>
				<p>住まうご家族のライフスタイルに合わせた空間をご提案するのが、長谷工の「E-label（えらべる）」システム。キッチンやリビング・ダイニングはお好きなカラーをセレクトしていただくことができます。また、玄関の「シューズボックス」をカウンタータイプとベンチタイプからお選びいただけます。お好みに合わせたカスタマイズが、毎日の暮らしをより快適に、より楽しく彩ります。<small class="u-small">※1</small></p>

				<small class="u-small">※1、セレクトメニューには、一部オプション仕様・カスタムオーダー（有償）が含まれています。また、住戸の階数により対応可能期間があり、時期によっては対応できない場合もございます。予めご了承ください。</small>



				<h3 class="u-ttl__l">編集部の感想</h3>

				<div class="flex flex_around">
					<div class="w50">
						<div class="img mb2">
							<img
							data-src="../../lib/img/magazine/modelroom/img-13.png"
							data-retina="../../lib/img/magazine/modelroom/img-13.png"
							alt="編集部の感想"
							style="max-width: 365px;"
							class="u-img__max"
							>
						</div>
					</div>
					<div class="w50">
						<div class="u-assist" style="overflow:hidden;">
							<div class="img fr" >
								<img
								data-src="../../lib/img/magazine/modelroom/img-14.png"
								data-retina="../../lib/img/magazine/modelroom/img-14.png"
								alt="image"
								style="max-width: 85px;"
								class="u-img__max not-w100"
								>
							</div>
							<p style="overflow:visible;">女性編集部員のみなさまのチェックポイントは、いかがでしたでしょうか。このステキなモデルルームは現在ご来場予約受付中です。ぜひみなさんの目で、ブランシエラのこだわりをご確認ください。</p>
						</div>
					</div>
				</div>
			</section>
			<nav class="u-pager">
				<ul class="u-pager__row">
					<li class="u-pager__item "><a href="modelroom.php">1</a></li>
					<li class="u-pager__item active"><a href="modelroom2.php">2</a></li>
				</ul>
			</nav>

		</div>
	</article>
</main>

<?php
$toindex_url = "/magazine/index_technology.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
