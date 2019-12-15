<?php
include_once "Components/head.php";
include_once 'CrudController.php';
$crudcontroller = new CrudController();
$result = $crudcontroller->readData();
?>

    <div class="row">
        <a href="add.php"><button class="btn btn-primary btn-add">Add New Record</button></a>
    </div>

    <div class="row" id="container">
        
        <?php require_once "course_list.php" ?>

    </div>

<?php 
require_once "modal.php"; 
include_once "Components/footer.php";
?>