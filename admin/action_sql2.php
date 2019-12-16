<?php
$title = "Adminpanel";
include_once "../Components/head.php";
include_once "../CrudController.php";
$crudcontroller = new CrudController();
$result = $crudcontroller->showCourses();
// $result2 = $crudcontroller->getTagIdCategories([2, 3, 4, 7, 8, 10, 11]);
echo "<br>";
echo "<br>";
echo "<br>";
var_dump($result);
?>