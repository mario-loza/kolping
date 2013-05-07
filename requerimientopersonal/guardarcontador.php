<?php
mysql_connect("localhost","root","");
mysql_select_db("kolpin");
$sql="UPDATE requerimientopersonal SET ComentarioContador='".$_POST['comentario']."'  WHERE CodRequerimientoPersonal=".$_POST['cod'];
$res=mysql_query($sql);
header("Location:listar.php");
?>