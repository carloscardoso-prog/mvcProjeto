<?php

function get_courses()
{
	include 'data.php';

	return $courses;
}

function find_by_semester($semester)
{
	include 'data.php';
	return (array_key_exists($semester, $courses) ? $courses[$semester] : 'Invalid Semester');
}
?>