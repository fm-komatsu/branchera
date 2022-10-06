<?php
//base
$flp_check_redirect = true;
include ("../../function.php");
$title  = 'トレファク引越 見積り依頼';
$pageTtl = 'トレファク引越 見積り依頼';

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

					<div class="assist policy label error">
						<h5 class="s-ttl"><span>個人情報の取り扱いについて</span></h5>
						<p>お問い合わせフォームに入力されたお客さまの個人情報は、株式会社トレジャー・ファクトリーに送信されます。<br>個人情報の取り扱いについては、<a target="_blank" href="https://www.treasure-f.com/privacy/">株式会社トレジャー・ファクトリー個人情報保護方針</a>をご一読いただき、内容に同意いただいた上でお申込みください。

</p>
						<label for="policy" class="inputCheckbox-label">
							<input type="checkbox" id="policy" class="inputCheckbox-item">
							<p>上記の内容に同意する</p>
						</label>
						<p class="warning required">株式会社トレジャー・ファクトリー個人情報保護方針について同意をしてください</p>
					</div>
					<hr>
					<h3 class="l-ttl">無料見積りお問い合わせフォーム</h3>
					<p class="u-small">Yahoo!メール、ドコモ、auメールなどの携帯メール、Hotmailをお使いのお客さま宛てにお送りするご案内メールがエラーになるケースが多くなっております。
						恐れ入りますが弊社営業日から48時間以内に返答がない場合は、フリーダイヤルまでお問い合わせください。</p>
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
							<h5 class="s-ttl label-ttl">お名前（カナ）</h5>
							<div class="label-inner">
								<p><?php echo $IDinfo["last_kananame"]; ?>　<?php echo $IDinfo["first_kananame"]; ?></p>
								<input type="hidden" name="name2" value="<?php echo $IDinfo["last_kananame"]; ?> <?php echo $IDinfo["first_kananame"]; ?>">
								<input type="hidden" id="name-sei-kana" name="name-sei-kana" value="<?php echo $IDinfo["last_kananame"]; ?>">
								<input type="hidden" id="name-mei-kana" name="name-mei-kana" value="<?php echo $IDinfo["first_kananame"]; ?>">
								<p class="warning required" data-validate-target="name-sei-kana"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>よりフリガナ（セイ）を入力ください</p>
								<p class="warning required" data-validate-target="name-mei-kana"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>よりフリガナ（メイ）を入力ください</p>
							</div>
						</div>
						<label for="address" class="label req error">
							<h5 class="label-ttl s-ttl">現在お住まいの住所</h5>
							<div class="label-inner">
								<p>〒<?php echo $IDinfo["postal_cd"]; ?></p>
								<input type="hidden" id="postal-code" name="postal-code" value="<?php echo $IDinfo["postal_cd"]; ?>">
								<p class="warning required" data-validate-target="postal-code"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>より郵便番号を入力ください</p>
								<p><?php echo $IDinfo["state"]; ?><?php echo $IDinfo["city"]; ?><?php echo $IDinfo["address"]; ?></p>
								<input type="hidden" id="address-level1" name="address-level1" value="<?php echo $IDinfo["state"]; ?><?php echo $IDinfo["city"]; ?><?php echo $IDinfo["address"]; ?>">
								<p class="warning required" data-validate-target="address-level1"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>より住所情報を入力ください</p>
							</div>
						</label>
						<label for="new-address" class="label">
							<h5 class="label-ttl s-ttl">お引越し先住所</h5>
							<div class="label-inner">
								<input type="text" id="new-address" name="new-address" class="" placeholder="例：東京都港区芝２丁目３２−１">
								<p class="u-small">※未確定の場合は都道府県まででも結構です。</p>
							</div>
						</label>
						<div class="label req error">
							<h5 class="s-ttl label-ttl">ご連絡先電話番号</h5>
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
							<h5 class="label-ttl s-ttl">お見積り希望日</h5>
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
								<p class="warning required" data-validate-target="mitsumori-year">お見積り訪問希望年をご入力ください</p>
								<p class="warning required" data-validate-target="mitsumori-month">お見積り訪問希望月をお選びください</p>
								<p class="warning required" data-validate-target="mitsumori-day">お見積り訪問希望日をお選びください</p>
							</div>
						</label>
						<label for="mitsumori" class="label mitsumori req error">
							<h5 class="label-ttl s-ttl">お引越し人数	</h5>
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
							<h5 class="label-ttl s-ttl">現在のお住まいの間取り</h5>
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
						<label for="renraku" class="label req">
							<h5 class="label-ttl s-ttl">連絡希望時間帯</h5>
							<div class="label-inner inputCheckbox-row error">
								<p class="info">複数選択可</p>
								<div class="inputCheckbox-col-full">
									<label for="renraku-0" class="inputCheckbox-label-l">
										<input type="checkbox" name="renraku[]" id="renraku-0" class="inputCheckbox-item" value="特に指定なし">
										<p>特に指定なし</p>
									</label>
								</div>
								<div class="inputCheckbox-col-half">
									<p>平日の場合</p>
									<label for="renraku-1" class="inputCheckbox-label-l">
										<input type="checkbox" name="renraku[]" id="renraku-1" class="inputCheckbox-item" value="平日午前（9:00-12:00）">
										<p>午前（9:00-12:00）</p>
									</label>
									<label for="renraku-2" class="inputCheckbox-label-l">
										<input type="checkbox" name="renraku[]" id="renraku-2" class="inputCheckbox-item" value="平日お昼（12:00-13:00）">
										<p>お昼（12:00-13:00）</p>
									</label>
									<label for="renraku-3" class="inputCheckbox-label-l">
										<input type="checkbox" name="renraku[]" id="renraku-3" class="inputCheckbox-item" value="平日午後（13:00-18:00）">
										<p>午後（13:00-18:00）</p>
									</label>
									<label for="renraku-4" class="inputCheckbox-label-l">
										<input type="checkbox" name="renraku[]" id="renraku-4" class="inputCheckbox-item" value="平日夜間（18:00以降）">
										<p>夜間（18:00以降）</p>
									</label>
								</div>
								<div class="inputCheckbox-col-half">
									<p>休日の場合</p>
									<label for="renraku-5" class="inputCheckbox-label-l">
										<input type="checkbox" name="renraku[]" id="renraku-5" class="inputCheckbox-item" value="休日午前（9:00-12:00）">
										<p>午前（9:00-12:00）</p>
									</label>
									<label for="renraku-6" class="inputCheckbox-label-l">
										<input type="checkbox" name="renraku[]" id="renraku-6" class="inputCheckbox-item" value="休日お昼（12:00-13:00）">
										<p>お昼（12:00-13:00）</p>
									</label>
									<label for="renraku-7" class="inputCheckbox-label-l">
										<input type="checkbox" name="renraku[]" id="renraku-7" class="inputCheckbox-item" value="休日午後（13:00-18:00）">
										<p>午後（13:00-18:00）</p>
									</label>
									<label for="renraku-8" class="inputCheckbox-label-l">
										<input type="checkbox" name="renraku[]" id="renraku-8" class="inputCheckbox-item" value="休日夜間（18:00以降）">
										<p>夜間（18:00以降）</p>
									</label>
								</div>
								<p class="warning required">どれか１つお選びください</p>
								<p class="u-small">※ご希望時間帯にご連絡がつかない場合、ご希望時間帯以外にご連絡する場合がございます。</p>
							</div>
						</label>
						<label for="sell" class="label mitsumori req error">
							<h5 class="label-ttl s-ttl">買い取り希望</h5>
							<div class="label-inner inputRadio-row">
								<p class="info">1つのみお選びください</p>
								<label for="sell-1" class="inputRadio-label-l">
									<input type="radio" name="sell" id="sell-1" class="inputRadio-item" value="買い取りも希望する">
									<p> 買い取りも希望する</p>
								</label>
								<label for="sell-2" class="inputRadio-label-l">
									<input type="radio" name="sell" id="sell-2" class="inputRadio-item" value="買い取りは希望しない（引越しのみ）">
									<p>買い取りは希望しない（引越しのみ）</p>
								</label>
								<label for="sell-3" class="inputRadio-label-l">
									<input type="radio" name="sell" id="sell-3" class="inputRadio-item" value="未定">
									<p>未定</p>
								</label>
								<p class="warning required">どれか1つをお選びください</p>
							</div>
						</label>
						<label for="contact" class="label error">
							<h5 class="label-ttl s-ttl">お問い合わせ内容</h5>
							<div class="label-inner inputTextarea-row">
								<p class="u-small">お引越し日、見積り希望日、買い取り希望品、ご紹介元、そのほかご要望などについて、ご記入ください。</p>
								<textarea id="contact" name="contact_memo" placeholder="" class="inputTextarea-item"></textarea>
							</div>
						</label>
						<!--
						<hr>
						<h3 class="l-ttl">トレファク引越ご利用者さま特典</h3>
						<div class="u-trefac">
							<p class="u-trefac__title">
								①トレファク引越の利用者さまにお引越し先で快適にインターネットをご利用いただけるように、<a href="http://trybalunit.com/" target="_blank">販売代理店</a>がお電話にて無料で、インターネット回線のご案内・導入サポートをいたします。
							</p>
							<div class="u-trefac__box">
								<label for="inet_guide" class="label">
									<input type="checkbox" id="inet_guide" class="inputCheckbox-item" value="希望する" name="inet_guide">
									<p>インターネットの無料サポートを希望する</p>
								</label>
								<h4>サービス内容</h4>
								<p>引越し先でお得な通信会社やプランは？どのように手続きを進めればいい？いつからインターネットが使えるようになるの？無線LANは使える？など、インターネットの開設に関するご質問などにもお答えいたします。</p>
							</div>
							<p class="u-trefac__title">
								②トレファク引越の利用者さまは、お引越し先にて特別価格でウォーターサーバーのご利用が可能です。<br>ご希望のお客さまには、別途お電話にてご案内いたします。
							</p>

							<div class="u-trefac__box">
								<label for="water_guide" class="label">
									<input type="checkbox" id="water_guide" class="inputCheckbox-item" value="希望する" name="water_guide">
									<p>ウォーターサーバーの案内を希望する</p>
								</label>
								<h4>サービス内容</h4>
								<p>ウォーターサーバーに興味があったけど、どこを選べばよいかわからない・・。本当に安全なの！？というお客さまに、トレファク引越お勧めのウォーターサーバーをご紹介させていただきます。ご案内だけなら無料ですので、「話を聞いてみたい」というお客さまはぜひご利用ください！</p>
							</div>
							<p class="u-trefac__title">
								③引越しのタイミングでお車の売却や買い替えをご検討の方には、トレファク引越お勧めの買い取り専門業者が、愛車の無料査定をさせていただきます。
							</p>
							<div class="u-trefac__box">
								<div class="label-inner inputRadio-row">
									<label for="sellcar_01" class="inputRadio-label-l">
										<input type="radio" id="sellcar_01" value="愛車の買い取り相場を調べてみる" name="sellcar" class="inputRadio-item">
										<p>愛車の買い取り相場を調べてみる</p>
									</label>
									<label for="sellcar_02" class="inputRadio-label-l">
										<input type="radio" id="sellcar_02" value="愛車はあるが今は考えていない" name="sellcar" class="inputRadio-item">
										<p>愛車はあるが今は考えていない</p>
									</label>
									<label for="sellcar_03" class="inputRadio-label-l">
										<input type="radio" id="sellcar_03" value="車は持っていない" name="sellcar" class="inputRadio-item">
										<p>車は持っていない</p>
									</label>
									<h4>サービス内容</h4>
									<p>同じ車でも買い取り店によって査定額はさまざまです。理由は、買い取り店と一言で言っても販売ルートや在庫状況によって異なるからです。トレファク引越お勧めの買い取り専門業者が全国であなたの愛車を一番高く買ってくれる買い取り店をお探しいたします。もちろん、査定のみでも「OK！」</p>
								</div>
							</div>
						</div>
					-->
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
