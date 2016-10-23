<div class="container">
<div class="row">
		<div class="col-md-6 col-md-offset-3">
				<div class="page-header">
					<font color="green">
						<h2><?php echo __('Agregar Curso'); ?></h2>
					</font>
				</div>
				<?= $this->Form->create($curso) ?>
				<fieldset>
				<?php 
				echo $this->Form->input('CodigoCurso');
				echo $this->Form->input('Nombre del curso');
				echo $this->Form->input('Horario');
				echo $this->Form->input('Cupo'); 
				echo $this->Form->input('Costo');
				?>
				<br>
			</fieldset>
			<?= $this->Form->button('Agregar') ?>
			<?= $this->Form->button('Cancelar') ?>
			<?= $this->Form->end() ?>
		  <br>
			<br>
		</div>
</div>
</div>