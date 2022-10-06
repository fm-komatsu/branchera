<?php
//base
include( "../../function.php" );
$content = get_id_data( '21010' );
$pageTtl = $content[ 'title' ];
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
$release_year = "2020";
$release_month ="11";
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
      <section class="main__item mb3">
        <h3 class="u-ttl__l">日暮れが早い季節「ひったくり被害」から身を守るには</h3>
        <p class="mb2">日暮れが早くなるこれからの季節は、通勤・通学の帰宅時間にはもう真っ暗。夜道を歩くことにも慣れてしまいがちです。<br>でも気を付けてください。夜の路上はひったくり犯に狙われるリスクが高まります。「自分は大丈夫」という油断が思わぬ隙を生むことも。</p>
				<p class="mb3">被害者にならないよう自分でできることや、被害を最小限にするために気をつけたいポイントについて、ALSOKにプロの視点からアドバイスをいただきました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">車道側にバッグを持つことは危険です！</span></h4>

          <div class="flex between mb2_sp">
            <div class="w50">
              <p class="mb2">警視庁によれば、ひったくりの被害は後を絶たず、被害者の大半は女性です。ひったくり犯は背後からバイクや自転車で近づき、自転車のかごのカバンや、肩にかけたバッグなどを奪って逃げます。<br>被害者に女性が多いのは男性に比べ、財布などの貴重品をバッグに入れて持ち歩くことも一因です。<br><strong>バッグは車道側ではなく必ず建物側に持ち</strong>、ショルダーバッグはたすき掛けにすることをおすすめします。<strong>自転車の場合はかごにネットや防犯カバー</strong>を付けましょう。</p>
						</div>
						<div class="w50">
							<figure class="center mb3">
                <img src="<?php echo $img_url; ?>/magazine/alsok/76/alsok76__img01@2x.png" alt="ひったくり被害者の性別認知　構成比（2012年）｜<?php echo $pageTtl?>" style="max-width:317px" class="u-img__max center u-only__pc" loading="lazy">
                <img src="<?php echo $img_url; ?>/magazine/alsok/76/alsok76__img01-sp@2x.png" alt="ひったくり被害者の性別認知　構成比（2012年）｜<?php echo $pageTtl?>" style="max-width:282px" class="u-img__max center u-only__sp" loading="lazy">
              </figure>
							<figure class="center">
                <img src="<?php echo $img_url; ?>/magazine/alsok/76/alsok76__img02@2x.png" alt="ひったくり遭遇時の荷物の所持形態｜<?php echo $pageTtl?>" style="max-width:317px" class="u-img__max center u-only__pc" loading="lazy">
                <img src="<?php echo $img_url; ?>/magazine/alsok/76/alsok76__img02-sp@2x.png" alt="ひったくり遭遇時の荷物の所持形態｜<?php echo $pageTtl?>" style="max-width:282px" class="u-img__max center u-only__sp" loading="lazy">
              </figure>
						</div>
          </div>

        </section>
        <section class="mb4">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">狙われにくい行動を心掛けて</span></h4>
					<div class="flex between mb2_sp">
						<div class="w50">
							<div class="mb3">
								<p class="mb2">ひったくり犯は常にターゲットを物色しています。走りづらい靴を履き、車道側にバッグを持って歩いている人などは、格好のターゲットになってしまいます。銀行から出たばかりの高齢者も被害に遭うケースが多いので、特に注意をしてください。</p>
								<p class="mb2 mb3_sp">また、携帯電話は万が一の時に通報できるよう、バッグに入れず、別に持つことを心掛けましょう。但し、歩きながらメールや電話をする<strong>『ながらスマホ』は、周囲の状況が見えなくなり、警戒心も薄くなる</strong>ので絶対にしてはいけません。</p>
								<figure class="mb3 center">
									<img src="<?php echo $img_url; ?>/magazine/alsok/76/alsok76__img03-sp@2x.png" alt="左：被害者の状況　右：犯行手段｜<?php echo $pageTtl?>" style="max-width:181px" class="u-img__max center u-only__sp" loading="lazy">
							</figure>

								<p class="mb3">ひったくり事件は夜間に多く発生しているので、夜道を歩く場合は、<strong>多少回り道でも明るく人通りの多い安全な道を選び、自宅に入るまでは決して油断しないこと</strong>。<br>もし被害に遭ってしまったら、奪い返そうと抵抗すると大きな怪我に繋がるケースもあるため、声を上げて周囲に知らせ、ナンバーや、犯人の特徴を覚えてすぐに警察へ通報してください。</p>
							</div>
						</div>
						<div class="w50">
							<figure class="mb5 center">
								<img src="<?php echo $img_url; ?>/magazine/alsok/76/alsok76__img03@2x.png" alt="左：被害者の状況　右：犯行手段｜<?php echo $pageTtl?>" style="max-width:355px" class="u-img__max center u-only__pc" loading="lazy">
							</figure>
							<figure class=" center">
								<img src="<?php echo $img_url; ?>/magazine/alsok/76/alsok76__img04@2x.png" alt="狙われやすい人ってどんな人｜<?php echo $pageTtl?>" style="max-width:314px" class="u-img__max center u-only__pc" loading="lazy">
								<img src="<?php echo $img_url; ?>/magazine/alsok/76/alsok76__img04-sp@2x.png" alt="狙われやすい人ってどんな人｜<?php echo $pageTtl?>" style="max-width:273px" class="u-img__max center u-only__sp" loading="lazy">
							</figure>
						</div>
					</div>
        </section>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">サービス利用でより安全性を高める</span></h4>

					<div class="flex between mb2_sp">
						<div class="w50">
							<div class="mb3">
								<p class="mb2">スマホのアプリと連携して<strong>位置情報を確認できる紛失防止用のタグ（※）</strong>を持ち物につけておくと、万が一被害に遭った場合でも所在を特定して取り戻せる可能性があります。</p>
								<p class="mb2 mb3_sp">自身でできる防犯対策とともに、安全性を高めるサービスやグッズなどの活用で、防犯対策をより強化して、犯罪被害へのリスクを下げる心掛けが大切です。</p>
							<figure class=" center">
								<img src="<?php echo $img_url; ?>/magazine/alsok/76/alsok76__img05-sp@2x.png" alt="スマホのアプリと連動して位置情報を確認できる｜<?php echo $pageTtl?>" style="max-width:283px" class="u-img__max center u-only__sp" loading="lazy">
							</figure>
								<p class="mb3">※紛失防止タグは、スマートタグ、セキュリティタグとも呼ばれています。</p>
							</div>
						</div>
						<div class="w50">
							<figure class=" center">
								<img src="<?php echo $img_url; ?>/magazine/alsok/76/alsok76__img05@2x.png" alt="スマホのアプリと連動して位置情報を確認できる｜<?php echo $pageTtl?>" style="max-width:322px" class="u-img__max center u-only__pc" loading="lazy">
							</figure>
						</div>
					</div>
        </section>
				<div class="mb8 mb3_sp">
					<?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
				</div>
				<section>
					<h5 class="mt3">■関連記事</h5>
          <div class="u-photolist__row mt2">
						<?php
							$exceptcnt_id = $content['contents_id'];
							echo show_category_photoListalsok("alsok-other",$exceptcnt_id);
						?>
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
