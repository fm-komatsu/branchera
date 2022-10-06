<?php
//base
include ("../../function.php");
$content = get_id_data('4058');
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
				data-src="<?php echo $img_url ?>/event/report-jal2019/main-v.jpg"
				data-retina="<?php echo $img_url ?>/event/report-jal2019/main-v@2x.jpg"
				alt="会員限定イベント JAL工場見学～SKY MUSEUM～ イベントレポート"
				class="u-img__max u-only__pc">
				<img
				data-src="<?php echo $img_url ?>/event/report-jal2019/main-v-sp.jpg"
				data-retina="<?php echo $img_url ?>/event/report-jal2019/main-v-sp@2x.jpg"
				alt="会員限定イベント JAL工場見学～SKY MUSEUM～ イベントレポート"
				class="u-img__max u-only__sp">

				<p class="mb3"><a href="<?php echo $base_url?>/event/article/report-jal.php">前回</a>も大好評をいただいた人気イベント「JAL工場見学～SKY MUSEUM～」。本物さながらの職業体験や、普段は入れない格納庫での機体見学など、盛りだくさんの内容を楽しんできました。</p>

				<div class="u-assist mb4">
					<div class="flex between">
						<div class="w20 w50_sp mb1_sp center_sp"><img class="w100" src="<?php echo $img_url ?>/event/report-jal2019/logo@2x.jpg" /></div>
						<div class="w80">
							<h5 class="u-ttl__s">JAL工場見学 ～SKY MUSEUM～</h5>
							<p>日本航空が実施している工場見学ツアー。約100分間のコースは、「展示エリア」「航空教室」「格納庫見学」の3部で構成されています。ドラマで見たことがある整備現場や、本物の機体が目の前に！なかなか予約がとれないことで知られる、人気の見学イベントです。</p>
						</div>
					</div>
				</div>

				<h4 class="u-ttl__m">貴重な史料や体験ブースを楽しめる、展示エリアからスタート！</h4>
				<div class="flex between">
					<div class="w55"><p>当日朝、羽田空港近くの「新整備場」駅に集合した参加者のみなさま。さっそく施設へ移動し、まずは「展示エリア」の見学からスタート！</p><p>展示エリアには、<strong>歴代のCAの制服や航空機（1/50サイズ）などの貴重な史料</strong>が展示されているほか、乗務員や整備士といったJALのお仕事がわかる体験ブースがあります。精巧に再現されたコックピットに、子どもたちは興味津々です。</p></div>
					<p class="w45"><img class="w100" src="<?php echo $img_url ?>/event/report-jal2019/img01@2x.jpg" class="u-img__max"></p>
				</div>

				<div class="flex between">
					<div class="w33"><img src="<?php echo $img_url ?>/event/report-jal2019/img02@2x.jpg" class="u-img__max mb1_sp" /></div>
					<div class="w33"><img src="<?php echo $img_url ?>/event/report-jal2019/img03@2x.jpg" class="u-img__max mb1_sp" /></div>
					<div class="w33"><img src="<?php echo $img_url ?>/event/report-jal2019/img04@2x.jpg" class="u-img__max" /></div>
				</div>
				<p>また制服体験エリアでは、 CAや機長の制服を着て記念撮影！みなさま、最初はちょっと恥ずかしそうにしていましたが、憧れの制服に腕を通すと、ノリノリで撮影を楽しんでいました。</p>

				<h4 class="u-ttl__m">飛行機の歴史と仕組みを楽しく学べる、航空教室</h4>
				<p>次は、<strong>飛行機にまつわるさまざまな知識を学べる</strong>航空教室へ。<br>元CAさんの経験を活かした説明は、どれも楽しくて興味深いものばかりでした。<br>例えば、 羽田空港の旅客数は世界第4位というお話では、「1位はどこだと思いますか？」という問いかけが。デトロイトかな？仁川かな？と、子どもも大人も解答にチャレンジ！ 正解は、アメリカのハーツフィールド・ジャクソン・アトランタ国際空港だそう。2位は北京首都国際空港、3位はドバイ国際空港とのことで、羽田は、こうした世界の大都市空港に次いで、忙しく働いている空港なんですね。</p>
				<p>ほかにも、「飛行機の離着陸時のスピードは時速250～300キロで、新幹線とほぼ同じ」「飛んでいるときは時速900～1000キロ」という驚きのデータや、「なぜ飛行機は飛べるのか」というちょっと難しいお話にも、参加者のみなさまは真剣に聞き入っていました。</p>
				<h4 class="u-ttl__m">３つのチームに分かれて、いよいよ格納庫見学！</h4>
				<div class="flex between">
					<div class="w50"><img src="<?php echo $img_url ?>/event/report-jal2019/img05@2x.jpg" class="u-img__max mb1_sp" /></div>
					<div class="w50"><img src="<?php echo $img_url ?>/event/report-jal2019/img06@2x.jpg" class="u-img__max" /></div>
				</div>

				<p>最後は、見学コースのハイライトともいえる格納庫見学。ここからは3つのグループに分かれ、広大な格納庫内のさまざまな見どころを回りました。「第1格納庫」では、<strong>高いフロアから全体を見下ろしながら整備の様子を見学。</strong>この格納庫の広さは、なんと東京ドーム1つ分！大きな飛行機を出し入れするために、格納庫内には柱がありません。</p>
				<p>ここから、空港の景色が見える通路を通って「第2格納庫」へ降りると、<strong>巨大な飛行機がすぐ近くに！</strong>安全のためにヘルメットをかぶり、翼の裏など普段見ることのできないところまで見学します。説明を熱心に聞いていたみなさまからは、「ボーイング社製とエアバス社製の機体の見分け方は？」といった質問も。見分けるポイントは、翼のライトの点滅スピードで、早いほうがエアバス社製なのだそう。こういった専門的な話が聞けるのも、見学イベントならではですね！</p>

				<div class="flex between">
					<div class="w50"><img src="<?php echo $img_url ?>/event/report-jal2019/img07@2x.jpg" class="u-img__max mb1_sp" /></div>
					<div class="w50"><img src="<?php echo $img_url ?>/event/report-jal2019/img08@2x.jpg" class="u-img__max" /></div>
				</div>
				<p>現役の機体のほかに、<strong>日本初のジェット旅客機「富士号」の機首部分</strong>も見ることができました。「空の貴婦人」と呼ばれた優雅なフォルムが特長で、内部のラウンジは畳風のカーペットや障子を取り入れた和風のデザイン。当時は、フライト中に着物姿でのサービスもあったそうです。ビートルズが来日した際に乗っていた飛行機も、同タイプの機種だそう。そういった貴重なお話に、富士号や当時への思いを巡らせました。</p>
				<p class="mb4">こうして約100分間のコースを回り終え、充実のイベントは終了。参加者のみなさまからの、「すごかった！」「楽しかった！」「また来たい！」という感激の声が印象的でした。</p>


				<div class="u-assist mb4" style="line-height:2;">
					<span class="u-font__bold">ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。<br>最新情報はメルマガでお知らせしますので、ぜひチェックしてください。</span>
				</div>

			</section>
		</div>

	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
