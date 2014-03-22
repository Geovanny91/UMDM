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

				$sql = "insert into video (titvid, desvid, porvid, travid, fecvid, idpersona, idcatvideo, idgenero, idtipo, estvid)
					values ('$Titulo', '$Descripcion', '$Portada', '$Trailer', '$FechaEmision', $IdPersona, $IdCatVideo, $IdGeneros, $IdTipo, 1)";
				$res = mysql_query($sql);					
				echo "correcto";
				
				mysql_close($conexion);
		break;
		
		case 'regcapitulo':
				/*-- Variables para tabla capitulos --*/
				$NombreCap = $_POST['capitulo'];				
				$IdVideos = $_POST['idvideo'];
				//$audiourl = $_POST['audiourl']; se debe implementar una tabla quizás
				$fechasubida = $_POST['fechasubida'];
				$fechasubida = date("d-m-Y",strtotime($fechasubida));
				/*-- Variables para tabla detalleservidor --*/
				$detallecap = $_POST['detallecap'];
				$json = json_decode($detallecap, true);				
				
				$sql = "INSERT INTO capitulo(nomcap, audcap, feccap, estcap, idvideo, idusuario)
						VALUES ('$NombreCap', 'Japones', '$fechasubida', 1, $IdVideos, 'id session');";
				$res = mysql_query($sql);
				
				if (!$res)	echo "error code: ".$sql. mysql_errno($conexion);
								
				$sql = "SELECT MAX(idcapitulo) AS lastID FROM capitulo";//luego aqui poner condicion con el usuario que registra
				$res = mysql_query($sql);
				$id = mysql_fetch_assoc($res);
				$idcapitulo = $id["lastID"];
				
				if (!$res)	echo "error code: ".$sql. mysql_errno($conexion);
								
				foreach ($json as $data) {
					$idservidor = (int)$data["idservidor"];
					$urlcapitulo = $data["urlcapitulo"];
					$subtitulo = $data["subtitulo"];
					$fansub =$data["fansub"];
					
					$other_sql = "INSERT INTO detallecapitulo (urldcap, subdcap, fandcap, idcapitulo, idservidor)
										VALUES ('$urlcapitulo', '$subtitulo', '$fansub', $idcapitulo, $idservidor)";
					$res = 	mysql_query($other_sql);
				}
				
				if (!$res)	echo "error code: ".$sql. mysql_errno($conexion);
				else
					echo "correcto";
								
				//mysql_free_result($res);
				mysql_close($conexion);
		break;
	}
 ?>