<?php
include_once("../pdf.php");
$titulo="Evaluación Técnica";
mysql_connect("localhost","root","");
mysql_select_db("kolpin");
$sql="SELECT * FROM evaluaciontecnica WHERE CodEvaluacionTecnica=".$_GET['cod'];
//echo $sql;
$res=mysql_query($sql);
$r=mysql_fetch_array($res);
$pdf=new PPDF("P","mm","letter");
$pdf->AddPage();
$pdf->CuadroCabecera(60,"NOMBRE DEL CARGO:",10,$r[Cargo_Postulante]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"NOMBRE DEL POSTULANTE:",10,$r[Nom_Postulante]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"FECHA:",10,$r[Fch]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"HORA:",10,"Desde:".$r['Hr_De']." a ".$r['Hr_A']);
$pdf->Ln();
$pdf->CuadroCabecera(60,"AREA:",10,$r[Area]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"BAJO LA SUPERVISION DE:",10,$r[Superv]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"NOTA:ES DE SUMA IMPORTANCIA QUE EL EVALUADOR DE MAYOR ENFASIS A AQUELLOS ASPECTOS ",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(60,"QUE SE ENCUENTREN ESTRECHAMENTE RELACIONADOS CON EL PERFIL NECESITADO PARA",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(60,"EL CARGO ESPECIFICO QUE SE EVALUA.",10,"");
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"CONOCIMIENTOS GENERALES",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(60,"APRECIACION:",10,$r[Con_Gral_Apr]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"OBSERVACION:",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Con_Gr_Obs]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"CONOCIMIENTOS TECNICOS",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(60,"APRECIACION:",10,$r[Con_Tec]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"OBSERVACION:",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Con_Tc_Obs]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"PRECENCIA E IMPACTO(CON RELACION AL CARGO)",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(60,"APRECIACION:",10,$r[Pres_Apr]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"OBSERVACION:",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Pres_Obs]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"EXPRESION DE IDEAS(CAPACIDAD DE COMUNICACION VERBAL)",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(60,"APRECIACION:",10,$r[Expr_Apr]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"OBSERVACION:",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Expr_Obs]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"ATENCION Y CONCENTRACION",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(60,"APRECIACION:",10,$r[Atn_Apr]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"OBSERVACION:",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Atn_Obs]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"ACTITUD INTERPERSONAL",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(60,"APRECIACION:",10,$r[Acti_Apr]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"OBSERVACION:",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Acti_Obs]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"DISPOCISION A TRABAJO EN EQUIPO",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(60,"APRECIACION:",10,$r[Disp_Apr]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"OBSERVACION:",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Disp_Obs]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"ACTITUD FRENTE A LA AUTORIDAD",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(60,"APRECIACION:",10,$r[Act_Aut_Apr]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"OBSERVACION:",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Act_Aut_Obs]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"DINAMISMO Y LIDERAZGO",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(60,"APRECIACION:",10,$r[Din_Apr]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"OBSERVACION:",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Din_Obs]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"POTENCIAL DE CRECIMIENTO(DESEMPEÑO)",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(60,"APRECIACION:",10,$r[Potn_Apr]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"OBSERVACION:",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Potn_Obs]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"COMENTARIOS ACERCA DE LOS ASPECTOS ANTERIORES CALIFICADOS CON PUNTAJES DE 1,2 Y 3",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(60,"(CUADRO ANTERIOR) Y OTROS ASPECTOS SOBRESALIENTES OBSERVADOS EN EL DESENVOLVIMIENTO",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(60,"DEL POSTULANTE",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Comnt]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"RESULTADO DE LA EVALUACION",10,$r[Res]);
$pdf->Ln();

$pdf->CuadroCabecera(60,"CONCLUSION ",10,$r[Concl]);
$pdf->Ln();

$pdf->CuadroCabecera(60,"OBSERVACIONES(¿POR QUE ?)",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Obs_P]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"NECESIDAD DE CAPACITACION ?",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Nec_Cap]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"NOMBRE DEL EVALUADOR",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Nom_Ev]);
$pdf->Ln();$pdf->Ln();

$pdf->Output();
?>