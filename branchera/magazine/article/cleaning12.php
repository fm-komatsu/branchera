<?php
//base
include ("../../function.php");
$content = get_id_data('27012');
$pageTtl = '洗濯機の掃除方法は？酸素系漂白剤で汚れやカビをきれいに！';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '洗濯機の掃除方法を掃除場所別にご紹介！クエン酸や過炭酸ナトリウムを用いた、自分でできる洗濯機の掃除方法を解説します。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cleaning";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");

?>
<main class="main">
  <article class="main__row ">
    <?php
		$panAry[] = array("/magazine/" ,"ブランシエラマガジン");
    $panAry[] = array("/magazine/index_comic03.php" ,"部屋のお掃除プロ監修 三毛猫きらりのお掃除攻略ガイド");
    include ($inc_path."/lib/inc/pan.php");
    ?>
		<div>
			<div>
				<div class="foris__main-v center mt2 mt0_sp mb3">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/12/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/12/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
				</div>
			</div>
		</div>
		<div class="technic__chara u-only__pc mb3">
			<a href="<?php echo $img_url ?>/magazine/comic03/cleaning/common/main-v-chara@2x.jpg" class="chara-btn center mfp-btn__img">登場人物紹介はこちら</a>
    </div>
		<div class="technic__chara u-only__sp">
			<a href="<?php echo $img_url ?>/magazine/comic03/cleaning/common/main-v-chara-sp@2x.jpg" class="chara-btn center mfp-btn__img pt0 pb0">登場人物紹介はこちら</a>
    </div>
    <div class="main__wrapper">
      <section class="main__item mb8 mb4_sp">
        <h2 class="cleaning01__ttl u-font__palt"><?php echo $pageTtl ?></h2>
					<p class="cleaning01__desc">洗濯機の汚れやカビを酸素系漂白剤で落とす掃除方法をご紹介します。</p>
          <time datetime=”2022年6月22日”>2022年6月22日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb hikari01">
							<div class="inner-border">
								<div>
									<p>最近、洗濯すると洗濯物がニオったり、カビが付いていたりする…。<br>洗濯槽が汚れてるのかな？<br>洗濯機の掃除ってどうやってするんだろう？<br>これまで糸くずフィルターにたまったごみを捨てたことくらいしかなかったから、やり方が分からないや</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p>最初に<strong>糸くずフィルターや洗剤投入口など細かい部品を取り外して、水と歯ブラシで洗う</strong>といいニャ<br>その後で、<strong>洗濯槽に酸素系漂白剤を入れて洗濯機を回す</strong>と、汚れやカビが取れるニャ！</p>
								</div>
							</div>
						</div>
					</div>
					<div class="cleaning_contents contents">
						<div class="contents__row">
							<div class="w25 contents__ttl">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01@2x.png" class="u-img__max u-only__pc center" style="max-width:133px;" loading="lazy">
							</div>
							<div class="w5 contents__line">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line@2x.png" class="u-img__max u-only__pc center" style="max-width:12px;" loading="lazy">
							</div>
							<div class="u-only__sp">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01-sp@2x.png" class="u-img__max u-only__sp mb3 center" style="max-width:146px;" loading="lazy">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line-sp@2x.png" class="u-img__max u-only__sp center mb3" loading="lazy">
							</div>
							<div class="w70">
								<div class="contents__list">
									<ul>
										<li><a data-scroll href="#sentakuki01">洗濯機の汚れの原因は？</a></li>
										<li><a data-scroll href="#sentakuki02">縦型洗濯機の掃除の仕方</a></li>
										<li><a data-scroll href="#sentakuki03">ドラム式洗濯機の掃除の仕方</a></li>
										<li><a data-scroll href="#sentakuki04">洗濯機に汚れをためないコツ</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="sentakuki01">洗濯機の汚れの原因は？</h3>
					<div class="mb3">
						<figure class="w50 center u-float__left">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/12/cleaning12-01@2x.jpg" class="u-img__max mb1_sp" alt="洗濯機の汚れ" style="max-width:320px;" loading="lazy">
						</figure>
						<div>
							<p class="mb2">洗濯機は水と洗剤を使用するため、掃除は不要と思っている人も多いのではないでしょうか？しかし、洗濯機にはすすぎ残した洗剤や柔軟剤や衣類の汚れ、ほこりがたまりやすいうえに、湿気がこもりやすいため、放っておくと洗濯槽の裏側に黒カビが発生する可能性があります。<br>黒カビの原因は、洗剤カスの残りや、洗濯物に付着している皮脂などです。また、洗濯する際にお風呂の残り湯を利用している場合は、残り湯に含まれた垢や菌などもカビの原因になります。</p>
							<p class="mb2">カビが発生した洗濯機で洗濯すると、洗いたての洗濯物から嫌なニオイがしたり、生乾きのニオイがしたりします。また、目に見えない汚れや雑菌が衣服に付いていることもあります。そうした衣類を身に付けることで、カビや雑菌を吸い込んでしまう恐れもあるのです。<br>また、洗濯槽がひどく汚れていると、わかめのように汚れが洗濯槽に浮いてくることもあるため、洗濯機の掃除は必要不可欠です。</p>
							<p class="mb3">洗濯機をきれいにするには、洗濯機を分解して掃除する必要がありますが、故障の原因にもなるため、徹底的な掃除はプロの業者に依頼するのがおすすめです。今回は自分で簡単にできる洗濯機の掃除方法を、縦型洗濯機とドラム式洗濯機のタイプ別にご紹介します。</p>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb3">
        <h3 class="cleaning01__secttl mb3" id="sentakuki02">縦型洗濯機の掃除の仕方</h3>
				<p class="level mb2">■所要時間：1時間～<br>■難易度：★★★★★<br>■掃除頻度の目安：1ヵ月に1回</p>
				<p>まず、縦型洗濯機の掃除方法からお伝えしましょう。各部分別に掃除方法をご紹介します。<br>以下の掃除道具を準備します。</p>
				<ul class="mb3 u-list__ul_dot">
					<li>先端に毛が付いているブラシ</li>
					<li>酸素系漂白剤（過炭酸ナトリウム）</li>
					<li>乾いた布</li>
					<li>重曹</li>
					<li>クエン酸</li>
					<li>専用塩素系クリーナー</li>
					<li>酸素系洗濯槽クリーナー</li>
					<li>ごみすくいネット</li>
					<li>バケツ</li>
					<li>排水管用のブラシ</li>
					<li>ゴム手袋</li>
				</ul>
				<div class="mb3">
          <h4 class="cleaning01__ttl_m mb2">糸くずフィルター（くず取りネット）</h4>
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/12/cleaning12-02@2x.jpg" class="u-img__max mb1_sp" alt="糸くずフィルターの取り外し方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">糸くずフィルターは糸くずを取る装置で、ネット製とプラスチック製があります。</p>
						<p class="mb6">ネット製の場合は、洗濯機から糸くずフィルターを取り外し、ネットを裏返してごみを取り除きます。ごみが取りにくい場合は、乾燥させてから行なうと、取り除きやすくなります。</p>
						<p class="mb2">ネットの糸くずフィルターを水に浸けて歯ブラシで洗います。カビが気になる場合は、お湯と酸素系漂白剤に浸けて、最後に歯ブラシで細かい部分の汚れを落とすようにします。</p>
						<p class="mb2">水でよくすすいだ後、乾燥させてから元に戻します。糸くずフィルターが濡れたままだと雑菌が繁殖しやすくなりますから、しっかり乾燥させましょう。</p>
						<p class="mb2">プラスチック製の糸くずフィルターの場合も、歯ブラシで汚れを落とし、水洗いします。</p>
						<p class="mb3">洗濯機を使用したら、毎回糸くずフィルターを取り外して、ごみを取ることをおすすめします。糸くずフィルターに湿ったゴミが溜まっていると、洗濯槽内のカビの原因となります。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">洗剤投入口</h4>
				<p class="mb2">洗剤投入口には、洗剤カスが固まっていることもあります。取り外しが可能な洗剤受けであれば取り外し、洗剤カスや汚れを先端に毛の付いたブラシを使って水洗いします。<br>洗剤受けの取付口の汚れも歯ブラシで落とし、乾かします。その後、元に戻しましょう。</p>
				<p class="mb3">取り外せない場合は、先端に毛の付いたブラシに水を含ませて洗剤カスを取っていきます。</p>
        <h4 class="cleaning01__ttl_m mb2">洗濯槽</h4>
				<p class="mb3">洗濯槽は、酸素系漂白剤や専用クリーナーなど、市販のクリーナーで掃除することができます。なお、使用する洗剤によって掃除の所要時間は変わります。</p>
				<ul class="mb3 u-list__ul_maru">
					<li>塩素系クリーナー</li>
				  <p class="mb2">洗濯槽クリーナーとして市販されている洗剤です。市販の専用洗剤のほとんどは塩素系クリーナーで、非常に除菌力に優れているため、洗濯槽のカビ取りに適しています。</p>
				  <p class="mb2">塩素系クリーナーを洗濯槽に入れ、「槽洗浄コース」か「通常コース」を選択します。<br>洗濯機が回り終わるのを待ちます。</p>
				  <p class="mb2">終了後、ツンとしたニオイが残っている場合は、洗剤を入れずに、もう一度通常コースを選び、洗濯機を回します。</p>
				  <p class="mb3">塩素が洗濯槽内に残ったままだと衣類へダメージを与えますから、しっかりすすぐようにしましょう！</p>
					<li>酸素系クリーナー</li>
				  <p class="mb2">塩素系クリーナーと比べると、除菌力は少々弱いものの、汚れを落とす力が強いのが酸素系クリーナーです。</p>
				  <p class="mb2">50～60度のお湯を張った洗濯槽内に酸素系クリーナーを入れ、「洗いコース」を選びます。そして、洗濯機を1分回し、一時停止でロックを解除し、汚れをすくいます。この工程を、汚れが浮いてこなくなるまで繰り返しましょう。なお、洗濯機にお湯をためるときは、洗濯機の耐熱温度を確認するようにします。</p>
				  <p class="mb2">このとき、すくった汚れは排水口に流さず、新聞紙やペーパーなどにあけて捨てましょう。排水口に流してしまうと、配管の詰まりの原因になるためです。</p>
				  <p class="mb2">汚れが出なくなったら、5～6時間のつけ置きを行ないます。その後、すすぎと脱水をして完了です。</p>
				  <p class="mb2">なお、洗濯中に蓋が開けられないドラム式洗濯機や二層式洗濯機では使用できない場合もあるので、先に洗濯機の取扱説明書を確認することをおすすめします。</p>
				  <p class="mb3">また、重曹は上記で挙げた塩素系クリーナーや酸素系クリーナーと比較するとアルカリ度が弱く、除菌力も不足しています。そのため、洗濯槽の洗浄にはおすすめできません。</p>
				</ul>
        <h4 class="cleaning01__ttl_m mb2">排水ホース</h4>
				<p class="mb2">排水ホースは酸素系漂白剤を使って掃除します。<br>まず、洗濯機のコンセントを抜き、水道の蛇口を閉めておきます。</p>
				<div class="mb3 flex">
					<figure class="w50">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/12/cleaning12-03@2x.jpg" class="u-img__max mb1_sp" alt="排水ホースの掃除方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mt0 mb2">排水ホースを洗濯機から外したら、用意した排水管用の長いブラシでホースの中を洗います。</p>
						<p class="mb2">ホースの中を洗い、しっかりすすいだら、2Lのお湯に酸素系漂白剤大さじ1を溶かし、30分つけ置きます。</p>
					</div>
				</div>
				<p class="mb3">除菌が終わったら、排水ホースを2〜3回洗い流して完了です。また、排水ホースの先端の汚れは、歯ブラシでこすり落としましょう。</p>
        <h4 class="cleaning01__ttl_m mb2">排水口</h4>
				<p class="mb2">排水ホースの掃除が終わったら、排水口を掃除します。排水口には、糸くずや綿ぼこり、髪の毛や垢、洗剤カスなどがたまっている場合があります。排水口に多くの汚れがたまると、詰まりや悪臭、水漏れを引き起こす場合もあり、故障の原因にもなるので、定期的な掃除が必要です。</p>
				<p class="mb3">ゴム手袋をして、排水口の蓋を外しましょう。排水口の中にある、筒状の排水トラップも取り外します。</p>
				<div class="mb3 flex">
					<figure class="w50">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/12/cleaning12-04@2x.jpg" class="u-img__max mb1_sp" alt="排水口の掃除方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mt0 mb2">排水口に重曹を1カップ振りかけます。2L以上のお湯にクエン酸大さじ2程度を入れて溶かしたクエン酸水を、重曹の上にかけます。 発泡してきたら、すぐにお湯か水で流します。</p>
					</div>
				</div>
				<p class="mb3">待っている間に、外した排水口の蓋と排水トラップを洗いましょう。黒ずみやぬめりがある場合は、酸素系漂白剤とお湯でつけ置きしてから、スポンジやブラシで洗います。洗い終わったら、各パーツを排水口に戻して完了です。</p>
        <h4 class="cleaning01__ttl_m mb2">洗濯パン</h4>
				<p class="mb5">洗濯パンとは、洗濯機を支える台のことです。洗濯機の下はごみや汚れがたまりやすい場所ですから、洗濯パンの拭き掃除も忘れずに行ないましょう。</p>
				<div class="mikata mb3">
					<div class="mikata__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata@2x.png"
								alt="お掃除のミカタ 洗濯パンの掃除にハンガーとストッキングを活用！" style="max-width:278px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="mikata__ttl mb2">洗濯パンの掃除にハンガーとストッキングを活用！</h5>
						<div class="flex">
							<figure class="w50">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/12/cleaning12-05@2x.jpg" class="u-img__max mb1_sp" alt="ハンガーとストッキングを使用した掃除道具" style="max-width:320px;" loading="lazy">
							</figure>
							<div class="w50">
								<p class="mt0 mb2">洗濯機を動かさずに洗濯パンを掃除するのは、なかなか大変ですよね。洗濯パンの掃除に役立つアイテムが、ハンガーとストッキングです。ハンガーにストッキングを巻き付けて、さっと拭くだけでごみやほこりを取ることができます。</p>
								<p class="mt0">こまめに洗濯パンの掃除を行なえば、ほこりや髪の毛もたまりにくくなりますよ！</p>
							</div>
						</div>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">洗濯機全体</h4>
				<p class="mb2">各部分の掃除が終わったら、全体を掃除します。洗濯機の蓋、パッキンの裏や縁など、細かなところは、ほこりや洗剤カスがたまりやすい場所です。細かい部分は、歯ブラシで汚れを落とします。</p>
				<p class="mb2">洗剤カスがこびりついて、なかなか落ちないときはお湯をかけて、洗剤カスの塊を溶かして落とします。<br>その後、乾いたタオルで掃除機全体を拭いたら、掃除完了です。</p>
				<p class="mb3">この掃除は、洗濯機を使用したら必ず行なうようにしましょう。また、洗濯をする前にこれから洗うタオルやふきんで拭き掃除をしておくとよいでしょう。</p>
			</section>
			<section class="main__item mb8 mb4">
        <h3 class="cleaning01__secttl mb3" id="sentakuki03">ドラム式洗濯機の掃除の仕方</h3>
				<p class="level mb2">■所要時間：1時間～<br>■難易度：★★★★★<br>■掃除頻度の目安：1ヵ月に1回</p>
				<p>次にドラム式洗濯機の掃除方法をお伝えします。<br>以下のものを準備します。</p>
				<ul class="mb3 u-list__ul_dot">
					<li>布（糸くずが出ないマイクロファイバークロス）</li>
					<li>使い古した歯ブラシ</li>
					<li>先端に毛の付いたブラシ</li>
					<li>ドラム式対応の洗濯槽クリーナー</li>
					<li>酸素系漂白剤（過炭酸ナトリウム）</li>
				</ul>
        <h4 class="cleaning01__ttl_m mb2">乾燥フィルター</h4>
				<p class="mb2">ドラム式には、乾燥フィルターと内部フィルターの2枚があります。</p>
				<figure class="w50 center u-float__left">
					<img src="<?php echo $img_url?>/magazine/comic03/cleaning/12/cleaning12-06@2x.jpg" class="u-img__max mb1_sp" alt="ドラム式洗濯機の構造
					" style="max-width:320px;" loading="lazy">
				</figure>
				<div>
					<p class="mb2">乾燥フィルターを取り外してから、掃除機の先にブラシを付け、乾燥フィルターのほこりを吸い取ります。</p>
					<p class="mb2">次に内部フィルターを取り外します。取り外しができない場合は、水で濡らした布を絞って、拭き取ります。</p>
					<p class="mb2">取り外した乾燥フィルターと取り外し可能な内部フィルターは、水洗いします。</p>
				  <p class="mb2">汚れが落ちない場合は、洗面器に水を張り、フィルターを浸けて歯ブラシでこすりながら、水で汚れを洗い流します。</p>
					<p class="mb3">乾燥させてから、元に戻します。<br>乾燥フィルターのほこりは使用するたびに取ることをおすすめします。ほこりがたまり過ぎると、雑菌の住処になってしまう可能性もあるためです。</p>
				</div>
        <h4 class="cleaning01__ttl_m mb2">排水フィルター</h4>
				<p class="mb2">排水フィルターは、洗濯機の下部の小さな扉の中にあります。洗濯する度にごみがたまるため、洗濯機を使用するたびに清掃しましょう。</p>
				<p class="mb3">排水フィルターのほこりを取り除き、汚れやぬめりなどがある場合は、水洗いします。細かいところは、歯ブラシを使って、優しくこすって落とすようにします。</p>
        <h4 class="cleaning01__ttl_m mb2">洗剤投入ケース</h4>
				<p class="mb2">洗剤投入ケースには、洗剤カスや水垢がたまったり、カビの繁殖原因になったりするため、清潔にしておきましょう。</p>
				<p class="mb3">取扱説明書を見ながら、洗剤投入ケースを外します。洗剤カスや水垢の汚れはブラシを使って、水、あるいはぬるま湯で落としましょう。</p>
        <h4 class="cleaning01__ttl_m mb2">ゴムパッキン</h4>
				<p class="mb3">ゴムパッキンは細かいほこりや糸くずなどがたまりやすい場所です。<br>なるべく糸くずが出ない布、たとえばマイクロファイバークロスで、ゴムパッキンに付いたほこりを取り除くようにします。その後、ゴムパッキンをめくり、布に少し水を付けて拭き取るようにします。</p>
        <h4 class="cleaning01__ttl_m mb2">洗濯槽</h4>
				<p class="mb2">ドラム式対応の洗濯槽クリーナーもしくは、酸素系漂白剤（過炭酸ナトリウム）1カップとお湯を投入します。</p>
				<p class="mb2">標準コースで「洗い～脱水」まで、洗濯機を回します。<br>槽洗浄モードがある場合は、槽洗浄モードのボタンを押し、終わるまで待ちます。<br>終わったらドアを開けて内部を乾燥させます。</p>
			</section>
      <section class="main__item mb3">
        <h3 class="cleaning01__secttl mb3" id="sentakuki04">洗濯機に汚れをためないコツ</h3>
				<p class="mb3">洗濯機は使うたびに汚れがたまるため、あっという間にカビが発生しやすい傾向にあります。<br>カビを防ぐコツは、洗濯が終わったら蓋は閉めずに、開けておくことです。使ってすぐに蓋を閉めると、カビが発生しやすくなりますから注意してくださいね！<br>そのほか、気を付ける点をお伝えします。</p>
        <h4 class="cleaning01__ttl_m mb2">洗剤や柔軟剤は適量を使用する</h4>
				<p class="mb3">洗剤や柔軟剤を適量以上入れると、溶けずに残ってしまい、洗濯槽にすすぎ残しが付着しやすくなります。洗濯槽の汚れやカビの原因にもなるので、使用量には注意が必要です。洗剤と柔軟剤は、最も効果があるとされる適量を使うようにしましょう。</p>
        <h4 class="cleaning01__ttl_m mb2">お風呂の残り湯を使わない</h4>
				<p class="mb3">湯船の残り湯を使って洗濯する人もいることでしょう。しかし、湯船のお湯には雑菌や汚れが多く含まれています。洗濯に使うと、浴槽と洗濯機をつなぐ給水ホースの内側と洗濯槽が汚れ、カビや雑菌が繫殖する原因にもなります。お風呂のお湯を使った洗濯を控えるだけで、洗濯槽に汚れがたまりにくくなりますよ。</p>
        <h4 class="cleaning01__ttl_m mb2">脱いだ服を洗濯機に放置しない</h4>
				<p class="mb3">洗濯槽に脱いだ服を放り込んでおくと、槽内が乾きにくく湿った状態が続くためカビが増殖しやすくなります。<br>脱いだ服は洗濯機に入れず、洗濯かごに入れるようにしましょう。</p>
				<div class="pr mb3">
					<div class="pr__row">
						<div>
							<h4 class="center mb2">
							<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase@2x.png"
								alt="洗面化粧台の鏡や蛇口の汚れ…ずっと気になってませんか？" style="max-width:80px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="pr__ttl center mb2">洗面化粧台の鏡や蛇口の汚れ…<br>ずっと気になってませんか？</h5>
							<p class="mb2">洗濯機置き場の近くにある洗面室。毎朝の支度や手洗い・うがいなど、実は家族全員の利用頻度が高い場所の1つです。それなのに、鏡が汚れで見えづらかったり、蛇口にカビがこびりついていると不衛生なだけでなく、気分も上がらないですよね。プロによる洗面化粧台クリーニングなら、鏡も蛇口も、収納スペースもピカピカに！こびりついた汚れもしっかり落とすことができます。ぜひ一度、プロの技術を試してみては？</p>
							<div class="center">
								<p class="pr__txt">洗面台クリーニング</p>
								<a href="https://e-suteki.haseko.jp/house_cleaning/bathroom-vanity-cleaning.html" target="_blank" data-ga-click="cleaning12_1" class="pr__btn center">詳しくはこちら</a>
						  </div>
					</div>
				</div>
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb hikari03">
							<div class="inner-border">
								<div>
									<p>洗濯機がピカピカになった～！うれしくて、たくさん洗濯しちゃった！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb koto_r">
							<div class="inner-border_r">
								<div>
									<p>今日の洗濯物、気持ちいいね～♪</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb seiji03">
							<div class="inner-border">
								<div>
									<p>洗いたての服やタオルから嫌なニオイがしないな<br>よし、これからは洗濯機を定期的に掃除しよう！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb0 kirari_r">
							<div class="inner-border_r">
								<div>
									<p>こまめに洗濯機を掃除する習慣をつけるといいニャ<br>週末に糸くずフィルター、月末には洗濯槽の掃除をする！<br>そう決めておくと、洗濯機の掃除を忘れなくなると思うニャ！</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
    </div>
    <div class="main__item mb0">
			<?php
				include ($inc_path."/lib/inc/page/_magazine/__cleaning-footer.php");
			?>
		</div>
  </article>
</main>

<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
