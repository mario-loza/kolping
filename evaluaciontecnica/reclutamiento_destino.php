<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
<?
  $postulante= $_POST['Nombre'];
  $cargopostulante= $_POST['Cargo'];
  $Fecha= $_POST['Fecha'];
  $Hr_De= $_POST['Hr_De'];
  $Hr_A= $_POST['Hr_A'];
  $Area= $_POST['Area'];
  $Superv= $_POST['Supervisor'];
  $Con= $_POST['Con_Gr'];
  $Con_Gr_Obs= $_POST['Con_Gr_Obs']; 
  $Con_Tec= $_POST['Con_Tec'];
  $Con_Tc_Obs= $_POST['Con_Tc_Obs'];
  $Pres_Apr= $_POST['Pres_Apr'];
  $Pres_Obs= $_POST['Pres_Obs'];
  $Expr_Apr= $_POST['Expr_Apr'];
  $Expr_Obs= $_POST['Expr_Obs'];
  $Atn_Apr= $_POST['Atn_Apr'];
  $Atn_Obs=$_POST['Atn_Obs'];
  $Acti_Apr=$_POST['Acti_Apr'];
  $Acti_Obs=$_POST['Acti_Obs'];
  $Disp_Apr=$_POST['Disp_Apr'];
  $Disp_Obs=$_POST['Disp_Obs'];
  $Act_Aut_Apr=$_POST['Act_Aut_Apr'];
  $Act_Aut_Obs=$_POST['Act_Aut_Obs'];
  $Din_Apr=$_POST['Din_Apr'];
  $Din_Obs=$_POST['Din_Obs'];
  $Potn_Apr=$_POST['Potn_Apr'];
  $Potn_Obs=$_POST['Potn_Obs'];
  $Comnt=$_POST['Comnt'];
  $Resultado=$_POST['Resultado_Eva'];
  $Conclu=$_POST['Conclusion'];
  $Obs_Por=$_POST['Obser_Porq'];
  $Nec_Capio=$_POST['Nec_Capo'];
  $Nom_Eva=$_POST['Nom_Ev'];
  //mostar los datos
  echo"$postulante";
  echo"$cargopostulante";
  echo"$Fecha";
  echo"$Hr_De";
  echo"$Hr_A";
  echo"$Area";
  echo"$Superv";
  echo"$Con";
  echo"$Con_Gr_Obs";
  echo"$Con_Tec";
  echo"$Con_Tc_Obs";
  echo"$Pres_Apr";
  echo"$Pres_Obs";
  echo"$Expr_Apr";
  echo"$Pres_Obs";
  echo"$Atn_Apr";
  echo"$Atn_Obs";
  echo"$Acti_Apr";
  echo"$Acti_Obs";
  echo"$Disp_Apr";
  echo"$Disp_Obs";
  echo"$Din_Apr";
  echo"$Din_Obs";
  echo"$Potn_Apr";
  echo"$Potn_Obs";
  echo"$Comnt";
  echo"$Resultado";
  echo"$Conclu";
  echo"$Obs_Por";
  echo"$Nec_Capio";
  echo"$Nom_Eva";
	
  //establecer conexion con la base de datos
  $conexion= mysql_connect("localhost","root","");
  $db=mysql_select_db("kolpin",$conexion);
  
  $sql="SELECT * FROM evaluaciontecnica WHERE Nom_Postulante = '$postulante'";
  $resultado= mysql_query($sql,$conexion);
  $filas=mysql_affected_rows($conexion);

  echo"<BR>nro filas $filas";
  if( $filas == 0 )
  {
   echo "<BR>El nombre especificado no existe";
   //insertar datos en la tabla
   $sql="INSERT INTO evaluaciontecnica(Nom_Postulante,Cargo_Postulante,Fch,Hr_De,Hr_A,Area,Superv,Con_Gral_Apr,Con_Gr_Obs,Con_Tec,Con_Tc_Obs,Pres_Apr,Pres_Obs,Expr_Apr,Expr_Obs,Atn_Apr,Atn_Obs,Acti_Apr,Acti_Obs,Disp_Apr,Disp_Obs,Act_Aut_Apr,Act_Aut_Obs,Din_Apr,Din_Obs,Potn_Apr,Potn_Obs,Comnt,Res,Concl,Obs_P,Nec_Cap,Nom_Ev)
    
 VALUES('$postulante','$cargopostulante','$Fecha','$Hr_De','$Hr_A','$Area',' $Superv','$Con',' $Con_Gr_Obs','$Con_Tec','$Con_Tc_Obs','$Pres_Apr',' $Pres_Obs',' $Expr_Apr','$Expr_Obs',' $Atn_Apr','$Atn_Obs','$Acti_Apr','$Acti_Obs','$Disp_Apr','$Disp_Obs','  $Act_Aut_Apr',' $Act_Aut_Obs','$Din_Apr','$Din_Obs',' $Potn_Apr','$Potn_Obs','$Comnt','$Resultado','$Conclu','$Obs_Por','$Nec_Capio','$Nom_Eva')";
  
   $resultado=mysql_query($sql);
   echo"resultado:$resultado<BR>";
   //mostrar datos en la tabla
   $resultado=mysql_query ("SELECT * FROM evaluaciontecnica" ,$conexion);

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
	echo"<td>$fila[15]</td>";
	echo"<td>$fila[16]</td>";
	echo"<td>$fila[17]</td>";
	echo"<td>$fila[18]</td>";
	echo"<td>$fila[19]</td>";
	echo"<td>$fila[20]</td>";
	echo"<td>$fila[21]</td>";
	echo"<td>$fila[22]</td>";
	echo"<td>$fila[23]</td>";
	echo"<td>$fila[24]</td>";
	echo"<td>$fila[25]</td>";
	echo"<td>$fila[26]</td>";
	echo"<td>$fila[27]</td>";
	echo"<td>$fila[28]</td>";
	echo"<td>$fila[29]</td>";
	echo"<td>$fila[30]</td>";
	echo"<td>$fila[31]</td>";
	echo"<td>$fila[32]</td>";
	echo"<td>$fila[33]</td>";
	echo"<td>$fila[34]</td>";
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
</div>
<?php
include_once("../pie.php");
?>