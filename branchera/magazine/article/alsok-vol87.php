<?php
//base
include( "../../function.php" );
$content = get_id_data( '21013' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article alsok";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//release date
$release_year = "2021";
$release_month ="11";
$release_day ="";
?>
<main class="main magazine">
	<article class="main__row">
		<?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_alsok.php", "プロに聞く。暮らしの危機管理。" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
		<div class="main__wrapper">
			<section class="main__item">
				<h3 class="u-ttl__l">秋のうちに見直したい〜冬の防犯と防災</h3>
				<p class="mb4">夕暮れの訪れが日に日に早くなり、秋も終わりを告げるこの季節。ご自宅や周辺の防犯と防災について見直してみませんか。<br>冬が深まる前に取り組める対策をALSOKに伺いました。</p>
				<section class="mb5">
					<h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">窓を施錠する習慣を</span></h4>
						<div>
							<p>まだ風が冷え切らず心地よい時期は、窓を開けて過ごす時間もあります。家にいる感覚に慣れてしまい、つい窓を開けたまま出かけたり、寝てしまったりすることはありませんか？<br>マンションの場合でも、<strong>屋上や隣接ビルからバルコニーに侵入</strong>されることや、<strong>駐車中の大型車の荷台を使って侵入</strong>される場合など、思わぬところから被害を受けるケースもあります。<br>玄関ドアだけでなく<strong>窓を施錠する習慣</strong>を再度、見直しましょう。</p>
						</div>
					</figure>

				</section>
				<section class="mb5">
					<h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">補助錠を活用する</span></h4>
					<div class="flex between">
						<div class="w50 mb3_sp">
							<p>窓での換気にあたり、市販の<strong>「補助錠」を活用する</strong>のも一つの手。<br>補助錠は窓やサッシへ簡単に取り付けられ、必要以上に開かないよう窓をロックできるアイテムです。設置位置を調整することで、窓を少し開けた状態でのロックも可能になるので、換気中の防犯力を高められます。お子さまがいるご家庭なら、ベランダへの飛び出し防止にも効果的です。<br>注意点は、すき間の幅を人の手が入らない細さに設定すること。また補助錠を付けていても、窓の鍵をきちんとかけることが施錠の基本です。外出時には忘れずに！</p>
						</div>
						<div class="w50">
							<img src="<?php echo $img_url; ?>/magazine/alsok/87/img__01@2x.png"
							alt="（イメージ画像）窓の補助錠｜<?php echo $pageTtl?>" class="u-img__max u-only__pc center" style="max-width:303px" loading="lazy">
							<img src="<?php echo $img_url; ?>/magazine/alsok/87/img__01-sp@2x.png"
							alt="（イメージ画像）窓の補助錠｜<?php echo $pageTtl?>" class="u-img__max u-only__sp mb2_sp" loading="lazy">
						</div>
					</div>
				</section>
				<section  class="mb5">
					<h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">植栽や家の周りはスッキリと</span></h4>
								<p class="mb2">外構や庭、バルコニーなどの外周りを整頓することも大切です。不審者は、外部から見えない出入口を好みます。<strong>生い茂った植栽、大きな荷物などで窓やドアが隠れた状態にならない</strong>ように気を付けましょう。寒さが深まる前に片付けておくのがおすすめです。</p>
								<div class="u-assist">
									<div class="u-assist__inner">
										<h5 class="u-ttl__s">不審者の侵入防止対策</h5>
										<dl class="mb1 u-font__palt">
											<dt>●外周りに、侵入の足場になるようなものを置かない</dt>
										</dl>
										<dl class="mb1 u-font__palt">
											<dt>●死角になる場所をつくらない</dt>
										</dl>
										<dl class="mb1 u-font__palt">
											<dt>●死角になる場所にはセンサーライトを設置する</dt>
										</dl>
										<dl class="mb1 u-font__palt">
											<dt>●步くと音の出る防犯用の砂利を敷く</dt>
										</dl>
										<dl>
											<dt>●フェンスを見えやすいものに変える</dt>
										</dl>
									</div>
								</div>
        </section>
				<section class="mb5">
					<h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">路上・外出時の防犯意識を高める</span></h4>
					<div class="flex between">
						<div class="w50 mb3_sp">
							<p class="mb2">日暮れが早くなる時期は、路上での防犯意識も高めましょう。イヤホンで周りの音が聞こえない、スマートフォンに夢中…なんてことでは、突発的な事態への対処が難しくなります。<strong>周囲に注意を払える状態で歩くことが大切</strong>です。<br>さらによく通るエリアでは、普段から防犯カメラや街灯が整備されたルートをチェックしておくとよいでしょう。</p>
						  <p>またマンションの場合、エレベーター内ではボタンのそばで、カメラに映りやすく室内を見渡せる位置に立つとよいでしょう。</p>
						</div>
						<div class="w50">
							<img src="<?php echo $img_url; ?>/magazine/alsok/87/img__02@2x.png"
							alt="（イメージ画像）窓の補助錠｜<?php echo $pageTtl?>" class="u-img__max u-only__pc center" style="max-width:303px" loading="lazy">
							<img src="<?php echo $img_url; ?>/magazine/alsok/87/img__02-sp@2x.png"
							alt="（イメージ画像）窓の補助錠｜<?php echo $pageTtl?>" class="u-img__max u-only__sp mb2_sp" loading="lazy">
						</div>
					</div>
				</section>
				<section>
					<h4 class="alsok__ttl alsok__ttl_violet mb3"><span class="alsok__ttl_ex">冬に向け防災設備を再確認</span></h4>
					<div class="flex between">
						<div class="w50">
							<p class="mb2 u-only__pc">冬に向けて多くなるのが、経年による自動火災報知設備の誤作動です。交換時期を越えた機器は、湯気などで誤作動が起こるようになります。またブレーカーが落ちることで誤報が発せられる場合も。</p>
							<p class="u-only__pc">ALSOKとご契約中のマンションの場合、異常警報が発せられればガードマンが急行します。しかし誤報での出動が頻発すると、本当に必要な人への急行が遅れてしまうという事態も起こり得ます。<br>警報の履歴は、管理組合などへ提出されている場合があるため、<strong>警報機器は設置から年数が経過している、誤報が増えてきた場合などには、交換(*)を検討しましょう。</strong></p>
						</div>
						<div class="w50">
							<img src="<?php echo $img_url; ?>/magazine/alsok/87/img__03@2x.png"
							alt="（イメージ画像）窓の補助錠｜<?php echo $pageTtl?>" class="u-img__max u-only__pc center" style="max-width:303px" loading="lazy">
						</div>
					</div>
					<div>
						<p class="mb2 u-only__sp">冬に向けて多くなるのが、経年による自動火災報知設備の誤作動です。交換時期を越えた機器は、湯気などで誤作動が起こるようになります。またブレーカーが落ちることで誤報が発せられる場合も。</p>
						<img src="<?php echo $img_url; ?>/magazine/alsok/87/img__03-sp@2x.png"
						alt="（イメージ画像）窓の補助錠｜<?php echo $pageTtl?>" class="u-img__max u-only__sp mb2_sp" loading="lazy">
						<p class="mb2 u-only__sp">ALSOKとご契約中のマンションの場合、異常警報が発せられればガードマンが急行します。しかし誤報での出動が頻発すると、本当に必要な人への急行が遅れてしまうという事態も起こり得ます。<br>警報の履歴は、管理組合などへ提出されている場合があるため、<strong>警報機器は設置から年数が経過している、誤報が増えてきた場合などには、交換(*)を検討しましょう。</strong></p>
					</div>
				</section>
				<small class="u-small">*マンションの警報機器の交換は原則、管理組合ごとの実施となります。</small>
			</section>
			<div class="mb8 mb3_sp">
				<?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
			</div>
			<section>
				<h5 class="mt3">■関連記事</h5>
				<div class="u-photolist__row mt2">
					<?php
						$exceptcnt_id = $content['contents_id'];
						echo show_category_photoListalsok("alsok-other",$exceptcnt_id);
					?>
				</div>
			</section>
		</div>
	</article>
</main>
<?php
$toindex_url = "/magazine/index_alsok.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
