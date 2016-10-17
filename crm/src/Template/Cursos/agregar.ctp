<script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
<script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>


<div class="container">
	<div class="row">
		<h2>Agregar Curso</h2>
	</div>
    <form class="form-horizontal">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Codigo del curso">Código del curso</label>  
  <div class="col-md-4">
  <input id="Codcurso" name="Codigo del curso" placeholder="Codigo" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nombre del curso">Nombre del curso</label>  
  <div class="col-md-4">
  <input id="nombrecurso" name="Nombre del curso" placeholder="nombre" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
      <label class="col-md-4 control-label" for="Sede">Sede</label>
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
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="Sede">Fecha de inicio</label>
	
        <div class="col-sm-4">
            <div class="form-group registration-date">
               
            	<div class="input-group registration-date-time">
            		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
            		<input class="form-control" name="registration_date" id="registration-date" type="date">
            	</div>
            </div>
        </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="Sede">Fecha final el curso</label>
	
        <div class="col-sm-4">
            <div class="form-group registration-date">
               
            	<div class="input-group registration-date-time">
            		<span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
            		<input class="form-control" name="registration_date" id="registration-date" type="date">
            	</div>
            </div>
        </div>
</div>

<!-- Select Basic -->
<div class="form-group">
      <label class="col-md-4 control-label" for="Cat">Categoría</label>
      <div class="col-md-4">
        <select id="cat" name="categoria" class="form-control">
          
        </select>
      </div>
</div>

<!-- Nombre o código del profesor???-->
<div class="form-group">
  <label class="col-md-4 control-label" for="NP">Nombre del Profesor</label>  
  <div class="col-md-4">
  <input id="np" name="Nombre del profesor" placeholder="Nombre" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="des">Descripción</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="descripcion" name="Descripción del curso"></textarea>
  </div>
</div>


<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Agregar</button>
    <button id="cancel" name="cancelar" class="btn btn-primary">Cancelar</button>
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <div class="col-md-4"></div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <div class="col-md-4"></div>
</div>

</fieldset>
</form>

</div>