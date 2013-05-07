<html>
<link href="FGF.css" rel="stylesheet" type="text/css">
<body leftmargin="0" topmargin="0">
<center>
<table width="750" border="1" cellspacing="0" cellpadding="0" bgcolor="" bordercolor="#000000">
  <tbody><tr>
    <td align="center" valign="top">
	
	<table width="750" height="397" border="0" cellpadding="0" cellspacing="0">
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
		
		<tr><td height="4" bgcolor="#ff93">
        <a href="http://localhost/kolping/login/paginaprincipal.php">INICIO</a>
        <a href="http://localhost/kolping/login/index.php">LOGIN</a>
        <a href="http://localhost/kolping/login/registrar.php">REGISTRO</a>
        </td>
		</tr>
		<tr>
    		<td valign="top"><br>
    		  <table width="706">
			  </table>
<?php
session_start();
//datos para establecer la conexion con la base de mysql.
mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
//cambiar nombre de la base de datos
mysql_select_db('kolpin')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
function formRegistro(){
?>
<h2 align="center"><font color="#0000">BIENVENIDOS PUEDE REGISTRARSE</h2></font>
<form action="registrar.php" method="post">
<table border="1" align="center">
<tr>
<td>Usuario (max 20)</td>
<td><input type="text" name="username" size="20" maxlength="20" /><br /></td>
</tr>
<tr>
<td>Password (max 10)</td>
<td><input type="password" name="password" size="10" maxlength="20" /></td>
</tr>
<tr>
<td>Password(confirmar)</td>
<td><input type="password" name="password2" size="10" maxlength="10" /><br /></td>
</tr>
<tr>
<td>Email (max 40)</td>
<td><input type="text" name="email" size="20" maxlength="40" /><br /></td>
</tr>
<tr>
<td><input type="submit" value="Registrar" /></td>
<td><input type="reset" value="Limpiar" /></td>
</form>
<?php
}
// verificamos si se han enviado ya las variables necesarias.
if (isset($_POST["username"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password2 = $_POST["password2"];
	$email = $_POST["email"];
	// Hay campos en blanco
	if($username==NULL|$password==NULL|$password2==NULL) {
		echo "un campo está vacio.";
		formRegistro();
	}else{
		// ¿Coinciden las contraseñas?
		if($password!=$password2) {
			echo "Las contraseñas no coinciden";
			formRegistro();
		}else{
			// Comprobamos si el nombre de usuario o la cuenta de correo ya existían
			$checkuser = mysql_query("SELECT usuario FROM usuarios WHERE usuario='$username'");
			$username_exist = mysql_num_rows($checkuser);
			$checkemail = mysql_query("SELECT email FROM usuarios WHERE email='$email'");
			$email_exist = mysql_num_rows($checkemail);
			if ($username_exist>0) {
				echo "El nombre de usuario o la cuenta de correo estan ya en uso";
				formRegistro();
			}else{
				$query = 'INSERT INTO usuarios (usuario, password, email, fecha)
				VALUES (\''.$username.'\',\''.$password.'\',\''.$email.'\',\''.date("Y-m-d").'\')';
				mysql_query($query) or die(mysql_error());
				echo 'El usuario '.$username.' ha sido registrado de manera satisfactoria.<br />';
				echo 'Ahora puede entrar ingresando su usuario y su password <br />';
				?>
                <p></p>
                <p></p>
                <p></p>
<h2 align="center"><font color="#0000FF">Bienvendio Al Sistema kolping</font></h2>
			  <FORM ACTION="validar_usuario.php" METHOD="post">
				<p>&nbsp;</p>
				<table width="258" height="146" border="1" align="center">
				  <tr>
				<td width="64">Usuario</td>
                <td width="149"><INPUT TYPE="text" NAME="usuario" SIZE=20 MAXLENGTH=20><br /></td>
                </tr>
                <tr>
				<td>Password</td>
                <td><INPUT TYPE="password" NAME="password" SIZE=20 MAXLENGTH=10><br /></td>
                </tr>
                <tr>
                <td>  <INPUT TYPE="submit" VALUE="Ingresar"></td>
                <td>  <INPUT TYPE="reset" VALUE="Limpiar"></td>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                </tr>
              </table>
				<p>&nbsp;</p>
				<p>
				  <?php
			}
		}
	}
}else{
	formRegistro();
}
?>
			    </p>
              </FORM>
                <br>
			  </p>			</td>
		   </tr>
	</tbody></table>
    </html>
