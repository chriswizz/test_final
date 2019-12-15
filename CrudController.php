<?php
include_once 'Dao.php';

class CrudController
{
    /* Fetch all Courses */
    public function readCourses()
    {
        try {  
            $dao = new Dao();
            $conn = $dao->openConnection();
            $sql = "SELECT * FROM `courses`";
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

    /* Fetch all Tags*/
    public function readTags()
    {
        try {  
            $dao = new Dao();
            $conn = $dao->openConnection();
            $sql = "SELECT * FROM `tags`";
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

    /* Fetch single Course */
    public function readCourse($courseId)
    {
        try {  
            $dao = new Dao();
            $conn = $dao->openConnection();
            $sql = "SELECT * FROM `courses` WHERE course_id = $courseId";
            $resource = $conn->query($sql);
            $result = $resource->fetch(PDO::FETCH_ASSOC);
            $dao->closeConnection();
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (! empty($result)) {
            return $result;
        }
    }

    /* Fetch Tags for single Course*/
    public function readCourseTags($courseId)
    {
        try {  
            $dao = new Dao();
            $conn = $dao->openConnection();
            $sql = "SELECT * FROM `courses_tags` WHERE fk_course_id = $courseId";
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

    /* Update single Course*/
    public function updateCourse($courseId, $title, $image, $description, $active)
    {
        try {  
            $dao = new Dao();
            $conn = $dao->openConnection();
            $sql = "UPDATE `courses`
                    SET title = '$title', image = '$image', description = '$description', active = $active
                    WHERE course_id = $courseId";
            $conn->query($sql);
            $dao->closeConnection();
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }

    /* Delete all Tags for single Course*/
    public function deleteCourseTags($courseId)
    {
        try {  
            $dao = new Dao();
            $conn = $dao->openConnection();
            $sql = "DELETE FROM `courses_tags` WHERE fk_course_id = $courseId";
            $conn->query($sql);
            $dao->closeConnection();
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }

    /* Create Tags for single Course*/
    public function createCourseTags($courseId, array $checkedTags)
    {
        try {  
            $dao = new Dao();
            $conn = $dao->openConnection();
            foreach ($checkedTags as $tag) {
                $sql = "INSERT INTO `courses_tags` (fk_course_id, fk_tag_id) VALUES ($courseId, $tag)";
                $conn->query($sql);
            }
            $dao->closeConnection();
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }

    /* create single Course*/
    public function createCourse($title, $image, $description, $active)
    {
        try {  
            $dao = new Dao();
            $conn = $dao->openConnection();
            $sql = "INSERT INTO `courses` (title, image, description, active)
                    VALUES ('$title','$image','$description',$active)";
            $conn->query($sql);
            $dao->closeConnection();
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }

    /* get latest ID of table*/
    public function getLatestId($table, $idColumn)
    {
        try {  
            $dao = new Dao();
            $conn = $dao->openConnection();
            $sql = "SELECT $idColumn FROM $table ORDER BY $idColumn DESC LIMIT 1";
            $resource = $conn->query($sql);
            $result = $resource->fetch(PDO::FETCH_ASSOC);
            $dao->closeConnection();
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (! empty($result)) {
            return $result;
        }
    }

    // BABSI
    
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

        //get Course Detail for Modal by ID

    public function readSingle($id)
    {
        try {
            
            $dao = new Dao();            
            $conn = $dao->openConnection();            
            // $sql = "SELECT `course_id`,`title`,`description`, `price`, `start_date`, `end_date`
            // FROM `courses` 
            // INNER JOIN `course_items`
            // ON courses.course_id = course_items.fk_course_id 
            // WHERE course_id=" . $id;  
            $sql = "SELECT `course_id`,`title`,`description`
            FROM `courses` 
            WHERE course_id=" . $id;    
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









    /* Add New Record */
    public function add($formArray)
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $category = $_POST['category'];
        
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "INSERT INTO `tb_links`(`title`, `description`, `url`, `category`) VALUES ('" . $title . "','" . $description . "','" . $url . "','" . $category . "')";
        $conn->query($sql);
        $dao->closeConnection();
    }

    /* Edit a Record */
    public function edit($formArray)
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $category = $_POST['category'];
        
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "UPDATE tb_links SET title = '" . $title . "' , description='" . $description . "', url='" . $url . "', category='" . $category . "' WHERE id=" . $id;
        
        $conn->query($sql);
        $dao->closeConnection();
    }

    /* Delete a Record */
    public function delete($id)
    {
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "DELETE FROM `tb_links` where id='$id'";
        
        $conn->query($sql);
        $dao->closeConnection();
    }
}

?>