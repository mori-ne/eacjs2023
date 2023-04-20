<!DOCTYPE html>
<html lang="ja">

<?php
// ページタイトル、パンくずリスト用の変数
$main_pagettl = "参加について";
$sub_pagettl = "次世代パネル発表";
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
								次世代研究者の育成を通して、東アジアでの日本研究の更なる発展と交流を期し、これまでの大会と同様、大学院博士後期課程院生や若手研究者の発表を積極的に支援します。<br>
								<span style="display:inline-block; text-indent:-1em; padding-left:1em;">
									＊<u>地域やテーマ等を配慮し、「次世代」枠の応募者から選考を経て採択された「次世代パネル発表者」には参加費の免除及び旅費の一部補助（定額）を提供します。</u>
								</span>
							</li>
							<li>
								各パネルは基本的に司会・発表者・討論者で構成し、合計4～7名とします。発表者に大学院博士後期課程院生が3名程度含まれることが望ましいです。
							</li>
							<li>
								パネルの持ち時間は1パネルにつき1時間30分とします。
							</li>
							<li>
								パネルは参加団体・機関が自由にパネルを構成するものです。会議資料の作成もパネルですべて責任を持って行うものとします。
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
						<h3>申込方法</h3>
						<p>
							＊指導教員の推薦状は不要
						</p>
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
							免除
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