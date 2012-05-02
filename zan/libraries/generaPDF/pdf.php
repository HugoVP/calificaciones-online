<?php 
/********* VERIFICA SI ESTA LOGUEADO EL USUARIO ***************/


require_once('tcpdf/config/lang/eng.php');
require_once('tcpdf/tcpdf.php');

/*****************************************************************************************/

//$numero_control = $_REQUEST['nctrl'];
$html = 'html';
    $alumno = 'alumno';



/******************************************************************************************/
//REALIZAR CONSULTA A LA BD PARA OBJETNER LOS DATOS
/******************************************************************************************/
/*$query = "select * from zan_alumnos natural join zan_carreras natural join zan_materias natural join zan_calificaicones where aluctr = '$numero_control'";

$result = mysql_query($query) or die(mysql_error());

if(mysql_num_rows($result) == 0)
  return 0;

$cal = mysql_fetch_array($result);
*/
/******************************************************************************************/

/******************************************************************************************/


/******************************************************************************************/


/******************************************************************************************/
	
// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Set font
        $this->SetFont('helvetica', 'N', 10);
        $this->SetY(15);
        // Title
        $html = '<table style="border-collapse:collapse; font-family:Arial, Helvetica, sans-serif" border="1" cellspacing="0" cellpadding="0" width="620">
        <tr>
          <td height="110" width="150" rowspan="3" align="center" valign="middle">
          &nbsp;<br><img src="' . _corePath . "/libraries/generapdf/formatoliberacionhoras_clip_image002.jpg" .  '/>
        </td>
          
        <td height="60" width="270" align="center" valign="middle">
          <strong> Formato para Boleta de Acreditación de Actividades Culturales, Deportivas y Recreativas.</strong>
        </td>
          
        <td width="200" valign="middle">
          <strong> Código:SNEST/D-VI-PO-003-05</strong>
        </td> 
        </tr>

        <tr>    
        <td rowspan="2" valign="middle" align="center">
          <strong><br> Referencia a la Norma ISO 9001:2008  7.2.1</strong>
        </td>

        <td height="25" valign="middle">
          <strong> Revisión: 3</strong>
        </td>  
        </tr>

        <tr>
          <td valign="top">
          <strong> Página '.$this->getAliasNumPage().'/'.$this->getAliasNbPages().'</strong>
        </td>
        </tr>
      </table>';
       $this->writeHTML($html, true, false, true, false, '');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Página '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}

// se crea un nuevo documento
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

//Se coloca la información
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('CalificacionesOnline');
$pdf->SetTitle('Consulta de calificaciones en línea');
$pdf->SetSubject('Kardex');
$pdf->SetKeywords('materias, calificaciones, línea, alumno');

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins PDF_MARGIN_LEFT PDF_MARGIN_TOP
$pdf->SetMargins(20, 60, 20);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage(); 

$html = "<p>Esta es una impresión en formato PDF de las calificaciones del alumno ".$alumno."</p><br>".$html;
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output("000.pdf", 'I');
 
?>