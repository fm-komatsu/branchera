<?php
//base
include ("../../function.php");
$content = get_id_data('4015');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>


<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/event/" ,"イベント・キャンペーン");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<?php
		include ($inc_path."/lib/inc/page/_event/__main-header.php");
		?>

		<div class="main__wrapper">

			<section class="section wrapper">
				<img
				data-src="../../lib/img/event/report-tanakami2/main.jpg"
				data-srcset="../../lib/img/event/report-tanakami2/main-sp@2x.png  666w,../../lib/img/event/report-tanakami2/main.jpg"
				alt="会員限定イベント第3弾 まぼろしのお米『たなかみ米』田植え体験 イベントレポート"
				class="u-img__max" />
				<p>会員さま限定イベント3回目の今回は、滋賀県大津市にある「長谷工あんしんデリ 大津農場」にて、田植え体験を実施しました。当日は天候にも恵まれ、大人から子どもまで幅広い層に、昔ながらの手植えを体験していただきました。</p>

				<div class="u-assist">
					<div class="flex between">
						<img
						data-src="../../lib/img/event/report-tanakami2/logo-t.png"
						data-retina="../../lib/img/event/report-tanakami2/logo-t@2x.png"
						width="126"
						height="126"
						alt="たなかみのお米　ロゴ"
						/>
						<div class="w80">
							<h5 class="u-ttl__s">株式会社 長谷工あんしんデリ</h5>
							<p>土と水に恵まれた田上(たなかみ)の田んぼで、農薬や化学肥料に頼らない、安心でおいしいお米をお届けしています。一粒一粒の旨味をしっかり味わえる「たなかみ米」、ぜひ一度お試しください。</p>
							<a href="http://www.haseko.co.jp/ha-delicious/gift/" target="_blank" rel="nofollow" class="u-btn">長谷工あんしんデリ公式サイトはこちら</a>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m">自然をめいっぱいに感じながら、まずは工場見学からスタート！</h4>
				<div class="flex between mb4">
					<div class="w55"><p>今回は天気に左右されるイベントだったため、当日まで天気予報とにらめっこしていましたが、嬉しいことに晴天にも恵まれ、気持ちよくスタートすることができました。</p><p>まずは、長谷工あんしんデリ社長の鈴鹿より、お米ができるまでの流れをご紹介！もみを玄米にしていく大きな機械や、低温貯蔵庫を見学しました。<br>たなかみ米は玄米のまま保管し、ご注文いただいてから精米しているそうです。新鮮でおいしい状態でお届けするための工夫のひとつですね。</p></div>
					<figure class="w45">
						<img
						data-src="../../lib/img/event/report-tanakami2/img01@2x.jpg"
						class="u-img__max"
						alt="写真" />
					</figure>
				</div>

				<h4 class="u-ttl__m">精米機に子どもたち興味津々！お米の違い、わかるかな？</h4>
				<div class="flex between mb4">
					<figure class="w45">
						<img data-src="../../lib/img/event/report-tanakami2/img02@2x.jpg"  class="u-img__max"
						alt="写真" />
					</figure>
					<div class="w55">
						<p>次のお部屋では、実際に玄米から精米するまでの手順を見学しました。大きな精米機で、お米が精米されていく工程に子どもたちのテンションがあがっていきます。</p>
						<p>割れたお米・虫にエキスを吸われてしまったお米をそれぞれ分別して、おいしいお米だけをお届けしています。</p>
						<p>それぞれのお米を実際に目で見て・手で触って…初めての体験に興味津々です。</p>
					</div>
				</div>

				<h4 class="u-ttl__m">泥んこになる準備はできたかな？いよいよ田んぼへ！</h4>
				<img
				data-src="../../lib/img/event/report-tanakami2/img03@2x.jpg"
				class="u-img__max"
				alt="写真" />
				<p>工場見学の後は、いよいよ田んぼへ移動です！<br>たっぷりと水が敷かれた田んぼでは、歩くのも一苦労…。土に足をとられて転びそうになりながら、苗を片手に一列で田植えが始まりました。</p>


				<h4 class="u-ttl__m">アイガモちゃん投入で、大人も子どもも大興奮！</h4>
				<img
				data-src="../../lib/img/event/report-tanakami2/img04@2x.jpg"
				class="u-img__max"
				alt="写真" />
				<p>田植えもそろそろ終盤になったところで、アイガモちゃんが参戦！<br>かわいらしい姿と鳴き声に大人も子どももメロメロです。アイガモたちは、雑草を食べてくれたり、田んぼ内に酸素を入れてくれたりと、お米が実るまでの間、いろいろな役割を担ってくれます。</p>
				<p>何とか目標の範囲の田植えも完了し、最後に参加者全員で軽食をとってイベント終了！子どもたちの楽しそうな声がずっと響き渡る、素敵なイベントになりました。今回のお米は9月に収穫をして、ご参加いただいたみなさまにお送りさせていただく予定です。おいしいお米が待ち遠しいですね！</p>


				<div class="u-assist" style="line-height:2;">
					<p><strong>ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。<br>最新情報はメルマガでお知らせしますので、ぜひチェックしてください。</strong></p>
				</div>

				<a href="<?php echo $base_url ?>/event/article/report-tanakami.php" class="u-btn u-position__center">稲とアイガモの成長レポートはこちら</a>


			</section>

		</div>
	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
