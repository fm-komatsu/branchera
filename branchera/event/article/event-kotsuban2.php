<?php
//base
include ("../../function.php");
$content = get_id_data('4013');
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


			<img data-src="../../lib/img/event/event-kotsuban2/main.png"
			alt="会員限定イベント第5弾 骨盤の調整レッスンご招待"
			class="u-img__max">
			<h3 class="u-ttl__l mt3">骨盤（ペルヴィス）が健美の源と考え、“つよく・美しく・しなやかに”自律した心身を実感していただけるレッスンです！</h2>
				<p>普通に生活をしているだけで、いつの間にか身体の「ゆがみ」を作り出していることにお気付きですか。 バッグを肩にかける、足を組んで座る…そのような日常的な動きの中にある習慣（クセ）で骨盤のゆがみが生まれてしまうのです。骨盤がゆがんでいる状態で、ヨガやピラティスなどの運動をしても、その良さを享受できないままに…。 </p>
				<p class="mb4">そこで重要になってくるのが、骨盤を本来あるべき状態に正す「骨盤の調整」。インストラクターとして25年以上のキャリアを持つ“ボディワークプロデューサー”のkyo先生。<br>kyo先生が提唱する独自メソッド、名付けて『b-iペルヴィス』。美しい骨盤づくりのボディワーク「b-iペルヴィス」は、自力でバランス調整をする、老若男女を問わず、誰もが無理なく行えるプログラムになっています。</p>

				<div class="u-position__center">
					<img src="../../lib/img/event/event-kotsuban/img01.png"
					data-retina="../../lib/img/event/event-kotsuban/img01-sp@2x.png"
					alt="こんなこと思い当たったら、「美しい骨盤づくり」にトライ!"
					style="max-width:620px;"
					class="u-img__max">
				</div>

				<h2 class="u-ttl__l">きつくないのに、手応えを感じるボディワーク体験。<br>体験した人の声を聞いてみると...。</h2>
				<div class="u-column__3">
					<div class="u-column__item">
						<div class="img mb"><img src="../../lib/img/event/event-kotsuban/img02-sp@2x.png" alt=""  class="u-img__max"/>
							<p>レッスンのはじめに先生がカラダの状況をみてくださって、はじめてゆがんでいることに気づきました。1時間ほどのボディワーク体験でしたが、ゆがみが調整されているのがわかり驚きました!<br>(20代 Hさん)</p>
						</div>
					</div>
					<div class="u-column__item">
						<div class="img mb"><img src="../../lib/img/event/event-kotsuban/img03-sp@2x.png" alt=""  class="u-img__max"/>
							<p>普段あまり運動をしていないので心配でしたが、ゆっくりと体を動かしながらストレッチするようなプログラムなのでついていけました。でも翌日は少し筋肉痛に・・・(笑)<br>(20代 Mさん)</p>
						</div>
					</div>
					<div class="u-column__item">
						<div class="img mb"><img src="../../lib/img/event/event-kotsuban/img04-sp@2x.png" alt=""  class="u-img__max"/>
							<p>kyo先生の物腰やわらかな話し方が印象的。笑顔でいろいろと教えてくださって、女性としても素敵だなぁと感じました。<br>(30代 Tさん)</p>
						</div>
					</div>
				</div>
				<p class="mb6">美しい骨盤づくりにむけて骨盤の開閉力を高め、かつ筋肉本来の力を発揮するための「筋膜ストレッチ」も合わせて行なうプログラムになっています。<br>初めての体験で、身体の変化を実感する人も多い話題の骨盤レッスン。この機会に、骨盤を整えて、ゆがみ知らずの身体になってみませんか。</p>


				<h4 class="u-ttl__m">開催概要</h4>

				<div class="u-list__dl_table">
					<h5 class="u-ttl__s">【東京開催】</h5>
					<div class="u-float__right u-position__center">
						<img data-src="../../lib/img/event/event-kotsuban/img06.png"
						data-retina="../../lib/img/event/event-kotsuban/img06@2x.png"
						style="max-width:220px;"
						alt="b-i STYLE®スタジオ"
						class="u-img__max">
					</div>
					<dl>
						<dt>[日程]</dt>
						<dd>2017年8月26日(土)</dd>
					</dl>
					<dl>
						<dt>[時間]</dt>
						<dd>1回目 / 13:00～14:30、2回目 / 16:00～17:30</dd>
					</dl>
					<dl>
						<dt>[講師]</dt>
						<dd>kyo先生（ボディワークプロデューサー）</dd>
					</dl>
					<dl>
						<dt>[場所]</dt>
						<dd>b−i STYLE® スタジオ<br>東京都港区北青山2-9-13サイトウビル2F</dd>
					</dl>
					<dl>
						<dt>[アクセス]</dt>
						<dd>銀座線「外苑前」駅徒歩2分</dd>
					</dl>
					<dl>
						<dt>[募集人数]</dt>
						<dd>各回20名</dd>
					</dl>

				</div>

				<hr>

				<div class="u-list__dl_table">
					<h5 class="u-ttl__s">【大阪開催】</h5>
					<div class="u-float__right u-position__center">
						<img data-src="../../lib/img/event/event-kotsuban2/img07.png"
						data-retina="../../lib/img/event/event-kotsuban2/img07@2x.png"
						alt="スタジオ・ヨギーOSAKA"
						style="max-width:210px;">
					</div>
					<dl>
						<dt>[日程]</dt>
						<dd>2017年9月9日(土)</dd>
					</dl>
					<dl>
						<dt>[時間]</dt>
						<dd>14:00～15:30</dd>
					</dl>
					<dl>
						<dt>[講師]</dt>
						<dd>ミホ先生（b-i stylist）</dd>
					</dl>
					<dl>
						<dt>[場所]</dt>
						<dd>スタジオ・ヨギーOSAKA<br>大阪府大阪市北区曽根崎2-16-19　メッセージ梅田ビル6F</dd>
					</dl>
					<dl>
						<dt>[アクセス]</dt>
						<dd>御堂筋線「梅田」駅より徒歩3分（ホワイティうめだ直結）<br>谷町線「東梅田」駅より徒歩1分</dd>
					</dl>
					<dl>
						<dt>[募集人数]</dt>
						<dd>20名</dd>
					</dl>

				</div>

				<hr>


				<div class="u-list__dl_table">
					<h5 class="u-ttl__s">【共通概要】</h5>
					<dl>
						<dt>[申込方法]</dt>
						<dd>長谷工IDマイページにログインしてお申し込みください。<br>男性・女性どちらでもご参加いただけます。</dd>
					</dl>
					<dl>
						<dt>[応募締め切り]</dt>
						<dd>2017年7月30日(日)</dd>
					</dl>
					<dl>
						<dt>[当選発表]</dt>
						<dd>2017年8月2日（火）より随時メールにてご連絡いたします。</dd>
					</dl>
					<dl>
						<dt>[費用]</dt>
						<dd>参加無料　※交通費等は各自負担</dd>
					</dl>
					<dl>
						<dt>[注意事項]</dt>
						<dd>お申し込みは東京開催第1回、第2回、大阪開催のいずれか1回のみとなります。</dd>
					</dl>
				</div>

				<label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>

			</section>

		</div>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
