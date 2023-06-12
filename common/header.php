<?php

// echo '〇URL' . PHP_EOL;
// var_dump((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
// echo PHP_EOL . "<br>";

// echo '〇SSL' . PHP_EOL;
// var_dump($_SERVER['HTTPS']);
// echo PHP_EOL . "<br>";

// echo '〇ホスト名' . PHP_EOL;
// var_dump($_SERVER['HTTP_HOST']);
// echo PHP_EOL . "<br>";

// echo '〇URI' . PHP_EOL;
// var_dump($_SERVER['REQUEST_URI']);
// echo PHP_EOL . "<br>";

// echo '〇スクリプト名' . PHP_EOL;
// var_dump($_SERVER['SCRIPT_NAME']);
// echo PHP_EOL . "<br>";

// echo '〇パラメータ' . PHP_EOL;
// var_dump($_GET);
// echo PHP_EOL;

?>

<header id="header" class="header">
	<div class="header_inner">



		<div class="logo">
			<a href="./">
				<h1>
					<img src="img/logo.svg" alt="東アジア日本研究者協議会 第7回国際学術大会">
				</h1>
			</a>
		</div>



		<div class="contact">
			<a class="disable" href="#"><i style="padding-right: 5px;" class="fa-regular fa-envelope"></i>お問い合わせ</a>
		</div>



		<!-- classに disable_english 付加で無効化 -->
		<a class="translate" href="en/index.php
		<?php
		// $scriptName = $_SERVER['REQUEST_URI'];;
		// $modifiedURL = str_replace("eacjs2023/", "eacjs2023/en/", $scriptName);
		// echo $modifiedURL;
		?>
		">
			<i class="fa-solid fa-globe"></i>
			<p>English</p>
		</a>



		<div class="sp_nav_btn">
			<input type="checkbox" id="menu-btn-check">
			<label for="menu-btn-check" class="menu-btn">
				<span></span>
			</label>
			<div class="menu-content-cover">
				<div class="menu-content">
					<div class="header_inner">
						<div class="logo">
							<a href="./">
								<h1>
									<img src="img/logo.svg" alt="東アジア日本研究者協議会 第7回国際学術大会">
								</h1>
							</a>
						</div>
					</div>
					<a class="translate_sp" href="en/index.php">
						<i class="fa-solid fa-globe"></i>
						<p>English</p>
					</a>
					<ul class="sp_nav_menu">
						<li>
							<a href="./about.php">概要</a>
						</li>
						<li>
							<a class="onclicksp">参加について<i class="fa-solid fa-chevron-down"></i></a>
							<ul class="sp_nav_submenu">
								<li>
									<a href="./p_panel.php">パネル発表</a>
									<a href="./p_abstract.php">個人研究発表</a>
									<a href="./p_nextgenpanel.php">次世代パネル発表</a>
									<a href="./p_nextgenabstract.php">次世代研究発表</a>
									<a href="./p_public.php">一般参加（参観のみ）</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="onclicksp2">お申込み<i class="fa-solid fa-chevron-down"></i></a>
							<ul class="sp_nav_submenu2">
								<li>
									<a href="./r_panel.php">パネル発表</a>
									<a href="./r_abstract.php">個人研究発表</a>
									<a href="./r_nextgenpanel.php">次世代パネル発表</a>
									<a href="./r_nextgenabstract.php">次世代研究発表</a>
									<a href="./r_public.php">一般参加（参観のみ）</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="disable" href="#">お支払い</a>
						</li>
						<li>
							<a href="./access.php">アクセス情報</a>
						</li>
						<!-- <li>
							<a href="#">よくあるご質問</a>
						</li> -->
					</ul>
					<div class="sp_nav_lower_menu">
						<ul>
							<li>
								<a class="disable" href="#"><i style="padding-right: 5px;" class="fa-regular fa-envelope"></i>お問い合わせ</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>



	</div>
</header>