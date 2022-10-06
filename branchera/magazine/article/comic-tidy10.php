<?php
//base
include( "../../function.php" );
$content = get_id_data( '12010' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '片付けの専門家が監修！片付けられない家族を救うためのマンガコラム。第10話は片付けに困ってつい溜まりやすい紙・書類の片付け方法をご紹介します。';
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
      <p>ずっと片付けが苦手だったんだけど、片付け上手なお母さんにサポートしてもらって、かなり部屋が整理されてきたの！今日は、新しいオーブントースターを買うために、お店に行ってきたところなんだけど、こういう家電って説明書やら保証書やら…いろいろ紙が大量についてくるんだよね。…こういう紙の整理、苦手なんだよなぁ。</p>
    </div>
    <p style="text-align: right" class="mb4">&raquo; 前回はこちら<a href="comic-tidy09.php">「第9話　パパも満足！マンガ・ゲームの収納アイデア」</a>
    </p>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan02@2x.png">
      </figure>
      <p>パパとママ、まだぁ～？</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
      </figure>
      <p>もうすぐ帰ってくるわよ<br>今日はね、新しいオーブントースターを買ってくるんですって！<br>美味しいパンを食べられるようになるのよ～</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
      </figure>
      <p>ただいまー<br>お義母さん、みぃちゃん見てくれてありがとうございます</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>パパー！<br>みぃちゃん、パンたべるー</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>みぃちゃんったら気が早いのね<br>…そんなことだろうと、食パン買ってきたのだー！</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
      </figure>
      <p>このオーブントースター、すごく美味しくパンが焼けるんです</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>さっそく開けてみよっか！<br>ハコを開けてっと…説明書とかいっぱい入ってるなー</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>ちょっとちょっと！<br>今、投げたの保証書でしょ！？ちゃんと保管しておきなさいよ</p>
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>えぇ～めんどう～…<br>こういうの、どこに置いてもグチャグチャになっちゃうんだよねー</p>
    </div>
    <div class="center mb3">
      <img data-src="../../lib/img/magazine/comic01/vol10/img01.jpg" data-retina="../../lib/img/magazine/comic01/vol10/img01@2x.jpg"
        alt="" style="max-width: 740px;" class="u-img__max">
    </div>
    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
      </figure>
      <p>こういう書類は、ちゃんと片付けておかないと、<br class="u-only__pc">あとで、痛い目を見るのは自分なの！<br>さぁ、パンが焼けるまでに書類の片付けのコツを伝授するわよ！</p>
    </div>
    </section>
    <section class="comic-pink kaasan">
      <div class="wrapper">
        <p class="teach">
          <img data-src="../../lib/img/magazine/comic01/img02@2x.png" data-retina="../../lib/img/magazine/comic01/img02@2x.png"
            alt="お母さんからのアドバイス" style="" class="u-img__max">
        </p>
        <h3>家庭の書類を分類することがポイントよ</h3>
        <p>家の中には、紙のモノって、意外にあふれているのよね。<br>領収書のレシートやDM（ダイレクトメール）、チラシなど、毎日のように増えるモノから、<br class="u-only__pc">住宅や保険の契約書といった、とても重要なモノまで種類もいろいろね。</p>
        <p>身近なところでは、ほかにも買った商品の保証書や取扱説明書、公共料金・お給与・ クレジットカードの明細書なども溜まってしまいがちよね。</p>
        <p> そんな書類が捨てられずに、溜まってしまう原因は、<strong class="red">必要かどうかが分からないから</strong>、<br class="u-only__pc">そして、整理するタイミングを決めていないからなの。</p>
        <p>モノの整理と違って、書類の場合は「もったいないから」という理由は少なくて、<br class="u-only__pc">「この先、<strong class="red">この書類が必要になるかもしれない</strong>」<strong
            class="red">という不安から捨てられないケース</strong>が多いのね。</p>
        <p>書類の片付けのコツは、まずは分類することが第一歩！</p>
        <h3>書類を分類するポイントは、本当に重要なモノかどうかを決めること！</h3>
        <p>そもそもなんだけど、普通の家庭には本当に重要な書類や、<br class="u-only__pc">捨てて困る書類って実はすごく少ないものなのよ。</p>
        <p>捨てて困る書類は、お金が絡むモノ。例えば、契約書関係や証券とかね。<br>あとは資格証明書など、法律が絡むモノ。 <br>こういった書類は、頻繁に使う訳ではないけれど、<br class="u-only__pc">重要な書類だから<strong class="red">「保管書類」</strong>と私は呼んでるわ。</p>
        <p>とは言え、手元にあると便利な書類、確認や提出が必要な書類もあるわよね。<br>そういった書類を、確認が必要な書類ということで<strong class="red">「要確書類」</strong>と呼んでいるの。 <br>この要確書類が一番よく使う書類だったりするわ。</p>
        <p>このように、家庭にある書類を大きく2種類に分類してみましょう！</p>
        <div class="numArea">
          <ul>
            <li>保管書類：重要書類　/　契約、保険、税金などの関連書類、証券、保証書、取扱説明書など</li>
            <li>要確書類：生活書類　/　行政の広報資料、レシート、水道ガス光熱費などの公共料金の明細書、給与明細書、クレジットカードの明細書など<br>教育関係　/　学校の年間予定表、保存版のお便りなど<br>その他　　/　仕事、趣味などの書類</li>
          </ul>
        </div>
        <p>どの書類が保管書類・要確書類のどちらに分類されるかは、<br class="u-only__pc">人によってそれぞれ違うの。 </p>
        <p>例えば、領収書で考えてみると、確定申告が必要な人にとっては「保管書類」に分類されるけど、ショウくんみたいに仕事で使った領収書は、会社に提出する必要があるから「要確書類」になるわね。<br>サクラの場合だと、領収書は必要ないから、もし、もらっても捨ててしまっても問題ないわよね。自分にとって手元の書類がどちらに分類されるか、よく考えてみてね。</p>
        <p>あと、要確書類は利用頻度が高いけれど、<br class="u-only__pc"><strong class="red">必要とする期限があり、さらにその期限が短い書類が多いから、定期的な整理が大切なの。</strong><br>どちらの分類にも当てはまらない書類は、基本的に捨てても大丈夫よ！
        </p>
        <p>サクラの買ってきた、オーブントースターの場合だと…<br>保証書は重要だけど、普段からよく使うモノではないから「保管書類」に分類ね。<br>ただし多くの取扱説明書はネットでも確認できるので、捨てても問題ないことが多いわ。</p>
        <p>紙で素早く確認したいモノだけ残せばいいけれど、<br class="u-only__pc">サクラの場合は、捨てちゃった方がいいわね。</p>
        <h3>年賀状・DM・レシートなど、増え続ける書類は収納方法を工夫してみて！</h3>
        <p>書類の中には、年賀状やDM（ダイレクトメール）、クーポンなどのように増え続けるモノもあるわよね。そういったモノは、期限をつけたりスペースを区切るなどして収納方法を工夫するといいわよ。</p>
        <p> たとえば、年賀状は今年の分だけ残す…というように<strong class="red">保管期間のルール</strong>を決めるの。<br> レシートは、家計簿をつける場合だけ保管。 <br>DM（ダイレクトメール）やクーポンは、お店などで使うことが多いから普段使いのバッグなどに収納するといいかもね。<strong
            class="red">期限が切れたモノは、すぐに捨てることを忘れないようにね。</strong>
        </p>
        <h3>書類の収納は、種類に合わせて３つに分類するのがポイントよ</h3>
        <p>書類収納のコツは、まずざっくりと大きさごとに分けてみることよ。<br>A4サイズと、A4サイズより小さいもの…というように分けるといいわね。</p>
        <p>次に、書類の種類に合わせてそれぞれ、大分類・中分類・小分類に分けていくの。<br>取扱説明書や保証書、明細書・レシート類・ハガキ…というようにまずはざっくりと大きく分けて、その後に細かく分類していくの。</p>
        <p>例えば取扱説明書の場合</p>
        <strong>
          <div class="u-list__dl_table">
            <dl>
              <dt>[ 大分類 ]</dt>
              <dd>取扱説明書</dd>
            </dl>
            <dl>
              <dt>[ 中分類 ]</dt>
              <dd>1：住宅設備、2：白物家電、3：PC関連</dd>
            </dl>
            <dl>
              <dt>[ 小分類 ]</dt>
              <dd>
                <ul>
                  <li>1：キッチン（食洗機、換気扇など）/　水回り　/　電気</li>
                  <li>2：冷蔵庫　/　洗濯機</li>
                  <li>3：テレビ　/　パソコン</li>
                </ul>
              </dd>
            </dl>
          </div>
        </strong>
        <p> というように分類して、一番最小グループ（小分類）をそれぞれファイルに入れて保管してみて。</p>
        <p> 保管が必要な書類の収納方法は<strong class="red">「バーチカルファイリング」</strong>という手法がオススメ。<br>
          これはね、穴を開けてバインダーに綴じたり、クリアブックなどに入れるのではなく、<br class="u-only__pc">二つ折りのファイルに、分類別に書類を挟んで保管するという方法なの。</p>
        <p>出し入れや、定期的に見直して捨てることもラクだから、書類が散らかりにくいわ。<br>文房具屋さんなどに売っているから探してみて。 <br> レシートなどの小さい書類は、<strong class="red">底のあるクリアファイルなどに挟むと無くさない</strong>からいいわね。</p>
        <p>分類はあんまり細かくやりすぎてしまうと、逆に探しにくくなってしまうから、<br class="u-only__pc"><strong class="red">中分類はだいたい8個くらいまで、小分類は5～15個くらいまで</strong>にしておくといいわ。<br>領収書や明細書みたいに、あまり細かく分類できないものは中分類にして、<br
            class="u-only__pc"> 取扱説明書みたいに細かく分類できるものは、小分類に分類するなどして、数を調整してみてね。 </p>
        <p>分類ができたら、最小単位のグループ（小分類）をそれぞれ二つ折りのファイルに入れてラベルを付けるの。<br> そして、同じ分類のものを中分類や大分類ずつにまとめて、ファイルボックスなどに入れて収納完了よ♪ </p>
        <p>例えばレシートとか、重要な書類と比べて、それほど大事な書類でなければ、<br class="u-only__pc">リビングあたりをファイルの保管場所に選んでみてもいいかもね。<br>ほら、財布にたまったレシートや領収書を整理するのって、<br
            class="u-only__pc">リビングのテーブルでやることが多いでしょ？<br>近くにファイルがあったら、そのまま整理ができてとても楽ちんよ。<br>もし、今、散らかっている場所があるとしたら、<br
            class="u-only__pc">その<strong class="red">近くに収納場所を探すのが近道</strong>よ！</p>
      </div>
    </section>
    <section class="main__wrapper">
      <div class="wrapper narrow">
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
          </figure>
          <p>あの大量の取扱説明書を捨ててもいい場合があるなんて、<br class="u-only__pc">確かにお義母さんに言われるまで気づかなかったなぁ</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
          </figure>
          <p>重要なんじゃないかって、<br class="u-only__pc">とっておきたくなる気持ちもわかるわ</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
          </figure>
          <p>しかも、この収納方法…<br>僕の会社のデスクでも応用できそうですよ！</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
          </figure>
          <p>ショウくん…デスク周りとか<br class="u-only__pc">書類が山盛りになってそうよね～</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
          </figure>
          <p>…返す言葉もありませ～ん…<br>って、アレ！？サクラとみぃちゃん、何してんの？</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
          </figure>
          <p>パン、フカフカ～♪<br>美味しいの～♪</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>（モグモグモグモグ…）</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sho02@2x.png">
          </figure>
          <p>もう…二人そろって…<br>ある意味、似たもの親子なんだけど…</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
          </figure>
          <p>ちょっと！！<br>ばぁばもフカフカのパン食べたーい！</p>
        </div>
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sho02@2x.png">
          </figure>
          <p>3世代揃って…<br>「食」への興味は一緒ってわけね…</p>
        </div>
        <div class="intro mb6">
          <p>書類系って、どこに収納したらいいのか、何に入れればいいのか全然分からなかったんだけど、挟むだけ…の方法でいいなんてビックリ！これなら、めんどくさがりな私にもできそうな予感。ホントに部屋が片付づいてきたな～、そろそろお母さんにも片付け上手って認められるかな♪</p>
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
