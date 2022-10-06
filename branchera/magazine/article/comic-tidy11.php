<?php
//base
include("../../function.php");
$content = get_id_data('12011');
$pageTtl = $content['title'];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '片付けの専門家が監修！片付けられない家族を救うためのマンガコラム。第11話は扇風機や加湿器のように季節によって出し入れをする家電の収納方法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>

<main class="main comic">
	<article class="main__row">
		<?php
		$panAry[] = array("/magazine/", "ブランシエラマガジン");
		$panAry[] = array("/magazine/index_comic01.php", "何でか、部屋が片付かない。");
		include($inc_path . "/lib/inc/pan.php");
		?>
		<?php
		include($inc_path . "/lib/inc/page/_magazine/__comic-header.php");
		?>

		<div class="intro">
			<p>足の踏み場もなかったくらいの我が家が、今ではかなり部屋が片付いてきたんだ！少なくとも、目に見えるところは整理整頓されていて、快適な暮らしが続いているの。どこに何があるか把握できてきたから、以前に比べてモノを探している時間も短くなってきたはず…なんだけど、今日は朝からアレが見つからなくて困ってるんだよね…。</p>
		</div>

		<p style="text-align: right" class="mb4">&raquo; 前回はこちら<a href="comic-tidy10.php">「第10話　アチコチ散らばる紙・書類の片付け方法」</a>
		</p>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/sho02@2x.png">
			</figure>
			<p>サクラ、やっぱりこっちにはないみたいだよー…</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
			</figure>
			<p>去年、使い終わったあと片付けたのは覚えてるんだけど、<br class="u-only__pc">どこにしまったっけ～</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
			</figure>
			<p>ちょっとあなたたち<br>さっきから何やっているの？</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
			</figure>
			<p>いや～それがさ～<br>扇風機を出そうと思っているんだけど<br class="u-only__pc">どこにしまったか分からなくなっちゃったんだよね～</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
			</figure>
			<p>なっちゃったんだよね～♪</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
			</figure>
			<p>あんな大きなモノがどうやったら分からなくなるワケ！？<br>…って、押入れパンパンじゃないの…</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/sho02@2x.png">
			</figure>
			<p>部屋は片付いてきていますけど<br>去年の失敗までは帳消しにはなりませんね…</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
			</figure>
			<p>なんか扇風機や加湿器のように<br class="u-only__pc">季節によって出し入れするモノとか、<br class="u-only__pc">アイロンみたいに時々使う家電って<br>収納が難しいんだよね～</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
			</figure>
			<p>今までのことを思い出せば難しくなんてないわ！<br>さぁ！扇風機を探しながら<br>季節家電の収納方法をアドバイスするわよ！</p>
		</div>
		</section>

		<section class="comic-pink kaasan">
			<div class="wrapper">
				<p class="teach">
					<img data-src="../../lib/img/magazine/comic01/img02@2x.png" data-retina="../../lib/img/magazine/comic01/img02@2x.png" alt="お母さんからのアドバイス" style="" class="u-img__max">
				</p>
				<h3>家電の収納はどこで使うのかがポイントよ</h3>
				<p>1年のうち限られた時期にしか使わない季節家電だけど、<br class="u-only__pc">たまにしか使わないからって適当に収納してしまうと、<br class="u-inly__pc">今みたいに押入れの中をひっくり返すことになってしまうわ。<br> だから、<strong class="red">季節家電も定位置を決めて収納していくこと</strong>が大切なの。</p>
				<p>あとから扇風機はどこだっけ？ストーブはどこだっけ？とならないためにも、<br class="u-only__pc">季節家電はまとめて同じエリアに保管しておくと<br class="u-inly__pc">収納場所を忘れにくいからオススメよ。
				</p>

				<h3>季節家電は使う季節を問わずまとめて収納！</h3>
				<p>家電を収納するときのコツの1つは、<strong class="red">まずは分解できるモノは分解してしまうこと</strong>。<br>例えば扇風機のように家電の中でも分解できるモノは、<br class="u-inly__pc">収納スペースに合わせて、細かいパーツにして収納するの。<br>そのままだと大きなサイズの家電も、分解しておけば、<br class="u-inly__pc">場所の節約になるだけじゃなくて、重さもないから楽に収納できるわ。</p>
				<p>季節モノの家電は保管の期間が長期になるわね。<br>だから<strong class="red">ほこりがかぶらないような工夫</strong>をしましょう。<br>買ったときにとっておいた箱があればその中に。<br>箱がない場合は大きな袋（不織布）に入れてしまうのもアリよ。<br>段ボールを自分で用意して収納しておくのもOK。<br>ただし、上に何か載せてもつぶれてしまうことがないよう、<br class="u-inly__pc"><strong class="red">新品の段ボールを使う</strong>ようにしましょう。<br>ストーブやファンヒーター、加湿器みたいな家電は<br class="u-inly__pc">扇風機のように分解することはできないから、<br class="u-inly__pc">そのまま収納することになるわね。<br></p>
				<p>ある程度のスペースが必要になってくる、こういう季節モノの家電は、<br class="u-inly__pc">押入れや廊下収納のような<strong class="red">大きなスペースにまとめて収納するのがオススメ</strong>。</p>
				<p>夏にストーブを収納している場所に、冬は扇風機を収納するなどして入れ替えをすると、<br class="u-inly__pc">上手に収納スペースを使うことができるわ。<br>サイズの大きい方に合わせて、スペースを確保してみて！</p>
				<p>季節家電の収納は、年に1～2回出し入れする程度の使用頻度の低いモノだから、<br class="u-inly__pc">収納スペースの奥や下段など、取り出しにくい場所に収納しても大丈夫よ。<br>それによって、他の使用頻度の高いアイテムが片付けやすくなるわ。</P>
				<p>さらに奥や下段に収納するときは、キャスター付きの荷台に載せると<br class="u-inly__pc">出し入れしやすくなるから、今回みたいに奥の方からでも取り出しやすくなるわね。</p>
				<p>ショウくんやサクラと同じようにマンションに住んでいる場合なら、<br class="u-inly__pc">納戸や寝室の収納スペースの奥を利用してみるのも良いかもね。<br>また、家電を収納するときは、<strong class="red">リモコンも一緒にセットにしておくこと</strong>を忘れずに。<br>久々に取り出してみたら、リモコンがどこかにいってしまった、<br class="u-inly__pc">なんてことがないようにね。</p>

				<h3>よく使う家電は、使いやすい場所をきちんとイメージしてね！</h3>
				<p>掃除機やアイロン、ドライヤーや布団乾燥機など<br class="u-inly__pc">毎日の家事や生活でよく使用する家電の場合は、どこで使うのかと
					<br class="u-inly__pc"><strong class="red">使う場所をイメージして収納場所を決定するの。</strong>
				</p>
				<p>
					例えば、掃除機だったら、廊下収納の一番手前に収納したり、<br class="u-inly__pc">リビングなどの掃除を始める場所の近くや
					<br> 汚れやすい場所の近くに収納すると、掃除に取り掛かりやすくなるわね。
				</p>
				<p>
					サクラが悩んでいたアイロンの収納場所も考え方は同じよ。<br>どこでアイロンをかけるか？ということを考えてみるの。
				</p>
				<p>
					サクラはいつもテレビを見ながらアイロン掛けをしているものね。<br>だったらリビングの近くの収納スペースに収納しておくと、<br class="u-inly__pc">面倒なアイロン掛けも始めやすくなるのよ。
				</p>
				<p>
					もちろんクローゼットの近くでも、洗面所の近くでもどの場所でもいいの。<br> 大事なのは、その家電を使う場所に合っているかどうかということね。
				</p>
				<p>
					使う場所を考えたら、<strong class="red">一緒に使うモノをまとめてグルーピング</strong>するの。<br> アイロンとアイロン台は必ずセットになるわね。
					<br class="u-inly__pc">他には…掃除道具系…といった具合に
					<br class="u-inly__pc">まとめて収納しておくと使う時に便利だし、
					<br class="u-inly__pc">どこに何を収納したかわからなくなることはないわ。
				</p>
				<p>

					いつ、どんな時に、どこで、どんなふうに使うのか？<br> 自分に問いかけてみるのが、快適収納への近道よ！
				</p>

			</div>
		</section>

		<section class="main__wrapper">

			<div class="wrapper narrow">

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
					</figure>
					<p>おっ！あったあった！</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
					</figure>
					<p>まさか、押入れの上にあるとはね…<br>まぁ、場所としては間違っていなかったけどね…</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
					</figure>
					<p>ま、まぁまぁ…去年の私と今の私は違うからさっ！<br>これからは大丈夫よ</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
					</figure>
					<p>そうね、確かに部屋もだいたい片付いてきたものね<br>じゃぁ、さっきの収納方法を基本に季節家電の収納をやっていきましょうか！</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
					</figure>
					<p>ヨォーシ！<br>この際だから、いつも使ってる家電製品も合わせて収納場所を決めちゃおっか！</p>
				</div>

				<div class="talk">
					<p class="w95 center">　　…　1時間後　 …</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
					</figure>
					<p>ふぅ～<br>これでかなりわかりやすくなったね</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
					</figure>
					<p>いや～疲れたけど、片付いたね～<br>さてと、がんばったらお腹も空いたし<br>お昼ご飯にしますかー！</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
					</figure>
					<p>あら、ほんと！もうこんな時間だわ。<br>みぃちゃ～ん♪ご飯にしましょ～♪</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
					</figure>
					<p>って、アレ！？<br>みぃちゃんは！？</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
					</figure>
					<p>ココだよー！</p>
				</div>

				<div class="center mb3">
					<img data-src="../../lib/img/magazine/comic01/vol11/img01@2x.jpg" data-retina="../../lib/img/magazine/comic01/vol11/img01@2x.jpg" alt="" style="max-width: 740px;" class="u-img__max">
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/sho02@2x.png">
					</figure>
					<p>まぁ、ママよりは収納の意識が高いってことかな？</p>
				</div>

				<div class="intro mb6">
					<p>みぃちゃんが収納って言葉を覚えちゃうくらい、部屋も片付いてきたってことだよね。<br>ここまで色々と大変だったけど、片付いた部屋は気持ちがいいな♪<br>でも…実は、片付いたからこその新しい悩みが出てきちゃったんだよね…。</p>
				</div>

			</div>
			<!-- //wrapper -->
			<div class="mb6">
				<div>
					<a href="<?php echo $base_url ?>/magazine/article/sumai-sos-vol01.php" data-ga-click="pr_<?php echo $filename ?>_pc" class="u-only__pc">
						<img src="<?php echo $img_url ?>/magazine/comic01/comic-tidy11_pc.jpg" alt="「ワンポイントアドバイス」押し入れをクローゼット化して、収納力アップ！？" class="u-img__max u-only__pc">
					</a>
					<a href="<?php echo $base_url ?>/magazine/article/sumai-sos-vol01.php" data-ga-click="pr_<?php echo $filename ?>_sp" class="u-only__sp">
						<img src="<?php echo $img_url ?>/magazine/comic01/comic-tidy11_sp.jpg" alt="「ワンポイントアドバイス」押し入れをクローゼット化して、収納力アップ！？" class="u-img__max u-only__sp">
					</a>
				</div>
			</div>

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

			<?php include($inc_path . "/lib/inc/page/_magazine/__back_num.php") ?>
		</section>

	</article>
	<aside class="mt3 mb3">
		<?php $CmGtmId = "2";
		include($inc_path . "/lib/inc/page/_magazine/__comic01_cm.php"); ?>
	</aside>
</main>

<?php
$toindex_url = "/magazine/index_comic01.php";
include($inc_path . "/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
