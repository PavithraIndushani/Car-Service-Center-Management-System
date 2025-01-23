<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Automobile Service Center Dashboard</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="Ppa.png" alt="Service Center Logo">
        </a></li>
        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-user"></i>
          <span class="nav-item">Users</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-calendar-alt"></i>
          <span class="nav-item">Appointments</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-car"></i>
          <span class="nav-item">Car Parts</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Reports</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-wrench"></i>
          <span class="nav-item">Services</span>
        </a></li>
        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <!-- main section -->

    <section class="main">
      <div class="main-top">
        <h1>Service Center Overview</h1>
      </div>
      <div class="main-services">
        <div class="card">
          <i class="fas fa-user"></i>
          <h3>Total Users</h3>
          <p>Manage registed users</p>
          <button>Manage Users</button>
        </div>
        <div class="card">
          <i class="fas fa-calendar-alt"></i>
          <h3>Appointments</h3>
          <p>Manage your service appointments.</p>
          <button>View Appointments</button>
        </div>
        <div class="card">
          <i class="fas fa-car"></i>
          <h3>Vehicle Inventory</h3>
          <p>Manage the Inventory.</p>
          <button>View Vehicles</button>
        </div>
        <div class="card">
          <i class="fas fa-chart-bar"></i>
          <h3>Reports</h3>
          <p>Generate and analyze service reports.</p>
          <button>View Reports</button>
        </div>
      </div>

      <section class="main-appointments">
        <h1>Upcoming Appointments</h1>
        <div class="appointment-box">
          <ul>
            <li class="active">Today</li>
            <li>Tomorrow</li>
            <li>This Week</li>
            <li>Next Week</li>
          </ul>
          <div class="appointments">
            <div class="box">
              <h3>Thisara Perera's Car Service</h3>
              <p>Time: 10:00 AM</p>
              <button>Details</button>
              <i class="fas fa-calendar-alt"></i>
            </div>
            <div class="box">
              <h3>Pubudu Alwis's Oil Change</h3>
              <p>Time: 2:30 PM</p>
              <button>Details</button>
              <i class="fas fa-calendar-alt"></i>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>
</body>
</html>
