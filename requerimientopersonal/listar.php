<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
	<fieldset>
    	<legend>Criterio de Busqueda de REQUERIMIENTO DOTACION DEL PERSONAL</legend>
        <form action="buscar.php" id="formulario" method="post">
            DESIGNACION DEL CARGO: <input type="text" name="designacion"> 
            OBJETIVO DEL CARGO: <input type="text" name="objetivo">
            <input type="submit" value="Buscar">
        </form>
        <?php //if($_SESSION['nivel']==1 || $_SESSION['nivel']==2){?>
        <a href="requerimiento_personal.php" class="boton">Nuevo Requerimiento Dotación de Personal</a>
        <?php //}?>
    </fieldset>
    <fieldset id="resultado"></fieldset>
</div>
<?php include_once("../pie.php");?>