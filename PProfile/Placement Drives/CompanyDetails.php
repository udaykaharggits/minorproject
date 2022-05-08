<?php
session_start();
if (isset($_SESSION['pusername'])) {
} else {
  header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--favicon-->
  <link rel="shortcut icon" href="../favicon.ico" type="image/icon">
  <link rel="icon" href="../favicon.ico" type="image/icon">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Company Details</title>
  <meta name="description" content="">
  <meta name="author" content="templatemo">
  <link type="text/css" rel="stylesheet" href="/TnP-Portal-IIITN/Homepage/css/Navbar.css">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
  <link href="../css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/templatemo-style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

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
          <li><a href="../login.php"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
          <li><a href="../PlacementDrives.php"><i class="fa fa-home fa-fw"></i>Placement Drives</a></li>
          <li><a href="../manage-users.php"><i class="fa fa-users fa-fw"></i>View Students</a></li>
          <li><a href="../queries.php"><i class="fa fa-question-circle fa-fw"></i>Queries</a></li>
          <li><a href="../StudentsEligibility.php"><i class="fa fa-sliders fa-fw"></i>Students Eligibility Status</a></li>
          <li><a href="../preferences.php"><i class="fa fa-sliders fa-fw"></i>Your Profile</a></li>
          <li><a href="../Notif.php"><i class="fa fa-bullhorn fa-fw"></i>Notifications</a></li>
          <li><a href="../ChangePassword.php"><i class="fa fa-key fa-fw"></i>Change Password</a></li>
          <li><a href="../logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
        </ul>
      </nav>
    </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <td><a  class="white-text templatemo-sort-by">Company Name </a></td>
                    <td><a  class="white-text templatemo-sort-by">Date </a></td>
                    <td><a  class="white-text templatemo-sort-by">C/P</a></td>
                    <td><a  class="white-text templatemo-sort-by">PVenue</a></td>
					   <td><a  class="white-text templatemo-sort-by">SSLC</a></td>
<td><a  class="white-text templatemo-sort-by">PU/Dip </a></td>
   <td><a  class="white-text templatemo-sort-by">BE</a></td>               
   <td><a  class="white-text templatemo-sort-by">Backlogs</a></td>
   <td><a  class="white-text templatemo-sort-by">History of Backlogs</a></td>
			      <td><a  class="white-text templatemo-sort-by">Deatin years</a></td>
			      <td><a class="white-text templatemo-sort-by">Others details </a></td>
				  </thead>
			   </tr>
			   <?php

          $num_rec_per_page = 15;
          $connect = mysqli_connect("localhost", "root", "", "details");

          if (isset($_GET["page"])) {
            $page  = $_GET["page"];
          } else {
            $page = 1;
          };
          $start_from = ($page - 1) * $num_rec_per_page;
          $sql = "SELECT * FROM addpdrive ORDER BY Date Desc LIMIT $start_from, $num_rec_per_page";
          $result = mysqli_query($connect, $sql); //run the query
          ?>
          <?php
          while ($row = mysqli_fetch_array($result)) {

            print "<tr>";

            print "<td>" . $row['CompanyName'] . "</td>";
            print "<td>" . $row['Date'] . "</td>";
            print "<td>" . $row['C/P'] . "</td>";
            print "<td>" . $row['PVenue'] . "</td>";
            print "<td>" . $row['SSLC'] . "</td>";
            print "<td>" . $row['PU/Dip'] . "</td>";
            print "<td>" . $row['BE'] . "</td>";
            print "<td>" . $row['Backlogs'] . "</td>";
            print "<td>" . $row['HofBacklogs'] . "</td>";
            print "<td>" . $row['DetainYears'] . "</td>";
            print "<td>" . $row['ODetails'] . "</td>";

            print "</tr>";
          }
          ?> 
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
  </body>
</html>