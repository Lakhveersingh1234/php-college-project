<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lakhi";


$Conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['submit'])) {
  extract($_POST);
  $ins = "insert into data (name,email,number,textarea)values('$name','$email','$number','$text')";
  $result = $Conn->query($ins);
  if ($result) {
    echo "fd";
  } else {
    echo "gf";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="CSS/contactus.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Dancing+Script:wght@400..700&family=New+Amsterdam&family=Roboto+Slab:wght@100..900&family=Roboto:wght@100&family=Rubik+Burned&display=swap" rel="stylesheet">

</head>

<body>

  <section>
    <nav class="navbar  navbar-expand-lg navbar-dark ">
      <div class="container-fluid">
        <a class="navbar-brand fs-4" href="#">
          <img src="img/logo.jpeg" width="80" height="80" alt="">
          Computonics Club
        </a>
        <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- slidebar -->
        <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header text-white border-bottom">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Computonics</h5>
            <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 ">
              <li class="nav-item mx-2">
                <a class="nav-link" aria-current="page" href="index.html">Home</a>
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
              <li class="nav-item mx-2">
                <a class="nav-link active" href="result.html">Result</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="gallery.html">Gallery</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Join Us<i class="fa-solid fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Member Benifits</a></li>
                </ul>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link active" href="contactus.php">Contact Us</a>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="clear"></div>
  </section>


  <!-- SECTION2  -->

  <section class="section2">
    <div class="backgroundimg">
      <i class="fa-solid fa-phone"></i>
      <h2>Contact Us</h2>
    </div>
    <div class="clear"></div>
  </section>
  <!-- FORM -->

  <section class="section3">
    <div class="contactbox">
      <div class="box">
        <div class="box1">
          <div class="borders">
            <div class="formheading">
              <h1>Get In Touch</h1>
            </div>
            <div class="form">
              <form action="" method="post">
                <div class="input">
                  <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="input">
                  <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="input">
                  <input type="text" name="number" placeholder="Your Number" required>
                </div>
                <div class="input">
                  <textarea name="text" cols="30" rows="7" placeholder="Your comments......"></textarea>
                </div>
            </div>
            <div class="btns">
              <button name="submit">submit</button>
            </div>
            </form>
          </div>
        </div>
        <div class="box2">
          <div class="borders">
            <div class="heading">
              <h3>Contact Information</h3>
              <div class="info">
                <div class="icons">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <div class="content">
                  <span>Call Us:</span>
                  <p>00000000000</p>
                </div>
              </div>
              <div class="info">
                <div class="icons">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="content">
                  <span>Mail Us:</span>
                  <a href="mailto:gnecomputonicsteam@gmail.com">gnecomputonicsteam@gmail.com</a>
                </div>
              </div>
              <div class="info">
                <div class="icons">
                  <i class="fa-solid fa-calendar-days"></i>
                </div>
                <div class="content">
                  <span>Opening Hours:</span>
                  <p>Mon - Fri: 08.30am to 04.00pm</p>

                </div>
              </div>
              <div class="info">
                <div class="icons">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="content">
                  <span>Location:</span>
                  <p>First Floor, Block-3, Guru Nanak Dev Engineering College, Ludhiana-141006</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="clear"></div>

  </section>

  <!-- MAP -->
  <section class="section4">
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5300.334192133138!2d75.85525852769572!3d30.860051955272155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a828f09011b15%3A0xbf3f5b51dcc81b12!2sGuru%20Nanak%20Dev%20Engineering%20College!5e0!3m2!1sen!2sin!4v1723883329747!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="clear"></div>
  </section>


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