<?php 
	include_once '../conexion.php';
	$opc=$_POST['opc'];
	switch($opc){
		case 'regvideo':
				$Titulo = $_POST['titulo'];
				$Descripcion = $_POST['descripcion'];
				$Portada = $_POST['portada'];
				$Trailer = $_POST['trailer'];
				$FechaEmision = $_POST['emision'];
				$IdPersona = $_POST['autor'];
				$IdCatVideo = $_POST['categoria'];
				$IdGeneros = $_POST['genero'];
				$IdTipo = $_POST['tipo'];

				$sql = "insert into videos (Titulo, Descripcion, Portada, Trailer, FechaEmision, IdPersona, IdCatVideo, IdGeneros, IdTipo, EstadoEmi)
					values ('$Titulo', '$Descripcion', '$Portada', '$Trailer', '$FechaEmision', $IdPersona, $IdCatVideo, $IdGeneros, $IdTipo, 1)";
				$res = mysql_query($sql);					
				echo "correcto";
				mysql_free_result($res);
				mysql_close($conexion);
		break;
		
		case 'regcapitulo':
				/*-- Variables para tabla capitulos --*/
				$NombreCap = $_POST['capitulo'];				
				$IdVideos = $_POST['idvideo'];
				//$audiourl = $_POST['audiourl']; se debe implementar una tabla quizás
				//$fechasubida = $_POST['fechasubida'];
				/*-- Variables para tabla detalleservidor --*/
				$detallecap = $_POST['detallecap'];
				$json = json_decode($detallecap, true);				
				
				$sql = "INSERT INTO capitulos (NombreCap, audiourl, fechasubida, EstadoCap, IdVideos)
						VALUES ('$NombreCap', 1, 'Japones', '$fechasubida', 1, $IdVideos);";
				$res = mysql_query($sql);
				mysql_free_result($res);
				
				$sql = "SELECT MAX(idCapitulos) AS lastID FROM capitulos";
				$res = mysql_query($sql);
				$id = mysql_fetch_assoc($res);
				$idcapitulo = $id["lastID"];

				mysql_free_result($res);
				
				foreach ($json as $data) {
					$idservidor = (int)$data["idservidor"];
					$urlcapitulo = $data["urlcapitulo"];
					$subtitulo = $data["subtitulo"];
					$fansub =$data["fansub"];					
					
					$other_sql = "INSERT INTO detallecapitulo (urlcapitulo, subtitulo, fansub, idcapitulo, idservidor)
										VALUES ('$urlcapitulo', '$subtitulo', '$fansub', $idcapitulo, $idservidor)";
					$res = 	mysql_query($other_sql);				
				   //echo $data["servidor"] . "=" . $data["enlace"];
				}
				
				mysql_free_result($res);
				mysql_close($conexion);
		break;
	}
	
	
	
	
 ?>