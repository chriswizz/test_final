<?php
$title = "Adminpanel";
include_once "../Components/head.php";
include_once "../Components/navbar.php";
include_once "../CrudController.php";
$crudcontroller = new CrudController();
$resultTags = $crudcontroller->readTags();

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $resultCourse = $crudcontroller->readCourse($id);
  $resultCourseTags = $crudcontroller->readCourseTags($id);
  foreach ($resultCourseTags as $courseTag) {
    $courseTagIds[] = $courseTag['tag_id'];
  }
} else {
  $id = '';
  $courseTagIds = [];
}
?>

<div class="container">
  <!-- <div id="sucMsg">Msg</div> -->
  
  <!-- update only php -->
  <!-- <form class="form-horizontal" action="action_test.php" method="post"> -->

    <!-- update ajax -->

<form class="form-horizontal" id="frmEdit" method="post">
  <h2>Details/Update</h2>
    <div class="form-group row">
      <label class="control-label col-sm-2 col-form-label" for="course_id">Course ID:</label>
      <div class="col-sm-10">
        <input readonly type="number" class="form-control" name="course_id" id="course_id" value="<?php if ($id<>"") echo $resultCourse[0]['course_id']; ?>">
      </div>
    </div>

    <div class="form-group row">
      <label class="control-label col-sm-2" for="title">Title:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="title" id="title" value="<?php if ($id<>"") echo $resultCourse[0]['title']; ?>">
      </div>
    </div>

    <div class="form-group row">
      <label class="control-label col-sm-2" for="image">Image:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="image" id="image" value="<?php if ($id<>"") echo $resultCourse[0]['image']; ?>">
      </div>
    </div>

    <div class="form-group row">
      <label class="control-label col-sm-2" for="description">Description:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="description" id="description" value="<?php if ($id<>"") echo $resultCourse[0]['description']; ?>">
      </div>
    </div>

    <div class="form-group row">
      <label class="control-label col-sm-2" for="active">Show Course:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="active" id="active" value="<?php if ($id<>"") echo $resultCourse[0]['active']; ?>">
      </div>
    </div>

    <div class="form-group row">
      <label class="control-label col-sm-2" for="active">Tags:</label>

      <?php foreach ($resultTags as $tag) { ?>
      <div class="col-sm-10 offset-2">
          <div class="checkbox">
            <label>
              <input
                type="checkbox"
                value="<?php echo $tag["tag_id"] ?>"
                name="checkedTags[]"
                <?php if (in_array($tag["tag_id"], $courseTagIds)) { ?>
                checked="checked"
                <?php } ?>
              >
              <?php echo $tag["tag"] ?>
            </label>
          </div>
      </div>
      <?php } ?>

    </div>

    <div class="form-group row">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-outline-primary" id="upsertBtn">Submit</button>
      </div>
    </div>

    <a href="index.php"><button type="button" class="btn btn-outline-dark">Back to Courses</button></a>
  </form>
</div>

<!-- Modal for message-->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                  <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button> -->
              </div>
              <div class="modal-body">
                  <h4 class="text-center" id="msg">Success</h4>
              </div>
              <div class="modal-footer">
                  <a href="index.php"><button type="button" class="btn btn-secondary">Back</button></a>
              </div>
          </div>
      </div>
</div>
<!-- Modal ends here -->

<?php
include_once "../Components/footer.php";
?>