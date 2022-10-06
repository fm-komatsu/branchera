<?php
//base
include ("../../function.php");
$content = get_id_data('4095');
$pageTtl = $content['title'];

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
    $panAry[] = array("/event/", "イベント・キャンペーン");
    include($inc_path . "/lib/inc/pan.php");
    ?>
    <?php
    include($inc_path . "/lib/inc/page/_event/__main-header.php");
    ?>
		<div class="main__wrapper">
			<div class="main__item">
				<section class="mb6">
					<figure>
						<img src="<?php echo $img_url?>/event/report-online-event02/main-v@2x.jpg" class="u-img__max u-only__pc" alt="" loading="lazy">
						<img src="<?php echo $img_url?>/event/report-online-event02/main-v-sp@2x.jpg" class="u-img__max u-only__sp" alt="" loading="lazy">
					</figure>
					<h4 class="u-ttl__m center u-only__pc">第2回のオンラインイベントのテーマは「収納」！</h4>
					<h4 class="u-ttl__m left u-only__sp">第2回のオンラインイベントのテーマは「収納」！</h4>
					<p>家族の洋服や掃除機、アイロンなどの家電からストックしている食品まで、家の中って本当にいろいろなモノであふれていますよね。今回はそんな収納のお悩みに、優しく具体的にアドバイスをしてくれる大橋わか先生による収納オンラインイベントを開催！みなさま片付けにご興味があるようで、今回は<span class="font_pink">700名を超える</span>たくさんのご応募をいただきました。</p>
          <div class="movie-list__item"><a href="https://www.youtube.com/watch?v=/TbCZfqAuuCM?rel=0" class="mfp-btn__video"><img src="<?php echo $img_url ?>/event/report-online-event02/online_movie_mv_digest@2x.jpg" alt="収納のお悩みプロが解決！イベントムービーダイジェスト版" class="u-img__max"></a></div>
					<?php if (!$ssoFlag == 1){ ?>
						<p class="center u-ttl__s u-font__bold">ログインして、<br class="u-only__sp">イベントの完全版ムービーをチェック！</p>
					<?php } else { }; ?>
					<div class="u-btn-layout mt2 mb5">
						<div class="u-btn-layout__row center mb2_sp">
						<?php if (!$ssoFlag == 1){ ?>
							<a href="<?php echo $login_url ?>" class="u-btn-layout_pink" data-ga-click="event-online02_repo1">
								ログインはこちら
							</a>
						</div>
						<?php } else {; ?>
							<a href="https://www.youtube.com/watch?v=8eTJfPLlHbU?rel=0" target="_blank" class="u-btn-layout_pink mfp-btn__video mb3" style="margin-top : 8px;">完全版ムービーを観る</a>
							<?php };?>
					</div>
					<div>
						<img src="<?php echo $img_url?>/event/report-online-event02/ohashiwaka_sumeister@2x.jpg" class="u-img__max u-only__pc" alt="" loading="lazy">
						<img src="<?php echo $img_url?>/event/report-online-event02/ohashiwaka_sumeister-sp@2x.jpg" class="u-img__max u-only__sp" alt="" loading="lazy">
				  </div>
				</section>
				<section class="mb6">
					<h4 class="u-ttl__m center">イベントスタート！</h4>
					<div class="flex between">
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event02/sec02__img01@2x.jpg" class="u-img__max mb1_sp" alt="大橋 わか先生" loading="lazy">
						</figure>
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event02/sec02__img02@2x.jpg" class="u-img__max mb1_sp" alt="片付けに必要な3つのスキル" loading="lazy">
						</figure>
					</div>
					<p class="mb2">今回はユニークなアイデア家具を扱っている長谷工グループ「フォリス」のショールームより配信です。イベントに慣れている大橋先生も少し緊張されているようでしたが、いざイベントが始まると現場のスタッフからも、つい笑い声が漏れてしまうほどの楽しいエピソードをたくさんお話しいただきました！</p>
					<p class="mb2">最初のテーマは「片付けに必要な3つのスキル」について。モノがあふれるのは「モノが増えて置き場所がない」「使った後、戻せていない」の2つの原因があるのだそうです。その原因の解消には「整理・収納・整頓」が大切とのこと。3つのスキルの違いをしっかり理解したうえで、自分の苦手なところが何なのかを把握することが大切、だということが分かりました。</p>
					<div class="u-btn-layout center mt2 mb5">
						<p class="center u-ttl__s u-font__bold">＼イベントで実際に行ないました！／<br>お片付け診断テストにチャレンジ！</p>
						<div class="u-btn-layout__row center mb2_sp">		
							<a href="https://e-suteki.haseko.jp/suteki/vol85-storage.html?utm_source=brc_foris_vol01&utm_medium=web&utm_campaign=vol85_storage" target="_blank" class="u-btn-layout_pink" data-ga-click="event-online02_repo2">
							診断テストはこちら
							</a>
						</div>
					</div>
				</section>
				<section class="mb6">
					<h4 class="u-ttl__m center">整理力の「だ・わ・し」でこんなにも違いが！</h4>
					<div class="flex between mb4">
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img01@2x.jpg" class="u-img__max" alt="実際に寄せられた悩み" loading="lazy">
						</figure>
						<div class="w50">
						<p class="u-font__palt">診断テストで自分の苦手なことが分かったら、いよいよ具体的な収納術について学んでいきます。まずは整理力を身に付けるためのキーワード「だ・わ・し」について。Beforeの写真には収納棚にたくさんのモノがあふれていますね。この全てのモノを「出して」「分けて」「知る」、これらの頭文字が「だ・わ・し」です。<br>モノを全部出し、平面に見てカテゴリに分けることで、思い出のモノが多い、無料のモノが多い…など自分の持ちモノにはどういった傾向が見られるのかを知ることができるということでした。</p>
						</div>
					</div>
					<figure>
						<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img02@2x.jpg" class="u-img__max center mb2 u-only__pc" alt="afterキレイになった収納棚" loading="lazy">
						<img src="<?php echo $img_url?>/event/report-online-event02/sec03__arrow-sp@2x.jpg" class="u-img__max center mb2 u-only__sp" style="max-width:69px;" alt="afterキレイになった収納棚" loading="lazy">
						<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img02-sp@2x.jpg" class="u-img__max center mb2 u-only__sp" alt="afterキレイになった収納棚" loading="lazy">
					</figure>
					<p class="mb5">「だ・わ・し」で整理をした後、収納棚はここまでキレイに！Beforeは思い出のモノが捨てられない傾向があったのですが「だ・わ・し」で見直すことで、今の自分にとって重要ではないモノをずっと持っていたことに気付かされたということでした。さらに「ここでは収納ケースをたくさん使っていますが、収納ケース以外に棚板を増やしています」と大橋先生。今ある収納スペースを最大限に生かす方法のひとつとして、「棚板」という選択肢もアリかもしれませんね。</p>
					<div class="mb3">
						<figure>
							<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img03@2x.jpg" class="u-img__max u-only__pc" alt="フォリスの商品のご紹介！棚板を増やしてシステム収納をもっと使いやすく！棚板や引き出しを組み合わせて作るシステム収納をより効果的に活用するためには、追加の棚板がポイント。ちょうどいいサイズの棚板が見つからない。そんな時には、フォリスオンラインショップをチェック！棚板を1ミリ単位でカットするため、ジャストサイズの棚板を手に入れることができます。" loading="lazy">
						</figure>
						<div class="flex u-img__max">
							<div class="event-online-btn">
									<figure>
										<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img04@2x.jpg" class="u-img__max u-only__pc" alt="システム収納オプションパーツ" loading="lazy">
									</figure>
							</div>
							<div class="event-online-btn">
							  <a href="https://e-suteki.haseko.jp/service/system-foris-index.html?utm_source=brc_foris_vol01&utm_medium=web&utm_campaign=system_foris_index" target="_blank" data-ga-click="event-online02_repo3">
									<figure>
										<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img05@2x.jpg" class="u-img__max u-only__pc" alt="フォリスの棚板についてはこちら" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
						<figure>
							<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img06@2x.jpg" class="u-img__max u-only__pc" alt="ちょうどいいが見つからないそんな時はフォリスオンラインショップへ！フォリスでは、収納家具やオリジナルインテリアなど、さまざまな商品をオンラインで販売しています！たとえば、ウォークインクローゼットのオプションパーツや下駄箱の収納などここに欲しいけれどちょうどいいのがなくて、と思うようなアイテムもフォリスなら見つかるかもしれません。ぜひ、フォリスオンラインショップをのぞいてみて下さい♪" loading="lazy">
						</figure>
						<div class="flex u-img__max">
							<div class="event-online-btn">
									<figure>
										<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img07@2x.jpg" class="u-img__max u-only__pc" alt="システム収納オプションパーツ" loading="lazy">
									</figure>
							</div>
							<div class="event-online-btn">
							  <a href="https://foris-online.com/" target="_blank" data-ga-click="event-online02_repo4">
									<figure>
										<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img08@2x.jpg" class="u-img__max u-only__pc" alt="フォリスオンラインショップはこちら" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
					</div>
					<div class="flex between">
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img11@2x.jpg" class="u-img__max u-only__pc" alt="Before家族が増えて飽和状態で困っています。使う服ばかりで処分することもできず。シーズンオフの衣料は別のクローゼットや奥の方に掛けているのですが、収納量を減らす以外に何か出来る工夫は無いでしょうか？" loading="lazy">
						</figure>
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img12@2x.jpg" class="u-img__max u-only__pc" alt="Afterアーチ型ハンガー" loading="lazy">
						</figure>
					</div>
					<p class="mb2">イベントも中盤。すぐに実践できる収納のコツを教えていただきました。そのひとつが「収納は余白を作り、8割にする」ということ。左の写真は、ハンガーを詰めればまだまだ洋服が入りそうに見えますが、それはNG。ハンガーを動かせる余白を作ることで、片付けやすい環境をに整えることができます。</p>
					<p class="mb2">そして、もうひとつは「ラベリング」。ラベリングは探すことを前提にして考えるのがポイント。たとえば、右の写真のように同じインナーでも「どんなインナーか」をラベリングすることで、ぐっと探しやすくなります。クリップにシールでラベリングしたり、透明の容器に入れたり、用途にあわせてラベリングすると効果的ですね。</p>
				</section>
				<section class="mb7">
					<figure>
						<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img03-sp@2x.jpg" class="u-img__max u-only__sp" alt="フォリスの商品のご紹介！" loading="lazy">
					</figure>
					<a href="https://e-suteki.haseko.jp/service/system-foris-index.html?utm_source=brc_foris_vol01&utm_medium=web&utm_campaign=system_foris_index" target="_blank" data-ga-click="event-online02_repo3">
						<figure>
							<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img04-sp@2x.jpg" class="u-img__max u-only__sp" alt="フォリスの棚板について詳しくはこちら" loading="lazy">
						</figure>
					</a>
					<figure>
						<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img05-sp@2x.jpg" class="u-img__max u-only__sp" alt="ちょうどいいが見つからないそんな時はフォリスオンラインショップへ！フォリスでは、収納家具やオリジナルインテリアなど、さまざまな商品をオンラインで販売しています！たとえば、ウォークインクローゼットのオプションパーツや下駄箱の収納などここに欲しいけれどちょうどいいのがなくて、と思うようなアイテムもフォリスなら見つかるかもしれません。ぜひ、フォリスオンラインショップをのぞいてみて下さい♪" loading="lazy">
					</figure>
					<a href="https://foris-online.com/" target="_blank" data-ga-click="event-online02_repo4">
						<figure>
							<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img06-sp@2x.jpg" class="u-img__max u-only__sp" alt="フォリスオンラインショップはこちら" loading="lazy">
						</figure>
					</a>
				</section>
				<section class="mb6 mb0_sp">
					<h4 class="u-ttl__m center">視聴者さまのお悩みにお答えします！</h4>
					<div class="flex between">
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img13@2x.jpg" class="u-img__max mb1_sp" alt="Before家族が増えて飽和状態で困っています。使う服ばかりで処分することもできず。シーズンオフの衣料は別のクローゼットや奥の方に掛けているのですが、収納量を減らす以外に何か出来る工夫は無いでしょうか？" loading="lazy">
						</figure>
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img14@2x.jpg" class="u-img__max mb1_sp" alt="Afterアーチ型ハンガー" loading="lazy">
						</figure>
					</div>
					<p class="mb2">後半では、事前にお寄せいただいたみなさまのお悩みに、大橋先生がお答えしました！一人目の方は、「家族が増えて、クローゼットが飽和状態…収納量を減らす以外でクローゼットを整理する方法は？」というお悩み。Beforeの写真を見ると、洋服を減らすしかないのでは…と思ってしまいますが、「私もよくやる解決方法をご紹介します！」と大橋先生。</p>
					<p class="mb2">それは「全てのハンガーをアーチ型ハンガーに変える」という、とっても簡単な方法！分厚いハンガーよりも、薄いハンガーにするだけで物理的に収納量が増えるというわけですね。</p>
					<div class="flex between mb4">
						<figure class="w50 mb1_sp">
							<img src="<?php echo $img_url?>/event/report-online-event02/sec03__img15@2x.jpg" class="u-img__max" alt="パントリーはぎゅうぎゅうにモノが詰まっている" loading="lazy">
						</figure>
						<div class="w50">
						<p class="u-font__palt mt0">次のお悩みは、視聴者さまのご自宅から生中継でのご相談です！とっても素敵なキッチンですが、パントリーはぎゅうぎゅうにモノが詰まり、作業台にもモノが置かれている状態のようですね。ここでの大橋先生からのアドバイスは「毎日使っているものを取り出しやすく、戻しやすくする」ということ。戻しやすくすることで、作業台にポンとモノを置くこともなくなりますね。最後に「2割空ける勇気！」という大橋先生の言葉に、ご相談者の方も気合いが入ったようでした♪</p>
						</div>
					</div>
				</section>
				<section class="mb6">
					<h4 class="u-ttl__m center">先生おすすめの収納グッズをご紹介！</h4>
					<div class="flex between mb4">
						<figure class="w50 mb1_sp">
							<img src="<?php echo $img_url?>/event/report-online-event02/sec04__img01@2x.jpg" class="u-img__max" alt="先生おすすめの収納グッズをご紹介" loading="lazy">
						</figure>
						<div class="w50">
						<p class="u-font__palt mt0">100円ショップで買えるカゴや透明ケース、ステンレス製の鍋を収納できるプラスチックボックス…。たくさんの現場で収納のアドバイスをしてきた大橋先生のおすすめ収納グッズをご紹介いただきました。詳しくはぜひフル動画をご覧ください♪</p>
						</div>
					</div>
					<figure class="center u-only__pc">
						<img src="<?php echo $img_url?>/event/report-online-event02/sec04__img02_01@2x.jpg" class="u-img__max center" alt="驚き！ベットになるデスク！？" loading="lazy">
						<div class="flex  u-img__max">
							<figure class="event-online-btn">
						    <img src="<?php echo $img_url?>/event/report-online-event02/sec04__img02_02@2x.jpg" class="u-img__max center" alt="驚き！ベットになるデスク！？" loading="lazy">
							</figure>
							<figure class="event-online-btn gif">
						    <img src="<?php echo $img_url?>/event/report-online-event02/sec04__img02_03@2x.jpg" class="u-img__max center" alt="驚き！ベットになるデスク！？" loading="lazy">
						    <div class="gif_img">
								  <img src="<?php echo $img_url?>/event/report-online-event02/deskbed.gif" class="u-img__max center" alt="驚き！ベットになるデスク！？" loading="lazy">
							  </div>
							</figure>
						</div>
						<img src="<?php echo $img_url?>/event/report-online-event02/sec04__img03@2x.jpg" class="u-img__max center" alt="今回のオンラインイベントの会場になっているフォリスでは、アイデア満載のユニークな家具を多数ご用意しています。その中の一つを、イベント内でご紹介いただきました！一見、リモートワークや勉強に最適なデスクを、グルッとひっくり返すと...なんと布団付きのベッドに早変わり！デスクが水平で動くから、デスクの上を片付けなくてもOK！省スペースでもアイデア１つで快適な空間を作れる、ということですね。" loading="lazy">
						<a href="https://www.foris-group.co.jp/product/lp/deskbed/" target="_blank" data-ga-click="event-online02_repo5">
							<img src="<?php echo $img_url?>/event/report-online-event02/sec04__img04@2x.jpg" class="u-img__max center" alt="フォリスのデスクベットについて詳しくはこちら" loading="lazy">
						</a>
					</figure>
					<figure class="center u-only__sp">
						<img src="<?php echo $img_url?>/event/report-online-event02/sec04__img02_01-sp@2x.jpg" class="u-img__max center" alt="驚き！ベットになるデスク！？" loading="lazy">
						<div class="gif">
							<img src="<?php echo $img_url?>/event/report-online-event02/sec04__img02_02-sp@2x.jpg" class="u-img__max center" alt="驚き！ベットになるデスク！？" loading="lazy">
						    <div class="gif_img">
								  <img src="<?php echo $img_url?>/event/report-online-event02/deskbed.gif" class="u-img__max" alt="驚き！ベットになるデスク！？" loading="lazy">
							  </div>
						</div>
						<img src="<?php echo $img_url?>/event/report-online-event02/sec04__img03-sp@2x.jpg" class="u-img__max center" alt="今回のオンラインイベントの会場になっているフォリスでは、アイデア満載のユニークな家具を多数ご用意しています。その中の一つを、イベント内でご紹介いただきました！一見、リモートワークや勉強に最適なデスクを、グルッとひっくり返すと...なんと布団付きのベッドに早変わり！デスクが水平で動くから、デスクの上を片付けなくてもOK！省スペースでもアイデア１つで快適な空間を作れる、ということですね。" loading="lazy">
						<a href="https://www.foris-group.co.jp/product/lp/deskbed/" target="_blank" data-ga-click="event-online02_repo5">
							<img src="<?php echo $img_url?>/event/report-online-event02/sec04__img04-sp@2x.jpg" class="u-img__max center" alt="フォリスのデスクベットについて詳しくはこちら" loading="lazy">
						</a>
					</figure>
				</section>
				<section class="mb6">
					<h4 class="u-ttl__m center">先生から最後のアドバイス</h4>
					<div class="flexend">
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event02/sec05__img01@2x.jpg" class="u-img__max center mb1_sp" alt="Before実際に寄せられたお悩み" loading="lazy">
						</figure>
						<figure class="w50">
							<img src="<?php echo $img_url?>/event/report-online-event02/sec05__img02@2x.jpg" class="u-img__max center mb1_sp" alt="Afterリバウンドなし" loading="lazy">
						</figure>
					</div>
					<p class="mb2">最後は、「自分の理想の暮らし」を実現された方の事例でした。憧れの「壁面収納」を目指すご相談者さまのお宅は、思い出のモノや捨てられないモノであふれていました。そこで「だ・わ・し」を実践し、モノを整理。大橋先生のアドバイスのもと、憧れの壁面収納をが実現できました！しかも、10ヵ月後もキレイの状態をキープ！Before/Afterの違いに、片付けのやる気スイッチを押されるようなお話でした。</p>
					<p class="mb2">「大事なのは一度きりにすることではなく、キレイをキープして暮らしの質を上げること」と大橋先生。自分の理想を持つことが、キレイをキープするモチベーションにつながるということを教えていただきました。</p>

					<div class="mb2 mt3_sp">
						<figure>
							<img src="<?php echo $img_url?>/event/report-online-event02/sec05__img03@2x.jpg" class="u-img__max u-only__pc" alt="整理収納サービス" loading="lazy">
						</figure>
						<div class="flex  u-img__max">
							<div class="event-online-btn">
									<figure>
										<img src="<?php echo $img_url?>/event/report-online-event02/sec05__img04@2x.jpg" class="u-img__max u-only__pc" alt="大橋先生の収納イベントを通して、片付け意欲が掻き立てられた方もたくさんいらっしゃると思いますが...もし「自分ではやっぱり無理かも〜」と思った方は、長谷工がお届けする整理収納サービスをご活用ください！大橋先生のメソッドを実際に体験して、自分の理想の暮らしを実現して下さい。" loading="lazy">
									</figure>
							</div>
							<div class="event-online-btn">
							  <a href="https://e-suteki.haseko.jp/suteki/kid-special-2.html?utm_source=brc_sos_vol01&utm_medium=web&utm_campaign=kid_special_2" target="_blank" data-ga-click="event-online02_repo6">
									<figure>
										<img src="<?php echo $img_url?>/event/report-online-event02/sec05__img05@2x.jpg" class="u-img__max u-only__pc" alt="長谷工おうちデトックス整理収納サービスのご紹介はこちら" loading="lazy">
									</figure>
								</a>
							</div>
						</div>
					</div>
					<div>
						<figure>
							<img src="<?php echo $img_url?>/event/report-online-event02/sec05__img03-sp@2x.jpg" class="u-img__max u-only__sp" alt="整理収納サービス" loading="lazy">
							<img src="<?php echo $img_url?>/event/report-online-event02/sec05__img04-sp@2x.jpg" class="u-img__max u-only__sp" style="margin-top:-1px;" alt="大橋先生の収納イベントを通して、片付け意欲が掻き立てられた方もたくさんいらっしゃると思いますが...もし「自分ではやっぱり無理かも〜」と思った方は、長谷工がお届けする整理収納サービスをご活用ください！大橋先生のメソッドを実際に体験して、自分の理想の暮らしを実現して下さい。" loading="lazy">
							<a href="https://e-suteki.haseko.jp/suteki/kid-special-2.html?utm_source=brc_sos_vol01&utm_medium=web&utm_campaign=kid_special_2" target="_blank" data-ga-click="event-online02_repo6">
							  <img src="<?php echo $img_url?>/event/report-online-event02/sec05__img05-sp@2x.jpg" class="u-img__max u-only__sp" style="margin-top:-1px;" alt="長谷工おうちデトックス整理収納サービスのご紹介はこちら" loading="lazy">
							</a>
						</figure>
					</div>
				</section>
				<section class="mb7 mb2_sp">
					<h4 class="u-ttl__m center">イベント中のご質問と先生のご回答！</h4>
					<p class="mb2 mb4_sp">イベント中には参加された方々やMCのAYAさん、視聴者さまからさまざまな質問がありました。そのなかからいくつかピックアップしてお伝えします！</p>
					<div class="event_comment">
						<div class="balloon balloon_widthmax mb questioner_r">
							<div class="inner-border_pink">
								<div>
									<p>モノがあふれてパントリーに入らず、作業台にモノを置いています。奥行きがあるパントリーを使いやすくするにはどうしたらよいでしょうか？</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_widthmax mb ohashimeister">
							<div class="inner">
								<div>
									<p>奥行きが深くて、間口が狭い収納はどうしても使いづらくなります。奥行きのある収納のコツは、必ず手前のモノはカゴに入れること。手前のカゴを取ってから奥のモノを取る、という仕組みにしてください。奥のモノはラベルを貼ったり、透明な容器に入れたりと、何が入っているか分かるようにします。棚板にもラベリングしましょう。ラベリングを実践すると、後々モノを出す時間が短縮されます。</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_widthmax mb questioner_r">
							<div class="inner-border_pink">
								<div>
									<p>棚に入っている調味料が取りづらいです。料理しながら出し入れしやすくしたいです。</p>
								</div>
							</div>
						</div>
						<div class="balloon balloon_widthmax mb ohashimeister">
							<div class="inner">
								<div>
									<p>調味料をトレイに入れて引き出しのイメージで使いましょう。トレイや高さのない低めのケースを使って引っ張り出すことで調味料が取り出しやすくなります。もしくは、調味料の上に余白を作ることで奥まで手が入るので、奥の調味料も取り出しやすくなります。お料理しながら出し入れしやすい仕組みを作るには、かなりモノを減らす必要もありますね。</p>
								</div>
							</div>
						</div>
					</div>
        </section>
				<section class="mb3">
					<h4 class="u-ttl__m center">イベントアンケートとご感想</h4>
					<h4 class="u-ttl__s center mb4">今どのようなシチュエーションで参加していますか？</h4>
					<figure class="center pl4">
						<img src="<?php echo $img_url?>/event/report-online-event02/sec07__img01@2x.jpg" class="u-img__max center mb3" style="max-width:600px;" alt="家でゆったり85% 家事をしながら11% 移動しながら4%" loading="lazy">
					</figure>
					<h4 class="u-ttl__s center mb3">収納のお悩みについての情報収集は何でしますか？</h4>
					<figure class="pl4">
						<img src="<?php echo $img_url?>/event/report-online-event02/sec07__img02@2x.jpg" class="u-img__max" style="max-width:505px;" alt="雑誌・書籍52% WEBサイト44% テレビ30% YouTube19% セミナー参加15% Instagram15% ブログ7% その他7%" loading="lazy">
					</figure>
					<p class="mb2">ブランシエラクラブの2回目のオンラインイベント、みなさまいかがでしたでしょうか？アンケート結果を見ると、おうちでまったりとした時間のお供にオンラインイベントに参加いただいている方が多いということが分かりました。週末のひとときをみなさまと共に過ごせて私たちもとてもうれしかったです。</p>
					<p class="mb2">また、収納に関する情報収集の方法として普段「セミナー参加」を選択している方は15％と少ないにも関わらず、今回のイベントにはたくさんのご応募があり、この企画がセミナー参加のきっかけになれば幸いです。ブランシエラクラブのオンラインイベントで、みなさまの暮らしを豊かにするお手伝いができるよう、これからも企画していきたいと思います！</p>
					<h4 class="u-font__r-online-event02 center mt4">そのほかの収納記事もチェック！</h4>
					<div class="u-btn-layout mt2 mb5">
						<div class="u-btn-layout__row center mb2_sp">
							<a href="<?php echo $base_url ?>/magazine/index_sumai-sos.php" class="u-btn-layout_pink" data-ga-click="event-online02_repo7">
								大橋わか先生監修！<br>プロが解決！住まいのSOSはこちら
							</a>
						</div>
					</div>
				</section>
				<section>
					<h5 class="u-font__r-online-event02 center mb3">動画ではお伝えしきれなかった<br class="u-only__sp">サービスをご紹介！</h5>
					<div class="mb3">
						<figure>
							<img src="<?php echo $img_url?>/event/report-online-event02/sec07__img03@2x.jpg" class="u-img__max u-only__pc" alt="リフォームで実現！理想の収納" loading="lazy">
						</figure>
						<div class="flex  u-img__max">
							<div class="event-online-btn">
									<figure>
										<img src="<?php echo $img_url?>/event/report-online-event02/sec07__img04@2x.jpg" class="u-img__max u-only__pc" alt="長谷工リフォームオリジナルセミオーダー収納家具RASHIKU" loading="lazy">
									</figure>
							</div>
							<div class="event-online-btn">
								<figure>
									<img src="<?php echo $img_url?>/event/report-online-event02/sec07__img05@2x.jpg" class="u-img__max u-only__pc" alt="ミリ単位でサイズ設定ができる長谷工リフォームオリジナルのセミオーダー収納家具はいかがですか？デザイン、カラーも豊富なバリエーションから選べるラシクMシリーズ。リフォームのプロが空間と使い方に合わせた収納選びをお手伝いします！お住まいと暮らし方をよりあなたらしく。" loading="lazy">
							    <a href="https://www.haseko.co.jp/hrf/reform/news/2022/RASHIKU_M%20series.html" target="_blank" data-ga-click="event-online02_repo8">
									<img src="<?php echo $img_url?>/event/report-online-event02/sec07__img06@2x.jpg" class="u-img__max u-only__pc" alt="ラシクMシリーズのご紹介はこちら" loading="lazy">
								  </a>
								</figure>
							</div>
						</div>
					</div>
					<div class="mb3_sp">
						<figure>
							<img src="<?php echo $img_url?>/event/report-online-event02/sec07__img03-sp@2x.jpg" class="u-img__max u-only__sp" alt="ミリ単位でサイズ設定ができる長谷工リフォームオリジナルのセミオーダー収納家具はいかがですか？デザイン、カラーも豊富なバリエーションから選べるラシクMシリーズ。リフォームのプロが空間と使い方に合わせた収納選びをお手伝いします！お住まいと暮らし方をよりあなたらしく。" loading="lazy">
							<a href="https://www.haseko.co.jp/hrf/reform/news/2022/RASHIKU_M%20series.html" target="_blank" data-ga-click="event-online02_repo8">
							<img src="<?php echo $img_url?>/event/report-online-event02/sec07__img04-sp@2x.jpg" class="u-img__max u-only__sp" alt="ミリ単位でサイズ設定ができる長谷工リフォームオリジナルのセミオーダー収納家具はいかがですか？デザイン、カラーも豊富なバリエーションから選べるラシクMシリーズ。リフォームのプロが空間と使い方に合わせた収納選びをお手伝いします！お住まいと暮らし方をよりあなたらしく。" loading="lazy">
						  </a>
						</figure>
					</div>
					
					<figure>
						<img src="<?php echo $img_url?>/event/report-online-event02/sec07__img07@2x.jpg" class="u-img__max u-only__pc center" style="max-width: 740px;" alt="ここでは一部の掲載となりますが、たくさんのご意見をいただき、ありがとうございました。ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。最新情報は毎週木曜日配信のメルマガでお知らせしますのでぜひ、チェックしてください。" loading="lazy">
						<img src="<?php echo $img_url?>/event/report-online-event02/sec07__img07-sp@2x.jpg" class="u-img__max u-only__sp center" alt="ここでは一部の掲載となりますが、たくさんのご意見をいただき、ありがとうございました。ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。最新情報は毎週木曜日配信のメルマガでお知らせしますのでぜひ、チェックしてください。" loading="lazy">
					</figure>
				</section>
			</div>
		</div>
	</article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
