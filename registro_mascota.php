<?php include("includes/head.php") ?>
<?php include("includes/nav_bar.php"); ?>
<div class="flex_dashboard_item dashboard_container">
  <div class="ingreso_mascota">
    <form action="funciones/ingresar_mascota.php" method="POST">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Número de RFID </label>
            <input type="text" class="form-control border-input" placeholder="Número de RFID" name="" maxlength="12" required >
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Cédula del Propietario</label>
            <input type="text" class="form-control border-input" placeholder="Cedula" name="Cedula" minlength="7" maxlength="8" required >
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control border-input" placeholder="Nombre de la Mascota" name="Nombre" minlength="2" maxlength="20" required >
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Sexo</label>
            <SELECT class="form-control border-input" name="Nivel" >
              <OPTION value="1">Macho</OPTION>
              <OPTION value="2">Hembra</OPTION>
            </SELECT>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Color</label>
            <input type="text" class="form-control border-input" placeholder="Color de la Mascota" name="Color" minlength="4" maxlength="45" required >
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Fecha de Nacimiento</label>
            <input  type="date" class="form-control border-input">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Direccion</label>
            <input type="text" class="form-control border-input" placeholder="Direccion del Propietario" name="Direccion" required>
          </div>
        </div>
        
      </div>
      <div class="row">
        
        <div class="col-md-4" >
          <div class="form-group">
            <label>Especie</label>
            <SELECT class="form-control border-input" name="Especie">
              <?php
              $query =" SELECT * FROM 'especies'";
              $resultado = mysqli_query($conexion,$query);
              while ($fila=mysqli_fetch_array($resultado))
              {
              echo "<OPTION value=".fila["idEspecie"].">".fila["Nombre_Especie"]."</OPTION>";
              }
              ?>
            </SELECT>
          </div>
        </div>
        <div class="col-md-4" >
          <div class="form-group">
            <label>Razas</label>
            <SELECT class="form-control border-input" name="Razas">
              <?php
              $query =" SELECT `idRazas`, `Nombre_Raza`, `Descripcion` FROM `razas` WHERE `Especies_idEspecies`='1'";
              $resultado = mysqli_query($conexion,$query);
              while ($fila=mysqli_fetch_array($resultado))
              {
              echo "<OPTION value=".fila["idEspecie"].">".fila["Nombre_Especie"]."</OPTION>";
              }
              ?>
            </SELECT>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>MicroChip</label>
            <input type="text" class="form-control border-input" placeholder="Número de MicroChip" name="MicroChip" maxlength="50">
          </div>
        </div>
        
      </div>
      <div class="row">
      </div>
      
      
      <div class="row">
        
        <div class="form-group">
        </div>
        
      </div>
      
      <div>
        <div class="text-center">
          <button type="submit" class="btn btn-info btn-fill btn-wd">Registrar</button>
        </div>
      </div>
      <div class="clearfix">
      </div>
    </form>
  </div>
</div>
<?php include("includes/footer_script.php") ?>