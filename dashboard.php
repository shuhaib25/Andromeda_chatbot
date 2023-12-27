<?php
// Start the session
session_start();


// Check if the user is logged in
if (isset($_SESSION['username'])) {
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
<html>
<head>
  <link rel="stylesheet" href="css/dasgboardstyle.css">
  
</head>
<body style="background-color: rgb(142, 55, 5);">
  




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
    }
} else {
    echo "0 results";
}

// Close the database connection
mysqli_close($conn);
?>
   </div>
  </div>








  <script src="js/dashboard.js"></script>
</body>
</html> 

