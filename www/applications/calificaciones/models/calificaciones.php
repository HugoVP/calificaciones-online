<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Calificaciones_Model extends ZP_Model {
	
	public function __construct() {
		$this->Db = $this->db();
		
		$this->helpers();
	
		$this->table = "alumnos";
	}

	public function getStudents() {
		return $this->Db->findAll($this->table);
	}

	//public function validateUser($data) {
	public function validateUser($user, $pass) {
		$data	= $this->Db->find($user, $this->table);

		if ($data[0]['alucon'] === $pass)
			return $data[0];
		return false;
	}
}