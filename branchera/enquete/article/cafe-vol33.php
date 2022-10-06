<?php
//base
include ("../../function.php");
$content = get_id_data('11074');
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
$imakura_enqttl="いま暮ら 吹き出しコンテスト";

$imakura_info ="記念すべき第1回は、長谷工あんしんデリのマスコットキャラクター「はせぽん」が登場！ユニークなシチュエーションをご用意しましたので、ぜひチャレンジしてくださいね。<br>入賞者には、たなかみ米やいま暮ら珈琲をプレゼント！みなさまの面白い回答をお待ちしています。";

$imakura_period="2022年3月17日（木）～2022年3月27日（日）";

$imakura_target="長谷工IDをお持ちで、楽しいことが好きな方・チャレンジ精神旺盛の方";

$imakura_url="https://haseko.flpjp.com/enquete/3/41";

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
				<h2 class="u-ttl__cafe20 first-of-type mt0">特別企画「いま暮ら 吹き出しコンテスト」開催します！</h2>
				<div class="main-v mb2">
					<figure>
						<img src="<?php echo $img_url?>/enquete/cafe33/main-v@2x.png" class="u-img__max u-only__pc" alt="第1回いま暮らCafé特別企画 いま暮ら 吹き出しコンテスト" loading="lazy">
						<img src="<?php echo $img_url?>/enquete/cafe33/main-v_sp@2x.png" class="u-img__max u-only__sp" alt="第1回いま暮らCafé特別企画 いま暮ら 吹き出しコンテスト" loading="lazy">
					</figure>
				</div>
				<div class="enquete-ex">
					<div class="enquete-ex__row">
						<div class="enquete-ex__ex mb3">
							<p class="mb2">みなさまの“声”から、“暮らしの今”を切り取りお伝えする、「いま暮らCaf&eacute;」。<br>今回は特別企画として、「いま暮ら 吹き出しコンテスト」を開催！吹き出しに入るセリフを考えてお答えください。</p>
							<p><?php echo $imakura_info; ?></p>
						</div>
					</div>
				</div>
				<div class="main-v mb2">
					<figure>
						<img src="<?php echo $img_url?>/enquete/cafe33/present_pc@2x.png" class="u-img__max u-only__pc" alt="吹き出しに入るセリフは？入賞した方には豪華プレゼント！最優秀賞たなかみ米5kgいま暮ら珈琲（ドリップ）優秀賞たなかみ米2kg 佳撰いま暮ら珈琲（ドリップ）" loading="lazy">
						<img src="<?php echo $img_url?>/enquete/cafe33/present_sp@2x.png" class="u-img__max u-only__sp" alt="吹き出しに入るセリフは？入賞した方には豪華プレゼント！最優秀賞たなかみ米5kgいま暮ら珈琲（ドリップ）優秀賞たなかみ米2kg 佳撰いま暮ら珈琲（ドリップ）" loading="lazy">
					</figure>
				</div>
				<div class="u-assist">
					<h5 class="u-ttl__s">アンケート概要</h5>
					<div class="notes mb2">
					<h4 class="u-ttl__s">注意事項</h4>
						<ul>
							<li>・明らかに適当に入力したもの（例：pl・kjrあdf など）、吹き出しコンテストと無関係の投稿は選考の対象になりません。</li>
							<li>・ほかで発表した作品の投稿や類似作品からの転用は不可です。選考の対象になりません。未発表のオリジナル作品にてご応募ください。</li>
							<li>・上記の条件により選考から外れたものにおいて、場合によってはポイント付与を取り消すこともございます。</li>
							<li>・投稿いただいた作品の著作権は、長谷工グループ「ブランシエラクラブ」に帰属します。</li>
							<li>・入賞作品は、本WEBサイトにて公開させていただきます。</li>
						</ul>
					</div>
					<div class="u-list__dl_table">
						<dl>
							<dt>応募期間</dt>
							<dd><?php echo $imakura_period; ?></dd>
						</dl>
						<dl>
							<dt>応募資格</dt>
							<dd><strong><?php echo $imakura_target; ?></strong></dd>
						</dl>
						<dl>
							<dt>特典</dt>
							<dd>①入賞された方に賞品をプレゼント<br>②投稿いただいた方全員に50スマイルプレゼント</dd>
						</dl>
						<dl>
							<dt>応募方法</dt>
							<dd>ページ下部の「ご応募はこちらから」ボタンより入力フォームに進み、投稿してください。<br><span class="u-small">※投稿は1IDにつき1度のみとなります。<br>※ペンネームも必ずご記載ください。</span></dd>
						</dl>
						<dl>
							<dt>選考結果</dt>
							<dd>締切後、応募作品のなかから「最優秀賞」や「優秀賞」などを厳選し、4月28日（木）公開予定の「いま暮らCaf&eacute;」にて発表いたします。</dd>
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
