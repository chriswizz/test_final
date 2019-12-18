<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

$title = "Course Dashboard";
include_once "../Components/head.php";
include_once "../CrudController.php";
$crudcontroller = new CrudController();
$result = $crudcontroller->showCourses();

?>

<a href="logout.php?logout"><button type="button" class="btn btn-success border">Log Out</button></a>

<div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
      <div class="form-inline my-2 my-lg-0">
        <input class="search-box form-control mr-sm-2" type="text" autocomplete="off" placeholder="Search Course Title..." />
        <button class="btn btn-info my-2 my-sm-0" type="submit"><i class="fas fa-search searchButton"></i></button>
      </div>
      <div class="form-inline my-2 my-lg-0">
        <a href="../page/our-courses.php" target="_blank"><i class="fas fa-binoculars text-info"></i></a>
      </div>
          <div class="form-inline my-2 my-lg-0">
              <a href='courses.php' class='d-flex text-light'>
              <button class='btn btn-outline-info my-2 my-sm-0 mx-2' type='button'>
                  <i class='fas fa-plus-square mr-2'></i>Create New Course</button>
              </a>
          </div>
      </div>
    </nav>

  <div class="display">
      <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Image</th>
              <th scope="col">ID</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Show</th>
              <th scope="col">Update Course</th>
              <th scope="col">Update Course Item</th>
            </tr>
          </thead>
          <tbody>

          <?php
          if (! empty($result)) {
          foreach ($result as $k => $v) {
          ?>

      <tr>
        <td><img src="<?php echo $result[$k]["image"]; ?>" alt=""></td>
        <td><?php echo $result[$k]["course_id"]; ?></td>
        <td><?php echo $result[$k]["title"]; ?></td>
        <td><?php echo $result[$k]["description"]; ?></td>
        <td><?php echo $result[$k]["active"]; ?></td>
        <td>
          <a href="courses.php?id=<?php echo $result[$k]['course_id']; ?>"><button class="btn btn-outline-info">Update</button></a>
        </td>
        <td>
          <a href="course-items.php?id=<?php echo $result[$k]['course_id']; ?>"><button class="btn btn-outline-danger">Date/Prices</button></a>
        </td>
      </tr>
      <?php
      }
  }
  ?>
          </tbody>
      </table>
  </div>
</div>

<?php
include_once "../Components/footer.php";
?>