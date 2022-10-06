<?php
//base
include( "../../function.php" );
$content = get_id_data( '7007' );
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
				<h3 class="u-ttl__l">交換のサインを見逃さない！照明器具のメンテナンス。</h3>
				<p>夜を明るく照らしてくれるお部屋の照明。でももしも家族と楽しく過ごしているときに、突然明かりが消えてしまったら・・・。
					<br>定期的に照明器具をお掃除し、交換のサインを見逃さないようにしましょう。
				</p>

				<h4 class="u-ttl__m">照明をメンテナンスするときの注意点</h4>
				<ul class="u-list__ul">
					<li>日中の明るいうちに行ないましょう。</li>
					<li>電源スイッチをオフにして、ランプや照明器具が冷えてから作業しましょう。</li>
					<li>脚立などを使う場合は、転落しないよう十分に注意してください。</li>
					<li>高い位置にある照明は、無理をせず専門業者に依頼しましょう。</li>
				</ul>

				<h4 class="u-ttl__m">シーリングライトをお掃除しましょう。</h4>
				<p class="u-only__pc u-float__right u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol7/01.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol7/img01-sp@2x.png"
					alt="image"
					style="max-width: 166px;"
					class="u-img__max">
				</p>
				<p>リビングの照明に多いシーリングライト。ほこりなどの汚れは明るさの低下につながるので、定期的にお掃除をしましょう。</p>
				<p>カバーは取扱説明書に従って外し、中にたまったごみを捨てます。プラスチック製のものは、水で薄めた中性洗剤を布に含ませて汚れを拭き取り、仕上げに水拭きして乾かします。木や和紙などを使ったものの場合は、水を使わずに、柔らかいブラシやはたきでほこりを払うようにします。</p>
				<div class="u-only__sp u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol7/img01-sp.png"
					data-retina="../../lib/img/magazine/wakuwaku/vol7/img01-sp@2x.png"
					style="max-width: 166px;"
					class="u-img__max">
				</div>
				<p>ランプも外して、口金部分を濡らさないように注意しながら、固く絞った布で水拭きします。蛍光灯の場合は、端が黒ずんできたら交換のサイン。点灯しなくなる前に交換しましょう。</p>
				<p>ランプ、カバーともにしっかりと乾いてから、器具に取り付けます。</p>


				<h4 class="u-ttl__m">照明器具本体の交換目安は概ね10年</h4>
				<p>他の電化製品同様、照明器具にも耐用年数があります。外観に変化はなくとも、内部が劣化していることがありますので、10年以上使用している場合は器具本体の交換を検討しましょう。</p>
				<p class="center u-only__pc mb3">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol7/02.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol7/02.jpg"
					alt="image"
					style="max-width: 380px;"
					class="u-img__max"
					>
				</p>
				<p class="center u-only__sp mb3"><img class="w100" src="../../lib/img/magazine/wakuwaku/vol7/img02-sp@2x.png" /></p>
				<p>また最近では、従来の白熱灯・蛍光灯に代わり、LEDが主流となっており、高性能・多機能で、デザイン性にも優れた商品が次々に開発・販売されています。</p>
				<p>以下ではLEDの特長や交換方法についてご紹介します。</p>

				<h4 class="u-ttl__m">LED照明の特長</h4>
				<p class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol7/03.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol7/img03-sp@2x.png"
					alt="image"
					style="max-width: 430px;"
					class="u-img__max"
					>
				</p>
				<h5 class="u-ttl__s">明るさ</h5>
				<p>明るさは「ルーメン（lm）」という単位で表され、数値が高いほど明るくなります。シーリングライトは適用畳数、電球は一般電球の何ワットに相当するのかを、販売店やパッケージ・カタログなどで確認して選びましょう。</p>
				<p>また、高齢者のいるご家庭では、加齢に伴う視機能の低下を考慮して、少し明るめのものを選ぶとよいでしょう。明るさを調節することができる、調光機能付きの器具も便利です。</p>

				<h5 class="u-ttl__s">色</h5>
				<p>ＬＥＤ照明には調色機能付きの器具や電球もあります。勉強や仕事をするときには活動的な印象の昼白色・昼光色（白色）に、就寝前やリラックスしたいときには落ち着いた印象の電球色（オレンジ色）にと、シーンに合わせて自由に色を切り替えられるのです。</p>
				<p class="u-position__center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol7/04.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol7/04.jpg"
					style="max-width:480px ;"
					class="u-img__max"
					>
				</p>

				<h4 class="u-ttl__m">LED照明に交換してみましょう！</h4>
				<h5 class="u-ttl__s">シーリングライト</h5>
				<p>LEDシーリングライトは、ランプと本体が一体となっているため、器具ごと交換するのが一般的です。天井に引掛シーリングが付いていれば、ご自分で取り付けが可能です。ただし、調光スイッチが付いている場合は、スイッチの交換工事が必要となります。</p>

				<h5 class="u-ttl__s">電球</h5>
				<p>電球をLEDに交換する際は、口金のサイズ（一般電球タイプのE26口金、小型電球タイプのE17口金など）、ランプの大きさ、光の広がり方（全方向に明るいか、下方向だけが明るいか）にも注意しましょう。</p>
				<p>次のような特殊な照明器具の場合は、必ず確認の上、それぞれに適合した電球を使用してください。</p>
				<p class="center">
					<img
					data-src="../../lib/img/magazine/wakuwaku/vol7/05.jpg"
					data-retina="../../lib/img/magazine/wakuwaku/vol7/img05-sp@2x.png"
					style="max-width:467px ;"
					class="u-img__max">
				</p>
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
