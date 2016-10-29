	<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div class="page-header">
						<font color="green">
							<h2><?php echo __('Ver Sedes'); ?></h2>
						</font>
					</div>
					<?php echo $this->Form->create(null,['url'=>['controller'=>'Sede','action'=>'view']]);?>
					
					<div class="col-md-6 col-md-offset-0">
				    	<form action="#" class="col-md-4 col-xs-offset-0">
                        <div class="input-group">
                           <input type="text" class="form-control" name="x" placeholder="cédula del profesor">
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
                <th>Código de Sede</th>
                <th>Nombre de la sede</th>
                <th>Ubicación</th>
            </tr>
        </thead>
        <tbody>
            <tr>
        <!--first example-->
            <td>1</td>
            <td>Regional Puntarenas</td>
            <td>Puntarenas</td>
        </tr>
        <tr>
        <!--second example-->
            <td>2</td>
            <td>Limón</td>
            <td>Limón</td>
        </tr>
        <tr>
        <!--third example-->
            <td>3</td>
            <td>Zona Sur</td>
            <td>Ciudad Neilly</td>
        </tr>
        <tr>
        <!--third example-->
            <td>4</td>
            <td>Santa Cruz</td>
            <td>Guanacaste</td>
        </tr>
        <tr>
        <!--third example-->
            <td>5</td>
            <td>Heredia</td>
            <td>Heredia</td>
        </tr>
        
        </tbody>
    </table>
  </div>
  

	<div class="col-md-6 col-md-offset-3">
					<br>
				</fieldset>
				<div class="form-group">
  <label class="col-md-6 control-label" for="button1id"></label>
  <div class="col-md-12">
    <button id="vps" name="verperfilsede" class="btn btn-success">Ver perfil sedes</button>
    <button id="vcs" name="vercursosede" class="btn btn-primary">Ver cursos por sedes</button>
    <button id="vpa" name="verprofafiliado" class="btn btn-warning">Ver profesores afiliados</button>

  </div>
</div>
				<?= $this->Form->end() ?>
			  <br>
				<br>
			</div>
			<?php echo $this->Form->end();?>
	</div>
	</div>