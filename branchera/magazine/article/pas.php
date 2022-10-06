<?php
//base
include( "../../function.php" );
$content = get_id_data( '1003' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '　1/2」-' . siteName();
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
		$panAry[] = array( "/magazine/index_technology.php", "長谷工の技術・サービス" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
		<div class="main__wrapper">
		<section class="main__item">
			<div class="center mb6">
				<h3>
					<img
					data-src="../../lib/img/magazine/pas/img07.png"
					data-retina="../../lib/img/magazine/pas/img07@2x.png"
					alt="「長谷工プレミアムアフターサービス」の特徴"
					style="max-width:659px;"
					class="u-img__max"
					usemap="#Map"
					>
					<map name="Map">
						<area shape="rect" coords="16,126,206,192" href="#p01">
						<area shape="rect" coords="221,126,449,192" href="#p02">
						<area shape="rect" coords="461,126,646,193" href="#p03">
					</map>
				</h3>


			</div>

			<div class="mb6">
				<h4 class="u-ttl__m">ポイント<span class="icon">１</span>直接対応</h4>

				<div class="img fr"><img src="../../lib/img/magazine/pas/img15.png" alt="お客さまの声">
				</div>
				<p><strong>『住まいの不具合を、すぐに相談したい。』</strong></p>

				<p>そんなお客さまの声にお応えするため、マンションの施工会社である長谷工コーポレーションがご相談に直接お答えする「コールセンター」を設置しました。</p>

				<p>例えばバルコニーに出るためのサッシの開閉がうまくいかなくなってしまったとします。従来では、まず管理会社に相談、その後に管理会社から売主へ、さらに売主から施工会社へと連絡が入り…。</p>
				<p>「長谷工プレミアムアフターサービス」をご利用のお客さまは、不具合を発見したら<strong>直接コールセンターへお電話</strong>いただけますので、素早くきめ細やかな対応が可能です。</p>

				<p style="margin-bottom: 24px;">また、緊急時にいつでもご対応できるよう、コールセンターは<strong>24時間365日</strong><sub class="u-small">※</sub>ご相談を受付しております。</p>

        <div class="flex flex_center">
				<div class="img mb2">
					<img
					data-src="../../lib/img/magazine/pas/img10.png"
					data-retina="../../lib/img/magazine/pas/img10@2x.png"
					alt="従来のお問い合わせの流れ"
					style="max-width: 494px"
					class="u-img__max"
					>
				</div>
				<div class="img">
					<img
					data-src="../../lib/img/magazine/pas/img11.png"
					data-retina="../../lib/img/magazine/pas/img11@2x.png"
					alt="長谷工プレミアムアフターサービスのお問い合わせの流れ"
					style="max-width: 494px;"
					class="u-img__max"
					>
				</div>
        </div>
				<p class="u-small">※ 夜間や土･日･祝日、全社休業日は、アウル24センター（マンション監視センター）にて受付いたします。</p>

			</div>
			<div class="mb10">
				<h4 class="u-ttl__m">ポイント<span class="icon">２</span> コールセンターのスタッフがプロフェッショナル</h4>

				<div class="img fr">
					<img
					data-src="../../lib/img/magazine/pas/img00.png"
					data-retina="../../lib/img/magazine/pas/img00@2x.png"
					alt="コールセンターのスタッフ"
					style="max-width: 363px;"
					class="u-img__max"
					>
				</div>

				<p>コールセンターへのご相談内容は、水漏れなどの緊急対応のご依頼から、お部屋のリフォームなどのご相談まで様々です。「長谷工プレミアムアフターサービスコールセンター」では、お客さまの多様なご相談にスムーズにお応えできるよう、<strong>「一級建築士」などの専門分野資格を取得しているスタッフが直接</strong>お電話にて対応させていただいております。</p>

				<p class="mb2">また、長谷工コーポレーションの施工したマンションの情報は、設計からマンションご購入時にお選びいただいたお部屋の間取りまで、すべてお調べすることが可能です。皆さまがお住まいのマンションに詳しい<strong>「専門スタッフ」</strong>が、様々なご相談を<strong>「直接」</strong>解決いたします。</p>
			</div>
			<div>

				<h4 class="u-ttl__m">ポイント<span class="icon">３</span> アフターサービス期間を大幅延長</h4>
				<p><strong>マンションにお住まいの皆さまに、安心を永くお届けしたい。</strong>
				</p>
				<p>そんな思いから、アフターサービスの保証期間を従来に比べ大幅に延長いたしました。</p>
				<p class="mb2">さらに、今まで施工会社による点検のなかった共用部を、長谷工コーポレーションの技術スタッフが定期的に点検を実施。<strong>専有部だけではなく、マンション全体をサポート</strong>することで、より一層の安心を得られるサービスとなりました。</p>
				<div class="img mb5">
					<img
					data-src="../../lib/img/magazine/pas/img01.png"
					data-retina="../../lib/img/magazine/pas/img01@2x.png"
					alt="アフターサービス期間"
					style="max-width: 609px;"
					class="u-img__max"
					>
				</div>
				<div class="mb4"><a href="http://www.haseko.co.jp/hc/what/closeup/pas/service/longterm.html" target="_blank" rel="nofollow" class="u-btn_l u-icon center">独自の長期アフターサービスの詳細はこちら</a>
				</div>
			</p>


			<div class="ex2">
				<div class="inner">
					<p>施工会社によるアフターサービスだから、住んでいるマンションを最も熟知した人たちが、素早く直接対応してくれるんですね。</p>
				</div>
			</div>
		</div>
    </section>
		<nav class="u-pager">
			<div class="u-pager__ttlwrap"><h6 class="u-pager__ttl"><a href="pas2.php" class="u-pager__link"><span class="u-pager__text">24時間365日、こんなことまでご対応します！</span></a></h6></div>
			<ul class="u-pager__row">
				<li class="u-pager__item active"><a href="pas.php">1</a></li>
				<li class="u-pager__item"><a href="pas2.php">2</a></li>
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
