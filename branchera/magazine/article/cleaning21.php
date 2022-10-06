<?php
//base
include ("../../function.php");
$content = get_id_data('27021');
$pageTtl = '窓ガラスを掃除しよう！簡単に窓をピカピカにするコツを解説';
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '窓ガラスの掃除方法を解説。日々行なう掃除方法から、手垢や油など手ごわい汚れの掃除方法まで紹介します。';
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
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/21/main-v@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:790px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/21/main-v-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
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
					<p class="cleaning01__desc">窓ガラスの掃除方法とは？簡単に窓がきれいになる掃除のコツをご紹介します。</p>
          <time datetime=2022年9月21日>2022年9月21日</time>
          <hr class="cleaning01__line">
					<div class="cleaning_comment">
						<div class="question">
					    <img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/question@2x.png" alt="question" class="u-img__max left mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder mb seiji">
							<div class="inner-border">
								<div>
									<p>なんだか、窓ガラスが白く曇って見える…<br>窓の掃除をしてないせいかな？<br>窓掃除って面倒なんだよね…</p>
								</div>
							</div>
						</div>
						<div class="answer">
							<img src="<?php echo $img_url ?>/magazine/comic03/cleaning/common/answer@2x.png" alt="answer" class="u-img__max mb1" loading="lazy">
						</div>
						<div class="balloon balloon_maxborder-r mb kirari_r">
							<div class="inner-border_r">
								<div>
									<p>窓ガラスの外側は花粉や泥など、内側は室内の<a href="<?php echo $base_url?>/magazine/article/cleaning05.php" data-ga-click="cleaning21_1">ほこり</a>や手垢などで汚れやすいニャ<br><strong>普段は、マイクロファイバークロスで水拭き、本格的に掃除するときは、窓ガラスを最初に水で濡らしてから、重曹水を含んだクロスで拭くと油汚れも簡単にスッキリ取れる</strong>ニャ！</p>
								</div>
							</div>
						</div>
					</div>
					<div class="cleaning_contents contents">
						<div class="contents__row">
							<div class="w25 contents__ttl">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01@2x.png" class="u-img__max u-only__pc center" style="max-width:213px;" loading="lazy">
							</div>
							<div class="w5 contents__line">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line@2x.png" class="u-img__max u-only__pc center" style="max-width:12px;" loading="lazy">
							</div>
							<div class="u-only__sp">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_01-sp@2x.png" class="u-img__max u-only__sp mb3 center" style="max-width:216px;" loading="lazy">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/contents_line-sp@2x.png" class="u-img__max u-only__sp center mb3" loading="lazy">
							</div>
							<div class="w70">
								<div class="contents__list">
									<ul>
										<li><a data-scroll href="#mado01">窓ガラスの汚れの原因は？</a></li>
										<li><a data-scroll href="#mado02">窓ガラスの掃除の仕方</a></li>
										<li><a data-scroll href="#mado03">窓ガラスを上手に掃除するコツは？</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="mado01">窓ガラスの汚れの原因は？</h3>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/21/cleaning21-01@2x.jpg" class="u-img__max mb1_sp" alt="窓ガラスの掃除をしている女性" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p>ある朝、カーテンを開けたら、窓から見える外の景色が汚れでくすんでいた、という経験はありませんか？窓の掃除を面倒くさいからと、後回しにしていると、窓ガラスはしだいに汚れていってしまいます。<br>今回は窓ガラスを簡単にきれいにする掃除のコツについてご紹介します。まず、窓ガラスの汚れの原因について見ていきましょう。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">外側の汚れ</h4>
				<p class="mb2">窓ガラスの外側（室外側）の汚れは、花粉や砂、泥、黄砂、雨、排気ガスによる油膜などによるものです。風が吹くと窓ガラスに付着するのは、花粉や砂など。雨風が吹く日には、水や泥、ときには<a href="<?php echo $base_url?>/magazine/article/cleaning10.php" data-ga-click="cleaning21_2">網戸</a>の汚れも付着します。特に台風シーズン、黄砂が飛ぶ季節は窓ガラスが汚れやすくなります。</p>
				<p class="mb3">これらの汚れをそのまま放っておくと、汚れがかたまって落としにくくなるため、定期的に掃除をするようにしましょう。</p>
        <h4 class="cleaning01__ttl_m mb2">内側の汚れ</h4>
				<p class="mb3">窓ガラスの内側（室内側）の汚れは、主に室内のほこり、手垢、油汚れなどです。特にキッチンの窓ガラスには、はねた油が付着しやすいため、汚れにべとつきがあります。</p>
			</section>
      <section class="main__item mb8 mb4_sp">
        <h3 class="cleaning01__secttl mb3" id="mado02">窓ガラスの掃除の仕方</h3>
				<p class="level mb2">■所要時間：10分～<br>■難易度：★★☆☆☆<br>■掃除頻度の目安：汚れやすい窓は1ヵ月〜2ヵ月に1回<br>本格的な掃除は年に2回（初夏の5月～6月・秋の9月～11月）</p>
				<p class="mb2">窓ガラスの掃除は、年末の大掃除の際に行なう人が多いのではないでしょうか？しかし、寒くて空気が乾燥する季節は、水仕事の窓掃除に向きません。空気が乾燥していると、水や洗剤をスプレーしてもすぐに乾いてしまうためです。本格的な掃除は、初夏と秋の2回、行なうとよいでしょう。</p>
				<p class="mb2">ただし、窓の内側と外側を必ず同じタイミングでする必要はありません。窓の内側は、季節を問わず、定期的に掃除をすることをおすすめします。</p>
				<p class="mb2">また、窓ガラスの内側、外側を同じタイミングで掃除する際は、外側から始めます。内側から掃除を始めると、外側の汚れが目立って、内側の汚れの拭き残しが確認しづらくなるためです。</p>
				<p class="mb2">窓ガラスの掃除方法には、水拭きの掃除方法と重曹を使う掃除方法の2種類があります。それぞれの掃除の仕方を見ていきましょう。</p>
				<p>まず、以下の掃除道具を用意します。</p>
				<ul class="u-list__ul_dot mb3">
					<li>マイクロファイバークロス（10枚程度）</li>
					<li>重曹</li>
					<li>水を入れたスプレーボトル</li>
					<li>スクイージー</li>
					<li>サッシ用ブラシ</li>
					<li>ヘラ</li>
				</ul>
        <h4 class="cleaning01__ttl_m mb2">水拭きする（日々の掃除）</h4>
				<p class="mb2">日々の窓掃除は内側外側ともに、マイクロファイバークロスを使用して、水拭きを行ないましょう。洗剤を使わず、水だけで十分に汚れが落ちます。手順は以下の通りです。</p>
				<p class="mb2">用意したマイクロファイバークロスのうち、1枚は乾拭き用に残し、後のクロスを水で濡らして絞ります。その後、濡らしたクロスでガラス窓を水拭きします。クロスを10枚程度まとめて絞っておけば、掃除中に何度も洗う必要がなく、時短になりますよ。</p>
				<p class="mb2">マイクロファイバークロスは極細の繊維で作られたやわらかなクロスです。そのため、素材を傷つけにくく、小さなほこりや油膜などを拭き取るのにも適しています。なお、タオル地の雑巾の場合は、繊維くずがガラスに残ってしまい、時間がかかるので、あまりおすすめしません。</p>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/21/cleaning21-02@2x.jpg" class="u-img__max mb1_sp" alt="窓の拭き方" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mb2 mt0">拭き方のコツは、上から順に一方向へ向けて拭くこと。一方向へ向けて拭くことで、窓ガラスの隅々までムラなくきれいにすることができます。</p>
						<p>水拭きした後、乾いたマイクロファイバークロスで乾拭きをします。</p>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">重曹を使う（本格的な掃除）</h4>
				<p class="mb3">窓の内側外側ともに油汚れや手垢などが目立つときは、本格的に掃除する必要があります。重曹を使うことで、しつこい油汚れや手垢などをしっかり落とすことができます。</p>
				<div class="mb3 flex">
					<figure class="w50 center">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/21/cleaning21-03@2x.jpg" class="u-img__max mb1_sp" alt="重曹水の作り方" style="max-width:320px;" loading="lazy">
					</figure>
					<div class="w50">
						<p class="mt0">まず、バケツで重曹水を作ります。重曹水の濃度は1％が目安（湯1Lに対して、重曹小さじ2.5杯程度）です。重曹水にマイクロファイバークロスを浸し、絞っておきます。</p>
					</div>
				</div>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/21/cleaning21-04@2x.jpg" class="u-img__max mb1_sp" alt="スクイージーを使った窓の掃除方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">最初に、水を窓全体にスプレーします。スクイージーで水切りし、汚れを拭き取ります。</p>
						<p class="mb6 u-font__palt">水をはじく部分は、油汚れが付着していますから、その部分を中心に、重曹水を含んだマイクロファイバークロスで拭き取ります。仕上げに、水で濡らし、かたく絞ったマイクロファイバークロスで窓ガラスを拭き上げます。この際、乾拭きをする必要はありません。</p>
					</div>
				</div>
				<div class="urawaza mb6">
					<div class="urawaza__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza.png"
								data-retina="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_urawaza@2x.png"
								alt="裏技 重曹水は窓に直接スプレーしないこと！" style="max-width:254px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="urawaza__ttl u-font__palt">重曹水は窓に直接スプレーしないこと！</h5>
						<div class="flex between mt2">
							<figure class="w30 center">
								<img src="<?php echo $img_url?>/magazine/comic03/cleaning/common/urawaza@2x.png" class="u-img__max center" style="max-width:128px;" alt="きらりアイコン" loading="lazy">
							</figure>
							<div class="w70">
								<p class="mb2">重曹水をスプレーボトルに入れ、窓に直接スプレーして拭き掃除すると、乾いた後、ガラスに白い粉が浮き出てきます。その後、白い粉を拭き取らなければならず、掃除が二度手間になってしまいます。重曹水は窓に直接吹きかけず、重曹水を含んだマイクロファイバークロスで拭くようにしましょう。</p>
							</div>
						</div>
					</div>
				</div>
				<div class="mikata mb3">
					<div class="mikata__row">
						<div>
							<h4 class="center mb2">
								<img
								data-src="<?php echo $img_url; ?>/magazine/comic03/cleaning/common/ttl_mikata@2x.png"
								alt="お掃除のミカタ 高所の窓掃除は柄の長いスポンジ付きスクイージーで！" style="max-width:278px; margin-top:-40px;" class="u-img__max">
							</h4>
						</div>
						<h5 class="mikata__ttl mb2">高所の窓掃除は柄の長いスポンジ付きスクイージーで！</h5>
						<div>
							<p>手が届かない高所の窓の掃除はなかなか大変です。高い所の窓掃除は、スポンジとスクイージーが一体化した柄の長いワイパーを使うと便利です。最初に片側のスポンジを水で濡らし、窓の汚れを拭き取ります。その後、もう片方のスクイージーで水気を拭き取りましょう。</p>
						</div>
					</div>
				</div>
        <h4 class="cleaning01__ttl_m mb2">最後にサッシを掃除する</h4>
				<p class="mb3">窓ガラスの掃除が終わったら、サッシも忘れずに掃除しましょう。<br>サッシにたまった土ぼこりを乾いた状態でかき出すと素材を傷つける恐れがあるため、サッシの掃除には水を使います。土ぼこりは水に濡れると、粘土状になってかたまりますが、1Lほどの水を流すことで落とせます。</p>
				<div class="mb3">
					<figure class="w50 center u-float__left">
						<img src="<?php echo $img_url?>/magazine/comic03/cleaning/21/cleaning21-05@2x.jpg" class="u-img__max mb1_sp" alt="サッシの掃除方法" style="max-width:320px;" loading="lazy">
					</figure>
					<div>
						<p class="mb2">ペットボトルに入れた水をサッシに流し、泥化した土ぼこりがゆるんだら、サッシ用ブラシでこすり洗いします。再び水で流します。</p>
						<p class="mb3">サッシの隅に残った泥汚れは、ヘラに雑巾を巻きつけてこすり洗いをし、もう一度、サッシに水を流します。水で濡らした雑巾をしっかり絞り、サッシ全体を<a href="<?php echo $base_url?>/magazine/article/cleaning19.php" data-ga-click="cleaning21_3">拭き上げ</a>たら、窓掃除の完了です。</p>
					</div>
				</div>
			</section>
      <section class="main__item mb3">
        <h3 class="cleaning01__secttl mb3" id="mado03">窓ガラスを上手に掃除するコツは？</h3>
				<p class="mb2">窓ガラスをきれいにするには、掃除する日を選ぶことも大切です。おすすめは、晴れの日ではなく、曇りの日、または雨上がりの日。曇りの日、雨上がりの日は、外気の湿度が高いため、ガラスに付着した汚れが浮き上がって落としやすくなるためです。</p>
				<p class="mb3">掃除の時間は、朝、あるいは夕方がよいでしょう。日中は空気が乾燥しやすいため、ガラスに拭き跡が残りやすく、しかも光が反射して、拭き残した汚れが見えにくくなることもあります。</p>
			</section>
			<section class="main__item mb4">
				<div>
					<div class="cleaning_comment">
						<div class="balloon balloon_maxborder mb koto">
							<div class="inner-border">
								<div>
									<p>わっ、窓がピカピカだ！空がきれいに見えるネ♪</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb seiji03_r">
							<div class="inner-border_r">
								<div>
									<p>曇りがない窓って、気持ちいい！<br>窓ガラスの掃除が面倒くさいなんて、もういわないぞ！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder mb kirari">
							<div class="inner-border">
								<div>
									<p>こまめに窓掃除をしておくと、大掃除が楽になるよ！<br>真冬、寒い思いをして窓を拭かなくてもいいからニャ！<br>窓ガラスの掃除方法は、鏡の掃除にも使えるからやってみてニャ！</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_maxborder-r mb0 hikari03_r">
							<div class="inner-border_r">
								<div>
									<p>窓ガラスを磨くと、確かに鏡も磨きたくなっちゃうなぁ！<br>ついでに、わたしの心もピカピカに磨きた～い！</p>
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
