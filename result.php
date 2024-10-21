<?php
include("config/database.php");

$sql="select * from resultupdate";
$result=$Conn->query($sql);

// DELETE QUERY

// $sql="delete from resultupdate where urn=22910343";
// $result=$Conn->query($sql);

// if($result){
//     echo "data deleted";
// }
// else{
//     echo "data not deleted";
// }
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Dancing+Script:wght@400..700&family=New+Amsterdam&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik+Burned&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="CSS/result.css">
</head>
<style>
    .forms {
      background-image: url('img/result2.jpg'); /* Adjust this path to your image */
      background-size: 100% 100%;
      background-position: center;
      background-repeat: no-repeat;
      padding: 20px;
      padding-top: 5%;
      padding-bottom: 5%;
      max-width: 100%;
      color: white; /* Optional: to make text more readable */
    }
     .table {
      background-color: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(20px);
      padding: 20px;
      border-radius: 10px;
    }
</style>

<body>

    <!-- NAVBAR -->

    <nav class="navbar  navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand fs-4" href="#">
                <img src="img/logo.jpeg" width="80" height="80" alt="">
                Computonics Club
            </a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header text-white border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Computonics</h5>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
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


      <!-- SECTION2  -->

  <section class="section2">
    <div class="backgroundimg">
      <h2>Result</h2>
    </div>
    <div class="clear"></div>
  </section>

    <!-- TABLE -->
    <div class="forms">
    <div class="container table">
        <div class="table-responsive">
        <table class="table align-middle mb-0 ">
            <thead class="bg-light">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>CRN</th>
                    <th>URN</th>
                    <th>BCA/MCA</th>
                    <th>Semester</th>
                    <th>Event Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                if($result->num_rows>0){
                while($row=mysqli_fetch_assoc($result)){
                ?>

                <tr>
                    <td>
                        <?php  
                        echo $row['name']
                        ?>
                    </td>
                    <td>
                        <?php  
                        echo $row['email']
                        ?>
                    </td>
                    <td>
                        <?php  
                        echo $row['crn']
                        ?>
                    </td>
                    <td>
                        <?php  
                        echo $row['urn']
                        ?>
                    </td>
                    <td>
                        <?php  
                        echo $row['departmentname']
                        ?>
                    </td>
                    <td>
                        <?php  
                        echo $row['semester']
                        ?>
                    </td>
                    <td>
                        <?php  
                        echo $row['eventname']
                        ?>
                    </td>

                    <td>
                        <a href="#" class="button edit">Edit</a>
                        <a href="#" class="button delete ">Delete</a>
                    </td>
                </tr>

              <?php }
             } 
             else{
echo "<tr style=text-align:center color:#FA394A><td colspan='8'><h3 style= color:#FA394A>Result Update Soon!</h3></td></tr>";
              }
            
              
              
              
              ?>
            </tbody>
        </table>
    </div>
    <div class="Refresh">
        <a href="" class="button">Refresh</a>
    </div>
</div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>