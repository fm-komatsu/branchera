<?php
//base
include ("../../function.php");
$content = get_id_data('10050');
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

// 欠品フラグ
$itemShortage = 0;
?>


<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/smile/" ,"住まいレージ");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<?php
		$smile_flug = "exchange";// exchange or lottery or service or no_flp
		$smile_num = "20,000";//必要スマイル数
		$smile_id_test = "224";//テストFLP用リンクナンバー
		$smile_id_production = "224";//本番FLP用リンクナンバー
		include ($inc_path."/lib/inc/page/_smile/smile-header.php");
		?>



		<section class="main__wrapper">

		<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-raycop-img1.png"
              data-retina="../../lib/img/smile/article/exchange-raycop-img1@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-raycop-img2.png"
              data-retina="../../lib/img/smile/article/exchange-raycop-img2@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
					<figure class="lottery-figs__item">
						<img
              data-src="../../lib/img/smile/article/exchange-raycop-img3.png"
              data-retina="../../lib/img/smile/article/exchange-raycop-img3@2x.png"
              alt="image"
              style="max-width:350px;"
              class="u-img__max"
            >
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
      <h4 class="lottery-point__ttl">外出先も清潔で安心な場所に変える！「持ち運ぶ」クリーナー</h4>
      <p>家庭内だけでなく、オフィスや外出先でも使えるポータブルクリーナーです。専用ポーチに入れて小さく収まるので、持ち運びも組み立ても簡単！アタッチメントを付け替えて、車内や窓のサッシなど細かい部分もすっきりキレイに♪さらに最大0.89kgと軽量なので、エアコンや棚の上、照明などの高い位置でもラクに掃除ができますよ！吸引したゴミはワンタッチで捨てられ、ダストボックスも丸ごと水洗いできるので、お手入れも簡単です。</p>
      <h4 class="lottery-point__ttl">スマートフォンもパソコンも、簡単UV除菌！</h4>
      <p>用途に合わせて本体の組み換えが自由自在！デリケートな衣服やデジタル機器など、吸引の必要がないときは、UV照射のみで使える「UVオンリーモード」を使うのがおすすめです。医療現場でも除菌灯として使われているUVランプで、UV除菌、ウイルス除去、ダニ除去が99.9%※可能！毎日使うスマートフォンやパソコンも清潔に保てます。</p>
		<small class="u-small mb3">※全ての菌、ウイルス、ダニに有用ではありません。<br class="u-only__sp">報告書NO.WJ20204040令和2年10月14日</small>	
    </div>

			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p>除菌やウイルス除去への関心がより高くなった今、さまざまな素材にも幅広く使えるポータブルクリーナーはとても便利♪お子さまが触れるものに特に気を使う方にとっても、外出先でチャイルドシートやベビーカーを清潔に保てるのは安心ですね。家庭も外出先も安心な場所に変えてくれる「UV除菌ポータブルクリーナー RAYCOP GO」。ぜひお試しください！</p>
				</div>
			</div>

   			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
      <h5 class="u-terms__ttl">詳細スペック</h5>
      <div class="u-terms__inner u-list__dl_table">
          <dl>
            <dt>型番</dt>
            <dd>RGO-300JPWH</dd>
          </dl>
          <dl>
            <dt>カラー</dt>
            <dd>ホワイト</p>
          </dl>
          <dl>
            <dt>EANコード</dt>
            <dd>8809248469820</dd>
          </dl>
          <dl>
            <dt>本体サイズ(mm)</dt>
            <dd>幅523.5×奥行169.0×高さ141.5(最大) </dd>
          </dl>
          <dl>
            <dt>質量</dt>
            <dd>0.89kg(最大)</dd>
          </dl>
          <dl>
            <dt>紫外線ランプ</dt>
            <dd>4W(UV-C/253.7nm)</dd>
          </dl>
          <dl>
            <dt>運転時間</dt>
            <dd>[UVオンリーモード※]約180分<br>[標準モード]約28分<br>[パワーモード]約9分 </dd>
          </dl>
          <dl>
            <dt>充電時間</dt>
            <dd>約3時間30分</dd>
          </dl>
          <dl>
            <dt>充電池</dt>
            <dd>リチウムイオンバッテリー充電池</dd>
          </dl>
          <dl>
            <dt>付属品</dt>
            <dd>ポーチ、UVコネクター、すき間ノズル、ブラシ、充電アダプター<small class="u-small">※約30分連続使用で、一旦停止します。</small></dd>
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
