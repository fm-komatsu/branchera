<?php
//base
include ("../function.php");
$pageTtl = 'ブランシエラクラブとは？';

//meta
$metaTtl = 'ブランシエラクラブ（長谷工ID）登録';
$metaDesc = 'ブランシエラクラブ（長谷工ID）登録';

//bodyClass
$body_class ="page-about about-about";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
?>
<main class="main">
	<article class="main__row">

		<section style="max-width:540px; margin:24px auto; padding:8px;">

			<h5 class="u-ttl_m mb3">下記の「空メールを送信」ボタンをクリックし、メールを送信してください。自動でブランシエラクラブ（長谷工ID）登録フォームのURLをお知らせいたします。</h5>

			<a href="mailto:idtouroku@haseko.co.jp?subject=%e3%83%96%e3%83%a9%e3%83%b3%e3%82%b7%e3%82%a8%e3%83%a9%e3%82%af%e3%83%a9%e3%83%96%ef%bc%88%e9%95%b7%e8%b0%b7%e5%b7%a5ID%ef%bc%89%e7%99%bb%e9%8c%b2&amp;body=%e3%83%96%e3%83%a9%e3%83%b3%e3%82%b7%e3%82%a8%e3%83%a9%e3%82%af%e3%83%a9%e3%83%96%ef%bc%88%e9%95%b7%e8%b0%b7%e5%b7%a5ID%ef%bc%89%e7%99%bb%e9%8c%b2" class="u-btn_point_s u-position__center mb3">空メールを送信</a>

			<small style="color:#000;">※空メールが立ち上がらないお客さまは、【idtouroku@haseko.co.jp】へメールをお送りください。<br>※メーラーによっては件名・本文が空欄の場合エラーが起きる可能性があります。メールをお送りいただく際は、件名・本文に「登録」と記載してください。</small>

			<div class="u-assist mt3">

				<p class="u-small" style="font-size:1.4rem;color:#000;">
					※メールが届かない場合、ご契約のプロパイダやメールソフトの設定などにより、 受信できていない可能性がございます。また、迷惑メールとして扱われている場合がありますので、迷惑メールフォルダをご確認ください。
					<br>※迷惑メールの設定・ドメイン指定受信の設定をご確認ください。「haseko.co.jp」ドメインからのメールを受信できるように設定を行なってください。
				</p>
			</div>
		</section>

	</article>
</main>

<?php  include ($inc_path."/lib/inc/foot.php"); ?>
