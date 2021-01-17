<?php

include ('config/db_connect.php');

// Get id of todo to delete
$id_to_delete = $_GET['id'];

// Delete the todo from database
$deleteTodo = mysqli_query($connect, "DELETE FROM todos WHERE id = '$id_to_delete'");

// Check for deletion
if($deleteTodo){
    // If successful, close database connection and redirect to homepage
    mysqli_close($connect);
    header('Location: index.php');
} else {
    // If failed, output error
    echo 'Error deleting item!';
}

?>