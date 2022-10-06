<?php
//base
include("../../function.php");
$content = get_id_data('12005');
$pageTtl = $content['title'];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '片付けの専門家が監修！片付けられない家族を救うためのマンガコラム。第5話は収集のつかなくなった洋服を効率よく整理しながら片付ける方法をご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

//bodyClass
$body_class = "page-article";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>

<main class="main comic">
  <article class="main__row">
    <?php
    $panAry[] = array("/magazine/", "ブランシエラマガジン");
    $panAry[] = array("/magazine/index_comic01.php", "何でか、部屋が片付かない。");
    include($inc_path . "/lib/inc/pan.php");
    ?>
    <?php
    include($inc_path . "/lib/inc/page/_magazine/__comicex-header.php");
    ?>

    <section class="comic main__wrapper">
      <div class="comic-header__ex">
        <!-- <div class="comic-header__tags u-tags">
        <h5 class="u-tags__ttl">キーワード</h5>
        <div class="u-tags__row">
          <?php echo show_content_tags($content); ?>
        </div>
      </div>
    -->
        <h2 class="comic-header__ttl"><?php echo $pageTtl; ?></h2>
      </div>

      <div class="intro">
        <p>片付け上手なお母さんに、片付けの方法を伝授してもらっている私、サクラ。だんだん片付けの大切さもわかってきたんだけど、いよいよ一番苦手な洋服との戦いが始まったわ！この洋服の山…何とかなるのかなぁ。</p>
      </div>

      <p style="text-align: right" class="mb4">&raquo; 前回はこちら<a href="comic-tidy04.php">「第4話　キッチン片付け大革命」</a>
      </p>

      <div class="talk">
        <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
        </figure>
        <p>あーーなんで人は服を着るのだろう…</p>
      </div>

      <div class="talk">
        <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
        </figure>
        <p>えぇ！？サクラ、急にどうしたの？</p>
      </div>

      <div class="talk">
        <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
        </figure>
        <p>いや…だってさ、見てよ、この服の山<br>もう片付ける気がまったくしないよ</p>
      </div>

      <div class="talk">
        <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
        </figure>
        <p>ホントに、サクラったら<br>せっかくのお休みでショウくんもゆっくりしているのに</p>
      </div>

      <div class="talk">
        <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
        </figure>
        <p>世界のどこかにいる超ズボラな発明家さん！<br>早く全自動洗濯・お片付けロボットを開発してくれー</p>
      </div>

      <div class="talk">
        <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
        </figure>
        <p>してくれーー！</p>
      </div>

      <div class="center mb3">
        <img data-src="../../lib/img/magazine/comic01/vol05/img01.jpg" data-retina="../../lib/img/magazine/comic01/vol05/img01@2x.jpg" alt="" style="max-width: 740px;" class="u-img__max">
      </div>

      <div class="talk">
        <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
        </figure>
        <p>そんな発明を待ってる間に洗濯物で埋もれちゃうわっ！<br>さぁ、今日はサクラが一番苦手な<br>服を徹底的に片付けるわよ！</p>
      </div>
    </section>
    <section class="comic-pink kaasan">
      <div class="wrapper">
        <p class="teach">
          <img data-src="../../lib/img/magazine/comic01/img02.png" data-retina="../../lib/img/magazine/comic01/img02@2x.png" alt="" style="" class="u-img__max">
        </p>
        <h3>クローゼットとタンスを上手に使いわけるのよ！</h3>
        <p>さっそく、洋服がいつもどうして片付けられないのか、ちょっと振り返ってみましょうか。</p>
        <p>

          <strong>■　洋服が多くて、クローゼットやタンスがパンパン<br>
            ■　洋服を探すことが多い<br>
            ■　たくさんあるのに、何を着ればよいのかわからない</strong>
        </p>
        <p>
          どう？もしかしてサクラは全部当てはまっているんじゃないかしら。<br> 洋服の片付け方も、片付けの基本的な考え方は変わらないわ。
        </p>
        <p>
          ・本当に、着る洋服なのか？ <br> ・まだ、着られる洋服か？サイズは合う？今の自分に似合う？
          <br> ・適正量になっている？
        </p>
        <p>
          本当に必要かどうかを判断しながら、まずは整理していくんだったわね。<br> 一度にすべての洋服を判断しようとすると、収集がつかなくなってくるから
          <br> 洋服を次のようなグループで分類してみるところから始めてみて。
        </p>

        <table class="cate">
          <tr>
            <td>・人別　</td>
            <td>：パパ・ママ・子ども</td>
          </tr>
          <tr>
            <td>・アイテム　</td>
            <td>：トップス・ボトムス・下着</td>
          </tr>
          <tr>
            <td>・季節　</td>
            <td>：春秋物・夏物・冬物</td>
          </tr>
        </table>

        <p>そして、さらに「細分類単位」で整理すると、判断しやすくなるわ。<br> 例えば、
          <strong class="red">サクラの洋服 ＞ トップス ＞ 長袖</strong>　という風に分けてから、<br> 必要かどうかを判断してみて。
        </p>
        <p>

          それでも、判断に迷うこともあるわよね。<br> そんな時には「着まわせるか？」「他のアイテムと合っているか？」という視点で考えて
          <br>
          <strong class="red">少なくとも手持ちの洋服で2パターンくらいの<br class="u-only__pc">
            組み合わせができるものを残そう</strong>って考えると判断しやすいと思うわ。
        </p>
        <p>

          サクラのような子育て中の場合、<br class="u-only__pc">定期的なクリーニングなどのメンテナンスが必要な洋服について、
          <br class="u-only__pc"> その管理がどれくらいできるか？を考えるのもいいかもしれないわね。
          <br> 実際に、クリーニングが必要な洋服を
          <br class="u-only__pc"> 普段着にするのはちょっと難しいかもしれないものね。
        </p>

        <h3>不要になった洋服をまとめたら、かしこく手放す！</h3>

        <p>不要な洋服を分類できたら、手放す方法を考えていきましょう。<br>考え方は４ステップよ！</p>

        <div class="numArea">
          <ul>
            <li>捨てる　人に譲れない状態のモノ</li>
            <li>譲る　　親戚や友人のほか、団体への寄付など</li>
            <li>売る　　リサイクルショップやオークションなど</li>
            <li>捨てる　どうしても引き取り先がない場合</li>
          </ul>
        </div>

        <p>１・4のようなどうしても捨てる必要があるものは、<br class="u-only__pc">自治体のルールに沿って正しく処分しましょう。<br><br>
          洋服は燃えるごみとして処分するのが普通だけど、<br class="u-only__pc">モノによっては、ナイロンやポリエステルといった、<strong class="red">化学繊維が含まれている</strong>場合があるの。<br>そういうときは、自治体によって処分方法が異なるから、<br class="u-only__pc"><strong class="red">住んでいる地域のホームページ</strong>で確認してみて。</p>

        <p>洋服についているボタンやチャックなんかも<br class="u-only__pc">自治体によっては、裁断して分けるように指示している場合もあるわ。<br><br>それから、洋服はやっぱりかさばるものよね。</p>

        <p>洋服は、状態がよければ捨てずに「３. 売る」ということもできるわね。<br>例えば<strong class="red">古着屋さんやリサイクルショップ</strong>に持って行ってもいいかも。<br>自治体によっては、処分にお金がかかるけれど<br class="u-only__pc">売ることで逆にお小遣いになるので、ラッキー♪なんてこともあるわ。</p>

        <p>お店によっては、洋服の重さで買い取ってくれるところもあるから<br class="u-only__pc">大量に洋服を処分するときは要チェックよ。</p>

        <p>お得に洋服を処分して、もっとお小遣いを増やしたい！という人は<br class="u-only__pc"><strong class="red">ネットオークションやフリーマーケットアプリ</strong>を利用するのも方法の一つね。</p>

        <p>商品となる洋服の写真撮影や、梱包、発送などの手間が必要になるけど<br class="u-only__pc">その分、古着屋やリサイクルショップよりも、高く買い取ってくれることが多いの。<br>時間や手間を惜しまないようであれば、これらを利用しても良いかもしれないわね。</p>

        <h4 class="u-ttl__s">それでもやっぱり捨てられない！思い出の洋服</h4>
        <p>そんなこと言われても、やっぱりどうしても捨てられない洋服ってあるのよね。<br>誰かからお祝いやプレゼントでもらった洋服や、子どもが昔着ていた思い出の洋服。<br>そういうときは、一度期限を決めて保管するのがおすすめ。</p>
        <ul class="u-list__ul_dot">
          <li>1年経っても1度も着ることがなかったら捨てる</li>
          <li>思い出として残しておきたい洋服の枚数を決めておく</li>
          <li>写真に撮って思い出を保管する、思い出の洋服をリメイクする</li>
        </ul>

        <p>1つの工夫をしてあげることで、捨てづらい洋服も簡単に量を減らすことができるのよ。</p>


        <h3>吊るす？たたむ？洋服に合わせて収納方法を変えてみて！</h3>

        <p>さぁ、必要な洋服を分類できたら、次は収納をしていくわよ。<br> 洋服の収納は、
          <strong class="red">日常の使いやすさと、衣替えがラクな方法</strong>を取り入れることがポイントなの。
        </p>
        <p>
          サクラは、とにかくたたむのが面倒なのよね。<br> まぁ、分からなくもないわ。
          <br> そういう人には<strong class="red">クローゼットに吊るす方法</strong>がオススメ。
          <br> たたまなくていいだけでなく、一目で洋服を把握できるので、探しやすいの。
        </p>
        <p>
          とはいえ、全部の洋服を吊るすわけにはいかないから<br> 吊るすモノ・たたむモノはこのように考えてみては？
        </p>
        <p>
          <strong>■クローゼットなど、ハンガーに吊るすモノ</strong>
        <ul class="u-list__ul_dot">
          <li>たためない洋服</li>
          <li>スーツ、冠婚葬祭服、コート類</li>
          <li>シーズン中の使用頻度の高い洋服　など</li>
        </ul>
        </p>
        <p>
          <strong>■タンスなどに、たたんで収納するモノ</strong>
        <ul class="u-list__ul_dot">
          <li>たたんでもしわになりにくい洋服</li>
          <li>部屋着、スポーツ用の洋服　など</li>
        </ul>
        </p>
        <p>
          この時、衣替えのことも考えてみて。<br>「吊るす」「たたむ」の方法は、オンシーズンもオフシーズンも、収納方法を変えないようにしておくの。
        </p>
        <p>
          収納方法を統一しておくと<br class="u-only__pc">衣替えのたびに、「たたむ⇔ハンガーにかける」という作業がいらないのでラクなのよ。
        </p>
        <p>

          たたむモノは、<strong class="red">ケースなどに入れて収納しておく</strong>とケースごと衣替えできちゃうのよ。<br>たたむときのコツは、ケースの大きさに合わせて洋服を折りたたむことを意識してね。
        </p>
        <p>
          クローゼットに吊るすモノのコツは、<strong class="red">ハンガーを同じものにしちゃうこと</strong>。<br>違う種類のハンガーは、重なって入り込んでしまうので、洋服が隠れてしまうのよ。<br>種類はなんでもいいから形を統一し、高さを揃えて探しやすくしてみて！
        </p>

        洋服のたたみ方は<a href="<?php echo $base_url ?>/magazine/article/comic-tidy06.php">「第6話 洋服のたたみ方のコツはラクラクシカク！？」</a>でもご紹介しています。

      </div>
    </section>

    <section class="main__wrapper">
      <div class="wrapper narrow">
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
          </figure>
          <p>いざ、分類してみると僕の必要な服って<br>結構少なくていいのかも！</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
          </figure>
          <p>そうそう！その調子よ！</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>どぉ～お？<br>パパ、だんだん家の中が片付いていくでしょう～？</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sho02@2x.png">
          </figure>
          <p>…い、いや。教えてくれてるのお義母さんだし。<br>むしろ、お義母さんはこんなに片付け上手なのになんでサクラは…</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
          </figure>
          <p>あぁーーーー！！<br>それ以上は禁句よ！わかってるんだってば！</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
          </figure>
          <p>ママ、がんばってぇ～</p>
        </div>

        <div class="talk mb6">
          <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
          </figure>
          <p>うん、ママがんばるよぉ～</p>
        </div>


        <div class="intro mb6">
          <p>今回は、一番苦手な洋服の片付けだったんだけど…<br> 自分の洋服を見直してみると、1年以上着ていないモノがいっぱいあって、ビックリしちゃった。クローゼットとタンスはかなり片付いてきたわ！
          </p>

          <p>でも…普段の生活になると、どうも干した後の洗濯物がそのままになってしまう…<br> やっぱり洋服苦手だー。大体、たたんでも、なんかグチャってなっちゃうんだよなー。
            <br> また、お母さんに聞いてみようかな。
          </p>
        </div>

      </div>
      <!-- //wrapper -->
      <div class="mb6">
        <div>
          <a href="<?php echo $base_url ?>/magazine/article/sumai-sos-vol09.php" data-ga-click="pr_<?php echo $filename ?>_pc" class="u-only__pc">
            <img src="<?php echo $img_url ?>/magazine/comic01/comic-tidy05_pc.jpg" alt="" class="u-img__max u-only__pc">
          </a>
          <a href="<?php echo $base_url ?>/magazine/article/sumai-sos-vol09.php" data-ga-click="pr_<?php echo $filename ?>_sp" class="u-only__sp">
            <img src="<?php echo $img_url ?>/magazine/comic01/comic-tidy05_sp.jpg" alt="" class="u-img__max u-only__sp">
          </a>
        </div>
      </div>


      <div class="wrapper wide">

        <div class="supervision">
          <figure><img src="../../lib/img/magazine/comic01/vol01/img03@2x.png">
          </figure>
          <div>
            <p class="tttl">監修　今井 知加</p>
            <p>資格：薬剤師・整理収納アドバイザー2級認定講師・企業内整理収納マネージャー　など<br>著書：「そうじ嫌いでも部屋がずっとキレイな収納のきほん」（KADOKAWA）<br>効率よく家事をするための「片付け力」を身に着ける方法を、スクールやメディアを通して発信。苦手なものをラクに終わらせて、自分の時間や家族との時間を充実させる方法をご案内。</p>
          </div>
        </div>

        <small class="u-small mb6">※当サイトの記事の内容に関しましては、細心の注意を払っておりますが、情報の正確性、完全性、合法性等を保証するものではありません。予めご了承ください。</small>
      </div>
      <?php include($inc_path . "/lib/inc/page/_magazine/__back_num.php") ?>
    </section>

  </article>
  <aside class="mt3 mb3">
    <a href="<?php echo $base_url ?>/magazine/article/cafe-vol18-report.php" data-ga-click="<?php echo $filename ?>_imakuracafe_220224_<?php $CmGtmId = "2";
                                                                                                                                        echo $CmGtmId ?>">
      <img src="<?php echo $img_url; ?>/magazine/comic01/imakura_bnr_ex02.jpg" alt="あなたの“今”を聞かせて！いま暮らCafé クローゼットの整理収納、上手にできていますか？バナー" class="u-img__max u-only__pc center" loading="lazy" style="max-width: 740px;">
      <img src="<?php echo $img_url; ?>/magazine/comic01/imakura_bnr_ex02-sp.jpg" alt="あなたの“今”を聞かせて！いま暮らCafé クローゼットの整理収納、上手にできていますか？バナー" class="u-img__max u-only__sp center" loading="lazy" style="max-width: 317px;">
    </a>
  </aside>
</main>
<div class="mt8 mt3_sp mb2_sp">
  <mitsuketa-banner point-id="MitMagComicTidy05D20220901" img-url="<?php echo $img_url; ?>" login-url="<?php echo $login_url; ?>" :login-status="<?php echo $ssoFlag; ?>"></mitsuketa-banner>
</div>
<?php
$toindex_url = "/magazine/index_comic01.php";
include($inc_path . "/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
