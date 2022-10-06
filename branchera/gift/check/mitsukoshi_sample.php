<?php
//base
$flp_check_redirect = true;
include ("../../function.php");
$pageTtl = '日本橋三越本店 文化展 無料ご招待';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = "サービスをいっぱいご利用いただくために、ステキな特典をご用意いたしました。";
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="l-page-small";

//htmlHeader
include($inc_path."/lib/inc/head.php");
#include($inc_path."/lib/functions/sso_login_re.php");
?>

<main class="main">
	<article class="main__row">

		<div class="u-position__center">
			<h1 class="u-ttl__m">日本橋三越本店 文化展<br>「無料」ご招待</h1>
		</div>
		<p>文化展会場入口にて、本画面をお見せいただくか、印刷したものをご持参ください。</p>
		<style>
		.font_medium{
			font-size: 20px;
			text-align: center;
			color:#000;
		}
		.font_medium::before{
			font-size: 14px;
			max-width: 70px !important;
		}
		.font_large{
			font-size: 36px;
			text-align: center;
			font-weight: bold;
			color:#000;
			letter-spacing: 2px;
		}
		.font_large::before{
			font-size: 14px;
			max-width: 70px !important;
		}
		</style>
		<table class="u-table_nosp mb1">
			<tr>
				<th>お名前</th>
			</tr>
			<tr>
				<td class="font_medium"><?php echo $IDinfo["last_name"]; ?> <?php echo $IDinfo["first_name"]; ?> さま</td>
			</tr>
		</table>
		<table class="u-table_nosp mb2">
			<tr>
				<th>長谷工ID</th>
			</tr>
			<tr>
				<td data-label="長谷工ID" class="font_large"><?php echo $IDinfo["member_card_no"]; ?></td>
			</tr>
		</table>
		<input type="button" value="印刷する" onclick="window.print();" class="u-btn_s" style="font-size:14px; margin:0 auto;">
	</article>
</main>

<?php  include($inc_path."/lib/inc/foot.php"); ?>
