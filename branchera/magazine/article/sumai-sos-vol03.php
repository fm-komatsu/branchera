<?php
//base
include("../../function.php");
$content = get_id_data('26003');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article sumai03";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//release date
$release_year = "2021";
$release_month = "8";
$release_day = "";
?>
<main class="main magazine">
	<article class="main__row">
		<?php
		$panAry[] = array("/magazine/", "ブランシエラマガジン");
		$panAry[] = array("/magazine/index_sumai-sos.php", "プロが解決！住まいのSOS");
		include($inc_path . "/lib/inc/pan.php");
		?>
		<div>
			<div>
				<div class="foris__main-v center mt2 mt0_sp mb3">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/main-v@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:896px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/main-v-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
				</div>
			</div>
		</div>
		<div class="main__item sumai03__wrapper">
			<section>
				<div class="sumai03__info sumai03info mb10">
					<div class="sumai03info__row mb5">
						<div class="sumai03info__bg"></div>
						<h3 class="sumai03info__ttl">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/header__ttl@2x.png" alt="コロナ禍のテレワーク等でリビング・ダイニングが落ち着きません！" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/header__ttl-sp@2x.png" alt="コロナ禍のテレワーク等でリビング・ダイニングが落ち着きません！" class="u-img__max u-only__sp" loading="lazy">
						</h3>
						<div class="center sumai03info__counselor mb4">
							<h4 class="u-font-size__18">神奈川県在住　小林さん</h4>
							<p>働き方の変化で、テレワークに切り替わった夫と大学生の娘が、<br class="u-only__pc">頻繁にリビング・ダイニング（LD）で作業をするようになりました。<br>LDの使い勝手が変わり、気も遣うし以前のようにくつろげなくて……。<br>住まいスターさん、どうにかならないものでしょうか？</p>
						</div>
						<div class="pb3">
							<div>
								<div>
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/header__img@2x.png" alt="小林家リビング・ダイニング｜image" class="u-img__max u-only__pc center" style="max-width:584px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/header__img-sp@2x.png" alt="小林家リビング・ダイニング｜image" class="u-img__max u-only__sp" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="sumai03__sumeister sumai03sumeister">
						<div class="sumai03sumeister__row">
							<div class="sumai03sumeister__ttl center mb10">
								<h4>わかりました！<br>インテリア住まいスターを<br class="u-only__sp">派遣いたします！</h4>
							</div>
							<div class="sumai03sumeister__info sumeisterinfo mb5">
								<div class="sumeisterinfo__row">
									<div class="sumeisterinfo__bg"></div>
									<div class="sumeisterinfo__item_l">
										<div class="sumeisterinfo__left mb3">
											<div class="sumeisterinfo__badge mb2_sp">
												<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/sumeister__badge@2x.png" alt="今月の住まいスター" class="u-img__max u-only__pc" style="max-width:134px;" loading="lazy">
												<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/sumeister__badge-sp@2x.png" alt="今月の住まいスター" class="u-img__max u-only__sp" style="max-width:87px;" loading="lazy">
											</div>
											<div>
												<div class="u-font__small">インテリアコーディネーター<br>プロダクトデザイナー</div>
												<div><span class="u-font-size__28 u-font__bold">川上 ユキ</span><span class="u-font-size__14">先生</span></div>
											</div>
										</div>
										<div class="u-only__pc">
											<div class="mb2">
												<p>
													住宅関連企業で家具や住宅などの商品開発、デザインコンサルタントを行う傍ら、インテリア・収納の講師として女性誌を中心に、新聞やテレビなど含め幅広く活躍。デザイナーとしての実践的な生活提案には定評がある。<br>主な著書に『ふだんの部屋にちょっと手を入れたらステキになりました』『心とカラダがやすまる暮らし図鑑』『収め、納める。』『カエテミル』など。わかりやすい内容とセンスのよい提案から海外翻訳本も多数。
												</p>
											</div>
											<div>
												<small class="u-small u-float__right">川上 ユキHP　<a href="http://www.kawakami-yuki.com" target="_blank" rel="nofollow" class="u-icon">http://www.kawakami-yuki.com</a></small>
											</div>
										</div>
									</div>
									<div class="sumeisterinfo__item_r">
										<div>
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/meister__kawakami@2x.jpg" alt="インテリアコーディネーター プロダクトデザイナー　川上 ユキ先生" class="u-img__max u-only__pc" style="max-width:315px;" loading="lazy">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/meister__kawakami-sp@2x.jpg" alt="インテリアコーディネター プロダクトデザイナー　川上 ユキ先生" class="u-img__max u-only__sp" loading="lazy">
										</div>
									</div>
									<div class="u-only__sp sumeisterinfo__item_bottom">
										<div class="mb2">
											<p>
												住宅関連企業で家具や住宅などの商品開発、デザインコンサルタントを行う傍ら、インテリア・収納の講師として女性誌を中心に、新聞やテレビなど含め幅広く活躍。デザイナーとしての実践的な生活提案には定評がある。<br>主な著書に『ふだんの部屋にちょっと手を入れたらステキになりました』『心とカラダがやすまる暮らし図鑑』『収め、納める。』『カエテミル』など。わかりやすい内容とセンスのよい提案から海外翻訳本も多数。
											</p>
										</div>
										<div>
											<small class="u-small u-float__right_sp">川上 ユキHP　<a href="http://www.kawakami-yuki.com" target="_blank" rel="nofollow" class="u-icon">http://www.kawakami-yuki.com</a></small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w100">
						<div class="sumai03__balloon_q01">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__q01@2x.png" alt="LDで主人や娘がリモート作業をするので落ち着きません。でも、一時的なことかもと思うとリフォームもどうかと思うし、悩んでいます。" class="u-img__max u-only__pc" style="max-width:457px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__q01-sp@2x.png" alt="LDで主人や娘がリモート作業をするので落ち着きません。でも、一時的なことかもと思うとリフォームもどうかと思うし、悩んでいます。" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="sumai03__balloon_a01">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__a01@2x.png" alt="具体的にどんな問題をお感じですか？" class="u-img__max u-only__pc" style="max-width:323px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__a01-sp@2x.png" alt="具体的にどんな問題をお感じですか？" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="sumai03__balloon_q01">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__q02@2x.png" alt="問題１：主人や娘がリビングやダイニングで作業するので、食事の支度に気を遣うし、私のランチも落ち着かない。｜問題２：仕事や勉強のためのモノがLDにだんだん増えていく。｜問題３：主人と娘のリモートの兼ね合いが時に難しく、場所の取り合い的なことも…｜問題４：家族同士の距離が近くて気をつかうし、くつろげない。" class="u-img__max u-only__pc" style="max-width:572px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__q02-sp@2x.png" alt="問題１：主人や娘がリビングやダイニングで作業するので、食事の支度に気を遣うし、私のランチも落ち着かない。｜問題２：仕事や勉強のためのモノがLDにだんだん増えていく。｜問題３：主人と娘のリモートの兼ね合いが時に難しく、場所の取り合い的なことも…｜問題４：家族同士の距離が近くて気をつかうし、くつろげない。" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="sumai03__balloon_q01">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__q03@2x.png" alt="こんな感じです。先生、どうしましょう。" class="u-img__max u-only__pc" style="max-width:323px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__q03-sp@2x.png" alt="こんな感じです。先生、どうしましょう。" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="sumai03__balloon_a02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__a02@2x.png" alt="大丈夫。レイアウトを見直せば、感じているストレスも緩和することができますよ！一つずつ、見ていきましょう。" class="u-img__max u-only__pc" style="max-width:498px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__a02-sp@2x.png" alt="大丈夫。レイアウトを見直せば、感じているストレスも緩和することができますよ！一つずつ、見ていきましょう。" class="u-img__max u-only__sp center" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section classs="sumai03__setion02 section02">
				<div class="section02__row mb8">
					<div class="section02__top">
						<div class="section02__ex mb3">
							<div class="section02__sumeister">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section02__meister@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:144px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section02__meister-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
							</div>
							<div class="section02__balloon">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section02__balloon@2x.png" alt="まずは整理してみましょう。お悩みの原因は、食事やくつろぎの空間や時間に「職」や「学」が割り込んできてしまっていることです。" class="u-img__max u-only__pc" style="max-width:499px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section02__balloon-sp@2x.png" alt="まずは整理してみましょう。お悩みの原因は、食事やくつろぎの空間や時間に「職」や「学」が割り込んできてしまっていることです。" class="u-img__max u-only__sp" loading="lazy">
							</div>
						</div>
						<div>
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section02__img01@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:551px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section02__img01-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
						</div>
						<div>
							<p>リビングやダイニングに「働く」「学ぶ」という生活機能が加わり、LDが窮屈な状態に。</p>
						</div>
					</div>
					<div class="mb8">
						<div class="sumai03__balloon_q01">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__q04@2x.png" alt="まさにうちで起こっている問題の核心ですね。" class="u-img__max u-only__pc" style="max-width:323px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__q04-sp@2x.png" alt="まさにうちで起こっている問題の核心ですね。" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="sumai03__balloon_a03">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__a03@2x.png" alt="解決策は、ズバリ“人がいても「個」が感じられるレイアウト”です！" class="u-img__max u-only__pc" style="max-width:458px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__a03-sp@2x.png" alt="解決策は、ズバリ“人がいても「個」が感じられるレイアウト”です！" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
					<div class="sumai03__goodlayout goodlayout">
						<div class="goodlayout__row">
							<div class="goodlayout__item">
								<div>
									<div class="goodlayout__inner">
										<div class="goodlayout__jadge mb3">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section02__img02_maru@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:98px;" loading="lazy">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section02__img02_maru-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
										</div>
										<div class="goodlayout__image">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section02__img02@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:309px;" loading="lazy">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section02__img02-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
										</div>
									</div>
									<div>
										<p class="u-small">人の視線を感じないと落ち着きます。</p>
									</div>
								</div>
							</div>
							<div class="goodlayout__item">
								<div>
									<div class="goodlayout__inner">
										<div class="goodlayout__jadge u-clearfix mb3">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section02__img03_delta@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:108px;" loading="lazy">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section02__img03_delta-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
										</div>
										<div class="goodlayout__image">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section02__img03@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center mt2" style="max-width:309px;" loading="lazy">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section02__img03-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
										</div>
									</div>
									<div>
										<p class="u-small">人が見えたり視線を感じると落ち着きません。</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="sumai03__balloon_q02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__q05@2x.png" alt="なるほど！「視線」がカギなんですね。" class="u-img__max u-only__pc" style="max-width:323px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__q05-sp@2x.png" alt="なるほど！「視線」がカギなんですね。" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="sumai03__balloon_a04">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__a04@2x.png" alt="つまり、モノで視界を遮ったり、座る位置調整をすればいいんです。" class="u-img__max u-only__pc" style="max-width:383px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__a04-sp@2x.png" alt="つまり、モノで視界を遮ったり、座る位置調整をすればいいんです。" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section class="sumai03__section03 section03">
				<div class="section03__row">
					<div class="section03__ttl mb2_sp">
						<h4 class="section03__ttl_ex u-font-size__30 u-ilblock u-font__palt">「食」「くつろぎ」と「ワーク」が<br>快適に共存するLDデザイン術</h4>
					</div>
					<div>
						<div class="section03__idea01 idea01">
							<div class="idea01__row">
								<div class="idea01__sumeister">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__meister@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:165px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__meister-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
								</div>
								<div class="idea01__ex">
									<div>
										<div>
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__ttl_m01@2x.png" alt="改善アイディア1" class="u-img__max u-only__pc" style="max-width:260px;" loading="lazy">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__ttl_m01-sp@2x.png" alt="改善アイディア1" class="u-img__max u-only__sp" style="max-width:130px;" loading="lazy">
										</div>
										<div class="section03__ttl_m">
											<h5 class="u-font__palt"><span class="u-font-size__28 u-color__aqua">【ダイニングを中心に変える】</span><br><span class="u-font-size__28">いつも人が集中してしまうテーブルは<br class="u-only__pc">「席の見直し」が効果的</span></h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="center mb5">
						<div class="sumai03__balloon_a02center">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__a05@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:468px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__a05-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
				</div>
				<div class="sumai03__type type">
					<div class="type__row type__uroko mb4">
						<div>
							<div class="type__ttl mb3">
								<div class="type__badge">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/type__a_badge@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:105px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/type__a_badge-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
								</div>
								<div class="type__ttl_ex">
									<h4 class="u-font-size__28">人と人が重ならない、<br>視線が向き合わない座り方に見直す。</h4>
								</div>
							</div>
						</div>
						<div class="mb3">
							<h5 class="type__num_01 mb2">正面に向かい合わず、互い違いに座る</h5>
							<div>
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__type-a_1@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:457px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__type-a_1-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
							</div>
						</div>
						<div class="mb3">
							<h5 class="type__num_02 mb2">90度に座り、互いが直接、見えないようにする</h5>
							<div>
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__type-a_2@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:457px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__type-a_1-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
							</div>
						</div>
						<div>
							<h5 class="type__num_03 mb2">さらに離れて、心理的な距離を取る</h5>
							<div>
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__type-a_3@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:457px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__type-a_3-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
							</div>
						</div>
					</div>
				</div>
				<div class="mb4">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__column@2x.png" alt="リモートワークの「ひと休み＆ひと工夫」｜ご主人とお嬢さんが、オンラインでの会議や発表のある授業時に背景のいい場所を争ったりするという小林さん。ご自身も映りこんだり音を立てないようにしたり、なかなか気をつかっているようです。ぜひ、家族間でリモートワークやオンライン授業のスケジュールを共有しましょう。あらかじめ家族の都合がわかれば、どちらがいい場所を使うかも決められますし、奥さまもその時間帯を外して食事をするなど調整がききます。リビングに書き込めるボードなどを置いて予定を書いておくのもいいですね。" class="u-img__max u-only__pc center" style="max-width:750px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__column-sp@2x.png" alt="リモートワークの「ひと休み＆ひと工夫」｜ご主人とお嬢さんが、オンラインでの会議や発表のある授業時に背景のいい場所を争ったりするという小林さん。ご自身も映りこんだり音を立てないようにしたり、なかなか気をつかっているようです。ぜひ、家族間でリモートワークやオンライン授業のスケジュールを共有しましょう。あらかじめ家族の都合がわかれば、どちらがいい場所を使うかも決められますし、奥さまもその時間帯を外して食事をするなど調整がききます。リビングに書き込めるボードなどを置いて予定を書いておくのもいいですね。" class="u-img__max u-only__sp center" loading="lazy">
				</div>
				<div class="sumai03__type type">
					<div class="type__row type__uroko mb4">
						<div>
							<div class="type__ttl mb3">
								<div class="type__badge">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/type__b_badge@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:105px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/type__b_badge-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
								</div>
								<div class="type__ttl_ex">
									<h4 class="u-font-size__28">互いが見えすぎる場合は<br>ステキな障害物でゆるく仕切って</h4>
								</div>
							</div>
						</div>
						<div class="mb3">
							<h5 class="type__num_01 mb2">テーブルは「花瓶」でゆるく仕切る</h5>
							<div>
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__type-b_1@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:456px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__type-b_1-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
							</div>
						</div>
						<div class="mb3">
							<h5 class="type__num_02 mb2">ソファとテーブルは「グリーン」でゆるく仕切る</h5>
							<div>
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__type-b_2@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:638px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__type-b_1-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
							</div>
							<div class="u-float__right u-float__right_sp">
								<small class="u-small">直接、見えないことで、お互いが落ち着く</small>
							</div>
						</div>
					</div>
				</div>
				<div class="sumai03__type type">
					<div class="type__row type__stripe mb6">
						<div>
							<div class="type__ttl mb3">
								<div class="type__badge">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/type__c_badge@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:105px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/type__c_badge-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
								</div>
								<div class="type__ttl_ex">
									<h4 class="u-font-size__28">しっかり遮りたいなら「間仕切り」を使う。</h4>
								</div>
							</div>
						</div>
						<div class="mb3">
							<h5 class="type__num_01 mb2">しっかり遮りたい場合は、「間仕切り」で</h5>
							<div class="u-position__relative">
								<div class="mb2_sp">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__type-c_1b@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:638px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__type-c_1b-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
								</div>
								<div class="type__arrow">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/type__allow@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:61px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/type__allow-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" style="max-width:37px;" loading="lazy">
								</div>
								<div class="type__flex">
									<div class="type__after">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__type-c_1a@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:350px;" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__type-c_1a-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
									</div>
									<div class="type__comment">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__type-c_end@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:285px;" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__type-c_end-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mb6">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__column02@2x.png" alt="リモートワークの「ひと休み＆ひと工夫」｜鉢の大きな観葉植物は移動もたいへんで虫がついたりもするので苦手という方もいらっしゃるかもしれませんね。小ぶりのグリーンでも、椅子などに乗せて高さをつければ目隠しになります。あるいは、フェイクグリーンもおすすめ。最近、種類も質感も進歩しているので、一定期間でいろいろなフェイクグリーンに替えていくと気分転換にもなります。" class="u-img__max u-only__pc center" style="max-width:750px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__column02-sp@2x.png" alt="リモートワークの「ひと休み＆ひと工夫」｜鉢の大きな観葉植物は移動もたいへんで虫がついたりもするので苦手という方もいらっしゃるかもしれませんね。小ぶりのグリーンでも、椅子などに乗せて高さをつければ目隠しになります。あるいは、フェイクグリーンもおすすめ。最近、種類も質感も進歩しているので、一定期間でいろいろなフェイクグリーンに替えていくと気分転換にもなります。" class="u-img__max u-only__sp center" loading="lazy">
				</div>
			</section>
			<section class="sumai03__section04 section04">
				<div class="section04__row">
					<div>
						<div class="section04__idea02 idea02">
							<div class="idea02__row">
								<div class="idea02__sumeister">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__meister@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:165px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section03__meister-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
								</div>
								<div class="idea02__ex">
									<div>
										<div>
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section04__ttl_m@2x.png" alt="改善アイディア2" class="u-img__max u-only__pc" style="max-width:260px;" loading="lazy">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section04__ttl_m-sp@2x.png" alt="改善アイディア2" class="u-img__max u-only__sp" style="max-width:130px;" loading="lazy">
										</div>
										<div class="section04__ttl_m">
											<h5 class="u-font__palt section04__ttl_ex"><span class="u-font-size__28 u-color__aqua">【LD全体で変える】</span><br><span class="u-font-size__28">会議や通信は、別の場所で！<br>LDの「セカンドプレイス」の<br class="u-only__sp">ススメ</span></h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="center mb5">
						<div class="sumai03__balloon_a02center">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__a06@2x.png" alt="オンライン会議やオンライン授業は音声や身振り手振りがあるため、どうしてもほかの人にとって落ち着かない雰囲気になります。LDを有効に使って、セカンドプレイスを作りましょう。会議の時間だけ場所を移したり、距離を空けたいときに有効です。" class="u-img__max u-only__pc" style="max-width:468px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__a06-sp@2x.png" alt="オンライン会議やオンライン授業は音声や身振り手振りがあるため、どうしてもほかの人にとって落ち着かない雰囲気になります。LDを有効に使って、セカンドプレイスを作りましょう。会議の時間だけ場所を移したり、距離を空けたいときに有効です。" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
				</div>
				<div class="sumai03__type type">
					<div class="type__row type__uroko mb4">
						<div>
							<div class="type__ttl mb3">
								<div class="type__badge">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/type__a_badge@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:105px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/type__a_badge-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
								</div>
								<div class="type__ttl_ex">
									<h4 class="u-font-size__30">ソファにサイドテーブルを置いて仕事場に。</h4>
								</div>
							</div>
						</div>
						<div class="mb3">
							<h5 class="type__num_01 mb2">ソファにサイドテーブルを置いて、セカンドプレイスに</h5>
							<div>
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section04__type-a_1@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:535px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section04__type-a_1-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
							</div>
							<div class="u-float__right u-float__right_sp">
								<small class="u-small">サイドテーブルを足して、２つめの仕事場に</small>
							</div>
						</div>
					</div>
				</div>
				<div class="sumai03__type type">
					<div class="type__row type__uroko mb4">
						<div>
							<div class="type__ttl mb3">
								<div class="type__badge">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/type__b_badge@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:105px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/type__b_badge-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
								</div>
								<div class="type__ttl_ex">
									<h4 class="u-font-size__30">置き家具で新しいスペースを創る。</h4>
								</div>
							</div>
						</div>
						<div class="mb3">
							<h5 class="type__num_02 mb2">置き式家具で、新しい場所をつくる</h5>
							<div>
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section04__type-b_1@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:622px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section04__type-b_1-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
							</div>
							<div class="u-clearfix mb3 mb0_sp">
								<div class="u-float__right u-float__right_sp u-text__align_r">
									<small class="u-small">間仕切りを兼ねた家具を置けば、<br class="u-only__sp">仕事コーナーに</small>
								</div>
							</div>
							<div>
								<div class="type__flex type__flex_sp">
									<div class="type__flex_img">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section04__type-b_1a@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:350px;" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section04__type-b_1a-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
									</div>
									<div class="type__flex_top pl2">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/type__allow_b@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:46px;" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/type__allow_b-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max center u-only__sp" style="max-width:22px;" loading="lazy">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="sumai03__balloon_q03center">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__q06@2x.png" alt="LDのスペースを上手く使うとできそうですね。ぜひ、やってみたいです！" class="u-img__max u-only__pc" style="max-width:468px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__q06-sp@2x.png" alt="LDのスペースを上手く使うとできそうですね。ぜひ、やってみたいです！" class="u-img__max u-only__sp" loading="lazy">
				</div>
				<div class="sumai03__type type">
					<div class="type__row type__stripe type__stripe_l mb6">
						<div>
							<div class="type__ttl mb8">
								<div class="type__badge">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/type__c_badge@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:105px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/type__c_badge-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
								</div>
								<div class="type__ttl_ex">
									<h4 class="u-font-size__30">マンション共用部を活用する。</h4>
								</div>
							</div>
						</div>
						<div class="mb3">
							<div class="u-position__relative">
								<div class="type__flex">
									<div class="type__over">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section04__type-c_1@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:520px;" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section04__type-c_1-sp@2x.jpg" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</div>
									<div class="type__comment_02 type__flex_end">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section04__type-c_top@2x.png" alt="マンションにワーキングスペースやPC作業ができる場所がある場合は、利用するのも手ですね。" class="u-img__max u-only__pc" style="max-width:324px;" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/section04__type-c_top-sp@2x.png" alt="マンションにワーキングスペースやPC作業ができる場所がある場合は、利用するのも手ですね。" class="u-img__max u-only__sp" loading="lazy">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mb6">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/sectio04__column@2x.png" alt="長時間座り続けると血流が滞り、代謝機能が落ち、ひいては成人病リスクや寿命にまで影響すると言われています。リモートワークやオンライン授業の合間には、ぜひ立ち上がって軽く動きたいものです。理想は30分に１回ですが、それが難しい場合は1～2時間に１回10分程度、立ち上がって動きましょう。むくみ防止の上でも、畳など平らなところで足を伸ばすのも健康にいいですよ。" class="u-img__max u-only__pc center" style="max-width:750px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/sectio04__column-sp@2x.png" alt="長時間座り続けると血流が滞り、代謝機能が落ち、ひいては成人病リスクや寿命にまで影響すると言われています。リモートワークやオンライン授業の合間には、ぜひ立ち上がって軽く動きたいものです。理想は30分に１回ですが、それが難しい場合は1～2時間に１回10分程度、立ち上がって動きましょう。むくみ防止の上でも、畳など平らなところで足を伸ばすのも健康にいいですよ。" class="u-img__max u-only__sp center" loading="lazy">
				</div>
				<div class="sumai03__balloon_q03center">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__q07@2x.png" alt="具体的にどうすればいいか、わかりました。LDをアレンジできるアイテムを検討しようと思います。" class="u-img__max u-only__pc" style="max-width:457px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__q07-sp@2x.png" alt="具体的にどうすればいいか、わかりました。LDをアレンジできるアイテムを検討しようと思います。" class="u-img__max u-only__sp" loading="lazy">
				</div>
				<div class="center mb8">
					<div class="sumai03__balloon_a04center">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__a07@2x.png" alt="ぜひ、いろいろ工夫して" class="u-img__max u-only__pc" style="max-width:383px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_03/balloon__a07-sp@2x.png" alt="ぜひ、いろいろ工夫して" class="u-img__max u-only__sp" loading="lazy">
					</div>
				</div>
				<div class="mb5">
					<div>
						<div class="center">
							<h6 class="u-font__normal">わが家らしいアレンジが自在</h6>
							<a href="https://e-suteki.haseko.jp/service/living-dining-foris-index.html?utm_source=brc_sos_vol03&utm_medium=web&utm_campaign=living_dining_foris_index" target="_blank" rel="nofollow" class=" sumai03__btn sumai03__btn_yellow" data-ga-click="foris3_1">快適なリビング・ダイニングのための<br class="u-only__sp">アイテムはこちら</a>
						</div>
					</div>
				</div>
			</section>
			<section class="sumai03__section05 section05">
				<div class="section05__row">
					<div class="section03__ttl mb4">
						<h4 class="section03__ttl_ex u-font-size__28 u-ilblock u-font__palt">ほかに、こんな方法もおススメです。</h4>
					</div>
					<div>
						<div class="center mb3">
							<a href="https://www.haseko.co.jp/hrf/reform/special/R_and_Magazine/01/index.html" target="_blank" rel="nofollow" class=" sumai03__btn sumai03__btn_green" data-ga-click="foris3_2">リフォームして固定の<br class="u-only__sp">ワーキングスペースを創る</a>
						</div>
						<div class="center">
							<a href="https://e-suteki.haseko.jp/suteki/vol83-interior.html?utm_source=brc_sos_vol03&utm_medium=web&utm_campaign=vol83_interior#cafestyle_workstyle" target="_blank" rel="nofollow" class=" sumai03__btn sumai03__btn_green" data-ga-click="foris3_3">既存の家具を利用し<br class="u-only__sp">スペースを確保する</a>
						</div>
					</div>
				</div>
				<?php include($inc_path . "/lib/inc/page/_magazine/__back_num_sumai.php") ?>
			</section>
		</div>
		<div class="mb3">
			<?php $CmGtmId = "";
			include($inc_path . "/lib/inc/page/_magazine/__comic01_cm.php");
			?>
		</div>
	</article>
</main>
<?php
$toindex_url = "/magazine/index_foris.php";
include($inc_path . "/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
