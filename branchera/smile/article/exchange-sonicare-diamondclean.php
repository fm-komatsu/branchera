<?php
//base
include ("../../function.php");
$content = get_id_data('10009');
$pageTtl = $content['title'];
//meta
$metaTtl = 'スマイルで交換できる「'.$pageTtl.'」-'.siteName();
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
		$panAry[] = array("/smile/" ,"住まいレージ");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<?php
		$smile_flug = "exchange";// exchange or lottery or service or no_flp
		$smile_num = "50,000";//必要スマイル数
		$smile_id_test = "49";//テストFLP用リンクナンバー
		$smile_id_production = "103";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              data-src="<?php echo($img_url)?>/smile/article/exchange-sonicare-diamondclean-img1.jpg"
              data-retina="<?php echo($img_url)?>/smile/article/exchange-sonicare-diamondclean-img1@2x.jpg"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="<?php echo($img_url)?>/smile/article/exchange-sonicare-diamondclean-img2.jpg"
              data-retina="<?php echo($img_url)?>/smile/article/exchange-sonicare-diamondclean-img2@2x.jpg"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="<?php echo($img_url)?>/smile/article/exchange-sonicare-diamondclean-img3.jpg"
              data-retina="<?php echo($img_url)?>/smile/article/exchange-sonicare-diamondclean-img3@2x.jpg"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
          <h4 class="lottery-point__ttl">優れた洗浄能力でしっかりとケア</h4>
          <p>優しく歯垢を取り除き、日常的な着色汚れを落とすことができます。また、歯と歯ぐきの形に合わせて変形し、フィットするので、歯ぐきを傷めずにブラッシング。歯垢除去力は手磨きの最大約10倍です！※</p>
          <h4 class="lottery-point__ttl">5つのモードから選べるブラッシング</h4>
          <p>クリーンモード（歯をキレイに）、ホワイトモード（自然な白さへ）、センシティブモード（歯と歯ぐきにやさしい）、ガムケアモード（歯ぐきをケア）、ディープクリーンモード（歯をやさしくケアしながら歯垢を掻き出す）の5つのモードから、ブラッシングのニーズにあわせて選ぶことができます。</p>
					<h4 class="lottery-point__ttl">ノウハウを活かした充実機能</h4>
          <p>専門家が推奨する2分間のブラッシング時間をお知らせしてくれる、スマートタイマー機能付き。さらに、電動歯ブラシが初めての方でもスムーズに慣れていただけるよう、使う回数を重ねることで徐々にブラッシングのパワーを段階調整する、イージースタート機能も搭載しています。</p>
			  </div>
      </div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>本体は、少しラメが入ったパールホワイトに、細部でローズゴールドのカラーを使用していて、エレガントなデザインになっています。さらに、スタイリッシュな「充電器用グラス」は、歯ブラシを置くだけで充電が可能。もちろん、口をすすぐ際のグラスとしてもお使いいただけますよ♪</p>
				</div>
			</div>
			<p class="u-small mb2">※プレミアムクリーンブラシ使用時／手磨きと比較</p>

   			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
      <h5 class="u-terms__ttl">詳細スペック</h5>
      <div class="u-terms__inner u-list__dl_table">
          <dl>
            <dt>セット内容</dt>
            <dd>ダイヤモンドクリーン 1本・プレミアムクリーンブラシ 1本・ホワイトプラスブラシ（コンパクト）1本・舌磨きブラシ 1本・充電器用グラス 1個・充電スタンド 1個</dd>
          </dl>
					<dl>
						<dt>カラー</dt>
						<dd>ローズゴールド</dd>
					</dl>
          <dl>
            <dt>対応電圧</dt>
            <dd>100-240V（海外電圧対応可能）</dd>
          </dl>
          <dl>
            <dt>サービス</dt>
            <dd>本体2年間保証</dd>
          </dl>
        </div>
      </div>
    </div>
    <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>


				<?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>

		</section>

		<aside class="main__item">
			<h3 class="u-ttl__l">よくあるご質問</h3>
			<?php include ($inc_path."/lib/inc/page/_smile/smile-promotion.php") ?>
		</aside>

		<nav class="main__snav snav">
			<?php include ($inc_path."/lib/inc/page/_smile/u-smile-snav.php") ?>
		</nav>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
