<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Contacts_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("contacts");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme();

		$this->Contacts_Model = $this->model("Contacts_Model");
	}
	
	public function index() {

		$vars["message"] = __(_("Entraste en contactos"));
		
		$vars["view"]	 = $this->view("contacts", TRUE);
		
		$this->render("content", $vars);	
	}
	

	public function contact($contactID) {
		$data = $this->Contacts_Model->contact($contactID);
		____($data);
	}

}
