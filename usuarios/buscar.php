<?php
mysql_connect("localhost","root","");
mysql_select_db("kolpin");
extract($_POST);
mysql_query("SET NAMES utf8");
$sql="SELECT * FROM usuarios WHERE usuario LIKE '%$usuario%' and email LIKE '%$email%'";
//echo $sql;
$res=mysql_query($sql);
?>
	<table>
    <tr class="cabecera"><td>Usuario</td><td>Email</td><td>Nivel de Usuario</td></tr>
    <?php
while($reg=mysql_fetch_array($res)){
	?>
    <tr class="contenido">
    	<td><?php echo $reg['usuario']?></td>
        <td><?php echo $reg['email']?></td>
        <td>
        	<?php switch($reg['nivel']){
				case 1:{echo "SuperAdministrador";}break;
				case 2:{echo "Gerente General";}break;
				case 3:{echo "Contador";}break;
				case 4:{echo "Recursos Humanos";}break;
				}
				?>
        </td>
        <?php /*
        <td><a href="modificar.php?cod=<?php echo $reg['id']?>">Modificar</a></td>
        <td><a href="eliminar.php?cod=<?php echo $reg['id']?>" class="eliminar">Eliminar</a></td>
		*/?>
        <td><a href="modificar.php?cod=<?php echo $reg['id']?>" class="reporte">Modificar</a></td>
        
    </tr>
    <?php	
}
?>
</table>