<?php

$opc = $_POST['opc'];
$idvideo = $_POST['idvideo'];
switch ($opc) {
    case 'popup_capitulo':

        echo '<div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
                            <h3 id="myModalLabel">Registrar Capítulo</h3>
                        </div>
					<form id="formCapitulo" method="POST" >	
                        <div class="modal-body" style="margin-left: 16%;">
                            
                                <table>
									<tr>
                                        <td><input type="hidden" name="idvideo" id="idvideo" value="' . $idvideo . '" /></td></tr>
                                    <tr><td>Capítulo</td>                        
                                        <td><input type="text" name="capitulo" id="capitulo" required="required" /></td></tr>     
                                        <tr><td>Fecha</td>                        
                                        <td><input type="text" data-date-format="yyyy-mm-dd" class="span10 date-picker" name="fecsubida" id="fecsubida" required="required" /></td></tr>     
                                    <tr><td>Servidor</td>                        
                                        <td id="cboServidor"></td></tr>
                                    <tr><td>Url</td>                        
                                        <td><input type="text" name="url" id="url" required="required" /></td>										
									<tr><td>Sub Título</td>                        
                                        <td><input type="text" name="subtitulo" id="subtitulo" required="required" /></td>
										<td><input style="float: left;" type="button" class="btn btn-info" value="Agregar" onclick="addFila();" ></td></tr>
									<tr><td>Fan Sub</td>                        
                                        <td><input type="text" name="fansub" id="fansub" required="required" /></td></tr>
									<tr><td id="msg"></td></tr>
                                </table>   
                            
                        </div>
                       
                        <div class="" style="margin-left:5%;margin-top:-5%;margin-right:5%;">
                            <table id="tabla-capitulo" class="table table-striped table-bordered table-hover" style="list-style: none;">
                            <thead class="ui-state-active">
								<tr>
									<th hidden >idServ</th>
									<th>Servidor</th>
									<th>Enlace</th>                            
									<th hidden >SubT</th>
									<th hidden >FanS</th>
									<th>Elim</th>
								</tr>
							</thead>   
							<tbody  class="ui-state-default">							
								
							</tbody>
							</table>
						</div>
                        <div class="modal-footer">							
                            <button type="submit" class="btn btn-info" ><i class="icon-ok bigger-110"></i>Submit</button>
                            &nbsp; &nbsp; &nbsp;<button class="btn" type="reset"><i class="icon-undo bigger-110"></i>Reset</button>
                        </div>
					</form><!--se cambio el form, ya que estaba no estaba encerrando a los botones-->
		<script>
		
		$(function() {
			registrarCapitulo();
		
			comboOpcCapitulo();	
			
			$(".date-picker").datepicker().next().on(ace.click_event, function(){
				$(this).prev().focus();
			});
			
			var tablacap = $ ("#tabla-capitulo"). dataTable({	
				//"bPaginate": false,
				"bFilter": false,
				//"bInfo": false,	
				//"sDom": "t",			
				"aoColumnDefs" : [//ocultar columnas
						{ "bVisible" : false , "aTargets" : [0]},
						{ "bVisible" : false , "aTargets" : [3]},
						{ "bVisible" : false , "aTargets" : [4]}						
				],				
				"oLanguage":{
                    "sProcessing":     "Cargando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Total:  _TOTAL_ registros",//Total:  _TOTAL_ registros
                    "sInfoEmpty":      ""
				},
				"aaSorting": [[ 0, "desc"]],//ordenar				
				"iDisplayLength": 5,
                "aLengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]]
			});
		});	
		
		</script>' ;
        break;
}
?>

