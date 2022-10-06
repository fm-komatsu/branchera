<?php
//base
include("../../function.php");
$content = get_id_data('12017');
$pageTtl = $content['title'];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '大量のファイルで雑然としているパソコンのデスクトップを、きれいに整理整頓する方法を解説。ファイル名の付け方やフォルダ分けのやり方など、すぐに実践できるテクニックをご紹介します。';
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
    //include( $inc_path . "/lib/inc/page/_magazine/__comicex-header.php" );
    ?>
    <?php
    include($inc_path . "/lib/inc/page/_magazine/__comic-header-cm_ex01.php");
    ?>
    <section class="comic main__wrapper">
      <div class="comic-header__ex">
        <!-- <div class="comic-header__tags u-tags">
				<h5 class="u-tags__ttl">キーワード</h5>
				<div class="u-tags__row">
					<?php echo show_content_tags($content); ?>
				</div>
			</div>
		  -->
        <h2 class="comic-header__ttl"><?php echo $pageTtl; ?></h2>
      </div>

      <div class="intro">
        <p>パパのパソコンのデスクトップは、ファイルが多すぎてごちゃごちゃ！だから、なかなか必要なファイルが見つからないみたい…そういえば、みんなで使っている家のパソコンも同じようにごちゃごちゃしているんだよね…この機会に整理整頓したいな！</p>
      </div>
      <div class="talk">
        <figure><img src="<?php echo $img_url ?>/magazine/comic01/sho02@2x.png" loading="lazy">
        </figure>
        <p>あれ～、このファイルじゃないし…まったく、どこへいったんだよ～</p>
      </div>
      <div class="talk">
        <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan02@2x.png" loading="lazy">
        </figure>
        <p>ねえサクラ！ショウくん、さっきからずっとパソコンと格闘しているわね。仕事をしてるの？</p>
      </div>
      <div class="talk">
        <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura02@2x.png" loading="lazy">
        </figure>
        <p>うん。働き方改革の一環で、最近はお家でお仕事してるの！でも、なんだかずっと同じところでつまずいているみたいね</p>
      </div>
      <div class="talk">
        <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan02@2x.png" loading="lazy">
        </figure>
        <p>なるほど。ショウくん、息抜きも大事よ〜！<br>…って、デスクトップのファイルの数、とんでもないことになっているじゃない！</p>
      </div>
      <div class="talk">
        <figure><img src="<?php echo $img_url ?>/magazine/comic01/sho02@2x.png" loading="lazy">
        </figure>
        <p>あ、お義母さん！ついついデスクトップにファイルをためちゃって<br>どこに何のファイルがあるか分からなくなっちゃうんです…トホホ…</p>
      </div>
      <div class="talk">
        <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan02@2x.png" loading="lazy">
        </figure>
        <p>これは、仕事の前に整理整頓しなくちゃだめよ。こんな状態になる前に、サクラも何かアドバイスしてあげればよかったのに〜</p>
      </div>
      <div class="talk">
        <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura02@2x.png" loading="lazy">
        </figure>
        <p>ええ！？と言っても、私が使っている家族用のパソコンもすごいことになっているからなあ…</p>
      </div>
      <div class="talk">
        <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan03@2x.png" loading="lazy">
        </figure>
        <p>もう！分かったわ、全部まとめて私が面倒見ましょう！パソコンのファイルの整理にはコツがいるのよ<br>私が上手にファイルを整理する方法を教えてあげるから、二人ともよ〜く聞きなさい！</p>
      </div>
    </section>
    <section class="comic-pink kaasan">
      <div class="wrapper">
        <p class="teach">
          <img data-src="<?php echo $img_url ?>/magazine/comic01/img02@2x.png" data-retina="<?php echo $img_url ?>/magazine/comic01/img02@2x.png" alt="お母さんからのアドバイス" style="" class="u-img__max">
        </p>
        <h3 class="u-font__palt">どうしてファイルを整理した方がよいのか、まずはよく考えてみて！</h3>
        <p class="mb2">「パソコンのファイルを整理した方がよい」ってことは、なんとなくは分かっているわよね。でも、どうして整理する必要があるのか分かっているかしら？<br>パソコンのファイルの整理には、大きく分けて2つの意義があるの。<strong class="red">効率よく作業を行うことができる</strong>ということと、<strong class="red">ミスの防止につながる</strong>ということ。</p>
        <p class="mb2">これは、仕事で使うパソコンだけじゃなく、家庭のパソコンでも同じことよ。<br>特に家庭のパソコンは、家族みんなで使うことも多いから、気付いたら大量のファイルでデスクトップがぐちゃぐちゃ…っていうことになりやすいの。そうならないためにも、しっかりルールを作っておく必要があるのよ。</p>
        <p>さて。具体的な整理方法の前に、まずはパソコンのファイルを整理するメリットについて詳しく解説するわね。</p>
        <h4 class="u-ttl__m mt3">作業の効率化</h4>
        <p class="mb2">パソコンのファイルを整理するメリットの1つが、<strong class="red">作業の効率化</strong>よ。たとえば、パソコンのデスクトップが、たくさんのファイルでぐちゃぐちゃになっている人、いるわよね。そんな状態で、使いたいデータがすぐに探せるかしら？おそらく、こういった人の多くは、必要なファイルを見つけるのに時間がかかってしまうわね。</p>
        <p class="mb2">一方、仕事のできる人のパソコンは、デスクトップがすっきりして、ファイルがきちんと整理されている場合が多いの。だから、<strong class="red">必要なときにすぐ使いたいデータを出せる</strong>のよ。</p>
        <p>整理ができていない人とできている人の、ファイル探しの時間の違いなんて、ほんの少しと思うでしょう？でも、積み重なると、結構なタイムロスになるのよ。</p>
        <h4 class="u-ttl__m mt3">ミスの防止</h4>
        <p class="mb2">ファイルを整理するメリットの2つ目が、<strong class="red">データ削除をはじめとするミスの防止</strong>ね。必要なデータのファイルをどこに保存したか分からなくなって、紛失してしまったってことはない？ファイルの整理ができていない人には、ありがちなことなの。</p>
        <p class="mb3">紛失しただけなら、時間をかけて探せば見つかる可能性もあるわよね。だけど、ファイルをどのフォルダに保存したか分からない状態で、うっかりフォルダごと削除してしまったら、大変なことになるわ。そうならないためにも、パソコンのファイルの整理は大切なのよ。</p>
        <h3 class="u-font__palt">ファイル名やフォルダ管理にルールを設けるべし！</h3>
        <p>それでは、パソコンのファイルについて、具体的な整理の仕方を教えるわね。まずは、管理するときのルールを決めるところから始めるの。大きく分けて3つのルールを決めましょう。こうすることで、ファイルがすっきり整理できるようになるわよ。</p>
        <h4 class="u-ttl__m mt3">①ファイル名のルール</h4>
        <p>パソコンのファイルがごちゃごちゃになる原因の1つに、「ファイルの名前の付け方」があるの。あるときは日本語で、あるときはアルファベットで…というように、ファイル名の付け方がバラバラだと、管理が難しくなってしまうのよ。だから、ファイル名の付け方にルールを設けておくといいわね。</p>
        <p>一般的なのは、<strong class="red">日付・属性・内容でファイル名を付ける方法</strong>ね。たとえば、2020年5月20日に作ったパエリアのレシピのデータだとすると、「200520_レシピ_パエリア」というファイル名にするの。</p>
        <p>この場合、「日付の年にあたる数字は、西暦の下2桁を使う」というように事前にルールを決めておくのよ。あと、月日に使用する数字は必ず2桁になるようにするというのもポイント！5月の場合は、「05」というようにね。こうすると、日付は6桁で統一されるでしょう？これなら、ファイルは、自然と日付の順番に並ぶわよ。</p>
        <p>あと、属性や内容にあたる部分は、具体的に、イメージしやすいネーミングにすること。<br>「その他」とか「○○系」「○○等」といった曖昧な言葉のファイルは、収納でいうと「ちょい置きボックス」みたいなもの。結局きちんと分類できず、情報のたまり場になってしまうので、曖昧な言葉は使わないようにしましょう。<br>また、日本語にするのか英語なのかアルファベット表記なのか、これもルールとして決めておくとよいわね。</p>
        <h4 class="u-ttl__m mt3">②つなぎの記号のルール</h4>
        <p>さっき設定したファイル名には、日付や属性、内容の間につなぎとなる記号を挿入していたでしょう？この場合は、_（アンダーバー）ね。<br><strong class="red">記号を使うと、ファイル名の意味が明確に分かって使いやすい</strong>の。一般的なのは、_（アンダーバー）と-（ハイフン）かしらね。どの記号を使うのかも、ルールとして決めておいた方がいいわ。</p>
        <p>こんな風にファイル名のルールを決めたら、今パソコンに保存してあるファイルを、ルールにならって変更しましょう。ファイル名の変更には時間がかかるから、ショートカットキーを使って効率よく進めていくとよいわね。名前を変更したいファイルを選択して「F2」キーを押すだけで、新たなファイル名が入力できる状態になるわよ。あと、ファイル名を一括で変更できるソフトもあるから、そういったツールを使ってみるのもおすすめよ。</p>
        <h4 class="u-ttl__m">③フォルダ分けのルール</h4>
        <p>次は、ファイルをカテゴリーごとに管理するための、フォルダ分けのルールを決めるわよ。まず、フォルダ名だけど、<strong class="red">フォルダの先頭に番号を付ける</strong>ようにしましょう。「01」「02」という具合に、2桁で表示するのがポイントよ。たとえば「01_家計簿」「02_レシピ」といった感じにね。10以上の数字になっても、きちんと1から順番にフォルダが並ぶわよ。<br>もし、フォルダ数が多くなりそうな場合は、初めから「001」「002」という風に3桁の番号にしておくといいわ。<br>そしてこの番号は、<strong class="red">使用頻度の高い順</strong>に振っておくのがおすすめ。検索したときによく使うフォルダが上にくるから、ファイルを探しやすくなるわ。</p>
        <p><strong class="red">それぞれのフォルダには、用件ごとに関連するファイルをすべて保存</strong>するの。「02_レシピ」のフォルダには、実際のレシピ原稿のファイルはもちろん、レシピ原稿を作った際に下書きにしたファイルやレシピに貼り付けた写真のデータなんかも保存しておくのよ。</p>
        <p>あと、フォルダ内に別のフォルダを入れることがあるけれど、その場合は、<strong class="red">大きなカテゴリーから小さなカテゴリーになるようにするのがよい</strong>わね。「02_レシピ」のフォルダ内に「01_レシピ原稿」「02_画像」…のようにね。この時、<strong class="red">階層は多くても3階層くらいまで</strong>にしておくと、探すときに迷子にならずにすむわよ。</p>
        <h3 class="u-font__palt mt5 mt0_sp">整理整頓の維持には、古いデータと不要なデータの処理が大切よ！</h3>
        <p class="mb2">ここまでやればパソコンのファイルがかなり整理できているはずね。だけど、お部屋の片付けのように、パソコンのファイルの整理も、きれいな状態をずっと保ち続けることが大切なの。</p>
        <p class="mb2">そのためには、<strong class="red">まず古いデータは定期的に専用フォルダを作ってまとめておく</strong>のよ。たとえば「過去」や「old」といったフォルダ名をつけて、ファイルの作成から一定期間が経過したデータを、全てこのフォルダに移動しておくの。</p>
        <p class="mb2">そしてこの古いデータは、いつまでもパソコンのハードディスクの中に残したままにせずに、<strong class="red">時期が来たら削除する</strong>ことも必要よ。そのために、<strong class="red">定期的に古いデータのバックアップをとっておく</strong>とよいわね。外付けハードディスクやDVD-Rのような外部メディアに保存しておくの。バックアップをとっておけば、もう古いデータは不要になるでしょう？だから、心置きなく削除できるわよね。</p>
        <p class="mb0">こうやって「1年に1回」などと時期を決めて、古いファイルのバックアップと削除を行うことで、パソコンのフォルダは常に整理された状態を維持できるのよ！</p>
      </div>
    </section>
    <section class="main__wrapper">
      <div class="wrapper narrow">
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/sho01@2x.png" loading="lazy">
          </figure>
          <p>お義母さんから教えてもらった方法で、パソコンのファイルがきれいに整理できました♪<br>探してたファイルもすぐに見つかりましたし…ありがとうございます！</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan01@2x.png" loading="lazy">
          </figure>
          <p>よかったわ～、これで、安心して仕事ができるわね！</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura01@2x.png" loading="lazy">
          </figure>
          <p>家のパソコンも、ほら見て～！<br>すごくすっきりしたと思わない？</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/miichan01@2x.png" loading="lazy">
          </figure>
          <p>すっきり！すっきり！</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura01@2x.png" loading="lazy">
          </figure>
          <p>ちゃんと整理されていると、昔のデータが辿りやすくて便利よね！<br>このフォルダは3年前に行ったレストランの食レポ、こっちは5年前の食べ歩き記録…</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan02@2x.png" loading="lazy">
          </figure>
          <p>ってちょっと、食べ物のフォルダばっかりじゃなーい！</p>
        </div>
        <div class="intro mb6">
          <p>パソコンの整理整頓は、ルール決めがポイントだったのね！そんなこと全然考えないで保存してたわ～。ファイル名の変更もショートカットでサクサクできたし…なんか私、仕事できる人って感じじゃない？でも、お母さんも言ってたけど、整理されたパソコンをキープしていくことが結構難しいのよね～。これからは、ちゃんとバックアップをとって、不要なファイルをこまめに削除しなくちゃね！</p>
        </div>
        <div class="mb6">
          <div>
            <a href="<?php echo $base_url ?>/magazine/article/alsok-vol84.php" data-ga-click="pr_<?php echo $filename ?>_pc" class="u-only__pc">
              <img src="<?php echo $img_url ?>/magazine/comic01/comic-tidy-ex01_pc.jpg" alt="" class="u-img__max u-only__pc">
            </a>
            <a href="<?php echo $base_url ?>/magazine/article/alsok-vol84.php" data-ga-click="pr_<?php echo $filename ?>_sp" class="u-only__sp">
              <img src="<?php echo $img_url ?>/magazine/comic01/comic-tidy-ex01_sp.jpg" alt="" class="u-img__max u-only__sp">
            </a>
          </div>
        </div>
        <div class="wrapper wide">
          <div class="supervision">
            <figure><img src="<?php echo $img_url ?>/magazine/comic01/vol01/img03@2x.png" loading="lazy">
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
    <a href="<?php echo $base_url ?>/magazine/article/cafe-vol13-report.php" data-ga-click="<?php echo $filename ?>_imakuracafe_220224_<?php $CmGtmId = "2";
                                                                                                                                        echo $CmGtmId ?>">
      <img src="<?php echo $img_url; ?>/magazine/comic01/imakura_bnr_ex01.jpg" alt="あなたの“今”を聞かせて！いま暮らCafé テレワーク上手にしていますか？バナー" class="u-img__max u-only__pc center" loading="lazy" style="max-width: 740px;">
      <img src="<?php echo $img_url; ?>/magazine/comic01/imakura_bnr_ex01-sp.jpg" alt="あなたの“今”を聞かせて！いま暮らCafé テレワーク上手にしていますか？バナー" class="u-img__max u-only__sp center" loading="lazy" style="max-width: 317px;">
    </a>
  </aside>
</main>
<div class="mt8 mt3_sp mb2_sp">
  <mitsuketa-banner point-id="MitMagComicTidyEx01D20220901" img-url="<?php echo $img_url; ?>" login-url="<?php echo $login_url; ?>" :login-status="<?php echo $ssoFlag; ?>"></mitsuketa-banner>
</div>
<?php
$toindex_url = "/magazine/index_comic01.php";
include($inc_path . "/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
