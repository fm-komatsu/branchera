<?php
//base
include("../../function.php");
$content = get_id_data('12018');
$pageTtl = $content['title'];

//meta
$metaTtl = '収納専門家監修｜' . $pageTtl . '｜' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = 'プロ監修！テレワーク中に役立つ、自宅ワークスペースの配線整理術をご紹介します。パソコン周りのケーブル・コード類をきれいに整理する「3つのコツ」のほか、オフィスでの応用編も解説。';
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
        <p>働き方改革の一環で、テレワークが増えてきたパパ。いろいろと気を付けてくれてはいるものの、テレワークの多い週は、なんだか部屋がごちゃごちゃしている気が…。原因は、仕事に使うパソコン周りの機器のケーブルやコード！でも仕事で使うものだから、勝手に触るわけにもいかないし…どうしよう〜！</p>
      </div>
      <div class="talk">
        <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan02@2x.png" loading="lazy">
        </figure>
        <p>あらあら、しばらく見ないうちに、なんだかノートパソコンやプリンタの配線がすごいことになっているわね〜</p>
      </div>
      <div class="talk">
        <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura02@2x.png" loading="lazy">
        </figure>
        <p>そうなの！パパのテレワークで、リビングがワークスペースになって…パソコン周りのケーブルやコードが増えたんだよね。なんだかごちゃごちゃしてるよね〜</p>
      </div>
      <div class="talk">
        <figure><img src="<?php echo $img_url ?>/magazine/comic01/miichan01@2x.png" loading="lazy">
        </figure>
        <p>ごちゃごちゃ~！</p>
      </div>
      <div class="talk">
        <figure><img src="<?php echo $img_url ?>/magazine/comic01/sho02@2x.png" loading="lazy">
        </figure>
        <p>いやあ。僕も場所的に仕事しにくいんだけど、どうしようもないんだよ〜。毎日仕事で使うものだから、いちいち片付けるわけにもいかないし。</p>
      </div>
      <div class="talk">
        <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura02@2x.png" loading="lazy">
        </figure>
        <p>なんとかならないかしら〜、お母さん。整理できなくて困ってるの。</p>
      </div>
      <div class="talk">
        <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan03@2x.png" loading="lazy">
        </figure>
        <p>あら！簡単よ。ケーブルやコードは隠せばいいのよ！そうするとすっきりした空間になるわよ。さっそく、配線の整理術を紹介するわ！</p>
      </div>
    </section>
    <section class="comic-pink kaasan">
      <div class="wrapper">
        <p class="teach">
          <img data-src="<?php echo $img_url ?>/magazine/comic01/img02@2x.png" data-retina="<?php echo $img_url ?>/magazine/comic01/img02@2x.png" alt="お母さんからのアドバイス" style="" class="u-img__max">
        </p>
        <h3 class="u-font__palt">ワークスペースがごちゃつく原因のひとつは配線！</h3>
        <p class="mb2">自宅にしろオフィスにしろ、ワークスペースがごちゃごちゃして見えるのは、<strong class="red">電気機器のケーブル・コード類が主な原因</strong>になっていることが多いわ。基本的に、ケーブル・コード類はコンセントや電源タップがある場所に集まりやすいの。分散させにくい分、配線が混雑してしまうというわけ。中でも作業をする机周りは、パソコンやプリンタ、ルーターなどのパソコン周りの機器や、オーディオ機器の配線が集中しやすいごちゃごちゃスポットよ。</p>

        <p class="mb3">だからといって、放ったらかしはよくないわね。当然、見た目は悪くなるし、<strong class="red">作業スペースが狭くなる分、仕事に集中しづらい環境になってしまう</strong>わ。<br>そして、細部の掃除が難しくなるのも大問題よ！<strong class="red">電気機器には静電気でホコリがくっつきやすいから、火事の原因にもなって危ない</strong>の。コンセントタップから抜き差しする頻度の少ないケーブル・コード類の配線は、すっきり整理しておくのが1番！</p>

        <h3 class="u-font__palt">困った配線は、「隠す収納」で解決よ！</h3>

        <p class="mb2">パソコンやLANケーブル、プリンタ、スマートフォンの充電器、間接照明…ワークスペースには、たくさんのケーブル・コード類が付きものよね。しかも、機器によって太さや長さはバラバラ。何もせずにいたら、ごちゃごちゃして見えるのは当たり前よ。</p>

        <p class="mb2">こういう配線は、隠すのが一番すっきりして見えるわ。とにかく目立たないように、コンパクトにして隠すこと。コツは、「<strong class="red">まとめる・しまう・目立ちにくい場所に設置する</strong>」の3つよ！</p>

        <h4 class="u-ttl__m mt3">①まとめる</h4>

        <p class="mb2">太さも長さもバラバラの配線。でもひとつ共通点があるわ。それは、「電源に向かって伸びている」ということ。<strong class="red">行き先が同じなんだから、いっそのことまとめてしまいましょう</strong>。まとめる際に使う道具は、<strong class="red">結束バンドやマジックテープ</strong>がおすすめよ！</p>

        <p class="mb3">結束バンドとマジックテープは、巻き付けの強度を自分で調整できて、何度も取り外しができるのがポイント。増減したり、移動したりすることも多いケーブル・コード類をまとめるのに適しているわ。量販店でも簡単に手に入るグッズよ。</p>

        <h4 class="u-ttl__m mt3">②しまう</h4>

        <p class="mb2">配線をまとめたら、<strong class="red">電源タップごとしまう</strong>と、よりすっきりさせることができるわ。<strong class="red">市販のケーブルボックスやファイルボックス、レタートレー</strong>に収納しましょう。ギリギリのサイズよりも、電源タップを収納したときに少し余裕があるくらいがいいわね。そして熱がこもらないように、通気口があるものを選びましょう。熱がこもると、電気製品の故障や、ボックスの変形のおそれがあるので注意が必要よ。</p>

        <p class="mb3">プラスチックのボックスじゃなくても、サイズが合っていて通気口があれば、<strong class="red">木製の箱や籐のカゴでもOK！</strong>特にカゴは、通気性もよいので安全よ。部屋の雰囲気とマッチするデザインのものがあれば、ぜひそれを使ってみて。ただし、ホコリが溜まらないように注意してね！</p>

        <h4 class="u-ttl__m mt3">③目立ちにくい場所に設置する</h4>

        <p class="mb2">配線をまとめて収納したら、最後にそれを目立ちにくい場所に置きましょう。基本的には、壁に沿わせて置くことになるわね。そのときに注意するのが、できるだけ孤立しないようにすること。部屋の中にポツンとボックスがあると、悪目立ちして部屋の雰囲気を壊す原因になることもあるわ。</p>

        <p class="mb2">たとえばファイルボックスに配線をまとめた場合は、書類を入れたファイルボックスと並べて机の上に置くなど、<strong class="red">別の目的で使っているものと同じ場所に置くことで、統一感が出て部屋に馴染みやすくなる</strong>わ。テーブルや床、周りにある家具とボックスの色を合わせるのもおすすめの方法よ。それに、別のものと同じ場所にあると目が行きやすくなるから、掃除をせずに放置…ということも防げるわ。</p>

        <p class="mb3">また、「ボックスを置くスペースもできれば節約したい！」「床に置くものを増やしたくない！」という人は、<strong class="red">テーブルの天板の裏側につっぱり棒を2本渡し、その上にワイヤーネットを載せて「簡易ワイヤー棚」を作る</strong>のもいいわね。テーブル裏に設置したワイヤーにケーブル・コード類や電源タップを固定することで、表側には見えないように収納することができるの。ボックスを置くスペースも必要なくなるから、<strong class="red">よりコンパクトにまとめたい人におすすめのテクニック</strong>よ。ただし、うまくワイヤーに配線を沿わせる必要があるので、配置をしっかり考える必要があるわね。</p>

        <h3 class="u-font__palt">オフィスのワークスペースにも応用してみて！</h3>

        <p>おうちでできたケーブルやコードの配線を収納・整理するコツは、オフィスでも応用できるわよ！</p>

        <h4 class="u-ttl__m mt3">オフィスでもまとめる、しまうが有効</h4>

        <p>やっぱりオフィスでも、「配線はまとめる、しまう」が有効よ。自宅より多様なケーブル・コード類が集まっている分、オフィスの配線整理は「デスク上」と「デスク下（床）」の2箇所に分けて考えるのがおすすめ。それぞれの整理方法について解説するわね。</p>

        <h4 class="u-ttl__m mt3">デスク上はまとめる</h4>

        <p class="mb2">デスクの上の配線は、まず結束バンドやマジックテープでまとめましょう。配線がごちゃごちゃしていると、どんなに書類を整理していても片付いて見えないもの。仕事の効率にも影響するわ。</p>

        <p class="mb2"><strong class="red">クリップでコードの先を挟んで、数本のコードをまとめるだけ</strong>でも、ずいぶんすっきりするわよ。机の下にコードが落下するのも防げるしね。市販のコード用クリップには、カラフルでかわいいデザインのものもあるから、自分の好みに合うものを選ぶといいわよ。</p>

        <p class="mb2">あとは、マジックテープで配線をまとめながら、正面から見えないように床下の電源タップに向けて這わせていくとすっきり見えるわよ。</p>

        <p class="mb2">ちなみに、配線と一緒に書類も整理するのを忘れずに！書類が散らかっているとホコリが溜まる原因になる上、作業効率も下がってしまうわ。職場でも自宅のワークスペースでも、出し入れの手間がかかるポケットファイルよりも、ササっと出し入れできる<strong class="red">ファイルボックスに収納するのがおすすめ</strong>よ。</p>

        <p>そして、会議などに持ち運びする書類の管理におすすめなのが、<strong class="red">スライドバーファイル</strong>。書類に穴をあけることなく、ファイルのスライドバーに通すだけでノートのようにまとめることができるわ。背表紙の部分にマスキングテープを貼って、ラベリングすると書類を見つけやすくなるので便利なの。ぜひ試してみてね。</p>

        <h4 class="u-ttl__m mt3">デスク下（床）はしまう</h4>

        <p>デスクの下も、自宅同様、電源タップごとファイルボックスや市販のケースに入れてしまいましょう。または、<strong class="red">電源タップごとデスクの天板の裏に貼り付ける</strong>という手もあるわよ。そうすると床下に電源タップがなくなって、配線のごちゃごちゃが一気にすっきりするわ。</p>

        <h4 class="u-ttl__m mt3">人の動線は避けた位置に設置する</h4>

        <p class="mb2">「まとめる、しまう」に加えて重要なのが、動線の確保よ。家族しか立ち入らない自宅と違って、オフィスは複数人の同僚や来客が行き交う場所。<strong class="red">人が通るところに配線を置かないように、注意しましょう</strong>。床上で配線が混雑していると、怪我はもちろん、足が引っかかって電源が抜けてしまったり、配線コードが切れたりすることにつながるわ。仕事中は忙しいから、足元まで気が行き届かないもの。その分、事前の対策がポイントよ。</p>

        <p class="mb2">一番効果的なのは、<strong class="red">できるだけ床に直接ケーブル・コードを這わせないようにする</strong>こと！壁にケーブル・コードを覆う配線モールを設置する、デスクに後付けできるケーブルオーガナイザー（配線を整理してまとめる収納パネル）を設置して、床から浮かせた状態で収納するといった方法があるわ。</p>

        <p class="mb2">そして、長すぎるケーブルやコードの配線はそのままにせず、<strong class="red">余っている部分を小型のコードリールで巻き取りましょう</strong>。</p>

        <p class="mb0">オフィスの配線整理は同僚との協力も必要になるだろうから、まずは周囲に相談してみてね。</p>

      </div>
    </section>
    <section class="main__wrapper">
      <div class="wrapper narrow">
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/sho01@2x.png" loading="lazy">
          </figure>
          <p>すごいなあ、見違えたよ。配線を収納すると、こんなに広く空間が使えるんだね。資料も見やすくなったし、かなり快適になったよ！</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/miichan01@2x.png" loading="lazy">
          </figure>
          <p>すっきり～！</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/sakura01@2x.png" loading="lazy">
          </figure>
          <p>これなら、パパの仕事が終わった後、すぐにリビングとして使えるね！お母さん、ありがとう。</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/sho01@2x.png" loading="lazy">
          </figure>
          <p>家で配線整理をマスターしておけば、オフィスに戻ったときも役立つしな！お義母さんのおかげで助かりました…！</p>
        </div>
        <div class="talk">
          <figure><img src="<?php echo $img_url ?>/magazine/comic01/kaasan03@2x.png" loading="lazy">
          </figure>
          <p>ぜひ家でもオフィスでも使ってくださいな。集中力や作業効率をキープするためにも、整理整頓は大切ですもの！</p>
        </div>
        <div class="intro mb6">
          <p>驚いたぁ。テレワークでリビングがワークスペースになっちゃって、どうしたものかと思っていたけれど…お母さんのお陰ですっかり解決したわ！にしても、ケーブルやコードの配線をすっきりさせると、こんなに広々とすっきりして見えるものなのね。ホコリもたまりづらくなったし、お掃除も手早くできるようになって、時間の節約にもなったわ。パパも仕事に集中しやすいみたい。配線をまとめるのって始める前は億劫だったけれど、やる価値は十分あったわ！</p>
        </div>

        <div class="mb6">
          <div>
            <a href="<?php echo $base_url ?>/magazine/article/sumai-sos-vol03.php" data-ga-click="pr_<?php echo $filename ?>_pc" class="u-only__pc">
              <img src="<?php echo $img_url ?>/magazine/comic01/comic-tidy-ex02_pc.jpg" alt="「ワンポイントアドバイス」テレワークをスムーズにするコツって？｜リンクバナー" class="u-img__max u-only__pc">
            </a>
            <a href="<?php echo $base_url ?>/magazine/article/sumai-sos-vol03.php" data-ga-click="pr_<?php echo $filename ?>_sp" class="u-only__sp">
              <img src="<?php echo $img_url ?>/magazine/comic01/comic-tidy-ex02_sp.jpg" alt="「ワンポイントアドバイス」テレワークをスムーズにするコツって？｜リンクバナー" class="u-img__max u-only__sp">
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
          <small class="u-small mb3">※当サイトの記事の内容に関しましては、細心の注意を払っておりますが、情報の正確性、完全性、合法性等を保証するものではありません。予めご了承ください。</small>
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
<?php
$toindex_url = "/magazine/index_comic01.php";
include($inc_path . "/lib/inc/toindex__magazin.php");
?>
<?php  /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
