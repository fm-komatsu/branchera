<?php
//base
include ("../../function.php");
$content = get_id_data('1011');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「'.$pageTtl.'　2/2」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article rent";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main rent">
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
				<h3 class="mb-inner">
					<img
					data-src="../../lib/img/magazine/rent/img06.png"
					data-retina="../../lib/img/magazine/rent/img06@2x.png"
					alt="「長谷工の賃貸サービス」 Q&Aコーナー"
					class="u-img__max">
				</h3>

				<div class="ex2">
					<div class="inner">
						<div>
							<p>こんにちは、本日はよろしくお願いいたします。</p>
						</div>
					</div>
				</div>
				<div class="balloon">
					<div class="inner">
						<div>
							<p>こちらこそよろしくお願いします。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">まずは新井さんにお聞きします。<br>長谷工の賃貸と一口に言っても、いろいろな会社があるんですね。</h4>
				<div class="balloon mb rent1">
					<div class="inner">
						<div>
							<p>そうですね。各々が専門分野に特化するため、各社で取り扱う内容が異なります。<br>オーナーさまに向けた賃貸マンションの管理運営を中心とした「長谷工ライブネット」、入居者さまへ向けてサイトを通じ賃貸マンション仲介業務を行なう「長谷工アイネット」、保証人代行システム、家具家電レンタルを提供する「レジデンシャルサービス」の3社があります。</p>
							<p>また、企業に向けた社宅の仲介や管理代行を行なう「長谷工ビジネスプロクシー」もグループ会社のひとつです。</p>
							<div class="img">
								<img
								data-src="../../lib/img/magazine/rent/img07.png"
								data-retina="../../lib/img/magazine/rent/img07@2x.png"
								alt="image"
								style="max-width: 478px;"
								class="u-img__max"
								>
							</div>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">それぞれが専門分野で力を発揮しているのですね。<br>まずはオーナーさま向けの賃貸マンション管理運営についてお聞かせください。</h4>
				<div class="balloon mb rent1">
					<div class="inner">
						<div>
							<p>長谷工ライブネットでは、賃貸マンションの入居者募集、契約手続き、家賃徴収等の賃貸運営に関わるさまざまな業務に加え、建物の清掃・設備メンテナンス・リフォーム工事等の建物維持管理に関わるすべての業務を受託することができます。居住者さまが満足して暮らせることは、稼働率アップにつながり、オーナーさまの大きな安心につながります。</p>
							<p>また、賃貸マンションを始めたい方には、土地活用に関するコンサルタントをはじめ、立地分析、事業計画等、賃貸経営をトータルにサポートします。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">賃貸マンションオーナーさまに対する長谷工の強みは？</h4>
				<div class="balloon mb rent1">
					<div class="inner">
						<div>
							<p>長谷工ライブネットでは、賃貸管理、建物管理をパッケージにして受託することができ入出金管理から建物のハード面まで一元管理することができます。</p>
							<p>また、主要都市の東京、大阪、名古屋、福岡、仙台、札幌に支店を配し、日本全国をフィールドとした賃貸管理を行なっているところですね。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">個人の分譲マンションオーナーさまへのサービスもありますね。</h4>
				<div class="balloon mb rent1">
					<div class="inner">
						<div>
							<p>急な転勤や住み替えなどで分譲マンションを賃貸運用したい方に、1戸からお預かりする賃貸運営サポートです。賃料査定や入居者募集、契約手続き・入金業務など賃貸管理業務を代行・サポートします。</p><p>プランは、「空室保証プラン」「稼働保証プラン」「媒介業務プラン」の3つをご用意し、ご希望にあわせて選択いただけます。このオーナーズリースシステムは、「長谷工アイネット」がオーナーさまの窓口となり、スムーズな契約をサポートしています。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">なるほど。オーナーさまに向けたさまざまな業務に対応しているのですね。<br>松島さん、それでは入居者さま側へのサービスについてお聞かせください。</h4>
				<div class="balloon mb rent2">
					<div class="inner">
						<div>
							<p>東京、大阪を中心に、長谷工が管理する62,288戸<sup>※1</sup>の優良マンションを取り扱っています。インターネットの賃貸物件検索サイト「長谷工アイネット」を通じて、提携他社管理物件などを加えた総物件数は、約65,000戸以上<sup>※2</sup>になります。賃貸マンションのお部屋探しから契約、入居、転居、および売買のご相談と仲介など幅広く対応しています。
							</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">約65,000戸<sup>※2</sup>もあるんですね。紹介されている物件の特徴は？</h4>
				<div class="balloon mb rent2">
					<div class="inner">
						<div>
							<img
							data-src="../../lib/img/magazine/rent/img08.png"
							data-retina="../../lib/img/magazine/rent/img08@2x.png"
							alt="image"
							align="right"
							style="max-width:282px ; margin-left:20px;"
							class="u-img__max"
							>
							<p>長谷工が管理する物件は鉄筋コンクリート構造のマンションが中心です。ですので、常に優良物件をご紹介できることが特徴ですね。また、長谷工の自社開発の賃貸マンションをいち早くご紹介することができます。</p><p>物件検索サイトでは、「分譲賃貸」「礼金ゼロ」「UR都市機構物件」など、こだわりのテーマからも検索できるので、お部屋探しにお役立ていただいています。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">お客さまとのお付き合いのなかで、うれしかったことはありますか？</h4>
				<div class="balloon mb rent2">
					<div class="inner">
						<div>
							<p>お客さまが、大学入学と同時に上京されたとき、シングルルームをご紹介させていただき、就職された後「お給料が良くなったから」ということで、もう少し広いお部屋をご紹介いたしました。そして、ご結婚、ご出産されたときも、お声を掛けていただきました。</p><p>ライフスタイルの変化に伴ってお客さまとお付き合いできることが、うれしく、やりがいを感じますね。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">それでは藤原さん、「保証人代行システム」についてお聞かせください。</h4>
				<div class="balloon mb rent3">
					<div class="inner">
						<div>
							<p>保証人代行システムとは、当社が認定する物件を対象に入居者さまの保証人を「レジデンシャルサービス」が代行し、賃貸借契約を締結するサービスです。月額賃料等1月分の70％で2年間保証いたします。</p>
							<div class="img">
								<img
								data-src="../../lib/img/magazine/rent/img09.png"
								data-retina="../../lib/img/magazine/rent/img09@2x.png"
								alt="image"
								style="max-width:584px ;"
								class="u-img__max"
								>
							</div>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">どのようなケースの方がご利用されることが多いのですか？</h4>
				<div class="balloon mb rent3">
					<div class="inner">
						<div>
							<p>ご家族やご親戚に保証人をお願いすることに気兼ねされたり、ご実家が遠くにあり手続きに時間がかかったりなど、いろいろなケースがありますね。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">家具・家電レンタルサービスも行っているのですね。</h4>
				<div class="balloon mb rent3">
					<div class="inner">
						<div>
							<p>はい。急な引っ越しや転勤など、さまざまな用途でご利用いただいています。一度に購入されると費用がかさみますから、なるべく引っ越し費用を抑えたい方にぴったりのサービスです。レンタルとあわせてご購入いただける家具・家電もご用意しています。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">「長谷工ライブネット」ではマンスリーマンションもご紹介していますよね。</h4>
				<div class="balloon mb rent3">
					<div class="inner">
						<div>
							<p>東京、大阪に1Rから1LDKまで家具、家電が揃うマンションをご用意しています。基本、30日間から借りられますので、長期出張や一時的なお住まいとしてご利用いただいています。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">本当に幅広く賃貸をサポートしているんですね。</h4>
				<div class="balloon mb rent1">
					<div class="inner">
						<div>
							<p>はい、長谷工の賃貸サービスは、オーナーさま、入居者さまの立場に立ってきめ細かなサポート体制を整えています。また、不動産投資、資産運用などのご相談にもお応えしておりますので、お気軽にご相談ください。</p>
						</div>
					</div>
				</div>


				<div class="img section mb4">
					<img
					data-src="../../lib/img/magazine/rent/img10.png"
					data-retina="../../lib/img/magazine/rent/img10@2x.png"
					alt="借りたい方と貸したい方。長谷工の賃貸サービスは、人と人、人と暮らしをつなぐ役割を果たしているのですね。"
					style="max-width: 509px;"
					class="u-img__max"
					>
				</div>

				<div class="img section center mb2">
					<a href="<?php echo $base_url; ?>/gift/article/inet.php">
						<img
						data-src="../../lib/img/magazine/rent/img-gift.png"
						data-retina="../../lib/img/magazine/rent/img-gift@2x.png"
						alt="賃貸マンション仲介手数料最大50%※OFF"
						style="max-width:514px;"
						class="u-img__max">
					</a>
				</div>

				<ul class="u-small mb-inner">
					<li>※1.2015年10月1日現在　※長谷工ライブネット調べ</li>
					<li>※2.2015年10月1日現在　※長谷工ライブネット調べ</li>
					<li>※長谷工ライブネット管理物件の仲介手数料割引は最大10万円までとなります。</li>
				</ul>
			</section>

			<nav class="u-pager">
				<ul class="u-pager__row">
					<li class="u-pager__item"><a href="rent.php">1</a></li>
					<li class="u-pager__item active"><a href="rent2.php">2</a></li>
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
