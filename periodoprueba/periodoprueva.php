<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
<?php
$Fechas_Evaluador=$_POST['Fecha_Ev'];
$Nom_Ev=$_POST['Nom_Ev'];
$Cargo=$_POST['Cargo'];
$Fch_Ing=$_POST['Fch_Ing'];
$Area=$_POST['Area'];
$Comp=$_POST['Comp'];
$Adapt=$_POST['Adapt'];
$Resp=$_POST['Resp'];
$Rel_Int=$_POST['Rel_Int'];
$Asist_Puntual=$_POST['Asist_Punt'];
$Con_Pue=$_POST['Con_Pue'];
$Prod=$_POST['Prod'];
$Trabajo_Pres=$_POST['Trab_Pres'];
$Prec_Trab=$_POST['Prec_Trab'];
$Inicio=$_POST['Inic'];
$Aten_Conclu=$_POST['Atencion_Concentracion'];
$Pres=$_POST['Pres'];
$Trab_Eq=$_POST['Trab_Eq'];
$Lider=$_POST['Lid_Postulante'];
$Compr=$_POST['Compr'];
$Calif=$_POST['Calif'];
$Nombro=$_POST['Nom'];
$Coment_Ev=$_POST['Coment_Ev'];
$Inc_Ev=$_POST['Inc_Ev'];
$Eval=$_POST['Eval'];
$Crg_Ev=$_POST['Crg_Ev'];
$Concl_Pp=$_POST['Concl_Pp'];
  echo"Fechas_Evaluador";
  echo"Nom_Ev";
  echo"Cargo";
  echo"Fch_Ing";
  echo"Area";
  echo"Comp";
  echo"Adapt";
  echo"Resp";
  echo"Rel_Int";
  echo"Asist_Puntual";
  echo"Con_Pue";
  echo"Prod";
  echo"Trabajo_Pres";
  echo"Prec_Trab";
  echo"Inicio";
  echo"Aten_Conclu";
  echo"Pres";
  echo"Trab_Eq";
  echo"Lider";
  echo"Compr";
  echo"Calif";
  echo"Nombro";
  echo"Coment_Ev";
  echo"Inc_Ev";
  echo"Eval";
  echo"Crg_Ev";
  echo"Concl_Pp";
//establecer conexion con la base de datos
  $conexion= mysql_connect("localhost","root","");
  $db=mysql_select_db("kolpin",$conexion);
  
  $sql="SELECT * FROM periodoprueva WHERE Nom_Ev = '$Nom_Ev'";
  $resultado= mysql_query($sql,$conexion);
  $filas=mysql_affected_rows($conexion);

  echo"<BR>nro filas $filas";
  if( $filas == 0 )
  {
   echo "<BR>El nombre especificado no existe";
   //insertar datos en la tabla
   $sql="INSERT INTO periodoprueva(Fch_Ev,Nom_Ev,Cargo,Fch_Ing,Area,Comp,Adapt,Resp,Rel_Int,Asist_Punt,Con_Pue,Prod,Trab_Pres,Prec_Trab,Inic,At_Conc,Pres,Trab_Eq,Lid,Compr,Calif,Recom_Carg,Coment_Ev,Inc_Ev,Eval,Crg_Ev,Concl_Pp)
   VALUES('$Fechas_Evaluador','$Nom_Ev','$Cargo','$Fch_Ing','$Area','$Comp','$Adapt','$Resp','$Rel_Int','$Asist_Puntual','$Con_Pue','$Prod','$Trabajo_Pres','$Prec_Trab','$Inicio','$Aten_Conclu','$Pres','$Trab_Eq','$Lider','$Compr','$Calif','$Nombro','$Coment_Ev','$Inc_Ev','$Eval','$Crg_Ev','$Concl_Pp')";

   $resultado=mysql_query($sql);
   echo"resultado:$resultado<BR>";
   //mostrar datos en la tabla
   $resultado=mysql_query ("SELECT * FROM periodoprueva" ,$conexion);

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