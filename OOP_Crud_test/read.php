<?php
    include_once 'CrudController.php';
    $crudcontroller = new CrudController();

    if(isset($_POST["id"])) {
        $result = $crudcontroller->readSingle($_POST["id"]);
        if(!empty($result)) {
            $responseArray["title"] = $result[0]["title"];
            $responseArray["description"] = $result[0]["description"];
            $responseArray["price"] = $result[0]["price"];
            echo json_encode($responseArray);
        }
    }
    // switch($_POST["type"]) {
    
    //     case "single":
            
    //         if(isset($_POST["id"])) {
    //             $result = $crudcontroller->readSingle($_POST["id"]);
    //             if(!empty($result)) {
    //                 $responseArray["title"] = $result[0]["title"];
    //                 $responseArray["description"] = $result[0]["description"];
    //                 echo json_encode($responseArray);
    //             }
    //         }
    //         break;
    //     case "all":
    //         $result = $crudcontroller->readData();
    //         require_once "course_list.php";
    //         break;
            
    //     default:
    //         break;
    // }

?>