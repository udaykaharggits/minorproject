<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--favicon-->
  <link rel="shortcut icon" href="/TnP-Portal-IIITN/Homepage/images/newLogo.png" type="image/icon">
  <link rel="icon" href="/TnP-Portal-IIITN/Homepage/images/newLogo.png" type="image/icon">
  <title>IIITN Placement Portal</title>
  <!-- Footer -->
  <link type="text/css" rel="stylesheet" href="css/Navbar.css">
  <link type="text/css" rel="stylesheet" href="css/footer.css">
  <!-- Custom Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
  <!-- Plugin CSS -->
  <link rel="stylesheet" href="css/animate.min.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/creative.css" type="text/css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body id="page-top">
  <div class="parent-container">
    <div class="navbar-container">
      <nav class="navbar">
        <div class="nav-logo">
          <div class="iiitn-logo">
            <a href="/TnP-Portal-IIITN/Homepage/">
              <img src="/TnP-Portal-IIITN/Homepage/images/newLogo.png" alt="ggits-logo" />
            </a>
          </div>
          <div class="nav-title">
            <div class="logo-text">
              <h1>Gyan ganga institute of technology & sciences Jabalpur</h1>
            </div>
            <div class="tagline">
              <h2>
              
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
      <?php
      session_start();
      if (isset($_SESSION['husername']) || isset($_SESSION['username']) || isset($_SESSION['pusername']) || isset($_SESSION['priusername'])) {
        
      } else {
        echo '
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
        ';
      }
      ?>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <header>
    <div id="particles-js" class="header-content heading">
      <div class="header-content-inner">
        <script src="/TnP-Portal-IIITN/particles.js-master/particles.js"></script>
        <script src="/TnP-Portal-IIITN/particles.js-master/demo/js/app.js"></script>
        <h1 style="padding-top: 10%;">Placement Management System</h1>
        <hr>
        <a href="../Drives/index.php" class="btn btn-primary btn-xl page-scroll">Placement Statistics</a>
      </div>
    </div>
  </header>
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
            <li><a href="https://ggits.org/">College Homepage</a></li>
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