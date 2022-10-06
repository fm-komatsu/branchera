<?php
//base
include("../../function.php");
$content = get_id_data('12015');
$pageTtl = $content['title'];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '片付けの専門家が監修！片付けられない家族を救うためのマンガコラム。第15話はいつの間にか増えているモノを収納整理して適正量を維持するコツをご紹介します。';
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
      <p>収納グッズもシンプルなモノを揃えて、部屋の中が本当に見違えるようにキレイになったの！まさかここまで整理できるとは思ってなかったなー。でも、ちょっと気を抜くと、なんかいろいろなモノが増えているんだよね…。特に買いすぎてはないはず…なんだけど。どうしてなの？</p>
    </div>

    <p style="text-align: right" class="mb4">&raquo; 前回はこちら<a href="comic-tidy14.php">「第14話　雑誌デビューでカリスマ主婦！？収納グッズで収納上手になろう！」</a>
    </p>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
      </figure>
      <p>サクラ―！来たわよー<br>今日はみぃちゃんにプレゼントがあるわよー♪</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>ばぁばだ～♪<br>みぃちゃんのプレゼントちょーだい！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>うーーーん…（ギュウ、ギュウ）</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
      </figure>
      <p>みぃちゃんにピッタリなお洋服を見つけたから<br>買ってきたのよー♪</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>かわいいー！！<br>ママ、みてぇー！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
      </figure>
      <p>あら、サクラ…<br>そんなところで何やってるの？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>いやぁ…それがさ…<br>この間片付けたばかりなのに、クローゼットがパンパンでさー</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>なんでそんなに洋服が増えているのよ？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>なんでだろう…気がつくと洋服だけじゃなくて、<br class="u-only__pc">いろいろなモノが増えているんだよねー</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>モノは勝手に増えないんだから、増えているのには理由があるのよ！<br>いつの間にか買っていたり、人からもらって……あ！</p>
    </div>

    <div class="center mb3">
      <img data-src="../../lib/img/magazine/comic01/vol15/img01@2x.jpg" data-retina="../../lib/img/magazine/comic01/vol15/img01@2x.jpg" alt="" style="max-width: 740px;" class="u-img__max">
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
      </figure>
      <p>私としたことが…なんてことなのー！<br>モノが増える原因について、一緒に考えていくわよ！</p>
    </div>



    </section>
    <section class="comic-pink kaasan">
      <div class="wrapper">
        <p class="teach">
          <img data-src="../../lib/img/magazine/comic01/img02@2x.png" data-retina="../../lib/img/magazine/comic01/img02@2x.png" alt="お母さんからのアドバイス" style="" class="u-img__max">
        </p>

        <h3>モノが増える原因を突き止めるのよ！</h3>
        <p>せっかく片付けたのに、またいつの間にかモノが増えているってこと…あるわよね。<br>モノを整理したり、収納したり…片付けの方法を学んだとしても、<br class="u-only__pc">モノが増える原因に気づかないでいると、<br class="u-only__pc">いつまで経っても同じことの繰り返しになってしまうわ。</p>
        <p>サクラも「勝手にモノが増える･･･」なんて言っていたけれど、<br class="u-only__pc"><strong class="red">モノは勝手に増えたり減ったりはしないの！</strong><br>まずは、「どうしてモノが増えるのか？」を突き止めていくわよ！
        </p>

        <h3>その買い物は、何のためかしら？</h3>
        <p>モノが増える原因の一つに、買い物があるわ。<br> でも、なんでたくさん買い物してしまうのかしら？
        </p>
        <p>買いすぎを助長させる要素には、いろいろなモノがあるわ。<br>よくやってしまう、ありがちな買いすぎの理由をまとめてみたから、<br class="u-only__pc">当てはまるものがないか、<strong class="red">チェック</strong>してみて。</p>
        <p>
          <strong>・セールという言葉に弱い<br>・流行に弱い<br>・新しいモノが欲しくなる<br>・収集癖がある<br>・ストレス発散目的</strong>
        </p>
        <p>こういった理由で、本当は商品が必要だったわけではないのに、<br class="u-only__pc">お得感や特別感のような、<strong class="red">感情的な理由で買っているケースが少なくないの</strong>。 <br>私の場合は「みぃちゃんの喜ぶ顔が見たくて」<br class="u-only__pc">つい買ってしまっていたわ…反省ね。</p>
        <p>目的のために必要なモノを買うんじゃなくて、買い物自体が目的になってしまう、<br class="u-only__pc">そんな衝動買いは要注意よ。</p>
        <p>いつも使っているシャンプーや調味料などの消耗品が、セールで安くなっていた。<br>新発売の家電や書籍、期間限定のオシャレな装飾品、化粧品が売っていた。</p>
        <p>そんな場面になったら、買い物をする前に、<br><strong>“なぜ、それが欲しいのか？”<br>“本当にいま必要なのか”</strong><br>ということを、自分自身に対して冷静に問いかけるといいかもしれないわね。</p>
        <p>もしくは欲しいモノができても、すぐに買いに行こうとはせず、<br class="u-only__pc">身の回りのモノでDIYをして、必要なグッズをつくってしまう、<br class="u-only__pc">なんていう方法も良いかも。<br>買い物自体を少なくすれば、無駄な買い物や出費も抑えられるわね。</p>

        <h3>いつの間にか増えている、数々のいただきモノにも注意よ！</h3>
        <p>モノがいつの間にか増えてしまう、もう一つの原因に「いただきモノ」があるの。<br>私も人のこと言えないんだけれど… <br>「子供や孫に」っていろんなモノをあげてしまうのよね。</p>
        <p>

          このように人からもらうことが多い場合は、<br class="u-only__pc">今は使わないからといって置いておくだけでなく、<br class="u-only__pc">くださった方の気持ちに感謝して整理できるといいわね。
        </p>
        <p>あと、無料のいただきモノっていうのもあるわ。<br> ポケットティッシュやお菓子や飲み物の景品など、<br class="u-only__pc">いつの間にか増えてしまうということもあるわね。</p>
        <p>これも、買い物と同じように<br class="u-only__pc"><strong class="red">“本当に必要？”ってことをよく考えて</strong>みてね。<br>適正量をしっかりと見定めて、もしも過剰な場合は捨てるなどして整理してみて。</p>

        <h3>モノを増やさないためのコツは、片付いた状態を忘れないこと！</h3>
        <p>人は、手放して捨てるよりも増やす方が得意なの。<br>だから、整理を意識しないと自然とモノは増え続けてしまうのよ。<br> 自分のクセを知って、克服することで、<strong class="red">モノが増えにくい生活を心がけて</strong>みて！</p>
        <p>「働くことになった」…とか「子どもが生まれる」…というふうに<br class="u-only__pc">ライフスタイルが大きく変わらない限り、適正量は変わらないものなの。</p>
        <p>適正量を維持する簡単なコツは、<br class="u-only__pc"><strong class="red">買い物をひとつした時に、同じカテゴリーのモノをひとつ手放す</strong>ようにしてあげること。<br>服が良い例ね。<br>1着買ったら、同じタイプで着ていない古い服から順番に1着捨てる。<br>こうしておけば、モノの数は維持できるから、適正量を超えることはなくなるわ。</p>
        <p>モノがいつの間にか増えてしまう人にありがちなのが、<br class="u-only__pc">少し前に整理した部屋の収納スペースを見て、<br class="u-only__pc">「まだ空いているから大丈夫」なんて思ってしまうこと。 </p>
        <p>そこが整理されているのは、以前にきっと、一度片付けをしたからよね。<br>それを忘れて、またどんどんモノを増やしてしまうと、<br class="u-only__pc">結局は整理をする前と同じになってしまうわ。<br>そうなる前に、空いたスペースを見つけたときは、一度思い出してみて！</p>

        <p>
          “整理する前の部屋の姿”を。
        </p>
        <p>
          あの足の踏み場もなかったリビング…山盛りの洋服たち…<br>もうあの時の状態には戻りたくないわよね。
        </p>
        <p>

          整理が終わって一番スッキリとした状態の収納スペースを写真に撮って、<br> ちょっと気が緩みそうな時に見返すのもオススメよ！
        </p>

      </div>
    </section>

    <section class="main__wrapper">
      <div class="wrapper narrow">


        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>まさか…うちのモノが増える原因のひとつが<br class="u-only__pc">お母さんだったとはね…</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
          </figure>
          <p>つい、みぃちゃんのことになると<br class="u-only__pc">夢中になってしまうのよね～<br>これからは、お洋服とおもちゃに気をつけないと…</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/miichan02@2x.png">
          </figure>
          <p>ばぁば…もうみぃちゃんにくれないの？</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
          </figure>
          <p>あらぁ～♪そんなわけないじゃない<br>みぃちゃんはブルーの洋服もよく似合うわぁ～♪<br>今度はおねえさんっぽい黒にしようかしら～♪</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
          </figure>
          <p>えぇ－っ！？</p>
        </div>



        <div class="intro mb6">
          <p>片付け上手なお母さんでも、みぃちゃんのことになると本当にダメなんだからー。でも、これで、本当にスッキリしたなー。今の悩みは…とにかくこの状態をキープできるか！ってことなんだよね。また元通りにならないようにするためには、どうしたらいいんだろう。
          </p>
        </div>

      </div>
      <!-- //wrapper -->
      <div class="mb6">
        <div>
          <a href="<?php echo $base_url ?>/event/article/report-event-online02.php" data-ga-click="pr_<?php echo $filename ?>_pc" class="u-only__pc">
            <img src="<?php echo $img_url ?>/magazine/comic01/comic-tidy15_pc.jpg" alt="「ワンポイントアドバイス」いつの間にかモノであふれかえっているのは何故！？" class="u-img__max u-only__pc">
          </a>
          <a href="<?php echo $base_url ?>/event/article/report-event-online02.php" data-ga-click="pr_<?php echo $filename ?>_sp" class="u-only__sp">
            <img src="<?php echo $img_url ?>/magazine/comic01/comic-tidy15_sp.jpg" alt="「ワンポイントアドバイス」いつの間にかモノであふれかえっているのは何故！？" class="u-img__max u-only__sp">
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
