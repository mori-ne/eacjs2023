<!DOCTYPE html>
<html lang="en">

<?php
// ページタイトル、パンくずリスト用の変数
$main_pagettl = "Access";
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
			<div class="sub_mv3">
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
						<h3>Access</h3>
						<h4 style="margin: 45px 0; font-size:22px">Directions to TUFS</h4>
						<p>
							There are various ways to get to TUFS from the International and Domestic Airports as well as from other parts of Tokyo. The more convenient and lowest cost options use public transportation. Please refer to the Maps and Directions below.
						</p>
						<h5>Directions From Narita Airport</h5>
						<div style="margin-bottom: 60px;">
							<a class="btn-info" href="https://goo.gl/maps/yHmQ5" target="_blank">Check on Google Maps<sup style="top:0;"><i style="margin-left:5px;" class="fa-regular fa-window-restore"></i></sup></a>
							<div class="column">
								<div class="mw-900">
									<img src="img/direction_Narita.png" alt="成田国際空港から">
								</div>
								<div>
									<p>
										<b style="margin-bottom: 10px; display:inline-block;">Option 1: Train - Narita Express (NEX)</b><br>
										<span class="ind1"><b>Narita Airport</b> (Narita Express(NEX)) →</span><br>
										<span class="ind1"><b>JR Shinjuku Station</b> (JR Chuo Line heading towards Takao) →</span><br>
										<span class="ind1"><b>Musashi-sakai Station</b> (Seibu-Tamagawa Line) → <b>Tama Station</b></span>
									</p>
									<p>
										<b style="margin-bottom: 10px; display:inline-block;">Option 2: Train - Keisei Skyliner or Limited Express</b><br>
										<span class="ind1"><b>Narita Airport</b> (Keisei Skyliner) →</span><br>
										<span class="ind1"><b>JR Nippori Station</b> (JR Yamanote Line heading towards Shinjuku) →</span><br>
										<span class="ind1"><b>Musashi-sakai Station</b> (JR Chuo Line hedaing towards Takao) →</span><br>
										<span class="ind1"><b>Musashi-sakai Station</b> (Seibu-Tamagawa Line)→ <b>Tama Station</b></span>
									</p>
									<p>
										<b style="margin-bottom: 10px; display:inline-block;">Option 3: Bus - Airport Limousine</b><br>
										<span class="ind1"><b>Narita Airport</b> (Airport Limousine Bus) → </span><br>
										<span class="ind1"><b>Keio Chofu Station</b> ( #33 Keio Bus bound for Tama Station) →</span> <br>
										<span class="ind1"><b>Tokyo Gaikokugo Daigaku Mae</b> Bus Stop (or <b>Tama Eki Bus Stop</b> if you miss this earlier stop)</span>
									</p>
								</div>
							</div>
						</div>

						<hr>

						<h5>Directions From Haneda Airport</h5>
						<div style="margin-bottom: 60px;">
							<a class="btn-info" href="https://goo.gl/maps/STP1h" target="_blank">Check on Google Maps<sup style="top:0;"><i style="margin-left:5px;" class="fa-regular fa-window-restore"></i></sup></a>
							<div class="column">
								<div class="mw-900">
									<img src="img/direction_Haneda.png" alt="成田国際空港から">
								</div>
								<div>
									<p>
										<b style="margin-bottom: 10px; display:inline-block;">Option 1: Train - Tokyo Monorail</b><br>
										<span class="ind1"><b>Haneda Airport Terminal 1 or 2</b> (Tokyo Monorail) →</span><br>
										<span class="ind1"><b>JR Hamamatsucho Station</b> (JR Chuo Line heading towards Shinjuku) →</span><br>
										<span class="ind1"><b>JR Shinjuku Station</b> (JR Chuo Line heading towards Takao) →</span><br>
										<span class="ind1"><b>Musashi-sakai Station</b> (Seibu-Tamagawa Line)→ <b>Tama Station</b></span>
									</p>
									<p>
										<b style="margin-bottom: 10px; display:inline-block;">Option 2: Train - Keihin Kyuko (Keikyu) Line</b><br>
										<span class="ind1"><b>Haneda Airport Station</b> (Keihin Kyuko (also called Keikyu) Line) →</span><br>
										<span class="ind1"><b>JR Shingawa Station</b> (JR Yamanote Line heading towards Shinjuku) →</span><br>
										<span class="ind1"><b>JR Shinjuku Station</b> (JR Chuo Line heading towards Takao) →</span><br>
										<span class="ind1"><b>Musashi-sakai Station</b> (Seibu-Tamagawa Line)→ <b>Tama Station</b></span>
									</p>
									<p>
										<b style="margin-bottom: 10px; display:inline-block;">Option 3: Bus - Airport Limousine</b><br>
										<span class="ind1"><b>Haneda Airport</b> (Limousine Bus) → <b>Keio Chofu Station</b> ( #33 Keio Bus bound for Tama Station) →</span><br>
										<span class="ind1"><b>Tokyo Gaikokugo Daigaku Mae</b> Bus Stop (or <b>Tama Eki Bus Stop</b> if you miss this earlier stop)</span><br>
									</p>
								</div>
							</div>
						</div>

						<hr>

						<h5>Local Map of TUFS Campus Area</h5>
						<div style="margin-bottom: 60px;">
							<a class="btn-info" href="https://goo.gl/maps/0pr2q" target="_blank">Check on Google Maps<sup style="top:0;"><i style="margin-left:5px;" class="fa-regular fa-window-restore"></i></sup></a>
							<div class="column">
								<div class="mw-900">
									<img src="img/tama_map_en.gif" alt="Local Map of TUFS Campus Area">
								</div>
							</div>
						</div>

						<hr>

						<h5>Directions From Other Parts of Tokyo</h5>
						<div style="margin-bottom: 60px;">
							<div class="column">
								<div>
									<b style="margin-bottom: 10px; display:inline-block;">Option 1: Train - JR Chuo Line</b><br>
									<p>
										The JR Chuo Line can be caught at several major stations (Tokyo, Shinjuku, Hachioji, Tachikawa, etc.) and taken to Musashisakai Station. From there, you should transfer to the Seibu Tamagawa Line and take it two stops to Tama Station. After exiting the station, walk towards the left and take the underground stairwell to the other side of the station. Proceed to the main intersection ahead of you, and cross the street to the TUFS campus.
									</p>
									<b style="margin-bottom: 10px; display:inline-block;">Option 2: Train - Keio New Line</b><br>
									<p>
										The Keio New Line can be caught at several major stations (Shinjuku, Keio-Hachioji, etc.) and taken to either Chofu Station or Tobitakyu Station. From Chofu Station, head to the closest bus stop on the right of the North Entrance. Catch the #33 Keio Bus to Tama Station. Alternatively, from Tobitakyu you can catch the #2 or #33 Keio Bus to Tama Station. Get off at Tokyo Gaikokugo Daigaku Mae Bus Stop (you have to press the purple button near your seat on the bus after the stop is announced), or Tama Eki Bus Stop if you miss this earlier stop. At the main intersection, cross the street to the TUFS campus.
									</p>
									<b style="margin-bottom: 10px; display:inline-block;">Option 3: Bus</b><br>
									<p>
										Various buses go to Musashi-sakai, Chofu, and Tobitakyu Station, from which one can reach the TUFS Campus as described above. Also, there is bus service from JR Mitaka Station to Seibu Tama Station which is only few minutes walk from the TUFS Campus.
									</p>
								</div>
							</div>
						</div>

						<hr>

						<h5>Campus Map</h5>
						<div style="margin-bottom: 60px;">
							<div class="column">
								<div class="mw-600 sp-img-mw100">
									<img src="img/campusmap202202.jpg" alt="キャンパスマップ">
								</div>
								<div class="mw-600">
									<a style="display:block; text-align:center; text-decoration: none; margin: 10px 0 0 0" href="http://www.tufs.ac.jp/english/abouttufs/contactus/campusmap.html" target="_blank">
										Click here for details<sup style="top:0;"><i style="margin-left:5px;" class="fa-regular fa-window-restore"></i></sup></a>
								</div>
								<div>
									<p>
										<b>
											Address :
										</b>
										<br>
										<span class="ind1">3-11-1, Asahi-cho, Fuchu-shi, Tokyo 183-8534, Japan</span>
									</p>
								</div>
							</div>
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