<!DOCTYPE html>
<html lang="en">

<?php
// ページタイトル、パンくずリスト用の変数
$main_pagettl = "Participation";
$sub_pagettl = "Individual Research Presentation";
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
						<ul>
							<li>
								For individual research presentations, the Preparation Committee will consider the content of the submitted abstracts and allocate them according to the theme. Each presentation will be limited to 30 minutes (20 minutes for presentation and 10 minutes for Q&A).
							</li>
							<li>
								All expenses (transportation, accommodation, registration fees, etc.) for participation in the conference are to be covered by the presenter, and the presenter is responsible for the preparation of all the presentation materials.
							</li>
						</ul>
					</section>

					<section>
						<h3>About the theme</h3>
						<div class="theme">
							<ul>
								<li><span><i class="fa-solid fa-check"></i>Historical Perception Issues in East Asia</span></li>
								<li><span><i class="fa-solid fa-check"></i>Domination of Imperial Japan and Transformation of Colonial Societies</span></li>
								<li><span><i class="fa-solid fa-check"></i>Ideological Exchange in East Asia</span></li>
								<li><span><i class="fa-solid fa-check"></i>Religions and Religious Interaction in East Asia</span></li>
								<li><span><i class="fa-solid fa-check"></i>Politics and International Relations in East Asia</span></li>
								<li><span><i class="fa-solid fa-check"></i>Migration and Transformation of People and Commodities in East Asia</span></li>
								<li><span><i class="fa-solid fa-check"></i>Economy, Capital, and State in East Asia</span></li>
								<li><span><i class="fa-solid fa-check"></i>Japanese Literature in "World Literature"</span></li>
								<li><span><i class="fa-solid fa-check"></i>Issues of Aging and Welfare in East Asia</span></li>
								<li><span><i class="fa-solid fa-check"></i>Issues in Japanese Language Studies in East Asia</span></li>
								<li><span><i class="fa-solid fa-check"></i>AI and Japanese Language Education</span></li>
								<li><span><i class="fa-solid fa-check"></i>Society and Gender in East Asia</span></li>
								<li><span><i class="fa-solid fa-check"></i>Social Movements in East Asia</span></li>
								<li><span><i class="fa-solid fa-check"></i>Japanese Studies and Cultural Representation</span></li>
							</ul>
						</div>

						<p class="ind2en">
							Note: The above themes are examples only and do not exclude other themes. Participants are requested to submit an abstract (approximately 1,200 words) of their presentation for the entire panel, with sub-themes based on the above themes.
						</p>
					</section>

					<section>
						<h3>Language</h3>
						<p>
							In principle, the language shall be Japanese. If you wish to present your presentation in non-Japanese, please provide a Japanese translation of your resume or PowerPoint presentation for the sake of communication.
						</p>
					</section>



					<section>
						<h3>Application Deadlines</h3>
						<p>
							Tuesday, May 23 - Wednesday, July 19
							<br class="sp_br">
							(must arrive no later than <b>Wednesday, July 19</b>)
						</p>
					</section>

					<section>
						<h3>Registration Fee</h3>
						<p>
							8,000 JPY
						</p>
					</section>

					<section>
						<a class="btn" href="r_abstract.php">Sign up for a<br class="sp_br"> Individual Research Presentation</a>
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