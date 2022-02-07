<?php
	include 'model.php';

 	$cursos_lista = get_courses();
	
	$page_action = (!empty($_GET['option']) ? $_GET['option'] : '');
	switch($page_action){
		case 'bySemester':
				$semestre = (!empty($_GET['semester']) ? $_GET['semester'] : '');
				$nomeCurso = find_by_semester($semestre);
				echo $nomeCurso;
			break;
	}


	include 'view.php';
?>