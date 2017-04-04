	
	
	
	<form id="guardarCliente" class="form-horizontal">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar Nuevo Cliente</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax_register"></div>
          <div class="form-group">
            <label for="ruc_clientes0" class="control-label">Ruc:</label>
            <input type="text" class="form-control" id="ruc_clientes0" name="ruc_clientes" required maxlength="200">
		  </div>
		  <div class="form-group">
            <label for="razon_social_clientes0" class="control-label">Razón Social:</label>
            <input type="text" class="form-control" id="razon_social_clientes0" name="razon_social_clientes" required maxlength="400">
          </div>
          
          <div class="form-group">
				<label for="id_provincias0" class="col-sm-3 control-label">Provincias:</label>
				<div class="col-sm-8">
				 <select class="form-control" id="id_provincias0" name="id_provincias" required>
					<option value="">-- Seleccione --</option>
					<option value="1" selected>Activo</option>
					<option value="0">Inactivo</option>
				  </select>
				</div>
		  </div>
		  
		  <div class="form-group">
				<label for="id_ciudad0" class="col-sm-3 control-label">Ciudad:</label>
				<div class="col-sm-8">
				 <select class="form-control" id="id_ciudad0" name="id_ciudad" required>
					<option value="">-- Seleccione --</option>
					<option value="1" selected>Activo</option>
					<option value="0">Inactivo</option>
				  </select>
				</div>
		  </div>
			  
          <div class="form-group">
            <label for="direccion_clientes0" class="control-label">Dirección:</label>
            <texarea type="text" class="form-control" id="direccion_clientes0" name="direccion_clientes" required maxlength="400"></texarea>
          </div>
          
          <div class="form-group">
            <label for="telefono_clientes0" class="control-label">Teléfono:</label>
            <input type="text" class="form-control" id="telefono_clientes0" name="telefono_clientes" required maxlength="400">
          </div>
          
           <div class="form-group">
            <label for="celular_clientes0" class="control-label">Celular:</label>
            <input type="text" class="form-control" id="celular_clientes0" name="celular_clientes" required maxlength="400">
          </div>
          
          <div class="form-group">
            <label for="email_clientes0" class="control-label">Email:</label>
            <input type="text" class="form-control" id="email_clientes0" name="email_clientes" required maxlength="400">
          </div>
		  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
         
      </div>
    </div>
  </div>
</div>
</form>
