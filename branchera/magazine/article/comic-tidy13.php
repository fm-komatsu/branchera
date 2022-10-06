<?php
//base
include( "../../function.php" );
$content = get_id_data( '12013' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '片付けの専門家が監修！片付けられない家族を救うためのマンガコラム。第13話はついクセでちょい置きをしてしまい片付けできないモノの収納場所や収納方法をご紹介します。';
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
      <p>片付け上手なお母さんの教えもあって、何とか部屋も片付いてきたんだけど、昔からの片付けないクセがどうも直らないんだよね。ちょっと気が緩むと、またいつものようになっちゃうんだけど。これってどうしたらいいのかな～…。</p>
    </div>

    <p style="text-align: right" class="mb4">&raquo; 前回はこちら<a href="comic-tidy12.php">「いつの間にか散らかる…片付いた部屋を維持するコツとは？」</a>
    </p>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
      </figure>
      <p>「お家に到着～」</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
      </figure>
      <p>みぃちゃん、大きな公園は楽しかった？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>楽しかった！また行きた～い！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>みぃちゃん、元気すぎだよ…<br>ほら、帽子とって（ポイッ）</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
      </figure>
      <p>お、チラシ入ってたよ<br>新しくファミレスできるんだって（ポイッ）</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>へぇ～、近くていいね～！<br>あら、みぃちゃん汗びっしょりだ…<br>着替えちゃおっか（ポイッ）</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
      </figure>
      <p>さっき買った雑誌<br>とりあえずここ置いとくね（ポイッ）</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>もぉ、みぃちゃん！<br>お人形さんはあとでね…（ポイッ）</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
      </figure>
      <p>ちょっと待ったーーー！！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>え？なに？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho02@2x.png">
      </figure>
      <p>うわっ！お義母さん、もうメガネモード…</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
      </figure>
      <p>ちょっと、あなたたち！<br>さっきからポイポイポイポイポイって<br>ソファや床に置いちゃって！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>ポイポイポイポイっ♪</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
      </figure>
      <p>そうやってちょい置きするから、<br class="u-only__pc">片付けるのが面倒になるのよ！</p>
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
        <h3>ちょい置きは、散らかりの元よ！</h3>
        <p>脱いだ服や洗濯物、買ってきたモノなどを<br>とりあえず床に置いたり…
          <br>外出から戻ってきて、上着をソファに置いちゃったり…
        </p>
        <p>

          毎日、無意識にやっている、あまりよくない習慣ね。<br>まずはちょっと一息入れたかったり、<br class="u-only__pc">面倒に感じる気持ちも分からなくもないけれど、<br> 結局、<strong class="red">あとであとで…って溜まってしまう</strong>のよね。
        </p>
        <p>

          とは言っても、「ソファに置いてはダメ」なんてルールを決めても<br class="u-only__pc">いきなり習慣を変えるのは難しいだろうから、<br class="u-only__pc">収納方法を工夫してみてはどうかしら？
        </p>
        <p>

          たとえば、上着をソファに置いてしまうなど、ちょい置きのクセがあるならば、<br class="u-only__pc">ソファや椅子の近く、または帰宅動線上に<strong class="red">上着の収納上着の収納場所をつくる</strong>のよ。<br>帰宅動線というのは、 玄関からひと通り荷物を片付けて<br class="u-only__pc">くつろぐまでの行動の道筋のことね。
        </p>
        <p>

          そうすると、くつろぐスペースに行く前に<br>上着を収納することができるから、いつもの行動をちょっと変えるだけで済むのよ。
        </p>

        <h3>アクション数を減らして「脱・ちょい置き」</h3>
        <p>サクラやショウくんは、ちょい置きのクセが結構あるみたいだから、<br class="u-only__pc"><strong class="red">アクション数の少ない収納がオススメ</strong>ね。
        </p>
        <p>
          上着だけじゃなくて、みぃちゃんの帽子やバッグとか毎日使うモノは、<br class="u-only__pc">いっそのこと見える収納にして 片付けやすくするとラクになるわ。</p>
        <p>

          見える収納だと、クローゼットを開けて…といった<br> ワンアクションが減るから、ちょい置きのクセを変えやすくなるわね。
          <br> 習慣に合わせて、<strong class="red">モノの適正量や収納場所を考えることがポイント</strong>よ。
        </p>

        <h3>ちょい置きしにくくなる場所づくりをしましょう！</h3>

        <p>モノをちょい置きしてしまう人の心理や行動って、実は共通しているの。<br>それは日常的によく居る場所に置きがちなことと、<br class="u-only__pc">ちょうどいい高さに置き場所があると、つい置いてしまうこと。</p>
        <p>手元に持っている書類や洋服を「とりあえず」置きたいとき、<br class="u-only__pc">ちょっと回りを見回してみると、気軽における高さのテーブルがある、<br class="u-only__pc">なんてよくあるわよね。<br>リビングは生活していく中で、過ごす時間も多い場所だし、<br class="u-only__pc">ソファも「とりあえず」の置き場所にされがち。</p>
        <p>それから出入りで必ず通るときの玄関も注意ね。<br>下駄箱の上に、「とりあえず」郵便物を置いてしまうのは、<br class="u-only__pc">家中が散らかってしまう原因の1つよ。</p
        ><p>“「とりあえず」モノを置くこと”を少しでもなくすためには、<br class="u-only__pc">アクションの少ない収納をつくるほかにも、<br class="u-only__pc"><strong class="red">置き場所にちょっとした工夫をする</strong>というやり方もあるわ。</p>
        <p>例えば、今挙げたような玄関には、観葉植物や装飾品などのインテリアを飾って、<br class="u-only__pc">置き場所のスペースをつくらないようにしてあげるの。</p>
        <p>また、「とりあえず」モノを置いてしまうのは、その習慣ができているの。<br>習慣は、一度に大きく変えようとしてもダメよ。<br>少しずつ、変えていくつもりでいて。<br>たとえば、モノが散らかっているテーブルには、<br class="u-only__pc"><strong class="red">「ちょい置き」をしているモノの近くに収納場所を設ける</strong>と良いわ！</p>
        <p>こんなふうに、ちょい置き場所にちょうどいい高さのテーブルも、<br class="u-only__pc">普段からきれいにしておけば、<br class="u-only__pc">書類を置いたときに雰囲気が崩れることで、<br class="u-only__pc">罪悪感を抱くようになるんじゃないかしら？<br>率先して片付けようという気持ちになれば、<br class="u-only__pc">自然にモノは散らからなくなるはずよ。</p>
        <p>こんなふうに、ちょい置きしてしまいがちな場所に、<br class="u-only__pc">ちょっとした工夫を加えてみるのもオススメ。</p>

        <h3>判別が必要なものは「一次置きスポット」を作ってみて！</h3>
        <p>ちょい置きをなくしたいとはいえ、忙しい朝だったり、<br class="u-only__pc">判別が簡単にはできないモノがあったり、<br class="u-only__pc">なかなかすぐには整理ができないこともあるわよね。</p>
        <p>そういうときは、テーブルの近くに収納場所をつくるか、 <br class="u-only__pc"><strong class="red">「一時置きスポット」をつくって、あとで分類する</strong>という方法があるわ。</p>
        <p>

          小さなカゴやボックス、収納するモノは何でもいいのだけれど<br class="u-only__pc">一時置きスポットを使う場合には、ルールを決めることが大切よ。
        </p>

        <div class="numArea">
          <ul>
            <li>紙類の場合は、必要なものモノか・捨てるモノかを判断する</li>
            <li>元に戻すタイミングを決める</li>
          </ul>
        </div>

        <p>一時置きスポットにずっと置きっぱなしにしては、<br class="u-only__pc">部屋が片付いていないのと一緒よね。<br>だから、紙類の場合はそもそも必要なモノなのかを判断して、<br class="u-only__pc">不要な場合はすぐに捨てるようにするのよ。</p>
        <p>
          一時置きボックスに入れたモノを、<br class="u-only__pc"><strong class="red">正しい収納場所に戻すタイミングをきちんと決めておく</strong>こと。
        </p>
        <p>
          例えば、週末に…とか、みぃちゃんが寝たら…のように、時間で決めたり<br class="u-only__pc">ボックスに目印をつけて、それを超える量になったら片付ける…
          <br>といった方法もあるわね。
        </p>
        <p>「一時置き」のスポットづくりは、家以外でも役立つアイデアよ。<br>ショウくんなんかは、仕事場で活用してみるのもいいのではないかしら。</p>
        <p>
          ついやってしまいがちな「ちょい置き」だけど、<br class="u-only__pc">もし、そのクセを変えるのが難しいと思ったら<br class="u-only__pc"><strong class="red">収納場所や収納方法の工夫をしてみる、というアプローチの仕方</strong>も試してみて！
        </p>
        <p>子供は常に大人（親）の行動を見ているものよ。<br>サクラやショウくんもちょい置きのクセを直すように頑張って、<br class="u-only__pc">みぃちゃんの見本になってあげてね！</p>

      </div>
    </section>

    <section class="main__wrapper">
      <div class="wrapper narrow">


        <div class="talk">
          <p class="w95 center">　　…　 次の日　 …</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>ふぅ～ただいまーっと！<br>なかなか美味しかったね、あのファミレス！</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
          </figure>
          <p>子ども連れも多かったから<br>行きやすくていいよね<br>じゃぁ、俺はビールでもう一息いれようかなっと…</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>みぃちゃんは、お風呂に入って<br>ねんねかなっと…</p>
        </div>

        <div class="center mb3">
          <img
            data-src="../../lib/img/magazine/comic01/vol13/img01@2x.jpg"
            data-retina="../../lib/img/magazine/comic01/vol13/img01@2x.jpg"
            alt=""
            style="max-width: 740px;"
            class="u-img__max"
          >
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
          </figure>
          <p>しまった…また、いつものクセで…<br>ポイポイしそうになってた…</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
          </figure>
          <p>みぃちゃんのおかげで<br>「ちょい置き」のクセ、直せそうだね</p>
        </div>




        <div class="intro mb6">
          <p>長年のクセってそう簡単には直らないものだよね。でも、ちょい置きのクセに合わせて収納方法を変えるって、なんだか逆転の発想だし、これなら私のクセも直せるか…な？</p>
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
