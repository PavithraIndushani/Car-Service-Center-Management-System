<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Book Now</title>
  <link rel="stylesheet" href="css/back.css">
</head>

<body>
  <div class="box">
   
    <!--navigation bar-->
    <div class="navigation">
         <div class="container">
            <div class="navbar">
               <div class="logo-toggle-container">
                  <a href="index.php"> <img src="img/Ppa.png" alt="logo"/> </a>
                  <span class="toggle-box">
                  <span></span>
                  <span></span>
                  <span></span>
                  </span>
               </div>
               <ul class="menu">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="service.html">Services</a></li>
                  <li><a href="package.html">Packages</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li class="last-link"><a href="book.html">Book Now</a></li>
               </ul>
            </div>
         </div>
      </div>

<h1 class="formheading"> <hr class="line"> Reservation to Our Service <hr class="line"> </h1>

<div class="formbox">
  <form action="submit.php" method="post">
    <div class="form-group">
      <label for="first-name">First Name:</label>
      <input type="text" id="firstname" name="firstname" required>
    </div>
    <div class="form-group">
      <label for="last-name">Last Name:</label>
      <input type="text" id="lastname" name="lastname" required>
    </div>
    <div class="form-group">
      <label for="nic">NIC:</label>
      <input type="text" id="nic" name="nic" required>
    </div>
    <div class="form-group">
      <label for="number">Contact Number:</label>
      <input type="text" id="contact" name="contact" required>
    </div>
    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="Email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <textarea id="address" name="address" required></textarea>
    </div>
    <div class="form-group">
      <label for="brand">Vehicle Brand:</label>
      <input list="browsers" name="browser">
      <datalist id="browsers">
        <option value="Edge">
        <option value="Firefox">
        <option value="Chrome">
        <option value="Opera">
        <option value="Safari">
    </datalist>
    </div>
    <div class="form-group">
      <label for="vehicle-type">Vehicle Model:</label>
      <input type="text" id="vehicle-model" name="model" required>
    </div>
    <div class="form-group">
      <label for="vehicle-License">Vehicle License Plate:</label>
      <input type="text" id="vehicle-License" name="license" required>
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required>
    </div>
    <div class="form-group">
      <label>Select Services:</label>

      <table border="0" cellspacing="15">
      <tr>
        <td>
            Wash & Grooming
        </td>
        <td>
            <input type="checkbox" id="battery-service" name="battery-service" value="battery-service">
        </td>
        <td>
            Battery Service
        </td>
        <td>
            <input type="checkbox" id="battery-service" name="battery-service" value="battery-service">
        </td>
        <td>
            Engine Tune-Ups
        </td>
        <td>
            <input type="checkbox" id="battery-service" name="battery-service" value="battery-service">
        </td>
        <td>
            Wheel Alignment
        </td>
        <td>
            <input type="checkbox" id="battery-service" name="battery-service" value="battery-service">
        </td>
        <td>
        Collision Repairs & Painting
        </td>
        <td>
            <input type="checkbox" id="battery-service" name="battery-service" value="battery-service">
        </td>
        <td>
        Spare parts Replacement
        </td>
        <td>
            <input type="checkbox" id="battery-service" name="battery-service" value="battery-service">
        </td>
      </tr>

      <tr>
        <td>
          Hybrid Services
        </td>
        <td>
            <input type="checkbox" id="battery-service" name="battery-service" value="battery-service">
        </td>
        <td>
        Tire Replacement
        </td>
        <td>
            <input type="checkbox" id="battery-service" name="battery-service" value="battery-service">
        </td>
        <td>
        Windscreen Treatment
        </td>
        <td> 
            <input type="checkbox" id="battery-service" name="battery-service" value="battery-service">
        </td>
        <td>
        Waxing
        </td>
        <td>
            <input type="checkbox" id="battery-service" name="battery-service" value="battery-service">
        </td>
        <td>
        Part Replacement
        </td>
        <td>
            <input type="checkbox" id="battery-service" name="battery-service" value="battery-service">
        </td>
        <td>
        Undercarrige Degreasing
        </td>
        <td>
            <input type="checkbox" id="battery-service" name="battery-service" value="battery-service">
        </td>
      </tr>

      </table>
    </div>

    <div class="form-group">
      <label for="time">Preferred Time:</label>
      <input type="time" id="time" name="time" required>
    </div>
    <center>
    <div class="form-group">
      <input type="submit" value="Submit">
    </div>
  </center>
  </form>

  </div>

  <!-- create footer -->
  <footer class="foot">
      <div class="footer-container">

         <div class="footer-content">
            <h3>Contact US</h3>
            <p>Email:info@example.com</p>
            <p>Phone:+94 34 568 3056</p>
            <p>Address:Address 123 street</p>
         </div>

         <div class="footer-content">
            <h3>Quick Links</h3>
            <ul class="list">
               <li> <a href="">Home</a> </li>
               <li> <a href="">About Us</a> </li>
               <li> <a href="">Services</a> </li>
               <li> <a href="">Packages</a> </li>
               <li> <a href="">Contact</a> </li>
               <li> <a href="">Book Now</a> </li>
            </ul>
         </div>

         <div class="footer-content">
            <h3>Follow Us</h3>
            <ul class="social-icons">
            <li> <a href=""> <i class="fab fa-facebook"></i> </a> </li>
            <li> <a href=""> <i class="fab fa-twitter"></i> </a> </li>
            <li> <a href=""> <i class="fab fa-instagram"></i> </a> </li>
            <li> <a href=""> <i class="fab fa-whatsapp"></i> </a> </li>
            </ul>
         </div>
      </div>

      <div class="bottom-bar">
         <p> &copy; 2023 Prime Pulse Auto. All rights reserved </p>
      </div>

   </footer>

</div>

<script type="text/javascript" src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/menu.js"></script>

</div>
</body>
</html>