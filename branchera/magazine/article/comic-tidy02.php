<?php
//base
include("../../function.php");
$content = get_id_data('12002');
$pageTtl = $content['title'];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '片付けの専門家が監修！片付けられない家族を救うためのマンガコラム。第2話はモノの分類方法と適正量の考え方。さらに、片付けのやる気を起こす方法をご紹介します。';
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
      <p>旦那とかわいい娘と3人でマンションに暮らす、私、サクラは超がつくほどの片付け下手。</p>
      <p>そんな私と正反対で片付け上手・家事上手のお母さんを呼んで、この散らかり放題の部屋を何とかしよう！と意気込んでるんだけど、このモノであふれた部屋を何とかすることができるのかなぁ。</p>
    </div>

    <p style="text-align: right" class="mb4">&raquo; 前回はこちら<a href="comic-tidy01.php">「第1話　片付けられない私に救世主アラワル！？」</a>
    </p>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>ちょっとサクラ…何なのこのお菓子の缶は！？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>缶のデザインがめっちゃ可愛くない？<br>いつか、みぃちゃんのゴム入れとかにしたいなーって</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>みぃちゃんの入れるの！</p>
    </div>


    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>この小さいデジタル時計はなんでこんなとこに置いてあるの？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>あー…これは趣味じゃないんだけど、<br>いつか旅行とか行った時に<br>目覚まし時計とかに使えるかなーって</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>サクラ…あなた「いつか・いつか」って<br>使いもしないもの溜めこんでどーすんのよっ！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>だってぇ…なんかもったいないし…<br>片付けようっていう「やる気」が起きないんだもん</p>
    </div>

    <div class="center mb3">
      <img data-src="../../lib/img/magazine/comic01/vol02/img01.jpg" data-retina="../../lib/img/magazine/comic01/vol02/img01@2x.jpg" alt="" style="max-width: 740px;" class="u-img__max">
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
      </figure>
      <p>その考えが間違ってんのっ！<br>さぁ、今回は必要なモノを「整理」するわよっ！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>うわぁ！<br>またお母さんキャラ変わってるー！？</p>
    </div>
    </section>
    <section class="comic-pink kaasan">
      <div class="wrapper">
        <p class="teach">
          <img data-src="../../lib/img/magazine/comic01/img02@2x.png" data-retina="../../lib/img/magazine/comic01/img02@2x.png" alt="お母さんからのアドバイス" style="" class="u-img__max">
        </p>
        <h3>モノの整理は、1年単位で考えるのがコツよ！</h3>
        <p>サクラの家が片付かないのは、必要以上にモノが多いってことが問題ね。<br> それじゃ
          <strong class="red">「必要なモノ」</strong>と<strong class="red">「必要でないモノ」</strong>を見極めて、モノの整理をしていくわよ。
        </p>
        <p>
          整理をする時のコツは、1年先までの生活を想像することなの。<br> 子育て中のサクラにとって、どうして部屋を片付ける必要があるかって考えた時に
        </p>
        <p>
          <strong>・モノを探している時間が減る、時間的効果<br>
            ・気持ちに余裕ができる、精神的効果<br>
            ・お掃除などがラクになる、家事楽効果</strong>
        </p>
        <p>
          を重視したいって話していたのを覚えてる？<br> その理想の暮らしの中で「使う」か「使わないか」を考えてみるの。
          <br> それでも、判断しづらい場合は「1年間」という時間で区切ると簡単よ。
        </p>
        <p>
          <strong class="red">1年間使うものか、過去1年間に使ったことはあるか…</strong>
        </p>
        <p>
          そうやって今の暮らしで何を重視するのか考えて、「今、使うモノ」を優先していくのよ。
        </p>

        <h3>優先することに立ち返って、適正量を考えてみて！</h3>
        <p>必要なモノがわかったら、次はどれくらいの量がいいのかを整理していくの。<br> つまり
          <strong class="red">「適正量＝自分にとってピッタリの量」</strong>はどれくらいかってことね。
        </p>
        <p>

          でも、モノの量は人によってイロイロ。<br> 単純に、「コレは〇個が適量！」とは決められないわね。
          <br> 最初は洋服や本みたいに、日常的に増えやすいモノから考えてみると分かりやすいかも。
        </p>
        <p>

          適正量を決めるには、2つの方法があるの。
        </p>

        <div class="numArea">
          <ul>
            <li>自分の優先事項を意識して<strong class="red">「その暮らしで必要なモノの数」を考える方法</strong>
            </li>
            <li>自宅の収納を考え「ここに入るだけ」と、<strong class="red">スペースから決める方法</strong>
            </li>
          </ul>
        </div>

        <p>例えば、「洋服」について、ちょっと想像してみて。<br> 1週間毎日違う服を着たいなら、上下ともに７着ずつ。
          <br> それが2週間なら、上下14着ずつ。
        </p>
        <p>

          つまり、同じ服を月に2回着用、ワンシーズン6回しか着ないということなの。<br> もっとも、組み合わせ方によっては、もっと少ない数でも大丈夫。
          <br> 上下5着ずつあれば、25通りのパターンが楽しめるってわけね。
        </p>
        <p>

          サクラにとって、今の暮らしで「おしゃれ」の優先度はどれくらいかしら？<br> 「時間的」「家事楽」を優先する子育て中の暮らしなら
          <br> 上下ともに5～7着もあれば、充分おしゃれを楽しめるのかもしれないわね。
          <br> こんな風に、靴やタオルも、おおよその数を決めることができるの。
        </p>

        <h3>いろんな視点でモノと向き合ってみると、必要かどうかが分かるわ</h3>
        <p>ほかには「きちんとお手入れできるか」という視点で考えてみるのもいいかもね。<br> とくに洋服や本って、保管状態が悪いと傷みやすいわよね。
        </p>
        <p>

          使用頻度の低いモノを定期的に収納から出して風を通すといった<br> 「モノの手入れ」が必要だと思うんだけど、
          <br> 今の暮らしで、その時間はどれくらいあるの？
        </p>
        <p>

          こんな風に自分のライフスタイルの中で、<br>
          <strong class="red">モノを「使いこなせるか」「お手入れできるか」という視点で考えて<br>
            自分にぴったりの数を決めるのが1つ目の適正量の決め方</strong>なのよ。
        </p>
        <p>
          持っているモノが多くて、数えることが難しい場合は、<br> 「スペースから決める」という方法もあるの。
          <br> 溜まりがちなショップの紙袋や試供品は、
          <br class="u-only__pc">「ここに入るだけ」とスペースを決めてそこからはみ出さないくらいが適正量
          <br class="u-only__pc">って具合にざっくりと把握するとラクちんね。
        </p>
        <h3>片付け前の状態を写真に撮って、やる気を奮い起こそう！</h3>
        <p>さて、モノの整理について説明したけれど…<br>方法はわかっても、やる気が起きないといつまでも片付かない部屋のままよね。<br>モノの分類をして収納場所を決めたあとは、それを毎日同じ場所に片付ければ良いのよ。だから、最初のモノの整理は、気合いを入れてやるのが肝心よ！</p>
        <p>私がおすすめの、片付けのやる気を出す方法を紹介するわ。</p>
        <h4 class="u-ttl__m">散らかった汚部屋の状態を写真に撮る！</h4>
        <p>まずは自分への戒めのために、今の汚い状態の部屋をスマホのカメラ機能などで撮影するの。そうして、片付ける前にその写真を見て、汚かったころの状態を思い出すのよ！変化がわかるように写真を残しておくと、片付けのモチベーションが下がった時も、それがやる気の起爆剤になるわよ！</p>
        <h4 class="u-ttl__m">憧れのきれいな部屋の写真を見る！</h4>
        <p>逆に、憧れの写真を見ることで、片付けのやる気を起こすというやり方もあるわ。<br>雑誌やネットで見つけた、自分好みのきれいな部屋の写真を、いつでも見られるようにスマホに保存しておくのもいいわね。そして、片付けの前に、憧れていた気持ちを思い返してみて。</p>
        <h4 class="u-ttl__m">テンションの上がる曲で、一気に整理！</h4>
        <p>片付けだけじゃなくて、いろんな作業に当てはまることだけれど、音楽のチカラを借りるのもいいわね。ノリノリの音楽をかければ、時間も忘れて片付けに没頭できるかも。ちなみに私は、ロックをかけながら片付けをやってるのよ！</p>
        <h4 class="u-ttl__m">家族と一緒に時間を決めて整理！</h4>
        <p>一人ではやる気が起きなくても、家族みんなでやればできる！ってこともあるわよね。<br>快適な暮らしを送るために、家族みんなに協力してもらって、1時間なら1時間と時間を区切って整理するのもおすすめよ。</p>
        <p>引越しなどで、一気にモノの大移動が必要なときも、無理して自分だけでやろうとしないで、家族みんなで片付けをするといいわね。引越し後はとくに疲れてやる気が起きないはずだから、次の休みを活用して、一気に片付けるようにしましょう。<br>家族みんなで部屋を片付けていく！、という達成感も味わえるわ！</p>
      </div>
    </section>

    <section class="main__wrapper">
      <div class="wrapper narrow">
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
          </figure>
          <p>で、このお菓子の缶は、<br>この1年後も使うかしら？</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
          </figure>
          <p>いつものばぁばだー</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
          </figure>
          <p>何ヵ月もこのままだし…使わない気がする</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
          </figure>
          <p>ハイ！じゃぁ、このねじれまくってるイヤホンは？<br>あなた、外で音楽なんて聞いてる時間ないじゃない</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>た…確かに、みぃちゃん生まれてから<br class="u-only__pc">使ってない！</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
          </figure>
          <p>さぁ～この勢いでドンドン整理して、捨てるわよ！<br>ゴミ袋もってらっしゃーい！</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
          </figure>
          <p>ちょっ！ちょっと待ってよぉ<br>何でもかんでも捨てないでよぉ…もったいないじゃん</p>
        </div>

        <div class="talk mb6">
          <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
          </figure>
          <p>また、あんたはそんなこと言って<br class="u-only__pc">じゃぁ、次はモノを手放すコツを教えてあげるわ</p>
        </div>


        <div class="intro mb6">
          <p>自分の部屋にこんなに「必要のないモノ」が存在しているなんて思いもしなかった！<br>ちょっとモノと向き合って考えるだけで、こんなに整理できるなんて。</p>
          <p>でも、次は「モノを手放すこと」についてかー。<br>正直苦手なんだけど…うーん…でもこの部屋、何とかしたい！</p>
        </div>
      </div>

      <!-- //wrapper -->
      <div class="mb6">
        <div>
          <a href="<?php echo $base_url ?>/event/article/report-event-online02.php" data-ga-click="pr_<?php echo $filename ?>_pc" class="u-only__pc">
            <img src="<?php echo $img_url ?>/magazine/comic01/comic-tidy02_pc.jpg" alt="「ワンポイントアドバイス」片付けに必要なスキルをプロが伝授！" class="u-img__max u-only__pc">
          </a>
          <a href="<?php echo $base_url ?>/event/article/report-event-online02.php" data-ga-click="pr_<?php echo $filename ?>_sp" class="u-only__sp">
            <img src="<?php echo $img_url ?>/magazine/comic01/comic-tidy02_sp.jpg" alt="「ワンポイントアドバイス」片付けに必要なスキルをプロが伝授！" class="u-img__max u-only__sp">
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
