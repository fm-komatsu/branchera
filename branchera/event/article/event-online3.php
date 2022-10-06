<?php
//base
include("../../function.php");
$content = get_id_data('4097');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl . '-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//FLP ID
$flpID = '';

//buttom message
// $btnMesage = 'このイベントに応募する';
?>
<!-- css -->
<link rel="stylesheet" href="<?php echo $base_url ?>/lib/add-css/event-online3.css">

<main class="main kt4">
	<article class="main__row">
		<?php
		$panAry[] = array("/event/", "イベント・キャンペーン");
		include($inc_path . "/lib/inc/pan.php");
		?>
		<?php
		include($inc_path . "/lib/inc/page/_event/__main-header.php");
		?>
		<div class="main__wrapper">
			<div>
				<section>
					<div class="main-v mb3 <?php echo ('u-filter__' . $eventSts) ?>">
						<img src="<?php echo $img_url ?>/event/event-online3/mv_220912@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/event/event-online3/mv_sp_220912@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</div>
					<div class="mb2">
						<h2 class="event-online3__ttl mb2 u-font__palt">プロこだわりのキッチンとオリジナルレシピをご紹介する充実のオンラインイベント！</h2>
						<div class="flex between mb2">
							<div class="w40 u-only__pc">
								<img src="<?php echo $img_url ?>/event/event-online3/img01@2x.jpg" alt="オンラインイベントのイメージ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							</div>
							<div class="w60">
								<p class="mt0 u-font__palt" style="line-height:1.5">テレビや雑誌、YouTubeなど多方面で活躍しているコウケンテツさんご自宅のキッチンからお届けするオンラインイベントです！<br>動線や使いやすさにこだわったキッチン収納は、すぐにでもマネできるアイデアが満載です。コウケンテツさんの楽しいトークが聴けるこの機会をぜひお見逃しなく！</p>
								<div class="u-column__item u-only__sp">
									<img src="<?php echo $img_url ?>/event/event-online3/img01_sp@2x.jpg" alt="オンラインイベントのイメージ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
								</div>
							</div>
						</div>
						<div>
							<p class="u-font__palt" style="line-height:1.5">なんと、今回のオンラインイベントでは、ブランシエラクラブのためにご用意いただいたオリジナルレシピをご紹介！オンライン開催なので、全国どこからでもご参加いただけます♪ぜひ、メモをご用意の上お楽しみください♪</p>
						</div>
					</div>
				</section>
				<section>
					<div class="event-online3__bg">
						<div class="flex between">
							<div class="w30">
								<img src="<?php echo $img_url ?>/event/event-online3/img02@x2.png" alt="講師はこの方！料理研究家コウケンテツさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mt1" style="max-width:301px;" loading="lazy">
								<img src="<?php echo $img_url ?>/event/event-online3/img02_sp@x2.png" alt="講師はこの方！料理研究家コウケンテツさん｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
							</div>
							<div class="w70">
								<p class="u-font__palt" style="line-height:1.5">●料理研究家　コウケンテツ</p>
								<p class="u-font__palt" style="line-height:1.5">大阪出身。旬の素材を活かした手軽でおいしい家庭料理を提案し、テレビや雑誌、イベントなど多方面で活躍。30か国以上の国を旅して世界の家庭料理を学ぶ。3児の父親としての経験をもとに、男女共同参画、子育てについての講演会も精力的に行う。YouTube公式チャンネル「Koh Kentetsu Kitchen」は登録者数150万人を超える人気となっている。<br>近著は「本当はごはんを作るのが好きなのに、しんどくなった人たちへ」（ぴあ）、「アジアの台所に立つとすべてがゆるされる気がした」（新泉社）</p>
								<p class="u-font__palt" style="line-height:1.5">
									★YouTube公式チャンネル<br class="u-only__sp">「Koh Kentetsu Kitchen」　<br><a href="https://www.youtube.com/channel/UC3p5OTQsMEnmZktWUkw_Y0A/featured" target="_blank" data-ga-click="online_event2022_youtube">https://bit.ly/3dMrkeV</a><br>
									★インスタグラム　<br><a href="https://www.instagram.com/kohkentetsu/?hl=ja" target="_blank" data-ga-click="online_event2022_insta">https://www.instagram.com/kohkentetsu/?hl=ja</a>
								</p>
							</div>
						</div>
					</div>
				</section>
			</div>
			<h4 class="u-ttl__m u-font-size__18">イベント概要</h4>
			<div class="u-list__dl_table event-online3__table" style="position:relative;">
				<dl>
					<dt>[イベント内容]</dt>
					<dd class="u-font__palt">『オンラインイベント』こだわりのキッチンツアー＆料理教室</dd>
				</dl>
				<dl>
					<dt>[開催日時]</dt>
					<dd>2022年10月2日(日) 11：00～12：30</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>500名</dd>
				</dl>
				<dl>
					<dt>[講師]</dt>
					<dd>料理研究家 コウケンテツさん</dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>参加無料 <br>※パソコン、スマートフォン、タブレットなど端末は各自でご用意ください。</dd>
				</dl>
				<dl>
					<dt>[応募方法]</dt>
					<dd>ページ下部のボタンより必要事項をご入力の上、ご応募ください。<br><small class="u-font__small">※ご登録情報のご確認をお願いします。</small></dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2022年8月31日(水)～ 9月19日(月) </dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>当選された方へ2022年9月20日（火）より、順次イベント開催URLなどの詳細をメールにてご連絡いたします。</dd>
				</dl>
				<dl class="mb2">
					<dt>[ご注意事項]</dt>
					<dd>※長谷工IDをお持ちのご本人さまのみご応募いただけます。<br>※本イベントの参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</dd>
				</dl>
			</div>
			<div class="u-btn-layout mb2">
				<label class="u-btn_end center mt2">応募の受け付けは終了いたしました</label>
			</div>
			<small class="u-small mb3">※イベントの申し込みには長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
			</section>
		</div>
	</article>
</main> <?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?> <?php include($inc_path . "/lib/inc/footer.php"); ?> <?php include($inc_path . "/lib/inc/foot.php"); ?>
