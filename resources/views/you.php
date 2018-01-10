<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Delivery Express</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

    <!-- Wrapper -->
			<div class="wrapper style1">

				<!-- Header -->
					<div id="header" class="skel-panels-fixed">
						<div id="logo">
							<h1><a>Delivery Express</a></h1>
							<span class="tag">by Fresh Food</span>
						</div>
						<nav id="nav">
							<ul>
								<li class="active"><a href="/">Home</a></li>
								<li><a href="/cart">Cart</a></li>
								<li><a href="#">Category</a>
									<ul>
									<div class="submenu" style="padding-left: 23px;">
									  <li><a href="/wa">和食料理</a></li>
									  <li><a href="/you">洋食料理</a></li>
									  <li><a href="/chu">中華料理</a></li>
									</div>
									</ul>
								  </li>
								
							</ul>
						</nav>
					</div>

				<!-- Banner -->
					<div id="banner" class="container">
                        <section>
                            <p>This site is a<strong>Delivery site.</strong>We will deliver within 1 hour from your order.
                        </section>
					</div>

				<!-- Extra -->
			

				<div id="extra">
		
				<div class="container">
				<?php foreach($menues as $menu): ?>
					<div class="row no-collapse-1" style="width: 300%;">
						<section class="4u"> <a href="#" class="image featured"><img src="/images/<?= $menu->image ?>" alt=""></a>
							<div class="box">
								<div>
									<font size="7"> <?= $menu->name ?> </font>
									<br>
									<font size="5"> <?= $menu->text ?> </font>
									<br>
									<font size="5">  <?= $menu->price ?> 円 </font>
									<br>
									<font size="5"> <?= $menu->calorie?> kcal </font>
									<br>
									<?php endforeach; ?>
				<!-- Main -->
					<div id="main">
						<div class="container">
							<div class="row">

                                <!-- Content -->

							</div>
						</div>
					</div>

	</div>

	<!-- Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<div class="copyright">
					<p>Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</p>
					<ul class="icons">
						<li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
					</ul>
				</div>
			</div>
		</div>

	</body>
</html>