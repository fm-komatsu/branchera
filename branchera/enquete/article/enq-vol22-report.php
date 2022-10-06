<?php
//base
include("../../function.php");
$content = get_id_data('11084');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . '-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article page-enquete-design__2";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/enquete/", "アンケート");
		include($inc_path . "/lib/inc/pan.php");
		include($inc_path . "/lib/inc/page/_enquete/enquete-header.php");
		?>

		<div class="main__wrapper">

			<section class="main__item mb3 mb1_sp">
				<h2 class="u-ttl__l">第22回アンケートレポート「収納に関するアンケート」</h2>
				<div class="u-assist_enq_low07 u-only__pc">
					回答期間　　　：　2022年4月21日（木）～5月8日（日）<br>
					回答者数　　　：　計6,031名<br>

				</div>
				<div class="u-assist_enq_low07 u-only__sp u-font__palt">
					回答期間：2022年4月21日（木）～5月8日（日）<br>
					回答者数：計6,031名<br>

				</div>
				<div class="mb2">
					<div>
						<img src="<?php echo $img_url ?>/enquete/report22/main-v.jpg" loading="lazy" class="u-only__pc u-img__max" alt="<?php echo $pageTtl ?>" />
						<img src="<?php echo $img_url ?>/enquete/report22/main-v_sp.jpg" loading="lazy" class="u-only__sp u-img__max" alt="<?php echo $pageTtl ?>" />
					</div>
				</div>
				<p class="report22__intro">テレワークもすっかり浸透し、「おうち時間」が日常になりましたね。おうちで過ごす時間が増えたからこそ、より快適な空間にするために、整理整頓に関心を寄せる人は多いのではないでしょうか。そこで今回は、会員のみなさまに収納についてのアンケートを実施しました！アンケートの結果をもとに、上手な収納のコツや役立つサービスについてもご紹介します。</p>
			</section>
			<section>
				<div>
					<img src="<?php echo $img_url ?>/enquete/report22/intro.jpg" loading="lazy" class="u-only__pc u-img__max" alt="ご回答いただいたみなさま、ありがとうございました！｜過去最多の回答数となりました！みなさま、本当にありがとうございます。内訳は、男性3,060人、女性2,866人、不明105人でした。全国から回答が寄せられたなかでも、特に、南関東地域と近畿地域の方が多く見られました。これだけ多くの方に回答いただけた理由は、おうちで過ごす時間が長くなったために、収納を見直す機会も増え、自然と収納に関する需要が高まったからではないかと推測できます。" />
					<img src="<?php echo $img_url ?>/enquete/report22/intro_sp.jpg" loading="lazy" class="u-only__sp u-img__max" alt="ご回答いただいたみなさま、ありがとうございました！｜過去最多の回答数となりました！みなさま、本当にありがとうございます。内訳は、男性3,060人、女性2,866人、不明105人でした。全国から回答が寄せられたなかでも、特に、南関東地域と近畿地域の方が多く見られました。これだけ多くの方に回答いただけた理由は、おうちで過ごす時間が長くなったために、収納を見直す機会も増え、自然と収納に関する需要が高まったからではないかと推測できます。" />
				</div>
			</section>
			<section class="report22__bg pb3">

				<div>
					<img src="<?php echo $img_url ?>/enquete/report22/q1__01.jpg" loading="lazy" class="u-only__pc u-img__max" alt="01　収納品｜70%の方が、収納に関してのお悩みやお困りがあるとの結果に…！" />
					<img src="<?php echo $img_url ?>/enquete/report22/q1__01_sp.jpg" loading="lazy" class="u-only__sp u-img__max" alt="01　収納品｜70%の方が、収納に関してのお悩みやお困りがあるとの結果に…！" />
				</div>
				<div class="event-online-btn">
					<img src="<?php echo $img_url ?>/enquete/report22/q1__02.jpg" loading="lazy" class="u-only__pc u-img__max" alt="中でも「衣類」の収納にみなさまお困りのご様子…｜収納品のなかでも、「衣類」の収納場所にお困りという方が多数を占める結果に。衣類は季節ごとに着用するものが変わり、量も増えやすいため、収納場所に困る不動の1位なのかもしれませんね。ほかにも、「食器」や「調理器具」などキッチン周りのお悩みも多くみられました。調理器具はものによって、形やサイズもバラバラなため、収納方法が難しくごちゃつきがちですね。" />
					<img src="<?php echo $img_url ?>/enquete/report22/q1__02_sp.jpg" loading="lazy" class="u-only__sp u-img__max" alt="中でも「衣類」の収納にみなさまお困りのご様子…｜収納品のなかでも、「衣類」の収納場所にお困りという方が多数を占める結果に。衣類は季節ごとに着用するものが変わり、量も増えやすいため、収納場所に困る不動の1位なのかもしれませんね。ほかにも、「食器」や「調理器具」などキッチン周りのお悩みも多くみられました。調理器具はものによって、形やサイズもバラバラなため、収納方法が難しくごちゃつきがちですね。" />
				</div>
				<div class="event-online-btn">
					<img src="<?php echo $img_url ?>/enquete/report22/q1__03.jpg" loading="lazy" class="u-only__pc u-img__max" alt="PICK UP!｜過去に行なったアンケートとの比較「衣類」｜前回、2019年に実施した第12回の収納に関するアンケートレポートと比較したところ、特に20代の方において「衣類の収納場所に困る」という方が大きく減少している傾向にありました。洋服も月額利用のサブスクを活用することが増えました。また、コロナ禍でおうち時間が長くなり、着ない洋服を整理したことや洋服を購入する機会も減ったことなどが推測できます。次回のアンケート結果でどう変化するのか気になるところです。" />
					<img src="<?php echo $img_url ?>/enquete/report22/q1__03_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="PICK UP!｜過去に行なったアンケートとの比較「衣類」｜前回、2019年に実施した第12回の収納に関するアンケートレポートと比較したところ、特に20代の方において「衣類の収納場所に困る」という方が大きく減少している傾向にありました。洋服も月額利用のサブスクを活用することが増えました。また、コロナ禍でおうち時間が長くなり、着ない洋服を整理したことや洋服を購入する機会も減ったことなどが推測できます。次回のアンケート結果でどう変化するのか気になるところです。" />
				</div>
				<div class="report22__q1-btn01">
					<div class="report22__q1-btn01__item_01">
						<img src="<?php echo $img_url ?>/enquete/report22/q1__04.jpg" loading="lazy" class="u-only__pc u-img__max" alt="" />
						<img src="<?php echo $img_url ?>/enquete/report22/q1__04_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="" />
					</div>
					<div class="report22__q1-btn01__item_02">
						<a data-scroll href="<?php echo $base_url; ?>/enquete/article/enq-vol12-report.php" data-ga-click="enq22_1">
							<img src="<?php echo $img_url ?>/enquete/report22/q1__05_btn.jpg" loading="lazy" class="u-only__pc u-img__max" alt="第12回のアンケートレポートはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report22/q1__05_btn_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="第12回のアンケートレポートはこちら" />
						</a>
					</div>
					<div class="report22__q1-btn01__item_03">
						<img src="<?php echo $img_url ?>/enquete/report22/q1__06.jpg" loading="lazy" class="u-only__pc u-img__max" alt="" />
						<img src="<?php echo $img_url ?>/enquete/report22/q1__06_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="" />
					</div>

				</div>
				<div>
					<img src="<?php echo $img_url ?>/enquete/report22/q1__07.jpg" loading="lazy" class="u-only__pc u-img__max" alt=" 収納オンラインイベントで専門家からレクチャー！｜左：「棚板活用で収納力アップ！」クローゼットに棚板を組み合わせるだけで収納力がアップ！モノのサイズに合わせて位置を調整すると、今ある収納をより効果的に活用できます。棚板を使用して、上手に収納しましょう！｜右：「衣類の収納方法！」たたんだ衣類を見やすくしまうにはラベリングが便利！クリップなどを使用してラベリングすると、衣類が探しやすくなりますし、見た目もきれいになります。ぜひお試しください♪" />
					<img src="<?php echo $img_url ?>/enquete/report22/q1__07_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="収納オンラインイベントで専門家からレクチャー！" style="margin-top: -2px;" />
					<img src="<?php echo $img_url ?>/enquete/report22/q1__08_sp.jpg" loading="lazy" class="u-only__sp u-img__max" alt="「棚板活用で収納力アップ！」クローゼットに棚板を組み合わせるだけで収納力がアップ！モノのサイズに合わせて位置を調整すると、今ある収納をより効果的に活用できます。棚板を使用して、上手に収納しましょう！" />
				</div>
				<div class="report22__q1-btn02">
					<div class="report22__q1-btn02__item_01 u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report22/q1__08.jpg" loading="lazy" class="u-only__pc u-img__max" alt="" />
					</div>
					<div class="report22__q1-btn02__item_02">
						<a data-ga-click="enq22_2" href="https://foris-online.com/" target="_blank">
							<img src="<?php echo $img_url ?>/enquete/report22/q1__08_btn.jpg" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report22/q1__09_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
						</a>
					</div>
					<div class="report22__q1-btn02__item_03 u-only__pc">
						<a data-ga-click="enq22_3" class="u-only__pc" href="<?php echo $base_url ?>/event/article/report-event-online02.php">
							<img src="<?php echo $img_url ?>/enquete/report22/q1__09_btn.jpg" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
						</a>
					</div>
					<div class="report22__q1-btn02__item_04 u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report22/q1__09.jpg" loading="lazy" class="u-only__pc u-img__max" alt="" />
					</div>
				</div>
				<div class="u-only__sp">
					<img src="<?php echo $img_url ?>/enquete/report22/q1__12_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="「衣類の収納方法！」たたんだ衣類を見やすくしまうにはラベリングが便利！クリップなどを使用してラベリングすると、衣類が探しやすくなりますし、見た目もきれいになります。ぜひお試しください♪" />

				</div>
				<div class="flex u-img__max u-only__pc">
					<div class="event-online-btn">
						<img src="<?php echo $img_url ?>/enquete/report22/q1__10.jpg" loading="lazy" class="u-only__pc u-img__max" alt="" />
					</div>
				</div>
				<div class="report22__q1-btn03 u-only__sp">
					<div class="report22__q1-btn03__item_02 u-only__sp">
						<a data-ga-click="enq22_3" class="u-only__sp" href="<?php echo $base_url ?>/event/article/report-event-online02.php">
							<img src="<?php echo $img_url ?>/enquete/report22/q1__14_btn_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
						</a>
					</div>
				</div>
				<div class="u-only__sp">
					<img src="<?php echo $img_url ?>/enquete/report22/q1__16_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="" style="margint-top:-6px;" />

				</div>
			</section>
			<section class="report22__bg pb3">
				<div>
					<img src="<?php echo $img_url ?>/enquete/report22/q2__01.jpg" loading="lazy" class="u-only__pc u-img__max" alt="02 収納品スペース｜お住まいの中で、『最も』片付けが行き届いていないと思う場所はどこですか？｜1位：リビング　2位：クローゼット　3位：押入れ｜こんな収納への不満の声がありました…｜左：近いうちに使うだろうと思い、すぐ分かる場所に置いておきたくてそのままにしてしまう。｜右：いったん収納したらそのままに…。だから、次から次へと荷物が増えて奥のものが取りづらくなってしまうんです。｜片付けが行き届いていない場所として、最も多くの方が回答したのは「リビング」でした。家族みんなが集まる場所なのでモノがあふれてしまうというご意見や、一人暮らしで部屋に収納が少なくリビングにモノを置かざるを得ないといったご意見がありました。そのほかにも、「クローゼット」や「押入れ」に関しては、閉めてしまうと外から目立たないため、後回しにしてしまうというご意見も挙げられていました。" />
					<img src="<?php echo $img_url ?>/enquete/report22/q2__01_sp.jpg" loading="lazy" class="u-only__sp u-img__max" alt="02 収納品スペース｜お住まいの中で、『最も』片付けが行き届いていないと思う場所はどこですか？｜1位：リビング　2位：クローゼット　3位：押入れ｜こんな収納への不満の声がありました…｜左：近いうちに使うだろうと思い、すぐ分かる場所に置いておきたくてそのままにしてしまう。｜右：いったん収納したらそのままに…。だから、次から次へと荷物が増えて奥のものが取りづらくなってしまうんです。｜片付けが行き届いていない場所として、最も多くの方が回答したのは「リビング」でした。家族みんなが集まる場所なのでモノがあふれてしまうというご意見や、一人暮らしで部屋に収納が少なくリビングにモノを置かざるを得ないといったご意見がありました。そのほかにも、「クローゼット」や「押入れ」に関しては、閉めてしまうと外から目立たないため、後回しにしてしまうというご意見も挙げられていました。" />

				</div>
				<div>
					<img src="<?php echo $img_url ?>/enquete/report22/q2__02.jpg" loading="lazy" class="u-only__pc u-img__max" alt="収納スペースを増やす時、検討されるのはどんな家具ですか？｜「カラーボックスなどの簡易収納家具」、「既製の収納家具」が全体の8割を占める結果になりました。確かに、カラーボックスのような簡易収納家具は安く購入でき、カラーバリエーションの豊富さや、縦置きと横置きどちらも可能なのでアイデア次第では自由にカスタマイズできます。また、既製の収納家具は、予算やお悩みによっていろいろと選べて選択肢が豊富ですよね。大きな収納家具もインターネットで気軽に購入でき、自分で組み立てられるものが多いというのも選ばれる理由かもしれません。｜しかし、既製品を使う時はこんな不安も ... ｜左：気に入ったデザイン、サイズを見付けるのが面倒。｜右：買ったものの、幅が微妙に合わず後悔した経験があります。" />
					<img src="<?php echo $img_url ?>/enquete/report22/q2__02_sp.jpg" loading="lazy" class="u-only__sp u-img__max" alt="収納スペースを増やす時、検討されるのはどんな家具ですか？｜「カラーボックスなどの簡易収納家具」、「既製の収納家具」が全体の8割を占める結果になりました。確かに、カラーボックスのような簡易収納家具は安く購入でき、カラーバリエーションの豊富さや、縦置きと横置きどちらも可能なのでアイデア次第では自由にカスタマイズできます。また、既製の収納家具は、予算やお悩みによっていろいろと選べて選択肢が豊富ですよね。大きな収納家具もインターネットで気軽に購入でき、自分で組み立てられるものが多いというのも選ばれる理由かもしれません。｜しかし、既製品を使う時はこんな不安も ... ｜左：気に入ったデザイン、サイズを見付けるのが面倒。｜右：買ったものの、幅が微妙に合わず後悔した経験があります。" />

				</div>
				<div>
					<img src="<?php echo $img_url ?>/enquete/report22/q2__03.jpg" loading="lazy" class="u-only__pc u-img__max" alt="これから暮らしに取り入れてみたい収納はありますか?｜これから取り入れたい収納には「壁面収納」と回答された方が多く、収納力のある広いスペースを必要としていることが分かりました。壁面収納のメリットは、お部屋のデッドスペースを活用して新たに大容量の収納スペースを確保できることです。さらに、見せる収納を実践すれば、インテリアとしても魅力的に見えますよね。そんな人気の壁面収納、実は長谷工リフォームで実現できるんです！" />
					<img src="<?php echo $img_url ?>/enquete/report22/q2__03_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="これから暮らしに取り入れてみたい収納はありますか？｜これから取り入れたい収納には「壁面収納」と回答された方が多く、収納力のある広いスペースを必要としていることが分かりました。壁面収納のメリットは、お部屋のデッドスペースを活用して新たに大容量の収納スペースを確保できることです。さらに、見せる収納を実践すれば、インテリアとしても魅力的に見えますよね。そんな人気の壁面収納、実は長谷工リフォームで実現できるんです！" />

				</div>
				<div>
					<img src="<?php echo $img_url ?>/enquete/report22/q2__04.jpg" loading="lazy" class="u-only__pc u-img__max" alt="収納のお悩みにRASHIKUがお応えします！｜RASHIKUの壁面収納で大容量の収納スペースを確保｜選ぶだけでセミオーダーが実現！ミリ単位で注文できるから、収納家具の「もう一歩」を解決♪｜「わが家にぴったりの家具がほしい」、「大容量の収納スペースがほしい」と思ったことはありませんか？そんなお悩みを抱いている皆さまへ、長谷工リフォームのオリジナルセミオーダー収納家具「RASHIKU」のご紹介です。RASHIKUでは、お住まいに合わせて、ミリ単位で調整できる収納家具をリーズナブルな価格で作れます！なかでも壁面収納は、今ある空間を最大限活用しつつ、大容量の収納スペースを確保できます。ぜひRASHIKUで、お住まいに合う大容量な壁面収納を実現してみましょう♪" />

				</div>
				<div class="report22__q2-btn01 u-only__sp">
					<div class="report22__q2-btn01__item_01">
						<img src="<?php echo $img_url ?>/enquete/report22/q2__05.jpg" loading="lazy" class="u-only__pc u-img__max" alt="収納のお悩みにRASHIKUがお応えします！｜大容量の収納スペースを確保！｜ミリ単位で注文できるから、収納家具の「もう一歩」を解決♪ ｜「わが家にぴったりの家具がほしい」、「大容量の収納スペースがほい」と思ったことはありませんか？そんなお悩みを抱いている皆さまへ長谷工リフォームのオリジナルセミオーダー収納家具「RASHIKU」のご紹介です。RASHIKUは、お住まいに合わせて、ミリ単位で調整できる収納家具をリーズナブルな価格で作れます！なかでも壁面収納は、今ある空間を最大限活用しつつ、大容量の収納スペースを確保できます。ぜひRASHIKUで、お住まいに合う大容量な壁面収納を実現してみましょう♪" />

					</div>
					<div class="report22__q2-btn01__item_02">
						<a data-ga-click="enq22_4" href="https://www.haseko.co.jp/hrf/reform/news/2022/RASHIKU_M%20series.html" target="_blank">
							<img src="<?php echo $img_url ?>/enquete/report22/q2__06_btn.jpg" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report22/q2__05_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />

						</a>

					</div>
					<div class="report22__q2-btn01__item_03 u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report22/q2__07.jpg" loading="lazy" class="u-only__pc u-img__max" alt="" />

					</div>

				</div>
				<div>
					<img src="<?php echo $img_url ?>/enquete/report22/q2__08.jpg" loading="lazy" class="u-only__pc u-img__max" alt="ブランシエラクラブでは、会員のみなさまの「声」を掲載中!｜左「ライフスタイルに合った上手な収納」「モノが多すぎる」「収納スペースが足りない」というご意見も多く寄せられました。そんな方に向けて、収納のプロに聞いた、上手に収納できるコツをご紹介しています！|右「クローゼット収納のグッドアイデア」クローゼットの不満は「狭い！」がダントツ。そんなお悩みを抱いている方は必見。クローゼットを無駄なく使いこなす方法をご紹介しています！ " />
					<img src="<?php echo $img_url ?>/enquete/report22/q2__07_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="ブランシエラクラブでは、会員のみなさまの「声」を掲載中｜「ライフスタイルに合った上手な収納」「モノが多すぎる」「収納スペースが足りない」というご意見も多く寄せられました。そんな方に向けて、収納のプロに聞いた、上手に収納できるコツをご紹介しています！" />

				</div>
				<div class="report22__q2-btn02">
					<div class="report22__q2-btn02__item_01">
						<img src="<?php echo $img_url ?>/enquete/report22/q2__09.jpg" loading="lazy" class="u-only__pc u-img__max" alt="" />

					</div>
					<div class="report22__q2-btn02__item_02">
						<a data-ga-click="enq22_5" href="<?php echo $base_url ?>/magazine/article/cafe-vol09-report.php">
							<img src="<?php echo $img_url ?>/enquete/report22/q2__10_btn.jpg" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
							<img src="<?php echo $img_url ?>/enquete/report22/q2__09_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
						</a>

					</div>
					<div class="report22__q2-btn02__item_03">
						<a data-ga-click="enq22_6" href="<?php echo $base_url ?>/magazine/article/cafe-vol18-report.php" class="u-only__pc">
							<img src="<?php echo $img_url ?>/enquete/report22/q2__11_btn.jpg" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />

						</a>

					</div>
					<div class="report22__q2-btn02__item_04 u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report22/q2__11.jpg" loading="lazy" class="u-only__pc u-img__max" alt="" />

					</div>

				</div>
				<div>
					<img src="<?php echo $img_url ?>/enquete/report22/q2__12.jpg" loading="lazy" class="u-only__pc u-img__max" alt="" />
					<img src="<?php echo $img_url ?>/enquete/report22/q2__11_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="「クローゼット収納のグッドアイデア」クローゼットの不満は「狭い！」がダントツ。そんなお悩みを抱いている方は必見。クローゼットを無駄なく使いこなす方法をご紹介しています！" />
				</div>
				<div class="report22__q2-btn03 u-only__sp">
					<div class="report22__q2-btn03__item_02">
						<a data-ga-click="enq22_6" href="<?php echo $base_url ?>/magazine/article/cafe-vol18-report.php" class="u-only__sp">
							<img src="<?php echo $img_url ?>/enquete/report22/q2__13_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
						</a>

					</div>
				</div>
				<div>
					<img src="<?php echo $img_url ?>/enquete/report22/q2__15_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="" />

				</div>
			</section>
			<section class="report22__bg">
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report22/q3__01.jpg" loading="lazy" class="u-only__pc u-img__max" alt="専門家に聞きたいこと｜収納に関する情報で知りたいこと、収納の専門家に聞きたいことは何ですか？｜最も多かったのは、「モノの整理方法」という回答でした。なかでも、服や布団などかさばるモノの収納にみなさまお困りのご様子ですね。ほかにも、「モノの捨て方」も多く、写真やアルバム、子ども用品など思い出が詰まっているので捨て方が分からないという意見もありました。どのようになったら捨てるべきなのか？捨てる捨てないのラインをどこに引くか、なかなか難しいところのようですね。" />
						<img src="<?php echo $img_url ?>/enquete/report22/q3__01_sp.jpg" loading="lazy" class="u-only__sp u-img__max" alt="専門家に聞きたいこと｜収納に関する情報で知りたいこと、収納の専門家に聞きたいことは何ですか？｜最も多かったのは、「モノの整理方法」という回答でした。なかでも、服や布団などかさばるモノの収納にみなさまお困りのご様子ですね。ほかにも、「モノの捨て方」も多く、写真やアルバム、子ども用品など思い出が詰まっているので捨て方が分からないという意見もありました。どのようになったら捨てるべきなのか？捨てる捨てないのラインをどこに引くか、なかなか難しいところのようですね。こんな声もありました｜「一度整理したけど、すぐに散らかってしまう」「どのように片付ければよいのか分からない」などといったお悩みが多くありました。みなさま、モノの整理方法や収納術についてプロの意見を聞きたいと思っているご様子ですね。ブランシエラクラブでは、収納に関するコンテンツをたくさんご紹介していますので、ぜひご覧ください！" />

					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report22/q3__02.jpg" loading="lazy" class="u-only__pc u-img__max" alt="こんな声もありました｜「一度整理したけど、すぐに散らかってしまう」「どのように片付ければよいのか分からない」などといったお悩みが多くありました。みなさま、モノの整理方法や収納術についてプロの意見を聞きたいと思っているご様子ですね。ブランシエラクラブでは、収納に関するコンテンツをたくさんご紹介していますので、ぜひご覧ください！" />
						<img src="<?php echo $img_url ?>/enquete/report22/q3__02_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="「せっかくきれいに片付けたのに、すぐごちゃごちゃになっちゃう...」。こんな経験はありませんか？そこで、【長谷工×おうちデトックス】がお届けする「整理収納サービス」のご紹介です！整理収納サービスとは、お客さまご自身で維持できる整理収納方法を、お客さまが主体となって一緒に作り上げていくサービスです。ぜひ、リバウンドしない整理術を一緒に身につけましょう♪" />

					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report22/q3__03.jpg" loading="lazy" class="u-only__pc u-img__max" alt="プロが解決!｜時間が経っても、キレイが長続き!リバウンドしない整理収納術!｜「せっかくきれいに片付けたのに、すぐごちゃごちゃになっちゃう...」。こんな経験はありませんか？そこで、【長谷工×おうちデトックス】がお届けする「整理収納サービス」のご紹介です！整理収納サービスとは、お客さまご自身で維持できる整理収納方法を、お客さまが主体となって一緒に作り上げていくサービスです。ぜひ、リバウンドしない整理術を一緒に身につけましょう♪" />

					</div>
					<div class="report22__q3-btn01">
						<div class="report22__q3-btn01__item_01 u-only__pc">
							<img src="<?php echo $img_url ?>/enquete/report22/q3__04.jpg" loading="lazy" class="u-only__pc u-img__max" alt="" />

						</div>
						<div class="report22__q3-btn01__item_02">
							<a data-ga-click="enq22_7" href="https://e-suteki.haseko.jp/living_services/kid-special-2.html" target="_blank">
								<img src="<?php echo $img_url ?>/enquete/report22/q3__05_btn.jpg" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
								<img src="<?php echo $img_url ?>/enquete/report22/q3__04_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
							</a>

						</div>
						<div class="report22__q3-btn01__item_03 u-only__pc">
							<img src="<?php echo $img_url ?>/enquete/report22/q3__06.jpg" loading="lazy" class="u-only__pc u-img__max" alt="" />

						</div>
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report22/q3__07.jpg" loading="lazy" class="u-only__pc u-img__max" alt="住まいレージでお得な生活を！｜ためたスマイルはこんなつかい方もできます！｜「長谷工グループのサービスを割引」「商品と交換」「キャンペーンに応募」" />
						<img src="<?php echo $img_url ?>/enquete/report22/q3__06_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="住まいレージでお得な生活を！｜ためたスマイルはこんなつかい方もできます！｜「長谷工グループのサービスを割引」「商品と交換」「キャンペーンに応募」" />

					</div>
					<div class="report22__q3-btn02">
						<div class="report22__q3-btn02__item_01 u-only__pc">
							<img src="<?php echo $img_url ?>/enquete/report22/q3__08.jpg" loading="lazy" class="u-only__pc u-img__max" alt="" />

						</div>
						<div class="report22__q3-btn02__item_02">
							<a data-ga-click="enq22_8" href="<?php echo $base_url ?>/smile/about-smile.php">
								<img src="<?php echo $img_url ?>/enquete/report22/q3__08_btn.jpg" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
								<img src="<?php echo $img_url ?>/enquete/report22/q3__08_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
							</a>

						</div>
						<div class="report22__q3-btn02__item_03 u-only__pc">
							<img src="<?php echo $img_url ?>/enquete/report22/q3__09.jpg" loading="lazy" class="u-only__pc u-img__max" alt="" />

						</div>
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report22/q3__10.jpg" loading="lazy" class="u-only__pc u-img__max" alt="ブランシエラクラブでは、プロが教えるクローゼット収納術を掲載中！｜「整理」「整頓」「収納」。片付けにはこの3つのスキルが必要です。整理収納アドバイザーの大橋わか先生監修のもと、収納のお悩みについて具体例を挙げながら片付けのコツをご紹介しています。プロのテクニックをご自宅の収納に活かしてくださいね♪" />
						<img src="<?php echo $img_url ?>/enquete/report22/q3__10_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="ブランシエラクラブでは、プロが教えるクローゼット収納術を掲載中！｜「整理」「整頓」「収納」。片付けにはこの3つのスキルが必要です。整理収納アドバイザーの大橋わか先生監修のもと、収納のお悩みについて具体例を挙げながら片付けのコツをご紹介しています。プロのテクニックをご自宅の収納に活かしてくださいね♪" />

					</div>
					<div class="report22__q3-btn03">
						<div class="report22__q3-btn03__item_01 u-only__pc">
							<img src="<?php echo $img_url ?>/enquete/report22/q3__10-42.jpg" loading="lazy" class="u-only__pc u-img__max" alt="" />
							<img src="<?php echo $img_url ?>/enquete/report22/q3__11_sp.jpg" loading="lazy" class="u-only__sp u-img__max" alt="" />

						</div>
						<div class="report22__q3-btn03__item_02">
							<a data-ga-click="enq22_9" href="<?php echo $base_url ?>/magazine/article/sumai-sos-vol01.php">
								<img src="<?php echo $img_url ?>/enquete/report22/q3__11_btn.jpg" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
								<img src="<?php echo $img_url ?>/enquete/report22/q3__04_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
							</a>

						</div>
						<div class="report22__q3-btn03__item_03 u-only__pc">
							<img src="<?php echo $img_url ?>/enquete/report22/q3__12.jpg" loading="lazy" class="u-only__pc u-img__max" alt="" />
							<img src="<?php echo $img_url ?>/enquete/report22/q3__13_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="" />

						</div>
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report22/q3__13.jpg" loading="lazy" class="u-only__pc u-img__max" alt="" />

					</div>
				</div>
			</section>
			<section class="mb5_sp">
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report22/outro__01.jpg" loading="lazy" class="u-only__pc u-img__max" alt="貴重なご意見ありがとうございました!｜ブランシエラクラブでは、みなさんの声をもとに今後もコンテンツやイベントを充実させていきます!ご期待ください!" />
						<img src="<?php echo $img_url ?>/enquete/report22/outro__01_sp.png" loading="lazy" class="u-only__sp u-img__max" alt="貴重なご意見ありがとうございました!｜ブランシエラクラブでは、みなさんの声をもとに今後もコンテンツやイベントを充実させていきます" />

					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report22/outro__02.jpg" loading="lazy" class="u-only__pc u-img__max" alt="みなさまの収納事情を伺ったアンケートの結果はいかがでしたか？今回は、収納のお悩みについて、ちょっとしたコツや簡単にできる収納方法についてもご紹介してきました。ぜひ、ご活用いただき、快適なおうちづくりにお役立てくださいね。また、今後も整理収納に関するコンテンツやサービスを充実させていく予定です。どうぞご期待ください！" />
						<img src="<?php echo $img_url ?>/enquete/report22/outro__02_sp.jpg" loading="lazy" class="u-only__sp u-img__max" alt="みなさまの収納事情を伺ったアンケートの結果はいかがでしたか？今回は、収納のお悩みについて、ちょっとしたコツや簡単にできる収納方法についてもご紹介してきました。ぜひ、ご活用いただき、快適なおうちづくりにお役立てくださいね。また、今後も整理収納に関するコンテンツやサービスを充実させていく予定です。どうぞご期待ください！" />

					</div>

					<div>
						<img src="<?php echo $img_url ?>/enquete/report22/outro__03.jpg" loading="lazy" class="u-only__pc u-img__max" alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！" />
						<img src="<?php echo $img_url ?>/enquete/report22/outro__03_sp.jpg" loading="lazy" class="u-only__sp u-img__max" alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！" />

					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report22/outro__04.jpg" loading="lazy" class="u-only__pc u-img__max" alt="第23回アンケートは2022年9/1(木)〜実施！みなさまのご回答をお待ちしております！" />
						<img src="<?php echo $img_url ?>/enquete/report22/outro__04_sp.jpg" loading="lazy" class="u-only__sp u-img__max" alt="第23回アンケートは2022年9/1(木)〜実施！みなさまのご回答をお待ちしております！" />

					</div>

				</div>
			</section>
		</div>
		<?php include($inc_path . "/lib/inc/page/_enquete/__back_num.php") ?>
	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
