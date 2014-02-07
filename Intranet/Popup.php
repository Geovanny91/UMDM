<?php

	$opc = $_POST['opc'];
	$idvideo = $_POST['idvideo'];
	switch($opc){
		case 'popup_capitulo': 
				
                 echo '<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">Registrar Capitulo</h3>
                        </div>
                        <div class="modal-body" style="margin-left: 16%;">
                            <form id="formCapitulo" method="POST">
                                <table>
									<tr>
                                        <td><input type="hidden" name="idvideo" id="idvideo" value="'.$idvideo.'" /></td></tr>
                                    <tr><td>Capítulo</td>                        
                                        <td><input type="text" name="capitulo" id="capitulo" required="required" /></td></tr>
                                    <tr><td>Url</td>                        
                                        <td><input type="text" name="url" id="url" required="required" /></td></tr>                                    
                                    <tr><td>Opciones</td>
                                        <td id="cboOpciones"></td></tr>
                                </table>   
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" onclick="registrarCapitulo();"><i class="icon-ok bigger-110"></i>Submit</button>
                            &nbsp; &nbsp; &nbsp;<button class="btn" type="reset"><i class="icon-undo bigger-110"></i>Reset</button>
                        </div>
						<script>
						comboOpcCapitulo();
						</script>'
						;
		break;
	}
	
?>