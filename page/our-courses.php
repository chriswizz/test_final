<?php
$title = "CourseOverview";
include_once "../Components/head.php";
include_once "../CrudController.php";
$crudcontroller = new CrudController();
$result = $crudcontroller->readData();
?>

    <div class="row">
        <h1>Course Overview</h1>
    </div>

    <div class="row" id="container">
        <?php require_once "course_card.php" ?>
    </div>

    <?php require_once "modal.php" ?>

<?php include_once "../Components/footer.php"?>