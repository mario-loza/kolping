<?php
include_once("../pdf.php");
$titulo="Periodo Prueba";
mysql_connect("localhost","root","");
mysql_select_db("kolpin");
$sql="SELECT * FROM periodoprueva WHERE CodPeriodoPrueba=".$_GET['cod'];
//echo $sql;
$res=mysql_query($sql);
$r=mysql_fetch_array($res);
$pdf=new PPDF("P","mm","letter");
$pdf->AddPage();

$pdf->CuadroCabecera(60,"FECHA EVALUACIÓN:",10,$r[Fch_Ev]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"CARGO DEL EVALUADO:",10,$r[Cargo]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"NOMBRE DEL EVALUADO:",10,$r[Nom_Ev]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"AREA:",10,$r[Area]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"FECHA DE INGRESO:",10,$r[Fch_Ing]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"PARAMETROS DE EVALUACION",10,"");
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"COMPETENCIA:",10,$r[Comp]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"ADAPTABILIDAD:",10,$r[Adapt]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"RESPONSABILIDAD:",10,$r[Resp]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"RELACIONES INTERPERSONALES:",10,$r[Rel_Int]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"ASISTENCIA Y PUNTUALIDAD:",10,$r[Asist_Punt]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"CONOCIMIENTO DEL PUESTO:",10,$r[Con_Pue]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"PRODUCTIVIDAD:",10,$r[Prod]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"TRABAJO BAJO PRESION:",10,$r[Trab_Pres]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"PRECISION EN EL TRABAJO:",10,$r[Prec_Trab]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"INICIATIVA:",10,$r[Inic]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"ATENCION Y CONCENTRACION:",10,$r[At_Conc]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"PRESENTACION:",10,$r[Pres]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"TRABAJO EQUIPO:",10,$r[Trab_Eq]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"LIDERAZGO:",10,$r[Lid]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"COMPROMISO:",10,$r[Compr]);
$pdf->Ln();$pdf->Ln();

$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"RESULTADOS DE LA EVALUACION:",10,$r[Calif]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"RECOMENDABLE PARA OTRO CARGO:",10,$r[Recom_Carg]);
$pdf->Ln();$pdf->Ln();

$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"CALIFICACION CUALITATIVA",10,"");
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"OBJETIVOS DE MEJORAMIENTO",10,$r[Coment_Ev]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(130,"RECOMENDACION DE INCORPORAR PERMANENTEMENTE AL CARGO:",10,$r[Inc_Ev]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"CONCLUSIONES",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Concl_Pp]);
$pdf->Ln();$pdf->Ln();

$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"EVALUADO POR CARGO",10,$r["Eval"]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"CARGO",10,$r[Crg_Ev]);
$pdf->Ln();$pdf->Ln();
$pdf->Output();
?>