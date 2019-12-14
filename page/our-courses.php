<?php
include_once "../Components/head.php";
include_once "../CrudController.php";
$crudcontroller = new CrudController();
$result = $crudcontroller->readCourses();
?>

    <div class="row">
        <a href="add.php"><button class="btn btn-primary btn-add">Add New Record</button></a>
    </div>

    <div class="row" id="container">

    <?php
if (! empty($result)) {
    foreach ($result as $k => $v) {
        ?>
<div class="box-container">
    <div class="title">
        <?php echo $result[$k]["title"]; ?>
    </div>
    <div class="description"><?php echo $result[$k]["description"]; ?>...</div>
    <div class="price"><?php echo $result[$k]["price"]; ?></div>
    <div class="action">
        <button class="btn-action bn-edit"
            id="<?php echo $result[$k]["id"]; ?>">Edit</button>
        <button class="btn-action bn-delete"
            id="<?php echo $result[$k]["id"]; ?>">Delete</button>
    </div>
</div>
<?php
    }
}
?>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                        data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="frmEdit">
                        <div class="form-group">
                            <div class="row">
                                <label>Title</label> <input type="text"
                                    name="title" id="title"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label>Description</label>
                                <textarea class="form-control"
                                    id="description"
                                    name="description"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label>URL</label> <input type="text"
                                    name="url" id="url"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label>Category</label> 
                                <input type="text" name="category" id="category" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <input type="text" name="id" id="id" class="form-control" hidden="true">
                            </div>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"
                        id="update">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal ends here -->

    <!-- Modal for message-->
    <div class="modal fade" id="messageModal" tabindex="-1"
        role="dialog" data-backdrop="static"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                    <button type="button" class="close"
                        data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center" id="msg"></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal ends here -->
    <?php
include_once "../Components/footer.php";
?>