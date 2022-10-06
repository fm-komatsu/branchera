<?php
//base
include ("../../function.php");
$content = get_id_data('1005');
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
				<h3 class="u-ttl__l">次世代型マンション企画「Be-Next」はこれまでのマンションとどう違うのですか？</h3>
				<div class="mb3">
					<img
					data-src="../../lib/img/magazine/benext/img09.png"
					data-retina="../../lib/img/magazine/benext/img09@2x.png"
					data-srcset="../../lib/img/magazine/benext/img09-sp@2x.png 666w ,../../lib/img/magazine/benext/img09@2x.png"
					alt="次世代型マンション企画「Be-Next」はこれまでのマンションとどう違うのですか？"
					style="max-width:806px;"
					class="u-img__max"
					>
				</div>



				<div class="ex2">
					<div class="inner">
						<p>こんにちは、堀井さん。本日はよろしくお願いいたします。</p>
					</div>
				</div>

				<div class="balloon">
					<div class="inner">
						<p>こちらこそよろしくお願いします。</p><p>長谷工コーポレーションでは、常により快適な暮らしのための提案を追求しています。その中から生まれた次世代型マンション企画「Be-Next」は、きっとこれからマンションを探す方にとって魅力的な住まいだと思います。</p>
					</div>
				</div>

				<div class="ex2">
					<div class="inner">
						<p>「Be-Next」はかなりの自信作ということですね。<br>それでは早速会員さまからのご質問に直接お答えいただけますでしょうか。</p>
					</div>
				</div>

			</section>

			<section class="main__item" >

				<h4 class="u-ttl__m"><span class="icon">Q</span>「Be-Next」とこれまでのマンションの一番の違いは何ですか？</h4>
				<div class="balloon">
					<div class="inner">
						<h5 class="u-ttl__s">コストを抑えて、より気持ちのいい住まいを実現</h5>
						<p>「Be-Next」は「いい住まいをローコストで」という、難題に挑戦した結果として生まれたマンション企画です。</p>
						<p>まず、私たちがこれまで培ってきた経験を活かし、性能を落とさないシンプルな構造躯体を実現。梁（はり）の幅や柱の位置を工夫することで、広い室内空間を可能にしました。</p>
						<p>また、自然の力で心地よい室内環境を実現するパッシブデザインにより、快適性を高めるだけでなく、冷暖房使用を軽減できる家計にもうれしい住まいになっています。</p>
						<div class="u-position__center">
							<img
							data-src="../../lib/img/magazine/benext/img10.png"
							data-retina="../../lib/img/magazine/benext/img10@2x.png"
							data-srcset="../../lib/img/magazine/benext/img10-sp@2x.png 666w ,
							../../lib/img/magazine/benext/img10@2x.png"
							alt="より気持ちのいい住まいを実現"
							style="max-width: 539px;"
							class="u-img__max"
							>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m"><span class="icon">Q</span>「Be-Next」の特長について教えてください</h4>
				<div class="balloon">
					<div class="inner">
						<h5 class="u-ttl__s">「基本性能の充実」×「自由度の高さ」×「環境+防災」</h5>
						<div class="u-float__left u-only__pc">
							<img
							data-src="../../lib/img/magazine/benext/img11.png"
							data-retina="../../lib/img/magazine/benext/img11@2x.png"
							alt="「基本性能の充実」×「自由度の高さ」×「環境+防災」"
							style="max-width: 221px;"
							class="u-img__max"
							>
						</div>
						<p>まず住む方が安心して快適に過ごせることが、住まいの絶対条件です。</p>
						<p>その上で、住む方それぞれが、ライフスタイルにあわせて暮らしていける「可変性の高さ」や「リフォームへの対応力」をプラスしました。</p>
						<p>そして、せっかくの住まいなので、できる限り永く住んでいただきたいという想いから、環境配慮と防災への備えにも力を注いでいます。</p>
						<div class="u-position__center u-only__sp">
							<img
							data-src="../../lib/img/magazine/benext/img11.png"
							data-retina="../../lib/img/magazine/benext/img11@2x.png"
							alt="「基本性能の充実」×「自由度の高さ」×「環境+防災」"
							style="max-width: 221px;"
							class="u-img__max"
							>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m"><span class="icon">Q</span>基本性能は具体的にどこが充実しているのですか？</h4>
				<div class="balloon">
					<div class="inner">
						<h5 class="u-ttl__s">広い空間で気持ちよく暮らすためのアイデアがぎっしり</h5>
						<div class="u-float__right u-only__pc">
							<img
							data-src="../../lib/img/magazine/benext/img19.png"
							data-retina="../../lib/img/magazine/benext/img19@2x.png"
							alt="風通しが格段に違う玄関窓"
							style="max-width: 149px;"
							class="u-img__max"
							>
						</div>
						<p>「できれば広い空間で暮らしたい」、多くの方が同じ思いではないでしょうか。</p>
						<p>ですので、限られた空間を最大限有効活用できるよう、梁型や柱型が室内に出っ張らないように柱・梁の形やレイアウトを工夫しています。そうすることにより、すっきりした空間となり家具レイアウトの自由度が広がります。</p>
						<p>また、マンションは構造的に玄関に風がこもりやすくなっています。一度、試しに玄関を少し開けて過ごしてみてください。風通しが格段に違うはずです。</p>
						<p>そこで、「Be-Next」ではプライバシーに配慮した窓付き玄関を開発し、風通しのいい住まいを実現しました。</p>
						<div class="u-position__center u-only__sp">
							<img
							data-src="../../lib/img/magazine/benext/img19.png"
							data-retina="../../lib/img/magazine/benext/img19@2x.png"
							alt="風通しが格段に違う玄関窓"
							style="max-width: 149px;"
							class="u-img__max"
							>
						</div>
					</div>
				</div>


				<h4 class="u-ttl__m"><span class="icon">Q</span>自由度は具体的にどこが優れているのですか？</h4>
				<div class="balloon">
					<div class="inner">
						<h5 class="u-ttl__s">キッチンの可変性が、住まいの自由度を大きく変える。</h5>
						<p>みなさんは横長と縦長、どちらのリビングが好きですか？私はバルコニーに面して個室を確保できる縦長リビングが好きです。でも、陽差しをたくさん取り込める横長リビングが好きという方も多いと思います。しかし今までの普通のマンションでは、1つの住戸で横長と縦長のリビングを選べるようなメニュープランはできませんでした。</p>
						<p>「Be-Next」ではこれまで不可能だった、水回りのプランを工夫してキッチンを移動させることにより、リビングの縦長・横長という2つのバリエーションを用意することができるようになりました。将来、ライフステージの変化にあわせてリフォームしたいときにも、キッチン位置を変更できるので、ライフステージにあわせて一番快適な間取りを作ることができます。</p>
						<p>さらに、長谷工コーポレーションのマンションには「E-label（えらべる） 」という間取り、カラーリング、バスタブ形状やキッチン高さ、そして設備を選べるシステムがあります。この「E-label」もあわせて活用いただくことで、住む方のこだわりを細やかに実現することができます。</p>
						<div class="u-position__center">
							<img
							data-src="../../lib/img/magazine/benext/img12.png"
							data-retina="../../lib/img/magazine/benext/img12@2x.png"
							alt="可変性の高いキッチンレイアウトと「E-label（えらべる） 」"
							style="max-width: 510px;"
							class="u-img__max"
							>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m"><span class="icon">Q</span>環境＋防災でのこだわりを教えてください</h4>
				<div class="balloon">
					<div class="inner">
						<h5 class="u-ttl__s">ランニングコストを抑えるパッシブデザイン</h5>
						<div class="u-position__center">
							<img
							data-src="../../lib/img/magazine/benext/img13.png"
							data-retina="../../lib/img/magazine/benext/img13@2x.png"
							alt="約2.2mのハイサッシ"
							style="max-width: 511px;"
							class="u-img__max"
							>
						</div>
						<p>太陽光パネルなどの機械による環境技術に頼るだけでなく、住まいづくりの工夫やアイデアによって環境に配慮する住まいをつくることはできないだろうかと考えてたどり着いたのが、自然の力を上手に取り込んで心地よい環境を実現するパッシブデザインです。</p>
						<p>約2.2mのハイサッシで日光をふんだんに取り入れ、窓付き玄関で気持ちの良い風の流れを生み出す住まいは、エアコンの使用量も抑えられるので、環境だけでなく、家計にもやさしいデザインとなっています</p>
					</div>
				</div>
				<div class="balloon">
					<div class="inner">

						<h5 class="u-ttl__s">実際に東日本大震災でも活躍した防災3点セット</h5>
						<p>「Be-Next」では、災害直後の生活基盤を確保するための設備として、非常用飲料水生成システム「WELL UP」、マンホール上に設置して使用する「非常用マンホールトイレ」、非常時の炊き出し用にかまどとして使用できる「かまどスツール」という防災3点セットを導入しています。</p>
						<p>実際に東日本大震災が発生した際に震災で水が止まってしまった物件でも、防災3点セットは大活躍しました。
						</p>
						<div class="u-position__center">
							<img
							data-src="../../lib/img/magazine/benext/img14.png"
							data-retina="../../lib/img/magazine/benext/img14@2x.png"
							alt="防災3点セット"
							style="max-width: 596px;"
							class="u-img__max"
							>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m"><span class="icon">Q</span>そもそも「Be-Next」はどういった経緯で生まれたのですか？</h4>
				<div class="balloon">
					<div class="inner">
						<h5 class="u-ttl__s">時代の流れにあわせて進化してきた長谷工のマンション企画</h5>
						<div class="u-float__right u-position__center">
							<img
							data-src="../../lib/img/magazine/benext/img15.png"
							data-retina="../../lib/img/magazine/benext/img15@2x.png"
							alt="Be-Next採用第1号物件「ブランシエラ検見川浜マイム」"
							style="max-width: 237px;"
							class="u-img__max"
							>
						</div>
						<p>「Be-Next」の原型となったのは、高騰した不動産価格のなかで「できる限りコストを抑えながら、安心して暮らせる住まいを」と開発した「Be-Liv（ビーリブ）」です。</p>
						<p>「Be-Liv」では、私たちの培ってきたノウハウを結集し、性能をキープしたまま構造躯体をシンプルにすることで、しっかりした基本性能の確保とローコストの両立を実現しました。</p>
						<p>そのシンプルな「Be-Liv」をベースに、数々の付加価値を加えることにより、住む方によって異なる多様な暮らし方に応えることができる「Be-Next」が生まれ、「ブランシエラ検見川浜マイム」がBe-Next採用第1号物件となりました。</p>
					</div>
				</div>
				<div class="balloon">
					<div class="inner">
						<h5 class="u-ttl__s">良質な社会資産をつくることも、私たちの大切な仕事です</h5>
						<p>「Be-Next」の根底には、ヨーロッパの建築のように、リフォームしながら建築物を長持ちさせて暮らし続けていくという考え方があります。今までの日本のマンションでは、なかなかこうした考えを実現しづらかったのですが、今後はスクラップアンドビルドを脱して、リフォームをしながら永く住まい続けていくという考え方が主流になっていくと思います。</p>
						<p>「Be-Next」ではシンプルな構造躯体、リフォームに適した凹凸の少ない空間づくり、そしてリフォーム時にもレイアウトを変更できる水廻りを実現することで、そうした時代の変化に対応できるマンションを創造していきます。</p>
					</div>
				</div>

				<img
				data-src="../../lib/img/magazine/benext/img18.png"
				data-retina="../../lib/img/magazine/benext/img18@2x.png"
				data-srcset="../../lib/img/magazine/benext/img18-sp@2x.png 666w, ../../lib/img/magazine/benext/img18@2x.png"
				alt="なるほど、本当に必要なものを見極められるから、コストを変えずに、暮らしやすく、気持ちのいいマンションを作ることができるのですね。「Be-Next」はやはり、たくさんのマンションに関わってきた施工実績No.1の長谷工コーポレーションだから生み出すことができた、これからの時代にふさわしいマンション企画だと感じました。"
				style="max-width: 669px;"
				class="u-img__max">

			</section>

			<nav class="u-pager">
				<ul class="u-pager__row">
					<li class="u-pager__item "><a href="benext.php">1</a></li>
					<li class="u-pager__item active"><a href="benext2.php">2</a></li>
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
