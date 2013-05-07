<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
<center>
 <form action="entrevistaseleccion.php" method="post" >
<table>

		
    		    <tr>
			    <td width="685" height="74" align="center"> <h1><strong>RECLUTAMIENTO Y SELECION    DEL PERSONAL</strong></h1><h1><strong>ENTREVISTA DE SELECCION</strong></h1><h1>FPAK.PC.02-R2</h1></td>
			    </tr>
			  </table>
              
              
    		  <table width="940" height="132" align="center">
    		    <tr>
    		      <td width="324">FECHA:</td>
    		      <td width="582"><input name="Fecha" type="date" id="textfield60" size="15" maxlength="15" />
    		        </td>
  		      </tr>
    		    <tr>
    		      <td>PRETENCION SALARIAL</td>
    		      <td><span id="sprytextfield2">
    		        <input type="text" name="Pret_Sal" id="Pret_Sal" />
    		        EDAD:
    		        <label for="Ed"></label>
    		        <input name="Ed" type="number" id="Ed" size="15" maxlength="15" />
  		        </span></td>
  		      </tr>
    		    <tr>
    		      <td>NOMBRE DEL POSTULANTE:</td>
    		      <td><input name="Nom_Postula" type="text" id="Nom_Postula" size="60" maxlength="50" /></td>
  		      </tr>
    		    <tr>
    		      <td>CARGO AL QU EPOSTULA:</td>
    		      <td><input name="Cgo_Postula" type="text" id="Cgo_Postula" size="60" maxlength="50" /></td>
  		      </tr>
  		    </table>
    		  <table width="900" align="center">
              <tr>
    		      <td width="900" align="left" colspan="4"><strong>ANALISIS FORMACION ACADEMICA</strong></td>
  		      </tr>
