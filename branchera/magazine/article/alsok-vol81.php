<?php
//base
include( "../../function.php" );
$content = get_id_data( '16008' );
$pageTtl = $content[ 'title' ];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article alsok";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );

//release date
$release_year = "2021";
$release_month ="4";
$release_day ="";
?>
<main class="main magazine">
  <article class="main__row">
    <?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_alsok.php", "プロに聞く。暮らしの危機管理。" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
    <?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
    <div class="main__wrapper">
      <section>
        <h3 class="u-ttl__l">環境が変化する新年度 家庭のルール作りのポイントとは？</h3>
        <p class="mb3">子どもたちの行動範囲は、成長とともに徐々に広がっていきます。新年度を迎えるこの時期は、家族それぞれの環境も変わりやすいので、予め親子で子どもの行動範囲の確認や個人情報の管理、ネットの使い方などをきちんと話し合っておくことが大切です。<br>そこで今回は「家庭のルールづくりのポイント」について、ALSOKに話を伺いました。</p>
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">行動範囲の広がりに合わせ、注意点を確認・見直し</span></h4>
          <div class="u-clearfix">
            <figure class="u-float__right">
              <img src="<?php echo $img_url; ?>/magazine/alsok/81/alsok81__img01@2x.png"
                alt="親子で歩きながら危険な場所を確認 イメージ｜<?php echo $pageTtl?>" style="max-width:350px" class="u-img__max u-only__pc center" loading="lazy">
            </figure>
            <p>まずは、子どもたちの行動範囲について考えてみましょう。学年が上がるごとに子どもたちの交友関係は広がり、友達同士で出かける機会も増えるでしょう。また、塾や習い事で知り合った友達と隣町の公園に行くなど、<strong>行動範囲が広がれば、親の目が届かないところで危険に遭遇する可能性も高くなります。</strong><br>
            通学路などは実際に親子で歩いてみて、危険な場所や、行ってはいけないところ、通ってはいけない道などを確認して、注意を促しましょう。</p><br>
            <figure class="mt2_sp mb2_sp u-only__sp">
            <img src="<?php echo $img_url; ?>/magazine/alsok/81/alsok81__img01-sp@2x.png"
              alt="親子で歩きながら危険な場所を確認 イメージ｜<?php echo $pageTtl?>" class="u-img__max u-only__sp center" style="max-width:604px" loading="lazy">
            </figure>
          </div>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">個人情報は厳重に管理、電話は留守電に</span></h4>
          <div class="flex between mb3">
            <div class="w50">
              <p class="mb2">登下校や習い事、遊びに出かけているときに、不審者がカバンやパスケースに書かれた名前を見て、声をかけてくるという事例もあるので、<strong>防犯のためにも個人情報は慎重に扱いましょう。</strong>また、子どもに留守番をさせる場合はできるだけ留守電にして、電話には対応させないように心がけましょう。</p>
              <figure class="u-only__sp mb2_sp">
                <img src="<?php echo $img_url; ?>/magazine/alsok/81/alsok81__img02-sp@2x.png"
                  alt="個人情報を管理するポイント イメージ｜<?php echo $pageTtl?>" style="max-width:619px" class="u-img__max center u-only__sp mb2_sp" loading="lazy">
                <img src="<?php echo $img_url; ?>/magazine/alsok/81/alsok81__img03-sp@2x.png"
                  alt="ランドセルや傘に名札をつけて登下校する子供 イメージ｜<?php echo $pageTtl?>" style="max-width:591px" class="u-img__max center u-only__sp" loading="lazy">
              </figure>
            </div>
            <figure class="w50 u-only__pc">
              <img src="<?php echo $img_url; ?>/magazine/alsok/81/alsok81__img02@2x.png"
                alt="ランドセルや傘に名札をつけて登下校する子供 イメージ｜<?php echo $pageTtl?>" style="max-width:345px" class="u-img__max center u-only__pc" loading="lazy">
            </figure>
          </div>
          <figure class="mb3 mb2_sp u-only__pc">
            <img src="<?php echo $img_url; ?>/magazine/alsok/81/alsok81__img03@2x.png"
              alt="個人情報を管理するポイント｜<?php echo $pageTtl?>" class="u-img__max center u-only__pc" loading="lazy">
          </figure>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_orange mb3"><span class="alsok__ttl_ex">インターネットの危険から守るルールづくり</span></h4>
          <div class="flex between mb3">
              <p class="mb2">学年が上がるとスマホの所有率も増加します。子どもにスマホを持たせた場合、連絡がつきやすい、位置確認が可能になることなどメリットがある一方、スマホ依存や、ゲームの課金、有害サイトへのアクセス（危険な出会い）など、デメリットもあります。<br><strong>インターネットやスマホの利用については、もう一度親子で利用ルールを確認しておきましょう。</strong></p>
              <figure>
                <img src="<?php echo $img_url; ?>/magazine/alsok/81/alsok81__img04-sp@2x.png"
                  alt="スマホ利用時のルールのポイント｜<?php echo $pageTtl?>" style="max-width:619px" class="u-img__max center u-only__sp" loading="lazy">
                <img src="<?php echo $img_url; ?>/magazine/alsok/81/alsok81__img04@2x.png"
              alt="スマホ利用時のルールのポイント｜<?php echo $pageTtl?>" class="u-img__max center u-only__pc" loading="lazy">
              </figure>
          </div>
          <div class="flex between mb3">
            <div class="w50">
              <p class="mb2">子どもに限らず、インターネット上での不審なフィッシングメールや不正アクセスには十分な注意が必要です。家庭内での有害・不審な通信アクセスを防ぐため、ホームネットワークのWi-Fiルータのセキュリティ対策をもう一度確認し、強化しておくことも大切です。</p>
              <figure class="u-only__sp mb2_sp">
                <img src="<?php echo $img_url; ?>/magazine/alsok/81/alsok81__img05-sp@2x.png"
                  alt="スマホでインターネットを利用する人 イメージ｜<?php echo $pageTtl?>" style="max-width:565px" class="u-img__max center u-only__sp" loading="lazy">
              </figure>
            </div>
            <figure class="w50 u-only__pc">
              <img src="<?php echo $img_url; ?>/magazine/alsok/81/alsok81__img05@2x.png"
                alt="スマホでインターネットを利用する人 イメージ｜<?php echo $pageTtl?>" style="max-width:282px" class="u-img__max center u-only__pc" loading="lazy">
            </figure>
          </div>
          <p class="mb6 mb3_sp">こうした節目をきっかけに親子でコミュニケーションを重ねて、<strong>家庭内のルールを確認し、見直していくことが重要です。</strong></p>
        </section>
        <div class="mb8 mb3_sp">
          <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
        </div>
        <section>
          <h5 class="mt3">■関連記事</h5>
          <div class="u-photolist__row mt2">
            <?php
              $exceptcnt_id = $content['contents_id'];
              echo show_category_photoListalsok("alsok-children",$exceptcnt_id);
            ?>
          </div>
        </section>
    </div>
  </article>
</main>
<?php
$toindex_url = "/magazine/index_alsok.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
