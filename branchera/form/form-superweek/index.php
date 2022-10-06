<?php
include '../../function.php';
$title = '「長谷工住まいの大相談会」特別セミナー＆イベントご予約フォーム';
$meta_title = $title.' | '.$siteName;
$meta_description = 'お問い合わせ'.$description;
$body_class = 'inputForm form single';
include($inc_path.'/form/inc/csrf-set-token.php');
?>
<?php include($inc_path.'/form/inc/head.php') ?>

<header id="header">
  <div class="Header">
    <h1 class="log80year"><a href="<?php echo $brc_url ?>" target="_blank"><img src="<?php echo $base_url ?>/img/form/common/logo80year.svg" alt=""></a></h1>
  </div>
</header>
<main id="main">
<article>

<header class="MainHead">
  <div class="MainHead-inner">
    <h1 class="MainHead-ttl"><?php echo $title ?></h1>
  </div>
</header>

<div id="container">
<div id="cont">

<?php include($inc_path.'/form/inc/u-formflow.php') ?>
<?php include($inc_path.'/form/inc/u-req.php') ?>

<form method="POST" action="./confirm.php">
		<input type="hidden" name="token" value="<?php echo $token; ?>">

 <h3 class="l-ttl">ご参加希望のセミナー・イベントについて、ご参加人数を選択してください</h3>
 <p>※定員のあるイベントは先着順となります。ご予約が完了しても、定員を超えた場合は、イベントにご参加いただけないことがございますので予めご了承ください。その際は、担当者よりご連絡をさせていただきます。</p>

<label for="seminar01" class="label seminar">
  <div class="label-ttl">
    <div class="ttl-inner">
      <h5 class="s-ttl mb0"><span>第1回　2/27（月）開催時間：17：00〜</span>公益社団法人日本プロゴルフ協会ティーチングプロA級会員による『ミニ講座＆レッスン！！パッティング編』</h5>
      <p>講師：2015PGAティーチングプロアワード最優秀賞受賞　松本 哲也　プロ</p>
      <p>※第1回・第2回どちらか一方のみのお申込みとなります。</p>
    </div>
  </div>
  <div class="label-inner">
    <select id="seminar01" name="seminar01">
    <option value="参加しない" >参加しない</option>
    <option value="1名参加">1名参加</option>
    <option value="2名参加">2名参加</option>
    <option value="3名参加">3名参加</option>
    <option value="4名参加">4名参加</option>
    <option value="5名以上">5名以上</option>
    </select>
  </div>
</label>

<label for="seminar02" class="label seminar">
  <div class="label-ttl">
    <div class="ttl-inner">
      <h5 class="s-ttl mb0"><span>第2回　2/27（月）開催時間：19：00〜</span>公益社団法人日本プロゴルフ協会ティーチングプロA級会員による『ミニ講座＆レッスン！！パッティング編』</h5>
      <p>講師：2015PGAティーチングプロアワード最優秀賞受賞　松本 哲也　プロ</p>
      <p>※第1回・第2回どちらか一方のみのお申込みとなります。</p>
    </div>
  </div>
  <div class="label-inner">
    <select id="seminar02" name="seminar02">
    <option value="参加しない" >参加しない</option>
    <option value="1名参加">1名参加</option>
    <option value="2名参加">2名参加</option>
    <option value="3名参加">3名参加</option>
    <option value="4名参加">4名参加</option>
    <option value="5名以上">5名以上</option>
    </select>
  </div>
</label>

 <label for="seminar03" class="label seminar">
  <div class="label-ttl">
    <div class="ttl-inner">
      <h5 class="s-ttl mb0"><span>2/28（火）開催時間：19：00〜</span>『ひとごとではない介護離職 〜親が老人ホームで「暮らす」という選択〜』</h5>
      <p>講師：オヤノコト．マガジン編集長　大澤 尚宏　氏</p>
    </div>
  </div>
  <div class="label-inner">
    <select id="seminar03" name="seminar03">
    <option value="参加しない" >参加しない</option>
    <option value="1名参加">1名参加</option>
    <option value="2名参加">2名参加</option>
    <option value="3名参加">3名参加</option>
    <option value="4名参加">4名参加</option>
    <option value="5名以上">5名以上</option>
    </select>
  </div>