<!--    		    <tr>
    		      <td width="900">
                  <table width="900" border="1">-->
    		        <tr>
    		          <th width="240" align="left" scope="col">CARRERA</th>
    		          <th width="240" align="left" scope="col">LUGAR</th>
    		          <th width="111" align="left" scope="col">TIEMPO</th>
    		          <th width="200" align="left" scope="col">TITULO</th>
  		          </tr>
    		        <tr>
    		          <td><label for="Carr_1"></label>
    		            <input name="Carr_1" type="text" id="Carr_1" size="30" maxlength="50" /></td>
    		          <td><input name="Carr_1_Lg" type="text" id="Carr_1_Lg" size="30" maxlength="40" /></td>
    		          <td><input name="Carr_1_Tm" type="text" id="Carr_1_Tm" size="10" maxlength="10" /></td>
    		          <td><input name="Carr_1_Tit" type="text" id="Carr_1_Tit" size="30" maxlength="40" /></td>
  		          </tr>
    		        <tr>
    		          <td height="25"><label for="Carr_3"></label>
    		            <input name="Carr_2" type="text" id="Carr_2" size="30" maxlength="50" /></td>
    		          <td><input name="Carr_2_Lg" type="text" id="Carr_2_Lg" size="30" maxlength="40" /></td>
    		          <td><input name="Carr_2_Tm" type="text" id="Carr_2_Tm" size="10" maxlength="10" /></td>
    		          <td><input name="Carr_2_Tit" type="text" id="Carr_2_Tit" size="30" maxlength="40" /></td>
  		          </tr>
    		        <tr>
    		          <td><label for="Carr_3"></label>
    		            <input name="Carr_3" type="text" id="Carr_3" size="30" maxlength="50" /></td>
    		          <td><input name="Carr_3_Lg" type="text" id="Carr_3_Lg" size="30" maxlength="40" /></td>
    		          <td><input name="Carr_3_Tm" type="text" id="Carr_3_Tm" size="10" maxlength="10" /></td>
    		          <td><input name="Carr_3_Tit" type="text" id="Carr_3_Tit" size="30" maxlength="40" /></td>
  		          </tr>
    		        <tr>
    		          <td>IDIOMA</td>
    		          <td>LUGAR</td>
    		          <td>TIEMPO</td>
    		          <td>TITULO</td>
  		          </tr>
    		        <tr>
    		          <td><input name="Id1" type="text" id="Id1" size="30" maxlength="50" /></td>
    		          <td><input name="Id1_Lugar" type="text" id="Id1_Lugar" size="30" maxlength="40" /></td>
    		          <td><input name="Id1_Tm" type="text" id="Id1_Tm" size="10" maxlength="10" /></td>
    		          <td><input name="Id1_Tit" type="text" id="Id1_Tit" size="30" maxlength="40" /></td>
  		          </tr>
    		        <tr>
    		          <td><label for="Id2"></label>
    		            <input name="Id2" type="text" id="Id2" size="30" maxlength="50" /></td>
    		          <td><input name="Id2_Lg" type="text" id="Id2_Lg" size="30" maxlength="40" /></td>
    		          <td><input name="Id2_Tm" type="text" id="Id2_Tm" size="10" maxlength="10" /></td>
    		          <td><input name="Id2_Tit" type="text" id="Id2_Tit" size="30" maxlength="40" /></td>
  		          </tr>
    		        <tr>
    		          <td><input name="Id3" type="text" id="Id3" size="30" maxlength="50" /></td>
    		          <td><input name="Id3_Lg" type="text" id="Id3_Lg" size="30" maxlength="40" /></td>
    		          <td><input name="Id3_Tm" type="text" id="Id3_Tm" size="10" maxlength="10" /></td>
    		          <td><input name="Id3_Tit" type="text" id="Id3_Tit" size="30" maxlength="40" /></td>
  		          </tr>
    		        <tr>
    		          <td>INFORMATICA</td>
    		          <td>LUGAR</td>
    		          <td>TIEMPO</td>
    		          <td>TITULO</td>
  		          </tr>
    		        <tr>
    		          <td><label for="Inf2"></label>
    		            <input name="Inf1" type="text" id="Inf1" size="30" maxlength="50" /></td>
    		          <td><input name="Inf1_Lg" type="text" id="Inf1_Lg" size="30" maxlength="40" /></td>
    		          <td><input name="Inf1_Tm" type="text" id="Inf1_Tm" size="10" maxlength="10" /></td>
    		          <td><input name="Inf1_Tit" type="text" id="Inf1_Tit" size="30" maxlength="40" /></td>
  		          </tr>
    		        <tr>
    		          <td><input name="Inf2" type="text" id="Inf2" size="30" maxlength="50" /></td>
    		          <td><input name="Inf2_Lg" type="text" id="Inf2_Lg" size="30" maxlength="40" /></td>
    		          <td><input name="Inf2_Tm" type="text" id="Inf2_Tm" size="10" maxlength="10" /></td>
    		          <td><input name="Inf2_Tit" type="text" id="Inf2_Tit" size="30" maxlength="40" /></td>
  		          </tr>
    		        <tr>
    		          <td><label for="Inf2"></label>
    		            <label for="Inf2"></label>
    		            <input name="Inf3" type="text" id="Inf3" size="30" maxlength="50" /></td>
    		          <td><input name="Inf3_Lg" type="text" id="Inf3_Lg" size="30" maxlength="40" /></td>
    		          <td><input name="Inf3_Tm" type="text" id="Inf3_Tm" size="10" maxlength="10" /></td>
    		          <td><input name="Inf3_Tit" type="text" id="Inf3_Tit" size="30" maxlength="40" /></td>
  		          </tr>
    		        <tr>
    		          <td>CONDUCCION</td>
    		          <td colspan="2"><label for="Cond"></label>
    		            <select name="Cond" id="Cond">
    		              <option value="SI">SI</option>
    		              <option value="NO">NO</option>
  		              </select></td>
    		          <td><label for="LICENCIA DE CONDUCIR">LICENCIA DE CONDUCIR
    		            <select name="Lic_Cond" id="Lic_Cond">
    		              <option value="SI">SI</option>
    		              <option value="NO">NO</option>
  		              </select>
  		            </label></td>
  		      </tr>
  		    </table>
    		  <table width="952" align="center">
    		    <tr>
    		      <td width="944"><strong>ANALISIS TRAYECTORIA LABORAL</strong></td>
  		      </tr>
  		    </table>
    		  <table width="950">
              <tr>
    		      <td width="945"><strong>1.SI TRABAJA¿POR QUE QUIERE CAMBIAR DE EMPLEO?</strong></td>
  		      </tr>
    		    <tr>
    		      <td width="942"><textarea name="An_T_L_1" cols="110" rows="5" id="An_T_L_1"align="left"></textarea></td>
  		      </tr>
  		    </table>
    		  <table width="944" align="center">
              <tr>
    		      <td width="937"><strong>2.SI ESTA DESEMPLEADO POR QUE DEJO SU ANTERIOR EMPLEO?</strong></td>
  		      </tr>
    		    <tr>
    		      <td width="936"><textarea name="An_T_L_2" cols="110" rows="5" id="An_T_L_2"align="left"></textarea></td>
  		      </tr>
  		    </table>
    		  <table width="940">
    		    <tr>
    		      <td width="932"><strong>REFERENCIAS</strong></td>
  		      </tr>
  		    </table>
    		  <table width="944">
    		    <tr>
    		      <td width="936"><table width="935" border="1" align="center">
    		        <tr>
    		          <td width="246" align="left" scope="col">A.ULTIMO TRABAJO:</td>
    		          <th width="673" align="left" scope="col"><input name="Ult_Tra" type="text" id="Ult_Tra" size="50" maxlength="50" /></th>
  		          </tr>
    		        <tr>
    		          <td>B.CARGO DESEMPEÑADO:</td>
    		          <td><input name="Ult_Cgo" type="text" id="Ult_Cgo" size="50" maxlength="50" /></td>
  		          </tr>
    		        <tr>
    		          <td>C.NOMBRE DEL JEFE:</td>
    		          <td><label for="Def_Eq_Ide"></label>
    		            <input name="Ult_Nom_Jf" type="text" id="textfield9" size="30" maxlength="40" />
    		            CARGO:
    		            <input name="Ult_Cgo_Jf" type="text" id="textfield56" size="25" maxlength="40" />
    		            <label for="Prof_Cony"></label>
    		            TELEFONO:
    		            <label for="Carr_2"></label>
    		            <input name="Ult_Jf_Tf" type="text" id="textfield53" size="10" maxlength="15" /></td>
  		          </tr>
    		        <tr>
    		          <td>D.MOTIVO DE RETIRO:</td>
    		          <td><label for="Carr_4"></label>
    		            <input name="Ult_Mtv_Ret" type="text" id="textfield16" size="40" maxlength="50" />
    		            FECHA:
    		            <label for="Carr_4"></label>
    		            <input name="Ult_Ret_Fch" type="text" id="textfield17" size="10" maxlength="15" /></td>
  		          </tr>
    		        <tr>
    		          <td>E.PENULTIMO TRABAJO:</td>
    		          <td><input name="Pnul_Tra" type="text" id="textfield54" size="50" maxlength="50" /></td>
  		          </tr>
    		        <tr>
    		          <td>F.CARGO DESEMPEÑADO:</td>
    		          <td><input name="Pnul_Cgo" type="text" id="textfield55" size="50" maxlength="50" /></td>
  		          </tr>
    		        <tr>
    		          <td>G.NOMBRE  DEL JEFE:</td>
    		          <td><input name="Pnul_Nom_Jf" type="text" id="textfield52" size="30" maxlength="35" />
    		            CARGO:
    		            <input name="Pnul_Cgo_Jf" type="text" id="textfield57" size="25" maxlength="40" />
    		            <label for="Prof_Cony"></label>
    		            TELEFONO:
    		            <label for="Carr_2"></label>
    		            <input name="Pnul_Jf_Tf" type="text" id="textfield58" size="10" maxlength="15" /></td>
  		          </tr>
    		        <tr>
    		          <td>D.MOTIVO DE RETIRO:</td>
    		          <td><label for="Carr_4"></label>
    		            <input name="Pnul_Mtv_Ret" type="text" id="textfield16" size="35" maxlength="50" />
    		            FECHA:
    		            <label for="Carr_4"></label>
    		            <input name="Pnul_Mtv_Ret_Fch" type="text" id="textfield17" size="15" maxlength="15" /></td>
  		          </tr>
    		        <tr align="left">
    		          <td>E.ANALISIS OTROS CAMBIOS DE TRABAJO:</td>
    		          <td><label for="Id3"></label>
    		            <input name="An_Ot_Cam_Tra" type="text" id="textfield18" size="50" maxlength="50" /></td>
  		          </tr>
  		        </table></td>
  		      </tr>
  		    </table>
    		  <table width="940" align="center">
    		    <tr>
    		      <td width="915" align="left"><p><strong>ANALISIS FAMILIAR
    		        :
    		        <select name="An_Fam" size="1" id="An_Fam">
    		          <option value="SOLTERO">SOLTERO</option>
    		          <option value="CASADO">CASADO</option>
    		          <option value="DIVORCIADO">DIVORCIADO</option>
    		          <option value="VIUDO">VIUDO</option>
  		          </select>
    		        HIJOS:
    		        <select name="Hij" id="Hij">
    		          <option value="SI">SI</option>
    		          <option value="NO">NO</option>
  		          </select>
    		        EDADES
    		        <input name="Eds" type="text" id="textfield11" size="30" />
  		        </strong></p>
    		        <p><strong>PROFESION CONYUGE:
    		          <input name="Prof_Cony" type="text" id="textfield12" size="30" />
  		          </strong></p></td>
  		      </tr>
  		    </table>

    		  <table width="941" align="center">
              <tr>
    		      <td width="892"><strong>COMO DEFINE SUS RELACIONES FAMILIARES?</strong></td>
  		      </tr>
    		    <tr>
    		      <td width="925"><textarea name="Def_Rel_Fam" cols="110" rows="5" id="Def_Rel_Fam"align="left"></textarea></td>
  		      </tr>
  		    </table>
    		  <table width="937" align="center">
    		    <tr>
    		      <td width="929"><strong>ANALISIS EXPECTATIVAS PERSONALES</strong></td>
  		      </tr>
  		    </table>
    		  <table width="935" border="1" align="center">
    		    <tr>
    		      <th width="447" align="left" scope="col"><p>POR QUE SERIA PARTE DE LA FUNDACION KOLPING?</p></th>
    		      <th width="408" align="left" scope="col"> <label for="Id4"></label>
    		        <input name="Porq_Kolp" type="text" id="textfield19" size="60" maxlength="90" />
  		        </th>
  		      </tr>
    		    <tr>
    		      <td><strong>DEFINICION DE TRABAJO IDEAL?</strong></td>
    		      <td><input name="Def_Tra_Id" type="text" id="textfield4" size="60" maxlength="90" /></td>
  		      </tr>
    		    <tr>
    		      <td><strong>DEFINICION DE JEFE IDEAL?</strong></td>
    		      <td><input name="Def_Jf_Id" type="text" id="textfield6" size="60" maxlength="90" /></td>
  		      </tr>
    		    <tr>
    		      <td><strong>DEFINICION DE EQUIPO IDEAL?</strong></td>
    		      <td><input name="Def_Eq_Ide" type="text" id="textfield7" size="60" maxlength="90" /></td>
  		      </tr>
    		    <tr>
    		      <td><strong>POR QUE DEJARIA LA FUNDACION PADRE ADOLFO KOLPING?</strong></td>
    		      <td><input name="Porq_Dej_Ko" type="text" id="textfield8" size="60" maxlength="90" /></td>
  		      </tr>
    		    <tr>
    		      <td><strong>COMENTARIOS ADICIONALES?</strong></td>
    		      <td><input name="Com_Adi" type="text" id="textfield59" size="60" maxlength="90" /></td>
  		      </tr>
  		    </table>

    		  <p>
    		    <input type="submit" name="btnEnviar" value="Enviar datos" />
    		    <input type="reset" name="btnLimpiar" value="Limpiar" />
  		    </p>
			  </td>
		   </tr>
	</tbody></table>
</center>
</form>
</div>
<?php
include_once("../pie.php");
?>

	

	