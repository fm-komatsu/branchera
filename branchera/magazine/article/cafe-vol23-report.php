<?php
//base
include("../../function.php");
$content = get_id_data('25023');
$pageTtl = 'あなたの今を聞かせて！<br>〜リフォームした今、ハッピーですか？';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']) . '-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'マンションライフを快適にするための一案として選ばれる「リフォーム」。設備のアップグレードや、家族構成の変化へ対応するために思い切ってリフォームをされた方々から、施工前に「悩んだこと」と実施して「変わったこと」、さらには満足度などをお聞きしました。実際に経験されたからこそのストレートかつ貴重なご意見は、これからリフォームされる方にもきっと参考になるはずです！';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['title'];

//bodyClass
$body_class = "page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年10月14日（木）～10月20日（水）";
// 回答者数
$respondents = "計1,414名";
// 対象者：
$target = "長谷工IDをお持ちで、マンションにお住まいのリフォームした経験のある方";

$cafeReportNum = "23";


//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>
<main class="main">
  <article class="main__row ">
    <?php
    $panAry[] = array("/magazine/", "ブランシエラマガジン");
    $panAry[] = array("/magazine/index_imakura-cafe.php", "いま暮らCaf&eacute;");
    include($inc_path . "/lib/inc/pan.php");
    include($inc_path . "/lib/inc/page/_magazine/cafe-header.php");
    ?>
		<aside class="mt3 mb3">
			<?php //$CmGtmId = '1'; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php"); ?>
		</aside>
    <div class="main__wrapper cafe-report__wrapper">
      <section class="main__item mb8 mb4_sp">
        <h2 class="u-font-size__30 u-color__dark mb2">リフォームした今、ハッピーですか？</h2>
        <div class="u-assist_cafe_low u-only__pc u-font__palt">
          回答期間&emsp;&emsp;&emsp;：&emsp;<?php echo $period ?><br>
          回答者数&emsp;&emsp;&emsp;：&emsp;<?php echo $respondents ?><br>
          対象者&emsp;&emsp;&emsp;&emsp;：&emsp;<?php echo $target ?>

        </div>
        <div class="u-assist_cafe_low u-only__sp u-font__palt">
          回答期間：<?php echo $period ?><br>
          回答者数：<?php echo $respondents ?><br>
          対象者：<?php echo $target ?>
        </div>
        <div class="mb6 mb3_sp">
          <figure>
            <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v@2x.jpg" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
            <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/main-v-sp@2x.jpg" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
          </figure>
        </div>
        <div class="info">
          <h3 class="mb3">
            <figure>
              <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l@2x.png" alt="リフォームした今、ハッピーですか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
              <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/ttl__l-sp@2x.png" alt="リフォームした今、ハッピーですか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
            </figure>
          </h3>
          <p>マンションライフを快適にするための一案として選ばれる「リフォーム」。設備のアップグレードや、家族構成の変化へ対応するために思い切ってリフォームをされた方々から、施工前に「悩んだこと」と実施して「変わったこと」、さらには満足度などをお聞きしました。<br>実際に経験されたからこそのストレートかつ貴重なご意見は、これからリフォームされる方にもきっと参考になるはずです！</p>
        </div>
      </section>
      <section class="mb8 mb4_sp">
        <div>
          <h4 class="mb3 mb2_sp">
            <figure>
              <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl@2x.png" alt="リフォームした時の入居年数は？「10〜20年」が最多で、20年未満で実施された方がほとんど。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
              <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__ttl-sp@2x.png" alt="リフォームした時の入居年数は？「10〜20年」が最多で、20年未満で実施された方がほとんど。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
            </figure>
          </h4>
        </div>
        <div class="u-column">
          <div class="u-column__2">
            <div class="u-column__item mb3_sp">
              <p class="mb3 u-font__palt">リフォームした時の入居年数は「10年～20年」が31％と最多。「5年未満」の30％、「5年～10年未満」の16％と合わせると、多くの方が「20年未満」でリフォームを実施しているようです。「10年ひと昔」というように、やはり10年経つと汚れや設備の劣化が目立ってくるのでしょうか…。なお、次に伺った「きっかけ」から、3割を占める「5年未満」という回答は中古マンションの入居前リフォームが大半と推測できます。</p>
              <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img-sp@2x.png" alt="円グラフ｜部屋が変わると心地いいですよね〜　image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
            </div>
            <div class="u-column__item u-only__pc">
              <figure class="mb3">
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/info__img@2x.png" alt="円グラフ｜私はカフェで仮装しようかな  image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:292px" loading="lazy">
              </figure>
            </div>
          </div>
        </div>
      </section>
      <section>
        <h4 class="mb3 mb2_sp">
          <figure>
            <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl@2x.png" alt="リフォームのきっかけは「設備の劣化」と「家族構成の変化」が多数派。「定年」や「テレワーク対応」など生活の変化を挙げられている方も。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
            <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__ttl-sp@2x.png" alt="リフォームのきっかけは「設備の劣化」と「家族構成の変化」が多数派。「定年」や「テレワーク対応」など生活の変化を挙げられている方も。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
          </figure>
        </h4>
        <div class="u-column u-only__pc">
          <div class="u-column__2">
            <div class="u-column__item">
              <figure>
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01@2x.png" alt="ハロウィンは世界的に大人気です image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:341px" loading="lazy">
              </figure>
            </div>
            <div class="u-column__item">
              <p class="u-only__pc mb4">費用も手間もかかるリフォーム。とりかかるにはきっかけが必要ですね。多かったのは「子どもが独立したので子ども部屋を書斎に変更」や「親と同居するためバリアフリー化」など、家族構成の変化でした。さらに「吊戸棚の撤去や収納棚を新設」や「お風呂の湯沸かし設備を交換するついでに」など、設備をアップグレードするタイミングにリフォームされる方も。<br>なかには「定年退職を迎え、妻への感謝の気持ち」なんて素敵な理由もありました！</p>
            </div>
          </div>
        </div>
        <div class="u-only__sp mb4_sp">
          <p class="u-font__palt">費用も手間もかかるリフォーム。とりかかるにはきっかけが必要ですね。多かったのは「子どもが独立したので子ども部屋を書斎に変更」や「親と同居するためバリアフリー化」など、家族構成の変化でした。さらに「吊戸棚の撤去や収納棚を新設」や「お風呂の湯沸かし設備を交換するついでに」など、設備をアップグレードするタイミングにリフォームされる方も。<br>なかには「定年退職を迎え、妻への感謝の気持ち」なんて素敵な理由もありました！</p>
          <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec01__img01-sp@2x.png" alt="家の中でも気軽に楽しみたい！image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
        </div>
      </section>
      <section class="mb8 mb4_sp">
        <h4 class="mb3 mb2_sp">
          <figure>
            <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl@2x.png" alt="リフォームした場所」は浴室とキッチンが最多。洗面所やトイレを含めると過半数で水回りが人気。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
            <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__ttl-sp@2x.png" alt="リフォームした場所」は浴室とキッチンが最多。洗面所やトイレを含めると過半数で水回りが人気。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
          </figure>
        </h4>
        <div class="u-column">
          <div class="u-column__2">
            <div class="u-column__item u-only__pc">
              <figure>
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01@2x.png" alt="水回りは毎日使うからこだわりたい！image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:354px" loading="lazy">
              </figure>
            </div>
            <div class="u-column__item">
              <p class="mb5">リフォームした場所は「浴室」と「キッチン」が同率で合わせると3割強を占め、次いで洗面所と、やはり使用頻度が高い水回りが挙げられていました。毎日使うからこそ、汚れが気になったり、設備の古さが目についたりするようです。コメントでも「魔法瓶式浴槽にしてよかった」など、決め打ちで設備の刷新を希望されていた方もいらしたように、どんどん進化する水回りの設備は注目の高いもののようです。<br>
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec02__img01-sp@2x.png" alt="水回りは毎日使うからこだわりたい！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="mb8 mb4_sp">
        <h4 class="mb3 mb2_sp">
          <figure>
            <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl@2x.png" alt="一番悩んだことはダントツで費用。みなさん費用と希望のバランスに迷われているようです｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
            <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__ttl-sp@2x.png" alt="一番悩んだことはダントツで費用。みなさん費用と希望のバランスに迷われているようです｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
          </figure>
        </h4>
        <div class="u-column">
          <div class="u-column__2">
            <div class="u-column__item u-only__pc">
              <figure>
                <img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01@2x.png" alt="夢とお金の落とし所　難しいですね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:352px" loading="lazy">
              </figure>
              <figure>
                <img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02@2x.png" alt="上手に仕上げてほしいね！image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:356px" loading="lazy">
              </figure>
            </div>
            <div class="u-column__item u-only__pc">
              <p class="u-only__pc mb4">ついつい「あれもこれも」と追加したくなってしまうリフォーム。ですが「やりたいことを全部やると戸建てが買えるくらいの金額になった」「コスパが最終的な決め手」など、予算と「やりたいこと」のバランスをとるのに苦労されたようです。また、そもそもどこに頼むかという「業者の選定」に迷われた方も。「丁寧に仕事してくれるところを探した」や「適正価格なのか迷った」などの声がありました。迷われた際はマンションの管理人や長谷工リフォームにぜひご相談を。親身になって対応させていただきます！「早急に交換してもらえる業者！管理人さんに紹介してもらいました！良心的な価格！」と、うれしいお言葉もいただいています。<br>
                また、「広範囲にわたるリフォームだったので、居場所に困った」や「荷物や家具の移動」といった、実際にやってみないとわからない意外な困りごともありました。荷物なら、ひとまず外部のトランクルームに移動させるなどもひとつの手ですね。長谷工リフォームでは、リフォーム中の仮住まいのご用意もありますので、ご相談ください。</p>
            </div>
            <div class="u-column__item u-only__sp">
              <p class="mb5 mb4_sp">ついつい「あれもこれも」と追加したくなってしまうリフォーム。ですが「やりたいことを全部やると戸建てが買えるくらいの金額になった」「コスパが最終的な決め手」など、予算と「やりたいこと」のバランスをとるのに苦労されたようです。また、そもそもどこに頼むかという「業者の選定」に迷われた方も。「丁寧に仕事してくれるところを探した」や「適正価格なのか迷った」などの声がありました。迷われた際はマンションの管理人や長谷工リフォームにぜひご相談を。親身になって対応させていただきます！「早急に交換してもらえる業者！管理人さんに紹介してもらいました！良心的な価格！」と、うれしいお言葉もいただいています。<br>
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img01-sp@2x.png" alt="夢とお金の落とし所　難しいですね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
                また、「広範囲にわたるリフォームだったので、居場所に困った」や「荷物や家具の移動」といった、実際にやってみないとわからない意外な困りごともありました。荷物なら、ひとまず外部のトランクルームに移動させるなどもひとつの手ですね。長谷工リフォームでは、リフォーム中の仮住まいのご用意もありますので、ご相談ください。<br>
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec03__img02-sp@2x.png" alt="上手に仕上げてほしいね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="mb8 mb4_sp">
        <h4 class="mb3 mb2_sp">
          <figure>
            <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl@2x.png" alt="リフォームした後には設備や見た目だけでなく、暮らし方や家族のありようなど、目に見えないところまで変わった方も。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
            <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__ttl-sp@2x.png" alt="リフォームした後には設備や見た目だけでなく、暮らし方や家族のありようなど、目に見えないところまで変わった方も。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
          </figure>
        </h4>
        <div class="u-column">
          <div class="u-column__2">
            <div class="u-column__item u-only__pc">
              <figure>
                <img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01@2x.png" alt="新しいお風呂だと疲れも良くとれそう image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:353px" loading="lazy">
              </figure>
              <figure>
                <img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02@2x.png" alt="家族で楽しく使えると嬉しいですね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:353px" loading="lazy">
              </figure>
            </div>
            <div class="u-column__item u-only__pc">
              <p class="u-only__pc mb4 u-font__palt">では、様々な思いを経てリフォームした結果は？<br>「浴室は明るく、保温性が高くなったので、追い炊き機能を使わなくてもよくなった」や「毎日疲れて帰宅してもお風呂と洗面所がホテルみたいになったので、気分が上がる！」など、設備を新しくして暮らしやすさがアップした、見た目の美しさに気分が上がる、といった満足の声が多かったです。また「お風呂がきれいになって、日々の掃除やメンテナンスが格段に楽になった」というコメントも多数寄せられました。最近の設備は「掃除のしやすさ」に配慮したものが多く、きれいな状態を長持ちさせられる製品も増えた様子。<br>さらに「システムキッチンで、夫も一緒に料理をするようになりました」や「妻の笑顔が増えた」「キッチンが対面になって会話が弾む」など、家族の生活やコミュニケーションにも、うれしい変化を与えているようです。</p>
            </div>
            <div class="u-column__item u-only__sp">
              <p class="mb5 mb4_sp u-font__palt">では、様々な思いを経てリフォームした結果は？<br>「浴室は明るく、保温性が高くなったので、追い炊き機能を使わなくてもよくなった」や「毎日疲れて帰宅してもお風呂と洗面所がホテルみたいになったので、気分が上がる！」など、設備を新しくして暮らしやすさがアップした、見た目の美しさに気分が上がる、といった満足の声が多かったです。また「お風呂がきれいになって、日々の掃除やメンテナンスが格段に楽になった」というコメントも多数寄せられました。最近の設備は「掃除のしやすさ」に配慮したものが多く、きれいな状態を長持ちさせられる製品も増えた様子。<br>
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img01-sp@2x.png" alt="新しいお風呂だと疲れも良くとれそう image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
                さらに「システムキッチンで、夫も一緒に料理をするようになりました」や「妻の笑顔が増えた」「キッチンが対面になって会話が弾む」など、家族の生活やコミュニケーションにも、うれしい変化を与えているようです。
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec04__img02-sp@2x.png" alt="家族で楽しく使えると嬉しいですね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="mb8 mb4_sp">
        <h4 class="mb3 mb2_sp">
          <figure>
            <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__ttl@2x.png" alt="ずばり、リフォームの点数は？大満足と満足を合わせて9割とおおむね満足しているという結果に｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
            <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__ttl-sp@2x.png" alt="ずばり、リフォームの点数は？大満足と満足を合わせて9割とおおむね満足しているという結果に｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
          </figure>
        </h4>
        <div class="u-column">
          <div class="u-column__2">
            <div class="u-column__item u-only__pc">
              <figure>
                <img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img01@2x.png" alt="理想が叶うと嬉しいですね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:367px" loading="lazy">
              </figure>
              <figure>
                <img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img02@2x.png" alt="どんなリフォームしているかワクワクします！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:347px" loading="lazy">
              </figure>
            </div>
            <div class="u-column__item u-only__pc">
              <p class="u-only__pc mb4 u-font__palt mb2">では、点数にするとどのくらいでしょうか？「90点～100点」と「120点！」が約半数、「70～90点」が38％、合わせて約90％の方が満足されているようです。<br>コメントでも「主人はトイレに、私はお風呂にこだわり、大満足」や「家族それぞれがリフォーム後の生活により満足しているように思う」など、納得のいくリフォームをすることに成功されているようです。<br>また、約7割の方が「リフォームに関する追加のアンケートやヒアリング」にご協力いただけるとご回答いただいているので、今後改めて満足度の背景をじっくりとお聞きしたいと思います！</p>
              <p class="u-only__pc mb8">「長谷工リフォーム」のWEBサイトや、LINEの友だち登録をすると読める「R andマガジン」では、豊富な事例やノウハウをご紹介しています。大満足のリフォームを実現するために、ぜひご一読ください。</p>
              <a href="https://www.haseko.co.jp/hrf/reform/jirei/" target="_blank" data-ga-click="cafe23_1">
                <figure class="mb3">
                  <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn01@2x.png" alt="あらゆるタイプのリフォーム・リノベーションの事例は　長谷工リフォーム｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
                </figure>
              </a>
              <a href="https://www.haseko.co.jp/hrf/reform/special/R_and_Magazine/01/index.html" target="_blank" data-ga-click="cafe23_2">
                <figure class="mb3">
                  <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn02@2x.png" alt="テレワーク用リフォームをはじめ様々な事例は　R&マガジン｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
                </figure>
              </a>
              <a href="https://page.line.me/246fexaq?openQrModal=true" target="_blank" data-ga-click="cafe23_3">
                <figure class="mb3">
                  <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn03@2x.png" alt="テレワーク用リフォームをはじめ様々な事例は　R&マガジン｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:332px" loading="lazy">
                </figure>
              </a>
            </div>
            <div class="u-column__item u-only__sp">
              <p class="mb5 mb4_sp u-font__palt">では、点数にするとどのくらいでしょうか？「90点～100点」と「120点！」が約半数、「70～90点」が38％、合わせて約90％の方が満足されているようです。<br>コメントでも「主人はトイレに、私はお風呂にこだわり、大満足」や「家族それぞれがリフォーム後の生活により満足しているように思う」など、納得のいくリフォームをすることに成功されているようです。<br>また、約7割の方が「リフォームに関する追加のアンケートやヒアリング」にご協力いただけるとご回答いただいているので、今後改めて満足度の背景をじっくりとお聞きしたいと思います！<br>
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img01-sp@2x.png" alt="理想が叶うと嬉しいですね！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
                「長谷工リフォーム」のWEBサイトや、LINEの友だち登録をすると読める「R andマガジン」では、豊富な事例やノウハウをご紹介しています。大満足のリフォームを実現するために、ぜひご一読ください。
                <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__img02-sp@2x.png" alt="どんなリフォームしているかワクワクします！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
              </p>
              <a href="https://www.haseko.co.jp/hrf/reform/jirei/" target="_blank" data-ga-click="cafe23_1">
                <figure class="mb3">
                  <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn01-sp@2x.png" alt="あらゆるタイプのリフォーム・リノベーションの事例は　長谷工リフォーム｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
                </figure>
              </a>
              <a href="https://www.haseko.co.jp/hrf/reform/special/R_and_Magazine/01/index.html" target="_blank" data-ga-click="cafe23_2">
                <figure class="mb3">
                  <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn02-sp@2x.png" alt="テレワーク用リフォームをはじめ様々な事例は　R&マガジン｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
                </figure>
              </a>
              <a href="https://page.line.me/246fexaq?openQrModal=true" target="_blank" data-ga-click="cafe23_3">
                <figure class="mb3">
                  <img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol<?php echo $cafeReportNum; ?>/sec05__btn03-sp@2x.png" alt="テレワーク用リフォームをはじめ様々な事例は　R&マガジン｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mb3" loading="lazy">
                </figure>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="mb3">
        <figure class="mb3">
          <img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
          <img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
        </figure>
      </section>
    </div>
    <?php include ($inc_path."/lib/inc/page/_magazine/__back_num_cafe-report.php") ?>
  </article>
	<aside class="mt3 mb3">
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php");?>
	</aside>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>