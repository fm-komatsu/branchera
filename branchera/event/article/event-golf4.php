<?php
//base
include ("../../function.php");
$content = get_id_data('4021');
$pageTtl = $content['title'];

//meta
$metaTtl = ''.$pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/event/" ,"イベント・キャンペーン");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<?php
		include ($inc_path."/lib/inc/page/_event/__main-header.php");
		?>

		<section class="main__wrapper">

			<img data-src="../../lib/img/event/golf4/main.jpg"
			data-srcset="../../lib/img/event/golf4/main-sp@2x.jpg 666w,../../lib/img/event/golf4/main.jpg"
			alt="PGAゴルフアカデミー体験レッスン 東西Ｗ開催ご招待"
			class="u-img__max">

			<p>日本プロゴルフ協会が30年かけて作り上げたティーチング指導のためのカリキュラムをぜひご体験ください。少人数制で、レベルに合わせたレッスンでしっかり指導を受けられます。さらにゴルフ場でのレッスンなので実践的！会員さまだけの特別プログラムですので、奮ってご応募ください。</p>

			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[開催日時]</dt>
					<dd>第1回　2017年11月19日（日）7：30集合　16：30解散<br>第2回　2017年12月24日（日）7：30集合　16：30解散</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>（1） PGAゴルフアカデミー太平洋クラブ益子　太平洋クラブ益子PGAコース内<br>　　　栃木県芳賀郡益子町七井3302-1　【<a href="http://www.taiheiyoclub.co.jp/course/mashiko/index.html#access" target="_blank">地図はこちらから</a>】<br>（2） PGAゴルフアカデミー東条の森　東条の森カントリークラブ内<br>　　　兵庫県加東市大畑1071-7-2　【<a href="http://www.tcc63.co.jp/access/" target="_blank">地図はこちらから</a>】<br>※ 第1回・第2回とも<strong>両会場での開催</strong>となります。</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>（1） PGAゴルフアカデミー太平洋クラブ益子　各回4名さま<br>（2） PGAゴルフアカデミー東条の森　各回3名さま</dd>
				</dl>
				<dl>
					<dt>[参加費用]</dt>
					<dd>参加費無料<br>※集合場所までの交通費や宿泊費等は各自ご負担となります。</dd>
				</dl>
				<dl>
					<dt>[応募申込]</dt>
					<dd>長谷工IDマイページにログインしてお申し込みください。</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2017年10月17日（火）～10月29日（日）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>2017年11月1日（水）より随時メールにてご連絡いたします。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd>いずれか<strong>1つのコースしかご応募できません</strong>のでご注意ください。</dd>
				</dl>
			</div>

			<h4 class="u-ttl__m">体験レッスンスケジュール（予定）</h4>
			<div class="sc_table">
				<dl>
					<dt>7：30</dt>
					<dd>コース内レッスン・コンディショニング（ストレッチや体操）</dd>
				</dl>
				<dl>
					<dt>10：00</dt>
					<dd>コンディショニング・練習場レッスン</dd>
				</dl>
				<dl>
					<dt>12：00</dt>
					<dd>昼食</dd>
				</dl>
				<dl>
					<dt>13：30</dt>
					<dd>ラウンドレッスン（9ホール）</dd>
				</dl>
				<dl>
					<dt>16：30</dt>
					<dd>解散</dd>
				</dl>
				<dl>
					<dt>ご注意事項</dt>
					<dd>上記スケジュールは、天候等により変更になる場合があります。<br>詳細は参加が確定した後、日本プロゴルフ協会よりご案内いたします。</dd>
				</dl>
			</div>

			<div class="mb4">
				<figure>
					<img data-src="../../lib/img/event/golf4/img01.jpg"
			data-srcset="../../lib/img/event/golf4/img01@2x.jpg 666w,../../lib/img/event/golf4/img01.jpg"
			alt="PGAゴルフアカデミー体験レッスン 東西Ｗ開催"
			class="u-img__max">
				</figure>
			</div>

			<div class="u-btn-layout mt2">
				<div class="u-btn-layout__row">
					<label class="u-btn_end">応募の受け付けは終了いたしました</label>
				</div>
			</div>

		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
