	<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div class="page-header">
						<font color="green">
							<h2><?php echo __('Ver Cursos'); ?></h2>
						</font>
					</div>
					<?php echo $this->Form->create(null,['url'=>['controller'=>'Cursos','action'=>'view']]);?>
					
					<fieldset>
				</div>
				
<!-- Text input-->
<div class="col-md-8 col-md-offset-2">
    
        <div class="col-md-4 col-xs-offset-0">
          <label class="col-md-6 control-label" for="NP">Nombre del Profesor</label>  
          <div class="col-md-6">
              <input id="np" name="Nombre del profesor" placeholder="Nombre" class="form-control input-md" required="" type="text">
          </div>
        </div>
 
        <div class="col-md-4 col-xs-offset-0">
          <label class="col-md-4 col-xs-offset-1" for="Cat">Categoría</label>
          <div class="col-md-6">
            <select id="cat" name="categoria" class="form-control">
            <option value="1">Derecho Civil</option> 
            <option value="2">Derecho Procesal Civil</option>
            <option value="3">Ejecucion en Procesos Civiles</option>
            <option value="4">Derecho Penal</option>
            <option value="5">Derecho Procesal Penal</option>
            <option value="6">Ejecucion el Derecho Penal</option>
            <option value="7">Derecho Comercial</option>
            <option value="8">Derecho Agrario</option>
            <option value="9">Derecho Laboral</option>
            <option value="10">Derecho Procesal Laboral</option>
            <option value="11">Derecho Administrativo</option>
            <option value="12">Derecho Procesal Administrativo</option>
            <option value="13">Derecho Procesal Contencioso Administrativo</option>
            <option value="14">Derecho Municipal</option>
            <option value="15">Derecho Constitucional</option>
            <option value="16">Derecho de Familia</option>
            <option value="17">Derecho Procesal de Familia</option>
            <option value="18">Derecho  internacional Privado</option>
            <option value="19">Derecho internacional Publico </option>
            <option value="20">Derechos Humanos </option>
            <option value="21">Derecho convencional</option>
            <option value="22">Etica</option>
            <option value="23">Redacción y argumentacion juridica</option>
            </select>
          </div>
        </div>

        <div class="col-md-4 ">
          <label class="col-md-6 control-label" for="Sede">Sede</label>
          <div class="col-md-6 col-xs-offset-0">
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
        </div>
  
</div>

<div class="col-md-6 col-md-offset-3">
        <!--table-->
        <br><br>
      <table class="table table-striped">
       <thead>
            <tr class="info">
                <th>Seleccionar</th>
                <th>Categoría</th>
                <th>Nombre del Curso</th>
                <th>Nombre del Profesor</th>
                <th>Horario</th>
                <th>Sede</th>
            </tr>
        </thead>
        <tbody>
            <tr>
        <!--first example-->
            <td><input id="checkbox1" type="checkbox"></td>
            <td>Civil</td>
            <td>Derechos civil</td>
            <td>José</td>
            <td>7:00pm - 10:00pm</td>
            <td>Limon</td>
        </tr>
        <tr>
        <!--second example-->
            <td><input id="checkbox1" type="checkbox"></td>
            <td>Laboral</td>
            <td>Derechos laboral</td>
            <td>Daniel</td>
            <td>7:00pm - 10:00pm</td>
            <td>San José</td>
        </tr>
        <tr>
        <!--third example-->
            <td><input id="checkbox1" type="checkbox"></td>
            <td>Derechos humanos</td>
            <td>Derechos humanos</td>
            <td>Karol</td>
            <td>7:00pm - 10:00pm</td>
            <td>Alajuela</td>
        </tr>
        </tbody>
    </table>
  </div>
  
	<div class="col-md-6 col-md-offset-3">
					<br>
				</fieldset>
				<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Ver</button>
    
    <button id="cancel" name="cancelar" class="btn btn-primary">Exportar Lista</button>
  </div>
</div>
				<?= $this->Form->end() ?>
			  <br>
				<br>
			</div>
			<?php echo $this->Form->end();?>
	</div>
	</div>