<?php
if (! empty($result)) {
    foreach ($result as $k => $v) {
        $tagsArray = [];
        $courseId = $result[$k]["course_id"];
        $courseTags = $crudcontroller->readCourseTags($courseId);
        foreach ($courseTags as $tag) {
            $tagsArray[] = "#".$tag['tag'];
        }
        ?>
<!-- <div class="box-container">
    <div class="title">
        <?php echo $result[$k]["title"]; ?>
    </div>
    <div class="description">
        <?php echo $result[$k]["description"]; ?>...
    </div>
    <div class="price">
        <?php echo $result[$k]["price"]; ?>
    </div>
    <div class="action">
        <button class="btn-action showBtn" id="<?php echo $result[$k]["course_id"]; ?>">Show</button>
    </div>
</div> -->

<!-- Ching -->

    <div class="card col-md-4 store-item border-0 p-3">
        <!-- <img class="card-img-top" src="<?php echo $result[$k]["image"]; ?>" alt="Card image cap"> -->
        <div class="shadow p-3 mb-5 bg-white rounded">
            <img class="card-img-top" src="https://codefactory.wien/wp-content/themes/hestia/cf-images/big-jpg/2-fullstack.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $result[$k]["title"]; ?></h5>
                <p class="card-text">&euro; <?php echo implode($crudcontroller->readCoursePrice($courseId)[0])/100; ?></p>
                <p class="card-text text-muted"><?php echo implode(" ", $tagsArray); ?></p>
    <!-- 
                <div class="row">
                    <div class="col-md-6">
                        <select class="md-form mdb-select colorful-select dropdown-primary">
                        <option value="" disabled selected>Choose your section</option>
                        <option value="1">14/01/2020-30/04/2020</option>
                        <option value="2">14/02/2020-30/05/2020</option>
                        </select>
                    </div>
                </div>  -->
                <button class="btn btn-info mt-2 showBtn" id="<?php echo $courseId; ?>">Show</button>
                <!-- <button type="button" class="btn btn-info mt-2" data-toggle="modal" data-target="#modalQuickView${i}">Details</button> -->
                <button type="button" class="btn btn-danger bbtn mt-2 store-item-icon">Apply now</button>
            </div>
        </div>
    </div>




<?php
    }
}
?>