</label>

<label for="seminar04" class="label seminar">
  <div class="label-ttl">
    <div class="ttl-inner">
      <h5 class="s-ttl mb0"><span>3/1（水）開催時間：19：00〜</span>『不動産の相続税評価方法や特例を知って節税しよう』</h5>
      <p>講師：ファイナンシャルプランナー　土切 隆次　氏</p>
    </div>
  </div>
  <div class="label-inner">
    <select id="seminar04" name="seminar04">
    <option value="参加しない" >参加しない</option>
    <option value="1名参加">1名参加</option>
    <option value="2名参加">2名参加</option>
    <option value="3名参加">3名参加</option>
    <option value="4名参加">4名参加</option>
    <option value="5名以上">5名以上</option>
    </select>
  </div>
</label>

<label for="seminar05" class="label seminar">
  <div class="label-ttl">
    <div class="ttl-inner">
      <h5 class="s-ttl mb0"><span>3/2（木）開催時間：19：00〜</span>『争続にさせない、相続セミナー』民法の観点から分かりやすく解説します！</h5>
      <p>講師：彩の国法務合同事務所 （代表）司法書士/駒澤大学法学部講師　佐藤 和宏　氏</p>
    </div>
  </div>
  <div class="label-inner">
    <select id="seminar05" name="seminar05">
    <option value="参加しない" >参加しない</option>
    <option value="1名参加">1名参加</option>
    <option value="2名参加">2名参加</option>
    <option value="3名参加">3名参加</option>
    <option value="4名参加">4名参加</option>
    <option value="5名以上">5名以上</option>
    </select>
  </div>
</label>

<label for="seminar06" class="label seminar">
  <div class="label-ttl">
    <div class="ttl-inner">
      <h5 class="s-ttl mb0"><span>3/3（金）開催時間：19：00〜</span>これから家探そう！と思っている方必見！！『ライフプランに合わせたマンションの選び方』</h5>
      <p>講師：住宅評論家　高江 啓幸　氏</p>
    </div>
  </div>
  <div class="label-inner">
    <select id="seminar06" name="seminar06">
    <option value="参加しない" >参加しない</option>
    <option value="1名参加">1名参加</option>
    <option value="2名参加">2名参加</option>
    <option value="3名参加">3名参加</option>
    <option value="4名参加">4名参加</option>
    <option value="5名以上">5名以上</option>
    </select>
  </div>
</label>

 <label for="seminar07" class="label seminar">
  <div class="label-ttl">
    <div class="ttl-inner">
      <h5 class="s-ttl mb0"><span>3/3（金）開催時間：17：30〜19：00の間</span>デコレーションアートアカデミー名物校長が教える！『スワロフスキーデコ講座』バッグチャーム・ゴルフマーカーをデコろう！</h5>
      <p>講師：デコレーションアートアカデミー 校長　宮澤 忠介　氏</p>
    </div>
  </div>
  <div class="label-inner">
    <select id="seminar07" name="seminar07">
    <option value="参加しない" >参加しない</option>
    <option value="1名参加">1名参加</option>
    <option value="2名参加">2名参加</option>
    <option value="3名参加">3名参加</option>
    <option value="4名参加">4名参加</option>
    <option value="5名以上">5名以上</option>
    </select>
  </div>
</label>

 <label for="seminar08" class="label seminar">
  <div class="label-ttl">
    <div class="ttl-inner">
      <h5 class="s-ttl mb0"><span>3/4（土）開催時間：11：00〜</span>『管理会社との上手な付き合い方』</h5>
      <p>講師：長谷工コミュニティ 営業開発部　井上遼介　</p>
    </div>
  </div>
  <div class="label-inner">
    <select id="seminar08" name="seminar08">
    <option value="参加しない" >参加しない</option>
    <option value="1名参加">1名参加</option>
    <option value="2名参加">2名参加</option>
    <option value="3名参加">3名参加</option>
    <option value="4名参加">4名参加</option>
    <option value="5名以上">5名以上</option>
    </select>
  </div>
