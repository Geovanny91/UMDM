<?php
	include_once('../conexion.php');
	$opc = $_POST['opc'];
	$sql ="";
	$res = "";
	switch($opc){
		case 'autor': 
				$sql = "SELECT IdPersona, Nombre, ApellidoPa, ApellidoMa FROM persona WHERE EstadoPer=1;";
				$res = mysql_query($sql);
                                
				echo '<select class="chzn-select" data-placeholder="Selecciona un Autor" name="miautor" id="miautor"><option value=""></option>';	
					while($autor = mysql_fetch_array($res)){
						echo '<option value='.$autor[0].'>'.$autor[1].' '.$autor[2].' '.$autor[3].'</option>';			  
					}
				echo '</select>';
                                
				mysql_free_result($res);
				mysql_close($conexion);
		break;
		
		case 'categoria': 
			
			$sql = "select IdCatVideo, Descripcion from categoriavideo where Estado=1;";
			$res = mysql_query($sql);
			echo '<div style="margin-top: 10px;">';
			echo '<select class="chzn-select" data-placeholder="Selecciona una Categoria" name="micategoria" id="micategoria"><option value=""></option>';	
				while($categoria = mysql_fetch_array($res)){
					echo '<option value='.$categoria[0].'>'.$categoria[1].' </option>';
				}
			echo '</select>';
                        echo '</div>';
			mysql_free_result($res);
			mysql_close($conexion);			
		break;
		
		case 'genero':
			$sql = "select IdGeneros, Descripcion from generos where EstadoGen=1;";
			$res = mysql_query($sql);
			echo '<div style="margin-top: 10px;">';
			echo '<select class="chzn-select" data-placeholder="Selecciona un Genero" name="migenero" id="migenero"><option value=""></option>';	
				while($genero = mysql_fetch_array($res)){
					echo '<option value='.$genero[0].'>'.$genero[1].' </option>';
				}
			echo '</select>';
                        echo '</div>';
			mysql_free_result($res);
			mysql_close($conexion);
		break;
		
		case 'tipo':
			$sql = "select * from tipo;";
			$res = mysql_query($sql);
			echo '<div style="margin-top: 10px;">';
			echo '<select class="chzn-select"  data-placeholder="Selecciona un Tipo" name="mitipo" id="mitipo"><option value=""></option>';	
				while($tipo = mysql_fetch_array($res)){
					echo '<option value='.$tipo[0].'>'.$tipo[1].' </option>';
				}
			echo '</select>';
                        echo '</div>';
			mysql_free_result($res);
			mysql_close($conexion);
			
		break;
		/* ==========================  COMBOS PARA CONTENIDO2.PHP  ========================================*/
		case 'opcapitulo'://opcion capitulo
			$sql = "SELECT IdOpCap, AudioCap, SubCap FROM opcionescapitulo;";
			$res = mysql_query($sql);
			
			echo '<select name="miopcapitulo" id="miopcapitulo"><option value="">SELECCIONAR</option>';	
				while($opcapitulo = mysql_fetch_array($res)){
					echo '<option value='.$opcapitulo[0].'>'.$opcapitulo[1].'  '.$opcapitulo[2].'</option>';
				}
			echo '</select>';
			mysql_free_result($res);
			mysql_close($conexion);
		break;
	}

echo '<script type="text/javascript">
            $(function() {	
                $(".chzn-select").chosen();
            });
        </script>';	
?>        