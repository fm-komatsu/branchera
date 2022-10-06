<?php
  //base
  include( "../../function.php" );
  $content = get_id_data( '12019' );
  $pageTtl = $content[ 'title' ];

  //meta
  $metaTtl = 'スマホで撮った写真の整理法は？すぐに見つかる整理術を伝授！ ｜' . siteName();
  //$metaDesc = siteDesc($pageTtl);
  $metaDesc = 'プロ監修！たまりがちなスマホの写真整理術をご紹介します。上手に整理するポイントである「仕分け」と「バックアップ」方法のほか、残しておきたい写真のおすすめ保管方法を解説。';
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
      //include( $inc_path . "/lib/inc/page/_magazine/__comicex-header.php" );
    ?>
    <?php
      include( $inc_path . "/lib/inc/page/_magazine/__comic-header-cm_ex01.php" );
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
      <p>お部屋の片付けについては分かってきた私、サクラ。だけど、スマホの中は片付いていない…！半年前に撮った家族写真が、見つからないの！考えたら1度もスマホの写真を整理していなかったわ。写真データの整理のコツとかあるのかしら？</p>
    </div>
    <div class="talk">
      <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura02@2x.png" loading="lazy">
      </figure>
      <p>あれ～？この間スマホで撮った写真が見つからな～い！</p>
    </div>
    <div class="talk">
      <figure><img src="<?php echo $img_url ?>/magazine/comic01/sho01@2x.png" loading="lazy">
      </figure>
      <p>どれどれ、ちょっとスマホを見せて…う～ん、写真データが多すぎて、探しづらいな～</p>
    </div>
    <div class="talk">
      <figure><img src="<?php echo $img_url ?>/magazine/comic01/miichan01@2x.png" loading="lazy">
      </figure>
      <p>みぃちゃんのしゃしんどこ～？</p>
    </div>
    <div class="talk">
      <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura02@2x.png" loading="lazy">
      </figure>
      <p>あーあ。ちゃんとフォルダ分けしておけばよかった…</p>
    </div>
    <div class="talk">
      <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan02@2x.png" loading="lazy">
      </figure>
      <p>あら、スマホの写真、全然整理されてないじゃないの！</p>
    </div>
    <div class="talk">
      <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura02@2x.png" loading="lazy">
      </figure>
      <p>だって面倒なんだも～ん！</p>
    </div>
    <div class="talk">
      <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan03@2x.png" loading="lazy">
      </figure>
      <p>スマホのデータもお部屋と一緒！きちんと片付けないと後で困るのは自分なんだから！<br>さっ、今からスマホの写真の整理整頓の方法を伝授するわよ！</p>
    </div>
    </section>
    <section class="comic-pink kaasan">
      <div class="wrapper">
        <p class="teach">
          <img
            data-src="<?php echo $img_url ?>/magazine/comic01/img02@2x.png"
            data-retina="<?php echo $img_url ?>/magazine/comic01/img02@2x.png"
            alt="お母さんからのアドバイス"
            style=""
            class="u-img__max"
          >
        </p>
        <h3 class="u-font__palt">スマホの写真の整理は、仕分けとバックアップがポイントよ！</h3>
        <p class="mb2">スマホって、高性能なカメラが付いているから、手軽にきれいな写真が撮れて便利よね。だけど、ついつい撮りっぱなしにしていない？<br>撮った写真を整理しないでいると、後から「あの写真が見たい」と思って探しても、なかなか見つからないということになってしまうわよ。<br>スマホの中身も、お部屋と同じように考えればよいの。こまめに片付けることが大事なのよ。</p>

        <p class="mb3">片付けるときに大切なことは、<strong class="red">いらないものはどんどん削除して、いるものは仕分けて上手に分類するということ</strong>よ。<br>「どんどん削除する」といっても、あくまでもスマホの中から削除するだけの話。きちんとバックアップを取っておけば、あとでもう一度見たくなっても安心でしょう？</p>

        <p class="mb3">じゃあ、バックアップの方法はどうすればよいと思う？具体的なやり方を紹介するわね。</p>

        <h3 class="u-font__palt">大量の写真を整理するには、まずはバックアップからスタート！</h3>

        <p class="mb2">写真を仕分けるときに重要なバックアップは、写真データを削除する前に行っておくことが大切よ。具体的なバックアップの方法を伝授するわね。</p>

        <h4 class="u-ttl__m mt3">写真データのバックアップの方法</h4>

        <p class="mb2"><strong class="red">パソコンや外付けのハードディスク</strong>にスマホの写真データをすべて保存して、バックアップするわよ。<strong class="red">Androidのスマホなら、microSDカードに保存する</strong>こともできるわね。あと、写真データのような容量の大きいデータは、<strong class="red">“クラウド”というネットワーク上のサービスに保存する</strong>のもおすすめよ。</p>

        <h4 class="u-ttl__m mt3">バックアップの注意点</h4>

        <p class="mb2">写真データをバックアップするときには、注意したい点があるわ。まず、<strong class="red">バックアップは完璧なものではない</strong>という認識でいないとだめよ。パソコンも外付けのハードディスクも、「壊れない」とは限らないわよね。クラウドサービスにしたって、トラブルがないとは言い切れないでしょう？</p>

        <p class="mb3">だから、パソコンやハードディスクのようなオフラインで利用できるデバイス（装置）やメディアと、クラウドのようなオンラインのサービスに分けて、<strong class="red">2カ所に保存しておく</strong>とよいわね。どちらかが使えなくなっても、もう片方から写真データが復旧できるから安心よ！</p>

        <h3 class="u-font__palt">スマホからいらない写真は全部削除！残した写真は仕分けして整理</h3>

        <p class="mb2">バックアップができたら、いよいよスマホの写真を整理していくわよ。いらない写真の削除と、いる写真の仕分けから始めましょう。それぞれのやり方を紹介するわね。</p>

        <h4 class="u-ttl__m mt3">不要な写真を削除</h4>

        <p class="mb2">写真の中には、ピンボケのものやブレてしまったものなど、失敗した写真もあるわよね。そういったものをまずは削除していくの。それから重複している写真があったら、それも削除ね。</p>

        <p class="mb2">スマホの写真を見て、1枚1枚チェックするの。でも、時間と手間がかかって大変なら、<strong class="red">重複した写真や似た写真を見つけてくれるアプリ</strong>があるので、使ってみてもよいかもね。</p>

        <p class="mb3">ここまでやったら、<strong class="red">一旦バックアップをとっておく</strong>の。バックアップの具体的な方法は後で説明するわね。バックアップがとれたら、<strong class="red">本当に残しておきたい写真以外をすべてスマホから削除</strong>していくわよ。バックアップがあるから、万が一間違えて必要な写真を消してしまっても大丈夫！</p>

        <h4 class="u-ttl__m mt3">必要な写真を仕分け</h4>

        <p class="mb2">必要な写真に絞ったら、いよいよ写真の仕分け作業をしていくわ。まず、スマホ内の写真を<strong class="red">年ごとに分類する</strong>の。スマホによっては、年単位で自動的に分けてくれる機能もあるわよ。年ごとに分けた写真データを、さらに月ごとに分けていきましょう。</p>

        <p class="mb2">また、「旅行」とか「お正月」とか、<strong class="red">イベントごとにテーマを決めてフォルダ</strong>を作るのもおすすめよ。特に気に入っている写真だけを集めて、お気に入りフォルダに分類するのもよいと思うわ。こうやって、自分なりに写真を仕分けるのよ。</p>

        <p class="mb3">できれば、ピンボケや失敗の写真は、撮ったらできるだけ速やかに整理するクセを身に付けておくといいわ。また、本当に必要な写真かどうかを判断するための仕分けは、半年〜1年ごとくらいを目安に、定期的に行うのがおすすめよ。分類する際に、古い年の写真はすべてスマホから削除していくと、スマホの写真が常に整理されてすっきりするわ。削除する前にバックアップを取っておけば、思い切って捨てられるでしょう。その方法も説明しておくわね。</p>

        <h3 class="u-font__palt">ずっと残しておきたいスマホの写真は、フォトブックやアルバムにして整理！</h3>

        <p>スマホの写真で<strong class="red">特に気に入っているものは、プリントしてまとめておく</strong>のもおすすめよ。写真データのプリントには、1枚1枚をプリントする写真プリントのほかに、アルバムの様なデザインが施されたフォトブックも人気よ。家族みんなの思い出や子供の成長記録として、定期的にフォトブックを作っている人もいるそうよ。</p>

        <p class="mb0">写真データのプリントは、仕分けしてフォルダに分類したスマホの写真から、必要なものを選んでプリントアウトするの。少量なら自宅のプリンターで作業をすればよいけれど、大量にプリントしたい場合は、外部の業者にオーダーしてもよいわね。<strong class="red">スマホから、簡単にプリントのオーダーができるサービスやアプリ</strong>もあるわよ。スマホ専用のフォトプリンターも販売されているから、興味がある人は家電量販店を見てみてね。</p>

      </div>
    </section>
    <section class="main__wrapper">
      <div class="wrapper narrow">
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura01@2x.png" loading="lazy">
          </figure>
          <p>スマホの中の写真、すごく見やすくなったわ～！</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/sho01@2x.png" loading="lazy">
          </figure>
          <p>本当だ！「家族」や「みぃちゃん」のカテゴリーもあるね～<br>これなら、すぐに探せそう！<br>今までクラウドサービスやアプリをうまく使いこなせてなかったけど、これからはうまく活用できそうだな！</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan01@2x.png" loading="lazy">
          </figure>
          <p>スマホはすっきりしたけど、ちゃんとバックアップを取ってあるから必要なときはまた見ることができるしね</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/miichan01@2x.png" loading="lazy">
          </figure>
          <p>みぃちゃんのしゃしん、いっぱいあるね～</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/sho01@2x.png" loading="lazy">
          </figure>
          <p>あれ、僕のカテゴリーも作ったんだ？ちょっと照れるなぁ〜！</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura01@2x.png" loading="lazy">
          </figure>
          <p class="u-font__palt">そうなの、パパが酔っ払って熱唱してたときの写真も入れちゃった♪</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/sho02@2x.png" loading="lazy">
          </figure>
          <p>ちょっと！そんな写真はすぐに削除してよーっ！</p>
        </div>
        <div class="intro mb6">
          <p>スマホの写真って、どれも大切な思い出だから、なかなか削除できないのが悩みだったの。だけど、バックアップをとっておけば、安心してスマホから削除できるんだって分かったわ！面倒な仕分けも1年に1回って決めれば、私にもできそう！何より、仕分けをきっかけにフォトブックを作って、家族の思い出を共有できるのがとっても嬉しい～！<br>これからはちゃんと仕分けしながら、いろいろな写真を撮っていこう♪</p>
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
          <small class="u-small mb3">※当サイトの記事の内容に関しましては、細心の注意を払っておりますが、情報の正確性、完全性、合法性等を保証するものではありません。予めご了承ください。</small>
        </div>
        <?php include ($inc_path."/lib/inc/page/_magazine/__back_num.php") ?>
    </section>
  </article>
	<aside class="mt3 mb3">
    <a href="<?php echo $base_url ?>/magazine/article/cafe-vol13-report.php" data-ga-click="<?php echo $filename ?>_imakuracafe_220224_<?php $CmGtmId = "2"; echo $CmGtmId?>">
      <img src="<?php echo $img_url; ?>/magazine/comic01/imakura_bnr_ex01.jpg" alt="あなたの“今”を聞かせて！いま暮らCafé テレワーク上手にしていますか？バナー" class="u-img__max u-only__pc center" loading="lazy" style="max-width: 740px;">
      <img src="<?php echo $img_url; ?>/magazine/comic01/imakura_bnr_ex01-sp.jpg" alt="あなたの“今”を聞かせて！いま暮らCafé テレワーク上手にしていますか？バナー" class="u-img__max u-only__sp center" loading="lazy" style="max-width: 317px;">
    </a>
  </aside>
</main>
<?php
  $toindex_url = "/magazine/index_comic01.php";
  include( $inc_path . "/lib/inc/toindex__magazin.php" );
?>
<?php  /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
