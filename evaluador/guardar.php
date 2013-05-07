<?php
$Nombres=$_POST['Nombres'];
$Paterno=$_POST['Paterno'];
$Materno=$_POST['Materno'];
$Area=$_POST['Area'];
mysql_connect("localhost","root","");
mysql_select_db("kolping");
mysql_query("INSERT INTO evaluador VALUES(NULL,'$Nombres','$Paterno','$Materno','$Area',)");
?>