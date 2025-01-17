<?php
//base
include ("../../function.php");
$content = get_id_data('8004');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/_temp" ,"パンくず名");
		$panAry[] = array("/_temp/index.php" ,"パンくず名");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<header class="main__header main-header">
			<?php
			$main_header_data = get_id_data('8004');
			$article = $main_header_data[0];
			?>
			<div class="main-header__row">
				<figure class="main-header__thum">
					<img src="<?php echo $img_url.'/thum'.$article['image'] ?>" alt="<?php echo $article['title'] ?>の画像">
				</figure>
				<div class="main-header__ex">
					<h2 class="main-header__ttl"><?php echo $article['title'] ?></h2>
					<p class="main-header__desc"><?php echo $article['description'] ?></p>
				</div>
			</div>
		</header>

		<aside class="main__tags tags">
			<?php
			foreach($article['tags'] as $key => $val) {
				echo '<a href="'.$search_url."?tag=".$key.'">'.'<em>'.$key.'</em>'.'<span class="num">'.$val.'</span></a>';
			};
			?>
		</aside>

		<section>
			<?php
			echo show_id_photoList("7008 ,8004");
			?>

		</section>

		<section class="main__body">
			<header class="main__head">
				<h2 lass="main__ttl">セクションタイトル</h2>
				<p class="main__desc">ディスクリプション</p>
			</header>
			<div class="main__body">


				<figure>
					<img src="<?php echo $base_url ?>/lib/img/dummy/golden@2x.png" alt="dummy" class="u-img__max">
				</figure>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores repudiandae, nihil consectetur dignissimos facere, ipsa recusandae. Enim possimus distinctio, vel voluptatibus amet velit nisi iste quisquam tempore voluptates, doloremque impedit.</p>
			</div>
			<footer class="main__foot">
				<p>セクションフッター</p>
			</footer>
		</section>

		<section class="main__body">
			<h2 class="main__ttl">セクションタイトル</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores repudiandae, nihil consectetur dignissimos facere, ipsa recusandae. Enim possimus distinctio, vel voluptatibus amet velit nisi iste quisquam tempore voluptates, doloremque impedit.</p>
		</section>

		<footer class="main__footer main-footer">
			<section class="main-footer__body recommend">
				<h3 class="main-footer__ttl recommend__ttl">コンテンツフッター（おすすめ記事とか）</h3>
				<div class="recommend__row">
					<article class="recommend__item">
						<a href="#" class="recommend__inner">
							<figure class="recommend__img">
								<img src="<?php echo $img_url; ?>/dummy/golden.png" alt="dummy">
							</figure>
							<h5 class="recommend__ttl">記事１</h5>
							<p>この記事はダミーです。記事リストを表示しています。</p>
						</a>
					</article>
					<article class="recommend__item">
						<a href="#" class="recommend__inner">
							<figure class="recommend__img">
								<img src="<?php echo $img_url; ?>/dummy/golden.png" alt="dummy">
							</figure>
							<h5 class="recommend__ttl">記事１</h5>
							<p>この記事はダミーです。記事リストを表示しています。</p>
						</a>
					</article>
					<article class="recommend__item">
						<a href="#" class="recommend__inner">
							<figure class="recommend__img">
								<img src="<?php echo $img_url; ?>/dummy/golden.png" alt="dummy">
							</figure>
							<h5 class="recommend__ttl">記事１</h5>
							<p>この記事はダミーです。記事リストを表示しています。</p>
						</a>
					</article>
				</div>
			</section>

			<section class="main-footer__body">
				<h3 class="main-footer__ttl ">その他のフッターコンテンツ</h3>
				<p>その他のフッターコンテンツテキスト.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum eum maxime expedita alias voluptatem impedit, soluta cum, rem vitae harum ducimus exercitationem odio laudantium odit iusto molestiae nesciunt, totam perspiciatis.</p>
			</section>

			<aside class="main-footer__sns u-sns">
				<div class="u-sns__row">
					<a href="" class="u-sns__item u-btn_s">Twitter</a>
					<a href="" class="u-sns__item u-btn_s">Facebook</a>
					<a href="" class="u-sns__item u-btn_s">Instagram</a>
				</div>
			</aside>

		</footer>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
