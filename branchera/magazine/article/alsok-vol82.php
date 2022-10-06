<?php
//base
include( "../../function.php" );
$content = get_id_data( '19004' );
$pageTtl = $content[ 'title' ];
$exceptcnt_id = $content['contents_id'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article alsok";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//release date
$release_year = "2021";
$release_month ="6";
$release_day ="";
?>
<main class="main magazine">
  <article class="main__row">
    <?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_alsok.php", "プロに聞く。暮らしの危機管理。" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
    <?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
    <div class="main__wrapper">
      <section class="main__item">
        <h3 class="u-ttl__l">風水害時の「マンション警備」</h3>
        <p class="mb3">日本周辺では過去30年に、年間平均25個の台風が発生しています。また、集中豪雨による洪水や浸水などの水害が後を絶ちません。ALSOKではマンションを警備する立場から、管理会社と協力して風水害への取り組みを行なっています。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">災害が起きたときは</span></h4>
          <p class="mb3">2019年に台風19号が上陸した際は、全国各地より数多くの警報が発報され、停電・建物損壊・ガラス破損・浸水・車両水没等の被害が確認されました｡</p>
          <div class="flex between">
            <div>
              <p class="mb2">マンション（※1）からの異常信号がアウル24センター（長谷工コミュニティの総合監視センター）に届いた場合、該当マンションに<strong>ALSOKよりガードマンが急行し、事故発生の有無を確認</strong>します。安全確認後は、アウル24センターへ連絡・報告し、異常が確認された場合は、必要に応じて二次業者（緊急対応業者等）を手配します。<strong>災害時は人命に関わる異常信号を優先し、被災者支援に対応します。</strong><br>※１ 長谷工コミュニティが管理を行ない、かつALSOKとご契約をいただいているマンション。</p>
            </div>
          </div>
        </section>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">防災に対する取り組み</span></h4>
          <div class="flex between">
            <div class="w50">
              <p class="mb2">居住者さまの防災備品の備蓄量や、必要なスペースの目安等、マンションの管理組合さまからは、災害対策に関わるご相談を多くいただきます。</p>
            <div class="u-assist">
              <p class="mb2" style="font-weight:bold;">マンションの管理組合さまより 多く寄せられるご相談<br>
                <ul>
                  <li>•防災備品は何が必要か</li>
                  <li>•備蓄品の量はどれくらい準備しておけばよいか</li>
                  <li>•備蓄品の保管スペースはどれくらい必要か</li>
                  <li>•予算はどれくらいかかるのか</li>
                  <li>•期限管理の方法</li>
                  <li>•他マンションの事例等</li>
                </ul>
              </p>
            </div>
            <div class="w50 u-only__sp">
              <img src="<?php echo $img_url; ?>/magazine/alsok/82/img__01-sp@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max u-only__sp mb2 center" style="max-width:173px"  loading="lazy">
              <p>それに対しALSOKでは、<strong>災害備蓄品の「期限管理」「棚卸し」「回収調整」を行う『災害備蓄品マネジメント支援サービス』</strong>を用意し、管理会社である長谷工コミュニティと協力してマンション<strong>管理組合さまの負担軽減</strong>のお手伝いをする取り組みをしております。</p>
              <img src="<?php echo $img_url; ?>/magazine/alsok/82/img__02-sp@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max u-only__sp center" style="max-width:260px"  loading="lazy">
            </div>
              <p class="u-only__pc">それに対しALSOKでは、<strong>災害備蓄品の「期限管理」「棚卸し」「回収調整」を行う『災害備蓄品マネジメント支援サービス』</strong>を用意し、管理会社である長谷工コミュニティと協力してマンション<strong>管理組合さまの負担軽減</strong>のお手伝いをする取り組みをしております。</p>
            </div>
            <div class="w50 u-only__pc">
              <img src="<?php echo $img_url; ?>/magazine/alsok/82/img__01@2x.png" alt="<?php echo $pageTtl?>" style="max-width:255px" class="u-img__max u-only__pc center mb3" loading="lazy">
              <img src="<?php echo $img_url; ?>/magazine/alsok/82/img__02@2x.png" alt="<?php echo $pageTtl?>" style="max-width:327px" class="u-img__max u-only__pc" loading="lazy">
            </div>
          </div>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">家庭での防災対策</span></h4>
          <div class="flex between mb4">
            <div class="w50">
              <p class="mb2">災害はいつ発生するか分からないため、<strong>マンションのベランダは常に片づけておきましょう。</strong>ゴミや落ち葉などで排水口をふさいでいると、豪雨の際に詰まって水がお部屋に入ってくることもあります。<br>さらに防災グッズや、非常食、衛生用品の備蓄等、被害への備えをしっかり整えておきましょう。日用品や長期保存のきく食糧などは普段から少し多めに買って備蓄しておき、<strong>非常時の連絡先や避難場所は家族で事前に確認</strong>しておくことが重要です。<br>また、避難が必要な場合には、空き巣や、火災等、二次災害にも注意が必要です。</p>
              <div class="u-assist u-only__pc">
                <p class="mb2" style="font-weight:bold;">避難のために家を空ける場合の二次災害を防止するためには<br>
                  <ul>
                    <li>•空き巣を防ぐために戸締りを厳重にする。</li>
                    <li>•家を出るときは、ガス・水道の元栓を必ず締める。</li>
                    <li>•探しにきた人に無事を伝えられるように、玄関に「全員無事」等のメモを剥がれないようにしっかり貼り付ける。</li>
                  </ul>
                </p>
              </div>
            </div>
            <div class="w50 u-only__pc center mb5">
              <img src="<?php echo $img_url; ?>/magazine/alsok/82/img__03@2x.png" alt="風水害時の「マンション警備」｜<?php echo $pageTtl?>" style="max-width:242px" class="u-img__max u-only__pc center mb3" loading="lazy">
              <img src="<?php echo $img_url; ?>/magazine/alsok/82/img__04@2x.png" alt="風水害時の「マンション警備」｜<?php echo $pageTtl?>" style="max-width:291px" class="u-img__max u-only__pc center mb3" loading="lazy">
              <img src="<?php echo $img_url; ?>/magazine/alsok/82/img__05@2x.png" alt="風水害時の「マンション警備」｜<?php echo $pageTtl?>" style="max-width:242px" class="u-img__max u-only__pc center" loading="lazy">
            </div>
            <div class="w50 u-only__sp">
              <img src="<?php echo $img_url; ?>/magazine/alsok/82/img__03-sp@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max u-only__sp mb2 center" style="max-width:234px"  loading="lazy">
              <img src="<?php echo $img_url; ?>/magazine/alsok/82/img__04-sp@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max u-only__sp mb2 center" style="max-width:250px"  loading="lazy">
            </div>
            <div class="u-assist u-only__sp w50">
              <p class="mb2" style="font-weight:bold;">避難のために家を空ける場合の二次災害を防止するためには<br>
                <ul>
                  <li>•空き巣を防ぐために戸締りを厳重にする。</li>
                  <li>•家を出るときは、ガス・水道の元栓を必ず締める。</li>
                  <li>•探しにきた人に無事を伝えられるように、玄関に「全員無事」等のメモを剥がれないようにしっかり貼り付ける。</li>
                </ul>
              </p>
            </div>
          </div>
            <div class="w50 center mb5">
              <img src="<?php echo $img_url; ?>/magazine/alsok/82/img__05-sp@2x.png" alt="風水害時の「マンション警備」｜<?php echo $pageTtl?>" style="max-width:212px" class="u-img__max u-only__sp center" loading="lazy">
            </div>
            <section>
            <div class="mb8 mb3_sp">
              <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
            </div>
              <h5>■関連記事</h5>
						<div class="u-photolist__row">
							<?php echo show_category_photoListalsok("alsok-bousai",$exceptcnt_id); ?>
						</div>
            </section>
          </div>
        </section>
      </section>
    </div>
  </article>
</main>
<div class="mt6 mt2_sp">
	<mitsuketa-banner point-id="MitMagAlsokVol38D20210601" img-url="<?php echo $img_url; ?>" login-url="<?php echo $login_url; ?>" :login-status="<?php echo $ssoFlag; ?>"></mitsuketa-banner>
</div>
<?php
$toindex_url = "/magazine/index_alsok.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
