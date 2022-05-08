<?php
session_start();
if (isset($_SESSION["pusername"])) {
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
  <title>Placement - Notifications</title>
  <meta name="description" content="">
  <meta name="author" content="templatemo">
  <link type="text/css" rel="stylesheet" href="/TnP-Portal-IIITN/Homepage/css/Navbar.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">

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
            echo "<h1>" . $Welcome . "<br>" . $_SESSION['pusername'] . "</h1>";
            echo "<br>";

            ?>
          </header>
          </header>
          <li><a href="login.php"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
          <li><a href="PlacementDrives.php"><i class="fa fa-home fa-fw"></i>Placement Drives</a></li>
          <li><a href="manage-users.php"><i class="fa fa-users fa-fw"></i>View Students</a></li>
          <li><a href="queries.php"><i class="fa fa-question-circle fa-fw"></i>Queries</a></li>
          <li><a href="StudentsEligibility.php"><i class="fa fa-sliders fa-fw"></i>Students Eligibility Status</a></li>
          <li><a href="preferences.php"><i class="fa fa-sliders fa-fw"></i>Your Profile</a></li>
          <li><a href="Notif.php" class="active"><i class="fa fa-bullhorn fa-fw"></i>Notifications</a></li>
          <li><a href="ChangePassword.php"><i class="fa fa-key fa-fw"></i>Change Password</a></li>
          <li><a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
        </ul>
      </nav>
    </div>
    <!-- Main content -->
    <div class="templatemo-content col-1 light-gray-bg">
      <div class="templatemo-content-container">
        <div class="templatemo-content-widget white-bg">
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">
              <div class="templatemo-content-widget Bluegrey-bg">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="images/sunset1.png" alt="Sunset" width="200px" height="200px">
                    </a>
                  </div>
                  <div class="media-body">
                    <a href="RNotif.php">
                      <h2 class="media-heading text-uppercase">Read Messages</h2>
                    </a>
                    <p>Messages from Placement Department and Principal</p>
                  </div>
                </div>
              </div>
              <div class="templatemo-content-widget Bluegrey1-bg">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="images/sunset2.jpg" alt="Sunset" width="175px" height="175px">
                    </a>
                  </div>
                  <div class="media-body">
                    <a href="WNotif.php">
                      <h2 class="media-heading text-uppercase">Post Notifications</h2>
                    </a>
                    <p>Send Messages to Students</p>
                  </div>
                </div>
              </div>
            </div>
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