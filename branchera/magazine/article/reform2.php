<?php
//base
include( "../../function.php" );
$content = get_id_data( '1010' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '　2/3」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>

<main class="main magazine">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_technology.php", "長谷工の技術・サービス" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
		<div class="main__wrapper">

			<section class="main__item">
				<h3 class="u-ttl__l">マンションの長谷工から戸建中心のリフォームサロンが誕生。<br>
					住宅のスペシャリストがワンランク上の住まいをご提案します。</h3>
					<div class="center mb6">
						<div class="u-only__pc">
							<img
							data-src="../../lib/img/magazine/reform/img07.png"
							data-retina="../../lib/img/magazine/reform/img07@2x.png"
							alt="「リフォーム工房　武蔵野」 Q&Aコーナー"
							style="max-width:720px;"
							class="u-img__max"
							>
						</div>
						<div class="u-only__sp">
							<img
							data-src="../../lib/img/magazine/reform/img07-sp.png"
							data-retina="../../lib/img/magazine/reform/img07-sp@2x.png"
							alt="「リフォーム工房　武蔵野」 Q&Aコーナー"
							style=""
							class="u-img__max"
							>
						</div>
					</div>


					<div class="ex2">
						<div class="inner">
							<div>
								<p>こんにちは、藤原さん、本日はよろしくお願いします。
									<br> まず、こちらのサロンはインテリアがすばらしいですね。
								</p>
							</div>
						</div>
					</div>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>ありがとうございます。国内外で活躍されている和紙デザイナーの堀木エリ子さんに内装や家具のデザインをお願いいたしました。日本の伝統素材である和紙を象徴的に配置して、上質で心地良いサロンになっています。</p>
								<div class="img u-only__pc">
									<img
									data-src="../../lib/img/magazine/reform/img08.png"
									data-retina="../../lib/img/magazine/reform/img08@2x.png"
									alt="和紙デザイナー堀木エリ子"
									style="max-width:594px ;"
									class="u-img__max"
									>
								</div>
								<div class="img u-only__sp">
									<img
									data-src="../../lib/img/magazine/reform/img08-sp.png"
									data-retina="../../lib/img/magazine/reform/img08-sp@2x.png"
									alt="和紙デザイナー堀木エリ子"
									style=""
									class="u-img__max"
									>
								</div>
							</div>
						</div>
					</div>

				</section>

				<section class="main__item">

					<h4 class="u-ttl__m u-icon__q">いつから開設されたのですか？</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>約43万戸のリフォーム実績<sup>※1</sup>を誇る長谷工リフォームのなかで、戸建リフォームを中心としたさまざまなご相談に対応するコンサルティングスペースとして2015年2月に開設しました。
									<br>東京・神奈川を中心に、千葉、埼玉の一部もご要望に応じて対応しています。
								</p>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">マンションのリフォームと戸建リフォームとの違いは？</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>マンションのリフォームの場合、住宅設備機器の交換やクロスや床の張り替えなどが中心になります。
									<br>戸建の場合、リフォームを行うにあたり、まず在来木造に限らず、2×4、鉄骨造、RC造などさまざまな工法の知識が必要となります。建物の構造の理解や経験・知識がないと戸建リフォームを行うことは難しいのです。
									<br>その上で、外装や増改築などを含むリフォームを行っていきます。
								</p>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">なるほど。戸建リフォームにはマンションのリフォームとは違った技術や知識が必要なのですね。理想の住まいづくりのために取り組んでいることは？</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>まず、スタッフの充実です。
									<br>「リフォーム工房　武蔵野」では、一級・二級建築士、インテリアコーディネーターなど有資格者を揃えています。また、住宅の設計・工事監督経験20年以上の経験豊富なスタッフにより、より確かで安全なリフォームを実現しています。
									<br>さらに、新築マンションの施工で業界一位の実績を誇る長谷工コーポレーションの知識や技術も生かされています。
								</p>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">そのほかに長谷工グループならではの強みはありますか？</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>長谷工グループでは、新築マンションの施工を数多く担当していますから、間取り、デザイン、設備、インテリアなどの最新のトレンドを常に把握しています。バリアフリーや省エネ対策など、さまざまなニーズに対応することができるところですね。</p>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">具体的にどのようなリフォームがありますか？</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>ご両親がお住まいになられていた戸建住居を、お子さまご夫婦が新居として使用するためにリフォームすることがありますね。ご両親は階段がつらくなったためマンションへ引っ越し、お子さまが実家に住むというケースです。</p>
								<p>築年数が経っていることが多いので、浴室やキッチンなどの水まわりの機器の取り替え、最新の床暖房の設置、お好みの壁クロスなどの内装材の貼り替えを中心にリフォームを行います。趣味の部屋として、書斎や工房を作られたり、和室を子ども部屋にしたり、さまざまなご要望にお応えします。</p>
								<div class="img">
									<img
									data-src="../../lib/img/magazine/reform/img09.png"
									data-retina="../../lib/img/magazine/reform/img09@2x.png"
									alt="施工前・施工後"
									style="max-width:594px ;"
									class="u-img__max"
									>
								</div>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">お子さまが独立されてご夫婦の住まい、というケースもありますよね。</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<p>そうですね。お子さまの独立を機に、ご夫婦2人でお住まいになられる家にリフォームするケースですね。
									<br>その場合、間仕切りをなくしてリビングを広くしたり、玄関や浴室の段差をなくし、トイレや浴室、廊下各所に手摺りを取り付けてバリアフリーにリフォームしたり。
									<br>お客さまの理想のお住まいを叶えるために「綺麗」にするだけでなく快適な生活空間を実現できるリフォームを提案しています。
								</p>
							</div>
						</div>
					</div>

					<h4 class="u-ttl__m u-icon__q">最後にリフォームを検討されているみなさまにメッセージをお願いいたします。</h4>
					<div class="balloon">
						<div class="inner">
							<div>
								<div class="img fr">
									<img
									data-src="../../lib/img/magazine/reform/img10.png"
									data-retina="../../lib/img/magazine/reform/img10@2x.png"
									alt="スタッフ一同"
									style="max-width:286px ;"
									class="u-img__max"
									>
								</div>
								<p>「リフォーム工房　武蔵野」では、経験豊富なスタッフが、理想の住まいづくりのお手伝いを提案いたします。
									<br>また、リフォームに関わる引っ越しや仮住まいのご紹介、住み替えのご相談など、長谷工のグループ力を生かしてワントップで対応することが可能ですので、ぜひお気軽にお越しください。
								</p>
							</div>
						</div>
					</div>


					<div class="img section mb4">
						<img class="u-only__pc u-img__max" data-src="../../lib/img/magazine/reform/img11.png" data-retina="../../lib/img/magazine/reform/img11@2x.png" alt="豊富な知識と高い技術で理想の住まいを実現する。まずはお近くのインテリアリフォーム店へお気軽にご相談ください。" style="max-width: 599px;" >
						<img class="u-only__sp u-img__max" data-src="../../lib/img/magazine/reform/img11-sp.png" data-retina="../../lib/img/magazine/reform/img11-sp@2x.png" alt="豊富な知識と高い技術で理想の住まいを実現する。まずはお近くのインテリアリフォーム店へお気軽にご相談ください。" style="max-width: 599px;">
					</div>

				</section>

				<nav class="u-pager">
					<div class="u-pager__ttlwrap">
						<h6 class="u-pager__ttl">
						<a href="reform3.php" class="u-pager__link"><span class="u-pager__text">女性目線を大切にした、リフォームプランとは？</span></a>
					</h6>
				</div>
					<ul class="u-pager__row">
						<li class="u-pager__item"><a href="reform.php">1</a></li>
						<li class="u-pager__item active"><a href="reform2.php">2</a></li>
						<li class="u-pager__item "><a href="reform3.php">3</a></li>
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
