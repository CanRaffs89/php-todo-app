<?php 

// Connect to database
$connect = mysqli_connect('localhost', 'can', 'Rainbow57', 'todo_app');
if(!$connect){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>