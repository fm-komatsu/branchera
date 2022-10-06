<?php
//base
include ("../../function.php");
$content = get_id_data('11057');
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
$imakura_enqttl="気になるお部屋の空気の対策、どうしてますか？";

$imakura_info ="第1回となる今回は、なんと！ゲスト選者として、人気テレビ番組でもおなじみの落語家・林家たい平師匠をお迎えしております！素敵な賞もご用意してみなさまの力作をお待ちしています。あなたの作品が師匠に選んでいただけるかも！？<br>五・七・五にのせて、楽しく思いを発散してみませんか。";

$imakura_period="2021年9月2日（木）～2021年9月12日（日）";

$imakura_target="長谷工IDをお持ちで、日々の思いを発散させたい方・川柳に興味がある方";

$imakura_url="https://haseko.flpjp.com/enquete/3/16";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row ">
		<?php
		$panAry[] = array("/enquete/" ,"アンケート");
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>

		<div class="main__wrapper">
			<section class="main__item">
				<h2 class="u-ttl__cafe20 first-of-type mt0">特別企画「いま暮ら川柳」募集中です！</h2>
				<div class="main-v mb2">
					<figure>
						<img src="<?php echo $img_url?>/enquete/cafe20/main-v@x2.jpg" class="u-img__max u-only__pc" alt="第1回いま暮らCafé特別企画 お題「スマイルのある暮らし」いま暮ら川柳 ゲスト審査員落語家林家たい平師匠" loading="lazy">
						<img src="<?php echo $img_url?>/enquete/cafe20/main-v_sp@x2.jpg" class="u-img__max u-only__sp" alt="第1回いま暮らCafé特別企画 お題「スマイルのある暮らし」いま暮ら川柳 ゲスト審査員落語家林家たい平師匠" loading="lazy">
					</figure>
				</div>
				<div class="enquete-ex">
					<div class="enquete-ex__row">
						<div class="enquete-ex__ex mb3">
							<p class="mb2">みなさまの“声”から、“暮らしの今”を切り取りお伝えする、「いま暮らCaf&eacute;」。<br>今回は、特別企画として「いま暮ら川柳」を募集します！お題は「スマイルのある暮らし」。<br>テレワークや巣ごもり生活が続く中、募る不安や不満…。そんな日頃の思いを笑い飛ばすような内容や、そんな中でも笑顔になれたエピソードなど、「スマイル」や「暮らし」にまつわる川柳をご投稿ください。</p>
							<p><?php echo $imakura_info; ?></p>
						</div>
					</div>
				</div>
				<div class="main-v mb2">
					<figure>
						<img src="<?php echo $img_url?>/enquete/cafe20/present_pc@x2.jpg" class="u-img__max u-only__pc" alt="豪華プレゼント！もれなく50スマイル！いま暮ら大賞１作品たなかみ米10kg たい平師匠の大人気著書「はじめて読む 古典落語百選」たい平師匠の手ぬぐい いま暮ら珈琲 ブランシエラクラブ賞１作品 たなかみ米5kg たい平師匠の手ぬぐい いま暮ら珈琲 特別賞、佳作、若干数たい平師匠のグッズ いま暮ら珈琲" loading="lazy">
						<img src="<?php echo $img_url?>/enquete/cafe20/present_sp@x2.jpg" class="u-img__max u-only__sp" alt="豪華プレゼント！もれなく50スマイル！いま暮ら大賞１作品たなかみ米10kg たい平師匠の大人気著書「はじめて読む 古典落語百選」たい平師匠の手ぬぐい いま暮ら珈琲 ブランシエラクラブ賞１作品 たなかみ米5kg たい平師匠の手ぬぐい いま暮ら珈琲 特別賞、佳作、若干数たい平師匠のグッズ いま暮ら珈琲" loading="lazy">
					</figure>
				</div>
				<div class="u-assist">
					<h5 class="u-ttl__s">アンケート概要</h5>
					<div class="notes mb2">
					<h4 class="u-ttl__s">注意事項</h4>
						<ul>
							<li>・「五・七・五」になっていないもの（字足らず・字余りの範囲、句またぎは可）、明らかに適当に入力したもの（例：あああああ いいいいいいい ううううう 等）、テーマから大きくはずれたものは選考の対象になりません。</li>
							<li>・他で発表した作品の投句は不可です。選考の対象になりませんので、未発表の作品にてご応募ください。</li>
							<li>・上記の条件により選考から外れたものにおいて、場合によってはポイント付与を取り消すこともございます。</li>
							<li>・投句いただいた作品の著作権は、長谷工グループ「ブランシエラクラブ」に帰属します。</li>
							<li>・入賞作品は、本WEBサイトにて公開させていただきます。</li>
						</ul>
					</div>
					<div class="u-list__dl_table">
						<dl>
							<dt>お題</dt>
							<dd><strong>スマイルのある暮らし</strong></dd>
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
							<dd>①入選された方に賞品をプレゼント<br>②投句いただいた方全員に50スマイルプレゼント<br>※ご応募いただいた句の数による変動はございません。</dd>
						</dl>
						<dl>
							<dt>投句方法</dt>
							<dd>ページ下部の「ご応募はこちらから」ボタンより入力フォームに進み、投句ください。<br><span class="u-small">※投句は1IDにつき1度のみ、最大3句までとなります。<br>※雅号(ペンネーム)も必ずご記載ください。</span></dd>
						</dl>
						<dl>
							<dt>選考結果</dt>
							<dd>締切後、応募作品の中から「いま暮ら大賞」や「ブランシエラクラブ賞」などを厳選し、10月21日（木）公開予定の「いま暮らCafé」にて発表いたします。</dd>
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
