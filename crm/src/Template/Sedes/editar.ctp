	<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div class="page-header">
						<font color="green">
							<h2><?php echo __('Editar Sede'); ?></h2>
						</font>
					</div>
					<?php echo $this->Form->create(null,['url'=>['controller'=>'Sede','action'=>'edit']]);?>
					
						
					<div class="col-md-6 col-md-offset-12">
					    <form action="#" class="col-md-4 col-xs-offset-0">
                        <div class="input-group">
                           <input type="text" class="form-control" name="x" placeholder="Codigo sede">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
                         </div>
                         </form>
                         <br>
                         <br>
         
                 	</div>
					
					
					
					<fieldset>
				</div>
				
				<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Codigo_Sede">Codigo de Sede</label>  
  <div class="col-md-12">
  <input id="CodSede" name="codigo"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Apellidos del colegiado">Nombre de la Sede</label>  
  <div class="col-md-12">
  <input id="NomSede" name="Nombre de la Sede"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-7 col-md-offset-3">
  <label class="col-md-3 control-label" for="Ubicacion_Sede">Ubicación de la Sede</label>  
  <div class="col-md-3 col-xs-offset-0">
   <select id="provSede" name="Sede" class="form-control">
          <option value="1">San José</option>
          <option value="2">Cartago</option>
          <option value="3">Alajuela</option>
          <option value="4">Heredia</option>
          <option value="5">Puntarenas</option>
          <option value="6">Limón</option>
          <option value="7">Guanacaste</option>
        </select>
  </div>
  
   <div class="col-md-3 col-xs-offset-0">
  <select id="cantSede" name="Sede" class="form-control">
          <option value="1">A</option>
          <option value="2">B</option>
          <option value="3">C</option>
          <option value="4">D</option>
          <option value="5">E</option>
          <option value="6">F</option>
          <option value="7">G</option>
        </select>
  </div>
  
   <div class="col-md-3 col-xs-offset-0">
  <select id="distSede" name="Sede" class="form-control">
          <option value="1">A</option>
          <option value="2">B</option>
          <option value="3">C</option>
          <option value="4">D</option>
          <option value="5">E</option>
          <option value="6">F</option>
          <option value="7">G</option>
        </select>
  </div>
 <br>
<br>
<br>
</div>

	<!-- Text input-->
	<div class="col-md-6 col-md-offset-3">
	  <label class="col-md-6 control-label" for="Codigo del curso">Dirección</label>  
	  <div class="col-md-12">
	 <textarea class="form-control" id="descripcion" name="Descripción del curso"></textarea>
		<br>
	  </div>
	  </div>
	  
	  <!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-3 control-label" for="Codigo del curso">Teléfonos</label>  
  <div class="col-md-4 col-xs-offset-0">
  <input id="telcel" name="Telefono celular" placeholder="Tel. celular" class="form-control input-md" required="" type="text">
  </div>
  
   <div class="col-md-4 col-xs-offset-0">
  <input id="telofic" name="Teléfono oficina" placeholder="Tel. oficina" class="form-control input-md" required="" type="text">
  </div>
  
 <br>
<br>
<br>
</div>

	<div class="col-md-6 col-md-offset-3">
	<br>
	</fieldset>
	<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Editar</button>
    
    <button id="cancel" name="cancelar" class="btn btn-primary">Cancelar</button>
  </div>
</div>
		<?= $this->Form->end() ?>
		<br>
		<br>
		</div>
	<?php echo $this->Form->end();?>
</div>
</div>