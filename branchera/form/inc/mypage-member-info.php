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
  <h5 class="s-ttl label-ttl">ご住所</h5>
  <div class="label-inner">
    <p>〒<?php echo $IDinfo["postal_cd"]; ?></p>
    <input type="hidden" id="postal-code" name="postal-code" value="<?php echo $IDinfo["postal_cd"]; ?>">
    <p><?php echo $IDinfo["state"]; ?><?php echo $IDinfo["city"]; ?><?php echo $IDinfo["address"]; ?></p>
    <input type="hidden" id="address-level1" name="address-level1" value="<?php echo $IDinfo["state"]; ?><?php echo $IDinfo["city"]; ?><?php echo $IDinfo["address"]; ?>">
		<p class="warning required" data-validate-target="postal-code"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>より郵便番号を入力ください</p>
		<p class="warning required" data-validate-target="address-level1"><a href="<?php echo $myinfo_url; ?>" target="_blank" rel="nofollow" class="a-arrow">マイページの登録情報画面</a>より住所情報を入力ください</p>
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
