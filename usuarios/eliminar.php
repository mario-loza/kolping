<?php
mysql_connect("localhost","root","");
mysql_select_db("kolpin");
$id=$_GET['cod'];
$sql="UPDATE usuarios SET activo=0 WHERE id=$id";
$res=mysql_query($sql);
?>
