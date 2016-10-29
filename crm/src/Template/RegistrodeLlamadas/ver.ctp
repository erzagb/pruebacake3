<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div class="page-header">
						<font color="green">
							<h2><?php echo __('Ver Registro de Llamadas'); ?></h2>
						</font>
					</div>
					<?php echo $this->Form->create(null,['url'=>['controller'=>'RegistrodeLlamadas','action'=>'view']]);?>
					
				    <!-- Text input-->
                   <div class="col-md-6 col-md-offset-0">
				        <form action="#" class="col-md-6 col-xs-offset-0">
                         <div class="input-group">
                           <input type="text" class="form-control" name="x" placeholder="cédula o carne">
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
				

<!-- seccion tabla -->
<div class="col-md-6 col-md-offset-3">
        <br><br>
        <!--table-->
       <table class="table table-striped">
       <thead>
            <tr class="info">
                <th>Seleccionar</th>
                <th>Carné de colegiado</th>
                <th>Sede</th>
                <th>Llamó</th>
                <th>Descripción</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <tr>
        <!--first example-->
            <td><input id="checkbox1" type="checkbox"></td>
            <td>X-XXX-XXXX</td>
            <td>San José</td>
            <td><input id="checkbox1" type="checkbox"></td>
            <td>Pequeña descripción</td>
            <td>11/10/2016</td>
        </tr>
        <tr>
        <!--second example-->
            <td><input id="checkbox1" type="checkbox"></td>
            <td>X-XXX-XXXX</td>
            <td>Heredia</td>
            <td><input id="checkbox1" type="checkbox"></td>
            <td>Pequeña descripción</td>
            <td>03/02/2016</td>
        </tr>
        <tr>
        <!--third example-->
            <td><input id="checkbox1" type="checkbox"></td>
            <td>X-XXX-XXXX</td>
            <td>Cartago</td>
            <td><input id="checkbox1" type="checkbox"></td>
            <td>Pequeña descripción</td>
            <td>28/06/2016</td>
        </tr>
        </tbody>
    </table>
    <br>
    <br>
    </div>
  

	<div class="col-md-6 col-md-offset-3">
					<br>
				</fieldset>
				<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-12">
    <button id="button1id" name="button1id" class="btn btn-success">Ver Perfil</button>
    
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