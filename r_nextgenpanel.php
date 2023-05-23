<!DOCTYPE html>
<html lang="ja">

<?php
// ページタイトル、パンくずリスト用の変数
$main_pagettl = "お申込み";
$sub_pagettl = "次世代パネル発表";
// title セパレータ
$separetor = " | ";
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="img/favicon.ico" rel="icon">
	<link href="img/favicon.ico" rel="apple-touch-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="本大会は、東アジアを中心とした国々の研究者に、多様な分野において蓄積されてきた日本研究に関する成果を発表・議論する場を提供し、日本研究と日本研究者の国際的交流の発展に寄与することを目的としています。" />
	<meta content="東アジア日本研究者協議会,第7回国際学術大会,East Asian Consortium of Japanese Studies" name="keywords">
	<title><?php print($sub_pagettl . $separetor); ?>東アジア日本研究者協議会 第7回国際学術大会</title>
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



						<div class="news">
							<p class="ind1-1" style="margin-bottom: 0;">
								※発表希望パネル・個人の応募につきまして、国際日本研究センター等の研究機関の研究者によって構成される審査委員会で採否を決定します。<br>
								採択者は、2023年8月10日（木）に第7回東アジア日本研究者協議会国際学術会議のホームページにて告知します。<br>（採択後参加申込締切： <span class="mf">2023年8月31日）</span>
							</p>
						</div>


						<!-- Jotform -->
						<div class="form_area">
							<script type="text/javascript" src="https://form.jotform.com/jsform/231200762310438"></script>
						</div>



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