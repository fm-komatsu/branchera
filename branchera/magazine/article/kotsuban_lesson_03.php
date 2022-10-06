<?php
//base
include ("../../function.php");
$content = get_id_data('24001');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article kotsuban-lesson";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/magazine/" ,"ブランシエラマガジン");
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>
		<div class="main__wrapper">

			<section class="section wrapper">

				<div class="mb5 mb3_sp">
					<figure class="mb0">
						<img src="<?php echo $img_url; ?>/magazine/kotsuban_lesson/kotsuban_mv_pc@2x.jpg"
							alt="ボディワーク「b-i STYLE®」スタジオレッスン　イメージ" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url; ?>/magazine/kotsuban_lesson/kotsuban_mv_sp@2x.jpg"
						alt="ボディワーク「b-i STYLE®」スタジオレッスン イメージ" class="u-img__max u-only__sp" loading="lazy">
					</figure>
					<?php
						include ($inc_path."/lib/inc/page/_magazine/__kotsuban_lesson__headnav.php");
					?>
				</div>
				<div class="mb4">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/cate_pfd@2x.png" alt="ペルヴィスフローダンス｜<?php echo $pageTtl?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/cate_pfd-sp@2x.png" alt="ペルヴィスフローダンス｜<?php echo $pageTtl?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="kotsuban-lesson-movie-list movie-list mb3">
					<div class="movie-list__row">
						<div class="movie-list__item"><a href="https://www.youtube.com/watch?v=bt6I4nAAKOE" class="mfp-btn__video"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/movie_pfd_01@2x.png" alt="整顔Ⅰ ～土台から整える～" class="u-img__max"></a></div>
						<div class="movie-list__item"><a href="https://www.youtube.com/watch?v=hXPJsNUuKWY" class="mfp-btn__video"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/movie_pfd_02@2x.png" alt="整顔Ⅱ ～オイルトリートメントでスッキリ顔へ～" class="u-img__max"></a></div>
						<?php  if ($ssoFlag == 1){ ?>
						<div class="movie-list__item"><a href="https://www.youtube.com/watch?v=O5hLhKNsnfk" class="mfp-btn__video"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/movie_pfd_03@2x.png" alt="バストケア ～予防も回復も～" class="u-img__max"></a></div>
						<div class="movie-list__item"><a href="https://www.youtube.com/watch?v=HZ_xVDtI_nw" class="mfp-btn__video"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/movie_pfd_04@2x.png" alt="二の腕締め ～きっちり二の腕を使う～" class="u-img__max"></a></div>
						<div class="movie-list__item"><a href="https://www.youtube.com/watch?v=Oou4ZIy5Bqg" class="mfp-btn__video"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/movie_pfd_05@2x.png" alt="くびれ ～メリハリのある～" class="u-img__max"></a></div>
						<?php } else { ; ?>
							<a href="<?php echo $login_url; ?>" class="u-btn_brand center mt3">ログインしてもっと動画を観る</a>
						<?php } ?>
					</div>
				</div>
				<div class="kotsuban-lesson-link link mb5 mb10_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/link_top@2x.png" alt="" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/link_top-sp@2x.png" alt="" class="u-img__max u-only__sp" loading="lazy">
					</figure>
					<div class="link__row">
						<p class="kotsuban-lesson__strong center mt0 u-font__palt">ペルヴィス®ワークは「b-i STYLE®」にてスタジオレッスン・オンラインレッスンが受けられます。</p>
						<figure class="center link__btn">
							<a href="https://www.b-i-style.com/" target="_blank"><img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/btn_link@2x.png" alt="詳しくはこちら" class="u-img__max center" loading="lazy" style="max-width:270px;"></a>
						</figure>
					</div>
				</div>
				<div class="kotsuban-lesson-assist assist mb4">
					<div class="assist__row ">
						<div class="assist__img">
							<img
							src="<?php echo $img_url ?>/magazine/kotsuban_lesson/teacher_kyo@2x.jpg"
							class="u-img__max assist__teacherimg"
							alt="プロデューサーkyo先生"
							loading="lazy">
						</div>
						<div class="assist__ex">
							<figure class="mb1_sp">
								<img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/int_ttl@2x.png" alt="教えてくれたのはこの方！" class="u-img__max mb1 u-only__pc" loading="lazy" style="max-width:212px;">
								<img src="<?php echo $img_url ?>/magazine/kotsuban_lesson/int_ttl-sp@2x.png" alt="教えてくれたのはこの方！" class="u-img__max u-only__sp" loading="lazy" style="max-width:151px;">
							</figure>
							<h3 class="mb2 kotsuban-lesson__strong">骨盤の女王・ボディーワーク<br class="u-only__sp">プロデューサーkyo先生</h3>
							<p>フィットネスインストラクターとして25年以上の指導経歴をもつkyo先生。自力で骨盤のゆがみを調整し、美しいバランスのとれたボディを目指す「b-i STYLE®」を展開しています。</p>
							<a href="http://www.b-i-style.com" target="_blank" class="u-icon">http://www.b-i-style.com</a>
							<p class="cap">※b-i STYLE®(ビイスタイル)は株式会社b-iの商標登録です。</p>
						</div>
					</div>
				</div>
				<div class="kotsuban-lesson-footer">
					<?php
						include ($inc_path."/lib/inc/page/_magazine/__kotsuban_lesson__footnav.php");
					?>
				</div>
			</section>
		</div>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
