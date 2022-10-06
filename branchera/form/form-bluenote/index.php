<?php
//base
$flp_check_redirect = true;
include ("../../function.php");
$title  = 'ブルーノートグループ特典のお申込み';
$pageTtl = 'ブルーノートグループ特典のお申込み';

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
				<?php include ($inc_path."/form/inc/u-req.php") ?>

				<form method="POST" action="./confirm.php">
					<input type="hidden" name="token" value="<?php echo $token; ?>">

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

					<h3 class="l-ttl">お申込み</h3>
					<p>以下リンク先より各店舗のスケジュール、また各ステージの注意事項を確認の上、お申込み内容を記入してください。</p>
					<small class="u-small">※当特典は、自由席エリアのみご利用となります。予めご了承ください。</small>
					<ul class="u-assist u-list">
						<li><a href="https://reserve.bluenote.co.jp/reserve/schedule/" target="_blank" class="u-icon">ブルーノート東京　スケジュール</a></li>
						<li><a href="http://www.cottonclubjapan.co.jp/jp/schedule/" target="_blank" class="u-icon">コットンクラブ　スケジュール</a></li>
					</ul>
					<div class="label req error">
						<h5 class="label-ttl s-ttl">店舗</h5>
						<div class="label-inner inputRadio-row">
							<p class="info">1つのみお選びください</p>
							<label for="place-1" class="inputRadio-label kasikosh-radio">
								<input type="radio" name="place" id="place-1" class="inputRadio-item" value="ブルーノート東京">
								<div>
									<h5>ブルーノート東京</h5>
									<p>ミュージックチャージ1,000円（税込）OFF</p>
								</div>
							</label>
							<label for="place-3" class="inputRadio-label  kasikosh-radio">
								<input type="radio" name="place" id="place-3" class="inputRadio-item" value="コットンクラブ">
								<div>
									<h5>コットンクラブ</h5>
									<p>ミュージックチャージ1,000円（税込）OFF</p>
								</div>
							</label>
							<p class="warning required">どれか1つお選びください</p>
						</div>
					</div>
					<label for="order" class="label order req error">
						<h5 class="label-ttl s-ttl">公演日</h5>
						<div class="label-inner inputYearMonthDay-row">
							<input type="text" id="order-year" name="order-year" class="" placeholder="">
							<span>年</span>
							<select id="order-month" name="order-month" class="inputYearMonthDay-label">
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
							<select id="order-day" name="order-day" class="inputYearMonthDay-label">
								<option value="" >お選びください</option>
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
							<p class="warning number" data-validate-target="order-year">年を数字でご入力ください</p>
							<p class="warning required" data-validate-target="order-year">年をご入力ください</p>
							<p class="warning required" data-validate-target="order-month">月をお選びください</p>
							<p class="warning required" data-validate-target="order-day">日をお選びください</p>
						</div>
					</label>
					<label for="order-name" class="label order-name">
						<h5 class="label-ttl s-ttl">公演名</h5>
						<div class="label-inner">
							<input type="text" id="order-name" name="order-name" class="" placeholder="">
						</div>
					</label>
					<label for="order" class="label order req error">
						<h5 class="label-ttl s-ttl">1st / 2nd</h5>
						<div class="label-inner inputRadio-row">
							<p class="info">1つのみお選びください</p>
							<label for="when1" class="inputRadio-label">
								<input type="radio" name="order-when" id="when1" class="inputRadio-item" value="1st">
								<p>1st</p>
							</label>
							<label for="when2" class="inputRadio-label">
								<input type="radio" name="order-when" id="when2" class="inputRadio-item" value="2nd">
								<p>2nd</p>
							</label>
							<p class="warning required">どれか1つをお選びください</p>
						</div>
					</label>
					<label for="order" class="label order req error">
						<h5 class="label-ttl s-ttl">人数（本人含む）</h5>
						<div class="label-inner">
							<select id="order-amount" name="order-amount">
								<option value="">お選びください</option>
								<option value="1人">1人</option>
								<option value="2人">2人</option>
								<option value="3人">3人</option>
								<option value="4人">4人</option>
							</select>
							<p class="warning required">人数をお選びください</p>
						</div>
					</label>
					 <label for="contact" class="label">
					  <h5 class="label-ttl s-ttl">ご質問等</h5>
					  <div class="label-inner inputTextarea-row">
					    <textarea id="contact" name="contact_memo" placeholder="" class="inputTextarea-item"></textarea>
					  </div>
					</label>
					<hr>
					<div class="assist policy label error">
						<h5 class="s-ttl"><span>個人情報の取り扱いについて</span></h5>
						<p>ご提供いただきましたお客さまの個人情報につきましては、弊社の<a href="http://www.haseko.co.jp/hc/privacy.html" target="_blank">個人情報保護方針</a>に従い利用および管理を行ないます。</p>
						<p class="mb2">
							また、各店舗のプライバシーポリシーをご確認の上応募願います。
							<br>
							<a href="http://www.bluenote.co.jp/jp/privacy/" target="_blank" class="u-icon">ブルーノート東京</a>
							｜
							<a href="http://www.cottonclubjapan.co.jp/jp/privacy/" target="_blank" class="u-icon">コットンクラブ</a>
						</p>
						<label for="policy" class="inputCheckbox-label">
							<input type="checkbox" id="policy" class="inputCheckbox-item">
							<p>上記の内容に同意する</p>
						</label>
						<p class="warning required">個人情報の取り扱いについて同意をしてください</p>
					</div>

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
