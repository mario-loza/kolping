<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
	<fieldset>
    	<legend>Criterio de Busqueda de EVALUACION TECNICA</legend>
        <form action="buscar.php" id="formulario" method="post">
            NOMBRE DEL CARGO: <input type="text" name="nombrecargo"> 
            NOMBRE DEL POSTULANTE: <input type="text" name="nombrepostulante">
            <input type="submit" value="Buscar">
        </form>
        <?php //if($_SESSION['nivel']==1 || $_SESSION['nivel']==2){?>
        <a href="reclutar.php" class="boton">Nueva EVALUACION TECNICA</a>
        <?php //}?>
    </fieldset>
    <fieldset id="resultado"></fieldset>
</div>
<?php include_once("../pie.php");?>