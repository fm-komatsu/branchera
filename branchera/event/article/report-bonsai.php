<?php
//base
include ("../../function.php");
$content = get_id_data('4036');
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
				<h2 class="u-ttl__l first-of-type">「山田香織の手のひらで楽しむ桜のお花見盆栽づくり」イベントレポート</h2>

				<div class="u-list__dl_table mb3">
					<dl>
					<dt>開催日</dt>
						<dd>2018年3月30日（金）</dd>
					</dl>
					<dl>
						<dt>場所</dt>
						<dd>日本橋三越本店 新館9階 三越カルチャーサロン</dd>
					</dl>
				</div>

					<p>日本橋三越本店で開催された「山田香織の手のひらで楽しむ桜のお花見盆栽づくり」に会員さまを無料ご招待。旭山桜というボリュームある桜を用い、ご自宅でお花見を楽しめる盆栽づくりを体験しました。</p>

				<div class="u-assist flex between">

					<div class="w70">
						<p class="mb1" style="display:inline-block;padding:3px 10px; background:#ff8400;border-radius:10px;color:#FFF;">講師はこの方！</p>
						<p>講師は盆栽清香園5代目 山田香織先生。<br>過去NHK趣味の園芸の司会やソロモン流出演等、各種メディアでも活躍する山田香織先生に直接ご指導を受けました。</p>
					</div>
					<div class="u-clearfix w30">
						<figure class="center">
							<img data-src="../../lib/img/event/report-bonsai/lecturer-yamada.jpg"
							data-retina="../../lib/img/event/report-bonsai/lecturer-yamada@2x.jpg"
							alt="盆栽清香園5代目 山田香織先生"
							style="max-width : 150px;"
							class="u-img__max"><br>
							<figcaption class="u-small r-cap">
								盆栽清香園5代目 山田香織先生
							</figcaption>
						</figure>

					</div>

				</div>

				<div class="flex u-column__2 mb3">
					<figure class="u-column__item">
						<div class="center">
							<img
							src="../../lib/img/event/report-bonsai/report-bonsai_img01.png"
							style="max-width:362px;"
							class="u-img__max">
						</div>
						<figcaption style="font-feature-settings: 'palt' 1;">受講前に、講師である山田先生の作品を拝見し、盆栽づくりへの期待が高まりました！</figcaption>
					</figure>
					<figure class="u-column__item">
						<div class="center">
							<img
							src="../../lib/img/event/report-bonsai/report-bonsai_img02.png"
							style="max-width:362px;"
							class="u-img__max">
						</div>
						<figcaption style="font-feature-settings: 'palt' 1;">山田先生の目の前でお話が聞ける好位置での受講。みなさま熱心に耳を傾けていらっしゃいました。</figcaption>
					</figure>
				</div>


				<h4 class="u-ttl__m">参加いただいた方の声をご紹介します。</h4>

				<div class="event_comment">
					<div class="balloon balloon_widthmax mb woman">
						<div class="inner">
							<div>
								<p>先日は、「山田香織の手のひらで楽しむ桜のお花見盆栽づくり」イベントに招待していただきありがとうございました。<br>このようなイベントの当選、参加は初めての事でした。立派な講師と親切なスタッフのおかげで、とても嬉しく、楽しい時間でした。<br>また機会がありましたら参加したいです。</p>
							</div>
						</div>
					</div>
					<div class="balloon balloon_widthmax mb man">
						<div class="inner">
							<div>
								<p>このたびは山田先生の盆栽イベントに参加させていただきありがとうございました。<br>60才を前にそろそろ何かゴルフ以外のひとりでできる趣味を持ちたいと思っていたところでした。<br>今回ラッキーにもチャンスをいただきトライできました。<br>最初は戸惑いましたが、先生方にご指導いただき、大変感動いたしました。<br>自分で創作した盆栽を家に飾り、水やりを毎朝日課にしております。<br>ありがとうございました。</p>
							</div>
						</div>
					</div>
					<div class="balloon balloon_widthmax mb woman">
						<div class="inner">
							<div>
								<p>盆栽づくり、非常に楽しかったです。自分で作った盆栽にここまで愛着が湧くとは考えていなかったので大きな発見でした。<br>今回のイベントをきっかけに季節ごとの盆栽を育てていけたらと夢も広がりました。興味の幅が広がった魅力あるイベントだったと思います。<br>参加できて良かったです。ありがとうございました。</p>
							</div>
						</div>
					</div>
					<div class="balloon balloon_widthmax mb woman">
						<div class="inner">
							<div>
								<p>先日はたいへんお世話になりました。<br>盆栽作りに参加させていただき、小さな驚きもあり、勉強にもなり、テレビ等で拝見する有名な先生のご指導も受けることができ、貴重なまた楽しい時間でした。<br>家でも少し盆栽の真似事をしており、失敗もあったため、ちゃんとしたお話とご指導を受けてみたいと思っておりました。実際に植え付けをするところから、なるほど、こうするのかと思うところも多く、1本作りの盆栽とはまた違う拵えの盆栽の作り方で細かい点も個々に教えて、直して下さりと具体的な体験ができました。<br>家に持ち帰り、水やりを朝夕に、近々と眺めながら少しづつ膨らんでいく蕾を真剣に観察しております。もうすぐ花が咲くだろうと楽しみにしております。<br>ありがとうございました。</p>
							</div>
						</div>
					</div>
					<div class="balloon balloon_widthmax mb woman">
						<div class="inner">
							<div class="fr">
								<figure>
									<img
									src="../../lib/img/event/report-bonsai/report-bonsai_guest.png"
									style="max-width:240px;"
									class="u-img__max">
								</figure>
							</div>
							<div>
								<p>先日は素敵なイベントに参加させていただき、ありがとうございました。<br>桜の盆栽づくり、とても楽しかったです。<br>先生もアシスタントの方たちも、優しくて素敵な方たちでした。<br>当日は、素人の私にも分かりやすい説明で丁寧に教えてくださいました。<br>また、家に帰ってからも日に日に蕾が膨らみ、花が開いていく様子を楽しんでいます。<br>今、ちょうど満開です。<br>今年はゆっくりお花見をすることができなかったので、今こうして自宅で小さなお花見ができることのは、私にとっても家族にとっても嬉しいサプライズです。<br>この花は、ぜひ来年も咲かせたいと思います。<br>またこういう機会があれば、参加
									させていただければ嬉しく思います。<br>本当にありがとうございました。</p>
							</div>
						</div>
					</div>
				</div>

				<div class="u-assist center" style="line-height:2;">
					<strong>ぜひ、次のイベントの開催をお楽しみに！</strong>
				</div>
			</section>
		</div>

	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
