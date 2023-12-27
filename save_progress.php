<?php
// Start session
// session_start();

// Get user ID, course ID, video ID, and progress from POST data
$id = $_POST['id'];
$course_id = $_POST['course_id'];
$video_id = $_POST['video_id'];
$progress = $_POST['progress'];

// Save progress to database
$db = new mysqli("localhost", "form_user", "", "contact_data");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$sql = "INSERT INTO video_progress (id, course_id, video_id, progress) VALUES ('$id', '$course_id', '$video_id', '$progress') ON DUPLICATE KEY UPDATE progress='$progress'";

if ($db->query($sql) === TRUE) {
    echo "Progress saved successfully";

    // Retrieve the highest progress for the current course and video from the video_progress table
    $query = "SELECT MAX(progress) AS highest_progress FROM video_progress WHERE id = '$id' AND course_id = '$course_id'";
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $highest_progress = $row['highest_progress'];
        echo "<br>Highest progress for this course and video: " . $highest_progress;

        // Update the progress in the selected_courses table
        $update_query = "UPDATE selected_courses SET progress = '$highest_progress' WHERE user_id = '$id' AND course_id = '$course_id'";
        if ($db->query($update_query) === TRUE) {
            echo "<br>Progress updated in selected_courses table";
        } else {
            echo "<br>Error updating progress in selected_courses table: " . $db->error;
        }
    } else {
        echo "<br>No progress found for this course and video";
    }
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
?>
