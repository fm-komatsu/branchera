<?php
//base
include( "../../function.php" );
$content = get_id_data( '12006' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '片付けの専門家が監修！片付けられない家族を救うためのマンガコラム。第6話は片づけるのが面倒に感じてしまう洋服のたたみ方の基本方法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>

<main class="main comic">
	<article class="main__row">
		<?php
    $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
    $panAry[] = array( "/magazine/index_comic01.php", "何でか、部屋が片付かない。" );
    include( $inc_path . "/lib/inc/pan.php" );
    ?>
		<?php
      include( $inc_path . "/lib/inc/page/_magazine/__comicex-header.php" );
    ?>

	<section class="comic main__wrapper">
		<div class="comic-header__ex">
			<!-- <div class="comic-header__tags u-tags">
				<h5 class="u-tags__ttl">キーワード</h5>
				<div class="u-tags__row">
					<?php echo show_content_tags($content); ?>
				</div>
			</div>
		-->
				<h2 class="comic-header__ttl"><?php echo $pageTtl; ?></h2>
		</div>

		<div class="intro">
			<p>片付けが苦手な私、サクラが最も苦手としているのが「洋服の片付け」。洗濯をして、干した後にたたんで片付けるのがどうも面倒に感じてしまって、洗濯物の山ができちゃうんだよね。前回、お母さんに洋服の整理方法を教えてもらってかなり整理はできたんだけど。<br>この洗濯物たち…やっぱ、たたまないとダメェ～！？</p>
		</div>

		<p style="text-align: right" class="mb4">&raquo; 前回はこちら<a href="comic-tidy05.php">「第5話　服の片付けは戦に似てる？いざ、洋服の山へ！」</a>
		</p>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
			</figure>
			<p>はぁぁああぁ…</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
			</figure>
			<p>どんなにため息ついたって<br>この洗濯物は飛んでいかないわよ！</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
			</figure>
			<p>いやさ、そもそも洗濯物ってたたんでも<br>片付ける時にはグチャってなっちゃうんだよねー</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
			</figure>
			<p>もう、なにそれ？<br>ちょっと試しにこのシャツたたんでみなさいよ</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
			</figure>
			<p>みぃちゃんもやるー</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
			</figure>
			<p>んと、まずは袖を折りたたんで…</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
			</figure>
			<p>（うわっ…ボタン全部空いてる）</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
			</figure>
			<p>えーっと…こっちの袖は…</p>
		</div>

		<div class="center mb3">
			<img data-src="../../lib/img/magazine/comic01/vol06/img01.jpg" data-retina="../../lib/img/magazine/comic01/vol06/img01@2x.jpg" alt="" style="max-width: 740px;" class="u-img__max">
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
			</figure>
			<p>はいはい、もういいわっ！<br>今回は、洋服のたたみ方の基本を教えるわ！</p>
		</div>

		</section>
		<section class="comic-pink kaasan">
			<div class="wrapper">
				<p class="teach">
					<img data-src="../../lib/img/magazine/comic01/img02.png" data-retina="../../lib/img/magazine/comic01/img02@2x.png" alt="お母さんからのアドバイス" style="" class="u-img__max">
				</p>
				<h3>ポイントは「自立できるたたみ方」よ</h3>
				<p>まず、洋服をたたむ上で大切なことは、洋服のたたみ方を統一させることなの。<br>
					たたみ方には色々あるけれど、出し入れのしやすさと探しやすさを優先させるのであれば、<br class="u-only__pc">
					<strong class="red">洋服が自立できるたたみ方</strong>がオススメね。
				</p>
				<p>

					自立するたたみ方をするには、<strong class="red">洋服の中心が山になるように、四角くたたんでいくこと</strong>がコツなの。四角の幅と高さは、収納ボックスや収納タンスのサイズに合わせて調整すると、片付けの時にグチャっとならなくなるわ。
				</p>

				<h3>ポイントを覚えたら、実践あるのみよ！四角くたたんでいくのよ！</h3>
				<p>まずは、袖ありのトップスをたたむ方法で、基本を叩き込むわよ！</p>

				<div class="center mb2">
					<img data-src="../../lib/img/magazine/comic01/vol06/img02.jpg" data-retina="../../lib/img/magazine/comic01/vol06/img02@2x.jpg" alt="" style="max-width: 740px;" class="u-img__max">

				</div>

				<div class="u-assist">
					<strong>袖ありトップスのたたみ方</strong><br>
					<ul>
						<li>1：洋服をひっくり返し上下逆に置き、袖側を中央に向けて折り、袖も合わせる</li>
						<li>2：反対側も同様に折ると、もとの肩幅の1/3程度の細長い状態になる</li>
						<li>3：裾側から、収納場所の高さに合わせて、3つ折りか4つ折りすれば完成</li>
					</ul>
					<small class="u-small">※3つ折りの場合：裾から3つ折り　<br>※4つ折りの場合：最初に半分に折り、また半分に折る</small>
				</div>

				<p>さっきたたんでいたボタン付きの場合は、上から2番目と3番目のボタンをとめてからたたむとキレイに仕上がるわ。たたむのが苦手なサクラの場合は、シャツは吊るして収納する方がいいかもね。</p>
				<p>
					子ども服やワンピースのようなAライン洋服でも、慌てないで。<br>きちんと幅を合わせることでキレイに収まるわよ。</p>

				<div class="flex between">
					<p class="w50">
						<img data-src="../../lib/img/magazine/comic01/vol06/img03@2x.jpg" data-retina="../../lib/img/magazine/comic01/vol06/img03@2x.jpg" alt="" style="max-width: 740px;" class="u-img__max">
					</p>
					<p class="w50">
						<img data-src="../../lib/img/magazine/comic01/vol06/img04@2x.jpg" data-retina="../../lib/img/magazine/comic01/vol06/img04@2x.jpg" alt="" style="max-width: 740px;" class="u-img__max">
					</p>
				</div>

				<p>収納する時には、<strong class="red">輪になる部分</strong>（山の部分）を上にして収納すると、<br>
					<strong class="red">「自立する・出し入れしやすい・探しやすい」</strong>の３つのメリットがあるわ。<br> 下着やタイツ類のような形が変わったものでも、ボックスのサイズに合わせて四角くたたむという基本は一緒よ。
				</p>
				<p>

					靴下は、くるっとひっくり返して丸めるという方法もあるけれど、ゴムが伸びやすくなってしまうから、子ども用とか使用期間が短いものに限定した方がいいかもね。<br> 靴下のもちを考えるなら、やっぱりたたむ方がいいと思うわ。
				</p>

				<div class="flex between" style="align-items:flex-start;">
					<p class="w50">
						<img data-src="../../lib/img/magazine/comic01/vol06/img05@2x.jpg" data-retina="../../lib/img/magazine/comic01/vol06/img05@2x.jpg" alt="" style="max-width: 740px; " class="u-img__max">
					</p>
					<div class="w50 u-assist">
						<strong>靴下のたたみ方</strong><br>
						<ul>
							<li>1：最初に足の部分を折る</li>
							<li>2：次に2つに折る</li>
							<li>3：長いソックスの場合は、さらに2つに折る</li>
						</ul>
					</div>
				</div>

				<h4 class="u-ttl__s">たたみ方に迷ったときは四角！いろんな場面で四角！</h4>
				<p>どんな洋服でも基本のたたみ方は「四角（シカク）」と覚えておくといいわ。<br>
					かさ張りがちなニットやセーター、さまざまな形があるスカート、<br class="u-only__pc">
					ワイシャツなども、袖ありのトップスと同じようにたたんでみて。</p>

				<p>特に厚手のニットやセーターは、最初に紹介したたたみ方にすることで<br class="u-only__pc">
					<strong class="red">腕の部分の厚みが抑えられて、収納スペースをスッキリと見せる</strong>ことができるわ。
				</p>

				<p>四角のたたみ方は、家の収納以外でも活躍してくれる、とても便利なたたみ方なの。<br>
					例えば、旅行のときのスーツケースもそう。<br>
					四角にたたんで、スーツケースに立てて収納することで<br class="u-only__pc">
					コンパクトに収めることができるわ！<br>
					シワにもなりにくいから、基本の「四角（シカク）」いたたみ方をマスターして<br class="u-only__pc">
					<strong>空いたスペースに入れるお土産もたくさん買ってきてね♪</strong>
				</p>

				<p>洋服のたたみ方を四角で統一して<br class="u-only__pc">
					出し入れがしやすく、探しやすい収納を目指していきましょう！</p>

				<h3>それでも、やっぱり面倒くさい！そんなときはラクな方法を探してみて</h3>
				<p>それにしてもサクラは、とにかくたたむのが面倒で仕方がないみたいね。<br> 確かに、ハンガーにかける洋服と違って、引出しに収納する「たたむ服」は、
					<br> どうしても“たたむ”という作業が面倒よね。
				</p>
				<p>

					そんな面倒な作業がちょっとでもラクになるように、工夫をしてみたらどうかしら。<br> 例えば、
					<strong class="red">立ってたためるような作業台</strong>が洗濯動線上にあると、“たたむときにかがむ”必要がないから、早いしラクになるわよ。あとは、<strong class="red">テレビを見ながらたたむ</strong>とか、自分が“ラク”と感じられる方法を見つけてみるといいかもね。
				</p>
				<p>

					それか、たたむ作業だけ家族の手を借りるっていうのはどうかしら。<br> 特に、子どもにはお手伝いの練習として、「自分の服は自分でたたもうね」と一緒にやると、
					<br>
					<strong class="red">子どもと遊びながら家事もできる</strong>ので効率的よね。
				</p>
				<p>

					最初は、もしかしたらジャマしちゃうかもしれないけれど<br> たたむことが習慣化すると……数年後がラクになるかもね！
					<br><br> 最初は、簡単なズボンから。折り紙あそびのように、「はんぶんこ、はんぶんこ」と繰り返すだけの簡単なたたみ方であれば、2～3歳くらいの早いうち（未就園児）からはじめられるわ。
					<br> さぁ、みぃちゃんも一緒にお手伝いしましょうね♪
				</p>

			</div>
		</section>

		<section class="main__wrapper">
			<div class="wrapper narrow">

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
					</figure>
					<p>はんぶんこ♪はんぶんこ♪</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
					</figure>
					<p>あらぁ～♪<br>みぃちゃんお上手じゃなぁ～い！</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
					</figure>
					<p>おじょうず～♪</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
					</figure>
					<p>す…すごい！<br>この収納ボックスにこんなに入るなんて！</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
					</figure>
					<p>立てて収納すると、収納量も増えるわよね<br>そうよ！その調子よ！</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
					</figure>
					<p>はぁー！終わったー！<br>あとは、これがどこまで持続できるか…だな</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
					</figure>
					<p>あら、大丈夫よ！どうやら、みぃちゃん<br>洗濯物をたたむのハマったみたいよ？</p>
				</div>

				<div class="talk mb6">
					<figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
					</figure>
					<p>もっかいやるー！！</p>
				</div>

				<div class="intro mb6">
					<p>一番苦手だった、洗濯物をたたむのにも、ちゃんとやり方があるんだな。<br>
						立ててたたむのは、収納量も増えるし、何よりも一瞬で見つけやすいの！<br>
						いつも着たい洋服が見つからなくて、さらにグチャグチャにしちゃってたんだけど、<br class="u-only__pc">
						お母さんに教わってからは、そんなこともなくなったんだ！<br>
						このままキレイをキープするぞぉー
					</p>
				</div>
			</div>
			<!-- //wrapper -->

			<div class="wrapper wide">

				<div class="supervision">
					<figure><img src="../../lib/img/magazine/comic01/vol01/img03@2x.png">
					</figure>
					<div>
						<p class="tttl">監修　今井 知加</p>
						<p>資格：薬剤師・整理収納アドバイザー2級認定講師・企業内整理収納マネージャー　など<br>著書：「そうじ嫌いでも部屋がずっとキレイな収納のきほん」（KADOKAWA）<br>効率よく家事をするための「片付け力」を身に着ける方法を、スクールやメディアを通して発信。苦手なものをラクに終わらせて、自分の時間や家族との時間を充実させる方法をご案内。</p>
					</div>
				</div>

				<small class="u-small mb6">※当サイトの記事の内容に関しましては、細心の注意を払っておりますが、情報の正確性、完全性、合法性等を保証するものではありません。予めご了承ください。</small>
			</div>

			<?php include ($inc_path."/lib/inc/page/_magazine/__back_num.php") ?>
		</section>

	</article>
	<aside class="mt3 mb3">
		<a href="<?php echo $base_url ?>/magazine/article/cafe-vol18-report.php" data-ga-click="<?php echo $filename ?>_imakuracafe_220224_<?php $CmGtmId = "2"; echo $CmGtmId?>">
			<img src="<?php echo $img_url; ?>/magazine/comic01/imakura_bnr_ex02.jpg" alt="あなたの“今”を聞かせて！いま暮らCafé クローゼットの整理収納、上手にできていますか？バナー" class="u-img__max u-only__pc center" loading="lazy" style="max-width: 740px;">
			<img src="<?php echo $img_url; ?>/magazine/comic01/imakura_bnr_ex02-sp.jpg" alt="あなたの“今”を聞かせて！いま暮らCafé クローゼットの整理収納、上手にできていますか？バナー" class="u-img__max u-only__sp center" loading="lazy" style="max-width: 317px;">
		</a>
  </aside>
</main>

<?php
$toindex_url = "/magazine/index_comic01.php";
include( $inc_path . "/lib/inc/toindex__magazin.php" );
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
