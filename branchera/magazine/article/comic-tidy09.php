<?php
//base
include( "../../function.php" );
$content = get_id_data( '12009' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '片付けの専門家が監修！片付けられない家族を救うためのマンガコラム。第9話はついつい増えてしまいがちな趣味のマンガやゲームなどの収納方法をご紹介します。';
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
      <p>足の踏み場もないくらいモノが溢れていた我が家が、片付けが得意なお母さんによって、かなり変わってきているんだ！でも、まだ何か部屋にいろいろなモノがあるんだよな～って思ったら、パパのマンガがあっちこっちにあることに気づいたの！趣味はわかるけど、これも何とかしたいな…</p>
    </div>
    <p style="text-align: right" class="mb4">&raquo; 前回はこちら<a href="comic-tidy08.php">「第8話　おもちゃ片付けでご機嫌取り！？」</a>
    </p>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>ただいまー！</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>みぃちゃん、おかえりー！<br>パパと公園、楽しかった？</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>たのしかったー！</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>ん…？<br>ちょっとパパ！またマンガ買ってきたの？</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
      </figure>
      <p>いやぁ～ちょうど集めているマンガの新刊が出てさー</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>もう…ただでさえマンガやらゲームやら多いのに、<br class="u-only__pc">パパったら、寝室とかリビングに置きっぱなしにするしさー</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>ショウくん…残念ながら<br class="u-only__pc">ちょうど今ショウくんの趣味のモノを<br class="u-only__pc">片付けていたところなのよ…</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho02@2x.png">
      </figure>
      <p>…お義母さんが片付け方法を伝授してくれた時から<br class="u-only__pc">いつかこんな日がくると思っていました…</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>大げさなんだから…<br>私だって、昔のブランド品とか手放したんだよ</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho02@2x.png">
      </figure>
      <p>ゲームとマンガ…、そろそろ卒業なのかなぁ…</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
      </figure>
      <p>そんなことないわ！趣味は大事な息抜きよ！<br>片付けは、暮らしを豊かにするものなんだから<br>ちゃんとルールを決めれば大丈夫！</p>
    </div>
    </section>
    <section class="comic-pink kaasan">
      <div class="wrapper">
        <p class="teach">
          <img data-src="../../lib/img/magazine/comic01/img02@2x.png" data-retina="../../lib/img/magazine/comic01/img02@2x.png"
            alt="お母さんからのアドバイス" style="" class="u-img__max">
        </p>
        <h3>趣味のモノは増えすぎに注意よ！</h3>
        <p>趣味って人それぞれ、いろいろなモノがあるわよね。<br>ショウくんみたいに、ゲームやマンガ。ゴルフやフットサルのようにスポーツ系の趣味。<br>キャンプや釣りとか、アウトドア系も多いわよね。</p>
        <p> 趣味のモノを充実させたいけれど、家の広さにも限りがあるわ。<br> 今回は、<strong class="red">趣味のモノをどうやって整理するか</strong>、教えるわよ！ </p>
        <p> まず、いつものように<strong class="red">適正量</strong>から考えていくわよ。<br> 趣味のモノは、
          「気に入ったから」と、ついつい新しく買って、モノを増やしたりしがち。モノが増えすぎないように、使うか・使わないかを判断して、モノの整理をしていくのよ。 </p>
        <div class="numArea">
          <ul>
            <li>1年使っていないモノは手放す</li>
            <li>趣味のモノはこの部屋・この収納スペースだけと空間で決める</li>
            <li>趣味にかける時間はどれくらいあるのか？といった視点で決める</li>
          </ul>
        </div>
        <p>このように、定期的に整理をするように意識すると趣味のモノが増えすぎないようになるわ。</p>
        <p>それに、趣味のモノは意外に高値で売れる場合もあるから、<br class="u-only__pc"><strong class="red">使わないなら売る</strong>という手段もあるわね。</p>
        <h3>同じ趣味のモノはまとめて集中収納！</h3>
        <p>適正量が決まったら、次は収納ね。<br>ショウくんのゲームの場合、売る予定がないお気に入りのモノは、<br class="u-only__pc">プラスチックのパッケージを外して、本型になった<strong class="red">CDケースに<br
            class="u-only__pc">ディスクだけを収納</strong>するのはどうかしら？ </p>
        <p>それだけで、収納スペースはグッと節約できるし、<br class="u-only__pc">取り出しやすくなって、管理もしやすいわよね。</p>
        <p>カード型の小さなゲームソフトの場合は、<br class="u-only__pc"><strong class="red">専用の収納ケース</strong>もあるから、探してみてもいいかもしれないわね。</p>
        <p>できれば、パッケージは手放してほしいところだけれど<br class="u-only__pc">どうしても残しておきたい場合は、高い位置や押入れの奥とか 、<br class="u-only__pc">普段あまり使わないところに収納するといいわね。</p>
        <p>そして、趣味のモノを収納するポイントは、<br class="u-only__pc"><strong class="red">趣味ごとに一カ所にまとめて保管をしておくこと！</strong><br>いろいろな場所で使うモノについても、使用中のモノ以外は集中収納するの。</p>
        <p>例えば、今、読んでいる最中のマンガだけにして、<br class="u-only__pc">部屋の中に読みかけの本の<strong class="red">定位置を確保</strong>するの。<br>残りはまとめて収納するわけ。</p>
        <p>そうすることで、今もっているモノの数が把握しやすくなるし、<br class="u-only__pc">適正量も意識しやすくなるわ。<br>まとまっていることで、使う時も出し入れしやすくて便利ね。</p>
        <p>例えば…<br>ゴルフやテニスなどのスポーツ系の場合は、道具とウェアを一緒に。<br>キャンプなどのアウトドア系の場合は、キャンプ用品とバーベキュー用品を一緒に。<br>というように、集中収納してみてね。</p>
        <h3>収納するモノに合った収納場所を目指して！</h3>
        <p>ショウくんが日常的によく取り出すことの多いマンガやゲーム類などは、<br class="u-only__pc">本棚を用意したり、カラーボックスに立てたりして、<strong class="red">見やすく収納</strong>していきましょう。</p>
        <p>新しく棚やカラーボックスを用意するときは、<strong class="red">サイズに注意</strong>して、<br class="u-only__pc">マンガやゲームがしっかり収まるか、<br class="u-only__pc">また、収納スペースが広すぎないかを確認してね。</p>
        <p>せっかくアイテムを使って収納しようとしても、<br class="u-only__pc">アイテムが無駄にスペースを取ってしまったらもったいないものね。</p>
        <p>収納するモノの適正量を把握するのが大切と伝えたけれど、<br class="u-only__pc"><strong class="red">適正なサイズの収納アイテムを用意する</strong>のも、同じくらい大切なの。</p>
        <p>もし市販のモノでちょうど良いサイズの棚がなければ、<br class="u-only__pc">自分でDIYしてしまうのもアリね。<br>棚をつくるくらいなら、必要な道具は100円ショップでも簡単にそろうから、<br
            class="u-only__pc">休日を利用して、家族でつくってみるのはどうかしら。</p>
        <p>日常的に取り出すマンガやゲームのほかにも、<br class="u-only__pc">「これは大切だからとっておきたい」<br class="u-only__pc">「いつか読み返したくなるモノだから保管しておきたい」<br
            class="u-only__pc">そのような種類のマンガやゲームもあるわよね。<br>そういうときは保管用にスペースを取って、<br class="u-only__pc"><strong class="red">フタ付きのケース（箱）</strong>で収納してあげましょう。</p>
        <p>フタ付きケース（箱）は、あくまで保管用のマンガやゲームを<br class="u-only__pc">収納するときにオススメのアイテムよ。<br>よく使うマンガやゲームをフタ付きケース（箱）にしまってしまうと、<br
            class="u-only__pc">片付けが面倒になり、部屋が散らかってしまう原因になるから、併用は注意して。</p>
        <p>マンガを収納するときの注意点は「湿気」。<strong class="red">湿気対策</strong>をしっかりしてね。<br>特に段ボールは湿気を含みやすいから、<br class="u-only__pc">もし収納ケースとして使うときは、乾燥材や除湿剤などを一緒に入れておくこと。</p>
        <p>それから、よく取り出す種類のマンガを収納する棚は、<br class="u-only__pc">なるべく陽の当らない場所に置くこと。<br>日差しもマンガには大敵よ。<br>せっかくの大切なマンガを、日焼けさせてしまいたくはないものね。</p>
        <p>ゲームを収納するときは、<br class="u-only__pc">テレビやゲーム機器などのハードと<strong class="red">一緒に収納</strong>するのがオススメよ。<br>ゲームをするテレビから離れた場所に収納してしまうと、<br class="u-only__pc">終わったあとに片付けるのが面倒になって、散らかる原因になることがあるわ。</p>
        <p>テレビの近くやゲーム機器と一緒に収納しておけば、<br class="u-only__pc">目的のゲームも見つけやすいし、すぐに遊ぶことができるわね。<br>いつか、みぃちゃんも好きなゲームができたときに、<br
            class="u-only__pc">この収納方法なら、片付けの習慣が身につくはず。</p>
        <h3>飾って楽しむモノは、空間を元に適正量を決めてみて！</h3>
        <p>ショウくんはマンガやゲームが好きみたいだけど、<br class="u-only__pc">フィギュアやプラモデルを集めたりはしていないのかしら？<br>趣味の中には、使うのではなく、収集系の趣味もあるわよね。</p>
        <p>そのように飾って楽しむ種類のモノは、ガラス扉の棚などに入れて保管するといいわよ。<br>その時のポイントは、<strong class="red">ここに入るモノだけれど、スペースからの適正量を意識</strong>することね。<br>増やしたい気持ちはわかるけれど、大事なモノが部屋の中で乱雑に置かれることで
          <br class="u-only__pc">破損したり、ケガにつながったら、嫌だものね。</p>
        <p>趣味のアイテムは、「好き」とか「ときめき」の感情から購入することも多いはず。<br>大事なモノなら、愛着をもって保管してあげてね！</p>
      </div>
    </section>
    <section class="main__wrapper">
      <div class="wrapper narrow">
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
          </figure>
          <p>スゴイ！<br>あのゲームの山がパッケージを取るだけで、<br class="u-only__pc">片手に収まっちゃったよ</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>マンガも集中収納で<br class="u-only__pc">かなりスッキリしたね…って、アレ？パパ？</p>
        </div>
        <div class="center mb3">
          <img data-src="../../lib/img/magazine/comic01/vol09/img01.jpg" data-retina="../../lib/img/magazine/comic01/vol09/img01@2x.jpg"
            alt="" style="max-width: 740px;" class="u-img__max">
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
          </figure>
          <p>なんか…<br>今度はここに引きこもりそうな気が…</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
          </figure>
          <p>毎日お仕事を頑張ってくれているんだもの<br>たまにはこういう息抜きもいいんじゃない？</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
          </figure>
          <p>いいんじゃなぁ～い♪</p>
        </div>
        <div class="intro mb6">
          <p>これまでいろいろな場所を占めていた、パパのマンガとゲームが、こんなにコンパクトに片付けられるなんて！整理してからというもの、パパもちゃんとルールを守ってくれているみたい！<br>そうやって、家族みんなで意識すると、何だか続けられそうな気がするなー</p>
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
