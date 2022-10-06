<?php
//base
include ("../../function.php");
$content = get_id_data('9048');
$pageTtl = $content['title'];
$footerTtl = '6月の抽選賞品<br>【aarke】カーボネーターII　マットブラック<br>抽選で3名さまに当たります！';

//meta
$metaTtl = strip_tags($pageTtl).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = strip_tags($pageTtl).'が当たる、ブランシエラクラブの抽選ページです。抽選賞品は'.$content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article lottery";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?> <main class="main">
	<article class="main__row"> <?php
    $panAry[] = array("/smile/" ,"住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?> <?php
    $smile_flug = "lottery";// exchange or lottery or service or no_flp
    $smile_year = '20';
    $smile_month = '06';
    $smile_next ="2020年7月1日（水）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "164";//テストFLP用リンクナンバー
    $smile_id_production = "164";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?> <section class="lottery-banner"> <?php include ($inc_path."/lib/inc/page/_smile/__lottery-main-v.php"); ?> </section>
		<section class="main__wrapper">
			<div class="lottery-figs">
				<div class="lottery-figs__row">
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
					<figure class="lottery-figs__item">
						<img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max">
					</figure>
				</div>
			</div>
			<div class="lottery-point">
				<div class="lottery-point__row">
					<h4 class="lottery-point__ttl">弱炭酸〜強炭酸まで調整可能！手軽に炭酸水が楽しめるソーダサーバー</h4>
					<p class="lottery-point__ex">「シンプルな美しさ」を像形した、高級・高品質製品の生産を目指すスウェーデン・ストックホルム発のブランド「aarke (アールケ)」。aarkeのソーダサーバー「カーボネーターII」は、ボトルと炭酸ガスシリンダーを本体にセットして、レバーを押すだけで炭酸水が作れます。本商品の特徴は、炭酸の強度を簡単に変更できること！レバーを押す回数で、弱炭酸〜強炭酸まで手軽に調整できます！</p>
					<h4 class="lottery-point__ttl">インテリアにもなるおしゃれなデザイン。お部屋のアクセントにも◎</h4>
					<p class="lottery-point__ex">お部屋のインテリアにもなる、人気の北欧デザインも本商品の特徴です。今回お届けするマットブラックは、高級感があり、どのようなお部屋にもマッチします♪また、手動式なので、電源も不要！キッチンカウンターやバルコニー、ベッドルームなど、お好きな場所でお使いいただけます！<br>そして付属のボトルは、キャップを閉めたらそのまま冷蔵庫で保存することができます。いつでも冷えた炭酸水が楽しめるので、これからの暑い季節に重宝すること間違いなしですよ♪</p>
				</div>
			</div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">暑くなると飲みたくなる、よく冷えたシュワシュワの炭酸水。レモンやグレープフルーツなどの好きなフレーバーを加えたり、お酒と割ってカクテルにしたりと、いろいろな楽しみ方がありますよね。ご自宅でお店気分を味わえる本格ソーダサーバーは、父の日のプレゼントにオススメです♪さらに、自家製の炭酸水を飲むことは、ペットボトルやビンを減らすことにもつながります！おしゃれさと実用性を兼ね備え、環境にもやさしいaarkeのソーダサーバー。ぜひこの機会にご応募くださいね！</p>
				</div>
			</div>
			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>カラー</dt><dd>マットブラック</dd>
            </dl>
            <dl>
								<dt>サイズ</dt><dd>本体 高さ414mm 奥行258mm / 専用ペットボトル 高さ265mm 幅85.5mm</dd>
                </dl>
							<dl>
								<dt>重量</dt><dd>本体約1,450g / 専用ペットボトル 209g</dd>
							</dl>
							<dl>
								<dt>付属品</dt><dd>ウォーターボトル　※ガスシリンダーは別売です。</dd>
							</dl>
							<dl>
								<dt>ガスシリンダー</dt>
								<dd>CO2 190g 圧力:12.4MPa / H 365 φ60</dd>
							</dl>
							<dl>
								<dt>材質</dt><dd>ステンレス</dd>
							</dl>
							<dl>
								<dt>製造国</dt><dd>中国</dd>
							</dl>
              <div class="mt3 u-font__mid">
								<h6 class="u-font__normal">●注意事項</h6>
								<p>炭酸ガスは、ソーダストリーム社（<a href="http://www.sodastream.jp/" target="_blank" rel="nofollow" class="u-icon">http://www.sodastream.jp/</a>）のガスシリンダー（410g / 60L）をお使いいただけます。<br>※別途ご購入が必要です。詳細はソーダストリーム社のホームページをご覧ください。</p>
							</div>
					</div>
				</div>
				<small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、20<?php echo $smile_year ?>年<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月中旬頃お手元に届くよう、賞品を発送いたします。 </small>
			</div>
			<div class="mb4 mb2_sp u-font__palt"> <?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?> <?php if (!$ssoFlag == 1){ ?> <small class="u-small mt1">※応募には長谷工IDが必要です。まだお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。<br>※新規登録で1,000スマイルをプレゼントしています。</small> <?php }; ?> </div>
			<div class="mt2">
				<P>■<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月の抽選賞品は、<?php echo $smile_next ?>公開予定です。</P>
			</div>
		</section>
		<aside class="main__item">
			<h3 class="u-ttl__l">よくあるご質問</h3> <?php include ($inc_path."/lib/inc/page/_smile/smile-promotion.php") ?> </aside>
		<nav class="main__snav snav"> <?php include ($inc_path."/lib/inc/page/_smile/u-smile-snav.php") ?> </nav>
	</article>
</main> <?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?> <?php  include ($inc_path."/lib/inc/footer.php"); ?> <?php  include ($inc_path."/lib/inc/foot.php"); ?>
