<?php
//base
include ("../../function.php");
$content = get_id_data('1006');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「'.$pageTtl.'」-'.siteName();
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

				<h2 class="u-ttl__l">「マンション建て替え事業」 Q&Aコーナー</h2>

				<div class="mb3">
					<img
					src="../../lib/img/magazine/bcyamamoto/img05.png"
					alt="「マンション建て替え事業」 Q&Aコーナー"
					style="max-width:806px"
					class="u-img__max u-only__pc">
					<img
					src="../../lib/img/magazine/bcyamamoto/img05-sp@2x.png"
					alt="「マンション建て替え事業」 Q&Aコーナー"
					class="u-img__max u-only__sp">
				</div>

				<div class="ex2">
					<div class="inner">
						<div>
							<p>こんにちは、大角さん。本日はよろしくお願いします。</p><p>マンション再生や建て替え事業は、なかなかスムーズに進めるのが難しいと聞いていますが、本当ですか？</p>
						</div>
					</div>
				</div>
				<div class="balloon">
					<div class="inner">
						<div>
							<p>こちらこそよろしくお願いします。</p><p>そうですね。建て替え事業は、住んでいる方の8割以上の合意が必要なので、やはり簡単には進みません。私が担当した「ブランシエラ山本町南」も、みなさんが納得できる建て替えを提案するまでには、紆余曲折がありました。</p>
						</div>
					</div>
				</div>
				<div class="ex2">
					<div class="inner">
						<div>
							<p>今日はぜひ、実際に建て替えの際にどのような大変さがあるのかを聞かせてください。よろしくお願いします。</p>
						</div>
					</div>
				</div>

			</section>

			<section class="main__item">

				<h3 class="u-ttl__m u-icon__q">まず建て替えに至った経緯と背景を教えてください。</h3>
				<div class="balloon">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">老朽化などの問題を抱えていた山本団地</h5>
							<div class="b-float__row">
								<div class="b-float__item_right">
									<img
									data-src="../../lib/img/magazine/bcyamamoto/img06.png"
									data-retina="../../lib/img/magazine/bcyamamoto/img06@2x.png"
									alt="建て替え前のブランシaエラ山本町南"
									width="241"
									height="167"
									class="u-float__right">
								</div>
								<p>建て替え前の山本団地は建設されてから57年が経過し、老朽化などの問題を抱えていました。</p>
								<p>そこでUR都市機構と連携しながら建て替えの検討を進め、2013年6月に100％の全員合意を得て建て替え決議が可決されました。</p>
							</div>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">建て替え事業を進める際、心がけていることを教えてください。</h4>
				<div class="balloon">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">対話を大切にし、気持ちに寄り添いながら信頼関係を築くこと</h5>
							<div class="u-only__pc">
								<img
								data-src="../../lib/img/magazine/bcyamamoto/img07.png"
								data-retina="../../lib/img/magazine/bcyamamoto/img07@2x.png"
								width="333"
								height="184"
								class="u-float__right">
							</div>
							<p>建て替え時に直面する様々な課題に対し、建て替え組合の立場に立って対応することを心がけています。検討段階では管理組合さまと何度もお話しの場を設けさせていただきました。</p>
							<p>建て替え事業では組合との折り合いが大きな課題になるので、住まう方一人ひとりとの対話を大切にし、しっかりと気持ちに寄り添うことで、強い信頼関係を築くことを心がけています。</p>
							<div class="u-only__sp u-position__center">
								<img
								data-src="../../lib/img/magazine/bcyamamoto/img07.png"
								data-retina="../../lib/img/magazine/bcyamamoto/img07@2x.png"
								class="u-img__max">
							</div>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">今回の建て替え事業で苦労したことを教えてください。</h4>
				<div class="balloon">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">全員合意による共有敷地分割と、建築費アップの提案</h5>

							<p>山本団地は分譲棟と賃貸等が混在していたため、UR都市機構の協力の下、全員合意により共有敷地の分割を行いました。また、建築資材や労務費などの高騰で、何度も建築費アップを提案する必要がありました。</p>
							<p>どちらも、簡単に理解を得ることは難しい内容でしたので、理事会や住まう方一人ひとりに粘り強くお話しさせていただき、了承をいただきました。</p>
						</div>
					</div>
				</div>


				<h4 class="u-ttl__m u-icon__q">建て替え事業における長谷工の強みを教えてください。</h4>
				<div class="balloon">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">国内トップクラスの建て替え実績</h5>
							<p>マンション再生において業界トップクラスの実績があり、建て替えでは国内最大シェアである約14％<sup>※1</sup>をお手伝いしています。コンサルタント、ゼネコン、デベロッパーとしての役割を1つの窓口で対応できることが、長谷工の強みとなっています。</p>
							<p class="u-small">※1 長谷工総合研究所調べ</p>
						</div>
					</div>
				</div>
			</section>
			<section class="main__item">

				<h4 class="u-ttl__m u-icon__q">「ブランシエラ山本町南」の建て替え事業ならではの特長を教えてください。</h4>
				<div class="balloon2">
					<div class="inner">
						<div>
							<p>「ブランシエラ山本町南」の特長については、プランニング等を担当した私がご説明させていただきます。</p>
						</div>
					</div>
				</div>

				<div class="ex2">
					<div class="inner">
						<div>
							<p>芝田さん、よろしくお願いします</p>
						</div>
					</div>
				</div>

				<div class="balloon2">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">親しまれてきた桜並木を継承した、四季を感じる景観づくり</h5>
							<img
							data-src="../../lib/img/magazine/bcyamamoto/img09.png"
							data-retina="../../lib/img/magazine/bcyamamoto/img09@2x.png"
							alt="四季を感じる景観づくり"
							style="max-width:295px"
							class="u-only__pc u-float__right u-img__max">
							<p>まず、この建替え事業でプランニングを担当するにあたって一番意識したことは、山本団地が半世紀以上にわたり様々な方に親しまれてきた場所だということです。</p>
							<p>住まう方はもちろん、かつて住んでいた方、周辺に暮らす方にとって、山本団地の景観は自分たちの手で育み見守ってきたものだということを強く意識しました。</p>
							<p>そこで、特に山本団地の美しさを象徴していた玉串川の桜を計画の中心に据え、敷地北側にもシンボルツリーとして桜をプランニングしました。また、南側にはイロハモミジなどの落葉樹を配置し、敷地全体で季節の移り変わりを感じられる景観を描き上げました。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">山本団地に住まわれていた方の意見や要望が反映された箇所を教えてください。</h4>
				<div class="balloon2">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">街への強い愛着に配慮した物件名称</h5>
							<p>山本町南エリアは、1929年からの住友財閥による住宅街の整備によって形成された、大阪を代表するお屋敷街です。なので、皆さん、やはり街への強い愛着をお持ちでした。そこで、物件名称にも街の名前を冠しました。</p>
							<p>また、弊社施工物件のモデルルームをご見学いただいた際、開放感あふれるハイサッシや共用廊下側の柱も外出しにしたアウトフレーム工法等を実現した「Be-Next」が好評でしたので、本物件にも採用しました。</p>
							<a href="http://www.haseko.co.jp/branchera/magazine/article/benext.php" class="u-btn u-position__center"><span>「Be-Next」の詳細はこちら</span></a>

						</div>
					</div>
				</div>

				<h4 class="u-ttl__m u-icon__q">山本団地に住まわれていた方に好評な特徴を教えてください。</h4>
				<div class="balloon2">
					<div class="inner">
						<div>
							<h5 class="u-ttl__s">長谷工グループの独自サービスが好評</h5>
							<div class="b-float__row">
								<div class="b-float__item_left">
									<img
									src="../../lib/img/magazine/bcyamamoto/img11.png"
									data-src="../../lib/img/magazine/bcyamamoto/img11@2x.png"
									alt="長谷工グループの独自サービス"
									style="max-width:264px;"
									height="128"
									class="u-img__max">
								</div>
								<p>グループ会社「長谷工アネシス」が提供するエコシステム「高圧一括受電サービス」は専有部の電気料金が5%削減されるとあって好評です。</p>
								<p>また「長谷工プレミアムアフターサービス」の長期保証や居住者専用サイト「素敵ネット」は、長谷工独自のサービスなので、ぜひ活用いただきたいと考えています。</p>
							</div>
						</div>
					</div>
				</div>

				<img
				data-src="../../lib/img/magazine/bcyamamoto/img12.png"
				data-srcset="../../lib/img/magazine/bcyamamoto/img12-sp@2x.png 666w , ../../lib/img/magazine/bcyamamoto/img12@2x.png"
				alt="なるほど、マンションや、マンションに住まう方のことを知り尽くしている長谷工だからこそ、一人ひとりが納得できる「理想の暮らし」が実現できるのですね。住まう方との対話を大切にし、住まう方の思いに寄り添う提案を可能にする経験と実績が、長谷工の建て替え事業の特長だということが分かりました。"
				style="max-width:679px;"
				height="146"
				class="u-img__max u-position__center">

			</section>

			<nav class="u-pager">
				<ul class="u-pager__row">
					<li class="u-pager__item "><a href="bcyamamoto.php">1</a></li>
					<li class="u-pager__item active"><a href="bcyamamoto2.php">2</a></li>
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
