<?php $db = new DB(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Alfa-Travel Home-Pagina</title>
    <!-- browser tab icon -->
   	<link rel="apple-touch-icon" sizes="120x120" href="icon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
	<link rel="manifest" href="icon/site.webmanifest">
	<link rel="mask-icon" href="icon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>	
	<header>
		<div class="rotate-head"></div>
		<div class="normal-head"></div>
		<div class="container">
			<div class="navbalk">
				<a href="?"><img class="logo" src="images/logoslogan.jpg"></a>
				<div class="mobile-menu">
					<div class="hamburger-btn"></div>
				</div>
				<nav>
					<ul class="main-menu">
					<?php
						$read = $db->Read('website_header', 'page', 'id != "1"');
						foreach($read as $item)
						{
							echo '<li><a href="?page='. strtolower($item['page']) .'">' . $item['page'] . '</a></li>';
						}
						?>
<!-- 						<div class="search">
							<input type="text" placeholder="Zoeken">
						</div> -->
					</ul>
				</nav>
			</div>
		</div>
	</header>