<?php
include_once 'Dao.php';

class CrudController
{

    /* Fetch All */
    public function readData()
    {
        try {            
            $dao = new Dao();            
            $conn = $dao->openConnection();            
            $sql = "SELECT `course_id`,`title`,`description` FROM `courses` ORDER BY course_id DESC";
            // $sql = "SELECT `course_id`,`title`,`description`, `price`, `start_date`, `end_date`
            // FROM `courses` 
            // INNER JOIN `course_items`
            // ON courses.course_id = course_items.fk_course_id";        
            $resource = $conn->query($sql);            
            $result = $resource->fetchAll(PDO::FETCH_ASSOC);            
            $dao->closeConnection();
        } catch (PDOException $e) {
            
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (! empty($result)) {
            return $result;
        }
    }

    /* Fetch Single Record by Id */
    public function readSingle($id)
    {
        try {
            
            $dao = new Dao();            
            $conn = $dao->openConnection();            
            $sql = "SELECT `course_id`,`title`,`description`, `price`, `start_date`, `end_date`
            FROM `courses` 
            INNER JOIN `course_items`
            ON courses.course_id = course_items.fk_course_id 
            WHERE course_id=" . $id;  
            // $sql = "SELECT `course_id`,`title`,`description`
            // FROM `courses` 
            // WHERE course_id=" . $id;    
            $resource = $conn->query($sql);            
            $result = $resource->fetchAll(PDO::FETCH_ASSOC);            
            $dao->closeConnection();
        } catch (PDOException $e) {
            
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (! empty($result)) {
            return $result;
        }
    }

}

?>