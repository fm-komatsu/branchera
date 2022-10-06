<?php
//base
include ("../../function.php");
$content = get_id_data('27001');
$pageTtl = '水垢の落とし方。ゆるめる＆削るテクニックで簡単にスッキリ！';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '水垢をスッキリ落とすテクニック、場所別のお手入れ方法をご紹介します。';
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/01/main-v@2x.jpg" alt="" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/01/main-v-sp@2x.png" alt="" class="u-img__max u-only__sp center" loading="lazy">
				</div>
			</div>
		</div>
		<div class="technic__chara u-only__pc mb3">
			<a href="<?php echo $img_url ?>/magazine/comic03/cleaning/common/main-v-chara@2x.jpg" class="chara-btn center mfp-btn__img">登場人物紹介はこちら</a>
    </div>
		<div class="technic__chara u-only__sp">
			<a href="<?php echo $img_url ?>/magazine/comic03/cleaning/common/main-v-chara-sp@2x.jpg" class="chara-btn center mfp-btn__img">登場人物紹介はこちら</a>
    </div>
    <div class="main__wrapper">
      <section class="main__item mb8 mb4_sp">
        <h2 class="cleaning01__ttl u-font__palt">水垢の落とし方。ゆるめる＆削るテクニックで簡単にスッキリ！</h2>
					<p class="cleaning01__desc">水垢をスッキリ落とすテクニックをご紹介します。</p>
          <time datetime=”2022年3月31日”>2022年3月31日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb hikari01">
							<div class="inner-border">
								<div>
									<p>洗面台のコップの下や蛇口に水垢が付いてる！<br>スポンジで一生懸命こすったけど、全然落ちない…どうして？</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p>水垢の正体は、水道水に含まれるミネラル分なんだニャ！それが少しずつ積み重なって、塊のようになっているから、こすっても落ちにくいんだ。<br>この<strong>水垢を落とすには、ただこするのではなく「ゆるめる」、それでダメなら「削る」</strong>がおすすめだニャ！</p>
								</div>
							</div>
						</div>
					</div>
					<div class="contents">
						<div class="contents__row">
							<div class="w25 contents__ttl u-only__pc">
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
										<li><a data-scroll href="#mizuaka01">水垢はなぜ付くの？</a></li>
										<li><a data-scroll href="#mizuaka02">こびり付き度「軽〜中」ならクエン酸でゆるめる！</a></li>
										<li><a data-scroll href="#mizuaka03">こびり付き度「強」ならゆるめて削る！</a></li>
										<li><a data-scroll href="#mizuaka04">水垢を防いできれいな状態を保つ方法</a></li>
									</ul>
							  </div>
							</div>
						</div>
					</div>
			</section>
			<section class="main__item mb8 mb4_sp">
				<h3 class="cleaning01__secttl mb3" id="mizuaka01">水垢はなぜ付くの？</h3>
					<div class="flex between">
						<figure class="w50">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/01/cleaning01-04.jpg" class="u-img__max mb1_sp" alt="水垢" loading="lazy">
						</figure>
						<div class="w50">
							<p class="mt0 mb2">浴室の鏡やタイル、キッチンのシンク、洗面台の周りなどに現れる水垢。この水垢は、<strong>水道水に含まれるカルシウムやマグネシウムなどのミネラル分がこびり付いたもの</strong>です。
							水まわりに飛び散った水滴が蒸発すると、ミネラル分が残ります。それが少しずつ積み重なっていくと、白い水垢となるのです。白い水垢に、さらに皮脂汚れや泥、せっけんカスなどが混ざると、茶色い水垢になります。</p>
							<p>水垢は何層にも重なった汚れなので、スポンジでこすっただけではなかなか落ちません。代わりに「ゆるめる」「削る」テクニックを使って、水まわりをピカピカにしましょう！</p>
						</div>
					</div>
				</section>
				<section class="main__item mb8 mb4_sp">
					<h3 class="cleaning01__secttl mb3" id="mizuaka02">こびり付き度「軽〜中」ならクエン酸でゆるめる！</h3>
							<p class="level">■所要時間(置き時間も含む)：20分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：2週に1回</p>
							<p class="mb3">キッチンの流し、洗面台、浴室の鏡・蛇口・壁・タイル床など、<strong>こびり付き度が軽〜中程度の水垢にはクエン酸がおすすめ</strong>です。水垢のもとであるミネラル分はアルカリ性なので、酸でゆるめると簡単に落としやすくなります。
							ただし、金属や天然大理石など、酸に弱い素材に対しては使わないようにしましょう。</p>
							<h4 class="cleaning01__ttl_m mb2">クエン酸を使う方法</h4>
						<div class="flex">
							<figure class="w50">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/01/cleaning01-01@2x.png" class="u-img__max mb1_sp" alt="水200mlに対してクエン酸小さじ1/2（濃度1%）の割合で作る" loading="lazy">
							</figure>
							<div class="w50">
								<p class="mb2">クエン酸水を作ります。</p>
							</div>
						</div>
				</section>
				<section class="main__item mb8 mb4_sp">
					<div class="mikata mb3">
						<div class="mikata__row">
							<div>
								<h4 class="center mb2">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata.png"
									data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata@2x.png"
									alt="お掃除のミカタ" style="max-width:280px; margin-top:-40px;" class="u-img__max">
								</h4>
							</div>
							<h5 class="mikata__ttl">クエン酸水の作り方</h5>
							<p>クエン酸水は、水200mlに対してクエン酸小さじ1/2（濃度1%）の割合で作ります。<br>作るときは、市販のスプレーボトルを利用するのがおすすめです。スプレーボトルに水とクエン酸を直接入れ、よく振り混ぜればクエン酸水のできあがり。このまま、水垢に吹き付けることができますよ。</p>
						</div>
					</div>
					<div class="flex">
						<figure class="w50">
							<img src="<?php echo $img_url?>/magazine/comic03/cleaning/01/cleaning01-02@2x.png" class="u-img__max mb1_sp" alt="水200mlに対してクエン酸小さじ1/2（濃度1%）の割合で作る" loading="lazy">
						</figure>
						<div class="w50">
							<p class="mb2">クエン酸水を水垢に吹き付け、10分ほど置いてからスポンジでこすります。</p>
							<p class="mb2">落ちにくい場合は、キッチンペーパーをクエン酸水で湿らせ、水垢の上にパックのように貼り付けます。このまま10分ほど置いて、掃除用スポンジでこすってみましょう。</p>
						</div>
					</div>
				</section>
				<section class="main__item mb8 mb4_sp">
					<div class="urawaza mb3">
						<div class="urawaza__row">
							<div>
								<h4 class="center mb2">
									<img
									data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza.png"
									data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza@2x.png"
									alt="クエン酸以外に使えるものは？" style="max-width:254px; margin-top:-40px;" class="u-img__max">
								</h4>
							</div>
							<h5 class="urawaza__ttl">クエン酸以外に使えるものは？</h5>
							<div class="flex between">
								<figure class="w30 mt5 mt2_sp center">
									<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/urawaza@2x.png" class="u-img__max center" style="max-width:128px;" alt="きらりアイコン" loading="lazy">
								</figure>
								<div class="w70">
									<p class="mb2">お掃除用のクエン酸は、ホームセンターやスーパー、ドラッグストアなどに行くと見つかりやすいよ！でも、すぐ手に入らないときは、酢やレモン汁でも代用できるんだ。酢は、穀物酢を使ってね。すし酢や果実酢の場合、ほかに調味料が入っているからベタベタしてしまうことがあるよ。<br>ポイントは、半量に薄めて使うこと。キッチンペーパーに含ませ、水垢の上に貼り付けて2時間ほど置いたら、掃除用スポンジでこすってみてね。</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="main__item mb8 mb4_sp">
					<h3 class="cleaning01__secttl mb3" id="mizuaka03">こびり付き度「強」ならゆるめて削る！</h3>
							<p class="level">■所要時間：15分〜30分<br>■難易度：★★★☆☆<br>■掃除頻度の目安：3ヵ月に1回</p>
							<p class="mb2">蛇口や水栓の周りなどに固まった水垢は、クエン酸水だけではなかなか落ちません。こうした頑固な水垢は、<strong>クエン酸水でパックしてゆるめた後、メラミンスポンジや水垢専用のサンドペーパーで削って落としましょう。</strong></p>
							<p class="mb3">ただし、樹脂の浴槽やステンレスの作業台、陶器、窓ガラスなど、傷が付きやすい所では行わないよう注意してくださいね。</p>
							<h4 class="cleaning01__ttl_m mb2">メラミンスポンジを使う方法</h4>
						<div class="flex mb3">
							<figure class="w50">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/01/cleaning01-03@2x.png" class="u-img__max mb1_sp" alt="メラミンスポンジを水で湿らせ、こする。仕上げにタオルで乾拭き。" loading="lazy">
							</figure>
							<div class="w50">
								<p class="mb2">水垢の部分をクエン酸水で10分ほどパックした後、メラミンスポンジを水で湿らせ、こすります。仕上げに乾拭きします。</p>
							</div>
						</div>
						<h4 class="cleaning01__ttl_m mb2">サンドペーパーを使う方法</h4>
						<p class="mb3">メラミンスポンジで落ちない水垢には、水垢専用のサンドペーパーを使ってみましょう。<br>水垢の部分をクエン酸水で10分ほどパックした後、使いやすい大きさに切ったサンドペーパーを水で濡らし、軽くこすります。仕上げに乾拭きします。</p>
				</section>
				<section class="main__item mb4">
					<h3 class="cleaning01__secttl" id="mizuaka04">水垢を防いできれいな状態を保つ方法</h3>
						<p class="mb2">水垢は、付いてしまうと掃除が大変。なるべく付かないようにするには、水まわりの水滴をこまめに拭き取るようにしましょう。</p>
						<h4 class="cleaning01__ttl_m mb2">キッチン</h4>
						<div class="flex between mb3">
							<figure class="w50">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/01/cleaning01-05.jpg" class="u-img__max mb1_sp" alt="キッチン" loading="lazy">
							</figure>
							<div class="w50">
								<p class="mb2">一日の終わりに、作業台とシンクの内側の水滴を拭き取りましょう。<br>作業台はふきんで拭きます。シンクの内側は、ふきんを洗ってから最後にキッチンペーパーで拭き取るようにすると、また水滴が出ることもありません。</p>
							</div>
						</div>
						<h4 class="cleaning01__ttl_m mb2">洗面所</h4>
						<div class="flex between mb3">
							<figure class="w50">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/01/cleaning01-06.jpg" class="u-img__max mb1_sp" alt="洗面所" loading="lazy">
							</figure>
							<div class="w50">
								<p class="mb2">洗面ボウルの周りや鏡には、水滴が飛び散りがちです。「洗面台を使う」と「拭き取る」をセットにできるように、拭き取り用のクロスやタオルを置いておくとよいでしょう。</p>
							</div>
						</div>
						<h4 class="cleaning01__ttl_m mb2">浴室</h4>
						<div class="flex between mb3">
							<figure class="w50">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/01/cleaning01-07.jpg" class="u-img__max mb1_sp" alt="浴室" loading="lazy">
							</figure>
							<div class="w50">
								<p class="mb2">使用後、蛇口はタオルで乾拭きしましょう。鏡や広い部分は、スクイージー(水切りワイパー)を使うと便利です。</p>
							</div>
						</div>
						<div class="pr mb3">
							<div class="pr__row">
								<div>
									<h4 class="center mb2">
										<img
										data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase.png"
										data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/icn_omakase@2x.png"
										alt="お掃除のミカタ" style="max-width:80px;" class="u-img__max">
									</h4>
								</div>
								<h5 class="pr__ttl center mb3">自分で落とせない水垢はプロにお任せ！</h5>
									<p class="mb2">水まわりは毎日使う場所なので、油断するとすぐ水垢がたまってしまいがち…。どうしても落とせないときは、長谷工のハウスクリーニングがおすすめです！<br>キッチン、浴室、トイレがセットになった「水まわりクリーニングおとくパック」なら、気になる汚れをまとめてきれいにできます。<br>また、<a href="<?php echo $base_url; ?>/smile/article/hcm-housecoating.php" class="" data-ga-click="cleaning01_2">ハウスコーティング</a>で水まわりを保護すると、水垢を予防することができますよ。</p>
									<div class="center">
										<p class="pr__txt">水まわりクリーニングおとくパック</p>
										<a href="https://e-suteki.haseko.jp/service/deals-package.html" target="_blank" data-ga-click="cleaning01_1" class="pr__btn center">詳しくはこちら</a>
									</div>
							</div>
						</div>
						<div class="">
							<div class="cleaning_comment">
								<div class="balloon balloon_maxborder mb koto">
									<div class="inner-border">
										<div>
											<p>お風呂場のガラス戸も鏡も、ピカピカで気持ちいい〜♪</p>
										</div>
									</div>
								</div>
								<div class="balloon balloon_maxborder-r mb hikari03_r">
									<div class="inner-border_r">
										<div>
											<p>この状態を、ずっとキープできたらいいなあ</p>
										</div>
									</div>
								</div>
								<div class="balloon balloon_maxborder mb kirari">
									<div class="inner-border">
										<div>
											<p>水垢を防ぐには、水滴を残さないことが一番だニャ！<br>ちょっと面倒でも、使う度にふきんで拭くようにすれば、後で水垢のお掃除をする手間が省けるからね</p>
										</div>
									</div>
								</div>
								<div class="balloon balloon_maxborder-r mb0 seiji03_r">
									<div class="inner-border_r">
										<div>
											<p>これからは、拭き取りを毎日の習慣にしよう！</p>
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
