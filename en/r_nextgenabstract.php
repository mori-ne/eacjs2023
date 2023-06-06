<!DOCTYPE html>
<html lang="en">

<?php
// ページタイトル、パンくずリスト用の変数
$main_pagettl = "The Application";
$sub_pagettl = "Next-Generation Research Presentation";
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
	<title><?php print($sub_pagettl . $separetor); ?>East Asian Consortium of Japanese Studies (EACJS) The 7th International Academic Conference</title>
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
			<div class="sub_mv2">
				<h2 class="sub_mv_ttl"><?php print($main_pagettl) ?></h2>
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



						<div class="news">
							<p class="ind1en" style="margin-bottom: 0;">
								*Regarding the applications of panels and individuals who wish to present their research, the screening committee consisting of researchers from the International Research Center for Japanese Studies of TUFS and other research institutions will decide on the acceptance or rejection of the applications.<br>
								Accepted applicants will be announced on the website of the seventh International Conference of EACJS on Thursday, August 10, 2023.<br>
								(Deadline for application for participation after acceptance: <b>August 31, 2023</b>)
							</p>
						</div>



						<!-- Jotform -->
						<div class="form_area">
							<script type="text/javascript" src="https://form.jotform.com/jsform/231200720070435"></script>
						</div>



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