<?php 
error_reporting(0);
include "include/conexion.php"; 
       include "include/accions.php";
       ?>

<body>
    <div class="container-md content-justify-center py2">
        <div class="row text_center">
            <h1 class="text.succes ss">Registro</h1>
</div>
</div>
<form id="Registro" Action="<?php echo $_SERVER["php_SELT"];?>" METHOD="POST">
<div class="row text-center">
    <div clas="col-son-12 col-md-12 col-lg-12">
        <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required>
</div>
<div class="row text_center">
    <div class="col_sm_12 col_md_12 col_lg_12">
        <input type="text" name="Apellido" class="form-center" placeholder="Apellido" required>
    </div>
</div>
<div class="row text_center">
    <div class="col_sm_12 col_md_12 col_lg_12">
     <textotarea class="form-control" name="Direccion">Direccion</textotarea>
    </div>
</div>
<div class="row text_center">
    <div class="col_sm_12 col_md_12 col_lg_12">
        <input type="NTelefono" name="NTelefono" class="form-control" placeholder="Numero de telefono" required>
    </div>
</div>
<div class="row text_center">
    <div class="col_sm_12 col_md_12 col_lg_12">
        <input type="Date" name="FechaN" class="form-control" required>
    </div>
</div>
<div class="row text_center">
    <div class="col_sm_12 col_md_12 col_lg_12">
        <input type="Correo" name="Correo" placeholder="Correo" class="form-control" required>
    </div>
</div>
<div class="row text_center">
    <div class="col_sm_12 col_md_12 col_lg_12">
        <input type="submit" value="Registrarse" name="btn" class="btn" class="btn lgtn_sucess">
    </div>
</div>
</form>
</form>
</body>
