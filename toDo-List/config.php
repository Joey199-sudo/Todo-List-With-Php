<?php

// database variables
$servername = 'localhost';
$username = 'root';
$password = '';
$databasename = 'todo-list';

// creating a connection

$conn = mysqli_connect($servername, $username, $password, $databasename);

// get the connection errors
if (!$conn) {
    exit('Connection failed: '.mysqli_connect_error());
}
