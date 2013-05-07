<?php
session_start();
//datos para establecer la conexion con la base de mysql.
mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
//cambiar nombre de la base de datos
mysql_select_db('kolpin')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
function quitar($mensaje)
{
	$nopermitidos = array("'",'\\','<','>',"\"");
	$mensaje = str_replace($nopermitidos, "", $mensaje);
	return $mensaje;
}
if(trim($_POST["usuario"]) != "" && trim($_POST["password"]) != "")
{
	// Puedes utilizar la funcion para eliminar algun caracter en especifico
	//$usuario = strtolower(quitar($HTTP_POST_VARS["usuario"]));
	//$password = $HTTP_POST_VARS["password"];
	// o puedes convertir los a su entidad HTML aplicable con htmlentities
	$usuario = strtolower(htmlentities($_POST["usuario"], ENT_QUOTES));
	$password = $_POST["password"];
	$result = mysql_query('SELECT password, usuario,nivel FROM usuarios WHERE usuario=\''.$usuario.'\'');
	if($row = mysql_fetch_array($result))
	{ if($row["password"] == $password)
	  {
//		  echo $row['nivel'];
       $_SESSION["k_username"] = $row['usuario'];
	   $_SESSION["nivel"] = $row['nivel'];
	   //exit();
       if ($row["usuario"] == "administrador")
       {
        /*echo 'Has sido logueado correctamente '.$_SESSION['k_username'].' <p>';
	    echo '<a href="http://localhost/WORD PRESS/">USERS BLOG</a></p>';
	    Elimina el siguiente comentario si quieres que re-dirigir automáticamente a index.php
        Ingreso exitoso, ahora sera dirigido a la pagina principal.*/
        ?>
	     <SCRIPT LANGUAGE="javascript">
		 location.href = "http://localhost/kolping/login/index_admin.php";
		 </SCRIPT>
	    <?php
       }
       else
       {
        ?>
	     <SCRIPT LANGUAGE="javascript">
		 location.href = "http://localhost/kolping/login/index_admin.php";
		 </SCRIPT>
	    <?php
       }
      }
       else
       {
		header("Location:index.php?m=e");
       }
	}
    else
    {
		header("Location:index.php?m=r");
	}
	mysql_free_result($result);
}
else
{
header("Location:index.php?m=t");
}
mysql_close();
?>
