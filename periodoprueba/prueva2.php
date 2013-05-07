<?php
$ruta="../";
include_once("../cabecerahtml.php");
?>
<div class="grid_12">
<form method="post" action="periodoprueva.php">

<center>
<table>

    		    <tr>
			    <td width="596" height="74" align="center"> <h1><strong>PERIODO PRUEBA</strong></h1><h1>EVALUACION DEL PERIODO DE PRUEVA</h1><h1>FPAK.PC.02-R2</h1></td>
			    </tr>
			  </table>
    		  <table width="949" height="140" align="center">
    		    <tr>
    		      <td width="328">FECHA DE EVALUACION:</td>
    		      <td width="609"><input  type="date"name="Fecha_Ev" size="50" maxlength="50"/></td>
  		      </tr>
    		    <tr>
    		      <td>NOMBRE DEL EVALUADO:</td>
    		      <td><input  type="text"name="Nom_Ev" size="50" maxlength="50" /></td>
  		      </tr>
    		    <tr>
    		      <td>CARGO:</td>
    		      <td><input  type="text"name="Cargo" size="50" maxlength="50" /></td>
  		      </tr>
    		    <tr>
    		      <td>FECHA DE INGRESIO:</td>
    		      <td><input type="text" name="Fch_Ing"size="50" maxlength="50" /></td>
  		      </tr>
    		    <tr>
    		      <td>AREA: </td>
    		      <td><input type="text"name="Area"  size="50" maxlength="50" /></td>
  		      </tr>
    		    <tr> </tr>
    		    <tr> </tr>
    		    <tr> </tr>
    		    <tr> </tr>
  		    </table>
    		  <table width="946" align="center">
    		    <tr>
    		      <td width="938">POR FAVOR MARQUE CON UNA(X) EN EL RECUADRO CORRESPONDIENTE, NO DEJE NINGUNA FILA SIN MARCAR.</td>
  		      </tr>
  		    </table>
    		  <table width="942" border="1" align="center">
    		    <tr>
    		      <td width="726" align="center">PARAMETROS DE EVALUACION</td>
    		      <td width="200" align="center">PONDERACION</td>
  		      </tr>
    		    <tr>
    		      <td>COMPETENCIA:CAPACITACION DE ENFRENTAR ADECUADAMENTE CONFLICTOS Y SITUACIONES PRESENTEDAS EN EL DESARROLLO DE SUS FUNCIONES,CAPACIDAD DE BRINDAR RESPUESTAS ACERTADAS EN EL DESARROLLO DE SU TRABAJO Y LOS PROBLEMAS QUE SE PRESENTAN EN LOS MISMOS</td>
    		      <td><select name="Comp">
    		        <option value="PESIMO">PESIMO</option>
    		        <option value="REGULAR">REGULAR</option>
    		        <option value="BUENO">BUENO</option>
    		        <option value="MUY BUENO">MUY BUENO</option>
    		        <option value="EXCELENTE">EXCELENTE</option>
    		        <option value="NO APLICA">NO APLICA</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>ADAPTABILIDAD: CAPACIDAD DE ADAPTARSE A LAS NORMAS,CULTURA Y FORMA DE TRABAJO DE LA FUNDACION PADRE ADOLFO KOLPING.</td>
    		      <td><select name="Adapt">
    		        <option value="PESIMO">PESIMO</option>
    		        <option value="REGULAR">REGULAR</option>
    		        <option value="BUENO">BUENO</option>
    		        <option value="MUY BUENO">MUY BUENO</option>
    		        <option value="EXCELENTE">EXCELENTE</option>
    		        <option value="NO APLICA">NO APLICA</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>RESPONSABILIDAD:GRADO DE CUMPLIMIENTO DE SUS DEBERES SIN NECESIDAD DE SUPERVISION CONSTANTE.</td>
    		      <td><select name="Resp">
    		        <option value="PESIMO">PESIMO</option>
    		        <option value="REGULAR">REGULAR</option>
    		        <option value="BUENO">BUENO</option>
    		        <option value="MUY BUENO">MUY BUENO</option>
    		        <option value="EXCELENTE">EXCELENTE</option>
    		        <option value="NO APLICA">NO APLICA</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>RELACIONES INTERPERSONALES:PARTICIPACION.COLABORACION.INTEGRACION.BUENA INTERRELACION CON COMPAÑEROS DE TRABAJO(PARES,SUPERVISORY SUBORDINADOS).FACILIDAD PARA ESTABLECER CONTACTOS.AUSENCIA DE RASGOS COMFLICTIVOS.</td>
    		      <td><select name="Rel_Int">
    		        <option value="PESIMO">PESIMO</option>
    		        <option value="REGULAR">REGULAR</option>
    		        <option value="BUENO">BUENO</option>
    		        <option value="MUY BUENO">MUY BUENO</option>
    		        <option value="EXCELENTE">EXCELENTE</option>
    		        <option value="NO APLICA">NO APLICA</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>ASISTENCIA Y PUNTUALIDAD:APRECIACION DE LA DISCIPLINA EN CUANTO A PUNTUALIDAD Y ASISTENCIA EN EL PERIODO DE PRUEBA.</td>
    		      <td><select name="Asist_Punt">
    		        <option value="PESIMO">PESIMO</option>
    		        <option value="REGULAR">REGULAR</option>
    		        <option value="BUENO">BUENO</option>
    		        <option value="MUY BUENO">MUY BUENO</option>
    		        <option value="EXCELENTE">EXCELENTE</option>
    		        <option value="NO APLICA">NO APLICA</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>CONOCIMIENTO DEL PUESTO:GRADO DE CONOCIMIENTO Y ASIMILACION DE LOS ROLES, DEBERES Y RESPONSABILIDADES DEL PUESTO Y SU APLIFICACION AL DESARROLLO PRACTICO DE LAS TAREAS COTIDIANAS.</td>
    		      <td><select name="Con_Pue">
    		        <option value="PESIMO">PESIMO</option>
    		        <option value="REGULAR">REGULAR</option>
    		        <option value="BUENO">BUENO</option>
    		        <option value="MUY BUENO">MUY BUENO</option>
    		        <option value="EXCELENTE">EXCELENTE</option>
    		        <option value="NO APLICA">NO APLICA</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>PRODUCTIVIDAD:CANTIDAD PROMEDIO DE TRABAJO QUE REALIZA EN COMPARACION CON LO ESPERADO.</td>
    		      <td><select name="Prod">
    		        <option value="PESIMO">PESIMO</option>
    		        <option value="REGULAR">REGULAR</option>
    		        <option value="BUENO">BUENO</option>
    		        <option value="MUY BUENO">MUY BUENO</option>
    		        <option value="EXCELENTE">EXCELENTE</option>
    		        <option value="NO APLICA">NO APLICA</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>TRABAJO BAJO PRESION:CAPACIDAD DE TRABAJAR BAJO PRESION,CONSERVANDO SUS NIVELES DE EFICIENCIA .FACILIDAD DE APRENDIZAJE QUE DEBE DESEMPEÑAR</td>
    		      <td><select name="Trab_Pres">
    		        <option value="PESIMO">PESIMO</option>
    		        <option value="REGULAR">REGULAR</option>
    		        <option value="BUENO">BUENO</option>
    		        <option value="MUY BUENO">MUY BUENO</option>
    		        <option value="EXCELENTE">EXCELENTE</option>
    		        <option value="NO APLICA">NO APLICA</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>PRECISION EN EL TRABAJO: LA EFICIENCIA Y PRECISION EN EL TRABAJO QUE REALIZA HA PROGRESADO HASTA LOS NIVELES REQUERIDOS.</td>
    		      <td><select name="Prec_Trab">
    		        <option value="PESIMO">PESIMO</option>
    		        <option value="REGULAR">REGULAR</option>
    		        <option value="BUENO">BUENO</option>
    		        <option value="MUY BUENO">MUY BUENO</option>
    		        <option value="EXCELENTE">EXCELENTE</option>
    		        <option value="NO APLICA">NO APLICA</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>INICIATIVA:BUSCA MAS RESPONSABILIDADES .IMPRIME DINAMICA EN EL TRABAJO MEJORA SITUACIONES ACTUALES.</td>
    		      <td><select name="Inic">
    		        <option value="PESIMO">PESIMO</option>
    		        <option value="REGULAR">REGULAR</option>
    		        <option value="BUENO">BUENO</option>
    		        <option value="MUY BUENO">MUY BUENO</option>
    		        <option value="EXCELENTE">EXCELENTE</option>
    		        <option value="NO APLICA">NO APLICA</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>ATENCION Y CONCENTRACION:CAPACIDAD DE MANTENER LA ATENCION Y CONCENTRACION PROLONGADOS EN LA EJECUCION DE UNA TAREA,CUIDADO POR LOS DETALLES,ATENCION A ASPECTOS DEL ENTORNO DE TRABAJO,VIGILA EL CONJUNTO DE LAS ACTIVIDADES RELACIONADAS CON SU TRABAJO.</td>
    		      <td><select name="Atencion_Concentracion" id="Atencion_Concentracion">
    		        <option value="PESIMO">PESIMO</option>
    		        <option value="REGULAR">REGULAR</option>
    		        <option value="BUENO">BUENO</option>
    		        <option value="MUY BUENO">MUY BUENO</option>
    		        <option value="EXCELENTE">EXCELENTE</option>
    		        <option value="NO APLICA">NO APLICA</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>PRESENTACION:IMAGEN PERSONAL ACEPTABLE.RESPETO A LAS BUENAS COSTUMBRES.APEGO A NORMAS Y REGLAS ESTABLECIDAS EN LA FUNFACION.</td>
    		      <td><select name="Pres">
    		        <option value="PESIMO">PESIMO</option>
    		        <option value="REGULAR">REGULAR</option>
    		        <option value="BUENO">BUENO</option>
    		        <option value="MUY BUENO">MUY BUENO</option>
    		        <option value="EXCELENTE">EXCELENTE</option>
    		        <option value="NO APLICA">NO APLICA</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>TRABAJO EQUIPO:CAPACIDAD DE CORDINAR LAS ACTIVIDADES PROPIAS CON LAS DE SUS COMPAÑEROS,PARA LOGRAR LOS OBJETIVOS COMUNES.</td>
    		      <td><select name="Trab_Eq">
    		        <option value="PESIMO">PESIMO</option>
    		        <option value="REGULAR">REGULAR</option>
    		        <option value="BUENO">BUENO</option>
    		        <option value="MUY BUENO">MUY BUENO</option>
    		        <option value="EXCELENTE">EXCELENTE</option>
    		        <option value="NO APLICA">NO APLICA</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>LIDERAZGO:CAPACIDAD DE INFLUIR EN OTRAS PERSONAS.LOGRAR EL COMPROMISO DEL PERSONAL EN LAS ACTIVIDADES DE LA EMPRESA.TOLERANCIA A LA FRUSTACION.</td>
    		      <td><select name="Lid_Postulante" id="Lid_Postulante">
    		        <option value="PESIMO">PESIMO</option>
    		        <option value="REGULAR">REGULAR</option>
    		        <option value="BUENO">BUENO</option>
    		        <option value="MUY BUENO">MUY BUENO</option>
    		        <option value="EXCELENTE">EXCELENTE</option>
    		        <option value="NO APLICA">NO APLICA</option>
  		        </select></td>
  		      </tr>
    		    <tr>
    		      <td>COMPROMISO:EXHIBE MOTIVACION POR SU TRABAJO,DISPONIBILIDAD DE TIEMPO PARA EL TRABAJO ANTEPONIENDO A LOS PERSONALES , HABILIDAD DE COMPROMETERSE SON LOS RESULTADOS ESPERADOS DE SU TRABAJO ,INICIATIVA HACIA EL PROGRESO.</td>
    		      <td><select name="Compr">
    		        <option value="PESIMO">PESIMO</option>
    		        <option value="REGULAR">REGULAR</option>
    		        <option value="BUENO">BUENO</option>
    		        <option value="MUY BUENO">MUY BUENO</option>
    		        <option value="EXCELENTE">EXCELENTE</option>
    		        <option value="NO APLICA">NO APLICA</option>
  		        </select></td>
  		      </tr>
  		    </table>
              <table width="946" align="center">
              <tr>
    		      <td width="920"><strong>RESULTADOS DE LA EVALUACION </strong></td>
  		      </tr>
                <tr>
                  <td width="921" align="left"><p>
                    <select name=Calif id="Calif">
                      <option value="RECOMENDABLE">RECOMENDABLE</option>
                      <option value="RECOMENDABLE CON OBSERVACIONES">RECOMENDABLE CON OBSERVACIONES</option>
                      <option value="NO RECOMENDABLE">NO RECOMENDABLE</option>
                      <option value="RECOMENDABLE PARA OTRO CARGO">RECOMENDABLE PARA OTRO CARGO</option>
                    </select>
                  SI ES RECOMENDABLE PARA OTRO CARGO </p>
                    <p>NOMBRELO:
  <label for="Recom_Carg2"></label>
                      <input name="Nom" type="text" id="Recom_Carg2" size="40" maxlength="40" />
                  </p></td>
                </tr>
              </table>
              <table width="944" align="center">
                <tr>
                  <td width="922" align="left"><strong>CALIFICACION CUALITATIVA</strong></td>
                </tr>
              </table>
              <table width="940" align="center">
                <tr>
                  <td width="916" align="left"><strong>POR FAVOR EMITIR CRITERIOS,OPORTUNIDADES DE MEJORA Y OTROS ASPECTOS QUE DESEA DAR A CONOCER SOBRE EL EMPLEADO EVALUADO.</strong></td>
                </tr>
              </table>

              <table width="942" align="center">
               <tr>
                  <td width="919" align="left"><strong>OBJETIVOS DE MEJORAMIENTO</strong></td>
                </tr>
                <tr>
                  <td width="934" align="left"><textarea name="Coment_Ev" cols="112" rows="6"></textarea></td>
                </tr>
              </table>
              <table width="939" align="center">
                <tr>
                  <td width="917" align="left"><p><strong>REALIZA LA EVALUACION RESPECTIVA, CONCLUYE CON LA RECOMENDACION DE:</strong><strong>
                      <select name="Inc_Ev" id="Inc_Ev">
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                      </select>
                      <strong>I</strong>NCORPORAR PERMANENTEMENTE AL CARGO</strong></p></td>
                </tr>
              </table>

              <table width="939" align="center">
              <tr>
                  <td width="915" align="left"><strong>CONCLUSIONES(LLENADO POR EL PERSONAL DE LA OFICINA NACIONAL DE LA FUNDACION ):</strong></td>
                </tr>
                <tr>
                  <td width="931" align="left"><textarea name="Concl_Pp" id="Concl_Pp" cols="112" rows="8"></textarea></td>
                </tr>
              </table>
              <table width="946" align="center">
                <tr>
                  <td width="198" align="left"><p>EVALUADO POR: CARGO: </p></td>
                  <td width="711" align="left"><input name="Eval" type="text" id="textfield9" size="50" /></td>
                </tr>
                <tr>
                  <td align="left">CARGO:
                  <label for="textfield10"></label></td>
                  <td width="711" align="left"><input name="Crg_Ev" type="text" id="textfield10" size="50" /></td>
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

	
	