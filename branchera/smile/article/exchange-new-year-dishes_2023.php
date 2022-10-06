<?php
//base
include("../../function.php");
$content = get_id_data('10063');
$pageTtl = $content['title'];
//meta
$metaTtl = 'スマイルで交換できる「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url . '/thum/' . $content['image'];
//bodyClass
$body_class = "page-article";
//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/smile/", "住まいレージ");
    $panAry[] = array("/smile/use-smileage.php/use-smileage.php", "スマイルをつかう・交換する");
    include($inc_path . "/lib/inc/pan.php");
    ?>
    <?php
    $smile_flug = "exchange_multiple_original_coffee"; // exchange or lottery or service or no_flp
    $multi_cnt = "newYearDishes2023";
    include($inc_path . "/lib/inc/page/_smile/smile-header_originalcoffee.php");
    ?>
    <section class="main__wrapper">
      <div class="u-list__dl_table_mothers mb3">
        <dl>
          <dt>お申込みのご注意</dt>
          <dd>スマイル交換申込み期限：<br class="u-only__sp">2022年12月6日（火）23:59まで<br>
            商品お届け予定日：<br class="u-only__sp">2022年12月29日（木）または30日（金）<br class="u-only__sp"><small class="u-small">※日時指定不可</small></dd>
        </dl>
      </div>

      <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item_twoitems">
            <img src="<?php echo $img_url ?>/smile/article/exchange_new_year_delishes_2023__img01.jpg" alt="【神楽坂 くろす×京都祇園 日本料理 山玄茶】東西料亭の饗宴和風おせち「神玄」二段重（冷凍）｜image｜<?php echo $pageTtl ?>" style="max-width:350px;" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item_twoitems">
            <img src="<?php echo $img_url ?>/smile/article/exchange_new_year_delishes_2023__img02.jpg" alt="【日本料理 山玄茶×Bistro & Wine Salon YAMADA×広東御料理 竹香 京都祗園三店舗監修】和洋中おせち「たつみ」三段重（冷凍）|
           ｜image <?php echo $pageTtl ?>" style="max-width:350px;" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item_twoitems">
            <img src="<?php echo $img_url ?>/smile/article/exchange_new_year_delishes_2023__img03.jpg" alt="【京都現代の名工 神田正幸監修】「百万石」和洋与段重（冷凍）｜image｜<?php echo $pageTtl ?>" style="max-width:350px;" class="u-img__max" loading="lazy">
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">新年の訪れを祝う、華やかなおせち3種</h4>
          <p>
            新年の始まりはおせちから！「人数に合うボリュームがいい」「洋風や中華風も食べたい」といったご要望にお応えする、3種のラインナップをご用意しました。2〜3人前の和風おせち、3〜4人前の和洋中おせち、5〜6人前の和洋特大おせちから、お好みのものをお選びいただけます。いずれも、伝統にモダンな要素をほどよく組み合わせ、お味も見た目も充実の内容。お祝いの席を華やかに盛り上げてくれるでしょう。
          </p>
        </div>
        <div class="smile-comment u-assist">
          <div class="smile-comment__row">
            <p>
              お重に詰められた色とりどりのおせちは、お正月の楽しみですね。<br>
              近年ではさまざまなおせちがありますが、今回は三越伊勢丹がブランシエラクラブのために厳選した3種のおせちをご用意しました！コンパクトなものは少人数のご家庭向き、洋・中も取り混ぜたおせちはお子さまや若いご家族にもおすすめです。ぜひ、ぴったりのおせちをお選びくださいね♪
            </p>
          </div>
        </div>
      </div>
    </section>
    <nav class="main__snav snav emergency__nav">
      <?php include($inc_path . "/lib/inc/page/_smile/__snav_ex-new-year-dishes_2023.php"); ?>
    </nav>
    <section class="main__wrapper">
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl_nonum mb4" id="shingen">【神楽坂 くろす×京都祇園 日本料理 山玄茶】東西料亭の饗宴和風おせち「神玄」二段重（冷凍）</h4>
          <?php // 欠品フラグ
          $shingenShortage = 0;
          ?>
          <div class="flex between">
            <figure class="w35 center_sp">
              <img src="<?php echo $img_url ?>/smile/article/exchange_new_year_delishes_2023__img01.jpg" alt="【神楽坂 くろす×京都祇園 日本料理 山玄茶】東西料亭の饗宴和風おせち「神玄」二段重（冷凍）｜<?php echo $pageTtl ?>｜image" style="max-width:236px;" class="u-img__max u-only__pc" loading="lazy">
              <img src="<?php echo $img_url ?>/smile/article/exchange_new_year_delishes_2023__img01-sp.jpg" alt="【神楽坂 くろす×京都祇園 日本料理 山玄茶】東西料亭の饗宴和風おせち「神玄」二段重（冷凍）｜<?php echo $pageTtl ?>｜image" style="max-width:80%;" class="u-img__max u-only__sp center" loading="lazy">
            </figure>
            <p class="w65">東西の有名料亭が腕を競った、二段重の和風おせちです。東京「神楽坂 くろす」の黒須浩之店主が監修した「神の重」は、活煮アワビ・うなぎ蒲焼スライス・有頭海老など、高級食材を盛り込んだお正月らしい内容。京都祇園「日本料理 山玄茶」の増田信彦店主が監修した「玄の重」は、さわらの西京焼き・かれい龍皮巻・万願寺唐辛子とお揚げなど、おすすめの品目もふんだんに入っています。東西で合計45品、約2〜3人でお楽しみいただけます。</p>
          </div>
        </div>
      </div>

      <div class="lottery-terms">
        <div class="u-terms u-terms__row mb3 mb2_sp">
          <div class="mb1">
            <h5 class="u-terms__ttl">詳細スペック</h5>
            <div class="u-terms__inner u-list__dl_table_long">
              <dl>
                <dt>セット内容</dt>
                <dd>
                  <ul class="u-list__ul_square">
                    <li><span>
                        <span class="u-font__bold u-ilblock">神の重（和風）</span><br>
                        <span>きんとん 50g、栗甘露煮 1個、かまぼこ（紅） 2枚、かまぼこ（白） 1枚、いくら醤油漬け 10g、紅白なます 30g、味付数の子 2切、貝真砂和え 30g、黒豆 40g、有頭海老 3尾、たたきごぼう 40g、一口にしん昆布巻 3個、くず餅 紫芋 1個、寿厚焼玉子 1個、ばい貝旨煮 2個、活煮アワビ 1個、ボイル昆布 30g、合鴨スモーク 3枚、若桃甘露煮 1個、うなぎ蒲焼スライス 3枚</span>
                      </span>
                    </li>
                    <li><span>
                        <span class="u-font__bold u-ilblock">玄の重（和風）</span><br>
                        <span>伊達巻 3枚、さつまいも甘露煮 3枚、白花豆 15g、鱈煮 45g、葉付金柑 1個、にしん甘酢漬け 40g、花餅（紅） 1個、わらびもち きなこ 3個、わらびもち 抹茶 3個、釜揚げわかめ 20g、かに爪肉 3個、味付焼帆立 3個、さわら西京焼き 3枚、かれい龍皮巻 2切、湯葉団子旨煮 3個、花形こんにゃく 1個、万願寺唐辛子とお揚げ煮 35g、きぬさや 2枚、蓮根旨煮 1個、えびと枝豆のしんじょ 1個、人参旨煮 2個、椎茸旨煮 2個、寿高野豆腐 1個、筍旨煮 2個、ふき旨煮 2個</span>
                      </span></li>
                  </ul>
                </dd>
              </dl>
              <dl>
                <dt class="mb1_sp">原材料に含まれる<br class="u-only__pc">アレルギー物質</dt>
                <dd>
                  小麦、卵、乳、えび、かに、あわび、いくら、鯖、大豆、豚肉、もも、りんご

                </dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
      <div class=" mb3">
        <div class="smile-footer">
          <?php
          if (isset($shingenShortage) && $shingenShortage) { ?>
            <footer class="smile-footer">
              <div class="smile-footer__row">
                <h2 class="smile-footer__ttl">【神楽坂 くろす×京都祇園 日本料理 山玄茶】東西料亭の饗宴和風おせち「神玄」二段重（冷凍）</h2>
                <div class="smile-footer__ex">
                  <p>必要スマイル</p>
                  <p><span class="smile-footer__num">16,500</span>スマイル</p>
                </div>
                <label class="smile-footer__btn u-btn_end center">お申込みは<br>終了しました</label>

              </div>
            </footer>
          <?php } else {
            $smile_itemname = "【神楽坂 くろす×京都祇園 日本料理 山玄茶】東西料亭の饗宴和風おせち「神玄」二段重（冷凍）"; //商品名
            $smile_num = "16,500"; //必要スマイル数
            $smile_id_test = "245"; //テストFLP用リンクナンバー
            $smile_id_production = "245"; //本番FLP用リンクナンバー
            include($inc_path . "/lib/inc/page/_smile/smile-footer.php");
          }
          ?>
        </div>
      </div>
      <small class="u-small">※写真はイメージです。<br>
        ※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>
        ※解凍時間：冷蔵にて24時間<br>
        ※祝箸は付きません。
      </small>
      <small class="u-small u-color__red u-font__bold">
        <ul class="u-list__ul_maru">
          <li>【お申込みのご注意】スマイル交換申込み期限：2022年12月6日（火）23:59まで／商品お届け予定日：2022年12月29日（木）または30日（金）<br>
            ※日時指定不可
          </li>
          <li>先着50点限定の商品となります。</li>
          <li>島部を除く全国都道府県にお届けいたします。<br>
            ※47都道府県の主要な地域にお届け可能です。島部に関しては、お届けができない地域がございますので、詳細については「銀座三越おせち予約係」にお問い合わせください。<br>
            商品に関する問合せ：銀座三越おせち予約係　0120-070-354（受付時間：午前10時～午後5時）</li>
        </ul>
      </small>
    </section>
    <section class="main__wrapper">
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl_nonum mb4" id="tatsumi">【日本料理 山玄茶×Bistro & Wine Salon YAMADA×広東御料理 竹香 京都祗園三店舗監修】和洋中おせち「たつみ」三段重（冷凍）</h4>
          <?php // 欠品フラグ
          $tatsumiShortage = 0;
          ?>
          <div class="flex between">
            <figure class="w35 center_sp">
              <img src="<?php echo $img_url ?>/smile/article/exchange_new_year_delishes_2023__img02.jpg" alt="【日本料理 山玄茶×Bistro & Wine Salon YAMADA×広東御料理 竹香 京都祗園三店舗監修】和洋中おせち「たつみ」三段重（冷凍）|<?php echo $pageTtl ?>｜image" style="max-width:236px;" class="u-img__max u-only__pc" loading="lazy">
              <img src="<?php echo $img_url ?>/smile/article/exchange_new_year_delishes_2023__img02-sp.jpg" alt="日本料理 山玄茶×Bistro & Wine Salon YAMADA×広東御料理 竹香 京都祗園三店舗監修】和洋中おせち「たつみ」三段重（冷凍）|<<?php echo $pageTtl ?>｜image" style="max-width:80%;" class="u-img__max u-only__sp center" loading="lazy">
            </figure>
            <p class="w65">京都祇園の有名3店監修による、三段重の和洋中おせちです。日本料理の「山玄茶」、フランス料理の「Bistro & Wine Salon YAMADA」、中華料理の「広東御料理 竹香」がそれぞれのお重を監修。伝統的な和のおせちから、スモークサーモンフラワーやイセエビのヘッドグラタンが華やかな洋風、エビチリやホエー豚角煮が入った中華風まで楽しめる、バラエティ豊かで飽きのこない内容。3〜4人でお楽しみいただけるボリュームです。</p>
          </div>
        </div>
      </div>

      <div class="lottery-terms>">
        <div class="u-terms u-terms__row mb3 b2_sp">
          <div class="mb1">
            <h5 class="u-terms__ttl">詳細スペック</h5>
            <div class="u-terms__inner u-list__dl_table_long">
              <dl>
                <dt>セット内容</dt>
                <dd>
                  <ul class="u-list__ul_square">
                    <li><span>
                        <span class="u-font__bold u-ilblock">山玄茶監修（和風）</span><br>
                        <span>伊達巻 3枚、たたきごぼう 30g、釜揚げわかめ 20g、味付数の子 3個、有頭海老 4尾、栗甘露煮 1個、きんとん 30g、一口にしん昆布巻 3個、蓮根旨煮 2枚、筍旨煮 1個、ふき旨煮 2個、きぬさや 2枚、えびと枝豆のしんじょ 1個、椎茸旨煮 2個、人参旨煮 2個、寿高野豆腐 1個、花形こんにゃく 1個、紅白なます 30g、いくら醤油漬け 5g、いかのうに和え 30g、黒豆 30g、かまぼこ（紅） 2枚、かまぼこ（白） 1枚
                        </span>
                      </span>
                    </li>
                    <li><span>
                        <span class="u-font__bold u-ilblock">YAMADA監修（洋風）</span><br>
                        <span>三元豚ロースパストラミ 3枚、ドライトマトワイン煮 2個、スモークサーモンフラワー 1個、黒糖ローストポーク 3切、コルニッションピクルス 1個、チキングリーンビーフ 3切、グリルチキンと野菜のトマトソース和え 40g、生ハムマリネ 30g、ブラックオリーブスライス 2枚、かに爪肉 3個、イセエビのヘッドグラタン 1個、海老と野菜のセビーチェ 50g</span>
                      </span></li>
                    <li><span>
                        <span class="u-font__bold u-ilblock">竹香監修（中華風）</span><br>
                        <span>肉団子黒糖黒酢ソース掛け 2個、若もぎ胡瓜 2個、エビチリ 3個、葉付金柑 1個、合鴨スモーク 3枚、ブロッコリー 2個、ほぐし鶏のゴマダレ和え 30g、活煮アワビ 1個、ボイル昆布 20g、若桃甘露煮 1個、蓮根の甘辛和え 30g、花餅（桃） 2個、珈琲煮豆 30g、中華くらげ 30g、蓮の芽梅酢漬け 6本、ホエー豚角煮 4切</span>
                      </span></li>
                  </ul>
                </dd>
              </dl>
              <dl>
                <dt class="mb1_sp">原材料に含まれる<br class="u-only__pc">
                  アレルギー物質</dt>
                <dd>
                  小麦、卵、乳、えび、かに、あわび、いか、いくら、牛肉、鮭、鯖、大豆、鶏肉、豚肉、もも、りんご、ゼラチン、ごま</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
      <div class=" mb3">
        <div class="smile-footer">
          <?php
          if (isset($tatsumiShortage) && $tatsumiShortage) { ?>
            <footer class="smile-footer">
              <div class="smile-footer__row">
                <h2 class="smile-footer__ttl">【日本料理 山玄茶×Bistro & Wine Salon YAMADA×広東御料理 竹香 京都祗園三店舗監修】和洋中おせち「たつみ」三段重（冷凍）</h2>
                <div class="smile-footer__ex">
                  <p>必要スマイル</p>
                  <p><span class="smile-footer__num">20,000</span>スマイル</p>
                </div>
                <label class="smile-footer__btn u-btn_end center">お申込みは<br>終了しました</label>

              </div>
            </footer>
          <?php } else {
            $smile_itemname = "【日本料理 山玄茶×Bistro & Wine Salon YAMADA×広東御料理 竹香 京都祗園三店舗監修】和洋中おせち「たつみ」三段重（冷凍）"; //商品名
            $smile_num = "20,000"; //必要スマイル数
            $smile_id_test = "246"; //テストFLP用リンクナンバー
            $smile_id_production = "246"; //本番FLP用リンクナンバー
            include($inc_path . "/lib/inc/page/_smile/smile-footer.php");
          }
          ?>
        </div>
      </div>
      <small class="u-small">※写真はイメージです。<br>
        ※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>
        ※解凍時間：冷蔵にて24時間<br>
        ※祝箸は付きません。
      </small>
      <small class="u-small u-color__red u-font__bold">
        <ul class="u-list__ul_maru">
          <li>【お申込みのご注意】スマイル交換申込み期限：2022年12月6日（火）23:59まで／商品お届け予定日：2022年12月29日（木）または30日（金）<br>
            ※日時指定不可
          </li>
          <li>先着50点限定の商品となります。</li>
          <li>島部を除く全国都道府県にお届けいたします。<br>
            ※47都道府県の主要な地域にお届け可能です。島部に関しては、お届けができない地域がございますので、詳細については「銀座三越おせち予約係」にお問い合わせください。<br>
            商品に関する問合せ：銀座三越おせち予約係　0120-070-354（受付時間：午前10時～午後5時）</li>
        </ul>
      </small>
    </section>
    <section class="main__wrapper">
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl_nonum mb4" id="hyakumangoku">【京都現代の名工 神田正幸監修】「百万石」和洋与段重（冷凍）</h4>
          <?php // 欠品フラグ
          $hyakumangokuShortage = 0;
          ?>
          <div class="flex between">
            <figure class="w35 center_sp">
              <img src="<?php echo $img_url ?>/smile/article/exchange_new_year_delishes_2023__img03.jpg" alt="【京都現代の名工 神田正幸監修】「百万石」和洋与段重（冷凍）｜<?php echo $pageTtl ?>｜image" style="max-width:236px;" class="u-img__max u-only__pc" loading="lazy">
              <img src="<?php echo $img_url ?>/smile/article/exchange_new_year_delishes_2023__img03.jpg" alt="【京都現代の名工 神田正幸監修】「百万石」和洋与段重（冷凍）｜<?php echo $pageTtl ?>｜image" style="max-width:80%;" class="u-img__max u-only__sp center" loading="lazy">
            </figure>
            <p class="w65">大きいサイズの四段重に和洋の品目をたっぷり盛り込んだ、ボリューム満点のおせちです。京都府知事より「現代の名工」を受賞した神田正幸氏が、「三世代で楽しめるおせち」をコンセプトに監修。一の重・二の重は和風、三の重・四の重は洋風になっており、黒豆や数の子などの基本おせち料理のほか、ローストビーフやオマール海老入りグラタンなどの洋食からスイーツまで、お子さまから大人まで大満足の品目が揃っています。5〜6人でお楽しみいただけるボリュームです。</p>
          </div>
        </div>
      </div>

      <div class="lottery-terms">
        <div class="u-terms u-terms__row mb3 mb2_sp">
          <div class="mb1">
            <h5 class="u-terms__ttl">詳細スペック</h5>
            <div class="u-terms__inner u-list__dl_table_long">
              <dl>
                <dt>セット内容</dt>
                <dd>
                  <ul class="u-list__ul_square">
                    <li><span>
                        <span class="u-font__bold u-ilblock">一の重（和風）</span><br>
                        <span>黒豆 55g、栗甘露煮 2個、紅白なます 40g、いくら醤油漬け 3g、合鴨スモーク 4枚、伊達巻 4枚、くず餅（紫芋） 1個、くず餅（抹茶） 1個、花形こんにゃく 1個、ボイルロブスター 1尾、たたきごぼう 40g、一口にしん昆布巻 3個、活煮アワビ 1個、ボイル昆布 30g、ばい貝旨煮 2個、いかのうに和え 30g、きのこ湯葉和え 40g、味付数の子 3切、にしん甘酢漬け 40g</span>
                      </span>
                    </li>
                    <li><span>
                        <span class="u-font__bold u-ilblock">二の重（和風）</span><br>
                        <span>かまぼこ（紅） 2枚、かまぼこ（白） 2枚、白花豆 25g、くるみ甘露煮 20g、きんとん 50g、渋皮栗甘露煮 2個、若鶏三色巻 4切、松前数の子 45g、有頭海老 7尾、てまり餅 1個、田作り 15g、葉付金柑 1個、釜上げわかめ 25g、かに爪肉 3個、ぶり照焼き 3切、椎茸旨煮 2個、きぬさや 2枚、筍旨煮 2個、えびと枝豆のしんじょ 1個、寿高野豆腐 1個、紅葉しんじょ 1個、人参旨煮 2個</span>
                      </span></li>
                    <li><span>
                        <span class="u-font__bold u-ilblock">三の重（洋風）</span><br>
                        <span>手羽元グリル焼き（レモン風味） 2個、イタリアンソーセージ 3枚、ティラミスチョコ 3個、メロンロールケーキ 3個、厚巻玉子ウインナー 2切、ドライトマトワイン煮 2個、肉団子 4個、生ハムマリネ 25g、スライスブラックオリーブ 2枚、ホエー豚角煮 3切、グリルチキンと野菜のトマトソース和え 35g、豆とブロッコリーのサラダ 40g、ミニッツチーズサーブ 2切、オマール海老入りグラタン 1個、杏子コンポート 1個、かに甲羅グラタン 1個、ブロッコリー 4個</span>
                      </span></li>
                    <li><span>
                        <span class="u-font__bold u-ilblock">四の重（洋風）</span><br>
                        <span>チキンロール 3切、野菜と果実のマリネ 40g、紫芋入りきんとん 50g、若桃コンポート 2個、りんごコンポート 2切、きのこマリネ 40g、スモークサーモン 3枚、スタフドオリーブ 1個、メープルくるみ 30g、珈琲煮豆 40g、ボロニアソーセージ 4枚、ほぐし鶏のゴマダレ和え 35g、かぼちゃサラダ 55g、ごまだんご 2個、黒糖ローストポーク 4切、ローストビーフ 4枚、コルニッションピクルス 1個、海老と野菜のセビーチェ 40g、チキングリーンビーフ 3切、さつまいも甘露煮 3枚、三元豚ロースパストラミ 4枚</span>
                      </span></li>
                  </ul>
                </dd>
              </dl>
              <dl>
                <dt class="mb1_sp">原材料に含まれる<br class="u-only__pc">
                  アレルギー物質</dt>
                <dd>
                  小麦、卵、乳、えび、かに、あわび、いか、いくら、オレンジ、牛肉、くるみ、鮭、鯖、大豆、鶏肉、豚肉、もも、りんご、ゼラチン、ごま、アーモンド </dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
      <div class=" mb3">
        <div class="smile-footer">
          <?php
          if (isset($hyakumangokuShortage) && $hyakumangokuShortage) { ?>
            <footer class="smile-footer">
              <div class="smile-footer__row">
                <h2 class="smile-footer__ttl">【京都現代の名工 神田正幸監修】「百万石」和洋与段重（冷凍）</h2>
                <div class="smile-footer__ex">
                  <p>必要スマイル</p>
                  <p><span class="smile-footer__num">28,500</span>スマイル</p>
                </div>
                <label class="smile-footer__btn u-btn_end center">お申込みは<br>終了しました</label>

              </div>
            </footer>
          <?php } else {
            $smile_itemname = "【京都現代の名工 神田正幸監修】「百万石」和洋与段重（冷凍）"; //商品名
            $smile_num = "28,500"; //必要スマイル数
            $smile_id_test = "247"; //テストFLP用リンクナンバー
            $smile_id_production = "247"; //本番FLP用リンクナンバー
            include($inc_path . "/lib/inc/page/_smile/smile-footer.php");
          }
          ?>
        </div>
      </div>
      <small class="u-small">※写真はイメージです。<br>
        ※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>
        ※解凍時間：冷蔵にて24時間<br>
        ※祝箸は付きません。
      </small>
      <small class="u-small u-color__red u-font__bold">
        <ul class="u-list__ul_maru">
          <li>【お申込みのご注意】スマイル交換申込み期限：2022年12月6日（火）23:59まで／商品お届け予定日：2022年12月29日（木）または30日（金）<br>
            ※日時指定不可
          </li>
          <li>先着50点限定の商品となります。</li>
          <li>島部を除く全国都道府県にお届けいたします。<br>
            ※47都道府県の主要な地域にお届け可能です。島部に関しては、お届けができない地域がございますので、詳細については「銀座三越おせち予約係」にお問い合わせください。<br>
            商品に関する問合せ：銀座三越おせち予約係　0120-070-354（受付時間：午前10時～午後5時）</li>
        </ul>
      </small>
    </section>
    <aside class="main__item">
      <h3 class="u-ttl__l">よくあるご質問</h3>
      <?php include($inc_path . "/lib/inc/page/_smile/smile-promotion.php") ?>
    </aside>

    <nav class="main__snav snav">
      <?php include($inc_path . "/lib/inc/page/_smile/u-smile-snav.php") ?>
    </nav>

  </article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
