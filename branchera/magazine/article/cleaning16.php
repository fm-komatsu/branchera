<?php
//base
include ("../../function.php");
$content = get_id_data('27016');
$pageTtl = '部屋の掃除の順番は？効率的にきれいにする方法を解説';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '効率的に部屋を掃除する手順を紹介！部屋の掃除の順番や、部屋をきれいに保つ方法を解説します。';
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/16/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/16/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
					<p class="cleaning01__desc">部屋の掃除はどこから始めればよいのでしょう？効率的に部屋を掃除する方法をご紹介します。</p>
          <time datetime=”2022年7月27日”>2022年7月27日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb hikari03">
							<div class="inner-border">
								<div>
									<p>忙しくて、最近、掃除する時間も気力もない・・・<br>効率的に素早くできる掃除方法ってないのかな？</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p><strong>最初は床に落ちてる大きなごみの片付けから始める</strong>といいニャ！<br>それから、<strong>上から下へ向かって掃除していく</strong>こともコツ！<br>部屋の清潔さが失われる前に、さっそく部屋の掃除を始めようニャ！</p>
								</div>
							</div>
						</div>
					</div>
					<div class="cleaning_contents contents">
						<div class="contents__row">
							<div class="w25 contents__ttl">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01@2x.png" class="u-img__max u-only__pc center" style="max-width:163px;" loading="lazy">
							</div>
							<div class="w5 contents__line">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line@2x.png" class="u-img__max u-only__pc center" style="max-width:12px;" loading="lazy">
							</div>
							<div class="u-only__sp">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01-sp@2x.png" class="u-img__max u-only__sp mb3 center" style="max-width:166px;" loading="lazy">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line-sp@2x.png" class="u-img__max u-only__sp center mb3" loading="lazy">
							</div>
							<div class="w70">
								<div class="contents__list">
									<ul>
										<li><a data-scroll href="#souji01">部屋の掃除を効率よく進める順番</a></li>
										<li><a data-scroll href="#souji02">きれいな部屋を維持する方法</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="souji01">部屋の掃除を効率よく進める順番</h3>
				<p class="level mb2">■所要時間：20分～<br>■難易度：★☆☆☆☆<br>■掃除頻度の目安：気になったとき</p>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/16/cleaning16-01@2x.jpg" class="u-img__max mb1_sp" alt="散らかった部屋" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">忙し過ぎて、掃除する時間がないからといって、部屋を掃除せずに放っておくと、部屋に<a href="<?php echo $base_url?>/magazine/article/cleaning05.php" data-ga-click="cleaning16_1">ほこり</a>がたまって、カビやダニが発生しやすくなります。喘息やアレルギーの原因にもなりますから、部屋の掃除はきちんと行ないたいものですね。</p>
						<p class="mb2">とはいえ、いざ、掃除を始めようとしても、どこから手を付けてよいか分からない人も多いのではないでしょうか？そんな人のお悩みを解決するために、今回は掃除を効率よく進める順番をご紹介します！このコツを押さえておくと、作業がスムーズに進みますよ。</p>
						<p class="mb3">まず、換気をよくするために窓を開けてから、掃除を始めましょう！</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">大きなごみを捨てる</h4>
				<p class="mb2">掃除のスタートは、床に落ちたごみの始末から！ペットボトルやお菓子の袋など床に落ちているごみを、分別しながらごみ袋へ入れていきます。机の上に置かれた不要な郵便物やレシートなども、ごみ袋へ捨てましょう。</p>
				<p class="mb2">郵便物には、名前や住所などの個人情報が掲載されています。捨てる前にマーカーや専用のスタンプなどで消したり、シュレッダーにかけたりして個人情報が流出しないよう注意しましょう。</p>
				<p class="mb2">新聞紙や雑誌などの不要な紙類は、まとめてひもで縛り、指定されたごみ収集日に捨てるようにします。</p>
				<p class="mb2">クローゼットに入りきらないほどの服を持っている場合は、不要な服を整理します。古くなった服は処分をしたり、何年も着ていない<a href="<?php echo $base_url?>/magazine/article/sumai-sos-vol09.php" data-ga-click="cleaning16_2">不要な服は買い取りサービス</a>やフリーマーケットに出したりするなどし、必要な服だけをクローゼットにしまうようにします。</p>
				<p class="mb3">このとき、古くなったタオルも処分すると収納スペースがスッキリしますよ。タオルはかさばるので、収納スペースを圧迫しがちです。必要な枚数を決めて、収納するようにしましょう。</p>
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
						<h5 class="urawaza__ttl">上手な衣類の片付け方</h5>
						<div class="flex between mt2">
							<figure class="w50 mt4 center">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/urawaza@2x.png" class="u-img__max center" style="max-width:128px;" alt="きらりアイコン" loading="lazy">
							</figure>
							<figure class="w50 center">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/16/cleaning16-02@2x.jpg" class="u-img__max center" style="max-width:320px;" alt="衣類の仕分け" loading="lazy">
							</figure>
						</div>
						<p class="mb2">最初にダンボール箱を2つ用意し、「よく着るもの」と「あまり着ないもの」に分類します。</p>
						<p class="mb2">あまり着ないもののなかから、傷みが酷いもの、今後着る機会がなさそうなもの、サイズが合わないものを取り出し、処分します。</p>
						<p>衣類の片付けは、一気に行なおうとせず、段階に分けて行なうとよいでしょう。一気に片付けようとすると、どれを処分するか迷ってしまい、掃除が進まなくなってしまう可能性があります。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">ほこりは上から下へ、奥から手前へ</h4>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/16/cleaning16-03@2x.jpg" class="u-img__max mb1_sp" alt="ほこりの掃除方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">「上から下へ！奥から手前へ！」それが掃除の基本です。</p>
						<p class="mb2">ほこりは上から下へと落ちていきます。そのため、先に床を掃除し、その後に棚のほこりを落とすと、床にほこりが落ちて、掃除が二度手間になってしまいます。<br>掃除を効率的に行なうには、まず、高い棚の上から、順番に下に向かってほこりをはたきで落としていきましょう。</p>
						<p class="mb3">また、家具の下のほこりは、奥から手前へフローリングワイパーや雑巾で取り除きます。手前から奥へ向けて掃除すると、奥にほこりや汚れがたまってしまいます。奥から手前に向けて、掃除するようにしましょう。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">掃除機がけの前に、拭き掃除</h4>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/16/cleaning16-04@2x.jpg" class="u-img__max mb1_sp" alt="フローリングの掃除方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">掃除機をかける前に、フローリングワイパーや乾いた雑巾でおおまかなほこりを拭き取ります。</p>
						<p class="mb2">先に掃除機をかけると、部屋中にほこりが舞い上ってしまいますよ。効率的な掃除のコツは、先に床に落ちた大きなほこりを拭き取り、その後で細かなほこりを掃除機で取り除くこと。乾拭きが終わったら、掃除機をかけましょう！</p>
						<p class="mb3">なお、その後、水拭きをすると、掃除機では取り切れない細かい汚れを取り除けます。</p>
					</div>
				</div>
			</section>
      <section class="main__item mb3">
        <h3 class="cleaning01__secttl mb3" id="souji02">きれいな部屋を維持する方法</h3>
				<p class="mb3">せっかく掃除してきれいにした部屋なのに、少し放っておいたら、またほこりだらけに…。そんなことにならないようにしたいものですね。きれいな部屋を維持するには、毎日のちょっとした掃除の積み重ねが大切です。きれいさをキープするコツをご紹介します。</p>
        <h4 class="cleaning01__ttl_m mb2">[ 1 ] ごみはすぐごみ箱へ</h4>
				<p class="mb3">「ごみはごみ箱へ！」の習慣を身に付けましょう。床や机にごみを放らずに、ごみ箱へ捨てる習慣を付けるには、ごみ箱の位置も大事です。家族全員が使いやすい位置を決めて、ごみ箱を置くとよいでしょう。</p>
        <h4 class="cleaning01__ttl_m mb2">[ 2 ] ものの位置を決め、使用後すぐに戻す</h4>				
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/16/cleaning16-05@2x.jpg" class="u-img__max mb1_sp" alt="リビング" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">ものの定位置を決めることも大事です。定位置が決まっていないと、使ったものをどこに収納してよいか迷うため、部屋が散らかる原因になります。</p>
						<p class="mb3">「その場所に何があると便利なのか？」を考えて、置くものを決めていきましょう。置ける容量は決まっていますから、スペースからはみ出さないように、量も決めます。定位置にものを置いておけば、部屋がきれいになるだけでなく、必要なときにさっと取り出すことができるため、探す時間を減らせます。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">[ 3 ] ものを増やさない</h4>				
				<p class="mb3">本当に必要になるまで新しいものを買わないように心掛けるのも、部屋をきれいに保つコツの1つです。必要か必要でないかを常にチェックしたり、買い物に行く回数を減らしたりして、意識的にもものの量を管理できると、きれいな部屋をキープできるようになります。ちなみに、ホテルの室内がきれいなのは、ものが少ないからですね！</p>
        <h4 class="cleaning01__ttl_m mb2">[ 4 ] 床とテーブルの上には何も置かないことを基本にする</h4>				
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/16/cleaning16-06@2x.jpg" class="u-img__max mb1_sp" alt="ものが置かれていない机" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">常に床や机の上がスッキリと片付いていると、掃除がすぐにできるようになります。床やテーブルにものが置かれていなければ、ものをどかす必要がないため、効率よく掃除できます。</p>
						<p class="mb3">床とテーブルにものが置かれていない部屋は、スッキリとして、広く見えるというメリットもあります。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">[ 5 ] 「掃除はこまめに！」を心掛ける</h4>				
				<p>汚れが付いたら、すぐに取るようにします。粘着カーペットクリーナーやウエットシートタイプの掃除クロスのような手軽な掃除グッズを、すぐ取れる場所に置いておくと便利です。気付いたときにこまめに掃除する習慣が身に付くと、大掛かりな掃除が不要になり、年末の大掃除も楽になりますよ。</p>
			</section>
			<section class="main__item mb4">
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb hikari03">
							<div class="inner-border">
								<div>
									<p>部屋がきれいになったら、気持ちまでスッキリ！運気が上がるかも！？</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb koto_r">
							<div class="inner-border_r">
								<div>
									<p>きれいにお掃除した部屋って気持ちがいいね～♪</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb seiji03">
							<div class="inner-border">
								<div>
									<p>これからは散らかさないように気を付けよう！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb0 kirari_r">
							<div class="inner-border_r">
								<div>
									<p>みんなでこまめに掃除していけば、年末の<a href="<?php echo $base_url?>/magazine/article/cafe-vol24-report.php" data-ga-click="cleaning16_3">大掃除</a>が楽になるから、日頃の掃除を忘れずにニャ！</p>
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
