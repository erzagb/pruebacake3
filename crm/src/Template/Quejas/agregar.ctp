	<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div class="page-header">
						<font color="green">
							<h2><?php echo __('Agregar Quejas'); ?></h2>
						</font>
					</div>
					<?php echo $this->Form->create(null,['url'=>['controller'=>'Quejas','action'=>'add']]);?>
					<fieldset>
				</div>
				
			

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Apellidos del colegiado">Nombre del Colegiado</label>  
  <div class="col-md-12">
  <input id="NomCol" name="nombreColegiado"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Carne_del_colegiado">Carné del Colegiado</label>  
  <div class="col-md-12">
  <input id="CarneCol" name="carne"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<div class="col-md-7 col-md-offset-3">
  <label class="col-md-3 control-label" for="Queja">Tipo de Queja</label>  
  <div class="col-md-3 col-xs-offset-0">
   <select id="queja" name="tipo" class="form-control">
          <option value="1">Profesor</option>
          <option value="2">Colegiado</option>
           </select>
  </div>
  <br>
  <br>
  <br>
  </div>
  
<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Codigo_profesor">Código del profesor</label>  
  <div class="col-md-12">
  <input id="CodProf" name="codigoProfesor"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Codigo_curso">Código del curso</label>  
  <div class="col-md-12">
  <input id="CodCurso" name="codigoCurso"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
    <label class="col-md-6 control-label" for="Codigo del curso">Descripción</label>  
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