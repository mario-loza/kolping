<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
  <form action="control_vacacion.php"method="post" >
<center>
<table>

    		    <tr>
			    <td width="615" height="74" align="center"><h1>CONTROL DE VACACIONES</h1><p><strong>CODIGO DE FORMULARIO </strong></p><p><strong>FPAK.PC.01-R4</strong></p></td>
			    </tr>
			  </table>
    		  <table width="887" height="175">
    		    <tr>
    		      <td width="223"><label for="1.DESIGNACION DEL CARGO"><strong>APELLIDOS Y NOMBRES:</strong></label></td>
    		      <td width="652"><input type="text"name="Nom_Ape" size="50" maxlength="50" id="Nom_Ape" /></td>
  		      </tr>
    		    <tr>
    		      <td height="29"><strong>CARGO:</strong></td>
    		      <td><input type="text"name="Cargo"  size="50" maxlength="50" /></td>
  		      </tr>
    		    <tr>
    		      <td><strong>AREA DE TRABAJO:</strong></td>
    		      <td><input type="text"name="Area"  size="50" maxlength="50" id="Area" /></td>
  		      </tr>
    		    <tr>
    		      <td><strong>UNIDAD:</strong></td>
    		      <td><input type="text"name="Unidad" size="50" maxlength="50" id="Unidad" /></td>
  		      </tr>
    		    <tr>
    		      <td><strong>JEFE DIRECTO</strong></td>
    		      <td><input type="text"name="Jefe_direc" size="50" maxlength="50" id="Jefe_direc" /></td>
  		      </tr>
    		    <tr> </tr>
    		    <tr> </tr>
    		    <tr> </tr>
    		    <tr> </tr>
  		    </table>
    		  <table width="864" border="1">
    		    <tr>
    		      <td width="72">FECHA INICIAL</td>
    		      <td width="63">A FECHA</td>
    		      <td width="83">GESTION</td>
    		      <td width="80">DIAS HABILES</td>
    		      <td width="78">DIAS USADOS</td>
    		      
   		        </tr>
    		    <tr>
    		      <td><input type="text"name="Fecha_De" size="10" maxlength="10" id="Fecha_De" /></td>
    		      <td><input type="text"name="Fecha_A" size="10" maxlength="10" id="Fecha_A" /></td>
    		      <td><input type="text"name="Gestion" size="10" maxlength="10" id="Gestion" /></td>
    		      <td><input type="text"name="Dias_Habil" size="10" maxlength="10" id="Dias_Habil" /></td>
    		      <td><input type="text"name="Dias_Usa" size="10" maxlength="10" id="Dias_Usa" /></td>
    		      
   		        </tr>
                <tr>
                	<td width="83" align="center">DETALLE</td>
                    <td colspan="4"><textarea name="Detalle" cols="50" rows="2" id="Detalle"></textarea></td>
                </tr>
  		    </table>
    		  <p>AÑO/MES/DIA    		  </p>
    		  <table width="908" border="1">
    		    <tr>
    		      <td colspan="2" align="center">USO DE VACIONES</td>
    		      <td width="470" rowspan="2" align="center">RESPONSABLE</td>
  		      </tr>
    		    <tr>
    		      <td width="196">DE FECHA </td>
    		      <td width="208">A FECHA</td>
  		      </tr>
    		    <tr>
    		      <td><input type="text"name="Fecha_Vaca" size="10" maxlength="10" id="Fecha_Vaca" /></td>
    		      <td><input type="text"name="Fecha_Descanso" size="10" maxlength="10" id="Fecha_Descanso" /></td>
    		      <td width="470"><input type="text"name="Responsable" size="60" maxlength="40" id="Responsable" /></td>
   		        </tr>
  		    </table>
    		  <table width="906">
    		    <tr>
    		      <td width="898" align="center"><input type="submit" name="btnEnviar" value="Enviar datos" />
                  <input type="reset" name="btnLimpiar" value="Limpiar" /></td>
  		      </tr>
  		    </table>
</center>
</form>
</div>
<?php
include_once("../pie.php");
?>


	