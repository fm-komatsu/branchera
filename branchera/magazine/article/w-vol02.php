<?php
//base
include( "../../function.php" );
$content = get_id_data( '7002' );
$pageTtl = $content[ 'title' ];
//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
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
		$panAry[] = array( "/magazine/index_wakuwaku.php", "Mr.わくわくメンテナンス講座" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
		<div class="main__wrapper">
			<section class="main__item">

				<h3 class="u-ttl__l">家族みんなで毎日使う場所。洗面台のお手入れです。</h3>

				<p>いつも清潔にきれいにしておきたいのに、すぐに汚れてしまい、全体がだらしない印象の場所になってしまうのが洗面台。一人ひとりが気を付けて、「使った人がきれいにする」ルールを守ると、清々しい元気いっぱいの場所になります！</p>

				<h4 class="u-ttl__m">◆普段のお手入れ編　「ながら」と「すぐに」がコツ！</h4>
				<div class="u-position__center u-float__right u-only__pc">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol2/img01.png"
					data-retina="../../lib/img/magazine/wakuwaku/vol2/img01@2x.png"
					alt="image"
					style="max-width:277px ;"
					class="u-img__max"
					>
				</div>
				<div class="u-position__center u-only__sp">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol2/img01.png"
					data-retina="../../lib/img/magazine/wakuwaku/vol2/img01@2x.png"
					alt="image"
					style=""
					class="u-img__max"
					>
				</div>
				<h5 class="u-ttl__s mt0">■ 水アカなど汚れがたまりやすい排水口</h5>
				<p>気になったらすぐに水を含ませたメラミン樹脂スポンジで汚れを落とします。</p>
				<h5 class="u-ttl__s">■ 洗面ボウル・洗面台・鏡</h5>
				<p>飛び散った水滴は水あかの原因になります。水滴は使用後すぐに拭き取り、石鹸かすや歯磨き粉もついたらすぐに落とします。</p>
				<h5 class="u-ttl__s">■ くすみが目立つ水栓金具</h5>
				<p>水滴や石鹸かすがついたら、その都度すぐに拭き取ります。見逃しがちな水栓金具の根元もお忘れなく。歯ブラシに中性洗剤をつけてこすり落とします。</p>

				<h4 class="u-ttl__m">◆気合いのお手入れ編　1カ月に一度「第一日曜日」などと日を決めて！</h4>
				<div class="u-position__center u-float__right u-only__pc">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol2/img02.png"
					data-retina="../../lib/img/magazine/wakuwaku/vol2/img02@2x.png"
					alt="image"
					style="max-width:277px ;"
					class="u-img__max">
				</div>
				<div class="u-position__center u-only__sp">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol2/img02.png"
					data-retina="../../lib/img/magazine/wakuwaku/vol2/img02@2x.png"
					alt="image"
					style=""
					class="u-img__max">
				</div>

				<h5 class="u-ttl__s mt0">■ 洗面ボウルをすっきりと</h5>
				<p>中性洗剤をつけたスポンジを円を描くように動かして汚れを落としていきます。ヘアキャッチャーに汚れがたまるとニオイの原因や排水の妨げになります。取り外して徹底的にきれいにしましょう。</p>
				<p>ごみを取り除き、歯ブラシなどでこびりついた汚れを落とします。全てが終わったら、水洗いをしてからぶきを忘れずに。</p>
				<h5 class="u-ttl__s">■ クリアな鏡で毎日を気持ちよく</h5>
				<p>洗顔石鹸やシャンプー、歯磨き粉が飛び散ると白い汚れが鏡についてしまいます。水をふくませたメラミン樹脂スポンジで丁寧に落とし、からぶきしておきます。</p>

				<div class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol2/img03.png"
					data-srcset="../../lib/img/magazine/wakuwaku/vol2/img03-sp@2x.png 400w,../../lib/img/magazine/wakuwaku/vol2/img03@2x.png"
					alt="洗面ボウルの排水溝に大切なアクセサリを落としてしまった！どうしよう！"
					style="max-width:559px ;"
					class="u-img__max mb2">
				</div>

				<ul class="u-column__2">
					<li class="u-column__item_has_inner">
						<div class="u-column__inner_m_bd">
							1.洗面台下の扉を開け、排水パイプのまわりに置いてあるものを取り出します。
						</div>
					</li>
					<li class="u-column__item_has_inner">
						<div class="u-column__inner_m_bd">
							2.水を受ける洗面器を用意し、水とお湯、両方の止水栓を閉めます。蛇口も閉めておきましょう。
						</div>
					</li>
					<li class="u-column__item_has_inner">
						<div class="u-column__inner_m_bd">
							3.U字部分に掃除口キャップが付いている場合は、ゆるめて中の水を抜きます。
						</div>
					</li>
					<li class="u-column__item_has_inner">
						<div class="u-column__inner_m_bd">
							4.接続ネジを交互にゆるめてＵ字パイプを外します。
						</div>
					</li>
					<li class="u-column__item_has_inner">
						<div class="u-column__inner_m_bd">
							5.パイプを清掃し、落としてしまったアクセサリを取り出します。
						</div>
					</li>
					<li class="u-column__item_has_inner">
						<div class="u-column__inner_m_bd">
							6.外したときと逆の手順でＵ字パイプを取り付けます。
						</div>
					</li>
					<li class="u-column__item_has_inner">
						<div class="u-column__inner_m_bd">
							7.止水栓を開いて水量を調整し、最後に排水パイプから漏水がないかを確認します。
						</div>
					</li>
				</ul>

			</section>

			<section class="main__item u-assist u-clearfix">
				<h5 class="u-ttl__s">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol2/img04.png"
					data-retina="../../lib/img/magazine/wakuwaku/vol2/img04@2x.png"
					alt="プロのワンポイントアドバイス"
					style="max-width:326px ;"
					class="u-img__max">
				</h5>
				<div class="u-position__center u-float__right">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol2/img05.png"
					data-retina="../../lib/img/magazine/wakuwaku/vol2/img05@2x.png"
					alt="image"
					style="max-width:138px;"
					class="u-img__max">
				</div>
				<h5 class="u-ttl__s mt0">洗面台の下収納</h5>
				<p>洗面所で意外に出番が多いはさみ。詰替え用のシャンプーや洗剤の口を開けるのに近くにあるととても便利。</p>
				<p>扉の裏にフックをつけてかけておくと便利です。ヘアブラシやコームなど外に出しておくと乱雑になってしまう化粧小物は、ひとまとめにカゴに入れておきましょう。</p>
			</section>


			<?php  include ($inc_path."/lib/inc/page/_magazine/__back-wakuwaku.php"); ?>

		</div>
	</article>
</main>

<?php
$toindex_url = "/magazine/index_wakuwaku.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
