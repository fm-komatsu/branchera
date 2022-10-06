<?php
//base
include ("../../function.php");
$content = get_id_data('9055');
$pageTtl = $content['title'];
$footerTtl = '1月の抽選賞品<br>【シロカ】モップ付きスティッククリーナー<br>抽選で8名さまに当たります！';

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
    $smile_year = '21';
    $smile_month = '01';
    $smile_next ="2021年2月1日（月）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "189";//テストFLP用リンクナンバー
    $smile_id_production = "189";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">1台4役！拭き掃除・布団掃除にも使える♪</h4>
          <p class="lottery-point__ex u-font__palt">本賞品は、スティッククリーナー・ハンディクリーナー・拭き掃除・布団掃除の4役を1台で担ってくれる、便利なモップ付き掃除機です！モップを使用する場合も、吸い込んだ後に拭き取る構造なので、掃除機をかけてから拭き掃除をする手間を省き、効率よくお掃除できます。キャスター式の掃除機と異なり、コンパクトなスティックタイプなので、お部屋の隅にそのまま置くことも可能！小さいながら多機能なところがポイントです♪</p>
          <h4 class="lottery-point__ttl">重量はわずか約1.9kg、電源コードは5m！使い勝手のよい仕様</h4>
          <p class="lottery-point__ex u-font__palt">本賞品の重さは約1.9kgと超軽量。女性やお子さまでも使いやすく、持ち運びも楽チンです。電源コードは5mあるので、お部屋の隅々まで届きます。「移動のたびにコンセントの抜き挿し…」といった煩わしい作業が必要ないのは便利ですよね。さらに、手元と本体、どちらにも電源スイッチがあるので、操作性も抜群です！<br>
コンパクト×性能×使い勝手と3拍子揃った本賞品。ぜひご応募くださいね！</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">1台4役を果たしながら、コンパクトでどんな方にも使いやすい本賞品。新生活で一人暮らしを始める方はもちろん、「2台目の掃除機が欲しい」「寝室や子供部屋専用の掃除機を置いておきたい」という方にもぴったりです。ハンディクリーナーとしても使えるので、机の隙間のゴミや細かい食べ残しなども楽々掃除できます！<br>
そして、付属のマイクロファイバーモップだけでなく、市販のお掃除用ウエットシートやドライシートを取り付けできるのも便利なポイント♪ぜひこの機会にご応募ください！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table">

            <dl>
							<dt>電圧</dt>
							<dd>
                AC100V
							</dd>
            </dl>  
            <dl>
							<dt>周波数</dt>
							<dd>
								50/60Hz
							</dd>
						</dl>
            <dl>
							<dt>消費電力</dt>
							<dd>
                400W 
							</dd>
            </dl>  
            <dl>
							<dt>吸込仕事率</dt>
							<dd>
								70W
							</dd>
						</dl>
            <dl>
							<dt>集じん容量</dt>
							<dd>
                0.5リットル
							</dd>
						</dl>
            <dl>
							<dt>運転音(約)</dt>
							<dd>
								73dB
							</dd>
						</dl>
            <dl>
							<dt>コード長(約)</dt>
							<dd>
                5m
							</dd>
						</dl>
            <dl>
							<dt>サイズ(約)</dt>
							<dd>
								スティック、フロアヘッド、シート固定板装着時：幅25.1cm×奥行18.5cm×高さ111.5cm<br>本体：幅11.3cm×奥行48.4cm×高さ11.3cm 
							</dd>
						</dl>
            <dl>
							<dt>本体重量(約)</dt>
							<dd>
                約1.9kg（フロアヘッド、スティック、シート固定板を含む） 
							</dd>
						</dl>
            <dl>
							<dt>セット内容</dt>
							<dd>
                本体、布団ノズル、マイクロファイバーモップ、シート固定板、収納袋、ふき取りシート<br>（試供品3枚）、取扱説明書(保証書)  
							</dd>
						</dl>
            <dl>
							<dt>JAN</dt>
							<dd>
                4589919811748
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
