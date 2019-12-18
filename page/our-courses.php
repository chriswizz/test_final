<?php
$title = "CourseOverview";
include_once "../Components/head.php";
include_once "../Components/navbar.php";
include_once "../Components/header.php";
include_once "../Components/filterCheckboxes.php";

include_once "../CrudController.php";
$crudcontroller = new CrudController();
// $result = $crudcontroller->readCourses();
// if(isset($_POST["options"])) {
//     $filterArray = json_decode($_POST["options"]);
//     print_r($filterArray);
// } else {
//     $filterArray = [];
// };

// echo $_POST["options"];
$filterArray = [1,2];
$result = $crudcontroller->showCourses($filterArray);


// $result = $crudcontroller->readCoursePrice();
?>

    <div class="row p-4 m-0" id="container">
        <?php require_once "../Components/course_card.php" ?>
    </div>

<?php require_once "../Components/modal.php" ?>

<?php include_once "../Components/footer.php"?>