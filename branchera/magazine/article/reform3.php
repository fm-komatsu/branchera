<?php
//base
include( "../../function.php" );
$content = get_id_data( '1016' );
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「' . $pageTtl . '　3/3」-' . siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content[ 'description' ];
$metaThum = $img_url . '/thum/' . $content[ 'image' ];

//bodyClass
$body_class = "page-article";

//htmlHeader
include( $inc_path . "/lib/inc/head.php" );
include( $inc_path . "/lib/inc/header.php" );
?>
<main class="main magazine">
  <article class="main__row">
    <?php
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_technology.php", "長谷工の技術・サービス" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
    <?php
		include( $inc_path . "/lib/inc/page/_gift/__main-header.php" );
		?>
    <div class="main__wrapper">
      <section class="main__item">
        <div class="center mb4">
          <div class="u-only__pc">
            <img data-src="../../lib/img/magazine/reform2/img01.png" data-retina="../../lib/img/magazine/reform2/img01@2x.png"
              alt="「長谷工リフォーム」 Q&Aコーナー" style="max-width: 720px;" class="u-img__max">
          </div>
          <div class="u-only__sp">
            <img data-src="../../lib/img/magazine/reform2/img01-sp.png" data-retina="../../lib/img/magazine/reform2/img01-sp@2x.png"
              alt="「長谷工リフォーム」 Q&Aコーナー" style="" class="u-img__max">
          </div>
        </div>
        <h3 class="u-ttl__l">豊富な知識と経験を生かしてお客さまのご要望にお応えする</h3>
        <div class="ex2">
          <div class="inner">
            <div>
              <p>こんにちは、本日はよろしくお願いいたします。</p>
            </div>
          </div>
        </div>
        <div class="balloon mb ref">
          <div class="inner">
            <div>
              <p>こちらこそよろしくお願いします。</p>
            </div>
          </div>
        </div>
        <h4 class="u-ttl__m u-icon__q">まず、長谷工リフォームの業務内容をご説明いただけますか？</h4>
        <div class="balloon mb ref1">
          <div class="inner">
            <div>
              <p>大きく分けて、マンションの大規模修繕工事とインテリアリフォームの2つの事業を中心としています。インテリアリフォームは主にマンション中心ですが、戸建リフォームも行なっています。</p>
            </div>
          </div>
        </div>
        <h4 class="u-ttl__m u-icon__q">角道さんと小坂さんはインテリアリフォームを担当されていますが、おふたりのお仕事内容を教えていただけますか？</h4>
        <div class="balloon mb ref1">
          <div class="inner">
            <div>
              <p>私は営業を担当しています。相談会やインターネットからお問い合わせいただいたお客さまに、リフォームのご希望やご予算などをお聞きして、住まいの調査から、工事、アフターサービスまで責任を持って対応させていただいています。</p>
            </div>
          </div>
        </div>
        <div class="balloon mb ref2">
          <div class="inner">
            <div>
              <p>私は設計・プランニングを担当しています。主に全面リフォームの場合、お客さまのご希望を基に、マンションの構造を考慮しながらリフォームのプランをご提案しています。</p>
            </div>
          </div>
        </div>
        <h4 class="u-ttl__m u-icon__q">プランニングで気をつけている点はありますか？</h4>
        <div class="balloon mb ref2">
          <div class="inner">
            <div>
              <div class="img fr u-only__pc">
                <img data-src="../../lib/img/magazine/reform2/img02.png" data-retina="../../lib/img/magazine/reform2/img02@2x.png"
                  alt="image" style="max-width:170px;" class="u-img__max">
              </div>
              <div class="img u-only__sp center" style="width:60%;">
                <img data-src="../../lib/img/magazine/reform2/img02.png" data-retina="../../lib/img/magazine/reform2/img02@2x.png"
                  alt="image" style="" class="u-img__max">
              </div>
              <p>それぞれお部屋の特長をうまく生かして、より快適な暮らしが叶えられるようにプランニングしています。また、女性ならではの目線を大切にして、デザイン性だけでなく、機能性やお手入れなども考えて設備のご提案をするように心掛けています。</p>
            </div>
          </div>
        </div>
        <div class="balloon ref1">
          <div class="inner">
            <div>
              <p>長谷工リフォームのインテリアリフォーム担当は約8割が女性社員ですので、そういった女性ならではの視点でプランニングができることも喜ばれていますね。</p>
            </div>
          </div>
        </div>
        <div class="img section">
          <img data-src="../../lib/img/magazine/reform2/img05.png" data-retina="../../lib/img/magazine/reform2/img05@2x.png"
            alt="image" style="max-width: 656px;" class="u-img__max">
        </div>
        <h4 class="u-ttl__m u-icon__q">どのようなご要望が多いですか？</h4>
        <div class="balloon mb ref1">
          <div class="inner">
            <div>
              <p>トイレ、キッチン、浴室など水まわり設備の交換から、全面リフォームまでさまざまなご要望があります。最近では、お子さまが独立されたのをきっかけに、ご夫婦おふたりのライフスタイルに合わせてリフォームされる方が多いですね。</p>
            </div>
          </div>
        </div>
        <div class="balloon mb ref2">
          <div class="inner">
            <div>
              <p>Yさま邸がまさにそうで、ご夫婦2人でゆとりのある暮らしをしたいというご相談がありました。個室を減らし、開放的な対面キッチンやトイレ以外の水まわりの更新をして、ご夫婦の快適な住まいをご提案させていただきました。</p>
            </div>
          </div>
        </div>
        <h3 class="u-ttl__l">ライフスタイルの変化に合わせてより快適なお住まいを生み出す</h3>
        <h4 class="u-ttl__m u-icon__q">インテリアリフォームとしては大きな工事ですよね。苦労した点などはありましたか？</h4>
        <div class="balloon mb ref1">
          <div class="inner">
            <div class="mb3">
              <p>Yさまはご希望が明確だったので、スムーズに進みましたね。それに、ご夫婦で小坂のセンスをたいへん気に入ってくださっていたので、信頼してプランニングを任せていただきました。家具や建具などのセレクトもとても喜んでいただけました。</p>
            </div>
            <div class="img center u-only__pc">
              <img data-src="../../lib/img/magazine/reform2/img04.png" data-retina="../../lib/img/magazine/reform2/img04@2x.png"
                alt="image" style="max-width:314px ;" class="u-img__max">
            </div>
            <div class="img u-only__sp">
              <img data-src="../../lib/img/magazine/reform2/img04.png" data-retina="../../lib/img/magazine/reform2/img04@2x.png"
                alt="image" style="" class="u-img__max">
            </div>
          </div>
        </div>
        <div class="balloon mb ref2">
          <div class="inner">
            <div>
              <p>奥さまと3人でショールームをまわったときに、女子会のようにいろいろとお話しさせていただけて（笑）。何気ない会話のなかから、お客さまのお好みやインテリアのイメージが伝わってくることがあります。だから、お客さまとのコミュニケーションはつねに大切にしています。</p>
            </div>
          </div>
        </div>
        <h4 class="u-ttl__m u-icon__q">お客さまとご一緒にショールームへ行かれることもあるのですね。</h4>
        <div class="balloon mb ref1">
          <div class="inner">
            <div>
              <div class="img fr u-only__pc">
                <img data-src="../../lib/img/magazine/reform2/img03.png" data-retina="../../lib/img/magazine/reform2/img03@2x.png"
                  alt="image" style="max-width:142px ;" class="u-img__max">
              </div>
              <div class="img u-only__sp center" style="width:55%;">
                <img data-src="../../lib/img/magazine/reform2/img03.png" data-retina="../../lib/img/magazine/reform2/img03@2x.png"
                  alt="image" style="" class="u-img__max">
              </div>
              <p>キッチン、トイレ、洗面所など水まわりの設備から、家具、カーテン、クロスなどインテリアまで必要とあればご同行させていただいています。そのために、メーカーの講習会などにも参加してつねに最新の情報をご紹介できるようにしています。</p>
            </div>
          </div>
        </div>
        <h4 class="u-ttl__m u-icon__q">リフォーム後、Yさまの反応はいかがでしたか？</h4>
        <div class="balloon mb ref1">
          <div class="inner">
            <div>
              <p>ご近所の方やご友人をご自宅に招かれたとき居心地がよいとのことで、今では集いの場になっておられるそうです。ご主人にもとても気に入っていただけて、ご自宅で過ごす時間が増えたとお聞きしています。</p>
            </div>
          </div>
        </div>
        <div class="balloon mb ref2">
          <div class="inner">
            <div>
              <p>リフォームをきっかけに生活自体を見直されたり、新しいライフスタイルでいきいきと暮らしていただけているというお話しをお客さまから聞くと、この仕事に就いてよかったなと思います。</p>
            </div>
          </div>
        </div>
        <div class="img mb4 u-only__pc">
          <img data-src="../../lib/img/magazine/reform2/img06.png" data-retina="../../lib/img/magazine/reform2/img06@2x.png"
            alt="image" style="max-width: 493px;" class="u-img__max">
        </div>
        <div class="img mb4 u-only__sp">
          <img data-src="../../lib/img/magazine/reform2/img06.png" data-retina="../../lib/img/magazine/reform2/img06@2x.png"
            alt="image" style="" class="u-img__max">
        </div>
      </section>
      <nav class="u-pager">
        <ul class="u-pager__row">
          <li class="u-pager__item"><a href="reform.php">1</a></li>
          <li class="u-pager__item active"><a href="reform3.php">2</a></li>
        </ul>
      </nav>
    </div>
  </article>
</main>
<?php
$toindex_url = "/magazine/index_technology.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
