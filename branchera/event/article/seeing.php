<?php
//base
include ("../../function.php");
$content = get_id_data('4001');
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

			<section class="main__item">

				<h3><img
					data-src="../../lib/img/event/seeing/img-01.png"
					alt="【 会員さまだけに限定公開！ 】普段は見られないマンション管理の「ノウハウ・裏側」を見学しよう。"
					class="u-img__max"></h3>

					<div class="seeing-look">
						<div class="seeing-look__row">
							<img
							data-src="../../lib/img/event/seeing/repo01.png"
							alt="長谷工コミュニティ 技術研修センター"
							class="u-img__max seeing-look__img"
							>
							<div class="seeing-look__ex">
								<p><strong>普段は一般非公開の施設を見学！</strong></p>
								<p>2015年2月7日（土）、「長谷工ライフ研修センター」にて、マンション管理で実際に使用されている建築設備・機器類の技術見学会を開催しました。さらに、当日は24時間セキュリティ監視センター「アウル24センター」も公開。</p>
								<p>どちらの施設も普段は“一般非公開”とあって、ご参加者の皆さまも興味深くご見学くださいました。</p>
							</div>
						</div>
					</div>
				</section>

				<section class="main__item">
					<h4 class="u-ttl__m">見学レポート</h4>
					<p>
						「長谷工ライフ研修センター」にて、マンション管理で実際に使用されている、給水、排水、消火設備の各ゾーンで実際に装置を稼働させての専門家による説明や、警報機の鳴動体験、消火訓練、バルコニーパーテーションの蹴破り体験などをしていただき「実際に触ってみて気付くことが多い」と見学者の皆さまも驚きの連続でした。<br>本日はその様子をレポートします。
					</p>
					<img
					data-src="../../lib/img/event/seeing/repo00.png"
					alt="見学会レポート"
					class="u-img__max mb3">

					<div class="u-only__pc">
						<img
						data-src="../../lib/img/event/seeing/root20.png"
						alt="見学会レポート"
						class="u-img__max">
					</div>

					<ul class="seeing-list u-only__sp">
						<li>
							<img
							data-src="../../lib/img/event/seeing/root01@2x.png"
							alt="1.給水設備見学">
						</li>
						<li>
							<img
							data-src="../../lib/img/event/seeing/root02@2x.png"
							alt="2.非常ベル鳴動体験">
						</li>
						<li>
							<img
							data-src="../../lib/img/event/seeing/root03@2x.png"
							alt="3.排水設備見学">
						</li>
						<li>
							<img
							data-src="../../lib/img/event/seeing/root04-sp@2x.png"
							alt="消化設備・消火訓練・防災センター">
						</li>
						<li>
							<img
							data-src="../../lib/img/event/seeing/root05@2x.png"
							alt="エレベーター見学">
						</li>
						<li>
							<img
							data-src="../../lib/img/event/seeing/root07@2x.png"
							alt="フロントオフィス見学">
						</li>
						<li>
							<img
							data-src="../../lib/img/event/seeing/root08@2x.png"
							alt="専有部設備見学">
						</li>
						<li>
							<img
							data-src="../../lib/img/event/seeing/root09@2x.png"
							alt="専有部内装見学">
						</li>
						<li>
							<img
							data-src="../../lib/img/event/seeing/root10@2x.png"
							alt="各種設備機器実践体験">
						</li>
						<li>
							<img
							data-src="../../lib/img/event/seeing/root11@2x.png"
							alt="バルコニーパーテーション打ち破りコーナー">
						</li>
						<li>
							<img
							data-src="../../lib/img/event/seeing/root12@2x.png"
							alt="アウル24センター">
						</li>
					</ul>

				</section>


				<section class="main__item">
					<h2 class="u-ttl__l">見学後のアンケートにて、参加者の皆さまが「参考になった」と回答！</h2>
					<img
					data-src="../../lib/img/event/seeing/repo07.png"
					alt="見学後のアンケート"
					class="u-img__max u-only__pc mb3">
					<ul class="seeing-list u-only__sp">
						<li>
							<img
							data-src="../../lib/img/event/seeing/repo10@2x.png"
							alt="見学後のアンケート"
							class="u-img__max u-only__sp">
						</li>
						<li>
							<img
							data-src="../../lib/img/event/seeing/repo11@2x.png"
							alt="見学後のアンケート"
							class="u-img__max u-only__sp">
						</li>
						<li>
							<img
							data-src="../../lib/img/event/seeing/repo12@2x.png"
							alt="見学後のアンケート"
							class="u-img__max u-only__sp">
						</li>
					</ul>

					<p>マンション管理についてかなり専門的・実践的な内容でしたが、どれもこれも実際の住まいに関わりのある内容で、参加者の皆さまにも大変ご満足いただけたようです。</p>

					<p>また、アンケートでは、今後ブランシエラクラブ企画として取り上げ欲しいものとして、「中古マンションのリフォームの実例を見たい」「最新のマンション設備も体験したい」などの貴重なご意見もいただきました。</p>

					<p>スタッフ一同身を引き締めて、今後とも皆さまにご満足いただける新しい企画をお届けしたいと思います。</p>

				</section>

				<a href="<?php echo $myentry_url ?>" target="_blank" class="u-btn_point u-position__center">長谷工IDの新規登録（無料）はこちら</a>

			</div>

		</article>
	</main>

	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
