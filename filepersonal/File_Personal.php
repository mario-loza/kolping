<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
<form action="entrevistaseleccion.php" method="post" >
<center>
<table>
 
    		    <tr>
			    <td width="615" height="74" align="center"><h1><strong>REGISTRO DE INGRESO DEL EMPLEADO</strong></h1><h1><strong>REGISTRO</strong></h1><h1>FPAK.PC.02-R2</h1></td>
			    </tr>
			  </table>
              
    		  <table width="921" height="88" align="center">
    		    <tr>
    		      <td width="216" height="24">FECHA DE INGRESO:</td>
    		      <td width="693"><input name="Fecha" type="date" id="textfield60" size="15" maxlength="15" />
</td>
  		      </tr>
    		    <tr>
    		      <td height="24">NUA:</td>
    		      <td><span id="sprytextfield2">
    		        <input name="Nua" type="text" id="Nua" size="15" maxlength="20" />
    		        <label for="Edad"></label>
    		      </span></td>
  		      </tr>
    		    <tr>
    		      <td height="24">REG. C.N.S.</td>
    		      <td><input name="Reg" type="text" id="Reg" size="15" maxlength="20" /></td>
  		      </tr>
    		    <tr> </tr>
    		    <tr> </tr>
    		    <tr> </tr>
    		    <tr> </tr>
  		    </table>
    		  <table width="919">
    		    <tr>
    		      <td width="911"><strong>DATOS PERSONALES</strong></td>
  		      </tr>
  		    </table>
    		  <table width="914" border="1" align="center">
    		    <tr>
    		      <td width="301"><input name="Ape_Pat" type="text" id="Ape_Pat" size="30" maxlength="30"></td>
    		      <td width="283"><input name="Ape_Mat" type="text" id="Ape_Mat" size="30" maxlength="30"></td>
    		      <td width="308"><input name="Ape_Casada" type="text" id="Ape_Casada" size="30" maxlength="30"></td>
   		        </tr>
    		    <tr>
    		      <td>APELLIDO PATERNO</td>
    		      <td>APELLIDO MATERNO</td>
    		      <td>APELLIDO CASADA</td>
   		        </tr>
    		    <tr>
    		      <td><input name="Nombres" type="text" id="Nombres" size="30" maxlength="30"></td>
    		      <td><input name="Profe" type="text" id="Profe" size="30" maxlength="30"></td>
    		      <td><input name="textfield" type="text" id="textfield" size="30" maxlength="30"></td>
   		        </tr>
    		    <tr>
    		      <td>NOMBRES</td>
    		      <td>NACIONALIDAD</td>
    		      <td>LUGAR DE NACIMIENTO</td>
  		      </tr>
    		    <tr>
    		      <td><input name="textfield8" type="text" id="textfield8" size="10" maxlength="30">
   		          A&Ntilde;O/MES/DIA</td>
    		      <td><select name="select2" id="select2">
    		        <option value="MASCULINO">MASCULINO</option>
    		        <option value="FEMENINO">FEMENINO</option>
  		        </select></td>
    		      <td><input name="textfield10" type="text" id="textfield10" size="30" maxlength="30"></td>
  		      </tr>
    		    <tr>
    		      <td>FECHA DE NACIMIENTO</td>
    		      <td>SEXO</td>
    		      <td>PROFESION</td>
   		        </tr>
    		    <tr>
    		      <td><input name="textfield11" type="text" id="textfield11" size="30" maxlength="30"></td>
    		      <td><input name="Profe2" type="text" id="Profe2" size="30" maxlength="30"></td>
    		      <td><input name="textfield9" type="text" id="textfield9" size="30" maxlength="30"></td>
  		      </tr>
    		    <tr>
    		      <td height="23">C.I</td>
    		      <td>ESTADO CIVIL</td>
    		      <td>SERVICIO MILITAR</td>
  		      </tr>
  		      </table>
    		  <table width="919">
                <tr>
                  <td width="890"><strong>DIRECCION DEL DOMICILIO</strong></td>
                </tr>
              </table>
    		  <table width="915" border="1">
    		    <tr>
    		      <td width="134">CALLE/AVENIDA</td>
    		      <td width="197"><input name="textfield12" type="text" id="textfield12" size="30" maxlength="30"></td>
    		      <td width="76">No</td>
    		      <td width="72"><input name="textfield13" type="text" id="textfield13" size="10" maxlength="15"></td>
    		      <td width="94">ZONA</td>
    		      <td width="276"><input name="textfield14" type="text" id="textfield14" size="30" maxlength="30"></td>
  		      </tr>
    		    <tr>
    		      <td>TELEFONO</td>
    		      <td><input name="textfield17" type="text" id="textfield17" size="30" maxlength="30"></td>
    		      <td>CELULAR</td>
    		      <td><input name="textfield16" type="text" id="textfield16" size="10" maxlength="15"></td>
    		      <td>CASSILLA</td>
    		      <td><input name="textfield15" type="text" id="textfield15" size="30" maxlength="30"></td>
  		      </tr>
  		    </table>
    		  <table width="923">
    		    <tr>
    		      <td width="885"><strong>PARA CASOS DE EMERGENCIAS</strong></td>
  		      </tr>
  		    </table>
    		  <table width="919" border="1" align="center">
    		    <tr>
    		      <td width="303"><input name="textfield18" type="text" id="textfield18" size="30" maxlength="30"></td>
    		      <td width="581" colspan="2"><input name="textfield18" type="text" id="textfield19" size="50" maxlength="60"></td>
   		        </tr>
    		    <tr>
    		      <td>GRUPO SANGUINEO</td>
    		      <td colspan="2">PADECIMIENTO CLINICO</td>
   		        </tr>
   		      </table>
    		  <table width="913">
    		    <tr>
    		      <td width="409"><strong>EN CASOS DE EMERGENCIAS COMUNICARSE CON
    		        
    		      :</strong></td>
    		      <td width="492"><strong>
    		        <input name="textfield20" type="text" id="textfield31" size="50" maxlength="60">
    		      </strong></td>
  		      </tr>
  		    </table>
    		  <table width="917" border="1" align="center">
    		    <tr>
    		      <td width="301"><input name="textfield19" type="text" id="textfield20" size="30" maxlength="30"></td>
    		      <td width="283"><input name="textfield19" type="text" id="textfield21" size="30" maxlength="30"></td>
    		      <td width="296"><input name="textfield19" type="text" id="textfield22" size="30" maxlength="30"></td>
  		      </tr>
    		    <tr>
    		      <td>PARENTESCO</td>
    		      <td>TELEFONO</td>
    		      <td>DIRECCION</td>
  		      </tr>
   		      </table>
    		  <table width="918">
    		    <tr>
    		      <td width="402"><strong>EN CASOS DE EMERGENCIAS COMUNICARSE CON
    		        
    		        :</strong></td>
    		      <td width="481"><strong>
    		        <input name="textfield21" type="text" id="textfield23" size="50" maxlength="60">
  		        </strong></td>
  		      </tr>
  		    </table>
              <table width="913" border="1" align="center">
                <tr>
                  <td width="301"><input name="textfield21" type="text" id="textfield24" size="30" maxlength="30"></td>
                  <td width="283"><input name="textfield21" type="text" id="textfield25" size="30" maxlength="30"></td>
                  <td width="298"><input name="textfield21" type="text" id="textfield26" size="30" maxlength="30"></td>
                </tr>
                <tr>
                  <td>PARENTESCO</td>
                  <td>TELEFONO</td>
                  <td>DIRECCION</td>
                </tr>
              </table>
              <table width="919">
                <tr>
                  <td width="911"><strong>EN CASOS DE EMERGENCIAS</strong></td>
                </tr>
              </table>
              <table width="916" border="1">
                <tr>
                  <td width="296">MEDICAMENTOS CONTRAINDICADOS</td>
                  <td width="585"><input name="textfield22" type="text" id="textfield27" size="50" maxlength="60"></td>
                </tr>
                <tr>
                  <td>ALERGIAS PRINCIPALES</td>
                  <td><input name="textfield23" type="text" id="textfield28" size="50" maxlength="60"></td>
                </tr>
              </table>
              <table width="917">
    		    <tr>
    		      <td width="892">GRADO DE INSTRUCCI&Oacute;N Y EDUCACION</td>
  		      </tr>
  		    </table>
    		  <table width="917" height="67" border="1">
    		    <tr>
    		      <td width="145">EDUCACION</td>
    		      <td width="221">INSTITUCION</td>
    		      <td width="110">DESDE</td>
    		      <td width="128">HASTA</td>
    		      <td width="271">TITULO, GRADO O ULTIMO    CURSO APROBADO</td>
  		      </tr>
    		    <tr>
    		      <td>PRIMARIA</td>
    		      <td><input name="textfield24" type="text" id="textfield29" size="25" maxlength="25"></td>
    		      <td><input name="textfield28" type="text" id="textfield34" size="12" maxlength="20"></td>
    		      <td><input name="textfield30" type="text" id="textfield36" size="15" maxlength="20"></td>
    		      <td><input name="textfield26" type="text" id="textfield32" size="40" maxlength="30"></td>
  		      </tr>
    		    <tr>
    		      <td>SECUNDARIA</td>
    		      <td><input name="textfield25" type="text" id="textfield30" size="25" maxlength="25"></td>
    		      <td><input name="textfield29" type="text" id="textfield35" size="12" maxlength="20"></td>
    		      <td><input name="textfield31" type="text" id="textfield37" size="15" maxlength="20"></td>
    		      <td><input name="textfield2" type="text" id="textfield2" size="40" maxlength="30"></td>
  		      </tr>
    		    <tr>
    		      <td rowspan="3">TECNICA MEDIA</td>
    		      <td><input name="textfield32" type="text" id="textfield38" size="25" maxlength="25"></td>
    		      <td><input name="textfield35" type="text" id="textfield41" size="12" maxlength="20"></td>
    		      <td><input name="textfield38" type="text" id="textfield44" size="15" maxlength="20"></td>
    		      <td><input name="textfield3" type="text" id="textfield3" size="40" maxlength="30"></td>
   		        </tr>
    		    <tr>
    		      <td><input name="textfield33" type="text" id="textfield39" size="25" maxlength="25"></td>
    		      <td><input name="textfield36" type="text" id="textfield42" size="12" maxlength="20"></td>
    		      <td><input name="textfield39" type="text" id="textfield45" size="15" maxlength="20"></td>
    		      <td><input name="textfield4" type="text" id="textfield4" size="40" maxlength="30"></td>
  		      </tr>
    		    <tr>
    		      <td><input name="textfield34" type="text" id="textfield40" size="25" maxlength="25"></td>
    		      <td><input name="textfield37" type="text" id="textfield43" size="12" maxlength="20"></td>
    		      <td><input name="textfield40" type="text" id="textfield46" size="15" maxlength="20"></td>
    		      <td><input name="textfield5" type="text" id="textfield5" size="40" maxlength="30"></td>
  		        </tr>
    		    <tr>
    		      <td rowspan="3">TECNICA SUPERIOR</td>
    		      <td><input name="textfield44" type="text" id="textfield50" size="25" maxlength="25"></td>
    		      <td><input name="textfield35" type="text" id="textfield41" size="12" maxlength="20"></td>
    		      <td><input name="textfield38" type="text" id="textfield44" size="15" maxlength="20"></td>
    		      <td><input name="textfield6" type="text" id="textfield6" size="40" maxlength="30"></td>
   		        </tr>
    		    <tr>
    		      <td><input name="textfield32" type="text" id="textfield38" size="25" maxlength="25"></td>
    		      <td><input name="textfield36" type="text" id="textfield42" size="12" maxlength="20"></td>
    		      <td><input name="textfield39" type="text" id="textfield45" size="15" maxlength="20"></td>
    		      <td><input name="textfield7" type="text" id="textfield7" size="40" maxlength="30"></td>
   		        </tr>
    		    <tr>
    		      <td><input name="textfield33" type="text" id="textfield39" size="25" maxlength="25"></td>
    		      <td><input name="textfield37" type="text" id="textfield43" size="12" maxlength="20"></td>
    		      <td><input name="textfield40" type="text" id="textfield46" size="15" maxlength="20"></td>
    		      <td><input name="textfield27" type="text" id="textfield33" size="40" maxlength="30"></td>
   		        </tr>
    		    <tr>
    		      <td rowspan="3">UNIVERSITARIA</td>
    		      <td><input name="textfield45" type="text" id="textfield51" size="25" maxlength="30"></td>
    		      <td><input name="textfield35" type="text" id="textfield41" size="12" maxlength="20"></td>
    		      <td><input name="textfield38" type="text" id="textfield44" size="15" maxlength="20"></td>
    		      <td><input name="textfield72" type="text" id="textfield143" size="40" maxlength="30"></td>
   		        </tr>
    		    <tr>
    		      <td><input name="textfield44" type="text" id="textfield50" size="25" maxlength="30"></td>
    		      <td><input name="textfield36" type="text" id="textfield42" size="12" maxlength="20"></td>
    		      <td><input name="textfield39" type="text" id="textfield45" size="15" maxlength="20"></td>
    		      <td><input name="textfield73" type="text" id="textfield144" size="40" maxlength="30"></td>
   		        </tr>
    		    <tr>
    		      <td><input name="textfield32" type="text" id="textfield38" size="25" maxlength="30"></td>
    		      <td><input name="textfield37" type="text" id="textfield43" size="12" maxlength="20"></td>
    		      <td><input name="textfield40" type="text" id="textfield46" size="15" maxlength="20"></td>
    		      <td><input name="textfield43" type="text" id="textfield49" size="40" maxlength="30"></td>
   		        </tr>
    		    <tr>
    		      <td rowspan="2">POSTGRADO</td>
    		      <td><input name="textfield33" type="text" id="textfield39" size="25" maxlength="30"></td>
    		      <td><input name="textfield35" type="text" id="textfield41" size="12" maxlength="20"></td>
    		      <td><input name="textfield38" type="text" id="textfield44" size="15" maxlength="20"></td>
    		      <td><input name="textfield41" type="text" id="textfield47" size="40" maxlength="30"></td>
   		        </tr>
    		    <tr>
    		      <td><input name="textfield46" type="text" id="textfield52" size="25" maxlength="30"></td>
    		      <td><input name="textfield36" type="text" id="textfield42" size="12" maxlength="20"></td>
    		      <td><input name="textfield39" type="text" id="textfield45" size="15" maxlength="20"></td>
    		      <td><input name="textfield42" type="text" id="textfield48" size="40" maxlength="30"></td>
  		        </tr>
   		      </table>
    		  <table width="919">
    		    <tr>
    		      <td width="911"><strong>DATOS FAMILIARES</strong></td>
  		      </tr>
  		    </table>

    		  <table width="916" border="1" align="center">
              <tr>
    		      <td width="900"><strong>DATOS DEL PADRE</strong></td>
  		      </tr>
    		    <tr>
    		      <td width="188"><input name="textfield48" type="text" id="textfield54" size="20" maxlength="30"></td>
    		      <td width="183"><input name="textfield48" type="text" id="textfield55" size="20" maxlength="30"></td>
    		      <td width="193"><input name="textfield49" type="text" id="textfield56" size="30" maxlength="30"></td>
    		      <td width="324"><input name="textfield50" type="text" id="textfield57" size="15" maxlength="20"></td>
  		      </tr>
    		    <tr>
    		      <td>APELLIDO PATERNO</td>
    		      <td>APELLIDO MATERNO</td>
    		      <td>NOMBRE</td>
    		      <td>NUMERO DE HIJOS(HERMANOS)</td>
  		      </tr>
    		    <tr>
    		      <td><input name="textfield53" type="text" id="textfield58" size="20" maxlength="30"></td>
    		      <td><input name="textfield54" type="text" id="textfield59" size="20" maxlength="30"></td>
    		      <td><input name="textfield55" type="date" id="textfield61" size="10" maxlength="30">
