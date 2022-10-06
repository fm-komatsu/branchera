<?php
//base
include ("../../function.php");
$content = get_id_data('4069');
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
    $panAry[] = array("/event/" ,"イベント・キャンペーン");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
    ?>
    <div class="main__wrapper">
      <section class="section wrapper" style="padding-top: 0;">
        <img data-src="<?php echo $img_url; ?>/event/report-tanakami2019/main-v.jpg" data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/main-v@2x.jpg"
         alt="まぼろしのお米『たなかみ米』田植え体験 ～収穫レポート2018～" class="u-img__max u-only__pc mb3">
        <img data-src="<?php echo $img_url; ?>/event/report-tanakami2019/main-v-sp@2x.jpg" alt="まぼろしのお米『たなかみ米』田植え体験 ～収穫レポート2018～"
         class="u-img__max u-only__sp mb3">
        <div class="mb6 date u-position__center">
          <p>【記事一覧】</p>
          <p>
          <span style="display : inline-block;">
              <a href="#repo190905" data-scroll>
                <date>9月5日（木）</date>
              </a>
            </span>
            　|　
            <span style="display : inline-block;">
              <a href="#repo190901" data-scroll>
                <date>9月1日（日）</date>
              </a>
            </span>
            　|　
            <span style="display : inline-block;">
              <a href="#repo190822" data-scroll>
                <date>8月22日（木）</date>
              </a>
            </span>
            　|<br class="u-only__pc">
            <span style="display : inline-block;">
              <a href="#repo190810" data-scroll>
                <date>8月10日（土）</date>
              </a>
            </span>
            　|　
            <span style="display : inline-block;">
              <a href="#repo190802" data-scroll>
                <date>8月2日（金）</date>
              </a>
            </span>
            　|　
            <span style="display : inline-block;">
              <a href="#repo190720" data-scroll>
                <date>7月20日（土）</date>
              </a>
            </span>
            　|<br class="u-only__pc">
            <span style="display : inline-block;">
              <a href="#repo190710" data-scroll>
                <date>7月10日（月）</date>
              </a>
            </span>
            　|　
            <span style="display : inline-block;">
              <a href="#repo190701" data-scroll>
                <date>7月1日（月）</date>
              </a>
            </span>
          </p>
        </div>
        <section class="repoArea" id="repo190905">
          <div class="repoArea__row">
            <section class="repoArea__item">
              <h3 class="mb2">9月5日（木）</h3>
              <div class="center mb2">
                <figure class="mb2">
                  <img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>//event/report-tanakami2019/report-tanakami190905-01.jpg"
                   data-retina="<?php echo $img_url; ?>//event/report-tanakami2019/report-tanakami190905-01@2x.jpg" />
                  <img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190905-01-sp.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190905-01-sp@2x.jpg" />
                </figure>
              </div>
              <div class="balloon balloon_widthmax mb hasepon">
                <div class="inner_pon">
                  <div>
                    <p>収穫したぽん！昨年と比べて粒も上出来だったよ。</p>
                  </div>
                </div>
              </div>
              <div class="flex between center mb4">
                <figure class="w35 mb2">
                  <img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190905-02.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190905-02@2x.jpg" style="max-width:210px;" />
                </figure>
                <figure class="w65">
                  <img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190905-03.jpg"
                  data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190905-03@2x.jpg" />
                </figure>
              </div>
              <div class="balloon balloon_widthmax mb hasepon">
                <div class="inner_pon">
                  <div>
                    <p>収穫後に、登録検査機関の方に農産物検査をしてもらったよ！<br>今年のお米は一等米だったぽん♪</p>
                  </div>
                </div>
              </div>
              <div class="balloon balloon_widthmax mb hasepon">
                <div class="inner_pon">
                  <div>
                    <p class="mb2">田植えイベントに参加してくれたみんなには、収穫したお米をお届けするよ！<br>もう少し待っててね！！<br>ブランシエラクラブ会員のみなさんは、<a href="<?php echo $base_url ?>/gift/article/tanakami_regular.php">優待サービスからのご注文で5%OFFで購入できる</a>から、ぜひチェックしてみて欲しいぽん♪</p>
                    <p class="mb2">それから、たなかみ米は京都伊勢丹さんにも置かせてもらっているんだよ。<br>お近くの方は覗いてみてくれたら嬉しいな！</p>
                    <p>おいしくできあがった令和最初のたなかみ米。みんなに味わって欲しいぽん！！</p>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </section>
        <section class="repoArea" id="repo190901">
          <div class="repoArea__row">
            <section class="repoArea__item">
              <h3 class="mb2">9月1日（日）</h3>
              <div class="center mb2">
                <figure class="mb2">
                  <img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>//event/report-tanakami2019/report-tanakami190901-01.jpg"
                   data-retina="<?php echo $img_url; ?>//event/report-tanakami2019/report-tanakami190901-01@2x.jpg" />
                  <img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190901-01-sp.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190901-01-sp@2x.jpg" />
                </figure>
              </div>
              <div class="balloon balloon_widthmax mb hasepon">
                <div class="inner_pon">
                  <div>
                    <p>仕上がりは上々だぽん！<br>もうすぐ、収穫だよ。</p>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </section>

        <section class="repoArea" id="repo190822">
          <div class="repoArea__row">
            <section class="repoArea__item">
              <h3 class="mb2">8月22日（木）</h3>
              <div class="center mb2">
                <figure class="mb2">
                  <img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>//event/report-tanakami2019/report-tanakami190822-01.jpg"
                   data-retina="<?php echo $img_url; ?>//event/report-tanakami2019/report-tanakami190822-01@2x.jpg" />
                  <img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190822-01-sp.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190822-01-sp@2x.jpg" />
                </figure>
              </div>
              <div class="flex between center mb4">
                <figure class="w50 mb2">
                  <img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190822-02.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190822-02@2x.jpg" />
                </figure>
                <div class="balloon balloon_widthmaxsp mb hasepon_r">
                  <div class="inner_r">
                    <div>
                      <p>青々としてるけど、稲穂が頭を垂れだしたよ。<br>これから成熟していって徐々に、黄金色に染まっていくぽん！</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex between center mb4">
                <div class="balloon balloon_widthmaxsp mb hasepon">
                  <div class="inner_pon">
                    <div>
                      <p>獣害防止フェンスの人の出入り口の柵が荒らされていたよ。<br>これはイノシシの仕業だけど、すごい威力だぽん。幸い入られた形跡はなく稲も無事だったよ。<br>留めている針金をきっちり締めなおしたぽん。</p>
                    </div>
                  </div>
                </div>
                <figure class="w50">
                  <img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190822-03.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190822-03@2x.jpg" />
                </figure>
              </div>

            </section>
          </div>
        </section>

        <section class="repoArea" id="repo190810">
          <div class="repoArea__row">
            <section class="repoArea__item">
              <h3 class="mb2">8月10日（土）</h3>
              <div class="center mb2">
                <figure class="mb2">
                  <img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>//event/report-tanakami2019/report-tanakami190810-01.jpg"
                   data-retina="<?php echo $img_url; ?>//event/report-tanakami2019/report-tanakami190810-01@2x.jpg" />
                  <img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190810-01-sp.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190810-01-sp@2x.jpg" />
                </figure>
              </div>
              <div class="flex between center mb4">
                <figure class="w50 mb2">
                  <img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190810-02.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190810-02@2x.jpg" />
                </figure>
                <div class="balloon balloon_widthmaxsp mb hasepon_r">
                  <div class="inner_r">
                    <div>
                      <p>顔を出した稲穂に、花が咲いたぽん！</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </section>

        <section class="repoArea" id="repo190802">
          <div class="repoArea__row">
            <section class="repoArea__item">
              <h3 class="mb2">8月2日（金）</h3>
              <div class="center mb2">
                <figure class="mb2">
                  <img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>//event/report-tanakami2019/report-tanakami190802-01.jpg"
                   data-retina="<?php echo $img_url; ?>//event/report-tanakami2019/report-tanakami190802-01@2x.jpg" />
                  <img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190802-01-sp.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190802-01-sp@2x.jpg" />
                </figure>
                <div class="balloon balloon_widthmax mb hasepon">
                  <div class="inner_pon">
                    <div>
                      <p>順調だよ！心配していた寒い気候も、見違えるような夏らしい気候になったね。</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex between center mb4">
                <figure class="w50 mb2">
                  <img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190802-02.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190802-02@2x.jpg" />
                </figure>
                <div class="balloon balloon_widthmaxsp mb hasepon_r">
                  <div class="inner_r">
                    <div>
                      <p>暑くて作業は大変だけど、お米の成長には欠かせないぽん！美味しいお米が採れる期待が高まるぽん。</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex between center mb2">
                <figure class="w50 mb2_sp">
                  <img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190802-03.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190802-03@2x.jpg" />
                </figure>
                <figure class="w50">
                  <img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190802-04.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190802-04@2x.jpg" />
                </figure>
              </div>
              <div class="balloon balloon_widthmax mb4 hasepon">
                <div class="inner_pon">
                  <div>
                    <p>稲も成長しているけど、雑草も大きく成長。草刈り作業したよ。<br>夏本番！すごく暑いぽん。</p>
                  </div>
                </div>
              </div>
              <div class="flex between center">
                <figure class="w50 mb2">
                  <img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190802-05.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190802-05@2x.jpg" />
                </figure>
                <div class="balloon balloon_widthmaxsp mb hasepon_r">
                  <div class="inner_r">
                    <div>
                      <p>田んぼの看板にバッタが休憩してたよ。</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </section>

        <section class="repoArea" id="repo190720">
          <div class="repoArea__row">
            <section class="repoArea__item">
              <h3 class="mb2">7月20日（土）</h3>
              <div class="center mb2">
                <figure class="mb2">
                  <img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>//event/report-tanakami2019/report-tanakami190720-01.jpg"
                   data-retina="<?php echo $img_url; ?>//event/report-tanakami2019/report-tanakami190720-01@2x.jpg" />
                  <img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190720-01-sp.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190720-01-sp@2x.jpg" />
                </figure>
                <div class="balloon balloon_widthmax mb hasepon">
                  <div class="inner_pon">
                    <div>
                      <p>順調に育っているよ。大きく背丈も伸びたぽん。葉っぱの色具合もいい感じだよ。でも、ちょっと心配なことがあるぽん。。。</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex between center mb4">
                <figure class="w50 mb2">
                  <img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190720-02.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190720-02@2x.jpg" />
                </figure>
                <div class="balloon balloon_widthmaxsp mb hasepon_r">
                  <div class="inner_r">
                    <div>
                      <p>6月～7月中旬は全国的に涼しかったよね。このたなかみ地区も、夏とは思えない涼しい日が多くあったよ。<br>作業する分には良いけれど、おいしいお米に育つためには、たくさんの太陽の光と、あったかい気温が必要だぽん。<br>こればっかりは、神様にお願いするしかないぽん。</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </section>

        <section class="repoArea" id="repo190710">
          <div class="repoArea__row">
            <section class="repoArea__item">
              <h3 class="mb2">7月10日（水）</h3>
              <div class="center mb2">
                <figure class="mb2">
                  <img class="w100 u-img__max u-only__pc" data-src="<?php echo $img_url; ?>//event/report-tanakami2019/report-tanakami190710-01.jpg"
                   data-retina="<?php echo $img_url; ?>//event/report-tanakami2019/report-tanakami190710-01@2x.jpg" />
                  <img class="w100 u-img__max u-only__sp" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190710-01-sp.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190710-01-sp@2x.jpg" />
                </figure>
                <div class="balloon balloon_widthmax mb hasepon">
                  <div class="inner_pon">
                    <div>
                      <p>順調にすくすくと育っているぽん！</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex between center mb4">
                <figure class="w50 mb2_sp">
                  <img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190710-02.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190710-02@2x.jpg" />
                </figure>
                <figure class="w50 mb2_sp">
                  <img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190710-03.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190710-03@2x.jpg" />
                </figure>
              </div>
              <div class="balloon balloon_widthmax mb hasepon">
                <div class="inner_pon">
                  <div>
                    <p>中干し（なかぼし）をしているぽん。田んぼに水がないね。<br>これは美味しくて、安全なお米をつくるための作業だよ。<br>2週間くらい中干しをして、そのあとに水を張るぽん。</p>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </section>
        <section class="repoArea" id="repo190701">
          <div class="repoArea__row">
            <section class="repoArea__item">
              <h3 class="mb2">7月1日（月）</h3>
              <div class="flex between center mb2">
                <figure class="w50 mb2_sp">
                  <img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190701-01.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190701-01@2x.jpg" />
                </figure>
                <div class="balloon balloon_widthmaxsp mb hasepon_r">
                  <div class="inner_r">
                    <div>
                      <p>こんにちは、長谷工あんしんデリの「はせぽん」だぽん。<br>これから稲の成長をレポートしていくので、よろしくね！<br>6月は晴天にも恵まれて、とても順調に生育しているよ！</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex between center mb4">
                <div class="balloon balloon_widthmaxsp mb hasepon">
                  <div class="inner_pon">
                    <div>
                      <p>シカ対策のためフェンスを設置したよ。シカは苗が根付いたころに新芽を食べてしまうんだ。</p>
                    </div>
                  </div>
                </div>
                <figure class="w50">
                  <img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190701-02.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190701-02@2x.jpg" />
                </figure>
              </div>
              <div class="flex between center mb2">
                <figure class="w50 mb2_sp">
                  <img class="w100" data-src="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190701-03.jpg"
                   data-retina="<?php echo $img_url; ?>/event/report-tanakami2019/report-tanakami190701-03@2x.jpg" />
                </figure>
                <div class="balloon balloon_widthmaxsp mb hasepon_r">
                  <div class="inner_r">
                    <div>
                      <p>みんなで田植えをした田んぼ脇の水路に、蛍が飛んでいたよ。<br>事務所にも遊びに来たので、写真を撮ったよ。もちろん撮影のあと外に逃がしてあげたぽん。</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </section>
      </section>
    </div>
  </article>
</main>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
