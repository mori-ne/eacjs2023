<!DOCTYPE html>
<html lang="ja">

<?php
// ページタイトル、パンくずリスト用の変数
$main_pagettl = "参加について";
$sub_pagettl = "個人研究発表";
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
				<h2 class="sub_ttl"><?php print($main_pagettl); ?></h2>
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
								個人論文発表の場合、提出された発表要旨の内容を準備委員会が考慮し、テーマ別に配分します。一演題の持ち時間は1件につき30分（発表20分・質疑応答10分）とします。
							</li>
							<li>
								協議会に参加する際にかかる諸経費(交通費・宿泊費・参加費など) は自己負担とし、資料の作成も発表者がすべて責任をもって行うものとします。
							</li>
						</ul>
					</section>

					<section>
						<h3>テーマについて</h3>
						<div class="theme">

							<ul>
								<li><span><i class="fa-solid fa-check"></i>東アジアにおける歴史認識問題</span></li>
								<li><span><i class="fa-solid fa-check"></i>帝国日本の支配と植民地社会の変容</span></li>
								<li><span><i class="fa-solid fa-check"></i>東アジアにおける思想交流</span></li>
								<li><span><i class="fa-solid fa-check"></i>東アジアにおける諸宗教の交流</span></li>
								<li><span><i class="fa-solid fa-check"></i>東アジアにおける政治と国際関係</span></li>
								<li><span><i class="fa-solid fa-check"></i>東アジアにおける人・物の移動と変容</span></li>
								<li><span><i class="fa-solid fa-check"></i>東アジアにおける経済、資本と国家</span></li>
								<li><span><i class="fa-solid fa-check"></i>「世界文学」のなかの日本文学</span></li>
								<li><span><i class="fa-solid fa-check"></i>東アジアの高齢化問題・福祉問題</span></li>
								<li><span><i class="fa-solid fa-check"></i>東アジアにおける日本語研究の諸問題</span></li>
								<li><span><i class="fa-solid fa-check"></i>AIと日本語教育</span></li>
								<li><span><i class="fa-solid fa-check"></i>東アジアにおける社会とジェンダー</span></li>
								<li><span><i class="fa-solid fa-check"></i>東アジアにおける社会運動</span></li>
								<li><span><i class="fa-solid fa-check"></i>日本研究と文化表象</span></li>
							</ul>
						</div>

						<p class="ind2">
							注：上記のテーマはあくまで例示であり、これ以外のテーマを排除するものではありません。参加者は上記のテーマを参考に、サブテーマを設定の上、発表要旨（800字程度）をそれぞれ提出して下さい。
						</p>
					</section>

					<section>
						<h3>使用言語</h3>
						<p>
							言語は原則として日本語とします。もし日本語以外の言語で発表する場合、意思疎通のためレジュメやパワーポイントに日本語訳をつけるようにしてください。
						</p>
					</section>

					<section>
						<h3>申込方法</h3>
					</section>

					<section>
						<h3>申込期限</h3>
						<p>
							<span class="bf">5</span>
							<span class="tf">月</span>
							<span class="bf">10</span>
							<span class="tf">日～</span>
							<span class="bf">7</span>
							<span class="tf">月</span>
							<span class="bf">10</span>
							<span class="tf">日（必着）</span>
						</p>
					</section>

					<section>
						<h3>参加費</h3>
						<p>
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