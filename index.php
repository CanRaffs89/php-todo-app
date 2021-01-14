<?php 

include ('config/db_connect.php');

// Write a query for the database for todo items
// Select items from todos
$sql = 'SELECT todo, id FROM todos';

// // Send query to the database
$result = mysqli_query($connect, $sql);

// // Fetch the data from the result variable and return it as an associative array
$todos = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free the result from memory
mysqli_free_result($result);

// Close database connection
mysqli_close($connect);

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
                            
                            <!-- Cycle throught the Todos array and output each as a list item -->
                            <?php foreach($todos as $todo){ ?>
                            
                                <li class="collection-item"><h6 class="list-item"><?php echo htmlspecialchars($todo['todo']); ?><a href="#!" class="secondary-content"><i class="material-icons">cancel</i></a></h6></li>
                                </li>

                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('templates/footer.php'); ?>

</html>