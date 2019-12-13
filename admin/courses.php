<?php
$title = "Adminpanel";
include_once "../Components/head.php";
include_once "../CrudController.php";
$crudcontroller = new CrudController();

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $resultCourse = $crudcontroller->readCourse($id);
  $resultTags = $crudcontroller->readTags($id);
  $resultCourseTags = $crudcontroller->readCourseTags($id);
  
  foreach ($resultCourseTags as $courseTag) {
    $courseTagIds[] = $courseTag['fk_tag_id'];
  }
} else {
  $id = '';
}
?>

<div class="container">
  <h2>Details/Update</h2>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="course_id">Course ID:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="course_id" placeholder="<?php if ($id<>"") echo $resultCourse['course_id']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="title">Title:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title" placeholder="<?php if ($id<>"") echo $resultCourse['title']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="image">Image:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="image" placeholder="<?php if ($id<>"") echo $resultCourse['image']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="description">Description:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="description" placeholder="<?php if ($id<>"") echo $resultCourse['description']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="active">Show Course:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="active" placeholder="<?php if ($id<>"") echo $resultCourse['active']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="active">Tags:</label>

      <?php foreach ($resultTags as $tag) { ?>
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label>
            <input
              type="checkbox"
              name="<?php echo $tag["tag"] ?>"
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

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-outline-primary">Submit</button>
      </div>
    </div>

    <a href="index.php"><button type="button" class="btn btn-outline-dark">Back to Courses</button></a>
  </form>
</div>

<?php
include_once "../Components/footer.php";
?>