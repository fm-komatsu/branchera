<?php
//base
include ("../../function.php");
$content = get_id_data('4098');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<!-- css -->
<link rel="stylesheet" href="<?php echo $base_url ?>/lib/add-css/rashiku-monitor.css">

<main class="main">
  <article class="main__row ">
    <?php
    $panAry[] = array("/event/" ,"イベント・キャンペーン");
    include ($inc_path."/lib/inc/pan.php");
    ?>
		<?php
		// include($inc_path . "/lib/inc/page/_event/__main-header.php");
    //イレギュラーでSPヘッダー表示
		include($inc_path . "/lib/inc/page/_enquete/enquete-header.php");
    ?>

    <div class="main__wrapper">
      <section class="main__item">
        <h2 class="u-ttl__l">【限定１名さま】ご自宅のキッチンにジャストフィット！<br>「RASHIKU」モニターキャンペーンを実施します！！</h2>

        <div class="enquete-ex">
          <div class="enquete-ex__row">
            <div class="enquete-ex__ex">
              <p>長谷工リフォームが提供する、オリジナルセミオーダー収納家具「RASHIKU」のモニターキャンペーンを実施いたします！</p>
              <p>キッチンまわりの収納にお困りのあなた！ブランシエラクラブに、あなたのお悩み解決のお手伝いをさせてください！！</p>
              <p>ミリ単位でサイズオーダーができる「RASHIKU」で、ご自宅のカップボード（食器棚）をあなた“らしく”変えてみませんか？</p>
            </div>
            <img src="<?php echo $img_url; ?>/enquete/bran.png" class="enquete-ex__img" >
          </div>
        </div>

        <div class="u-assist">
          <h5 class="u-ttl__s">募集概要</h5>
          <div class="u-list__dl_table">
            <dl>
              <dt>受付期間</dt>
              <dd>9月28日（水）〜10月31日（月）</dd>
            </dl>
            <dl>
              <dt>対象者</dt>
              <dd>長谷工IDをお持ちの方で、キッチンの収納にお困りの方</dd>
            </dl>
            <dl>
              <dt>応募方法</dt>
              <dd>ページ下部のボタンより、必要事項をご入力の上、送信してください。<br><span class="u-small">※ご確認及びご登録をお願いします。また、「長谷工グループ情報希望」欄にチェックがされていることが条件となります。</span></dd>
            </dl>
            <dl>
              <dt>RASHIKUコンセプトブック</dt>
              <dd>コンセプトブック（デジタルパンフレット）は<a href="https://saas.actibookone.com/content/detail?param=eyJjb250ZW50TnVtIjoxNTY1MzV9&detailFlg=1&pNo=1" target="_blank" class="u-icon" data-ga-click="rashiku_book">こちら</a></dd>
            </dl>
            <dl>
              <dt>注意事項</dt>
              <dd>・モニターの対象は、ご自宅のカップボード（食器棚）に限ります<br>・30万円を超えた分につきましては、会員さまのご負担とさせていただきます<br>・ビフォー＆アフターの撮影とインタビューにお答えいただき、レポートページにて掲載させていただきます（お名前とお顔は掲載しません）<br>・関東にお住まいの方限定の企画となります<br><span class="u-small">※1都3県（東京都・千葉県・埼玉県・神奈川県）</span></dd>
            </dl>
          </div>
        </div>

        <?php if($eventSts == 'new') { ?>
        <div class="u-btn-layout center">
          <div class="u-btn-layout__row">
            <a href="https://haseko.flpjp.com/enquete/1/61" target="_blank" rel="nofollow" class="u-btn_point u-btn-layout__item" data-ga-click="rashiku_oubo">アンケートはこちらから</a>
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
