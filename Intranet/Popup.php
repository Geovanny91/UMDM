<?php

$opc = $_POST['opc'];
$idvideo = $_POST['idvideo'];
switch ($opc) {
    case 'popup_capitulo':

        echo '<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
                            <h3 id="myModalLabel">Registrar Capítulo</h3>
                        </div>
                        <div class="modal-body" style="margin-left: 16%;">
                            <form id="formCapitulo" method="POST">
                                <table>
									<tr>
                                        <td><input type="hidden" name="idvideo" id="idvideo" value="' . $idvideo . '" /></td></tr>
                                    <tr><td>Capítulo</td>                        
                                        <td><input type="text" name="capitulo" id="capitulo" required="required" /></td></tr>
                                    <tr><td>Opciones</td>
                                        <td id="cboOpciones"></td></tr> 
                                    <tr><td>Servidor</td>                        
                                        <td id="cboServidor"></td></tr>
                                    <tr><td>Url</td>                        
                                        <td><input type="text" name="url" id="url" required="required" /></td><td><input style="float: left;" type="button" class="btn btn-info" value="Agregar" onclick="AgregarProblema()"/></td></tr>                                                         
                                </table>   
                            </form>
                        </div>
                       
                        
                       
                        <div class="" style="margin-left:5%;margin-top:-5%;margin-right:5%;text-align:center">
                            <table id="sample-table-2" class="table table-striped table-bordered table-hover" style="list-style: none;">
                            <thead class="ui-state-active">
                             <tr>
                            <th hidden></th>
                            <th style="width: 30px;">Servidor</th>
                            <th style="width: 200px;">Enlace</th>
                            <th class="hidden-480" style="width: 30px;">Eliminar</th>
                            </tr>
                        </thead>   
                        <tbody class="ui-state-default" id="problemasasignados">   
                        <tr>
                        <th>asasas</th>
                        <th>http://vk.com/video228795866_166439206</th>
                        <th class="td-actions" >
                            <div class="hidden-phone visible-desktop action-buttons">
                                  <a class="red" href="#">
                                  <i class="icon-trash bigger-130"></i>
                                  </a>
                            </div>
                        </th>
                        </tr>
                        </tbody>
                </table>
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

