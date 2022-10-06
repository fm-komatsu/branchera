<?php
//base
include ("../../function.php");
$content = get_id_data('27005');
$pageTtl = 'ハウスダストの対策法。掃除の時間と順番で予防効果アップ！';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'ハウスダストの対策法を解説！リビングの床や寝具、ぬいぐるみなど、場所別・アイテム別にハウスダスト対策のポイントをご紹介します。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cleaning";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");

//release date
$release_year = "2022";
$release_month ="3";
$release_day ="31";
?>
<main class="main">
  <article class="main__row ">
    <?php
		$panAry[] = array("/magazine/" ,"ブランシエラマガジン");
    $panAry[] = array("/magazine/index_comic03.php" ,"部屋のお掃除プロ監修 三毛猫きらりのお掃除攻略ガイド");
    include ($inc_path."/lib/inc/pan.php");
    ?>
		<div>
			<div>
				<div class="foris__main-v center mt2 mt0_sp mb3">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/05/main-v@2x.jpg" alt="" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/05/main-v-sp@2x.jpg" alt="" class="u-img__max u-only__sp center" loading="lazy">
				</div>
			</div>
		</div>
		<div class="technic__chara u-only__pc mb3">
			<a href="<?php echo $img_url ?>/magazine/comic03/cleaning/common/main-v-chara@2x.jpg" class="chara-btn center mfp-btn__img">登場人物紹介はこちら</a>
    </div>
		<div class="technic__chara u-only__sp">
			<a href="<?php echo $img_url ?>/magazine/comic03/cleaning/common/main-v-chara-sp@2x.jpg" class="chara-btn center mfp-btn__img pt0 pb0">登場人物紹介はこちら</a>
    </div>
    <div class="main__wrapper">
      <section class="main__item mb8 mb4_sp">
        <h2 class="cleaning01__ttl u-font__palt">ハウスダストの対策法。掃除の時間と順番で予防効果アップ！</h2>
					<p class="cleaning01__desc">たまりやすいハウスダストの掃除の仕方は？掃除の時間と順番をご紹介。</p>
          <time datetime=”2022年3月31日”>2022年4月20日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb hikari01">
							<div class="inner-border">
								<div>
									<p>最近自分の部屋にいると目がかゆくてつらいよ…<br>どうしてだろう？</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>	
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p class="u-font__palt">それ、ハウスダストが原因じゃないかな？<br><strong>ハウスダストは空気中に漂う1mm以下の見えにくいほこりで、吸い込むと鼻水や目のかゆみが出る</strong>場合があるニャ。<br>普段の掃除でもハウスダストを予防することはできるから、やってみよう！</p>
								</div>
							</div>
						</div>
					</div>
					<div class="cleaning_contents contents">
						<div class="contents__row">
							<div class="w25 contents__ttl">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01@2x.png" class="u-img__max u-only__pc center" style="max-width:133px;" loading="lazy">
							</div>
							<div class="w5 contents__line">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line@2x.png" class="u-img__max u-only__pc center" style="max-width:12px;" loading="lazy">
							</div>
							<div class="u-only__sp">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01-sp@2x.png" class="u-img__max u-only__sp mb3 center" style="max-width:146px;" loading="lazy">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line-sp@2x.png" class="u-img__max u-only__sp center mb3" loading="lazy">
							</div>
							<div class="w70">
								<div class="contents__list">
									<ul>
										<li><a data-scroll href="#housedust01">ハウスダストの原因はダニやカビ！</a></li>
										<li><a data-scroll href="#housedust02">ハウスダストを取り除く掃除のポイント</a></li>
										<li><a data-scroll href="#housedust03">見落としがち！アイテム別ハウスダスト対策</a></li>
										<li><a data-scroll href="#housedust04">空気中のハウスダストにも対策をしよう</a></li>
									</ul>
								</div>	
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="housedust01">ハウスダストの原因はダニやカビ！</h3>
				<div>
					<figure class="w50 u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/05/cleaning05-01.jpg" class="u-img__max mb1_sp" alt="虫眼鏡でハウスダストを調べる女の子" loading="lazy">
					</figure>
					<div>
						<p class="mt0 mb2">ハウスダストとは、家の中にある1mm以下の小さなほこりのこと。ハウスダストに含まれる物質は、細菌やウイルス、ダニやその死骸とフン、カビ、繊維など。そして外から持ってきた土や花粉などです。大きさも、ウイルスや細菌といった0.01mm以下の小さなものから、ダニや繊維などの0.1mm～1mmの比較的大きなものまでさまざまです。<br>どちらのハウスダストも非常に小さいため、人が動くたびに舞い上がり、空気中に漂います。<br>ハウスダストを吸い込むことでアレルギー性鼻炎や気管支喘息、アトピー性皮膚炎などのハウスダストアレルギーを引き起こすこともあるといわれます。今回は、ハウスダストを発生させないための予防方法をご紹介します。</p>
					</div>
				</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="housedust02">ハウスダストを取り除く掃除のポイント</h3>
					<p class="level">■所要時間：15分～<br>■難易度：★☆☆☆☆<br>■掃除頻度の目安：ほぼ毎日</p>
					<p class="mb3">ハウスダストは、リビングや寝室など家のあらゆる場所に舞っています。ウイルスや細菌のような小さなハウスダストが常に空気中を漂っているのに対し、1mmに近い大きなハウスダストの場合は、床や棚、机や照明器具の上、家具の隙間などに落ちていきます。これが降り積もると、目に見えるほこりとなります。ハウスダストを抑えるためには、普段の掃除が大切です。ハウスダストを効果的に取り除く掃除の手順をご紹介します。</p>
					<h4 class="cleaning01__ttl_m mb2">部屋の掃除は朝がおすすめ</h4>
					<p class="mb2">朝はハウスダストが床にたまっている状態のため、掃除に最適な時間です。<br>ハウスダストはとても軽いため、人が動く昼間に舞い上がり、人が寝ている夜間にゆっくりと落ちていき、朝には床にたまっているのです。<br>人が活動し始めると簡単に舞い上がってしまうので、その前に掃除を始めましょう。</p>
					<h4 class="cleaning01__ttl_m mb2">[ 1 ] 拭き掃除</h4>
					<p class="mb2">まずは高い所から順番に拭き掃除をしていくことをおすすめします。たとえば、家具や家電の上などです。</p>
					<p class="mb2">ハウスダストのなかでも、<strong>その場に軽くのっているものであれば、ハンディワイパー（ハンディモップ）で</strong>簡単に拭き取れます。<br>しかし、ハウスダストが水分や油分を吸収すると、フローリングや壁などの素材にこびりつくようになります。黒ずみのように見える場合は、<strong>水拭きをするか、洗剤で拭き取り</strong>ます。何もしないまま放っておくと、ニオイの原因や雑菌のすみかになってしまいますから注意しましょう。</p>
					<h4 class="cleaning01__ttl_m mb2">[ 2 ] 掃除機かけ</h4>
					<div class="flex between mb3">
						<figure class="w50">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/05/cleaning05-02.png" class="u-img__max mb1_sp" alt="掃除機のかけ方" loading="lazy">
						</figure>
						<div class="w50">
							<p class="mb2">拭き掃除が終わったら、掃除機をかけます。<br>拭き掃除をする前に掃除機をかけてしまうと、掃除機の動きや排気でハウスダストが舞い上がってしまいます。</p>
						</div>
					</div>
					<div class="urawaza mb3 mt7">
						<div class="urawaza__row">
							<div>
								<h4 class="center mb2">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza.png"
									data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza@2x.png"
									alt="裏技 掃除機はかけ方がポイント" style="max-width:254px; margin-top:-40px;" class="u-img__max">
								</h4>
							</div>
							<h5 class="urawaza__ttl">掃除機はかけ方がポイント</h5>
							<div class="flex between">
								<figure class="w30 mt2 center">
									<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/urawaza@2x.png" class="u-img__max center" style="max-width:128px;" alt="きらりアイコン" loading="lazy">
								</figure>
								<div class="w70">
									<p class="mb2">掃除機のかけ方ひとつで、効果的な掃除が可能になります。掃除機は<strong>遠くから手前に引くように</strong>かけましょう！掃除機のヘッドの部分に付いているヘッドブラシの構造は、引くときのほうがごみを吸い上げる力が強いためです。</p>
								</div>
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb3">
        <h3 class="cleaning01__secttl mb3" id="housedust03">見落としがち！アイテム別ハウスダスト対策</h3>
				<div class="flex between mb2">
					<figure class="w50">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/05/cleaning05-03.jpg" class="u-img__max mb1_sp" alt="ベッドで睡眠をする女性" loading="lazy">
					</figure>
					<div class="w50">
						<p>ハウスダストは床や家具の上だけでなく、布団やカーテンなど毎日人が触れるアイテムにもたまります。また、子どもが触るぬいぐるみも、ハウスダストが付きやすいため、掃除が必要になります。<br>大切な家族のためにもアイテムごとに適したハウスダスト対策を行ないましょう！</p>
					</div>
				</div>
			</section>
      <section class="main__item mb8 mb4_sp">
				<h4 class="cleaning01__ttl_m mb2">寝具</h4>
				<p class="mb2">布団やマットレスは、ハウスダストが増えやすい場所のひとつです。布団にはダニの栄養になる人の毛髪や汗、垢が多く含まれています。人が寝ている間に、体温が上がることで布団の温度も上がり、ダニが増えやすい環境になります。<br>ダニのフンや死骸、人の毛髪、汗などは水溶性の汚れのため、水で洗い流すのが有効です。</p>
				<p class="mb2">洗いやすく乾きの早い<strong>シーツやタオルケット、掛け布団・枕カバーは週に2〜3回洗濯</strong>をします。布団は、洗えるものであれば年に1回丸洗いをしましょう。</p>
				<p class="mb2">丸洗いが難しい場合は、<strong>布団乾燥機やコインランドリーの乾燥機を使ったり、寝室の窓を開けて通気をよくしたりするだけでも脱臭やダニ退治の効果</strong>があります。<br>また、布団を選ぶ際は、ダニが入りにくい高密度の繊維を使っているものや、ダニを通さない縫い方をしたものを選ぶとよいでしょう。</p>
				<p class="mb2">マットレスのハウスダストは、布団用掃除機を使って吸い取りましょう。</p>
				<h4 class="cleaning01__ttl_m mb2">カーテン</h4>
				<div>
					<figure class="w50 u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/05/cleaning05-04.jpg" class="u-img__max mb1_sp" alt="部屋のカーテン" loading="lazy">
					</figure>
					<div>
						<p class="mb2">カーテンはハウスダストを集めやすいアイテムです。また、湿気や窓の結露が多い時期はカビが発生しやすいため、アレルギー症状を引き起こす原因にもなります。</p>
						<p class="mb2">そのため、<strong>カーテンはご家庭でも洗えるものを選び、年に2回は洗濯</strong>することをおすすめします。洗濯してハウスダストや汚れを取り除いた後、除菌用アルコールスプレーをかけるのも有効です。特に<a href="<?php echo($base_url)?>/magazine/article/cafe-vol27-report.php" class="recipe-design__link" data-ga-click="cleaning05_2">結露</a>の発生しやすい季節は1日1回の頻度でかけましょう。<br>ただし、素材によっては変色する恐れもあるので、目立たない裾裏で一度試してから使用するようにしてくださいね。</p>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">ぬいぐるみ</h4>
				<div>
					<figure class="w50 u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/05/cleaning05-05.jpg" class="u-img__max mb1_sp" alt="ぬいぐるみを抱える子ども" loading="lazy">
					</figure>
					<div>
						<p class="mb2">ぬいぐるみは、アクリル、フェイクファー、ポリエステルなど静電気を帯びやすい素材でできていることが多く、ハウスダストを引き寄せやすいアイテムです。また、子どもの手垢や食べこぼしなどが付くことで、ぬいぐるみはダニが発生しやすい環境になっている恐れがあります。</p>
						<p class="mb2">洗濯機や手洗いで洗濯ができるものであれば、型崩れや色あせしにくい<strong>おしゃれ着洗剤を使って洗う</strong>とよいでしょう。<strong>洗濯不可のぬいぐるみの場合は、掃除機や粘着テープを使ってハウスダストを取り除き、アイロンを使って熱消毒</strong>をすれば安心です。</p>
					</div>
				</div>
			</section>
      <section class="main__item mb3">
        <h3 class="cleaning01__secttl mb3" id="housedust04">空気中のハウスダストにも対策をしよう</h3>
			  <p class="mb2">ハウスダストは非常に小さく軽いため、人が歩くと簡単に舞い上がってしまう、という特質があります。なかでも、ウイルスや細菌のように小さなハウスダストは、常に空気中を浮遊しています。このような<strong>ハウスダストを除去するために有効な家電製品が、空気清浄機</strong>です。<br>空気清浄機を選ぶ際は、適用畳数に注目するとよいでしょう。適用畳数が大きい製品ほど吸引力が強いという特長があります。ちなみに、適用畳数とは空気清浄機が30分で空気をきれいにできる部屋の広さのことを意味します。</p>
			  <p class="mb2">また、フィルター性能も空気清浄機を選ぶ際のチェックポイントです。フィルターの役割は、空気清浄機が吸い込んだハウスダストをキャッチすること。高性能なものほど、小さなハウスダストも除去できるようになっています。</p>
			</section>
      <section class="main__item mb4">
				<div class="pr mb3">
					<div class="pr__row">
						<div>
							<h4 class="center mb2">
							<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase@2x.png"
								alt="換気ダクト清掃で部屋のきれいを保つ" style="max-width:80px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="pr__ttl center mb3">換気ダクト清掃で部屋のきれいを保つ</h5>
							<p class="mb2">部屋の空気をきれいに保つには、換気ダクトの清掃が効果的です。換気ダクトとは、屋内の換気扇と排気口をつなぐ風道、つまり煙突のこと。長年手入れを行なわないと、ダクトの中に油やほこりがたまり、屋内の換気が十分に行なわれにくくなります。また、ダクトの汚れは、室内に結露やカビを発生させる原因にも。見えない部分にあってご家庭での掃除ができない換気ダクトの掃除は、長谷工にお任せください。</p>
						  <div class="center">
								<p class="pr__txt">換気ダクト清掃</p>
								<a href="https://e-suteki.haseko.jp/service/ventilation-duct-cleaning.html" target="_blank" data-ga-click="cleaning05_1" class="pr__btn center">詳しくはこちら</a>
						  </div>
					</div>
					</div>
					<div class="">
						<div class="cleaning_comment">
							<div class="balloon balloon_maxborder mb koto">
								<div class="inner-border">
									<div>
										<p>お部屋がきれいになると、気分もスッキリするね！</p>
									</div>
								</div>
							</div>
							<div class="balloon balloon_maxborder-r seiji03_r">
								<div class="inner-border_r">
									<div>
										<p>お布団もきれいにしたから、気持ちいいね～</p>
									</div>
								</div>
							</div>
							<div class="balloon balloon_maxborder mb hikari03">
								<div class="inner-border">
									<div>
										<p>ちゃんと掃除すれば、目のかゆみも克服できそう</p>
									</div>
								</div>
							</div>
							<div class="balloon balloon_maxborder-r mb0 kirari_r">
								<div class="inner-border_r">
									<div>
										<p>またハウスダストがたまらないように、こまめに掃除しよう！</p>
									</div>
								</div>
							</div>
						</div>
					</div>					
			</section>
    </div>
    <div class="main__item mb0">
			<?php
				include ($inc_path."/lib/inc/page/_magazine/__cleaning-footer.php");
			?>
		</div>
  </article>
</main>

<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
