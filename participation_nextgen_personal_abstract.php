<!DOCTYPE html>
<html lang="ja">

<?php
// ページタイトル、パンくずリスト用の変数
$main_pagettl = "参加について";
$sub_pagettl = "次世代個人研究発表";
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
				<h2 class="sub_ttl"><?php print($main_pagettl) ?></h2>
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
								次世代研究者の育成を通して、東アジアでの日本研究の更なる発展と交流を期し、これまでの大会と同様、大学院博士後期課程院生や若手研究者の発表を積極的に支援します。
							</li>
							<li>
								＊<u>地域やテーマ等を配慮し、「次世代」枠の応募者から選考を経て採択された「次世代個人研究発表者」には参加費の免除及び旅費の一部補助（定額）を提供します。</u>
							</li>
							<li>
								各発表者には20分の発表と10分の質疑応答（3分ほどのコメント時間が含まれます）、合計30分の発表時間があります。資料の作成も発表者がすべて責任をもって行うものとします。
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
							註：上記のテーマはあくまで例示であり、これ以外のテーマを排除するものではありません。参加者は上記のテーマを参考に、サブテーマを設定の上、パネル全体の発表要旨（800字程度）を提出して下さい。
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
						<p>
							＊推薦状不要
						</p>
					</section>

					<section>
						<h3>申込期限</h3>
						<p>
							5月10日～7月10日（必着）
						</p>
					</section>

					<section>
						<h3>参加費</h3>
						<p>
							免除
						</p>
					</section>
				</div>
			</div>
		</main>


		<!-- footer -->
		<?php require_once("common/footer.php"); ?>




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