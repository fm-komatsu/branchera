<?php
//base
include ("../../function.php");
$content = get_id_data('25006');
$pageTtl = 'あなたの今を聞かせて！<br>夫婦の時間、大切にしていますか？';
$eventSts = $content['icon-img'];

//meta
$metaTtl = strip_tags($content['title']).'-'.siteName();
//$metaDesc = siteDesc($pageTtl);
$metaDesc = '日常生活の中で、ほっこりと心が和む「夫婦だけの時間」を楽しんでいますか？「そういえば最近はすれ違ってばかりかも…」と気づいたら黄色信号。末永く夫婦円満でいるために、忙しくてもパートナーとのコミュニケーションは大切にしなくっちゃ！ブランシエラクラブ会員のみなさんに、夫婦の時間について聞いてみました。';
$metaThum = $img_url.'/thum/'.$content['image'];

// サムネイル横のテキスト
$thumTxt = $content[ 'title' ];

//bodyClass
$body_class ="page-article cafe-report";

// ページ内の設定
// 回答期間：
$period = "2021年1月28日（木）～2月3日（水）";
// 回答者数
$respondents ="計1,456名";
// 対象者：
$target = "長谷工IDをお持ちの方で、30代～60代のご夫婦の方";


//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>
<main class="main">
  <article class="main__row ">
    <?php
		$panAry[] = array("/magazine/" ,"ブランシエラマガジン");
    $panAry[] = array("/magazine/index_imakura-cafe.php" ,"いま暮らCaf&eacute;");
    include ($inc_path."/lib/inc/pan.php");
    include ($inc_path."/lib/inc/page/_magazine/cafe-header.php");
    ?>
		<aside class="mt3 mb3">
			<?php //$CmGtmId = '1'; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php"); ?>
		</aside>
    <div class="main__wrapper cafe-report__wrapper">
      <section class="main__item mb8 mb4_sp">
        <h2 class="u-font-size__30 u-color__dark mb2">夫婦の時間、大切にしていますか？</h2>
        <div class="u-assist_cafe_low u-only__pc u-font__palt">
          回答期間&emsp;&emsp;&emsp;：&emsp;<?php echo $period ?><br>
          回答者数&emsp;&emsp;&emsp;：&emsp;<?php echo $respondents ?><br>
					対象者&emsp;&emsp;&emsp;&emsp;：&emsp;<?php echo $target ?>

        </div>
        <div class="u-assist_cafe_low u-only__sp u-font__palt">
          回答期間：<?php echo $period ?><br>
					回答者数：<?php echo $respondents ?><br>
					対象者：<?php echo $target ?>
        </div>
        <div class="mb6 mb3_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/main-v@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/main-v-sp@2x.png" alt="｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</div>
				<div class="info">
					<h3 class="mb3">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/ttl__info@2x.png" alt="あなたの今を聞かせて！夫婦の時間、大切にしていますか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/ttl__info-sp@2x.png" alt="あなたの今を聞かせて！夫婦の時間、大切にしていますか？｜<?php echo $metaDesc ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h3>
					<p>日常生活の中で、ほっこりと心が和む「夫婦だけの時間」を楽しんでいますか？「そういえば最近はすれ違ってばかりかも…」と気づいたら黄色信号。末永く夫婦円満でいるために、忙しくてもパートナーとのコミュニケーションは大切にしなくっちゃ！ブランシエラクラブ会員のみなさんに、夫婦の時間について聞いてみました。</p>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<div>
					<h4 class="mb3 mb2_sp">
						<figure>
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/q1__ttl@2x.png" alt="ふだんから夫婦水入らずの時間をちゃんと取っている夫婦が6割以上｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
							<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/q1__ttl-sp@2x.png" alt="ふだんから夫婦水入らずの時間をちゃんと取っている夫婦が6割以上｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
						</figure>
					</h4>
				</div>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item mb3_sp">
							<p class="mb3">共働きで仕事、家事、そして育児と忙しく過ごしている家庭が多い現在、夫婦水入らずの時間をつくるのって、なかなか大変かも…。そんな先入観を抱きつつ、ブランシエラクラブ会員のみなさんの声を聞いてみると、うれしい驚き！ふだんの暮らしの中でちゃんと夫婦だけの時間を取っている人が、なんと6割以上もいらっしゃいました。けっこうみなさん、仲良しなんですね♪一方で、「心がけてはいるが、なかなか時間が取れない」とお悩みの人が2割、「全く取れていない」という悲しい答えも少なからずあって、コミュニケーション不足の夫婦も多いことがわかりました。</p>
						</div>
						<div class="u-column__item">
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/q1__img01@2x.png" alt="円グラフ｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:335px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/q1__img01-sp@2x.png" alt="円グラフ｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:341px" loading="lazy">
							</figure>
							<figure class="mb3">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/q1__img02@2x.png" alt="円グラフ内訳説明｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:304px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/q1__img02-sp@2x.png" alt="円グラフ内訳説明｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:341px" loading="lazy">
							</figure>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/q1__img03@2x.png" alt="私も仲良し夫婦が理想です〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:268px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/q1__img03-sp@2x.png" alt="私も仲良し夫婦が理想です〜｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" style="max-width:341px" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec01__ttl@2x.png" alt="夫婦二人の時間が取れない理由の多くは、「子育て、仕事が忙しいから」にナットク！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec01__ttl-sp@2x.png" alt="夫婦二人の時間が取れない理由の多くは、「子育て、仕事が忙しいから」にナットク！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec01__img01@2x.png" alt="そうそうわかります image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:348px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec01__img02@2x.png" alt="つい、お子さま中心になってしまう image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:357px" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec01__img03@2x.png" alt="仕事優先は反省 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:362px" loading="lazy">
							</figure>
						</div>
						<div class="u-column__item">
							<p>夫婦の時間が「取れない」、「取りにくい」と感じている人に、その理由を聞いたところ、ダントツで多かったのが「子育てで忙しい」でした。やはり、小さなお子さんがいる家庭だと、夫婦二人きりでゆっくりと過ごすのは難しそうですね。「夜は子どもを寝かすとそのまま一緒に寝てしまうし、休日も子どもを中心に過ごすから夫婦だけの時間なんて取れない」、「たまの週末にデートしたいけれど、近くに預かってくれる親がいるわけでもなく、子どもを置いて二人で出かけるのは無理」といったコメントに、思わず首を縦に振ってうなずくママも多いのでは？<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec01__img01-sp@2x.png" alt="そうそうわかります image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
								負けず劣らず多かったのが「仕事が忙しい」という理由で、こちらは働き盛りの男性に多いのかもしれません。夫の帰りが遅くて生活リズムが合わなかったり、共働きでお互いの休日がそろわなかったり、みなさん、すれ違いにお悩みのようです。「平日は私の就寝後に夫が帰宅し、朝はあわただしくて話す余裕はなし。土日も家事や育児に忙しく、『夫婦の時間、何それ？』って感じです」という妻側の悲痛な叫びもありました。中には「趣味が合わない」や「同じ空間にいてもお互いにスマホばかり見ている」など、はなからコミュニケーション意欲ゼロの人も。パートナーに無関心になって二人の関係に溝ができるとタイヘン！夫婦の会話が減ってしまわないように気を付けたいですね。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec01__img02-sp@2x.png" alt="仕事優先は反省 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec02__ttl@2x.png" alt="コロナ禍の功名？！半数以上のご夫婦が毎晩一緒にごはんを食べている｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec02__ttl-sp@2x.png" alt="コロナ禍の功名？！半数以上のご夫婦が毎晩一緒にごはんを食べている｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec02__img01@2x.png" alt="最近増えたね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:357px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec02__img02@2x.png" alt="ご飯の時間はほっこりしますよね。 image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:341px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p>パートナーと向き合う時間といえば、やっぱり食事どき。特に夕食タイムはゆっくり会話ができる貴重なひとときですよね。そこで、みなさんに「週何回くらい夫婦で一緒に晩ごはんを食べているのか」を尋ねてみました。コロナ禍で在宅時間が増えたこともあってなのか、「ほぼ毎日、夫婦で一緒に晩ごはんを食べている」というご夫婦が半数以上。「週の半分ぐらい」を加えると約7割に上ります。かなり多いといえるのではないでしょうか。<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec02__img01-sp@2x.png" alt="最近増えたね image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							家族や夫婦がそろって食卓につき、美味しい料理に舌鼓を打ちながら、今日一日の出来事を楽しく語り合う。これって夫婦円満の最大の秘訣かも♪ただ、帰宅時間がバラバラで、夕食を別々に取らざるを得ない家庭もチラホラ見えます。ずっとこの状態が続くと会話の機会も減ってしまいますから、せめて休日ぐらいは夫婦一緒に食事を楽しみたいものですね。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec02__img02-sp@2x.png" alt="ご飯の時間はほっこりしますよね。image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec03__ttl@2x.png" alt="夫婦で買い物、散歩に出かけたり、たまに外食も共通の趣味を楽しむことで会話も盛り上がりそう！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec03__ttl-sp@2x.png" alt="夫婦で買い物、散歩に出かけたり、たまに外食も共通の趣味を楽しむことで会話も盛り上がりそう！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec03__img01@2x.png" alt="ナイス！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:342px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec03__img02@2x.png" alt="一緒に体を動かすのもいいかも！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:353px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p>では、ふだんはご夫婦一緒にどんなことを楽しんでいるのでしょうか？多かったのは「食事」、「買い物」、「散歩」という返答でした。週末、誘いあってお気に入りのお店で外食をしたり、スーパーに一緒に買い物に出かけたり、運動がてら仲良く散歩をしているカップルの姿も目に浮かんできます。また、お酒でコミュニケーションを図っているご夫婦もいて、「子どもが寝た後、二人で晩酌をするのが楽しみ♪」、「週末は外でお酒を飲んでおしゃべりに花を咲かせる」といったコメントもありました。共通の趣味を楽しむご夫婦も目立ちます。<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec03__img01-sp@2x.png" alt="ナイス！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							「ゴルフやスキーに行く」、「登山・トレッキングをする」、「映画や音楽を鑑賞する」、「ゲームに熱中する」という人や、中には「一緒に家庭菜園に精を出す」という人も。趣味に没頭していると心が満たされますが、気心の知れた夫婦なら充実感も倍増しそうですね。楽しい時間を共有することで夫婦の絆も強まりますし、共通の話題で会話も盛り上がるはず。あらためて相手のよいところに気づくこともあるでしょう。パートナーを誘って何か新しい趣味を始めてみるのもいいかもしれません。
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec03__img02-sp@2x.png" alt="一緒に体を動かすのもいいかも！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec04__ttl@2x.png" alt="夫の料理参加率はまだ低い？男性のみなさんも気軽にレッツ・クッキング！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec04__ttl-sp@2x.png" alt="夫の料理参加率はまだ低い？男性のみなさんも気軽にレッツ・クッキング！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<div class="u-column">
					<div class="u-column__2">
						<div class="u-column__item u-only__pc">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec04__img01@2x.png" alt="僕もしますよ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" style="max-width:324px" loading="lazy">
								<img class="mb3" src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec04__img02@2x.png" alt="旦那さまの料理姿〜とっても素敵です！image｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" style="max-width:347px" loading="lazy">
						</div>
						<div class="u-column__item">
							<p class="mb4">家事の中でも特に手間と時間のかかるのが料理です。だけど、まだまだ妻が担っている家庭が主流のよう。夫婦で料理をすることは「ない」と答えた人がかなりを占める結果となりました。中には「夫はカップラーメンしかつくれない」とため息をつく人も…。一方で若い世代を中心に、妻と夫で台所仕事を分担したり、週末に夫が男の料理に腕をふるったり、あるいはクッキングを一緒に楽しむカップルも増えています。「バーベキューと焼肉は夫の担当」、「お鍋料理は私が具材を切って、夫が調理する」、「魚をさばくときとステーキを焼くときは夫が張り切る」という声があるように、ちょっと特別感のある献立のときには男性の出番となることが多いようですね。<br class="u-only__sp">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec04__img01-sp@2x.png" alt="僕もしますよ　image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							また、こんなラブラブの夫婦も！「休みの日は肉料理、魚介料理をお互いに1皿ずつつくって一緒に食べる」、「手巻き寿司の具材を何にするかを一緒に考えるのが楽しい♪」というコメントに思わず頬がゆるみました。夫が料理に目覚めてくれれば、妻の家庭生活満足度も上がるというもの。初心者でもサッとつくれる簡単レシピを手始めに、男性のみなさんもぜひ愛情のこもった美味しい料理にチャレンジしてはいかがですか。</p>
						<div class="cafe-report__link mb3">
							<a href="https://www.haseko.co.jp/branchera/magazine/index_comic02.php" data-ga-click="cafe6_1">
									<figure>
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec04__btn@2x.png" alt="料理づくりにチャレンジ！と思った方はこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:331px" loading="lazy">
										<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec04__btn-sp@2x.png" alt="料理づくりにチャレンジ！と思った方はこちら｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp center" loading="lazy">
									</figure>
								</a>
							</div>
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec04__img02-sp@2x.png" alt="旦那さまの料理姿〜とっても素敵です！ image｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp mt2_sp mb2_sp center" loading="lazy">
							</figure>
						</div>
					</div>
				</div>
			</section>
			<section class="mb8 mb4_sp">
				<h4 class="mb3 mb2_sp">
					<figure>
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec05__ttl@2x.png" alt="夫婦で伝えあう、ありがとうの気持ち｜パートナーへの感謝の気持ち、どんな言葉で伝えたいですか？愛情いっぱい、十人十色の胸が熱くなる一言をピックアップしました。｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc" loading="lazy">
						<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec05__ttl-sp@2x.png" alt="夫婦で伝えあう、ありがとうの気持ち｜パートナーへの感謝の気持ち、どんな言葉で伝えたいですか？愛情いっぱい、十人十色の胸が熱くなる一言をピックアップしました。｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
					</figure>
				</h4>
				<h4 class="mb3 mb2_sp">
							<figure>
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec05__img01@2x.png" alt="エピソード紹介｜夫婦で伝えあう、ありがとうの気持ち｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc mb3" loading="lazy">
								<img src="<?php echo $img_url ?>/magazine/cafe-report/cafe-report-vol06/sec05__img01-sp@2x.png" alt="エピソード紹介｜夫婦で伝えあう、ありがとうの気持ち｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
							</figure>
				</h4>
			</section>
			<section class="mb3">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__pc center" style="max-width:567px" loading="lazy">
					<img src="<?php echo $img_url ?>/magazine/cafe-report/common/end__img-sp@2x.png" alt="いかがでしたか？次回のいま暮らcaf&eacute;もお楽しみに！！｜<?php echo $pageTtl ?>" class="u-img__max u-only__sp" loading="lazy">
				</figure>
			</section>
    </div>
    <?php include ($inc_path."/lib/inc/page/_magazine/__back_num_cafe-report.php") ?>
  </article>
	<aside class="mt3 mb3">
		<?php $CmGtmId = "2"; include ($inc_path."/lib/inc/page/_magazine/__comic01_cm.php");?>
	</aside>
</main>

<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
