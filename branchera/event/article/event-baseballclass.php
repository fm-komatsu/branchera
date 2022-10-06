<?php
//base
include ("../../function.php");
$content = get_id_data('4080');
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
        <div class="main-v mb2 <?php echo('u-filter__'.$eventSts)?>">
        <figure>
          <img data-src="<?php echo $img_url ?>/event/event-baseballclass/main-v.png" data-retina="<?php echo $img_url ?>/event/event-baseballclass/main-v@2x.png"
           alt="<?php echo $pageTtl; ?>" class="u-img__max">
           <!-- <img data-src="<?php echo $img_url ?>/event/event-baseballclass/main-sp.jpg" data-retina="<?php echo $img_url ?>/event/event-baseballclass/main-sp@2x.jpg"
           alt="<?php echo $pageTtl; ?>" class="u-only__sp u-img__max"> -->
        </figure>
      </div>
      <div class="u-assist">
        <p>中日ドラゴンズのレジェンドがトークショーに登場！更に、通常では入ることのできない、中日ドラゴンズの屋内練習場で直接指導してもらえるキッズ向け野球教室も同時開催！！<br>現在会員ではなくても、新規でご登録いただければ、ご応募可能です。<br>このチャンスをお見逃しなく！たくさんのご応募をお待ちしています！！</p>
      </div>
      <div class="icn-ball">
        <h4 class="u-ttl__m icn-ball__ex mb0">レジェンドOBに会えるチャンス！！</h4>
      </div>
      <p class="mt0 mb4">トークショーで登場するのはこの2人！！その上、野球の指導もしてもらえる！</p>
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
                    <figcaption class="u-fig__cap_right u-u-only__sp u-font__small">写真提供©GA Link,Inc.</figcaption>
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
            <p>「球界のレジェンド」の異名を持ち数々の大記録を達成してきた名投手で、現役32年を中日ドラゴンズ一筋で活躍してきたフランチャイズプレイヤー。<br>1984年に日本大学藤沢高校から入団。入団5年目のアメリカ留学を機に才能が開花し、帰国後すぐに無傷の5連勝でリーグ優勝に貢献。その後3度の最多勝に輝き、1994年には投手最高の栄誉である沢村賞を受賞。2006年には史上最年長でのノーヒットノーラン、2008年には通算200勝を歴代最年長で達成した。50歳での現役、プロ生活32年、実働29年はいずれも歴代最長で、通算219勝のうち半分以上の140勝を30歳以降に記録。また40歳以降でも46勝を挙げた記録にも記憶にも残る名投手として知られる。<br>引退後は野球解説者・スポーツコメンテーターとして活動する傍ら、自らの経験を基に講演会の講師としても活躍中。</p>
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
                    <figcaption class="u-fig__cap_right u-font__small u-only__sp">写真提供©GA Link,Inc.</figcaption>
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
              <p>「ジャイアン」の愛称の通り豪快なホームランとその性格で愛された大打者。<br>1987年に愛知工業大学名電高校から地元・中日ドラゴンズに入団。アメリカやドミニカへの留学などを経て、プロ10年目の1996年にレギュラーに定着、その年に本塁打王を獲得。2003 年からオリックス、2005 年からは楽天の創設メンバーとして活躍。創設期から主将を務めるなどチームを支え、2007 年には39歳で2度目の本塁打王を獲得。打点王と合わせて2冠王に輝き「中年の星」として大きな支持を集めた。2012 年から古巣の中日ドラゴンズに復帰。翌2013年に現役を引退。<br>引退後は野球解説者・スポーツコメンテーターとして活動する傍ら、OTG TN 滋賀 86のレーサーとしても活躍中。</p>
            </div>
          </div>
        </div>
      <div id="practice-ground" class="icn-ball">
        <h4 class="u-ttl__m icn-ball__ex">中日ドラゴンズの屋内練習場に入れちゃう！！</h4>
      </div>
      <p class="mb2">普段は入ることのできない中日ドラゴンズの屋内練習場に入れるだけでなく、レジェンド２人に加え、ドラゴンズベースボールアカデミーのコーチたちによる野球教室も開催！</p>
			<div class="flex between">
				<figure class="w50 center mb">
					<img
						data-src="<?php echo($img_url)?>/event/event-baseballclass/img__01.jpg"
						data-retina="<?php echo($img_url)?>/event/event-baseballclass/img__01@2x.jpg" style="max-width:400px;"
						class="u-img__max"
					>
				</figure>
				<figure class="w50 center mb u-fig">
					<img
						data-src="<?php echo($img_url)?>/event/event-baseballclass/img__02.jpg"
						data-retina="<?php echo($img_url)?>/event/event-baseballclass/img__02@2x.jpg" style="max-width:400px;"
						class="u-img__max"
					>
          <figcaption class="u-fig__cap_right u-font__small">※イメージ画像</figcaption>
				</figure>
			</div>
      <div class="icn-ball">
        <h4 class="u-ttl__m icn-ball__ex">当日のスケジュール</h4>
      </div>
      <div class="flex between">
        <div class="w50 u-font__palt">
          <div>
            <div class="icn-ball__time timetable">
              <h5>午前の部</h5>
            </div>
          </div>
          <p>親子で参加できる「野球教室＆トークショー」<br>野球教室対象：小学校1～3年生</p>
          <table class="timetable__table_am mb3_sp">
            <tr>
              <th>9:30～</th>
              <td>受付開始</td>
            </tr>
            <tr>
              <th>10:00～</th>
              <td>開会式・トークショー</td>
            </tr>
            <tr>
              <th>10:50～</th>
              <td>親子野球教室 （親子キャッチボール、バッティング体験、守備体験）*</td>
            </tr>
            <tr>
              <th>11:50～</th>
              <td>お楽しみ抽選会・記念撮影（集合写真）・閉会式</td>
            </tr>
          </table>
        </div>
        <div class="w50 u-font__palt">
          <div>
          <div class="icn-ball__time timetable">
              <h5>午後の部</h5>
            </div>
          </div>
          <p>経験者向け「野球教室＆トークショー」<br>野球教室対象：小学校4～6年生</p>
          <table class="timetable__table_pm">
            <tr>
              <th>13:00～</th>
              <td>受付開始</td>
            </tr>
            <tr>
              <th>13:30～</th>
              <td>開会式・トークショー</td>
            </tr>
            <tr>
              <th>14:20～</th>
              <td>野球教室　（ティーバッティング、キャッチボール、守備練習）*</td>
            </tr>
            <tr>
              <th>15:50～</th>
              <td>お楽しみ抽選会・記念撮影（集合写真）・閉会式</td>
            </tr>
          </table>
        </div>
      </div>
      <p class="timetable__ex">*チームに分かれ、入れ替えで各ポジションを体験します。保護者の方は、2階のギャラリースペースにて見学となります。<br>（午前の部の「親子キャッチボール」のみ親子で参加）</p>
      <h4 class="u-ttl__m">イベント概要</h4>
      <div class="u-list__dl_table mb8">
        <dl>
          <dt>[イベント内容]</dt>
          <dd>『親子イベント』 中日ドラゴンズレジェンドOB ドリーム野球教室＆トークショー ご招待</dd>
        </dl>
        <dl>
          <dt>[開催日時]</dt>
          <dd>2020年2月22日（土）<br>午前の部　9:30 受付開始　10:00 イベント開始 12:20 イベント終了（予定）<br>午後の部 13:00 受付開始　13:30 イベント開始  16:20 イベント終了（予定）</dd>
        </dl>
        <dl>
          <dt>[開催場所]</dt>
          <dd>中日ドラゴンズ屋内練習場<br>愛知県名古屋市中川区露橋2-12-69　<a href="https://goo.gl/maps/QcAyk95RL4Yrrb7w9" target="_blank" rel="nofollow" class="u-icon">地図はこちら</a><br>（アクセス）<br>JR 尾頭橋　徒歩6分<br>名鉄 山王駅　徒歩7分<br>市バス 露橋公園バス停　徒歩3分</dd>
        </dl>
        <dl>
          <dt>[募集人数]</dt>
          <dd>午前の部、午後の部　共に50組100名</dd>
        </dl>
        <dl>
          <dt>[講師]</dt>
          <dd>トークショー：山本昌さん、山﨑 武司さん</dd>
        </dl>
        <dl>
          <dt>[費用]</dt>
          <dd>参加無料　※交通費等は各自負担</dd>
        </dl>
        <dl>
          <dt>[応募申込]</dt>
          <dd>長谷工IDマイページにログインしてお申し込みください。<br><small class="u-small">※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。<br>※ 小学生のお子さまとその保護者（ご本人さま）の親子ペアが対象です。</small></dd>
        </dl>
        <dl>
          <dt>[受付期間]</dt>
          <dd>2019年12月19日（木）～2020年1月19日（日）</dd>
        </dl>
        <dl>
          <dt>[当選者発表]</dt>
          <dd>当選された方へ2020年1月21日（火）より随時メールにてご連絡いたします</dd>
        </dl>
        <dl>
          <dt>[ご注意事項]</dt>
          <dd>
            <ul class="u-font__palt">
              <li>※ 長谷工IDマイページにログインしてお申し込みください。</li>
              <li>※ 長谷工IDをお持ちのご本人さまのみご応募いただけます。</li>
              <li>※ “午前の部”、“午後の部”のどちらか一方のみのご応募となります。</li>
              <li>※ 本イベントの参加権利をご家族・ご友人等に譲渡することはできませんので、ご了承ください。</li>
              <li>※ 小学生のお子さまとその保護者が対象です（野球教室はお子さまが対象です）。</li>
            </ul>
          </dd>
        </dl>
      </div>
      <?php if($eventSts == 'new') { ?>
        <div>
        <div>
          <div class="u-btn-layout center">
            <div class="u-btn-layout__row">
              <a href="<?php echo $mypoint_url ?>/<?php echo $flpID; ?>" target="_blank" class="u-btn_point u-btn-layout__item u-icon__circle-right">午前の部に応募する</a>
              <a href="<?php echo $mypoint_url ?>/<?php echo $flpID2; ?>" target="_blank" class="u-btn_point u-btn-layout__item u-icon__circle-right">午後の部に応募する</a>
            </div>
          </div>
        </div>
      </div>
      <?php } else { ?>
        <label class="u-btn_end center mt2">応募の受け付けは終了いたしました</label>
      <?php } ?>


      <?php if (!$ssoFlag == 1){ ?>
      <small class="u-small mb5">※イベントの申し込みには長谷工IDが必要です。まだ長谷工IDをお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"
         class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。</small>
         <div class="icn-ball__entry entry mb8 mb5_sp">
          <figure class="center entry__top">
            <img data-src="<?php echo $img_url ?>/event/event-baseballclass/registration.png" data-retina="<?php echo $img_url ?>/event/event-baseballclass/registration@2x.png"
            alt="この機会にぜひ会員登録を！" class="u-img__max center" style="max-width:277px;">
          </figure>
          <div class="entry__ttl"><h3>ブランシエラクラブで、暮らしをもっと楽しくより快適に</h3></div>
          <div class="entry__cnt">
            <div class="u-column mb3">
              <div class="u-column__3">
                <div class="u-column__item">
                  <div class="entry__catttl"><h4>ブランシエラマガジン</h4></div>
                  <div class="entry__ex">ゆたかな暮らしを支える情報をお届けします。</div>
                  <figure class="u-articlelist__img mb2_sp">
                    <?php
                  echo s_show_category_photoList__random("recipe");
                  ?>
                  </figure>
                </div>
                <div class="u-column__item">
                  <div class="entry__catttl"><h4>優待サービス</h4></div>
                  <div class="entry__ex">プレゼント企画や優待サービスなど、おトクな情報が満載！</div>
                  <figure class="u-articlelist__img mb2_sp">
                    <?php
                      echo s_show_category_photoList__random("gift");
                    ?>
                  </figure>
                </div>
                <div class="u-column__item">
                  <div class="entry__catttl"><h4>イベント・キャンペーン</h4></div>
                  <div class="entry__ex">普段は体験できないイベントに参加できるチャンス！</div>
                  <figure class="u-articlelist__img">
                    <?php
                      echo s_show_category_photoList__random("event");
                    ?>
                  </figure>
                </div>
              </div>
            </div>
            <div class="entry__catttl"><h4>住まいレージ</h4></div>
            <div class="entry__ex center">ためて、つかえるポイントサービス</div>
            <div class="flex flex_center mb2">
              <div class="w50 mb2_sp">
                <figure>
                  <img data-src="<?php echo $img_url ?>/event/event-baseballclass/tameru.png" data-retina="<?php echo $img_url ?>/event/event-baseballclass/tameru@2x.png"
                  alt="ためる" class="u-img__max center" style="max-width:326px;">
                </figure>
              </div>
              <div class="w50">
                <figure>
                  <img data-src="<?php echo $img_url ?>/event/event-baseballclass/tsukau.png" data-retina="<?php echo $img_url ?>/event/event-baseballclass/tsukau@2x.png"
                  alt="つかう" class="u-img__max center" style="max-width:326px;">
                </figure>
              </div>
            </div>
          </div>
          <div class="entry__end">ぜひ新規登録して、会員限定の本イベントにご応募ください！</div>
        </div>

        <div class="u-btn-layout mb2">
          <div class="u-btn-layout__row">
            <a href="<?php echo $myentry_url ?>" target="_blank" class="u-btn_point u-btn-layout__item u-icon__circle-right">長谷工IDのご登録はこちら</a>
          </div>
        </div>

      <?php }; ?>
    </section>
    </div>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
