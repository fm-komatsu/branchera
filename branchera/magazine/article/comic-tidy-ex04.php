<?php // 200923UP
  //base
  include( "../../function.php" );
  $content = get_id_data( '12020' );
  $pageTtl = $content[ 'title' ];

  //meta
  $metaTtl = '冷蔵庫を整理して、使いやすく見やすく上手に食材管理！ ｜' . siteName();
  //$metaDesc = siteDesc($pageTtl);
  $metaDesc = 'プロ監修！冷蔵庫の整理術をご紹介します。各食材をどの位置に置けばよいのか、冷蔵庫収納のポイントを分かりやすく解説。整理整頓に役立つ収納グッズもご紹介します。';
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
    include( $inc_path . "/lib/inc/page/_magazine/__comic-header.php" );
    ?>
	<!--<section class="comic">-->
		<div class="comic-header__ex">
			<!-- <div class="comic-header__tags u-tags">
				<h5 class="u-tags__ttl">キーワード</h5>
				<div class="u-tags__row">
					<?php echo show_content_tags($content); ?>
				</div>
			</div>
		
				<h2 class="comic-header__ttl"><?php echo $pageTtl; ?></h2>-->
		</div>
    <div class="intro">
      <p>どこに何が入っているかが分かりづらい、我が家の冷蔵庫。さっきからみぃちゃんはプリン、パパはビールを探して大騒ぎ！そういう私も、料理するたびに食材を捜索…。あ〜あ、冷蔵庫がすっきりしていたら、時間も電気代も節約できそうなのに。整理整頓の方法が知りたい！</p>
    </div>
    <div class="talk">
      <figure><img src="<?php echo $img_url ?>/magazine/comic01/miichan01@2x.png" loading="lazy">
      </figure>
      <p>ママ、みぃちゃんのプリン、どこ？</p>
    </div>
    <div class="talk">
      <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura01@2x.png" loading="lazy">
      </figure>
      <p>ん～？冷蔵庫の下の段に置いたよ。みぃちゃん取れるかな〜？</p>
    </div>
    <div class="talk">
      <figure><img src="<?php echo $img_url ?>/magazine/comic01/miichan01@2x.png" loading="lazy">
      </figure>
      <p>いすにのったらとれるよ〜！<br>…あれ？プリンないよー</p>
    </div>
    <div class="talk">
      <figure><img src="<?php echo $img_url ?>/magazine/comic01/sho01@2x.png" loading="lazy">
      </figure>
      <p>どれどれ。ああ、ここだ！下の段じゃないよ。プリンは上の段の奥に入っていたよ</p>
    </div>
    <div class="talk">
      <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura01@2x.png" loading="lazy">
      </figure>
      <p>な〜んだ、上の段だったのかー！</p>
    </div>
    <div class="talk">
      <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan02@2x.png" loading="lazy">
      </figure>
      <p>「な〜んだ」じゃないわよ、サクラ。何がどこにあるのか、冷蔵庫の中をちゃんと把握しなくちゃ！それにプリンを上の段に置いていたら、みぃちゃんが取れないじゃないの</p>
    </div>
    <div class="talk">
      <figure><img src="<?php echo $img_url ?>/magazine/comic01/sho01@2x.png" loading="lazy">
      </figure>
      <p>そうか。そういうことなら、僕のビールが一番低い所にあるのもいけないのかな</p>
    </div>
    <div class="talk">
      <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan03@2x.png" loading="lazy">
      </figure>
      <p>そういうこと！冷蔵庫の中身をすっきりきれいに整理整頓して、みんなが使いやすくする方法を伝授するわよ</p>
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
        <h3 class="u-font__palt">冷蔵庫の整理の基本「定位置を守るべし」！</h3>
        <p class="mb2">何がどこにあるのか、<strong class="red">家族みんなが分かる共通のルール</strong>を作るのが冷蔵庫内の収納術のコツよ。たとえば、「プリンはいつもここ」という具合に、<strong class="red">よく買う食材は定位置、決まった場所に収納</strong>しましょう。</p>

        <p class="mb2">そして定位置を管理するには、「<strong class="red">ラベリング</strong>」が大切！直接冷蔵庫にものを積み重ねるんじゃなくて、ラベルを貼ったトレーやケースにまとめるの。</p>

        <p class="mb2">たとえばみぃちゃんのおやつは、「みぃちゃん」と書いたラベルを貼ったケースに入れておくのよ。そこに、プリンやゼリーはまとめておくといいわ。ほかのラベリングの例としては、朝食に使うヨーグルトやジャムをまとめた「朝食」、醤油やソースをまとめた「調味料」、作り置きしたおかずを入れる「常備菜」などがあるわね。これはあくまで例だから、自分たちが分かりやすいようにグルーピング・ラベリングしてOKよ。</p>

				<p>まとめるときは<strong class="red">白や透明の浅い収納ケース</strong>を使うと、何が入っているのかが分かりやすくなるわ。特におすすめなのは、<strong class="red">冷蔵庫の奥行きを生かせる縦長のトレー</strong>。奥の方に入っている食材って、手前の食材を避けないと出せない分、使いづらいわよね。でも、トレーにのせた状態で入れておけば、トレーを引けば簡単に取り出せるから便利よ。ほかにも次のようなメリットがあるから、ぜひトレー収納を取り入れてみてね。</p>

				<h4 class="u-ttl__s mt3">＜トレーを使うメリット＞</h4>
				<ul class="u-list__ul_maru">
					<li>奥のものを確認しやすくなる</li>
					<li>食べるとき、料理に使うときに運びやすくなる</li>
					<li>まとめて取り出せるので、冷蔵庫内を掃除しやすくなる</li>
					<li>汚れたときも、トレーを洗うだけできれいにできる</li>
				</ul>
				<p class="mb3">土の付いた野菜など、汚れが冷蔵庫内に落ちやすい食材もトレーを使うといいわ！</p>

        <h3 class="u-font__palt">冷蔵室・野菜室・冷凍庫。それぞれの収納ポイントとは？</h3>

        <p class="mb2">食材の定位置は、各家庭の使いやすい場所に決めるのが一番。とはいえ、「どういう風に場所を決めればいいか分からない」という人もいるんじゃないかしら。<br>冷蔵室・野菜室・冷凍庫、どこに入れるかによって収納するときのポイントは違うの。だから、<strong class="red">それぞれのポイントを押さえておくと、定位置が決めやすくなる</strong>わよ。詳しく紹介するから、参考にしてみてね。</p>

        <h4 class="u-ttl__m mt3">冷蔵室は、<span class="u-color__red">賞味期限&使用頻度</span>別に食材を入れるのがおすすめ！</h4>

        <p class="mb2">冷蔵室は、<strong class="red">賞味期限の長さと使用頻度で定位置を考える</strong>といいわ。<br>賞味期限の長い味噌やビール、たまにしか使わない食材は上の段、賞味期限の短いお惣菜や、毎朝使うバターやヨーグルトは取り出しやすい中下段、という具合にね。こうすることで、「冷蔵室内で食材を腐らせてしまった」「まだあるのに、見つけられずに新品を買ってきてしまった」という事態を防ぐことができるわよ。たとえば、以下のような振り分け方がおすすめよ。</p>

				<h5 class="u-ttl__s mt1 mb0">●上段</h5>
				<p>賞味期限の長いもの、使用頻度が低いもの：味噌、梅干し、粉物、お酒など</p>

				<h5 class="u-ttl__s mt1 mb0">●中下段</h5>
				<p>賞味期限の短いもの、使用頻度が高いもの：卵、ジャム、作り置きのお惣菜など</p>
				<h5 class="u-ttl__s mt1 mb0">●ドアポケット</h5>
				<p>調理中すぐに取り出したいもの、1日に何度も使うもの：醤油、ソースなどの調味料、わさびやからしなどのチューブ、ペットボトルの飲料</p>
				<h5 class="u-ttl__s mt1 mb0">●チルド室</h5>
				<p>生鮮食品：肉、魚など</p>

				<p>特に賞味期限の短い食品は、賞味期限の表示を手前にして、見えやすい状態で保存するようにしてね。</p>

        <h4 class="u-ttl__m mt3">野菜室は、紙袋やケースを使って「立てて収納」！</h4>
				<p class="mb2">野菜室は冷蔵庫と違って仕切りが少ないし、深さがあるから上手に収納するのが難しいわよね。そこでおすすめしたいのが、<strong class="red">紙袋やケースを使って立てて収納</strong>すること！野菜は、畑に生えているときと近い状態にして置くと、新鮮さを保って保存できるのよ。</p>
				<p class="mb2">だから、ほうれん草や小松菜、長ねぎなどの青菜は、縦長の紙袋やケースに立てて入れた状態で、野菜室に入れましょう。紙袋やケースは仕切り代わりになるから、どこに何が入っているかも分かりやすくなるわよ。</p>
				<p class="mb3">また、野菜室がいっぱいにならないようにするためにも、常温保存できる野菜は選別しておくといいわ。たとえば、切る前の玉ねぎやじゃがいも、かぼちゃは基本的に常温保存でOKよ。</p>

        <h4 class="u-ttl__m mt3">冷凍庫はエリア分け×立てて収納がおすすめ！</h4>

			<p class="mb2">上段と下段に分かれた引き出し型が多い冷凍庫。つい重ねて収納してしまいがちだけど、野菜室同様、<strong class="red">袋やケースに入れて立てて収納するのがおすすめ</strong>よ。そして見えやすい上段は、カット野菜などのまだ素材の状態の食材。死角になる下段は、加熱調理するだけで食べられる食品、という分け方で収納すると、食材の使い忘れを防ぎやすくなるわ。さらに細かくグルーピングしたいときは、各段にトレーや仕切りスタンドを入れて、その中に食材を収納してね。</p>
			<p class="mb3">そして、ラベリングをするのも忘れずに！立てて収納すると、すっきりする代わりに中身が分かりづらくなるから、<strong class="red">袋の上部に日付と食材名を書く</strong>といいわよ。これで、いつ冷凍した何の食材かが一目瞭然よ。</p>

        <h3 class="u-font__palt">整理整頓ができたら定期的な掃除も取り入れて！</h3>

        <p class="mb2">これまで説明してきた方法で冷蔵庫の整理整頓ができたら、次は<strong class="red">定期的な掃除</strong>も取り入れてみて！トレーやケースに入れて収納すると、冷蔵庫に入っているものの出し入れが簡単にできるはずよ。一度に全体の掃除をするのは大変だけど、1日に1段ずつ棚板を拭くのを習慣にすれば、手軽に清潔さを保てるわ。そして、食材の在庫点検も同時に行えば一石二鳥♪</p>

				<p class="mb0">冷蔵庫をすっきりきれいにしておくことは、食中毒やにおいの発生防止にもなるの。ぜひ定期的な掃除を心がけてね。</p>
      </div>
    </section>
    <section class="main__wrapper">
      <div class="wrapper narrow">
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura01@2x.png" loading="lazy">
          </figure>
          <p>よ〜し、これで整理は完璧よ！</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/miichan01@2x.png" loading="lazy">
          </figure>
          <p>ママ、おなかいっぱいになっちゃった。プリン、あとではんぶんたべる〜</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura01@2x.png" loading="lazy">
          </figure>
          <p class="u-font__palt">はいはい。みぃちゃんのプリンは下の段の、このケースに入れておくからね。うさちゃんのシールが貼ってあるから、分かりやすいでしょ？</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan01@2x.png" loading="lazy">
          </figure>
          <p>よかったわね、みぃちゃん。これから冷蔵庫の中を探さなくてもいいのよ♪</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/sho01@2x.png" loading="lazy">
          </figure>
          <p>なるほど。僕のビールは一番上の段にまとめたんだね！こうしておくと、在庫が一目で分かって便利だな〜</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura01@2x.png" loading="lazy">
          </figure>
          <p class="u-font__palt">お母さん、ありがとう。おかげで助かっちゃった！整理整頓したら、スペースに余裕が出て見やすくなったわ！</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan01@2x.png" loading="lazy">
          </figure>
          <p>見違えたわ〜！整理できていると食材の在庫確認がしやすくなるから、これからはムダ買いもなくなるわね！</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura01@2x.png" loading="lazy">
          </figure>
          <p class="u-font__palt">ギクッ。空いたスペースに私の缶チューハイの在庫、追加する気満々だったんだけど…</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan01@2x.png" loading="lazy">
          </figure>
          <p>おいおいっ！</p>
        </div>
        <div class="intro mb6">
          <p>驚いた！冷蔵庫の整理整頓をしてみたら、いいことがたくさん！みぃちゃんもパパも、どこに何があるか、私に聞かなくても分かるようになったし。それぞれの食材の残り具合もすぐ分かるから、「まだ残っているのに新品を買ってきちゃった！」ということもなくなりそう♪冷蔵庫の整理整頓は、ただきれいになるだけじゃなくて、経済的な効果もあるんだなあ〜！</p>
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
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php");?>
	</aside>
</main>
<?php
  $toindex_url = "/magazine/index_comic01.php";
  include( $inc_path . "/lib/inc/toindex__magazin.php" );
?>
<?php  /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
