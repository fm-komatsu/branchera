<?php
//base
include ("../../function.php");
$content = get_id_data('9052');
$pageTtl = $content['title'];
$footerTtl = '10月の抽選賞品<br>【長谷工あんしんデリ】たなかみ米 3.6kg<br>抽選で20名さまに当たります！';

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
    $smile_month = '10';
    $smile_next ="2020年11月2日（月）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "179";//テストFLP用リンクナンバー
    $smile_id_production = "179";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">約1300年前からお米作りが続く土地！田上の特徴とは？</h4>
          <p class="lottery-point__ex u-font__palt">滋賀県・琵琶湖の南側に位置する田上（たなかみ）は、実は遥か昔、約1,300年前からお米作りが行なわれていた歴史ある土地です。田上の最も大きな特徴は、お米作りに最適な「土・水・気候」の３つの条件がそろっているということ！信楽の山々より流れ着く大戸川の美しい水、かこう岩系の土、盆地特有の寒暖差…この素晴らしい環境によって、豊かな甘味とうまみ、程よい粘り気のある食感を持つ絶品のお米「たなかみ米」が生み出されるのです。</p>
          <h4 class="lottery-point__ttl">長谷工あんしんデリだからできる！安心・安全で美味しいお米をお届け</h4>
          <p class="lottery-point__ex u-font__palt">「たなかみ米」は、長谷工あんしんデリのスタッフが、土作りから田植え、稲刈り、さらに精米、発送まですべてを自社で対応。徹底した管理による、安心・安全で美味しいお米をお届けします。さらに、「できるだけ農薬を使わない」「琵琶湖を汚さない」といった、環境に配慮した栽培方法を採用。この取り組みによって、農作物にも環境にもやさしい「環境こだわり農産物」の認証を滋賀県から受けています。自然の恵みによってたくましく育ち、お米本来の美味しさが詰まったたなかみ米。新米が味わえるこのチャンスに、ぜひご応募ください！</p>
        </div>
      </div>
			<div class="smile-comment u-assist">
				<div class="smile-comment__row">
					<p class="smile-comment__ex">毎年ご好評いただいている「たなかみ米」。令和2年度の新米も、水分含有率16％の「プレミアム仕上げ」です！通常のお米の水分含有率は15％以下。16%のお米は長期の貯蔵が難しいため、なかなか店頭には出回らない貴重な一品です。真空パックで精米したての美味しさと香りを閉じ込め、鮮度抜群の状態でお届けします♪<br>まだ食べたことのない方も、リピーターの方も、ぜひ今年の新米をご賞味くださいね。</p>
					<p>「<a href="<?php echo $base_url; ?>/magazine/article/recipe-technic28.php" class="u-icon" style="font-feature-settings: 'palt' 1;">新米の炊き方の基本</a>」も併せてチェック！
				</div>
			</div>
			<div class="lottery-terms u-terms">
				<div class="u-terms__row mb1">
					<h5 class="u-terms__ttl">詳細スペック</h5>
					<div class="u-terms__inner u-list__dl_table">
						<dl>
							<dt>サイズ</dt>
							<dd>12個入り<br><small class="u-small">※1個 W70㎜×H70㎜×D60㎜ （真空パック仕様）</small></dd>
						</dl>
						<dl>
							<dt>重量</dt>
							<dd>3.6kg<br><small class="u-small">※1個 300g （約2合）</small></dd>
						</dl>
						<dl>
							<dt>その他</dt>
							<dd>化粧箱に入れてお届けします。<br>化粧箱 概略寸法 W170㎜×H230㎜×D140㎜<br>化粧箱を含めた重量 約4㎏</dd>
						</dl>
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
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
