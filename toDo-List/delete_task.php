<?php

require_once 'config.php';

if ($_GET['task_id']) {
    $task_id = $_GET['task_id'];

    $deletingtasks = mysqli_query($conn, "DELETE FROM `task` WHERE `task_id` = $task_id");

    header('location: index.php');
}
