<?php
//base
include("../../function.php");
$content = get_id_data('26004');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article sumai04";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//release date
$release_year = "2021";
$release_month = "9";
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
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/main-v@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:896px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/main-v-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
				</div>
			</div>
		</div>
		<div class="main__item sumai04__wrapper">
			<section>
				<div class="sumai04__info sumai04info section_mb">
					<div class="sumai04info__row mb5">
						<div class="sumai04info__bg"></div>
						<h3 class="sumai04info__ttl">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/header__ttl@2x.png" alt="押し入れを収納スペースとしてもっと有効活用したいです！" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/header__ttl-sp@2x.png" alt="押し入れを収納スペースとしてもっと有効活用したいです！" class="u-img__max u-only__sp" loading="lazy">
						</h3>
						<div class="center sumai04info__counselor mb4">
							<h4 class="u-font-size__18">千葉県在住 山田さん</h4>
							<p>娘が嫁いで部屋が空いたので、ベッドを置いて夫婦の寝室にしました。<br>押し入れの布団を入れていたスペースが空き、そこにいろいろ収納したくて<br class="u-only__pc">整理しているのですが、奥にいれたモノが取り出せなかったりと、<br>うまくしまえず困っています。 住まいスターさん、<br>上手な押し入れ収納をアドバイスいただけないでしょうか？</p>
						</div>
						<div class="pb3">
							<div>
								<div>
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/header__img@2x.png" alt="山田家リビング・ダイニング｜image" class="u-img__max u-only__pc center" style="max-width:584px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/header__img-sp@2x.png" alt="山田家リビング・ダイニング｜image" class="u-img__max u-only__sp" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="sumai04__sumeister sumai04sumeister">
						<div class="sumai04sumeister__row">
							<div class="sumai04sumeister__ttl center mb10">
								<h4>わかりました！<br>収納住まいスターを<br class="u-only__sp">派遣いたします！</h4>
							</div>
							<div class="sumai04sumeister__info sumeisterinfo mb5">
								<div class="sumeisterinfo__row">
									<div class="sumeisterinfo__bg"></div>
									<div class="sumeisterinfo__item_l">
										<div class="sumeisterinfo__left mb3">
											<div class="sumeisterinfo__badge mb2_sp">
												<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/sumeister__badge@2x.png" alt="今月の住まいスター" class="u-img__max u-only__pc" style="max-width:134px;" loading="lazy">
												<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/sumeister__badge-sp@2x.png" alt="今月の住まいスター" class="u-img__max u-only__sp" style="max-width:87px;" loading="lazy">
											</div>
											<div>
												<div class="u-font__small">おうちデトックス代表<br>整理収納アドバイザー</div>
												<div><span class="u-font-size__28 u-font__bold">大橋 わか</span><span class="u-font-size__14">先生</span></div>
											</div>
										</div>
										<div class="u-only__pc">
											<div class="mb2">
												<p>
													大手カーテンメーカーを経て、青山の輸入家具・雑貨のセレクトショップでインテリアコーディネーターとして勤務。個人宅と建売住宅のコーディネートを行う中で、「見せるためのインテリア」と「実生活でキレイを維持できるインテリア」は全く違うと知り、整理収納の大切さに気づく。<br>「収納のチカラで叶えるインテリア」をコンセプトに個人宅の整理収納を中心にフリーランスとして約7年活動。2016年にチームで仕事を開始し、2018年1月株式会社設立となる。現在、テレビ・メディア多数で活躍。
												</p>
											</div>
										</div>
									</div>
									<div class="sumeisterinfo__item_r">
										<div>
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/meister__ohashi@2x.jpg" alt="おうちデトックス代表 整理収納アドバイザー 大橋わか" class="u-img__max u-only__pc" style="max-width:315px;" loading="lazy">
											<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/meister__ohashi-sp@2x.jpg" alt="おうちデトックス代表 整理収納アドバイザー 大橋わか" class="u-img__max u-only__sp" loading="lazy">
										</div>
									</div>
									<div class="u-only__sp sumeisterinfo__item_bottom">
										<div class="mb2">
											<p>
												大手カーテンメーカーを経て、青山の輸入家具・雑貨のセレクトショップでインテリアコーディネーターとして勤務。個人宅と建売住宅のコーディネートを行う中で、「見せるためのインテリア」と「実生活でキレイを維持できるインテリア」は全く違うと知り、整理収納の大切さに気づく。<br>「収納のチカラで叶えるインテリア」をコンセプトに個人宅の整理収納を中心にフリーランスとして約7年活動。2016年にチームで仕事を開始し、2018年1月株式会社設立となる。現在、テレビ・メディア多数で活躍。
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w100">
						<div class="sumai04__balloon_q01">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__q01@2x.png" alt="押し入れの広いスペースに モノをどうしまえば いいか難しくて。 収納ケースや棚なども使おうと思うのですがうまくできません。" class="u-img__max u-only__pc" style="max-width:506px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__q01-sp@2x.png" alt="押し入れの広いスペースに モノをどうしまえば いいか難しくて。 収納ケースや棚なども使おうと思うのですがうまくできません。" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="sumai04__balloon_a01">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a01@2x.png" alt="押し入れは奥行きがある仕切りがない" class="u-img__max u-only__pc" style="max-width:323px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a01-sp@2x.png" alt="押し入れは奥行きがある仕切りがない" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="sumai04__balloon_a02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a02@2x.png" alt="この2つが特徴です。これは、布団のような大きな物をしまえる点ではメリットですが、その他のものを収納するには、それなりの工夫が必要なんです。" class="u-img__max u-only__pc" style="max-width:498px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a02-sp@2x.png" alt="この2つが特徴です。これは、布団のような大きな物をしまえる点ではメリットですが、その他のものを収納するには、それなりの工夫が必要なんです。" class="u-img__max u-only__sp center" loading="lazy">
						</div>
						<div class="sumai04__balloon_a03">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a03@2x.png" alt="わかりやすく言うと、適切に仕切ってクローゼット的に使うとうまくいきますよ。ポイントを解説するので一緒に覚えていきましょう。" class="u-img__max u-only__pc" style="max-width:418px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a03-sp@2x.png" alt="わかりやすく言うと、適切に仕切ってクローゼット的に使うとうまくいきますよ。ポイントを解説するので一緒に覚えていきましょう。" class="u-img__max u-only__sp center" loading="lazy">
						</div>
					</div>
				</div>
			</section>
			<section classs="sumai04__setion02 section02">
				<div class="section02__row mb4">
					<div class="section02__ttl mb6">
						<h4 class="section02__ttl_ex u-font-size__30 u-ilblock u-font__palt">押し入れを<br class="u-only__sp">クローゼット使いに替えて、<br>すっきり快適な和室に</h4>
					</div>
					<div class="section02__top mb6">
						<div class="section02__ex mb3">
							<div class="section02__sumeister">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/section02__meister@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:160px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/section02__meister-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
							</div>
							<div class="section02__balloon">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/section02__balloon@2x.png" alt="まずはこの機会にモノの整理をしましょう。整理収納の手順は３ステップです。" class="u-img__max u-only__pc" style="max-width:430px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/section02__balloon-sp@2x.png" alt="まずはこの機会にモノの整理をしましょう。整理収納の手順は３ステップです。" class="u-img__max u-only__sp" loading="lazy">
							</div>
						</div>
						<div>
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/section02__img01@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:695px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/section02__img01-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
						</div>
					</div>
					<div class="mb6">
						<div class="sumai04__balloon_q02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__q02@2x.png" alt="なるほど！1.出す2.減らす3.しまう、わかりやすいです！" class="u-img__max u-only__pc" style="max-width:383px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__q02-sp@2x.png" alt="なるほど！1.出す2.減らす3.しまう、わかりやすいです！" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="sumai04__balloon_a04">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a04@2x.png" alt="Step1と2で、出して不要なものを減らしたら、収納するモノの全体量を把握し、次の要領でしまいます。" class="u-img__max u-only__pc" style="max-width:498px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a04-sp@2x.png" alt="tep1と2で、出して不要なものを減らしたら、収納するモノの全体量を把握し、次の要領でしまいます。" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
					<h5 class="type__num_01 mb2">使用頻度で分けて、季節物などあまり使わないモノは奥に、<br class="u-only__pc">よく使うものを一番取りやすいところに置く。</h5>
					<h5 class="type__num_02 mb4">手前に取り出しやすいカゴやキャスター付き収納を使う。</h5>
					<div class="mb4">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/section02__img02@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:710px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/section02__img02-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						<div class="img_bg__01"></div>
					</div>
					<div>
						<div class="sumai04__balloon_q03">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__q03@2x.png" alt="空間にムダがないし、これなら取り出しやすいです！" class="u-img__max u-only__pc" style="max-width:338px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__q03-sp@2x.png" alt="空間にムダがないし、これなら取り出しやすいです！" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="sumai04__balloon_a03">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a05@2x.png" alt="お洋服を掛けたいなら突っ張り棒でハンガーパイプを渡してもいいですね。" class="u-img__max u-only__pc" style="max-width:383px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a05-sp@2x.png" alt="お洋服を掛けたいなら突っ張り棒でハンガーパイプを渡してもいいですね。" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="sumai04__balloon_a02 mb4">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a06@2x.png" alt="さらに、押し入れをまるごとクローゼットに替えられる商品もあるんですよ！本格的なリフォームより手軽で1日ぐらいで工事できるんです。" class="u-img__max u-only__pc" style="max-width:438px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a06-sp@2x.png" alt="さらに、押し入れをまるごとクローゼットに替えられる商品もあるんですよ！本格的なリフォームより手軽で1日ぐらいで工事できるんです。" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
					<div class="mb5">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/section02__img03@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:753px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/section02__img03-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						<div class="img_bg__02"></div>
					</div>

					<div class="mb5">
						<div>
							<div class="center">
								<a href="https://e-suteki.haseko.jp/service/closet-repair-index.html?utm_source=brc_sos_vol04&utm_medium=web&utm_campaign=closet_repair_index" target="_blank" rel="nofollow" class="sumai04__btn sumai04__btn_yellow" data-ga-click="foris4_1">押し入れをクローゼットに替える商品に<br class="u-only__sp">興味のある方はこちらから</a>
							</div>
						</div>
					</div>

					<div>
						<div class="sumai04__balloon_q02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__q04@2x.png" alt="それはすごい！魅力的です！" class="u-img__max u-only__pc" style="max-width:288px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__q04-sp@2x.png" alt="それはすごい！魅力的です！" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="sumai04__balloon_a02">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a07@2x.png" alt="この商品の良い所は、しまいたいものに合わせて仕切り方や棚板の奥行きを選べたり追加できたりするところです。棚板はM（奥行498mm）S（奥行242.5mm)があります。" class="u-img__max u-only__pc" style="max-width:383px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a07-sp@2x.png" alt="この商品の良い所は、しまいたいものに合わせて仕切り方や棚板の奥行きを選べたり追加できたりするところです。棚板はM（奥行498mm）S（奥行242.5mm)があります。" class="u-img__max u-only__sp" loading="lazy">
						</div>
						<div class="sumai04__balloon_a03 mb4">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a08@2x.png" alt="押し入れはクローゼットと異なり、奥行きを活かした収納が可能です。" class="u-img__max u-only__pc" style="max-width:383px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a08-sp@2x.png" alt="押し入れはクローゼットと異なり、奥行きを活かした収納が可能です。" class="u-img__max u-only__sp" loading="lazy">
						</div>
					</div>
					<div class="sumai04__type type">
						<div class="type__row type__uroko">
							<h4 class="u-font-size__28">こんなモノがラクラク入ります。</h4>
							<div class="mb2">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/ttl_under@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:644px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/ttl__under-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
							</div>
							<ul class="sumai04__list">
								<li>布団</li>
								<li>ロング丈の洋服</li><br class="u-only__sp">
								<li>バッグやカバン</li>
								<li>スーツケース</li><br class="u-only__sp">
								<li>クーラーボックス</li>
								<li>家電（大型のものも）</li><br class="u-only__sp">
								<li>掃除機</li>
								<li>ゴルフバッグ</li>
								<li>防災グッズ</li>
								<li>非常用食品ストック</li><br class="u-only__sp">
								<li>寝袋</li>
								<li>非常用トイレ</li>
								<li>おもちゃ</li><br class="u-only__sp">
								<li>その他小さいものや長尺物</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section class="sumai04__section03 section03">
				<div class="section04__row">
				</div>
				<div class="sumai04__type type">
					<div class="type__row mb4">
						<div>
							<div class="type__ttl mb3">
								<div class="type__badge">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/type01_badge@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:105px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/type01_badge-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
								</div>
								<div class="type__ttl_ex">
									<h4 class="u-font-size__28">お洋服をたくさん掛けたい！</h4>
								</div>
							</div>
							<h5 class="mb3">お洋服をたくさん掛けたい場合、<br>手前はハンガースペース、奥はSサイズ棚板のスペースにします。</h5>
						</div>
						<div class="mb8">
							<div>
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/type_img01@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc left" style="max-width:661px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/type_img01-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp left" loading="lazy">
							</div>
							<div class="img_bg__03_l"></div>
						</div>
						<div class="mb3">
							<div>
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/type_img02@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc img_right" style="max-width:656px;" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/type_img02-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp img_right" loading="lazy">
							</div>
						</div>
					</div>
				</div>
				<div class="sumai04__type type img06_bg">
					<div class="type__row">
						<div>
							<div class="type__ttl mb3">
								<div class="type__badge">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/no02_badge@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:105px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/type02_badge-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
								</div>
								<div class="type__ttl_ex">
									<h4 class="u-font-size__28">日用雑貨など小物を<br class="u-only__sp">たくさん収納したい！</h4>
								</div>
							</div>
							<h5 class="mbsp">日用品等が多い場合は、<br class="u-only__sp">右側を棚板Mの物入れ仕様にして、<br>奥行きのある収納グッズや前後使いで収納します。</h5>
						</div>
					</div>
					<div class="mb3">
						<div class="mb2_sp pb6">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/type_img04@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc left" style="max-width:688px;" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/type_img04-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp left" loading="lazy">
						</div>
					</div>
				</div>
				<div class="sumai04__type type img06_bg">
					<div class="type__row">
						<div>
							<div class="type__ttl mb3">
								<div class="type__badge">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/no03_badge@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:105px;" loading="lazy">
									<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/type03_badge-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
								</div>
								<div class="type__ttl_ex">
									<h4 class="u-font-size__28">背の高いモノもしまいたい！</h4>
								</div>
							</div>
							<h5 class="mb3 u-font__palt">右側の物入れスペースは、手前の空いたところに<br class="u-only__pc">掃除機やゴルフバックのような<br class="u-only__sp">長物などを立てられます。</h5>
						</div>
					</div>
					<div class="type__stripe">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/type_img06@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:750px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/type_img06-sp@2x.png" alt="<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
					</div>
				</div>
				<div class="center mb8">
					<div class="sumai04__balloon_a02center">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a09@2x.png" alt="しまうものに合わせて棚板をアレンジできるので便利です。右側をクローゼット仕様にするか、物入仕様にするかは、しまいたいお洋服の量で決めるといいですよ。" class="u-img__max u-only__pc" style="max-width:383px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a09-sp@2x.png" alt="しまうものに合わせて棚板をアレンジできるので便利です。右側をクローゼット仕様にするか、物入仕様にするかは、しまいたいお洋服の量で決めるといいですよ。" class="u-img__max u-only__sp" loading="lazy">
					</div>
				</div>
				<div class="center mb8">
					<div class="sumai04__balloon_a03center">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a10@2x.png" alt="扉は押し入れの襖のままでも、襖を取り払ってオープン収納にしてもロールカーテンやアコーディオンカーテンを付けてもいいですね。" class="u-img__max u-only__pc" style="max-width:383px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a10-sp@2x.png" alt="扉は押し入れの襖のままでも、襖を取り払ってオープン収納にしてもロールカーテンやアコーディオンカーテンを付けてもいいですね。" class="u-img__max u-only__sp" loading="lazy">
					</div>
				</div>
				<div class="sumai04__balloon_q03center">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__q05@2x.png" alt="とても使いやすそう！" class="u-img__max u-only__pc" style="max-width:382px;" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__q05-sp@2x.png" alt="とても使いやすそう！" class="u-img__max u-only__sp" loading="lazy">
				</div>
				<div class="center mb8">
					<div class="sumai04__balloon_a03center">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a11@2x.png" alt="よかったら検討してみてくださいね。" class="u-img__max u-only__pc" style="max-width:383px;" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/foris/sumai_04/balloon__a11-sp@2x.png" alt="よかったら検討してみてくださいね。" class="u-img__max u-only__sp" loading="lazy">
					</div>
				</div>
				<div class="mb5">
					<div>
						<div class="center">
							<h6 class="u-font__normal u-font__palt">只今、住まいレージプレゼントキャンペーン実施中！<br class="u-only__sp">ぜひチェックしてみてください！！</h6>
							<a href="https://e-suteki.haseko.jp/service/closet-repair-index.html?utm_source=brc_sos_vol04&utm_medium=web&utm_campaign=closet_repair_index" target="_blank" rel="nofollow" class=" sumai04__btn sumai04__btn_yellow" data-ga-click="foris4_2">押し入れをクローゼットに替える商品の<br class="u-only__sp">詳細はコチラ</a>
						</div>
					</div>
				</div>
			</section>
			<section class="sumai04__section02 section02">
				<div class="section02__row">
					<div class="section02__ttl mb4">
						<h4 class="section02__ttl_ex u-font-size__28 u-ilblock u-font__palt">ほかに、こんな方法もおススメです。</h4>
					</div>
					<div>
						<div class="center mb3">
							<a href="https://www.haseko.co.jp/hrf/reform/jirei/room/" target="_blank" rel="nofollow" class=" sumai04__btn1 sumai04__btn1_green1" data-ga-click="foris4_3">和室を活かしたリフォームをする</a>
						</div>
						<div class="center">
							<a href="https://e-suteki.haseko.jp/suteki/vol70-interior.html?utm_source=brc_sos_vol04&utm_medium=web&utm_campaign=vol70_interior" target="_blank" rel="nofollow" class=" sumai04__btn sumai04__btn_green" data-ga-click="foris4_4">市販の収納グッズや<br class="u-only__sp">DIYで作った棚を使う</a>
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
