	<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div class="page-header">
						<font color="green">
							<h2><?php echo __('Agregar Curso'); ?></h2>
						</font>
					</div>
					<?php echo $this->Form->create(null,['url'=>['controller'=>'Cursos','action'=>'add']]);?>
					<fieldset>
				</div>
				
				<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Codigo_del_curso">Código del curso</label>  
  <div class="col-md-12">
  <input id="codcurso" name="Cod_del_curso" placeholder="Codigo" class="form-control input-md" required="" type="text">
    	<br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Nombre del curso">Nombre del curso</label>  
  <div class="col-md-12">
  <input id="nombrecurso" name="Nombre_del_curso" placeholder="Nombre" class="form-control input-md" required="" type="text">
    	<br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Horario del curso">Horario</label>  
  <div class="col-md-12">
  <input id="horcurso" name="Horario_del_curso" placeholder="horario" class="form-control input-md" required="" type="text">
    	<br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Cupo">Cupo</label>  
  <div class="col-md-12">
  <input id="cupo" name="cupo" placeholder="cupo" class="form-control input-md" required="" type="text">
    	<br>
  </div>
</div>

				<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Costo">Costo</label>  
  <div class="col-md-12">
  <input id="costo" name="costo" placeholder="costo" class="form-control input-md" required="" type="text">
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