<?php
//base
$flp_check_redirect = true;
include ("../../function.php");
$title  = 'アート引越センター 見積り依頼';
$pageTtl = 'アート引越センター 見積り依頼';

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

				<p>お申込みいただいた後、原則ご訪問でのお見積りとなっております。
					<br>この画面での料金の算出はできませんのでご了承ください。
				</p>

				<?php include ($inc_path."/form/inc/u-req.php") ?>

				<form method="POST" action="./confirm.php">
					<input type="hidden" name="token" value="<?php echo $token; ?>">

					<div class="assist policy label error">
						<h5 class="s-ttl"><span>個人情報の取り扱いについて</span></h5>
						<p>お問い合わせフォームに入力されたお客さまの個人情報は、アート引越センター株式会社に送信されます。<br>個人情報の取り扱いと利用目的は<a target="_blank" href="http://www.the0123.com/contact/privacy_policy.html">アート引越センター株式会社プライバシーポリシー</a>をご一読いただき、内容に同意いただいた上でお申込みください。</p>
						<label for="policy" class="inputCheckbox-label">
							<input type="checkbox" id="policy" class="inputCheckbox-item">
							<p>上記の内容に同意する</p>
						</label>
						<p class="warning required">アートグループ プライバシーポリシーについて同意をしてください</p>
					</div>

					<hr>

					<h3 class="l-ttl">お引越し予定日/お見積り訪問希望日</h3>

					<label for="mitsumori" class="label hikkoshi req error">
						<h5 class="label-ttl s-ttl">お引越し予定日</h5>
						<div class="label-inner inputYearMonthDay-row">
							<input type="text" id="hikkoshi-year" name="hikkoshi-year" class="" placeholder="">
							<span>年</span>
							<select id="hikkoshi-month" name="hikkoshi-month" class="inputYearMonthDay-label">
								<option value="" >お選びください</option>
								<?php
								//月を出力
								for($i=1;$i<=12;$i++){
									$option_month = $i . "月";
									?>
									<option value="<?php echo $option_month;?>" ><?php echo $option_month;?></option>
									<?php
								}
								?>
							</select>
							<select id="hikkoshi-day" name="hikkoshi-day" class="inputYearMonthDay-label">
								<option value="" >お選びください</option>
								<option value="未定" >未定</option>
								<option value="上旬" >上旬</option>
								<option value="中旬" >中旬</option>
								<option value="下旬" >下旬</option>
								<?php
								//日付出力
								for($i=1;$i<32;$i++){
									$option_date = $i . "日";
									?>
									<option value="<?php echo $option_date;?>" ><?php echo $option_date;?></option>
									<?php
								}
								?>
							</select>
							<p class="warning number" data-validate-target="hikkoshi-year">お引越し予定年を数字でご入力ください</p>
							<p class="warning required" data-validate-target="hikkoshi-year">お引越し予定年をご入力ください</p>
							<p class="warning required" data-validate-target="hikkoshi-month">お引越し予定月をお選びください</p>
							<p class="warning required" data-validate-target="hikkoshi-day">お引越し予定日をお選びください</p>
						</div>
					</label>
					<label for="mitsumori" class="label mitsumori req error">
						<h5 class="label-ttl s-ttl">お見積り訪問希望日</h5>
						<div class="label-inner inputYearMonthDay-row">
							<input type="text" id="mitsumori-year" name="mitsumori-year" class="" placeholder="">
							<span>年</span>
							<select id="mitsumori-month" name="mitsumori-month" class="inputYearMonthDay-label">
								<option value="" >お選びください</option>
								<?php
								//月を出力
								for($i=1;$i<=12;$i++){
									$option_month = $i . "月";
									?>
									<option value="<?php echo $option_month;?>" ><?php echo $option_month;?></option>
									<?php
								}
								?>
							</select>
							<select id="mitsumori-day" name="mitsumori-day" class="inputYearMonthDay-label">
								<option value="" >お選びください</option>
								<option value="未定" >未定</option>
								<option value="上旬" >上旬</option>
								<option value="中旬" >中旬</option>
								<option value="下旬" >下旬</option>
								<?php
								//日付出力
								for($i=1;$i<32;$i++){
									$option_date = $i . "日";
									?>
									<option value="<?php echo $option_date;?>" ><?php echo $option_date;?></option>
									<?php
								}
								?>
							</select>
							<p class="warning number" data-validate-target="mitsumori-year">お見積り訪問希望年を数字でご入力ください</p>
							<p class="warning required" data-validate-target="mitsumori-year">お見積り訪問希望年をお選びください</p>
							<p class="warning required" data-validate-target="mitsumori-month">お見積り訪問希望月をお選びください</p>
							<p class="warning required" data-validate-target="mitsumori-day">お見積り訪問希望日をお選びください</p>
						</div>
					</label>
					<hr>
					<h3 class="l-ttl">お引越しの内容</h3>
					<div class="label req error">
						<h5 class="label-ttl s-ttl">お引越しの内容</h5>
						<div class="label-inner inputRadio-row">
							<p class="info">1つのみお選びください</p>
							<label for="box-1" class="inputRadio-label">
								<input type="radio" name="hikkoshi-type" id="box-1" class="inputRadio-item" value="ご単身でのお引越し">
								<p>ご単身でのお引越し</p>
							</label>
							<label for="box-2" class="inputRadio-label">
								<input type="radio" name="hikkoshi-type" id="box-2" class="inputRadio-item" value="ご家族でのお引越し">
								<p>ご家族でのお引越し</p>
							</label>
							<p class="warning required">どれか1つお選びください</p>
						</div>
					</div>

					<label for="mitsumori" class="label mitsumori req error">
						<h5 class="label-ttl s-ttl">お引越しされる人数	</h5>
						<div class="label-inner">
							<select id="hikkoshi-amount" name="hikkoshi-amount">
								<option value="">お選びください</option>
								<option value="1人">1人</option>
								<option value="2人">2人</option>
								<option value="3人">3人</option>
								<option value="4人">4人</option>
								<option value="5人">5人</option>
								<option value="6人">6人</option>
								<option value="7人">7人</option>
								<option value="8人">8人</option>
								<option value="9人">9人</option>
								<option value="10人以上">10人以上</option>
							</select>
							<p class="warning required">お引越しされる人数をお選びください</p>
						</div>
					</label>

					<label for="mitsumori" class="label mitsumori req error">
						<h5 class="label-ttl s-ttl">現在のお部屋の間取り</h5>
						<div class="label-inner">
							<select id="hikkoshi-madori" name="hikkoshi-madori">
								<option value="">お選びください</option>
								<option>1R</option>
								<option>1K</option>
								<option>1DK</option>
								<option>1LDK</option>
								<option>2K</option>
								<option>2DK</option>
								<option>2LDK</option>
								<option>3K</option>
								<option>3DK</option>
								<option>3LDK</option>
								<option>4K</option>
								<option>4DK</option>
								<option>4LDK</option>
								<option>5K以上</option>
								<option>その他</option>
							</select>
							<p class="warning required">現在のお部屋の間取りをお選びください</p>
						</div>
					</label>
					<hr>

					<h3 class="l-ttl">お客さまのご登録情報をご確認ください</h3>
					<p>※ご登録情報の変更は、<a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>よりお願いいたします。</p>

					<div class="label req error">
						<h5 class="s-ttl label-ttl">長谷工ID</h5>
						<div class="label-inner">
							<p><?php echo $IDinfo["member_card_no"]; ?></p>
							<input type="hidden" name="hasekoid" value="<?php echo $IDinfo["member_card_no"]; ?>">
						</div>
					</div>
					<div class="label req error">
					  <h5 class="s-ttl label-ttl">お名前</h5>
					  <div class="label-inner">
					    <p><?php echo $IDinfo["last_name"]; ?>　<?php echo $IDinfo["first_name"]; ?></p>
							<input type="hidden" id="name" name="name" value="<?php echo $IDinfo["last_name"]; ?> <?php echo $IDinfo["first_name"]; ?>">
							<input type="hidden" id="name-sei" name="name-sei" value="<?php echo $IDinfo["last_name"]; ?>">
							<input type="hidden" id="name-mei" name="name-mei" value="<?php echo $IDinfo["first_name"]; ?>">
							<p class="warning required" data-validate-target="name-sei"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>より名前（姓）を入力ください</p>
							<p class="warning required" data-validate-target="name-mei"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>より名前（名）を入力ください</p>
					  </div>
					</div>
					<div class="label req error">
					  <h5 class="s-ttl label-ttl">フリガナ</h5>
					  <div class="label-inner">
					    <p><?php echo $IDinfo["last_kananame"]; ?>　<?php echo $IDinfo["first_kananame"]; ?></p>
					    <input type="hidden" name="name2" value="<?php echo $IDinfo["last_kananame"]; ?> <?php echo $IDinfo["first_kananame"]; ?>">
							<input type="hidden" id="name-sei-kana" name="name-sei-kana" value="<?php echo $IDinfo["last_kananame"]; ?>">
							<input type="hidden" id="name-mei-kana" name="name-mei-kana" value="<?php echo $IDinfo["first_kananame"]; ?>">
							<p class="warning required" data-validate-target="name-sei-kana"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>よりフリガナ（セイ）を入力ください</p>
							<p class="warning required" data-validate-target="name-mei-kana"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>よりフリガナ（メイ）を入力ください</p>
					  </div>
					</div>
					<div class="label req error">
					  <h5 class="s-ttl label-ttl">電話番号</h5>
					  <div class="label-inner">
					    <p>固定：<?php echo $IDinfo["home_tel"]; ?></p>
					    <p>携帯：<?php echo $IDinfo["mb_tel"]; ?></p>
					    <input type="hidden" id="tel" name="tel" value="<?php echo $IDinfo["home_tel"]; ?>">
							<input type="hidden" id="tel2" name="tel2" value="<?php echo $IDinfo["mb_tel"]; ?>">
							<input type="hidden" id="tel-dummy" name="tel-dummy" value="<?php echo $IDinfo["home_tel"]; ?><?php echo $IDinfo["mb_tel"]; ?>">
							<p class="warning required" data-validate-target="tel-dummy"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>より電話番号を入力ください</p>
					  </div>
					</div>
					<div class="label req error">
						<h5 class="s-ttl label-ttl">メールアドレス</h5>
						<div class="label-inner">
							<p>PC：<?php echo $IDinfo["mail_add_pc"]; ?></p>
							<p>携帯：<?php echo $IDinfo["mail_add_mb"]; ?></p>
							<input type="hidden" name="email" value="<?php echo $IDinfo["mail_add_pc"]; ?>">
							<input type="hidden" name="email2" value="<?php echo $IDinfo["mail_add_mb"]; ?>">
							<input type="hidden" id="email_dummy" name="email_dummy" value="<?php echo $IDinfo["mail_add_pc"]; ?><?php echo $IDinfo["mail_add_mb"]; ?>">
							<p class="warning required" data-validate-target="email_dummy"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>よりメールアドレスを入力ください</p>
						</div>
					</div>
					<hr>

					<h3 class="l-ttl">現ご住所</h3>
					<label for="postal-code" class="label req error">
						<h5 class="label-ttl s-ttl">郵便番号</h5>
						<div class="label-inner">
							<p>〒<?php echo $IDinfo["postal_cd"]; ?></p>
					    <input type="hidden" id="postal-code" name="postal-code" value="<?php echo $IDinfo["postal_cd"]; ?>">
							<p class="warning required" data-validate-target="postal-code"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>より郵便番号を入力ください</p>
						</div>
					</label>

					<label for="address" class="label req error">
						<h5 class="label-ttl s-ttl">現ご住所</h5>
						<div class="label-inner">
					    <p><?php echo $IDinfo["state"]; ?><?php echo $IDinfo["city"]; ?><?php echo $IDinfo["address"]; ?></p>
					    <input type="hidden" id="address-level1" name="address-level1" value="<?php echo $IDinfo["state"]; ?><?php echo $IDinfo["city"]; ?><?php echo $IDinfo["address"]; ?>">
							<p class="warning required" data-validate-target="address-level1"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>より住所情報を入力ください</p>
						</div>
					</label>

					<hr>

					<h3 class="l-ttl">お引越し先ご住所</h3>
					<p>※おわかりいただいているところまでで結構です。</p>

					<label for="new-postal-code" class="label">
						<h5 class="label-ttl s-ttl">郵便番号</h5>
						<div class="label-inner">
							<input type="text" id="new-postal-code" name="new-postal-code" class="" placeholder="例：000-0000">
						</div>
					</label>
					<label for="new-address" class="label">
						<h5 class="label-ttl s-ttl">新ご住所</h5>
						<div class="label-inner">
							<input type="text" id="new-address" name="new-address" class="" placeholder="例：東京都港区芝２丁目３２−１">
						</div>
					</label>

					<hr>

					<h3 class="l-ttl">担当者からの連絡方法をご選択ください</h3>

					<div class="label req error">
						<h5 class="label-ttl s-ttl">ご希望の連絡方法</h5>
						<div class="label-inner inputRadio-row">
							<p class="info">1つのみお選びください</p>
							<label for="how1" class="inputRadio-label">
								<input type="radio" name="order_how" id="how1" class="inputRadio-item" value="固定電話">
								<p>固定電話</p>
							</label>
							<label for="how2" class="inputRadio-label">
								<input type="radio" name="order_how" id="how2" class="inputRadio-item" value="携帯電話">
								<p>携帯電話</p>
							</label>
							<label for="how3" class="inputRadio-label">
								<input type="radio" name="order_how" id="how3" class="inputRadio-item" value="メール">
								<p>メール</p>
							</label>
							<label for="how4" class="inputRadio-label">
								<input type="radio" name="order_how" id="how4" class="inputRadio-item" value="どれでも">
								<p>どれでも</p>
							</label>
							<p class="warning required">どれか1つをお選びください</p>
							<p class="warning custom-name-tel-how1">固定電話が入力されていません</p>
							<p class="warning custom-name-tel2-how2">携帯電話が入力されていません</p>
							<p class="warning custom-name-email_dummy-how3">メールアドレスが入力されていません</p>
						</div>
					</div>

					<hr>

					<h3 class="l-ttl">ご要望・ご伝達事項など</h2>
						<p>お見積りに関するご要望や、お見積りに当たってご伝達いただくことなどありましたらご記入ください。</p>
						<label for="contact" class="label error">
							<h5 class="label-ttl s-ttl">内容</h5>
							<div class="label-inner inputTextarea-row">
								<textarea id="contact" name="contact_memo" placeholder="" class="inputTextarea-item"></textarea>
							</div>
						</label>

						<hr>

						<div class="formBtn label error">
							<button type='submit' alt="send" class="formBtn-submit"><span>入力内容を確認する</span></button>
							<p class="warning submitbutton error">未入力項目か、入力内容に誤りがあります</p>
						</div>

						<hr>

						<?php include ($inc_path."/form/inc/u-formssl.php") ?>

					</form>

				</div>
			</div>
		</article>
	</main>
	<?php include ($inc_path."/form/inc/footer.php") ?>
	<?php include ($inc_path."/form/inc/foot.php") ?>
