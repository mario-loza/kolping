<?php
$ruta="../";
include_once("../cabecerahtml.php");
mysql_connect("localhost","root","");
mysql_select_db("kolpin");
$sql="SELECT ComentarioContador FROM requerimientopersonal WHERE CodRequerimientoPersonal=".$_GET['cod'];
$res=mysql_query($sql);
$reg=mysql_fetch_array($res);
?>
<div class="grid_12">
<fieldset>
    	<legend>Comentario Adicional del Contador del REQUERIMIENTO DOTACION DEL PERSONAL</legend>
        <form action="guardarcontador.php" method="post">
        	<input type="hidden" name="cod" value="<?php echo $_GET['cod']?>"/>
            Comentario:
            <br>
            <textarea name="comentario" cols="100" rows="10" autofocus><?php echo $reg['ComentarioContador']?></textarea>
            <hr>
            <input type="submit" value="Guardar">
        </form>
    </fieldset>

</div>
<?php include_once("../pie.php");?>