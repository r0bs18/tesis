<div class="flex_dashboard">
  <?php include("includes/head.php") ?>
  <?php include("includes/nav_bar.php"); ?>
  <div class="flex_dashboard_item dashboard_container">
    <div class="ingreso_usuario">
        <form action="funciones/ingreso_usuario.php" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Cedula</label>
                        <input type="text" class="form-control border-input" placeholder="Cedula" name="Cedula" minlength="7" maxlength="8" required >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control border-input" placeholder="Nombre" name="Nombre" minlength="3" maxlength="40" required >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control border-input" placeholder="Apellido" name="Apellido" minlength="5" maxlength="50" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="text" class="form-control border-input" placeholder="Telefono" name="Telefono" minlength="10" maxlength="12" required >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo</label>
                        <input type="Email" class="form-control border-input" placeholder="Correo" name="Correo" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Direccion</label>
                        <input type="text" class="form-control border-input" placeholder="Direccion" name="Direccion" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>MSDS</label>
                        <input type="text" class="form-control border-input" placeholder="MSDS" name="MSDS" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>CMVL</label>
                        <input type="text" class="form-control border-input" placeholder="CMVL" name="CMVL">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>INSAI</label>
                        <input type="text" class="form-control border-input" placeholder="INSAI" name="INSAI" >
                    </div>
                </div>
            </div>

            <div class="row">
                
                    <div class="col-md-4" >
                        <div class="form-group">
                            <Label>Nivel de Usuario</Label>
                            <SELECT class="form-control border-input" name="Nivel" >
                                <OPTION value="1">Master</OPTION>
                                <OPTION value="2">Doctor</OPTION>
                                <OPTION value="3">Administrativo</OPTION>
                                <OPTION value="4">Usuario Visitante</OPTION>
                            </SELECT>
                            </div>
                        </div>  
                        <div class="col-md-4" >
                            <div class="form-group">
                                <Label>Alias del Usuario</Label>
                                <input type="text" class="form-control border-input" placeholder="Alias Usuario" name="Alias" required >
                            </div>
                        </div>
                        <div class="col-md-4" >
                            <div class="form-group">
                                <Label>Clave</Label>
                                <input type="password" class="form-control border-input" placeholder="Contraseña" name="Clave" required>
                            </div>
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
</div>
<?php include("includes/footer_script.php") ?>