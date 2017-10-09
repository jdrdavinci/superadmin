<?php
class SuperheroModel extends CI_Model {

	public $id;
	public $name;
	public $gender;
	public $affiliationId;

	public function __construct()
	{
			parent::__construct();
	}

	public function getSuperheroes(){
			$this->db->order_by('id', 'ASC');
			$query = $this->db->get('superheroes');
			return $query->result_array();
	}
}
?>      