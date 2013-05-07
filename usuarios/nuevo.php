<?php
$ruta="../";
mysql_connect("localhost","root","");
mysql_select_db("kolpin");
//$sql="SELECT * FROM usuarios WHERE activo=1 and id=".$_GET['cod'];
/*$res=mysql_query($sql);
$reg1=mysql_fetch_array($res);
*/
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
	<fieldset>
    	<legend>Modificar el Usuario</legend>
        <form action="guardar.php" method="post">
        	<input type="hidden" name="id" value="<?php echo $_GET['cod']?>">
        	<table>
            	<tr><td>Usuario:</td><td> <input type="text" name="usuario" value="<?php echo $reg1['usuario'];?>"> </td></tr>
                <tr><td>Contraseña:</td><td> <input type="password" name="contrasena"></td></tr>
                <tr><td>Nivel:</td><td> <select name="nivel"><option value="1" <?php echo $reg1['nivel']==1?'selected':'';?>>Super Administrador</option><option value="2" <?php echo $reg1['nivel']==2?'selected':'';?>>Gerente General</option><option value="3" <?php echo $reg1['nivel']==3?'selected':'';?>>Contador</option><option <?php echo $reg1['nivel']==4?'selected':'';?>>Recursos Humanos</option></select></td></tr>
            	<tr><td>Email:</td><td> <input type="text" name="email"  value="<?php echo $reg1['email'];?>"></td></tr>
           		<tr><td><input type="submit" value="Guardar"></td></tr>
            </table>
        </form>
    </fieldset>
</div>
<?php include_once("../pie.php");?>