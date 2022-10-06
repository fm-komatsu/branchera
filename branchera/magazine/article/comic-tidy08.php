<?php
//base
include( "../../function.php" );
$content = get_id_data( '12008' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '片付けの専門家が監修！片付けられない家族を救うためのマンガコラム。第8話は興味が変わりやすく増えてしまった子どものおもちゃの片付け方法をご紹介します。';
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
      <p>部屋の片付けに奮闘中の私サクラは、片付け上手なお母さんに教わって、キッチンやクローゼットが片付いてきたところなんだ。でもせっかく片付けても3歳の娘のみぃちゃんが、またグチャグチャにしちゃうんだよね…。みぃちゃんのおもちゃも増える一方なんだけど、何とかならないかな～</p>
    </div>
    <p style="text-align: right" class="mb4">&raquo; 前回はこちら<a href="comic-tidy07.php">「第7話　ストック品収納をマスターして買い物上手に！」</a>
    </p>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
      </figure>
      <p>あら、みぃちゃん♪<br>今日はすべり台やってるの？い～ねぇ～♪</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>ばぁばー！あそぼ、あそぼぉー♪</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>さっきまで大人しく絵本を読んでいたんだけど、<br class="u-only__pc">急に元気に走りまわりだしてさー</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
      </figure>
      <p>いいのよ、いいのよ<br>子どもは元気が一番よ！</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>ばぁば、おみせやさんごっこしよー！</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>言ってるそばから、次はこっちか…<br>みぃちゃん！もう絵本はいいのね？<br>本棚にお片付けするよ？</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>イヤッ！えほんもいるの！</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>なに…じゃあ、すべり台片付けるか…<br>場所もとるし…</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>ママぁ～、ダーメ！！</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>もう～、みぃちゃんはいつもこんな感じなんだよ<br>おもちゃを全部出しておきたいんだよね</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
      </figure>
      <p>いろいろなことに興味あって<br class="u-only__pc">みぃちゃんはエライねぇ～♪</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>え…えぇ！？</p>
    </div>
    <div class="center mb3">
      <img data-src="../../lib/img/magazine/comic01/vol08/img01.jpg" data-retina="../../lib/img/magazine/comic01/vol08/img01@2x.jpg"
        alt="" style="max-width: 740px;" class="u-img__max">
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>お母さん！<br>みぃちゃんのおもちゃの片付け方もちゃんと教えてよぉー</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
      </figure>
      <p>んもぉ！せっかくみぃちゃんと遊んでいたのに、仕方ないわね！<br>みぃちゃんも一緒にできる、お片付け方法を教えるわ！</p>
    </div>
    </section>
    <section class="comic-pink kaasan">
      <div class="wrapper">
        <p class="teach">
          <img data-src="../../lib/img/magazine/comic01/img02.png" data-retina="../../lib/img/magazine/comic01/img02@2x.png"
            alt="お母さんからのアドバイス" style="" class="u-img__max">
        </p>
        <h3>おもちゃは、ブームに合わせて出しわけ！</h3>
        <p>子どもにとって、おもちゃは大切な遊び道具なんだけれど、<br class="u-only__pc">私たち主婦にとっては、形も大きさもバラバラで、なかなか片付けにくいモノのひとつよね。</p>
        <p>でも、おもちゃも絵本も、基本的な片付け手順は一緒よ！<br>まずは、おもちゃの <strong class="red">「適正量＝子どもが遊びきれる量」</strong>をベースに考えていくわよ。</p>
        <p>子どもって、みぃちゃんみたいに、興味の度合いがコロコロと変わるわよね。<br>一時期すごく遊んでいたおもちゃを急に使わなくなったり、<br class="u-only__pc">見なくなった絵本を急に読みだしたりと…<br>おもちゃや絵本って、子どもなりのブームがあるものなの。</p>
        <p>だから、おもちゃを整理するポイントは、<br class="u-only__pc">興味のないモノすべてを手放すわけではなく<strong class="red">「隠す」こと。</strong></p>
        <p>3歳のみぃちゃんには、自分から何がブームなのか「整理」することはできないわよね。<br>だから、どんなおもちゃで遊んでいるのかをママ目線で判断して、<br class="u-only__pc"><strong class="red">「今、興味のあるモノ」だけをおもちゃコーナーに残してあげる</strong>の。</p>
        <p>残りのおもちゃは収納スペースの上部などに保管しておくのがオススメ。</p>
        <p>そうやって整理することで、遊ぶ時には今ブームのモノだけが残るから、<br class="u-only__pc">おもちゃの数が減ることで、<strong class="red">探しやすく戻しやすくなる</strong>のよ。</p>
        <p>絵本の場合は、夏の間はクリスマスの本を隠しておいたり、<br class="u-only__pc">子どものブーム以外に季節感も考えるといいかもしれないわね。 </p>
        <h3>おもちゃ収納はざっくりでOK！</h3>
        <p>おもちゃの収納方法は、ざっくりと考えていくのがポイント。<br>だいたい<strong class="red">1～2アクションで出し入れできる</strong>状態にすると便利よ。</p>
        <p>収納ボックスの中を細かく<strong class="red">仕切ったりはせず、ざっくり分類</strong>していくの。<br>例えば、ぬいぐるみ系・おままごと系というように、<br class="u-only__pc">
          ジャンルごとに分けて、フタ付きの箱やボックスにポンポンと入れていってね。</p>
        <p>おもちゃを収納するボックスは、<strong class="red">浅くて開口が広い</strong>のを選ぶと<br>おもちゃ全体を見渡せるし、子どもにとっても使いやすいわね。<br>できれば、重くなくて、角が丸いものや柔らかい素材だと安全ね。</p>
        <p>絵本の場合は、オフィスで使うファイルボックスを活用して、<br class="u-only__pc">６～10冊程度をひとまとまりにして収納すると、本が倒れにくくなるわ。<br>子どもは、絵本の表紙が見える方がより興味を持つから、<br
            class="u-only__pc">数冊は飾るように並べて、数週間単位でローテーションしてみるのもオススメよ。</p>
        <h3>DIYでおもちゃの片付けもちょっと楽しく！</h3>
        <p>DIYが得意な人は、手作りの収納アイテムを用意するのはどうかしら。<br>“手作り”ということで、子どもも喜ぶかもしれないわね。</p>
        <p>例えば、すのこを組み合わせてラック（棚）をつくってあげて、<br class="u-only__pc">収納しやすいようジャンルごとに、かごやプラスチックケースを置いてあげる、<br class="u-only__pc">なんてお手軽でいいんじゃないかしら。<br>すのこ自体、それほど長さのあるモノじゃないから、<br
            class="u-only__pc">子どもがおもちゃを取り出すための<strong class="red">収納アイテムには最適</strong>なの。</p>
        <p>今紹介したような、すのこ・かご・プラスチックケースは、<br class="u-only__pc">ぜんぶ<strong class="red">100円ショップでそろえられるモノ</strong>だから、<br class="u-only__pc">経済的にもそれほど負担にならないわよ。<br>子どもの収納棚とか、一時期しか使わないような家具にはオススメだわ。</p>
        <p>引き出しになるケースの表面に、イラストや写真やシールなどを貼ってあげて、<br class="u-only__pc">子どもにも中身がわかるようにしてあげると、さらに良いわね。<br>子どもが後で、自分でおもちゃを片付けるときも、<br
            class="u-only__pc">どこに何をしまえばいいか、すぐにわかるわ。</p>
        <p>元々仕切りがあるカラーボックスをそろえて、<br class="u-only__pc">おしゃれなフタをDIYで取り付ける、なんて方法もアリよね。<br>カラーボックスは子どもにも危なくないよう、横に寝かせてあげれば、<br
            class="u-only__pc">より使い勝手が良いモノになるわ。</p>
        <h3>小さな子どもは心配？</h3>
        <p>小さな子ども、例えば年齢が2歳から3歳くらいの子は、<br class="u-only__pc">ケースの間に指をはさんでしまう、なんて心配もあるわよね。<br>そういうときは<strong class="red">巾着や袋</strong>を用意してあげるのがオススメよ。<br>布類なら指をはさみそうなケース類よりも危なくはないし、<br
            class="u-only__pc">子どもがモノを片付ける習慣も、早いうちから身につけることができるわ。</p>
        <p>片付けデビューに、いつからという決まりはないけれど、<br class="u-only__pc">子どもが早いうちから片付けを覚えてくれたら、<br class="u-only__pc">親としてもうれしいものよね。</p>
        <p>他にも子どもの好みに合わせる、なんていう作り方もあるわ。<br>男の子だったら、大好きな電車のおもちゃが飾れるような収納にしてあげたり、<br class="u-only__pc">女の子なら、ぬいぐるみや絵本も飾っておけるようなアイテムをつくってあげると、<br
            class="u-only__pc">片付けも遊びの延長みたいに、楽しく済ませられるかも。<br><strong class="red">アイデアは無限大</strong>よ！</p>
        <p>サクラやショウくんのように大人でも苦戦している片付け。<br>子どもだって、片付けが面倒くさいと思って当然よね。<br>そんな片付けを少しでも楽しいものにするために、<br class="u-only__pc"><strong class="red">DIYでオシャレな収納アイテムをつくる</strong>のがおすすめよ！</p>
        <h3>子どもと一緒にお片付けを実践してみて！</h3>
        <p>片付けというのは、<strong class="red">使ったモノを元の位置に戻す</strong>こと。<br>だから、3歳のみぃちゃんだって、戻す位置がきちんと決まっていれば、<br class="u-only__pc">片付けることはできるのよ！</p>
        <p>でも、そのためには<strong class="red">片付ける場所が片付けやすくなっている</strong>ことが条件。<br>モノの数が絞られ、子どもでも簡単に扱える収納ボックスになっていれば、<br class="u-only__pc">みぃちゃんにも片付けはできるというわけね。<br>サクラもみぃちゃんと一緒にやってみたら？</p>
        <p>小さい時期から「使うか？使わないか？」を考える機会があると、<br class="u-only__pc">将来の片付け習慣にも役立ちそうよね。</p>
        <p>戻す場所を伝えて、最初は、「元に戻してね」や「お家に戻そうね」というように声を掛けて、<strong class="red">遊び感覚</strong>でやってみると覚えやすいわよ。</p>
      </div>
    </section>
    <section class="main__wrapper">
      <div class="wrapper narrow">
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
          </figure>
          <p>ウサちゃん、おウチかえるー♪</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>そうよ！<br>みぃちゃん、上手ね！</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
          </figure>
          <p>サクラもねぇ…<br>小さいころはこうやってお片付けしていたんだけどねぇ…</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>そりゃそうよ！<br>私だってやればできるもん！</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
          </figure>
          <p>いやぁ、それが大きくなったらコレだもん</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
          </figure>
          <p>コレだもん♪</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
          </figure>
          <p>もぉー！<br>みぃちゃんまでひどーい！</p>
        </div>
        <div class="intro mb6">
          <p>おもちゃってかさばるし、小さいパーツとか大きさもバラバラで、いつも片付けに困っていたんだよね。まさか「ざっくり」と収納すればよかったとは！<br>この勢いで、みぃちゃんも片付けを覚えてくれれば、<br class="u-only__pc">私の家事ももっとラクになるかな…って、さすがにそんなにうまくいかないかな！？</p>
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
