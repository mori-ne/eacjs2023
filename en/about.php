<!DOCTYPE html>
<html lang="en">

<?php
// ページタイトル、パンくずリスト用の変数
$main_pagettl = "Overview";
// title セパレータ
$separetor = " | ";
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="img/favicon.ico" rel="icon">
	<link href="img/favicon.ico" rel="apple-touch-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="The purpose of the conference is to provide a forum for scholars from East Asia and other countries to present and discuss the results of Japanese studies that have been accumulated in diverse fields, and to contribute to the development of Japanese studies and international exchange among scholars of Japan." />
	<meta content="East Asian Consortium of Japanese Studies" name="keywords">
	<title><?php print($main_pagettl . $separetor); ?>East Asian Consortium of Japanese Studies (EACJS) The 7th International Academic Conference</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<script src="https://kit.fontawesome.com/ae63728a6d.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="js/common.js"></script>
	<!-- Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-SF59TF0W0S"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-SF59TF0W0S');
	</script>
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
		})(window, document, "clarity", "script", "h87hiccfgu");
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
				</div>
			</div>



			<!-- コンテンツの内容 -->
			<div class="contents">
				<div class="inner">



					<section>
						<h3>About East Asian Consortium of Japanese Studies (EACJS)</h3>
						<p>
							The purpose of the EACJS is to contribute to the development of Japanese studies and international exchange among Japanese studies scholars by providing a forum for scholars in East Asia and other countries to present and discuss the results of Japanese studies accumulated in diverse fields. The background to the creation of the EACJS is that there has been little exchange among researchers in East Asia compared to the accumulation of Japanese studies in the region. In contrast to the AAS (Association for Asian Studies) and EAJS (European Association for Japanese Studies), mainly based in North America and Europe, many Japanese studies scholars are working in the East Asia region, there have been no opportunities for East Asian scholars to meet and interact with each other, either individually or on a group basis.
						</p>
						<p>
							Accordingly, a group of five founders established the "East Asian Consortium of Japanese Studies" (after this referred to as the "Consortium"), mainly consisting of East Asian institutions of Japanese studies, and have held a series of discussions on the subject. The consortium's purpose is, first, to improve the quality of Japanese studies. Secondly, to move away from studying Japan confined to regional boundaries and to studying Japan from a more diverse range of perspectives and positions. The third is to contribute to stability and peace in East Asia. The gathering of Japanese studies scholars in East Asia for earnest discussion and exchange is meaningful in and of itself. The Consortium also aims to establish an academic society covering the entire East Asia region.
						</p>
						<p>
							To the above objectives, we hold an annual international academic conference, with Japanese research institutes in East Asia taking charge of the execution. The first conference was held at Seoul National University (Incheon, 2016), the second at Nankai University (Tianjin, 2017), the third at the International Research Center for Japanese Studies (Kyoto, 2018), and the fourth at National Taiwan University (Taipei, 2019). After a postponement due to the COVID-19 pandemic in 2020, Korea University hosted the fifth conference in 2021, and Beijing Center for Japanese Studies at Beijing Foreign Studies University hosted the sixth conference last year, in total, more than 300 Japanese studies scholars from East Asian countries and regions have gathered at all these events.
						</p>
						<p>
							We will be holding the seventh conference at Tokyo University of Foreign Studies in Tokyo, Japan. While the fifth and sixth conferences had to be conducted online due to the pandemic, this year's conference is scheduled to be on-site. We hope this gathering of East Asian scholars of Japanese studies in Tokyo will bring new depth and broaden the scope of Japanese studies. We also hope to actively support the next generation of Japanese studies scholars in keeping with past conferences.
						</p>
					</section>



				</div>
			</div>
		</main>


		<!-- footer -->
		<?php require_once("common/footer.php"); ?>



		<!-- to top -->
		<div class="page-top" id="page-top">
			<span>Back to TOP</span>
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