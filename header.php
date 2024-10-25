<?php
$file = basename( $_SERVER['PHP_SELF'] );

require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
	<link rel="stylesheet/less" type="text/css" href="css/style.less">
	<link href="https://fonts.googleapis.com/css2?family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
</head>
<body>

<header class="header-wrapper">

	<nav class="nav-wrapper">
		<div class="container">
			<div class="nav-container">
				
				<div class="nav-branding">
					<h1><a href="#">Dekorasi</a></h1>
				</div>

				<div class="nav-menus">
					<ul>
						<li><a href="index.php">Beranda</a></li>
						<li><a href="single.php?type=single&page=about">Tentang Kami</a></li>
						<li><a href="#">Layanan</a></li>
						<li><a href="#">Kontak</a></li>
					</ul>
				</div>

				<div class="nav-cta">
					<a href="#">Hubungi Kami</a>
				</div>

			</div>
		</div>
	</nav>

</header>