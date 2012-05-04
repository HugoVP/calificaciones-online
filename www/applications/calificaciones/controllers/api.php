<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Api_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("calificaciones");

		$this->Templates = $this->core("Templates");

		$this->Templates->theme('default2');

		$this->helpers('sessions');

		$this->Model = $this->model("Calificaciones_Model");
	}
	
	public function index() {
		header('Location: ' . get('webURL') . _sh . 'calificaciones/home/');	# Redirect to home
	}
	
	public function graphs() {
		$data	= $this->Model->getStudents();
		____($data);

		$vars["message"] = $data;
		$vars['view']	=	$this->view('show', true);
		$this->render('content', $vars);		
	}

	public function login() {
		$data = $this->Model->validateUser(POST('username'), POST('password'));


		if (!$data)	// El usuario no ha podido ser autentificado
			return print ('El usuario no ha podido ser autentificado');

		SESSION('user', $data['aluctr']);	// Creado variable de SESSION para USER
		SESSION('pass', $data['alucon']);	// Creado variable de SESSION para PASS
		SESSION('last1', $data['aluapp']);
		SESSION('last2', $data['aluapm']);
		SESSION('name', $data['alunom']);
		SESSION('sex', $data['alusex']);
		SESSION('curp', $data['alucur']);
		SESSION('date', $data['alufre']);
		SESSION('carrear', $data['carcve']);

		redirect(get('webURL') . _sh . 'calificaciones/home');
	}

	public function logout() {
		unsetSessions(get('webURL') . _sh . 'calificaciones/home');
	}

	public function contact($contactID) {
		$data = $this->Default_Model->contact($contactID);
		____($data);
	}

	public function pdf() {


		if (!SESSION('user'))
			return redirect(get('webURL') . _sh . 'calificaciones/home');

		/** Se obtienen los datos de la bd*/
		$nsemesters	= $this->Model->getSemesters(SESSION('user'));
		$grades		= $this->Model->getInfoGrades(SESSION('user'));
		
		/* Librerias para el pdf */
		require_once(_corePath .'/libraries/generapdf/tcpdf/config/lang/eng.php');
		require_once(_corePath .'/libraries/generapdf/tcpdf/tcpdf.php');

		$alumno = SESSION('name').' '.SESSION('last1').' '.SESSION('last2');
		$html = '<p>Esta es una impresión en formato PDF de las calificaciones del alumno '.$alumno.'</p><br>
		<h2>Datos de las calificaciones</h2>
			<table class="table table-bordered">
				<tr>
					<td width="350" class="span6">Materia</td>
					<td width="100" class="span1">Calificación</td>
					<td width="100" class="span1">Situación</td>
					<td width="100" class="span1">Créditos</td>
				</tr>';

		if ($grades) 
		{
			foreach ($grades as $grade) 
			{
		
				$html.='<tr>
					<td>'.$grade['matnom'].'</td>
					<td>'.$grade['calval'].'</td>
					<td>'.$grade['calsit'].'</td>
					<td>'.$grade['matcre'].'</td>
				</tr>';
		
			}
		} 
		else 
		{
			$html.='<tr>
				<td colspan="4">
					<div class="alert alert-error">No se han encontrado datos</div>
				</td>
			</tr>';
			
		}
		$html.='</table>';

		// se crea un nuevo documento
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		//Se coloca la información
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('CalificacionesOnline');
		$pdf->SetTitle('Consulta de calificaciones en línea');
		$pdf->SetSubject('Calificaciones');
		$pdf->SetKeywords('materias, calificaciones, línea, alumno');

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		//set margins PDF_MARGIN_LEFT PDF_MARGIN_TOP
		$pdf->SetMargins(20, 30, 20);
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

		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');

		// reset pointer to the last page
		$pdf->lastPage();

		// ---------------------------------------------------------

		//Close and output PDF document
		$pdf->Output(SESSION('aluctr').".pdf", 'I');
		 
		//$html = $_REQUEST['html'];
		//$alumno = $_REQUEST['alumno'];
		$html = 'html';
		$alumno = 'alumno';		
		require_once(_corePath ."/libraries/generapdf/pdf.php");
		print _corePath ."/libraries/generapdf/tcpdf.php";
		//$this->library

	public function page($page) {
		$data = $this->Default_Model->page($page);
		____($data);
	}

	public function test($param1, $param2) {
		print "New dispatcher it's works fine: $param1, $param2";
	}

	public function show($message) {
		$vars["message"] = $message;
		$vars["view"]	 = $this->view("show", TRUE);
		
		$this->render("content", $vars);
		#$this->view("show", $vars);
	}

}
