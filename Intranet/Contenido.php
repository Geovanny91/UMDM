<?php
include_once('../conexion.php');
$sql = "SELECT IdPersona, Nombre, ApellidoPa, ApellidoMa FROM persona WHERE EstadoPer = 1;";
$res = mysql_query($sql);
?>
<div class="row-fluid">
    <div class="box span12">
        <h3 class="header smaller lighter blue">Registrar Anime</h3>
        <div class="page-content">
            <div class="box-content">
                <form method="POST" >
                    <table>

                        <tr><td>Título</td>                        
                            <td><input type="text" name="titulo" id="titulo" required="required" /></td></tr>
                        <tr><td>Descripcion</td>                        
                            <td><input type="text" name="descripcion" id="descripcion" required="required" /></td></tr>
                        <tr><td>Portada</td>
                            <td><input type="text" name="portada" id="portada" required="required" /></td></tr>
                        <tr><td>Trailer</td>                        
                            <td><input type="text" name="trailer" id="trailer" required="required" /></td></tr>
                        <tr><td>Emisión</td>                        
                            <td><input type="text" data-date-format="yyyy-mm-dd" class="span10 date-picker" name="emision" id="emision" required="required" /></td></tr>
                        <tr><td>Autor</td>                        
                            <td id="cboAutor"></td></tr>
                        <tr><td>Categoria</td>                        
                            <td id="cboCategoria"></td></tr>
                        <tr><td>Género</td>                        
                            <td id="cboGenero"></td></tr>
                        <tr><td>Tipo</td>                        
                            <td id="cboTipo"></td>                   
                            <td><input id="tags" type="text" class="form-control" /></td></tr>                     
                        <tr><td colspan="2"><button style="margin-top: 10px;" type="submit" class="btn btn-info"><i class="icon-ok bigger-110"></i>Submit</button>
                                &nbsp; &nbsp; &nbsp;<button style="margin-top: 10px;" class="btn" type="reset"><i class="icon-undo bigger-110"></i>Reset</button></td></tr>
                        <tr><td colspan="2"><p id="mensaje"></p></td></tr>
                    </table>                
                </form>
            </div>
        </div>
    </div>
</div>
<script> registrarGeneral(); </script>
<script type="text/javascript">
    $(function() {
        comboAutor();//llamando al combo
        comboCategoria();
        comboGenero();
        comboTipo();                         

        $('.date-picker').datepicker().next().on(ace.click_event, function(){
            $(this).prev().focus();
        });
        
        	 var availableTags = [
					"ActionScript",
					"AppleScript",
					"Asp",
					"BASIC",
					"C",
					"C++",
					"Clojure",
					"COBOL",
					"ColdFusion",
					"Erlang",
					"Fortran",
					"Groovy",
					"Haskell",
					"Java",
					"JavaScript",
					"Lisp",
					"Perl",
					"PHP",
					"Python",
					"Ruby",
					"Scala",
					"Scheme"
				];
				$( "#tags" ).autocomplete({
					source: availableTags
				});
			
				//custom autocomplete (category selection)
				$.widget( "custom.catcomplete", $.ui.autocomplete, {
					_renderMenu: function( ul, items ) {
						var that = this,
						currentCategory = "";
						$.each( items, function( index, item ) {
							if ( item.category != currentCategory ) {
								ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
								currentCategory = item.category;
							}
							that._renderItemData( ul, item );
						});
					}
				});
			
    });
</script>

