<?php
//base
include ("../../function.php");
$content = get_id_data('1015');
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
		<section class="main__wrapper">
			<h3 class="u-ttl__l">長谷工のインテリア相談サービス「インテリアサロン」 Q&amp;Aコーナー</h3>
			<div class="product-img center mb4">
				<div class="u-only__pc">
					<img
					data-src="../../lib/img/magazine/intech/img07.png"
					data-retina="../../lib/img/magazine/intech/img07@2x.png"
					alt="長谷工のインテリア相談サービス「インテリアサロン」 Q&Aコーナー"
					style="max-width:720px;"
					class="u-img__max"
					>
				</div>
			</div>


			<div class="ex2">
				<div class="inner">
					<div>
						<p>こんにちは石井さん。本日はインテリアサロンについていろいろお聞きしたいと思っています。</p>
					</div>
				</div>
			</div>
			<div class="balloon">
				<div class="inner">
					<div>
						<p>こんにちは。インテリアサロンでは、年間100棟を超えるマンションのモデルルームを手がけてきた経験と8万件を超えるインテリア相談で培ったノウハウを活かし、お客様の一生モノの家具との出会いをお手伝いしています。ぜひ、たくさんの方にご活用いただきたいですね。</p>
					</div>
				</div>
			</div>
			<div class="ex2">
				<div class="inner">
					<div>
						<p>では、さっそく具体的なインテリアサロンの魅力や活用方法を教えてください。</p>
					</div>
				</div>
			</div>


			<h4 class="u-ttl__m u-icon__q">まずインテリアサロンの特徴を教えてください。</h4>
			<div class="balloon">
				<div class="inner">
					<div>
						<h5 class="u-ttl__s">大切にしているのは、お客さまが本当に欲しい家具に気づくこと。</h5>
						<div class="img fr">
							<img
							data-src="../../lib/img/magazine/intech/img09.png"
							data-retina="../../lib/img/magazine/intech/img09@2x.png"
							alt="image"
							style="max-width: 251px;"
							class="u-img__max"
							>
						</div>
						<p>インテリアサロンが最も大切にしていることは、家具を販売することではなく、「お客さまが本当に欲しい家具は何かを知ること」です。ここが他のインテリアショップ等との一番大きな違いだと思います。</p>
						<p>そして、「本当に欲しい家具」をきちんとご紹介できるように、30を超える家具メーカーと連携し、何万点ものアイテムからこだわりの逸品をご提案できるようにしています。</p>
					</div>
				</div>
			</div>

			<h4 class="u-ttl__m u-icon__q">専任のコンシェルジュはどんな人たちですか。</h4>
			<div class="balloon">
				<div class="inner">
					<div>
						<h5 class="u-ttl__s">インテリアについての幅広い経験と知識で、お客さまに最適の家具をご提案します。</h5>

						<p>インテリアサロンのコンシェルジュは、インテリアコーディネートの資格を持つスタッフやインテリア業界で現役で活躍するスタッフ、30を超える家具メーカーの各アイテムについての深い知識を持つスタッフなどです。</p>
						<p>もちろん、どのスタッフも多彩なインテリア相談の経験を積んでいます。<br>インテリアサロンに足を運ぶことのできない遠方のお客さまにも、電話とメールでの相談の中で、きちんとお客さまの「本当に欲しい家具」に気づき、ぴったりのモノをご提案することができます。</p>
					</div>
				</div>
			</div>

			<h4 class="u-ttl__m u-icon__q">連携する家具メーカーはどのように選んでいるのですか。</h4>
			<div class="balloon">
				<div class="inner">
					<div>
						<h5 class="u-ttl__s">一生のつきあいにふさわしい家具をご提案できるメーカーを選んでいます。</h5>
						<div class="img fr">
							<img
							data-src="../../lib/img/magazine/intech/img08.png"
							data-retina="../../lib/img/magazine/intech/img08@2x.png"
							alt="インテリアサロンが連携している家具メーカー"
							style="max-width: 206px;"
							class="u-img__max"
							>
						</div>
						<p>インテリアサロンが連携している家具メーカーは3つの基準で選んでいます。ひとつ目は実際にモデルルームデザインとして使用し、来場した方から好評だったメーカーであること。</p>
						<p>ふたつ目は、様々なライフスタイルやお好みに合わせられるよう、「デザイン」「使われている素材」「価格」において幅のある提案ができること。</p>
						<p>そして3つ目は、張り替えなど将来的なメンテナンスに対応できるアイテムも多く、一生のつきあいにふさわしい家具メーカーであることです。</p>
					</div>
				</div>
			</div>


			<h4 class="u-ttl__m u-icon__q">家具を選ぶ際に気を付けるべきポイントを教えてください。</h4>
			<div class="balloon">
				<div class="inner">
					<div>
						<h5 class="u-ttl__s">やはり第一は、自分のライフスタイルやこだわりをきちんと知ること。</h5>
						<p>実は、インテリアサロンのお客さまのなかで、最初からはっきりと欲しい家具が決まっている方は多くありません。また「この家具が欲しい」とおっしゃるお客さまも、本当にその家具が自分にとってベストなのかどうか、確信を持てていない方がほとんどです。</p>
						<p>なので、私たちは、まずはお気軽にお話いただける相談相手になることを心がけています。たとえば「できる限り掃除を簡単に済ませたい」というような日常生活のこだわりやご家族の将来設計などをうかがい、時には世間話も交えながらお客さまにとっての「本当に欲しい家具」が何なのかを一緒に考えています。</p>

						<div class="img"><img src="../../lib/img/magazine/intech/img11.png" alt="一生付き合える家具との出会いは、自分のライフスタイルやこだわりを知ることから"></div>
						<p>本当に欲しい家具、一生付き合える家具との出会いは、やはり自分のライフスタイルやこだわりを知ることから始まります。家具をご検討の方は、ぜひお気軽にインテリアサロンにご相談いただければと思います。</p>

					</div>
				</div>
			</div>

			<div class="balloon">
				<div class="inner">
					<div>
						<h5 class="u-ttl__s">自分に適したサイズをきちんと選ぶこと。</h5>
						<p>家具選びでは、お店で見ると素敵だったのに、実際に家で見ると大きくて圧迫感があったり、逆に小さすぎて他の家具とのバランスが悪かったという失敗をしがちです。</p>

						<p>インテリアサロンでは、図面を拝見し、その図面上に家具シールをレイアウトしていくことで、実際に部屋に入れた時のサイズ感を確認しながら家具をご提案しています。また、ご家族の体型や主な使い方をおうかがいすることで、体にフィットしやすく快適に使うことができるサイズの家具をご提案しています。</p>
						<div class="img">
							<img src="../../lib/img/magazine/intech/img12.png" alt="家具レイアウトシール"
							<img
							data-src="../../lib/img/magazine/intech/img12.png"
							data-retina="../../lib/img/magazine/intech/img12@2x.png"
							alt="家具レイアウトシール"
							style="max-width: 596px;"
							class="u-img__max"
							>
						</div>
					</div>
				</div>
			</div>




			<h4 class="u-ttl__m u-icon__q">印象に残っている相談はありますか。</h4>
			<div class="balloon">
				<div class="inner">
					<div>
						<h5 class="u-ttl__s">カーテンだけでなく、リモコンの色にまでこだわるお客さまの家具をトータルにコーディネート。</h5>
						<div class="img fr">
							<img
							data-src="../../lib/img/magazine/intech/img13.png"
							data-retina="../../lib/img/magazine/intech/img13@2x.png"
							alt="照明やカーテンだけでなく、リモコンの色にもこだわり"
							style="max-width: 217px;"
							class="u-img__max"
							>
						</div>
						<p>ご夫婦お二人でマンションにお住まいになるお客さまがとても印象に残っています。</p>
						<p>その方は、当初はテーブルをお探しで、既に他社のインテリアショールームでお見積りもとられていました。インテリアサロンにも相談ではなく、お見積りを比較する目的でご連絡をいただきました。</p>
						<p>しかし、私たちが従来通りお客さまのライフスタイルや好みをお伺いしていると、実は、照明やカーテンだけでなく、リモコンの色にもこだわりたい、毎日を優雅に愉しむための上質な家具をお探しの方であることが分かりました。お客さまも私たちと相談しながら、雑誌の切り抜きや色々なショールームのサンプルを持って来られるようになり、最終的には「家具をトータルにコーディネートしてほしい」という話になりました。</p>
						<p>実際に家具が搬入された後に、「自分でもわからなかった本当に欲しい家具を見つけてくれてありがとう」というご連絡をいただき、とてもうれしく思ったことを今も鮮明に記憶しています。</p>
					</div>
				</div>
			</div>

			<div class="balloon">
				<div class="inner">
					<div>
						<h5 class="u-ttl__s">5年後に手に入れたい家具までご要望いただいているお客さま。</h5>
						<p>この方は当初は、「できる限りオトクに家具を手に入れたい」とおっしゃっていました。実際にご相談に来られてから購入までの間に、13回お見積りを出させていただきました。</p>
						<p>しかし、何度かやりとりをさせていただいている中で、お客さまの家の歴史などもお話いただけるようになり、最終的には「できる限りオトクに」ではなく、「ご自身やお住まいにとって一番いいモノが欲しい」という風に思われるようになりました。そして、最初にソファとダイニングセットをご購入いただいてからは、サイドテーブルやお子さま用のチェアもご購入いただき、「次は子どもが大きくなる5年後くらいにテレビボードを購入したい」というご要望までいただいています。</p>

						<div class="img">
							<img
							data-src="../../lib/img/magazine/intech/img14.png"
							data-retina="../../lib/img/magazine/intech/img14@2x.png"
							alt="5年後に手に入れたい家具までご要望いただいているお客さまも"
							style="max-width: 413px;"
							class="u-img__max"
							>
						</div>
						<p>実際に、インテリアサロンはリピートのお客さまが多いのですが、その大半は価格的な満足だけではなく、「本当のお気に入りに出会えた」とおっしゃっていただけたお客さまです。</p>
					</div>
				</div>
			</div>


			<div class="img u-only__pc mb3">
				<img
				data-src="../../lib/img/magazine/intech/img20.png"
				data-retina="../../lib/img/magazine/intech/img20@2x.png"
				alt="なるほど、多彩なモデルルームデザインを手がけてきた経験・実績と、何度も相談できる専任のコンシェルジュがいるから、満足度の高いこだわりの逸品に出会えるのですね。"
				style="max-width: 518px;"
				class="u-img__max"
				>
			</div>

			<div class="img u-only__pc center mb3"><a href="<?php echo $base_url ?>/gift/article/furniture.php">
				<img
				data-src="../../lib/img/magazine/intech/img-gift.png"
				data-retina="../../lib/img/magazine/intech/img-gift@2x.png"
				alt="ブランド家具ご購入優待割引"
				style="max-width: 514px;"
				class="u-img__max"
				>
			</a></div>

			<nav class="u-pager">
				<ul class="u-pager__row">
					<li class="u-pager__item"><a href="intech.php">1</a></li>
					<li class="u-pager__item active"><a href="intech2.php">2</a></li>
				</ul>
			</nav>

		</section>
	</article>
</main>

<?php
$toindex_url = "/magazine/index_technology.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
