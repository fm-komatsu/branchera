<?php
//base
include ("../../function.php");
$content = get_id_data('25008');
$pageTtl = 'あなたの今を聞かせて！<br>季節替わりの準備';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'コロナ禍でお花見やお祭りなどの自粛が相次ぎ、季節を感じにくくなっているこの頃。とはいっても、気候のほうはおかまいなく変わっていくので、厚いコートから薄手の上着に、長袖から半袖に…と衣服の入れ替えをしなければなりません。<br>今回はそんな変わらない暮らしの一コマである「衣替え」にスポットをあててみました。コロナ禍の影響はやはりあったようですが果たして…。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年3月11日（木）～3月17日（水）";
// 回答者数
$respondents ="計2,697名";
// 対象者：
$target = "長谷工IDをお持ちの方で、冬物から春夏物への衣替えの収納にあれこれ悩んでいる方";


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
        <h2 class="u-font-size__30 u-color__dark mb2">季節替わりの準備</h2>
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
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/main-v@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/main-v-sp@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/ttl__info@2x.png" alt="あなたの今を聞かせて！季節替わりの準備｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/ttl__info-sp@2x.png" alt="あなたの今を聞かせて！季節替わりの準備｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>コロナ禍でお花見やお祭りなどの自粛が相次ぎ、季節を感じにくくなっているこの頃。とはいっても、気候のほうはおかまいなく変わっていくので、厚いコートから薄手の上着に、長袖から半袖に…と衣服の入れ替えをしなければなりません。<br>
今回はそんな変わらない暮らしの一コマである「衣替え」にスポットをあててみました。コロナ禍の影響はやはりあったようですが果たして…。</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/q1__ttl@2x.png" alt="「衣替えのタイミング」は？暦の上では6月と10月。でもそう簡単にはいかないのが実情。みなさん、五感を活用して自分なりのタイミングをはかっているようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/q1__ttl-sp@2x.png" alt="「衣替えのタイミング」は？暦の上では6月と10月。でもそう簡単にはいかないのが実情。みなさん、五感を活用して自分なりのタイミングをはかっているようです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3">「6月1日や10月1日など暦に応じて」という方は約10 ％と少なく、70％以上の方が「体感温度（最低・最高気温の変化）」と答えています。<br>「衣替えした後に季節が戻ってまた衣類を引っ張り出した」や「もう寒くないとダウンコートをクリーニングに出したら急に寒い日がきて、また袖を通してしまった」など、なかなか暦通りにはいかないもの。やはり体感重視で「自分の身体の声を聞け！」ということでしょうか。<br>意外だったのは「衣替えはしない」という方が少なからずいたこと。断捨離ブームで衣服が少なくなったり、ウォークインクローゼットが普及したりして必要がなくなりつつもあるようです。「きちんとした衣替えは中学の制服まで。最近は『衣替え』の文言は死語なのでは？」なんてご意見も。</p>
						</div>
						<div class="u-column__item">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/q1__img01@2x.png" alt="円グラフ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:335px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/q1__img01-sp@2x.png" alt="円グラフ｜私はマンションの最上階に住むのが夢なんです〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:216px" loading="lazy">
							</figure>
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/q1__img02@2x.png" alt="私も体感で決めてますね〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:268px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/q1__img02-sp@2x.png" alt="私も体感で決めてますね〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:208px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec01__ttl@2x.png" alt="「いざやってみて困ったこと」のツートップは「収納場所が少ない」と「衣類が傷んでいた」でした｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec01__ttl-sp@2x.png" alt="「いざやってみて困ったこと」のツートップは「収納場所が少ない」と「衣類が傷んでいた」でした｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec01__img01@2x.png" alt="冬服はかさばるね　image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:354px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec01__img02@2x.png" alt="お気に入りの服に限って虫に食われてたりしますよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:342px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>まずは収納場所に対するお悩み。「全部出し終わり入れ替えを始めたら、入りきらず途方に暮れた」など。この現象はどうやら冬から春・夏への衣替え時に発生するようです。「夏服は薄手なのでスッキリ収納できるが、冬服は厚手なので収納に困る」「冬の時期に嵩張るコートを複数枚購入してしまい、収納ができなくなってしまった」と、かさばる冬服問題があるようです。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec01__img01-sp@2x.png" alt="冬服はかさばるね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								また「服が多すぎ！」なのには「洋服が捨てられない。断捨離が苦手」や「コレ今年は着なかったなぁ…と思いながら、またしまい直してしまう」などの「服を捨てられない問題」も隠れているようです。<br>続いて服の傷みに関するお悩み。「礼服にカビが生えていた」「たたみじわが酷くてアイロンのかけ直しをしなければいけなかった」「衣類が変色していた、穴が空いていた」など手入れに関するものも目立ちました。<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec01__img02-sp@2x.png" alt="お気に入りの服に限って虫に食われてたりしますよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec02__ttl@2x.png" alt="「いざやってみて困ったこと」のツートップは「収納場所が少ない」と「衣類が傷んでいた」でした｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec02__ttl-sp@2x.png" alt="「いざやってみて困ったこと」のツートップは「収納場所が少ない」と「衣類が傷んでいた」でした｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec02__img01@2x.png" alt="冬服はかさばるね　image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:361px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec02__img02@2x.png" alt="お気に入りの服に限って虫に食われてたりしますよね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:372px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>入れ替えの時期に思い切って整理することで、収納問題や服の劣化問題をある程度解決できるようです。<br>保管の工夫として「よく着るものとあまり着ないものに分けて保管する」や「何が入っているか外からわかるように収納する」「クローゼットの片側に冬物反対側に夏物、真ん中は春秋物を掛けている。引き出しごとそっくり入れ替える」など整理方法を見直すアイディアも見られましたが、ダントツは「捨てる」「整理する」でした。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec02__img01-sp@2x.png" alt="子供はすぐに大きくなるから服が増えますね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								「なるべくワンシーズンで着倒して処分」なんて潔い方も。思い切って捨てることで収納場所も増え、「着ようと思った服が見つからなかった」などの服の行方不明事件も予防できそうです。捨てる判断がつきにくい場合は「2年以上着ていないものは処分するか、リサイクルする」など、自分なりのルールを決めるとやりやすいかもしれません。「衣替えの時期に娘が遊びに来て、断捨離されてしまった」…人の手を借りるのもありです。<br>ただし「捨てすぎて1年後に着る服がなかった」「あの服どこにやったかなと探すことが多い。それはほぼ捨てている」なんてこともあるので、捨てすぎにはご注意を！<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec02__img02-sp@2x.png" alt="期限を決めて処分するのはいいですね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec03__ttl@2x.png" alt="コロナ禍で衣替えは変わったかのか？｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec03__ttl-sp@2x.png" alt="コロナ禍で衣替えは変わったかのか？｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec03__img01@2x.png" alt="出勤の服は着る回数が激減した人もいるようです。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:352px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec03__img02@2x.png" alt="断捨離するにはいい機会！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:344px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec03__img03@2x.png" alt="洋服よりもマスク選びの時間が増えました〜。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:347px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p class="mb8 mb4_sp">コロナ禍でリモートワークが増え「スーツを着なかった」「外出が少なかったので、着ていないものが多い。クリーニングに出すものは少ないかも」などのコメントが多数見られました。<br>「衣替えの時にクリーニングを利用する場合、どんなものを出していますか？」という質問で80％を占めている「コート、スーツ類」を着る機会そのものがなかったということですね。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec03__img01-sp@2x.png" alt="出勤の服は着る回数が激減した人もいるようです。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							  さらに、外出自粛や在宅勤務で時間がある時に「自粛期間中に不要なものを処分したので衣替えが楽だった」など衣類の断捨離を進めた方も多数。少なくなった分を買い足すのかと思いきや「人と会うことがあまりなかったので洋服は買っていなかった」「新しい服など外出が怖くて買いに行けない」ということで、衣服の数そのものが減ってきているのかもしれません。<br>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec03__img02-sp@2x.png" alt="断捨離するにはいい機会！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
						    断捨離をくぐりぬけ、手元に残ったお気に入りの服はぜひ大切にしたいもの。衣替えのお悩みでも触れたような服の傷みなどが心配な方は、プロの技で完璧に管理してくれる衣類の保管サービスを利用するのも一つの手です。アンケートの回答では「利用したことがない」が80％近くとまだまだ普及はしていないようですが、経験者からは「クリーニングに出した際、使用する時期までそのまま保管してもらったので、スペースもできて、掃除も楽だった」などの喜びの声も。最近の保管サービスは宅配や引き取りも行なっているので「冬のコートなどたくさんの枚数をクリーニング店に持って行くのが重たくて大変」などの問題も解決できそうです。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec03__img03-sp@2x.png" alt="洋服よりもマスク選びの時間が増えました〜。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec04__ttl@2x.png" alt="衣替え面白エピソード｜年に数回、手持ちの服と向き合う時間。様々なエピソードが生まれているようです。日常の何気ない作業だからこそ、生活に密着した思い出やハプニングが潜んでそうな衣替え。面倒なものではありますが、少しでも楽しんで行っていただければと思います。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec04__ttl-sp@2x.png" alt="衣替え面白エピソード｜年に数回、手持ちの服と向き合う時間。様々なエピソードが生まれているようです。日常の何気ない作業だからこそ、生活に密着した思い出やハプニングが潜んでそうな衣替え。面倒なものではありますが、少しでも楽しんで行っていただければと思います。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec04__img01@2x.png" alt="衣替え面白エピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol08/sec04__img01-sp@2x.png" alt="衣替え面白エピソード｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
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
