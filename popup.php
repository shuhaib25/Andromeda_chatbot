<?php

// // Start the session
// session_start();
include 'header.php';

?>
<section id="courses">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="section-title">
          <h2>Watched Courses <small>Check Your progress</small></h2>
        </div>

        <div class="course-container">
          <?php
          $host = 'localhost';
          $username = 'form_user';
          $password = '';
          $database = 'contact_data';

          $conn = mysqli_connect($host, $username, $password, $database);

          if (!$conn) {
            die('Database connection error: ' . mysqli_connect_error());
          }

          // Retrieve courses and maximum progress from selected_courses table
          $query = "SELECT * FROM selected_courses WHERE (course_id, user_id, progress) IN (SELECT course_id, user_id, MAX(progress) FROM selected_courses WHERE user_id = '".$_SESSION['id']."' GROUP BY course_id, user_id)";

          $result = mysqli_query($conn, $query);

          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $course_id = $row['course_id'];
              $title = $row['title'];
              $description = $row['description'];
              $image = $row['image_link'];
              $video_id = $row['video_id'];
              $progress = $row['progress'];
          ?>
              <div class="col-md-4 col-sm-4">
                <div class="item">
                  <div class="courses-thumb">
                    <div class="courses-top">
                      <div class="courses-image">
                        <a href="video.php?course_id=<?php echo $course_id; ?>&video_id=<?php echo $video_id; ?>">
                          <img src="<?php echo $image; ?>" class="img-responsive" alt="">
                        </a>
                      </div>
                    </div>

                    <div class="courses-detail">
                      <h3><a href="video.php?course_id=<?php echo $course_id; ?>&video_id=<?php echo $video_id; ?>"><?php echo $title; ?></a></h3>
                      <p><a href="video.php?course_id=<?php echo $course_id; ?>&video_id=<?php echo $video_id; ?>"><?php echo $description; ?></a></p>
                      <p>Progress: <?php echo $progress; ?>%</p>
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
     <script src="js/dashboard.js"></script>

</body>
</html>

