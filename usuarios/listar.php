<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
	<fieldset>
    	<legend>Criterio de Busqueda de usuarios</legend>
        <form action="buscar.php" id="formulario">
            Usuario: <input type="text" name="usuario"> Email: <input type="text" name="email">
            <input type="submit" value="Buscar">
        </form>
        <?php if($_SESSION['nivel']==1 || $_SESSION['nivel']==2){?>
        <a href="nuevo.php" class="boton">Nuevo Usuario</a>
        <?php }?>
    </fieldset>
    <fieldset id="resultado"></fieldset>
</div>
<?php include_once("../pie.php");?>