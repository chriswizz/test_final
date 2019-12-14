<?php
$title = "Adminpanel";
include_once "../Components/head.php";
include_once "../CrudController.php";
$crudcontroller = new CrudController();

$title = $_POST['title'];
$image = $_POST['image'];
$description = $_POST['description'];
$active = $_POST['active'];

if (!isset($_POST['checkedTags'])) {
  echo "Please select at least one tag for this course.";

} else {
  $checkedTags = $_POST['checkedTags'];

  if ($_POST['course_id'] <> "") {
    $courseId = $_POST['course_id'];
    $crudcontroller->updateCourse($courseId, $title, $image, $description, $active);
    $crudcontroller->deleteCourseTags($courseId);
    // just for info - delete later!
    echo "<br>";
    echo "Updated Course ID: ";
    print_r($courseId);
    echo "<br>";
    echo "Checked Tags as array: ";
    print_r($checkedTags);
    echo "<br>";
    echo "<br>";
    echo "<strong>course update success</strong>";
    echo "<br>";
    echo "<strong>existing tags deleted</strong>";

  } else {
    $crudcontroller->createCourse($title, $image, $description, $active);
    $courseIdArray = $crudcontroller->getLatestId('courses', 'course_id');
    $courseId = $courseIdArray['course_id'];

    // just for info - delete later!
    echo "<br>";
    echo "New Course ID: ";
    print_r($courseId);
    echo "<br>";
    echo "Checked Tags as array: ";
    print_r($checkedTags);
    echo "<br>";
    echo "<br>";
    echo "<strong>new course created</strong>";
  }
  $crudcontroller->createCourseTags($courseId, $checkedTags);
    echo "<br>";
    echo "<strong>new tags created</strong>";
}



?>