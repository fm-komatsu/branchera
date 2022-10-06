<?php
//base
include ("../../function.php");
$content = get_id_data('4042');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">
		<?php
		$panAry[] = array("/event/" ,"イベント・キャンペーン");
		include ($inc_path."/lib/inc/pan.php");
		?>
		<?php
		include ($inc_path."/lib/inc/page/_event/__main-header.php");
		?>

		<section class="main__wrapper">

			<h2 class="u-ttl__l">ゴルフを始めたい！始めさせたい！あなたへ<br class="u-only__pc">PGAゴルフデビュープログラム</h2>

			<div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
				<figure>
					<img
					data-src="<?php echo $img_url?>/event/event-golf-debut/main@2x.png"
					data-retina="<?php echo $img_url?>/event/event-golf-debut/main@2x.png"
					src="<?php echo $img_url?>/event/event-golf-debut/main@2x.png"
					alt="無料ゴルフイベント「PGAゴルフデビュープログラム ご招待」"
					class="u-img__max u-only__pc">
					<img
					data-src="<?php echo $img_url?>/event/event-golf-debut/main-sp.png"
					data-retina="<?php echo $img_url?>/event/event-golf-debut/main-sp@2x.png"
					alt="無料ゴルフイベント「PGAゴルフデビュープログラム ご招待」"
					class="u-img__max u-only__sp">
				</figure>
			</div>

			<div class="u-assist">
			<p>「PGAゴルフデビュープログラム」は、公益社団法人日本プロゴルフ協会（PGA）が自信をもって提供するゴルフ体験プログラムです。<br>ゴルフクラブの握り方からコースレッスンまで全6回のカリキュラムでゴルフの楽しさを体験できます！<br>ゴルフ初心者の方も未経験者の方もこの機会に奮ってご応募ください！！</p>
			</div>

			<h4 class="u-ttl__m">プログラムカリキュラム</h4>
			<table class="resson">
				<tbody class="resson__row">
					<thead class="resson__head">
						<tr>
							<th class="resson__head_num">回</th>
							<th class="resson__head_theme">テーマ</th>
							<th class="resson__head_goal">目標</th>
						</tr>
					</thead>
					<tr class="resson__tr">
						<th class="resson__num"><span>1</span></th>
						<td class="resson__td_l">
							<ul class="resson__ttl">
								<li class="resson__item">オリエンテーション</li>
								<li class="resson__item">ゴルフクラブの握り方と構え方を覚えよう</li>
								<li class="resson__item">実際にボールを打ってみよう</li>
							</ul>
						</td>
						<td class="resson__td_r">
							<dl class="resson__cont">
								<dt class="resson__cont_ttl">ゴルフを知る</dt>
								<dd class="resson__cont_ex">ゴルフというスポーツについて</dd>
								<dt class="resson__cont_ttl">構えとスイング①②の習得</dt>
								<dd class="resson__cont_ex">クラブの握り方</dd>
								<dd class="resson__cont_ex">ボールに正しく構える</dd>
								<dd class="resson__cont_ex">小さなスイングの実習</dd>
							</dl>
						</td>
					</tr>
					<tr class="resson__tr">
						<th class="resson__num"><span>2</span></th>
						<td class="resson__td_l">
							<ul class="resson__ttl">
								<li class="resson__item">ゴルフスイングの基礎編</li>
								<li class="resson__item">小さなスイングでボールを打ってみよう</li>
							</ul>
						</td>
						<td class="resson__td_r">
							<dl class="resson__cont">
								<dt class="resson__cont_ttl">スイング①②の復習</dt>
								<dd class="resson__cont_ex">良い姿勢は良いバランスから</dd>
								<dt class="resson__cont_ttl">スイング③の習得</dt>
								<dd class="resson__cont_ex">小さなスイングの完成</dd>
								<dd class="resson__cont_ex">スイング③はスイングの基本</dd>
							</dl>
						</td>
					</tr>
					<tr class="resson__tr">
						<th class="resson__num"><span>3</span></th>
						<td class="resson__td_l">
							<ul class="resson__ttl">
								<li class="resson__item">ゴルフスイングの実践</li>
								<li class="resson__item">少し大きなスイングでボールを打ってみよう</li>
							</ul>
						</td>
						<td class="resson__td_r">
							<dl class="resson__cont">
								<dt class="resson__cont_ttl">スイング③の復習と完成</dt>
								<dd class="resson__cont_ex">スイング②から③へのスムーズな移行（左右のひじのたたみ方）</dd>
								<dt class="resson__cont_ttl">スイング④の復習</dt>
								<dd class="resson__cont_ex">体の回転と正しいスイング軌道</dd>
								<dd class="resson__cont_ex">体の回転と体重移動</dd>
							</dl>
						</td>
					</tr>
					<tr class="resson__tr">
						<th class="resson__num"><span>4</span></th>
						<td class="resson__td_l">
							<ul class="resson__ttl">
								<li class="resson__item">ゴルフスイングの応用編</li>
								<li class="resson__item">長いクラブで遠くに飛ばしてみよう</li>
								<li class="resson__item">狙ったところに玉を飛ばす練習をしてみよう</li>
							</ul>
						</td>
						<td class="resson__td_r">
							<dl class="resson__cont">
								<dt class="resson__cont_ttl">スイング④の復習と完成</dt>
								<dd class="resson__cont_ex">重心の移動を感じる</dd>
								<dd class="resson__cont_ex">ドライバーの使用</dd>
								<dt class="resson__cont_ttl">アプローチ</dt>
								<dd class="resson__cont_ex">スイング①②③はアプローチに応用できる</dd>
								<dd class="resson__cont_ex">アプローチの習得（同じクラブ（9I）で3つの打ち方を行う）</dd>
							</dl>
						</td>
					</tr>
					<tr class="resson__tr">
						<th class="resson__num"><span>5</span></th>
						<td class="resson__td_l">
							<ul class="resson__ttl">
								<li class="resson__item">リハーサル編</li>
								<li class="resson__item">ゴルフコースデビューの準備をしよう</li>
								<li class="resson__item">いろいろなクラブを打ってみよう</li>
							</ul>
						</td>
						<td class="resson__td_r">
							<dl class="resson__cont">
								<dt class="resson__cont_ttl">スイング①～④の復習</dt>
								<dd class="resson__cont_ex">9Iでスイング①～④の復習</dd>
								<dd class="resson__cont_ex">7IとDでスイング④の復習</dd>
								<dd class="resson__cont_ex">スイング①～③でアプローチの3つの打ち方の復習</dd>
								<dt class="resson__cont_ttl">パッティング</dt>
								<dd class="resson__cont_ex">パッティングの構えとストロークの習得</dd>
							</dl>
						</td>
					</tr>
					<tr class="resson__tr">
						<th class="resson__num"><span>6</span></th>
						<td class="resson__td_l">
							<ul class="resson__ttl">
								<li class="resson__item">コースレッスン</li>
								<li class="resson__item">ゴルフコースで実際にプレーしてみよう</li>
							</ul>
						</td>
						<td class="resson__td_r">
							<dl class="resson__cont">
								<dt class="resson__cont_ttl">プロゴルファーのサポートでコースデビュー</dt>
								<dd class="resson__cont_ex">ゴルフの楽しさを体験</dd>
								<dd class="resson__cont_ex">芝生の上での実践練習</dd>
								<dd class="resson__cont_ex">ゴルフコースをプレー</dd>
							</dl>
						</td>
					</tr>
				</tbody>
			</table>


			<h4 class="u-ttl__m">イベント概要</h4>
			<div class="u-list__dl_table">
				<dl>
					<dt>[イベント内容]</dt>
					<dd>PGAゴルフデビュープログラム<br>＜全6回（コースレッスン付）＞</dd>
				</dl>
				<dl>
					<dt>[開催場所]</dt>
					<dd>
						<ul class="u-list__ul_dot">
							<li>加藤農園ゴルフリンクス（東京都大田区新蒲田3-12-2）</li>
							<li>桜ノ宮ゴルフクラブ（大阪府大阪市都島区中野町2-3-23）</li>
						</ul>
					</dd>
				</dl>
				<dl>
					<dt>[募集人数]</dt>
					<dd>10名（2か所合計）</dd>
				</dl>
				<dl>
					<dt>[費用]</dt>
					<dd>プログラム受講費用無料<br>※交通費、宿泊費、ゴルフ場での個人利用分は各自ご負担となります。</dd>
				</dl>
				<dl>
					<dt>[応募条件]</dt>
					<dd>
						<ul class="u-list__ul_dot">
							<li>ゴルフ未経験者または、初心者の方に限らせていただきます。</li>
							<li>2018年10月末日までに、それぞれのレッスン場にてプログラムの受付が可能な方に限らせていただきます。</li>
						</ul>
					</dd>
				</dl>
				<dl>
					<dt>[応募申込み]</dt>
					<dd>長谷工IDマイページにログインしてお申込みください。<br>※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</dd>
				</dl>
				<dl>
					<dt>[受付期間]</dt>
					<dd>2018年8月1日（水）～ 8月19日（日）</dd>
				</dl>
				<dl>
					<dt>[当選者発表]</dt>
					<dd>2018年8月20日（月）より随時メールにてご連絡いたします。</dd>
				</dl>
				<dl>
					<dt>[ご注意事項]</dt>
					<dd class="w75" style="line-height:1.4;">
						<ul class="u-list__ul_dot">
							<li>当日、身分証のご提示をお願いする場合がございます。</li>
							<li>本プログラムの受講権利は、当選されたご本人さまのみとさせていただきます。<br>受講権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</li>
							<li>10歳未満のお子さまは、本プログラムにはご参加いただけません。</li>
						</ul>
					</dd>
				</dl>
			</div>

			<label class="u-btn_end center mt2" >応募の受け付けは終了いたしました</label>


			<!-- <div class="u-btn-layout mt2">
				<div class="u-btn-layout__row">
					<a href="<?php echo $mypoint_url ?>/99" target="_blank" class="u-btn_point u-btn-layout__item">東京でのプログラムに応募する</a>
					<a href="<?php echo $mypoint_url ?>/98" target="_blank" class="u-btn_point u-btn-layout__item">大阪でのプログラムに応募する</a>
				</div>
			</div>

			<small class="u-small" style="color: red; font-weight: bold">※お申込みは東京・大阪のいずれか1回のみとなります。</small><br>
			<?php if (!$ssoFlag == 1){ ?>
				<small class="u-small">※特典のご利用には長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
			<?php }; ?> -->



		</section>

	</article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
