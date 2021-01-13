<?php 

// Initialise empty variables
$error = $todoText = '';

// Check if any data has been submitted
if(isset($_POST['submit'])){
    if(empty($_POST['todo-text'])){
        // If text field is empty, echo an error
        $error = 'Please add some text!';
    } else {
        // Store inputted text in a new variable
        $todoText = $_POST['todo-text'];
        // Check if text is valid - letters, spaces and numbers only
        if(!preg_match('/^[a-zA-Z0-9\s]+$/', $todoText)){
            $error = 'Text must be letters and spaces only!';
        }
    }
    if($error){

    } else {
        // If form is valid, redirect to home page
        header('Location: index.php');
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
                                    <input type="text" name="todo-text" placeholder="Type here..." value="<?php echo htmlspecialchars($todoText) ?>">
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