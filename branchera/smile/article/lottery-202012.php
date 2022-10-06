<?php
//base
include ("../../function.php");
$content = get_id_data('9054');
$pageTtl = $content['title'];
$footerTtl = '12月の抽選賞品<br>【ANA FINDELISH】阿波尾鶏とマッシュルームのカレー×たなかみ米レトルトごはんセット<br>抽選で10名さまに当たります！';

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
    $smile_month = '12';
    $smile_next ="2021年1月6日（水）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "185";//テストFLP用リンクナンバー
    $smile_id_production = "185";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>
		<section class="lottery-banner"> <?php include ($inc_path."/lib/inc/page/_smile/__lottery-main-v.php"); ?></section>
    <section class="main__wrapper">
      <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item">
            <img src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item">
            <img src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max" loading="lazy">
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">ANAでご提供の絶品カレー×たなかみ米の豪華コラボが抽選賞品に登場！</h4>
          <p class="lottery-point__ex u-font__palt">「住まいレージ」の人気交換商品が抽選賞品に登場♪ANAファーストクラスでご提供実績のある「阿波尾鶏とマッシュルームのカレー」と、長谷工あんしんデリの特別栽培米「たなかみ米（コシヒカリ）」のスペシャルセットです！こだわりのカレーとこだわりのご飯を一緒に味わうことができます♪</p>
          <h4 class="lottery-point__ttl">ブランド鶏「阿波尾鶏」使用！ANA専属シェフオリジナルレシピ</h4>
          <p class="lottery-point__ex u-font__palt">「阿波尾鶏とマッシュルームのカレー」は、コクのあるうまみが特徴の徳島県産ブランド鶏「阿波尾鶏」とマッシュルームをたっぷり使用した、ANA専属シェフオリジナルレシピです。バターを溶かして仕上げた濃厚なルーと、香り高くふっくらとしたたなかみ米がベストマッチ！ブランシエラクラブでしか味わえないこのコラボを、この機会にぜひご賞味ください！</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">ご家庭でファーストクラスの味が楽しめる、超豪華カレーセット。カレーもご飯も湯せん、または電子レンジで加熱すれば食べられるので、手間や時間をかけることなく上質なカレーライスが完成♪おうちにいながら空の旅気分を味わえます。お届けは1月になるので、「お雑煮にも飽きてきたな〜」というときにもぴったりです♪ぜひご応募ください！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table">

            <dl>
							<dt>セット内容</dt>
							<dd>
								<ul class="u-list__ul_dot">
									<li>阿波尾鶏とマッシュルームのカレー ×6</li>
									<li>たなかみ米 ×6</li>
								</ul>
							</dd>
						</dl>
            <dl>
							<dt>原材料</dt>
							<dd>
								<div class="mb2"><span class="u-font__bold">◆阿波尾鶏とマッシュルームのカレー 180g</span><br>野菜（たまねぎ（国産）、マッシュルーム（中国産））、鶏肉（徳島県産）、バター、にんにくペースト、しょうがペースト、 トマト・ジュースづけ、大豆油、トマトケチャップ、カレー粉、チキンエキス、はちみつ、ばれいしょでん粉、ビーフコンソメパウダー、 食塩、小麦粉、香辛料／調味料（アミノ酸等）、（一部に小麦・乳成分・牛肉・大豆・鶏肉を含む）</div>
								<div><span class="u-font__bold">◆たなかみ米レトルトごはん 150g</span><br>滋賀県産コシヒカリ/たなかみ米（滋賀県認証環境こだわり米・特別栽培米）、pH調整剤</div>
							</dd>
						</dl>
          </div>
        </div>
        <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、20<?php if($smile_month == 12) { echo ($smile_year  + 1); } else { echo ($smile_year); } ?>年<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月中旬頃お手元に届くよう、賞品を発送いたします。 </small>
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
