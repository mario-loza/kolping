<?php
mysql_connect("localhost","root","");
mysql_select_db("kolpin");
extract($_POST);
mysql_query("SET NAMES utf8");
$sql="SELECT * FROM requerimientopersonal WHERE Nom_Cgo LIKE '%$designacion%' and Obj_Cgo LIKE '%$objetivo%'";
//echo $sql;
$res=mysql_query($sql);
?>
	<table>
    <tr class="cabecera"><td>Designacion del Cargo</td><td>Jefe Directo</td><td>Jefe de Area</td><td>Objetivo del Cargo</td></tr>
    <?php
while($reg=mysql_fetch_array($res)){
	?>
    <tr class="contenido">
    	<td><?php echo $reg['Nom_Cgo']?></td>
        <td><?php echo $reg['Jf_Dir']?></td>
        <td><?php echo $reg['Jf_Area']?></td>
        <td><?php echo $reg['Obj_Cgo']?></td>
        <?php /*
        <td><a href="modificar.php?cod=<?php echo $reg['id']?>">Modificar</a></td>
        <td><a href="eliminar.php?cod=<?php echo $reg['id']?>" class="eliminar">Eliminar</a></td>
		*/?>
        <td><a href="contador.php?cod=<?php echo $reg['CodRequerimientoPersonal']?>" class="reporte">Comentario Contador</a></td>
        <td><a href="rrhh.php?cod=<?php echo $reg['CodRequerimientoPersonal']?>" class="reporte">Comentario RR HH</a></td>
        <td><a href="reporte.php?cod=<?php echo $reg['CodRequerimientoPersonal']?>" class="reporte">Reporte</a></td>
        
    </tr>
    <?php	
}
?>
</table>