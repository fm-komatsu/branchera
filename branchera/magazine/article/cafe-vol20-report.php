<?php
//base
include ("../../function.php");
$content = get_id_data('25020');
$pageTtl = '第1回 いま暮ら川柳<br>「スマイルのある暮らし」';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'いま暮らCaféでは常連さんたちが川柳を作ったり、互いに評したりして楽しんでいるようです。お気に入りの句を選んでいるところへ1人、新たなお客さんがご来店。どこかで見たことのあるような…。大喜利で人気のテレビ番組でもおなじみな落語家・林家たい平師匠です！';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年9月2日（木）～9月12日（日）";
// 回答者数
$respondents ="計1,497句";
// 対象者：
$target = "長谷工IDをお持ちで、日々の思いを発散させたい方・川柳に興味がある方";

$cafeReportNum = "20";


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
        <h2 class="u-font-size__30 u-color__dark mb2">第1回 いま暮ら川柳<br class="u-only__sp">「スマイルのある暮らし」</h2>
        <div class="u-assist_cafe_low u-only__pc u-font__palt">
          回答期間&emsp;&emsp;&emsp;：&emsp;<?php echo $period ?><br>
          回答数&emsp;&emsp;&emsp;&emsp;：&emsp;<?php echo $respondents ?><br>
					対象者&emsp;&emsp;&emsp;&emsp;：&emsp;<?php echo $target ?>

        </div>
        <div class="u-assist_cafe_low u-only__sp u-font__palt">
          回答期間：<?php echo $period ?><br>
					回答数：<?php echo $respondents ?><br>
					対象者：<?php echo $target ?>
        </div>
        <div class="mb6">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v@2x.jpg" alt="第1回 いま暮ら川柳「スマイルのある暮らし」｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.jpg" alt="第1回 いま暮ら川柳「スマイルのある暮らし」｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="第1回 いま暮ら川柳「スマイルのある暮らし」｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="第1回 いま暮ら川柳「スマイルのある暮らし」｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item">
							<p class="mb3 u-font__palt">いま暮らCaféでは常連さんたちが川柳を作ったり、互いに評したりして楽しんでいるようです。<br>お気に入りの句を選んでいるところへ1人、新たなお客さんがご来店。<br>どこかで見たことのあるような…。大喜利で人気のテレビ番組でもおなじみの落語家・林家たい平師匠です！</p>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01-sp@2x.png" alt="おっ川柳ですか。僕も俳句や川柳が好きなんです。見せていただけますか？ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
						  <p class="u-font__palt">今回は、テレワークや巣ごもり生活が続く中、募る不安や不満といった日頃の思いを笑い飛ばすような内容や、この状況下でも笑顔になれたエピソードなど、「スマイル」や「暮らし」にまつわる川柳をご投稿いただきました。<br>応募総数1,497句の中から厳選された受賞作・10句をついに！発表いたします！！</p>
						</div>
						<div class="u-column__item">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img01@2x.png" alt="おっ川柳ですか。僕も俳句や川柳が好きなんです。見せていただけますか？ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:258px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="今くら大賞 落語入門におすすめの本をプレゼント！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="今くら大賞 落語入門におすすめの本をプレゼント！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<figure class="mb2">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="ばあちゃんはバーチャルなんだと思う孫 よこよこあおさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="ばあちゃんはバーチャルなんだと思う孫 よこよこあおさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
				<div>
					<div class="flex">
						<div class="w25">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img02@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:153px" loading="lazy">
							</figure>
						</div>
						<div class="w75 mt1">
							<p>コロナ禍で実家に帰れず、画面越しでしか祖母に会えていないので。</p>
						</div>
					</div>
				</div>
				<figure>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/dot@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:px" loading="lazy">
				</figure>
				<div class="hitokoto">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img03-sp@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3 center" loading="lazy">
					</figure>
					<div class="flex mt2">
						<div class="w75">
							<p class="hitokoto__p">なかなか故郷に帰れない、田舎の両親にも会えない。そんな中、孫との会話もリモートですよね。子どもに「ばーちゃんはどこに住んでるんだっけ？」と聞いたら「パソコンの中！」なんて答えそうですもんね。早く画面越しではなく、お互いの温もりを感じたいものです。（林家たい平師匠）</p>
						</div>
						<div class="w25">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img03@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:153px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="ブランシエラクラブ賞 今暮らCafeと放香堂さんのコラボコーヒーです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="ブランシエラクラブ賞 今暮らCafeと放香堂さんのコラボコーヒーです。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<figure class="mb2">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="平日の昼間のクシャミは5軒先ウツギックスさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="平日の昼間のクシャミは5軒先ウツギックスさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
				<div>
					<div class="flex">
						<div class="w25">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img02@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:153px" loading="lazy">
							</figure>
						</div>
						<div class="w75">
							<p>家で仕事をする頻度が増え、平日の昼間がこんなにも静かだと知りました。静かすぎて五軒先の住人のクシャミの声が聞こえてくるほど。クシャミや風呂カラオケに自分も気を付けます。</p>
						</div>
					</div>
				</div>
				<figure>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/dot@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:px" loading="lazy">
				</figure>
				<div class="hitokoto">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img03-sp@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3 center" loading="lazy">
					</figure>
					<div class="flex mt2">
						<div class="w75">
							<p class="hitokoto__p">情景が目に浮かびます。くしゃみって人によって特徴がありますよね。そのうちに誰のくしゃみか分かるようになっちゃうかも（笑）こんなエピソードが懐かしく思える日々が早く戻ってくるといいですね。（ブランシエラクラブ事務局）</p>
						</div>
						<div class="w25">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img03@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:153px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="特別賞｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="特別賞｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<figure class="mb2">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="ウォーキングそっと妻の手を握りゆきさんさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="ウォーキングそっと妻の手を握りゆきさんさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
				<div>
					<div class="flex">
						<div class="w25">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img00@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:153px" loading="lazy">
							</figure>
						</div>
						<div class="w75">
							<p>誰もいない夕方の田舎道。普段は握ることのない、妻の手をとってウォーキングしています。</p>
						</div>
					</div>
				</div>
				<figure>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/dot@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:px" loading="lazy">
				</figure>
				<div class="hitokoto mb7">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img03-sp@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3 center" loading="lazy">
					</figure>
					<div class="flex mt2">
						<div class="w75">
							<p class="hitokoto__p">普段は素っ気ない（？）けど優しいご主人と慎ましやかでチャーミングな奥さま…理想のご夫婦に“ほっこり”です。（ブランシエラクラブ事務局)</p>
						</div>
						<div class="w25">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img003@2x.png" alt="選者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:153px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
				<figure class="mb2">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img04@2x.png" alt="日めくりが先に痩せてくダイエットあゆゆさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img04-sp@2x.png" alt="日めくりが先に痩せてくダイエットあゆゆさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
				<div>
					<div class="flex">
						<div class="w25">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img05@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:153px" loading="lazy">
							</figure>
						</div>
						<div class="w75">
							<p>ダイエットしてもなかなか痩せられませんが、日めくりカレンダーは簡単に痩せられて羨ましいです。</p>
						</div>
					</div>
				</div>
				<figure>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/dot@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:px" loading="lazy">
				</figure>
				<div class="hitokoto mb7">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img06-sp@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3 center" loading="lazy">
					</figure>
					<div class="flex mt2">
						<div class="w75">
							<p class="hitokoto__p">笑ってはいけませんが、これは「あるある」ですね！日めくりカレンダーは毎日確実に減っていくのに、私はどうして…？それでもメゲずに頑張ってください。応援してます！（ブランシエラクラブ事務局）</p>
						</div>
						<div class="w25">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img06@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:153px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
				<figure class="mb2">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img07@2x.png" alt="おうちバルわたしソムリエあなたシェフまりへ〜さん｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img07-sp@2x.png" alt="おうちバルわたしソムリエあなたシェフまりへ〜さん｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
				<div>
					<div class="flex">
						<div class="w25">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img08@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:153px" loading="lazy">
							</figure>
						</div>
						<div class="w75">
							<p>宅飲みが習慣になって、ワインの選び方や料理のレベルがお店並み（自称）になってきました。行きたくない飲み会に参加していた頃より、今のほうが楽しいです。</p>
						</div>
					</div>
				</div>
				<figure>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/dot@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:px" loading="lazy">
				</figure>
				<div class="hitokoto mb7">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img09-sp@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3 center" loading="lazy">
					</figure>
					<div class="flex mt2">
						<div class="w75">
							<p class="hitokoto__p">コロナ禍でもいろいろな愉しみ方がありますね。ワイン通とお料理好きのコラボレーションが家の中を笑顔でいっぱいにしているのが伝わってきます。（ブランシエラクラブ事務局）</p>
						</div>
						<div class="w25">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img09@2x.png" alt="選者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:153px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="佳作｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="佳作｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div>
					<figure class="mb2">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="オンライン息子はリビングパパ納戸｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:703px" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="オンライン息子はリビングパパ納戸｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
					<div class="mb7">
						<div class="flex">
							<div class="w25">
								<figure>
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:153px" loading="lazy">
								</figure>
							</div>
							<div class="w75">
								<p>部屋数が足りないため、パパはリビングにいられず納戸に押し込められました。</p>
							</div>
						</div>
					</div>					
				</div>
				<div>
					<figure class="mb2">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img03@2x.png" alt="自粛中メイク技術は大暴落ちっちゃんママさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:703px" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img03-sp@2x.png" alt="自粛中メイク技術は大暴落ちっちゃんママさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
					<div class="mb7">
						<div class="flex">
							<div class="w25">
								<figure>
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img04@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:153px" loading="lazy">
								</figure>
							</div>
							<div class="w75">
								<p>自粛でフルメイクをしなくなりました。外出する時も描くのは眉毛だけ。先日、オンライン飲み会で久しぶりにフルメイクをしようとして、自身のメイク技術の低下に驚きました。</p>
							</div>
						</div>
					</div>					
				</div>
				<div>
					<figure class="mb2">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img05@2x.png" alt="巣ごもりの終わり夢みて地図の旅ここままさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:703px" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img05-sp@2x.png" alt="巣ごもりの終わり夢みて地図の旅ここままさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
					<div class="mb7">
						<div class="flex">
							<div class="w25">
								<figure>
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img06@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:153px" loading="lazy">
								</figure>
							</div>
							<div class="w75">
								<p>自粛生活が続く中、夫と旅行のパンフレットを見ながら｢温泉に行きたいねー｣と話しています。１日でも早く普通の生活に戻れますようにと願いを込めて詠みました。</p>
							</div>
						</div>
					</div>					
				</div>
				<div>
					<figure class="mb2">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img07@2x.png" alt="オリパラで国旗かるたに孫夢中くうちゃんばあばさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:703px" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img07-sp@2x.png" alt="オリパラで国旗かるたに孫夢中くうちゃんばあばさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
					<div class="mb7">
						<div class="flex">
							<div class="w25">
								<figure>
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img08@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:153px" loading="lazy">
								</figure>
							</div>
							<div class="w75">
								<p>ワクチン接種を終え、やっと会えた孫と最初に遊んだのは国旗かるた。オリンピックで興味を持ったそうで、4歳とは思えない暗記力・記憶力に大敗を喫してしまいました...。</p>
							</div>
						</div>
					</div>					
				</div>
				<div>
					<figure class="mb2">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img09@2x.png" alt="焙煎と豆にこだわりおうちカフェもるもるさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:703px" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img09-sp@2x.png" alt="焙煎と豆にこだわりおうちカフェもるもるさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
					<div>
						<div class="flex">
							<div class="w25">
								<figure>
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img10@2x.png" alt="作者のひとこと image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:153px" loading="lazy">
								</figure>
							</div>
							<div class="w75">
								<p>家で飲むコーヒーをとっておきのものに変えて、美味しい巣ごもりを楽しんでいます。</p>
							</div>
						</div>
					</div>					
				</div>
			</section>
			<section>
				<figure class="mb7">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img11@2x.png" alt="たくさんのご応募ありがとうございました！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:705px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img11-sp@2x.png" alt="たくさんのご応募ありがとうございました！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3 center" loading="lazy">
				</figure>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/outro__img01@2x.png" alt="林家たい平師匠からのコメント｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 center" style="max-width:266px" loading="lazy">
							  <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/outro__img01-sp@2x.png" alt="林家たい平師匠からのコメント｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p class="mb4">川柳の楽しさのひとつに、潜在していた共感を呼び起こされること！があると思っています。いつもなんとなく感じていたことが何だったのか気が付かなかった時、偶然出会った川柳に「あっ、それだ！」なんてね。日常の中に楽しみを見つける大切さを皆さんの句から学びました。</p>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/outro__img02@2x.png" alt="プロフィール｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb2" style="max-width:124px" loading="lazy">
							  <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/outro__img02-sp@2x.png" alt="プロフィール｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp left" style="max-width:124px" loading="lazy">
							</figure>
							<p class="hitokoto__s">1964年埼玉県秩父市生まれ。武蔵野美術大学卒業後、林家こん平に入門。第58回芸術選奨文部科学大臣新人賞等、受賞歴多数。全国での独演会・落語会、テレビ、ラジオに数多く出演のほか、CDデビューや映画主演など幅広く活躍中。現在、（一社）落語協会常任理事、武蔵野美術大学客員教授。</p>
						</div>
					</div>
				</div>
				<figure>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/outro__img03-sp@2x.png" alt="ブランシエラクラブ事務局からのコメント｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
				</figure>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item">
							<p class="mb4">みなさま、たくさんのご応募、ありがとうございました。1,400を超える投句をいただき、感謝の気持ちでいっぱいです。おかげさまで各賞を選ぶのには四苦八苦でした・・・(笑)。<br>どの句も、普段の生活の中で起きている出来事や心情を見事に詠まれていて、わたしたちも爆笑あり、ほっこりありで楽しませていただきました。林家たい平師匠といっしょに、悩みに悩んで選ばせていただいた受賞者を発表いたしました。<br>入選のみなさまには、たい平師匠からの記念品と「いま暮ら珈琲」をお届けいたしますので、お楽しみに！</p>
						</div>
						<div class="u-column__item">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/outro__img03@2x.png" alt="ブランシエラクラブ事務局からのコメント｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3 left" style="max-width:266px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb3">
				<figure class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
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
