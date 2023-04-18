<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>東アジア日本研究者協議会 第7回国際学術大会</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<script src="https://kit.fontawesome.com/ae63728a6d.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="js/common.js"></script>
</head>

<body>

	<?php
	// 
	// 
	// phpの相対パス、絶対パス扱いの検証用
	// 
	// 
	?>

	<p>__DIR__</p>
	<?php
	echo __DIR__;
	?>

	<p>__FILE__</p>
	<?php echo __FILE__;
	?>

	<p>$_SERVER["REQUEST_URI"]</p>
	<?php
	echo $_SERVER["REQUEST_URI"];
	?>

	<p>$_SERVER['HTTP_HOST'];</p>
	<?php
	echo $_SERVER["HTTP_HOST"];
	?>

	<a href="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/eacjs2023/">INDEX</a>
</body>

</html>