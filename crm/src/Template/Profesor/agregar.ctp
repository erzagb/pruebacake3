<script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
<script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>


<div class="container">
	<div class="row">
		<h2>Agregar Profesor</h2>
	</div>
    <form class="form-horizontal">
<fieldset>
    
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nombre del profesor">Nombre</label>  
  <div class="col-md-4">
  <input id="NomProf" name="Nombre del profesor"  class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Apellidos del profesor">Apellidos</label>  
  <div class="col-md-4">
  <input id="ApllProf" name="Apellidos del profesor"  class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cédula del profesor">Cédula</label>  
  <div class="col-md-4">
  <input id="CedProf" name="Cédula del profesor"  class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Codigo del profesor">Código del profesor</label>  
  <div class="col-md-4">
  <input id="CarneProf" name="Codigo del profesor"  class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Codigo del curso">Dirección de residencia</label>  
  <div class="col-md-4">
 <textarea class="form-control" id="descripcion" name="Descripción del curso"></textarea>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Codigo del curso">Direccción de Oficina</label>  
  <div class="col-md-4">
  <textarea class="form-control" id="descripcion" name="Descripción del curso"></textarea>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Codigo del curso">Correos</label>  
  
  <div class="col-md-3 col-xs-offset-0">
  <input id="mail1" name="Correo1" placeholder="Correo oficina" class="form-control input-md" required="" type="text">
  </div>
  
   <div class="col-md-3 col-xs-offset-0">
  <input id="mail2" name="Correo2" placeholder="Correo personal" class="form-control input-md" required="" type="text">
  </div>

</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Codigo del curso">Teléfonos</label>  
  <div class="col-md-2 col-xs-offset-0">
  <input id="telcel" name="Telefono celular" placeholder="Tel. celular" class="form-control input-md" required="" type="text">
  </div>
  
   <div class="col-md-2 col-xs-offset-0">
  <input id="telofic" name="Teléfono oficina" placeholder="Tel. oficina" class="form-control input-md" required="" type="text">
  </div>
  
   <div class="col-md-2 col-xs-offset-0">
  <input id="telcasa" name="Teléfono de la residencia" placeholder="Tel. residencia" class="form-control input-md" required="" type="text">
  </div>
  
  
</div>




<div class="row">
		<h3>Información personal</h3>
	</div>


<div class="form-group">
      <label class="col-md-4 control-label" for="Sede">Sede afiliada</label>
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

 <label class="col-md-4 control-label" for="Cursos" >Cursos que esta impartiendo actualmente</label>
<br><br>
<div class="form-group">
    <label class="col-md-4 control-label" for="Cursos" ></label>
      <div class="col-md-2">
        <select id="Cursos" name="Sede" class="form-control">
          <option value="1">Cursos</option>
        </select>
      </div>
      
      <div class="col-md-2">
        <select id="Sedes" name="Sede" class="form-control">
          <option value="1">Sedes</option>
        </select>
      </div>
         <button type="button" class="btn btn-info addOneMoreSme" id="tan_btn1"><span class="glyphicon glyphicon-plus"></span></button> 
</div>

<div class="form-group">

 <div class="container">
        <label class="col-md-4 control-label" for="Cursos" >Cursos que el profesor ha impartido</label>
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