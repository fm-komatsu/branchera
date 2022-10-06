<?php
//base
$flp_check_redirect = true;
include("../../function.php");
$title  = '整理収納サービス';
$pageTtl = '整理収納サービス';

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
							<p>整理収納サービス</p>
							<input type="hidden" name="menu" value="整理収納サービス">
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
						</div>
						<small class="u-small">※1000スマイル単位となります。</small>
					</label>

					<hr>

					<h3 class="l-ttl">ご希望内容</h3>
					<div class="label req error">
						<h5 class="label-ttl s-ttl">ご希望のサービス</h5>
						<div class="label-inner inputRadio-row">
							<p class="info">1つのみお選びください</p>
							<label for="box-3" class="inputRadio-label">
								<input type="radio" name="service" id="box-3" class="inputRadio-item" value="1か所片付けプラン">
								<p>1か所片付けプラン（4時間）<br>1名訪問：26,400円<br>（税込／交通費別・材料費別）</p>
							</label>
							<label for="box-4" class="inputRadio-label">
								<input type="radio" name="service" id="box-4" class="inputRadio-item" value="しっかり片付けプラン">
								<p style="white-space: nowrap;">しっかり片付けプラン（4時間）<br>2名訪問：48,400円<br>（税込／交通費別・材料費別）</p>
							</label>
							<p class="warning required">どれか1つお選びください</p>
						</div>
					</div>
					<div class="label req error">
						<h5 class="label-ttl s-ttl">ご相談内容</h5>
						<div class="label-inner inputRadio-row">
							<p class="info">1つのみお選びください</p>
							<label for="box-5" class="inputRadio-label-l">
								<input type="radio" name="details" id="box-5" class="inputRadio-item" value="初めてのお申し込み">
								<p>初めてのお申し込み</p>
							</label>
							<label for="box-6" class="inputRadio-label-l">
								<input type="radio" name="details" id="box-6" class="inputRadio-item" value="2回目以降のお申し込み">
								<p>2回目以降のお申し込み</p>
							</label>
							<label for="box-7" class="inputRadio-label-l">
								<input type="radio" name="details" id="box-7" class="inputRadio-item" value="その他のお問い合わせ">
								<p>その他のお問い合わせ</p>
							</label>
							<p class="warning required">どれか1つお選びください</p>
						</div>
					</div>
					<div class="label req error">
						<h5 class="label-ttl s-ttl">建物形態</h5>
						<div class="label-inner inputRadio-row">
							<p class="info">1つのみお選びください</p>
							<label for="box-8" class="inputRadio-label">
								<input type="radio" name="building_type" id="box-8" class="inputRadio-item" value="マンション等集合住宅">
								<p>マンション等集合住宅</p>
							</label>
							<label for="box-9" class="inputRadio-label">
								<input type="radio" name="building_type" id="box-9" class="inputRadio-item" value="戸建て">
								<p>戸建て</p>
							</label>
							<p class="warning required">どれか1つお選びください</p>
						</div>
					</div>

					<hr>

					<label for="building_name_no" class="label req error">
						<h5 class="label-ttl s-ttl">お住まいの建物（マンション）名・部屋番号</h5>
						<div class="label-inner inputTextarea-row">
							<input type="text" name="building_name_no" id="building_name_no" placeholder="長谷工三田マンション○○○号室" class="">
							<p class="warning required">お住まいの建物（マンション）名・部屋番号をご記入ください。戸建ての場合は戸建てとご入力ください。</p>
						</div>
							<small class="u-small">※サービス対象エリアは関東エリア（東京都・神奈川県・埼玉県・千葉県・栃木県・茨城県）となります。</small>
							<small class="u-small">※戸建ての場合は戸建てとご入力ください。</small>
					</label>

					<hr>

					<label for="time[]" class="label">
						<h5 class="label-ttl s-ttl">連絡の取れる時間帯</h5>
						<div class="label-inner inputCheckbox-row">
							<p class="info">複数選択可</p>
							<label for="time-1" class="inputCheckbox-label-l">
								<input type="checkbox" name="time[]" id="time-1" class="inputCheckbox-item" value="9時〜12時の間">
								<p>9時〜12時の間</p>
							</label>
							<label for="time-2" class="inputCheckbox-label-l">
								<input type="checkbox" name="time[]" id="time-2" class="inputCheckbox-item" value="12時〜14時の間">
								<p>12時〜14時の間</p>
							</label>
							<label for="time-3" class="inputCheckbox-label-l">
								<input type="checkbox" name="time[]" id="time-3" class="inputCheckbox-item" value="14時〜16時の間">
								<p>14時〜16時の間</p>
							</label>
							<label for="time-4" class="inputCheckbox-label-l">
								<input type="checkbox" name="time[]" id="time-4" class="inputCheckbox-item" value="16時〜18時の間">
								<p>16時〜18時の間</p>
							</label>
							<label for="time-5" class="inputCheckbox-label-l">
								<input type="checkbox" name="time[]" id="time-5" class="inputCheckbox-item" value="18時〜20時の間">
								<p>18時〜20時の間</p>
							</label>
						</div>
						<small class="u-small">※本メール送信日を含め3営業日以内を目安にお電話いたします。</small>
					</label>

					<hr>

					<label for="date" class="label">
						<h5 class="label-ttl s-ttl">訪問希望日</h5>
						<div class="label-inner inputTextarea-row">
							<textarea id="date" name="date" placeholder="日時・曜日を記載いただくと、スムーズにご案内することができます。" class="inputTextarea-item"></textarea>
						</div>
					</label>

					<hr>

					<label for="flyer" class="label">
						<h5 class="label-ttl s-ttl">ご覧になったチラシ番号</h5>
						<div class="label-inner inputTextarea-row">
							<input type="text" id="flyer" name="flyer" class="input__small" placeholder="0-00000">
						</div>
						<small class="u-small">※チラシをご覧になってお問い合わせいただいた場合は、左上のチラシ番号をご記入ください。</small>
					</label>

					<label for="contact_memo" class="label">
						<h5 class="label-ttl s-ttl">お問い合わせ内容（お悩み・作業希望 される場所など）</h5>
						<div class="label-inner inputTextarea-row">
							<textarea id="contact_memo" name="contact_memo" placeholder="ご希望内容をご記入ください" class="inputTextarea-item"></textarea>
						</div>
					</label>

					<hr>
					<p>※担当者または協力会社より、電話にて、改めて内容確認の連絡をさせていただきます。</p>
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