<?php
//base
include( "../../function.php" );
$content = get_id_data( '19001' );
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
$release_year = "2019";
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
        <h3 class="u-ttl__l">3.11の教訓を未来に生かすために</h3>
        <p class="mb3">2011年3月11日14時46分 東日本各地に甚大な被害を及ぼした東日本大震災。<br>予想を超えた大きな災害の体験、その教訓を私たちはその後に生かせているでしょうか。警備会社の使命として、大震災発生直後からALSOKは災害対応に奔走しました。その経験をふまえて何が必要なのか、普段の心構えはどうあるのがいいのか、話を伺いました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">機械監視が使えないなら人が駆けつける!</span></h4>

          <p class="mb3">その日、出張中の仙台で車で移動中、大地震に遭遇したALSOKスタッフ。<br>「大きな横風を感じたとたんに激しい揺れ。周囲は大混乱」になり予定を急遽変更、現地に留まり対応にあたりました。</p>
          <p class="mb3">一方、本社勅命で被災地へ駆けつけたスタッフは「阪神・淡路大震災の経験からしても比べものにならないほどの広域災害」の中で、現地災害対策推進本部統括責任者として1ヵ月以上にわたり、全国から派遣された、延べ3000名を超える応援社員やボランティア社員の陣頭指揮にあたりました。</p>

          <figure class="u-float__right">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/46/alsok46__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/46/alsok46__img01@2x.png"
              alt="<?php echo $pageTtl?>" style="max-width:386px" class="u-img__max u-only__pc">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/46/alsok46__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/46/alsok46__img01-sp@2x.png"
              alt="<?php echo $pageTtl?>" style="max-width:264px" class="u-img__max u-only__sp center">
          </figure>
          <p class="mb3">現地は通信、交通、ライフラインが遮断、通常の機械監視ができないため、すべては人海戦術。社員の安否確認から警備先の建物巡回、金融機関などの臨時警備まで、社員が現場に出向いて対応しました。</p>
          <p>全国から使命感で集まった広域社員たちが、ときに1日おにぎり１個、お風呂にも入らずに頑張り、現地の士気は非常に上がっていました。被災地以外は通常業務を行なう中での社員の派遣は、普段から充分な人員を配備しているため、イザというときは融通がききました。天災は免責という契約上の規定はありますが、こんなときこそ警備会社としての社会的使命、責任を果たすべきだと考えています。 </p>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">逃げるときに身を守るツールを</span></h4>
          <p class="mb3">地震の備えについては、まずドアを開けて脱出口を確保。これは大原則ですが、加えて逃げるためのグッズの備えが欠かせません。<br>地震直後、仙台市街では一部のビルの窓ガラスが割れて降り注ぐ中人々が一斉に飛び出し、非常に危険な状況でした。<br><strong>大地震の場合、マンションでも非常階段を下りて避難する際、壁が崩れ落ちてくる危険性があります。ヘルメットや手袋など身体を守るグッズもぜひ用意してください。</strong><br>現地の状況をつぶさに見たスタッフは、支援物資が到着するまでの数日間をしのぐための食料や水の備蓄に加えて、防寒具や非常用発電機の必要性も指摘します。</p>
          <p class="mb3">また、災害時はデマや風評被害が横行しがち。正確な情報収集が重要です。東日本大震災の経験では携帯電話よりラジオが情報を得るには最も有効でした。電池とともに準備しておくといいでしょう。</p>
          <p class="mb3">津波に関心がいきがちですが、揺れ自体も相当なもの。マンションの上層階などでは、特に家具の下に耐震マットを敷くなど転倒防止の対策も大切です。 </p>
          <figure class="center mb5">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/46/alsok46__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/46/alsok46__img02@2x.png"
              alt="防災グッズ（イメージ）｜<?php echo $pageTtl?>" style="max-width:507px" class="u-img__max u-only__pc center">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/46/alsok46__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/46/alsok46__img02-sp@2x.png"
              alt="防災グッズ（イメージ）｜<?php echo $pageTtl?>" style="max-width:263px" class="u-img__max u-only__sp center">
          </figure>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">あの大災害が風化しないように家族で話し合おう</span></h4>
          <p class="mb3"><span class="font-color__brown">「気持ちの備えも大切」というのがALSOKスタッフの共通した考えです。これからは従来の想定を上回る事態が起きることを想定して備えるべきです。まさかこんなことが…というところまで踏み込んで考えておきましょう。</span></p>
          <p class="mb3">現地では、防災訓練にきちんと取り組んできたか、そうでないかの差がはっきり出ました。防災訓練の本気度が被災の明暗を分けるでしょう。<br>東日本大震災は、日本中全員が被災者と言ってもいいくらいの大災害でした。そして近い将来、東海地震などが起こる危険性が指摘されています。<br>こうした状況にどう対応すればいいか、まずご家庭で話し合うことが大切です。できることは何か、備えとして何が必要なのか、それをどう使えばいいのかなど、震災の記憶が風化しつつある今、もう一度、広く考えておくことに意義があります。</p>
          <p class="mb3"><strong>震災の記憶を風化させない、家族で伝え合うことも確かな備えにつながります。</strong></p>
          <figure class="center mb5">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/46/alsok46__img03.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/46/alsok46__img03@2x.png"
              alt="震災の記憶を風化させない、家族で伝え合う｜<?php echo $pageTtl?>" style="max-width:295px" class="u-img__max u-only__pc center">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/46/alsok46__img03-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/46/alsok46__img03-sp@2x.png"
              alt="震災の記憶を風化させない、家族で伝え合う｜<?php echo $pageTtl?>" style="max-width:222px" class="u-img__max u-only__sp center">
          </figure>
        </section>
        <div class="mb8 mb3_sp">
          <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
        </div>
				<section>
					<h5>■関連記事</h5>
						<div class="u-photolist__row">
							<?php echo show_category_photoListalsok("alsok-bousai",$exceptcnt_id); ?>
						</div>
				</section>
      </section>
    </div>
  </article>
</main>
<?php
$toindex_url = "/magazine/index_alsok.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
