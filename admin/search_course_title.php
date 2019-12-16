<?php
    include_once '../CrudController.php';
    $crudcontroller = new CrudController();

    if(isset($_REQUEST["term"])){
        $result = $crudcontroller->readCoursesbyTitle($_REQUEST["term"]);
        include_once "index.php";

    }
?>