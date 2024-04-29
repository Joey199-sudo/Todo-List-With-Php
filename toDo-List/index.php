<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo List</title>
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    
</head>
<body>
    <h1>Todo List</h1>
    
    <!-- Form to add a new task -->
    <form action="add_task.php" method="post">
        <input type="text" name="task" placeholder="Enter your task" required>
        <button type="submit" name="add">Add Task</button>
    </form>
    
    <!-- Display tasks in a table -->
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Task</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'display_tasks.php'; ?>
        </tbody>
    </table>
</body>
</html>
