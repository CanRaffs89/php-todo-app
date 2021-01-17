<?php 

include ('config/db_connect.php');

// Initialise empty variables
$error = $todoText = '';

// Check if any data has been submitted

// If 'submit' in POST array has been set, start if statement
if(isset($_POST['submit'])){
    // If text field is empty, echo an error
    if(empty($_POST['todoText'])){
        $error = 'Please add some text!';
    } else {
        // Store todo text in a new variable
        $todoText = $_POST['todoText'];
        // Check if text is valid - letters, spaces and numbers only
        if(!preg_match('/^[a-zA-Z0-9\s]+$/', $todoText)){
            $error = 'Text must be letters and spaces only!';
        }
    }

    // If form is valid, redirect to home page
    if($error){
        
    } else {
        // Check for any dodgy text first
        $todoText = mysqli_real_escape_string($connect, $_POST['todoText']);

        // Create SQL - insert new todo text into the todo column in database
        $sql = "INSERT INTO todos(todo) VALUES('$todoText')";

        // Save to database and check
        if(mysqli_query($connect, $sql)){
            // If data is successfully saved, redirect to homepage
            header('Location: index.php');
        } else {
            // If error, echo it
            echo 'Query error: ' . mysqli_error($connect);
        }

    }
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
                        <h4 class="center heading">Add New Item</h4>
                        <form action="add.php" method="POST" class="container">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="todoText" placeholder="Type here..." value="<?php echo htmlspecialchars($todoText) ?>">
                                </div>
                                <div class="red-text"><?php echo $error; ?></div>
                                <div class="input-field col s12 center">
                                    <button class="btn-flat" type="submit" name="submit"><i id="add-icon" class="material-icons">add_circle</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('templates/footer.php'); ?>

</html>