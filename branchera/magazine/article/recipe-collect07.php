<?php
//base
include( "../../function.php" );
$content = get_id_data( '13007' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = $pageTtl . ' | 長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc = '免疫力アップをサポートする食材とレシピをまとめてご紹介！さば缶を使った簡単レシピや、ネバネバ食材などを多数ご紹介します。美味しく調理するコツに加えて、それぞれに含まれる栄養素やおすすめの組み合わせもお伝えします。';
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

// サムネイル横のテキスト
$thumTxt = $content[ 'description' ];

//bodyClass
$body_class = "page-article page-recipe recipe-collect";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//導入文
$introTxt = '免疫力アップをサポートする食材とレシピをピックアップ！シリーズ第2弾の今回は、良質なタンパク質をとれるレシピやネバネバ食材などをご紹介します。';

//セリフ
$sp01 = array ( //'icon','icon-num','text'
  //フラッキー　通常
  array('fl','01','病気にならない強い体づくりには、やっぱり“食”が大切！<br>
体を強くする栄養素が豊富に含まれる食材を知って、毎日の食事に取り入れよう！<br>
というわけで今回は、免疫力アップをサポートする食材とレシピを紹介するぞ！<br>
一緒に調理すると栄養の吸収がよくなる食材の組み合わせも教えるぜ！<br>
最後までチェックしてくれよな♪'),
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
    'title' => 'さば缶とじゃがいものトマト煮込み',
    'text' => 'さば缶で手軽に作れる、免疫力アップをサポートするレシピをご紹介！さばといえば、「DHA」「EPA」が思い浮かぶ方も多いのではないでしょうか？さばをはじめとする青魚に含まれるこれらの成分は、「オメガ3脂肪酸」の一種。オメガ3脂肪酸には抗炎症作用があり、アレルギー症状を緩和させるといわれています。さらに、じゃがいもにたっぷり含まれるビタミンCは、ウイルスや菌と戦う白血球をパワーアップさせ、免疫力を高めてくれるんです。<br>そして、この料理に欠かせないのがトマト。トマトに含まれるリコピンは強力な抗酸化作用を持ち、免疫細胞の働きをサポート。リコピンは加熱することで吸収率が上がるので、煮込むことで効率よく摂取できるんです♪<br>簡単かつ、免疫力アップにつながる食材を美味しく摂取できる一石三鳥レシピです。ぜひお試しください！',
    'moveid' => 'ciwVBWCCVcA',
    'btn' => 'さば缶とじゃがいもの<br>トマト煮込み',
    'link' => 'recipe17'
  ),
  array (
    'title' => '基本のふわとろオムレツの作り方',
    'text' => '子どもにも大人気！ふわとろに仕上げるオムレツのレシピをご紹介。オムレツの主役「卵」は、これ1つで多くの栄養素が取れる優れた食べ物です。<br>免疫細胞の原料になるタンパク質が豊富に含まれているほか、免疫抗体を作るのをサポートするビタミンB6、免疫細胞を助けるミネラル・亜鉛も含まれており、まさに「元気の源」といえます。<br>じゃがいもやほうれん草、納豆など、ほかの免疫力アップをサポートする食品と組み合わせてアレンジするのもおすすめ。記事ではアレンジレシピもご紹介しているので、チェックしてくださいね！',
    'moveid' => 'sv99SVy6QOk',
    'btn' => '基本のふわとろオムレツの<br>作り方',
    'link' => 'recipe-technic48'
  ),
  array (
    'title' => 'オクラの下ごしらえ方法',
    'text' => '免疫力アップといえばネバネバ食材！オクラのネバネバには、胃の粘膜を守り、腸を整える働きを持つ水溶性食物繊維の仲間が含まれています。「体内の免疫細胞の6割が存在する」といわれる腸の健康は、ウイルスや菌に負けない体づくりに欠かせないポイント！<br>また、血圧や血液中のコレステロールを減らしてくれる食物繊維・ペクチンも含まれているので、健康維持にとっても効果的な食材なんです。<br>
		そして、栄養たっぷりなオクラを美味しく食べるには、下ごしらえが重要！気になるアクも、ほんのひと手間で抜くことができますよ。オクラは彩り食材としても使えるので、カレーや冷やしうどん、サラダなどに”ちょい足し”して、手間なく免疫力アップを目指しましょう！',
    'moveid' => 'wOGXdmVl8Dw',
    'btn' => 'オクラの下ごしらえ方法',
    'link' => 'recipe-technic69'
  ),
  array (
    'title' => '里芋の下ごしらえ方法',
    'text' => 'ねっとりとした食感が特徴的な里芋も、おすすめのネバネバ食材のひとつ！里芋のネバネバにも、オクラと同じ水溶性食物繊維の仲間が含まれています。この成分には、体から老廃物を排出する肝臓や腎臓を強くする作用もあるんですよ。また、里芋のネバネバ成分には、免疫力をアップさせる「ガラクタン」も含まれています。ガラクタンは免疫力アップだけでなく、消化の促進や脳細胞の活性化など、健康維持に役立つ働きがたくさん。<br>「でも、里芋の下ごしらえはぬるぬるするから苦手…」という方もいるかもしれませんね。そんな方でも大丈夫！記事で紹介している電子レンジを使った下ごしらえ方法なら、包丁を使わなくてもツルンと皮をむくことができますよ。ぜひ、これを機に試してみてください。',
    'moveid' => 'AcmeNQ6-22c',
    'btn' => '里芋の下ごしらえ方法',
    'link' => 'recipe-technic66'
  ),
  array (
    'title' => 'はがれない！ピーマンの肉詰めの作り方',
    'text' => '緑黄色野菜であるピーマンには、強力な抗酸化作用を持つβ-カロテンとビタミンCが豊富に含まれています。さらにβ-カロテンは、体内に入ると免疫細胞の働きを活発にさせるビタミンAに変換！ウイルスや菌に負けない体づくりには、ぴったりの食材なんです。<br>β-カロテンは脂溶性のビタミンなので、油を使って焼くことで吸収しやすくなります。お肉から出る油と一緒に摂取できる肉詰めは、β-カロテンを摂取するのにぴったりな調理法です♪記事では、肉だねがピーマンからはがれないようにするコツも紹介しています。上手に作って、健康的かつ見た目も美しい一皿に♪
',
    'moveid' => 'U3ene-NbJnA',
    'btn' => 'はがれない！ピーマンの肉詰めの<br>作り方',
    'link' => 'recipe-technic107'
  ),
  array (
    'title' => 'アスパラガスのゆで方',
    'text' => 'アスパラガスには、「アスパラギン酸」という免疫力アップと疲労回復に効果的な栄養素が含まれています。アスパラギン酸は、体の解毒作用を司る肝機能も守ってくれるんですよ。それだけではありません。アスパラガスには、β-カロテン、ビタミンB1・B2、ビタミンC、ビタミンE、鉄、食物繊維、カリウム、カルシウムなど、健康維持に必要な多くの栄養素が含まれています。<br>栄養の宝庫のようなアスパラガスですが、ゆで過ぎると食感が悪くなるだけでなく、せっかくの栄養が溶け出してしまうことも…。そこで、シャキッと歯ごたえよく仕上がるアスパラガスのゆで方をご紹介！お料理にアスパラガスを加えると、彩りと栄養価がプラスされますよ。さっそく、今夜のおかずにいかがでしょうか？',
    'moveid' => 'xnvbn-Mq6AY',
    'btn' => 'アスパラガスのゆで方',
    'link' => 'recipe-technic76'
  ),
  array (
    'title' => '簡単！揚げない大学芋の作り方',
    'text' => '大学芋は、ほくほくのさつまいもにとろりと甘いあんが絡んだ人気メニュー！そんな大学芋にも、免疫力アップをサポートする成分が含まれています。<br>さつまいもには免疫力を高めるビタミンCが豊富に含まれるほか、強い抗酸化作用を持つビタミンEが含まれています。実はビタミンCとビタミンEは、一緒にとることで効果がアップする黄金ペア！ビタミンCが、ビタミンEの抗酸化作用をさらに強くしてくれます。<br>また、大学芋のあんは砂糖の代わりにはちみつで作ることも可能。はちみつには免疫機能を正常に維持する働きがあるので、より効果を高めたい方におすすめ！<br>記事ではツヤっと美味しそうに仕上げるコツもご紹介しているので、ぜひトライしてみてください！',
    'moveid' => '1kP_Y83nPfo',
    'btn' => '大学芋の作り方',
    'link' => 'recipe-technic108',
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
