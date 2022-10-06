<?php
//base
include("../../function.php");
$content = get_id_data('23001');
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article page-monozukuri";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

?>
<main class="monozukuri-main">
	<article class="monozukuri-main__row">
		<?php
				$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
				$panAry[] = array( "/magazine/index_monozukuri.php", "ものづくりへの想い" );
				include( $inc_path . "/lib/inc/pan.php" );
				include($inc_path . "/lib/inc/page/_magazine/__monozukuri-main-header.php");
				$monozukuri_img = 'monozukuri_interview01';
        include($inc_path . "/lib/inc/page/_magazine/__monozukuri-main-v.php");
        ?>
		<section class="main__wrapper">
			<h2 class="mb3">
				<img
				data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/topheading.png"
				data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/topheading@2x.png"
				alt="建築の根源となる建築材料。その研究を通し住まう人の“快適”に挑み続ける｜長谷工コーポレーション 技術研究所　工学博士　吉岡　昌洋"
				style="max-width: 742px;"
				class="u-img__max u-only__pc"
				>
				<img
				data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/topheading-sp.png"
				data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/topheading-sp@2x.png"
				alt="建築の根源となる建築材料。その研究を通し住まう人の“快適”に挑み続ける｜長谷工コーポレーション 技術研究所　工学博士　吉岡　昌洋"
				style="max-width: 666px;"
				class="u-img__max  u-only__sp"
				>
			</h2>
			<div class="monozukuri-heading__intro u-font__bold mb3">
				<p class="mb2 u-font__palt">
				私たちは日々、多くの建築物に出入りしながら生活している。<br>商業施設、オフィスビル、ホテル──そして、帰っていく家。その「人が住む建物」に、とりわけ強く興味を惹かれた人がいる。長谷工技術研究所で素材研究を重ねている、工学博士・吉岡昌洋だ。
				</p>
				<p class="mb2">住居とは、人が生まれ、成長する場所。<br>食事をし、語らい、眠る場所。<br>人生の中で、最も長い時間を過ごす場所。</p>
				<p class="u-font__palt">そんな建物を、少しでも快適なものにしたい。そして、そこで暮らす人の人生が豊かなものになる手助けをしたい。普段は表に出ることのない研究者の、マンションに対する真摯な想いを聞いた。</p>
			</div>
			<section>
				<div>
					<h3 class="mb3">
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading01.png"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading01@2x.png"
						alt="マンションに関わるすべての「建築材料」が研究対象"
						style="max-width: 740px;"
						class="u-img__max u-only__pc"
						>
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading01-sp.png"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading01-sp@2x.png"
						alt="マンションに関わる全ての「建築材料」が研究対象"
						style="max-width: 607px;"
						class="u-img__max  u-only__sp"
						>
					</h3>
					<div class="mb3">
						<p>マンションの施工会社での研究職といっても、何をやっているのか想像がつかないかもしれませんが、私の場合、マンションをつくるすべての「材料」が研究対象です。学生のころからの専門はコンクリートですが、今はコンクリートを保護するための仕上げ材の研究なども行なっており、コンクリート以外にも幅広い材料が研究対象となっています。</p>
					</div>
				</div>
				<div class="mb3">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__01.jpg"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__01@2x.jpg"
						alt="多目的実験棟"
						style="max-width: 740px;"
						class="u-img__max u-only__pc"
						>
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__01-sp.jpg"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__01-sp@2x.jpg"
						alt="多目的実験棟"
						style="max-width: 607px;"
						class="u-img__max  u-only__sp"
						>
						<figcaption class="u-fig__cap_right"><span class="u-small">多目的実験棟</span></figcaption>
					</figure>
				</div>
				<div class="mb3">
					<p>
					研究の内容は、高強度コンクリート用の補修材料の開発、コンクリートにひび割れが入りにくくする薬剤の性能テスト、建築塗料の性能検査など、実にさまざまです。<br>長谷工は、マンションの設計・施工から販売・管理・リフォームまで、マンションに関わる事業すべてに携わっているため、各グループ会社との密な連携が取りやすいという強みがあります。その強みを活かして、現場での課題を抽出し、技術研究所で解決方法を模索しているんです。もちろん、自ら新築工事や修繕工事の現場に赴き、課題を見出すことにも取り組んでいます。
					</p>
				</div>
				<div class="monozukuri-heading__footer u-font__bold mb3">
					<p>“建築”と聞くと、CAD（Computer Aided Design）を駆使して設計図を描いたり、工事現場で実際にものづくりをしているようなイメージが強い。吉岡は、建築を志した他の人たちと異なり、なぜ「材料」を研究する道を選んだのか。</p>
				</div>
			</section>
			<section>
				<div>
					<h3 class="mb3">
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading02.png"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading02@2x.png"
						alt="建物すべての根源となるのが「材料」であると気づいた"
						style="max-width: 740px;"
						class="u-img__max u-only__pc"
						>
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading02-sp.png"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading02-sp@2x.png"
						alt="建物すべての根源となるのが「材料」であると気づいた"
						style="max-width: 607px;"
						class="u-img__max  u-only__sp"
						>
					</h3>
					<div class="mb3">
						<p>子どものころから、「ものづくり」に興味があったんです。ものをつくることなら何でも楽しいと感じていましたが、次第にその興味は建物へと移っていき、建築の道へ進むことになりました。大きな建物が好きだったんですね。<br>建築の世界に入る人の多くは、漠然と設計などに興味を惹かれるものですが、私の場合は、デッサン力に限界を感じたり、大学でいろいろな経験をするうちに、建物をつくる根源である「材料」に興味を持ちました。どんな素晴らしいデザインも、それを建築として実現するのは建築素材です。だからこそ、建築材料を研究していこうと思ったんです。</p>
					</div>
				</div>
				<div class="mb3">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__02.jpg"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__02@2x.jpg"
						alt="<?php echo $pageTtl ?>"
						style="max-width: 740px;"
						class="u-img__max u-only__pc"
						>
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__02-sp.jpg"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__02-sp@2x.jpg"
						alt="<?php echo $pageTtl ?>"
						style="max-width: 607px;"
						class="u-img__max  u-only__sp"
						>
					</figure>
				</div>
				<div class="monozukuri-heading__footer u-font__bold mb3">
					<p>大学で学んだコンクリート研究の知識を活かすため、長谷工コーポレーションへ入社した吉岡。入社後は、長谷工技術研究所でコンクリートの耐久性を高める研究に励むことになる。</p>
				</div>
			</section>
			<section>
				<div>
					<h3 class="mb3">
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading03.png"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading03@2x.png"
						alt="コンクリートの耐久性を高め、安全な生活環境を届けたい"
						style="max-width: 740px;"
						class="u-img__max u-only__pc"
						>
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading03-sp.png"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading03-sp@2x.png"
						alt="コンクリートの耐久性を高め、安全な生活環境を届けたい"
						style="max-width: 607px;"
						class="u-img__max  u-only__sp"
						>
					</h3>
					<div class="mb3">
						<p>そもそもコンクリートは耐久性の高い素材です。潰される力には非常に強いのですが、一方で引っ張る力に弱いという性質があります。日本には地震がありますから、引っ張る力にも強くなければなりません。そこで、コンクリートの中に鉄筋を入れることで、引っ張る力にも強いもの（鉄筋コンクリート）になったわけです。</p>
					</div>
				</div>
				<div class="mb3">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__03.jpg"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__03@2x.jpg"
						alt="コンクリート圧縮強度実験｜<?php echo $pageTtl ?>"
						style="max-width: 740px;"
						class="u-img__max u-only__pc"
						>
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__03-sp.jpg"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__03-sp@2x.jpg"
						alt="コンクリート圧縮強度実験｜<?php echo $pageTtl ?>"
						style="max-width: 607px;"
						class="u-img__max  u-only__sp"
						>
						<figcaption class="u-fig__cap_right"><span class="u-small">コンクリート圧縮強度実験</span></figcaption>
					</figure>
				</div>
				<div class="mb3">
					<p>
					ところが、鉄筋は時間の経過と共にサビやすくなります。<br>コンクリートはアルカリ性が強い素材のため、通常、鉄筋はサビないですが、二酸化炭素と反応するなどして時間が経つにつれ、そのアルカリ性は失われていきます。外気に触れている箇所から、徐々に内部に向かって反応していくようなイメージですね。このアルカリ性が失われていく現象を「中性化」というのですが、中性化が鉄筋まで到達して水分が加わると、鉄筋がサビはじめて膨らみ、その膨らむ力でコンクリートに亀裂が入ってしまうのです。<br>この中性化からコンクリートを守るために、重要な働きをするのが「仕上げ材」です。よく、マンションの外壁にタイルが貼ってあるのを見かけると思いますが、あのタイルはただのデザインではなく、コンクリートが外気に触れて中性化するのを防ぐ効果もあります。このような仕上げ材の研究も、私の仕事のひとつです。コンクリート自体の強度を上げるだけでなく、長い年月を見据えた研究が安全な生活の提供につながると考えます。</p>
				</div>
			</section>
			<section>
				<div>
					<h3 class="mb3">
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading04.png"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading04@2x.png"
						alt="これからの課題は大規模修繕の負担軽減　住んでいる人が不安に思っていることを、いかに取り除くかを考えたい。"
						style="max-width: 740px;"
						class="u-img__max u-only__pc"
						>
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading04-sp.png"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading04-sp@2x.png"
						alt="これからの課題は大規模修繕の負担軽減　住んでいる人が不安に思っていることを、いかに取り除くかを考えたい。"
						style="max-width: 607px;"
						class="u-img__max  u-only__sp"
						>
					</h3>
					<div class="mb3">
						<p class="mb2">新築マンションにおけるコンクリートの品質は、かなり高いレベルまできていると考えています。そうしたなかでの今の課題は、「マンションの大規模修繕における費用面・精神面の負担を軽減する」ということ。<br>大規模修繕には、数ヵ月以上にわたる工事期間が必要になりますが、使用する材料の性能や施工性を上げることによって品質の向上を目指し、また施工の効率を上げて、工期を短くすることで修繕費などの負担を下げたいと考えているんです。特に超高層マンションはゴンドラ作業等で、作業効率が悪くなりがちなので、材料と施工の技術開発によって改善効果が期待できます。</p>
						<p>これは、結果的に住んでいる方の暮らしの精神的な負担を軽減することにもつながると思います。外壁にネットが掛かった状態も、工事が長く続くことも、心理的な負担になってしまいますよね。そういった、住んでいる方の不安をいかに取り除くかということを、これからも材料と施工の面から考えていきたいと思っています。</p>
					</div>
				</div>
				<div class="mb3">
					<figure>
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__04.jpg"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__04@2x.jpg"
						alt="<?php echo $pageTtl ?>"
						style="max-width: 740px;"
						class="u-img__max u-only__pc"
						>
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__04-sp.jpg"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__04-sp@2x.jpg"
						alt="<?php echo $pageTtl ?>"
						style="max-width: 607px;"
						class="u-img__max  u-only__sp"
						>
					</figure>
				</div>
				<div class="mb3">
					<p>
					このように、超高層マンションの大規模修繕では特に課題が多く、日本建築仕上学会で委員会を立ち上げて数年間に渡り検討を続けており、幸運にも私も委員会に参加することができました。そのときの内容は、委員会の著書として「超高層マンション大規模修繕に関する考え方」（2017年出版）というタイトルで書籍化もされました。そこで得た経験は必ず今後の研究に活きると思います。</p>
				</div>
				<div class="monozukuri-heading__footer u-font__bold mb3">
					<p>耳に残ったのは、何度も繰り返された「住まう方へ安全・安心を」という言葉。何事もなく建っているのが当たり前だと思っていた住まいには、その存在を確かなものにするための、たゆまぬ研究があったことに気づかされた。最後に、吉岡の研究に対するモットーを聞いてみた。</p>
				</div>
			</section>
			<section>
				<div class="mb3">
					<h3 class="mb3">
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading05.png"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading05@2x.png"
						alt="常にアンテナを張って最新の情報を取り入れること　そして、いつもで常識を疑うこと"
						style="max-width: 740px;"
						class="u-img__max u-only__pc"
						>
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading05-sp.png"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/heading05-sp@2x.png"
						alt="常にアンテナを張って最新の情報を取り入れること　そして、いつもで常識を疑うこと"
						style="max-width: 607px;"
						class="u-img__max  u-only__sp"
						>
					</h3>
					<div>
						<p class="mb2">私には、2つのモットーがあります。1つは、“常にアンテナを張って幅広く最新の情報を取り入れる”ことです。建築や材料のことはもちろん、専門外の分野のこと、たとえばAI・ロボット・ドローンなどについての展示会や災害に関するシンポジウムにも、積極的に足を運ぶようにしています。なぜかというと、建築は関連する分野が幅広く、複雑だからです。</p>
						<p>マンションは天候に影響を受け、自然災害との関わりも大きい。そして人が住んでいるのだから、心理面も関係する。そうやって、いろいろな分野が関係しているものだからこそ、いろいろな情報を取り入れることが研究に活かされると思うんです。</p>
					</div>
					<div class="mb3 u-clearfix">
						<figure class="u-float__right">
							<img
							data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__05.jpg"
							data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__05@2x.jpg"
							alt="長谷工コーポレーション技術研究所　工学博士　吉岡　昌洋｜<?php echo $pageTtl ?>"
							style="max-width: 297px;"
							class="u-img__max u-only__pc"
							>
							<img
							data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__05-sp.jpg"
							data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__05-sp@2x.jpg"
							alt="長谷工コーポレーション技術研究所　工学博士　吉岡　昌洋｜<?php echo $pageTtl ?>"
							style="max-width: 607px;"
							class="u-img__max  u-only__sp"
							>
						</figure>
						<p class="mb2">そのなかで、建築は人の暮らし、命に関わるものです。過去のデータを鵜呑みにして、取り返しのつかないことを起こしてはならない。だからこそ、過去の研究も実際に自分で試して、自分の目で確認することを心がけているんです。たとえ、外からは一見無駄なように感じられても、このモットーは変えてはいけないことだと思っていますね。</p>
						<p>もう1つのモットーは、“常識を疑う”ということです。当たり前のことを当たり前と捉えず、自分で確認すること。多くの方が感じていることだと思いますが、今はあらゆるものごとが非常なスピードで変化している時代です。昔の常識があっさり覆されることも、そう珍しいことではないでしょう。</p>
					</div>
				</div>
				<div class="monozukuri-heading__footer u-font__bold mb3">
					<p>建築をつくるものは、建築材料。そして、その材料を上手く活かしているのは、研究者の誠実な姿勢だった。こうした信念のひとつひとつが、今日の心休まる住まいへとつながっている。</p>
				</div>
			</section>
			<div class="monozukuri-interview">
				<div class="monozukuri-interview__row">
					<figure class="monozukuri-interview__img w35">
						<img
						data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__06-sp.png"
						data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__06-sp@2x.png"
						alt="長谷工コーポレーション技術研究所　工学博士　吉岡　昌洋｜<?php echo $pageTtl ?>"
						style="max-width: 200px;"
						class="u-img__max u-only__sp center mb3"
						>
					</figure>
					<div class="monozukuri-interview__box">
						<div class="flex flex__between">
							<figure class="monozukuri-interview__img w35">
								<img
								data-src="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__06.jpg"
								data-retina="<?php echo $img_url; ?>/magazine/monozukuri/monozukuri_interview01/img__06@2x.jpg"
								alt="長谷工コーポレーション技術研究所　工学博士　吉岡　昌洋｜<?php echo $pageTtl ?>"
								style="max-width: 250px;"
								class="u-img__max u-only__pc"
								>
							</figure>
							<div class="w65 monozukuri-interview__txt">
								<h5 class="mb1 monozukuri-interview__ttl"><span class="u-small">長谷工コーポレーション 技術研究所</span><br>工学博士　吉岡　昌洋</h5>
								<p>2001年長谷工コーポレーション入社。鉄筋コンクリート造建築物の品質確保、および補修方法に関する研究の他、マンションの大規模修繕の品質向上のための技術開発に取り組む。マンションの建築材料全般の研究開発従事し、2009年に博士（工学）学位取得。2009年より首都大学東京非常勤講師兼務。</p>
							</div>
						</div>
					</div>
				</div>
			</div>
      <?php
        include ($inc_path."/lib/inc/page/_magazine/__back_num_monozukuri.php");
      ?>
		</section>
	</article>
</main>
<?php
    $toindex_url = "/magazine/index_monozukuri.php";
    include($inc_path . "/lib/inc/toindex__magazin.php");
    ?>
<?php  include($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include($inc_path."/lib/inc/footer.php"); ?>
<?php  include($inc_path."/lib/inc/foot.php");
