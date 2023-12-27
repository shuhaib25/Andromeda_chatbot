<!DOCTYPE html>
<html lang="en">
<head>

     <title>Andromeda</title>
     <link rel="icon" type="image/png" href="images/title logo.png">

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <section class="navbar custom-navbar navbar-fixed-top " role="navigation">
          <div class="container">

               <div class="navbar-header nav">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    
                    <a href="index.html" class="navbar-brand nav "><img src="images/logo.png" alt="logo" height="45" width="180"></a>
               </div>
       
                      
                 
               
               <div class="collapse navbar-collapse navbar-right nav ">
                    
                    <ul class="nav navbar-nav navbar-nav-first ">
                        <li> <div class="search-container">
                              <form action="/action_page.php">
                                <input type="text" placeholder="Search.." name="search">&nbsp;&nbsp;
                                <button type="submit"><i class="fa fa-search"></i></button>
                              </form>
                            </div>
                         </li>
                         <li><a href="about2.html" class="smoothScroll">About</a></li>
                         <li class="dropdown"><a href="#"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
                              <ul>
                                <li><a href="Personality Development2.php">Personality Development</a></li>
                                <li><a href="linux2.php">Linux &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                <li><a href="health& fitness cources2.php">Health and Fitness&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                <li><a href="web developer2.php">Web Development&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                <li><a href="career development2.php">Career Development&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                              </ul>
                            </li>
                         <li><a href="login.php" class="smoothScroll">LOG IN</a></li>
                         <li><a href="signup.php" class="smoothScroll">SIGN UP</a></li>
                    </ul>
               </div>

          </div>
     </section>




     <!-- Courses -->
     <section id="courses">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2>Career Development <small>Upgrade your skills with the newest courses</small></h2>
                </div>

                <div class="owl-carousel owl-theme owl-courses">
                    <?php
                    $host = 'localhost';
                    $username = 'form_user';
                    $password = '';
                    $database = 'contact_data';

                    $conn = mysqli_connect($host, $username, $password, $database);

                    if (!$conn) {
                        die('Database connection error: ' . mysqli_connect_error());
                    }
                    $category = "Career Development"; // Specify the category here

                    $query = "SELECT * FROM courses WHERE category = '$category'";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $title = $row['title'];
                            $description = $row['description'];
                            $image = $row['image_link'];
                            $link = $row['link1'];
                            ?>
                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="courses-thumb">
                                        <div class="courses-top">
                                            <div class="courses-image">
                                                <a href="<?php echo $link; ?>"><img src="<?php echo $image; ?>" class="img-responsive" alt=""></a>
                                            </div>
                                        </div>

                                        <div class="courses-detail">
                                            <h3><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h3>
                                            <p><a href="<?php echo $link; ?>"><?php echo $description; ?></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    } else {
                        echo "No courses found.";
                    }
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>




     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+91 98005 51100</p>
                                   <p><a href="mailto:youremail.co">andromeda1729@gmail.com</a></p>
                              </address>

                              <div class="footer_menu">
                                  
                                   <ul>
                                        
                                        <li><a href="#">Terms & Conditions</a></li>
                                       
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required="">
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; andromeda 2023</p>
                                   
                         
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>