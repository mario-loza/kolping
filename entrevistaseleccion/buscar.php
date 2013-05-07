<?php
mysql_connect("localhost","root","");
mysql_select_db("kolpin");
extract($_POST);
mysql_query("SET NAMES utf8");
$sql="SELECT * FROM entrevistaseleccion WHERE Fch LIKE '%$fecha%' and Nom_Postulante LIKE '%$nombrepostulante%' and Cgo_Postulante LIKE '%$cargopostula%'";
//echo $sql;
$res=mysql_query($sql);
?>
	<table>
    <tr class="cabecera"><td>Fecha</td><td>Nombre Postulante</td><td>Cargo a Postular</td><td>Pretensión Salarial</td></tr>
    <?php
while($reg=mysql_fetch_array($res)){
	?>
    <tr class="contenido">
    	<td><?php echo $reg['Fch']?></td>
        <td><?php echo $reg['Nom_Postulante']?></td>
        <td><?php echo $reg['Cgo_Postulante']?></td>
        <td><?php echo $reg['Pret_Sal']?></td>
        <?php /*
        <td><a href="modificar.php?cod=<?php echo $reg['id']?>">Modificar</a></td>
        <td><a href="eliminar.php?cod=<?php echo $reg['id']?>" class="eliminar">Eliminar</a></td>
		*/?>
        <td><a href="reporte.php?cod=<?php echo $reg['CodEntrevistaSeleccion']?>" class="reporte">Reporte</a></td>
    </tr>
    <?php	
}
?>
</table>