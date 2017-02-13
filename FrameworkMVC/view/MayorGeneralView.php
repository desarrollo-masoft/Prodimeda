 <!DOCTYPE HTML>
<html lang="es">

      <head>
      
        <meta charset="utf-8"/>
        <title>Mayor General - contabilidad 2016</title>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  			   
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
 		
 		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
		
		<script>
		    webshims.setOptions('forms-ext', {types: 'date'});
			webshims.polyfill('forms forms-ext');
		</script>
		
       <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
                
            
        </style>
         
         	<script>
	$(document).ready(function(){
			$("#fecha_hasta").change(function(){
				 var startDate = new Date($('#fecha_desde').val());

                 var endDate = new Date($('#fecha_hasta').val());

                 if (startDate > endDate){
 
                    $("#mensaje_fecha_hasta").text("Fecha desde no debe ser mayor ");
		    		$("#mensaje_fecha_hasta").fadeIn("slow"); //Muestra mensaje de error  
		    		$("#fecha_hasta").val("");

                        }
				});

			 $( "#fecha_hasta" ).focus(function() {
				  $("#mensaje_fecha_hasta").fadeOut("slow");
			   });
			});
        </script>
        
    <script type="text/javascript">
	$(document).ready(function(){
		//load_juicios(1);

		$("#buscar").click(function(){

			load_mayor_general(1);
			
			});
	});

	
	function load_mayor_general(pagina){
		
		//iniciar variables
		 var con_id_entidades=$("#id_entidades").val();
		 var con_id_tipo_comprobantes=$("#id_tipo_comprobantes").val();
		 var con_reporte=$("#reporte").val();
		 var con_fecha_desde=$("#fecha_desde").val();
		 var con_fecha_hasta=$("#fecha_hasta").val();

		  var con_datos={
				  id_entidades:con_id_entidades,
				  id_tipo_comprobantes:con_id_tipo_comprobantes,
				  reporte:con_reporte,
				  fecha_desde:con_fecha_desde,
				  fecha_hasta:con_fecha_hasta,
				  action:'ajax',
				  page:pagina
				  };


		$("#mayor_general").fadeIn('slow');
		$.ajax({
			url:"<?php echo $helper->url("MayorGeneral","MayorGeneral");?>",
            type : "POST",
            async: true,			
			data: con_datos,
			 beforeSend: function(objeto){
			$("#mayor_general").html('<img src="view/images/ajax-loader.gif"> Cargando...');
			},
			success:function(data){
				$(".div_mayor_general").html(data).fadeIn('slow');
				$("#mayor_general").html("");
			}
		})
	}
	
	</script>

    </head>
    <body style="background-color: #d9e3e4;">
    
       <?php include("view/modulos/head.php"); ?>
       <?php include("view/modulos/modal.php"); ?>
       <?php include("view/modulos/menu.php"); ?>
       
       <?php
       
       $sel_id_entidades = "";
       $sel_id_tipo_comprobantes="";
       $sel_reporte="";
       $sel_fecha_desde="";
       $sel_fecha_hasta="";
        
       if($_SERVER['REQUEST_METHOD']=='POST' )
       {
       	$sel_id_entidades = $_POST['id_entidades'];
        $sel_id_tipo_comprobantes=$_POST['id_tipo_comprobantes'];
       	$sel_reporte=$_POST['reporte'];
        $sel_fecha_desde=$_POST['fecha_desde'];
       	$sel_fecha_hasta=$_POST['fecha_hasta'];
       
       }
       
       $arrayOpciones=array("detallado"=>'DETALLADO',"simplificado"=>'SIMPLIFICADO');
       ?>
 
 
  
  <div class="container">
  
  <div class="row" style="background-color: #ffffff;">
  
       <!-- empieza el form --> 
       
      <form action="<?php echo $helper->url("MayorGeneral","MayorGeneral"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12" target="_blank">
         
         <!-- comienxza busqueda  -->
         <div class="col-lg-12" style="margin-top: 10px">
         
       	 <h4 style="color:#ec971f;">Mayor General</h4>
       	 
       	 
       	 <div class="panel panel-default">
  			<div class="panel-body">
  			
  					
          <div class="col-xs-2">
			  	<p  class="formulario-subtitulo">Entidades:</p>
			  	<select name="id_entidades" id="id_entidades"  class="form-control" readonly>
			  		<?php foreach($resultEnt as $res) {?>
						<option value="<?php echo $res->id_entidades; ?>"<?php if($sel_id_entidades==$res->id_entidades){echo "selected";}?>><?php echo $res->nombre_entidades;  ?> </option>
			            <?php } ?>
				</select>
		 </div>
		 
		 <div class="col-xs-2 ">
			  	<p  class="formulario-subtitulo">Tipo Comprobantes:</p>
			  	<select name="id_tipo_comprobantes" id="id_tipo_comprobantes"  class="form-control" >
			  		<option value="0"><?php echo "--TODOS--";  ?> </option>
					<?php foreach($resultTipCom as $res) {?>
						<option value="<?php echo $res->id_tipo_comprobantes; ?>"<?php if($sel_id_tipo_comprobantes==$res->id_tipo_comprobantes){echo "selected";}?> ><?php echo $res->nombre_tipo_comprobantes;  ?> </option>
			            <?php } ?>
				</select>

         </div>
         
          <div class="col-xs-2 ">
			  	<p  class="formulario-subtitulo" >Reporte</p>
			  	<select name="reporte" id="reporte"  class="form-control">
					<?php foreach($arrayOpciones as $res=>$val) {?>
						<option value="<?php echo $res; ?>" <?php if($sel_reporte==$res){echo "selected";}?>><?php echo $val;  ?> </option>
					<?php } ?>
		        </select>
         </div>
         
         <div class="col-xs-2 ">
         		<p class="formulario-subtitulo" >Desde:</p>
			  	<input type="date"  name="fecha_desde" id="fecha_desde" value="<?php echo $sel_fecha_desde;?>" class="form-control "/> 
			    <div id="mensaje_fecha_desde" class="errores"></div>
		 </div>
         
          <div class="col-xs-2 ">
          		<p class="formulario-subtitulo" >Hasta:</p>
			  	<input type="date"  name="fecha_hasta" id="fecha_hasta" value="<?php echo $sel_fecha_hasta;?>" class="form-control "/> 
			    <div id="mensaje_fecha_hasta" class="errores"></div>
		</div>
		 
  			</div>
  		 <div class="col-lg-12">
		 <div class="col-lg-12">
	     </div>
	     </div>
  		
  		<div class="col-lg-12" style="text-align: center; margin-top: 30px">
  		    
		 <button type="button" id="buscar" name="buscar" value="Buscar"   class="btn btn-info" style="margin-top: 10px;"><i class="glyphicon glyphicon-search"></i></button>
		 <button type="submit" id="reporte_rpt" name="reporte_rpt" value="Reporte"   class="btn btn-success" style="margin-top: 10px;"><i class="glyphicon glyphicon-print"></i></button>         
	  
	 
	     </div>
		 
		</div>
        	
		 </div>
		 
		 
		 <div class="col-lg-12">
		 
	     <div class="col-lg-12">
	     
	     <div style="height: 200px; display: block;">
		
		 <h4 style="color:#ec971f;"></h4>
			  <div>					
					<div id="mayor_general" style="position: absolute;	text-align: center;	top: 10px;	width: 100%;display:none;"></div><!-- Carga gif animado -->
					<div class="div_mayor_general" ></div><!-- Datos ajax Final -->
		      </div>
		       <br>
				  
		 </div>
		 
		 </div>
		 
		 <?php /* ?> 
		 <div class="col-lg-12">
		
		 
		 
		 <section class="" style="height:300px;overflow-y:scroll;">
        <table class="table table-hover ">
	         <tr >
	            
	    		<th style="color:#456789;font-size:80%;">Entidad</th>
	    		<th style="color:#456789;font-size:80%;">Codigo Cuenta</th>
	    		<th style="color:#456789;font-size:80%;">Nombre</th>
	    		<th style="color:#456789;font-size:80%;">Concepto</th>
	    		<th style="color:#456789;font-size:80%;">Saldo Inicial</th>
	    		<th style="color:#456789;font-size:80%;">Debe</th>
	    		<th style="color:#456789;font-size:80%;">Haber</th>
	    		<th style="color:#456789;font-size:80%;">Saldo Final</th>
	    		<th style="color:#456789;font-size:80%;">Fecha</th>
	    	    <th></th>
	    		<th></th>
	  		</tr>
	        
           <?php  $paginas =   0;  ?>
		    <?php  $registros = 0; ?>
	  		
	            <?php if (!empty($resultSet)) {  foreach($resultSet as $res) {?>
	        		<tr>
	        		
	 	               <td style="color:#000000;font-size:80%;"> <?php echo $res->nombre_entidades; ?>     </td> 
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->codigo_plan_cuentas; ?>  </td>
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->nombre_plan_cuentas; ?>  </td>
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->concepto_ccomprobantes; ?>  </td>
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->saldo_ini_mayor; ?>  </td>
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->debe_mayor; ?>  </td>
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->haber_mayor; ?>  </td>
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->saldo_mayor; ?>  </td>
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->fecha_mayor; ?>  </td>
		               <?php  $registros = $registros + 1 ; ?>
		    		</tr>
		        <?php }   ?>
            
       	</table> 
       	
       	</section>
       	<!--       			<table class="table">
				<th class="text-center">
				    	<nav>
						  <ul id="pagina" name="pagina" class="pagination">
						    <?php if ($paginasTotales > 0) {?>
						    		<?php if ($ultima_pagina > 1 ) {?>
						    			<input type="submit" value="<?php echo "<<"; ?>" id="anterior_pagina"    name="anterior_pagina" class="btn btn-info"/>
						    		<?php }?>
						    <?php for ($i = $ultima_pagina; $i< $paginasTotales+1; $i++)  { ?>
						    		
						    		<?php if ($i  < $ultima_pagina + 5) {  ?>
						    			<input type="hidden" value="<?php echo $i+1; ?>" id="ultima_pagina"    name="ultima_pagina" class="btn btn-info"/>
						    			<input type="submit" value="<?php echo $i; ?>" id="pagina"  <?php if ($i == $pagina_actual ) { echo 'style="color: #1454a3 " '; }  ?>     name="pagina" class="btn btn-info"/>
						    			
						    		<?php } ?>
						    		<?php if ($paginasTotales  == $i) {  ?>
						    			<input type="submit" value="<?php echo ">>"; ?>" id="siguiente_pagina"    name="siguiente_pagina" class="btn btn-info"/>
						    		<?php } ?>
						    		
						    <?php    } }?>
						    
						  </ul>
						</nav>	   	   
			
				</th>
				<tr class="bg-primary">
						<p class="text-center"> <strong> Registros Cargados: <?php echo  $registros?> Registros Totales: <?php echo  $registrosTotales?> </strong>  </p>
	     		  	
				</tr>			
		</table>
		 	-->
 				<?php  }   else { ?>
		        <?php }  ?>    
		        
      
     
		 
		 </div>
		 
		 <?php */?>
		 
		 </div>
		 
	
      
       </form>
     
      </div>
     
  </div>
      <!-- termina
       busqueda  -->
       
 
   </body>  

    </html>   
    
  
    