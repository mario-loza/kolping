<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
<?php
$Cargo=$_POST['Cargo'];
$Nom_Postul=$_POST['Nom_Postulante'];
$Fc_Form1=$_POST['Fc_Form1'];
$Fc_Form2=$_POST['Fc_Form2'];
$Fc_Form3=$_POST['Fc_Form3'];
$Ptj_Obt_Fc_Form=$_POST['Ptj_Obt_Fc_Form'];
$Ptj_Ponderado =$_POST['Ptj_Pond'];
$Fc_Est_Comp1=$_POST['Fc_Est_Compl1'];
$Fc_Est_Comp2=$_POST['Fc_Est_Compl2'];
$Fc_Est_Comp3=$_POST['Fc_Est_Compl3'];
$Ptj_Obt_Compl=$_POST['Ptj_Obt_Compl'];
$Ptj_Pond_Compl=$_POST['Ptj_Pond_Compl'];
$Fc_Cu_Act1=$_POST['Fc_Cu_Act1'];
$Fc_Cu_Act2=$_POST['Fc_Cu_Act2'];
$Fc_Cu_Act3=$_POST['Fc_Cu_Act3'];
$Ptj_Obt_Fc_Cu_Act=$_POST['Ptj_Obt_Fc_Cu_Act'];
$Ptj_Pond_Fc_Cu_Act=$_POST['Ptj_Pond_Fc_Cu_Act'];
$Exp_Esp_Cgo=$_POST['Exp_Esp_Cgo'];
$Exp_Rel_Cgo=$_POST['Exp_Rel_Cgo'];
$Ptj_Obt_Exp_Esp=$_POST['Ptj_Obt_Exp_Esp'];
$Ptj_Pond_Exp_Esp=$_POST['Ptj_Pond_Exp_Esp'];
$Ptj_Obt_Exp_Rel=$_POST['Ptj_Obt_Exp_Rel'];
$Ptj_Pond_Exp_Rel=$_POST['Ptj_Pond_Exp_Rel'];
$Estabi_Lab=$_POST['Estabi_Lab'];
$Ptj_Obt_Lab=$_POST['Ptj_Obt_Lab'];
$Ptj_Pond_Lab=$_POST['Ptj_Pond_Lab'];
$Ed=$_POST['Ed'];
$Ptj_Obt_Ed=$_POST['Ptj_Obt_Ed'];
$Ptj_Pond_Ed=$_POST['Ptj_Pond_Ed'];
$Ptj_To_Obt=$_POST['Ptj_To_Obt'];
$Ptj_To_Pond=$_POST['Ptj_To_Pond'];
$Pret_Sal=$_POST['Pret_Sal'];
$Porc_Obt=$_POST['Porc_Obt'];
$Rec_Ev=$_POST['Rec_Ev'];
$Obs=$_POST['Obs'];
$Nom_Ev=$_POST['Nom_Ev'];
$Cgo_Ev=$_POST['Cgo_Ev'];
$Fch=$_POST['Fch'];
$Hr_Reg=$_POST['Hr_Reg'];
echo"$Cargo";
echo"$Nom_Postul";
echo"$Fc_Form1";
echo"$Fc_Form2";
echo"$Fc_Form3";
echo"$Ptj_Obt_Fc_Form";
echo"$Ptj_Ponderado";
echo"$Fc_Est_Comp1";
echo"$Fc_Est_Comp2";
echo"$Fc_Est_Comp3";
echo"$Ptj_Obt_Compl";
echo"$Ptj_Pond_Compl";
echo"$Fc_Cu_Act1";
echo"$Fc_Cu_Act2";
echo"$Fc_Cu_Act3";
echo"$Ptj_Obt_Fc_Cu_Act";
echo"$Ptj_Pond_Fc_Cu_Act";
echo"$Exp_Esp_Cgo";
echo"$Exp_Rel_Cgo";
echo"$Ptj_Obt_Exp_Esp";
echo"$Ptj_Pond_Exp_Esp";
echo"$Ptj_Obt_Exp_Rel";
echo"$Ptj_Pond_Exp_Rel";
echo"$Estabi_Lab";
echo"$Ptj_Obt_Lab";
echo"$Ptj_Pond_Lab";
echo"$Ed";
echo"$Ptj_Obt_Ed";
echo"$Ptj_Pond_Ed";
echo"$Ptj_To_Obt";
echo"$Ptj_To_Pond";
echo"$Pret_Sal";
echo"$Porc_Obt";
echo"$Rec_Ev";
echo"$Obs";
echo"$Nom_Ev";
echo"$Cgo_Ev";
echo"$Fch";
echo"$Hr_Reg";

