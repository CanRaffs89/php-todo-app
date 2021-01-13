<?php 

$connect = mysqli_connect('localhost', 'can', 'Rainbow57', 'todo_app');
if(!$connect){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col s12">    
                <div class="card z-depth-3 card-wrapper">
                    <div class="card-content">
                        <ul class="collection with-header">
                            <li class="collection-header center"><h4 class="heading">To-Do List</h4><a href="add.php" class="add-icon"><i id="add-icon" class="material-icons">add_circle</i></a></li>
                            <li class="collection-item"><h6 class="list-item">Item 1<a href="#!" class="secondary-content"><i class="material-icons">cancel</i></a></h6></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('templates/footer.php'); ?>

</html>