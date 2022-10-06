<?php
//base
include ("../../function.php");
$content = get_id_data('4022');
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
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>
		<div class="main__wrapper">

			<section class="main__item">
				<img
				data-src="../../lib/img/event/report-golf2/main.jpg"
				data-srcset="../../lib/img/event/report-golf2/main-sp@2x.jpg 420w,../../lib/img/event/report-golf2/main@2x.jpg"
				alt="日本プロゴルフシニア選手権大会住友商事サミットカップ 観戦ツアー"
				class="u-img__max">

				<p class="mb-inner">ゴルフプロアマ大会参加・プロゴルフ観戦ツアーW開催として実施したゴルフイベント！<br>今回は、2017年10月7日に開催した「日本プロゴルフシニア選手権大会 住友商事・サミットカップ 観戦ツアー」の模様をレポートいたします。</p>


				<div class="u-assist">
					<div class="u-float__left u-position__center">
						<img
						src="../../lib/img/event/report-golf2/img001@2x.jpg"
						style="max-width:200px;"
						class="u-img__max">
					</div>
					<h6 style="display:inline-block;padding:3px 10px; background:#ff8400;border-radius:10px;color:#FFF;">ガイドしてくれたのはこの方！</h6>
					<p>水戸グリーンカントリークラブ所属 </p>
					<h5>飛田覚プロ</h5>
					<p>観戦ツアーをガイドしていただいた、飛田プロ。PGA公認のトーナメントプレーヤーの資格をお持ちで、男子ツアーを主管する団体「JGTO」において、競技委員も務めています。最近ではフジサンケイクラシックやゴルフ日本シリーズJTカップでもご活躍。今回は、そんな飛田プロに見どころなどをご紹介いただきながら観戦しました。</p>
				</div>

				<h4 class="u-ttl__m">まずは、トッププロを間近で見る、迫力のティーショットを観戦！</h4>
				<div class="flex between">
					<div class="w50">
						<p>前日の大雨の影響で、当日は1時間遅れでイベントスタート。天気の心配も最初だけで、午後には青空が見られるほどの良い天候に恵まれました！</p><p>トランシーバーを各自装着し、飛田プロのガイドを聞きながら観戦。まず最初は、スイングの音と風を間近に感じることができるティーショットから。思わずこちらが緊張してしまうほどの、張り詰めた空気を肌で感じることができました。</p>
					</div>
					<figure class="w50">
						<img
						src="../../lib/img/event/report-golf2/img01@2x.jpg"
						style="max-width:400px;"
						class="u-img__max">
					</figure>
				</div>

				<h4 class="u-ttl__m">自然を満喫しながら、いよいよコース観戦！</h4>
				<div class="flex between mb">
					<figure class="w50">
						<img
						src="../../lib/img/event/report-golf2/img02@2x.jpg"
						style="max-width:400px;"
						class="u-img__max">
					</figure>
					<div class="w50">
						<p>今回の観戦イベントは昼食付き！クラブハウス内の美味しい食事に舌鼓を打った後は、いよいよ本格的にコース観戦です。</p><p>各選手のフォームの解説や、飛田プロならではの興味深い選手の裏話が披露される中、時折、飛田プロに気づいた選手から声を掛けていただく光景も！プロとまわることでしか見ることのできない交流も楽しめました。</p>
					</div>
				</div>

				<h4 class="u-ttl__m">テレビでは味わえない、臨場感と迫力のパノラマを満喫！</h4>
				<figure class="mb1">
					<img
					src="../../lib/img/event/report-golf2/img03@2x.jpg"
					class="u-img__max">
				</figure>
				<figure class="mb1">
					<img
					src="../../lib/img/event/report-golf2/img04@2x.jpg"
					class="u-img__max">
				</figure>
				<p>広々としたコース内は、緩やかな起伏があり、観戦しているだけでいい運動に！<br>わたしたちから見ると、一見難しそうなコースでも、狙いすましたようにグリーンへオンする正確なショットは、プロならではのクオリティでした。参加者のみなさまからも「こんなに近くでプロのプレーを見られるなんて！」といった、感動のコメントもいただけた観戦ツアーでした。</p>

				<!--h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

				<div class="event_comment">
					<div class="balloon mb woman">
						<div class="inner">
							<div>
								<p>プロアマ⼤会に参加させていただきありがとうございました。大変貴重な経験をさせていただき、楽しい1日でした。</p>
								<h5 class="h5_event">神奈川県在住 50代⼥性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>⽇頃から関⼼を寄せていた中根プロとのラウンドで、最初の数ホールは何処に⾏くけわからないものでしたが、その⽇の内にグロスで2オーバーと、非常に満⾜⾏くスコアでした。</p>
								<h5 class="h5_event">大阪府在住 40代男性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>同⾏されたプロからは要所要所で的確なワンポイントアドバイスをいただき、今後の課題と参考になりました。</p>
								<h5 class="h5_event">神奈川県在住 50代男性</h5>
							</div>
						</div>
					</div>
					<div class="balloon mb man">
						<div class="inner">
							<div>
								<p>⽩⽯プロとのラウンド、⼈柄も良い⽅で応援したくなるプロでした。</p>
								<h5 class="h5_event">兵庫県在住 60代男性</h5>
							</div>
						</div>
					</div>
				</div-->


				<div class="u-assist" style="line-height:2;">
					<strong>ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。<br>最新情報はメルマガでお知らせしますので、ぜひチェックしてください。</strong>
				</div>
			</section>

		</div>

	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
