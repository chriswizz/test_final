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
    echo "hallo";
    print_r(json_encode("Records edited successfully"));


  } else {
    $crudcontroller->createCourse($title, $image, $description, $active);
    $courseIdArray = $crudcontroller->getLatestId('courses', 'course_id');
    $courseId = $courseIdArray['course_id'];
    print_r(json_encode("Record created successfully"));

  }
  $crudcontroller->createCourseTags($courseId, $checkedTags);
  print_r(json_encode("Tags created successfully"));

}

?>