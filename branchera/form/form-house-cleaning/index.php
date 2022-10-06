<?php
//base
$flp_check_redirect = true;
include("../../function.php");
$title  = 'ハウスクリーニング';
$pageTtl = 'ハウスクリーニング';

//csrf
include($inc_path.'/form/inc/csrf-set-token.php');

//meta
$metaTtl = $pageTtl . '-' . siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url . "/thum/home@2x.png";

//bodyClass
$body_class = "inputForm form single membersOnly";

//htmlHeader
include($inc_path . '/form/inc/head.php');
include($inc_path . '/form/inc/header.php');
include($inc_path . "/lib/functions/sso_login_re.php");
?>
<main id="main">
	<article>

		<header class="MainHead">
			<div class="MainHead-inner">
				<p class="MainHead-sub">メールでのお申込み</p>
				<h1 class="MainHead-ttl"><?php echo $title ?></h1>
			</div>
		</header>

		<div id="container">
			<div id="cont">

				<?php include($inc_path . "/form/inc/u-formflow.php") ?>

				<?php include($inc_path . "/form/inc/u-req.php") ?>

				<form method="POST" action="./confirm.php">
			    <input type="hidden" name="token" value="<?php echo $token; ?>">

					<?php include($inc_path . "/form/inc/mypage-member-info-with-point.php") ?>

					<div class="label req">
						<h5 class="s-ttl label-ttl">ご希望メニュー</h5>
						<div class="label-inner">
							<p>ハウスクリーニング</p>
							<input type="hidden" name="menu" value="ハウスクリーニング">
						</div>
					</div>

					<hr>

					<h3 class="l-ttl">スマイル利用希望</h3>

					<div class="label req error">
						<h5 class="label-ttl s-ttl">スマイル利用希望の有無</h5>
						<div class="label-inner inputRadio-row">
							<p class="info">1つのみお選びください</p>
							<label for="box-1" class="inputRadio-label">
								<input type="radio" name="smile" id="box-1" class="inputRadio-item" value="有">
								<p>有</p>
							</label>
							<label for="box-2" class="inputRadio-label">
								<input type="radio" name="smile" id="box-2" class="inputRadio-item" value="無">
								<p>無</p>
							</label>
							<p class="warning required">どれか1つお選びください</p>
						</div>
					</div>

					<label for="smilePoint" class="label req error">
						<h5 class="label-ttl s-ttl">利用額</h5>
						<div class="label-inner_house-coating-smile">
							<input type="text" autocomplete="name" id="smilePoint" name="smilePoint" class="inputText__s" placeholder="0"><span>,000&nbsp;スマイル &nbsp;</span>
							<p class="warning unchecked-smile-1">利用額をご入力ください</p>
							<p class="warning unchecked-smile-short">保有スマイル数の上限を超えています</p>
						</div>
						<small class="u-small">※1,000スマイル単位となります。</small>
					</label>

					<hr>

					<h2 class="l-ttl">ご希望内容</h2>

					<label for="contact_memo" class="label">
						<h5 class="label-ttl s-ttl">内容</h5>
						<div class="label-inner inputTextarea-row">
							<textarea id="contact_memo" name="contact_memo" placeholder="ご希望内容をご記入ください" class="inputTextarea-item"></textarea>
						</div>
					</label>

					<label for="flyer" class="label">
						<h5 class="label-ttl s-ttl">ご覧になったチラシ番号</h5>
						<div class="label-inner inputTextarea-row">
							<input type="text" id="flyer" name="flyer" class="input__small" placeholder="0-00000">
						</div>
						<small class="u-small">※チラシをご覧になってお問い合わせいただいた場合は、左上のチラシ番号をご記入ください。</small>
					</label>

					<div class="label">
						<h5 class="label-ttl s-ttl">建物形態</h5>
						<div class="label-inner inputRadio-row">
							<p class="info">1つのみお選びください</p>
							<label for="box-3" class="inputRadio-label">
								<input type="radio" name="building_type" id="box-3" class="inputRadio-item" value="マンション等集合住宅">
								<p>マンション等集合住宅</p>
							</label>
							<label for="box-4" class="inputRadio-label">
								<input type="radio" name="building_type" id="box-4" class="inputRadio-item" value="戸建て">
								<p>戸建て</p>
							</label>
						</div>
					</div>

					<label for="building_name" class="label">
						<h5 class="label-ttl s-ttl">お住まいの建物（マンション）名</h5>
						<div class="label-inner inputTextarea-row">
							<input type="text" id="building_name" name="building_name" class="" placeholder="長谷工三田マンション">
						</div>
					</label>
					<hr>
					<p>　※担当者または協力会社より、電話にて、改めて内容確認の連絡をさせていただきます。</p>
					<hr>
					<?php include($inc_path . "/form/inc/u-policy.php") ?>
					<hr>

					<?php include($inc_path . "/form/inc/u-formssl.php") ?>

				</form>

			</div>
		</div>
	</article>
</main>
<?php include($inc_path . "/form/inc/footer.php") ?>
<?php include($inc_path . "/form/inc/foot.php") ?>
