<?php
//base
include ("../../function.php");
$content = get_id_data('9051');
$pageTtl = $content['title'];
$footerTtl = '9月の抽選賞品<br>【象印】STAN. IH炊飯ジャー<br>抽選で3名さまに当たります！';

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
?> <main class="main">
  <article class="main__row"> <?php
    $panAry[] = array("/smile/" ,"住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?> <?php
    $smile_flug = "lottery";// exchange or lottery or service or no_flp
    $smile_year = '20';
    $smile_month = '09';
    $smile_next ="2020年10月1日（木）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "178";//テストFLP用リンクナンバー
    $smile_id_production = "178";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?> <section class="lottery-banner"> <?php include ($inc_path."/lib/inc/page/_smile/__lottery-main-v.php"); ?> </section>
    <section class="main__wrapper">
      <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max">
          </figure>
          <figure class="lottery-figs__item">
            <img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max">
          </figure>
          <figure class="lottery-figs__item">
            <img data-src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03.png" data-retina="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max">
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">「豪熱沸とうIH」でお米のうまみを引き出し、ふっくら仕上げる</h4>
          <p class="lottery-point__ex u-font__palt">ポットや水筒でお馴染みの象印がプロデュースする、「STAN.（スタン）シリーズ」の炊飯ジャー。本商品の1番のポイントは、「豪熱沸とうIH」を採用していること！IHの高火力により、沸とう後も温度を下げることなく“豪熱”で炊き上げ、お米のうまみを引き出してふっくらした仕上がりに♪また、ふつう・やわらかめ・かためが選べる「白米炊き分け3コース」機能が搭載されているので、お好みに合わせて炊き加減を調整できます。<br>さらに、30時間美味しさを保つことができる「うるつや保温」機能を使えば、時間が経ってもふっくらしたご飯を楽しむことができますよ♪</p>
          <h4 class="lottery-point__ttl">「デザイン性」と「使いやすさ」を兼ね備えた炊飯ジャー</h4>
          <p class="lottery-point__ex u-font__palt">本商品のデザインを行なったのは、数々のデザインアワードで受賞歴のあるクリエイティブユニット・TENT。洗練されたシンプルなデザインは、「魅せる家電」としてどんなキッチンや食卓にもマッチします。<br>もちろん、デザイン性に加えて使いやすさも抜群！毎回のお手入れが必要なパーツは、内釜と内蓋の2点のみ。サッと拭き取るだけでお手入れできるように、表面のパネル、外釜、釜の周りのフレームは全てフラットな形状になっています。<br>インテリアのような美しさと、日々の生活に便利な使いやすさを兼ね備えたアイテムです。ぜひご応募ください！</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">上でご紹介した以外にも、多数の機能が搭載されているのもおすすめポイント。炊き込みご飯の後の臭いなどが気になるときに使える「クリーニング」機能や、保温中のご飯を加熱して食べごろの温度にできる「あったか再加熱」機能などが便利です。また、通常の炊飯に加えて、すしめし、おかゆ、雑穀米、玄米、赤ちゃんの離乳食など、多数のメニューを炊き上げることができます♪もうすぐ新米の季節。本商品なら、お米の美味しさを最大限引き出せますよ。ぜひ、抽選にチャレンジしてくださいね！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long">
          <h6>＜本体＞</h6>
          <dl>
            <dt>品番</dt>
            <dd>IH炊飯ジャー NW-SA10-BA（ブラック）</dd>
          </dl>
          <dl>
            <dt>炊飯量</dt>
            <dd>5.5合</dd>
          </dl>
          <dl>
            <dt>外形寸法</dt>
            <dd>約幅23.5×奥行29×高さ19.5cm（ふた開き時の高さ：約42.5cm）</dd>
          </dl>
          <dl>
            <dt>炊飯時消費電力</dt>
            <dd>1,115W</dd>
          </dl>
          <dl>
            <dt>1回あたりの炊飯時消費電力</dt>
            <dd>175Wh ※</dd>
          </dl>
          <dl>
            <dt>1時間あたりの保温時消費電力量</dt>
            <dd>17.0Wh ※</dd>
          </dl>
          <dl>
            <dt>本体重量</dt>
            <dd>約4.3kg</dd>
          </dl>
          <dl>
            <dt>電源コード</dt>
            <dd>1.0m</dd>
          </dl>
          <small class="u-small">※ 消費電力量は、炊飯量、ご使用のメニュー等によって異なります。</small><br>
          <small class="u-small">
            <ul class="u-list__ul_dot">
              <li class="mb0">医療用ペースメーカーをお使いの方は、IH炊飯ジャーをご使用の際には専門医とよくご相談のうえお使いください。</li>
              <li class="mb0">IH炊飯ジャーは、強い火力で炊飯するため、炊飯中に「ブーン」という冷却ファンが回る音がします。また、炊飯中や保温中に「ジー」という音がしますが、マイコンが火力を調整している音です。故障ではありませんので、安心してお使いください。</li>
            </ul>
          </small>
        </div>
      </div>
      <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、20<?php echo $smile_year ?>年<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月中旬頃お手元に届くよう、賞品を発送いたします。 </small>
      </div>
      <div class="mb4 mb2_sp u-font__palt"> <?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?> <?php if (!$ssoFlag == 1){ ?> <small class="u-small mt1">※応募には長谷工IDが必要です。まだお持ちでない方は、<a href="<?php echo $myentry_url ?>" target="_blank" rel="nofollow" class="u-icon">長谷工ID新規登録（無料）</a>をお願いいたします。<br>※新規登録で1,000スマイルをプレゼントしています。</small> <?php }; ?> </div>
      <div class="mt2">
        <P>■<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月の抽選賞品は、<?php echo $smile_next ?>公開予定です。</P>
      </div>
    </section>
    <aside class="main__item">
      <h3 class="u-ttl__l">よくあるご質問</h3> <?php include ($inc_path."/lib/inc/page/_smile/smile-promotion.php") ?> </aside>
    <nav class="main__snav snav"> <?php include ($inc_path."/lib/inc/page/_smile/u-smile-snav.php") ?> </nav>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
