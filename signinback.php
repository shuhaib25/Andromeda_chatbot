<?php
session_start();
if(isset($_POST['signup']))
{
    // Fetching data from the HTML form
    $name = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $cpass = $_POST["cpassword"];
    $interests = isset($_POST["interests"]) ? $_POST["interests"] : array(); // Get selected interests as an array

    // Check if passwords match
    if ($pass !== $cpass) {
        $_SESSION['errorMsg'] = "Passwords do not match.";
        header("Location: signup.php"); // Redirect back to the signup page
        exit();
    }

    // Database details
    $host = "localhost";
    $username = "form_user";
    $dbname = "contact_data";
    $password = "";

    // Establish connection to the database
    $mysqli = new mysqli($host, $username, $password, $dbname);

    // Check for connection errors
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Create SQL query to check if email exists in the database
    $sql1 = "SELECT * FROM signup_data WHERE user_name='$name' OR semail='$email' OR spassword='$pass';";
    $result = $mysqli->query($sql1);

    // Check if any rows were returned by the query
    if ($result->num_rows > 0) {
        // Username, email, or password exists in the database
        $_SESSION['errorMsg'] = "Username, email, or password exists in the database.";
        header("Location: signup.php"); // Redirect back to the signup page
        exit();
    } else {
        // Close the database connection
        $mysqli->close();
    }

    // Create connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // Check connection whether it is working or not
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Inserting data into the SQL table
    $sql = "INSERT INTO signup_data (user_name, semail, spassword, scpassword, interests) VALUES ('$name', '$email', '$pass', '$cpass', '" . implode(",", $interests) . "')";

    // Save and check whether data is stored properly into the database or not
    $save = mysqli_query($con, $sql);
    if ($save) {
        header("Location: login.html");
        exit();
    }

    // Close the connection
    mysqli_close($con);
}
?>

