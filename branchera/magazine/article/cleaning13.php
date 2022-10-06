<?php
//base
include ("../../function.php");
$content = get_id_data('27013');
$pageTtl = 'ベランダ掃除のコツとは？マンションでも安心して掃除できる方法をご紹介！';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'マンションのベランダの掃除方法を基礎から解説！ほうきでできる簡単な掃除方法から本格的な掃除方法まで紹介します。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cleaning";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");

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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/13/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/13/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
        <h2 class="cleaning01__ttl u-font__palt"><?php echo $pageTtl ?></h2>
					<p class="cleaning01__desc">ベランダ掃除のコツやマンションのベランダを安心して掃除できる方法をご紹介します。</p>
          <time datetime=”2022年6月29日”>2022年6月29日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb seiji">
							<div class="inner-border">
								<div>
									<p>ベランダでお茶でもしながらくつろぎたいけど、床のタイルや壁が汚れているのが気になるんだよね。<br>こびり付いてしまった汚れはどうしたらきれいに落とせるんだろう？</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p>軽く掃除するなら、<strong>掃除機でほこりを取るか、ぬれた新聞紙を床にまき散らしてから、ほうきで掃く</strong>といいよ<br>本格的に掃除する場合は、<strong>排水口や床にはブラシを使い、手すりには重曹水を使って拭き掃除をする</strong>ときれいになるニャ！</p>
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
										<li><a data-scroll href="#beranda01">マンションのベランダ掃除の注意点</a></li>
										<li><a data-scroll href="#beranda02">基本的なベランダ掃除方法</a></li>
										<li><a data-scroll href="#beranda03">本格的なベランダ掃除方法</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="beranda01">マンションのベランダ掃除の注意点</h3>
					<div class="mb3">
						<figure class="w50 center u-float__left">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/13/cleaning13-01@2x.jpg" class="u-img__max mb1_sp" alt="ベランダ" style="max-width:320px;" loading="lazy">
						</figure>
						<div>
							<p class="mb2">一般的なベランダの使い方として、洗濯物や布団を干したり、景色やガーデニングを楽しんだりする場、子どもとの遊び場などが挙げられます。活用次第で暮らしを豊かにしてくれるベランダですが、部屋を掃除する頻度に比べると、ベランダ掃除の頻度は少ないのではないでしょうか？<br>せっかくリラックスできるスペースがあるのですから、きれいに掃除して、ベランダを有効に活用したいものですね。</p>
							<p class="mb2">しかし、マンションやアパートなど、共同住宅のベランダは個人の専有部ではなく、緊急時に避難経路として使用される<a href="<?php echo $base_url?>/enquete/article/enq-vol19-report.php" data-ga-click="cleaning13_1">共用部</a>です。共用部分であるため、使い方だけでなく、ベランダを掃除する時にも気を付けておくべき点がありますので、ご紹介します。マンションにお住まいの場合は、使用規約でベランダの使い方をご確認ください。</p>
						</div>
					</div>
        <h4 class="cleaning01__ttl_m mb2">水を極力使わずに掃除する</h4>
				<p class="mb3">マンションのべランダ掃除には、水の使用は極力控えましょう。土ぼこりや排気ガスなどで汚れたベランダの床は、高圧洗浄機やホースで水を流して洗えばいいのでは？と思う人もいるかもしれません。しかし、ベランダの床材が防水加工されていないこともあるうえに、1つの排水口を複数の世帯で共用しているケースもあります。そのため、2階以上のベランダで大量の水を流すと、下の階が水漏れしたり、隣のベランダに汚れた水が流れたりして、トラブルを招くことになります。マンションやアパートのベランダ掃除は、極力水を使わずに行なうことが大切です。</p>
        <h4 class="cleaning01__ttl_m mb2">掃除する際はご近所に配慮する</h4>
				<p class="mb3">ベランダ掃除は、近所迷惑にならないように行ないましょう。ベランダを掃除するとほこりが舞うので、隣や階下に配慮する必要があります。隣人や階下の居住者が、ベランダで作業をしていないか、人がくつろいでいないかを確認し、大丈夫であれば掃除を始めます。</p>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="beranda02">基本的なベランダ掃除方法</h3>
				<p class="level mb2">■所要時間：5分～<br>■難易度：★☆☆☆☆<br>■掃除頻度の目安：2週に1回</p>
				<p class="mb2">ベランダの汚れには土ぼこり、砂ぼこり、排気ガスの油、洗濯くずやほこり、髪の毛、枯れ葉、鳥(鳩）のフン、虫の死骸や蜘蛛の巣、コケなどがあります。そのまま汚れを放っておくと、汚れが落ちづらくなるため、早めの掃除が必要です。</p>
				<p class="mb3">今回は、「基本的なベランダ掃除方法」と、「本格的なベランダ掃除方法」を解説します。<br>基本の掃除は洗剤を使わず行ないます。本格的な掃除は、洗剤を駆使しながら部位別に細部や汚れの質に応じて掃除をしていきます。まず、簡単にできる基本の掃除方法から説明しましょう。</p>
        <h4 class="cleaning01__ttl_m mb2">掃除機を使う</h4>
				<p>準備する掃除道具は2点のみです。</p>
				<ul class="u-list__ul_dot">
					<li>掃除機</li>
					<li>雑巾</li>
				</ul>
				<p class="mb2">雑巾を水でぬらし、よく絞ったら、手すりを拭きます。手すりの汚れが落ちたら、次に床を掃除します。掃除機にブラシタイプのノズルを付けて、ほこりを吸い取ります。<br>このとき、鳥のフンは吸わないように注意しましょう。鳥のフンには、サルモネラ菌、クラミジアなどが含まれています。そのため、菌を吸い込んだ掃除機で掃除すると、部屋に菌が広がり、感染症になる恐れがあるからです。</p>
				<p class="mb2">掃除が済んだら、ノズルをしっかり洗っておきましょう。また、ベランダや玄関のたたきなど外掃除用のブラシタイプのノズルを準備しておくと、家の中と外で使い分けができ、外の汚れを室内に入れることを避けられます。</p>
				<p class="mb3">なお、掃除機で掃除する場合は、音がしますから、近所に迷惑がかからないように配慮してくださいね。</p>
				<h4 class="cleaning01__ttl_m mb2">新聞紙を使う</h4>
				<p class="mb2">新聞紙を使って掃除する方法は、掃除機の音がしないため、マンションやアパートのベランダ掃除におすすめの掃除方法です。</p>
				<p>以下の掃除道具を準備しましょう。</p>
				<ul class="mb3 u-list__ul_dot">
					<li>新聞紙 2〜5枚</li>
					<li>ほうき</li>
					<li>ちりとり</li>
				</ul>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/13/cleaning13-02@2x.jpg" class="u-img__max mb1_sp" alt="" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p>新聞紙を水にぬらし、ちぎって丸め、ベランダ全体にばらまきます。ばらまいた新聞紙をほうきで転がしながら掃き、ちりとりで取ります。ぬれた新聞紙がほこりや髪の毛などを吸着してくれますよ。</p>
					</div>
				</div>
				<p class="mb3"><a href="<?php echo $base_url?>/magazine/article/cleaning09.php" data-ga-click="cleaning13_2">エアコンの室外機</a>や<a href="<?php echo $base_url?>/magazine/article/cleaning12.php" data-ga-click="cleaning13_3">洗濯機</a>の周囲や下など、掃除機をかけにくい箇所の掃除にも便利です。</p>
			</section>
      <section class="main__item mb3">
        <h3 class="cleaning01__secttl mb3" id="beranda03">本格的なベランダ掃除方法</h3>
				<p class="level mb2">■所要時間：20分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：1ヵ月～3ヵ月に1回</p>
				<p class="mb3">ベランダがひどく汚れていて念入りに掃除する必要があるときや、大掃除のときは、各所を本格的に掃除していきます。<br>部分ごとに、ベランダ掃除のやり方を解説しましょう。</p>
				<h4 class="cleaning01__ttl_m mb2">排水口</h4>
				<p>以下の掃除道具を準備します。</p>
				<ul class="u-list__ul_dot">
					<li>軍手またはゴム手袋</li>
					<li>雑巾またはキッチンペーパー</li>
					<li>ほうき</li>
					<li>ちりとり</li>
					<li>使い古しの歯ブラシ、またはスポンジ</li>
					<li>水を入れたやかん、またはバケツ</li>
				</ul>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/13/cleaning13-03@2x.jpg" class="u-img__max mb1_sp" alt="" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">ゴム手袋をして、ほうきとちりとりで排水口のごみを取り除きます。その後、雑巾、あるいはキッチンペーパーで残った汚れを拭き取ります。</p>
						<p class="mb3">そして、ブラシやスポンジで排水口の溝の汚れをこすって落とします。最後に、やかんやバケツなどに入れた水で洗い流せば、完了です。なお、下の階の人とのトラブルを招く可能性があるので、大量の水は使わないようにしましょう。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">手すり</h4>
				<p>以下の用具を準備します。</p>
				<ul class="u-list__ul_dot">
					<li>水</li>
					<li>重曹</li>
					<li>40〜60度のお湯1カップ</li>
					<li>スプレーボトル</li>
					<li>雑巾</li>
				</ul>
			  <p class="mb3">基本的には、水拭きを行なえば大丈夫です。水をはじく油汚れがついたときにだけ、重曹水で掃除をします。用意したお湯に重曹小さじ1/2杯を入れて重曹水を作り、スプレーボトルに入れます。そして、手すりに重曹水を吹きかけ、拭き取りましょう。</p>
        <h4 class="cleaning01__ttl_m mb2">床</h4>
				<p>以下の道具を準備します。</p>
				<ul class="u-list__ul_dot">
					<li>バケツ、またスプレーボトル</li>
					<li>ほうき</li>
					<li>ちりとり</li>
					<li>デッキブラシ、あるいはモップやスポンジ</li>
					<li>雑巾、またはフローリングワイパー</li>
				</ul>
				<p class="mb2">大きなごみをほうきとちりとりで取り除いた後、汚れの気になる部分に水を少量かけます。そして、先端がゴムのタイプのブラシや食器用スポンジで、こすり洗いをします。</p>
				<p class="mb2">ただし、マンションやアパートの場合は、水を流してよいか、下の階や隣のベランダに漏れないかを先に管理人に確認してから行なってくださいね。</p>
				<p class="mb2">仕上げは少量の水で流すか、ぬれ雑巾あるいはフローリングワイパーで汚れを拭き取ります。</p>
				<p class="mb3">なお、ウッドデッキの場合、重曹を使用すると木材が変色することがあるため、重曹は使用せず、代わりに中性洗剤を薄めたものを使いましょう。</p>
        <h4 class="cleaning01__ttl_m mb2">コケの掃除の仕方</h4>
				<p>以下の道具を準備します。</p>
				<ul class="u-list__ul_dot">
					<li>熱湯、またはカビ取り剤</li>
					<li>先端がゴムのタイプのブラシ、またはスポンジ</li>
				</ul>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/13/cleaning13-04@2x.jpg" class="u-img__max mb1_sp" alt="" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p>コケは、梅雨の時期に、水はけが悪い箇所や日当たりが悪い床などに生えやすいものです。コケは高温に弱いため、熱湯をコケにかけてふやかし、軽くこすると簡単に剥がれ落ちます。1回で落ちないときは少量ずつ熱湯をかけましょう。</p>
					</div>
				</div>
			</section>
      <section class="main__item mb3">
				<div class="urawaza mb3 mt7">
					<div class="urawaza__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza@2x.png"
								alt="裏技 鳥のフンには水分を含ませたキッチンペーパー！" style="max-width:254px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="urawaza__ttl">鳥のフンには水分を含ませたキッチンペーパー！</h5>
						<div class="flex between mt2">
							<figure class="w50 mt4 center">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/urawaza@2x.png" class="u-img__max center" style="max-width:128px;" alt="きらりアイコン" loading="lazy">
							</figure>
							<figure class="w50 center">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/13/cleaning13-05@2x.jpg" class="u-img__max center" style="max-width:320px;" alt="" loading="lazy">
							</figure>
						</div>
						<p class="mb2">基本はキッチンペーパーを水でぬらし、ゴム手袋をしてから、拭き取ります。</p>
						<p>しかし、なかなか落ちないときは、水分を含ませたキッチンペーパーを、鳥のフンにかぶせパックします。そうすることで、汚れがゆるみ、拭き取りやすくなります。溝や隙間に入り込んだ汚れは、歯ブラシでこすると落ちますよ。</p>
					</div>
				</div>
			</section>
			<section class="main__item mb4">
				<div class="pr mb3">
					<div class="pr__row">
						<div>
							<h4 class="center mb2">
							<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase@2x.png"
								alt="排気口が汚れていませんか？" style="max-width:80px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="pr__ttl center mb2">排気口が汚れていませんか？</h5>
							<p class="mb2">せっかくベランダを掃除してきれいになっても、ベランダの壁面にある換気ダクトの排気口やその周辺の壁が汚れていたら、がっかりですね。換気ダクトを掃除すると、ベランダの壁の汚れを防ぐことができます。<br>換気ダクトの掃除は専門の業者でなくてはできませんから、プロに依頼して、部屋の空気もベランダもきれいにしてみてはいかがでしょう。マンションの換気ダクトの掃除は5年に1回程度の頻度がおすすめです。</p>
							<div class="center">
								<p class="pr__txt">換気ダクト清掃</p>
								<a href="https://e-suteki.haseko.jp/service/ventilation-duct-cleaning.html" target="_blank" data-ga-click="cleaning13_4" class="pr__btn center">詳しくはこちら</a>
						  </div>
					</div>
				</div>
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb seiji03">
							<div class="inner-border">
								<div>
									<p>ベランダがきれいになった～！これならベランダでくつろげるな<br>テーブルと椅子を出して、さあ、美味しい紅茶を入れよう！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb koto_r">
							<div class="inner-border_r">
								<div>
									<p>いつもより紅茶が美味しく感じる～♪</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb hikari03">
							<div class="inner-border">
								<div>
									<p>ベランダでこんなにリラックスできて、お茶を美味しくいただけるなら、<br>これからはちょくちょく掃除しなくちゃね！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb0 kirari_r">
							<div class="inner-border_r">
								<div>
									<p>普段から基本の掃除をすれば、本格的に掃除するときの手間が少なくなって、楽になるよ。<br>ベランダはこまめに掃除することをおすすめするニャ！<br>ついでに、窓や<a href="<?php echo $base_url?>/magazine/article/cleaning10.php" data-ga-click="cleaning13_5">網戸</a>、<a href="<?php echo $base_url?>/magazine/article/cleaning09.php" data-ga-click="cleaning13_6">エアコンの室外機</a>も一緒に掃除すると、ベランダが気持ちよく使えるようになるニャ！</p>
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
