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
            $result = $resource->fetchAll(PDO::FETCH_ASSOC);
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





    /* Fetch all filtered Courses */
    public function showCourses(array $checked=[])
    {
            // $checked=[2, 3, 4, 7, 8, 10, 11];



        try {  
            $dao = new Dao();
            $conn = $dao->openConnection();

            // $checkedWithCategories = getTagIdCategories([2, 3, 4, 7, 8, 10, 11]);
            $checkedWithCategories=[[2,1], [3,2], [5,2], [7,3], [8,3], [10,3], [11,3]];

            $sqlBase = "SELECT DISTINCT `course_id`, `title`, `image`, `description`, `active` FROM `courses`
                INNER JOIN courses_tags ON course_id = fk_course_id
                INNER JOIN tags ON fk_tag_id = tag_id
                INNER JOIN tag_categories ON fk_tag_category = tag_category_id";

            $sql = $sqlBase;

            for ($i=1; $i<4; $i++) {
              $whereStr = '';
              $checkedArray = [];
              foreach ($checkedWithCategories as $checked) {
                if ($checked[1] == $i) {
                  $checkedArray[] = "tag_id = $checked[0]";
                  if ($whereStr == '') {
                    $whereStr = " WHERE tag_category_id = $i";
                  }
                }
              }
              
              if ($whereStr != '') {
                $sql .= " intersect ";
                $sql .= $sqlBase;
                $sql .= $whereStr;
                $sql .= " AND (" . implode(" OR ", $checkedArray) . ")";
              }
            }
            echo $sql;
            echo "<br>";
            echo "<br>";

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

    /* get category of every tagID*/
    public function getTagIdCategories(array $tagIds=[])
    {
        try {  
            $dao = new Dao();
            $conn = $dao->openConnection();

            foreach ($tagIds as $id) {
                $sql = "SELECT `tag_id`, `fk_tag_category` FROM `tags` WHERE tag_id = $id";
                $resource = $conn->query($sql);
                $result = $resource->fetch(PDO::FETCH_ASSOC);
                $tagsWithCategories[] = $result;
            }

            $dao->closeConnection();
        } catch (PDOException $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (! empty($tagsWithCategories)) {
            return $tagsWithCategories;
        }
    }








    // BABSI

    //fetch by course Title -> search in Admin-Panel - not finished

    public function readCoursesbyTitle($search)
    {
        try {            
            $dao = new Dao();            
            $conn = $dao->openConnection();
            $search = $_REQUEST["term"];            
            $sql = "SELECT * FROM `courses` WHERE title LIKE $search%.";       
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