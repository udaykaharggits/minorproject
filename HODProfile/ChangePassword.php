<?php
session_start();
if ($_SESSION["husername"]) {
} else {
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--favicon-->
  <link rel="shortcut icon" href="favicon.ico" type="image/icon">
  <link rel="icon" href="favicon.ico" type="image/icon">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOD - Change Password</title>
  <meta name="description" content="">
  <meta name="author" content="templatemo">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="/TnP-Portal-IIITN/Homepage/css/Navbar.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <!-- Left column -->
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
  <!-- Left column -->
  <div class="templatemo-flex-row">
    <div class="templatemo-sidebar" style="background-color:#1f2124">
      <div class="mobile-menu-icon">
        <i class="fa fa-bars"></i>
      </div>
      <nav class="templatemo-left-nav">
        <ul>
          <header class="templatemo-site-header">
            <?php
            $Welcome = "Welcome";
            echo "<h1>" . $Welcome . "<br>" . $_SESSION['husername'] . "</h1>";
            echo "<h1>(</h1>";
            echo "<h1>" . $_SESSION['department'] . "</h1>";
            echo "<h1>)</h1>";
            ?>
          </header>
          <li><a href="login.php"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
          <li><a href="manage-student.php"><i class="fa fa-users fa-fw"></i>Manage Students</a></li>
          <li><a href="preferences.php"><i class="fa fa-sliders fa-fw"></i>Your Profile</a></li>
          <li><a href="#" class="active"><i class="fa fa-key fa-fw"></i>Change Password</a></li>
          <li><a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
        </ul>
      </nav>
    </div> 
    <!-- Main content -->
    <div class="templatemo-content col-1 light-gray-bg">
      <div class="templatemo-content-container">
        <div class="templatemo-content-widget white-bg">
          <h2 class="margin-bottom-10">Change Password</h2>
          <form action="cp.php" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
            <div class="row form-group">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputCurrentPassword">Current Password</label>
                  <input type="password" class="form-control highlight" id="inputCurrentPassword" placeholder="*******" name="curpassword">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputNewPassword">New Password</label>
                  <input type="password" class="form-control" id="inputNewPassword" name="Password">
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputConfirmNewPassword">Confirm New Password</label>
                  <input type="password" class="form-control" id="inputConfirmNewPassword" name="repassword">
                </div>

              </div>
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button">Update</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> <!-- jQuery -->
  <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script> <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
  <script type="text/javascript" src="js/templatemo-script.js"></script> <!-- Templatemo Script -->
</body>

</html>