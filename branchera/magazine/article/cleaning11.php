<?php
//base
include ("../../function.php");
$content = get_id_data('27011');
$pageTtl = 'キッチンの排水口掃除の仕方とは？簡単にピカピカにする方法をご紹介！';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'キッチンの排水口掃除の仕方を紹介！簡単にできるキッチンの排水口のぬめりの取り方や詰まりの解消方法などを解説します。';
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/11/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/11/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
					<p class="cleaning01__desc">キッチンの排水口を簡単にきれいにする方法をご紹介します。</p>
          <time datetime=”2022年6月15日”>2022年6月15日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb seiji03">
							<div class="inner-border">
								<div>
									<p>キッチンの排水口のニオイが気になる…<br>掃除しなくちゃ、と思うんだけど、排水口のぬめりが苦手で、ついつい掃除をサボっちゃうんだよね<br>簡単に汚れを取る方法ってないのかな？</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>	
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p>簡単に掃除できる方法はあるニャ！<br>排水口には雑菌と汚れがいっぱいだから、放っておかずに掃除することをおすすめするニャ<br>まず<strong>キッチン用の洗剤でごみ受け皿を洗い、その後、過炭酸ナトリウムを使ってぬめりを落とす</strong>よ！</p>
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
										<li><a data-scroll href="#haisuiko01">排水口のぬめりの原因とは？</a></li>
										<li><a data-scroll href="#haisuiko02">キッチン排水口の掃除方法</a></li>
										<li><a data-scroll href="#haisuiko03">排水口をきれいに保つには？</a></li>
									</ul>
								</div>	
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="haisuiko01">排水口のぬめりの原因とは？</h3>
					<div class="mb3">
						<figure class="w50 center u-float__left">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/11/cleaning11-01@2x.jpg" class="u-img__max mb1_sp" alt="キッチンの排水口" style="max-width:320px;" loading="lazy">
						</figure>
						<div>
							<p class="mb2">キッチンの流し台を使うたびに、排水口の中に生ごみ、油汚れ、すすぎ残した洗剤などがたまっていきます。ごみがたまっていると分かっていても、ぬめりが苦手で、排水口の掃除をつい後回しにしている人もいるのではないでしょうか？</p>
							<p class="mb2">排水口のぬめりの原因は、生ごみや洗剤に繁殖した雑菌です。油や洗剤は排水口でヘドロのようなぬめりに変化します。雑菌が生じて紫や黒などに変色し、塊になることも…。放っておくと、雑菌が繁殖して排水口から悪臭がしたり、コバエが発生したりします。また、雑菌が水しぶきに混じって食材に付着すると、食中毒を引き起こす恐れもあります。<br>さらに、排水管の形状が横向きで、排水口が横穴になっていると、排水管が詰まりやすくなるので注意が必要です。</p>
							<p class="mb2">日頃からキッチンの排水口をしっかり掃除して、シンクを清潔にしておきましょう。今回は、簡単に排水口を掃除する方法をご紹介します。</p>
						</div>
					</div>
			</section>
      <section class="main__item mb3">
        <h3 class="cleaning01__secttl mb3" id="haisuiko02">キッチン排水口の掃除方法</h3>
				<p>キッチン排水口は、以下の部分に分けられます。</p>
				<ul class="mb3 u-list__ul_dot">
					<li>排水口カバー（蓋）</li>
					<li>ゴム蓋</li>
					<li>ごみ受け皿（水切りかご）</li>
					<li>排水トラップ</li>
					<li>排水管</li>
				</ul>
				<p class="mb3">ここでは部分別に、掃除方法をご紹介します。</p>
				<h4 class="cleaning01__ttl_m mb2">取り外し可能な部品の掃除方法</h4>
				<p class="level mb2">■所要時間：40分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：ぬめり取りは毎日（除菌は週に1回）</p>
				<p class="mb2">キッチン排水口の部品に付いたぬめりは、重曹やクエン酸、せっけんやアルコールなどを使って落すことができます。</p>
				<p>今回は、次の道具を準備します。</p>
				<ul class="mb3 u-list__ul_dot">
					<li>スポンジ</li>
					<li>使い古した歯ブラシ</li>
					<li>ゴム手袋</li>
					<li>重曹</li>
					<li>過炭酸ナトリウム</li>
				</ul>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/11/cleaning11-02@2x.jpg" class="u-img__max mb1_sp" alt="ゴミ受け皿の掃除している図と過炭酸ナトリウムとお湯を溶かした水溶液" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p>まずゴム手袋をして、排水口カバー（蓋）とゴム蓋、ごみ受け皿（水切りかご）を取り出します。<br>取り出した排水口カバーやごみ受け皿に、粉末の重曹を振りかけ、使い古した歯ブラシでこすりながら取り除いていきます。汚れが取れたら、しっかり水ですすぎます。</p>
					</div>
				</div>
				<div class="flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/11/cleaning11-03@2x.jpg" class="u-img__max mb1_sp" alt="キッチンの排水口の構造" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb2">次に、ごみ受け皿の下にある排水トラップを外します。排水トラップとは、排水口から来るニオイを防ぐためのもので、お椀型をしています。</p>
						<p class="mb2">排水トラップは、蓋・ゴム蓋・ごみ受け皿を取り出すと現れます。通常、排水トラップは固定されていますが、回すと外れるようになっています。</p>
					</div>
				</div>
				<p class="mb2">排水トラップを取り外したら外側と内側のぬめりを、粉末の重曹を使いスポンジで落とします。細かい部分の汚れを落とすには、歯ブラシを使います。洗い終わったら、排水トラップとごみ受け皿を元に戻します。</p>
				<p class="mb3">また、熱湯をためて過炭酸ナトリウムを入れた桶を用意し、そこに排水口カバー・ゴム蓋・ごみ受け皿・排水トラップをつけ置きすることで、除菌ができます。</p>
        <h4 class="cleaning01__ttl_m mb2">排水口の掃除方法</h4>
				<p class="level mb2">■所要時間：40分～<br>■難易度：★★★☆☆<br>■掃除頻度の目安：週に1回</p>
				<p>以下の道具を準備します。</p>
				<ul class="u-list__ul_dot">
					<li>ゴム手袋</li>
					<li>ラップ</li>
					<li>輪ゴム</li>
					<li>過炭酸ナトリウム</li>
				</ul>
				<p class="mb2">まず、換気扇を回すか、窓を開けます。<br>排水口のカバー・ごみ受け皿・排水トラップは取り外します。取り外したら、排水口にお湯をためられるように、排水口内の排水トラップが覆っていた穴にラップを敷き、輪ゴムで止めます。</p>
				<p class="mb2">排水口に、過炭酸ナトリウム小さじ1を入れ、排水口がいっぱいになるくらい熱湯をためます。そうすると、自然に発泡するので、発泡が落ち着くまで待ちます。発泡が落ち着くと、汚れが浮いてきます。</p>
				<p class="mb2">このまま一晩置いておくことで、ぬめり取りと除菌が1回で済みます。<br>一晩たったら、ラップを外し、水を流して掃除の完了です。</p>
				<p class="mb3">排水口の掃除方法として、塩素系漂白剤を使用する方法もありますが、取り扱いには注意が必要なため、推奨しません。<br>塩素系漂白剤は、生ごみや食酢、アルコールと混ざると、有毒ガスが発生する場合があります。もし使用するときは、ほかの洗剤と併用しないようにしてくださいね。</p>
        <h4 class="cleaning01__ttl_m mb2">排水管の詰まりを解消する</h4>
				<p class="level mb2">■所要時間：1時間～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：排水の流れが悪くなったら</p>
				<p>排水管が詰まってしまい、水がきちんと流れないときには、重曹とクエン酸を使用します。</p>
				<div class="mb5">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/11/cleaning11-04@2x.jpg" class="u-img__max mb1_sp" alt="排水管の詰まり解消の方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">換気扇を回すか、窓を開けて換気を行います。まず、排水口のごみ受け皿と排水トラップを外します。その後、排水口に、粉末の重曹を1/2～1カップまきます。</p>
						<p class="mb2">鍋で2L以上のお湯を沸かし、そこにクエン酸大さじ2程度を溶かします。クエン酸が溶けたら、排水口にまいた重曹に向かって、お湯をかけていきましょう。</p>
						<p class="mb2">重曹とクエン酸が反応することで、発泡し、汚れをはがしていきます。<br>はがれた汚れが浮いてきたら、最後に水を流して完了です。</p>
					</div>
				</div>
				<div class="mikata mb3">
					<div class="mikata__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata@2x.png"
								alt="お掃除のミカタ 重曹とクエン酸の組み合わせが効果的！" style="max-width:278px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="mikata__ttl mb2">重曹とクエン酸の組み合わせが効果的！</h5>
						<p class="mb2">重曹のアルカリ性とクエン酸（酢）の酸性の組み合わせは、排水管の詰まりを解消するのに最適です。重曹とクエン酸が組み合わさると、急激に二酸化炭素が発生し、排水管の詰まりが簡単に抜けますよ。</p>
						<p class="mb2">専用のパイプクリーナーを使用する方法もあります。<br>ゴム手袋をして、排水口のごみ受け皿と排水トラップを外してから、45度～50度のお湯を流し、排水管を湿らせておきます。その後、液体パイプクリーナーを適量流し入れ、1時間ほど置いておきます。<br>排水トラップとごみ受け皿を元に戻し、水を流せば完了です。</p>
						<p class="mb2">専用の液体パイプクリーナーは一般的な洗剤よりはるかに強力なため、使用上の注意をよく読んだうえで、使用するようにしましょう。</p>
					</div>
				</div>
			</section>
      <section class="main__item mb3">
        <h3 class="cleaning01__secttl mb3" id="haisuiko03">排水口をきれいに保つには？</h3>
				<p class="mb2">毎日使うキッチンの流し台を清潔に保つには、排水口を常にきれいにしておくことが大切です。<br>まず、排水口の中に生ごみを放置せず、使用するたびに取り出すようにしましょう。<br>また、油は排水口に流さず、油汚れはキッチンペーパーやウエスなどでぬぐってから洗うようにしましょう。ウエスは、汚れを拭き取るための布のことです。そうすることで、余計な掃除を増やさずに済み、油汚れがごみ受け皿や排水口に付着することを防げます。</p>
				<p class="mb3">また、市販されているぬめり取りをごみ受け皿に入れておくのもよいでしょう。排水口のぬめりを減らすことができますよ。</p>
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
						<h5 class="urawaza__ttl">アルミホイルでぬめりを防ぐ！</h5>
						<div class="flex between mt2">
							<figure class="w50 mt4 center">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/urawaza@2x.png" class="u-img__max center" style="max-width:128px;" alt="きらりアイコン" loading="lazy">
							</figure>
							<figure class="w50 center">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/11/cleaning11-05@2x.jpg" class="u-img__max center" style="max-width:320px;" alt="ゴミ受け皿に丸めたアルミホイルを入れている図" loading="lazy">
							</figure>
						</div>
						<p class="">アルミホイルを丸めてごみ受け皿に入れておくと、ぬめり防止になるんだニャ。アルミ箔の金属イオンは、溶け出すと消臭・抗菌作用を発揮するよ。ぬめりが出てきたら、新しいものに交換するようにしてニャ。</p>
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
								alt="機能のおちたディスポーザーは交換を！" style="max-width:80px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="pr__ttl center mb2">機能のおちたディスポーザーは交換を！</h5>
							<p class="mb2">最近のキッチンの排水口には、ディスポーザーがついている場合があります。ディスポーザーはシンク内で生ごみを粉砕・分解して下水に流す人気の設備ですが、耐用年数は7年～8年。ディスポーザーが古くなると、生ごみがしっかり粉砕・分解されなくなります。排水の流れが悪くなり、以前より運転音や振動が大きく感じたら、交換のタイミングです。不調をそのままにしておくと、思わぬトラブルを招くことがありますから、早めにプロにご相談ください。<br>ディスポーザーは専用の排水処理槽を必要とするため、後付けできない特殊な設備です。便利な設備を活かし、心地よいキッチンを維持するように心がけてくださいね。</p>
							<div class="center">
								<p class="pr__txt">ディスポーザー交換</p>
								<a href="https://e-suteki.haseko.jp/service/disposer-replace.html" target="_blank" data-ga-click="cleaning11_1" class="pr__btn center">詳しくはこちら</a>
						  </div>
					</div>
				</div>
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb seiji03">
							<div class="inner-border">
								<div>
									<p>排水口がピカピカになった！こんなにきれいになると、料理のやる気がアップする！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb hikari03_r">
							<div class="inner-border_r">
								<div>
									<p>それに、お皿洗いにも気合が入る！<br>排水口をきれいにするって、大切だね～</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb0 kirari">
							<div class="inner-border">
								<div>
									<p>排水口の掃除は忘れずにニャ！<br>こまめに掃除をして、毎日使うキッチンを清潔にキープしてほしいニャ！</p>
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
