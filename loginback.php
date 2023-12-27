<?php
session_start();

if (isset($_POST['login'])) {
    // Fetching data from the HTML form
    $name = $_POST["username"];
    $pass = $_POST["password"];

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

    // Create SQL query to check if the username and password exist in the database
    $sql = "SELECT * FROM signup_data WHERE user_name='$name' AND spassword='$pass';";
    $result = $mysqli->query($sql);

    // Check if any rows were returned by the query
    if ($result->num_rows > 0) {
        // Username and password exist in the database
        $_SESSION['username'] = $name;
        header('Location: afterlogin.php');
        exit();
    } else {
        $_SESSION['error'] = "Incorrect password or username";
        header('Location: login.php');
        exit();
    }

    // Close the database connection
    $mysqli->close();
}
?>