<?php
//base
include ("../../function.php");
$content = get_id_data('27018');
$pageTtl = '家の掃除が楽になる！？簡単に家をきれいにする掃除の基本を解説！';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '家の掃除をしていくうえでのコツや手順、掃除場所ごとの掃除のポイントを解説。また、掃除の負担を減らすポイントも解説します。';
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/18/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/18/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
					<p class="cleaning01__desc">家の掃除を楽にする方法とは？簡単に家をきれいにする掃除の基本をご紹介します。</p>
          <time datetime=”2022年8月24日”>2022年8月24日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb seiji">
							<div class="inner-border">
								<div>
									<p>今日は休日！家の掃除をしようと思うけど、どこから手をつけていいか分からない…<br>何かよい方法はないかな？</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p>一気に家中を掃除するのは大変だニャ！<br><strong>何回かに分けて掃除すると、効率的だよ</strong><br><strong>最初に計画を立てて、それに合わせて、徐々に掃除すると疲れない</strong>ニャ♪</p>
								</div>
							</div>
						</div>
					</div>
					<div class="cleaning_contents contents">
						<div class="contents__row">
							<div class="w25 contents__ttl">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01@2x.png" class="u-img__max u-only__pc center" style="max-width:183px;" loading="lazy">
							</div>
							<div class="w5 contents__line">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line@2x.png" class="u-img__max u-only__pc center" style="max-width:12px;" loading="lazy">
							</div>
							<div class="u-only__sp">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01-sp@2x.png" class="u-img__max u-only__sp mb3 center" style="max-width:186px;" loading="lazy">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line-sp@2x.png" class="u-img__max u-only__sp center mb3" loading="lazy">
							</div>
							<div class="w70">
								<div class="contents__list">
									<ul>
										<li><a data-scroll href="#souji01">最初に掃除の計画を立てる</a></li>
										<li><a data-scroll href="#souji02">家の場所別・掃除の仕方とポイント</a></li>
										<li><a data-scroll href="#souji03">掃除の負担を減らすコツ</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="souji01">最初に掃除の計画を立てる</h3>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/18/cleaning18-01@2x.jpg" class="u-img__max mb1_sp" alt="リビングで掃除機をかけている人" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">1日で家中をきれいにしようとして、張り切って掃除を始めたものの、結局最後まで掃除が終わらずに疲れ果て、やる気が失せた…。そんな経験をした人や、どこから掃除してよいか分からず掃除がおっくうになっている人が多いのではないでしょうか？</p>
						<p class="mb3">今回は、家の掃除をスムーズにするための「掃除の基本」をお伝えします。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">掃除の範囲を決める</h4>
				<p class="mb2">「今日1日で家中を掃除しよう！」そう思わないことが、掃除を楽にするポイントです。掃除をする際は、「今日の掃除はここから、ここまで」と<strong>範囲を決めて、取り掛かる</strong>ことをおすすめします。そうすることで、目標をスムーズに達成しやすくなりますよ。</p>
				<p class="mb2">たとえば、「本棚のほこりを取り、本棚を整理する」「キッチンシンクの排水口のぬめりを取る」「クーラーや洗濯機だけ掃除する」など、掃除する範囲と、「本棚の掃除と本の整理を11時までに終わらせる」「洗濯機掃除を1時間で終わらせる」など終わりの時間を決めてから、取り掛かるのがベストです。また、かかる時間を把握するために、普段からストップウォッチを使い、時間をはかっておく習慣をつけておきましょう。</p>
				<p class="mb3">特に、体力に自信が無い場合は、掃除の範囲を小さく決めてから取り掛かることをおすすめします。先に<strong>掃除する範囲をノートに書き出し、</strong>いつ、どこを掃除する、というスケジュールを作っておくと、掃除が楽になります。</p>
        <h4 class="cleaning01__ttl_m mb2">掃除の頻度を決める</h4>
				<p class="mb2">家の掃除の頻度は、ライフスタイルによって異なります。</p>
				<p class="mb2">1人暮らしの場合は、簡単な掃除を2～3日に1回。週に1回家全体を掃除すれば、きれいな状態を保てるでしょう。</p>
				<p class="mb2">共働き家庭の場合、夫婦どちらかが専業で家事をしているご家庭よりも、毎日の掃除の時間を確保することは難しいかもしれません。平日に時間的な余裕がない場合は、できる範囲で掃除をし、徹底した掃除は休日に行なうとよいでしょう。</p>
				<p class="mb3">隙間時間を見つけて毎日少しずつ掃除をしていれば、大掃除をする必要はなくなります。また、小さいお子さんがいるご家庭の場合は、日中リビングで過ごすことが多く、子どもを昼寝させることもあるため、リビングの掃除はこまめにすることをおすすめします。</p>
			</section>
      <section class="main__item mb3">
        <h3 class="cleaning01__secttl mb3" id="souji02">家の場所別・掃除の仕方とポイント</h3>
				<p class="mb3">リビングやキッチン、浴室など、家の場所ごとに、掃除の方法とポイントをご紹介します。</p>
        <h4 class="cleaning01__ttl_m mb2">リビング</h4>
				<p class="level mb2">■所要時間：5分～<br>■難易度：★☆☆☆☆<br>■掃除頻度の目安：毎日（忙しいときは週に2回～3回）</p>
				<p class="mb2">リビングは、家族で過ごすことが最も多い場所。それだけに、汚れも多くなりがちです。汚れの種類は、ほこり、皮脂汚れ、抜け毛などが挙げられます。</p>
				<p class="mb2">忙しいときは、<strong>床に散らかったものや、不要なものを片付けて、掃除機をかける</strong>ようにしましょう。また、前述したように、今日は「テレビ台だけ」、「棚だけ」などと範囲を決めて、掃除を楽にするのもよい方法です。</p>
				<p class="mb2"><strong>念入りに掃除する場合は、まず、天井や照明、家具の上などの高い場所のほこりをハンディワイパーで落とします。</strong></p>
				<p class="mb2">次に、<strong>掃除機で床に落ちた大きなほこりを取り除きます。</strong>掃除機の音を出したくないときは、フローリングワイパーや乾いた雑巾で、ほこりをおおまかに拭き取っておきましょう。<br>その後、リビングの隅々まで、水拭きを行なうと、掃除機では取り切れなかった細かなほこりや、皮脂汚れを掃除できます。<a href="<?php echo $base_url?>/magazine/article/cleaning14.php" data-ga-click="cleaning18_1">フローリング</a>の床のベタつきが気になるときは、皮脂汚れや食品の油汚れがこびり付いている証拠です。重曹水を含ませた雑巾で拭いて、水に濡らした雑巾を固く絞って、しっかり水拭きをして、汚れを落としましょう。なお、重曹水は40度のお湯1カップに対して、重曹小さじ1/2杯の割合で溶かして作ります。</p>
				<p class="mb3">一般的な家庭の場合は、<strong>床の水拭きは、週に1回程度</strong>行なうことをおすすめします。</p>
				<div class="urawaza mb3 mt7">
					<div class="urawaza__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza@2x.png"
								alt="裏技 上手な衣類の片付け方" style="max-width:254px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="urawaza__ttl">掃除の3つの基本</h5>
						<div class="flex between mt2">
							<figure class="w50 mt4 center">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/urawaza@2x.png" class="u-img__max center" style="max-width:128px;" alt="きらりアイコン" loading="lazy">
							</figure>
							<figure class="w50 center">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/18/cleaning18-02@2x.jpg" class="u-img__max center" style="max-width:320px;" alt="窓掃除" loading="lazy">
							</figure>
						</div>
						<p class="mb2">掃除の基本は3つあります！</p>
						<p class="mb2">1つ目は、「上から下へ」。高い所を先に掃除し、徐々に下へ向かって掃除していくと、下に落ちたほこりを後から一気に掃除できます。</p>
						<p class="mb2">2つ目は、「拭き掃除は、奥から手前へ」。手前から奥に向けて拭き掃除をしてしまうと、ほこりが奥にたまってしまい、取りづらくなります。</p>
						<p class="mb2">3つ目は、「拭き掃除は、下から上へ」。窓ガラスや壁などを拭き掃除するときは、洗剤を下に吹き付け、徐々に上に向けて吹き付けていきます。<br>洗剤を上から付けてしまうと液だれしてしまい、下のほうに汚れがたまってしまうためです。<br>洗剤の拭き取りも、下から上へ向けて行ないます。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">キッチン</h4>
				<p class="level mb2">■所要時間：15分～<br>■難易度：★★★☆☆<br>■掃除頻度の目安：毎日</p>
				<p class="mb2">キッチンは使えば使うほど、コンロ回り、<a href="<?php echo $base_url?>/magazine/article/cleaning03.php" data-ga-click="cleaning18_2">レンジフード・換気扇</a>、シンクの<a href="<?php echo $base_url?>/magazine/article/cleaning11.php" data-ga-click="cleaning18_3">排水口</a>などに汚れがたまっていきます。キッチンの汚れは、種類がさまざまで、油汚れ、食品の焦げ付き、食品カスや洗剤から出るぬめりなどが混在しています。こうしたキッチンの汚れを取るのに有効な洗剤は、重曹とクエン酸です。</p>
				<p class="mb2"><strong>コンロ回りの油汚れには、重曹のようなアルカリ性洗剤が効果的</strong>です。<a href="<?php echo $base_url?>/magazine/article/cleaning17.php" data-ga-click="cleaning18_4">コンロ</a>をしっかり掃除する場合は、パーツを分解して掃除していきます。五徳は、重曹を溶かしたお湯で、つけ置き洗いをします。</p>
				<p class="mb2">つけ置き洗いをする際、五徳が洗い桶に入らない場合は、シンクをせき止めてつけ置きする方法があります。シンクのゴミ受けの下にレジ袋を設置し、その上からゴミ受けを設置することで、お湯の流れをせき止めることができます。</p>
				<p class="mb2">その後、使い古した歯ブラシやワイヤーブラシなどで焦げ付きを削り落とします。バーナー、天板、排気カバーも重曹を使って、スポンジで洗います。</p>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/18/cleaning18-03@2x.jpg" class="u-img__max mb1_sp" alt="レンジフードの掃除方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">油汚れがたまりがちなレンジフードや換気扇にも、重曹が有効です。レンジフードは、手袋を着用し、洗剤液に浸して絞った雑巾やキッチンペーパーで汚れを拭き取っていきましょう。</p>
						<p class="mb2">換気扇は、ファンとフィルターを取り外し、重曹入りのお湯につけ置き洗いします。汚れがゆるんだら、スポンジか使い古した歯ブラシでこすり落とします。</p>
						<p class="mb2">シンクの排水口はぬめりがたまるため、掃除が面倒になりがちな箇所です。キッチン用の洗剤でごみ受け皿を洗い、その後、過炭酸ナトリウムを使ってぬめりを落としましょう。過炭酸ナトリウムは、マイルドな漂白剤で、除菌・消臭効果があります。</p>
						<p class="mb3">また、<strong><a href="<?php echo $base_url?>/magazine/article/cleaning01.php" data-ga-click="cleaning18_5">シンクの水垢</a>を落とすには、クエン酸</strong>を使用します。シンクは、使い終わった1日の最後に、スポンジで水洗いをしてから、水滴を拭き取りましょう。そして2週に1回程度、クエン酸を使って掃除するようにします。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">浴室</h4>
				<p class="level mb2">■所要時間：5分～<br>■難易度：★★★★★<br>■掃除頻度の目安：毎日</p>
				<p class="mb2">浴室は、湿気がたまりやすいため、雑菌が繁殖しやすく、<a href="<?php echo $base_url?>/magazine/article/cleaning04.php" data-ga-click="cleaning18_6">カビ</a>の温床になりやすい場所。普段の掃除は、粉末の重曹を使い、スポンジで皮脂汚れを落としたり、排水口にたまった髪の毛とゴミを取り除いたりします。入浴するたびに、湯あかがバスタブに付くため、使うたびにそれを取り除くことが、お風呂を清潔に保つポイントです。</p>
				<p class="mb3">念入りに掃除するときは、浴室の床や壁、ゴムパッキンなどを粉末の重曹で掃除し、シャワーで流します。シャワーで流した後、スクイジーをかけて、水切りをし、なるべく早く乾かします。もし、カビを見つけたら、塩素系漂白剤を吹きかけて、数分置いた後、シャワーで流します。</p>
				<div class="mb3 flex">
					<figure class="w50">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/18/cleaning18-04@2x.jpg" class="u-img__max mb1_sp" alt="混ぜてはいけない洗剤" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb2">塩素系漂白剤・洗剤と、酸性タイプの洗剤（酢やクエン酸なども）が混ざると危険な塩素ガスが発生します。絶対に混ぜないでください。また、塩素系漂白剤・洗剤を使用するときは十分換気をしましょう。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">洗面所</h4>
				<p class="level mb2">■所要時間：5分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：毎日</p>
				<p class="mb2">洗面台の汚れの多くは、化粧品や整髪料などが原因です。スポンジで軽くこすって落としましょう。また、水垢はクエン酸を使って掃除します。</p>
				<p class="mb3">床に落ちた洗濯物の糸くずや髪の毛は、掃除機をかけてしっかり取り除きます。その後、雑巾で水拭きすると、さらに床がきれいに仕上がります。</p>
        <h4 class="cleaning01__ttl_m mb2">トイレ</h4>
				<p class="level mb2">■所要時間：5分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：毎日</p>
				<p class="mb2">便器内は、市販のトイレ用中性洗剤を吹きかけ、トイレ用ブラシで掃除します。便座や便器の外側、トイレタンクの外側は、トイレ掃除用ウェットシートでさっと拭きます。なお、トイレの蓋の裏側に注意書きが書いてあるので掃除をする際は確認しましょう。</p>
				<p class="mb3">また、週に1度は、床や壁の拭き掃除をします。拭き掃除をすることで、ニオイの発生を抑えることができます。床を拭く際は、基本的には水、あるいはアルコール除菌タイプの洗浄剤がおすすめです。</p>
        <h4 class="cleaning01__ttl_m mb2">寝室</h4>
				<p class="level mb2">■所要時間：5分～<br>■難易度：★☆☆☆☆<br>■掃除頻度の目安：週2回～3回</p>
				<p class="mb3">床にたまったほこりや髪の毛を掃除機で取り除きます。布団やシーツの上には髪の毛が付着するので、気になるときは、粘着クリーナーを転がして掃除しましょう。</p>
        <h4 class="cleaning01__ttl_m mb2">玄関</h4>
				<p class="level mb2">■所要時間：5分～<br>■難易度：★☆☆☆☆<br>■掃除頻度の目安：毎日</p>
				<p class="mb2">玄関は、外から持ち込まれた泥や砂などで汚れやすい場所。毎日掃除できればよいですが、忙しい場合は、最低でも週に1回は掃除しましょう。</p>
				<p class="mb3">まず、掃除機がけをします。玄関掃除専用のノズルを用意し、ノズルを付け替えてから掃除をしましょう。汚れた部分は、水で濡らした雑巾を絞って、拭き取るようにします。特に、雨や雪の日は、濡れた傘を持ち込んだり、汚れた靴で出入りしたりするために、汚れやすくなります。汚れが乾いてからでは落ちにくくなるため、濡れている間に雑巾で拭き取るようにしましょう。</p>
			</section>
      <section class="main__item mb3">
        <h3 class="cleaning01__secttl mb3" id="souji03">掃除の負担を減らすコツ</h3>
				<p class="mb3">掃除の負担を減らすためにできることは、ものを散らかさないこと。ものが整然と片付いていると、掃除が楽になります。では、次にものが散らからないようにするためのコツをお伝えしましょう。</p>
        <h4 class="cleaning01__ttl_m mb2"><a href="<?php echo $base_url?>/magazine/article/comic-tidy12.php" data-ga-click="cleaning18_7">ものの定位置を決める</a></h4>
				<p class="mb3">ものが散らかる原因は、収納の定位置がないことです。収納場所が決まっていないため、ものが出しっぱなしになるのです。小物類なら箱に入れる、大きなものはそれぞれの収納スペースを作るなど、<strong>1つひとつのものに収納スペースを用意しましょう。</strong>ものを使ったら、それぞれの定位置に戻すようにします。</p>
        <h4 class="cleaning01__ttl_m mb2">床やテーブルにものを置かない</h4>				
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/18/cleaning18-05@2x.jpg" class="u-img__max mb1_sp" alt="整理整頓された部屋" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">掃除をしやすくするためには、なるべく床やテーブルにものを置かないようにします。ものがあると、掃除するたびにものをどかさなくてはならず、掃除しにくくなります。</p>
						<p class="mb3">ものがなければ、片付ける必要がないため、<strong>掃除時間を短縮でき、掃除が楽になります。</strong>掃除する気を起こしやすくするためにも、床やテーブルにものを置かないことを心がけましょう。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">掃除道具を取り出しやすい場所に置く</h4>				
				<p class="mb3">いつでもすぐ掃除できるよう、掃除道具はできるだけ<strong>手に届く場所や、楽に取り出せる場所に置く</strong>ようにします。そうすることで、頻繁に掃除する習慣も身に付きます。</p>
        <h4 class="cleaning01__ttl_m mb2">ながら掃除する</h4>				
				<p>普段の生活のなかでできる「ながら掃除」をするのもおすすめです。たとえば、テレビを見ながらカーペットに粘着クリーナーをかける、お風呂に入りながら床や排水口を掃除する、キッチンで料理中にさっとシンクを掃除するなど、<strong>何かをしながらついでに掃除する</strong>ことで、日頃の掃除の負担を減らせるようになります。</p>
			</section>
			<section class="main__item mb4">
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb seiji03">
							<div class="inner-border">
								<div>
									<p>計画を立てて掃除すると、苦手な掃除がスムーズにできることが分かったよ！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb hikari03_r">
							<div class="inner-border_r">
								<div>
									<p>これからは範囲を決めて、みんなでこまめに掃除をしていこうね！<br>今年は大掃除が楽になりそう♪</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb koto">
							<div class="inner-border">
								<div>
									<p>お手伝いするね！みんなでお掃除すると楽しいね～♪</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb0 kirari_r">
							<div class="inner-border_r">
								<div>
									<p>掃除するときは、範囲を決めてから、始めることを忘れずにニャ！<br>それから、掃除範囲は狭めるといいよ<br>そうすれば、掃除が楽になるからニャ♪</p>
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
