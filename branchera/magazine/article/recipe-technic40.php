<?php
//base
include("../../function.php");
$content = get_id_data('15040');
$pageTtl = $content['title'];

//meta
$metaTtl = $pageTtl . '｜長谷工グループ「ブランシエラクラブ」';
//$metaDesc = siteDesc($pageTtl);
// $metaDesc = $content[ 'description' ];
$metaDesc  = '「鮮度のよい魚の見分け方」を動画で解説。魚の締め方によって大きく左右される魚の鮮度。店頭で選ぶときのポイントとは？1尾で買うときの選び方と、切り身・刺身で買うときの選び方をそれぞれご紹介します。';
$metaThum = $img_url . '/thum/' . $content['image'];

// サムネイル横のテキスト
$thumTxt = $content['description'];

//bodyClass
$body_class = "page-article page-recipe";

//htmlHeader
include($inc_path . "/lib/inc/head.php");
include($inc_path . "/lib/inc/header.php");

//YouTube ID
$youTubeId = 'FLDnV6vIPuQ';

//導入文
$introTxt = '第40回は「鮮度のよい魚の見分け方」です。新鮮な魚を選ぶポイントをご紹介します。';

//キャプチャALTタグ
$altCap00 = '水揚げされたカツオ';
$altCap0000 = '新鮮な刺身の盛り合わせ（イメージ）';
$altCap01 = '目が透明に澄んでいることを確認します。';
$altCap02 = 'ウロコが剥がれていないことを確認します。';
$altCap03 = '色鮮やかでお腹にハリと弾力があることを確認します。';
$altCap04 = '鮮度が落ちると目が白く濁ったり、赤くなったりすることがあります。';
$altCap05 = '鮮度が落ちるとウロコが剥がれやすいです。';
$altCap06 = 'ドリップ（水分）が出ていないことを確認します。';
$altCap07 = '鮮度が落ちるとドリップが出やすくなります。';
$altCap08 = '';
$altCap09 = '';
$altCap10 = '';
$altCap11 = '';
$altCap12 = '';
$altCap13 = '';

