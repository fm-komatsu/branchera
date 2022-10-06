<?php
//base
include ("../../function.php");
$content = get_id_data('11043');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article page-enquete-design__2 enq12";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/enquete/" ,"アンケート");
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>

		<div class="main__wrapper">

			<section class="main__item mb3 mb1_sp">
				<h2 class="u-ttl__l">満足度・意識調査2021</h2>
				<div class="u-assist_enq_low07 u-only__pc">
					回答期間　　　：　2021年1月21日（木）～2021年2月7日（日）<br>
					回答者数　　　：　計4,289名<br>

				</div>
				<div class="u-assist_enq_low07 u-only__sp u-font__palt">
					回答期間：2021年1月21日（木）～2021年2月7日（日）<br>
					回答者数：計4,289名<br>

				</div>
				<div class="mb2">
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/main-v@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="<?php echo $pageTtl ?>" />
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/main-v-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="<?php echo $pageTtl ?>" />
					</div>
				</div>
				<p>日常が大きく変わったこの1年。新しい生活様式が広がる中で、ブランシエラクラブでも、従来のイベントに代わるさまざまなコンテンツやキャンペーンを企画してきました。そこで、「2020年、会員さまの目にはブランシエラクラブがどう映っていたのか？」「今後どんなことをブランシエラクラブに期待しているのか？」といった、気になる本音をアンケート調査！さっそく、ブランシエラクラブ満足度・意識調査の結果をお届けします！</p>
			</section>
			<section>
				<div>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q1__01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="Q１ 料理動画を毎週掲載していることを知っていますか？" />
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q1__01-sp@2x.png" loading="lazy" class="u-img__max" alt="Q１ 料理動画を毎週掲載していることを知っていますか？" />
					</div>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q1__02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="こんなレシピが知りたい！イメージ画像" />
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q1__02-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="こんなレシピが知りたい！イメージ画像" />
					</div>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q1__03@2x.jpg" loading="lazy" class="u-only__pc u-img__max" alt="「バル風パーティレシピ」を実践するオンラインイベントを開催！" />
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q1__03-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="「バル風パーティレシピ」を実践するオンラインイベントを開催！" />
					</div>
					<a href="<?php echo $base_url ?>/event/article/event-online.php" data-ga-click="enq17_online_event">
						<div class="u-only__pc">
							<img src="<?php echo $img_url ?>/enquete/report17/q1__04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
						</div>
						<div class="u-only__sp">
							<img src="<?php echo $img_url ?>/enquete/report17/q1__04-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
						</div>
					</a>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q1__05@2x.png" loading="lazy" class="u-only__pc u-img__max"  alt="今後オンラインで開催してほしいイベントはありますか？" />
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q1__05-sp@2x.png" loading="lazy" class="u-only__sp u-img__max"  alt="今後オンラインで開催してほしいイベントはありますか？" />
					</div>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q1__06@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="今後オンラインで開催してほしいイベントはありますか？" />
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q1__06-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="今後オンラインで開催してほしいイベントはありますか？" />
					</div>
					<div class="flex between" style="background-color:#fefce0;">
						<div class="w50">
							<a href="<?php echo $base_url ?>/magazine/article/kotsuban_lesson_01.php" data-ga-click="enq17_karada_zukuri">
								<div class="u-only__pc">
									<img src="<?php echo $img_url ?>/enquete/report17/q1__07@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
								</div>
								<div class="u-only__sp">
									<img src="<?php echo $img_url ?>/enquete/report17/q1__07-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
								</div>
							</a>
						</div>
						<div class="w50">
							<div class="u-only__pc">
							<a href="<?php echo $base_url ?>/event/article/event-golf19.php" data-ga-click="enq17_golf">
								<img src="<?php echo $img_url ?>/enquete/report17/q1__08@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ツアープロから教わるワンポイントレッスン" />
							</a>
						</div>
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q1__08-sp@2x.png" alt="ツアープロから教わるワンポイントレッスン｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy" alt="ツアープロから教わるワンポイントレッスン" />
					</div>
					<a href="<?php echo $base_url ?>/event/article/event-golf19.php" data-ga-click="enq17_golf">
						<div class="u-only__pc">
							<img src="<?php echo $img_url ?>/enquete/report17/q1__09@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
						</div>
						<div class="u-only__sp">
							<img src="<?php echo $img_url ?>/enquete/report17/q1__09-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
						</div>
					</a>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q3__05-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" />
					</div>
				</div>
			</div>
			</section>
			<section>
				<div>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q2__01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="ブランシエラマガジンの中で、興味があるコンテンツはどれですか？" />
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q2__01-sp@2x.png" loading="lazy" style="margin-top:-2px;" class="u-only__sp u-img__max" alt="ブランシエラマガジンの中で、興味があるコンテンツはどれですか？" />
					</div>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q2__02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="暮らしの今を切り取りレポートする「いま暮らCafe」を知っていますか？" />
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q2__02-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="暮らしの今を切り取りレポートする「いま暮らCafe」を知っていますか？" />
					</div>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q2__03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="こんなテーマを取り上げて欲しい！" />
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q2__03-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="こんなテーマを取り上げて欲しい！" />
					</div>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q2__04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="「いま暮らCafe」ではみなさまの声募集＆レポートを更新中！" />
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q2__04-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="「いま暮らCafe」ではみなさまの声募集＆レポートを更新中！" />
					</div>
					<a href="<?php echo $base_url ?>/magazine/index_imakura-cafe.php" data-ga-click="enq17_imakura_cafe">
						<div class="u-only__pc">
							<img src="<?php echo $img_url ?>/enquete/report17/q2__05@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
						</div>
						<div class="u-only__sp">
							<img src="<?php echo $img_url ?>/enquete/report17/q2__05-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
						</div>
					</a>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q2__06@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q2__06-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q3__01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="Q3 ブランシエラクラブでSNSを使った投稿はご存知ですか？" />
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q3__01-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="Q3 ブランシエラクラブでSNSを使った投稿はご存知ですか？" />
					</div>
					<div class="report17__q3 q3 pt2 pb2">
						<div class="q3__ex">
							<img src="<?php echo $img_url ?>/enquete/report17/q3__02@2x.png" loading="lazy" class="u-img__max u-only__pc" alt="よかったら公式アカウントをフォローしてくださいね！">
							<img src="<?php echo $img_url ?>/enquete/report17/q3__02-sp@2x.png" loading="lazy" class="u-img__max u-only__sp center" alt="よかったら公式アカウントをフォローしてくださいね！" />
						</div>
						<a href="https://www.instagram.com/haseko_brancheraclub/" data-ga-click="enq17_insta" target="_blank" class="q3__insta u-only__pc">
							<div class="u-only__pc">
								<img src="<?php echo $img_url ?>/enquete/report17/q3__03@2x.png" loading="lazy" style="max-width:147px;" class="u-img__max u-only__pc" alt="Instagram" />
							</div>
						</a>
						<a href="https://www.facebook.com/hasekobrancheraclub/" data-ga-click="enq17_fb" target="_blank" class="q3__fb u-only__pc">
							<div>
								<img src="<?php echo $img_url ?>/enquete/report17/q3__04@2x.png" loading="lazy" class="u-img__max u-only__pc">
							</div>
						</a>
						<div>
							<div class="q3__sp u-only__sp">
								<a href="https://www.instagram.com/haseko_brancheraclub/" data-ga-click="enq17_insta" target="_blank" class="q3__insta">
									<div class="u-only__sp">
										<img src="<?php echo $img_url ?>/enquete/report17/q3__03-sp@2x.png" loading="lazy" style="max-width:147px;" class="u-img__max u-only__sp center" alt="Instagram" />
									</div>
								</a>
								<a href="https://www.facebook.com/hasekobrancheraclub/" data-ga-click="enq17_fb" target="_blank" class="q3__fb">
									<div class="u-only__sp">
										<img src="<?php echo $img_url ?>/enquete/report17/q3__04-sp@2x.png" loading="lazy" style="max-width:147px;" class="u-img__max u-only__sp center">
									</div>
								</a>
							</div>
						</div>
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report17/q3__05@2x.png" loading="lazy" class="u-img__max u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q3__05-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="facebook" />
					</div>
				</div>
			</section>
			<section>
				<div>
					<div class="u-only__pc">
							<img src="<?php echo $img_url ?>/enquete/report17/q4__01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="今後スマイレージに期待したいこと" />
					</div>
					<div class="u-only__sp">
							<img src="<?php echo $img_url ?>/enquete/report17/q4__01-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="今後スマイレージに期待したいこと" />
					</div>
					<div class="u-only__pc">
							<img src="<?php echo $img_url ?>/enquete/report17/q4__02@2x.png" loading="lazy" class="u-img__max" alt="ため方いろいろ！スマイルをどんどんゲット！" />
					</div>
					<div class="u-only__sp">
							<img src="<?php echo $img_url ?>/enquete/report17/q4__02-sp@2x.png" loading="lazy" class="u-img__max" alt="ため方いろいろ！スマイルをどんどんゲット！" />
					</div>
					<div class="u-only__pc">
							<img src="<?php echo $img_url ?>/enquete/report17/q4__03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら" />
					</div>
					<div class="u-only__sp">
							<img src="<?php echo $img_url ?>/enquete/report17/q4__03-sp@2x.png" loading="lazy" class="u-img__max" alt="詳しくはこちら" />
					</div>
					<a href="<?php echo $base_url ?>/smile/accumulate-smileage.php" data-ga-click="enq17_tameru">
						<div class="u-only__pc">
							<img src="<?php echo $img_url ?>/enquete/report17/q4__04@2x.png" loading="lazy" style="margin-top:-2px" class="u-img__max" alt="長谷工グループのサービスで利用したいものは？" />
						</div>
						<div class="u-only__sp">
							<img src="<?php echo $img_url ?>/enquete/report17/q4__04-sp@2x.png" loading="lazy" style="margin-top:-2px" class="u-img__max" alt="長谷工グループのサービスで利用したいものは？" />
						</div>
					</a>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q4__05@2x.png" style="margin-top:-2px" loading="lazy" class="u-img__max" alt="ためたスマイルは長谷工グループのサービスにもご利用いただけます！" />
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q4__05-sp@2x.png" loading="lazy" class="u-img__max" alt="ためたスマイルは長谷工グループのサービスにもご利用いただけます！" />
					</div>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q4__06@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら">
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q4__06-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら">
					</div>
					<a href="<?php echo $base_url ?>/smile/use-smileage.php" data-ga-click="enq17_use_smile">
						<div class="u-only__pc">
							<img src="<?php echo $img_url ?>/enquete/report17/q4__07@2x.png" loading="lazy" class="u-only__pc u-img__max"  alt="詳しくはこちら">
						</div>
						<div class="u-only__sp">
							<img src="<?php echo $img_url ?>/enquete/report17/q4__07-sp@2x.png" loading="lazy" class="u-only__sp u-img__max"  alt="詳しくはこちら">
						</div>
					</a>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report17/q4__08@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="">
						<img src="<?php echo $img_url ?>/enquete/report17/q4__08-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="">
					</div>
				</div>
			</section>
			<section>
				<div>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q5__01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="Q5 ClubOffbyHASEKOを利用したことがありますか？">
						<img src="<?php echo $img_url ?>/enquete/report17/q5__01-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="Q5 ClubOffbyHASEKOを利用したことがありますか？">
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q5__01-sp@2x.png" loading="lazy" style="margin-top:-5px;" class="u-only__sp u-img__max" alt="Q5 ClubOffbyHASEKOを利用したことがありますか？" />
					</div>
					<a href="<?php echo $base_url ?>/gift/article/cluboff.php" data-ga-click="enq17_cluboﬀ">
						<div>
							<img src="<?php echo $img_url ?>/enquete/report17/q5__02@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="詳しくはこちら">
							<img src="<?php echo $img_url ?>/enquete/report17/q5__02-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="詳しくはこちら">
						</div>
					</a>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report17/q5__03@2x.png" loading="lazy" class="u-img__max u-only__pc" alt="みなさまがClubOffbyHASEKOに期待したいこと" >
						<img src="<?php echo $img_url ?>/enquete/report17/q5__03-sp@2x.png" loading="lazy" class="u-img__max u-only__sp" alt="みなさまがClubOffbyHASEKOに期待したいこと" >
					</div>
				</div>
			</section>
			<section>
			<div style="background-color: #fefce0;">
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report17/q6__01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="長谷工グループ各社やサービスで知りたい情報はありますか？">
						<img src="<?php echo $img_url ?>/enquete/report17/q6__01-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="長谷工グループ各社やサービスで知りたい情報はありますか？">
					</div>
					<div class="report17__q6 q6">
						<div class="q6__fukidashi">
							<div class="u-only__pc">
								<img src="<?php echo $img_url ?>/enquete/report17/q6__02@2x.png" loading="lazy" style="max-width:620px" class="u-img__max u-only__pc" alt="長谷工コーポレーションCSR" />
							</div>
							<div class="u-only__pc">
								<a href="https://www.haseko.co.jp/hc/csr/" data-ga-click="enq17_csr" target="_blank">
								<div class="u-only__pc">
									<img src="<?php echo $img_url ?>/enquete/report17/q6__03@2x.png" loading="lazy" style="max-width:620px; margin-top:-2px" class="u-img__max u-only__pc" alt="詳しくはこちら" />
								</div>
								</a>
							</div>
						</div>
						<div class="u-only__pc q6__bran">
							<img src="<?php echo $img_url ?>/enquete/report17/bran@2x.png" loading="lazy" style="max-width:96px" class="u-img__max u-only__pc mt3" alt="ブランちゃん" />
						</div>
					</div>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q6__04.png" loading="lazy" class="u-img__max u-only__pc" alt="背景" />
					</div>
					<div>
						<div class="u-only__sp">
							<a href="https://www.haseko.co.jp/hc/csr/" data-ga-click="enq17_csr" target="_blank">
								<img src="<?php echo $img_url ?>/enquete/report17/q6__02-sp@2x.png" alt="詳しくはこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
							</a>
						</div>
					</div>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q6__05@2x.png" loading="lazy" style="max-width:740px; margin-top:-1px;" class="u-img__max u-only__pc" alt="長谷工のシニア事業高齢者住宅・在宅ケアサービス" />
					</div>
					<div class="u-only__sp">
						<img src="<?php echo $img_url ?>/enquete/report17/q6__03-sp@2x.png" loading="lazy" class="u-img__max u-only__sp center" alt="どんな介護関連のサービスがあるのか知りたい！" />
					</div>
					<div class="report17__q6 q6">
						<div class="q6__fukidashi">
							<div class="u-only__pc">
								<img src="<?php echo $img_url ?>/enquete/report17/q6__06@2x.png" loading="lazy" style="max-width:620px" class="u-img__max u-only__pc" alt="長谷工コーポレーションCSR" />
							</div>
							<a href="<?php echo $base_url ?>/magazine/article/senior-service.php" data-ga-click="enq17_senior">
								<div class="u-only__pc">
									<img src="<?php echo $img_url ?>/enquete/report17/q6__07@2x.png" loading="lazy" style="max-width:620px" class="u-img__max u-only__pc" alt="詳しくはこちら" />
								</div>
							</a>
						</div>
						<div class="u-only__pc q6__bran">
							<img src="<?php echo $img_url ?>/enquete/report17/bran@2x.png" loading="lazy" style="max-width:96px" class="u-img__max u-only__pc mt6" alt="ブランちゃん" />
						</div>
					</div>
					<a href="<?php echo $base_url ?>/magazine/article/senior-service.php" data-ga-click="enq17_senior">
					<div class="u-only__sp">
							<img src="<?php echo $img_url ?>/enquete/report17/q6__02-sp@2x.png" alt="詳しくはこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
						</div>
					</a>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q6__04.png" loading="lazy" class="u-img__max u-only__pc" alt="詳しくはこちら" />
					</div>
					<div class="u-only__pc">
						<img src="<?php echo $img_url ?>/enquete/report17/q6__09@2x.png" loading="lazy" style="max-width:740px" class="u-img__max u-only__pc" alt="詳しくはこちら" />
					</div>
					<div>
					<div class="report17__q6 q6">
						<div class="q6__fukidashi">
							<div class="u-only__pc">
								<img src="<?php echo $img_url ?>/enquete/report17/q6__10@2x.png" loading="lazy" style="max-width:620px" class="u-img__max u-only__pc" alt="長谷工コーポレーションCSR" />
							</div>
							<a href="<?php echo $base_url ?>/magazine/index_technology.php" data-ga-click="enq17_technology">
								<div class="enq17-q6__fukidashi u-only__pc">
									<img src="<?php echo $img_url ?>/enquete/report17/q6__11@2x.png" loading="lazy" style="max-width:620px; margin-top:-2px" class="u-img__max u-only__pc" alt="詳しくはこちら" />
								</div>
							</a>
							<a href="https://www.haseko.co.jp/hc/personal/" data-ga-click="enq17_personal" target="_blank">
							<div class="enq17-q6__fukidashi u-only__pc">
								<img src="<?php echo $img_url ?>/enquete/report17/q6__12@2x.png" loading="lazy" style="max-width:620px; margin-top:-2px" class="u-img__max u-only__pc" alt="詳しくはこちら" />
							</div>
							</a>
						</div>
						<div class="u-only__pc q6__bran">
							<img src="<?php echo $img_url ?>/enquete/report17/bran@2x.png" loading="lazy" style="max-width:96px" class="u-img__max u-only__pc mt8" alt="ブランちゃん" />
						</div>
					</div>
					<div>
						<div class="u-only__sp">
							<img src="<?php echo $img_url ?>/enquete/report17/q6__05-sp@2x.png" alt="詳しくはこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
						</div>
						<a href="<?php echo $base_url ?>/magazine/index_technology.php" data-ga-click="enq17_technology">
						<div class="u-only__sp">
							<img src="<?php echo $img_url ?>/enquete/report17/q6__02-sp@2x.png" alt="詳しくはこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
						</div>
						</a>
						<div class="u-only__sp">
							<img src="<?php echo $img_url ?>/enquete/report17/q6__07-sp@2x.png" alt="個人のお客様｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
						</div>
						<a href="https://www.haseko.co.jp/hc/personal/" data-ga-click="enq17_personal" target="_blank">
						<div class="u-only__sp">
							<img src="<?php echo $img_url ?>/enquete/report17/q6__02-sp@2x.png" alt="詳しくはこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
						</div>
						</a>
						</div>
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report17/q6__08-sp@2x.png" alt="詳しくはこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
					</div>
				</div>
				<img src="<?php echo $img_url ?>/enquete/report17/q6__14@2x.png" loading="lazy" class="u-img__max u-only__pc" alt="" />
			</section>
			<section>
				<div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report17/outro__01@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="貴重なご意見ありがとうございました！">
						<img src="<?php echo $img_url ?>/enquete/report17/outro__01-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="貴重なご意見ありがとうございました！">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report17/outro__02@2x.png" loading="lazy" class="u-only__pc u-img__max">
						<img src="<?php echo $img_url ?>/enquete/report17/outro__02-sp@2x.png" loading="lazy" class="u-only__sp u-img__max">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report17/outro__03@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！第17回アンケートは2021年1月21日（木）〜実施！みなさまのご回答をお待ちしております！">
						<img src="<?php echo $img_url ?>/enquete/report17/outro__03-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="お得なサービス情報は毎週木曜日のメールマガジンをご覧ください！第17回アンケートは2021年1月21日（木）〜実施！みなさまのご回答をお待ちしております！">
					</div>
					<div>
						<img src="<?php echo $img_url ?>/enquete/report17/outro__04@2x.png" loading="lazy" class="u-only__pc u-img__max" alt="第18回アンケートは2021年4月1日（木）〜実施！みなさまのご回答をお待ちしております！" >
						<img src="<?php echo $img_url ?>/enquete/report17/outro__04-sp@2x.png" loading="lazy" class="u-only__sp u-img__max" alt="第18回アンケートは2021年4月1日（木）〜実施！みなさまのご回答をお待ちしております！" >
					</div>
				</div>
			</div>
			</section>
		  <?php include ($inc_path."/lib/inc/page/_enquete/__back_num.php") ?>
		</div>
	</article>
</main>

	<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
	<?php  include ($inc_path."/lib/inc/footer.php"); ?>
	<?php  include ($inc_path."/lib/inc/foot.php"); ?>
