<?php

// Include database connection
include 'config.php';

// Fetch tasks from database
$query = 'SELECT * FROM task';
$result = mysqli_query($conn, $query);

// Display tasks in table rows
if (mysqli_num_rows($result) > 0) {
    $count = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>'.$count.'</td>';
        echo "<td class='".($row['status'] == 'Done' ? 'completed' : '')."'>".$row['task'].'</td>';
        echo '<td>'.$row['status'].'</td>';
        echo "<td><a href='toggle_status.php?id=".$row['task_id']."'>".($row['status'] == 'Pending' ? 'Mark Done' : 'Mark Pending').'</a></td>';
        echo '</tr>';
        ++$count;
    }
} else {
    echo "<tr><td colspan='4'>No tasks found</td></tr>";
}
