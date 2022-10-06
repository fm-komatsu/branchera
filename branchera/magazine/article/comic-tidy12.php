<?php
//base
include( "../../function.php" );
$content = get_id_data( '12012' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '片付けの専門家が監修！片付けられない家族を救うためのマンガコラム。第12話はキレイに片付けた部屋を維持するコツをご紹介します。';
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
      <p>最近、片付け上手なお母さんのおかげで、いろいろなものが散らかり放題だった我が家も、お友だちを気軽に呼べるくらい部屋が片付いてきたんだ！もう完璧♪…と言いたいところなんだけれど。<br>根っから片付けが苦手な私、サクラにとって脱・散らかりなんてそんなに簡単ではないワケで…。</p>
    </div>

    <p style="text-align: right" class="mb4">&raquo; 前回はこちら<a href="comic-tidy11.php">「第11話　扇風機はどこに収納？家電の収納方法を伝授！」</a>
    </p>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
      </figure>
      <p>サクラ～！前に頼まれたみぃちゃんの洋服、<br class="u-only__pc">裾上げしておいたわよー</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>あー！ありがと、お母さん<br>そこのソファのところに置いといて！<br>今、みぃちゃんの歯磨き中！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>ゴシゴシしてんの～♪</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>はいはい…ママなんだから<br>裾上げくらい自分でできるように……<br>って、ちょっと！何！？この洋服の山！！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>あ、あぁ……<br>違うの！あとでまとめてやろうと思ってたの！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>キッチンも食器だらけじゃない！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>それも…夕ご飯の時にまとめて…</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>まとめるのー！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>せっかくキレイに片付いた部屋になってきたのに<br>どうして、こんなふうになっちゃうわけ！？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>なんか、先にやらなきゃいけないこととかあるからさ<br>後でまとめて片付けた方がいいかなぁ～…なんて</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>これは、完全にリバウンドしちゃってるわね</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>リバウンドってダイエットじゃないんだから…</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
      </figure>
      <p>片付けはダイエットと一緒よ！<br>元に戻らないためのコツを教えるわっ！</p>
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
        <h3>やろうと思っちゃダメ！無意識に元に戻すの</h3>
        <p>せっかく部屋が片付いてきたのに、日が経つにつれて<br>また元の散らかり放題の部屋になってしまう…<br>まるで引越してきた直後のような散らかり具合に…<br>なんていう経験は、片付けが苦手な人なら誰にでもあると思うの。
        </p>
        <p>
          でもね、<strong class="red">片付けってそもそもそんなに大がかりなことではない</strong>のよ。<br>片付けの考え方自体をちょっと変えて、<br class="u-only__pc">いつでも人を呼べるようなお部屋を目指すのよ！
        </p>

        <h3>大がかりな片付けとは、サヨナラ！</h3>
        <p>これまで、いろいろなモノを片付けてきたけれど、基本はいつも同じだったわね。<br> まずは整理をして、収納する場所を決めて効率的な環境を整えるの。
        </p>
        <p>
         そこまでできたら、片付けね。<br>
         <strong class="red">片付けってね、「元に戻すこと」なの。</strong>
        </p>
        <p>
          サクラみたいに溜めこむ人は、いつも大がかりな片付けばかりなの。<br>
          整理収納ができているなら、使ったモノをリセットするだけでいいはずなのよ。
        </p>
        <p>
          使ったモノは<strong class="red">元に戻して</strong>、買い物で追加されたモノも決まっている<strong class="red">定位置に片付ける</strong>、<br>
          そして、毎日寝る前に片付け忘れがないか<strong class="red">チェックする</strong>といいわね。
        </p>
        <p>
          例えば、テレビのリモコンを元の位置に戻したり、<br>テーブルに置かれたチラシやパンフレットなどの書類を整理したり、<br class="u-only__pc">床にモノが落ちていないかをチェックをしたり…。<br>そうすることで、一日の終わりに、部屋をリセットすることができるわ。
        </p>
        <p>
          中には作業途中のモノや、明日の朝すぐに使うモノもあると思うの。<br>
          でもね、そういう場合でも夜には一度リセットすることを忘れずに。<br>
          毎朝、キレイな状態を見ることで、片付いたお部屋をキープすることができるわ。
        </p>
        <p>
         <strong>・使ったら、元に戻す<br>
         ・買い物をしたら、定位置にしまう<br>
         ・一日の終わりに、部屋をリセットする</strong>
        </p>
        <p>
          そうは言いつつも、片付けを溜めこむタイプにとっては、<br> 「今日から毎日、きちんとしましょう！」と言われても
          <br> ちょっと難易度が高いかもしれないわね。
        </p>
        <p>

          でも大丈夫。片付けは、習慣なの。<br> １ヵ月がんばって習慣化してしまえば、きっとできるようになるわ！
          <br>最初は 意識しないと続けることが難しいかもしれないけれど、<br class="u-only__pc"><strong class="red">「片付けの習慣」</strong>ができれば、毎日歯磨きをするように…
          <br>無意識的な行動・当たり前の行動として、無理なく続けられるようになるのよ。
        </p>

        <div class="numArea">
          <ul>
            <li>溜めずにその都度やる！</li>
            <li>習慣化する！</li>
            <li>少しずつ、毎日続ける！</li>
            <li>家族に手伝ってもらう！</li>
          </ul>
        </div>

        <p>片付けを日課にして習慣化することができれば、大がかりな片付けからもサヨナラよ！</p>

        <h3>片付けのルーティンをつくりましょう！</h3>
        <p>片付けの習慣を身に付ける一番の近道は、<br class="u-only__pc">片付けのルーティンをつくってあげることよ。</p>
        <p>片付けのルーティンづくりでまず大切なのは、<br class="u-only__pc">毎日片づけのための<strong class="red">決まった時間をつくること</strong>。<br>たとえば夜寝る前に、10分間だけでも片付けの時間をつくって、<br class="u-only__pc">生活の一部にしてしまえば片付けも苦じゃなくなってくるわ。</p>
        <p>片付けタイムを設けても、どこから手をつけたらいいかわからない、なんてこともあるはず。<br>そんなときは片付けをする部屋の順番を決めておくことで、<br class="u-only__pc">さらに片付けのルーティンがつくりやすくなるわ。</p>
        <p>10分間の片付けタイムの中で、<br class="u-only__pc">キッチン、リビング、玄関、寝室の<strong class="red">順番で片付けをしていく</strong>、なんて良いかもね。<br>ゴールを寝室にすることでそのまま就寝もできるから、<br class="u-only__pc">スムーズに片付けを終えることができるわ。</p>
        <p>この毎日の片付けタイムの間は、ぜひ<strong class="red">家族にも協力してもらう</strong>ようにしましょう。<br>自分の部屋を持っている子どもがいる場合は、<br class="u-only__pc">その片付けタイムを使って片付けの習慣を身につけてもらえれば、<br class="u-only__pc">のちの家事も楽チンに。</p>
        <p>サクラの場合は、ショウくんと一緒に片付けを進めてみてね。<br>みぃちゃんも、もう少し大きくなったらサクラたちのことを手伝ってあげて。</p>
        <p>日々の片付けタイムを設けるほかにも、物置や押し入れなど、<br class="u-only__pc">大きなモノがしまってある場所のチェックも忘れずに。<br>さすがに毎日は大変だから、半年おきなどの無理のない期限を設けて、<br class="u-only__pc"><strong class="red">定期的にチェックする習慣</strong>を身に付けておきましょう。</p>
        <p>部屋が散らからないためにできる工夫の1つとして、<br class="u-only__pc">モノは使ったらすぐ戻す、不要なモノはすぐ捨てるなど、<br class="u-only__pc">基本的なルールを決めておくのもオススメよ。</p>
        <p>また、日常的に使っているモノのほかにも、<br class="u-only__pc">たとえば急に届いた荷物やプレゼントを受け取ることもあるわよね。<br>普段使っているモノとは違うイレギュラーなアイテムも、1週間以内など、<br class="u-only__pc">一定の期間を定めて片付けるようにしましょう。</p>
        <p>なかなか捨てられないアイテムの判断も、保留を引き延ばし続けずに、<br class="u-only__pc"><strong class="red">1週間以内を目安に期限を決めて判断</strong>するようにすること。</p>
        <p>片付けのルーティン化は、片付けを習慣にできる効果的な方法よ！<br>ぜひ実践してみてね。</p>


        <h3>大きな家事から小さな家事に意識を変えるのよ！</h3>
        <p>年末にやる大掃除って、毎日の掃除よりも「さぁ、やるぞ！」っていうヤル気がいるわよね。<br> しかも、普段掃除していない場所は汚れも取りにくいし、いつも以上に時間がかかっちゃう。
        </p>
        <p>

          ということは、家事は溜めると雪だるま式に大きな家事（大仕事）になって<br> 「さらなるヤル気」が必要になるものなの。
        </p>
        <p>

          でも、<strong class="red">小さな家事はもっと気軽に無意識的にやることができるわ。</strong>
        </p>
        <p><strong>・鍋やキッチン道具は、料理のついでに洗って、片付ける<br>・洗濯物は取り込むついでに畳んで、片付ける</strong></p>

        <p>
          …とか、家事をセットにして習慣化してしまうと続けやすいわよ。</p>
        <p>

          そんな効率的にできない！と思うなら<br> 一日の小さな家事を書き留めて、<strong class="red">隙間時間</strong>にやるという方法もオススメ。
          <br> リストアップしておくと、忘れにくいものね。
        </p>
        <p>

          最初は、すべての片付けを完璧にこなさなくても大丈夫。<br> できることから、続けることが大切なの。
          <br> それに、自分ひとりで抱え込まないで、家族に手伝ってもらうのも一つの方法ね。
        </p>
        <p>
          <strong>・洗濯物は各自でたたむ<br>
					・食後はキッチンまで食器を運んで、桶などにつけ置きまでする<br>
          ・使ったら、元に戻す</strong>
        </p>
        <p>

          こんなふうに、簡単なことから手を借りるといいわね。<br> これまでやってきた整理収納の仕組みができていると、<br class="u-only__pc">片付ける場所に困らないから、家族も習慣化しやすくなるわよ！
        </p>
        <p>片付けが習慣化することで、以前は気づかなかったことにも気づけるかも。<br>たとえば、モノを片付けるときに不便な部分があることに気づいて、<br class="u-only__pc">模様替えをした結果、さらに生活が楽になる、なんてこともあるかもね。</p>

      </div>
    </section>

    <section class="main__wrapper">
      <div class="wrapper narrow">


        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>毎日…コツコツ…<br>これが苦手だったんだけど<br>そっか、元に戻すって考えればいいんだ</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
          </figure>
          <p>そうよ！これまでの整理収納で<br>片付ける場所は決まってるでしょ？</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>確かに！<br>これまでは、どこに片付ければいいか分からずに、<br class="u-only__pc">その辺に置いちゃってたんだ…</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
          </figure>
          <p>たしかにぃ～♪</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>そうと分かれば…<br>なんだかヤル気がでてきたぁー！！</p>
        </div>


        <div class="center mb3">
          <img
            data-src="../../lib/img/magazine/comic01/vol12/img01@2x.jpg"
            data-retina="../../lib/img/magazine/comic01/vol12/img01@2x.jpg"
            alt=""
            style="max-width: 740px;"
            class="u-img__max"
          >
        </div>

        <div class="intro mb6">
          <p>これまでは、まとめて一気に片付けて…でも結局、モノが溜まりすぎてヤル気がでなくて…そんなことの繰り返しだったの。でも、元に戻す・リセットって考えれば、ちょっとは続けられるかな～…まだまだ不安なんだけど、まずは今日からやってみよっと！</p>
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
