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
				$NombreCap = $_POST['capitulo'];				
				$IdVideos = $_POST['idvideo'];
				$IdOpCap = $_POST['opcapitulo'];
				$UrlCap = $_POST['url'];
				
				$sql = "INSERT INTO capitulos (NombreCap, EstadoCap, IdVideos, IdOpCap, UrlCap)
						VALUES ('$NombreCap', 1, $IdVideos, $IdOpCap, '$UrlCap');"
				$res = mysql_query($sql);
				echo "correcto";
				mysql_free_result($res);
				mysql_close($conexion);
		break;
	}
	
	
	
	
 ?>