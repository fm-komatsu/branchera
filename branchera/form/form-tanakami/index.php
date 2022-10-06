<?php
//base
$flp_check_redirect = true;
include ("../../function.php");
$title  = '「たなかみ米」販売価格5％OFFのお申込み';
$pageTtl = '「たなかみ米」販売価格5％OFFのお申込み';

//csrf
include($inc_path.'/form/inc/csrf-set-token.php');

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="inputForm form single membersOnly";

//htmlHeader
include($inc_path.'/form/inc/head.php');
include($inc_path.'/form/inc/header.php');
include($inc_path."/lib/functions/sso_login_re.php");
?>

<main id="main">
	<article>
		<header class="MainHead">
			<div class="MainHead-inner">
				<p class="MainHead-sub">会員さま特典</p>
				<h1 class="MainHead-ttl"><?php echo $title ?></h1>
			</div>
		</header>
		<div id="container">
			<div id="cont">
				<?php include ($inc_path."/form/inc/u-formflow.php") ?>
				<p>※本サービスは「住まいレージ」対象商品ではございません。スマイル（ポイント）はご利用いただけませんのでご注意ください。</p>
				<?php include ($inc_path."/form/inc/u-req.php") ?>
				<form method="POST" action="./confirm.php">
					<input type="hidden" name="token" value="<?php echo $token; ?>">
					<?php include ($inc_path."/form/inc/mypage-member-info.php") ?>
					<hr>
					<?php include ($inc_path."/form/inc/u-address-tanakami.php") ?>
					<hr>
					<h2 class="l-ttl">お申込み内容</h2>
					<div class="label-inner inputRadio-row">
						<p class="info">1つのみお選びください</p>
						<label for="rice-5kg" class="inputRadio-label-l">
							<input type="radio" name="order" id="rice-5kg" class="inputRadio-item" value="たなかみ米 5kg　2,754円→2,616円（税込）+ 送料770円">
							<p>たなかみ米 5kg　2,754円→2,616円（税込）+ 送料770円</p>
						</label>
						<label for="rice-10kg" class="inputRadio-label-l">
							<input type="radio" name="order" id="rice-10kg" class="inputRadio-item" value="たなかみ米10kg　5,076円→4,822円（税込）+ 送料880円">
							<p>たなかみ米10kg　5,076円→4,822円（税込）+ 送料880円</p>
						</label>
						<p class="warning required">どれか1つをお選びください</p>
						<small class="u-small u-color__red">
							※こちらでご注文は確定いたしません。長谷工あんしんデリ担当者からの確認連絡を持ちましてご注文確定とさせていただきます。<br>
							※代金の支払い方法につきまして、商品の到着後14日以内に商品に同封されたお支払用紙にてお支払いをお願いしております。（商品代に送料を合算しての記載となります。）<br>
							※別途送料を頂戴いたします。5㎏ 770円、10㎏ 880円<br>
							※沖縄、北海道・一部離島につきましては、追加料金が発生しますので、お問い合わせください。<br>
							※お客さまのご都合による、商品のキャンセルまたは返品は、商品の特性上お受けできませんのでご了承をお願いします。
						</small>
					</div>
					<hr>
					<h2 class="l-ttl">その他お問い合わせ内容</h2>
					<label for="contact" class="label">
						<h5 class="label-ttl s-ttl">内容</h5>
						<div class="label-inner inputTextarea-row">
							<textarea id="contact" name="contact_memo" placeholder="お問い合わせ内容は、具体的にご記入ください" class="inputTextarea-item"></textarea>
						</div>
					</label>
					<hr>
					<p>ご注文に際しては、「<a href="http://www.haseko.co.jp/ha-delicious/gift/law" target="_blank" class="u-icon">特定商取引に関する法律（特商法）に基づく告知表示。および、お支払い方法・返品交換・宅配料金</a>」をご確認ください。</p>
					<br>
					<?php include ($inc_path."/form/inc/u-policy.php") ?>
					<hr>
					<?php include ($inc_path."/form/inc/u-formssl.php") ?>
				</form>
			</div>
		</div>
	</article>
</main>
<?php include ($inc_path."/form/inc/footer.php") ?>
<?php include ($inc_path."/form/inc/foot.php") ?>
