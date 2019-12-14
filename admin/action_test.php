<?php
$title = "Adminpanel";
include_once "../Components/head.php";
include_once "../CrudController.php";
$crudcontroller = new CrudController();

if (isset($_POST['course_id']) && isset($_POST['checkedTags'])) {
  $courseId = $_POST['course_id'];
  $title = $_POST['title'];
  $image = $_POST['image'];
  $description = $_POST['description'];
  $active = $_POST['active'];
  $checkedTags = $_POST['checkedTags'];

  $crudcontroller->updateCourse($courseId, $title, $image, $description, $active);
  $crudcontroller->updateCourseTags($courseId, $checkedTags);

  // just for info - delete later!
  echo "<br>";
  echo "Course ID: ";
  print_r($courseId);
  echo "<br>";
  echo "Checked Tags as array: ";
  print_r($checkedTags);
  echo "<br>";
  echo "<br>";
  echo "<strong>course update success</strong>";
  echo "<br>";
  echo "<strong>previous tags deleted, new tags created</strong>";
}
?>