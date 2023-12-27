<?php
include 'header.php';

// Start session
// session_start();

// Set user ID
if (!isset($_SESSION['id'])) {
    // Set a default user ID for guests
    $_SESSION['id'] = 'guest';
}

// Get course ID from URL
if (isset($_GET['course_id'])) {
    $course_id = $_GET['course_id'];
} else {
    // Display an error message and exit
    echo "Error: Course ID not found.";
    exit;
}

// Store the course details in selected_courses table
$host = 'localhost';
$username = 'form_user';
$password = '';
$database = 'contact_data';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Database connection error: ' . mysqli_connect_error());
}

$query = "SELECT * FROM courses WHERE course_id = '$course_id'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $description = $row['description'];
    $image_link = $row['image_link'];
    $video_id = $row['video_id'];

    // Store the selected course in the selected_courses table
    $insert_query = "INSERT INTO selected_courses (user_id, course_id, title, description, image_link, video_id, progress) 
                     VALUES ('{$_SESSION['id']}', '$course_id', '$title', '$description', '$image_link', '$video_id', 0)";
    mysqli_query($conn, $insert_query);
} else {
    // Display an error message and exit
    echo "Error: Course not found.";
    exit;
}

mysqli_close($conn);
?>

<video id="my-video" width="640" height="360" controls>
    <source src="videos/<?php echo $video_id; ?>.mp4" type="video/mp4">
</video>

<div class="progress-bar">
    <div class="progress" id="progress-bar"></div>
</div>

<h3><?php echo $title; ?></h3>
<p><?php echo $description; ?></p>

<script>
    var video = document.getElementById("my-video");
    var progressBar = document.getElementById("progress-bar");

    video.addEventListener("timeupdate", function() {
        var percent = Math.floor((100 / video.duration) * video.currentTime);
        progressBar.style.width = percent + "%";

        // Send progress to server via AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "save_progress.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("id=<?php echo $_SESSION['id']; ?>&video_id=<?php echo $video_id; ?>&course_id=<?php echo $course_id; ?>&progress=" + percent);
    });
</script>
</body>
</html>
