<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/960/960.css" rel="stylesheet" type="text/css">
<link href="../css/core.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0">
<div class="container_12" id="contenedor">
	<div class="grid_12">
    	<div class="cabecera">
    		<img src="logo_kolping_infopunkt.jpg" width="920" height="200">
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="clear"></div>
    <div class="prefix_4 grid_4">
    
    <fieldset class="login">
    	<legend>Acceso al Sistema</legend>
        <?php
    	switch($_GET['m']){
			case 't':{echo "Completa todos los campos";}break;	
			case 'r':{echo "El usuario y contraseña son erroneos";}break;	
		}
	?>
    <hr>
    <form action="validar_usuario.php" method="post">
    <table border="0" align="center" class="none">
    <td  width="80">USUARIO<td>
    <input type="text" name="usuario" size="15" maxlength="25" autofocus class="user"/></td>
    </tr>
    <tr>
    <td  width="120">PASSWORD</td>
    <td><input type="password" name="password" size="15" maxlength="15" class="password"/></td>
    <tr>
    <td align="center"><input type="submit" value="Ingresar" class="botoni"/></td>
    <td align="center"><input type="reset" value="Limpiar" class="botoni"/></td>
    </table>
    </form>
    </fieldset>
    
    </div>
    <div class="clear"></div>
</div>
</body>
    </html>
