<?php
include_once "../Components/head.php";
include_once "../CrudController.php";
$crudcontroller = new CrudController();


if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $resultCourse = $crudcontroller->readCourse($id);
  $resultCourseTags = $crudcontroller->readCourseTags($id);
  var_dump($resultCourse);
  echo "<br>";
  echo "<br>";
  echo "<br>";
  var_dump($resultCourseTags);
} else {
  $id = '';
}
?>