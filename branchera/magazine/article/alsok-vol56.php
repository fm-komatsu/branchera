<?php
//base
include( "../../function.php" );
$content = get_id_data( '16003' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン' . $pageTtl . '-' . siteName();
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
        <h3 class="u-ttl__l">「命を助ける」ことの大切さを学ぶ</h3>
        <p class="mb3 mb2_sp">いつどこで巻き込まれるか分からない災害や事故。また日常的に周囲の人が突然倒れてしまう事態に遭遇するかもしれない、そのリスクは大人も子どもも同じことです。今回は、子どもたちが救急救命への意識を高め、人の命を助けることの大切さを学ぶことをテーマに、ALSOKに話を伺いました。</p>
				<p class="mb3">人が突然倒れて心停止した場合、救急車の到着を待つ間にもどんどん生存率が低下していきます。この間、最も有効な対応が「心肺蘇生」と「AED」です。ALSOKが行なっている救急救命の授業は、このふたつの方法の理解とロールプレイが中心となります。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">AEDの設置場所を確認</span></h4>
					<div class="flex between">
						<div class="w50">
							<p>AEDは心停止状態の人に電気ショックを行ない、心臓を正常に戻すための医療機器です。最近ではほとんどの学校に設置されていますが、AEDの存在は知っていても、具体的にどこにあるのか、何に使うのか知らない子どももいます。<br>まずは校内の設置場所を確認し、緊急時にはすぐにAEDを取りに行くことが人命救助の第一歩だと認識させることが大切です。その後AEDを実際に操作してみせ、使い方を学びます。</p>
						</div>
						<figure class="w50">
							<img data-src="<?php echo $img_url; ?>/magazine/alsok/56/alsok56__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/56/alsok56__img01@2x.png"
								alt="<?php echo $pageTtl?>" style="max-width:332px" class="u-img__max u-only__pc">
							<img data-src="<?php echo $img_url; ?>/magazine/alsok/56/alsok56__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/56/alsok56__img01-sp@2x.png"
								alt="<?php echo $pageTtl?>" style="max-width:263px" class="u-img__max u-only__sp center">
						</figure>
					</div>
        </section>
        <section class="u-clearfix mb2">
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">AED到着までは心肺蘇生を</span></h4>
          <p>心肺蘇生は心停止状態の人に対して、そばにいる人がすぐにできる対処法です（手順は下記を参照）。胸骨圧迫を行なうと全身に血液を送り続けることができ、生存率の低下を防ぐことができるのです。</p>
          <div class="u-assist">
						<h5 class="mb1">心肺蘇生法の手順</h5>
            <ol class="u-list__ol_circle-num mt0 mb0">
              <li>周囲の安全確認…救助者が二次被害に遭わないよう安全を確認する</li>
              <li>反応の確認…肩をたたきながら3回ほど呼びかけ、意識の有無を確認する</li>
              <li>助けを呼ぶ…反応がなければ、「大人を呼ぶ」「119番通報」「AED」をお願いする</li>
							<li>呼吸の確認…胸が上下動しているかどうかで、呼吸の有無を確認する（10秒以内に判断）</li>
							<li>胸骨圧迫…胸骨が5cm以上沈み込むくらいの強さで、1分間に100回以上のペースで圧迫する。AEDや救急隊が到着するか、反応が戻るまで続ける。</li>
            </ol>
          </div>
					<div class="flex between">
						<div class="w55 mb3">
							<p>体験した子どもたちからは「胸骨圧迫は簡単そうに見えたけれど、やってみると大変だった」といった感想が寄せられました。知識だけでなくロールプレイで学習することで、<strong>『みんなで協力することで、人を救うことができるんだ』</strong>という実感をもつことも大切なことです。子どもには難しいと考える人もいますが、小学校高学年ともなれば十分に実践できる内容です。実際に小学6年生の男の子が胸骨圧迫で親の命を救った事例もあります。</p>
						</div>
						<figure class="w45">
							<img data-src="<?php echo $img_url; ?>/magazine/alsok/56/alsok56__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/56/alsok56__img02@2x.png"
								alt="心肺蘇生の練習をするこども｜<?php echo $pageTtl?>" style="max-width:257px" class="u-img__max u-only__pc center">
							<img data-src="<?php echo $img_url; ?>/magazine/alsok/56/alsok56__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/56/alsok56__img02-sp@2x.png"
								alt="心肺蘇生の練習をするこども｜<?php echo $pageTtl?>" style="max-width:267px" class="u-img__max u-only__sp center">
						</figure>
					</div>

        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">緊急時、一歩踏み出す勇気を</span></h4>
          <p class="mb3">救急救命について学ぶ中で、<strong>子どもたちは命を救うことの大変さや、何よりも命の大切さ</strong>を自然に感じとります。また<strong>人と人が協力し合い、思いやりの心を持つことが、人の命を救うことにつながる</strong>ことも学んでいきます。<br>人が倒れたとき、「自分にもできることがあるんだ」という使命感を養うことが大切です。緊急のときには、勇気を出して命を救う一歩を踏み出してほしいと思います。マンションの防災訓練などで、AED講習を行なう機会があれば、子どもと一緒に参加するのもいいですね。</p>
        </section>
      </section>
			<div class="mb8 mb3_sp">
				<?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
			</div>
			<section>
				<h5 class="mt3">■関連記事</h5>
				<div class="u-photolist__row mt2">
					<?php
						$exceptcnt_id = $content['contents_id'];
						echo show_category_photoListalsok("alsok-children",$exceptcnt_id);
					?>
				</div>
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