//establecer conexion con la base de datos
  $conexion= mysql_connect("localhost","root","");
  $db=mysql_select_db("kolpin",$conexion);
  
  $sql="SELECT * FROM evaluacioncurricula  WHERE Nom_Postulante = '$Nom_Postul'";
  $resultado= mysql_query($sql,$conexion);
  $filas=mysql_affected_rows($conexion);

  echo"<BR>nro filas $filas";
  if( $filas == 0 )
  {
   echo "<BR>El nombre especificado no existe";
   //insertar datos en la tabla 	 	 	 	 	 	 	 	
    $sql="INSERT INTO evaluacioncurricula(Cargo,Nom_Postulante,Fc_Form1,Fc_Form2,Fc_Form3,Ptj_Obt_Fc_Form,Ptj_Pond,Fc_Est_Compl1,Fc_Est_Compl2,Fc_Est_Compl3,Ptj_Obt_Compl,Ptj_Pond_Compl,Fc_Cu_Act1,Fc_Cu_Act2,Fc_Cu_Act3,Ptj_Obt_Fc_Cu_Act,Ptj_Pond_Fc_Cu_Act,Exp_Esp_Cgo,Exp_Rel_Cgo,Ptj_Obt_Exp_Esp,Ptj_Pond_Exp_Esp,Ptj_Obt_Exp_Rel,Ptj_Pond_Exp_Rel,Estb_Lab,Ptj_Obt_Estb_Lab,Ptj_Pond_Estb_Lab,Ed,Ptj_Obt_Ed,Ptj_Pond_Ed,Ptj_To_Obt,Ptj_To_Pond,Pret_Sal,Porc_Obt,Rec_Ev,Obs,Nom_Ev,Cgo_Ev,Fch,Hr_Reg) VALUES('$Cargo','$Nom_Postul','$Fc_Form1','$Fc_Form2','$Fc_Form3','$Ptj_Obt_Fc_Form','$Ptj_Ponderado','$Fc_Est_Comp1','$Fc_Est_Comp2','$Fc_Est_Comp3','$Ptj_Obt_Compl','$Ptj_Pond_Compl','$Fc_Cu_Act1','$Fc_Cu_Act2','$Fc_Cu_Act3','$Ptj_Obt_Fc_Cu_Act','$Ptj_Pond_Fc_Cu_Act','$Exp_Esp_Cgo','$Exp_Rel_Cgo','$Ptj_Obt_Exp_Esp','$Ptj_Pond_Exp_Esp','$Ptj_Obt_Exp_Rel','$Ptj_Pond_Exp_Rel','$Estabi_Lab','$Ptj_Obt_Lab','$Ptj_Pond_Lab','$Ed','$Ptj_Obt_Ed','$Ptj_Pond_Ed','$Ptj_To_Obt','$Ptj_To_Pond','$Pret_Sal','$Porc_Obt','$Rec_Ev','$Obs','$Nom_Ev','$Cgo_Ev','$Fch','$Hr_Reg')";
 
$resultado=mysql_query($sql);
   echo"resultado:$resultado<BR>";
   //mostrar datos en la tabla
   $resultado=mysql_query ("SELECT * FROM evaluacioncurricula" ,$conexion);

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
	echo"<td>$fila[35]</td>";
	echo"<td>$fila[36]</td>";
	echo"<td>$fila[37]</td>";
	echo"<td>$fila[38]</td>";
	echo"<td>$fila[39]</td>";
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