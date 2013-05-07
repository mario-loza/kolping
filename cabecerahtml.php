<?php
session_start();
if((!isset($_SESSION["k_username"])) || $_SESSION["k_username"]==""){
	header("location:http://localhost/kolping/login/");	
}
mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
//cambiar nombre de la base de datos
mysql_select_db('kolpin')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
switch($_SESSION['nivel']){
	case 1:{$where="SuperAdmin=1";}break;
	case 2:{$where="GerenteGeneral=1";}break;
	case 3:{$where="Contador=1";}break;
	case 4:{$where="RecursosHumanos=1";}break;
}
$resmenu=mysql_query("SELECT * FROM menu WHERE $where");
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../css/960/960.css" rel="stylesheet" type="text/css">
    <link href="../css/core.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript" src="../js/jquery.js"></script>
    <script language="javascript" type="text/javascript" src="../js/jquery.form.js"></script>
    <script language="javascript" type="text/javascript" src="../js/listado.js"></script>
</head>
<body>
<div class="container_12" id="contenedor">
	<div class="grid_12">
    	<div class="cabecera">
        	<a href="<?php echo $ruta;?>">
    		<img src="<?php echo $ruta;?>logo_kolping_infopunkt.jpg" width="920" height="200">
            </a>
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="clear"></div>
    <div class="grid_12">
    	<ul class="menu">
        	<?php
            	while($regmenu=mysql_fetch_array($resmenu)){
				?><li><a href="<?php echo $regmenu['Enlace']?>"><?php echo $regmenu['Nombre']?></a></li>
                <?php	
				}
			?>
        </ul>
        <hr>
    </div>
	<div class="clear"></div>
    