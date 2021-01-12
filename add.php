<?php ?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<div class="container">
        <div class="row">
            <div class="col s12">    
                <div class="card z-depth-3 card-wrapper">
                    <div class="card-content">
                        <h4 class="center heading">Add New Item</h4>
                        <form action="" class="container">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="todo-text" placeholder="Type here...">
                                </div>
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