<!DOCTYPE html>
<html lang="en">

<?php
// ページタイトル、パンくずリスト用の変数
$main_pagettl = "About Participation";
$sub_pagettl = "Panel Presentation";
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
						<p>
							各パネルは基本的に司会・発表者・討論者で構成し、合計4～7名とします。
						</p>
						<ul>
							<li>
								パネルの持ち時間は１パネルにつき1時間30分です。
							</li>
							<li>
								パネルは参加団体・機関が自由にパネルを構成するものです。パネルの運営、経費（交通費・宿泊費・参加費・謝礼など）は自己負担とし、会議資料の作成もパネルですべて責任を持って行うものとします。
							</li>
						</ul>
					</section>

					<section>
						<h3>テーマについて</h3>
						<div class="theme">
							<ul>
								<li>
									<span><i class="fa-solid fa-check"></i>東アジアにおける歴史認識問題</span>
								</li>
								<li>
									<span><i class="fa-solid fa-check"></i>帝国日本の支配と植民地社会の変容</span>
								</li>
								<li>
									<span><i class="fa-solid fa-check"></i>東アジアにおける思想交流</span>
								</li>
								<li>
									<span><i class="fa-solid fa-check"></i>東アジアにおける諸宗教の交流</span>
								</li>
								<li>
									<span><i class="fa-solid fa-check"></i>東アジアにおける政治と国際関係</span>
								</li>
								<li>
									<span><i class="fa-solid fa-check"></i>東アジアにおける人・物の移動と変容</span>
								</li>
								<li>
									<span><i class="fa-solid fa-check"></i>東アジアにおける経済、資本と国家</span>
								</li>
								<li>
									<span><i class="fa-solid fa-check"></i>「世界文学」のなかの日本文学</span>
								</li>
								<li>
									<span><i class="fa-solid fa-check"></i>東アジアの高齢化問題・福祉問題</span>
								</li>
								<li>
									<span><i class="fa-solid fa-check"></i>東アジアにおける日本語研究の諸問題</span>
								</li>
								<li>
									<span><i class="fa-solid fa-check"></i>AIと日本語教育</span>
								</li>
								<li>
									<span><i class="fa-solid fa-check"></i>東アジアにおける社会とジェンダー</span>
								</li>
								<li>
									<span><i class="fa-solid fa-check"></i>東アジアにおける社会運動</span>
								</li>
								<li>
									<span><i class="fa-solid fa-check"></i>日本研究と文化表象</span>
								</li>
							</ul>
						</div>
						<p class="ind2">
							注：上記のテーマはあくまで例示であり、これ以外のテーマを排除するものではありません。参加者は上記のテーマを参考に、サブテーマを設定の上、パネル全体の発表要旨（1,200字程度）を提出して下さい。
						</p>
					</section>

					<section>
						<h3>使用言語</h3>
						<p>
							言語は原則として日本語とします。もし日本語以外の言語で発表する場合、意思疎通のためレジュメやパワーポイントに日本語訳をつけるようにしてください。
						</p>
					</section>



					<section>
						<h3>申込期限</h3>
						<p>
							<span class="bf">5</span>
							<span class="tf">月</span>
							<span class="bf">23</span>
							<span class="tf">日（火）～</span>
							<span class="bf">7</span>
							<span class="tf">月</span>
							<span class="bf">19</span>
							<span class="tf">日（水、必着）</span>
						</p>
					</section>

					<section>
						<h3>参加費</h3>
						<p>
							8,000円
						</p>
					</section>

					<section>
						<a class="btn" href="r_panel.php">お申込みはこちら</a>
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