</td>
    		      <td><input name="textfield51" type="text" id="textfield62" size="15" maxlength="20"></td>
  		      </tr>
    		    <tr>
    		      <td>NACIONALIDAD</td>
    		      <td>LUGAR DE NACIMIENTO</td>
    		      <td>FECHA DE NACIMIENTO</td>
    		      <td>C.I</td>
  		      </tr>
    		    <tr>
    		      <td>PROFESION/OCUPACION</td>
    		      <td colspan="3"><input name="textfield47" type="text" id="textfield53" size="60" maxlength="50"></td>
   		        </tr>
  		      </table>
    		  <table width="917" border="1" align="center">
              <tr>
                  <td width="875"><strong>DATOS DE LA MADRE</strong></td>
                </tr>
    		    <tr>
    		      <td width="188"><input name="textfield52" type="text" id="textfield63" size="20" maxlength="30"></td>
    		      <td width="183"><input name="textfield52" type="text" id="textfield64" size="20" maxlength="30"></td>
    		      <td width="193"><input name="textfield52" type="text" id="textfield65" size="30" maxlength="30"></td>
    		      <td width="325"><input name="textfield52" type="text" id="textfield66" size="15" maxlength="20"></td>
  		      </tr>
    		    <tr>
    		      <td>APELLIDO PATERNO</td>
    		      <td>APELLIDO MATERNO</td>
    		      <td>NOMBRE</td>
    		      <td>NUMERO DE HIJOS(HERMANOS)</td>
  		      </tr>
    		    <tr>
    		      <td><input name="textfield52" type="text" id="textfield67" size="20" maxlength="30"></td>
    		      <td><input name="textfield52" type="text" id="textfield68" size="20" maxlength="30"></td>
    		      <td><input name="textfield52" type="date" id="textfield69" size="10" maxlength="30">
    		        </td>
    		      <td><input name="textfield52" type="text" id="textfield70" size="15" maxlength="20"></td>
  		      </tr>
    		    <tr>
    		      <td>NACIONALIDAD</td>
    		      <td>LUGAR DE NACIMIENTO</td>
    		      <td>FECHA DE NACIMIENTO</td>
    		      <td>C.I</td>
  		      </tr>
    		    <tr>
    		      <td>PROFESION/OCUPACION</td>
    		      <td colspan="3"><input name="textfield52" type="text" id="textfield71" size="60" maxlength="50"></td>
  		      </tr>
  		    </table>
    		  <table width="915" border="1" align="center">
              <tr>
    		      <td width="909"><strong>DATOS DEL CONYUGUE</strong></td>
  		      </tr>
    		    <tr>
    		      <td width="188"><input name="textfield56" type="text" id="textfield72" size="20" maxlength="30"></td>
    		      <td width="183"><input name="textfield56" type="text" id="textfield73" size="20" maxlength="30"></td>
    		      <td width="180"><input name="textfield56" type="text" id="textfield74" size="30" maxlength="30"></td>
    		      <td width="336"><input name="textfield56" type="text" id="textfield75" size="15" maxlength="20"></td>
  		      </tr>
    		    <tr>
    		      <td>APELLIDO PATERNO</td>
    		      <td>APELLIDO MATERNO</td>
    		      <td>NOMBRE</td>
    		      <td>NUMERO DE HIJOS(HERMANOS)</td>
  		      </tr>
    		    <tr>
    		      <td><input name="textfield56" type="text" id="textfield76" size="20" maxlength="30"></td>
    		      <td><input name="textfield56" type="text" id="textfield77" size="20" maxlength="30"></td>
    		      <td><input name="textfield56" type="date" id="textfield78" size="10" maxlength="30">
    		        </td>
    		      <td><input name="textfield56" type="text" id="textfield79" size="15" maxlength="20"></td>
  		      </tr>
    		    <tr>
    		      <td>NACIONALIDAD</td>
    		      <td>LUGAR DE NACIMIENTO</td>
    		      <td>FECHA DE NACIMIENTO</td>
    		      <td>C.I</td>
  		      </tr>
    		    <tr>
    		      <td>PROFESION/OCUPACION</td>
    		      <td colspan="2"><input name="textfield56" type="text" id="textfield80" size="40" maxlength="50"></td>
    		      <td>No HIJOS DEL MATRIMONIO
   		          <input name="textfield57" type="text" id="textfield81" size="10" maxlength="30"></td>
  		        </tr>
  		    </table>
    		  <table width="914" border="1" align="center">
              <tr>
    		      <td width="875"><strong>DATOS DEL PRIMER HIJO</strong></td>
  		      </tr>
    		    <tr>
    		      <td width="188"><input name="textfield58" type="text" id="textfield82" size="20" maxlength="30"></td>
    		      <td width="183"><input name="textfield58" type="text" id="textfield83" size="20" maxlength="30"></td>
    		      <td width="180"><input name="textfield58" type="text" id="textfield84" size="30" maxlength="30"></td>
    		      <td width="335"><input name="textfield58" type="text" id="textfield85" size="15" maxlength="20"></td>
  		      </tr>
    		    <tr>
    		      <td>APELLIDO PATERNO</td>
    		      <td>APELLIDO MATERNO</td>
    		      <td>NOMBRE</td>
    		      <td>NUMERO DE HIJOS(HERMANOS)</td>
  		      </tr>
    		    <tr>
    		      <td><input name="textfield58" type="text" id="textfield86" size="20" maxlength="30"></td>
    		      <td><input name="textfield58" type="text" id="textfield87" size="20" maxlength="30"></td>
    		      <td><input name="textfield58" type="date" id="textfield88" size="10" maxlength="30">
    		       </td>
    		      <td><input name="textfield58" type="text" id="textfield89" size="15" maxlength="20"></td>
  		      </tr>
    		    <tr>
    		      <td>NACIONALIDAD</td>
    		      <td>LUGAR DE NACIMIENTO</td>
    		      <td>FECHA DE NACIMIENTO</td>
    		      <td>C.I</td>
  		      </tr>
    		    <tr>
    		      <td>PROFESION/OCUPACION</td>
    		      <td colspan="3"><input name="textfield59" type="text" id="textfield90" size="40" maxlength="50"></td>
  		      </tr>
    		    <tr>
    		      <td>EDAD</td>
    		      <td><input name="textfield60" type="text" id="textfield91" size="15" maxlength="20"></td>
    		      <td>TELEFONO</td>
    		      <td><input name="textfield61" type="text" id="textfield92" size="15" maxlength="20"></td>
  		        </tr>
   		      </table>

              <table width="919" border="1" align="center">
               <tr>
    		      <td width="889"><strong>DATOS DEL SEGUNDO HIJO</strong></td>
  		      </tr>
                <tr>
                  <td width="188"><input name="textfield62" type="text" id="textfield93" size="20" maxlength="30"></td>
                  <td width="183"><input name="textfield62" type="text" id="textfield94" size="20" maxlength="30"></td>
                  <td width="180"><input name="textfield62" type="text" id="textfield95" size="30" maxlength="30"></td>
                  <td width="340"><input name="textfield62" type="text" id="textfield96" size="15" maxlength="20"></td>
                </tr>
                <tr>
                  <td>APELLIDO PATERNO</td>
                  <td>APELLIDO MATERNO</td>
                  <td>NOMBRE</td>
                  <td>NUMERO DE HIJOS(HERMANOS)</td>
                </tr>
                <tr>
                  <td><input name="textfield62" type="text" id="textfield97" size="20" maxlength="30"></td>
                  <td><input name="textfield62" type="text" id="textfield98" size="20" maxlength="30"></td>
                  <td><input name="textfield62" type="date" id="textfield99" size="10" maxlength="30">
                    </td>
                  <td><input name="textfield62" type="text" id="textfield100" size="15" maxlength="20"></td>
                </tr>
                <tr>
                  <td>NACIONALIDAD</td>
                  <td>LUGAR DE NACIMIENTO</td>
                  <td>FECHA DE NACIMIENTO</td>
                  <td>C.I</td>
                </tr>
                <tr>
                  <td>PROFESION/OCUPACION</td>
                  <td colspan="3"><input name="textfield62" type="text" id="textfield101" size="40" maxlength="50"></td>
                </tr>
                <tr>
                  <td>EDAD</td>
                  <td><input name="textfield62" type="text" id="textfield102" size="15" maxlength="20"></td>
                  <td>TELEFONO</td>
                  <td><input name="textfield62" type="text" id="textfield103" size="15" maxlength="20"></td>
                </tr>
              </table>
              <table width="915" border="1" align="center">
              <tr>
                  <td width="888"><strong>DATOS DEL TERCER HIJO</strong></td>
                </tr>
                <tr>
                  <td width="188"><input name="textfield63" type="text" id="textfield104" size="20" maxlength="30"></td>
                  <td width="183"><input name="textfield63" type="text" id="textfield105" size="20" maxlength="30"></td>
                  <td width="180"><input name="textfield63" type="text" id="textfield106" size="30" maxlength="30"></td>
                  <td width="336"><input name="textfield63" type="text" id="textfield107" size="15" maxlength="20"></td>
                </tr>
                <tr>
                  <td>APELLIDO PATERNO</td>
                  <td>APELLIDO MATERNO</td>
                  <td>NOMBRE</td>
                  <td>NUMERO DE HIJOS(HERMANOS)</td>
                </tr>
                <tr>
                  <td><input name="textfield63" type="text" id="textfield108" size="20" maxlength="30"></td>
                  <td><input name="textfield63" type="text" id="textfield109" size="20" maxlength="30"></td>
                  <td><input name="textfield63" type="date" id="textfield110" size="10" maxlength="30">
                    </td>
                  <td><input name="textfield63" type="text" id="textfield111" size="15" maxlength="20"></td>
                </tr>
                <tr>
                  <td>NACIONALIDAD</td>
                  <td>LUGAR DE NACIMIENTO</td>
                  <td>FECHA DE NACIMIENTO</td>
                  <td>C.I</td>
                </tr>
                <tr>
                  <td>PROFESION/OCUPACION</td>
                  <td colspan="3"><input name="textfield63" type="text" id="textfield112" size="40" maxlength="50"></td>
                </tr>
                <tr>
                  <td>EDAD</td>
                  <td><input name="textfield63" type="text" id="textfield113" size="15" maxlength="20"></td>
                  <td>TELEFONO</td>
                  <td><input name="textfield63" type="text" id="textfield114" size="15" maxlength="20"></td>
                </tr>
              </table>

              <table width="917" border="1" align="center">
              <tr>
                  <td width="893"><strong>DATOS DEL CUARTO HIJO</strong></td>
                </tr>
                <tr>
                  <td width="188"><input name="textfield64" type="text" id="textfield115" size="20" maxlength="30"></td>
                  <td width="183"><input name="textfield64" type="text" id="textfield116" size="20" maxlength="30"></td>
                  <td width="180"><input name="textfield64" type="text" id="textfield117" size="30" maxlength="30"></td>
                  <td width="338"><input name="textfield64" type="text" id="textfield118" size="15" maxlength="20"></td>
                </tr>
                <tr>
                  <td>APELLIDO PATERNO</td>
                  <td>APELLIDO MATERNO</td>
                  <td>NOMBRE</td>
                  <td>NUMERO DE HIJOS(HERMANOS)</td>
                </tr>
                <tr>
                  <td><input name="textfield64" type="text" id="textfield119" size="20" maxlength="30"></td>
                  <td><input name="textfield64" type="text" id="textfield120" size="20" maxlength="30"></td>
                  <td><input name="textfield64" type="date" id="textfield121" size="10" maxlength="30">
                    </td>
                  <td><input name="textfield64" type="text" id="textfield122" size="15" maxlength="20"></td>
                </tr>
                <tr>
                  <td>NACIONALIDAD</td>
                  <td>LUGAR DE NACIMIENTO</td>
                  <td>FECHA DE NACIMIENTO</td>
                  <td>C.I</td>
                </tr>
                <tr>
                  <td>PROFESION/OCUPACION</td>
                  <td colspan="3"><input name="textfield64" type="text" id="textfield123" size="40" maxlength="50"></td>
                </tr>
                <tr>
                  <td>EDAD</td>
                  <td><input name="textfield64" type="text" id="textfield124" size="15" maxlength="20"></td>
                  <td>TELEFONO</td>
                  <td><input name="textfield64" type="text" id="textfield125" size="15" maxlength="20"></td>
                </tr>
              </table>

              <table width="916" border="1" align="center">
              <tr>
                  <td width="887"><strong>DATOS DEL QUINTO HIJO</strong></td>
                </tr>
                <tr>
                  <td width="188"><input name="textfield65" type="text" id="textfield126" size="20" maxlength="30"></td>
                  <td width="183"><input name="textfield65" type="text" id="textfield127" size="20" maxlength="30"></td>
                  <td width="180"><input name="textfield65" type="text" id="textfield128" size="30" maxlength="30"></td>
                  <td width="337"><input name="textfield65" type="text" id="textfield129" size="15" maxlength="20"></td>
                </tr>
                <tr>
                  <td>APELLIDO PATERNO</td>
                  <td>APELLIDO MATERNO</td>
                  <td>NOMBRE</td>
                  <td>NUMERO DE HIJOS(HERMANOS)</td>
                </tr>
                <tr>
                  <td><input name="textfield65" type="text" id="textfield130" size="20" maxlength="30"></td>
                  <td><input name="textfield65" type="text" id="textfield131" size="20" maxlength="30"></td>
                  <td><input name="textfield65" type="date" id="textfield132" size="10" maxlength="30">
                    </td>
                  <td><input name="textfield65" type="text" id="textfield133" size="15" maxlength="20"></td>
                </tr>
                <tr>
                  <td>NACIONALIDAD</td>
                  <td>LUGAR DE NACIMIENTO</td>
                  <td>FECHA DE NACIMIENTO</td>
                  <td>C.I</td>
                </tr>
                <tr>
                  <td>PROFESION/OCUPACION</td>
                  <td colspan="3"><input name="textfield65" type="text" id="textfield134" size="40" maxlength="50"></td>
                </tr>
                <tr>
                  <td>EDAD</td>
                  <td><input name="textfield65" type="text" id="textfield135" size="15" maxlength="20"></td>
                  <td>TELEFONO</td>
                  <td><input name="textfield65" type="text" id="textfield136" size="15" maxlength="20"></td>
                </tr>
              </table>
              <table width="912" border="1">
                <tr>
                  <td width="437">TRABAJO ANTES EN LA FUNDACION ADOLFO KOLPING:</td>
                  <td width="459"><select name="select" id="select">
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                  </select></td>
                </tr>
                <tr>
                  <td>CARGO:</td>
                  <td><input name="textfield66" type="text" id="textfield137" size="40" maxlength="50"></td>
                </tr>
                <tr>
                  <td>JEFE DIRECTO:</td>
                  <td><input name="textfield67" type="text" id="textfield138" size="40" maxlength="50"></td>
                </tr>
                <tr>
                  <td>TIENE CONOCIDOS O PARIENTES EN LA EMPRESA:</td>
                  <td><select name="select3" id="select3">
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                  </select></td>
                </tr>
                <tr>
                  <td>NOMBRE:</td>
                  <td><input name="textfield68" type="text" id="textfield139" size="40" maxlength="50"></td>
                </tr>
              </table>
              <table width="918">
                <tr>
                  <td width="332">RUBRICA DEL EMPLEADO</td>
                  <td width="574"><input name="textfield69" type="text" id="textfield140" size="40" maxlength="50"></td>
                </tr>
                <tr>
                  <td>FIRMA DEL EMPLEADO</td>
                  <td><input name="textfield70" type="text" id="textfield141" size="40" maxlength="50"></td>
                </tr>
              </table>
              <table width="914">
                <tr>
                  <td width="883" align="center"><strong>FECHA
                    <input name="textfield71" type="date" id="textfield142" size="15" maxlength="20">
                  </strong></td>
                </tr>
              </table>
              <p>
    		    <input type="submit" name="btnEnviar" value="Enviar datos" />
    		    <input type="reset" name="btnLimpiar" value="Limpiar" />
  		    </p>
</center>
</form>
</div>
<?php
include_once("../pie.php");
?>	