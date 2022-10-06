<?php
//base
include ("../../function.php");
$content = get_id_data('27008');
$pageTtl = 'エアコン掃除は自分でできる！家にあるものできれいにする掃除法';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '自分でできるエアコンの掃除方法をご紹介！エアコンのなかでも自分で掃除ができる本体カバー、フィルター、ルーバー、吹き出し口の掃除方法を解説します。';
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/08/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/08/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
        <h2 class="cleaning01__ttl u-font__palt">エアコン掃除は自分でできる！家にあるものできれいにする掃除法</h2>
					<p class="cleaning01__desc">家庭で行なえるエアコン掃除の方法についてご紹介します。</p>
          <time datetime=”2022年3月31日”>2022年5月18日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb hikari01">
							<div class="inner-border">
								<div>
									<p>エアコンをつけると、なんだか変なニオイがする…<br>クーラーもあんまり効いてないみたい<br>掃除しなくちゃとは思うけど、エアコンって自分でどこまで掃除していいのかな？</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>	
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p><strong class="u-font__palt">エアコンは、自分で掃除できる部分とプロにお願いすべき部分に分かれている</strong>ニャ<br>自分で掃除できる部分なら、家にあるものだけで簡単にきれいになるからさっそく始めよう！</p>
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
										<li><a data-scroll href="#airconditioner01">自分でエアコン掃除できる部分は4ヵ所！</a></li>
										<li><a data-scroll href="#airconditioner02">自分でできるエアコン掃除3ステップ</a></li>
										<li><a data-scroll href="#airconditioner03">外したパーツを取り付ける</a></li>
									</ul>
								</div>	
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="airconditioner01">自分でエアコン掃除できる部分は4ヵ所！</h3>
				<p class="mb2">つい、掃除をサボったまま使い続けてしまいがちなエアコン。ですが、掃除せずにいると、内部でカビが発生してニオイの原因になったり、フィルターにほこりが詰まって運転効率が悪くなったりといった問題が出てきてしまいます。</p>
				<p class="mb3">また、エアコンには「掃除機能」「内部クリーン機能」の2種類の機能が付いているタイプがあります。これらの機能を利用することで、フィルター部分のほこりの自動清掃や、内部の乾燥が行なわれます。しかし、たばこのニオイや、キッチンから来る<a href="<?php echo $base_url; ?>/magazine/article/cleaning03.php" data-ga-click="cleaning08_1">油汚れ</a>などは落とせません。<br>エアコンを快適に使うには、家庭での定期的なお手入れが必要なのです。</p>
				<h4 class="cleaning01__ttl_m mb2">自分で掃除できる範囲は4ヵ所</h4>
				<div class="mb3 flex">
					<figure class="w50">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/08/cleaning08-01@2x.jpg" class="u-img__max mb1_sp"  style="max-width:320px;" alt="エアコンの構造" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mt0 mb2">エアコンの各部分のうち、自分で掃除を行なえるのは<strong>「本体カバー」「フィルター」「吹き出し口」「ルーバー」の4ヵ所</strong>です。</p>
					</div>
				</div>
				<div>
					<p class="mb2">●本体カバー<br>エアコンの本体カバーには、ほこりが付着しています。ハンディワイパー（ハンディモップ）で付着しているほこりを取り除きましょう。本体カバーには、ほこりがたまりやすいので、<strong>週に1回掃除する</strong>のがおすすめです。</p>
					<p class="mb2">●フィルター<br>フィルターとは、吸い込んだ空気のちりやほこりを取り除いてくれるパーツのことです。本体のフロントパネルを外した所に付いています。<br>エアコンを使えば使うほどフィルターには汚れが詰まってしまうため、夏や冬など毎日使うシーズンは、<strong>2週に1回のお手入れ</strong>をおすすめします。（※ご家庭の使用状況によって掃除頻度は異なります）</p>
					<p class="mb2">●吹き出し口<br>吹き出し口とは、エアコンの風の出口にあたる部分です。エアコン内部と外部の間で寒暖差があるため、<a href="<?php echo $base_url; ?>/magazine/article/cafe-vol27-report.php" data-ga-click="cleaning08_2">結露</a>が起きやすい部分でもあります。また、フィルター掃除を怠ると風がせき止められるため、より結露が起きやすくなってしまうので注意しましょう。<br><strong>夏や冬などのシーズン中は、1ヵ月に1回の頻度で掃除</strong>をするのがおすすめです。</p>
					<p class="mb3">●ルーバー<br>ルーバーとは、エアコンの吹き出し口についている横長の板のことです。上下に動いて風向きを変えてくれます。この部分も<strong>1ヵ月に1回程度の掃除</strong>がおすすめです。</p>
        </div>
				<h4 class="cleaning01__ttl_m mb2">内部の汚れは業者に依頼</h4>
				<p class="mb2">自分で掃除できる4ヵ所は、いずれもエアコンの外側部分です。この4ヵ所以外のエアコン内部については、自分で掃除することはできません。<strong>エアコンは精密機械なので、内部をクリーニングするときは専門知識に基づいて分解しなければならない</strong>ためです。<br>具体的には、次のような部分が挙げられます。</p>
				<ul>
					<li class="mb2">●フィン（熱交換器）<br>フィルターの奥にある、アルミ板で構成されたパーツです。室温を調節する役目を果たします。</li>
					<li class="mb2">●ファン<br>エアコン内部にある、風を送るためのパーツです。</li>
					<li class="mb2">●ドレンパン<br>フィンの下にあり、エアコン内部で発生した結露を受け止めて排出するためのパーツです。</li>
				</ul>
				<p class="mb3">これらを誤った方法で分解したり、高圧洗浄機やスチームクリーナーで無理に掃除したりすると、故障してしまう場合があります。自分では行なわず、プロに依頼するようにしましょう。<br>なお、市販のエアコンクリーナーを使用する掃除方法もありますが、こちらも機器の故障につながる恐れがあるため、自分での掃除は控えるほうがよいでしょう。<br>また、エアコンクリーナーでも内部の汚れまで全て落とせるわけではありません。汚れが飛ばないように周囲の壁や天井を養生する必要があり、手間もかかります。エアコンクリーナーをスプレーした後は、内部を洗い流せないので残った泡がさびや故障の原因になってしまうこともあります。使用には十分注意しましょう。</p>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="airconditioner02">自分でできるエアコン掃除3ステップ</h3>
				<p class="mb3">それでは、自分でエアコン掃除を行なう手順をご紹介しましょう！各部分とも、取り外したり掃除したりする際は、メーカーの取扱説明書に従う必要があります。掃除を始める前に、手元に用意しておきましょう。</p>
				<h4 class="cleaning01__ttl_m mb2">エアコン掃除の準備</h4>
				<p class="mb2">エアコン掃除を行なう際は、安全のためにプラグを抜きましょう。<br>道具は、次のものを準備します。</p>
				<ul class="mb3 u-list__ul_dot">
					<li>ハンディワイパー</li>
					<li>掃除機</li>
					<li>やわらかめのブラシ（古い歯ブラシなど）</li>
					<li>タオル2枚</li>
					<li>スポンジ</li>
					<li>水で薄めた少量のせっけん</li>
					<li>アルコール</li>
				</ul>
				<h4 class="cleaning01__ttl_m mb2">フィルターの掃除</h4>
				<p class="mb2">フィルターの掃除は、エアコン掃除の基本です！これだけでもかなり清潔になりますよ。</p>
				<p class="level mb2">■所要時間：20分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：2週に1回</p>
				<p class="mb2">エアコン本体の上のほこりを、ハンディワイパーで取り除いてからフロントパネルを開けます。フィルターにほこりが大量に付いている場合は、外す前に掃除機でほこりをある程度吸い取りましょう。</p>
				<div class="mb3">
					<figure class="w50 u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/08/cleaning08-02@2x.jpg" class="u-img__max mb1_sp" alt="エアコンフィルターの掃除方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mt0 mb2">フィルターを外して、床に敷いた新聞紙の上に置きます。<br>フィルターの表面から掃除機をかけます。<br><strong>裏面からかけると、ほこりがフィルターの目に詰まって吸い取りにくくなってしまう</strong>ため、必ず表面から吸い取るようにしましょう。</p>
						<p class="mb2">ほこりが取れたら、フィルターの裏面からシャワーで水圧をかけるように水洗いします。<br>細かいほこりが残った場合は、スポンジでそっとこすって落としましょう。</p>
						<p class="mb2">フィルターの洗浄には、台所用洗剤を使ってもよいですが、油汚れでベタついている場合はせっけんを使うのがおすすめです。</p>
						<p class="mb2">タオル2枚でフィルターをはさみ、手で優しく押さえて水気を取ります。ここでよく水気を取ると、乾かす時間を短縮できます。<br>水気が取れたら、洗濯物を干すピンチハンガーでフィルターをつるして、完全に乾燥させます。<br>よく乾かさないと、カビやニオイの原因になってしまうので注意しましょう。</p>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">ルーバーの掃除</h4>
				<p class="mb2">ルーバーは、無理に外さずに取り付けた状態のまま掃除を行ないましょう。ルーバーは力を加えると壊れやすいため、無理に外そうとすると閉じなくなる恐れがあります。</p>
				<p class="level mb2">■所要時間：15分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：1ヵ月に1回</p>
				<div class="mb3 flex">
					<figure class="w50">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/08/cleaning08-03@2x.jpg" class="u-img__max mb1_sp" alt="エアコンルーバーの掃除方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mt0 mb2">ルーバーは、軽い汚れであれば水だけで十分落とせます。落ちにくい場合は、固く絞ったタオルにアルコール水をスプレーして、表面を拭きます。</p>
					</div>
				</div>
				<h4 class="cleaning01__ttl_m mb2">吹き出し口の掃除</h4>
				<p class="mb2">吹き出し口に付いたほこりや汚れを、できる範囲で掃除します。デリケートで壊れやすい部分なので、無理に力を加えたり、奥まで掃除道具を入れたりしないように注意しましょう。</p>
				<p class="level mb2">■所要時間：10分～<br>■難易度：★☆☆☆☆<br>■掃除頻度の目安：1ヵ月に1回</p>
				<p class="mb2">手の届く範囲で、ハンディワイパーを使ってほこりを落とします。</p>
				<div class="mb5 flex">
					<figure class="w50">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/08/cleaning08-04@2x.jpg" class="u-img__max mb1_sp" alt="エアコン吹き出し口の掃除方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mt0 mb2">その後、水で薄めたアルコールをタオルに吹きかけ、指に巻いたり、割りばしに巻き付けたりして吹き出し口を丁寧に拭きます。<br>汚れを拭き終えたら、水で固く絞ったタオルで仕上げ拭きします。洗剤が残らないようにしっかり拭き上げましょう。</p>
					</div>
				</div>
				<div class="mikata mb3">
					<div class="mikata__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata@2x.png"
								alt="お掃除のミカタ 割りばしが大活躍！" style="max-width:278px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="mikata__ttl mb2">割りばしが大活躍！</h5>
						<p class="mb2">狭い吹き出し口をお掃除するには、割りばしにタオルを巻き付けると便利です。こうすると、窪んだ部分や細かい部分も拭きやすくなりますよ。</p>
					</div>
				</div>
			</section>
      <section class="main__item mb4">
        <h3 class="cleaning01__secttl mb3" id="airconditioner03">外したパーツを取り付ける</h3>
				<p class="mb2">各部分の掃除が終わったら、外したパーツを元に戻しましょう。<br>フィルターを、よく乾いていることを確認してからセッティングします。</p>
				<p class="mb3">その後、エアコンを「送風」にして20分〜30分ほど運転しましょう。水を使って掃除をした後のエアコンを、しっかり乾かすためです。<br>十分に送風したら、お手入れは完了です。</p>
				<div class="pr mb3">
					<div class="pr__row">
						<div>
							<h4 class="center mb2">
							<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase@2x.png"
								alt="エアコン内部の掃除は長谷工にお任せ！" style="max-width:80px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="pr__ttl center mb2">エアコン内部の掃除は長谷工にお任せ！</h5>
							<p class="mb2">エアコンの汚れやカビは、家庭では手の届かない内部にもこびりついている可能性があります。そのまま使っていると、不快なニオイや空気の汚れの原因に…。そこでおすすめなのが、長谷工のエアコンクリーニングです。専門知識を持ったプロが、安全に部品を分解洗浄するので中までスッキリ！省エネにもつながります。今のうちにお手入れをして、今年の夏を快適に過ごしませんか？</p>
						  <div class="center">
								<p class="pr__txt">エアコンクリーニング</p>
								<a href="https://e-suteki.haseko.jp/service/air-conditioner-cleaning.html" target="_blank" data-ga-click="cleaning08_3" class="pr__btn center">詳しくはこちら</a>
						  </div>
					</div>
				</div>
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb hikari03">
							<div class="inner-border">
								<div>
									<p>エアコンが見違えるようにキレイになった〜！<br>ニオイもしなくなったみたい♪</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p>ニオイの原因のほとんどはカビなのニャ<br>カビの栄養になるほこりをこまめに取り除くことはもちろん、エアコンの使い方にもポイントあり！<br>「冷房」や「除湿」を使った後は、エアコン内部が結露で濡れた状態になるから、1時間ほど「送風」して内部を乾かすとカビ予防ができるのニャ〜</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb0 hikari03">
							<div class="inner-border">
								<div>
									<p>そうなんだ！今年の梅雨の時期や夏場にエアコンを使うときは、送風も忘れないようにしようっと</p>
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
