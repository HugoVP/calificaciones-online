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
		//____($data);

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
		//$html = $_REQUEST['html'];
		//$alumno = $_REQUEST['alumno'];
		$html = 'html';
		$alumno = 'alumno';		
		require_once(_corePath ."/libraries/generapdf/pdf.php");
		print _corePath ."/libraries/generapdf/tcpdf.php";
		//$this->library
	}

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
