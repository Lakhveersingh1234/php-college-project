<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lakhi";

$Conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['submit'])) {
  extract($_POST);
  // $dates = date("d-m-y H:i A");
  $data = "INSERT INTO resultupdate(name,email,crn,urn,departmentname,semester,eventname) value('$name','$email','$crn','$urn','$departmentname','$semester','$eventname')";
  $run = $Conn->query($data);
  if ($run) {
    echo "Data Enter Sucessfully";
  } else {
    echo "Data is not entered Try again!";
  }
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="Css/resultupdate.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Dancing+Script:wght@400..700&family=New+Amsterdam&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik+Burned&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<style>
    .forms {
      background-image: url('img/login.jpg'); /* Adjust this path to your image */
      background-size: 100% 100%;
      background-position: center;
      background-repeat: no-repeat;
      padding: 20px;
      padding-top: 5%;
      padding-bottom: 5%;
      max-width: 100%;
      color: white; /* Optional: to make text more readable */
    }

    .forms form {
      background-color: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(20px);
      padding: 20px;
      border-radius: 10px;
    }
</style>

<body>


  <!-- NAVBAR -->

  <nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
      <a class="navbar-brand fs-4" href="#">
        <img src="img/logo.jpeg" width="80" height="80" alt="">
        Computonics Club
      </a>
      <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header text-white border-bottom">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Computonics</h5>
          <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 ">
            <li class="nav-item mx-2">
              <a class="nav-link " aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About Us <i class="fa-solid fa-caret-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="about.html">Club Overview</a></li>
                <li><a class="dropdown-item" href="team.html">Meet The Team</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Event<i class="fa-solid fa-caret-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="event celender.html">Event Calender</a></li>
                <li><a class="dropdown-item" href="past event.html">Past Event</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Result<i class="fa-solid fa-caret-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="result.php">Result</a>
                </li>
                <li>
                  <a class="dropdown-item" href="resultupdate.php">Result Update</a>
                </li>
              </ul>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="gallery.html">Gallery</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Join Us<i class="fa-solid fa-caret-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="member benifit.html">Member Benifits</a></li>
              </ul>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="clear"></div>

  <!-- SECTON2 -->

  <section class="section2">
    <div class="backgroundimg">
      <h2>Update Result</h2>
    </div>
    <div class="clear"></div>
  </section>

  <!-- form -->
 

  <div class="forms">
    <form action="resultupdate.php" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Enter Student Name:*</label>
        <input type="text" class="form-control" id="text" placeholder="Name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Enter Email:*</label>
        <input type="email" class="form-control" id="text" placeholder="Email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Enter CRN:*</label>
        <input type="text" class="form-control" id="text" placeholder="CRN" name="crn" required>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Enter URN:</label>
        <input type="text" class="form-control" id="text" name="urn" placeholder="URN">
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Enter Department Name:*</label>
        <input type="text" class="form-control" id="text" name="departmentname" placeholder="Department Name" required>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Enter Semester:*</label>
        <input type="text" class="form-control" id="text" name="semester" placeholder="Semester" required>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Enter Event Name:*</label>
        <input type="text" name="eventname" class="form-control" id="text" placeholder="Event Name" required>
      </div>
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    
  </div>

  <!-- FOOTER -->
  <footer class="footers">
    <div class="footerow">
      <div class="footerrow1">
        <div class="footerborder">
          <img src="img/logo.jpeg" alt="">
        </div>
      </div>
      <div class="footerrow2">
        <div class="footerborder">
          <h5>USEFUL LINKS</h5>
          <div class="links">
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="">Notice</a>
            <a href="contactus.html">Contact Us</a>
          </div>
        </div>
      </div>
      <div class="footerrow3">
        <div class="footerborder">
          <div class="contact">
            <h5>CONTACT</h5>
            <i class="fa-solid fa-location-dot"></i>
            <p>First Floor, Block-3,
              Guru Nanak Dev Engineering College,
              Ludhiana-141006</p>
            <i class="fa-solid fa-envelope"></i>
            <p>gnecomputonicsteam@gmail.com</p>
            <i class="fa-solid fa-phone"></i>
            <p>0000000000</p>
          </div>
        </div>

      </div>
    </div>

    <div class="link">
      <div class="icon">
        <i class="fa-brands fa-instagram"></i>
      </div>
      <div class="icon">
        <i class="fa-brands fa-facebook"></i>
      </div>
      <div class="icon">
        <i class="fa-brands fa-linkedin"></i>
      </div>
    </div>
    <div class="copyright">
      <p>&copy;2024 Computonics Club. All rights Reserved.</p>
    </div>
    <div class="clear"></div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>