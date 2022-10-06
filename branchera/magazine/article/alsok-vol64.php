<?php
//base
include( "../../function.php" );
$content = get_id_data( '19002' );
$pageTtl = $content[ 'title' ];
$exceptcnt_id = $content['contents_id'];

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
$release_year = "2020";
$release_month ="1";
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
      <section class="main__item">
        <h3 class="u-ttl__l">日常生活の中に危険が潜む、マンション火災に備える</h3>
        <p class="mb3">冬は暖房器具が原因の火災が起きやすいシーズン。心ない放火のニュースも耳にします。今回はマンションまわりで起きやすい火災への対策について、ALSOKにアドバイスをいただきました。</p>
        <section class="u-clearfix mb3">
          <h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">知らないうちに着火！不注意に要注意</span></h4>

          <p class="mb3">電気ストーブや石油ストーブなど熱源の見える暖房器具は、輻射熱により、カーテンや部屋干しの洗濯物に着火することがあります。また、子どもがストーブの近くで遊んでいて、持っていたぬいぐるみに火がついたという事例もあります。燃えそうな物を近くに置かないのは鉄則です。</p>
          <p class="mb3"><strong>キッチンでは、調理中のガスコンロからの着衣着火に要注意。</strong>コンロの奥にある調味料を取ろうと手をのばした瞬間、袖口などに着火、衣服の表面から燃え広がり大事故に！<br>また、ベランダでたばこを吸う方がいますが、その後不始末で出火する例もあります。『このくらい大丈夫』という油断は禁物です。</p>
          <div class="flex between">
            <p class="w50 mb2_sp">さらに不注意から出火して一気に燃え上がってしまった場合には、<strong>片手で投げるだけでさっと逃げ道を確保できる消火剤など、簡単に使える初期消火グッズを備えておくと安心です。</strong></p>
            <figure class="w50">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/64/alsok64__img01.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/64/alsok64__img01@2x.png"
                alt="<?php echo $pageTtl?>" style="max-width:379px" class="u-img__max u-only__pc">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/64/alsok64__img01-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/64/alsok64__img01-sp@2x.png"
                alt="<?php echo $pageTtl?>" style="max-width:265px" class="u-img__max u-only__sp center">
            </figure>
          </div>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">ご近所づきあいは、何よりの防災力</span></h4>
          <p class="mb3">一方、マンション敷地内共用部の火災原因のトップは放火です。たとえばゴミ置き場。燃えるゴミの日以外に出したものに放火されることがあります。<strong>ゴミ出しのルールはきちんと守り、放火されそうなものを置かないことが基本です。</strong></p>
          <p class="mb3">さらに放火犯を寄せつけない環境づくりも大切。ふだんから挨拶をし合うなど、ご近所づきあいの延長線上で、見知らぬ人が不審な行動をとりづらいようにしましょう。それにはマンションや地域のイベントが格好の機会。積極的に参加して、近隣の人とふれあいながら顔見知りを増やし、火災や防災について意識を高めていくといいでしょう。なお、戸外のイベントにおいて火を扱う場合は、必ずバケツに水をくんでそばに置くことと、消火器の場所を確認しておくことを忘れずに。多くの人が集まるときは特に注意が必要です。 </p>
        </section>
        <section>
          <h4 class="alsok__ttl alsok__ttl_yellow mb3"><span class="alsok__ttl_ex">増える高齢世帯へ、周囲の見守りを</span></h4>

          <div class="flex between mb4">
          <p class="w50 mb2_sp">加えて特に配慮を必要とするのが高齢者です。高齢者は青い炎が見えづらいといわれています。また、鍋を火にかけっぱなしにするなどの「うっかり」も多くなりがちです。<br><strong>消防庁の「住宅防火いのちを守る7つのポイント」</strong>などの、基本的な心得を参考に、子ども世代や周囲が声をかけるなどの見守りをしましょう。幅広い世代が支え合いながら、火災をはじめ防災の意識を日頃から養っていくことが大切です。</p>
            <figure class="w50">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/64/alsok64__img02.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/64/alsok64__img02@2x.png"
                alt="<?php echo $pageTtl?>" style="max-width:304px" class="u-img__max u-only__pc">
              <img data-src="<?php echo $img_url; ?>/magazine/alsok/64/alsok64__img02-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/64/alsok64__img02-sp@2x.png"
                alt="<?php echo $pageTtl?>" style="max-width:265px" class="u-img__max u-only__sp center">
            </figure>
          </div>
          <figure class="center mb6 mb1_sp">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/64/alsok64__img03.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/64/alsok64__img03@2x.png"
              alt="消防庁の「住宅防火いのちを守る7つのポイント」｜<?php echo $pageTtl?>" style="max-width:735px" class="u-img__max u-only__pc center">
            <img data-src="<?php echo $img_url; ?>/magazine/alsok/64/alsok64__img03-sp.png" data-retina="<?php echo $img_url; ?>/magazine/alsok/64/alsok64__img03-sp@2x.png"
              alt="消防庁の「住宅防火いのちを守る7つのポイント」｜<?php echo $pageTtl?>" style="max-width:283px" class="u-img__max u-only__sp center">
          </figure>
          <div class="mb8 mb3_sp">
            <?php include ($inc_path."/lib/inc/page/_magazine/__release_date.php"); ?>
          </div>
					<section>
						<h5>■関連記事</h5>
						<div class="u-photolist__row">
							<?php echo show_category_photoListalsok("alsok-bousai",$exceptcnt_id); ?>
						</div>
					</section>
        </section>
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
