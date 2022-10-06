<?php
//base
include ("../../function.php");
$content = get_id_data('3022');
$pageTtl = $content['title'];

//meta
$metaTtl = '優待サービス「'.$pageTtl.'」-'.siteName();
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
		$panAry[] = array("/gift/" ,"優待サービス");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<?php
		include ($inc_path."/lib/inc/page/_gift/__main-header.php");
		?>
		<section class="main__wrapper">
			<div class="product-img mb3">
				<h3 class="u-ttl__ex">「CARAETO」はアプリで集荷から管理・取り出しまでかんたんにできる収納サービスです。<br>捨てたくはない、後で必要だけど今は使わない、そんなときには CARAETO に預けてお部屋をすっきりさせてください。</h3>
				<div class="trunk">
					<div class="trunk__row">
						<div class="trunk__item">
							<p class="trunk__ex">
								<span class="trunk__ex_1">特典①</span><span class="trunk__ex_2">初期費用</span><span class="trunk__ex_3">1箱目無料</span><small class="trunk__ex_4">2箱目以降 500円(税抜)</small>
							</p>
						</div>
						<div class="trunk__item">
							<p class="trunk__ex">
								<span class="trunk__ex_1">特典②</span><span class="trunk__ex_2">月額保管費用</span><span class="trunk__ex_3">1箱目3ヵ月間<span class="u-ilblock">無料</span></span><small class="trunk__ex_4">2箱目以降 <span class="u-ilblock">500円(税抜)／月</span></small>
							</p>
						</div>
					</div>
				</div>
				<div class="trunk__main">
					<div class="trunk__main_img">
						<img data-src="<?php echo($img_url); ?>/gift/trunk/main-v.jpg" data-retina="<?php echo($img_url); ?>/gift/trunk/main-v@2x.jpg" alt="Image photo" style="max-width:740px;" class="u-only__pc">
						<img data-src="<?php echo($img_url); ?>/gift/trunk/main-v-sp.jpg" data-retina="<?php echo($img_url); ?>/gift/trunk/main-v-sp@2x.jpg" alt="Image photo" style="max-width:750px;" class="u-only__sp u-img__max">
					</div>
				</div>
			</div>
			<div class="mb3">
				<?php
				$useName = "CARAETOサービスの";
				$useNameAct = "ご利用は";
				$useLinks ='https://www.trunk.services/collaboration/haseko?_ga=2.63956719.1542684471.1530578317-283500960.1447917814';
				include ($inc_path."/lib/inc/page/_gift/__u-trunk.php");
		    ?>
			</div>
			<h4 class="trunk__ttl"><span class="trunk__ballon_wrap"><span class="trunk__ballon"><span class="trunk__ballon_ex">ここがすごい！</span></span></span><span class="trunk__ttl_ex">CARAETOサービスの5つのポイント</span></h4>
			<hr class="trunk__line">
			<div class="trunk__point">
				<div class="point__row">
					<div class="point__item">
						<img data-src="<?php echo($img_url); ?>/gift/trunk/point01.png" data-retina="<?php echo($img_url); ?>/gift/trunk/point01@2x.png" alt="point-1 使い方はかんたん image" style="max-width:248px;" class="u-img__max">
						<h5 class="point__ttl">預け入れはカンタン！</h5>
						<p>アプリから申し込み、箱に詰めて送るだけ。<br>一箱で最大30アイテム、重さ20kgまで収納できます。</p>
					</div>
					<div class="point__item">
						<img data-src="<?php echo($img_url); ?>/gift/trunk/point02.png" data-retina="<?php echo($img_url); ?>/gift/trunk/point02@2x.png" alt="point-2 保管場所も安心 image" style="max-width:248px;" class="u-img__max">
						<h5 class="point__ttl">保管場所も安心！</h5>
						<p class="point__ex">保管場所は空調を完備、セキュリティも徹底しています。</p>
					</div>
					<div class="point__item">
						<img data-src="<?php echo($img_url); ?>/gift/trunk/point03.png" data-retina="<?php echo($img_url); ?>/gift/trunk/point03@2x.png" alt="point-3 スマホで見られます image" style="max-width:248px;" class="u-img__max">
						<h5 class="point__ttl">預けた荷物は写真で確認！</h5>
						<p class="point__ex">アイテムは到着時に弊社できれいに撮影、アプリで一覧できるようになります。</p>
					</div>
					<div class="point__item">
						<img data-src="<?php echo($img_url); ?>/gift/trunk/point04.png" data-retina="<?php echo($img_url); ?>/gift/trunk/point04@2x.png" alt="point-4 ラクチン取り出し image" style="max-width:248px;" class="u-img__max">
						<h5 class="point__ttl">取り出しもカンタン</h5>
						<p class="point__ex">ワンタッチで指定の場所まで、荷物をお届けします。</p>
					</div>
					<div class="point__item">
						<img data-src="<?php echo($img_url); ?>/gift/trunk/point05.png" data-retina="<?php echo($img_url); ?>/gift/trunk/point05@2x.png" alt="point-5 売買も可能！ image" style="max-width:248px;" class="u-img__max">
						<h5 class="point__ttl">買ったり売ったりもできます！</h5>
						<p class="point__ex">預け入れたけど不要になったものを売ったり、他のユーザーのアイテムを買ったりもできます。</p>
					</div>
				</div>
			</div>
			<div>
				<h5><span class="trunk__ballon-blue_wrap"><span class="trunk__ballon-blue"><span class="trunk__ballon-blue_ex">こんな方が使ってます</span></span></span></h5>
				<div class="trunk-usecase">
					<div class="trunk-usecase__row">
						<div class="trunk-usecase__item">
							<dl class="trunk-usecase__dl">
								<dt class="trunk-usecase__ttl">子供が大きくなるにつれ思い出の品が増えて置き場所に困っている方。</dt>
								<dd class="trunk-usecase__ex">記念メダル・卒業証書・アルバム・子どもが書いた絵など</dd>
							</dl>
						</div>
						<div class="trunk-usecase__item">
							<dl class="trunk-usecase__dl">
								<dt class="trunk-usecase__ttl">クリーニングされた状態のコートがクローゼットの奥にしまってある方。</dt>
								<dd class="trunk-usecase__ex">洋服・コート・スーツ・着物・スキーウェアなど</dd>
							</dl>
						</div>
						<div class="trunk-usecase__item">
							<dl class="trunk-usecase__dl">
								<dt class="trunk-usecase__ttl">趣味で集めているコレクションの置き場がない方。</dt>
								<dd class="trunk-usecase__ex">本・漫画・雑貨・雑誌・フィギアなど</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>

			<h4 class="u-ttl__m">ご利用の流れ</h4>
			<p style="font-size : 1.4rem;">初回特典ご利用時は、必ず下記ページ内にあるお申込みフォームよりご利用ください。</p>
			<div class="img data-img center mb0">
				<div class="u-only__pc mb2" style="border :  1px solid #2b98ca;">
					<img data-src="<?php echo($img_url); ?>/gift/trunk/step01.png" data-retina="<?php echo($img_url); ?>/gift/trunk/step01@2x.png" alt="ご利用の流れ" style="max-width:735px;" class="u-img__max">
				</div>
				<div class="u-only__sp mb2" style="border :  1px solid #2b98ca;">
					<img data-src="<?php echo($img_url); ?>/gift/trunk/step01-sp.png" data-retina="<?php echo($img_url); ?>/gift/trunk/step01-sp@2x.png" alt="ご利用の流れ" style="max-width:311px;" class="u-img__max">
				</div>
				<div class="center mb2">
					<img data-src="<?php echo($img_url); ?>/gift/trunk/next.png" data-retina="<?php echo($img_url); ?>/gift/trunk/next@2x.png" alt="ご利用の流れ" style="max-width:90px;" class="u-img__max">
				</div>
				<div class="img data-img center mb0">
					<div class="u-only__pc" style="border :  1px solid #2b98ca;">
						<img data-src="<?php echo($img_url); ?>/gift/trunk/step02.png" data-retina="<?php echo($img_url); ?>/gift/trunk/step02@2x.png" alt="ご利用の流れ" style="max-width:560px;" class="u-img__max">
					</div>
					<div class="u-only__sp" style="border :  1px solid #2b98ca;">
						<img data-src="<?php echo($img_url); ?>/gift/trunk/step02-sp.png" data-retina="<?php echo($img_url); ?>/gift/trunk/step02-sp@2x.png" alt="ご利用の流れ" style="max-width:311px;" class="u-img__max">
					</div>
				</div>
			</div>
			<p class="mb4" style="font-size : 1.4rem;">認証コードが最初から記載されていますので、消さずにこのまま必要事項を記入の上、お申込みください。</p>
			<div class="mb3">
				<?php
				$useName = "CARAETOサービスの";
				$useNameAct = "ご利用は";
				$useLinks ='https://www.trunk.services/collaboration/haseko?_ga=2.63956719.1542684471.1530578317-283500960.1447917814';
				include ($inc_path."/lib/inc/page/_gift/__u-trunk.php");
				?>
			</div>

		</section>
	</article>
</main>

<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
