<?php
// 'SELECT DISTINCT course_id, title FROM courses
// INNER JOIN courses_tags ON course_id = fk_course_id
// INNER JOIN tags ON fk_tag_id = tag_id
// INNER JOIN tag_categories ON fk_tag_category = tag_category_id
// intersect
// SELECT DISTINCT course_id, title FROM courses
// INNER JOIN courses_tags ON course_id = fk_course_id
// INNER JOIN tags ON fk_tag_id = tag_id
// INNER JOIN tag_categories ON fk_tag_category = tag_category_id
// WHERE tag_category_id = 1
// AND (tag_id = 2)
// intersect
// SELECT DISTINCT course_id, title FROM courses
// INNER JOIN courses_tags ON course_id = fk_course_id
// INNER JOIN tags ON fk_tag_id = tag_id
// INNER JOIN tag_categories ON fk_tag_category = tag_category_id
// WHERE tag_category_id = 2
// AND (tag_id = 3 OR tag_id = 4)
// intersect
// SELECT DISTINCT course_id, title FROM courses
// INNER JOIN courses_tags ON course_id = fk_course_id
// INNER JOIN tags ON fk_tag_id = tag_id
// INNER JOIN tag_categories ON fk_tag_category = tag_category_id
// WHERE tag_category_id = 3
// AND (tag_id = 7 OR tag_id = 8 OR tag_id = 10 OR tag_id = 11)'


// input example
$checked=[2, 3, 4, 7, 8, 10, 11];
// get categories
$checkedWithCategories=[[1,1], [3,2], [5,2], [7,3], [8,3], [10,3], [11,3]];

$sqlBase = "SELECT DISTINCT course_id, title FROM courses
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
  // just for info - delete later!
  print_r($whereStr);
  echo "<br>";
  print_r($checkedArray);
  echo "<br>";
  echo "<br>";
  
  if ($whereStr != '') {
    $sql .= " intersect ";
    $sql .= $sqlBase;
    $sql .= $whereStr;
    $sql .= " AND (" . implode(" OR ", $checkedArray) . ")";
  }
}

echo $sql;
?>