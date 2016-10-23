<div class="row">
		<div class="col-md-6 col-md-offset-3">
				<div class="page-header">
					<font color="green">
						<h2><?php echo __('Agregar Sede'); ?></h2>
					</font>
				</div>
				<fieldset>
				<?php 
				echo $this->Form->input('CodigoSede');
				echo $this->Form->input('Nombre');
				echo $this->Form->input('Ubicacion');
				echo '<select name="Provincias" id="id_Provincia"\n>
				<option value="San jose">San jose</option>
				 <option value="Heredia">Heredia</option> 
				<option value="Cartago">Cartago</option> 
				<option value="Alajuela">Alajuela</option>
				<option value="Guanacaste">Guanacaste</option>
				<option value="Puntarenas">Puntarenas</option> 
				 <option value="Limon">Limon</option>';
				 
				echo $this->Form->input('Direccion'); 
				echo $this->Form->input('Telefono');
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