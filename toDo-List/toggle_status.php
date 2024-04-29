<?php

// Include database connection
include 'config.php';

// Check if ID is provided in URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch current status of the task
    $query = "SELECT status FROM task WHERE task_id=$id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $new_status = ($row['status'] == 'Pending') ? 'Done' : 'Pending';

    // Update status of the task
    $query = "UPDATE task SET status='$new_status' WHERE task_id=$id";
    mysqli_query($conn, $query);

    // Redirect back to index.php
    header('Location: index.php');
    exit;
}
