<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Contacts_Model extends ZP_Model {
	
	public function __construct() {
		$this->Db = $this->db();
		
		$this->helpers();
	
		$this->table = "contacts";
	}

	public function contact($contactID) {
		$data = $this->Db->find($contactID,$this->table);

		return $data;
	}
	
}