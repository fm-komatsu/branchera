<?php
//base
include ("../../function.php");
$content = get_id_data('9053');
$pageTtl = $content['title'];
$footerTtl = '11月の抽選賞品<br>【T-fal】クックフォーミーエクスプレス<br>抽選で2名さまに当たります！';

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
    $smile_month = '11';
    $smile_next ="2020年12月1日（火）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "183";//テストFLP用リンクナンバー
    $smile_id_production = "183";//本番FLP用リンクナンバー
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
          <h4 class="lottery-point__ttl">“ほったらかし”で料理が完成！簡単&時短調理を叶えるマルチクッカー</h4>
          <p class="lottery-point__ex u-font__palt">炒めるときはフライパン、煮込むときは鍋…と、用途別に調理器具を変えていると、時間がかかるうえに洗い物が増えて大変ですよね。今回ご紹介する「クックフォーミーエクスプレス」は、そんなお悩みを一気に解決する優れもの！1台で圧力調理、蒸し、炒め、煮込みの4種の調理ができる、とっても便利なマルチクッカーです。しかも、圧力調理の力で、普通の鍋と比べ調理時間を最大1/3まで短縮可能！材料を入れてボタンを押すだけで、あっという間に料理が完成します♪</p>
          <h4 class="lottery-point__ttl">150ものレシピが内蔵！季節やイベントに合わせたメニューが楽しめる</h4>
          <p class="lottery-point__ex u-font__palt">本体には150種のレシピが内蔵されており、手順を自分で調べることなくさまざまなメニューを作ることができます。<br>内蔵レシピから食べたい料理を選ぶと、そのレシピの食材・分量・調理手順を教えてくれるので、初めて作る料理でも安心！クリスマスやお正月など、イベントに合わせたレシピも参照できるので、これからのシーズンに役立つこと間違いなしです。献立選びから調理まで、一気に時短が叶う本賞品！毎日のお料理が楽しくなりますよ♪ぜひこの機会にご応募ください！</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">ボタンを押したらほったらかしで調理完了！そんな夢のような家電である本賞品は、一度に2~6人分の料理が作れる大容量タイプ。家族の食事はもちろん、おもてなしやパーティーのときにも便利です。再加熱、保温機能も付いているので、完成してから時間が経っても、できたての状態を楽しめますよ♪そして内蔵されているレシピのほかにも、スマートフォンでダウンロードできる専用アプリを活用すれば、より多くのレシピを見ることができます。イベントごとが増えても、手間なくおうちごはんを楽しむことができる便利アイテム♪<br>クリスマスやお正月が控えるこれからの季節に、ぜひお役立てください！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table">

            <dl><dt>定格消費電力</dt><dd>	1200W</dd></dl>
            <dl><dt>本体サイズ</dt><dd>	幅38.0×長さ35.0×高さ32.5（cm）</dd></dl>
            <dl><dt>本体重量</dt><dd>	約6.5kg</dd></dl>
            <dl><dt>コードの長さ</dt><dd>	約1.5m</dd></dl>
            <dl><dt>圧力調理</dt><dd>一定：70kPa</dd></dl>
            <dl><dt>通常調理</dt><dd>強火（160℃）、中火（90℃）、弱火（75℃）</dd></dl>
            <dl><dt>再加熱</dt><dd>70℃</dd></dl>
            <dl><dt>保温</dt><dd>63℃</dd></dl>
            <dl><dt>内蔵レシピの数</dt><dd>150レシピ</dd></dl>
            <dl><dt>生産国</dt><dd>中国</dd></dl>
            <dl><dt>付属品</dt><dd>なべ、蒸しかご、蒸しかご台、計量カップ、クイックスタートガイド、取扱説明書</dd></dl>
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
