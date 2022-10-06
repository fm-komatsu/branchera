<?php
//base
include ("../../function.php");
$content = get_id_data('11089');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//アンケート用のテンプレート設定（イレギュラーがあれば適宜調整）
$imakura_enqttl="特別企画「第2回 いま暮ら川柳」募集中です！";

$imakura_info ="第1回に引き続き、今回もゲスト選者として、人気テレビ番組でもおなじみの落語家・林家たい平師匠をお迎えしております！";

$imakura_period="2022年8月31日（水）～9月11日（日）";

$imakura_target="長谷工IDをお持ちで、お住まいの地域やふるさとに思いのある方 ・川柳に興味がある方";

$imakura_url="https://haseko.flpjp.com/enquete/3/57";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row ">
		<?php
		$panAry[] = array("/enquete/" ,"アンケート");
		include ($inc_path."/lib/inc/pan.php");
		?>
    <?php
    include ($inc_path."/lib/inc/page/_event/__main-header.php");
    ?>
		<div class="main__wrapper">
			<section class="main__item">
				<h2 class="u-ttl__cafe20 first-of-type mt0">特別企画「第2回 いま暮ら川柳」募集中です！</h2>
				<div class="main-v mb2">
					<figure>
						<img src="<?php echo $img_url?>/enquete/cafe42/main-v@x2.jpg" class="u-img__max u-only__pc" alt="第2回いま暮らCafé特別企画 いま暮ら川柳　お題「スマイルのある暮らし〜ご当地〜」 ゲスト審査員落語家林家たい平師匠" loading="lazy">
						<img src="<?php echo $img_url?>/enquete/cafe42/main-v_sp@x2.jpg" class="u-img__max u-only__sp" alt="第2回いま暮らCafé特別企画 いま暮ら川柳　お題「スマイルのある暮らし〜ご当地〜」 ゲスト審査員落語家林家たい平師匠" loading="lazy">
					</figure>
				</div>
				<div class="enquete-ex">
					<div class="enquete-ex__row">
						<div class="enquete-ex__ex mb3">
							<p class="mb2">前回大好評でした、特別企画「いま暮ら川柳」の第2回を開催します！今回のお題は「スマイルのある暮らし〜ご当地〜」。<br>ご当地の名物やイベント、お国自慢や方言など…クスっと笑える楽しい川柳をご投稿ください。ふるさとや住んでいる場所、思い出の場所など、どんなご当地でも問題ありません！</p>
							<p class="mb2"><?php echo $imakura_info; ?></p>
							<p>さらに、ご投稿いただいた方にはもれなく50スマイルプレゼント。入賞した方には素敵な賞品もご用意しています。師匠の目に留まる力作をお待ちしています！</p>
						</div>
					</div>
				</div>
				<div class="main-v mb2">
					<figure>
						<img src="<?php echo $img_url?>/enquete/cafe42/img01@x2.jpg" class="u-img__max u-only__pc" alt="いま暮ら大賞１作品 エアウィーヴピローS-LINE たなかみ米5kg たい平師匠グッズ ブランシエラクラブ賞１作品 たなかみ米10kg たい平師匠グッズ 特別賞若干数 林久右衛門のスープ（枕崎産鰹節使用）&たなかみ米セットたい平師匠グッズ 佳撰10作品いま暮ら珈琲オリジナルブレンドコーヒー（豆）たい平師匠グッズ" loading="lazy">
						<img src="<?php echo $img_url?>/enquete/cafe42/img01_sp@x2.jpg" class="u-img__max u-only__sp" alt="いま暮ら大賞１作品 エアウィーヴピローS-LINE たなかみ米5kg たい平師匠グッズ ブランシエラクラブ賞１作品 たなかみ米10kg たい平師匠グッズ 特別賞若干数 林久右衛門のスープ（枕崎産鰹節使用）&たなかみ米セットたい平師匠グッズ 佳撰10作品いま暮ら珈琲オリジナルブレンドコーヒー（豆）たい平師匠グッズ" loading="lazy">
					</figure>
					<figure>
						<img src="<?php echo $img_url?>/enquete/cafe42/img02@x2.jpg" class="u-img__max u-only__pc" alt="抽選100名さまいま暮ら珈琲デビュー1周年記念プレゼント いま暮ら珈琲（ドリップバッグセット）川柳をご投稿いただいた方のなかから抽選で100名さまにオリジナルブランドコーヒー「いま暮ら珈琲（ドリップバッグセット）」をプレゼント！" loading="lazy">
						<img src="<?php echo $img_url?>/enquete/cafe42/img02_sp@x2.jpg" class="u-img__max u-only__sp" alt="抽選100名さまいま暮ら珈琲デビュー1周年記念プレゼント いま暮ら珈琲（ドリップバッグセット）川柳をご投稿いただいた方のなかから抽選で100名さまにオリジナルブランドコーヒー「いま暮ら珈琲（ドリップバッグセット）」をプレゼント！" loading="lazy">
					</figure>
				</div>
				<div class="u-assist">
					<h5 class="u-ttl__s">キャンペーン概要</h5>
					<div class="notes mb2">
					<h4 class="u-ttl__s">注意事項</h4>
						<ul>
							<li>・「五・七・五」になっていないもの（字足らず・字余りの範囲、句またぎは可）、明らかに適当に入力したもの（例：あああああ いいいいいいい ううううう 等）、テーマから大きく外れたものは選考の対象になりません。</li>
							<li>・ほかで発表した作品の投句は不可です。選考の対象になりませんので、未発表の作品にてご応募ください。</li>
							<li>・上記の条件により選考から外れたものにおいて、場合によってはポイント付与を取り消すこともございます。</li>
							<li>・投句いただいた作品の著作権は、長谷工グループ「ブランシエラクラブ」に帰属します。</li>
							<li>・入賞作品は、本WEBサイトにて公開させていただきます。</li>
						</ul>
					</div>
					<div class="u-list__dl_table">
						<dl>
							<dt>お題</dt>
							<dd><strong>スマイルのある暮らし ～ご当地～</strong></dd>
						</dl>
						<dl>
							<dt>受付期間</dt>
							<dd><?php echo $imakura_period; ?></dd>
						</dl>
						<dl>
							<dt>対象者</dt>
							<dd><strong><?php echo $imakura_target; ?></strong></dd>
						</dl>
						<dl>
							<dt>特典</dt>
							<dd>①入選された方に賞品をプレゼント<br>②投句いただいた方全員に50スマイルプレゼント<br>※句数に関わりなく1回の投句での付与は50スマイルです。</dd>
						</dl>
						<dl>
							<dt>投句方法</dt>
							<dd>ページ下部の「ご応募はこちらから」ボタンより入力フォームに進み、投句ください。<br>※投句は1IDにつき1度のみ、<strong>最大3句</strong>までとなります。<br>※雅号(ペンネーム)も必ずご記載ください。</dd>
						</dl>
						<dl>
							<dt>選考結果</dt>
							<dd>締切後、応募作品の中から「いま暮ら大賞」や「ブランシエラクラブ賞」などを厳選し、10月19日（水）公開予定の「いま暮らCafé」にて発表いたします。</dd>
						</dl>
					</div>
				</div>

				<?php if($eventSts == 'new') { ?>
				<div class="u-btn-layout">
					<div class="u-btn-layout__row">
						<a href="<?php echo $imakura_url; ?>" target="_blank" rel="nofollow" class="u-btn_point u-btn-layout__item">ご応募はこちらから</a>
					</div>
				</div>
				<?php } else { ?>
					<label class="u-btn_end center mt2" >アンケートは終了いたしました</label>
				<?php } ?>
			</section>
		</div>
	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
