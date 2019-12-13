<?php
include_once "Components/head.php";
include_once 'CrudController.php';
$crudcontroller = new CrudController();
$result = $crudcontroller->readData();
?>

<h1 class="text-center my-4">Course Dashboard</h1>

<div class="container-fluid">
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
            <button class="btn btn-danger bn-edit" id="<?php echo $result[$k]["id"]; ?>">Edit</button>
        </td>
        <td>
            <button class="btn btn-danger bn-action" id="<?php echo $result[$k]["id"]; ?>">Edit</button>
        </td>

    </tr>
    <?php
    }
}
?>
  </tbody>
</table>

</div>



<?php
include_once "Components/footer.php";
?>