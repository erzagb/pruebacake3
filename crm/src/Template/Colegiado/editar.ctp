<script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
<script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>


<div class="container">
	<div class="row">
		<h2>Editar  Colegiado</h2>
		<form action="#" class="col-md-4 col-xs-offset-8">
             <div class="input-group">
               <input type="text" class="form-control" name="x" placeholder="cédula o carne">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
             </div>
         </form>
	</div>
    <form class="form-horizontal">
<fieldset>
<br>
<br>
    
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nombre del colegiado">Nombre</label>  
  <div class="col-md-4">
  <input id="NomColeg" name="Nombre del colegiado"  class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Apellidos del colegiado">Apellidos</label>  
  <div class="col-md-4">
  <input id="ApllColeg" name="Apellidos del colegiado"  class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cédula del colegiado">Cédula</label>  
  <div class="col-md-4">
  <input id="CedColeg" name="Cédula del colegiado"  class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Carné del colegiado">Carné</label>  
  <div class="col-md-4">
  <input id="CarneColeg" name="Carné del colegiado"  class="form-control input-md" required="" type="text">
    
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


<div class="form-group">
      <label class="col-md-4 control-label" for="Sede">Sede Empadronada</label>
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


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Codigo del curso">Moroso</label>  
  <div class="col-md-4">
 <input id="checkbox1" type="checkbox">
    
  </div>
</div>


<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Editar</button>
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