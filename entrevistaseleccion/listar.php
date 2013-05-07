<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
	<fieldset>
    	<legend>Criterio de Busqueda de RECLUTAMIENTO Y SELECCION DEL PERSONAL</legend>
        <form action="buscar.php" id="formulario" method="post">
            FECHA: <input type="date" name="fecha"> <hr />
            NOMBRE DEL POSTULANTE: <input type="text" name="nombrepostulante">
            CARGO AL QUE POSTULA: <input type="text" name="cargopostula">
            <input type="submit" value="Buscar">
        </form>
        <?php //if($_SESSION['nivel']==1 || $_SESSION['nivel']==2){?>
        <a href="seleccione.php" class="boton">Nuevo RECLUTAMIENTO Y SELECCION DEL PERSONAL</a>
        <?php //}?>
    </fieldset>
    <fieldset id="resultado"></fieldset>
</div>
<?php include_once("../pie.php");?>