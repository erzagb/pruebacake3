	<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div class="page-header">
						<font color="green">
							<h2><?php echo __('Agregar Colegiado'); ?></h2>
						</font>
					</div>
					<?php echo $this->Form->create(null,['url'=>['controller'=>'Colegiado','action'=>'add']]);?>
					<fieldset>
				</div>
				
				<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Nombre del colegiado">Nombre</label>  
  <div class="col-md-12">
  <input id="NomColeg" name="nombre"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Apellidos del colegiado">Apellidos</label>  
  <div class="col-md-12">
  <input id="ApllColeg" name="ApellidosColegiado"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="cédula del colegiado">Cédula</label>  
  <div class="col-md-12">
  <input id="CedColeg" name="CedulaColegiado"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Carné del colegiado">Carné</label>  
  <div class="col-md-12">
  <input id="CarneColeg" name="CarneColegiado"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

				<!-- Text input-->
	<div class="col-md-6 col-md-offset-3">
	  <label class="col-md-6 control-label" for="Codigo del curso">Dirección de residencia</label>  
	  <div class="col-md-12">
	 <textarea class="form-control" id="dirRes" name="DirResidencia"></textarea>
		<br>
	  </div>
	  </div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-6 control-label" for="Codigo del curso">Direccción de Oficina</label>  
  <div class="col-md-12">
  <textarea class="form-control" id="dirOf" name="DirOficiona"></textarea>
    <br>
  </div>
</div>

	  <!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-3 control-label" for="Codigo del curso">Correos</label>  
  
  <div class="col-md-4 col-xs-offset-0">
  <input id="mail1" name="Correo1" placeholder="Correo oficina" class="form-control input-md" required="" type="text">
  </div>
  
   <div class="col-md-4 col-xs-offset-0">
  <input id="mail2" name="Correo2" placeholder="Correo personal" class="form-control input-md" required="" type="text">
  </div>
<br>
<br>
<br>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-3 control-label" for="Codigo del curso">Teléfonos</label>  
  <div class="col-md-3 col-xs-offset-0">
  <input id="telcel" name="Telefono_celular" placeholder="Tel. celular" class="form-control input-md" required="" type="text">
  </div>
  
   <div class="col-md-3 col-xs-offset-0">
  <input id="telofic" name="Teléfono_oficina" placeholder="Tel. oficina" class="form-control input-md" required="" type="text">
  </div>
  
   <div class="col-md-3 col-xs-offset-0">
  <input id="telcasa" name="Teléfono_Residencia" placeholder="Tel. residencia" class="form-control input-md" required="" type="text">
  </div>
 <br>
<br>
<br>
</div>


<div class="col-md-6 col-md-offset-3">
      <label class="col-md-4 control-label" for="Sede">Sede Empadronada</label>
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


<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Codigo del curso">Moroso</label>  
  <div class="col-md-4">
 <input id="checkbox1" name='moroso' type="checkbox">
    
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