<?php
//base
include ("../../function.php");
$content = get_id_data('1015');
$pageTtl = $content['title'];

//meta
$metaTtl = 'ブランシエラマガジン「'.$pageTtl.'　2/2」-'.siteName();
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
		$panAry[] = array( "/magazine/", "ブランシエラマガジン" );
		$panAry[] = array( "/magazine/index_technology.php", "長谷工の技術・サービス" );
		include( $inc_path . "/lib/inc/pan.php" );
		?>
		<?php
		include ($inc_path."/lib/inc/page/_gift/__main-header.php");
		?>
		<section class="main__wrapper">
			<div class="product-img center mb4">
				<div class="u-only__pc">
					<img
					data-src="../../lib/img/magazine/insurance/img08.png"
					data-retina="../../lib/img/magazine/insurance/img08@2x.png"
					alt="「長谷工アネシス」 Q&Aコーナー"
					style="max-width:720px;"
					class="u-img__max"
					>
				</div>
				<div class="u-only__sp">
					<img
					data-src="../../lib/img/magazine/insurance/img08-sp.png"
					data-retina="../../lib/img/magazine/insurance/img08-sp@2x.png"
					alt="「長谷工アネシス」 Q&Aコーナー"
					style=""
					class="u-img__max"
					>

				</div>

			</div>

			<div class="ex2">
				<div class="inner">
					<div>
						<p>こんにちは、本日はよろしくお願いいたします。</p>
					</div>
				</div>
			</div>
			<div class="balloon">
				<div class="inner">
					<div>
						<p>こちらこそよろしくお願いします。</p>
					</div>
				</div>
			</div>

			<div class="ex2">
				<div class="inner">
					<div>
						<p>本日は、会員のみなさまになじみの深いマンションに関わる保険についてお話を聞かせていただきます。</p>
					</div>
				</div>
			</div>

			<div class="assist mb4">
				<p align="center">
					<img

					data-src="../../lib/img/magazine/insurance/img09.png"
					data-retina="../../lib/img/magazine/insurance/img09@2x.png"
					alt="目次"
					style="max-width: 610px;"
					class="u-img__max"
					>
				</p>
			</div>

			<h4 class="u-ttl__m u-icon__q">まずは長谷工アネシスが取り扱うマンションの保険サービスについてお聞きします。一口にマンションの保険といっても色々な種類があるのですね。</h4>
			<div class="balloon mb ins1">
				<div class="inner">
					<div>
						<p>そうですね。たとえば私たち<strong>個人部門ではマンションの専有部に関する保険</strong>を取り扱っています。</p>
						<p>実際にマンションにお住まいの方の保険証券を拝見すると、<strong>保険を多くかけすぎていたり、逆に少なすぎたり</strong>ということがよくあります。これは、普通の保険代理店ではマンションライフにおけるリスクをしっかりと想定することが難しいからです。</p><p>私たちはグループとして施工だけでなく、様々な側面からマンションに関わっているため、物件によって多種多様に存在するリスクを、きちんと想定できることが大きな特長になっています。</p>
					</div>
				</div>
			</div>

			<div class="balloon mb ins2">
				<div class="inner">
					<div>
						<p>「マンションのことが分かる」というのは、私たち管理組合部門でも大きな特長になっています。私たちが取り扱うのは、<strong>管理組合向けのマンション共用部の保険</strong>です。</p>
						<p>火災保険が中心になるのですが、適切な保険を掛けるためには、建物を適切に評価する必要があります。本来の評価に対し高い保険をかけていると無駄になりますし、逆に低い保険だと万が一の際に補償が足りなくなってしまいます。</p><p>そうしたことがないように、<strong>「マンションのことが分かる」という長谷工グループならではの力を活かし、私たちは建物をしっかりと評価</strong>し、適切な保険をご提案しています。</p>
					</div>
				</div>
			</div>

			<div class="balloon mb ins3">
				<div class="inner">
					<div>
						<p>私が担当している法人部門は、文字通り法人向けの保険を取り扱っています。<strong>工事を請け負う会社の傷害保険、火災保険</strong>なども扱っています。</p><p>取り扱う保険の性質上、他の二人と違い、直接的にマンションにお住まいの方にサービスを提供することはありません。ただ、マンションの新築工事や修繕工事において「不測の事態」や「資材・工具の盗難」などにしっかり備えておく必要があります。</p><p>そういう意味では、マンションにお住まいの方にとって縁の下の力持ち的な保険を扱う部署と言ってもいいかもしれません。</p>
					</div>
				</div>
			</div>


			<h4 class="u-ttl__m u-icon__q">マンションに特化した保険サービスということで特に気を付けていることはありますか？</h4>
			<div class="balloon mb ins1">
				<div class="inner">
					<div>
						<div class="img fr">
							<img
							data-src="../../lib/img/magazine/insurance/img12.png"
							data-retina="../../lib/img/magazine/insurance/img12@2x.png"
							alt="壊れたPC"
							style="max-width: 230px;"
							class="u-img__max"
							>
						</div>
						<p>先ほどの共用部もそうでしたが、<strong>専有部でも主に扱うのは火災保険</strong>です。この火災保険は、実に様々な損害をカバーしています。たとえば、<strong>パソコンの破損や盗難も補償の対象になることがあります</strong>。しかし、「火災」保険という名前のため、もっと限定的な範囲（たとえば火事や災害による破損だけ）のみカバーしている保険だと思われているお客さまが多いようです。</p><p>火災保険でカバーできる範囲をきちんと説明し、お客さまが万が一の際、補償を受けられるようにすることに気を付けています。</p>
					</div>
				</div>
			</div>

			<div class="balloon mb ins2">
				<div class="inner">
					<div>
						<p>特に気を付けている点は２つあります。<br>１つめは、<strong>事故原因の見極めの正確性</strong>です。マンションの共用部というのは、実は意外と事故や破損が起こります。その分、様々な補償が用意されているのですが、事故原因によって補償内容が大きく異なります。きちんと本来の補償を受けていただくために、事故原因の見極めがとても大切です。</p><p>２つめは、<strong>迅速な対応と丁寧な説明</strong>です。マンションは共同住宅なので、事故や破損の後に、居住者同士がもめてしまったり、気まずくなってしまったりということがないようにしなければいけません。そのためには、とにかく素早く対応することと、丁寧に分かりやすい説明をすることを心がけています。</p>
					</div>
				</div>
			</div>

			<div class="balloon mb ins3">
				<div class="inner">
					<div>
						<p>法人部門が気を付けているのは、「<strong>いかに目的に合った保険を提案できるか</strong>」ということです。<br>保険をかけすぎていると全体の工事費用が上昇してしまいますし、不足していると、万が一の際に補償が不充分となる可能性が出てきます。</p><p>グループ内の各部署と連携しながら、<strong>工事内容や現場状況をしっかりと把握したうえで、適切な保険を提案</strong>するようにしています。</p>
					</div>
				</div>
			</div>

			<div class="ex2">
				<div class="inner">
					<div>
						<p>なるほど、長谷工アネシス保険サービス事業部では、マンションの工事、共用部、専有部という３つの領域をカバーすることで、マンションに関するトータルなリスクをケアしているのですね。 <br>引き続き、より具体的にお聞きしたいと思います。</p>
					</div>
				</div>
			</div>


			<h4 class="u-ttl__m u-icon__q">マンションの保険について「知っていると安心」や「ぜひ知っておいてほしい」という知識や情報はありますか。</h4>
			<div class="balloon mb ins1">
				<div class="inner">
					<div>
						<div class="img fr">

							<img
							data-src="../../lib/img/magazine/insurance/img11.png"
							data-retina="../../lib/img/magazine/insurance/img11@2x.png"
							alt="消火器"
							style="max-width: 156px;"
							class="u-img__max"
							>
						</div>
						<p>では、個人部門の担当として３つご紹介します。<br>１つめは共用部分の補償に関する特約についてです。マンションの保険にも専有部分と共用部分の区分があります。しかし、たとえば居住者の過失で共用部分に損害が出た場合は、その損害を個人が負担することがあります。そのために、実は私たちが取り扱う<strong>個人向けの保険にも、共用部分を補償する特約が存在</strong>しています。</p>
						<p>２つめは漏水に関する保険です。漏水の場合は、たいていは管理組合が加入している保険で補償されるのですが、<strong>個人でも個人賠償責任保険に加入していた場合、補償が合算され上限が上がります</strong>。片方だけで補償を受けると思う方が多いので、これはぜひ知っておいていただきたいですね。</p><p>３つめとして、類焼損害についても知っておいていただくと安心です。実は、<strong>火を出した場合、重過失がなければ火を出した人が賠償責任を負うことはほとんどありません</strong>。しかしマンションのような集合住宅では、法律的な賠償責任はなくても、道義的責任から補償するケースも出てきます。このような場合に、相手側の被害を補償するために、類焼損害補償という特約があります。</p><p>また、ご自身が類焼被害を受けられても出火した人に賠償を請求できないケースがほとんどです。その際の被害を補償するためにも<strong>ご自身で火災保険に加入する必要があります</strong>。これもぜひ知っておいていただきたいです。</p>
					</div>
				</div>
			</div>

			<div class="balloon mb ins2">
				<div class="inner">
					<div>
						<p>管理組合部門では、マンションの管理規約に規定されている共用部の保険を扱っています。</p><p>例えば、<strong>給排水管の漏水事故の場合、管理規約上では大抵、横管部分は専有部分、縦管は共用部分と規定</strong>されています。しかし、給排水管が詰まった場合、どこに詰まったかを特定することは簡単ではありません。こうした判定が難しい場合については、一般的に共用部分という扱いになります。</p><p>また、たとえば建物の一部が破損してしまったけれども、破損させた人が誰か分からないという場合、共用部の保険で対応することになります。しかし、もし<strong>名乗り出てもらうことができれば個人の賠償保険で対応することが可能</strong>です。こうしたことを知っておいていただくと、身近で破損事故があったり、あるいは管理組合の役員になられた時などに役立つと思います。</p>
					</div>
				</div>
			</div>

			<div class="balloon mb ins3">
				<div class="inner">
					<div>
						<p>法人部門の場合は、居住者と直接的に関係することが少ないので豆知識的なものをお話させていただきます。</p><p>マンションと一口に言っても、現場ごとに立地条件が全然異なります。<br>想定されるリスクもマンションごとに異なります。たとえば<strong>鉄道が近くに走っているマンションの場合、多くの方が鉄道を利用されますので、万が一事故が起こった場合の損害賠償が莫大になってしまいます。そういうマンションでは、充分な補償が必要になります</strong>。</p>
					</div>
				</div>
			</div>



			<h4 class="u-ttl__m u-icon__q">長谷工グループならではの強みはありますか。</h4>
			<div class="balloon mb ins1">
				<div class="inner">
					<div>
						<p>グループ力を一番実感するのは、実際に事故が起こった時です。<br>保険というのは、金銭的な補償というのはあくまで手段であり、目的はやはり事故前と変わることのない快適さや心地よさをどう保つかということです。</p><p>実際に事故が発生してお客さまが困っておられるとき、<strong>グループ会社のネットワークを活用して、スピーディかつ適切に対応</strong>できることが、サービスをご提供するうえで一番の強みだと感じています。</p>
					</div>
				</div>
			</div>

			<div class="balloon mb ins2">
				<div class="inner">
					<div>
						<p>管理組合部門でも、やはり自信をもって事故対応できることは大きな強みです。</p><p>もうひとつ、管理組合部門として感じるグループの強みが、<strong>グループ内に管理会社があること</strong>です。管理会社から得られる情報により、たとえば管理組合さまの主催するイベントに保険をご提案するなどフレキシブルな対応が可能になります。<br>この細かな対応力は、実際に管理組合さまからも評価いただいています。</p>
					</div>
				</div>
			</div>

			<div class="balloon mb ins3">
				<div class="inner">
					<div>
						<p>私は二人とは違い、なかなかマンションにお住まいのお客さまとお会いする機会はないのですが、長谷工グループとしてワンストップで幅広いサービスをご提案できることが、お客さまの安心感や便利さにつながっていることを日々の業務の中で実感しています。</p><p>また、<strong>長谷工グループという信頼によって、複数の大手保険会社の多彩な商品を提案できる</strong>ことも、大きな強みになっていると思います。</p>
					</div>
				</div>
			</div>


			<h4 class="u-ttl__m u-icon__q">最後に、会員さまへのメッセージをお願いします。</h4>
			<div class="balloon mb ins1">
				<div class="inner">
					<div>
						<p><strong>私たちは必ず火災保険だけでなく、地震保険もお客さまにお勧め</strong>しています。<br>昨今は、地震被害への意識が高く多くの方が地震保険に加入されます。その地震被害に備える補償について、新しいおすすめ情報がありますので、この場でお伝えさせていただきます。</p><p>従来の地震保険というのは基本契約の30%～50%までしか補償を受けられないものでした。つまり、3000万円のマンションだと、1500万円が上限ということです。<br>しかし、<strong>現在は地震が原因の火災の場合、地震保険と合わせて100%まで補償を受けられる特約が登場</strong>しています。ご興味がありましたら、ぜひお問い合わせください。</p>
					</div>
				</div>
			</div>

			<div class="balloon mb ins2">
				<div class="inner">
					<div>
						<div class="img fr">

							<img
							data-src="../../lib/img/magazine/insurance/img13.png"
							data-retina="../../lib/img/magazine/insurance/img13@2x.png"
							alt="自転車"
							style="max-width: 230px;"
							class="u-img__max"
							>
						</div>

						<p>先ほど、グループとしての強みをお話ししたのですが、もう１点、長谷工グループならではの強みを感じた事例を思い出しました。</p><p>とあるマンションで、共有財産として自転車を所有し、それを貸し出されている管理組合さまがありました。その管理組合さまに、グループ内管理会社の担当者と連携し自転車への保険を提案、実際に事故対応できたという事例です。<br>マンション施工だけでなく、管理でも豊富な実績があるグループだからこそ、<strong>マンション一つひとつにきめ細やかに対応できる</strong>こと、これも私たちの大きな強みだと思います。</p>
					</div>
				</div>
			</div>

			<div class="balloon mb ins3">
				<div class="inner">
					<div>
						<p>「長谷工アネシスの梅本です」と、行く先々の会社さまでご挨拶するのですが、ほとんどの方から「長谷工さん」と呼ばれます。<br>やはり、多くの方にとって、長谷工というのは一つの大きなグループなのだと思います。だからこそ、<strong>安心していただけるし、便利に思っていただける</strong>のではないでしょうか。</p><p>これからも、もっともっとみなさまの安心・便利を実現できるように頑張りますので、今後とも長谷工をよろしくお願いいたします。</p>
					</div>
				</div>
			</div>
			<div class="mb4">
				<img

				data-src="../../lib/img/magazine/insurance/img10.png"
				data-retina="../../lib/img/magazine/insurance/img10@2x.png"
				alt="長谷工アネシス保険サービス事業部の特長"
				style="max-width: 681px;"
				class="u-img__max"
				>
			</div>


			<small class="u-small"><p>※掲載の情報は2016年6月現在のものです。<br>
				※このページ記載の内容は概要を説明したものです。ご契約にあたっては必ず各社各保険商品パンフレットおよび「重要事項のご説明　契約概要のご説明・注意喚起情報のご説明」をあわせてご覧ください。また、詳しくは「ご契約のしおり（普通保険約款・特約）」をご用意していますので、取扱代理店または引受保険会社までご請求ください。ご不明な点につきましては、取扱代理店または引受保険会社にお問い合わせください。</p>
				<p style="text-align:right;"><span>2016年7月 B16-101544</span></p>
			</small>

			<nav class="u-pager">
				<ul class="u-pager__row">
					<li class="u-pager__item"><a href="insurance.php">1</a></li>
					<li class="u-pager__item active"><a href="insurance2.php">2</a></li>
				</ul>
			</nav>

		</section>

	</article>
</main>

<?php
$toindex_url = "/magazine/index_technology.php";
include ($inc_path."/lib/inc/toindex__magazin.php");
?>
<?php /* include ($inc_path."/lib/inc/pagetop.php"); */ ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
