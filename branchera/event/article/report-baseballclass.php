<?php
//base
include ("../../function.php");
$content = get_id_data('4091');
$pageTtl = $content['title'];
$eventSts = $content['icon-img'];

//meta
$metaTtl = ''.$pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");

//FLP ID
$flpID = '147';
$flpID2 = '148';

//buttom message
// $btnMesage = 'このイベントに応募する';
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
    <div class="main__wrapper">
      <section class="section wrapper">
        <div class="flex between mb2">
          <figure class="w50_ball center">
            <img src="<?php echo $img_url?>/event/report-baseballclass/img-mv.jpg" class="u-img__max" style="max-width:400px;" alt="中日ドラゴンズ 山本昌さん" loading="lazy">
          </figure>
          <div class="w50_ball center bg">
            <div>
              <h3 class="mb2 repo-ball__h3">『親子イベント』<br>中日ドラゴンズレジェンドOB<br>ドリーム野球教室&amp;トークショー<br>イベントレポート</h3>
              <p class="date center">開催日：2020年2月22日(土)</p>
            </div>
          </div>
			  </div>
      <div>
        <p>中日ドラゴンズのレジェンドOB・山本昌さんと山﨑武司さんから直接野球を教えていただく、イベントを名古屋で開催しました！子どもたちをはじめ、レジェンドたちの登場に大人のみなさまも大興奮な1日でした。</p>
      </div>
      <h4 class="u-ttl__m center">プロフィール</h4>
      <div class="flex between mb3">
        <div class="w50 u-font__palt">
          <div class="icn-ball__player player">
            <div class="player__row">
              <div class="player__bg"></div>
              <div class="player__img u-only__pc">
                <figure class="u-fig">
                  <img data-src="<?php echo $img_url ?>/event/event-baseballclass/masa_yamamoto.jpg" data-retina="<?php echo $img_url ?>/event/event-baseballclass/masa_yamamoto@2x.jpg"
                  alt="<?php echo $pageTtl; ?>" class="u-img__max u-only__pc" style="max-width:150px;">
                  <figcaption class="u-fig__cap_right u-u-only__pc u-font__small">写真提供©GA Link,Inc.</figcaption>
                </figure>
              </div>
              <div class="player__info">
                <div class="player__name mb2_sp">
                  <h5>山本昌<br><span class="u-font__small">やまもとまさ</span></h5>
                </div>
                <div class="player__img u-only__sp">
                  <figure class="u-fig">
                    <img data-src="<?php echo $img_url ?>/event/event-baseballclass/masa_yamamoto.jpg" data-retina="<?php echo $img_url ?>/event/event-baseballclass/masa_yamamoto@2x.jpg"
                    alt="<?php echo $pageTtl; ?>" class="u-img__max u-only__sp center" style="max-width:150px;">
                    <figcaption class="u-fig__cap_right u-u-only__sp u-font__small center">写真提供©GA Link,Inc.</figcaption>
                  </figure>
                </div>
                <ul class="player__list mb2_sp">
                  <li>1965年8月11日生まれ</li>
                  <li>神奈川県茅ヶ崎市出身</li>
                  <li>188cm/87kg</li>
                  <li>左投左打</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="w50 u-font__palt">
          <div class="icn-ball__player player">
            <div class="player__row">
              <div class="player__bg"></div>
              <div class="player__img u-only__pc">
                <figure class="u-fig">
                  <img data-src="<?php echo $img_url ?>/event/event-baseballclass/takeshi_yamasaki.jpg" data-retina="<?php echo $img_url ?>/event/event-baseballclass/takeshi_yamasaki@2x.jpg"
                  alt="<?php echo $pageTtl; ?>" class="u-img__max u-only__pc" style="max-width:150px;">
                  <figcaption class="u-fig__cap_right u-font__small u-only__pc">写真提供©GA Link,Inc.</figcaption>
                </figure>
              </div>
              <div class="player__info">
                <div class="player__name mb2_sp">
                  <h5>山﨑 武司<br><span class="u-font__small">やまさきたけし</span></h5>
                </div>
                <div class="player__img u-only__sp">
                  <figure class="u-fig">
                    <img data-src="<?php echo $img_url ?>/event/event-baseballclass/takeshi_yamasaki.jpg" data-retina="<?php echo $img_url ?>/event/event-baseballclass/takeshi_yamasaki@2x.jpg"
                    alt="<?php echo $pageTtl; ?>" class="u-img__max center u-only__sp" style="max-width:150px;">
                    <figcaption class="u-fig__cap_right u-font__small u-only__sp center">写真提供©GA Link,Inc.</figcaption>
                  </figure>
                  </div>
                  <ul class="player__list mb2_sp">
                    <li>1968年11月7日生まれ</li>
                    <li>愛知県知多市出身</li>
                    <li>182cm/100kg</li>
                    <li>右投右打</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h4 class="u-ttl__m">イベント会場は「中日ドラゴンズ屋内練習場」！</h4>
        <div class="mb3 u-clearfix">
          <figure class="w50 u-float__right">
            <img src="<?php echo $img_url?>/event/report-baseballclass/img__01.jpg" class="u-img__max" style="max-width:400px;" alt="" loading="lazy">
          </figure>
          <p>ブランシエラクラブ2回目となる名古屋イベントは、野球教室＆トークショー。イベントの目玉は何と言っても二人のビックゲスト！そしてさらに、会場はあの「中日ドラゴンズ屋内練習場」なのです。普段は選手しか入ることができませんが、今回は特別に使わせていただきました！<br class="mb2">受付を済ませると、さっそくグローブ片手に走り出す子どもたち。普段入ることのできない屋内練習場で、思い切り走り回ったり、キャッチボールしたりと、イベントが始まる前から大賑わいでした。</p>
        </div>
        <h4 class="u-ttl__m">「ピッチャー 山本昌 背番号34！」「ファースト 山﨑武司 背番号7！」<br>中日ドラゴンズのレジェンドOB登場に大興奮！</h4>
			  <p class="mb2">今回のイベントは午前と午後に分かれ、午前は小学校低学年、午後は野球経験のある高学年の子どもたちとお父さんお母さんが参加しました。ユニフォーム姿の子もチラホラ…みんな気合十分です。<br>今回の司会は、中日ドラゴンズの場内アナウンスを務める酒井美幸さん。場内アナウンススタイルで、山本昌さんと山﨑武司さんを紹介します！二人の登場に、場内は大きな歓声に包まれました。</p>
        <div class="flex between">
          <figure class="w50 center mb2_sp">
            <img src="<?php echo $img_url?>/event/report-baseballclass/img__02.jpg" class="u-img__max" style="max-width:400px;" alt="中日ドラゴンズ 山本昌さん" loading="lazy">
          </figure>
          <figure class="w50 center u-fig">
            <img src="<?php echo $img_url?>/event/report-baseballclass/img__03.jpg" class="u-img__max" style="max-width:400px;" alt="中日ドラゴンズ 山﨑武司さん" loading="lazy">
          </figure>
			  </div>
        <h4 class="u-ttl__m">軽快な二人のトークからスタート！<br>子どもたちからの質問タイムも</h4>
			  <p class="mb2">午前の部、午後の部共に、まずは山本昌さんと山﨑武司さんによるトークショーからスタートです。<br>トレーニングルームがなかった入団当時の練習方法のことや、身だしなみについて厳しく注意されたことなど、ここでしか聞けない現役時代のエピソードに場内は興味津々。そして、2020年のドラゴンズの見立ての話題になると、みなさまの表情は真剣そのもの！お二人によると、2020年のドラゴンズはいい仕上がりになっているそうですよ！</p>
        <div class="flex between mb2">
          <figure class="w50 center mb2_sp">
            <img src="<?php echo $img_url?>/event/report-baseballclass/img__04.jpg" class="u-img__max" style="max-width:400px;" alt="中日ドラゴンズ 山本昌さん" loading="lazy">
          </figure>
          <figure class="w50 center u-fig">
            <img src="<?php echo $img_url?>/event/report-baseballclass/img__05.jpg" class="u-img__max" style="max-width:400px;" alt="中日ドラゴンズ 山﨑武司さん" loading="lazy">
          </figure>
			  </div>
        <h4 class="u-ttl__m">いよいよ野球教室のスタート<br>午前は親子キャッチボール・守備・ティーバッティング！</h4>
			  <p class="mb2">トークショーが終わると、いよいよ野球教室スタート！中日ドラゴンズOBで現ドラゴンズアカデミーのコーチである長谷部裕さん・澤井道久さん、酒井大輔さん、川又米利さんが加わり、さらに豪華なメンバーとなって指導開始です。小学校低学年の午前の部は、親子キャッチボールから。「投げる方向にしっかり手を伸ばして！」山本昌さんのアドバイスにならって、みんな一生懸命ボールを投げます。</p>
        <div class="flex between mb2">
          <figure class="w50 center mb2_sp">
            <img src="<?php echo $img_url?>/event/report-baseballclass/img__06.jpg" class="u-img__max" style="max-width:400px;" alt="キャッチボール練習" loading="lazy">
          </figure>
          <figure class="w50 center u-fig">
            <img src="<?php echo $img_url?>/event/report-baseballclass/img__07.jpg" class="u-img__max" style="max-width:400px;" alt="キャッチボール練習" loading="lazy">
          </figure>
			  </div>
        <p class="mb2">キャッチボールの後は、子どもたちだけでティーバッティングと守備の練習です。山﨑武司さんの「当てにいくのではなくて、思い切り振るのが大事！」というアドバイスを真剣に聞く子どもたち。短い時間の中でも、目に見えて上達していきました。</p>
        <h4 class="u-ttl__m">午後は山本昌さんのノックによる本格守備練習と<br>山﨑武司さんによるティーバッティング指導！</h4>
        <p class="mb2">高学年の午後の部は子どもたちだけで練習…のはずだったのですが、予定変更！<br>「正しいボールの投げ方を、しっかりお父さん・お母さんに伝えたい」という山本昌さんのご厚意により、肩を壊さないボールの投げ方レッスンが急遽スタート。みんなでフォームを確認しながら、正しい投げ方を教わりました。</p>
        <div class="flex between mb2">
          <figure class="w50 center mb2_sp">
            <img src="<?php echo $img_url?>/event/report-baseballclass/img__08.jpg" class="u-img__max" style="max-width:400px;" alt="山本昌さん 肩を壊さないボールの投げ方レッスン" loading="lazy">
          </figure>
          <figure class="w50 center u-fig">
            <img src="<?php echo $img_url?>/event/report-baseballclass/img__09.jpg" class="u-img__max" style="max-width:400px;" alt="山本昌さん 肩を壊さないボールの投げ方レッスン" loading="lazy">
          </figure>
			  </div>
        <p class="mb2">キャッチボール練習の後は、山本昌さん自らノックをしてくれる守備練習と、山﨑武司さんによるティーバッティング練習です。屋内練習場には、子どもたちの「さぁ、来ーい！」の声が響き渡ります。</p>
        <div class="flex between">
          <figure class="w50 center mb2_sp">
            <img src="<?php echo $img_url?>/event/report-baseballclass/img__10.jpg" class="u-img__max" style="max-width:400px;" alt="キャッチボール練習" loading="lazy">
          </figure>
          <figure class="w50 center u-fig">
            <img src="<?php echo $img_url?>/event/report-baseballclass/img__11.jpg" class="u-img__max" style="max-width:400px;" alt="山﨑武司さんによるティーバッティング練習" loading="lazy">
          </figure>
			  </div>
        <h4 class="u-ttl__m">抽選会と記念撮影！思い出に残る1日に</h4>
        <p class="mb2">野球教室の後は、素敵な賞品が当たる抽選会です。なんと、お二人のサイン入りドラゴンズグッズなどのプレミアアイテムが全員に当たる！ということで、子どもたちの目が輝きます。上位当選者の子どもたちは、お二人との記念撮影も。野球好きにはたまらない、忘れられない1日になりました。<br>午前・午後の部ともに、最後は全員で記念撮影！そして、子どもたちからお父さん、お母さん、コーチ陣に向かって、感謝の「ありがとうございました！」でイベントを締めくくりました。</p>
        <div class="flex between mb2">
          <figure class="w50 center mb2_sp">
            <img src="<?php echo $img_url?>/event/report-baseballclass/img__12.jpg" class="u-img__max" style="max-width:400px;" alt="記念撮影" loading="lazy">
          </figure>
          <figure class="w50 center u-fig">
            <img src="<?php echo $img_url?>/event/report-baseballclass/img__13.jpg" class="u-img__max" style="max-width:400px;" alt="記念撮影" loading="lazy">
          </figure>
			  </div>
        <div class="flex between mb2">
          <figure class="w50 center mb2_sp">
            <img src="<?php echo $img_url?>/event/report-baseballclass/img__14.jpg" class="u-img__max" style="max-width:400px;" alt="記念撮影" loading="lazy">
          </figure>
          <figure class="w50 center u-fig">
            <img src="<?php echo $img_url?>/event/report-baseballclass/img__15.jpg" class="u-img__max" style="max-width:400px;" alt="山本昌さん 山﨑武司さん サイン入りドラゴンズグッズ" loading="lazy">
          </figure>
			  </div>
        <p>「野球が上達する一番の方法は、野球を好きになることと、毎日必ずボールに触ること」と教えてくださったレジェンドのお二人。屋内練習場を後にする子どもたちの表情はちょっぴり凛々しく、何か熱い気持ちが生まれたように感じられます。<br>野球への思いが一段と強くなる、特別なイベントでした。</p>
        <h4 class="u-ttl__m">参加していただいた方の声</h4>
				<div class="balloon balloon_widthmax mb fam2">
					<div class="inner">
						<div>
							<p>野球について未経験な娘が、コーチや山本選手山﨑選手からとっても親切に教えていただいて、スッゴク楽しかったー！と言っていました。<br>大人向けのトークショーも、内容がとてもおもしろく興味深いものでした。</p>
						</div>
					</div>
				</div>
				<div class="balloon balloon_widthmax mb fam2">
					<div class="inner">
						<div>
							<p>内容の濃いイベントでした。<br>その中でも特に息子は、山﨑武司さんにバッティングを直接指導していただいたようで、それがとてもうれしかったようです。<br>また、私はトークショーも楽しませていただきました。普段、聞く事の出来ない住まいに関するこだわりやプライベートの話など、大変興味深いものでした。</p>
						</div>
					</div>
				</div>
				<div class="balloon balloon_widthmax mb fam2">
					<div class="inner">
						<div>
							<p>とても楽しかったです。元中日ドラゴンズのお二人のお話を聞けて、また思っていたよりも本格的に投げ方などを教えていただき、とても有意義な時間になりました。<br>子どもだけでなく親もためになるイベントだったと思います。ナゴヤ球場の屋内練習場に入れたことも嬉しかったです。ありがとうございました。</p>
						</div>
					</div>
				</div>
				<div class="balloon balloon_widthmax mb fam2">
					<div class="inner">
						<div>
							<p>今回、初めてブランシエクラブさんのイベントに参加させてもらいましたが、親子共に大変満足した時間を過ごさせてもらい、野球をやっている息子にはすごく貴重な体験をさせてもらいました。お2人のレジェンドの方から直々に指導してもらい、凄く嬉しかったようです。普段は入ることのできない、室内練習場にまで入らせてもらい、子どもにとっては一生の思い出になったと思いました。親向けにも話が聞けましたし、最後の抽選会も楽しませて頂きました。</p>
						</div>
					</div>
				</div>
        <div class="u-assist center_pc mb4 mb2_sp" style="line-height:2;">
          <p class="u-font__bold">ブランシエラクラブでは、今後も楽しい企画・イベントを計画中です。<br>最新情報はメルマガでお知らせしますのでぜひ、チェックしてください。</p>
        </div>
      </section>
    </div>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
