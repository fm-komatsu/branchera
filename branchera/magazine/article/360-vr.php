<?php
//base
include ("../../function.php");
$content = get_id_data('1017');
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

        <h2 class="u-ttl__l first-of-type">【⾧谷工の360°VR】自由な時間に好きなだけ見学！</h2>
        <figure class="mb3">
          <img src="<?php echo $img_url ?>/magazine/360-vr/main-v@2x.jpg" alt="⾧谷工の360°VR イメージ画像" class="u-img__max" loading="lazy">
        </figure>
        <p class="mb5 mb3_sp">パソコンやスマートフォン、タブレットを使って、ご自宅にいながら、まるで現地を歩いているように自由に物件見学ができる「360°VR」をご紹介します。特殊なカメラを使って撮影した高解像度の映像を通して、気軽にお部屋見学が可能です！</p>
        <div class="flex between mb3">
          <div class="w50">
            <h4 class="u-ttl__m">ポイント<span class="icon">１</span><br>パソコンでもスマートフォンでも、いつでもどこでも体験できる！</h4>
            <p>VRなら、ご自宅にいながら、いつでもどこでもお部屋の見学できます。</p>
          </div>
          <div class="w50">
            <figure>
              <img src="<?php echo $img_url ?>/magazine/360-vr/img__01@2x.jpg" alt="⾧谷工の360°VRを体験している親子 イメージ画像" class="u-img__max" loading="lazy">
            </figure>
          </div>
        </div>
        <div class="flex between mb5">
          <div class="w50">
            <h4 class="u-ttl__m">ポイント<span class="icon">２</span><br>VRの活用法はいろいろ！</h4>
            <p>VRは実際の現地見学の前の下見として、また現地見学中に見切れなかった箇所の見直しとして、インテリアや間取りの参考として…さまざまな活用が可能です！</p>
          </div>
          <div class="w50">
            <figure>
              <img src="<?php echo $img_url ?>/magazine/360-vr/img__02@2x.jpg" alt="⾧谷工の360°VRで現地見学の下見 イメージ画像" class="u-img__max" loading="lazy">
            </figure>
          </div>
        </div>
        <div class="mb6">
          <h4 class="u-ttl__m">【新築物件】実際の物件に足を運ぶ前のプレ見学！</h4>
          <figure class="mb4 mb3_sp center">
            <img src="<?php echo $img_url ?>/magazine/360-vr/img__03@2x.jpg" alt="⾧谷工の360°VR 実際の物件に足を運ぶ前のプレ見学 イメージ画像" style="max-width:650px;" class="u-img__max" loading="lazy">
          </figure>
          <p class="mb3">モデルルームに行く前に、憧れの住まいをVRで体験しよう！新築物件をご紹介する⾧谷工アーベストでは、ご自宅で360°自由にモデルルーム見学ができる物件を多数ご用意しております。「忙しくてモデルルームに行く時間がない」、「もっと自由に見学したい」という方はもちろん、インテリアを見るだけでもお楽しみいただけること間違いなしです！</p>
          <div class="u-btn-layout">
            <div class="u-btn-layout__row">
              <div class="u-btn-layout__item">
                <a href="https://www.haseko-sumai.com/kurashi/vrlp/" class="u-btn_point_l u-icon center" target="_blank" data-ga-click="hcg-page__360-vr_hub">新築物件のVRモデルルーム見学はこちら</a>
              </div>
            </div>
          </div>
        </div>
        <div class="mb6">
          <h4 class="u-ttl__m">【中古・リノベーション物件】360°VR内覧</h4>
          <figure class="mb3 center">
            <img src="<?php echo $img_url ?>/magazine/360-vr/img__04@2x.jpg" alt="⾧谷工の360°VR 実際の物件に足を運ぶ前のプレ見学 イメージ画像" style="max-width:650px;" class="u-img__max" loading="lazy">
          </figure>
          <p class="mb3">中古マンションなどの仲介やリノベーション物件の販売を行なっている⾧谷工リアルエステートでは、気になった物件を好きな時間・好きな場所ですみずみまで確認できる「360°VR内覧」をご用意しています。首都圏・関西・名古屋・福岡、ご希望のエリアでご確認いただけます。</p>
          <div class="flex flex_around">
            <a href="https://www.haseko-chukai.com/syutoken-buy/theme/360vr" class="u-btn_point u-icon center w25 w95_sp" target="_blank" data-ga-click="hcg-page__360-vr_hre_syutoken">首都圏</a>
            <a href="https://www.haseko-chukai.com/kansai-buy/theme/360vr" class="u-btn_point u-icon center w25 w95_sp" target="_blank" data-ga-click="hcg-page__360-vr_hre_kansai">関西</a>
            <a href="https://www.haseko-chukai.com/nagoya-buy/theme/360vr" class="u-btn_point u-icon center w25 w95_sp" target="_blank" data-ga-click="hcg-page__360-vr_hre_nagoya">名古屋</a>
            <a href="https://www.haseko-chukai.com/fukuoka-buy/theme/360vr" class="u-btn_point u-icon center w25 w95_sp" target="_blank" data-ga-click="hcg-page__360-vr_hre_fukuoka">福岡</a>
          </div>
        </div>
        <div class="mb6">
          <h4 class="u-ttl__m">【リフォーム】リフォーム後のお部屋を体験！</h4>
          <figure class="mb4 mb3_sp center">
            <img src="<?php echo $img_url ?>/magazine/360-vr/img__05@2x.jpg" alt="⾧谷工の360°VR リフォーム後のお部屋を体験 イメージ画像" style="max-width:650px;" class="u-img__max" loading="lazy">
          </figure>
          <p class="mb3">実際に⾧谷工リフォームでリフォームされたお客様のお部屋を360°自由に体験できます！通常の写真では表現しにくい部分まで分かりやすくご覧いただけるので、リフォーム後のお住まいをイメージしやすいと好評です。</p>
          <div class="u-btn-layout">
            <div class="u-btn-layout__row">
              <div class="u-btn-layout__item">
                <a href="https://www.haseko.co.jp/hrf/reform/panorama.html" class="u-btn_point_l u-icon" target="_blank" data-ga-click="hcg-page__360-vr_hrf">リフォーム後のお部屋の360°ビューはこちら</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
