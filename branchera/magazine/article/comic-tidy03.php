<?php
//base
include( "../../function.php" );
$content = get_id_data( '12003' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '片付けの専門家が監修！片付けられない家族を救うためのマンガコラム。第3話はモノの捨て方のコツを伝授。もったいなくて捨てられない！という方のために「捨てる」のではなく「手放す」という考え方をご紹介します。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>

<main class="main comic">
  <article class="main__row">
    <?php
    $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
    $panAry[] = array( "/magazine/index_comic01.php", "何でか、部屋が片付かない。" );
    include( $inc_path . "/lib/inc/pan.php" );
    ?>
    <?php
    include( $inc_path . "/lib/inc/page/_magazine/__comic-header.php" );
    ?>


    <div class="intro">
      <p>片付けられずに散らかり放題の私の部屋を、なんとかしようと立ち上がってくれたお母さん。</p>
      <p>モノを整理することで、「必要ないモノ」が明確になったんだけど…ちょっと待ってお母さん！やっぱり捨てちゃうなんてもったいないんじゃないかな～？
      </p>
    </div>

    <p style="text-align: right" class="mb4">&raquo; 前回はこちら<a href="comic-tidy02.php">「第2話　片付けに“いつか”なんて、やってこない！」</a>
    </p>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>このあいだ、うちのいろんなモノを整理できたのはありがたいんだけどさぁ…</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
      </figure>
      <p>あら、段ボールに詰めてエライじゃない<br>いいことね！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>いいことね♪</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>コレ…全部捨てちゃうの？この財布なんて、有名ブランドのやつなんだよぉー！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>そんなこと言ったってサクラ。あなたこの財布ずいぶん長く使ってるでしょ？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>ウッ…確かにまぁ、そうなんだけど</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>しかも、ブランドって言ったって糸は出ちゃってるし、チャックもガタガタじゃない。何年使ってたの？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>んと…5・6年は使ってたかなー</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
      </figure>
      <p>ハイ！もう充分よ！<br>そのお財布も充分、役目を果たしてるわ</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>キラリンばぁばだー！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
      </figure>
      <p>今日は、モノを手放すコツを伝授するわよ！</p>
    </div>

    </section>
    <section class="comic-pink kaasan">
      <div class="wrapper">
        <p class="teach">
          <img
            data-src="../../lib/img/magazine/comic01/img02.png"
            data-retina="../../lib/img/magazine/comic01/img02@2x.png"
            alt="お母さんからのアドバイス"
            style=""
            class="u-img__max"
          >
        </p>
        <h3>手放すモノと向き合うことで、モノの行き先が決まるわ</h3>
        <p>前回は、必要なモノと必要でないモノを見極めて、整理することができたわね。<br>1年間使う予定がない、または使わなかったのであれば、<br class="u-only__pc">それは「必要でないモノ」になったわけ。
        </p>
        <p>
          この<strong class="red">「必要でないモノ」</strong>は、整理の中では<strong class="red">「手放すモノ」</strong>となるのよ。</p>
        <p>
          そんなこと言ってもなかなか捨てられなかったから、ずっと残ってたのよね。洋服だってまだ着られるし、書籍だってそれほど傷んでいないのに…なんて考えがち。片付けや大掃除をしていても、結局迷っちゃって、いつも捨てられずに残してしまう。
        </p>
        <p>
          でも大丈夫！<br>次の4つの流れにそって、1つずつ判断していくと
          <br>「捨てなきゃいけない！」という
          <br>プレッシャーを感じることなくモノと向き合うことができるわ！
        </p>

        <div class="numArea">
          <ul>
            <li>捨てる　人に譲れない状態のモノ</li>
            <li>譲る　　親戚や友人のほか、団体への寄付など</li>
            <li>売る　　リサイクルショップやオークションなど</li>
            <li>捨てる　どうしても引き取り先がない場合</li>
          </ul>
        </div>

        <p>この手順を進めていくと、次第に「もう手放そう」と思う時がでてくるの。<br>
          <strong class="red">「自分がもったいないと思っていたものは、誰も必要でなかった」</strong>。<br>そう気がつくことで、気持ちの整理もつけやすくなるものなのよ。
        </p>
        <p>
          でも、洋服やバッグなどは、ブランド品もあるわ。<br>そういう高級なモノは、ほかの人にとっては欲しいものになる場合もあるから、買い取りサービスなどの専門のお店を利用するのもオススメよ。<br>きれいに写真を撮って、オークションサイトに出品するのもいいわね。
        </p>


        <h3>もったいない…の整理のつけ方</h3>
        <p>「モノを捨てる」といっても、全部をいきなり捨てるわけではなく、<br>譲ったり、売ったりする方法もあるの。
        </p>
        <p>
          とはいえ、「使う or 使わない」だけでは決着がつかないモノもあるわよね。<br>もう使わないと分かっていても手放せない理由は、2つ。
        </p>

        <div class="numArea">
          <ul>
            <li>もったいない</li>
            <li>思い出がある</li>
          </ul>
        </div>

        <p>もったいないって思うことが多いのは、「高価だったモノ」。<br>ブランド物のスーツやバッグ、洋服は<br class="u-only__pc">“高かったし･･･子供が大きくなったら、痩せたら･･･いつか、また着るかも”<br class="u-only__pc">なんて考えてるんじゃないかしら？
        </p>
        <p>他にも実家を出るときに持ってきた思い出のあるモノは、なかなか捨てづらいわよね。</p>
        <p>
          そういうときは一度、前回で話をした「適正量」について思い出してみて。<br>自分のライフスタイルの中で<br class="u-only__pc">「使いこなせるか」「お手入れできるか」って視点で考えるのが大切だったわね。
        </p>
        <p>
          <strong><span class="red">手放すこと</span>を悩んでいる、その高価だったモノは<br class="u-only__pc">いつか使うその時まで、適切にお手入れをしておくことはできる？</strong>
        </p>
        <p>
          そして、<strong class="red">いつか使う時に「使いこなせる・着こなせる」</strong>かしら？<br> そんな視点でもう一度考えてみて！
        </p>

        <h3>分かっているけど<span class="red">手放せない</span>ときの最終手段！</h3>
        <p>「いや、分かってるんだけど…どうしても手放せない！」<br> そんなときの最終手段は、
          <strong class="red">「先送りボックス」</strong>というもの。</p>
        <p>
          箱に、手放せないモノをまとめて入れるの。<br>その箱に半年～1年後の日付を書いて、枕棚やベッドの下などに保管。<br>そうしてその日付まで、判断を先送りするという方法ね。<br>ただし、箱の数は1～2個までと、決めておくことを忘れないように。<br>お部屋が、先送りボックスだらけになっては、元も子もないもの。
        </p>
        <p>
          同じように「思い出のモノ」も、箱に保管する方法があるわ。<br>  「ここに入るだけ」と適正量を決め、実際に使うモノとは別に保管しておくの。<br> 例えば、思い出のベビー食器は、キッチンや食器棚ではなく、思い出ボックスにどんどん保管するって具合に。<br> そして定期的に、箱の中身を見直して、
          <strong class="red">手放すための心の整理</strong>をつけましょう。<br>モノの手放し方をきちんと心得ておけば、判断にいちいち疲れることなく、スッキリと部屋が整理されていくはずよ。
        </p>
      </div>
    </section>

    <section class="main__wrapper">
      <div class="wrapper narrow">


        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>そっか！売ることもできるってわけね！<br>そうと分かれば、善は急げよ！
          </p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
          </figure>
          <p>ちょっと、段ボール箱もって<br class="u-only__pc">いきなりどうしたの？</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>だってコレ、私が働いてたときに買ったブランド品だもん！<br>これだけあれば、お小遣いくらいにはなるかなって♪<br>…というわけで、お母さん！<br>ちょっと、みぃちゃん見ててねー！</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
          </figure>
          <p>ママ、いってらっしゃーい♪</p>
        </div>

        <div class="center mb3">
          <img
            data-src="../../lib/img/magazine/comic01/vol03/img01.jpg"
            data-retina="../../lib/img/magazine/comic01/vol03/img01@2x.jpg"
            alt=""
            style="max-width: 740px;"
            class="u-img__max"
          >
        </div>

        <div class="talk mb6">
          <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
          </figure>
          <p>ブランド品ってことの前に<br class="u-only__pc">使い方が雑なのよね…ボロボロじゃない</p>
        </div>


        <div class="intro mb6">
          <p>子どもの頃からずっとモノを捨てるのが苦手だったんだけど、<br class="u-only__pc">お母さんに教えてもらった順番に沿って考えると、あんまり葛藤せずに捨てることができたな。<br>モノが整理されるだけで、何だか部屋がスッキリしてきた感じ♪<br>片付けや収納に関して、段々モチベーションも上がってきた。<br>次は、キッチンの片付け方を教えてもらおっと！</p>
        </div>


      </div>
      <!-- //wrapper -->


      <div class="wrapper wide">

        <div class="supervision" style="background: #eee; align-items:inherit">
          <figure><img src="../../lib/img/magazine/comic01/vol03/logo.png">
          </figure>
          <div>
            <p class="tttl" style="color: #333;">長谷工のリサイクルショップ「カシコシュ」</p>
            <p style="color: #333;">サクラのように、ブランド品を売りたい！とお考えの方におすすめなのが、長谷工のリサイクルショップ「カシュコシュ」の無料宅配キットです。<br>ご自宅で簡単に売りたい品物を配送し、無料査定することができます。さらに、長谷工IDをお持ちの方は買取価格が最大5,000円アップする会員特典をご用意しております！ぜひ、ご活用ください。<br><a href="<?php echo $base_url ?>/gift/article/kasikosh.php">» 特典の詳細はこちらから</a>
            </p>
          </div>
        </div>

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
      <?php include ($inc_path."/lib/inc/page/_magazine/__back_num.php") ?>
    </section>

  </article>
	<aside class="mt3 mb3">
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php");?>
	</aside>
</main>

<?php
$toindex_url = "/magazine/index_comic01.php";
include( $inc_path . "/lib/inc/toindex__magazin.php" );
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