</label>

  <label for="seminar09" class="label seminar">
  <div class="label-ttl">
    <div class="ttl-inner">
      <h5 class="s-ttl mb0"><span>3/4（土）開催時間：13：00〜</span>お子様でも簡単なペーパークラフト作り『クイリング アート教室』インテリアやプレゼントにも最適！</h5>
      <p>企画制作：ヤマハミュージックジャパン</p>
    </div>
  </div>
  <div class="label-inner">
    <select id="seminar09" name="seminar09">
    <option value="参加しない" >参加しない</option>
    <option value="1名参加">1名参加</option>
    <option value="2名参加">2名参加</option>
    <option value="3名参加">3名参加</option>
    <option value="4名参加">4名参加</option>
    <option value="5名以上">5名以上</option>
    </select>
  </div>
</label>

  <label for="seminar10" class="label seminar">
  <div class="label-ttl">
    <div class="ttl-inner">
      <h5 class="s-ttl mb0"><span>3/4（土）開催時間：15：00〜</span>粘土でお絵かき！？『クレイアート教室』樹脂粘土を使ってキャンパスにお絵かき</h5>
      <p>企画制作：ヤマハミュージックジャパン</p>
    </div>
  </div>
  <div class="label-inner">
    <select id="seminar10" name="seminar10">
    <option value="参加しない" >参加しない</option>
    <option value="1名参加">1名参加</option>
    <option value="2名参加">2名参加</option>
    <option value="3名参加">3名参加</option>
    <option value="4名参加">4名参加</option>
    <option value="5名以上">5名以上</option>
    </select>
  </div>
</label>

 <hr>

   <h3 class="l-ttl">お客さまのご連絡先をお聞かせください</h3>
  <p>※灰色文字で書かれた記載例を参考に、各項目をご入力ください。</p>

<label for="name" class="label req error">
  <h5 class="label-ttl s-ttl">お名前</h5>
  <div class="label-inner">
    <input type="text" autocomplete="name" id="name" name="name" class="s-size" placeholder="例：長谷工 太郎">
    <p class="warning required">お名前をご入力ください</p>
  </div>
</label>

<label for="name2" class="label req error">
  <h5 class="label-ttl s-ttl">フリガナ</h5>
  <div class="label-inner">
    <input type="text" autocomplete="name2" id="name2" name="name2" class="" placeholder="例：ハセコウ　タロウ">
    <p class="warning required">フリガナをご入力ください</p>
    <p class="warning katakana">カタカナでご入力ください</p>
  </div>
</label>

<label for="email" class="label req error">
  <h5 class="label-ttl s-ttl">メールアドレス</h5>
  <div class="label-inner">
    <input type="text" autocomplete="email" id="email" name="email" class="" placeholder="例：info@haseko.co.jp">
    <p class="warning required">メールアドレスをご入力ください</p>
    <p class="warning email">正しいメールアドレスをご入力ください</p>
  </div>
</label>

<label for="email2" class="label req error">
  <h5 class="label-ttl s-ttl">メールアドレスの確認</h5>
  <div class="label-inner">
    <p class="info">確認のためもう一度ご記入ください</p>
    <input type="text" autocomplete="email" id="email2" name="email2" class="" placeholder="例：info@haseko.co.jp">
    <p class="warning required">確認用メールアドレスをご入力ください</p>
    <p class="warning email">正しいメールアドレスをご入力ください</p>
    <p class="warning email-equal">メールアドレスが一致しません</p>
  </div>
</label>

<hr>

<h2 class="l-ttl">ご質問・ご相談・ご意見などをご入力ください</h2>

<label for="contact" class="label">
  <h5 class="label-ttl s-ttl">内容</h5>
  <div class="label-inner inputTextarea-row">
    <textarea name="contact_memo" id="contact" placeholder="お問い合わせ内容は、具体的にご記入ください" class="inputTextarea-item"></textarea>
  </div>
</label>

<hr>

<?php include($inc_path.'/form/inc/u-policy.php') ?>
<hr>
<?php include($inc_path.'/form/inc/u-formssl.php') ?>

</form>

</div>
</div>
</article>
</main>

<?php include($inc_path.'/form/inc/footer.php') ?>
<!-- add scripts -->
<!-- //add scripts -->
<?php include($inc_path.'/form/inc/foot.php') ?>
