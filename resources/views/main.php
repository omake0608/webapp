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
								<?php $user = \Auth::user();
								if ($user) { ?>
								<li><a href="/home">ようこそ<?php echo "$user->name"; ?>さん</a></li>
								<?php } ?>
								<?php if ($user) {
									echo '<li><a href="/logout">Logout</a></li>';
								} else {
								echo '<li><a href="/register">Legister</a></li>';
								echo '<li><a href="/login">Login</a></li>';
								} ?>
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

                <?php /*
                <?php foreach($menues as $menu): ?>
                    <div>
                        <?= $menu->name ?>
                        <?= $menu->price ?> 円
                        <a href="/detail/<?= $menu->id ?>"> 詳細 </a>
                    </div>
                <?php endforeach; ?>
                */ ?>

					<div id="extra">
						<div class="container">
							<div class="row no-collapse-1">
								<section class="4u"> <a href="#" class="image featured"><img src="images/susi.jpg" alt=""></a>
									<div class="box">
										<h2><?= $menues[0]->name ?></h2>
                                        <br>
                                        <h3><?= $menues[0]->price ?> 円</h3>
                                        <a href="/detail/<?= $menues[0]->id ?>" class="button"> 詳細 </a>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/tendon.jpg" alt=""></a>
									<div class="box">
                                        <h2><?= $menues[1]->name ?></h2>
                                        <br>
                                        <h3><?= $menues[1]->price ?> 円</h3>
                                        <a href="/detail/<?= $menues[1]->id ?>" class="button"> 詳細 </a>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/paeri.jpg" alt=""></a>
									<div class="box">
                                        <h2><?= $menues[2]->name ?></h2>
                                        <br>
                                        <h3><?= $menues[2]->price ?> 円</h3>
                                        <a href="/detail/<?= $menues[2]->id ?>" class="button"> 詳細 </a>
								</section>
							</div>
							<div class="row no-collapse-1">
								<section class="4u"> <a href="#" class="image featured"><img src="images/omu.jpg" alt=""></a>
									<div class="box">
                                        <h2><?= $menues[3]->name ?></h2>
                                        <br>
                                        <h3><?= $menues[3]->price ?> 円</h3>
                                        <a href="/detail/<?= $menues[3]->id ?>" class="button"> 詳細 </a>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/mabo.jpg" alt=""></a>
									<div class="box">
                                        <h2><?= $menues[4]->name ?></h2>
                                        <br>
                                        <h3><?= $menues[4]->price ?> 円</h3>
                                        <a href="/detail/<?= $menues[4]->id ?>" class="button"> 詳細 </a>
								</section>
								<section class="4u"> <a href="#" class="image featured"><img src="images/suteki.jpg" alt=""></a>
									<div class="box">
                                        <h2><?= $menues[5]->name ?></h2>
                                        <br>
                                        <h3><?= $menues[5]->price ?> 円</h3>
                                        <a href="/detail/<?= $menues[5]->id ?>" class="button"> 詳細 </a>
								</section>
							</div>
						</div>
					</div>

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