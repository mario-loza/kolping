<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
<form method="post" action="evaluacion.php">
<center>

	<table>

    		  <tr>
    		    
    		    <td width="287" valign="top"><h1>EVALUACION DE CURRICULA</h1><h1>FPAK.PC.02-R2</h1></td>
  		    </tr>
  		  </table></td>
  		</tr>
		
		<tr><td height="4" bgcolor="#ff93">&nbsp;</td>
		</tr>
		<tr>
    		<td height="1081" align="center" valign="top"><table width="917">
    		    <tr>
    		      <th width="389" align="left" scope="col">NOMBRE DEL CARGO:</th>
    		      <th width="497" align="left" scope="col"><h4>
    		        <label for="Cargo"></label>
    		        <input name="Cargo" type="text" id="Cargo" size="50" maxlength="50" />
  		        </h4></th>
  		      </tr>
    		    <tr>
    		      <td><strong>NOMBRE DEL POSTULANTE:</strong></td>
    		      <td><label for="Nom_Postulante"></label>
    		        <input name="Nom_Postulante" type="text" id="Nom_Postulante" size="50" maxlength="50" /></td>
  		      </tr>
  		    </table>
    		  <table width="922">
    		    <tr>
    		      <td width="902">A CONTINUACION CALIFIQUE LA INFORMACION DE LA CURRICULA CONSIDERANDO LOS DATOS QUE SE AJUSTEN DIRECTAMENTE CON EL PERFIL REQUERIDO</td>
  		      </tr>
  		    </table>
    		  <table width="915" border="1">
    		    <tr>
    		      <td colspan="2"><strong>FACTOR</strong></td>
    		      <td width="71">PUNTAJE MAXIMO</td>
    		      <td width="144">PUNTAJE OBTENIDO</td>
    		      <td width="147">PUNTAJE PONDERADO</td>
  		      </tr>
    		    <tr>
    		      <td height="106" colspan="2"><p><strong>FORMACION</strong></p>
    		        <p>
    		          <input name="Fc_Form1" type="text" id="Fc_Form1" size="70" maxlength="80" />
    		          <input name="Fc_Form2" type="text" id="Fc_Form2" size="70" maxlength="90" />
    		          <input name="Fc_Form3" type="text" id="Fc_Form3" size="70" maxlength="90" />
    		        </p></td>
    		      <td align="center"><p>&nbsp;</p>
   		          <p>25</p></td>
    		      <td align="center"><p>&nbsp;</p>
   		          <p>
   		            <input name="Ptj_Obt_Fc_Form" type="text" id="Ptj_Obt_Fc_Form" size="10" maxlength="10" />
   		          </p></td>
    		      <td align="center"><p>&nbsp;</p>
   		          <p>
   		            <input name="Ptj_Pond" type="text" id="Ptj_Pond" size="10" maxlength="10" />
   		          </p></td>
  		      </tr>
    		    <tr>
    		      <td colspan="2"><p><strong>ESTUDIOS COMPLEMENTARIOS</strong></p>
                    <p>
                      <input name="Fc_Est_Compl1" type="text" id="Fc_Est_Compl1" size="70" maxlength="90" />
                      <input name="Fc_Est_Compl2" type="text" id="Fc_Est_Compl2" size="70" maxlength="100" />
                      <input name="Fc_Est_Compl3" type="text" id="Fc_Est_Compl3" size="70" maxlength="100" />
                    </p></td>
    		      <td align="center"><p>&nbsp;</p>
   		          <p>15</p></td>
    		      <td align="center"><p>&nbsp;
    		        </p>
    		        <p>
    		          <input name="Ptj_Obt_Compl" type="text" id="Ptj_Obt_Compl" size="10" maxlength="10" />
    		        </p></td>
    		      <td align="center"><p>&nbsp;</p>
   		          <p>
   		            <input name="Ptj_Pond_Compl" type="text" id="Ptj_Pond_Compl" size="10" maxlength="10" />
   		          </p></td>
  		      </tr>
    		    <tr>
    		      <td colspan="2"><p><strong>CURSOS DE ACTUALIZACION</strong></p>
                    <p><strong>
                      <input name="Fc_Cu_Act1" type="text" id="Fc_Cu_Act1" size="70" maxlength="100" />
                    </strong><strong>
                    <input name="Fc_Cu_Act2" type="text" id="Fc_Cu_Act2" size="70" maxlength="100" />
                    </strong><strong>
                    <input name="Fc_Cu_Act3" type="text" id="Fc_Cu_Act3" size="70" maxlength="100" />
                    </strong></p></td>
    		      <td align="center">20</td>
    		      <td align="center"><input name="Ptj_Obt_Fc_Cu_Act" type="text" id="Ptj_Obt_Fc_Cu_Act" size="10" maxlength="10" /></td>
    		      <td align="center"><input name="Ptj_Pond_Fc_Cu_Act" type="text" id="Ptj_Pond_Fc_Cu_Act" size="10" maxlength="10" /></td>
  		      </tr>
    		    <tr>
    		      <td height="122" colspan="2"><p><strong>CURSOS DE ACTUALIZACION</strong></p>
    		        <p>ESPECIFICA EN EL CARGO<strong>: </strong>
    		          <input name="Exp_Esp_Cgo" type="text" id="Fc_Form14" size="70" maxlength="80" />
                    RELACIONADA CON EL CARGO: 
  <input name="Exp_Rel_Cgo" type="text" id="Fc_Form15" size="70" maxlength="80" />
                  </p></td>
    		      <td align="center"><p>&nbsp;</p>
    		        <p>10</p>
