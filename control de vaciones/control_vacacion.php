<?
  $Nom= $_POST['Nom_Ape'];
  $cargo= $_POST['Cargo'];
  $Area= $_POST['Area'];
  $Unidad= $_POST['Unidad'];
  $Jefe= $_POST['Jefe_direc'];
  $Fecha_D= $_POST['Fecha_De'];
  $Fecha_A= $_POST['Fecha_A'];
  $Gestion= $_POST['Gestion'];
  $Dias_Habil= $_POST['Dias_Habil']; 
  $Dias_Usa= $_POST['Dias_Usa'];
  $Detalle= $_POST['Detalle'];
  $Fecha_Vaca= $_POST['Fecha_Vaca'];
  $Fecha_Descanso= $_POST['Fecha_Descanso'];
  $Responsable= $_POST['Responsable'];
//mostar los datos
  echo"$Nom";
  echo"$cargo";
  echo"$Area";
  echo"$Unidad";
  echo"$Jefe";
  echo"$Fecha_D";
  echo"$Fecha_A";
  echo"$Gestion";
  echo"$Dias_Habil";
  echo"$Dias_Usa";
  echo"$Detalle";
  echo"$Fecha_Vaca";
  echo"$Fecha_Descanso";
  echo"$Responsable";
  //establecer conexion con la base de datos
  $conexion= mysql_connect("localhost","root","");
  $db=mysql_select_db("kolpin",$conexion);
  
  $sql="SELECT * FROM controlvacaciones  WHERE Nom_Ape = '$ Nombre'";
  $resultado= mysql_query($sql,$conexion);
  $filas=mysql_affected_rows($conexion);
  echo"<BR>nro filas $filas";
  if( $filas == 0 )
  {
   echo "<BR>El nombre especificado no existe";
   //insertar datos en la tabla
   $sql="INSERT INTO controlvacaciones (Nom_Ape,Cargo,Area_trabajo,Unidad, Jefe_Directo,Fecha_Ini,Fecha_Fin,Gestion,Dias_habil,Dias_usados,Detalle,Uso_vacacion_Fch_De, Uso_vacacion_Fch_A,Responsable)VALUES('$Nom','$cargo','$Area','$Unidad','$Jefe','$Fecha_D','$Fecha_A','$Gestion','$Dias_Habil','$Dias_Usa','$Detalle','$Fecha_Vaca','$Fecha_Descanso','$Responsable')";
  
   $resultado=mysql_query($sql);
   echo"resultado:$resultado<BR>";
   //mostrar datos en la tabla
   $resultado=mysql_query ("SELECT * FROM controlvacaciones" ,$conexion);

   echo"Postulantes";
   echo"<table border='1'>";
   while($fila = mysql_fetch_array($resultado) )
   {
    echo"<tr>";
    echo"<td>$fila[0]</td>";
    echo"<td>$fila[1]</td>";
	echo"<td>$fila[2]</td>";
	echo"<td>$fila[3]</td>";
	echo"<td>$fila[4]</td>";
	echo"<td>$fila[5]</td>";
	echo"<td>$fila[6]</td>";
	echo"<td>$fila[7]</td>";
	echo"<td>$fila[8]</td>";
    echo"<td>$fila[9]</td>";
	echo"<td>$fila[10]</td>";
	echo"<td>$fila[11]</td>";
	echo"<td>$fila[12]</td>";
	echo"<td>$fila[13]</td>";
	echo"<td>$fila[14]</td>";
    echo"</tr>";
   }
    echo"</table>";
  }
  else
  {
   echo"<BR>El nombre ya existe en los contactos.No se grabaron los datos";
  }
mysql_close($conexion);
?>        
     
  

  