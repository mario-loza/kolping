<?php
mysql_connect("localhost","root","");
mysql_select_db("kolpin");
extract($_POST);
$fecha=date("Y-m-d");
if($contrasena!=""){
	$sql="INSERT INTO usuarios VALUES(NULL,'{$usuario}','{$contrasena}','','{$email}','$fecha',$nivel,1)";
}else{
	$sql="INSERT INTO usuarios VALUES(NULL,'{$usuario}','','{$email}','$fecha',$nivel,1)";	
}

mysql_query($sql);
header("Location:listar.php");
?>