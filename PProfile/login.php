<?php
session_start();
if ($_SESSION["pusername"]) {
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
  <title>Placement - Home</title>
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
            $Welcome = "How are You?";
            echo "<h1>" . $Welcome . "<br>" . $_SESSION['pusername'] . "</h1>";
            ?>
          </header>
          </header>
          <li><a href="login.php" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
          <li><a href="PlacementDrives.php"><i class="fa fa-home fa-fw"></i>Placement Drives</a></li>
          <li><a href="manage-users.php"><i class="fa fa-users fa-fw"></i>View Students</a></li>
          <li><a href="queries.php"><i class="fa fa-question-circle fa-fw"></i>Queries</a></li>
          <li><a href="StudentsEligibility.php"><i class="fa fa-sliders fa-fw"></i>Students Eligibility Status</a></li>
          <li><a href="preferences.php"><i class="fa fa-sliders fa-fw"></i>Your Profile</a></li>
          <li><a href="Notif.php"><i class="fa fa-bullhorn fa-fw"></i>Notifications</a></li>
          <li><a href="ChangePassword.php"><i class="fa fa-key fa-fw"></i>Change Password</a></li>
          <li><a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
        </ul>
      </nav>
    </div>
    <!-- Main content -->
    <div class="templatemo-content col-1 light-gray-bg">
      <div class="templatemo-content-container">
        <div class="templatemo-flex-row flex-content-row">
          <div class="templatemo-content-widget white-bg col-2">
            <div class="square"></div>
            <h2 class="templatemo-inline-block">Welcome to IIIT Nagpur</h2>
            <p></p>
            <p>Hello Officer! Have a great day with us! With this Account, You can add drives, Send Notifications and View the Eligibility Criteria of Students.</p>
            <p>Hope you enjoy doing that. Greetings!!</p>
            <p><a href="preferences.php">Update your Profile</a></p>

          </div>
          <div class="templatemo-content-widget white-bg col-1 text-center">
            <h2 class="text-uppercase">Our Motto</h2>
            <h5 class="text-uppercase margin-bottom-10">Working with Confidence</h5>
            <img src="images/bicycle.jpg" alt="Bicycle" class="img-circle img-thumbnail">
          </div>
          <div class="templatemo-content-widget white-bg col-1">
            <h2 class="text-uppercase">Dictum</h2>
            <h3 class="text-uppercase">Sedvel Erat Non</h3>
            <hr>
            <div class="progress">
              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
            </div>
          </div>
        </div>
        <div class="templatemo-flex-row flex-content-row">
          <div class="col-1">
            <div class="templatemo-content-widget orange-bg">

              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object img-circle" src="images/sunset.jpg" alt="Sunset">
                  </a>
                </div>
                <div class="media-body">
                  <h2 class="media-heading text-uppercase">Updates</h2>
                  <p>View the New updates and Update the things Required to Keep Moving</p>
                </div>
              </div>
            </div>
            <div class="templatemo-content-widget white-bg">
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object img-circle" src="images/sunset.jpg" alt="Sunset">
                  </a>
                </div>
                <div class="media-body">
                  <h2 class="media-heading text-uppercase">Drive Results</h2>
                  <p>Latest Drive Result Overview</p>
                  <?php
                  $connect = mysqli_connect('localhost', 'root', '', 'details');
                  // mysql_select_db('details');
                  $RESULT = $connect->query("SELECT DISTINCT count(CompanyName) from addpdrive where PVenue LIKE '%IIITN%' AND YEAR(Date)=YEAR(NOW())");
                  $data = $RESULT->fetch_assoc();
                  echo "<br><br><h3>Companies In Our Campus In This Year&nbsp:&nbsp";
                  echo $data['count(CompanyName)'];
                  $RESULT = $connect->query("SELECT count(Attendence) from updatedrive where Attendence=1 AND YEAR(Date)=YEAR(NOW())");
                  $data = $RESULT->fetch_assoc();
                  echo "<br><BR>Number of Students Attended In This Year&nbsp:&nbsp";
                  echo $data['count(Attendence)'];
                  $RESULT = $connect->query("SELECT count(Placed) from updatedrive where Placed=1 AND YEAR(Date)=YEAR(NOW())");
                  $data = $RESULT->fetch_assoc();
                  echo "<BR><br>Number of Students Placed In This Year&nbsp:&nbsp";
                  echo $data['count(Placed)'];
                  echo "</h3>";
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-1">
            <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">

              <div class="panel-heading templatemo-position-relative">
                <h2 class="text-uppercase">Top Placed Students</h2>
              </div>
              <div class="templatemo-content-container">
                <div class="templatemo-content-widget no-padding">
                  <div class="panel panel-default table-responsive">
                    <table class="table table-striped table-bordered templatemo-user-table">
                      <thead>
                        <tr>
                          <td><a class="white-text templatemo-sort-by">Name</a></td>
                          <td><a class="white-text templatemo-sort-by">Branch</a></td>
                          <td><a class="white-text templatemo-sort-by">Batch</a></td>
                          <td><a class="white-text templatemo-sort-by">Company</a></td>
                          <td><a class="white-text templatemo-sort-by">CTC</a> </td>
                      </thead>
                      </tr>
                      <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                          <?php
                          $connect = mysqli_connect('localhost', 'root', '', 'placement');
                          //select rows of students with top 5 salaries
                          $sql = $connect->query("SELECT * FROM presult ORDER BY cast(lpa as int) DESC LIMIT 5");
                          while ($row = $sql->fetch_assoc()) {
                            print "<tr>";
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . $row['branch'] . '</td>';
                            echo '<td>' . $row['year'] . '</td>';
                            echo '<td>' . $row['company'] . '</td>';
                            echo '<td>' . $row['lpa'] . '</td>';
                            print "</tr>";
                          }
                          ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div> <!-- Second row ends -->
            </div>
          </div>
        </div>

        <!-- JS -->
        <script src="js/jquery-1.11.2.min.js"></script> <!-- jQuery -->
        <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
        <script type="text/javascript" src="js/templatemo-script.js"></script> <!-- Templatemo Script -->

</body>

</html>