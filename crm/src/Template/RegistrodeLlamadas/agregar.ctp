<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div class="page-header">
						<font color="green">
							<h2><?php echo __('Agregar Registro de Llamada'); ?></h2>
						</font>
					</div>
					<?php echo $this->Form->create(null,['url'=>['controller'=>'RegistrodeLlamadas','action'=>'add']]);?>
					<fieldset>
				</div>
				
				<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Carne del colegiado">Carné</label>  
  <div class="col-md-12">
  <input id="CarneColeg" name="carne"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="categoria del colegiado">Categoría</label>  
  <div class="col-md-12">
  <input id="CategColeg" name="CategoriaColegiado"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<div class="col-md-6 col-md-offset-3">
      <label class="col-md-4 control-label" for="Sede">Sedes</label>
      <div class="col-md-4">
        <select id="Sede" name="Sede" class="form-control">
          <option value="1">San José</option>
          <option value="2">Cartago</option>
          <option value="3">Alajuela</option>
          <option value="4">Heredia</option>
          <option value="5">Puntarenas</option>
          <option value="6">Limón</option>
          <option value="7">Guanacaste</option>
        </select>
      </div>
   <br>
<br>
<br>
</div>

<div class="col-md-6 col-md-offset-3">
    <label class="col-md-3 control-label" for="Registro">Fecha</label>
	
        <div class="col-sm-4">
            <div class="form-group registration-date">
               
            	<div class="input-group registration-date-time">
            		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
            		<input class="form-control" name="registration_date" id="registration-date" type="date">
            	</div>
            </div>
        </div>
        <br>
        <br>
        <br>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Contesto Colegiado">Contestó el colegiado</label>  
  <div class="col-md-4">
 <input id="checkbox1" name='contesto' type="checkbox">
    
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Volver a llamar Colegiado">Volver a llamar</label>  
  <div class="col-md-4">
 <input id="checkbox1" name='llamar' type="checkbox">
    
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-6 control-label" for="Comentarios Registro">Comentarios</label>  
  <div class="col-md-12">
  <textarea class="form-control" id="ComReg" name="ComRegistro"></textarea>
    <br>
  </div>
</div>
				
	<div class="col-md-6 col-md-offset-3">
					<br>
				</fieldset>
				<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Agregar</button>
    
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