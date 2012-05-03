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

	public function getInfo($user) {
		return $this->Db->query("SELECT DISTINCT matsem FROM zan_calificaciones NATURAL JOIN zan_materias WHERE aluctr = '$user' ORDER BY matsem ASC");
	}

	public function getSemesters($user) {
		return $this->Db->query("SELECT DISTINCT matsem FROM zan_calificaciones NATURAL JOIN zan_materias WHERE aluctr = '$user' ORDER BY matsem ASC");
	}

	public function getInfoGrades($user) {
		return $this->Db->query("SELECT * FROM zan_calificaciones NATURAL JOIN zan_materias WHERE aluctr = '$user' ");
		/*$this->Db->from('calificaciones');
		$this->Db->join('zan_materias', "zan_calificaciones.aluctr = '$user'", 'LEFT');		
		$data	= $this->Db->get();*/
	}
}