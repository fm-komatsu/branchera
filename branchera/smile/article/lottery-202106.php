<?php
//base
include ("../../function.php");
$content = get_id_data('9060');
$pageTtl = $content['title'];
$footerTtl = '6月の抽選賞品<br>【ソーダストリーム】ソースパワー スターターキットSSM1059 <br>抽選で3名さまに当たる！';

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
    $smile_year = '21';
    $smile_month = '06';
    $smile_next ="2021年7月1日（木）"; // 次回抽選賞品の公開日
    $smile_num = "100";//必要スマイル数
    $smile_id_test = "204";//テストFLP用リンクナンバー
    $smile_id_production = "204";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>
		<section class="lottery-banner"> <?php include ($inc_path."/lib/inc/page/_smile/__lottery-main-v.php"); ?></section>
    <section class="main__wrapper">
      <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image01@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item">
            <img src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image02@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max" loading="lazy">
          </figure>
          <figure class="lottery-figs__item">
            <img src="<?php echo($img_url)?>/smile/article/lottery-<?php echo $smile_year?><?php echo $smile_month?>_image03@2x.png" alt="<?php echo $pageTtl?>" class="u-img__max" loading="lazy">
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">ボタンひとつで簡単！強炭酸～微炭酸まで自動生成できる最上位モデル</h4>
          <p class="lottery-point__ex u-font__palt">「ソーダストリーム」は世界No.1の炭酸水ブランド！毎年約20億リットルの炭酸水を、世界中の家庭に提供しています。今回のプレゼント「ソースパワー スターターキット」は、ボタンひとつで簡単に炭酸水が作れるマシーンです。3つのボタンを選ぶだけで、強炭酸～微炭酸までお好みの強さの炭酸水を簡単に作ることができます！炭酸の量を2倍にしたい場合も、もう一度ボタンを押すだけ！お子さまにも簡単に操作いただけます♪</p>
          <h4 class="lottery-point__ttl">インテリアとしても◎有名デザイナーが手がけたラグジュアリーデザイン</h4>
          <p class="lottery-point__ex u-font__palt">デザインは、プラダの香水ボトルを手掛けた有名デザイナー、イヴ・べアールと共同開発。サイドのメタル素材が、ラグジュアリーにお部屋を彩ります。今回プレゼントするカラーはすっきりした印象のホワイト。シンプルなデザインなので、どんなお部屋にもマッチしますよ！炭酸がシュワシュワとする様子は見ていても楽しいですよね♪炭酸水だけでなく、インテリアとしても楽しめる本賞品が当たるこの機会をお見逃しなく！</p>
        </div>
      </div>
      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p class="smile-comment__ex">美容としても取り入れられている炭酸水。飲み物としてだけでなく、洗顔やお料理にも使えるので、どなたでも色々とお好みに合わせた使い方ができますよ♪夏の時期に炭酸水で洗顔すれば、すっきりした気分になること間違いなし！もちろん、オリジナルドリンクを作って楽しむのもおすすめです。夏にぴったりな「ソースパワー スターターキット」で、素敵な夏のおうち時間を過ごしてください♪たくさんのご応募お待ちしています！</p>
        </div>
      </div>
      <div class="lottery-terms u-terms">
        <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
          <div class="u-terms__inner u-list__dl_table_long2">
            <dl><dt>品番</dt><dd>SSM1059</dd></dl>
            <dl><dt>カラー</dt><dd>ホワイト</dd></dl>
            <dl><dt>品名</dt><dd>ソース パワー スターターキット</dd></dl>
            <dl><dt>材質</dt><dd>本体：プラスチック、アルミニウム<br>専用1Lヒューズボトル(キャップ付き)：ペット、メタル</dd></dl>
            <dl><dt>セット内容</dt><dd>ソーダメーカー、電源アダプター、ガスシリンダー60L用、専用1Lヒューズボトル(キャップ付き)<br>取扱説明書、ユーザーライセンス、ソーダメーカー保証書</dd></dl>
            <dl><dt>サイズ</dt><dd>縦42.3×横12.4×奥行き23.3cm</dd></dl>
            <dl><dt>重量</dt><dd>2500g</dd></dl>
          </div>
        </div>
        <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、賞品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※抽選結果は賞品の発送をもって代えさせていただきます。ご当選者さまには、20<?php if($smile_month == 12) { echo ($smile_year  + 1); } else { echo ($smile_year); } ?>年<?php if($smile_month == 12) { echo (1); } else { echo ($smile_month  + 1); } ?>月中旬頃お手元に届くよう、賞品を発送いたします。 </small>
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