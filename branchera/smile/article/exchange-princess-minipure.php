<?php
//base
include ("../../function.php");
$content = get_id_data('10055');
$pageTtl = $content['title'];

//meta
$metaTtl = 'スマイルで交換できる「'.$pageTtl.'」-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");

// 欠品フラグ
$itemShortage = 0;
?>

<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/smile/" ,"住まいレージ");
    include ($inc_path."/lib/inc/pan.php");
    ?>
    <?php
    $smile_flug = "exchange";// exchange or lottery or service or no_flp
    $smile_num = "20,000";//必要スマイル数
    $smile_id_test = "228";//テストFLP用リンクナンバー
    $smile_id_production = "228";//本番FLP用リンクナンバー
    include ($inc_path."/lib/inc/page/_smile/smile-header.php");
    ?>

    <section class="main__wrapper">
    <div class="lottery-figs">
        <div class="lottery-figs__row">
          <figure class="lottery-figs__item">
            <img
              src="<?php echo($img_url)?>/smile/article/exchange-minipure-img1@2x.png"
              alt="<?php echo $pageTtl ?> image"
              style="max-width:350px;"
              class="u-img__max"
              loading ="lazy"
            >
          </figure>
          <figure class="lottery-figs__item">
            <img
              src="<?php echo($img_url)?>/smile/article/exchange-minipure-img2@2x.png"
              alt="【PRINCESS】Table Grill Mini Pureーimage"
              style="max-width:350px;"
              class="u-img__max"
              loading ="lazy"
            >
          </figure>
          <figure class="lottery-figs__item">
            <img
              src="<?php echo($img_url)?>/smile/article/exchange-minipure-img3@2x.png"
              alt="【PRINCESS】Table Grill Mini Pureimage"
              style="max-width:350px;"
              class="u-img__max"
              loading ="lazy"
            >
          </figure>
        </div>
      </div>
      <div class="lottery-point">
        <div class="lottery-point__row">
          <h4 class="lottery-point__ttl">純白のプレートと竹製の台座がおしゃれなホットプレート</h4>
          <p class="mb3 mb2_sp">Table Grill Mini Pureは、1994年にオランダで設立された家電製品メーカー「PRINCESS」のホットプレートです。特長は、真っ白なグリルプレートと竹製の台座を組み合わせたおしゃれなデザイン。サイズもほどよくコンパクトなので、少人数でもパーティー気分で調理を楽しめます！</p>
          <h4 class="lottery-point__ttl">遠赤外線でじっくりムラなく加熱&amp;ノンオイル調理もOK！</h4>
          <p>Table Grill Mini Pureは、遠赤外線効果で食材の奥までじっくり火を通せます。プレートには、熱伝導性を高める「セラミック・ノンスティック加工」を施しているので、均一でムラのない焼き上がりに。さらに、オイルをひかないノンオイル調理も可能！油やカロリーが気になる方にも安心です。</p>
        </div>
      </div>

      <div class="smile-comment u-assist">
        <div class="smile-comment__row">
          <p>これまでのホットプレートのイメージを覆すような、洗練されたデザインが魅力のTable Grill Mini Pure。ヘルシーなノンオイル調理が可能ですが、油分が少なく焦げ付きやすい食材にはオイルを使うのがおすすめです。セラミックコーティングが長持ちし、使用後のお手入れもラクになりますよ。</p>
        </div>
      </div>

   			<div class="lottery-terms u-terms">
          <div class="u-terms__row mb1">
          <h5 class="u-terms__ttl">詳細スペック</h5>
            <div class="u-terms__inner u-list__dl_table_long">
              <dl>
                <dt>型番</dt>
                <dd>103035</dd>
              </dl>
              <dl>
                <dt>サイズ(mm)</dt>
                <dd>グリルプレート：W394×D256×H45、台座：W450×D220×H75 </p>
              </dl>
              <dl>
                <dt>全体重量</dt>
                <dd>約2.4kg</dd>
              </dl>
              <dl>
                <dt>コードの長さ</dt>
                <dd>約2m</dd>
              </dl>
              <dl>
                <dt>材質</dt>
                <dd>グリルプレート：アルミダイキャスト・セラミックコーティング、台座：竹</dd>
              </dl>
              <dl>
                <dt>カラー</dt>
                <dd>グリルプレート：ホワイト、台座：キャメル</dd>
              </dl>
              <dl>
                <dt>消費電力</dt>
                <dd>1,000W</dd>
              </dl>
              <dl>
                <dt>温度調節の範囲</dt>
                <dd>〜250℃</dd>
              </dl>
              <dl>
                <dt>セット内容</dt>
                <dd>プレート1枚、台座1台、温度調節プラグ1個、オイルトレー1枚、スパチュラ4本、取扱説明書</dd>
              </dl>
              <small class="u-small">※本製品は日本国内専用です。海外で使用しないでください。本製品は家庭用です。業務用で使用しないでください。</small>
            </div>
          </div>
        </div>
        <small class="u-small">※写真はイメージです。<br>※メーカー等の都合によって、商品の色・デザイン・仕様などを予告なく変更する場合がございます。<br>※お届けまで1ヵ月ほどお時間を要する場合がございます。</small>
      <?php include ($inc_path."/lib/inc/page/_smile/smile-footer.php"); ?>

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
