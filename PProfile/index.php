<?php
include 'index1.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!--favicon-->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/icon">
	<link rel="icon" href="favicon.ico" type="image/icon">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Placement Login</title>
	<meta name="description" content="">
	<meta name="author" content="templatemo">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="/TnP-Portal-IIITN/Homepage/css/Navbar.css">
	<link href="css/templatemo-style.css" rel="stylesheet">
	<!-- Footer -->
	<link type="text/css" rel="stylesheet" href="/TnP-Portal-IIITN/Homepage/css/footer.css">
	<link type="text/css" rel="stylesheet" href="../../TnP-Portal-IIITN/Homepage/css/style.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
</head>

<body class="light-gray-bg">
	<div class="parent-container">
		<div class="navbar-container">
			<nav class="navbar">
				<div class="nav-logo">
					<div class="iiitn-logo">
						<a href="/TnP-Portal-IIITN/Homepage/">
							<img src="/TnP-Portal-IIITN/Homepage/images/newLogo.png" alt="iiitn-logo" />
						</a>
					</div>
					<div class="nav-title">
						<div class="logo-text">
							<h1>Indian Institute of Information Technology, Nagpur</h1>
						</div>
						<div class="tagline">
							<h2>
								An Institution of National Importance By An Act of Parliament
							</h2>
						</div>
					</div>

				</div>
			</nav>
		</div>

	</div>
	<hr class="nav-divider" />

	<div id="mainNav">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="bottom-nav">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a class="page-scroll" href="../SProfile/index.php">Student Login</a>
					</li>
					<li>
						<a class="page-scroll" href="../HODProfile/index.php">HOD Login</a>
					</li>
					<li>
						<a class="page-scroll" href="../PProfile/index.php">Placement Login</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</div>

	<div class="templatemo-content-widget templatemo-login-widget white-bg">
		<header class="text-center">
			<div class="square"></div>
			<h1>Placement Login</h1>
		</header>
		<form action="login1.php" class="templatemo-login-form" method="POST">
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
					<input type="text" class="form-control" placeholder="Email/Username" name="username">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
					<input type="password" class="form-control" placeholder="******" name="password">
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox squaredTwo">
					<input type="checkbox" id="c1" name="cc" />
					<label for="c1"><span></span>Remember me</label>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="templatemo-blue-button width-100">Login</button>
			</div>
		</form>
	</div>
	<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
		<p>Can't Access Account? <strong><a href="Forgot Password.php" class="blue-text">Reset Password</a></strong></p>
	</div>
	<!--Footer-->
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h6>Reach Us</h6>
					<p class="text-justify">
						Survey No. 140,141/1 <br>
						behind Br. Sheshrao Wankhade Shetkari Sahkari Soot Girni,<br>
						Village - Waranga, PO - Dongargaon(Butibori), Tahsil- Nagpur (Rural), <br>
						District Nagpur, Maharashtra- 441108 <br>
						Email: <a href="mailto:registrar@iiitn.ac.in">registrar@iiitn.ac.in</a><br>
						Phone: <a href="tel:+919405215010">+91-9405215010</a>
					</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1863.0290353762057!2d79.02581562066392!3d20.950182979007785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c0529518230f%3A0x45b76be0621cbb88!2sIIIT%20Nagpur!5e0!3m2!1sen!2sin!4v1650637248240!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="col-xs-6 col-md-3">
					<h6>Login</h6>
					<ul class="footer-links">
						<li><a href="/TnP-Portal-IIITN/SProfile/index.php">Student Login</a></li>
						<li><a href="/TnP-Portal-IIITN/HODProfile/index.php">HOD Login</a></li>
						<li><a href="/TnP-Portal-IIITN/PProfile/index.php">TnP Login</a></li>
					</ul>
				</div>
				<div class="col-xs-6 col-md-3">
					<h6>Quick Links</h6>
					<ul class="footer-links">
						<li><a href="#">Placement Statistics</a></li>
						<li><a href="#">Past Recruiters</a></li>
						<li><a href="https://iiitn.ac.in/">College Homepage</a></li>
					</ul>
				</div>
			</div>

			<hr>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-6 col-xs-12">
					<p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by
						<a href="https://iiitn.ac.in/">IIIT Nagpur</a>.
					</p>
				</div>
			</div>
		</div>
		</div>
	</footer>
</body>

</html>