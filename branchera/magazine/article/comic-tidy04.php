<?php
//base
include( "../../function.php" );
$content = get_id_data( '12004' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '片付けの専門家が監修！片付けられない家族を救うためのマンガコラム。第4話は毎日の料理をもっと快適にする効率の良いキッチンの片付け方法をご紹介します。';
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
    include( $inc_path . "/lib/inc/page/_magazine/__comic-header.php" );
    ?>

		<div class="intro">
			<p>脱・散らかり部屋！ということで、片付け上手のお母さんと一緒に部屋の見直しをしている私、サクラ。モノの整理の仕方や、手放す方法とか片付けるコツを教えてもらって、自分でもだんだんヤル気がでてきたところなんだけど、まだまだ部屋は散らかり放題。早くキレイに片付いた部屋にならないかな～。</p>
		</div>

		<p style="text-align: right" class="mb4">&raquo; 前回はこちら<a href="comic-tidy03.php">「第3話　片付け上手の考え方！捨てるのではなく手放す」</a>
		</p>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
			</figure>
			<p>ママー、むぎちゃー！<br>みぃちゃん、むぎちゃー！</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
			</figure>
			<p>あらぁ～みぃちゃん、のど乾いたの？<br>ばぁばが、麦茶いれてあげようね</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
			</figure>
			<p>… … … … …ちょっとナニコレ</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
			</figure>
			<p>お母さん、みぃちゃんのコップ見つかった？</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
			</figure>
			<p>サクラ…<br>何なの？このシンクに溜まった食器は？</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
			</figure>
			<p>まとめて洗おうと思ったんだけど…<br>新しいコップ出した方が早いし…</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
			</figure>
			<p>大体、食器が多すぎるのよ<br>これじゃぁ、みぃちゃんにとっても危ないし不衛生だわっ！</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
			</figure>
			<p>お母さん、お願い！<br>いつもの収納テクニックを伝授して！</p>
		</div>

		<div class="talk">
			<figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
			</figure>
			<p>まったく、仕方ないわね…<br>可愛い孫のためにも、ここは気合い入れて片付けるわよ！</p>
		</div>
		</section>
		<section class="comic-pink kaasan">
			<div class="wrapper">
				<p class="teach">
					<img data-src="../../lib/img/magazine/comic01/img02@2x.png" data-retina="../../lib/img/magazine/comic01/img02@2x.png" alt="お母さんからのアドバイス" style="" class="u-img__max">
				</p>
				<h3>使う頻度でモノを整理していくのがコツよ</h3>
				<p>今回から、いよいよ具体的な場所の片付けの手順を教えるわ。<br>これまでに学んだ片付けの基本的な考えを思い出しながら、１つずつクリアしていくわよ。
				</p>
				<p>
					キッチンは、主婦が１日の中でも過ごす時間が長い場所よね。<br>だからこそ、整理収納の効果を一番実感しやすい場所なの。<br>キッチンで行なう「調理する」というメインの目的を忘れずに<br class="u-only__pc">使うゾーンを意識して収納場所を決めると、<br class="u-only__pc">効率的なキッチンを実現できるし、家事の時短にもつながるわ！
				</p>
				<p>
					でも、ちょっと待って！<br>片付けの前に必要なこと、「アイテムの整理」を忘れないでね。
					<br>※忘れたあなたは
					<a href="comic-tidy02.php">第2話をチェック！</a>
				</p>
				<p>
					キッチン周りは、大体3～4帖程度のスペースなの。<br>そんな限られた狭いスペースで、スッキリしているかどうかを決めるのは「モノの量」なのよ。
				</p>

				<h3>使用するタイミングに合わせて、グルーピングすると家事効率もアップ！</h3>

				<p>さてと…まずは、出しっぱなしの食器から取り掛かってみましょうか。<br>サクラの食器棚は、みっちり収納されていて出し入れしにくい状態になっているわね。
				</p>
				<p>
					・本当に使うの？<br>・適正量はどれくらい？
				</p>
				<p>
					これまでの話を思い出して、食器を「整理」してみて。<br> そして、大前提として、
					<strong class="red">食器は「食器棚に入るだけ」ということ</strong>も意識してね。
				</p>
				<p>
					■いただき物の食器が、もったいなくて箱に入ったまま<br>■欠けているけど、まだ捨てていない
				</p>
				<p>
					そんな食器はないかしら？<br>使わずに保管している方がもったいないのよ。<br>お客さまが来た時にでも…なんて言わずに<br class="u-only__pc">普段から使ってみると気分もあがって、お片付けもはかどるかもよ？
				</p>
				<p>
					さぁ、食器の整理が終わったら、いよいよ収納していくわよ。<br>食器棚の収納の１つ目のポイントは
					<br>
					<strong class="red">一緒に使う組み合わせは近くに収納するということ。</strong><br> そうすることで、片付けもしやすくなるわ。
				</p>
				<p>
					例えば<br>・朝食用の食器
					<br>・夕食用の食器
					<br>・子ども用の食器
					<br>というように、使用頻度の高いものからグルーピングしてみるといいわね。
				</p>
				<p>
					そして2つ目のポイントは<br>
					<strong class="red">お皿を重ねて収納するときは、違う形のお皿は2種類までにすること。</strong>
				</p>
				<p>
					いろいろな種類が重なっていると、取り出しにくくて家事の効率も落ちてしまうの。<br>その分、棚板を増やしたり、コの字ラックなどの収納グッズを使うなどして高さを活かすと<br class="u-only__pc">使いやすくて、整理された食器棚が実現できるわ。
				</p>
				<p>
					収納する時には、使用頻度に合わせて<br class="u-only__pc">「中段 → 下段 → 上段」の順番に使い分けると、さらに使いやすくなるわ。
				</p>

				<h3>キッチン道具は使う場所を意識して収納場所を決めるの</h3>

				<p>食器が片付いたから、次はお鍋やキッチングッズを片付けていきましょうか。<br>基本的には食器と同じように、まずは整理をして<br class="u-only__pc">収納するときは、使う場所にしまうようにしてみて。
				</p>

				<div class="numArea">
					<p class="mb1"><strong style="font-size:120%;color:#000;">＜キッチン道具の収納のコツ＞</strong>
					</p>
					<ul>
						<li>お鍋やフライパンはコンロの下</li>
						<li>ザルやボウルはシンクの下</li>
						<li>調味料などの食材は水気（シンク）から離れた場所に</li>
					</ul>
				</div>

				<p>どこにあったら便利なのか？ということを常に意識して<br class="u-only__pc">モノの定位置を決めていくのよ。
				</p>
				<p>
					一般的なシンク下やコンロ下は、深い引出しになっていることが多いんだけど、<br class="u-only__pc">引出しは、重なって層になっていると中身が把握しづらいのよね。
				</p>
				<p>
					そこで、<strong class="red">シンク下やコンロ下は「立てる収納」がポイント</strong>なの。<br> そうすることで、上から覗き込むと、何が入っているか全体を見渡せるようにできるのよ。<br>収納ボックスなどで仕切ると、ここでも高さを活かした収納ができるわ。<br>この時、同じ用途のものはひとまとめにして収納すると、家事効率もアップするわね。
				</p>
				<p>
					さらに、<strong class="red">引出しの手前には小さいモノ</strong>を、<strong class="red">奥には大きいモノ</strong>を入れると、<br class="u-only__pc">引出す動作もラクになるからオススメよ。<br>ただし、使用頻度の低いものは、ボックスで重ねたり、奥に収納してね。
				</p>
				<p>

					こんな風に整理して必要なモノ・必要でないモノを判断した後は、<br class="u-only__pc">「グループ」と「使用頻度」について考えるの。
				</p>
				<p>
					よく使うモノから、出し入れしやすい場所に収めていくことを忘れなければ<br class="u-only__pc">片付けもしやすく、調理もしやすい、理想的なキッチンになるわ！
				</p>

				<p>
					<strong class="red">収納場所が決まったら、片付けを習慣化することを忘れずにね</strong><br>きちんと片付けられた理想的なキッチンができたら、<br class="u-only__pc">その状態をキープしないといけないわね。<br>どの部屋も同じだけれど、片付けはやったその日で終わりではないのよ！
				</p>
				<p>
					ついやりがちなのが、キッチンの作業台にモノを置きっぱなしにしてしまうこと。<br>買ってきたものを置きっぱなしにしたり、洗った食器を積み重ねてしまったり…。<br>忙しいと”つい”やってしまいがちだけれど、<br class="u-only__pc">その”つい”が積もり積もって、ごちゃごちゃしたキッチンを作りだしてしまうの。<br>できれば、1日の最後に”つい”置いてしまったモノを元に戻せるように習慣化してみて。
				</p>
				<p>
					キッチンは家族のご飯をつくる場所。<br>スッキリ整頓しておくと、衛生的だし、掃除もしやすくなるわ！
				</p>

			</div>
		</section>

		<section class="main__wrapper">
			<div class="wrapper narrow">
				<div class="center mb3">
					<img data-src="../../lib/img/magazine/comic01/vol04/img01.jpg" data-retina="../../lib/img/magazine/comic01/vol04/img01@2x.jpg" alt="image" style="max-width: 740px;" class="u-img__max">
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
					</figure>
					<p>スゴイ！これ、よくテレビとかで見る<br class="u-only__pc">片付け上手の人のキッチンじゃーん！</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
					</figure>
					<p>収納ボックスは100円ショップでも売っているから<br class="u-only__pc">上手に活用すると、本当にスッキリするのよ<br>さ、キレイに片付いたし、おやつにしよっか？みぃちゃん♪</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
					</figure>
					<p>おやつにしよっかー♪</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
					</figure>
					<p>お！じゃぁ<br class="u-only__pc">とっておきのクッキーを開けちゃおっかなー</p>
				</div>

				<div class="talk">
					<figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
					</figure>
					<p>何言ってるの！<br>サクラは残りの食器を片付けるのよ！まだ半分でしょ</p>
				</div>

				<div class="talk mb6">
					<figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
					</figure>
					<p>えぇぇえーー！？<br>あたしも、おやつ食べたいよぉ～</p>
				</div>

				<div class="intro mb6">
					<p>収納する場所が決まっていると、なんだか家事も早くなる気がする。<br>気のせいかな…？いつもより夕飯の支度と片付けが早く終わっていつもよりゆっくりできた気がする…。それに、テーブルの上もいつもより片付いているような…。これが片付けの効果なのかな。ちょっと感動してきたかも！</p>
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
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php");?>
	</aside>
</main>

<?php
$toindex_url = "/magazine/index_comic01.php";
include( $inc_path . "/lib/inc/toindex__magazin.php" );
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
