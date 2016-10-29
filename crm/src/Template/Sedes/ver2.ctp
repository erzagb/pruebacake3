<!--Pantalla para la opción ver cursos impartidos en la sede-->	

	<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div class="page-header">
						<font color="green">
							<h2><?php echo __('Ver Cursos impartidos por la Sede'); ?></h2>
						</font>
					</div>
					<?php echo $this->Form->create(null,['url'=>['controller'=>'Sede','action'=>'view3']]);?>
					
					<fieldset>
				</div>
				

<div class="col-md-6 col-md-offset-3">
        <!--table-->
        <br><br>
       <table class="table table-striped">
       <thead>
            <tr class="info">
                <th>Categoría</th>
                <th>Nombre del curso</th>
                <th>Nombre del profesor</th>
                <th>Horario</th>
            </tr>
        </thead>
        <tbody>
            <tr>
        <!--first example-->
            <td>Derecho Procesal Civil </td>
            <td>Derecho procesal civil</td>
            <td>Armando</td>
            <td>Nocturno</td>
        </tr>
        <tr>
        <!--second example-->
            <td>Derecho Procesal Penal</td>
            <td>Derecho procesal penal</td>
            <td>Manuel</td>
            <td>Tarde</td>
        </tr>
        <tr>
        <!--third example-->
            <td>Derecho Laboral</td>
            <td>Derecho Laboral</td>
            <td>Priscilla</td>
            <td>Nocturno</td>
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