<?php
include_once("fpdf/fpdf.php");
	class PPDF extends FPDF{
		var $ancho=176;
		function Header(){
			
			$this->SetLeftMargin(18);
			
			global $titulo;
			$fecha=date("d-m-Y");
			
			$this->Image("../../logo_kolping_infopunkt.jpg",10,10,195,30);
			$this->ln(10);
			/*$this->Fuente("",$tam);
			
			$this->SetXY(34,12);
			$this->Cell(55,4,utf8_decode($title));
			$this->Fuente("B",8);
			$this->SetXY(34,16);
			$this->Cell(55,4,utf8_decode($gestion),0,0,"C");*/
			$this->ln(20);	
			//$this->Cell($this->ancho,0,"",1,1);
			$this->ln(5);	
			$this->Fuente("B",18);
			$this->Cell($this->ancho,4,utf8_decode($titulo),0,5,"C");
			$this->ln(2);
			$this->CuadroCabecera(30,"Fecha: ",20,$fecha);
			$this->Pagina();
			$this->ln(2);
			$this->ln();
			$this->Cell($this->ancho,0,"",1,1);
			$this->ln(10);
		}
		function Pagina(){
			global $idioma;
			$this->AliasNbPages();
			$this->CuadroCabecera(15,"Página".":",20,$this->PageNo()." de {nb}");
		}
		function Fuente($tipo="B",$tam=10){
			$this->SetFillColor(234,234,234);
			$this->SetFont("Arial",$tipo,$tam);	
		}
		function CuadroCabecera($txt1Ancho,$txt1,$txt2Ancho,$txt2){
			$this->Fuente("B");
			$this->Cell($txt1Ancho,4,utf8_decode($txt1),0,0,"L");
			$this->Fuente("");
			$this->Cell($txt2Ancho,4,utf8_decode($txt2),0,0,"L");
		}
		function TituloCabecera($txtAncho,$txt,$tam=10,$borde=1,$align="C"){
			$this->Fuente("B",$tam);
			$this->Cell($txtAncho,4,utf8_decode($txt),$borde,0,$align);	
		}
		function CuadroCuerpo($txtAncho,$txt,$relleno=0,$align="L",$borde=0,$tam=9){
			$this->Fuente("",$tam);
			$this->Cell($txtAncho,5,utf8_decode($txt),$borde,0,$align,$relleno);	
		}
		function CuadroCuerpoPersonalizado($txtAncho,$txt,$relleno=0,$align="L",$borde=0,$tipo=""){
			$this->Fuente($tipo);
			$this->Cell($txtAncho,5,utf8_decode($txt),$borde,0,$align,$relleno);	
		}
		function CuadroCuerpoResaltar($txtAncho,$txt,$relleno=0,$align="L",$borde=0,$resaltar=2){
			$this->Fuente("");
			switch($resaltar){
				//case 1:{$this->SetFillColor(179,179,179);}break;
				//case 2:{$this->SetFillColor(135,135,135);}break;
				case 2:{$this->SetFillColor(190,190,190);}break;
				case 1:{$this->SetFillColor(210,210,210);}break;
			}
			$this->Cell($txtAncho,5,utf8_decode($txt),$borde,0,$align,$relleno);	
		}
		function CuadroNombre($txtAncho,$Paterno,$Materno,$Nombres,$Full=0,$relleno){
			if($Full){
				$this->CuadroCuerpo($txtAncho,ucwords($Paterno." ".$Materno." ".$Nombres),$relleno);
			}else{
				$Nombre=array_shift(explode(" ",$Nombres));
				$this->CuadroCuerpo($txtAncho,ucwords($Paterno." ".$Materno." ".$Nombre),$relleno);
			}		
		}
		function CuadroNombreSeparado($txtAnchoP,$Paterno,$txtAnchoM,$Materno,$txtAnchoN,$Nombres,$Full,$relleno){
			if($Full){
				$this->CuadroCuerpo($txtAnchoP,ucwords($Paterno),$relleno);
				$this->CuadroCuerpo($txtAnchoM,ucwords($Materno),$relleno);
				$this->CuadroCuerpo($txtAnchoN,ucwords($Nombres),$relleno);
			}else{
				$Nombre=array_shift(explode(" ",$Nombres));
				$this->CuadroCuerpo($txtAnchoP,ucwords($Paterno),$relleno);
				$this->CuadroCuerpo($txtAnchoM,ucwords($Materno),$relleno);
				$this->CuadroCuerpo($txtAnchoN,ucwords($Nombre),$relleno);
			}
		}
		function Footer()
		{	global $lema;
			$this->SetAutoPageBreak(true,15);
			// Posición: a 1,5 cm del final
			$this->SetY(-15);
			// Arial italic 8
			$this->Fuente("I",8);
			// Número de página
			$this->Cell($this->ancho,0,"",1,1);
			$anio=date("Y");
			$this->Cell($this->ancho,4,"Kolping ".date("Y"),0,1,"C");
			
			
		}
	}
?>