
<html>
<link href="FGF.css" rel="stylesheet" type="text/css">
<body leftmargin="0" topmargin="0">
<center>
<table width="750" border="1" cellspacing="0" cellpadding="0" bgcolor="" bordercolor="#000000">
  <tbody><tr>
    <td align="center" valign="top">
	
	<table width="750" height="556" border="0" cellpadding="0" cellspacing="0">
 		 <tbody>
 		   <tr>
    		<td height="154">
			
			<table width="750" border="0" cellspacing="0" cellpadding="0">
 			 <tbody>
 			   <tr>
   			 <td width="189" height="125" align="center" valign="middle"><img src="kolpg.jpg" width="194" height="199"></td>
  			  <td width="561" align="right"></td>
 			 </tr>
			</tbody></table>
		
			</td>
  		</tr>
		
		<tr>
		  <td height="4" bgcolor="#ff93">
          <a href="http://localhost/kolping/requerimientopersonal/requerimiento_personal.html">REQUERIMIENTO</a>
        <a href="http://localhost/kolping/evaluacioncurricula/evaluacioncurricula.html">CURRICULA</a>
        <a href="http://localhost/kolping/entrevistaseleccion/seleccione.html">ENTREVISTA</a> 
        <a href="http://localhost/kolping/evaluaciontecnica/reclutar.html">EVALUACION TECNICA</a>
       <a href="http://localhost/kolping/periodoprueba/prueva2.html">PERIODO PRUEBA</a>
        <a href="http://localhost/kolping/filepersonal/File_Personal.html">FILE PERSONAL</a>
        <a href="http://localhost/kolping/controlvacaciones/vacaciones.HTML">VACACIONES</a>
          </td>
		</tr>
		<tr>
    		<td height="319" align="center" valign="top"><br>
    		  <table width="706">
			  </table>
    		  <p><img src="descarga (1).jpg" width="356" height="234"></p>
    		 			</td>
		   </tr>
	</tbody></table>
<?php
session_start();
?>

<?php

if (isset($_SESSION['k_username']))
{
	echo '<h4 align="center"><font color="#0000FF">Usuario : '.'<b>'.$_SESSION['k_username'].' <a href="logout.php">Cerrar Sesion </a></font></b></h4>';
	
    //echo '<p><a href="logout.php">Logout</a></p>';
}
else
{
    echo '<form action="validar_usuario.php" method="post">';
    echo '<table border="1" align="center">';

    echo '<td  width="80">Usuario<td>';
    echo '<input type="text" name="usuario" size="15" maxlength="15"/></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td  width="80">Password</td>';
    echo '<td><input type="password" name="password" size="15" maxlength="15" /></td>';
    echo '<tr>';
    echo '<td align="center"><input type="submit" value="Ingresar"/></td>';
    echo '<td align="center"><input type="reset" value="Limpiar" /></td>';
    echo '</form>';
    echo '</table>';
    echo '<br>';
    //echo'<p><a href="login.php">Login</a></p>';
    echo '<h3 align="center"><font color="#0000FF">Para Ingresar al Sistema debe estar registrado previamente</h3></font>';
    echo '<p align="center"><a href="registrar.php">Registrar</a></p>';
}

?>
<body> 
<form name="Reloj"> 
<input type="text" size=7 name="tiempo" value="mm:hh:ss" title="Tiempo restante para finalizar el día">
<script language="JavaScript"> 
<!-- 
var tiempoAtras; 

updateReloj(); 
function updateReloj() { 
var tiempo = new Date(); 
var hora = 23-tiempo.getHours(); 
var minutos = 59-tiempo.getMinutes(); 
var segundos = 59-tiempo.getSeconds(); 

tiempoAtras= (hora < 10) ? hora :hora; 
tiempoAtras+= ((minutos < 10) ? ":0" : ":") + minutos; 
tiempoAtras+= ((segundos < 10) ? ":0" : ":") + segundos; 

document.Reloj.tiempo.value = tiempoAtras; 

setTimeout("updateReloj()",1000); 
} 
//--> 
</script> 

</form> 
</body> 
</html>

