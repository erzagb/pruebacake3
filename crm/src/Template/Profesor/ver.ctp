<script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
<script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>


<div class="container">
	<div class="row">
		<h2>Lista de profesores</h2>
	</div>
    <form class="form-horizontal">
<fieldset>

<br>
<!-- Text input-->
<div class="form-group">
    
        <div class="col-md-4 col-xs-offset-0">
          <label class="col-md-4 control-label" for="NP">Cédula del Profesor</label>  
          <div class="col-md-6">
              <input id="np" name="Cedula del profesor" placeholder="cedula" class="form-control input-md" required="" type="text">
          </div>
        </div>
      
  
</div>

<!-- seccion tabla -->
<div class="container">
        <br><br>
        <!--table-->
       <table class="table table-striped">
       <thead>
            <tr class="info">
                <th>Seleccionar</th>
                <th>Cedula</th>
                <th>Codigo</th>
                <th>Nombre y apellidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
        <!--first example-->
            <td><input id="checkbox1" type="checkbox"></td>
            <td>X-XXX-XXXX</td>
            <td>XXXXX</td>
            <td>José</td>
        </tr>
        <tr>
        <!--second example-->
            <td><input id="checkbox1" type="checkbox"></td>
            <td>X-XXX-XXXX</td>
            <td>XXXXX</td>
            <td>Daniel</td>
        </tr>
        <tr>
        <!--third example-->
            <td><input id="checkbox1" type="checkbox"></td>
            <td>X-XXX-XXXX</td>
            <td>XXXXX</td>
            <td>Karol</td>
        </tr>
        </tbody>
    </table>
    </div>

<!-- Button (Double) -->
<div class="form-group">
     <div class="col-md-2 col-xs-offset-0">
      <label class="col-md-8 control-label" for="button1id"></label>
      <div class="col-md-4">
        <button id="button1id" name="button1id" class="btn btn-success">Ver Perfil</button>
      </div>
     </div>
     
      <div class="col-md-2 col-xs-offset-0">
          <label class="col-md-8  control-label" for="button1id"></label>
          <div class="col-md-4">
            <button id="button1id" name="button1id" class="btn btn-success">Exportar lista</button>
          </div>
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