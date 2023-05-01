<!DOCTYPE html>
<html lang="ja">

<?php
// ページタイトル、パンくずリスト用の変数
$main_pagettl = "アクセス情報";
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
						<h3>交通アクセス</h3>
						<h4 style="margin: 45px 0">府中キャンパス</h4>

						<h5>成田国際空港から</h5>
						<div style="margin-bottom: 60px;">
							<a class="btn-info" href="https://goo.gl/maps/uxQU2" target="_blank">Google マップで確認<sup style="top:0;"><i style="margin-left:5px;" class="fa-regular fa-window-restore"></i></sup></a>
							<div class="column">
								<div class="mw-900">
									<img src="img/direction_Narita.png" alt="成田国際空港から">
								</div>
								<div>
									<p>
										<b>◆成田エクスプレス（所要時間：約2時間）</b><br>
										【成田エクスプレス】で、JR「新宿」駅（約80分）→<br>
										【JR中央線】JR中央線「新宿」駅から、「JR武蔵境」駅（約36分）→<br>
										【西武多摩川線】西武多摩川線「武蔵境」駅から、「多磨」駅下車、徒歩約５分
									</p>
									<p>
										<b>◆京成スカイライナー（所要時間：約2時間）</b><br>
										【京成スカイライナー】で、「日暮里駅」（約36分）→<br>
										【JR山手線】JR山手線「日暮里」駅から「JR新宿」駅（約22分）→<br>
										【JR中央線】JR中央線「新宿」駅から、「JR武蔵境」駅（約36分）→<br>
										【西武多摩川線】西武多摩川線「武蔵境」駅から、「多磨」駅下車、徒歩約５分
									</p>
									<p>
										<b>◆リムジンバス（所要時間：約2時間）</b><br>
										リムジンバスで京王線「調布」駅（約120分）→<br>
										調布駅北口バスターミナル13番乗り場から、京王バス「調33　多磨駅行き」にて約20分<br>
										「東京外国語大学前」下車
									</p>
								</div>
							</div>
						</div>

						<hr>

						<h5>羽田空港から</h5>
						<div style="margin-bottom: 60px;">
							<a class="btn-info" href="https://goo.gl/maps/vHabY" target="_blank">Google マップで確認<sup style="top:0;"><i style="margin-left:5px;" class="fa-regular fa-window-restore"></i></sup></a>
							<div class="column">
								<div class="mw-900">
									<img src="img/direction_Haneda.png" alt="成田国際空港から">
								</div>
								<div>
									<p>
										<b>◆東京モノレール（所要時間：約1時間30分）</b><br>
										【東京モノレール】で、「浜松町」駅（約20分）→<br>
										【JR山手線】JR山手線「浜松町」駅から「JR新宿」駅（約25分）→<br>
										【JR中央線】JR中央線「新宿」駅から、「JR武蔵境」駅（約36分）→<br>
										【西武多摩川線】西武多摩川線「武蔵境」駅から、「多磨」駅下車、徒歩約5分
									</p>
									<p>
										<b>◆京急空港線（所要時間：約1時間30分）</b><br>
										【京急空港線】で、「品川」駅（約36分）→<br>
										【JR山手線】JR山手線「品川」駅から「JR新宿」駅（約20分）→<br>
										【JR中央線】JR中央線「新宿」駅から、「JR武蔵境」駅（約36分）→<br>
										【西武多摩川線】西武多摩川線「武蔵境」駅から、「多磨」駅下車、徒歩約5分
									</p>
									<p>
										<b>◆リムジンバス（所要時間：約1時間20分）</b><br>
										リムジンバスで京王線「調布」駅（約60分）→<br>
										調布駅北口バスターミナル13番乗り場から、京王バス「調33　多磨駅行き」にて約20分<br>
										「東京外国語大学前」下車
									</p>
								</div>
							</div>
						</div>

						<hr>

						<h5>最寄り駅から</h5>
						<div style="margin-bottom: 60px;">
							<a class="btn-info" href="https://goo.gl/maps/YfhTi" target="_blank">Google マップで確認<sup style="top:0;"><i style="margin-left:5px;" class="fa-regular fa-window-restore"></i></sup></a>
							<div class="column">
								<div class="mw-900">
									<img src="img/tama_map.gif" alt="成田国際空港から">
								</div>
								<div>
									<p>
										<b>◆JR中央線</b><br>
										「武蔵境」駅のりかえ<br>
										西武多摩川線「多磨」 駅下車　徒歩5分<br>
										（JR新宿駅から約40分）
									</p>
									<p>
										<b>◆京王電鉄</b><br>
										「飛田給」駅北口より多磨駅行き京王バスにて約10分<br>
										「東京外国語大学前」下車<br>
									</p>
								</div>
							</div>
						</div>

						<hr>

						<h5>キャンパスマップ</h5>
						<div style="margin-bottom: 60px;">
							<div class="column">
								<div class="mw-600 sp-img-mw100">
									<img src="img/campusmap202202.jpg" alt="キャンパスマップ">
								</div>
								<div class="mw-600">
									<a style="display:block; text-align:center; text-decoration: none; margin: 10px 0 0 0" href="http://www.tufs.ac.jp/abouttufs/contactus/campusmap.html" target="_blank">
										詳細はこちらをクリック<sup style="top:0;"><i style="margin-left:5px;" class="fa-regular fa-window-restore"></i></sup></a>
								</div>
								<div>
									<p>
										<b>
											所在地
										</b>
										<br>
										〒183-8534 東京都府中市朝日町3-11-1
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