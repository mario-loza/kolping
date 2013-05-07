<?php
mysql_connect("localhost","root","");
mysql_select_db("kolpin");
extract($_POST);
mysql_query("SET NAMES utf8");
$sql="SELECT * FROM evaluaciontecnica WHERE Cargo_Postulante LIKE '%$nombrecargo%' and Nom_Postulante LIKE '%$nombrepostulante%'";
//echo $sql;
$res=mysql_query($sql);
?>
	<table>
    <tr class="cabecera"><td>NOMBRE DEL CARGO</td><td>NOMBRE POSTULANTE</td></tr>
    <?php
while($reg=mysql_fetch_array($res)){
	?>
    <tr class="contenido">
    	<td><?php echo $reg['Cargo_Postulante']?></td>
        <td><?php echo $reg['Nom_Postulante']?></td>
        <?php /*
        <td><a href="modificar.php?cod=<?php echo $reg['id']?>">Modificar</a></td>
        <td><a href="eliminar.php?cod=<?php echo $reg['id']?>" class="eliminar">Eliminar</a></td>
		*/?>
        <td><a href="reporte.php?cod=<?php echo $reg['CodEvaluacionTecnica']?>" class="reporte">Reporte</a></td>
    </tr>
    <?php	
}
?>
</table>