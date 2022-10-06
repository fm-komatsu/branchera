<?php
//base
include("../function.php");
$pageTtl = 'ブランシエラマガジン';

//meta
$metaTtl = $pageTtl . '-' . siteName();
$metaDesc = "ゆたかな暮らしを支える長谷工の技術・サービスのご紹介や、日々の生活に役立つ情報をお届けします！";
$metaThum = $img_url . "/thum/home@2x.png";

//bodyClass
$body_class = "page-list";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");
?>


<main class="main">
  <article class="main__row">
    <?php
    //$panAry[] = array("/_temp" ,"パンくず名");
    //$panAry[] = array("/_temp/index.php" ,"パンくず名");
    include($inc_path . "/lib/inc/pan.php");
    ?>

    <header class="main__header main-header">
      <div class="main-header__row">
        <figure class="main-header__icon">
          <img data-src="<?php echo $img_url ?>/common/body/category-icon__magazine.png" data-retina="<?php echo $img_url ?>/common/body/category-icon__magazine@2x.png" alt="<?php echo $pageTtl; ?>の画像" width="84" height="82">
        </figure>
        <div class="main-header__ex">
          <h2 class="main-header__ttl"><?php echo $pageTtl; ?></h2>
          <p class="main-header__desc"><?php echo $metaDesc; ?></p>
          <div class="main-header__tags u-tags">
            <?php echo show_category_tags("magazine,town,town2 , wakuwaku,comic"); ?>
          </div>
        </div>
      </div>
    </header>


    <section class="main__item">

      <h2 class="u-ttl__l">ブランシエラマガジン記事一覧</h2>

      <ul class="u-articlelist__row">
        <li class="u-articlelist__item">
          <a href="<?php echo $base_url ?>/magazine/index_technology.php" class="u-articlelist__a">
            <figure class="u-articlelist__img">
              <img src="<?php echo $img_url ?>/thum/magazine-index@2x.png" alt="長谷工の技術・サービス" loading="lazy">
            </figure>
            <h2 class="u-articlelist__ttl">長谷工の技術・サービス</h2>
            <p class="u-articlelist__ex">「つくってきたからわかるんだ」の長谷工がお客さまの声に耳を傾け、マンションの在り方を考える。この作業を何度も繰り返してきた経験から生まれた「長谷工の技術・サービス」をご紹介します。</p>
            <div class="toIndex">
              <div class="indexIcon"></div>
              <div class="indexWord">この記事の目次へ</div>
            </div>
          </a>
        </li>

        <li class="u-articlelist__item">
          <a href="<?php echo $base_url ?>/magazine/index_imakura-cafe.php" class="u-articlelist__a">
            <figure class="u-articlelist__img">
              <img src="<?php echo $img_url ?>/magazine/imakura-cafe/index_imakura-cafe@2x.jpg" alt="あなたの“今”を聞かせて！いま暮らCaf&eacute;" loading="lazy">
            </figure>
            <h3 class="u-articlelist__ttl"><span>あなたの“今”を聞かせて！</span><br>いま暮らCaf&eacute;</h3>
            <p class="u-articlelist__ex">ブランシエラクラブのみなさまを対象に実施したアンケート結果から、トレンドを読み解くシリーズ。いま暮らcaf&eacute;で、"暮らしの今"をお話ししませんか？</p>
            <div class="toIndex">
              <div class="indexIcon"></div>
              <div class="indexWord">この記事の目次へ</div>
            </div>
            <div class="u-articlelist__icon new"></div>
          </a>
        </li>

        <li class="u-articlelist__item">
          <a href="<?php echo $base_url ?>/magazine/index_sumai-sos.php" class="u-articlelist__a">
            <figure class="u-articlelist__img">
              <img src="<?php echo $img_url ?>/thum/index_foris@2x.jpg" alt="プロが解決！住まいのSOS" loading="lazy">
            </figure>
            <h3 class="u-articlelist__ttl"><span>プロが解決！</span><br>住まいのSOS</h3>
            <p class="u-articlelist__ex">全国から寄せられる「住まいのお困りごと」をご家庭を訪問して、ひとつひとつクリアにしていく住まいのプロ、住まいスター。さて今回はどんな難問が解決されるでしょう？！</p>
            <div class="toIndex">
              <div class="indexIcon"></div>
              <div class="indexWord">この記事の目次へ</div>
            </div>
            <div class="u-articlelist__icon new"></div>
          </a>
        </li>

        <li class="u-articlelist__item">
          <a href="<?php echo $base_url ?>/magazine/index_comic03.php" class="u-articlelist__a">
            <figure class="u-articlelist__img">
              <img src="<?php echo $img_url ?>/thum/index_cleaning@2x.jpg" alt="" loading="lazy">
            </figure>
            <h3 class="u-articlelist__ttl"><span>部屋のお掃除プロ監修</span><br>三毛猫きらりのお掃除攻略ガイド</h3>
            <p class="u-articlelist__ex">毎日忙しく、なかなかおうちの掃除が行き届かない家族に、ペットの三毛猫「きらり」が掃除方法をレクチャー！基本の掃除方法から、頑固な汚れの落とし方まで、分かりやすく楽しくご紹介♪</p>
            <div class="toIndex">
              <div class="indexIcon"></div>
              <div class="indexWord">この記事の目次へ</div>
            </div>
            <div class="u-articlelist__icon new"></div>
          </a>
        </li>

        <li class="u-articlelist__item">
          <a href="<?php echo $base_url ?>/magazine/index_comic02.php" class="u-articlelist__a">
            <figure class="u-articlelist__img">
              <img src="<?php echo $img_url ?>/magazine/comic02/common/thumb_recipe@2x.png" alt="うちのご飯は世界イチ" loading="lazy">
            </figure>
            <h3 class="u-articlelist__ttl"><span>時短＆簡単！お料理レシピ</span><br>うちのご飯は世界イチ</h3>
            <p class="u-articlelist__ex">家事に仕事に子育てに…毎日忙しい家族のもとへ、突然現れたフライパンの妖精「フラッキー」！フライパン1つで作ることができる時短＆簡単レシピをフラッキーが動画でご紹介します。</p>
            <div class="toIndex">
              <div class="indexIcon"></div>
              <div class="indexWord">この記事の目次へ</div>
            </div>
            <div class="u-articlelist__icon new"></div>
          </a>
        </li>

        <li class="u-articlelist__item">
          <a href="<?php echo $base_url ?>/magazine/index_monozukuri.php" class="u-articlelist__a">
            <figure class="u-articlelist__img">
              <img src="<?php echo $img_url ?>/thum/index_monozukuri@2x.jpg" alt="長谷工の技術・サービス" loading="lazy">
            </figure>
            <h2 class="u-articlelist__ttl">ものづくりへの想い</h2>
            <p class="u-articlelist__ex">長谷工技術研究所の、これまでの研究やテクノロジーについてご紹介します。</p>
            <div class="toIndex">
              <div class="indexIcon"></div>
              <div class="indexWord">この記事の目次へ</div>
            </div>
            <!-- <div class="u-articlelist__icon new"></div> -->
          </a>
        </li>

        <li class="u-articlelist__item">
          <a href="<?php echo $base_url ?>/magazine/index_alsok.php" class="u-articlelist__a">
            <figure class="u-articlelist__img">
              <img src="<?php echo $img_url ?>/magazine/alsok/common/thumb_alsok@2x.jpg" alt="長谷工の技術・サービス" loading="lazy">
            </figure>
            <h2 class="u-articlelist__ttl"><span>プロに聞く。</span><br>暮らしの危機管理。</h2>
            <p class="u-articlelist__ex">暮らしに潜む「危険や犯罪」。気をつけておくべきことをプロである綜合警備保障株式会社（ALSOK）にお聞きしました。</p>
            <div class="toIndex">
              <div class="indexIcon"></div>
              <div class="indexWord">この記事の目次へ</div>
            </div>
            <div class="u-articlelist__icon new"></div>
          </a>
        </li>

        <!--li class="u-articlelist__item">
          <a href="<?php echo $base_url ?>/magazine/index_knowhow.php" class="u-articlelist__a">
            <figure class="u-articlelist__img">
              <img
              data-src="<?php echo $img_url ?>/thum/knowhow_index.jpg"
              alt="暮らしのノウハウBOOK">
            </figure>
            <h3 class="u-articlelist__ttl">暮らしのノウハウBOOK</h3>
            <p class="u-articlelist__ex">長谷工グループでは、マンションを中心に暮らしをサポートするさまざまなサービスをご提供しています。ここでは、その中から、暮らしのお悩みゴトを解決するようなノウハウをご紹介！<br>ぜひ、みなさまの暮らしにお役立てください。</p>
            <div class="toIndex">
              <div class="indexIcon"></div>
              <div class="indexWord">この記事の目次へ</div>
            </div>
            <div class="u-articlelist__icon new"><span>new</span></div>
          </a>
        </li-->

        <li class="u-articlelist__item">
          <a href="<?php echo $base_url ?>/magazine/index_comic01.php" class="u-articlelist__a">
            <figure class="u-articlelist__img">
              <img src="<?php echo $img_url ?>/magazine/comic01/comic01-01.png" alt="何でか、部屋が片付かない。" loading="lazy">
            </figure>
            <h3 class="u-articlelist__ttl"><span>どうしても部屋が片付かない家族の奮闘記</span><br>何でか、部屋が片付かない。</h3>
            <p class="u-articlelist__ex">部屋の片付けが苦手な家族が、片付けのノウハウを学びながら憧れの部屋を目指すマンガコラムです。物語の中には、収納アドバイザー監修のお役立ちメソッドが満載！</p>
            <div class="toIndex">
              <div class="indexIcon"></div>
              <div class="indexWord">この記事の目次へ</div>
            </div>
            <!-- <div class="u-articlelist__icon new"></div> -->
          </a>
        </li>

        <li class="u-articlelist__item">
          <a href="<?php echo $base_url ?>/magazine/index_wakuwaku.php" class="u-articlelist__a">
            <figure class="u-articlelist__img">
              <img src="<?php echo $img_url ?>/magazine/wakuwaku/wakuwaku-main@2x.png" alt="Mr.わくわくメンテナンス講座" loading="lazy">
            </figure>
            <h3 class="u-articlelist__ttl">Mr.わくわくメンテナンス講座</h3>
            <p class="u-articlelist__ex">住まいの達人「Mr.わくわく」が、暮らしを快適にする「住まいのセルフメンテナンス」について分かりやすく解説いたします！</p>
            <div class="toIndex">
              <div class="indexIcon"></div>
              <div class="indexWord">この記事の目次へ</div>
            </div>
          </a>
        </li>

        <li class="u-articlelist__item">
          <a href="<?php echo $base_url ?>/magazine/article/kotsuban_lesson_01.php" class="u-articlelist__a">
            <figure class="u-articlelist__img">
              <img src="<?php echo $img_url ?>/thum/kotsuban_thumb@2x.jpg" alt="お家でチャレンジ！からだづくりレッスン" loading="lazy">
            </figure>
            <h2 class="u-articlelist__ttl"><span>お家でチャレンジ！</span><br>からだづくりレッスン</h2>
            <p class="u-articlelist__ex">からだの中心に位置する骨盤。体型の変化や肩こり、腰痛など、さまざまなからだの不調を整えるには「骨盤」のゆがみを調整することが大切です。ご自宅でも簡単に実践できる、からだづくりの動画をご紹介します。</p>
            <div class="toIndex">
              <div class="indexIcon"></div>
              <div class="indexWord">この記事の詳細へ</div>
            </div>
          </a>
        </li>

        <li class="u-articlelist__item">
          <a href="<?php echo $base_url ?>/magazine/index_town.php" class="u-articlelist__a">
            <figure class="u-articlelist__img">
              <img src="<?php echo $img_url ?>/thum/magazine-nishidaitown.png" alt="すてきな街見つけました" loading="lazy">
            </figure>
            <h3 class="u-articlelist__ttl">すてきな街見つけました</h3>
            <p class="u-articlelist__ex">あなたのそばに長谷工がきっとある。マンション建設をはじめ、住まいに関わり続けた長谷工のある風景をご紹介します。</p>
            <div class="toIndex">
              <div class="indexIcon"></div>
              <div class="indexWord">この記事の目次へ</div>
            </div>
          </a>
        </li>
      </ul>
    </section>
  </article>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
