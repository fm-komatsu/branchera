<?php
//base
include ("../../function.php");
$content = get_id_data('4093');
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

<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/event/" ,"イベント・キャンペーン");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
    ?>

    <section class="main__wrapper">
      <div class="main-v mb2">
        <p class="u-only__sp">いよいよ2022年！みなさまのハッピーに先んじて、ブランシエラクラブから抽選で10名さまにどど～んと50,000スマイルをプレゼント！奮ってご応募ください！ちょこっとアンケートにもお答えいただけると幸いです。</p>
        <div class="main-v mb2">
          <figure>
            <img src="<?php echo $img_url?>/event/newyear-present/tosen_pc@2x.jpg" class="u-img__max u-only__pc" alt="" loading="lazy">
            <img src="<?php echo $img_url?>/event/newyear-present/tosen_sp@2x.jpg" class="u-img__max u-only__sp" alt="" loading="lazy">
          </figure>
        </div>
      </div>
      <section>
        <div class="u-assist">
          <div class="u-list__dl_table_long">
            <dl>
              <dt>[応募期間]</dt>
              <dd>2021年12月16日（木）～2022年1月10日（月）</dd>
            </dl>
            <dl>
              <dt>[応募方法]</dt>
              <dd>ページ下部のボタンより、必要事項をご入力の上、送信してください。<br><small class="u-small">※ご登録情報のご確認をお願いします。また、「長谷工グループ情報希望」欄にチェックがされていることが条件となります。</small></dd>
            </dl>
            <dl>
              <dt>[当選発表]</dt>
              <dd>2022年1月20日（木）</dd>
            </dl>
            <dl>
              <dt>[ご注意事項]</dt>
              <dd><small class="u-small">※長谷工IDをお持ちのご本人さまのみご応募いただけます。<br>※本プレゼントの当選権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</small></dd>
            </dl>
          </div>
        </div>
       <!-- <p class="u-font__bold center u-color__red">下記のボタンよりご応募ください</p> -->
        <?php if($eventSts == 'new') { ?> <div class="u-btn-layout mb2">
				  <div class="u-btn-layout__row center mb2_sp">
            <a href="https://haseko.flpjp.com/enquete/1/29" class="u-btn_newyearpresent u-btn-layout__item" style="margin-top : 8px;">新春 お年玉プレゼントに応募する</a>
          </div>
				</div>
			</div> <?php } else { ?> <label class="u-btn_end center mt2">応募は終了しました</label> <?php } ?> <?php if (!$ssoFlag == 1){ ?><?php }; ?>
      </section>
    </section>
  </article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
