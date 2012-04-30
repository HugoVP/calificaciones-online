<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Default_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("default");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme();

		$this->Model = $this->model("Default_Model");
	}
	
	public function index() {	

		/*$vars["message"] = __(_("Hello World"));
		$vars["view"]	 = $this->view("show", TRUE);
		
		$this->render("content", $vars);*/

		//for ($i = 10; $i >= 0; $i--) {
		//	print $i . "<br />";
		//}

		//$vars["message"] = __(_("Hello World"));
		//$vars["view"]	 = $this->view("show", TRUE);
		//$this->render("content", $vars);

		$data	= array(
			'carcve'	=> 1,								# Clave de la Carrera
			'carnco'	=> 'LIC.INFORMATICA',				# Nombre abreviado de la Carrera
			'carnom'	=> 'LICENCIATURA EN INFORMATICA',	# Nombre de la Carrera
			'carsit'	=> 1								# Situación de la Carrera
		);

		$ok	= $this->Model->insert($data);

		if ($ok)
			return ____($data);
		return print "Fail";


		/*for($i=1; $i<=10 ; $i++)
		{
			print $i;
		}*/		
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
