<script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
<script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>

	<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div class="page-header">
						<font color="green">
							<h2><?php echo __('Agregar Sugerencia'); ?></h2>
						</font>
					</div>
					<?php echo $this->Form->create(null,['url'=>['controller'=>'Sugerencias','action'=>'add']]);?>
					<fieldset>
				</div>
				
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Tipo_Sede">Tipo de sugerencia</label>  
  <div class="col-md-3 col-xs-offset-0">
   <select id="tipoSug" name="tipo" class="form-control">
          <option value="1">Curso</option>
          <option value="2">Profesor</option>
          <option value="3">Administrativo</option>
        </select>
        <br>
        <br>
  </div>
  </div>
  

<div class="col-md-6 col-md-offset-3">
  <label class="col-md-3 control-label" for="Nombre del colegiado">Nombre Colegiado</label>  
  <div class="col-md-3 col-xs-offset-0">
  <input id="nombrecoleg" name="nombre" placeholder="nombre" class="form-control input-md" required="" type="text">
  </div>
  
  <label class="col-md-2 control-label" for="Carne del colegiado">Carne</label> 
   <div class="col-md-3 col-xs-offset-0">
  <input id="carnecoleg" name="carne" placeholder="carne" class="form-control input-md" required="" type="text">
  </div>
  
 <br>
<br>
<br>
</div>

<div class="col-md-6 col-md-offset-3">
    <label class="col-md-3 control-label" for="Sede">Fecha</label>
	
        <div class="col-sm-4">
            <div class="form-group registration-date">
               
            	<div class="input-group registration-date-time">
            		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
            		<input class="form-control" name="fecha" id="registration-date" type="date">
            	</div>
            </div>
        </div>
        <br>
        <br>
        <br>
</div>

<div class="col-md-6 col-md-offset-3">
  <label class="col-md-3 control-label" for="Sede">Sede</label>  
  <div class="col-md-3 col-xs-offset-0">
   <select id="sede" name="sede" class="form-control">
          <option value="1">SJ</option>
          <option value="2">Cartago</option>
          <option value="3">Alajuela</option>
        </select>
        <br>
        <br>
  </div>
</div>
  
  
  <div class="col-md-6 col-md-offset-3">
  <label class="col-md-3 control-label" for="Curso">Curso</label>  
  <div class="col-md-3 col-xs-offset-0">
   <select id="curso" name="curso" class="form-control">
          <option value="1">A</option>
          <option value="2">B</option>
          <option value="3">C</option>
        </select>
        <br>
        <br>
  </div>
</div>
  
  <div class="col-md-6 col-md-offset-3">
  <label class="col-md-3 control-label" for="Profesor">Profesor</label>  
  <div class="col-md-3 col-xs-offset-0">
   <select id="prof" name="profesor" class="form-control">
          <option value="1">A</option>
          <option value="2">B</option>
          <option value="3">C</option>
        </select>
        <br>
        <br>
  </div>
</div>
  
  <!-- Text input-->
	<div class="col-md-6 col-md-offset-3">
	  <label class="col-md-6 control-label" for="Codigo del curso">Descripcion</label>  
	  <div class="col-md-12">
	 <textarea class="form-control" id="descripcion" name="Descripción del curso"></textarea>
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