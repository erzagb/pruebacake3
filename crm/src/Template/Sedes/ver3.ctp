	<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div class="page-header">
						<font color="green">
							<h2><?php echo __('Ver profesores afilidos'); ?></h2>
						</font>
					</div>
					<?php echo $this->Form->create(null,['url'=>['controller'=>'Profesor','action'=>'view4']]);?>

					<fieldset>
				</div>
				

<div class="col-md-6 col-md-offset-3">
        <!--table-->
        <br><br>
       <table class="table table-striped">
       <thead>
            <tr class="info">
                <th>Cédula</th>
                <th>Código del profesor</th>
                <th>Nombre y Apellidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
        <!--first example-->
            <td>111234568</td>
            <td>234</td>
            <td>Daniel Ramírez Alfaro</td>
        </tr>
        <tr>
        <!--second example-->
            <td>678451230</td>
            <td>235</td>
            <td>Orlando Gómez López</td>
        </tr>
        <tr>
        <!--third example-->
            <td>542103078</td>
            <td>236</td>
            <td>Nicole Hidalgo Corrales</td>
        </tr>
        </tbody>
    </table>
  </div>
  

	<div class="col-md-6 col-md-offset-3">
					<br>
				</fieldset>

				<?= $this->Form->end() ?>
			  <br>
				<br>
			</div>
			<?php echo $this->Form->end();?>
	</div>
	</div>