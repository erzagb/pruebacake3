	<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div class="page-header">
						<font color="green">
							<h2><?php echo __('Editar Quejas'); ?></h2>
						</font>
					</div>
					<?php echo $this->Form->create(null,['url'=>['controller'=>'Quejas','action'=>'edit']]);?>
					
					<div class="col-md-6 col-md-offset-12">
					    <form action="#" class="col-md-4 col-xs-offset-0">
                         <div class="input-group">
                            <input type="text" class="form-control" name="x" placeholder="Codigo de la queja">
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
  <label class="col-md-4 control-label" for="Codigo_Queja">Codigo de la queja</label>  
  <div class="col-md-12">
  <input id="CodQueja" name="codigoq"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Apellidos del colegiado">Nombre del Colegiado</label>  
  <div class="col-md-12">
  <input id="NomCol" name="Nombre del Colegiado"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Carne_del_colegiado">Carné del Colegiado</label>  
  <div class="col-md-12">
  <input id="CarneCol" name="Carne del Colegiado"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<div class="col-md-7 col-md-offset-3">
  <label class="col-md-3 control-label" for="Queja">Tipo de Queja</label>  
  <div class="col-md-3 col-xs-offset-0">
   <select id="queja" name="Queja" class="form-control">
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
  <input id="CodProf" name="Código del profesor"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Codigo_curso">Código del curso</label>  
  <div class="col-md-12">
  <input id="CodCurso" name="Código del curso"  class="form-control input-md" required="" type="text">
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