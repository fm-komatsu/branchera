<?php
//base
include ("../../function.php");
$content = get_id_data('27004');
$pageTtl = 'お風呂のカビ取り。頑固な汚れの簡単な落とし方とカビ予防法';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'お風呂のカビ取り方法を、種類別・場所別に解説！お風呂のいたるところに発生する赤カビから頑固な黒カビまで、簡単にスッキリ落とす方法をご紹介します。';
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
$release_month ="4";
$release_day ="13";
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/04/main-v@2x.jpg" alt="" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/04/main-v-sp@2x.jpg" alt="" class="u-img__max u-only__sp center" loading="lazy">
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
        <h2 class="cleaning01__ttl u-font__palt">お風呂のカビ取り。頑固な汚れの簡単な落とし方とカビ予防法</h2>
					<p class="cleaning01__desc">お風呂の頑固なカビを簡単に落とす方法をご紹介します。</p>
          <time datetime=”2022年3月31日”>2022年4月13日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb seiji">
							<div class="inner-border">
								<div>
									<p>お風呂の黒ずみ、スポンジでこすってもちっとも落ちない…<br>どうしてかな？</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>	
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p class="u-font__palt">その黒ずみは、汚れではなくカビ！根を張っているから、こすっただけでは落とせないニャ<br><strong>カビに適した洗剤を付けて、少し時間を置いてから落とそう！</strong></p>
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
										<li><a data-scroll href="#kabi01">【カビの種類別】おすすめの洗剤</a></li>
										<li><a data-scroll href="#kabi02">頑固な黒カビの取り方</a></li>
										<li><a data-scroll href="#kabi03">赤カビ(ピンク色のぬめり)の取り方</a></li>
										<li><a data-scroll href="#kabi04">お風呂の場所別カビ取り方法</a></li>
										<li><a data-scroll href="#kabi05">お風呂のカビを予防するには？</a></li>
									</ul>
								</div>	
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="kabi01">【カビの種類別】おすすめの洗剤</h3>
					<p class="mb3">お風呂に見られるカビには、黒カビと赤カビの2種類があります。それぞれに適したカビ取り洗剤を使い分けましょう！</p>
					<h4 class="cleaning01__ttl_m mb2">黒カビ</h4>
					<div class="mb3">
						<figure class="w50 u-float__left">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/04/cleaning04-01.jpg" class="u-img__max mb1_sp" alt="お風呂の黒カビ" loading="lazy">
						</figure>
						<div>
							<p class="mt0 mb2">タイルの目地やドアのゴムパッキンなどに見られる、黒ずんだ汚れのようなものは「クラドスポリウム」というカビ菌です。</p>
							<p class="mt0 mb2">この黒カビは、<strong>飛び散ったシャンプーやせっけんカスなどをエサにして繁殖</strong>していきます。根が深いので、こすっただけではなかなか落とせません。<br>しかし、吸い込むと喘息やアレルギー症状を引き起こしたり、肌荒れの原因になったりする恐れがあるので、健康のためにはなるべく早く落とす必要があります。</p>
							<p><strong>黒カビの掃除に適しているのは、市販の塩素系漂白剤</strong>です。強力な除菌効果があり、根を深く張ったカビ、長く放置してしまった頑固なカビにも効果があります。<br>ただし、強い塩素臭があり、酸性の洗剤と混ざると有害ガスが発生するなどの特徴があるため、取り扱いには注意が必要です。ボトルの注意書きをよく読んでから使用するようにしましょう。</p>
					  </div>
					</div>
					<h4 class="cleaning01__ttl_m mb2">赤カビ(ピンク色のぬめり)</h4>
					<div class="mb3">
						<figure class="w50 u-float__left">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/04/cleaning04-02.jpg" class="u-img__max mb1_sp" alt="お風呂の赤カビ" loading="lazy">
						</figure>
						<div>
							<p class="mt0 mb2">お風呂の床やシャンプーボトルの底などに見られる、赤やピンク色のぬめりは「ロドトルラ」という酵母菌です。「赤カビ」と呼ばれることもありますが、厳密にはカビではありません。</p>
							<p class="mt0 mb2">そのため、カビのように健康に直接影響を及ぼす心配はないのですが、注意したいのはその繁殖力です。普段は空気中を漂っているロドトルラは、水分に触れると一気に広がり、床や洗面器などがすぐピンク色になってしまいます。</p>
							<p>この<strong>赤カビ掃除に適しているのは、お風呂用洗剤、重曹</strong>です。<br>黒いカビと違ってピンク色のカビは落としやすいので、お風呂用洗剤とブラシがあれば、十分掃除できます。また、赤カビは酸性なので、アルカリ性の重曹も効果的です。</p>
					  </div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="kabi02">頑固な黒カビの取り方</h3>
					<p class="level">■所要時間(置き時間も含む)：約15分〜<br>■難易度：★★★★★<br>■掃除頻度の目安：1ヵ月に1回</p>
					<p class="mb3">塩素系漂白剤を使って、黒カビを落とす方法をご紹介します。強力な洗剤を使うので、始める前にボトルの注意書きをよく読み、使い方を守りましょう。また、マスク、ゴム手袋、必要に応じてゴーグルやメガネなども着用して行うのがおすすめです。</p>
					<div class="flex between mb2">
						<figure class="w50">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/04/cleaning04-03.png" class="u-img__max mb1_sp" alt="お風呂場の水気を拭き取る" loading="lazy">
						</figure>
						<div class="w50">
							<p class="mb2">洗剤を使う前に、カビ部分の水気を拭き取って洗剤が薄まるのを防ぎます。</p>
						</div>
					</div>
					<div class="mb3">
						<figure class="w50 u-float__left">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/04/cleaning04-04.png" class="u-img__max mb1_sp" alt="右：塩素系漂白剤（ジェルタイプ）左：塩素系漂白剤（スプレータイプ）" loading="lazy">
						</figure>
						<div>
							<p class="mt0 mb2">塩素系漂白剤を吹き付け、そのまま10分ほど置きます。</p>
							<p class="mt0 mb2">カビが落ちにくい部分、壁や天井のように洗剤が流れ落ちやすい部分には、チューブ入りのジェル状の塩素系漂白剤がおすすめです。洗剤が密着しやすく、皮膚に付いたり吸い込んだりする危険も抑えられます。</p>
							<p>時間が経ったら、こすらずにシャワーで洗い流します。こすると細かな傷が付き、そこに水分が残ってカビが生えやすくなってしまうので注意しましょう。</p>
					  </div>
					</div>
					<div class="urawaza mb3 mt7">
						<div class="urawaza__row">
							<div>
								<h4 class="center mb2">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza.png"
									data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza@2x.png"
									alt="裏技 頑固なカビは長めにつけ置き！" style="max-width:254px; margin-top:-40px;" class="u-img__max">
								</h4>
							</div>
							<h5 class="urawaza__ttl">頑固なカビは長めにつけ置き！</h5>
							<div class="flex between">
								<figure class="w30 mt2 center">
									<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/urawaza@2x.png" class="u-img__max center" style="max-width:128px;" alt="きらりアイコン" loading="lazy">
								</figure>
								<div class="w70">
									<p class="mb2">カビがひどい部分は、洗剤のつけ置き時間を長めにするのがおすすめだニャ。ただし、ゴムパッキンやデリケートな素材は、あまり長く放置すると傷んでしまうことがあるから気を付けて！</p>
								</div>
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="kabi03">赤カビ(ピンク色のぬめり)の取り方</h3>
					<p class="level">■所要時間：約5分〜<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：週に1回</p>
					<p class="mb3">お風呂用洗剤、重曹、エタノールを使った、赤カビの落とし方をご紹介します。</p>
					<h4 class="cleaning01__ttl_m mb2">お風呂用洗剤の場合</h4>
					<p class="mb3">お風呂用洗剤は、汚れに吹き付けたらお風呂掃除用のブラシでこすり、シャワーで洗い流します。</p>
					<h4 class="cleaning01__ttl_m mb2">重曹の場合</h4>
					<div class="flex between mb2">
						<figure class="w50">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/04/cleaning04-05.png" class="u-img__max mb1_sp" alt="左：重曹を振りかけブラシでこする 右：シャワーで洗い流す" loading="lazy">
						</figure>
						<div class="w50">
							<p class="mb2">重曹は粉末のまま使います。汚れに振りかけたらブラシでこすり、シャワーで洗い流します。</p>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="kabi04">お風呂の場所別カビ取り方法</h3>
					<p class="mb3">黒カビはもともと頑固で落ちにくいものですが、掃除がしにくい場所に生えていると、落とすのがより難しくなります。狭い場所、高い場所など、場所に応じたテクニックを駆使して、カビを撃退しましょう！</p>
					<h4 class="cleaning01__ttl_m mb2">天井</h4>
					<div class="mb3">
						<figure class="w50 u-float__left">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/04/cleaning04-06.jpg" class="u-img__max mb1_sp" alt="お風呂の天井" loading="lazy">
						</figure>
						<div>
							<p class="mt0 mb2">目に付きにくく掃除をすることも少ないお風呂場の天井は、実はカビが生えやすい場所です。<br>フローリングワイパーに、塩素系漂白剤を吹き付けたドライシートをセットして、天井を拭き取りましょう。10分ほど放置してからシャワーで洗い流し、ドライシートで乾拭きすれば完了です。</p>
							<p class="mt0">洗剤が垂れてきやすいので、ゴーグルやメガネ、マスクなどでしっかりガードしてから作業を行ってくださいね。</p>
					  </div>
					</div>
					<h4 class="cleaning01__ttl_m mb2">ゴムパッキン</h4>
					<div class="mb3">
						<figure class="w50 u-float__left">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/04/cleaning04-07.jpg" class="u-img__max mb1_sp" alt="お風呂のゴムパッキン" loading="lazy">
						</figure>
						<div>
							<p class="mt0 mb2">ドアのゴムパッキンは、洗剤をかけても流れ落ちてしまいやすい場所なので工夫が必要です。まず、ゴムパッキンの水気をキッチンペーパーでよく拭き取り、塩素系漂白剤を直接かけます。上からラップを貼り付け、洗剤を密着させたまま10分ほど置いたらシャワーで洗い流します。</p>
							<p class="mt0">長く放置し過ぎるとゴムが傷んでしまうことがあるため、ボトルの注意書きに従って作業しましょう。</p>
					  </div>
					</div>
					<h4 class="cleaning01__ttl_m mb2">浴槽エプロン</h4>
					<div class="mb3">
						<figure class="w50 u-float__left">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/04/cleaning04-08.jpg" class="u-img__max mb1_sp" alt="お風呂の浴槽エプロン" loading="lazy">
						</figure>
						<div>
							<p class="mt0 mb2">エプロンとは、浴槽(バスタブ)を保護しているカバーのことで、内側はカビが生えやすい場所です。家庭で安全に取り外せるかどうか、メーカーの取扱説明書で確認してから作業を行ってください。</p>
							<p class="mt0">エプロンを取り外したら、カビが生えている部分に塩素系漂白剤を吹きかけ、10分ほど置いて洗い流します。浴槽側のエプロンをはめ込む部分も、同じようにして洗い流しましょう。<br>エプロンと浴槽側の水気をしっかり拭いて乾かしたら、はめ込んで作業完了です。</p>
					  </div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="kabi05">お風呂のカビを予防するには？</h3>
					<p class="mb2">お風呂のしつこいカビ掃除をラクにするには、普段からカビが生えないように予防する心がけが大切です。</p>
					<p class="mb2"><strong>定期的なカビ予防には、「くん煙剤」</strong>を使うとよいでしょう。くん煙剤とは、空気中のカビ菌を煙で除去する薬剤のことです。薬剤の種類にもよりますが、<strong>2ヵ月に1回の頻度で使用</strong>すると、防カビ効果を得られます。</p>
					<p class="mb2">また、<strong>お風呂を使った後は、カビの栄養源となるシャンプーやせっけんなどが残らないよう、全体をシャワーでよく洗い流しましょう。</strong><br>その後、<strong>ふきんで拭き取ったり、スクイージー(水切りワイパー)を使ったりして水気を残さないように</strong>すれば、予防効果はさらに高まります。</p>
					<p><strong>掃除の後には、完全に乾いてから仕上げに消毒用エタノールをスプレーする</strong>と、カビ予防になりますよ。</p>
				</section>
			<section class="main__item mb4">
				<div class="pr mb3">
					<div class="pr__row">
						<div>
							<h4 class="center mb2">
							<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase@2x.png"
								alt="プロのハウスクリーニングでカビを一掃！" style="max-width:80px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="pr__ttl center mb2">プロのハウスクリーニングでカビを一掃！</h5>
							<p class="mb2">浴室の壁や天井はカビが生えやすい場所ですが、自分で掃除するのは難しいですよね。頑固なカビだと、何度掃除してもなかなか落ちないことも…。こうしたお悩みも、長谷工のハウスクリーニングならスッキリ解決！<br>浴室のほか、キッチン、トイレもまとめてきれいにできるセットプランもありますよ♪</p>
						  <div class="center mb3">
								<p class="pr__txt">浴室クリーニング</p>
								<a href="https://e-suteki.haseko.jp/service/bath-cleaning.html" target="_blank" data-ga-click="cleaning04_1" class="pr__btn center">詳しくはこちら</a>
						  </div>
						  <div class="center">
								<p class="pr__txt">水まわりクリーニングおとくパック</p>
								<a href="https://e-suteki.haseko.jp/service/deals-package.html" target="_blank" data-ga-click="cleaning04_2" class="pr__btn center">詳しくはこちら</a>
						  </div>
					</div>
				</div>
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb seiji03">
							<div class="inner-border">
								<div>
									<p>わ〜、黒ずみだと思っていたカビがスッキリ落ちた！<br>きれいになったら、お風呂場が明るく感じられるなあ</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb hikari03_r">
							<div class="inner-border_r">
								<div>
									<p>壁も床もピカピカで気持ちいいね！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb kirari">
							<div class="inner-border">
								<div>
									<p>お風呂を最後に使った人が、熱湯をかけたり水気を取ったりする決まりにすると、カビを抑えることができるよ！家族みんなで協力できるといいニャ♪</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb0 koto_r">
							<div class="inner-border_r">
								<div>
									<p>これからは、お風呂から出るときに忘れないようにしようっと！</p>
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