?>
<main class="main">
  <article class="main__row">
    <?php
    $panAry[] = array("/magazine/", "ブランシエラマガジン");
    $panAry[] = array("/magazine/index_comic02.php", "今さら聞けない料理のアレコレ");
    include($inc_path . "/lib/inc/pan.php");
    include($inc_path . "/lib/inc/page/_magazine/__comic02tech-header.php");
    include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-main-v.php");
    ?>
    <section class="main__wrapper recipe">
      <div class="recipe__header recipe-header technic">
        <h2 class="recipe-header__row">
          <span class="recipe-header__num">　</span>
          <span class="recipe-header__ttl"><?php echo $pageTtl ?></span>
        </h2>
      </div>
      <div class="recipe__intro recipe-intro">
        <p class="recipe-intro__ex">「うちのご飯は世界イチ」の番外編、お料理の基本をご紹介するミニレッスンへようこそ。<br><?php echo $introTxt ?></p>
      </div>
      <hr class="recipe__line">
      <?php
      $recipeIcon = 'mie_02';
      $speech = 'マユ先生、スーパーなどでたくさん並んでいる魚の中から<br class="u-only__pc">鮮度のよいものって、どのように見分けたらいいですか？';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = '魚って、選ぶポイントが分からないと<br class="u-only__pc">違いが分かりませんよね<br>では、鮮度のよい魚の選び方をレッスンしていきましょう';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mie_02';
      $speech = 'テレビ番組で「目を見る」と聞いたことはあるのですが、<br class="u-only__pc">具体的にどのようにチェックしたらよいのか分からなくて…<br>ぜひ、教えてください！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = '新鮮な魚の見分け方を覚えて<br class="u-only__pc">マサキさんやコウちゃんにも教えてあげましょうね';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__movie recipe-movie technic">
        <h3 class="recipe-movie__ttl">
          <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/k_ttl@2x.png" alt="マユ先生のHow to" style="max-width:153px" class="u-img__max">
        </h3>
        <div class="recipe-movie__video">
          <div class="recipe-movie__video_base">
            <iframe class="recipe-movie__video_emb" src="https://www.youtube.com/embed/<?php echo $youTubeId ?>?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <div class="recipe__design recipe-design">
        <div class="recipe-design__howto mb3">
          <h3 class="recipe__ttl_l mb0">魚の鮮度とは？</h3>
          <p class="mb2">鮮度は、魚の安全性や美味しさの大きな決め手になります。まず、「鮮度のよい魚」とはどうやって決まるのか、確認していきましょう。</p>
          <h4 class="recipe__ttl">鮮度のよい魚にする決め手とは？</h4>
          <div class="u-clearfix">
            <figure class="u-float__right">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-00.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-00@2x.jpg" alt="マユ先生のHow To <?php echo ('「' . $pageTtl . '」' . $altCap00); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p class="mb2">魚は水分が多いため雑菌が繁殖しやすく、腐敗しやすい内臓やエラが付いたまま流通します。そのため、水揚げした後の処理が適切に行なわれているかどうかが、魚の鮮度を大きく左右します。</p>
            <p class="mb2">最も重要なのが、<strong>水揚げした魚の締め方</strong>。魚は絶命すると死後硬直が始まりますが、その後は時間の経過とともに軟化し、腐敗が始まってしまいます。<br>しかし、自然死を待たず、生きているうちにすぐ締めることによって、死後硬直が始まる時間を遅らせることができます。腐敗するまでの時間が延び、鮮度を長く保つことができるのです。</p>
            <p class="mb2">また、ATP（アデノシン三リン酸）と呼ばれる魚のうまみ成分の素は、暴れたり、苦しんだりすることで減少します。美味しい状態で出荷するためにも、一気に急所を断ち切る「活け締め」などの方法で締めることが必要です。</p>
          </div>
          <h4 class="recipe__ttl">「鮮度が高い＝美味しい」ではない⁉魚とうまみの仕組み</h4>
          <p class="mb3">実は、魚は締めた直後よりも、少し時間をおいて熟成させてからの方が美味しくいただくことができます。普通、新鮮であればあるほど美味しそうに思えますよね。少し時間をおくと美味しくなるのは、なぜなのでしょうか？</p>
          <h5 class="recipe__ttl_s">答えは、魚のうまみ成分IMP（イノシン酸）の量にあった！</h5>
          <p class="mb2">魚に含まれるうまみ成分の素・ATPは、死後、酵素により分解されて、うまみ成分の<strong>IMP（イノシン酸）</strong>に変化。その後、IMPがさらに分解されて、HxR（イノシン）とHx（ヒポキサンチン）になり、腐敗が進んでいきます。</p>
          <p class="mb3">つまり、締めた直後の段階＝ATPの分解が進んでおらず、うまみ成分のIMPが少ない状態だということ。そのため、締めてすぐよりも、少し時間をおいてIMPをある程度増加させてから食べる方が、濃厚なうまみを味わうことができるのです。</p>
          <h5 class="recipe__ttl_s">魚の鮮度を示す指標とは？</h5>
          <div class="u-clearfix mb3">
            <figure class="u-float__left">
              <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-000.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-000@2x.jpg" alt="マユ先生のHow To <?php echo ('「' . $pageTtl . '」' . $altCap000); ?>" style="max-width:300px" class="u-img__max">
            </figure>
            <p class="mb2">魚の鮮度を示す測定指標に、「<strong>K値</strong>」というものがあります。K値とは、ATP関連化合物に対するHxRとHxの割合のこと。K値が高ければ高いほど、腐敗が進んで鮮度が低い状態といえます。</p>
            <p class="mb2">締めてから少し時間をおくと、IMPが増加して魚が美味しくなるのは確か。しかし、HxRとHxに変化してK値が高くなると、逆に味も舌触りも悪くなってしまうのです。</p>
            <p>K値の上昇速度は、魚の種類によっても大きく異なります。絶妙な熟成具合を楽しむのは、自己判断ではなかなか難しいところ。魚屋や料理人など、プロの見極めに従うようにしましょう！</p>
          </div>
          <h3 class="recipe__ttl_l mb0">鮮度のよい魚を見分けるポイント</h3>
          <p class="mb2">水揚げ後適切な処理がされていたとしても、流通や店頭での管理の過程で、鮮度が悪くなることもあります。できるだけ鮮度のよい魚を購入するには、何に気を付ければよいのでしょうか？鮮度のよい魚を見分けるポイントをご紹介します！</p>
          <h4 class="recipe__ttl">1尾（丸ごと）の選び方</h4>
          <h5>○よい例</h5>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-01.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-01@2x.jpg" alt="マユ先生のHow To <?php echo ('「' . $pageTtl . '」' . strip_tags($altCap01)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap01); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-02.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-02@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap02)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap02); ?>
            </dd>
            </dd>
          </dl>
          <section>
            <div class="recipe-design__check check mb3">
              <div class="check__row">
                <div class="check__ttl">
                  <h4 class="check__ex center">
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png" alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
                  </h4>
                </div>
                <h3>ウロコ、エラを見る</h3>
                <p class="mb2">魚の表面は、ツヤがあり色鮮やかなものは鮮度のよい証拠。ウロコが揃っているのもポイントです。また、魚のエラには血管が集中しているため、鮮やかできれいな赤色をしているかを確認しましょう。茶色や黒っぽく変色しているものはNGです。</p>
              </div>
            </div>
          </section>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-03.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-03@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap03)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap03); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-design__check check mb3">
              <div class="check__row">
                <div class="check__ttl">
                  <h4 class="check__ex center">
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png" alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
                  </h4>
                </div>
                <h3>お腹を見る</h3>
                <p class="mb2">鮮度のよい魚は、お腹の部分が肉厚でしっかりとしています。あばら骨が浮き出て、グニャッとしてやわらかいお腹は、内臓が傷んでいることも。お腹の肉がドロッとしていないかもチェックして。</p>
              </div>
            </div>
          </section>
          <h5 class="mb0">×悪い例</h5>
          <dl class="recipe-design__step mb0">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-04.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-04@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap04)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap04); ?>
            </dd>
          </dl>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-05.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-05@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap05)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap05); ?>
            </dd>
          </dl>
          <section>
            <div class="recipe-design__check check mb3">
              <div class="check__row">
                <div class="check__ttl">
                  <h4 class="check__ex center">
                    <img data-src="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl.png" data-retina="<?php echo $img_url; ?>/magazine/comic02/common/mayu_check_ttl@2x.png" alt="マユ先生のチェック" style="max-width:222px" class="u-img__max">
                  </h4>
                </div>
                <p>エラや内臓は、購入後できるだけ早く取り除いてください。鮮度が保ちやすくなるほか、ヒスタミン食中毒の予防になりますよ。購入時、魚屋やスーパーの魚売り場で処理をお願いしておくとよいでしょう。</p>
              </div>
            </div>
          </section>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">プラスαで確認！魚の種類別・選ぶポイント</h3>
              <p class="mb2">魚の鮮度の見分け方は、種類によっても違います。代表的なものを中心に見ていきましょう。</p>
              <h4 class="recipe__ttl_s">まぐろ</h4>
              <p class="mb2">ほとんどは船上で冷凍保存され、切り身となって店頭に並びます。赤身は表面の赤色が強く、透明感とツヤのあるものを。トロはキメが細かく、スジがあまり入っていないものを選びましょう。</p>
              <h4 class="recipe__ttl_s">さば</h4>
              <p class="mb2">背中が青く模様がはっきりとしていて、お腹が銀色に光っているものを選びます。身にハリがあり、大きいものは脂がのっています。</p>
              <h4 class="recipe__ttl_s">ひらめ</h4>
              <p class="mb2">身がしっかりとかたく、表面が乾いていないものを選びます。肉厚で、尾まで薄くならず縁が上下に張っているのがポイント。きちんと活け締め、血抜きされているひらめは身に透明感があります。エラの上と尾の付け根に切り込みが入っているかをチェックしましょう。</p>
            </section>
          </div>
          <div class="recipe-design__material">
            <h4 class="recipe__ttl">切り身・<a href="<?php echo $base_url ?>/magazine/article/recipe-technic24.php" class="recipe-design__link">刺身</a>の場合</h4>
          </div>
          <h5 class="mb0">○よい例</h5>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-06.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-06@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap06)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap06); ?>
            </dd>
          </dl>
          <h5 class="mb0">×悪い例</h5>
          <dl class="recipe-design__step mb3">
            <dt class="recipe-design__step_img">
              <figure>
                <img data-src="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-07.jpg" data-retina="<?php echo $img_url; ?>/magazine/comic02/technic/40/tech40-07@2x.jpg" alt="マユ先生のHow To<?php echo ('「' . $pageTtl . '」' . strip_tags($altCap07)); ?>" style="max-width:300px" class="u-img__max">
              </figure>
            </dt>
            <dd class="recipe-design__step_txt">
              <?php echo ($altCap07); ?>
            </dd>
          </dl>
          <div class="recipe-design__plus1 plus1 mb3">
            <section class="plus1__row">
              <h3 class="plus1__ttl">魚の鮮度が悪いとどうなる？</h3>
              <p class="mb2">鮮度のよい魚の見分け方は分かりましたが、逆に魚の鮮度が低いと、どのような変化が表れるのでしょうか？</p>
              <h4 class="recipe__ttl_s">味、臭いが変化する</h4>
              <p>魚の鮮度が落ちると、生臭さが強くなります。原因は細菌によるもので、体液や粘液、内臓が臭いの元です。</p>
              <p class="mb2">また、食べてみて明らかに味がおかしい、いつもと違って美味しくないという魚は、腐敗している可能性が高いので要注意！</p>
              <h4 class="recipe__ttl_s">ヒスタミン食中毒の原因になる</h4>
              <p class="mb2">ヒスタミン食中毒は、ヒスタミンが高濃度に蓄積された食品、特に魚類やその加工品を食べることにより発症する、アレルギー様の食中毒です。よく「青魚に当たる」といわれるのが、このヒスタミン中毒のこと。さば・<a href="<?php echo $base_url ?>/magazine/article/recipe-technic102.php" class="recipe-design__link">ぶり</a>・<a href="<?php echo $base_url ?>/magazine/article/recipe-technic41.php" class="recipe-design__link">あじ</a>などの青魚と呼ばれる魚や、かつお・まぐろなどの魚肉・内臓中にヒスタミンが多量に蓄積されたものを口にすることで起こります。</p>
              <p class="mb2">一度生成されたヒスタミンは加熱しても分解されないため、適切な処理と徹底した温度管理で防止するしかありません。魚を購入した際は、常温に放置せず、速やかに冷蔵庫で保管しましょう。</p>
              <p class="mb2">また、ヒスタミンが多く含まれている食品を口にすると、唇や舌先にピリピリとした刺激を感じることがあります。もし魚や魚加工品を食べてこのような異変を感じた場合は、すぐに食べるのを止めて処分しましょう！</p>
            </section>
          </div>
          <h3 class="recipe__ttl_l mb0">魚の鮮度を保つには？</h3>
          <p class="mb2">せっかく鮮度のよい魚を手に入れても、保存状態が悪いとすぐに鮮度は落ちてしまいます。鮮度を保つ冷蔵・冷凍のポイントをお伝えしましょう。</p>
          <h4 class="recipe__ttl">一尾の場合</h4>
          <p class="mb2">魚を一尾丸ごと、鮮度よく保存するには、どのような方法があるのでしょうか？</p>
          <h5 class="recipe__ttl_s">冷蔵保存のポイント</h5>
          <p class="mb2">魚は内臓から傷むため、冷蔵保存する前に内臓やエラ、ウロコ、血合いは取り除きます。水気をよく拭き取り、空気に触れないように密閉するのがコツ。身が重ならないようにラップに包んでからファスナー付き保存袋に入れ、空気を完全に抜いて冷蔵庫の奥で保存します。<br>もしあれば、保冷剤や氷・アイスパックを上下に挟みましょう。より長く鮮度を保てますよ。<br>保存期間の目安は、約2日です。</p>
          <h5 class="recipe__ttl_s">冷凍保存のポイント</h5>
          <p class="mb4">ラップでしっかり包んでファスナー付き保存袋に入れ、できるだけ急速に冷凍します。<br>くわしくは「<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic72.php#ichibi" class="recipe-design__link">魚の冷凍保存方法</a>」をご覧ください。</p>
          <h4 class="recipe__ttl">切り身・刺身の場合</h4>
          <p class="mb2">買うときに切り身や刺身の状態になっている場合の、冷凍・冷蔵それぞれ鮮度よく持たせる保存方法をお教えします。</p>
          <h5 class="recipe__ttl_s">冷蔵保存のポイント</h5>
          <p class="mb2">ドリップが出ている場合、よく拭き取ってからキッチンペーパーで包んで、冷蔵庫で数時間置きます。その後ラップで包んで保存してください。そのままラップにくるむと、にじみ出た液が身に付くのでよくありません。<br>商品に記載されている賞味期限に従って、早めに食べるようにしましょう。</p>
          <h5 class="recipe__ttl_s">冷凍保存のポイント</h5>
          <p class="mb2">一尾の場合と同じく、ラップで包んでファスナー付き保存袋に入れ、できるだけ急速に冷凍します。<br>くわしくは「<a href="<?php echo ($base_url) ?>/magazine/article/recipe-technic72.php#kirimi" class="recipe-design__link">魚の冷凍保存方法</a>」をご覧ください。</p>
        </div>
      </div>
      <?php
      $recipeIcon = 'mie_01';
      $speech = 'ポイントを知っていると、より鮮度の高いお魚を選ぶことができるのですね♪<br>何だか、できる主婦になったみたい～<br>これなら、私でも買い物中にチェックできます';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mayu_01';
      $speech = '冊はスジの間隔が狭いものだと、食感があまりよくないので、斜めのスジが入っているものを選ぶといいですよ！';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <?php
      $recipeIcon = 'mie_01';
      $speech = 'よ～し！さっそく、今日の夕ご飯の魚を選びに行こう♪';
      include($inc_path . "/lib/inc/page/_magazine/__recipe-icon.php");
      ?>
      <div class="recipe__assist">
        <div class="recipe-assist">
          <div class="recipe-assist__row">
            <h3 class="recipe-assist__ttl">用語解説</h3>
            <dl class="recipe-assist__term">
              <dt>活け締めとは</dt>
              <dd>活〆ともいい、魚を漁獲した後の処理方法を指す。生きたままの魚のエラに包丁を入れ、延髄を断ち切る。主に中型以上の魚に用いる。</dd>
            </dl>
            <dl class="recipe-assist__term">
              <dt>血合いとは</dt>
              <dd>魚の背骨に沿った、血を多く含む暗赤色の部分。</dd>
            </dl>
          </div>
        </div>
      </div>
      <?php
      //関連記事
      $recommendrecipe = array(
        array('recommend-recipe-st'),
        array('recommend-recipe-id', '15102', 'cooking_2208_1'),
        array('recommend-recipe-id', '15100', 'cooking_2208_2'),
        array('recommend-recipe-id', '15138', 'cooking_2208_3'),
        array('recommend-recipe-end')

      );
      include($inc_path . "/lib/inc/page/_magazine/__recipe-tech-recommend.php");
      ?>
      <div class="mb0">
        <?php
        include($inc_path . "/lib/inc/page/_magazine/__recipe-technic-footer.php");
        ?>
      </div>
    </section>
  </article>
</main>

<?php include($inc_path . "/lib/inc/page/_magazine/__recipe-tech-nav.php"); ?>
<?php
$toindex_url = "/magazine/index_comic02.php";
include($inc_path . "/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php include($inc_path . "/lib/inc/footer.php"); ?>
<?php include($inc_path . "/lib/inc/foot.php"); ?>
