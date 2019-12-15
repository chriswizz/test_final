select title from courses
inner JOIN courses_tags ON fk_course_id = course_id
INNER JOIN tags ON fk_tag_id = tag_id
where tag = "Advanced"
intersect
select title from courses
inner JOIN courses_tags ON fk_course_id = course_id
INNER JOIN tags ON fk_tag_id = tag_id
where tag = "HTML5"


select distinct course_id, title from courses
inner join courses_tags on course_id = fk_course_id
inner join tags on fk_tag_id = tag_id
inner join tag_categories on fk_tag_category = tag_category_id
where tag_category_id = 1
and (tag_id = 2)
intersect
select distinct course_id, title from courses
inner join courses_tags on course_id = fk_course_id
inner join tags on fk_tag_id = tag_id
inner join tag_categories on fk_tag_category = tag_category_id
where tag_category_id = 2
and (tag_id = 3 or tag_id = 4)


-- input example
$checked=[1, 3, 4, 7, 8, 10, 11];
-- get categories
$checkedWithCategories=[[1,1], [3,2], [4,2], [7,3], [8,3], [10,3], [11,3]];

$sqlBase = "select distinct course_id, title from courses
        inner join courses_tags on course_id = fk_course_id
        inner join tags on fk_tag_id = tag_id
        inner join tag_categories on fk_tag_category = tag_category_id";

$sql = $sqlBase:

for ($i=1; $i<4; $i++) {
  $whereStr = '';
  foreach ($checkedWithCategories as $checked) {
    if ($checked[1] == $i) {
      $checkedArray[] = "tag_id = $checked[0]";
      if ($whereStr = '') {
        $whereStr = "where tag_category_id = $i";
      }
    }
  }
}
