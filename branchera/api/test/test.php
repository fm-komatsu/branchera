<?php
//base
include ("../../function.php");
$pageTtl = 'テスト';

//meta
$metaTtl = $pageTtl.'-'.siteName();
$metaDesc = siteDesc($pageTtl);
$metaThum = $img_url."/thum/home@2x.png";

//bodyClass
$body_class ="test";

//htmlHeader
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header-home.php");
$ssoFlag = 1;
?>
<main class="main">
	<article class="main__row">
		<?php
		include ($inc_path."/lib/inc/pan.php");
		include ($inc_path."/lib/inc/page/_enquete/enquete-header.php");
		?>
		<section class="main__item">
			<h3 class="u-ttl__l">ログイン情報受けわたしテスト</h3>
			<ul class="u-list__ul">
				<li>login flag: $ssoFlag === <?php echo $ssoFlag ;?></li>
				<li>data: flpApi.login</li>
			</ul>

			<div class="u-assist">
				<pre>login: {{ flpApi.login }}</pre>
			</div>

			<hr>
			<h3 class="u-ttl__l">BRC API 通信テスト</h3>
			<ul class="u-list__ul">
				<li>vue method: brcApiTest</li>
				<li>endPont: /api/test/</li>
				<li>data: brcApi.test</li>
			</ul>

			<a class="u-btn" @click="brcApiTest">BRC API Test Button</a>

			<div class="u-assist">
				<pre>{{ brcApi.test }}</pre>
			</div>

			<hr>

			<a class="u-btn" @click="brcApiPointGetActiveIds()">getactiveIds Test Button</a>
			<div class="u-assist">
				<pre>{{ brcApi.point.getActiveIds }}</pre>
			</div>
			<hr>

			<h3 class="u-ttl__l">ポイント付与済み確認テスト</h3>
			<ul class="u-list__ul">
				<li>vue method: brcApiPointGetStatus</li>
				<li>endPont: /api/point/getStatus/</li>
				<li>postData: 'mituketanonactive'</li>
				<li>data: brcApi.point.getStatus</li>
			</ul>

			<select v-model="selected">
				<option disabled value="">Please select one</option>
				<option>mituketanonactive</option>
				<option>mituketaactive</option>
				<option>mitkerarenai</option>
				<option>Mtest200913</option>
				<option>MPtest200913</option>
				<option>M#test200913</option>
				<option>M[]test200913</option>
				<option>M/test200913</option>
				<option>M.test200913</option>
			</select>
			<span>Selected: {{ selected }}</span>

			<a class="u-btn" @click="brcApiPointGetStatus(selected)">BRC API Test Button</a>
			<div class="u-assist">
				<pre>{{ brcApi.point.getStatus }}</pre>
			</div>

			<hr>

			<h3 class="u-ttl__l">ポイント付与確認テスト</h3>
			<ul class="u-list__ul">
				<li>vue method: brcApiPointGrant</li>
				<li>endPont: /api/point/grant/</li>
				<li>postData: "pageNumber-20200801"</li>
				<li>data: brcApi.point.grant</li>
			</ul>
			<select v-model="selected2">
				<option disabled value="">Please select one</option>
				<option>mituketanonactive</option>
				<option>mituketaactive</option>
				<option>mitkerarenai</option>
				<option>mituketatest01</option>
				<option>mituketatest02</option>
			</select>
			<span>Selected: {{ selected2 }}</span>
			<a class="u-btn" @click="brcApiPointGrant(selected2)">BRC API Test Button</a>

			<div class="u-assist">
				<pre>{{ brcApi.point.grant }}</pre>
			</div>

		</section>
	</article>
</main>

<footer class="footer">
	<div class="footer__row">

		<address class="footer__add f-add">
			<div class="f-add__copyright"><span>&copy;</span> HASEKO GROUP BRANCHERA CLUB. <br class="u-only__sp">All Rights Reserved.</div>
		</address>

	</div>
</footer>
<script>
var flpApiLogin = < ? php echo $ssoFlag; ? >
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
<script>
new Vue({
	el: '#all',
	data: {
		selected: '',
		selected2: '',
		flpApi: {
			login: false,
		},
		brcApi: {
			test: 'レスポンスが入ります',
			point: {
				getActiveIds: 'レスポンスが入ります',
				getStatus: 'レスポンスが入ります',
				grant: 'レスポンスが入ります'
			}
		},
	},
	methods: {
		getHost() {
			// ホスト名を取得
			const host = window.location.hostname
			console.log('hostName: ' + host)
			if (host === 'www.haseko.co.jp') {
				return 'https://www.haseko.co.jp/branchera'
			} else {
				return 'https://brc.aws-testserver.com/branchera'
			}
		},
		brcApiTest() {
			// axios test
			const hostUrl = this.getHost()
			const apiUrl = hostUrl + '/api/test/'
			console.log('hostUrl: ' + hostUrl)
			console.log('apiUrl: ' + apiUrl)
			axios.post(apiUrl).then((res) => {
				console.log(res);
				this.brcApi.test = res
			}).catch((err) => {
				console.log(err);
			})
		},
		brcApiPointGetActiveIds() {
			console.log('getActiveIds: ')
			const hostUrl = this.getHost()
			const apiUrl = hostUrl + '/api/point/getActiveIds/'
			axios.get(apiUrl).then((res) => {
				console.log(res);
				this.brcApi.point.getActiveIds = res
			}).catch((err) => {
				console.log(err);
			})
		},
		brcApiPointGetStatus(postData) {
			console.log('postData: ', postData)
			const hostUrl = this.getHost()
			const apiUrl = hostUrl + '/api/point/getStatus/'
			const params = new URLSearchParams();
			params.append('identification_id', postData);
			axios.post(apiUrl, params).then((res) => {
				console.log(res);
				this.brcApi.point.getStatus = res
			}).catch((err) => {
				console.log(err);
			})
		},
		brcApiPointGrant(postData) {
			console.log('postData: ', postData)
			const hostUrl = this.getHost()
			const apiUrl = hostUrl + '/api/point/grant/'
			const params = new URLSearchParams();
			params.append('identification_id', postData);
			axios.post(apiUrl, params).then((res) => {
				console.log(res);
				this.brcApi.point.grant = res
			}).catch((err) => {
				console.log(err);
			})
		},
		flpApiLogin(serverData) {
			if (flpApiLogin === 1) {
				this.flpApi.login = true
			}
		}
	},
	// ↓DOM取得完了後の動作
	mounted() {
		this.flpApiLogin(window.flpApiLogin)
	},
})
</script>
</body>

</html>
