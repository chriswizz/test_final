<?php
if (! empty($result)) {
    foreach ($result as $k => $v) {
        ?>
<div class="box-container">
    <div class="title">
        <?php echo $result[$k]["title"]; ?>
    </div>
    <div class="description">
        <?php echo $result[$k]["description"]; ?>...
    </div>
    <!-- <div class="price">
        <?php echo $result[$k]["price"]; ?>
    </div> -->
    <div class="action">
        <button class="btn-action bn-detail"
            id="<?php echo $result[$k]["course_id"]; ?>">Edit</button>
        <button class="btn-action bn-delete"
            id="<?php echo $result[$k]["course_id"]; ?>">Delete</button>
    </div>
</div>
<?php
    }
}
?>