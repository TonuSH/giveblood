<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give Blood - Register</title>

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google fonts link (Nunito) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..   1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <!-- Lato font family link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,  900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- bootstrap icon cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="./assets/vendors/css/bootstrap.min.css">
    <!-- reset css link -->
    <link rel="stylesheet" href="./assets/css/reset.css">
    <!-- register css link -->
    <link rel="stylesheet" href="./assets/css/register.css">
    <!-- main css link -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- responsive css link -->
    <link rel="stylesheet" href="./assets/css/responsive.css">
</head>
<body>

  <?php
include 'connection.php';
?>

    <!-- Header Start -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html">GiveBlood</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="blog.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Blog <i class="bi bi-caret-down-fill"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="blog.html">Blood Donation Tips</a></li>
                      <li><a class="dropdown-item" href="blog.html">Health & Wellness</a></li>
                      <li><a class="dropdown-item" href="blog.html">Community & Events</a></li>
                      <li><a class="dropdown-item" href="blog.html">Gallery</a></li>
                      <li><a class="dropdown-item" href="blog.html">Campaigns</a></li>
                      <li><a class="dropdown-item" href="blog.html">FAQs</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="volunteer.html">Be Volunteer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                  </li>
                </ul>
                <div class="button ms-auto">
                  <button><a class="nav-link" href="login.php">Login</a></button>
                  <button><a class="nav-link active" href="register.php">Register</a></button>
              </div>
              </div>
            </div>
          </nav>
    </header>
    <!-- Header End -->
    <div class="regi_container">
        <h2>Registration Form</h2>
        <form id="registrationForm" action="reg_submit.php" method="post">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="f_name" required>

            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="l_name" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            
            <label for="phone"> Phone Number: </label>
            <input type="text" id="phone" name="phone" required>

            <label for="password"> Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="group">Blood Group:</label>
            <select id="group" name="b_group">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O+">O-</option>
            </select>

            <label for="donate">Have You Donated Blood Before?</label>
            <select name="donated" id="donate">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            <input type="submit" value="Register">
            <span>Already Joined?</span> <a href="login.html">Log In</a>
        </form>
    </div>
        <!-- Footer Start -->
        <footer>
            <div class="container-fluid">
              <!-- Footer -->
              <footer
                      class="text-center text-lg-start text-dark"
                      style="background-color: #ECEFF1"
                      >
                <!-- Section: Social media -->
                <section
                         class="d-flex justify-content-between p-4 text-white"
                         style="background-color: #21D192"
                         >
                  <!-- Left -->
                  <div class="me-5">
                    <span>Get connected with us on social networks:</span>
                  </div>
                  <!-- Left -->
            
                  <!-- Right -->
                  <div>
                    <a href="https://www.facebook.com/" target="_blank" class="text-white me-4">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.twitter.com/" target="_blank" class="text-white me-4">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.google.com/" target="_blank"  class="text-white me-4">
                      <i class="fab fa-google"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank"  class="text-white me-4">
                      <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://bd.linkedin.com/" target="_blank"  class="text-white me-4">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </div>
                  <!-- Right -->
                </section>
                <!-- Section: Social media -->
            
                <!-- Section: Links  -->
                <section class="">
                  <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                      <!-- Grid column -->
                      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">GiveBlood</h6>
                        <hr
                            class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px"
                            />
                        <p>
                          Blood donation is essential for saving lives. It provides a critical lifeline for individuals undergoing surgeries, trauma victims, cancer patients, and those with chronic illnesses. Join us in the fight against blood shortage. Your donation can make a difference.
                        </p>
                      </div>
                      <!-- Grid column -->
                      <!-- Grid column -->
                      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr
                            class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px"
                            />
                        <p>
                          <a href="index.html" class="text-dark">Home</a>
                        </p>
                        <p>
                          <a href="about.html" class="text-dark">About Us</a>
                        </p>
                        <p>
                          <a href="donate_blood.html" class="text-dark">Donate Blood</a>
                        </p>
                        <p>
                          <a href="blog.html" class="text-dark">Blog</a>
                        </p>
                      </div>
                      <!-- Grid column -->
            
                      <!-- Grid column -->
                      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr
                            class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px"
                            />
                        <p><i class="fas fa-home mr-3"></i> Chattogram, Bangladesh</p>
                        <p><i class="fas fa-envelope mr-3"></i> giveblood@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 8801833368472</p>
                        <p><i class="fas fa-print mr-3"></i> + 8801567985643</p>
                      </div>
                      <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                  </div>
                </section>
                <!-- Section: Links  -->
            
                <!-- Copyright -->
                <div
                     class="text-center p-3"
                     style="background-color: rgba(0, 0, 0, 0.2)"
                     >
                  © 2024 Copyright:
                  <a class="text-dark" href="https://giveblood.com/"
                     >GiveBlood.com</a
                    >
                </div>
                <!-- Copyright -->
              </footer>
              <!-- Footer -->
            </div>
            <!-- End of .container -->
          </footer>
          <!-- Footer End -->
      
      
      
          <!-- jquery JS src -->
          <script src="./assets/vendors/js/jquery-3.7.1.min.js"></script>
          <!-- bootstrap JS src -->
          <script src="./assets/vendors/js/bootstrap.bundle.min.js"></script>
          <!-- Main Jquery JS src -->
          <script src="./assets/js/jquery.js"></script>
          <!-- main app.js src -->
          <script src="./assets/js/app.js"></script>
</body>
</html>
