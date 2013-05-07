<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
<?
  $Nombre_Cargo= $_POST['Nom_Cgo'];
  $Jf_Dir= $_POST['Jf_Dir'];
  $Jf_Area= $_POST['Jf_Area'];
  $Obj_Cgo= $_POST['Obj_Cgo'];
  $Ed_Pref= $_POST['Ed_Pref'];
  $Sex= $_POST['Sex'];
  $Niv_Bachi= $_POST['Niv_Bachiller'];
  $Nivel= $_POST['Niv_Tec_Med'];
  $Niv_Tec_Sup=$_POST['Niv_Tec_Sup'];
  $Niv_Prof=$_POST['Niv_Prof'];
  $Niv_Postu=$_POST['Niv_Postulante'];
  $Niv_Esp=$_POST['Niv_Esp'];
  $E_No_Req=$_POST['E_No_Req'];
  $E_6m_1a=$_POST['E_6m_1a'];
  $E_1a_2a=$_POST['E_1a_2a'];
  $E_2a_4a=$_POST['E_2a_4a'];
  $Exp_Esp=$_POST['Exp_Esp'];
  $Pi_Word=$_POST['Pi_Word'];
  $Pi_Exc=$_POST['Pi_Exc'];
  $Pi_Pw_Po=$_POST['Pi_Pw_Po'];
  $Pi_Acc=$_POST['Pi_Acc'];
  $Pi_Out=$_POST['Pi_Out'];
  $Ot_S1=$_POST['Ot_S1'];
  $Id_Ing=$_POST['Id_Ing'];
  $Id_Al=$_POST['Id_Al'];
  $Id_Aym=$_POST['Id_Aym'];
  $Id_Que=$_POST['Id_Que'];
  $Otro_Id=$_POST['Otro_Id'];
  $Disp_Tp=$_POST['Disp_Tp'];
  $Bue_Pres=$_POST['Bue_Pres'];
  $Ord_Trab=$_POST['Ord_Trab'];
  $Punt=$_POST['Punt'];
  $Resp=$_POST['Resp'];
  $Respet=$_POST['Respet'];
  $Det=$_POST['Det'];
  $Ot_Req_Nec=$_POST['Ot_Req_Nec'];
  $Ejer_Sup=$_POST['Ejer_Sup'];
  $Resp_Si=$_POST['Resp_Si'];
  $Cond_Tra=$_POST['Cond_Tra'];
  $Car_Pers_Prof=$_POST['Car_Pers_Prof'];
  $Prin_Fun1=$_POST['Prin_Fun1'];
  $Prin_Fun2=$_POST['Prin_Fun2'];
  $Prin_Fun3=$_POST['Prin_Fun3'];
  $Prin_Fun4=$_POST['Prin_Fun4'];
  $Prin_Fun5=$_POST['Prin_Fun5'];
  $Prin_Fun6=$_POST['Prin_Fun6'];
  $Prin_Fun7=$_POST['Prin_Fun7'];
  $Prin_Fun8=$_POST['Prin_Fun8'];
  $Prin_Fun9=$_POST['Prin_Fun9'];
  $Prin_Fun10=$_POST['Prin_Fun10'];
  echo"$Nombre_Cargo";
  echo"$Jf_Dir";
  echo"$Jf_Area";
  echo"$Obj_Cgo";
  echo"$Ed_Pref";
  echo"$Sex";
  echo"$Niv_Bachi"; 
  echo"$Nivel";
  echo"$Niv_Tec_Sup";
  echo"$Niv_Prof";
  echo"$Niv_Postu";
  echo"$Niv_Esp";
  echo"$E_No_Req";
  echo"$E_6m_1a";
  echo"$E_1a_2a";
  echo"$E_2a_4a";
  echo"$Exp_Esp";
  echo"$Pi_Word";
  echo"$Pi_Exc";
  echo"$Pi_Pw_Po";
  echo"$Pi_Acc";
  echo"$Pi_Out";
  echo"$Ot_S1";
  echo"$Id_Ing";
  echo"$Id_Al";
  echo"$Id_Aym";
  echo"$Id_Que";
  echo"$Otro_Id";
  echo"$Disp_Tp";
  echo"$Bue_Pres";
  echo"$Ord_Trab";
  echo"$Punt";
  echo"$Resp";
  echo"$Respet";
  echo"$Det";
  echo"$Ot_Req_Nec";
  echo"$Ejer_Sup";
  echo"$Resp_Si";
  echo"$Cond_Tra";
  echo"$Car_Pers_Prof";
  echo"$Prin_Fun1";
  echo"$Prin_Fun2";
  echo"$Prin_Fun3";
  echo"$Prin_Fun4";
  echo"$Prin_Fun5";
  echo"$Prin_Fun6";
  echo"$Prin_Fun7";
  echo"$Prin_Fun8";
  echo"$Prin_Fun9";
  echo"$Prin_Fun10";
 //establecer conexion con la base de datos
  $conexion= mysql_connect("localhost","root","");
  $db=mysql_select_db("kolpin",$conexion);
  
  $sql="SELECT * FROM requerimientopersonal WHERE Nom_Cgo = '$Nombre_Cargo'";
  $resultado= mysql_query($sql,$conexion);
  $filas=mysql_affected_rows($conexion);

  echo"<BR>nro filas $filas";
  if( $filas == 0 )
  {
   echo "<BR>El nombre especificado no existe";
   //insertar datos en la tabla
   
   $sql="INSERT INTO requerimientopersonal(Nom_Cgo,Jf_Dir,Jf_Area,Obj_Cgo,Ed_Pref,Sex,Niv_Bach,Niv_Tec_Med,Niv_Tec_Sup,Niv_Prof,Niv_Postula,Niv_Esp,E_No_Req,E_6m_1a,E_1a_2a,E_2a_4a,Exp_Esp,Pi_Word,Pi_Exc,Pi_Pw_Po,Pi_Acc,Pi_Out,Ot_S1,Id_Ing,Id_Al,Id_Aym,Id_Que,Otro_Id,Disp_Tp,Bue_Pres,Ord_Trab,Punt,Resp,Respet,Det,Ot_Req_Nec,Ejer_Sup,Resp_Si,Cond_Tra,Car_Pers_Prof,Prin_Fun1,Prin_Fun2,Prin_Fun3,Prin_Fun4,Prin_Fun5,Prin_Fun6,Prin_Fun7,Prin_Fun8,Prin_Fun9,Prin_Fun10) 
   VALUES('$Nombre_Cargo','$Jf_Dir','$Jf_Area','$Obj_Cgo','$Ed_Pref','$Sex','$Niv_Bachi','$Nivel','$Niv_Tec_Sup','$Niv_Prof','$Niv_Postu','$Niv_Esp','$E_No_Req','$E_6m_1a','$E_1a_2a','$E_2a_4a','$Exp_Esp','$Pi_Word','$Pi_Exc','$Pi_Pw_Po','$Pi_Acc','$Pi_Out','$Ot_S1','$Id_Ing','$Id_Al','$Id_Aym','$Id_Que','$Otro_Id','$Disp_Tp','$Bue_Pres','$Ord_Trab','$Punt','$Resp','$Respet','$Det','$Ot_Req_Nec','$Ejer_Sup','$Resp_Si','$Cond_Tra','$Car_Pers_Prof','$Prin_Fun1','$Prin_Fun2','$Prin_Fun3','$Prin_Fun4','$Prin_Fun5','$Prin_Fun6','$Prin_Fun7','$Prin_Fun8','$Prin_Fun9','$Prin_Fun10')";
   
   $resultado=mysql_query($sql);
   echo"resultado:$resultado<BR>";
   //mostrar datos en la tabla
   $resultado=mysql_query ("SELECT * FROM requerimientopersonal" ,$conexion);

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
	echo"<td>$fila[40]</td>";
	echo"<td>$fila[41]</td>";
	echo"<td>$fila[42]</td>";
	echo"<td>$fila[43]</td>";
	echo"<td>$fila[44]</td>";
	echo"<td>$fila[45]</td>";
	echo"<td>$fila[46]</td>";
	echo"<td>$fila[47]</td>";
	echo"<td>$fila[48]</td>";
	echo"<td>$fila[49]</td>";
	echo"<td>$fila[50]</td>";
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