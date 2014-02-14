function comboAutor(){
	var opc = "autor";
	//alert("hola");
	$.ajax({
		type: "POST",
		url:"../Intranet/Combos.php",
		data:{ opc:opc},
		success: function(data){
			$("#cboAutor").html(data);
		}
	});
}

function comboCategoria(){
	var opc = "categoria";
	//alert("hola");
	$.ajax({
		type: "POST",
		url:"../Intranet/Combos.php",
		data:{ opc:opc},
		success: function(data){
			$("#cboCategoria").html(data);
		}
	});
}

function comboGenero(){
	var opc = "genero";
	//alert("hola");
	$.ajax({
		type: "POST",
		url:"../Intranet/Combos.php",
		data:{ opc:opc},
		success: function(data){
			$("#cboGenero").html(data);
		}
	});
}

function comboTipo(){
	var opc = "tipo";
	//alert("hola");
	$.ajax({
		type: "POST",
		url:"../Intranet/Combos.php",
		data:{ opc:opc},
		success: function(data){
			$("#cboTipo").html(data);
		}
	});
}

/*=================== COMBOS CONTENIDO 2 =============================*/
function comboOpcCapitulo(){
	var opc = "opcapitulo";
	$.ajax({
		type: "POST",
		url:"../Intranet/Combos.php",
		data:{ opc:opc},
		success: function(data){
			$("#cboServidor").html(data);
		}
	});
}

/*=================== AUTOCOMPLETAR =============================*/
function autoVideo(){
	//var opc = "video";
	//var caja = $("#desvideo").val();
	/*$.ajax({
		 url:"../Intranet/Autocompletar.php",
		 type:"POST",
		 dataType: "jsonp",
		 data:{opc:opc, caja:caja},
		 success:function(data){
			 $("#desvideo").autocomplete({
				source: data,
				minLength: 2,
				select: function(event, ui) {
                    $('#idvideo').val(ui.item.id);
                    //$('#desvideo').val(ui.item.value);
                }
			 });
		 }   
	});*/
	//alert("holaa");

	$("#desvideo").autocomplete({
                source: "../Intranet/Autocompletar.php",
                minLength: 2,
                select: function(event, ui) {
                    $('#idvideo').val(ui.item.id);
                    //$('#desvideo').val(ui.item.value);
                }
            });
}

/*=================== REGISTRAR=============================*/

function registrarGeneral(){
    $("form").on('submit', function(e) {
        e.preventDefault();
	var opc = 'regvideo';	
	var titulo = $('#titulo').val();
	var descripcion = $('#descripcion').val();
	var portada = $('#portada').val();
	var trailer = $('#trailer').val();
	var emision = $('#emision').val();
	var autor = $('select[name=miautor]').val();	
	var categoria = $('select[name=micategoria]').val();
	var genero = $('select[name=migenero]').val();
	var tipo = $('select[name=mitipo]').val();
	
	$.ajax({
            type: "POST",
            url: "../Intranet/Registrar.php",
            data: {opc:opc, 
					titulo:titulo,
                    descripcion:descripcion,
                    portada:portada,
                    trailer:trailer,
                    emision:emision,
                    autor:autor,
                    categoria:categoria,
                    genero:genero,
                    tipo:tipo
                  },
            success: function(data){
                  if(data === "correcto"){                            
                          
                          $("#mensaje").html("<h1>BIENNNNNNNNN</h1>");
                  }
            }		  
	}).done(function() {//limpiar cajas y select
			$("#titulo").val("");
			$("#descripcion").val("");
			$("#portada").val("");
			$("#trailer").val("");
			$("#emision").val("");			
			$("#miautor").val($("#miautor option:first").val());
			$("#micategoria").val($("#micategoria option:first").val());
			$("#migenero").val($("#migenero option:first").val());
			$("#mitipo").val($("#mitipo option:first").val());
			//$("#mensaje").fadeOut( 4000, "linear");
		  });
     });       
}

function registrarCapitulo(){
    //$("#formCapitulo").on('submit', function(e) {
        //e.preventDefault();
	var opc = 'regcapitulo';	
	var capitulo = $('#capitulo').val();
	var idvideo = $("#idvideo").val();
	var opcapitulo = $('select[name=miopcion]').val();
	var url = $('#url').val();
	alert(idvideo);
	//idvideo = $('.idvideo').val("");
	/*$.ajax({
            type: "POST",
            url: "../Intranet/Registrar.php",
            data: {opc:opc, 
					capitulo:capitulo,
					idvideo:idvideo,
					opcapitulo:opcapitulo,
					url:url
                  },
            success: function(data){
                  if(data === "correcto"){                            
                          
                          $("#mensaje").html("<h1>BIENNNNNNNNN</h1>");
                  }
            }		  
	}).done(function() {//limpiar cajas y select
			$("#capitulo").val("");
			$("#idvideo").val("");
			$("#url").val("");			
			$("#miopcion").val($("#miopcion option:first").val());
			//$("#mensaje").fadeOut( 4000, "linear");
		  });*/
     //});       
}

/*=================== POPUP =============================*/
var row = 0; // variable global sirve como id para eliminar las filas
function openRegistro(id){//
	row = 0;
	var opc = "popup_capitulo";
	$.ajax({
		type: 'POST',
		url: 'Popup.php',
		data: {opc:opc, idvideo:id},//parametros
		success: function(data){
           $("#AddCapitulo").html(data);
           //console.log(data);  
		}
	});
}

function addFila() {
	
    //variables para agregar a la lista detalle
	var  idservidor = $("select[name=miservidor]").val();			
	var servidor = $("#miservidor option[value="+idservidor+"]").text();
	var  url = $("#url").val();
	var  subtitulo = $("#subtitulo").val();
	var  fansub = $("#fansub").val();	
	var eliminar = '<div class="hidden-phone visible-desktop action-buttons"><a onclick="deleteFila('+row+');" class="red" href="#"><i class="icon-trash bigger-130"></i></a></div>';
	row++;
	console.log(idservidor);
    $('#tabla-capitulo').dataTable().fnAddData( [
        idservidor,
        servidor,
        url,		
        subtitulo,
		fansub,
		eliminar] );
}

function deleteFila(id){	
	console.log(id);
	$('#tabla-capitulo').dataTable().fnDeleteRow(id);
}








