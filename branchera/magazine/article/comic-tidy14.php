<?php
//base
include( "../../function.php" );
$content = get_id_data( '12014' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '片付けの専門家が監修！片付けられない家族を救うためのマンガコラム。第14話は収納グッズを正しく選ぶコツと使用方法をご紹介します。';
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
      <p>今までは、どこに何があるかなんてまったく分からなかったのに、最近はモノを探してウロウロすることがなくなってきたんだ。これって、かなり家の中が片付いてきてるってことだよね！？<br>雑誌に取材させてください…なんて言われたらどぉ～しよ～♪
      </p>
    </div>

    <p style="text-align: right" class="mb4">&raquo; 前回はこちら<a href="comic-tidy13.php">「第13話　片付けができない人のクセ？魅惑のポイポイ」</a>
    </p>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
      </figure>
      <p>ママー！<br>みぃちゃんのスプーンってどこにあるんだっけ？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>どこー？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>食器棚の一番上の引き出しの<br>一番左端に入ってるよー！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
      </figure>
      <p>なかなかやるじゃない！<br>すぐにモノの場所を答えられるってことは、<br class="u-only__pc">きちんと整理されていて、把握できているということよ！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>ふふ～ん♪お母さんのレッスンのおかげね<br>雑誌に出てくる、収納上手なカリスマ主婦みたいでしょ？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho02@2x.png">
      </figure>
      <p>う…うーん…<br>確かにすごい整理されてるんだけど…<br>雑誌で見る収納と、な～んか違うような…</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>えーそう？雑誌にのってるような感じじゃなーい♪<br>…って、あれ？確かにちょっとゴチャっとして見えるかも…？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
      </figure>
      <p>2人とも、すごくいい傾向だわ！<br>今の2人の気づきは、部屋が片付いてきたからこそ感じるものなの</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
      </figure>
      <p>ということは、まだキレイになるということですね！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
      </figure>
      <p>そうよ、ショウくん！<br>今日は、いよいよ収納グッズの選び方について教えるわ</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>ばぁばが、キラリンになったー♪</p>
    </div>



    </section>
    <section class="comic-pink kaasan">

      <div class="wrapper">
        <p class="teach">
          <img
            data-src="../../lib/img/magazine/comic01/img02@2x.png"
            data-retina="../../lib/img/magazine/comic01/img02@2x.png"
            alt="お母さんからのアドバイス"
            style=""
            class="u-img__max"
          >
        </p>
        <h3>片付けが苦手な人ほど、収納グッズはシンプルが鉄則よ！</h3>
        <p>部屋が片付いてくると、これまでとは違ったことが気になってくるわよね。<br>「こうなりたい！」と思っていたイメージと何かが違うと感じたら、<br class="u-only__pc">もしかしたら収納の仕方にポイントがあるかもしれないわ！
        </p>
        <p><strong class="red">収納グッズを正しく選んで使う</strong>ことができれば、<br class="u-only__pc">普段の片付けもぐっと楽になるはずよ。</p>
        <p>収納グッズっていうと、<br class="u-only__pc">最近は100円ショップから雑貨店、インテリアショップでも、<br class="u-only__pc">いろいろな種類の収納グッズが売られていることが多いのよね。<br>バリエーション豊かな形や、ちょっと変わった素材を使って、<br class="u-only__pc">オシャレなモノもあったり。</p>
        <p>でも、<strong class="red">最初のうちはシンプルな収納グッズから選んでいく</strong>のがオススメよ。<br>いくらオシャレなモノや多機能な収納グッズを用意しても、<br class="u-only__pc">使いにくかったり使い方がわからなかったら、無駄になってしまうもの。</p>
        <p>収納グッズを用意したいけど、何を選んだらいいかわからない。<br>良いモノを選べる自信がない。<br>そんなときでも、背伸びなんてしなくていいの。<br>どんな収納グッズを使うにしても、生活が楽になれば、<br class="u-only__pc">それで充分役割を果たしているといえるものよ。</p>
        <p>まずは<strong class="red">「片付けを少しでも楽にする」</strong>という基本を忘れずに、<br class="u-only__pc">自分にあった収納グッズを選んでいきましょう。</p>
        <p>そもそも収納グッズはね、片付けの習慣を見直し始めて、<br class="u-only__pc">最後に選ぶものだと思うの。<br>だから、ここまでこられたということは、あと一息ということよ！<br>がんばりましょうね。</p>

        <h3>何のために収納グッズを用意するか、整理してみて</h3>
        <p>まず、収納グッズを用意する前に、その収納は何を実現したいのかよく考えてみて。<br> そして、その目的を解決してくれる収納グッズを選んでいくの。
        </p>
        <p>
          <strong>使い勝手をアップさせたい？</strong><br>例えば、キッチンのように…作業効率が大事な場所では
          <br> キッチン用品や食器の使い勝手をアップさせたいわよね。
        </p>
        <p>
          そういう時には、<strong class="red">使いやすい・出し入れしやすい・移動させやすい、</strong>ということが<br class="u-only__pc">収納グッズを選ぶポイントになるわ。
        </p>
        <p>
          <strong>収納力をアップさせたい？</strong><br>例えば、クローゼットのような、限られた空間をうまく使う必要がある場所では、<br class="u-only__pc">収納力をアップして、家族みんなの洋服を収納したいわよね。<br>日々、量が増えがちな本や子どものおもちゃなども、<br class="u-only__pc">リビングなどであふれかえったりしないよう、しっかり収納しておきたいところ。
        </p>
        <p>

          そういう時には、<strong class="red">空間を有効利用できるような収納グッズ</strong>が最適になるわ。</p>
        <p>
          こんなふうに、<strong class="red">収納の目的を考えれば、<br class="u-only__pc">どんな収納グッズが必要になるかが分かってくる</strong>のよ。</p>
        <p>
          収納グッズは、「収納」するためのものよね。<br>かわいいからなど、見た目をキレイにするという目的にしてしまうと、<br class="u-only__pc">逆に使いにくかったりすることもあるの。
        </p>
        <p>

          もちろん、かわいい収納グッズを使って上手に収納している人もいるけれど<br class="u-only__pc">サクラのように片付けが苦手な人には、まだちょっと早いかもね！
        </p>
        <p>

          新しく収納グッズを買うのであれば、次のような収納グッズは注意が必要よ。</p>
        <p>
          <strong>・オシャレだけど、扱いにくい<br>・フタがたくさんついている<br>・収納が重なるなどして、下の物や奥のモノが取りにくい</strong>
        </p>
        <p>

          収納グッズだって、モノの一つなの。<br> 購入したらお金もかかるし、使わなくなったらジャマになる可能性もあるんだから<br class="u-only__pc">選ぶ時にはきちんとイメージしながら慎重にね！
        </p>


        <h3>収納選びの基本は「四角い形」よ！</h3>
        <p>では、どんな収納グッズを選べばいいのか？ってことが気になるわよね。<br> 収納グッズを選ぶポイントは次の４つよ。
        </p>

        <div class="numArea">
          <ul>
            <li>四角い形のモノ</li>
            <li>ゴールデンゾーン（目線から腰の位置くらいまで）に近づけてくれるモノ</li>
            <li>色や素材のテイストを揃える</li>
            <li>100円ショップを活用してコスト削減</li>
          </ul>
        </div>

        <p><strong class="red">四角い形は、デッドスペースを生みにくくするから収納グッズ選びの基本</strong>よ。</p>
        <p>

          ゴールデンゾーンっていうのは、手に触れやすい高さのこと。<br> 大体、目線の高さから腰くらいの位置のことを指すわ。
        </p>
        <p>

          高い位置に収納するものには、取っ手付きなど、<strong class="red">取り出しやすい収納グッズ</strong>を選ぶの。<br> そして低い位置に収納するものには、<strong class="red">キャスター付きの収納グッズ</strong>などを選ぶの。
          <br> こうすることで、手に触れやすくなるから
          <br> 使い勝手もよくなるというわけよ。
        </p>
        <p>
          同じ収納グッズをシリーズで揃えると、テイストが揃うから、よりスッキリするわ。<br> 私はいつも白で統一するようにしているのよ。
        </p>
        <p>
          とは言っても、数を揃えるとなると、お値段も気になるところよね。<br>「高い場所で使う」「重いモノをいれる」「積み重ねて使う」 <br class="u-only__pc">といった負荷のかかる収納には、丈夫な収納グッズが向いているけれど、<br class="u-only__pc">それ以外の収納は、100円ショップの収納アイテムもオススメよ。
        </p>
        <p>
          あと収納グッズを使ったら、中身をラベルに書くなどして<br class="u-only__pc"><strong class="red">ラベリングすることを忘れないようにね</strong>。<br>中身の「見える化」をすれば、もっと分かりやすくて、使いやすくなるわ！
        </p>

        <p>それから、収納グッズを用意する前に忘れてはいけないことが1つ！<br><strong class="red">収納グッズを置くスペースを、事前にしっかりと把握しておく</strong>こと。<br>せっかく買ってきた収納グッズが、サイズが合わなくておさまりきらないなんて、<br class="u-only__pc">目も当てられないわ。</p>
        <p>リビングやキッチン、それからクローゼットなど、<br class="u-only__pc">種類やサイズが豊富な収納グッズはいろいろな場所で使えるのが魅力。<br>でもその分、買おうとしている収納グッズや、置く予定のスペースのサイズを、<br class="u-only__pc">あらかじめしっかり測っておくのを忘れずにね。</p>

      </div>
    </section>

    <section class="main__wrapper">
      <div class="wrapper narrow">


        <div class="talk">
          <p class="w95 center">　　…　 収納グッズを買い物中　 …</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>ねぇねぇ！<br>これなんかシンプルでいいんじゃない？</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
          </figure>
          <p>サイズも色々あって使いやすそうだね<br>お義母さんのレッスンをちゃんと意識してるじゃん！</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>フフフ…雑誌デビューもそろそろかしらね…フフフ…</p>
        </div>

        <div class="center mb3">
          <img
            data-src="../../lib/img/magazine/comic01/vol14/img01.jpg"
            data-retina="../../lib/img/magazine/comic01/vol14/img01@2x.jpg"
            alt=""
            style="max-width: 740px;"
            class="u-img__max"
          >
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sho02@2x.png">
          </figure>
          <p>ちょっと買いすぎだってば！！<br>また、何でも買いすぎるんだから～</p>
        </div>

        <div class="intro mb6">
          <p>収納グッズを変えるだけで、クローゼットの中や収納棚の中がこんなに変わるなんてビックリ！白で統一したんだけど、清潔感があって、使いやすいんだ。でも、調子にのると収納グッズを無駄に買いすぎちゃうから気を付けないと！〝気が付くと、また元通り～″なんて絶対イヤ！だものね</p>
        </div>

      </div>
      <!-- //wrapper -->


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
