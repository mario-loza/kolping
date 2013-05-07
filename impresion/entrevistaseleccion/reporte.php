<?php
include_once("../pdf.php");
$titulo="Entrevista de Selección";
mysql_connect("localhost","root","");
mysql_select_db("kolpin");
$sql="SELECT * FROM entrevistaseleccion WHERE CodEntrevistaSeleccion=".$_GET['cod'];
//echo $sql;
$res=mysql_query($sql);
$r=mysql_fetch_array($res);
$pdf=new PPDF("P","mm","letter");
$pdf->AddPage();


$pdf->CuadroCabecera(60,"FECHA",10,$r[Fch]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"PRETENCION SALARIAL",10,$r[Pret_Sal]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"EDAD",10,$r[Ed]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"NOMBRE DEL POSTULANTE",10,$r[Nom_Postulante]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"CARGO AL QUE POSTULA",10,$r[Cgo_Postulante]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"ANALISIS FORMACION ACADEMICA",10,"");
$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"CARRERA",10,$r[Carr_1]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"LUGAR",10,$r[Carr_1_Lg]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TIEMPO",10,$r[Carr_1_Tm]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TITULO",10,$r[Carr_1_Tit]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"CARRERA",10,$r[Carr_2]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"LUGAR",10,$r[Carr_2_Lg]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TIEMPO",10,$r[Carr_2_Tm]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TITULO",10,$r[Carr_2_Tit]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"CARRERA",10,$r[Carr_3]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"LUGAR",10,$r[Carr_3_Lg]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TIEMPO",10,$r[Carr_3_Tm]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TITULO",10,$r[Carr_3_Tit]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"IDIOMA",10,$r[Id1]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"LUGAR",10,$r[Id1_Lg]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TIEMPO",10,$r[Id1_Tm]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TITULO",10,$r[Id1_Tit]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"IDIOMA",10,$r[Id2]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"LUGAR",10,$r[Id2_Lg]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TIEMPO",10,$r[Id2_Tm]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TITULO",10,$r[Id2_Tit]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"IDIOMA",10,$r[Id3]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"LUGAR",10,$r[Id3_Lg]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TIEMPO",10,$r[Id3_Tm]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TITULO",10,$r[Id3_Tit]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"INFORMATICA",10,$r[Inf1]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"LUGAR",10,$r[Inf1_Lg]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TIEMPO",10,$r[Inf1_Tm]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TITULO",10,$r[Inf1_Tit]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"INFORMATICA",10,$r[Inf2]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"LUGAR",10,$r[Inf2_Lg]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TIEMPO",10,$r[Inf2_Tm]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TITULO",10,$r[Inf2_Tit]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"INFORMATICA",10,$r[Inf3]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"LUGAR",10,$r[Inf3_Lg]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TIEMPO",10,$r[Inf3_Tm]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TITULO",10,$r[Inf3_Tit]);
$pdf->Ln();$pdf->Ln();


$pdf->CuadroCabecera(60,"CONDUCCION",10,$r[Cond]);
$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"LICENCIA DE CONDUCIR ",10,$r[Lic_Cond]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"SI TRABAJA¿POR QUE QUIERE CAMBIAR DE EMPLEO?",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"",10,$r[An_T_L_1]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"SI ESTA DESEMPLEADO POR QUE DEJO SU ANTERIOR EMPLEO?",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"",10,$r[An_T_L_2]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"REFERENCIAS",10,"");
$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"ULTIMO TRABAJO",10,$r[Ult_Tra]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"CARGO DESEMPEÑADO",10,$r[Ult_Cgo]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"NOMBRE DEL JEFE",10,$r[Ult_Nom_Jf]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"CARGO JEFE",10,$r[Ult_Cgo_Jf]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TELEFONO JEFE",10,$r[Ult_Jf_Tf]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"MOTIVO DE RETIRO",10,$r[Ult_Mtv_Ret]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"FECHA",10,$r[Ult_Ret_Fch]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"PENULTIMO TRABAJO",10,$r[Pnul_Tra]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"CARGO DESEMPEÑADO",10,$r[Pnul_Cgo]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"NOMBRE DEL JEFE",10,$r[Pnul_Nom_Jf]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"CARGO JEFE",10,$r[Pnul_Cgo_Jf]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"TELEFONO JEFE",10,$r[Pnul_Jf_Tf]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"MOTIVO DE RETIRO",10,$r[Pnul_Mtv_Ret]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"FECHA",10,$r[Pnul_Mtv_Ret_Fch]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"ANALISIS OTROS CAMBIOS DE TRABAJO",10,$r[An_Ot_Cam_Tra]);
$pdf->Ln();$pdf->Ln();


$pdf->CuadroCabecera(60,"ANALISIS FAMILIAR",10,$r[An_Fam]);
$pdf->Ln();
$pdf->CuadroCabecera(60,"HIJOS",10,$r[Hij]);

$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"EDADES",10,$r[Eds]);

$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"PROFESION CONYUGE",10,$r[Prof_Cony]);

$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(60,"COMO DEFINE SUS RELACIONES FAMILIARES?",10,"");
$pdf->Ln();$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Def_Rel_Fam]);
$pdf->Ln();
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"ANALISIS EXPECTATIVAS PERSONALES",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,"");
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"POR QUE SERIA PARTE DE LA FUNDACION KOLPING?",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Porq_Kolp]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"DEFINICION DE TRABAJO IDEAL?",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Def_Tra_Id]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"DEFINICION DE JEFE IDEAL?",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Def_Jf_Id]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"DEFINICION DE EQUIPO IDEAL?",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Def_Eq_Id]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"POR QUE DEJARIA LA FUNDACION PADRE ADOLFO KOLPING?",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Porq_Dej_Kol]);
$pdf->Ln();$pdf->Ln();

$pdf->CuadroCabecera(60,"COMENTARIOS ADICIONALES?",10,"");
$pdf->Ln();
$pdf->CuadroCabecera(5,"-",10,$r[Com_Adi]);
$pdf->Ln();$pdf->Ln();
$pdf->Output();
?>