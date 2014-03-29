<?php
	include_once '../conexion.php';
	
	ob_start();
	session_start();
	
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$usuario = mysql_real_escape_string( $usuario);	

	$sql = "select * from usuario where nomusu='$usuario' and conusu = '$clave' and estusu=1";
	
	$res = mysql_query($sql);	
	$fila = mysql_fetch_array($res, MYSQL_ASSOC);
	
	if ( $fila == 0 )	header("Location: Login.php");		
	/*$hash = hash("sha256", $clave);	
	if( $hash != $data["conusu"] ){
		header("Location: Login.php");*/
	else{
			session_regenerate_id();
			$_SESSION['id_usuario'] = $fila['idusuario'];
			$_SESSION['user'] = $fila['nomusu'];
			session_write_close();
			header('Location: PrincipalIntranet.php');	
	}	
?>