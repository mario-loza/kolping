<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
	<fieldset>
    	<legend>Reporte de Entrevista de Selección</legend>
		<iframe src="../impresion/entrevistaseleccion/reporte.php?cod=<?php echo $_GET['cod']?>" width="100%" height="700"></iframe>        
    </fieldset>
</div>
<?php include_once("../pie.php");?>