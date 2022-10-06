<?php
//base
include ("../../function.php");
$content = get_id_data('4008');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
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
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>
		<div class="main__wrapper">

			<section class="section wrapper">
				<img data-src="../../lib/img/event/report-kotsuban/main.jpg"
				data-srcset="../../lib/img/event/report-kotsuban/main-sp@2x.png 450w ,../../lib/img/event/report-kotsuban/main.jpg"
				alt="会員限定イベント第一弾 骨盤の調整レッスンご招待"
				class="u-img__max">

				<p class="mb4">2017年1月21日(土)、会員さま限定イベント第1弾といたしまして美しい骨盤づくりのボディワーク「b-i STYLE®」レッスンを開催いたしました。約1時間のレッスンで、骨盤のゆがみを自力で調整する、というkyo先生のボディワーク。当日のイベント内容をご紹介いたします。</p>


				<div class="u-assist">

					<div class="u-float__left u-position__center">
						<img class="w100"
						src="../../lib/img/event/report-kotsuban/img01@2x.jpg"
						style="max-width:200px;"
						class="u-img__max">
					</div>
					<p class="mb1" style="display:inline-block;padding:3px 10px; background:#ff8400;border-radius:10px;color:#FFF;">教えてくれたのはこの方！</p>
					<h5 style="font-size:130%;" class="mb2">ボディワークプロデューサー　kyo先生</h5>
					<p>フィットネスインストラクターとして25年以上の指導経歴をもつkyo先生。自力で骨盤のゆがみを調整し、美しいバランスのとれたボディを目指す「b-i STYLE®」を展開しています。今回は、北青山にあるb−i STYLE® スタジオをお借りし、kyo先生自ら約1時間のアドバイスを行なっていただきました。</p>
					<p class="cap">※b-i STYLE®(ビイスタイル)は株式会社b-iの商標登録です。</p>

				</div>

				<h4 class="u-ttl__m">骨盤の調整体験にチャレンジ</h4>
				<p class="u-float__left u-position__center">
					<img
					src="../../lib/img/event/report-kotsuban/img02@2x.jpg"
					style="max-width:200px;"
					class="u-img__max">
				</p>
				<p>今回は、東京・北青山にある素敵なスタジオをお借りして、抽選で当選した会員さまと2回に分けて、骨盤の調整体験を実施しました！</p>
				<p>2回行なわれたイベントの様子を、写真と合わせてご紹介させていただきます。</p>


				<h4 class="u-ttl__m">自分の体のゆがみを知るきっかけに</h4>
				<div class="u-float__right u-position__center">
					<img
					src="../../lib/img/event/report-kotsuban/img03@2x.jpg"
					style="max-width:200px;"
					class="u-img__max">
				</div>
				<p>スタジオには美しいスタイルとハツラツとした雰囲気が素敵なkyo先生が。和やかな雰囲気の中、レッスンがスタートしました。</p><p>まずは、先生による骨盤のゆがみチェックです。両足を伸ばして座ると、左右で長さが微妙に違う！？これは人それぞれのクセや生活によって変わってくるそうです。</p>

				<h4 class="u-ttl__m">「骨盤のゆがみを、自力で調整しましょう！」</h4>
				<p>骨盤のゆがみチェックが終わったら、いよいよ本格的なボディワークの開始です。<br>kyo先生のリズミカルな掛け声に合わせて、下半身から上半身にかけて、ボディワークを行なっていきます。簡単な動きから徐々に始めていくのと、先生方が常にチェックしていてくれるので、安心です。</p>
				<img src="../../lib/img/event/report-kotsuban/img04@2x.jpg" class="u-img__max">
				<small class="u-small">後半は難しい動作も増えてきて、kyo先生の掛け声もさらにパワーアップ！スタジオ全体のテンションが上がっていきます。</small>

				<h4 class="u-ttl__m">なんだか晴れやかな表情に…！</h4>
				<div class="u-float__right u-position__center">
					<img
					src="../../lib/img/event/report-kotsuban/img05@2x.jpg"
					style="max-width:200px;"
					class="u-img__max">
				</div>
				<p>約1時間のボディワークが終わると、いよいよ骨盤のゆがみチェックです。最初と同じように両足を並べてみると、足の長さが…揃っている！という声が。kyo先生の仰る通り、本当に体のゆがみを自分で治すことができて、スタジオ内は驚きの歓声に包まれました。</p>
				<p>今回調整した骨盤も、日常に戻ると生活のクセが出てしまうそうです。定期的な骨盤の調整を行なうことで、体のバランスを維持していくことができそうですね。</p>
				<p>レッスン終了後は、体が軽くなった！と言った感想も聞こえてきました。ご参加いただいた会員さまも晴れやかな印象でした。</p>

				<div class="u-assist" style="line-height:2;">
					<strong>今回は東京での開催でしたが、今後全国各地でのイベントも企画しております。<br>ぜひ、次のイベントの開催をお楽しみに！</strong>
				</div>
			</section>
		</div>

	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
