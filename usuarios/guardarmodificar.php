<?php
mysql_connect("localhost","root","");
mysql_select_db("kolpin");
extract($_POST);
if($contrasena!=""){
	$sql="UPDATE usuarios SET usuario='{$usuario}',password='{$contrasena}',email='{$email}',nivel='$nivel' WHERE id=$id";
}else{
	$sql="UPDATE usuarios SET usuario='{$usuario}',email='{$email}',nivel='$nivel' WHERE id=$id";
}
mysql_query($sql);
header("Location:listar.php");
?>