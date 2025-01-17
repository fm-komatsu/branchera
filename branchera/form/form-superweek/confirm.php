<?php
$session_check_switch = "0";
include ("../../function.php");
$title ="「長谷工住まいの大相談会」特別セミナー＆イベントご予約フォーム";
$meta_title = $title.' | '.$siteName;
$meta_description = "お問い合わせ".$description;
$body_class ="confForm form single";
include($inc_path.'/form/inc/csrf-check-token.php');
?>
<?php include ($inc_path."/form/inc/head.php") ?>
<header id="header">
  <div class="Header">
    <h1 class="log80year"><a href="<?php echo $brc_url ?>" target="_blank"><img src="<?php echo $base_url ?>/img/form/common/logo80year.svg" alt=""></a></h1>
  </div>
</header>

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

<?php include ($inc_path."/form/inc/u-formflow.php") ?>

<p>下記の項目をご確認の上、「この内容で送信する」ボタンを押してください。</p>
<hr class="mt1">
<form method="post" action="./complete.php">
<?php include ($inc_path."/form/inc/input-hidden.php") ?>

<h2 class="l-ttl">ご参加希望のセミナー・イベント</h2>

<div class="label seminar">
  <h5 class="s-ttl label-ttl">2/27（月）開催時間：17：00〜<br>ミニ講座＆レッスン！！パッティング編</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["seminar01"]); ?></p>
  </div>
</div>

<div class="label seminar">
  <h5 class="s-ttl label-ttl">2/27（月）開催時間：19：00〜<br>ミニ講座＆レッスン！！パッティング編</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["seminar02"]); ?></p>
  </div>
</div>


<div class="label seminar">
  <h5 class="s-ttl label-ttl">2/28（火）開催時間：19：00〜<br>ひとごとではない介護離職 〜親が老人ホームで「暮らす」という選択〜</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["seminar03"]); ?></p>
  </div>
</div>

<div class="label seminar">
  <h5 class="s-ttl label-ttl">3/1（水）開催時間：19：00〜<br>不動産の相続税評価方法や特例を知って節税しよう</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["seminar04"]); ?></p>
  </div>
</div>

<div class="label seminar">
  <h5 class="s-ttl label-ttl">3/2（木）開催時間：19：00〜<br>争続にさせない、相続セミナー</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["seminar05"]); ?></p>
  </div>
</div>

<div class="label seminar">
  <h5 class="s-ttl label-ttl">3/3（金）開催時間：19：00〜<br>ライフプランに合わせたマンションの選び方</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["seminar06"]); ?></p>
  </div>
</div>

<div class="label seminar">
  <h5 class="s-ttl label-ttl">3/3（金）開催時間：17：30〜19：00の間<br>スワロフスキーデコ講座</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["seminar07"]); ?></p>
  </div>
</div>

<div class="label seminar">
  <h5 class="s-ttl label-ttl">3/4（土）開催時間：11：00〜<br>管理会社との上手な付き合い方</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["seminar08"]); ?></p>
  </div>
</div>

<div class="label seminar">
  <h5 class="s-ttl label-ttl">3/4（土）開催時間：13：00〜<br>クイリング アート教室</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["seminar09"]); ?></p>
  </div>
</div>

<div class="label seminar">
  <h5 class="s-ttl label-ttl">3/4（土）開催時間：15：00〜<br>クレイアート教室</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["seminar10"]); ?></p>
  </div>
</div>


<hr>

<h2 class="l-ttl">お客さまのご登録情報</h2>

<div class="label">
  <h5 class="s-ttl label-ttl">お名前</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["name"]); ?></p>
  </div>
</div>
<div class="label">
  <h5 class="s-ttl label-ttl">フリガナ</h5>
  <div class="label-inner">
    <p><?php echo h($_POST["name2"]); ?></p>
  </div>
</div>

<div class="label">
  <h5 class="s-ttl label-ttl">メールアドレス</h5>
  <div class="label-inner">
      <p><?php echo h($_POST["email"]); ?></p>
  </div>
</div>

<hr>

<h2 class="l-ttl">ご質問・ご相談・ご意見</h2>

 <div class="label">
  <h5 class="label-ttl s-ttl">内容</h5>
  <div class="label-inner inputTextarea-row">
    <p><?php echo h($_POST["contact_memo"]); ?></p>
  </div>
</div>


<div class="formBtn">
  <button type='submit' alt="send" class="formBtn-send ok"><span>この内容で送信する</span></button>
</div>

</form>

</div>
</div>
</article>
</main>

<?php include ($inc_path."/form/inc/footer.php") ?>
<!-- add scripts -->
<!-- //add scripts -->
<?php include ($inc_path."/form/inc/foot.php") ?>
