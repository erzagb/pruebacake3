	<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div class="page-header">
						<font color="green">
							<h2><?php echo __('Ver Colegiado'); ?></h2>
						</font>
					</div>
					<?php echo $this->Form->create(null,['url'=>['controller'=>'Colegiado','action'=>'view']]);?>
					
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
                <th>Cedula</th>
                <th>Carnet</th>
                <th>Nombre y apellidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
        <!--first example-->
            <td><input id="checkbox1" type="checkbox"></td>
            <td>X-XXX-XXXX</td>
            <td>XXXXX</td>
            <td>Laura</td>
        </tr>
        <tr>
        <!--second example-->
            <td><input id="checkbox1" type="checkbox"></td>
            <td>X-XXX-XXXX</td>
            <td>XXXXX</td>
            <td>Elizabeth</td>
        </tr>
        <tr>
        <!--third example-->
            <td><input id="checkbox1" type="checkbox"></td>
            <td>X-XXX-XXXX</td>
            <td>XXXXX</td>
            <td>Tracy</td>
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