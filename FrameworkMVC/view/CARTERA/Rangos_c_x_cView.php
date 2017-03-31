 <?php include("view/modulos/head.php"); ?>
      
   <!DOCTYPE HTML>
<html lang="es">

      <head>
      
        <meta charset="utf-8"/>
        <title>Rangos_c_x_c - Contabilidad 2016</title>
        <link rel="stylesheet" href="view/css/bootstrap.css">
          <script src="view/js/jquery.js"></script>
		  <script src="view/js/bootstrapValidator.min.js"></script>
		   
  
    </head>
   <body class="cuerpo">
   
       
       <?php include("view/modulos/menu.php"); ?>
       
       

 
  
  <div class="container">
  
  <div class="row" style="background-color: #FAFAFA;">
  
       <!-- empieza el form --> 
       
      <form action="<?php echo $helper->url("Rangos_c_x_c","InsertaRango_c_x_c"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-6">
            <br>
         
        	     <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
            
            <div class="well">
            <h4 style="color:#ec971f;">Insertar Rango C_X_C</h4>
  			 <hr/>
          
            <div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group">
                                  <label for="id_entidades" class="control-label">Entidad</label>
                                  <select name="id_entidades" id="id_entidades"  class="form-control" readonly >
                                  
									<?php foreach($resultEnt as $res) {?>
										<option value="<?php echo $res->id_entidades; ?>" <?php if ($res->id_entidades == $resEdit->id_entidades )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_entidades; ?> </option>
							        <?php } ?>
								   </select> 
                                  <span class="help-block"></span>
            </div>
            </div>
             <div class="col-xs-6 col-md-6">
		    <div class="form-group">
		       
			   					<label for="nombre_rangos_c_x_c" class="control-label">Nombre_Rangos_c_x_c</label>
                                  <input type="text" class="form-control" id="nombre_rangos_c_x_c" name="nombre_rangos_c_x_c" value="<?php echo $resEdit->nombre_rangos_c_x_c; ?>"  placeholder="Nombre_Rangos_c_x_c">
                                    <input type="hidden" class="form-control" id="id_rangos_c_x_c" name="id_rangos_c_x_c" value="<?php echo $resEdit->id_rangos_c_x_c; ?>"  placeholder="">
                                
                                  <span class="help-block"></span>
			</div>
		    </div>
		     <div class="col-xs-6 col-md-6">
		    <div class="form-group">
		       
			   					<label for="valor_min_c_x_c" class="control-label">Valor_Min_c_x_c</label>
                                  <input type="text" class="form-control" id="valor_min_c_x_c" name="valor_min_c_x_c" value="<?php echo $resEdit->valor_min_c_x_c; ?>"  placeholder="0.00">
                                    <input type="hidden" class="form-control" id="id_rangos_c_x_c" name="id_rangos_c_x_c" value="<?php echo $resEdit->id_rangos_c_x_c; ?>"  placeholder="">
                                
                                  <span class="help-block"></span>
			</div>
		    </div>
		     <div class="col-xs-6 col-md-6">
		    <div class="form-group">
		       
			   					<label for="valor_max_c_x_c" class="control-label">Valor_Max_c_x_c</label>
                                  <input type="text" class="form-control" id="valor_max_c_x_c" name="valor_max_c_x_c" value="<?php echo $resEdit->valor_max_c_x_c; ?>"  placeholder="0.00">
                                    <input type="hidden" class="form-control" id="id_rangos_c_x_c" name="id_rangos_c_x_c" value="<?php echo $resEdit->id_rangos_c_x_c; ?>"  placeholder="">
                                
                                  <span class="help-block"></span>
			</div>
		    </div>
            </div>
            </div>	
		    
		     <?php } } else {?>
		     
		    <div class="well">
		    <h4 style="color:#ec971f;">Insertar Rango C_X_C </h4>
            <hr/>
            <div class="row">
            <div class="col-xs-6 col-md-6">
		    <div class="form-group">
                                  <label for="id_entidades" class="control-label">Entidad</label>
                                  <select name="id_entidades" id="id_entidades"  class="form-control" readonly>
                                  
									<?php foreach($resultEnt as $res) {?>
										<option value="<?php echo $res->id_entidades; ?>"  ><?php echo $res->nombre_entidades; ?> </option>
							        <?php } ?>
								   </select> 
                                  <span class="help-block"></span>
            </div>
            </div>
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group">
		    
		     					  <label for="nombre_rangos_c_x_c" class="control-label">Nombre_Rangos_c_x_c</label>
                                  <input type="text" class="form-control" id="nombre_rangos_c_x_c" name="nombre_rangos_c_x_c" value=""  placeholder="Nombre_Rangos_c_x_c">
                                  <span class="help-block"></span>
		    </div>
		    </div>
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group">
		    
		     					  <label for="valor_min_c_x_c" class="control-label">Valor_Min_c_x_c</label>
                                  <input type="text" class="form-control" id="valor_min_c_x_c" name="valor_min_c_x_c" value=""  placeholder="0.00">
                                  <span class="help-block"></span>
		    </div>
		    </div>
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group">
		    
		     					  <label for="valor_max_c_x_c" class="control-label">Valor_Max_c_x_c</label>
                                  <input type="text" class="form-control" id="valor_max_c_x_c" name="valor_max_c_x_c" value=""  placeholder="0.00">
                                  <span class="help-block"></span>
		    </div>
		    </div>
            </div>
            </div>
		    
		   
               	
		     <?php } ?>
		     
		     
		    <div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center;" > 
            <div class="form-group">
            					  <button type="submit" id="Guardar" name="Guardar" class="btn btn-success">Guardar</button>
            </div>
            </div>
            </div>
        
       </form>
       <!-- termina el form --> 
       
       <form action="<?php echo $helper->url("Rangos_c_x_c","index"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-6">
     		<br>
     		<div class="well">  
            <h4 style="color:#ec971f;">Tipo de Rango_C_X_C Registrado</h4>
            
            <div class="row">
		    <div class="col-xs-4 col-md-4 col-lg-4">
		    
		    </div>
		  
		    </div>  
             
       
       <div class="datagrid"> 
       <section style="height:380px; overflow-y:scroll;">
       <table class="table table-hover ">
       
       <thead>
           <tr>
                    <th style="font-size:100%;">Id</th>
		    		<th style="font-size:100%;">Entidades</th>
		    		<th style="font-size:100%;">Nombre_Rangos_c_x_c</th>
		    		<th style="font-size:100%;">Valor_Min_c_x_c</th>
		    		<th style="font-size:100%;">Valor_Max_c_x_c</th>
		    		<th></th>
		    		<th></th>
		    		
	  		</tr>
	   </thead>
       <tfoot>
       		<tr>
					<td colspan="10">
						<div id="paging">
							<ul>
								<li>
									<a href="#">
						<span>Previous</span>
									</a>
								</li>
								<li>
									<a href="#" class="active">
						<span>1</span>
									</a>
								</li>
								<li>
									<a href="#">
						<span>2</span>
									</a>
								</li>
								<li>
									<a href="#">
						<span>3</span>
									</a>
								</li>
								<li>
									<a href="#">
						<span>4</span>
									</a>
								</li>
								<li>
									<a href="#">
						<span>5</span>
									</a>
								</li>
								<li>
									<a href="#">
						<span>Next</span>
									</a>
								</li>
								</ul>
						</div>
					
			</tr>
       				
       </tfoot>
       
                <?php if (!empty($resultSet)) {  foreach($resultSet as $res) {?>
	        	 
               
	   <tbody>
	   		<tr>
	   		           <td style="font-size:80%;"> <?php echo $res->id_rangos_c_x_c ; ?></td>
		               <td style="font-size:80%;"> <?php echo $res->nombre_entidades; ?>     </td> 
		               <td style="font-size:80%;"> <?php echo $res->nombre_rangos_c_x_c; ?>     </td>
		               <td style="font-size:80%;"> <?php echo $res->valor_min_c_x_c; ?>     </td>
		               <td style="font-size:80%;"> <?php echo $res->valor_max_c_x_c; ?>     </td>
		               
		               <td>
			           		<div class="right">
			                    <a href="<?php echo $helper->url("Rangos_c_x_c","index"); ?>&id_rangos_c_x_c=<?php echo $res->id_rangos_c_x_c; ?>" class="btn btn-warning" style="font-size:65%;">Editar</a>
			                </div>
			            
			           </td>
			           <td>   
			               	<div class="right">
			                    <a href="<?php echo $helper->url("Rangos_c_x_c","borrarId"); ?>&id_rangos_c_x_c=<?php echo $res->id_rangos_c_x_c; ?>" class="btn btn-danger" style="font-size:65%;">Borrar</a>
			                </div>
			           </td>
	   		</tr>
	   
	   </tbody>	
	        		
		        <?php } }else{ ?>
            <tr>
            <td></td>
            <td></td>
	                   <td colspan="5" style="color:#ec971f;font-size:8;"> <?php echo '<span id="snResult">No existen resultados</span>' ?></td>
	        <td></td>
		               
		    </tr>
            <?php 
		}
            //echo "<script type='text/javascript'> alert('Hola')  ;</script>";
            
            ?>
            
       	</table>     
		</section>
        </div>
        </div>
        </form> 
          
          
          
       
      </div>
      </div>
   </body>  

</html>   