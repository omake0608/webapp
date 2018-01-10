<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Phase Shift by TEMPLATED</title>
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
								<li><a href="cart">Cart</a></li>
							</ul>
						</nav>
					</div>


				<!-- Extra -->
					<div id="extra">
						<div class="container">
							<div class="row no-collapse-1">
								<section class="4u" align="center"> <a href="#" class="image featured"></a>
									<div class="box">
                                        <h2> カートの中身 </h2>
                                        <?php foreach($cartMenues as $menu): ?>
                                            <div>
                                                <?= $menu->name ?>
                                                <?= $menu->price ?> 円
                                            
                                        <?php endforeach; ?>
										<?php $sum=0; ?>
										合計金額：<?php echo $sum = array_sum(array_column($cartMenues, 'price')); ?>円
										</div>
                                        <a href="/buy" class="button"> 購入 </a>
                                        <a href="/cartdelete" class="button"> 削除 </a>
										</from>
								</section>
							</div>
						</div>
					</div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>


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