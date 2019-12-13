select title from courses
inner JOIN courses_tags ON fk_course_id = course_id
INNER JOIN tags ON fk_tag_id = tag_id
where tag = "Advanced"
intersect
select title from courses
inner JOIN courses_tags ON fk_course_id = course_id
INNER JOIN tags ON fk_tag_id = tag_id
where tag = "HTML5"
