<?php
//base
include ("../../function.php");
$content = get_id_data('25009');
$pageTtl = 'あなたの今を聞かせて！<br>上手な収納 ';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '気づかないうちに増えるモノたちで、住まいが雑然としてしまっていませんか？くつろぎの空間が散らかっていると、落ち着かなくてストレスも溜まりがち。収納に工夫をして、すっきりと片付いた気持ちのいい暮らしがしたいものですね。ブランシエラクラブ会員のみなさんに、自宅の収納についての思いを聞いてみました。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年3月25日（木）～3月31日（水）";
// 回答者数
$respondents ="計2,075名";
// 対象者：
$target = "長谷工IDをお持ちの方で、新築マンション入居から5年以内の方";

$cafeReportNum = "09";


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
        <h2 class="u-font-size__30 u-color__dark mb2">上手な収納</h2>
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
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="あなたの今を聞かせて！上手な収納｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl-sp@2x.png" alt="あなたの今を聞かせて！上手な収納｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>気づかないうちに増えるモノたちで、住まいが雑然としてしまっていませんか？くつろぎの空間が散らかっていると、落ち着かなくてストレスも溜まりがち。収納に工夫をして、すっきりと片付いた気持ちのいい暮らしがしたいものですね。ブランシエラクラブ会員のみなさんに、自宅の収納についての思いを聞いてみました。</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="我が家は「片付いている」と思う人は4割。片付かなくて頭を抱える人も3割以上！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="我が家は「片付いている」と思う人は4割。片付かなくて頭を抱える人も3割以上！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3">「片付けなくっちゃ」と思っても、面倒だったり、やり方がわからなかったりと、なかなか重い腰が上がらないのが住まいの整理整頓。きれいに整理された住まいは居心地の良いものだと頭ではわかっていても、うまく片付けられなくて悩んでいる人が多いのでは？ダイニングのテーブルがすぐに物置状態になってしまう、また、せっかくリビングをキレイに片付けても元気な子どもがあっという間に散らかしちゃう…。そんなガッカリも“あるある”ですよね。ところが、ブランシエラクラブ会員のみなさんはけっこう収納上手と判明。「あなたの家は片付いている方だと思いますか？」と尋ねたところ、意外にも4割の人が「片付いている」と感じていると答えました。さすがですね！一方で、3割以上の人が「片付いていない」と現状に不満を感じています。</p>
						</div>
						<div class="u-column__item">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img@2x.png" alt="円グラフ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:335px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img-sp@2x.png" alt="円グラフ｜私はマンションの最上階に住むのが夢なんです〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="片付かないのはモノが多すぎて、収納が足りないから。忙しくて時間が無いというワーキングママの悩みもあり。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="片付かないのはモノが多すぎて、収納が足りないから。忙しくて時間が無いというワーキングママの悩みもあり。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01_img01@2x.png" alt="服は場所を取るのよね。　image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:354px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01_img02@2x.png" alt="パパ、ママの顔が目に浮かびます！頑張って！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:342px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>「家が片付かない」と答えた人にその原因を尋ねると、ダントツで多かったのは「モノが多すぎるから」でした。「収納が足りない」も合わせると8割に上ります。なるほど、ナットク。収納スペースよりもモノの絶対量が多ければ、どうしたって片付きませんよね。何年も使っていないモノをいざ断捨離しようとしても、「もしかしたら、いつか必要になるかも」と考えてしまい、手放せない…。そんな心理も働いて、モノが増えるばかりの人も多いのではないでしょうか？<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="服は場所を取るのよね。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								また、共働きや子育て中の人からは、「時間がない」、「子どもが散らかす」という声もたくさん上がっています。確かに育ち盛りの子どもがいると、片付けているそばからおもちゃを引っ張りだしたりして、正直、笑い事ではなく散らかりますよね。特に毎日がてんやわんやのワーキングママにとって、部屋のお片付けは頭が痛い問題でしょう。「仕事が終わってから子どもの迎え、買い物、夕飯、お風呂、洗濯…と大忙しで、片付ける時間は残ってない」という悲鳴が聞こえてきそうです。<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02-sp@2x.png" alt="パパ、ママの顔が目に浮かびます！頑張って！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02_ttl@2x.png" alt="収納に関するいちばんの不満は、やはりスペース不足！出し入れ熨斗に草谷湿気も気になるところ。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="収納に関するいちばんの不満は、やはりスペース不足！出し入れ熨斗に草谷湿気も気になるところ。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="洋服が増えないように心掛けています！　image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:361px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="一緒に片づけるのはいいですね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:372px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>収納家具を置くと住空間が狭くなるし、収納が足りないと散らかるし…。何かと悩ましい収納問題。マンションにお住まいのみなさんに、備え付けの収納スペースに対する満足度を尋ねたところ、満足している人は約3割。一方、不満を持っている人が約4割とやや多い結果でした。不満に思うことの大半はやはり収納不足。「キッチン収納が少ない」、「クローゼットが狭い」といった悩みが目立ちます。続いて「出し入れしにくい」、「奥行きが狭くて使いづらい」といった使い勝手の不満や、「風通しが悪く、湿気が気になる」という声も聞かれました。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="洋服が増えないように心掛けています！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								ただ、収納スペースは単にたくさんあればよいというものではなく、ライフスタイルに合った使い方ができるかどうかが大切。使いたいときにすぐに取り出せて、スムーズに元の位置に戻せるのが理想です。たとえば、家族でくつろぐリビングの壁の一面に「見せる棚」を取り付けてみてはいかがですか？本や観葉植物、お気に入りの小物を飾り、テレビやスピーカーなどもここに収めると、すっきりと素敵に見えます。散らかる玩具で困っているなら、大きめのおもちゃ箱を用意して、子どもに自分で片付ける習慣を身に付けさせるのも良い方法です<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02-sp@2x.png" alt="一緒に片づけるのはいいですね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="ネットやテレビで収納アイデアを知る人が7割。オンラインショップでも便利な収納グッズを発見！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="ネットやテレビで収納アイデアを知る人が7割。オンラインショップでも便利な収納グッズを発見！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="Webサイトの収納アイデアは本当に助かりますね。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:352px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="僕の周りにも収納上手がいますよ。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:344px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p class="mb8 mb4_sp">キッチン用品や衣類、ストック類など、暮らしに必要なモノがうまく収納できない…。そんなときに知りたいのが、片付けの達人のやり方や収納のプロのアドバイス。賢い収納方法や便利な収納グッズの情報を得るために、あなたは何を参考にしていますか？家具や生活用品のショップを見て回ることや、収納上手な友人に聞くのもいい方法ですが、いちばんお手軽に見つけられるのはWEBサイトですよね。ネットで「収納」を検索するとたくさんのアイデアが出てきて参考になります。インスタグラムなどのSNSで達人やプロがアップした収納の仕方を見て真似たり、テレビ番組や雑誌で見てビビッときた収納アイデアを利用するという人もいたり！そうして収納術に磨きをかけているブランシエラクラブ会員の方がたくさんいました。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="Webサイトの収納アイデアは本当に助かりますね。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">今あるスペースをもっと有効活用したいなら、オリジナルな収納グッズを中心に扱っているオンラインショップを覗いてみるのもおすすめです。目からウロコのアイテムに出会える可能性が大！たとえば我が家のクローゼットにマッチする収納パーツが見つかれば、グンと使いやすくなり、収納力もアップします。トイレに置くスリムなラックや、壁面に取り付けるお洒落なフックなど、お手軽グッズも豊富なので、上手に利用してすっきりと美しい暮らしをかなえましょう。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="僕の周りにも収納上手がいますよ。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
							<div class="cafe-report__link mb3">
								<a href="https://www.haseko.co.jp/branchera/magazine/article/foris-vol01.php" target="_blank" data-ga-click="cafe9_1">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn@2x.png" alt="プロによる収納アドバイスはこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:332px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__btn-sp@2x.png" alt="プロによる収納アドバイスはこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="”あったらうれしい”のはウォークインクローゼット。キッチンや玄関の収納を充実させたい人も多数。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="”あったらうれしい”のはウォークインクローゼット。キッチンや玄関の収納を充実させたい人も多数。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column__2 mb3 mb2_sp">
					<figure class="u-column__item">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="こんな広いクローゼットは私も憧れます～｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
					</figure>
					<div class="u-column__item">
						我が家に“あったらうれしい”のは、どんな収納ですか？今より収納を充実させたい場所はどこでしょう？なんと、みなさんの回答は圧倒的にクローゼットでした。特に目立ったのがウォークインクローゼット。人が歩ける広さを確保した衣類の収納スペースです。確かにウォークインクローゼットがあれば、洋服がたっぷりしまえて、出し入れもラクですし、衣替えの手間も省けそう。続いて多かったのがキッチン。食器類や調理器具を使いやすくしまえる収納があると、調理スペースも広く使えてうれしいですよね。キッチン近くに、お米や飲料、食品ストック類の収納場所としてパントリーがほしいという声も上がりました。玄関の収納をもっと充実させたいと答えた人も多数。玄関は家の顔ですから、靴類は出しっ放しにせずに靴箱に収納して、いつもきれいに保ちたいもの。また、玄関にコート掛けや鍵などの小物を置くスペースがあるだけでも外出や帰宅が快適になりそうです。
						<br>
						<figure class="u-only__sp mt2_sp mb2_sp">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="こんな広いクローゼットは私も憧れます～｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
						いずれにしても、収納で大切なのは出し入れしやすくて、家族が無理なく片付けられること。家族構成やモノの量、お部屋の間取り、生活動線など、ライフスタイルに合った収納の仕方を考えましょう。上手な収納でみなさんの暮らしが素敵なものになりますように！
					</div>
				</div>
			</section>
			<section>
				<div clas="mb3">
					<h4>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl@2x.png" alt="Picup!!教えてあげたい、我が家の収納アイデア｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__ttl-sp@2x.png" alt="Picup!!教えてあげたい、我が家の収納アイデア｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
					</h4>
				</div>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/pickup__img-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
				<div>
				</div>
			</section>
			<section class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
			</section>
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
