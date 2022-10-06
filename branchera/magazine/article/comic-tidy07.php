<?php
//base
include("../../function.php");
$content = get_id_data('12007');
$pageTtl = $content['title'];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '片付けの専門家が監修！片付けられない家族を救うためのマンガコラム。第7話はついつい増えてしまうストック品の管理と収納方法をご紹介します。';
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
    include($inc_path . "/lib/inc/page/_magazine/__comic-header.php");
    ?>



    <div class="intro">
      <p>せっかくマンションを購入したのに、片付けが苦手で散らかり放題だった我が家。片付け上手のお母さんに頼んで、だいぶ部屋が片付けられたんだ！私だってお母さんの娘だもの、やれば何とかなるんだわっ。このままキレイに片付いたお家を目指すぞー！</p>
    </div>

    <p style="text-align: right" class="mb4">&raquo; 前回はこちら<a href="comic-tidy06.php">「第6話　洋服のたたみ方のコツはラクラクシカク！？」</a>
    </p>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
      </figure>
      <p>ただいまー！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>はぁ～疲れた～<br>お母さん、みぃちゃんとお留守番ありがとうね</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>おかえりー♪</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>うわっ！何？その荷物…<br>どんだけ買ってきたの！？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
      </figure>
      <p>駅の向こう側のドラッグストアが<br>閉店セールやってたんですよ！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>閉店セールって言ったって<br>なにもシャンプーの詰め替え4つもいらないでしょう？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>いいじゃん！<br>だって安いんだもん！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>片付け苦手なクセによく言うわ…<br>柔軟剤も3つなんて、絶対多すぎ！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>えぇ！？買い物上手でしょー？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
      </figure>
      <p>何だか、あなたたち夫婦の片付けが苦手な原因が見えた気がするわ…<br>さぁ、今日はストック品の収納について教えるわよ！</p>
    </div>


    </section>
    <section class="comic-pink kaasan">
      <div class="wrapper">
        <p class="teach">
          <img data-src="../../lib/img/magazine/comic01/img02@2x.png" data-retina="../../lib/img/magazine/comic01/img02@2x.png" alt="お母さんからのアドバイス" style="" class="u-img__max">
        </p>
        <h3>ストック品は1個がベースよ</h3>
        <p>セールや特売の文字を見ると、ついつい浮かれちゃう気持ち…<br> まぁわからなくはないわ。
          <br> でもね、片付けのことを考えると<strong class="red">買いすぎはもちろんNG</strong>よ。
        </p>
        <p>せっかく上手な収納の仕方を知っていても<br class="u-only__pc">
          そもそもモノが多すぎてあふれちゃえば元も子もないわ。
        </p>
        <p>
          ストック品を正しく整理・収納・片付けをすることで、<br> 同じ商品を大量に持っていることが判明したり
          <br> 逆に足りないことが分かってくるわ。
        </p>

        <p>ストック品とは、<strong class="red">普段から使う消耗品の補充のために<br class="u-only__pc">
            在庫しておくモノ</strong>のことを指すわ。<br>たとえば、シャンプーや洗剤などの日用品や、<br class="u-only__pc">
          レトルト類やカップラーメンなどの食品が多いわね。
        </p>

        <p>「何か困ったときのために」「念のために」「安いから」<br class="u-only__pc">
          って、ついつい増えがちなのがストック品。<br>きちんと数を把握していない人が多いのよね。<br>
          でも、収納や片付けをしていくうえで、<br class="u-only__pc"><strong class="red">今あるモノの量を把握しておく</strong>のは、とても大事なことよ。
        </p>

        <p>
          ストック品の整理整頓を始めるときは、<br class="u-only__pc">単に多い・少ないと整理するんじゃなくて<br class="u-only__pc">
          これを機に、今後のストック品の持ち方や買い方自体を見直すことがポイントよ。
        </p>

        <h3>切り替えるタイミングに合わせて、ストック品の数を決めるのよ</h3>
        <p>日用品ストックの適正量を決めるポイントは２つ。</p>
        <p>

          <strong>・ストックに切り替えるまでの使用期間<br>・購入の難易度</strong>
        </p>
        <p>

          <strong class="red">ストックの切り替えが「1ヵ月ごと」ならばストックは1つあれば十分</strong><br> …ということをベースに考えてみて。
        </p>
        <p>

          日用品は1ヵ月単位で入れ替えするものがほとんどだから<br class="u-only__pc">基本的にシャンプーなどの日用品ストックは1つまで。
        </p>
        <p>
          サクラは安いってことに弱いみたいだから、お得感でまとめ買いしないように。<br> 買いすぎちゃっても結局、使い切れなかったら、もったいないものね。<br>ストックしている間は余分にスペースを取ることになってしまうし、<br class="u-only__pc">収納スペース的にも逆効果ね。
        </p>
        <p>
          ただし、<br><strong> ・2～3週間で使い切ってしまうモノ
            <br> ・購入できる場所が遠方あるいはネットショッピングなどすぐに手に入らないモノ</strong>
        </p>
        <p>

          こんな時は、2個くらいストックしていても問題ないわね。</p>
        <p>

          例えば、ティッシュやシャンプーなどのストック品は、<br> 基本的には1パック（6個入り）あるいは1個ずつ。
          <br> でも、ネット限定のシャンプーを愛用しているなどの場合は、
          <br> 1度に2個単位で注文する…という具合に自分でうまく調整をしてみて。
        </p>
        <p>

          どれだけストックするかを考える時は<br>
          <strong class="red">自分は「何ヵ月で使い切るか？」を意識</strong>して数を考えるといいわよ！<br>
          サクラみたいに片付けが苦手な人は<br class="u-only__pc">モノを散らかさないように買いすぎないなど、元を断ち切るイメージで！
        </p>


        <h3>ポイントを覚えたら、実践あるのみよ！</h3>
        <p>さぁ、次はストック品の収納方法を教えるわね。<br>収納の改善は、片付け上手への近道よ。</p>
        <p>さっきも言った通り、ストックは1ヵ月単位で切り替えるもの。
          <br> つまり、ストック品の収納スペースを使うのは、月1回と言えるわけね。
        </p>
        <p>

          入れ替え頻度はあまり高くないから、ストック品の収納場所は<br class="u-only__pc">
          <strong class="red">高い位置や低い位置、棚の奥みたいな普段使わない場所</strong>で問題ないわ。
        </p>
        <p>

          <strong class="red">種類ごとに1つのボックスやカゴに入れて、ざっくりと収納する</strong>のがオススメ。<br>ざっくりとでも片付けておけば、数がちょっとくらい増減しても対応できるのよ。
        </p>
        <p>

          <strong class="red">高い位置</strong>に収納するなら、布製の軽いボックスを使って、<br> ティッシュやトイレットペーパーなどの<strong class="red">軽めのモノ</strong>を入れると、
          <br class="u-only__pc">手を伸ばしても出し入れしやすくなるわよ。
        </p>
        <p>
          収納する前に、パッケージをはがしておくと<br class="u-only__pc">いざ使う時に便利だし、収納スペースも抑えられるから実践してみて。
        </p>
        <p>

          シャンプーや洗剤みたいな<strong class="red">重さのあるストック品</strong>は<br class="u-only__pc">
          入れ替え頻度が少なくても<strong class="red">低い位置</strong>に収納するようにね。
          <br>液体洗剤の詰め替え類は、液だれの心配もあるから
          <br class="u-only__pc">プラスチック製の収納ボックスを使うと
          <br class="u-only__pc">もしもの時も洗うこともできるのでオススメよ！
        </p>
        <h4>パントリーでのストック品管理</h4>
        <p>キッチンにある食品などを収納するパントリーがある場合は<br class="u-only__pc">
          調味料やレトルトなどの食品のストック品を収納しましょう。<br>
          食品は賞味期限や消費期限があるから、それぞれの<strong class="red">期限の管理がとっても大事。</strong><br>
          買いすぎはデッドストック品になるなど、無駄になるだけだから、2つ以上のストックはとても危険よ。<br>
          また、収納スペースがどれくらいあるかも考えて、最低限、“パントリー内に収まる量”にしましょうね。</p>

        <p>すぐに日付とストック品がチェックできるように<br class="u-only__pc">
          箱にしまうのではなく、100円ショップのプラスチックカゴを活用して、<br class="u-only__pc">
          <strong class="red">外から見えるようにしておく</strong>といいわね。<br>
          目線の高さに収納することで、パントリー内のストック品を<br class="u-only__pc">
          常に確認することができるわ。
        </p>

        <p>非常食や長期保存のものは、パントリーの下の方に収納をするか<br class="u-only__pc">
          納戸がある場合は、そこに収納してもいいわね。<br>
          でもストックしていることを忘れないように<strong class="red">定期的な管理が大切</strong>よ。
        </p>

        <p>食品の場合は、冷蔵庫に保存しているモノもあると思うけれど<br class="u-only__pc">
          冷蔵庫は1ヵ月に1回見直して、使っていないモノ・賞味期限や消費期限が切れている<br class="u-only__pc">
          モノはその都度、捨てるなどして管理してね。<br>
          冷蔵庫の中は、そのままずっと残りがちだから気をつけるのよ。
        </p>


        <p>
          ストック品は、いつも家にいくつあるのかきちんと把握して<br class="u-only__pc">購入が必要かどうかを判断するのを忘れないようにね！
        </p>

        <p>買いすぎを防ぐことができれば、無駄な片付けもなくすことができるわ。<br>
          ストック品の管理はとても大事なことよ。</p>

      </div>
    </section>

    <section class="main__wrapper">
      <div class="wrapper narrow">


        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sho02@2x.png">
          </figure>
          <p>確かに、きちんと把握してみると<br>いろいろと見えてくるな<br>歯磨き粉だけで４つもあるよ…散らかるわけだね</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
          </figure>
          <p>しかも、私シャンプーとか<br>新商品がでると欲しくなっちゃうんだよなー</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
          </figure>
          <p>それなのに、あんなに買っちゃってたのね…<br>片付けも大変になるわけだわ</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
          </figure>
          <p>だわー♪</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
          </figure>
          <p>よし！これからは買う前に考えよう！</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>そうだね！<br>特売マジックに踊らされないようにしよう！</p>
        </div>

        <div class="talk">
          <p style="width: 100%;" class="center">…　次の日曜日　…</p>
        </div>

        <div class="center mb3">
          <img data-src="../../lib/img/magazine/comic01/vol07/img01.jpg" data-retina="../../lib/img/magazine/comic01/vol07/img01@2x.jpg" alt="" style="" class="u-img__max">
        </div>

        <div class="intro mb6">
          <p>しまった…せっかくお母さんに教えてもらったのに、<br> あの真っ赤な特売の文字を見ると、つい引き寄せられるところだったわ…。
            <br>ちゃんとモノの数を把握するのが片付けに大事なことだって、やっとわかった気がする。
            <br> これからも、買う前に一旦考えることを忘れないようにしないと！
          </p>
        </div>
      </div>
      <!-- //wrapper -->
      <div class="mb6">
        <div>
          <a href="<?php echo $base_url ?>/magazine/article/sumai-sos-vol04.php" data-ga-click="pr_<?php echo $filename ?>_pc" class="u-only__pc">
            <img src="<?php echo $img_url ?>/magazine/comic01/comic-tidy07_pc.jpg" alt="「ワンポイントアドバイス」整理力と整頓力、どっちが得意？" class="u-img__max u-only__pc">
          </a>
          <a href="<?php echo $base_url ?>/magazine/article/sumai-sos-vol04.php" data-ga-click="pr_<?php echo $filename ?>_sp" class="u-only__sp">
            <img src="<?php echo $img_url ?>/magazine/comic01/comic-tidy07_sp.jpg" alt="「ワンポイントアドバイス」整理力と整頓力、どっちが得意？" class="u-img__max u-only__sp">
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
    <?php $CmGtmId = "2";
    include($inc_path . "/lib/inc/page/_magazine/__comic01_cm.php"); ?>
  </aside>
</main>

<?php
$toindex_url = "/magazine/index_comic01.php";
include($inc_path . "/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