<p>15    </p></td>
    		      <td align="center"><p>&nbsp;</p>
   		          <p>
   		            <input name="Ptj_Obt_Exp_Esp" type="text" id="Ptj_Obt_Exp_Esp" size="10" maxlength="10" />
   		          </p>
   		          <p>
   		            <input name="Ptj_Obt_Exp_Rel" type="text" id="Ptj_Obt_Exp_Rel" size="10" maxlength="10" />
   		          </p></td>
    		      <td align="center"><p>&nbsp;</p>
   		          <p>
   		            <input name="Ptj_Pond_Exp_Esp" type="text" id="Ptj_Pond_Exp_Esp" size="10" maxlength="10" />
   		          </p>
   		          <p>
   		            <input name="Ptj_Pond_Exp_Rel" type="text" id="Ptj_Pond_Exp_Rel" size="10" maxlength="10" />
   		          </p></td>
  		      </tr>
    		    <tr>
    		      <td width="195"><strong>ESTABILIDAD LABORAL
    		        
    		      </strong></td>
    		      <td width="324"><strong>
    		        <input name="Estabi_Lab" type="text" id="Estabi_Lab" size="15" />
    		      </strong></td>
    		      <td align="center">5</td>
    		      <td align="center"><input type="text" name="Ptj_Obt_Lab" id="Ptj_Obt_Lab" /></td>
    		      <td align="center"><input type="text" name="Ptj_Pond_Lab" id="Ptj_Pond_Lab" /></td>
  		      </tr>
    		    <tr>
    		      <td><strong>EDAD
                      <label for="Ed"></label>
    		      </strong></td>
    		      <td><strong>
    		        <input name="Ed" type="text" id="Ed" size="15" />
    		      </strong></td>
    		      <td align="center">5</td>
    		      <td align="center"><input type="text" name="Ptj_Obt_Ed" id="Ptj_Obt_Ed" /></td>
    		      <td align="center"><input type="text" name="Ptj_Pond_Ed" id="Ptj_Pond_Ed" /></td>
  		      </tr>
    		    <tr>
    		      <td><strong>PUNTAJE TOTAL</strong></td>
    		      <td>&nbsp;</td>
    		      <td align="center">100</td>
    		      <td align="center"><input type="text" name="Ptj_To_Obt" id="Ptj_To_Obt" /></td>
    		      <td align="center"><input type="text" name="Ptj_To_Pond" id="Ptj_To_Pond" /></td>
  		      </tr>
  		      </table>
    		  <table width="919">
    		    <tr>
    		      <td width="258">PRETENSION SALARIAL:
                    <label for="Pret_Sal"></label></td>
    		      <td><input name="Pret_Sal" type="text" id="Pret_Sal" size="5" maxlength="10" />
   		          $US./BS</td>
   		        </tr>
    		    <tr>
    		      <td>PORCENTAJE OBTENIDO
                    <label for="Porc_Obt">:</label></td>
    		      <td><input name="Porc_Obt" type="text" id="Porc_Obt" size="5" maxlength="10" />
   		          %</td>
   		        </tr>
    		    <tr>
    		      <td>RECOMENDABLE EVALUAR
                  <label for="Rec_Ev">:</label></td>
    		      <td><select name="Rec_Ev" id="Rec_Ev">
    		        <option value="SI">SI</option>
    		        <option value="NO">NO</option>
  		        </select></td>
   		        </tr>
  		    </table>
    		  <table width="922">
    		    
  		    </table>
    		  <table width="922">
              <tr>
    		      <td width="902">OBSERVACIONES:
                  <label for="Obs"></label></td>
  		      </tr>
    		    <tr>
    		      <td width="902"><textarea name="Obs" cols="110" rows="7" id="Obs"></textarea></td>
  		      </tr>
  		    </table>
    		  <table width="914" border="0" cellpadding="0" cellspacing="0">
    		  <tr>
    		    <td width="914" height="76" valign="top"><table width="905" border="0" cellpadding="0" cellspacing="0">
    		      <tr>
    		        <td width="93" height="29" valign="top"><p>                    NOMBRE:
    		            <label for="Nom_Ev"></label>                    
    		        <td colspan="2" valign="top"><input name="Nom_Ev" type="text" id="Nom_Ev" size="50" />                                        
  		        </tr>
    		      <tr>
    		        <td height="29" valign="top">CARGO:
                      <label for="Cgo_Ev"></label>
    		        <td colspan="2" valign="top"><input name="Cgo_Ev" type="text" id="Cgo_Ev" size="50" />                                        
  		        </tr>
    		      <tr>
    		        <td width="93" valign="top"><p>FECHA:
    		          <label for="Fch"></label>
    		        </p></td>
    		        <td width="298" valign="top"><input name="Fch" type="date" id="Fch" size="12" />
    		          AÑO/MES/DIA </td>
    		        <td width="506" valign="top">HORA:
                      <label for="Hr_Reg"></label>                      <input name="Hr_Reg" type="text" id="Hr_Reg" size="15" /></td>
  		          </tr>
  		      </table></tr>
    		  </table>
    		  <p>
    		    <input type="submit" name="btnEnviar" value="Enviar datos" />
    		    <input type="reset" name="btnLimpiar" value="Limpiar" />
  		    </p>
		    <p>&nbsp;</p></td>
		   </tr>
	</tbody></table>
</center>
</form>
</div>
<?php
include_once("../pie.php");
?>

	