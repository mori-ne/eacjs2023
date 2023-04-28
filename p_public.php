<!DOCTYPE html>
<html lang="ja">

<?php
// ページタイトル、パンくずリスト用の変数
$main_pagettl = "参加について";
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
				<h2 class="sub_mv_ttl">参加について</h2>
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
						<p>
							パネル・論文発表には参加せず、観覧のみのご参加をご希望の方を歓迎いたします。参加登録システムを下記に公開いたします。リンクにアクセスしてご記入ください。
						</p>
					</section>

					<section>
						<a class="btn btn-disable" href="#" target="_blank">参加登録</a>
					</section>

					<section>
						<h3>参加費</h3>
						<p>
							本大会の参加にあたり、参加費をお支払いお願いいたします。
						</p>
						<p class="ind1" style="margin-bottom: 0;">
							※参加費には、大会資料、バッグ、昼食代が含まれております。
						</p>
						<p class="ind1" style="margin-bottom: 0;">
							※懇親会に参加されたい方は、10月10日までにお申し込みください。なお、懇親会費は別途請求いたしますので、ご注意ください。
						</p>
						<p class="ind1" style="margin-bottom:0;">
							※当日会場でのお申込みは受付不可となります。ただし、事前「参観のみ」を申し込んだ方には当日会場でのお支払いは可能です（現金のみ）。
						</p>

						<!-- <p class="ind1" style="margin-bottom: 0;">
							※発表希望パネル・個人の応募につきまして、国際日本研究センター等の研究機関の研究者によって構成される審査委員会で採否を決定します。<br>
							採択者は、2023 年 8 月 10 日（木）に第7回東アジア日本研究者協議会国際学術会議のホームページにて告知します。
						</p>

						<p style="margin-bottom: 14px; margin-top:14px">
							＊参加申込締切：
							<span class="bf">2023</span>
							<span class="tf">年</span>
							<span class="bf">8</span>
							<span class="tf">月</span>
							<span class="bf">31</span>
							<span class="tf">日</span>
						</p> -->
						<!-- <p class="ind1">
							※ビザの手続きが必要な方については、参加申込締切日に関わらず、早めの申込みをお願いします。ビザ発行のための招待状はお送りさせていただきます。
						</p> -->

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