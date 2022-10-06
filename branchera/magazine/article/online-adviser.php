<?php
//base
include ("../../function.php");
$content = get_id_data('1018');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl.'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = $content['description'];
$metaThum = $img_url.'/thum/'.$content['image'];

//bodyClass
$body_class ="page-article";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/magazine/" ,"ブランシエラマガジン");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
    ?>
    <div class="main__wrapper">

      <section class="section wrapper">

        <h3 class="u-ttl__l first-of-type">【⾧谷工の無料オンライン相談】住まい探しやリフォーム相談をご自宅でも！</h3>
        <figure class="mb3">
          <img src="<?php echo $img_url ?>/magazine/online-adviser/main-v@2x.jpg" alt="【⾧谷工の無料オンライン相談】 イメージ画像" class="u-img__max" loading="lazy">
        </figure>
        <p class="mb5 mg3_sp">住まい探しやリフォームについて、パソコンやスマートフォンなどから、気軽に相談できる「⾧谷工の無料オンライン相談」をご紹介します。ネット環境をご用意いただくだけで、ご自宅からアドバイザーに相談をすることができます。相談したいけれど出かける時間がない時や、メールではなく直接お話しされたい時に、ぜひご活用ください！
        </p>
        <h4 class="u-ttl__m">【新築物件】⾧谷工住まいアドバイザー無料オンライン相談</h4>
        <figure class="mb3 center">
          <img src="<?php echo $img_url?>/magazine/online-adviser/img__01@2x.jpg" alt="【新築物件】⾧谷工住まいアドバイザー無料オンライン相談 イメージ画像" class="u-img__max" style="max-width:640px;" loading="lazy">
        </figure>
        <p class="mb3">新築物件をご紹介する⾧谷工アーベストでは、購入の流れや住まい探しのお悩みなど、オンラインでご相談をお伺いいたします。住まいのプロ「住まいアドバイザー」が、みなさまの住まい探しをトータルサポート！もちろん、ちょっとした質問でもOKです！お気軽にご相談ください。</p>
        <a href="https://www.haseko-sumai.com/kurashi/LP_adviser/" class="u-btn_point_l u-icon center" target="_blank" data-ga-click="hcg-page__online_hub">⾧谷工住まいアドバイザー<br class="u-only__sp" >無料オンライン相談はこちら</a>
        <h4 class="u-ttl__m">【リフォーム】リフォーム無料オンライン相談</h4>
        <figure class="mb3 center">
          <img src="<?php echo $img_url?>/magazine/online-adviser/img__02@2x.jpg" alt="【リフォーム】リフォーム無料オンライン相談 イメージ画像" class="u-img__max" style="max-width:640px;" loading="lazy">
        </figure>
        <p class="mb3">お気に入りのお部屋にリフォームして、快適な「おうちライフ」を送りませんか？⾧谷工リフォームでは、たったの3ステップで簡単にオンライン相談が可能です。もちろん相談は無料。住まいのリフォームをお考えの方は、ぜひお気軽にご相談ください</p>
        <a href="https://www.haseko.co.jp/hrf/reform/news/2020/post_22.html" class="u-btn_point_l u-icon center" target="_blank" data-ga-click="hcg-page__online_hrf">リフォーム無料オンライン相談はこちら</a>
      </section>
    </div>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
