<?php

require_once 'config.php';
if ($_GET['task_id'] != '') {
    $task_id = $_GET['task_id'];

    $updatingtasks = mysqli_query($conn, "UPDATE `task` SET `status` = 'Done' WHERE `task_id` = $task_id");

    header('location:index.php');
}
