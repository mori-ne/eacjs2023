<!DOCTYPE html>
<html lang="ja">

<?php
// ページタイトル、パンくずリスト用の変数
$main_pagettl = "お申込み";
$sub_pagettl = "一般参加（参観のみ）";
// title セパレータ
$separetor = " | ";
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php print($sub_pagettl . $separetor); ?>東アジア日本研究者協議会 第7回国際学術大会</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<script src="https://kit.fontawesome.com/ae63728a6d.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="js/common.js"></script>
	<script type="text/javascript">
		(function(c, l, a, r, i, t, y) {
			c[a] = c[a] || function() {
				(c[a].q = c[a].q || []).push(arguments)
			};
			t = l.createElement(r);
			t.async = 1;
			t.src = "https://www.clarity.ms/tag/" + i;
			y = l.getElementsByTagName(r)[0];
			y.parentNode.insertBefore(t, y);
		})(window, document, "clarity", "script", "gtfp0qy4ke");
	</script>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-8S4H16FQ0R"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-8S4H16FQ0R');
	</script>
</head>

<body>
	<div class="wrapper">



		<!-- header -->
		<?php require_once("common/header.php"); ?>



		<!-- global navigation -->
		<?php require_once("common/nav.php"); ?>



		<!-- main -->
		<main class="main">
			<div class="sub_mv">
				<h2 class="sub_mv_ttl"><?php print($main_pagettl); ?></h2>
			</div>



			<!-- パンくずリスト -->
			<div class="breadcrumb">
				<div class="inner">
					<span><a href="./"><i class="fa-solid fa-house"></i></a></span>
					<span class="arrow"></span>
					<span><?php print($main_pagettl); ?></span>
					<span class="arrow"></span>
					<span><?php print($sub_pagettl); ?></span>
				</div>
			</div>



			<!-- コンテンツの内容 -->
			<div class="contents">
				<div class="inner">

					<section>
						<h3><?php print($sub_pagettl); ?></h3>

						<!-- <div class="news">
							<p class="ind1" style="margin: 0 0 15px 0;">
								※発表希望パネル・個人の応募につきまして、国際日本研究センター等の研究機関の研究者によって構成される審査委員会で採否を決定します。<br>
								採択者は、2023年8月10日（木）に第7回東アジア日本研究者協議会国際学術会議のホームページにて告知します。
							</p>

							<p>
								<span>＊参加申込締切：</span>
								<span class="mf">2023年8月31日</span>
							</p>
						</div> -->



						<!-- Jotform -->
						<iframe id="JotFormIFrame-231201101974442" title="05 東アジア日本研究者協議会 第７回国際学術大会　参加登録【一般参加（参観のみ）】" onload="window.parent.scrollTo(0,0)" allowtransparency="true" allowfullscreen="true" allow="geolocation; microphone; camera" src="https://form.jotform.com/231201101974442" frameborder="0" style="min-width:100%;max-width:100%;height:539px;border:none;" scrolling="no">
						</iframe>
						<script type="text/javascript">
							var ifr = document.getElementById("JotFormIFrame-231201101974442");
							if (ifr) {
								var src = ifr.src;
								var iframeParams = [];
								if (window.location.href && window.location.href.indexOf("?") > -1) {
									iframeParams = iframeParams.concat(window.location.href.substr(window.location.href.indexOf("?") + 1).split('&'));
								}
								if (src && src.indexOf("?") > -1) {
									iframeParams = iframeParams.concat(src.substr(src.indexOf("?") + 1).split("&"));
									src = src.substr(0, src.indexOf("?"))
								}
								iframeParams.push("isIframeEmbed=1");
								ifr.src = src + "?" + iframeParams.join('&');
							}
							window.handleIFrameMessage = function(e) {
								if (typeof e.data === 'object') {
									return;
								}
								var args = e.data.split(":");
								if (args.length > 2) {
									iframe = document.getElementById("JotFormIFrame-" + args[(args.length - 1)]);
								} else {
									iframe = document.getElementById("JotFormIFrame");
								}
								if (!iframe) {
									return;
								}
								switch (args[0]) {
									case "scrollIntoView":
										iframe.scrollIntoView();
										break;
									case "setHeight":
										iframe.style.height = args[1] + "px";
										if (!isNaN(args[1]) && parseInt(iframe.style.minHeight) > parseInt(args[1])) {
											iframe.style.minHeight = args[1] + "px";
										}
										break;
									case "collapseErrorPage":
										if (iframe.clientHeight > window.innerHeight) {
											iframe.style.height = window.innerHeight + "px";
										}
										break;
									case "reloadPage":
										window.location.reload();
										break;
									case "loadScript":
										if (!window.isPermitted(e.origin, ['jotform.com', 'jotform.pro'])) {
											break;
										}
										var src = args[1];
										if (args.length > 3) {
											src = args[1] + ':' + args[2];
										}
										var script = document.createElement('script');
										script.src = src;
										script.type = 'text/javascript';
										document.body.appendChild(script);
										break;
									case "exitFullscreen":
										if (window.document.exitFullscreen) window.document.exitFullscreen();
										else if (window.document.mozCancelFullScreen) window.document.mozCancelFullScreen();
										else if (window.document.mozCancelFullscreen) window.document.mozCancelFullScreen();
										else if (window.document.webkitExitFullscreen) window.document.webkitExitFullscreen();
										else if (window.document.msExitFullscreen) window.document.msExitFullscreen();
										break;
								}
								var isJotForm = (e.origin.indexOf("jotform") > -1) ? true : false;
								if (isJotForm && "contentWindow" in iframe && "postMessage" in iframe.contentWindow) {
									var urls = {
										"docurl": encodeURIComponent(document.URL),
										"referrer": encodeURIComponent(document.referrer)
									};
									iframe.contentWindow.postMessage(JSON.stringify({
										"type": "urls",
										"value": urls
									}), "*");
								}
							};
							window.isPermitted = function(originUrl, whitelisted_domains) {
								var url = document.createElement('a');
								url.href = originUrl;
								var hostname = url.hostname;
								var result = false;
								if (typeof hostname !== 'undefined') {
									whitelisted_domains.forEach(function(element) {
										if (hostname.slice((-1 * element.length - 1)) === '.'.concat(element) || hostname === element) {
											result = true;
										}
									});
									return result;
								}
							};
							if (window.addEventListener) {
								window.addEventListener("message", handleIFrameMessage, false);
							} else if (window.attachEvent) {
								window.attachEvent("onmessage", handleIFrameMessage);
							}
						</script>
					</section>


				</div>
			</div>
		</main>


		<!-- footer -->
		<?php require_once("common/footer.php"); ?>



		<!-- to top -->
		<div class="page-top" id="page-top">
			<span>TOPへ</span>
		</div>



		<script src="js/swiper.min.js"></script>
		<script type="text/javascript">
			const swiper = new Swiper(".swiper", {
				loop: true,
				speed: 1000,
				autoplay: {
					delay: 3000, // 途切れなくループ
				}
			});
		</script>
	</div>
</body>

</html>