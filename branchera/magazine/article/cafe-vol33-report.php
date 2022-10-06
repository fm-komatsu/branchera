<?php
//base
include ("../../function.php");
$content = get_id_data('25033');
$pageTtl = '第1回<br>「いま暮ら 吹き出しコンテスト」';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = ($content['description']);
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2022年3月17日（木）～3月27日（日）";
// 回答者数
$respondents ="計2,398名";
// 対象者：
$target = "長谷工IDをお持ちで、楽しいことが好きな方・チャレンジ精神旺盛の方";

$cafeReportNum = "33";


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
        <h2 class="u-font-size__30 u-color__dark mb2">第1回「いま暮ら 吹き出しコンテスト」</h2>
        <div class="u-assist_cafe_low u-only__pc u-font__palt">
          回答期間&emsp;&emsp;&emsp;：&emsp;<?php echo $period ?><br>
          回答者数&emsp;&emsp;&emsp;：&emsp;<?php echo $respondents ?><br>
					対象者&emsp;&emsp;&emsp;&emsp;：&emsp;<?php echo $target ?>

        </div>
        <div class="u-assist_cafe_low u-only__sp u-font__palt u-font-size__14_sp">
          回答期間：<?php echo $period ?><br>
					回答者数：<?php echo $respondents ?><br>
					対象者：<?php echo $target ?>
        </div>
        <div class="mb6 mb3_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v@2x.jpg" alt="｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.jpg" alt="｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp">
					</figure>
				</div>
				<div class="info mb8 mb4_sp">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01-ttl01@2x.png" alt="第1回 いま暮ら川柳 「いま暮ら 吹き出しコンテスト」" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01-ttl01-sp@2x.png" alt="第1回 いま暮ら川柳 「いま暮ら 吹き出しコンテスト」" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<div class="u-column">
						<div class="u-column__2">
								<div class="u-column__item w50">
									<p>今回は、日常にスマイルをプラスする特別企画として、画像を見て、吹き出しに入る言葉を考えていただく「いま暮ら 吹き出しコンテスト」を実施いたしました。<br>お題は<b class="u-color__pink">何かをロープで引っ張っている「はせぽん」。思わずひと言！</b><br>応募総数2,398名の中から、厳選された受賞作9点を発表いたします！！</p>
								</div>
								<div class="u-column__item w50">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01-img01__hasepon@2x.png" alt="はせぽん" class="u-img__max u-only__pc center" loading="lazy" style="max-width:283px">
									<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01-img01__hasepon-sp@2x.png" alt="はせぽん" class="u-img__max u-only__sp" loading="lazy">
								</div>
							</div>
						</div>
				</div>
			</section>
			<section class="mb8 mb2_sp">
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02-ttl__grandprix@2x.png" alt="最優秀賞｜たなかみ米5kg、いま暮ら珈琲（ドリップ 8個入り）｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02-ttl__grandprix-sp@2x.png" alt="最優秀賞｜たなかみ米5kg、いま暮ら珈琲（ドリップ 8個入り）｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
				</div>
				<div class="cafe-report__box">
					<div class="cafe-report__work">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02-img01__torasan@2x.png" alt="最優秀賞｜とらさん「みんなの知りたい！引っ張り出すよ〜！」" class="u-only__pc u-img__max">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02-img01__torasan-sp@2x.png" alt="最優秀賞｜とらさん「みんなの知りたい！引っ張り出すよ〜！」" class="u-only__sp u-img__max mb2_sp">
					</div>
					<div class="cafe-report__inner">
						<hr class="u-hr__dashed_brown u-only__pc">
						<div class="cafe-report__comment">
							<div class="cafe-report__icon">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02-comment@2x.png" alt="選者のひと言" class="u-only__pc u-img__max" style="max-width:152px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02-comment-sp@2x.png" alt="選者のひと言" class="u-only__sp u-img__max" loading="lazy">
							</div>
							<div class="cafe-report__ex">
								<p>
									ボクの気持ちを表してくれてありがとうございます！<br>これからもがんばりますので、ヨロシクお願いしま～す！
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb4">
				<div>
					<h3 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03-ttl__excellence@2x.png" alt="最優秀賞｜たなかみ米2kg｜<?php echo $pageTtl ?><?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03-ttl__excellence-sp@2x.png" alt="最優秀賞｜たなかみ米2kg｜<?php echo $pageTtl ?><?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
				</div>
				<div class="cafe-report__box">
					<div class="cafe-report__work">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03-img01__teyumamasan@2x.png" alt="優秀賞｜てゆゆまさん「うっ！腰にくる。」" class="u-only__pc u-img__max" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03-img01__teyumamasan-sp@2x.png" alt="優秀賞｜てゆゆまさん「うっ！腰にくる。」" class="u-only__sp u-img__max mb2_sp" loading="lazy">
					</div>
					<div class="cafe-report__inner">
						<hr class="u-hr__dashed_brown u-only__pc">
						<div class="cafe-report__comment">
							<div class="cafe-report__icon">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03-comment01@2x.png" alt="選者のひと言" class="u-only__pc u-img__max" style="max-width:152px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03-comment01-sp@2x.png" alt="選者のひと言" class="u-only__sp u-img__max" loading="lazy">
							</div>
							<div class="cafe-report__ex">
								<p>
									わたしも昨年、ギックリ腰をやってしまいまして…<br>この気持ちわかります。
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cafe-report__box">
					<div class="cafe-report__work">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03-img02__miyakosan@2x.png" alt="優秀賞｜miyakoさん「やめ時がわからなくなった…」" class="u-only__pc u-img__max" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03-img02__miyakosan-sp@2x.png" alt="優秀賞｜miyakoさん「やめ時がわからなくなった…」" class="u-only__sp u-img__max mb2_sp" loading="lazy">
					</div>
					<div class="cafe-report__inner">
						<hr class="u-hr__dashed_brown u-only__pc">
						<div class="cafe-report__comment">
							<div class="cafe-report__icon">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03-comment02@2x.png" alt="選者のひと言" class="u-only__pc u-img__max" style="max-width:153px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03-comment02-sp@2x.png" alt="選者のひと言" class="u-only__sp u-img__max" loading="lazy">
							</div>
							<div class="cafe-report__ex">
								<p>
									そうなんですよね～。一生懸命になると思わず時間を忘れてしまいます。
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cafe-report__box">
					<div class="cafe-report__work">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03-img03__yuutonsan@2x.png" alt="優秀賞｜ゆうとんさん「この手応えは期待できるぞ〜！今日の夕飯は楽しみだ〜！」" class="u-only__pc u-img__max" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03-img03__yuutonsan-sp@2x.png" alt="優秀賞｜ゆうとんさん「この手応えは期待できるぞ〜！今日の夕飯は楽しみだ〜！」" class="u-only__sp u-img__max mb2_sp" loading="lazy">
					</div>
					<div class="cafe-report__inner">
						<hr class="u-hr__dashed_brown u-only__pc">
						<div class="cafe-report__comment">
							<div class="cafe-report__icon">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03-comment03@2x.png" alt="選者のひと言" class="u-only__pc u-img__max" style="max-width:152px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03-comment03-sp@2x.png" alt="選者のひと言" class="u-only__sp u-img__max" loading="lazy">
							</div>
							<div class="cafe-report__ex">
								<p>
									はせぽんの大好物って何かな？<br>みんなのために今年もがんばってね！
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb4">
				<div>
					<h3 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-ttl__ honorable@2x.png" alt="佳撰｜いま暮ら珈琲（ドリップ8個入り）<?php echo $pageTtl ?><?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-ttl__ honorable-sp@2x.png" alt="佳撰｜いま暮ら珈琲（ドリップ8個入り）<?php echo $pageTtl ?><?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
				</div>
				<div class="cafe-report__box">
					<div class="cafe-report__work">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-img01__hidedesan@2x.png" alt="佳撰｜hidedeさん「今は朝起こすのもソーシャルディスタンス」" class="u-only__pc u-img__max" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-img01__hidedesan-sp@2x.png" alt="佳撰｜hidedeさん「今は朝起こすのもソーシャルディスタンス」" class="u-only__sp u-img__max mb2_sp" loading="lazy">
					</div>
					<div class="cafe-report__inner">
						<hr class="u-hr__dashed_brown u-only__pc">
						<div class="cafe-report__comment">
							<div class="cafe-report__icon">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-comment01@2x.png" alt="選者のひと言" class="u-only__pc u-img__max" style="max-width:162px;"  loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-comment01-sp@2x.png" alt="選者のひと言" class="u-only__sp u-img__max"  loading="lazy">
							</div>
							<div class="cafe-report__ex">
								<p>
									コロナの話題も多く寄せられました。<br>でもはせぽんとみなさんの距離はもっと近づきたいですね。
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cafe-report__box">
					<div class="cafe-report__work">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-img02__hacchoumisokkosan@2x.png" alt="佳撰｜八丁みそっ子さん「マスク外した顔出しも恥ずかしがらないで。大丈夫だよ！」" class="u-only__pc u-img__max" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-img02__hacchoumisokkosan-sp@2x.png" alt="佳撰｜八丁みそっ子さん「マスク外した顔出しも恥ずかしがらないで。大丈夫だよ！」" class="u-only__sp u-img__max mb2_sp" loading="lazy">
					</div>
					<div class="cafe-report__inner">
						<hr class="u-hr__dashed_brown u-only__pc">
						<div class="cafe-report__comment">
							<div class="cafe-report__icon">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-comment02@2x.png" alt="選者のひと言" class="u-only__pc u-img__max" style="max-width:161px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-comment02-sp@2x.png" alt="選者のひと言" class="u-only__sp u-img__max" loading="lazy">
							</div>
							<div class="cafe-report__ex">
								<p>
									素顔に自信を持ちましょう！本人が思うよりずっと素敵な素顔ですよ。きっと…おそらく…多分……
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cafe-report__box">
					<div class="cafe-report__work">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-img03__akiponsan@2x.png" alt="佳撰｜あきぽんさん「これってチャンスの神の前髪かな？」" class="u-only__pc u-img__max" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-img03__akiponsan-sp@2x.png" alt="佳撰｜あきぽんさん「これってチャンスの神の前髪かな？」" class="u-only__sp u-img__max mb2_sp" loading="lazy">
					</div>
					<div class="cafe-report__inner">
						<hr class="u-hr__dashed_brown u-only__pc">
						<div class="cafe-report__comment">
							<div class="cafe-report__icon">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-comment03@2x.png" alt="選者のひと言" class="u-only__pc u-img__max" style="max-width:156px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-comment03-sp@2x.png" alt="選者のひと言" class="u-only__sp u-img__max" loading="lazy">
							</div>
							<div class="cafe-report__ex">
								<p>
									せっかく来たチャンスは逃さずに掴みたいもの…。<br>神様の前髪ってずいぶん長いんですね。掴みやすそう！
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cafe-report__box">
					<div class="cafe-report__work">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-img04__tententemaarisan@2x.png" alt="佳撰｜てんてんまりさん「みんな手伝って！力を合わせて平和と幸せを引き込もう！」" class="u-only__pc u-img__max" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-img04__tententemaarisan-sp@2x.png" alt="佳撰｜てんてんまりさん「みんな手伝って！力を合わせて平和と幸せを引き込もう！」" class="u-only__sp u-img__max mb2_sp" loading="lazy">
					</div>
					<div class="cafe-report__inner">
						<hr class="u-hr__dashed_brown u-only__pc">
						<div class="cafe-report__comment">
							<div class="cafe-report__icon">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-comment04@2x.png" alt="選者のひと言" class="u-only__pc u-img__max" style="max-width:154px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-comment04-sp@2x.png" alt="選者のひと言" class="u-only__sp u-img__max" loading="lazy">
							</div>
							<div class="cafe-report__ex">
								<p>
									本当に「平和」は世界中みんなの願いです。<br>はせぽん、わたしも力を貸しますよ！
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cafe-report__box">
					<div class="cafe-report__work">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-img05__shousan@2x.png" alt="佳撰｜しょうさん「出てこい！勇気！」" class="u-only__pc u-img__max" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-img05__shousan-sp@2x.png" alt="佳撰｜しょうさん「出てこい！勇気！」" class="u-only__sp u-img__max mb2_sp" loading="lazy">
					</div>
					<div class="cafe-report__inner">
						<hr class="u-hr__dashed_brown u-only__pc">
						<div class="cafe-report__comment">
							<div class="cafe-report__icon">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-comment05@2x.png" alt="選者のひと言" class="u-only__pc u-img__max" style="max-width:156px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04-comment05-sp@2x.png" alt="選者のひと言" class="u-only__sp u-img__max mb2_sp" loading="lazy">
							</div>
							<div class="cafe-report__ex">
								<p>
									新しいことに挑戦したいはせぽんが、心の扉を開けて“勇気”をエイッと引き出しているみたいで共感しました。<br>出てくるのは「チャレンジする」勇気？「くじけない」勇気？
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="mb3">
			<div class="mb6">
				<div>
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/thanks@2x.png" alt="次はどんなお題かなー。どうぞお楽しみに！たくさんのご応募ありがとうございました！" class="u-only__pc u-img__max" style="max-width:705px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/thanks-sp@2x.png" alt="次はどんなお題かなー。どうぞお楽しみに！たくさんのご応募ありがとうございました！" class="u-only__sp u-img__max" loading="lazy">
				</div>
			</div>
				<div class="cafe-report__ballon mb6">
					<div class="flex between">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ballon-jimukyoku-sp@2x.png" alt="ブランシエラクラブ事務局からのコメント｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:80%" loading="lazy">
						<div class="w60 self-center mt2 mt0_sp">
							<p>第1回 「いま暮ら 吹き出しコンテスト」はいかがでしたか？いざ考えると意外に難しいものですね。寄せられた2,000を超える作品には「ユーモアたっぷり」のものや「おっ！そう来たか！」と思わされるものの中に、世相を反映して“幸せ”や“平和”を願ったものが目立ったことが印象的でした。<br>今後とも「いま暮らCafé」と“はせぽん”をよろしくお願いいたします。また第2回コンテストでお会いしましょう！</p>
						</div>
						<div class="w40">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ballon-jimukyoku@2x.png" alt="ブランシエラクラブ事務局からのコメント｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:282px" loading="lazy">
						</div>
					</div>
				</div>
				<div class="cafe-report__ballon mb6 mb5_sp">
					<div class="flex between">
						<div class="w40 u-clearfix">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ballon-hensyu@2x.png" alt="編集者からのコメント｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc u-float__right" style="max-width:208px" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ballon-hensyu-sp@2x.png" alt="編集者からのコメント｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:80%" loading="lazy">
						</div>
						<div class="w60">
							<p>たくさんのご応募に、はせぽんも大喜び！心がほっこり温まるひと言、思わず爆笑のひと言、希望を託したひと言など、「なるほど！」と感心する名セリフが目白押しで、会員のみなさんの豊かな発想力に脱帽しました。激戦を勝ち抜いた受賞作9点の作者の方々、おめでとうございます！</p>
						</div>
					</div>
				</div>
				<figure class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__text@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__pc center" style="max-width:432px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__text-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo strip_tags($pageTtl); ?>" class="u-img__max u-only__sp center" style="max-width:80%;" loading="lazy">
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
