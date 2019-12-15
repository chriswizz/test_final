<?php
    include_once 'CrudController.php';
    $crudcontroller = new CrudController();

    if(isset($_POST["id"])) {
        $result = $crudcontroller->readSingle($_POST["id"]);
        if(!empty($result)) {
            $responseArray["title"] = $result[0]["title"];
            $responseArray["description"] = $result[0]["description"];
            echo json_encode($responseArray);
        }
    }
?>