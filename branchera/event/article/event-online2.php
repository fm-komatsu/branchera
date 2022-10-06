<?php
//base
include ("../../function.php");
$content = get_id_data('4094');
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

//FLP ID
$flpID = '';

//buttom message
// $btnMesage = 'このイベントに応募する';
?>
<main class="main kt4">
	<article class="main__row">
    <?php
    $panAry[] = array("/event/" ,"イベント・キャンペーン");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
    ?>
    <div class="main__wrapper">
			<div>
				<section class="section">
					<div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
						<img src="<?php echo $img_url ?>/event/event-online2/MV_pc@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/event/event-online2/MV_sp.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</div>
					<div class="mb2">
						<h2 class="u-ttl__m u-font__palt">おうちをきれいに使いやすく、収納力もアップさせる！<br class="u-only__pc">見せ方と収納のプロがオンラインイベントで直接指南！</h2>
						<div>
							<p>「きれいに片付けてすっきりしたい！」「収納スペースを増やしたい！」と切望しつつも、なかなか思うようにいかなくて悩んでいませんか？そんなお悩みを解決すべく、ブランシエラクラブではオンラインイベントを開催します！<br>見せ方と収納の双方に精通した「プロが解決！住まいのSOS」でおなじみの大橋わか先生に、リアルタイムで収納についてご指南いただけます。みなさま、ぜひこの機会にご応募ください。</p>
						</div>
					</div>
				</section>
        <section>
					<div class="main-v mb3">
						<img src="<?php echo $img_url ?>/event/event-online2/img01_pc@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/event/event-online2/img01_sp.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</div>
					<div class="u-btn-layout mb4">
						<div class="u-btn-layout__row">
							<a href="<?php echo $base_url; ?>/magazine/article/sumai-sos-vol01.php" class="u-btn-layout__item" data-ga-click="online2_sos">
								<img src="<?php echo $img_url ?>/event/event-online2/btn01_pc@2x.jpg" alt="応募の受付はこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:355px;" loading="lazy">
								<img src="<?php echo $img_url ?>/event/event-online2/btn01_sp.jpg" alt="応募の受付はこちら｜<?php echo $pageTtl ?>" class="lecturer__btn mb2_sp u-img__max u-only__sp" loading="lazy">
							</a>
						</div>
					</div>
				</section>
        </section>
				<section>
					<div class="u-column__2 mb3">
						<div class="u-column__item">
							<h3 class="mb2">
								<img src="<?php echo $img_url ?>/event/event-online2/img02_pc@2x.jpg" alt="収納がうまくいかない原因を解消して実践で収納テクニックを身に付ける！<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
								<img src="<?php echo $img_url ?>/event/event-online2/img02_sp.jpg" alt="収納がうまくいかない原因を解消して実践で収納テクニックを身に付ける！<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
							</h3>
							<p>収納がうまくいかないのはどこかに原因があるはず！イベントではその原因を探り出し、収納のコツをお伝えします。事前にいただいたお悩みや画像などをもとに、大橋先生と一緒に改善点を考えたり、分からないことや困っていることを大橋先生に投げかけたりしながら、おうちの収納テクニックをグレードアップさせましょう！オンラインなので、全国どこからでもご参加いただけます。</p>
							<div class="u-column__item u-only__sp">
								<img src="<?php echo $img_url ?>/event/event-online2/img03_sp.jpg" alt="オンラインイベントのイメージ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
							</div>
            </div>
						<div class="u-column__item u-only__pc">
								<img src="<?php echo $img_url ?>/event/event-online2/img03_pc@2x.jpg" alt="オンラインイベントのイメージ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						</div>
					</div>
				</section>
				<section>
					<h3 class="u-ttl__m">当日のプログラム</h3>
					<div class="event-online2__table">
						<dl>
							<dd class="even">はじまりの挨拶、先生の紹介</dd>
						</dl>
						<dl>
							<dd class="odd">セミナー「整理・整頓・収納の意味を知ろう」、収納方法・グッズのご紹介等</dd>
						</dl>
						<dl>
							<dd class="even">お悩み相談タイム</dd>
						</dl>
						<dl>
							<dd class="odd">終わりの挨拶</dd>
						</dl>
					</div>
				</section>
			</div>
			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table" style="position:relative;">
				<dl>
					<dt>[イベント内容]</dt>
					<dd class="u-font__palt">『オンラインイベント』 自宅のお悩みにその場でプロがお答えします！</dd>
				</dl>
				<dl>
					<dt>[開催日時]</dt>
					<dd>2022年2月19日(土)14:00～15:30</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>100名</dd>
				</dl>
				<dl>
					<dt>[講師]</dt>
					<dd>大橋わか先生(ブランシエラクラブ「プロが解決！住まいのSOS」監修)</dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>参加無料 <br class="u-only__sp">※パソコン、スマートフォン、タブレットなど端末は各自でご用意ください。</dd>
				</dl>
				<dl>
					<dt>[応募方法]</dt>
					<dd>ページ下部のボタンより必要事項をご入力の上、ご応募ください。<br><small class="u-font__small">※ご登録情報のご確認をお願いします。</small></dd>
				</dl>
				<dl>
					<dt>[画像送付方法]</dt>
					<dd>ページ下部のボタンもしくはbrc-info@haseko.co.jpへのメール画像添付にてお悩み画像をご送付ください。<br>※ボタン・URLを押下するとメーラーが起動します。メーラーをご利用でない方は、上記メールアドレス宛に画像のご送付をお願いいたします。</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2021年12月23日（木）～2022年1月23日（日）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>当選された方へ2022年1月25日（火）より、順次イベント開催URLなどの詳細をメールにてご連絡いたします。</dd>
				</dl>
				<dl class="mb2">
					<dt>[ご注意事項]</dt>
					<dd>※長谷工IDをお持ちのご本人さまのみご応募いただけます。<br>※本イベントの参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</dd>
				</dl>
			</div>
			<div class="u-btn-layout mb2">
				<div class="u-btn-layout__row">
					<img src="<?php echo $img_url ?>/event/event-online2/btn02_pc_end@2x.jpg" alt="応募の受付はこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:356px;" loading="lazy">
					<img src="<?php echo $img_url ?>/event/event-online2/btn02_sp_end@2x.jpg" alt="応募の受付はこちら｜<?php echo $pageTtl ?>" class="lecturer__btn mb2_sp u-img__max u-only__sp" loading="lazy">
				</div>
			</div><small class="u-small mb3">※イベントの申し込みには長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
		　</section>
			<div class="u-btn-layout">
				<div class="u-btn-layout__row">
					<img src="<?php echo $img_url ?>/event/event-online2/btn03_pc_end@2x.jpg" alt="画像の送付はこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:355px;" loading="lazy">
		　		<img src="<?php echo $img_url ?>/event/event-online2/btn03_sp_end@2x.jpg" alt="画像の送付はこちら｜<?php echo $pageTtl ?>" class="lecturer__btn mb2_sp u-img__max u-only__sp" loading="lazy">
				</div>
			</div>
		</section>


		</div>
	</article>
</main> <?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?> <?php  include ($inc_path."/lib/inc/footer.php"); ?> <?php  include ($inc_path."/lib/inc/foot.php"); ?>
