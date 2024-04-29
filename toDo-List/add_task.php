<?php

// Include database connection
include 'config.php';

// Check if form is submitted
if (isset($_POST['task'])) {
    // Escape user input to prevent SQL injection
    $task = mysqli_real_escape_string($conn, $_POST['task']);

    // Insert task into database
    $query = "INSERT INTO task (task, status) VALUES ('$task', 'Pending')";
    if (mysqli_query($conn, $query)) {
        // Redirect back to index.php after successful insertion
        header('Location: index.php');
        exit;
    } else {
        echo 'Error: '.$query.'<br>'.mysqli_error($conn); // Display error if insertion fails
    }
} else {
    echo 'Task is not set.'; // Display error if form data is not received
}
