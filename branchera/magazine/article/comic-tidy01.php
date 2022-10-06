<?php
//base
include("../../function.php");
$content = get_id_data('12001');
$pageTtl = $content['title'];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '片付けの専門家が監修！片付けられない家族を救うためのマンガコラム。第1話は片付けられない理由と片付ける目的を知るための基本的な考え方をご紹介します。';
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
      <p>私、サクラは旦那さんとかわいい娘と3人で暮らす主婦。<br>昨年、とうとう憧れのマンションを購入！<br>周りから見れば、順風満帆の平和な家族に見えるかもしれないけれど。<br>今、我が家には一つの問題が起きているわけで...というのも。<br>元々、片付けや整理整頓が苦手なのに加え、娘の“みぃちゃん”が生まれてからはさらに散らかりが加速。いつもモノが散乱している部屋になってしまったのです。さすがに、一人じゃどうにもできないということで、主婦の先輩「お母さん」にヘルプを依頼したのですが…。</p>
    </div>

    <div class="talk">
      <figure>
        <img data-src="../../lib/img/magazine/comic01/kaasan02.png" data-retina="../../lib/img/magazine/comic01/kaasan02@2x.png" alt="お母さん" style="" class="u-img__max">
      </figure>
      <p>何をどうしたら、こんなに部屋を<br class="u-only__pc">散らかすことができるわけ！？</p>
    </div>

    <div class="talk">
      <figure>
        <img data-src="../../lib/img/magazine/comic01/sakura02.png" data-retina="../../lib/img/magazine/comic01/sakura02@2x.png" alt="サクラ" style="" class="u-img__max">
      </figure>
      <p>分かってるってば！<br>分かってるんだけど…何でか、いつもこんな風になっちゃうんだよね</p>
    </div>

    <div class="talk">
      <figure>
        <img data-src="../../lib/img/magazine/comic01/kaasan02.png" data-retina="../../lib/img/magazine/comic01/kaasan02@2x.png" alt="お母さん" style="" class="u-img__max">
      </figure>
      <p>…あんたねぇ…<br>これは、根本的に解決しないとダメねッ！！</p>
    </div>

    <div class="talk">
      <figure>
        <img src="../../lib/img/magazine/comic01/sakura01@2x.png">
      </figure>
      <p>おぉ！お母さん、全部片付けてくれるの？</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
      </figure>
      <p>何言ってんの！<br>サクラ、あなた自分で解決しなさい！</p>
    </div>

    <div class="center mb3">
      <img data-src="../../lib/img/magazine/comic01/vol01/img01.png" data-retina="../../lib/img/magazine/comic01/vol01/img01@2x.png" alt="image" style="" class="u-img__max">
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/kaasan03@2x.png">
      </figure>
      <p>さぁ！まずは片付けられない理由を知るところから始めるわよ！</p>
    </div>

    <div class="talk">
      <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
      </figure>
      <p>えぇ！？お母さん！？<br>なんかキャラ変わってるんだけどー！</p>
    </div>
    </section>
    <section class="comic-pink kaasan">
      <div class="wrapper">
        <p class="teach">
          <img data-src="../../lib/img/magazine/comic01/img02.png" data-retina="../../lib/img/magazine/comic01/img02@2x.png" alt="お母さんからのアドバイス" style="" class="u-img__max">
        </p>
        <h3>片付けられないのには、３つの理由があるのよ</h3>
        <p>「どうして片付けられないのか」その理由を知ることが大切なの。<br>部屋が片付かない理由には、大きく３つの理由があるわ。</p>

        <div class="numArea">
          <ul>
            <li>整理ができない</li>
            <li>収納ができない</li>
            <li>習慣にできない</li>
          </ul>
        </div>

        <p class="mb4">まず<strong class="red">「整理」</strong>というのは、<strong class="red">使うモノを選ぶこと。</strong><br>使わないモノを手放し、使う予定のない洋服、本などは購入しない。<br>そうすることで、自然とモノの量は絞られていくのよ。</p>
        <p>
          次に<strong class="red">「収納」</strong>とは、<strong class="red">使うモノを使いやすくすること。</strong><br>だから、順番でいうと「整理」で使うモノだけを選んで、<br class="u-only__pc">その後にすることが「収納」なの。
        </p>
        <p>
          整理・収納の後には<strong>片付けを「習慣づける」</strong>ことがキレイな部屋を保つコツ。<br>片付けっていうのは使ったモノを、収納すると決めた場所へ、元に戻すことだから、 <br class="u-only__pc">収納場所が決まっていれば、片付けって本当はとても簡単なことなのよ。<br>正しい整理・収納で環境的なハードルを下げて、片付けを習慣づけるようにできるといいわね。<br>サクラの場合、部屋をざっと見たところ、ある特徴が出ているわね！
        </p>
        <p>
          <strong class="red">・モノが必要以上に多い<br>・片付ける場所が決まっていない</strong>
        </p>
        <p>
          ってことが原因のようね。<br>まず、「整理」で使うのか使わないのか区別をすること。<br>そして、使うモノの定位置を把握して「収納」を考えていくの。
        </p>
        <p>
          整理でモノの量を減らすと、考えるべき収納も、モノを元に戻す数も減るから、「片付けられないモノが多すぎ！」なんてことも少なくなるし、面倒な片付けや掃除が楽になるわよ！
        </p>
        <h3>片付けられない理由がスグ分かる？チェック診断で今すぐ確認！</h3>
        <p>「片付けられない」理由が分かれば、あっという間に「片付け上手」に大変身！<br>自分がどうして片付けられないのか分からないときは、次のチェック診断を活用してみて。<br>診断項目に答えて、「片付けられない理由」をチェックするのよ。</p>

        <div class="checkArea">
          <ul class="number">
            <li>１．モノを元の場所に戻せない</li>
            <li>２．収納場所を忘れてしまう</li>
            <li>３．使うときのことをうまくイメージできない</li>
            <li>４．スペースの有効活用法がわからない</li>
            <li>５．モノを手放せない</li>
            <li>６．大切なものの優先順位をつけられない</li>
          </ul>
        </div>

        <p>全部で6つのチェック項目があるけど、それぞれ片付けられない人のタイプ別に分かれているの。</p>

        <p>まず、「1」と「2」にチェックが入っている場合は片付けを「習慣にできない人」。<br>単に元の場所に戻すことができないのか、その収納場所が分からないほど部屋の中が整理されていないのかをチェックしてみて！</p>

        <p>「3」と「4」は「収納できない人」。<br>洋服や本などをどのように収納すれば良いのか、分析・診断する事が大切なのよ。スッキリ収納できた部屋をイメージできる想像力が大事だわ！</p>

        <p>「5」と「6」はずばり「整理できない人」！<br>性格にもよるけど、思い出の洋服をクローゼットの奥にしまっていたり、「部屋にあるもの全部が大事で捨てられない！」なんて人は、まずは使っていないモノを分類することから始めてみたらどうかしら？</p>

        <h4 class="u-ttl__m">「片付けられないのはナゼ？」片付けの悩みを整理整頓！</h4>
        <p>片付けられない理由は分かったけれど、どうして片付けられなくなってしまったのか、見つめ直す必要があるわ。主に、何が（What）・いつから（When）・どうして（Why）の「3W」を意識すると、整理しやすいと思うわ。</p>

        <h4 class="u-ttl__m">何が片付けられないのか？</h4>
        <p>これは洋服や本などのいわゆる「モノ」ね。<br>脱ぎっぱなしの洋服や、読み終えていない本、雑誌をそのまま床にほったらかにしていない？決まった場所に収納スペースを設けるだけで、整理整頓の第一歩につながるのよ！</p>

        <h4 class="u-ttl__m">いつから片付けられないのか？</h4>
        <p>人生において、何の変化もない一生なんてないのよ！<br>学校に行ったり、会社に勤めたり、結婚したり…。人は家族構成の変化などで、生活リズムを変える必要に迫られるときが来るの。もし、サクラが生活環境の変化によって、片付けられなくなったとしたら、過去のサクラの生活を振り返ってみる必要があるわね！</p>

        <h4 class="u-ttl__m">どうして片付けられないのか？</h4>
        <p>片付けようとしても、自分の意志ではどうしようもできないとしたら？<br>毎日が忙しすぎて片付けどころじゃない。</p>
        <p>例えば、「ゴミ出しの曜日までに間に合わない！」なんてことはない？時間的な制約以外にも、ゴミだと分かっているのに、「なんだかもったい気がして…」なんて人もいるはず。それが日常生活に支障をきたすようならば、ストレスなども関係しているかもしれないわね。</p>


        <h3>何で片付けたいの？片付けた後の効果を知りましょう！</h3>
        <p>部屋を片付けたい！って思うのには、何か理由があるはず。<br> それを知ることで整理・収納の方法も変わってくるわ。
          <br> 整理収納することには、5つの効果があるの。
        </p>

        <div class="numArea">
          <ul>
            <li>時間的効果</li>
            <li>経済的効果</li>
            <li>精神的効果</li>
            <li>空間的効果</li>
            <li>家事楽効果</li>
          </ul>
        </div>

        <p>モノの出し入れがスムーズになって、探し物も減る<strong>「時間的効果」</strong><br> 2度買いだったり、詰め込み収納による物損を防げる
          <strong>「経済的効果」</strong><br>気持ち的な余裕や、いつでも人を呼べるという安心感の
          <strong>「精神的効果」</strong><br>空間を広く使えて、家族みんながさらに動きやすくなる
          <strong>「空間的効果」</strong><br>無駄な作業が減って、片付けや掃除が楽になる
          <strong>「家事楽効果」</strong>
        </p>
        <p>
          このような効果は、人によって求める優先順位が違うし、<br> 求める要素によって、「整理時の判断基準」と「収納の仕方」が変わってくるの。
        </p>
        <p>
          例えば<br>
          <strong class="red">心ときめくような、おしゃれな空間にしたい</strong><br> といった精神的効果を重視する人なら、「整理」の段階ではときめくものを選び、
          <br> インテリアを意識した「収納」をすることになるのね。
        </p>
        <p>

          <strong class="red">あまりお金をかけずに、片付けやすくしたい</strong><br> といった経済的効果を重視する人なら、維持コストのかかるものは「整理」で手放して、
          <br>「収納」も今あるもので解決するという考え方になるわけ。<br> だから、サクラも何を重視するのか、自分で考えることね。
          <br>
          <strong class="red">「どれを重視するか？」<br>「自分は何が苦手で、どうしたいのか？」</strong><br> ということを最初に決めておくことは、部屋の収納を考えるときにとても重要なの！
        </p>
      </div>
    </section>
    <section class="main__wrapper">
      <div class="wrapper narrow">


        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
          </figure>
          <p>サクラは何を重視したいの？</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>あれ？…いつものお母さんに戻った…</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura02@2x.png">
          </figure>
          <p>何を重視するか…か…<br>うーーーーん</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
          </figure>
          <p>じゃぁ、逆にどうして片付けられないの？</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>そりゃぁ、もちろん子育てで忙しいし<br>面倒くさいからっ！</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/kaasan02@2x.png">
          </figure>
          <p>…ってことは、面倒くさい収納や片付けがラクになって、<br>時間や気持ちに余裕を持ちたいってことなのよ</p>
        </div>

        <div class="talk">
          <figure><img src="../../lib/img/magazine/comic01/sakura01@2x.png">
          </figure>
          <p>そっか…でもそんなこと実現できるの？</p>
        </div>

        <div class="talk mb6">
          <figure><img src="../../lib/img/magazine/comic01/kaasan01@2x.png">
          </figure>
          <p>できる！<br>お母さんに任せなさい！</p>
        </div>

        <div class="intro mb6">
          <p>お母さんに部屋の片付けを手伝ってもらうはずだったのに、なんだかお母さんの「片付け魂」に火を点けてしまったみた…い？でも、片付ける理由を知るなんて考えてもみなかった。<br>ちょっと頑張ってみようかな。</p>
          <p>次は「整理」についてね！片付け上手を目指すぞー！</p>
        </div>
      </div>
      <!-- //wrapper -->

      <div class="mb6">
        <div>
          <a href="<?php echo $base_url ?>/magazine/article/sumai-sos-vol01.php" data-ga-click="pr_<?php echo $filename ?>_pc" class="u-only__pc">
            <img src="<?php echo $img_url ?>/magazine/comic01/comic-tidy01_pc.jpg" alt="" class="u-img__max u-only__pc">
          </a>
          <a href="<?php echo $base_url ?>/magazine/article/sumai-sos-vol01.php" data-ga-click="pr_<?php echo $filename ?>_sp" class="u-only__sp">
            <img src="<?php echo $img_url ?>/magazine/comic01/comic-tidy01_sp.jpg" alt="" class="u-img__max u-only__sp">
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
<div class="mt8 mt3_sp mb2_sp">
  <mitsuketa-banner point-id="MitMagComicTidy01D20220901" img-url="<?php echo $img_url; ?>" login-url="<?php echo $login_url; ?>" :login-status="<?php echo $ssoFlag; ?>"></mitsuketa-banner>
</div>
<?php
$toindex_url = "/magazine/index_comic01.php";
include($inc_path . "/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
