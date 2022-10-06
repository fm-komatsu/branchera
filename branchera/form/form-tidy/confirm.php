<?php
//base
$session_check_switch = "0";
include("../../function.php");
$title = "整理収納サービス";
$pageTtl = '【ご入力内容の確認】' . $title;

//csrf
include($inc_path.'/form/inc/csrf-check-token.php');

//meta
$metaTtl = $pageTtl . '-' . siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url . "/thum/home@2x.png";

//bodyClass
$body_class = "confForm form single";

//htmlHeader
include($inc_path . '/form/inc/head.php');
include($inc_path . '/form/inc/header.php');
?>
<main id="main">
	<article>

		<header class="MainHead">
			<div class="MainHead-inner">
				<p class="MainHead-sub">ご入力内容の確認</p>
				<h1 class="MainHead-ttl"><?php echo $title ?></h1>
			</div>
		</header>

		<div id="container">
			<div id="cont">

				<?php include($inc_path . "/form/inc/u-formflow.php") ?>
				<p>下記の項目をご確認の上、「この内容で送信する」ボタンを押してください。</p>
				<hr class="mt1">

				<form method="post" action="./complete.php">
					<?php
					// 任意入力のラジオボタンのため未選択がありうる
					if (!isset($_POST['building_type'])) {
						$_POST['building_type'] = "";
					}
					?>

					<h2 class="l-ttl">お客さまのご登録情報</h2>

					<div class="label">
						<h5 class="s-ttl label-ttl">長谷工ID</h5>
						<div class="label-inner">
							<p><?php echo $_POST["hasekoid"]; ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="s-ttl label-ttl">スマイル保有額</h5>
						<div class="label-inner">
							<p><?php echo $_POST["pnt_value"]; ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="s-ttl label-ttl">お名前</h5>
						<div class="label-inner">
							<p><?php echo $_POST["name"]; ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="s-ttl label-ttl">フリガナ</h5>
						<div class="label-inner">
							<p><?php echo $_POST["name2"]; ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="s-ttl label-ttl">ご住所</h5>
						<div class="label-inner">
							<p>〒<?php echo $_POST["postal-code"]; ?></p>
							<p><?php echo $_POST["address-level1"]; ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="s-ttl label-ttl">電話番号</h5>
						<div class="label-inner">
							<p>固定：<?php echo $_POST["tel"]; ?></p>
							<p>携帯：<?php echo $_POST["tel2"]; ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="s-ttl label-ttl">メールアドレス</h5>
						<div class="label-inner">
							<p>PC：<?php echo $_POST["email"]; ?></p>
							<p>携帯：<?php echo $_POST["email2"]; ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="s-ttl label-ttl">ご希望メニュー</h5>
						<div class="label-inner">
							<p><?php echo $_POST["menu"]; ?></p>
						</div>
					</div>
					<hr>


					<h3 class="l-ttl">スマイル利用希望</h3>

					<div class="label">
						<h5 class="label-ttl s-ttl">スマイル利用希望の有無</h5>
						<div class="label-inner">
							<p><?php echo $_POST["smile"]; ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="label-ttl s-ttl">利用額</h5>
						<div class="label-inner">
							<p><?php echo $_POST["smilePoint"]; ?>,000スマイル</p>
						</div>
					</div>

					<hr>

					<h2 class="l-ttl">ご希望内容</h2>
					<div class="label">
						<h5 class="label-ttl s-ttl">ご希望のサービス</h5>
						<div class="label-inner inputTextarea-row">
							<p><?php echo $_POST["service"]; ?></p>
						</div>
					</div>

					<div class="label">
						<h5 class="label-ttl s-ttl">ご相談内容</h5>
						<div class="label-inner inputTextarea-row">
							<p><?php echo $_POST["details"]; ?></p>
						</div>
					</div>

					<div class="label">
						<h5 class="label-ttl s-ttl">建物形態</h5>
						<div class="label-inner inputTextarea-row">
							<p><?php echo $_POST["building_type"]; ?></p>
						</div>
					</div>

					<div class="label">
						<h5 class="label-ttl s-ttl">お住まいの建物（マンション）名・部屋番号</h5>
						<div class="label-inner inputTextarea-row">
							<p><?php echo $_POST["building_name_no"]; ?></p>
						</div>
					</div>

					<div class="label">
						<h5 class="label-ttl s-ttl">連絡の取れる時間帯</h5>
						<div class="label-inner inputCheckbox-row">
							<?php
							$time_string = "";
							foreach($_POST["time"] as $time){
								$time_string .= $time . "\n";
							?>
							<p><?php echo $time; ?></p>
							<?php } ?>  </div>
					</div>
					<input type="hidden" name="time_string" value="<?php echo $time_string; ?>">

					<div class="label">
						<h5 class="label-ttl s-ttl">訪問希望日</h5>
						<div class="label-inner">
							<p><?php echo h($_POST["date"]); ?></p>
						</div>
					</div>

					<div class="label">
						<h5 class="label-ttl s-ttl">ご覧になったチラシ番号</h5>
						<div class="label-inner inputTextarea-row">
							<p><?php echo $_POST["flyer"]; ?></p>
						</div>
					</div>

					<div class="label">
						<h5 class="label-ttl s-ttl">お問い合わせ内容（お悩み・作業希望 される場所など）</h5>
						<div class="label-inner inputTextarea-row">
							<p><?php echo $_POST["contact_memo"]; ?></p>
						</div>
					</div>

					<hr>
					<p>※担当者または協力会社より、電話にて、改めて内容確認の連絡をさせていただきます。</p>
					<hr>
					<div class="formBtn">
						<button type='submit' alt="send" class="formBtn-send ok"><span>この内容で送信する</span></button>
					</div>
					<?php
					include($inc_path . "/form/inc/input-hidden.php");
					?>
				</form>

			</div>
		</div>
	</article>
</main>

<?php include($inc_path . "/form/inc/footer.php") ?>
<?php include($inc_path . "/form/inc/foot.php") ?>