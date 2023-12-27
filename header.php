<?php

// Start the session
session_start();


// Check if the user is logged in
if (!isset($_SESSION['username'])) {
  // Redirect to the login page if not
  header("Location: login.html");
  echo
  exit;
}


// Connect to the database
$conn = mysqli_connect("localhost", "form_user", "", "contact_data");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select data from a table based on the current user
$username = $_SESSION['username'];
$sql = "SELECT * FROM signup_data WHERE user_name='$username'";
$result = mysqli_query($conn, $sql);


?>


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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
     <!-- <link rel="stylesheet" href="css/styleafterlogin.css"> -->
      
     <!-- dashboard -->
     <link rel="stylesheet" href="css/dashboardstyle.css">
     
     <style>
		video {
			display: block;
			margin: 0 auto;
		}

		.progress-bar {
			height: 5px;
			background-color: #ccc;
			position: relative;
			margin-top: 10px;
		}

		.progress {
			height: 5px;
			background-color: #4CAF50;
			position: absolute;
			top: 0;
			left: 0;
		}
	</style>


</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top " role="navigation">
          <div class="container">

               <div class="navbar-header nav">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="indextest.php" class="navbar-brand nav "><img src="images/logo.png" alt="logo" height="45" width="180"></a>
               </div>
       
                      
                 
               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse navbar-right nav ">
                    
                    <ul class="nav navbar-nav navbar-nav-first ">
                        <li> <div class="search-container">
                              <form action="/action_page.php">
                                <input type="text" placeholder="Search.." name="search">&nbsp;&nbsp;
                                <button type="submit"><i class="fa fa-search"></i></button>
                              </form>
                            </div>
                         </li>
                         <li><a href="afterlogin.php" class="smoothScroll">Dashboard</a></li>
                         <li><a href="about.php" class="smoothScroll">About</a></li>
                         <li class="dropdown"><a href="#"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
                              <ul>
                                <li><a href="Personality Development.php">Personality Development</a></li>
                                <li><a href="linux.php">Linux &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                <li><a href="health& fitness cources.php">Health and Fitness&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                <li><a href="web developer.php">Web Development&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                <li><a href="career development.php">Career Development&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                              </ul>
                            </li>

                            <li><a href="popup.php" class="smoothScroll">Progress</a></li>
                         
                         <li>
                         <div id="profile-link">
    <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Profile Picture">   
  </div>
  <div id="slide-out">
    <div id="slide-out-content">

     <?php // Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<p>ID: " . $row["id"]. "</p><p>Name: " . $row["user_name"]. "</p><p>Email: " . $row["semail"]. "</p>";
        
        $_SESSION['id']=$row["id"];
    }
} else {
    echo "0 results";
}

// Close the database connection
mysqli_close($conn);
?>

<form method="post" action="logout.php">
    <div class="row">
        <div class="col-md-12">
            <button type="submit" name="logout" class="btn btn-primary btn-block">Logout</button>
        </div>
    </div>
</form>



                         </li>
                    </ul>
               </div>

          </div>
     </section>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/dashboard.js"></script>

</body>
</html>