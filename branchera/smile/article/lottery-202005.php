<?php
//base
include ("../../function.php");
$content = get_id_data('9047');
$pageTtl = $content['title'];
$footerTtl = '5月の抽選賞品<br>【パナソニック】ヘアドライヤーナノケア ピンクゴールド<br>抽選で3名さまに当たります！';

//meta
$metaTtl = strip_tags($pageTtl).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = strip_tags($pageTtl).'が当たる、ブランシエラクラブの抽選ページです。抽選賞品は'.$content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article lottery";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/smile/" ,"住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?>
    <?php
    $smile_flug = "lottery";// exchange or lottery or service or no_flp
    $smile_year = '20';
    $smile_month = '05';
    $smile_next ="2020年6月1日（月）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "161";//テストFLP用リンクナンバー
    $smile_id_production = "161";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>
    <section class="lottery-banner">
      <?php include ($inc_path."/lib/inc/page/_smile/__lottery-main-v.php"); ?>
    </section>
    <section class="main__wrapper">
      <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item_rev">
            <img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01@2x.png"
             alt="<?php echo $pageTtl?>" class="u-img__max">
          </figure>
          <figure class="lottery-figs__item_rev">
            <img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02@2x.png"
             alt="<?php echo $pageTtl?>" class="u-img__max">
          </figure>
          <figure class="lottery-figs__item_rev">
            <img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03@2x.png"
             alt="<?php echo $pageTtl?>" class="u-img__max">
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">水分発生量は従来の18倍！高浸透「ナノイー」で髪の内側まで潤う</h4>
          <p class="lottery-point__ex">「ナノイー」は、空気中の水に高電圧を加えることで生成される、ナノサイズの微粒子イオンです。本商品でブローすると、高浸透「ナノイー」がキューティクルのわずかな隙間に入り込み、髪の内部にまで水分を与えます。<br>なんと、<strong>高浸透「ナノイー」の水分発生量は、従来の「ナノイー」シリーズの18倍！</strong>たっぷりの水分で、髪の毛をしっとり、ツヤツヤな仕上がりに。さらに、枝毛や紫外線による髪への影響を抑え、なめらかな髪に導きます。</p>
          <h4 class="lottery-point__ttl">お肌のケアもできる！5つのモードで、地肌や毛先、お肌を集中ケア</h4>
          <p class="lottery-point__ex">本商品は、使用する目的やシーンに合わせて、<strong>5つのモード</strong>に切り替え可能。毛先を美しく仕上げる「毛先集中ケアモード」、髪の毛の癖を伸ばしてツヤを出す「温冷リズムモード」、室温に合わせて風温を調整する「インテリジェント温風モード」、地肌に優しい60℃の風で乾かす「スカルプモード」に加えて、高浸透「ナノイー」とミネラルマイナスイオンを顔に当ててお肌のケアをする、「スキンモード」も搭載しています！<br><strong>ドライヤーひとつで地肌から毛先、お肌までトータルケアできる優れもの♪</strong>ぜひ日々のケアに取り入れてくださいね。</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">高浸透「ナノイー」やミネラルマイナスイオンで美しい髪に導くと共に、多彩なモードで目的に合わせたケアができる本商品。しかし、メリットはそれだけではありません！「髪の毛を素早く乾かせる」という、生活に役立つ大きな特徴があります。専用の速乾ノズルで、強弱差のある風を起こして毛束をほぐすので、短時間でしっかり乾燥。疲れて帰ってきた夜や、時間のない朝もササッとブローが完了です！さらに、毛束をほぐしながら乾かすので、髪の毛が絡みにくく、美しく仕上がります。<br>美容にも時短にも効果的な本商品。母の日のプレゼントとしても喜ばれそうですね♪ぜひ、この機会にご応募ください！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table">
            <dl>
              <dt>カラー／品番</dt>
              <dd>ピンクゴールド EH-NA0B-PN</dd>
            </dl>
            <dl>
              <dt>セット内容</dt>
              <dd>本体、セットノズル</dd>
            </dl>
            <dl>
              <dt>消費電力</dt>
              <dd>1,200W</dd>
            </dl>
            <dl>
              <dt>電源</dt>
              <dd>AC100V 50-60Hz</dd>
            </dl>
            <dl>
              <dt>電源方式</dt>
              <dd>交流式 </dd>
            </dl>
            <dl>
              <dt>温風温度</dt>
              <dd>ホット時：125℃（ドライ・室温30℃の時） スカルプモード時：60℃（室温30℃の時） </dd>
            </dl>
            <dl>
              <dt>風量</dt>
              <dd>1.3㎥/分（ターボ時）</dd>
            </dl>
            <dl>
              <dt>電源コード長さ</dt>
              <dd>約1.7m</dd>
            </dl>
            <dl>
              <dt>本体寸法</dt>
              <dd>高さ22.8×幅21.4×奥行9.2cm</dd>
            </dl>
            <dl>
              <dt>質量</dt>
              <dd>約575g（セットノズル含まず）</dd>
            </dl>
            <dl>
              <dt>機能</dt>
              <dd>高浸透｢ナノイー｣ 、ダブルミネラルマイナスイオン、静電気抑制、｢ナノイー｣イオン
              チャージPLUS、UVケア、速乾ノズル（本体内蔵） 、セットノズル</dd>
            </dl>
            <dl>
              <dt>搭載モード</dt>
              <dd>温冷リズムモード、インテリジェント温風モード、スカルプ(地肌)モード、スキンモード、毛先集中ケアモード</dd>
            </dl>
            <dl>
              <dt>生産国</dt>
              <dd>タイ</dd>
            </dl>
            <dl>
              <dt>パッケージ寸法</dt>
              <dd>高さ27.5×幅14.8×奥行14.8cm</dd>
            </dl>
            <dl>
              <dt>POSコード</dt>
              <dd>RP 4549980238721 PN 4549980238738</dd>
            </dl>
            <div class="mt3 u-font__mid">
              <h6 class="u-font__normal">●安全に関するご注意</h6>
              <p>ご使用の際は、定格15 A以上のコンセントを単独でご使用ください（消費電力1000 W以上の為）⇒単独で使用しないと火災や感電の原因となります。</p>
            </div>
          </div>
        </div>
        <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、20<?php echo $smile_year ?>年<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月中旬頃お手元に届くよう、賞品を発送いたします。
        </small>
      </div>
      <div class="mb4 mb2_sp u-font__palt">
        <?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>
        <?php if (!$ssoFlag == 1){ ?>
        <small class="u-small mt1">※応募には長谷工IDが必要です。まだお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow"
          class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。<br>※新規登録で1,000スマイルをプレゼントしています。</small>
        <?php }; ?>
      </div>
      <div class="mt2">
        <P>■<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月の抽選賞品は、<?php echo $smile_next ?>公開予定です。</P>
      </div>
    </section>
    <aside class="main__item">
      <h3 class="u-ttl__l">よくあるご質問</h3>
      <?php include ($inc_path."/lib/inc/page/_smile/smile-promotion.php") ?>
    </aside>
    <nav class="main__snav snav">
      <?php include ($inc_path."/lib/inc/page/_smile/u-smile-snav.php") ?>
    </nav>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
