<?php
include_once '../conexion.php';
$sql = "SELECT idvideo, titvid, estvid FROM video;";
$res = mysql_query($sql);
?>
<div class="row-fluid">
    <div class="box span12">
        <h3 class="header smaller lighter blue">Registrar Capitulos</h3>
        <div class="page-content">
            <div class="row-fluid">
                <div class="span12">
                    <div class="row-fluid">
                        <div class="table-header">
                            Lista de Animes Registrados
                        </div>
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th hidden></th>
                                    <th>Nombre</th>
                                    <th class="hidden-480">Estado</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($video = mysql_fetch_array($res)) {
                                    echo '
                                <tr>
                                    <td hidden>' . $video[0] . '</td>
                                    <td>' . $video[1] . '</td>
                                    
                                    <td class="hidden-480">
                                        <span class="label label-warning">' . $video[2] . '</span>
                                    </td>

                                    <td class="td-actions">
                                        <div class="hidden-phone visible-desktop action-buttons">
                                            <a class="blue" href="#AddCapitulo"  onclick="openRegistro('.$video[0].');"  data-toggle="modal">
                                                <i class="icon-zoom-in bigger-130"></i>
                                            </a>

                                            <a class="green" href="#Editar" data-toggle="modal">
                                                <i class="icon-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="icon-trash bigger-130"></i>
                                            </a>
                                        </div>
                                    </td>

                                </tr>';
                                }
                                ?>								
                            </tbody>
                        </table>
                    </div>
                    <!--/. POPUP PARA REGISTRAR CAPITULO -->
                    <div id="AddCapitulo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        
                    </div>
                    <!--/. POPUP PARA EDITAR ANIME -->
                    <div id="Editar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">Modificar Anime</h3>
                        </div>
                        <div class="modal-body" style="margin-left: 16%;">
                            <form method="POST">
                                <table>
                                    <tr><td>Título</td>                        
                                        <td><input type="text" name="titulo" id="titulo" required="required" /></td></tr>
                                    <tr><td>Descripcion</td>                        
                                        <td><input type="text" name="descripcion" id="descripcion" required="required" /></td></tr>
                                    <tr><td>Portada</td>
                                        <td><input type="text" name="portada" id="portada" required="required"  class="form-control"/></td></tr>
                                    <tr><td>Trailer</td>                        
                                        <td><input type="text" name="trailer" id="trailer" required="required" /></td></tr>
                                    <tr><td>Emisión</td>                        
                                        <td><input type="text" data-date-format="yyyy-mm-dd" class="span10 date-picker" name="emision" id="emision" required="required" /></td></tr>
                                </table>      
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Actualizar</button>                           
                        </div>
                    </div>
                </div><!--/.span-->
            </div><!--/.row-fluid-->
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
		
			var oTable1 = $('#sample-table-2').dataTable( {						 
				'oLanguage':{
					'sProcessing':     'Cargando...',
					'sLengthMenu':     'Mostrar _MENU_ registros',
					'sZeroRecords':    'No se encontraron resultados',
					'sEmptyTable':     'Ning�n dato disponible en esta tabla',
					'sInfo':           'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros',
					'sInfoEmpty':      'Mostrando registros del 0 al 0 de un total de 0 registros',
					'sInfoFiltered':   '(filtrado de un total de _MAX_ registros)',
					'sInfoPostFix':    '',
					'sSearch':         'Buscar:',
					'sUrl':            '',
					'sInfoThousands':  '',
					'sLoadingRecords': 'Cargando...',
					'oPaginate': {
						'sFirst':    'Primero',
						'sLast':     '�ltimo',
						'sNext':     'Siguiente',
						'sPrevious': 'Anterior'
					},
					'oAria': {
						'sSortAscending':  ': Activar para ordenar la columna de manera ascendente',
						'sSortDescending': ': Activar para ordenar la columna de manera descendente'
					}
				}
			}
		);

        /*		
        $('table th input:checkbox').on('click' , function(){
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox')
            .each(function(){
                this.checked = that.checked;
                $(this).closest('tr').toggleClass('selected');
            });
						
        });*/
			
			
        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();
			
            var off2 = $source.offset();
            var w2 = $source.width();
			
            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }
    });
</script>
