<?php
	include_once('../conexion.php');
	//$opc = $_POST['opc'];
	$term = $_GET['term'];
	$sql = "";
	$res = "";
	$caja = "";
	$return_arr = array();
	/*switch($opc){
		case 'video': */
				//$caja = $_POST['caja'];//descripción vídeo
				$sql = "SELECT IdVideos, Titulo FROM videos WHERE Titulo like '%".mysql_real_escape_string($term)."%'";
				$res = mysql_query($sql);
				
				while($video = mysql_fetch_array($res, MYSQL_ASSOC)){
							$row_array['id'] = $video['IdVideos'];
							$row_array['value'] = $video['Titulo'];							
							 
							array_push($return_arr,$row_array);
					}
				
				mysql_close($conexion);
				echo json_encode($return_arr);
		/*break;
	}*/
	
	
?>