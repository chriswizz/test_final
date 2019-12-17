<?php
$title = "CourseOverview";
include_once "../Components/head.php";
include_once "../Components/navbar.php";
include_once "../Components/filterCheckboxes.php";

include_once "../CrudController.php";
$crudcontroller = new CrudController();
$result = $crudcontroller->readCourses();
// $result = $crudcontroller->readCoursePrice();
?>

    <div class="row m-0 p-4">
        <h1>Course Overview</h1>
    </div>

    <div class="row p-4 m-0" id="container">
        <?php require_once "../Components/course_card.php" ?>
    </div>

<?php require_once "../Components/modal.php" ?>

<?php include_once "../Components/footer.php"?>