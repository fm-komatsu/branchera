<?php
//base
include ("../../function.php");
$content = get_id_data('25018');
$pageTtl = 'あなたの今を聞かせて！<br>〜クローゼットの整理収納、上手にできていますか？';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'ふだん着ている洋服だけでなく、シーズンオフの衣類も収納することが多いクローゼット。つい詰め込みすぎてシワになったり、何がどこにあるかわからなかったり、うまく整理ができなくて困っていませんか？ブランシエラクラブ会員のみなさんは、どんな状況なのでしょうか。収納のお悩みや、とっておきのアイデアなどを聞いてみました。きっと参考になるはず！';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年7月29日（木）～8月4日（水）";
// 回答者数
$respondents ="計2,976名";
// 対象者：
$target = "長谷工IDをお持ちの方で、マンションにお住まいで、今のクローゼット収納を、もっとすっきりしたいと思っていらっしゃる方";

$cafeReportNum = "18";


//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
  <article class="main__row ">
    <?php
		$panAry[] = array("/magazine/" ,"ブランシエラマガジン");
    $panAry[] = array("/magazine/index_imakura-cafe.php" ,"いま暮らCaf&eacute;");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_magazine/cafe-header.php");
    ?>
		<aside class="mt3 mb3">
			<?php //$CmGtmId = '1'; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php"); ?>
		</aside>
    <div class="main__wrapper cafe-report__wrapper">
      <section class="main__item mb8 mb4_sp">
        <h2 class="u-font-size__30 u-color__dark mb2">クローゼットの整理収納、上手にできていますか？</h2>
        <div class="u-assist_cafe_low u-only__pc u-font__palt">
          回答期間&emsp;&emsp;&emsp;：&emsp;<?php echo $period ?><br>
          回答者数&emsp;&emsp;&emsp;：&emsp;<?php echo $respondents ?><br>
					対象者&emsp;&emsp;&emsp;&emsp;：&emsp;<?php echo $target ?>

        </div>
        <div class="u-assist_cafe_low u-only__sp u-font__palt">
          回答期間：<?php echo $period ?><br>
					回答者数：<?php echo $respondents ?><br>
					対象者：<?php echo $target ?>
        </div>
        <div class="mb6 mb3_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v@2x.jpg" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.jpg" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="クローゼットの整理収納、上手にできていますか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="クローゼットの整理収納、上手にできていますか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>ふだん着ている洋服だけでなく、シーズンオフの衣類も収納することが多いクローゼット。つい詰め込みすぎてシワになったり、何がどこにあるかわからなかったり、うまく整理ができなくて困っていませんか？ブランシエラクラブ会員のみなさんは、どんな状況なのでしょうか。収納のお悩みや、とっておきのアイデアなどを聞いてみました。きっと参考になるはず！</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="使っているクローゼットは壁面タイプが半数 ウォークインクローゼットの人も多い｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="使っているクローゼットは壁面タイプが半数 ウォークインクローゼットの人も多い｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3 u-font__palt">クローゼットといっても、いろんな種類がありますよね。奥行きが限られた壁面クローゼットもあれば、中に人が歩いて入れるウォークインクローゼットもあり。さらに出入口が２カ所あって通り抜けできるウォークスルークローゼットや、家族みんなの衣類をまとめて収納するファミリークローゼットも…。会員のみなさんにお使いの種類を聞くと約半数が壁面クローゼットでした。多くの洋室に設置されているから納得です。次いで多かったのがウォークインクローゼット。この2種類を合わせると約9割に上りました。<br>長谷工が施工しているマンションでは、壁面クローゼットの奥行きは60cm前後、高さは220～240cmが一般的。小スペースで設置できますが、大きくかさばるものを収納するには向いていません。一方、ウォークインクローゼットは2〜3畳ほどの広さが必要ですが、洋服だけでなく、布団やスーツケースのようなかさばるものを収納することもできますから、最近人気が高まっています。広さが十分にあればカンタンな入れ替えだけで、面倒な衣替えをしなくて済むのもうれしいですね。</p>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01-sp@2x.png" alt="円グラフ｜私も壁面クローゼット使ってます image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
						</div>
						<div class="u-column__item u-only__pc">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img@2x.png" alt="円グラフ｜私も壁面クローゼット使ってます image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:292px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section>
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="クローゼットの不満は「狭い！」がダントツかといって部屋に収納ボックスは置きたくないリフォームで収納不足を解消するのも賢い手｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="クローゼットの不満は「狭い！」がダントツかといって部屋に収納ボックスは置きたくないリフォームで収納不足を解消するのも賢い手｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column u-only__pc">
					<div class="u-column__2">
						<div class="u-column__item">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="キレイに収納するのは難しいですよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:307px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="将来的にリフォームもありかも... image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:355px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="u-only__pc mb4">今使っているクローゼットに満足していますか？誰しも何かしら不満を持っているのではないでしょうか。会員のみなさんも、さまざまな悩みを抱えているご様子です。「布団などのかさばるものを収納できない」、「無駄な空間ができてしまう」、「高い位置にある棚に手が届かず、使いづらい」、「奥行きがありすぎて、うまく使えない」、「風通しが悪いのでカビが発生しやすい」、「暗くて奥が見えづらい」といった声があがりました。なかでも圧倒的に多かったのは、「狭い！」という不満。共感する人も多いのでは？でも、クローゼットの収納面積を自力で広げるのは難しいですよね。かといって、別の場所にキャビネットや収納ボックスを置くと見映えが悪くなり、住空間も狭くなってしまいます。切実に困っている人は、思い切ってリフォームを考えてはいかがですか？たとえば使っていない和室を広いクローゼットにすれば、収納不足の悩みが一挙に解決できそう。そこまで大がかりじゃなくても、デッドスペースの活用や棚の設置など、ちょっとした工夫や模様替えで収納力がアップできますよ。</p>
						</div>
					</div>
				</div>
				<div class="u-only__sp mb4_sp">
					<p>今使っているクローゼットに満足していますか？誰しも何かしら不満を持っているのではないでしょうか。会員のみなさんも、さまざまな悩みを抱えているご様子です。「布団などのかさばるものを収納できない」、「無駄な空間ができてしまう」、「高い位置にある棚に手が届かず、使いづらい」、「奥行きがありすぎて、うまく使えない」、「風通しが悪いのでカビが発生しやすい」、「暗くて奥が見えづらい」といった声があがりました。なかでも圧倒的に多かったのは、「狭い！」という不満。共感する人も多いのでは？</p>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="キレイに収納するのは難しいですよね  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
					<p>でも、クローゼットの収納面積を自力で広げるのは難しいですよね。かといって、別の場所にキャビネットや収納ボックスを置くと見映えが悪くなり、住空間も狭くなってしまいます。切実に困っている人は、思い切ってリフォームを考えてはいかがですか？たとえば使っていない和室を広いクローゼットにすれば、収納不足の悩みが一挙に解決できそう。そこまで大がかりじゃなくても、デッドスペースの活用や棚の設置など、ちょっとした工夫や模様替えで収納力がアップできますよ。</p>				
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02-sp@2x.png" alt="将来的にリフォームもありかも... image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="悩み多きクローゼットの収納。突っ張り棒、フック、吊り下げラックなど便利グッズを使って工夫している｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="悩み多きクローゼットの収納。突っ張り棒、フック、吊り下げラックなど便利グッズを使って工夫している｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="まずは断捨離しようかしら！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:334px" loading="lazy">
							</figure>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="ちょっとした工夫で収納スペースを確保できます image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:357px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="mb5">使えないすき間ができてしまったり、奥のものが取り出しにくかったりと、悩み多きクローゼット。衣類やモノをうまく収納するために、何か工夫をしていますか？会員のみなさんの工夫をちょっとご紹介しますね。「小物類は吊り下げラックに入れて吊るしている」、「衣装ケースやぴったりサイズの引き出し家具を置いて無駄なスペースを作らない」、「扉の裏側にフックを設置」、「突っ張り棒で洋服を二重に掛けられるようにしている」、「圧縮して収納」、「よく着る服は手前に収納」など、苦心の様子がうかがえます。また、「洋服を買わない」「着ないものはすぐに処分する」、「着ないものはフリマアプリで出品」など、そもそも衣類を増やさないようにしているという回答もたくさんありました。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="まずは断捨離しようかしら！  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								クローゼットの収納を本気で見直すなら、まず必要でないものを処分することからスタート！次に季節や用途別に洋服を分類しましょう。クローゼットの広さは限られていますから、デッドスペースをうまく活用するのも大切なポイントです。衣装ケースなどのボックス類はもちろん、突っ張り棒、フック、吊り下げホルダー、ワイヤーネットなど便利なアイテムを積極的に利用しましょう。キャスター付きのラックや衣装ケースもおすすめ。前後を入れ替えやすいし、床のお掃除もしやすくなりますよ。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02-sp@2x.png" alt="ちょっとした工夫で収納スペースを確保できます image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="最多は5点で「普通」の自己評価。全体では苦手意識を持つ人がやや多い｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="最多は5点で「普通」の自己評価。全体では苦手意識を持つ人がやや多い｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="どうしたら上手に収納できるかな？ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:364px" loading="lazy">
						  </figure>
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="片付け上手って憧れですよね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:347px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item u-only__pc">
							<p class="u-only__pc mb4">収納の達人、周りに一人や二人はいますよね。そんな友人のクローゼットを拝見すると、何がどこにあるのかが一目瞭然。一つひとつの衣類が大切に保管されている感じで、「なんでそんなにきれいにきちんと整理できるの？」と感心してしまいます。かたや私のクローゼットときたら…（ため息）。もし、自分の整理収納力に10点満点で点数を付けるとしたら、うーむ、3点ぐらいかな。あなたは何点ですか？会員のみなさんで最も多かった点数は5点。可もなく不可もなし、という自己評価でしょうか。一方、4点以下を付けた人は計41％、6点以上を付けた人は計34％で、苦手派がやや優勢。ちなみに自己評価が低めの人の中で多かった点数は3点（15％）で、0点と答えた人も４％いました。逆に自己評価が高めの人の中で多かったのは6点（13％）。10点満点と答えた人は1％と少数でした。収納上手のみなさんに、コツを教えていただきたい！</p>
						</div>
						<div class="u-column__item u-only__sp">
							<p class="mb5 mb4_sp">収納の達人、周りに一人や二人はいますよね。そんな友人のクローゼットを拝見すると、何がどこにあるのかが一目瞭然。一つひとつの衣類が大切に保管されている感じで、「なんでそんなにきれいにきちんと整理できるの？」と感心してしまいます。かたや私のクローゼットときたら…（ため息）。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="どうしたら上手に収納できるかな？ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								もし、自分の整理収納力に10点満点で点数を付けるとしたら、うーむ、3点ぐらいかな。あなたは何点ですか？会員のみなさんで最も多かった点数は5点。可もなく不可もなし、という自己評価でしょうか。一方、4点以下を付けた人は計41％、6点以上を付けた人は計34％で、苦手派がやや優勢。ちなみに自己評価が低めの人の中で多かった点数は3点（15％）で、0点と答えた人も４％いました。逆に自己評価が高めの人の中で多かったのは6点（13％）。10点満点と答えた人は1％と少数でした。収納上手のみなさんに、コツを教えていただきたい！
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="片付け上手って憧れですよね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="クローゼット収納のアイデアで参考になる情報を得ているのは「雑誌」「ウェブサイト」「テレビ」の順｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="クローゼット収納のアイデアで参考になる情報を得ているのは「雑誌」「ウェブサイト」「テレビ」の順｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="なぜか部屋が散らかってしまいます... image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:341px" loading="lazy">
						  </figure>
						  <figure>
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="収納のコツ、教えて欲しいです〜 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:316px" loading="lazy">
						  </figure>
						</div>
						<div class="u-column__item u-only__pc">
							<p class="u-only__pc mb4 u-font__palt">上手な収納のアイデアは、よく雑誌やテレビなどでも取り上げられるテーマですよね。すっきりと片付かないクローゼット問題に頭を抱えている人にとって、暮らしが快適になる整理・収納術がカンタンに学べるのはとてもうれしいこと！そこで会員のみなさんに、収納アイデアを知るときに参考にしているものは何かを聞いてみました。なんと、最も多かったのは「特になし」（27％）という回答。今の自分流の収納の仕方で満足しているから？それとも「整理整頓は苦手だけど、ま、いいか」といった感じで気にしていない？そこのところを突っ込んでみたくなりました。参考にしている情報の中でトップだったのは「雑誌」（26％）でした。次いで「ウェブサイト」（19％）、「テレビの収納特集」（16％）、「YouTube」（6％）、「書籍」（5％）、「セミナー参加」（1％）の順に続きます。みなさん、雑誌やインターネット、テレビなど、いつも身近にあって手軽に利用できるものから情報を得ているようですね。インターネットなら好きな時間に調べられるので、「特になし」の人も試しに検索してみては？収納の悩みを解決する方法やうれしいアドバイスが見つかるかもしれません。</p>
							<a href="<?php echo($base_url)?>/magazine/article/sumai-sos-vol01.php" data-ga-click="cafe18_1">
								<figure class="mb3">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01@2x.png" alt="「住まいのSOS」上手なクローゼット収納｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
								</figure>
							</a>
							<a href="https://e-suteki.haseko.jp/suteki/kid-special-2.html?utm_source=brc_cafe_vol18&utm_medium=web&utm_campaign=kid_special_2" data-ga-click="cafe18_2" target="blank">
								<figure class="mb3">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn02@2x.png" alt="長谷工Xおうちデトックス｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
								</figure>
							</a>
						</div>
						<div class="u-column__item u-only__sp">
							<p class="mb5 mb4_sp u-font__palt">上手な収納のアイデアは、よく雑誌やテレビなどでも取り上げられるテーマですよね。すっきりと片付かないクローゼット問題に頭を抱えている人にとって、暮らしが快適になる整理・収納術がカンタンに学べるのはとてもうれしいこと！そこで会員のみなさんに、収納アイデアを知るときに参考にしているものは何かを聞いてみました。なんと、最も多かったのは「特になし」（27％）という回答。今の自分流の収納の仕方で満足しているから？それとも「整理整頓は苦手だけど、ま、いいか」といった感じで気にしていない？そこのところを突っ込んでみたくなりました。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="なぜか部屋が散らかってしまいます... image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								参考にしている情報の中でトップだったのは「雑誌」（26％）でした。次いで「ウェブサイト」（19％）、「テレビの収納特集」（16％）、「YouTube」（6％）、「書籍」（5％）、「セミナー参加」（1％）の順に続きます。みなさん、雑誌やインターネット、テレビなど、いつも身近にあって手軽に利用できるものから情報を得ているようですね。インターネットなら好きな時間に調べられるので、「特になし」の人も試しに検索してみては？収納の悩みを解決する方法やうれしいアドバイスが見つかるかもしれません。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02-sp@2x.png" alt="収納のコツ、教えて欲しいです〜  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
							<a href="<?php echo($base_url)?>/magazine/article/sumai-sos-vol01.php" data-ga-click="cafe18_1">
								<figure class="mb3">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn01-sp@2x.png" alt="住まいのSOS」上手なクローゼット収納｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
								</figure>
							</a>
							<a href="https://e-suteki.haseko.jp/suteki/kid-special-2.html?utm_source=brc_cafe_vol18&utm_medium=web&utm_campaign=kid_special_2" data-ga-click="cafe18_2" target="blank">
								<figure class="mb3">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__btn02-sp@2x.png" alt="長谷工Xおうちデトックス｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
								</figure>
							</a>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="mb3">
					<h4>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl@2x.png" alt="我ながらグッドアイデア｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl-sp@2x.png" alt="我ながらグッドアイデア｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
					</h4>
				</div>
				<div>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
				</div>
			</section>
			<section class="mb3">
				<figure class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
			</section>
    </div>
		<div class="main__item">
			<h5 class="cafe-backnum">いま暮らCaf&eacute;バックナンバー記事</h5>	
			<p class="mb2">過去にみなさまからの“声”をお聞きした記事も是非ご覧ください！</p>
			<a href="<?php echo($base_url)?>/magazine/article/cafe-vol09-report.php" data-ga-click="">
					<figure class="mb3">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/footer__cafevol09_btn@2x.png" alt="あなたの今を聞かせて！「上手な収納」｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:378px" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/footer__cafevol09_btn-sp@2x.png" alt="あなたの今を聞かせて！「上手な収納」｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
					</figure>
			</a>
		</div>
    <?php include ($inc_path."/lib/inc/page/_magazine/__back_num_cafe-report.php") ?>
	</article>
	<aside class="mt3 mb3">
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php");?>
	</aside>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
