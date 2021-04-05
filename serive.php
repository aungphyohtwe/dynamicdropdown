<?php 
	require 'data.php';

	$reqData = $_POST['reqData'];

	Switch($reqData) {
		case 'gvlan':
			echo json_encode(array('' => '-')); 
			break;
		case 'unol':
			echo json_encode($access); 
			break;
		case 'unol1':
			echo json_encode($unol1); 
			break;
		case 'unol2':
			echo json_encode($unol2); 
			break;
		case 'unol3':
			echo json_encode(array('' => '-')); 
			break;

	}

?>