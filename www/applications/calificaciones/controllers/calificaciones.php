<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Calificaciones_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("calificaciones");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme('default2');

		$this->helpers('sessions');

		$this->Model = $this->model("Calificaciones_Model");
	}
	
	public function index() {
		$vars["view"]['login']	= $this->view("login", TRUE);

		if (!SESSION('user'))
			return $this->render("login", $vars);
		
		$this->render("content", $vars);
	}

	public function home() {
		$vars["view"]['login']	= $this->view("login", TRUE);

		if (!SESSION('user'))
			return $this->render("login", $vars);

		$nsemesters	= $this->Model->getSemesters(SESSION('user'));
		$grades		= $this->Model->getInfoGrades(SESSION('user'));

		$vars['nsemesters']	= $nsemesters;
		$vars['grades']		= $grades;
		$vars['view']['infogrades']	= $this->view('infogrades', TRUE);
		$vars['view']['semesters']	= $this->view('semesters', TRUE);
		$this->render("content", $vars);
	}
	
	public function graphs() {
		$data	= $this->Model->getStudents();
		____($data);

		$vars["message"] = $data;
		$vars['view']	=	$this->view('show', true);
		$this->render('content', $vars);		
	}

	public function login() {
		if (SESSION('user'))
			return redirect(get('webURL') . _sh . 'calificaciones/home');

		$vars['view']['login']	= $this->view('login', true);
		$this->render('login', $vars);
	}

	public function contact($contactID) {
		$data = $this->Default_Model->contact($contactID);
		____($data);
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
