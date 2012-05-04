<?php
/**
 * Access from index.php:
 *Gersain Aguilar pardo
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Admin_Controller extends ZP_Controller {
	
	public function __construct() {
		
		$this->app("admin");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme();

		$this->Admin_Model = $this->model("Admin_Model");
	}
	
	public function index() {

		$vars["message"] = __(_("Entraste en administrador"));
		
		$vars["view"]	 = $this->view("admin", TRUE);
		
		$this->render("content", $vars);	
	}
	

	public function contact($contactID) {

		$data = $this->Admin_Model->contact($contactID);
		____($data);
	
	}

}
