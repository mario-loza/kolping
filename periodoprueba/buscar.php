<?php
mysql_connect("localhost","root","");
mysql_select_db("kolpin");
extract($_POST);
mysql_query("SET NAMES utf8");
$sql="SELECT * FROM periodoprueva WHERE Fch_Ev LIKE '%$fecha%' and Nom_Ev LIKE '%$nombrepostulante%' and Cargo LIKE '%$cargopostula%'";
//echo $sql;
$res=mysql_query($sql);
?>
	<table>
    <tr class="cabecera"><td>Fecha</td><td>Nombre Evaluado</td><td>Cargo Evaluado</td><td>Fecha Ingreso</td><td>Area</td></tr>
    <?php
while($reg=mysql_fetch_array($res)){
	?>
    <tr class="contenido">
    	<td><?php echo $reg['Fch_Ev']?></td>
        <td><?php echo $reg['Nom_Ev']?></td>
        <td><?php echo $reg['Cargo']?></td>
        <td><?php echo $reg['Fch_Ing']?></td>
        <td><?php echo $reg['Area']?></td>
        <?php /*
        <td><a href="modificar.php?cod=<?php echo $reg['id']?>">Modificar</a></td>
        <td><a href="eliminar.php?cod=<?php echo $reg['id']?>" class="eliminar">Eliminar</a></td>
		*/?>
        <td><a href="reporte.php?cod=<?php echo $reg['CodPeriodoPrueba']?>" class="reporte">Reporte</a></td>
    </tr>
    <?php	
}
?>
</table>