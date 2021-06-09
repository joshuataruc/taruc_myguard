<?php include 'dbase.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Myguard Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <div class="header-menu">
          <div class="title">My<span>Guard</span> Portal</div>
          <!--<div class="sidebar-btn">
            <i class="fas fa-bars"></i>
          </div> -->
          <div class="title"><?php echo $_SESSION['rc_name'] ?></div>
          <ul>
            <li><a href="logout.php"><i class="fas fa-user"></i><span>Logout </span></a></li>
          </ul>
        </div>
      </div>
      <div class="sidebar">
        <div class="sidebar-menu">
          <center class="profile">
            <!-- logo here -->
        </center>
        <li class="item">
          <a href="dashboard.php" class="menu-btn">
          <i class="fas fa-desktop"></i><span>Dashboard </span>
          </a>
        </li>
        <li class="item" id="profile">
          <a href="requests.php" class="menu-btn">
            <i class="fas fa-tasks"></i><span>Requests <!--<i class="fas fa-chevron-down drop-down"></i>--></span>
          </a>
          <!--<div class="sub-menu">
            <a href="#"><i class="fas fa-spinner"></i><span>On-Going </span></a>
            <a href="#"><i class="fas fa-check"></i><span>Completed </span></a>
          </div>-->
        </li>
        <li class="item">
          <a href="complains.php" class="menu-btn">
          <i class="fas fa-exclamation"></i><span>Complains </span>
          </a>
        </li>
        <li class="item">
          <a href="faci_booking.php" class="menu-btn">
          <i class="fas fa-bookmark"></i><span>Facility Booking </span>
          </a>
        </li>
        <li class="item">
          <a href="notification.php" class="menu-btn">
          <i class="fas fa-bell"></i><span>Notification </span>
          </a>
        </li>
        <hr>


        <li class="item">
          <a href="management.php" class="menu-btn">
          <i class="fas fa-users-cog"></i><span>Management </span>
          </a>
        </li>
        <li class="item">
          <a href="committee.php" class="menu-btn">
          <i class="fas fa-users"></i><span>Committee </span>
          </a>
        </li>
        <li class="item" id="residents">
          <a href="residents.php" class="menu-btn">
            <i class="fas fa-portrait"></i><span>Residents <!--<i class="fas fa-chevron-down drop-down"></i>--></span>
          </a>
          <!--<div class="sub-menu">
            <a href="#"><i class="fas fa-users"></i><span>Committee </span></a>
          </div>-->
        </li>
        <li class="item active">
          <a href="house.php" class="menu-btn">
          <i class="fas fa-home"></i><span>House </span>
          </a>
        </li>
        <li class="item">
          <a href="facility.php" class="menu-btn">
          <i class="fas fa-building"></i><span>Facility </span>
          </a>
        </li>
        <hr>
        <li class="item">
          <a href="visitor.php" class="menu-btn">
          <i class="fas fa-user-friends"></i><span>Visitor </span>
          </a>
        </li>
        <li class="item">
          <a href="blacklist.php" class="menu-btn">
          <i class="fas fa-user-slash"></i><span>Blacklisted </span>
          </a>
        </li>
        </div>
      </div>
      <div class="main-container">
        <div class="house-table">
          <?php include 'views/view_house.php'; ?>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".sidebar-btn").onClick(function(){
          $(".wrapper").toogleClass(".collapse");
        });
      });
    </script>
  </body>
</html>
