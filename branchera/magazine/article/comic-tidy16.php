<?php
//base
include( "../../function.php" );
$content = get_id_data( '12016' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '片付けの専門家が監修！片付けられない家族を救うためのマンガコラム。第16話はこれまでにご紹介した片付け方法を振り返り習慣づけてキレイな部屋を維持する方法をご紹介します。';
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
      <p>ずっと部屋が散らかっていることが悩みだったけれど、片付け上手なお母さんのレッスンのおかげで、整理されたキレイな部屋を実現できることができたの！今はまだ、何とかキープできているけれど、これからもずっとこのままでいられるかなぁ。もうあの散らかった部屋には戻りたくないよ～！</p>
    </div>

    <p style="text-align: right" class="mb4">&raquo; 前回はこちら<a href="comic-tidy15.php">「第15話　お母さんの失敗！？モノが増える原因を突き止めよう！」</a></p>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
      </figure>
      <p>あら、久しぶりに来たけれど<br class="u-only__pc">お部屋がキレイに片付いているじゃない！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
      </figure>
      <p>お義母さんにいろいろ教えてもらったおかげで<br class="u-only__pc">ここまで片付けることができましたよー</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>片付けるようになってから<br class="u-only__pc">何だか、前より時間にゆとりができるようになったんだよねー</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
      </figure>
      <p>確かに…会社から帰っても<br class="u-only__pc">前みたいにサクラがドタバタしている様子がないような気がするなぁ</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
      </figure>
      <p>それは、片付けの効果なのよ！<br>どこに何があるか分かっていれば<br class="u-only__pc">モノを探す時間もなくなるってわけね</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>ちょうど欲しい時に、欲しい場所にあるから<br class="u-only__pc">料理とかもすごくスムーズなんだよね</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
      </figure>
      <p>休みの日も、片付けで1日使わないから<br class="u-only__pc">みぃちゃんと遊ぶ時間も増えたよね</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>ふえたよねー♪</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
      </figure>
      <p>ヨシッ！<br>じゃぁ、これで片付けレッスンも終了…</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>いや…でもさぁ…<br>この先もずっとキレイな状態を保てるかって言われると<br class="u-only__pc">正直…自信ないなー！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sho02@2x.png">
      </figure>
      <p>確かに…そう言われると…<br>また元に戻っちゃいそうだよね…</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
      </figure>
      <p>何、弱気なこと言っているの！？2人とも！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
      </figure>
      <p>キラリンばぁばだー♪</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
      </figure>
      <p>これで最後のレッスンよ！<br>サクラとショウくん、みぃちゃん3人に伝授するわね！</p>
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
        <h3>家族みんなで片付けるのが、続けるコツよ！</h3>
        <p>最初に、これまでのレッスンのポイントを振り返ってみるわね。</p>
        <p>まず、なぜ片付けたいのかということを考えてから、<br class="u-only__pc">家の中のいろいろなモノに対して、片付けやすい環境をつくったのよね。<br>キレイに片付いた後は、使ったモノは元に戻すこと…がポイントだったわね。
        </p>
        <p>
          そして、最後のポイントは<strong class="red">片付けを“習慣にする”</strong>ということなの。<br>片付いた状態をキープするのは、1人で頑張るだけではなかなか難しいこと。<br>やっぱり家族みんなの協力が重要になるわ。
        </p>
        <p>

          サクラにとっての環境や、サクラだけが習慣づけるのではなく<br>
          <strong class="red">家族みんなが片付けやすい“環境づくり”と“習慣づけ”</strong>を築いていくのよ！
        </p>

        <h3>家族みんなで話し合う…コミュニケーションを大切にね。</h3>
        <p>1つ目の、家族が片付けやすい“環境づくり”には、3つのコツがあるわ。</p>

        <div class="numArea">
          <ul>
            <li>家族の意見を聞いて収納の方法・場所を決める</li>
            <li>1番片付けが苦手な人に合わせた収納にする</li>
            <li>家族が手伝いやすい収納にする</li>
          </ul>
        </div>

        <p>家族みんなで片付けをするために大切なことは、お互いのコミュニケーションよ！<br> 一度、みんなで話し合って、<br class="u-only__pc">
          <strong class="red">いろいろなモノが片付けやすい状態になっているか確認</strong>してみるのもいいわね。</p>
        <p>

          例えば、キッチンを1番使う人がサクラの場合、<br class="u-only__pc">サクラの行動に合わせた収納にするべきね。
          <br> その上で、よく使う食器は分かりやすい場所に収納して、<br class="u-only__pc">ショウくんも食器を元に戻しやすいようにするとか。
        </p>
        <p>

          みぃちゃんが遊ぶおもちゃは<br class="u-only__pc">みぃちゃんでも片付けやすいように、低い場所にするとか。
        </p>
        <p>

          家族のライフスタイルに合わせて、片付けやすい環境をつくっていくのよ。
        </p>

        <h3>家族みんなで片付けをルール化してみて！</h3>
        <p>片付けやすい環境ができたら、<strong class="red">片付けのルールを決めていく</strong>の。<br> 家事分担やお手伝いのルール化をしてみてね。
        </p>
        <p>

          例えば…<br> <strong>・洗濯物は自分でたたむ
          <br> ・食事の後片付けは自分でキッチンまで持っていく
          <br> ・モノを使ったら元に戻す</strong>
        </p>
        <p>こんなふうに決め事をしておくの。<br> 事前に家族みんなで話し合った、片付けやすい環境ができているから、<br class="u-only__pc">家事分担などの協力も得やすくなるわ。</p>

        <h3>片付けが習慣づけられれば、キレイな部屋をキープできる！</h3>
        <p>最後は「片付けの習慣づけ」についてね。<br> これはなかなかすぐにできることではないわ。
          <br> 特に、自分以外の人に習慣づけをするのは、さらに難しいわよね。
        </p>
        <p>

          家族と一緒に習慣化するには、2つのポイントがあるの。
        </p>

        <div class="numArea">
          <ul>
            <li>ゴールを見せること</li>
            <li>みんなに責任感をもってもらうこと</li>
          </ul>
        </div>

        <p>1つ目のポイントは、<strong class="red">“ゴールを見せること”</strong>なの。<br> サクラも、一度キレイに片付いた状態を見たときに
          <br> 目指すゴールが明確になって、やる気になったわよね？
          <br> そのゴールによって得られた効果や、価値感を具体的に家族と共有するの。
        </p>
        <p>

          例えば、料理や掃除などの家事が早くなって、時間に余裕ができた…とか。<br> モノを探すイライラがなくなって、心に余裕ができたなどね。
          <br> そうすることで、家族にも片付けの大切さを感じてもらえるわ。
        </p>
        <p>

          2つ目のポイントは、“責任感をもってもらうこと”よ。<br>
          <strong class="red">責任感をもたせるには、家族に「役割をもってもらうこと」</strong>が大切なの。</p>
        <p>

          例えば、自分のモノは自分で管理するようにボックスを用意することで<br> モノを片付ける責任感が生まれるわ。
          <br> こうやって「これはあなたの役割なのよ」と明確にすることで<br class="u-only__pc">「どうせ誰かがやってくれる」から「自分でやらなくちゃ！」に変わっていくの。
        </p>
        <p>それから、<strong class="red">子どもにも片付けの習慣を身に付けてほしい</strong>ところよね。<br>いつから子どもに片付けの習慣を身に付けてもらうかは判断の難しいところだけれど、<br class="u-only__pc">早いうちから覚えてくれるなら、家事はとても助かるわね。</p>
        <p>小学生以上の子どもならコミュニケーションも取れるから、<br class="u-only__pc">家族の片付けルールも一緒に守ってくれそうね。</p>
        <p>だけど、例えばみぃちゃんのように、もっと小さい子どもも、<br class="u-only__pc">早いうちから片付けを覚えてほしい。<br>そういうときは、まず、<strong class="red">子どもが片付けやすい環境を整えてあげること</strong>。<br>子どもが自分のモノをしっかりしまえるよう、<br class="u-only__pc">子どもがしまいやすい高さに収納場所を決めるということを忘れずに。</p>
        <p>そして、毎日、<strong class="red">一緒に片付けるところから始めるのがオススメ</strong>よ。<br>毎日のリセット、そして使ったら元に戻すというステップを根気強く続けてみて。</p>
        <p>みぃちゃんのお手本となれるよう、サクラとショウくんが率先して、<br class="u-only__pc">片付けを習慣化していけるといいわね！<br>そのうちみぃちゃんが大きくなったら、<br class="u-only__pc">家族みんなで協力して片付けができるようになる日もくるはずよ。</p>


        <h3>感謝の気持ちを忘れずに、嫌味やダメ出しはNGよ！</h3>
        <p>最後に私から伝えたいのは、<strong class="red">片付けは目的ではない</strong>、ということなの。</p>
        <p>
          家事を効率化して、家族との時間を増やしたい…<br>気持ちの良い部屋で、心からリラックスしたい…<br>憧れのインテリアに囲まれた部屋にしたい…
        </p>
        <p>
          家族のライフスタイルによって、暮らしに求めることは異なるわよね。<br>
          <strong class="red">その異なる 目的を目指す手段のひとつが『片付け』</strong>なの。
        </p>
        <p>
          だから、お互いに感謝の気持ちをしっかり伝えることを忘れずにね。<br>逆に「できてないじゃん！」とか「そうじゃないよ！」といった<br class="u-only__pc">嫌味やダメ出しは、目指したい暮らしづくりの妨げになってしまうわ。
        </p>
        <p>
          家族みんなで協力していけば、<br class="u-only__pc">いつだって、片付いた部屋を実現できるわね！
        </p>

      </div>
    </section>

    <section class="main__wrapper">
      <div class="wrapper narrow">
        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sho01@2x.png">
          </figure>
          <p>家族で話し合うか…<br>お義母さんに教えてもらうまでは<br class="u-only__pc">サクラがやってくれるって思っていたところがあったかも…</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>私も、何で誰もやってくれないの！？<br>って1人でイライラしてたかも…</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
          </figure>
          <p>2人ともそうやって気づいている時点で大丈夫よ！<br>2人で、キレイな部屋をキープしていってね！</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/miichan01@2x.png">
          </figure>
          <p>みぃちゃんも、おかたづけするよ！！</p>
        </div>

        <div class="center mb3">
          <img
            data-src="../../lib/img/magazine/comic01/vol16/img01.jpg"
            data-retina="../../lib/img/magazine/comic01/vol16/img01@2x.jpg"
            alt=""
            style="max-width: 740px;"
            class="u-img__max"
          >
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
          </figure>
          <p>こんなに頼もしい家族がいれば<br class="u-only__pc">サクラもきっと大丈夫ね♪</p>
        </div>

        <div class="intro mb6">
          <p>結婚してからずっと部屋がモノで溢れていたけれど、こんなに片付くなんて想像もしていなかった！片付けたことで、いろいろな準備に時間もかからなくなったから、家事の時間もグンと短縮できるように…。何でか、いつも心に余裕があるような気がするの。<br>これからも、ずっとこの暮らしがキープできるようにパパとみぃちゃんと3人で協力していくぞ♪</p>
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
