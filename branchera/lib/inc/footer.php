<lucky-room-banner img-url="<?php echo $img_url ?>" mylucky-url="<?php echo $mylucky_url; ?>"></lucky-room-banner>

<footer class="footer">
	<div class="footer__row">

		<?php
    /* タグ（キーワード）を挿入する記述 */
    if(preg_match('/article/',$mydir)) {
      echo('
      <aside class="footer__kwtags">
        <div class="main__item main-footer">
          <div class="main-footer__tags u-tags">
            <h5 class="u-tags__ttl">キーワード</h5>
            <div class="u-tags__row">');
            echo show_content_tags($content);
            echo('</div>
          </div>
        </div>
      </aside>');
    } else {
      echo("");
    }
    ?>

		<?php
			if ($content[ 'tag3' ] && isset($content[ 'tag3' ]) && ($content[ 'tag2' ] === '危機管理') && ($content[ 'tag3' ] === '防災')) {
		?>
		  <article class="main__item">
				<a href="<?php echo $base_url?>/smile/article/exchange-emergency.php">
					<img src ="<?php echo $img_url ?>/magazine/alsok/common/disaster_prevention_banner-sp@2x.png"
					class="u-img__max u-only__sp"
					alt="住まいレージ交換賞品　防災グッズ　リンクバナー"
					loading="lazy">
					<img src ="<?php echo $img_url ?>/magazine/alsok/common/disaster_prevention_banner@2x.png"
					alt="住まいレージ交換賞品　防災グッズ　リンクバナー"
					class="u-img__max u-only__pc"
					loading="lazy">
				</a>
			</article>
		<?php } else {} ?>

		<h5 class="center mt1 u-color__brand">みんなにシェアしよう！</h5>
		<aside class="footer__sns u-sns">
			<?php include ($inc_path."/lib/inc/sns.php"); ?>
		</aside>

		<section class="footer__recommended f-recommended">
			<ul class="f-recommended__row">
				<h5 class="f-recommended__ttl">オススメ記事・特典のご紹介</h5>
				<?php echo f_show_category_photoList__random("exchange-product",1); ?>
				<?php echo f_show_category_photoList__random("comic,magazine,event",3); ?>
			</ul>
		</section>

		<section class="footer__inq f-inq">
			<div class="f-inq__row">
				<a href="<?php echo $base_url; ?>/about" class="f-inq__item about">
					<img data-src="<?php echo $img_url; ?>/common/footer/f-inq__about.png" data-retina="<?php echo $img_url; ?>/common/footer/f-inq__about@2x.png" alt="ブランシエラクラブとは？" width="81" height="138">
				</a>
				<a href="<?php echo $myentry_url; ?>" target="_blank" class="f-inq__item admission">
					<img data-src="<?php echo $img_url; ?>/common/footer/f-inq__admission.png" data-retina="<?php echo $img_url; ?>/common/footer/f-inq__admission@2x.png" alt="長谷工ID新規登録（無料）！" width="115" height="162">
				</a>
				<a href="<?php echo $base_url; ?>/gift" class="f-inq__item gift">
					<img data-src="<?php echo $img_url; ?>/common/footer/f-inq__gift.png" data-retina="<?php echo $img_url; ?>/common/footer/f-inq__gift@2x.png" alt="特典サービス" width="86" height="131">
				</a>
			</div>
		</section>

		<section class="footer__sitemap f-sitemap">
			<div class="u-only__pc">
        <h5 id="sns" class="center mt1 u-color__brand">ブランシエラクラブ 公式SNSアカウント</h5>
        <aside class="u-officialsns mb2 mt3">
          <?php include ($inc_path."/lib/inc/official-sns.php"); ?>
        </aside>
      </div>
			<nav class="f-sitemap__row">

				<div class="f-sitemap__item">
					<ul class="f-sitemap__inner">
						<li class="f-sitemap__btn home">
							<a href="<?php echo $base_url; ?>/"><span>ホーム</span></a>
						</li>
						<li class="f-sitemap__btn news">
							<a href="<?php echo $base_url; ?>/news/"><span>ニュース一覧</span></a>
						</li>
						<?php if($ssoFlag == 1){ ?>
						<li class="f-sitemap__btn mypage">
							<a href="<?php echo $mytop_url; ?>" target="_blank"><span>マイページ</span></a>
						</li>
						<li class="f-sitemap__btn logout">
							<a href="<?php echo $logout_url; ?>"><span>ログアウト</span></a>
						</li>
						<?php }else { ?>
						<li class="f-sitemap__btn inq">
							<a href="<?php echo $myentry_url; ?>" target="_blank"><span>新規登録（無料）</span></a>
						</li>
						<li class="f-sitemap__btn  login">
							<a href="<?php echo $login_url; ?>"><span>ログイン</span></a>
						</li>
						<?php }; ?>
					</ul>
				</div>

				<div class="f-sitemap__item">
					<ul class="f-sitemap__inner">
						<li class="f-sitemap__btn magazine">
							<a href="<?php echo $base_url; ?>/magazine/"><span>ブランシエラマガジン</span></a>
						</li>
						<li class="f-sitemap__tags u-tags">
							<h5 class="u-tags__ttl">人気ワード</h5>
							<?php echo show_category_tags("magazine,town,town2 , wakuwaku,comic"); ?>
						</li>
					</ul>
				</div>

				<div class="f-sitemap__item">
					<ul class="f-sitemap__inner">
						<li class="f-sitemap__btn gift">
							<a href="<?php echo $base_url; ?>/gift/"><span>優待サービス</span></a>
						</li>
						<div class="f-sitemap__tags u-tags">
							<h5 class="u-tags__ttl">人気ワード</h5>
							<?php echo show_category_tags("gift,town"); ?>
						</div>
					</ul>
				</div>

				<div class="f-sitemap__item">
					<ul class="f-sitemap__inner">
						<li class="f-sitemap__btn smile">
							<a href="<?php echo $base_url; ?>/smile/"><span>住まいレージ</span></a>
						</li>
						<li class="f-sitemap__btn smail-about">
							<a href="<?php echo $base_url; ?>/smile/about.php"><span>住まいレージとは？</span></a>
						</li>
						<div class="f-sitemap__tags u-tags">
							<h5 class="u-tags__ttl">人気ワード</h5>
							<?php echo show_category_tags("exchange-product,exchange-hcg,lottery"); ?>
						</div>
					</ul>
				</div>

				<div class="f-sitemap__item">
					<ul class="f-sitemap__inner">
						<li class="f-sitemap__btn event">
							<a href="<?php echo $base_url; ?>/event"><span>イベント・キャンペーン</span></a>
						</li>
						<div class="f-sitemap__tags u-tags">
							<h5 class="u-tags__ttl">人気ワード</h5>
							<?php echo show_category_tags("event,mansion,seminar"); ?>
						</div>
					</ul>
				</div>

				<div class="f-sitemap__item">
					<ul class="f-sitemap__inner">
						<li class="f-sitemap__btn enquete">
							<a href="<?php echo $base_url; ?>/enquete"><span>アンケート</span></a>
						</li>
						<div class="f-sitemap__tags u-tags">
							<h5 class="u-tags__ttl">人気ワード</h5>
							<?php echo show_category_tags("enq"); ?>
						</div>
					</ul>
				</div>

				<div class="f-sitemap__item">
					<ul class="f-sitemap__inner">
						<li class="f-sitemap__btn underline  hcg-event">
							<a href="<?php echo $base_url; ?>/hcg/hcg-event.php"><span>長谷工グループのイベント情報</span></a>
						</li>
						<li class="f-sitemap__btn hcg-mansion">
							<a href="<?php echo $base_url; ?>/hcg/hcg-mansion.php"><span>長谷工グループのマンション情報</span></a>
						</li>
					</ul>
				</div>

				<div class="f-sitemap__item">
					<ul class="f-sitemap__inner">
						<li class="f-sitemap__btn about">
							<a href="<?php echo $base_url; ?>/about/"><span>ブランシエラクラブとは？</span></a>
						</li>
						<li class="f-sitemap__btn rules">
							<a href="<?php echo $base_url; ?>/rules/"><span>当サービスのご利用について</span></a>
						</li>
						<li class="f-sitemap__btn rules-id">
							<a href="<?php echo $base_url; ?>/rules/id.php"><span>長谷工ID利用規約</span></a>
						</li>
						<li class="f-sitemap__btn faq">
							<a href="https://branchera-faq.dga.jp/" target="_blank"><span>よくあるご質問</span></a>
						</li>
						<li class="f-sitemap__btn contact underline">
							<a href="<?php echo $base_url; ?>/form/form-contact"><span>お問い合わせ</span></a>
						</li>
						<li class="f-sitemap__btn sitemap">
							<a href="<?php echo $base_url; ?>/sitemap/"><span>サイトマップ</span></a>
						</li>
					</ul>
				</div>

			</nav>
		</section>

		<section class="footer__link f-link">
			<nav class="f-link__row">
				<a href="<?php echo $base_url; ?>/id/" target="_blank" class="f-link__item u-icon">長谷工IDとは</a>
				<a href="http://www.haseko.co.jp/hc/privacy.html" target="_blank" rel="nofollow" class="f-link__item u-icon">個人情報保護方針</a>
				<a href="http://www.haseko.co.jp/hc/social.html" target="_blank" rel="nofollow" class="f-link__item u-icon">ソーシャルメディアガイドライン</a>
				<a href="http://www.haseko.co.jp/hc/" target="_blank" rel="nofollow" class="f-link__item u-icon">運営会社</a>
			</nav>
		</section>

		<address class="footer__add f-add">
			<div class="f-add__copyright"><span>&copy;</span> HASEKO GROUP BRANCHERA CLUB. <br class="u-only__sp">All Rights Reserved.</div>
		</address>

	</div>
</footer>
