	<div class="container">
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div class="page-header">
						<font color="green">
							<h2><?php echo __('Editar Profesor'); ?></h2>
						</font>
					</div>
					<?php echo $this->Form->create(null,['url'=>['controller'=>'Profesor','action'=>'edit']]);?>
					
					<div class="col-md-6 col-md-offset-12">
					<form action="#" class="col-md-4 col-xs-offset-0">
             <div class="input-group">
               <input type="text" class="form-control" name="x" placeholder="cédula">
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
				
				<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Nombre del colegiado">Nombre</label>  
  <div class="col-md-12">
  <input id="NomProf" name="nombre"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Apellidos del colegiado">Apellidos</label>  
  <div class="col-md-12">
  <input id="ApllColeg" name="Apellidos del profesor"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="cédula del profesor">Cédula</label>  
  <div class="col-md-12">
  <input id="CedProf" name="Cédula del profesor"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-4 control-label" for="Codigo_del_prof">Código del profesor</label>  
  <div class="col-md-12">
  <input id="CarneProf" name="Carné del profesor"  class="form-control input-md" required="" type="text">
    <br>
  </div>
</div>

				<!-- Text input-->
	<div class="col-md-6 col-md-offset-3">
	  <label class="col-md-6 control-label" for="Codigo del curso">Dirección de residencia</label>  
	  <div class="col-md-12">
	 <textarea class="form-control" id="descripcion" name="Descripción del curso"></textarea>
		<br>
	  </div>
	  </div>

<!-- Text input-->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-6 control-label" for="Codigo del curso">Direccción de Oficina</label>  
  <div class="col-md-12">
  <textarea class="form-control" id="descripcion" name="Descripción del curso"></textarea>
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
  <input id="telcel" name="Telefono celular" placeholder="Tel. celular" class="form-control input-md" required="" type="text">
  </div>
  
   <div class="col-md-3 col-xs-offset-0">
  <input id="telofic" name="Teléfono oficina" placeholder="Tel. oficina" class="form-control input-md" required="" type="text">
  </div>
  
   <div class="col-md-3 col-xs-offset-0">
  <input id="telcasa" name="Teléfono de la residencia" placeholder="Tel. residencia" class="form-control input-md" required="" type="text">
  </div>
 <br>
<br>
<br>
</div>

<div class="col-md-6 col-md-offset-3">
  	<div class="page-header">
						<font color="green">
							<h2><?php echo __('Información Personal'); ?></h2>
						</font>
				</div>
			</div>

<div class="col-md-6 col-md-offset-3">
      <label class="col-md-4 control-label" for="Sede">Sede Afiliada</label>
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
<div class="col-md-8 col-md-offset-3">
 <label class="col-md-4 control-label" for="Cursos" >Cursos que esta impartiendo actualmente</label>
<br><br>
<div class="form-group">
    <label class="col-md-6 control-label" for="Cursos" ></label>
      <div class="col-md-3 col-xs-offset-0">
        <select id="Cursos" name="Sede" class="form-control">
          <option value="1">Cursos</option>
        </select>
      </div>
      
      <div class="col-md-3 col-xs-offset-0">
        <select id="Sedes" name="Sede" class="form-control">
          <option value="1">Sedes</option>
        </select>
      </div>
       <div class="col-md-3 col-xs-offset-0">
         <button type="button" class="btn btn-info addOneMoreSme" id="tan_btn1"><span class="glyphicon glyphicon-plus"></span></button> 
          </div>
          <br>
          <br>
          <br>
</div>
</div>

<div class="col-md-6 col-md-offset-3">
        <label class="col-md-6 control-label" for="Cursos" >Cursos que el profesor ha impartido</label>
        <!--table-->
        <br><br>
       <table class="table table-striped">
       <thead>
            <tr class="info">
                <th>Fecha en la que se impartió el curso</th>
                <th>Curso</th>
                <th>Sede</th>
            </tr>
        </thead>
        <tbody>
            <tr>
        <!--first example-->
            <td>22/05/2015</td>
            <td>Curso 1</td>
            <td>Limon</td>
        </tr>
        <tr>
        <!--second example-->
            <td>01/08/2012</td>
            <td>Curso 2</td>
            <td>Puntarenas</td>
        </tr>
        <tr>
        <!--third example-->
            <td>20/10/2015</td>
            <td>Curso 3</td>
            <td>Heredia</td>
        </tr>
        </tbody>
    </table>
  </div>
  
  <!-- Textarea -->
<div class="col-md-6 col-md-offset-3">
  <label class="col-md-6 control-label" for="des">Descripción</label>
  <div class="col-md-12">                     
    <textarea class="form-control" id="descripcion" name="Descripción del curso"></textarea>
  </div>
</div>
				
	<div class="col-md-6 col-md-offset-3">
					<br>
				</fieldset>
				<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Editar</button>
    
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