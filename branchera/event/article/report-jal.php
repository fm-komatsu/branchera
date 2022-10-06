<?php
//base
include ("../../function.php");
$content = get_id_data('4016');
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
			<section class="main__item">
				<img
				data-src="../../lib/img/event/report-jal/main.jpg"
				data-srcset="../../lib/img/event/report-jal/main-sp@2x.png 500w ,../../lib/img/event/report-jal/main@2x.jpg"
				alt="会員限定イベント第4弾 JAL工場見学～SKY MUSEUM～ イベントレポート"
				class="u-img__max">

				<p class="mb3">会員限定イベント第4弾は、なかなか予約がとれないことで有名な「JAL工場見学～SKY MUSEUM～」イベントでした！飛行機にまつわるお話しを伺ったり、迫力の機体整備の見学をしてきました。</p>

				<div class="assist mb4">
					<div class="flex between">
						<div class="w20 w50_sp mb1_sp center_sp"><img class="w100" src="../../lib/img/event/report-jal/logo@2x.jpg" /></div>
						<div class="w80">
							<h5 class="u-ttl__s">JAL工場見学 ～SKY MUSEUM～</h5>
							<p>日本を代表する大手航空会社、日本航空が提供するJAL工場見学～SKY MUSEUM～は、普段見ることのできない飛行機の整備シーンを間近で見られることもあって、予約をとることが難しい人気観光スポットです。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m">空港や飛行機の歴史や仕組みを学ぶ、航空教室からスタート！</h4>
				<div class="flex between">
					<div class="w55"><p>今回は、羽田空港近くの新整備場駅に集合！<br>人気のJAL工場見学～SKY MUSEUM～に参加できるということで、みなさまと一緒に期待に胸を膨らませて、いざ！JALメインテナンスセンター1へ。</p><p>入館証を受け取ったら、まずは航空教室からスタートです。映像を見ながら羽田空港の滑走路の違いや、飛行機の仕組みなどを説明していただきました。元整備士さんの経験を活かしたトリビアは、誰かに話したくなるような内容ばかり！</p></div>
					<p class="w45"><img class="w100" src="../../lib/img/event/report-jal/img01@2x.jpg" class="u-img__max"></p>
				</div>

				<h4 class="u-ttl__m">見て・触って・体験できる大人気の展示エリア！</h4>
				<div class="flex between">
					<div class="w33"><img src="../../lib/img/event/report-jal/img02@2x.jpg" class="u-img__max" /></div>
					<div class="w33"><img src="../../lib/img/event/report-jal/img03@2x.jpg" class="u-img__max" /></div>
					<div class="w33"><img src="../../lib/img/event/report-jal/img04@2x.jpg" class="u-img__max" /></div>
				</div>
				<p>航空教室の後は、展示エリアの見学です。<br>JAL客室乗務員の歴代の制服や著名人の来日シーン、記念グッズの展示など、めずらしい展示品の数々にみなさま、カメラ片手に興味深々でした。</p>
				<p class="mb4">他にも、客室乗務員とパイロットの制服を着て写真が撮れる制服体験や、コックピットに座ることができるパイロットのコーナー、パドルを使って着陸後の飛行機を停止位置まで誘導するマーシャラー体験など憧れの仕事を体験できるコーナーも盛りだくさん！見たい場所を自由に見学できるので、思う存分楽しむことができました。</p>

				<h4 class="u-ttl__m">いよいよ格納庫での機体整備見学へ！</h4>
				<div class="flex between">
					<div class="w50"><img src="../../lib/img/event/report-jal/img05@2x.jpg" class="u-img__max" /></div>
					<div class="w50"><img src="../../lib/img/event/report-jal/img06@2x.jpg" class="u-img__max" /></div>
				</div>
				<p class="mb4">展示エリアの見学の後は、お待ちかねの格納庫へ移動です。<br>まずはM1ハンガーと呼ばれる格納庫へ。<br>1フロア高い位置から見た機体が並ぶM1ハンガーの迫力に、思わずみなさまから声が上がるほど。<br>これだけでも大興奮なのに、次のM2格納庫では、実際に整備をしているフロアに降りて見学！<br>ここまで見られるの！？と期待以上の体験となりました。</p>

				<h4 class="u-ttl__m">目の前で繰り広げられる、飛行機の離着陸に感動！</h4>
				<div class="flex between">
					<div class="w50"><img src="../../lib/img/event/report-jal/img07@2x.jpg" class="u-img__max" /></div>
					<div class="w50"><img src="../../lib/img/event/report-jal/img08@2x.jpg" class="u-img__max" /></div>
				</div>
				<p>さらに、格納庫ギリギリのところまで出て、目の前に広がる滑走路を見学。<br>次々に離着陸する飛行機の音を体中で感じることができました。建物に遮られることなく、スゥーっと雲の向こうへ消えてゆく飛行機を見学できるのも、JAL工場見学～SKY MUSEUM～ならではですね。
				</p>
				<p class="mb4">約100分間の見学は、どれも「すごい！」の連続で、非常に充実したイベントになりました。<br>お帰りの際の、みなさまの満足そうな表情がとても印象的でした。</p>


				<div class="assist mb4" style="line-height:2;">
					<strong>ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。<br>最新情報はメルマガでお知らせしますので、ぜひチェックしてください。</strong>
				</div>

			</section>
		</div>

	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
