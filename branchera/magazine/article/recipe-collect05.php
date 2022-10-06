<?php
//base
include( "../../function.php" );
$content = get_id_data( '13005' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = 'ウイルスから体を守るために必要な、免疫力アップをサポートする食材とレシピをご紹介します。管理栄養士監修のもと、各栄養素がどのような働きをするのかも解説！';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe recipe-collect";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//導入文
$introTxt = '免疫力アップをサポートする食材とレシピをまとめてご紹介します。';

//セリフ
$sp01 = array ( //'icon','icon-num','text'
  //フラッキー　通常
  array('fl','01','健康な体づくりには、なんと言っても“食”が大事！<br>
  食材に含まれている栄養素をうまく組み合わせて、風邪にも負けない健康な体を手に入れようぜ！<br>
  というわけで今回は、栄養豊富な食材を使ったレシピを紹介するぞ！<br>
  どんな栄養素が含まれるのかも解説するから、しっかりチェックしてくれよな♪
'),
);

$info = array (
/* template
  array (
    'title' => '',
    'text' => '',
    'moveid' => '',
    'btn' => '',
    'link' => 'recipe-technic'
  ),
*/
  array (
    'title' => 'きのこは洗う？洗わない？風味が落ちない下ごしらえ方法',
    'text' => '<span class="u-ilblock mb2">食材から健康に効果的な”菌”を取り入れる”菌活”。この菌活によく用いられているのが、きのこです！きのこには免疫力を高め、体を守る作用が期待できるβ-グルカンや、肝臓の代謝や解毒作用を助けるオルニチンが豊富に含まれています。中でもしいたけやまいたけは、β-グルカンの含有量が多い品種なんですよ♪</span>
    <span class="u-ilblock">
    そんなきのこを美味しく食べるには、正しく下ごしらえをすることが大事！「きのこは洗う？洗わない？」といった基本情報から、まいたけやしめじなど種類別の下ごしらえ方法をご紹介します。うまみを逃さない冷凍保存のコツも合わせてチェック！</span>
    ',
    'moveid' => 'sqxWgEEu-cI',
    'btn' => 'きのこの下ごしらえ',
    'link' => 'recipe-technic27'
  ),
  array (
    'title' => '鮭ときのこで作る簡単ご飯ピザ',
    'text' => 'きのこの下ごしらえができたら、さっそく調理！フライパンで超簡単に作れる、「鮭ときのこのご飯ピザ」がおすすめです。<br>
    鮭の赤い色素成分であるアスタキサンチンは、ビタミンEの約1000倍の抗酸化作用があるといわれています。免疫力低下の原因になる活性酸素を抑える働きや、疲労回復が期待できる成分です。免疫力アップコンビの鮭ときのこを使って、外はカリカリ中はモチモチ♪なご飯ピザを作ってみませんか？ボリューム満点なので、育ち盛りの子どもたちにもぴったりですよ！
    ',
    'moveid' => 'OummRVHTIRM',
    'btn' => '鮭ときのこで作る<br>簡単ご飯ピザ',
    'link' => 'recipe21'
  ),
  array (
    'title' => 'ごぼうのささがきの方法',
    'text' => '免疫力強化や風邪予防に適しているといわれているのが、根菜です。中でもごぼうには、腸内環境を整えてくれる不溶性食物繊維・リグニンが豊富に含まれています。<br>
    しっかりした歯ごたえが特徴のごぼうですが、「ささがき」という切り方をマスターすれば、程よいかたさを楽しむことができますよ♪上手なささがきの方法を中心に、ごぼうをさらに美味しくする下処理のコツや保存方法もご紹介します。
    ',
    'moveid' => 'zSq9lGghl6o',
    'btn' => 'ごぼうのささがきの方法',
    'link' => 'recipe-technic45'
  ),
  array (
    'title' => '鶏と根菜の味噌バター炒め',
    'text' => 'ごぼうだけでなく、れんこん、にんじんも一気に摂取できる根菜メニューをご紹介！<br>
    れんこんに含まれるビタミンCは、免疫力を支える白血球の働きをサポート。にんじんに含まれるβカロテンは、血管や気管支の粘膜を正常にする働きが期待できます。<br>
    これら3種類の根菜に加え、血液や筋肉を作るのに欠かせない、タンパク質豊富な鶏肉をプラスした「鶏と根菜の味噌バター炒め」。ぜひ、動画で作り方をチェックしてくださいね！
    ',
    'moveid' => 'OVoBtIXhr4Y',
    'btn' => '鶏と根菜の味噌バター炒め',
    'link' => 'recipe01'
  ),
  array (
    'title' => 'ブロッコリーのゆで方',
    'text' => '緑が鮮やかなブロッコリーに多く含まれるビタミンE。血行を促進する働きがあり、抗酸化作用もある免疫力アップにうれしい栄養素です。ブロッコリーの栄養を無駄なく摂取するには、茎も捨てずにゆでることが大切！上手な切り分け方やゆで方、電子レンジで加熱する方法や冷凍保存方法をご紹介します♪
    ',
    'moveid' => 'wSLggmREfAQ',
    'btn' => 'ブロッコリーのゆで方',
    'link' => 'recipe-technic46'
  ),
  array (
    'title' => 'かぼちゃの下ごしらえ',
    'text' => '「3大抗酸化ビタミン」と呼ばれるビタミンC、ビタミンE、βカロテン（体内に入るとビタミンAに変換される）などを豊富に含むかぼちゃ。免疫力アップや疲労回復作用が期待できる、積極的に摂取したい食材のひとつです。<br>
    かたい皮が包丁で切りにくく、下ごしらえに苦労した方も多いかもしれませんね。でも実は、コツさえ覚えれば意外と簡単にできるんです！<br>
    基本の下ごしらえの方法に加えて、コロッケ、煮物、天ぷらなど、料理別の下ごしらえの方法も確認しておきましょう♪
    ',
    'moveid' => 'a1Mbu2si_KM',
    'btn' => 'かぼちゃの下ごしらえ',
    'link' => 'recipe-technic31'
  ),
  array (
    'title' => '白髪ねぎの作り方',
    'text' => '料理を華やかにしてくれる白髪ねぎ。白ねぎには、「硫化アリル」という栄養素が豊富に含まれています。この硫化アリルはねぎ独特のツンとした香りのもとですが、実は体にもよい働きをする栄養素なんです！ビタミンB1の吸収力を高め、体内に長く留まらせるため疲労回復の効果をアップさせるほか、殺菌や免疫力を高める働きが期待できます♪<br>
    白ねぎを摂取するのに役立つ白髪ねぎを美味しく作るには、シャキシャキした食感をいかに出せるかがポイント！基本の作り方から、フォークを使った簡単な作り方まで詳しく解説します。
    ',
    'moveid' => '5evkqwoqJ_k',
    'btn' => '白髪ねぎの作り方',
    'link' => 'recipe-technic36'
  ),
  array (
    'title' => '玉ねぎのみじん切りの方法',
    'text' => 'カレーやハンバーグなど、さまざまなレシピで活躍する玉ねぎ。玉ねぎにも、ねぎと同じく硫化アリルが含まれています。そして実はこの硫化アリルが、玉ねぎを切るときに出る涙の原因！「目が痛くて、みじん切りが上手にできない…」という方もいるのではないでしょうか？そこで、みじん切りの正しい手順と、なるべく涙が出ないようにするポイントを併せてご紹介！難なく玉ねぎを切って、免疫力アップのためにたくさん摂取できるようにしておきましょう♪
    ',
    'moveid' => 'MTrHK7aJcmo',
    'btn' => '玉ねぎのみじん切りの方法',
    'link' => 'recipe-technic16'
  ),
  array (
    'title' => '玉ねぎと干し桜えびのチーズチヂミ',
    'text' => '玉ねぎを使ったおすすめレシピをご紹介！免疫力アップが期待できる玉ねぎと、カルシウムや鉄分が豊富な干し桜えびを使ったチーズチヂミのレシピです。<br>
    パリッとしたチーズの食感と、玉ねぎと干し桜えびの香ばしさが引き立ちます。<br>
    余った物で簡単に作れるレシピなので、ほかの食材や、冷凍食品を刻んで入れてもOK♪「もう一品ほしい！」というときに、ぜひチャレンジしてくださいね。
    ',
    'moveid' => 'gSxSm_SAFBQ',
    'btn' => '玉ねぎと干し桜えびの<br>チーズチヂミ',
    'link' => 'recipe07'
  ),
  array (
    'title' => '餃子の焼き方',
    'text' => '<span class="u-ilblock mb2">にんにくの香りが食欲をそそる餃子。実は、餃子は免疫力アップをサポートする食材がたくさん入っている料理なんですよ！<br>
    餃子の具に欠かせないにんにく、ニラには、ねぎと同じ硫化アリルが含まれています。さらに、餃子に使われる青ねぎに付着しているヌルっとした粘液には、免疫を活性化させる働きがあるとされ、注目を集めています。</span>
    <span class="u-ilblock">
    ただし、おうちで餃子を作ると、焼きムラができたり、パリッとした食感にならなかったりすることもありますよね。餃子のパリパリ食感を出すためには、焼き方にちょっとしたコツがあるんです。基本の餃子の焼き方から、きれいな羽根つき餃子の作り方まで詳しく解説します♪
    </span>
    ',
    'moveid' => 'WGKObaiPk1E',
    'btn' => '餃子の焼き方',
    'link' => 'recipe-technic88'
  ),
  array (
    'title' => '基本の味噌汁の作り方',
    'text' => '免疫力アップに効果的とされるのが発酵食品。乳酸菌や納豆菌、酵母菌など、微生物の力で食材を発酵させた食品は、元の状態よりも栄養価が高められます。発酵食品には、納豆、ヨーグルト、甘酒などさまざまなものがありますが、日本人にとって特になじみ深いのが味噌。味噌には乳酸菌が豊富に含まれており、腸内の悪玉菌を減らし、善玉菌を増やす働きが期待できます。「免疫細胞の60〜70%が存在する」といわれる腸の環境が整うことで、ウイルスから体を守る免疫力がアップ！<br>
    毎日摂取するには、味噌汁が最適です。美味しい味噌汁の作り方をおさらいして、日々の食卓に取り入れましょう！
    ',
    'moveid' => 'cDbQ7Q1CQY0',
    'btn' => '味噌汁',
    'link' => 'recipe-technic39'
  ),
  array (
    'title' => 'チーズタッカルビ',
    'text' => '最後に、チキンと野菜をとろ～りチーズに絡めて食べる、「チーズタッカルビ」のレシピをご紹介。チーズは生乳を乳酸菌で発酵させた発酵食品のひとつ。生乳に含まれるタンパク質やカルシウムが、発酵することでより吸収しやすい状態になります。<br>
    植物性乳酸菌による発酵食品であるキムチを添えて食べれば、より多くの乳酸菌を摂取することができますよ♪また、唐辛子に含まれるカプサイシンには血行を促進する働きがあります。腸内環境を整えつつ体を温めて、ウイルスに負けない体を作っていきましょう！
    ',
    'moveid' => 'dLWysWWEADw',
    'btn' => 'チーズタッカルビ',
    'link' => 'recipe15'
  ),

);
?>
<main class="main">
  <article class="main__row">
    <?php
      $panAry[] = array( "/magazine/", "ブランシエラマガジン" );
      $panAry[] = array( "/magazine/index_comic02.php", "うちのご飯は世界イチ まとめ記事" );
      include( $inc_path . "/lib/inc/pan.php" );
      // SP時サムネにタイトルを表示するかフラグ
      $thumTtlFlg = 'off';
      include($inc_path . "/lib/inc/page/_magazine/__comic02tech-new-header.php");
      include($inc_path . "/lib/inc/page/_magazine/__recipe-collect-main-v.php");
    ?>
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header recipe-collect">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num">　</span>
          <span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」でこれまでご紹介してきたレシピやお料理の基本の中から、<?php echo $introTxt ?></p>
      </div>
      <hr class="recipe__line">
      <?php
        for($i = 0, $size = count($sp01); $i < $size; ++$i) {
          $recipeIcon = $sp01[$i][0].'_'.$sp01[$i][1];
          $speech = $sp01[$i][2];
          include ($inc_path."/lib/inc/page/_magazine/__recipe-icon.php");
        }
      ?>
      <?php
        for($i = 0, $size = count($info); $i < $size; ++$i) {
          $collectTtl = $info[$i]['title'];
          $collectTxt = $info[$i]['text'];
          $collectMv = $info[$i]['moveid'];
          $collectBtn = $info[$i]['btn'];
          $collectLink = $info[$i]['link'];
          include ($inc_path."/lib/inc/page/_magazine/__recipe-collect-cnt.php");
        }
      ?>
      <div>
        <div class="recipe__supervision recipe-supervision collect">
          <div class="recipe-supervision__row">
            <div class="recipe-supervision__txt">
              <p class="recipe-supervision__ttl">
                <span class="recipe-supervision__ttl_up-collect">監修</span>
                <span class="recipe-supervision__ttl_name">磯村 優貴恵</span>
                <span class="recipe-supervision__ttl_ov">管理栄養士・料理家</span>
              </p>
            </div>
            <figure class="recipe-supervision__img">
              <img
              data-src="<?php echo $img_url; ?>/magazine/comic02/common/profile_isomura.png"
              data-retina="<?php echo $img_url; ?>/magazine/comic02/common/profile_isomura@2x.png"
              alt="監修：管理栄養士・料理家　磯村 優貴恵"
              style="max-width:120px"
              class="u-img__max"
              >
            </figure>
          </div>
          <p class="recipe-supervision__career">大手エステサロンでの食事指導、日本料理・カフェレストランでの調理経験を経て、管理栄養士として独立。料理人の経歴を生かした美味しく華やかなレシピ提案や、ダイエット・スポーツをしている人への食事指導を行う。ほか、コラム執筆・レシピ監修・メニュー開発・商品開発・子ども向けの食育講演・茶懐石献立作成～調理など、多方面で活動中。<br>著書に「食べててよかった！子どもの身長がぐんぐん伸び～る133のレシピ」（主婦の友社）、「簡単! おいしい! いわし缶レシピ」（河出書房新社）などがある。</p>
        </div>
      </div>
      <div>
      <?php
        include ($inc_path."/lib/inc/page/_magazine/__recipe-collect-footer.php");
      ?>
      </div>
    </section>
  </article>
</main>
<?php
  $toindex_url = "/magazine/index_comic02.php";
  include( $inc_path . "/lib/inc/toindex__magazin.php" );
  ?>
<?php include ($inc_path."/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
