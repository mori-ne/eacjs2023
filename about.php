<!DOCTYPE html>
<html lang="ja">

<?php
// ページタイトル、パンくずリスト用の変数
$main_pagettl = "概要";
// title セパレータ
$separetor = " | ";
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php print($main_pagettl . $separetor); ?>東アジア日本研究者協議会 第7回国際学術大会</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<script src="https://kit.fontawesome.com/ae63728a6d.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="js/common.js"></script>
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
						<h3>東アジア日本研究者協議会について</h3>
						<p>
							　本協議会は、東アジアを中心とした国々の研究者に、多様な分野において蓄積されてきた日本研究に関する成果を発表・議論する場を提供し、日本研究と日本研究者の国際的交流の発展に寄与することを目的としています。本協議会が誕生した背景には、東アジアにおける日本研究の蓄積に比べて研究者間の交流が少ないという事実があります。北米を中心としたAAS（アジア学会）、欧州を中心としたEAJS（欧州日本学会）に対し、東アジア地域にはたくさんの日本研究者が活動しているにもかかわらず、個人あるいはグループ単位での交流は行われていますが、東アジアの日本研究者が一堂に会して交流しあう場は設けられませんでした。
						</p>
						<p>
							　そのため、5名の発起人により東アジアの日本研究機関を中心とする「東アジア日本研究者協議会」（以下協議会）を発足させ、議論を重ねてきました。その趣旨は、第一に、日本研究の質的な向上を目指すこと。第二に、地域の境界に閉ざされた日本研究から脱し、より多様な観点と立場からの日本研究を志向すること。第三に、東アジアの安定と平和に寄与すること。東アジアの日本研究者が一堂に集まり真剣に議論しあい、 交流すること自体に意味があります。また、本協議会は、東アジア地域を網羅する学会の設立を目標としています。
						</p>
						<p>
							　上記の趣旨のもと、東アジアの日本研究機関が順次執行を担当することにより、年に1回の国際学術大会を開催することになっています。第1回は韓国のインチョン（2016年）、第2回は中国の天津（2017年）、第3回は日本の京都（2018年）、第4回は台湾の台北（2019年）で開催されました。2020年のCOVID-19のパンデミックによる延期を挟んで、2021年の第5回は韓国・ソウルで、昨年の第6回は中国の北京で開催されました。これまでいずれも300名にのぼる日本研究者が東アジア各国から集まりました。
						</p>
						<p>
							　第7回となる今回の大会は、日本・東京の東京外国語大学において開催いたします。第5回と第6回の大会はパンデミックにより、オンラインでの開催でしたが、今大会は対面の開催を予定しています。東アジアの日本研究者の皆様が東京に集まり、日本研究の新たな広がりと深化が実現されることを期待しています。 また、これまでの大会を踏襲して、次世代の日本研究者も積極的に支援したいと考えています。
						</p>
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