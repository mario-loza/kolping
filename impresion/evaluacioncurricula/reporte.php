<?php
include_once("../pdf.php");
$titulo="Evaluación de la Curricula";
mysql_connect("localhost","root","");
mysql_select_db("kolpin");
$sql="SELECT * FROM evaluacioncurricula WHERE CodEvaluacionCurricula=".$_GET['cod'];
//echo $sql;
$res=mysql_query($sql);
$r=mysql_fetch_array($res);
$pdf=new PPDF("P","mm","letter");
$pdf->AddPage();
$pdf->CuadroCabecera(60,"NOMBRE DEL CARGO",10,$r[Cargo]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"NOMBRE DEL POSTULANTE",10,$r[Nom_Postulante]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"FORMACION ",10,"");
$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Fc_Form1]);
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Fc_Form2]);
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Fc_Form3]);
$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE MAXIMO",10,25);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE OBTENIDO",10,$r[Ptj_Obt_Fc_Form]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE PONDERADO",10,$r[Ptj_Pond]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"ESTUDIOS COMPLEMENTARIOS",10,"");
$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Fc_Est_Compl1]);
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Fc_Est_Compl2]);
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Fc_Est_Compl3]);
$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE MAXIMO",10,15);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE OBTENIDO",10,$r[Ptj_Obt_Compl]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE PONDERADO",10,$r[Ptj_Pond_Compl]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"CURSOS DE ACTUALIZACION",10,"");
$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Fc_Cu_Act1]);
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Fc_Cu_Act2]);
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Fc_Cu_Act3]);
$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE MAXIMO",10,20);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE OBTENIDO",10,$r[Ptj_Obt_Fc_Cu_Act]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE PONDERADO",10,$r[Ptj_Pond_Fc_Cu_Act]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"CURSOS DE ACTUALIZACION",10,"");
$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"ESPECIFICA EN EL CARGO:",10,$r[Exp_Esp_Cgo]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE MAXIMO",10,10);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE OBTENIDO",10,$r[Ptj_Obt_Exp_Esp]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE PONDERADO",10,$r[Ptj_Pond_Exp_Esp]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"RELACIONADA CON EL CARGO",10,$r[Exp_Rel_Cgo]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE MAXIMO",10,15);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE OBTENIDO",10,$r[Ptj_Obt_Exp_Rel]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE PONDERADO",10,$r[Ptj_Pond_Exp_Rel]);
$pdf->Ln();$pdf->Ln();


$pdf->CuadroCabecera(60,"ESTABILIDAD LABORAL",10,$r[Estb_Lab]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE MAXIMO",10,$r[5]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE OBTENIDO",10,$r[Ptj_Obt_Estb_Lab]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE PONDERADO",10,$r[Ptj_Pond_Estb_Lab]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"EDAD",10,$r[Ed]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE MAXIMO",10,$r[5]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE OBTENIDO",10,$r[Ptj_Obt_Ed]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE PONDERADO",10,$r[Ptj_Pond_Ed]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"PUNTAJE TOTAL",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE MAXIMO",10,$r[100]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE OBTENIDO",10,$r[Ptj_To_Obt]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PUNTAJE PONDERADO",10,$r[Ptj_To_Pond]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"PRETENSION SALARIAL",10,$r[Pret_Sal]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PORCENTAJE OBTENIDO",10,$r[Porc_Obt]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"RECOMENDABLE EVALUAR",10,$r[Rec_Ev]);
$pdf->Ln();$pdf->Ln();

$pdf->Ln();
$pdf->CuadroCabecera(60,"OBSERVACIONES",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(1,"",10,$r[Obs]);
$pdf->Ln();

$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"NOMBRE",10,$r[Nom_Ev]);

$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"CARGO",10,$r[Cgo_Ev]);

$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"FECHA",10,$r[Fch]);
$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"HORA",10,$r[Hr_Reg]);
$pdf->Ln();
$pdf->Output();
?>