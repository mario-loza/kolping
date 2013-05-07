<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
<form action="requerimiento.php"method="post"> 
<center>
<table width="750" border="1" cellspacing="0" cellpadding="0" bgcolor="#FF93" bordercolor="#000000">
    		    <tr>
			    <td width="596" height="74" align="center"><h1><strong>REQUERIMIENTO DOTACION DEL PERSONAL</strong></h1>
                <p><strong>FPAK.PC.02-R2</strong></p>
                 <h1><strong>REGISTRO</strong></h1>
                </td>
			    </tr>
			  </table>
    		  <table width="948" align="center">
    		    <tr>
    		      <td width="277"><label for="1.DESIGNACION DEL CARGO">1.DESIGNACION DEL CARGO</label></td>
    		      <td width="665"><input  type="text"name="Nom_Cgo" size="60" maxlength="50" /></td>
  		      </tr>
    		    <tr>
    		      <td height="25">JEFE DIRECTO</td>
    		      <td><input type="text" name="Jf_Dir" size="60" maxlength="50" /></td>
  		      </tr>
    		    <tr>
    		      <td>JEFE DE AREA</td>
    		      <td><input  type="text"name="Jf_Area"  size="60" maxlength="50" id="Jf_Area" /></td>
  		      </tr>
    		    <tr>
    		      <td><label for="OBJETIVO DEL CARGO">OBJETIVO DEL CARGO</label></td>
    		      <td width="665"><label for="textfield4"></label>
    		        <input  type="text"name="Obj_Cgo"  size="60" maxlength="50" /></td>
  		      </tr>
  		    </table>
    		  <table width="943" align="center">
    		    <tr>
    		      <td width="935" height="27"><p>2.PERFIL DEL CARGO(REQUISITOS MINIMOS PARA EL CARGO)</p></td>
  		      </tr>
  		    </table>
    		  <table width="945" align="center">
    		    <tr>
    		      <td width="367">DAD PREFERIBLE(RANGO PREFERIBLE):</td>
    		      <td width="543"><input type="text"name="Ed_Pref" size="30" />
    		        SEXO
    		        <select name="Sex">
    		          <option value="INDISTINTO">INDISTINTO</option>
    		          <option value="PREFERIBLE MASCULINO">PREFERIBLE MASCULINO</option>
    		          <option value="PREFERIBLE FEMENINO">PREFERIBLE FEMENINO</option>
  		          </select>
    		        </span></td>
  		      </tr>
  		    </table>
    		  <table width="950" align="center">
    		    <tr>
    		      <td width="942">A  CONTINUACION MARQUE CON UNA(X) EN LOS RECUADROS DE LA IZQUIERDA Y DESARROLLE O  AMPLIE LA INFORMACION SOLICITADA EN LOS RECUADROS DE LA DERECHA </td>
  		      </tr>
  		    </table>
    		  <table width="948" border="1">
    		    <tr>
    		      <td colspan="3" align="center"><strong>NIVEL DE INSTRUCCION </strong></td>
    		      <td width="485" align="center">ESPECIFIQUE LA FORMACION NECESARIA PARA EL CARGO</td>
   		        </tr>
    		    <tr>
    		      <td width="206" height="40"><strong>FORMACION</strong></td>
    		      <td width="119">NECESARIO</td>
    		      <td width="100">DESEABLE </td>
    		      <td rowspan="6" align="center"><textarea name="Niv_Esp" cols="50" rows="10" id="Niv_Esp"></textarea></td>
   		        </tr>
    		    <tr>
    		      <td height="30">BACHILLER</td>
    		      <td colspan="2" align="center"><select name="Niv_Bachiller" id="Niv_Bachiller">
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
   		        </tr>
    		    <tr>
    		      <td height="30">TECNICO MEDIO</td>
    		      <td colspan="2" align="center"><select name="Niv_Tec_Med" id="Niv_Tec_Med">
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
   		        </tr>
    		    <tr>
    		      <td height="32">TECNICO SUPERIOR </td>
    		      <td colspan="2" align="center"><select name="Niv_Tec_Sup" id="Niv_Tec_Sup" >
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
   		        </tr>
    		    <tr>
    		      <td height="34">PROFESIONAL</td>
    		      <td colspan="2" align="center"><select name="Niv_Prof" id="Niv_Prof" >
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
   		        </tr>
    		    <tr>
    		      <td>POST-GRADO</td>
    		      <td colspan="2" align="center"><select name="Niv_Postulante" id="Niv_Postulante" >
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
   		        </tr>
  		    </table>
              <table width="948" border="1">
                <tr>
                  <td colspan="3" align="center"><strong>EXPERIENCIA DEL CARGO</strong></td>
                  <td width="485" align="center">ESPECIFIQUETIPO DE EXPERIENCIA NECESARIA PARA EJERCER EL CARGO APROPIADAMENTE</td>
                </tr>
                <tr>
                  <td width="206" height="32">TIEMPO DE EXPERIENCIA</td>
                  <td width="119">NECESARIO</td>
                  <td width="100">DESEABLE </td>
                  <td rowspan="5" align="center"><textarea name="Exp_Esp" cols="50" rows="10" id="Exp_Esp"></textarea></td>
                </tr>
                <tr>
                  <td height="35">NO REQUIERE</td>
                  <td colspan="2" align="center"><select name="E_No_Req" id="E_No_Req">
                    <option value="NECESARIO">NECESARIO</option>
                    <option value="DESEABLE">DESEABLE</option>
                  </select></td>
                </tr>
                <tr>
                  <td>6 MESES - 1 A&Ntilde;O</td>
                  <td colspan="2" align="center"><select name="E_6m_1a" id="E_6m_1a">
                    <option value="NECESARIO">NECESARIO</option>
                    <option value="DESEABLE">DESEABLE</option>
                  </select></td>
                </tr>
                <tr>
                  <td height="33">1 A&Ntilde;O- 2 A&Ntilde;OS</td>
                  <td colspan="2" align="center"><select name="E_1a_2a" id="E_1a_2a">
                    <option value="NECESARIO">NECESARIO</option>
                    <option value="DESEABLE">DESEABLE</option>
                  </select></td>
                </tr>
                <tr>
                  <td height="26">2 A&Ntilde;OS-4 A&Ntilde;OS</td>
                  <td colspan="2" align="center"><select name="E_2a_4a" id="E_2a_4a" >
                    <option value="NECESARIO">NECESARIO</option>
                    <option value="DESEABLE">DESEABLE</option>
                  </select></td>
                </tr>
              </table>
              <table width="948" border="1">
    		    <tr>
    		      <td colspan="3" align="center"><strong>PAQUETES INFORMATICOS</strong></td>
    		      <td width="485" align="center"><label for="NIVEL DE INSTRUCCION7">OTROS SOFTWARES NECESARIOS</label></td>
  		      </tr>
    		    <tr>
    		      <td width="206" height="32">PAQUETES</td>
    		      <td width="119">NECESARIO</td>
    		      <td width="100">DESEABLE </td>
    		      <td rowspan="6" align="center"><textarea name="Ot_S1" cols="50" rows="10" id="Ot_S1"></textarea></td>
  		      </tr>
    		    <tr>
    		      <td height="35">WORD</td>
    		      <td colspan="2" align="center"><select name="Pi_Word" id="Pi_Word">
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>EXCEL</td>
    		      <td colspan="2" align="center"><select name="Pi_Exc" id="Pi_Exc">
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td height="33">POWER POINT</td>
    		      <td colspan="2" align="center"><select name="Pi_Pw_Po" id="Pi_Pw_Po">
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td height="26">ACCESS</td>
    		      <td colspan="2" align="center"><select name="Pi_Acc" id="Pi_Acc">
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td height="26">OUTLOOK</td>
    		      <td colspan="2" align="center"><select name="Pi_Out" id="Pi_Out">
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
  		      </tr>
  		    </table>
              <table width="948" border="1">
    		    <tr>
    		      <td colspan="3" align="center"><strong>IDIOMAS</strong></td>
    		      <td width="485" align="center">SI ES NESESARIO EL USO DE OTROS IDIOMAS ENUNCIE ,O EXPRESE LA INDIFERENCIA</td>
  		      </tr>
    		    <tr>
    		      <td width="206" height="32">IDIOMA</td>
    		      <td width="119">NECESARIO</td>
    		      <td width="100">DESEABLE </td>
    		      <td rowspan="5" align="center"><textarea name="Otro_Id" cols="50" rows="10" id="Otro_Id"></textarea></td>
  		      </tr>
    		    <tr>
    		      <td height="35">INGLES</td>
    		      <td colspan="2" align="center"><select name="Id_Ing" id="Id_Ing">
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>ALEMAN</td>
    		      <td colspan="2" align="center"><select name="Id_Al" id="Id_Al">
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td height="33">AYMARA</td>
    		      <td colspan="2" align="center"><select name="Id_Aym" id="Id_Aym">
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td height="26">QUECHUA</td>
    		      <td colspan="2" align="center"><select name="Id_Que" id="Id_Que" >
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
  		      </tr>
  		    </table>
    		  <table width="948" border="1">
    		    <tr>
    		      <td colspan="3" align="center"><strong>CARACTERISTICAS DE LA PERSONA</strong></td>
    		      <td width="491" align="center">COMO SE CARACTERIZA EN EL AMBITO LABORAL
                  </label></td>
  		      </tr>
    		    <tr>
    		      <td width="212" height="38">CARACTERISTICAS</td>
    		      <td width="119">NECESARIO</td>
    		      <td width="98">DESEABLE </td>
    		      <td rowspan="8" align="center"><textarea name="Ot_Req_Nec" cols="50" rows="13" id="Ot_Req_Nec"></textarea></td>
  		      </tr>
    		    <tr>
    		      <td height="30">DISPONIBILIDAD DE TIEMPO</td>
    		      <td colspan="2" align="center"><select name="Disp_Tp" id="Disp_Tp">
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td height="30">BUENA PRESENCIA</td>
    		      <td colspan="2" align="center"><select name="Bue_Pres" id="Bue_Pres" >
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td height="32">ORDEN EN EL TRABAJO</td>
    		      <td colspan="2" align="center"><select name="Ord_Trab" id="Ord_Trab" >
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td height="34">PUNTUALIDAD</td>
    		      <td colspan="2" align="center"><select name="Punt" id="Punt">
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>RESPONSABILIDAD</td>
    		      <td colspan="2" align="center"><select name="Resp" id="Resp">
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>RESPETUOSO</td>
    		      <td colspan="2" align="center"><select name="Respet" id="Respet">
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>DETALLISTA</td>
    		      <td colspan="2" align="center"><select name="Det" id="Det">
    		        <option value="NECESARIO">NECESARIO</option>
    		        <option value="DESEABLE">DESEABLE</option>
  		        </select></td>
  		      </tr>
  		    </table>
    		  <table width="949" align="center">
    		    <tr>
    		      <td width="245">EJERCERA SUPERVISION
    		        <select name="Ejer_Sup" class="txtkollll">
    		          <option value="SI">SI</option>
    		          <option value="NO">NO</option>
  		          </select>
    		        </span></td>
    		      <td width="692"><span class="txtkolping">SI LA RESPUESTA ES SI INDIQUE EL NUMERO DE PERSONA</span>
    		        <input type="text"name="Resp_Si"  size="7" maxlength="10" /></td>
  		      </tr>
  		    </table>
    		  <table width="949" align="center">
    		    <tr>
    		      <td width="897"><label for="Car_Pers_Prof">CONDICIONES DE TRABAJO </label>
    		        (DESCRIBA TRABAJO A LA QUE ESTARA EXPUESTOEL TRABAJADOR EJEM:ESTRES,RUIDO ,TEMPETARURAS BAJAS,ETC.) </td>
  		      </tr>
  		    </table>
    		  <table width="949" align="center">
    		    <tr>
    		      <td width="894"><textarea name="Cond_Tra" id="Cond_Tra" cols="110" rows="5"></textarea></td>
  		      </tr>
  		    </table>
    		  <table width="950" height="34" align="center">
    		    <tr>
    		      <td width="897" align="left">CARACTERISTICAS PERSONALES Y PROFESIONALES NECESARIAS:(DESCRIBA APTITUDES,HABILIDADES,DESTREZA,ETC.)</td>
  		      </tr>
  		    </table>
    		  <table width="948" align="center">
    		    <tr>
    		      <td width="881"><textarea name="Car_Pers_Prof" id="Car_Pers_Prof" cols="110" rows="5"></textarea></td>
  		      </tr>
  		    </table>
    		  <table width="946" height="327" align="center">
    		    <tr>
    		      <th width="884" height="41" align="left" scope="col">PRINCIPALES FUNCIONES:</th>
  		      </tr>
    		    <tr>
    		      <th height="278" align="left" scope="col"><p>
    		        <label for="textfield3"></label>
  		          <ul>
    		        <li>
    		          <input  type="text"name="Prin_Fun1"size="90" maxlength="90" />
  		          </li>
    		        <li>
    		          <input type="text" name="Prin_Fun2"size="90" maxlength="90" />
  		          </li>
    		        <li>
    		          <input  type="text"name="Prin_Fun3"size="90" maxlength="90" />
  		          </li>
    		        <li>
    		          <input  type="text"name="Prin_Fun4"  size="90" maxlength="90" />
  		          </li>
    		        <li>
    		          <input  type="text"name="Prin_Fun5"  size="90" maxlength="90" />
  		          </li>
    		        <li>
    		          <input  type="text"name="Prin_Fun6" size="90" maxlength="90" />
  		          </li>
    		        <li>
    		          <input  type="text"name="Prin_Fun7" size="90" maxlength="90" />
  		          </li>
    		        <li>
    		          <input type="text"name="Prin_Fun8"  size="90" maxlength="90" />
  		          </li>
    		        <li>
    		          <input  type="text"name="Prin_Fun9" size="90" maxlength="90" />
  		          </li>
    		        <li>
    		          <input type="text"name="Prin_Fun10"size="90" maxlength="90" />
    		          </p>
  		          </th>
  		      </tr>
  		    </table>
    		  <p>
    		    <input type="submit" name="btnEnviar" value="Enviar datos" />
    		    <input type="reset" name="btnLimpiar" value="Limpiar" />
  		    </p>
			  <p>&nbsp;</p>
			<p><br>
			  <br>
			  </p></td>
		   </tr>
	</tbody>
    </table>
</center>
</form>
</div>
<?php
include_once("../pie.php");
?>