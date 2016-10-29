	<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div class="page-header">
						<font color="green">
							<h2><?php echo __('Eliminar Colegiado'); ?></h2>
						</font>
					</div>
					<?php echo $this->Form->create(null,['url'=>['controller'=>'Colegiado','action'=>'delete']]);?>
					
					<div class="col-md-6 col-md-offset-0">
				    	<form action="#" class="col-md-4 col-xs-offset-0">
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
				

<div class="col-md-6 col-md-offset-3">
        <!--table-->
        <br><br>
       <table class="table table-striped">
       <thead>
            <tr class="info">
                <th>Seleccionar</th>
                <th>Cédula</th>
                <th>Carne</th>
                <th>Nombre y Apellidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
        <!--first example-->
            <td><input id="checkbox1" type="checkbox"></td>
            <td>111234568</td>
            <td>1234</td>
            <td>Alvaro Ramírez Alfaro</td>
        </tr>
        <tr>
        <!--second example-->
            <td><input id="checkbox1" type="checkbox"></td>
            <td>678451230</td>
            <td>1235</td>
            <td>Jazmín Gómez López</td>
        </tr>
        <tr>
        <!--third example-->
            <td><input id="checkbox1" type="checkbox"></td>
            <td>542103078</td>
            <td>1236</td>
            <td>Priscilla Hidalgo Corrales</td>
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
    <button id="button1id" name="button1id" class="btn btn-success">Eliminar</button>
    
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