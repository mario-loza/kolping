<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
	<fieldset>
    	<legend>Reporte de PERIODO PRUEBA</legend>
		<iframe src="../impresion/periodoprueba/reporte.php?cod=<?php echo $_GET['cod']?>" width="100%" height="700"></iframe>        
    </fieldset>
</div>
<?php include_once("../pie.php");?>