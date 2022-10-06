<?php
//base
$session_check_switch = "0";
include ("../../function.php");
$title ="トレファク引越 見積り依頼";
$pageTtl = '【ご入力内容の確認】'.$title;

//csrf
include($inc_path.'/form/inc/csrf-check-token.php');

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="confForm form single";

//htmlHeader
include($inc_path.'/form/inc/head.php');
include($inc_path.'/form/inc/header.php');
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

				<?php include ($inc_path."/form/inc/u-formflow.php") ?>

				<p>下記の項目をご確認の上、「この内容で送信する」ボタンを押してください。</p>
				<hr class="mt1">

				<form method="post" action="./complete.php">

					<h2 class="l-ttl">無料見積りお問い合わせフォーム</h2>
					<div class="label">
						<h5 class="s-ttl label-ttl">長谷工ID</h5>
						<div class="label-inner">
							<p><?php echo h($_POST["hasekoid"]); ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="s-ttl label-ttl">お名前</h5>
						<div class="label-inner">
							<p><?php echo h($_POST["name"]); ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="s-ttl label-ttl">お名前（カナ）</h5>
						<div class="label-inner">
							<p><?php echo h($_POST["name2"]); ?></p>
						</div>
					</div>

					<div class="label">
						<h5 class="s-ttl label-ttl">現在お住まいの住所</h5>
						<div class="label-inner">
							<p>〒<?php echo h($_POST["postal-code"]); ?></p>
							<p><?php echo h($_POST["address-level1"]); ?></p>
						</div>
					</div>


					<div class="label">
						<h5 class="s-ttl label-ttl">お引越し先住所</h5>
						<div class="label-inner">
							<p><?php echo h($_POST["new-address"]); ?></p>
						</div>
					</div>


					<div class="label">
						<h5 class="s-ttl label-ttl">ご連絡先電話番号</h5>
						<div class="label-inner">
							<p>固定：<?php echo h($_POST["tel"]); ?></p>
							<p>携帯：<?php echo h($_POST["tel2"]); ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="s-ttl label-ttl">メールアドレス</h5>
						<div class="label-inner">
							<p>PC：<?php echo h($_POST["email"]); ?></p>
							<p>携帯：<?php echo h($_POST["email2"]); ?></p>
						</div>
					</div>
					<hr>

					<div class="label">
						<h5 class="s-ttl label-ttl">お引越し予定日</h5>
						<div class="label-inner">
							<p><?php echo h($_POST["hikkoshi-year"]."年　".$_POST["hikkoshi-month"]."　".$_POST["hikkoshi-day"]); ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="s-ttl label-ttl">お見積り希望日</h5>
						<div class="label-inner">
							<p><?php echo h($_POST["mitsumori-year"]."年　".$_POST["mitsumori-month"]."　".$_POST["mitsumori-day"]); ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="s-ttl label-ttl">現在のお住まいの間取り</h5>
						<div class="label-inner">
							<p><?php echo h($_POST["hikkoshi-madori"]); ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="s-ttl label-ttl">お引越し人数</h5>
						<div class="label-inner">
							<p><?php echo h($_POST["hikkoshi-amount"]); ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="s-ttl label-ttl">連絡希望時間帯</h5>
						<div class="label-inner">
							<?php
							$renraku_txt = "";
							foreach($_POST['renraku'] as $renraku) {?>
								<p><?php echo h($renraku); ?></p>
								<?php
								$renraku_txt .= $renraku . "\n　";
							}
							$_POST['renraku']=$renraku_txt;
							?>
						</div>
					</div>
					<div class="label">
						<h5 class="s-ttl label-ttl">買い取り希望</h5>
						<div class="label-inner">
							<p><?php echo h($_POST["sell"]); ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="label-ttl s-ttl">内容</h5>
						<div class="label-inner inputTextarea-row">
							<p><?php echo h($_POST["contact_memo"]); ?></p>
						</div>
					</div>
					<!--
					<hr>
					<h2 class="l-ttl">トレファク引越ご利用者さま特典</h2>
					<div class="label">
						<h5 class="label-ttl s-ttl">インターネットの無料サポート</h5>
						<div class="label-inner inputTextarea-row">
							<?php
							#$_POST['inet_guide'] = isset($_POST['inet_guide'])?"希望する":"希望しない";
							?>
							<p><?php #echo h($_POST["inet_guide"]); ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="label-ttl s-ttl">ウォーターサーバーの案内</h5>
						<div class="label-inner inputTextarea-row">
							<?php
							#$_POST['water_guide'] = isset($_POST['water_guide'])?"希望する":"希望しない";
							?>
							<p><?php #echo h($_POST["water_guide"]); ?></p>
						</div>
					</div>
					<div class="label">
						<h5 class="label-ttl s-ttl">愛車の無料査定</h5>
						<div class="label-inner inputTextarea-row">
							<?php
							#$_POST['sellcar'] = isset($_POST['sellcar'])?$_POST['sellcar']:"希望しない";
							?>
							<p><?php #echo h($_POST["sellcar"]); ?></p>
						</div>
					</div>
				-->
					<div class="formBtn">
						<button type='submit' alt="send" class="formBtn-send ok"><span>この内容で送信する</span></button>
					</div>
					<?php include ($inc_path."/form/inc/input-hidden.php") ?>
				</form>
			</div>
		</div>
	</article>
</main>

<?php include ($inc_path."/form/inc/footer.php") ?>
<?php include ($inc_path."/form/inc/foot.php") ?>
