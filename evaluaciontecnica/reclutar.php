<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
 <form action="reclutamiento_destino.php"method="post" >

<center>

	<table>
    		    <tr>
			    <td width="596" height="38" align="center"><h1><strong>FORMULARIO DE EVALUACION TECNICA</strong></h1><p><strong>CODIGO DE FORMULARIO DRH-01-04</strong></p><p><strong>RECLUTAMIENTO Y SELECION    DEL PERSONAL</strong></p></td>
			    </tr>
			  </table>
			  <table width="923" height="178">
			    <tr>
			      <td width="250"><label for="1.DESIGNACION DEL CARGO"><strong>NOMBRE DEL POSTULANTE:</strong></label></td>
			      <td width="677"><input type="text"name="Nombre" size="70" maxlength="70" /></td>
		        </tr>
			    <tr>
			      <td><strong>CARGO AL QUE POSTULA:</strong></td>
			      <td><input type="text"name="Cargo"  size="70" maxlength="70" /></td>
		        </tr>
			    <tr>
			      <td><strong>FECHA</strong></td>
			      <td><strong>
			        <input name="Fecha" type="date" size="10" maxlength="12" />
			        
			        
			        HORA INICIO_DE</strong>
			        <input type="text" name="Hr_De" size="8" />
			        A:
			        <input type="text" name="Hr_A"  size="9" />
			        </strong><strong>HRA:MIN:SEG</strong></td>
		        </tr>
			    <tr>
			      <td><strong>AREA:</strong></td>
			      <td><input type="text"name="Area" size="70" maxlength="70" /></td>
		        </tr>
			    <tr>
			      <td><strong>BAJO LA SUPERVISION DE :</strong></td>
			      <td><input type="text"name="Supervisor" size="70" maxlength="70" /></td>
		        </tr>
			    <tr> </tr>
			    <tr> </tr>
			    <tr> </tr>
			    <tr> </tr>
		      </table>
			  <table width="923">
			    <tr>
			      <td width="915"><strong>NOTA</strong>:<strong>ES DE SUMA IMPORTANCIA QUE EL EVALUADOR DE MAYOR ENFASIS A  AQUELLOS ASPECTOS QUE SE ENCUENTREN ESTRECHAMENTE RELACIONADOS CON EL PERFIL  NECESITADO PARA EL CARGO ESPECIFICOQUE SE EVALUA.</strong></td>
		        </tr>
		      </table>
			  <table width="922" height="403" border="1">
			    <tr>
			      <td colspan="3" align="center"><p><strong>PUNTAJE MINIMO&nbsp; 1 Y  PUNTAJE MAXIMO &nbsp;5</strong></p></td>
		        </tr>
			    <tr>
			      <td width="490"><strong>FORMACION</strong></td>
			      <td width="126" align="center"><strong>APRECIACION</strong></td>
			      <td width="284" align="center"><strong>OBSERVACION</strong></td>
		        </tr>
			    <tr>
			      <td><strong>CONOCIMIENTOS GENERALES</strong></td>
			      <td><select name="Con_Gr">
			        <option value="1">1</option>
			        <option value="2">2</option>
			        <option value="3">3</option>
			        <option value="4">4</option>
			        <option value="5">5</option>
			        </select></td>
			      <td><textarea name="Con_Gr_Obs" cols="40" rows="3" id="Con_Gr_Obs"></textarea></td>
		        </tr>
			    <tr>
			      <td><strong>CONOCIMIENTOS TECNICOS</strong></td>
			      <td><select name="Con_Tec">
			        <option value="1">1</option>
			        <option value="2">2</option>
			        <option value="3">3</option>
			        <option value="4">4</option>
			        <option value="5">5</option>
			        </select></td>
			      <td><textarea name="Con_Tc_Obs" cols="40" rows="3" id="Con_Tc_Obs"></textarea></td>
		        </tr>
			    <tr>
			      <td><strong>PRECENCIA E IMPACTO(CON RELACION AL CARGO)</strong></td>
			      <td><select name="Pres_Apr" id="Pres_Apr">
			        <option value="1">1</option>
			        <option value="2">2</option>
			        <option value="3">3</option>
			        <option value="4">4</option>
			        <option value="5">5</option>
			        </select></td>
			      <td><textarea name="Pres_Obs" cols="40" rows="3" id="Pres_Obs"></textarea></td>
		        </tr>
			    <tr>
			      <td><strong>EXPRESION DE IDEAS(CAPACIDAD DE COMUNICACION VERBAL</strong>)</td>
			      <td><select name="Expr_Apr" id="Expr_Apr">
			        <option value="1">1</option>
			        <option value="2">2</option>
			        <option value="3">3</option>
			        <option value="4">4</option>
			        <option value="5">5</option>
			        </select></td>
			      <td><textarea name="Expr_Obs" cols="40" rows="3" id="Expr_Obs"></textarea></td>
		        </tr>
			    <tr>
			      <td height="26"><p><strong>ATENCION Y CONCENTRACION</strong></p></td>
			      <td><select name="Atn_Apr">
			        <option value="1">1</option>
			        <option value="2">2</option>
			        <option value="3">3</option>
			        <option value="4">4</option>
			        <option value="5">5</option>
			        </select>
		          <td><textarea name="Atn_Obs" cols="40" rows="3" id="Atn_Obs"></textarea></td>
		        </tr>
			    <tr>
			      <td height="26"><strong>ACTITUD INTERPERSONAL</strong></td>
			      <td><select name="Acti_Apr" >
			        <option value="1">1</option>
			        <option value="2">2</option>
			        <option value="3">3</option>
			        <option value="4">4</option>
			        <option value="5">5</option>
			        </select></td>
			      <td><textarea name="Acti_Obs" cols="40" rows="3" id="Acti_Obs"></textarea></td>
		        </tr>
			    <tr>
			      <td height="26"><strong>DISPOCISION A TRABAJO EN EQUIPO</strong></td>
			      <td><select name="Disp_Apr" id="Disp_Apr">
			        <option value="1">1</option>
			        <option value="2">2</option>
			        <option value="3">3</option>
			        <option value="4">4</option>
			        <option value="5">5</option>
			        </select></td>
			      <td><textarea name="Disp_Obs" cols="40" rows="3" id="Disp_Obs"></textarea></td>
		        </tr>
			    <tr>
			      <td height="26"><strong>ACTITUD FRENTE A LA AUTORIDAD</strong></td>
			      <td><select name="Act_Aut_Apr" id="Act_Aut_Apr">
			        <option value="1">1</option>
			        <option value="2">2</option>
			        <option value="3">3</option>
			        <option value="4">4</option>
			        <option value="5">5</option>
			        </select></td>
			      <td><textarea name="Act_Aut_Obs" cols="40" rows="3" id="Act_Aut_Obs"></textarea></td>
		        </tr>
			    <tr>
			      <td height="26"><strong>DINAMISMO Y LIDERAZGO</strong></td>
			      <td><label for="Din_Apr"></label>
			        <select name="Din_Apr" id="Din_Apr">
			          <option value="1">1</option>
			          <option value="2">2</option>
			          <option value="3">3</option>
			          <option value="4">4</option>
			          <option value="5">5</option>
		            </select></td>
			      <td><textarea name="Din_Obs" cols="40" rows="3" id="Din_Obs"></textarea></td>
		        </tr>
			    <tr>
			      <td height="26"><strong>POTENCIAL DE CRECIMIENTO(DESEMPE&Ntilde;O)</strong></td>
			      <td><select name="Potn_Apr">
			        <option value="1">1</option>
			        <option value="2">2</option>
			        <option value="3">3</option>
			        <option value="4">4</option>
			        <option value="5">5</option>
			        </select></td>
			      <td><textarea name="Potn_Obs" cols="40" rows="3" id="Potn_Obs"></textarea></td>
		        </tr>
			    <tr> </tr>
			    <tr> </tr>
			    <tr> </tr>
			    <tr> </tr>
			    <tr> </tr>
		      </table>

			  <table width="926" align="center">
              	<tr>
			      <td width="913"><strong>COMENTARIOS ACERCA DE LOS ASPECTOS ANTERIORES CALIFICADOS CON PUNTAJES DE 1,2 Y 3(CUADRO ANTERIOR)Y OTROS ASPECTOS SOBRESALIENTES OBSERVADOS EN EL DESENVOLVIMIENTO DEL POSTULANTE:</strong></td>
		        </tr>
			    <tr>
			      <td width="918" align="left" valign="middle"><textarea name="Comnt"  cols="110" rows="5"></textarea></td>
		        </tr>
		      </table>
			  <table width="926">
			    <tr>
			      <td width="918"><strong>RESULTADO DE LA EVALUACION</strong>
                    <select name="Resultado_Eva">
                      <option value="EXCELENTE">EXCELENTE</option>
                      <option value="ACEPTABLE">ACEPTABLE</option>
                      <option value="MUY CAPAZ">MUY CAPAZ</option>
                      <option value="DEFICIENTE">DEFICIENTE</option>
                    </select>
                    <strong>CONCLUSION</strong>
                    <label>
                      <select name="Conclusion" id="Conclusion">
                        <option value="APROBADO">APROBADO</option>
                        <option value="EN ESPERA">EN ESPERA</option>
                        <option value="RECHAZO">RECHAZO</option>
                      </select>
                  </label></td>
		        </tr>
		      </table>
			  <table width="928" align="center">
              	<tr>
			      <td width="918" height="21"><p><strong>OBSERVACIONES(&iquest;POR QUE ?) </strong></p></td>
		        </tr>
			    <tr>
			      <td width="920" align="left" valign="middle"><textarea name="Obser_Porq"  cols="110" rows="5" id="Obser_Porq"></textarea></td>
		        </tr>
		      </table>
			  <table width="923" align="center">
              <tr>
			      <td width="918" height="21"><p><strong>NECESIDAD DE CAPACITACION ?</strong></p></td>
		        </tr>
			    <tr>
			      <td width="851" align="left" valign="middle"><textarea name="Nec_Capo"  cols="110" rows="5" id="Nec_Capo"></textarea></td>
		        </tr>
		      </table>
			  <table width="925" align="center">
			    <tr>
			      <td width="813">NOMBRE DEL EVALUADOR
			        <label for="Nom_Ev"></label>
			        <input name="Nom_Ev" type="text" id="Nom_Ev" size="40" maxlength="50" /></td>
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

	